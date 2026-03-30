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
    'ERR_DELETE_RECORD' => 'Een recordnummer moet worden opgegeven om de organisatie te verwijderen.',
    'LBL_ACCOUNT_NAME' => 'Naam relatie:',
    'LBL_ACCOUNT' => 'Organisatie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ANNUAL_REVENUE' => 'Jaarlijkse omzet',
    'LBL_ANY_ADDRESS' => 'Adres',
    'LBL_ANY_EMAIL' => 'Willekeurige e-mail:',
    'LBL_EMAIL_NON_PRIMARY' => 'Niet primaire emails',
    'LBL_ANY_PHONE' => 'Telefoon',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_RATING' => 'Score',
    'LBL_ASSIGNED_TO' => 'Toegewezen aan:',
    'LBL_ASSIGNED_USER' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned to:',
    'LBL_BILLING_ADDRESS_CITY' => 'Factuur plaats',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Factuur land',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Factuur postcode',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturering Provincie:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Factuur straat 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Factuur straat 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Factuur straat 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Factuur straat',
    'LBL_BILLING_ADDRESS' => 'Factuur adres',
    'LBL_ACCOUNT_INFORMATION' => 'Organisatie informatie',
    'LBL_CITY' => 'Plaats',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacten',
    'LBL_COUNTRY' => 'Land',
    'LBL_DATE_ENTERED' => 'Ingevoerd:',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Relaties',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving informatie',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele organsatie',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Medewerkers',
    'LBL_FAX' => 'Fax',
    'LBL_INDUSTRY' => 'Industrie',
    'LBL_LIST_ACCOUNT_NAME' => 'Organisatie naam',
    'LBL_LIST_CITY' => 'Plaats',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_STATE' => 'Status',
    'LBL_MEMBER_OF' => 'Lid van',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Lid organisaties',
    'LBL_NAME' => 'Naam:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternatief e-mailadres',
    'LBL_OTHER_PHONE' => 'Alteratief telefoonnr.',
    'LBL_OWNERSHIP' => 'Eigenaar',
    'LBL_PARENT_ACCOUNT_ID' => 'Moeder Account ID',
    'LBL_PHONE_ALT' => 'Telefoon',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_PHONE_OFFICE' => 'Telefoon (werk):',
    'LBL_PHONE' => 'Telefoon',
    'LBL_EMAIL_ADDRESS' => 'Email Address',
    'LBL_EMAIL_ADDRESSES' => 'E-mail adres(sen)',
    'LBL_POSTAL_CODE' => 'Postcode',
    'LBL_SAVE_ACCOUNT' => 'Organisatie opslaan',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Verzend plaats',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Verzend land',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Verzend postcode',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Verzend Provincie:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Verzend straat 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Verzend straat 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Verzend straat 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Verzend straat',
    'LBL_SHIPPING_ADDRESS' => 'Verzendadres',

    'LBL_STATE' => 'Staat:',
    'LBL_TICKER_SYMBOL' => 'Ticker',
    'LBL_TYPE' => 'Type',
    'LBL_WEBSITE' => 'Website',

    'LNK_ACCOUNT_LIST' => 'Accounts',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',

    'MSG_DUPLICATE' => 'Toevoegen van deze relatie kan resulteren in een dubbele relatie. U kunt een relatie kiezen uit de onderstaande lijst of een Nieuwe relatie toevoegen om door te gaan met toevoegen van het relatie.<br>Klik op Opslaan om door te gaan met het maken van deze nieuwe relatie, of klik Annuleren om terug te keren naar de module zonder de relatie aan te maken.',
    'MSG_SHOW_DUPLICATES' => 'Toevoegen van deze relatie kan resulteren in een dubbele relatie. U kunt een relatie kiezen uit de onderstaande lijst of een Nieuwe relatie toevoegen om door te gaan met toevoegen van het relatie.<br>Klik op Opslaan om door te gaan met het maken van deze nieuwe relatie, of klik Annuleren om terug te keren naar de module zonder de relatie aan te maken.',

    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',

    'LBL_EDIT_BUTTON' => 'Bewerken ',
    'LBL_REMOVE' => 'Remove',

);
