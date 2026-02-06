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
    'LBL_ALL_MODULES' => 'Hamısı',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Təyin Edilmiş İstifadəçi kimliyi',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_MODIFIED' => 'Redaktə etdi',
    'LBL_MODIFIED_NAME' => 'Ad tərəfindən dəyişdirildi',
    'LBL_CREATED' => 'Müəllif',
    'LBL_DESCRIPTION' => 'Açıqlama',
    'LBL_DELETED' => 'Silinib',
    'LBL_NONINHERITABLE' => 'İrsi deyil',
    'LBL_LIST_NONINHERITABLE' => 'İrsi deyil',
    'LBL_NAME' => 'Ad',
    'LBL_CREATED_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_MODIFIED_USER' => 'İstifadəçi tərəfindən dəyişdirildi',
    'LBL_LIST_FORM_TITLE' => 'Təhlükəsizlik Qrupları',
    'LBL_MODULE_NAME' => 'Təhlükəsizlik paketi İdarəetmə',
    'LBL_MODULE_TITLE' => 'Təhlükəsizlik paketi İdarəetmə',
    'LNK_NEW_RECORD' => 'Təhlükəsizlik Qrupu yaradın',
    'LNK_LIST' => 'Siyahıya Baxış',
    'LBL_SEARCH_FORM_TITLE' => 'Axtarış Təhlükəsizlik Qrupları İdarəetmə',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçə',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Təhlükəsizlik Qruplarının İdarə Edilməsi',
    'LBL_USERS' => 'İstifadəçilər',
    'LBL_USERS_SUBPANEL_TITLE' => 'İstifadəçilər',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Rol',
    'LBL_ROLES' => 'Rol',

    'LBL_CONFIGURE_SETTINGS' => 'Ayarla',
    'LBL_ADDITIVE' => 'Əlavə hüquqlar',
    'LBL_ADDITIVE_DESC' => "İstifadəçi. istifadəçiyə və ya istifadəçi qrup(lar) ına təyin edilmiş bütün rolların ən böyük hüquqlarını alır",
    'LBL_STRICT_RIGHTS' => 'Sərt hüquqlar',
    'LBL_STRICT_RIGHTS_DESC' => "İstifadəçi bir neçə qrupun üzvüdürsə, yalnız qrupdan cari qeydə təyin edilmiş müvafiq hüquqlardan istifadə edilir.",
    'LBL_USER_ROLE_PRECEDENCE' => 'İstifadəçi rolunun üstünlüyü',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Hər hansı bir rol birbaşa istifadəçiyə təyin edilərsə, bu rol hər hansı qrup rolundan üstün olmalıdır.',
    'LBL_INHERIT_TITLE' => 'Qrup miras qaydaları',
    'LBL_INHERIT_CREATOR' => 'İstifadəçi tərəfindən yaradılandan miras alın',
    'LBL_INHERIT_CREATOR_DESC' => 'Qeyd onu yaradan istifadəçiyə təyin edilmiş bütün qrupları miras alacaq.',
    'LBL_INHERIT_PARENT' => 'Inherit from Parent Record',
    'LBL_INHERIT_PARENT_DESC' => 'e.g. If a case is created for a contact the case will inherit the groups associated with the contact.',
    'LBL_USER_POPUP' => 'New User Group Popup',
    'LBL_USER_POPUP_DESC' => 'When creating a new user show the SecurityGroups popup to assign the user to a group(s).',
    'LBL_INHERIT_ASSIGNED' => 'Inherit from Assigned To User',
    'LBL_INHERIT_ASSIGNED_DESC' => 'The record will inherit all the groups of the user assigned to the record. Other groups assigned to the record will NOT be removed.',
    'LBL_POPUP_SELECT' => 'Use Creator Group Select',
    'LBL_POPUP_SELECT_DESC' => 'When a record is created by a user in more than one group show a group selection panel on the create screen. Otherwise inherit that one group.',
    'LBL_FILTER_USER_LIST' => 'Filter User List',
    'LBL_FILTER_USER_LIST_DESC' => "Non-admin users can only assign to users in the same group(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Default Groups for New Records',
    'LBL_ADD_BUTTON_LABEL' => 'Əlavə et',
    'LBL_REMOVE_BUTTON_LABEL' => 'Sil',
    'LBL_GROUP' => 'Group:',
    'LBL_MODULE' => 'Module:',

    'LBL_MASS_ASSIGN' => 'Security Groups: Mass Assign',
    'LBL_ASSIGN' => 'Assign',
    'LBL_REMOVE' => 'Sil',
    'LBL_ASSIGN_CONFIRM' => 'Are you sure that you want to add this group to the ',
    'LBL_REMOVE_CONFIRM' => 'Are you sure that you want to remove this group from the ',
    'LBL_CONFIRM_END' => ' seçilmiş qeyd(lər) i?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SecurityGroup/User',
    'LBL_USER_NAME' => 'İstifadəçi adı',
    'LBL_SECURITYGROUP_NAME' => 'SecurityGroup Name',
    'LBL_HOMEPAGE_TITLE' => 'Group Messages',
    'LBL_TITLE' => 'Başlıq',
    'LBL_ROWS' => 'Rows',
    'LBL_POST' => 'Post',
    'LBL_SELECT_GROUP_ERROR' => 'Please select a group and try again.',

    'LBL_GROUP_SELECT' => 'Select which groups should have access to this record',
    'LBL_ERROR_DUPLICATE' => 'Due to a possible duplicate detected by SuiteCRM you will have to manually add Security Groups to your newly created record.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Inbound email account',
    'LBL_INBOUND_EMAIL_DESC' => 'Only allow access to an email account if user belongs to a group that is assigned to the mail account.',
    'LBL_PRIMARY_GROUP' => 'Əsas Grup',
    'LBL_CHECKMARK' => 'Checkmark',

);
