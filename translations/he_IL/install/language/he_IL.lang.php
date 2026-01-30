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
    'LBL_BASIC_SEARCH' => 'חיפוש מהיר',
    'LBL_ADVANCED_SEARCH' => 'חיפוש מתקדם',
    'LBL_BASIC_TYPE' => 'סוג בסיסי',
    'LBL_ADVANCED_TYPE' => 'סוג מתקדם',
    'LBL_SYSOPTS_2' => 'איזה סוג של מסד הנתונים ישמש עבור המופע SuiteCRM שאתה עומד להתקין?',
    'LBL_SYSOPTS_DB' => 'ציין את סוג מסד הנתונים',
    'LBL_SYSOPTS_DB_TITLE' => 'סוג בסיס נתונים',
    'LBL_SYSOPTS_ERRS_TITLE' => 'אנא תקן את השגיאות הבאות לפני שתמשיך:',
    'ERR_DB_VERSION_FAILURE' => 'אין אפשרות לבדוק את גירסת מסד הנתונים.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'ספק את שם המשתמש של המשתמש admin SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'ספק את הסיסמה עבור המשתמש admin SuiteCRM. ',

    'ERR_CHECKSYS' => 'זוהו שגיאות במהלך בדיקת תאימות. בכדי להתקין את SuiteCRM כהלכה, יש לטפל בנושאים המפורטים להלן ולאחר מכן לחץ על הלחצן בדוק, או נסה שוב להתקין.',
    'ERR_CHECKSYS_CALL_TIME' => 'שגיאה. לבדוק מערכת Call Time',
    'ERR_CHECKSYS_CURL' => 'לא נמצאה: מתזמן SuiteCRM יפעל עם פונקציונליות מוגבלת.',
    'ERR_CHECKSYS_IMAP' => 'לא נמצא: לדואר נכנס וקמפיינים נדרשות ספריות IMAP.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (להגדיר אפשרות זו ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M או יותר בקובץ php.ini שלך)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'אזהרה: לא ניתן לכתוב',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'גרסאת ה PHP אינה נתמכת על-ידי SuiteCRM. יהיה עליך להתקין גרסה התואמת ל SuiteCRM. יש לעקוב אחרי מטריקס התאימות בהערות לגירסאות הנתמכות של PHP. הגרסה שלך היא ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'גרסאת ה IIS אינה נתמכת על-ידי SuiteCRM. יהיה עליך להתקין גרסה התואמת ל SuiteCRM. יש לעקוב אחרי מטריקס התאימות בהערות לגירסאות הנתמכות של IIS. הגרסה שלך היא ',
    'ERR_CHECKSYS_FASTCGI' => 'נוכל לזהות שאתה לא משתמש מיפוי FastCGI עבור PHP. יהיה עליך להתקין/להגדיר גירסה התואמת SuiteCRM. יש לעקוב אחרי המטריקס תאימות בהערות לגירסאות נתמכות. עיין http://www.iis.net/php/ <a href="http://www.iis.net/php/" target="_blank"></a> לפרטים ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'לקבלת חוויית אופטימלית באמצעות IIS/FastCGI sapi, יש להגדיר - fastcgi.logging 0 - בקובץ php. ini.',
    'LBL_DB_UNAVAILABLE' => 'מסד נתונים אינו זמין',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'לא נמצאה תמיכה במסד הנתונים. אנא ודא שיש לך את מנהלי ההתקנים הנחוצים עבור אחד מסוגי מסד הנתונים הנתמכים הבאים: MySQL או MS SQLServer. ייתכן שיהיה עליך לבטל את ההערה על התוסף בקובץ php. ini, או להדר את הקובץ הבינארי נכון, תלוי בגרסת PHP. אנא עיין במדריך ה-PHP לקבלת מידע נוסף אודות כיצד לאפשר תמיכה במסד הנתונים.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'פונקציות הקשורות לספריות מפענח ה-XML  הנחוצות ל-SuiteCRM לא נמצאו. ייתכן ועלייך לבטל הערות על התוסף בקובץ ה-php.ini, או להדר את הקובץ הבינארי הנכון, תלוי בגרסת ה-PHP. אנא עיין במדריך ה-PHP לקבלת מידע נוסף.',
    'ERR_CHECKSYS_MBSTRING' => 'Functions associated with the Multibyte Strings PHP extension (mbstring) that are needed by the SuiteCRM application were not found. <br/><br/>Generally, the mbstring module is not enabled by default in PHP and must be activated with --enable-mbstring when the PHP binary is built. Please refer to your PHP Manual for more information on how to enable mbstring support.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'מעקף הגדרות',
    'ERR_CHECKSYS_SAFE_MODE' => 'מצב בטוח פועל (מומלץ לבטל אותו ב php. ini)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib support not found: SuiteCRM reaps enormous performance benefits with zlib compression.',
    'ERR_CHECKSYS_ZIP' => 'ZIP support not found: SuiteCRM needs ZIP support in order to process compressed files.',
    'ERR_CHECKSYS_PCRE' => 'PCRE library not found: SuiteCRM needs PCRE library in order to process Perl style of regular expression pattern matching.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library version: SuiteCRM needs PCRE library 7.0 or above to process Perl style of regular expression pattern matching.',
    'ERR_DB_ADMIN' => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established. Please enter a valid user name and password. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established. Please enter a valid user name and password.',
    'ERR_DB_EXISTS_NOT' => 'המסד הנתונים שצוין אינו קיים.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database already exists with config data. To run an install with the chosen database, please re-run the install and choose: "Drop and recreate existing SuiteCRM tables?". To upgrade, use the Upgrade Wizard in the Admin Console. Please read the upgrade documentation located <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'The provided Database Name already exists -- cannot create another one with the same name.',
    'ERR_DB_EXISTS_PROCEED' => 'The provided Database Name already exists. You can<br>1. hit the back button and choose a new database name <br>2. click next and continue but all existing tables on this database will be dropped. <strong>This means your tables and data will be blown away.</strong>',
    'ERR_DB_HOSTNAME' => 'שם המחשב המארח יכול להיות ריק.',
    'ERR_DB_INVALID' => 'נבחר סוג מסד נתונים לא חוקי.',
    'ERR_DB_LOGIN_FAILURE' => 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established. Please enter a valid host, username and password',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established. Please enter a valid host, username and password',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established. Please enter a valid host, username and password',
    'ERR_DB_MYSQL_VERSION' => 'Your MySQL version (%s) is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported MySQL versions.',
    'ERR_DB_NAME' => 'שם המחשב המארח יכול להיות ריק.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "בסיס הנתונים לא יכול להכיל את הסימנים הבאים: '\\', '/', או '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "שם מסד הנתונים אינו יכול להתחיל במספר, '#', או '@' ואינו יכול להכיל רווח, '' '', '', '*', '/', '\\', '?', ':', '<', '>', '&', '!', או '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "שם מסד הנתונים יכול להיות מורכב רק מתווים אלפא-נומריים והסמלים '#', '_' או '$'",
    'ERR_DB_PASSWORD' => 'הסיסמאות שסופקו למנהל מסד הנתונים של SuiteCRM אינן תואמות. אנא הכנס שוב את אותן סיסמאות בשדות הסיסמה.',
    'ERR_DB_PRIV_USER' => 'ספק שם משתמש של מנהל מסד נתונים. המשתמש נדרש לחיבור הראשוני למסד הנתונים.',
    'ERR_DB_USER_EXISTS' => 'שם משתמש עבור משתמש מסד הנתונים SuiteCRM כבר קיים - לא ניתן ליצור שם אחר עם אותו שם. אנא הזן שם משתמש חדש.',
    'ERR_DB_USER' => 'הזן שם משתמש עבור מנהל מסד הנתונים SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'אנא תקן את השגיאות הבאות לפני שתמשיך:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'הסיסמאות שסופקו למשתמש מסד הנתונים SuiteCRM אינן תואמות. אנא הכנס שוב את אותן סיסמאות בשדות הסיסמה.',
    'ERR_ERROR_GENERAL' => 'השגיאות הבאות אירעו:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'אין אפשרות למחוק את הקובץ: ',
    'ERR_LANG_MISSING_FILE' => 'אין אפשרות למצוא קובץ: ',
    'ERR_LANG_NO_LANG_FILE' => 'לא נמצא קובץ חבילת שפה בקובץ הכלול: ',
    'ERR_LANG_UPLOAD_1' => 'הייתה בעיה בהעלאה שלך. בבקשה נסה שוב.',
    'ERR_LANG_UPLOAD_2' => 'ערכות שפה חייב להיות ארכיוני ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP לא הצליח להעביר את קובץ הזמני לספריית השדרוג.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'תיקיית לוגים שסופקה אינה ספריה חוקית.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'אין אפשרות לכתוב לתיקית לוגים שסופקה.',
    'ERR_NO_DIRECT_SCRIPT' => 'אין אפשרות לעבד את התסריט ישירות.',
    'ERR_NO_SINGLE_QUOTE' => 'לא ניתן להשתמש בגרשיים עבור סימון ',
    'ERR_PASSWORD_MISMATCH' => 'הסיסמאות שסופק עבור המשתמש admin SuiteCRM אינם תואמים.  נא הזן את אותן הסיסמאות מחדש בשדות סיסמה.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'לא ניתן לכתוב לקובץ <span class = stop> config.php </span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'אתה יכול להמשיך בהתקנה זו על ידי יצירת ידנית של קובץ config.php והדבקה של פרטי התצורה למטה לקובץ config.php. עם זאת, עליך ליצור <strong> </ strong> את קובץ config.php לפני שתמשיך לשלב הבא.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'זכרת ליצור את הקובץ config. php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'אזהרה: לא ניתן היה לכתוב לקובץ config.php. אנא וודא שהוא קיים.',
    'ERR_PERFORM_HTACCESS_1' => 'לא ניתן לכתוב ',
    'ERR_PERFORM_HTACCESS_2' => ' קובץ.',
    'ERR_PERFORM_HTACCESS_3' => 'אם ברצונך לאבטח את נגישת קובץ היומן שלך באמצעות הדפדפן, צור קובץ .htaccess בספריית היומן שלך עם השורה:',
    'ERR_PERFORM_NO_TCPIP' => '<b> לא הצלחנו לאתר חיבור לאינטרנט. </ b> כשיש לך חיבור, אנא בקר ב <a href="https://www.suitecrm.com/"> https://www.suitecrm.com / </a> כדי להירשם ל- SuiteCRM. על ידי העברת מידע אלינו אודות האופן בו החברה שלך מתכננת להשתמש ב- SuiteCRM, אנו יכולים להבטיח שאנחנו תמיד מספקים את היישום המתאים לצרכים העסקיים שלך.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'ספריית ההפעלה שסופקה אינה ספריה חוקית.',
    'ERR_SESSION_DIRECTORY' => 'ספריית ההפעלה שסופקה אינה ספרייה הניתנת לכתיבה.',
    'ERR_SESSION_PATH' => 'נתיב הפעלה נדרש אם ברצונך לציין משלך.',
    'ERR_SI_NO_CONFIG' => 'לא כללת את config_si.php בשורש המסמך, או שלא הגדרת את ב- config.php $sugar_config_si',
    'ERR_SITE_GUID' => 'זיהוי יישום נדרש אם ברצונך לציין משלך.',
    'ERROR_SPRITE_SUPPORT' => "נכון לעכשיו אנו לא מצליחים לאתר את ספריית GD, כתוצאה מכך לא תוכלו להשתמש בפונקציונליות CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'אזהרה: יש לשנות את תצורת ה- PHP שלך כדי לאפשר העלאת קבצים של לפחות 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'להעלות את גודל הקובץ',
    'ERR_URL_BLANK' => 'לספק את כתובת URL הבסיסית עבור המופע SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'לא יכול לאתר רשומת התקנה של',
    'ERROR_MANIFEST_TYPE' => 'קובץ ה- Manifest  חייב להיות מוגדר לסוג החבילה',
    'ERROR_PACKAGE_TYPE' => 'קובץ ה- Manifest מוגדר לחבילה לא מזוהה',
    'ERROR_VERSION_INCOMPATIBLE' => 'הקובץ המועלה אינו מותאם לגרסת SuiteCRM פרימיום',

    'LBL_BACK' => 'אחורה',
    'LBL_CANCEL' => 'בטל',
    'LBL_ACCEPT' => '. אני מקבל',
    'LBL_CHECKSYS_CACHE' => 'ספריות מטמון הניתנות לכתיבה',
    'LBL_DROP_DB_CONFIRM' => 'שם מסד הנתונים המצוי כבר קיים. <br> באפשרותך: 1 <br>. לחץ על כפתור ביטול ובחר שם בסיס נתונים חדש, או <br> 2. לחץ על לחצן קבל והמשך. כל הטבלאות הקיימות בבסיס הנתונים יושמטו. <strong> משמעות הדבר היא כי כל הטבלאות והנתונים הקיימים מראש ייפוצצו. </ strong>',
    'LBL_CHECKSYS_COMPONENT' => 'רכיב',
    'LBL_CHECKSYS_CONFIG' => 'קובץ תצורת SuiteCRM הניתן לכתיבה (config.php)',
    'LBL_CHECKSYS_CURL' => 'מודול cURL',
    'LBL_CHECKSYS_CUSTOM' => 'מדריך הניתן לכתיבה',
    'LBL_CHECKSYS_DATA' => 'ספריות תת-נתונים לכתיבה',
    'LBL_CHECKSYS_IMAP' => 'IMAP מודול',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'מודול מיתרי MB',
    'LBL_CHECKSYS_MEM_OK' => 'בסדר (ללא הגבלה)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'בסדר (בלתי מוגבל)',
    'LBL_CHECKSYS_MEM' => 'מגבלת הזיכרון של PHP',
    'LBL_CHECKSYS_MODULE' => 'מודולים הניתנים לכתיבה ספריות משנה וקבצים',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'לא זמין',
    'LBL_CHECKSYS_OK' => 'אוקיי',
    'LBL_CHECKSYS_PHP_INI' => 'מיקום קובץ התצורה של PHP ראה php.ini:',
    'LBL_CHECKSYS_PHP_OK' => 'בסדר (גרסה ',
    'LBL_CHECKSYS_PHPVER' => 'גרסת ה-PHP',
    'LBL_CHECKSYS_IISVER' => 'גירסה IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'בדוק שוב',
    'LBL_CHECKSYS_STATUS' => 'סטטוס',
    'LBL_CHECKSYS_TITLE' => 'קבלת בדיקת מערכת',
    'LBL_CHECKSYS_XML' => 'ניתוח XML',
    'LBL_CHECKSYS_ZLIB' => 'מודול דחיסת ZLIB',
    'LBL_CHECKSYS_ZIP' => 'מודול טיפול בכיווץ ZIP',
    'LBL_CHECKSYS_PCRE' => 'ספריית PRCE',
    'LBL_CHECKSYS_FIX_FILES' => 'אנא תקן את הקבצים או תיקייות הבאות לפני שתמשיך:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'אנא תקן את ספריות המודול הבאות ואת הקבצים שתחתיהן לפני שתמשיך:',
    'LBL_CHECKSYS_UPLOAD' => 'ספריית העלאה עם הרשאות כתיבה',
    'LBL_CLOSE' => 'סגור',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'נוצר',
    'LBL_CONFIRM_DB_TYPE' => 'סוג בסיס נתונים',
    'LBL_CONFIRM_NOT' => '. לא',
    'LBL_CONFIRM_TITLE' => 'אשר הגדרות',
    'LBL_CONFIRM_WILL' => 'כאשר',
    'LBL_DBCONF_DB_DROP' => 'מחיקת טבלאות',
    'LBL_DBCONF_DB_NAME' => 'שם מסד הנתונים',
    'LBL_DBCONF_DB_PASSWORD' => 'סיסמת משתמש מסד נתונים SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'הזן מחדש סיסמת משתמש מסד נתונים SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'משתמש מסד נתונים SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'משתמש מסד נתונים SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'שם משתמש של מנהל בסיס הנתונים',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'סיסמת מנהל המערכת של מסד הנתונים',
    'LBL_DBCONF_COLLATION' => 'Collation',
    'LBL_DBCONF_CHARSET' => 'קוד שפה',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'הדגרת בסיס נתונים מתקדמת',
    'LBL_DBCONF_DEMO_DATA' => 'אכלס מסד הנתונים עם נתוני הדגמה?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'בחר נתוני הדגמה',
    'LBL_DBCONF_HOST_NAME' => 'שם השרת',
    'LBL_DBCONF_HOST_INSTANCE' => 'מופע מארח',
    'LBL_DBCONFIG_SECURITY' => 'למטרות אבטחה, תוכל לציין משתמש בסיס נתונים ייחודי כדי להתחבר לבסיס הנתונים של ה-SuiteCRM. משתמש זה חייב להיות בעל הרשאות כתיבה, עדכון ואחזור מידע בבסיס הנתונים שיווצר עבור מופע ה-SuiteCRM הזה. משתמש זה יכול להיות מנהל בסיס הנתונים שהוגדר למעלה, או שתוכל לספק משתמש בסיס נתונים חדש או קיים.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'ספק משתמש קיים',
    'LBL_DBCONFIG_CREATE_DD' => 'הגדר משתמש כדי ליצור',
    'LBL_DBCONFIG_SAME_DD' => 'בדיוק כמו המשתמש Admin',
    'LBL_DBCONF_TITLE' => 'הגדרת בסיס הנתונים',
    'LBL_DBCONF_TITLE_NAME' => 'ספק שם מסד הנתונים',
    'LBL_DBCONF_TITLE_USER_INFO' => 'הכנס מידע משתמש בסיס נתונים',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'סיסמא',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'The installer has already been run once. As a safety measure, it has been disabled from running a second time. If you are absolutely sure you want to run it again, please go to your config.php file and locate (or add) a variable called \'installer_locked\' and set it to \'false\'. The line should look like this:',
    'LBL_DISABLED_HELP_1' => 'לקבלת עזרה בהתקנה, אנא בקרו את SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'התקנת SuiteCRM הושבתה',
    'LBL_HELP' => 'עזרה',
    'LBL_INSTALL' => 'התקן',
    'LBL_INSTALL_TYPE_TITLE' => 'אפשרויות התקנה',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'בחרו סוג התקנה',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>התקנה טיפוסית</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>התקנה מותאמת אישית</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'דורש מינימום מידע להתקנה. מומלץ למשתמשים חדשים.',
    'LBL_INSTALL_TYPE_MSG3' => 'מספק אפשרויות נוספות להדגרה בזמן ההתקנה. רוב אפשרויות אלה זמין גם לאחר ההתקנה בעמודי אדמיניסטרציה. מומלץ למשתמשים מתקדמים.',
    'LBL_LANG_1' => 'To use a language in SuiteCRM other than the default language (US-English), you can upload and install the language pack at this time. You will be able to upload and install language packs from within the SuiteCRM application as well. If you would like to skip this step, click Next.',
    'LBL_LANG_BUTTON_COMMIT' => 'התקן',
    'LBL_LANG_BUTTON_REMOVE' => 'הסרה',
    'LBL_LANG_BUTTON_UNINSTALL' => 'הסר',
    'LBL_LANG_BUTTON_UPLOAD' => 'העלאה',
    'LBL_LANG_NO_PACKS' => 'כלום',
    'LBL_LANG_PACK_INSTALLED' => 'ערכות השפה הבאות הותקנו: ',
    'LBL_LANG_PACK_READY' => 'ערכות השפה הבאות מוכנות להתקנה: ',
    'LBL_LANG_SUCCESS' => 'ערכת השפה הועלתה בהצלחה.',
    'LBL_LANG_TITLE' => 'ערכת שפה',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'מתקין עכשיו SuiteCRM. זה יכול לקחת עד כמה דקות.',
    'LBL_LANG_UPLOAD' => 'להעלות ערכת שפה',
    'LBL_LICENSE_ACCEPTANCE' => 'License Acceptance',
    'LBL_LICENSE_CHECKING' => 'בדיקת מערכת עבור תאימות.',
    'LBL_LICENSE_CHKENV_HEADER' => 'בודק סביבה',
    'LBL_LICENSE_CHKDB_HEADER' => 'מאמת אישורי מאגר נתונים.',
    'LBL_LICENSE_CHECK_PASSED' => 'המערכת עברה בדיקת תאימות.',
    'LBL_CREATE_CACHE' => 'מתכונן להתקנה...',
    'LBL_LICENSE_REDIRECT' => 'מפנה בעוד ',
    'LBL_LICENSE_I_ACCEPT' => '. אני מקבל',
    'LBL_LICENSE_PRINTABLE' => ' גרסה להדפסה ',
    'LBL_PRINT_SUMM' => 'הדפס סיכום',
    'LBL_LICENSE_TITLE_2' => 'רשיון SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'ישראל',
    'LBL_LOCALE_NAME_LAST' => 'ישראלי',
    'LBL_LOCALE_NAME_SALUTATION' => 'ד"ר.',

    'LBL_ML_ACTION' => 'פעולה',
    'LBL_ML_DESCRIPTION' => 'תיאור',
    'LBL_ML_INSTALLED' => 'תאריך התקנה',
    'LBL_ML_NAME' => 'שם',
    'LBL_ML_PUBLISHED' => 'תאריך פרסום',
    'LBL_ML_TYPE' => 'סוג',
    'LBL_ML_UNINSTALLABLE' => 'לא ניתן להסרה',
    'LBL_ML_VERSION' => 'גרסא',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySql',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'הבא',
    'LBL_NO' => 'לא',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'הגדרת סיסמת מנהל האתר',
    'LBL_PERFORM_CONFIG_PHP' => 'יצירת קובץ תצורה SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creating the database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>על</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'יוצר מסד נתונים עם המשתמש והסיסמה...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creating default SuiteCRM data',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creating default scheduler jobs',
    'LBL_PERFORM_DEFAULT_USERS' => 'יצירת משתמשים ברירת מחדל',
    'LBL_PERFORM_DEMO_DATA' => 'Populating the database tables with demo data (this may take a little while)',
    'LBL_PERFORM_DONE' => 'נעשה<br>',
    'LBL_PERFORM_FINISH' => 'סיום',
    'LBL_PERFORM_OUTRO_1' => 'ההתקנה של SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' כעת הושלמה!',
    'LBL_PERFORM_OUTRO_3' => 'הזמן הכולל: ',
    'LBL_PERFORM_OUTRO_4' => ' שניות.',
    'LBL_PERFORM_OUTRO_5' => 'הזיכרון משוער בשימוש: ',
    'LBL_PERFORM_OUTRO_6' => ' בתים.',
    'LBL_PERFORM_SUCCESS' => 'הצליח!',
    'LBL_PERFORM_TABLES' => 'Creating SuiteCRM application tables, audit tables and relationship metadata',
    'LBL_PERFORM_TITLE' => 'Perform Setup',
    'LBL_PRINT' => 'הדפס',
    'LBL_REG_CONF_1' => 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SuiteCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
    'LBL_REG_CONF_3' => 'תודה על ההרשמה. לחץ על כפתור סיום בשביל להיכנס לSuiteCRM. בפעם הראשונה תצטרך להיכנס עם שם משתמש admin וסיסמה שהכנסת בצעד 2.',
    'LBL_REG_TITLE' => 'רישום',

    'LBL_REQUIRED' => '* שדות חובה',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Application Admin Name',
    'LBL_SITECFG_ADMIN_PASS_2' => 'הזן מחדש סיסמת מנהל מערכת SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'סיסמת מנהל מערכת SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'מזהה ישום',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'אם נבחר, עלייך לספר מזהה יישום כדי לעקוף את המזהה שנוצר אוטומטית. המזהה מבטיח למנוע מצב שמופע אחד של SuiteCRM לא יהיה בשימוש של מופעים אחרים. אם יש לך מקבץ של התקנות SuiteCRM, עליהם לחלוק את אותו מזהה היישום.',
    'LBL_SITECFG_CUSTOM_ID' => 'הכנס את מזהה היישום שלך',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'אם נבחר, עלייך לציין ספריית לוג כדי לעקוף את ספריית ברירת המחדל ללוג של SuiteCRM. ללא קשר למיקום קובץ הלוג, גישה לקובץ זה באמצעות הדפדפן תיחסם ע"י הפניית .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'השתמש בספריית לוג אחרת',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'אם נבחר, עלייך לספר ספרייה מוגנת כדי לאחסן את מידע ה-session של SuiteCRM. ניתן לבצע פעולה זאת כדי למנוע פגיעות של המידע בשרתים משותפים.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'השתמש בספריית Session אחרת עבור SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>אנא תקן את השגיאות הבאות לפני שתמשיך:</b>',
    'LBL_SITECFG_LOG_DIR' => 'ספריית לוגים',
    'LBL_SITECFG_SESSION_PATH' => 'נתיב לספריית Session<br>(חייבת להיות ניתנת לכתיבה)',
    'LBL_SITECFG_SITE_SECURITY' => 'בחר אפשרויות אבטחה',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'If selected, the system will periodically check for updated versions of the application.',
    'LBL_SITECFG_SUITE_UP' => 'בדוק באופן אוטומטי אחר עדכונים?',
    'LBL_SITECFG_TITLE' => 'תצורת האתר',
    'LBL_SITECFG_TITLE2' => 'Identify Administration User',
    'LBL_SITECFG_SECURITY_TITLE' => 'אבטחת אתר',
    'LBL_SITECFG_URL' => 'URL of SuiteCRM Instance',
    'LBL_SITECFG_ANONSTATS' => 'לשלוח סטטיסטיקות שימוש בצורה אנונימית?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'If selected, SuiteCRM will send <b>anonymous</b> statistics about your installation to SuiteCRM Inc. every time your system checks for new versions. This information will help us better understand how the application is used and guide improvements to the product.',
    'LBL_SITECFG_URL_MSG' => 'Enter the URL that will be used to access the SuiteCRM instance after installation. The URL will also be used as a base for the URLs in the SuiteCRM application pages. The URL should include the web server or machine name or IP address.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Enter a name for your system. This name will be displayed in the browser title bar when users visit the SuiteCRM application.',
    'LBL_SITECFG_PASSWORD_MSG' => 'After installation, you will need to use the SuiteCRM admin user (default username = admin) to log in to the SuiteCRM instance. Enter a password for this administrator user. This password can be changed after the initial login. You may also enter another admin username to use besides the default value provided.',
    'LBL_SITECFG_COLLATION_MSG' => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn\'t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT' => 'תמיכת Sprite',
    'LBL_SYSTEM_CREDS' => 'אישורי מערכת',
    'LBL_SYSTEM_ENV' => 'סביבת המערכת',
    'LBL_SHOW_PASS' => 'הצג סיסמאות',
    'LBL_HIDE_PASS' => 'הסתר סיסמאות',
    'LBL_HIDDEN' => '<i>(מוסתר)</i>',
    'LBL_STEP1' => 'שלב 1 מתוך 2 - דרישות קדם-התקנה',
    'LBL_STEP2' => 'שלב 2 מתוך 2 - תצורה',
    'LBL_STEP' => 'צעד',
    'LBL_TITLE_WELCOME' => 'ברוכים הבאים ל SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'האם אתה מוכן להתקין?',
    'REQUIRED_SYS_COMP' => 'רכיבי מערכת חובה',
    'REQUIRED_SYS_COMP_MSG' =>
        'לפני שתתחיל, אנא וודא שיש לך את הגרסאות הנתמכות של רכיבי המערכת הבאים: <br>
                      <ul>
                      <li> מערכת ניהול בסיסי נתונים / בסיסי נתונים (דוגמאות: MariaDB, MySQL או SQL Server) </li>
                      <li> שרת אינטרנט (Apache, IIS) </li>
                      </ul>
                      עיין במטריקס התאימות בהודעות הגרסא עבור
                      רכיבי מערכת תואמים לגירסת SuiteCRM שאתה מתקין. <br>',
    'REQUIRED_SYS_CHK' => 'בדיקת מערכת ראשונית',
    'REQUIRED_SYS_CHK_MSG' =>
        'כשתתחיל בתהליך ההתקנה, תבוצע בדיקת מערכת בשרת האינטרנט עליו נמצאים קבצי SuiteCRM כדי
                      ודא שהמערכת מוגדרת כראוי וכוללת את כל הרכיבים הדרושים
                      כדי להשלים את ההתקנה בהצלחה. <br> <br>
                      המערכת בודקת את כל הדברים הבאים: <br>
                      <ul>
                      <li> <b> גרסת PHP </b> & # 8211; חייב להיות תואם ליישום </ li>
                      <li> <b> משתני הפעלה </ b> & # 8211; חייב לעבוד כראוי </ li>
                      <li> <b> מיתרי MB </b> & # 8211; חייבים להתקין ולהפעיל ב- php.ini </li>
                      <li> <b> תמיכה במאגר נתונים </ b> & # 8211; חייב להתקיים עבור MariaDB, MySQL או SQL Server </li>
                      <li> <b> Config.php </b> & # 8211; חייבים להתקיים וחייבים לקבל את ההרשאות המתאימות כדי שיהיה ניתן לכתיבה </li>
                      <li> על קבצי SuiteCRM הבאים להיות ניתנים לכתיבה: <ul> <li> <b> / custom </li>
                      <li> / cache </li>
                      <li> / modules </li>
                      <li>/upload</b></li></ul></li> </ul>
                                  אם הסימון נכשל, לא תוכל להמשיך בהתקנה.
                                  תוצג הודעת שגיאה שתסביר מדוע המערכת שלך לא עברה את ההמחאה.
                                  לאחר ביצוע השינויים הנדרשים, אתה יכול לעבור שוב את בדיקת המערכת כדי להמשיך בהתקנה. <br>',


    'REQUIRED_INSTALLTYPE' => 'התקנה אופיינית או מותאמת אישית',
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
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Please read the following important information before proceeding with the installation. The information will help you determine whether or not you are ready to install the application at this time.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Choose your language</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'אשף ההתקנה',
    'LBL_WIZARD_TITLE' => 'אשף ההתקנה SuiteCRM: ',
    'LBL_YES' => 'כן',

    'LBL_PATCHES_TITLE' => 'התקנת תיקונים האחרונה',
    'LBL_MODULE_TITLE' => 'התקנת ערכות שפה',
    'LBL_PATCH_1' => 'אם ברצונך לדלג על שלב זה, לחץ על הבא.',
    'LBL_PATCH_TITLE' => 'תיקון מערכת',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Configuration Error',
    'LBL_SYSTEM_NAME' => 'שם המערכת',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'לספק שם המערכת עבור המופע SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'בחר קובץ תיקון מהמחשב המקומי',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimum Php version required is 5.1.0. Recommended Php version is 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(הגירסה הנוכחית שלך של php היא ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Recommended php version is 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'פרטי חשבון חדש',
        'type' => 'system',
        'description' => 'This template is used when the System Administrator sends a new password to a user.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Here is your account username and temporary password:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'System-generated password email',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'אפס את סיסמת החשבון שלך',
        'type' => 'system',
        'description' => "This template is used to send a user a link to click to reset the user's account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'שכחתי סיסמה דוא"ל',
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

    'LBL_FROM_NAME' => 'שם השולח:',
    'LBL_FROM_ADDR' => 'כתובת שולח',

    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',

    'LBL_SMTPTYPE_GMAIL' => 'ג\'ימייל',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'אחר',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_MAIL_SMTPSERVER' => 'שרת SMTP',
    'LBL_MAIL_SMTPPORT' => 'פורט של SMTP',
    'LBL_MAIL_SMTPAUTH_REQ' => 'השתמש באישור הגדרות דואר',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'לאפשר SMTP מעל SSL או TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',


    'LBL_MAIL_SMTPUSER' => 'שם משתמש SMTP',
    'LBL_MAIL_SMTPPASS' => 'סיסמת SMTP',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'שם:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'NEW_LOGO' => 'העלה לוגו חדש  (212x40)',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'העלאה',
    'CURRENT_LOGO' => 'לוגו נוכחי בשימוש',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'הגדרות מערכת מקומית',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_DATE_FORMAT' => 'פורמט תאריך:',
    'LBL_TIME_FORMAT' => 'פורמט זמן:',
    'LBL_TIMEZONE' => 'Time Zone:',
    'LBL_LANGUAGE' => 'שפה:',
    'LBL_CURRENCY' => 'מטבע:',
    'LBL_CURRENCY_SYMBOL' => 'סמל מטבע:',
    'LBL_CURRENCY_ISO4217' => 'קוד מטבע ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator:',
    'LBL_DECIMAL_SEP' => 'Decimal symbol:',
    'LBL_NAME_FORMAT' => 'פורמט שם:',
    'UPLOAD_LOGO' => 'אנא המתן, מעלה לוגו..',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'The uploaded file was only partially uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'No file was uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Missing a temporary folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Failed to write file to disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'מתקין...',

    'LBL_EMAIL_ADDRESS' => 'דואל:',
    'ERR_ADMIN_EMAIL' => 'כתובת הדוא"ל של המנהל אינה נכונה.',
    'ERR_SITE_URL' => 'נדרשת כתובת URL של האתר.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'צור מסד נתונים...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'יצירת הגדרות ברירת מחדל...',
    'STAT_INSTALL_FINISH' => 'סיום התקנה...',
    'STAT_INSTALL_FINISH_LOGIN' => 'תהליך ההתקנה הסתיימה, <a href="%s"> אנא התחבר...</a>',
    'LBL_LICENCE_TOOLTIP' => 'קודם כל יש לקבל רישיון',

    'LBL_MORE_OPTIONS_TITLE' => 'אפשרויות נוספות',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Database error',
    'LBL_OLD_PHP' => 'Old PHP Version Detected!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'משתמש',
    'LBL_DBCONFIG_MSG3_LABEL' => 'שם מסד הנתונים',
    'LBL_DBCONFIG_MSG3' => 'Name of the database that will contain the data for the SuiteCRM instance you are about to install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'שם השרת',
    'LBL_DBCONFIG_MSG2' => 'שם שרת האינטרנט או השרת המארח את בסיס הנתונים (לדוגמא: www.mydomain.com).
במידה ומותקן מקומית, מסיבת ביצועים מומלץ להשתמש ב-\'localhost\' מאשר ב- \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'שם משתמש וסיסמה של מנהל בסיס הנתונים בעל הרשאת יצירת טבלאות ומשתמשים וכתיבה, נדרש לצורך התקנת בסיס הנתונים ל- SuiteCRM.'
);
