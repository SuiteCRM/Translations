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
    'LBL_MODULE_NAME' => 'Valuta',
    'LBL_LIST_FORM_TITLE' => 'Valuta',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_ADD' => 'Legg til',
    'LBL_MERGE' => 'Slå sammen dubletter',
    'LBL_MERGE_TXT' => 'Vennligst velg de valutaene som du ønsker å knytte til den allerede valgte valutaen. Denne handlingen vil slette alle markerte valutaer og flytte de tilknyttede verdier til den valgte valutaen.',
    'LBL_US_DOLLAR' => 'U.S. dollar',
    'LBL_DELETE' => 'Slett',
    'LBL_LIST_SYMBOL' => 'Valutasymbol',
    'LBL_LIST_NAME' => 'Valutanavn',
    'LBL_LIST_ISO4217' => 'ISO 4217-kode',
    'LBL_LIST_ISO4217_HELP' => 'Angi tre-bokstavs ISO 4217-kode for valutaens navn og valutasymbolet.',
    'LBL_UPDATE' => 'Oppdater',
    'LBL_LIST_RATE' => 'Kurs',
    'LBL_LIST_RATE_HELP' => 'En kurs på 0,5 for Euro, betyr at 10 USD = 5 Euro',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => 'Ny kontakt',
    'LNK_NEW_ACCOUNT' => 'Ny kunde',
    'LNK_NEW_OPPORTUNITY' => 'Ny salgsmulighet',
    'LNK_NEW_CASE' => 'Ny sak',
    'LNK_NEW_NOTE' => 'Nytt notat eller vedlegg',
    'LNK_NEW_CALL' => 'Opprett oppringing',
    'LNK_NEW_EMAIL' => 'Ny e-post',
    'LNK_NEW_MEETING' => 'Ny møte',
    'LNK_NEW_TASK' => 'Ny oppgave',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne registreringen? De registre som bruker denne valutaen vil bli konvertert til å bruke den forhåndsinnstilte valutaen når det kreves. Det kan være bedre å istedet endre statusen til passiv.',
    'LBL_BELOW_MIN' => 'Konverteringskursen må være større enn 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktiv',
            'Inactive' => 'Inaktiv',
        ),
    'LBL_CREATED_BY' => 'Opprettet av',
    'LBL_EDIT_LAYOUT' => 'Rediger oppsett' /*for 508 compliance fix*/,
);
