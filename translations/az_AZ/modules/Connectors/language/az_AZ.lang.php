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

    'LBL_ADMINISTRATION_MAIN' => 'Bağlayıcı Parametrləri',
    'LBL_AVAILABLE' => 'Mövcud',
    'LBL_BACK' => '< Geri',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Bəzi tələb olunan sahələr boş qalıb. Dəyişiklikləri yadda saxlamağa davam edilsin?',
    'LBL_CONNECTOR_FIELDS' => 'Bağlayıcı sahələri',
    'LBL_DATA' => 'Data',
    'LBL_DEFAULT' => 'Standart',
    'LBL_DISABLED' => 'Deaktivdir',
    'LBL_ENABLED' => 'Aktivdir',
    'LBL_EXTERNAL' => 'İstifadəçilərə bu bağlayıcıya xarici hesab qeydləri yaratmağa imkan verin.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Bu bağlayıcıdan istifadə etmək üçün xassələr də Set Connector Properties parametrləri səhifəsində təyin edilməlidir.',
    'LBL_MERGE' => 'Birləşdir',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Bağlayıcıları aktivləşdirin',
    'LBL_MODIFY_DISPLAY_DESC' => 'Hər bir bağlayıcı üçün hansı modulların aktiv olduğunu seçin.',
    'LBL_MODULE_FIELDS' => 'Modul Sahələri',
    'LBL_MODIFY_MAPPING_TITLE' => 'Xəritə Bağlayıcı Sahələri',
    'LBL_MODIFY_MAPPING_DESC' => 'Hansı bağlayıcı məlumatlarına baxılıb və modul qeydlərinə birləşdirilə biləcəyini müəyyən etmək üçün birləşdirici sahələrini modul sahələrinə uyğunlaşdırın.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Bağlayıcı xüsusiyyətlərini təyin edin',
    'LBL_MODIFY_PROPERTIES_DESC' => 'URL-lər və API açarları daxil olmaqla, hər bir bağlayıcıüçün xassələri konfiqurasiya edin.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Bağlayıcı Axtarışını idarə edin',
    'LBL_MODIFY_SEARCH' => 'Axtar',
    'LBL_MODIFY_SEARCH_DESC' => 'Hər bir modul üçün məlumat axtarmaq üçün istifadə ediləcək birləşdirici sahələri seçin.',
    'LBL_MODULE_NAME' => 'Konnektorlar',
    'LBL_NO_PROPERTIES' => 'Bu bağlayıcı üçün konfiqurasiya edilə bilən xüsusiyyətlər yoxdur.',
    'LBL_SAVE' => 'Saxla',
    'LBL_SUMMARY' => 'Yekun',
    'LBL_STEP1' => 'Məlumatı axtarın və Baxın',
    'LBL_STEP2' => 'Qeydləri ilə birləşdirin',
    'LBL_TEST_SOURCE' => 'Bağayıcının test edilməsi',
    'LBL_TEST_SOURCE_FAILED' => 'Test uğursuz oldu',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test Uğurlu oldu',
    'LBL_TITLE' => 'Data Birləşməsi',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Xəta: Qeyd üçün əlavə məlumat tapılmadı.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Bu bağlayıcı üçün heç bir modul aktivləşdirilməyib. Bağlayıcıları Aktivləşdir səhifəsində bu bağlayıcı üçün modul seçin.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Xəta: Axtarış sahələri müəyyən edilmiş heç bir birləşdirici aktivləşdirilməyib.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Xəta: Modul və birləşdirici üçün müəyyən edilmiş axtarış sahələri yoxdur. Zəhmət olmasa sistem administratoru ilə əlaqə saxlayın.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: There are no module fields that have been mapped for display in the results. Please contact the system administrator.',
    'LBL_INFO_INLINE' => 'Məlumat' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Bağla' /*for 508 compliance fix*/,

);
