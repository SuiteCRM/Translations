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
    'ERR_DELETE_RECORD' => 'Števika vnosa mora biti definirana za izbris Partnerja.',
    'LBL_ACCOUNT_NAME' => 'Ime podjetja:',
    'LBL_ACCOUNT' => 'Podjetje:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_ANNUAL_REVENUE' => 'Letni zaslužek:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_ANY_EMAIL' => 'Katerikoli E-pošta:',
    'LBL_EMAIL_NON_PRIMARY' => 'Dodatni elektronski naslovi',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_RATING' => 'Ocena',
    'LBL_ASSIGNED_TO' => 'Dodeljeno:',
    'LBL_ASSIGNED_USER' => 'Dodeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeno:',
    'LBL_BILLING_ADDRESS_CITY' => 'Naslov za obračun, Mesto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Naslov za obračun, Regija:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Naslov za obračun, Poštna številka:',
    'LBL_BILLING_ADDRESS_STATE' => 'Naslov za obračun, Država:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Naslov za obračun, Ulica 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Naslov za obračun, Ulica 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Naslov za obračun, Ulica 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Naslov za obračun, Ulica:',
    'LBL_BILLING_ADDRESS' => 'Naslov za obračun:',
    'LBL_ACCOUNT_INFORMATION' => 'Informacije o podjetju',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_DATE_ENTERED' => 'Vnešeno dne:',
    'LBL_DATE_MODIFIED' => 'Spremenjeno dne:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Računi',
    'LBL_DESCRIPTION_INFORMATION' => 'Opisne informacije',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Mogoče podvojen partner',
    'LBL_EMAIL' => 'E-pošta:',
    'LBL_EMPLOYEES' => 'Zaposleni:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Panoga:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Partnerja',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-poštni naslov',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Država',
    'LBL_MEMBER_OF' => 'Član:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članske organizacije',
    'LBL_NAME' => 'Ime:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga E-pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Lastništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'Nadrejeni partner ID',
    'LBL_PHONE_ALT' => 'Alternativni telefon:',
    'LBL_PHONE_FAX' => 'Fax številka:',
    'LBL_PHONE_OFFICE' => 'Telefon v pisarni:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-poštni naslov',
    'LBL_EMAIL_ADDRESSES' => 'E-poštni naslov(i)',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_SAVE_ACCOUNT' => 'Shrani Partnerja',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Naslov za pošiljanje, Mesto:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Naslov za pošiljanje,  Regija:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Naslov za pošiljanje, poštna številka:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Naslov za pošiljanje, Država:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Naslov za pošiljanje, Ulica 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Naslov za pošiljanje, Ulica 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Naslov za pošiljanje, Ulica 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Naslov za pošiljanje, Ulica:',
    'LBL_SHIPPING_ADDRESS' => 'Naslov za pošiljanje:',

    'LBL_STATE' => 'Stanje:',
    'LBL_TICKER_SYMBOL' => 'Ločilo:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Spletna stran:',

    'LNK_ACCOUNT_LIST' => 'Računi',
    'LNK_NEW_ACCOUNT' => 'Ustvari Partnerja',

    'MSG_DUPLICATE' => 'Vnos tega partnerja lahko potencialno pomeni podvajanje partnerjev. Lahko izberete partnerja iz spodnjega seznama ali pa pritisnete Shrani in nadaljuj in s tem ustvarite novega partnerja. ',
    'MSG_SHOW_DUPLICATES' => 'Vnos tega partnerja lahko potencialno pomeni podvajanje partnerjev. Lahko pritisnete Shrani in nadaljuj in s tem ustvarite novega partnerja ali pa pritisnete Prekliči.',

    'NTC_DELETE_CONFIRMATION' => 'Ste prepričani, da želite izbrisati izbran vnos?',

    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_REMOVE' => 'Odstrani',

);
