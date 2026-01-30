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
    'LBL_BASIC_SEARCH' => '快速過濾',
    'LBL_ADVANCED_SEARCH' => '進階過濾',
    'LBL_BASIC_TYPE' => '基本類型',
    'LBL_ADVANCED_TYPE' => '進階類型',
    'LBL_SYSOPTS_2' => '你將使用什麼類型的資料庫在本次SuiteCRM安裝?',
    'LBL_SYSOPTS_DB' => '選擇資料庫類型',
    'LBL_SYSOPTS_DB_TITLE' => '資料庫類型',
    'LBL_SYSOPTS_ERRS_TITLE' => '在繼續之前，請先將下列錯誤排除：',
    'ERR_DB_VERSION_FAILURE' => '無法確認資料庫版本。',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => '提供SuiteCRM管理員的名稱。',
    'ERR_ADMIN_PASS_BLANK' => '提供SuiteCRM管理員的密碼。',

    'ERR_CHECKSYS' => '相容性確認時發生錯誤。為了讓你的SuiteCRM安裝過程正常，請按照適當步驟將下列問題解決，解決請按重新確認按鈕，或是再安裝一次。',
    'ERR_CHECKSYS_CALL_TIME' => '允許電訪時間通行證參考已開啟(這應該在 php.ini 關閉)',
    'ERR_CHECKSYS_CURL' => '找不到: SuiteCRM 排程器將以有限的功能運行。',
    'ERR_CHECKSYS_IMAP' => '沒找到: 入站電子郵件及活動(電子郵件) 要求 IMAP 包. 兩個功能都不起作用.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(設定為',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M或更大，於你的php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => '警告：無法寫入',
    'ERR_CHECKSYS_PHP_INVALID_VER' => '你安裝的PHP版本不被SuiteCRM支援。請在Release Notes中參考相容性表格，並安裝有效的PHP版本。你的版本是',
    'ERR_CHECKSYS_IIS_INVALID_VER' => '你安裝的IIS版本不被SuiteCRM支援。請在Release Notes中參考相容性表格，並安裝有效的IIS版本。你的版本是',
    'ERR_CHECKSYS_FASTCGI' => '我們檢測到您未使用 FastCGI handler mapping for PHP。您將需要安裝/配置與 SuiteCRM 應用程式相容的版本。 請參閱受支援版本的版本資訊中的相容性訊息。請參閱 <a href="http://www.iis.net/php/"target="_blank"> http://www.iis.net/php/ </a> 的詳細資訊 ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => '為了使用 IIS/FastCGI sapi 的最佳體驗，請在在 php.ini 檔案中設置 fastcgi.logging 為 0 。',
    'LBL_DB_UNAVAILABLE' => '資料庫無法取得',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => '查無資料庫支援。請確認你已安裝必要的驅動程式供下列資料庫類型使用：MySQL或MS SQLServer。你可能需要將php.ini中的extension取消註解，或以正確的二進位檔案重新編譯，視你的PHP版本不同而異。請參照你的PHP使用手冊或更多資訊以啟用資料庫支援。',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => '查無與XML解析庫有關且為SuiteCRM必要的功能。你可能需要將php.ini中的extension取消註解，或以正確的二進位檔案重新編譯，視你的PHP版本不同而異。請參照你的PHP使用手冊或更多資訊。',
    'ERR_CHECKSYS_MBSTRING' => '查無與Multibyte Strings PHP extension (mbstring)有關且為SuiteCRM必要的功能。<br/><br/>一般來說，mbstring模組在PHP中並非預設，需要在PHP在建構時加入--enable-mbstring。請參照你的PHP使用手冊或更多資訊以啟用mbstring支援。',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "這功能與 JSON Parser 的程式庫有關而 SuiteCRM 應用程式找不到. 你有可能需要查看你的 PHP 版本，版本影響到你需要在 php.ini 註解掉這個 extension，或是重新編譯這個檔案. 請參考 PHP 操作手冊去查閱更多的資訊.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => '設定覆蓋',
    'ERR_CHECKSYS_SAFE_MODE' => '安全模式開啟 (你或許希望在php.ini中關閉)',
    'ERR_CHECKSYS_ZLIB' => '查無ZLib支援：SuiteCRM系統效能須倚靠zlib壓縮來提昇。',
    'ERR_CHECKSYS_ZIP' => '查無ZIP支援：SuiteCRM需要ZIP支援以處理壓縮檔。',
    'ERR_CHECKSYS_PCRE' => '查無PCRE程序庫：SuiteCRM需要PCRE程序庫以處理Perl形式的正規表示法樣式匹配。',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE程序庫版本：SuiteCRM需要PCRE程序庫7.0或更新版本以處理Perl形式的正規表示法樣式匹配。',
    'ERR_DB_ADMIN' => '提供的資料庫管理員帳號與/或密碼不正確，無法成功進行資料庫連線。請填寫正確的帳號及密碼。(錯誤：',
    'ERR_DB_ADMIN_MSSQL' => '提供的資料庫管理員帳號與/或密碼不正確，無法成功進行資料庫連線。請填寫正確的帳號及密碼。',
    'ERR_DB_EXISTS_NOT' => '指定的資料庫不存在。',
    'ERR_DB_EXISTS_WITH_CONFIG' => '資料庫已存在並有設定資料在其中。若要用所選資料庫進行一次全新安裝，請重新執行安裝步驟並選擇"放棄並重新建立已存在的SuiteCRM資料表?" 若要進行系統升級，請用管理員介面中的升級精靈。請閱讀<a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">此處</a>的升級文件。',
    'ERR_DB_EXISTS' => '所提供的資料庫名稱已存在，無法用同樣名稱創建另一個資料庫。',
    'ERR_DB_EXISTS_PROCEED' => '提供的資料庫名稱已經存在。 你可以 <br>1. 按往回按鈕並選擇一個新的資料庫名稱 <br>2. 按下一步，繼續但在此資料庫上的所有現有資料表將被丟棄。 <strong>這意味著您的資料表和資料將會消失。</strong>',
    'ERR_DB_HOSTNAME' => '主機名稱不能為空。',
    'ERR_DB_INVALID' => '所選的資料庫類型不正確。',
    'ERR_DB_LOGIN_FAILURE' => '提供的資料庫主機、 使用者名稱和/或密碼無效，無法建立到資料庫連線。 請輸入一個有效的主機、 使用者名稱和密碼',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => '提供的資料庫主機、 使用者名稱和/或密碼無效，無法建立到資料庫連線。 請輸入一個有效的主機、 使用者名稱和密碼',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => '提供的資料庫主機、 使用者名稱和/或密碼無效，無法建立到資料庫連線。 請輸入一個有效的主機、 使用者名稱和密碼',
    'ERR_DB_MYSQL_VERSION' => 'SuiteCRM 不支援您的 MySQL 版本 (%s)。您需要安裝一個與 SuiteCRM 應用程式相容的版本。有關支援 MySQL 版本，請參閱版本資訊中的相容性表格。',
    'ERR_DB_NAME' => '資料庫名稱不能為空。',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "資料庫名稱不能包含 ' \\'，'/'，或 '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "資料庫名稱不能以數字，'#' 或 ' @' 開頭，並且不能包含空格，'\"，\"'\"，' *'，'/'，' \\'，'? '，':'，' <'，' >'，'與 '，'!'，或 '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "資料庫名稱只能包含字母、數字和符號 '_' 、'$' 或 '#'",
    'ERR_DB_PASSWORD' => '提供的 SuiteCRM 資料庫管理員密碼不同。 請在密碼欄位中重新輸入相同的密碼。',
    'ERR_DB_PRIV_USER' => '提供資料庫管理員的使用者名稱。 與資料庫的初始連線需要此使用者。',
    'ERR_DB_USER_EXISTS' => '設定的 SuiteCRM 的資料庫使用者使用者名稱已經存在 — — 不能創建另一個相同名稱的使用者。請輸入新的名稱。',
    'ERR_DB_USER' => '輸入 SuiteCRM 資料庫管理員的使用者名稱。',
    'ERR_DBCONF_VALIDATION' => '在繼續之前，請先將下列錯誤排除：',
    'ERR_DBCONF_PASSWORD_MISMATCH' => '提供的 SuiteCRM 資料庫使用者密碼不同。請在密碼欄位中重新輸入相同的密碼。',
    'ERR_ERROR_GENERAL' => '遇到以下錯誤:',
    'ERR_LANG_CANNOT_DELETE_FILE' => '無法刪除檔案: ',
    'ERR_LANG_MISSING_FILE' => '找不到檔案: ',
    'ERR_LANG_NO_LANG_FILE' => '在 include/language 中找不到語言包: ',
    'ERR_LANG_UPLOAD_1' => '您的上傳發生問題。 請再試一次。',
    'ERR_LANG_UPLOAD_2' => '語言包必須是 ZIP 檔案。',
    'ERR_LANG_UPLOAD_3' => 'PHP 無法將暫存檔案移動到升級目錄。',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => '提供的日誌目錄不是一個有效的目錄。',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '提供的日誌目錄不是一個可寫的目錄。',
    'ERR_NO_DIRECT_SCRIPT' => '不能直接處理腳本。',
    'ERR_NO_SINGLE_QUOTE' => '不可以使用單引號',
    'ERR_PASSWORD_MISMATCH' => '提供的 SuiteCRM 管理員使用者密碼不同。 請在密碼欄位中重新輸入相同的密碼。',
    'ERR_PERFORM_CONFIG_PHP_1' => '無法寫入 <span class=stop> config.php</span> 檔案。',
    'ERR_PERFORM_CONFIG_PHP_2' => '您可以通過手動創建 config.php 檔並將下面的設定資訊剪貼到 config.php 檔案繼續此安裝。無論如何，您 <strong>必須</strong> 創建 config.php 檔才能繼續下一步。',
    'ERR_PERFORM_CONFIG_PHP_3' => '你記得創建 config.php 檔案嗎?',
    'ERR_PERFORM_CONFIG_PHP_4' => '警告: 無法寫入 config.php 檔。 請確定它存在。',
    'ERR_PERFORM_HTACCESS_1' => '無法寫入 ',
    'ERR_PERFORM_HTACCESS_2' => ' 檔案。',
    'ERR_PERFORM_HTACCESS_3' => '如果您想保護可以通過瀏覽器訪問的文件，在您的根目錄下創建一個.htaccess文件，並加上這些行:',
    'ERR_PERFORM_NO_TCPIP' => '<b>我們無法檢測到網際網路連線。</b>當你有連線時，請訪問 <a href="https://www.suitecrm.com/"> https://www.suitecrm.com/</a> 與 SuiteCRM 註冊。讓我們知道一點點關於你公司計畫如何使用 SuiteCRM，我們可以確保我們為您的業務需求提供正確的應用程式。',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '提供的會話目錄不是一個有效的目錄。',
    'ERR_SESSION_DIRECTORY' => '提供的會話目錄不是一個可寫的目錄。',
    'ERR_SESSION_PATH' => '如果你想要自己指定，必須提供會話檔案路徑。',
    'ERR_SI_NO_CONFIG' => '你沒有包含 config_si.php 在文件根目錄，或是沒有在 config.php 中定義 $sugar_config_si',
    'ERR_SITE_GUID' => '如果你想要自己指定，需要提供應用程式 ID。',
    'ERROR_SPRITE_SUPPORT' => "目前我們不能夠找到 GD 庫，因此你將不能使用 CSS Sprite 功能。",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => '上傳檔案大小',
    'ERR_URL_BLANK' => '為 SuiteCRM 提供您的基礎 URL。',
    'ERR_UW_NO_UPDATE_RECORD' => '不能定位安裝記錄',
    'ERROR_MANIFEST_TYPE' => 'Manifest檔案必須指定檔案包類型。',
    'ERROR_PACKAGE_TYPE' => 'Manifest檔案指定了一個無法識別的檔案包類型。',
    'ERROR_VERSION_INCOMPATIBLE' => '上傳的檔案和當前版本的SuiteCRM不相容: ',

    'LBL_BACK' => '上一步',
    'LBL_CANCEL' => '取消',
    'LBL_ACCEPT' => '我接受',
    'LBL_CHECKSYS_CACHE' => '可寫的 Cache 子目錄',
    'LBL_DROP_DB_CONFIRM' => '提供的資料庫名稱已經存在。<br>你可以 <br>1. 按取消按鈕並選擇一個新的資料庫名稱 <br>2. 按下一步，繼續。但在此資料庫上的所有現有資料表將被丟棄。 <strong>這意味著您原有的資料表和資料將會消失。</strong>',
    'LBL_CHECKSYS_COMPONENT' => '元件',
    'LBL_CHECKSYS_CONFIG' => '可寫的 SuiteCRM 設定檔 (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL 模組',
    'LBL_CHECKSYS_CUSTOM' => '可寫的 Custom 目錄',
    'LBL_CHECKSYS_DATA' => '可寫的 Data 子目錄',
    'LBL_CHECKSYS_IMAP' => 'IMAP 模組',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB 字串模組',
    'LBL_CHECKSYS_MEM_OK' => 'OK (No Limit)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Unlimited)',
    'LBL_CHECKSYS_MEM' => 'PHP 記憶體限制',
    'LBL_CHECKSYS_MODULE' => '可寫的 Modules 子目錄和檔案',
    'LBL_CHECKSYS_NOT_AVAILABLE' => '無效',
    'LBL_CHECKSYS_OK' => '確定',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP 版本',
    'LBL_CHECKSYS_IISVER' => 'IIS 版本',
    'LBL_CHECKSYS_JSON' => 'JSON 解析',
    'LBL_CHECKSYS_RECHECK' => '重新檢查',
    'LBL_CHECKSYS_STATUS' => '狀態',
    'LBL_CHECKSYS_TITLE' => '系統檢查驗收',
    'LBL_CHECKSYS_XML' => 'XML解析',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB 壓縮模組',
    'LBL_CHECKSYS_ZIP' => 'ZIP 處理模組',
    'LBL_CHECKSYS_PCRE' => 'PCRE 庫',
    'LBL_CHECKSYS_FIX_FILES' => '在繼續之前，請先將下列檔案或資料夾錯誤排除：',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => '在繼續之前，請先將下列模組資料夾及其中檔案錯誤排除：',
    'LBL_CHECKSYS_UPLOAD' => '可寫的 Upload 目錄',
    'LBL_CLOSE' => '結束',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => '已創建',
    'LBL_CONFIRM_DB_TYPE' => '資料庫類型',
    'LBL_CONFIRM_NOT' => '不',
    'LBL_CONFIRM_TITLE' => '確認設置',
    'LBL_CONFIRM_WILL' => '將',
    'LBL_DBCONF_DB_DROP' => '刪除資料表',
    'LBL_DBCONF_DB_NAME' => '資料庫名稱',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM 資料庫使用者密碼',
    'LBL_DBCONF_DB_PASSWORD2' => '再次輸入 SuiteCRM 資料庫使用者密碼',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM 資料庫使用者',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM 資料庫使用者',
    'LBL_DBCONF_DB_ADMIN_USER' => '資料庫管理員的使用者名稱',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => '資料庫管理員的密碼',
    'LBL_DBCONF_COLLATION' => '校核',
    'LBL_DBCONF_CHARSET' => '字元集設置',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => '資料庫進階組態設定',
    'LBL_DBCONF_DEMO_DATA' => '要用Demo資料填充資料庫嗎？',
    'LBL_DBCONF_DEMO_DATA_TITLE' => '選擇Demo資料',
    'LBL_DBCONF_HOST_NAME' => '主機名稱',
    'LBL_DBCONF_HOST_INSTANCE' => '主機實例',
    'LBL_DBCONFIG_SECURITY' => '為安全起見，您可以指定獨佔資料庫使用者連接到 SuiteCRM 資料庫。 此使用者必須能夠撰寫、 更新和檢索將創建的 SuiteCRM 資料庫上的資料。 此使用者可以是前述指定的資料庫管理員，或是您也可以提供新的或現有的資料庫的使用者資訊。',
    'LBL_DBCONFIG_PROVIDE_DD' => '提供現有使用者',
    'LBL_DBCONFIG_CREATE_DD' => '定義要創建的使用者',
    'LBL_DBCONFIG_SAME_DD' => '與 Admin 使用者相同',
    'LBL_DBCONF_TITLE' => '資料庫設定',
    'LBL_DBCONF_TITLE_NAME' => '提供資料庫名稱',
    'LBL_DBCONF_TITLE_USER_INFO' => '提供資料庫的使用者資訊',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => '密碼',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => '安裝程式已運行一次。 安全起見，它已被禁用以運行第二次。 如果你確信你想要再次運行它，請到您的 config.php 檔並找到(或添加)變數叫做 \'installer_locked\'，並將它設置為 false。 如下所示︰',
    'LBL_DISABLED_HELP_1' => '安裝説明，請訪問 SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM 安裝已被禁用',
    'LBL_HELP' => '幫助',
    'LBL_INSTALL' => '安裝',
    'LBL_INSTALL_TYPE_TITLE' => '安裝選項',
    'LBL_INSTALL_TYPE_SUBTITLE' => '選擇安裝類型',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>典型安裝</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>自訂安裝</b>',
    'LBL_INSTALL_TYPE_MSG2' => '安裝需要的最低限度的資訊。推薦給新使用者。',
    'LBL_INSTALL_TYPE_MSG3' => '提供要在安裝期間設定的附加選項。這些選項大多數也是可以在安裝後在管理員畫面設定。建議進階使用者使用。',
    'LBL_LANG_1' => '要使用 SuiteCRM 預設語言 (US-English) 以外的語言，可以在這時上傳和安裝語言包。你也能夠在已經安裝好的SuiteCRM 應用程式中上傳和安裝語言包。如果你想要跳過此步驟，請按一下下一步。',
    'LBL_LANG_BUTTON_COMMIT' => '安裝',
    'LBL_LANG_BUTTON_REMOVE' => '刪除',
    'LBL_LANG_BUTTON_UNINSTALL' => '刪除',
    'LBL_LANG_BUTTON_UPLOAD' => '上傳',
    'LBL_LANG_NO_PACKS' => '無',
    'LBL_LANG_PACK_INSTALLED' => '下列語言包已安裝: ',
    'LBL_LANG_PACK_READY' => '下列語言包已準備被安裝: ',
    'LBL_LANG_SUCCESS' => '語言包已經成功上載。',
    'LBL_LANG_TITLE' => '語言包',
    'LBL_LAUNCHING_SILENT_INSTALL' => '現在安裝 SuiteCRM。 這可能需要幾分鐘。',
    'LBL_LANG_UPLOAD' => '上傳語言包',
    'LBL_LICENSE_ACCEPTANCE' => '接受許可協議',
    'LBL_LICENSE_CHECKING' => '檢查系統相容性。',
    'LBL_LICENSE_CHKENV_HEADER' => '檢查系統環境',
    'LBL_LICENSE_CHKDB_HEADER' => '進行資料庫驗證。',
    'LBL_LICENSE_CHECK_PASSED' => '系統通過相容性檢查。',
    'LBL_CREATE_CACHE' => '正在準備安裝...',
    'LBL_LICENSE_REDIRECT' => '正在重定向 ',
    'LBL_LICENSE_I_ACCEPT' => '我接受',
    'LBL_LICENSE_PRINTABLE' => ' 可列印檢視 ',
    'LBL_PRINT_SUMM' => '列印摘要',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM 授權',

    'LBL_LOCALE_NAME_FIRST' => '大衛',
    'LBL_LOCALE_NAME_LAST' => '李文斯頓',
    'LBL_LOCALE_NAME_SALUTATION' => '博士',

    'LBL_ML_ACTION' => '動作',
    'LBL_ML_DESCRIPTION' => '描述',
    'LBL_ML_INSTALLED' => '安裝日期',
    'LBL_ML_NAME' => '名稱',
    'LBL_ML_PUBLISHED' => '發佈日期',
    'LBL_ML_TYPE' => '類型',
    'LBL_ML_UNINSTALLABLE' => '可刪除',
    'LBL_ML_VERSION' => '版本',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli 擴充)',
    'LBL_NEXT' => '下一步',
    'LBL_NO' => '不',
    'LBL_PERFORM_ADMIN_PASSWORD' => '設置網站管理員密碼',
    'LBL_PERFORM_CONFIG_PHP' => '創建 SuiteCRM 設定檔',
    'LBL_PERFORM_CREATE_DB_1' => '<b>創建資料庫</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>在</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => '正在創建資料庫使用者名稱和密碼...',
    'LBL_PERFORM_CREATE_DEFAULT' => '創建預設 SuiteCRM 資料',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => '創建預設的排程程式作業',
    'LBL_PERFORM_DEFAULT_USERS' => '創建預設使用者',
    'LBL_PERFORM_DEMO_DATA' => '填充Demo資料到資料庫中 (這可能需要一點時間)',
    'LBL_PERFORM_DONE' => '完成<br>',
    'LBL_PERFORM_FINISH' => '結束',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM安裝 ',
    'LBL_PERFORM_OUTRO_2' => ' 已完成 ！',
    'LBL_PERFORM_OUTRO_3' => '總時間: ',
    'LBL_PERFORM_OUTRO_4' => ' 秒。',
    'LBL_PERFORM_OUTRO_5' => '記憶體使用: ',
    'LBL_PERFORM_OUTRO_6' => ' 位元組。',
    'LBL_PERFORM_SUCCESS' => '成功！',
    'LBL_PERFORM_TABLES' => '創建 SuiteCRM 應用程式表、 審核表和關係中繼資料',
    'LBL_PERFORM_TITLE' => '執行安裝程式',
    'LBL_PRINT' => '列印',
    'LBL_REG_CONF_1' => '請完成下面這個簡短的表格，用以從 SuiteCRM 接收產品公告、 培訓新聞、 特別優惠和特殊事件邀請。我們不會出售、 出租、 分享或以其他方式分發給協力廠商在這裡收集到的資訊。',
    'LBL_REG_CONF_3' => '感謝您註冊。按一下完成按鈕，登錄到 SuiteCRM。您將需要使用您在步驟 2 中輸入的密碼和使用者名"admin"以進行第一次登錄。',
    'LBL_REG_TITLE' => '註冊',

    'LBL_REQUIRED' => '* 必要欄位',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM 應用程式管理員名稱',
    'LBL_SITECFG_ADMIN_PASS_2' => '再次輸入 SuiteCRM 管理員使用者密碼',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM 管理員使用者密碼',
    'LBL_SITECFG_APP_ID' => '應用程式 ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '如果選中，則必須提供一個應用程式 ID 以覆蓋自動生成的 ID。ID 是用來使一個 SuiteCRM 實例的Session不會被其他實例使用。 如果你有一個 SuiteCRM 的群集，他們都必須共用相同的應用程式 ID。',
    'LBL_SITECFG_CUSTOM_ID' => '提供您自己的應用程式 ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '如果選中，則必須指定一個日誌資料夾來覆蓋 SuiteCRM 預設的設定。不管日誌檔所在的位置，通過 web 瀏覽器訪問它會通過 .htaccess 來限制重定向。',
    'LBL_SITECFG_CUSTOM_LOG' => '自訂日誌資料夾',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '如果選中，您必須提供一個安全的資料夾用於存儲 SuiteCRM Session資訊。這可以防止Session資料在共用伺服器上易出問題。',
    'LBL_SITECFG_CUSTOM_SESSION' => '自訂Session資料夾',
    'LBL_SITECFG_FIX_ERRORS' => '<b>請修復以下錯誤，再繼續:</b>',
    'LBL_SITECFG_LOG_DIR' => '日誌資料夾',
    'LBL_SITECFG_SESSION_PATH' => 'Session資料夾的路徑 <br>(必須是可寫的)',
    'LBL_SITECFG_SITE_SECURITY' => '選擇安全選項',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => '如果選中，系統會定期檢查更新版本的應用程式。',
    'LBL_SITECFG_SUITE_UP' => '自動檢查更新嗎？',
    'LBL_SITECFG_TITLE' => '網站設定',
    'LBL_SITECFG_TITLE2' => '設定管理員帳戶',
    'LBL_SITECFG_SECURITY_TITLE' => '網站安全性',
    'LBL_SITECFG_URL' => 'SuiteCRM 實例的 URL',
    'LBL_SITECFG_ANONSTATS' => '發送匿名使用方式統計資訊？',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '如果選中，SuiteCRM 會向 SuiteCRM 公司發送 有關安裝的 <b>匿名</b> 統計資訊，在每次您的系統檢查新版本時。此資訊將讓我們理解如何更好地使用應用程式和改進該產品。',
    'LBL_SITECFG_URL_MSG' => '輸入將用於安裝後訪問 SuiteCRM 實例的 URL。URL 之後將用作 SuiteCRM 應用程式頁的 Url 的一個基礎。該 URL 應包括 web 伺服器或電腦名稱稱或 IP 位址。',
    'LBL_SITECFG_SYS_NAME_MSG' => '輸入您的系統的名稱。 當使用者訪問 SuiteCRM 應用程式時，此名稱將顯示在瀏覽器標題列中。',
    'LBL_SITECFG_PASSWORD_MSG' => '安裝完成後，您將需要使用 SuiteCRM 管理員使用者 (預設的使用者名 = 管理員) 登錄到 SuiteCRM 實例。 為此管理員使用者輸入密碼。初始登錄後，可以更改此密碼。 您還可以輸入另一個管理員使用者名稱而不使用預設值。',
    'LBL_SITECFG_COLLATION_MSG' => '請選擇您系統的資料庫排序規則。此設定將用來創建您使用的資料表。萬一你的語言不需要特殊設置，請使用預設值。中文推薦使用 utf8_general_ci。',
    'LBL_SPRITE_SUPPORT' => 'Sprite 支援',
    'LBL_SYSTEM_CREDS' => '系統憑證',
    'LBL_SYSTEM_ENV' => '系統環境',
    'LBL_SHOW_PASS' => '顯示密碼',
    'LBL_HIDE_PASS' => '隱藏密碼',
    'LBL_HIDDEN' => '<i>(隱藏)</i>',
    'LBL_STEP1' => '步驟 1 / 2 - 安裝前要求',
    'LBL_STEP2' => '步驟 2 / 2 - 設定',
    'LBL_STEP' => '步驟',
    'LBL_TITLE_WELCOME' => '歡迎來到 SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => '準備安裝了嗎？',
    'REQUIRED_SYS_COMP' => '所需的系統元件',
    'REQUIRED_SYS_COMP_MSG' =>
        '你在開始之前，請務必確認您有以下系統元件的受支援的版本︰ <br>
