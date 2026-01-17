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
    'LBL_MODULE_NAME' => 'Pardavimas',
    'LBL_MODULE_TITLE' => 'Pardavimas: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Pardavimo paieška',
    'LBL_LIST_FORM_TITLE' => 'Pardavimų sąrašas',
    'LBL_NAME' => 'Pardavimo pavadinimas',
    'LBL_LIST_SALE_NAME' => 'Vardas',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_AMOUNT' => 'Suma',
    'LBL_LIST_DATE_CLOSED' => 'Užbaigti',
    'LBL_LIST_SALE_STAGE' => 'Pardavimų etapas',
    'LBL_ACCOUNT_ID' => 'Kliento ID',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_AMOUNT' => 'Suma:',
    'LBL_AMOUNT_USDOLLAR' => 'Suma Lt:',
    'LBL_CURRENCY' => 'Valiuta:',
    'LBL_DATE_CLOSED' => 'Pardavimo data:',
    'LBL_TYPE' => 'Tipas:',
    'LBL_CAMPAIGN' => 'Kampanija:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialus kontaktas',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektai',
    'LBL_NEXT_STEP' => 'Kitas žingsnis:',
    'LBL_LEAD_SOURCE' => 'Potencialaus Kliento Šaltinis:',
    'LBL_SALES_STAGE' => 'Pardavimo etapas:',
    'LBL_PROBABILITY' => 'Tikimybė (%):',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DUPLICATE' => 'Galimas pardavimų dubliavimasis',
    'MSG_DUPLICATE' => 'Jūs dubliuojate pardavimą. Jei norite dubliuoti paspauskite Saugoti ir sukurti, kitu atveju spauskite Atšaukti ir sugrįšite į modulį nesukūrę pardavimo.',
    'LBL_NEW_FORM_TITLE' => 'Sukurti pardavimą',
    'ERR_DELETE_RECORD' => 'Jūs turite nurodyti įrašo numerį, kad galėtumėte ištrinti pardavimus.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pardavimas',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_ASSIGNED_TO_NAME' => 'Vartotojas:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas vartotojas',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo ID',
    'LBL_MODIFIED_NAME' => 'Redagavo',
    'LBL_SALE_INFORMATION' => 'Pardavimo informacija',
    'LBL_CURRENCY_NAME' => 'Valiutos Pavadinimas',
    'LBL_CURRENCY_SYMBOL' => 'Valiutos Simbolis',
    'LBL_EDIT_BUTTON' => 'Redaguoti',
    'LBL_REMOVE' => 'Išmesti',

);
