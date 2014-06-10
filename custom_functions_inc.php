<?php
function custom_function_override_get_columns_to_view( $p_columns_target = COLUMNS_TARGET_VIEW_PAGE ) {
	$t_columns = array();
	$t_project_id = helper_get_current_project();
 
	if ( $p_columns_target == COLUMNS_TARGET_CSV_PAGE ) {
		$t_columns[] = 'id'; // localized: 'id',
		$t_columns[] = 'project_id'; // 'email_project'
		$t_columns[] = 'reporter_id'; // 'reporter'
		$t_columns[] = 'handler_id'; // 'assigned_to'
		$t_columns[] = 'priority'; // 'priority'
		$t_columns[] = 'severity'; // 'severity'
		$t_columns[] = 'reproducibility'; // 'reproducibility'
		$t_columns[] = 'custom_client'; // 'client'
		$t_columns[] = 'custom_No fiche client'; // 'numero de fiche client'
//		$t_columns[] = 'projection'; // 'projection'
		$t_columns[] = 'category'; // 'category'
		$t_columns[] = 'date_submitted'; // 'date_submitted'
//		$t_columns[] = 'eta'; // 'eta'
//		$t_columns[] = 'os'; // 'os'
//		$t_columns[] = 'os_build'; // 'os_version'
//		$t_columns[] = 'platform'; // 'platform'
		$t_columns[] = 'view_state'; // 'view_status'
		$t_columns[] = 'last_updated'; // 'last_update'
		$t_columns[] = 'summary'; // 'summary'
		$t_columns[] = 'status'; // 'status'
		$t_columns[] = 'resolution'; // 'resolution'
		$t_columns[] = 'custom_contact'; // 'contact'
		$t_columns[] = 'custom_Domaine'; // 'domaine'
		$t_columns[] = 'custom_Nom du programme'; // 'nom du programme'
		$t_columns[] = 'custom_Version du programme'; // 'version du programme'
		$t_columns[] = 'custom_Date de correction probable'; // 'date de correction probable'
		$t_columns[] = 'custom_Numero de livraison'; // 'numero de livraison'
		$t_columns[] = 'custom_Environnement concerne'; // 'environnement concerne'
		$t_columns[] = 'custom_Mois ouverture'; // 'Mois ouverture'
		$t_columns[] = 'custom_Mois cloture'; // 'Mois cloture'
		$t_columns[] = 'custom_ventilation client'; // 'ventilation client'
		$t_columns[] = 'custom_date de livraison'; // 'date de livraison'
		$t_columns[] = 'custom_Nature'; // 'nature'
		$t_columns[] = 'custom_Categorie Dev'; // 'categorie de developpement'
		$t_columns[] = 'custom_Sous categorie Dev'; // 'sous categorie de developpement'
		$t_columns[] = 'custom_Version minimum'; // 'version minimum'
		$t_columns[] = 'custom_Identifiant de regroupement'; // 'identifiant de regroupement'
		$t_columns[] = 'custom_Objectif dev'; // 'objectif'
		$t_columns[] = 'custom_Revision(s)'; // 'revision'
		$t_columns[] = 'custom_Commentaire-Documentation'; // 'commentaire documentation'
		$t_columns[] = 'custom_Projet SVN'; // 'projet svn'
		$t_columns[] = 'custom_Branche'; // 'branche'
		$t_columns[] = 'custom_Temps initial'; // 'temps initial'
		$t_columns[] = 'custom_Temps non pr '; // 'temps non prevu'
		$t_columns[] = 'custom_Temps RAF'; // 'temps restant � faire'
		$t_columns[] = 'custom_Test integration'; // 'test integration'
		$t_columns[] = 'custom_Responsable technique'; // 'Responsable technique'
		$t_columns[] = 'fixed_in_version'; // 'fixed_in_version';
		$t_columns[] = 'duplicate_id'; // 'duplicate_id'
		$t_columns[] = 'toto_id'; 
	} else {
		$t_columns[] = 'selection';
 
		if ( $p_columns_target == COLUMNS_TARGET_VIEW_PAGE ) {
			$t_columns[] = 'edit';
		}
 
		$t_columns[] = 'priority';
		$t_columns[] = 'id';
                $t_columns[] = 'custom_No fiche client'; // Nouvelle colonne No fiche client.
 
		$t_enable_sponsorship = config_get( 'enable_sponsorship' );
		if ( ON == $t_enable_sponsorship ) {
			$t_columns[] = 'sponsorship_total';
		}
 
		$t_columns[] = 'bugnotes_count';
 
		#$t_show_attachments = config_get( 'show_attachment_indicator' );
		#if ( ON == $t_show_attachments ) {
		#	$t_columns[] = 'attachment';
		#}
 
		$t_columns[] = 'category';
		$t_columns[] = 'severity';
		$t_columns[] = 'status';
                $t_columns[] = 'resolution';
		$t_columns[] = 'last_updated';
		$t_columns[] = 'custom_client';
		$t_columns[] = 'summary';
                $t_columns[] = 'custom_Objectif dev'; // Nouvelle colonne Objectif.
		if ($t_project_id ==11) {
			$t_columns[] = 'custom_Valeur Ajoutee';
		}	
	}
 
	return $t_columns;
}

# This function prints the custom buttons on the current view page based on specified bug id
# and the context.  The printing of the buttons will typically call html_button() from
# html_api.php.  For each button, this function needs to generate the enclosing '<td>' and '</td>'.
function custom_function_override_print_bug_view_page_custom_buttons( $p_bug_id ) {
	
	# TRANS_DEV button
	echo '</tr><tr>';
	
	echo '<td class="center">';
	$p_is_difffernet_project = true;
	$t_bug_array = relationship_get_all($p_bug_id, $p_is_difffernet_project);
	# on verifie que l'utilisateur fait partie des reponsables consultants
	$p_user_array = config_get( 'trans_dev_de_users' );
	$p_user_id = auth_get_current_user_id();
	$p_is_trans_dev_de_user = false;
	
	foreach($p_user_array as $t_user_id) {
		if ($p_user_id == $t_user_id) {
			$p_is_trans_dev_de_user = true;
		}
	}
	
	
	if( ((access_has_bug_level( config_get( 'trans_dev_bug_threshold' ), $p_bug_id ) 
				&& bug_get_field( $p_bug_id, 'status' ) < 70)
			|| ($p_is_trans_dev_de_user 
				&& bug_get_field( $p_bug_id, 'status' ) == 10 
				&& category_get_name( bug_get_field( $p_bug_id, 'category_id')) == 'DEMANDE d\'évolution'))
		&& empty($t_bug_array)) {
		html_button( 'bug_actiongroup_page.php', lang_get( 'transmit_bug_button' ), array( 'bug_arr[]' => $p_bug_id, 'action' => 'EXT_TRANS_DEV' ) );
	}
	echo '</td>';
	
	echo '</tr>';

}
?>
