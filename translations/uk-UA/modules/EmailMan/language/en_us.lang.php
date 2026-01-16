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
    'LBL_SEND_DATE_TIME' => 'Дата відправки',
    'LBL_IN_QUEUE' => 'У процесі',
    'LBL_IN_QUEUE_DATE' => 'Дата внесення в чергу',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Тільки цілі значення дозволені для вказання кількості листів, що відправляються одночасно при пакетній розсилці',

    'LBL_ATTACHMENT_AUDIT' => ' було відправлено. Копія на локальний комп&#039; ютер не була зроблена з метою економії вільного місця на жорсткому диску.',
    'LBL_CONFIGURE_SETTINGS' => 'Параметри електронної пошти',
    'LBL_CUSTOM_LOCATION' => 'Задається користувачем',
    'LBL_DEFAULT_LOCATION' => 'За замовчуванням',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Видаляти відповідні замітки і вкладення при видаленні E-mail-повідомлень',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Сповіщення електронною поштою',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Налаштування дозволу на маркетингове листування',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Автоматично відсилати електронний лист з запитом дозволу',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Шаблон електронного листа з підтвердженням дозволу',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Обрати застарілий редактор електронних листів',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Налаштування сервера вихідної пошти',
    'LBL_EMAILS_PER_RUN' => 'Кількість листів, що відправляються одномоментно при пакетній розсилці:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Маркетингова кампанія',
    'LBL_LIST_FORM_TITLE' => 'Черга',
    'LBL_LIST_FROM_NAME' => 'Від (ім&#039;я)',
    'LBL_LIST_IN_QUEUE' => 'У процесі',
    'LBL_LIST_MESSAGE_NAME' => 'Маркетингове повідомлення',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Електронна пошта одержувача',
    'LBL_LIST_RECIPIENT_NAME' => 'Ім&#039;я одержувача',
    'LBL_LIST_SEND_ATTEMPTS' => 'Спроб відправити',
    'LBL_LIST_SEND_DATE_TIME' => 'Відправити',
    'LBL_LIST_USER_NAME' => 'Логін',
    'LBL_LOCATION_ONLY' => 'Місце',
    'LBL_LOCATION_TRACK' => 'Розташування файлів трекера маркетингових кампаній (campaign_trackerv2.php, removeme.php і image.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Зберігати копії повідомлень розсилок:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Ви бажаєте зберігати повні копії КОЖНОГО відправленого Еmail-повідомлення по кожній маркетинговій кампанії? Ми НЕ рекомендуємо цього робити. Якщо ви виберете <strong>НІ</strong>, то будуть зберігатися лише шаблони відправлених повідомлень і Ви можете скористатися системними змінними для відтворення необхідних повідомлень.',
    'LBL_MAIL_SENDTYPE' => 'Відправка пошти за допомогою',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP-сервер вимагає авторизації',
    'LBL_MAIL_SMTPPASS' => 'Пароль:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-порт',
    'LBL_MAIL_SMTPSERVER' => 'SMTP сервер:',
    'LBL_MAIL_SMTPUSER' => 'SMTP-логін',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Виберіть поштову службу',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - обліковий запис пошти',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - обліковий запис пошти',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логін:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт серверу',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - сервер',
    'LBL_EMAIL_LINK_TYPE' => 'Клієнтська програма електронної пошти',
    'LBL_MARKETING_ID' => 'Кампанія',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Налаштування електронної пошти',
    'LBL_MODULE_TITLE' => 'Управління чергою вихідних повідомлень',
    'LBL_NOTIFICATION_ON_DESC' => 'Якщо опція активна, користувачам відправляються повідомлення, коли за ними закріплюються записи.',
    'LBL_NOTIFY_FROMADDRESS' => '"Від" Адреса:',
    'LBL_NOTIFY_FROMNAME' => '"Від" Ім&#039;я:',
    'LBL_NOTIFY_ON' => 'Повідомлення про призначення',
    'LBL_NOTIFY_TITLE' => 'Параметри електронної пошти',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Опції вихідних розсилок',
    'LBL_RELATED_ID' => 'Пов&#039;язаний з',
    'LBL_RELATED_TYPE' => 'Тип залежності',
    'LBL_SEARCH_FORM_TITLE' => 'Швидкий пошук',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Значення параметра site_url у файлі config.php',
    'TXT_REMOVE_ME_ALT' => 'Для того, щоб видалити себе з цього списку розсилки, перейдіть на ',
    'TXT_REMOVE_ME_CLICK' => 'натисніть тут',
    'TXT_REMOVE_ME' => 'Для того, щоб видалити себе зі списку розсилки',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Надсилати повідомлення з електронної адреси пов\'язаного користувача',

    'LBL_SECURITY_TITLE' => 'Налаштування безпеки електронної пошти',
    'LBL_SECURITY_DESC' => 'Виберіть HTML-теги, заборонені до використання при відправці і відображенні листів у модулі E-mail.',
    'LBL_SECURITY_APPLET' => 'Включення аплету',
    'LBL_SECURITY_BASE' => 'Тег <base>',
    'LBL_SECURITY_EMBED' => 'Включення об&#039;єкта',
    'LBL_SECURITY_FORM' => 'Форми',
    'LBL_SECURITY_FRAME' => 'Фрейм',
    'LBL_SECURITY_FRAMESET' => 'Набір фреймів',
    'LBL_SECURITY_IFRAME' => 'Плаваючий фрейм',
    'LBL_SECURITY_IMPORT' => 'Запити імпорту',
    'LBL_SECURITY_LAYER' => 'Шари',
    'LBL_SECURITY_LINK' => 'Посилання',
    'LBL_SECURITY_OBJECT' => 'Об&#039;єкти',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Виберіть мінімальні установки безпеки Outlook (помилки з боку коректного відображення).',
    'LBL_SECURITY_STYLE' => 'Користувальницькі стилі',
    'LBL_SECURITY_TOGGLE_ALL' => 'Включити всі опції',
    'LBL_SECURITY_XMP' => 'Xmp-об&#039;єкти',
    'LBL_YES' => 'Так',
    'LBL_NO' => 'Ні',
    'LBL_PREPEND_TEST' => '[Тест]: ',
    'LBL_SEND_ATTEMPTS' => 'Спроб відправити',
    'LBL_OUTGOING_SECTION_HELP' => 'Налаштувати сервер вихідної пошти за замовчуванням для відправлення e-mail-повідомлень, включаючи повідомлення робочого процесу.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Користувачі можуть відсилати пошту від імені цього облікового запису:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'При виборі даної опції всі користувачі зможуть надсилати електронну пошту (включаючи автоматичні повідомлення про призначення записів та системні повідомлення) з використанням вказаного тут стандартного сервера вихідної пошти. В іншому випадку кожному користувачу при налаштуванні облікового запису електронної пошти необхідно вручну ввести налаштування сервера вихідної пошти.',
    'LBL_FROM_ADDRESS_HELP' => 'Коли опція включена, призначувані ім&#039;я користувача (- ів) та електронні адреси будуть включені в поле "Від" електронного листа, що створюється. Ця опція може не працювати з серверами SMTP, які не дозволяють відправку з облікового запису, що відрізняється від облікового запису сервера.',
    'LBL_HELP' => 'Довідка' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Переглянути облікові записи вихідної пошти',
    'LBL_ALLOW_SEND_AS_USER' => 'Користувачі можуть відправляти пошту від власного імені:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Коли увімкнено, <b>всі</b> користувачі можуть відсилати електронну пошту через сервер вихідної пошти, зі своєю основною поштовою адресою у полі "Відправник".<br>Ця можливість не працює з SMTP серверами, які забороняють відправку пошти від іншого домену, ніж ім\'я домену самого сервера.',
);
