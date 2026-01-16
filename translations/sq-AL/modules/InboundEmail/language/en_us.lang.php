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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Hyrja ose fjalëkalimi janë të gabuara',
    'ERR_INI_ZLIB' => 'Nuk mund të c&#39;kyc ngjeshjen e përkohshme Zlib. "Testi i Parametrave" mund të dështojë.',
    'ERR_NO_IMAP' => 'Nuk janë gjetur IMAP biblioteka. Ju lutemi të zgjidhni këtë para se të azhdoni me Emailin e drejtuar përbrenda.',
    'ERR_NO_OPTS_SAVED' => 'Nuk janë gjetur optimume me llogarinë tuaj për emailit të drejtuar përbrenda. Ju lutemi të rishikoni parametrat',
    'ERR_TEST_MAILBOX' => 'Ju lutemi kontrolloni parametrat dhe provoni përsëri.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Drejtuar përdoruesit',
    'LBL_AUTOREPLY' => 'Shablloni i vetë-përgjigjes',
    'LBL_AUTOREPLY_HELP' => 'Selekto përgjigje automatike për të lajmëruar dërguesit e emaileve që përgjigjet e tyre janë pranuar.',
    'LBL_BASIC' => 'Informacioni i mail llogarisë',
    'LBL_CASE_MACRO' => 'Rasti Makro',
    'LBL_CASE_MACRO_DESC' => 'Vendosni makron e cila do të analizohet dhe përdoret për linkun e emailit e importuar në Rast.',
    'LBL_CASE_MACRO_DESC2' => 'Përcakto këtë tek çdo vlerë, por ruaj "%1".',
    'LBL_CLOSE_POPUP' => 'Mbyll dritaren',
    'LBL_CREATE_TEMPLATE' => 'Krijo',
    'LBL_DELETE_SEEN' => 'Fshi emailet e lexuara pas importimit',
    'LBL_EDIT_TEMPLATE' => 'Ndrysho',
    'LBL_EMAIL_OPTIONS' => 'Opcionet e trajtimit të emaileve',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Kthimi i trajtimit të opsionëve',
    'LBL_FILTER_DOMAIN_DESC' => 'Specifiko një domen në të cilën nuk do të dërgohet asnjë vetë-përgjigje',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Selektoni automatikisht krijimin e regjistrimit të emailit në SuiteCRM për të gjitha emailet hyrëse.',
    'LBL_FILTER_DOMAIN' => 'Nuk ka vetë-përgjigje në këtë omenD',
    'LBL_FIND_SSL_WARN' => 'Testimi i SSL mund të zgjasë një kohë të gjatë. Ju ltemi të keni durim.',
    'LBL_FROM_ADDR' => 'Nga adresa',
    'LBL_FROM_ADDR_DESC' => 'Adresa e emailit të dhënë këtu nuk mund të shfaqet "Nga" seksioni i adresave të e-mailit të dërguar për shkak të kufizimeve të imponuara nga ofruesi i shërbimit të postës. Në këto rrethana, adresa e emailit e definuar në serverin e postës dalëse do të përdoren.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nga emri',
    'LBL_GROUP_QUEUE' => 'Drejtuar Grupit',
    'LBL_HOME' => 'Ballina',
    'LBL_LIST_MAILBOX_TYPE' => 'Përdorimi i mail llogarisë',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Lloji',
    'LBL_LIST_SERVER_URL' => 'Mail Server',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Statusi',
    'LBL_LOGIN' => 'Emri i përdoruesit',
    'LBL_USERNAME' => 'Emri i përdoruesit',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Përdor SSL',
    'LBL_MAILBOX_TYPE' => 'Veprimet e mundëshme',
    'LBL_DISTRIBUTION_METHOD' => 'Metoda e distribuimit',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Shablloni i rastit të ri të vetë-përgjigjes',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selektoni një përgjigje të automatizuar të njoftojë dërguesit e emailit se rasti ka qenë i krijuar.Emaili përmban numrin e lëndëve në rreshtin e subjektit i cili respekton vendosjen e Rastit Makro.Kjo përgjigje është dërguar vetëm kur email i parë është pranuar nga pranuesi.',
    'LBL_MAILBOX' => 'Folderët e vëshguar',
    'LBL_TRASH_FOLDER' => 'Folderi i plehrave',
    'LBL_SENT_FOLDER' => 'Folderi i dërgimit',
    'LBL_SELECT' => 'Selekto',
    'LBL_MARK_READ_NO' => 'Emailet e shënuara janë të fshira pas importit',
    'LBL_MARK_READ_YES' => 'Emaili është lënë në server pas importimit',
    'LBL_MARK_READ' => 'Leji mesazhet në Server',
    'LBL_MAX_AUTO_REPLIES' => 'Numri i vetë-reagimeve',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Përcakto numrin maksimum i vetë-reagimeve për të dërguar email adresë unike gjatë periudhës prej 24 orëve.',
    'LBL_PERSONAL_MODULE_NAME' => 'Mail llogaria personale',
    'LBL_CREATE_CASE' => 'Krijo rast',
    'LBL_CREATE_CASE_HELP' => 'Selekto për të krijuar automatikisht regjistrime të rastit për emailet drejtuar përbrenda.',
    'LBL_MODULE_NAME' => 'Inbound Email Accounts',
    'LBL_BOUNCE_MODULE_NAME' => 'Kthimi i Trajtimit të Postës',
    'LBL_MODULE_TITLE' => 'Inbound Email Accounts',
    'LBL_NAME' => 'Emri',
    'LBL_NONE' => 'Asnjëra',
    'LBL_ONLY_SINCE_NO' => 'Jo. Kontrolloni kundrejt të gjitha emaileve në mail serverin.',
    'LBL_ONLY_SINCE_YES' => 'Po.',
    'LBL_PASSWORD' => 'Fjalëkalimi',
    'LBL_EMAIL_PASSWORD' => 'Fjalëkalimi',
    'LBL_POP3_SUCCESS' => 'Testi i lidhjes POP3 ka qenë e suksesshme.',
    'LBL_POPUP_TITLE' => 'Parametrat e testit',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selekto Folderin(at) e regjistruar',
    'LBL_SELECT_TRASH_FOLDERS' => 'Selekto Folderin e plehrave',
    'LBL_SELECT_SENT_FOLDERS' => 'Selekto folderin e dërgimit',
    'LBL_DELETED_FOLDERS_LIST' => 'Folderi(at) vijues %s ose nuk ekziston ose është fshirë nga serveri',
    'LBL_PORT' => 'Port i Mail Server-it',
    'LBL_REPLY_TO_NAME' => 'Përgjigju emrit',
    'LBL_REPLY_TO_ADDR' => 'Përgjigju adresës',
    'LBL_SAME_AS_ABOVE' => 'Përdorur nga Emri/Adresa',
    'LBL_SERVER_OPTIONS' => 'Vendosje e avancuar',
    'LBL_SERVER_TYPE' => 'Protokoli i mail serverit',
    'LBL_SERVER_PORT' => 'Port i Mail Server-it',
    'LBL_SERVER_URL' => 'Adresa e mail serverit',
    'LBL_SSL_DESC' => 'Nëse serveri juaj i emailit mbështet lidhjet Mbrojtëse të kodimit, duke mundësuar  se kjo do të forcoje lidhjet SSL kur të importon emailin.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Grupi i selektuar ka qasje në mail llogarinë.',
    'LBL_SSL' => 'Përdor SSL',
    'LBL_STATUS' => 'Statusi',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Sistem i çaktivizuar',
    'LBL_TEST_BUTTON_TITLE' => 'Testo',
    'LBL_TEST_SETTINGS' => 'Parametrat e testit',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Lidhja ka përfunduar me sukses.',
    'LBL_TEST_WAIT_MESSAGE' => 'Një moment ju lutem...',
    'LBL_WARN_IMAP_TITLE' => 'Çaktivizimi i Emaili të drejtuar përbrenda',
    'LBL_WARN_IMAP' => 'Paralajmërimet:',
    'LBL_WARN_NO_IMAP' => 'Email hyrse nuk mund të funksionojë pa pasur IMAP klienti në bibliotekat të aktivizuara/hartuar me modulin e PHP. Ju lutemi të kontaktoni administratorin tuaj për të zgjidhur këtë çështje.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Planifikuesit',
    'LNK_SEED_QUEUES' => 'Pasardhësit e Radhëve Nga Ekipet',
    'LBL_GROUPFOLDER_ID' => 'Id e folderit të grupit',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Lejoni përdoruesit të dërgojnë emaila duke përdorur "Nga" emrin dhe adresën si përgjigje për të adresuar',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kur ky opsion është selektuar, nga emri dhe nga adresa e emailit të shoqëruar me këtë llogari të postës së grupit do të shfaqet si një opsion për Nga fusha kur kompozimi i emailave për shfrytëzuesit kanë qasje në llogarinë e postës së grupit.',
    'LBL_STATUS_ACTIVE' => 'aktive',
    'LBL_STATUS_INACTIVE' => 'pasive',
    'LBL_IS_PERSONAL' => 'personale',
    'LBL_IS_GROUP' => 'Grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importi i Emailave Automatike',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Paralajmërim: Ju keni modifikuar importin tuaj automatik të vendosjes i cili mund të rezultojë në humbjen e të dhënave.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Paralajmërim: Importi Automatik duhet të jetë i aktivizuar automatikisht kur krijohen rastet.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Email i dërguar',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Emailet e arkivuara',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Emailet',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Përgjigju',
    'LNK_SENT_EMAIL_LIST' => 'Dërgo email',
    'LBL_EDIT_LAYOUT' => 'Ndrysho formatin' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modifikuar nga',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'Metoda e distribuimit',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Lloji',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Parazgjedhur',
    'LBL_SIGNATURE' => 'Nënshkrimi',

    'LBL_OWNER_NAME' => 'Pronari',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
);
