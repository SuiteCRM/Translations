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
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó ID',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Módosító',
    'LBL_MODIFIED_NAME' => 'Módosító név',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_DELETED' => 'Törölve',
    'LBL_NAME' => 'Név',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_LIST_NAME' => 'Név',
    'LBL_EDIT_BUTTON' => 'Szerkesztés',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_LIST_FORM_TITLE' => 'Kimenő E-mail fiókok listája',
    'LBL_MODULE_NAME' => 'Kimenő E-mail fiókok',
    'LBL_MODULE_TITLE' => 'Kimenő E-mail fiókok',
    'LBL_HOMEPAGE_TITLE' => 'Kimenő E-mail fiókjaim',
    'LNK_NEW_RECORD' => 'Kimenő E-mail fiókok létrehozása',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Kimenő E-mail fiókok',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Bejövő e-mail fiókok',
    'LBL_SEARCH_FORM_TITLE' => 'Kimenő E-mail fiókok keresése',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_NEW_FORM_TITLE' => 'Új kimenő E-mail fiókok',
    'LBL_USERNAME' => 'Felhasználónév',
    'LBL_PASSWORD' => 'Jelszó',
    'LBL_SMTP_SERVERNAME' => 'SMTP szerver neve',
    'LBL_SMTP_AUTH' => 'SMTP Hitelesítés',
    'LBL_SMTP_PORT' => 'SMTP Port:',
    'LBL_SMTP_PROTOCOL' => 'SMTP protokoll',
    'LBL_EDITVIEW_PANEL1' => 'Fiók beállítások',
    'LBL_OUTBOUND_CONFIGURATION' => 'Kimenő konfiguráció',
    'LBL_CONNECTION_CONFIGURATION' => 'Szerver konfiguráció',
    'LBL_CHANGE_PASSWORD' => 'Jelszó módosítása',
    'LBL_SEND_TEST_EMAIL' => 'Teszt email küldése',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Az Adminisztrátor még nem állította be az alapértelmezett kimenő fiókot ezért nem is sikerült elküldeni a teszt Emailt.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP hitelesítés:',
    'LBL_MAIL_SMTPPASS' => 'Jelszó',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Szerver',
    'LBL_MAIL_SMTPUSER' => 'Felhasználónév',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP szerver specifikációja',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válasszon Email szolgáltatót:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail azonosító:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail cím:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Kiszolgáló szerver:',

    'LBL_TYPE' => 'Típus',
    'LBL_MAIL_SENDTYPE' => 'Mail küldés típusa',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"Feladó" neve',
    'LBL_SMTP_FROM_ADDR' => '"Feladó" címe',
    'LBL_REPLY_TO_NAME' => '"Válasz" név:',
    'LBL_REPLY_TO_ADDR' => '"Válasz" cím:',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Biztonsági Csoportok',

    'LBL_OWNER' => 'Tulajdonos',
    'LBL_OWNER_NAME' => 'Tulajdonos',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Külső OAuth csatlakozás',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Külső OAuth csatlakozás',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Külső OAuth kapcsolatok',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
