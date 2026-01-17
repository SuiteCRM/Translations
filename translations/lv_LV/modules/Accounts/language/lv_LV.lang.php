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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    // Dashlet Categories
    'LBL_CHARTS' => 'Diagrammas',
    'LBL_DEFAULT' => 'Skatījumi',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Lai dzēstu uzņēmumu, jānorāda ieraksta numurs.',
    'LBL_ACCOUNT_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Uzņēmuma nosaukums:',
    'LBL_ACCOUNT' => 'Uzņēmums:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
    'LBL_ANNUAL_REVENUE' => 'Gada ienākumi:',
    'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
    'LBL_ANY_EMAIL' => 'Jebkurš E-pasts:',
    'LBL_ANY_PHONE' => 'Jebkurš tālrunis:',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
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
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kļūdas',
    'LBL_CAMPAIGN_ID' => 'Kampaņas ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Pieteikumi',
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
    'LBL_EMAIL_OPT_OUT' => 'Atteikties no e-pastu saņemšanas:',
    'LBL_EMAIL_ADDRESSES' => 'E-pasta adreses',
    'LBL_EMPLOYEES' => 'Darbinieki:',
    'LBL_FAX' => 'Fakss:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
    'LBL_HOMEPAGE_TITLE' => 'Mani uzņēmumi',
    'LBL_INDUSTRY' => 'Nozare:',
    'LBL_INVALID_EMAIL' => 'Nederīgs e-pasts:',
    'LBL_INVITEE' => 'Ielūgtie',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
    'LBL_LIST_ACCOUNT_NAME' => 'Vārds:',
    'LBL_LIST_CITY' => 'Pilsēta',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktpersonas vārds',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_LIST_FORM_TITLE' => 'Uzņēmumu saraksts',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Stāvoklis',
    'LBL_MEMBER_OF' => 'Pieder:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Dalīborganizācijas',
    'LBL_MODULE_NAME' => 'Klienti',
    'LBL_MODULE_TITLE' => 'Uzņēmumi: Sākums',
    'LBL_MODULE_ID' => 'Klienti',
    'LBL_NAME' => 'Vārds:',
    'LBL_NEW_FORM_TITLE' => 'Jauns klients',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Iespējas',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Cits E-pasts:',
    'LBL_OTHER_PHONE' => 'Cits tālrunis:',
    'LBL_OWNERSHIP' => 'Īpašumtiesības:',
    'LBL_PARENT_ACCOUNT_ID' => 'Mātesuzņēmuma ID',
    'LBL_PHONE_ALT' => 'Cits tālrunis:',
    'LBL_PHONE_FAX' => 'Fakss:',
    'LBL_PHONE_OFFICE' => 'Darba tālrunis:',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_POSTAL_CODE' => 'Pasta indekss:',
    'LBL_PRODUCTS_TITLE' => 'Produkti',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopēt uz Kontaktpersonām',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopēt...',
    'LBL_RATING' => 'Vērtējums:',
    'LBL_SAVE_ACCOUNT' => 'Saglabāt uzņēmumu',
    'LBL_SEARCH_FORM_TITLE' => 'Uzņēmumu meklēšana',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Piegādes adrese - Pilsēta:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Piegādes adrese - Valsts:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Piegādes adrese - Pasta indekss:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Piegādes adrese - Novads:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Piegādes adrese - iela 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Piegādes adrese - iela 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Piegādes adrese - iela 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Piegādes adrese - iela:',
    'LBL_SHIPPING_ADDRESS' => 'Piegādes adrese:',
    'LBL_SIC_CODE' => 'SIC kods:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Biržas kods:',
    'LBL_TYPE' => 'Veids:',
    'LBL_WEBSITE' => 'Mājas lapa:',
    'LBL_CAMPAIGNS' => 'Mārketings',
    'LNK_ACCOUNT_LIST' => 'Skatīt uzņēmumus',
    'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',
    'LNK_IMPORT_ACCOUNTS' => 'Importēt uzņēmumus',
    'MSG_DUPLICATE' => 'Veidojamais uzņēmuma ieraksts, iespējams, ir dublikāts jau esošam uzņēmuma ierakstam. Uzņēmumi ar līdzīgiem nosaukumiem ir uzskaitīti zemāk.<br>Spiediet Izveidot uzņēmumu, lai turpinātu veidot jaunu ierakstu, vai izvēlieties kādu no zemāk redzamajiem uzņēmumu nosaukumiem.',
    'MSG_SHOW_DUPLICATES' => 'Uzņēmuma ieraksts, kuru veidojat iespējams, ir dublikāts jau esošam uzņēmuma ierakstam. Uzņēmumi ar līdzīgiem nosaukumiem ir uzskaitīti zemāk.<br>Spiediet Saglabāt, lai turpinātu veidot jauno uzņēmumu, vai spiediet Atcelt, lai atgrieztos modulī,neveidojot jaunu uzņēmumu.',
    'LBL_ASSIGNED_USER_NAME' => 'Piešķirts lietotājam:',
    'LBL_PROSPECT_LIST' => 'Prospektu saraksts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienti',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    //For export labels
    'LBL_PARENT_ID' => 'Vecāka ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Iegādātie Produkti un Pakalpojumi',

    'LBL_AOS_CONTRACTS' => 'Līgumi',
    'LBL_AOS_INVOICES' => 'Rēķini',
    'LBL_AOS_QUOTES' => 'Piedāvājumi',
    'LBL_LIST_WEBSITE' => 'website',
);
