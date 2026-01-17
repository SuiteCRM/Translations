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
    'LBL_MODULE_NAME' => 'Prosjekter',
    'LBL_MODULE_TITLE' => 'Prosjekt: Forside',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter prosjekt',
    'LBL_LIST_FORM_TITLE' => 'Prosjektliste',
    'LBL_HISTORY_TITLE' => 'Historie',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Dato opprettet:',
    'LBL_DATE_MODIFIED' => 'Date endret:',
    'LBL_ASSIGNED_USER_ID' => 'Tildelt:',
    'LBL_ASSIGNED_USER_NAME' => 'Prosjekt styrer:',
    'LBL_MODIFIED_USER_ID' => 'Endret av bruker Id:',
    'LBL_CREATED_BY' => 'Opprettet av:',
    'LBL_NAME' => 'Navn:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DELETED' => 'Slettet:',
    'LBL_DATE' => 'Dato:',
    'LBL_DATE_START' => 'Startdato:',
    'LBL_DATE_END' => 'Avslutningsdato:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Timeanslag (i timer)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Faktisk utført arbeid (i timer)',
    'LBL_LIST_END_DATE' => 'Avslutningsdato',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Prosjekter',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Prosjektoppgaver',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Salgsmuligheter',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Ingen',
    'LBL_ALL_PROJECTS' => 'Alle prosjekter',
    'LBL_ALL_USERS' => 'Alle brukere',
    'LBL_ALL_CONTACTS' => 'Alle kontakter',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nytt prosjekt',
    'LNK_NEW_PROJECT' => 'Nytt prosjekt',
    'LNK_PROJECT_LIST' => 'Prosjektliste',
    'LNK_NEW_PROJECT_TASK' => 'Ny prosjektoppgave',
    'LNK_PROJECT_TASK_LIST' => 'Prosjektoppgaver',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prosjekter',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kunder',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Salgsmuligheter',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kundestøtte',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Feil',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Oppgavenavn',
    'LBL_DURATION' => 'Varighet',
    'LBL_ACTUAL_DURATION' => 'Faktisk varighet',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Avslutt',
    'LBL_PREDECESSORS' => 'Forgjengere',
    'LBL_PERCENT_COMPLETE' => 'Fremdrift (%)',
    'LBL_MORE' => 'Mer...',
    'LBL_OPPORTUNITIES' => 'Salgsmuligheter',
    'LBL_NEXT_WEEK' => 'Neste',
    'LBL_PROJECT_INFORMATION' => 'Prosjektoversikt',
    'LBL_EDITLAYOUT' => 'Rediger oppsett' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Prosjektoppgaver',
    'LBL_VIEW_GANTT_TITLE' => 'Se på Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Varighet',
    'LBL_TASK_TITLE' => 'Rediger oppgave',
    'LBL_DURATION_TITLE' => 'Rediger varighet',
    'LBL_LAG' => 'Etterslep',
    'LBL_DAYS' => 'dager',
    'LBL_HOURS' => 'timer',
    'LBL_MONTHS' => 'måneder',
    'LBL_SUBTASK' => 'Oppgaver',
    'LBL_MILESTONE_FLAG' => 'Milepæl',
    'LBL_ADD_NEW_TASK' => 'Legg til ny oppgave',
    'LBL_DELETE_TASK' => 'Slett oppgave',
    'LBL_EDIT_TASK_PROPERTIES' => 'Rediger egenskaper for oppgave',
    'LBL_PARENT_TASK_ID' => 'Opphavsoppgave-ID:',
    'LBL_RESOURCE_CHART' => 'Ressurskalender',
    'LBL_RELATIONSHIP_TYPE' => 'Relasjonstype',
    'LBL_ASSIGNED_TO' => 'Prosjekt Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Prosjektmal',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Prosjekt Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Prosjekter',
    'LBL_TOOLTIP_TASK_NAME' => 'Oppgavenavn',
    'LBL_TOOLTIP_TITLE' => 'Dagens oppgaver',
    'LBL_TOOLTIP_TASK_DURATION' => 'Varighet',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Ressurs er en bruker',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Ressurs er en kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Forrige måned',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Neste måned',
    'LBL_RESOURCE_CHART_WEEK' => 'Uke',
    'LBL_RESOURCE_CHART_DAY' => 'Dag',
    'LBL_RESOURCE_CHART_WARNING' => 'Prosjektet har ikke blitt tildelt noen ressurser',
    'LBL_PROJECT_DELETE_MSG' => 'Er du sikker på at du vil slette dette prosjektet og dets relaterte oppgaver?',
    'LBL_LIST_MY_PROJECT' => 'Mine prosjekter',
    'LBL_LIST_ASSIGNED_USER' => 'Prosjekt Manager',
    'LBL_UNASSIGNED' => 'Ikke tilordnet',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressurser',

    'LBL_EMAIL' => 'E-post',
    'LBL_PHONE' => 'Tlfnr, arbeid:',
    'LBL_ADD_BUTTON' => 'Legg til',
    'LBL_ADD_INVITEE' => 'Legge til ressurs',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_LAST_NAME' => 'Etternavn',
    'LBL_SEARCH_BUTTON' => 'Søk',
    'LBL_EMPTY_SEARCH_RESULT' => 'Beklager, fant ingen resultater. Opprett en gjest under.',
    'LBL_CREATE_INVITEE' => 'Opprette en ressurs',
    'LBL_CREATE_CONTACT' => 'Som Kontakt',
    'LBL_CREATE_AND_ADD' => 'Opprett og legg til',
    'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
    'LBL_NO_ACCESS' => 'Du har ikke tilgang til å opprette $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ressurslisten',
    'LBL_REMOVE' => 'Fjern',
    'LBL_VIEW_DETAIL' => 'Vis detaljer',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Vurdere arbeidsdager',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Søk etter prosjekter',
    'LBL_USERS_SEARCH' => 'Søk brukere',
    'LBL_CONTACTS_SEARCH' => 'Velg kontakter',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Søk',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Ukentlig',
    'LBL_CHART_MONTHLY' => 'Månedlig',
    'LBL_CHART_QUARTERLY' => 'Kvartalsvis',

    'LBL_RESOURCE_CHART_MONTH' => 'Måned',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kvartal',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Stigende',
    'LBL_DESCENDING' => 'Fallende',
);
