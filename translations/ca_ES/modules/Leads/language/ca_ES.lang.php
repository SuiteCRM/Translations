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

    'ERR_DELETE_RECORD' => 'Ha d\'especificar un número de registre a eliminar.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descripció de la Compte',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Informació d\'adreça',
    'LBL_ALT_ADDRESS_CITY' => 'Ciutat alternativa',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País alternatiu',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Codi postal alternatiu',
    'LBL_ALT_ADDRESS_STATE' => 'Estat/Província alternatiu',
    'LBL_ALT_ADDRESS_STREET_2' => 'Carrer alternatiu 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Carrer alternatiu 3',
    'LBL_ALT_ADDRESS_STREET' => 'Carrer alternatiu',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Qualsevol adreça:',
    'LBL_ANY_EMAIL' => 'Qualsevol correu electrònic:',
    'LBL_ANY_PHONE' => 'Qualsevol Telèfon:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'ID Contacte',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom del cliente potencial:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Client Potencial-Oportunitat:',
    'LBL_CONTACT_ROLE' => 'Rol: ',
    'LBL_CONTACT' => 'Client Potencial:',
    'LBL_CONVERTED_ACCOUNT' => 'Compte Convertida:',
    'LBL_CONVERTED_CONTACT' => 'Contacte Convertit:',
    'LBL_CONVERTED_OPP' => 'Oportunitat Convertida:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir Client Potencial',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Avís: L\'estat del Client Potencial que està a punt de convertir és "Convertit". És possible que ja s\'hagi creat algun registres de tipus Contacte i / o Compte a partir d\'aquest Client Potencial. Si desitja continuar amb la conversió Client Potencial, feu clic a Desa. Per tornar al Client Potencial sense realitzar la conversió, feu clic a Cancel·la.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Possible contacte:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Creat un nou',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Descripció: ',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Clients potencials similares',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nom:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticàmente crea un nou client potencial important una vCard.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descripció de presa de contacte:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Contacte',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Llista de Clients Potencials',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descripció de Presa de Contacte',
    'LBL_LIST_LEAD_SOURCE' => 'Presa de Contacte',
    'LBL_LIST_MY_LEADS' => 'Els Meus Clients Potencials',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Referit per',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Càrrec',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Clients Potencials: Inici',
    'LBL_NAME' => 'Nom: ',
    'LBL_NEW_FORM_TITLE' => 'Nou Client Potencial',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Quantitat de l\'oportunitat:',
    'LBL_OPPORTUNITY_ID' => 'ID Oportunitat',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Aplicació del Portal',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciutat principal',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País principal',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Codi postal principal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estat/Província principal',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Carrer principal 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Carrer principal 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Carrer principal',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Referit per:',
    'LBL_REPORTS_TO_ID' => 'Informa a ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca de Clients Potencials',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar Clients Potencials Marcats',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Descripció estat:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Càrrec:',
    'LNK_IMPORT_VCARD' => 'Crear desde vCard',
    'LNK_LEAD_LIST' => 'Clients Potencials',
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
    'LNK_SELECT_ACCOUNTS' => ' <b>O</b> Seleccioneu un compte',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Seleccioneu contacte',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Està segur que desitja treure aquest client potencial del cas?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Campaigns',
    'LBL_BIRTHDATE' => 'Data de naixement:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Permetre la selecció',
    'LBL_CONVERT_COPY' => 'Copiar les dades',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Afegir mòdul',
    'LBL_CREATE' => 'Crear',
    'LBL_SELECT' => ' <b>O</b> Seleccioneu',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importar clients potencials',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Mòdul en el que crear un nou registre.',
    'LBL_REQUIRED_TIP' => 'Ha de seleccionar o crear els mòduls requerits abans que el client potencial pugui ser convertit.',
    'LBL_COPY_TIP' => 'Si està seleccionat, els camps del client potencial seran copiats a camps amb el mateix nom en els registres recent creats.',
    'LBL_SELECTION_TIP' => 'Els mòduls amb un camp relacionat a Contactes poden ser seleccionats en lloc de creats durant el procés de conversió del client potencial.',
    'LBL_EDIT_TIP' => 'Modificar el disseny de conversió per aquest mòdul.',
    'LBL_DELETE_TIP' => 'Eliminar aquest mòdul del disseny de conversió.',

    'LBL_ACTIVITIES_MOVE' => 'Moure activitats a',
    'LBL_ACTIVITIES_COPY' => 'Copiar activitats a',
    'LBL_ACTIVITIES_MOVE_HELP' => "Seleccioneu els registres d'activitat que vulgui moure dels clients potencials. Tasques, trucades, reunions, notes i correus electrònics que seran traslladats al registre seleccionat(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecciona el o els registres per cada còpia creada de les activitats dels Clients Potencials. Les noves Tasques, Trucades, Reunions i Notes seran creades per a cada registre seleccionat. Els correus electrònics es relacionaran amb els registres seleccionat(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
