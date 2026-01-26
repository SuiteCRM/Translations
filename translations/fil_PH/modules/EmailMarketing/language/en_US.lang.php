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
    'LBL_REPLY_ADDR' => '"Tumugon sa" Tirahan: ',
    'LBL_REPLY_NAME' => '"Tumugon sa" Pangalan: ',

    'LBL_MODULE_NAME' => 'Ang Email Maketing',
    'LBL_MODULE_TITLE' => 'Marketing ng email: Home',
    'LBL_LIST_FORM_TITLE' => 'Mga kampanya ng Marketing ng email',
    'LBL_NAME' => 'Pangalan: ',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_FROM_ADDR' => 'Mula sa email',
    'LBL_LIST_DATE_START' => 'Petsa ng pagsimula',
    'LBL_LIST_TEMPLATE_NAME' => 'Ang template ng email',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_STATUS' => 'Katayuan',
    'LBL_STATUS_TEXT' => 'Katayuan:',
    'LBL_TEMPLATE_NAME' => 'Pangalan ng Template',
    'LBL_DATE_ENTERED' => 'Petsa nakapasok',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni: ',
    'LBL_CREATED' => 'Nilikha ni: ',
    'LBL_MESSAGE_FOR' => 'Ipadala Ang Mensahing Ito Kay:',

    'LBL_FROM_NAME' => 'Pangalan Mula sa: ',
    'LBL_FROM_ADDR' => 'Mula sa email address: ',
    'LBL_DATE_START' => 'Petsa ng pagsimula',
    'LBL_TIME_START' => 'Oras ng Pagsisimula ',
    'LBL_START_DATE_TIME' => 'I-start ang petsa at oras: ',
    'LBL_TEMPLATE' => 'Template ng Email: ',

    'LBL_MODIFIED_BY' => 'Binago ni: ',
    'LBL_CREATED_BY' => 'Nilikha ni: ',

    'LNK_NEW_CAMPAIGN' => 'Lumikha ng kampanya',
    'LNK_CAMPAIGN_LIST' => 'Ang mga Kampanya',
    'LNK_NEW_PROSPECT_LIST' => 'Lumikha ng listahan na target',
    'LNK_PROSPECT_LIST_LIST' => 'Mga listahan ng target',
    'LNK_NEW_PROSPECT' => 'Lumikha ng target',
    'LNK_PROSPECT_LIST' => 'Ang Mga target',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang Email Maketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Lumikha',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'I-edit',
    'LBL_FROM_MAILBOX' => 'Mula sa Mailbox',
    'LBL_FROM_MAILBOX_NAME' => 'Gamitin ang mailbox:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Account ng outbound email:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mga listahan ng target',
    'LBL_ALL_PROSPECT_LISTS' => 'I-select upang piliin ang lagat ng (mga) target list sa kampanya.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Lahat ng (mga) Listahan ng Target na may kaugnayan sa mensaheng ito.',
    'LBL_PROSPECT_LIST_NAME' => 'Pangalan ng Listahan ng Target',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Mga listahan ng nai-target',
    'LBL_MODULE_SEND_TEST' => 'Kampanya: magpadala ng pagsusuri',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanya: magpadala ng mga email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Paki-select ang mga mensahe ng kampanya na gusto mong suriin:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Paki-select ang mga mensahe ng kampanya na gusto mong i-iskedyul para sa distribusyon sa tinukoy na simulang petsa at oras:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Ang ipinadala',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Ang ipinadala',
    'LBL_ERROR_ON_MARKETING' => 'Nawawalang (mga) kailangan na field',

    'LBL_CAMPAIGN_ID' => 'ID ng kampanya',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Account ID ng outbound email',
    'LBL_EMAIL_TEMPLATE' => 'Ang template ng email',
    'LBL_PROSPECT_LISTS' => 'Mga listahan ng prospect',

);
