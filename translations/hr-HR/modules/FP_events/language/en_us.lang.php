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
    'LBL_ASSIGNED_TO_ID' => 'Id dodijeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Kreirano:',
    'LBL_DATE_MODIFIED' => 'Izmijenjeno:',
    'LBL_MODIFIED' => 'Izmijenio:',
    'LBL_MODIFIED_NAME' => 'Izmijenjeno prema Nazivu',
    'LBL_CREATED' => 'Kreirano od',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'Ime',
    'LBL_CREATED_USER' => 'Kreirao Korisnik',
    'LBL_MODIFIED_USER' => 'Izmijenio Korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_LIST_FORM_TITLE' => 'Lista Događaja',
    'LBL_MODULE_NAME' => 'Događaj',
    'LBL_MODULE_TITLE' => 'Događaj',
    'LBL_HOMEPAGE_TITLE' => 'Moj Događaj',
    'LNK_NEW_RECORD' => 'Stvori Događaj',
    'LNK_LIST' => 'Pregledaj Događaje',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraži Događaje',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregledaj Povijest',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi Događaj',
    'LBL_LOCATION' => 'Lokacija',
    'LBL_START_DATE' => 'Početak',
    'LBL_END_DATE' => 'Završetak',
    'LBL_BUDGET' => 'Budžet',
    'LBL_DATE' => 'Početni datum',
    'LBL_DATE_END' => 'Krajnji datum',
    'LBL_DURATION' => 'Trajanje',
    'LBL_INVITE_TEMPLATES' => 'Predložak e-pošte pozivnice',
    'LBL_INVITE_PDF' => 'Pošalji Pozivnice',
    'LBL_EDITVIEW_PANEL1' => 'Detalji događaja',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegati',
    'LBL_ACCEPT_REDIRECT' => 'Prihvati URL preusmjeravanja',
    'LBL_DECLINE_REDIRECT' => 'Odbij URL preusmjeravanja',
    'LBL_SELECT_DELEGATES' => 'Odaberi delegate',
    'LBL_SELECT_DELEGATES_TITLE' => 'Odaberi delegate',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Lista ciljeva',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Ciljevi',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontakti',
    'LBL_SELECT_DELEGATES_LEADS' => 'Potencijalni klijenti',
    'LBL_MANAGE_DELEGATES' => 'Upravljaj delegatima',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Upravljaj delegatima',
    'LBL_MANAGE_ACCEPTANCES' => 'Upravljaj prhvaćanjima',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Upravljaj prihvaćanjima:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Prihvaćeno',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Odbijeno',
    'LBL_MANAGE_POPUP_ERROR' => 'Nijedan delegat nije odabran.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Pozvan',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nije pozvan',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Prisustvovano',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nije prisustvovano',
    'LBL_SUCCESS_MSG' => 'Sve pozivnice su uspješno poslane.',
    'LBL_ERROR_MSG_1' => 'Svi povezani kontakti su već pozvani.',
    'LBL_ERROR_MSG_2' => 'Slanje pozivnica e-pošte neuspjelo! Molim provjerite postavke Vaše e-pošte.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Pogrešan predložak e-pošte',
    'LBL_EMAIL_INVITE' => 'Pozivnica e-pošte',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontakti',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Lokacije',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Potencijalni klijenti',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Ciljevi',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegati',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Ime',
    'LBL_ACCOUNT_NAME' => 'Kompanija',
    'LBL_SIGNATURE' => 'Potpis',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Pozvan',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Prihvati',
    'LBL_DECLINE_LINK' => 'Odbaci',
    
);
