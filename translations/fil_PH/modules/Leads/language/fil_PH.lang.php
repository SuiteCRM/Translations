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

    'ERR_DELETE_RECORD' => 'Ang bilang ng rekord ay dapat nakatukoy upang burahin ang lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Paglalarawan ng akwant',
    'LBL_ACCOUNT_ID' => 'Akwant ID',
    'LBL_ACCOUNT_NAME' => 'Pangalan ng akwant:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_ADDRESS_INFORMATION' => 'Magdagdag ng impormasyon',
    'LBL_ALT_ADDRESS_CITY' => 'Lungsod ng Alt Address',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Bansa ng Alt Address',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Postalcode ng Alt Address',
    'LBL_ALT_ADDRESS_STATE' => 'Estado ng Alt Address',
    'LBL_ALT_ADDRESS_STREET_2' => 'Pangalawang kalye ng Alt Address',
    'LBL_ALT_ADDRESS_STREET_3' => 'Pangatlong kalye ng Alt Address',
    'LBL_ALT_ADDRESS_STREET' => 'Kalye ng Alt Address',
    'LBL_ALTERNATE_ADDRESS' => 'Ibang lugar:',
    'LBL_ALT_ADDRESS' => 'Ibang lugar:',
    'LBL_ANY_ADDRESS' => 'Anumang lugar:',
    'LBL_ANY_EMAIL' => 'Anumang email:',
    'LBL_ANY_PHONE' => 'Anumang telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ASSIGNED_TO_ID' => 'Itinalaga sa gumagamit:',
    'LBL_CITY' => 'Lungsod:',
    'LBL_CONTACT_ID' => 'Kontak ID',
    'LBL_CONTACT_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Pangalan ng Lead:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Oportunidad:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERTED_ACCOUNT' => 'Na-i-convert na akwant:',
    'LBL_CONVERTED_CONTACT' => 'Naka-convert na kontak:',
    'LBL_CONVERTED_OPP' => 'Naka-convert na oportunidad:',
    'LBL_CONVERTED' => 'Naka-convert',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'I-convert ang lead',
    'LBL_CONVERTLEAD' => 'I-convert ang lead',
    'LBL_CONVERTLEAD_WARNING' => 'Babala: Ang estado ng lead na gustong mo i-convert ay "Naka-convert" na. Ang mga ulat ng Kontak at/o akwant ay maaring nakalikha na mula sa Lead. Kung ninais mong magpatuloy sa pagco-convert ng Lead, pindutin ang i-save. Upang bumalik sa Lead na walang pag-convert nito, pindutin ang Kanselahin.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Posibleng Kontak: ',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_CREATED_NEW' => 'Lumikha ng bago',
    'LBL_CREATED_ACCOUNT' => 'Lumikha ng bagong akwant',
    'LBL_CREATED_CALL' => 'Lumikha ng bagong tawag',
    'LBL_CREATED_CONTACT' => 'Lumikha ng bagong kontak',
    'LBL_CREATED_MEETING' => 'Lumikha ng bagong pagpupulong',
    'LBL_CREATED_OPPORTUNITY' => 'Lumikha ng bagong oportunidad',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga naggagabay',
    'LBL_DEPARTMENT' => 'Departemento:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DO_NOT_CALL' => 'Huwag kang tumawag:',
    'LBL_DUPLICATE' => 'Kaparehong mga lead',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Emai Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Gumamit ang isang umiiral na akwant',
    'LBL_EXISTING_CONTACT' => 'Gumamit ng isang umiiral na kontak',
    'LBL_EXISTING_OPPORTUNITY' => 'Gumamit ng umiiral na oportunidad',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Unang pangalan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_HOME_PHONE' => 'Telepono ng bahay:',
    'LBL_IMPORT_VCARD' => 'I-import ang vCard',
    'LBL_VCARD' => 'ang vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikong lumikha ng bagong lead sa pamamagitan ng vCard mula sa iyong sistemang file.',
    'LBL_INVALID_EMAIL' => 'Hindi balindo ang email:',
    'LBL_INVITEE' => 'Direktang mga ulat',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Deskripsyon ng lead na pinagmulan:',
    'LBL_LEAD_SOURCE' => 'Pinagmulan ng Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_LIST_CONTACT_NAME' => 'Pangalan ng Lead',
    'LBL_LIST_CONTACT_ROLE' => 'Tungkulin',
    'LBL_LIST_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang email',
    'LBL_LIST_FIRST_NAME' => 'Unang pangalan',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng lead',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Deskripsyon na pinagmulan ng lead',
    'LBL_LIST_LEAD_SOURCE' => 'Pinagmulan ng lead',
    'LBL_LIST_MY_LEADS' => 'Ang aking mga lead',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_PHONE' => 'Telepono sa opisina',
    'LBL_LIST_REFERED_BY' => 'Tinutukoy ng',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_TITLE' => 'Paksa',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Mga naggagabay',
    'LBL_MODULE_TITLE' => 'Mga Lead: Home',
    'LBL_NAME' => 'Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bagong lead',
    'LBL_OFFICE_PHONE' => 'Telepono ng opisina:',
    'LBL_OPP_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Halaga ng oportunidad:',
    'LBL_OPPORTUNITY_ID' => 'ID ng oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Pangalan ng oportunidad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iba pang mga Email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_APP' => 'Aplikasyon ng portal',
    'LBL_PORTAL_INFORMATION' => 'Impormasyong portal',
    'LBL_PORTAL_NAME' => 'Pangalan ng portal:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Kalye',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing lugar ng lungsod',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pangunahing lugar ng bansa',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pangunahing lugar ng Postalcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pangunahing lugar ng estado',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pangalawang pangunahing lugar ng kalye',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ikatlong pangunahing lugar ng kalye',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pangunahing lugar ng kalye',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_REFERED_BY' => 'Tinutukoy sa pamamagitan ng:',
    'LBL_REPORTS_TO_ID' => 'Ang mga ulat sa ID',
    'LBL_REPORTS_TO' => 'Ang mga ulat sa:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Piliin ang mga naka-check na lead',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Piliin ang mga naka-check na lead',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_STATUS_DESCRIPTION' => 'Paglalarawan ng estado:',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Lumikha ng lead mula sa vCard',
    'LNK_LEAD_LIST' => 'Tingnan ang mga lead',
    'LNK_NEW_ACCOUNT' => 'Gumawa ng Account',
    'LNK_NEW_APPOINTMENT' => 'Lumikha ng pagkakayari',
    'LNK_NEW_CONTACT' => 'Gumawa ng kontak',
    'LNK_NEW_LEAD' => 'Lumikha ng lead',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'LNK_NEW_CASE' => 'Gumawa ng kaso',
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_OPPORTUNITY' => 'Gumawa ng oportunidad',
    'LNK_SELECT_ACCOUNTS' => ' <b>O</b> Pumili ng akwant',
    'LNK_SELECT_CONTACTS' => ' <b>AT</b> Pumili ng kontak',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka bang na gusto mong burahin ang ulat na ito?',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka bang na gusto mong alisin ang lead na ito mula sa kasong ito?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ang mga Kampanya',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinalaga sa gumagamit',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospect',
    'LBL_CAMPAIGN_LEAD' => 'Ang mga Kampanya',
    'LBL_BIRTHDATE' => 'Petsa ng kapanganakan:',
    'LBL_ASSISTANT_PHONE' => 'Mga assistant na telepono',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Nilikha ng gumagamit',
    'LBL_MODIFIED_USER' => 'Binago ng gumagamit',
    'LBL_CAMPAIGNS' => 'Ang mga Kampanya',
    'LBL_CONVERT_MODULE_NAME' => 'Modyul',
    'LBL_CONVERT_REQUIRED' => 'Kinakailangan',
    'LBL_CONVERT_SELECT' => 'Pinapayagan ang pagpili',
    'LBL_CONVERT_COPY' => 'Kompyahin ang data',
    'LBL_CONVERT_EDIT' => 'I-edit',
    'LBL_CONVERT_DELETE' => 'Tanggalin',
    'LBL_CONVERT_ADD_MODULE' => 'Magdagdag ng modyul',
    'LBL_CREATE' => 'Lumikha',
    'LBL_SELECT' => ' <b>AT</b> Pumili',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'I-import ang mga lead',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Ang modyul upang lumikha ng bagong rekord sa.',
    'LBL_REQUIRED_TIP' => 'Kinakailangan ang mga modyul ay dapat naka-likha o napili bago ang lead ay na i-convert.',
    'LBL_COPY_TIP' => 'Kung tamaa, ang mga patlang mula sa isang lead ay kokopyahin sa mga patlang sa kaparehong pangalan sa pinakamabagong nilikha.',
    'LBL_SELECTION_TIP' => 'Mga modyul sa kaugnay na patlang sa mga kontak ay maaring mapili sa halip na nilikha sa panahon ng i-convert ang proseso ng lead.',
    'LBL_EDIT_TIP' => 'Baguhin ang convert layout para sa modyul na ito.',
    'LBL_DELETE_TIP' => 'Tanggalin ang modyul na ito mula sa convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Ilipat ang mga aktibidad sa',
    'LBL_ACTIVITIES_COPY' => 'Kopyahin ang mga aktibidad sa',
    'LBL_ACTIVITIES_MOVE_HELP' => "Piliin ang ulat kung saan ilipat ang mga aktibidad ng lead, gawain, tawag, pagpupulong, talaan at email ay ililipat sa mga napiling rekord.",
    'LBL_ACTIVITIES_COPY_HELP' => "Piliin ang mga ulat para sa paglikha ng mga kopya sa isang aktibidad ng lead. Ang mga bagong gawain, tawag, pagpupulong at talaan ay nilikha para sa mga bawat napiling ulat. Ang mga email ay kaugnay sa mga napiling rekord.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID ng kampanya',
    'LBL_EDITLAYOUT' => 'Baguhin ang layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Ipasok ang petsa' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Nag-loload' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'I-edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Mga pangyayari',
);
