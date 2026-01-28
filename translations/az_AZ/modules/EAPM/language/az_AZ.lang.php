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
    'LBL_ASSIGNED_TO_ID' => 'Təyin Edilmiş İstifadəçi kimliyi',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM İstifadəçisi',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_MODIFIED' => 'Redaktə etdi',
    'LBL_MODIFIED_NAME' => 'Ad tərəfindən dəyişdirildi',
    'LBL_CREATED' => 'Müəllif',
    'LBL_DESCRIPTION' => 'Açıqlama',
    'LBL_DELETED' => 'Silinib',
    'LBL_NAME' => 'Proqram İstifadəçi Adı',
    'LBL_CREATED_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_MODIFIED_USER' => 'İstifadəçi tərəfindən dəyişdirilib',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Xarici Hesab Siyahısı',
    'LBL_MODULE_NAME' => 'Xarici Hesab',
    'LBL_MODULE_TITLE' => 'Xarici Hesablar',
    'LBL_HOMEPAGE_TITLE' => 'Xarici Hesablarım',
    'LNK_NEW_RECORD' => 'Xarici hesab yaradın',
    'LNK_LIST' => 'Xarici hesablara baxın',
    'LBL_SEARCH_FORM_TITLE' => 'Xarici Mənbə axtarın',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçəyə bax',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_NEW_FORM_TITLE' => 'Yeni Xarici Hesab',
    'LBL_PASSWORD' => 'Proqram şifrəsi',
    'LBL_USER_NAME' => 'Proqram İstifadəçi Adı',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Tətbiq',
    'LBL_API_DATA' => 'API Məlumatları',
    'LBL_API_CONSKEY' => 'İstehlakçı açarı',
    'LBL_API_CONSSECRET' => 'İstehlakçı sirri',
    'LBL_API_OAUTHTOKEN' => 'OAuth Tokeni',
    'LBL_AUTH_UNSUPPORTED' => "Bu avtorizasiya metodu tətbiq tərəfindən dəstəklənmir",
    'LBL_AUTH_ERROR' => 'Bu hesaba qoşulmaq cəhdi uğursuz oldu.',
    'LBL_VALIDATED' => 'Əlaqəli',
    'LBL_ACTIVE' => 'Aktivdir',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Bağlantı qur',
    'LBL_NOTE' => 'Zəhmət olmasa qeyd edin',
    'LBL_CONNECTED' => 'Əlaqəli',

    'LBL_ERR_NO_AUTHINFO' => 'Bu hesab üçün identifikasiya məlumatı yoxdur.',
    'LBL_ERR_NO_TOKEN' => 'Bu hesab üçün etibarlı giriş tokenləri yoxdur.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Siz hazırda {0} hesabınıza qoşulmamısınız. Hesabınıza daxil olmaq və əlaqəni yenidən aktivləşdirmək üçün OK düyməsini sıxın.',

    'LBL_CLICK_TO_EDIT' => 'Redaktə etmək üçün düyməni sıxın',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Yenidən təsdiq edin',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Bu proqram üçün hesab artıq mövcuddur. Mövcud hesabı bərpa etdik.',
    'LBL_OMIT_URL' => '(http:// və ya https:// ötürün)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Hesab məlumatlarınızı təqdim etmək və SuiteCRM vasitəsilə hesaba girişə icazə vermək üçün səhifəyə yönləndirmək üçün <b>Qoşulun</b> üzərinə klikləyin. Qoşulduqdan sonra yenidən SuiteCRM-ə yönləndiriləcəksiniz.',
    'LBL_BASIC_SAVE_NOTICE' => 'Bu hesabı SuiteCRM-ə qoşmaq üçün <b>Qoşulun</b> klikləyin.',
    'LBL_ERR_POPUPS_DISABLED' => 'Qoşulmaq üçün brauzerin pop-up pəncərələrini aktiv edin və ya "{0}" vebsaytı üçün istisnalar siyahısına əlavə edin.',

    'LBL_API_OAUTHSECRET' => 'API OAuth şifrəsi',
);
