<?php

# Group commands menuitems
$s_actiongroup_bugs = 'Demandes sélectionnées';

# new strings:
$s_move_bugs = 'Déplacer les demandes';
$s_view_submitted_bug_link = 'Voir la demande soumise';
$s_bug_history = 'Historique de la demande';
$s_bug_monitor = 'Démarrer surveillance de la demande';
$s_bug_end_monitor = 'Arrêter surveillance de la demande';

$s_new_bug = 'Nouvelle demande';
$s_bug_deleted = 'Demande supprimée';

# bug_actiongroup_page.php : mass treatment
$s_bug_actiongroup_status = 'Cette demande ne peut pas être changée pour l\'état demandé';
$s_bug_actiongroup_category = 'Cette demande ne peut pas être changée pour la catégorie demandée';
$s_close_bugs_conf_msg = 'Voulez-vous vraiment fermer ces demandes ?';
$s_delete_bugs_conf_msg = 'Voulez-vous vraiment supprimer ces demandes ?';
$s_copy_bugs_conf_msg = 'Copier demandes vers';
$s_resolve_bugs_conf_msg = 'Choisir la résolution des demandes';
$s_priority_bugs_conf_msg = 'Choisir la priorité des demandes';
$s_status_bugs_conf_msg = 'Choisir l\'état des demandes';
$s_view_status_bugs_conf_msg = 'Choisir afficher l\'état des demandes';
$s_category_bugs_conf_msg = 'Choisir la catégorie des demandes';
$s_set_sticky_bugs_conf_msg = 'Voulez-vous vraiement activer / désactiver la  récurrance de ces demandes ?';
$s_close_group_bugs_button = 'Fermer les demandes';
$s_delete_group_bugs_button = 'Supprimer les demandes';
$s_move_group_bugs_button = 'Déplacer les demandes';
$s_copy_group_bugs_button = 'Copier les demandes';
$s_assign_group_bugs_button = 'Assigner les demandes';
$s_resolve_group_bugs_button = 'Résoudre les demandes';

# print_all_bug_page.php : display selected bugs
$s_hide_button = 'Afficher seulement les demandes sélectionnées';

# General Strings
$s_issue_status_percentage = 'Pourcentage de statut de demande';

# Enum Strings
# ajout attente retour client MCF 17/12/09 -- renomme en attente decision client le 23/05/2012
//$s_resolution_enum_string = '10:ouvert,20:résolu,30:rouvert,40:impossible à reproduire,50:demande requalifiée,60:déja référencée,70:faux problème,75:demande information,80:suspendu,90:refusée';
$s_resolution_enum_string = '10:ouvert,20:resolu,30:rouvert,33:A statuer IGC,35:attente decision client,40:impossible a reproduire,50:demande requalifiee,60:deja referencee,70:faux probleme,75:demande information,80:suspendu,90:refusee';


// #######################################################
// rajout traduction francaise etat livre IGC-ABR 17-10-08
// #######################################################

# Enum Strings
if ( lang_get_current() === 'french' ) {
# $s_status_enum_string = '10:nouveau,20:commentaire,30:accepté,50:affecté,70:transmis en dev,80:résolu,85:livré / en recette,90:fermé';
# $s_status_enum_string = '10:nouveau,20:commentaire,30:acceptee,50:affectee,70:transmis en dev,80:resolu,83:repondu,85:livree / en recette,90:fermee';
$s_status_enum_string = '10:nouveau,20:commentaire,25:pris en charge,30:acceptee,50:affectee,70:transmis en dev,80:resolu,83:repondu,85:livree / en recette,90:fermee';
}

$s_priority_enum_string = '10:aucune,20:basse,30:normale,40:elevee,50:urgente,60:immediate';


# menu_inc.php
$s_view_bugs_link = 'Afficher les demandes';
$s_report_bug_link = 'Rapporter une demande';

// #######################################################
// rajout traduction francaise severite IGC-ABR 17-10-08
// #######################################################

# Enum Strings
if ( lang_get_current() === 'french' ) {
$s_severity_enum_string = '50:mineur,60:majeur (a resoudre rapidement),70:critique (blocage des traitements)';
}

