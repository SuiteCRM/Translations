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
    'LBL_MODULE_NAME' => 'Prilike',
    'LBL_MODULE_TITLE' => 'Prodajne prilike: Početna',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga prodajnih prilika',
    'LBL_LIST_FORM_TITLE' => 'Lista prodajnih prilika',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY' => 'Prodajna prilika',
    'LBL_NAME' => 'Ime prodajne prilike',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_CURRENCIES' => 'Valute',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Ime',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime tvrtke',
    'LBL_LIST_AMOUNT' => 'Iznos prodajne prilike',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Iznos',
    'LBL_LIST_DATE_CLOSED' => 'Zatvori',
    'LBL_LIST_SALES_STAGE' => 'Faza prodaje',
    'LBL_ACCOUNT_ID' => 'ID tvrtke',
    'LBL_CURRENCY_NAME' => 'Ime valute',
    'LBL_CURRENCY_SYMBOL' => 'Simbol valute',

    'UPDATE' => 'Prodajna prilika - ažuriranje valute',
    'LBL_ACCOUNT_NAME' => 'Ime tvrtke:',
    'LBL_AMOUNT' => 'Iznos prodajne prilike:',
    'LBL_AMOUNT_USDOLLAR' => 'Iznos:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Očekivani datum zatvaranja:',
    'LBL_TYPE' => 'Tip:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_NEXT_STEP' => 'Sljedeći korak:',
    'LBL_LEAD_SOURCE' => 'Glavni izvor:',
    'LBL_SALES_STAGE' => 'Faza prodaje:',
    'LBL_PROBABILITY' => 'Vjerojatnost (%):',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DUPLICATE' => 'Mogući duplikat prodajne prilike',
    'MSG_DUPLICATE' => 'Prodajna koju želite kreirati mogući je duplikat računa koji već postoji. Prodajne prilike sličnih naziva izlistane su ispod.<br>Kliknite na Spremi za nastavak kreiranja nove prodajne prilike ili kliknite na Odustani za povratak na modul bez kreiranja prodajne prilike.',
    'LBL_NEW_FORM_TITLE' => 'Kreiraj priliku',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj priliku',
    'LNK_OPPORTUNITY_LIST' => 'Pregledaj prodajne prilike',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti označen kako bi izbrisala prodajna prilika.',
    'LBL_TOP_OPPORTUNITIES' => 'Moj top otvorene prodajne prilike',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Jeste li sigurni želite li ukloniti ovu prodajnu priliku od projekta?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prilike',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodijeljeni korisnik',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zatvorene prodajne prilike',
    'LBL_TOTAL_OPPORTUNITIES' => 'Ukupno prodajne prilike',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Zatvorene dobivene prodajne prilike',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeni korisnik:',
    'LBL_MODIFIED_NAME' => 'Izmijenjeno od korisničkog imena',
    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_MODIFIED_USER' => 'Modificirani korisnik',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanje',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LNK_IMPORT_OPPORTUNITIES' => 'Uvoz prodajnih prilika',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Ugovori',
    'LBL_AOS_QUOTES' => 'Ponude',
);
