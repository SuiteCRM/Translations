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
    'ERR_NO_OPPS' => 'אנא צור מספר הזדמנויות כדי לראות את גרף ההזדמנויות',
    'LBL_ALL_OPPORTUNITIES' => 'סה"כ סכום של כל ההזדמנויות הוא',
    'LBL_CHART_TYPE' => 'סוג תרשים:',
    'LBL_CREATED_ON' => 'לאחרונה הורץ ב',
    'LBL_CLOSE_DATE_START' => 'Expected Close Date - From:',
    'LBL_CLOSE_DATE_END' => 'Expected Close Date - To:',
    'LBL_DATE_END' => 'תאריך סיום',
    'LBL_DATE_RANGE_TO' => 'ל',
    'LBL_DATE_RANGE' => 'טווח זמן הוא',
    'LBL_DATE_START' => 'זמן התחלה:',
    'LBL_EDIT' => 'עריכה',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'הצג סכום מצטבר של הזדמנויות ע"י בחירת מקור לידים ותוצאה למשתמשים ספציפים. התוצאה מבוססת עפ"י שלבי המכירה או כל ערך אחר מוגדר',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'כל ההזדמנויות עפ"י מקור לידים ותוצאה',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'הצג סכום מצטבר של הזדמנויות ע"י בחירת מקור לידים ותוצאה למשתמשים ספציפים.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'כל ההזדמנויות עפ"י מקור לידים',
    'LBL_LEAD_SOURCE_OTHER' => 'אחר',
    'LBL_LEAD_SOURCES' => 'מקור לידים:',
    'LBL_MODULE_NAME' => 'מחווים',
    'LBL_MODULE_TITLE' => 'מחווים: בית',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'הצג סכום הזדמנויות מצטבר עפ"י חודש למשתמשים ספציפים כאשר זמן הסגירה הצפוי של העסקה הוא בטווח זמן מוגדר. התוצאה מבוססת על שלבי המכירה או כל ערך אחר. ',
    'LBL_OPP_SIZE' => 'גודל הזדמנות ב',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'הזדמנויות כאשר מקור הלידים הוא',
    'LBL_OPPS_IN_STAGE' => 'כאשר שלבי המכירה הם',
    'LBL_OPPS_OUTCOME' => 'כאשר התוצאה היא',
    'LBL_OPPS_WORTH' => 'שווי הזדמנויות',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'הצג הצטברות סכום ע"י בחירת שלבי המכירה להזדמנויות שלך ובנוסף שתאריך הסגירה המשוער של העסקאות הם בטווח הזמן הרצוי.',
    'LBL_REFRESH' => 'רענון',
    'LBL_ROLLOVER_DETAILS' => 'הפוך את הבר לקבלת פרטים',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'הפוך את ה-wedge  לקבלת פרטים',
    'LBL_SALES_STAGE_FORM_DESC' => 'הצג הצטברות סכום ע"י בחירת שלבי המכירה להזדמנויות שלך ומשתמשים ספציפים ובנוסף שתאריך הסגירה המשוער של העסקאות הם בטווח הזמן הרצוי.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'טבלת צינורות לפי שלב במכירה',
    'LBL_SALES_STAGES' => 'שלבי מכירות:',
    'LBL_TOTAL_PIPELINE' => 'גרף טוטאל הוא',
    'LBL_USERS' => 'משתמשים:',
    'LBL_YEAR_BY_OUTCOME' => 'גרף לפי חודש או תוצאה',
    'LBL_YEAR' => 'שנה:',
    'LNK_NEW_ACCOUNT' => 'ליצור חשבון לקוח',
    'LNK_NEW_CALL' => 'לקבוע שיחה',
    'LNK_NEW_CASE' => 'ליצור מקרה',
    'LNK_NEW_CONTACT' => 'ליצור איש קשר',
    'LNK_NEW_LEAD' => 'צור ליד',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_NOTE' => 'ליצור הערה',
    'LNK_NEW_OPPORTUNITY' => 'ליצור עסקה',
    'LNK_NEW_TASK' => 'ליצור משימה',
    'NTC_NO_LEGENDS' => 'ללא',

    'LBL_TITLE' => 'כותרת: ',
    'LBL_MY_MODULES_USED_SIZE' => 'ספירת כניסות',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'סטטיסטיקה שלי',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source By Outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'תוצאות לפי חודש',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline By Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'טבלת הצינורות שלי לפי שלב במכירות',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'My Modules Used (Last 30 Days)',
);
