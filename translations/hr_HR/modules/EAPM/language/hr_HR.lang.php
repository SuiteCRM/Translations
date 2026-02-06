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
    'LBL_ASSIGNED_TO_ID' => 'Id dodijeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM User',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Kreirano:',
    'LBL_DATE_MODIFIED' => 'Izmijenjeno:',
    'LBL_MODIFIED' => 'Izmijenio:',
    'LBL_MODIFIED_NAME' => 'Izmijenjeno prema Nazivu',
    'LBL_CREATED' => 'Kreirano od',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'App korisničko ime',
    'LBL_CREATED_USER' => 'Kreirano od korisnika',
    'LBL_MODIFIED_USER' => 'Izmijenjeno od korisnika',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'External Account List',
    'LBL_MODULE_NAME' => 'External Account',
    'LBL_MODULE_TITLE' => 'External Accounts',
    'LBL_HOMEPAGE_TITLE' => 'My External Accounts',
    'LNK_NEW_RECORD' => 'Create External Account',
    'LNK_LIST' => 'View External Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraži Vanjski Izvor',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregledaj Povijest',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'New External Account',
    'LBL_PASSWORD' => 'App Lozinka',
    'LBL_USER_NAME' => 'App korisničko ime',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Program',
    'LBL_API_DATA' => 'API Podaci',
    'LBL_API_CONSKEY' => 'Potrošački ključ',
    'LBL_API_CONSSECRET' => 'Potrošačka tajna',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Program ne podržava ovu metodu autorizacije.",
    'LBL_AUTH_ERROR' => 'The attempt to connect to this account failed.',
    'LBL_VALIDATED' => 'Spojeno',
    'LBL_ACTIVE' => 'Aktivan',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Spoji se',
    'LBL_NOTE' => 'Napomena',
    'LBL_CONNECTED' => 'Spojeno',

    'LBL_ERR_NO_AUTHINFO' => 'There is no authentication information for this account.',
    'LBL_ERR_NO_TOKEN' => 'There are no valid login tokens for this account.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'You are not currently connected to your {0} account. Click OK to login to your account and to re-activate the connection.',

    'LBL_CLICK_TO_EDIT' => 'Click to Edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Reautentikacija',
    'LBL_APPLICATION_FOUND_NOTICE' => 'An account for this application already exists. We have reinstated the existing account.',
    'LBL_OMIT_URL' => '(Isključi http:// ili https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Click <b>Connect</b> to be directed to a page to provide your account information and to authorize access to the account by SuiteCRM. After connecting, you will be directed back to SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Click <b>Connect</b> to connect this account to SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
