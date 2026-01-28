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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Հաշվի նկարագրություն',
    'LBL_ACCOUNT_ID' => 'Հաշիվ ID',
    'LBL_ACCOUNT_NAME' => 'Հաշվի անունը․',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_ADDRESS_INFORMATION' => 'Հասցեի ինֆորմացիա',
    'LBL_ALT_ADDRESS_CITY' => 'Այլ հասցե - քաղաք',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Այլ հասցե - երկիր',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Այլ հասցե - ինդեքս',
    'LBL_ALT_ADDRESS_STATE' => 'Այլ հասցե - շրջան',
    'LBL_ALT_ADDRESS_STREET_2' => 'Այլ հասցե - փողոց 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Այլ հասցե - փողոց 3',
    'LBL_ALT_ADDRESS_STREET' => 'Այլ հասցե - փողոց',
    'LBL_ALTERNATE_ADDRESS' => 'Այլ հասցե',
    'LBL_ALT_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_EMAIL' => 'Ցանկացած էլ-փոստ․',
    'LBL_ANY_PHONE' => 'Այլ հեռ․',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու.',
    'LBL_CITY' => 'Քաղաք:',
    'LBL_CONTACT_ID' => 'Կոնտակտ ID',
    'LBL_CONTACT_INFORMATION' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Պոտենցիալ կլիենտի անունը․',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Պոտենցիալ կլիենտ - Գործարք․',
    'LBL_CONTACT_ROLE' => 'Դեր.',
    'LBL_CONTACT' => 'Պոտենցիալ կլիենտ․',
    'LBL_CONVERTED_ACCOUNT' => 'Կոնվերտացված հաշիվ․',
    'LBL_CONVERTED_CONTACT' => 'Կոնվերտացված կոնտակտ․',
    'LBL_CONVERTED_OPP' => 'Վերափոխված է գործարքի․',
    'LBL_CONVERTED' => 'Կոնվերտացված է',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Կոնվերտացնել պոտենցիալ կլիենտին',
    'LBL_CONVERTLEAD' => 'Կոնվերտացնել պոտենցիալ կլիենտին',
    'LBL_CONVERTLEAD_WARNING' => 'Զգուշացում․ "Կոնվերտացված է"։ Կոնտակտ և/կամ Հաշիվ գրառումները արդեն ստեղծվել են պոտենցիալ կլիենտի համար։ Եթե ​​ցանկանում եք շարունակել պոտենցիալ կլիենտի կոնվերտացիան, սեղմեք "Պահպանել" կոճակը։ Հակառակ դեպքում սեղմեք՝ "Չեղարկել"։',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Հնարավոր կոնտակտ.',
    'LBL_COUNTRY' => 'Երկիր:',
    'LBL_CREATED_NEW' => 'Ստեղծվել է նորը',
    'LBL_CREATED_ACCOUNT' => 'Ստեղծվել է նոր հաշիվ',
    'LBL_CREATED_CALL' => 'Ստեղծվել է նոր հեռախոսազանգ',
    'LBL_CREATED_CONTACT' => 'Ստեղծվել է նոր կոնտակտ',
    'LBL_CREATED_MEETING' => 'Ստեղծվել է նոր հանդիպում',
    'LBL_CREATED_OPPORTUNITY' => 'Ստեղծվել է նոր գործարք',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_DEPARTMENT' => 'Վարչություն․',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_DO_NOT_CALL' => 'Չ՛զանգել․',
    'LBL_DUPLICATE' => 'Նմանատիպ պոտենցիալ կլիենտներ',
    'LBL_EMAIL_ADDRESS' => 'էլ-փոստի հասցե․',
    'LBL_EMAIL_OPT_OUT' => 'Էլ-փոստին չգրել․',
    'LBL_EXISTING_ACCOUNT' => 'Օգտագործվել է առկա հաշիվ',
    'LBL_EXISTING_CONTACT' => 'Օգտագործվել է առկա կոնտակտ',
    'LBL_EXISTING_OPPORTUNITY' => 'Օգտագործվել է առկա գործարք',
    'LBL_FAX_PHONE' => 'Ֆաքս․',
    'LBL_FIRST_NAME' => 'Անուն',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',
    'LBL_HOME_PHONE' => 'Տուն հեռ․',
    'LBL_IMPORT_VCARD' => 'Ներմուծել vCard',
    'LBL_VCARD' => 'Այցեքարտ (vCard)',
    'LBL_IMPORT_VCARDTEXT' => 'Ավտոմատ կերպով ստեղծել նոր պոտենցիալ կլիենտ vCard ֆայլը ներմուծելու ժամանակ։',
    'LBL_INVALID_EMAIL' => 'Սխալ էլ-փոստի հասցե․',
    'LBL_INVITEE' => 'Անմիջական հաշվետվություններ',
    'LBL_LAST_NAME' => 'Ազգանուն․',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Պոտենցիալ կլիենտի աղբյուրի նկարագրությունը․',
    'LBL_LEAD_SOURCE' => 'Առաջատար աղբյուրներ․',
    'LBL_LIST_ACCEPT_STATUS' => 'Ընդունել կարգավիճակ',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_CONTACT_NAME' => 'Պոտենցիալ կլիենտի անունը',
    'LBL_LIST_CONTACT_ROLE' => 'Դեր',
    'LBL_LIST_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_LIST_EMAIL_ADDRESS' => 'Էլ-փոստ',
    'LBL_LIST_FIRST_NAME' => 'Անուն',
    'LBL_LIST_FORM_TITLE' => 'Պոտենցիալ կլիենտների ցուցակ',
    'LBL_LIST_LAST_NAME' => 'Ազգանուն',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Պոտենցիալ կլիենտի աղբյուրի նկարագրությունը',
    'LBL_LIST_LEAD_SOURCE' => 'Առաջատար աղբյուր',
    'LBL_LIST_MY_LEADS' => 'Իմ պոտենցիալ կլիենտները',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_LIST_PHONE' => 'Հեռախոս',
    'LBL_LIST_REFERED_BY' => 'Վերահղված է',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Բջջային հեռ.',
    'LBL_MODULE_NAME' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_MODULE_TITLE' => 'Պոտենցիալ կլիենտ․ Գլխավոր',
    'LBL_NAME' => 'Անվանում․',
    'LBL_NEW_FORM_TITLE' => 'Նոր պոտենցիալ կլիենտ',
    'LBL_OFFICE_PHONE' => 'Հեռախոս:',
    'LBL_OPP_NAME' => 'Գործարքի անվանումը․',
    'LBL_OPPORTUNITY_AMOUNT' => 'Գործարքի գումարը․',
    'LBL_OPPORTUNITY_ID' => 'Գործարքի ID',
    'LBL_OPPORTUNITY_NAME' => 'Գործարքի անվանումը․',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Այլ էլ-փոստ․',
    'LBL_OTHER_PHONE' => 'Այլ հեռ․',
    'LBL_PHONE' => 'Հեռ․',
    'LBL_PORTAL_APP' => 'Պորտալի կիրառություն',
    'LBL_PORTAL_INFORMATION' => 'Պորտալի ինֆորմացիան',
    'LBL_PORTAL_NAME' => 'Պորտալի անվանումը․',
    'LBL_POSTAL_CODE' => 'Փոստային ինդեքս',
    'LBL_STREET' => 'Փողոց',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Հիմնական հասցե՝ քաղաք',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Հիմնական հասցե՝ երկիր',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Հիմնական հասցե - փոստային ինդեքս',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Հիմնական հասցե - մարզ',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Հիմնական հասցե՝ Փողոց 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Հիմնական հասցե՝ Փողոց 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Հիմնական հասցե` փողոց',
    'LBL_PRIMARY_ADDRESS' => 'Հիմնական հասցե:',
    'LBL_REFERED_BY' => 'Վերահղված է․',
    'LBL_REPORTS_TO_ID' => 'Հաշվետվություններ ID',
    'LBL_REPORTS_TO' => 'Հաշվետու է․',
    'LBL_SALUTATION' => 'Ողջույնի խոսք',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_SEARCH_FORM_TITLE' => 'Պոտենցիալ կլիենտի որոնում',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Ընտրել նշված նախնական կապերը',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Ընտրել նշված նախնական կապերը',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Կարգավիճակի նկարագրություն',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Ստեղծել առաջատար կլիենտ vCard-ից',
    'LNK_LEAD_LIST' => 'Պոտենցիալ կլիենտներ',
    'LNK_NEW_ACCOUNT' => 'Ստեղծել հաշիվ',
    'LNK_NEW_APPOINTMENT' => 'Նշանակել հանդիպում',
    'LNK_NEW_CONTACT' => 'Ստեղծել կոնտակտ',
    'LNK_NEW_LEAD' => 'Ստեղծել պոտենցիալ կլիենտ',
    'LNK_NEW_NOTE' => 'Ստեղծել նշում',
    'LNK_NEW_TASK' => 'Ստեղծել խնդիր',
    'LNK_NEW_CASE' => 'Ստեղծել գործ',
    'LNK_NEW_CALL' => 'Պլանավորել զանգ',
    'LNK_NEW_MEETING' => 'Պլանավորել հանդիպում',
    'LNK_NEW_OPPORTUNITY' => 'Ստեղծել գործարք',
    'LNK_SELECT_ACCOUNTS' => ' <b>կամ</b> Ընտրել հաշիվը',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս գրառումը։',
    'NTC_REMOVE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք հեռացնել տվյալ պոտենցիալ կլիենտին այս գործից:',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Կամպանիաներ',
    'LBL_CAMPAIGN' => 'Մարքեթինգային արշավ․',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Կամպանիաներ',
    'LBL_BIRTHDATE' => 'Ծննդյան օր․',
    'LBL_ASSISTANT_PHONE' => 'Օգնական-հեռ․',
    'LBL_ASSISTANT' => 'Օգնական',
    'LBL_CREATED_USER' => 'Ստեղծել օգտագործող',
    'LBL_MODIFIED_USER' => 'Փոփոխված օգտվող',
    'LBL_CAMPAIGNS' => 'Կամպանիաներ',
    'LBL_CONVERT_MODULE_NAME' => 'Մոդուլ',
    'LBL_CONVERT_REQUIRED' => 'Պարտադիր',
    'LBL_CONVERT_SELECT' => 'Ընտրություն կատարել',
    'LBL_CONVERT_COPY' => 'Պատճենել տվյալները',
    'LBL_CONVERT_EDIT' => 'Խմբագրել',
    'LBL_CONVERT_DELETE' => 'Ջնջել',
    'LBL_CONVERT_ADD_MODULE' => 'Ավելացնել մոդուլ',
    'LBL_CREATE' => 'Ստեղծել',
    'LBL_SELECT' => ' <b>կամ</b> Ընտրել',
    'LBL_WEBSITE' => 'Վեբ-կայք',
    'LNK_IMPORT_LEADS' => 'Ներմուծել պոտենցիալ կլիենտների',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Այն մոդուլը, որի մեջ կստեղծվի նոր գրառում։',
    'LBL_REQUIRED_TIP' => 'Պահանջվող մոդուլները պետք է ստեղծվեն կամ ընտրվեն նախքան պոտենցիալ կլիենտների կոնվերտացումը։',
    'LBL_COPY_TIP' => 'Եթե այս տարբերակը նշված է, ապա պոտենցիալ կլիենտի դաշտի տվյալները կպատճենվեն նույն անունով նորաստեղծ գրառումներում։',
    'LBL_SELECTION_TIP' => 'Ալյ մոդուլների գրառումները, որոնք կապված են "Կոնտակտներ" մոդուլի հետ, կարող են ստեղծվել կամ կոնվերտացման ընթացքում, կամ ընտրվեն առկա գրառումների ցանկից։',
    'LBL_EDIT_TIP' => 'Փոփոխել մակետի կոնվերտացիան այս մոդուլի համար։',
    'LBL_DELETE_TIP' => 'Հեռացնել այս մոդուլը մակետի կոնվերտացիայից:',

    'LBL_ACTIVITIES_MOVE' => 'Տեղափոխել գործունեությունը դեպի',
    'LBL_ACTIVITIES_COPY' => 'Պատճենել գործունեությունը դեպի',
    'LBL_ACTIVITIES_MOVE_HELP' => "Ընտրել գրառումը, որտեղ պետք է տեղափոխվի պոտենցիալ կլիենտի ամբողջ գործունեությունը: Կտեղափոխվեն բոլոր Խնդիրները, Հեռախոսազանգերը, Հանդիպումները, Նշումները և Էլ-նամակները։",
    'LBL_ACTIVITIES_COPY_HELP' => "Ընտրել գրառում(ներ), որոնց մեջ պետք է ստեղծվեն պոտենցիալ կլիենտի գործունեության կրկնօրինակները: Նոր Խնդիրները, Հեռախոսազանգերը, Հանդիպումները և Նշումները կստեղծվեն յուրաքանչյուր ընտրված գրառում(ների) համար: Էլ-նամակները կկապվեն ընտրված գրառում(ների) հետ:",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Մարքեթ․ արշավի ID',
    'LBL_EDITLAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Մուտքագրել ամսաթիվը' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Բեռնում' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Խմբագրել' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Իրադարձություններ',
);
