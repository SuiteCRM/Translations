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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_CASE_ID' => '사례ID:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => '거래처 담당자 ID:',
    'LBL_CONTACT_NAME' => '연락처:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '노트',
    'LBL_DESCRIPTION' => '노트',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_ATTACHMENT' => '이메일 첨부',
    'LBL_FILE_MIME_TYPE' => 'Mime종류',
    'LBL_FILE_URL' => 'File URL',
    'LBL_FILENAME' => '첨부파일:',
    'LBL_LEAD_ID' => '리드ID:',
    'LBL_LIST_CONTACT_NAME' => '연락처',
    'LBL_LIST_DATE_MODIFIED' => 'Last Modified',
    'LBL_LIST_FILENAME' => '첨부',
    'LBL_LIST_FORM_TITLE' => '노트 리스트',
    'LBL_LIST_RELATED_TO' => 'Related To',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => '상태',
    'LBL_LIST_CONTACT' => '연락처',
    'LBL_MODULE_NAME' => '노트',
    'LBL_MODULE_TITLE' => '노트: 홈',
    'LBL_NEW_FORM_TITLE' => 'Create Note or Add Attachment',
    'LBL_NOTE_STATUS' => '노트',
    'LBL_NOTE_SUBJECT' => 'Subject:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_NOTE' => '노트:',
    'LBL_OPPORTUNITY_ID' => '영업기회 ID:',
    'LBL_PARENT_ID' => '패런트ID:',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PHONE' => '전화번호:',
    'LBL_PORTAL_FLAG' => '포탈에표시?',
    'LBL_EMBED_FLAG' => '이메일 내 포함?',
    'LBL_PRODUCT_ID' => '제품 ID:',
    'LBL_QUOTE_ID' => '견적 ID:',
    'LBL_RELATED_TO' => 'Related To:',
    'LBL_SEARCH_FORM_TITLE' => '노트 검색',
    'LBL_STATUS' => '상태',
    'LBL_SUBJECT' => 'Subject:',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LNK_NEW_NOTE' => '노트작성',
    'LNK_NOTE_LIST' => 'View Notes',
    'LBL_MEMBER_OF' => '상위 거래처:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_REMOVING_ATTACHMENT' => '첨부파일 제거...',
    'ERR_REMOVING_ATTACHMENT' => '첨부 파일 삭제 실패...',
    'LBL_CREATED_BY' => '작성자',
    'LBL_MODIFIED_BY' => '수정자',
    'LBL_SEND_ANYWAYS' => 'This email has no subject. Send/save anyway?',
    'LBL_NOTE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => '내 노트',
    'LBL_EDITLAYOUT' => '레이아웃 수정' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => '이름',
    'LBL_LAST_NAME' => '성',
    'LBL_DATE_ENTERED' => '작성일',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_DELETED' => '삭제됨',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
