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
    'LBL_REPLY_ADDR' => '"Reply-to" adres: ',
    'LBL_REPLY_NAME' => '"Reply-to" naam: ',

    'LBL_MODULE_NAME' => 'E-mail marketing',
    'LBL_MODULE_TITLE' => 'E-mail marketing: Start',
    'LBL_LIST_FORM_TITLE' => 'E-mail marketing campagnes',
    'LBL_NAME' => 'Naam',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_FROM_ADDR' => 'Email afzender',
    'LBL_LIST_DATE_START' => 'Begindatum',
    'LBL_LIST_TEMPLATE_NAME' => 'Email template',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Wachtende status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Template naam',
    'LBL_DATE_ENTERED' => 'Datum ingevoerd',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door: ',
    'LBL_CREATED' => 'Aangemaakt door: ',
    'LBL_MESSAGE_FOR' => 'Verstuur dit bericht aan:',

    'LBL_FROM_NAME' => 'Afzender naam: ',
    'LBL_FROM_ADDR' => 'Afzender email-adres: ',
    'LBL_DATE_START' => 'Begindatum',
    'LBL_SEND_DATE' => 'Verzend datum',
    'LBL_SCHEDULED_START_DATE' => 'Geplande Run Datum',
    'LBL_CHECK_DUPLICATE' => 'Dubbele Behandeling',
    'LBL_TIME_START' => 'Starttijd',
    'LBL_START_DATE_TIME' => 'Startdatum en tijd: ',
    'LBL_TEMPLATE' => 'Email template: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Gewijzigd door: ',
    'LBL_CREATED_BY' => 'Aangemaakt door: ',

    'LNK_NEW_CAMPAIGN' => 'Nieuwe campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LBL_RELATED_CAMPAIGN' => 'Gerelateerde Campagne',
    'LNK_NEW_PROSPECT_LIST' => 'Nieuwe verzendlijst',
    'LNK_PROSPECT_LIST_LIST' => 'Verzendlijsten',
    'LNK_NEW_PROSPECT' => 'Nieuw doel',
    'LNK_PROSPECT_LIST' => 'Doelen',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-mail marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Nieuw',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Wijzigen',
    'LBL_FROM_MAILBOX' => 'Van E-mailbox',
    'LBL_FROM_MAILBOX_NAME' => 'Gebruikt E-mailbox:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Uitgaande e-mailaccounts:',
    'LBL_FROM' => 'Van',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Verzendlijsten',
    'LBL_ALL_PROSPECT_LISTS' => 'Selecteer om alle doelenlijst(en) in de campagne te kiezen.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Alle verzendlijsten die bij dit bericht horen.',
    'LBL_PROSPECT_LIST_NAME' => 'Verzendlijst naam',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Verzendlijsten',
    'LBL_MODULE_SEND_TEST' => 'Campagne: Stuur Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campagne: Stuur Mails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Gelieve de campagneboodschap te kiezen die je wil testen:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Gelieve de campagneboodschappen te kiezen die je wil klaarzetten om te versturen op de gekozen start datum en tijd:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Verzenden',
    'LBL_SEND_BUTTON_LABEL' => 'Verzenden',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Planning',
    'LBL_ERROR_ON_MARKETING' => 'Ontbrekende vereiste veld(en)',

    'LBL_CAMPAIGN_ID' => 'Campagne Id',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Uitgaande e-mail account-ID',
    'LBL_EMAIL_TEMPLATE' => 'Email template',
    'LBL_PROSPECT_LISTS' => 'Potentiële klanten lijst',
    'LBL_OVERVIEW' => 'Normaal',
    'LBL_EMAIL_CONFIG' => 'E-mail Instellingen',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'E-MAIL',
    'LBL_BODY' => 'Inhoud',
    'LBL_MARKETING_TYPE' => 'Marketing type',
    'LBL_SURVEY' => 'Enquête',
    'LBL_SCHEDULE' => 'Planning',
    'LBL_DELETE_TEST_ENTRIES' => 'Verwijder test verzending',
    'LBL_UNSCHEDULE' => 'Ongepland',
    'LBL_ABORT' => 'Afbreken',
    'LBL_USERS' => 'Gebruikers',
    'LBL_SEND_TEST_EMAIL' => 'Stuur test e-mail',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Selecteer Records met E-mails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Email wachtrij',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Verzenden zal in batches worden verwerkt. Dit kan minuten/uren duren.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing ontvangers. Ontvangers in de onderdrukkingslijsten van de campagne worden geblokkeerd.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing proces zal alleen starten wanneer gepland.',
    'LBL_TYPE_MARKETING_HELP' => 'Ontvangers zijn onderworpen aan opt-out-validatie.',
    'LBL_TYPE_LEGACY_HELP' => 'Dit is een \'Legacy Email Marketing\' Record en bestaat voor historische data doeleinden.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Ontvangers zijn NIET onderworpen aan opt-out-validatie.',

    'LBL_SCHEDULER_WIDGET' => 'E-mail marketing diagnose',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Wachtrij Campagne E-mails',
    'LBL_OOTB_BOUNCE' => 'Draai \'s nachts opgestuurde teruggekomen campagne e-mails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Stuur campagne e-mails',
    'LBL_SCHEDULERS' => 'Taakplanners',
    'LBL_INBOUND_EMAIL' => 'Inkomende E-mail',

    'LBL_TRACKERS_ENABLED' => 'Trackers ingeschakeld',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Ingeschakeld',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'Wanneer ingeschakeld, worden links vervangen door tracker links die klikken monitoren.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'Wanneer uitgeschakeld, zullen links NIET worden vervangen door tracker links die klikken monitoren.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers globaal uitgeschakeld. E-mail weergaven en klikken worden niet gevolgd.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
