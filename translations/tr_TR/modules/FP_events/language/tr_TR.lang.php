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
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_ID' => 'Kod',
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
    'LBL_REMOVE' => 'Sil',
    'LBL_LIST_FORM_TITLE' => 'Etkinlik listesi',
    'LBL_MODULE_NAME' => 'Etkinlik',
    'LBL_MODULE_TITLE' => 'Etkinlik',
    'LBL_HOMEPAGE_TITLE' => 'Etkinliğim',
    'LNK_NEW_RECORD' => 'Etkinlik ekle',
    'LNK_LIST' => 'Etkinlikleri görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Etkinlik arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni etkinlik',
    'LBL_LOCATION' => 'Konum',
    'LBL_START_DATE' => 'başlangıç tarihi',
    'LBL_END_DATE' => 'Bitiş tarihi ve saati',
    'LBL_BUDGET' => 'Bütçe',
    'LBL_DATE' => 'Başlangıç tarihi',
    'LBL_DATE_END' => 'Bitiş tarihi',
    'LBL_DURATION' => 'Süre',
    'LBL_INVITE_TEMPLATES' => 'Çağrı e-postası kalıbı',
    'LBL_INVITE_PDF' => 'Çağrıları gönder',
    'LBL_EDITVIEW_PANEL1' => 'Etkinlik ayrıntıları',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Temsilciler',
    'LBL_ACCEPT_REDIRECT' => 'Yönlendirme adresini kabul et',
    'LBL_DECLINE_REDIRECT' => 'Yönlendirme adresini reddet',
    'LBL_SELECT_DELEGATES' => 'Temsilcileri seçin',
    'LBL_SELECT_DELEGATES_TITLE' => 'Temsilcileri seçin:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Hedef listesi',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Hedefler',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kişiler',
    'LBL_SELECT_DELEGATES_LEADS' => 'Potansiyeller',
    'LBL_MANAGE_DELEGATES' => 'Temsilci yönetimi',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Temsilci yönetimi:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Kabul edilenler yönetimi',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Kabul edilenler yönetimi:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Onaylandı',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Reddedildi',
    'LBL_MANAGE_POPUP_ERROR' => 'Herhangi bir temsilci seçilmemiş.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Çağrılmış',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Çağrılmamış',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Katılmış',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Katılmamış',
    'LBL_SUCCESS_MSG' => 'Tüm çağrılar gönderildi.',
    'LBL_ERROR_MSG_1' => 'Bağlantılı tüm kişiler zaten çağrılmış.',
    'LBL_ERROR_MSG_2' => 'Çağrı e-postaları gönderilemedi! Lütfen e-posta ayarlarınızı denetleyin.',
    'LBL_ERROR_MSG_3' => '10 taneden fazla e-posta gönderilemedi. Lütfen çağırdığınız tüm kişilerin e-posta adreslerinin geçerli olup olmadığını denetleyin (suitecrm.log dosyasına bakın).',
    'LBL_ERROR_MSG_4' => ' e-posta gönderilemedi. Lütfen çağırdığınız tüm kişilerin e-posta adreslerinin geçerli olup olmadığını denetleyin (suitecrm.log dosyasına bakın).', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'E-posta kalıbı geçersiz',
    'LBL_EMAIL_INVITE' => 'E-posta çağrısı',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kişiler',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Konumlar',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Potansiyeller',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Hedefler',

    'LBL_HOURS_ABBREV' => 's',
    'LBL_MINSS_ABBREV' => 'd',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Temsilciler',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Ad',
    'LBL_ACCOUNT_NAME' => 'Kuruluş',
    'LBL_SIGNATURE' => 'İmza',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Çağrılmış',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Durum',

    'LBL_ACTIVITY_STATUS' => 'İşlem durumu',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Etkinlikler başlığından etkinlik konumları',
    // Email links
    'LBL_ACCEPT_LINK' => 'Kabul et',
    'LBL_DECLINE_LINK' => 'Reddet',
    
);
