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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Username of wachtwoord incorrect.',
    'ERR_INI_ZLIB' => 'Kon Zlib niet tijdelijk uitschakelen. "Test instellingen" zal wellicht niet werken.',
    'ERR_NO_IMAP' => 'Geen IMAP libraries gevonde. Los dit probleem op voordat u doorgaat met ingaande e-mail.',
    'ERR_NO_OPTS_SAVED' => 'Er zijn geen optimale instellingen gevonden voor uw inkomende e-mail. Controleer aub uw instellingen.',
    'ERR_TEST_MAILBOX' => 'Controleer je instellingen en probeer het nog eens.',
    'ERR_INVALID_PORT' => 'Ongeldige poort',

    'LBL_ASSIGN_TO_USER' => 'Toewijzen aan gebruiker',
    'LBL_AUTOREPLY' => 'Automatisch beantwoorden template',
    'LBL_AUTOREPLY_HELP' => 'Selecteer een automatisch antwoord om e-mail afzenders te informeren dat hun reactie is ontvangen.',
    'LBL_BASIC' => 'Standaard setup',
    'LBL_CASE_MACRO' => 'Verzoek Macro',
    'LBL_CASE_MACRO_DESC' => 'Stel de macro die de geimporteerde items kan linken aan een Case.',
    'LBL_CASE_MACRO_DESC2' => 'Deze instellen op elke waarde, maar behoud <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Sluit venster',
    'LBL_CREATE_TEMPLATE' => 'Nieuw',
    'LBL_DELETE_SEEN' => 'Verwijder gelezen e-mails na importeren',
    'LBL_EDIT_TEMPLATE' => 'Bewerken',
    'LBL_EMAIL_OPTIONS' => 'E-mail beheer opties',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounceverwerking Opties',
    'LBL_FILTER_DOMAIN_DESC' => 'Stuur geen automatische replies naar dit domein.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Selecteer automatisch om e-mail records aan te maken in SuiteCRM voor alle inkomende e-mails.',
    'LBL_FILTER_DOMAIN' => 'Geen automatische reply naar domein',
    'LBL_FIND_SSL_WARN' => '<br> Het testen van SSL kan lang duren. Wees geduldig. <br>',
    'LBL_FROM_ADDR' => '\'Van\' adres',
    'LBL_FROM_ADDR_DESC' => 'Het hier opgegeven e-mailadres wordt mogelijk niet getoond in het "Van"-adres veld van de verstuurde e-mail vanwege opgelegde beperkingen door de e-mail service provider. Indien dit het geval is, zal het e-mailadres dat is geconfigureerd in de uitgaande mailserver instellingen worden gebruikt.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '\'Van\' naam',
    'LBL_GROUP_QUEUE' => 'Wijs toe aan group',
    'LBL_HOME' => 'Start',
    'LBL_LIST_MAILBOX_TYPE' => 'Mailbox gebruik',
    'LBL_LIST_NAME' => 'Naam:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type',
    'LBL_LIST_SERVER_URL' => 'E-mail server:',
    'LBL_SERVER_ADDRESS' => 'Server adres',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Gebruikersnaam',
    'LBL_USERNAME' => 'Gebruikersnaam',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Gebruik SSL',
    'LBL_MAILBOX_TYPE' => 'Mogelijke acties',
    'LBL_DISTRIBUTION_METHOD' => 'Distributie methode',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Nieuwe verzoek Auto-Reply sjabloon',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selecteer een automatisch antwoord voor e-mail afzenders om deze te informeren dat een case is aangemaakt. De e-mail bevat het nummer van de case in de onderwerpregel die overeenkomt met de case Macro. Deze reactie wordt alleen verzonden bij de eerste e-mail van de ontvanger.',
    'LBL_MAILBOX' => 'Gevolgde map',
    'LBL_TRASH_FOLDER' => 'Prullenbak map',
    'LBL_SENT_FOLDER' => 'Verzonden items map',
    'LBL_SELECT' => 'Selecteer',
    'LBL_MARK_READ_NO' => 'E-mail verwijderen na de import',
    'LBL_MARK_READ_YES' => 'E-mail op de server laten staan na de import',
    'LBL_MARK_READ' => 'Laat berichten op de server staan',
    'LBL_MAX_AUTO_REPLIES' => 'Aantal auto responses',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Stel het maximale aantal auto responses in dat in 24 uur naar een adres wordt gestuurd.',
    'LBL_PERSONAL_MODULE_NAME' => 'Persoonlijke e-mailaccount',
    'LBL_CREATE_CASE' => 'Maak een verzoek van e-mail',
    'LBL_CREATE_CASE_HELP' => 'Selecteer deze optie om automatisch records aan te maken in SuiteCRM van inkomende e-mails.',
    'LBL_MODULE_NAME' => 'Inkomende Email Accounts',
    'LBL_BOUNCE_MODULE_NAME' => 'Bounceverwerking Mailbox',
    'LBL_MODULE_TITLE' => 'Inkomende Email Accounts',
    'LBL_NAME' => 'Naam',
    'LBL_NONE' => 'Geen',
    'LBL_ONLY_SINCE_NO' => 'Nee, Check tegen alle e-mails op de mailserver.',
    'LBL_ONLY_SINCE_YES' => 'Ja',
    'LBL_PASSWORD' => 'Wachtwoord',
    'LBL_EMAIL_PASSWORD' => 'Wachtwoord',
    'LBL_POP3_SUCCESS' => 'Uw POP3-test verbinding was succesvol.',
    'LBL_POPUP_TITLE' => 'Test Instellingen',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selecter geabonneerde mappen',
    'LBL_SELECT_TRASH_FOLDERS' => 'Selecteer prullenbak map',
    'LBL_SELECT_SENT_FOLDERS' => 'Select verzonden items map',
    'LBL_DELETED_FOLDERS_LIST' => 'De volgende map(pen) %s bestaat niet of is verwijderd van de server.',
    'LBL_PORT' => 'E-mail server poort',
    'LBL_REPLY_TO_NAME' => '"Reply-to" naam',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" adres',
    'LBL_SAME_AS_ABOVE' => 'Gebruik van naam/adres',
    'LBL_SERVER_OPTIONS' => 'Geavanceerde instellingen',
    'LBL_SERVER_TYPE' => 'E-mail server protocol',
    'LBL_SERVER_PORT' => 'E-mail server poort',
    'LBL_SERVER_URL' => 'E-mail server addres',
    'LBL_SSL_DESC' => 'Als de e-mailserver SSL ondersteund, wordt deze ook ingezet om beveiligde e-mail te versturen.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Het geselecteerde team heeft toegang tot de e-mailaccount. Als er een groepsmap wordt geselecteerd, dan heeft het team dat bij die groepsmap hoort toegang.',
    'LBL_SSL' => 'Gebruik SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'E-mail body filtertype',
    'LBL_SYSTEM_DEFAULT' => 'Standaardinstelling',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Test Instellingen',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Instellingen testverbinding',
    'LBL_TEST_SUCCESSFUL' => 'Verbinding met e-mailserver succesvol!',
    'LBL_TEST_WAIT_MESSAGE' => 'Even geduld a.u.b...',
    'LBL_WARN_IMAP_TITLE' => 'Inkomende e-mail uitgeschakeld',
    'LBL_WARN_IMAP' => 'Waarschuwingen:',
    'LBL_WARN_NO_IMAP' => 'Inkomende e-mail kan <b>niet</b> funtioneren zonder PHP IMAP ondersteuning.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nieuw persoonlijk account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nieuwe Groep-account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'Nieuw verzoek account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nieuwe bounceverwerking account',
    'LNK_LIST_MAILBOXES' => 'Inkomende Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Uitgaande e-mailaccounts',
    'LNK_LIST_SCHEDULER' => 'Taakplanners',
    'LNK_SEED_QUEUES' => 'Vul de wachtrij van teams',
    'LBL_GROUPFOLDER_ID' => 'Groepmap ID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Stel gebruikers in staat om e-mails te versturen met het \"Van\" Naam en adres als antwoord-adres.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Als deze optie is geselecteerd, zal de Van naam en van E-mail Adres van dit groeps mailaccount als optie verschijnen voor het \"Van\" veld bij de aanmaak van e-mails voor gebruikers die toegang hebben tot de groep mailaccount hebben.',
    'LBL_STATUS_ACTIVE' => 'Actief',
    'LBL_STATUS_INACTIVE' => 'Inactief',
    'LBL_IS_PERSONAL' => 'Persoonlijke',
    'LBL_IS_GROUP' => 'groep',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatisch e-mails importeren',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Waarschuwing: U bent uw automatische import instelling aan het aanpassen dit kan leiden tot gegevensverlies.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Waarschuwing: Auto import moet zijn ingeschakeld voor het automatisch aanmaken van klachten.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Concepten',
    'LBL_LIST_TITLE_MY_INBOX' => 'Postvak IN',
    'LBL_LIST_TITLE_MY_SENT' => 'Verstuur e-mail',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Gearchiveerde e-mails',
    'LNK_MY_DRAFTS' => 'Concepten',
    'LNK_MY_INBOX' => 'E-mails',
    'LNK_VIEW_MY_INBOX' => 'E-mail bekijken',
    'LNK_QUICK_REPLY' => 'Beantwoord',
    'LNK_SENT_EMAIL_LIST' => 'Verzonden e-mails',
    'LBL_EDIT_LAYOUT' => 'Bewerk lay-out' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Gewijzigd door',
    'LBL_SERVICE' => 'Dienst',
    'LBL_STORED_OPTIONS' => 'Opslag opties',
    'LBL_GROUP_ID' => 'Groep-ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Uitgaande configuratie',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuratie',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Automatische antwoord configuratie',
    'LBL_CASE_CONFIGURATION' => 'Verzoek configuratie',
    'LBL_GROUP_CONFIGURATION' => 'Groep configuratie',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groepen',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Uitgaande e-mailaccount',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Uitgaande e-mail account Id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Uitgaande e-mailaccount',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Automatisch antwoord e-mail sjabloon',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Automatisch antwoord e-mail sjabloonid',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Automatisch antwoord e-mail sjabloon',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Verzoek e-mail sjabloon',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Verzoek e-mail sjabloonid',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Verzoek e-mail sjabloon',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connectie String',
    'LBL_DISTRIB_METHOD' => 'Distributie methode',
    'LBL_DISTRIB_OPTIONS' => 'Distributie Opties',

    'LBL_DISTRIBUTION_USER' => 'Distributie gebruiker',
    'LBL_DISTRIBUTION_USER_ID' => 'Distributie gebruikers-id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distributie gebruiker',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Externe OAuth verbinding',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'Externe OAuth Connectie id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Externe OAuth verbinding',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Externe OAuth verbindingen',

    'LBL_TYPE' => 'Type',
    'LBL_AUTH_TYPE' => 'Authenticatie Type',
    'LBL_IS_DEFAULT' => 'Standaard',
    'LBL_SIGNATURE' => 'Handtekening',

    'LBL_OWNER_NAME' => 'Eigenaar',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Instellen als standaard',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Berichten naar prullenbak verplaatsen na importeren?',
);
