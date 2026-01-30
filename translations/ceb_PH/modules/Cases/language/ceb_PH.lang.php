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
    'ERR_DELETE_RECORD' => 'Kinahanglan nimo i-specify ang numero sa rekord para mawagtang ang account.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Mga Sugyot sa KnowledgeBase',
    'LBL_TOOL_TIP_TITLE' => 'Titulo: ',
    'LBL_TOOL_TIP_BODY' => 'Lawas: ',
    'LBL_TOOL_TIP_INFO' => 'Dugang pang Impormasyon: ',
    'LBL_TOOL_TIP_USE' => 'Gigamit isip: ',
    'LBL_SUGGESTION_BOX' => 'Mga Sugyot',
    'LBL_NO_SUGGESTIONS' => 'Walay mga sugyot',
    'LBL_RESOLUTION_BUTTON' => 'Resolusyon',
    'LBL_SUGGESTION_BOX_STATUS' => 'Stado',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titulo',
    'LBL_SUGGESTION_BOX_REL' => 'Importansya',

    'LBL_ACCOUNT_ID' => 'ID sa Account',
    'LBL_ACCOUNT_NAME' => 'Pangalan sa account:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga Account',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Manananap',
    'LBL_CASE_NUMBER' => 'Numero sa Kaso:',
    'LBL_CASE' => 'Kaso:',
    'LBL_CONTACT_NAME' => 'Kontak nga pangalan:',
    'LBL_CONTACT_ROLE' => 'Imong Role:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga Kaso',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_INVITEE' => 'Kontak',
    'LBL_MEMBER_OF' => 'Account',
    'LBL_MODULE_NAME' => 'Mga Kaso',
    'LBL_MODULE_TITLE' => 'Mga Kaso: Balay',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong Kaso',
    'LBL_NUMBER' => 'Numero:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    'LBL_RESOLUTION' => 'Resulosyon:',
    'LBL_SEARCH_FORM_TITLE' => 'Pangita sa Kaso',
    'LBL_STATUS' => 'Estado:',
    'LBL_SUBJECT' => 'Sabjek:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Na assign nga manggagamit',
    'LBL_LIST_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_LIST_ASSIGNED' => 'Na butang sa',
    'LBL_LIST_CLOSE' => 'Sirado',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa Kaso',
    'LBL_LIST_LAST_MODIFIED' => 'Katapusan nga gi-usab',
    'LBL_LIST_MY_CASES' => 'Ang akong abli nga mga kaso',
    'LBL_LIST_NUMBER' => 'Numero.',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_LIST_SUBJECT' => 'Sabjek',

    'LNK_CASE_LIST' => 'Tan-aw og mga kaso',
    'LNK_NEW_CASE' => 'Nag buhat og kaso',
    'LBL_LIST_DATE_CREATED' => 'Petsa nga gihimo',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_TYPE' => 'Isulat',
    'LBL_WORK_LOG' => 'Log sa Trabaho',
    'LNK_IMPORT_CASES' => 'Import og mga Kaso',

    'LBL_CREATED_USER' => 'Nahimo nga User',
    'LBL_MODIFIED_USER' => 'Na-usab nga User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LBL_CASE_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Mga Update - Teksto', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Sa. sulod. nag Bag-o',
    'LBL_AOP_CASE_UPDATES' => 'Kaso nga mga Bag-o',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Mga Update sa Kaso Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Gub-on ang tanan',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Padak-an ang tanan',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Mga Sumpay:',

    'LBL_AOP_CASE_EVENTS' => 'Kaso sa mga. Paligsahan',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Mga sumpay sa kaso:',
    'LBL_ADD_CASE_FILE' => 'Magdugang og file',
    'LBL_REMOVE_CASE_FILE' => 'Magtangtang og file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Pagpili og dokumento',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Tin-awon ang dokumento',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Sulod nga dokumento sa CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Gawas nga file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Gihimo pinaagi sa kontak',
    'LBL_CONTACT_CREATED_BY' => 'Gihimo ni',
    'LBL_CASE_UPDATE_FORM' => 'Mga Update - Sumpay nga form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
