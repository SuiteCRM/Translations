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
    'ERR_DELETE_RECORD' => 'K odstráneniu kontaktu musíte zadať číslo záznamu.',
    'LBL_ACCOUNT_ID' => 'Firma ID:',
    'LBL_ACCOUNT_NAME' => 'Názov Firma:',
    'LBL_CAMPAIGN' => 'Kampaň:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informácie o adrese',
    'LBL_ALT_ADDRESS_CITY' => 'Ďalšia adresa, Mesto:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Ďalšia adresa, Krajina:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Ďalšia adrersa, PSČ:',
    'LBL_ALT_ADDRESS_STATE' => 'Ďalšia adresa, Kraj:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatívna adresa ulica 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatívna adresa ulica 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Ďalšia adresa, Ulica:',
    'LBL_ALTERNATE_ADDRESS' => 'Iná adresa:',
    'LBL_ALT_ADDRESS' => 'Iná adresa:',
    'LBL_ANY_ADDRESS' => 'Akákoľvek adresa:',
    'LBL_ANY_EMAIL' => 'Akýkoľvek email:',
    'LBL_ANY_PHONE' => 'Telefón:',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku:',
    'LBL_ASSIGNED_TO_ID' => 'Priradený používateľ',
    'LBL_ASSISTANT_PHONE' => 'Telefón asistenta:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_BIRTHDATE' => 'Narodenie:',
    'LBL_CITY' => 'Mesto:',
    'LBL_CAMPAIGN_ID' => 'ID kampane',
    'LBL_CONTACT_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Meno Kontaktu:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'kontakt-oportunity',
    'LBL_CONTACT_ROLE' => 'Pozícia:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_CREATED_ACCOUNT' => 'Vytvorený nový účet',
    'LBL_CREATED_CALL' => 'Vytvorené nové volanie',
    'LBL_CREATED_CONTACT' => 'Vytvorený nový kontakt',
    'LBL_CREATED_MEETING' => 'Vytvorené nové stretnutie',
    'LBL_CREATED_OPPORTUNITY' => 'Vytvorená nová obchodná príležitosť',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEPARTMENT' => 'Oddelenie:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Priame reporty',
    'LBL_DO_NOT_CALL' => 'Nevolať:',
    'LBL_DUPLICATE' => 'Možná duplicita kontaktu',
    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa:',
    'LBL_EMAIL_OPT_OUT' => 'Možnosť opustiť Email',
    'LBL_EXISTING_ACCOUNT' => 'Použité existujúce konto',
    'LBL_EXISTING_CONTACT' => 'Použitý existujúci kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Použitá existujúca obchodná príležitosť',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Meno:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    'LBL_HOME_PHONE' => 'Domov:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticky vytvoriť nový kontakt, načítaním súboru vCard do systému.',
    'LBL_INVALID_EMAIL' => 'Chybný Email',
    'LBL_INVITEE' => 'Priame reporty',
    'LBL_LAST_NAME' => 'Priezvisko:',
    'LBL_LEAD_SOURCE' => 'Zdroj informácií:',
    'LBL_LIST_ACCEPT_STATUS' => 'Prijať status',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_LIST_CONTACT_ROLE' => 'Rola',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_FIRST_NAME' => 'Krstné meno',
    'LBL_LIST_FORM_TITLE' => 'Zoznam kontaktov',
    'LBL_LIST_LAST_NAME' => 'Priezvisko',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_PHONE' => 'Telefón do práce',
    'LBL_LIST_TITLE' => 'Názov',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Zmenil',
    'LBL_MODULE_NAME' => 'Kontakty',
    'LBL_MODULE_TITLE' => 'Kontakty: Domov',
    'LBL_NAME' => 'Meno:',
    'LBL_NEW_FORM_TITLE' => 'Nový kontakt',
    'LBL_NOTE_SUBJECT' => 'Poznámka k predmetu',
    'LBL_OFFICE_PHONE' => 'Telefón (práca):',
    'LBL_OPP_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID role obchodnej príležitosti:',
    'LBL_OPPORTUNITY_ROLE' => 'Rola obchodnej príležirosti',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iný email:',
    'LBL_OTHER_PHONE' => 'Další telefón:',
    'LBL_PHONE' => 'Telefón:',
    'LBL_PORTAL_APP' => 'Aplikácie Portálu',
    'LBL_PORTAL_INFORMATION' => 'Informácie o portály',
    'LBL_PORTAL_NAME' => 'Názov portálu:',
    'LBL_STREET' => 'Ulica',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primárna adresa, Mesto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primárna adresa: Krajina:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primárna adresa, PSČ:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primárna adresa, Kraj:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primárna adresa, Ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primárna adresa, Ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primárna adresa, Ulica:',
    'LBL_PRIMARY_ADDRESS' => 'Hlavná adresa:',
    'LBL_PRODUCTS_TITLE' => 'Produkty',
    'LBL_REPORTS_TO_ID' => 'Zodpovedá ID:',
    'LBL_REPORTS_TO' => 'Reporty pre',
    'LBL_RESOURCE_NAME' => 'Názov zdroja',
    'LBL_SALUTATION' => 'Oslovenie:',
    'LBL_SAVE_CONTACT' => 'Uložiť kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadávať kontakt',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Výber označených kontaktov',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Výber označených kontaktov',
    'LBL_STATE' => 'Oblasť alebo kraj:',
    'LBL_SYNC_CONTACT' => 'Synchronizácia s  Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Výhľad, zoznam',
    'LBL_TITLE' => 'Názov:',
    'LNK_CONTACT_LIST' => 'Zobraziť kontakty',
    'LNK_IMPORT_VCARD' => 'Nový kontakt z vCard',
    'LNK_NEW_ACCOUNT' => 'Nový firma',
    'LNK_NEW_APPOINTMENT' => 'Vytvoriť plánovanú činnosť',
    'LNK_NEW_CALL' => 'Naplánovať hovor',
    'LNK_NEW_CASE' => 'Vytvoriť prípad',
    'LNK_NEW_CONTACT' => 'Vytvoriť kontakt',
    'LNK_NEW_EMAIL' => 'Archivovať správu',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_NEW_NOTE' => 'Vytvoriť poznámku',
    'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_SELECT_ACCOUNT' => "Výber účtu",
    'NTC_DELETE_CONFIRMATION' => 'Skutočne chcete zmazať tento záznam?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Vytvorenie obchodnej príležitosti vyžaduje účet. \n Prosím, buď vytvoríte nový účet alebo vyberiete existujúci.',
    'NTC_REMOVE_CONFIRMATION' => 'Skutočne, chcete odstrániť tento kontakt z udalosti?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciatívy',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Príležitosti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopírovať do primárnej adresy',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopírovať do inej adresy',

    'LBL_CASES_SUBPANEL_TITLE' => 'Prípady',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECTS_RESOURCES' => 'Zdroje v projektoch',
    'LBL_CAMPAIGNS' => 'Kampane',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampane',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_STATE' => 'Štát',
    'LBL_HOMEPAGE_TITLE' => 'Moje kontakty',
    'LBL_OPPORTUNITIES' => 'Príležitosti',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LNK_IMPORT_CONTACTS' => 'Import kontaktov',

    // SNIP
    'LBL_USER_SYNC' => 'Synchronizácia užívateľa',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Udalosti',

    'LBL_AOP_CASE_UPDATES' => 'Zoznam Aktualizácii',
    'LBL_CREATE_PORTAL_USER' => 'Vytvoriť použivateľa portálu',
    'LBL_ENABLE_PORTAL_USER' => 'Povoliť používateľa portálu',
    'LBL_DISABLE_PORTAL_USER' => 'Zakázať používateľa portálu',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Nepodarilo sa vytvoriť použivateľa portálu',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Nepodarilo sa povoliť použivateľa protálu',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Nepodarilo sa zakázať použivateľa portálu',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Vytvorený používateľ portálu',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Povolený použivateľ portálu',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Zakázaný používateľ portálu',
    'LBL_NO_JOOMLA_URL' => 'Nebola špecifikovaná URL portálu',
    'LBL_PORTAL_USER_TYPE' => 'Typ použivateľa portálu',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konto portálu je zablokované',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID Joomla aplikácie',

    'LBL_AOS_CONTRACTS' => 'Zmluvy',
    'LBL_AOS_INVOICES' => 'Faktúry',
    'LBL_AOS_QUOTES' => 'Ponuky',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Používatelia projektu s projektovým názvom',

    'LBL_LIST_INVITE_STATUS' => 'Status Pozvania',
);
