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
    'LBL_MODULE_NAME' => 'Targetanan',
    'LBL_MODULE_ID' => 'Targetanan',
    'LBL_INVITEE' => 'Mga direkta nga Report',
    'LBL_MODULE_TITLE' => 'Katuyoan: Pagpuyo',
    'LBL_SEARCH_FORM_TITLE' => 'Katuyoan: Pagpangita',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa Target',
    'LBL_NEW_FORM_TITLE' => 'Bag\'ong Katuyoan',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_LAST_NAME' => 'Katapusang Pangalan',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_FIRST_NAME' => 'Pinakaunang Pangalan',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ASSIGNED_TO_ID' => 'Gi-assign sa:',
    'LBL_CAMPAIGN_ID' => 'ID sa Kampanya',
    'LBL_EXISTING_ACCOUNT' => 'Gamiton ang nigawas na nga account',
    'LBL_CREATED_ACCOUNT' => 'Buhat og bag-ong account',
    'LBL_CREATED_CALL' => 'Buhat og bag-ong tawag',
    'LBL_CREATED_MEETING' => 'Buhat og bag-ong miting',
    'LBL_NAME' => 'Pangalan:',
    'LBL_PROSPECT_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Dugang pang impormasyon',
    'LBL_FIRST_NAME' => 'Pinakaunang Pangalan:',
    'LBL_OFFICE_PHONE' => 'Telepono sa Opisina:',
    'LBL_ANY_PHONE' => 'Bisan-unsa nga Telepono:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_LAST_NAME' => 'Iwit na Pangalan:',
    'LBL_MOBILE_PHONE' => 'Mobayl:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Uban pang Telepono:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Panguna nga Address sa Dalan:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Panguna nga Address sa Syudad:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Panguna nga Address sa Nasud:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Panguna nga Address sa Probinsya:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Panguna nga Address sa Postal Code:',
    'LBL_ALT_ADDRESS_STREET' => 'Laing nahimutangan nga kalsada:',
    'LBL_ALT_ADDRESS_CITY' => 'Laing nahimutangan nga lungsod:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Laing nahimutangan nga bansa:',
    'LBL_ALT_ADDRESS_STATE' => 'Laing nahimutangan nga estado:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Laing nahimutangan nga kode sa postal:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_BIRTHDATE' => 'Pagkataodate:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Uban pang Email:',
    'LBL_ANY_EMAIL' => 'Bisan-unsa nga Email:',
    'LBL_ASSISTANT' => 'Tig-tabang:',
    'LBL_ASSISTANT_PHONE' => 'Telepono sa Tig-tabang:',
    'LBL_DO_NOT_CALL' => 'Ayaw og tawag:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Panguna nga Address:',
    'LBL_ALTERNATE_ADDRESS' => 'Laing Address:',
    'LBL_ANY_ADDRESS' => 'Bisan-unsa nga Address:',
    'LBL_CITY' => 'Siyudad:',
    'LBL_STATE' => 'Estado o Rehiyon:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Nasud:',
    'LBL_ADDRESS_INFORMATION' => 'Impormasyon sa nahimutangan',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_OPP_NAME' => 'Oportunidad nga pangalan:',
    'LBL_IMPORT_VCARD' => 'Import og vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Awtomatikong maghimo ug usa ka bag-ong kontak gumikan sa pag import sa usa ka Vcard na gikan sa imo g sistemang file.',
    'LBL_DUPLICATE' => 'Posibleng mga katuyoang kapareha',
    'MSG_SHOW_DUPLICATES' => 'Ang katuyoang rekord na imong buhatonon kay pwedeng kapareha lang sya sa usa ka katuyoang rekord nga ana-a na. Mga rekord sa katuyoan nga ana-ay kaparehong ngalan ug/o email addresses kay nakalista sa ubos.<br>Pinduti ang Create Target para mapadayun ang paghimo ug bag-ong katuyoan, o pagpili sa naa-nang katuyoan nga nakalista sa ubos.',
    'MSG_DUPLICATE' => 'Ang katuyoang rekord na imong pang buhaton kay pwedeng naay kapareha sa usa ka katuyoang rekord nga ana-a na. Mga katuyoang rekord nga ana-ay kaparehang mga pangalan ug/o mga email addresses kay nakalista sa ubos.<br>Pindota ang Save para magpadayun sa paghimo ug bag-ong katuyoan, o pinduta ang Cancel para mabalik sa module diin walay hinimong katuyoan.',
    'LNK_IMPORT_VCARD' => 'Pagbuhat gikan sa vCard',
    'LNK_NEW_ACCOUNT' => 'Maghimo ug Account',
    'LNK_NEW_OPPORTUNITY' => 'Paghimo og Oportunidad',
    'LNK_NEW_CASE' => 'Nag buhat og kaso',
    'LNK_NEW_NOTE' => 'Paghimo og Note o Sumpay',
    'LNK_NEW_CALL' => 'Log sa Tawag',
    'LNK_NEW_EMAIL' => 'Archive nga Email',
    'LNK_NEW_MEETING' => 'Iskedyul sa Meeting',
    'LNK_NEW_TASK' => 'Paghimo og buhaton',
    'LNK_NEW_APPOINTMENT' => 'Mag himo og Katudloan',
    'LNK_IMPORT_PROSPECTS' => 'Pagpagawas ug mga katuyoan',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba sa pagtangtang niining rekord?',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ba kang imo ning tanggalon ang kini nga kontak na gikan sa kaning kaso?',
    'ERR_DELETE_RECORD' => 'Ang numero sa rekord kay kinahanglan i-specify para matangtang ang kontak.',
    'LBL_SALUTATION' => 'Salutasyon',
    'LBL_CREATED_OPPORTUNITY' => 'Buhat og bag-ong opportonidad',
    'LNK_SELECT_ACCOUNT' => "Pagpili ug Akawnt",
    'LNK_NEW_PROSPECT' => 'Maghimo ug Target',
    'LNK_PROSPECT_LIST' => 'Tan-awon ang mga Target',
    'LNK_NEW_CAMPAIGN' => 'Maghimo ug Kampanya',
    'LNK_CAMPAIGN_LIST' => 'Mangompanya',
    'LNK_NEW_PROSPECT_LIST' => 'Maghimo ug Listahan sa Target',
    'LNK_PROSPECT_LIST_LIST' => 'Mga Listahan sa Target',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Paglili ug nasusi nang mga katuyoan',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Paglili ug nasusi nang mga katuyoan',
    'LBL_INVALID_EMAIL' => 'Inbalid nga Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Targetanan',
    'LBL_PROSPECT_LIST' => 'Gilaoman nga Listahan',
    'LBL_CONVERT_BUTTON_TITLE' => 'Pag-usab ug katuyoan',
    'LBL_CONVERT_BUTTON_LABEL' => 'Pag-usab ug katuyoan',
    'LNK_NEW_CONTACT' => 'Bag-ong Kontak',
    'LBL_CREATED_CONTACT' => "Buhat og bag-ong kontak",
    'LBL_CAMPAIGNS' => 'Mangompanya',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Mangumpanya sa Log',
    'LBL_TRACKER_KEY' => 'Yawi sa traker',
    'LBL_LEAD_ID' => 'Id nga nagpasi-una',
    'LBL_CONVERTED_LEAD' => 'Gi-usab nga pagpasi-una',
    'LBL_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_EDIT_ACCOUNT_NAME' => 'Pangalan sa account:',
    'LBL_CREATED_USER' => 'Nahimo nga User',
    'LBL_MODIFIED_USER' => 'Na-usab nga User',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Mga Panghitabo',
);
