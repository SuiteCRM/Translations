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
    'ERR_NO_OPPS' => 'Ju lutemi krijoni disa mundësi për të shikuar grafikat e mundësive.',
    'LBL_ALL_OPPORTUNITIES' => 'Sasia totale e mundësive është',
    'LBL_CHART_TYPE' => 'lloji i grafikut',
    'LBL_CREATED_ON' => 'drejtim i fundit në',
    'LBL_CLOSE_DATE_START' => 'data e fundit e pritur- nga',
    'LBL_CLOSE_DATE_END' => 'data e fundit e pritur- deri',
    'LBL_DATE_END' => 'Data e përfundimit',
    'LBL_DATE_RANGE_TO' => 'tek',
    'LBL_DATE_RANGE' => 'Gana e datave është',
    'LBL_DATE_START' => 'Data e nisjes',
    'LBL_EDIT' => 'Ndrysho',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Tregon sasitë kumulative të mundësive sipas burimeve udhëheqëse të selektuara nga të dalat e përdoruesve të caktuar. Të data janë të bazuara në atë nëse faza e shitjes është Fitim i mbyllur, Humbje e mbyllur ose vlerë tjetër.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Të gjitha mundësitë për nga burimi udhëheqës nga jashtë',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Tregon sasitë kumulative të mundësisë sipas burimit udhëheqës për përdorues të caktuar.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Të gjitha mundësitë sipas burimit udhëheqës',
    'LBL_LEAD_SOURCE_OTHER' => 'Tjetër',
    'LBL_LEAD_SOURCES' => 'burimet e udhëheqjes',
    'LBL_MODULE_NAME' => 'Paneli',
    'LBL_MODULE_TITLE' => 'Paneli: Ballina',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Tregon sasitë kumulative të mundësisë për muaj sipas të dalave të përdoruesve të caktuar ku data e përfundimit është brenda gamës së datave të caktuara. Të dalat janë të bazuara në atë nëse faza e shitjes është Fitim i mbyllur, Humbje e mbyllur ose vlerë tjetër.',
    'LBL_OPP_SIZE' => 'Nurmi i mundësisë në',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'mundësitë burimi i udhëheqjes i së cilave është',
    'LBL_OPPS_IN_STAGE' => 'ku shkalla e shitjes është',
    'LBL_OPPS_OUTCOME' => 'Ky dalja është',
    'LBL_OPPS_WORTH' => 'vlera e mundësive',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Tregon që sasitë e përmbledhura nga fazat e selektuara të shitjes për mundësitë e tuaja ku data e përfundimit është në gamën e datave të përcaktuara.',
    'LBL_REFRESH' => 'rifresko grafikun',
    'LBL_ROLLOVER_DETAILS' => 'Mbështjell një shtyll për detaje.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Mbështjell një pykë për detaje.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Tregon sasitë kumulative sipas fazave të shitjes të përdoruesve të caktuar ku data e përfundimit është brenda gamës së datave të caktuara.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Tubacionet sipas fazës së shitjeve',
    'LBL_SALES_STAGES' => 'Fazat e shitjes:',
    'LBL_TOTAL_PIPELINE' => 'Tubacioni total është',
    'LBL_USERS' => 'përdoruesit',
    'LBL_YEAR_BY_OUTCOME' => 'Tubacioni për muaj nga daljet',
    'LBL_YEAR' => 'Viti',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',
    'LNK_NEW_CALL' => 'Thirje identifikuese',
    'LNK_NEW_CASE' => 'Krijo rast',
    'LNK_NEW_CONTACT' => 'Krijo kontakt',
    'LNK_NEW_LEAD' => 'krijo udhëheqje',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_NEW_NOTE' => 'Krijo shënim ose bashkëngjitje',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LNK_NEW_TASK' => 'Krijo detyrë',
    'NTC_NO_LEGENDS' => 'Asnjëra',

    'LBL_TITLE' => 'Titulli:',
    'LBL_MY_MODULES_USED_SIZE' => 'pika e hyrjes',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source By Outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Daljet sipas muajve',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline By Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'My Pipeline by Sales Stage',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'My Modules Used (Last 30 Days)',
);
