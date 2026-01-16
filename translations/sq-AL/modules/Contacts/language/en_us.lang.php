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
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë konaktin',
    'LBL_ACCOUNT_ID' => 'ID e Llogarisë',
    'LBL_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_CAMPAIGN' => 'Fushata',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_ADDRESS_INFORMATION' => 'informacion rreth adresës',
    'LBL_ALT_ADDRESS_CITY' => 'Adresa alternative e qytetit',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresa alternative e shtetit',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresa alternative e kodit postal',
    'LBL_ALT_ADDRESS_STATE' => 'Adresa alternative e shtetit',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresa alternative e rrugës 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresa alternative e rrugës 3',
    'LBL_ALT_ADDRESS_STREET' => 'Adresa alternative e rrugës',
    'LBL_ALTERNATE_ADDRESS' => 'Adresë tjetër:',
    'LBL_ALT_ADDRESS' => 'Adresë tjetër:',
    'LBL_ANY_ADDRESS' => 'çdo adresë',
    'LBL_ANY_EMAIL' => 'çdo email',
    'LBL_ANY_PHONE' => 'çdo numër telefoni',
    'LBL_ASSIGNED_TO_NAME' => 'drejtuar',
    'LBL_ASSIGNED_TO_ID' => 'Përdorues i caktuar',
    'LBL_ASSISTANT_PHONE' => 'Telefon i ndihmësit',
    'LBL_ASSISTANT' => 'Ndihmë',
    'LBL_BIRTHDATE' => 'Ditëlindja:',
    'LBL_CITY' => 'Qyteti',
    'LBL_CAMPAIGN_ID' => 'ID e fushatës',
    'LBL_CONTACT_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Emri i kontaktit',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Udhëheqje-mundësi',
    'LBL_CONTACT_ROLE' => 'Rolo:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_CREATED_ACCOUNT' => 'Krijimi i llogarisë së re',
    'LBL_CREATED_CALL' => 'Krijimi i thirjes së re',
    'LBL_CREATED_CONTACT' => 'Krijimi i kontaktit të ri',
    'LBL_CREATED_MEETING' => 'Krijimi i mbledhjes së re',
    'LBL_CREATED_OPPORTUNITY' => 'Krijimi i mundësisë së re',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_DEPARTMENT' => 'Departamenti',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Raportet direkte',
    'LBL_DO_NOT_CALL' => 'Mos lajmëroheni',
    'LBL_DUPLICATE' => 'Kontakte të mundshme të dubluara',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_EMAIL_OPT_OUT' => 'Email i zgjedhur jashtë:',
    'LBL_EXISTING_ACCOUNT' => 'Përdorim i llogarisë ekzistuese',
    'LBL_EXISTING_CONTACT' => 'Përdorim i kontaktit ekzistues',
    'LBL_EXISTING_OPPORTUNITY' => 'Përdorim i mundësisë ekzistuese',
    'LBL_FAX_PHONE' => 'faks',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Ballina:',
    'LBL_ID' => 'ID',
    'LBL_IMPORT_VCARD' => 'Importo vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Krijjo automatikisht kontakt të ri duke importuar vCard-ën nga systemi i dosjeve të tua',
    'LBL_INVALID_EMAIL' => 'Email Jo Valide:',
    'LBL_INVITEE' => 'Raportet direkte',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_LEAD_SOURCE' => 'Burimi i udhëheqjes',
    'LBL_LIST_ACCEPT_STATUS' => 'Prano statusin',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_CONTACT_NAME' => 'Emri i kontaktit',
    'LBL_LIST_CONTACT_ROLE' => 'Roli',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emailet',
    'LBL_LIST_FIRST_NAME' => 'Emri',
    'LBL_LIST_FORM_TITLE' => 'Lista e kontakteve',
    'LBL_LIST_LAST_NAME' => 'Mbiemri',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_PHONE' => 'telefoni i zyrës',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Celulari',
    'LBL_MODIFIED' => 'Modifikuar nga',
    'LBL_MODULE_NAME' => 'Kontaktet',
    'LBL_MODULE_TITLE' => 'Kontaktet: Ballina',
    'LBL_NAME' => 'Emri',
    'LBL_NEW_FORM_TITLE' => 'Kontakt i ri',
    'LBL_NOTE_SUBJECT' => 'shënim subjekti',
    'LBL_OFFICE_PHONE' => 'Telefoni i zyrës',
    'LBL_OPP_NAME' => 'Emri i mundësisë',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID e rolit të mundësisë',
    'LBL_OPPORTUNITY_ROLE' => 'Roli i mundësisë',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email tjetër',
    'LBL_OTHER_PHONE' => 'Telefon tjetër',
    'LBL_PHONE' => 'Telefoni',
    'LBL_PORTAL_APP' => 'Aplikimi i portalit',
    'LBL_PORTAL_INFORMATION' => 'Informacioni i portalit',
    'LBL_PORTAL_NAME' => 'Emri i portalit',
    'LBL_STREET' => 'Rruga',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresë primare e qytetit',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresë primare e kodit postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresa e rrugës primare 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresa e rrugës primare 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresë primare e rrugës',
    'LBL_PRIMARY_ADDRESS' => 'Adresa primare',
    'LBL_PRODUCTS_TITLE' => 'Produktet',
    'LBL_REPORTS_TO_ID' => 'I raporton ID',
    'LBL_REPORTS_TO' => 'I reporton',
    'LBL_RESOURCE_NAME' => 'Emri i burimit',
    'LBL_SALUTATION' => 'Përshëndetje',
    'LBL_SAVE_CONTACT' => 'Ruaj kontaktin',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkim i kontakteve',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'selekto kontaktet e kontrolluara',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'selekto kontaktet e kontrolluara',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Sync në Outlook®:',
    'LBL_PROSPECT_LIST' => 'Lista e prospektit',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Shih kontaktet',
    'LNK_IMPORT_VCARD' => 'Krijo kontakt nga vCard',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',
    'LNK_NEW_APPOINTMENT' => 'Krijo takim',
    'LNK_NEW_CALL' => 'Thirje identifikuese',
    'LNK_NEW_CASE' => 'Krijo rast',
    'LNK_NEW_CONTACT' => 'Krijo kontakt',
    'LNK_NEW_EMAIL' => 'Emaili i arkivuar',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_NEW_NOTE' => 'Krijo shënim',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LNK_NEW_TASK' => 'Krijo detyrë',
    'LNK_SELECT_ACCOUNT' => "Selekto llogarinë",
    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Krijimi i një mundësie kërkon një llogari. Ju lutemi ose krijoni një të re ose selektoni një ekzistuese.',
    'NTC_REMOVE_CONFIRMATION' => 'A jeni të sigurt që dëshironi të largoni këtë  kontakt nga rasti?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'udhëheqjet',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Mundësite',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentacionet',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopjo në adresën primare',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopjo në adresat e tjera',

    'LBL_CASES_SUBPANEL_TITLE' => 'rastet',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gjyrmues i gabimeve',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektet',
    'LBL_PROJECTS_RESOURCES' => 'Burimet e projekteve',
    'LBL_CAMPAIGNS' => 'fushatat',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'fushatat',
    'LBL_LIST_CITY' => 'Qyteti',
    'LBL_LIST_STATE' => 'Shteti',
    'LBL_HOMEPAGE_TITLE' => 'Kontaktet e mia',
    'LBL_OPPORTUNITIES' => 'Mundësite',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektet',
    'LNK_IMPORT_CONTACTS' => 'Importo kontaktet',

    // SNIP
    'LBL_USER_SYNC' => 'Sync i përdoruesit',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'Create Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Kontratat',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Kuotat',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
