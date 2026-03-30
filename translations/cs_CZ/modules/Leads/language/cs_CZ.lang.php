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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Pro smazání Iniciativy musíte specifikovat číslo záznamu.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Popis klienta',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Město',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Stát',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt adresa PSČ',
    'LBL_ALT_ADDRESS_STATE' => 'Stav alternativní adresy',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativní adresa Ulice 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativní adresa Ulice 3',
    'LBL_ALT_ADDRESS_STREET' => 'Ulice',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'ID kontaktu',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Název Iniciativy:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Iniciativa-Příležitost:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Iniciativa:',
    'LBL_CONVERTED_ACCOUNT' => 'Převedená Firma:',
    'LBL_CONVERTED_CONTACT' => 'Zkonvertovaný kontakt:',
    'LBL_CONVERTED_OPP' => 'Konvertovaná příležitost:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Převést iniciativu',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Varování: Stav Iniciativy, kterou se chystáte převést je "Převedeno". Kontakt a/nebo Firma již může být vytvořen z Iniciativy. Pokud chcete pokračovat v převádění Iniciativy, klepněte na tlačítko Uložit. Chcete-li přejít zpět do Iniciativy bez převodu, klepněte na tlačítko Storno.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Možný kontakt:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Vytvořit nový',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Podobné iniciativy',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticky vytvořit novou iniciativu importem vCard z vašeho disku.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Popis zdroje Iniciativy:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Název Iniciativy',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Seznam Iniciativ',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Popis zdroje Iniciativy',
    'LBL_LIST_LEAD_SOURCE' => 'Zdroj Iniciativy',
    'LBL_LIST_MY_LEADS' => 'Moje Iniciativy',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Oznámeno kým',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Iniciativy: Domů',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Nová Iniciativa',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Objem příležitosti:',
    'LBL_OPPORTUNITY_ID' => 'ID příležitosti',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Aplikace portálu',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primární adresa Město',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primární adresa Kraj',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primární adresa PSČ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Stav primární adresy',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primární adresa Ulice 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primární adresa Ulice 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primární adresa Ulice',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Oznámeno kým:',
    'LBL_REPORTS_TO_ID' => 'Reporty k ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat Iniciativu',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vybrat zkontrolované Iniciativy',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Popis stavu:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Vytvořit Iniciativu z vCard',
    'LNK_LEAD_LIST' => 'Zobrazit Iniciativy',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_SELECT_ACCOUNTS' => '<b>NEBO</b> zvolte účet',
    'LNK_SELECT_CONTACTS' => ' <b>Nebo</b> Vybrat kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_REMOVE_CONFIRMATION' => 'Opravdu chcete odebrat tuto Iniciativu z tohoto případu?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Campaigns',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Povolit výběr',
    'LBL_CONVERT_COPY' => 'Kopírovat data',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Přidat modul',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => '<b>NEBO</b> zvolte',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importovat Iniciativy',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modul pro vytvoření nového záznamu v.',
    'LBL_REQUIRED_TIP' => 'Požadované moduly musí být vytvořeny nebo vybrány před tím, než lze Iniciativu převést.',
    'LBL_COPY_TIP' => 'Je-li zaškrtnuto, pole z Iniciativy budou zkopírovány do polí se stejným názvem v nově vytvořených záznamech.',
    'LBL_SELECTION_TIP' => 'Moduly s příslušným polem v Kontaktech mohou být vybrány dříve než budou vytvořeny v průběhu převodu Iniciativy.',
    'LBL_EDIT_TIP' => 'Změňte rozložení převádění pro tento modul.',
    'LBL_DELETE_TIP' => 'Odebrat tento modul z rozložení převádění.',

    'LBL_ACTIVITIES_MOVE' => 'Přesun aktivity do',
    'LBL_ACTIVITIES_COPY' => 'Zkopíruj aktivity do',
    'LBL_ACTIVITIES_MOVE_HELP' => "Vyberte záznam, do kterého přesunout aktivity Iniciativy. Úkoly, Hovory, Schůzky, Poznámky a E-maily budou přesunuty do vybraných záznamů.",
    'LBL_ACTIVITIES_COPY_HELP' => "Vyberte záznamy, pro které vytvořit kopii aktivit Iniciativy. Nové Úkoly, Hovory, Schůzky a Poznámky budou vytvořeny pro každý z vybraných záznamů. E-maily budou souviset s vybranými záznamy.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
