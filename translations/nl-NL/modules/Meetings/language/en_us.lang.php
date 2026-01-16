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
    'LBL_ACCEPT_THIS' => 'Accepteren?',
    'LBL_ADD_BUTTON' => 'Toevoegen',
    'LBL_ADD_INVITEE' => 'Uitnodigen',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_CREATED_BY' => 'Aangemaakt door',
    'LBL_DATE_END' => 'Eind datum',
    'LBL_DATE_TIME' => 'Begindatum & tijd:',
    'LBL_DATE' => 'Begindatum:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Afspraken',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DIRECTION' => 'Richting:',
    'LBL_DURATION_HOURS' => 'Duur (uren):',
    'LBL_DURATION_MINUTES' => 'Duur (minuten):',
    'LBL_DURATION' => 'Gespreksduur:',
    'LBL_EMAIL' => 'E-mails',
    'LBL_FIRST_NAME' => 'Voornaam',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notities',
    'LBL_HOURS_ABBREV' => 'u',
    'LBL_HOURS_MINS' => '(uren/minuten)',
    'LBL_INVITEE' => 'Genodigden',
    'LBL_LAST_NAME' => 'Achternaam',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_LIST_CLOSE' => 'Sluiten',
    'LBL_LIST_CONTACT' => 'Contactpersonen',
    'LBL_LIST_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_LIST_DATE' => 'Begindatum',
    'LBL_LIST_DIRECTION' => 'Richting',
    'LBL_LIST_DUE_DATE' => 'Verloopdatum',
    'LBL_LIST_FORM_TITLE' => 'Afspraken',
    'LBL_LIST_MY_MEETINGS' => 'Mijn afspraken',
    'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Onderwerp',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_LOCATION' => 'Locatie:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Gewijzigd door',
    'LBL_MODULE_NAME' => 'Afspraken',
    'LBL_MODULE_TITLE' => 'Afspraken: Start',
    'LBL_NAME' => 'Naam',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe afspraak',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_SEQUENCE' => 'Afspraak bijwerk volgorde',
    'LBL_PHONE' => 'Telefoon werk',
    'LBL_REMINDER_TIME' => 'Herrinneringstijd',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail herinnering verzonden',
    'LBL_REMINDER' => 'Herinnering:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail alle genodigden',
    'LBL_EMAIL_REMINDER' => 'E-mail herinnering',
    'LBL_EMAIL_REMINDER_TIME' => 'E-mail herinnering tijd',
    'LBL_REMOVE' => 'Verwijderen',
    'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
    'LBL_SEARCH_BUTTON' => 'Zoeken',
    'LBL_SEARCH_FORM_TITLE' => 'Afspraak zoeken',
    'LBL_SEND_BUTTON_LABEL' => 'Verstuur uitnodigingen',
    'LBL_SEND_BUTTON_TITLE' => 'Verstuur uitnodigingen',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Afspraak type',
    'LBL_PASSWORD' => 'Afspraak  wachtwoord',
    'LBL_URL' => 'Starten / deelnemen afspraak ',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Toon URL',
    'LBL_CREATOR' => 'Maker afspraak',
    'LBL_EXTERNALID' => 'Externe App ID',
    'LBL_SUBJECT' => 'Onderwerp:',
    'LBL_TIME' => 'Aanvangstijd:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
    'LBL_PARENT_TYPE' => 'Gerelateerd aan type',
    'LBL_PARENT_ID' => 'Hoofd ID',
    'LNK_MEETING_LIST' => 'Afspraken',
    'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
    'LNK_NEW_MEETING' => 'Vergadering plannen',
    'LNK_IMPORT_MEETINGS' => 'Importeer afspraken',

    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
    'LBL_MEETING_INFORMATION' => 'Relatiegegevens', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Deelnemen afspraak',
    'LBL_ACCEPT_STATUS' => 'Accepteer status',
    'LBL_ACCEPT_LINK' => 'Accepteer link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'U bent niet in staat om deze vergadering bij te wonen omdat je niet een genodigde bent.',
    'LBL_EXTNOT_RECORD_LINK' => 'Bekijk afspraak',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Je kunt  deze bijeenkomst niet beginnen, omdat je geen beheerder of de eigenaar van de vergadering bent.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Maak een genodigde aan',
    'LBL_CREATE_CONTACT' => 'Als Contactpersoon',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Als Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Maakaan & toevoegen',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuleren',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, geen resultaten gevonden. Maak hieronder een genodigde aan.',
    'LBL_NO_ACCESS' => 'U heeft geen toegang om deze $module aan temaken',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Herhaal type',
    'LBL_REPEAT_INTERVAL' => 'Herhaal Interval',
    'LBL_REPEAT_DOW' => 'Herhaal Dow',
    'LBL_REPEAT_UNTIL' => 'Herhaal tot',
    'LBL_REPEAT_COUNT' => 'Herhaal telling',
    'LBL_REPEAT_PARENT_ID' => 'Herhaal ouder Id',
    'LBL_RECURRING_SOURCE' => 'Periodieke bron',

    'LBL_SYNCED_RECURRING_MSG' => 'Deze vergadering is vastgelegd is een ander systeem en gesynchroniseerd met SuiteCRM. Ga voor wijzigingen van de originele vergadering naar het andere systeem. De gemaakte veranderingen worden gesynchroniseerd met dit record.',
    'LBL_RELATED_TO' => 'Gerelateerd aan:',

    // for reminders
    'LBL_REMINDERS' => 'Herinneringen',
    'LBL_REMINDERS_ACTIONS' => 'Acties:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email genodigden',
    'LBL_REMINDERS_WHEN' => 'Wanneer:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Verwijder herinnering',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Voeg alle genodigden toe',
    'LBL_REMINDERS_ADD_REMINDER' => 'Voeg herinnering toe',

    // for google sync
    'LBL_GSYNC_ID' => 'Google gebeurtenis ID',
    'LBL_GSYNC_LASTSYNC' => 'Laatste Google Sync Tijdstempel',
);
