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
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentru a șterge.',
    'LBL_ACCOUNT_NAME' => 'Numele Companiei:',
    'LBL_ACCOUNT' => 'Companie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_ADDRESS_INFORMATION' => 'Informații Adresă',
    'LBL_ANNUAL_REVENUE' => 'Venit Anual:',
    'LBL_ANY_ADDRESS' => 'Orice Adresă:',
    'LBL_ANY_EMAIL' => 'Orice Email:',
    'LBL_EMAIL_NON_PRIMARY' => 'E-mail alternativ',
    'LBL_ANY_PHONE' => 'Orice Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Utilizator:',
    'LBL_RATING' => 'Notă',
    'LBL_ASSIGNED_TO' => 'Atribuit lui:',
    'LBL_ASSIGNED_USER' => 'Atribuit lui:',
    'LBL_ASSIGNED_TO_ID' => 'Atribuit lui:',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturare - Oraș:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturare - Țară:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturare - Cod poștal:',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturare - Județ:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adresa de facturare 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adresa de facturare 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adresa de facturare 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Facturare - Strada:',
    'LBL_BILLING_ADDRESS' => 'Adresa de facturare:',
    'LBL_ACCOUNT_INFORMATION' => 'Informații Companie',
    'LBL_CITY' => 'Oraș:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_COUNTRY' => 'Țară:',
    'LBL_DATE_ENTERED' => 'Creat:',
    'LBL_DATE_MODIFIED' => 'Dată Modificare:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Conturi',
    'LBL_DESCRIPTION_INFORMATION' => 'Descriere',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DUPLICATE' => 'Duplicat posibil',
    'LBL_EMAIL' => 'Adresă Email:',
    'LBL_EMPLOYEES' => 'Angajați:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industrie:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_CITY' => 'Oraș',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresă Email',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Stat',
    'LBL_MEMBER_OF' => 'Membru a:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizații membre',
    'LBL_NAME' => 'Nume:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt email:',
    'LBL_OTHER_PHONE' => 'Alt telefon:',
    'LBL_OWNERSHIP' => 'Proprietar:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Cont Părinte',
    'LBL_PHONE_ALT' => 'Telefon alternativ:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefon birou:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Adresă Email',
    'LBL_EMAIL_ADDRESSES' => 'Adresă(e) Email',
    'LBL_POSTAL_CODE' => 'Cod poștal:',
    'LBL_SAVE_ACCOUNT' => 'Salvați cont',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Livrare - Oraș:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Livrare - Țară:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Livrare - Cod poștal:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Livrare - Județ:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adresa de livrare 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adresa de livrare 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adresa de livrare 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Livrare - Strada:',
    'LBL_SHIPPING_ADDRESS' => 'Adresa de livrare:',

    'LBL_STATE' => 'Stare:',
    'LBL_TICKER_SYMBOL' => 'Simbol bursă:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Site Web:',

    'LNK_ACCOUNT_LIST' => 'Conturi',
    'LNK_NEW_ACCOUNT' => 'Firmă nouă',

    'MSG_DUPLICATE' => 'Înregistrarea de cont pe care sunteți pe cale sa o creați ar putea fii un duplicat al unui cont deja existent. Înregistrările de cont ce conțin nume similare sunt listate mai jos.<br>D-ați click pe Creare Cont pentru a continua sa creați acest cont nou, sau selectează un cont deja existent listat mai jos.',
    'MSG_SHOW_DUPLICATES' => 'Înregistrarea contului pe care urmează să o creați ar putea fi un duplicat al unei înregistrări de cont care există deja. Înregistrările contului care conțin nume similare sunt enumerate mai jos.<br>Apasă pe Salvează pentru a continua crearea acestui cont nou sau apasă Anulează pentru a reveni la modul fără a crea contul.',

    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur că doriți să ștergeți această înregistrare?',

    'LBL_EDIT_BUTTON' => 'Editare  ',
    'LBL_REMOVE' => 'Înlăturați',

);
