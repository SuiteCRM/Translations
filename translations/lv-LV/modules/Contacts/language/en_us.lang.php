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
    'ERR_DELETE_RECORD' => 'Lai dzēstu kontaktpersonu, norādiet ieraksta numuru.',
    'LBL_ACCOUNT_ID' => 'Uzņēmuma ID:',
    'LBL_ACCOUNT_NAME' => 'Uzņēmuma nosaukums:',
    'LBL_CAMPAIGN' => 'Kampaņa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
    'LBL_ALT_ADDRESS_CITY' => 'Cita adrese - Pilsēta:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Cita adrese - Valsts:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Cita adrese - Pasta indekss:',
    'LBL_ALT_ADDRESS_STATE' => 'Cita adrese - Novads:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Cita adrese - Iela 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Cita adrese - Iela 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Cita adrese - Iela:',
    'LBL_ALTERNATE_ADDRESS' => 'Cita adrese:',
    'LBL_ALT_ADDRESS' => 'Cita adrese:',
    'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
    'LBL_ANY_EMAIL' => 'Jebkurš E-pasts:',
    'LBL_ANY_PHONE' => 'Jebkurš tālrunis:',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam',
    'LBL_ASSISTANT_PHONE' => 'Asistenta tālrunis:',
    'LBL_ASSISTANT' => 'Asistents:',
    'LBL_BIRTHDATE' => 'Dzimšanas diena:',
    'LBL_CITY' => 'Pilsēta:',
    'LBL_CAMPAIGN_ID' => 'Kampaņas ID',
    'LBL_CONTACT_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Interesents-Iespēja:',
    'LBL_CONTACT_ROLE' => 'Loma:',
    'LBL_CONTACT' => 'Kontakts:',
    'LBL_COUNTRY' => 'Valsts:',
    'LBL_CREATED_ACCOUNT' => 'Izveidots jauns uzņēmums',
    'LBL_CREATED_CALL' => 'Izveidots jauns zvans',
    'LBL_CREATED_CONTACT' => 'Izveidota jauna kontaktpersona',
    'LBL_CREATED_MEETING' => 'Izveidota jauna tikšanās',
    'LBL_CREATED_OPPORTUNITY' => 'Izveidota jauna iespēja',
    'LBL_DATE_MODIFIED' => 'Modificēts:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_DEPARTMENT' => 'Nodaļa:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Padotie (?) / Tieši atskaitās',
    'LBL_DO_NOT_CALL' => 'Nezvanīt!:',
    'LBL_DUPLICATE' => 'Iespējams kontaktpersonas dublikāts',
    'LBL_EMAIL_ADDRESS' => 'E-pasts:',
    'LBL_EMAIL_OPT_OUT' => 'Atteikties no e-pastu saņemšanas:',
    'LBL_EXISTING_ACCOUNT' => 'Lietots esošs uzņēmums',
    'LBL_EXISTING_CONTACT' => 'Lietota esoša kontaktpersona',
    'LBL_EXISTING_OPPORTUNITY' => 'Lietota esoša iespēja',
    'LBL_FAX_PHONE' => 'Fakss:',
    'LBL_FIRST_NAME' => 'Vārds:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
    'LBL_HOME_PHONE' => 'Sākums:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importēt vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automātiski veidot jaunu kontaktpersonu, importējot vCard.',
    'LBL_INVALID_EMAIL' => 'Nederīgs e-pasts:',
    'LBL_INVITEE' => 'Padotie (?) / Tieši atskaitās',
    'LBL_LAST_NAME' => 'Uzvārds:',
    'LBL_LEAD_SOURCE' => 'Interesenta avots:',
    'LBL_LIST_ACCEPT_STATUS' => 'Apstiprināt statusu',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktpersonas vārds',
    'LBL_LIST_CONTACT_ROLE' => 'Loma',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_LIST_FIRST_NAME' => 'Vārds',
    'LBL_LIST_FORM_TITLE' => 'Kontaktpersonu saraksts',
    'LBL_LIST_LAST_NAME' => 'Uzvārds',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_PHONE' => 'Biroja tālrunis',
    'LBL_LIST_TITLE' => 'Amats',
    'LBL_MOBILE_PHONE' => 'Mobilais tālrunis:',
    'LBL_MODIFIED' => 'Modificēja:',
    'LBL_MODULE_NAME' => 'Ielūgtie',
    'LBL_MODULE_TITLE' => 'Kontaktpersonas: Sākums',
    'LBL_NAME' => 'Vārds:',
    'LBL_NEW_FORM_TITLE' => 'Jauna kontaktpersona',
    'LBL_NOTE_SUBJECT' => 'Piezīmes temats',
    'LBL_OFFICE_PHONE' => 'Darba tālrunis:',
    'LBL_OPP_NAME' => 'Iespējas nosaukums:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Darījuma lomas ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Iespējas loma',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Cits E-pasts:',
    'LBL_OTHER_PHONE' => 'Cits tālrunis:',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_PORTAL_APP' => 'Portāla lietojumprogramma:',
    'LBL_PORTAL_INFORMATION' => 'Portāla informācija',
    'LBL_PORTAL_NAME' => 'Portāla nosaukums:',
    'LBL_STREET' => 'Iela',
    'LBL_POSTAL_CODE' => 'Pasta indekss:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pamatadrese - Pilsēta:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pamata adreses valsts:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pamatadrese - Pasta indekss:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pamatadrese - Novads:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pamatadrese - Iela 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pamatadrese - Iela 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pamatadrese - Iela:',
    'LBL_PRIMARY_ADDRESS' => 'Primārā adrese:',
    'LBL_PRODUCTS_TITLE' => 'Produkti',
    'LBL_REPORTS_TO_ID' => 'Vadītāja ID:',
    'LBL_REPORTS_TO' => 'Tiešais vadītājs:',
    'LBL_RESOURCE_NAME' => 'Resursa nosaukums',
    'LBL_SALUTATION' => 'Sveiciens(uzruna):',
    'LBL_SAVE_CONTACT' => 'Saglabāt kontaktpersonu',
    'LBL_SEARCH_FORM_TITLE' => 'Kontaktpersonu meklēšana',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Atlasīt izvēlētās kontaktpersonas',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Atlasīt izvēlētās kontaktpersonas',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Sinhronizēt ar Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospektu saraksts',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Kontaktpersonas',
    'LNK_IMPORT_VCARD' => 'Izveidot kontaktpersonu no vCard',
    'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',
    'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos:',
    'LNK_NEW_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LNK_NEW_CASE' => 'Izveidot pieteikumu',
    'LNK_NEW_CONTACT' => 'Izveidot kontaktpersonu',
    'LNK_NEW_EMAIL' => 'Arhivēt E-pastu [Alt+K]',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi',
    'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_SELECT_ACCOUNT' => "Izvēlēties uzņēmumu [Alt+A]",
    'NTC_DELETE_CONFIRMATION' => 'Vai jūs tiešām vēlaties dzēst šo ierakstu?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Lai izveidotu iespēju, nepieciešams uzņēmums.\n Lūdzu izveidojiet uzņēmumu vai atlasiet esošu uzņēmumu.',
    'NTC_REMOVE_CONFIRMATION' => 'Vai tiešām vēlaties noņemt šo kontaktu noņemt no pieteikuma?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Iespējas',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopēt uz primāro adresi',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopēt uz citu adresi',

    'LBL_CASES_SUBPANEL_TITLE' => 'Pieteikumi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kļūdas',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECTS_RESOURCES' => 'Projektu resursi',
    'LBL_CAMPAIGNS' => 'Mārketings',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Mārketings',
    'LBL_LIST_CITY' => 'Pilsēta',
    'LBL_LIST_STATE' => 'Stāvoklis',
    'LBL_HOMEPAGE_TITLE' => 'Manas kontaktpersonas',
    'LBL_OPPORTUNITIES' => 'Iespējas',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LNK_IMPORT_CONTACTS' => 'Importēt kontaktpersonas',

    // SNIP
    'LBL_USER_SYNC' => 'Lietotāja sinhronizācija',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Notikumi',

    'LBL_AOP_CASE_UPDATES' => 'Pieteikumu UPDATES (?)',
    'LBL_CREATE_PORTAL_USER' => 'Izveidot portāla lietotāju',
    'LBL_ENABLE_PORTAL_USER' => 'Iespējot portāla lietotāju',
    'LBL_DISABLE_PORTAL_USER' => 'Atspējot portāla lietotāju',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Neizdevās izveidot portāla lietotāju',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Neizdevās iespējot portāla lietotāju',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Neizdevās deaktivizēt portāla lietotāju',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Izveidots portāla lietotājs',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Aktivizēts portāla lietotājs',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Deaktivizēts portāla lietotājs',
    'LBL_NO_JOOMLA_URL' => 'Nav norādīts portāla URL',
    'LBL_PORTAL_USER_TYPE' => 'Portāla lietotāja tips',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konts atspējots',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Līgumi',
    'LBL_AOS_INVOICES' => 'Rēķini',
    'LBL_AOS_QUOTES' => 'Piedāvājumi',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Uzaicinājuma statuss',
);
