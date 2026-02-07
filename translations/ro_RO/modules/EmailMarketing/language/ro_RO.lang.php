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
    'LBL_REPLY_ADDR' => 'Adresa de răspuns: ',
    'LBL_REPLY_NAME' => 'Nume expeditor: ',

    'LBL_MODULE_NAME' => 'Marketing prin email',
    'LBL_MODULE_TITLE' => 'Marketing prin email: Start',
    'LBL_LIST_FORM_TITLE' => 'Campanii de marketing prin email',
    'LBL_NAME' => 'Nume',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_FROM_ADDR' => 'De la adresa',
    'LBL_LIST_DATE_START' => 'Dată Început',
    'LBL_LIST_TEMPLATE_NAME' => 'Șablon e-mail',
    'LBL_LIST_STATUS' => 'Stare',
    'LBL_STATUS' => 'Stare',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Nume Șablon',
    'LBL_DATE_ENTERED' => 'Data de începere',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de: ',
    'LBL_CREATED' => 'Creat de: ',
    'LBL_MESSAGE_FOR' => 'Trimite acest mesaj către:',

    'LBL_FROM_NAME' => 'De la nume: ',
    'LBL_FROM_ADDR' => 'De la adresa de e-mail: ',
    'LBL_DATE_START' => 'Dată Început',
    'LBL_SEND_DATE' => 'Data trimiteri',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Momentul începerii',
    'LBL_START_DATE_TIME' => 'Data și ora de început: ',
    'LBL_TEMPLATE' => 'Șablon de e-mail: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modificat de: ',
    'LBL_CREATED_BY' => 'Creat de: ',

    'LNK_NEW_CAMPAIGN' => 'Creare campanie',
    'LNK_CAMPAIGN_LIST' => 'Campanii',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Creează listă de ținte',
    'LNK_PROSPECT_LIST_LIST' => 'Liste de ținte',
    'LNK_NEW_PROSPECT' => 'Creare țintă',
    'LNK_PROSPECT_LIST' => 'Ținte',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Marketing prin email',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Creați',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editează',
    'LBL_FROM_MAILBOX' => 'Din căsuța poștală',
    'LBL_FROM_MAILBOX_NAME' => 'Folosește cutia poștală:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Cont de e-mail de ieșire:',
    'LBL_FROM' => 'De la',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste de ținte',
    'LBL_ALL_PROSPECT_LISTS' => 'Selectați pentru a alege lista (listele) țintă din campanie.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Lista (listele) țintă legate de acest mesaj.',
    'LBL_PROSPECT_LIST_NAME' => 'Numele listei țintă',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Liste vizate',
    'LBL_MODULE_SEND_TEST' => 'Campanie: Trimite test',
    'LBL_MODULE_SEND_EMAILS' => 'Campanie: Trimite e-mailuri',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Vă rugăm să selectați mesajele campaniei pe care doriți să le testați:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Vă rugăm să selectați mesajele din campanie pe care doriți să le programați pentru distribuție la data și ora specificate:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Trimite',
    'LBL_SEND_BUTTON_LABEL' => 'Trimite',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Program',
    'LBL_ERROR_ON_MARKETING' => 'Lipsă câmp (câmpuri) necesare',

    'LBL_CAMPAIGN_ID' => 'ID campanie',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID cont de email de ieșire',
    'LBL_EMAIL_TEMPLATE' => 'Șablon e-mail',
    'LBL_PROSPECT_LISTS' => 'Liste de prospecte',
    'LBL_OVERVIEW' => 'Elementar',
    'LBL_EMAIL_CONFIG' => 'Setări Email',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'E-MAIL',
    'LBL_BODY' => 'Corp',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Sondaj',
    'LBL_SCHEDULE' => 'Program',
    'LBL_DELETE_TEST_ENTRIES' => 'Șterge intrările de test',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Utilizatori',
    'LBL_SEND_TEST_EMAIL' => 'Trimite un e-mail de testare',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Coada mesaje',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Rulați procesul nocturn pentru e-mailurile de campanie respinse',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Programatori',
    'LBL_INBOUND_EMAIL' => 'E-mail de intrare',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
