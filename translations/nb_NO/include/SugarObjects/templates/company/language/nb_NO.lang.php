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
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette denne kunden.',
    'LBL_ACCOUNT_NAME' => 'Firmanavn:',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Addresseinfo',
    'LBL_ANNUAL_REVENUE' => 'Årlig Omsetning:',
    'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
    'LBL_ANY_EMAIL' => 'Vilkårlig e-post:',
    'LBL_EMAIL_NON_PRIMARY' => 'Ingen hoved e-postadresser',
    'LBL_ANY_PHONE' => 'Vilkårlig tlf:',
    'LBL_ASSIGNED_TO_NAME' => 'Bruker:',
    'LBL_RATING' => 'Rangering',
    'LBL_ASSIGNED_TO' => 'Tildelt brukers navn:',
    'LBL_ASSIGNED_USER' => 'Tildelt brukers navn:',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt brukers navn:',
    'LBL_BILLING_ADDRESS_CITY' => 'Faktureringsadresse, sted:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktureringsadresse, land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faktureringsadresse, postnummer:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faktureringsadresse, fylke:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faktureringsadresse, gatenavn 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faktureringsadresse, gatenavn 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faktureringsadresse, gatenavn 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faktureringsadresse, gatenavn:',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadresse:',
    'LBL_ACCOUNT_INFORMATION' => 'Firmainformasjon',
    'LBL_CITY' => 'By:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DATE_ENTERED' => 'Dato opprettet:',
    'LBL_DATE_MODIFIED' => 'Date endret:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kunder',
    'LBL_DESCRIPTION_INFORMATION' => 'Beskrivende informasjon',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DUPLICATE' => 'Mulig duplikat av en Kunde',
    'LBL_EMAIL' => 'E-post:',
    'LBL_EMPLOYEES' => 'Ansatte:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Bransje:',
    'LBL_LIST_ACCOUNT_NAME' => 'Navn på kunden',
    'LBL_LIST_CITY' => 'By:',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadresse:',
    'LBL_LIST_PHONE' => 'Telefonnr:',
    'LBL_LIST_STATE' => 'Fylke:',
    'LBL_MEMBER_OF' => 'Medlem av:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisasjoner',
    'LBL_NAME' => 'Navn:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annen e-post:',
    'LBL_OTHER_PHONE' => 'Annet telefonnr:',
    'LBL_OWNERSHIP' => 'Eierskap:',
    'LBL_PARENT_ACCOUNT_ID' => 'Forelder kontoID',
    'LBL_PHONE_ALT' => 'Alternativ tlfnr:',
    'LBL_PHONE_FAX' => 'Faksnr:',
    'LBL_PHONE_OFFICE' => 'Tlf jobb:',
    'LBL_PHONE' => 'Telefonnr:',
    'LBL_EMAIL_ADDRESS' => 'E-postadresse:',
    'LBL_EMAIL_ADDRESSES' => 'E-post adresse(r)',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_SAVE_ACCOUNT' => 'Lagre Kunde',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Leveringsadresse, sted:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveringsadresse, land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveringsadresse, postnummer:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Leveringsadresse, fylke:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Postadresse, gatenavn 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Postadresse, gatenavn 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Postadresse, gatenavn 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Leveringsadresse, gatenavn:',
    'LBL_SHIPPING_ADDRESS' => 'Postadresse:',

    'LBL_STATE' => 'Status:',
    'LBL_TICKER_SYMBOL' => 'Børssymbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Nettside:',

    'LNK_ACCOUNT_LIST' => 'Kunder',
    'LNK_NEW_ACCOUNT' => 'Ny forbindelse',

    'MSG_DUPLICATE' => 'Opprettelse av denne kunder kan føre til to identiske kunder. Du kan enten velge en kunde fra listen under, eller klikke på <b>Opprett ny kunde<b/> for å fortsette.',
    'MSG_SHOW_DUPLICATES' => 'Opprettelse av denne kunden kan føre til to identiske kunder. Du kan enten klikke på <b>Opprett Kunde</b> for å fortsette, eller klikke på <b>Avbryt</b>.',

    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne oppføringen?',

    'LBL_EDIT_BUTTON' => 'Endre',
    'LBL_REMOVE' => 'Fjern',

);
