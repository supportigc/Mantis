<?php
	require_once( 'igc_config_inc.php' );


//        ######################################################################################################
//        # Nouvelles couleurs mantis + ajout variable d'etat 'livre / en attente de recette' IGC-ABR le 17-10-08
//        ######################################################################################################

        # --- status color codes ----------
        $g_status_colors                = array                        ( 'new'                  => '#fa9e98', # red,
                                                                         'feedback'             => '#8cacda', # purple
        																 'pris'             	=> '#e2bc74', # blondeur 	
                                                                         'acknowledged'         => '#ffd2aa', # orange
                                                                         'assigned'             => '#c8c8ff', # blue
                                                                         'transmit'            	=> '#ffffb0', # yellow
                                                                         'resolved'             => '#cceedd', # buish-green
                                                                         'repondu'              => '#7fc5c3', # blue green
                                                                         'intest'               => '#b7d2aa', # light green
                                                                         'closed'               => '#e8e8e8'); # light gray

        #########################################################################################################
        # Mantis File Upload Settings --> modif du mode d'updoad : passage en mode DISK pour ecrire sur le serveur
        #########################################################################################################

        # --- file upload settings --------
        # This is the master setting to disable *all* file uploading functionality
        #
        # If you want to allow file uploads, you must also make sure that they are
        #  enabled in php.  You may need to add 'file_uploads = TRUE' to your php.ini
        #
        # See also: $g_upload_project_file_threshold, $g_upload_bug_file_threshold,
        #   $g_allow_reporter_upload
        $g_allow_file_upload    = ON;

        # Upload destination: specify actual location in project settings
        # DISK, DATABASE, or FTP.
        $g_file_upload_method   = DISK;

        # When using FTP or DISK for storing uploaded files, this setting control
        # the access permissions they will have on the web server: with the default
        # value (0400) files will be read-only, and accessible only by the user
        # running the apache process (probably "apache" in Linux and "Administrator"
        # in Windows).
        # For more details on unix style permissions:
        # http://www.perlfect.com/articles/chmod.shtml
        $g_attachments_file_permissions = 0400;

        # FTP settings, used if $g_file_upload_method = FTP
        $g_file_upload_ftp_server       = 'ftp.myserver.com';
        $g_file_upload_ftp_user         = 'readwriteuser';
        $g_file_upload_ftp_pass         = 'readwritepass';

        # Maximum file size that can be uploaded
        # Also check your PHP settings (default is usually 2MBs)
        $g_max_file_size                = 5000000; # 5 MB

        # Files that are allowed or not allowed.  Separate items by commas.
        # eg. 'php,html,java,exe,pl'
        # if $g_allowed_files is filled in NO other file types will be allowed.
        # $g_disallowed_files takes precedence over $g_allowed_files
        $g_allowed_files                = '';
        $g_disallowed_files             = '';

        # prefix to be used for the file system names of files uploaded to projects.
        # Eg: doc-001-myprojdoc.zip
        $g_document_files_prefix = 'doc';

        # absolute path to the default upload folder.  Requires trailing / or \
        $g_absolute_path_default_upload_folder = '/soft/www/MantisSTD/doc_igc/All/';


