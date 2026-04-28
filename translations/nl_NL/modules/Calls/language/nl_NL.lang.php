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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Telefoongesprekken',
    'LBL_MODULE_TITLE' => 'Telefoongesprekken: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Telefoongesprek zoeken',
    'LBL_LIST_FORM_TITLE' => 'Telefoongesprekken',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe afspraak',
    'LBL_LIST_CLOSE' => 'Afsluiten',
    'LBL_LIST_SUBJECT' => 'Onderwerp',
    'LBL_LIST_CONTACT' => 'Contactpersonen',
    'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
    'LBL_LIST_RELATED_TO_ID' => 'Gerelateerd aan ID',
    'LBL_LIST_DATE' => 'Start datum',
    'LBL_LIST_DIRECTION' => 'Richting',
    'LBL_SUBJECT' => 'Onderwerp:',
    'LBL_REMINDER' => 'Herinnering:',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Richting:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_DURATION' => 'Duur:',
    'LBL_DURATION_HOURS' => 'Duur (uren):',
    'LBL_DURATION_MINUTES' => 'Duur (minuten):',
    'LBL_HOURS_MINUTES' => '(uren/minuten)',
    'LBL_DATE_TIME' => 'Startdatum & tijd:',
    'LBL_TIME' => 'Starttijd:',
    'LBL_HOURS_ABBREV' => 'u',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log gesprek',
    'LNK_NEW_MEETING' => 'Nieuwe afspraak',
    'LNK_CALL_LIST' => 'Bekijk gesprekken',
    'LNK_IMPORT_CALLS' => 'Importeer gesprekken',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze Organisatie te verwijderen.',
    'LBL_INVITEE' => 'Genodigden',
    'LBL_RELATED_TO' => 'Gerelateerd aan:',
    'LNK_NEW_APPOINTMENT' => 'Maak afspraak',
    'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
    'LBL_ADD_INVITEE' => 'Uitnodigen',
    'LBL_NAME' => 'Naam',
    'LBL_FIRST_NAME' => 'Voornaam',
    'LBL_LAST_NAME' => 'Achternaam',
    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefoon',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail alle genodigden',
    'LBL_EMAIL_REMINDER' => 'E-mail herinnering',
    'LBL_EMAIL_REMINDER_TIME' => 'E-mail herinnering tijd',
    'LBL_SEND_BUTTON_TITLE' => 'Opslaan en uitnodigingen verzenden',
    'LBL_SEND_BUTTON_LABEL' => 'Opslaan en uitnodigingen verzenden',
    'LBL_DATE_END' => 'Einddatum',
    'LBL_REMINDER_TIME' => 'Herrinneringstijd',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail herinnering verzonden',
    'LBL_SEARCH_BUTTON' => 'Zoeken',
    'LBL_ADD_BUTTON' => 'Toevoegen',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefoongesprekken',
    'LNK_SELECT_ACCOUNT' => 'Selecteer een organisatie',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Kansen',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_MEMBER_OF' => 'Onderdeel van',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notities',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_LIST_MY_CALLS' => 'Mijn telefoongesprekken',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker',
    'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
    'LBL_CALL_INFORMATION' => 'OVERZICHT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Verwijderen',
    'LBL_ACCEPT_STATUS' => 'Accepteer status',
    'LBL_ACCEPT_LINK' => 'Accepteer link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Maak een genodigde aan',
    'LBL_CREATE_CONTACT' => 'Als contactpersoon',
    'LBL_CREATE_LEAD' => 'Als Lead',
    'LBL_CREATE_AND_ADD' => 'Aanmaken & Toevoegen',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuleren',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, er zijn geen resultaten gevonden. Maak hieronder een genodigde aan.',
    'LBL_NO_ACCESS' => 'U heeft geen toegang om $module te maken',

    'LBL_REPEAT_TYPE' => 'Herhaal type',
    'LBL_REPEAT_INTERVAL' => 'Herhaal Interval',
    'LBL_REPEAT_DOW' => 'Herhaal Dow',
    'LBL_REPEAT_UNTIL' => 'Herhaal tot',
    'LBL_REPEAT_COUNT' => 'Herhaal telling',
    'LBL_REPEAT_PARENT_ID' => 'Herhaal ouder Id',
    'LBL_RECURRING_SOURCE' => 'Periodieke bron',

    'LBL_SYNCED_RECURRING_MSG' => 'Dit telefoon gesprek komt van een ander systeem en was gesynchroniseerd naar SuiteCRM. Om wijzigingen aan te brengen, ga naar de orginele bron in het andere systeem. Wijzigingen in het andere systeem worden gesynchroniseerd met dit record. ',

    // for reminders
    'LBL_REMINDERS' => 'Herinneringen',
    'LBL_REMINDERS_ACTIONS' => 'Acties:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email genodigden',
    'LBL_REMINDERS_WHEN' => 'Wanneer:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Verwijder herinnering',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Voeg alle genodigden toe',
    'LBL_REMINDERS_ADD_REMINDER' => 'Voeg herinnering toe',

    'LBL_RESCHEDULE' => 'Afspraak verzetten',
    'LBL_RESCHEDULE_COUNT' => 'Belpogingen',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Reden',
    'LBL_RESCHEDULE_ERROR1' => 'Selecteer een geldige datum',
    'LBL_RESCHEDULE_ERROR2' => 'Selecteer een reden',
    'LBL_RESCHEDULE_PANEL' => 'Afspraak verzetten',
    'LBL_RESCHEDULE_HISTORY' => 'Belpogingen',
    'LBL_CANCEL' => 'Annuleren',
    'LBL_SAVE' => 'Opslaan',

    'LBL_CALLS_RESCHEDULE' => 'Gesprek verzetten',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Datum gewijzigd',
    'LBL_LIST_DUE_DATE'=>'Vervaldatum',
    'LBL_RESCHEDULED_BY'=>'door',
);
