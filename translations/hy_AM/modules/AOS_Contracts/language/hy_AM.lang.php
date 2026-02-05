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
    'LBL_ASSIGNED_TO_NAME' => 'Պայմանագրի մենեջեր',
    'LBL_CONTRACT_ACCOUNT' => 'Հաշիվ',
    'LBL_OPPORTUNITY' => 'Գործարք',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DESCRIPTION' => 'Նկարագրություն',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Պայմանագիր',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_LIST_FORM_TITLE' => 'Պայմանագրերի ցուցակ',
    'LBL_MODULE_NAME' => 'Պայմանագրեր',
    'LBL_MODULE_TITLE' => 'Պայմանագրեր․ Գլխավոր',
    'LBL_HOMEPAGE_TITLE' => 'Իմ պայմանագրերը',
    'LNK_NEW_RECORD' => 'Ստեղծել պայմանագիր',
    'LNK_LIST' => 'Դիտել պայմանագրերը',
    'LBL_SEARCH_FORM_TITLE' => 'Պայմանագրերի որոնում',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'Նոր պայմանագիր',
    'LBL_CONTRACT_NAME' => 'Պայմանագրի անվանումը',
    'LBL_REFERENCE_CODE ' => 'Տեղեկանքի կոդը ',
    'LBL_START_DATE' => 'Մեկնարկի ամսաթիվը',
    'LBL_END_DATE' => 'Ավարտման ամսաթիվը',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Պայմանագրի գումարը',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Հաճախորդի ստորագրման ամսաթիվը',
    'LBL_COMPANY_SIGNED_DATE' => 'Կազմակերպության ստորագրման ամսաթիվը',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Ամսաթիվը երկարաձգելու հիշեցում',
    'LBL_CONTRACT_TYPE' => 'Պայմանագրի տեսակը',
    'LBL_CONTACT' => 'Կոնտակտ',
    'LBL_ADD_GROUP' => 'Ավելացնել խումբ',
    'LBL_DELETE_GROUP' => 'Հեռացնել խումբը',
    'LBL_GROUP_NAME' => 'Խմբի անվանումը',
    'LBL_GROUP_TOTAL' => 'Ամբողջ խումբը',
    'LBL_PRODUCT_QUANITY' => 'Քանակ',
    'LBL_PRODUCT_NAME' => 'Արտադրանք',
    'LBL_PART_NUMBER' => 'Կոդի համարը',
    'LBL_PRODUCT_NOTE' => 'Նշում',
    'LBL_PRODUCT_DESCRIPTION' => 'Նկարագրություն',
    'LBL_LIST_PRICE' => 'Ցուցակ',
    'LBL_DISCOUNT_AMT' => 'Զեղչ',
    'LBL_UNIT_PRICE' => 'Վաճառքի գին',
    'LBL_TOTAL_PRICE' => 'Ընդամենը',
    'LBL_VAT' => 'Հարկ',
    'LBL_VAT_AMT' => 'Հարկային գումարը',
    'LBL_SERVICE_NAME' => 'Սպասարկում',
    'LBL_SERVICE_LIST_PRICE' => 'Ցուցակ',
    'LBL_SERVICE_PRICE' => 'Վաճառքի գին',
    'LBL_SERVICE_DISCOUNT' => 'Զեղչ',
    'LBL_LINE_ITEMS' => 'Տողի նյութեր',
    'LBL_SUBTOTAL_AMOUNT' => 'Ընդամենը',
    'LBL_DISCOUNT_AMOUNT' => 'Զեղչ',
    'LBL_TAX_AMOUNT' => 'Հարկ',
    'LBL_SHIPPING_AMOUNT' => 'Փոխադրումներ',
    'LBL_TOTAL_AMT' => 'Ընդամենը',
    'LBL_GRAND_TOTAL' => 'Հանրագումար',
    'LBL_SHIPPING_TAX' => 'Առաքման հարկ',
    'LBL_SHIPPING_TAX_AMT' => 'Առաքման հարկ',
    'LBL_ADD_PRODUCT_LINE' => 'Ավելացնել ապրանքի տող',
    'LBL_ADD_SERVICE_LINE' => 'Ավելացնել ծառայության տող',
    'LBL_PRINT_AS_PDF' => 'Տպել, որպես PDF ֆայլ',
    'LBL_EMAIL_PDF' => 'Ուղարկել էլ-փոստով, որպես PDF ֆայլ',
    'LBL_PDF_NAME' => 'Պայմանագիր',
    'LBL_EMAIL_NAME' => 'Պայմանագիրը',
    'LBL_NO_TEMPLATE' => 'Սխալ\nՊայմանագրերի ձևանմուշները գտնված չեն: Եթե անհրաժեշտ պայմանագրի ձևանմուշը բացակայում է, բացեք PDF-ձևանմուշի մոդուլը և ստեղծեք անհրաժեշտ շաբլոնը։',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ընդամենը (ընդունված արտարժույթ)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Զեղչ (ընդունված արտարժույթ)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Հարկ (ընդունված արտարժույթ)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Առաքում (ընդունված արտարժույթ)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Ընդամենը (ընդունված արտարժույթ)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Առաքման հարկ (ընդունված արտարժույթ)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Ընդամենը (ընդունված արտարժույթ)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Տողի տարրի խմբեր',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);
