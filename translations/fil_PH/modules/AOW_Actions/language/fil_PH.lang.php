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
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_ID' => 'Binago sa pamamagitan ng Id',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_CREATED_ID' => 'Nilikha sa pamamagitan ng Id',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_MODULE_NAME' => 'Ang mga aksyon sa daloy ng trabaho',
    'LBL_MODULE_TITLE' => 'Ang mga aksyon sa daloy ng trabaho',
    'LBL_AOW_WORKFLOW_ID' => 'ID ng AOW_WorkFlow',
    'LBL_ACTION' => 'Aksyon',
    'LBL_PARAMETERS' => 'Mga parameter',
    'LBL_SELECT_ACTION' => 'Pumili ng aksyon',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Lumikha',
    'LBL_RECORD_TYPE' => 'Uri ng rekord',
    'LBL_SENDEMAIL' => 'Ipadala ang email',
    'LBL_CREATERECORD' => 'Lumikha ng rekord',
    'LBL_MODIFYRECORD' => 'I-modify ang rekord',
    'LBL_ADD_FIELD' => 'Magdagdag ng patlang',
    'LBL_ADD_RELATIONSHIP' => 'Magdagdag ng relasyon',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'I-edit',
    'LBL_EMAIL' => 'Ang email',
    'LBL_EMAIL_TEMPLATE' => 'Ang template ng email',
    'LBL_SETAPPROVAL' => 'I-set ang Pagsang-ayon',
    'LBL_RELATE_WORKFLOW' => 'I-relate sa modyul ng WorkFlow',
    'LBL_INDIVIDUAL_EMAILS' => 'I-send ang indibidwal na mga email',
    'LBL_COMPUTEFIELD' => 'Kalkulahin ang mga field',
    'LBL_COMPUTEFIELD_PARAMETERS' => 'Mga parameter',
    'LBL_COMPUTEFIELD_FIELD_NAME' => 'Pangalan ng field',
    'LBL_COMPUTEFIELD_IDENTIFIER' => 'Pagkakakilanlan',
    'LBL_COMPUTEFIELD_ADD_PARAMETER' => 'Magdagdag ng parameter',
    'LBL_COMPUTEFIELD_RELATION_PARAMETERS' => 'Mga parameter ng relasyon',
    'LBL_COMPUTEFIELD_RELATION' => 'Relasyon',
    'LBL_COMPUTEFIELD_ADD_RELATION_PARAMETER' => 'Magdagdag ng parameter ng relasyon',
    'LBL_COMPUTEFIELD_FORMULA' => 'Pormula',
    'LBL_COMPUTEFIELD_FORMULAS' => 'Mga Pormula',
    'LBL_COMPUTEFIELD_ADD_FORMULA' => 'Magdagdag ng pormula',
    'LBL_COMPUTEFIELD_VALUE_TYPE' => 'Uri ng halaga',
    'LBL_COMPUTEFIELD_RAW_VALUE' => 'Raw na Halaga',
    'LBL_COMPUTEFIELD_FORMATTED_VALUE' => 'Nakaformat na halaga',
    'LBL_COPY_EMAIL_ADDRESSES_WORKFLOW' => 'Copy emails from WorkFlow Module'
);
