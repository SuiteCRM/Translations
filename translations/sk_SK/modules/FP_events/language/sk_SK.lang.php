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
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID používateľa',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NAME' => 'Meno',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_EDIT_BUTTON' => 'Upraviť',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_LIST_FORM_TITLE' => 'Zoznam udalostí',
    'LBL_MODULE_NAME' => 'Udalosť',
    'LBL_MODULE_TITLE' => 'Udalosť',
    'LBL_HOMEPAGE_TITLE' => 'Moje udalosti',
    'LNK_NEW_RECORD' => 'Vytvoriť udalosť',
    'LNK_LIST' => 'Zobraziť udalosti',
    'LBL_SEARCH_FORM_TITLE' => 'Hľadať udalosť',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobraziť Históriu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nová udalosť',
    'LBL_LOCATION' => 'Umiestnenie',
    'LBL_START_DATE' => 'dátum začatia',
    'LBL_END_DATE' => 'Konečný dátum/čas',
    'LBL_BUDGET' => 'Rozpočet',
    'LBL_DATE' => 'Dátum začiatku:',
    'LBL_DATE_END' => 'Dátum ukončenia',
    'LBL_DURATION' => 'Trvanie',
    'LBL_INVITE_TEMPLATES' => 'Šablóna emailovej pozvánky',
    'LBL_INVITE_PDF' => 'Odoslať pozvánky',
    'LBL_EDITVIEW_PANEL1' => 'Detaily udalosti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegáti',
    'LBL_ACCEPT_REDIRECT' => 'Akceptovať presmerovanie URL',
    'LBL_DECLINE_REDIRECT' => 'Neprijať presmerovanie URL',
    'LBL_SELECT_DELEGATES' => 'Vybrať delegátov',
    'LBL_SELECT_DELEGATES_TITLE' => 'Výber delegátov:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Cieľové skupiny',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Ciele',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontakty',
    'LBL_SELECT_DELEGATES_LEADS' => 'Iniciatívy',
    'LBL_MANAGE_DELEGATES' => 'Spravovať delegátov',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Spravovať delegátov:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Spravovať súhlasy',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Spravovať súhlasy:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Akceptovaný',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Zamietnutý',
    'LBL_MANAGE_POPUP_ERROR' => 'Neboli vybratí žiadni delegáti.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Pozvaný',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nepozvaný',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Zúčastni sa',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nezúčastni sa',
    'LBL_SUCCESS_MSG' => 'Všetky pozvánky boli úspešne odoslané.',
    'LBL_ERROR_MSG_1' => 'Už boli pozvané všetky prepojené kontakty.',
    'LBL_ERROR_MSG_2' => 'Odosielanie emailových pozvánok zlyhalo! Skontrolujte nastavenia emailu.',
    'LBL_ERROR_MSG_3' => 'Viac ako 10 emailov sa nepodarilo odoslať. Skontrolujte, či všetky kontakty, ktoré ste pozvali majú platnú emailovú adresu. (Pozri suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' e-maily sa nepodarilo odoslať. skontrolujte, či všetky kontakty, majú platnú e-mailovú adresu. (viď suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Neplatná šablóna emailu',
    'LBL_EMAIL_INVITE' => 'Emailová pozvánka',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontakty',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Lokality',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Iniciatívy',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Ciele',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegáti',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Meno',
    'LBL_ACCOUNT_NAME' => 'Spoločnosť',
    'LBL_SIGNATURE' => 'Podpis',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Pozvaný',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Stav',

    'LBL_ACTIVITY_STATUS' => 'Stav aktivity',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Miesto udalosti z názvu udalosti',
    // Email links
    'LBL_ACCEPT_LINK' => 'Akceptovaný',
    'LBL_DECLINE_LINK' => 'Zamietnutý',
    
);
