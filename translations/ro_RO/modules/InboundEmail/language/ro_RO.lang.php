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

    'ERR_BAD_LOGIN_PASSWORD' => 'Nume utilizator sau parolă incorecte',
    'ERR_INI_ZLIB' => 'Nu s-a putut opri temporar compresia Zlib. „Setările de test„ pot eșua.',
    'ERR_NO_IMAP' => 'Nu au fost găsite biblioteci IMAP. Vă rugăm să rezolvați această problemă înainte de a continua cu email-ul de intrare',
    'ERR_NO_OPTS_SAVED' => 'Nu au fost salvate optim setările contului de email de intrare. Vă rugăm să revedeți setările',
    'ERR_TEST_MAILBOX' => 'Vă rugăm să verificați setările și să încercați din nou.',
    'ERR_INVALID_PORT' => 'Port invalid',

    'LBL_ASSIGN_TO_USER' => 'Atribuie lui',
    'LBL_AUTOREPLY' => 'Șablon Auto-Răspuns',
    'LBL_AUTOREPLY_HELP' => 'Selectați un răspuns automat pentru a notifica expeditorii de e-mail că răspunsul lor a fost primit.',
    'LBL_BASIC' => 'Informații Cont Email',
    'LBL_CASE_MACRO' => 'Caz Macro',
    'LBL_CASE_MACRO_DESC' => 'Setați un macro care va fi analizat și utilizat pentru a lega e-mailurile importate în Cazuri.',
    'LBL_CASE_MACRO_DESC2' => 'Setați acest lucru la orice valoare, dar păstrați <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Închideți Fereastră',
    'LBL_CREATE_TEMPLATE' => 'Creați',
    'LBL_DELETE_SEEN' => 'Șterge Email-uri Citite După Import',
    'LBL_EDIT_TEMPLATE' => 'Editați',
    'LBL_EMAIL_OPTIONS' => 'Opțiuni manipulare Email',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opțiuni de gestionare a mesajelor de retur',
    'LBL_FILTER_DOMAIN_DESC' => 'Specificați un domeniu la care nu se vor transmite auto-răspunsuri.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Selectați pentru a crea automat în SuiteCRM înregistrări de e-mailuri pentru oricare e-mail primit.',
    'LBL_FILTER_DOMAIN' => 'Niciun răspuns automat la acest domeniu',
    'LBL_FIND_SSL_WARN' => '<br>Testarea SSL poate să dureze mai mult. Vă rugăm să aveți răbdare.<br>',
    'LBL_FROM_ADDR' => '"De La " Adresă',
    'LBL_FROM_ADDR_DESC' => 'Adresa de e-mail furnizată aici s-ar putea să nu apară în secțiunea &quot;De la &quot; a e-mailului trimis din cauza restricțiilor impuse de furnizorul de servicii de e-mail. În aceste circumstanțe, va fi utilizată adresa de e-mail definită în serverul de e-mail de ieșire.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '„De La„ Nume',
    'LBL_GROUP_QUEUE' => 'Alocare la Grup',
    'LBL_HOME' => 'Acasă',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilizare Cont Mail',
    'LBL_LIST_NAME' => 'Nume:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tip',
    'LBL_LIST_SERVER_URL' => 'Server de Mail',
    'LBL_SERVER_ADDRESS' => 'Adresa serverului',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Utilizator',
    'LBL_USERNAME' => 'Utilizator',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Utilizați SSL',
    'LBL_MAILBOX_TYPE' => 'Acţiuni Posibile',
    'LBL_DISTRIBUTION_METHOD' => 'Metoda de distribuție',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Șablon auto-răspuns pentru Caz Nou',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selectați un răspuns automat pentru a notifica expeditorii de e-mail că a fost creat un caz. E-mailul conține numărul de caz din linia Subiect care aderă la setarea macro-ului de caz. Acest răspuns este trimis numai atunci când primul e-mail este primit de la destinatar.',
    'LBL_MAILBOX' => 'Directoare Monitorizate',
    'LBL_TRASH_FOLDER' => 'Director Gunoi',
    'LBL_SENT_FOLDER' => 'Director Expediate',
    'LBL_SELECT' => 'Selectaţi',
    'LBL_MARK_READ_NO' => 'Marchează emailul șters după import',
    'LBL_MARK_READ_YES' => 'Lasă emailul pe server după import',
    'LBL_MARK_READ' => 'Lasă mesajele pe server',
    'LBL_MAX_AUTO_REPLIES' => 'Număr de Auto-răspunsuri',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Setează numărul maxim de auto-răspunsuri de transmis la o adresa unică de email de-a lungul unei perioade de 24 de ore.',
    'LBL_PERSONAL_MODULE_NAME' => 'Cont de Mail Personal',
    'LBL_CREATE_CASE' => 'Creează Caz din email',
    'LBL_CREATE_CASE_HELP' => 'Selectează pentru a crea automat înregistrări cazuri în SuiteCRM pentru toate email-urile de intrare.',
    'LBL_MODULE_NAME' => 'Grup Cont Email',
    'LBL_BOUNCE_MODULE_NAME' => 'Mailbox de manipulare Returnări',
    'LBL_MODULE_TITLE' => 'E-mail de intrare',
    'LBL_NAME' => 'Nume',
    'LBL_NONE' => 'Niciun',
    'LBL_ONLY_SINCE_NO' => 'Nu. Verifică toate mesajele de pe serverul de email.',
    'LBL_ONLY_SINCE_YES' => 'Da.',
    'LBL_PASSWORD' => 'Parolă',
    'LBL_EMAIL_PASSWORD' => 'Parolă',
    'LBL_POP3_SUCCESS' => 'Testul conexiunii dumneavoastră POP3 a avut succes.',
    'LBL_POPUP_TITLE' => 'Testare setări',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selectați directorul (directoarele) abonate',
    'LBL_SELECT_TRASH_FOLDERS' => 'Selectați Director Gunoi',
    'LBL_SELECT_SENT_FOLDERS' => 'Selectați Director Expediate',
    'LBL_DELETED_FOLDERS_LIST' => 'Urmatoarele foldere %s fie nu exista fie au fost sterse de pe server',
    'LBL_PORT' => 'Portul Server de Mail',
    'LBL_REPLY_TO_NAME' => 'Nume expeditor',
    'LBL_REPLY_TO_ADDR' => 'Adresa de răspuns',
    'LBL_SAME_AS_ABOVE' => 'Utilizat din Nume/Adresa',
    'LBL_SERVER_OPTIONS' => 'Setări Avansate',
    'LBL_SERVER_TYPE' => 'Protocol Server de Mail',
    'LBL_SERVER_PORT' => 'Portul Server de Mail',
    'LBL_SERVER_URL' => 'Adresa Server de Mail',
    'LBL_SSL_DESC' => 'În cazul în care serverul dvs. de e-mail acceptă conexiuni socket sigure, activarea acestui lucru va forța conexiunile SSL la importul de e-mail.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Echipa selectata are acces la contul de mail.',
    'LBL_SSL' => 'Utilizați SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Filtru de conținut E-mail',
    'LBL_SYSTEM_DEFAULT' => 'Sistem implicit',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Testare setări',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Testează setările conexiunii',
    'LBL_TEST_SUCCESSFUL' => 'Testul s-a încheiat cu succes.',
    'LBL_TEST_WAIT_MESSAGE' => 'Un moment va rog...',
    'LBL_WARN_IMAP_TITLE' => 'Email de Intrare Dezactivat',
    'LBL_WARN_IMAP' => 'Atenționări:',
    'LBL_WARN_NO_IMAP' => 'Emailul de Intrare <b>nu poate funcționa</b> fără bibliotecile c-client IMAP activate/compilate cu modulul PHP. Vă rugăm să vă contactați administratorul pentru rezolvarea acestei probleme.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Intrare conturi de email',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Conturi de e-mail de ieșire',
    'LNK_LIST_SCHEDULER' => 'Programatore',
    'LNK_SEED_QUEUES' => 'Inițializează cozi din Echipe',
    'LBL_GROUPFOLDER_ID' => 'Id Director Grup',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permite utilizatorilor sa expedieze emailuri utilizând Numele și Adresele "De la" în calitate de răspuns la Adresă',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Când este selectată această opțiune, de la "Numele" și "De la" adresa de email asociate cu acest cont de mail de grup va apărea ca o opțiune pentru câmpul "De la" atunci când se compun e-mailuri pentru utilizatorii care au acces la contul de mail de grup.',
    'LBL_STATUS_ACTIVE' => 'Activ',
    'LBL_STATUS_INACTIVE' => 'Inactiv',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importa Emailuri Automat',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Atenție: Ați modificați setările de import automat, unele setări pot duce la pierderi de date.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Avertisment: Importul automat trebuie să fie activat atunci când se creează cazuri automat.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Ciorne',
    'LBL_LIST_TITLE_MY_INBOX' => 'Mesaje',
    'LBL_LIST_TITLE_MY_SENT' => 'Email-uri Trimise',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mailuri arhivate',
    'LNK_MY_DRAFTS' => 'Ciorne',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Vizualizare e-mail',
    'LNK_QUICK_REPLY' => 'Răspunde',
    'LNK_SENT_EMAIL_LIST' => 'E-mailuri trimise',
    'LBL_EDIT_LAYOUT' => 'Editare aranjament' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Modificat de',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Opțiuni stocate',
    'LBL_GROUP_ID' => 'ID grup',

    'LBL_OUTBOUND_CONFIGURATION' => 'Configurare ieșire',
    'LBL_CONNECTION_CONFIGURATION' => 'Configurare server',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Configurare răspuns automat',
    'LBL_CASE_CONFIGURATION' => 'Configurare caz',
    'LBL_GROUP_CONFIGURATION' => 'Configurare grup',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupuri Securitate',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Cont de e-mail de ieșire',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Id cont de email de ieșire',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Cont de e-mail de ieșire',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Șablon de răspuns automat',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Id șablon răspuns automat',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Șablon de răspuns automat',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Șablon email de caz',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Id șablon email de caz',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Șablon email de caz',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Șirul de conexiune',
    'LBL_DISTRIB_METHOD' => 'Metoda de distribuție',
    'LBL_DISTRIB_OPTIONS' => 'Opțiuni de distribuție',

    'LBL_DISTRIBUTION_USER' => 'Utilizator distribuție',
    'LBL_DISTRIBUTION_USER_ID' => 'Id utilizator distribuție',
    'LBL_DISTRIBUTION_USER_NAME' => 'Utilizator distribuție',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Conexiune exterioară OAuth',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'Id conexiune OAuth externă',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Conexiune exterioară OAuth',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Conexiuni OAuth externe',

    'LBL_TYPE' => 'Tip',
    'LBL_AUTH_TYPE' => 'Tip autentificare',
    'LBL_IS_DEFAULT' => 'Implicit',
    'LBL_SIGNATURE' => 'Semnătura',

    'LBL_OWNER_NAME' => 'Proprietar',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Setează ca implicit',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Mutați mesajele în Gunoi după import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
