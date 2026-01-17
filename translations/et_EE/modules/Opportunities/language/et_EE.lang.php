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
    'LBL_MODULE_NAME' => 'Müügivõimalused',
    'LBL_MODULE_TITLE' => 'Müügivõimalused: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Müügivõimaluse otsing',
    'LBL_LIST_FORM_TITLE' => 'Müügivõimaluse loend',
    'LBL_OPPORTUNITY_NAME' => 'Müügivõimaluse nimi:',
    'LBL_OPPORTUNITY' => 'Müügivõimalus:',
    'LBL_NAME' => 'Müügivõimaluse nimi',
    'LBL_INVITEE' => 'Kontaktid',
    'LBL_CURRENCIES' => 'Valuutad',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nimi',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_AMOUNT' => 'Müügivõimaluse summa',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Summa',
    'LBL_LIST_DATE_CLOSED' => 'Sulge',
    'LBL_LIST_SALES_STAGE' => 'Müügi staadium',
    'LBL_ACCOUNT_ID' => 'Ettevõtte Id',
    'LBL_CURRENCY_NAME' => 'Valuuta nimi',
    'LBL_CURRENCY_SYMBOL' => 'Valuuta sümbol',

    'UPDATE' => 'Müügivõimalus - valuuta uuendamine',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_AMOUNT' => 'Müügivõimaluse summa:',
    'LBL_AMOUNT_USDOLLAR' => 'Summa:',
    'LBL_CURRENCY' => 'Valuuta:',
    'LBL_DATE_CLOSED' => 'Oodatav sulgemiskuupäev:',
    'LBL_TYPE' => 'Tüüp:',
    'LBL_CAMPAIGN' => 'Kampaania:',
    'LBL_NEXT_STEP' => 'Järgmine samm:',
    'LBL_LEAD_SOURCE' => 'Müügivihje allikas:',
    'LBL_SALES_STAGE' => 'Müügistaadium:',
    'LBL_PROBABILITY' => 'Tõenäosus (%)',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_DUPLICATE' => 'Võimalik topelt müügivõimalus',
    'MSG_DUPLICATE' => 'Müügivõimaluse kirje, mida hetkel lood võib olla duplikaat juba olemasolevast müügivõimaluse kirjest. Müügivõimaluse kirjed, mis sisaldavad sarnaseid nimesid ja/või aadresse on väljatoodud allpool. Kliki Salvesta selle uue müügivõimaluse loomiseks või kliki Tühista moodulisse tagasiminemiseks müügivõimalust loomata.',
    'LBL_NEW_FORM_TITLE' => 'Uus müügivõimalus',
    'LNK_NEW_OPPORTUNITY' => 'Uus müügivõimalus',
    'LNK_OPPORTUNITY_LIST' => 'Vaata müügivõimalusi',
    'ERR_DELETE_RECORD' => 'Müügivõimaluse kustutamiseks täpsusta kirje numbrit.',
    'LBL_TOP_OPPORTUNITIES' => 'Minu Top avatud müügivõimalused',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Oled kindel, et soovid selle müügivõimaluse projektist eemaldada?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Müügivõimalused',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Müügivihjed',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Minu suletud müügivõimalused',
    'LBL_TOTAL_OPPORTUNITIES' => 'Müügivõimalused kokku',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Suletud võidetud müügivõimalused',
    'LBL_ASSIGNED_TO_ID' => 'Määratud kasutaja:',
    'LBL_MODIFIED_NAME' => 'Muutja nime järgi',
    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampaaniad',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektid',
    'LNK_IMPORT_OPPORTUNITIES' => 'Impordi müügivõimalused',
    'LBL_EDITLAYOUT' => 'Muuda paigutust' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Lepingud',
    'LBL_AOS_QUOTES' => 'Pakkumised',
);
