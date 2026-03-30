<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM User',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'App brugernavn',
    'LBL_CREATED_USER' => 'Oprettet af bruger',
    'LBL_MODIFIED_USER' => 'Ændret af bruger',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FORM_TITLE' => 'Ekstern kontoliste',
    'LBL_MODULE_NAME' => 'Ekstern konto',
    'LBL_MODULE_TITLE' => 'Eksterne konti',
    'LBL_HOMEPAGE_TITLE' => 'Mine eksterne konti',
    'LNK_NEW_RECORD' => 'Opret ekstern konto',
    'LNK_LIST' => 'Vis eksterne konti',
    'LBL_SEARCH_FORM_TITLE' => 'Søg i eksterne kilder',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Nye eksterne konto',
    'LBL_PASSWORD' => 'App adgangskode',
    'LBL_USER_NAME' => 'App User Name',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Applikation',
    'LBL_API_DATA' => 'API data',
    'LBL_API_CONSKEY' => 'Consumer Key',
    'LBL_API_CONSSECRET' => 'Consumer Secret',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Denne godkendelsesmetode er ikke understøttet af applikationen",
    'LBL_AUTH_ERROR' => 'Forsøg på at godkende den eksterne konto mislykkedes.',
    'LBL_VALIDATED' => 'Connected',
    'LBL_ACTIVE' => 'Active',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Connect',
    'LBL_NOTE' => 'Please Note',
    'LBL_CONNECTED' => 'Connected',

    'LBL_ERR_NO_AUTHINFO' => 'Der er ingen godkendelsesinformation for denne konto.',
    'LBL_ERR_NO_TOKEN' => 'Der er ingen gyldig login token for denne konto.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Du er ikke logget ind på din {0} konto. Klik på OK for igen at logge på din konto og aktivere den eksterne kontopost.',

    'LBL_CLICK_TO_EDIT' => 'Click to Edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Gen-godkendelse',
    'LBL_APPLICATION_FOUND_NOTICE' => 'En konto til denne applikation eksisterer allerede. Vi har genindført den eksisterende konto.',
    'LBL_OMIT_URL' => '(Udelad http:// or https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Click <b>Connect</b> to be directed to a page to provide your account information and to authorize access to the account by SuiteCRM. After connecting, you will be directed back to SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Click <b>Connect</b> to connect this account to SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
