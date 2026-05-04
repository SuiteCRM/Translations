<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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
    'LBL_MODULE_NAME' => 'Project',
    'LBL_MODULE_TITLE' => 'Projecten: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Projecten zoeken',
    'LBL_LIST_FORM_TITLE' => 'Projecten lijst',
    'LBL_HISTORY_TITLE' => 'Geschiedenis',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Aangemaakt op:',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd:',
    'LBL_ASSIGNED_USER_ID' => 'Toegewezen aan:',
    'LBL_ASSIGNED_USER_NAME' => 'Projectbeheerder:',
    'LBL_MODIFIED_USER_ID' => 'Gewijzigde gebruikers ID:',
    'LBL_CREATED_BY' => 'Aangemaakt door:',
    'LBL_NAME' => 'Naam: ',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_DELETED' => 'Verwijderd:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_DATE_END' => 'Einddatum:',
    'LBL_PRIORITY' => 'Prioriteit:',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Totaal geschatte uren',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Totaal werkelijke uren',
    'LBL_LIST_END_DATE' => 'Einddatum',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projecttaken',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Kansen',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Geen',
    'LBL_ALL_PROJECTS' => 'Alle Projecten',
    'LBL_ALL_USERS' => 'Alle gebuikers',
    'LBL_ALL_CONTACTS' => 'Alle Contactpersonen',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nieuw project',
    'LNK_NEW_PROJECT' => 'Nieuw project',
    'LNK_PROJECT_LIST' => 'Projecten lijst',
    'LNK_NEW_PROJECT_TASK' => 'Nieuwe projecttaak',
    'LNK_PROJECT_TASK_LIST' => 'Project taak',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projecten',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Organisaties',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fouten',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Taaknaam',
    'LBL_DURATION' => 'Duur',
    'LBL_ACTUAL_DURATION' => 'Werkelijke duur',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Einde',
    'LBL_PREDECESSORS' => 'Voorgangers',
    'LBL_PERCENT_COMPLETE' => '% voltooid',
    'LBL_MORE' => 'Meer...',
    'LBL_OPPORTUNITIES' => 'Kansen',
    'LBL_NEXT_WEEK' => 'Volgende',
    'LBL_PROJECT_INFORMATION' => 'Project overzicht',
    'LBL_EDITLAYOUT' => 'Wijzig opmaak' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projecttaken',
    'LBL_VIEW_GANTT_TITLE' => 'Bekijk Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duur',
    'LBL_TASK_TITLE' => 'Taak bewerken',
    'LBL_DURATION_TITLE' => 'Duur bewerken',
    'LBL_LAG' => 'Vertraging',
    'LBL_DAYS' => 'Dagen',
    'LBL_HOURS' => 'Uren',
    'LBL_MONTHS' => 'Maanden',
    'LBL_SUBTASK' => 'Taak',
    'LBL_MILESTONE_FLAG' => 'Mijlpaal',
    'LBL_ADD_NEW_TASK' => 'Nieuw taak toevoegen',
    'LBL_DELETE_TASK' => 'Taak verwijderen',
    'LBL_EDIT_TASK_PROPERTIES' => 'Bewerk taakeigenschappen.',
    'LBL_PARENT_TASK_ID' => 'Ouder taak id',
    'LBL_RESOURCE_CHART' => 'Hulpmiddelenagenda',
    'LBL_RELATIONSHIP_TYPE' => 'Relatietype',
    'LBL_ASSIGNED_TO' => 'Projectbeheerder',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project sjabloon',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projectbeheerder',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Project',
    'LBL_TOOLTIP_TASK_NAME' => 'Taaknaam',
    'LBL_TOOLTIP_TITLE' => 'Taken voor vandaag',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duur',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Bron is een gebruiker',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Bron is een contactpersoon',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Vorige maand',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Volgende maand',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Dag',
    'LBL_RESOURCE_CHART_WARNING' => 'Geen bronnen zijn toegewezen aan dit project',
    'LBL_PROJECT_DELETE_MSG' => 'Bent u er zeker van dat u dit project wilt verwijderen met de gerelateerde taken?',
    'LBL_LIST_MY_PROJECT' => 'Mijn Projecten',
    'LBL_LIST_ASSIGNED_USER' => 'Projectbeheerder',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Zoeken',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuleer',
    'LBL_NO_ACCESS' => 'U heeft geen toegang om $module te maken',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Remove',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Importeer projecten',

    'LBL_PROJECTS_SEARCH' => 'Projecten zoeken',
    'LBL_USERS_SEARCH' => 'Gebruikers zoeken',
    'LBL_CONTACTS_SEARCH' => 'Contactpersonen selecteren',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Zoeken',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kwartaal',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project contactpersonen van contacttitel',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project-sjablonen: Project uit de titel van projecttitel',
    'LBL_AOS_QUOTES_PROJECT' => 'Offertes: Project',
    'LBL_TASKS_NOT_FOUND' => 'Er zijn geen Taken om de Gantt Table te bouwen',


    'LBL_ASCENDING' => 'Oplopend',
    'LBL_DESCENDING' => 'Aflopend',
);
