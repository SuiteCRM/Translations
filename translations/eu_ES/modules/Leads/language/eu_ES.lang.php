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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_ACCOUNT_DESCRIPTION' => 'Kontuaren deskribapena',
    'LBL_ACCOUNT_ID' => 'Kontuko ID-a',
    'LBL_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_ADDRESS_INFORMATION' => 'Helbidearen informazioa',
    'LBL_ALT_ADDRESS_CITY' => 'Hautazko helbidearen hiria',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Hautazko helbidearen herrialdea',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Hautazko helbidearen PK',
    'LBL_ALT_ADDRESS_STATE' => 'Hautazko helbidearen herrialdea/lurraldea',
    'LBL_ALT_ADDRESS_STREET_2' => 'Hautazko helbidearen kalea 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Hautazko helbidearen kalea 3',
    'LBL_ALT_ADDRESS_STREET' => 'Hautazko helbidearen kalea',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Edozein helbide:',
    'LBL_ANY_EMAIL' => 'Edozein helbide elektroniko',
    'LBL_ANY_PHONE' => 'Edozein telefono',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'Hiria',
    'LBL_CONTACT_ID' => 'Kontaktuaren ID-a',
    'LBL_CONTACT_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Hautagaiaren izena:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Hautagaia-Aukera',
    'LBL_CONTACT_ROLE' => 'Rol',
    'LBL_CONTACT' => 'Hautagaia',
    'LBL_CONVERTED_ACCOUNT' => 'Kontua bihurtua izan da',
    'LBL_CONVERTED_CONTACT' => 'Kontaktua bihurtua izan da',
    'LBL_CONVERTED_OPP' => 'Aukera bihurtua izan da',
    'LBL_CONVERTED' => 'Bihurtua',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Hautagaia bihurtu',
    'LBL_CONVERTLEAD' => 'Hautagaia bihurtu',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Possible Contact: ',
    'LBL_COUNTRY' => 'Herrialdea',
    'LBL_CREATED_NEW' => 'Created a new',
    'LBL_CREATED_ACCOUNT' => 'Sortutako kontu berria',
    'LBL_CREATED_CALL' => 'Sortutako dei berria',
    'LBL_CREATED_CONTACT' => 'Kontaktu berri bat sortu da',
    'LBL_CREATED_MEETING' => 'Sortutako bilera berria',
    'LBL_CREATED_OPPORTUNITY' => 'Aukera berri bat sortu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hautagaiak',
    'LBL_DEPARTMENT' => 'Saila',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_DO_NOT_CALL' => 'Ez deitu',
    'LBL_DUPLICATE' => 'Antzeko hautagaiak',
    'LBL_EMAIL_ADDRESS' => 'Helbide elektronikoa',
    'LBL_EMAIL_OPT_OUT' => 'Irteera-posta elektronikoa',
    'LBL_EXISTING_ACCOUNT' => 'Badagoen kontu bat erabili da',
    'LBL_EXISTING_CONTACT' => 'Badagoen kontaktu bat erabili da',
    'LBL_EXISTING_OPPORTUNITY' => 'Badagoen aukera bat erabili da',
    'LBL_FAX_PHONE' => 'Faxa',
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Etxeko tel.',
    'LBL_IMPORT_VCARD' => 'vCard-a inportatu',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikoki hautagai berri bat sortzen du vCard bat inportatuz',
    'LBL_INVALID_EMAIL' => 'Baliozkoa ez den helbide elektronikoa',
    'LBL_INVITEE' => 'Jakinaren gainean ipini',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Kontaktu-hartzearen deskribapena',
    'LBL_LEAD_SOURCE' => 'Kontaktu-hartzea',
    'LBL_LIST_ACCEPT_STATUS' => 'Egoera',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_LIST_CONTACT_NAME' => 'Hautagaiaren izena',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Sortze-data',
    'LBL_LIST_EMAIL_ADDRESS' => 'Posta elektronikoak',
    'LBL_LIST_FIRST_NAME' => 'Izena',
    'LBL_LIST_FORM_TITLE' => 'Hautagaien zerrenda',
    'LBL_LIST_LAST_NAME' => 'Abizena',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Kontaktu-hartzearen deskribapena',
    'LBL_LIST_LEAD_SOURCE' => 'Kontaktu-hartzea',
    'LBL_LIST_MY_LEADS' => 'Nire hautagaiak',
    'LBL_LIST_NAME' => 'Izena',
    'LBL_LIST_PHONE' => 'Telefonoa',
    'LBL_LIST_REFERED_BY' => 'Zeri buruzkoa',
    'LBL_LIST_STATUS' => 'Egoera',
    'LBL_LIST_TITLE' => 'Lanpostua',
    'LBL_MOBILE_PHONE' => 'Mugikorra',
    'LBL_MODULE_NAME' => 'Hautagaiak',
    'LBL_MODULE_TITLE' => 'Kontaktu-hartzea: hasiera',
    'LBL_NAME' => 'Izena',
    'LBL_NEW_FORM_TITLE' => 'Hautagai berria',
    'LBL_OFFICE_PHONE' => 'Bulegoko tel.',
    'LBL_OPP_NAME' => 'Aukera-izena',
    'LBL_OPPORTUNITY_AMOUNT' => 'Aukeraren zenbatekoa',
    'LBL_OPPORTUNITY_ID' => 'Aukera ID-a',
    'LBL_OPPORTUNITY_NAME' => 'Aukera-izena',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ordezko helbide elektronikoa',
    'LBL_OTHER_PHONE' => 'Hautazko Tel.',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_PORTAL_APP' => 'Atariaren aplikazioa',
    'LBL_PORTAL_INFORMATION' => 'Atarieren inguruko informazioa',
    'LBL_PORTAL_NAME' => 'Atariaren izena',
    'LBL_POSTAL_CODE' => 'PK',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Helbide nagusiaren hiria',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Helbide nagusiaren herrialdea',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Helbide nagusiaren PK',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Helbide nagusiaren herrialdea/lurraldea',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Helbide nagusiaren kalea 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Helbide nagusiaren kalea 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Helbide nagusiaren kalea',
    'LBL_PRIMARY_ADDRESS' => 'Helbide nagusia',
    'LBL_REFERED_BY' => 'Zeri buruzkoa',
    'LBL_REPORTS_TO_ID' => 'ID-ari informatu',
    'LBL_REPORTS_TO' => 'Jakinaren gainean ipini',
    'LBL_SALUTATION' => 'Agurra',
    'LBL_MODIFIED' => 'Nork aldatua',
    'LBL_CREATED' => 'Sortzailea',
    'LBL_SEARCH_FORM_TITLE' => 'Hautagaien bilaketa',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markatutako hautagaiak aukeratu',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markatutako hautagaiak aukeratu',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Egoeraren deskribapena',
    'LBL_STATUS' => 'Egoera',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'vCard-etik sortu',
    'LNK_LEAD_LIST' => 'Hautagaiak',
    'LNK_NEW_ACCOUNT' => 'Kontua sortu',
    'LNK_NEW_APPOINTMENT' => 'Deien programazioa',
    'LNK_NEW_CONTACT' => 'Kontaktu berria',
    'LNK_NEW_LEAD' => 'Hautagai berria',
    'LNK_NEW_NOTE' => 'Ohar edo txertatutako artxibo berria',
    'LNK_NEW_TASK' => 'Ataza berria',
    'LNK_NEW_CASE' => 'Kasua sortu',
    'LNK_NEW_CALL' => 'Deia planifikatu',
    'LNK_NEW_MEETING' => 'Bilera planifikatu',
    'LNK_NEW_OPPORTUNITY' => 'Aukera sortu',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Ziur zaude erregistroa hau ezabatu nahi duzula?',
    'NTC_REMOVE_CONFIRMATION' => 'Ziur zaude hautagai hau kasutik ezabatu nahi duzula?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kanpainak',
    'LBL_CAMPAIGN' => 'Kanpaina',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Nori esleitua',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Kanpainak',
    'LBL_BIRTHDATE' => 'Jaiotze-data',
    'LBL_ASSISTANT_PHONE' => 'Laguntzailearen telefonoa',
    'LBL_ASSISTANT' => 'Laguntzailea',
    'LBL_CREATED_USER' => 'Erabiltzaileak sortua',
    'LBL_MODIFIED_USER' => 'Erabiltzaileak aldatua',
    'LBL_CAMPAIGNS' => 'Kanpainak',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Allow Selection',
    'LBL_CONVERT_COPY' => 'Copy Data',
    'LBL_CONVERT_EDIT' => 'Editatu',
    'LBL_CONVERT_DELETE' => 'Ezabatu',
    'LBL_CONVERT_ADD_MODULE' => 'Add Module',
    'LBL_CREATE' => 'Berria',
    'LBL_SELECT' => ' <b>OR</b> Select',
    'LBL_WEBSITE' => 'Web gunea',
    'LNK_IMPORT_LEADS' => 'Import Leads',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Data sartu' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editatu' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
