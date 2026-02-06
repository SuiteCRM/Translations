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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    // Dashlet Categories
    'LBL_CHARTS' => 'Grafy',
    'LBL_DEFAULT' => 'Náhledy',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Pro smazání klienta musíte určit číslo záznamu.',
    'LBL_ACCOUNT_INFORMATION' => 'Informace o klientovi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Jméno klienta:',
    'LBL_ACCOUNT' => 'Klient:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informace o adrese',
    'LBL_ANNUAL_REVENUE' => 'Roční obrat:',
    'LBL_ANY_ADDRESS' => 'Ostatní adresa:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k:',
    'LBL_ASSIGNED_TO_ID' => 'Přiřazený uživatel:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturační město:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturační země:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturační PSČ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturační Kraj:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturační ulice 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturační ulice 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturační ulice 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturační ulice:',
    'LBL_BILLING_ADDRESS' => 'Fakturační adresa:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
    'LBL_CAMPAIGN_ID' => 'ID kampaně',
    'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
    'LBL_CITY' => 'Město:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Země:',
    'LBL_DATE_ENTERED' => 'Datum zadání:',
    'LBL_DATE_MODIFIED' => 'Datum změny:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmy',
    'LBL_DESCRIPTION_INFORMATION' => 'Popis',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DUPLICATE' => 'Možný duplicitní účet',
    'LBL_EMAIL' => 'Emailová adresa:',
    'LBL_EMAIL_OPT_OUT' => 'Možno poslat email:',
    'LBL_EMAIL_ADDRESSES' => 'Emailové adresy',
    'LBL_EMPLOYEES' => 'Zaměstnanci:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_HOMEPAGE_TITLE' => 'Můj účet',
    'LBL_INDUSTRY' => 'Odvětví:',
    'LBL_INVALID_EMAIL' => 'Neplatný email:',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciativy',
    'LBL_LIST_ACCOUNT_NAME' => 'Jméno',
    'LBL_LIST_CITY' => 'Město',
    'LBL_LIST_CONTACT_NAME' => 'Název kontaktu',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emailová adresa',
    'LBL_LIST_FORM_TITLE' => 'Seznam klientů',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Ve stavu',
    'LBL_MEMBER_OF' => 'Člen:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Členské organizace',
    'LBL_MODULE_NAME' => 'Firmy',
    'LBL_MODULE_TITLE' => 'Firmy: Domů',
    'LBL_MODULE_ID' => 'Firmy',
    'LBL_NAME' => 'Jméno:',
    'LBL_NEW_FORM_TITLE' => 'Přidat klienta',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Příležitosti',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Další email:',
    'LBL_OTHER_PHONE' => 'Další telefon:',
    'LBL_OWNERSHIP' => 'Vlastnictví:',
    'LBL_PARENT_ACCOUNT_ID' => 'Rodičovský účet ID',
    'LBL_PHONE_ALT' => 'Alternativní Telefon:',
    'LBL_PHONE_FAX' => 'Fax práce:',
    'LBL_PHONE_OFFICE' => 'Telefon práce:',
    'LBL_PHONE' => 'Telefon',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_PRODUCTS_TITLE' => 'Produkty',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopírovat do kontaktů',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopie...',
    'LBL_RATING' => 'Hodnocení:',
    'LBL_SAVE_ACCOUNT' => 'Uložit účet',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání klientů',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Město:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Země:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Doručovací PSČ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Doručovací Kraj:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Doručovací adresa 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Doručovací adresa 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Doručovací adresa 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulice:',
    'LBL_SHIPPING_ADDRESS' => 'Zasílací adresa:',
    'LBL_SIC_CODE' => 'SIC kód:',
    'LBL_STATE' => 'Oblast nebo kraj:',
    'LBL_TICKER_SYMBOL' => 'Symbol budíku:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'WWW stránky:',
    'LBL_CAMPAIGNS' => 'Kampaně',
    'LNK_ACCOUNT_LIST' => 'Zobrazit účty',
    'LNK_NEW_ACCOUNT' => 'Přidat klienta',
    'LNK_IMPORT_ACCOUNTS' => 'Importovat klienty',
    'MSG_DUPLICATE' => 'Přidáním tohoto klienta můžete vytvořit duplicitního klienta. Můžete vybrat klienta ze seznamu níže nebo kliknout na Přidat klienta pro přidání nového klienta se zadanými údaji.',
    'MSG_SHOW_DUPLICATES' => 'Vytvoření tohoto kontaktu může potenciálně duplicitní kontakt. Pokud chcete účet vytvořit se zadanými údaji klikněte na Přidat účet jinak na Zrušit.',
    'LBL_ASSIGNED_USER_NAME' => 'Přiřazeno k:',
    'LBL_PROSPECT_LIST' => 'Seznam možných zákazníků',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    //For export labels
    'LBL_PARENT_ID' => 'Rodičovské ID ',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Zakoupené produkty a služby',

    'LBL_AOS_CONTRACTS' => 'Kontrakty',
    'LBL_AOS_INVOICES' => 'Faktury',
    'LBL_AOS_QUOTES' => 'Nabídky',
    'LBL_LIST_WEBSITE' => 'website',
);
