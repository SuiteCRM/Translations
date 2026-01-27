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
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı kodu',
    'LBL_ASSIGNED_TO_NAME' => 'Proje yöneticisi',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_MODIFIED' => 'Değiştiren',
    'LBL_MODIFIED_NAME' => 'Değiştiren adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Kalıp adı',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Sil',
    'LBL_LIST_FORM_TITLE' => 'Proje kalıpları listesi',
    'LBL_MODULE_NAME' => 'Proje kalıpları',
    'LBL_MODULE_TITLE' => 'Proje kalıpları',
    'LBL_HOMEPAGE_TITLE' => 'Proje kalıplarım',
    'LNK_NEW_RECORD' => 'Proje kalıbı ekle',
    'LNK_LIST' => 'Proje kalıplarını görüntüle',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Proje kalıplarını içe aktar',
    'LBL_SEARCH_FORM_TITLE' => 'Proje kalıbı arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni proje kalıpları',
    'LBL_STATUS' => 'Durum',
    'LBL_PRIORITY' => 'Öncelik',
    'LBL_PROJECT_NAME' => 'Proje adı',
    'LBL_START_DATE' => 'Başlangıç tarihi',
    'LBL_CREATE_PROJECT_TITLE' => 'Bu kalıbı kullanarak yeni bir proje eklemek ister misiniz?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Görev kalıpları',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Kullanıcılar',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kişiler',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Kaynakları seçin',
    'LBL_NEW_PROJECT_CREATED' => 'Yeni proje eklendi',
    'LBL_NEW_PROJECT' => 'Proje ekle',
    'LBL_CANCEL_PROJECT' => 'İptal',

    'LBL_SUBTASK' => 'Görev',
    'LBL_MILESTONE_FLAG' => 'Kilometre taşı',
    'LBL_RELATIONSHIP_TYPE' => 'İlişki türü',
    'LBL_LAG' => 'Gecikme',
    'LBL_DAYS' => 'Gün',
    'LBL_HOURS' => 'Saat',
    'LBL_MONTHS' => 'Ay',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Proje görevleri',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt görünümü',
    'LBL_VIEW_GANTT_DURATION' => 'Süre',
    'LBL_TASK_TITLE' => 'Görevi düzenle',
    'LBL_DURATION_TITLE' => 'Süreyi düzenle',
    'LBL_DESCRIPTION' => 'Notlar',
    'LBL_ASSIGNED_USER_ID' => 'Atanmış kişi:',

    'LBL_LIST_ASSIGNED_USER' => 'Proje yöneticisi',
    'LBL_UNASSIGNED' => 'Atanmamış',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Kaynaklar',
    'LBL_DELETE_TASK' => 'Görevi sil',
    'LBL_VIEW_DETAIL' => 'Ayrıntıları görüntüle',
    'LBL_ADD_NEW_TASK' => 'Yeni görev ekle',
    'LBL_ASSIGNED_USER_NAME' => 'Proje yöneticisi:',

    'LBL_TASK_ID' => 'Kod',
    'LBL_TASK_NAME' => 'Görev adı',
    'LBL_DURATION' => 'Süre',
    'LBL_ACTUAL_DURATION' => 'Gerçek süre',
    'LBL_START' => 'İlk',
    'LBL_FINISH' => 'Bitir',
    'LBL_PREDECESSORS' => 'Öncülleri',
    'LBL_PERCENT_COMPLETE' => 'Tamamlanma oranı',
    'LBL_EDIT_TASK_PROPERTIES' => 'Görev özelliklerini düzenleyin.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Çalışma günleri hesaba katılsın',
    'LBL_COPY_ALL_TASKS' => 'Tüm görevleri kaynaklarıyla kopyala',
    'LBL_COPY_SEL_TASKS' => 'Seçilmiş görevleri kaynaklarıyla kopyala',
    'LBL_TOOLTIP_TITLE' => 'İpucu',
    'LBL_TOOLTIP_TEXT' => 'Tüm görevleri atanmış kullanıcıları ile kopyalar',

    'LBL_EMAIL' => 'E-posta',
    'LBL_PHONE' => 'İş telefonu:',
    'LBL_ADD_BUTTON' => 'Ekle',
    'LBL_ADD_INVITEE' => 'Kaynak ekle',
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_SEARCH_BUTTON' => 'Arama',
    'LBL_EMPTY_SEARCH_RESULT' => 'Ne yazık ki, herhangi bir sonuç bulunamadı. Lütfen aşağıdan bir katılımcı ekleyin.',
    'LBL_CREATE_INVITEE' => 'Kaynak ekle',
    'LBL_CREATE_CONTACT' => 'Kişi olarak',
    'LBL_CREATE_AND_ADD' => 'Oluştur ve Ekle',
    'LBL_CANCEL_CREATE_INVITEE' => 'İptal',
    'LBL_NO_ACCESS' => '$module modülünü ekleme izniniz yok',
    'LBL_SCHEDULING_FORM_TITLE' => 'Kaynak listesi',
    'LBL_NONE' => 'Yok',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Proje kalıpları: Proje başlığından proje',


);
