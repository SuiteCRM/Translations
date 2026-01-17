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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => '고급',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 통화 코드',
    'DEFAULT_CURRENCY_NAME' => '통화 이름',
    'DEFAULT_CURRENCY_SYMBOL' => '통화 기호',
    'DEFAULT_DATE_FORMAT' => '기본 날짜 형식',
    'DEFAULT_DECIMAL_SEP' => '소수점 기호',
    'DEFAULT_LANGUAGE' => '기본 언어',
    'DEFAULT_SYSTEM_SETTINGS' => '사용자 인터페이스',
    'DEFAULT_THEME' => '초기설정 테마',
    'DEFAULT_TIME_FORMAT' => '기본 시간 형식',

    'DISPLAY_RESPONSE_TIME' => '서버 응답 시간 표시',

    'IMAGES' => '로고',
    'LBL_ALLOW_USER_TABS' => '사용자가 탭숨김 허용',
    'LBL_CONFIGURE_SETTINGS_TITLE' => '시스템 설정',
    'LBL_LOGVIEW' => '로그 보기',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP 인증 사용?',
    'LBL_MAIL_SMTPPASS' => 'SMTP 비밀 번호:',
    'LBL_MAIL_SMTPPORT' => 'SMTP 포트:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP 서버:',
    'LBL_MAIL_SMTPUSER' => 'SMTP 유저명:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP 서버 사양',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '이메일 공급자를 선택하십시오.',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! 메일 비밀번호',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! 메일 ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail 비밀번호:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail 이메일 주소:',
    'LBL_EXCHANGE_SMTPPASS' => '비밀번호 교환',
    'LBL_EXCHANGE_SMTPUSER' => '사용자명 교환',
    'LBL_EXCHANGE_SMTPPORT' => '서버 포트 교환',
    'LBL_EXCHANGE_SMTPSERVER' => '서버 교환',
    'LBL_ALLOW_DEFAULT_SELECTION' => '사용자가 보내는 이메일 계정을 사용하도록 허용:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '이 옵션을 선택하면 모든 사용자으로의 시스템 알림 및 경고를 보내는 데 사용 되는 메일 계정을 단일 메일계정을 사용합니다
