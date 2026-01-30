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
    'LBL_ALL_MODULES' => 'Alle',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesene Benutzer ID',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum erstellt',
    'LBL_DATE_MODIFIED' => 'Letzte Änderung',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NONINHERITABLE' => 'Nicht vererbbar',
    'LBL_LIST_NONINHERITABLE' => 'Nicht vererbbar',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Bearbeitet von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'LBL_LIST_FORM_TITLE' => 'Berechtigungsgruppen',
    'LBL_MODULE_NAME' => 'Sicherheits-Suite Management',
    'LBL_MODULE_TITLE' => 'Sicherheits-Suite Management',
    'LNK_NEW_RECORD' => 'Berechtigungsgruppe erstellen',
    'LNK_LIST' => 'Listenansicht',
    'LBL_SEARCH_FORM_TITLE' => 'Suche Security-Suite-Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Verwaltung der Security Suite',
    'LBL_USERS' => 'Benutzer',
    'LBL_USERS_SUBPANEL_TITLE' => 'Benutzer',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Rollen',
    'LBL_ROLES' => 'Rollen',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigurieren',
    'LBL_ADDITIVE' => 'Additive Rechte',
    'LBL_ADDITIVE_DESC' => "Der Benutzer erhält die höchsten Rechte aller Rollen, die ihm oder seiner Gruppe zugewiesen wurden",
    'LBL_STRICT_RIGHTS' => 'Strikte Rechte',
    'LBL_STRICT_RIGHTS_DESC' => "Wenn ein Benutzer Mitglied mehrerer Gruppen ist, dann werden nur die Rechte jener Gruppe benutzt, die dem jeweiligen Datensatz zugeordnet sind.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Vorrang Benutzerrolle',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Wenn einem Benutzer eine Rolle direkt zugeordnet ist, dann haben die Rechte dieser Rolle Vorrang gegenüber eventuellen Gruppenrechten.',
    'LBL_INHERIT_TITLE' => 'Gruppenvererbungsregeln',
    'LBL_INHERIT_CREATOR' => 'Vererbung vom Erstellt von Benutzer',
    'LBL_INHERIT_CREATOR_DESC' => 'Der Datensatz erbt alle Gruppen die dem erstellenden Benutzer zugeordnet sind.',
    'LBL_INHERIT_PARENT' => 'Vererbung vom übergeordneten Satz',
    'LBL_INHERIT_PARENT_DESC' => 'Wenn beispielsweise ein Kontakt für eine Firma erstellt wird so erbt der Kontakt alle Gruppen der verknüpften Firma.',
    'LBL_USER_POPUP' => 'Neuer Benutzer - Auswahlfenster für Gruppen',
    'LBL_USER_POPUP_DESC' => 'Wenn ein neuer Benutzer erstellt wird, dann soll ein Auswahlfenster mit Berechtigungsgruppen gezeigt werden.',
    'LBL_INHERIT_ASSIGNED' => 'Vererbung vom Zugewiesen an Benutzer',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Der Datensatz erbt alle Gruppen des Eigentümers des Datensatzes. Andere Gruppen die dem Datensatz zugeordnet sind werden nicht entfernt.',
    'LBL_POPUP_SELECT' => 'Auswahl für Gruppen verwenden',
    'LBL_POPUP_SELECT_DESC' => 'Erstellt ein Benutzer einen Datensatz, der mehr als einer Gruppe zugeordnet ist, dann eine Auswahl der verfügbaren Gruppen anzeigen. Andernfalls diese eine Gruppe vererben.',
    'LBL_FILTER_USER_LIST' => 'Benutzerliste filtern',
    'LBL_FILTER_USER_LIST_DESC' => "Nicht-Admin Benutzer können nur innerhalb der selben Gruppe(n) zuweisen",

    'LBL_DEFAULT_GROUP_TITLE' => 'Standardgruppe für neue Datensätze',
    'LBL_ADD_BUTTON_LABEL' => 'Hinzufügen',
    'LBL_REMOVE_BUTTON_LABEL' => 'Entfernen',
    'LBL_GROUP' => 'Gruppe:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Berechtigungsgruppen: Massenänderung',
    'LBL_ASSIGN' => 'Zuweisen',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_ASSIGN_CONFIRM' => 'Sind Sie sicher, dass diese Gruppe hinzufügen wollen zu den ',
    'LBL_REMOVE_CONFIRM' => 'Sind Sie sicher, dass diese Gruppe entfernen wollen von den ',
    'LBL_CONFIRM_END' => 'ausgewählte(n) Datensatz/Datensätze?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Berechtigungsgruppe/Benutzer',
    'LBL_USER_NAME' => 'Benutzername',
    'LBL_SECURITYGROUP_NAME' => 'Name Berechtigungsgruppe',
    'LBL_HOMEPAGE_TITLE' => 'Gruppennachrichten',
    'LBL_TITLE' => 'Titel',
    'LBL_ROWS' => 'Zeilen',
    'LBL_POST' => 'Senden',
    'LBL_SELECT_GROUP_ERROR' => 'Bitte wählen Sie eine Gruppe aus und versuchen Sie es erneut.',

    'LBL_GROUP_SELECT' => 'Auswählen, welche Gruppen auf diesen Datensatz Zugriff haben sollen',
    'LBL_ERROR_DUPLICATE' => 'Aufgrund eines von SuiteCRM entdeckten möglichen Duplikats müssen Sie die Berechtigungsgruppen manuell zu dem neu erstellten Datensatz zuordnen.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update fehlgeschlagen, weil der Suchfilter verändert worden war. Bitte versuchen Sie es erneut.',

    'LBL_INBOUND_EMAIL' => 'Eingehendes E-Mail Konto',
    'LBL_INBOUND_EMAIL_DESC' => 'Erlaubt nur dann den Zugriff auf ein E-Mail Konto, wenn der Benutzer zu einer Gruppe gehört, die diesem E-Mail Konto zugewiesen wurde.',
    'LBL_PRIMARY_GROUP' => 'Primäre Gruppe',
    'LBL_CHECKMARK' => 'Häkchen',

);
