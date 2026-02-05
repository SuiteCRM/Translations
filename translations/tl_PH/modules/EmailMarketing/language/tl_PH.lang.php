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
    'LBL_REPLY_ADDR' => '"Sagot sa" Address: ',
    'LBL_REPLY_NAME' => '"Sagot sa" Pangalan: ',

    'LBL_MODULE_NAME' => 'Ang email para sa pamimili',
    'LBL_MODULE_TITLE' => 'Ang email ng kalakal: Tirahan',
    'LBL_LIST_FORM_TITLE' => 'Ang email sa kalakal ng mga kampanya',
    'LBL_NAME' => 'Pangalan: ',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_FROM_ADDR' => 'Mula sa email',
    'LBL_LIST_DATE_START' => 'Magsimula sa petsa',
    'LBL_LIST_TEMPLATE_NAME' => 'Ang Template ng Email',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_STATUS_TEXT' => 'Ang Kalagayan:',
    'LBL_TEMPLATE_NAME' => 'Ang pangalan ng template',
    'LBL_DATE_ENTERED' => 'Petsa ng Pagpasok',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago ni: ',
    'LBL_CREATED' => 'Ginawa ni: ',
    'LBL_MESSAGE_FOR' => 'Ipadala itong mensahe sa:',

    'LBL_FROM_NAME' => 'Ang pangalan n mula sa: ',
    'LBL_FROM_ADDR' => 'Mula sa email address: ',
    'LBL_DATE_START' => 'Magsimula sa petsa',
    'LBL_TIME_START' => 'Magsimula sa Oras ',
    'LBL_START_DATE_TIME' => 'Magsimula sa petsa at oras: ',
    'LBL_TEMPLATE' => 'Ang email ng template: ',

    'LBL_MODIFIED_BY' => 'Binago ni: ',
    'LBL_CREATED_BY' => 'Ginawa ni: ',

    'LNK_NEW_CAMPAIGN' => 'Lumikha ng kampanya',
    'LNK_CAMPAIGN_LIST' => 'Ang mga kampanya',
    'LNK_NEW_PROSPECT_LIST' => 'Lumikha ng listahan ng mga target',
    'LNK_PROSPECT_LIST_LIST' => 'Listahan ng mga Target',
    'LNK_NEW_PROSPECT' => 'Gumawa ng Target',
    'LNK_PROSPECT_LIST' => 'Ang mga pinapatamaan',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang email para sa pamimili',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Nilikha',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'I-edit',
    'LBL_FROM_MAILBOX' => 'Mula sa meylbaks',
    'LBL_FROM_MAILBOX_NAME' => 'Gamitin ang meylbaks:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Ang papalabas na email akawnt:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listahan ng mga Target',
    'LBL_ALL_PROSPECT_LISTS' => 'Ang target ay pumili sa listahan ng lahat na napili ng nasa kumpanya.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Ang lahat ng mga target na may kaugnayan sa mensaheng ito.',
    'LBL_PROSPECT_LIST_NAME' => 'Ang uri ng pangalan na target',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Ang Mga Na-target na Listahan',
    'LBL_MODULE_SEND_TEST' => 'Ang kumpanya: Magpadala ng pagsusuri',
    'LBL_MODULE_SEND_EMAILS' => 'Ang kampanya: Magpadala ng mga email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Pakiusap pumili ang kampanya ng mga mensahe na gusto mong subukan:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Pakiusap pumili ang kampanya ng mga mensahe na nais mong iskedyul para sa pamamahagi sa tinukoy na petsa ng pagsisimula at oras:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Ipadala',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Ipadala',
    'LBL_ERROR_ON_MARKETING' => 'Nawawalang kinakailangan na mga patlang o isang patang',

    'LBL_CAMPAIGN_ID' => 'Kampanya ng ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Ang papalabas ng email akawnt ng ID',
    'LBL_EMAIL_TEMPLATE' => 'Ang Template ng Email',
    'LBL_PROSPECT_LISTS' => 'Ang pagasa ng mga listahan',

);
