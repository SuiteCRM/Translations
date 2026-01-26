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
    'LBL_MODULE_NAME' => 'Proje',
    'LBL_MODULE_TITLE' => 'Projeler: Giriş',
    'LBL_SEARCH_FORM_TITLE' => 'Proje arama',
    'LBL_LIST_FORM_TITLE' => 'Proje listesi',
    'LBL_HISTORY_TITLE' => 'Geçmiş',
    'LBL_ID' => 'Kod:',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi:',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi:',
    'LBL_ASSIGNED_USER_ID' => 'Atanmış kişi:',
    'LBL_ASSIGNED_USER_NAME' => 'Proje yöneticisi:',
    'LBL_MODIFIED_USER_ID' => 'Değiştiren kullanıcı kodu:',
    'LBL_CREATED_BY' => 'Ekleyen:',
    'LBL_NAME' => 'Ad:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DELETED' => 'Silindi:',
    'LBL_DATE' => 'Tarih:',
    'LBL_DATE_START' => 'Başlangıç tarihi:',
    'LBL_DATE_END' => 'Bitiş tarihi:',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Toplam öngörülen harcanacak zaman (saat)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Toplam gerçekleşen harcanan zaman (saat)',
    'LBL_LIST_END_DATE' => 'Bitiş tarihi',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Proje görevleri',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Yok',
    'LBL_ALL_PROJECTS' => 'Tüm projeler',
    'LBL_ALL_USERS' => 'Tüm kullanıcılar',
    'LBL_ALL_CONTACTS' => 'Tüm kişiler',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Yeni proje',
    'LNK_NEW_PROJECT' => 'Proje ekle',
    'LNK_PROJECT_LIST' => 'Proje listesini görüntüle',
    'LNK_NEW_PROJECT_TASK' => 'Proje görevi ekle',
    'LNK_PROJECT_TASK_LIST' => 'Proje görevlerini görüntüle',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projeler',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Destek kayıtları',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_TASK_ID' => 'Kod',
    'LBL_TASK_NAME' => 'Görev adı',
    'LBL_DURATION' => 'Süre',
    'LBL_ACTUAL_DURATION' => 'Gerçek süre',
    'LBL_START' => 'İlk',
    'LBL_FINISH' => 'Bitir',
    'LBL_PREDECESSORS' => 'Öncülleri',
    'LBL_PERCENT_COMPLETE' => 'Tamamlanma oranı',
    'LBL_MORE' => 'Daha fazla...',
    'LBL_OPPORTUNITIES' => 'Fırsatlar',
    'LBL_NEXT_WEEK' => 'Sonraki',
    'LBL_PROJECT_INFORMATION' => 'Proje özeti',
    'LBL_EDITLAYOUT' => 'Görünümü düzenle' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Proje görevleri',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt görünümü',
    'LBL_VIEW_GANTT_DURATION' => 'Süre',
    'LBL_TASK_TITLE' => 'Görevi düzenle',
    'LBL_DURATION_TITLE' => 'Süreyi düzenle',
    'LBL_LAG' => 'Gecikme',
    'LBL_DAYS' => 'Gün',
    'LBL_HOURS' => 'Saat',
    'LBL_MONTHS' => 'Ay',
    'LBL_SUBTASK' => 'Görev',
    'LBL_MILESTONE_FLAG' => 'Kilometre taşı',
    'LBL_ADD_NEW_TASK' => 'Yeni görev ekle',
    'LBL_DELETE_TASK' => 'Görevi sil',
    'LBL_EDIT_TASK_PROPERTIES' => 'Görev özelliklerini düzenleyin.',
    'LBL_PARENT_TASK_ID' => 'Üst görev kodu',
    'LBL_RESOURCE_CHART' => 'Kaynak takvimi',
    'LBL_RELATIONSHIP_TYPE' => 'İlişki türü',
    'LBL_ASSIGNED_TO' => 'Proje yöneticisi',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Proje kalıbı',
    'LBL_STATUS' => 'Durum:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Proje yöneticisi',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Proje',
    'LBL_TOOLTIP_TASK_NAME' => 'Görev adı',
    'LBL_TOOLTIP_TITLE' => 'Bugünkü görevler',
    'LBL_TOOLTIP_TASK_DURATION' => 'Süre',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Kaynak bir kullanıcı',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Kaynak bir kişi',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Önceki ay',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Gelecek ay',
    'LBL_RESOURCE_CHART_WEEK' => 'Hafta',
    'LBL_RESOURCE_CHART_DAY' => 'Gün',
    'LBL_RESOURCE_CHART_WARNING' => 'Bir projeye herhangi bir kaynak atanmamış.',
    'LBL_PROJECT_DELETE_MSG' => 'Bu projeyi ve ilişkili görevlerini silmek istediğinize emin misiniz?',
    'LBL_LIST_MY_PROJECT' => 'Projelerım',
    'LBL_LIST_ASSIGNED_USER' => 'Proje yöneticisi',
    'LBL_UNASSIGNED' => 'Atanmamış',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Kaynaklar',

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
    'LBL_REMOVE' => 'Sil',
    'LBL_VIEW_DETAIL' => 'Ayrıntıları görüntüle',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Çalışma günleri hesaba katılsın',

    'LBL_IMPORT_PROJECTS' => 'Projeleri içe aktar',
    
    'LBL_PROJECTS_SEARCH' => 'Proje arama',
    'LBL_USERS_SEARCH' => 'Kullanıcı arama',
    'LBL_CONTACTS_SEARCH' => 'Kişileri seçin',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Arama',

    'LBL_CHART_TYPE' => 'Tür',
    'LBL_CHART_WEEKLY' => 'Haftalık',
    'LBL_CHART_MONTHLY' => 'Aylık',
    'LBL_CHART_QUARTERLY' => 'Üç aylık',

    'LBL_RESOURCE_CHART_MONTH' => 'Ay',
    'LBL_RESOURCE_CHART_QUARTER' => 'Çeyrek',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'İlgili kişiler başlığından proje ilgili kişileri',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Proje kalıpları: Proje başlığından proje',
    'LBL_AOS_QUOTES_PROJECT' => 'Teklifler: Proje',

    'LBL_ASCENDING' => 'Artan',
    'LBL_DESCENDING' => 'Azalan',
);
