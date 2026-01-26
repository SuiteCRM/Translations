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
    'LBL_MODULE_NAME' => 'Ang mga empleyado',
    'LBL_MODULE_TITLE' => 'Mga empleado: Tahanan',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng Empleado',
    'LBL_LIST_FORM_TITLE' => 'Ang mga empleyado',
    'LBL_NEW_FORM_TITLE' => 'Bagong Empleado',
    'LBL_LOGIN' => 'Mag log in',
    'LBL_RESET_PREFERENCES' => 'I-reset upang ma-default ang mga Batayan',
    'LBL_TIME_FORMAT' => 'Ayos ng oras:',
    'LBL_DATE_FORMAT' => 'Ayos ng petsa:',
    'LBL_TIMEZONE' => 'Kasalukuyang Oras:',
    'LBL_CURRENCY' => 'Ang Halaga:',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_EMPLOYEE_NAME' => 'Pangalan ng Empleado',
    'LBL_LIST_DEPARTMENT' => 'Departamento',
    'LBL_LIST_REPORTS_TO_NAME' => 'Ang mga ulat',
    'LBL_LIST_EMAIL' => 'Ang Email',
    'LBL_LIST_USER_NAME' => 'Gamit na Pangalan',
    'LBL_ERROR' => 'Error:',
    'LBL_PASSWORD' => 'Ang Password:',
    'LBL_USER_NAME' => 'Pangalan ng Gumagamit:',
    'LBL_USER_TYPE' => 'Uri ng Gumagamit',
    'LBL_FIRST_NAME' => 'Ang unang pangalan:',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_THEME' => 'Ang tema:',
    'LBL_LANGUAGE' => 'Salita:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Impormasyon ng Empleyado',
    'LBL_OFFICE_PHONE' => 'Ang Telepono ng opisina:',
    'LBL_REPORTS_TO' => 'Mga ulat sa Id:',
    'LBL_REPORTS_TO_NAME' => 'Pagbabalita sa',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_NOTES' => 'Mga tala:',
    'LBL_DEPARTMENT' => 'Kagawaran:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Ang Anumang address:',
    'LBL_ANY_PHONE' => 'Ang Anumang telepono:',
    'LBL_ANY_EMAIL' => 'Ang Anumang email:',
    'LBL_ADDRESS' => 'Address:',
    'LBL_CITY' => 'Ang Syudad:',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_POSTAL_CODE' => 'Postal kowd:',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_MOBILE_PHONE' => 'Telepono:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Ang Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Kliyente ng Email',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Ang SuiteCRM Mail na Kliyente:</b> Nagpapadala ng mga email gamit ang kliyente ng email sa loob ng SuiteCRM na aplikasyon.<br><b>External na Kliyente ng Mail:</b> Magpadala ng email gamit ang isang kliyente ng email palabas ng SuiteCRM na aplikasyon, kagaya ng Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telepono ng bahay:',
    'LBL_WORK_PHONE' => 'Teleponong pang Trabaho:',
    'LBL_EMPLOYEE_STATUS' => 'Estado ng Empleado:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_SAVED_SEARCH' => 'Mga pagpipiliang mga ayos',
    'LBL_MESSENGER_ID' => 'Pangalan sa IM:',
    'LBL_MESSENGER_TYPE' => 'Uri sa IM:',
    'ERR_LAST_ADMIN_1' => 'Ang pangalan ng empleado "',
    'ERR_LAST_ADMIN_2' => '" ay ang huling empleado na may access sa administrator. Kahit isang empleado ay kailangang maging administrator.',
    'LNK_NEW_EMPLOYEE' => 'Gumawa ng Empleado',
    'LNK_EMPLOYEE_LIST' => 'Tingnan ang mga empleado',
    'ERR_DELETE_RECORD' => 'Kailangang tumukoy ng isang record number para mabura ang account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Estado ng Empleyado',

    'LBL_SUITE_LOGIN' => 'Ay Gumagamit',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Magnotipika sa Pagtatalaga',
    'LBL_IS_ADMIN' => 'Isang Tagapangasiwa',
    'LBL_GROUP' => 'Grupong Tagagamit',
    'LBL_PHOTO' => 'Litrato',
    'LBL_DELETE_USER_CONFIRM' => 'Ang empleadong ito ay Gumagamit din. Ang burahin ang talaan ng empleado ay mabubura rin at talaan ng gumagamit, at ang Gumagamit ay hindi na magagamit ang application na ito. Gusto bang magpatuloy sa pagbura ng talaang ito?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Sigurado ka na ibig mong burahin ang empleadong ito?',
    'LBL_ONLY_ACTIVE' => 'Aktibong mga Empleado',
    'LBL_SELECT' => 'Piliin' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id ng Awtentikasyon',
    'LBL_EXT_AUTHENTICATE' => 'External na Awtentikasyon',
    'LBL_GROUP_USER' => 'Grupong Tagagamit',
    'LBL_LIST_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_MODIFIED_BY' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_BY_ID' => 'Binago sa pamamagitan ng Id',
    'LBL_CREATED_BY_NAME' => 'Nilikha ni', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Tagagamit ng Portal na API',
    'LBL_PSW_MODIFIED' => 'Huling Pagbabago ng Password',
    'LBL_SHOW_ON_EMPLOYEES' => 'Ipakita ang talaan ng Empleado',
    'LBL_USER_HASH' => 'Ang Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Password na Ginawa ng Sistema',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_ADDRESS_CITY' => 'Address ng Lungsod',
    'LBL_ADDRESS_COUNTRY' => 'Address ng Bansa',
    'LBL_ADDRESS_INFORMATION' => 'Ang Impormasyon ng address',
    'LBL_ADDRESS_POSTALCODE' => 'Address ng Postal Code',
    'LBL_ADDRESS_STATE' => 'Address ng Estado',
    'LBL_ADDRESS_STREET' => 'Address ng Kalye',

    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_DATE_ENTERED' => 'Petsa ng Pagpasok',
    'LBL_DELETED' => 'Ang Nabura',

    'LBL_BUTTON_SELECT' => 'Piliin',
    'LBL_BUTTON_CLEAR' => 'Linisin',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'Ang mga Token ng OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Gumagamit na Proyekto galing sa Titulong Proyekto',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Mga contact na Proyekto galing sa mga Contact na Titulo',
    'LBL_ROLES' => 'Ang mga gagampanan',
    'LBL_SECURITYGROUPS' => 'Mga grupong seguridad',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospekto',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Interpeys sa Dalawahang Factor ng Awtentikasyon:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
