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
    'LBL_MODULE_NAME' => 'Աշխատակիցներ',
    'LBL_MODULE_TITLE' => 'Աշխատակիցներ․ Գլխավոր',
    'LBL_SEARCH_FORM_TITLE' => 'Աշխատակցի որոնում',
    'LBL_LIST_FORM_TITLE' => 'Աշխատակիցներ',
    'LBL_NEW_FORM_TITLE' => 'Նոր աշխատակից',
    'LBL_LOGIN' => 'Մուտքանուն',
    'LBL_RESET_PREFERENCES' => 'Վերագործարկեք լռելյայն արտոնությունները',
    'LBL_TIME_FORMAT' => 'Ժամանակի ֆորմատը․',
    'LBL_DATE_FORMAT' => 'Ամսաթվի ձևաչափ․',
    'LBL_TIMEZONE' => 'Ընթացիկ ժամանակը․',
    'LBL_CURRENCY' => 'Արտարժույթ․',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_LIST_LAST_NAME' => 'Ազգանուն',
    'LBL_LIST_EMPLOYEE_NAME' => 'Աշխատակցի անունը',
    'LBL_LIST_DEPARTMENT' => 'Բաժին',
    'LBL_LIST_REPORTS_TO_NAME' => 'Հաշվետվություններ դեպի',
    'LBL_LIST_EMAIL' => 'Էլ-փոստ',
    'LBL_LIST_USER_NAME' => 'Օգտվողի անուն',
    'LBL_ERROR' => 'Սխալ․',
    'LBL_PASSWORD' => 'Գաղտնաբառ.',
    'LBL_USER_NAME' => 'Օգտագործողի անուն.',
    'LBL_USER_TYPE' => 'Օգտվողի տեսակը',
    'LBL_FIRST_NAME' => 'Անուն',
    'LBL_LAST_NAME' => 'Ազգանուն․',
    'LBL_THEME' => 'Թեմա․',
    'LBL_LANGUAGE' => 'Լեզու․',
    'LBL_ADMIN' => 'Ադմինիստրատոր․',
    'LBL_EMPLOYEE_INFORMATION' => 'Ինֆորմացիա աշխատակցի մասին',
    'LBL_OFFICE_PHONE' => 'Հեռախոս:',
    'LBL_REPORTS_TO' => 'Հաշվետվությունները (ID).',
    'LBL_REPORTS_TO_NAME' => 'Հաշվետվություններ',
    'LBL_OTHER_PHONE' => 'Այլ հեռ․',
    'LBL_NOTES' => 'Նշումներ.',
    'LBL_DEPARTMENT' => 'Վարչություն․',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_PHONE' => 'Այլ հեռ․',
    'LBL_ANY_EMAIL' => 'Ցանկացած էլ-փոստ․',
    'LBL_ADDRESS' => 'Հասցե․',
    'LBL_CITY' => 'Քաղաք:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Փոստային ինդեքս',
    'LBL_COUNTRY' => 'Երկիր:',
    'LBL_NAME' => 'Անվանում․',
    'LBL_MOBILE_PHONE' => 'Բջջային հեռ.',
    'LBL_FAX' => 'Ֆաքս․',
    'LBL_EMAIL' => 'էլ-փոստի հասցե․',
    'LBL_EMAIL_LINK_TYPE' => 'Էլ-փոստի կլիենտ',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM էլ-փոստի կլիենտ․</b> Ուղարկել նամակներ, օգտագործելով SuiteCRM-ի էլ-փոստի կլիենտներին։ <br><b>Արտաքին էլ-փոստի կլիենտ․</b> Ուղարկել նամակներ, օգտագործելով SuiteCRM-ի արտաքին էլ-փոստի կլիենտներին, օրինակ՝ Microsoft Outlook։',
    'LBL_HOME_PHONE' => 'Տուն հեռ․',
    'LBL_WORK_PHONE' => 'Աշխ․ հեռ․',
    'LBL_EMPLOYEE_STATUS' => 'Աշխատակցի կարգավիճակը',
    'LBL_PRIMARY_ADDRESS' => 'Հիմնական հասցե:',
    'LBL_SAVED_SEARCH' => 'Ընտրանքներ',
    'LBL_MESSENGER_ID' => 'IM անվանում․',
    'LBL_MESSENGER_TYPE' => 'IM տեսակը:',
    'ERR_LAST_ADMIN_1' => 'Աշխատակցի անունը "',
    'ERR_LAST_ADMIN_2' => '" վերջին աշխատակիցն է, որը ունի ադմինիստրատորի մուտքի իրավունք։ Առնվազն մեկ աշխատակից պետք է լինի ադմինիստրատոր:',
    'LNK_NEW_EMPLOYEE' => 'Ստեղծել աշխատակից',
    'LNK_EMPLOYEE_LIST' => 'Դիտել աշխատակիցներին',
    'ERR_DELETE_RECORD' => 'Հաշիվը հեռացնելուց առաջ դուք պետք է նշեք գրառման համարը։',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Աշխատակցի կարգավիճակը',

    'LBL_SUITE_LOGIN' => 'Օգտվող է',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Ծանուցել նշանակման դեպքում',
    'LBL_IS_ADMIN' => 'Արդյոք ադմինիստրատորն է',
    'LBL_GROUP' => 'Օգտվողի խումբ',
    'LBL_PHOTO' => 'Լուսանկար',
    'LBL_DELETE_USER_CONFIRM' => 'Այս աշխատակիցը նաև օգտվող է։ Աշխատակցի հեռացումը կբերի համակարգի օգտվողի գրառման հեռացմանը, որի հետևանքով օգտվողը չի կարող մուտք գործել համակարգ։ Ուզո՞ւմ եք շարունակել հեռացումը։',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս աշխատակցին։',
    'LBL_ONLY_ACTIVE' => 'Ակտիվ աշխատակիցներ',
    'LBL_SELECT' => 'Ընտրել' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Վավերացում ID',
    'LBL_EXT_AUTHENTICATE' => 'Արտաքին վավերացում',
    'LBL_GROUP_USER' => 'Օգտվողի խումբ',
    'LBL_LIST_ACCEPT_STATUS' => 'Ընդունել կարգավիճակ',
    'LBL_MODIFIED_BY' => 'Փոփոխված է',
    'LBL_MODIFIED_BY_ID' => 'Փոփոխված է ID-ի կողմից',
    'LBL_CREATED_BY_NAME' => 'Ստեղծված է', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Պորտալի API օգտվողը',
    'LBL_PSW_MODIFIED' => 'Վերջին անգամ փոփոխված գաղտնաբառը',
    'LBL_SHOW_ON_EMPLOYEES' => 'Դիտել աշխատակիցների ցուցակը',
    'LBL_USER_HASH' => 'Գաղտնաբառ',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Համակարգը գեներացրել է գաղտնավառը',
    'LBL_DESCRIPTION' => 'Նկարագրություն',
    'LBL_FAX_PHONE' => 'Ֆաքս',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_ADDRESS_CITY' => 'Հասցե՝ քաղաք',
    'LBL_ADDRESS_COUNTRY' => 'Հասցե՝ երկիր',
    'LBL_ADDRESS_INFORMATION' => 'Հասցեի ինֆորմացիա',
    'LBL_ADDRESS_POSTALCODE' => 'Փոստային հասցեի ինդեքս',
    'LBL_ADDRESS_STATE' => 'Հասցե՝ նահանգ',
    'LBL_ADDRESS_STREET' => 'Հասցե՝ փողոց',

    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_DATE_ENTERED' => 'Մուտքի ամսաթիվը',
    'LBL_DELETED' => 'Ջնջված է',

    'LBL_BUTTON_SELECT' => 'Ընտրել',
    'LBL_BUTTON_CLEAR' => 'Մաքրել',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth թոքեններ',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Դերերը',
    'LBL_SECURITYGROUPS' => 'Օգտագործողների խմբեր',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
