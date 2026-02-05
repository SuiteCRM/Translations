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
    'LBL_BASIC_SEARCH' => '빠른 필터',
    'LBL_ADVANCED_SEARCH' => '고급 필터',
    'LBL_BASIC_TYPE' => '기본 유형',
    'LBL_ADVANCED_TYPE' => '고급 유형',
    'LBL_SYSOPTS_2' => '어떤 종류의 데이터베이스가 설치하려고하는 SuiteCRM 사례에 사용될 것입니까?',
    'LBL_SYSOPTS_DB' => '데이터베이스 형식 지정',
    'LBL_SYSOPTS_DB_TITLE' => '데이터베이스 유형',
    'LBL_SYSOPTS_ERRS_TITLE' => '진행하기 전에 다음의 에러들을 수정해주세요',
    'ERR_DB_VERSION_FAILURE' => '데이터베이스 버전을 확인할 수 없습니다.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'SuiteCRM 관리자 사용자의 유저 Id를 입력하십시오. ',
    'ERR_ADMIN_PASS_BLANK' => 'SuiteCRM 관리자 사용자의 암호를 제공 합니다. ',

    'ERR_CHECKSYS' => '호환성검사를 하는 동안 오류가 발견되었습니다. SuiteCRM을 설치하려면 아래의 리스트에따라 수행하시길 바랍니다. 그리고 재확인 버튼을 누르시거나 다시 설치해주시길 바랍니다.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => '찾을 수 없습니다: SuiteCRM 스케줄러는 제한된 기능으로 실행 됩니다.',
    'ERR_CHECKSYS_IMAP' => '찾을 수 없습니다: 인바운드메일과 캠페인(이메일) 은 IMAP 라이브러리가 필요합니다. 어느것도 작동되지 않을 것입니다.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (설정 내용 ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'php.ini 파일에서 M 또는 그 이상으로 설정)',
    'ERR_CHECKSYS_NOT_WRITABLE' => '경고: 쓸 수 없습니다.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => '귀하의 PHP버전은 SuiteCRM에 의해 지원되지 않습니다. SuiteCRM어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 PHP버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다. 귀하의 버전은',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'IIS버전이 SuiteCRM에 지원되지 않습니다. SuiteCRM에 맞는 버전을 설치해야 합니다. ISS버전에 지원되는 릴리즈정보에 호환성매트릭스를 참조하세요. ',
    'ERR_CHECKSYS_FASTCGI' => 'PHP의 FastCGI handler mapping이 되어있지 않음을 확인하였습니다. SuiteCRM 어플리케이션은 이 호환되는 버전의 FastCGI handler mapping설치 및 설정이 필요합니다. 호환되는 버전은 매트릭스에 릴리즈 노트에서 확인하세요. 상세한 내용은<a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> 에서 확인 할 수 있습니다 ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Php.ini file에서 fastcgi.logging값을 0으로 설정해야 IIS/FastCGI sapi 사용하여 최적의 경험을 할 수 있습니다.',
    'LBL_DB_UNAVAILABLE' => '데이터베이스를 사용할 수 없음',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => '데이터베이스 지원을 찾을 수 없습니다. MySQL 또는 MS SQLServer에서 필요한 드라이브를 찾으세요. 당신의 PHP버전에 기반하여,  php.ini file의 확장을 언급할 필요가 없고 확실한 2진법의 파일도 다시 컵파일하면 됩니다. 더 많은 정보를 얻으려면 PHP 매뉴얼을 참조해주세요.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'SuiteCRM 응용프로그램에 필요한  XML Parser Libraries에 연관된 기능들을 찾을 수 없습니다.  당신의 PHP버전에 기반하여,  php.ini file의 확장을 언급할 필요가 없고 확실한 2진법의 파일도 다시 컵파일하면 됩니다. 더 많은 정보를 얻으려면 PHP 매뉴얼을 참조해주세요.',
    'ERR_CHECKSYS_MBSTRING' => 'SuiteCRM에 필요한 Multibyte Strings PHP확장(mbstring) 에 연관된 기능을 발견하지 못했습니다. 일반적으로 mbstring 모듈은 PHP에 피폴트가 불가능하고 PHP 바이너리가 빌드될 때 mbstring을 활성화할 수 있습니다. mbstring 지원을 실행하는 방법에 대해 더 많은 정보를 얻으려면 PHP 매뉴얼을 확인해보세요.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => '구성 오버라이드',
    'ERR_CHECKSYS_SAFE_MODE' => '안전모드가 켜있습니다.(php,ini에서 해제할 수 있습니다.)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib 지원을 찾을 수 없습니다. SuiteCRM은 zlib압축과 함께 엄청난 이익을 가져올 것입니다.',
    'ERR_CHECKSYS_ZIP' => 'ZIP 지원 찾을 수 없습니다: SuiteCRM은 압축된 파일을 처리 하려면 ZIP 지원 필요합니다.',
    'ERR_CHECKSYS_PCRE' => 'PCRE 라이브러리를 찾을 수 없습니다: SuiteCRM은 패턴매치의 정규 표현의 스타일을 진행하려면 PCRE library가 필요합니다.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE 라이브러리 버전: SuiteCRM은 패턴매치의 정규 표현의 펄 스타일을 진행하려면 PCRE 라이브러리 7.0 이상이 필요합니다.',
    'ERR_DB_ADMIN' => '제공된 데이터베이스 관리자 아이디, 패스워드가 잘못되었습니다. 정확한 아이디와 비밀번호를 눌러주세요.(Error: ',
    'ERR_DB_ADMIN_MSSQL' => '제공된 데이터베이스 관리자 아이디, 비밀번호가 유효하지 않습니다. 정확한 아이디와 비밀번호를 입력해주세요.',
    'ERR_DB_EXISTS_NOT' => '지정된 데이터베이스가 존재하지 않습니다.',
    'ERR_DB_EXISTS_WITH_CONFIG' => '구성 데이터가 있는 데이터베이스가 이미 존재합니다. 선택한 데이터베이스로 설치를 실행하시려면, 설치를 다시 실행하시고 "기존의 SuiteCRM 테이블을 드롭하고 재생성합니까?" 를 선택해 주십시오. 업그레이드를 하려면, 관리 콘솔의 업그레이드 마법사를 사용하십시오. <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">여기</a> 에 있는 업그레이드 문서를 참조하십시오.',
    'ERR_DB_EXISTS' => '제공된 데이터베이스 이름이 이미 존재합니다. 같은 이름을 사용할 수 없습니다.',
    'ERR_DB_EXISTS_PROCEED' => '제공된 데이터베이스 이름이 이미 존재합니다. 뒤로가기 버튼을 누르고 새로운 데이터베이스 이름을 선택하세요. 다음 버튼과 계속 버튼을 눌러주세요. 다음과 계속버튼을 누르면 데이터베이스에 있는 모든 테이블이 삭제됩니다.',
    'ERR_DB_HOSTNAME' => '호스트 이름은 빈칸이 있으면 안됩니다.',
    'ERR_DB_INVALID' => '잘못된 데이터베이스입니다.',
    'ERR_DB_LOGIN_FAILURE' => '제공된 데이터베이스 호스트, 아이디, 비밀번호는 잘못되었습니다. 그리고 정확한 호스트, 아이디, 비밀번호를 눌러주세요.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => '제공된 데이터베이스 호스트, 아이디, 비밀번호는 잘못되었습니다. 그리고 정확한 호스트, 아이디, 비밀번호를 눌러주세요.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => '제공된 데이터베이스 호스트, 아이디, 비밀번호는 잘못되었습니다. 그리고 정확한 호스트, 아이디, 비밀번호를 눌러주세요.',
    'ERR_DB_MYSQL_VERSION' => 'MySQL 버전(%s) 이 SuiteCRM에 지원되지 않습니다.  SuiteCRM에 맞는 버전을 설치해주세요. MySQL에 맞는 릴리즈정보에 호환성 매트릭스를 참조하세요.',
    'ERR_DB_NAME' => '데이터베이스 이름은 비워둘 수 없습니다.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "데이터베이스 이름은 ' \\', '/', 또는 '.'를 사용할 수 없습니다.",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "데이터베이스 아이디는 숫자,'#', or '@'로 시작할 수 없고, 빈칸, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'를 포함할 수 없습니다.",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "아이디는 오직 글자, 숫자, '#', '_' or '$'로 만들어야 합니다.",
    'ERR_DB_PASSWORD' => '비밀번호가 맞지 않습니다. 알맞은 비밀번호를 눌러주세요.',
    'ERR_DB_PRIV_USER' => '데이터베이스 사용자 아이드를 제공합니다.  데이터베이스에 처음 접속할때 필요합니다.',
    'ERR_DB_USER_EXISTS' => 'SuiteCRM 에 맞는 아이디가 이미 존재합니다. 새로운 아이디를 입력하세요.',
    'ERR_DB_USER' => 'SuiteCRM 데이터베이스 관리자 아이디를 입력하세요.',
    'ERR_DBCONF_VALIDATION' => '진행하기 전에 다음의 에러들을 수정해주세요',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'SuiteCRM 비밀번호가 틀립니다. 알맞은 비밀번호를 눌러주세요.',
    'ERR_ERROR_GENERAL' => '오류가 발생했습니다.',
    'ERR_LANG_CANNOT_DELETE_FILE' => '삭제할 수 없는 파일: ',
    'ERR_LANG_MISSING_FILE' => '파일을 찾을 수 없습니다: ',
    'ERR_LANG_NO_LANG_FILE' => 'Include/language 안에 언어 팩이 없습니다: ',
    'ERR_LANG_UPLOAD_1' => '업로드에 문제가 있었습니다.  다시 시도 하십시오.',
    'ERR_LANG_UPLOAD_2' => '언어 팩에는 ZIP 보관 파일 이어야합니다.',
    'ERR_LANG_UPLOAD_3' => '임시 파일을 PHP 업그레이드 디렉토리에 이동 할 수 없습니다',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => '제공된 로그 디렉토리가 유요한 디렉토리가 아닙니다.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '제공된 로그 디렉토리가 쓸 수 있는 디렉토리가 아닙니다.',
    'ERR_NO_DIRECT_SCRIPT' => '직접 스크립트를 처리할 수 없습니다.',
    'ERR_NO_SINGLE_QUOTE' => '작은 따옴표를 사용할 수 없습니다',
    'ERR_PASSWORD_MISMATCH' => 'SuiteCRM 관리자 비밀번호가 틀립니다. 비밀번호 필드에서 같은 비밀번호를 재입력해주세요.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Config.php파일을 읽을 수 없습니다.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Config.php파일을 수동적으로 설치 및  config.php 파일  아래에 구성정보를 붙여넣기하여 설치를 할 수 있습니다. 그러나 다음 단계를 진행하기 전에 config,php파일을 만들어야 합니다.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Config.php file 생성을 기억하십니까?',
    'ERR_PERFORM_CONFIG_PHP_4' => '경고: config.php을 읽을 수 없습니다. 존재하는지 확인해주세요.',
    'ERR_PERFORM_HTACCESS_1' => '쓸 수 없습니다. ',
    'ERR_PERFORM_HTACCESS_2' => ' 파일.',
    'ERR_PERFORM_HTACCESS_3' => '브라우저를 통해 접근할 수 있는 로그파일을 보안하려면 .htaccess 파일을 고르 디렉토리에 만들어야 합니다.',
    'ERR_PERFORM_NO_TCPIP' => '인터넷 접속을 탐지하지 못했습니다. 연결할때 <a href="https://www.suitecrm.com/">를 방문하여 SuiteCRM</a>를 등록해주세요. 귀하의 회사가 어떻게 SuiteCRM를 사용하는지 알면, 우리는 언제나 귀하의 회사가 원하는 어플리케이션이 될 수 있게 제공하겠습니다.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '제공된 세션디렉토리는 유효한 디렉토리가 아닙니다.',
    'ERR_SESSION_DIRECTORY' => '제공된 세션디렉토리는 쓸수 있는 디렉토리가 아닙니다.',
    'ERR_SESSION_PATH' => '당신의 것을 명시하려면 세션 경로가 필요합니다.',
    'ERR_SI_NO_CONFIG' => '문서 루트에 config_si.php를 포함하지 않았거나, config.php안에 $sugar_config_si를 정의하지 않았습니다.',
    'ERR_SITE_GUID' => '당신의 것을 명시하려면 어플리케이션 아이디가 필요합니다.',
    'ERROR_SPRITE_SUPPORT' => "현재 GD라이브러리를 찾을 수 없어서, CSS Sprite 기능을 사용할 수 없습니다.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => '업로드 파일 크기',
    'ERR_URL_BLANK' => 'SuiteCRM에 대한 기본 URL을 제공합니다.',
    'ERR_UW_NO_UPDATE_RECORD' => '다음 설치된 기록을 찾을 수 없습니다:',
    'ERROR_MANIFEST_TYPE' => '확장파일은 패키지타입을 반드시 포함하여야합니다.',
    'ERROR_PACKAGE_TYPE' => '현재 파일이 확인되지 않은 패키지형식을 포함하고 있습니다.',
    'ERROR_VERSION_INCOMPATIBLE' => '전송된 파일이 현재 버전과 호환되지 않습니다.',

    'LBL_BACK' => '이전',
    'LBL_CANCEL' => '취소',
    'LBL_ACCEPT' => '승인',
    'LBL_CHECKSYS_CACHE' => '쓸 수 있는 캐시 하위 디렉토리',
    'LBL_DROP_DB_CONFIRM' => '제공된 데이터베이스 이름은 이미 존재합니다. 취소버튼을 누르고 새 데이터베이스 이름을 선택하거나, 동의 버튼을 눌러 주세요. 데이터베이스에 존재하는 모든 테이블은 삭제될 것입니다. 테이블 및 기존 데이터 모두 삭제될 것입니다.',
    'LBL_CHECKSYS_COMPONENT' => '구성 요소',
    'LBL_CHECKSYS_CONFIG' => '쓸 수 있는 SuiteCRM 구성 파일 (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL 모듈',
    'LBL_CHECKSYS_CUSTOM' => '쓸 수 있는 사용자 지정 디렉터리',
    'LBL_CHECKSYS_DATA' => '쓸 수 있는 데이터 하위 디렉토리',
    'LBL_CHECKSYS_IMAP' => 'IMAP 모듈',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings 모듈',
    'LBL_CHECKSYS_MEM_OK' => '확인 (제한 없음)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => '확인 (무제한)',
    'LBL_CHECKSYS_MEM' => 'PHP 메모리 제한',
    'LBL_CHECKSYS_MODULE' => '쓸 수 있는 하위 디렉터리 및 파일 모듈',
    'LBL_CHECKSYS_NOT_AVAILABLE' => '사용할 수 없음',
    'LBL_CHECKSYS_OK' => '확인',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => '확인(버전 ',
    'LBL_CHECKSYS_PHPVER' => 'PHP 버전',
    'LBL_CHECKSYS_IISVER' => 'IIS 버전',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => '다시 확인',
    'LBL_CHECKSYS_STATUS' => '상태',
    'LBL_CHECKSYS_TITLE' => '시스템 검사 승인',
    'LBL_CHECKSYS_XML' => 'XML 분석',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB 압축 모듈',
    'LBL_CHECKSYS_ZIP' => '우편 처리 모듈',
    'LBL_CHECKSYS_PCRE' => 'PCRE 라이브러리',
    'LBL_CHECKSYS_FIX_FILES' => '다음과 같은 파일 또는 디렉터리를 계속 하기 전에 수정 하시기 바랍니다.',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => '진행하기 전에 모듈 디텍토리와 파일을 수정해주세요.',
    'LBL_CHECKSYS_UPLOAD' => '쓸 수 있는 업로드 디렉토리',
    'LBL_CLOSE' => '닫기',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => '생성됨',
    'LBL_CONFIRM_DB_TYPE' => '데이터베이스 유형',
    'LBL_CONFIRM_NOT' => 'not',
    'LBL_CONFIRM_TITLE' => '설정 확인',
    'LBL_CONFIRM_WILL' => 'will',
    'LBL_DBCONF_DB_DROP' => '테이블 삭제',
    'LBL_DBCONF_DB_NAME' => '데이터베이스 명',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM 비밀번호',
    'LBL_DBCONF_DB_PASSWORD2' => 'SuiteCRM 비밀번호를 다시 입력해주세요.',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM 아이디',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM 아이디',
    'LBL_DBCONF_DB_ADMIN_USER' => '데이터베이스 관리자 아이디',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => '데이터베이스 관리자 비밀번호',
    'LBL_DBCONF_COLLATION' => '대조',
    'LBL_DBCONF_CHARSET' => '문자 집합',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => '고급 데이터베이스 설정',
    'LBL_DBCONF_DEMO_DATA' => '데모 데이터를 사용하시겠습니까?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => '데모 데이터를 선택해 주세요.',
    'LBL_DBCONF_HOST_NAME' => '호스트 명',
    'LBL_DBCONF_HOST_INSTANCE' => '호스트 인스턴스',
    'LBL_DBCONFIG_SECURITY' => '보안을 위해 SuiteCRM 데이터베이스에 연결 하는 전용 데이터베이스 사용자를 지정할 수 있습니다. 사용자는 SuiteCRM 데이터베이스에 있는 데이터를 쓰고 업데이트하고 복원할 수 있습니다. 사용자는 위에 명시된 데이터베이스관리자가 될 수 있고 새로운 또는 존재하는 데이터베이스 사용장 정보를 제공할 수 있습니다.',
    'LBL_DBCONFIG_PROVIDE_DD' => '기존 사용자에게 제공합니다.',
    'LBL_DBCONFIG_CREATE_DD' => '사용자 생성을 정의합니다.',
    'LBL_DBCONFIG_SAME_DD' => '관리자 사용자와 동일합니다.',
    'LBL_DBCONF_TITLE' => '데이터베이스 구성',
    'LBL_DBCONF_TITLE_NAME' => '데이터베이스 이름을 제공',
    'LBL_DBCONF_TITLE_USER_INFO' => '데이터베이스 사용자 정보 제공',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => '비밀번호:',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => '프로그램이 이미 한번 설치되었습니다. 안전 조치로써 두번째 설치는 실행하지 않았습니다. 재설치가 확실하다면, config.php file로 가서 \'installer_locked\' 변수 값을 \'false;로 바꿔주세요.',
    'LBL_DISABLED_HELP_1' => '철치에 대한 도움이 피룡하면 SuiteCRM을 방문해주세요.',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM 설치가 비활성화 되었습니다.',
    'LBL_HELP' => '도움말',
    'LBL_INSTALL' => '설치',
    'LBL_INSTALL_TYPE_TITLE' => '설치 옵션',
    'LBL_INSTALL_TYPE_SUBTITLE' => '설치 유형을 선택해 주세요.',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>일반적인 설치</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>사용자 정의 설치</b>',
    'LBL_INSTALL_TYPE_MSG2' => '설치하는데 최소한의 정봐만 필요합니다. 새 사용자에게 권합니다.',
    'LBL_INSTALL_TYPE_MSG3' => '설치하는 동안 추가 옵션을 제공합니다. 대부분의 옵션들은 유용합니다. 고급사용자에게 권합니다.',
    'LBL_LANG_1' => '지정된 언어(영어) 가아닌  SuiteCRM에서 다른 언어를 새용하려면 언어 팩에서 설치할 수 있습니다. 마찬가지로 SuiteCRM  어플리케이션에서 언어팩을 설치하고 업로드할 수 있습니다.  이 단계를 넘어가려면 NEXT버튼을 눌러주세요.',
    'LBL_LANG_BUTTON_COMMIT' => '설치',
    'LBL_LANG_BUTTON_REMOVE' => '삭제',
    'LBL_LANG_BUTTON_UNINSTALL' => '설치해제',
    'LBL_LANG_BUTTON_UPLOAD' => '전송',
    'LBL_LANG_NO_PACKS' => '없음',
    'LBL_LANG_PACK_INSTALLED' => '다음의 언어팩이 설치되었습니다. ',
    'LBL_LANG_PACK_READY' => '다음의 언어팩이 설치할 준비가 되었습니다. ',
    'LBL_LANG_SUCCESS' => '언어 팩 성공적으로 업로드 되었습니다.',
    'LBL_LANG_TITLE' => '언어 팩',
    'LBL_LAUNCHING_SILENT_INSTALL' => '지금 SuiteCRM를 설치합니다. 몇분이 걸릴 수 있습니다.',
    'LBL_LANG_UPLOAD' => '언어 팩 업로드',
    'LBL_LICENSE_ACCEPTANCE' => '라이센스 동의',
    'LBL_LICENSE_CHECKING' => '호환성 검사',
    'LBL_LICENSE_CHKENV_HEADER' => '환경 검사',
    'LBL_LICENSE_CHKDB_HEADER' => 'DB 자격 증명을 확인합니다.',
    'LBL_LICENSE_CHECK_PASSED' => '시스템 호환성 검사를 통과 합니다.',
    'LBL_CREATE_CACHE' => '설치 준비중...',
    'LBL_LICENSE_REDIRECT' => '다른 장소로',
    'LBL_LICENSE_I_ACCEPT' => '승인',
    'LBL_LICENSE_PRINTABLE' => ' 인쇄 보기 ',
    'LBL_PRINT_SUMM' => '요약 인쇄',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM 라이센스',

    'LBL_LOCALE_NAME_FIRST' => '종근',
    'LBL_LOCALE_NAME_LAST' => '윤',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => '액션',
    'LBL_ML_DESCRIPTION' => '상세',
    'LBL_ML_INSTALLED' => '설치된 날짜',
    'LBL_ML_NAME' => '이름',
    'LBL_ML_PUBLISHED' => '게시 날짜',
    'LBL_ML_TYPE' => '종류',
    'LBL_ML_UNINSTALLABLE' => '설치 불가능',
    'LBL_ML_VERSION' => '버전',
    'LBL_MSSQL' => 'SQL 서버',
    'LBL_MSSQL2' => 'SQL 서버 (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL 서버(PHP Microsoft SQL 서버 드라이버)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli 확장)',
    'LBL_NEXT' => '다음',
    'LBL_NO' => '아니오',
    'LBL_PERFORM_ADMIN_PASSWORD' => '설정 사이트 관리자 비밀 번호',
    'LBL_PERFORM_CONFIG_PHP' => 'SuiteCRM 구성 파일 만들기',
    'LBL_PERFORM_CREATE_DB_1' => '데이터베이스 만들기 ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>on</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => '데이터베이스 사용자 이름과 비밀번호를 만드는 중...',
    'LBL_PERFORM_CREATE_DEFAULT' => '기본 SuiteCRM 데이터 만들기',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => '기본 스케줄러 작업 만들기',
    'LBL_PERFORM_DEFAULT_USERS' => '기본 사용자 만들기',
    'LBL_PERFORM_DEMO_DATA' => '데모 데이터로 데이터베이스 테이블 채우기(잠시 동안 걸릴 수 있습니다)',
    'LBL_PERFORM_DONE' => '완료<br>',
    'LBL_PERFORM_FINISH' => '종료',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM의 설치 ',
    'LBL_PERFORM_OUTRO_2' => ' 이제 완료 되었습니다!',
    'LBL_PERFORM_OUTRO_3' => '총 시간: ',
    'LBL_PERFORM_OUTRO_4' => ' 초.',
    'LBL_PERFORM_OUTRO_5' => '대략적인 메모리 사용: ',
    'LBL_PERFORM_OUTRO_6' => ' 바이트.',
    'LBL_PERFORM_SUCCESS' => '성공!',
    'LBL_PERFORM_TABLES' => 'SuiteCRM 어플리케이션 데이블, 감사 테이블, 관레 메타데이터 만들기',
    'LBL_PERFORM_TITLE' => '설치 수행',
    'LBL_PRINT' => '인쇄',
    'LBL_REG_CONF_1' => '제품 발표, 교육 뉴스, 특별 행사, 특별이벤트 초청에 필요한 간단한 양식을 작성해 주세요. 우리는 팔거나 빌리거나 공유하거나 제 3자에게 정보를 제공하지 않습니다.',
    'LBL_REG_CONF_3' => '등록해주셔서 감사합니다. SuiteCRM를 시작하려면 끝내기버튼을 눌러주세요. 2단계에서 사용자 이름 "admin\'와 비밀번호가 처음에 필요할 것입니다.',
    'LBL_REG_TITLE' => '등록',

    'LBL_REQUIRED' => '* 필수 필드',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM 응용 프로그램 관리자 아이디',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SuiteCRM 비밀번호를 다시 입력해주세요.',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM 비밀번호',
    'LBL_SITECFG_APP_ID' => '응용 프로그램 ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '섵택하면, 자동적으로 생성된 ID를 제저의 하는 어플리케이션 아이디를 제공 할 수 있습니다. ID는 확실히 SuiteCRM 인스턴스의 세션이 다른 인스턴스에 사용되지 않았습니다. 그르 모두는 같은 어플리케이션 ID를 공유할 것입니다.',
    'LBL_SITECFG_CUSTOM_ID' => '당신만의 어플리케이션 ID를 제공합니다.',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '선택하면, SuiteCRM 로그를 위한 기본 디렉토리를 무시하고 새로운 디렉토리를 지정해야 합니다. 어디에 로그파일이 있건 상관없이, 웹 브라우저를 통한 접속은 .htaccess 를 통한 것보다 제한적일 수 있습니다.',
    'LBL_SITECFG_CUSTOM_LOG' => '사용자 지정 로그 디렉터리를 사용',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '선택하면, SuiteCRM 세션 정보를 저장하는 안전한 폴더를 제공해야 합니다. 공유서버에서 취약하지 않도록 세션데이터를 보호할 수 있습니다.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'SuiteCRM의 사용자 세션 디렉토리 사용',
    'LBL_SITECFG_FIX_ERRORS' => '진행하기 전에 오류를 수정해주세요.',
    'LBL_SITECFG_LOG_DIR' => '로그 디렉터리',
    'LBL_SITECFG_SESSION_PATH' => '세션 디렉토리 경로(쓸 수 있어야 함)',
    'LBL_SITECFG_SITE_SECURITY' => '보안 옵션 선택',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => '선택하면, 시스템은 정기적으로 어플리케이션의 업데이트 버전을 점검할 것입니다.',
    'LBL_SITECFG_SUITE_UP' => '자동으로 업데이트를 체크할까요?',
    'LBL_SITECFG_TITLE' => '사이트 구성',
    'LBL_SITECFG_TITLE2' => '관리 사용자를 식별',
    'LBL_SITECFG_SECURITY_TITLE' => '사이트 보안',
    'LBL_SITECFG_URL' => 'SuiteCRM 인스턴스의 URL',
    'LBL_SITECFG_ANONSTATS' => '익명의 사용 통계를 보낼까요?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '선택하면, SuiteCRM은 SuiteCRM Inc. 로 새로운 버전의 시스템을 설치할 때마다익명의 통계를 보낼 것입니다. 이 정보는 얼마다 어플리키이션이 잘 사용되는지 그리고 제품을 발전시킬수 있는 가이드를 이해하는데 도움이 될 것입니다.',
    'LBL_SITECFG_URL_MSG' => '설치 후 SuiteCRM 인스턴스에 접속하는데 사용되는 URL을 입력하세요. URL은 SuiteCRM 어플리케이션 페이지에서 URL의 기초로 사용될 것입니다. URLs는 반드시 웹 서버, 컴퓨터 이름, 또는 IP주소를 포함해야 합니다.',
    'LBL_SITECFG_SYS_NAME_MSG' => '시스템 이름이 입력하세요. 이 이름은 SuiteCRM을 방문할 때, 브라우저 제목에 표시될 것입니다.',
    'LBL_SITECFG_PASSWORD_MSG' => '설치후, SuiteCRM 인스턴스에 로그인 하려면 SuiteCRM 관리자 아이디(기본 아이디 = 관리자) 를 사용해야 합니다. 관리자 비밀번호를 눌러주세요. 비밀번호는 초기 로그인 후 변경할 수 있습니다. 또한  제공하는 기본값을 사용하여, 다른 관리자이름도 입력해야 합니다.',
    'LBL_SITECFG_COLLATION_MSG' => '시스템에 대한 데이터 정렬 (분류) 설정을 선택 합니다. 이 설정을 당신이 사용 하는 특정 언어와 테이블을 생성 합니다. 당신의 언어가 특별한 세팅을 요구하지 않으면 기본 값을 사용하세요.',
    'LBL_SPRITE_SUPPORT' => '스프라이트 지원',
    'LBL_SYSTEM_CREDS' => '시스템 자격 증명',
    'LBL_SYSTEM_ENV' => '시스템 환경',
    'LBL_SHOW_PASS' => '비밀번호 보이기',
    'LBL_HIDE_PASS' => '암호 숨기기',
    'LBL_HIDDEN' => '<i>(숨김)</i>',
    'LBL_STEP1' => '2-1: 사전 설치 요구 사항',
    'LBL_STEP2' => '2-1: 구성',
    'LBL_STEP' => '단계',
    'LBL_TITLE_WELCOME' => 'SuiteCRM에 오신 것을 환영 합니다. ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => '설치 준비가 되셨나요?',
    'REQUIRED_SYS_COMP' => '필수 시스템 구성 요소',
    'REQUIRED_SYS_COMP_MSG' =>
        '시작하기 전에 지원되는 다음 시스템 구성 요소 버전이 있는지 확인하십시오. <br>
                       <ul>
                       <li> 데이터베이스 / 데이터베이스 관리 시스템 (예 : MariaDB, MySQL 또는 SQL Server) </ li>
                       <li> 웹 서버 (Apache, IIS) </ li>
                       </ ul>
                       릴리스 노트의 호환성 매트릭스를 참조하십시오.
                       설치중인 SuiteCRM 버전의 호환 가능한 시스템 구성 요소 <br>',
    'REQUIRED_SYS_CHK' => '초기 시스템 검사',
    'REQUIRED_SYS_CHK_MSG' =>
        '설치 프로세스를 시작하면 SuiteCRM 파일이있는 웹 서버에서 시스템 검사가 수행됩니다
                      시스템이 올바르게 구성되어 있고 필요한 모든 구성 요소가 있는지 확인하십시오.
                      설치를 완료하십시오. <br> <br>
                      시스템에서 다음을 모두 확인합니다. <br>
                      <ul>
                      <li> <b> PHP 버전 </ b> - 애플리케이션과 호환되어야합니다. </ li>
                      <li> <b> 세션 변수 </ b> - 제대로 작동해야합니다. </ li>
                      <li> <b> MB 문자열 </ b> - php.ini에 설치되어 있어야합니다. </ li>
                      <li> <b> 데이터베이스 지원 </ b> - MariaDB, MySQL 또는 SQL Server에 존재해야합니다. </ li>
                      <li> <b> Config.php </ b> - 반드시 있어야하며 쓰기 권한을 부여 할 수있는 적절한 권한이 있어야합니다. </ li>
                      <li> 다음 SuiteCRM 파일은 쓰기 가능해야합니다 : <ul> <li> <b> / custom </ li>
                      <li> / 캐시 </ li>
                      <li> / 모듈</ li>
                      <li> / 업로드 </ b> </ li> </ ul> </ li> </ ul>
                                  검사가 실패하면 설치를 계속할 수 없습니다.
                                  시스템이 점검을 통과하지 못한 이유를 설명하는 오류 메시지가 표시됩니다.
                                  필요한 사항을 변경 한 후 시스템 검사를 다시 거쳐 설치를 계속할 수 있습니다. <br>',


    'REQUIRED_INSTALLTYPE' => '일반 또는 사용자 지정 설치',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the SuiteCRM data <ul><li>Compatible database
                      types: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your SuiteCRM files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the SuiteCRM data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the SuiteCRM database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li>
                      <li> <b>SuiteCRM database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      <ul>
                      <li> <b>URL that will be used to access the SuiteCRM instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for SuiteCRM information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the SuiteCRM log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one SuiteCRM instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => '설치하기 전에 다음의 중요 정보를 읽어보세요. 정보는 이 시점에서 어플리케이션을 설치할 준비 여부를 결정하는데 도움을 줄 것입니다.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>언어 선택</b>',
    'LBL_WELCOME_SETUP_WIZARD' => '설치 마법사',
    'LBL_WIZARD_TITLE' => 'SuiteCRM 설치 마법사: ',
    'LBL_YES' => '예',

    'LBL_PATCHES_TITLE' => '최신 패치를 설치',
    'LBL_MODULE_TITLE' => '언어 팩 설치',
    'LBL_PATCH_1' => '이 단계를 생략하려면 \'다음\'을 눌러주세요.',
    'LBL_PATCH_TITLE' => '시스템 패치',
    'LBL_PATCH_READY' => '다음 패치가 설치할 준비가 되었습니다.',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP 세션 구성 오류',
    'LBL_SYSTEM_NAME' => '시스템명',
    'LBL_COLLATION' => '조합 설정',
    'LBL_REQUIRED_SYSTEM_NAME' => 'SuiteCRM 인스턴스에 대한 시스템 이름을 제공 합니다.',
    'LBL_PATCH_UPLOAD' => '로컬 컴퓨터에 패치 파일을 선택하세요',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP버전 5나 그 상위 버전이 필요합니다.',
    'LBL_MINIMUM_PHP_VERSION' => '최소 php 버전은 5.1입니다. 권장 버전은 5.2.x입니다.',
    'LBL_YOUR_PHP_VERSION' => '(현재 php 버전은 ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' 권장 버전은 5.2.x입니다.)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP 역방향 적합성 모드가 작동중입니다. 계속 진행하려면 zend.ze1_compatibility_mode 를 작동을 중지하십시오.',
    'LBL_STREAM' => 'PHP은 스트림을 사용할 수 있습니다.',

    'advanced_password_new_account_email' => array(
        'subject' => '새로운 계정 정보',
        'type' => 'system',
        'description' => '이 파일은 시스템 관리자가 새로운 비밀번호를 보낼 때 사용됩니다.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>당신의 계정 및 임시 패스워드는 다음과 같습니다.:</p><p>계정이름 : $contact_user_user_name </p><p>패스워드 :$contact_user_user_hash </p><br><p>$config_site_url</p><br><p>임시 패스워드로 로그인 후에, 새로운 패스워드로 재설정해야 할 수 있습니다.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '당신의 계정 및 임시 패스워드는 다음과 같습니다.:
계정이름 : $contact_user_user_name
패스워드 : $contact_user_user_hash

$config_site_url

임시 패스워드로 로그인 후에, 새로운 패스워드로 재설정해야 할 수 있습니다.',
        'name' => '시스템에서 생성 된 비밀 번호 이메일',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => '비밀번호 재설정',
        'type' => 'system',
        'description' => "이 템플릿은 사용자 계정 비밀번호를 재설정하기 위한 사용자에게 보내는데 사용됩니다.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
최근에 요청한 \'$contact_user_pwd_last_changed\' 가 계정 비밀번호를 재설정할 수 있습니다.

아래 링크를 따라 비밀번호를 재설정하세요.

$contact_user_link_guid',
        'name' => '이메일 비밀번호 분실',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Two Factor Authentication Code',
        'type' => 'system',
        'description' => "This template is used to send a user a code for Two Factor Authentication.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Two Factor Authentication code is <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Two Factor Authentication code is $code.',
        'name' => 'Two Factor Authentication email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '발신자 명:',
    'LBL_FROM_ADDR' => '"From" 주소:',

    'LBL_WIZARD_SMTP_DESC' => '배정알림이나 사용자 새 비밀번호 전송에 사용될 이메일 계정을 입력하십시오. 사용자는 SuiteCRM에서 지정한 계정으로 이메일을 수신하게 됩니다.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '이메일 공급자를 선택하십시오.',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => '기타',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP 서버 사양',
    'LBL_MAIL_SMTPSERVER' => 'SMTP 서버:',
    'LBL_MAIL_SMTPPORT' => 'SMTP 포트:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP 인증 사용?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SSL 또는 TLS를 통해 SMTP 사용?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail 이메일 주소:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail 비밀번호:',
    'LBL_ALLOW_DEFAULT_SELECTION' => '사용자가 보내는 이메일 계정을 사용하도록 허용:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '이 옵션을 선택하면 모든 사용자으로의 시스템 알림 및 경고를 보내는 데 사용 되는 메일 계정을 단일 메일계정을 사용합니다
이 옵션을 선택 하지 않을 경우는 사용자의 메일 계정을 사용하여 알림 및 경고를 보냅니다',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! 메일 비밀번호',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! 메일 ID:',

    'LBL_EXCHANGE_SMTPPASS' => '비밀번호 교환',
    'LBL_EXCHANGE_SMTPUSER' => '사용자명 교환',
    'LBL_EXCHANGE_SMTPPORT' => '서버 포트 교환',
    'LBL_EXCHANGE_SMTPSERVER' => '서버 교환',


    'LBL_MAIL_SMTPUSER' => 'SMTP 유저명:',
    'LBL_MAIL_SMTPPASS' => 'SMTP 비밀 번호:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => '상표만들기',
    'LBL_WIZARD_SYSTEM_DESC' => '귀하의 SuiteCRM 상표를 위한 조직명과 로고를 입력하십시오.',
    'SYSTEM_NAME_WIZARD' => '이름:',
    'SYSTEM_NAME_HELP' => '이는 귀하의 브라우저 제목칸에 나타납니다.',
    'NEW_LOGO' => '로고 선택',
    'NEW_LOGO_HELP' => '이미지 파일 포맷은 .png 또는 .jpg로 할 수 있습니다. 최대 높이는 170px, 최대 너비는 450px입니다. 이것보다 크게 올리면 최대 사이즈에 맞게 수정될 것입니다.',
    'COMPANY_LOGO_UPLOAD_BTN' => '전송',
    'CURRENT_LOGO' => '현재 로고',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => '시나리오 선택',
    'LBL_WIZARD_SCENARIO_DESC' => '이 요구 사항에 따라 표시 된 모듈의 조정을 허용하기 위함입니다. 각 모듈은 설치 후 관리 페이지를 사용하여 활성화할 수 있습니다.',
    'LBL_WIZARD_SCENARIO_EMPTY' => '현재 구성 파일 (config.php)에는 설정되어 있는 시나리오가 없습니다',


    // System Local Settings


    'LBL_LOCALE_TITLE' => '시스템 현지 설정',
    'LBL_WIZARD_LOCALE_DESC' => '귀하의 지리적 위치에 따라 원하는 SuiteCRM에서의 데이타 전시를 지정해 주십시오. 이곳에 입력하신 설정은 초기설정이 됩니다. 사용자는 각자 선호하는 설정을 할수 있습니다.',
    'LBL_DATE_FORMAT' => '일자표시형식:',
    'LBL_TIME_FORMAT' => '시간표시형식:',
    'LBL_TIMEZONE' => '표준 시간대:',
    'LBL_LANGUAGE' => '언어:',
    'LBL_CURRENCY' => '통화:',
    'LBL_CURRENCY_SYMBOL' => '통화 기호:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 통화 코드:',
    'LBL_NUMBER_GROUPING_SEP' => '1000 단위 구분 기호:',
    'LBL_DECIMAL_SEP' => '소수점 기호:',
    'LBL_NAME_FORMAT' => '이름 형식:',
    'UPLOAD_LOGO' => '기다려 주세요, 로고 업로드 중입니다.',
    'ERR_UPLOAD_FILETYPE' => '파일 형식 허용 되지 않습니다, jpeg 또는 png로 업로드 하시기 바랍니다.',
    'ERR_LANG_UPLOAD_UNKNOWN' => '알 수 없는 파일이 오류가 발생 했습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => '전송된 파일이 php.ini에 명시된 upload_max_filesize 지시를 초과했습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => '전송된 파일이 HTML 양식에 명시된 MAX_FILE_SIZE 지시를 초과했습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => '파일이 부분적으로 전송되었습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => '파일이 전송되지 않았습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => '임시 폴더가 없습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => '디스크에 파일쓰기가 실패했습니다.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'PHP 익스텐션이 파일 업로드를 중지하였습니다. PHP는 파일 업로드 중지를 어떤 익스텐션이 야기하였나에 대한 확인 방법을 제공 하지 않습니다.',

    'LBL_INSTALL_PROCESS' => '설치...',

    'LBL_EMAIL_ADDRESS' => '이메일 주소:',
    'ERR_ADMIN_EMAIL' => '관리자 이메일 주소 올바르지 않습니다.',
    'ERR_SITE_URL' => '사이트 URL이 필요 합니다.',

    'STAT_CONFIGURATION' => '관계 설정...',
    'STAT_CREATE_DB' => '데이터 베이스 생성',

    'STAT_CREATE_DEFAULT_SETTINGS' => '기본 설정 만들기...',
    'STAT_INSTALL_FINISH' => '설치 완료...',
    'STAT_INSTALL_FINISH_LOGIN' => '설치가 끝났습니다..<a href="%s">로그인해주세요</a>',
    'LBL_LICENCE_TOOLTIP' => '먼저 라이센스를 받아 주시기 바랍니다',

    'LBL_MORE_OPTIONS_TITLE' => '더 많은 옵션',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => '데이타베이스 오류',
    'LBL_OLD_PHP' => '이전 버전의 PHP가 감지되었습니다!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => '사용자',
    'LBL_DBCONFIG_MSG3_LABEL' => '데이터베이스 명',
    'LBL_DBCONFIG_MSG3' => 'SuiteCRM 데이터를 저장 할 데이터 베이스의 이름:',
    'LBL_DBCONFIG_MSG2_LABEL' => '호스트 명',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'SuiteCRM의 데이터베이스를 셋업하려면, 데이터베이스 테이블과 유저의 작성 및 데이터베이스에 쓰기가 가능한 권한을 가진 관리자 유저의 유저명과 비밀번호가 필요합니다.'
);
