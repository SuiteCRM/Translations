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
    'ERR_DELETE_RECORD' => 'Tukuyin ang bilang ng ulat upang burahin ang kontak.',
    'LBL_ACCOUNT_ID' => 'Akwant ID:',
    'LBL_ACCOUNT_NAME' => 'Pangalan ng akwant:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_ADDRESS_INFORMATION' => 'Magdagdag ng impormasyon',
    'LBL_ALT_ADDRESS_CITY' => 'Alalternatibong lugar ng lungsod:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatibong lugar ng bansa:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Altrrnatibong lugar ng Postal Code:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatibong lugar ng estado:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Pangunahing tirahan sa kalye 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Pangunahing tirahan sa kalye 2:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatibong lugar ng kalye:',
    'LBL_ALTERNATE_ADDRESS' => 'Ibang lugar:',
    'LBL_ALT_ADDRESS' => 'Ibang lugar:',
    'LBL_ANY_ADDRESS' => 'Anumang lugar:',
    'LBL_ANY_EMAIL' => 'Anumang email:',
    'LBL_ANY_PHONE' => 'Anumang telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Ini-assign sa:',
    'LBL_ASSIGNED_TO_ID' => 'Itinalaga sa gumagamit',
    'LBL_ASSISTANT_PHONE' => 'Telopono ng Assistant:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_BIRTHDATE' => 'Petsa ng kapanganakan:',
    'LBL_CITY' => 'Lungsod:',
    'LBL_CAMPAIGN_ID' => 'ID ng kampanya',
    'LBL_CONTACT_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Pangalan ng contact:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontak-Oportunidad:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_CONTACT' => 'Kontak:',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_CREATED_ACCOUNT' => 'Lumikha ng bagong akwant',
    'LBL_CREATED_CALL' => 'Lumikha ng bagong tawag',
    'LBL_CREATED_CONTACT' => 'Lumikha ng bagong kontak',
    'LBL_CREATED_MEETING' => 'Lumikha ng bagong pagpupulong',
    'LBL_CREATED_OPPORTUNITY' => 'Lumikha ng bagong oportunidad',
    'LBL_DATE_MODIFIED' => 'Petsang binago:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_DEPARTMENT' => 'Departemento:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direktang mga ulat',
    'LBL_DO_NOT_CALL' => 'Huwag kang tumawag:',
    'LBL_DUPLICATE' => 'Mga posibleng duplicate kontak',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Emai Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Gumamit ang isang umiiral na akwant',
    'LBL_EXISTING_CONTACT' => 'Gumamit ng isang umiiral na kontak',
    'LBL_EXISTING_OPPORTUNITY' => 'Gumamit ng umiiral na oportunidad',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Unang pangalan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_ID' => 'Ang ID:',
    'LBL_IMPORT_VCARD' => 'I-import ang vCard',
    'LBL_VCARD' => 'ang vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikong lumikha ng bagong kontak sa pamamagitan ng pag-import ng vCard mula sa iyong sistemang file.',
    'LBL_INVALID_EMAIL' => 'Hindi balindo ang email:',
    'LBL_INVITEE' => 'Direktang mga ulat',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_LEAD_SOURCE' => 'Pinagmulan ng Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_LIST_CONTACT_NAME' => 'Ang kontak na pangalan',
    'LBL_LIST_CONTACT_ROLE' => 'Tungkulin',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang email',
    'LBL_LIST_FIRST_NAME' => 'Unang pangalan',
    'LBL_LIST_FORM_TITLE' => 'Ang listahan ng kontak',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_PHONE' => 'Telepono sa opisina',
    'LBL_LIST_TITLE' => 'Paksa',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODIFIED' => 'Binago kay:',
    'LBL_MODULE_NAME' => 'Mga kontak',
    'LBL_MODULE_TITLE' => 'Mga kontak: Home',
    'LBL_NAME' => 'Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bagong kontak',
    'LBL_NOTE_SUBJECT' => 'Tandaan ang paksa',
    'LBL_OFFICE_PHONE' => 'Telepono ng opisina:',
    'LBL_OPP_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID ng oportunidad na tungkulin:',
    'LBL_OPPORTUNITY_ROLE' => 'Tungkuling oportunidad',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iba pang mga Email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_APP' => 'Aplikasyong portal:',
    'LBL_PORTAL_INFORMATION' => 'Impormasyong portal',
    'LBL_PORTAL_NAME' => 'Pangalan ng portal:',
    'LBL_STREET' => 'Kalye',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing Tirahan Lungsod:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pangunahing tirahan sa kalye 2:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pangunahing Address Postal kowd:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pangunahing Tirahan Estado:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pangunahing tirahan sa kalye 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pangunahing tirahan sa kalye 2:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pangunahing Address ng Kalye:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_PRODUCTS_TITLE' => 'Ang mga Produkto',
    'LBL_REPORTS_TO_ID' => 'Mga Ulat sa ID:',
    'LBL_REPORTS_TO' => 'Ang mga ulat sa:',
    'LBL_RESOURCE_NAME' => 'Pangalan ng pinagkukunan',
    'LBL_SALUTATION' => 'Salutation:',
    'LBL_SAVE_CONTACT' => 'I-save ang kontak',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng kontak',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Piliin ang mga sinuring kontak',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Piliin ang mga sinuring kontak',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_SYNC_CONTACT' => 'I-sync sa outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospect',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Tingnan ang mga kontak',
    'LNK_IMPORT_VCARD' => 'Lumkiha ng kontak mula sa vCard',
    'LNK_NEW_ACCOUNT' => 'Gumawa ng Account',
    'LNK_NEW_APPOINTMENT' => 'Lumikha ng pagkakayari',
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_CASE' => 'Gumawa ng kaso',
    'LNK_NEW_CONTACT' => 'Gumawa ng kontak',
    'LNK_NEW_EMAIL' => 'I-archive ang email',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan',
    'LNK_NEW_OPPORTUNITY' => 'Gumawa ng oportunidad',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'LNK_SELECT_ACCOUNT' => "Pumili ng halaga",
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka bang na gusto mong burahin ang ulat na ito?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Lumilikha ng oportunidad ay kinakailangan ng akwant \n Mangyaring na alinman lumikha ng bagong akwant o pumili ng isang umiiral.',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka ba na gusto mong alisin ang kontak ito mula sa kaso?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Mga naggagabay',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga oportunidad',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopyahin sa Pangunahing Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopyahin sa ibang Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga bug',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_PROJECTS_RESOURCES' => 'Mga pinagkukunan ng mga proyekto',
    'LBL_CAMPAIGNS' => 'Ang mga Kampanya',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ang mga Kampanya',
    'LBL_LIST_CITY' => 'Syudad',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking nga kontak',
    'LBL_OPPORTUNITIES' => 'Ang mga oportunidad',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga proyekto',
    'LNK_IMPORT_CONTACTS' => 'I-import ang nga kontak',

    // SNIP
    'LBL_USER_SYNC' => 'I-sync ang taggamit',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Mga pangyayari',

    'LBL_AOP_CASE_UPDATES' => 'Ang mga kaso ay i-update',
    'LBL_CREATE_PORTAL_USER' => 'Lumikha ng Portal user',
    'LBL_ENABLE_PORTAL_USER' => 'Paganahin ang Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Hindi paganahin ang Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nabigong lumikha ng portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Nabigong paganahin ang portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Nabigong hindi pinagana ang portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Nilikhang portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Hindi pinagana ang portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Hindu pinagana ang portal user',
    'LBL_NO_JOOMLA_URL' => 'Walang portal URL ang tinukoy',
    'LBL_PORTAL_USER_TYPE' => 'Uri ng Portal User',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Hindi pinagana ang akwant',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID ng Joomla Akwant',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_INVOICES' => 'Ang mga invoice',
    'LBL_AOS_QUOTES' => 'Siping-banggit',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Mga kontak ng proyekto mula sa pamagat ng proyekto',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Ang katayuan ay imbitahan',
);
