<?php
# MantisBT - a php based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

	/**
	 * @package MantisBT
	 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
	 * @copyright Copyright (C) 2002 - 2010  MantisBT Team - mantisbt-dev@lists.sourceforge.net
	 * @link http://www.mantisbt.org
	 */

	/**
	 * Prints the title for the custom action page.
	 */
	function action_trans_dev_print_title() {
        echo '<tr class="form-title">';
        echo '<td colspan="2">';
        #echo lang_get( 'tans_dev_title' );
        echo '</td></tr>';
	}

	/**
	 * Prints the field within the custom action form.  This has an entry for
	 * every field the user need to supply + the submit button.  The fields are
	 * added as rows in a table that is already created by the calling code.
	 * A row has two columns.
	 */
	function action_trans_dev_print_fields() {
		echo '<tr class="row-1" valign="top"><td class="category">',
		lang_get( 'trans_dev_bugs_conf_msg' ), 
		'</td><td><select name="project_id">',
		print_project_option_list( 11, false ), 
		'</select></td></tr>';
	
		echo '<tr><td colspan="2"><center><input type="submit" class="button" value="' . lang_get( 'transmit_bug_button' ) . ' " /></center></td></tr>';
	}

	/**
	 * Validates the action on the specified bug id.
	 *
	 * @returns true|array Action can be applied., ( bug_id => reason for failure )
	 */
	function action_trans_dev_validate( $p_bug_id ) {
		
		
		$t_failed_validation_ids = array();
		$t_bug_id = $p_bug_id;
		$f_project_id = gpc_get_int( 'project_id' );

		
		if ( !access_has_project_level( config_get( 'report_bug_threshold' ), $f_project_id ) ) {
			$t_failed_validation_ids[$t_bug_id] = lang_get( 'bug_actiongroup_access' );
			return $t_failed_validation_ids;
		}
		return true;
	}

	/**
	 * Executes the custom action on the specified bug id.
	 *
	 * @param $p_bug_id  The bug id to execute the custom action on.
	 * @returns true|array Action executed successfully., ( bug_id => reason for failure )
	 */
	function action_trans_dev_process( $p_bug_id ) {
		$f_project_id = gpc_get_int( 'project_id' );
		$t_bug_id = $p_bug_id;
		
		bug_ensure_exists( $t_bug_id );

		$tpl_bug = bug_get( $t_bug_id, true );
		//on copie dans le projet cible
		$t_new_bug_id = bug_copy( $t_bug_id, $f_project_id, true, false, false, true, true, false );
		
		//on met le num�ro de la fiche dans Fiche client
		$f_fiche_client = custom_field_get_value(1,$t_bug_id);
		echo $f_fiche_client;
		if (null == $f_fiche_client || '' == $f_fiche_client ) {
			custom_field_set_value(1,$t_bug_id, $t_bug_id, true);
			custom_field_set_value(1,$t_new_bug_id, $t_bug_id, true);
		}
		bug_set_field($t_new_bug_id,'handler_id', 0 );
		bug_set_field($t_new_bug_id,'status', 10 );
		//lorsqu'on copie on met la m�me date de cr�ation ca me plait pas trop
		bug_set_field($t_new_bug_id,'date_submitted', bug_get_field($t_new_bug_id,'last_updated') );
		//on rajoute la relation
		relationship_add($t_new_bug_id, $t_bug_id, BUG_DEPENDANT);
		
		//petite feinte je rajoute le nouveau bug dans l'historique faute de mieux
		last_visited_issue($t_new_bug_id);
		
		//on transmet en dev si pas demande d'évolution
		if (category_get_name($tpl_bug->category_id) != 'DEMANDE d\'évolution'){
			bug_set_field( $p_bug_id, 'status', 70 );
		}
		
		
        return true;
    }
