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
    'LBL_ASSIGNED_TO_ID' => '할당된 사용자 Id',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '변경됨',
    'LBL_MODIFIED_NAME' => '이름으로 변경됨',
    'LBL_CREATED' => '작성자',
    'LBL_DESCRIPTION' => '상세',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '이름',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_LIST_NAME' => '이름',
    'LBL_EDIT_BUTTON' => '편집',
    'LBL_REMOVE' => '삭제',
    'LBL_LIST_FORM_TITLE' => '이벤트 목록',
    'LBL_MODULE_NAME' => '이벤트',
    'LBL_MODULE_TITLE' => '이벤트',
    'LBL_HOMEPAGE_TITLE' => '내 이벤트',
    'LNK_NEW_RECORD' => '이벤트 만들기',
    'LNK_LIST' => '이벤트 보기',
    'LBL_SEARCH_FORM_TITLE' => '이벤트 검색',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력 표시',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_NEW_FORM_TITLE' => 'New Event',
    'LBL_LOCATION' => '위치',
    'LBL_START_DATE' => 'start date',
    'LBL_END_DATE' => '완료 날짜/시간',
    'LBL_BUDGET' => '예산',
    'LBL_DATE' => '시작일',
    'LBL_DATE_END' => '종료일',
    'LBL_DURATION' => '시간',
    'LBL_INVITE_TEMPLATES' => 'Email Invite Template',
    'LBL_INVITE_PDF' => 'Send Invites',
    'LBL_EDITVIEW_PANEL1' => 'Event Details',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegates',
    'LBL_ACCEPT_REDIRECT' => 'Accept Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Decline Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Select Delegates',
    'LBL_SELECT_DELEGATES_TITLE' => 'Select Delegates:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => '타겟 목록',
    'LBL_SELECT_DELEGATES_TARGETS' => '대상',
    'LBL_SELECT_DELEGATES_CONTACTS' => '연락처',
    'LBL_SELECT_DELEGATES_LEADS' => '가망고객',
    'LBL_MANAGE_DELEGATES' => 'Manage Delegates',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Manage Delegates:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Manage Acceptances',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Manage Acceptances:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => '승인됨',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => '거절됨',
    'LBL_MANAGE_POPUP_ERROR' => 'No delegates have been selected.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invited',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Not Invited',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Attended',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Not Attended',
    'LBL_SUCCESS_MSG' => 'All invites have been sent successfully.',
    'LBL_ERROR_MSG_1' => 'All Linked contacts have already been Invited.',
    'LBL_ERROR_MSG_2' => 'Sending the invite emails has failed! Please check your email settings.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Invalid Email Template',
    'LBL_EMAIL_INVITE' => 'Email Invite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => '연락처',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => '위치',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => '가망고객',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => '대상',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    // Attendance report
    'LBL_CONTACT_NAME' => '이름',
    'LBL_ACCOUNT_NAME' => '회사',
    'LBL_SIGNATURE' => '서명',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invited',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => '상태',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => '승인',
    'LBL_DECLINE_LINK' => '거절',
    
);