이 옵션을 선택 하지 않을 경우는 사용자의 메일 계정을 사용하여 알림 및 경고를 보냅니다',
    'LBL_MAILMERGE' => '메일 병합',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => '최소 대시릿 자동 새로 고침 간격',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => '이것은 Dashlet 자동 재생 선택을 위한 최소가치 입니다. 취소로 설정하면  전체 Dashlet 자동 재생 기능을 중지합니다.',
    'LBL_MODULE_FAVICON' => '모듈 아이콘을 Favicon으로 표시',
    'LBL_MODULE_FAVICON_HELP' => '아이콘 모듈이 있다면 이를 브라우져 탭의 테마 즐져찾기 대신의 즐겨찾기 아이콘으로 사용하십시오.',
    'LBL_MODULE_NAME' => '시스템 설정',
    'LBL_MODULE_ID' => '구성자',
    'LBL_MODULE_TITLE' => '사용자 인터페이스',
    'LBL_NOTIFY_FROMADDRESS' => '"From" 주소:',
    'LBL_NOTIFY_SUBJECT' => '이메일 제목',

    'LBL_PROXY_AUTH' => '인증서',
    'LBL_PROXY_HOST' => '프록시 호스트',
    'LBL_PROXY_ON_DESC' => '대리 서버 주소와 인증서 설정 형성',
    'LBL_PROXY_ON' => '대리 서버를 이용하시겠습니까?',
    'LBL_PROXY_PASSWORD' => '비밀번호:',
    'LBL_PROXY_PORT' => '포트',
    'LBL_PROXY_TITLE' => '프록시 설정',
    'LBL_PROXY_USERNAME' => '사용자 이름',
    'LBL_RESTORE_BUTTON_LABEL' => '재 저장',
    'LBL_SYSTEM_SETTINGS' => '시스템 설정',
    'LBL_USE_REAL_NAMES' => '전체 이름목록 보여주기',
    'LBL_USE_REAL_NAMES_DESC' => '배정 필드의 사용자명 대신 사용자의 전체 이름을 전시합니다.',
    'LBL_DISALBE_CONVERT_LEAD' => '전환된 주 예비고객의 활동을 중지합니다.',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => '리드가 이미 전환 되었다면, 이 항목의 적용은 전환된 리드 활동을 제거합니다.',
    'LBL_ENABLE_ACTION_MENU' => '메뉴안의 활동 전시',
    'LBL_ENABLE_ACTION_MENU_DESC' => '세부사항 보기와 내려보기 메뉴안의 하위패널 액션을 선택합니다. 선택을 취소하면 이는 별개의 버튼을 나타냅니다.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => '페이지 당 리스트 수',
    'LIST_ENTRIES_PER_SUBPANEL' => '페이지당 서브패널 수',
    'LOG_MEMORY_USAGE' => '로그 메모리 사용',
    'LOG_SLOW_QUERIES' => '느린 쿼리 로그',
    'CURRENT_LOGO' => '현재 로고',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => '로고 선택',
    'NEW_LOGO_HELP' => '이미지 파일 포맷은 .png 또는 .jpg로 할 수 있습니다. 최대 높이는 170px, 최대 너비는 450px입니다. 이것보다 크게 올리면 최대 사이즈에 맞게 수정될 것입니다.',
    'NEW_LOGO_HELP_NO_SPACE' => '이미지 파일 포맷은 .png 또는 .jpg로 할 수 있습니다. 최대 높이는 170px, 최대 너비는 450px입니다. 이것보다 크게 올리면 최대 사이즈에 맞게 수정될 것입니다.',
    'SLOW_QUERY_TIME_MSEC' => '느린 문의시간 기준점',
    'STACK_TRACE_ERRORS' => '오류더미 추적자취 보이기',
    'UPLOAD_MAX_SIZE' => '최대 전송 크기',
    'VERIFY_CLIENT_IP' => '사용자 IP 주소 인증',
    'LOCK_HOMEPAGE' => '유저가 홈페이지 레이아웃 수정하는 것을 금지',
    'LOCK_SUBPANELS' => '유저가 서브패널 레이아웃 수정하는 것을 금지',
    'MAX_DASHLETS' => '홈페이지의 최대 SuiteCRM 대시릿 갯수',
    'SYSTEM_NAME' => '시스템명:',
    'SYSTEM_NAME_WIZARD' => '이름:',
    'SYSTEM_NAME_HELP' => '이는 귀하의 브라우저 제목칸에 나타납니다.',
    'LBL_LDAP_TITLE' => 'LDAP 인증 지원',
    'LBL_LDAP_ENABLE' => 'LDAP작동',
    'LBL_LDAP_SERVER_HOSTNAME' => '서버',
    'LBL_LDAP_SERVER_PORT' => '포트 번호',
    'LBL_LDAP_ADMIN_USER' => '사용자 이름:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'LDAP 사용자를 검색 하는 데 사용. 이것은 완전한 자격요건이 갖추어져야 합니다.',
    'LBL_LDAP_ADMIN_PASSWORD' => '비밀번호',
    'LBL_LDAP_AUTHENTICATION' => '인증서',
    'LBL_LDAP_AUTHENTICATION_DESC' => '특정 사용자 자격 증명을 사용하여 LDAP 서버에 바인딩합니다. 만약 제공되지 않을시 익명으로 바인됭 됩니다.',
    'LBL_LDAP_AUTO_CREATE_USERS' => '신규 사용자 자동 생성',
    'LBL_LDAP_USER_DN' => '사용자 DN:',
    'LBL_LDAP_GROUP_DN' => '그룹 DN:',
    'LBL_LDAP_GROUP_DN_DESC' => '예: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => '사용자 필터',
    'LBL_LDAP_GROUP_MEMBERSHIP' => '그룹 멤버쉽',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => '유저는 반드시 특정 그룹에 소속되어 있어야 합니다.',
    'LBL_LDAP_GROUP_USER_ATTR' => '유저 속성:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => '특정 그룹에 속해있는지 확인하기 위한 식별자 예:<em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => '유저 속성을 검색하기 위한 그룹 속성 예:<em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => '그룹 특성',
    'LBL_LDAP_USER_FILTER_DESC' => '사용자 인증시 적용되는 추가 필터 params',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => '로그인 특성',
    'LBL_LDAP_BIND_ATTRIBUTE' => '결합 특성',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => '예시: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => '그룹 이름:',
    'LBL_LDAP_GROUP_NAME_DESC' => '예 <em>cn=sugarcrm</em>',
    'LBL_LDAP_USER_DN_DESC' => '예: <em>ou=people,dc=example,dc=com</eM>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => '확인된 사용자가 존재하지 않으면 SuiteCRM에 새로 만들어 집니다.',
    'LBL_LDAP_ENC_KEY' => '암호키',
    'DEVELOPER_MODE' => '개발자 모드',

    'SHOW_DOWNLOADS_TAB' => '다운로드 탭 전시',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'LDAP사용시 SOAP 인증',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt 확장은 반드시 귀하의 php.ini 파일에서 작동되어야 합니다.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => '전체',
    'LBL_MARK_POINT' => '표시점',
    'LBL_NEXT_' => '다음>>',
    'LBL_REFRESH_FROM_MARK' => '표시로부터 재생',
    'LBL_SEARCH' => '검색:',
    'LBL_REG_EXP' => '정규표현식:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => '어디서 로그인 시작인지 표시',
    'LBL_DISPLAYING_LOG' => '로그 표시',
    'LBL_YOUR_PROCESS_ID' => '프로세스 ID',
    'LBL_YOUR_IP_ADDRESS' => '당신의 IP 주소는',
    'LBL_IT_WILL_BE_IGNORED' => '무시됩니다.',
    'LBL_LOG_NOT_CHANGED' => '로그는 변경 되지 않았습니다.',
    'LBL_ALERT_JPG_IMAGE' => '이미지 파일 형식은 반드시 JPEG여야 합니다. 파일 확장.jpg.과 새 파일 전송합니다.',
    'LBL_ALERT_TYPE_IMAGE' => '이미지 파일 형식은 반드시 JPEG 또는 PNG여야 합니다. 파일 확장.jpg.과 새 파일 전송합니다',
    'LBL_ALERT_SIZE_RATIO' => '이미지의 가로세로비는 반드시 1:1 과 10:1 사이여야 합니다. 이미지는 크기가 조정됩니다.',
    'ERR_ALERT_FILE_UPLOAD' => '이미지 전송중 오류',
    'LBL_LOGGER' => '로거 설정',
    'LBL_LOGGER_FILENAME' => '로그 파일 이름',
    'LBL_LOGGER_FILE_EXTENSION' => '확장',
    'LBL_LOGGER_MAX_LOG_SIZE' => '최대 로그 크기',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => '기본 날짜 형식',
    'LBL_LOGGER_LOG_LEVEL' => '로그 레벨',
    'LBL_LEAD_CONV_OPTION' => '리드 변환 옵션',
    'LEAD_CONV_OPT_HELP' => "전환중 사용자에 의해 선택된 주 예비고객 활동 새 기록복사본을 새로 만들고 연결시킵니다.. 복사본은 선택된 각각의 기록에 맞게 새로 만들어지집니다.",
    'LBL_CONFIG_AJAX' => 'AJAX 사용자 인터페이스 구성',
    'LBL_CONFIG_AJAX_DESC' => '특정 모듈을 위한 AJAX UI 사용을 작동하거나 정지시키기',
    'LBL_LOGGER_MAX_LOGS' => '접속 허용 최대 번호(진행전)',
    'LBL_LOGGER_FILENAME_SUFFIX' => '파일 이름에 추가',
    'LBL_VCAL_PERIOD' => 'vCal 업데이트 기간',
    'LBL_IMPORT_MAX_RECORDS' => '가져오기-최대 허용 줄번호',
    'LBL_IMPORT_MAX_RECORDS_HELP' => '가져오기 파일이 허용하는 줄의 수를 명시하십시오. 만약 줄의 번호가 이 번호를 초과하면 사용자에 알려집니다 만약 번호가 입력되지 않으면 줄의 수는 무제한 허용됩니다.',
    'vCAL_HELP' => '무료정보 전화와 회의가 발표되는 현재 날짜에 앞서 달의 숫자를 결정하려면 이 설정을 사용하십시오. 무료 발표기능을 없애려면 0을 입력하시면 됩니다. 최소 1달에서 최대 12달까지 허용됩니다.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => '당신의 시나리오',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => '구성된 시나리오 없음',
    'LBL_WIZARD_SCENARIOS_DESC' => '설치에 적합한 시나리오를 선택하세요. 설치 이후 변경 가능합니다.',

    'LBL_WIZARD_TITLE' => 'SuiteCRM 관리 마법사',
    'LBL_WIZARD_WELCOME_TAB' => '환영합니다:',
    'LBL_WIZARD_WELCOME_TITLE' => 'SuiteCRM에 오신것을 환영합니다.',
    'LBL_WIZARD_WELCOME' => '상표만들기와 SuiteCRM 형성을 위해 다음 버튼을 클릭하십시오. SuiteCRM형성을 나중에 하려면 생략 버튼을 클릭하십시오.',
    'LBL_WIZARD_NEXT_BUTTON' => '다음',
    'LBL_WIZARD_BACK_BUTTON' => '뒤로',
    'LBL_WIZARD_SKIP_BUTTON' => '건너뛰기',
    'LBL_WIZARD_CONTINUE_BUTTON' => '계속합니다.',
    'LBL_WIZARD_FINISH_TITLE' => '기본 시스템 형성이 완료되었습니다.',
    'LBL_WIZARD_SYSTEM_TITLE' => '상표만들기',
    'LBL_WIZARD_SYSTEM_DESC' => '귀하의 SuiteCRM 상표를 위한 조직명과 로고를 입력하십시오.',
    'LBL_WIZARD_LOCALE_DESC' => '귀하의 지리적 위치에 따라 원하는 SuiteCRM에서의 데이타 전시를 지정해 주십시오. 이곳에 입력하신 설정은 초기설정이 됩니다. 사용자는 각자 선호하는 설정을 할수 있습니다.',
    'LBL_WIZARD_SMTP_DESC' => '배정알림이나 사용자 새 비밀번호 전송에 사용될 이메일 계정을 입력하십시오. 사용자는 SuiteCRM에서 지정한 계정으로 이메일을 수신하게 됩니다.',
    'LBL_LOADING' => '로드 중...' /*for 508 compliance fix*/,
    'LBL_DELETE' => '삭제' /*for 508 compliance fix*/,
    'LBL_WELCOME' => '환영합니다:' /*for 508 compliance fix*/,
    'LBL_LOGO' => '로고' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