# Email Strings
$s_email_notification_title_for_status_bug_new = 'La demande suivante est maintenant à l\'état « nouveau » (encore)';
$s_email_notification_title_for_status_bug_pris = 'La demande suivante a été prise en charge.';
$s_email_notification_title_for_status_bug_feedback = 'La demande suivantee nécessite votre commentaire.';
$s_email_notification_title_for_status_bug_acknowledged = 'La demande suivante a été acceptée.';
$s_email_notification_title_for_status_bug_confirmed = 'La demande suivante a été confirmée.';
$s_email_notification_title_for_status_bug_assigned = 'La demande suivante a été assignée.';
$s_email_notification_title_for_status_bug_repondu = 'Une réponse a été apportée à votre demande.';
$s_email_notification_title_for_status_bug_resolved = 'La demande suivante a été résolue.';
$s_email_notification_title_for_status_bug_closed = 'La demande suivante a été fermée.';

$s_email_notification_title_for_action_bug_submitted = 'La demande suivante a été soumise.';
$s_email_notification_title_for_action_bug_assigned = 'La demande suivante a été assignée.';
$s_email_notification_title_for_action_bug_reopened = 'La demande suivante a été rouverte.';
$s_email_notification_title_for_action_bug_deleted = 'La demande suivante a été supprimée.';
$s_email_notification_title_for_action_bug_updated = 'La demande suivante a été mise à jour.';
$s_email_notification_title_for_action_sponsorship_added = 'La demande suivante a été commanditée.';
$s_email_notification_title_for_action_sponsorship_updated = 'Un commanditaire de la demande suivante a été modifiée.';
$s_email_notification_title_for_action_sponsorship_deleted = 'Un commanditaire de la demande suivante a été retirée.';

$s_email_notification_title_for_action_duplicate_of_relationship_added = 'La demande suivante a été défini comme DOUBLON de la demande %s.';
$s_email_notification_title_for_action_has_duplicate_relationship_added = 'La demande %s a été défini comme DOUBLON de la demande suivante.';
$s_email_notification_title_for_action_related_to_relationship_added = 'La demande suivante a été Liée a la demande %s.';
$s_email_notification_title_for_action_dependant_on_relationship_added = 'La demande suivante a été défini comme PARENT de la demande %s.';
$s_email_notification_title_for_action_blocks_relationship_added = 'La demande suivante a été défini comme ENFANT de la demande %s.';
$s_email_notification_title_for_action_duplicate_of_relationship_deleted = 'La demande suivante n\'est plus défini comme DOUBLON de la demande %s.';
$s_email_notification_title_for_action_has_duplicate_relationship_deleted = 'La demande %s n\'est plus défini comme DOUBLON de la demande suivante.';
$s_email_notification_title_for_action_related_to_relationship_deleted = 'La demande suivante n\'est plus Liée a la demande %s.';
$s_email_notification_title_for_action_dependant_on_relationship_deleted = 'La demande suivante n\'est plus défini comme PARENT de la demande %s.';
$s_email_notification_title_for_action_blocks_relationship_deleted = 'La demande suivante n\'est plus défini comme ENFANT de la demande %s.';
$s_email_notification_title_for_action_relationship_child_resolved = 'La demande Liée %s a été RESOLUE.';
$s_email_notification_title_for_action_relationship_child_closed = 'La demande Liée %s a été FERMEE.';

$s_email_bug = 'Demande ID'; // Can be left asis

$s_email_on_new = 'Courriel en cas de nouvelle demande';
$s_email_bugnote_limit = 'Nombre maximal d\'annotations de demande envoyées par courriel';

$s_email_resolution = 'Complément d\'état';

# account_sponsor_page.php
$s_no_sponsored = 'Aucune demande commanditée et assigné à vous même n\'a été trouvé.';
$s_no_own_sponsored = 'Vous n\'avez commandité aucune demande.';

# bug_action_group_page
$s_multiple_projects = 'Les demandes sélectionnées proviennent de différents projets. Les paramètres ci-dessous s\'appliquent à tous les projets. Si cela ne convient pas,
 sélectionnez un plus petit nombre de demandes.';

# bug_assign.php
$s_bug_assign_msg = 'La demande a été assignée avec succès...';

