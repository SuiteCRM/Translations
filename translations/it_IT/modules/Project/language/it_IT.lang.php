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
    'LBL_MODULE_NAME' => 'Progetto',
    'LBL_MODULE_TITLE' => 'Progetti: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Progetto',
    'LBL_LIST_FORM_TITLE' => 'Visualizza Progetti',
    'LBL_HISTORY_TITLE' => 'Cronologia',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Data di Creazione:',
    'LBL_DATE_MODIFIED' => 'Data Modifica:',
    'LBL_ASSIGNED_USER_ID' => 'Assegnato a:',
    'LBL_ASSIGNED_USER_NAME' => 'Gestione Progetto:',
    'LBL_MODIFIED_USER_ID' => 'ID Utente Modificato:',
    'LBL_CREATED_BY' => 'Creato da:',
    'LBL_NAME' => 'Nome:',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DELETED' => 'Eliminato:',
    'LBL_DATE' => 'Data:',
    'LBL_DATE_START' => 'Data di Inizio:',
    'LBL_DATE_END' => 'Data di Fine:',
    'LBL_PRIORITY' => 'Priorità:',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Totale Sforzo Stimato (ore)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Totale Sforzo Effettivo (ore)',
    'LBL_LIST_END_DATE' => 'Data di Fine',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nessuno',
    'LBL_ALL_PROJECTS' => 'Tutti i progetti',
    'LBL_ALL_USERS' => 'Tutti gli utenti',
    'LBL_ALL_CONTACTS' => 'Tutti i Contatti',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nuovo Progetto',
    'LNK_NEW_PROJECT' => 'Nuovo Progetto',
    'LNK_PROJECT_LIST' => 'Visualizza Progetti',
    'LNK_NEW_PROJECT_TASK' => 'Nuovo Compito di Progetto',
    'LNK_PROJECT_TASK_LIST' => 'Visualizza Compiti di Progetto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Progetti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Errori',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome Attività',
    'LBL_DURATION' => 'Durata',
    'LBL_ACTUAL_DURATION' => 'Durata Effettiva',
    'LBL_START' => 'Inizio',
    'LBL_FINISH' => 'Termina',
    'LBL_PREDECESSORS' => 'Predecessori',
    'LBL_PERCENT_COMPLETE' => 'Progresso (%)',
    'LBL_MORE' => 'Per saperne di più...',
    'LBL_OPPORTUNITIES' => 'Opportunità',
    'LBL_NEXT_WEEK' => 'Avanti',
    'LBL_PROJECT_INFORMATION' => 'Panoramica del progetto',
    'LBL_EDITLAYOUT' => 'Modifica Maschera' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Compiti di Progetto',
    'LBL_VIEW_GANTT_TITLE' => 'Visualizza Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durata',
    'LBL_TASK_TITLE' => 'Modifica Compito',
    'LBL_DURATION_TITLE' => 'Modifica Durata',
    'LBL_LAG' => 'Ritardo',
    'LBL_DAYS' => 'Giorni',
    'LBL_HOURS' => 'Ore',
    'LBL_MONTHS' => 'Mesi',
    'LBL_SUBTASK' => 'Compito',
    'LBL_MILESTONE_FLAG' => 'Compito Fondamentale',
    'LBL_ADD_NEW_TASK' => 'Aggiungi Compito',
    'LBL_DELETE_TASK' => 'Rimuovi Compito',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifica le Proprietà del Compito.',
    'LBL_PARENT_TASK_ID' => 'ID Compito Padre',
    'LBL_RESOURCE_CHART' => 'Calendario delle risorse',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo Relazione',
    'LBL_ASSIGNED_TO' => 'Gestione Progetto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Template Progetto',
    'LBL_STATUS' => 'Stato:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Gestione Progetto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Progetto',
    'LBL_TOOLTIP_TASK_NAME' => 'Nome Attività',
    'LBL_TOOLTIP_TITLE' => 'Compiti di questo giorno',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durata',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'La Risorsa è un Utente',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'La Risorsa è un Contatto',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mese Precedente',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Mese Successivo',
    'LBL_RESOURCE_CHART_WEEK' => 'Settimana',
    'LBL_RESOURCE_CHART_DAY' => 'Giorno',
    'LBL_RESOURCE_CHART_WARNING' => 'Nessuna Risorsa assegnata ad un progetto.',
    'LBL_PROJECT_DELETE_MSG' => 'Sei sicuro di voler eliminare questo Progetto ed i Compiti ad esso associati?',
    'LBL_LIST_MY_PROJECT' => 'I miei Progetti',
    'LBL_LIST_ASSIGNED_USER' => 'Gestione Progetto',
    'LBL_UNASSIGNED' => 'Non Assegnato',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Risorse',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telefono Ufficio:',
    'LBL_ADD_BUTTON' => 'Aggiungi',
    'LBL_ADD_INVITEE' => 'Aggiungi Risorsa',
    'LBL_FIRST_NAME' => 'Nome',
    'LBL_LAST_NAME' => 'Cognome',
    'LBL_SEARCH_BUTTON' => 'Ricerca',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nessun risultato trovato. Si prega di creare un invitato.',
    'LBL_CREATE_INVITEE' => 'Crea Risorsa',
    'LBL_CREATE_CONTACT' => 'Come Contatto',
    'LBL_CREATE_AND_ADD' => 'Crea & Aggiungi',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annulla',
    'LBL_NO_ACCESS' => 'Non hai i permessi di creare $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Elenco Risorse',
    'LBL_REMOVE' => 'Cancella',
    'LBL_VIEW_DETAIL' => 'Mostra Dettagli',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Considerare i giorni lavorativi',

    'LBL_IMPORT_PROJECTS' => 'Importa Progetti',

    'LBL_PROJECTS_SEARCH' => 'Cerca progetti',
    'LBL_USERS_SEARCH' => 'Cerca utenti',
    'LBL_CONTACTS_SEARCH' => 'Seleziona contatto',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Ricerca',

    'LBL_CHART_TYPE' => 'Tipo',
    'LBL_CHART_WEEKLY' => 'Settimanale',
    'LBL_CHART_MONTHLY' => 'Mensile',
    'LBL_CHART_QUARTERLY' => 'Trimestrale',

    'LBL_RESOURCE_CHART_MONTH' => 'Mese',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contatti del Progetto dal Titolo dei Contatti',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modello di progetto: progetto dal titolo del progetto',
    'LBL_AOS_QUOTES_PROJECT' => 'Preventivi: progetto',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Crescente',
    'LBL_DESCENDING' => 'Decrescente',
);
