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
    'ERR_DELETE_RECORD' => 'Հաշիվը հեռացնելուց առաջ դուք պետք է նշեք գրառման համարը։',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Լուծումների տարբերակներ գիտելիքների բազայից',
    'LBL_TOOL_TIP_TITLE' => 'Վերնագիր․',
    'LBL_TOOL_TIP_BODY' => 'Տեքստ․ ',
    'LBL_TOOL_TIP_INFO' => 'Լրացուցիչ ինֆորմացիա․',
    'LBL_TOOL_TIP_USE' => 'Օգտագործել ինչպես․',
    'LBL_SUGGESTION_BOX' => 'Առաջարկություններ',
    'LBL_NO_SUGGESTIONS' => 'Ոչ մի առաջարկություն չկա',
    'LBL_RESOLUTION_BUTTON' => 'Պատասխան',
    'LBL_SUGGESTION_BOX_STATUS' => 'Կարգավիճակ',
    'LBL_SUGGESTION_BOX_TITLE' => 'Վերնագիր',
    'LBL_SUGGESTION_BOX_REL' => 'Համապատասխանություն',

    'LBL_ACCOUNT_ID' => 'Հաշիվ ID',
    'LBL_ACCOUNT_NAME' => 'Հաշվի անունը․',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Հաշիվներ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Վրիպումներ',
    'LBL_CASE_NUMBER' => 'Գործի համարը',
    'LBL_CASE' => 'Գործ․',
    'LBL_CONTACT_NAME' => 'Կոնտակտ անվանում․',
    'LBL_CONTACT_ROLE' => 'Դեր.',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Գործեր',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',
    'LBL_INVITEE' => 'Կոնտակտներ',
    'LBL_MEMBER_OF' => 'Հաշիվ',
    'LBL_MODULE_NAME' => 'Գործեր',
    'LBL_MODULE_TITLE' => 'Գործեր․ Գլխավոր',
    'LBL_NEW_FORM_TITLE' => 'Նոր գործ',
    'LBL_NUMBER' => 'Համար',
    'LBL_PRIORITY' => 'Առաջնահերթություն',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Նախագծեր',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Փաստաթղթեր',
    'LBL_RESOLUTION' => 'Պատասխան',
    'LBL_SEARCH_FORM_TITLE' => 'Գործի որոնում',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_SUBJECT' => 'Թեմա',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_ASSIGNED' => 'Կատարող',
    'LBL_LIST_CLOSE' => 'Փակել',
    'LBL_LIST_FORM_TITLE' => 'Գործերի ցուցակ',
    'LBL_LIST_LAST_MODIFIED' => 'Վերջին փոփոխությունը',
    'LBL_LIST_MY_CASES' => 'Իմ բացված գործերը',
    'LBL_LIST_NUMBER' => 'Համար',
    'LBL_LIST_PRIORITY' => 'Առաջնահերթություն',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LIST_SUBJECT' => 'Թեմա',

    'LNK_CASE_LIST' => 'Գործերի դիտում',
    'LNK_NEW_CASE' => 'Ստեղծել գործ',
    'LBL_LIST_DATE_CREATED' => 'Ստեղծման ամսաթիվ',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_TYPE' => 'Տեսակ',
    'LBL_WORK_LOG' => 'Գրանցամատյան․',
    'LNK_IMPORT_CASES' => 'Գործերի ներմուծում',

    'LBL_CREATED_USER' => 'Ստեղծել օգտագործող',
    'LBL_MODIFIED_USER' => 'Փոփոխված օգտվող',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Նախագծեր',
    'LBL_CASE_INFORMATION' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Թարմացման տեքստը', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Ներքին թարմացում',
    'LBL_AOP_CASE_UPDATES' => 'Գործի նորություներ',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Գործի նորությունները հրապարակված են',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Հեռացնել ամբողջը',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Ընդլայնել բոլորը',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Կցված ֆայլեր',

    'LBL_AOP_CASE_EVENTS' => 'Գործի իրադարձություններ',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Գործին կցված ֆայլեր',
    'LBL_ADD_CASE_FILE' => 'Ավելացնել ֆայլ',
    'LBL_REMOVE_CASE_FILE' => 'Հեռացնել ֆայլը',
    'LBL_SELECT_CASE_DOCUMENT' => 'Ընտրել փաստաթուղթը',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Ջնջել փաստաթուղթը',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Ներքին փաստաթուղթ',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Արտաքին ֆայլ',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Ստեղծված է կոնտակտ',
    'LBL_CONTACT_CREATED_BY' => 'Ստեղծված է․',
    'LBL_CASE_UPDATE_FORM' => 'Թարմացնել կցված ֆայլի ձևը', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
