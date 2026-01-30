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
    'ERR_NO_OPPS' => 'Prašome sukurti kelis pardavimus, jei norite pamatyti pardavimų grafikus.',
    'LBL_ALL_OPPORTUNITIES' => 'Bendra visų pardavimų suma yra',
    'LBL_CHART_TYPE' => 'Grafiko tipas:',
    'LBL_CREATED_ON' => 'Paskutinį kartą paleistas',
    'LBL_CLOSE_DATE_START' => 'Tikėtina užbaigimo data - Nuo:',
    'LBL_CLOSE_DATE_END' => 'Tikėtina užbaigimo data - Iki:',
    'LBL_DATE_END' => 'Pabaigos data:',
    'LBL_DATE_RANGE_TO' => 'į',
    'LBL_DATE_RANGE' => 'Datos intervalas yra nuo',
    'LBL_DATE_START' => 'Pradžios data:',
    'LBL_EDIT' => 'Redaguoti',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Rodomas bendras pardavimų dydis pagal pritraukimo metodiką',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Pardavimai pagal pritraukimo metodiką',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Rodomas bendros pardavimų apimtys, pagal pažymėtą pritraukimo metodą',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Pagal pritraukimo metodiką',
    'LBL_LEAD_SOURCE_OTHER' => 'Kiti',
    'LBL_LEAD_SOURCES' => 'Pritraukimo metodas:',
    'LBL_MODULE_NAME' => 'Prietaisų skydas',
    'LBL_MODULE_TITLE' => 'Prietaisų skydas: Pradžia',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Rodomi darbuotojų mėnesiniai pardavimų rezultatai nurodytame laiko intervale',
    'LBL_OPP_SIZE' => 'Pardavimo dydis',
    'LBL_OPP_THOUSANDS' => 'tūkst.',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'Prekės tipas yra',
    'LBL_OPPS_IN_STAGE' => 'kur pardavimo etapas yra',
    'LBL_OPPS_OUTCOME' => 'kur rezultatas yra',
    'LBL_OPPS_WORTH' => 'pardavimai verti',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Atvaizduojamos pardavimų apimtys pagal pasirinktą pardavimo etapą.',
    'LBL_REFRESH' => 'Atnaujinti',
    'LBL_ROLLOVER_DETAILS' => 'Užveskite pelę ant stulpelio, jei norite sužinoti detalesnę informaciją.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Detalesnę informaciją rasite užvedę pelę ant išpjovimo.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Rodomos suminės pardavimų apimtys pagal pasirinktą pardavimo etapą ir vartotoją',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pardavimai pagal etapus',
    'LBL_SALES_STAGES' => 'Pardavimų etapai:',
    'LBL_TOTAL_PIPELINE' => 'Bendra vykdomų pardavimų suma',
    'LBL_USERS' => 'Vartotojai:',
    'LBL_YEAR_BY_OUTCOME' => 'Vykdomi pardavimai pagal mėnesį',
    'LBL_YEAR' => 'Metai:',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LNK_NEW_CONTACT' => 'Sukurti kontaktą',
    'LNK_NEW_LEAD' => 'Sukurti potencialų kontaktą',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_NOTE' => 'Sukurti užrašą',
    'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'NTC_NO_LEGENDS' => 'Nėra',

    'LBL_TITLE' => 'Pavadinimas:',
    'LBL_MY_MODULES_USED_SIZE' => 'Priėjimų kartai',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pardavimų procesų eiliškumo etapas',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Potencialių kontaktų rezultatai pagal šaltinį',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Pardavimai pagal mėnesį',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Potencialių kontaktų šaltinio eiliškumas',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mano Pardavimų procesų eiliškumo etapas',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mano Naudoti Moduliai (pastarosios 30 dienų)',
);
