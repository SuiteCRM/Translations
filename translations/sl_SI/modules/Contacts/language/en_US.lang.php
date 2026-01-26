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
    'ERR_DELETE_RECORD' => 'Številka zapisa mora biti definirana za izbris Kontakta.',
    'LBL_ACCOUNT_ID' => 'Partner ID:',
    'LBL_ACCOUNT_NAME' => 'Ime Partnerja:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativni naslov, mesto:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativni naslov regija:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativni naslov, Poštna številka:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativni naslov, Država:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Ostali naslovi 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Ostali naslovi 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativni naslov ulica:',
    'LBL_ALTERNATE_ADDRESS' => 'Ostali naslovi:',
    'LBL_ALT_ADDRESS' => 'Ostali naslovi:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_ANY_EMAIL' => 'Katerikoli E-pošta:',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljen uporabnik',
    'LBL_ASSISTANT_PHONE' => 'Telefon Asistenta:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_BIRTHDATE' => 'Datum rojstva:',
    'LBL_CITY' => 'Mesto:',
    'LBL_CAMPAIGN_ID' => 'ID Kampanje',
    'LBL_CONTACT_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ime Kontakta:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-priložnost:',
    'LBL_CONTACT_ROLE' => 'Vloga:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_CREATED_ACCOUNT' => 'Ustvarjen nov partner',
    'LBL_CREATED_CALL' => 'Ustvarjen nov klic',
    'LBL_CREATED_CONTACT' => 'Ustvarjen nov kontakt',
    'LBL_CREATED_MEETING' => 'Ustvarjen nov sestanek',
    'LBL_CREATED_OPPORTUNITY' => 'Ustvarjena nova priložnost',
    'LBL_DATE_MODIFIED' => 'Spremenjeno dne:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DEPARTMENT' => 'Oddelek:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direktna poročila',
    'LBL_DO_NOT_CALL' => 'Ne kliči:',
    'LBL_DUPLICATE' => 'Možno podvajanje vnosov',
    'LBL_EMAIL_ADDRESS' => 'E-pošta:',
    'LBL_EMAIL_OPT_OUT' => 'Odjavljena E-pošta:',
    'LBL_EXISTING_ACCOUNT' => 'Uporabljen obstoječi Partner',
    'LBL_EXISTING_CONTACT' => 'Uporabljen obstoječi Kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Uporabljena obstoječa Priložnost',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    'LBL_HOME_PHONE' => 'Domov:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Uvozi vKartico',
    'LBL_VCARD' => 'vKartica',
    'LBL_IMPORT_VCARDTEXT' => 'Avtomatsko ustvari nov Kontakt z uvozom vKartice (vCard).',
    'LBL_INVALID_EMAIL' => 'Napačen Email:',
    'LBL_INVITEE' => 'Direktna poročila',
    'LBL_LAST_NAME' => 'Priimek:',
    'LBL_LEAD_SOURCE' => 'Vir potencialov:',
    'LBL_LIST_ACCEPT_STATUS' => 'Sprejmi status',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Partnerja',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_CONTACT_ROLE' => 'Vloga',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pošta',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Seznam kontaktov',
    'LBL_LIST_LAST_NAME' => 'Priimek',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PHONE' => 'Službeni telefon',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobilni telefon:',
    'LBL_MODIFIED' => 'Spremenil:',
    'LBL_MODULE_NAME' => 'Kontakti',
    'LBL_MODULE_TITLE' => 'Kontakti: Domov',
    'LBL_NAME' => 'Ime:',
    'LBL_NEW_FORM_TITLE' => 'Nov kontakt',
    'LBL_NOTE_SUBJECT' => 'Predmet opombe',
    'LBL_OFFICE_PHONE' => 'Telefon v pisarni:',
    'LBL_OPP_NAME' => 'Ime Priložnosti:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID Vloge priložnosti:',
    'LBL_OPPORTUNITY_ROLE' => 'Vloga priložnosti',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga E-pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal aplikacija:',
    'LBL_PORTAL_INFORMATION' => 'Informacije o portalu',
    'LBL_PORTAL_NAME' => 'Ime portala:',
    'LBL_STREET' => 'Naslov',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Glavni naslov - Mesto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarni naslov Regija:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Glavni naslov - Poštna številka:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Glavni naslov - Država:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primarni naslov  2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primarni naslov  3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Glavni naslov - Ulica:',
    'LBL_PRIMARY_ADDRESS' => 'Glavni naslov:',
    'LBL_PRODUCTS_TITLE' => 'Proizvodi',
    'LBL_REPORTS_TO_ID' => 'Odgovarja ID-ju:',
    'LBL_REPORTS_TO' => 'Odgovarja:',
    'LBL_RESOURCE_NAME' => 'Ime vira',
    'LBL_SALUTATION' => 'Nagovor:',
    'LBL_SAVE_CONTACT' => 'Shrani kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje kontakta',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izberi označene kontakte',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izberi označene kontakte',
    'LBL_STATE' => 'Država ali regija:',
    'LBL_SYNC_CONTACT' => 'Sinhronizacija z Outlook®:',
    'LBL_PROSPECT_LIST' => 'Seznam tarč',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Kontakti',
    'LNK_IMPORT_VCARD' => 'Ustvari iz vizitke',
    'LNK_NEW_ACCOUNT' => 'Ustvari Partnerja',
    'LNK_NEW_APPOINTMENT' => 'Načrtuj Klic',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_CASE' => 'Ustvari primer',
    'LNK_NEW_CONTACT' => 'Ustvari kontakt',
    'LNK_NEW_EMAIL' => 'Arhiviraj e-pošto',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_NEW_NOTE' => 'Ustvari opombo',
    'LNK_NEW_OPPORTUNITY' => 'Ustvari priložnost',
    'LNK_NEW_TASK' => 'Ustvari nalogo',
    'LNK_SELECT_ACCOUNT' => "Izberi partnerja",
    'NTC_DELETE_CONFIRMATION' => 'Ste prepričani, da želite izbrisati izbran vnos?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Ustvarjanje Priložnosti zahteva Partnerja. \n Prosim ustvarite ga, ali pa izberite obstoječega.',
    'NTC_REMOVE_CONFIRMATION' => 'Ste prepričani, da želite odstraniti Kontakt iz Reklamacije?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciali',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Priložnosti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiraj v osnovni naslov',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiraj v druge naslove',

    'LBL_CASES_SUBPANEL_TITLE' => 'Reklamacije',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hrošči',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECTS_RESOURCES' => 'Viri projekta',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_STATE' => 'Država',
    'LBL_HOMEPAGE_TITLE' => 'Moji kontakti',
    'LBL_OPPORTUNITIES' => 'Priložnosti',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LNK_IMPORT_CONTACTS' => 'Uvozi kontakte',

    // SNIP
    'LBL_USER_SYNC' => 'Sinhronizacija uporabnika',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Dogodki',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'Create Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Pogodbe',
    'LBL_AOS_INVOICES' => 'Računi',
    'LBL_AOS_QUOTES' => 'Ponudbe',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
