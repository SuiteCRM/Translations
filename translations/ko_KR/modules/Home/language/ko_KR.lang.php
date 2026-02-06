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
    'LBL_MODULE_NAME' => '홈',
    'LBL_NEW_FORM_TITLE' => '신규 거래처 담당자',
    'LBL_FIRST_NAME' => '이름:',
    'LBL_LAST_NAME' => '성:',
    'LBL_LIST_LAST_NAME' => '성',
    'LBL_PHONE' => '전화:',
    'LBL_EMAIL_ADDRESS' => '이메일 주소:',
    'LBL_MY_PIPELINE_FORM_TITLE' => '내 영업목록',
    'LBL_PIPELINE_FORM_TITLE' => '판매 단계 파이프라인',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => '판매 단계 파이프라인',
    'LNK_NEW_CONTACT' => '거래고객작성',
    'LNK_NEW_ACCOUNT' => '거래처 작성',
    'LNK_NEW_OPPORTUNITY' => '영업기회 작성',
    'LNK_NEW_LEAD' => '리드 작성',
    'LNK_NEW_CASE' => '신규사례작성',
    'LNK_NEW_NOTE' => '노트작성',
    'LNK_NEW_CALL' => '콜스케쥴작성',
    'LNK_NEW_EMAIL' => '메일작성',
    'LNK_NEW_MEETING' => '미팅스케쥴작성',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_NEW_BUG' => '결함정보작성',
    'LNK_NEW_SEND_EMAIL' => '이메일작성',
    'LBL_NO_ACCESS' => '이곳 접속권한이 없습니다. 접속하려면 관리자에 문의하십시오.',
    'LBL_NO_RESULTS_IN_MODULE' => '결과가 없습니다',
    'LBL_NO_RESULTS' => '발견된 결과가 없습니다. 다시 검색해주십시오.',
    'LBL_NO_RESULTS_TIPS' => '검색 도움말:<br />선택한 범주가 올바른지 확인하십시오.<br />검색 범주를 넓히십시오.<br />결과를 찾을수 없다면 고급검색 항목을 이용하십시오.',

    'LBL_ADD_DASHLETS' => 'SuiteCRM 대시릿 추가',
    'LBL_WEBSITE_TITLE' => '웹사이트',
    'LBL_RSS_TITLE' => '뉴스 피드',
    'LBL_CLOSE_DASHLETS' => '종료',
    'LBL_OPTIONS' => '선택항목',
    // dashlet search fields
    'LBL_TODAY' => '오늘',
    'LBL_YESTERDAY' => '어제',
    'LBL_TOMORROW' => '내일',
    'LBL_NEXT_WEEK' => '다음주',
    'LBL_LAST_7_DAYS' => '지난 7일',
    'LBL_NEXT_7_DAYS' => '다음 7일',
    'LBL_LAST_MONTH' => '지난 달',
    'LBL_NEXT_MONTH' => '다음달',
    'LBL_LAST_YEAR' => '작년',
    'LBL_NEXT_YEAR' => '다음해',
    'LBL_LAST_30_DAYS' => '지난 30일',
    'LBL_NEXT_30_DAYS' => '다음 30일',
    'LBL_THIS_MONTH' => '이번 달',
    'LBL_THIS_YEAR' => '올해',

    'LBL_MODULES' => '모듈목록',
    'LBL_CHARTS' => '챠트',
    'LBL_TOOLS' => '도구목록',
    'LBL_WEB' => '웹',
    'LBL_SEARCH_RESULTS' => '검색된 결과',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => '모듈 보기',
        'Portal' => '포탈',
        'Charts' => '챠트',
        'Tools' => '도구목록',
        'Miscellaneous' => '기타 목록'
    ),
    'LBL_ADDING_DASHLET' => 'SuiteCRM 대시릿 추가중 ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM 대시릿이 추가되었습니다.',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'SuiteCRM Dashlet 을 제거하시겠습니까?',
    'LBL_REMOVING_DASHLET' => 'SuiteCRM 대시릿 제거중 ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet 제거 되었습니다.',
    'LBL_DASHLET_CONFIGURE_GENERAL' => '일반',
    'LBL_DASHLET_CONFIGURE_FILTERS' => '필터',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '내 아이템만',
    'LBL_DASHLET_CONFIGURE_TITLE' => '제목',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '전시 줄',

    'LBL_DASHLET_DELETE' => 'SuiteCRM 대시릿 삭제',
    'LBL_DASHLET_REFRESH' => 'SuiteCRM 대시릿 새로고침',
    'LBL_DASHLET_EDIT' => 'SuiteCRM 대시릿 편집하기',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My SuiteCRM',
    'LBL_CLOSE_SITEMAP' => '종료',

    'LBL_SEARCH' => '검색',
    'LBL_CLEAR' => '지우기',

    'LBL_BASIC_CHARTS' => '기본 도표목록',

    'LBL_DASHLET_SEARCH' => 'SuiteCRM 대시릿 찾기',

