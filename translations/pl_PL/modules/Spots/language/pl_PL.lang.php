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
    'LBL_ASSIGNED_TO_ID' => 'ID przydzielonego użytkownika',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisano do',
    'LBL_SECURITYGROUPS' => 'Grupy bezpieczeństwa',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupy bezpieczeństwa',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data utworzenia',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez',
    'LBL_MODIFIED_NAME' => 'Nazwa użytkownika modyfikującego',
    'LBL_CREATED' => 'Utworzone przez',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Usunięte',
    'LBL_NAME' => 'Nazwa',
    'LBL_CREATED_USER' => 'Utworzony przez Użytkownika',
    'LBL_MODIFIED_USER' => 'Zmodyfikowany przez Użytkownika',
    'LBL_LIST_NAME' => 'Nazwa',
    'LBL_EDIT_BUTTON' => 'Edytuj',
    'LBL_REMOVE' => 'Usuń',
    'LBL_LIST_FORM_TITLE' => 'Lista tabel przestawnych',
    'LBL_MODULE_NAME' => 'Tabela przestawna',
    'LBL_MODULE_TITLE' => 'Tabela przestawna',
    'LBL_HOMEPAGE_TITLE' => 'Moje tabele przestawne',
    'LNK_NEW_RECORD' => 'Utwórz tabelę przestawną',
    'LNK_LIST' => 'Przeglądaj tabele przestawne',
    'LBL_SEARCH_FORM_TITLE' => 'Szukaj tabel przestawnych',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Przeglądaj historię',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
    'LBL_NEW_FORM_TITLE' => 'Nowa tabela przestawna',
    'LBL_CONFIG' => 'Konfiguracja',
    'LBL_TYPE' => 'Obszar analizy',
    'LNK_SPOT_LIST' => 'Przeglądaj Analizy',
    'LNK_SPOT_CREATE' => 'Utwórz Analizę',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Konfiguracja',

    'LBL_AN_UNSUPPORTED_DB' => 'Przepraszamy, Pakiet Analizy jest obecnie skonfigurowany wyłącznie do pracy z MySQL i MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nazwa',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Branża',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Adres do korespondencji - państwo',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Użytkownik Przypisany',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Źródło pozyskania',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nazwy kampanii reklamowych',
    'LBL_AN_LEADS_YEAR' => 'Rok',
    'LBL_AN_LEADS_QUARTER' => 'Kwartał',
    'LBL_AN_LEADS_MONTH' => 'Miesięczny',
    'LBL_AN_LEADS_WEEK' => 'Tygodniowy',
    'LBL_AN_LEADS_DAY' => 'Dzienny',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nazwa Szansy sprzedaży',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Użytkownik Przypisany',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Typ Szansy sprzedaży',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Źródło pozyskania',
    'LBL_AN_SALES_AMOUNT' => 'Kwota',
    'LBL_AN_SALES_STAGE' => 'Etap Sprzedaży',
    'LBL_AN_SALES_PROBABILITY' => 'Prawdopodobieństwo',
    'LBL_AN_SALES_DATE' => 'Data sprzedaży',
    'LBL_AN_SALES_QUARTER' => 'Kwartał sprzedaży',
    'LBL_AN_SALES_MONTH' => 'Miesiąc sprzedaży',
    'LBL_AN_SALES_WEEK' => 'Tydzień sprzedaży',
    'LBL_AN_SALES_DAY' => 'Dzień sprzedaży',
    'LBL_AN_SALES_YEAR' => 'Rok sprzedaży',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanie',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_AN_SERVICE_STATE' => 'Woj.',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorytet',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Utworzono dnia',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Tydzień utworzenia',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Miesiąc utworzenia',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Utworzono w kwartale',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Rok utworzenia',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Użytkownik Przypisany',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Typ',
    'LBL_AN_ACTIVITIES_NAME' => 'Nazwa',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Użytkownik Przypisany',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Typ',
    'LBL_AN_MARKETING_BUDGET' => 'Budżet',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Oczekiwany koszt',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Szacowany Dochód',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nazwa Szansy sprzedaży',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Kwota Szansy sprzedaży',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Etap Szansy sprzedaży',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Szansa sprzedaży przypisana do',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nazwa kontrahenta',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nazwy kampanii reklamowych',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Data Działalności',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Rodzaj Działalności',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Powiązany Rodzaj',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Powiązane ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nazwa Szansy sprzedaży',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Typ Szansy sprzedaży',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Źródło szansy sprzedaży',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Etap Szansy sprzedaży',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nazwa kontaktu',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Nazwa elementu',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Typ elementu',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Kategoria elementu',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Ilość',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Cena katalogowa elementu',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Cena sprzedaży',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Cena zakupu',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Cena po rabacie',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Kwota rabatu',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Suma pozycji',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Suma',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Użytkownik Przypisany',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Data utworzenia',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Dzień utworzenia',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Tydzień utworzenia',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Miesiąca utworzenia',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Kwartał utworzenia',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Rok utworzenia',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Błąd potwierdzenia etykiety dla podobszaru tabeli przestawnej',
);
