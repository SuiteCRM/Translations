<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'Currencies',
    'LBL_LIST_FORM_TITLE' => 'Currencies',
    'LBL_CURRENCY' => '通貨',
    'LBL_ADD' => 'Add',
    'LBL_MERGE' => 'Merge',
    'LBL_MERGE_TXT' => '選択された通貨にマップしたい通貨を選んでください。これによってチェックマークのついた通貨は削除され、それらに連動していたデータは選択された通貨に連動されます。',
    'LBL_US_DOLLAR' => 'USドル',
    'LBL_DELETE' => 'Delete',
    'LBL_LIST_SYMBOL' => 'Currency Symbol',
    'LBL_LIST_NAME' => 'Currency Name',
    'LBL_LIST_ISO4217' => 'ISO 4217コード',
    'LBL_LIST_ISO4217_HELP' => 'ISO 4217に準拠した3文字の通貨コードを入力してください。',
    'LBL_UPDATE' => 'Update',
    'LBL_LIST_RATE' => '換算レート',
    'LBL_LIST_RATE_HELP' => 'デフォルト通貨が日本円で1USドル = 100円の時、USドルの換算レートは0.01(= 1/100)となります。',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => '新規連絡先',
    'LNK_NEW_ACCOUNT' => '取引先作成',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LNK_NEW_CASE' => 'New Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'コール作成',
    'LNK_NEW_EMAIL' => '新しいEメール',
    'LNK_NEW_MEETING' => 'ミーティング作成',
    'LNK_NEW_TASK' => 'Create Task',
    'NTC_DELETE_CONFIRMATION' => 'このレコードを削除しても良いですか？ この通貨を用いていたデータはシステムデフォルトの通貨に変換されます。ステータスを非アクティブにする方法を推奨します。',
    'LBL_BELOW_MIN' => '換算レートは0以上である必要があります。',
    'currency_status_dom' =>
        array(
            'Active' => '稼働中',
            'Inactive' => 'Inactive',
        ),
    'LBL_CREATED_BY' => 'Created By',
    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
