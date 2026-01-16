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
    'LBL_MODULE_NAME' => 'Objekt',
    'LBL_MODULE_ID' => 'Objekt',
    'LBL_INVITEE' => 'Direkta rapporter',
    'LBL_MODULE_TITLE' => 'Objekt: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök objekt',
    'LBL_LIST_FORM_TITLE' => 'Mållista',
    'LBL_NEW_FORM_TITLE' => 'Nytt objekt',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_LIST_TITLE' => 'Jobbtitel',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-post',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Förnamn',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad till:',
    'LBL_CAMPAIGN_ID' => 'Campanj ID',
    'LBL_EXISTING_ACCOUNT' => 'Använde ett existerande företag',
    'LBL_CREATED_ACCOUNT' => 'Skapade ett nytt företag',
    'LBL_CREATED_CALL' => 'Skapade ett nytt samtal',
    'LBL_CREATED_MEETING' => 'Skapade ett nytt möte',
    'LBL_NAME' => 'Namn:',
    'LBL_PROSPECT_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Mer information',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_OFFICE_PHONE' => 'Telfon Arbete:',
    'LBL_ANY_PHONE' => 'Telefonnummer',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Hem:',
    'LBL_OTHER_PHONE' => 'Annan Telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primär adress gata:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primär adress ort:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primär Landsadress:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primär adress stat:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primär adress postnummer:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adress Gata/Väg:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adress Ort:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adress Land:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adress Landskap:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adress Postnummer:',
    'LBL_TITLE' => 'Jobbtitel:',
    'LBL_DEPARTMENT' => 'Avdelning:',
    'LBL_BIRTHDATE' => 'Födelsedatum:',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annan E-post:',
    'LBL_ANY_EMAIL' => 'E-post',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Assistent telefon:',
    'LBL_DO_NOT_CALL' => 'Ring inte:',
    'LBL_EMAIL_OPT_OUT' => 'E-post Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primär adress:',
    'LBL_ALTERNATE_ADDRESS' => 'Alternativ adress:',
    'LBL_ANY_ADDRESS' => 'Adress:',
    'LBL_CITY' => 'Stad:',
    'LBL_STATE' => 'Region:',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_OPP_NAME' => 'Affärs namn:',
    'LBL_IMPORT_VCARD' => 'Importera vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Skapa automatiskt en ny kontakt genom att importera ett vCard från ditt filsystem.',
    'LBL_DUPLICATE' => 'Möjlig objektsdublett',
    'MSG_SHOW_DUPLICATES' => 'Att skapa denna kontakt kan potentiellt skapa en kontaktdublett. Du kan antingen klicka på Skapa objekt för att fortsätta att skapa den nya kontakten med angivna data eller klicka Avbryt.',
    'MSG_DUPLICATE' => 'Att skapa denna kontakt potentiellt skapa en kontaktdublett. Du kan antingen välja en kontakt från listan nedan eller klicka på Skapa objekt för att fortsätta skapa en ny kontakt med angivna data.',
    'LNK_IMPORT_VCARD' => 'Skapa från vCard',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affär',
    'LNK_NEW_CASE' => 'Skapa fall',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_CALL' => 'Schemalägg samtal',
    'LNK_NEW_EMAIL' => 'Arkivera E-post',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_NEW_APPOINTMENT' => 'Skapa Möte',
    'LNK_IMPORT_PROSPECTS' => 'Importera objekt',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort denna posten?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort denna kontakt från detta ärende?',
    'ERR_DELETE_RECORD' => 'Ett postnummer måste specificeras för att ta bort kontakten.',
    'LBL_SALUTATION' => 'Hälsningsfras',
    'LBL_CREATED_OPPORTUNITY' => 'Skapade en ny affär',
    'LNK_SELECT_ACCOUNT' => "Välj företag",
    'LNK_NEW_PROSPECT' => 'Skapa mål',
    'LNK_PROSPECT_LIST' => 'Mål',
    'LNK_NEW_CAMPAIGN' => 'Skapa kampanj',
    'LNK_CAMPAIGN_LIST' => 'Kampanjer',
    'LNK_NEW_PROSPECT_LIST' => 'Skapa mållista',
    'LNK_PROSPECT_LIST_LIST' => 'Mål listor',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade objekt',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Välj markerade objekt',
    'LBL_INVALID_EMAIL' => 'Ogiltig E-post:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Objekt',
    'LBL_PROSPECT_LIST' => 'Prospek lista',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konvertera objekt',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konvertera objekt',
    'LNK_NEW_CONTACT' => 'Ny kontakt',
    'LBL_CREATED_CONTACT' => "Skapade en ny kontakt",
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanj Logg',
    'LBL_TRACKER_KEY' => 'Trackernyckel',
    'LBL_LEAD_ID' => 'Lead-ID',
    'LBL_CONVERTED_LEAD' => 'Konverterad Lead',
    'LBL_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_EDIT_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_MODIFIED_USER' => 'Ändrad användare',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Händelser',
);
