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
    'LBL_ALL_MODULES' => '전체',//rost fix
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
    'LBL_NONINHERITABLE' => '상속되지 않음',
    'LBL_LIST_NONINHERITABLE' => '상속되지 않음',
    'LBL_NAME' => '이름',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_LIST_FORM_TITLE' => '보안 그룹',
    'LBL_MODULE_NAME' => '보안 스위트 관리',
    'LBL_MODULE_TITLE' => '보안 스위트 관리',
    'LNK_NEW_RECORD' => '보안 그룹 만들기',
    'LNK_LIST' => '목록 보기',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups Management',
    'LBL_USERS' => '사용자',
    'LBL_USERS_SUBPANEL_TITLE' => '사용자',
    'LBL_ROLES_SUBPANEL_TITLE' => '역할',
    'LBL_ROLES' => '역할',

    'LBL_CONFIGURE_SETTINGS' => '구성',
    'LBL_ADDITIVE' => '추가 권한',
    'LBL_ADDITIVE_DESC' => "사용자는 사용자 또는 사용자 그룹에 할당 된 모든 역할의 가장 큰 권한를 갖습니다.",
    'LBL_STRICT_RIGHTS' => '엄격한 권한',
    'LBL_STRICT_RIGHTS_DESC' => "사용자가 하나 이상의 사용자 그룹에 속하는 경우, 현재의 데이터에 할당된 그룹으로 부터 파생된 개별 권한만 적용된다.",
    'LBL_USER_ROLE_PRECEDENCE' => '사용자 역할 우선 순위',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => '사용자에게 역할이 직접 할당된 경우, 어떠한 그룹의 역할보다 우선하여 적용된다.',
    'LBL_INHERIT_TITLE' => '그룹 상속 규칙',
    'LBL_INHERIT_CREATOR' => '생성한 사용자로 부터 상속',
    'LBL_INHERIT_CREATOR_DESC' => '레코드는 작성한 유저에게 할당된 모든 그룹을 상속합니다.',
    'LBL_INHERIT_PARENT' => '상위 레코드로 부터 상속',
    'LBL_INHERIT_PARENT_DESC' => '예) 연락처를 위해 케이스를 생성한 경우, 생성된 케이스는 연락처와 연관된 그룹을 상속합니다.',
    'LBL_USER_POPUP' => '새로운 사용자 그룹 팝업',
    'LBL_USER_POPUP_DESC' => '새로운 사용자를 생성하면, 사용자를 그룹에 할당하기 위한 보안그룹 팝업을 표시 합니다.',
    'LBL_INHERIT_ASSIGNED' => '할당된 담당자로 부터 상속',
    'LBL_INHERIT_ASSIGNED_DESC' => '레코드는 그 레코드에 할당된 사용자가 속한 모든 그룹들에 상속됩니다. 이미 그 레코드에 할당된 다른 그룹들은 삭제되지 않습니다.',
    'LBL_POPUP_SELECT' => '생성 그룹 선택 사용',
    'LBL_POPUP_SELECT_DESC' => '하나 이상의 그룹에 속한 사용자가 레코드가 생성되면 생성화면에 그룹을 선택할수 있는 패널을 표시합니다. 그렇지 않으면 하나의 그룹을 상속합니다.',
    'LBL_FILTER_USER_LIST' => '사용자 목록을 필터링합니다',
    'LBL_FILTER_USER_LIST_DESC' => "일반 사용자는 같은 그룹에 사용자만 할당할 수 있습니다.",

    'LBL_DEFAULT_GROUP_TITLE' => '새 레코드에 대 한 기본 그룹',
    'LBL_ADD_BUTTON_LABEL' => '추가',
    'LBL_REMOVE_BUTTON_LABEL' => '삭제',
    'LBL_GROUP' => '그룹:',
    'LBL_MODULE' => '모듈:',

    'LBL_MASS_ASSIGN' => '보안 그룹 : 일괄 지정',
    'LBL_ASSIGN' => '지정',
    'LBL_REMOVE' => '삭제',
    'LBL_ASSIGN_CONFIRM' => '이 그룹을 다음에 추가하시겠습니까 ',
    'LBL_REMOVE_CONFIRM' => '이 그룹을 다음에서 제거하시겠습니까 ',
    'LBL_CONFIRM_END' => ' 선태된 기록?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => '보안 그룹/유저',
    'LBL_USER_NAME' => '사용자 이름',
    'LBL_SECURITYGROUP_NAME' => '보안그룹 이름',
    'LBL_HOMEPAGE_TITLE' => '그룹 메시지',
    'LBL_TITLE' => '제목',
    'LBL_ROWS' => '행',
    'LBL_POST' => '올리기',
    'LBL_SELECT_GROUP_ERROR' => '그룹을 선택 하 고 다시 시도 하십시오.',

    'LBL_GROUP_SELECT' => '이 레코드에 접근할수 있는 그룹을 선택하십시오.',
    'LBL_ERROR_DUPLICATE' => 'SuiteCRM에 의해 감지된 중복가능성으로 인해, 새롭게 생성한 레코드에 보안그룹을 수동으로 할당해야 합니다.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => '인바운드 전자 메일 계정',
    'LBL_INBOUND_EMAIL_DESC' => '이메일 계정이 할당된 그룹에 속한 경우에만, 이메일 계정 접속을 허용합니다.',
    'LBL_PRIMARY_GROUP' => '기본 그룹',
    'LBL_CHECKMARK' => '체크 표시',

);
