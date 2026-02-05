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
    'ERR_DELETE_RECORD' => 'Ettevõtte kustutamiseks täpsusta kirje numbrit.',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_ACCOUNT' => 'Ettevõte:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_ADDRESS_INFORMATION' => 'Aadressi info',
    'LBL_ANNUAL_REVENUE' => 'Aastane tulu:',
    'LBL_ANY_ADDRESS' => 'Muu aadress:',
    'LBL_ANY_EMAIL' => 'Muu E-post:',
    'LBL_EMAIL_NON_PRIMARY' => 'Mitte esmased e-postid',
    'LBL_ANY_PHONE' => 'Muu telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Kasutaja:',
    'LBL_RATING' => 'Hinnang',
    'LBL_ASSIGNED_TO' => 'Vastutaja:',
    'LBL_ASSIGNED_USER' => 'Vastutaja:',
    'LBL_ASSIGNED_TO_ID' => 'Vastutaja:',
    'LBL_BILLING_ADDRESS_CITY' => 'Linn arvel:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Maakond arvel:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Postiindeks arvel:',
    'LBL_BILLING_ADDRESS_STATE' => 'Riik arvel:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Tänav 2 arvel',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Tänav 3 arvel',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Tänav 4 arvel',
    'LBL_BILLING_ADDRESS_STREET' => 'Tänav arvel:',
    'LBL_BILLING_ADDRESS' => 'Aadress arvel:',
    'LBL_ACCOUNT_INFORMATION' => 'Ettevõtte info',
    'LBL_CITY' => 'Linn:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_COUNTRY' => 'Riik;',
    'LBL_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ettevõtted',
    'LBL_DESCRIPTION_INFORMATION' => 'Kirjelduse info',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_DUPLICATE' => 'Võimalikud topelt ettevõte',
    'LBL_EMAIL' => 'E-post:',
    'LBL_EMPLOYEES' => 'Töötajaid:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Tööstusharu:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_CITY' => 'Linn:',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-post:',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Riik',
    'LBL_MEMBER_OF' => 'Liige',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Liikmesorganisatsioonid',
    'LBL_NAME' => 'Nimi:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Teine e-post:',
    'LBL_OTHER_PHONE' => 'Teine telefon:',
    'LBL_OWNERSHIP' => 'Omandivorm:',
    'LBL_PARENT_ACCOUNT_ID' => 'Peamise konto ID',
    'LBL_PHONE_ALT' => 'Alternatiivne telefon:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Töötelefon:',
    'LBL_PHONE' => 'Tlf number:',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_EMAIL_ADDRESSES' => 'E-posti aadress(d)',
    'LBL_POSTAL_CODE' => 'Postiindeks:',
    'LBL_SAVE_ACCOUNT' => 'Salvesta ettevõte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Tarne linn:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Tarne maakond:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Tarne postiindeks:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Tarne riik:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Tarne tänav 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Tarne tänav 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Tarne tänav 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Tarne tänav:',
    'LBL_SHIPPING_ADDRESS' => 'Tarne aadress:',

    'LBL_STATE' => 'Olek:',
    'LBL_TICKER_SYMBOL' => 'Tikkeri sümbol:',
    'LBL_TYPE' => 'Tüüp:',
    'LBL_WEBSITE' => 'Veebisait:',

    'LNK_ACCOUNT_LIST' => 'Ettevõtted',
    'LNK_NEW_ACCOUNT' => 'Loo ettevõte',

    'MSG_DUPLICATE' => 'Ettevõtte kirje, mida hetkel lood võib olla duplikaat juba olemasolevast ettevõtte kirjest. Kirjed, mis sisaldavad sarnaseid nimesid on väljatoodud allpool. Kliki Salvesta selle uue konto loomiseks või kliki Tühista moodulisse tagasiminemiseks kontot loomata.',
    'MSG_SHOW_DUPLICATES' => 'Ettevõtte kirje, mida hetkel lood võib olla duplikaat juba olemasolevast ettevõtte kirjest. Kirjed, mis sisaldavad sarnaseid nimesid on väljatoodud allpool. Kliki Salvesta selle uue konto loomiseks või kliki Tühista moodulisse tagasiminemiseks kontot loomata.',

    'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid seda kirjet kustutada?',

    'LBL_EDIT_BUTTON' => 'Muuda  ',
    'LBL_REMOVE' => 'Eemalda',

);
