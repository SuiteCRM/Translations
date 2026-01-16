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
    'LBL_ALL_MODULES' => 'Բոլորը',//rost fix
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
    'LBL_NONINHERITABLE' => 'Ոչ ժառանգելի',
    'LBL_LIST_NONINHERITABLE' => 'Ոչ ժառանգելի',
    'LBL_NAME' => 'Անվանում',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_FORM_TITLE' => 'Օգտագործողների խմբեր',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'Ստեղծել անվտանգության խումբ',
    'LNK_LIST' => 'Ցուցակի դիտում',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups Management',
    'LBL_USERS' => 'Օգտվողներ',
    'LBL_USERS_SUBPANEL_TITLE' => 'Օգտվողներ',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Դերերը',
    'LBL_ROLES' => 'Դերերը',

    'LBL_CONFIGURE_SETTINGS' => 'Կարգավորում',
    'LBL_ADDITIVE' => 'Ավելացված իրավունքներ',
    'LBL_ADDITIVE_DESC' => "Օգտվողը ստանում է բոլոր դերերից մեծագույն իրավունքները, որոնք նշանակվում են օգտվողին կամ օգտվողների խմբերին",
    'LBL_STRICT_RIGHTS' => 'Խիստ իրավունքներ',
    'LBL_STRICT_RIGHTS_DESC' => "Եթե օգտվողը մի քանի խմբի անդամ է, ապա օգտագործվում են միայն համապատասխան խմբի իրավունքները, նշանակված ընթացիկ գրառման համար։",
    'LBL_USER_ROLE_PRECEDENCE' => 'Օգտագործողի դերի առաջնությունը',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Եթե օգտագործողին ուղղակիորեն նշանակված է որևէ դեր, ուրեմն այդ նշանակված դերը ունի առաջնություն մնացած բոլոր խմբակային դերերի հանդեպ։',
    'LBL_INHERIT_TITLE' => 'Ժառանգել խմբի օրենքները',
    'LBL_INHERIT_CREATOR' => 'Ժառանգել ստեղծված օգտվողից',
    'LBL_INHERIT_CREATOR_DESC' => 'Գրառումը կժառանգի բոլոր այն խմբերը, որոնք ընդգրկում են օգտվողին, որն ստեղծեց այն։',
    'LBL_INHERIT_PARENT' => 'Ժառանգել ծնողի գրառումը',
    'LBL_INHERIT_PARENT_DESC' => 'Օրինակ, եթե գործը ստեղծված է կոնտակտի համար, ապա այս գրառումը կժառանգի խմբեր, որոնք կապված են այս կոնտակտի հետ։',
    'LBL_USER_POPUP' => 'Դուրս եկող պատուհանում ստեղծել նոր օգտվողների խումբ',
    'LBL_USER_POPUP_DESC' => 'Երբ ստեղծվում է նոր օգտվող, բացվում է անվտանգության խմբի պատուհան, օգտվողին տարբեր խմբ(եր)ին նշանակելու համար։',
    'LBL_INHERIT_ASSIGNED' => 'Ժառանգել հանձնարարված օգտվողից',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Գրառումը կժառանգի բոլոր խմբերը, որոնց հետ կապված է նշանակված օգտվողը: Այլ խմբերը, հանձնարարված գրառումները չեն կարող հեռացվել:',
    'LBL_POPUP_SELECT' => 'Օգտագործել խմբի ստեղծման գործառույթ',
    'LBL_POPUP_SELECT_DESC' => 'Երբ օգտվողի կողմից ստեղծվել է մեկից ավելի խումբ, ստեղծելով էկրանին ցույց տալ խմբի ընտրության վահանակ: Հակառակ դեպքում կժառանգի տվյալ խումբը:',
    'LBL_FILTER_USER_LIST' => 'Ֆիլտրել օգտագործողների ցուցակը',
    'LBL_FILTER_USER_LIST_DESC' => "Ադմինիստրատոր չհանդիսացող օգտվողները կարող են նշանակել միայն նույն խմբի(երի) օգտվողներին",

    'LBL_DEFAULT_GROUP_TITLE' => 'Լռելյայն խումբ նոր գրառումների համար',
    'LBL_ADD_BUTTON_LABEL' => 'Ավելացնել',
    'LBL_REMOVE_BUTTON_LABEL' => 'Հեռացնել',
    'LBL_GROUP' => 'Խումբ․',
    'LBL_MODULE' => 'Մոդուլ․',

    'LBL_MASS_ASSIGN' => 'Օգտագործողների խմբեր․ Զանգվածային նշանակում',
    'LBL_ASSIGN' => 'Նշանակել',
    'LBL_REMOVE' => 'Հեռացնել',
    'LBL_ASSIGN_CONFIRM' => 'Համոզվա՞ծ եք, որ ցանկանում եք ավելացնել այս խմբին ',
    'LBL_REMOVE_CONFIRM' => 'Համոզվա՞ծ եք, որ ցանկանում եք հեռացնել այս խմբից ',
    'LBL_CONFIRM_END' => ' ընտրվա՞ծ գրառում(ներ)',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Օգտագործողների խմբեր/Օգտագործող',
    'LBL_USER_NAME' => 'Օգտվողի անուն',
    'LBL_SECURITYGROUP_NAME' => 'Օգտագործողի խմբի անվանումը',
    'LBL_HOMEPAGE_TITLE' => 'Խմբակային հաղորդագրություններ',
    'LBL_TITLE' => 'Վերնագիր',
    'LBL_ROWS' => 'Տողեր',
    'LBL_POST' => 'Փոստ',
    'LBL_SELECT_GROUP_ERROR' => 'Խնդրում ենք ընտրել խումբ և փորձել կրկին:',

    'LBL_GROUP_SELECT' => 'Ընտրեք, որ խմբերը պետք է մուտք ունենան այս գրառմանը',
    'LBL_ERROR_DUPLICATE' => 'Հնարավոր կրկնօրինակների պատճառով, դուք պետք է ձեռքով ավելացնեք անվտանգության խմբեր ձեր ստեղծվող գրառմանը։',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Ժամանող էլ-փոստի հաշիվ',
    'LBL_INBOUND_EMAIL_DESC' => 'Թույլատրել մուտք գործել էլ-փոստի հաշիվ միայն այն դեպքում, եթե օգտագործողը պատկանում է մի խմբի, որը նշանակված է տվյալ հաշվի համար։',
    'LBL_PRIMARY_GROUP' => 'Հիմնական խումբ',
    'LBL_CHECKMARK' => 'Ստուգման նշան',

);
