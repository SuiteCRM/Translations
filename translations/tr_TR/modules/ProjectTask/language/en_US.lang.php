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
    'LBL_MODULE_NAME' => 'Proje görevleri',
    'LBL_MODULE_TITLE' => 'Proje görevi: Giriş',

    'LBL_ID' => 'Kod:',
    'LBL_PROJECT_TASK_ID' => 'Proje görevi kodu:',
    'LBL_PROJECT_ID' => 'Proje kodu:',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi:',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi:',
    'LBL_ASSIGNED_USER_ID' => 'Atanmış kişi:',
    'LBL_MODIFIED_USER_ID' => 'Değiştiren kullanıcı kodu:',
    'LBL_CREATED_BY' => 'Ekleyen:',
    'LBL_NAME' => 'Ad:',
    'LBL_STATUS' => 'Durum:',
    'LBL_DATE_DUE' => 'Tamamlanma tarihi:',
    'LBL_TIME_DUE' => 'Tamamlanma saati:',
    'LBL_PREDECESSORS' => 'Öncülleri',
    'LBL_DATE_START' => 'Başlangıç tarihi:',
    'LBL_DATE_FINISH' => 'Bitiş tarihi:',
    'LBL_TIME_START' => 'Başlangıç saati:',
    'LBL_TIME_FINISH' => 'Bitiş saati:',
    'LBL_DURATION' => 'Süre:',
    'LBL_DURATION_UNIT' => 'Süre birimi:',
    'LBL_ACTUAL_DURATION' => 'Gerçek süre:',
    'LBL_PARENT_ID' => 'Proje:',
    'LBL_PARENT_TASK_ID' => 'Üst görev kodu:',
    'LBL_PERCENT_COMPLETE' => 'Tmm %',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_DESCRIPTION' => 'Notlar:',
    'LBL_ORDER_NUMBER' => 'Sıra:',
    'LBL_TASK_NUMBER' => 'Görev numarası:',
    'LBL_TASK_ID' => 'Görev kodu:',
    'LBL_MILESTONE_FLAG' => 'Kilometre taşı:',
    'LBL_ESTIMATED_EFFORT' => 'Harcanacak zaman öngörüsü (saat):',
    'LBL_ACTUAL_EFFORT' => 'Gerçek harcanan zaman (saat):',
    'LBL_UTILIZATION' => 'Kullanım (%):',
    'LBL_DELETED' => 'Silindi:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Proje görevlerini içe aktar',

    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PARENT_NAME' => 'Proje',
    'LBL_LIST_PERCENT_COMPLETE' => 'Tamamlanma oranı',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atanmış kişi',
    'LBL_LIST_DATE_DUE' => 'Tamamlanma tarihi',
    'LBL_LIST_PRIORITY' => 'Öncelik',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_PROJECT_NAME' => 'Proje adı',

    'LNK_NEW_PROJECT' => 'Proje ekle',
    'LNK_PROJECT_LIST' => 'Proje listesi',
    'LNK_NEW_PROJECT_TASK' => 'Proje görevi ekle',
    'LNK_PROJECT_TASK_LIST' => 'Proje görevleri',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Proje görevlerim',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proje görevleri',
    'LBL_NEW_FORM_TITLE' => 'Yeni proje görevi',

    'LBL_HISTORY_TITLE' => 'Geçmiş',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',

    'LBL_ASSIGNED_USER_NAME' => 'Atanmış kişi',
    'LBL_PARENT_NAME' => 'Proje adı',
    'LBL_EDITLAYOUT' => 'Görünümü düzenle' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Zaman tüneli',

    'LBL_SUBTASK' => 'Alt görev',
    'LBL_LAG' => 'Gecikme',
    'LBL_DAYS' => 'Gün',
    'LBL_HOURS' => 'Saat',
    'LBL_RELATIONSHIP_TYPE' => 'İlişki türü',

    'LBL_ASCENDING' => 'Artan',
    'LBL_DESCENDING' => 'Azalan',
);
