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
    'LBL_MODULE_NAME' => 'Ciele',
    'LBL_MODULE_ID' => 'Ciele',
    'LBL_INVITEE' => 'Priame reporty',
    'LBL_MODULE_TITLE' => 'Ciele:Hlavná stránka',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať verziu',
    'LBL_LIST_FORM_TITLE' => 'Cieľové skupiny',
    'LBL_NEW_FORM_TITLE' => 'nový cieľ',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_LAST_NAME' => 'Priezvisko',
    'LBL_LIST_TITLE' => 'Názov',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Telefón',
    'LBL_LIST_FIRST_NAME' => 'Krstné meno',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ASSIGNED_TO_ID' => 'Priradené k:',
    'LBL_CAMPAIGN_ID' => 'ID kampane',
    'LBL_EXISTING_ACCOUNT' => 'Použité existujúce konto',
    'LBL_CREATED_ACCOUNT' => 'Vytvorený nový účet',
    'LBL_CREATED_CALL' => 'Vytvorené nové volanie',
    'LBL_CREATED_MEETING' => 'Vytvorené nové stretnutie',
    'LBL_NAME' => 'Meno:',
    'LBL_PROSPECT_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'viac informácií',
    'LBL_FIRST_NAME' => 'Meno:',
    'LBL_OFFICE_PHONE' => 'Telefón (práca):',
    'LBL_ANY_PHONE' => 'Telefón:',
    'LBL_PHONE' => 'Telefón:',
    'LBL_LAST_NAME' => 'Priezvisko:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Domov:',
    'LBL_OTHER_PHONE' => 'Další telefón:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primárna adresa, Ulica:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primárna adresa, Mesto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primárna adresa: Krajina:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primárna adresa, Kraj:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primárna adresa, PSČ:',
    'LBL_ALT_ADDRESS_STREET' => 'Ďalšia adresa, Ulica:',
    'LBL_ALT_ADDRESS_CITY' => 'Ďalšia adresa, Mesto:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Ďalšia adresa, Krajina:',
    'LBL_ALT_ADDRESS_STATE' => 'Ďalšia adresa, Kraj:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Ďalšia adrersa, PSČ:',
    'LBL_TITLE' => 'Názov:',
    'LBL_DEPARTMENT' => 'Oddelenie:',
    'LBL_BIRTHDATE' => 'Narodenie:',
    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iný email:',
    'LBL_ANY_EMAIL' => 'Akýkoľvek email:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefón asistenta:',
    'LBL_DO_NOT_CALL' => 'Nevolať:',
    'LBL_EMAIL_OPT_OUT' => 'Možnosť opustiť Email',
    'LBL_PRIMARY_ADDRESS' => 'Hlavná adresa:',
    'LBL_ALTERNATE_ADDRESS' => 'Iná adresa:',
    'LBL_ANY_ADDRESS' => 'Akákoľvek adresa:',
    'LBL_CITY' => 'Mesto:',
    'LBL_STATE' => 'Oblasť alebo kraj:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_ADDRESS_INFORMATION' => 'Informácie o adrese',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_OPP_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticky vytvoriť nový kontakt, načítaním súboru vCard do systému.',
    'LBL_DUPLICATE' => 'Možná duplicita cieľov',
    'MSG_SHOW_DUPLICATES' => 'Účet záznam, ktorý sa chystáte vytvoriť môže byť duplicitný účtu záznam, ktorý už existuje. Account záznam obsahuje podobné názvy ako sú uvedené nižšie.<br />Kliknutím na tlačidlo Uložiť pokračujete vo vytváraní nového účtu, alebo kliknite na tlačidlo Zrušiť a vrátite sa na modul bez vytvorenia účtu.',
    'MSG_DUPLICATE' => 'Vytvárate duplicitné ponuku. Môžete si buď vybrať citát z nižšie uvedeného zoznamu, alebo môžete kliknúť na Uložiť duplikovať ponuku.',
    'LNK_IMPORT_VCARD' => 'Vytvoriť z vCard',
    'LNK_NEW_ACCOUNT' => 'Nový firma',
    'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
    'LNK_NEW_CASE' => 'Vytvoriť prípad',
    'LNK_NEW_NOTE' => 'Vytvoriť poznámku alebo prílohu',
    'LNK_NEW_CALL' => 'Naplánovať hovor',
    'LNK_NEW_EMAIL' => 'Archivovať správu',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_NEW_APPOINTMENT' => 'Vytvoriť plánovanú činnosť',
    'LNK_IMPORT_PROSPECTS' => 'Importovať ciele',
    'NTC_DELETE_CONFIRMATION' => 'Skutočne chcete zmazať tento záznam?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Skutočne, chcete odstrániť tento kontakt z udalosti?',
    'ERR_DELETE_RECORD' => 'K odstráneniu kontaktu musíte zadať číslo záznamu.',
    'LBL_SALUTATION' => 'Oslovenie',
    'LBL_CREATED_OPPORTUNITY' => 'Vytvorená nová obchodná príležitosť',
    'LNK_SELECT_ACCOUNT' => "Výber účtu",
    'LNK_NEW_PROSPECT' => 'Vytvoriť cieľ',
    'LNK_PROSPECT_LIST' => 'Zobraziť ciele',
    'LNK_NEW_CAMPAIGN' => 'Vytvoriť kampaň',
    'LNK_CAMPAIGN_LIST' => 'Kampane',
    'LNK_NEW_PROSPECT_LIST' => 'Vytvoriť Cieľovú skupinu',
    'LNK_PROSPECT_LIST_LIST' => 'Cieľové skupiny',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Výber označených cieľov',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Výber označených cieľov',
    'LBL_INVALID_EMAIL' => 'Chybný Email',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ciele',
    'LBL_PROSPECT_LIST' => 'Výhľad, zoznam',
    'LBL_CONVERT_BUTTON_TITLE' => 'konvertovať cieľ',
    'LBL_CONVERT_BUTTON_LABEL' => 'konvertovať cieľ',
    'LNK_NEW_CONTACT' => 'Nový kontakt',
    'LBL_CREATED_CONTACT' => "Vytvorený nový kontakt",
    'LBL_CAMPAIGNS' => 'Kampane',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampane, záznam',
    'LBL_TRACKER_KEY' => 'Kľúč stopovača',
    'LBL_LEAD_ID' => 'Číslo iniciatíva',
    'LBL_CONVERTED_LEAD' => 'Viesť prekladanie',
    'LBL_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_EDIT_ACCOUNT_NAME' => 'Názov Firma:',
    'LBL_CREATED_USER' => 'Vytvorený užívateľ',
    'LBL_MODIFIED_USER' => 'Upravený užívateľ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Udalosti',
);
