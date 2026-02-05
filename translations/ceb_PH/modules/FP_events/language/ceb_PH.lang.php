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
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'Pangalan',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_EDIT_BUTTON' => 'Usba',
    'LBL_REMOVE' => 'Tangtangon',
    'LBL_LIST_FORM_TITLE' => 'Lista sa Kalihokan',
    'LBL_MODULE_NAME' => 'Event',
    'LBL_MODULE_TITLE' => 'Event',
    'LBL_HOMEPAGE_TITLE' => 'Akong Kalihokan',
    'LNK_NEW_RECORD' => 'Paghimo og Kalihokan',
    'LNK_LIST' => 'Tan-awa ang mga Kalihokan',
    'LBL_SEARCH_FORM_TITLE' => 'Pangita og Kalihokan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_NEW_FORM_TITLE' => 'Bag-o nga kalihokan',
    'LBL_LOCATION' => 'Lokasyon',
    'LBL_START_DATE' => 'sugod na Petsa',
    'LBL_END_DATE' => 'Tapos nga Petsa/Oras',
    'LBL_BUDGET' => 'Nay Budget',
    'LBL_DATE' => 'Petsa nga Nagsugod',
    'LBL_DATE_END' => 'Katapusang Date',
    'LBL_DURATION' => 'Kanus-a taman',
    'LBL_INVITE_TEMPLATES' => 'Template sa imbita nga email',
    'LBL_INVITE_PDF' => 'Padala og mga Imbitasyon',
    'LBL_EDITVIEW_PANEL1' => 'Mga detalye sa event',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga Delegado',
    'LBL_ACCEPT_REDIRECT' => 'Dawatun ang redirect nga URL',
    'LBL_DECLINE_REDIRECT' => 'Balibaran ang redirect nga URL',
    'LBL_SELECT_DELEGATES' => 'Pili ug mga delegado',
    'LBL_SELECT_DELEGATES_TITLE' => 'Pili ug mga delegado:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Listahan sa Target',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Targetanan',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontak',
    'LBL_SELECT_DELEGATES_LEADS' => 'Nag-una',
    'LBL_MANAGE_DELEGATES' => 'Magdumala ug mga delegado',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Magdumala ug mga delegado:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Magdumala ug mga pagdawat',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Magdumala ug mga pagdawat:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Nadawat',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Wala dawata',
    'LBL_MANAGE_POPUP_ERROR' => 'Walay napiling mga delegado.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Gi-imbitar',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Wala gi-imbitar',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Mitambong',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Wala mitambong',
    'LBL_SUCCESS_MSG' => 'Tanang mga imbitar kay malampuson nga napadala.',
    'LBL_ERROR_MSG_1' => 'Tanang na-link nga mga kontak kay na imbitar na.',
    'LBL_ERROR_MSG_2' => 'Ang pagpadala sa mga email nga pang-imbitar kay napakyas! palihug i-check ang mga setting sa imong email.',
    'LBL_ERROR_MSG_3' => 'Labaw pa sa 10 ka mga email ang napakyas sa pagpada. palihug i-check kung ang tanang mga kontak nga imong gi-imbitar kay naay balidong email address.(tan-awa sa suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' mga email kay napakyas sa pagpada. palihug i-check kung ang tanang mga kontak nga imong gi-imbitar kay naay balidong email address.(tan-awa sa suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Template sa dili balidong email',
    'LBL_EMAIL_INVITE' => 'Email napang-imbita',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontak',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Mga Lokasyon',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Nag-una',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Targetanan',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Mga Delegado',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Pangalan',
    'LBL_ACCOUNT_NAME' => 'Kompanya',
    'LBL_SIGNATURE' => 'Ang Pirma',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Gi-imbitar',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Stado',

    'LBL_ACTIVITY_STATUS' => 'Estado ng aktibidad',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Mga lokasyon sa event gikan sa taytol sa mga event',
    // Email links
    'LBL_ACCEPT_LINK' => 'Nadawat',
    'LBL_DECLINE_LINK' => 'Wala ge dawat',
    
);
