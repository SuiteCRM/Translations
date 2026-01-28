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
    'LBL_SEND_DATE_TIME' => 'Data trimiteri',
    'LBL_IN_QUEUE' => 'În Procesare',
    'LBL_IN_QUEUE_DATE' => 'Data în așteptare',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Utilizați doar valori întregi pentru a specifica numărul de e-mailuri trimise per lot',

    'LBL_ATTACHMENT_AUDIT' => ' a fost trimis. Nu a fost duplicat și local pentru a economisi spațiu pe disc.',
    'LBL_CONFIGURE_SETTINGS' => 'Configurare setări email',
    'LBL_CUSTOM_LOCATION' => 'Definite de utilizator',
    'LBL_DEFAULT_LOCATION' => 'Implicit',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Ștergeți notele conexe și atașamentele odată cu e-mailurile șterse',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Notificări e-mail',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Setări de consimțământ',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Trimite automat e-mail de confirmare',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Șablon de e-mail pentru confirmarea înscrierii',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Activează comportamentul vechi de compunere a e-mailurilor',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Setări pentru e-mailuri de ieșire',
    'LBL_EMAILS_PER_RUN' => 'Număr de email-uri expediate pe serie:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Campanie',
    'LBL_LIST_FORM_TITLE' => 'Coadă de emailuri',
    'LBL_LIST_FROM_NAME' => 'De la',
    'LBL_LIST_IN_QUEUE' => 'În Procesare',
    'LBL_LIST_MESSAGE_NAME' => 'Mesaj de marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Emailuri destinatari',
    'LBL_LIST_RECIPIENT_NAME' => 'Nume destinatari',
    'LBL_LIST_SEND_ATTEMPTS' => 'Încercări de trimitere',
    'LBL_LIST_SEND_DATE_TIME' => 'Trimite pe',
    'LBL_LIST_USER_NAME' => 'Utilizator',
    'LBL_LOCATION_ONLY' => 'Locație',
    'LBL_LOCATION_TRACK' => 'Locația fișierelor de urmărire a campaniei (cum ar fi campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Păstrați copii ale mesajelor campaniei:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Doriți să stocați copii complete ale <bold>FIECĂRUI</bold> mesaj de e-mail trimis în timpul tuturor campaniilor? <bold>Recomandăm și implicit nu</bold>. Alegerea opțiunii "nu" va stoca doar șablonul trimis și variabilele necesare pentru recrearea mesajului individual.',
    'LBL_MAIL_SENDTYPE' => 'Agent transfer email:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizare autentificare SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Parolă:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Utilizator:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Alegeți furnizorul de e-mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Parolă Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Mail Yahoo!',
    'LBL_GMAIL_SMTPPASS' => 'Parolă Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Adresă Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Parolă Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Utilizator Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Portul serverului Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'Client Email',
    'LBL_MARKETING_ID' => 'Id marketing',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Setări Email',
    'LBL_MODULE_TITLE' => 'Gestionare coadă e-mailuri de ieșire',
    'LBL_NOTIFICATION_ON_DESC' => 'Când este activată, e-mailurile sunt trimise către utilizatori atunci când înregistrările sunt atribuite lor.',
    'LBL_NOTIFY_FROMADDRESS' => '„De la„ Adresa:',
    'LBL_NOTIFY_FROMNAME' => '„De la„ Nume:',
    'LBL_NOTIFY_ON' => 'Notificări de atribuire',
    'LBL_NOTIFY_TITLE' => 'Opțiuni email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opțiuni de ieșire e-mail',
    'LBL_RELATED_ID' => 'Legat de Id-ul',
    'LBL_RELATED_TYPE' => 'Legat de tipul',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare în așteptare',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valoare a Config.php setare site_url',
    'TXT_REMOVE_ME_ALT' => 'Pentru a te elimina din această listă de e-mail mergeți la',
    'TXT_REMOVE_ME_CLICK' => 'clic aici',
    'TXT_REMOVE_ME' => 'Pentru a te elimina din această listă de e-mail',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Trimite notificarea de la adresa de e-mail a utilizatorului care a atribuit sarcina',

    'LBL_SECURITY_TITLE' => 'Setări de securitate e-mail',
    'LBL_SECURITY_DESC' => 'Verificați următoarele lucruri care NU ar trebui permise în inbox-ul email-ului sau care sunt afișate în e-mailuri.',
    'LBL_SECURITY_APPLET' => 'Etichetă Applet',
    'LBL_SECURITY_BASE' => 'Etichetă de bază',
    'LBL_SECURITY_EMBED' => 'Etichetă încorporată',
    'LBL_SECURITY_FORM' => 'Etichetă formular',
    'LBL_SECURITY_FRAME' => 'Eticheta formular',
    'LBL_SECURITY_FRAMESET' => 'Etichetă Frameset',
    'LBL_SECURITY_IFRAME' => 'etichetă iFrame',
    'LBL_SECURITY_IMPORT' => 'Importă eticheta',
    'LBL_SECURITY_LAYER' => 'Etichetă de strat',
    'LBL_SECURITY_LINK' => 'Etichetă legătură',
    'LBL_SECURITY_OBJECT' => 'Etichetă obiect',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Selectează setările minime de securitate implicite pentru Outlook (cu prioritate pentru afișarea corectă).',
    'LBL_SECURITY_STYLE' => 'Etichetă stil',
    'LBL_SECURITY_TOGGLE_ALL' => 'Comutați toate opțiunile',
    'LBL_SECURITY_XMP' => 'Etichetă Xmp',
    'LBL_YES' => 'Da',
    'LBL_NO' => 'Nu',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Încercări de trimitere',
    'LBL_OUTGOING_SECTION_HELP' => 'Configurați serverul implicit de e-mail de ieșire pentru trimiterea notificărilor prin e-mail, inclusiv alertele fluxului de lucru.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Utilizatorii pot trimite identitatea acestui contul:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Când această opțiune este selectată, toți utilizatorii vor putea trimite e-mailuri folosind același cont de e-mail de ieșire utilizat pentru a trimite notificări și alerte de sistem.<br> În cazul în care opțiunea nu este selectată, utilizatorii pot utiliza în continuare serverul de e-mail de ieșire după ce au furnizat informații despre propriul cont.',
    'LBL_FROM_ADDRESS_HELP' => 'Când este activată, numele și adresa de e-mail atribuite utilizatorului vor fi incluse în câmpul de email "De la". Această funcție ar putea să nu funcționeze cu servere SMTP care nu permit trimiterea de la un cont de e-mail diferit de contul de server.',
    'LBL_HELP' => 'Ajutor' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Vezi conturile de e-mail de ieșire',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Utilizatorii pot trimite ei înșiși:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Când este activat, <b>Toți utilizatorii</b> poți trimite e-mailuri folosind serverul de e-mail de ieșire, folosind propria adresă principală de e-mail ca &quot;De la:&quot; adresă.<br>Această caracteristică ar putea să nu funcționeze cu serverele SMTP care nu permit trimiterea de e-mailuri dintr-un cont diferit de contul de server.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
