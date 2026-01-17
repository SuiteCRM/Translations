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
    'LBL_SEND_DATE_TIME' => 'Data e dërgimit',
    'LBL_IN_QUEUE' => 'Në proces e sipër',
    'LBL_IN_QUEUE_DATE' => 'Datat e rradhitura',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Përdor vetëm vlera të plota për të përcaktuar numrin e emaileve të dërguara për grumbullim.',

    'LBL_ATTACHMENT_AUDIT' => 'Është dërguar. Nuk është dubluar lokalisht për të konservuar përdorimin e diskut.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfiguro parametrat e emailit',
    'LBL_CUSTOM_LOCATION' => 'Përdoruesi i definuar',
    'LBL_DEFAULT_LOCATION' => 'Parazgjedhur',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Fshi shënimet e lidhura dhe bashkëngjitjet me emailet e fshira',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfigurimi i maileve të dërguara',
    'LBL_EMAILS_PER_RUN' => 'Numri i emaileve të dërguara për grup:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'fushatat',
    'LBL_LIST_FORM_TITLE' => 'Rradha',
    'LBL_LIST_FROM_NAME' => 'Nga emri',
    'LBL_LIST_IN_QUEUE' => 'Në proces e sipër',
    'LBL_LIST_MESSAGE_NAME' => 'Mesazhi i marketingut',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Pranuesi i emailit',
    'LBL_LIST_RECIPIENT_NAME' => 'Emri i pranuesit',
    'LBL_LIST_SEND_ATTEMPTS' => 'Tentimet e dërgimeve',
    'LBL_LIST_SEND_DATE_TIME' => 'Dërguar  në',
    'LBL_LIST_USER_NAME' => 'Emri i përdoruesit',
    'LBL_LOCATION_ONLY' => 'Location',
    'LBL_LOCATION_TRACK' => 'Gjetja e dosjeve të gjurmuesve të fushatave',
    'LBL_CAMP_MESSAGE_COPY' => 'Mbaj kopje të mesazhit të fushatës',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Dëshironi të ruani kopjet të plota të çdo mesazhi të dërguar email-it gjatë gjithë fushatave? Ne rekomandojmë dhe parazgjedhim në nr. Zgjedhja nuk do ruajë vetëm modelin që është dërguar dhe variablat e nevojshme për të rikrijuar mesazhet individuale.',
    'LBL_MAIL_SENDTYPE' => 'Faktori i transferit të mailit',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Përdor SMTP Autentikim?',
    'LBL_MAIL_SMTPPASS' => 'Fjalëkalimi:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'Severi i mailit të  SMTP',
    'LBL_MAIL_SMTPUSER' => 'Emri i përdorimit',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Zgjidh furnizuesin e emailit tënd',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Fjalëkalimi i Yahoo! Mailit',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID e Yahoo! Mailit',
    'LBL_GMAIL_SMTPPASS' => 'Fjalëkalimi i Gmailit',
    'LBL_GMAIL_SMTPUSER' => 'Email adresa në Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Ndrysho fjalëkalimin',
    'LBL_EXCHANGE_SMTPUSER' => 'Ndrysho emrin e përdorimit',
    'LBL_EXCHANGE_SMTPPORT' => 'Këmbe  portin e Serverit',
    'LBL_EXCHANGE_SMTPSERVER' => 'Ndrysho Serverin',
    'LBL_EMAIL_LINK_TYPE' => 'Dergo email konsumatorit',
    'LBL_MARKETING_ID' => 'ID e marketingut',
    'LBL_MODULE_ID' => 'EmailNjeri',
    'LBL_MODULE_NAME' => 'Parametrat e emailit',
    'LBL_MODULE_TITLE' => 'Menaxhmenti i rradhëve të emaileve të dërguara për jashtë',
    'LBL_NOTIFICATION_ON_DESC' => 'Kur aktivizohen, emailat janë dërguar përdoruesve kur të dhënat caktohen për ta.',
    'LBL_NOTIFY_FROMADDRESS' => 'Nga adresa',
    'LBL_NOTIFY_FROMNAME' => 'Nga emri',
    'LBL_NOTIFY_ON' => 'Njoftime të caktuara',
    'LBL_NOTIFY_TITLE' => 'Opcionet e emailit',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opcionet e emaileve të dërguara për jashtë',
    'LBL_RELATED_ID' => 'Id lidhur me',
    'LBL_RELATED_TYPE' => 'Lloji lidhur me',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i rradhëve',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Vlera e Config.php setting site_url',
    'TXT_REMOVE_ME_ALT' => 'Për të larguar veten nga kjo listë e emaileve shkoni në',
    'TXT_REMOVE_ME_CLICK' => 'Shtyp këtu',
    'TXT_REMOVE_ME' => 'Për të larguar veten nga kjo listë e emaileve',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Parametrat e sigurisë së emailit',
    'LBL_SECURITY_DESC' => 'Kontrollo atë që vijon se nuk duhet të lejohet përmes emailit derjtuar përbrenda në modulën e Emailit',
    'LBL_SECURITY_APPLET' => 'Etiketë apleti',
    'LBL_SECURITY_BASE' => 'Etiketë themelore',
    'LBL_SECURITY_EMBED' => 'Etiketë e mbjellur',
    'LBL_SECURITY_FORM' => 'Etiketë e formës',
    'LBL_SECURITY_FRAME' => 'Etiketë e kornizës',
    'LBL_SECURITY_FRAMESET' => 'Etiketë e grupit të kornizave',
    'LBL_SECURITY_IFRAME' => 'Etiketë e iKornizës',
    'LBL_SECURITY_IMPORT' => 'Importo etiketën',
    'LBL_SECURITY_LAYER' => 'Etiketë e shtresës',
    'LBL_SECURITY_LINK' => 'Etiketë e lidhjes',
    'LBL_SECURITY_OBJECT' => 'Etiketë e objektit',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Selekto Outlook parazgjedhjen e parametrave minimale të Sigurisë (gabon në anën e saktë të shqaqjes).',
    'LBL_SECURITY_STYLE' => 'Etiketë e stilit',
    'LBL_SECURITY_TOGGLE_ALL' => 'Nyjëzo të gjitha opcionet',
    'LBL_SECURITY_XMP' => 'Etiketë Xmp',
    'LBL_YES' => 'Po',
    'LBL_NO' => 'Jo',
    'LBL_PREPEND_TEST' => '[Testo]:',
    'LBL_SEND_ATTEMPTS' => 'Tentimet e dërgimeve',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfiguroni parazgjedhjen e postës së jashtme të serverit për të dërguar lajmërime, duke përfshirë sinjalizime për rrjedhjen e punës.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kur zgjidhet ky opcion, të gjithë përdoruesit do të munden të dërgojnë emaile duke përdorur mail llogaritë e drejtuar për jashta për të dërguar lajmërime dhe alarme të sistemit. <br> Nëse nuk selektohet opcioni, përdoruesit do të mund të përdorin ende serverin e maileve të dërguar për jashta pas sigurimit të informacionit të llogarisë së tyre.',
    'LBL_FROM_ADDRESS_HELP' => 'Kur aktivizohen, caktimi i emrit përdoruesit/ve dhe adresa e emailit do të përfshihen në fushën Nga të   e-mail. Ky funksion mund të mos punoje me serverat SMTP që nuk lejojnë dërgimin nga llogari të ndryshme të emailit sesa në llogarinë server.',
    'LBL_HELP' => 'ndihmë' /*for 508 compliance fix*/,
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
