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
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó ID',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Módosító',
    'LBL_MODIFIED_NAME' => 'Módosító név',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_DELETED' => 'Törölve',
    'LBL_NAME' => 'Megnevezés',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a kliens törléséhez.',
    'LBL_ACCOUNT_NAME' => 'Megnevezés',
    'LBL_ACCOUNT' => 'Cég:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ANNUAL_REVENUE' => 'Éves bevétel:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Egyéb telefon:',
    'LBL_RATING' => 'Minősítés:',
    'LBL_ASSIGNED_USER' => 'Felhasználó',
    'LBL_BILLING_ADDRESS_CITY' => 'Számlázási cím, város:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Számlázási ország:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Számlázási irányítószám:',
    'LBL_BILLING_ADDRESS_STATE' => 'Számlázási megye/régió:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Számlázási cím, utca 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Számlázási cím, utca 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Számlázási cím, utca 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Számlázási cím, utca:',
    'LBL_BILLING_ADDRESS' => 'Számlázási cím:',
    'LBL_ACCOUNT_INFORMATION' => 'Áttekintés',
    'LBL_CITY' => 'Város:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_DUPLICATE' => 'Lehetséges Ügyfél duplikáció',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Alkalmazottak:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Ágazat:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_CITY' => 'Város',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email cím',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Megye',
    'LBL_MEMBER_OF' => 'Tagság:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Tag szervezetek',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb eMail:',
    'LBL_OTHER_PHONE' => 'Egyéb telefon:',
    'LBL_OWNERSHIP' => 'Tulajdonjog:',
    'LBL_PARENT_ACCOUNT_ID' => 'Anyacég azonosító',
    'LBL_PHONE_ALT' => 'Egyéb telefon:',
    'LBL_PHONE_FAX' => 'Telefon Fax:',
    'LBL_PHONE_OFFICE' => 'Irodai Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_SAVE_ACCOUNT' => 'Ügyfél mentése',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Szállítási cím Város:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Szállítási cím Ország:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Szállítási cím Irányítószám:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Szállítási cím megye:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Szállítási cím utca 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Szállítási cím utca 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Szállítási cím utca 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Szállítási cím Utca:',
    'LBL_SHIPPING_ADDRESS' => 'Szállítási cím:',
    'LBL_STATE' => 'Állam vagy régió:',
    'LBL_TICKER_SYMBOL' => 'Óra szimbólum:',
    'LBL_TYPE' => 'Típus:',
    'LBL_WEBSITE' => 'WEB:',
    'LNK_ACCOUNT_LIST' => 'Ügyfelek',
    'LNK_NEW_ACCOUNT' => 'Ügyfél létrehozás',
    'MSG_DUPLICATE' => 'Az Ügyfél létrehozása duplikációt eredményezhet. Kérem, válasszon egy már meglevőt a listából, vagy a Mentés gombra kattintva hozza létre az új Ügyfelet az előzőleg rögzített adatokkal.',
    'MSG_SHOW_DUPLICATES' => 'Az Ügyfél létrehozása duplikációt eredményezhet. A Mentés gombra kattintva hozza létre az új Ügyfelet vagy a Mégsem gombra kattintva hagyja a csudába.',
    'NTC_DELETE_CONFIRMATION' => 'Biztosan törölni szeretné a rekordot?',
    'LBL_LIST_FORM_TITLE' => 'Ajánlat lista',
    'LBL_MODULE_NAME' => 'Ajánlatok',
    'LBL_MODULE_TITLE' => 'Ajánlat: Főoldal',
    'LBL_HOMEPAGE_TITLE' => 'Ajánlataim',
    'LNK_NEW_RECORD' => 'Ajánlat létrehozása',
    'LNK_LIST' => 'Ajánlat nézet',
    'LBL_SEARCH_FORM_TITLE' => 'Ajánlat keresése',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_NEW_FORM_TITLE' => 'Ajánlat létrehozása',
    'LBL_TERMS_C' => 'Feltételek',
    'LBL_APPROVAL_ISSUE' => 'Jóváhagyási kérdések',
    'LBL_APPROVAL_STATUS' => 'Jóváhagyási állapot',
    'LBL_BILLING_ACCOUNT' => 'Ügyfél',
    'LBL_BILLING_CONTACT' => 'Kapcsolattartó',
    'LBL_EXPIRATION' => 'Érvényes-ig',
    'LBL_QUOTE_NUMBER' => 'Ajánlat száma',
    'LBL_OPPORTUNITY' => 'Lehetőség',
    'LBL_TEMPLATE_DDOWN_C' => 'Ajánlat sablon',
    'LBL_STAGE' => 'Ajánlat állapota',
    'LBL_TERM' => 'Fizetési feltételek',
    'LBL_SUBTOTAL_AMOUNT' => 'Részösszeg',
    'LBL_DISCOUNT_AMOUNT' => 'Kedvezmény',
    'LBL_TAX_AMOUNT' => 'ÁFA',
    'LBL_SHIPPING_AMOUNT' => 'Szállítás',
    'LBL_TOTAL_AMT' => 'Összesen',
    'VALUE' => 'Megnevezés',
    'LBL_EMAIL_ADDRESSES' => 'Email címek',
    'LBL_LINE_ITEMS' => 'Tételek',
    'LBL_GRAND_TOTAL' => 'Mindösszesen',
    'LBL_INVOICE_STATUS' => 'Számla állapota',
    'LBL_PRODUCT_QUANITY' => 'Mennyiség',
    'LBL_PRODUCT_NAME' => 'Termék',
    'LBL_PART_NUMBER' => 'Termékszám',
    'LBL_PRODUCT_NOTE' => 'Jegyzet',
    'LBL_PRODUCT_DESCRIPTION' => 'Leírás',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Kedvezmény',
    'LBL_UNIT_PRICE' => 'Eladási ár',
    'LBL_TOTAL_PRICE' => 'Összesen',
    'LBL_VAT' => 'ÁFA', // VAT
    'LBL_VAT_AMT' => 'ÁFAösszeg', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Új termék számlasor',
    'LBL_SERVICE_NAME' => 'Szervíz',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Eladási ár',
    'LBL_SERVICE_DISCOUNT' => 'Kedvezmény',
    'LBL_ADD_SERVICE_LINE' => 'Új szolgáltatás számlasor',
    'LBL_REMOVE_PRODUCT_LINE' => 'Eltávolítás',
    'LBL_CONVERT_TO_INVOICE' => 'Számlává konvertál',
    'LBL_PRINT_AS_PDF' => 'Nyomtatás PDF-ként',
    'LBL_EMAIL_QUOTE' => 'Email ajánlat',
    'LBL_CREATE_CONTRACT' => 'Szerződés létrehozása',
    'LBL_LIST_NUM' => 'Szám',
    'LBL_PDF_NAME' => 'Árajánlat',
    'LBL_EMAIL_NAME' => 'Ajánlat részére',
    'LBL_QUOTE_DATE' => 'Ajánlat dátuma',
    'LBL_NO_TEMPLATE' => 'Hiba\nNem található sablon. Kérem, a PDF-sablonok modulban hozzon létre egyet!',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Részösszeg Brutto',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF melléklettel',
    'LBL_ADD_GROUP' => 'Csoport hozzáadása',
    'LBL_DELETE_GROUP' => 'Csoport törlése',
    'LBL_GROUP_NAME' => 'Csoport neve',
    'LBL_GROUP_TOTAL' => 'Csoport összesen',
    'LBL_SHIPPING_TAX' => 'Szállítási ÁFA',
    'LBL_SHIPPING_TAX_AMT' => 'Szállítási ÁFA',
    'LBL_IMPORT_LINE_ITEMS' => 'Tételek importálása',
    'LBL_CREATE_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Részösszeg (alapértelmezett pénznem)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Kedvezmény (alapértelmezett pénznem)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'ÁFA (alapértelmezett pénznem)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Szállítás (alapértelmezett pénznem)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Összesen (alapértelmezett pénznem)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Szállítási ÁFA (alapértelmezett pénznem)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Mindösszesen (alapértelmezett pénznem)',
    'LBL_QUOTE_TO' => 'Ajánlat részére',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Részösszeg + adó (alapértelmezett pénznem)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Idézetek: szerződések',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Idézetek: számlák',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Tétel csoportok',
    'LBL_AOS_PRODUCT_QUOTES' => 'Termék idézetek',
    'LBL_AOS_QUOTES_PROJECT' => 'Árajánlat: Projekt',
);