//        ################################################################
//        # on supprime en plus l'etat 'confirme' car inutile IGC-ABR le 19-11-08
//        # on ajoute l'etat 'repondu' posterieur a l'etat resolu  IGC-MCF le 14-09-09
//        # on ajoute le complement etat 'attente reout client'pour le suivi des DE IGC-MCF le 17-12-09
//        ################################################################


        # --- enum strings ----------------

       $g_status_enum_string         = '10:new,20:feedback,25:pris,30:acknowledged,50:assigned,70:transmit,80:resolved,83:repondu,85:intest,90:closed';
       $g_severity_enum_string       = '50:minor,60:major,70:crash';
       $g_resolution_enum_string     = '10:open,20:fixed,30:reopened,33:A statuer IGC,35:attente reour client,40:unable to duplicate,50:not fixable,60:duplicate,70:not a bug,75:info,80:suspended,90:wont fix';



        ###########################################################################################################################
        # Signup and Lost Password : on n'autorise pas la creation de compte par l'utilisateur ==> allow_signup OFF ABR le 27-10-08
        ###########################################################################################################################

        # --- Signup ----------------------

        # allow users to signup for their own accounts.
        # Mail settings must be correctly configured in order for this to work
        $g_allow_signup                 = OFF;


	###############################
	# Mantis Summary Settings
	# changement du droit d'access � la page Synthese
	###############################

	# how many reporters to show
	# this is useful when there are hundreds of reporters
	$g_reporter_summary_limit	= 10;

	# --- summary date displays -------
	# date lengths to count bugs by (in days)
	$g_date_partitions			= array( 1, 2, 3, 7, 30, 60, 90, 180, 365);

	# shows project '[project] category' when 'All Projects' is selected
	# otherwise only 'category name'
	$g_summary_category_include_project	= OFF;

	# threshold for viewing summary
	#$g_view_summary_threshold	= MANAGER;
	#$g_view_summary_threshold	= DEVELOPER;
	$g_view_summary_threshold	= REPORTER;

        ##################################################################
        # modification et incorporation pluggin jpgraph - IGC le 24/11/08
        ##################################################################

        # --- jpgraph settings --- #
        # Initial Version from Duncan Lisset
        #
        # To use the Jpgraph addon you need the JPGRAPH package from
        # http://www.aditus.nu/jpgraph/index.php
        # You can place the package whereever you want, but you have
        # to set the var in jpgraph.php eg.
        # (DEFINE('DIR_BASE','/www/mantisbt/jpgraph/');)

        $g_use_jpgraph                  = ON;
 	# dont forget the ending slash!
        $g_jpgraph_path                 = '/soft/www/MantisSTD/plugins/jpgraph/src/';

        # use antialiasing - Enabling anti-aliasing will greatly improve the visual apperance of certain graphs.
        # Note: Using anti-aliasing makes line drawing roughly 8 time slower than normal lines
        $g_jpgraph_antialias    = ON;

        # what truetype font will the graphs use. Allowed values are 'arial', 'verdana', 'courier', 'book', 'comic', 'times',
        #  'georgia', 'trebuche', 'vera', 'veramono', or 'veraserif'. Refer to the jpgraph manual for details.
        # NOTE: these fonts need to be installed in the TTF_DIR as specified to jpgraph
        $g_graph_font = '/usr/X11R6/lib/X11/fonts/TTF/';
//        $g_graph_font = 'arial';

        # what width is used to scale the graphs.
        $g_graph_window_width = 800;
        # bar graph aspect ration (height / width)
        $g_graph_bar_aspect = 0.9;

        # how many graphs to put in each row in the advanced summary page
        $g_graph_summary_graphs_per_row = 2;

        # initial graph type selected on bug_graph_page (see that page for possible values)
        # 0 asks user to select
        $g_default_graph_type = 0;

        # graph colours, once the list is exhausted it will repeat
        $g_graph_colors = array('coral', 'red', 'blue', 'black', 'green', 'orange', 'pink', 'brown', 'gray',
                'blueviolet','chartreuse','magenta','purple3','teal','tan','olivedrab','magenta');

        #############################
        # Mantis Email Settings
        #############################

        # --- email variables -------------
        $g_administrator_email  = 'administrator@example.com';
        $g_webmaster_email              = 'webmaster@example.com';

        # the sender email, part of 'From: ' header in emails
        $g_from_email                   = 'support@igc-erp.com';

        # the sender name, part of 'From: ' header in emails
        $g_from_name                    = 'Mantis IGC';

        # the return address for bounced mail
        $g_return_path_email    = 'support@igc-erp.com';

//        $g_notify_flags['bugnotes']['reporter']=ON;
        $g_notify_flags['bugnotes']['reporter']=OFF;

        ########################################################################
        # Bug Tagging --> on supprime les acc�s aux balises sauf au niveau admin
        ########################################################################

        # String that will separate tags as entered for input
        $g_tag_separator = ',';

        # Access level required to view tags attached to a bug
//      $g_tag_view_threshold = VIEWER;
        $g_tag_view_threshold = ADMINISTRATOR;

        # Access level required to attach tags to a bug
