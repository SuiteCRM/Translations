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
    'ERR_DELETE_RECORD' => 'Jānorāda ieraksta numurs, lai dzēstu kontu.',
    'LBL_ACCOUNT_NAME' => 'Uzņēmuma nosaukums:',
    'LBL_ACCOUNT' => 'Uzņēmums:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
    'LBL_ANNUAL_REVENUE' => 'Gada ienākumi:',
    'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
    'LBL_ANY_EMAIL' => 'Jebkurš E-pasts:',
    'LBL_EMAIL_NON_PRIMARY' => 'Nav primārais e-pasts',
    'LBL_ANY_PHONE' => 'Jebkurš tālrunis:',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
    'LBL_RATING' => 'Vērtējums',
    'LBL_ASSIGNED_TO' => 'Piešķirts lietotājam:',
    'LBL_ASSIGNED_USER' => 'Piešķirts lietotājam:',
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam:',
    'LBL_BILLING_ADDRESS_CITY' => 'Adrese - Pilsēta:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Adrese - Valsts:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Adrese - Pasta indekss:',
    'LBL_BILLING_ADDRESS_STATE' => 'Adrese - Novads:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Adrese - Iela 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Adrese - Iela 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Adrese - Iela 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Adrese - Iela',
    'LBL_BILLING_ADDRESS' => 'Norēķinu adrese:',
    'LBL_ACCOUNT_INFORMATION' => 'Uzņēmuma informācija',
    'LBL_CITY' => 'Pilsēta:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_COUNTRY' => 'Valsts:',
    'LBL_DATE_ENTERED' => 'Izveidots:',
    'LBL_DATE_MODIFIED' => 'Modificēts:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klienti',
    'LBL_DESCRIPTION_INFORMATION' => 'Apraksta informācija',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_DUPLICATE' => 'Iespējams uzņēmuma dublikāts',
    'LBL_EMAIL' => 'E-pasts:',
    'LBL_EMPLOYEES' => 'Darbinieki:',
    'LBL_FAX' => 'Fakss:',
    'LBL_INDUSTRY' => 'Nozare:',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_CITY' => 'Pilsēta',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Stāvoklis',
    'LBL_MEMBER_OF' => 'Pieder:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Dalīborganizācijas',
    'LBL_NAME' => 'Vārds:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Cits E-pasts:',
    'LBL_OTHER_PHONE' => 'Cits tālrunis:',
    'LBL_OWNERSHIP' => 'Īpašumtiesības:',
    'LBL_PARENT_ACCOUNT_ID' => 'Mātesuzņēmuma ID',
    'LBL_PHONE_ALT' => 'Cits tālrunis:',
    'LBL_PHONE_FAX' => 'Fakss:',
    'LBL_PHONE_OFFICE' => 'Darba tālrunis:',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_EMAIL_ADDRESSES' => 'e-pasts',
    'LBL_POSTAL_CODE' => 'Pasta indekss:',
    'LBL_SAVE_ACCOUNT' => 'Saglabāt uzņēmumu',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Piegādes adrese - Pilsēta:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Piegādes adrese - Valsts:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Piegādes adrese - Pasta indekss:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Piegādes adrese - Novads:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Piegādes adrese - iela 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Piegādes adrese - iela 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Piegādes adrese - iela 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Piegādes adrese - iela:',
    'LBL_SHIPPING_ADDRESS' => 'Piegādes adrese:',

    'LBL_STATE' => 'Novads:',
    'LBL_TICKER_SYMBOL' => 'Biržas kods:',
    'LBL_TYPE' => 'Veids:',
    'LBL_WEBSITE' => 'Mājas lapa:',

    'LNK_ACCOUNT_LIST' => 'Klienti',
    'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',

    'MSG_DUPLICATE' => 'Veidojamais uzņēmuma ieraksts, iespējams, ir dublikāts jau esošam uzņēmuma ierakstam. Uzņēmumi ar līdzīgiem nosaukumiem ir uzskaitīti zemāk.<br>Spiediet Izveidot uzņēmumu, lai turpinātu veidot jaunu ierakstu, vai izvēlieties kādu no zemāk redzamajiem uzņēmumu nosaukumiem.',
    'MSG_SHOW_DUPLICATES' => 'Uzņēmuma ieraksts, kuru veidojat iespējams, ir dublikāts jau esošam uzņēmuma ierakstam. Uzņēmumi ar līdzīgiem nosaukumiem ir uzskaitīti zemāk.<br>Spiediet Saglabāt, lai turpinātu veidot jauno uzņēmumu, vai spiediet Atcelt, lai atgrieztos modulī,neveidojot jaunu uzņēmumu.',

    'NTC_DELETE_CONFIRMATION' => 'Vai jūs tiešām vēlaties dzēst šo ierakstu?',

    'LBL_EDIT_BUTTON' => 'Rediģēt',
    'LBL_REMOVE' => 'Izņemt',

);
