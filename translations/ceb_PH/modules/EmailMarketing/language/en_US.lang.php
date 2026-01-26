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
    'LBL_REPLY_ADDR' => '"Tubag-kang" Address: ',
    'LBL_REPLY_NAME' => '"Tubag-kang" Ngalan: ',

    'LBL_MODULE_NAME' => 'Email sa Merkado',
    'LBL_MODULE_TITLE' => 'Pagpamaligya sa Email: Home',
    'LBL_LIST_FORM_TITLE' => 'Mga kampanya sa pagpamaligya sa email',
    'LBL_NAME' => 'Ngalan: ',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_FROM_ADDR' => 'Gikan sa email',
    'LBL_LIST_DATE_START' => 'Petsa nga Nagsugod',
    'LBL_LIST_TEMPLATE_NAME' => 'Email plaka',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_STATUS' => 'Stado',
    'LBL_STATUS_TEXT' => 'Estado:',
    'LBL_TEMPLATE_NAME' => 'Pangan sa template',
    'LBL_DATE_ENTERED' => 'Date. ni sulod',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab ni: ',
    'LBL_CREATED' => 'Gimugna ni: ',
    'LBL_MESSAGE_FOR' => 'Ipadala Kining Mensahe Kang:',

    'LBL_FROM_NAME' => 'Gikan Kang: ',
    'LBL_FROM_ADDR' => 'Gikan sa email Address: ',
    'LBL_DATE_START' => 'Petsa nga Nagsugod',
    'LBL_TIME_START' => 'Oras sa Pagsugod ',
    'LBL_START_DATE_TIME' => 'Sugod nga Petsa ug Oras: ',
    'LBL_TEMPLATE' => 'Email Template: ',

    'LBL_MODIFIED_BY' => 'Giusab ni: ',
    'LBL_CREATED_BY' => 'Gimugna ni: ',

    'LNK_NEW_CAMPAIGN' => 'Maghimo ug Kampanya',
    'LNK_CAMPAIGN_LIST' => 'Mangompanya',
    'LNK_NEW_PROSPECT_LIST' => 'Maghimo ug Listahan sa Target',
    'LNK_PROSPECT_LIST_LIST' => 'Mga Listahan sa Target',
    'LNK_NEW_PROSPECT' => 'Maghimo ug Target',
    'LNK_PROSPECT_LIST' => 'Targetanan',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email sa Merkado',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Paghimo',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Usba',
    'LBL_FROM_MAILBOX' => 'Gikan sa mailbox',
    'LBL_FROM_MAILBOX_NAME' => 'Gamit og mailbox:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound nga Email akawnt:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mga Listahan sa Target',
    'LBL_ALL_PROSPECT_LISTS' => 'I-select para pilion ang tanang (mga) listahan sa target sa kampanya.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Tanang (mga) listahan sa target nga naay kalabutan sa kani nga mensahe.',
    'LBL_PROSPECT_LIST_NAME' => 'Pangan sa listahan sa target',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Mga Listahan sa na-Target',
    'LBL_MODULE_SEND_TEST' => 'Kampanya: pagpadala ug test',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanya: pagpadala ug mga email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Palihug pilia ang mga mensahe sa kampanya nga gusto nimong i-test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Palihug pili ug mga mensahe sa kampanya nga gusto nimo i-eskedyul para sa pag apod-apod sa gihinganlang petsa sa pagsugod ug oras:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Ipadala',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Ipadala',
    'LBL_ERROR_ON_MARKETING' => 'Kuwang ang gikinahanglan nga mga field',

    'LBL_CAMPAIGN_ID' => 'ID sa Kampanya',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID sa email akawnt nga Pagawas',
    'LBL_EMAIL_TEMPLATE' => 'Email plaka',
    'LBL_PROSPECT_LISTS' => 'Gilauman nga mga Listahan',

);
