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
    'LBL_MODULE_NAME' => 'synimet',
    'LBL_MODULE_ID' => 'synimet',
    'LBL_INVITEE' => 'Raportet direkte',
    'LBL_MODULE_TITLE' => 'Synimet: Ballina',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i shënimeve',
    'LBL_LIST_FORM_TITLE' => 'Lista e synimeve',
    'LBL_NEW_FORM_TITLE' => 'Synim i ri',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_LAST_NAME' => 'Mbiemri',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emailet',
    'LBL_LIST_PHONE' => 'Telefoni',
    'LBL_LIST_FIRST_NAME' => 'Emri',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_ASSIGNED_TO_ID' => 'Drejtuar:',
    'LBL_CAMPAIGN_ID' => 'ID e fushatës',
    'LBL_EXISTING_ACCOUNT' => 'Përdorim i llogarisë ekzistuese',
    'LBL_CREATED_ACCOUNT' => 'Krijimi i llogarisë së re',
    'LBL_CREATED_CALL' => 'Krijimi i thirjes së re',
    'LBL_CREATED_MEETING' => 'Krijimi i mbledhjes së re',
    'LBL_NAME' => 'Emri',
    'LBL_PROSPECT_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Më tepër informacione',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_OFFICE_PHONE' => 'Telefoni i zyrës',
    'LBL_ANY_PHONE' => 'çdo numër telefoni',
    'LBL_PHONE' => 'Telefoni',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_MOBILE_PHONE' => 'Celulari',
    'LBL_HOME_PHONE' => 'Ballina:',
    'LBL_OTHER_PHONE' => 'Telefon tjetër',
    'LBL_FAX_PHONE' => 'faks',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresë primare e rrugës',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresë primare e qytetit',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresë primare e kodit postal',
    'LBL_ALT_ADDRESS_STREET' => 'Adresa alternative e rrugës',
    'LBL_ALT_ADDRESS_CITY' => 'Adresa alternative e qytetit',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresa alternative e shtetit',
    'LBL_ALT_ADDRESS_STATE' => 'Adresa alternative e shtetit',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresa alternative e kodit postal',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Departamenti',
    'LBL_BIRTHDATE' => 'Ditëlindja:',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email tjetër',
    'LBL_ANY_EMAIL' => 'çdo email',
    'LBL_ASSISTANT' => 'Ndihmë',
    'LBL_ASSISTANT_PHONE' => 'Telefon i ndihmësit',
    'LBL_DO_NOT_CALL' => 'Mos lajmëroheni',
    'LBL_EMAIL_OPT_OUT' => 'Email i zgjedhur jashtë:',
    'LBL_PRIMARY_ADDRESS' => 'Adresa primare',
    'LBL_ALTERNATE_ADDRESS' => 'Adresë tjetër:',
    'LBL_ANY_ADDRESS' => 'çdo adresë',
    'LBL_CITY' => 'Qyteti',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_ADDRESS_INFORMATION' => 'informacion rreth adresës',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_OPP_NAME' => 'Emri i mundësisë',
    'LBL_IMPORT_VCARD' => 'Importo vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Krijjo automatikisht kontakt të ri duke importuar vCard-ën nga systemi i dosjeve të tua',
    'LBL_DUPLICATE' => 'Synime të mundshme të dubluara',
    'MSG_SHOW_DUPLICATES' => 'Regjistrimi i synimitt që kryeni mund të jetë dublim i kontaktit të regjistruar që tashmë ekziston. Kontaktet e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Ruaj për të vazhduar me krijimin e kontaktit të ri, ose shtyp Anulo për tu kthyer në modulë pa krijuarkontaktin.',
    'MSG_DUPLICATE' => 'Regjistrimi i synimeve që kryeni mund të jetë dublim i synimeve të regjistruar që tashmë ekziston. Synimet e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Ruaj për të vazhduar me krijimin e synimit të ri, ose shtyp Anulim pr tu kthyer në modulë duke mos krijuar synimin.',
    'LNK_IMPORT_VCARD' => 'Krijo nga vKarta',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LNK_NEW_CASE' => 'Krijo rast',
    'LNK_NEW_NOTE' => 'Krijo shënim ose bashkëngjitje',
    'LNK_NEW_CALL' => 'Thirje identifikuese',
    'LNK_NEW_EMAIL' => 'Emaili i arkivuar',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_NEW_TASK' => 'Krijo detyrë',
    'LNK_NEW_APPOINTMENT' => 'Krijo takim',
    'LNK_IMPORT_PROSPECTS' => 'Importo prospektet',
    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
    'NTC_REMOVE_CONFIRMATION' => 'A jeni të sigurt që dëshironi të largoni këtë  kontakt nga rasti?',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë konaktin',
    'LBL_SALUTATION' => 'Përshëndetje',
    'LBL_CREATED_OPPORTUNITY' => 'Krijimi i mundësisë së re',
    'LNK_SELECT_ACCOUNT' => "Selekto llogarinë",
    'LNK_NEW_PROSPECT' => 'krijo synim',
    'LNK_PROSPECT_LIST' => 'shih synimet',
    'LNK_NEW_CAMPAIGN' => 'krijo fushatë',
    'LNK_CAMPAIGN_LIST' => 'fushatat',
    'LNK_NEW_PROSPECT_LIST' => 'krijo list të synimeve',
    'LNK_PROSPECT_LIST_LIST' => 'listat e synuara',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'selekto synimet e kontrolluara',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'selekto synimet e kontrolluara',
    'LBL_INVALID_EMAIL' => 'Email Jo Valide:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'synimet',
    'LBL_PROSPECT_LIST' => 'Lista e prospektit',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konverto synimin',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konverto synimin',
    'LNK_NEW_CONTACT' => 'Kontakt i ri',
    'LBL_CREATED_CONTACT' => "Krijimi i kontaktit të ri",
    'LBL_CAMPAIGNS' => 'fushatat',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'identifikimi i fushatës',
    'LBL_TRACKER_KEY' => 'Çelësi i gjurmuesit',
    'LBL_LEAD_ID' => 'ID e udhëheqësit',
    'LBL_CONVERTED_LEAD' => 'udhëhesia e konvertuar',
    'LBL_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_EDIT_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_CREATED_USER' => 'Përdorues i krijuar',
    'LBL_MODIFIED_USER' => 'përdorues i modifikuar',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
