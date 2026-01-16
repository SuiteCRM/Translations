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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Përshkrimi i llogarisë',
    'LBL_ACCOUNT_ID' => 'ID e Llogarisë',
    'LBL_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_ADDRESS_INFORMATION' => 'informacion rreth adresës',
    'LBL_ALT_ADDRESS_CITY' => 'Adresa alternative e qytetit',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresa alternative e shtetit',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresa alternative e kodit postal',
    'LBL_ALT_ADDRESS_STATE' => 'Adresa alternative e shtetit',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresa alternative 2 e qrrugës',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresa alternative 3 e rrugës',
    'LBL_ALT_ADDRESS_STREET' => 'Adresa alternative e rrugës',
    'LBL_ALTERNATE_ADDRESS' => 'Adresë tjetër:',
    'LBL_ALT_ADDRESS' => 'Adresë tjetër:',
    'LBL_ANY_ADDRESS' => 'çdo adresë',
    'LBL_ANY_EMAIL' => 'çdo email',
    'LBL_ANY_PHONE' => 'çdo numër telefoni',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_ASSIGNED_TO_ID' => 'drejtuar:',
    'LBL_CITY' => 'Qyteti',
    'LBL_CONTACT_ID' => 'ID e Kontaktit',
    'LBL_CONTACT_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Emri i udhëheqësit',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Udhëheqje-mundësi:',
    'LBL_CONTACT_ROLE' => 'Rolo:',
    'LBL_CONTACT' => 'Udhëheqje',
    'LBL_CONVERTED_ACCOUNT' => 'Llogaria e konvertuar',
    'LBL_CONVERTED_CONTACT' => 'Kontakti i konvertuar',
    'LBL_CONVERTED_OPP' => 'Mundësia e konvertuar:',
    'LBL_CONVERTED' => 'I konvertuar',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konverto udhëheqjen',
    'LBL_CONVERTLEAD' => 'Konverto udhëheqjen',
    'LBL_CONVERTLEAD_WARNING' => 'Paralajmërim: Statusi i Klientit Potencial që ju jeni gati për të kthyer është "Konvertuar". KontaktI dhe/ose të dhënat e llogarive mund tashmë të krijohen prej Klientit Potencial.. Nëse ju dëshironi të vazhdoni me konvertimin e Klientit Potencial, kliko Ruaj. Për të shkuar përsëri në Klientin Potencial pa konvertimin e tij, klikoni Anulo.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Kontakt i mundshëm',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_CREATED_NEW' => 'Krijo të re',
    'LBL_CREATED_ACCOUNT' => 'Krijimi i llogarisë së re',
    'LBL_CREATED_CALL' => 'Krijimi i thirjes së re',
    'LBL_CREATED_CONTACT' => 'Krijimi i kontaktit të ri',
    'LBL_CREATED_MEETING' => 'Krijimi i mbledhjes së re',
    'LBL_CREATED_OPPORTUNITY' => 'Krijimi i mundësisë së re',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'udhëheqjet',
    'LBL_DEPARTMENT' => 'Departamenti',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DO_NOT_CALL' => 'Mos lajmëroheni',
    'LBL_DUPLICATE' => 'Udhëheqje të ngjashme',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_EMAIL_OPT_OUT' => 'Email i zgjedhur jashtë:',
    'LBL_EXISTING_ACCOUNT' => 'Përdorim i llogarisë ekzistuese',
    'LBL_EXISTING_CONTACT' => 'Përdorim i kontaktit ekzistues',
    'LBL_EXISTING_OPPORTUNITY' => 'Përdorim i mundësisë ekzistuese',
    'LBL_FAX_PHONE' => 'faks',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'telefoni i shtëpisë',
    'LBL_IMPORT_VCARD' => 'Importo vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Krijjo automatikisht kontakt të ri duke importuar vCard-ën nga systemi i dosjeve të tua',
    'LBL_INVALID_EMAIL' => 'Email Jo Valide:',
    'LBL_INVITEE' => 'Raportet direkte',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Përshkrimi i burimit të udhëheqjes',
    'LBL_LEAD_SOURCE' => 'Burimi i udhëheqjes',
    'LBL_LIST_ACCEPT_STATUS' => 'Prano statusin',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_CONTACT_NAME' => 'Emri i udhëheqjes',
    'LBL_LIST_CONTACT_ROLE' => 'Roli',
    'LBL_LIST_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emailet',
    'LBL_LIST_FIRST_NAME' => 'Emri',
    'LBL_LIST_FORM_TITLE' => 'Lista e udhëheqjeve',
    'LBL_LIST_LAST_NAME' => 'Mbiemri',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Përshkrimi i burimit të udhëheqjes',
    'LBL_LIST_LEAD_SOURCE' => 'Burimi i udhëheqjes',
    'LBL_LIST_MY_LEADS' => 'Udhëheqjet e mia',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_PHONE' => 'telefoni i zyrës',
    'LBL_LIST_REFERED_BY' => 'Referuar nga',
    'LBL_LIST_STATUS' => 'Statusi',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Celulari',
    'LBL_MODULE_NAME' => 'udhëheqjet',
    'LBL_MODULE_TITLE' => 'Udhëheqjet: Ballina',
    'LBL_NAME' => 'Emri',
    'LBL_NEW_FORM_TITLE' => 'Udhëheqje e re',
    'LBL_OFFICE_PHONE' => 'Telefoni i zyrës',
    'LBL_OPP_NAME' => 'Emri i mundësisë',
    'LBL_OPPORTUNITY_AMOUNT' => 'Sasia e mundësisë',
    'LBL_OPPORTUNITY_ID' => 'ID e mundësisë',
    'LBL_OPPORTUNITY_NAME' => 'Emri i mundësisë',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email tjetër',
    'LBL_OTHER_PHONE' => 'Telefon tjetër',
    'LBL_PHONE' => 'Telefoni',
    'LBL_PORTAL_APP' => 'Aplikimi i portalit',
    'LBL_PORTAL_INFORMATION' => 'Informacioni i portalit',
    'LBL_PORTAL_NAME' => 'Emri i portalit',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_STREET' => 'Rruga',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresë primare e qytetit',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresë primare e kodit postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresa  e rrugës primare 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresa e rrugës primare 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresë primare e rrugës',
    'LBL_PRIMARY_ADDRESS' => 'Adresa primare',
    'LBL_REFERED_BY' => 'Referuar Nga:',
    'LBL_REPORTS_TO_ID' => 'I raporton ID',
    'LBL_REPORTS_TO' => 'I reporton',
    'LBL_SALUTATION' => 'Përshëndetje',
    'LBL_MODIFIED' => 'Modifikuar nga',
    'LBL_CREATED' => 'Krijuar nga',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i udhëheqjeve',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'selekto udhëheqjet e kontrolluara',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'selekto udhëheqjet e kontrolluara',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Përshkrimi i statusit:',
    'LBL_STATUS' => 'statusi',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Krijo udhëheqje nga vCard',
    'LNK_LEAD_LIST' => 'Shih udhëheqjet',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',
    'LNK_NEW_APPOINTMENT' => 'Krijo takim',
    'LNK_NEW_CONTACT' => 'Krijo kontakt',
    'LNK_NEW_LEAD' => 'krijo udhëheqje',
    'LNK_NEW_NOTE' => 'Krijo shënim',
    'LNK_NEW_TASK' => 'Krijo detyrë',
    'LNK_NEW_CASE' => 'Krijo rast',
    'LNK_NEW_CALL' => 'Thirje identifikuese',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LNK_SELECT_ACCOUNTS' => 'ose selekto llogarinë',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'A jeni të sigurt që dëshironi të largoni këtë udhëheqje nga rasti?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'fushatat',
    'LBL_CAMPAIGN' => 'Fushata',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues i caktuar',
    'LBL_PROSPECT_LIST' => 'Lista e prospektit',
    'LBL_CAMPAIGN_LEAD' => 'fushatat',
    'LBL_BIRTHDATE' => 'Ditëlindja:',
    'LBL_ASSISTANT_PHONE' => 'Telefon i ndihmësit',
    'LBL_ASSISTANT' => 'Ndihmë',
    'LBL_CREATED_USER' => 'Përdorues i krijuar',
    'LBL_MODIFIED_USER' => 'përdorues i modifikuar',
    'LBL_CAMPAIGNS' => 'fushatat',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'E nevojshme',
    'LBL_CONVERT_SELECT' => 'Lejo selektimin',
    'LBL_CONVERT_COPY' => 'Kopjo të dhënat',
    'LBL_CONVERT_EDIT' => 'Ndrysho',
    'LBL_CONVERT_DELETE' => 'Fshi',
    'LBL_CONVERT_ADD_MODULE' => 'Shto modul',
    'LBL_CREATE' => 'Krijo',
    'LBL_SELECT' => 'ose Selekto',
    'LBL_WEBSITE' => 'ueb faqja',
    'LNK_IMPORT_LEADS' => 'Importo udhëheqjet',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Moduli për të krijuar një regjistrim të ri in.',
    'LBL_REQUIRED_TIP' => 'Modulet e kërkuara duhet të jenë krijuar apo selektuar para Klientit Potencial i cili mund të konvertohet.',
    'LBL_COPY_TIP' => 'Nëse kontrollohen, nga fushat e Klientit Potencial do të kopjohen në fushat me të njëjtin emër në të dhënat e reja të krijuara.',
    'LBL_SELECTION_TIP' => 'Modulet me fushë të lidhjes në Kontaktet ku mund të selektohen në vend të krijimit gjatë procesit të konvertimit të Klientit Potencial.',
    'LBL_EDIT_TIP' => 'Modifiko paraqitjen e Konvertimit për këtë modul.',
    'LBL_DELETE_TIP' => 'Fshini këtë modul nga paraqitja e konvertimit.',

    'LBL_ACTIVITIES_MOVE' => 'Lëviz Aktivitetet në',
    'LBL_ACTIVITIES_COPY' => 'Kopjo Aktivitetet në',
    'LBL_ACTIVITIES_MOVE_HELP' => "Selekto regjistrimin në të cilën për të lëvizur aktivitetet e Klientëve Potencial. Detyrat, Thirrjet, takime, Shënime dhe e-mail do të zhvendosen në regjistrimin(et) e selektuar.",
    'LBL_ACTIVITIES_COPY_HELP' => "Selektoni regjistrimin(et) për të cilin do të krijoni kopje të aktiviteteve tët Klientëve Potencial. Detyrat e reja, Telefonatat, takime dhe shënime do të krijohen për secilin nga selektimi i regjistrimit. Emailat do të jenë të lidhura me selektimin e regjistrimit",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID e fushatës',
    'LBL_EDITLAYOUT' => 'Ndrysho formatin' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Data e nisjes' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Ngarkimi...' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Ndrysho' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
