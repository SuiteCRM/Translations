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
    //module
    'LBL_MODULE_NAME' => 'Belgeler',
    'LBL_MODULE_TITLE' => 'Belgeler: Giriş',
    'LNK_NEW_DOCUMENT' => 'Belge ekle',
    'LNK_DOCUMENT_LIST' => 'Belgeleri görüntüle',
    'LBL_DOC_REV_HEADER' => 'Belge sürümleri',
    'LBL_SEARCH_FORM_TITLE' => 'Belge arama',
    //vardef labels
    'LBL_NAME' => 'Belge adı',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY' => 'Alt kategori',
    'LBL_STATUS' => 'Durum',
    'LBL_CREATED_BY' => 'Ekleyen',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_DELETED' => 'Silindi',
    'LBL_MODIFIED' => 'Değiştiren kodu',
    'LBL_MODIFIED_USER' => 'Düzenleyen',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_REVISIONS' => 'Sürümler',
    'LBL_RELATED_DOCUMENT_ID' => 'İlişkili belge kodu',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'İlişkili belge sürümü kodu',
    'LBL_IS_TEMPLATE' => 'Kalıp',
    'LBL_TEMPLATE_TYPE' => 'Belge türü',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi:',
    'LBL_REVISION_NAME' => 'Revizyon no',
    'LBL_MIME' => 'MIME türü',
    'LBL_REVISION' => 'Revizyon',
    'LBL_DOCUMENT' => 'İlişkili belge',
    'LBL_LATEST_REVISION' => 'Son revizyon',
    'LBL_CHANGE_LOG' => 'Değişiklik günlüğü',
    'LBL_ACTIVE_DATE' => 'Yayınlanma tarihi',
    'LBL_EXPIRATION_DATE' => 'Son geçerlilik tarihi',
    'LBL_FILE_EXTENSION' => 'Dosya uzantısı',
    'LBL_LAST_REV_MIME_TYPE' => 'Son sürümün MIME türü',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Belirtilmemiş',
    'LBL_HOMEPAGE_TITLE' => 'Belgelerim',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Yeni belge',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Belge adı:',
    'LBL_FILENAME' => 'Dosya adı:',
    'LBL_LIST_FILENAME' => 'Dosya:',
    'LBL_DOC_VERSION' => 'Revizyon:',
    'LBL_FILE_UPLOAD' => 'Dosya:',

    'LBL_CATEGORY_VALUE' => 'Kategori:',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY_VALUE' => 'Alt kategori:',
    'LBL_DOC_STATUS' => 'Durum:',
    'LBL_LAST_REV_CREATOR' => 'Sürümü ekleyen:',
    'LBL_LASTEST_REVISION_NAME' => 'Son sürüm adı:',
    'LBL_SELECTED_REVISION_NAME' => 'Seçilmiş sürümün adı:',
    'LBL_CONTRACT_STATUS' => 'Sözleşme durumu:',
    'LBL_CONTRACT_NAME' => 'Sözleşme adı:',
    'LBL_DET_RELATED_DOCUMENT' => 'İlişkili belge:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "İlişkili belge sürümü:",
    'LBL_DET_IS_TEMPLATE' => 'Kalıp mı? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Belge türü:',
    'LBL_DOC_DESCRIPTION' => 'Açıklama:',
    'LBL_DOC_ACTIVE_DATE' => 'Yayınlanma tarihi:',
    'LBL_DOC_EXP_DATE' => 'Son geçerlilik tarihi:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Belge listesi',
    'LBL_LIST_DOCUMENT' => 'Belge',
    'LBL_LIST_SUBCATEGORY' => 'Alt kategori',
    'LBL_LIST_REVISION' => 'Revizyon',
    'LBL_LIST_LAST_REV_CREATOR' => 'Yayınlayan',
    'LBL_LIST_LAST_REV_DATE' => 'Revizyon tarihi',
    'LBL_LIST_VIEW_DOCUMENT' => 'Görünüm',
    'LBL_LIST_ACTIVE_DATE' => 'Yayınlanma tarihi',
    'LBL_LIST_EXP_DATE' => 'Son geçerlilik tarihi',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LINKED_ID' => 'Bağlantı kodu',
    'LBL_SELECTED_REVISION_ID' => 'Seçilmiş sürümün kodu',
    'LBL_LATEST_REVISION_ID' => 'Son sürüm kodu',
    'LBL_SELECTED_REVISION_FILENAME' => 'Seçilmiş sürümün dosya adı',
    'LBL_FILE_URL' => 'Dosya adresi',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategori:',
    'LBL_SF_SUBCATEGORY' => 'Alt kategori:',

    'DEF_CREATE_LOG' => 'Belge eklendi',

    //error messages
    'ERR_DOC_NAME' => 'Belge adı',
    'ERR_DOC_ACTIVE_DATE' => 'Yayınlanma tarihi',
    'ERR_FILENAME' => 'Dosya adı',
    'ERR_DOC_VERSION' => 'Belge sürümü',
    'ERR_DELETE_CONFIRM' => 'Bu belge sürümünü silmek istediğinize emin misiniz?',
    'ERR_DELETE_LATEST_VERSION' => 'Bir belgenin son sürümünü silme izniniz yok.',
    'LNK_NEW_MAIL_MERGE' => 'Mektup birleştirme',
    'ERR_MISSING_FILE' => 'Belgenin bir dosyası yok. Büyük olasılıkla yükleme sırasında bir sorun çıktı. Dosyayı yeniden yüklemeyi deneyin ya da sistem yöneticinizle görüşün.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ad',
    'LBL_LIST_IS_TEMPLATE' => 'Kalıp mı?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Belge türü',
    'LBL_LAST_REV_CREATE_DATE' => 'Son sürümün eklenme tarihi',
    'LBL_CONTRACTS' => 'Sözleşmeler',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_DOCUMENT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Belge kaynağı kodu',
    'LBL_DOC_TYPE' => 'Kaynak',
    'LBL_DOC_TYPE_POPUP' => 'Bu belgenin yükleneceği ve görüntüleneceği<br>bir kaynak seçin.',
    'LBL_DOC_URL' => 'Belge kaynağı adresi',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dosya adı',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'En son değiştirilen ilk 20 dosyayı ters sıralama ile aşağıda görebilirsiniz. Başka dosyalar bulmak için Arama özelliğini kullanın.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Dosya adı',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Kullanıcı geçersiz bir dış API uygulamasına ({0}) erişmeye çalıştı',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Dış API uygulamasında ({0}) oturum açılamadı',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Destek kayıtları',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
);
