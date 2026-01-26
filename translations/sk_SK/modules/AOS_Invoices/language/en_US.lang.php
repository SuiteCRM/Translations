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
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID používateľa',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NAME' => 'Titul',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'ERR_DELETE_RECORD' => 'Pre zrušenie konta je potrebné zadať číslo záznamu.',
    'LBL_ACCOUNT_NAME' => 'Titul',
    'LBL_ACCOUNT' => 'Spoločnosť:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informácie o adrese',
    'LBL_ANNUAL_REVENUE' => 'Ročný príjem:',
    'LBL_ANY_ADDRESS' => 'Akákoľvek adresa:',
    'LBL_ANY_EMAIL' => 'Akýkoľvek email:',
    'LBL_ANY_PHONE' => 'Telefón:',
    'LBL_RATING' => 'Hodnotenie',
    'LBL_ASSIGNED_USER' => 'Užívateľ',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturačné mesto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturačná krajina:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturačné PSČ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturačný štát:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturačná ulica 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturačná ulica 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturačná ulica 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturačná ulica:',
    'LBL_BILLING_ADDRESS' => 'Fakturačná adresa:',
    'LBL_ACCOUNT_INFORMATION' => 'Prehľad schôdzky',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmy',
    'LBL_DUPLICATE' => 'Možný duplicitný klient',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Zamestnanci:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Odvetvie:',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailová adresa',
    'LBL_LIST_PHONE' => 'Telefón',
    'LBL_LIST_STATE' => 'Štát',
    'LBL_MEMBER_OF' => 'Člen:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Členské organizácie',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iný email:',
    'LBL_OTHER_PHONE' => 'Další telefón:',
    'LBL_OWNERSHIP' => 'Vlastníctvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID hlavnej Firmy',
    'LBL_PHONE_ALT' => 'Ďalší telefón:',
    'LBL_PHONE_FAX' => 'Telefón/ Fax:',
    'LBL_PHONE_OFFICE' => 'Telefón:',
    'LBL_PHONE' => 'Telefón:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_SAVE_ACCOUNT' => 'Uložiť Firmu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Mesto (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Krajina (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'PSČ (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Štát (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica 2 (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica 3 (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica 4 (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS' => 'Adresa (korenšpondencia):',
    'LBL_STATE' => 'Oblasť alebo kraj:',
    'LBL_TICKER_SYMBOL' => 'Skratka akcie:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'WWW stránka:',
    'LNK_ACCOUNT_LIST' => 'Firmy',
    'LNK_NEW_ACCOUNT' => 'Nový firma',
    'MSG_DUPLICATE' => 'Vytvorenie tohto účtu môže potenciálne vytvoriť duplicitný účet. Môžete buď vybrať účet zo zoznamu nižšie, alebo môžete kliknúť na Uložiť a pokračovať vo vytváraní nového účtu s predtým zadanými údajmi.',
    'MSG_SHOW_DUPLICATES' => 'Vytvorenie tohto účtu môže potenciálne vytvoriť duplicitný účet. Môžete buď kliknúť na Uložiť, ak chcete vytvoriť nový účet s predtým zadanými údajmi, alebo kliknite na Zrušiť.',
    'NTC_DELETE_CONFIRMATION' => 'Skutočne chcete zmazať tento záznam?',
    'LBL_LIST_FORM_TITLE' => 'Zoznam faktúr',
    'LBL_MODULE_NAME' => 'Faktúry',
    'LBL_MODULE_TITLE' => 'Faktúry: Domov',
    'LBL_HOMEPAGE_TITLE' => 'Moje faktúry',
    'LNK_NEW_RECORD' => 'Vytvoriť faktúru',
    'LNK_LIST' => 'Zobraziť faktúru',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadanie faktúry',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobraziť Históriu',
    'LBL_NEW_FORM_TITLE' => 'Nová faktúra',
    'LBL_TERMS_C' => 'Podmienky',
    'LBL_APPROVAL_ISSUE' => 'Otázky schválenia',
    'LBL_APPROVAL_STATUS' => 'Stav schválenia',
    'LBL_BILLING_ACCOUNT' => 'Firma',
    'LBL_BILLING_CONTACT' => 'Kontakt',
    'LBL_EXPIRATION' => 'Platné do',
    'LBL_INVOICE_NUMBER' => 'Číslo faktúry',
    'LBL_OPPORTUNITY' => 'Názov obchodnej príležitosti:',
    'LBL_TEMPLATE_DDOWN_C' => 'Šablóny faktúr',
    'LBL_STAGE' => 'Stav ponuky',
    'LBL_TERM' => 'Platobné podmienky',
    'LBL_SUBTOTAL_AMOUNT' => 'Medzisúčet',
    'LBL_DISCOUNT_AMOUNT' => 'Zľava',
    'LBL_TAX_AMOUNT' => 'Daň',
    'LBL_SHIPPING_AMOUNT' => 'Lodná doprava',
    'LBL_TOTAL_AMT' => 'Spolu',
    'VALUE' => 'Titul',
    'LBL_EMAIL_ADDRESSES' => 'E-malové adresy',
    'LBL_LINE_ITEMS' => 'Riadkové položky',
    'LBL_GRAND_TOTAL' => 'Celkový súčet',
    'LBL_QUOTE_NUMBER' => 'Číslo ponuky',
    'LBL_QUOTE_DATE' => 'Dátum ponuky',
    'LBL_INVOICE_DATE' => 'Dátum fakturácie',
    'LBL_DUE_DATE' => 'do dátumu',
    'LBL_STATUS' => 'Stav',
    'LBL_INVOICE_STATUS' => 'Stav faktúry',
    'LBL_PRODUCT_QUANITY' => 'Množstvo',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Číslo položky',
    'LBL_PRODUCT_NOTE' => 'Poznámky',
    'LBL_PRODUCT_DESCRIPTION' => 'Popis',
    'LBL_LIST_PRICE' => 'Zoznam',
    'LBL_DISCOUNT_AMT' => 'Zľava',
    'LBL_UNIT_PRICE' => 'Predajná cena',
    'LBL_TOTAL_PRICE' => 'Spolu',
    'LBL_VAT' => 'Daň', //VAT
    'LBL_VAT_AMT' => 'Čiastka dane', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Pridať produktový rad',
    'LBL_SERVICE_NAME' => 'Služba',
    'LBL_SERVICE_LIST_PRICE' => 'Zoznam',
    'LBL_SERVICE_PRICE' => 'Predajná cena',
    'LBL_SERVICE_DISCOUNT' => 'Zľava',
    'LBL_ADD_SERVICE_LINE' => 'Pridať riadok servisu ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Odstrániť',
    'LBL_PRINT_AS_PDF' => 'Vytlačiť vo formáte PDF',
    'LBL_EMAIL_INVOICE' => 'Poslať faktúru emailom',
    'LBL_LIST_NUM' => 'č.',
    'LBL_PDF_NAME' => 'Faktúra',
    'LBL_EMAIL_NAME' => 'Faktúra za',
    'LBL_NO_TEMPLATE' => 'CHYBA\nNebola nájdená žiadna šablóna. Ak nemáte vytvorenú žiadnu šablónu faktúry, choďte do modulu PDF šablóny a jednu vytvorte',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Medzisúčet + daň',//pre shipping
    'LBL_EMAIL_PDF' => 'Zaslať PDF emailom',
    'LBL_ADD_GROUP' => 'Pridať skupinu',
    'LBL_DELETE_GROUP' => 'Odstrániť skupinu',
    'LBL_GROUP_NAME' => 'Meno skupiny',
    'LBL_GROUP_TOTAL' => 'Za skupinu spolu',
    'LBL_SHIPPING_TAX' => 'Prepravná daň',
    'LBL_SHIPPING_TAX_AMT' => 'Prepravná daň',
    'LBL_IMPORT_LINE_ITEMS' => 'Importovať položky riadku',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Medzisúčet (predvolená mena)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Zľava (predvolená mena)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Daň (predvolená mena)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Poštovné (predvolená mena)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Spolu (predvolená mena)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Prepravná daň (predvolená mena)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Celkový súčet (predvolená mena)',
    'LBL_INVOICE_TO' => 'Faktúra za',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Skupiny riadkových položiek',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ponuky produktov',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Cenové ponuky: Faktúry',
);
