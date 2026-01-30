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
    'LBL_ALL_MODULES' => '全部',//rost fix
    'LBL_ASSIGNED_TO_ID' => '負責人Id',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ID' => '編號',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_CREATED' => '建立人',
    'LBL_DESCRIPTION' => '描述',
    'LBL_DELETED' => '已刪除',
    'LBL_NONINHERITABLE' => '未繼承',
    'LBL_LIST_NONINHERITABLE' => '未繼承',
    'LBL_NAME' => '名稱',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_LIST_FORM_TITLE' => '安全群組',
    'LBL_MODULE_NAME' => '安全套件管理',
    'LBL_MODULE_TITLE' => '安全套件管理',
    'LNK_NEW_RECORD' => '創建一個使用者群組',
    'LNK_LIST' => '清單檢視',
    'LBL_SEARCH_FORM_TITLE' => '搜尋使用者群組管理',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '安全套件管理',
    'LBL_USERS' => '使用者',
    'LBL_USERS_SUBPANEL_TITLE' => '使用者',
    'LBL_ROLES_SUBPANEL_TITLE' => '角色',
    'LBL_ROLES' => '角色',

    'LBL_CONFIGURE_SETTINGS' => '配置',
    'LBL_ADDITIVE' => '附加權限',
    'LBL_ADDITIVE_DESC' => "當所有權限被分配給一個使用者或是該使用者的群組時，使用者將獲得最大權限",
    'LBL_STRICT_RIGHTS' => '嚴格的權限',
    'LBL_STRICT_RIGHTS_DESC' => "如果使用者被分配到多個群組，只有在目前紀錄的相對應群組權限會生效。",
    'LBL_USER_ROLE_PRECEDENCE' => '使用者角色優先',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => '如果任何角色直接被分配給使用者，這會優先於任何群組。',
    'LBL_INHERIT_TITLE' => '群組繼承規則',
    'LBL_INHERIT_CREATOR' => '從創建它的使用者繼承',
    'LBL_INHERIT_CREATOR_DESC' => '該紀錄將繼承分配給創建它的使用者的所有群組。',
    'LBL_INHERIT_PARENT' => '從父記錄繼承',
    'LBL_INHERIT_PARENT_DESC' => '例：如果一個案例被創建給一個聯絡人，這案例將繼承此聯絡人的所有群組。',
    'LBL_USER_POPUP' => '新建使用者群組彈出功能表',
    'LBL_USER_POPUP_DESC' => '創建新的使用者時，將會以彈出式功能表來將使用者分配到群組。',
    'LBL_INHERIT_ASSIGNED' => '從負責的使用者繼承',
    'LBL_INHERIT_ASSIGNED_DESC' => '該紀錄將繼承負責的使用者的所有群組。但其他被分配給這個紀錄的群組不會被移除。',
    'LBL_POPUP_SELECT' => '使用建立者群組選擇',
    'LBL_POPUP_SELECT_DESC' => '當紀錄被一個在多個群組中的使用者創建，會顯示一個面板來選擇群組。否則會直接繼承一個群組。',
    'LBL_FILTER_USER_LIST' => '過濾使用者清單',
    'LBL_FILTER_USER_LIST_DESC' => "非管理員使用者只能指派給同群組中的使用者",

    'LBL_DEFAULT_GROUP_TITLE' => '新建紀錄的預設群組',
    'LBL_ADD_BUTTON_LABEL' => '新增',
    'LBL_REMOVE_BUTTON_LABEL' => '刪除',
    'LBL_GROUP' => '群組:',
    'LBL_MODULE' => '模組:',

    'LBL_MASS_ASSIGN' => '安全性群組: 批量指派',
    'LBL_ASSIGN' => '指派',
    'LBL_REMOVE' => '刪除',
    'LBL_ASSIGN_CONFIRM' => '你確定要將此群組加到 ',
    'LBL_REMOVE_CONFIRM' => '你確定要將此群組移除自 ',
    'LBL_CONFIRM_END' => ' 選擇記錄?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => '使用者群組/使用者',
    'LBL_USER_NAME' => '使用者名稱',
    'LBL_SECURITYGROUP_NAME' => '使用者群組名稱',
    'LBL_HOMEPAGE_TITLE' => '群組訊息',
    'LBL_TITLE' => '標題',
    'LBL_ROWS' => '列',
    'LBL_POST' => '發送',
    'LBL_SELECT_GROUP_ERROR' => '請選擇一個群組並重試。',

    'LBL_GROUP_SELECT' => '選擇哪個群組有權訪問此紀錄',
    'LBL_ERROR_DUPLICATE' => '由於 SuiteCRM 檢測到可能存在重複，您需要手動增加群組給您新建立的紀錄。',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => '更新失敗因為收尋條件被變更過. 請重新試過.',

    'LBL_INBOUND_EMAIL' => '入站電子郵件帳戶',
    'LBL_INBOUND_EMAIL_DESC' => '只允許有被指派到這個群組的電子郵件帳號.',
    'LBL_PRIMARY_GROUP' => '主群組',
    'LBL_CHECKMARK' => '標記',

);
