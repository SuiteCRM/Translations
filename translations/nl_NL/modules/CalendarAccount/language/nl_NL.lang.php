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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',

    // Security groups
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',

    // List view labels
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_DELETE' => 'Delete',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',

    // Email opt-in labels
    'LBL_OPT_IN' => 'Opt In',
    'LBL_OPT_IN_PENDING_EMAIL_NOT_SENT' => 'Pending Confirm opt in, Confirm opt in not sent',
    'LBL_OPT_IN_PENDING_EMAIL_SENT' => 'Pending Confirm opt in, Confirm opt in sent',
    'LBL_OPT_IN_CONFIRMED' => 'Opted in',

    // Subpanel titles
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_CALENDARACCOUNT_SUBPANEL_TITLE' => 'Calendar Accounts',
    'LBL_MEETINGS_SUBPANEL_TITLE' => 'Gesynchroniseerde vergaderingen',

    // Import links
    'LNK_IMPORT_CALENDARACCOUNT' => 'Importeer Kalender Accounts',

    // Additional menu links
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nieuwe groep aanmaken',
    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Persoonlijke kalender account aanmaken',
    'LNK_LIST_INBOUND_EMAILS' => 'Inkomende e-mails',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Uitgaande e-mails',
    'LNK_LIST_EXTERNAL_OAUTH_PROVIDERS' => 'External OAuth Providers',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    // Basic module labels
    'LBL_MODULE_NAME' => 'Calendar Accounts',
    'LBL_MODULE_TITLE' => 'Calendar Accounts',
    'LBL_LIST_FORM_TITLE' => 'Kalender Accounts Lijst',
    'LBL_SEARCH_FORM_TITLE' => 'Kalender accounts zoeken',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe Kalender Account',
    'LBL_HOMEPAGE_TITLE' => 'Mijn Kalender Accounts',

    // Navigation links
    'LNK_NEW_RECORD' => 'Nieuwe Kalender Account',
    'LNK_LIST' => 'Bekijk Kalender Accounts',

    // Standard fields
    'LBL_NAME' => 'Name',
    'LBL_ID' => 'ID',
    'LBL_TYPE' => 'Type',
    'LBL_SOURCE' => 'Kalender bron',

    // OAuth2 Fields
    'LBL_OAUTH_CONNECTION' => 'OAuth verbinding',
    'LBL_CONNECT_OAUTH' => 'Verbind OAuth',

    // Basic Auth Fields
    'LBL_USERNAME' => 'Username',
    'LBL_PASSWORD' => 'Password',
    'LBL_SERVER_URL' => 'Server URL',
    'LBL_TEST_CONNECTION' => 'Test verbinding',

    // API Key Fields
    'LBL_API_KEY' => 'API Key',
    'LBL_API_ENDPOINT' => 'API Endpoint',
    'LBL_VALIDATE_API' => 'Validate API',

    // Calendar User Fields
    'LBL_CALENDAR_USER_ID' => 'Kalender Gebruikers ID',
    'LBL_CALENDAR_USER_NAME' => 'Kalender gebruiker',
    'LBL_CALENDAR_USER' => 'Calendar User',

    // Auth Actions
    'LBL_AUTH_ACTIONS' => 'Authenticatie acties',

    // Panel Labels
    'LBL_SYNC_STATUS' => 'Synchronisatie status',

    // Connection Status Fields
    'LBL_LAST_CONNECTION_STATUS' => 'Test succesvol',
    'LBL_LAST_CONNECTION_TEST' => 'Laatste Connectie Test',
    'LBL_LAST_SYNC_ATTEMPT_DATE' => 'Laatste synchronisatie poging',
    'LBL_LAST_SYNC_ATTEMPT_STATUS' => 'Sync Status',
    'LBL_LAST_SYNC_ATTEMPT_MESSAGE' => 'Synchroniseer bericht',
    'LBL_LAST_SYNC_DATE' => 'Laatste synchronisatiedatum',
    'LBL_EXTERNAL_CALENDAR_ID' => 'Externe kalender ID',
    'LBL_DUPLICATE_EXTERNAL_CALENDAR' => 'Deze externe kalender is al gekoppeld aan het account',

    // Sync Actions
    'LBL_SYNC_NOW' => 'Nu synchroniseren',
    'LBL_SYNC_NOW_TITLE' => 'Synchroniseer deze kalenderaccount nu',
    'LBL_SYNC_NOW_CONFIRM' => 'Weet je zeker dat je dit kalenderaccount nu wilt synchroniseren?',
    'LBL_NO_ACCOUNT_ID' => 'Geen kalenderaccount ID opgegeven',
    'LBL_SYNCING' => 'Synchroniseren...',
    'LBL_NETWORK_ERROR' => 'Netwerkfout opgetreden tijdens het synchroniseren van het kalenderaccount. Probeer het opnieuw.',
    'LBL_UNKNOWN' => 'Onbekend',
    'LBL_NOW' => 'nu',
    'LBL_SYNC_SUCCESS' => 'Agendasynchronisatie met succes voltooid',
    'LBL_SYNC_FAILED' => 'Synchroniseren mislukt',
    'LBL_SYNC_FAILED_DEFAULT' => 'Agendasynchronisatie mislukt. Controleer de logs voor meer informatie.',
    'LBL_SYNC_RESPONSE_ERROR' => 'Er is een fout opgetreden tijdens het verwerken van de synchronisatie. Controleer de logboeken voor details.',
    'LBL_SYNC_IN_PROGRESS' => 'Synchronisatie is al bezig. Een ogenblik geduld...',
    'LBL_SYNC_IN_PROGRESS_MESSAGE' => 'Synchroniseren van agenda-afspraken. Dit kan even duren...',
    'LBL_PLEASE_WAIT' => 'Een ogenblik geduld',
    // Permission and validation messages
    'LBL_NO_ACCESS' => 'U bent niet gemachtigd om deze actie uit te voeren.',
    'LBL_ALREADY_HAS_PERSONAL_ACCOUNT' => 'Deze gebruiker heeft al een persoonlijk kalenderaccount.',
    'LBL_ADMIN_ONLY_GROUP_ACCOUNT' => 'Alleen beheerders kunnen accounts voor groepskalenderaccounts aanmaken.',

    // Authentication validation messages
    'LBL_OAUTH_CONNECTION_REQUIRED' => 'Selecteer eerst een OAuth verbinding.',
    'LBL_BASIC_AUTH_FIELDS_REQUIRED' => 'Vul alle basis authenticatie velden in (gebruikersnaam, wachtwoord, server URL).',
    'LBL_API_KEY_REQUIRED' => 'Voer een API-key in.',
    'LBL_USING_SAVED_API_KEY' => 'Gebruik eerder opgeslagen API-key.',
    'LBL_UNKNOWN_AUTH_METHOD' => 'Onbekende verificatiemethode',
    'LBL_SELECT_CALENDAR_SOURCE_FIRST' => 'Selecteer eerst de bron van de kalender.',

    // Connection test messages
    'LBL_CALENDAR' => 'Calendar',
    'LBL_SUCCESSFUL' => 'Successful',
    'LBL_FAILED' => 'Failed',
    'LBL_CONNECTION_TEST' => 'Verbinding Test',
    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_FOUND_CALENDARS' => 'Gevonden {count} kalenders.',
    'LBL_CONNECTION_TEST_RESPONSE_ERROR' => 'Er is een fout opgetreden tijdens het verwerken van de verbinding test reactie. Controleer de logs voor meer informatie.',
    'LBL_CONNECTION_TEST_HTTP_ERROR' => 'Verbindingstest mislukt met HTTP-status',
    'LBL_CONNECTION_NETWORK_ERROR' => 'Netwerkfout opgetreden tijdens het testen van de kalender verbinding. Probeer het opnieuw.',
    'LBL_CONNECTION_TEST_SUCCESS_MESSAGE' => 'Verbindingstest met succes voltooid.<br>Uw gegevens zijn geldig en de kalender is toegankelijk.',
    'LBL_DUPLICATE_CALENDAR_ERROR' => 'Deze kalender is al gekoppeld aan het account',

    // Authentication method error messages
    'LBL_AUTH_METHOD_ERROR' => 'Fout bij bepalen verificatiemethode',
    'LBL_AUTH_METHOD_PARSE_ERROR' => 'Fout bij parsen van verificatiemethode antwoord',
    'LBL_AUTH_METHOD_GET_ERROR' => 'Fout bij verkrijgen verificatiemethode voor bron',

    // Dialog labels
    'LBL_NOTIFICATION' => 'Notificatie',
    'LBL_CONFIRM' => 'Confirm',
    'LBL_ARE_YOU_SURE' => 'Weet u het zeker?',

    // Sync status enum translations
    'LBL_SYNC_STATUS_IN_PROGRESS' => 'In Progress',
    'LBL_SYNC_STATUS_SUCCESS' => 'Success',
    'LBL_SYNC_STATUS_WARNING' => 'Warning',
    'LBL_SYNC_STATUS_ERROR' => 'Error',

    // Sync message enum translations
    'LBL_SYNC_MSG_SYNC_COMPLETE' => 'All meetings synced.',
    'LBL_SYNC_MSG_UP_TO_DATE' => 'No new meetings to sync.',
    'LBL_SYNC_MSG_MEETINGS_FAILED' => 'Some meetings failed to sync. Check logs.',
    'LBL_SYNC_MSG_SYNC_PARTIAL' => 'Some meetings synced. More pending due to limits.',
    'LBL_SYNC_MSG_SYNC_ERROR' => 'Synchronisatiefout. Controleer logs.',
    'LBL_SYNC_MSG_TOKEN_EXPIRED' => 'Authenticatietoken is verlopen.',
    'LBL_SYNC_MSG_CONNECTION_ERROR' => 'Verbindingsfout.',
    'LBL_SYNC_MSG_CALENDAR_NOT_FOUND' => 'Kalender niet gevonden.',

    // Relationship labels
    'LBL_MEETINGS' => 'Meetings',
];