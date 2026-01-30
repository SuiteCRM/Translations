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
    'ERR_DELETE_RECORD' => 'Kailangang tumukoy ng isang record number para mabura ang account.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Mga mungkahing nakabase sa kalaaman',
    'LBL_TOOL_TIP_TITLE' => 'Pamagat: ',
    'LBL_TOOL_TIP_BODY' => 'Ang katawan: ',
    'LBL_TOOL_TIP_INFO' => 'Ang Karagdagang impormasyon: ',
    'LBL_TOOL_TIP_USE' => 'Gamitin bilang: ',
    'LBL_SUGGESTION_BOX' => 'Ang Mga mungkahi',
    'LBL_NO_SUGGESTIONS' => 'Walang Mga Mungkahi',
    'LBL_RESOLUTION_BUTTON' => 'Ang Resolusyon',
    'LBL_SUGGESTION_BOX_STATUS' => 'Kalagayan',
    'LBL_SUGGESTION_BOX_TITLE' => 'Ang Pamagat',
    'LBL_SUGGESTION_BOX_REL' => 'Ang Kaugnayan',

    'LBL_ACCOUNT_ID' => 'Ang ID ng account',
    'LBL_ACCOUNT_NAME' => 'Ang pangalan ng account:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ang mga Akawnt',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga mali',
    'LBL_CASE_NUMBER' => 'Ang Numero ng kaso:',
    'LBL_CASE' => 'Ang kaso:',
    'LBL_CONTACT_NAME' => 'Pangalan ng contact:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_INVITEE' => 'Ang mga koneksyon',
    'LBL_MEMBER_OF' => 'Ang account',
    'LBL_MODULE_NAME' => 'Ang mga kaso',
    'LBL_MODULE_TITLE' => 'Ang mga kaso: tirahan',
    'LBL_NEW_FORM_TITLE' => 'Bagong Kaso',
    'LBL_NUMBER' => 'Numero:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Ang mga dokumento',
    'LBL_RESOLUTION' => 'Paglutas:',
    'LBL_SEARCH_FORM_TITLE' => 'Ang Paghahanap ng Kaso',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_SUBJECT' => 'Ang Paksa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Magtalaga ng gumagamit',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_LIST_ASSIGNED' => 'Ang Nakatalaga sa',
    'LBL_LIST_CLOSE' => 'Sarado',
    'LBL_LIST_FORM_TITLE' => 'Ang listahan ng kaso',
    'LBL_LIST_LAST_MODIFIED' => 'Ang Huling Nabago',
    'LBL_LIST_MY_CASES' => 'Ang aking buksang mga kaso',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LIST_SUBJECT' => 'Paksa',

    'LNK_CASE_LIST' => 'Ang mga kaso ay tingnan',
    'LNK_NEW_CASE' => 'Lumikha ng kaso',
    'LBL_LIST_DATE_CREATED' => 'Ang petsa ay lumikha',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_TYPE' => 'Klase',
    'LBL_WORK_LOG' => 'Mag-log sa trabaho',
    'LNK_IMPORT_CASES' => 'Ang pag-angkat ng mga kaso',

    'LBL_CREATED_USER' => 'Nilikhang gumagamit',
    'LBL_MODIFIED_USER' => 'Binsgo ng gumagamit',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LBL_CASE_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Ang mga i-update - teksto', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Pangloob na update',
    'LBL_AOP_CASE_UPDATES' => 'Mga Kaso ng Updeyt',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Nabago ang Mga Update sa Kaso',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Ang pagguho ng lahat',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Palawakin ang lahat',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Mga Attachment:',

    'LBL_AOP_CASE_EVENTS' => 'Mga Kasong Pangyayari',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Ang mga pagkakabit ng kaso:',
    'LBL_ADD_CASE_FILE' => 'Idagdag ang payl',
    'LBL_REMOVE_CASE_FILE' => 'Alisin ang payl',
    'LBL_SELECT_CASE_DOCUMENT' => 'Pumili ng dokumento',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Malinaw na dokumento',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Pangloob na dokumento ng CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Panglabas na payl',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Nalikha sa pamamagitan ng pakikipag ugnay',
    'LBL_CONTACT_CREATED_BY' => 'Nilikha sa pamamagitan ng',
    'LBL_CASE_UPDATE_FORM' => 'Mga update - Anyo ng pagkakabit', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
