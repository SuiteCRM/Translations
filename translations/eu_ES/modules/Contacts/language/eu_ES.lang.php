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
    'ERR_DELETE_RECORD' => 'Specify the record number to delete the contact.',
    'LBL_ACCOUNT_ID' => 'Kontuko ID-a',
    'LBL_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_CAMPAIGN' => 'Kanpaina',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_ADDRESS_INFORMATION' => 'Helbidearen informazioa',
    'LBL_ALT_ADDRESS_CITY' => 'Hautazko helbidearen hiria',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Hautazko helbidearen herrialdea',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Hautazko helbidearen PK',
    'LBL_ALT_ADDRESS_STATE' => 'Hautazko helbidearen eskualdea/estatua',
    'LBL_ALT_ADDRESS_STREET_2' => 'Hautazko helbidearen kalea 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Hautazko helbidearen kalea 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Hautazko helbidearen kalea',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Edozein helbide:',
    'LBL_ANY_EMAIL' => 'Edozein helbide elektroniko',
    'LBL_ANY_PHONE' => 'Edozein telefono',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitua izan da',
    'LBL_ASSIGNED_TO_ID' => 'Nori esleitua',
    'LBL_ASSISTANT_PHONE' => 'Laguntzailearen telefonoa',
    'LBL_ASSISTANT' => 'Laguntzailea',
    'LBL_BIRTHDATE' => 'Jaiotze-data',
    'LBL_CITY' => 'Hiria',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontaktua',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Opportunity:',
    'LBL_CONTACT_ROLE' => 'Rol',
    'LBL_CONTACT' => 'Kontaktua',
    'LBL_COUNTRY' => 'Herrialdea',
    'LBL_CREATED_ACCOUNT' => 'Sortutako kontu berria',
    'LBL_CREATED_CALL' => 'Sortutako dei berria',
    'LBL_CREATED_CONTACT' => 'Kontaktu berri bat sortu da',
    'LBL_CREATED_MEETING' => 'Sortutako bilera berria',
    'LBL_CREATED_OPPORTUNITY' => 'Aukera berri bat sortu',
    'LBL_DATE_MODIFIED' => 'Aldatua',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_DEPARTMENT' => 'Saila',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Jakinaren gainean ipini',
    'LBL_DO_NOT_CALL' => 'Ez deitu',
    'LBL_DUPLICATE' => 'Possible Duplicate Contacts',
    'LBL_EMAIL_ADDRESS' => 'Helbide elektronikoa',
    'LBL_EMAIL_OPT_OUT' => 'Irteera-posta elektronikoa',
    'LBL_EXISTING_ACCOUNT' => 'Badagoen kontu bat erabili da',
    'LBL_EXISTING_CONTACT' => 'Badagoen kontaktu bat erabili da',
    'LBL_EXISTING_OPPORTUNITY' => 'Badagoen aukera bat erabili da',
    'LBL_FAX_PHONE' => 'Faxa',
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Etxea',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'vCard-a inportatu',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Kontaktu berri bat  sortu automatikoki vCard bat inportatuz',
    'LBL_INVALID_EMAIL' => 'Baliozkoa ez den helbide elektronikoa',
    'LBL_INVITEE' => 'Jakinaren gainean ipini',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_LEAD_SOURCE' => 'Kontaktu-hartzea',
    'LBL_LIST_ACCEPT_STATUS' => 'Egoera',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktu-izena',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'Posta elektronikoak',
    'LBL_LIST_FIRST_NAME' => 'Izena',
    'LBL_LIST_FORM_TITLE' => 'Kontaktuen zerrenda',
    'LBL_LIST_LAST_NAME' => 'Abizena',
    'LBL_LIST_NAME' => 'Izena',
    'LBL_LIST_PHONE' => 'Telefonoa',
    'LBL_LIST_TITLE' => 'Lanpostua',
    'LBL_MOBILE_PHONE' => 'Mugikorra',
    'LBL_MODIFIED' => 'Modified By:',
    'LBL_MODULE_NAME' => 'Kontaktuak',
    'LBL_MODULE_TITLE' => 'Kontaktuak',
    'LBL_NAME' => 'Izena',
    'LBL_NEW_FORM_TITLE' => 'Kontaktu berria',
    'LBL_NOTE_SUBJECT' => 'Note Subject',
    'LBL_OFFICE_PHONE' => 'Bulegoko tel.',
    'LBL_OPP_NAME' => 'Aukera-izena',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Opportunity Role',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ordezko helbide elektronikoa',
    'LBL_OTHER_PHONE' => 'Hautazko Tel.',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_PORTAL_APP' => 'Portal Application:',
    'LBL_PORTAL_INFORMATION' => 'Atarieren inguruko informazioa',
    'LBL_PORTAL_NAME' => 'Atariaren izena',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'PK',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Helbide nagusiaren hiria',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Helbide nagusiaren herrialdea',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Helbide nagusiaren PK',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Helbide nagusiaren eskualdea/estatua',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Helbide nagusiaren kalea 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Helbide nagusiaren kalea 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Helbide nagusiaren kalea:',
    'LBL_PRIMARY_ADDRESS' => 'Helbide nagusia',
    'LBL_PRODUCTS_TITLE' => 'Produktuak',
    'LBL_REPORTS_TO_ID' => 'Reports to ID:',
    'LBL_REPORTS_TO' => 'Jakinaren gainean ipini',
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_SALUTATION' => 'Salutation:',
    'LBL_SAVE_CONTACT' => 'Save Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Contact Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Contacts',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Sync to Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Kontaktuak',
    'LNK_IMPORT_VCARD' => 'Create Contact From vCard',
    'LNK_NEW_ACCOUNT' => 'Kontua sortu',
    'LNK_NEW_APPOINTMENT' => 'Deien programazioa',
    'LNK_NEW_CALL' => 'Deia planifikatu',
    'LNK_NEW_CASE' => 'Kasua sortu',
    'LNK_NEW_CONTACT' => 'Kontaktu berria',
    'LNK_NEW_EMAIL' => 'Posta elektronikoa artxibatu',
    'LNK_NEW_MEETING' => 'Bilera planifikatu',
    'LNK_NEW_NOTE' => 'Ohar edo txertatutako artxibo berria',
    'LNK_NEW_OPPORTUNITY' => 'Aukera sortu',
    'LNK_NEW_TASK' => 'Ataza berria',
    'LNK_SELECT_ACCOUNT' => "Kontua aukeratu",
    'NTC_DELETE_CONFIRMATION' => 'Ziur zaude erregistroa hau ezabatu nahi duzula?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Aukera baten sorrerak kontu bat behar du. \n Mesedez, berri bat sortu edo dagoen bat aukeratu',
    'NTC_REMOVE_CONFIRMATION' => 'Ziur zaude kontaktu hau kasu honetatik kendu nahi duzula?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Hautagaiak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Aukerak',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentuak',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copy to Primary Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copy to Other Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'Kasuak',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gorabehera',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_CAMPAIGNS' => 'Kanpainak',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kanpainak',
    'LBL_LIST_CITY' => 'Hiria',
    'LBL_LIST_STATE' => 'Egoera',
    'LBL_HOMEPAGE_TITLE' => 'My Contacts',
    'LBL_OPPORTUNITIES' => 'Aukerak',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiektuak',
    'LNK_IMPORT_CONTACTS' => 'Import Contacts',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Kasuen eguneraketak',
    'LBL_CREATE_PORTAL_USER' => 'Create Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Kontratuak',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Aurrekontuak',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
