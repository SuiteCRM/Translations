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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Zənglər',
    'LBL_MODULE_TITLE' => 'Calls: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Zəng axtarışı',
    'LBL_LIST_FORM_TITLE' => 'Zəng siyahısı',
    'LBL_NEW_FORM_TITLE' => 'Görüş yaradın',
    'LBL_LIST_CLOSE' => 'Bağla',
    'LBL_LIST_SUBJECT' => 'Mövzu',
    'LBL_LIST_CONTACT' => 'Əlaqə',
    'LBL_LIST_RELATED_TO' => 'İlə bağlı',
    'LBL_LIST_RELATED_TO_ID' => 'ID ilə bağlıdır',
    'LBL_LIST_DATE' => 'Başlama tarixi',
    'LBL_LIST_DIRECTION' => 'İstiqamət',
    'LBL_SUBJECT' => 'Mövzu:',
    'LBL_REMINDER' => 'Xatırlatma:',
    'LBL_CONTACT_NAME' => 'Əlaqə:',
    'LBL_DESCRIPTION' => 'Açıqlama:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'İstiqamət:',
    'LBL_DATE' => 'Başlama tarixi:',
    'LBL_DURATION' => 'Müddət:',
    'LBL_DURATION_HOURS' => 'Saat Müddəti:',
    'LBL_DURATION_MINUTES' => 'Dəqiqə Müddəti:',
    'LBL_HOURS_MINUTES' => '(saat/dəqiqə)',
    'LBL_DATE_TIME' => 'Başlama tarixi və vaxtı:',
    'LBL_TIME' => 'Başlama zamanı:',
    'LBL_HOURS_ABBREV' => 'saat',
    'LBL_MINSS_ABBREV' => 'dəq',
    'LNK_NEW_CALL' => 'Zəng Günlüyü',
    'LNK_NEW_MEETING' => 'Görüş cədvəli',
    'LNK_CALL_LIST' => 'Zənglərə baxın',
    'LNK_IMPORT_CALLS' => 'Zəngləri idxal edin',
    'ERR_DELETE_RECORD' => 'Hesabı silmək üçün qeydiyyat nömrəsi göstərilməlidir.',
    'LBL_INVITEE' => 'Dəvət edənlər',
    'LBL_RELATED_TO' => 'Əlaqədar:',
    'LNK_NEW_APPOINTMENT' => 'Görüş yaradın',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planlaşdırma',
    'LBL_ADD_INVITEE' => 'Dəvətçilər əlavə edin',
    'LBL_NAME' => 'Ad',
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_EMAIL' => 'E-poçt',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Daha çox',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Bütün dəvətlilərə e-poçt göndərin',
    'LBL_EMAIL_REMINDER' => 'E-poçt Xatırlatma',
    'LBL_EMAIL_REMINDER_TIME' => 'E-poçt Xatırlatma Vaxtı',
    'LBL_SEND_BUTTON_TITLE' => 'Çağırışları Yadda Saxla və Göndər',
    'LBL_SEND_BUTTON_LABEL' => 'Çağırışları Yadda Saxla və Göndər',
    'LBL_DATE_END' => 'Bitmə tarixi',
    'LBL_REMINDER_TIME' => 'Xatırlatma vaxtı',
    'LBL_EMAIL_REMINDER_SENT' => 'E-poçt xatırladıcısı göndərildi',
    'LBL_SEARCH_BUTTON' => 'Axtar',
    'LBL_ADD_BUTTON' => 'Əlavə et',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zənglər',
    'LNK_SELECT_ACCOUNT' => 'Hesab seçin',
    'LNK_NEW_ACCOUNT' => 'Yeni hesab',
    'LNK_NEW_OPPORTUNITY' => 'Yeni Fürsət',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Rəhbərlər',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_USERS_SUBPANEL_TITLE' => 'İstifadəçilər',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Üzvdür',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Qeydlər',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_LIST_MY_CALLS' => 'Zənglərim',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_ASSIGNED_TO_ID' => 'Təyin edilmiş İstifadəçi',
    'NOTICE_DURATION_TIME' => 'Müddəti 0-dan çox olmalıdır',
    'LBL_CALL_INFORMATION' => '	İcmal', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Sil',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Accept Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Yarat və Artır',
    'LBL_CANCEL_CREATE_INVITEE' => 'İmtina',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Xatırladıcılar',
    'LBL_REMINDERS_ACTIONS' => 'Hərəkətlər:',
    'LBL_REMINDERS_POPUP' => 'Daha çox',
    'LBL_REMINDERS_EMAIL' => 'Dəvətçilərə e-poçt göndərin',
    'LBL_REMINDERS_WHEN' => 'Nə vaxt:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Xatırladıcını silin',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Bütün dəvətçiləri əlavə edin',
    'LBL_REMINDERS_ADD_REMINDER' => 'Xatırladıcı əlavə et',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Tarix',
    'LBL_RESCHEDULE_REASON' => 'Reason',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'İmtina',
    'LBL_SAVE' => 'Saxla',

    'LBL_CALLS_RESCHEDULE' => 'Zənglərin yenidən qurulması',
    'LBL_LIST_STATUS'=>'Vəziyyət',
    'LBL_LIST_DATE_MODIFIED'=>'Dəyişdirilmə Tarixi',
    'LBL_LIST_DUE_DATE'=>'Bitmə tarixi',
    'LBL_RESCHEDULED_BY'=>'tərəfindən',
);
