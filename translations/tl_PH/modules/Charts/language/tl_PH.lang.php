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
    'ERR_NO_OPPS' => 'Mangyaring paki-gawa ng iilang mga Oportunidad para makapag-tingin sa mga grap ng Oportunidad.',
    'LBL_ALL_OPPORTUNITIES' => 'Kabuuang halaga sa lahat ng mga oportunidad ay ',
    'LBL_CHART_TYPE' => 'Klase ng Tsart:',
    'LBL_CREATED_ON' => 'Huling pinatakbo nung ',
    'LBL_CLOSE_DATE_START' => 'Inaasahang Petsa ng Pagkasarado - Mula sa:',
    'LBL_CLOSE_DATE_END' => 'Inaasahang Petsa ng Pagkasarado - Hanggang sa:',
    'LBL_DATE_END' => 'Petsa ng Katapusan:',
    'LBL_DATE_RANGE_TO' => 'sa',
    'LBL_DATE_RANGE' => 'Ang saklaw ng petsa ay',
    'LBL_DATE_START' => 'Petsa ng Pagsisimula:',
    'LBL_EDIT' => 'I-edit',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Pinapakita ang mga bilang ng oportunidad na kumulatibo sa pangunahing pinagkukunang napagpilian sa kinalabasan para sa mga gumagamit na napagpilian. Ang kinalibasan ay nakabasi sa kung ang mga antas sa pagtitinda ay Napinalong Malapitan, Nawala nang Malapitan, o anumang iba pang halaga.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Lahat ng mga Oportunidad Sa Nangungunang Pinagkukunan Sa Kinalalabasan',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Ipinapakita ang mga bilang ng oportunidad na kumulatibo sa pinagkukunang nangunguna na napagpilian para sa mga gumagamit na napagpilian.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Lahat ng Mga Oportunidad Sa Pinagkukunang Nangunguna',
    'LBL_LEAD_SOURCE_OTHER' => 'Iba pa',
    'LBL_LEAD_SOURCES' => 'Mga Pinagkukunang Nangunguna:',
    'LBL_MODULE_NAME' => 'Ang dashboard',
    'LBL_MODULE_TITLE' => 'Dashbord: Home',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Ipinapakita ang bilang ng kumulatibong oportunidad sa buwan sa kinalalabasan para sa mga gumagamit na napagpilian na kung saan ang inaasahang petsa ng pagsasarado ay nasa loob pa ng saklaw ng petsang naespisipika. Ang kinalalabasan ay nakabasi sa kung ang antas sa pagtitinda ay Napainalo ng Malapitan, Nalugi ng Malapitan, o anumang iba pang halaga.',
    'LBL_OPP_SIZE' => 'Laki ng oportunidad sa',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'mga oportunidad na kung saan ang pinagkukunang nangunguna ay',
    'LBL_OPPS_IN_STAGE' => ' na kung saan ang mga antas ng pagtitinda ay',
    'LBL_OPPS_OUTCOME' => ' kung saan ang kinalalabasan ay',
    'LBL_OPPS_WORTH' => 'mga oportunidad na nagkakahalagang',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Ipinapakita ang mga bilang sa kumulatibo sa mga antas ng pagtitinda para sa iyong mga oportunidad na kung saan ang petsang inaasahan sa pagsasarado ay nasa loob ng saklaw sa petsa na espesipika.',
    'LBL_REFRESH' => 'I-refresh',
    'LBL_ROLLOVER_DETAILS' => 'Mag-rollover ng isang bar para sa mga detalye.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Mag-rollover ng isang kunyas para sa mga detalye.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Ipinapakita ang mga bilang sa kumulatibong oportunidad sa mga antas ng mga napagpiliang mga pagtitinda para sa mga napagpiliang mga gumagamit kung saan ang petsang inaasahan sa pagsarado ay nasa loob ng saklaw sa petsang nakaespesipika.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipelayn Sa Antas ng Mga Pagtitinda',
    'LBL_SALES_STAGES' => 'Mga Antas ng Mga Pagtitinda:',
    'LBL_TOTAL_PIPELINE' => 'Kabuuang pipelayn ay ',
    'LBL_USERS' => 'Mga Gumagamit:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipelayn Sa Buwan Sa Pamamagitan ng Kinalalabasan',
    'LBL_YEAR' => 'Taon:',
    'LNK_NEW_ACCOUNT' => 'Lumikha ng Akawnt',
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_CASE' => 'Lumikha ng kaso',
    'LNK_NEW_CONTACT' => 'Gumawa ng Kontak',
    'LNK_NEW_LEAD' => 'Gumawa ng Nangunguna',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_NEW_NOTE' => 'Gumawa ng Nota o Ilalakip',
    'LNK_NEW_OPPORTUNITY' => ' Oportunidad ang lumikha',
    'LNK_NEW_TASK' => 'Gumawa ng Gawain',
    'NTC_NO_LEGENDS' => 'Wala',

    'LBL_TITLE' => 'Pamagat: ',
    'LBL_MY_MODULES_USED_SIZE' => 'Bilang ng Pag-aakses',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Pinagkukunang Nangunguna sa Kinalalabasan',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Buwanang Kinalalabasan',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipelayn Nang Bawat Pinagkukunang Nangunguna',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Ang Aking Pipelayn sa Antas ng Pagtitinda',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Ang Aking Mga Modyul Na Nagamit (Sa Huling 30 na Mga Araw)',
);
