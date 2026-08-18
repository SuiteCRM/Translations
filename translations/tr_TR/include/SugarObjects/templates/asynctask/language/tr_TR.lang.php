<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2026 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 * Shared language labels for all async task modules.
 * Module-specific labels (module name strings, action confirmation/success messages)
 * are defined in each module's own language file, where they override these defaults.
 *
 * This file is automatically merged into inheriting modules by LanguageManager
 * when VardefManager::createVardef() lists 'asynctask' in the templates array.
 */
$mod_strings = [

    // Standard record field labels
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı kimliği',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_MODIFIED' => 'Değiştiren',
    'LBL_MODIFIED_NAME' => 'Değiştiren adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Ad',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Kaldır',
    'LBL_LIST_DELETE' => 'Sil',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Etkinlikler',

    // Async task field labels
    'LBL_DATA' => 'Veri',
    'LBL_TYPE' => 'Tür',
    'LBL_ESTIMATED_RUN_TIME' => 'Çalışma süresi öngörüsü',
    'LBL_STATUS' => 'Durum',
    'LBL_SERVICE_KEY' => 'Hizmet anahtarı',
    'LBL_LAST_RUN_DATETIME' => 'Son çalıştırılma',
    'LBL_ATTACHMENTS' => 'Ek dosyalar',
    'LBL_PHASE' => 'Faz',
    'LBL_OWNER' => 'Sahibi',

    // Progress field labels
    'LBL_PROGRESS' => 'İlerleme',
    'LBL_PROGRESS_PERCENT' => 'Yüzde',
    'LBL_PROGRESS_COMPLETED' => 'Tamamlandı',
    'LBL_PROGRESS_FAILED' => 'Tamamlanamadı',
    'LBL_PROGRESS_PERCENT_TPL' => '%{{fields.progress.attributes.percent|default:-}} ({{fields.progress.attributes.completed|default:-}} tamamlandı, {{fields.progress.attributes.failed|default:-}} tamamlanamadı / {{fields.progress.attributes.total|default:-}} toplam)',
    'LBL_PROGRESS_NOT_STARTED' => 'Başlatılmadı',
    'LBL_PROGRESS_QUEUING_TPL' => 'Kuyruğa alınıyor: {{fields.progress.attributes.total|default:0}} öge kuyruğa alındı',

    // Action labels — button text (shared across modules)
    'LBL_RETRY' => 'Yeniden dene',
    'LBL_RERUN' => 'Yeniden çalıştır',
    'LBL_DISMISS' => 'Yok say',
    'LBL_DELETE' => 'Sil',
    'LBL_DELETE_COMPLETED_CONFIRMATION' => 'Bu tamamlanmış görevi silmek istediğinize emin misiniz?',
    'LBL_DELETE_COMPLETED_WITH_FAILURES_CONFIRMATION' => 'Bu görev sorunlar ile tamamlanadı. Silerseniz, başarısız olan öge ayrıntıları ile tüm görev verileri kaldırılır. İlerlemek istediğinize emin misiniz?',
    'LBL_DELETE_FAILED_CONFIRMATION' => 'Bu görev tamamlanamadı. Silerseniz, hata ayrıntıları ile tüm görev verileri kaldırılır. İlerlemek istediğinize emin misiniz?',

    // Retry action messages (shared — generic phrasing)
    'LBL_RETRY_CONFIRMATION' => 'Yeniden denemek istediğinize emin misiniz? Bu işlem, tüm tamamlanmamış ögeleri işlenmeleri için yeniden sıraya alacak.',
    'LBL_RETRY_SUCCESS' => 'Tamamlanmamış ögeler işlenmek üzere yeniden sıraya alındı.',

    // Retry-failed action messages (shared)
    'LBL_RETRY_FAILED' => 'Yeniden denenemedi',
    'LBL_RETRY_FAILED_CONFIRMATION' => 'Yeniden denemek istediğinize emin misiniz? Bu işlem, tüm tamamlanmamış ögeleri işlenmeleri için yeniden sıraya alacak.',
    'LBL_RETRY_FAILED_SUCCESS' => 'Tamamlanmamış ögeler işlenmek üzere yeniden sıraya alındı.',

    // Capability flag field labels
    'LBL_ALLOW_FAILURE_RETRY_ACTION' => 'Tamamlanmamış ögeleri yeniden deneme işlemi',
    'LBL_ALLOW_FAILURE_RERUN_ACTION' => 'Tamamlanmamış ögeleri yeniden çalıştırma işlemi',

    // Subpanel
    'LBL_FAILED_ITEMS' => 'Tamamlanmamış ögeler',
    'LBL_COMPLETED_ITEMS' => 'Tamamlanmış ögeler',
];
