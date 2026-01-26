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
    'LBL_NAME' => 'Titolo',
    'LBL_CREATED_USER' => 'Creato dall\'utente',
    'LBL_MODIFIED_USER' => 'Modificato dall\'utente',
    'ERR_DELETE_RECORD' => 'Per eliminare l\'azienda è necessario specificare il numero del record.',
    'LBL_ACCOUNT_NAME' => 'Titolo',
    'LBL_ACCOUNT' => 'Azienda:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ADDRESS_INFORMATION' => 'Informazioni sull\'indirizzo',
    'LBL_ANNUAL_REVENUE' => 'Fatturato annuo:',
    'LBL_ANY_ADDRESS' => 'Qualsiasi indirizzo:',
    'LBL_ANY_EMAIL' => 'Qualsiasi Email:',
    'LBL_ANY_PHONE' => 'Qualsiasi numero di telefono:',
    'LBL_RATING' => 'Valutazione',
    'LBL_ASSIGNED_USER' => 'Utente',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatturazione, Città:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatturazione, Nazione:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatturazione, CAP:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatturazione, Provincia:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Indirizzo Fatturazione, Via (2)',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Indirizzo Fatturazione, Via (3)',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Indirizzo Fatturazione, Via (4)',
    'LBL_BILLING_ADDRESS_STREET' => 'Indirizzo Fatturazione, Via:',
    'LBL_BILLING_ADDRESS' => 'Indirizzo di Fatturazione:',
    'LBL_ACCOUNT_INFORMATION' => 'Informazioni',
    'LBL_CITY' => 'Città:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aziende',
    'LBL_DUPLICATE' => 'Possibile Azienda duplicata',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Dipendenti:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Settore:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_CITY' => 'Città',
    'LBL_LIST_EMAIL_ADDRESS' => 'Indirizzo Email',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_STATE' => 'Provincia',
    'LBL_MEMBER_OF' => 'Membro di:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizzazioni membri',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
    'LBL_OTHER_PHONE' => 'Altro Telefono:',
    'LBL_OWNERSHIP' => 'Proprietario:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID dell\'Account genitore',
    'LBL_PHONE_ALT' => 'Telefono Alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefono Ufficio:',
    'LBL_PHONE' => 'Telefono:',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_SAVE_ACCOUNT' => 'Salva Azienda',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Spedizione, Città:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Spedizione, Nazione:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Spedizione, CAP:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Spedizione, Provincia:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Indirizzo Spedizione, Via 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Indirizzo Spedizione, Via 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Indirizzo Spedizione, Via 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Spedizione, Via:',
    'LBL_SHIPPING_ADDRESS' => 'Spedizione, Indirizzo:',
    'LBL_STATE' => 'Provincia:',
    'LBL_TICKER_SYMBOL' => 'Simbolo Ticker:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sito web:',
    'LNK_ACCOUNT_LIST' => 'Aziende',
    'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
    'MSG_DUPLICATE' => 'L\'inserimento di questa Azienda potrebbe generate un duplicato. Puoi selezionare un\'Azienda dall\'elenco o cliccare su Salva per confermare l\'inserimento della nuova Azienda con i dati inseriti.',
    'MSG_SHOW_DUPLICATES' => 'L\'inserimento di questa Azienda potrebbe generate un duplicato. Clicca su Salva per continuare inserendo questa Azienda oppure clicca su Cancella per annullare.',
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record ?',
    'LBL_LIST_FORM_TITLE' => 'Elenco Preventivi',
    'LBL_MODULE_NAME' => 'Preventivi',
    'LBL_MODULE_TITLE' => 'Preventivi: Home',
    'LBL_HOMEPAGE_TITLE' => 'I Miei Preventivi',
    'LNK_NEW_RECORD' => 'Nuova Offerta',
    'LNK_LIST' => 'Preventivi',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Preventivi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visualizza Cronologia',
    'LBL_NEW_FORM_TITLE' => 'Nuovo Preventivo',
    'LBL_TERMS_C' => 'Condizioni',
    'LBL_APPROVAL_ISSUE' => 'Problemi di approvazione',
    'LBL_APPROVAL_STATUS' => 'Stato approvazione',
    'LBL_BILLING_ACCOUNT' => 'Azienda',
    'LBL_BILLING_CONTACT' => 'Contatto',
    'LBL_EXPIRATION' => 'Valido fino al',
    'LBL_QUOTE_NUMBER' => 'Prevetivo Numero',
    'LBL_OPPORTUNITY' => 'Opportunità',
    'LBL_TEMPLATE_DDOWN_C' => 'Modello Preventivo',
    'LBL_STAGE' => 'Fase di preventivo',
    'LBL_TERM' => 'Condizioni di Pagamento',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotale',
    'LBL_DISCOUNT_AMOUNT' => 'Sconto',
    'LBL_TAX_AMOUNT' => 'Tasse',
    'LBL_SHIPPING_AMOUNT' => 'Spedizione',
    'LBL_TOTAL_AMT' => 'Totale',
    'VALUE' => 'Titolo',
    'LBL_EMAIL_ADDRESSES' => 'Indirizzi Email',
    'LBL_LINE_ITEMS' => 'Listini',
    'LBL_GRAND_TOTAL' => 'Totale',
    'LBL_INVOICE_STATUS' => 'Stato fattura',
    'LBL_PRODUCT_QUANITY' => 'Quantità',
    'LBL_PRODUCT_NAME' => 'Prodotto',
    'LBL_PART_NUMBER' => 'Codice',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrizione',
    'LBL_LIST_PRICE' => 'Elenco',
    'LBL_DISCOUNT_AMT' => 'Sconto',
    'LBL_UNIT_PRICE' => 'Prezzo di Vendita',
    'LBL_TOTAL_PRICE' => 'Totale',
    'LBL_VAT' => 'Tasse', // VAT
    'LBL_VAT_AMT' => 'Importo IVA', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Aggiungi Linea Prodotto',
    'LBL_SERVICE_NAME' => 'Servizio',
    'LBL_SERVICE_LIST_PRICE' => 'Elenco',
    'LBL_SERVICE_PRICE' => 'Prezzo di Vendita',
    'LBL_SERVICE_DISCOUNT' => 'Sconto',
    'LBL_ADD_SERVICE_LINE' => 'Aggiungi riga servizio ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Cancella',
    'LBL_CONVERT_TO_INVOICE' => 'Trasforma in Fattura',
    'LBL_PRINT_AS_PDF' => 'Converti in PDF',
    'LBL_EMAIL_QUOTE' => 'Spedisci preventivo per Email',
    'LBL_CREATE_CONTRACT' => 'Nuovo Contratto',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Preventivo',
    'LBL_EMAIL_NAME' => 'Preventivo per ',
    'LBL_QUOTE_DATE' => 'Data preventivo',
    'LBL_NO_TEMPLATE' => 'ERROR\nSeleziona un modello modificando il preventivo.\nSe non hai ancora create un modello di preventivo, vai al modulo modelli PDF e crea un nuovo modello.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Imponibile + IVA',//pre shipping
    'LBL_EMAIL_PDF' => 'Invia Pdf via e-mail',
    'LBL_ADD_GROUP' => 'Aggiungi Gruppo',
    'LBL_DELETE_GROUP' => 'Cancella Gruppo',
    'LBL_GROUP_NAME' => 'Nome del Gruppo',
    'LBL_GROUP_TOTAL' => 'Totale Gruppo',
    'LBL_SHIPPING_TAX' => 'IVA Spedizione',
    'LBL_SHIPPING_TAX_AMT' => 'IVA Spedizione',
    'LBL_IMPORT_LINE_ITEMS' => 'Importa riga Prodotto',
    'LBL_CREATE_OPPORTUNITY' => 'Nuova Opportunità',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotale (valuta predefinita)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Sconto (Valuta Standard)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'IVA (Valuta Standard)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Spedizione (Valuta Standard)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Totale (valuta predefinita)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'IVA Spedizione (Valuta Standard)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Totale (Valuta Standard)',
    'LBL_QUOTE_TO' => 'Preventivo Per',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotale + Tassa (valuta predefinita)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Offerte: Contratti',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offerte: Fatture',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Gruppi di Prodotti',
    'LBL_AOS_PRODUCT_QUOTES' => 'Offerte Prodotto',
    'LBL_AOS_QUOTES_PROJECT' => 'Preventivi: progetto',
);
