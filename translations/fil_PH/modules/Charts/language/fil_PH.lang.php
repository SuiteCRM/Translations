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
    'ERR_NO_OPPS' => 'Mangyaring lumikha ng ilang Pagkakataon upang makita ang Mga graph ng Pagkakataon.',
    'LBL_ALL_OPPORTUNITIES' => 'Ang kabuuang halaga ng lahat ng pagkakataon ay ',
    'LBL_CHART_TYPE' => 'Uri ng Tsart:',
    'LBL_CREATED_ON' => 'Huling tumakbo ',
    'LBL_CLOSE_DATE_START' => 'Inaasahang Petsa na Isara - Mula:',
    'LBL_CLOSE_DATE_END' => 'Inaasahang Petsa ng Isara - Sa:',
    'LBL_DATE_END' => 'Katapusan ng petsa:',
    'LBL_DATE_RANGE_TO' => 'sa',
    'LBL_DATE_RANGE' => 'Saklaw ng petsa ay',
    'LBL_DATE_START' => 'Simulang Petsa:',
    'LBL_EDIT' => 'I-edit',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Nagpapakita ng mga halaga ng pinagsamang pagkakataon sa pamamagitan ng napiling mapagkukunan ng lead sa pamamagitan ng kinalabasan para sa mga piniling gumagamit. Ang kinalabasan ay batay sa kung ang yugto ng pagbebenta ay Closed Closed, Closed Lost, o anumang ibang halaga.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Lahat ng mga Oportunidad sa Lead Source ng outcome',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Ipinapakita ang mga halaga ng cumulative na pagkakataon sa pamamagitan ng piniling lead source para sa mga napiling gumagamit.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Lahat ng Mapaggagamitan ng Pinagmumulan ng Lead',
    'LBL_LEAD_SOURCE_OTHER' => 'At iba pa',
    'LBL_LEAD_SOURCES' => 'Lead Sources:',
    'LBL_MODULE_NAME' => 'Dashboard',
    'LBL_MODULE_TITLE' => 'Dashboard: Home',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Nagpapakita ng mga halaga ng cumulative na pagkakataon sa pamamagitan ng buwan sa pamamagitan ng kinalabasan para sa mga napiling mga user kung saan ang inaasahang saradong petsa ay nasa loob ng tinukoy na saklaw ng petsa. Ang kinalabasan ay batay sa kung ang yugto ng pagbebenta ay Closed Closed, Closed Lost, o anumang ibang halaga.',
    'LBL_OPP_SIZE' => 'Sukat ng oportunidad sa',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'mga oportunidad kung saan ang lead source',
    'LBL_OPPS_IN_STAGE' => ' kung saan ang stage ng mga sale',
    'LBL_OPPS_OUTCOME' => ' kung saan ang mga outcome',
    'LBL_OPPS_WORTH' => 'halaga ng mga oportunidad',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Nagpapakita ng mga kumulat na halaga sa pamamagitan ng mga napiling yugto ng benta para sa iyong mga pagkakataon kung saan ang inaasahang saradong petsa ay nasa loob ng tinukoy na hanay ng petsa.',
    'LBL_REFRESH' => 'I-refresh',
    'LBL_ROLLOVER_DETAILS' => 'Mag-Rollover ng isang bar para sa mga detalye.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Mag-Rollover ng isang wedge para sa mga detalye.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Ipinapakita ang mga halaga ng pinagsama-samang pagkakataon sa pamamagitan ng mga napiling yugto ng benta para sa mga napiling gumagamit kung saan ang inaasahang petsa ng saradong nasa loob ng tinukoy na saklaw ng petsa.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline sa pamamagitan ng sales stage',
    'LBL_SALES_STAGES' => 'Mga stage ng mga sale:',
    'LBL_TOTAL_PIPELINE' => 'Ang Kabuuang pipeline ay ',
    'LBL_USERS' => 'Mga user:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline ayon sa buwan ayon sa outcome',
    'LBL_YEAR' => 'Taon:',
    'LNK_NEW_ACCOUNT' => 'Gumawa ng Account',
    'LNK_NEW_CALL' => 'Tawag ay log',
    'LNK_NEW_CASE' => 'Gumawa ng kaso',
    'LNK_NEW_CONTACT' => 'Gumawa ng kontak',
    'LNK_NEW_LEAD' => 'Lumikha ng lead',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan o paglalakip',
    'LNK_NEW_OPPORTUNITY' => 'Gumawa ng oportunidad',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'NTC_NO_LEGENDS' => 'Wala',

    'LBL_TITLE' => 'Pamagat: ',
    'LBL_MY_MODULES_USED_SIZE' => 'Na count ang Access',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source ayon sa outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Kinalabasan ayon sa buwan',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline ayon sa lead source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Aking pipeline ayon sa stage ng mga sale',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Aking mga Modyul na nagamit (huling 30 araw)',
);
