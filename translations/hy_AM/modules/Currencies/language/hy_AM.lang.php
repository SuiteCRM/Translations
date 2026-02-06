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
    'LBL_MODULE_NAME' => 'Արտարժույթ',
    'LBL_LIST_FORM_TITLE' => 'Արտարժույթ',
    'LBL_CURRENCY' => 'Արտարժույթ',
    'LBL_ADD' => 'Ավելացնել',
    'LBL_MERGE' => 'Միավորել',
    'LBL_MERGE_TXT' => 'Խնդրում ենք ընտրել արտարժույթը, որը ցանկանում եք պատկերել ընտրված արտարժույթ։ Այդ պատճառով կհեռացվել բոլոր մնացած արտառժույթները, իսկ բոլոր արժեքները կապված կլինեն ընտրված արժույթի հետ:',
    'LBL_US_DOLLAR' => 'ԱՄՆ դոլլար',
    'LBL_DELETE' => 'Ջնջել',
    'LBL_LIST_SYMBOL' => 'Արժույթի նշանը',
    'LBL_LIST_NAME' => 'Տարադրամի անունը',
    'LBL_LIST_ISO4217' => 'ISO 4217 կոդ',
    'LBL_LIST_ISO4217_HELP' => 'Մուտքագրեք արտարժույթի կոդի երեք նշան համաձայն ISO 4217 ստանդարտի:',
    'LBL_UPDATE' => 'Թարմացնել',
    'LBL_LIST_RATE' => 'Արտարժույթի փոխանակման կուրսը',
    'LBL_LIST_RATE_HELP' => 'Փոխանակման 0.5 Եվրո նշանակում է, որ 10 USD = 5 եվրո:',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LNK_NEW_CONTACT' => 'Նոր կոնտակտ',
    'LNK_NEW_ACCOUNT' => 'Նոր հաշիվ',
    'LNK_NEW_OPPORTUNITY' => 'Նոր գործարք',
    'LNK_NEW_CASE' => 'Նոր գործ',
    'LNK_NEW_NOTE' => 'Ստեղծել գրառում կամ կցված ֆայլ',
    'LNK_NEW_CALL' => 'Նոր հեռախոսազանգ',
    'LNK_NEW_EMAIL' => 'Նոր էլ-փոստ',
    'LNK_NEW_MEETING' => 'Նոր հանդիպում',
    'LNK_NEW_TASK' => 'Ստեղծել խնդիր',
    'NTC_DELETE_CONFIRMATION' => 'Համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս գրառումը: Ցանկացած գրառում օգտագործելով, այս արժույթը համակարգը կարող է կոնվերտացնել լռելյայն արժույթը: Ավելի լավ է սահմանել "ակտիվ չէ" կարգավիճակը:',
    'LBL_BELOW_MIN' => 'Փոխանակման կուրսի արժեքը պետք է լինի 0-ից բարձր թիվ',
    'currency_status_dom' =>
        array(
            'Active' => 'Ակտիվ է',
            'Inactive' => 'Ակտիվ չէ',
        ),
    'LBL_CREATED_BY' => 'Ստեղծված է',
    'LBL_EDIT_LAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,
);
