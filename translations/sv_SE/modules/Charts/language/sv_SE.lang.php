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
    'ERR_NO_OPPS' => 'Skapa några affärsmöjligheter för att visa diagram över affärsmöjligheter.',
    'LBL_ALL_OPPORTUNITIES' => 'Det totala beloppet för alla affärsmöjligheter är',
    'LBL_CHART_TYPE' => 'Diagramtyp:',
    'LBL_CREATED_ON' => 'Senast körd',
    'LBL_CLOSE_DATE_START' => 'Förväntat avslutsdatum från:',
    'LBL_CLOSE_DATE_END' => 'Förväntat avslutsdatum till:',
    'LBL_DATE_END' => 'Slutdatum:',
    'LBL_DATE_RANGE_TO' => 'till',
    'LBL_DATE_RANGE' => 'Datumintervallet är',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_EDIT' => 'Redigera',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Visar ackumulerade belopp för affärsmöjligheter per vald leadkälla och utfall för valda användare. Utfallet beror på om säljfasen är Stängd vunnen, Stängd förlorad eller har något annat värde.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Alla affärsmöjligheter per leadkälla och utfall',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Visar ackumulerade belopp för affärsmöjligheter per vald leadkälla för valda användare.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Alla affärsmöjligheter per leadkälla',
    'LBL_LEAD_SOURCE_OTHER' => 'Övrigt',
    'LBL_LEAD_SOURCES' => 'Leadkällor:',
    'LBL_MODULE_NAME' => 'Instrumentpanel',
    'LBL_MODULE_TITLE' => 'Instrumentpanel: startsida',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Visar ackumulerade belopp för affärsmöjligheter per månad och utfall för valda användare där det förväntade avslutsdatumet ligger inom det angivna datumintervallet. Utfallet beror på om säljfasen är Stängd vunnen, Stängd förlorad eller har något annat värde.',
    'LBL_OPP_SIZE' => 'Affärsmöjlighetens storlek i',
    'LBL_OPP_THOUSANDS' => 'T',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'affärsmöjligheter där leadkällan är',
    'LBL_OPPS_IN_STAGE' => ' där säljfasen är',
    'LBL_OPPS_OUTCOME' => ' där utfallet är',
    'LBL_OPPS_WORTH' => 'affärsmöjligheter värda',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Visar ackumulerade belopp per vald säljfas för dina affärsmöjligheter där det förväntade avslutsdatumet ligger inom det angivna datumintervallet.',
    'LBL_REFRESH' => 'Uppdatera',
    'LBL_ROLLOVER_DETAILS' => 'Håll pekaren över en stapel för detaljer.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Håll pekaren över en sektor för detaljer.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Visar ackumulerade belopp för affärsmöjligheter per vald säljfas för valda användare där det förväntade avslutsdatumet ligger inom det angivna datumintervallet.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Försäljningsflöde per säljfas',
    'LBL_SALES_STAGES' => 'Säljfaser:',
    'LBL_TOTAL_PIPELINE' => 'Försäljningsflödets totalsumma är',
    'LBL_USERS' => 'Användare:',
    'LBL_YEAR_BY_OUTCOME' => 'Försäljningsflöde per månad och utfall',
    'LBL_YEAR' => 'År:',
    'LNK_NEW_ACCOUNT' => 'Skapa organisation',
    'LNK_NEW_CALL' => 'Logga samtal',
    'LNK_NEW_CASE' => 'Skapa ärende',
    'LNK_NEW_CONTACT' => 'Skapa kontakt',
    'LNK_NEW_LEAD' => 'Skapa lead',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'NTC_NO_LEGENDS' => 'Ingen',

    'LBL_TITLE' => 'Titel:',
    'LBL_MY_MODULES_USED_SIZE' => 'Åtkomstantal',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Mitt försäljningsflöde per säljfas',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Leadkälla per utfall',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Utfall per månad',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Försäljningsflöde per leadkälla',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mitt försäljningsflöde per säljfas',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mina använda moduler de senaste 30 dagarna',
);
