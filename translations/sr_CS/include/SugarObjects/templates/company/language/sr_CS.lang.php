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
    'ERR_DELETE_RECORD' => 'Prilikom brisanja naloga morate da navedete broj zapisa.',
    'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
    'LBL_ACCOUNT' => 'Kompanija:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
    'LBL_ANNUAL_REVENUE' => 'Godišnji prihod:',
    'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
    'LBL_ANY_EMAIL' => 'Bilo koja adresa elektronske pošte:',
    'LBL_EMAIL_NON_PRIMARY' => 'Sporedne adrese e-pošte:',
    'LBL_ANY_PHONE' => 'Bilo koji telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_RATING' => 'Bodovanje',
    'LBL_ASSIGNED_TO' => 'Dodeljeno:',
    'LBL_ASSIGNED_USER' => 'Dodeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeno:',
    'LBL_BILLING_ADDRESS_CITY' => 'Grad:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Zemlja:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštanski kod:',
    'LBL_BILLING_ADDRESS_STATE' => 'Država:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica br.2:',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica br.3:',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica br.4:',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica:',
    'LBL_BILLING_ADDRESS' => 'Adresa naplate:',
    'LBL_ACCOUNT_INFORMATION' => 'Informacije o kompaniji',
    'LBL_CITY' => 'Grad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Država:',
    'LBL_DATE_ENTERED' => 'Datum kreiranja:',
    'LBL_DATE_MODIFIED' => 'Datum izmene:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kompanije',
    'LBL_DESCRIPTION_INFORMATION' => 'Informacija o opisu',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Moguća duplirana kompanija',
    'LBL_EMAIL' => 'Adresa elektronske pošte:',
    'LBL_EMPLOYEES' => 'Zaposleni:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Industrija:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_CITY' => 'Grad',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-adresa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Opština',
    'LBL_MEMBER_OF' => 'Član:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članice organizacija',
    'LBL_NAME' => 'Ime:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga elektronska pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Vlasništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID broj matične kompanije',
    'LBL_PHONE_ALT' => 'Drugi telefon:',
    'LBL_PHONE_FAX' => 'Telefax:',
    'LBL_PHONE_OFFICE' => 'Poslovni telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-adresa',
    'LBL_EMAIL_ADDRESSES' => 'Adresa(e) elektronske pošte',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_SAVE_ACCOUNT' => 'Sačuvaj kompaniju',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Grad isporuke:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Zemlja isporuke:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Poštanski broj isporuke:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Država isporuke:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica isporuke 2:',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica isporuke 3:',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica isporuke 4:',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica isporuke:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa isporuke:',

    'LBL_STATE' => 'Država:',
    'LBL_TICKER_SYMBOL' => 'Simbol na berzi:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Web stranica:',

    'LNK_ACCOUNT_LIST' => 'Kompanije',
    'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',

    'MSG_DUPLICATE' => 'Zapis naloga koji želite da kreirate možda je duplikat zapisa kompanije koja već postoji. Zapisi kompanije koji sadrže slična imena izlistani su ispod.<br>Kliknite Sačuvaj da bi nastavili sa kreiranjem ove nove kompanije, ili kliknite Otkaži da bi se vratili u modul bez kreiranja ove kompanije.',
    'MSG_SHOW_DUPLICATES' => 'Zapis naloga koji kreirate je verovatno duplikat zapisa naloga koji već postoji. Zapisi naloga koji imaju slična imena su izlistani ispod. <br>Kliknite na Snimi da bi nastavili sa kreiranjem novog naloga, ili Odustani da bi se vratili na modul bez kreiranja naloga.',

    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',

    'LBL_EDIT_BUTTON' => 'Izmeni',
    'LBL_REMOVE' => 'Ukloni',

);
