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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentuak',
    // Dashlet Categories
    'LBL_CHARTS' => 'Charts',
    'LBL_DEFAULT' => 'Views',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_ACCOUNT_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_ACCOUNT' => 'Kontua:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_ADDRESS_INFORMATION' => 'Helbidearen informazioa',
    'LBL_ANNUAL_REVENUE' => 'Urteko sarrerak',
    'LBL_ANY_ADDRESS' => 'Edozein helbide:',
    'LBL_ANY_EMAIL' => 'Edozein helbide elektroniko',
    'LBL_ANY_PHONE' => 'Edozein telefono',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitua izan da',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_BILLING_ADDRESS_CITY' => 'Kobrantza-hiria',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Kobrantza-herrialdea',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kobrantzarako posta-kodea',
    'LBL_BILLING_ADDRESS_STATE' => 'Kobrantza-estatua/probintzia',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Kobratze-helbidearen kalea 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Kobratze-helbidearen kalea 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Kobratze-helbidearen kalea 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Kobrantza-helbidea:',
    'LBL_BILLING_ADDRESS' => 'Kobrantza helbidea',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gorabehera',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kasuak',
    'LBL_CITY' => 'Hiria',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_COUNTRY' => 'Herrialdea',
    'LBL_DATE_ENTERED' => 'Sortua',
    'LBL_DATE_MODIFIED' => 'Aldatua',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontuak',
    'LBL_DESCRIPTION_INFORMATION' => 'Informazio gehigarria',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_DUPLICATE' => 'Bikoiztuta egon litekeen kontua',
    'LBL_EMAIL' => 'Helbide elektronikoa',
    'LBL_EMAIL_OPT_OUT' => 'Irteera-posta elektronikoa',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Langilea',
    'LBL_FAX' => 'Faxa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOMEPAGE_TITLE' => 'My Accounts',
    'LBL_INDUSTRY' => 'Industria',
    'LBL_INVALID_EMAIL' => 'Baliozkoa ez den helbide elektronikoa',
    'LBL_INVITEE' => 'Kontaktuak',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Hautagaiak',
    'LBL_LIST_ACCOUNT_NAME' => 'Izena',
    'LBL_LIST_CITY' => 'Hiria',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktu-izena',
    'LBL_LIST_EMAIL_ADDRESS' => 'Posta elektronikoa',
    'LBL_LIST_FORM_TITLE' => 'Kontuen zerrenda',
    'LBL_LIST_PHONE' => 'Telefonoa',
    'LBL_LIST_STATE' => 'Egoera',
    'LBL_MEMBER_OF' => 'Partaidea',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Partaide diren erakundeak',
    'LBL_MODULE_NAME' => 'Kontuak',
    'LBL_MODULE_TITLE' => 'Kontuak: hasiera',
    'LBL_MODULE_ID' => 'Kontuak',
    'LBL_NAME' => 'Izena',
    'LBL_NEW_FORM_TITLE' => 'Kontu berria',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Aukerak',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ordezko helbide elektronikoa',
    'LBL_OTHER_PHONE' => 'Hautazko Tel.',
    'LBL_OWNERSHIP' => 'Jabea',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Ordezko telefonoa',
    'LBL_PHONE_FAX' => 'Faxa',
    'LBL_PHONE_OFFICE' => 'Bulegoko tel.',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_POSTAL_CODE' => 'PK',
    'LBL_PRODUCTS_TITLE' => 'Produktuak',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kontaktuetara kopiatu',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopiatu...',
    'LBL_RATING' => 'Ebaluazioa',
    'LBL_SAVE_ACCOUNT' => 'Kontua Gorde',
    'LBL_SEARCH_FORM_TITLE' => 'Kontuen bilaketa',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Bidalketa-hiria',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Bidalketa-herrialdea',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Bidalketa PK',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Bidalketa-estatua/probintzia',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Bidaltze-helbidearen kalea 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Bidaltze-helbidearen kalea 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Bidaltze-helbidearen kalea 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Bidalketa-helbidea',
    'LBL_SHIPPING_ADDRESS' => 'Bidalketa-helbidea',
    'LBL_SIC_CODE' => 'SIC kodea',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Burtsako sigla',
    'LBL_TYPE' => 'Mota',
    'LBL_WEBSITE' => 'Web',
    'LBL_CAMPAIGNS' => 'Kanpainak',
    'LNK_ACCOUNT_LIST' => 'Kontuak',
    'LNK_NEW_ACCOUNT' => 'Kontua sortu',
    'LNK_IMPORT_ACCOUNTS' => 'Import Accounts',
    'MSG_DUPLICATE' => 'Kontu hau sortzeak kontu bikoiztu bat sor lezake. Barneko zerrendatik aurretik dagoen kontu bat aukeratu dezakezu edo aurretik sartutako datuekin kontu berri honen sorrerarekin jarraitzeko, kontu berrian egin dezakezu klik.',
    'MSG_SHOW_DUPLICATES' => 'Kontu hau sortzeak bikoiztu bat sor lezake. Aurrez sartutako datuekin kontu berri honen sorrerarekin jarraitzeko, kontu berrian egin dezakezu klik edo ezeztatu aukera hautatu.',
    'LBL_ASSIGNED_USER_NAME' => 'Esleitua izan da',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontuak',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiektuak',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Products and Services Purchased',

    'LBL_AOS_CONTRACTS' => 'Kontratuak',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Aurrekontuak',
    'LBL_LIST_WEBSITE' => 'website',
);
