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
    'LNK_NEW_CALL' => '전화통화 예약',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_NEW_NOTE' => '노트작성',
    'LNK_NEW_EMAIL' => '메일저장',
    'LNK_CALL_LIST' => '방문',
    'LNK_MEETING_LIST' => '미팅',
    'LNK_TASK_LIST' => '작업',
    'LNK_NOTE_LIST' => '노트',
    'LBL_ADD_FIELD' => '필드 추가:',
    'LBL_SEARCH_FORM_TITLE' => '모듈 검색',
    'COLUMN_TITLE_NAME' => '필드명',
    'COLUMN_TITLE_DISPLAY_LABEL' => '라벨 전시',
    'COLUMN_TITLE_LABEL_VALUE' => '레이블 값',
    'COLUMN_TITLE_LABEL' => '시스템 레이블',
    'COLUMN_TITLE_DATA_TYPE' => '데이터 타입',
    'COLUMN_TITLE_MAX_SIZE' => 'Max Size',
    'COLUMN_TITLE_HELP_TEXT' => '도움말 텍스트',
    'COLUMN_TITLE_COMMENT_TEXT' => '코멘트 텍스트',
    'COLUMN_TITLE_REQUIRED_OPTION' => '필수 필드',
    'COLUMN_TITLE_DEFAULT_VALUE' => '기본값',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame 높이',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => '기본 URL',
    'COLUMN_TITLE_AUDIT' => '회계감사',
    'COLUMN_TITLE_MIN_VALUE' => '최소값',
    'COLUMN_TITLE_MAX_VALUE' => '최대값',
    'COLUMN_TITLE_LABEL_ROWS' => '행',
    'COLUMN_TITLE_LABEL_COLS' => '열',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '표시된 항목 수',
    'COLUMN_TITLE_AUTOINC_NEXT' => '자동 증가 다음 값',
    'COLUMN_DISABLE_NUMBER_FORMAT' => '형식 비활성화',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => '범위 검색 활성화',
    'LBL_DROP_DOWN_LIST' => '드롭다운 리스트',
    'LBL_RADIO_FIELDS' => '라디오 필드',
    'LBL_MULTI_SELECT_LIST' => '다중선택 리스트',
    'COLUMN_TITLE_PRECISION' => '정밀도',
    'LBL_MODULE' => '모듈',
    'COLUMN_TITLE_MASS_UPDATE' => '대량 업데이트',
    'COLUMN_TITLE_IMPORTABLE' => '가져오기 가능',
    'COLUMN_TITLE_DUPLICATE_MERGE' => '중복 병합',
    'LBL_LABEL' => '라벨',
    'LBL_DATA_TYPE' => '데이터 타입',
    'LBL_DEFAULT_VALUE' => '기본값',
    'ERR_RESERVED_FIELD_NAME' => "예약된 키워드",
    'ERR_SELECT_FIELD_TYPE' => '필드 유형을 선택하세요',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => '필드 이름이 이미 존재합니다',
    'LBL_BTN_ADD' => '추가',
    'LBL_BTN_EDIT' => '편집',
    'LBL_GENERATE_URL' => 'URL 생성',
    'LBL_CALCULATED' => '계산된 값',
    'LBL_LINK_TARGET' => '링크 열기',
    'LBL_IMAGE_WIDTH' => '너비',
    'LBL_IMAGE_HEIGHT' => '높이',
    'LBL_IMAGE_BORDER' => '경계',
    'LBL_HELP' => '도움말' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => '인라인 편집',
    'COLUMN_TITLE_PARENT_ENUM' => '상위 드롭다운',
    'LBL_INSERT_FIELD' => '필드 삽입',
);
