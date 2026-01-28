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
    'LBL_MODULE_NAME' => 'Cíle',
    'LBL_MODULE_ID' => 'Cíle',
    'LBL_INVITEE' => 'Přímé Reporty',
    'LBL_MODULE_TITLE' => 'Cíle: Domů',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat cíle',
    'LBL_LIST_FORM_TITLE' => 'Seznam cílů',
    'LBL_NEW_FORM_TITLE' => 'Přidat cíl',
    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_LAST_NAME' => 'Příjmení',
    'LBL_LIST_TITLE' => 'Název úlohy',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Jméno',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ASSIGNED_TO_ID' => 'Přiřazeno k:',
    'LBL_CAMPAIGN_ID' => 'ID kampaně',
    'LBL_EXISTING_ACCOUNT' => 'Použit existující účet',
    'LBL_CREATED_ACCOUNT' => 'Přidán nový účet',
    'LBL_CREATED_CALL' => 'Vytvořen nový hovor',
    'LBL_CREATED_MEETING' => 'Nová schůzka vytvořena',
    'LBL_NAME' => 'Název:',
    'LBL_PROSPECT_INFORMATION' => 'Informace o klientovi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Více informací',
    'LBL_FIRST_NAME' => 'Křestní jméno:',
    'LBL_OFFICE_PHONE' => 'Telefon práce:',
    'LBL_ANY_PHONE' => 'Jakýkoli telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Příjmení:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Telefon domů:',
    'LBL_OTHER_PHONE' => 'Jiný Telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primární adresa Ulice:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primární adresa Město:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primární adresa Kraj:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primární adresa Kraj:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primární adresa PSČ:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativní adresa Ulice:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativní adresa Město:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativní adresa Stát:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativní adresa Kraj:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativní adresa PSČ:',
    'LBL_TITLE' => 'Název úlohy:',
    'LBL_DEPARTMENT' => 'Oddělení:',
    'LBL_BIRTHDATE' => 'Datum narození:',
    'LBL_EMAIL_ADDRESS' => 'Emailová adresa:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Jiný Email:',
    'LBL_ANY_EMAIL' => 'Jakýkoliv Email:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asistenta:',
    'LBL_DO_NOT_CALL' => 'Nevolat:',
    'LBL_EMAIL_OPT_OUT' => 'Možno poslat email:',
    'LBL_PRIMARY_ADDRESS' => 'Primární adresa:',
    'LBL_ALTERNATE_ADDRESS' => 'Další adresa:',
    'LBL_ANY_ADDRESS' => 'Jakákoliv adresa:',
    'LBL_CITY' => 'Město:',
    'LBL_STATE' => 'Oblast nebo kraj:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_ADDRESS_INFORMATION' => 'Informace o adrese',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_OPP_NAME' => 'Název příležitosti:',
    'LBL_IMPORT_VCARD' => 'Importovat vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticky přidat nový kontakt importováním vCard z vašeho souborového systému.',
    'LBL_DUPLICATE' => 'Možné duplicitní cíle',
    'MSG_SHOW_DUPLICATES' => 'Přidáním tohoto kontaktu můžete vytvořit duplicitní kontakt. Pokud chcete opravdu přidat tento kontakt zvolte Uložit jinak zvolte Zrušit.',
    'MSG_DUPLICATE' => 'Přidáním tohoto kontaktu můžete vytvořit duplicitní kontakt. Pokud chcete opravdu přidat tento kontakt zvolte Uložit jinak zvolte Zrušit.',
    'LNK_IMPORT_VCARD' => 'Vytvořit z vCard',
    'LNK_NEW_ACCOUNT' => 'Vytvořit Firmu',
    'LNK_NEW_OPPORTUNITY' => 'Vytvořit příležitost',
    'LNK_NEW_CASE' => 'Vytvořit případ',
    'LNK_NEW_NOTE' => 'Přidat poznámku nebo přílohu',
    'LNK_NEW_CALL' => 'Zaznamenat hovor',
    'LNK_NEW_EMAIL' => 'Archivovat zprávu',
    'LNK_NEW_MEETING' => 'Naplánovat schůzku',
    'LNK_NEW_TASK' => 'Vytvořit úkol',
    'LNK_NEW_APPOINTMENT' => 'Naplánovat událost',
    'LNK_IMPORT_PROSPECTS' => 'Importovat cíle',
    'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam?',
    'NTC_REMOVE_CONFIRMATION' => 'Opravdu chcete odebrat tento kontakt z případu?',
    'ERR_DELETE_RECORD' => 'Pro smazání kontaktu musí být zadáno číslo záznamu.',
    'LBL_SALUTATION' => 'Oslovení',
    'LBL_CREATED_OPPORTUNITY' => 'Vytvořena nová příležitost',
    'LNK_SELECT_ACCOUNT' => "Zvolit účet",
    'LNK_NEW_PROSPECT' => 'Vytvořit cíl',
    'LNK_PROSPECT_LIST' => 'Zobrazit cíle',
    'LNK_NEW_CAMPAIGN' => 'Vytvořit kampaň',
    'LNK_CAMPAIGN_LIST' => 'Kampaně',
    'LNK_NEW_PROSPECT_LIST' => 'Vytvořit seznam cílů',
    'LNK_PROSPECT_LIST_LIST' => 'Seznam skupin cílů',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Zvolit označené cíle',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Zvolit označené cíle',
    'LBL_INVALID_EMAIL' => 'Neplatný email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cíle',
    'LBL_PROSPECT_LIST' => 'Seznam možných zákazníků',
    'LBL_CONVERT_BUTTON_TITLE' => 'Převést Cíl',
    'LBL_CONVERT_BUTTON_LABEL' => 'Převést Cíl',
    'LNK_NEW_CONTACT' => 'Přidat kontakt',
    'LBL_CREATED_CONTACT' => "Přidán nový kontakt",
    'LBL_CAMPAIGNS' => 'Kampaně',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Protokol kampaně',
    'LBL_TRACKER_KEY' => 'Klíč Sledování',
    'LBL_LEAD_ID' => 'ID iniciativy',
    'LBL_CONVERTED_LEAD' => 'Převedená Iniciativa',
    'LBL_ACCOUNT_NAME' => 'Název Firmy',
    'LBL_EDIT_ACCOUNT_NAME' => 'Název Firmy:',
    'LBL_CREATED_USER' => 'Vytvořený uživatel',
    'LBL_MODIFIED_USER' => 'Upravený uživatel',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Události',
);
