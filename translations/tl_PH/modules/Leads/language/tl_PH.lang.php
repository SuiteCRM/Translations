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

    'ERR_DELETE_RECORD' => 'Ang bilang ng rekord ay dapat na naitukoy para burahin ang lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Paglalarawan ng account',
    'LBL_ACCOUNT_ID' => 'Ang ID ng account',
    'LBL_ACCOUNT_NAME' => 'Ang pangalan ng account:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_ADDRESS_INFORMATION' => 'Ang Impormasyon ng address',
    'LBL_ALT_ADDRESS_CITY' => 'Ang alt address ng lungsod',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Ang alt address ng bansa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Ang alt address ng postalcode',
    'LBL_ALT_ADDRESS_STATE' => 'Ang alt address ng estado',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ang alt address ng Kalye 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ang alt address ng Kalye 3',
    'LBL_ALT_ADDRESS_STREET' => 'Ang alt address ng kalye',
    'LBL_ALTERNATE_ADDRESS' => 'Iba pang address:',
    'LBL_ALT_ADDRESS' => 'Iba pang address:',
    'LBL_ANY_ADDRESS' => 'Ang Anumang address:',
    'LBL_ANY_EMAIL' => 'Ang Anumang email:',
    'LBL_ANY_PHONE' => 'Ang Anumang telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng gagamit:',
    'LBL_CITY' => 'Ang Syudad:',
    'LBL_CONTACT_ID' => 'Ang ID kontak',
    'LBL_CONTACT_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ang pangalan ng lead:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Oportunidad:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_CONTACT' => 'Pamunuan:',
    'LBL_CONVERTED_ACCOUNT' => 'Naka-convert na account:',
    'LBL_CONVERTED_CONTACT' => 'Naka-convert na kontak:',
    'LBL_CONVERTED_OPP' => 'Naka-convert na opportunidad:',
    'LBL_CONVERTED' => 'Ang pagpapalit',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'I-convert ang lead',
    'LBL_CONVERTLEAD' => 'I-convert ang lead',
    'LBL_CONVERTLEAD_WARNING' => 'Babala: Ang katayuan ng nangunguna na iyong papalitan ay "Kombertido". Ang contact at/o ang mga tala ng account ay maaaring malikha mula sa panguluhan. Kun hinihiling monh ituloy sa pagpapalit ng panguluhan, pindutin ang Save. Para bumalik sa panguluhan na hindi ito pinapalitan, pindutin ang cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Posibleng Kontak: ',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_CREATED_NEW' => 'Lumikha ng bago',
    'LBL_CREATED_ACCOUNT' => 'Lumikha ng bagong akwant',
    'LBL_CREATED_CALL' => 'Lumikha ng bagong tawag',
    'LBL_CREATED_CONTACT' => 'Gumawa ng bagong kontak',
    'LBL_CREATED_MEETING' => 'Lumikha ng bagong pagpupulong',
    'LBL_CREATED_OPPORTUNITY' => 'Lumikha ng bagong oportunidad',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pamunuan',
    'LBL_DEPARTMENT' => 'Kagawaran:',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_DO_NOT_CALL' => 'Huwag kang tumawag:',
    'LBL_DUPLICATE' => 'Magkatulad ng mga lead',
    'LBL_EMAIL_ADDRESS' => 'Ang Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Ang email Opt ng paglabas:',
    'LBL_EXISTING_ACCOUNT' => 'Gumamit ng umiiral na akwant',
    'LBL_EXISTING_CONTACT' => 'Gumamit ng umiiral na kontak',
    'LBL_EXISTING_OPPORTUNITY' => 'Gumamit ng umiiral na oportunidad',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Ang unang pangalan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_HOME_PHONE' => 'Telepono ng bahay:',
    'LBL_IMPORT_VCARD' => 'I-import ang vCard',
    'LBL_VCARD' => 'ang vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikong lumikha ng bagong lead sa pamamagitan ng vCard mula sa iyong sistema ng file.',
    'LBL_INVALID_EMAIL' => 'Hindi balidong email:',
    'LBL_INVITEE' => 'Mga direktang ulat',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Ang paglalarawan na pinagmulan ng Lead:',
    'LBL_LEAD_SOURCE' => 'Pinagmulan ng Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_LIST_CONTACT_NAME' => 'Pangalan ng Lead',
    'LBL_LIST_CONTACT_ROLE' => 'Tungkulin',
    'LBL_LIST_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang Email',
    'LBL_LIST_FIRST_NAME' => 'Unang pangalan',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng lead',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Ang paglalarawan na pinagmulan ng lead',
    'LBL_LIST_LEAD_SOURCE' => 'Pinagmulan ng lead',
    'LBL_LIST_MY_LEADS' => 'Ang aking mga lead',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_PHONE' => 'Ang Telepono ng opisina',
    'LBL_LIST_REFERED_BY' => 'Tinutukoy ni',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Telepono:',
    'LBL_MODULE_NAME' => 'Pamunuan',
    'LBL_MODULE_TITLE' => 'Mga lead: Home',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bagong lead',
    'LBL_OFFICE_PHONE' => 'Ang Telepono ng opisina:',
    'LBL_OPP_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Halaga ng oportunidad:',
    'LBL_OPPORTUNITY_ID' => 'Id ng oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ibang email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_APP' => 'Aplikasyon ng portal',
    'LBL_PORTAL_INFORMATION' => 'Impormasyon ng portal',
    'LBL_PORTAL_NAME' => 'Pangalan ng portal:',
    'LBL_POSTAL_CODE' => 'Postal kowd:',
    'LBL_STREET' => 'Kalye',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing address ng lungsod',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pangunahing address ng bansa',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pangunahing address ng postalcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pangunahing address ng estado',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pangunahing address ng kalye 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pangunahing address g kalye 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pangunahing address ng kalye',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_REFERED_BY' => 'Tinutukoy ni:',
    'LBL_REPORTS_TO_ID' => 'Mga ulat sa ID',
    'LBL_REPORTS_TO' => 'Mga ulat sa:',
    'LBL_SALUTATION' => 'Salutasyon',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Piliin ang mga sinuring lead',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Piliin ang mga sinuring lead',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_STATUS_DESCRIPTION' => 'Estado ng paglalarwan:',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Gumawa ng lead mula sa vCard',
    'LNK_LEAD_LIST' => 'Tanawin ang mga lead',
    'LNK_NEW_ACCOUNT' => 'Lumikha ng Akawnt',
    'LNK_NEW_APPOINTMENT' => 'Gumawa ng paghihirang',
    'LNK_NEW_CONTACT' => 'Gumawa ng Kontak',
    'LNK_NEW_LEAD' => 'Gumawa ng Nangunguna',
    'LNK_NEW_NOTE' => 'Gumawa ng tala',
    'LNK_NEW_TASK' => 'Gumawa ng Gawain',
    'LNK_NEW_CASE' => 'Lumikha ng kaso',
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_NEW_OPPORTUNITY' => ' Oportunidad ang lumikha',
    'LNK_SELECT_ACCOUNTS' => ' <b> O </b> Pumili ng account',
    'LNK_SELECT_CONTACTS' => ' <b>O</b> Pumili ng kontak',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado kabang gusto mong burahin itong talaan?',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka na ba na gusto mong alisin ang lead ito mula sa kaso na ito?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ang mga kampanya',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Magtalaga ng gumagamit',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospekto',
    'LBL_CAMPAIGN_LEAD' => 'Ang mga kampanya',
    'LBL_BIRTHDATE' => 'Petsa ng kapanganakan:',
    'LBL_ASSISTANT_PHONE' => 'Assistant ns telepono',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Nilikhang gumagamit',
    'LBL_MODIFIED_USER' => 'Binsgo ng gumagamit',
    'LBL_CAMPAIGNS' => 'Ang mga kampanya',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Ang kinakailangan',
    'LBL_CONVERT_SELECT' => 'Pahintulutan ang napili',
    'LBL_CONVERT_COPY' => 'Kopyahin ang data',
    'LBL_CONVERT_EDIT' => 'I-edit',
    'LBL_CONVERT_DELETE' => 'Burahin',
    'LBL_CONVERT_ADD_MODULE' => 'Magdagdag ng module',
    'LBL_CREATE' => 'Nilikha',
    'LBL_SELECT' => ' <b>O</b> Ang piliin',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'I-import ang mga lead',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Ang module ay lumikha ng bagong rekord sa.',
    'LBL_REQUIRED_TIP' => 'Kinakailangang mga modyul ay dapat nailikha o napili bago ang lead ay maaring i-convert.',
    'LBL_COPY_TIP' => 'Kung tama, mga field mula sa lead ay kokopyahin sa mga fields na kaparehong pangalan sa bagong nilikha.',
    'LBL_SELECTION_TIP' => 'Mga modules na nauugnay ng larangan sa mga kontak ay napipili sa halip na nilikha sa panahong proseso ng convert lead.',
    'LBL_EDIT_TIP' => 'Binago ang convert layout sa module na ito.',
    'LBL_DELETE_TIP' => 'Alisin ang modyul na ito mula sa convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Ilipat ang mga aktibidad sa',
    'LBL_ACTIVITIES_COPY' => 'Kopyahin ang mga aktibidad sa',
    'LBL_ACTIVITIES_MOVE_HELP' => "Pumili ng rekord kung saan ilipat ang mga aktibidad ng Lead. Mga gawain, tawag, pagpupulong, tatandaan at email ay ililipat sa mga napiling rekord.",
    'LBL_ACTIVITIES_COPY_HELP' => "Piliin ang rekord kung saan gumawa ng mga kopya sa aktibidad ng lead. Mga bagong gawain, tawag, pagpupulong at tatandaan ay nilikha sa bawat napiling mga rekord. Ang mga email ay nakaugnay sa mga napiling rekord.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampanya ng ID',
    'LBL_EDITLAYOUT' => 'I-edit ang layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Ang petsa ay ipasok' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Nag-lo-load' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'I-edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Mga kaganapan',
);
