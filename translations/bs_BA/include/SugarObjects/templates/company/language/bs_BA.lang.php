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
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti određen da bi se obrisao zapis.',
    'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
    'LBL_ACCOUNT' => 'Kompanija:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Podaci o adresi',
    'LBL_ANNUAL_REVENUE' => 'Godišnji prihod:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koji email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Sekundarni email',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Korisnik:',
    'LBL_RATING' => 'Rejting',
    'LBL_ASSIGNED_TO' => 'Dodijeljeno korisniku:',
    'LBL_ASSIGNED_USER' => 'Dodijeljeno korisniku:',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeno korisniku:',
    'LBL_BILLING_ADDRESS_CITY' => 'Grad za fakturisanje:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Država za fakturisanje:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštanski broj za fakturisanje:',
    'LBL_BILLING_ADDRESS_STATE' => 'Kanton/Entitet za fakturisanje:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica za fakturisanje 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica za fakturisanje 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica za fakturisanje 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica za fakturisanje:',
    'LBL_BILLING_ADDRESS' => 'Adresa za fakturisanje:',
    'LBL_ACCOUNT_INFORMATION' => 'Informacija o kompaniji',
    'LBL_CITY' => 'Grad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Država:',
    'LBL_DATE_ENTERED' => 'Datum kreiranja:',
    'LBL_DATE_MODIFIED' => 'Datum izmjene:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klijenti',
    'LBL_DESCRIPTION_INFORMATION' => 'Opis',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Moguć dupli klijent',
    'LBL_EMAIL' => 'Email adresa:',
    'LBL_EMPLOYEES' => 'Zaposlenici:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Industrija:',
    'LBL_LIST_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Entitet/Kanton',
    'LBL_MEMBER_OF' => 'Povezane kompanije:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članice organizacije',
    'LBL_NAME' => 'Naziv:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ostali emailovi:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Vlasništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID matične kompanije',
    'LBL_PHONE_ALT' => 'Alternativni telefonski broj:',
    'LBL_PHONE_FAX' => 'Faks:',
    'LBL_PHONE_OFFICE' => 'Uredski telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_EMAIL_ADDRESSES' => 'Email adresa(e)',
    'LBL_POSTAL_CODE' => 'Poštanski kod:',
    'LBL_SAVE_ACCOUNT' => 'Spasi Klijenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Grad za otpremu:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Država za otpremu:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Poštanski broj za otpremu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Kanton/Entitet za otpremu:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica za otpremu 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica za otpremu 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica za otpremu 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica za otpremu:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa za otpremu:',

    'LBL_STATE' => 'Status:',
    'LBL_TICKER_SYMBOL' => 'Ticker simbol:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Web stranica:',

    'LNK_ACCOUNT_LIST' => 'Klijenti',
    'LNK_NEW_ACCOUNT' => 'Kreirajte klijenta',

    'MSG_DUPLICATE' => 'Ovaj {0} zapis koje ćete kreirati može biti duplikat od {0} zapisa koji već postoji.{1} Zapisi koji sadrže slične nazive su navedeni ispod.<br>Kliknite Kreiraj {1} da nastavite kreirati ovaj novi {0}, ili odaberite postojeći {0} naveden ispod.',
    'MSG_SHOW_DUPLICATES' => 'Ovaj {0} zapis koje ćete kreirati može biti duplikat od {0} zapisa koji već postoji.{1} Zapisi koji sadrže slične nazive su navedeni ispod.<br>Kliknite Kreiraj {1} da nastavite kreirati ovaj novi {0}, ili odaberite postojeći {0} naveden ispod.',

    'NTC_DELETE_CONFIRMATION' => 'Sigurni ste da želite obrisati ovaj zapis?',

    'LBL_EDIT_BUTTON' => 'Uredi  ',
    'LBL_REMOVE' => 'Ukloni',

);
