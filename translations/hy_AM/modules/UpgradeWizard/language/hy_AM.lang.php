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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Հնարավոր չէ որոշել խումբը',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Հնարավոր չէ հաստատել տիրոջը',
    'ERR_UW_CONFIG_WRITE' => 'config.php նոր տարբերակի թարմացման ինֆիրմացիայի սխալ։',
    'ERR_UW_CONFIG' => 'Դարձրեք config.php ֆայլը հասանելի գրելու համար և վերաբեռնեք էջը:',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Ֆայլապանակների կատալոգում հնարավոր չէ գրառում կատարել',
    'ERR_UW_FILE_NOT_COPIED' => 'Ֆայլը պատճենված չէ։',
    'ERR_UW_FILE_NOT_DELETED' => 'Հնարավոր չէ հեռացնել փաթեթը',
    'ERR_UW_FILE_NOT_READABLE' => 'Ֆայլը չէր կարող ընթերցված լինել:',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Ֆայլը հնարավոր չէ տեղաշարժել կամ գրանցել  ',
    'ERR_UW_FLAVOR_2' => 'Տեղադրվող տարբերակ՝',
    'ERR_UW_FLAVOR' => 'SuiteCRM-ի ընթացիկ տարբերակը՝',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log չի կարող ստեղծվել/մուտքագրվել։ Խնդրում ենք սահմանեք մուտք գործելու իրավունքը Ձեր SuiteCRM պանակների կատալոգ։',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload պարբերության արժեքը բարձր է 1-ից։ Խնդրում ենք փոխեք այդ արժեքը php.ini ֆայլում և վերաբեռնավորեք սերվերը։',
    'ERR_UW_NO_FILE_UPLOADED' => 'Խնդրում ենք նշել ֆայլը և կրկին փորձել:',
    'ERR_UW_NO_FILES' => 'Սխալ է տեղի ունեցել, ստուգման համար ոչ մի  ֆայլ չի գտնվել:',
    'ERR_UW_NO_MANIFEST' => 'zip ֆայլում բացակայում է manifest.php ֆայլը: Անհնար է շարունակել:',
    'ERR_UW_NO_VIEW' => 'Դիտման համար սխալ էջ է նշված:',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Բեռնումը սխալ է կատարվել։',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Հնարավոր չէ ստեղծել ժամանակավոր պանակների կատալոգ։ Համոզվեք, որ կան թույլտվության բավարար իրավունքներ։',
    'ERR_UW_ONLY_PATCHES' => 'Այս էջում դուք կարող եք վերբեռնել միայն թարմացումներ։',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Նախնական ստուգման ժամանակ սխալներ են հայտնաբերվել:',
    'ERR_UW_UPLOAD_ERR' => 'Ֆայլի սխալ բեռնում է տեղի ունեցել, խնդրում ենք կրկին փորձել։<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM տարբերակ՝ : ',
    'ERR_UW_PHP_VERSION' => 'PHP տարբերակ՝',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM տարբերակ՝ : ',
    'ERR_UW_WRONG_TYPE' => 'Սխալ էջ ',
    'LBL_BUTTON_BACK' => '< Վերադարձ',
    'LBL_BUTTON_CANCEL' => 'Չեղարկել',
    'LBL_BUTTON_DELETE' => 'Ջնջել Փաթեթը',
    'LBL_BUTTON_DONE' => 'Պատրաստ է',
    'LBL_BUTTON_EXIT' => 'Ելք',
    'LBL_BUTTON_NEXT' => 'Հաջորդ >',
    'LBL_BUTTON_RECHECK' => 'Վերստուգել',
    'LBL_BUTTON_RESTART' => 'Վերագործարկել',

    'LBL_UPLOAD_UPGRADE' => 'Թարմացման փաթեթի բեռնում',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Ֆայլի պահուստային օրինակ',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Այս թարմացման պահուստային ֆայլերը հնարավոր է գտնել՝ ',
    'LBL_UW_BACKUP' => 'Պահուստային օրինակի ստեղծում',
    'LBL_UW_CANCEL_DESC' => 'Թարմացումը չեղարկվել է: Պատճենված բոլոր ժամանակավոր ֆայլերը և ներբեռնված բոլոր թարմացման ֆայլերը հեռացվել են: ',
    'LBL_UW_CHECK_ALL' => 'Ընտրել բոլորը',
    'LBL_UW_CHECKLIST' => 'Թարմացման քայլեր',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Թարմացում. ձեռքով միացրեք ֆայլերը',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Օգտագործեք ձեր իմացած ամենից հարմար եղանակը այդ ֆայլերը միացնելու համար: Մինչ այն ավարտվի, ձեր SuiteCRM տեղադրումը անորոշ վիճակում կլինի և թարմացումը չի ավարտվի:  ',
    'LBL_UW_COMPLETE' => 'Ավարտված',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Համակարգի բոլոր կարգաբերման պահանջները բավարարված են:',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP կարգաբերում՝ Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL մոդուլ',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP մոդուլ',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings մոդուլ',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings-ի mbstring.func_overload պարամետր',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP կարգաբերում. օգտագործվող հիշողության առավելագույն չափ',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP կարգաբերում. Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Տվյալների բազայի նվազագույն տարբերակը',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'php.ini գտնվելու հասցեն',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'PHP նվազագույն տարբերակը',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP կարգաբերում՝ Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Հայտնաբերված կարգավորումներ',
    'LBL_UW_COMPLIANCE_XML' => 'XML Վորլուծում',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip  ապահովում',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Տարբերակ',
    'LBL_UW_COPIED_FILES_TITLE' => 'Ֆայլերի պատճենահանվել են հաջողությամբ',

    'LBL_UW_DB_CHOICE1' => 'Թարմացման ուղեցույցի միջոցով  հարցման կատարում',
    'LBL_UW_DB_CHOICE2' => 'SQL հարցումների ձեռքով կատարում',
    'LBL_UW_DB_ISSUES_PERMS' => 'Տվյալների բազաների արտոնություններ',
    'LBL_UW_DB_METHOD' => 'Տվյալների բազայի թարմացման եղանակ',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Բոլոր արտոնությունները հասանելի են',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Անհրաժեշտ արտոնություն',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Տեղադրվել են թարմացման հետևյալ փաթեթները՝',
    'LBL_UW_END_LOGOUT_PRE' => 'Բարելավումը ավարտված է:',
    'LBL_UW_END_LOGOUT_PRE2' => 'Սեղմեք Done կոճակը Թարմացման ուղեցույցից դուրս գալու համար:',
    'LBL_UW_END_LOGOUT' => 'Եթե Դուք պլանավորում եք տեղադրել ևս մեկ թարմացման փաթեթ, դուրս եկեք և մուտք գործեք համակարգ կրկին։',

    'LBL_UW_FILE_DELETED' => 'հեռացվել են:<br> ',
    'LBL_UW_FILE_GROUP' => 'Խումբ',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Ֆայլի թույլտվություններ',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Բոլոր ֆայլերը գրառումների համար հասանելի են</b>',
    'LBL_UW_FILE_OWNER' => 'Սեփականատեր',
    'LBL_UW_FILE_PERMS' => 'Թույլտվություններ',
    'LBL_UW_FILE_UPLOADED' => 'վերբեռնված էր',
    'LBL_UW_FILE' => 'Ֆայլի անվանումը',
    'LBL_UW_FILES_QUEUED' => 'Թարմացման հետևյալ փաթեթները պատրաստ են տեղադրման համար՝',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Սեղմեք Next բեռնելու թարմացման փաթեթները:</b>',
    'LBL_UW_FROZEN' => 'Նախքան շարունակելը բեռնեք թարմացման փաթեթը:',
    'LBL_UW_HIDE_DETAILS' => 'Թաքցնել մանրամասնությունները',
    'LBL_UW_IN_PROGRESS' => 'Ընթացքի մեջ է',
    'LBL_UW_INCLUDING' => 'Ներառյալ',
    'LBL_UW_INCOMPLETE' => 'Անավարտ',
    'LBL_UW_MANUAL_MERGE' => 'Ֆայլի վերագրանցում',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Չեն հայտնաբերվել գրանցված թարմացումներ:',
    'LBL_UW_NONE' => 'Ոչ ոք',
    'LBL_UW_OVERWRITE_DESC' => 'Բոլոր փոփոխված ֆայլերը կլինեն վերագրանցված, ներառյալ սկզբնական կոդով ֆայլերը և ձևանմուշները, որոնց մեջ փոփոխություններ եք կատարել: Դուք համոզվա՞ծ եք, որ ցանկանում եք շարունակել։',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Ստեղծե՞լ որևէ խնդիր ձեռքով միավորելու համար:',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Ուզու՞մ եք ուղարկել ինքներդ ձեզ նամակ ձեռքով վերագրանցելու հիշեցումով։',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Ստորև նշված ֆայլերը ձևափոխվել են: Հանեք նշանը այն ֆայլերից, որոնք պետք է ձեռքով միավորվեն: <i>Դասավորության ցանկացած փոփոխություն ավտոմատ կերպով բերում է նշանի հեռացմանը: Նշեք այն ֆայլերը, որոնք պետք է վերագրանցվեն:   ',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Չի պահանջվում ձեռքով ֆայլերի միավորում:',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Չի պահանջվում:',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Անփոփոխ մնացած ֆայլեր՝',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Բոլոր նախնական ստուգումները կատարվել են:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Սեղմեք Next թարմացման ֆայլերը համակարգում պատճենելու համար:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Ծանոթագրություն.</b>Թարմացման մնացած մասը պարտադիր է և <b>Next</b> սեղմելով դուք պետք է ավարտեք գործընթացը: Եթե չեք ցանկանում շարունակել, սեղմեք <b>Cancel</b> կոճակը:',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Վերագրանցել բոլոր ֆայլերը',

    'LBL_UW_REBUILD_TITLE' => 'Թարմացման արդյունքներ',
    'LBL_UW_SCHEMA_CHANGE' => 'Սխեմայի փոփոխություններ',

    'LBL_UW_SHOW_COMPLIANCE' => 'Ցուցադրել հայտնաբերված կարգաբերումները',
    'LBL_UW_SHOW_DB_PERMS' => 'Ցույց տալ տվյալների բազայից օգտվելու պակասող թույլտվությունները ',
    'LBL_UW_SHOW_DETAILS' => 'Ցույց տալ մանրամասները',
    'LBL_UW_SHOW_DIFFS' => 'Ցույց տալ այն ֆայլերը, որոնք անհրաժեշտ է վերագրանցել ձեռքով',
    'LBL_UW_SHOW_NW_FILES' => 'Ցույց տալ այն ֆայլերը, որոնցից օգտվելու թույլտվությունները անբավարար են',
    'LBL_UW_SHOW_SCHEMA' => 'Ցույց տալ սխեմայի փոփոխության սքրիփթը',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Ցույց տալ անհաջող հարցումները',
    'LBL_UW_SHOW' => 'Ցուցադրում',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Բաց թողնված ֆայլեր',
    'LBL_UW_SQL_RUN' => 'Ստուգել, թե երբ է SQL ձեռքով կատարվել',
    'LBL_UW_START_DESC' => 'Այս ուղեցույցը կօգնի ձեզ թարմացնել համակարգի ընթացիկ տարբերակը:',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Սեղմեք Next, որպեսզի ստուգեք, թե արդյոք ձեր համակարգը պատրա՞ստ է թարմացման համար: Այդ ընթացքում ստուգվում են ֆայլերից օգտվելու թույլտվությունները, տվյալների բազայի արտոնությունները և սերվերի կարգաբերումները:',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Թարմացման նոր ուղեցույցը այժմ կվերսկսի թարմացումը: Խնդրում ենք շարունակել թարմացումը:',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Ողջունում ենք ձեզ Թարմացման ուղեցույցում: ',

    'LBL_UW_TITLE_CANCEL' => 'Չեղարկել',
    'LBL_UW_TITLE_COMMIT' => 'Թարմացման կատարում',
    'LBL_UW_TITLE_END' => 'Արդյունքների ամփոփում',
    'LBL_UW_TITLE_PREFLIGHT' => 'Նախնական ստուգում',
    'LBL_UW_TITLE_START' => 'Բարի գալուստ',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Համակարգի ստուգում',
    'LBL_UW_TITLE_UPLOAD' => 'Փաթեթի բեռնում',
    'LBL_UW_TITLE' => 'Թարմացնելու խորհրդատու',
    'LBL_UW_UNINSTALL' => 'Ապատեղադրել',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Ընդունել լիցենզիան',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Կոնվերտացնել լիցենզիան',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Կատարվում է թարմացման սկզբնական փուլը',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Կատարվում է համակարգի ստուգում',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Կատարվում է լիցենզիայի ստուգում',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Կատարվում է նախնական ստուգում',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Կատարվում է ֆայլերի պատճենում',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Կատարվում է թարմացման հիմնական փուլը',
    'LBL_UW_COMMIT_DESC' => 'Սեղմեք Next կոճակը թարմացման լրացուցիչ սքրիփթները կատարելու համար:',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Կատարվում են թարմացման սքրիփթները',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Կատարվում է թարմացման եզրափակիչ փուլը',
    'LBL_UPGRADE_IN_PROGRESS' => 'ընթացքի մեջ է     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Ծախսված ժամանակը',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Կատարվում է թարմացման չեղարկում և մաքրում',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Թարմացումը կարող է որոշ ժամանակ պահանջել',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Կատարվում է բեռնված թարմացման փաթեթի ստուգում',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Կատարվում է թարմացման փաթեթի բեռնում',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Թարմացման ուղեցույցը հրաժարվում է հին՝ 451 սխեմայից',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Թարմացման ավարտից հետո ձեռքով հին սխեմաների հեռացում',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Հին սխեմաների հեռացման եղանակ',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Ցույց տալ այն հին սխեմաները, որոնք կարելի է հեռացնել ',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Բաց թողնված հարցումներ',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Պահանջվում են Php version 5 և ավելի բարձր տարբերակները:',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ձեր PHP տարբերակը չի աջակցվում SuiteCRM-ի կողմից: Դուք պետք է տեղադրեք համատեղելի տարբերակ: Լրացուցիչ տեղեկությունների համար աջակցվող PHP տարբերակների մասին, դուք կարող եք տեսնել "համատեղելիության մատրիցան թողարկման նշումների" մեջ: Ձեր տարբերակն է ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php միացված է ետադարձ համատեղելիության ռեժիմ։ Շարունակելու համար անջատեք zend.ze1_compatibility_mode ընտրանքը',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Գործողություն',
    'LBL_ML_CANCEL' => 'Չեղարկել',
    'LBL_ML_COMMIT' => 'Հանձնարարել',
    'LBL_ML_DESCRIPTION' => 'Նկարագրություն',
    'LBL_ML_INSTALLED' => 'Ամսաթիվը տեղադրված է',
    'LBL_ML_NAME' => 'Անվանում',
    'LBL_ML_PUBLISHED' => 'Հրատարակման ամսաթիվը',
    'LBL_ML_TYPE' => 'Տեսակ',
    'LBL_ML_UNINSTALLABLE' => 'Հնարավոր է հեռացնել',
    'LBL_ML_VERSION' => 'Տարբերակ',
    'LBL_ML_INSTALL' => 'Տեղադրել',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'ձեր ընթացիկ php տարբերակն է՝: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Թարմացման ուղեցույց',
    'LBL_UPLOAD_SUCCESS' => 'Թարմացման փաթեթը հաջողությամբ բեռնվել է: Սեղմեք Next վերջնական ստուգումը կատարելու համար:',
    'LBL_UW_TITLE_LAYOUTS' => 'Հաստատել մակետները',
    'LBL_LAYOUT_MODULE_TITLE' => 'Մակետներ',
    'LBL_LAYOUT_MERGE_DESC' => 'Կան նոր դաշտեր, որոնք ավելացվել են այս թարմացման ընթացքում և որոնք կարող են ավտոմատ կերպով լրացնել  ձեր ներկայիս մոդուլի մակետները: Նոր դաշտերի մասին ավելի մանրամասն տեղեկությունները տրված են թարմացման ուղեկցող նյութերի ծանոթագրություններում: <br><br>եթե դուք չեք ցանկանում ավելացնել նոր դաշտերը, ապա թողեք մոդուլների ցուցակի համապատասխան տարրերը չնշված: Նոր դաշտերը հասանելի կլինեն համակարգի թարմացված տարբերակի Ստուդիայում: <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Սեղմեք Next կոճակը հաստատելու փոփոխությունները և ավարտելու թարմացումը:',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Սեղմեք Next կոճակը թարմացումն ավարտելու համար:',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Հաստատել մակետները',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Հաստատել մակետի արդյունքները',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Այս մակետները հաջողությամբ թարմացվել են․',
    'LBL_SELECT_FILE' => 'Ընտրել ֆայլը՝',
    'ERROR_VERSION_INCOMPATIBLE' => 'Վերբեռնված ֆայլը համատեղելի չէ տեղադրված SuiteCRM տարբերակի հետ․ ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Բեռնված ֆայլը համատեղելի չէ PHP այս տարբերակի հետ՝',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Վերբեռնված ֆայլը համատեղելի չէ տեղադրված SuiteCRM տարբերակի հետ․ ',
    'LBL_LANGPACKS' => 'Լեզուների փաթեթներ' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Մոդուլների բեռնավորիչ' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Թեմաներ' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Գործընթաց' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Թարմացնել' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Ընթացքում է' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Համատեղելի տարբերակը սահմանված չէ մանիֆեստ- ֆայլում',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Ներբեռնված ֆայլի չափը գերազանցում է upload_max_filesize directive in php.ini պարամետրում նշված մեծությունը: ',
        2 => 'Ներբեռնվող ֆայլի չափը գերազանցում է այն մեծությունը, որը նշված է HTML ձևի MAX_FILE_SIZE պարամետրում:',
        3 => 'Ներբեռնվող ֆայլը միայն մասնակիորեն է ներբեռնված:',
        4 => 'Ոչ մի ֆայլ չի բեռնվել:',
        5 => 'Անհայտ սխալ:',
        6 => 'Բացակայում է ժամանակավոր ֆայլերի պանակը:',
        7 => 'Չհաջողվեց ֆայլը սկավառակի վրա գրանցել:',
        8 => 'Ֆայլի ներբեռնումը դադարեցվել է ընդլայման անհամատեղելիության պատճառով:',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
