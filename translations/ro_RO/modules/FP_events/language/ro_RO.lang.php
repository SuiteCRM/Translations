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
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Nume',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_EDIT_BUTTON' => 'Editați',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_LIST_FORM_TITLE' => 'Lista Evenimente',
    'LBL_MODULE_NAME' => 'Eveniment',
    'LBL_MODULE_TITLE' => 'Eveniment',
    'LBL_HOMEPAGE_TITLE' => 'Evenimentul Meu',
    'LNK_NEW_RECORD' => 'Creați Eveniment',
    'LNK_LIST' => 'Vezi Evenimente',
    'LBL_SEARCH_FORM_TITLE' => 'Caută Eveniment',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_NEW_FORM_TITLE' => 'Eveniment Nou',
    'LBL_LOCATION' => 'Locație',
    'LBL_START_DATE' => 'data începerii',
    'LBL_END_DATE' => 'Dată/Oră Încheiere',
    'LBL_BUDGET' => 'Buget',
    'LBL_DATE' => 'Dată Început',
    'LBL_DATE_END' => 'Dată Sfârșit',
    'LBL_DURATION' => 'Durată',
    'LBL_INVITE_TEMPLATES' => 'Șablon invitație e-mail',
    'LBL_INVITE_PDF' => 'Trimiteți Invitații',
    'LBL_EDITVIEW_PANEL1' => 'Detalii Eveniment',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegați',
    'LBL_ACCEPT_REDIRECT' => 'Acceptați URL-ul de redirecționare',
    'LBL_DECLINE_REDIRECT' => 'Refuzați URL-ul de redirecționare',
    'LBL_SELECT_DELEGATES' => 'Selectează Delegați',
    'LBL_SELECT_DELEGATES_TITLE' => 'Selectează delegați:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Listă ținte',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Ținte',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contacte',
    'LBL_SELECT_DELEGATES_LEADS' => 'Piste',
    'LBL_MANAGE_DELEGATES' => 'Gestionează delegații',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gestionează delegații:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Gestionare acceptări',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gestionează acceptările:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Acceptat',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Refuzat',
    'LBL_MANAGE_POPUP_ERROR' => 'Niciun delegat nu a fost selectat.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invitat',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Neinvitat',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Participat',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nu A Participat',
    'LBL_SUCCESS_MSG' => 'Toate invitațiile au fost trimise cu succes.',
    'LBL_ERROR_MSG_1' => 'Toate contactele asociate au fost deja invitate.',
    'LBL_ERROR_MSG_2' => 'Trimiterea e-mailurilor de invitație a eșuat! Vă rugăm să verificați setările de e-mail.',
    'LBL_ERROR_MSG_3' => 'Mai mult de 10 e-mailuri au eșuat a fi trimise. Vă rugăm să verificați dacă toate contactele pe care le-ați selectat au o adresă de e-mail validă. (Vezi fișierul suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' e-mailurile nu au putut fi trimise. Vă rugăm să verificați dacă toate contactele pe care le-ați selectat au o adresă de e-mail validă. (Vezi fișierul suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Șablon e-mail nevalid',
    'LBL_EMAIL_INVITE' => 'Invitație prin e-mail',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contacte',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locații',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Piste',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Ținte',

    'LBL_HOURS_ABBREV' => 'o',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegați',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nume',
    'LBL_ACCOUNT_NAME' => 'Companie',
    'LBL_SIGNATURE' => 'Semnătura',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invitat',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Status Activitate',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Locații eveniment din titlul evenimentului',
    // Email links
    'LBL_ACCEPT_LINK' => 'Acceptă',
    'LBL_DECLINE_LINK' => 'Refuză',
    
);
