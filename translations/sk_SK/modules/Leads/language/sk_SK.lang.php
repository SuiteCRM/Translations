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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Pre zmazanie iniciatívy musí byť určené číslo záznamu.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Popis Firma',
    'LBL_ACCOUNT_ID' => 'Firma ID',
    'LBL_ACCOUNT_NAME' => 'Názov Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informácie o adrese',
    'LBL_ALT_ADDRESS_CITY' => 'Ďalšia adresa, Mesto:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Ďalšia adresa, Krajina:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Ďalšia adrersa, PSČ:',
    'LBL_ALT_ADDRESS_STATE' => 'Ďalšia adresa, Štát:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ďalšia adresa, Ulica 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ďalšia adresa, Ulica 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Ďalšia adresa, Ulica:',
    'LBL_ALTERNATE_ADDRESS' => 'Iná adresa:',
    'LBL_ALT_ADDRESS' => 'Iná adresa:',
    'LBL_ANY_ADDRESS' => 'Akákoľvek adresa:',
    'LBL_ANY_EMAIL' => 'Akýkoľvek email:',
    'LBL_ANY_PHONE' => 'Telefón:',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ASSIGNED_TO_ID' => 'Priradený užívateľ:',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACT_ID' => 'ID kontaktu',
    'LBL_CONTACT_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Názov Iniciatívy:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Príležitosť:',
    'LBL_CONTACT_ROLE' => 'Pozícia:',
    'LBL_CONTACT' => 'Iniciatíva:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertovaný účet:',
    'LBL_CONVERTED_CONTACT' => 'Konvertovaný kontakt:',
    'LBL_CONVERTED_OPP' => 'Konvertované príležitosti:',
    'LBL_CONVERTED' => 'Konvertovaný',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konvertovať iniciatívu',
    'LBL_CONVERTLEAD' => 'Konvertovať iniciatívu',
    'LBL_CONVERTLEAD_WARNING' => 'Upozorneni: Stav príležitostí sa chystáte previesť je "Prekladané". Kontakt a / alebo účet záznamy môžu už boli vytvorené z príležitostí. Ak chcete pokračovať v konverzii príležitostí, kliknite na tlačidlo Uložiť. Ak chcete prejsť späť na príležitosť bez prevodu, kliknite na tlačidlo Zrušiť.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Možný kontakt:',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_CREATED_NEW' => 'Vytvorený nový',
    'LBL_CREATED_ACCOUNT' => 'Vytvorený nový účet',
    'LBL_CREATED_CALL' => 'Vytvorené nové volanie',
    'LBL_CREATED_CONTACT' => 'Vytvorený nový kontakt',
    'LBL_CREATED_MEETING' => 'Vytvorené nové stretnutie',
    'LBL_CREATED_OPPORTUNITY' => 'Vytvorená nová obchodná príležitosť',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Iniciatívy',
    'LBL_DEPARTMENT' => 'Oddelenie:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DO_NOT_CALL' => 'Nevolať:',
    'LBL_DUPLICATE' => 'Podobné iniciatívy',
    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa:',
    'LBL_EMAIL_OPT_OUT' => 'Možnosť opustiť Email',
    'LBL_EXISTING_ACCOUNT' => 'Použité existujúce konto',
    'LBL_EXISTING_CONTACT' => 'Použitý existujúci kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Použitá existujúca obchodná príležitosť',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Meno:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    'LBL_HOME_PHONE' => 'Domáci telefón:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticky vytvoriť nový kontakt, načítaním vCard z Vášho systému súborov.',
    'LBL_INVALID_EMAIL' => 'Chybný Email',
    'LBL_INVITEE' => 'Priame reporty',
    'LBL_LAST_NAME' => 'Priezvisko:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Popis zdroja iniciatíva:',
    'LBL_LEAD_SOURCE' => 'Zdroj informácií:',
    'LBL_LIST_ACCEPT_STATUS' => 'Prijať status',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_CONTACT_NAME' => 'Názov Iniciatívy',
    'LBL_LIST_CONTACT_ROLE' => 'Rola',
    'LBL_LIST_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Krstné meno',
    'LBL_LIST_FORM_TITLE' => 'zoznam príležitostí',
    'LBL_LIST_LAST_NAME' => 'Priezvisko',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Popis zdroja iniciatíva',
    'LBL_LIST_LEAD_SOURCE' => 'Viesť zdroj',
    'LBL_LIST_MY_LEADS' => 'Moje Iniciatívy',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_PHONE' => 'Telefón do práce',
    'LBL_LIST_REFERED_BY' => 'Uviedol',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_TITLE' => 'Názov',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Iniciatívy',
    'LBL_MODULE_TITLE' => 'Iniciatívy: Hlavná stránka',
    'LBL_NAME' => 'Meno:',
    'LBL_NEW_FORM_TITLE' => 'nová príležitosť',
    'LBL_OFFICE_PHONE' => 'Telefón (práca):',
    'LBL_OPP_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Príležitosť Čiastka:',
    'LBL_OPPORTUNITY_ID' => 'ID príležitosti',
    'LBL_OPPORTUNITY_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iný email:',
    'LBL_OTHER_PHONE' => 'Další telefón:',
    'LBL_PHONE' => 'Telefón:',
    'LBL_PORTAL_APP' => 'Aplikácie Portálu',
    'LBL_PORTAL_INFORMATION' => 'Informácie o portály',
    'LBL_PORTAL_NAME' => 'Názov portálu:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_STREET' => 'Ulica',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primárna adresa, Mesto',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primárna adresa, Krajina',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primárna adresa, PSČ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primárna adresa, Štát',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primárna adresa, Ulica 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primárna adresa, Ulica 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primárna adresa, Ulica',
    'LBL_PRIMARY_ADDRESS' => 'Hlavná adresa:',
    'LBL_REFERED_BY' => 'Odkazoval z',
    'LBL_REPORTS_TO_ID' => 'Reporty pre ID',
    'LBL_REPORTS_TO' => 'Reporty pre',
    'LBL_SALUTATION' => 'Oslovenie',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_SEARCH_FORM_TITLE' => 'vyhľadať príležitosť',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vyberte zaškrtnuté vodiče',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vyberte zaškrtnuté vodiče',
    'LBL_STATE' => 'Oblasť alebo kraj:',
    'LBL_STATUS_DESCRIPTION' => 'Popis stavu:',
    'LBL_STATUS' => 'Stav:',
    'LBL_TITLE' => 'Názov:',
    'LNK_IMPORT_VCARD' => 'Vytvoriť príležitosť Od vCard',
    'LNK_LEAD_LIST' => 'Zobraziť Vývody',
    'LNK_NEW_ACCOUNT' => 'Nový firma',
    'LNK_NEW_APPOINTMENT' => 'Vytvoriť plánovanú činnosť',
    'LNK_NEW_CONTACT' => 'Vytvoriť kontakt',
    'LNK_NEW_LEAD' => 'Vytvoriť príležitosť',
    'LNK_NEW_NOTE' => 'Vytvoriť poznámku',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_NEW_CASE' => 'Vytvoriť prípad',
    'LNK_NEW_CALL' => 'Naplánovať hovor',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
    'LNK_SELECT_ACCOUNTS' => 'Výber účtu',
    'LNK_SELECT_CONTACTS' => ' <b>Alebo</b> Vybrať kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Skutočne chcete zmazať tento záznam?',
    'NTC_REMOVE_CONFIRMATION' => 'Skutočne, chcete odstrániť tento kontakt z udalosti?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampane',
    'LBL_CAMPAIGN' => 'Kampaň:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_PROSPECT_LIST' => 'Výhľad, zoznam',
    'LBL_CAMPAIGN_LEAD' => 'Kampane',
    'LBL_BIRTHDATE' => 'Narodenie:',
    'LBL_ASSISTANT_PHONE' => 'Telefón asistenta',
    'LBL_ASSISTANT' => 'Asistent',
    'LBL_CREATED_USER' => 'Vytvorený užívateľ',
    'LBL_MODIFIED_USER' => 'Upravený užívateľ',
    'LBL_CAMPAIGNS' => 'Kampane',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Povinné',
    'LBL_CONVERT_SELECT' => 'Povoliť výber',
    'LBL_CONVERT_COPY' => 'Kopírovať dáta',
    'LBL_CONVERT_EDIT' => 'Upraviť',
    'LBL_CONVERT_DELETE' => 'Vymazať',
    'LBL_CONVERT_ADD_MODULE' => 'Pridať modul',
    'LBL_CREATE' => 'Vytvoriť',
    'LBL_SELECT' => 'Výber',
    'LBL_WEBSITE' => 'Web stránka',
    'LNK_IMPORT_LEADS' => 'Import Vývodou',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modul vytvoril nový záznam palcov',
    'LBL_REQUIRED_TIP' => 'Požadované moduly musia byť vytvorená alebo vybraná pred vedenia môže byť prevedený.',
    'LBL_COPY_TIP' => 'Ak je začiarknuté, bude pole z olova sa skopírujú do poľa s rovnakým názvom v novo vytvorených záznamov.',
    'LBL_SELECTION_TIP' => 'Moduly s týkať poľa Kontakty môžu byť vybrané skôr ako vytvorí počas konvert vedúci procesu.',
    'LBL_EDIT_TIP' => 'Upraviť konvert rozloženia pre tento modul.',
    'LBL_DELETE_TIP' => 'Odobrať tento modul z rozloženia previesť.',

    'LBL_ACTIVITIES_MOVE' => 'Presunúť aktivity na',
    'LBL_ACTIVITIES_COPY' => 'Kopírovať aktivity na',
    'LBL_ACTIVITIES_MOVE_HELP' => "yberte záznam, na ktorý presunieme príležitosť činnosť. Úlohy, hovory, schôdzky, poznámky a e-maily bude presunutý do vybraného záznamu (s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Vyberte záznam (y), pre ktoré chcete vytvoriť kópie z hlavných činností. Nové úlohy, hovory, schôdzky a poznámky budú vytvorené pre každý vybraný záznam (y). E-maily sa budú vzťahovať k vybraného záznamu (s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID kampane',
    'LBL_EDITLAYOUT' => 'Upraviť rozloženie' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Vložiť dátum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Načítavanie' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Upraviť' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Udalosti',
);
