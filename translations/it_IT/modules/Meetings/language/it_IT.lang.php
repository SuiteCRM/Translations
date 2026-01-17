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
    'LBL_ACCEPT_THIS' => 'Accetti?',
    'LBL_ADD_BUTTON' => 'Aggiungi',
    'LBL_ADD_INVITEE' => 'Aggiungi Invitati',
    'LBL_CONTACT_NAME' => 'Contatto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_CREATED_BY' => 'Creato da',
    'LBL_DATE_END' => 'Data di Fine',
    'LBL_DATE_TIME' => 'Data e Ora di Inizio:',
    'LBL_DATE' => 'Data di Inizio:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Appuntamenti',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DIRECTION' => 'Direzione:',
    'LBL_DURATION_HOURS' => 'Ore di Durata:',
    'LBL_DURATION_MINUTES' => 'Minuti di Durata:',
    'LBL_DURATION' => 'Durata:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Nome',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Note',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(ore/minuti)',
    'LBL_INVITEE' => 'Invitati',
    'LBL_LAST_NAME' => 'Cognome',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utente Assegnato',
    'LBL_LIST_CLOSE' => 'Chiudi',
    'LBL_LIST_CONTACT' => 'Contatto',
    'LBL_LIST_DATE_MODIFIED' => 'Data Modifica',
    'LBL_LIST_DATE' => 'Data di Inizio',
    'LBL_LIST_DIRECTION' => 'Direzione',
    'LBL_LIST_DUE_DATE' => 'Data Prevista',
    'LBL_LIST_FORM_TITLE' => 'Visualizza Appuntamenti',
    'LBL_LIST_MY_MEETINGS' => 'I miei Appuntamenti',
    'LBL_LIST_RELATED_TO' => 'Collegato a',
    'LBL_LIST_STATUS' => 'Stato',
    'LBL_LIST_SUBJECT' => 'Oggetto',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_LOCATION' => 'Luogo:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modificato da',
    'LBL_MODULE_NAME' => 'Appuntamenti',
    'LBL_MODULE_TITLE' => 'Appuntamenti: Home',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Appuntamento',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Sequenza aggiornamento appuntamento',
    'LBL_PHONE' => 'Telefono Ufficio:',
    'LBL_REMINDER_TIME' => 'Tempo di Avviso',
    'LBL_EMAIL_REMINDER_SENT' => 'Email di promemoria inviata',
    'LBL_REMINDER' => 'Ricorda:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Invia una Email a tutti gli invitati',
    'LBL_EMAIL_REMINDER' => 'Email di promemoria',
    'LBL_EMAIL_REMINDER_TIME' => 'Data di invio email di promemoria',
    'LBL_REMOVE' => 'Cancella',
    'LBL_SCHEDULING_FORM_TITLE' => 'Gestione degli invitati',
    'LBL_SEARCH_BUTTON' => 'Ricerca',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Appuntamento',
    'LBL_SEND_BUTTON_LABEL' => 'Invia Inviti',
    'LBL_SEND_BUTTON_TITLE' => 'Invia Inviti',
    'LBL_STATUS' => 'Stato:',
    'LBL_TYPE' => 'Tipo di Appuntamento',
    'LBL_PASSWORD' => 'Password dell\'Appuntamento',
    'LBL_URL' => 'Inizia/partecipa all\'Appuntamento',
    'LBL_HOST_URL' => 'URL host',
    'LBL_DISPLAYED_URL' => 'Visualizza URL',
    'LBL_CREATOR' => 'Organizzatore dell´Appuntamento',
    'LBL_EXTERNALID' => 'ID App Esterna',
    'LBL_SUBJECT' => 'Oggetto:',
    'LBL_TIME' => 'Ora Inizio:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utenti',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Tipo Relazione',
    'LBL_PARENT_ID' => 'ID Padre',
    'LNK_MEETING_LIST' => 'Visualizza Appuntamenti',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_NEW_MEETING' => 'Schedula appuntamento',
    'LNK_IMPORT_MEETINGS' => 'Importa Appuntamenti',

    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_MODIFIED_USER' => 'Utente Modificato',
    'NOTICE_DURATION_TIME' => 'La durata deve essere superiore a 0',
    'LBL_MEETING_INFORMATION' => 'Informazioni', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Partecipa all´Appuntamento',
    'LBL_ACCEPT_STATUS' => 'Accetta Stato',
    'LBL_ACCEPT_LINK' => 'Accetta Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Non è possibile partecipare all´appuntamento perchè non sei un invitato.',
    'LBL_EXTNOT_RECORD_LINK' => 'Visualizza Appuntamento',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Non è possibile iniziare quest\'appuntamento perché non sei Amministratore o proprietario dello stesso.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Crea un invitato',
    'LBL_CREATE_CONTACT' => 'Come Contatto',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Come Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Crea & Aggiungi',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Annulla',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nessun risultato trovato. Si prega di creare un invitato.',
    'LBL_NO_ACCESS' => 'Non hai i permessi di creare $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Ripetere Tipo',
    'LBL_REPEAT_INTERVAL' => 'Ripetere Intervallo',
    'LBL_REPEAT_DOW' => 'Ripetere Dow',
    'LBL_REPEAT_UNTIL' => 'Ripetere Fino',
    'LBL_REPEAT_COUNT' => 'Ripetere Conteggio',
    'LBL_REPEAT_PARENT_ID' => 'Ripetere ID Padre',
    'LBL_RECURRING_SOURCE' => 'Fonte Ricorrente',

    'LBL_SYNCED_RECURRING_MSG' => 'Quest\'appuntamento è stata originato in un altro sistema e sincronizzato in SuiteCRM. Per effettuare delle modifiche, si prega di andare nell\'appuntamento originale all´interno dell´altro sistema. Le modifiche fatte nell´altro sistema potranno essere sincronizzate con questo record di SuiteCRM.',
    'LBL_RELATED_TO' => 'Relativo a:',

    // for reminders
    'LBL_REMINDERS' => 'Promemoria',
    'LBL_REMINDERS_ACTIONS' => 'Azioni:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email',
    'LBL_REMINDERS_WHEN' => 'Quando:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Rimuovi promemoria',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Aggiungi tutti gli invitati',
    'LBL_REMINDERS_ADD_REMINDER' => 'Aggiungere promemoria',

    // for google sync
    'LBL_GSYNC_ID' => 'ID di evento di Google',
    'LBL_GSYNC_LASTSYNC' => 'Timestamp Ultimo Google Sync',
);
