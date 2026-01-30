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
    'ERR_NO_OPPS' => 'Skapa några affärer för att se affärsgrafer.',
    'LBL_ALL_OPPORTUNITIES' => 'Totalt belopp för alla affärer är ',
    'LBL_CHART_TYPE' => 'Diagram Typ:',
    'LBL_CREATED_ON' => 'Senast körd ',
    'LBL_CLOSE_DATE_START' => 'Förväntat avslutsdatum - Från:',
    'LBL_CLOSE_DATE_END' => 'Förväntat avslutsdatum - Till:',
    'LBL_DATE_END' => 'Slutdatum:',
    'LBL_DATE_RANGE_TO' => 'a',
    'LBL_DATE_RANGE' => 'Datumintervall',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_EDIT' => 'Redigera',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Visar sammanlagda affärsbelopp som funktion av vald lead-källa och utfall för valda användare.  Utfallet är baserat på huruvida säljläget är Avslutad tagen, Avslutad förlorad eller annat läge.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Alla affärer som funktion av lead-källa och utfall',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Visar sammanlagda affärsbelopp som funktion av vald lead-källa för vald användar.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Alla affärer som funktion av lead-källa',
    'LBL_LEAD_SOURCE_OTHER' => 'Övrigt',
    'LBL_LEAD_SOURCES' => 'Lead-källor:',
    'LBL_MODULE_NAME' => 'Infopanel',
    'LBL_MODULE_TITLE' => 'Kontrollpanel: Hem',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Visar sammanlagda affärsbelopp som funktion av månad och resultat för valda användare där förväntat slutdatum ligger inom specificerat datumintervall.  Utfall är baserat på huruvida säljläget är Avslutad tagen, Avslutad förlorad eller annat läge.',
    'LBL_OPP_SIZE' => 'Affärens storlek inom',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'affärer där lead-källan är',
    'LBL_OPPS_IN_STAGE' => ' där säljläget är',
    'LBL_OPPS_OUTCOME' => ' däe utfallet är',
    'LBL_OPPS_WORTH' => 'affärsvärde',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Visar sammanlagda belopp som funktion av valda säljlägen för dina affärer där förväntat slutdatum ligger inom specificerat datumintervall.',
    'LBL_REFRESH' => 'Uppdatera',
    'LBL_ROLLOVER_DETAILS' => 'Dubbelklicka på en bom för detaljer.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Dubbelklicka på en kil för detaljer.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Visar sammanlagda affärsbelopp som funktion av valda säljlägen för valda användare där förväntat slutdatum ligger inom specificerat datumintervall.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline över försäljningsstadium',
    'LBL_SALES_STAGES' => 'Säljlägen:',
    'LBL_TOTAL_PIPELINE' => 'Pipeline totalsumma är ',
    'LBL_USERS' => 'Användare:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline som funktion av månad och utfall',
    'LBL_YEAR' => 'År:',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'LNK_NEW_CALL' => 'Schemalägg samtal',
    'LNK_NEW_CASE' => 'Skapa fall',
    'LNK_NEW_CONTACT' => 'Skapa kontakt',
    'LNK_NEW_LEAD' => 'Skapa lead',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affär',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'NTC_NO_LEGENDS' => 'Ingen',

    'LBL_TITLE' => 'Titel: ',
    'LBL_MY_MODULES_USED_SIZE' => 'Åtkomst räkning',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline på Säljskeden',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source By Outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Utfall per månad',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline By Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Min pipeline över försäljingsstadium',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'My Modules Used (Last 30 Days)',
);
