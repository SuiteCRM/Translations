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
    'LBL_ALL_MODULES' => 'Lahat',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Ang nagagamit sa Id ay nagtalaga',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NONINHERITABLE' => 'Hindi Mamana',
    'LBL_LIST_NONINHERITABLE' => 'Hindi Mamana',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_LIST_FORM_TITLE' => 'Mga grupong seguridad',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'Ang seguridad na grupo ay lumikha',
    'LNK_LIST' => 'Ipakita ang listahan',
    'LBL_SEARCH_FORM_TITLE' => 'Ang pamamahala ng seguridad ng mga grupo ay hinahanap',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Ang pamamahala ng seguridad ng mga grupo',
    'LBL_USERS' => 'Ang mga gumagamit',
    'LBL_USERS_SUBPANEL_TITLE' => 'Ang mga gumagamit',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Ang mga gagampanan',
    'LBL_ROLES' => 'Ang mga gagampanan',

    'LBL_CONFIGURE_SETTINGS' => 'I-configure',
    'LBL_ADDITIVE' => 'Ang mga karapatan na magkakasama',
    'LBL_ADDITIVE_DESC' => "Ang gumagamit ay makakuha ng mga karapatang pinakamabigat sa lahat ng mga tungkulin na natalaga sa gumagamit o sa grupo o mga grupo ng gumagamit",
    'LBL_STRICT_RIGHTS' => 'Ang Striktong mga karapatan',
    'LBL_STRICT_RIGHTS_DESC' => "Kapag ang gumagamit ay myembro ng iilang mga grupo ang mga kaukulang karapatan lamang mula sa natalagang grupo sa umiiral na rekord ay magagamit.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Ang pangunguna ng gumagamit sa papel',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Kapang anumang papel ay natakda diretso sa gumagamit ang papel na iyan ay mauuna higit sa lahat ng anumang mga papel sa grupo.',
    'LBL_INHERIT_TITLE' => 'Ang pamana na panuntunan sa grupo',
    'LBL_INHERIT_CREATOR' => 'Mamanahin mula sa nilikha sa pamamagitan ng gumamit',
    'LBL_INHERIT_CREATOR_DESC' => 'Ang rekord ay magmamana sa lahat ng mga grupong nakatakda sa gumagamit na gumagawa nito.',
    'LBL_INHERIT_PARENT' => 'Namana mula sa tala ng magulang',
    'LBL_INHERIT_PARENT_DESC' => 'e.g. Kung ang kaso ay nalikha para sa kaugnayan ang kaso ay magmamana ng mga pangkat na nauugnay kasama ng mga kaugnayan.',
    'LBL_USER_POPUP' => 'Popup ng bagong pangkat ng mga gumagamit',
    'LBL_USER_POPUP_DESC' => 'Sa paglilikha ng bagong gumagamit ipakita ang popup ng mga pangkat ng seguridad para magtalaga ng gumagamit sa isang pangkat(mga pangkat).',
    'LBL_INHERIT_ASSIGNED' => 'Magmana ng itinalaga sa gumagamit',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Ang talaan ay magmamana ng lahat ng grupo ng mga gumagamit na nakatalaga sa talaan. Ang ibang mga grupo na nakatalaga sa talaan ay HINDI maaalis.',
    'LBL_POPUP_SELECT' => 'Gumamit ng pagpili ng grupo ng tagapaglikha',
    'LBL_POPUP_SELECT_DESC' => 'Kapag ang tala ay nalikha ng gumagamit ng higit pa sa isang grupo magpakita ng panel ng pagpili ng grupo sa screen ng paglikha. Kung hindi man magmamana ang ibang grupo.',
    'LBL_FILTER_USER_LIST' => 'Listahan ng gumagamit ng filter',
    'LBL_FILTER_USER_LIST_DESC' => "Ang hindi admin na mga gumagamit ay maaari lamang magtalaga ng mga gumagamit sa parehong grupo(mga grupo)",

    'LBL_DEFAULT_GROUP_TITLE' => 'I-default ang mga grupo para sa mga bagong tala',
    'LBL_ADD_BUTTON_LABEL' => 'Magdagdag',
    'LBL_REMOVE_BUTTON_LABEL' => 'Alisin',
    'LBL_GROUP' => 'Ang Grupo:',
    'LBL_MODULE' => 'Ang Modyul:',

    'LBL_MASS_ASSIGN' => 'Ang Mga grupo sa seguridad: Nakatalagang Mass',
    'LBL_ASSIGN' => 'Italaga',
    'LBL_REMOVE' => 'Alisin',
    'LBL_ASSIGN_CONFIRM' => 'Sigurado ka ba na gusto mong idagdag ang grupong ito sa ',
    'LBL_REMOVE_CONFIRM' => 'Sigurado ka ba na gusto mong alisin ang grupong ito mula sa ',
    'LBL_CONFIRM_END' => ' napagpiliang (mga) rekord?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Ang GrupongSeguridad/Gumagamit',
    'LBL_USER_NAME' => 'Gamit na Pangalan',
    'LBL_SECURITYGROUP_NAME' => 'Ang Pangalan ng GrupongSeguridad',
    'LBL_HOMEPAGE_TITLE' => 'Ang mga mensahe ng grupo',
    'LBL_TITLE' => 'Ang Pamagat',
    'LBL_ROWS' => 'Mga hanay',
    'LBL_POST' => 'I-paskil',
    'LBL_SELECT_GROUP_ERROR' => 'Pakiusap pumili ng grupo at subukan muli.',

    'LBL_GROUP_SELECT' => 'Pumili kung anong mga grupo ang magkaroon ng daanan sa talaan na ito',
    'LBL_ERROR_DUPLICATE' => 'Dahil sa napansin ng SuiteCRM ang posibleng kapareha ay dapat mong idagdag ng manu-mano ang mga Grupo ng Seguridad sa iyong bagong nagawang talaan.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Ang email akawnt ay dumating',
    'LBL_INBOUND_EMAIL_DESC' => 'Payagan lamang ang daanan sa akawnt ng email kapag ang gumagamit ay napabilang sa grupo na nakatakda sa akawnt ng email.',
    'LBL_PRIMARY_GROUP' => 'Pangunahing Pangkat',
    'LBL_CHECKMARK' => 'Tsekmark',

);
