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
    'LBL_MODULE_NAME' => 'Cíle',
    'LBL_MODULE_ID' => 'Cíle',
    'LBL_INVITEE' => 'Přímé Reporty',
    'LBL_MODULE_TITLE' => 'Cíle: Domů',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat cíle',
    'LBL_LIST_FORM_TITLE' => 'Seznam cílů',
    'LBL_NEW_FORM_TITLE' => 'Přidat cíl',
    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_LAST_NAME' => 'Příjmení',
    'LBL_LIST_TITLE' => 'Nadpis úlohy',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Jméno',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ASSIGNED_TO_ID' => 'Přiřazeno k:',
    'LBL_CAMPAIGN_ID' => 'ID kampaně',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Vytvořen nový hovor',
    'LBL_CREATED_MEETING' => 'Nová schůzka vytvořena',
    'LBL_NAME' => 'Jméno:',
    'LBL_PROSPECT_INFORMATION' => 'PŘEHLED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Telefon práce:',
    'LBL_ANY_PHONE' => 'Jakýkoli telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
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
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'Emailová adresa:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Jiný Email:',
    'LBL_ANY_EMAIL' => 'Jakýkoliv Email:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primární adresa:',
    'LBL_ALTERNATE_ADDRESS' => 'Jiná adresa:',
    'LBL_ANY_ADDRESS' => 'Jakákoliv adresa:',
    'LBL_CITY' => 'Město:',
    'LBL_STATE' => 'Kraj/Oblast:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_ADDRESS_INFORMATION' => 'Informace o adrese',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_OPP_NAME' => 'Název příležitosti:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Možné duplicitní cíle',
    'MSG_SHOW_DUPLICATES' => 'Přidáním tohoto kontaktu můžete vytvořit duplicitní kontakt. Pokud chcete opravdu přidat tento kontakt zvolte Uložit jinak zvolte Zrušit.',
    'MSG_DUPLICATE' => 'Přidáním tohoto kontaktu můžete vytvořit duplicitní kontakt. Pokud chcete opravdu přidat tento kontakt zvolte Uložit jinak zvolte Zrušit.',
    'LNK_IMPORT_VCARD' => 'Vytvořit z vCard',
    'LNK_NEW_ACCOUNT' => 'Vytvořit Firmu',
    'LNK_NEW_OPPORTUNITY' => 'Vytvořit příležitost',
    'LNK_NEW_CASE' => 'Vytvořit případ',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Zaznamenat hovor',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Naplánovat schůzku',
    'LNK_NEW_TASK' => 'Vytvořit úkol',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_IMPORT_PROSPECTS' => 'Importovat cíle',
    'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam?',
    'NTC_REMOVE_CONFIRMATION' => 'Opravdu chcete odebrat tento kontakt z případu?',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => 'Oslovení',
    'LBL_CREATED_OPPORTUNITY' => 'Vytvořit novou příležitost',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Vytvořit cíl',
    'LNK_PROSPECT_LIST' => 'Zobrazit cíle',
    'LNK_NEW_CAMPAIGN' => 'Vytvořit kampaň',
    'LNK_CAMPAIGN_LIST' => 'Kampaně',
    'LNK_NEW_PROSPECT_LIST' => 'Vytvořit seznam cílů',
    'LNK_PROSPECT_LIST_LIST' => 'Seznamy cílů',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Zvolit označené cíle',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cíle',
    'LBL_PROSPECT_LIST' => 'Seznam možných zákazníků',
    'LBL_CONVERT_BUTTON_TITLE' => 'Převést Cíl',
    'LBL_CONVERT_BUTTON_LABEL' => 'Převedený Cíl',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Created a new contact",
    'LBL_CAMPAIGNS' => 'Kampaně',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Protokol kampaně',
    'LBL_TRACKER_KEY' => 'Klíč Sledování',
    'LBL_LEAD_ID' => 'ID iniciativy',
    'LBL_CONVERTED_LEAD' => 'Převedená Iniciativa',
    'LBL_ACCOUNT_NAME' => 'Název Firmy',
    'LBL_EDIT_ACCOUNT_NAME' => 'Název Firmy:',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Změněný uživatel',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Události',
);
