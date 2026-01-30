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
    'LBL_ADD_DOCUMENT' => 'Ավելացնել փաստաթուղթ',
    'LBL_ADD_FILE' => 'Ավելացնել ֆայլ',
    'LBL_ATTACHMENTS' => 'Կցված ֆայլեր',
    'LBL_BODY' => 'Տեքստ․ ',
    'LBL_CLOSE' => 'Փակել․ ',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_EDIT_ALT_TEXT' => 'Խմբագրել պարզ տեքստը',
    'LBL_EMAIL_ATTACHMENT' => 'Էլ-փոստի կցված ֆայլ',
    'LBL_HIDE_ALT_TEXT' => 'Թաքցնել պարզ տեքստը',
    'LBL_HTML_BODY' => 'HTML մարմին',
    'LBL_INSERT_VARIABLE' => 'Տեղադրեք փոփոխականը․',
    'LBL_INSERT_URL_REF' => 'Տեղադրեք URL հղումը',
    'LBL_INSERT_TRACKER_URL' => 'Տեղադրել Tracker-ի URL․',
    'LBL_INSERT' => 'Զետեղել',
    'LBL_LIST_DATE_MODIFIED' => 'Վերջին փոփոխությունը',
    'LBL_LIST_DESCRIPTION' => 'Նկարագրություն',
    'LBL_LIST_FORM_TITLE' => 'Էլ-փոստի ձևանմուշների ցուցակ',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_MODULE_NAME' => 'Էլ-փոստի ձևանմուշներ',
    'LBL_MODULE_TITLE' => 'Էլ-փոստի ձևանմուշներ․ Գլխավոր',
    'LBL_NAME' => 'Անվանում․',
    'LBL_NEW_FORM_TITLE' => 'Ստեղծել Էլ-փոստի ձևանմուշ',
    'LBL_PUBLISH' => 'Հրապարակում․',
    'LBL_RELATED_TO' => 'Առնչվում է',
    'LBL_SEARCH_FORM_TITLE' => 'Էլ-փոստի ձևանմուշների որոնում',
    'LBL_SHOW_ALT_TEXT' => 'Ցույց տալ պարզ տեքստ',
    'LBL_SUBJECT' => 'Թեմա',
    'LBL_SUITE_DOCUMENT' => 'Փաստաթուղթ',
    'LBL_UPLOAD_FILE' => 'Upload File',
    'LBL_TEXT_BODY' => 'Տեքստը',
    'LBL_USERS' => 'Օգտվողներ',

    'LNK_EMAIL_TEMPLATE_LIST' => 'Դիտել Էլ-փոստի ձևանմուշները',
    'LNK_IMPORT_NOTES' => 'Նշումների ներմուծում',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Ստեղծել Էլ-փոստի ձևանմուշ',
    'LNK_NEW_EMAIL' => 'Արխիվացնել էլ․փոստը',
    'LNK_NEW_SEND_EMAIL' => 'Կազմել էլ-նամակ',
    'LNK_SENT_EMAIL_LIST' => 'Ուղարկած էլ-նամակներ',
    'LNK_VIEW_CALENDAR' => 'Այսօր',
    // for Inbox
    'LBL_NEW' => 'Նոր',
    'LNK_MY_DRAFTS' => 'Իմ սևագրությունները',
    'LNK_MY_INBOX' => 'Իմ էլ․փոստը',
    'LBL_TEXT_ONLY' => 'Միայն տեքստը',
    'LBL_SEND_AS_TEXT' => 'Ուղարկել միայն տեքստը',
    'LBL_ACCOUNT' => 'Հաշիվ',
    'LBL_FROM_NAME' => 'Ուղարկողի անունը',
    'LBL_PLAIN_TEXT' => 'Պարզ տեքստ',
    'LBL_CREATED_BY' => 'Ստեղծված է',
    'LBL_PUBLISHED' => 'Հրատարակված է',
    'LNK_VIEW_MY_INBOX' => 'Դիտել իմ էլ․փոստը',
    'LBL_ASSIGNED_TO_ID' => 'Կատարող',
    'LBL_EDIT_LAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'Ընտրել' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Մաքրել' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'Տեսակ',
    'LBL_WIDTH' => 'Width Default',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaign',
);
