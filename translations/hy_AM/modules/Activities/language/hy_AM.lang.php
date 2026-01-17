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
    'LBL_MODULE_NAME' => 'Գործունեություն',
    'LBL_MODULE_TITLE' => 'Գործունեություն․ Գլխավոր',
    'LBL_SEARCH_FORM_TITLE' => 'Գործունեության որոնում',
    'LBL_LIST_FORM_TITLE' => 'Գործունեությունների ցուցակը',
    'LBL_LIST_SUBJECT' => 'Թեմա',
    'LBL_OVERVIEW' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'TASKS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Էլ-փոստեր', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Հանդիպում',
    'LBL_CALL_TYPE' => 'Հեռախոսազանգ',
    'LBL_EMAIL_TYPE' => 'Էլ-փոստ',
    'LBL_NOTE_TYPE' => 'Նշում',
    'LBL_DATA_TYPE_START' => 'Մեկնարկ․',
    'LBL_DATA_TYPE_SENT' => 'Ուղարկած է․',
    'LBL_DATA_TYPE_MODIFIED' => 'Փոփոխված է․',
    'LBL_LIST_CONTACT' => 'Կոնտակտ',
    'LBL_LIST_RELATED_TO' => 'Առնչվում է',
    'LBL_LIST_DATE' => 'Ամսաթիվ',
    'LBL_LIST_CLOSE' => 'Փակել',
    'LBL_SUBJECT' => 'Թեմա',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_LOCATION' => 'Տեղանք.',
    'LBL_DATE_TIME' => 'Մեկնարկի ամսաթիվը և ժամանակը․',
    'LBL_DATE' => 'Մեկնարկի ամսաթիվը',
    'LBL_TIME' => 'Մեկնարկի ժամանակը․',
    'LBL_DURATION' => 'Տևողություն․',
    'LBL_HOURS_MINS' => '(ժամ/րոպե)',
    'LBL_CONTACT_NAME' => 'Կոնտակտի անունը․ ',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LNK_NEW_CALL' => 'Պլանավորել զանգ',
    'LNK_NEW_MEETING' => 'Պլանավորել հանդիպում',
    'LNK_NEW_TASK' => 'Ստեղծել խնդիր',
    'LNK_NEW_NOTE' => 'Ստեղծել գրառում կամ ավելացնել կցված ֆայլ',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Հեռախոսազանգեր',
    'LNK_MEETING_LIST' => 'Հանդիպումների դիտում',
    'LNK_TASK_LIST' => 'Դիտել խնդիրները',
    'LNK_NOTE_LIST' => 'Դիտել նշումները',
    'LBL_DELETE_ACTIVITY' => 'Համոզվա՞ծ եք, որ ցանկանում եք ջնջել այս գործունեությունը:',
    'ERR_DELETE_RECORD' => 'Հաշիվը հեռացնելուց առաջ դուք պետք է նշեք գրառման համարը։',
    'LBL_INVITEE' => 'Հրավիրվածներ',
    'LBL_LIST_DIRECTION' => 'Ուղղություն',
    'LBL_DIRECTION' => 'Ուղղություն',
    'LNK_NEW_APPOINTMENT' => 'Նոր հանդիպում',
    'LNK_VIEW_CALENDAR' => 'Դիտել օրացույցը',
    'LBL_OPEN_ACTIVITIES' => 'Բաց գործունեություն',
    'LBL_HISTORY' => 'Պատմություն',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Ստեղծել խնդիր',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Ստեղծել խնդիր',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Պլանավորել հանդիպում',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Պլանավորել հանդիպում',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Պլանավորել զանգ',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Ստեղծել գրառում կամ կցված ֆայլ',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Ստեղծել գրառում կամ կցված ֆայլ',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Արխիվացնել էլ․փոստը',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Արխիվացնել էլ․փոստը',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LIST_DUE_DATE' => 'Կատարման ամսաթիվը',
    'LBL_LIST_LAST_MODIFIED' => 'Վերջին փոփոխությունը',
    'LNK_IMPORT_CALLS' => 'Զանգերի ներմուծում',
    'LNK_IMPORT_MEETINGS' => 'Հանդիպումների ներմուծում',
    'LNK_IMPORT_TASKS' => 'Առաջադրանքների ներմուծում',
    'LNK_IMPORT_NOTES' => 'Նշումների ներմուծում',
    'LBL_ACCEPT_THIS' => 'Ընդունե՞լ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Բաց գործունեություն',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',

    'LBL_ACCEPT' => 'Ընդունել' /*for 508 compliance fix*/,
);
