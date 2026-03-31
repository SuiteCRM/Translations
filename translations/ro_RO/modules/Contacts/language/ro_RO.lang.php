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
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentru a șterge acest contact.',
    'LBL_ACCOUNT_ID' => 'ID Cont:',
    'LBL_ACCOUNT_NAME' => 'Nume cont:',
    'LBL_CAMPAIGN' => 'Campanie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitati',
    'LBL_ADDRESS_INFORMATION' => 'Informații adresă',
    'LBL_ALT_ADDRESS_CITY' => 'Adresă alternativă - Oraș:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresă alternativă - Țară:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresă Alternativă - Cod Poștal:',
    'LBL_ALT_ADDRESS_STATE' => 'Adresă alternativă - Județ:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresă Alternativă Stradă 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresă Alternativă Stradă 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Adresă Alternativă Stradă:',
    'LBL_ALTERNATE_ADDRESS' => 'Altă Adresă:',
    'LBL_ALT_ADDRESS' => 'Altă Adresă:',
    'LBL_ANY_ADDRESS' => 'Orice adresă:',
    'LBL_ANY_EMAIL' => 'Orice email:',
    'LBL_ANY_PHONE' => 'Orice telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui:',
    'LBL_ASSIGNED_TO_ID' => 'Utilizator Atribuit',
    'LBL_ASSISTANT_PHONE' => 'Telefon Asistent:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_BIRTHDATE' => 'Dată Naştere:',
    'LBL_CITY' => 'Oraș:',
    'LBL_CAMPAIGN_ID' => 'ID Campanie',
    'LBL_CONTACT_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Denumire contact:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Oportunitate:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'Țară:',
    'LBL_CREATED_ACCOUNT' => 'Contul nou creat',
    'LBL_CREATED_CALL' => 'Un nou apel creat',
    'LBL_CREATED_CONTACT' => 'Un nou contact creat',
    'LBL_CREATED_MEETING' => 'O nouă întâlnire creată',
    'LBL_CREATED_OPPORTUNITY' => 'A creat o nouă oportunitate',
    'LBL_DATE_MODIFIED' => 'Data modificării:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacte',
    'LBL_DEPARTMENT' => 'Departament:',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Se raportează direct',
    'LBL_DO_NOT_CALL' => 'Nu sunați:',
    'LBL_DUPLICATE' => 'Contacte posibil duplicate',
    'LBL_EMAIL_ADDRESS' => 'Adresa de e-mail:',
    'LBL_EMAIL_OPT_OUT' => 'Renunțare la primirea de e-mailuri:',
    'LBL_EXISTING_ACCOUNT' => 'Utilizat un cont existent',
    'LBL_EXISTING_CONTACT' => 'S-a folosit un contact deja existent',
    'LBL_EXISTING_OPPORTUNITY' => 'Utilizata o oportunitate existenta',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prenume:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_HOME_PHONE' => 'Acasă:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Creați automat un contact nou prin importul unui vCard de pe calculatorul dv.',
    'LBL_INVALID_EMAIL' => 'Email Invalid:',
    'LBL_INVITEE' => 'Subordonați',
    'LBL_LAST_NAME' => 'Nume de familie:',
    'LBL_LEAD_SOURCE' => 'Sursă conversie:',
    'LBL_LIST_ACCEPT_STATUS' => 'Acceptați statutul',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume cont',
    'LBL_LIST_CONTACT_NAME' => 'Nume contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Prenume',
    'LBL_LIST_FORM_TITLE' => 'Lista de contacte',
    'LBL_LIST_LAST_NAME' => 'Nume de familie',
    'LBL_LIST_NAME' => 'Prenume',
    'LBL_LIST_PHONE' => 'Telefon birou',
    'LBL_LIST_TITLE' => 'Funcție',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Modificat De:',
    'LBL_MODULE_NAME' => 'Contacte',
    'LBL_MODULE_TITLE' => 'Contacte: Acasă',
    'LBL_NAME' => 'Nume',
    'LBL_NEW_FORM_TITLE' => 'Contact Nou',
    'LBL_NOTE_SUBJECT' => 'Subiect',
    'LBL_OFFICE_PHONE' => 'Telefon Birou:',
    'LBL_OPP_NAME' => 'Nume Oportunitate:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID-ul pentru rolul oportunități:',
    'LBL_OPPORTUNITY_ROLE' => 'Rolul oportunități',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt Email:',
    'LBL_OTHER_PHONE' => 'Alt Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Aplicație portal:',
    'LBL_PORTAL_INFORMATION' => 'Informație portal',
    'LBL_PORTAL_NAME' => 'Nume portal:',
    'LBL_STREET' => 'Stradă',
    'LBL_POSTAL_CODE' => 'Cod poștal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresă principală - Oraș:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresă principală - Țară:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresă principală - Cod poștal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresă Principală - Județ:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresă Principală Stradă 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresă Principală Stradă 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresă principală - Strada:',
    'LBL_PRIMARY_ADDRESS' => 'Adresă Principală:',
    'LBL_PRODUCTS_TITLE' => 'Produse',
    'LBL_REPORTS_TO_ID' => 'Raportează ID-lui:',
    'LBL_REPORTS_TO' => 'Raportează Lui:',
    'LBL_RESOURCE_NAME' => 'Nume Resursă',
    'LBL_SALUTATION' => 'Adresare:',
    'LBL_SAVE_CONTACT' => 'Salvați Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Căutați Contact',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selectați Contacte Marcate',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selectați Contacte Marcate',
    'LBL_STATE' => 'Județ:',
    'LBL_SYNC_CONTACT' => 'Sincronizat în Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Listă Prospectați',
    'LBL_TITLE' => 'Funcţie:',
    'LNK_CONTACT_LIST' => 'Vizualizați Contacte',
    'LNK_IMPORT_VCARD' => 'Creați contact din vCard',
    'LNK_NEW_ACCOUNT' => 'Creați Companie',
    'LNK_NEW_APPOINTMENT' => 'Creează întâlnire',
    'LNK_NEW_CALL' => 'Jurnal Apeluri',
    'LNK_NEW_CASE' => 'Creează Cazuri',
    'LNK_NEW_CONTACT' => 'Creează Contact',
    'LNK_NEW_EMAIL' => 'Arhivare e-mail',
    'LNK_NEW_MEETING' => 'Programare întâlnire',
    'LNK_NEW_NOTE' => 'Creează Note',
    'LNK_NEW_OPPORTUNITY' => 'Creează Oportunitate',
    'LNK_NEW_TASK' => 'Creează sarcină',
    'LNK_SELECT_ACCOUNT' => "Selectați Cont",
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur ca doriți sa ștergeți aceasta înregistrare?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Crearea unei oportunităţi necesită un cont.\n Vă rugăm fie creați un cont nou sau selectați unul existent.',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să înlăturați acest contact de la caz?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Conversie',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunități',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documente',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiați în Adresă Primară',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiați în Altă Adresă',

    'LBL_CASES_SUBPANEL_TITLE' => 'Cazuri',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Erori',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_PROJECTS_RESOURCES' => 'Resurse Proiecte',
    'LBL_CAMPAIGNS' => 'Campanii',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campanii',
    'LBL_LIST_CITY' => 'Oraș',
    'LBL_LIST_STATE' => 'Județ',
    'LBL_HOMEPAGE_TITLE' => 'Contactele Mele',
    'LBL_OPPORTUNITIES' => 'Oportunități',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiecte',
    'LNK_IMPORT_CONTACTS' => 'Importați Contacte',

    // SNIP
    'LBL_USER_SYNC' => 'Sincronizare Utilizator',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Evenimente',

    'LBL_AOP_CASE_UPDATES' => 'Actualizări caz',
    'LBL_CREATE_PORTAL_USER' => 'Creați Utilizator Portal',
    'LBL_ENABLE_PORTAL_USER' => 'Activați Utilizator Portal',
    'LBL_DISABLE_PORTAL_USER' => 'Dezactivați Utilizator Portal',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Crearea utilizator portal eșuată',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Activare utilizator portal eșuată',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Dezactivare utilizator portal eșuată',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Utilizator portal creat',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Utilizator portal activat',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Utilizator portal dezactivat',
    'LBL_NO_JOOMLA_URL' => 'Niciun URL portal specificat',
    'LBL_PORTAL_USER_TYPE' => 'Tip utilizator portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Cont Dezactivat',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID Cont Joomla',

    'LBL_AOS_CONTRACTS' => 'Contracte',
    'LBL_AOS_INVOICES' => 'Facturi',
    'LBL_AOS_QUOTES' => 'Oferte',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contactele proiectului din titlul proiectului',

    'LBL_LIST_INVITE_STATUS' => 'Statusul invitației',
);
