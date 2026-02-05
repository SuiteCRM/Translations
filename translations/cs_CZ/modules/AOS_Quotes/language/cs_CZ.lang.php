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
    'LBL_ASSIGNED_TO_ID' => 'ID přiřazeného uživatele',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil',
    'LBL_MODIFIED_NAME' => 'Změněno dle Jména',
    'LBL_CREATED' => 'Vytvořeno',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_NAME' => 'Nadpis',
    'LBL_CREATED_USER' => 'Vytvořeno dle Uživatele',
    'LBL_MODIFIED_USER' => 'Změněno dle Uživatele',
    'ERR_DELETE_RECORD' => 'Pro smazání Firmy musíte zadat číslo záznamu.',
    'LBL_ACCOUNT_NAME' => 'Nadpis',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informace o adrese',
    'LBL_ANNUAL_REVENUE' => 'Roční obrat:',
    'LBL_ANY_ADDRESS' => 'Jakákoliv adresa:',
    'LBL_ANY_EMAIL' => 'Jakýkoliv Email:',
    'LBL_ANY_PHONE' => 'Jakýkoli telefon:',
    'LBL_RATING' => 'Hodnocení',
    'LBL_ASSIGNED_USER' => 'Uživatel',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturační Město:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturační Kraj:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturační PSČ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturační Kraj:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturační Ulice 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturační Ulice 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturační Ulice 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturační Ulice:',
    'LBL_BILLING_ADDRESS' => 'Fakturační Adresa:',
    'LBL_ACCOUNT_INFORMATION' => 'Informace o cíli',
    'LBL_CITY' => 'Město:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmy',
    'LBL_DUPLICATE' => 'Možná duplicitní Firma',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Zaměstnanci:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Odvětví:',
    'LBL_LIST_ACCOUNT_NAME' => 'Název Firmy',
    'LBL_LIST_CITY' => 'Město',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emailová adresa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Kraj',
    'LBL_MEMBER_OF' => 'Člen:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Členské organizace',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Jiný Email:',
    'LBL_OTHER_PHONE' => 'Jiný Telefon:',
    'LBL_OWNERSHIP' => 'Vlastnictví:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID nadřazeného účtu',
    'LBL_PHONE_ALT' => 'Alternativní Telefon:',
    'LBL_PHONE_FAX' => 'Fax do telefonu:',
    'LBL_PHONE_OFFICE' => 'Telefon práce:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_SAVE_ACCOUNT' => 'Uložit Firmu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Doručovací Město:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Doručovací Kraj:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Doručovací PSČ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Doručovací Kraj:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Doručovací Ulice 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Doručovací Ulice 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Doručovací Ulice 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Doručovací Ulice:',
    'LBL_SHIPPING_ADDRESS' => 'Doručovací adresa:',
    'LBL_STATE' => 'Oblast nebo kraj:',
    'LBL_TICKER_SYMBOL' => 'Symbol budíku:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Webová stránka:',
    'LNK_ACCOUNT_LIST' => 'Firmy',
    'LNK_NEW_ACCOUNT' => 'Vytvořit Firmu',
    'MSG_DUPLICATE' => 'Vytvořením tohoto účtu můžete potenciálně vytvořit duplicitní účet. Můžete buď vybrat účet ze seznamu níže nebo můžete kliknout na Uložení a pokračovat ve vytváření nového účtu s dříve zadanými daty.',
    'MSG_SHOW_DUPLICATES' => 'Vytvořením tohoto účtu můžete potenciálně vytvořit duplicitní účet. Můžete buď kliknout na Uložit a pokračovat ve vytváření tohoto nového účtu s dříve zadanými daty, nebo vytváření zrušit klepnutím na tlačítko Storno.',
    'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam?',
    'LBL_LIST_FORM_TITLE' => 'Seznam nabídek',
    'LBL_MODULE_NAME' => 'Nabídky',
    'LBL_MODULE_TITLE' => 'Nabídky: Domů',
    'LBL_HOMEPAGE_TITLE' => 'Moje nabídky',
    'LNK_NEW_RECORD' => 'Vytvořit nabídku',
    'LNK_LIST' => 'Zobrazit nabídku',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat nabídky',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_NEW_FORM_TITLE' => 'Nová nabídka',
    'LBL_TERMS_C' => 'Podmínky',
    'LBL_APPROVAL_ISSUE' => 'Problémy se schválením',
    'LBL_APPROVAL_STATUS' => 'Stav schválení',
    'LBL_BILLING_ACCOUNT' => 'Firma',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Platné do',
    'LBL_QUOTE_NUMBER' => 'Číslo nabídky',
    'LBL_OPPORTUNITY' => 'Příležitost',
    'LBL_TEMPLATE_DDOWN_C' => 'Šablona nabídky',
    'LBL_STAGE' => 'Fáze nabídky',
    'LBL_TERM' => 'Platební podmínky',
    'LBL_SUBTOTAL_AMOUNT' => 'Mezisoučet',
    'LBL_DISCOUNT_AMOUNT' => 'Sleva',
    'LBL_TAX_AMOUNT' => 'Daň',
    'LBL_SHIPPING_AMOUNT' => 'Doprava',
    'LBL_TOTAL_AMT' => 'Celkem',
    'VALUE' => 'Nadpis',
    'LBL_EMAIL_ADDRESSES' => 'Emailové adresy',
    'LBL_LINE_ITEMS' => 'Položky řádku',
    'LBL_GRAND_TOTAL' => 'Celkový součet',
    'LBL_INVOICE_STATUS' => 'Stav faktury',
    'LBL_PRODUCT_QUANITY' => 'Množství',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Číslo položky',
    'LBL_PRODUCT_NOTE' => 'Poznámka',
    'LBL_PRODUCT_DESCRIPTION' => 'Popis',
    'LBL_LIST_PRICE' => 'Seznam',
    'LBL_DISCOUNT_AMT' => 'Sleva',
    'LBL_UNIT_PRICE' => 'Prodejní cena',
    'LBL_TOTAL_PRICE' => 'Celkem',
    'LBL_VAT' => 'Daň', // VAT
    'LBL_VAT_AMT' => 'Výše daně', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Přidat řadu produktů',
    'LBL_SERVICE_NAME' => 'Služba',
    'LBL_SERVICE_LIST_PRICE' => 'Seznam',
    'LBL_SERVICE_PRICE' => 'Prodejní cena',
    'LBL_SERVICE_DISCOUNT' => 'Sleva',
    'LBL_ADD_SERVICE_LINE' => 'Přidat řádek servisu ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Odebrat',
    'LBL_CONVERT_TO_INVOICE' => 'Převést na fakturu',
    'LBL_PRINT_AS_PDF' => 'Tisk jako PDF',
    'LBL_EMAIL_QUOTE' => 'Nabídka e-mailem',
    'LBL_CREATE_CONTRACT' => 'Vytvořit smlouvu',
    'LBL_LIST_NUM' => 'Poč',
    'LBL_PDF_NAME' => 'Nabídka',
    'LBL_EMAIL_NAME' => 'Nabídka pro',
    'LBL_QUOTE_DATE' => 'Datum nabídky',
    'LBL_NO_TEMPLATE' => 'CHYBA\nNebyly nalezeny žádné šablony. Pokud jste nevytvořili šablonu nabídky, přejděte do modulu PDF šablony a jednu vytvořte',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Mezisoučet + Daň',//pre shipping
    'LBL_EMAIL_PDF' => 'Zaslat PDF emailem',
    'LBL_ADD_GROUP' => 'Přidat skupinu',
    'LBL_DELETE_GROUP' => 'Odstranit skupinu',
    'LBL_GROUP_NAME' => 'Jméno skupiny',
    'LBL_GROUP_TOTAL' => 'Celkem za skupinu',
    'LBL_SHIPPING_TAX' => 'Přepravní daň',
    'LBL_SHIPPING_TAX_AMT' => 'Přepravní daň',
    'LBL_IMPORT_LINE_ITEMS' => 'Importovat položky řádku',
    'LBL_CREATE_OPPORTUNITY' => 'Vytvořit příležitost',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Mezisoučet (výchozí měna)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Sleva (výchozí měna)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Daň (výchozí měna)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Doprava (výchozí měna)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Celkem (standartní měna)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Přepravní daň (výchozí měna)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Celkový součet (výchozí měna)',
    'LBL_QUOTE_TO' => 'Nabídka pro',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Mezisoučet + Daň (výchozí měna)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Nabídky: smlouvy',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Nabídky: faktury',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Řada skupiny položek',
    'LBL_AOS_PRODUCT_QUOTES' => 'Nabídky produktů',
    'LBL_AOS_QUOTES_PROJECT' => 'Nabídky: projekt',
);
