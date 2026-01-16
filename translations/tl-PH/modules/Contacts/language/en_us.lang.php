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
    'ERR_DELETE_RECORD' => 'Tukuying ang numero ng rekord para matanggal sa kontak.',
    'LBL_ACCOUNT_ID' => 'ID ng Account:',
    'LBL_ACCOUNT_NAME' => 'Ang pangalan ng account:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_ADDRESS_INFORMATION' => 'Ang Impormasyon ng address',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatibong Address ng Lungsod:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatibong Address ng Bansa:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatibong Address ng Postal Code:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatibong Address ng Probinsya:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ang Alternatibong Address kalye 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ang Alternatibong address Kalye 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatibong Address ng Kalsada:',
    'LBL_ALTERNATE_ADDRESS' => 'Iba pang address:',
    'LBL_ALT_ADDRESS' => 'Iba pang address:',
    'LBL_ANY_ADDRESS' => 'Ang Anumang address:',
    'LBL_ANY_EMAIL' => 'Ang Anumang email:',
    'LBL_ANY_PHONE' => 'Ang Anumang telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Ang Itinalaga kay:',
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng gumagamit',
    'LBL_ASSISTANT_PHONE' => 'Assistant na Telepono:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_BIRTHDATE' => 'Petsa ng kapanganakan:',
    'LBL_CITY' => 'Ang Syudad:',
    'LBL_CAMPAIGN_ID' => 'Kampanya ng ID',
    'LBL_CONTACT_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Pangalan ng contact:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontak-Oportunidad:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_CONTACT' => 'Kontak:',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_CREATED_ACCOUNT' => 'Lumikha ng bagong akwant',
    'LBL_CREATED_CALL' => 'Lumikha ng bagong tawag',
    'LBL_CREATED_CONTACT' => 'Gumawa ng bagong kontak',
    'LBL_CREATED_MEETING' => 'Lumikha ng bagong pagpupulong',
    'LBL_CREATED_OPPORTUNITY' => 'Lumikha ng bagong oportunidad',
    'LBL_DATE_MODIFIED' => 'Huling binago:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_DEPARTMENT' => 'Kagawaran:',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Mga direktang ulat',
    'LBL_DO_NOT_CALL' => 'Huwag kang tumawag:',
    'LBL_DUPLICATE' => 'Posibleng may kaparehong mga kontak',
    'LBL_EMAIL_ADDRESS' => 'Ang Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Ang email Opt ng paglabas:',
    'LBL_EXISTING_ACCOUNT' => 'Gumamit ng umiiral na akwant',
    'LBL_EXISTING_CONTACT' => 'Gumamit ng umiiral na kontak',
    'LBL_EXISTING_OPPORTUNITY' => 'Gumamit ng umiiral na oportunidad',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Ang unang pangalan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_HOME_PHONE' => 'Tahanan:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'I-import ang vCard',
    'LBL_VCARD' => 'ang vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Awtomatikong paglikha ng bagong kontak sa pamamagitan ng pag-import ng vCard galing sa iyong file system.',
    'LBL_INVALID_EMAIL' => 'Hindi balidong email:',
    'LBL_INVITEE' => 'Mga direktang ulat',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_LEAD_SOURCE' => 'Pinagmulan ng Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_LIST_CONTACT_NAME' => 'Kontak na Pangalan',
    'LBL_LIST_CONTACT_ROLE' => 'Tungkulin',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang Email',
    'LBL_LIST_FIRST_NAME' => 'Unang pangalan',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng kontak',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_PHONE' => 'Ang Telepono ng opisina',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Telepono:',
    'LBL_MODIFIED' => 'Binago ni:',
    'LBL_MODULE_NAME' => 'Ang mga koneksyon',
    'LBL_MODULE_TITLE' => 'Mga kontak: Tahanan',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bagong Kontak',
    'LBL_NOTE_SUBJECT' => 'Paksang dapat Tandaan',
    'LBL_OFFICE_PHONE' => 'Ang Telepono ng opisina:',
    'LBL_OPP_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID ng Oportunidad na tungkulin:',
    'LBL_OPPORTUNITY_ROLE' => 'Oportunidad na tungkulin',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ibang email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_APP' => 'Ang Aplikasyon sa Portal:',
    'LBL_PORTAL_INFORMATION' => 'Impormasyon ng portal',
    'LBL_PORTAL_NAME' => 'Pangalan ng portal:',
    'LBL_STREET' => 'Kalye',
    'LBL_POSTAL_CODE' => 'Postal kowd:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing Address sa Lungsod:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Ang Pangunahing Address sa Bansa:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postal Code ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ang Dalawang Kalye ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ang Pangunahing Address Kalye 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ang pangunahing Address sa Kalye:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_PRODUCTS_TITLE' => 'Ang mga produkto',
    'LBL_REPORTS_TO_ID' => 'Pagbabalita sa ID:',
    'LBL_REPORTS_TO' => 'Mga ulat sa:',
    'LBL_RESOURCE_NAME' => 'Ang Pangalan ng Mapagkukunan',
    'LBL_SALUTATION' => 'Ang Salutasyon:',
    'LBL_SAVE_CONTACT' => 'I-save ang Kontak',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng Kontak',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pumili ng naka-tsek na mga Kontak',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pumili ng naka-tsek na mga Kontak',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_SYNC_CONTACT' => 'I-sync sa Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospekto',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Tingnan ang mga Kontak',
    'LNK_IMPORT_VCARD' => 'Gumawa ng Kontak galing sa vCard',
    'LNK_NEW_ACCOUNT' => 'Lumikha ng Akawnt',
    'LNK_NEW_APPOINTMENT' => 'Gumawa ng paghihirang',
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_CASE' => 'Lumikha ng kaso',
    'LNK_NEW_CONTACT' => 'Gumawa ng Kontak',
    'LNK_NEW_EMAIL' => 'Email na Nasinup',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_NEW_NOTE' => 'Gumawa ng tala',
    'LNK_NEW_OPPORTUNITY' => ' Oportunidad ang lumikha',
    'LNK_NEW_TASK' => 'Gumawa ng Gawain',
    'LNK_SELECT_ACCOUNT' => "Pumili ng account",
    'NTC_DELETE_CONFIRMATION' => 'Sigurado kabang gusto mong burahin itong talaan?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Ang paglikha ng oportunidad ay nangangailangan ng akawnt.\n Pwede kang gumawa ng bagong akawnt o pumili sa mga umiiral.',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka bang gusto mong tanggalin ang kontak na ito galing sa kaso?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Pamunuan',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga pagkakataon',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Ang mga dokumento',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kinopya sa Pangunahing Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kinopya sa ibang Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga mali',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LBL_PROJECTS_RESOURCES' => 'Mga pinagkukunan ng mga proyekto',
    'LBL_CAMPAIGNS' => 'Ang mga kampanya',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ang mga kampanya',
    'LBL_LIST_CITY' => 'Ang Syudad',
    'LBL_LIST_STATE' => 'Ang Estado',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga kontak',
    'LBL_OPPORTUNITIES' => 'Ang mga pagkakataon',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LNK_IMPORT_CONTACTS' => 'Mag-import ng mga kontak',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Mga kaganapan',

    'LBL_AOP_CASE_UPDATES' => 'Mga Kaso ng Updeyt',
    'LBL_CREATE_PORTAL_USER' => 'Lumikha ng Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'I-enable ang Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'I-disable ang Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Bigong makalikha ng bagong portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Bigong ma-enable ang portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Bigong ma-disable ang portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Nalikhang gumagamit ng portal',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Pinaganang gumagamit ng portal',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Huwag paganahin ang gumagamit ng portal',
    'LBL_NO_JOOMLA_URL' => 'Walang natukoy na gumagamit ng portal',
    'LBL_PORTAL_USER_TYPE' => 'Uri ng gumagamit ng portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Hindi pinagana ang account',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Ang Joomla akawnt ID',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_INVOICES' => 'Mga invoice',
    'LBL_AOS_QUOTES' => 'Mga panipi',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Ang mga kontak ng proyekto mula sa titulo ng proyekto',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Katayuan ng Inimbita',
);
