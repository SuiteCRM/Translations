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
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Vardas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_EDIT_BUTTON' => 'Redaguoti',
    'LBL_REMOVE' => 'Išmesti',
    'LBL_LIST_FORM_TITLE' => 'Atvejų sąrašas',
    'LBL_MODULE_NAME' => 'Atvejis',
    'LBL_MODULE_TITLE' => 'Atvejis',
    'LBL_HOMEPAGE_TITLE' => 'Mano Atvejis',
    'LNK_NEW_RECORD' => 'Sukurti įvykį',
    'LNK_LIST' => 'Žiūrėti įvykius',
    'LBL_SEARCH_FORM_TITLE' => 'Įvykio Paieška',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_NEW_FORM_TITLE' => 'Naujas įvykis',
    'LBL_LOCATION' => 'Vieta',
    'LBL_START_DATE' => 'pradžios data',
    'LBL_END_DATE' => 'Pabaigos Data/Laikas',
    'LBL_BUDGET' => 'Biudžetas',
    'LBL_DATE' => 'Pražios data',
    'LBL_DATE_END' => 'Pabaigos laikas',
    'LBL_DURATION' => 'Trukmė',
    'LBL_INVITE_TEMPLATES' => 'El. laiško kvietimo šablonas',
    'LBL_INVITE_PDF' => 'Išsiųsti kvietimus',
    'LBL_EDITVIEW_PANEL1' => 'Detaliau įvykiai',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegatai',
    'LBL_ACCEPT_REDIRECT' => 'Priimti peradresavimo URL',
    'LBL_DECLINE_REDIRECT' => 'Nepiimti peradresavimo URL',
    'LBL_SELECT_DELEGATES' => 'Pasirinkite delegatus',
    'LBL_SELECT_DELEGATES_TITLE' => 'Pasirinkite delegatai:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Adresatų sąrašas',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Adresatai',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontaktas',
    'LBL_SELECT_DELEGATES_LEADS' => 'Potencialus kontaktas',
    'LBL_MANAGE_DELEGATES' => 'Valdyti Delegatai',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Valdyti Delegatai:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Valdyti Priėmimus',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Valdyti Priėmimus:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Patvirtintas',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Atmestas',
    'LBL_MANAGE_POPUP_ERROR' => 'Nepasirinkta jokių delegatų.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Pakviestas',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nepakviestas',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Dalyvavo',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nedalyvavo',
    'LBL_SUCCESS_MSG' => 'Visiems pakvėstiesiems buvo sėkmingai išsiųsta.',
    'LBL_ERROR_MSG_1' => 'Visi susietieji Kontaktai jau buvo pakviesti.',
    'LBL_ERROR_MSG_2' => 'Kvietimas el. laišku siuntimas nepavyko! Prašome patikrinti savo elektroninio pašto nustatymus.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Netinkamas el. pašto šablonas',
    'LBL_EMAIL_INVITE' => 'Pakviesti El. paštu',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontaktas',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Vietos',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Potencialus kontaktas',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Adresatai',

    'LBL_HOURS_ABBREV' => 'v',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegatai',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Vardas',
    'LBL_ACCOUNT_NAME' => 'Įmonė',
    'LBL_SIGNATURE' => 'Parašas',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Pakviestas',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Būsena',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Pavirtinti',
    'LBL_DECLINE_LINK' => 'Atmesti',
    
);
