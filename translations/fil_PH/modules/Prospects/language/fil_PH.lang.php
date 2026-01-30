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
    'LBL_MODULE_NAME' => 'Ang Mga target',
    'LBL_MODULE_ID' => 'Ang Mga target',
    'LBL_INVITEE' => 'Direktang mga ulat',
    'LBL_MODULE_TITLE' => 'Mga target: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng target',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng. target',
    'LBL_NEW_FORM_TITLE' => 'Bagong target',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_TITLE' => 'Paksa',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang email',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_FIRST_NAME' => 'Unang pangalan',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ASSIGNED_TO_ID' => 'Ini-assign sa:',
    'LBL_CAMPAIGN_ID' => 'ID ng kampanya',
    'LBL_EXISTING_ACCOUNT' => 'Gumamit ang isang umiiral na akwant',
    'LBL_CREATED_ACCOUNT' => 'Lumikha ng bagong akwant',
    'LBL_CREATED_CALL' => 'Lumikha ng bagong tawag',
    'LBL_CREATED_MEETING' => 'Lumikha ng bagong pagpupulong',
    'LBL_NAME' => 'Pangalan:',
    'LBL_PROSPECT_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Karagdagang informasiyon',
    'LBL_FIRST_NAME' => 'Unang pangalan:',
    'LBL_OFFICE_PHONE' => 'Telepono ng opisina:',
    'LBL_ANY_PHONE' => 'Anumang telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pangunahing Address ng Kalye:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing Tirahan Lungsod:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pangunahing tirahan sa kalye 2:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pangunahing Tirahan Estado:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pangunahing Address Postal kowd:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatibong lugar ng kalye:',
    'LBL_ALT_ADDRESS_CITY' => 'Alalternatibong lugar ng lungsod:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatibong lugar ng bansa:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatibong lugar ng estado:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Altrrnatibong lugar ng Postal Code:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Departemento:',
    'LBL_BIRTHDATE' => 'Petsa ng kapanganakan:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iba pang mga Email:',
    'LBL_ANY_EMAIL' => 'Anumang email:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Telopono ng Assistant:',
    'LBL_DO_NOT_CALL' => 'Huwag kang tumawag:',
    'LBL_EMAIL_OPT_OUT' => 'Emai Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_ALTERNATE_ADDRESS' => 'Ibang lugar:',
    'LBL_ANY_ADDRESS' => 'Anumang lugar:',
    'LBL_CITY' => 'Lungsod:',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_ADDRESS_INFORMATION' => 'Magdagdag ng impormasyon',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_OPP_NAME' => 'Pangalan ng oportunidad:',
    'LBL_IMPORT_VCARD' => 'I-import ang vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikong lumikha ng bagong kontak sa pamamagitan ng pag-import ng vCard mula sa iyong sistemang file.',
    'LBL_DUPLICATE' => 'Mga posibleng duplicate na target',
    'MSG_SHOW_DUPLICATES' => 'Ang target ng ulat na gusto mong likhain ay maaring ma-duplicate ng isang target na rekord ay umiiral na. Ang mga target na ulat naglalaman ng kaparehong pangalan at/o mga email adress ay nakalista sa ibaba.<br>Pindutin ang Lumikha ng target upang magpatuloy sa paglikha ng bagong target, o pumili ng umiiral na targey nakalista sa ibaba.',
    'MSG_DUPLICATE' => 'Ang target rekord na gusto mong likhain ay baka ma-duplicate ng isang target na rekord na umiiral na. Ang mga target rekord ay naglalaman ng kaparehong pangalan at/o mga email address ay nakalista sa ibaba.<br>Pindutin ang Save upang magpatuloy sa paglikha ng bagong target, o pindutin ang Kanselahin upang bumalik sa modyul na walang paglikha ng target.',
    'LNK_IMPORT_VCARD' => 'Gumawa mula sa vCard',
    'LNK_NEW_ACCOUNT' => 'Gumawa ng Account',
    'LNK_NEW_OPPORTUNITY' => 'Gumawa ng oportunidad',
    'LNK_NEW_CASE' => 'Gumawa ng kaso',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan o paglalakip',
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_EMAIL' => 'I-archive ang email',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'LNK_NEW_APPOINTMENT' => 'Lumikha ng pagkakayari',
    'LNK_IMPORT_PROSPECTS' => 'I-import ang mga target',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka bang na gusto mong burahin ang ulat na ito?',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka ba na gusto mong alisin ang kontak ito mula sa kaso?',
    'ERR_DELETE_RECORD' => 'Tinukoy dapat ng numero ng talaan upang ang kontak ay tanggalin.',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_CREATED_OPPORTUNITY' => 'Lumikha ng bagong oportunidad',
    'LNK_SELECT_ACCOUNT' => "Pumili ng halaga",
    'LNK_NEW_PROSPECT' => 'Lumikha ng target',
    'LNK_PROSPECT_LIST' => 'Tingnan ang mga target',
    'LNK_NEW_CAMPAIGN' => 'Lumikha ng kampanya',
    'LNK_CAMPAIGN_LIST' => 'Ang mga Kampanya',
    'LNK_NEW_PROSPECT_LIST' => 'Lumikha ng listahan na target',
    'LNK_PROSPECT_LIST_LIST' => 'Mga listahan ng target',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pumili ng sinuring mga target',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pumili ng sinuring mga target',
    'LBL_INVALID_EMAIL' => 'Hindi balindo ang email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang Mga target',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospect',
    'LBL_CONVERT_BUTTON_TITLE' => 'I-convert ang target',
    'LBL_CONVERT_BUTTON_LABEL' => 'I-convert ang target',
    'LNK_NEW_CONTACT' => 'Bagong kontak',
    'LBL_CREATED_CONTACT' => "Lumikha ng bagong kontak",
    'LBL_CAMPAIGNS' => 'Ang mga Kampanya',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ang Kampanya ay Log',
    'LBL_TRACKER_KEY' => 'Susi ng tagasubaybay',
    'LBL_LEAD_ID' => 'Id ng lead',
    'LBL_CONVERTED_LEAD' => 'Naka-convert na lead',
    'LBL_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_EDIT_ACCOUNT_NAME' => 'Pangalan ng akwant:',
    'LBL_CREATED_USER' => 'Nilikha ng gumagamit',
    'LBL_MODIFIED_USER' => 'Binago ng gumagamit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Mga pangyayari',
);
