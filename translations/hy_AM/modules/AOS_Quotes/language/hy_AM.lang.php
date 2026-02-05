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
    'LBL_NAME' => 'Վերնագիր',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'ERR_DELETE_RECORD' => 'Դուք պետք է նշեք գրառման համարը հեռացնելուց առաջ։',
    'LBL_ACCOUNT_NAME' => 'Վերնագիր',
    'LBL_ACCOUNT' => 'Ընկերություն․',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_ADDRESS_INFORMATION' => 'Հասցեի ինֆորմացիա',
    'LBL_ANNUAL_REVENUE' => 'Տարեկան եկամուտ․',
    'LBL_ANY_ADDRESS' => 'Այլ հասցե',
    'LBL_ANY_EMAIL' => 'Ցանկացած էլ-փոստ․',
    'LBL_ANY_PHONE' => 'Այլ հեռ․',
    'LBL_RATING' => 'Վարկանիշ',
    'LBL_ASSIGNED_USER' => 'Օգտագործող',
    'LBL_BILLING_ADDRESS_CITY' => 'Վճարման հասցե - քաղաք․',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Վճարման հասցե - երկիր․',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Վճարման հասցե - ինդեքս․',
    'LBL_BILLING_ADDRESS_STATE' => 'Վճարման հասցե - շրջան․',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Վճարման հասցե - փողոց 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Վճարման հասցե - փողոց 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Վճարման հասցե - փողոց 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Վճարման հասցե - փողոց․',
    'LBL_BILLING_ADDRESS' => 'Վճարման հասցե․',
    'LBL_ACCOUNT_INFORMATION' => 'Հիմնական ինֆորմացիա',
    'LBL_CITY' => 'Քաղաք:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_COUNTRY' => 'Երկիր:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Հաշիվներ',
    'LBL_DUPLICATE' => 'Հնարավոր է հաշվի կրկնօրինակ',
    'LBL_EMAIL' => 'Էլ-փոստ․',
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
    'LBL_OTHER_EMAIL_ADDRESS' => 'Այլ էլ-փոստ․',
    'LBL_OTHER_PHONE' => 'Այլ հեռ․',
    'LBL_OWNERSHIP' => 'Սեփականություն:',
    'LBL_PARENT_ACCOUNT_ID' => 'Ծնողական հաշվի ID',
    'LBL_PHONE_ALT' => 'Լրացուցիչ հեռ․',
    'LBL_PHONE_FAX' => 'Հեռ․ ֆաքս',
    'LBL_PHONE_OFFICE' => 'Հեռախոս:',
    'LBL_PHONE' => 'Հեռ․',
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
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ֆոնդային կոդը՝',
    'LBL_TYPE' => 'Տիպ.',
    'LBL_WEBSITE' => 'Կայք.',
    'LNK_ACCOUNT_LIST' => 'Հաշիվներ',
    'LNK_NEW_ACCOUNT' => 'Ստեղծել հաշիվ',
    'MSG_DUPLICATE' => 'Ձեր ստեղծած հաշիվը, հնարավոր է արդեն գոյություն ունեցող գրառման կրկնօրինակ է։ Դուք կարող եք կամ ընտրել հաշիվ ներքևի ցանկից կամ սեղմել "Պահպանել" շարունակելու ստեղծել նոր հաշիվ, նախկինում մուտքագրված տվյալներով։',
    'MSG_SHOW_DUPLICATES' => 'Ձեր ստեղծած հաշիվը, հնարավոր է արդեն գոյություն ունեցող գրառման կրկնօրինակ է։ Դուք կարող եք սեղմել "Պահպանել" այս նոր հաշվի մուտքագրված տվյալները շարունակելու համար կամ դուք կարող եք սեղմել "Չեղարկել" մոդուլին վերադառնալու համար։',
    'NTC_DELETE_CONFIRMATION' => 'Դուք համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս գրառումը։',
    'LBL_LIST_FORM_TITLE' => 'Առաջարկների ցուցակ',
    'LBL_MODULE_NAME' => 'Առաջարկներ',
    'LBL_MODULE_TITLE' => 'Առաջարկներ. Գլխավոր',
    'LBL_HOMEPAGE_TITLE' => 'Իմ առաջարկները',
    'LNK_NEW_RECORD' => 'Ստեղծել առաջարկ',
    'LNK_LIST' => 'Առաջարկների դիտում',
    'LBL_SEARCH_FORM_TITLE' => 'Փնտրել առաջարկներ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_NEW_FORM_TITLE' => 'Նոր առաջարկ',
    'LBL_TERMS_C' => 'Պայմաններ',
    'LBL_APPROVAL_ISSUE' => 'Հաստատման խնդիրներ',
    'LBL_APPROVAL_STATUS' => 'Հաստատման կարգավիճակ',
    'LBL_BILLING_ACCOUNT' => 'Հաշիվ',
    'LBL_BILLING_CONTACT' => 'Կոնտակտ',
    'LBL_EXPIRATION' => 'Ուժի մեջ է մինչև',
    'LBL_QUOTE_NUMBER' => 'Առաջարկի համարը',
    'LBL_OPPORTUNITY' => 'Գործարք',
    'LBL_TEMPLATE_DDOWN_C' => 'Առաջարկի ձևանմուշ',
    'LBL_STAGE' => 'Առաջարկի ընթացքը',
    'LBL_TERM' => 'Վճարման պայմաններ',
    'LBL_SUBTOTAL_AMOUNT' => 'Ընդամենը',
    'LBL_DISCOUNT_AMOUNT' => 'Զեղչ',
    'LBL_TAX_AMOUNT' => 'Հարկ',
    'LBL_SHIPPING_AMOUNT' => 'Փոխադրումներ',
    'LBL_TOTAL_AMT' => 'Ընդամենը',
    'VALUE' => 'Վերնագիր',
    'LBL_EMAIL_ADDRESSES' => 'Էլ-փոստի հասցեներ',
    'LBL_LINE_ITEMS' => 'Տողի նյութեր',
    'LBL_GRAND_TOTAL' => 'Հանրագումար',
    'LBL_INVOICE_STATUS' => 'Հաշիվ-ապրանքագրի կարգավիճակը',
    'LBL_PRODUCT_QUANITY' => 'Քանակ',
    'LBL_PRODUCT_NAME' => 'Արտադրանք',
    'LBL_PART_NUMBER' => 'Կոդի համարը',
    'LBL_PRODUCT_NOTE' => 'Նշում',
    'LBL_PRODUCT_DESCRIPTION' => 'Նկարագրություն',
    'LBL_LIST_PRICE' => 'Ցուցակ',
    'LBL_DISCOUNT_AMT' => 'Զեղչ',
    'LBL_UNIT_PRICE' => 'Վաճառքի գին',
    'LBL_TOTAL_PRICE' => 'Ընդամենը',
    'LBL_VAT' => 'Հարկ', // VAT
    'LBL_VAT_AMT' => 'Հարկային գումարը', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Ավելացնել ապրանքի տող',
    'LBL_SERVICE_NAME' => 'Սպասարկում',
    'LBL_SERVICE_LIST_PRICE' => 'Ցուցակ',
    'LBL_SERVICE_PRICE' => 'Վաճառքի գին',
    'LBL_SERVICE_DISCOUNT' => 'Զեղչ',
    'LBL_ADD_SERVICE_LINE' => 'Ավելացնել ծառայության տող',
    'LBL_REMOVE_PRODUCT_LINE' => 'Հեռացնել',
    'LBL_CONVERT_TO_INVOICE' => 'Կոնվերտացնել հաշիվ-ապրանքագիրը',
    'LBL_PRINT_AS_PDF' => 'Տպել, որպես PDF ֆայլ',
    'LBL_EMAIL_QUOTE' => 'Էլ-փոստի մեջբերում',
    'LBL_CREATE_CONTRACT' => 'Ստեղծել պայմանագիր',
    'LBL_LIST_NUM' => 'Համ․',
    'LBL_PDF_NAME' => 'Առաջարկ',
    'LBL_EMAIL_NAME' => 'Առաջարկ',
    'LBL_QUOTE_DATE' => 'Առաջարկի ամսաթիվը',
    'LBL_NO_TEMPLATE' => 'Սխալ\nՈչ մի ձևանմուշ գտնված չէ։ Եթե դուք չեք ստեղծել մեջբերման ձևանմուշ, բացեք PDF ձևանմուշների մոդուլը և ստեղծեք անհրաժեշտ ձևանմուշը',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Ընդհանուր+հարկ',//pre shipping
    'LBL_EMAIL_PDF' => 'Ուղարկել էլ-փոստով, որպես PDF ֆայլ',
    'LBL_ADD_GROUP' => 'Ավելացնել խումբ',
    'LBL_DELETE_GROUP' => 'Հեռացնել խումբը',
    'LBL_GROUP_NAME' => 'Խմբի անվանումը',
    'LBL_GROUP_TOTAL' => 'Ամբողջ խումբը',
    'LBL_SHIPPING_TAX' => 'Առաքման հարկ',
    'LBL_SHIPPING_TAX_AMT' => 'Առաքման հարկ',
    'LBL_IMPORT_LINE_ITEMS' => 'Ներմուծել տողի նյութերը',
    'LBL_CREATE_OPPORTUNITY' => 'Ստեղծել գործարք',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ընդամենը (ընդունված արտարժույթ)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Զեղչ (ընդունված արտարժույթ)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Հարկ (ընդունված արտարժույթ)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Առաքում (ընդունված արտարժույթ)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Ընդամենը (ընդունված արտարժույթ)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Առաքման հարկ (ընդունված արտարժույթ)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Ընդամենը (ընդունված արտարժույթ)',
    'LBL_QUOTE_TO' => 'Մեջբերել',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Համընդհանուր + հարկ (ընդունված արտարժույթ)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Տողի տարրի խմբեր',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
