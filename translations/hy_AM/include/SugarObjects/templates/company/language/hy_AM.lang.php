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
    'ERR_DELETE_RECORD' => 'Դուք պետք է նշեք գրառման համարը հեռացնելուց առաջ։',
    'LBL_ACCOUNT_NAME' => 'Ընկերություն անվանումը․',
    'LBL_ACCOUNT' => 'Ընկերություն․',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_ADDRESS_INFORMATION' => 'Հասցեի ինֆորմացիա',
    'LBL_ANNUAL_REVENUE' => 'Տարեկան եկամուտ․',
    'LBL_ANY_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_EMAIL' => 'Ցանկացած էլ-փոստ․',
    'LBL_EMAIL_NON_PRIMARY' => 'Լրացուցիչ էլ-փոստ',
    'LBL_ANY_PHONE' => 'Այլ հեռ․',
    'LBL_ASSIGNED_TO_NAME' => 'Օգտագործող.',
    'LBL_RATING' => 'Վարկանիշ',
    'LBL_ASSIGNED_TO' => 'Կատարող',
    'LBL_ASSIGNED_USER' => 'Կատարող',
    'LBL_ASSIGNED_TO_ID' => 'Կատարող',
    'LBL_BILLING_ADDRESS_CITY' => 'Վճարման հասցե - քաղաք․',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Վճարման հասցե - երկիր․',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Վճարման հասցե - ինդեքս․',
    'LBL_BILLING_ADDRESS_STATE' => 'Վճարման հասցե - շրջան․',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Վճարման հասցե - փողոց 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Վճարման հասցե - փողոց 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Վճարման հասցե - փողոց 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Վճարման հասցե - փողոց․',
    'LBL_BILLING_ADDRESS' => 'Վճարման հասցե․',
    'LBL_ACCOUNT_INFORMATION' => 'Կազմակերպության ինֆորմացիա',
    'LBL_CITY' => 'Քաղաք:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_COUNTRY' => 'Երկիր:',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Հաշիվներ',
    'LBL_DESCRIPTION_INFORMATION' => 'Ինֆորմացիայի նկարագրություն',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_DUPLICATE' => 'Հնարավոր է հաշվի կրկնօրինակ',
    'LBL_EMAIL' => 'էլ-փոստի հասցե․',
    'LBL_EMPLOYEES' => 'Աշխատակիցներ․',
    'LBL_FAX' => 'Ֆաքս․',
    'LBL_INDUSTRY' => 'Արդյունաբերություն․',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_CITY' => 'Քաղաք',
    'LBL_LIST_EMAIL_ADDRESS' => 'էլ-փոստի հասցե',
    'LBL_LIST_PHONE' => 'Հեռ․',
    'LBL_LIST_STATE' => 'Մարզ',
    'LBL_MEMBER_OF' => 'Անդամակից է․',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Անդամ կազմակերպություններ',
    'LBL_NAME' => 'Անվանում․',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Այլ էլ-փոստ․',
    'LBL_OTHER_PHONE' => 'Այլ հեռ․',
    'LBL_OWNERSHIP' => 'Սեփականություն:',
    'LBL_PARENT_ACCOUNT_ID' => 'Ծնողական հաշվի ID',
    'LBL_PHONE_ALT' => 'Լրացուցիչ հեռ․',
    'LBL_PHONE_FAX' => 'Հեռ․ ֆաքս',
    'LBL_PHONE_OFFICE' => 'Հեռախոս:',
    'LBL_PHONE' => 'Հեռ․',
    'LBL_EMAIL_ADDRESS' => 'էլ-փոստի հասցե',
    'LBL_EMAIL_ADDRESSES' => 'էլ-փոստի հասցե(ներ)',
    'LBL_POSTAL_CODE' => 'Փոստային ինդեքս',
    'LBL_SAVE_ACCOUNT' => 'Պահպանել հաշիվը',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Առաքման քաղաք.',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Բեռնման երկիր:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Առաքման փոստային ինդեքս',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Առաքման պետություն',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Առաքում փողոց 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Առաքում փողոց 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Առաքում փողոց 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Առաքման հասցե, փողոց․',
    'LBL_SHIPPING_ADDRESS' => 'Առաքման հասցե․',

    'LBL_STATE' => 'Մարզ',
    'LBL_TICKER_SYMBOL' => 'Ֆոնդային կոդը՝',
    'LBL_TYPE' => 'Տիպ.',
    'LBL_WEBSITE' => 'Կայք.',

    'LNK_ACCOUNT_LIST' => 'Հաշիվներ',
    'LNK_NEW_ACCOUNT' => 'Ստեղծել հաշիվ',

    'MSG_DUPLICATE' => 'Հաշվի գրառումը, որը դուք ստեղծել եք արդեն գոյություն ունեցող գրառման կրկնօրինակ է։ Հաշվի գրառումները պարունակող նմանատիպ անունները թվարկված են ներքևում։<br>Սեղմեք "Ստեղծել հաշիվ", նոր հաշիվ ստեղծելու համար կամ ընտրեք գոյություն ունեցող հաշիվ թվարկված ցուցակից։',
    'MSG_SHOW_DUPLICATES' => 'Հաշվի գրառումը, որը դուք ստեղծել եք արդեն գոյություն ունեցող գրառման կրկնօրինակ է։ Հաշվի գրառումները պարունակող նմանատիպ անունները թվարկված են ներքևում։<br>Սեղմեք "Պահպանել" նոր գրագում ստեղծելու համար կամ սեղմեք "Չեղարկել" առանց հաշիվ ստեղծելու մոդուլին վերադառնալու համար:',

    'NTC_DELETE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս գրառումը։',

    'LBL_EDIT_BUTTON' => 'Խմբագրել',
    'LBL_REMOVE' => 'Հեռացնել',

);
