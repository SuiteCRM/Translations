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
    'LBL_ASSIGNED_TO_ID' => 'Id utente assegnato',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data di Creazione',
    'LBL_DATE_MODIFIED' => 'Data Modifica',
    'LBL_MODIFIED' => 'Modificato da',
    'LBL_MODIFIED_NAME' => 'Modificato da Nome',
    'LBL_CREATED' => 'Creato da',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_DELETED' => 'Eliminato',
    'LBL_NAME' => 'Nome',
    'LBL_SAVING' => 'Salvataggio in corso...',
    'LBL_SAVED' => 'Salvato',
    'LBL_CREATED_USER' => 'Creato dall\'utente',
    'LBL_MODIFIED_USER' => 'Modificato dall\'utente',
    'LBL_LIST_FORM_TITLE' => 'Elenco Feed',
    'LBL_MODULE_NAME' => 'Impostazioni SuiteCRM Feed',
    'LBL_MODULE_TITLE' => 'Impostazioni SuiteCRM Feed',
    'LBL_DASHLET_DISABLED' => 'Attenzione: Il sistema SuiteCRM Feed è disabilitato, nessuna nuova voce verrà inserita finchè non verrà riattivato',
    'LBL_RECORDS_DELETED' => 'Tutte le precedenti voci di SuiteCRM Feed sono state cancellate, se il sistema di SuiteCRM Feed è abilitato, le nuove voci verranno generate automaticamente.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Sei sicuro di voler cancellare tutte le voci di SuiteCRM Feed?',
    'LBL_FLUSH_RECORDS' => 'Cancella Voci Feed',
    'LBL_ENABLE_FEED' => 'Abilita SuiteCRM Feed',
    'LBL_ENABLE_MODULE_LIST' => 'Attiva Feeds per',
    'LBL_HOMEPAGE_TITLE' => 'I miei SuiteCRM Feed',
    'LNK_NEW_RECORD' => 'Crea SuiteCRM Feed',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visualizza Cronologia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_NEW_FORM_TITLE' => 'Nuovo SuiteCRM Feed',
    'LBL_ALL' => 'Tutto',
    'LBL_USER_FEED' => 'Utente Feed',
    'LBL_ENABLE_USER_FEED' => 'Attiva Utente Feed',
    'LBL_TO' => 'Visibile al Gruppo',
    'LBL_IS' => 'è',
    'LBL_DONE' => 'Fatto',
    'LBL_TITLE' => 'Titolo',
    'LBL_ROWS' => 'Righe',
    'LBL_CATEGORIES' => 'Moduli',
    'LBL_TIME_LAST_WEEK' => 'Settimana Precedente',
    'LBL_TIME_WEEKS' => 'settimane',
    'LBL_TIME_DAYS' => 'giorni',
    'LBL_TIME_YESTERDAY' => 'Ieri',
    'LBL_TIME_HOURS' => 'Ore',
    'LBL_TIME_HOUR' => 'Ore',
    'LBL_TIME_MINUTES' => 'Minuti',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Secondi',
    'LBL_TIME_SECOND' => 'Secondo',
    'LBL_TIME_AND' => 'e',
    'LBL_TIME_AGO' => 'fa',
// Activity stream
    'CREATED_CONTACT' => 'ha creato un <b>NUOVO</b> {0}',
    'CREATED_OPPORTUNITY' => 'ha creato un <b>NUOVO</b> {0}',
    'CREATED_CASE' => 'ha creato un <b>NUOVO</b> {0}',
    'CREATED_LEAD' => 'ha creato un <b>NUOVO</b> {0}',
    'FOR' => 'per', // Activity stream for cases
    'FOR_AMOUNT' => 'per importo', // Activity stream for cases
    'CLOSED_CASE' => 'ha <b>CHIUSO</b> un {0} ',
    'CONVERTED_LEAD' => 'ha <b>CONVERTITO</b> un {0}',
    'WON_OPPORTUNITY' => 'ha <b>VINTO</b> un {0}',
    'WITH' => 'con',

    'LBL_LINK_TYPE_Link' => 'Collegamento',
    'LBL_LINK_TYPE_Image' => 'Immagine',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Selezionare',
    'LBL_POST' => 'Pubblica',
    'LBL_AUTHENTICATE' => 'Autentica',
    'LBL_AUTHENTICATION_PENDING' => 'Non tutti gli account esterni che hai selezionato sono stati autenticati. Clicca &#39;Annulla&#39; per tornare alle Opzioni e autenticare gli account esterni, oppure clicca &#39;Ok&#39; per procedere senza autenticazione.',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzato' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Mostra più opzioni',
    'LBL_HIDE_OPTIONS' => 'Nascondi Opzioni',
    'LBL_VIEW' => 'Visualizza',
    'LBL_POST_TITLE' => 'Pubblica l&amp;amp;#39;aggiornamento di stato per',
    'LBL_URL_LINK_TITLE' => 'Link URL da usare',
);
