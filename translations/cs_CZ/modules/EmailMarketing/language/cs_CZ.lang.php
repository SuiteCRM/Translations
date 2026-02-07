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
    'LBL_REPLY_ADDR' => 'Adresa pro odpověď: ',
    'LBL_REPLY_NAME' => 'Jméno pro odpověď: ',

    'LBL_MODULE_NAME' => 'Emailový marketing',
    'LBL_MODULE_TITLE' => 'E-mailový marketing: Domů',
    'LBL_LIST_FORM_TITLE' => 'Marketinkových emailové kampaně',
    'LBL_NAME' => 'Jméno',
    'LBL_LIST_NAME' => 'Jméno',
    'LBL_LIST_FROM_ADDR' => 'Adresa odesílatele:',
    'LBL_LIST_DATE_START' => 'Datum začátku',
    'LBL_LIST_TEMPLATE_NAME' => 'Vzor zprávy',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_STATUS' => 'Stav',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Stav:',
    'LBL_TEMPLATE_NAME' => 'Název šablony',
    'LBL_DATE_ENTERED' => 'Zahájeno',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil: ',
    'LBL_CREATED' => 'Vytvořil: ',
    'LBL_MESSAGE_FOR' => 'Odeslat tuto zprávu:',

    'LBL_FROM_NAME' => 'Jméno odesílatele: ',
    'LBL_FROM_ADDR' => 'Adresa odesílatele: ',
    'LBL_DATE_START' => 'Datum začátku',
    'LBL_SEND_DATE' => 'Datum odeslání',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Čas zahájení',
    'LBL_START_DATE_TIME' => 'Datum a čas začátku: ',
    'LBL_TEMPLATE' => 'Šablona zprávy: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Změnil: ',
    'LBL_CREATED_BY' => 'Vytvořil: ',

    'LNK_NEW_CAMPAIGN' => 'Vytvořit kampaň',
    'LNK_CAMPAIGN_LIST' => 'Kampaně',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Vytvořit seznam cílů',
    'LNK_PROSPECT_LIST_LIST' => 'Seznam skupin cílů',
    'LNK_NEW_PROSPECT' => 'Vytvořit cíl',
    'LNK_PROSPECT_LIST' => 'Cíle',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Emailový marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Přidat',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Upravit',
    'LBL_FROM_MAILBOX' => 'Z mailboxu',
    'LBL_FROM_MAILBOX_NAME' => 'Použít mailbox:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Odchozí e-mailový účet:',
    'LBL_FROM' => 'Odesílatel',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Seznam skupin cílů',
    'LBL_ALL_PROSPECT_LISTS' => 'Všechny seznamy cílů v kampani.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Všechny seznamy cílů související se zprávou.',
    'LBL_PROSPECT_LIST_NAME' => 'Jméno:',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Seznamy cílů',
    'LBL_MODULE_SEND_TEST' => 'Kampaň: Odeslat test',
    'LBL_MODULE_SEND_EMAILS' => 'Kampaň: Odeslat e-maily',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Zvolte prosím sdělení kampaně, které chcete testovat:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Zvolte prosím sdělení kampaně, které chcete naplánovat k distribuci v určený počáteční datum a čas:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Odeslat',
    'LBL_SEND_BUTTON_LABEL' => 'Odeslat',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Plán',
    'LBL_ERROR_ON_MARKETING' => 'Chybí povinná pole',

    'LBL_CAMPAIGN_ID' => 'ID kampaně',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID účtu odchozích emailů',
    'LBL_EMAIL_TEMPLATE' => 'Vzor zprávy',
    'LBL_PROSPECT_LISTS' => 'Seznam možných zákazníků',
    'LBL_OVERVIEW' => 'Základní',
    'LBL_EMAIL_CONFIG' => 'Nastavení pošty',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'E-MAIL',
    'LBL_BODY' => 'Tělo',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Dotazník',
    'LBL_SCHEDULE' => 'Plán',
    'LBL_DELETE_TEST_ENTRIES' => 'Smazat testovací údaje',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Uživatelé',
    'LBL_SEND_TEST_EMAIL' => 'Odeslat zkušební E-mail',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Fronta zpráv',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Spouštět noční zpracování nedoručených e-mailů z kampaní',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Plánovače',
    'LBL_INBOUND_EMAIL' => 'Doručená pošta',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
