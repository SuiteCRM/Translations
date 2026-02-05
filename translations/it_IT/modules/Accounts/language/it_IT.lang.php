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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenti',
    // Dashlet Categories
    'LBL_CHARTS' => 'Grafici',
    'LBL_DEFAULT' => 'Viste',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'È necessario specificare un numero di record per eliminare l\'account.',
    'LBL_ACCOUNT_INFORMATION' => 'Informazioni', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Nome Azienda:',
    'LBL_ACCOUNT' => 'Azienda:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADDRESS_INFORMATION' => 'Informazioni sull\'indirizzo',
    'LBL_ANNUAL_REVENUE' => 'Fatturato annuo:',
    'LBL_ANY_ADDRESS' => 'Qualsiasi indirizzo:',
    'LBL_ANY_EMAIL' => 'Qualsiasi Email:',
    'LBL_ANY_PHONE' => 'Qualsiasi numero di telefono:',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatturazione, Città:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatturazione, Nazione:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatturazione, CAP:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatturazione, Provincia:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Indirizzo Fatturazione, Via (2)',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Indirizzo Fatturazione, Via (3)',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Indirizzo Fatturazione, Via (4)',
    'LBL_BILLING_ADDRESS_STREET' => 'Indirizzo Fatturazione, Via:',
    'LBL_BILLING_ADDRESS' => 'Indirizzo di Fatturazione:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Errori',
    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
    'LBL_CITY' => 'Città:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_DATE_ENTERED' => 'Data di Creazione:',
    'LBL_DATE_MODIFIED' => 'Data Modifica:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aziende',
    'LBL_DESCRIPTION_INFORMATION' => 'Descrizione informazioni',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_DUPLICATE' => 'Possibile Azienda duplicata',
    'LBL_EMAIL' => 'Indirizzo Email:',
    'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
    'LBL_EMAIL_ADDRESSES' => 'Indirizzi Email',
    'LBL_EMPLOYEES' => 'Dipendenti:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
    'LBL_HOMEPAGE_TITLE' => 'Le mie Aziende',
    'LBL_INDUSTRY' => 'Settore:',
    'LBL_INVALID_EMAIL' => 'Email non valida:',
    'LBL_INVITEE' => 'Contatti',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome',
    'LBL_LIST_CITY' => 'Città',
    'LBL_LIST_CONTACT_NAME' => 'Contatto',
    'LBL_LIST_EMAIL_ADDRESS' => 'Indirizzo Email',
    'LBL_LIST_FORM_TITLE' => 'Elenco Aziende',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_STATE' => 'Provincia',
    'LBL_MEMBER_OF' => 'Membro di:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizzazioni membri',
    'LBL_MODULE_NAME' => 'Aziende',
    'LBL_MODULE_TITLE' => 'Aziende: Home',
    'LBL_MODULE_ID' => 'Aziende',
    'LBL_NAME' => 'Nome:',
    'LBL_NEW_FORM_TITLE' => 'Nuova Azienda',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_OWNERSHIP' => 'Proprietario:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID dell\'Account genitore',
    'LBL_PHONE_ALT' => 'Telefono Alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefono Ufficio:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_PRODUCTS_TITLE' => 'Prodotti',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copia in Contatti',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copia...',
    'LBL_RATING' => 'Valutazione:',
    'LBL_SAVE_ACCOUNT' => 'Salva Azienda',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Azienda',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Spedizione, Città:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Spedizione, Nazione:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Spedizione, CAP:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Spedizione, Provincia:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Indirizzo Spedizione, Via 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Indirizzo Spedizione, Via 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Indirizzo Spedizione, Via 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Spedizione, Via:',
    'LBL_SHIPPING_ADDRESS' => 'Spedizione, Indirizzo:',
    'LBL_SIC_CODE' => 'Codice SIC (Class.Standard Industriale):',
    'LBL_STATE' => 'Provincia:',
    'LBL_TICKER_SYMBOL' => 'Simbolo Ticker:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sito web:',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LNK_ACCOUNT_LIST' => 'Visualizza Aziende',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'LNK_IMPORT_ACCOUNTS' => 'Importa Aziende',
    'MSG_DUPLICATE' => 'Creando questa azienda c\'è il rischio di creare un duplicato. Le aziende che contengono delle similitudini sono elencate qui sotto.<br>Cliccare Salva per proseguire con la creazione della nuova azienda, oppure cliccare Annulla per ritornare al modulo senza creare la nuova azienda.',
    'MSG_SHOW_DUPLICATES' => 'Creando questa azienda c\'è il rischio di creare un duplicato. Le aziende che contengono delle similitudini sono elencate qui sotto.<br>Cliccare Salva per proseguire con la creazione della nuova azienda, oppure cliccare Annulla per ritornare al modulo senza creare la nuova azienda.',
    'LBL_ASSIGNED_USER_NAME' => 'Assegnato a:',
    'LBL_PROSPECT_LIST' => 'Elenco Prospect',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
    //For export labels
    'LBL_PARENT_ID' => 'ID Padre',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Prodotti e servizi acquistati',

    'LBL_AOS_CONTRACTS' => 'Contratti',
    'LBL_AOS_INVOICES' => 'Fatture',
    'LBL_AOS_QUOTES' => 'Preventivi',
    'LBL_LIST_WEBSITE' => 'sito web',
);
