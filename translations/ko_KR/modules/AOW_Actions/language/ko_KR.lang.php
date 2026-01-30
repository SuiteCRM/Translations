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
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '변경됨',
    'LBL_MODIFIED_ID' => 'Id로 변경됨',
    'LBL_MODIFIED_NAME' => '이름으로 변경됨',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_CREATED' => '작성자',
    'LBL_DESCRIPTION' => '상세',
    'LBL_CREATED_ID' => 'Id로 생성됨',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '이름',
    'LBL_MODULE_NAME' => '워크플로 작업',
    'LBL_MODULE_TITLE' => '워크플로 작업',
    'LBL_AOW_WORKFLOW_ID' => 'AOW_WorkFlow Id',
    'LBL_ACTION' => '액션',
    'LBL_PARAMETERS' => '매개 변수',
    'LBL_SELECT_ACTION' => '작업 선택',
    'LBL_CREATE_EMAIL_TEMPLATE' => '작성',
    'LBL_RECORD_TYPE' => '레코드 종류',
    'LBL_SENDEMAIL' => '이메일 보내기',
    'LBL_CREATERECORD' => '레코드 작성',
    'LBL_MODIFYRECORD' => '레코드 수정',
    'LBL_ADD_FIELD' => '필드 추가',
    'LBL_ADD_RELATIONSHIP' => '관계 추가',
    'LBL_EDIT_EMAIL_TEMPLATE' => '편집',
    'LBL_EMAIL' => '이메일',
    'LBL_EMAIL_TEMPLATE' => '이메일 서식',
    'LBL_SETAPPROVAL' => '승인 설정',
    'LBL_RELATE_WORKFLOW' => '워크플로 모듈 관련',
    'LBL_INDIVIDUAL_EMAILS' => '개별 이메일 보내기',
    'LBL_COMPUTEFIELD' => '필드 계산',
    'LBL_COMPUTEFIELD_PARAMETERS' => '매개 변수',
    'LBL_COMPUTEFIELD_FIELD_NAME' => '필드명',
    'LBL_COMPUTEFIELD_IDENTIFIER' => '식별자',
    'LBL_COMPUTEFIELD_ADD_PARAMETER' => '매개 변수 추가',
    'LBL_COMPUTEFIELD_RELATION_PARAMETERS' => '관계 매개 변수',
    'LBL_COMPUTEFIELD_RELATION' => '관계',
    'LBL_COMPUTEFIELD_ADD_RELATION_PARAMETER' => '관계 매개 변수 추가',
    'LBL_COMPUTEFIELD_FORMULA' => '수식',
    'LBL_COMPUTEFIELD_FORMULAS' => '수식',
    'LBL_COMPUTEFIELD_ADD_FORMULA' => '수식 추가',
    'LBL_COMPUTEFIELD_VALUE_TYPE' => '값 형식',
    'LBL_COMPUTEFIELD_RAW_VALUE' => '원시 값',
    'LBL_COMPUTEFIELD_FORMATTED_VALUE' => '포맷 된 값',
    'LBL_COPY_EMAIL_ADDRESSES_WORKFLOW' => '워크플로 모듈에서 이메일 복사'
);
