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
    'ERR_DELETE_RECORD' => 'Կոնտակտը հեռացնելու համար անհրաժեշտ է նշել գրառման համարը։',
    'LBL_ACCOUNT_ID' => 'Հաշիվ ID․',
    'LBL_ACCOUNT_NAME' => 'Հաշվի անունը․',
    'LBL_CAMPAIGN' => 'Մարքեթինգային արշավ․',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_ADDRESS_INFORMATION' => 'Հասցեի ինֆորմացիա',
    'LBL_ALT_ADDRESS_CITY' => 'Այլ հասցե - քաղաք․',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Այլ հասցե - երկիր․',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Հիմնական հասցե - փոստի ինդեքս.',
    'LBL_ALT_ADDRESS_STATE' => 'Այլ հասցե - շրջան․',
    'LBL_ALT_ADDRESS_STREET_2' => 'Այլ հասցե- փողոց 2․',
    'LBL_ALT_ADDRESS_STREET_3' => 'Այլ հասցե- փողոց 3․',
    'LBL_ALT_ADDRESS_STREET' => 'Այլ հասցե - փողոց․',
    'LBL_ALTERNATE_ADDRESS' => 'Այլ հասցե',
    'LBL_ALT_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_EMAIL' => 'Ցանկացած էլ-փոստ․',
    'LBL_ANY_PHONE' => 'Այլ հեռ․',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու',
    'LBL_ASSISTANT_PHONE' => 'Օգնական-հեռ․',
    'LBL_ASSISTANT' => 'Օգնական.',
    'LBL_BIRTHDATE' => 'Ծննդյան օր․',
    'LBL_CITY' => 'Քաղաք:',
    'LBL_CAMPAIGN_ID' => 'Մարքեթ․ արշավի ID',
    'LBL_CONTACT_INFORMATION' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Կոնտակտ անվանում․',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Կոնտակտ - Գործարքներ․',
    'LBL_CONTACT_ROLE' => 'Դեր.',
    'LBL_CONTACT' => 'Կոնտակտ․',
    'LBL_COUNTRY' => 'Երկիր:',
    'LBL_CREATED_ACCOUNT' => 'Ստեղծվել է նոր հաշիվ',
    'LBL_CREATED_CALL' => 'Ստեղծվել է նոր հեռախոսազանգ',
    'LBL_CREATED_CONTACT' => 'Ստեղծվել է նոր կոնտակտ',
    'LBL_CREATED_MEETING' => 'Ստեղծվել է նոր հանդիպում',
    'LBL_CREATED_OPPORTUNITY' => 'Ստեղծվել է նոր գործարք',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_DEPARTMENT' => 'Վարչություն․',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Անմիջական հաշվետվություններ',
    'LBL_DO_NOT_CALL' => 'Չ՛զանգել․',
    'LBL_DUPLICATE' => 'Հնարավոր կրկնվող կոնտակտներ',
    'LBL_EMAIL_ADDRESS' => 'էլ-փոստի հասցե․',
    'LBL_EMAIL_OPT_OUT' => 'Էլ-փոստին չգրել․',
    'LBL_EXISTING_ACCOUNT' => 'Օգտագործվել է առկա հաշիվ',
    'LBL_EXISTING_CONTACT' => 'Օգտագործվել է առկա կոնտակտ',
    'LBL_EXISTING_OPPORTUNITY' => 'Օգտագործվել է առկա գործարք',
    'LBL_FAX_PHONE' => 'Ֆաքս․',
    'LBL_FIRST_NAME' => 'Անուն',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',
    'LBL_HOME_PHONE' => 'Հեռ․(տուն)․',
    'LBL_ID' => 'ID․',
    'LBL_IMPORT_VCARD' => 'Ներմուծել vCard',
    'LBL_VCARD' => 'Այցեքարտ (vCard)',
    'LBL_IMPORT_VCARDTEXT' => 'Ավտոմատ կերպով ստեղծել նոր կոնտակտ vCard ֆայլը ներմուծելու ժամանակ։',
    'LBL_INVALID_EMAIL' => 'Սխալ էլ-փոստի հասցե․',
    'LBL_INVITEE' => 'Անմիջական հաշվետվություններ',
    'LBL_LAST_NAME' => 'Ազգանուն․',
    'LBL_LEAD_SOURCE' => 'Առաջատար աղբյուրներ․',
    'LBL_LIST_ACCEPT_STATUS' => 'Ընդունել կարգավիճակ',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_CONTACT_NAME' => 'Կոնտակտ անվանում',
    'LBL_LIST_CONTACT_ROLE' => 'Դեր',
    'LBL_LIST_EMAIL_ADDRESS' => 'Էլ-փոստ',
    'LBL_LIST_FIRST_NAME' => 'Անուն',
    'LBL_LIST_FORM_TITLE' => 'Կոնտակտների ցուցակ',
    'LBL_LIST_LAST_NAME' => 'Ազգանուն',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_LIST_PHONE' => 'Հեռախոս',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Բջջային հեռ.',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODULE_NAME' => 'Կոնտակտներ',
    'LBL_MODULE_TITLE' => 'Կոնտակտներ․ Գլխավոր',
    'LBL_NAME' => 'Անվանում․',
    'LBL_NEW_FORM_TITLE' => 'Նոր կոնտակտ',
    'LBL_NOTE_SUBJECT' => 'Թեմայի վերաբերյալ նշում',
    'LBL_OFFICE_PHONE' => 'Հեռախոս:',
    'LBL_OPP_NAME' => 'Գործարքի անվանումը․',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Գործարքի դերի ID․',
    'LBL_OPPORTUNITY_ROLE' => 'Գործարքի դերը',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Այլ էլ-փոստ․',
    'LBL_OTHER_PHONE' => 'Այլ հեռ․',
    'LBL_PHONE' => 'Հեռ․',
    'LBL_PORTAL_APP' => 'Պորտալի ծրագրեր․',
    'LBL_PORTAL_INFORMATION' => 'Պորտալի ինֆորմացիան',
    'LBL_PORTAL_NAME' => 'Պորտալի անվանումը․',
    'LBL_STREET' => 'Փողոց',
    'LBL_POSTAL_CODE' => 'Փոստային ինդեքս',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Հիմնական հասցե՝ քաղաք.',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Հիմնական հասցե- երկիր․',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Հիմնական հասցե՝ ինդեքս.',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Հիմնական հասցե՝ նահանգ.',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Հիմնական հասցե- փողոց 2.',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Հիմնական հասցե- փողոց 3․',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Հիմնական հասցե, փողոց.',
    'LBL_PRIMARY_ADDRESS' => 'Հիմնական հասցե:',
    'LBL_PRODUCTS_TITLE' => 'Արտադրանք',
    'LBL_REPORTS_TO_ID' => 'Հաշվետու է ID․',
    'LBL_REPORTS_TO' => 'Հաշվետու է․',
    'LBL_RESOURCE_NAME' => 'Ռեսուրսի անվանումը',
    'LBL_SALUTATION' => 'Ողջույնի խոսք:',
    'LBL_SAVE_CONTACT' => 'Պահպանել կոնտակտը',
    'LBL_SEARCH_FORM_TITLE' => 'Կոնտակտի որոնում',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Օգտագործել ընտրված կոնտակտները',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Օգտագործել ընտրված կոնտակտները',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Սինքրոնացնել Outlook&reg; հետ․',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Կոնտակտների դիտում',
    'LNK_IMPORT_VCARD' => 'Ստեղծել կոնտակտ vCard-ից',
    'LNK_NEW_ACCOUNT' => 'Ստեղծել հաշիվ',
    'LNK_NEW_APPOINTMENT' => 'Նշանակել հանդիպում',
    'LNK_NEW_CALL' => 'Պլանավորել զանգ',
    'LNK_NEW_CASE' => 'Ստեղծել գործ',
    'LNK_NEW_CONTACT' => 'Ստեղծել կոնտակտ',
    'LNK_NEW_EMAIL' => 'Արխիվացնել էլ․փոստը',
    'LNK_NEW_MEETING' => 'Պլանավորել հանդիպում',
    'LNK_NEW_NOTE' => 'Ստեղծել նշում',
    'LNK_NEW_OPPORTUNITY' => 'Ստեղծել գործարք',
    'LNK_NEW_TASK' => 'Ստեղծել խնդիր',
    'LNK_SELECT_ACCOUNT' => "Ընտրել հաշիվը",
    'NTC_DELETE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս գրառումը։',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Գործարք ստեղծելու համար անհրաժեշտ է հաշիվ։\n Խնդրում ենք կամ ստեղծեք նոր հաշիվ կամ ընտրեք ստեղծած հաշիվներից մեկը։',
    'NTC_REMOVE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք հեռացնել տվյալ կոնտակտը այս գործից:',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Գործարքներ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Փաստաթղթեր',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Պատճենել հիմնական հասցեին',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Պատճենել այլ հասցեին',

    'LBL_CASES_SUBPANEL_TITLE' => 'Գործեր',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Վրիպումներ',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Նախագծեր',
    'LBL_PROJECTS_RESOURCES' => 'Նախագծի ռեսուրսներ',
    'LBL_CAMPAIGNS' => 'Կամպանիաներ',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Կամպանիաներ',
    'LBL_LIST_CITY' => 'Քաղաք',
    'LBL_LIST_STATE' => 'Մարզ',
    'LBL_HOMEPAGE_TITLE' => 'Իմ կոնտակտները',
    'LBL_OPPORTUNITIES' => 'Գործարքներ',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Նախագծեր',
    'LNK_IMPORT_CONTACTS' => 'Ներմուծել կոնտակտներ',

    // SNIP
    'LBL_USER_SYNC' => 'Օգտվողի սինքրոնացում',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Իրադարձություններ',

    'LBL_AOP_CASE_UPDATES' => 'Գործի նորություներ',
    'LBL_CREATE_PORTAL_USER' => 'Ստեղծել պորտալի օգտվողին',
    'LBL_ENABLE_PORTAL_USER' => 'Միացնել պորտալի օգտվողին',
    'LBL_DISABLE_PORTAL_USER' => 'Անջատել պորտալի օգտվողին',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Չհաջողվեց ստեղծել պորտալի օգտվողին',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Չհաջողվեց միացնել պորտալի օգտվողին',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Չհաջողվեց անջատել պորտալի օգտվողին',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Ստեղծել պորտալի օգտվողին',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Միացնել պորտալի օգտագործողին',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Անջատել պորտալի օգտվողին',
    'LBL_NO_JOOMLA_URL' => 'Նշված չէ պորտալի URL հասցեն',
    'LBL_PORTAL_USER_TYPE' => 'Պորտալի օգտվողի տեսակը',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Պորտալի հաշիվը անջատված է',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Պայմանագրեր',
    'LBL_AOS_INVOICES' => 'Հաշիվ-ապրանքագիր',
    'LBL_AOS_QUOTES' => 'Առաջարկներ',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Հրավերի կարգավիճակ',
);