//      $g_tag_attach_threshold = REPORTER;
        $g_tag_attach_threshold = ADMINISTRATOR;

        # Access level required to detach tags from a bug
//      $g_tag_detach_threshold = DEVELOPER;
        $g_tag_detach_threshold = ADMINISTRATOR;

        # Access level required to detach tags attached by the same user
//      $g_tag_detach_own_threshold = REPORTER;
        $g_tag_detach_own_threshold = ADMINISTRATOR;

        # Access level required to create new tags
//      $g_tag_create_threshold = REPORTER;
        $g_tag_create_threshold = ADMINISTRATOR;

        # Access level required to edit tag names and descriptions
//      $g_tag_edit_threshold = DEVELOPER;
        $g_tag_edit_threshold = ADMINISTRATOR;

        # Access level required to edit descriptions by the creating user
//      $g_tag_edit_own_threshold = REPORTER;
        $g_tag_edit_own_threshold = ADMINISTRATOR;

        ########################################################################
        # MISC Mantis --> on change les droits d'ajouts de notes et de fichiers 
        ########################################################################

        # access level needed to upload files to attach to a bug
        # You can set this to NOBODY to prevent uploads to bugs but note that
        #  the reporter of the bug will still be able to upload unless you set
        #  $g_allow_reporter_upload or $g_allow_file_upload to OFF
        # See also: $g_upload_project_file_threshold, $g_allow_file_upload,
        #                       $g_allow_reporter_upload
//      $g_upload_bug_file_threshold    = REPORTER;
        $g_upload_bug_file_threshold    = VIEWER;

//      $g_add_bugnote_threshold = REPORTER;
        $g_add_bugnote_threshold = VIEWER;
    
    
     /****************************
	 * Rajout LGR version 1.2.1  *
	 ****************************/   
        
        
	/****************************
	 * Profile Related Settings *
	 ****************************/

	/**
	 * Enable Profiles
	 * @global int $g_enable_profiles
	 */
	$g_enable_profiles = OFF;

	/**
	 * Add profile threshold
	 * @global int $g_add_profile_threshold
	 */
	$g_add_profile_threshold = REPORTER;

	/**
	 * Threshold needed to be able to create and modify global profiles
	 * @global int $g_manage_global_profile_threshold
	 */
	$g_manage_global_profile_threshold = MANAGER;

	/**
	 * Allows the users to enter free text when reporting/updating issues
	 * for the profile related fields (i.e. platform, os, os build)
	 * @global int $g_allow_freetext_in_profile_fields
	 */
	$g_allow_freetext_in_profile_fields = ON;
	      
	      
	        
