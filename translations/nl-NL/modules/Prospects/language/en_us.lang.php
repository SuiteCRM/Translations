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
    'LBL_MODULE_NAME' => 'Doelen',
    'LBL_MODULE_ID' => 'Doelen',
    'LBL_INVITEE' => 'Directe Rapportages',
    'LBL_MODULE_TITLE' => 'Doelen: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Doelen zoeken',
    'LBL_LIST_FORM_TITLE' => 'Verzendlijst',
    'LBL_NEW_FORM_TITLE' => 'Nieuw doel',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_LAST_NAME' => 'Achternaam',
    'LBL_LIST_TITLE' => 'Functieomschrijving',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mails',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_FIRST_NAME' => 'Voornaam',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan:',
    'LBL_CAMPAIGN_ID' => 'Campagne Id',
    'LBL_EXISTING_ACCOUNT' => 'Bestaande relatie gebruikt',
    'LBL_CREATED_ACCOUNT' => 'Nieuwe relatie aangemaakt',
    'LBL_CREATED_CALL' => 'Nieuw telefoongesprek aangemaakt',
    'LBL_CREATED_MEETING' => 'Nieuwe afspraak aangemaakt',
    'LBL_NAME' => 'Naam:',
    'LBL_PROSPECT_INFORMATION' => 'Relatiegegevens', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Meer informatie',
    'LBL_FIRST_NAME' => 'Voornaam:',
    'LBL_OFFICE_PHONE' => 'Telefoon (werk):',
    'LBL_ANY_PHONE' => '(Deel van) telefoonnummer',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_LAST_NAME' => 'Achternaam:',
    'LBL_MOBILE_PHONE' => 'Mobiel:',
    'LBL_HOME_PHONE' => 'Priv',
    'LBL_OTHER_PHONE' => 'Bgg:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + huisnummer:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primair Land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primair provincie:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatief adres straat:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatief adres plaats:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatief land adres:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatief adres provincie:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatieve postcode adres:',
    'LBL_TITLE' => 'Functieomschrijving:',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_BIRTHDATE' => 'Verjaardag:',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternatief e-mailadres:',
    'LBL_ANY_EMAIL' => 'Willekeurige E-mail:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefoonnr assistent',
    'LBL_DO_NOT_CALL' => 'Niet bellen:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt-out:',
    'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',
    'LBL_ALTERNATE_ADDRESS' => 'Alt. adres:',
    'LBL_ANY_ADDRESS' => '(Deel van) adres:',
    'LBL_CITY' => 'Plaats:',
    'LBL_STATE' => 'Provincie of regio:',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_OPP_NAME' => 'Kansnaam:',
    'LBL_IMPORT_VCARD' => 'Importeer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Maak automatisch een nieuwe contactpersoon aan door een vCard van uw computer te importeren.',
    'LBL_DUPLICATE' => 'Mogelijk dubbele items',
    'MSG_SHOW_DUPLICATES' => 'Door het aanmaken van deze contactpersoon maak je mogelijk een duplicaat record. Je kunt op Maak Item klikken om door te gaan of afbreken door op Cancel te klikken.',
    'MSG_DUPLICATE' => 'Door het aanmaken van deze contactpersoon maak je mogelijk een duplicaat record. Je kunt op Maak Item klikken om door te gaan of afbreken door op Cancel te klikken.',
    'LNK_IMPORT_VCARD' => 'Aanmaken vanaf vCard',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LNK_NEW_CASE' => 'Nieuw verzoek',
    'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
    'LNK_NEW_CALL' => 'Telefoongesprek inplannen',
    'LNK_NEW_EMAIL' => 'E-mail archiveren',
    'LNK_NEW_MEETING' => 'Vergadering plannen',
    'LNK_NEW_TASK' => 'Nieuwe taak',
    'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
    'LNK_IMPORT_PROSPECTS' => 'Importeer doelen',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'NTC_SNOOZE_CONFIRMATION' => 'Weet u zeker dat u wilt uitstellen?',
    'NTC_REMOVE_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen voor dit verzoek?',
    'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze RSS Nieuwsfeed te verwijderen',
    'LBL_SALUTATION' => 'Aanhef',
    'LBL_CREATED_OPPORTUNITY' => 'Nieuwe kans aangemaakt',
    'LNK_SELECT_ACCOUNT' => "Kies een relatie",
    'LNK_NEW_PROSPECT' => 'Nieuw doel',
    'LNK_PROSPECT_LIST' => 'Bekijk doelen',
    'LNK_NEW_CAMPAIGN' => 'Nieuwe campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_NEW_PROSPECT_LIST' => 'Nieuwe verzendlijst',
    'LNK_PROSPECT_LIST_LIST' => 'Verzendlijsten',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecteer gekozen items',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecteer gekozen items',
    'LBL_INVALID_EMAIL' => 'Ongeldig E-mail:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Doelen',
    'LBL_PROSPECT_LIST' => 'Prospect Lijst',
    'LBL_CONVERT_BUTTON_TITLE' => 'Doel converteren',
    'LBL_CONVERT_BUTTON_LABEL' => 'Doel converteren',
    'LNK_NEW_CONTACT' => 'Nieuwe contactpersoon',
    'LBL_CREATED_CONTACT' => "Nieuwe contactpersoon aangemaakt",
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes Log',
    'LBL_TRACKER_KEY' => 'Id traceerbare URL',
    'LBL_LEAD_ID' => 'Lead ID',
    'LBL_CONVERTED_LEAD' => 'Geconverteerde lead',
    'LBL_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_EDIT_ACCOUNT_NAME' => 'Relatienaam:',
    'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Evenementen',
);
