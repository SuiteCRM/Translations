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
    'LBL_MODULE_NAME' => 'Priložnosti',
    'LBL_MODULE_TITLE' => 'Priložnosti: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje priložnosti',
    'LBL_LIST_FORM_TITLE' => 'Seznam priložnosti',
    'LBL_OPPORTUNITY_NAME' => 'Ime Priložnosti:',
    'LBL_OPPORTUNITY' => 'Priložnost:',
    'LBL_NAME' => 'Ime priložnosti',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_CURRENCIES' => 'Valute',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Ime',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Partnerja',
    'LBL_LIST_AMOUNT' => 'Obseg priložnosti',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Količina',
    'LBL_LIST_DATE_CLOSED' => 'Zapri',
    'LBL_LIST_SALES_STAGE' => 'Stopnja prodaje',
    'LBL_ACCOUNT_ID' => 'ID partnerja',
    'LBL_CURRENCY_NAME' => 'Ime valute',
    'LBL_CURRENCY_SYMBOL' => 'Simbol valute',
    'LBL_DAYS_OPEN_FOR' => 'This Opportunity Was Open For',

    'UPDATE' => 'Posodobitev priložnosti-denarne valute',
    'LBL_ACCOUNT_NAME' => 'Ime Partnerja:',
    'LBL_AMOUNT' => 'Obseg priložnosti:',
    'LBL_AMOUNT_USDOLLAR' => 'Znesek:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Pričakovan datum zaključka:',
    'LBL_TYPE' => 'Tip:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_NEXT_STEP' => 'Naslednji korak:',
    'LBL_LEAD_SOURCE' => 'Vir potencialov:',
    'LBL_SALES_STAGE' => 'Faza prodaje:',
    'LBL_PROBABILITY' => 'Verjetnost (%):',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Možno podvajanje priložnosti',
    'MSG_DUPLICATE' => 'podvajate Priložnost. Lahko izberete Priložnost iz spodnjega seznama ali pa kliknite shrani ter ustvarite podvojeno Priložnost.',
    'LBL_NEW_FORM_TITLE' => 'Ustvari priložnost',
    'LNK_NEW_OPPORTUNITY' => 'Ustvari priložnost',
    'LNK_OPPORTUNITY_LIST' => 'Priložnosti',
    'ERR_DELETE_RECORD' => 'Za izbris priložnosti je potrebno definirati številko zapisa.',
    'LBL_TOP_OPPORTUNITIES' => 'Moje najboljše priložnosti',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Ste prepričani, da želite odstraniti to Priložnost iz projekta?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Priložnosti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciali',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen uporabnik',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zaprte priložnosti',
    'LBL_TOTAL_OPPORTUNITIES' => 'Skupno prIložnosti',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Zaprte dobljene priložnosti',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljen uporabnik:',
    'LBL_MODIFIED_NAME' => 'Spremenjeno s strani uporabnika',
    'LBL_CREATED_USER' => 'Ustvarjen kontakt',
    'LBL_MODIFIED_USER' => 'Spremenjen uporabnik',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanje',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LNK_IMPORT_OPPORTUNITIES' => 'Uvozi proložnosti',
    'LBL_EDITLAYOUT' => 'Uredi izgled'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Pogodbe',
    'LBL_AOS_QUOTES' => 'Ponudbe',

    'LBL_SIZE_ANALYSIS' => 'Size Analysis',
    'LBL_POSITION' => 'Position',
    'LBL_OUT_OF' => 'Out of',
);
