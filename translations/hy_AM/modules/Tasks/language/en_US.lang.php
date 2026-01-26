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
    'LBL_MODULE_NAME' => 'Խնդիրներ',
    'LBL_MODULE_TITLE' => 'Խնդիրներ․ Գլխավոր',
    'LBL_SEARCH_FORM_TITLE' => 'Խնդրի որոնումը',
    'LBL_LIST_FORM_TITLE' => 'Խնդիրների ցուցակ',
    'LBL_NEW_FORM_TITLE' => ' Ստեղծել առաջադրանք',
    'LBL_LIST_CLOSE' => 'Փակել',
    'LBL_LIST_SUBJECT' => 'Թեմա',
    'LBL_LIST_CONTACT' => 'Կոնտակտ',
    'LBL_LIST_PRIORITY' => 'Առաջնահերթություն',
    'LBL_LIST_RELATED_TO' => 'Առնչվում է',
    'LBL_LIST_DUE_DATE' => 'Կատարման ամսաթիվը',
    'LBL_LIST_DUE_TIME' => 'Կատարման ժամանակը',
    'LBL_SUBJECT' => 'Թեմա',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_DUE_DATE' => 'Վերջնաժամկետը․',
    'LBL_DUE_TIME' => 'Տրված ժամանակ․',
    'LBL_PRIORITY' => 'Առաջնահերթություն',
    'LBL_DUE_DATE_AND_TIME' => 'Կատարման ամսաթիվը և ժամանակը․',
    'LBL_START_DATE_AND_TIME' => 'Մեկնարկի ամսաթիվը և ժամանակը․',
    'LBL_START_DATE' => 'Մեկնարկի ամսաթիվը',
    'LBL_LIST_START_DATE' => 'Մեկնարկի ամսաթիվը',
    'LBL_START_TIME' => 'Մեկնարկի ժամանակը․',
    'DATE_FORMAT' => '(տտտտ-աա-օօ)',
    'LBL_NONE' => 'Ոչ ոք',
    'LBL_CONTACT' => 'Կոնտակտ․',
    'LBL_EMAIL_ADDRESS' => 'էլ-փոստի հասցե․',
    'LBL_PHONE' => 'Հեռ․',
    'LBL_EMAIL' => 'էլ-փոստի հասցե․',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_NAME' => 'Անվանում․',
    'LBL_CONTACT_NAME' => 'Կոնտակտի անունը ',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_DATE_DUE_FLAG' => 'Չկա կատարման ամսաթիվը',
    'LBL_DATE_START_FLAG' => 'Մեկնարկի ամսաթիվը չկա',
    'LBL_LIST_MY_TASKS' => 'Իմ ընթացիկ խնդիրները',
    'LNK_NEW_TASK' => 'Ստեղծել խնդիր',
    'LNK_TASK_LIST' => 'Դիտել խնդիրները',
    'LNK_IMPORT_TASKS' => 'Առաջադրանքների ներմուծում',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_LIST_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_CONTACT_ID' => 'Կոնտակտ ID․',
    'LBL_PARENT_ID' => 'Ծնողի ID․',
    'LBL_CONTACT_PHONE' => 'Կոնտակտ հեռ.',
    'LBL_PARENT_TYPE' => 'Ծնողի տեսակը․',
    'LBL_TASK_INFORMATION' => 'Ամփոփում', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Նշումներ',
    //For export labels
    'LBL_DATE_DUE' => 'Կատարման ամսաթիվը',
    'LBL_RELATED_TO' => 'Առնչվում է',
);
