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
    'LBL_ASSIGNED_TO_ID' => 'ID přiřazeného uživatele',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil',
    'LBL_MODIFIED_NAME' => 'Změněno dle Jména',
    'LBL_CREATED' => 'Vytvořeno',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_NAME' => 'Název',
    'LBL_CREATED_USER' => 'Vytvořeno dle Uživatele',
    'LBL_MODIFIED_USER' => 'Změněno dle Uživatele',
    'LBL_LIST_NAME' => 'Název',
    'LBL_EDIT_BUTTON' => 'Upravit',
    'LBL_REMOVE' => 'Odebrat',
    'LBL_LIST_FORM_TITLE' => 'Seznam událostí',
    'LBL_MODULE_NAME' => 'Událost',
    'LBL_MODULE_TITLE' => 'Událost',
    'LBL_HOMEPAGE_TITLE' => 'Moje událost',
    'LNK_NEW_RECORD' => 'Vytvořit událost',
    'LNK_LIST' => 'Zobrazit událost',
    'LBL_SEARCH_FORM_TITLE' => 'Hledání události',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nová událost',
    'LBL_LOCATION' => 'Umístění',
    'LBL_START_DATE' => 'datum zahájení',
    'LBL_END_DATE' => 'Datum/Čas konce',
    'LBL_BUDGET' => 'Rozpočet',
    'LBL_DATE' => 'Datum začátku',
    'LBL_DATE_END' => 'Ukončeno',
    'LBL_DURATION' => 'Doba trvání',
    'LBL_INVITE_TEMPLATES' => 'Šablona e-mailové pozvánky',
    'LBL_INVITE_PDF' => 'Odeslat pozvání',
    'LBL_EDITVIEW_PANEL1' => 'Detaily události',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegáti',
    'LBL_ACCEPT_REDIRECT' => 'Přijmout přesměrování URL',
    'LBL_DECLINE_REDIRECT' => 'Odmítnout přesměrování URL',
    'LBL_SELECT_DELEGATES' => 'Vybrat delegáty',
    'LBL_SELECT_DELEGATES_TITLE' => 'Vybrat delegáty:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Seznam cílů',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Cíle',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontakty',
    'LBL_SELECT_DELEGATES_LEADS' => 'Iniciativy',
    'LBL_MANAGE_DELEGATES' => 'Spravovat delegáty',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Spravovat delegáty:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Spravovat přijetí',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Správa akceptací:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Přijato',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Odmítnuto',
    'LBL_MANAGE_POPUP_ERROR' => 'Nebyli vybráni žádní delegáti.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Pozvaný',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nepozvaný',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Zúčastnil se',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nezúčastnil se',
    'LBL_SUCCESS_MSG' => 'Všechna pozvání byla úspěšně odeslána.',
    'LBL_ERROR_MSG_1' => 'Všechny propojené kontakty již byly pozvány.',
    'LBL_ERROR_MSG_2' => 'Odeslání e-mailů s pozvánkou selhalo! Zkontrolujte prosím nastavení e-mailu.',
    'LBL_ERROR_MSG_3' => 'Více než 10 e-mailů se nepodařilo odeslat. Zkontrolujte, že všechny kontakty, které zvete mají platnou e-mailovou adresu. (viz suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' e-maily se nepodařilo odeslat. Zkontrolujte, že všechny kontakty, které zvete mají platnou e-mailovou adresu. (viz suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Neplatná šablona e-mailu',
    'LBL_EMAIL_INVITE' => 'E-mailová pozvánka',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontakty',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Místo',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Iniciativy',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Cíle',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegáti',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Název',
    'LBL_ACCOUNT_NAME' => 'Společnost',
    'LBL_SIGNATURE' => 'Podpis',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Pozvaný',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Stav',

    'LBL_ACTIVITY_STATUS' => 'Stav aktivity',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Místo události z nadpisu události',
    // Email links
    'LBL_ACCEPT_LINK' => 'Přijmout',
    'LBL_DECLINE_LINK' => 'Odmítnout',
    
);