# bug_change_status_page.php
$s_new_bug_title = 'Nouvelle demande';
$s_pris_bug_title = 'Prise en charge de la demande';
$s_feedback_bug_title = 'Demander un commentaire sur la demande';
$s_acknowledged_bug_title = 'Accepter la demande';
$s_confirmed_bug_title = 'Confirmer la demande';
$s_intest_bug_title = 'Mise en recette de la demande';
$s_repondu_bug_title = 'Repondre a la demande';
$s_transmit_bug_title = 'Transmettre en developpement';
$s_assigned_bug_title = 'Assigner la demande';
$s_intest_bug_button = 'Mise en recette de la demande';
$s_pris_bug_button = 'Prise en charge de la demande';
$s_repondu_bug_button = 'Repondre a la demande';
$s_transmit_bug_button = 'Transmettre en developpement';
$s_new_bug_button = 'Nouvelle demande';
$s_acknowledged_bug_button = 'Accepter la demande';
$s_confirmed_bug_button = 'Confirmer la demande';
$s_assigned_bug_button = 'Assigner la demande';

# bug_close.php
$s_bug_close_msg = 'La demande a été fermée...';

# bug_close_page.php
$s_closed_bug_title = 'Fermer une demande';

# bug_delete.php
$s_bug_deleted_msg = 'La demande a été supprimée...';

# bug_delete_page.php
$s_delete_bug_sure_msg = 'Voulez-vous vraiment supprimer cette demande ?';
$s_delete_bug_button = 'Supprimer la demande';

# bug_monitor.php
$s_monitor_bug_button = 'Démarrer surveillance de la demande';
$s_unmonitor_bug_button = 'Arrêter surveillance de la demande';

# bug_reopen.php
$s_bug_reopened_msg = 'La demande a été rouverte...';
$s_reopen_add_bugnote_title = 'Ajouter une note pour la rouverture de la demande';
$s_bugnote_add_reopen_button = 'Ajouter une note et rouvrir la demande';

# bug_resolve_page.php
$s_resolved_bug_title = 'Résolution d\'une demande';
$s_resolved_bug_button = 'Résoudre la demande';

# bug_resolve_page2.php
$s_bug_resolved_msg = 'La demande a été résolue. Entrez une note ci-dessous...';
$s_resolve_add_bugnote_title = 'Ajouter une note pour la résolution de la demande';

# bug_reminder_page.php
$s_reminder_explain = 'Cette note sera envoyée aux destinataires surveillant cette demande.';
$s_reminder_monitor = 'Ces destinataires commenceront également à surveiller cette demande.  Ils pourront cesser la surveillance à l\'aide du bouton « Arrêter la surveil
lance ».';
$s_reminder_store = 'Cette note sera enregistrée avec la demande.';

# bug_set_sponsorship.php
$s_confirm_sponsorship = 'Veuillez confirmer que vous souhaitez commanditer la demande %d pour %s.';

# bug_update.php
$s_bug_updated_msg = 'La demande a été mise à jour...';

# bug_update_advanced_page.php
$s_back_to_bug_link = 'Retour a la demande';
$s_updating_bug_advanced_title = 'Mise à jour de l\'information d\'une demande';
$s_sticky_issue = 'Demande récurrente';
$s_resolution = 'Complt d\'état';

# bug_update_page.php
$s_updating_bug_simple_title = 'Mise à jour de l\'information d\'une demande';

# bugnote_inc.php
$s_no_bugnotes_msg = 'Cette demande n\'a aucune note.';
$s_closed_bug_button = 'Fermer la demande';

# login_page.php
$s_login_page_info = 'Bienvenue au système de gestion des bdemandes.';

# main_page.php
$s_open_and_assigned_to_me = 'Demandes ouvertes qui me sont assignés ';
$s_open_and_reported_to_me = 'Demandes ouvertes dont je suis le rapporteur ';

# manage_config_email_page
$s_issue_reporter = 'Utilisateur ayant rapporté la demande';
$s_issue_handler = 'Utilisateur prenant en charge la demande';

# manage_config_workflow_page
$s_unreachable = 'Vous ne pouvez pas déplacer une demande dans cette phase';
$s_no_exit = 'Vous ne pouvez pas déplacer une demande hors de cette phase';
$s_desc_bug_submit_status = 'Phase pour une nouvelle demande';
$s_desc_bug_reopen_status = 'Phase pour les demandes rouvertes';
$s_desc_bug_resolved_status_threshold = 'Phase à laquelle une demande est considérée comme résolue';

