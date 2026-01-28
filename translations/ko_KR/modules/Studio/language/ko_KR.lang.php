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
    'LBL_EDIT_LAYOUT' => '레이아웃 편집',
    'LBL_EDIT_FIELDS' => '사용자 정의 필드 편집',
    'LBL_SELECT_FILE' => '파일 선택하기',
    'LBL_MODULE_TITLE' => '스튜디오',
    'LBL_TOOLBOX' => '도구 상자',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM 필드 (준비 영역에 추가할 항목을 클릭)',
    'LBL_VIEW_SUITE_FIELDS' => 'SuiteCRM 필드 보기',
    'LBL_FAILED_TO_SAVE' => '저장 실패',
    'LBL_CONFIRM_UNSAVE' => '변경 내용이 저장되지 않아습니다. 계속하시겠습니까?',
    'LBL_PUBLISHING' => '발표중',
    'LBL_PUBLISHED' => '게시됨',
    'LBL_FAILED_PUBLISHED' => '발표 실패',
    'LBL_DROP_HERE' => '[여기에 놓기]',

//CUSTOM FIELDS
    'LBL_NAME' => '이름',
    'LBL_LABEL' => '라벨',
    'LBL_MASS_UPDATE' => '대량 업데이트',
    'LBL_DEFAULT_VALUE' => '기본값',
    'LBL_REQUIRED' => '필수',
    'LBL_DATA_TYPE' => '종류',


    'LBL_HISTORY' => '이력',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>스튜디오에 오신 것을 환영 합니다!</h2> <br>어떤 작업을 하시겠습니까? <br><b>아래 옵션에서 선택 하십시오.</b>',
    'LBL_SW_EDIT_MODULE' => '모듈 편집',
    'LBL_SW_EDIT_DROPDOWNS' => '드롭 다운 편집',
    'LBL_SW_EDIT_TABS' => '탭 설정',
    'LBL_SW_RENAME_TABS' => '탭 이름 바꾸기',
    'LBL_SW_EDIT_GROUPTABS' => '그룹 탭 설정',
    'LBL_SW_EDIT_PORTAL' => '포탈 편집',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => '사용자 정의 필드 복구',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => '사용자 정의 필드 마이그레이션',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => '언어파일의 javascript 버전 다시 만들기',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => '언어파일의  javascript 버전 제거중이며 필요시 다시 만듭니다.',


//Manager Backups History
    'LBL_MB_DELETE' => '삭제',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => '드롭 다운 작성',
    'LBL_DROPDOWN_NAME' => '드롭 다운 이름:',
    'LBL_DROPDOWN_LANGUAGE' => '드롭 다운 언어:',
    'LBL_TABGROUP_LANGUAGE' => '언어:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => '가치 전시',
    'LBL_DD_DATABASEVALUE' => '데이타베이스 가치',
    'LBL_DD_ALL' => '전체',

//BUTTONS
    'LBL_BTN_SAVE' => '저장',
    'LBL_BTN_CANCEL' => '취소',
    'LBL_BTN_SAVEPUBLISH' => '저장후 배치',
    'LBL_BTN_HISTORY' => '이력',
    'LBL_BTN_ADDROWS' => '줄 추가하기',
    'LBL_BTN_UNDO' => '원상태로',
    'LBL_BTN_REDO' => '다시하기',
    'LBL_BTN_ADDCUSTOMFIELD' => '고객 필드 추가하기',
    'LBL_BTN_TABINDEX' => '표달기 순서 편집하기',

//TABS
    'LBL_MODULES' => 'Module',
    'LBL_MODULE_NAME' => '관리',
    'LBL_CONFIGURE_GROUP_TABS' => '모듈 메뉴 필터 구성하기',
    'LBL_GROUP_TAB_WELCOME' => '아래의 필터는 메뉴내의 그룹 모듈 보기의 사용자를 위해, 모듈 메뉴의 더보기 목록에 표시됩니다. 모듈을 드래그앤드롭하여 필터 적용을 하십시오. 노트: 빈 필터는 메뉴에 표시되지 않습니다.',
    'LBL_RENAME_TAB_WELCOME' => '탭 이름을 바꾸려면 아래 테이블의 전시 가치 탭을 클릭하십시오,',
    'LBL_DELETE_MODULE' => '필터에서 모듈 제거하기',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => '사용 가능한 언어을 선택하여 그룹 라벨을 편집하고 선택한 언어에 적용할 라벨 저장후 배치를 클릭하십시오.',
    'LBL_ADD_GROUP' => '필터 추가하기',
    'LBL_NEW_GROUP' => '신규 그룹',
    'LBL_RENAME_TABS' => '모듈 이름 바꾸기',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "오류:유효하지 않은 키 가치",

//SUGAR PORTAL
    'LBL_SAVE' => '저장' /*for 508 compliance fix*/,
    'LBL_UNDO' => '원상태로' /*for 508 compliance fix*/,
    'LBL_REDO' => '다시하기' /*for 508 compliance fix*/,
    'LBL_INLINE' => '직렬' /*for 508 compliance fix*/,
    'LBL_DELETE' => '삭제' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => '필드 추가' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => '최대화' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => '최소화' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => '게시' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => '줄 추가하기' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => '필드 추가' /*for 508 compliance fix*/,
    'LBL_EDIT' => '편집' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => '편집할 언어를 선택하십시오.',
    'LBL_SINGULAR' => '단수 라벨',
    'LBL_PLURAL' => '복수 라벨',
    'LBL_RENAME_MOD_SAVE_HELP' => '변경 내용을 적용 하려면 <b>저장</b>을 클릭 합니다.'

);
