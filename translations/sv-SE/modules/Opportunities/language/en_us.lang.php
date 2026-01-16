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
    'LBL_MODULE_NAME' => 'Tillfällen',
    'LBL_MODULE_TITLE' => 'Affärer: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök affärer',
    'LBL_LIST_FORM_TITLE' => 'Affärslista',
    'LBL_OPPORTUNITY_NAME' => 'Affärs namn:',
    'LBL_OPPORTUNITY' => 'Affär:',
    'LBL_NAME' => 'Affärsnamn',
    'LBL_INVITEE' => 'Kontakter',
    'LBL_CURRENCIES' => 'Valutor',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Namn',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_AMOUNT' => 'Belopp',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Summa',
    'LBL_LIST_DATE_CLOSED' => 'Stäng',
    'LBL_LIST_SALES_STAGE' => 'Säljläge',
    'LBL_ACCOUNT_ID' => 'Företags-ID',
    'LBL_CURRENCY_NAME' => 'Valuta namn',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
    'LBL_DAYS_OPEN_FOR' => 'This Opportunity Was Open For',

    'UPDATE' => 'Affär - Valutauppdatering',
    'LBL_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_AMOUNT' => 'Affärsmöjlighet summa',
    'LBL_AMOUNT_USDOLLAR' => 'Summa:',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_DATE_CLOSED' => 'Förväntat avslutsdatum:',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampanj:',
    'LBL_NEXT_STEP' => 'Nästa steg:',
    'LBL_LEAD_SOURCE' => 'Lead-källa:',
    'LBL_SALES_STAGE' => 'Säljläge:',
    'LBL_PROBABILITY' => 'Sannolikhet (%):',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DUPLICATE' => 'Möjlig affärsdublett',
    'MSG_DUPLICATE' => 'Att skapa denna affär kan potentiellt skapa en affärsdublett. Du kan antingen välja en affär från listan nedan eller klicka på Skapa ny affär för att fortsätta att skapa en ny affär från tidigare angivna data.',
    'LBL_NEW_FORM_TITLE' => 'Skapa affär',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affär',
    'LNK_OPPORTUNITY_LIST' => 'Affärer',
    'ERR_DELETE_RECORD' => 'Ett postnummer måste specificeras för att ta bort affären.',
    'LBL_TOP_OPPORTUNITIES' => 'Mina toppnoterade öppna affärer',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Är du säker på att du vill ta bort denna affär från detta projekt?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tillfällen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Kundämnen',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mina Stängda Möjligheter',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totala Möjligheter',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Stängda Vunna Möjligheter',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare:',
    'LBL_MODIFIED_NAME' => 'Ändrad av Användar Namn',
    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_MODIFIED_USER' => 'Ändrad användare',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjer',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importera affärsmöjligheter',
    'LBL_EDITLAYOUT' => 'Redigera layout'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Kontrakt',
    'LBL_AOS_QUOTES' => 'Offert',

    'LBL_SIZE_ANALYSIS' => 'Storleksanalys',
    'LBL_POSITION' => 'Position',
    'LBL_OUT_OF' => 'Out of',
);
