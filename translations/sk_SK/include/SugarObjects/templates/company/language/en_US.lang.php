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
    'ERR_DELETE_RECORD' => 'Pre zrušenie konta je potrebné zadať číslo záznamu.',
    'LBL_ACCOUNT_NAME' => 'Názov spoločnosti:',
    'LBL_ACCOUNT' => 'Spoločnosť:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informácie o adrese',
    'LBL_ANNUAL_REVENUE' => 'Ročný príjem:',
    'LBL_ANY_ADDRESS' => 'Akákoľvek adresa:',
    'LBL_ANY_EMAIL' => 'Akýkoľvek email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Nie-Primárne E-maily',
    'LBL_ANY_PHONE' => 'Telefón:',
    'LBL_ASSIGNED_TO_NAME' => 'Používateľ:',
    'LBL_RATING' => 'Hodnotenie',
    'LBL_ASSIGNED_TO' => 'Priradené ku:',
    'LBL_ASSIGNED_USER' => 'Priradené ku:',
    'LBL_ASSIGNED_TO_ID' => 'Priradené ku:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturačné mesto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturačná krajina:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturačné PSČ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturačný štát:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturačná ulica 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturačná ulica 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturačná ulica 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturačná ulica:',
    'LBL_BILLING_ADDRESS' => 'Fakturačná adresa:',
    'LBL_ACCOUNT_INFORMATION' => 'Informácie o klientovi',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia:',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmy',
    'LBL_DESCRIPTION_INFORMATION' => 'Popis',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DUPLICATE' => 'Možný duplicitný klient',
    'LBL_EMAIL' => 'E-mailová adresa:',
    'LBL_EMPLOYEES' => 'Zamestnanci:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Odvetvie:',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailová adresa',
    'LBL_LIST_PHONE' => 'Telefón',
    'LBL_LIST_STATE' => 'Štát',
    'LBL_MEMBER_OF' => 'Člen:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Členské organizácie',
    'LBL_NAME' => 'Meno:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iný email:',
    'LBL_OTHER_PHONE' => 'Další telefón:',
    'LBL_OWNERSHIP' => 'Vlastníctvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID hlavnej Firmy',
    'LBL_PHONE_ALT' => 'Ďalší telefón:',
    'LBL_PHONE_FAX' => 'Telefón/ Fax:',
    'LBL_PHONE_OFFICE' => 'Telefón (práca):',
    'LBL_PHONE' => 'Telefón:',
    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa',
    'LBL_EMAIL_ADDRESSES' => 'E-malové adresy',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_SAVE_ACCOUNT' => 'Uložiť Firmu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Mesto (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Krajina (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'PSČ (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Štát (korenšpondencia):',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ulica 2 (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ulica 3 (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ulica 4 (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ulica (korenšpondencia)',
    'LBL_SHIPPING_ADDRESS' => 'Adresa (korenšpondencia):',

    'LBL_STATE' => 'Stav:',
    'LBL_TICKER_SYMBOL' => 'Skratka akcie:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'WWW stránka:',

    'LNK_ACCOUNT_LIST' => 'Firmy',
    'LNK_NEW_ACCOUNT' => 'Nový firma',

    'MSG_DUPLICATE' => 'Vytvorením tohto klienta môže vzniknúť duplikát už existujúceho klienta. <br>Môžete buď zvoliť klienta zo zoznamu nižšie alebo kliknúť na Nový klient - v tom prípade bude vytvorý nový záznam klienta so zadanými údajmi.',
    'MSG_SHOW_DUPLICATES' => 'Vytvorením tohto klienta môže vzniknúť duplikát už existujúceho klienta. <br>Môžete buď zvoliť klienta zo zoznamu nižšie alebo kliknúť na Zrušiť - v tom prípade nebude vytvorý nový záznam klienta so zadanými údajmi.',

    'NTC_DELETE_CONFIRMATION' => 'Skutočne chcete zmazať tento záznam?',

    'LBL_EDIT_BUTTON' => 'Upraviť',
    'LBL_REMOVE' => 'Odstrániť',

);
