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
    //module
    'LBL_MODULE_NAME' => 'Փաստաթղթեր',
    'LBL_MODULE_TITLE' => 'Փաստաթղթեր․ Գլխավոր',
    'LNK_NEW_DOCUMENT' => 'Ստեղծել փաստաթուղթ',
    'LNK_DOCUMENT_LIST' => 'Փաստաթղթերի դիտում',
    'LBL_DOC_REV_HEADER' => 'Փաստաթղթի տարբերակներ',
    'LBL_SEARCH_FORM_TITLE' => 'Փաստաթղթի որոնում',
    //vardef labels
    'LBL_NAME' => 'Փաստաթղթի անվանում',
    'LBL_DESCRIPTION' => 'Նկարագրություն',
    'LBL_CATEGORY' => 'Կատեգորիա',
    'LBL_SUBCATEGORY' => 'Ենթակատեգորիա',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_CREATED_BY' => 'Ստեղծված է․',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_MODIFIED' => 'Փոփոխված է ID-ի կողմից',
    'LBL_MODIFIED_USER' => 'Փոփոխված է',
    'LBL_CREATED' => 'Ստեղծված է․',
    'LBL_REVISIONS' => 'Տարբերակներ',
    'LBL_RELATED_DOCUMENT_ID' => 'Առնչվող փաստաթղթի ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Առնչվող փաստաթղթի ID տարբերակ',
    'LBL_IS_TEMPLATE' => 'Ձևանմուշը',
    'LBL_TEMPLATE_TYPE' => 'Փաստաթղթի տեսակ',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_REVISION_NAME' => 'Տարբերակի համարը',
    'LBL_MIME' => 'MIME տեսակը',
    'LBL_REVISION' => 'Տարբերակ',
    'LBL_DOCUMENT' => 'Առնչվող փաստաթղթեր',
    'LBL_LATEST_REVISION' => 'Վերջին տարբերակ',
    'LBL_CHANGE_LOG' => 'Փոփոխությունների գրանցամատյան',
    'LBL_ACTIVE_DATE' => 'Հրապարակման ամսաթիվը',
    'LBL_EXPIRATION_DATE' => 'Վերջնաժամկետի օրը',
    'LBL_FILE_EXTENSION' => 'Ֆայլի ընդլայնում',
    'LBL_LAST_REV_MIME_TYPE' => 'MIME տեսակի վերջին տարբերակը',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Չճշտված',
    'LBL_HOMEPAGE_TITLE' => 'Իմ փաստաթղթերը',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Նոր փաստաթուղթ',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Փաստաթղթի անվանում․',
    'LBL_FILENAME' => 'Ֆայլի անվանումը․',
    'LBL_LIST_FILENAME' => 'Ֆայլ․',
    'LBL_DOC_VERSION' => 'Տարբերակ․',
    'LBL_FILE_UPLOAD' => 'Ֆայլ․',

    'LBL_CATEGORY_VALUE' => 'Կատեգորիա:',
    'LBL_LIST_CATEGORY' => 'Կատեգորիա',
    'LBL_SUBCATEGORY_VALUE' => 'Ենթակատեգորիա:',
    'LBL_DOC_STATUS' => 'Կարգավիճակ',
    'LBL_LAST_REV_CREATOR' => 'Տարբերակը ստեղծված է․',
    'LBL_LASTEST_REVISION_NAME' => 'Վերջին տարբերակի անվանումը․',
    'LBL_SELECTED_REVISION_NAME' => 'Ընտրված տարբերակի անվանումը․',
    'LBL_CONTRACT_STATUS' => 'Պայմանագրի կարգավիճակը',
    'LBL_CONTRACT_NAME' => 'Պայմանագրի անվանումը․',
    'LBL_DET_RELATED_DOCUMENT' => 'Առնչվող փաստաթուղթ',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Առնչվող փաստաթղթի տարբերակ",
    'LBL_DET_IS_TEMPLATE' => 'Ձևանմո՞ւշ.',
    'LBL_DET_TEMPLATE_TYPE' => 'Փաստաթղթի տեսակ:',
    'LBL_DOC_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_DOC_ACTIVE_DATE' => 'Հրապարակման ամսաթիվը',
    'LBL_DOC_EXP_DATE' => 'Վերջնաժամկետի օրը․',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Փաստաթղթերի ցուցակ',
    'LBL_LIST_DOCUMENT' => 'Փաստաթուղթ',
    'LBL_LIST_SUBCATEGORY' => 'Ենթակատեգորիա',
    'LBL_LIST_REVISION' => 'Տարբերակ',
    'LBL_LIST_LAST_REV_CREATOR' => 'Հրատարակված է',
    'LBL_LIST_LAST_REV_DATE' => 'Տարբերակի ամսաթիվը',
    'LBL_LIST_VIEW_DOCUMENT' => 'Դիտում',
    'LBL_LIST_ACTIVE_DATE' => 'Հրապարակման ամսաթիվը',
    'LBL_LIST_EXP_DATE' => 'Վերջնաժամկետի օրը',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LINKED_ID' => 'Կապակցող ID',
    'LBL_SELECTED_REVISION_ID' => 'Ընտրված տարբերակի ID',
    'LBL_LATEST_REVISION_ID' => 'Վերջին տարբերակի ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Ընտրված տարբերակի ֆայլի անվանումը',
    'LBL_FILE_URL' => 'Ֆայլի URL',

    //document search form.
    'LBL_SF_CATEGORY' => 'Կատեգորիա:',
    'LBL_SF_SUBCATEGORY' => 'Ենթակատեգորիա:',

    'DEF_CREATE_LOG' => 'Փաստաթուղթը ստեղծված է',

    //error messages
    'ERR_DOC_NAME' => 'Փաստաթղթի անվանում',
    'ERR_DOC_ACTIVE_DATE' => 'Հրապարակման ամսաթիվը',
    'ERR_FILENAME' => 'Ֆայլի անվանումը',
    'ERR_DOC_VERSION' => 'Փաստաթղթի տարբերակ',
    'ERR_DELETE_CONFIRM' => 'Ուզո՞ւմ եք ջնջել այս փաստաթղթի տարբերակը:',
    'ERR_DELETE_LATEST_VERSION' => 'Ձեզ չի թույլատրվում ջնջել փաստաթղթի վերջին տարբերակը:',
    'LNK_NEW_MAIL_MERGE' => 'Փոստի միավորում',
    'ERR_MISSING_FILE' => 'Այս փաստաթուղթի ֆայլը բացակայում է, ամենայն հավանականությամբ, պայմանավորված է սխալ վերբեռնման հետ: Խնդրում ենք նորից փորձեք բեռնել ֆայլը կամ դիմեք Ձեր ադմինիստրատորին:',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Անվանում',
    'LBL_LIST_IS_TEMPLATE' => 'Ձևանմո՞ւշ',
    'LBL_LIST_TEMPLATE_TYPE' => 'Փաստաթղթի տեսակ',
    'LBL_LAST_REV_CREATE_DATE' => 'Վերջին տարբերակի ստեղծման ամսաթիվը',
    'LBL_CONTRACTS' => 'Պայմանագրեր',
    'LBL_CREATED_USER' => 'Ստեղծել օգտագործող',
    'LBL_DOCUMENT_INFORMATION' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Փաստաթղթի աղբյուր ID',
    'LBL_DOC_TYPE' => 'Աղբյուր',
    'LBL_DOC_TYPE_POPUP' => 'Ընտրեք աղբյուր, որն այս փաստաթուղթը կվերբեռնի<br> և որից այն հասանելի կլինի։',
    'LBL_DOC_URL' => 'Փաստաթուղթի URL աղբյուր',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Ֆայլի անվանումը',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Ցուցակում ցուցադրվում են, վերջերս 20 ամենաշատ փոփոխված ֆայլերը: Օգտագործիր որոնումը ուրիշ ֆայլեր գտնելու համար:',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Ֆայլի անվանումը',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Օգտվողը փորձել է մուտք գործել մի անվավեր արտաքին API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Մուտքի ստուգումը ձախողվեց արտաքին API-ի համար ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Հաշիվներ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Գործարքներ',
    'LBL_CASES_SUBPANEL_TITLE' => 'Գործեր',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Վրիպումներ',

    'LBL_AOS_CONTRACTS' => 'Պայմանագրեր',
);
