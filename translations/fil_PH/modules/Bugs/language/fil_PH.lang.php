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
    'LBL_MODULE_NAME' => 'Ang mga bug',
    'LBL_MODULE_TITLE' => 'Taga-track ng bug: Home',
    'LBL_MODULE_ID' => 'Ang mga bug',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng bug',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng bug',
    'LBL_NEW_FORM_TITLE' => 'Bagong bug',
    'LBL_SUBJECT' => 'Paksa:',
    'LBL_NUMBER' => 'Numero:',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_CONTACT_NAME' => 'Pangalan ng contact:',
    'LBL_CONTACT_ROLE' => 'Tungkulin:',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Ang paksa',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_RESOLUTION' => 'Resolusyon',
    'LBL_LIST_LAST_MODIFIED' => 'Huling Binago',
    'LBL_INVITEE' => 'Mga kontak',
    'LBL_TYPE' => 'Uri:',
    'LBL_LIST_TYPE' => 'Uri',
    'LBL_RESOLUTION' => 'Resolusyon:',
    'LBL_RELEASE' => 'Ang release:',
    'LNK_NEW_BUG' => 'Ulatbng bug',
    'LNK_BUG_LIST' => 'I-view ang mga bug',
    'ERR_DELETE_RECORD' => 'Kailangan mong tukuyin ang isang numero ng rekord upang mabura ang bug.',
    'LBL_LIST_MY_BUGS' => 'Aking naka-assign na mga bug',
    'LNK_IMPORT_BUGS' => 'Mag-import ng mga bug',
    'LBL_FOUND_IN_RELEASE' => 'I-release ang found in:',
    'LBL_FIXED_IN_RELEASE' => 'I-release ang fixed in:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'I-release ang fixed in',
    'LBL_WORK_LOG' => 'Gawaing Log:',
    'LBL_SOURCE' => 'Pinagkunan:',
    'LBL_PRODUCT_CATEGORY' => 'Kategorya:',

    'LBL_CREATED_BY' => 'Nilikha Ng:',
    'LBL_MODIFIED_BY' => 'Huling pagbabago: pamamagitan ng:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail address',
    'LBL_LIST_CONTACT_NAME' => 'Ang kontak na pangalan',
    'LBL_LIST_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_LIST_PHONE' => 'Telepono',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba na gusto mong tanggalin ang kontak na ito mula sa bug na ito?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Taga-track ng bug',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga account',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinalaga sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',

    'LBL_BUG_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
