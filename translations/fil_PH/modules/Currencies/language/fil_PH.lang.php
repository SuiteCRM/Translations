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
    'LBL_MODULE_NAME' => 'Ang mga Pera',
    'LBL_LIST_FORM_TITLE' => 'Ang mga Pera',
    'LBL_CURRENCY' => 'Pera',
    'LBL_ADD' => 'Idagdag',
    'LBL_MERGE' => 'Pagsamahin',
    'LBL_MERGE_TXT' => 'Mangyaring piliin ang mga currency na gusto mong i-map sa napiling currency. Ito ah buburahin ang lahat ng mga currency na may checknark at natalagang muli sa kahit anong naguugnay sa mga ito sa napili.',
    'LBL_US_DOLLAR' => 'U.Sb Dolyar',
    'LBL_DELETE' => 'Tanggalin',
    'LBL_LIST_SYMBOL' => 'Simbolo ng pera',
    'LBL_LIST_NAME' => 'Pangalan ng pera',
    'LBL_LIST_ISO4217' => 'Code ng ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Magpasok ng tatlong letra ng ISO 4217 code na tumutukoy ng pangalan ng currency at simbolo ng currency.',
    'LBL_UPDATE' => 'I-update',
    'LBL_LIST_RATE' => 'Conversion Rate',
    'LBL_LIST_RATE_HELP' => 'Ang Conversion Rate ng 0.5 para sa Euro ay nangangahulugan ng 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LNK_NEW_CONTACT' => 'Bagong kontak',
    'LNK_NEW_ACCOUNT' => 'Bagong akwant',
    'LNK_NEW_OPPORTUNITY' => 'Bagong oportunidad',
    'LNK_NEW_CASE' => 'Bagong kaso',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan o paglalakip',
    'LNK_NEW_CALL' => 'Bagong tawag',
    'LNK_NEW_EMAIL' => 'Bagong email',
    'LNK_NEW_MEETING' => 'Bagong pagpupulong',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka bang na gusto mong burahin ang rekord na ito? Kahit anong rekord ang gamit ng currency ay naka-convert sa isag default na sistemang currency kapag sila ay naka-access. Mas maganda kung magtalaga ng estado sa hindi aktibo.',
    'LBL_BELOW_MIN' => 'Conversion rate ay dapat nasa itaas ng 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktibo',
            'Inactive' => 'Hindi aktibo',
        ),
    'LBL_CREATED_BY' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_EDIT_LAYOUT' => 'Baguhin ang layout' /*for 508 compliance fix*/,
);
