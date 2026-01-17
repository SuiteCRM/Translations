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
    'LBL_BASIC_SEARCH' => 'Експрес фільтр',
    'LBL_ADVANCED_SEARCH' => 'Розширений фільтр',
    'LBL_BASIC_TYPE' => 'Базовий тип',
    'LBL_ADVANCED_TYPE' => 'Розширений тип',
    'LBL_SYSOPTS_2' => 'Який тип бази даних буде використовуватися в системі?',
    'LBL_SYSOPTS_DB' => 'Вкажіть тип бази даних',
    'LBL_SYSOPTS_DB_TITLE' => 'Тип бази даних',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Будь ласка, виправте наступні помилки перед тим, як продовжити:',
    'ERR_DB_VERSION_FAILURE' => 'Не в змозі перевірити версію бази даних.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Введіть логін адміністратора SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Введіть пароль адміністратора SuiteCRM.',

    'ERR_CHECKSYS' => 'У процесі перевірки сумісності були виявлені помилки. Для того, щоб ваша система функціонувала правильно, будь ласка, виконайте необхідні дії над пунктами, вказаними нижче, і повторіть перевірку, або почати установку заново.',
    'ERR_CHECKSYS_CALL_TIME' => 'Параметр "Allow Call Time Pass Reference" увімкнений (потрібно змінити його значення в php.ini на Off)',
    'ERR_CHECKSYS_CURL' => 'Не знайдено: Планувальник SuiteCRM буде запущений з обмеженою функціональністю.',
    'ERR_CHECKSYS_IMAP' => 'Не знайдено IMAP бібліотеки: Для нормальної роботи вхідної пошти і маркетингових кампаній необхідна наявність цих модулів.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Встановіть значення на',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M або більше в php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Увага: Недоступно для запису',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ваша версія PHP не підтримується в SuiteCRM. Вам необхідно буде встановити версію, яка підтримується додатком SuiteCRM. Будь ласка, зверніться до Матриці Сумісності в примітках до Версії, щоб дізнатися, які версії PHP підтримуються. Ваша поточна версія: ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Ваша версія IIS не підтримується в SuiteCRM. Вам необхідно буде встановити версію, яка підтримується додатком SuiteCRM. Будь ласка, зверніться до Матриці Сумісності в примітках до Версії, щоб дізнатися, які версії IIS підтримуються. Ваша поточна версія:',
    'ERR_CHECKSYS_FASTCGI' => 'Було помічено, що ви не використовуєте FastCGI handler mapping для PHP. Вам необхідно буде встановити версію, яка підтримується додатком SuiteCRM. Будь ласка, зверніться до Матриці Сумісності в примітках до Версії, щоб дізнатися, які версії підтримуються. Будь ласка, пройдіть за посиланням <a href="http://www.iis.net/php/">http://www.iis.net/php/</a>, щоб отримати більше інформації.',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Для оптимального використання IIS / FastCGI SAPI, встановіть параметр fastcgi.logging файл php.ini рівним 0.',
    'LBL_DB_UNAVAILABLE' => 'База даних недоступна',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Підтримка бази даних не виявлено. Переконайтеся, що у вас є необхідні драйвера для одного з наступних типів БД: MySQL, MS SQLServer або Oracle. Ймовірно, вам необхідно розкоментувати відповідне розширення файлу php.ini, або перекомпілювати бінарний файл у відповідності з вашою версією PHP. Будь ласка, зверніться до посібника користувача PHP за більш докладною інформацією про підтримку вашого типу БД.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Функції для роботи з XML-парсером не виявлені. Ймовірно, вам необхідно розкоментувати відповідне розширення файлу php.ini, або перекомпілювати бінарний файл у відповідності з вашою версією PHP. Будь ласка, зверніться до посібника користувача PHP за більш детальною інформацією.',
    'ERR_CHECKSYS_MBSTRING' => 'Не знайдено функцію, пов&#039;язану із розширенням MBSTRING. <br /><br />Зазвичай модуль MBSTRING не включений за умовчанням в PHP і повинен бути активований шляхом додавання опції --enable-mbstring при зборці PHP. Будь ласка, зверніться до посібника користувача PHP за більш детальною інформацією.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Функцій, пов’язаних із бібліотеками аналізатора JSON, які потрібні програмі SuiteCRM, не знайдено. Можливо, вам доведеться розкоментувати розширення у файлі php.ini або перекомпілювати за допомогою потрібного двійкового файлу, залежно від вашої версії PHP. Для отримання додаткової інформації зверніться до посібника PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Перевизначення Config',
    'ERR_CHECKSYS_SAFE_MODE' => 'Безпечний режим включений (вимкнути цю опцію можна у php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Не знайдено: модуль zlib, що дозволяє підвищити продуктивність SuiteCRM при використанні zlib-стиснення.',
    'ERR_CHECKSYS_ZIP' => 'Не знайдена підтримка ZIP. SuiteCRM потрібна підтримка ZIP-архівів для обробки стислих файлів.',
    'ERR_CHECKSYS_PCRE' => 'PCRE бібліотеку не знайдено: SuiteCRM потребує PCRE бібліотеки для того, щоб обробляти регулярні вирази Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Версія PCRE бібліотеки: SuiteCRM потребує PCRE версії 7.0 або вище для того, щоб обробляти регулярні вирази Perl.',
    'ERR_DB_ADMIN' => 'Ім&#039;я адміністратора бази даних і/або пароль неправильні. Неможливо з&#039;єднатися з базою даних. Будь ласка, введіть коректні логін і пароль. (Помилка:',
    'ERR_DB_ADMIN_MSSQL' => 'Ім\'я адміністратора бази даних і/або пароль неправильні. Неможливо з\'єднатися з базою даних. Будь ласка, введіть коректні логін і пароль.',
    'ERR_DB_EXISTS_NOT' => 'Ця база даних не існує.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'База даних вже існує. Щоб встановити систему з обраної базою даних, перезапустіть процес установки і виберіть пункт "Видалити і створити заново існуючі таблиці SugarCRM?". Для оновлення системи використовуйте Майстер Оновлень в панелі адміністратора. Більш детальну інформацію про процес оновлення Ви можете отримати <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">тут</a>.',
    'ERR_DB_EXISTS' => 'База даних з таким ім&#039;ям вже існує, не можна створити ще одну базу з таким же ім&#039;ям.',
    'ERR_DB_EXISTS_PROCEED' => 'База даних з таким ім&#039;ям вже існує. Ви можете: <br />1. натиснути на кнопку &quot;Назад&quot; і вказати інше ім&#039;я бази даних<br />2. натиснути на кнопку &quot;Далі&quot; і продовжити установку, але в цьому випадку <strong> всі таблиці в цій базі даних будуть видалені.</strong>',
    'ERR_DB_HOSTNAME' => 'Ім&#039;я хоста не може бути порожнім.',
    'ERR_DB_INVALID' => 'Обраний неправильний тип бази даних',
    'ERR_DB_LOGIN_FAILURE' => 'Наданий сервер бази даних, логін і пароль неправильні, та з&#039;єднання з базою даних не було встановлено. Будь ласка, введіть дійсні сервер бази даних, логін і пароль.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Наданий сервер бази даних, логін і пароль неправильні, та з&#039;єднання з базою даних не було встановлено. Будь ласка, введіть дійсні сервер бази даних, логін і пароль.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Наданий сервер бази даних, логін і пароль неправильні, та з&#039;єднання з базою даних не було встановлено. Будь ласка, введіть дійсні сервер бази даних, логін і пароль.',
    'ERR_DB_MYSQL_VERSION' => 'Ваша версія MySQL не підтримується в SuiteCRM. Вам необхідно буде встановити версію, яка підтримується додатком SuiteCRM. Будь ласка, зверніться до Матриці Сумісності в примітках до Версії, щоб дізнатися, які версії MySQLпідтримуються. Ваша поточна версія:  (%s).',
    'ERR_DB_NAME' => 'Назва бази даних не повинна бути порожньою.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Ім&#039;я бази даних не може містити &#039;\\&#039;, &#039;/&#039; або &#039;.&#039;",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Ім&#039;я бази даних не може містити наступні символи: &#039;&quot;&#039;, &quot;&#039;&quot;, &#039;*&#039;, &#039;/&#039;, &#039;\\&#039;, &#039;?&#039;, &#039;:&#039;, &#039;<&#039;, &#039;>&#039;, &#039;-&#039;",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Ім'я бази даних може складатися лише з літер, цифр і символів '#', '_' або '$'",
    'ERR_DB_PASSWORD' => 'Паролі адміністратора бази даних SuiteCRM не збігаються. Будь ласка, введіть їх ще раз.',
    'ERR_DB_PRIV_USER' => 'Необхідний логін адміністратора.',
    'ERR_DB_USER_EXISTS' => 'Користувач із вказаним ім&#039;ям вже існує в базі даних SuiteCRM. Не можна створити ще одного користувача з таким же ім&#039;ям. Будь ласка, введіть нове ім&#039;я користувача.',
    'ERR_DB_USER' => 'Будь ласка, введіть логін адміністратора бази даних SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Будь ласка, виправте наступні помилки перед тим, як продовжити:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Паролі користувача бази даних SuiteCRM не збігаються. Будь ласка, введіть їх ще раз.',
    'ERR_ERROR_GENERAL' => 'Були виявлені наступні помилки:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Неможливо видалити файл:',
    'ERR_LANG_MISSING_FILE' => 'Не вдається знайти файл:',
    'ERR_LANG_NO_LANG_FILE' => 'Не знайдено мовний файл у include/language:',
    'ERR_LANG_UPLOAD_1' => 'Завантаження не вдалася. Будь ласка, спробуйте ще раз.',
    'ERR_LANG_UPLOAD_2' => 'Мовні пакети повинні бути ZIP-архівами.',
    'ERR_LANG_UPLOAD_3' => 'PHP не може перенести тимчасовий файл у папку оновлення.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Вказана неправильна папка.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Вказана тека недоступна для запису.',
    'ERR_NO_DIRECT_SCRIPT' => 'Не вдалося обробити скрипт.',
    'ERR_NO_SINGLE_QUOTE' => 'Не можна використовувати одинарні лапки для',
    'ERR_PASSWORD_MISMATCH' => 'Паролі адміністратора для SuiteCRM не збігаються. Будь ласка, введіть паролі ще раз.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Неможливо записати в файл config.php.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Ви можете продовжити установку, створивши файл config.php вручну і скопіювавши туди нижченаведену інформацію по конфігурації. Але переконайтеся, що config.php файл створений до переходу до наступного кроку.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Ви не забули створити файл config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Попередження: неможливо записати в файл config.php. Будь ласка, переконайтеся, що файл існує.',
    'ERR_PERFORM_HTACCESS_1' => 'Не можу записати в',
    'ERR_PERFORM_HTACCESS_2' => 'файл.',
    'ERR_PERFORM_HTACCESS_3' => 'Якщо Ви хочете захистити ваш файл записів від читання його браузером, створіть файл .htaccess з наступного рядком:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Неможливо підключитися до інтернету.</b>Коли з&#039;єднання буде доступне, будь ласка, зареєструйтеся в SuiteCRM за посиланням: <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a>.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Вказана неправильна папка для файлів сесій.',
    'ERR_SESSION_DIRECTORY' => 'Вказана тека сесій недоступна для запису.',
    'ERR_SESSION_PATH' => 'Якщо Ви вирішили вказати власну папку для файлів сесій - вкажіть її розташування.',
    'ERR_SI_NO_CONFIG' => 'Ви не помістили файл config_si.php в кореневу папку або ж не визначили змінну $sugar_config_si у файлі config.php',
    'ERR_SITE_GUID' => 'Якщо Ви вирішили вказати власний код додатка - вкажіть його',
    'ERROR_SPRITE_SUPPORT' => "В даний час ми не вдалося знайти GD бібліотеку, в результаті ви не зможете використовувати CSS спрайт.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Максимальний розмір завантажуваного файлу',
    'ERR_URL_BLANK' => 'URL до SuiteCRM не може бути порожнім.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Неможливо визначити інсталяційний запис для',
    'ERROR_MANIFEST_TYPE' => 'У Manifest-файлі повинен бути вказаний тип пакету.',
    'ERROR_PACKAGE_TYPE' => 'У Manifest-файлі вказано невідомий тип пакету',
    'ERROR_VERSION_INCOMPATIBLE' => 'Завантажуваний файл не сумісний з встановленою версією SuiteCRM Suite:',

    'LBL_BACK' => 'Назад',
    'LBL_CANCEL' => 'Скасування',
    'LBL_ACCEPT' => 'Приймаю',
    'LBL_CHECKSYS_CACHE' => 'Доступні для запису підпапки папки Cache.',
    'LBL_DROP_DB_CONFIRM' => 'База даних вже існує. Ви хочете продовжити і видалити поточні таблиці? Будуть знищені всі існуючі дані.',
    'LBL_CHECKSYS_COMPONENT' => 'Основні компоненти',
    'LBL_CHECKSYS_CONFIG' => 'Доступний для запису файл налаштування config.php',
    'LBL_CHECKSYS_CURL' => 'Модуль cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Доступна для запису користувача директорія',
    'LBL_CHECKSYS_DATA' => 'Доступні для запису підпапки папки Data',
    'LBL_CHECKSYS_IMAP' => 'Модуль IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Модуль MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'ОК (немає обмеження)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'ОК (немає обмеження)',
    'LBL_CHECKSYS_MEM' => 'Ліміт пам&#039;яті PHP',
    'LBL_CHECKSYS_MODULE' => 'Доступні для запису підпапки та файли модулів',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Не доступно',
    'LBL_CHECKSYS_OK' => 'Гаразд',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'Версія PHP',
    'LBL_CHECKSYS_IISVER' => 'Версія IIS',
    'LBL_CHECKSYS_JSON' => 'Розбір JSON',
    'LBL_CHECKSYS_RECHECK' => 'Перевірити знову',
    'LBL_CHECKSYS_STATUS' => 'Статус',
    'LBL_CHECKSYS_TITLE' => 'Перевірка системних вимог',
    'LBL_CHECKSYS_XML' => 'XML Parsingм',
    'LBL_CHECKSYS_ZLIB' => 'Модуль ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Модуль обробки архівів ZIP -',
    'LBL_CHECKSYS_PCRE' => 'PCRE бібліотека',
    'LBL_CHECKSYS_FIX_FILES' => 'Будь ласка, налаштуйте права доступу до наступних файлів/папок:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Будь ласка, налаштуйте права доступу до наступних модулів і в файлах, які вони містять:',
    'LBL_CHECKSYS_UPLOAD' => 'Доступна для запису директорія завантажень',
    'LBL_CLOSE' => 'Закрити',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'буде створена',
    'LBL_CONFIRM_DB_TYPE' => 'Тип бази даних',
    'LBL_CONFIRM_NOT' => 'не',
    'LBL_CONFIRM_TITLE' => 'Підтвердити налаштування',
    'LBL_CONFIRM_WILL' => 'буде',
    'LBL_DBCONF_DB_DROP' => 'Видалення таблиць',
    'LBL_DBCONF_DB_NAME' => 'Назва бази даних',
    'LBL_DBCONF_DB_PASSWORD' => 'Пароль користувача бази даних',
    'LBL_DBCONF_DB_PASSWORD2' => 'Повтор пароля користувача бази даних',
    'LBL_DBCONF_DB_USER' => 'Користувач бази даних SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Користувач бази даних SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Логін Адміністратора бази даних',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Пароль Адміністратора бази даних',
    'LBL_DBCONF_COLLATION' => 'Порівняння:',
    'LBL_DBCONF_CHARSET' => 'Кодування',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Розширена конфігурація бази даних',
    'LBL_DBCONF_DEMO_DATA' => 'Заповнити базу даних демонстраційними даними?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Вибрати демонстраційні дані',
    'LBL_DBCONF_HOST_NAME' => 'Ім&#039;я сервера',
    'LBL_DBCONF_HOST_INSTANCE' => 'Екземпляр хоста',
    'LBL_DBCONFIG_SECURITY' => 'В цілях безпеки, необхідний користувач з ексклюзивними правами адміністратора доступу до бази даних SuiteCRM. Цей користувач повинен мати права вносити і змінювати дані в базі даних SuiteCRM. Він може бути створений зараз або ж ви можете вказати вже існуючого користувача або ж вибрати адміністратора, зазначеного вище.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Вказати існуючого користувача',
    'LBL_DBCONFIG_CREATE_DD' => 'Створити користувача',
    'LBL_DBCONFIG_SAME_DD' => 'Створити з Адміністратора',
    'LBL_DBCONF_TITLE' => 'Конфігурація бази даних',
    'LBL_DBCONF_TITLE_NAME' => 'Введіть назву бази даних',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Інформація про користувача бази даних',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Пароль',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Інсталятор вже був одного разу запущений. В цілях безпеки можливість повторного запуску інсталятора відключена. Якщо ви абсолютно впевнені, що хочете запустити його ще раз, будь ласка, у файлі config.php встановіть значення змінної &#039; installer_locked&#039; в &#039; false&#039;. Рядок повинен виглядати наступним чином:',
    'LBL_DISABLED_HELP_1' => 'За додатковою інформацією про процесі установки звертайтеся на сайт SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'Установка SuiteCRM призупинена',
    'LBL_HELP' => 'Довідка',
    'LBL_INSTALL' => 'Встановити',
    'LBL_INSTALL_TYPE_TITLE' => 'Параметри встановлення',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Виберіть тип установки',
    'LBL_INSTALL_TYPE_TYPICAL' => 'Звичайна установка',
    'LBL_INSTALL_TYPE_CUSTOM' => 'Вибіркове встановлення',
    'LBL_INSTALL_TYPE_MSG2' => 'Для установки потрібно мінімум інформації. Рекомендується для нових користувачів.',
    'LBL_INSTALL_TYPE_MSG3' => 'Надає можливість додаткових установок під час установки. Більшість цих опцій доступно також і після встановлення з екрану адміністратора. Рекомендується для просунутих користувачів.',
    'LBL_LANG_1' => 'Для використання в SuiteCRM мови, відмінного від мови за замовчуванням (US-English), Ви можете завантажити та встановити зараз мовний пакет. Ви також зможете завантажити і встановити мовний пакет з-під додатка SuiteCRM. Якщо бажаєте пропустити цей крок, натисніть &quot;Далі&quot;.',
    'LBL_LANG_BUTTON_COMMIT' => 'Встановити',
    'LBL_LANG_BUTTON_REMOVE' => 'Видалити',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Деінсталяція',
    'LBL_LANG_BUTTON_UPLOAD' => 'Завантажити',
    'LBL_LANG_NO_PACKS' => 'немає',
    'LBL_LANG_PACK_INSTALLED' => 'Були встановлені наступні мовні пакети:',
    'LBL_LANG_PACK_READY' => 'Наступні мовні пакети готові до установки:',
    'LBL_LANG_SUCCESS' => 'Мовні пакети були завантажені успішно.',
    'LBL_LANG_TITLE' => 'Мовний пакет',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Йде установка SuiteCRM. Це може зайняти кілька хвилин.',
    'LBL_LANG_UPLOAD' => 'Завантажити мовний пакет',
    'LBL_LICENSE_ACCEPTANCE' => 'Прийняття ліцензії',
    'LBL_LICENSE_CHECKING' => 'Перевірка сумісності системи',
    'LBL_LICENSE_CHKENV_HEADER' => 'Перевірка оточення',
    'LBL_LICENSE_CHKDB_HEADER' => 'Перевірка прав доступу до бази даних',
    'LBL_LICENSE_CHECK_PASSED' => 'Система пройшла перевірку на сумісність',
    'LBL_CREATE_CACHE' => 'Підготовка до установки...',
    'LBL_LICENSE_REDIRECT' => 'Перенаправлення в',
    'LBL_LICENSE_I_ACCEPT' => 'Приймаю',
    'LBL_LICENSE_PRINTABLE' => 'Друкарський вигляд',
    'LBL_PRINT_SUMM' => 'Роздрукувати звіт',
    'LBL_LICENSE_TITLE_2' => 'Ліцензія SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'Петро',
    'LBL_LOCALE_NAME_LAST' => 'Петров',
    'LBL_LOCALE_NAME_SALUTATION' => 'Д-р',

    'LBL_ML_ACTION' => 'Дія',
    'LBL_ML_DESCRIPTION' => 'Опис',
    'LBL_ML_INSTALLED' => 'Дата установки',
    'LBL_ML_NAME' => 'Назва',
    'LBL_ML_PUBLISHED' => 'Дата публікації',
    'LBL_ML_TYPE' => 'Тип',
    'LBL_ML_UNINSTALLABLE' => 'Деінсталяція',
    'LBL_ML_VERSION' => 'Версія',
    'LBL_MSSQL' => 'SQL сервер',
    'LBL_MSSQL2' => 'Сервер SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'Сервер SQL (Microsoft SQL Server драйвер для PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (розширення. mysqli)',
    'LBL_NEXT' => 'Далі',
    'LBL_NO' => 'Ні',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Установка пароля адміністратора сайту',
    'LBL_PERFORM_CONFIG_PHP' => 'Створення файлу конфігурації SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Створення бази даних',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>на</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Створення імені користувача та пароля для бази даних...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Створення даних SuiteCRM за замовчуванням',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Створення запланованих завдань за замовчуванням',
    'LBL_PERFORM_DEFAULT_USERS' => 'Створення користувачів за замовчуванням',
    'LBL_PERFORM_DEMO_DATA' => 'Заповнення таблиць бази даних демонстраційними даними (це може зайняти деякий час)',
    'LBL_PERFORM_DONE' => 'готово<br>',
    'LBL_PERFORM_FINISH' => 'Готово',
    'LBL_PERFORM_OUTRO_1' => 'Налаштування SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'завершена!',
    'LBL_PERFORM_OUTRO_3' => 'Загальний час:',
    'LBL_PERFORM_OUTRO_4' => 'секунд.',
    'LBL_PERFORM_OUTRO_5' => 'Приблизна кількість використаної пам&#039;яті:',
    'LBL_PERFORM_OUTRO_6' => 'байт.',
    'LBL_PERFORM_SUCCESS' => 'Успішно!',
    'LBL_PERFORM_TABLES' => 'Створення таблиць додатків SuiteCRM, таблиць аудиту та метаданих відносин',
    'LBL_PERFORM_TITLE' => 'Налаштування',
    'LBL_PRINT' => 'Друк',
    'LBL_REG_CONF_1' => 'Будь ласка, заповніть коротку форму нижче, щоб отримувати інформацію про продукти, новини про тренінги, спеціальні пропозиції та запрошення на спеціальні події від SuiteCRM. Ми не продаємо, не даємо в використання і не розповсюджуємо будь-яким іншим чином інформацію, отриману від третіх сторін.',
    'LBL_REG_CONF_3' => 'Дякуємо за реєстрацію. Натисніть кнопку &quot;Завершити&quot; для входу в SuiteCRM. В перший раз вам потрібно увійти в систему, використовуючи ім&#039;я користувача &quot;admin&quot; і пароль, який ви вибрали в Кроці 2.',
    'LBL_REG_TITLE' => 'Реєстрація',

    'LBL_REQUIRED' => '* Обов&#039;язкове поле',

    'LBL_SITECFG_ADMIN_Name' => 'Ім&#039;я адміністратора додатку SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Введіть пароль адміністратора SuiteCRM ще раз',
    'LBL_SITECFG_ADMIN_PASS' => 'Пароль адміністратора SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID додатка',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'У разі вибору, Вам необхідно надати ID додатка замість автоматично згенерованого ID. ID підтверджує, що сесії даного екземпляра SuiteCRM не використовуються іншими екземплярами. Якщо у Вас є кластер встановлених SuiteCRM, у них у всіх повинен бути один і той же ID додатка.',
    'LBL_SITECFG_CUSTOM_ID' => 'Введіть свій власний ID додатка',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'У разі вибору, Вам необхідно позначити папку логів замість папки за промовчанням для логів SuiteCRM. Не залежно від того, де знаходиться файл логів, доступ до нього через веб-браузер буде обмежений через перенаправлення .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Використовувати Індивідуальну папку логів',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'У разі вибору, Вам необхідно буде вказати захищену папку для зберігання інформації про сесії SuiteCRM. Це може бути зроблено для запобігання незахищеності даних на загальних серверах.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Використовувати Індивідуальну папку сесій для SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => 'Будь ласка, виправте наступні помилки перед тим, як продовжити:',
    'LBL_SITECFG_LOG_DIR' => 'Папка логів',
    'LBL_SITECFG_SESSION_PATH' => 'Шлях до Папки сесій <br />(повинен бути дійсним)',
    'LBL_SITECFG_SITE_SECURITY' => 'Виберіть опції безпеки',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'У разі вибору, система періодично перевірятиме наявність оновлень для додатка.',
    'LBL_SITECFG_SUITE_UP' => 'Автоматично перевіряти наявність оновлень?',
    'LBL_SITECFG_TITLE' => 'Конфігурація сайту',
    'LBL_SITECFG_TITLE2' => 'Встановити користувача з правами адміністратора',
    'LBL_SITECFG_SECURITY_TITLE' => 'Безпека сайту',
    'LBL_SITECFG_URL' => 'URL для заданого зразка SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Відправляти анонімну статистику про використання?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'У разі вибору, SuiteCRM буде відправляти анонімну статистику про Ваш екземпляр SuiteCRM в SuiteCRM Inc. кожен раз, коли система перевіряє наявність нових версій. Ця інформація допоможе нам краще зрозуміти, як використовується додаток і допоможе поліпшити продукт.',
    'LBL_SITECFG_URL_MSG' => 'Введіть URL, який буде використовуватися для доступу до даного екземпляра SuiteCRM після установки. Цей URL так само буде використаний як основа для адрес сторінок додатків SuiteCRM. URL повинен включати в себе веб сервер, назва комп&#039;ютера або IP-адреса.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Введіть ім&#039;я Вашої системи. Це ім&#039;я буде відображатися в заголовку сторінки браузера коли користувачі будуть заходити на сторінки додатків SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Після установки, для входу в систему Вам необхідно буде використовувати користувача-адміністратора SuiteCRM (ім&#039;я користувача за замовчуванням = admin). Введіть пароль для цього користувача з правами адміністратора. Цей пароль може бути змінений після першого входу. Ви так само можете використовувати інше ім&#039;я адміністратора, крім того, що надається за замовчуванням.',
    'LBL_SITECFG_COLLATION_MSG' => 'Виберіть настройки сортування (collation) для вашої системи. Цей параметри створить таблиці з мовою яку ви використовуєте. У випадку, якщо ваша мова не вимагає спеціальних настройок, будь ласка, використовуйте значення за промовчанням.',
    'LBL_SPRITE_SUPPORT' => 'Підтримка CSS-спрайтів',
    'LBL_SYSTEM_CREDS' => 'Системні повноваження',
    'LBL_SYSTEM_ENV' => 'Системне оточення',
    'LBL_SHOW_PASS' => 'Показати паролі',
    'LBL_HIDE_PASS' => 'Приховати паролі',
    'LBL_HIDDEN' => '(прихований)',
    'LBL_STEP1' => 'Крок 1 із 2 - Підготовка до інсталяції',
    'LBL_STEP2' => 'Крок 2 із 2 - Налаштування конфігурації',
    'LBL_STEP' => 'Крок',
    'LBL_TITLE_WELCOME' => 'Ласкаво просимо в SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Ви готові до установки?',
    'REQUIRED_SYS_COMP' => 'Необхідні компоненти системи',
    'REQUIRED_SYS_COMP_MSG' =>
        'Перш за все, будь ласка, будьте впевнені, що у вас є підтримувані версії наступних компонентів системи: <br><ul><li>бази даних/СКБД (приклади: MariaDB, MySQL або SQL Server)</li> <li>Веб-сервера (Apache, IIS)</li></ul> зверніться до нотатки про випуск, матриці сумісності для сумісних системних компонентів для SuiteCRM версії, яку ви інсталюєте. <br>',
    'REQUIRED_SYS_CHK' => 'Початкова перевірка системи',
    'REQUIRED_SYS_CHK_MSG' =>
        'Коли розпочнеться процес інсталяції, система перевірить на веб-сервері файли SuiteCRM та налаштування компонентів системи для успішного завершення встановлення. <br><br>Буде перевірено: <br><ul>
                      <li><b>PHP version</b> &#8211; повинно бути сумісним з компонентом</li>
                      <li><b>Session Variables</b> &#8211; повинні працювати належним чином</li>
                      <li><b>MB Strings</b> &#8211; повинно бути встановлено та дозволене в php.ini</li>
                      <li><b>Database Support</b> &#8211; повинна існувати MariaDB, MySQL or SQL Server</li>
<li><b>Config.php</b> &#8211; повинна існувати та мати визначені дозволи на читання та запис</li>
<li>SuiteCRM файли повинні бути на запис:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
Якщо перевірка невдала, ви не в змозі продовжувати процес встановлення. 
                                  Повідомлення про помилки на екрані, вказують, чому ваша система не пройшла перевірку.
                                  Після внесення усіх необхідних змін, ви можете знову спробувати перевірити систему на готовність продовжувати встановлення.<br>',


    'REQUIRED_INSTALLTYPE' => 'Типове або Вибіркове встановлення',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Після завершення перевірки системи Ви можете вибрати Звичайний або Вибірковий варіанти установки. В обох випадках Вам слід знати наступне:
<ul>
<li> <b>Тип бази даних</b>, який буде використовуватися для даних SuiteCRM
<ul><li>Сумісні типи БД: MySQL, MS SQL Server, Oracle.</li></ul></li>

<li> <b>Ім&#039;я веб-сервера або комп&#039;ютера</b>, на якому знаходиться база даних
Це може бути локальний якщо база даних знаходиться на Вашому ком&#039;ютері або на тому ж комп&#039;ютері, що і файли SuiteCRM.</li></ul></li>

<li><b>Ім&#039;я бази даних</b>, яку Ви хочете використовувати для зберігання даних SuiteCRM</li>
<ul><li>Можливо, у Вас вже є існуюча база даних, яку Ви хочете використовувати. В цьому випадку під час установки, коли визначається база даних SuiteCRM, таблиці вже існуючої бази даних будуть видалені.</li>
<li>Якщо у Вас немає існуючої бази даних, введене ім&#039;я буде використано для створення нової бази даних в процесі установки.</li></ul>

<li><b>Ім&#039;я користувача і пароль адміністратора бази даних</b> <ul><li>
У адміністратора бази даних є можливість створювати таблиці, користувачів і змінювати вміст бази даних.
</li><li> Можливо, для отримання цієї інформації вам доведеться зв&#039;язатися з адміністратором бази даних, якщо база даних не знаходиться на вашому комп&#039;ютері та/або якщо Ви не є адміністратором бази даних.</ul></li></li>

<li> <b>Ім&#039;я користувача і пароль доступу до бази даних SuiteCRM</b>
</li><ul><li>Користувач може бути адміністратором бази даних або Ви можете ввести ім&#039;я іншого існуючого користувача бази даних.</li>
<li>Якщо Ви бажаєте створити нового користувача, у Вас буде можливість задати нові ім&#039;я користувача та пароль і користувач буде створений під час установки.</li></ul></ul>

Для <b>вибіркової</b> установки Вам також слід знати, що:

<ul><li> <b>URL-адресу</b>, яку буде використано для доступу до примірника SuiteCRM після завершення установки. Цей URL повинен включати в себе назву веб-сервера або комп&#039;ютера або IP-адресу.</li>

<li>[Вибірково] <b>Шлях до папки сесій</b> якщо Ви хочете використовувати індивідуальну папку сесій цукру для захисту даних сесій від уразливості на загальних серверах.</li>

<li>[Вибірково] <b>Шлях до індивідуальної папки логів</b> якщо Ви хочете використовувати її замість папки логів SuiteCRM за замовчуванням.</li>

<li>[Вибірково] <b>ID додатка</b> якщо Ви хочете використовувати його замість автоматично згенерованого ID додатку. Цей ID засвідчує, що сесії даного примірника SuiteCRM не використовуються іншими екземплярами.</li>

<li><b>Набір символів</b>, найбільш часто використовуваних у Вашому регіоні.</li></ul>


Більш детальну інформацію Ви можете знайти у Посібнику по установці.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Прочитайте, будь ласка, наступну важливу інформацію перед продовженням встановлення. Ця інформація допоможе Вам визначити, чи готові Ви до установки програми.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Виберіть мову',
    'LBL_WELCOME_SETUP_WIZARD' => 'Майстер налаштування',
    'LBL_WIZARD_TITLE' => 'Майстер налаштування системи:',
    'LBL_YES' => 'Так',

    'LBL_PATCHES_TITLE' => 'Встановити останні доповнення',
    'LBL_MODULE_TITLE' => 'Встановити мовні пакети',
    'LBL_PATCH_1' => 'Натисніть "Далі" якщо хочете пропустити цей крок.',
    'LBL_PATCH_TITLE' => 'Системні доповнення',
    'LBL_PATCH_READY' => 'Наступні доповнення готові до установки',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM використовує PHP-сесії для зберігання важливої інформації під час з&#039;єднання з цим веб сервером. У версії PHP, встановленої у Вас, інформація про сесіях неправильно налаштована. <br /><br />Часта помилка в конфігурації - параметр &#039;session.save_path&#039; не вказує на діючий каталог. <br /><br />Будь ласка, виправте <a target=\"_new\" href=\"http://us2.php.net/manual/en/ref.session.php\">конфігурацію PHP</a> в файлі php.ini, розташованому нижче.",
    'LBL_SESSION_ERR_TITLE' => 'Помилка конфігурації PHP сесій',
    'LBL_SYSTEM_NAME' => 'Системне ім\'я',
    'LBL_COLLATION' => 'Зіставлення параметрів',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Введіть назву системи для даного екземпляра SuiteCRM',
    'LBL_PATCH_UPLOAD' => 'Виберіть файл доповнення до Вашого локального комп&#039;ютера',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Вимагається PHP версії 5 або вище.',
    'LBL_MINIMUM_PHP_VERSION' => 'Мінімальна необхідна версія PHP - 5.1.0. Рекомендовано - 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => 'Поточна версія PHP на Вашому комп&#039;ютері',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Рекомендована версія PHP - 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'У PHP включений режим зворотної сумісності. Для продовження вимкніть параметр zend.ze1_compatibility_mode',
    'LBL_STREAM' => 'PHP дозволяє використовувати потік',

    'advanced_password_new_account_email' => array(
        'subject' => 'Нові відомості облікового запису',
        'type' => 'системний',
        'description' => 'Цей шаблон використовується коли системний адміністратор надсилає новий пароль користувачу.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Тут ваш обліковий запис та тимчасовий пароль:</p><p>Користувач: $contact_user_user_name </p><p>Пароль: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Після входу, використовуйте про пароль, вибравши одне із значень.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Ось ваш тимчасовий обліковий запис користувача та пароль:
 Ім\'я користувача: $contact_user_user_name 
Пароль: $contact_user_user_hash
$config_site_url
Після того, як ви увійдете, використовуючи пароль вище, вам може знадобитися для скидання пароля на один свій вибір.',
        'name' => 'Створений системою пароль електронної пошти',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Скидання пароля облікового запису',
        'type' => 'системний',
        'description' => "Цей шаблон використовується для відправки користувачу посилання на кнопку скидання пароля облікового запису користувача.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ващ останній запит на $contact_user_pwd_last_changed зміну паролю облікового запису. </p><p>Натисніть на посилання нижче для зміни паролю:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Ви спровокували запит $contact_user_pwd_last_changed на здатність змінити пароль облікового запису.

Натисніть на посилання, щоб змінити пароль:

$contact_user_link_guid',
        'name' => 'Забув пароль електронної пошти',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Код двофакторної автентифікації',
        'type' => 'системний',
        'description' => "Цей шаблон використовується для надсилання коду двофакторної автентифікації для входу користувача.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"center\"><tbody><tr><td colspan=\"2\"><p>Код двофакторної автентифікації: <b>$code</b>.</p></td></tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Код двофакторної автентифікації: $code.',
        'name' => 'Електронна адреса для двофакторної автентифікації',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Від" Ім&#039;я:',
    'LBL_FROM_ADDR' => '"Від" Адреса:',

    'LBL_WIZARD_SMTP_DESC' => 'Обліковий запис вихідної пошти буде використовуватися для відправки вихідної пошти, в тому числі для повідомлень про призначення записів і завдань, та листів з інформацією про новий пароль. Електронна адреса даного облікового запису буде фігурувати в листах в якості відправника.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Виберіть поштову службу:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Інший',
    'LBL_MAIL_SMTP_SETTINGS' => 'Налаштування SMTP-сервера',
    'LBL_MAIL_SMTPSERVER' => 'Сервер вихідної пошти',
    'LBL_MAIL_SMTPPORT' => 'SMTP-порт',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Сервер SMTP вимагає аутентифікацію?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Включити шифрування (SSL або TLS)',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - адреса:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Дозволити користувачам використовувати цей обліковий запис для вихідних повідомлень:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'При виборі даної опції всі користувачі зможуть надсилати електронну пошту (включаючи автоматичні повідомлення про призначення записів та системні повідомлення) з використанням вказаного тут стандартного сервера вихідної пошти. В іншому випадку кожному користувачу при налаштуванні облікового запису електронної пошти необхідно вручну ввести налаштування сервера вихідної пошти.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - обліковий запис пошти:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логін:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт серверу:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - сервер:',


    'LBL_MAIL_SMTPUSER' => 'SMTP-логін',
    'LBL_MAIL_SMTPPASS' => 'SMTP-пароль:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Налаштування логотипу',
    'LBL_WIZARD_SYSTEM_DESC' => 'Вкажіть назву вашої організації і виберіть логотип.',
    'SYSTEM_NAME_WIZARD' => 'Ім’я:',
    'SYSTEM_NAME_HELP' => 'Дана назва відображається в заголовку браузера.',
    'NEW_LOGO' => 'Вибрати логотип:',
    'NEW_LOGO_HELP' => 'Формат файлу зображення може бути . png або .jpg. Максимальна висота — 170px, і найбільша ширина — 450px. Завантажені зображення, що більші за розмірами, будуть зменшені.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Завантажити',
    'CURRENT_LOGO' => 'Поточний логотип:',
    'CURRENT_LOGO_HELP' => 'Цей логотип відображається в центрі екрана входу в програму SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Сценарій вибору',
    'LBL_WIZARD_SCENARIO_DESC' => 'Побудова відображення модулів, відповідно до власних вимог. Кожен з модулів можна увімкнути після установки за допомогою сторінки адміністрування.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Там не вказані коректні сценарії, установлені у файлі конфігурації (config. php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Управління регіональними налаштуваннями',
    'LBL_WIZARD_LOCALE_DESC' => 'Вкажіть, яким чином повинні бути представлені дані в системі, грунтуючись на Вашому географічному положенні. Вказані тут параметри будуть параметрами за замовчуванням. Надалі користувачі зможуть змінити параметри на свій розсуд.',
    'LBL_DATE_FORMAT' => 'Формат дати',
    'LBL_TIME_FORMAT' => 'Формат часу',
    'LBL_TIMEZONE' => 'Часовий пояс:',
    'LBL_LANGUAGE' => 'Переклад:',
    'LBL_CURRENCY' => 'Валюта:',
    'LBL_CURRENCY_SYMBOL' => 'Символ грошової одиниці:',
    'LBL_CURRENCY_ISO4217' => 'Код ISO 4217 грошової одиниці:',
    'LBL_NUMBER_GROUPING_SEP' => 'Символ роздільника розрядів',
    'LBL_DECIMAL_SEP' => 'Символ десяткового роздільника',
    'LBL_NAME_FORMAT' => 'Назва формату:',
    'UPLOAD_LOGO' => 'Будь ласка, зачекайте, логотип завантажується...',
    'ERR_UPLOAD_FILETYPE' => 'Тип файлу не допускається, будь ласка, завантажте jpeg або png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Виникла помилка, завантажується невідомий файл.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Завантажений файл більше, ніж зазначено в upload_max_filesize в php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Завантажений файл більше, ніж зазначено в MAX_FILE_SIZE в HTML формі.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Файл був тільки частково завантажений.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Файл не був заружен.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Тимчасова папка не була створена.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Не вдалося записати файл на диск.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Розширення PHP зупинили завантаження файлу. PHP не взмозі з\'ясувати, які розширення PHP скасувало завантаження файлу.',

    'LBL_INSTALL_PROCESS' => 'Встановити...',

    'LBL_EMAIL_ADDRESS' => 'Електронна пошта:',
    'ERR_ADMIN_EMAIL' => 'Адрес електронної скриньки адміністратора є не коректним.',
    'ERR_SITE_URL' => 'URL-адреса сайту є необхідною.',

    'STAT_CONFIGURATION' => 'Конфігурація відносин...',
    'STAT_CREATE_DB' => 'Створити базу даних...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Створити настройки за промовчанням...',
    'STAT_INSTALL_FINISH' => 'Завершення встановлення...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Процес встановлення завершено, <a href="%s"> будь ласка, увійдіть у...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Будь ласка, прийміть ліцензії спочатку',

    'LBL_MORE_OPTIONS_TITLE' => 'Більше налаштувань',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Помилка бази даних',
    'LBL_OLD_PHP' => 'Виявлено стару версію PHP!',
    'LBL_OLD_PHP_MSG' => 'Рекомендована версія PHP для встановлення SuiteCRM — %s <br />Мінімальна версія PHP — %s<br />Ви використовуєте версію PHP %s, яка вже застаріла: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Будь ласка, виконайте оновлення вашої версії PHP. ',
    'LBL_OLD_PHP_OK' => 'Я розумію про ризики і бажаю продовжити.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Користувач',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Назва бази даних',
    'LBL_DBCONFIG_MSG3' => 'Вкажіть назву бази даних, яка буде містити дані для SuiteCRM, яку Ви встановлюєте:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Ім&#039;я сервера',
    'LBL_DBCONFIG_MSG2' => 'Ім\'я сервера, на якому розташована база даних. Якщо БД встановлена локально, то для прискорення роботи краще використовувати \'localhost\' ніж \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Введіть логін та пароль адміністратора бази даних. Адміністратор повинен мати відповідні права на створення і запис у базі даних SuiteCRM.'
);
