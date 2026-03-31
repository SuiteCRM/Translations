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
    'LBL_MODULE_NAME' => 'Ținte',
    'LBL_MODULE_ID' => 'Ținte',
    'LBL_INVITEE' => 'Subordonați',
    'LBL_MODULE_TITLE' => 'Obiective: Acasă',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare țintă',
    'LBL_LIST_FORM_TITLE' => 'Lista de ținte',
    'LBL_NEW_FORM_TITLE' => 'Nou prospect',
    'LBL_LIST_NAME' => 'Prenume',
    'LBL_LIST_LAST_NAME' => 'Nume de familie',
    'LBL_LIST_TITLE' => 'Funcție',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Prenume',
    'LBL_ASSIGNED_TO_NAME' => 'Atrbuit lui',
    'LBL_ASSIGNED_TO_ID' => 'Atribuit lui:',
    'LBL_CAMPAIGN_ID' => 'ID Campanie',
    'LBL_EXISTING_ACCOUNT' => 'Utilizat un cont existent',
    'LBL_CREATED_ACCOUNT' => 'Contul nou creat',
    'LBL_CREATED_CALL' => 'Un nou apel creat',
    'LBL_CREATED_MEETING' => 'A fost creată o nouă întâlnire',
    'LBL_NAME' => 'Nume',
    'LBL_PROSPECT_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Mai multe informații',
    'LBL_FIRST_NAME' => 'Nume:',
    'LBL_OFFICE_PHONE' => 'Telefon Birou:',
    'LBL_ANY_PHONE' => 'Orice telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Nume de familie:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Telefon acasă:',
    'LBL_OTHER_PHONE' => 'Alt Telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresă principală - Strada:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresă principală - Oraș:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresă principală - Țară:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresă Principală - Județ:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresă principală - Cod poștal:',
    'LBL_ALT_ADDRESS_STREET' => 'Adresă Alternativă Stradă:',
    'LBL_ALT_ADDRESS_CITY' => 'Adresă alternativă - Oraș:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresă alternativă - Țară:',
    'LBL_ALT_ADDRESS_STATE' => 'Adresă Alternativă - Județ:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresă alternativă - Cod Poștal:',
    'LBL_TITLE' => 'Funcție:',
    'LBL_DEPARTMENT' => 'Departament:',
    'LBL_BIRTHDATE' => 'Data nașterii:',
    'LBL_EMAIL_ADDRESS' => 'Adresa de e-mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt Email:',
    'LBL_ANY_EMAIL' => 'Orice email:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefon Asistent:',
    'LBL_DO_NOT_CALL' => 'Nu sunați:',
    'LBL_EMAIL_OPT_OUT' => 'Renunțare la primirea de e-mailuri:',
    'LBL_PRIMARY_ADDRESS' => 'Adresă Principală:',
    'LBL_ALTERNATE_ADDRESS' => 'Altă Adresă:',
    'LBL_ANY_ADDRESS' => 'Orice adresă:',
    'LBL_CITY' => 'Oraș:',
    'LBL_STATE' => 'Județ:',
    'LBL_POSTAL_CODE' => 'Cod poștal:',
    'LBL_COUNTRY' => 'Țară:',
    'LBL_ADDRESS_INFORMATION' => 'Informații adresă',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_OPP_NAME' => 'Nume Oportunitate:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Creează automat un nou contact importând un vCard din sistemul tău de fișiere.',
    'LBL_DUPLICATE' => 'Obiective duplicate posibile',
    'MSG_SHOW_DUPLICATES' => 'Înregistrarea țintă pe care urmează să o creați ar putea fi un duplicat al unei înregistrări țintă care există deja. Înregistrările țintă care conțin nume și/sau adrese de e-mail similare sunt listate mai jos.<br>Faceți clic pe Creare țintă pentru a continua să creați această nouă țintă sau selectați o țintă existentă listată mai jos.',
    'MSG_DUPLICATE' => 'Înregistrarea țintă pe care urmează să o creați ar putea fi un duplicat al unei înregistrări țintă care există deja. Înregistrările țintă care conțin nume și/sau adrese de e-mail similare sunt listate mai jos.<br>Apasă pe Salvează pentru a continua crearea acestei noi ținte, sau apasă Anulează pentru a reveni la modul fără a crea ținta.',
    'LNK_IMPORT_VCARD' => 'Creează din vCard',
    'LNK_NEW_ACCOUNT' => 'Creați Companie',
    'LNK_NEW_OPPORTUNITY' => 'Creează Oportunitate',
    'LNK_NEW_CASE' => 'Creează Cazuri',
    'LNK_NEW_NOTE' => 'Nouă notă',
    'LNK_NEW_CALL' => 'Jurnal Apeluri',
    'LNK_NEW_EMAIL' => 'Arhivare e-mail',
    'LNK_NEW_MEETING' => 'Programare întâlnire',
    'LNK_NEW_TASK' => 'Creează sarcină',
    'LNK_NEW_APPOINTMENT' => 'Creează întâlnire',
    'LNK_IMPORT_PROSPECTS' => 'Importă Prospect',
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur ca doriți sa ștergeți aceasta înregistrare?',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteți sigur că doriți să ștergeți acest contact din caz?',
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie să fie specificat pentru a șterge contactul.',
    'LBL_SALUTATION' => 'Apelativ',
    'LBL_CREATED_OPPORTUNITY' => 'A fost creată o nouă oportunitate',
    'LNK_SELECT_ACCOUNT' => "Selectați Cont",
    'LNK_NEW_PROSPECT' => 'Creare țintă',
    'LNK_PROSPECT_LIST' => 'Vezi țintele',
    'LNK_NEW_CAMPAIGN' => 'Creare campanie',
    'LNK_CAMPAIGN_LIST' => 'Campanii',
    'LNK_NEW_PROSPECT_LIST' => 'Creați o listă de ținte',
    'LNK_PROSPECT_LIST_LIST' => 'Lista de ținte',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selectați țintele verificate',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selectați țintele verificate',
    'LBL_INVALID_EMAIL' => 'Email Invalid:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ținte',
    'LBL_PROSPECT_LIST' => 'Listă Prospectați',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convertește prospect',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertește prospect',
    'LNK_NEW_CONTACT' => 'Contact nou',
    'LBL_CREATED_CONTACT' => "Creat contact nou",
    'LBL_CAMPAIGNS' => 'Campanii',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Jurnal campanii',
    'LBL_TRACKER_KEY' => 'Cheie de urmărire',
    'LBL_LEAD_ID' => 'Id Conversie',
    'LBL_CONVERTED_LEAD' => 'Conversie convertită',
    'LBL_ACCOUNT_NAME' => 'Nume cont',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nume Cont:',
    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Utilizator modificat',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Evenimente',
);
