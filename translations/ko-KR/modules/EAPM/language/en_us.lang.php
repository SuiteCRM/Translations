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
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM 유저',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '변경됨',
    'LBL_MODIFIED_NAME' => '이름으로 변경됨',
    'LBL_CREATED' => '작성자',
    'LBL_DESCRIPTION' => '상세',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '응용 프로그램 유저명',
    'LBL_CREATED_USER' => '사용자로부터 생성',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_FORM_TITLE' => '외부 거래처 목록',
    'LBL_MODULE_NAME' => '외부 거래처',
    'LBL_MODULE_TITLE' => '외부 거래처',
    'LBL_HOMEPAGE_TITLE' => '내 외주 거래처',
    'LNK_NEW_RECORD' => '외부 거래처 생성',
    'LNK_LIST' => '외부 거래처 보기',
    'LBL_SEARCH_FORM_TITLE' => '외부 소스 검색',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력 표시',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_NEW_FORM_TITLE' => '신규 외부 거래처',
    'LBL_PASSWORD' => '앱 비밀번호',
    'LBL_USER_NAME' => '응용 프로그램 유저명',
    'LBL_URL' => 'URL:',
    'LBL_APPLICATION' => '응용 프로그램',
    'LBL_API_DATA' => 'API 데이터',
    'LBL_API_CONSKEY' => '소비자 키',
    'LBL_API_CONSSECRET' => '소비자 비밀',
    'LBL_API_OAUTHTOKEN' => 'OAuth 토큰',
    'LBL_AUTH_UNSUPPORTED' => "해당 인증 방법은 이 어플리케이션에서 지원되지 않습니다.",
    'LBL_AUTH_ERROR' => '계정에 연결 하지 못했습니다.',
    'LBL_VALIDATED' => '연결됨',
    'LBL_ACTIVE' => '활성',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => '연결',
    'LBL_NOTE' => '참고 사항',
    'LBL_CONNECTED' => '연결됨',

    'LBL_ERR_NO_AUTHINFO' => '이 계정에 대한 인증 정보가 없습니다.',
    'LBL_ERR_NO_TOKEN' => '이 계정에 대한 유효한 로그인 토큰이 없습니다.',

    'LBL_ERR_FAILED_QUICKCHECK' => '현재 {0} 계정에 연결되어있지 않습니다. 계정에 로그인하고 연결을 다시 활성화하려면 OK를 누르세요.',

    'LBL_CLICK_TO_EDIT' => '편집하려면 클릭',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => '재인증',
    'LBL_APPLICATION_FOUND_NOTICE' => '해당 어플리케이션의 계정이 이미 존재합니다. 기존 계정을 복원했습니다.',
    'LBL_OMIT_URL' => '( http:// 또는  https:// 생략)',
    'LBL_OAUTH_SAVE_NOTICE' => '<b>Connect</b>를 클릭하여 계정 정보를 제공하고 SuiteCRM을 통해 계정에 대한 액세스 권한을 부여하는 페이지로 이동합니다. 연결 후, SuiteCRM으로 다시 이동하게 됩니다.',
    'LBL_BASIC_SAVE_NOTICE' => '이 계정을 SuiteCRM에 연결하려면 <b>Connect</b>를 클릭하십시오.',
    'LBL_ERR_POPUPS_DISABLED' => '브라우저 팝업 창을 활성화하거나 웹 사이트 "{0}"에 대한 예외를 예외 목록에 추가하여 연결하십시오.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
