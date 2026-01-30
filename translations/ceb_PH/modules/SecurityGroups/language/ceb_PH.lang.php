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
    'LBL_ALL_MODULES' => 'Tanan',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NONINHERITABLE' => 'Dili Maeredar',
    'LBL_LIST_NONINHERITABLE' => 'Dili Maeredar',
    'LBL_NAME' => 'Pangalan',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_LIST_FORM_TITLE' => 'Mga Grupo para sa seguridad',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'Paghimo og Seguridad na Grupo',
    'LNK_LIST' => 'Listahan nga matan-aw',
    'LBL_SEARCH_FORM_TITLE' => 'Pagpangita sa Seguridad na mga Grupo na Pagdumala',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Pagdumala sa Seguridad na mga Grupo',
    'LBL_USERS' => 'Tig gamit',
    'LBL_USERS_SUBPANEL_TITLE' => 'Tig gamit',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Mga role',
    'LBL_ROLES' => 'Mga role',

    'LBL_CONFIGURE_SETTINGS' => 'Pag-anhay',
    'LBL_ADDITIVE' => 'Akompaniyaminto na mga Katungod',
    'LBL_ADDITIVE_DESC' => "Ang tiggamit kay makakuha og kinadak-an na katungod sa tanan na mga papel na nagahin sa tiggamit o ang grupo(s) sa tiggamit",
    'LBL_STRICT_RIGHTS' => 'Strikto na mga Katungod',
    'LBL_STRICT_RIGHTS_DESC' => "Kung ang tiggamit kay miyembro og pipila na mga grupo ang tinagsa lamang na mga katungod gikan sa grupo nga nagahin sa karon na rekord maoy gamiton.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Pag-una sa Bahin sa Tiggamit',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Kung bisan unsa na bahin ang nagahin direkta adto sa usa ka tiggamit ang kana na bahin dapat naay pag-una tabok sa uban nga bahin sa mga grupo.',
    'LBL_INHERIT_TITLE' => 'Mga Mandu sa Erihinsya sa Grupo',
    'LBL_INHERIT_CREATOR' => 'Eredar gikan sa Gibuhat Sa Tiggamit',
    'LBL_INHERIT_CREATOR_DESC' => 'Ang rekord kay mag eredar sa tanan nga nagahin na mga grupo ngadto sa tiggamit nga naabot niini.',
    'LBL_INHERIT_PARENT' => 'Eredar gikan sa Ginikanan na Rekord',
    'LBL_INHERIT_PARENT_DESC' => 'e.g kung ang kaso nahimo para sa kontak ang kaso kay ma eredar ang mga grupo kaubanan sa kontak.',
    'LBL_USER_POPUP' => 'Popup sa Bag-o nga Grupo sa Tiggamit',
    'LBL_USER_POPUP_DESC' => 'Kung maghimo og bag-o nga tiggamit ipakita ang mga Grupo sa Seguridad nga popup para magahin ang tiggamit ngadtu sa usa ka grupo(s).',
    'LBL_INHERIT_ASSIGNED' => 'Eredar gikan sa Nagahin adto sa Tiggamit',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Ang rekord kay mag eredar sa tanan nga mga grupo sa tiggamit nga nagahin sa rekord. Ang uban na mga grupo na nagahin sa rekord kay DILI matang-tang.',
    'LBL_POPUP_SELECT' => 'Gamita ang Selekta sa Grupo na Nagbuhat',
    'LBL_POPUP_SELECT_DESC' => 'Kung ang usa ka rekord kay gibuhat sa tiggamit sa sobra sa usa ka grupo ipakita ang selekta sa grupo nga panid ngadto sa pagbuhag nga iskrin. Kondili i-eredar ang katong usa ka grupo.',
    'LBL_FILTER_USER_LIST' => 'I-filter ang Lista sa Tiggamit',
    'LBL_FILTER_USER_LIST_DESC' => "Ang dili admin na mga tiggamit kay makabahin lang sa mga tiggamit nga anaa sa parehas na mga grupo(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'I-default ang mga Grupo para sa Bag-o nga mga Rekord',
    'LBL_ADD_BUTTON_LABEL' => 'Dungagi',
    'LBL_REMOVE_BUTTON_LABEL' => 'Tangtangon',
    'LBL_GROUP' => 'Grupo:',
    'LBL_MODULE' => 'Modyul:',

    'LBL_MASS_ASSIGN' => 'Sehuridad na mga Grupo: Masa na Nagahin',
    'LBL_ASSIGN' => 'Igahin',
    'LBL_REMOVE' => 'Tangtangon',
    'LBL_ASSIGN_CONFIRM' => 'Sigurado ka na ganahan ka ipuno kini nga grupo ngadto sa ',
    'LBL_REMOVE_CONFIRM' => 'Sigurado ba ka nga ganahan ka tangtangun ang kini na grupo gikan sa ',
    'LBL_CONFIRM_END' => ' mga napili nga rekord?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Seguridad na Grupo/Tiggamit',
    'LBL_USER_NAME' => 'Gigamit nga pangalan',
    'LBL_SECURITYGROUP_NAME' => 'Pangalan sa Seguridad na Grupo',
    'LBL_HOMEPAGE_TITLE' => 'Grupo na mga Mensahe',
    'LBL_TITLE' => 'Titulo',
    'LBL_ROWS' => 'Mga Hilera',
    'LBL_POST' => 'Poste',
    'LBL_SELECT_GROUP_ERROR' => 'Palihug pagpili og grupo og suwayi og balik.',

    'LBL_GROUP_SELECT' => 'Pilia kung asa na mga grupo ang maka akses sa kini nga rekord',
    'LBL_ERROR_DUPLICATE' => 'Hitungod sa posible nga pagduplikit na nabantayan sa SuiteCRM mano-mano nimo na ipuno ang Seguridad na mga Grupo ngadto sa imong bag-o nabuhat na rekord.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Inbound nga email account',
    'LBL_INBOUND_EMAIL_DESC' => 'I-tugot lamang ang akses sa email account kung ajg tiggamit apil sa grupo nga nagajin sa mail account.',
    'LBL_PRIMARY_GROUP' => 'Primarya na Grupo',
    'LBL_CHECKMARK' => 'Marka nga Tseke',

);