# manage_config_work_threshold_page
$s_assign_issue = 'Assigner une demande';
$s_allow_close_immediate = 'Permettre la fermeture d\'une demande à sa résolution';
$s_allow_reporter_close = 'Permettre aux demandeurs de fermer une demande';
$s_allow_reporter_reopen = 'Permettre aux demandeurs de rouvrir une demande';
$s_allow_user_edit = 'Permettre aux utilisateurs de modifier leurs propres notes de demande';
$s_limit_access = 'Restreindre l\'accès des demandeurs aux demandes qu\'ils ont soumis';
$s_submit_status = 'Etat auquel une nouvelle demande est initiée';
$s_assigned_status = 'Etat auquel les demandes auto-assignées sont initiées';
$s_resolved_status = 'Etat auquel une demande est considérée comme résolue';
$s_readonly_status = 'Etat auquel une demande ne peut être modifiée';
$s_reopen_status = 'Etat auquel une demande ré-ouvert est initiée';
$s_reopen_resolution = 'Complément d\'état à laquelle une demande ré-ouverte est initiée';

# manage_proj_category_delete_page.php
$s_category_delete_sure_msg = 'Voulez-vous vraiment supprimer cette catégorie ? Tous les demandes associées seront perdues.';

# report_add.php
$s_report_more_bugs = 'Saisir une nouvelle demande';

# report_bug_advanced_page.php
$s_check_report_more_bugs = 'Cocher pour saisir d\'autres demandes';

# summary_page.php
$s_longest_open_bug = 'Demande ouverte le plus longtemps';
# $s_by_resolution = 'Par complement d\'etat';
$s_by_resolution = 'Par complement d\'etat';
$s_reporter_by_resolution = 'Rapporteurs par complement d\'etat';
# $s_developer_by_resolution = 'Développeurs par complément d\'état';
$s_developer_by_resolution = 'Developpeurs par complement d\'etat';

$s_summary_title = 'Synthese';
$s_summary_jpgraph_link = 'Synthese avancee';
$s_by_project = 'Par projet';
$s_by_status = 'Par etat';
$s_by_date = 'Par date';
$s_by_severity = 'Par severite';
$s_by_category = 'Par categorie';
$s_by_priority = 'Par priorite';
$s_by_developer = 'Par developpeur';
$s_by_reporter = 'Par rapporteur';
$s_reporter_effectiveness = 'Efficacite du rapporteur';
$s_percentage_fixed = '% corrigee(s)';
$s_time_stats = 'Statistiques (en jours) pour les resolutions';
$s_developer_stats = 'Statistiques par developpeur';
$s_reporter_stats = 'Statistiques par rapporteur';
$s_orct = '(ouverte/resolue/fermee/total)';



# view_all_bug_page.php
$s_viewing_bugs_title = 'Liste des demandes';
$s_sticky = 'Afficher les demandes récurrentes';

# view_bug_advanced_page.php
$s_reopen_bug_button = 'Rouvrir une demande';
$s_update_bug_button = 'Mettre a jour la demande';
$s_move_bug_button = 'Déplacer demande';

# bug_monitor_list_view_inc.php
$s_no_users_monitoring_bug = 'Aucun utilisateur surveillant cette demande.';
$s_users_monitoring_bug = 'Utilisateurs surveillant cette demande';

# bug_sponsorship_list_view_inc.php
$s_no_users_sponsoring_bug = 'Il n\'y a aucun utilisateur commanditant cette demande.';
$s_users_sponsoring_bug = 'Utilisateurs commanditant cette demande';

# custom field strings
$s_custom_field_display_report = 'Afficher lors de rapport de demandes';
$s_custom_field_display_update = 'Afficher lors de mise à jour de demandes';
$s_custom_field_display_resolved = 'Montrer lors de résolution de demandes';
$s_custom_field_display_closed = 'Montrer lors de fermeture de demandes';

# Roadmap
$s_resolved_progress = '%d de %d demande(s) résolues.  Progrès (%d%%).';

