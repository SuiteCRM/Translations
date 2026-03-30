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

    'ERR_DELETE_RECORD' => 'Trebuie să specifici un număr de înregistrare pentru a șterge această înregistrare.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descrierea Contului',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'Orașul pentru adresa alternativă',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Țară pentru adresa alternativă',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Cod poștal alternativ',
    'LBL_ALT_ADDRESS_STATE' => 'Adresa alternativă Stat',
    'LBL_ALT_ADDRESS_STREET_2' => 'Strada 2 ca adresă alternativă',
    'LBL_ALT_ADDRESS_STREET_3' => 'Strada 3 ca adresă alternativă',
    'LBL_ALT_ADDRESS_STREET' => 'Adresă alternativă stradă',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'Identificare Contact',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nume conversie:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Conversie-Oportunitate:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Conversie:',
    'LBL_CONVERTED_ACCOUNT' => 'Cont Convertit:',
    'LBL_CONVERTED_CONTACT' => 'Contact Convertit:',
    'LBL_CONVERTED_OPP' => 'Oportunitate Convertita:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertește prospect',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Atenție: Statutul Conversiei pe care o veți converti este "Convertită". Este posibil ca înregistrările de contact și/sau cont să fi fost deja create din Conversie. Dacă doriți să continuați să convertiți Conversia, faceți clic pe Salvare. Pentru a reveni la conversie fără a o converti, faceți clic pe Anulare.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact posibil: ',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Creează un nou',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Conversii similare',
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
    'LBL_IMPORT_VCARDTEXT' => 'Creează automat o nouă conversie prin importul unui vCard din sistemul tău de fișiere.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrierea sursei conversiei:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Nume Conversiei',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Lista conversii',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrierea sursei conversiei',
    'LBL_LIST_LEAD_SOURCE' => 'Sursă conversie',
    'LBL_LIST_MY_LEADS' => 'Conversiile mele',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Recomandat de',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'Conversii: Acasă',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Conversie nouă',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Cantitate Oportunitate:',
    'LBL_OPPORTUNITY_ID' => 'ID oportunitate',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Aplicație portal',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresă principală - Oraș',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresă principală - Țară',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Cod postal al Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Statul Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Strada 2 a Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Strada 3 a Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Strada Adresei Principale',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Recomandat de:',
    'LBL_REPORTS_TO_ID' => 'Raportează la ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Caută conversii',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Verifici conversiile bifate',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Descrierea Statutului:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Creează din vCard',
    'LNK_LEAD_LIST' => 'Vizualizare conversii',
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
    'LNK_SELECT_ACCOUNTS' => ' <b>SAU</b> Selectează Cont',
    'LNK_SELECT_CONTACTS' => ' <b>SAU</b> Selectează Contact',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteți sigur că doriți să înlăturați acest contact din caz?',
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
    'LBL_CONVERT_SELECT' => 'Permite selecția',
    'LBL_CONVERT_COPY' => 'Copiază datele',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Adaugă Modul',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => ' <b>SAU</b> Selectați',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importa Piste',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modulul in care se creează o nouă înregistrare.',
    'LBL_REQUIRED_TIP' => 'Modulele necesare trebuie create sau selectate înainte ca antetul sa poate fi convertit.',
    'LBL_COPY_TIP' => 'Dacă este bifat, câmpurile din Piste vor fi copiate în câmpuri cu același nume în înregistrările nou create.',
    'LBL_SELECTION_TIP' => 'Module cu un câmp relaționat in Contacte pot fi selectate mai degrabă decât create pe timpul procesului de conversie al piste.',
    'LBL_EDIT_TIP' => 'Modifica schema de conversie pentru acest modul.',
    'LBL_DELETE_TIP' => 'Înlătura acest modul din schema convertita.',

    'LBL_ACTIVITIES_MOVE' => 'Mai multe Activități',
    'LBL_ACTIVITIES_COPY' => 'Copiază Activități în',
    'LBL_ACTIVITIES_MOVE_HELP' => "Selectați înregistrarea la care să se mute activitățile de descoperire de oportunitate. Sarcinile, Apelurile, Întâlnirile, Notițele și Email-urile vor fi mutate în înregistrarea (înregistrările) selectate.",
    'LBL_ACTIVITIES_COPY_HELP' => "Selectați înregistrarea (înregistrările) pentru care să se creeze copii ale activităților din Oportunități. Sarcini noi, Apeluri, Întâlniri și Note noi vor fi create pentru fiecare înregistrarea (înregistrările) selectate. E-mailurile vor fi legate de înregistrarea (înregistrările) selectate.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
