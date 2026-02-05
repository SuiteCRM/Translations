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
    'LBL_ACCOUNT_ID' => 'ID Cont',
    'LBL_ACCOUNT_NAME' => 'Nume Cont:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_ADDRESS_INFORMATION' => 'Informații Adresă',
    'LBL_ALT_ADDRESS_CITY' => 'Orașul pentru adresa alternativă',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Țară pentru adresa alternativă',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Cod poștal alternativ',
    'LBL_ALT_ADDRESS_STATE' => 'Adresa alternativă Stat',
    'LBL_ALT_ADDRESS_STREET_2' => 'Strada 2 ca adresă alternativă',
    'LBL_ALT_ADDRESS_STREET_3' => 'Strada 3 ca adresă alternativă',
    'LBL_ALT_ADDRESS_STREET' => 'Adresă alternativă stradă',
    'LBL_ALTERNATE_ADDRESS' => 'Altă Adresă:',
    'LBL_ALT_ADDRESS' => 'Altă Adresă:',
    'LBL_ANY_ADDRESS' => 'Orice Adresă:',
    'LBL_ANY_EMAIL' => 'Orice Email:',
    'LBL_ANY_PHONE' => 'Orice Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ASSIGNED_TO_ID' => 'Atribuit utilizatorului:',
    'LBL_CITY' => 'Oraș:',
    'LBL_CONTACT_ID' => 'Identificare Contact',
    'LBL_CONTACT_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nume conversie:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Conversie-Oportunitate:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Conversie:',
    'LBL_CONVERTED_ACCOUNT' => 'Cont Convertit:',
    'LBL_CONVERTED_CONTACT' => 'Contact Convertit:',
    'LBL_CONVERTED_OPP' => 'Oportunitate Convertita:',
    'LBL_CONVERTED' => 'Convertită',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertește prospect',
    'LBL_CONVERTLEAD' => 'Convertește prospect',
    'LBL_CONVERTLEAD_WARNING' => 'Atenție: Statutul Conversiei pe care o veți converti este "Convertită". Este posibil ca înregistrările de contact și/sau cont să fi fost deja create din Conversie. Dacă doriți să continuați să convertiți Conversia, faceți clic pe Salvare. Pentru a reveni la conversie fără a o converti, faceți clic pe Anulare.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact posibil: ',
    'LBL_COUNTRY' => 'Țară:',
    'LBL_CREATED_NEW' => 'Creează un nou',
    'LBL_CREATED_ACCOUNT' => 'Contul nou creat',
    'LBL_CREATED_CALL' => 'Un nou apel creat',
    'LBL_CREATED_CONTACT' => 'Un nou contact creat',
    'LBL_CREATED_MEETING' => 'O nouă întâlnire creată',
    'LBL_CREATED_OPPORTUNITY' => 'A creat o nouă oportunitate',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Piste',
    'LBL_DEPARTMENT' => 'Departament:',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DO_NOT_CALL' => 'Nu sunați:',
    'LBL_DUPLICATE' => 'Conversii similare',
    'LBL_EMAIL_ADDRESS' => 'Adresă Email:',
    'LBL_EMAIL_OPT_OUT' => 'Nu contacta prin email:',
    'LBL_EXISTING_ACCOUNT' => 'Utilizat un cont existent',
    'LBL_EXISTING_CONTACT' => 'S-a folosit un contact deja existent',
    'LBL_EXISTING_OPPORTUNITY' => 'Utilizata o oportunitate existenta',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prenume:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_HOME_PHONE' => 'Telefon acasă:',
    'LBL_IMPORT_VCARD' => 'Importați vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Creează automat o nouă conversie prin importul unui vCard din sistemul tău de fișiere.',
    'LBL_INVALID_EMAIL' => 'Email invalid:',
    'LBL_INVITEE' => 'Raport direct',
    'LBL_LAST_NAME' => 'Nume de familie:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrierea sursei conversiei:',
    'LBL_LEAD_SOURCE' => 'Sursă conversie:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status Acceptare',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_CONTACT_NAME' => 'Nume Conversiei',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Data creării',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Prenume',
    'LBL_LIST_FORM_TITLE' => 'Lista conversii',
    'LBL_LIST_LAST_NAME' => 'Nume de Familie',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrierea sursei conversiei',
    'LBL_LIST_LEAD_SOURCE' => 'Sursă conversie',
    'LBL_LIST_MY_LEADS' => 'Conversiile mele',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_PHONE' => 'Telefon Birou',
    'LBL_LIST_REFERED_BY' => 'Recomandat de',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Funcție',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Piste',
    'LBL_MODULE_TITLE' => 'Conversii: Acasă',
    'LBL_NAME' => 'Nume:',
    'LBL_NEW_FORM_TITLE' => 'Conversie nouă',
    'LBL_OFFICE_PHONE' => 'Telefon birou:',
    'LBL_OPP_NAME' => 'Nume Oportunitate:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Cantitate Oportunitate:',
    'LBL_OPPORTUNITY_ID' => 'ID oportunitate',
    'LBL_OPPORTUNITY_NAME' => 'Nume Oportunitate:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt email:',
    'LBL_OTHER_PHONE' => 'Alt telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplicație portal',
    'LBL_PORTAL_INFORMATION' => 'Informație portal',
    'LBL_PORTAL_NAME' => 'Nume portal:',
    'LBL_POSTAL_CODE' => 'Cod poștal:',
    'LBL_STREET' => 'Stradă',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresă principală - Oraș',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresă principală - Țară',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Cod postal al Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Statul Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Strada 2 a Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Strada 3 a Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Strada Adresei Principale',
    'LBL_PRIMARY_ADDRESS' => 'Adresă Principală:',
    'LBL_REFERED_BY' => 'Recomandat de:',
    'LBL_REPORTS_TO_ID' => 'Raportează la ID',
    'LBL_REPORTS_TO' => 'Raportează Lui:',
    'LBL_SALUTATION' => 'Apelativ',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_CREATED' => 'Creat De',
    'LBL_SEARCH_FORM_TITLE' => 'Caută conversii',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Verifici conversiile bifate',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Verifici conversiile bifate',
    'LBL_STATE' => 'Județ:',
    'LBL_STATUS_DESCRIPTION' => 'Descrierea Statutului:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Funcţie:',
    'LNK_IMPORT_VCARD' => 'Creează din vCard',
    'LNK_LEAD_LIST' => 'Vizualizare conversii',
    'LNK_NEW_ACCOUNT' => 'Firmă nouă',
    'LNK_NEW_APPOINTMENT' => 'Creează întâlnire',
    'LNK_NEW_CONTACT' => 'Creează Contact',
    'LNK_NEW_LEAD' => 'Creați Piste',
    'LNK_NEW_NOTE' => 'Crează o notă',
    'LNK_NEW_TASK' => 'Creați Sarcină',
    'LNK_NEW_CASE' => 'Creați Caz',
    'LNK_NEW_CALL' => 'Nou apel',
    'LNK_NEW_MEETING' => 'Programare Întâlnire',
    'LNK_NEW_OPPORTUNITY' => 'Creează oportunitate',
    'LNK_SELECT_ACCOUNTS' => ' <b>SAU</b> Selectează Cont',
    'LNK_SELECT_CONTACTS' => ' <b>SAU</b> Selectează Contact',
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur că doriți să ștergeți această înregistrare?',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteți sigur că doriți să înlăturați acest contact din caz?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campanii',
    'LBL_CAMPAIGN' => 'Campanie:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',
    'LBL_PROSPECT_LIST' => 'Lista Prospect',
    'LBL_CAMPAIGN_LEAD' => 'Campanii',
    'LBL_BIRTHDATE' => 'Dată Naştere:',
    'LBL_ASSISTANT_PHONE' => 'Telefon asistent',
    'LBL_ASSISTANT' => 'Asistent',
    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Modificata de Utilizator',
    'LBL_CAMPAIGNS' => 'Campanii',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Necesar',
    'LBL_CONVERT_SELECT' => 'Permite selecția',
    'LBL_CONVERT_COPY' => 'Copiază datele',
    'LBL_CONVERT_EDIT' => 'Editați',
    'LBL_CONVERT_DELETE' => 'Ștergere',
    'LBL_CONVERT_ADD_MODULE' => 'Adaugă Modul',
    'LBL_CREATE' => 'Creați',
    'LBL_SELECT' => ' <b>SAU</b> Selectați',
    'LBL_WEBSITE' => 'Site Web',
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
    'LBL_CAMPAIGN_ID' => 'ID campanie',
    'LBL_EDITLAYOUT' => 'Editare aranjament' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Introduceți data' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Încărcare' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editați' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Evenimente',
);
