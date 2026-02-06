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
    'ERR_DELETE_RECORD' => 'Za izbris Partnerja morate definirati številko zapisa.',
    'LBL_ACCOUNT_NAME' => 'Ime podjetja:',
    'LBL_ACCOUNT' => 'Podjetje:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_ANNUAL_REVENUE' => 'Letni prihodki:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_ANY_EMAIL' => 'Katerakoli e-pošta:',
    'LBL_EMAIL_NON_PRIMARY' => 'Dodatni elektronski naslovi',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_RATING' => 'Ocena',
    'LBL_ASSIGNED_TO' => 'Dodeljeno:',
    'LBL_ASSIGNED_USER' => 'Dodeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeno:',
    'LBL_BILLING_ADDRESS_CITY' => 'Mesto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Regija:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštna številka:',
    'LBL_BILLING_ADDRESS_STATE' => 'Država:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica 2:',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica 3:',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica 4:',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica:',
    'LBL_BILLING_ADDRESS' => 'Naslov za račun:',
    'LBL_ACCOUNT_INFORMATION' => 'Informacije o podjetju',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_DATE_ENTERED' => 'Datum vnosa:',
    'LBL_DATE_MODIFIED' => 'Datum spremembe:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Računi',
    'LBL_DESCRIPTION_INFORMATION' => 'Opisne informacije',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Mogoča podvojitev Partnerja',
    'LBL_EMAIL' => 'E-pošta:',
    'LBL_EMPLOYEES' => 'Zaposleni:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Panoga:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime računa',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-poštni naslov',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Država',
    'LBL_MEMBER_OF' => 'Član:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članske organizacije',
    'LBL_NAME' => 'Ime:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga e-pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Lastništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID nadrejenega Partnerja',
    'LBL_PHONE_ALT' => 'Alternativni telefon:',
    'LBL_PHONE_FAX' => 'Telefon, Fax:',
    'LBL_PHONE_OFFICE' => 'Telefon pisarna:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-poštni naslov',
    'LBL_EMAIL_ADDRESSES' => 'E-poštni naslov(i)',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_SAVE_ACCOUNT' => 'Shrani Partnerja',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Naslov pošiljanja, mesto:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Naslov pošiljanja, regija:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Naslov pošiljanja, poštna številka:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Naslov pošiljanja, država:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Naslov pošiljanja, ulica 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Naslov pošiljanja, ulica 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Naslov pošiljanja, ulica 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Naslov pošiljanja, ulica:',
    'LBL_SHIPPING_ADDRESS' => 'Naslov pošiljanja:',

    'LBL_STATE' => 'Stanje:',
    'LBL_TICKER_SYMBOL' => 'Kratica:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Spletna stran:',

    'LNK_ACCOUNT_LIST' => 'Računi',
    'LNK_NEW_ACCOUNT' => 'Ustvari partnerja',

    'MSG_DUPLICATE' => 'Podvajate Partnerja. Lahko izberete partnerja iz spodnjega seznama, ali pa kliknite Shrani za podvojitev Partnerja',
    'MSG_SHOW_DUPLICATES' => 'Podvajate Partnerja. Kliknite Shrani za podvojitev Partnerja, ali pa klikni Prekliči.',

    'NTC_DELETE_CONFIRMATION' => 'Ste prepričani, da želite izbrisati ta vnos?',

    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_REMOVE' => 'Odstrani',

);
