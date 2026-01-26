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
    'LBL_MODULE_NAME' => 'Målgrupper',
    'LBL_MODULE_ID' => 'Målgrupper',
    'LBL_INVITEE' => 'Rapporter',
    'LBL_MODULE_TITLE' => 'Målgrupper: Hjem',
    'LBL_SEARCH_FORM_TITLE' => 'Målgruppe søgning',
    'LBL_LIST_FORM_TITLE' => 'Målliste',
    'LBL_NEW_FORM_TITLE' => 'Opret Mål',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_LIST_TITLE' => 'Jobtitel',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Fornavn',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt til:',
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_EXISTING_ACCOUNT' => 'Brugte en eksisterende kunde',
    'LBL_CREATED_ACCOUNT' => 'Opret en ny kunde',
    'LBL_CREATED_CALL' => 'Oprettede et nyt opkald',
    'LBL_CREATED_MEETING' => 'Oprettede et nyt møde',
    'LBL_NAME' => 'Navn:',
    'LBL_PROSPECT_INFORMATION' => 'Kunde Information', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Mere information',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_OFFICE_PHONE' => 'Arbejdstelefon:',
    'LBL_ANY_PHONE' => 'Nogen telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Hjem:',
    'LBL_OTHER_PHONE' => 'Andre Telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær adresse Gade:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær adresse By:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær adresse Land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær adresse Stat:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær adresse Postnr:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adresse Gadenavn:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adresse By:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adresse Land:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adresse Stat:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adresse Postnr:',
    'LBL_TITLE' => 'Jobtitel:',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Andre Email:',
    'LBL_ANY_EMAIL' => 'Nogen email:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Assistent telefon:',
    'LBL_DO_NOT_CALL' => 'Ønsker ikke opkald:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt-Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
    'LBL_ALTERNATE_ADDRESS' => 'Anden adresse:',
    'LBL_ANY_ADDRESS' => 'Nogen adresse:',
    'LBL_CITY' => 'By:',
    'LBL_STATE' => 'Stat eller Region:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_OPP_NAME' => 'Navn på mulighed:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatisk oprettelse af en ny kontakt ved importering af vCard fil.',
    'LBL_DUPLICATE' => 'Mulig Duplet Målgruppe',
    'MSG_SHOW_DUPLICATES' => 'Du laver en duplet af kontakten. Du kan enten gemme og oprette kontakten eller klik afbryd.',
    'MSG_DUPLICATE' => 'Du laver en duplet af kontakten. Du kan enten gemme og oprette kontakten eller klik afbryd.',
    'LNK_IMPORT_VCARD' => 'Opret fra vCard',
    'LNK_NEW_ACCOUNT' => 'Ny kunde',
    'LNK_NEW_OPPORTUNITY' => 'Opret mulighed',
    'LNK_NEW_CASE' => 'Opret sag',
    'LNK_NEW_NOTE' => 'Opret note eller vedhæft',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_EMAIL' => 'Arkiver Email',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_NEW_APPOINTMENT' => 'Planlæg opkald',
    'LNK_IMPORT_PROSPECTS' => 'Importer Målgrupper',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette denne kontakt fra sagen?',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette kontakten.',
    'LBL_SALUTATION' => 'Tiltaleform',
    'LBL_CREATED_OPPORTUNITY' => 'Oprettede en ny mulighed',
    'LNK_SELECT_ACCOUNT' => "Vælg kunde",
    'LNK_NEW_PROSPECT' => 'Opret målgruppe',
    'LNK_PROSPECT_LIST' => 'Målgrupper',
    'LNK_NEW_CAMPAIGN' => 'Opret kampagne',
    'LNK_CAMPAIGN_LIST' => 'Kampagner',
    'LNK_NEW_PROSPECT_LIST' => 'Opret målgruppe liste',
    'LNK_PROSPECT_LIST_LIST' => 'Mållister',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg checkede Målgrupper',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vælg checkede Målgrupper',
    'LBL_INVALID_EMAIL' => 'Ugyldig Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Målgrupper',
    'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konverter Målgruppe',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konverter Målgruppe',
    'LNK_NEW_CONTACT' => 'Ny kontakt',
    'LBL_CREATED_CONTACT' => "Oprettede en ny kontakt",
    'LBL_CAMPAIGNS' => 'Kampagner',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagne Log',
    'LBL_TRACKER_KEY' => 'Tracker Nøgle',
    'LBL_LEAD_ID' => 'Emne Id',
    'LBL_CONVERTED_LEAD' => 'Konverteret emne',
    'LBL_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_EDIT_ACCOUNT_NAME' => 'Kundenavn:',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
