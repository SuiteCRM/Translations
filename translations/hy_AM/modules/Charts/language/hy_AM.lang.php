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
    'ERR_NO_OPPS' => 'Ոչ մի գործարք գտնված չէ։',
    'LBL_ALL_OPPORTUNITIES' => 'Բոլոր գործարքների ընդհանուր գումարը ',
    'LBL_CHART_TYPE' => 'Գրաֆիկի տեսակը:',
    'LBL_CREATED_ON' => 'Վերջին մեկնարկը ',
    'LBL_CLOSE_DATE_START' => 'Սպասվող փակման ամսաթիվ -',
    'LBL_CLOSE_DATE_END' => 'Ակնկալվող փակման ամսաթիվը - մինչև․',
    'LBL_DATE_END' => 'Ավարտի ամսաթիվը․',
    'LBL_DATE_RANGE_TO' => 'դեպի',
    'LBL_DATE_RANGE' => 'Ժամանակի դիապազոնը',
    'LBL_DATE_START' => 'Մեկնարկի ամսաթիվը',
    'LBL_EDIT' => 'Խմբագրել',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Ցուցադրել գործարքի ընդհանուր կուտակային գումարը, ընտրված առաջատար աղբյուրների կողմից, ըստ արտադրանքի վերջնական արդյունքի, նշված օգտվողների համար։ Արդյունքը հիմնված է վաճառքի փուլերի արդյունքում Փակվել է հաջողությամբ, Փակվել է կորուստով, կամ որևէ այլ արժեքով։',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Բոլոր հնարավորությունները ըստ ծագման և արդյունքների',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Ցույց է տալիս գործարքների կուտակային գումարը, ըստ ընտրված առաջատար կոնտակտների և օգտվողների։',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Բոլոր հնարավորությունները ըստ նախնական աղբյուրի',
    'LBL_LEAD_SOURCE_OTHER' => 'Այլ',
    'LBL_LEAD_SOURCES' => 'Առաջատար աղբյուրներ․',
    'LBL_MODULE_NAME' => 'Դիագրամներ',
    'LBL_MODULE_TITLE' => 'Գործիքների վահանակ․ Գլխավոր',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Ցույց է տալիս գործարքների կուտակային ամսական գումարը, ըստ արդյունքների ընտրված օգտվողների համար, որպեղ ենթադրվող փակման ամսաթիվը գտնվում է ընտրված ամսաթվի ժամանակահատվածում։ Արդյունքը հիմնված է վաճառքի փուլերի արդյունքում Փակվել է հաջողությամբ, Փակվել է կորուստով, կամ որևէ այլ արժեքով։',
    'LBL_OPP_SIZE' => 'Գործարքների չափերը',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'գործարքներ, որտեղ առաջատար կլիենտի սկզբնաղբյուրը',
    'LBL_OPPS_IN_STAGE' => ' վաճառքների փուլում է',
    'LBL_OPPS_OUTCOME' => ' որտեղ արդյունքն է',
    'LBL_OPPS_WORTH' => 'հնարավորությունների արժեքը',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Ցույց է տալիս, ընտրված վաճառքի փուլերի կուտակային գումարները ձեր գործարքների համար, որտեղ ենթադրվող փակման ամսաթիվը գտնվում է որոշակի ժամանակահատվածի սահմաններում։',
    'LBL_REFRESH' => 'Թարմացնել',
    'LBL_ROLLOVER_DETAILS' => 'Տեղափոխեք Ձեր մկնիկը գրաֆիկի անհրաժեշտ մասի վրա մանրամասները դիտելու համար։',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Սեղմեք գրաֆիկի համապատասխան մասում մանրասները դիտելու համար։',
    'LBL_SALES_STAGE_FORM_DESC' => 'Ցույց է տալիս, ընտրված վաճառքի փուլերի կուտակային գումարները, նշված օգտվողների համար, որտեղ ենթադրվող փակման ամսաթիվը գտնվում է որոշակի ժամանակահատվածի սահմաններում։',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Իրացման գործընթացի փուլերը',
    'LBL_SALES_STAGES' => 'Վաճառքների փուլերը․',
    'LBL_TOTAL_PIPELINE' => 'Ընդհանուր գործընթաց է ',
    'LBL_USERS' => 'Օգտվողներ․',
    'LBL_YEAR_BY_OUTCOME' => 'Գործընթացի ամփոփումը ըստ ամիսների',
    'LBL_YEAR' => 'Տարի․',
    'LNK_NEW_ACCOUNT' => 'Ստեղծել հաշիվ',
    'LNK_NEW_CALL' => 'Պլանավորել զանգ',
    'LNK_NEW_CASE' => 'Ստեղծել գործ',
    'LNK_NEW_CONTACT' => 'Ստեղծել կոնտակտ',
    'LNK_NEW_LEAD' => 'Ստեղծել պոտենցիալ կլիենտ',
    'LNK_NEW_MEETING' => 'Պլանավորել հանդիպում',
    'LNK_NEW_NOTE' => 'Ստեղծել գրառում կամ կցված ֆայլ',
    'LNK_NEW_OPPORTUNITY' => 'Ստեղծել գործարք',
    'LNK_NEW_TASK' => 'Ստեղծել խնդիր',
    'NTC_NO_LEGENDS' => 'Ոչ ոք',

    'LBL_TITLE' => 'Վերնագիր․',
    'LBL_MY_MODULES_USED_SIZE' => 'Մուտքերի քանակը',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Իրացման գործընթացի փուլերը',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Պոտենցիալ կոնտակտների արդյունքները ըստ աղբյուրի',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Արդյունքները ըստ ամիսների',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Գործընթացը ըստ առաջատար աղբյուրների',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Իմ գործընթացը ըստ վաճառքի փուլերի',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Իմ մոդուլները օգտագործվում են (վերջին 30 օրը)',
);
