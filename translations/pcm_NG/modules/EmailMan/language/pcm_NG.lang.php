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
    'LBL_SEND_DATE_TIME' => 'Make you send date',
    'LBL_IN_QUEUE' => 'In Process',
    'LBL_IN_QUEUE_DATE' => 'Date wey dey queue',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Make you use only integer values to specify the number of emails wey you send per batch',

    'LBL_ATTACHMENT_AUDIT' => ' we send am. Hin no be local duplicate wey dey to conserve disk usage.',
    'LBL_CONFIGURE_SETTINGS' => 'Make you set email settings',
    'LBL_CUSTOM_LOCATION' => 'User Defined',
    'LBL_DEFAULT_LOCATION' => 'Default',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Make you Delete related notes & attachments wey get Emails wey we don comot before',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Make you Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Make you dey send opt in email automatically',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Template wey you go Confirm Opt In Email',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Make you set outgoing mail',
    'LBL_EMAILS_PER_RUN' => 'Number of emails wey you send per batch:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Campaign',
    'LBL_LIST_FORM_TITLE' => 'Queue',
    'LBL_LIST_FROM_NAME' => 'From name',
    'LBL_LIST_IN_QUEUE' => 'In Process',
    'LBL_LIST_MESSAGE_NAME' => 'Message wey dey for Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'De Person Email',
    'LBL_LIST_RECIPIENT_NAME' => 'De person name',
    'LBL_LIST_SEND_ATTEMPTS' => 'Make you send attempts',
    'LBL_LIST_SEND_DATE_TIME' => 'Send On',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_LOCATION_ONLY' => 'Location',
    'LBL_LOCATION_TRACK' => 'Location wey campaign tracking filesm bin dey (like campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Make you Keep copies of campaign messages:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'You go like store complete copies of <bold>EACH</bold> email message wey you send during all campaigns?  <bold>We recommend and default to no</bold>. If you choose no na only the template wey you send and the variables wey you go need to recreate the individual message go remain.',
    'LBL_MAIL_SENDTYPE' => 'Agent wey dey Transfer mail:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Make you use SMTP Authentication:',
    'LBL_MAIL_SMTPPASS' => 'Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Mail Server:',
    'LBL_MAIL_SMTPUSER' => 'Username:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Make you Choose your Email provider',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address',
    'LBL_EXCHANGE_SMTPPASS' => 'Make you Exchange Password',
    'LBL_EXCHANGE_SMTPUSER' => 'Make you Exchange Username',
    'LBL_EXCHANGE_SMTPPORT' => 'Make you Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Make you Exchange Server',
    'LBL_EMAIL_LINK_TYPE' => 'Make youEmail Client',
    'LBL_MARKETING_ID' => 'Marketing Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Email settings',
    'LBL_MODULE_TITLE' => 'Outbound Email Queue Management',
    'LBL_NOTIFICATION_ON_DESC' => 'If you don allow am, emails go dey send to users if you don assign records give them.',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_FROMNAME' => '"From" Name:',
    'LBL_NOTIFY_ON' => 'Assignment Notifications',
    'LBL_NOTIFY_TITLE' => 'Options wey dey for Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Options wey dey for outbound email',
    'LBL_RELATED_ID' => 'Id wey dey related ',
    'LBL_RELATED_TYPE' => 'Related type',
    'LBL_SEARCH_FORM_TITLE' => 'Make you Queue Search',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Value of Config.php setting site_url',
    'TXT_REMOVE_ME_ALT' => 'If you wan comot yourself for this email list make you go',
    'TXT_REMOVE_ME_CLICK' => 'make you click here',
    'TXT_REMOVE_ME' => 'To remove yourself from this email list',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Email Security Settings',
    'LBL_SECURITY_DESC' => 'Check the following that should NOT be allowed in via InboundEmail or displayed in the Emails module.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Base tag',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'iFrame tag',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Select Outlook default minimum security settings (errs on the side of correct display).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Toggle All Options',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Make you send attempts',
    'LBL_OUTGOING_SECTION_HELP' => 'Configure the default outgoing mail server for sending email notifications, including workflow alerts.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts.<br> If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
