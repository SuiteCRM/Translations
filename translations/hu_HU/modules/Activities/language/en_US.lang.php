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
    'LBL_MODULE_NAME' => 'Tevékenységek',
    'LBL_MODULE_TITLE' => 'Tevékenységek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Tevékenységek keresése',
    'LBL_LIST_FORM_TITLE' => 'Tevékenységek lista',
    'LBL_LIST_SUBJECT' => 'Tárgy',
    'LBL_OVERVIEW' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'FELADATOK', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEGBESZÉLÉSEK', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'HÍVÁSOK', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILEK', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'MEGJEGYZÉSEK', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'NYOMTATÁS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Találkozó',
    'LBL_CALL_TYPE' => 'Hívás',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Jegyzet',
    'LBL_DATA_TYPE_START' => 'Kezdete:',
    'LBL_DATA_TYPE_SENT' => 'Elküldve:',
    'LBL_DATA_TYPE_MODIFIED' => 'Módosítva:',
    'LBL_LIST_CONTACT' => 'Kapcsolattartó',
    'LBL_LIST_RELATED_TO' => 'Társítva',
    'LBL_LIST_DATE' => 'Dátum',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_SUBJECT' => 'Tárgy:',
    'LBL_STATUS' => 'Állapot:',
    'LBL_LOCATION' => 'Helyszín:',
    'LBL_DATE_TIME' => 'Kezdés időpont:',
    'LBL_DATE' => 'Kezdés dátum:',
    'LBL_TIME' => 'Kezdés idő:',
    'LBL_DURATION' => 'Időtartam:',
    'LBL_HOURS_MINS' => '(órák/percek)',
    'LBL_CONTACT_NAME' => 'Kapcsolat neve:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LNK_NEW_CALL' => 'Hívásnapló',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány hozzáadása',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Hívások',
    'LNK_MEETING_LIST' => 'Találkozók',
    'LNK_TASK_LIST' => 'Feladatok',
    'LNK_NOTE_LIST' => 'Jegyzet nézet',
    'LBL_DELETE_ACTIVITY' => 'Biztosan törli ezt a tevékenységet?',
    'ERR_DELETE_RECORD' => 'A bejegyzés törléséhez meg kell adnia a rekordsorszámot.',
    'LBL_INVITEE' => 'Meghívottak',
    'LBL_LIST_DIRECTION' => 'Iránya',
    'LBL_DIRECTION' => 'Iránya',
    'LNK_NEW_APPOINTMENT' => 'Új megbeszélés',
    'LNK_VIEW_CALENDAR' => 'Naptár megtekintés',
    'LBL_OPEN_ACTIVITIES' => 'Nyitott tevékenységek',
    'LBL_HISTORY' => 'Előzmények',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Feladat létrehozása',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Feladat létrehozása',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Találkozó ütemezése',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Találkozó ütemezése',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Hívásnapló',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Feljegyzés vagy csatolmány lérehozása',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Feljegyzés vagy csatolmány lérehozása',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Email archiválása',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Email archiválása',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_DUE_DATE' => 'Határidő dátum',
    'LBL_LIST_LAST_MODIFIED' => 'Utolsó módosítás',
    'LNK_IMPORT_CALLS' => 'Hívások importálása',
    'LNK_IMPORT_MEETINGS' => 'Találkozók importálása',
    'LNK_IMPORT_TASKS' => 'Feladatok importálása',
    'LNK_IMPORT_NOTES' => 'Jegyzetek importálása',
    'LBL_ACCEPT_THIS' => 'Elfogadja?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Nyitott tevékenységek',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',

    'LBL_ACCEPT' => 'Elfogad' /*for 508 compliance fix*/,
);
