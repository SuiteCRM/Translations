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
 * Module-specific labels for Processes.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'Süreç listesi',
    'LBL_MODULE_NAME' => 'Süreçler',
    'LBL_MODULE_TITLE' => 'Süreçler',
    'LBL_HOMEPAGE_TITLE' => 'Süreçlerim',
    'LNK_NEW_RECORD' => 'Süreç ekle',
    'LNK_LIST' => 'Süreçleri görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Süreç ara',
    'LBL_NEW_FORM_TITLE' => 'Yeni süreç',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Bu süreci sıfırdan yeniden başlatmak istediğinize emin misiniz? Var olan tüm ögeler kaldırılacak ve süreç yeniden başlatılacak.',
    'LBL_RERUN_SUCCESS' => 'Süreç yeniden sıraya alındı ve baştan başlayacak.',
    'LBL_DISMISS_CONFIRMATION' => 'Bu süreci reddetmek istediğinize emin misiniz? Bu işlem, süreci ve ilişkili tüm verileri kaldıracak.',
    'LBL_DISMISS_SUCCESS' => 'Süreç yok sayıldı.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Bu süreç arka planda ileti kuyruğu işlemi üzerinden yürütülür. Ögeleri gruplar halinde işler ve kullanıcı arayüzünü engellemez.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Bu süreç tetiklendiğinde hemen yürütülür. Tüm ögeleri tek bir istekte işler ve büyük veri kümeleri için daha uzun sürebilir.',
];
