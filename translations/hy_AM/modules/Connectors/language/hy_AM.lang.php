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

    'LBL_ADMINISTRATION_MAIN' => 'Կապակցման կարգավորումներ',
    'LBL_AVAILABLE' => 'Հասանելի',
    'LBL_BACK' => '< Վերադարձ',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Որոշ պարտադիր դաշտեր մնացել են դատարկ։ Շարունակե՞լ փոփոխությունների պահպանումը։',
    'LBL_CONNECTOR_FIELDS' => 'Կապակցման դաշտեր',
    'LBL_DATA' => 'Տվյալներ',
    'LBL_DEFAULT' => 'Նախնական',
    'LBL_DISABLED' => 'Անաշխատունակ',
    'LBL_ENABLED' => 'Միացված է',
    'LBL_EXTERNAL' => 'Թույլ տալ օգտագործողներին ստեղծել արտաքին հաշվի գրառումները այս միակցիչի համար։',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Որպեսզի օգտագործել այս միակցիչը, համապատասխանկարգավորումներ պետք է նշել միակցիչի հատկությունների կարգավորման էջում:',
    'LBL_MERGE' => 'Միավորել',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Միացնել միակցիչները',
    'LBL_MODIFY_DISPLAY_DESC' => 'Ընտրել այն մոդուլները, որոնք միացված են յուրաքանչյուր միակցիչի հետ։',
    'LBL_MODULE_FIELDS' => 'Մոդուլի դաշտերը',
    'LBL_MODIFY_MAPPING_TITLE' => 'Քարտեզագրել միակցիչի դաշտերը',
    'LBL_MODIFY_MAPPING_DESC' => 'Քարտեզագրել միակցիչի դաշտերը մոդուլի դաշտերի հետ, որպեսզի որոշվի, թե ինչ տվյալների միակցիչ է կարելի դիտարկել և միավորել մոդուլի գրառումների մեջ։',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Սահմանել միակցիչի հատկությունները',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Կարգավորել յուրաքանչյուր միակցիչի հատկությունները, այդ թվում, հղումների և API բանալիների։',
    'LBL_MODIFY_SEARCH_TITLE' => 'Կառավարել որոնման կապակցիչը',
    'LBL_MODIFY_SEARCH' => 'Որոնում',
    'LBL_MODIFY_SEARCH_DESC' => 'Նշել միակցիչի դաշտերը, որոնք օգտագործվում ենք յուրաքանչյուր մոդուլի տվյալների որոնման համար։',
    'LBL_MODULE_NAME' => 'Միակցիչ',
    'LBL_NO_PROPERTIES' => 'Չկան կարգավորված հատկություններ այս միակցիչի համար։',
    'LBL_SAVE' => 'Պահպանել',
    'LBL_SUMMARY' => 'Ամփոփում',
    'LBL_STEP1' => 'Որոնել և դիտել տվյալները',
    'LBL_STEP2' => 'Միավորել գրառումները',
    'LBL_TEST_SOURCE' => 'Կապի փորձարկում',
    'LBL_TEST_SOURCE_FAILED' => 'Փորձարկումը չհաջողվեց',
    'LBL_TEST_SOURCE_SUCCESS' => 'Փորձարկումը կատարվել է հաջողությամբ',
    'LBL_TITLE' => 'Տվյալների միավորում',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Սխալ: Չեն գտնվել լրացուցիչ տեղեկություններ տվյալ գրառման համար:',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Այս միակցիչի համար միացված չէ ոչ մի մոդուլ։ Նշեք մոդուլը մոդուլների ընտրության էջում։',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Սխալ։ Միակցիչները միացված չեն, որոնք ունեն սահմանված որոնման դաշտեր։',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Սխալ։ Չկան սահմանված որոնման դաշտեր մոդուլի և միակցիչի համար։ Խնդրում ենք կապվել համակարգի ադմինիստրատորի հետ։',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Սխալ։ Չկան սահմանված դաշտեր, որոնք ցույց են տալիս արդյունքները։ Խնդրում ենք կապվել համակարգի ադմինիստրատորի հետ։',
    'LBL_INFO_INLINE' => 'Տեղեկատվություն' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Փակել' /*for 508 compliance fix*/,

);
