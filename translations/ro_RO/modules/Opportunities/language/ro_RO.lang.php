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
    'LBL_MODULE_NAME' => 'Oportunităţi',
    'LBL_MODULE_TITLE' => 'Oportunități: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Caută oportunități',
    'LBL_LIST_FORM_TITLE' => 'Lista de oportunități',
    'LBL_OPPORTUNITY_NAME' => 'Nume Oportunitate:',
    'LBL_OPPORTUNITY' => 'Oportunitate:',
    'LBL_NAME' => 'Nume oportunitate',
    'LBL_INVITEE' => 'Contacte',
    'LBL_CURRENCIES' => 'Valute',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nume',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_AMOUNT' => 'Cantitate Oportunitate',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Suma, valoare',
    'LBL_LIST_DATE_CLOSED' => 'Închide',
    'LBL_LIST_SALES_STAGE' => 'Stadiul',
    'LBL_ACCOUNT_ID' => 'ID Cont',
    'LBL_CURRENCY_NAME' => 'Nume Monedă',
    'LBL_CURRENCY_SYMBOL' => 'Simbol Monedă',

    'UPDATE' => 'Oportunități - actualizare valută',
    'LBL_ACCOUNT_NAME' => 'Nume Cont:',
    'LBL_AMOUNT' => 'Cantitate Oportunitate:',
    'LBL_AMOUNT_USDOLLAR' => 'Suma:',
    'LBL_CURRENCY' => 'Monedă:',
    'LBL_DATE_CLOSED' => 'Dată Așteaptă Închidere:',
    'LBL_TYPE' => 'Tip:',
    'LBL_CAMPAIGN' => 'Campanie:',
    'LBL_NEXT_STEP' => 'Următorul pas:',
    'LBL_LEAD_SOURCE' => 'Sursă conversie:',
    'LBL_SALES_STAGE' => 'Stadiu:',
    'LBL_PROBABILITY' => 'Probabilitate (%):',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DUPLICATE' => 'Posibilă duplicare de oportunitate',
    'MSG_DUPLICATE' => 'Înregistrarea unei oportunități pe care urmează să o creați poate fi un duplicat ul unei alte înregistrări de oportunitate existente. Înregistrările de oportunitate care conțin nume similare sunt listate mai jos.<br>Faceți clic pe Salvare pentru a continua crearea acestei noi oportunități sau faceți clic pe Anulare pentru a reveni la modul fără a crea oportunitatea.',
    'LBL_NEW_FORM_TITLE' => 'Creează oportunitate',
    'LNK_NEW_OPPORTUNITY' => 'Creează oportunitate',
    'LNK_OPPORTUNITY_LIST' => 'Vezi oportunități',
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie să fie specificat pentru a șterge afacerea.',
    'LBL_TOP_OPPORTUNITIES' => 'Topul oportunităților deschise',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sunteți sigur că doriți să eliminați această oportunitate din proiect?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunităţi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Piste',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documente',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Oportunitățile mele închise',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total oportunități',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunități câștigate și închise',
    'LBL_ASSIGNED_TO_ID' => 'Atribuit utilizatorului:',
    'LBL_MODIFIED_NAME' => 'Modificat de Nume de Utilizator',
    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Modificata de Utilizator',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanii',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiecte',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importă oportunități',
    'LBL_EDITLAYOUT' => 'Editare aranjament' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contracte',
    'LBL_AOS_QUOTES' => 'Oferte',
);
