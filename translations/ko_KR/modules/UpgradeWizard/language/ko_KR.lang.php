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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => '그룹을 결정할수 없습니다.',
    'ERR_UW_CANNOT_DETERMINE_USER' => '소유주를 결정할수 없습니다.',
    'ERR_UW_CONFIG_WRITE' => '새 버전 정보를 config.php 업데이트 하는 중 오류가 발생 했습니다.',
    'ERR_UW_CONFIG' => 'config.php 파일을 쓰기가능하게 만든후 이페이지를 다시 시도하십시오',
    'ERR_UW_DIR_NOT_WRITABLE' => '쓰기 불가능한 디렉토리',
    'ERR_UW_FILE_NOT_COPIED' => '파일이 복사되지 않았습니다.',
    'ERR_UW_FILE_NOT_DELETED' => '문제 제거 패키지',
    'ERR_UW_FILE_NOT_READABLE' => '파일을 읽을 수 없습니다.',
    'ERR_UW_FILE_NOT_WRITABLE' => '파일을 이동 하거나 쓸 수 없습니다.',
    'ERR_UW_FLAVOR_2' => '특색 업그레이드 중입니다.',
    'ERR_UW_FLAVOR' => 'SuiteCRM 시스템 특색',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log가 새로 쓰여지거나 만들어지지 않았습니다. SuiteCRM 디렉토리의 허용치를 수정하십시오.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_가 1이상의 가치를 초과 설정하였습니다. 이를  php.ini 에서 변경한후 웹서버를 다시 시작하십시오.',
    'ERR_UW_NO_FILE_UPLOADED' => '파일을 지정하고 다시 시도 하십시오!',
    'ERR_UW_NO_FILES' => '오류가 발생 했습니다, 체크하는동안 어떤 파일도 발견하지 못했습니다.',
    'ERR_UW_NO_MANIFEST' => 'Zip 파일에 manifest.php 파일이 없습니다. 진행할 수 없습니다.',
    'ERR_UW_NO_VIEW' => '유효하지 않는 창이 명시되었습니다.',
    'ERR_UW_NOT_VALID_UPLOAD' => '잘못된 업로드입니다.',
    'ERR_UW_NO_CREATE_TMP_DIR' => '임시 디렉터리를 만들 수 없습니다. 파일 권한을 확인 하십시오.',
    'ERR_UW_ONLY_PATCHES' => '이 페이지에서는 패치파일만 전송할수 있습니다.',
    'ERR_UW_PREFLIGHT_ERRORS' => '프리플라이트 검사 동안 오류가 발경되었습니다.',
    'ERR_UW_UPLOAD_ERR' => '업로드 파일에 문제가 있습니다. 다시 시도해주세요.<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM 시스템 버전: ',
    'ERR_UW_PHP_VERSION' => 'PHP 버전: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM 시스템 버전: ',
    'ERR_UW_WRONG_TYPE' => '이 페이지는 실행하지 않습니다. ',
    'LBL_BUTTON_BACK' => '뒤로',
    'LBL_BUTTON_CANCEL' => '취소',
    'LBL_BUTTON_DELETE' => '패키지 삭제',
    'LBL_BUTTON_DONE' => '완료',
    'LBL_BUTTON_EXIT' => '나가기',
    'LBL_BUTTON_NEXT' => '다음',
    'LBL_BUTTON_RECHECK' => '다시 확인',
    'LBL_BUTTON_RESTART' => '다시 시작',

    'LBL_UPLOAD_UPGRADE' => '업그레이드 패키지를 업로드 ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => '파일 백업',
    'LBL_UW_BACKUP_FILES_EXIST' => '업그레이드된 백업파일을 발견할 수 없습니다.',
    'LBL_UW_BACKUP' => '파일 백업',
    'LBL_UW_CANCEL_DESC' => '업그레이드가 취소되었습니다. 복사된 임시 파일이나 업로드된 업그레이드 파일은 삭제되었습니다.',
    'LBL_UW_CHECK_ALL' => '모두 선택',
    'LBL_UW_CHECKLIST' => '업그레이드 단계',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => '덮어쓸 파일 백업은 다음 디렉토리에 있습니다:' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => '다음 파일을 수동 병합:' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => '업그레이드 프로세스: 수동 파일 병합',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => '최적의 차분툴을 이용해, 이 파일을 병합하십시오. 이 과정이 완료될 때까지, SuiteCRM 설치는 불안정한 상태에 있으며, 업그레이드도 완료되지 않습니다.',
    'LBL_UW_COMPLETE' => '완료',
    'LBL_UW_COMPLIANCE_ALL_OK' => '요구사항이 만족된 모든 시스템 설정',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP설정:참조사항에 따른 전화상담 시간',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL 모듈',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP 모듈',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings 모듈',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_한계 초과',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP 설정:메모리 한계',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP 설정:흐름',
    'LBL_UW_COMPLIANCE_DB' => '최소 데이터베이스 버전',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Php.ini의 위치',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => '최소 PHP 버전',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP 설정: 안전 모드',
    'LBL_UW_COMPLIANCE_TITLE2' => '검색된 설정',
    'LBL_UW_COMPLIANCE_XML' => 'XML 분석',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip 지원',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE 버전',
    'LBL_UW_COPIED_FILES_TITLE' => '파일이 성공적으로 복사되었습니다.',

    'LBL_UW_DB_CHOICE1' => '업그레이드 마법사 SQL 실행',
    'LBL_UW_DB_CHOICE2' => '수동 SQL 문의사항',
    'LBL_UW_DB_ISSUES_PERMS' => '데이터베이스 권한',
    'LBL_UW_DB_METHOD' => '데이터베이스 업데이트 방법',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => '가능한 전체 혜택',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => '필요한 혜택',

    'LBL_UW_DESC_MODULES_INSTALLED' => '다음의 업그레이트 패키지가 설치되었습니다.',
    'LBL_UW_END_LOGOUT_PRE' => '업그레이드가 완료되었습니다.',
    'LBL_UW_END_LOGOUT_PRE2' => '업그레이드 마법사 나가기는 완료 버튼을 클릭하십시오.',
    'LBL_UW_END_LOGOUT' => '업그레이드 마법사를 이용해 다른 업그레이드 패키지를 적용하려면 실행전 다시 로그인하십시오.',

    'LBL_UW_FILE_DELETED' => '제거되었습니다.',
    'LBL_UW_FILE_GROUP' => '그룹',
    'LBL_UW_FILE_ISSUES_PERMS' => '파일 허용',
    'LBL_UW_FILE_NO_ERRORS' => '모든 쓰기가능한 파일',
    'LBL_UW_FILE_OWNER' => '소유자',
    'LBL_UW_FILE_PERMS' => '허용',
    'LBL_UW_FILE_UPLOADED' => '전송되었습니다.',
    'LBL_UW_FILE' => '파일명',
    'LBL_UW_FILES_QUEUED' => '다음 업그레이드 패키지가 설치 준비되었습니다.',
    'LBL_UW_FILES_REMOVED' => '다음 파일은 시스템에서 제거됩니다:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '업그레이드 패키지를 전송하려면 다음 버튼을 클릭하십시오.',
    'LBL_UW_FROZEN' => '계속하기전 패키지 전송',
    'LBL_UW_HIDE_DETAILS' => '세부사항 숨기기',
    'LBL_UW_IN_PROGRESS' => '처리중',
    'LBL_UW_INCLUDING' => '포함',
    'LBL_UW_INCOMPLETE' => '완료되지 않음',
    'LBL_UW_MANUAL_MERGE' => '파일 통합',
    'LBL_UW_MODULE_READY' => '모듈 설치준비가 되었습니다. 설치 위해 "Commit"을 클릭하세요.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => '기록된 업그레이드가 없습니다.',
    'LBL_UW_NONE' => '없음',
    'LBL_UW_OVERWRITE_DESC' => '작성하신 코드 및 변경된 서식 등을 포함해, 모든 변경된 파일이 덮어쓰기 됩니다. 계속 하시겠습니까?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => '수동으로 병합을 위한 신규 업무를 작성하시겠습니까?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => '수동 통합 알림을 위해 본인수신 이메일을 보내시겠습니까?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => '아래 목록의 파일이 수정되었습니다. 수동 통합이 필요한 아이템은 확인해제하십시오. 발견된 지면배치 변경은 자동으로 확인해제됩니다;덮어쓰여질 항목에 확인표시합니다.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => '수동 파일통합이 필요하지 않습니다.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => '필요하지 않습니다.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => '자동 저장된 파일',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => '전체 예비비행이 통과했습니다.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => '업그레이드된 파일을 시스템에 복사하려면 다음 버튼을 클릭하십시오.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '노트:나머지 업그레이드 과정은 필수이며 다음 버튼을 클릭하면 진행을 완료해야합니다. 진행을 원하지 않으면 취소 버튼을 클릭하십시오.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => '전체 파일 토글',

    'LBL_UW_REBUILD_TITLE' => '결과 다시 만들기',
    'LBL_UW_SCHEMA_CHANGE' => '개요 변경',

    'LBL_UW_SHOW_COMPLIANCE' => '발견된 설정 보이기',
    'LBL_UW_SHOW_DB_PERMS' => '사라진 데이타베이스 허가 보이기',
    'LBL_UW_SHOW_DETAILS' => '세부사항 보이기',
    'LBL_UW_SHOW_DIFFS' => '수동 통합이 필요한 파일 보이기',
    'LBL_UW_SHOW_NW_FILES' => '올바르지 않은 허가의 파일 보이기',
    'LBL_UW_SHOW_SCHEMA' => '개요 변경 스크립트 보이기',
    'LBL_UW_SHOW_SQL_ERRORS' => '좋지않은 문의사항 보이기',
    'LBL_UW_SHOW' => '보기',

    'LBL_UW_SKIPPED_FILES_TITLE' => '생략된 파일',
    'LBL_UW_SQL_RUN' => 'SQL 수동 실행시 확인',
    'LBL_UW_START_DESC' => 'SuiteCRM 예시의 업그레이드를 마법사가 도와줍니다.',
    'LBL_UW_START_DESC2' => '참고:제품에서 사용하고 신규 버젼을 배포하기전 패키지 업그레이드 테스트 위한 SuiteCRM 인스턴스의 복사복을 만들길 권합니다. 만약 "composer.json"  파일을 변경했다면 업그레이드 완료후 를 실행하세요:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => '시스템의 업그레이드 준비를 확인하도록 다음 버튼을 눌러 실행합니다. 이는 파일 허가, 데이타 특권과 서버 설정을 포함합니다.',
    'LBL_UW_START_UPGRADED_UW_DESC' => '신규 업그레이드 마법사가 업그레드를 시작합니다.계속해서 업그레이드를 진행하십시오.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => '새 업그레이드 마법사에 오신것을 환영합니다.',

    'LBL_UW_TITLE_CANCEL' => '취소',
    'LBL_UW_TITLE_COMMIT' => '업그레이드를 약속합니다.',
    'LBL_UW_TITLE_END' => '보고 받기',
    'LBL_UW_TITLE_PREFLIGHT' => '비행전 확인',
    'LBL_UW_TITLE_START' => '환영합니다:',
    'LBL_UW_TITLE_SYSTEM_CHECK' => '시스템 확인',
    'LBL_UW_TITLE_UPLOAD' => '패키지 전송',
    'LBL_UW_TITLE' => '업그레이드 마법사',
    'LBL_UW_UNINSTALL' => '설치해제',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => '라이센트 수락',
    'LBL_UW_CONVERT_THE_LICENSE' => '라이센스 전환',

    'LBL_START_UPGRADE_IN_PROGRESS' => '진행 시작되었습니다.',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => '시스템 확인이 진행중입니다.',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => '라이센스 확인중입니다.',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => '예비비행 확인중입니다.',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => '파일 복사중입니다.',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => '약속한 업그레이드가 진행중입니다.',
    'LBL_UW_COMMIT_DESC' => '추가 스크립트 업그레이드를 위해 다음 버튼 클릭하십시오',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => '스크립트 업그레이드 중입니다.',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => '개요 업그레이드 중입니다.',
    'LBL_UPGRADE_IN_PROGRESS' => '진행 중     ',
    'LBL_UPGRADE_TIME_ELAPSED' => '시간 경과',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => '업그레이드를 취소하고 진행중인 것을 정리합니다.',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => '업그레이드는 시간이 좀 걸릴 수 있습니다.',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => '진행중인 업로드 체크',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => '업그레이드 페키지 업로드 ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => '업그레이드 마법사가 old 451 schema 내립니다.',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => '예전 개요 내리기 방법',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => '내릴수 있는 예전 개요 보이기',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => '생략된 문의사항',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP버전 5나 그 상위 버전이 필요합니다.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => '귀하의 PHP버전은 SuiteCRM에 의해 지원되지 않습니다. SuiteCRM어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 PHP버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다. 귀하의 버전은',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP 역방향 적합성 모드가 작동중입니다. 계속 진행하려면 zend.ze1_compatibility_mode 를 작동을 중지하십시오.',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => '액션',
    'LBL_ML_CANCEL' => '취소',
    'LBL_ML_COMMIT' => '약속됨',
    'LBL_ML_DESCRIPTION' => '상세',
    'LBL_ML_INSTALLED' => '설치된 날짜',
    'LBL_ML_NAME' => '이름',
    'LBL_ML_PUBLISHED' => '게시 날짜',
    'LBL_ML_TYPE' => '종류',
    'LBL_ML_UNINSTALLABLE' => '설치 불가능',
    'LBL_ML_VERSION' => '버전',
    'LBL_ML_INSTALL' => '설치',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => '귀하의 현재 php버전은 다음과 같습니다.',
    'LBL_RECOMMENDED_PHP_VERSION_1' => '권장 php 버전은 ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' 또는 그 이상.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => '업그레이드 마법사',
    'LBL_UPLOAD_SUCCESS' => '패키지 업그레이드가 성공적으로 전송되었습니다. 최종 확인을 위한 다음 버튼을 클릭하십시오,',
    'LBL_UW_TITLE_LAYOUTS' => '레이아웃 확인',
    'LBL_LAYOUT_MODULE_TITLE' => '레이아웃',
    'LBL_LAYOUT_MERGE_DESC' => '업그레이드의 과정에서 추가된 신규 필드를 사용할수 있으며 기존 모듈 지면배치에 자동 추가될수 있습니다. 신규 필드에 대한 보다더 자세한 내용은 업그레이드인 버전의 발매 노트를 참조하십시오,<br />신규 필드의 추가를 원치 않으시면 모듈을 확인해제하고 지면배치는 변경되지 않습니다. 필드는 업그레이드 후에 작업실에서 사용할수 있습니다.',
    'LBL_LAYOUT_MERGE_TITLE' => '변경사항을 확인하고 업그레이드 완료를 위해 다음 버튼을 클릭하십시오.',
    'LBL_LAYOUT_MERGE_TITLE2' => '업그레이드 완료를 위해 다음 버튼을 클릭하십시오',
    'LBL_UW_CONFIRM_LAYOUTS' => '레이아웃 확인',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => '레이아웃 결과 확인',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => '다음 레이아웃이 성공적으로 병합되었습니다.',
    'LBL_SELECT_FILE' => '파일 선택하기',
    'ERROR_VERSION_INCOMPATIBLE' => '전송된 파일이 현재 버전과 호환되지 않습니다.',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => '업로드 된 파일이 이 버전의 PHP 와 호환 되지 않습니다. ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => '전송된 파일이 현재 버전과 호환되지 않습니다.',
    'LBL_LANGPACKS' => '언어꾸러미' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => '모듈 로더' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => '패치 업그레이드' /*for 508 compliance fix*/,
    'LBL_THEMES' => '테마선택' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => '워크플로' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => '업그레이드' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => '진행중입니다' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => '호환 되는 버전이 매니페스트 파일에 설정 되어 있지 않습니다',
    'LBL_UPGRD_CSTM_CHK' => '업그레이드 프로세스는 일부파일을 업데이트합니다. 하지만 이 파일들은 custom/ 폴더안에도 존재합니다. 진행하시기 전에 변경내용을 검토하십시오.',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => '전송된 파일이 php.ini에 명시된 upload_max_filesize 지시를 초과했습니다.',
        2 => '전송된 파일이 HTML 양식에 명시된 MAX_FILE_SIZE 지시를 초과했습니다.',
        3 => '파일이 부분적으로 전송되었습니다.',
        4 => '파일이 전송되지 않았습니다.',
        5 => '알 수 없는 오류',
        6 => '임시 폴더가 없습니다.',
        7 => '디스크에 파일쓰기가 실패했습니다.',
        8 => '확장에 의해 파일 전송이 중지되었습니다.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
