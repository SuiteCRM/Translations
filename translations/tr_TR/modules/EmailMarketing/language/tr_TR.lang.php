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
    'LBL_REPLY_ADDR' => '"Yanıt" adresi: ',
    'LBL_REPLY_NAME' => '"Yanıt" adı: ',

    'LBL_MODULE_NAME' => 'E-posta ile pazarlama',
    'LBL_MODULE_TITLE' => 'E-posta ile pazarlama: Giriş',
    'LBL_LIST_FORM_TITLE' => 'E-posta ile pazarlama kampanyaları',
    'LBL_NAME' => 'Ad: ',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_FROM_ADDR' => 'Kimden adresi',
    'LBL_LIST_DATE_START' => 'Başlangıç tarihi',
    'LBL_LIST_TEMPLATE_NAME' => 'E-Posta kalıbı',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_STATUS' => 'Durum',
    'LBL_STATUS_TEXT' => 'Durum:',
    'LBL_TEMPLATE_NAME' => 'Kalıp adı',
    'LBL_DATE_ENTERED' => 'Yazılma tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_MODIFIED' => 'Değiştiren: ',
    'LBL_CREATED' => 'Ekleyen: ',
    'LBL_MESSAGE_FOR' => 'Bu iletinin gönderileceği kişi:',

    'LBL_FROM_NAME' => 'Kimden adı: ',
    'LBL_FROM_ADDR' => '"Kimden" e-posta adresi: ',
    'LBL_DATE_START' => 'Başlangıç tarihi',
    'LBL_TIME_START' => 'Başlangıç saati',
    'LBL_START_DATE_TIME' => 'Başlangıç tarihi ve saati: ',
    'LBL_TEMPLATE' => 'E-posta kalıbı: ',

    'LBL_MODIFIED_BY' => 'Değiştiren: ',
    'LBL_CREATED_BY' => 'Ekleyen: ',

    'LNK_NEW_CAMPAIGN' => 'Kampanya ekle',
    'LNK_CAMPAIGN_LIST' => 'Kampanyalar',
    'LNK_NEW_PROSPECT_LIST' => 'Hedef listesi ekle',
    'LNK_PROSPECT_LIST_LIST' => 'Hedef listeleri',
    'LNK_NEW_PROSPECT' => 'Hedef ekle',
    'LNK_PROSPECT_LIST' => 'Hedefler',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-posta ile pazarlama',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Ekle',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Düzenle',
    'LBL_FROM_MAILBOX' => 'Posta kutusundan',
    'LBL_FROM_MAILBOX_NAME' => 'Posta kutusu kullanılsın:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Giden e-posta hesabı:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Hedef listeleri',
    'LBL_ALL_PROSPECT_LISTS' => 'Kampanyadaki tüm hedef listelerini seçmek için işaretleyin.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Bu ileti ile ilişkili tüm hedef listeleri.',
    'LBL_PROSPECT_LIST_NAME' => 'Hedef listesi adı',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Hedeflenen listeler',
    'LBL_MODULE_SEND_TEST' => 'Kampanya: Deneme gönder',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanya: E-postaları gönder',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Lütfen denemek istediğiniz kampanya iletilerini seçin:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Lütfen belirtilen başlangıç tarih ve saatinde gönderilmeye başlanmasını istediğiniz kampanya iletilerini seçin:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Gönder',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Gönder',
    'LBL_ERROR_ON_MARKETING' => 'Zorunlu alanlar doldurulmamış',

    'LBL_CAMPAIGN_ID' => 'Kampanya kodu',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Giden e-posta hesabı kodu',
    'LBL_EMAIL_TEMPLATE' => 'E-Posta kalıbı',
    'LBL_PROSPECT_LISTS' => 'Aday listeleri',

);
