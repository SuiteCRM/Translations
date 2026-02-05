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
    'ERR_DELETE_RECORD' => 'Ett nummer på posten måste specifiseras för att ta bort kontot.',
    'LBL_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_ACCOUNT' => 'Företag:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ANNUAL_REVENUE' => 'Årlig Inkomst:',
    'LBL_ANY_ADDRESS' => 'Adress:',
    'LBL_ANY_EMAIL' => 'E-post',
    'LBL_EMAIL_NON_PRIMARY' => 'Inga primära mail',
    'LBL_ANY_PHONE' => 'Telefonnummer',
    'LBL_ASSIGNED_TO_NAME' => 'Användare:',
    'LBL_RATING' => 'Värdering',
    'LBL_ASSIGNED_TO' => 'Tilldelad till:',
    'LBL_ASSIGNED_USER' => 'Tilldelad till:',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad till:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturaadress:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktura Land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Postnummer',
    'LBL_BILLING_ADDRESS_STATE' => 'Faktura Län',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturaadress 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturaadress 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturaadress 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faktureringsadress',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadress:',
    'LBL_ACCOUNT_INFORMATION' => 'Företagsinformation',
    'LBL_CITY' => 'Stad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DATE_ENTERED' => 'Datum Skapad:',
    'LBL_DATE_MODIFIED' => 'Datum Ändrad:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Konton',
    'LBL_DESCRIPTION_INFORMATION' => 'Beskrivnings Information',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DUPLICATE' => 'Möjliga Konto Dubletter',
    'LBL_EMAIL' => 'E-postadress:',
    'LBL_EMPLOYEES' => 'Anställda:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_CITY' => 'Stad',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadress',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Landskap',
    'LBL_MEMBER_OF' => 'Medlem av:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisationer',
    'LBL_NAME' => 'Namn:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annan E-post:',
    'LBL_OTHER_PHONE' => 'Annan Telefon:',
    'LBL_OWNERSHIP' => 'Ägarskap:',
    'LBL_PARENT_ACCOUNT_ID' => 'Moder Konto ID',
    'LBL_PHONE_ALT' => 'Alternativ Telefon:',
    'LBL_PHONE_FAX' => 'Telefon Fax:',
    'LBL_PHONE_OFFICE' => 'Telfon Arbete:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-postadress',
    'LBL_EMAIL_ADDRESSES' => 'E-postadress(er)',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_SAVE_ACCOUNT' => 'Spara Konto',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Frakt Stad:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Frakt Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Frakt Postnummer:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Frakt Landskap:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Frakt Gata 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Frakt Gata 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Frakt Gata 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Frakt Gata:',
    'LBL_SHIPPING_ADDRESS' => 'Frakt Adress:',

    'LBL_STATE' => 'Stat:',
    'LBL_TICKER_SYMBOL' => 'Märknings Symbol:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Hemsida:',

    'LNK_ACCOUNT_LIST' => 'Konton',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',

    'MSG_DUPLICATE' => 'Att skapa detta konto kan eventuellt skapa en dublett av kontot. Du kan antingen välja ett konto från listan nedanför eller kan du klicka på Spara, för att forsätta med skapandet av detta kontot med nyligen inlaggd data.',
    'MSG_SHOW_DUPLICATES' => 'Att skapa detta konto kan eventuellt skapa en dublett av kontot. Du kan antingen klicka på Spara, för att forsätta med skapandet av detta kontot med nyligen inlaggd data eller kan du trycka på Avbryt.',

    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort denna posten?',

    'LBL_EDIT_BUTTON' => 'Redigera',
    'LBL_REMOVE' => 'Ta bort',

);