<ul>
<li>資料庫管理系統 (如：MariaDB，MySQL 或 SQL Server)</li> 
<li>Web 服務器 (Apache，IIS)</li>
</ul> 諮詢相容系統元件安裝的 SuiteCRM 版本的版本資訊中的相容性表格。 <br>',
    'REQUIRED_SYS_CHK' => '初始系統檢查',
    'REQUIRED_SYS_CHK_MSG' =>
        '當你開始安裝過程時，將在 web 伺服器上的 SuiteCRM 檔位於以確保系統組態正確，並且具有所有成功完成安裝所必需的元件執行系統檢查。<br><br>系統檢查所有以下︰ <br><ul><li><b>PHP 版本</b> &#8211; 必須與應用程式相容</li> <li><b>Session變數</b> &#8211; 必須正常運作</li> <li><b>MB 字串</b> &#8211; 必須安裝並啟用在 php.ini</li> <li><b>資料庫支援</b> &#8211; MariaDB，MySQL 或 SQL Server 必須存在</li> <li><b>Config.php</b> &#8211; 必須存在，並且必須具有適當的許可權，使其可寫</li> <li>以下的 SuiteCRM 檔必須是可寫的: <ul><li><b>/custom</li> <li>/cache</li> <li>/modules</li> <li>/upload</b></li></ul></li></ul> 如果檢查失敗，您將無法繼續進行安裝。                                   將顯示一條錯誤訊息，並解釋為什麼您的系統沒有通過檢查。                                  進行任何必要的更改後，您可以接受系統檢查再繼續安裝。<br>',


    'REQUIRED_INSTALLTYPE' => '典型或自訂安裝',
    'REQUIRED_INSTALLTYPE_MSG' =>
        '執行系統檢查後，您可以選擇典型或自訂安裝。<br><br>
