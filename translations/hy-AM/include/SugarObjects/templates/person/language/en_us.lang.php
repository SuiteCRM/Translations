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
    'LBL_SALUTATION' => 'Ողջույնի խոսք',
    'LBL_NAME' => 'Անվանում',
    'LBL_FIRST_NAME' => 'Անուն',
    'LBL_LAST_NAME' => 'Ազգանուն',
    'LBL_TITLE' => 'Վերնագիր',
    'LBL_DEPARTMENT' => 'Բաժին',
    'LBL_DO_NOT_CALL' => 'Չ զանգել',
    'LBL_HOME_PHONE' => 'Տուն հեռ․',
    'LBL_MOBILE_PHONE' => 'Բջջ. հեռ.',
    'LBL_OFFICE_PHONE' => 'Հեռախոս',
    'LBL_OTHER_PHONE' => 'Այլ հեռ․',
    'LBL_FAX_PHONE' => 'Ֆաքս',
    'LBL_EMAIL_ADDRESS' => 'էլ-փոստի հասցե(ներ)',
    'LBL_PRIMARY_ADDRESS' => 'Հիմնական հասցե․',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Հիմնական հասցե․',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Հիմնական հասցե- փողոց 2.',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Հիմնական հասցե- փողոց 3․',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Հիմնական հասցե - քաղաք․',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Հիմնական հասցե - շրջան․',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Հիմնական հասցե - ինդեքս․',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Հիմնական հասցե- երկիր․',
    'LBL_ALT_ADDRESS' => 'Այլ հասցե',
    'LBL_ALT_ADDRESS_STREET' => 'Այլ հասցե',
    'LBL_ALT_ADDRESS_STREET_2' => 'Այլ հասցե- փողոց 2․',
    'LBL_ALT_ADDRESS_STREET_3' => 'Այլ հասցե- փողոց 3․',
    'LBL_ALT_ADDRESS_CITY' => 'Այլ հասցե- քաղաք․',
    'LBL_ALT_ADDRESS_STATE' => 'Այլ հասցե- շրջան․',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Այլ հասցե- ինդեքս․',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Այլ հասցե- երկիր․',
    'LBL_PRIMARY_STREET' => 'Հասցե',
    'LBL_ALT_STREET' => 'Այլ հասցե',
    'LBL_STREET' => 'Այլ հասցե',
    'LBL_CITY' => 'Քաղաք',
    'LBL_STATE' => 'Մարզ',
    'LBL_POSTAL_CODE' => 'Փոստային ինդեքս․',
    'LBL_COUNTRY' => 'Երկիր',
    'LBL_CONTACT_INFORMATION' => 'Կոնտակտային տվյալներ',
    'LBL_ADDRESS_INFORMATION' => 'Հասցե(ներ)',
    'LBL_ASSIGNED_TO_NAME' => 'Օգտագործող',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Այլ էլ-փոստ․',
    'LBL_ASSISTANT' => 'Օգնական',
    'LBL_ASSISTANT_PHONE' => 'Օգնական-հեռ․',
    'LBL_WORK_PHONE' => 'Աշխ․ հեռ․',
    'LNK_IMPORT_VCARD' => 'Ստեղծել vCard-ից',
    'LBL_ANY_EMAIL' => 'Ցանկացած էլ-փոստ',
    'LBL_EMAIL_NON_PRIMARY' => 'Լրացուցիչ էլ-փոստ',
    'LBL_PHOTO' => 'Լուսանկար',
    'LBL_EDIT_BUTTON' => 'Խմբագրել',
    'LBL_REMOVE' => 'Հեռացնել',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'Lawful Basis',
    'LBL_DATE_REVIEWED' => 'Lawful Basis Date Reviewed',
    'LBL_LAWFUL_BASIS_SOURCE' => 'Lawful Basis Source',
    'LBL_CONSENT' => 'Consent',
    //End Lawful Basis labels
);
