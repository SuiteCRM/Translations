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
    'LBL_MODULE_NAME' => 'Valutor',
    'LBL_LIST_FORM_TITLE' => 'Valutor',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_ADD' => 'Lägg till',
    'LBL_MERGE' => 'Sammanfoga',
    'LBL_MERGE_TXT' => 'Var god välj valutan du önskar koppla till den valda valutan. Alla ikryssade valutor kommer raderas och alla värden associerade till dem kommer att tilldelas på nytt med den valda valutan.',
    'LBL_US_DOLLAR' => 'US-Dollar',
    'LBL_DELETE' => 'Radera',
    'LBL_LIST_SYMBOL' => 'Valutasymbol',
    'LBL_LIST_NAME' => 'Valuta namn',
    'LBL_LIST_ISO4217' => 'ISO 4217 Kod',
    'LBL_LIST_ISO4217_HELP' => 'Ange ISO 4217-kod på tre bokstäver som definierar namnet på valutan och valutasymbolen.',
    'LBL_UPDATE' => 'Uppdatera',
    'LBL_LIST_RATE' => 'Växlingskurs',
    'LBL_LIST_RATE_HELP' => 'En konverteringsgrad på 0.5 för Euro betyder att 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => 'Ny kontakt',
    'LNK_NEW_ACCOUNT' => 'Nytt företag',
    'LNK_NEW_OPPORTUNITY' => 'Ny affär',
    'LNK_NEW_CASE' => 'Nytt ärende',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_CALL' => 'Nytt samtal',
    'LNK_NEW_EMAIL' => 'Ny epost',
    'LNK_NEW_MEETING' => 'Nytt möte',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill radera posten? Alla poster som använder denna valuta kommer bli konverterade till systemet standardvaluta när de blir accessade. Det kan vara bättre att sätta statusen till inaktiv.',
    'LBL_BELOW_MIN' => 'Omräkningskursen måste vara över 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktiv',
            'Inactive' => 'Inaktiv',
        ),
    'LBL_CREATED_BY' => 'Skapad av',
    'LBL_EDIT_LAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
);