對於 <b>典型</b> 和 <b>自訂</b> 安裝，您將需要知道以下資訊︰ <br>
<ul>
<li><b>以下類型的資料庫</b> 將可容納 SuiteCRM 資料 <ul><li>相容的資料庫類型︰ MariaDB，MySQL 或 SQL Server.<br><br></li></ul></li> 
<li><b>資料庫所在的 web 伺服器的名稱</b> 或電腦 (主機) 
<ul><li>如果資料庫是本地電腦上，或與您的 SuiteCRM 檔是在同一個 web 伺服器或電腦上，這情況可能是 <i>localhost</i>。 <br><br></li></ul></li> 
<li><b>資料庫的名稱</b>，你想要使用來儲存 SuiteCRM 資料</li> 
<ul>
<li>也許你想要使用現有資料庫。如果你提供一個現有的資料庫名稱，定義 SuiteCRM 資料庫的架構時，在安裝過程中將刪除現有資料庫中的資料表。</li>
                          <li>如果你未擁有一個資料庫，您提供的名稱將用於在安裝過程中為該實例創建的新資料庫。<br><br></li>
</ul> 
<li><b>資料庫管理員使用者名稱和密碼</b> <ul><li>資料庫管理員應該能夠創建表和使用者並向資料庫寫入。</li>您可能需要與資料庫管理員聯繫獲得此資訊，如果資料庫不位於您的本地電腦和/或如果您不是資料庫管理員的話 <li><br><br></ul></li></li> 
<li><b>SuiteCRM 資料庫使用者名稱和密碼</b>
</li> 
<ul>
<li>使用者可能是資料庫管理員，或者你可能會提供另一個現有的資料庫使用者的名稱。</li>
                          <li>如果您想要創建一個新的資料庫使用者為此目的，你將需要提供一個新的使用者名和密碼，並將在安裝過程中創建使用者。</li>
                        </ul></ul> <p>
