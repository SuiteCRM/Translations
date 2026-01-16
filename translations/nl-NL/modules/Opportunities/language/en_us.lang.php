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
    'LBL_MODULE_NAME' => 'Kansen',
    'LBL_MODULE_TITLE' => 'Kansen: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Kans zoeken',
    'LBL_LIST_FORM_TITLE' => 'Kansen',
    'LBL_OPPORTUNITY_NAME' => 'Kansnaam:',
    'LBL_OPPORTUNITY' => 'Kans:',
    'LBL_NAME' => 'Kansnaam',
    'LBL_INVITEE' => 'Contactpersonen',
    'LBL_CURRENCIES' => 'Valuta',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Naam',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_AMOUNT' => 'Bedrag',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Bedrag',
    'LBL_LIST_DATE_CLOSED' => 'Sluiten',
    'LBL_LIST_SALES_STAGE' => 'Verkoopstadium',
    'LBL_ACCOUNT_ID' => 'Relatie ID',
    'LBL_CURRENCY_NAME' => 'Valuta naam',
    'LBL_CURRENCY_SYMBOL' => 'Valuta symbool',
    'LBL_DAYS_OPEN_FOR' => 'Deze Kans was open voor',

    'UPDATE' => 'Kans - Valuta update',
    'LBL_ACCOUNT_NAME' => 'Relatienaam:',
    'LBL_AMOUNT' => 'Kansomvang:',
    'LBL_AMOUNT_USDOLLAR' => 'Bedrag:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Verwachte afsluitdatum:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_NEXT_STEP' => 'Volgende stap:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_SALES_STAGE' => 'Verkoopstadium:',
    'LBL_PROBABILITY' => 'Waarschijnlijkheid (%):',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele kans',
    'MSG_DUPLICATE' => 'Creating this opportunity may potentialy create a duplicate opportunity. You may either select an opportunity from the list below or you may click on Create New Opportunity to continue creating a new opportunity with the previously entered data.',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe kans',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LNK_OPPORTUNITY_LIST' => 'Kansen',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze kans te verwijderen.',
    'LBL_TOP_OPPORTUNITIES' => 'Mijn openstaande kansen',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Weet je zeker dat je deze Kans uit het project wilt verwijderen?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kansen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mijn gesloten kansen',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totaal kansen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnen kansen',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker:',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door gebruikersnaam',
    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import kansen',
    'LBL_EDITLAYOUT' => 'Bewerk lay-out'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contracten',
    'LBL_AOS_QUOTES' => 'Offerten',

    'LBL_SIZE_ANALYSIS' => 'Kans omvang analyse',
    'LBL_POSITION' => 'Positie',
    'LBL_OUT_OF' => 'Geen van de',
);
