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
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatív cím Város:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatív cím Ország:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatív cím Irányítószám:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatív cím megye:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternate Address Street 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternate Address Street 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatív cím Utca:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Hozzárendelve:',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó',
    'LBL_ASSISTANT_PHONE' => 'Aszisztens telefon:',
    'LBL_ASSISTANT' => 'Aszisztens:',
    'LBL_BIRTHDATE' => 'Születési dátum:',
    'LBL_CITY' => 'Város:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kapcsolattartó-Lehetőség:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'Új ügyfél létrehozva',
    'LBL_CREATED_CALL' => 'Új hívás létrehozva',
    'LBL_CREATED_CONTACT' => 'Új kapcsolattartó létrehozva',
    'LBL_CREATED_MEETING' => 'Új találkozó létrehozva',
    'LBL_CREATED_OPPORTUNITY' => 'Új lehetőség létrehozva',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'Nem szabad felhívni:',
    'LBL_DUPLICATE' => 'Lehetséges többszörösen rögzített Kapcsolattartók',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Egy létező céget használt',
    'LBL_EXISTING_CONTACT' => 'Létező kapcsolattartó hozzárendelése',
    'LBL_EXISTING_OPPORTUNITY' => 'Egy létező lehetőséget használt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_HOME_PHONE' => 'Főoldal:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'A beimportált vCard-ból automatikusan egy új Kapcsolattartót generáltunk.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'Elnevezés',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'Beosztás',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Módosító felhasználó ID:',
    'LBL_MODULE_NAME' => 'Kapcsolattartók',
    'LBL_MODULE_TITLE' => 'Kapcsolattartók: Főoldal',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Kapcsolattartó felvitel',
    'LBL_NOTE_SUBJECT' => 'Feljegyzés Tárgya',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Lehetőség Neve:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Lehetőség Szerepkör ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Lehetőség Szerepkör',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb eMail:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portál Alkalmazás:',
    'LBL_PORTAL_INFORMATION' => 'Portál Információ',
    'LBL_PORTAL_NAME' => 'Portál Név:',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_REPORTS_TO_ID' => 'Főnöke ID:',
    'LBL_REPORTS_TO' => 'Főnöke:',
    'LBL_RESOURCE_NAME' => 'Forrás:',
    'LBL_SALUTATION' => 'Üdvözlés:',
    'LBL_SAVE_CONTACT' => 'Kapcsolattartó mentése',
    'LBL_SEARCH_FORM_TITLE' => 'Kapcsolattartó keresés',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Kijelölt Kapcsolattartók kiválasztása',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Kijelölt Kapcsolattartók kiválasztása',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Szinkronizálás az Outlookkal:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Beosztás:',
    'LNK_CONTACT_LIST' => 'Kapcsolattartó Nézet',
    'LNK_IMPORT_VCARD' => 'Kapcsolattartó létrehozás vCard-ból',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_EMAIL' => 'Email archiválása',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Biztos beállítja a szüneteltetést?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'A lehetőség létrehozásához szükség van egy cégre. Kérem hozzon létre egy új céget, vagy válasszon ki egy már létezőt.',
    'NTC_REMOVE_CONFIRMATION' => 'Biztos benne, hogy eltávolítja a kijelölt Kapcsolattartót az Eseményből?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Elsődleges cím másolása',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Másodlagos cím másolása',

    'LBL_CASES_SUBPANEL_TITLE' => 'Üzenet központ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECTS_RESOURCES' => 'Projekt forrás',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_LIST_CITY' => 'Város',
    'LBL_LIST_STATE' => 'Megye/régió',
    'LBL_HOMEPAGE_TITLE' => 'Kapcsolattartóim',
    'LBL_OPPORTUNITIES' => 'Opportunities',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók:',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_CONTACTS' => 'Kapcsolattartók importja',

    // SNIP
    'LBL_USER_SYNC' => 'Felhasználó szink,',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

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
    'LBL_FAILED_TO_CONNECT_JOOMLA' => 'Failed to create portal user, not able to connect to Joomla',
    'LBL_ERROR_CONTACT_ID_OR_EMAIL_EMPTY' => 'Contact ID or Email is empty',
    'LBL_NO_JOOMLA_URL' => 'Nincs Portal URL megadva',
    'LBL_PORTAL_USER_TYPE' => 'Portal felhasználó típus',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Felhasználói fiók tiltva',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Fiók azonosító',
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Projekt Kapcsolatok a Projekt Címből',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
