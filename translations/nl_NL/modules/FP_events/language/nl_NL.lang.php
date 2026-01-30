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
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker-Id',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Naam',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_EDIT_BUTTON' => 'Bewerken',
    'LBL_REMOVE' => 'Verwijderen',
    'LBL_LIST_FORM_TITLE' => 'Evenementen lijst',
    'LBL_MODULE_NAME' => 'Evenement',
    'LBL_MODULE_TITLE' => 'Evenement',
    'LBL_HOMEPAGE_TITLE' => 'Mijn Evenement',
    'LNK_NEW_RECORD' => 'Maak Evenement',
    'LNK_LIST' => 'Bekijk Evenementen',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek Evenement',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_NEW_FORM_TITLE' => 'Nieuw Evenement',
    'LBL_LOCATION' => 'Locatie',
    'LBL_START_DATE' => 'start datum',
    'LBL_END_DATE' => 'Eind Datum/Tijd',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Begindatum',
    'LBL_DATE_END' => 'Eind datum',
    'LBL_DURATION' => 'Duur',
    'LBL_INVITE_TEMPLATES' => 'E-mail uitnodigen Template',
    'LBL_INVITE_PDF' => 'Stuur Genodigden',
    'LBL_EDITVIEW_PANEL1' => 'Evenement details',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Genodigden',
    'LBL_ACCEPT_REDIRECT' => 'Accepteer Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Weiger Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Selecteer genodigden',
    'LBL_SELECT_DELEGATES_TITLE' => 'Selecteer genodigden:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Verzendlijst',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Doelen',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contactpersonen',
    'LBL_SELECT_DELEGATES_LEADS' => 'Leads',
    'LBL_MANAGE_DELEGATES' => 'Beheer genodigden',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Beheer genodigden:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Beheer Acceptaties',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Beheer Acceptaties:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Geaccepteerd',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Afgewezen',
    'LBL_MANAGE_POPUP_ERROR' => 'Er zijn geen genodigden geselecteerd.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Uitgenodigd',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Niet uitgenodigd',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Bijwonen',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Niet deelgenomen',
    'LBL_SUCCESS_MSG' => 'Alle uitnodigingen zijn succesvol verstuurd.',
    'LBL_ERROR_MSG_1' => 'Alle gelinkte contactpersonen zijn al uitgenodigd.',
    'LBL_ERROR_MSG_2' => 'Het versturen van de uitnodigingen is niet gelukt! Kijk naar je e-mail instellingen.',
    'LBL_ERROR_MSG_3' => 'Meer dan 10 e-mails zijn niet verstuurd. Kijk of alle contactpersonen een geldig e-mail adres hebben. (Bekijk de SuiteCRM fout log.)',
    'LBL_ERROR_MSG_4' => 'e-mails zijn niet verstuurd. Kijk of alle contactpersonen een geldig e-mail adres hebben. (Bekijk de SuiteCRM fout log.)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Ongeldig e-mail Template',
    'LBL_EMAIL_INVITE' => 'E-mail genodigden',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contactpersonen',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locaties',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Leads',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Doelen',

    'LBL_HOURS_ABBREV' => 'u',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Genodigden',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Naam',
    'LBL_ACCOUNT_NAME' => 'Bedrijf',
    'LBL_SIGNATURE' => 'Handtekening',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Uitgenodigd',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Activiteiten status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Evenement locaties',
    // Email links
    'LBL_ACCEPT_LINK' => 'Geaccepteerd',
    'LBL_DECLINE_LINK' => 'Afgewezen',
    
);
