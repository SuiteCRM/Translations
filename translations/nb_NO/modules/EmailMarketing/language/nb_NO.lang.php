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
    'LBL_REPLY_ADDR' => 'Svar-til adresse',
    'LBL_REPLY_NAME' => '\"Svar-til\" navn',

    'LBL_MODULE_NAME' => 'Markedsføring gjennom e-post',
    'LBL_MODULE_TITLE' => 'Markedsføring gjennom e-post: Forside',
    'LBL_LIST_FORM_TITLE' => 'E-post-kampanjer',
    'LBL_NAME' => 'Navn',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_FROM_ADDR' => 'Fra e-post',
    'LBL_LIST_DATE_START' => 'Start dato',
    'LBL_LIST_TEMPLATE_NAME' => 'Mal for e-post:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status',
    'LBL_TEMPLATE_NAME' => 'Navn på mal',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_MODIFIED' => 'Endret av: ',
    'LBL_CREATED' => 'Opprettet av:',
    'LBL_MESSAGE_FOR' => 'Send denne meldingen til:',

    'LBL_FROM_NAME' => 'Fra navn: ',
    'LBL_FROM_ADDR' => 'Fra e-post adresse',
    'LBL_DATE_START' => 'Start dato',
    'LBL_SEND_DATE' => 'Sendt Dato',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Starttidspunkt',
    'LBL_START_DATE_TIME' => 'Start dato & tid: ',
    'LBL_TEMPLATE' => 'Mal for e-post: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Endret av: ',
    'LBL_CREATED_BY' => 'Opprettet av:',

    'LNK_NEW_CAMPAIGN' => 'Ny kampanje',
    'LNK_CAMPAIGN_LIST' => 'Kampanjer',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Ny liste over mål',
    'LNK_PROSPECT_LIST_LIST' => 'Mållister',
    'LNK_NEW_PROSPECT' => 'Nytt mål',
    'LNK_PROSPECT_LIST' => 'Mål',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Markedsføring gjennom e-post',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Ny',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Rediger',
    'LBL_FROM_MAILBOX' => 'Fra postkasse',
    'LBL_FROM_MAILBOX_NAME' => 'Bruk postkasse:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Utgående e-postkonto:',
    'LBL_FROM' => 'Fra',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mållister',
    'LBL_ALL_PROSPECT_LISTS' => 'Alle lister over mål i kampanjen.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Alle lister over mål som har med denne meldingen å gjøre.',
    'LBL_PROSPECT_LIST_NAME' => 'Målliste navn',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Sende',
    'LBL_SEND_BUTTON_LABEL' => 'Sende',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Planlegg',
    'LBL_ERROR_ON_MARKETING' => 'Mangler nødvendig(e) felt',

    'LBL_CAMPAIGN_ID' => 'Kampanje ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Utgående e-post konto-ID',
    'LBL_EMAIL_TEMPLATE' => 'Mal for e-post:',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',
    'LBL_OVERVIEW' => 'Grunnleggende',
    'LBL_EMAIL_CONFIG' => 'E-post konfigurasjon',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Hoveddel',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Survey',
    'LBL_SCHEDULE' => 'Planlegg',
    'LBL_DELETE_TEST_ENTRIES' => 'Fjern testelementer',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Brukere',
    'LBL_SEND_TEST_EMAIL' => 'Send test e-post',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Meldingskø',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Kjør nattlige prosesser på returnert kampanje-e-post',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Planleggere',
    'LBL_INBOUND_EMAIL' => 'Innkommende e-post',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
