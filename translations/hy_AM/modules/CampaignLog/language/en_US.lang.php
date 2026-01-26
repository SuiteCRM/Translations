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
    'LBL_LIST_ID' => 'Փոստերի ցուցակի ID',
    'LBL_ID' => 'ID',
    'LBL_TARGET_TRACKER_KEY' => 'Ամրացված Tracker-ի բանալի',
    'LBL_TARGET_ID' => 'Հասցեատերի ID',
    'LBL_TARGET_TYPE' => 'Թիրախի տեսակը',
    'LBL_ACTIVITY_TYPE' => 'Գործունեության տեսակը',
    'LBL_ACTIVITY_DATE' => 'Գործունեության ամսաթիվը',
    'LBL_RELATED_ID' => 'Առնչվող ID',
    'LBL_RELATED_TYPE' => 'Նմանատիպ տեսակ',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_MODULE_NAME' => 'Մարքեթ․ արշավի գրանցամատյան',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Ստացողի էլ-փոստ',
    'LBL_LIST_RECIPIENT_NAME' => 'Ստացողի անունը',
    'LBL_ARCHIVED' => 'Արխիվ',
    'LBL_HITS' => 'Այցեր',

    'LBL_CAMPAIGN_NAME' => 'Անվանում․',
    'LBL_CAMPAIGN' => 'Մարքեթինգային արշավ․',
    'LBL_NAME' => 'Անվանում․',
    'LBL_INVITEE' => 'Կոնտակտներ',
    'LBL_LIST_CAMPAIGN_NAME' => 'Մարքեթինգային արշավ',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LIST_TYPE' => 'Տեսակ',
    'LBL_LIST_END_DATE' => 'Ավարտման ամսաթիվը',
    'LBL_DATE_ENTERED' => 'Մուտքի ամսաթիվը',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է․',
    'LBL_CREATED' => 'Ստեղծված է․ ',
    'LBL_TEAM' => 'Թիմ․',
    'LBL_ASSIGNED_TO' => 'Կատարող ',
    'LBL_CAMPAIGN_START_DATE' => 'Մեկնարկի ամսաթիվը ',
    'LBL_CAMPAIGN_END_DATE' => 'Ավարտի ամսաթիվը․ ',
    'LBL_CAMPAIGN_STATUS' => 'Կարգավիճակ ',
    'LBL_CAMPAIGN_BUDGET' => 'Բյուջե․ ',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Ակնկալվող արժեքը․ ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Փաստացի արժեքը․ ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Սպասվող եկամուտ․ ',
    'LBL_CAMPAIGN_TYPE' => 'Տեսակ: ',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Նպատակ․ ',
    'LBL_CAMPAIGN_CONTENT' => 'Նկարագրություն.',
    'LBL_CREATED_LEAD' => 'Ստեղծված պոտենցիալ կլիենտեր',
    'LBL_CREATED_CONTACT' => 'Ստեղծել կոնտակտ',
    'LBL_CREATED_OPPORTUNITY' => 'Ստեղծված գործարք',
    'LBL_TARGETED_USER' => 'Թիրախային օգտվողները',
    'LBL_SENT_EMAIL' => 'Ուղարկած էլ-նամակ',
    'LBL_LIST_FORM_TITLE' => 'Թիրախային մարքեթ․ արշավներ',
    'LBL_LIST_ACTIVITY_DATE' => 'Գործունեության ամսաթիվը',
    'LBL_RELATED' => 'Առնչվում է',
    'LBL_MORE_INFO' => 'Ավել տեղեկատվություն',

    'LBL_CAMPAIGNS' => 'Կամպանիաներ',
    'LBL_LIST_MARKETING_NAME' => 'Մարքեթինգային արշավի ID',

    'LBL_MARKETING_ID' => 'Մարքեթինգային արշավի ID',
    'LBL_RELATED_NAME' => 'Related Name',
);