# Custom Group Actions
	#
	# This extensibility model allows developing new group custom actions.  This
	# can be implemented with a totally custom form and action pages or with a 
	# pre-implemented form and action page and call-outs to some functions.  These
	# functions are to be implemented in a predefined file whose name is based on
	# the action name.  For example, for an action to add a note, the action would
	# be EXT_ADD_NOTE and the file implementing it would be bug_actiongroup_add_note_inc.php.
	# See implementation of this file for details.
	#
	# Sample:
	#
	# array(
	#	array(	'action' => 'my_custom_action',
	#			'label' => 'my_label',   // string to be passed to lang_get_defaulted()
	#			'form_page' => 'my_custom_action_page.php',
	#			'action_page' => 'my_custom_action.php'
	#   )
	#	array(	'action' => 'my_custom_action2',
	#			'form_page' => 'my_custom_action2_page.php',
	#			'action_page' => 'my_custom_action2.php'
	#   )
	#	array(	'action' => 'EXT_ADD_NOTE',  // you need to implement bug_actiongroup_<action_without_'EXT_')_inc.php
	#		'label' => 'actiongroup_menu_add_note' // see strings_english.txt for this label
	#   )
	# );
	$g_custom_group_actions =
	array(
		array(	'action' => 'EXT_ADD_NOTE',  // you need to implement bug_actiongroup_<action_without_'EXT_')_inc.php
			'label' => 'actiongroup_menu_add_note' // see strings_english.txt for this label
		),
		array(	'action' => 'EXT_TRANS_DEV',  // you need to implement bug_actiongroup_<action_without_'EXT_')_inc.php
			'label' => 'actiongroup_menu_trans_dev' // see strings_english.txt for this label
		)
	);
	/**
	 * Trans_dev bug threshold
	 * @global int $g_move_bug_threshold
	 */
	$g_trans_dev_bug_threshold = MANAGER;
	
	/**
	 * Session validation
	 * WARNING: Disabling this could be a potential security risk!!
	 * @global int $g_session_validation
	 */
	$g_session_validation = OFF;
	
	/****************
	 * Redirections *
	 ****************/

	/**
	 * Default page after Login or Set Project
	 * @global string $g_default_home_page
	 */
	$g_default_home_page = 'view_all_bug_page.php';

	/**
	 * Specify where the user should be sent after logging out.
	 * @global string $g_logout_redirect_page
	 */
	$g_logout_redirect_page = 'login_page.php';
	
	
	
	/**
	 * An array of the fields to show on the bug report page.
	 *
	 * The following fields can not be included:
	 * id, project, date_submitted, last_updated, status,
	 * resolution, tags, fixed_in_version, projection, eta,
	 * reporter.
	 *
	 * The following fields must be included:
	 * category_id, summary, description.
	 *
	 * To overload this setting per project, then the settings must be included in the database through
	 * the generic configuration form.
	 *
	 * @global array $g_bug_report_page_fields
	 */
	$g_bug_report_page_fields = array(
		'category_id',
		'view_state',
		'handler',
		'priority',
		'severity',
		'reproducibility',
		'platform',
		'os',
		'os_version',
		'product_version',
		'product_build',
		'target_version',
		'summary',
		'description',
		'additional_info',
	#	'steps_to_reproduce',
		'attachments',
		'due_date',
	);

	/**
	 * An array of the fields to show on the bug view page.
	 *
	 * To overload this setting per project, then the settings must be included in the database through
	 * the generic configuration form.
	 *
	 * @global array $g_bug_view_page_fields
	 */
	$g_bug_view_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'reproducibility',
		'status',
		'resolution',
		'projection',
		'eta',
		'platform',
		'os',
		'os_version',
		'product_version',
		'product_build',
		'target_version',
		'fixed_in_version',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'tags',
		'attachments',
		'due_date',
	);

	/**
	 * An array of the fields to show on the bug print page.
	 * @global array $g_bug_print_page_fields
	 */
	$g_bug_print_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'reproducibility',
		'status',
		'resolution',
		'projection',
		'eta',
		'platform',
		'os',
		'os_version',
		'product_version',
		'product_build',
		'target_version',
		'fixed_in_version',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'tags',
		'attachments',
		'due_date',
	);

	/**
	 * An array of the fields to show on the bug update page.
	 *
	 * To overload this setting per project, then the settings must be included in the database through
	 * the generic configuration form.
	 *
	 * @global array $g_bug_update_page_fields
	 */
	$g_bug_update_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'reproducibility',
		'status',
		'resolution',
		'projection',
		'eta',
		'platform',
		'os',
		'os_version',
		'product_version',
		'product_build',
		'target_version',
		'fixed_in_version',
		'summary',
		'description',
		'additional_info',
	#	'steps_to_reproduce',
		'attachments',
		'due_date',
	);

	/**
	 * An array of the fields to show on the bug change status page.
	 *
	 * To overload this setting per project, then the settings must be included in the database through
	 * the generic configuration form.
	 *
	 * @global array $g_bug_change_status_page_fields
	 */
	$g_bug_change_status_page_fields = array (
		'id',
		'project',
		'category_id',
		'view_state',
		'date_submitted',
		'last_updated',
		'reporter',
		'handler',
		'priority',
		'severity',
		'reproducibility',
		'status',
		'resolution',
		'projection',
		'eta',
		'platform',
		'os',
		'os_version',
		'product_version',
		'product_build',
		'target_version',
		'fixed_in_version',
		'summary',
		'description',
		'additional_info',
		'steps_to_reproduce',
		'tags',
		'attachments',
		'due_date',
	);
	
	
	
?>
