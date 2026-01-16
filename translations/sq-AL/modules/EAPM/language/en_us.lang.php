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
    'LBL_ASSIGNED_TO_ID' => 'Id e përdoruesit të caktuar',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM Përdorues',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_MODIFIED' => 'Modifikuar nga',
    'LBL_MODIFIED_NAME' => 'Modifikuar nga emri',
    'LBL_CREATED' => 'Krijuar nga',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DELETED' => 'E fshirë',
    'LBL_NAME' => 'Emri i përdoruesit të aplikacionit',
    'LBL_CREATED_USER' => 'Krijuar nga përdoruesi',
    'LBL_MODIFIED_USER' => 'Modifikuar nga përdoruesi',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_FORM_TITLE' => 'Lista e llogarive të jashtme',
    'LBL_MODULE_NAME' => 'Llogaria e jashtme',
    'LBL_MODULE_TITLE' => 'Llogaritë e jashme',
    'LBL_HOMEPAGE_TITLE' => 'Llogaritë e mia të jashtme',
    'LNK_NEW_RECORD' => 'Krijo llogari të jashtme',
    'LNK_LIST' => 'Shih llogaritë e jashtme',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkim i burimeve të jashtme',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_NEW_FORM_TITLE' => 'LLogari e re e jashtme',
    'LBL_PASSWORD' => 'Fjalëkalimi i aplikacionit',
    'LBL_USER_NAME' => 'Emri i përdoruesit të aplikacionit',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Aplikimi',
    'LBL_API_DATA' => 'API Dtë dhëna',
    'LBL_API_CONSKEY' => 'Consumer Key',
    'LBL_API_CONSSECRET' => 'Consumer Secret',
    'LBL_API_OAUTHTOKEN' => 'OAuth shenja',
    'LBL_AUTH_UNSUPPORTED' => "Kjo metodë e autorizimit nuk është e mbështetur nga ky aplikim",
    'LBL_AUTH_ERROR' => 'Përpjekja për tu lidhur me këtë llogari ka dështuar.',
    'LBL_VALIDATED' => 'E konektuar',
    'LBL_ACTIVE' => 'aktive',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Konekto',
    'LBL_NOTE' => 'Ju lutemi vëreni',
    'LBL_CONNECTED' => 'E konektuar',

    'LBL_ERR_NO_AUTHINFO' => 'Nuk ka informacion autentikimi për këtë llogari.',
    'LBL_ERR_NO_TOKEN' => 'Nuk ekzistojnë shenja valide të hyrjes për këtë llogari.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Nuk jeni të lidhur me llogarinë tuaj {0}. Shtyp OK për të hyrë në llogarinë tuaj dhe riaktivizo lidhjen.',

    'LBL_CLICK_TO_EDIT' => 'Click to Edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'reautentiko',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Llogari për këtë aplikim tashmë ekziston. Kemi rivendosur llogarinë ekzistuese.',
    'LBL_OMIT_URL' => '(Omit http:// or https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Shtyp Lidhu për tu çuar në faqen që mundëson informacionin e llogarisë tënde dhe autorizon qasjen në llogarinë nga SuiteCRM. Pas lidhjes, do të dërgoheni përsëri në SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Shtyp Lidhu për të lidhur këtë llogari në SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
