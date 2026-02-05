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
    //module
    'LBL_MODULE_NAME' => '문서',
    'LBL_MODULE_TITLE' => '자료관리',
    'LNK_NEW_DOCUMENT' => '자료 작성',
    'LNK_DOCUMENT_LIST' => '자료 리스트',
    'LBL_DOC_REV_HEADER' => '문서 리버젼',
    'LBL_SEARCH_FORM_TITLE' => '자료 검색',
    //vardef labels
    'LBL_NAME' => '문서명',
    'LBL_DESCRIPTION' => '상세',
    'LBL_CATEGORY' => '카테고리',
    'LBL_SUBCATEGORY' => '서브카테고리',
    'LBL_STATUS' => '상태',
    'LBL_CREATED_BY' => '작성자',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_DELETED' => '삭제됨',
    'LBL_MODIFIED' => '편집자',
    'LBL_MODIFIED_USER' => '변경자',
    'LBL_CREATED' => '작성자',
    'LBL_REVISIONS' => '수정 사항',
    'LBL_RELATED_DOCUMENT_ID' => '관련문서 ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => '관련 자료 개정Id',
    'LBL_IS_TEMPLATE' => '템플렛',
    'LBL_TEMPLATE_TYPE' => '자료종류',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_REVISION_NAME' => '개정번호',
    'LBL_MIME' => 'Mime 형식',
    'LBL_REVISION' => '개정판',
    'LBL_DOCUMENT' => '관련 자료',
    'LBL_LATEST_REVISION' => '최종개정판',
    'LBL_CHANGE_LOG' => '변경로그',
    'LBL_ACTIVE_DATE' => '개정일',
    'LBL_EXPIRATION_DATE' => '만료일',
    'LBL_FILE_EXTENSION' => '파일확장자',
    'LBL_LAST_REV_MIME_TYPE' => '마지막 수정 MIME 유형',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => '미지정',
    'LBL_HOMEPAGE_TITLE' => '내 문서',
    //quick search
    'LBL_NEW_FORM_TITLE' => '새 문서',
    //document edit and detail view
    'LBL_DOC_NAME' => '문서명:',
    'LBL_FILENAME' => '파일명:',
    'LBL_LIST_FILENAME' => '파일:',
    'LBL_DOC_VERSION' => '개정번호:',
    'LBL_FILE_UPLOAD' => '파일:',

    'LBL_CATEGORY_VALUE' => '카테고리:',
    'LBL_LIST_CATEGORY' => '카테고리',
    'LBL_SUBCATEGORY_VALUE' => '서브카테고리:',
    'LBL_DOC_STATUS' => '상태',
    'LBL_LAST_REV_CREATOR' => '개정판작성자:',
    'LBL_LASTEST_REVISION_NAME' => '최신 수정 제목:',
    'LBL_SELECTED_REVISION_NAME' => '선택된 수정 제목:',
    'LBL_CONTRACT_STATUS' => '계약 상태:',
    'LBL_CONTRACT_NAME' => '계약 이름:',
    'LBL_DET_RELATED_DOCUMENT' => '관련 자료:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "관련자료 개정판:",
    'LBL_DET_IS_TEMPLATE' => '서식 지정 여부:',
    'LBL_DET_TEMPLATE_TYPE' => '자료종류:',
    'LBL_DOC_DESCRIPTION' => '상세:',
    'LBL_DOC_ACTIVE_DATE' => '개정일:',
    'LBL_DOC_EXP_DATE' => '만료일:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => '자료리스트',
    'LBL_LIST_DOCUMENT' => '자료 리스트',
    'LBL_LIST_SUBCATEGORY' => '서브카테고리',
    'LBL_LIST_REVISION' => '개정판',
    'LBL_LIST_LAST_REV_CREATOR' => '발행자',
    'LBL_LIST_LAST_REV_DATE' => '개정일',
    'LBL_LIST_VIEW_DOCUMENT' => '표시',
    'LBL_LIST_ACTIVE_DATE' => '개정일',
    'LBL_LIST_EXP_DATE' => '만료일',
    'LBL_LIST_STATUS' => '상태',
    'LBL_LINKED_ID' => '연결된 id',
    'LBL_SELECTED_REVISION_ID' => '선택된 수정 id',
    'LBL_LATEST_REVISION_ID' => '최신 수정 id',
    'LBL_SELECTED_REVISION_FILENAME' => '선택된 수정 파일제목',
    'LBL_FILE_URL' => '파일 url',

    //document search form.
    'LBL_SF_CATEGORY' => '카테고리:',
    'LBL_SF_SUBCATEGORY' => '서브카테고리:',

    'DEF_CREATE_LOG' => '자료작성로그',

    //error messages
    'ERR_DOC_NAME' => '문서명',
    'ERR_DOC_ACTIVE_DATE' => '개정일',
    'ERR_FILENAME' => '파일명',
    'ERR_DOC_VERSION' => '자료버젼',
    'ERR_DELETE_CONFIRM' => '이 문서 수정본을 삭제하시겠습니까?',
    'ERR_DELETE_LATEST_VERSION' => '문서의 최신 수정본을 삭제할 수 없습니다.',
    'LNK_NEW_MAIL_MERGE' => '메일 병합',
    'ERR_MISSING_FILE' => '이 문서에는 파일이 누락되어 있으며, 이는 업로드 중 오류로 인해 발생한 것일 가능성이 높습니다. 파일을 다시 업로드하거나 관리자에게 문의하십시오.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => '이름',
    'LBL_LIST_IS_TEMPLATE' => '템플렛?',
    'LBL_LIST_TEMPLATE_TYPE' => '자료종류',
    'LBL_LAST_REV_CREATE_DATE' => '최종 수정 생성 날짜',
    'LBL_CONTRACTS' => '계약',
    'LBL_CREATED_USER' => '신규 사용자',
    'LBL_DOCUMENT_INFORMATION' => '개요', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => '문서 소스 ID',
    'LBL_DOC_TYPE' => '소스',
    'LBL_DOC_TYPE_POPUP' => '이 문서가 업로드 되고<br>
사용될 수 있는 소스를 선택하세요.',
    'LBL_DOC_URL' => '문서 소스 URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => '파일명',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '가장 최근에 수정된 상위 20개 파일이 하단 목록에 내림차순으로 표시됩니다. 다른 파일을 찾으시려면 검색 기능을 사용하세요.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => '파일명',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => '사용자가 잘못된 외부 API({0})에 접근하려고 시도했습니다.',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => '외부 API({0})에 대한 로그인 확인에 실패하였습니다.',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '거래처',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기회',
    'LBL_CASES_SUBPANEL_TITLE' => '사례',
    'LBL_BUGS_SUBPANEL_TITLE' => '버그',

    'LBL_AOS_CONTRACTS' => '계약',
);