為 <b>自訂</b> 安裝，您可能還需要知道以下資訊︰ <br>
<ul>
<li>安裝後 <b>，將用於訪問 SuiteCRM 實例的 URL。</b>                      此 URL 應包括 web 伺服器或電腦名稱或 IP 位址。<br><br></li> 
<li>[Optional] <b>Session 目錄的路徑</b> 如果您想要使用一個自訂Session目錄 SuiteCRM 資訊以防止Session資料在共用伺服器出錯。 <br><br></li> 
<li>[Optional] <b>自訂日誌目錄的路徑</b> 如果你想要重寫 <br>SuiteCRM 日誌的預設目錄<br></li> 
<li>[Optional] <b>應用程式 ID</b> 如果你想要重寫自動生成的 ID，以確保一個 SuiteCRM 實例的Session不被其他實例使用。<br><br></li> 
<li><b>字元集</b> 最常用於在您的地區設定。 <br><br></li></ul> 詳細資訊請參閱安裝指南。                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => '在安裝之前請閱讀以下重要資訊。 在這個時候將幫助您確認是否準備好安裝該應用程式。',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>選擇您的語言</b>',
    'LBL_WELCOME_SETUP_WIZARD' => '安裝精靈',
    'LBL_WIZARD_TITLE' => 'SuiteCRM 安裝精靈: ',
    'LBL_YES' => 'Yes',

    'LBL_PATCHES_TITLE' => '安裝最新的修補程式(更新)',
    'LBL_MODULE_TITLE' => '安裝語言包',
    'LBL_PATCH_1' => '如果你想要跳過此步驟，請按下一步。',
    'LBL_PATCH_TITLE' => '系統修補程式(更新)',
    'LBL_PATCH_READY' => '以下修補程式(更新)已準備好安裝:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM 依賴 PHP Session存儲連接到該 web 伺服器的重要資訊。 您的 PHP 安裝沒有正確配置的Session資訊。           常見錯誤︰ <br><br> 配置是 <b>'session.save_path'</b> 指令不指向一個有效的資料夾。 <br><br>請您修正 <a target=_new href='HTTP://us2.php.net/manual/en/ref.session.php'> PHP 配置</a> 在下方的php.ini 檔案中。",
    'LBL_SESSION_ERR_TITLE' => 'PHP Session 配置錯誤',
    'LBL_SYSTEM_NAME' => '系統名稱',
    'LBL_COLLATION' => '排序規則設置',
    'LBL_REQUIRED_SYSTEM_NAME' => '為 SuiteCRM 提供您的系統名稱。',
    'LBL_PATCH_UPLOAD' => '從您的本地電腦選擇一個修補(更新)檔',
    'LBL_INCOMPATIBLE_PHP_VERSION' => '需要Php5或以上版本.',
    'LBL_MINIMUM_PHP_VERSION' => '所需的最低的 Php 版本是 5.1.0。推薦 Php 版本是 5.2.x。',
    'LBL_YOUR_PHP_VERSION' => '(您當前的PHP版本是 ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' 推薦 php 版本是 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php向後兼容模式已打開. 如果想關閉請將zend.ze1_compatibility_mode設置成off.',
    'LBL_STREAM' => 'PHP 允許使用串流',

    'advanced_password_new_account_email' => array(
        'subject' => '新的帳戶資訊',
        'type' => '系統',
        'description' => '當系統管理員向使用者發送新密碼時，將使用此範本。',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>這是你的使用者名稱及暫時的密碼:</p><p>使用者名稱 : $contact_user_user_name </p><p>使用者密碼: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>當你使用上面的密碼登入後，請修改密碼。</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
這裡是您的帳戶的使用者名稱和臨時密碼︰ 
名稱︰ $contact_user_user_name 
密碼︰ $contact_user_user_hash

$config_site_url 

您使用上面的密碼登錄後，可能需要變更密碼。',
        'name' => '系統生成的密碼電子郵件',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => '重置您的使用者密碼',
        'type' => '系統',
        'description' => "此範本用於將一個使用者發送一個連結，按一下重置使用者帳戶密碼。",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>您最近發送了要求 $contact_user_pwd_last_changed 以修改您的密碼。 </p><p>點下方連結以重置您的密碼:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
你最近上 $contact_user_pwd_last_changed 重置您的帳戶密碼。 

按一下下面的連結來重置您的密碼︰

$contact_user_link_guid',
        'name' => '忘記密碼電子郵件',
    ),


    'two_factor_auth_email' => array(
        'subject' => '雙因素身份驗證碼',
        'type' => '系統',
        'description' => "此範本用於向使用者發送用於雙因素身份驗證的驗證碼。",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>雙因素驗證碼為 <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '雙因素驗證碼為 $code',
        'name' => '雙因素驗證電子郵件',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '“發件人”姓名:',
    'LBL_FROM_ADDR' => '“發件人”地址:',

    'LBL_WIZARD_SMTP_DESC' => '提供電子郵件帳號將會用來寄送電子郵件, 像是指派通知還有新增使用者密碼. 使用者會收到電子郵件從 SuiteCRM, 使用特定的電子郵件帳號.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '選擇電子郵件提供商：',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => '其它',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP伺服器設置',
    'LBL_MAIL_SMTPSERVER' => 'SMTP伺服器地址:',
    'LBL_MAIL_SMTPPORT' => 'SMTP埠:',
    'LBL_MAIL_SMTPAUTH_REQ' => '使用SMTP認證?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => '以SSL或TLS啟用SMTP',
    'LBL_GMAIL_SMTPUSER' => 'Gmail地址:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail密碼:',
    'LBL_ALLOW_DEFAULT_SELECTION' => '允許使用者使用該郵件帳戶外發電子郵件:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '選中此選項後，所有使用者都將能夠發送電子郵件，使用與發送系統通知和警報同一個傳出郵件帳戶。 如果未選中選項，使用者仍然可以提供他們自己的帳戶資訊後，使用傳出的郵件伺服器。',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail 密碼:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange密碼:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange 使用者名稱:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange伺服器埠:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange伺服器:',


    'LBL_MAIL_SMTPUSER' => 'SMTP 使用者名稱:',
    'LBL_MAIL_SMTPPASS' => 'SMTP密碼:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => '商標',
    'LBL_WIZARD_SYSTEM_DESC' => '提供您的組織名稱和Logo，以客製化你的 SuiteCRM。',
    'SYSTEM_NAME_WIZARD' => '名稱:',
    'SYSTEM_NAME_HELP' => '顯示在瀏覽器標題欄的系統名稱',
    'NEW_LOGO' => '上傳新Logo:',
    'NEW_LOGO_HELP' => '圖像檔案格式可以是.jpg 或.png。最大高度是 170px，最大寬度是 450px。任何圖像上傳後如過超過這個尺寸，將被縮放到這些最大的尺寸。',
    'COMPANY_LOGO_UPLOAD_BTN' => '上傳',
    'CURRENT_LOGO' => '當前使用的Logo:',
    'CURRENT_LOGO_HELP' => '這個標幟顯示在 SuiteCRM 應用程序登錄屏幕的中央。',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => '情境選擇',
    'LBL_WIZARD_SCENARIO_DESC' => '這是基於您的要求允許定制的顯示模組。 每個模組都可以透過管理員頁面安裝後啟用。',
    'LBL_WIZARD_SCENARIO_EMPTY' => '在當前設置的設定檔 (config.php)中並未設定任何情境',


    // System Local Settings


    'LBL_LOCALE_TITLE' => '系統本地設置',
    'LBL_WIZARD_LOCALE_DESC' => '請指定 SuiteCRM 如何基於您的地理位置顯示資料。您在此處提供的設定將成為預設設定。使用者可以設置自己的偏好設定。',
    'LBL_DATE_FORMAT' => '日期格式:',
    'LBL_TIME_FORMAT' => '時間格式:',
    'LBL_TIMEZONE' => '時區:',
    'LBL_LANGUAGE' => '語言:',
    'LBL_CURRENCY' => '貨幣:',
    'LBL_CURRENCY_SYMBOL' => '貨幣符號:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 貨幣代碼:',
    'LBL_NUMBER_GROUPING_SEP' => '千位分隔符',
    'LBL_DECIMAL_SEP' => '數字標記',
    'LBL_NAME_FORMAT' => '名稱格式:',
    'UPLOAD_LOGO' => '請稍等Logo上傳..',
    'ERR_UPLOAD_FILETYPE' => '檔案類型不允許，請上傳 jpeg 或 png。',
    'ERR_LANG_UPLOAD_UNKNOWN' => '未知的檔案上傳錯誤。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => '上傳文件大小超出了php.ini文件中變數upload_max_filesize指定的值。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => '上傳文件大小超出了HTML表單中變數MAX_FILE_SIZE指定的值。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => '只上傳了部分文件。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => '沒有上傳文件。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => '缺少臨時文件夾。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => '寫入磁碟文件錯誤。',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => '一個 PHP extension使檔案上傳停止。PHP 無法提供協助確定哪個extension引起檔案上傳停止。',

    'LBL_INSTALL_PROCESS' => '安裝...',

    'LBL_EMAIL_ADDRESS' => '電子郵件地址:',
    'ERR_ADMIN_EMAIL' => '管理員電子郵件地址不正確。',
    'ERR_SITE_URL' => '網站URL是必需的。',

    'STAT_CONFIGURATION' => '正在配置關聯關係......',
    'STAT_CREATE_DB' => '創建資料庫...',

    'STAT_CREATE_DEFAULT_SETTINGS' => '創建預設設置...',
    'STAT_INSTALL_FINISH' => '安裝完成...',
    'STAT_INSTALL_FINISH_LOGIN' => '安裝過程已完成，<a href="%s"> 請登入......</a>',
    'LBL_LICENCE_TOOLTIP' => '請先接受許可協議',

    'LBL_MORE_OPTIONS_TITLE' => '更多選項',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => '資料庫錯誤',
    'LBL_OLD_PHP' => '檢測到舊的 PHP 版本 ！',
    'LBL_OLD_PHP_MSG' => '推薦的 PHP 版本去安裝 SuiteCRM 是 %s <br />最小的 PHP 版本要求是 %s<br />你正在使用 PHP 版本 %s, 是一個過期版本:<a href="http://php.net/eol.php">請考慮升級你的 PHP 版本. ',
    'LBL_OLD_PHP_OK' => '我了解可能存在風險並且想要繼續。',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => '使用者',
    'LBL_DBCONFIG_MSG3_LABEL' => '資料庫名稱',
    'LBL_DBCONFIG_MSG3' => '用來安裝SuiteCRM資料的資料庫名稱:',
    'LBL_DBCONFIG_MSG2_LABEL' => '主機名稱',
    'LBL_DBCONFIG_MSG2' => '資料庫所在的 web 伺服器或電腦 (主機) 的名稱 (如 www.mydomain.com)。如果在本地安裝, 因為性能的影響，最好使用 "\'localhost" 而不是 "127.0.0.1"。',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => '資料庫管理員的使用者名稱和密碼，可以創建資料庫表和使用者和可以寫入資料庫是必要的，以便建立 SuiteCRM 資料庫。'
);
