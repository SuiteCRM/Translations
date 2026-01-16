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
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë llogarinë',
    'LBL_ACCOUNT_NAME' => 'Emri i kompanisë:',
    'LBL_ACCOUNT' => 'Kompania',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_ADDRESS_INFORMATION' => 'informacion rreth adresës',
    'LBL_ANNUAL_REVENUE' => 'Të ardhurat vjetore',
    'LBL_ANY_ADDRESS' => 'çdo adresë',
    'LBL_ANY_EMAIL' => 'çdo email',
    'LBL_EMAIL_NON_PRIMARY' => 'Non Primary E-mails',
    'LBL_ANY_PHONE' => 'çdo numër telefoni',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_RATING' => 'Klasifikimi:',
    'LBL_ASSIGNED_TO' => 'drejtuar',
    'LBL_ASSIGNED_USER' => 'drejtuar',
    'LBL_ASSIGNED_TO_ID' => 'drejtuar',
    'LBL_BILLING_ADDRESS_CITY' => 'Qyteti i faturës',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Shteti i faturës',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kodi postal i faturës',
    'LBL_BILLING_ADDRESS_STATE' => 'Shteti i faturës',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rruga 2 e faturës',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rruga 3 e faturës',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rruga 4 e faturës',
    'LBL_BILLING_ADDRESS_STREET' => 'Rruga e faturës',
    'LBL_BILLING_ADDRESS' => 'Adresa e faturës:',
    'LBL_ACCOUNT_INFORMATION' => 'Informacioni i kompanisë',
    'LBL_CITY' => 'Qyteti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
    'LBL_DESCRIPTION_INFORMATION' => 'Informacioni përshkrues',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DUPLICATE' => 'Llogari e mundshme e dubluar',
    'LBL_EMAIL' => 'Email adresa',
    'LBL_EMPLOYEES' => 'Puntorët',
    'LBL_FAX' => 'faks',
    'LBL_INDUSTRY' => 'Industria',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_CITY' => 'Qyteti',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_LIST_PHONE' => 'Telefoni',
    'LBL_LIST_STATE' => 'Shteti',
    'LBL_MEMBER_OF' => 'Anëtar i:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizatat anëtare',
    'LBL_NAME' => 'Emri',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email tjetër',
    'LBL_OTHER_PHONE' => 'Telefon tjetër',
    'LBL_OWNERSHIP' => 'Pronësia',
    'LBL_PARENT_ACCOUNT_ID' => 'ID e llogarisë mëmë',
    'LBL_PHONE_ALT' => 'Telefon tjetër',
    'LBL_PHONE_FAX' => 'telefon faks',
    'LBL_PHONE_OFFICE' => 'Telefoni i zyrës',
    'LBL_PHONE' => 'Telefoni',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_EMAIL_ADDRESSES' => 'Email Adresa',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_SAVE_ACCOUNT' => 'Ruaj llogarinë',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Qyteti i transportit',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shteti i transportit',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Kodi postal i transportit',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shteti i transportit',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rruga e 2 e transportit',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rruga e 3 e transportit',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rruga e 4 e transportit',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rruga e transportit',
    'LBL_SHIPPING_ADDRESS' => 'Adresa e transportit',

    'LBL_STATE' => 'State:',
    'LBL_TICKER_SYMBOL' => 'Simboli i teleshkruesit',
    'LBL_TYPE' => 'Lloji',
    'LBL_WEBSITE' => 'ueb faqja',

    'LNK_ACCOUNT_LIST' => 'Accounts',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',

    'MSG_DUPLICATE' => 'Regjistrimi i llogarisë që kryeni mund të jetë dublim i llogarisë së regjistruar që tashmë ekziston. Llogaritë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Krijo Llogari për të vazhduar me krijimin e llogarisë së re, ose selekto një nga llogaritë ekzistuese të poshtërënditura',
    'MSG_SHOW_DUPLICATES' => 'Regjistrimi i llogarisë që kryeni mund të jetë dublim i llogarisë së regjistruar që tashmë ekziston. Llogaritë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Ruaj për të vazhduar me krijimin e llogarisë së re, ose shtyp Anulo për tu kthyer në modulë pa krijuar llogarinë.',

    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',

    'LBL_EDIT_BUTTON' => 'Ndrysho',
    'LBL_REMOVE' => 'Fshijë',

);
