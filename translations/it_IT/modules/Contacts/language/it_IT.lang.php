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
    'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
    'LBL_ACCOUNT_ID' => 'ID Azienda:',
    'LBL_ACCOUNT_NAME' => 'Nome Azienda:',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADDRESS_INFORMATION' => 'Informazioni sull\'indirizzo',
    'LBL_ALT_ADDRESS_CITY' => 'Indirizzo Alternativo, Città:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Indirizzo Alternativo, Nazione:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Indirizzo Alternativo, CAP:',
    'LBL_ALT_ADDRESS_STATE' => 'Indirizzo Alternativo, Provincia:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Indirizzo Alternativo, Via [2]:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Indirizzo Alternativo, Via [3]:',
    'LBL_ALT_ADDRESS_STREET' => 'Indirizzo Alternativo, Via:',
    'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ALT_ADDRESS' => 'Altro Indirizzo:',
    'LBL_ANY_ADDRESS' => 'Qualsiasi indirizzo:',
    'LBL_ANY_EMAIL' => 'Qualsiasi Email:',
    'LBL_ANY_PHONE' => 'Qualsiasi numero di telefono:',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato',
    'LBL_ASSISTANT_PHONE' => 'Telefono Assistente:',
    'LBL_ASSISTANT' => 'Assistente:',
    'LBL_BIRTHDATE' => 'Data di nascita:',
    'LBL_CITY' => 'Città:',
    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_CONTACT_INFORMATION' => 'Informazioni', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contatto:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contatto-Opportunità:',
    'LBL_CONTACT_ROLE' => 'Ruolo:',
    'LBL_CONTACT' => 'Contatto:',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
    'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
    'LBL_CREATED_CONTACT' => 'Creato un nuovo contatto',
    'LBL_CREATED_MEETING' => 'Creato un nuovo appuntamento',
    'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
    'LBL_DATE_MODIFIED' => 'Data Modifica:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contatti',
    'LBL_DEPARTMENT' => 'Divisione:',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Report Diretti',
    'LBL_DO_NOT_CALL' => 'Non chiamare:',
    'LBL_DUPLICATE' => 'Possibili Contatti Duplicati',
    'LBL_EMAIL_ADDRESS' => 'Indirizzo Email:',
    'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
    'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
    'LBL_EXISTING_CONTACT' => 'Usato un contatto esistente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usata un´opportunità esistente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_HOME_PHONE' => 'Pagina iniziale:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importa vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo contatto importando una vCard dal tuo computer.',
    'LBL_INVALID_EMAIL' => 'Email non valida:',
    'LBL_INVITEE' => 'Report Diretti',
    'LBL_LAST_NAME' => 'Cognome:',
    'LBL_LEAD_SOURCE' => 'Fonte del lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CONTACT_NAME' => 'Contatto',
    'LBL_LIST_CONTACT_ROLE' => 'Ruolo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Elenco Contatti',
    'LBL_LIST_LAST_NAME' => 'Cognome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PHONE' => 'Telefono ufficio',
    'LBL_LIST_TITLE' => 'Funzione',
    'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
    'LBL_MODIFIED' => 'Modificato Da:',
    'LBL_MODULE_NAME' => 'Contatti',
    'LBL_MODULE_TITLE' => 'Contatti: Home',
    'LBL_NAME' => 'Nome:',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Contatto',
    'LBL_NOTE_SUBJECT' => 'Oggetto della Nota',
    'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
    'LBL_OPP_NAME' => 'Nome Opportunità:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID Ruolo Opportunità:',
    'LBL_OPPORTUNITY_ROLE' => 'Ruolo Opportunità',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_PORTAL_APP' => 'Applicazione Portale',
    'LBL_PORTAL_INFORMATION' => 'Informazioni Portale',
    'LBL_PORTAL_NAME' => 'Nome Portale:',
    'LBL_STREET' => 'Indirizzo',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Città:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Principale, Nazione:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Indirizzo Primario, Via [2]:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Indirizzo Primario, Via [3]:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via:',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
    'LBL_PRODUCTS_TITLE' => 'Prodotti',
    'LBL_REPORTS_TO_ID' => 'ID Dipende da:',
    'LBL_REPORTS_TO' => 'Dipende da:',
    'LBL_RESOURCE_NAME' => 'Nome Risorsa',
    'LBL_SALUTATION' => 'Titolo',
    'LBL_SAVE_CONTACT' => 'Salva Contatto',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Contatto',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Aggiungi i Contatti selezionati',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Aggiungi i Contatti selezionati',
    'LBL_STATE' => 'Provincia:',
    'LBL_SYNC_CONTACT' => 'Sincronizza in Outlook®:',
    'LBL_PROSPECT_LIST' => 'Elenco Prospect',
    'LBL_TITLE' => 'Professione:',
    'LNK_CONTACT_LIST' => 'Visualizza Contatti',
    'LNK_IMPORT_VCARD' => 'Crea Contatto da vCard',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
    'LNK_NEW_CALL' => 'Schedula chiamata',
    'LNK_NEW_CASE' => 'Nuovo Reclamo',
    'LNK_NEW_CONTACT' => 'Crea Contatto',
    'LNK_NEW_EMAIL' => 'Archivia Email',
    'LNK_NEW_MEETING' => 'Schedula appuntamento',
    'LNK_NEW_NOTE' => 'Nuova Nota',
    'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
    'LNK_NEW_TASK' => 'Nuovo Compito',
    'LNK_SELECT_ACCOUNT' => "Seleziona Azienda",
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creazione di una opportunità richiede l´esistenza di una azienda.\n Si prega di creare un´azienda o selezionarne una già esistente.',
    'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo contatto dal reclamo?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copia indirizzo primario',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copia altro indirizzo',

    'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Errori',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_PROJECTS_RESOURCES' => 'Risorse Progetti',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagne',
    'LBL_LIST_CITY' => 'Città',
    'LBL_LIST_STATE' => 'Provincia',
    'LBL_HOMEPAGE_TITLE' => 'I miei contatti',
    'LBL_OPPORTUNITIES' => 'Opportunità',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    'LNK_IMPORT_CONTACTS' => 'Importa Contatti',

    // SNIP
    'LBL_USER_SYNC' => 'Sync Utente',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Eventi',

    'LBL_AOP_CASE_UPDATES' => 'Aggiornamenti Reclami',
    'LBL_CREATE_PORTAL_USER' => 'Creazione Utente Portale',
    'LBL_ENABLE_PORTAL_USER' => 'Abilita Utente Portale',
    'LBL_DISABLE_PORTAL_USER' => 'Disabilita Utente Portale',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Creazione dell\'Utente Portale Fallita',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Abilitazione dell\'Utente Portale Fallita',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Disabilitazione dell\'Utente Portale Fallita',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Creazione Utente Portale',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Abilitazione Utente Portale',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabilitazione Utente Portale',
    'LBL_NO_JOOMLA_URL' => 'URL del portale non specificato',
    'LBL_PORTAL_USER_TYPE' => 'Tipo Utente Portale',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disattivato',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID Account Joomla',

    'LBL_AOS_CONTRACTS' => 'Contratti',
    'LBL_AOS_INVOICES' => 'Fatture',
    'LBL_AOS_QUOTES' => 'Preventivi',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contatti progetto dal titolo contatti',

    'LBL_LIST_INVITE_STATUS' => 'Stato Invito',
);
