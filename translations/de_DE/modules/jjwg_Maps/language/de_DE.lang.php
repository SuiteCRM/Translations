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

$mod_strings['LBL_MAP'] = 'Anzeigen';
$mod_strings['LBL_MODULE_NAME'] = 'Karten';
$mod_strings['LBL_MODULE_TITLE'] = 'Karten: Startseite';
$mod_strings['LBL_MODULE_ID'] = 'Karten';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Kartenliste';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Benutzerdefinierter Marker';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Benutzerdefiniertes Gebiet';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Mein Kartenliste';

$mod_strings['LBL_FLEX_RELATE'] = 'Verknüpft mit (Zentrum):';
$mod_strings['LBL_MODULE_TYPE'] = 'Anzuzeigender Modultyp:';
$mod_strings['LBL_DISTANCE'] = 'Distanz (Radius):';
$mod_strings['LBL_UNIT_TYPE'] = 'Anlagentyp:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Kartenanzeige';
$mod_strings['LBL_MAP_LEGEND'] = 'Legende:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Gruppen:';
$mod_strings['LBL_MAP_GROUP'] = 'Gruppe';
$mod_strings['LBL_MAP_TYPE'] = 'Typ';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Zugewiesen an:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Route berechnen';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Maps Ansicht';

$mod_strings['LNK_NEW_MAP'] = 'Neue Karte hinzufügen';
$mod_strings['LNK_NEW_RECORD'] = 'Neue Karte hinzufügen';
$mod_strings['LNK_MAP_LIST'] = 'Karten anzeigen';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Geocodierung Test';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Schnelle Umkreis Karte';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Kein(e)';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresse';
$mod_strings['LBL_MAP_PROCESS'] = 'Verarbeiten!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Letzter Geokodierungsstatus';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Anzahl der Geokodierungsmodule';
$mod_strings['LBL_CRON_URL'] = 'Cron-URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'N/V';
$mod_strings['LBL_ZERO_RESULTS'] = 'Keine Ergebnisse';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Ungültige Anfrage';
$mod_strings['LBL_APPROXIMATE'] = 'Ungefähr';
$mod_strings['LBL_EMPTY'] = 'Leere';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Gesamt';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Zurücksetzen';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Die unten dargestellte Tabelle weist die Anzahl an geocodierten Modulobjekten auf, die nach den geocodierten Antworten gruppiert wurde. Beachten Sie, dass das Standardlimit von Abfragen bei Google Maps 2500 Anfragen pro Tag beträgt. Dieses Modul wird die geocodierten Informationen der Adressen während der Bearbeitung zwischenspeichern, um die Gesamtanzahl an verwendeten Anfragen zu reduzieren.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Es wird empfohlen, einen nächtlichen Cron-Job festzulegen, um die die Geocodierungsanfragen auszuführen. Zu diesem Zweck wurde eine benutzerdefinierte Zugangsstelle erstellt, auf die ohne Zertifikat zugegriffen werden kann. Die unten stehende URL ist für die gemeinsame Nutzung mit einer administrativ geplanten Aufgabe bestimmt. Bitte für weitere Informationen in den SuiteCRM-Unterlagen nachsehen.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'URLs exportieren';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Verwenden Sie die unten stehenden Links um komplette Adressen zu exportieren, die geocodierte Informationen benötigen. Verwenden Sie danach ein online oder offline Batch Geocoding Tool, um die Adressen zu geocodieren. Importieren Sie die Adressen in das Adressen-Cache Modul, das Sie für Ihre Karten verwenden, nachdem Sie mit der Geocodierung fertig sind. Beachten Sie, dass das Adressen-Cache Modul optional ist. Alle geocodierten Informationen werden im repräsentativen Modul gespeichert.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Adressen-Cache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Zu einer Zielkontaktliste hinzufügen';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Verarbeiten...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Konfigurationseinstellungen';
$mod_strings['LBL_CONFIG_SAVED'] = 'Die Einstellungen wurden erfolgreich gespeichert.';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Rechnungsadresse';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Versandadresse';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Hauptadresse';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternative Adresse';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flexible Verknüpfung';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresse (Einfach, Benutzer)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Benutzerdefiniert (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Aktiv';
$mod_strings['LBL_DISABLED'] = 'Deaktiviert';
$mod_strings['LBL_DEFAULT'] = 'Standard:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Standard:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Gültige Geokodierungsmodule:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Gültige Geocode-Tabellen:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Einstellung der Adressarten: Hier werden die Adressarten des Moduls beschrieben, die für die Geocodierung von Adressen genutzt werden. Erlaubte Werte: 'Rechnungs'\"";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Adresstyp für ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Adresstyp für Firmen:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Adresstyp für Kontakte:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Adresstyp für Interessenten:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Adresstyp für Verkaufschancen:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(der verknüpften Firma)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Adresstyp für Fälle:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Adresstyp für Projekte:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(der verknüpften Firma/Verkaufschance)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Adresstyp für Besprechungen:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Adresstyp für Zielkontakte:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Verknüpftes Objekt durch Flexibel Verbindendes Feld';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Einstellungen Marker Gruppenfeld: Hier wird das Feld beschrieben, das bei der Darstellung von Kartenmarkern  als Gruppenparameter verwendet werden soll. Beispiele: Zugewiesener_Benutzer_Name, Branche, Status, Verkaufsphase, Dringlichkeit.";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Gruppierungsfeld für';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Gruppierungsfeld für Firmen:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Gruppierungsfeld für Kontakte:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Gruppierungsfeld für Interessenten:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Gruppierungsfeld für Verkaufschancen:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Gruppierungsfeld für Fälle:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Gruppierungsfeld für Projekte:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Gruppenfeld für Meetings:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Gruppenfeld für Zielkontakte:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geokodierung/Google Einstellungen:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geokodierung API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Die URL für Google Maps API v3 oder Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Geheime Phrase für Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Der geheime Satz für den Proxy MD5 Abgleich.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limit für Geokodierung';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "geocoding_limit' definiert das Abfragelimit für das Auswählen der Datensätze zur Geokodierung.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google Geokodierungs Limit:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "google_geocoding_limit' definiert das Limit  für das Geokodieren mittels des Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limit für Adressenexport:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "export_addresses_limit' definiert das Abfragelimit  für das Exportieren von Datensätzen.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "'APPROXIMATE' Positionstypen erlauben:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "allow_approximate_location_type' - erlaubt 'UNGEFÄHRE' Positionstypen als 'KORREKTE' Geokodierungsresultate.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Adressen Cache Einstellungen:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Adressen Cache aktivieren (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "address_cache_get_enabled' erlaubt dem Adressen Cache Modul, Daten aus der Cache Tabelle zu holen.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Adressen Cache speichern aktivieren (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "address_cache_save_enabled' erlaubt dem Adressen Cache Modul, Daten in die Cache Tabelle zu speichern.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Logic Hooks Einstellungen:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Alle Logic Hooks aktivieren:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' erlaubt die Verwendung von Logic Hooks für die automatische Aktualisierung, basierend auf verbundenen Objekten. Es wird empfohlen, dies zu deaktivieren, wenn Sie Ihre SuiteCRM Version aktualisieren.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Markereinstellungen:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limit für Kartenmarker:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "map_markers_limit' definiert ein Abfragelimit beim Darstellen von Sätzen auf einer Karte.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Kartenmitte Breitengrad:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "map_default_center_latitude' definiert den Breitengrad für die Standardposition der Kartenmitte.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Kartenmitte Längengrad:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "map_default_center_longitude' definiert den Längengrad für die Standardposition der Kartenmitte.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Standardeinheit Kartentyp:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "map_default_unit_type' definiert die Standardeinheit für die Längendarstellung. Werte: 'mi' (Meilen) or 'km' (Kilometer).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Karte Standarddistanz:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "map_default_distance'  setzt die Standarddistanz für distanzbasierende Karten.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Doppelte Kartenmarkierung anpassen:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "map_duplicate_marker_adjustment' wieviel soll zu Längen- und Breitengrad addiert werden, wenn Markerpositionen identisch sind (zur besseren Darstellung).";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Karte Marker Gruppe Rastergröße:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "Bestimmt die Rastergröße zur gehäuften Darstellung von Markern.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Max. Karten-Zoom für Markergruppe:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "Definiert  die maximale Vergrößerung bei der Anhäufung nicht mehr angewendet wird.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Wichtige Notiz:  alle gespeicherten Einstellungen finden Sie in der 'config' Tabelle unter der Kategorie 'jjwg'.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Bereiche';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marken';
$mod_strings['LBL_PARENT_ID'] = 'Eltern ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Partner';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Schlüssel erhalten';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google-Api-Schlüssel';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Bitte erstellen Sie den Google-Api-Schlüssel in der Google Maps Administration.';
