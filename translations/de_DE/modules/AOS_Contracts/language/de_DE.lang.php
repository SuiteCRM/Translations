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
    'LBL_ASSIGNED_TO_NAME' => 'Vertragsverwaltung',
    'LBL_CONTRACT_ACCOUNT' => 'Firma',
    'LBL_OPPORTUNITY' => 'Verkaufschancen',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellt am',
    'LBL_DATE_MODIFIED' => 'Geändert am',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Vertragstitel',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FORM_TITLE' => 'Vertragsliste',
    'LBL_MODULE_NAME' => 'Verträge',
    'LBL_MODULE_TITLE' => 'Verträge: Startseite',
    'LBL_HOMEPAGE_TITLE' => 'Meine Verträge',
    'LNK_NEW_RECORD' => 'Neuer Vertrag',
    'LNK_LIST' => 'Veträge ansehen',
    'LBL_SEARCH_FORM_TITLE' => 'Verträge suchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neuer Vertrag',
    'LBL_CONTRACT_NAME' => 'Name des Vertrags',
    'LBL_REFERENCE_CODE ' => 'Referenz Code ',
    'LBL_START_DATE' => 'Startdatum',
    'LBL_END_DATE' => 'Enddatum',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Vertragswert',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Unterschrift Kunde Datum',
    'LBL_COMPANY_SIGNED_DATE' => 'Unterschrift Unternehmen Datum',
    'LBL_RENEWAL_REMINDER' => ' Erinnerung für Vertragserneuerung',
    'LBL_RENEWAL_REMINDER_DATE' => 'Erinnerungsdatum Verlängerung',
    'LBL_CONTRACT_TYPE' => 'Vertragstyp',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Gruppe hinzufügen',
    'LBL_DELETE_GROUP' => 'Gruppe löschen',
    'LBL_GROUP_NAME' => 'Gruppenname',
    'LBL_GROUP_TOTAL' => 'Gruppensumme',
    'LBL_PRODUCT_QUANITY' => 'Menge',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Teilenummer',
    'LBL_PRODUCT_NOTE' => 'Notiz',
    'LBL_PRODUCT_DESCRIPTION' => 'Beschreibung',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Rabatt',
    'LBL_UNIT_PRICE' => 'Verkaufspreis',
    'LBL_TOTAL_PRICE' => 'Gesamt',
    'LBL_VAT' => 'Steuer',
    'LBL_VAT_AMT' => 'MwSt.-Betrag',
    'LBL_SERVICE_NAME' => 'Dienstleistung',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Verkaufspreis',
    'LBL_SERVICE_DISCOUNT' => 'Rabatt',
    'LBL_LINE_ITEMS' => 'Zeilenelemente',
    'LBL_SUBTOTAL_AMOUNT' => 'Zwischensumme',
    'LBL_DISCOUNT_AMOUNT' => 'Rabatt',
    'LBL_TAX_AMOUNT' => 'Steuer',
    'LBL_SHIPPING_AMOUNT' => 'Versand',
    'LBL_TOTAL_AMT' => 'Gesamt',
    'LBL_GRAND_TOTAL' => 'Gesamtbetrag',
    'LBL_SHIPPING_TAX' => 'Versandsteuer',
    'LBL_SHIPPING_TAX_AMT' => 'Versandsteuer',
    'LBL_ADD_PRODUCT_LINE' => 'Produktzeile hinzufügen',
    'LBL_ADD_SERVICE_LINE' => 'Servicezeile hinzufügen',
    'LBL_PRINT_AS_PDF' => 'Als PDF drucken',
    'LBL_EMAIL_PDF' => 'PDF mit E-Mail versenden',
    'LBL_PDF_NAME' => 'Vertrag',
    'LBL_EMAIL_NAME' => 'Vertrag für',
    'LBL_NO_TEMPLATE' => 'FEHLER\nKeine Vorlagen gefunden. Wenn Sie noch keine Vertragsvorlage erstellt haben, gehen Sie zum PDF Vorlagenmodul und erstellen Sie eine',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Vertragswert (Standardwährung)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Zwischensumme (Währung)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabatt (Währung)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Steuer (Währung)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Versand (Währung)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Gesamt (Währung)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Versandsteuer (Standardwährung)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Gesamtsumme (Währung)',

    'LBL_CALL_ID' => 'Anrufer Nummer',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Einzelposten-Gruppen',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkt-Angebote',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Angebote: Verträge',
);
