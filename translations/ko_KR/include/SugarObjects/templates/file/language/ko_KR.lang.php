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
    'LNK_DOCUMENT_LIST' => '자료리스트',
    'LBL_SEARCH_FORM_TITLE' => '자료 검색',
    //vardef labels
    'LBL_NAME' => '문서명',
    'LBL_DESCRIPTION' => '상세',
    'LBL_ASSIGNED_TO' => '담당자:',
    'LBL_CATEGORY' => '카테고리',
    'LBL_SUBCATEGORY' => '서브카테고리',
    'LBL_STATUS' => '상태',
    'LBL_IS_TEMPLATE' => '템플렛',
    'LBL_TEMPLATE_TYPE' => '자료종류',
    'LBL_REVISION_NAME' => '개정번호',
    'LBL_MIME' => 'Mime 형식',
    'LBL_REVISION' => '개정판',
    'LBL_DOCUMENT' => '관련 자료',
    'LBL_LATEST_REVISION' => '최종개정판',
    'LBL_CHANGE_LOG' => '변경로그',
    'LBL_ACTIVE_DATE' => '개정일',
    'LBL_EXPIRATION_DATE' => '만료일',
    'LBL_FILE_EXTENSION' => '파일확장자',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => '미지정',
    //quick search
    'LBL_NEW_FORM_TITLE' => '새 문서',
    //document edit and detail view
    'LBL_DOC_NAME' => '문서명:',
    'LBL_FILENAME' => '파일명:',
    'LBL_FILE_UPLOAD' => '파일:',
    'LBL_DOC_VERSION' => '개정번호:',
    'LBL_CATEGORY_VALUE' => '카테고리:',
    'LBL_SUBCATEGORY_VALUE' => '서브카테고리:',
    'LBL_DOC_STATUS' => '상태',
    'LBL_DET_TEMPLATE_TYPE' => '자료종류:',
    'LBL_DOC_DESCRIPTION' => '상세:',
    'LBL_DOC_ACTIVE_DATE' => '개정일:',
    'LBL_DOC_EXP_DATE' => '만료일:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => '자료리스트',
    'LBL_LIST_DOCUMENT' => '자료 리스트',
    'LBL_LIST_CATEGORY' => '카테고리',
    'LBL_LIST_SUBCATEGORY' => '서브카테고리',
    'LBL_LIST_REVISION' => '개정판',
    'LBL_LIST_LAST_REV_CREATOR' => '발행자',
    'LBL_LIST_LAST_REV_DATE' => '개정일',
    'LBL_LIST_VIEW_DOCUMENT' => '표시',
    'LBL_LIST_ACTIVE_DATE' => '개정일',
    'LBL_LIST_EXP_DATE' => '만료일',
    'LBL_LIST_STATUS' => '상태',

    //document search form.
    'LBL_SF_CATEGORY' => '카테고리:',
    'LBL_SF_SUBCATEGORY' => '서브카테고리:',

    'DEF_CREATE_LOG' => '자료작성로그',

    //error messages
    'ERR_DOC_NAME' => '문서명',
    'ERR_DOC_ACTIVE_DATE' => '개정일',
    'ERR_FILENAME' => '파일명',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => '문서명',

    'LBL_EDIT_BUTTON' => '편집  ',
    'LBL_REMOVE' => '삭제',

);
