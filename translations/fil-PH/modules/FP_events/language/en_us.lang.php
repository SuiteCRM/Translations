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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_EDIT_BUTTON' => 'I-edit',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng kaganapan',
    'LBL_MODULE_NAME' => 'Kaganapan',
    'LBL_MODULE_TITLE' => 'Kaganapan',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking kaganapan',
    'LNK_NEW_RECORD' => 'Lumikha ng kaganapan',
    'LNK_LIST' => 'Tingnan ang mga kaganapan',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapin ang kaganapan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_NEW_FORM_TITLE' => 'Bagong kaganapan',
    'LBL_LOCATION' => 'Lokasyon',
    'LBL_START_DATE' => 'magsimula sa petsa',
    'LBL_END_DATE' => 'Petsa/Oras ng wakas',
    'LBL_BUDGET' => 'Badyet',
    'LBL_DATE' => 'Petsa ng pagsimula',
    'LBL_DATE_END' => 'Katapusan ng petsa',
    'LBL_DURATION' => 'Agwat',
    'LBL_INVITE_TEMPLATES' => 'Template ng invite ng email',
    'LBL_INVITE_PDF' => 'Magpadalan ng nga imbitasyon',
    'LBL_EDITVIEW_PANEL1' => 'Mga detalye ng event',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga delegasyon',
    'LBL_ACCEPT_REDIRECT' => 'I-accept ang pag-redirect ng URL',
    'LBL_DECLINE_REDIRECT' => 'I-decline ang pag-redirect ng URL',
    'LBL_SELECT_DELEGATES' => 'Pumili ng mga delegado',
    'LBL_SELECT_DELEGATES_TITLE' => 'Pumili ng mga delegado:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Listahan ng. target',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Ang Mga target',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Mga kontak',
    'LBL_SELECT_DELEGATES_LEADS' => 'Mga naggagabay',
    'LBL_MANAGE_DELEGATES' => 'Pamahalaan ang mga delegado',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Pamahalaan ang mga delegado:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Pamahalaan ang mga pagtatanggap',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Pamahalaan ang mga pagtatanggap:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Tanggapin',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Tinanggihan',
    'LBL_MANAGE_POPUP_ERROR' => 'Walang napiling delegado.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Mga naimbitahan',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Hindi na imbitahan',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Dumalo',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Hindi dumalo',
    'LBL_SUCCESS_MSG' => 'Lahat ng mga invite ay naipadala ng matagumpay.',
    'LBL_ERROR_MSG_1' => 'Lahat ng naka-link na mga kontak ay naimbetahan na.',
    'LBL_ERROR_MSG_2' => 'Ang pagpapadala ng mga invite email ay nabigo! paki-check ang mga setting ng iyong email.',
    'LBL_ERROR_MSG_3' => 'Mahigit 10 mga email ang nabigong ipadala. paki-check na ang lahat ng mga kontak na iyong ini-imbitahan ay mayroong valid na email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' mga email ay nabigong ipadala. paki-check na lahat ng mga kontak na iyong ini-imbitahan ay mayroong valid na email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Hindi valid na Template ng Email',
    'LBL_EMAIL_INVITE' => 'Email invite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Mga kontak',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Ang mga lokasyon',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Mga naggagabay',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Ang Mga target',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Mga delegasyon',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Ang pangalan',
    'LBL_ACCOUNT_NAME' => 'Kompanya',
    'LBL_SIGNATURE' => 'Lagda',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Mga naimbitahan',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Katayuan',

    'LBL_ACTIVITY_STATUS' => 'Istado ng aktibidad',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Mga lokasyon ng event mula sa pamagat ng mga event',
    // Email links
    'LBL_ACCEPT_LINK' => 'Tanggapin',
    'LBL_DECLINE_LINK' => 'Tanggihan',
    
);