//ABOUT page
    'LBL_VERSION' => '버전',
    'LBL_BUILD' => '만들기',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM Inc에 의해 개발된 세계 최고의 판매부 자동 어플리케이션',

    'LBL_DASHLET_TITLE' => '내 사이트',
    'LBL_DASHLET_OPT_TITLE' => '제목',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => '웹사이트 위치',
    'LBL_DASHLET_OPT_HEIGHT' => '대시릿 높이 (픽셀)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM 뉴스',
    'LBL_DASHLET_DISCOVER_SUITE' => 'SuiteCRM 발견하기',
    'LBL_BASIC_SEARCH' => '빠른 필터' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => '고급 필터' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => '모듈목록',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => '전체 텍스트 검색',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => '알림',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => '프로필',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => '빠른 신규 추가',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Welcome to SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'About SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE and Reschedule modules by SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => '모든 재발 편집',
    'LBL_REMOVE_ALL_RECURRENCES' => '모든 재발 삭제',
    'LBL_CONFIRM_REMOVE' => '이 기록을 삭제하시겠습니까?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => '저장',
    'LBL_DELETE_BUTTON' => '삭제',
    'LBL_APPLY_BUTTON' => '적용',
    'LBL_SEND_INVITES' => '초대메일송신',
    'LBL_CANCEL_BUTTON' => '취소',
    'LBL_CLOSE_BUTTON' => '종료',

    'LBL_CREATE_NEW_RECORD' => '활동 만들기',
    'LBL_CREATE_CALL' => '콜스케쥴작성',
    'LBL_CREATE_MEETING' => '미팅스케쥴작성',

    'LBL_GENERAL_TAB' => '세부사항',
    'LBL_PARTICIPANTS_TAB' => '참석자',
    'LBL_REPEAT_TAB' => '레퍼런스',

    'LBL_REPEAT_TYPE' => '반복',
    'LBL_REPEAT_INTERVAL' => '모든',
    'LBL_REPEAT_END' => '최후',
    'LBL_REPEAT_END_AFTER' => '이후',
    'LBL_REPEAT_OCCURRENCES' => '재발',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => '시간:',
    'LBL_REPEAT_UNTIL' => '~할 때까지 반복',
    'LBL_REPEAT_COUNT' => '재발의 수',
    'LBL_REPEAT_LIMIT_ERROR' => '$limit 개 이상의 일정생성이 요청되었습니다.',

    //Events
    'LNK_EVENT' => '이벤트',
    'LNK_EVENT_VIEW' => '이벤트 보기',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => '제목: ',
    'LBL_HOUR_ABBREV' => '시간',
    'LBL_HOURS_ABBREV' => '시간',
    'LBL_MINSS_ABBREV' => '분',
    'LBL_LOCATION' => '장소:',
    'LBL_STATUS' => '상태:',
    'LBL_DESCRIPTION' => '상세: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => '검색중 오류가 발생했습니다. 검색어나 검색어 형식이 올바르지 않습니다.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => '검색된 결과가 없습니다. 검색조건을 변경해 보시기 바랍니다.',

    // Portal Labels
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',
    'LBL_CREATE_PORTAL_USER_FAILED' => '포털 사용자를 생성 하지 못했습니다.',
    'LBL_ENABLE_PORTAL_USER_FAILED' => '포털 사용자를 활성화 하지 못했습니다.',
    'LBL_DISABLE_PORTAL_USER_FAILED' => '포탈 사용자 비활성화 실패',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => '포털 사용자를 생성',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => '포털 사용자 활성화',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => '포털 사용자 비활성화',

    'LNK_TASK_VIEW' => '업무 보기',
);
