<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó ID',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozva',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Üzenet tartalma',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Név',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_LIST_NAME' => 'Elnevezés',
    'LBL_EDIT_BUTTON' => 'Szerkesztés',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_LIST_FORM_TITLE' => 'Eseménylista',
    'LBL_MODULE_NAME' => 'Esemény',
    'LBL_MODULE_TITLE' => 'Esemény',
    'LBL_HOMEPAGE_TITLE' => 'Eseményem',
    'LNK_NEW_RECORD' => 'Esemény létrehozása',
    'LNK_LIST' => 'Esemény megtekintése',
    'LBL_SEARCH_FORM_TITLE' => 'Esemény keresése',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Új Rendezvény',
    'LBL_LOCATION' => 'Location',
    'LBL_START_DATE' => 'kezdő dátum',
    'LBL_END_DATE' => 'End Date/Time',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Start Date',
    'LBL_DATE_END' => 'End Date',
    'LBL_DURATION' => 'Duration',
    'LBL_INVITE_TEMPLATES' => 'Email meghívó sablon',
    'LBL_INVITE_PDF' => 'Meghívó küldése',
    'LBL_EDITVIEW_PANEL1' => 'Rendezvény részletek',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Küldöttek',
    'LBL_ACCEPT_REDIRECT' => 'Átirányítási URL elfogadása',
    'LBL_DECLINE_REDIRECT' => 'Átirányítási URL elutasítása',
    'LBL_SELECT_DELEGATES' => 'Képviselők kiválasztása',
    'LBL_SELECT_DELEGATES_TITLE' => 'Küldöttek kiválasztása:',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Prospect lista',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Célcsoport',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kapcsolattartók',
    'LBL_SELECT_DELEGATES_LEADS' => 'Vezetők',
    'LBL_MANAGE_DELEGATES' => 'Képviselők kezelése',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Képviselők kezelése:',
    'LBL_MANAGE_ACCEPTANCES' => 'Beleegyezők kezelése',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Beleegyezők kezelése:',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accepted',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Declined',
    'LBL_MANAGE_POPUP_ERROR' => 'Nincsenek kiválasztott képviselők.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invited',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Not Invited',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Attended',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Not Attended',
    'LBL_SUCCESS_MSG' => 'Minden meghívást sikeresen elküldtük.',
    'LBL_ERROR_MSG_1' => 'Minden csatolt kapcsolattartó már meghívást kapott.',
    'LBL_ERROR_MSG_2' => 'A meghívó eMailek küldése nem sikerült! Kérjük, ellenőrizze az eMail beállításokat.',
    'LBL_ERROR_MSG_3' => 'Több mint 10 email elküldése sikertelen. Kérem ellenőrizze, hogy a kapcsolatok, amelyeket meghív érvényes emailcímmel rendelkeznek-e. (ld. suitecrm.log-ot)',
    'LBL_ERROR_MSG_4' => ' emailel küldése sikertelen. Kérem ellenőrizze, hogy a kapcsolatok, amelyeket meghív érvényes emailcímmel rendelkeznek-e. (ld. suitecrm.log-ot)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Érvénytelen E-mail sablon',
    'LBL_EMAIL_INVITE' => 'Email meghívás',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kapcsolattartók',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locations',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Vezetők',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Prospectek',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Küldöttek',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Elnevezés',
    'LBL_ACCOUNT_NAME' => 'Company',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invited',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Tevékenység státusza',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Esemény helyszínek az esemény címből',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accept',
    'LBL_DECLINE_LINK' => 'Decline',
    
);
