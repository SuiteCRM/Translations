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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NONINHERITABLE' => 'Hindi Inheritable',
    'LBL_LIST_NONINHERITABLE' => 'Hindi Inheritable',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_LIST_FORM_TITLE' => 'Grupo ng mga seguridad',
    'LBL_MODULE_NAME' => 'Ang Pamamahala ng Seguridad ng Suite',
    'LBL_MODULE_TITLE' => 'Ang Pamamahala ng Seguridad ng Suite',
    'LNK_NEW_RECORD' => 'Lumikha ng grupong seguridad',
    'LNK_LIST' => 'Tumanaw ng listahan',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng Seguridad ng mga Tagapaglingkod ng Pamamahala',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Ang Pamamahala ng Seguridad ng Suite',
    'LBL_USERS' => 'Ang mga gumagamit',
    'LBL_USERS_SUBPANEL_TITLE' => 'Ang mga gumagamit',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Ang Mga tungkulin',
    'LBL_ROLES' => 'Ang Mga tungkulin',

    'LBL_CONFIGURE_SETTINGS' => 'I-configure',
    'LBL_ADDITIVE' => 'Mga karapatang additive',
    'LBL_ADDITIVE_DESC' => "Ang gumagamit ay makakuha ng mga pinakadakilang karapatan sa lahat ng mga tungkulin na nakatalaga sa gumagamit o sa mga grupong gumagamit",
    'LBL_STRICT_RIGHTS' => 'Mga mahigpit na karapatan',
    'LBL_STRICT_RIGHTS_DESC' => "Kung ang user ay isang miyembro ng maraming grupo lamang, ang paggalang ng mga karapatan mula sa grupo nakatalaga sa kasulukuyang ulat na ginamit.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Ang tungkulin ng gumagamit bilang karapatan sa pangunguna',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Kung kahit anong tungkuli ay naitalaga ng ditektang sa isang gumagamit na tungkulin ay dapat nangunguna sa karalatan higot sa kahit anong grupong tungkulin.',
    'LBL_INHERIT_TITLE' => 'Grupong mga panuntunan sa panungkukan',
    'LBL_INHERIT_CREATOR' => 'Nagmana mula sa naglikha sa pamamagitan ng gumagamit',
    'LBL_INHERIT_CREATOR_DESC' => 'Ang ulat ay i-imherit sa lahat ng mga grupong nakatalaga sa isang gumagamit na lumikha nito.',
    'LBL_INHERIT_PARENT' => 'Naka-inherent mula sa ulat ng magulang',
    'LBL_INHERIT_PARENT_DESC' => 'hal. Kung ang kaso ay nalikha pars ss kontak ng kaso ay i-inherent ang mga lahat na.grupo na nauugnay kasama ang kontak.',
    'LBL_USER_POPUP' => 'Bagong gumagamit na grupong Popup',
    'LBL_USER_POPUP_DESC' => 'Kapag lumikha ng bagong gumagamit ipakita ang SecurityGroups naka-popup upang italaga ang gumagamit sa isang grupo.',
    'LBL_INHERIT_ASSIGNED' => 'I-inherent mula sa naka-italaga sa gumagamit',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Ang ulat ay i-inherent sa mga lahat ng grupong sa isang nakaitalaga sa ulat. Ang ibang mga grupo nakatalaga sa isang ulat ay HIndi maalis.',
    'LBL_POPUP_SELECT' => 'Gumamit ng taga-likha na napiling grupo',
    'LBL_POPUP_SELECT_DESC' => 'Kung ang ulat ay nilikha sa pamamagitan ng gumagamit sa mahigt pa sa isang grupo ipinakita ang grupong pagpili ng panel sa paglikha ng screen. Kung hindi i-inherent ang isang grupo.',
    'LBL_FILTER_USER_LIST' => 'Listahan ng Filter User',
    'LBL_FILTER_USER_LIST_DESC' => "Walang mga admin na gumagamit ay pwede lamang italaga sa mga gumagamit sa kaparehong grupo",

    'LBL_DEFAULT_GROUP_TITLE' => 'I-default ang mga grupo para sa Bagong ulat',
    'LBL_ADD_BUTTON_LABEL' => 'Idagdag',
    'LBL_REMOVE_BUTTON_LABEL' => 'Tanggalin',
    'LBL_GROUP' => 'Grupo:',
    'LBL_MODULE' => 'Ang modyul:',

    'LBL_MASS_ASSIGN' => 'Mga grupong seguridad: Nakatalagang mass',
    'LBL_ASSIGN' => 'Inatasan',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_ASSIGN_CONFIRM' => 'Sigurado ka bang na gusto mong idagdg ang grupong ito sa ',
    'LBL_REMOVE_CONFIRM' => 'Sogurado ka bang na gusto mong alisin ang grupojg ito mula sa ',
    'LBL_CONFIRM_END' => ' napiling talaan?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SecurityGroup/User',
    'LBL_USER_NAME' => 'Ang Pangalan ng Gumagamit',
    'LBL_SECURITYGROUP_NAME' => 'Pangalan ng SecurityGroup',
    'LBL_HOMEPAGE_TITLE' => 'Ang mga mensahe ng grupo',
    'LBL_TITLE' => 'Paksa',
    'LBL_ROWS' => 'Mga hilera',
    'LBL_POST' => 'Mag-post',
    'LBL_SELECT_GROUP_ERROR' => 'Mangyaring pumili ng grupo at subukan ulit.',

    'LBL_GROUP_SELECT' => 'Piliin khng alin mga grupo ay mayroong access sa ulat na ito',
    'LBL_ERROR_DUPLICATE' => 'Dahil sa isang posibleng duplicate nakita sa SuiteCRM kaiangan mong i-manu,-mano sa pagdagdag ng mga grupong seguridad sa iyong bagong nilikhang ulat.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'I-inbound ang email akwant',
    'LBL_INBOUND_EMAIL_DESC' => 'Pinayagan lamang i-acxess ss isang email akwant kung ang gumagamit ah napabilang sa grupo na nakatalaga sa email akwant.',
    'LBL_PRIMARY_GROUP' => 'Primaryang grupo',
    'LBL_CHECKMARK' => 'Tsekmark',

);
