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
    'LBL_MODULE_NAME' => 'Ang Mga Empleyado',
    'LBL_MODULE_TITLE' => 'Mga Empleyado: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng empleyado',
    'LBL_LIST_FORM_TITLE' => 'Ang Mga Empleyado',
    'LBL_NEW_FORM_TITLE' => 'Bagong empleyado',
    'LBL_LOGIN' => 'Mag-Login',
    'LBL_RESET_PREFERENCES' => 'I-reset sa Default na mga preference',
    'LBL_TIME_FORMAT' => 'Format ng oras:',
    'LBL_DATE_FORMAT' => 'Format ng petsa:',
    'LBL_TIMEZONE' => 'Kasalukuyang oras:',
    'LBL_CURRENCY' => 'Ang pera:',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_LAST_NAME' => 'Huling pangalan',
    'LBL_LIST_EMPLOYEE_NAME' => 'Pangalan ng empleyado',
    'LBL_LIST_DEPARTMENT' => 'Kagawaran ng',
    'LBL_LIST_REPORTS_TO_NAME' => 'Ang mga Ulat para sa',
    'LBL_LIST_EMAIL' => 'Ang email',
    'LBL_LIST_USER_NAME' => 'Ang Pangalan ng Gumagamit',
    'LBL_ERROR' => 'Mali:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'Pangalan ng User:',
    'LBL_USER_TYPE' => 'Uri ng user',
    'LBL_FIRST_NAME' => 'Unang pangalan:',
    'LBL_LAST_NAME' => 'Huling pangalan:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Linggwahe:',
    'LBL_ADMIN' => 'Administrador:',
    'LBL_EMPLOYEE_INFORMATION' => 'Impormasyon ng empleyado',
    'LBL_OFFICE_PHONE' => 'Telepono ng opisina:',
    'LBL_REPORTS_TO' => 'Mga report sa Id:',
    'LBL_REPORTS_TO_NAME' => 'Mga Ulat sa',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_NOTES' => 'Tandaan:',
    'LBL_DEPARTMENT' => 'Departemento:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Anumang lugar:',
    'LBL_ANY_PHONE' => 'Anumang telepono:',
    'LBL_ANY_EMAIL' => 'Anumang email:',
    'LBL_ADDRESS' => 'Lugar:',
    'LBL_CITY' => 'Lungsod:',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_NAME' => 'Pangalan:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email ng kliyente',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b> SuiteCRM Mail Client: </b> Magpadala ng mga email gamit ang email client sa application ng SuiteCRM. <br><b> External Client Mail: </b> Magpadala ng email gamit ang email client sa labas ng application ng SuiteCRM, tulad ng Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telepono ng bahay:',
    'LBL_WORK_PHONE' => 'Telepono na pangtrabaho:',
    'LBL_EMPLOYEE_STATUS' => 'Istado ng empleyado:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',
    'LBL_SAVED_SEARCH' => 'Mga Pagpipilian sa Layout',
    'LBL_MESSENGER_ID' => 'Pangalan ng IM:',
    'LBL_MESSENGER_TYPE' => 'Uri ng IM:',
    'ERR_LAST_ADMIN_1' => 'Ang pangalan ng empleyado"',
    'ERR_LAST_ADMIN_2' => '" ang huling empleyado na mayroong access sa administrador. Hindi bababa sa isang empleyado ang kailangang isang administrador.',
    'LNK_NEW_EMPLOYEE' => 'Lumikha ng empleyado',
    'LNK_EMPLOYEE_LIST' => 'I-view ang mga empleyado',
    'ERR_DELETE_RECORD' => 'Dapat mong tukuyin ang bilang ng ulat upang burahin ang akwant.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Katayuan ng empleyado',

    'LBL_SUITE_LOGIN' => 'Ay user',
    'LBL_RECEIVE_NOTIFICATIONS' => 'I-notify sa Assignment',
    'LBL_IS_ADMIN' => 'Ay Administrator',
    'LBL_GROUP' => 'Gumagamit na grupo',
    'LBL_PHOTO' => 'Larawan',
    'LBL_DELETE_USER_CONFIRM' => 'Ang empleyadong ito ay isang user din. ang pagtatanggal sa rekord ng empleyado ay magtatanggal din sa rekord ng user, at ang user ay hindi na maaring maka-access sa application. Gusto mo ba magpatuloy sa pagtatangal sa rekord na ito?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Sigurado ka ba na gusto mong tanggalin ang empleyadong ito?',
    'LBL_ONLY_ACTIVE' => 'Aktibong mga empleyado',
    'LBL_SELECT' => 'Piliin' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id ng pagpapatotoo',
    'LBL_EXT_AUTHENTICATE' => 'Panlabas na pagpapatotoo',
    'LBL_GROUP_USER' => 'Gumagamit na grupo',
    'LBL_LIST_ACCEPT_STATUS' => 'Tanggapin ang estado',
    'LBL_MODIFIED_BY' => 'Binago ni',
    'LBL_MODIFIED_BY_ID' => 'Binago sa pamamagitan ng Id',
    'LBL_CREATED_BY_NAME' => 'Ito ay nalikha sa pamamagitan ng', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Gumagamit ng portal API',
    'LBL_PSW_MODIFIED' => 'Huling Binago ang Password',
    'LBL_SHOW_ON_EMPLOYEES' => 'Ipakita ang rekord ng empleyado',
    'LBL_USER_HASH' => 'Ang Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Password na nabuo ng Sistema',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Katayuan',
    'LBL_ADDRESS_CITY' => 'Lungsod ng Address',
    'LBL_ADDRESS_COUNTRY' => 'Bansa ng Address',
    'LBL_ADDRESS_INFORMATION' => 'Magdagdag ng impormasyon',
    'LBL_ADDRESS_POSTALCODE' => 'Kodigong Postal ng address',
    'LBL_ADDRESS_STATE' => 'Estado ng address',
    'LBL_ADDRESS_STREET' => 'Kalye ng Address',

    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_DATE_ENTERED' => 'Petsa nakapasok',
    'LBL_DELETED' => 'Ang pagkabura',

    'LBL_BUTTON_SELECT' => 'Piliin',
    'LBL_BUTTON_CLEAR' => 'Malinaw',

    'LBL_CONTACTS_SYNC' => 'Pag-synce ng kontak',
    'LBL_OAUTH_TOKENS' => 'Ang mga token ng OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Mga Gumagamit ng Proyekto mula sa Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Ang mga proyektong kontak mula sa mga pamagat ng kontak',
    'LBL_ROLES' => 'Ang Mga tungkulin',
    'LBL_SECURITYGROUPS' => 'Grupo ng mga seguridad',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospect',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Dalawang Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Patnugot',
);
