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
    'LBL_MODULE_NAME' => 'Tarče',
    'LBL_MODULE_ID' => 'Tarče',
    'LBL_INVITEE' => 'Neposredna poročila',
    'LBL_MODULE_TITLE' => 'Tarče: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje po tarčah',
    'LBL_LIST_FORM_TITLE' => 'Seznam tarč',
    'LBL_NEW_FORM_TITLE' => 'Nova tarča',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_LAST_NAME' => 'Priimek',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pošta',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Ime',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeno:',
    'LBL_CAMPAIGN_ID' => 'ID Kampanje',
    'LBL_EXISTING_ACCOUNT' => 'Uporabljen obstoječi Partner',
    'LBL_CREATED_ACCOUNT' => 'Ustvarjen nov partner',
    'LBL_CREATED_CALL' => 'Ustvarjen nov klic',
    'LBL_CREATED_MEETING' => 'Ustvarjen nov sestanek',
    'LBL_NAME' => 'Ime:',
    'LBL_PROSPECT_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Več informacij',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_OFFICE_PHONE' => 'Telefon pisarna:',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Priimek:',
    'LBL_MOBILE_PHONE' => 'Mobilni telefon:',
    'LBL_HOME_PHONE' => 'Domov:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primarni naslov, ulica:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primarni naslov, mesto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primarni naslov, regija:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarni naslov, država:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primarni naslov, poštna številka:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativni naslov ulica:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativni naslov, mesto:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativni naslov regija:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativni naslov, Država:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativni naslov, Poštna številka:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Oddelek:',
    'LBL_BIRTHDATE' => 'Datum rojstva:',
    'LBL_EMAIL_ADDRESS' => 'E-pošta:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga e-pošta:',
    'LBL_ANY_EMAIL' => 'Katerakoli e-pošta:',
    'LBL_ASSISTANT' => 'Asistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefon Asistenta:',
    'LBL_DO_NOT_CALL' => 'Ne kliči:',
    'LBL_EMAIL_OPT_OUT' => 'Odjavljena E-pošta:',
    'LBL_PRIMARY_ADDRESS' => 'Primarni naslov:',
    'LBL_ALTERNATE_ADDRESS' => 'Ostali naslovi:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_CITY' => 'Mesto:',
    'LBL_STATE' => 'Država ali regija:',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_OPP_NAME' => 'Ime Priložnosti:',
    'LBL_IMPORT_VCARD' => 'Uvozi vKartico (vCard)',
    'LBL_IMPORT_VCARDTEXT' => 'Avtomatsko ustvari nov Kontakt z uvozom vKartice (vCard).',
    'LBL_DUPLICATE' => 'Možno podvajanje tarč',
    'MSG_SHOW_DUPLICATES' => 'Podvajate Kontakt. Lahko bodisi kliknite shrani za ustvarjanje novega kontakta ali pa kliknete Prekliči.',
    'MSG_DUPLICATE' => 'Podvajate Kontakt. Lahko izberete Kontakt na spodnjem seznamu, ali pa kliknite Shrani za ustvarjanje novega Kontakta.',
    'LNK_IMPORT_VCARD' => 'Ustvari iz vKartice',
    'LNK_NEW_ACCOUNT' => 'Ustvari partnerja',
    'LNK_NEW_OPPORTUNITY' => 'Ustvari priložnost',
    'LNK_NEW_CASE' => 'Ustvari Reklamacijo',
    'LNK_NEW_NOTE' => 'Ustvari opombo ali priponko',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_EMAIL' => 'Arhiviraj e-pošto',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_NEW_TASK' => 'Ustvari nalogo',
    'LNK_NEW_APPOINTMENT' => 'Načrtuj Klic',
    'LNK_IMPORT_PROSPECTS' => 'Uvozi tarče',
    'NTC_DELETE_CONFIRMATION' => 'Ste prepričani, da želite izbrisati ta vnos?',
    'NTC_REMOVE_CONFIRMATION' => 'Ste prepričani, da želite odstraniti Kontakt iz Reklamacije?',
    'ERR_DELETE_RECORD' => 'Za izbris Kontakta je potrebno definirati številko zapisa.',
    'LBL_SALUTATION' => 'Nagovor',
    'LBL_CREATED_OPPORTUNITY' => 'Ustvarjena nova priložnost',
    'LNK_SELECT_ACCOUNT' => "Izberi partnerja",
    'LNK_NEW_PROSPECT' => 'Ustvari tarčo',
    'LNK_PROSPECT_LIST' => 'Tarče',
    'LNK_NEW_CAMPAIGN' => 'Ustvari kampanjo',
    'LNK_CAMPAIGN_LIST' => 'Kampanje',
    'LNK_NEW_PROSPECT_LIST' => 'Ustvari seznam tarč',
    'LNK_PROSPECT_LIST_LIST' => 'Seznami tarč',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izberi obkljukane tarče',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izberi obkljukane tarče',
    'LBL_INVALID_EMAIL' => 'Napačen Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tarče',
    'LBL_PROSPECT_LIST' => 'Seznam tarč',
    'LBL_CONVERT_BUTTON_TITLE' => 'Pretvori tarčo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Pretvori tarčo',
    'LNK_NEW_CONTACT' => 'Nov kontakt',
    'LBL_CREATED_CONTACT' => "Ustvarjen nov kontakt",
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Potek Kampanje',
    'LBL_TRACKER_KEY' => 'Ključ sledilca klikov',
    'LBL_LEAD_ID' => 'ID Potenciala',
    'LBL_CONVERTED_LEAD' => 'Pretvorjen potencial',
    'LBL_ACCOUNT_NAME' => 'Ime računa',
    'LBL_EDIT_ACCOUNT_NAME' => 'Naziv partnerja:',
    'LBL_CREATED_USER' => 'Ustvarjen kontakt',
    'LBL_MODIFIED_USER' => 'Spremenjen uporabnik',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Dogodki',
);
