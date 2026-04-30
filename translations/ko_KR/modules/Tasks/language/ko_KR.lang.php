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
    'LBL_MODULE_NAME' => '업무',
    'LBL_MODULE_TITLE' => ' 업무: 홈',
    'LBL_SEARCH_FORM_TITLE' => ' 업무 검색',
    'LBL_LIST_FORM_TITLE' => ' 업무 목록',
    'LBL_NEW_FORM_TITLE' => ' 업무 작성',
    'LBL_LIST_CLOSE' => '닫기',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => '연락처',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_DUE_TIME' => '종료시간',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_STATUS' => 'Status:',
    'LBL_DUE_DATE' => 'Due Date:',
    'LBL_DUE_TIME' => 'Due Time:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DUE_DATE_AND_TIME' => '종료일시:',
    'LBL_START_DATE_AND_TIME' => 'Start Date & Time:',
    'LBL_START_DATE' => 'Start Date:',
    'LBL_LIST_START_DATE' => 'Start Date',
    'LBL_START_TIME' => 'Start Time:',
    'DATE_FORMAT' => '(yyyy-mm-dd)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'This Task is Due in',
    'LBL_DAYS_OVERDUE' => 'This Task Is Overdue By ',
    'LBL_TASK_COMPLETED' => 'This Task is Completed',
    'LBL_NONE' => '없음',
    'LBL_CONTACT' => '거래담당자:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_PHONE' => '전화번호:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_DESCRIPTION' => '상세설명:',
    'LBL_NAME' => '이름:',
    'LBL_CONTACT_NAME' => '거래처 담당자명 ',
    'LBL_LIST_STATUS' => '상태',
    'LBL_DATE_DUE_FLAG' => '종료일',
    'LBL_DATE_START_FLAG' => '시작일',
    'LBL_LIST_MY_TASKS' => '내 진행중 업무',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_TASK_LIST' => 'View Tasks',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_LIST_DATE_MODIFIED' => '수정일',
    'LBL_CONTACT_ID' => '거래처 담당자 ID:',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_CONTACT_PHONE' => '거래처 담당자 전화번호:',
    'LBL_PARENT_TYPE' => '상위 유형:',
    'LBL_TASK_INFORMATION' => '업무 개요', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => '레이아웃 수정' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => '노트',
    //For export labels
    'LBL_DATE_DUE' => 'Date Due',
    'LBL_RELATED_TO' => '관련:',
);
