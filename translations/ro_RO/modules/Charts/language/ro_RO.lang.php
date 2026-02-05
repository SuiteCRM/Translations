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
    'ERR_NO_OPPS' => 'Vă rugăm să creați câteva Oportunități pentru a vedea graficele de Oportunitate.',
    'LBL_ALL_OPPORTUNITIES' => 'Valoarea totală a tuturor oportunităților este',
    'LBL_CHART_TYPE' => 'Tip Diagramă:',
    'LBL_CREATED_ON' => 'Ultima dată rulează pe',
    'LBL_CLOSE_DATE_START' => 'Data de închidere așteptată - din:',
    'LBL_CLOSE_DATE_END' => 'Data așteptată închidere - la:',
    'LBL_DATE_END' => 'Dată sfârșit:',
    'LBL_DATE_RANGE_TO' => 'până la',
    'LBL_DATE_RANGE' => 'Perioada este',
    'LBL_DATE_START' => 'Data de începere:',
    'LBL_EDIT' => 'Editați',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Arată sumele cumulate pe afacere după sursa de conversii selectată funcție de rezultatul pentru utilizatorii selectați. Rezultatul se bazează pe faptul dacă etapa de vânzări este încheiată cu succes, Închisă Pierdere, sau orice altă valoare.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Toate oportunități după conversie și după rezultat',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Arată sumele cumulate pentru afacere după sursa de oportunitate selectată pentru utilizatorii selectați.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Toate oportunitățile după sursa de conversie',
    'LBL_LEAD_SOURCE_OTHER' => 'Altele',
    'LBL_LEAD_SOURCES' => 'Surse conversii:',
    'LBL_MODULE_NAME' => 'Panou de Bord',
    'LBL_MODULE_TITLE' => 'Grafice: start',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Afișează sumele cumulate pe afacere după lună și rezultat pentru utilizatorii selectați, unde data de închidere prevăzută este în intervalul de date specificat. Rezultatul se bazează pe faptul dacă etapa de vânzări este încheiată cu succes, Închisă Pierdere, sau orice altă valoare.',
    'LBL_OPP_SIZE' => 'Posibilitatea de mărime în',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'oportunități în care sursa principală este',
    'LBL_OPPS_IN_STAGE' => ' unde stadiul de vânzări este',
    'LBL_OPPS_OUTCOME' => ' unde venitul este',
    'LBL_OPPS_WORTH' => 'oportunități valoroase',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Arată sumele cumulate după etapele de vânzări selectate pentru oportunitățile dumneavoastră, unde data de închidere prevăzută este în intervalul de date specificat.',
    'LBL_REFRESH' => 'Reîncarcă',
    'LBL_ROLLOVER_DETAILS' => 'Rulează o bară pentru detalii.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Deplasați cursorul peste un element pentru detalii.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Arată sumele cumulate pe afacere după stadiile de vânzări selectate pentru utilizatorii selectați, unde data de închidere prevăzută este în intervalul de date specificat.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Situația după stadiul vânzării',
    'LBL_SALES_STAGES' => 'Stadii de vânzare:',
    'LBL_TOTAL_PIPELINE' => 'Totalul fluxurilor este',
    'LBL_USERS' => 'Utilizatori:',
    'LBL_YEAR_BY_OUTCOME' => 'Situația după lună și rezultat',
    'LBL_YEAR' => 'An:',
    'LNK_NEW_ACCOUNT' => 'Firmă nouă',
    'LNK_NEW_CALL' => 'Nou apel',
    'LNK_NEW_CASE' => 'Creați Caz',
    'LNK_NEW_CONTACT' => 'Creează Contact',
    'LNK_NEW_LEAD' => 'Creați Piste',
    'LNK_NEW_MEETING' => 'Programare Întâlnire',
    'LNK_NEW_NOTE' => 'Creează notă sau atașament',
    'LNK_NEW_OPPORTUNITY' => 'Creează oportunitate',
    'LNK_NEW_TASK' => 'Creați Sarcină',
    'NTC_NO_LEGENDS' => 'Niciun',

    'LBL_TITLE' => 'Titlu:',
    'LBL_MY_MODULES_USED_SIZE' => 'Numărul de accesări',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Fluxul actual după etapa de vânzare',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Sursă conversiei după rezultat',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Profit lunar',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Analiză proveniență după sursă conversiei',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Fluxul meu după stadiul vânzări',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Modulele mele folosite (ultimele 30 de zile)',
);
