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
    'LBL_REPLY_ADDR' => 'Adresse Réponse: ',
    'LBL_REPLY_NAME' => 'Nom Réponse: ',

    'LBL_MODULE_NAME' => 'Email Marketing',
    'LBL_MODULE_TITLE' => 'Email Marketing: Accueil',
    'LBL_LIST_FORM_TITLE' => 'Campagnes Email Marketing',
    'LBL_NAME' => 'Nom',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FROM_ADDR' => 'Email Expéditeur',
    'LBL_LIST_DATE_START' => 'Date Début',
    'LBL_LIST_TEMPLATE_NAME' => 'Modèle Email',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_STATUS' => 'Statut',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Statut :',
    'LBL_TEMPLATE_NAME' => 'Nom Modèle',
    'LBL_DATE_ENTERED' => 'Date Entrée',
    'LBL_DATE_MODIFIED' => 'Date Modification',
    'LBL_MODIFIED' => 'Modifié par:',
    'LBL_CREATED' => 'Créé par: ',
    'LBL_MESSAGE_FOR' => 'Destinataires:',

    'LBL_FROM_NAME' => 'Nom Expéditeur: ',
    'LBL_FROM_ADDR' => 'Email Expéditeur: ',
    'LBL_DATE_START' => 'Date Début',
    'LBL_SEND_DATE' => 'Date Envoi',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Heure Début ',
    'LBL_START_DATE_TIME' => 'Date et Heure Début: ',
    'LBL_TEMPLATE' => 'Modèle Email: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modifié par:',
    'LBL_CREATED_BY' => 'Créé par: ',

    'LNK_NEW_CAMPAIGN' => 'Créer Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Nouvelle Liste de cibles',
    'LNK_PROSPECT_LIST_LIST' => 'Listes Cible',
    'LNK_NEW_PROSPECT' => 'Nouvelle Cible',
    'LNK_PROSPECT_LIST' => 'Cibles',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Créer',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editer',
    'LBL_FROM_MAILBOX' => 'Depuis Boite Messagerie',
    'LBL_FROM_MAILBOX_NAME' => 'Utiliser Boîte Messagerie:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Compte Email sortant:',
    'LBL_FROM' => 'Expéditeur',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listes Cible',
    'LBL_ALL_PROSPECT_LISTS' => 'Sélectionner pour choisir tous les Listes Cible dans la campagne.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Toutes les listes de cibles liées à ce message.',
    'LBL_PROSPECT_LIST_NAME' => 'Nom Liste Cible',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listes Ciblées',
    'LBL_MODULE_SEND_TEST' => 'Campagne : Envoyer Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campagne : Envoyer Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Veuillez sélectionner les messages de la campagne que vous souhaitez tester:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Veuillez sélectionner les messages de la campagne que vous souhaitez planifier pour la distribution à la date et l\'heure de début spécifiées:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Envoyer',
    'LBL_SEND_BUTTON_LABEL' => 'Envoyer',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Plan Exécution',
    'LBL_ERROR_ON_MARKETING' => 'Champs obligatoires manquants',

    'LBL_CAMPAIGN_ID' => 'ID Campagne',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID Compte Email Sortant',
    'LBL_EMAIL_TEMPLATE' => 'Modèle Email',
    'LBL_PROSPECT_LISTS' => 'Listes Prospect',
    'LBL_OVERVIEW' => 'Vue Globale',
    'LBL_EMAIL_CONFIG' => 'Paramètres Emails',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'Email',
    'LBL_BODY' => 'Corps',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Sondage',
    'LBL_SCHEDULE' => 'Plan Exécution',
    'LBL_DELETE_TEST_ENTRIES' => 'Supprimer Enregistrements Test',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_SEND_TEST_EMAIL' => 'Envoyer Email Test',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'File d\'attente Message',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Lancer le process nocturne de gestion des bounces des campagnes emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Planificateurs',
    'LBL_INBOUND_EMAIL' => 'Email Entrant',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
