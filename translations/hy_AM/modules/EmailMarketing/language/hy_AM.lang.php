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
    'LBL_REPLY_ADDR' => '"Պատասխանել" հասցեին․',
    'LBL_REPLY_NAME' => '"Պատասխանել" անուն․',

    'LBL_MODULE_NAME' => 'Էլ-փոստի մարքեթինգ',
    'LBL_MODULE_TITLE' => 'Էլ․փոստի մարքեթինգ. Գլխավոր',
    'LBL_LIST_FORM_TITLE' => 'Մարքեթինգային արշավների էլ․փոստ',
    'LBL_NAME' => 'Անվանում․',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_LIST_FROM_ADDR' => 'Էլ․փոստից',
    'LBL_LIST_DATE_START' => 'Մեկնարկի ամսաթիվը',
    'LBL_LIST_TEMPLATE_NAME' => 'Էլ-փոստի ձևանմուշ',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_STATUS_TEXT' => 'Կարգավիճակ',
    'LBL_TEMPLATE_NAME' => 'Ձևանմուշի անվանումը',
    'LBL_DATE_ENTERED' => 'Մուտքի ամսաթիվը',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է․',
    'LBL_CREATED' => 'Ստեղծված է․',
    'LBL_MESSAGE_FOR' => 'Ուղարկել այս հաղորդագրությունը (ում)․',

    'LBL_FROM_NAME' => 'Ուղարկողի անունը․ ',
    'LBL_FROM_ADDR' => 'Էլ-փոստի հասցե․ ',
    'LBL_DATE_START' => 'Մեկնարկի ամսաթիվը',
    'LBL_TIME_START' => 'Մեկնարկի ժամանակը ',
    'LBL_START_DATE_TIME' => 'Մեկնարկի ամսաթիվը և ժամանակը. ',
    'LBL_TEMPLATE' => 'Էլ-փոստի ձևանմուշներ․ ',

    'LBL_MODIFIED_BY' => 'Փոփոխված է․',
    'LBL_CREATED_BY' => 'Ստեղծված է․',

    'LNK_NEW_CAMPAIGN' => 'Ստեղծել մարքեթինգային արշավ',
    'LNK_CAMPAIGN_LIST' => 'Կամպանիաներ',
    'LNK_NEW_PROSPECT_LIST' => 'Ստեղծել թիրախների ցուցակ',
    'LNK_PROSPECT_LIST_LIST' => 'Նպատակակետերի ցուցակ',
    'LNK_NEW_PROSPECT' => 'Ստեղծել թիրախ',
    'LNK_PROSPECT_LIST' => 'Նպատակակետեր',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Էլ-փոստի մարքեթինգ',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Ստեղծել',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Խմբագրել',
    'LBL_FROM_MAILBOX' => ' Վերադարձած նամակների փոստարկղ',
    'LBL_FROM_MAILBOX_NAME' => 'Օգտագործել փոստարկղը․',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Ելքային փոստի հաշիվ․',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Նպատակակետերի ցուցակ',
    'LBL_ALL_PROSPECT_LISTS' => 'Ընտրել մարքեթինգային արշավի բոլոր թիրախների ցուցակ(ներ)ը',
    'LBL_RELATED_PROSPECT_LISTS' => 'Այս հաղորդագրության հետ առնչվող բոլոր թիրախների ցուցակ(ներ)ը',
    'LBL_PROSPECT_LIST_NAME' => 'Թիրախային ցուցակի անունը',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Ուղարկել',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Ուղարկել',
    'LBL_ERROR_ON_MARKETING' => 'Missing required field(s)',

    'LBL_CAMPAIGN_ID' => 'Մարքեթ․ արշավի ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'Էլ-փոստի ձևանմուշ',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',

);
