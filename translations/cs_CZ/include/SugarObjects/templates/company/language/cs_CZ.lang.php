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
    'ERR_DELETE_RECORD' => 'Pro smazání Firmy musíte zadat číslo záznamu.',
    'LBL_ACCOUNT_NAME' => 'Název firmy:',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ADDRESS_INFORMATION' => 'Informace o adrese',
    'LBL_ANNUAL_REVENUE' => 'Roční obrat:',
    'LBL_ANY_ADDRESS' => 'Jakákoliv adresa:',
    'LBL_ANY_EMAIL' => 'Jakýkoliv Email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Ne primární e-maily',
    'LBL_ANY_PHONE' => 'Jakýkoli telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Uživatel:',
    'LBL_RATING' => 'Hodnocení',
    'LBL_ASSIGNED_TO' => 'Přiřazeno k:',
    'LBL_ASSIGNED_USER' => 'Přiřazeno k:',
    'LBL_ASSIGNED_TO_ID' => 'Přiřazeno k:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fakturační Město:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fakturační Kraj:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fakturační PSČ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fakturační Kraj:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Fakturační Ulice 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Fakturační Ulice 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Fakturační Ulice 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Fakturační Ulice:',
    'LBL_BILLING_ADDRESS' => 'Fakturační Adresa:',
    'LBL_ACCOUNT_INFORMATION' => 'Informace o firmě',
    'LBL_CITY' => 'Město:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_DATE_ENTERED' => 'Datum vytvoření:',
    'LBL_DATE_MODIFIED' => 'Datum změny:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmy',
    'LBL_DESCRIPTION_INFORMATION' => 'Informace o popisu',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DUPLICATE' => 'Možná duplicitní Firma',
    'LBL_EMAIL' => 'Emailová adresa:',
    'LBL_EMPLOYEES' => 'Zaměstnanci:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Odvětví:',
    'LBL_LIST_ACCOUNT_NAME' => 'Název Firmy',
    'LBL_LIST_CITY' => 'Město',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emailová adresa',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Kraj',
    'LBL_MEMBER_OF' => 'Člen:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Členské organizace',
    'LBL_NAME' => 'Název:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Jiný Email:',
    'LBL_OTHER_PHONE' => 'Jiný Telefon:',
    'LBL_OWNERSHIP' => 'Vlastnictví:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID nadřazeného účtu',
    'LBL_PHONE_ALT' => 'Alternativní Telefon:',
    'LBL_PHONE_FAX' => 'Fax do telefonu:',
    'LBL_PHONE_OFFICE' => 'Telefon práce:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Emailová adresa',
    'LBL_EMAIL_ADDRESSES' => 'Emailové adresy',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_SAVE_ACCOUNT' => 'Uložit Firmu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Doručovací Město:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Doručovací Kraj:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Doručovací PSČ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Doručovací Kraj:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Doručovací Ulice 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Doručovací Ulice 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Doručovací Ulice 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Doručovací Ulice:',
    'LBL_SHIPPING_ADDRESS' => 'Doručovací adresa:',

    'LBL_STATE' => 'Ve stavu:',
    'LBL_TICKER_SYMBOL' => 'Symbol budíku:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Webová stránka:',

    'LNK_ACCOUNT_LIST' => 'Firmy',
    'LNK_NEW_ACCOUNT' => 'Vytvořit Firmu',

    'MSG_DUPLICATE' => 'Záznam Firmy, který hodláte vytvořit může být duplicitní již existujícímu. Záznamy Firmy obsahující stejné názvy jsou vypsány níže<br>Klikněte na Vytvořit Firmu a pokračujte ve vytváření nového nebo vyberte z existujících níže.',
    'MSG_SHOW_DUPLICATES' => 'Záznam Firmy, který hodláte vytvořit může být duplicitní již existujícímu. Záznamy Firmy obsahující stejné názvy jsou vypsány níže<br>Klikněte na Uložit a pokračujte ve vytváření nového nebo na Zrušit k návratu do modulu bez vytvoření Firmy.',

    'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam?',

    'LBL_EDIT_BUTTON' => 'Upravit  ',
    'LBL_REMOVE' => 'Odebrat',

);
