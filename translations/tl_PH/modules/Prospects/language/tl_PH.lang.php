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
    'LBL_MODULE_NAME' => 'Ang mga pinapatamaan',
    'LBL_MODULE_ID' => 'Ang mga pinapatamaan',
    'LBL_INVITEE' => 'Mga direktang ulat',
    'LBL_MODULE_TITLE' => 'Ang mga target: Tirahan',
    'LBL_SEARCH_FORM_TITLE' => 'Ang hinahanap na target',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng target',
    'LBL_NEW_FORM_TITLE' => 'Ang bagong target',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang Email',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_FIRST_NAME' => 'Unang pangalan',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ASSIGNED_TO_ID' => 'Naitalaga Kay:',
    'LBL_CAMPAIGN_ID' => 'Kampanya ng ID',
    'LBL_EXISTING_ACCOUNT' => 'Gumamit ng umiiral na akwant',
    'LBL_CREATED_ACCOUNT' => 'Lumikha ng bagong akwant',
    'LBL_CREATED_CALL' => 'Lumikha ng bagong tawag',
    'LBL_CREATED_MEETING' => 'Lumikha ng bagong pagpupulong',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_PROSPECT_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Maraming impormasyon',
    'LBL_FIRST_NAME' => 'Ang unang pangalan:',
    'LBL_OFFICE_PHONE' => 'Ang Telepono ng opisina:',
    'LBL_ANY_PHONE' => 'Ang Anumang telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_MOBILE_PHONE' => 'Telepono:',
    'LBL_HOME_PHONE' => 'Tahanan:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ang pangunahing Address sa Kalye:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing Address sa Lungsod:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Ang Pangunahing Address sa Bansa:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postal Code ng Pangunahing Tirahan:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatibong Address ng Kalsada:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatibong Address ng Lungsod:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatibong Address ng Bansa:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatibong Address ng Probinsya:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatibong Address ng Postal Code:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Kagawaran:',
    'LBL_BIRTHDATE' => 'Petsa ng kapanganakan:',
    'LBL_EMAIL_ADDRESS' => 'Ang Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ibang email:',
    'LBL_ANY_EMAIL' => 'Ang Anumang email:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant na Telepono:',
    'LBL_DO_NOT_CALL' => 'Huwag kang tumawag:',
    'LBL_EMAIL_OPT_OUT' => 'Ang email Opt ng paglabas:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_ALTERNATE_ADDRESS' => 'Iba pang address:',
    'LBL_ANY_ADDRESS' => 'Ang Anumang address:',
    'LBL_CITY' => 'Ang Syudad:',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_POSTAL_CODE' => 'Postal kowd:',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_ADDRESS_INFORMATION' => 'Ang Impormasyon ng address',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_OPP_NAME' => 'Pangalan ng oportunidad:',
    'LBL_IMPORT_VCARD' => 'I-import ang vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Awtomatikong paglikha ng bagong kontak sa pamamagitan ng pag-import ng vCard galing sa iyong file system.',
    'LBL_DUPLICATE' => 'Ang posibleng kopyahin ng mga target',
    'MSG_SHOW_DUPLICATES' => 'Ang target na rekord na iyong gagawin ay maaaring kapareho sa target na rekord na kasalukuyang umiiral. Ang target na mga rekord na naglalaman ng kaparehang mga pangalan at/o mga address ng email ay nakalista sa ibaba.<br>I-click ang Gumawa ng Target para magpatuloy sa paggawa ng bagong target na ito, o pumili ng kasalukyang umiiral na target na nakatala sa ibaba.',
    'MSG_DUPLICATE' => 'Ang target na rekord na iyong gagawin ay maaaring kapareha sa target na rekord na kasalukuyang umiiral. Ang target na mga rekord ay naglalaman ng kaparehang mga pangalan at/o mga address ng email na nakalista sa ibaba.<br>I-click ang Save para magpatuloy sa paggawa sa bagong target na ito, o i-click ang Cancel para bumalik sa module na hindi ginagawa ang target.',
    'LNK_IMPORT_VCARD' => 'Lumikha mula sa vCArd',
    'LNK_NEW_ACCOUNT' => 'Lumikha ng Akawnt',
    'LNK_NEW_OPPORTUNITY' => ' Oportunidad ang lumikha',
    'LNK_NEW_CASE' => 'Lumikha ng kaso',
    'LNK_NEW_NOTE' => 'Gumawa ng Nota o Ilalakip',
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_EMAIL' => 'Email na Nasinup',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_NEW_TASK' => 'Gumawa ng Gawain',
    'LNK_NEW_APPOINTMENT' => 'Gumawa ng paghihirang',
    'LNK_IMPORT_PROSPECTS' => 'I-import ang mga target',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado kabang gusto mong burahin itong talaan?',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka bang gusto mong tanggalin ang kontak na ito galing sa kaso?',
    'ERR_DELETE_RECORD' => 'Ang rekord na numero ay dapat na ispecified para mabura sa pagdikit.',
    'LBL_SALUTATION' => 'Salutasyon',
    'LBL_CREATED_OPPORTUNITY' => 'Lumikha ng bagong oportunidad',
    'LNK_SELECT_ACCOUNT' => "Pumili ng account",
    'LNK_NEW_PROSPECT' => 'Gumawa ng Target',
    'LNK_PROSPECT_LIST' => 'Tingnan ang Target',
    'LNK_NEW_CAMPAIGN' => 'Lumikha ng kampanya',
    'LNK_CAMPAIGN_LIST' => 'Ang mga kampanya',
    'LNK_NEW_PROSPECT_LIST' => 'Lumikha ng listahan ng mga target',
    'LNK_PROSPECT_LIST_LIST' => 'Listahan ng mga Target',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pumili ng nasuri na mga target',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pumili ng nasuri na mga target',
    'LBL_INVALID_EMAIL' => 'Hindi balidong email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga pinapatamaan',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospekto',
    'LBL_CONVERT_BUTTON_TITLE' => 'I-convert ang target',
    'LBL_CONVERT_BUTTON_LABEL' => 'I-convert ang target',
    'LNK_NEW_CONTACT' => 'Bagong Kontak',
    'LBL_CREATED_CONTACT' => "Gumawa ng bagong kontak",
    'LBL_CAMPAIGNS' => 'Ang mga kampanya',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ang talaan ng kampanya',
    'LBL_TRACKER_KEY' => 'Susi ng tracker',
    'LBL_LEAD_ID' => 'Id na Lead',
    'LBL_CONVERTED_LEAD' => 'Naconvert na Lead',
    'LBL_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_EDIT_ACCOUNT_NAME' => 'Ang pangalan ng account:',
    'LBL_CREATED_USER' => 'Nilikhang gumagamit',
    'LBL_MODIFIED_USER' => 'Binsgo ng gumagamit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Mga kaganapan',
);
