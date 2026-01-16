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
    'ERR_NO_OPPS' => 'Müügivõimaluste graafikute nägemiseks loo mõned müügivõimalused.',
    'LBL_ALL_OPPORTUNITIES' => 'Kogusumma kõigist müügivõimalustest on',
    'LBL_CHART_TYPE' => 'Diagrammi tüüp:',
    'LBL_CREATED_ON' => 'Viimane käivitus',
    'LBL_CLOSE_DATE_START' => 'Oodatav sulgemiskuupäev - Kellelt:',
    'LBL_CLOSE_DATE_END' => 'Oodatav sulgemiskuupäev - Kellele:',
    'LBL_DATE_END' => 'Lõppkuupäev:',
    'LBL_DATE_RANGE_TO' => 'saaja',
    'LBL_DATE_RANGE' => 'Kuupäeva vahemik on',
    'LBL_DATE_START' => 'Alguskuupäev',
    'LBL_EDIT' => 'Redigeeri',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Näitab kumulatiivseid müügivõimaluse summasid valitud müügivõimaluse allika järgi valitud kasutajate tulemuse järgi. Tulemus põhineb sellel, kas müügistaadium on Võidetud, Kaotatud või mõni muu väärtus.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Kõk müügivõimalused müügivihje tulemuse järgi',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Näitab valitud kasutajate kumulatiivseid müügivõimaluste summasid valitud müügivihje allika järgi.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Kõik müügivõimalused müügivihje allika järgi',
    'LBL_LEAD_SOURCE_OTHER' => 'Muu',
    'LBL_LEAD_SOURCES' => 'Müügivihje allikad:',
    'LBL_MODULE_NAME' => 'Töölaud',
    'LBL_MODULE_TITLE' => 'Töölaud: Avaleht',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Näitab kumulatiivseid müügivõimaluse summasid  valitud kasutajate kohta kuude lõikes, tulemuste lõikes. Tulemus põhineb sellel, kas müügistaadium on Võidetud, Kaotatud või mõni muu väärtus.',
    'LBL_OPP_SIZE' => 'Müügivõimaluse suurus',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'müügivõimalused, kus müügivihje allikas on',
    'LBL_OPPS_IN_STAGE' => 'kus müügistaadium on',
    'LBL_OPPS_OUTCOME' => 'kus väljaminek on',
    'LBL_OPPS_WORTH' => 'müügivõimaluste väärtus',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Näitab sinu müügivõimaluste kumulatiivsed summasid valitud müügistaadiumi lõikes kus eeldatav sulgemiskuupäev jääb eeldatava kuupäeva vahemikku.',
    'LBL_REFRESH' => 'Värskenda',
    'LBL_ROLLOVER_DETAILS' => 'Rollover a bar for details.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Rollover a wedge for details.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Näitab valitud kasutajate kumulatiivset müügivõimalust valitud müügistaadiumi järgi, kus oodatav sulgemiskuupäev jääb määratletud ajavahemikku.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline müügistaadiumi järgi',
    'LBL_SALES_STAGES' => 'Müügistaadiumid:',
    'LBL_TOTAL_PIPELINE' => 'Pipeline kokku on',
    'LBL_USERS' => 'Kasutajad:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline kuu lõikes tulemuse lõikes',
    'LBL_YEAR' => 'Aasta:',
    'LNK_NEW_ACCOUNT' => 'Loo ettevõte',
    'LNK_NEW_CALL' => 'Kõne logi',
    'LNK_NEW_CASE' => 'Loo juhtum',
    'LNK_NEW_CONTACT' => 'Loo kontakt',
    'LNK_NEW_LEAD' => 'Loo müügivihje',
    'LNK_NEW_MEETING' => 'Planeeri kohtumine',
    'LNK_NEW_NOTE' => 'Loo märkus või manus',
    'LNK_NEW_OPPORTUNITY' => 'Uus müügivõimalus',
    'LNK_NEW_TASK' => 'Loo ülesanne',
    'NTC_NO_LEGENDS' => 'Pole midagi',

    'LBL_TITLE' => 'Tiitel:',
    'LBL_MY_MODULES_USED_SIZE' => 'Access Count',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline müügistaadiumi järgi',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source By Outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Kuu tulemus',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline By Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Minu Pipeline müügistaadiumi järgi',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Kasutatud moodulid (Viimase 30päeva jooksul)',
);
