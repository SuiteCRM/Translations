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
    'LBL_MODULE_NAME' => 'Lehetőségek',
    'LBL_MODULE_TITLE' => 'Lehetőségek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Lehetőségek keresése',
    'LBL_LIST_FORM_TITLE' => 'Lehetőségek listája',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség Neve:',
    'LBL_OPPORTUNITY' => 'Lehetőség:',
    'LBL_NAME' => 'Lehetőség neve',
    'LBL_INVITEE' => 'Kapcsolattartók',
    'LBL_CURRENCIES' => 'Pénznemek',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Név',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_AMOUNT' => 'Lehetőség összege',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Összeg',
    'LBL_LIST_DATE_CLOSED' => 'Bezárás',
    'LBL_LIST_SALES_STAGE' => 'Eladási szint:',
    'LBL_ACCOUNT_ID' => 'Számla ID',
    'LBL_CURRENCY_NAME' => 'Pénznem neve',
    'LBL_CURRENCY_SYMBOL' => 'Pénznem szimbóluma',

    'UPDATE' => 'Lehetőség - Pénznem frissítése',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_AMOUNT' => 'Lehetőség összege:',
    'LBL_AMOUNT_USDOLLAR' => 'Összeg:',
    'LBL_CURRENCY' => 'Pénznem',
    'LBL_DATE_CLOSED' => 'Várható lezárási dátum:',
    'LBL_TYPE' => 'Típus:',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_NEXT_STEP' => 'Következő lépés:',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
    'LBL_SALES_STAGE' => 'Értékesítési szakasz:',
    'LBL_PROBABILITY' => 'Valószínűség (%):',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DUPLICATE' => 'Lehet, hogy duplikált lehetőség',
    'MSG_DUPLICATE' => 'A lehetőség rekord, amelyet duplikált, már létezik. Az alábbi lehetőség rekordok ugyanazzal a névvel szerepelnek. Folytatáshoz kattintson a Mentés gombra egy új lehetőség létrehozásához vagy a Mégsem gombra a modul visszatéréséhez a lehetőség létrehozása nélkül.',
    'LBL_NEW_FORM_TITLE' => 'Lehetőség létrehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_OPPORTUNITY_LIST' => 'Lehetőségek nézet',
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a lehetőség törléséhez!',
    'LBL_TOP_OPPORTUNITIES' => 'Legjobb nyitott lehetőségeim',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Biztos törölni akarja ezt a lehetőséget a projektből?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Lezárt lehetőségeim',
    'LBL_TOTAL_OPPORTUNITIES' => 'Lehetőségek összesen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lezárt, megnyert lehetőségek',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó:',
    'LBL_MODIFIED_NAME' => 'Módosítva felhasználó neve szerint',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampányok',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LNK_IMPORT_OPPORTUNITIES' => 'Lehetőségek importja',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Szerződések',
    'LBL_AOS_QUOTES' => 'Ajánlatok',
);
