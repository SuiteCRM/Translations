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
    'LBL_ASSIGNED_TO_ID' => 'Id dodijeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_SECURITYGROUPS' => 'Sigurnosne Grupe',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sigurnosne Grupe',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_MODIFIED' => 'Modifikovao-la',
    'LBL_MODIFIED_NAME' => 'Izmjenjeno od strane korisnika',
    'LBL_CREATED' => 'Kreirao',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'Ime',
    'LBL_CREATED_USER' => 'Kreirao Korisnik',
    'LBL_MODIFIED_USER' => 'Izmijenio Korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_LIST_FORM_TITLE' => 'Pivot Lista',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'Moj Pivot',
    'LNK_NEW_RECORD' => 'Kreirajte Pivot',
    'LNK_LIST' => 'Pogledajte Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Pretražite Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi Pivot',
    'LBL_CONFIG' => 'Konfiguracija',
    'LBL_TYPE' => 'Oblast za analizu',
    'LNK_SPOT_LIST' => 'Pregledajte Spots',
    'LNK_SPOT_CREATE' => 'Kreirajte Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Konfiguracija',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots are currently configured for MySQL and MS SQL only',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Ime',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Tip klijenta',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industrija',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Država za fakturisanje',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Dodijeljeni korisnik',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Porijeklo potencijalnog kupca',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Ime kampanje',
    'LBL_AN_LEADS_YEAR' => 'Godina',
    'LBL_AN_LEADS_QUARTER' => 'Kvartal',
    'LBL_AN_LEADS_MONTH' => 'Mjesec',
    'LBL_AN_LEADS_WEEK' => 'Sedmica',
    'LBL_AN_LEADS_DAY' => 'Dan',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Naziv Poslovne prilike',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Dodijeljeni korisnik',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Tip poslovne prilike',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Porijeklo potencijalnog kupca',
    'LBL_AN_SALES_AMOUNT' => 'Iznos',
    'LBL_AN_SALES_STAGE' => 'Faza prodaje',
    'LBL_AN_SALES_PROBABILITY' => 'Vjerovatnoća',
    'LBL_AN_SALES_DATE' => 'Datum prodaje',
    'LBL_AN_SALES_QUARTER' => 'Prodajni kvartal',
    'LBL_AN_SALES_MONTH' => 'Mjesec prodaje',
    'LBL_AN_SALES_WEEK' => 'Sedmica prodaje',
    'LBL_AN_SALES_DAY' => 'Dan prodaje',
    'LBL_AN_SALES_YEAR' => 'Godina prodaje',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanja',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_AN_SERVICE_STATE' => 'Entitet/Kanton',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioritet',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Dan kreiranja',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Sedmica kreiranja',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Mjesec kreiranja',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Kvartal kreiranja',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Godina kreiranja',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Ime kontakta',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Dodijeljeni korisnik',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tip',
    'LBL_AN_ACTIVITIES_NAME' => 'Ime',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Dodijeljeni korisnik',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Tip',
    'LBL_AN_MARKETING_BUDGET' => 'Budžet',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Očekivani trošak',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Očekivani prihodi',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Naziv Poslovne prilike',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Iznos prodajne prilike',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Faza prodaje poslovne prilike',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Poslovna prilika dodijeljena na',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Naziv računa',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Ime kampanje',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Datum aktivnosti',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tip aktivnosti',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Povezani tip',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Povezani ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Naziv Poslovne prilike',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Tip poslovne prilike',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Opportunity Lead Source',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Faza prodaje poslovne prilike',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Ime kontakta',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Naziv stavke',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Tip stavke',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategorija stavke',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Količina',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Cijena stavke',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Prodajna cijena stavke',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Trošak stavke',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Cijena stavke sa popustom',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Iznos popusta',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Ukupno',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'TOTAL',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Dodijeljeni korisnik',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Datum kreiranja',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Dan kreiranja',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Sedmica kreiranja',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Mjesec kreiranja',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Kvartal kreiranja',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Godina kreiranja',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',
);
