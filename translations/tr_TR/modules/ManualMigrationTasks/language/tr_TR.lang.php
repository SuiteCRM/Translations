<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
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
 * along with this program.  If not, see http://www.gnu.org/licenses.
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
 * Module-specific labels for ManualMigrationTasks.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'Aktarımlar listesi',
    'LBL_MODULE_NAME' => 'Aktarımlar',
    'LBL_MODULE_TITLE' => 'Aktarımlar',
    'LBL_HOMEPAGE_TITLE' => 'Aktarımlarım',
    'LNK_NEW_RECORD' => 'Aktarım ekle',
    'LNK_LIST' => 'Aktarımları görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Aktarım ara',
    'LBL_NEW_FORM_TITLE' => 'Yeni aktarımlar',

    // Module-specific trigger action
    'LBL_RUN_MIGRATION' => 'Aktarımı yürüt',
    'LBL_RUN_MIGRATION_CONFIRMATION' => 'Bu aktarımı yeniden başlatmak istediğinize emin misiniz?',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Bu aktarımı sıfırdan yeniden başlatmak istediğinize emin misiniz? Var olan tüm ögeler kaldırılacak ve aktarım yeniden başlatılacak.',
    'LBL_RERUN_SUCCESS' => 'Aktarım yeniden sıraya alındı ve baştan başlayacak.',
    'LBL_DISMISS_CONFIRMATION' => 'Bu aktarımı reddetmek istediğinize emin misiniz? Bu işlem, aktarımı ve ilişkili tüm verileri kaldıracak.',
    'LBL_DISMISS_SUCCESS' => 'Aktarım yok sayıldı.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Bu aktarım arka planda ileti kuyruğu işlemi üzerinden yürütülüt. Ögeleri gruplar halinde işler ve kullanıcı arayüzünü engellemez.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Bu aktarım tetiklendiğinde hemen yürütülür. Tüm ögeleri tek bir istekte işler ve büyük veri kümeleri için daha uzun sürebilir.',


    // Messenger setup widget
    'LBL_MESSENGER_SETUP' => 'Arka plan görevi yapılandırması',
    'LBL_MESSENGER_SETUP_DESC1' => 'Aktarım görevleri arka planda işlenir.',
    'LBL_MESSENGER_SETUP_DESC2' => 'Bu görevlerin başarılı bir şekilde tamamlanmasını sağlamak için bir Symfony Messenger işleminin yürütüldüğünden emin olun.',
    'LBL_MESSENGER_SETUP_DESC3' => 'Etkin bir işlem olmadan, görevler "Bekliyor" durumunda kalır.',
    'LBL_MESSENGER_SETUP_DOC_LINK' => 'Kurulum rehberini görüntüle (Supervisor, systemd, Cron)',
];
