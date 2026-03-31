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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Неможливо визначити групу',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Неможливо визначити власника',
    'ERR_UW_CONFIG_WRITE' => 'Error updating config.php with new version information.',
    'ERR_UW_CONFIG' => 'Зробіть файл config.php доступним для запису і перезавантажте цю сторінку.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Директорія не доступна для запису',
    'ERR_UW_FILE_NOT_COPIED' => 'Файл не скопійовано',
    'ERR_UW_FILE_NOT_DELETED' => 'Не вдалося видалити пакет',
    'ERR_UW_FILE_NOT_READABLE' => 'Файл не може бути прочитаний',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Файл не може бути переміщений або записаний у',
    'ERR_UW_FLAVOR_2' => 'Версія, що встановлюється:',
    'ERR_UW_FLAVOR' => 'Поточна версія SuiteCRM:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log не може бути створений/записаний. Будь-ласка, встановіть відповідні права доступу на директорію SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'Значення параметра mbstring.func_overload більше 1. Будь ласка, змініть це значення в файлі php.ini та перезавантажте веб-сервер.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Будь ласка, вкажіть файл та спробуйте ще раз!',
    'ERR_UW_NO_FILES' => 'Помилка: не знайдено файлів для перевірки.',
    'ERR_UW_NO_MANIFEST' => 'The zip file is missing a manifest.php file. Cannot proceed.',
    'ERR_UW_NO_VIEW' => 'Вказана невірна сторінка.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Not valid upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Неможливо створити тимчасову директорію. Переконайтеся, що для цього достатньо прав.',
    'ERR_UW_ONLY_PATCHES' => 'You can only upload patches on this page.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Виявлені помилки при попередній перевірці',
    'ERR_UW_UPLOAD_ERR' => 'Помилка завантаження файлу, будь ласка, спробуйте ще раз!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Версія SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'Версія SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Неправильна сторінка',
    'LBL_BUTTON_BACK' => '< Back',
    'LBL_BUTTON_CANCEL' => 'Cancel',
    'LBL_BUTTON_DELETE' => 'Delete Package',
    'LBL_BUTTON_DONE' => 'Done',
    'LBL_BUTTON_EXIT' => 'Exit',
    'LBL_BUTTON_NEXT' => 'Next >',
    'LBL_BUTTON_RECHECK' => 'Відмітити повторно',
    'LBL_BUTTON_RESTART' => 'Почати заново',

    'LBL_UPLOAD_UPGRADE' => 'Завантаження пакету оновлення',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Створення резервної копії',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Резервні файли цього оновлення можуть бути знайдені в',
    'LBL_UW_BACKUP' => 'Створення резервної копії',
    'LBL_UW_CANCEL_DESC' => 'Майстер оновлення був зупинений. Всі тимчасові файли та архіви були видалені. Натисніть кнопку "Готово" для повторного запуску майстра.',
    'LBL_UW_CHECK_ALL' => 'Check All',
    'LBL_UW_CHECKLIST' => 'Стадії оновлення',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Оновлення: перезаписати файли вручну',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Будь ласка, для перезапису файлів використовуйте найбільш зручний для вас спосіб. Поки Ви цього не зробите, система буде перебувати у нестабільному стані і оновлення не буде завершено.',
    'LBL_UW_COMPLETE' => 'Complete',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Всі системні вимоги виконані',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Налаштування PHP: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Module',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Module',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Модуль MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Параметр MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Налаштування PHP: Максимальний розмір використовуваної пам&#039;яті',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimum Database Version',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Розташування php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Мінімальна версія PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Налаштування PHP: безпечний режим',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Виявлені налаштування',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Support',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Успішно скопійовані файли',

    'LBL_UW_DB_CHOICE1' => 'Виконання SQL-запиту майстром оновлення',
    'LBL_UW_DB_CHOICE2' => 'Виконання SQL-запиту вручну',
    'LBL_UW_DB_ISSUES_PERMS' => 'Привілеї бази даних',
    'LBL_UW_DB_METHOD' => 'Метод оновлення бази даних',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Всі доступні привілеї ',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Необхідний привілей',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Були встановлені наступні оновлення:',
    'LBL_UW_END_LOGOUT_PRE' => 'Оновлення завершено',
    'LBL_UW_END_LOGOUT_PRE2' => 'Натисніть Готово для виходу з Майстра Оновлення',
    'LBL_UW_END_LOGOUT' => 'Оновлення завершено. Будь ласка, вийдіть і увійдіть в систему заново, якщо ви плануєте в даний момент продовжити оновлення, використовуючи Майстер оновлення.',

    'LBL_UW_FILE_DELETED' => 'був видалений.',
    'LBL_UW_FILE_GROUP' => 'Group',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Права доступу до файлів:',
    'LBL_UW_FILE_NO_ERRORS' => 'Всі файли доступні для запису',
    'LBL_UW_FILE_OWNER' => 'Owner',
    'LBL_UW_FILE_PERMS' => 'Права доступу',
    'LBL_UW_FILE_UPLOADED' => 'було завантажено',
    'LBL_UW_FILE' => 'Ім\'я файлу',
    'LBL_UW_FILES_QUEUED' => 'Наступні оновлення готові до встановлення:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Натисніть Далі для завантаження оновлень.',
    'LBL_UW_FROZEN' => 'Перед тим як продовжити, необхідно виконати наступні дії:',
    'LBL_UW_HIDE_DETAILS' => 'Hide Details',
    'LBL_UW_IN_PROGRESS' => 'In Progress',
    'LBL_UW_INCLUDING' => 'Including',
    'LBL_UW_INCOMPLETE' => 'Не закінчено',
    'LBL_UW_MANUAL_MERGE' => 'Перезапис файлу:',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Встановлених оновлень не виявлено.',
    'LBL_UW_NONE' => 'None',
    'LBL_UW_OVERWRITE_DESC' => 'Всі змінені файли будуть перезаписані, включаючи файли вихідного коду, а також шаблони. Продовжити?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Створити завдання для перезапису вручну?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Відправити собі лист з нагадуванням про перезапис вручну?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Перераховані файли будуть змінені. Зніміть позначку з тих файлів, для яких буде виконано перезапис вручну. <i>Файли, які не потребують зміни залишилися невідміченими; встановлення позначки призведе до їх перезапису.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Не потрібен перезапис файлів вручну.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Немає необхідності.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Файли, залишені без змін:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Попередню перевірку пройдено успішно.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Натисніть кнопку "Далі" для застосування змін.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Будь ласка, зверніть увагу, що процес оновлення, який залишився, є обов&#039;язковим, і натиснувши на кнопку "Продовжити" Ви будете повинні завершити процес. Якщо Ви не хочете продовжувати, натисніть кнопку скасування.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Перезаписати всі файли',

    'LBL_UW_REBUILD_TITLE' => 'Результати оновлення',
    'LBL_UW_SCHEMA_CHANGE' => 'Зміни схеми',

    'LBL_UW_SHOW_COMPLIANCE' => 'Показати виявлені налаштування',
    'LBL_UW_SHOW_DB_PERMS' => 'Показати відсутні права доступу до бази даних.',
    'LBL_UW_SHOW_DETAILS' => 'Show Details',
    'LBL_UW_SHOW_DIFFS' => 'Показати файли, необхідні для перезапису вручну',
    'LBL_UW_SHOW_NW_FILES' => 'Показати файли з недостатніми правами доступу',
    'LBL_UW_SHOW_SCHEMA' => 'Показати скрипт зміни схеми',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Показати некоректні запити',
    'LBL_UW_SHOW' => 'Show',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Пропущені файли',
    'LBL_UW_SQL_RUN' => 'Перевіряти, коли запит був виконаний вручну',
    'LBL_UW_START_DESC' => 'Ласкаво просимо до майстра оновлень. Майстер створений для того, щоб допомогти адміністратору при оновленні системи SuiteCRM. ',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Натисніть кнопку "Продовжити" для перевірки системи, щоб переконатися в тому, що вона готова до оновлення. Перевірка включає в себе права доступу до файлів, привілеї баз даних та налаштування сервера.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Майстер оновлення зараз продовжить оновлення системи.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Ласкаво просимо до майстра оновлення',

    'LBL_UW_TITLE_CANCEL' => 'Cancel',
    'LBL_UW_TITLE_COMMIT' => 'Виконання оновлення',
    'LBL_UW_TITLE_END' => 'Останні штрихи',
    'LBL_UW_TITLE_PREFLIGHT' => 'Попередня перевірка',
    'LBL_UW_TITLE_START' => 'Welcome',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Перевірка системи',
    'LBL_UW_TITLE_UPLOAD' => 'Завантаження оновлення',
    'LBL_UW_TITLE' => 'Upgrade Wizard',
    'LBL_UW_UNINSTALL' => 'Uninstall',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Прийняти ліцензію',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Конвертувати ліцензію',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Виконується початковий етап оновлення',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Виконується перевірка системи',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Виконується перевірка ліцензії',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Виконується попередня перевірка',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Виконується копіювання файлів',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Виконується основний етап оновлення',
    'LBL_UW_COMMIT_DESC' => 'Натисніть "Продовжити", щоб запустити додаткові скрипти для оновлення.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Виконується оновлення скриптів',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Виконується заключний етап оновлення',
    'LBL_UPGRADE_IN_PROGRESS' => 'у процесі',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Витрачений час',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Оновлення скасовано, виконується очищення',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Оновлення може зайняти деякий час',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Виконується перевірка завантаженого пакета оновлення',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Виконується завантаження пакету оновлень',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Майстер Оновлення видаляє стару схему 451',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Очистити старі схеми вручну після завершення оновлення',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Метод очищення старих схем',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Показувати старі схеми, які можна очистити',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Пропущені запити',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Your version of PHP is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Action',
    'LBL_ML_CANCEL' => 'Cancel',
    'LBL_ML_COMMIT' => 'Commit',
    'LBL_ML_DESCRIPTION' => 'Опис',
    'LBL_ML_INSTALLED' => 'Date Installed',
    'LBL_ML_NAME' => 'Назва',
    'LBL_ML_PUBLISHED' => 'Date Published',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_ML_INSTALL' => 'Install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Поточна версія php: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Майстер оновлення',
    'LBL_UPLOAD_SUCCESS' => 'Оновлення успішно завантажено. Натисніть "Продовжити" для остаточної перевірки.',
    'LBL_UW_TITLE_LAYOUTS' => 'Затвердити макети',
    'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
    'LBL_LAYOUT_MERGE_DESC' => 'Доступні нові поля, які були додані під час оновлення і можуть бути автоматично застосовані до існуючого зовнішньому вигляду ваших модулів. Більше про нові полях можна дізнатися в Release Notes версії, до якої Ви оновлюєте систему. Якщо Ви не бажаєте додавати нові поля, зніміть позначку з модуля і Ваші налаштування залишаться без змін. Поля будуть доступні в Студії після завершення оновлення.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Натисніть "продовжити", щоб підтвердити зміни і закінчити оновлення.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Натисніть "продовжити", щоб закінчити оновлення.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirm Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Підтвердити результати макетів',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Наступні макети були успішно перезаписані:',
    'LBL_SELECT_FILE' => 'Вибір файлу',
    'ERROR_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'LBL_LANGPACKS' => 'Мовні пакети' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Часткові оновлення системи' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Themes' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Робочий процес' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'The uploaded file was only partially uploaded.',
        4 => 'No file was uploaded.',
        5 => 'Невідома помилка.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'Завантаження файлу зупинено розширенням.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
