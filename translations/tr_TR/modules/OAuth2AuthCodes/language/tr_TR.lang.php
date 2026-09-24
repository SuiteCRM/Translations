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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2 kimlik doğrulama kodları',
    'LBL_MODULE_TITLE' => 'OAuth2 kimlik doğrulama kodları',
    'LBL_MODULE_ID'=> 'OAuth2 kimlik doğrulama kodları',
    'LBL_CLIENT' => 'İstemci',
    'LBL_SCOPES' => 'Kapsamlar',
    'LBL_AUTO_AUTHORIZE' => 'Otomatik olarak kabul et',
    'LBL_USER' => 'Kullanıcı kimliği doğrulanıyor',
    'LBL_OAUTH_AUTHORIZE_AND_SAVE' => 'Kimliği doğrula',
    'LBL_OAUTH_AUTHORIZE_ONCE' => 'Kimliği bir kez doğrula',
    'LBL_OAUTH_ABORT' => 'Reddet',
    'LBL_OAUTH_CLIENT' => 'İstemci:',
    'LBL_OAUTH_WHO_IS_REQUESTING' => 'İstekte bulunan kim (istemci):',
    'LBL_AUTH_CODE_EXPIRES' => 'Kimlik doğrulama kodunun geçerlilik sonu',
    'LBL_OAUTH_REDIRECT' => 'Yönlendirme adresi',
    'LBL_CURRENT_USER' => 'Kullanıcı',
    'LBL_OAUTH_REQUESTED_PERMISSIONS' => 'İstenilen izinler',
    'LBL_OAUTH_ACCESS_TO_USER_INFO' => 'CRM üzerinde görebileceğiniz tüm bilgilere erişim',
    'LBL_OAUTH_INFO_1' => 'Bu uygulama SuiteCRM hesabınıza erişmek istiyor.',
    'LBL_OAUTH_INFO_2' => 'İstemciyi tanımıyorsanız veya güvenmiyorsanız, erişim izni vermemelisiniz.',
    'LBL_OAUTH_BACK_TO_HOME' => '<< Panoya dönmek için buraya tıklayın.',
    'LBL_INVALID_REQUEST' => 'İstek geçersiz',
    'LBL_DELETE_BUTTON_LABEL' => 'Geçersiz kıl ve sil',
    'LBL_DELETE_BUTTON_TITLE' => 'Geçersiz kıl ve sil',
    'LBL_DELETE' => 'Geçersiz kıl ve sil',
    'LBL_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz? Artık istemcinin kimlik doğrulama kodu kullanmasına izin verilmeyecek.',

    'LNK_OAUTH2_TOKEN_LIST'=> 'OAuth2 kodlarının listesi',
    'LNK_OAUTH2_CLIENT_LIST' => 'OAuth2 istemcilerinin listesi',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'OAuth2 kimlik doğrulama kodlarını listele',

    'LNK_NEW_OAUTH2_CLIENT' => 'OAuth2 istemcisi ekle',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Yeni parola istemcisi',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Yeni istemci kimlik doğrulama istemcisi',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Yeni gizli istemci',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Yeni kimlik doğrulama istemcisi',

    'LBL_OAUTH_AUTHORIZATION_REQUESTED' => 'İzin istendi',
    'LBL_OAUTH_AUTHORIZE' => 'Kimliği doğrula',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS' => 'Modül verileri',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS_DESC' => 'Erişiminiz olan tüm modüllerin verilerine tam erişim sağlar',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS' => 'Kişisel kullanıcı verileri',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS_DESC' => 'Ad ve e-posta adresi gibi kişisel kullanıcı verilerine erişim sağlar',
    'LBL_OAUTH_AUTHORIZING_WILL_REDIRECT' => 'İzin şuraya yönlendirilecek:',
    'LBL_OAUTH_NOTE' => 'Not:',
    'LBL_OAUTH_CLIENT_INFO_DESCRIPTION' => 'hesabınıza erişmek istiyor',
    'LBL_OAUTH_CLIENT_INFO' => 'İstemci bilgileri',
];
