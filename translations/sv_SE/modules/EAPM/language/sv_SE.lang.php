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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM användare',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Ändringsdatum',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Ändrad av namn',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NAME' => 'App-användarnamn',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_FORM_TITLE' => 'Extern kontolista',
    'LBL_MODULE_NAME' => 'Externt konto',
    'LBL_MODULE_TITLE' => 'Externa konton',
    'LBL_HOMEPAGE_TITLE' => 'Mina externa konton',
    'LNK_NEW_RECORD' => 'Skapa externt konto',
    'LNK_LIST' => 'Visa externa konton',
    'LBL_SEARCH_FORM_TITLE' => 'Sök extern källa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Nytt externt konto',
    'LBL_PASSWORD' => 'App-lösenord',
    'LBL_USER_NAME' => 'App-användarnamn',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Applikation',
    'LBL_API_DATA' => 'API-data',
    'LBL_API_CONSKEY' => 'Konsumentnyckel',
    'LBL_API_CONSSECRET' => 'Konsumenthemlighet',
    'LBL_API_OAUTHTOKEN' => 'OAuth-token',
    'LBL_AUTH_UNSUPPORTED' => "Denna auktoriseringsmetod stöds inte av applikationen",
    'LBL_AUTH_ERROR' => 'Försöket att ansluta till det här kontot misslyckades.',
    'LBL_VALIDATED' => 'Ansluten',
    'LBL_ACTIVE' => 'Aktiv',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Anslut',
    'LBL_NOTE' => 'Observera',
    'LBL_CONNECTED' => 'Ansluten',

    'LBL_ERR_NO_AUTHINFO' => 'Det finns ingen autentiseringsinformation för det här kontot.',
    'LBL_ERR_NO_TOKEN' => 'Det finns inga giltiga inloggningstoken för det här kontot.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Du är för närvarande inte ansluten till ditt {0}-konto. Klicka på OK för att logga in på ditt konto och återaktivera anslutningen.',

    'LBL_CLICK_TO_EDIT' => 'Klicka för att redigera',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Autentisera igen',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Det finns redan ett konto för den här applikationen. Vi har återaktiverat det befintliga kontot.',
    'LBL_OMIT_URL' => '(Uteslut http:// eller https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Klicka på <b>Anslut</b> för att komma till en sida där du kan ange dina kontouppgifter och godkänna att SuiteCRM får åtkomst till kontot. När anslutningen är klar skickas du tillbaka till SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Klicka på <b>Anslut</b> för att ansluta detta konto till SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Aktivera popup-fönster i webbläsaren eller lägg till ett undantag för webbplatsen "{0}" i undantagslistan för att kunna ansluta.',

    'LBL_API_OAUTHSECRET' => 'API OAuth-hemlighet',
);
