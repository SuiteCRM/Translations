<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'DEFAULT_CURRENCY_ISO4217' => 'رمز عملة ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'اسم العملة',
    'DEFAULT_CURRENCY_SYMBOL' => 'رمز العملة',
    'DEFAULT_DATE_FORMAT' => 'تنسيق التاريخ الافتراضي',
    'DEFAULT_DECIMAL_SEP' => 'علامة الفاصلة العشرية',
    'DEFAULT_LANGUAGE' => 'اللغة الافتراضية',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'تنسيق الوقت الافتراضي',

    'DISPLAY_RESPONSE_TIME' => 'عرض سرعات استجابة الخادم',

    'IMAGES' => 'الشعارات',
    'LBL_ALLOW_USER_TABS' => 'السماح للمستخدمين بإخفاء علامات التبويب',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'عرض سجل الأحداث',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'الحد الأدنى للفاصل الزمني بين التحديثات التلقائية للتطبيق الفرعي',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'هذه هي القيمة الأقل التي يمكن اختيارها للحصول على التحديث التلقائي لتطبيق dashlets. الإعداد إلى "أبدا Never" يعطل التحديث التلقائي لتطبيق dashlets كلياً.',
    'LBL_MODULE_FAVICON' => 'عرض رمز الوحدة كأيقونة المفضلة (favicon)',
    'LBL_MODULE_FAVICON_HELP' => 'إذا كنت في وحدة لها أيقونة، استخدم رمز الوحدة كأيقونة مفضلة (favicon)، بدلاً من أيقونة المفضلة الخاصة بالنمط العام للنظام، في علامة التبويب المتصفح.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'المنفذ للتهيئة Configurator',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'تهيئة عنوان خادم البروكسي وإعدادات المصادقة',
    'LBL_PROXY_ON' => 'استخدام خادم بروكسي؟',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'عرض الاسم الكامل',
    'LBL_USE_REAL_NAMES_DESC' => 'اعرض الأسماء الكاملة للمستخدمين بدلاً من أسماء المستخدمين الخاصة بهم في حقول التعيين.',
    'LBL_DISALBE_CONVERT_LEAD' => 'تعطيل إجراء تحويل نشاط العميل المحتمل للعملاء المحتملين المحولين',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'إذا تم تحويل أحد العملاء المحتملين من قبل، فإن تمكين هذا الخيار سيزيل نشاط العميل المحتمل المحول.',
    'LBL_ENABLE_ACTION_MENU' => 'عرض الأنشطة داخل القوائم',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'اختر هذا الخيار لعرض الأنشطة بطريقة عرض التفاصيل وطريقة عرض اللوحة الفرعية داخل قائمة منسدلة. إذا لم يتم اختيار هذا الخيار، ستظهر الإجراءات كأزرار منفصلة.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'تمكين التحرير الداخلي في طريقة عرض القائمة',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'اختر لتمكين التعديل الداخلي للحقول في طريقة عرض القائمة. إذا كان التعديل الداخلي غير مختار سيتم تعطيله في طريقة عرض القائمة.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'تمكين التحرير الداخلي في طريقة عرض التفاصيل',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'اختر لتمكين التعديل الداخلي للحقول في طريقة العرض التفصيلية. إذا كان التعديل الداخلي غير مختار سيتم تعطيله في طريقة العرض التفصيلية.',
    'LBL_HIDE_SUBPANELS' => 'لوحات فرعية مطوية',
    'LIST_ENTRIES_PER_LISTVIEW' => 'عدد العناصر لكل صفحة في طريقة عرض القائمة',
    'LIST_ENTRIES_PER_SUBPANEL' => 'عدد عناصر اللوحات الفرعية لكل صفحة',
    'LOG_MEMORY_USAGE' => 'استخدام الذاكرة لسجل الأحداث',
    'LOG_SLOW_QUERIES' => 'استعلامات السجل البطيئة',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'حد وقت الاستعلام البطيء (مللي ثانية)',
    'STACK_TRACE_ERRORS' => 'عرض تتبع جذور (stack trace) الأخطاء',
    'UPLOAD_MAX_SIZE' => 'حجم رفع الملفات الأقصى',
    'VERIFY_CLIENT_IP' => 'التحقق من صحة عنوان الانترنت (IP) للمستخدم',
    'LOCK_HOMEPAGE' => 'منع تصميم الصفحة الرئيسية القابلة للتخصيص من قبل المستخدم',
    'LOCK_SUBPANELS' => 'منع تصميم اللوحات الفرعية القابل للتخصيص من قبل المستخدم',
    'MAX_DASHLETS' => 'الحد الأقصى لعدد التطبيقات الفرعية SuiteCRM على الصفحة الرئيسية',
    'SYSTEM_NAME' => 'اسم النظام:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'دعم مصادقة LDAP',
    'LBL_LDAP_ENABLE' => 'تمكين LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'أي معطيات فرز إضافية يتم تطبيقها عند مصادقة المستخدمين مثل <em>is_suitecrm_user=1 أو (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'لأمثلة مصادقة مستخدم LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'لأمثلة البحث عن مستخدم LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'مثال: <em>389 أو 636 لـ SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'مثال <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'مثال: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'وضع المطور',

    'SHOW_DOWNLOADS_TAB' => 'عرض علامة التبويب للتنزيلات',
    'SHOW_DOWNLOADS_TAB_HELP' => 'عند اختياره، ستظهر علامة التبويب للتنزيل في إعدادات المستخدم وتوفر للمستخدمين الوصول إلى ملحقات SuiteCRM والملفات الأخرى المتاحة',
    'LBL_LDAP_ENC_KEY_DESC' => 'لمصادقة SOAP عند استخدام LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'يجب تمكين ملحق php_mcrypt في ملف php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'يجب تمكين ملحق openssl في ملف php.ini.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'نقطة علامة',
    'LBL_NEXT_' => 'التالي>>',
    'LBL_REFRESH_FROM_MARK' => 'تحديث من العلامة',
    'LBL_SEARCH' => 'البحث:',
    'LBL_REG_EXP' => 'شفرة Reg Exp:',
    'LBL_IGNORE_SELF' => 'تجاهل الذات:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'تحديد من أين يبدأ تسجيل الأحداث',
    'LBL_DISPLAYING_LOG' => 'يتم عرض سجل الأحداث',
    'LBL_YOUR_PROCESS_ID' => 'معرف العملية الخاص بك',
    'LBL_YOUR_IP_ADDRESS' => 'عنوان الإنترنت (IP) الخاص بك هو',
    'LBL_IT_WILL_BE_IGNORED' => ' سيتم تجاهلها ',
    'LBL_LOG_NOT_CHANGED' => 'لم يتغير السجل الأحداث',
    'LBL_ALERT_JPG_IMAGE' => 'تنسيق الملف للصورة يجب أن يكون JPEG. قم برفع ملف جديد بامتداد jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'يجب أن يكون تنسيق الملف للصورة JPEG أو PNG. قم برفع ملف جديد بامتداد jpg أو png.',
    'LBL_ALERT_SIZE_RATIO' => 'نسبة العرض إلى الطول للصورة يجب أن تكون بين 1:1 و 10:1. سيتم تغيير حجم الصورة.',
    'ERR_ALERT_FILE_UPLOAD' => 'حدث خطأ أثناء رفع الصورة.',
    'LBL_LOGGER' => 'إعدادات نظام تسجيل الأحداث',
    'LBL_LOGGER_FILENAME' => 'اسم ملف سجل الأحداث',
    'LBL_LOGGER_FILE_EXTENSION' => 'الامتداد في اسم الملف',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'الحد الأقصى لحجم سجل الأحداث',
    'LBL_STACK_TRACE' => 'تمكين تعقب جذور المشاكل (stack trace)',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'مستوى تسجيل الأحداث',
    'LBL_LEAD_CONV_OPTION' => 'خيارات تحويل العملاء المحتملين',
    'LEAD_CONV_OPT_HELP' => "<b>نسخ</b> - ينشئ ويربط نسخ من جميع أنشطة العميل المحتمل بسجلات جديدة يتم اختيارها من قبل المستخدم أثناء التحويل. يتم إنشاء نسخ لكل سجل من السجلات المحددة.<br><br><b>نقل</b> - نقل جميع أنشطة العميل المحتمل إلى سجل جديد يتم اختياره من قبل المستخدم أثناء التحويل.<br><br><b>لا تفعل أي شيء</b> - لا تفعل شيئا بأنشطة العميل المحتمل أثناء التحويل. وتبقى الأنشطة متعلقة بالعميل المحتمل فقط.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'تمكين أو تعطيل استخدام واجهة المستخدم بتقنية آجاكس (AJAX UI) لوحدات محددة.',
    'LBL_LOGGER_MAX_LOGS' => 'الحد الأقصى لعدد السجلات الأحداث (قبل التدوير)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'إلحاق بعد اسم الملف',
    'LBL_VCAL_PERIOD' => 'فترة تحديثات ملفات التقويم vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'الاستيراد - الحد الأقصى لعدد الصفوف:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'حدد عدد الصفوف المسموح بها داخل ملفات الاستيراد.<br>إذا تجاوز عدد الصفوف في ملف الاستيراد هذا الرقم، سيتم تنبيه المستخدم.<br>إذا لم يتم إدخال أي عدد، يسمح بعدد غير محدود من الصفوف.',
    'vCAL_HELP' => 'استخدم هذا الإعداد لتحديد عدد الأشهر قبل التاريخ الحالي لنشر معلومات حول الفراغ/الانشغال للمكالمات والاجتماعات.<BR>لإيقاف نشر معلومات الفراغ/الانشغال، أدخل "0". الحد الأدنى هو شهر واحد؛ الحد الأقصى هو ١٢ شهراً.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'سيناريوهاتك',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'لم يتم تهيئة سيناريوهات',
    'LBL_WIZARD_SCENARIOS_DESC' => 'أختر أي السيناريوهات تناسب تثبيتك للتطبيق. هذه الخيارات يمكن تغييرها بعد التثبيت.',

    'LBL_WIZARD_TITLE' => 'مرشد آلي Wizard لمدير النظام',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'مرحبا بكم في SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'انقر على <b>التالي</b> لوضع العلامة التجارية، وتعريب وتهيئة SuiteCRM الآن. إذا كنت ترغب في تهيئة SuiteCRM لاحقا، انقر على <b>تخطي</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'التالي >',
    'LBL_WIZARD_BACK_BUTTON' => '< رجوع',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'متابعة',
    'LBL_WIZARD_FINISH_TITLE' => 'اكتملت تهيئة النظام الأساسي',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'الشعار' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'إظهار البريد الإلكتروني لجهات الاتصال ذات الصلة في لوحة السجل الفرعية للوحدات',
);
