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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'اسم المستخدم أو كلمة المرور غير صحيحة',
    'ERR_INI_ZLIB' => 'لا يمكن إيقاف ضغط Zlib مؤقتاً. قد تفشل "إعدادات الاختبار".',
    'ERR_NO_IMAP' => 'لم يتم العثور على مكتبات IMAP. يرجى حل هذه المشكلة قبل الاستمرار في البريد الإلكتروني الوارد',
    'ERR_NO_OPTS_SAVED' => 'لم يتم حفظ الإعدادات المثالية لحساب البريد الإلكتروني الوارد الخاص بك. الرجاء مراجعة الإعدادات',
    'ERR_TEST_MAILBOX' => 'الرجاء التحقق من الإعدادات الخاصة بك وحاول مرة أخرى.',
    'ERR_INVALID_PORT' => 'منفذ غير صالح',

    'LBL_ASSIGN_TO_USER' => 'إسناد إلى مستخدم',
    'LBL_AUTOREPLY' => 'قالب الرد التلقائي',
    'LBL_AUTOREPLY_HELP' => 'حدد ردًا تلقائيًا لإشعار مرسلي البريد الإلكتروني بأنه قد تم استلام استجابتهم.',
    'LBL_BASIC' => 'معلومات حساب البريد',
    'LBL_CASE_MACRO' => 'Case Macro',
    'LBL_CASE_MACRO_DESC' => 'Set the macro which will be parsed and used to link imported email to a Case.',
    'LBL_CASE_MACRO_DESC2' => 'Set this to any value, but preserve the <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'إغلاق النافذة',
    'LBL_CREATE_TEMPLATE' => 'Create',
    'LBL_DELETE_SEEN' => 'حذف البريد الإلكتروني المقروء بعد الاستيراد',
    'LBL_EDIT_TEMPLATE' => 'Edit',
    'LBL_EMAIL_OPTIONS' => 'خيارات التعامل مع البريد الإلكتروني',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'خيارات معالجة ارتداد البريد',
    'LBL_FILTER_DOMAIN_DESC' => 'حدد نطاق لا ترسل إليه ردود تلقائية.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'اختر لإنشاء سجلات بريد إلكتروني تلقائياً في نظام SuiteCRM لجميع رسائل البريد الإلكتروني الواردة.',
    'LBL_FILTER_DOMAIN' => 'لا رد تلقائي على هذا النطاق',
    'LBL_FIND_SSL_WARN' => '<br>اختبار SSL قد يستغرق وقتا طويلا. يرجى التحلي بالصبر<br>',
    'LBL_FROM_ADDR' => 'عنوان "المرسل"',
    'LBL_FROM_ADDR_DESC' => 'عنوان البريد الإلكتروني المقدم هنا قد لا يظهر في قسم عنوان &quot;المرسل&quot; للبريد الإلكتروني المرسل بسبب القيود المفروضة من قبل موفر خدمة البريد. وفي هذه الظروف، سيتم استخدام عنوان البريد الإلكتروني المحدد في خادوم البريد الصادر.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'اسم "المرسل"',
    'LBL_GROUP_QUEUE' => 'إسناد إلى مجموعة',
    'LBL_HOME' => 'Home',
    'LBL_LIST_MAILBOX_TYPE' => 'استخدام حساب البريد',
    'LBL_LIST_NAME' => 'Name:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type',
    'LBL_LIST_SERVER_URL' => 'خادم البريد',
    'LBL_SERVER_ADDRESS' => 'عنوان الخادم',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'User Name',
    'LBL_USERNAME' => 'User Name',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Use SSL',
    'LBL_MAILBOX_TYPE' => 'الإجراءات المُمْكِنة',
    'LBL_DISTRIBUTION_METHOD' => 'طريقة التوزيع',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'قالب الرد التلقائي على القضايا الجديدة',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'اختر ردًا تلقائيًا لإشعار مرسلي البريد الإلكتروني بأنه قد تم إنشاء قضية. ويحتوي البريد الإلكتروني على رقم القضية في خانة الموضوع الذي يتقيد بإعدادات ماكرو القضية. يتم إرسال هذا الرد فقط عند تلقي أول بريد إلكتروني من المستلم.',
    'LBL_MAILBOX' => 'المجلدات المراقبة',
    'LBL_TRASH_FOLDER' => 'مجلد سلة المهملات',
    'LBL_SENT_FOLDER' => 'مجلد المرسل',
    'LBL_SELECT' => 'Select',
    'LBL_MARK_READ_NO' => 'الإيميل عُلِّم كمحذوف بعد إستيراده',
    'LBL_MARK_READ_YES' => 'الإيميل في الخادم بعد إستيراده',
    'LBL_MARK_READ' => 'أترك الرسائل في الخادم',
    'LBL_MAX_AUTO_REPLIES' => 'عدد الردود التلقائية',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'تعيين الحد الأقصى لعدد الردود التلقائية التي يمكن إرسالها إلى عنوان بريد إلكتروني فريد خلال فترة ٢٤ ساعة.',
    'LBL_PERSONAL_MODULE_NAME' => 'حساب البريد الشخصي',
    'LBL_CREATE_CASE' => 'إنشاء قضية من البريد الإلكتروني',
    'LBL_CREATE_CASE_HELP' => 'اختر لإنشاء سجلات قضايا تلقائياً في نظام SuiteCRM من جميع رسائل البريد الإلكتروني الواردة.',
    'LBL_MODULE_NAME' => 'حساب بريد مجموعة',
    'LBL_BOUNCE_MODULE_NAME' => 'صندوق بريد معالجة البريد المرتد',
    'LBL_MODULE_TITLE' => 'Inbound Email',
    'LBL_NAME' => 'Name',
    'LBL_NONE' => 'None',
    'LBL_ONLY_SINCE_NO' => 'لا. تحقق من جميع رسائل البريد الإلكتروني على خادم البريد.',
    'LBL_ONLY_SINCE_YES' => 'نعم.',
    'LBL_PASSWORD' => 'Password',
    'LBL_EMAIL_PASSWORD' => 'Password',
    'LBL_POP3_SUCCESS' => 'تم بنجاح اتصال اختبار POP3 الخاص بك.',
    'LBL_POPUP_TITLE' => 'Test Settings',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'اختر المجلد (المجلدات) المشترك فيها',
    'LBL_SELECT_TRASH_FOLDERS' => 'حدد مجلد سلة المهملات',
    'LBL_SELECT_SENT_FOLDERS' => 'حدد مجلد المرسل',
    'LBL_DELETED_FOLDERS_LIST' => 'المجلدات التالية %s إما غير موجودة أو تم حذفها من الخادم',
    'LBL_PORT' => 'Mail Server Port',
    'LBL_REPLY_TO_NAME' => 'اسم "الرد على"',
    'LBL_REPLY_TO_ADDR' => 'عنوان "الرد على"',
    'LBL_SAME_AS_ABOVE' => 'استخدام اسم/عنوان المرسل',
    'LBL_SERVER_OPTIONS' => 'الإعداد المتقدم',
    'LBL_SERVER_TYPE' => 'Mail Server Protocol',
    'LBL_SERVER_PORT' => 'Mail Server Port',
    'LBL_SERVER_URL' => 'Mail Server Address',
    'LBL_SSL_DESC' => 'If your mail server supports secure socket connections, enabling this will force SSL connections when importing email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'الفريق المحدد له حق الوصول إلى حساب البريد.',
    'LBL_SSL' => 'Use SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'نوع الفرز لمحتوى البريد الإلكتروني',
    'LBL_SYSTEM_DEFAULT' => 'System Default',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Test Settings',
    'LBL_TEST_CONNECTION_SETTINGS' => 'اختبار إعدادات الاتصال',
    'LBL_TEST_SUCCESSFUL' => 'تم الاتصال بنجاح.',
    'LBL_TEST_WAIT_MESSAGE' => 'One moment please...',
    'LBL_WARN_IMAP_TITLE' => 'البريد الإلكتروني الوارد معطل',
    'LBL_WARN_IMAP' => 'التحذيرات:',
    'LBL_WARN_NO_IMAP' => '<b>لا يمكن</b> للبريد الإلكتروني الوارد أن يعمل بدون مكتبات c-client IMAP المجمعة والمفعلة مع وحدة PHP. الرجاء الاتصال بمدير النظام الخاص بك لحل هذه المشكلة.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Schedulers',
    'LNK_SEED_QUEUES' => 'تغذية قائمة الانتظار من الفرق',
    'LBL_GROUPFOLDER_ID' => 'معرف مجلد المجموعات',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'السماح للمستخدمين بإرسال رسائل البريد الإلكتروني باستخدام اسم وعنوان "المرسل" على أنه عنوان "الرد على"',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'عندما يتم تحديد هذا الخيار، سوف يظهر عنوان البريد الإلكتروني المرتبط بحساب البريد الجماعي هذا كخيار لحقل المرسل خلال صياغة رسائل البريد الإلكتروني للمستخدمين الذين لديهم حق الوصول إلى حساب بريد المجموعة.',
    'LBL_STATUS_ACTIVE' => 'Active',
    'LBL_STATUS_INACTIVE' => 'Inactive',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'group',
    'LBL_ENABLE_AUTO_IMPORT' => 'استيراد رسائل البريد الإلكتروني تلقائياً',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'تحذير: أنت تقوم بتعديل إعدادات الاستيراد التلقائية التي قد تؤدي إلى فقدان البيانات.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'تحذير: يجب تمكين الاستيراد التلقائي عند إنشاء القضايا تلقائيًا.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sent Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archived Emails',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Reply',
    'LNK_SENT_EMAIL_LIST' => 'Sent Emails',
    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'الخيارات المحفوظة',
    'LBL_GROUP_ID' => 'معرف المجموعة',

    'LBL_OUTBOUND_CONFIGURATION' => 'تهيئة البريد الصادر',
    'LBL_CONNECTION_CONFIGURATION' => 'تهيئة الخادم',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'تهيئة الرد التلقائي',
    'LBL_CASE_CONFIGURATION' => 'تهيئة القضايا',
    'LBL_GROUP_CONFIGURATION' => 'تهيئة المجموعات',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'حسابات البريد الإلكتروني الصادر',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'معرف حساب البريد الإلكتروني الصادر',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'قالب الرد التلقائي للبريد الإلكتروني',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'معرف قالب الرد التلقائي للبريد الإلكتروني',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'قالب البريد الإلكتروني للقضايا',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'معرف قالب البريد الإلكتروني للقضايا',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'البروتوكول',
    'LBL_CONNECTION_STRING' => 'صيغة الاتصال',
    'LBL_DISTRIB_METHOD' => 'Distribution Method',
    'LBL_DISTRIB_OPTIONS' => 'خيارات التوزيع',

    'LBL_DISTRIBUTION_USER' => 'مستخدم التوزيع',
    'LBL_DISTRIBUTION_USER_ID' => 'معرف مستخدم التوزيع',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'معرف اتصال OAuth الخارجي',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Type',
    'LBL_AUTH_TYPE' => 'نوع المصادقة',
    'LBL_IS_DEFAULT' => 'Default',
    'LBL_SIGNATURE' => 'Signature',

    'LBL_OWNER_NAME' => 'Owner',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'تعيين كافتراضي',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'نقل الرسائل إلى سلة المهملات بعد الاستيراد؟',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
