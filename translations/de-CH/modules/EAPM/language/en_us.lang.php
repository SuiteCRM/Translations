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
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesene Benutzer ID',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM Benutzer',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum erstellt',
    'LBL_DATE_MODIFIED' => 'Letzte Änderung',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'App Benutzername',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FORM_TITLE' => 'Liste externe Konten',
    'LBL_MODULE_NAME' => 'Externes Konto',
    'LBL_MODULE_TITLE' => 'Externe Konten',
    'LBL_HOMEPAGE_TITLE' => 'Externe Konten',
    'LNK_NEW_RECORD' => 'Externes Konto erstellen',
    'LNK_LIST' => 'Externe Konten anzeigen',
    'LBL_SEARCH_FORM_TITLE' => 'Externe Quellen durchsuchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neues externes Konto',
    'LBL_PASSWORD' => 'App-Kennwort',
    'LBL_USER_NAME' => 'App Benutzername',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Anwendung',
    'LBL_API_DATA' => 'API Daten',
    'LBL_API_CONSKEY' => 'Verbraucherschlüssel',
    'LBL_API_CONSSECRET' => 'Verbrauchergeheimnis',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Diese Autorisierungsmethode wird von der Anwendung nicht unterstützt",
    'LBL_AUTH_ERROR' => 'Es konnte keine Verbindung mit dem Konto hergestellt werden.',
    'LBL_VALIDATED' => 'Verbunden',
    'LBL_ACTIVE' => 'Aktiv',
    'LBL_OAUTH_NAME' => '"% s"',
    'LBL_CONNECT_BUTTON_TITLE' => 'Verbinden',
    'LBL_NOTE' => 'Bitte beachten Sie',
    'LBL_CONNECTED' => 'Verbunden',

    'LBL_ERR_NO_AUTHINFO' => 'Es gibt keine Authentifizierungsinformation für dieses Konto.',
    'LBL_ERR_NO_TOKEN' => 'Es gibt keine gültigen Login-Marken für diesen Account.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Sie sind derzeit nicht mit Ihrem {0} Konto verbunden. Klicken Sie auf OK, um sich anzumelden und die Verbindung wiederherzustellen.',

    'LBL_CLICK_TO_EDIT' => 'Klicken zum bearbeiten',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Erneut authentifizieren',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Es existiert bereits ein Konto für diese Anwendung. Wir haben den bestehenden Account wiederhergestellt.',
    'LBL_OMIT_URL' => '(http:// oder https:// auslassen)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Klicken Sie auf <b>Connect</b> zu einer Seite, Ihre Kontodaten einzugeben und Autorisierung des Zugriffs auf das Konto von SuiteCRM geleitet werden. Nach dem anschließen, werden Sie zurück zu SuiteCRM weitergeleitet.',
    'LBL_BASIC_SAVE_NOTICE' => 'Klicken Sie auf <b>Connect</b> um dieses Konto zu SuiteCRM zu verbinden.',
    'LBL_ERR_POPUPS_DISABLED' => 'Bitte aktivieren Sie Browser-Popup-Fenster oder fügen Sie eine Ausnahme für Website "{0}" zur Ausnahmeliste hinzu, um eine Verbindung herzustellen.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Geheimnis',
);
