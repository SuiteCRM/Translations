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
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Bilgi bankası önerileri',
    'LBL_TOOL_TIP_TITLE' => 'Başlık: ',
    'LBL_TOOL_TIP_BODY' => 'İçerik metni:',
    'LBL_TOOL_TIP_INFO' => 'Ek bilgiler:',
    'LBL_TOOL_TIP_USE' => 'Şu olarak kullan: ',
    'LBL_SUGGESTION_BOX' => 'Öneriler',
    'LBL_NO_SUGGESTIONS' => 'Herhangi bir öneri yok',
    'LBL_RESOLUTION_BUTTON' => 'Çözüm',
    'LBL_SUGGESTION_BOX_STATUS' => 'Durum',
    'LBL_SUGGESTION_BOX_TITLE' => 'Başlık',
    'LBL_SUGGESTION_BOX_REL' => 'İlişki',

    'LBL_ACCOUNT_ID' => 'Hesap kodu',
    'LBL_ACCOUNT_NAME' => 'Hesap adı:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_CASE_NUMBER' => 'Destek kaydı numarası:',
    'LBL_CASE' => 'Destek kaydı:',
    'LBL_CONTACT_NAME' => 'İlgili kişi adı:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Destek kayıtları',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_INVITEE' => 'Kişiler',
    'LBL_MEMBER_OF' => 'Hesap',
    'LBL_MODULE_NAME' => 'Destek kayıtları',
    'LBL_MODULE_TITLE' => 'Destek kayıtları: Giriş',
    'LBL_NEW_FORM_TITLE' => 'Yeni destek kaydı',
    'LBL_NUMBER' => 'Sayı:',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Belgeler',
    'LBL_RESOLUTION' => 'Çözüm:',
    'LBL_SEARCH_FORM_TITLE' => 'Destek kaydı arama',
    'LBL_STATUS' => 'Durum:',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış kullanıcı',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_LIST_ASSIGNED' => 'Atanmış kişi',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_LIST_FORM_TITLE' => 'Destek kaydı listesi',
    'LBL_LIST_LAST_MODIFIED' => 'Son değişiklik',
    'LBL_LIST_MY_CASES' => 'Açık destek kayıtlarım',
    'LBL_LIST_NUMBER' => 'No.',
    'LBL_LIST_PRIORITY' => 'Öncelik',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_SUBJECT' => 'Konu',

    'LNK_CASE_LIST' => 'Destek kayıtlarını görüntüle',
    'LNK_NEW_CASE' => 'Destek kaydı ekle',
    'LBL_LIST_DATE_CREATED' => 'Eklenme tarihi',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_TYPE' => 'Tür',
    'LBL_WORK_LOG' => 'İş günlüğü',
    'LNK_IMPORT_CASES' => 'Destek kayıtlarını içe aktar',

    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LBL_CASE_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Güncellemeler - Metin', //Field for Case updates with text only
    'LBL_INTERNAL' => 'İç güncelleme',
    'LBL_AOP_CASE_UPDATES' => 'Destek kaydı güncellemeleri',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Gruplanmış destek kaydı güncellemeleri',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Tümünü daralt',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Tümünü genişlet',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Ek dosyalar:',

    'LBL_AOP_CASE_EVENTS' => 'Destek kaydı işlemleri',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Destek kaydı ek dosyaları:',
    'LBL_ADD_CASE_FILE' => 'Dosya ekle',
    'LBL_REMOVE_CASE_FILE' => 'Dosyayı sil',
    'LBL_SELECT_CASE_DOCUMENT' => 'Belgeyi seçin',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Belgeyi temizle',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'İç CRM belgesi',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Dış dosya',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Ekleyen kişi',
    'LBL_CONTACT_CREATED_BY' => 'Ekleyen',
    'LBL_CASE_UPDATE_FORM' => 'Güncellemeler - Ek dosya formu', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Kişi bilinmiyor',
);
