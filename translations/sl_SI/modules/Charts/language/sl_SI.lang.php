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
    'ERR_NO_OPPS' => 'Prosimo ustvarite nekaj Priložnosti za prikaz grafov Priložnosti.',
    'LBL_ALL_OPPORTUNITIES' => 'Skupno število Priložnosti je: ',
    'LBL_CHART_TYPE' => 'Tip grafa:',
    'LBL_CREATED_ON' => 'Zadnjič zagnano ',
    'LBL_CLOSE_DATE_START' => 'Expected Close Date - From:',
    'LBL_CLOSE_DATE_END' => 'Expected Close Date - To:',
    'LBL_DATE_END' => 'Datum konca:',
    'LBL_DATE_RANGE_TO' => 'naslovnik',
    'LBL_DATE_RANGE' => 'Obseg dni je',
    'LBL_DATE_START' => 'Datum začetka:',
    'LBL_EDIT' => 'Uredi',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Prikaže skupne vrednosti Priložnosti po izbranem viru Potencialov glede na končni rezultat za izbrane uporabnike. Rezultat je osnovan glede na uspešno ali neuspešno prodajo ter druge vrednosti.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Vse priložnosti glede na vire potencialov in obseg prodaje',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Prikaže skupne vrednosti Priložnosti izbranega vira Potencialov za izbrane uporabnike.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Vse Priložnosti po virih Potencialov',
    'LBL_LEAD_SOURCE_OTHER' => 'Drugo',
    'LBL_LEAD_SOURCES' => 'Viri Potencialov:',
    'LBL_MODULE_NAME' => 'Nadzorna plošča',
    'LBL_MODULE_TITLE' => 'Nadzorna plošča: Domov',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Prikaže skupne vrednosti Priložnosti po mesecih glede na rezultat za izbrane uporabnike, kjer je pričakovan datum zaključka v določenem časovnem obdobju. Rezultat je osnovan na uspešnosti prodaje.',
    'LBL_OPP_SIZE' => 'Obseg Priložnosti',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'Priložnosti, kjer je vir Potencialov',
    'LBL_OPPS_IN_STAGE' => ' Kjer je status prodajnega postopka',
    'LBL_OPPS_OUTCOME' => ' Kjer je rezultat prodaje',
    'LBL_OPPS_WORTH' => 'Vrednost Priložnosti',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Prikaže skupne vrednosti po izbranem prodajnem statusu za Priložnosti, katere naj bi se zaključile v določenem časovnem obdobju.',
    'LBL_REFRESH' => 'Osveži',
    'LBL_ROLLOVER_DETAILS' => 'Premakni se preko stolpca za podrobnosti.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Premakni se preko zatika za podrobnosti.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Prikaže vrednost skupnih priložnosti po izbranih statusih prodaje za izbrane uporabnike, kjer je pričakovan datum zaključka v določenem časovnem obdobju.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Prodajni lijak po prodajni fazi',
    'LBL_SALES_STAGES' => 'Statusi prodaje:',
    'LBL_TOTAL_PIPELINE' => 'Prodajni lijak skupaj je',
    'LBL_USERS' => 'Uporabniki:',
    'LBL_YEAR_BY_OUTCOME' => 'Prodajni lijak po mesecih glede na izkupiček',
    'LBL_YEAR' => 'Leto:',
    'LNK_NEW_ACCOUNT' => 'Ustvari Partnerja',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_CASE' => 'Ustvari primer',
    'LNK_NEW_CONTACT' => 'Ustvari kontakt',
    'LNK_NEW_LEAD' => 'Ustvari Potencial',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_NEW_NOTE' => 'Ustvari opombo ali priponko',
    'LNK_NEW_OPPORTUNITY' => 'Ustvari priložnost',
    'LNK_NEW_TASK' => 'Ustvari nalogo',
    'NTC_NO_LEGENDS' => 'Brez',

    'LBL_TITLE' => 'Naslov:',
    'LBL_MY_MODULES_USED_SIZE' => 'Število dostopov',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source By Outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Mesečni obseg prodaje',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline By Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'My Pipeline by Sales Stage',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'My Modules Used (Last 30 Days)',
);
