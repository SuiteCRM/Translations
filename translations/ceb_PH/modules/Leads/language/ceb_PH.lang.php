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

    'ERR_DELETE_RECORD' => 'Ang numero sa rekord kay kinahanglan i-specify para matangtang ang kontak.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Account Deskripsyon',
    'LBL_ACCOUNT_ID' => 'ID sa Account',
    'LBL_ACCOUNT_NAME' => 'Pangan sa Account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga Aktibidad',
    'LBL_ADDRESS_INFORMATION' => 'Impormasyon sa nahimutangan',
    'LBL_ALT_ADDRESS_CITY' => 'Sa address Syudad',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt Adres Nasud',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt Adres Postal Code',
    'LBL_ALT_ADDRESS_STATE' => 'Alt Adres Stados',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt Adres Istrit 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt adres Istrit 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alt adres Istrit',
    'LBL_ALTERNATE_ADDRESS' => 'Laing pahimutangan:',
    'LBL_ALT_ADDRESS' => 'Laing Address:',
    'LBL_ANY_ADDRESS' => 'Bisag unsa nga Address:',
    'LBL_ANY_EMAIL' => 'Bisag unsa nga Email:',
    'LBL_ANY_PHONE' => 'Bisag unsa nga Telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin sa',
    'LBL_ASSIGNED_TO_ID' => 'Gi-assign nga User:',
    'LBL_CITY' => 'Lungsod:',
    'LBL_CONTACT_ID' => 'Kontak ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Mag una nga Pangalan:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Mag-unang Opportunity:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Mag una:',
    'LBL_CONVERTED_ACCOUNT' => 'Kobert Account:',
    'LBL_CONVERTED_CONTACT' => 'Konberted Kontak:',
    'LBL_CONVERTED_OPP' => 'Konberted Opportonidad:',
    'LBL_CONVERTED' => 'Ge konbert',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Ge konbert',
    'LBL_CONVERTLEAD' => 'Ge konbert',
    'LBL_CONVERTLEAD_WARNING' => 'Pahibalo: Ang stados sa ang nag Una dapat nimo i-konbert kay "Konberted". Kontak og/o Acount nga nga rekorda unta naa nay nabuhat gikan sa. nag Una. Og imong kagustuhan nga i-padayun sa pagka konberted ang Una, pislita ang Save. Para maka balik ka sa Una maskin walay konberted, pislita ang Kancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Posible Kontact: ',
    'LBL_COUNTRY' => 'Ang nasud:',
    'LBL_CREATED_NEW' => 'Buhat og bag-o',
    'LBL_CREATED_ACCOUNT' => 'Paghimo ug usa ka bag-ong akawnt',
    'LBL_CREATED_CALL' => 'Pagbuhat ug usa ka bag-ong tawag',
    'LBL_CREATED_CONTACT' => 'Paghimo ug usa ka bag-ong kontak',
    'LBL_CREATED_MEETING' => 'Pagbuhat ug usa ka bag-ong miting',
    'LBL_CREATED_OPPORTUNITY' => 'Pagbuhat ug usa ka bag-ong opurtunidad',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Maoy nag una',
    'LBL_DEPARTMENT' => 'Ang departamento:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DO_NOT_CALL' => 'Ayaw tawagi:',
    'LBL_DUPLICATE' => 'Similar ang nag una',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Naggami ug ana-a nay akawnt',
    'LBL_EXISTING_CONTACT' => 'Gamiton ang nigawas na nga account',
    'LBL_EXISTING_OPPORTUNITY' => 'Gamiton ang nigawas na nga oppirtonidad',
    'LBL_FAX_PHONE' => 'Ang fax:',
    'LBL_FIRST_NAME' => 'Ngalan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ang kasaysayan',
    'LBL_HOME_PHONE' => 'Telepono sa Balay:',
    'LBL_IMPORT_VCARD' => 'Gipagawas nga vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Awtomatikong nag buhat og bag-ong lead sa importing a vCard gikan saimong file sistema.',
    'LBL_INVALID_EMAIL' => 'Inbalid nga Email:',
    'LBL_INVITEE' => 'Mga direktang pagsaysay',
    'LBL_LAST_NAME' => 'Apilyedo:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Unang Source na Deskripsyon:',
    'LBL_LEAD_SOURCE' => 'Unang Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aksip stados',
    'LBL_LIST_ACCOUNT_NAME' => 'Pangan sa Account',
    'LBL_LIST_CONTACT_NAME' => 'Mag una nga Pangalan',
    'LBL_LIST_CONTACT_ROLE' => 'Imong Role',
    'LBL_LIST_DATE_ENTERED' => 'Adlawa nga gibuhat',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Kina-unhang Pangalan',
    'LBL_LIST_FORM_TITLE' => 'Unang listahan',
    'LBL_LIST_LAST_NAME' => 'Apilyedo',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Unang Source na Deskripsyon',
    'LBL_LIST_LEAD_SOURCE' => 'Unang Source',
    'LBL_LIST_MY_LEADS' => 'Akong mga una',
    'LBL_LIST_NAME' => 'Pangan',
    'LBL_LIST_PHONE' => 'Telepono sa Opis',
    'LBL_LIST_REFERED_BY' => 'Referred Sa',
    'LBL_LIST_STATUS' => 'Mga estado',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Ang mobayl:',
    'LBL_MODULE_NAME' => 'Nag-una',
    'LBL_MODULE_TITLE' => 'Mga nag Una: sa Balay',
    'LBL_NAME' => 'Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong nag Una',
    'LBL_OFFICE_PHONE' => 'Opis na telepono:',
    'LBL_OPP_NAME' => 'Pangalang oportunidad:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Opportonidad Pila:',
    'LBL_OPPORTUNITY_ID' => 'Opportonidad ID',
    'LBL_OPPORTUNITY_NAME' => 'Pangan sa Oportunidad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Laing Email:',
    'LBL_OTHER_PHONE' => 'Laing Telepono:',
    'LBL_PHONE' => 'Ang Telepono:',
    'LBL_PORTAL_APP' => 'Portal nga Applikasyon',
    'LBL_PORTAL_INFORMATION' => 'Portal na Impormasyon',
    'LBL_PORTAL_NAME' => 'Portal na Pangalan:',
    'LBL_POSTAL_CODE' => 'Kode sa postal:',
    'LBL_STREET' => 'Dalan',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Panguna nga Address sa Syudad',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Panguna nga Address sa Nasud',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primado Adres sa Postalcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pangunang Adres sa Stado',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Panguna nga Address sa Dalan 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Panguna nga Address sa Dalan 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Panguna nga Address sa Dalan',
    'LBL_PRIMARY_ADDRESS' => 'Pangunang nahimutangan:',
    'LBL_REFERED_BY' => 'Referred Sa:',
    'LBL_REPORTS_TO_ID' => 'Report sa ID',
    'LBL_REPORTS_TO' => 'Report Sa:',
    'LBL_SALUTATION' => 'Salutasyon',
    'LBL_MODIFIED' => 'Ubsonunon Ni',
    'LBL_CREATED' => 'Gihimo Ni',
    'LBL_SEARCH_FORM_TITLE' => 'Unang ge pangita',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pilia ang Checked mga Una',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pilia ang Checked mga Una',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Status Deskripsyon:',
    'LBL_STATUS' => 'Estado:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Nagbuhat og Una gikan sa vCard',
    'LNK_LEAD_LIST' => 'Bag-ong nag Una',
    'LNK_NEW_ACCOUNT' => 'Maghimo og Account',
    'LNK_NEW_APPOINTMENT' => 'Paghimo ug katudloan',
    'LNK_NEW_CONTACT' => 'Paghimo og Kontak',
    'LNK_NEW_LEAD' => 'Buhat og Pasiuna',
    'LNK_NEW_NOTE' => 'Paghimo og Note',
    'LNK_NEW_TASK' => 'Paghimo og Tahas',
    'LNK_NEW_CASE' => 'Nag buhat og kaso',
    'LNK_NEW_CALL' => 'Talaan sa Tawag',
    'LNK_NEW_MEETING' => 'Skedyul sa Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Maghimo ug opurtunidad',
    'LNK_SELECT_ACCOUNTS' => ' <b></b> Select og Account',
    'LNK_SELECT_CONTACTS' => ' <b></b> Select og Kontak',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba sa pagtangtang niining rekord?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka ba nga tangtangon ni kining una gikan sa kaso?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Mangompanya',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Na assign nga User',
    'LBL_PROSPECT_LIST' => 'Gilaoman nga Listahan',
    'LBL_CAMPAIGN_LEAD' => 'Mangompanya',
    'LBL_BIRTHDATE' => 'Adlaw sa pagkataw:',
    'LBL_ASSISTANT_PHONE' => 'Asistante sa Telepono',
    'LBL_ASSISTANT' => 'Tagatabang',
    'LBL_CREATED_USER' => 'Gihimo nga User',
    'LBL_MODIFIED_USER' => 'Giusab nga User',
    'LBL_CAMPAIGNS' => 'Mga kampanya',
    'LBL_CONVERT_MODULE_NAME' => 'Mga Module',
    'LBL_CONVERT_REQUIRED' => 'Kinahanglan',
    'LBL_CONVERT_SELECT' => 'Gitigot na Pagpili',
    'LBL_CONVERT_COPY' => 'Pakopyaha Data',
    'LBL_CONVERT_EDIT' => 'Usba',
    'LBL_CONVERT_DELETE' => 'Tangtanga',
    'LBL_CONVERT_ADD_MODULE' => 'Dugangan ang Module',
    'LBL_CREATE' => 'Paghimo',
    'LBL_SELECT' => ' <b>O</b>Pili',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Ipagawas nag Una',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Ang module nag buhat og bag-ong ge record.',
    'LBL_REQUIRED_TIP' => 'Kinahanglang mga module kailangang ma buhat o pilion usa ka mag una og konberted.',
    'LBL_COPY_TIP' => 'Og checked, fields gikan ang lead nga ge kopya sa fileds na naay pareha nga project bag-ohay ma buhat nga records.',
    'LBL_SELECTION_TIP' => 'Modules kauban ang relasyon sa field Ang Kotak pwede ma kuha o pwede mabuhat maskin nay konbert lead prosiso.',
    'LBL_EDIT_TIP' => 'Eh Modufy ang pag kobert sa layout sa kining module.',
    'LBL_DELETE_TIP' => 'Tangtangon kining module gikan sa konbert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Balhin Activities to',
    'LBL_ACTIVITIES_COPY' => 'Kopyaha Activities sa',
    'LBL_ACTIVITIES_MOVE_HELP' => "Pilia ang ge record hain na mo lihok ang Una's activities. Buhatonon, Tawag, Mitings, Mga nota og Emails na ge lihok nga ge pili (mga) rekord.",
    'LBL_ACTIVITIES_COPY_HELP' => "Pilia ang (mga) record hain maka buhat og mga kopya sa Una's activities. Bag-ong Sugo, Tawag, Mitings og Nota kay mabuhat taga pili sa (mga) record. Emails kay related ra sa piliang (mga) record.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID sa Kampanya',
    'LBL_EDITLAYOUT' => 'I-edit ang Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Butngi og Petsa' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Ga-loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Usba' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Panghitabo',
);
