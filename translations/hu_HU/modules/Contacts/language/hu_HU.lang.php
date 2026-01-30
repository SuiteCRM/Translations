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
    'ERR_DELETE_RECORD' => 'A Kapcsolattartó eltávolításához meg kell adni a rekordsorszámot.',
    'LBL_ACCOUNT_ID' => 'Számla ID:',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatív cím Város:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatív cím Ország:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatív cím Irányítószám:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatív cím megye:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Másodlagos cím, utca 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Másodlagos cím, utca 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatív cím Utca:',
    'LBL_ALTERNATE_ADDRESS' => 'Egyéb cím:',
    'LBL_ALT_ADDRESS' => 'Egyéb cím:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ANY_PHONE' => 'Egyéb telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó',
    'LBL_ASSISTANT_PHONE' => 'Aszisztens telefon:',
    'LBL_ASSISTANT' => 'Aszisztens:',
    'LBL_BIRTHDATE' => 'Születési dátum:',
    'LBL_CITY' => 'Város:',
    'LBL_CAMPAIGN_ID' => 'Kampány Id',
    'LBL_CONTACT_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kapcsolattartó neve:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kapcsolattartó-Lehetőség:',
    'LBL_CONTACT_ROLE' => 'Szerepkör:',
    'LBL_CONTACT' => 'Kapcsolat:',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_CREATED_ACCOUNT' => 'Új ügyfél létrehozva',
    'LBL_CREATED_CALL' => 'Új hívás létrehozva',
    'LBL_CREATED_CONTACT' => 'Új kapcsolattartó létrehozva',
    'LBL_CREATED_MEETING' => 'Új találkozó létrehozva',
    'LBL_CREATED_OPPORTUNITY' => 'Új lehetőség létrehozva',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Közvetlen jelentések',
    'LBL_DO_NOT_CALL' => 'Nem szabad felhívni:',
    'LBL_DUPLICATE' => 'Lehetséges többszörösen rögzített Kapcsolattartók',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Elutasítva:',
    'LBL_EXISTING_ACCOUNT' => 'Egy létező céget használt',
    'LBL_EXISTING_CONTACT' => 'Létező kapcsolattartó hozzárendelése',
    'LBL_EXISTING_OPPORTUNITY' => 'Egy létező lehetőséget használt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_HOME_PHONE' => 'Főoldal:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'vCard importálása',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'A beimportált vCard-ból automatikusan egy új Kapcsolattartót generáltunk.',
    'LBL_INVALID_EMAIL' => 'Hibás Email:',
    'LBL_INVITEE' => 'Közvetlen jelentések',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status elfogadva',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_CONTACT_NAME' => 'Kapcsolattartó neve',
    'LBL_LIST_CONTACT_ROLE' => 'Szerepkör',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Vezetéknév',
    'LBL_LIST_FORM_TITLE' => 'Kapcsolattartó-lista',
    'LBL_LIST_LAST_NAME' => 'Keresztnév',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_PHONE' => 'Irodai telefon',
    'LBL_LIST_TITLE' => 'Beosztás',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Módosító felhasználó ID:',
    'LBL_MODULE_NAME' => 'Kapcsolattartók',
    'LBL_MODULE_TITLE' => 'Kapcsolattartók: Főoldal',
    'LBL_NAME' => 'Név:',
    'LBL_NEW_FORM_TITLE' => 'Kapcsolattartó felvitel',
    'LBL_NOTE_SUBJECT' => 'Feljegyzés Tárgya',
    'LBL_OFFICE_PHONE' => 'Irodai telefon:',
    'LBL_OPP_NAME' => 'Lehetőség Neve:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Lehetőség Szerepkör ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Lehetőség Szerepkör',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb eMail:',
    'LBL_OTHER_PHONE' => 'Egyéb telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portál Alkalmazás:',
    'LBL_PORTAL_INFORMATION' => 'Portál Információ',
    'LBL_PORTAL_NAME' => 'Portál Név:',
    'LBL_STREET' => 'Utca',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím, város:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges ország:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím, irányítószám:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím, állam:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Elsődleges cím utca 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Elsődleges cím utca 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím, közterület:',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',
    'LBL_PRODUCTS_TITLE' => 'Termékek',
    'LBL_REPORTS_TO_ID' => 'Főnöke ID:',
    'LBL_REPORTS_TO' => 'Főnöke:',
    'LBL_RESOURCE_NAME' => 'Forrás:',
    'LBL_SALUTATION' => 'Üdvözlés:',
    'LBL_SAVE_CONTACT' => 'Kapcsolattartó mentése',
    'LBL_SEARCH_FORM_TITLE' => 'Kapcsolattartó keresés',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Kijelölt Kapcsolattartók kiválasztása',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Kijelölt Kapcsolattartók kiválasztása',
    'LBL_STATE' => 'Állam vagy régió:',
    'LBL_SYNC_CONTACT' => 'Szinkronizálás az Outlookkal:',
    'LBL_PROSPECT_LIST' => 'Lehetőség lista',
    'LBL_TITLE' => 'Beosztás:',
    'LNK_CONTACT_LIST' => 'Kapcsolattartó Nézet',
    'LNK_IMPORT_VCARD' => 'Kapcsolattartó létrehozás vCard-ból',
    'LNK_NEW_ACCOUNT' => 'Ügyfél létrehozás',
    'LNK_NEW_APPOINTMENT' => 'Hívások ütemezése',
    'LNK_NEW_CALL' => 'Hívásnapló',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_CONTACT' => 'Kapcsolattartó létrehozása',
    'LNK_NEW_EMAIL' => 'Email archiválása',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_NOTE' => 'Jegyzet létrehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_SELECT_ACCOUNT' => "Cég választása",
    'NTC_DELETE_CONFIRMATION' => 'Biztosan törölni szeretné a rekordot?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'A lehetőség létrehozásához szükség van egy cégre. Kérem hozzon létre egy új céget, vagy válasszon ki egy már létezőt.',
    'NTC_REMOVE_CONFIRMATION' => 'Biztos benne, hogy eltávolítja a kijelölt Kapcsolattartót az Eseményből?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Elsődleges cím másolása',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Másodlagos cím másolása',

    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibajegyek',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_PROJECTS_RESOURCES' => 'Projekt forrás',
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampányok',
    'LBL_LIST_CITY' => 'Város',
    'LBL_LIST_STATE' => 'Megye',
    'LBL_HOMEPAGE_TITLE' => 'Kapcsolattartóim',
    'LBL_OPPORTUNITIES' => 'Lehetőségek',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LNK_IMPORT_CONTACTS' => 'Kapcsolattartók importja',

    // SNIP
    'LBL_USER_SYNC' => 'Felhasználó szink,',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Események',

    'LBL_AOP_CASE_UPDATES' => 'Teljes üzenetszál',
    'LBL_CREATE_PORTAL_USER' => 'Portal felhasználó létrehozása',
    'LBL_ENABLE_PORTAL_USER' => 'Portal felhasználó engedélyezése',
    'LBL_DISABLE_PORTAL_USER' => 'Portál felhasználó tiltása',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nem sikerült létrehozni a Portal felhasználót',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Nem sikerült a Portálfelhasználót engedélyezni',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Nem sikerült a Portal felhasználó tiltása',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Létrehozott Portal felhasználó',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Engedélyezett Portal felhasználó',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portal felhasználó tiltása',
    'LBL_NO_JOOMLA_URL' => 'Nincs Portal URL megadva',
    'LBL_PORTAL_USER_TYPE' => 'Portal felhasználó típus',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Felhasználói fiók tiltva',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Fiók azonosító',

    'LBL_AOS_CONTRACTS' => 'Szerződések',
    'LBL_AOS_INVOICES' => 'Számlák',
    'LBL_AOS_QUOTES' => 'Ajánlatok',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Projekt Kapcsolatok a Projekt Címből',

    'LBL_LIST_INVITE_STATUS' => 'Meghívás állapota',
);
