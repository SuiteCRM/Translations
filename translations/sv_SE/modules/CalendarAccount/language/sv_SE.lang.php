<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = [
    // System fields
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_DATE_ENTERED' => 'Skapat datum',
    'LBL_DATE_MODIFIED' => 'Ändrat datum',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Ändrad av namn',
    'LBL_CREATED' => 'Skapad av',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',

    // Security groups
    'LBL_SECURITYGROUPS' => 'Säkerhetsgrupper',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Säkerhetsgrupper',

    // List view labels
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_DELETE' => 'Ta bort',
    'LBL_EDIT_BUTTON' => 'Redigera',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_ASCENDING' => 'Stigande',
    'LBL_DESCENDING' => 'Fallande',

    // Email opt-in labels
    'LBL_OPT_IN' => 'Samtyck',
    'LBL_OPT_IN_PENDING_EMAIL_NOT_SENT' => 'Väntar på bekräftelse av samtycke, bekräftelse har inte skickats',
    'LBL_OPT_IN_PENDING_EMAIL_SENT' => 'Väntar på bekräftelse av samtycke, bekräftelse har skickats',
    'LBL_OPT_IN_CONFIRMED' => 'Har samtyckt',

    // Subpanel titles
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_CALENDARACCOUNT_SUBPANEL_TITLE' => 'Kalenderkonton',
    'LBL_MEETINGS_SUBPANEL_TITLE' => 'Synkroniserade möten',

    // Import links
    'LNK_IMPORT_CALENDARACCOUNT' => 'Importera kalenderkonton',

    // Additional menu links
    'LNK_LIST_CREATE_NEW_GROUP' => 'Skapa ny grupp',
    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Skapa personligt kalenderkonto',
    'LNK_LIST_INBOUND_EMAILS' => 'Inkommande e-post',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Utgående e-post',
    'LNK_LIST_EXTERNAL_OAUTH_PROVIDERS' => 'Externa OAuth-leverantörer',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTIONS' => 'Externa OAuth-anslutningar',

    // Basic module labels
    'LBL_MODULE_NAME' => 'Kalenderkonton',
    'LBL_MODULE_TITLE' => 'Kalenderkonton',
    'LBL_LIST_FORM_TITLE' => 'Lista över kalenderkonton',
    'LBL_SEARCH_FORM_TITLE' => 'Sök kalenderkonton',
    'LBL_NEW_FORM_TITLE' => 'Nytt kalenderkonto',
    'LBL_HOMEPAGE_TITLE' => 'Mina kalenderkonton',

    // Navigation links
    'LNK_NEW_RECORD' => 'Skapa kalenderkonto',
    'LNK_LIST' => 'Visa kalenderkonton',

    // Standard fields
    'LBL_NAME' => 'Namn',
    'LBL_ID' => 'Id',
    'LBL_TYPE' => 'Typ',
    'LBL_SOURCE' => 'Kalenderkälla',

    // OAuth2 Fields
    'LBL_OAUTH_CONNECTION' => 'OAuth-anslutning',
    'LBL_CONNECT_OAUTH' => 'Anslut OAuth',

    // Basic Auth Fields
    'LBL_USERNAME' => 'Användarnamn',
    'LBL_PASSWORD' => 'Lösenord',
    'LBL_SERVER_URL' => 'Serveradress',
    'LBL_TEST_CONNECTION' => 'Testa anslutning',

    // API Key Fields
    'LBL_API_KEY' => 'API nyckel',
    'LBL_API_ENDPOINT' => 'API slutpunkt',
    'LBL_VALIDATE_API' => 'Verifiera API',

    // Calendar User Fields
    'LBL_CALENDAR_USER_ID' => 'Kalenderanvändaridentitet',
    'LBL_CALENDAR_USER_NAME' => 'Kalenderanvändare',
    'LBL_CALENDAR_USER' => 'Kalenderanvändare',

    // Auth Actions
    'LBL_AUTH_ACTIONS' => 'Autentiseringsåtgärder',

    // Panel Labels
    'LBL_SYNC_STATUS' => 'Synkroniseringsstatus',

    // Connection Status Fields
    'LBL_LAST_CONNECTION_STATUS' => 'Testet lyckades',
    'LBL_LAST_CONNECTION_TEST' => 'Senaste anslutningstest',
    'LBL_LAST_SYNC_ATTEMPT_DATE' => 'Senaste synkroniseringsförsök',
    'LBL_LAST_SYNC_ATTEMPT_STATUS' => 'Synkroniseringsstatus',
    'LBL_LAST_SYNC_ATTEMPT_MESSAGE' => 'Synkroniseringsmeddelande',
    'LBL_LAST_SYNC_DATE' => 'Senaste synkroniseringsdatum',
    'LBL_EXTERNAL_CALENDAR_ID' => 'Externt kalenderidentitet',
    'LBL_DUPLICATE_EXTERNAL_CALENDAR' => 'Den externa kalendern är redan ansluten till ett konto',

    // Sync Actions
    'LBL_SYNC_NOW' => 'Synkronisera nu',
    'LBL_SYNC_NOW_TITLE' => 'Synkronisera detta kalenderkonto nu',
    'LBL_SYNC_NOW_CONFIRM' => 'Vill du verkligen synkronisera detta kalenderkonto nu?',
    'LBL_NO_ACCOUNT_ID' => 'Inget kalenderkontoidentitet angavs',
    'LBL_SYNCING' => 'Synkroniserar...',
    'LBL_NETWORK_ERROR' => 'Ett nätverksfel uppstod när kalenderkontot synkroniserades. Försök igen.',
    'LBL_UNKNOWN' => 'Okänd',
    'LBL_NOW' => 'nu',
    'LBL_SYNC_SUCCESS' => 'Kalendersynkroniseringen slutfördes',
    'LBL_SYNC_FAILED' => 'Synkroniseringen misslyckades',
    'LBL_SYNC_FAILED_DEFAULT' => 'Kalendersynkroniseringen misslyckades. Kontrollera loggarna för mer information.',
    'LBL_SYNC_RESPONSE_ERROR' => 'Ett fel uppstod när synkroniseringssvaret bearbetades. Kontrollera loggarna för mer information.',
    'LBL_SYNC_IN_PROGRESS' => 'Synkronisering pågår redan. Vänta...',
    'LBL_SYNC_IN_PROGRESS_MESSAGE' => 'Kalenderhändelser synkroniseras. Det kan ta en stund...',
    'LBL_PLEASE_WAIT' => 'Vänta',
    // Permission and validation messages
    'LBL_NO_ACCESS' => 'Du har inte behörighet att utföra den här åtgärden.',
    'LBL_ALREADY_HAS_PERSONAL_ACCOUNT' => 'Den här användaren har redan ett personligt kalenderkonto.',
    'LBL_ADMIN_ONLY_GROUP_ACCOUNT' => 'Endast administratörer kan skapa kalenderkonton för grupper.',

    // Authentication validation messages
    'LBL_OAUTH_CONNECTION_REQUIRED' => 'Välj först en OAuth anslutning.',
    'LBL_BASIC_AUTH_FIELDS_REQUIRED' => 'Fyll i alla fält för grundläggande autentisering (användarnamn, lösenord, serveradress).',
    'LBL_API_KEY_REQUIRED' => 'Ange en API nyckel.',
    'LBL_USING_SAVED_API_KEY' => 'Tidigare sparad API nyckel används.',
    'LBL_UNKNOWN_AUTH_METHOD' => 'Okänd autentiseringsmetod',
    'LBL_SELECT_CALENDAR_SOURCE_FIRST' => 'Välj först en kalenderkälla.',

    // Connection test messages
    'LBL_CALENDAR' => 'Kalender',
    'LBL_SUCCESSFUL' => 'Lyckades',
    'LBL_FAILED' => 'Misslyckades',
    'LBL_CONNECTION_TEST' => 'Anslutningstest',
    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nej',
    'LBL_FOUND_CALENDARS' => 'Hittade {count} kalendrar.',
    'LBL_CONNECTION_TEST_RESPONSE_ERROR' => 'Ett fel uppstod när svaret från anslutningstestet bearbetades. Kontrollera loggarna för mer information.',
    'LBL_CONNECTION_TEST_HTTP_ERROR' => 'Anslutningstestet misslyckades med HTTP-status',
    'LBL_CONNECTION_NETWORK_ERROR' => 'Ett nätverksfel uppstod när kalenderanslutningen testades. Försök igen.',
    'LBL_CONNECTION_TEST_SUCCESS_MESSAGE' => 'Anslutningstestet slutfördes.<br>Dina inloggningsuppgifter är giltiga och kalendern är tillgänglig.',
    'LBL_DUPLICATE_CALENDAR_ERROR' => 'Kalendern är redan ansluten till ett konto',

    // Authentication method error messages
    'LBL_AUTH_METHOD_ERROR' => 'Fel när autentiseringsmetoden fastställdes',
    'LBL_AUTH_METHOD_PARSE_ERROR' => 'Fel när svaret om autentiseringsmetoden tolkades',
    'LBL_AUTH_METHOD_GET_ERROR' => 'Fel när autentiseringsmetoden hämtades för källan',

    // Dialog labels
    'LBL_NOTIFICATION' => 'Avisering',
    'LBL_CONFIRM' => 'Bekräfta',
    'LBL_ARE_YOU_SURE' => 'Är du säker?',

    // Sync status enum translations
    'LBL_SYNC_STATUS_IN_PROGRESS' => 'Pågår',
    'LBL_SYNC_STATUS_SUCCESS' => 'Lyckades',
    'LBL_SYNC_STATUS_WARNING' => 'Varning',
    'LBL_SYNC_STATUS_ERROR' => 'Fel',

    // Sync message enum translations
    'LBL_SYNC_MSG_SYNC_COMPLETE' => 'Alla möten har synkroniserats.',
    'LBL_SYNC_MSG_UP_TO_DATE' => 'Inga nya möten att synkronisera.',
    'LBL_SYNC_MSG_MEETINGS_FAILED' => 'Vissa möten kunde inte synkroniseras. Kontrollera loggarna.',
    'LBL_SYNC_MSG_SYNC_PARTIAL' => 'Vissa möten har synkroniserats. Fler väntar på grund av begränsningar.',
    'LBL_SYNC_MSG_SYNC_ERROR' => 'Synkroniseringsfel. Kontrollera loggarna.',
    'LBL_SYNC_MSG_TOKEN_EXPIRED' => 'Autentiseringstoken har gått ut.',
    'LBL_SYNC_MSG_CONNECTION_ERROR' => 'Anslutningsfel.',
    'LBL_SYNC_MSG_CALENDAR_NOT_FOUND' => 'Kalendern hittades inte.',

    // Relationship labels
    'LBL_MEETINGS' => 'Möten',
];