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
    'LBL_ASSIGNED_TO_ID' => 'Id utente assegnato',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data di Creazione',
    'LBL_DATE_MODIFIED' => 'Data Modifica',
    'LBL_MODIFIED' => 'Modificato da',
    'LBL_MODIFIED_NAME' => 'Modificato da Nome',
    'LBL_CREATED' => 'Creato da',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_DELETED' => 'Eliminato',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Creato dall\'utente',
    'LBL_MODIFIED_USER' => 'Modificato dall\'utente',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_REMOVE' => 'Cancella',
    'LBL_LIST_FORM_TITLE' => 'Accounts Email in uscita',
    'LBL_MODULE_NAME' => 'Accounts Email in uscita',
    'LBL_MODULE_TITLE' => 'Accounts Email in uscita',
    'LBL_HOMEPAGE_TITLE' => 'Il mio account di posta elettronica in uscita',
    'LNK_NEW_RECORD' => 'Crea un nuovo account di posta elettronica in uscita',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'Crea nuovo Account Email di Sistema per sovrascrivere Account Email di Uscita',

    'LNK_LIST' => 'Accounts Email in uscita',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Account di posta elettronica in entrata',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca account di posta elettronica in uscita',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visualizza Cronologia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_NEW_FORM_TITLE' => 'Nuovo account di posta elettronica in uscita',
    'LBL_USERNAME' => 'Utente per Autenticazione',
    'LBL_PASSWORD' => 'Password',
    'LBL_SMTP_SERVERNAME' => 'Nome del server SMTP',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'Porta SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocollo SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Impostazioni dell\'account',
    'LBL_OUTBOUND_CONFIGURATION' => 'Configurazione Email in uscita',
    'LBL_CONNECTION_CONFIGURATION' => 'Configurazione Server',
    'LBL_CHANGE_PASSWORD' => 'Cambia Password',
    'LBL_SEND_TEST_EMAIL' => 'Invia Email di Test',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L´amministratore non ha ancora configurato l´account predefinito per le mail in uscita. Impossibile inviare la mail di test.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Usa Autenticazione SMTP ?',
    'LBL_MAIL_SMTPPASS' => 'Password',
    'LBL_MAIL_SMTPPORT' => 'Porto',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Utente per Autenticazione',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifica Server SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Scegli il provider della tua email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password Mail Yahoo!:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Mail Yahoo!:',
    'LBL_GMAIL_SMTPPASS' => 'Password Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Indirizzo Email di Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Password di Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nome Utente di Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Porta:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',

    'LBL_TYPE' => 'Tipo',
    'LBL_MAIL_SENDTYPE' => 'Tipo posta in uscita',
    'LBL_MAIL_SMTPSSL' => 'Utilizza SMTP con SSL/TLS',
    'LBL_SMTP_FROM_NAME' => '"From" nome',
    'LBL_SMTP_FROM_ADDR' => 'Indirizzo Mittente',
    'LBL_REPLY_TO_NAME' => '"Rispondi A" Nome',
    'LBL_REPLY_TO_ADDR' => '"Rispondi A" Indirizzo',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Gruppi di Sicurezza',

    'LBL_OWNER' => 'Proprietario',
    'LBL_OWNER_NAME' => 'Proprietario',

    'LBL_AUTH_TYPE' => 'Tipo Autenticazione',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Connessione OAuth Esterna',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'Id di connessione OAuth esterna',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Connessione OAuth Esterna',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Connessioni OAuth Esterne',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
