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
    'LBL_MODULE_NAME' => '버그',
    'LBL_MODULE_TITLE' => '결함정보: 홈',
    'LBL_MODULE_ID' => '버그',
    'LBL_SEARCH_FORM_TITLE' => '결함정보 검색',
    'LBL_LIST_FORM_TITLE' => '버그 목록',
    'LBL_NEW_FORM_TITLE' => '결함정보 작성',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_NUMBER' => 'Number:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => '상세설명:',
    'LBL_CONTACT_NAME' => '거래처 담당자명:',
    'LBL_CONTACT_ROLE' => '역할:',
    'LBL_LIST_NUMBER' => '넘버.',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => '상태',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RESOLUTION' => 'Resolution',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_INVITEE' => '연락처',
    'LBL_TYPE' => '유형:',
    'LBL_LIST_TYPE' => '유형',
    'LBL_RESOLUTION' => '해결:',
    'LBL_RELEASE' => '릴리즈:',
    'LNK_NEW_BUG' => '결함정보작성',
    'LNK_BUG_LIST' => '결함정보리스트',
    'ERR_DELETE_RECORD' => '버그를 삭제 하려면 레코드 번호를 지정 해야 합니다.',
    'LBL_LIST_MY_BUGS' => '내 할당된 결함',
    'LNK_IMPORT_BUGS' => '버그 가져오기',
    'LBL_FOUND_IN_RELEASE' => '릴리즈 검색:',
    'LBL_FIXED_IN_RELEASE' => '수정완료 릴리즈:',
    'LBL_LIST_FIXED_IN_RELEASE' => '수정완료 릴리즈',
    'LBL_WORK_LOG' => 'Work Log:',
    'LBL_SOURCE' => '소스:',
    'LBL_PRODUCT_CATEGORY' => 'Category:',

    'LBL_CREATED_BY' => '작성자:',
    'LBL_MODIFIED_BY' => 'Last Modified by:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_CONTACT_NAME' => '거래처 담당자 이름',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_PHONE' => '전화',
    'NTC_DELETE_CONFIRMATION' => '이 버그에서 해당 연락처를 정말 삭제하시겠습니까?',
    'NTC_SNOOZE_CONFIRMATION' => '정말로 나중에 알림을 받으시겠습니까?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => '결함 정보',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '활동내역',
    'LBL_HISTORY_SUBPANEL_TITLE' => '보관함',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '거래처 담당자',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '거래처',
    'LBL_CASES_SUBPANEL_TITLE' => '사례',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '문서',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ASSIGNED_TO_NAME' => '담당자',

    'LBL_BUG_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
