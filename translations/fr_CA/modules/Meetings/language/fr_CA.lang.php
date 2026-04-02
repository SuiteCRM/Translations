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
    'LBL_ACCEPT_THIS' => 'Accepter ?',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter des participants',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_DATE_TIME' => 'Date & Heure Début:',
    'LBL_DATE' => 'Date de début:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Réunions',
    'LBL_DESCRIPTION' => 'Déscription :',
    'LBL_DIRECTION' => 'Type:',
    'LBL_DURATION_HOURS' => 'Durée en heures :',
    'LBL_DURATION_MINUTES' => 'Durée en minutes :',
    'LBL_DURATION' => 'Durée :',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Participants',
    'LBL_LAST_NAME' => 'Nom de famille',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur assigné',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Date Modification',
    'LBL_LIST_DATE' => 'Date de début',
    'LBL_LIST_DIRECTION' => 'Type',
    'LBL_LIST_DUE_DATE' => 'Date prévue',
    'LBL_LIST_FORM_TITLE' => 'Liste Réunions',
    'LBL_LIST_MY_MEETINGS' => 'Mes Réunions',
    'LBL_LIST_RELATED_TO' => 'Associés à',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_LOCATION' => 'Localisation:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_MODULE_NAME' => 'Réunions',
    'LBL_MODULE_TITLE' => 'Réunions: Accueil',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_FORM_TITLE' => 'Planifier Rendez-vous',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Fréquence de mise à jour de la réunion',
    'LBL_PHONE' => 'Téléphone:',
    'LBL_REMINDER_TIME' => 'Heure Rappel',
    'LBL_EMAIL_REMINDER_SENT' => 'Rappel Email Envoyée',
    'LBL_REMINDER' => 'Rappels:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Envoyer Email à tous les Invités',
    'LBL_EMAIL_REMINDER' => 'Notification par email',
    'LBL_EMAIL_REMINDER_TIME' => 'Heure de Rappel par Email',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Recherche',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Réunion',
    'LBL_SEND_BUTTON_LABEL' => 'Enregistrer & Envoyer Invitation',
    'LBL_SEND_BUTTON_TITLE' => 'Enregistrer & Envoyer Invitation',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Type Réunion',
    'LBL_PASSWORD' => 'Mot de passe Réunion',
    'LBL_URL' => 'Démarrer/Rejoindre Réunion',
    'LBL_HOST_URL' => 'URL hôte',
    'LBL_DISPLAYED_URL' => 'Afficher URL',
    'LBL_CREATOR' => 'Créateur Réunion',
    'LBL_EXTERNALID' => 'ID Application Externe',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_TIME' => 'Heure de début:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Type Parentée',
    'LBL_PARENT_ID' => 'Parent (ID):',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_IMPORT_MEETINGS' => 'Import Réunions',

    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'NOTICE_DURATION_TIME' => 'Durée doit être supérieure à 0',
    'LBL_MEETING_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Joindre Réunion',
    'LBL_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_ACCEPT_LINK' => 'Lien acceptation',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Vous n\'êtes pas autorisé à joindre cette réunion car vous n\'êtes pas un des participants.',
    'LBL_EXTNOT_RECORD_LINK' => 'Voir Réunion',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Vous ne pouvez pas démarrer cette réunion car vous êtes ni un administrateur ni le responsable de cette réunion.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Créer un invité',
    'LBL_CREATE_CONTACT' => 'Comme Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Comme Prospect',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Create & Add',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Répétition Type',
    'LBL_REPEAT_INTERVAL' => 'Répétition intervalle',
    'LBL_REPEAT_DOW' => 'Répétition depuis',
    'LBL_REPEAT_UNTIL' => 'Répétition jusque',
    'LBL_REPEAT_COUNT' => 'Nombre Répétitions',
    'LBL_REPEAT_PARENT_ID' => 'Répétition ID parent',
    'LBL_RECURRING_SOURCE' => 'Source Récurrence',

    'LBL_SYNCED_RECURRING_MSG' => 'Cette réunion est originaire d’un autre système et a été synchronisée au CRM. Pour apporter des modifications, aller à la rencontre originale dans l’autre système. Vous peuvent synchroniser les modifications apportées dans l’autre système à cet enregistrement.',
    'LBL_RELATED_TO' => 'Associée à:',

    // for reminders
    'LBL_REMINDERS' => 'Rappel par défaut',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Envoyer Email aux Invités',
    'LBL_REMINDERS_WHEN' => 'Quand:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Supprimer le rappel',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Ajouter tous les invités',
    'LBL_REMINDERS_ADD_REMINDER' => 'Ajouter rappel',

    // for google sync
    'LBL_GSYNC_ID' => 'ID d’événement Google',
    'LBL_GSYNC_LASTSYNC' => 'Dernier horodatage de Google Sync',
);
