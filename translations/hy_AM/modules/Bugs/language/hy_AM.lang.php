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
    'LBL_MODULE_NAME' => 'Վրիպումներ',
    'LBL_MODULE_TITLE' => 'Tracker-ի վրիպում․ Գլխավոր',
    'LBL_MODULE_ID' => 'Վրիպումներ',
    'LBL_SEARCH_FORM_TITLE' => 'Վրիպման որոնում',
    'LBL_LIST_FORM_TITLE' => 'Վրիպումների ցուցակ',
    'LBL_NEW_FORM_TITLE' => 'Նոր վրիպում',
    'LBL_SUBJECT' => 'Թեմա',
    'LBL_NUMBER' => 'Համար',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_PRIORITY' => 'Առաջնահերթություն',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_CONTACT_NAME' => 'Կոնտակտ անվանում․',
    'LBL_CONTACT_ROLE' => 'Դեր.',
    'LBL_LIST_NUMBER' => 'Համար',
    'LBL_LIST_SUBJECT' => 'Թեմա',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LIST_PRIORITY' => 'Առաջնահերթություն',
    'LBL_LIST_RESOLUTION' => 'Պատասխան',
    'LBL_LIST_LAST_MODIFIED' => 'Վերջին փոփոխությունը',
    'LBL_INVITEE' => 'Կոնտակտներ',
    'LBL_TYPE' => 'Տիպ.',
    'LBL_LIST_TYPE' => 'Տեսակ',
    'LBL_RESOLUTION' => 'Պատասխան',
    'LBL_RELEASE' => 'Թողարկում․',
    'LNK_NEW_BUG' => 'Հաշվետվության վրիպում',
    'LNK_BUG_LIST' => 'Վրիպումների դիտում',
    'ERR_DELETE_RECORD' => 'Որպեսզի հեռացնել վրիպումը դուք պետք է նշեք գրառման համարը:',
    'LBL_LIST_MY_BUGS' => 'Իմ վրիպումները',
    'LNK_IMPORT_BUGS' => 'Վրիպումների ներմուծում',
    'LBL_FOUND_IN_RELEASE' => 'Հայտնաբերվել է թողարկման մեջ․',
    'LBL_FIXED_IN_RELEASE' => 'Հաստատված է տարբերակում․',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Թողարկման մեջ ուղղած է',
    'LBL_WORK_LOG' => 'Գրանցամատյան․',
    'LBL_SOURCE' => 'Աղբյուր․',
    'LBL_PRODUCT_CATEGORY' => 'Կատեգորիա:',

    'LBL_CREATED_BY' => 'Ստեղծված է․',
    'LBL_MODIFIED_BY' => 'Փոփոխված է անցյալում.',

    'LBL_LIST_EMAIL_ADDRESS' => 'էլ-փոստի հասցե',
    'LBL_LIST_CONTACT_NAME' => 'Կոնտակտ անվանում',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_PHONE' => 'Հեռ․',
    'NTC_DELETE_CONFIRMATION' => 'Համոզվա՞ծ եք, որ ցանկանում եք հեռացնել այս կոնտակտը Ձեր վրիպումներից:',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Վրիպումներ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Հաշիվներ',
    'LBL_CASES_SUBPANEL_TITLE' => 'Գործեր',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Նախագծեր',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Փաստաթղթեր',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',

    'LBL_BUG_INFORMATION' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
