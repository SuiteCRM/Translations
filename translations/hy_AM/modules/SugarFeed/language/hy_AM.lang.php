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
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու- ID',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DESCRIPTION' => 'Նկարագրություն',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Անվանում',
    'LBL_SAVING' => 'Պահպանում...',
    'LBL_SAVED' => 'Պահպանված է',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_FORM_TITLE' => 'Լրահոս',
    'LBL_MODULE_NAME' => 'Գործունեության լրահոս',
    'LBL_MODULE_TITLE' => 'Գործունեության լրահոս',
    'LBL_DASHLET_DISABLED' => 'Ուշադրություն․ Համակարգի լրահոսը անջատված է, նոր գրառումներ չեն տեղադրվի մինչև լրահոսը չմիացվի',
    'LBL_RECORDS_DELETED' => 'Բոլոր նախնական լրահոսի մուտքերը հեռացվել են, եթե լրահոսի մուտքը համակարգ միացված է, նոր իրադարձությունները կցուցադրվեն համակարգում ավտոմատ կերպով։',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք հեռացնել բոլոր տվյալների մուտքերը։',
    'LBL_FLUSH_RECORDS' => 'Լրահոսի հեռացում',
    'LBL_ENABLE_FEED' => 'Միացնել իմ ակտիվության Դաշլետ լրահոսը',
    'LBL_ENABLE_MODULE_LIST' => 'Ակտիվացնել հետևյալ հեսքերի համար',
    'LBL_HOMEPAGE_TITLE' => 'Իմ իրադարձությունների լրահոս',
    'LNK_NEW_RECORD' => 'Ստեղծել լրահոս',
    'LNK_LIST' => 'Լրահոս',
    'LBL_SEARCH_FORM_TITLE' => 'Որոնել լրահոսը',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'Նոր լրահոս',
    'LBL_ALL' => 'Բոլորը',
    'LBL_USER_FEED' => 'Օգտագործողի լրահոս',
    'LBL_ENABLE_USER_FEED' => 'Ակտիվացնել օգտագործողի լրահոսը',
    'LBL_TO' => 'Տեսանելի է թիմի համար',
    'LBL_IS' => 'է',
    'LBL_DONE' => 'Պատրաստ է',
    'LBL_TITLE' => 'Վերնագիր',
    'LBL_ROWS' => 'Տողեր',
    'LBL_CATEGORIES' => 'Մոդուլներ',
    'LBL_TIME_LAST_WEEK' => 'Անցյալ շաբաթ',
    'LBL_TIME_WEEKS' => 'weeks',
    'LBL_TIME_DAYS' => 'օրեր',
    'LBL_TIME_YESTERDAY' => 'Երեկ',
    'LBL_TIME_HOURS' => 'Ժամ',
    'LBL_TIME_HOUR' => 'Ժամ',
    'LBL_TIME_MINUTES' => 'Րոպե',
    'LBL_TIME_MINUTE' => 'Րոպե',
    'LBL_TIME_SECONDS' => 'Վարկյան',
    'LBL_TIME_SECOND' => 'Վարկյան',
    'LBL_TIME_AND' => 'և',
    'LBL_TIME_AGO' => 'առաջ',
// Activity stream
    'CREATED_CONTACT' => 'ստեղծվել է <b>նոր</b> {0}',
    'CREATED_OPPORTUNITY' => 'ստեղծվել է <b>նոր</b> {0}',
    'CREATED_CASE' => 'ստեղծվել է <b>նոր</b> {0}',
    'CREATED_LEAD' => 'ստեղծվել է <b>նոր</b> {0}',
    'FOR' => 'համար', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>փակվել է</b> {0} ',
    'CONVERTED_LEAD' => '<b>ԿՈՆՎԵՐՏԱՑՎԱԾ Է</b> {0}',
    'WON_OPPORTUNITY' => '<b>փակվել է հաջողությամբ</b> {0}',
    'WITH' => 'հետ',

    'LBL_LINK_TYPE_Link' => 'Կապ',
    'LBL_LINK_TYPE_Image' => 'Պատկեր',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Ընտրել',
    'LBL_POST' => 'Փոստ',
    'LBL_AUTHENTICATE' => 'Միացնել',
    'LBL_AUTHENTICATION_PENDING' => 'Ձեր ընտրած ոչ բոլոր արտաքին հաշիվներն են վավերացված։ Սեղմեք \'Չեղարկել\', վերադառնալու Ընտրանքների պատուհան, արտաքին հաշիվները վավերացնելու համար, կամ սեղմեք \'OK\' շարունակելու առանց վավերացման։',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Լրացուցիչ ընտրանքներ',
    'LBL_HIDE_OPTIONS' => 'Թաքցնել ընտրանքները',
    'LBL_VIEW' => 'Դիտում',
    'LBL_POST_TITLE' => 'Հաղորդագրության կարգավիճակը թարմացվել է',
    'LBL_URL_LINK_TITLE' => 'URL հղում է օգտագործվել',
);