$s_bug = 'demande';
$s_this_bug = 'Demande courante';
$s_replace_relationship_sure_msg = 'Il y a déjà une relation entre les deux demandes. Etes-vous certain de vouloir la remplacer ?';
$s_relationship_with_parent = 'Relation avec la demande parent';
$s_relationship_warning_blocking_bugs_not_resolved = 'Tous les fils de cette demande ne sont pas encore résolus ou fermés.';
$s_relationship_warning_blocking_bugs_not_resolved_2 = '<b>ATTENTION</b>. Tous les fils de cette demande ne sont pas encore résolus ou fermés.<br>Avant de <b>résoudre/ferme
r</b> une demande père, toutes ses demandes fils reliés devraient être résolus ou fermés.';
$s_bug_cloned_to = 'Demande dupliquée';
$s_bug_created_from = 'Demande générée depuis';

# Pemissions report
$s_issues = 'DEMANDE';
$s_report_issue = 'Rapporter une demande';
$s_update_issue = 'Mettre à jour l\'information d\'une demande';
$s_monitor_issue = 'Démarrer la surveillance d\'une demande';
$s_handle_issue = 'Gérer une demande';
$s_move_issue = 'Déplacer une demande';
$s_delete_issue = 'Supprimer une demande';
$s_reopen_issue = 'Rouvrir une demande';
$s_view_private_issues = 'Voir les demandes privées';
$s_update_readonly_issues = 'Mettre à jour une demande qui est en lecture seule';
$s_update_issue_status = 'Mettre à jour le statut d\'une demande';
$s_show_list_of_users_monitoring_issue = 'Afficher la liste des utilisateurs surveillant une demande';
$s_upload_issue_attachments = 'Mettre à jour les pièces jointes d\'une demande';
$s_sponsor_issue = 'Commanditer cette demande';
$s_assign_sponsored_issue = 'Assigner une demande commanditée';
$s_handle_sponsored_issue = 'Traiter une demande commanditée';

# Time Tracking
$s_total_time_for_issue = 'Temps total pour la demande = %s';

// ############################################################
// on remplace 'resolution' par complement d\'etat -ABR 26-11-08
// ############################################################

# improved JPgraphs strings
$s_graph_imp_resolution_title = 'Graphiques de synthese par complement d\'etat';
$s_by_resolution_pct = 'pourcentage par complement d\'etat';
$s_by_resolution_mix = 'par complement d\'etat et etat';
$s_resolution_link = 'Par complement d\'etat';


$s_graph_imp_status_title = 'Graphiques de synthese par etat';
$s_graph_imp_priority_title = 'Graphiques de synthese par priorite';
$s_graph_imp_severity_title = 'Graphiques de synthese par severite';
$s_graph_imp_category_title = 'Graphiques de synthese par categorie';
$s_by_status_pct = 'pourcentage par etat';
$s_by_priority_pct = 'pourcentage par priorite';
$s_by_severity_pct = 'pourcentage par severite';
$s_by_category_pct = 'pourcentage par categorie';
$s_by_severity_mix = 'par severite et etat';
$s_by_priority_mix = 'par priorite et etat';
$s_synthesis_link = 'Synthese';
$s_status_link = 'Par etat';
$s_priority_link = 'Par priorite';
$s_severity_link = 'Par severite';
$s_category_link = 'Par categorie';
$s_legend_still_open = 'Encore Ouvert';
$s_legend_resolved = 'Resolue';
$s_legend_assigned = 'Assignee';
$s_legend_total = 'Total';
$s_legend_opened = 'Ouvert';
$s_legend_closed = 'Fermee';
$s_legend_reported = 'Rapportee';
$s_cumulative = 'Cumulee';

 /****************************
	 * Rajout LGR trans_dev  *
	 ****************************/   
$s_actiongroup_menu_trans_dev = 'Transmettre en dev.';
$s_trans_dev_bugs_conf_msg = 'Transmettre demandes vers';

?>
<?php
        if ( file_exists( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'pluginmanager' . DIRECTORY_SEPARATOR . 'lang_inc.php' ) ) {
                require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'pluginmanager' . DIRECTORY_SEPARATOR . 'lang_inc.php' );
                global $g_plugins_manager_lang;
                $g_plugins_manager_lang = ON;
        }
?>
