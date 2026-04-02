<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'ERR_NO_OPPS' => 'Izveidojiet vismaz dažas Iespējas, lai redzētu Iespēju grafikus.',
    'LBL_ALL_OPPORTUNITIES' => 'Kopējais visu iespēju skaits ir:',
    'LBL_CHART_TYPE' => 'Diagrammas veids:',
    'LBL_CREATED_ON' => 'Pēdējo reizi izpildīts',
    'LBL_CLOSE_DATE_START' => 'Plānotais slēgšanas datums - no:',
    'LBL_CLOSE_DATE_END' => 'Plānotais slēgšanas datums - līdz:',
    'LBL_DATE_END' => 'End Date:',
    'LBL_DATE_RANGE_TO' => 'to',
    'LBL_DATE_RANGE' => 'Datumu intervāls ir',
    'LBL_DATE_START' => 'Sākuma datums:',
    'LBL_EDIT' => 'Edit',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Attēlo kumulatīvos iespēju apjomus pēc iznākuma izvēlētajiem lietotājiem un pārdošanas cikla fāzes &#39;Aizvērts - uzvarēts&#39;, &#39;Aizvērts - zaudēts&#39;  vai citas.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Visas iespējas pēc interesenta avota un rezultāta',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Attēlo kumulatīvās iespēju summas norādītajiem lietotājiem pēc izvēlētajiem interesentu avotiem.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Visas iespējas pēc interesenta avota',
    'LBL_LEAD_SOURCE_OTHER' => 'Cita nozare',
    'LBL_LEAD_SOURCES' => 'Interesentu avoti:',
    'LBL_MODULE_NAME' => 'Dashboard',
    'LBL_MODULE_TITLE' => 'Darba vieta: Sākums',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Attēlo kumulatīvos iespēju apjomus izvēlētajiem lietotājiem pēc iznākuma un mēneša tām iespējām, kuru paredzamais noslēgšanas datums ir norādītajā laika intervālā. Iznākums ir atkarīgs arī no pārdošanas cikla fāzes &#39;Aizvērts - uzvarēts&#39;, &#39;Aizvērts - zaudēts&#39;, vai citas.',
    'LBL_OPP_SIZE' => 'Darījuma izmērs',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'iespējas, kuru interesenta avots ir',
    'LBL_OPPS_IN_STAGE' => 'kur pārdošanas fāze ir',
    'LBL_OPPS_OUTCOME' => 'kur iznākums ir',
    'LBL_OPPS_WORTH' => 'iespējas, vērtas',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Attēlo kumulatīvos iespēju apjomus pēc izvēlētajām pārdošanas fāzēm un paredzamā noslēgšanas datuma laika intervāla.',
    'LBL_REFRESH' => 'Refresh',
    'LBL_ROLLOVER_DETAILS' => 'Velciet aiz stabiņa, lai apskatītu detaļas.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Velciet aiz ķīļa, lai apskatītu detaļas.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Attēlo kumulatīvos iespēju apjomus izvēlētajiem lietotājiem pēc izvēlētajām pārdošanas fāzēm un paredzamā noslēgšanas datuma laika intervāla.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline, pēc pārdošanas fāzes',
    'LBL_SALES_STAGES' => 'Pārdošanas fāzes:',
    'LBL_TOTAL_PIPELINE' => 'Konveijera kopējais apjoms ir',
    'LBL_USERS' => 'Lietotāji:',
    'LBL_YEAR_BY_OUTCOME' => 'Konveijers pa mēnešiem pēc iznākuma',
    'LBL_YEAR' => 'Gads:',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'Izveidot interesentu',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_TASK' => 'Create Task',
    'NTC_NO_LEGENDS' => 'None',

    'LBL_TITLE' => 'Title:',
    'LBL_MY_MODULES_USED_SIZE' => 'Lietoto moduļu skaits',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Piltuve pēc pārdošanas fāzēm',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Interesentu avoti pēc rezultāta',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Rezultāti pa mēnešiem',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Piltuve pēc interesenta avota',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mana piltuve pa pārdošanas fāzēm',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Manis lietotie moduļi (pēdējās 30 dienas)',
);
