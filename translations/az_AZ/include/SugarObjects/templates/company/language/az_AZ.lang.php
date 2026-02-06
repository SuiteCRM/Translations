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
    'ERR_DELETE_RECORD' => 'Hesabı silmək üçün qeydiyyat nömrəsi göstərilməlidir.',
    'LBL_ACCOUNT_NAME' => 'Şirkət adı:',
    'LBL_ACCOUNT' => 'Şirkət:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_ADDRESS_INFORMATION' => 'Ünvan məlumatları',
    'LBL_ANNUAL_REVENUE' => 'İllik Gəlir:',
    'LBL_ANY_ADDRESS' => 'Digər Ünvanlar:',
    'LBL_ANY_EMAIL' => 'Başqa email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Əsas olmayan e-poçtlar',
    'LBL_ANY_PHONE' => 'Digər telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'İstifadəçi:',
    'LBL_RATING' => 'Dərəcə',
    'LBL_ASSIGNED_TO' => 'Təyin edilsin:',
    'LBL_ASSIGNED_USER' => 'Təyin edilsin:',
    'LBL_ASSIGNED_TO_ID' => 'Təyin edilsin:',
    'LBL_BILLING_ADDRESS_CITY' => 'Göndərilən şəhər:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Göndərilən Ölkə:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Göndərilən Poçt kodu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Göndərilən Ştat:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Göndərilən Küçə 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Göndərilən Küçə 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Göndərilən Küçə 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Göndərilən Küçə:',
    'LBL_BILLING_ADDRESS' => 'Göndərilən ünvan:',
    'LBL_ACCOUNT_INFORMATION' => 'Şirkət Məlumatları',
    'LBL_CITY' => 'Şəhər:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_COUNTRY' => 'Ölkə:',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi:',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hesablar',
    'LBL_DESCRIPTION_INFORMATION' => 'Məlumatın məzmunu',
    'LBL_DESCRIPTION' => 'Açıqlama:',
    'LBL_DUPLICATE' => 'İstifadəçi hesabının mümkün surəti',
    'LBL_EMAIL' => 'E-poçt Ünvanı:',
    'LBL_EMPLOYEES' => 'İşçilər:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Sənaye:',
    'LBL_LIST_ACCOUNT_NAME' => 'İstifadəçinin adı',
    'LBL_LIST_CITY' => 'Şəhər',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-poçt Ünvanları',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Ştat',
    'LBL_MEMBER_OF' => 'Üzvü:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Təşkilatlara üzv',
    'LBL_NAME' => 'Ad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Başqa e-poçt:',
    'LBL_OTHER_PHONE' => 'Başqa telefon:',
    'LBL_OWNERSHIP' => 'Mülkiyyət:',
    'LBL_PARENT_ACCOUNT_ID' => 'Ana Hesab ID-si',
    'LBL_PHONE_ALT' => 'Alternativ Telefon:',
    'LBL_PHONE_FAX' => 'Telefon Faks:',
    'LBL_PHONE_OFFICE' => 'İş Telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-poçt Ünvanları',
    'LBL_EMAIL_ADDRESSES' => 'E-poçt Ünvanı(ları)',
    'LBL_POSTAL_CODE' => 'Poçt Kodu:',
    'LBL_SAVE_ACCOUNT' => 'Hesabı saxla',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Göndərilən şəhər:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Göndərilən Ölkə:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Göndərilən Poçt kodu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Göndərilən Ştat:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Göndərilən Küçə 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Göndərilən Küçə 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Çatdırılma Küçəsi 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Çatdırılma Küçəsi:',
    'LBL_SHIPPING_ADDRESS' => 'Çatdırılma Ünvanı:',

    'LBL_STATE' => 'Ştat:',
    'LBL_TICKER_SYMBOL' => 'Birja payı işarəsi:',
    'LBL_TYPE' => 'Növ:',
    'LBL_WEBSITE' => 'Veb sayt:',

    'LNK_ACCOUNT_LIST' => 'Hesablar',
    'LNK_NEW_ACCOUNT' => 'Hesab Yarat',

    'MSG_DUPLICATE' => 'Yaratmaq üzrə olduğunuz hesab qeydi artıq mövcud olan hesab qeydinin dublikatı ola bilər. Oxşar adları ehtiva edən hesab qeydləri aşağıda verilmişdir.<br>Bu yeni hesabı yaratmağa davam etmək üçün Hesab Yarat üzərinə klikləyin və ya aşağıda sadalanan mövcud hesabı seçin.',
    'MSG_SHOW_DUPLICATES' => 'Yaratmaq üzrə olduğunuz hesab qeydi artıq mövcud olan hesab qeydinin dublikatı ola bilər. Oxşar adları ehtiva edən hesab qeydləri aşağıda verilmişdir.<br>Bu yeni hesabı yaratmağa davam etmək üçün Saxla üzərinə klikləyin və ya hesabı yaratmadan modula qayıtmaq üçün Ləğv et üzərinə klikləyin.',

    'NTC_DELETE_CONFIRMATION' => 'Bu qeydləri silmək istədiyinizə əminsiniz?',

    'LBL_EDIT_BUTTON' => 'Düzəliş et  ',
    'LBL_REMOVE' => 'Sil',

);
