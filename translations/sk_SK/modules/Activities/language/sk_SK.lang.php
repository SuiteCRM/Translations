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
    'LBL_MODULE_NAME' => 'Aktivity',
    'LBL_MODULE_TITLE' => 'Aktivity: Hlavná stránka',
    'LBL_SEARCH_FORM_TITLE' => 'Prehľadávanie aktivít',
    'LBL_LIST_FORM_TITLE' => 'Zoznam aktivít',
    'LBL_LIST_SUBJECT' => 'Predmet',
    'LBL_OVERVIEW' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Úlohy', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Schôdzky/Mítingy', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'E-maily', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Poznámky', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Tlač', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Schôdzka',
    'LBL_CALL_TYPE' => 'Volanie',
    'LBL_EMAIL_TYPE' => 'E-mail',
    'LBL_NOTE_TYPE' => 'Poznámky',
    'LBL_DATA_TYPE_START' => 'štart',
    'LBL_DATA_TYPE_SENT' => 'odoslané',
    'LBL_DATA_TYPE_MODIFIED' => 'upravené',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Súvisiaci k',
    'LBL_LIST_DATE' => 'Dátum',
    'LBL_LIST_CLOSE' => 'Uzavrieť',
    'LBL_SUBJECT' => 'Predmet:',
    'LBL_STATUS' => 'Stav:',
    'LBL_LOCATION' => 'Poloha:',
    'LBL_DATE_TIME' => 'Dátum a čas zahájenia:',
    'LBL_DATE' => 'Dátum začiatku:',
    'LBL_TIME' => 'Čas začiatku:',
    'LBL_DURATION' => 'Trvanie:',
    'LBL_HOURS_MINS' => '(hodín/munút)',
    'LBL_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LNK_NEW_CALL' => 'Naplánovať hovor',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_NEW_NOTE' => 'Vytvoriť poznámku alebo pridať prílohu',
    'LNK_NEW_EMAIL' => 'Vytvoriť archivovaný Email',
    'LNK_CALL_LIST' => 'Zobrazenie volaní',
    'LNK_MEETING_LIST' => 'Zobrazenie schôdzok',
    'LNK_TASK_LIST' => 'Zobrazenie úloh',
    'LNK_NOTE_LIST' => 'Zobrazenie poznámok',
    'LBL_DELETE_ACTIVITY' => 'Ste si istí, že chcete zmazať túto činnosť?',
    'ERR_DELETE_RECORD' => 'K odstráneniu účtu, musíte zadať číslo záznamu.',
    'LBL_INVITEE' => 'Pozvaní',
    'LBL_LIST_DIRECTION' => 'Zoradenie:',
    'LBL_DIRECTION' => 'Zoradenie:',
    'LNK_NEW_APPOINTMENT' => 'Nové stretnutie',
    'LNK_VIEW_CALENDAR' => 'Zobrazenie kalendára',
    'LBL_OPEN_ACTIVITIES' => 'Otvoriť aktivity',
    'LBL_HISTORY' => 'História',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Vytvoriť úlohu',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Vytvoriť úlohu',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Harmonogram rokovaní',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Harmonogram rokovaní',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Naplánovať hovor',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Vytvoriť poznámku alebo prílohu',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Vytvoriť poznámku alebo prílohu',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivovať správu',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivovať správu',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_DUE_DATE' => 'do dátumu',
    'LBL_LIST_LAST_MODIFIED' => 'Posledná zmena',
    'LNK_IMPORT_CALLS' => 'Import volaní',
    'LNK_IMPORT_MEETINGS' => 'Import schôdzok',
    'LNK_IMPORT_TASKS' => 'Import úloh',
    'LNK_IMPORT_NOTES' => 'Import poznámok',
    'LBL_ACCEPT_THIS' => 'Prijať?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Otvoriť aktivity',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',

    'LBL_ACCEPT' => 'Akceptovaný' /*for 508 compliance fix*/,
);
