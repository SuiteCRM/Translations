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
    'ERR_DELETE_RECORD' => 'Hinganli ang numero sa rekord para ma-delete ang kontak.',
    'LBL_ACCOUNT_ID' => 'ID sa Account:',
    'LBL_ACCOUNT_NAME' => 'Pangalan sa account:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_ADDRESS_INFORMATION' => 'Impormasyon sa nahimutangan',
    'LBL_ALT_ADDRESS_CITY' => 'Laing nahimutangan nga lungsod:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Laing nahimutangan nga bansa:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Laing nahimutangan nga kode sa postal:',
    'LBL_ALT_ADDRESS_STATE' => 'Laing nahimutangan nga estado:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatibong Address nga kalsada 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatibong Address nga kalsada 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Laing nahimutangan nga kalsada:',
    'LBL_ALTERNATE_ADDRESS' => 'Laing Address:',
    'LBL_ALT_ADDRESS' => 'Laing Address:',
    'LBL_ANY_ADDRESS' => 'Bisan-unsa nga Address:',
    'LBL_ANY_EMAIL' => 'Bisan-unsa nga Email:',
    'LBL_ANY_PHONE' => 'Bisan-unsa nga Telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Gi-assign sa:',
    'LBL_ASSIGNED_TO_ID' => 'Na assign nga manggagamit',
    'LBL_ASSISTANT_PHONE' => 'Telepono sa Tig-tabang:',
    'LBL_ASSISTANT' => 'Tig-tabang:',
    'LBL_BIRTHDATE' => 'Pagkataodate:',
    'LBL_CITY' => 'Siyudad:',
    'LBL_CAMPAIGN_ID' => 'ID sa Kampanya',
    'LBL_CONTACT_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontak nga pangalan:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Konta-Opportonidad:',
    'LBL_CONTACT_ROLE' => 'Imong Role:',
    'LBL_CONTACT' => 'Kontak:',
    'LBL_COUNTRY' => 'Nasud:',
    'LBL_CREATED_ACCOUNT' => 'Buhat og bag-ong account',
    'LBL_CREATED_CALL' => 'Buhat og bag-ong tawag',
    'LBL_CREATED_CONTACT' => 'Buhat og bag-ong kontak',
    'LBL_CREATED_MEETING' => 'Buhat og bag-ong miting',
    'LBL_CREATED_OPPORTUNITY' => 'Buhat og bag-ong opportonidad',
    'LBL_DATE_MODIFIED' => 'Adlaw nga Gi-usab:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontak',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Mga direkta nga Report',
    'LBL_DO_NOT_CALL' => 'Ayaw og tawag:',
    'LBL_DUPLICATE' => 'Mga kontak na Posibleng na doble',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Gamiton ang nigawas na nga account',
    'LBL_EXISTING_CONTACT' => 'Gamiton ang nigawas na nga account',
    'LBL_EXISTING_OPPORTUNITY' => 'Gamiton ang nigawas na nga oppirtonidad',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Pinakaunang Pangalan:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Import og vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Awtomatikong maghimo ug usa ka bag-ong kontak gumikan sa pag import sa usa ka Vcard na gikan sa imo g sistemang file.',
    'LBL_INVALID_EMAIL' => 'Inbalid nga Email:',
    'LBL_INVITEE' => 'Mga direkta nga Report',
    'LBL_LAST_NAME' => 'Iwit na Pangalan:',
    'LBL_LEAD_SOURCE' => 'Unang Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Daway Kahimtang',
    'LBL_LIST_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_LIST_CONTACT_NAME' => 'Kontak nga pangalan',
    'LBL_LIST_CONTACT_ROLE' => 'Imong Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Pinakaunang Pangalan',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa mga Kontak',
    'LBL_LIST_LAST_NAME' => 'Katapusang Pangalan',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_PHONE' => 'Telepono sa Opis',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobayl:',
    'LBL_MODIFIED' => 'Giusab ni:',
    'LBL_MODULE_NAME' => 'Kontak',
    'LBL_MODULE_TITLE' => 'Mga kontak: Home',
    'LBL_NAME' => 'Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong Kontak',
    'LBL_NOTE_SUBJECT' => 'Sabdyek nga note',
    'LBL_OFFICE_PHONE' => 'Telepono sa Opisina:',
    'LBL_OPP_NAME' => 'Oportunidad nga pangalan:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID sa papel sa Opportonidad:',
    'LBL_OPPORTUNITY_ROLE' => 'Papel sa Oportunidad',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Uban pang Email:',
    'LBL_OTHER_PHONE' => 'Uban pang Telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_APP' => 'Applikasyon sa portal:',
    'LBL_PORTAL_INFORMATION' => 'Portal na Impormasyon',
    'LBL_PORTAL_NAME' => 'Portal na Pangalan:',
    'LBL_STREET' => 'Dalan',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Panguna nga Address sa Syudad:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Panguna nga Address sa Nasud:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Panguna nga Address sa Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Panguna nga Address sa Probinsya:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Panguna nga Address sa Dalan 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Panguna nga Address sa Dalan 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Panguna nga Address sa Dalan:',
    'LBL_PRIMARY_ADDRESS' => 'Panguna nga Address:',
    'LBL_PRODUCTS_TITLE' => 'Mga Produkto',
    'LBL_REPORTS_TO_ID' => 'Motaho kang ID:',
    'LBL_REPORTS_TO' => 'Report Sa:',
    'LBL_RESOURCE_NAME' => 'Pangan kahinguhaan',
    'LBL_SALUTATION' => 'Salutasyon:',
    'LBL_SAVE_CONTACT' => 'I-save ang Kontak',
    'LBL_SEARCH_FORM_TITLE' => 'Mangita sa kontak',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pilia ang na-tsek nga mga kontak',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pilia ang na-tsek nga mga kontak',
    'LBL_STATE' => 'Estado o Rehiyon:',
    'LBL_SYNC_CONTACT' => 'I-sync sa outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Gilaoman nga Listahan',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Tan-aw sa mga kontak',
    'LNK_IMPORT_VCARD' => 'Himo og kontak gikan sa vCard',
    'LNK_NEW_ACCOUNT' => 'Maghimo ug Account',
    'LNK_NEW_APPOINTMENT' => 'Mag himo og Katudloan',
    'LNK_NEW_CALL' => 'Log sa Tawag',
    'LNK_NEW_CASE' => 'Nag buhat og kaso',
    'LNK_NEW_CONTACT' => 'Paghimo og Kontak',
    'LNK_NEW_EMAIL' => 'Archive nga Email',
    'LNK_NEW_MEETING' => 'Iskedyul sa Meeting',
    'LNK_NEW_NOTE' => 'Paghimo og Note',
    'LNK_NEW_OPPORTUNITY' => 'Paghimo og Oportunidad',
    'LNK_NEW_TASK' => 'Paghimo og buhaton',
    'LNK_SELECT_ACCOUNT' => "Pagpili ug Akawnt",
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba sa pagtangtang niining rekord?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Ang paghimo og usa ka oportunidad kay nagkinahanglan og usa ka akawnt.\npalihug paghimo og bag-o nga akawnt o pili sa naa na.',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ba kang imo ning tanggalon ang kini nga kontak na gikan sa kaning kaso?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Nag-una',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Mga oportunidad',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopyaha ngadto nag-unang address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopyaha ngadto sa laing adress',

    'LBL_CASES_SUBPANEL_TITLE' => 'Mga Kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Manananap',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LBL_PROJECTS_RESOURCES' => 'Mga kahinguhaan sa mga proyekto',
    'LBL_CAMPAIGNS' => 'Mangompanya',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Mangompanya',
    'LBL_LIST_CITY' => 'Siyudad',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_HOMEPAGE_TITLE' => 'Akong mga kontak',
    'LBL_OPPORTUNITIES' => 'Mga oportunidad',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LNK_IMPORT_CONTACTS' => 'Import og mga kontak',

    // SNIP
    'LBL_USER_SYNC' => 'I-sync ang tiggamitan',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Mga Panghitabo',

    'LBL_AOP_CASE_UPDATES' => 'Kaso nga mga Bag-o',
    'LBL_CREATE_PORTAL_USER' => 'Himo og Tiggamit sa portal',
    'LBL_ENABLE_PORTAL_USER' => 'I-enable ang Tiggamit sa portal',
    'LBL_DISABLE_PORTAL_USER' => 'I-disable ang Tiggamit sa portal',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Napakyas sa paghimo ug tiggamit sa portal',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Napakyas sa pag-enable sa tiggamit sa portal',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Napakyas sa pag-disable sa tiggamit sa portal',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Nahimo nga tiggamit sa portal',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Na-enable nga Tiggamit sa portal',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Na-disable nga tiggamit sa portal',
    'LBL_NO_JOOMLA_URL' => 'Walay URL sa portal ang nabungat',
    'LBL_PORTAL_USER_TYPE' => 'Klase sa tiggamit sa portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Na-disable ang akawnt',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID sa akawnt sa Joomla',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_INVOICES' => 'Mga Resibo',
    'LBL_AOS_QUOTES' => 'Mga Quote',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Mga kontak sa Proyekto gikan sa taytol sa Proyekto',

    'LBL_LIST_INVITE_STATUS' => 'Status sa Imbitar',
);
