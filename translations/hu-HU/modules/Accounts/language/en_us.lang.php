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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    // Dashlet Categories
    'LBL_CHARTS' => 'Diagramok',
    'LBL_DEFAULT' => 'Nézetek',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Ügyfél törléséhez meg kell adnia a rekordszámot.',
    'LBL_ACCOUNT_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_ACCOUNT' => 'Ügyfél:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ANNUAL_REVENUE' => 'Éves bevétel:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Egyéb telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó:',
    'LBL_BILLING_ADDRESS_CITY' => 'Számlázási cím, város:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Számlázási ország:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Számlázási irányítószám:',
    'LBL_BILLING_ADDRESS_STATE' => 'Számlázási megye/régió:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Számlázási cím, utca 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Számlázási cím, utca 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Számlázási cím, utca 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Számlázási cím, utca:',
    'LBL_BILLING_ADDRESS' => 'Számlázási cím:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibajegyek',
    'LBL_CAMPAIGN_ID' => 'Kampány Id',
    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_CITY' => 'Város:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma:',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_DESCRIPTION_INFORMATION' => 'Leíró jellegű információk',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DUPLICATE' => 'Lehetséges Ügyfél duplikáció',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Elutasítva:',
    'LBL_EMAIL_ADDRESSES' => 'Email címek',
    'LBL_EMPLOYEES' => 'Alkalmazottak:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_HOMEPAGE_TITLE' => 'Ügyfeleim',
    'LBL_INDUSTRY' => 'Ágazat:',
    'LBL_INVALID_EMAIL' => 'Hibás Email:',
    'LBL_INVITEE' => 'Kapcsolattartók',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_LIST_ACCOUNT_NAME' => 'Név',
    'LBL_LIST_CITY' => 'Város',
    'LBL_LIST_CONTACT_NAME' => 'Kapcsolattartó neve',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email cím',
    'LBL_LIST_FORM_TITLE' => 'Ügyféllista',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Megye',
    'LBL_MEMBER_OF' => 'Tagság:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Tag szervezetek',
    'LBL_MODULE_NAME' => 'Ügyfelek',
    'LBL_MODULE_TITLE' => 'Ügyfelek: Kezdőlap',
    'LBL_MODULE_ID' => 'Ügyfelek',
    'LBL_NAME' => 'Név:',
    'LBL_NEW_FORM_TITLE' => 'Új ügyfél',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb eMail:',
    'LBL_OTHER_PHONE' => 'Egyéb telefon:',
    'LBL_OWNERSHIP' => 'Tulajdonjog:',
    'LBL_PARENT_ACCOUNT_ID' => 'Anyacég azonosító',
    'LBL_PHONE_ALT' => 'Egyéb telefon:',
    'LBL_PHONE_FAX' => 'Telefon Fax:',
    'LBL_PHONE_OFFICE' => 'Irodai telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_PRODUCTS_TITLE' => 'Termékek',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kapcsolatokhoz másol',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Másol...',
    'LBL_RATING' => 'Minősítés:',
    'LBL_SAVE_ACCOUNT' => 'Ügyfél mentése',
    'LBL_SEARCH_FORM_TITLE' => 'Ügyfél keresés',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Szállítási cím Város:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Szállítási cím Ország:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Szállítási cím Irányítószám:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Szállítási cím megye:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Szállítási cím utca 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Szállítási cím utca 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Szállítási cím utca 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Szállítási cím Utca:',
    'LBL_SHIPPING_ADDRESS' => 'Szállítási cím:',
    'LBL_SIC_CODE' => 'SIC kód:',
    'LBL_STATE' => 'Állam vagy régió:',
    'LBL_TICKER_SYMBOL' => 'Óra szimbólum:',
    'LBL_TYPE' => 'Típus:',
    'LBL_WEBSITE' => 'WEB:',
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LNK_ACCOUNT_LIST' => 'Ügyfelek',
    'LNK_NEW_ACCOUNT' => 'Ügyfél létrehozás',
    'LNK_IMPORT_ACCOUNTS' => 'Ügyfelek importja',
    'MSG_DUPLICATE' => 'A létehozandó Ügyfélrekord megegyezik egy már létezővel. Kattintson az "Ügyfél létrehozására", ha biztosan létre akarja hozni, vagy válasszon ki egy fiókot az alább felsoroltak közül!',
    'MSG_SHOW_DUPLICATES' => 'A létehozandó Ügyfélrekord megegyezik egy már létezővel. Kattintson az "Ügyfél létrehozására", ha biztosan létre akarja hozni, vagy válasszon ki egy fiókot az alább felsoroltak közül!',
    'LBL_ASSIGNED_USER_NAME' => 'Felelős:',
    'LBL_PROSPECT_LIST' => 'Lehetőség lista',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    //For export labels
    'LBL_PARENT_ID' => 'Szülő ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Beszerzett termékek és szolgáltatások',

    'LBL_AOS_CONTRACTS' => 'Szerződések',
    'LBL_AOS_INVOICES' => 'Számlák',
    'LBL_AOS_QUOTES' => 'Ajánlatok',
    'LBL_LIST_WEBSITE' => 'weboldal',
);
