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
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'Код валюти - ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Валюта',
    'DEFAULT_CURRENCY_SYMBOL' => 'Символ валюти',
    'DEFAULT_DATE_FORMAT' => 'Формат дати за замовчуванням',
    'DEFAULT_DECIMAL_SEP' => 'Десятковий розділювач',
    'DEFAULT_LANGUAGE' => 'Мова за замовчуванням',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Формат часу за замовчуванням',

    'DISPLAY_RESPONSE_TIME' => 'Відображати час відповіді сервера',

    'IMAGES' => 'Логотипи',
    'LBL_ALLOW_USER_TABS' => 'Дозволити користувачам приховувати закладки',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Переглянути журнал',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Мінімальний час автоматичного оновлення розділу',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Це мінімальне значення часу автоматичного оновлення розділу. Виберіть "Ніколи", щоб повністю заборонити автоматичне оновлення розділів.',
    'LBL_MODULE_FAVICON' => 'Відображувати іконку модуля в якості іконки сайту',
    'LBL_MODULE_FAVICON_HELP' => 'Якщо ви знаходитесь в модулі, що містить іконку, то ця іконка буде використовуватися в якості іконки сайту, замість іконки сайту, що міститься в поточній темі.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Конфігуратор',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Тема листа:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Використовуйте проксі-сервер для налаштувань авторизації',
    'LBL_PROXY_ON' => 'Використовувати проксі-сервер?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Відображати повні імена',
    'LBL_USE_REAL_NAMES_DESC' => 'Відображати повні імена користувачів замість логіну в полях призначення записів.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Вимкнути дію конвертування попередніх контактів для вже конвертованих',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Якщо попередній контакт вже був конвертований, ввімкнення цього параметра видалить дію для конвертації.',
    'LBL_ENABLE_ACTION_MENU' => 'Показувати дії у меню',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Виберіть, щоб відобразити детальний показ, та показ субпанелей у випадаючому меню. Якщо скасувати вибір — дії будуть відображені, як окремі кнопки.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Дозволити редагування прямо у списку',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Виберіть, щоб увімкнути редагування полів під час перегляду. Якщо опція не вибрана, таке редагування у показі списку буде відключене.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Дозволити редагування у показі підробиць',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Виберіть, щоб увімкнути редагування полів під час показу підробиць. Якщо опція не вибрана, таке редагування у показі списку буде відключене.',
    'LBL_HIDE_SUBPANELS' => 'Згорнуті субпанелі',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Кількість відображуваних записів на сторінці',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Кількість відображуваних субпанелей на сторінці',
    'LOG_MEMORY_USAGE' => 'Вести журнал використання пам&#039;яті',
    'LOG_SLOW_QUERIES' => 'Вести журнал повільних запитів',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'Цей логотип відображається в центрі екрана входу в програму SuiteCRM.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'Формат файлу зображення може бути . png або .jpg. Максимальна висота — 170px, і найбільша ширина — 450px. Завантажені зображення, що більші за розмірами, будуть зменшені.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Формат файлу зображення може бути . png або .jpg. Максимальна висота — 170px, і найбільша ширина — 450px. Завантажені зображення, що більші за розмірами, будуть зменшені.',
    'SLOW_QUERY_TIME_MSEC' => 'Пороговий час виконання повільних запитів (мсек)',
    'STACK_TRACE_ERRORS' => 'Відображати трасування помилок',
    'UPLOAD_MAX_SIZE' => 'Максимальний розмір файлу, що завантажується',
    'VERIFY_CLIENT_IP' => 'Перевірка IP-адреси користувача',
    'LOCK_HOMEPAGE' => 'Заборонити користувачам налаштування головної сторінки',
    'LOCK_SUBPANELS' => 'Заборонити користувачам налаштування субпанелей',
    'MAX_DASHLETS' => 'Максимальна кількість індикаторів SuiteCRM на домашній сторінці',
    'SYSTEM_NAME' => 'Системне ім\'я:',
    'SYSTEM_NAME_WIZARD' => 'Ім’я:',
    'LBL_SNOOZE_TIMER' => 'Встановити режим дрімання для сповіщень',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Підтримка LDAP-авторизації',
    'LBL_LDAP_LEGACY_WARNING' => 'Попередження LDAP',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'Ця конфігурація LDAP буде використовуватися тільки для автентифікації v4 API. Для налаштування входу у SuiteCRM через LDAP, додайте необхідні конфігурації в файл .env.local. За додатковою інформацією зверніться до документації з конфігурації LDAP.',
    'LBL_LDAP_ENABLE' => 'Включити LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Використовується для пошуку користувача LDAP. Можливо, потрібно буде ввести повністю кваліфіковане ім\'я.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Прив\'яжіться до сервера автентифікації LDAP, використовуючи облікові дані конкретних користувачів. Якщо не надати ці дані, прив\'язка буде виконана анонімно.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Будь-які додаткові параметри фільтра, який буде застосовано при автентифікації користувачів, наприклад, <em>is_suitecrm_user=1 або (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Для прив\'язки користувача LDAP, приклад: [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Для пошуку користувача LDAP, приклад::[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Приклад: ldap.example.com або ldaps://ldap.example.com з шифруванням SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Приклад: 389 або 636 при включенні SSL',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Приклад <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Приклад: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Режим розробки',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Тип розбивки субпанелів на сторінки',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Тип розбивки списку на сторінки',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Виринаючий список записів',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Тип розбиття на сторінки для виринаючого списку записів',

    'SHOW_DOWNLOADS_TAB' => 'Відображати панель завантажень',
    'SHOW_DOWNLOADS_TAB_HELP' => 'При виборі цієї опції, вкладка завантаження з\'явиться в налаштуваннях користувача та надасть користувачам доступ до плагінів SuiteCRM та інших доступних файлів',
    'LBL_LDAP_ENC_KEY_DESC' => 'Для SOAP-авторизації при використанні LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Розширення php_mcrypt повинно бути включено у файлі php.ini або ж php повинен бути скомпільований із зазначенням відповідного ключа.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Розширення openssl повинне бути активоване в файлі налаштувань php.ini.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Встановити контрольну точку',
    'LBL_NEXT_' => 'Далі>>',
    'LBL_REFRESH_FROM_MARK' => 'Оновити з контрольної точки',
    'LBL_SEARCH' => 'Пошук:',
    'LBL_REG_EXP' => 'Реєстрація закінчується:',
    'LBL_IGNORE_SELF' => 'Ігнорувати:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Контрольна точка в журналі встановлена',
    'LBL_DISPLAYING_LOG' => 'Результат логування:',
    'LBL_YOUR_PROCESS_ID' => 'ID процесу:',
    'LBL_YOUR_IP_ADDRESS' => 'Ваш IP-адреса:',
    'LBL_IT_WILL_BE_IGNORED' => 'Буде проігноровано',
    'LBL_LOG_NOT_CHANGED' => 'Журнал не змінено',
    'LBL_ALERT_JPG_IMAGE' => 'Файл зображення повинен бути у форматі JPEG. Завантажте новий файл з розширенням .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Файл зображення повинен бути у форматі JPEG або PNG. Завантажте новий файл з розширенням .jpg або .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Співвідношення сторін зображення повинно бути між 1:1 і 10:1. Розмір зображення буде змінено.',
    'ERR_ALERT_FILE_UPLOAD' => 'Сталася помилка під час завантаження зображення.',
    'LBL_LOGGER' => 'Параметри журналу',
    'LBL_LOGGER_FILENAME' => 'Ім&#039;я файла журналу:',
    'LBL_LOGGER_FILE_EXTENSION' => 'Розширення',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Максимальний розмір файла журналу:',
    'LBL_STACK_TRACE' => 'Увімкнути звіт про стек викликів, для полегшення пошуку програмних помилок',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Рівень деталізації:',
    'LBL_LEAD_CONV_OPTION' => 'Налаштування перетворення попередніх контактів (на клієнтів)',
    'LEAD_CONV_OPT_HELP' => "<b>Копіювання</b> — створює та поріднює між собою копії всієї активності Попередніх контактів з новими записами, обраними користувачем під час перетворення Попереднього контакту на клієнта. Для кожного з обраних записів створюються копії.<br><br><b>Перенесення</b> — Переносить всю активність Попереднього контакту в новий запис, обраний користувачем під час перетворення Попереднього контакту на клієнта.<br><br><b>Нічого не робити</b> — Не виконує дій над активністю Попереднього контакта під час перетворення. Історія активності залишається разом з Попереднім контактом.",
    'LBL_CONFIG_AJAX' => 'Налаштування інтерфейсу AJAX UI',
    'LBL_CONFIG_AJAX_DESC' => 'Дозволити використання AJAX інтерфейсу для деяких модулів.',
    'LBL_LOGGER_MAX_LOGS' => 'Максимальна кількість файлів журналу:',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Додатковий суфікс імені файла журналу:',
    'LBL_VCAL_PERIOD' => 'Параметри доступності vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Імпорт - максимальна кількість рядків:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Вкажіть, скільки рядків дозволено мати в файлах імпорту.<br>Якщо довжина файла імпорту більша, ніж це число, користувач отримає сповіщення.<br>Якщо число не задане, дозволяється будь-яка кількість рядків.',
    'vCAL_HELP' => 'Використовуйте цей параметр для зазначення кількості місяців, протягом яких можлива публікація даних про зайнятість (дзвінки та зустрічі) з календаря. <br />При включеній публікації допустимі значення від 1 до 12 місяців. Для виключення можливості публікації введіть "0".',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Ваші сценарії',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Жодного сценарію не було налаштовано',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Виберіть сценарії, які підходять для вашого встановлення. Ці параметри можна змінити після установки.',

    'LBL_WIZARD_TITLE' => 'Майстер налаштування системи',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Ласкаво просимо в SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Натисніть <b>Далі</b> для встановлення логотипу, назви, вибору мови та налаштування SuiteCRM. Якщо ви бажаєте зробити це пізніше, тоді натисніть <b>Пропустити</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Далі >',
    'LBL_WIZARD_BACK_BUTTON' => '< Назад',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Продовжити',
    'LBL_WIZARD_FINISH_TITLE' => 'Налаштування основних параметрів системи завершено',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Завантаження......' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Логотип' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Показувати електронні адреси пов\'язаних контактів у підпанелі історії для модулів',
    'LBL_HISTORY_SUBPANEL' => 'Вкладена панель історії',
);
