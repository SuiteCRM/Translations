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
    'ERR_DELETE_RECORD' => 'Dapat mong tukuyin ang bilang ng ulat upang burahin ang akwant.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Mga mungkahi na KnowledgeBase',
    'LBL_TOOL_TIP_TITLE' => 'Pamagat: ',
    'LBL_TOOL_TIP_BODY' => 'Katawan: ',
    'LBL_TOOL_TIP_INFO' => 'Karagdagang impormasyon: ',
    'LBL_TOOL_TIP_USE' => 'Gamitin bilang: ',
    'LBL_SUGGESTION_BOX' => 'Mga opinion',
    'LBL_NO_SUGGESTIONS' => 'Walang mga mungkahi',
    'LBL_RESOLUTION_BUTTON' => 'Resolusyon',
    'LBL_SUGGESTION_BOX_STATUS' => 'Katayuan',
    'LBL_SUGGESTION_BOX_TITLE' => 'Paksa',
    'LBL_SUGGESTION_BOX_REL' => 'Kabuluhan',

    'LBL_ACCOUNT_ID' => 'Akwant ID',
    'LBL_ACCOUNT_NAME' => 'Pangalan ng akwant:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga account',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga bug',
    'LBL_CASE_NUMBER' => 'Numero ng kaso:',
    'LBL_CASE' => 'Kaso:',
    'LBL_CONTACT_NAME' => 'Pangalan ng contact:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_INVITEE' => 'Mga kontak',
    'LBL_MEMBER_OF' => 'Ang akawnt',
    'LBL_MODULE_NAME' => 'Ang mga kaso',
    'LBL_MODULE_TITLE' => 'Kaso: Bahay',
    'LBL_NEW_FORM_TITLE' => 'Bagong kaso',
    'LBL_NUMBER' => 'Numero:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    'LBL_RESOLUTION' => 'Resolusyon:',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng Kaso',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_SUBJECT' => 'Paksa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinalaga sa gumagamit',
    'LBL_LIST_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_LIST_ASSIGNED' => 'Ini-assign sa',
    'LBL_LIST_CLOSE' => 'Ang pagsasara',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng kaso',
    'LBL_LIST_LAST_MODIFIED' => 'Huling Binago',
    'LBL_LIST_MY_CASES' => 'Aking bukas na kaso',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_SUBJECT' => 'Ang paksa',

    'LNK_CASE_LIST' => 'Tumanaw ng mga kaso',
    'LNK_NEW_CASE' => 'Gumawa ng kaso',
    'LBL_LIST_DATE_CREATED' => 'Ang petsa ng pagkakalikha',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_TYPE' => 'Uri',
    'LBL_WORK_LOG' => 'Log ng gawain',
    'LNK_IMPORT_CASES' => 'Mag-import ng mga kaso',

    'LBL_CREATED_USER' => 'Nilikha ng gumagamit',
    'LBL_MODIFIED_USER' => 'Binago ng gumagamit',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_CASE_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Mga update - teksto', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal na Update',
    'LBL_AOP_CASE_UPDATES' => 'Ang mga kaso ay i-update',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Naka-thread na mga update ng kaso',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'I-collapse lahat',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Ipalawak lahat',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Mga Attachment:',

    'LBL_AOP_CASE_EVENTS' => 'Ang mga pangyayari ng kaso',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Mga nakalakip ng kaso:',
    'LBL_ADD_CASE_FILE' => 'Magdagdag ng File',
    'LBL_REMOVE_CASE_FILE' => 'Magtanggal ng file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Pumili ng dokumento',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Linawin and dokumento',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Panloob na dokumento ng CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Panlabas na file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Nilika ng kontak',
    'LBL_CONTACT_CREATED_BY' => 'Inilikha sa pamamagitan ng',
    'LBL_CASE_UPDATE_FORM' => 'Mga update - form na paglalakip', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
