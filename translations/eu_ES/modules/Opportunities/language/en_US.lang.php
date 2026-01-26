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
    'LBL_MODULE_NAME' => 'Aukerak',
    'LBL_MODULE_TITLE' => 'Aukerak: hasiera',
    'LBL_SEARCH_FORM_TITLE' => 'Aukeren bilaketa',
    'LBL_LIST_FORM_TITLE' => 'Aukeren zerrenda',
    'LBL_OPPORTUNITY_NAME' => 'Aukera-izena',
    'LBL_OPPORTUNITY' => 'Aukera',
    'LBL_NAME' => 'Aukeraren izena',
    'LBL_INVITEE' => 'Kontaktuak',
    'LBL_CURRENCIES' => 'Monetak',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Izena',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_LIST_AMOUNT' => 'Kopurua',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Kopurua',
    'LBL_LIST_DATE_CLOSED' => 'Itxi',
    'LBL_LIST_SALES_STAGE' => 'Salmenta-etapa',
    'LBL_ACCOUNT_ID' => 'Kontuko ID-a',
    'LBL_CURRENCY_NAME' => 'Currency Name',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',

    'UPDATE' => 'Aukera - Moneta eguneratu',
    'LBL_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_AMOUNT' => 'Aukeraren zenbatekoa',
    'LBL_AMOUNT_USDOLLAR' => 'Kopurua:',
    'LBL_CURRENCY' => 'Moneta',
    'LBL_DATE_CLOSED' => 'Itxiera-data',
    'LBL_TYPE' => 'Mota',
    'LBL_CAMPAIGN' => 'Kanpaina',
    'LBL_NEXT_STEP' => 'Hurrengo pausua',
    'LBL_LEAD_SOURCE' => 'Kontaktu-hartzea',
    'LBL_SALES_STAGE' => 'Salmenta-etapa',
    'LBL_PROBABILITY' => 'Probabilitatea (%)',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_DUPLICATE' => 'Bikoiztutako aukera izan daiteke',
    'MSG_DUPLICATE' => 'Aukera honen sorrerak bikoiztutako aukera bat sor dezake. Beheko zerrendatik jada existitzen den aukera bat hautatu dezakezu edo Aukera berrian klik egin aurretik sartutako datuekin aukera berri baten sorrerarekin jarraitzeko',
    'LBL_NEW_FORM_TITLE' => 'Aukera sortu',
    'LNK_NEW_OPPORTUNITY' => 'Aukera sortu',
    'LNK_OPPORTUNITY_LIST' => 'Aukerak',
    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_TOP_OPPORTUNITIES' => 'Nire aukera nagusiak',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Ziur zaude proiektu honetatik aukera hau ezabatu nahi duzula?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Aukerak',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Hautagaiak',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentuak',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitua izan da',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Nori esleitua',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'My Closed Opportunities',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total Opportunities',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Closed Won Opportunities',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_MODIFIED_NAME' => 'Modified by User Name',
    'LBL_CREATED_USER' => 'Erabiltzaileak sortua',
    'LBL_MODIFIED_USER' => 'Erabiltzaileak aldatua',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kanpainak',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiektuak',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import Opportunities',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Kontratuak',
    'LBL_AOS_QUOTES' => 'Aurrekontuak',
);
