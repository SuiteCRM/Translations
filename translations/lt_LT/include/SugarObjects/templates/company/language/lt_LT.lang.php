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
    'ERR_DELETE_RECORD' => 'Įrašas turi būti nurodytas norint ištrinti klientą.',
    'LBL_ACCOUNT_NAME' => 'Įmonės pavadinimas:',
    'LBL_ACCOUNT' => 'Įmonė:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_ADDRESS_INFORMATION' => 'Adresas:',
    'LBL_ANNUAL_REVENUE' => 'Metinė apyvarta:',
    'LBL_ANY_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_EMAIL' => 'El.paštas:',
    'LBL_EMAIL_NON_PRIMARY' => 'Ne Pirminia El. paštas',
    'LBL_ANY_PHONE' => 'Bet koks telefonas:',
    'LBL_ASSIGNED_TO_NAME' => 'Vartotojas:',
    'LBL_RATING' => 'Bankas:',
    'LBL_ASSIGNED_TO' => 'Priskirtas:',
    'LBL_ASSIGNED_USER' => 'Priskirtas:',
    'LBL_ASSIGNED_TO_ID' => 'Priskirtas:',
    'LBL_BILLING_ADDRESS_CITY' => 'Sąskaitos adresas:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Sąskaitos adreso šalis:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Sąskaitos adreso pašto kodas:',
    'LBL_BILLING_ADDRESS_STATE' => 'Registracijos adreso rajonas:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Sąskaitos adreso gatvė 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Sąskaitos adreso gatvė 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Sąskaitos adreso gatvė 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Sąskaitos adreso gatvė:',
    'LBL_BILLING_ADDRESS' => 'Sąskaitos adresas:',
    'LBL_ACCOUNT_INFORMATION' => 'Įmonės informacija',
    'LBL_CITY' => 'Miestas:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_DATE_ENTERED' => 'Sukūrimo data:',
    'LBL_DATE_MODIFIED' => 'Redagavimo data:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_DESCRIPTION_INFORMATION' => 'Aprašymo informacija',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DUPLICATE' => 'Galimai pasikartojanti paskyra',
    'LBL_EMAIL' => 'El.paštas:',
    'LBL_EMPLOYEES' => 'Darbuotojai:',
    'LBL_FAX' => 'Faksas:',
    'LBL_INDUSTRY' => 'Pramonės šaka:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_CITY' => 'Miestas:',
    'LBL_LIST_EMAIL_ADDRESS' => 'El. pašto adresas',
    'LBL_LIST_PHONE' => 'Telefonas',
    'LBL_LIST_STATE' => 'Rajonas',
    'LBL_MEMBER_OF' => 'Narys:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Padaliniai',
    'LBL_NAME' => 'Vardas:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_OTHER_PHONE' => 'Kitas telefonas:',
    'LBL_OWNERSHIP' => 'Nuosavybė:',
    'LBL_PARENT_ACCOUNT_ID' => 'Pagrindinio kliento ID',
    'LBL_PHONE_ALT' => 'Alternatyvus telefonas:',
    'LBL_PHONE_FAX' => 'Telefonas faksas:',
    'LBL_PHONE_OFFICE' => 'Telefonas:',
    'LBL_PHONE' => 'Telefonas:',
    'LBL_EMAIL_ADDRESS' => 'El. pašto adresas',
    'LBL_EMAIL_ADDRESSES' => 'El. paštas',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_SAVE_ACCOUNT' => 'Saugoti paskyrą',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Pristatymo adreso miestas:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pristatymo adreso šalis:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Pristatymo adreso pašto kodas:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Pristatymo adreso regionas:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Pristatymo adreso gatvė 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Pristatymo adreso gatvė 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Pristatymo adreso gatvė 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Pristatymo adreso gatvė:',
    'LBL_SHIPPING_ADDRESS' => 'Pristatymo adresas:',

    'LBL_STATE' => 'Rajonas',
    'LBL_TICKER_SYMBOL' => 'Simbolis akcijų biržose:',
    'LBL_TYPE' => 'Tipas:',
    'LBL_WEBSITE' => 'Tinklalapis:',

    'LNK_ACCOUNT_LIST' => 'Naudotojai',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',

    'MSG_DUPLICATE' => 'Įrašas, kurį dabar norite sukurti, gali dubliuotis su jau egzistuojančiais įrašais. Paskyrų su panašiais pavadinimais yra pateikti žemiau. <br> Paspauskite sukurti paskyrą, jeigu pageidaujate tęsti šią naują paskyrą arba pasirinkite egzistuojančią paskyrą iš žemiau pateikto sąrašo.',
    'MSG_SHOW_DUPLICATES' => 'Įrašas, kurį dabar norite sukurti, gali dubliuotis su jau egzistuojančiais įrašais. Paskyrų su panašiais pavadinimais yra pateikti žemiau. <br> Paspauskite Išsaugoti, jei vis tiek norite sukurti šią paskyrą, arba paspauskite Atšaukti, kad grįžtumėte atgal nesukūrę paskyros.',

    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',

    'LBL_EDIT_BUTTON' => 'Redaguoti  ',
    'LBL_REMOVE' => 'Išmesti',

);
