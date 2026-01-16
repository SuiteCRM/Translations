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
    'LBL_MODULE_NAME' => 'Predaj',
    'LBL_MODULE_TITLE' => 'Predaj: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať predaje',
    'LBL_LIST_FORM_TITLE' => 'Zoznam predajov',
    'LBL_NAME' => 'Predajný názov',
    'LBL_LIST_SALE_NAME' => 'Meno',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_AMOUNT' => 'Suma',
    'LBL_LIST_DATE_CLOSED' => 'Uzavrieť',
    'LBL_LIST_SALE_STAGE' => 'Štádium predaja',
    'LBL_ACCOUNT_ID' => 'Firma ID',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Názov Firma:',
    'LBL_AMOUNT' => 'Suma:',
    'LBL_AMOUNT_USDOLLAR' => 'Suma USD:',
    'LBL_CURRENCY' => 'Mena:',
    'LBL_DATE_CLOSED' => 'Očakávaný dátum uzavretia:',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampaň:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciatívy',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_NEXT_STEP' => 'Ďalší krok:',
    'LBL_LEAD_SOURCE' => 'Zdroj informácií:',
    'LBL_SALES_STAGE' => 'Štádium predaja:',
    'LBL_PROBABILITY' => 'Pravdepodobnosť (%):',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DUPLICATE' => 'Možný duplicitný predaj',
    'MSG_DUPLICATE' => 'Predaj, ktorý sa chystáte vytvoriť, môže byť duplicitný záznam, ktorý už existuje. Predaj obsahujúce podobné názvy aké sú uvedené nižšie. <br>Kliknite na tlačidlo Uložiť Ak chcete pokračovať vo vytváraní tohto nového predaja, alebo kliknite na tlačidlo Zrušiť a prejdite naspäť do modulu bez vytvorenia nového záznamu predaja.',
    'LBL_NEW_FORM_TITLE' => 'Nový predaj',
    'ERR_DELETE_RECORD' => 'Číslo záznamu musí byť špecifikované ak chcete vymazať záznam predaja.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Predaj',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ASSIGNED_TO_NAME' => 'Používateľ:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_SALE_INFORMATION' => 'Informácia o predaji',
    'LBL_CURRENCY_NAME' => 'Názov meny',
    'LBL_CURRENCY_SYMBOL' => 'Symbol meny',
    'LBL_EDIT_BUTTON' => 'Upraviť',
    'LBL_REMOVE' => 'Odstrániť',

);
