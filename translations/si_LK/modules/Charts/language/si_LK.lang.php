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
    'ERR_NO_OPPS' => 'ආවස්ථික ප්රස්තාර බලන්න සමහර අවස්ථා නිර්මාණය කරන්න.',
    'LBL_ALL_OPPORTUNITIES' => 'සියලු අවස්ථා මුළු මුදල වේ ',
    'LBL_CHART_TYPE' => 'සටහන වර්ගය:',
    'LBL_CREATED_ON' => 'පසුගිය ලකුණු ',
    'LBL_CLOSE_DATE_START' => 'අපේක්ෂිත වසන්න දිනය - සිට:',
    'LBL_CLOSE_DATE_END' => 'අපේක්ෂිත වසන්න දිනය - කිරීම සඳහා:',
    'LBL_DATE_END' => 'අවසාන දිනය:',
    'LBL_DATE_RANGE_TO' => 'දක්වා',
    'LBL_DATE_RANGE' => 'දිනය පරාසය වේ',
    'LBL_DATE_START' => 'දිනය ආරම්භ කරන්න:',
    'LBL_EDIT' => 'සංස්කරණය',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'තෝරාගත් පරිශීලකයන්ට සඳහා ප්රතිඵල විසින් තෝරාගත් පෙරමුණ ප්රභවය විසින් සමුච්චිත අවස්ථාව ප්රමාණයක් පෙන්නුම් කරයි. ප්රතිඵලය, විකිණුම් අදියර සංවෘත වොන්, සංවෘත ලොස්ට්, හෝ වෙනත් ඕනෑම අගය ද යන්න මත පදනම් වේ.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'ප්රතිඵල විසින් ඊයම් ​​ප්රභවය වන විට සියලුම අවස්ථා',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'තෝරාගත් පරිශීලකයන්ට සඳහා තෝරාගත් ප්රධාන ප්රභවය විසින් සමුච්චිත අවස්ථාව ප්රමාණයක් පෙන්නුම් කරයි.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'ඊයම් ප්රභවය වන විට සියලුම අවස්ථා',
    'LBL_LEAD_SOURCE_OTHER' => 'වෙනත්',
    'LBL_LEAD_SOURCES' => 'ඊයම් ආරංචි මාර්ග:',
    'LBL_MODULE_NAME' => 'උපකරණ පුවරුව',
    'LBL_MODULE_TITLE' => 'උපකරණ පුවරුව: මුල් පිටුව',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'සමුච්චිත අවස්ථාව අපේක්ෂිත වසා දිනය දක්වා ඇති දිනය පරාසය තුළ කොහෙද තෝරාගත් පරිශීලකයන්ට සඳහා ප්රතිඵල විසින් මාසය වනවිට කි පෙන්වයි. ප්රතිඵලය, විකිණුම් අදියර සංවෘත වොන්, සංවෘත ලොස්ට්, හෝ වෙනත් ඕනෑම අගය ද යන්න මත පදනම් වේ.',
    'LBL_OPP_SIZE' => 'අවස්ථාව ප්රමාණයෙන්',
    'LBL_OPP_THOUSANDS' => ' කේ',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'ඊයම් ප්රභවය වන්නේ එහිදී අවස්ථා',
    'LBL_OPPS_IN_STAGE' => ' අලෙවි අදියර කොහෙද',
    'LBL_OPPS_OUTCOME' => ' එහිදී ප්රතිඵලයකි',
    'LBL_OPPS_WORTH' => 'වටිනා අවස්ථා',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'අපේක්ෂිත වසා දිනය දක්වා ඇති දින පරාසයක් තුළ වන ඔබගේ අවස්ථා සඳහා තෝරා අලෙවි අදියර විසින් සමුච්චිත ප්රමාණයක් පෙන්නුම් කරයි.',
    'LBL_REFRESH' => 'නැවුම් කරන්න',
    'LBL_ROLLOVER_DETAILS' => 'විස්තර සඳහා බාර් අළුත් කිරීමේ.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'විස්තර සඳහා විරසකයක් නඩත්තු කෙරෙන තැනට වගබලා ගැනීමත් අළුත් කිරීමේ.',
    'LBL_SALES_STAGE_FORM_DESC' => 'අපේක්ෂිත වසා දිනය දක්වා ඇති දිනය පරාසය තුළ කොහෙද තෝරාගත් පරිශීලකයන්ට සඳහා තෝරා අලෙවි අදියර විසින් සමුච්චිත අවස්ථාව ප්රමාණයක් පෙන්නුම් කරයි.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'විකුණුම් අදියර වන විට නල',
    'LBL_SALES_STAGES' => 'විකුණුම් අදියර:',
    'LBL_TOTAL_PIPELINE' => 'නල මුළු වේ ',
    'LBL_USERS' => 'පරිශීලකයන්:',
    'LBL_YEAR_BY_OUTCOME' => 'ප්රතිඵල විසින් මාසික වන විට නල',
    'LBL_YEAR' => 'අවුරුදු:',
    'LNK_NEW_ACCOUNT' => 'ගිණුම තනන්න',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_CASE' => ' නඩු සාදන්න',
    'LNK_NEW_CONTACT' => 'ඇමතුම් සාදන්න',
    'LNK_NEW_LEAD' => ' ඊයම් සාදන්න',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'NTC_NO_LEGENDS' => 'කිසිවක් නැත',

    'LBL_TITLE' => 'සිරැසිය:',
    'LBL_MY_MODULES_USED_SIZE' => 'ප්රවේශ ගණන්',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'විකුණුම් අදියර විසින් නල',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'ප්රතිඵල විසින් ඊයම් ප්රභවය',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'මාසය අනුව ප්රතිඵලය',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'ඊයම් ප්රභවය වන විට නල',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'විකුණුම් අදියර විසින් මගේ නල',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'භාවිතා මගේ මොඩියුල (අවසන් දින 30)',
);
