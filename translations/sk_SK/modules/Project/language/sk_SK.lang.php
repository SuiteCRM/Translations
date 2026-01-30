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
    'LBL_MODULE_NAME' => 'Projekt',
    'LBL_MODULE_TITLE' => 'Projekty: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať projekt',
    'LBL_LIST_FORM_TITLE' => 'Zoznam projektov',
    'LBL_HISTORY_TITLE' => 'História',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia:',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy:',
    'LBL_ASSIGNED_USER_ID' => 'Priradené k:',
    'LBL_ASSIGNED_USER_NAME' => 'Vedúci projektu:',
    'LBL_MODIFIED_USER_ID' => 'Zmenil užívateľ s Id:',
    'LBL_CREATED_BY' => 'Vytvoril:',
    'LBL_NAME' => 'Meno:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DELETED' => 'Odstránené:',
    'LBL_DATE' => 'Dátum',
    'LBL_DATE_START' => 'Dátum začiatku:',
    'LBL_DATE_END' => 'Dátum ukončenia',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Odhadovaná práca spolu (v hodinách)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktuálna práca spolu (v hodinách)',
    'LBL_LIST_END_DATE' => 'Dátum ukončenia',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektová úloha',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Príležitosti',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nič',
    'LBL_ALL_PROJECTS' => 'Všetky projekty',
    'LBL_ALL_USERS' => 'Všetci užívatelia',
    'LBL_ALL_CONTACTS' => 'Všetky konakty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nový projekt',
    'LNK_NEW_PROJECT' => 'Nový Projekt',
    'LNK_PROJECT_LIST' => 'Zobraziť zoznam projektov',
    'LNK_NEW_PROJECT_TASK' => 'Nová Projektová Úloha',
    'LNK_PROJECT_TASK_LIST' => 'Zobraziť úlohy projektu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Príležitosti',
    'LBL_CASES_SUBPANEL_TITLE' => 'Prípady',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Názov úlohy',
    'LBL_DURATION' => 'Trvanie',
    'LBL_ACTUAL_DURATION' => 'Skutočné trvanie',
    'LBL_START' => 'Štart',
    'LBL_FINISH' => 'Koniec',
    'LBL_PREDECESSORS' => 'Predchodcovia',
    'LBL_PERCENT_COMPLETE' => 'Splnené (%)',
    'LBL_MORE' => 'Viac...',
    'LBL_OPPORTUNITIES' => 'Príležitosti',
    'LBL_NEXT_WEEK' => 'Ďalší',
    'LBL_PROJECT_INFORMATION' => 'Prehľad projektu',
    'LBL_EDITLAYOUT' => 'Upraviť rozloženie' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektová úloha',
    'LBL_VIEW_GANTT_TITLE' => 'Zobraziť diagram',
    'LBL_VIEW_GANTT_DURATION' => 'Trvanie',
    'LBL_TASK_TITLE' => 'Upraviť úlohu',
    'LBL_DURATION_TITLE' => 'Upraviť dobu trvania',
    'LBL_LAG' => 'Oneskorenie',
    'LBL_DAYS' => 'Dni',
    'LBL_HOURS' => 'Hodiny',
    'LBL_MONTHS' => 'Mesiace',
    'LBL_SUBTASK' => 'Úlohy',
    'LBL_MILESTONE_FLAG' => 'Míľnik',
    'LBL_ADD_NEW_TASK' => 'Pridať novú úlohu',
    'LBL_DELETE_TASK' => 'Odstrániť úlohu',
    'LBL_EDIT_TASK_PROPERTIES' => 'Upraviť vlastnosti úlohy.',
    'LBL_PARENT_TASK_ID' => 'Id nadradenej úlohy',
    'LBL_RESOURCE_CHART' => 'Kalendár zdrojov',
    'LBL_RELATIONSHIP_TYPE' => 'Typ vzťahu',
    'LBL_ASSIGNED_TO' => 'Vedúci projektu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Šablóna projektu',
    'LBL_STATUS' => 'Stav:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Vedúci projektu',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Názov úlohy',
    'LBL_TOOLTIP_TITLE' => 'Úlohy na tento deň',
    'LBL_TOOLTIP_TASK_DURATION' => 'Trvanie',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Zdroj je používateľ',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Zdroj je kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Predchadzajúci mesiac',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Nasledujúci mesiac',
    'LBL_RESOURCE_CHART_WEEK' => 'Týždeň',
    'LBL_RESOURCE_CHART_DAY' => 'Deň',
    'LBL_RESOURCE_CHART_WARNING' => 'Do projektu neboli pridané žiadne zroje.',
    'LBL_PROJECT_DELETE_MSG' => 'Ste si istí, že chcete odstrániť tento projekt a súvisiace úlohy?',
    'LBL_LIST_MY_PROJECT' => 'Moje projekty',
    'LBL_LIST_ASSIGNED_USER' => 'Vedúci projektu',
    'LBL_UNASSIGNED' => 'Nepriradené',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Zdroje',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefón:',
    'LBL_ADD_BUTTON' => 'Pridať',
    'LBL_ADD_INVITEE' => 'Pridať zdroj',
    'LBL_FIRST_NAME' => 'Krstné meno',
    'LBL_LAST_NAME' => 'Priezvisko',
    'LBL_SEARCH_BUTTON' => 'Vyhľadať',
    'LBL_EMPTY_SEARCH_RESULT' => 'Je nám ľúto, neboli nájdené žiadne výsledky. Prosím, vytvorte si pozvaný nižšie.',
    'LBL_CREATE_INVITEE' => 'Nový zdroj',
    'LBL_CREATE_CONTACT' => 'ako kontakt',
    'LBL_CREATE_AND_ADD' => 'vytvoriť & pridať',
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušiť',
    'LBL_NO_ACCESS' => 'Nemáte prístup k vytváraniu $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Zoznam zdrojov',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_VIEW_DETAIL' => 'Zobraziť detaily',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Zvážte pracovné dni',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',
    
    'LBL_PROJECTS_SEARCH' => 'Vyhľadávanie projektov',
    'LBL_USERS_SEARCH' => 'Hľadať používateľov',
    'LBL_CONTACTS_SEARCH' => 'Vyberte kontakty',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Vyhľadať',

    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_WEEKLY' => 'týždenne',
    'LBL_CHART_MONTHLY' => 'mesačne',
    'LBL_CHART_QUARTERLY' => 'Štvrťročne',

    'LBL_RESOURCE_CHART_MONTH' => 'Mesiac',
    'LBL_RESOURCE_CHART_QUARTER' => 'Štvrťrok',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z názvu kontaktu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Šablóny projektov: Projekt z názvu projektu',
    'LBL_AOS_QUOTES_PROJECT' => 'Ponuky: Projekt',

    'LBL_ASCENDING' => 'Vzostupne (A-Z)',
    'LBL_DESCENDING' => 'Zostupne (Z-A)',
);
