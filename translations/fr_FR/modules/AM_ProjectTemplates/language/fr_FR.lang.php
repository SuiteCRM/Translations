<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Manager du projet',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Nom du modèle',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'Liste des modèles de projets',
    'LBL_MODULE_NAME' => 'Modèles de projets',
    'LBL_MODULE_TITLE' => 'Project Templates',
    'LBL_HOMEPAGE_TITLE' => 'Mes modèles de projets',
    'LNK_NEW_RECORD' => 'Créer des modèles de projets',
    'LNK_LIST' => 'Voir les modèles de projets',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importer des modèles de projets',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des modèles de projets',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l&#39;Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Nouveau modèle de projet',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priorité',
    'LBL_PROJECT_NAME' => 'Nom du projet',
    'LBL_START_DATE' => 'Date de début',
    'LBL_CREATE_PROJECT_TITLE' => 'Créer un nouveau projet à partir de ce modèle ?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Modèles de tâche',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Users',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Sélectionner des ressources',
    'LBL_NEW_PROJECT_CREATED' => 'Nouveau projet créé',
    'LBL_NEW_PROJECT' => 'Create Project',
    'LBL_CANCEL_PROJECT' => 'Cancel',

    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Etape',
    'LBL_RELATIONSHIP_TYPE' => 'Type de relation',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durée',
    'LBL_TASK_TITLE' => 'Modifier la tâche',
    'LBL_DURATION_TITLE' => 'Modifier la durée',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',

    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Non assigné',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',
    'LBL_DELETE_TASK' => 'Supprimer la tâche',
    'LBL_VIEW_DETAIL' => 'Retour à la Campagne',
    'LBL_ADD_NEW_TASK' => 'Ajouter une nouvelle tâche',
    'LBL_ASSIGNED_USER_NAME' => 'Manager du projet :',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom de la Tâche',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Durée en cours',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Prédécesseurs',
    'LBL_PERCENT_COMPLETE' => 'Progression (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier les propriétés de la tâche.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Tenir compte des jours ouvrables',
    'LBL_COPY_ALL_TASKS' => 'Copier toutes les tâches avec leurs ressources',
    'LBL_COPY_SEL_TASKS' => 'Copier les tâches sélectionnées avec leurs ressources',
    'LBL_TOOLTIP_TITLE' => 'Aide',
    'LBL_TOOLTIP_TEXT' => 'Copier toutes les tâches avec les utilisateurs assignés',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Téléphone du bureau :',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Ajouter une ressource',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
    'LBL_CREATE_INVITEE' => 'Créer une ressource',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',
    'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun accès pour créer $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Liste des ressources',
    'LBL_NONE' => 'None',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modèles de projet : projet du nom de projet',


);
