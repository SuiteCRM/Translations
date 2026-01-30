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
    'LBL_LOADING' => 'Lade' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Optionen verbergen' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Löschen' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Geben Sie einen <b>Namen</b> für das Paket ein.  Der von Ihnen eingegebene Name, muss alphanumerisch sein und darf keine Leerzeichen enthalten. (Beispiel: HR_Management) <br/> <br/> Sie können Informationen zum <b>Autor</b> und eine <b>Beschreibung</b>, für das Paket bereitstellen. <br/> <br/> Klicken Sie auf <b>Speichern</b>, um das Paket zu erstellen.',
            'modify' => '<b>Anpassen</b><br /><br />Die Eigenschaften und mögliche Aktion für dieses Paket erscheinen hier.<br /><br />Sie können  <b>Name, Autor</b> und <b>Beschreibung</b> für das Paket ändern, und alle Module in das Paket anschauen bzw. ändern.<br /><br /><b>Neues Modul</b> auswählen, um ein neues Modul in diesem Paket zu erstellen.<br /><br />Wenn das Paket mindestens ein Modul enthält, kann das Paket <b>Publiziert</b> oder <b>Veröffentlicht</b> oder <b>Exportiert</b> werden.',
            'name' => '<b>Name</b><br /><br />Hier wird der Name des Pakets definiert <br /><br />Der Name muss alphanumerisch sein, muss mit eine Buchsstabe anfangen und dark keine Leerzeichen enthalten ( z.B. HR_Management)',
            'author' => 'Der <b>Autor</b> wird hier definiert und wird bei der Installation als Autor angezeigt.<br><br>Der Autor kann entweder einen Person oder Firma sein.',
            'description' => 'Hier ist die <b>Beschreibung</b> eingetragen, die auch bei der Installation angezeigt wird.',
            'publishbtn' => 'Klicken Sie auf <b>Veröffentlichen</b> , um alle Daten zu speichern und um eine .zip Datei zu erstellen, die eine installierbare Version des Pakets ist.<br><br>Verwenden Sie den Punkt <b>Module verwalten</b> , um die .zip Datei hochzuladen und das Paket zu installieren.',
            'deploybtn' => 'Klicken Sie auf <b>Einspielen</b> um alle eingegebenen Daten zu speichern und um das Paket inklusive aller Module in der aktuellen Instanz zu installieren.',
            'duplicatebtn' => 'Klicken Sie auf <b>Duplizieren</b> , um den Inhalt des Pakets auf ein neues Paket zu übertragen und dieses anzuzeigen <br/><br/>Für das neue Paket wird automatisch ein Name erzeugt, indem eine Nummer an den Namen des Pakets aus dem es erzeugt wurde, angefügt wird.',
            'exportbtn' => 'Klicken Sie auf <b>Export</b> , um eine .zip Datei für das Paket zu erstellen, das Ihre Anpassungen enthält.<br><br> Die erzeugte Datei ist keine installierbare Version des Pakets.<br><br>Benutzen Sie den Punkt <b>Module verwalten</b> , um die .zip Datei zu importieren und das Paket inklusive der Anpassungen in \'Module verwalten\' sichtbar zu machen.',
            'deletebtn' => 'Klicken Sie auf <b>Löschen</b> , um dieses Modul zu löschen.',
            'savebtn' => 'Durch Klicken auf <b>Speichern</b> speichern und aktivieren Sie alle Änderungen.',
            'existing_module' => 'Klicken Sie auf das <b>Modul</b> Symbol, um die Eigenschaften zu bearbeiten und um die mit dem Modul verbundenen Felder, Beziehungen und Layouts anzupassen.',
            'new_module' => 'Klicken Sie auf <b>Neues Modul</b> , um ein neues Modul für dieses Paket zu erstellen.',
            'key' => 'Dieser 5stellige alphanumerische <b>Schlüssel</b> wird allen Verzeichnissen, Klassennamen und Datenbanknamen in allen Modulen des aktuellen Pakets vorangestellt <br><br>Auf diese Art und Weise soll die Eindeutigkeit von Tabellennamen erreicht werden.',
            'readme' => 'Klicken Sie hier, um einen <b>Liesmich</b> Text für dieses Paket zu erstellen.<br><br>Dieser Text ist zum Zeitpunkt der Installation verfügbar.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Definieren Sie einen <b>Namen</b> für das Modul. Diese <b>Bezeichnung</b> scheint im Navigationsreiter auf. <br/><br/>Wenn Sie einen Navigationsreiter für das Modul sehen wollen, markieren Sie die <b>Navigation Tab</b> Checkbox.<br/><br/>Dann wählen Sie den Modultyp den Sie erstellen wollen.<br/><br/>Wählen Sie einen Vorlagetyp. Jede Vorlage enthält einen speziellen Satz an Feldern aber auch vordefinierte Layouts, die Sie als Grundlage für Ihr Modul verwenden können.<br/><br/>Klicken Sie auf <b>Speichern</b>, um das Modul zu erstellen.',
            'modify' => 'Sie können die Moduleigenschaften verändern oder die mit dem Modul verbundenen <b>Felder</b>, <b>Beziehungen</b> und <b>Layouts</b> anpassen.',
            'importable' => 'Wenn Sie das  <b>Importierbar</b> Kästchen markieren, wird der Import für das Modul ermöglicht.<br><br>Ein Link zum Import Assistenten erscheint im Schnellmenü des Moduls. Dieser erleichtert den Import von externen Daten in das neue Modul.',
            'team_security' => 'Das Markieren des <b>Teamkontrolle</b> Kontrollkästchens aktiviert die Teamkontrolle für dieses Modul.<br/><br/>Wenn die Teamkontrolle aktiviert ist, wird das Team Auswahlfeld in den Datensätzen sichtbar.',
            'reportable' => 'Durch das Markieren dieser Option können Berichte für dieses Modul erstellt werden.',
            'assignable' => 'Wenn dieses Kästchen markiert wird, können Datensätze bestimmten Benutzern zugewiesen werden.',
            'has_tab' => 'Das Markieren von <b>Navigations Tab</b> erstellt einen Navigationsreiter für das Modul.',
            'acl' => 'Das Markieren dieser Option aktiviert die Zugangskontrolle für dieses Modul, inklusive der Kontrolle auf Feldebene.',
            'studio' => 'Wenn dieses Kästchen markiert ist, können Administratoren dieses Modul im Studio anpassen.',
            'audit' => 'Wenn Sie dieses Kästchen markieren, wird die Audit Funktion für dieses Modul aktiviert.Änderungen von definierten Feldern werden für eine spätere Kontrolle aufgezeichnet.',
            'viewfieldsbtn' => 'Klicken Sie auf <b>Felder anzeigen</b> , um die mit diesem Modul verbundenen Felder zu sehen, und um eigene Felder zu erstellen oder zu ändern.',
            'viewrelsbtn' => 'Klicken Sie auf <b>Beziehungen anzeigen</b> , um die mit diesem Modul verbundenen Beziehungen zu sehen, und um neue Beziehungen zu erstellen.',
            'viewlayoutsbtn' => 'Klicken Sie auf <b>Layouts bearbeiten</b> , um die Layouts für das Modul anzusehen und die Feldanordnung innerhalb des Layouts anzupassen.',
            'duplicatebtn' => 'Klicken Sie auf <b>Duplizieren</b>, um den Inhalt des Pakets auf ein neues Paket zu übertragen und dieses anzuzeigen <br/><br/>Für das neue Paket wird automatisch ein Name erzeugt, indem eine Nummer an den Namen des Pakets aus dem es erzeugt wurde, angefügt wird.',
            'deletebtn' => 'Klick <b>Löschen</b> um dieses Modul zu löschen.',
            'name' => 'Dies ist der <b>Name</b> des aktuellen Moduls.<br/><br/>Der Name muss alphanumerisch sein, mit einem Buchstaben beginnen und darf keine Leerzeichen enthalten. (Beispiel: OP_Verwaltung)',
            'label' => 'Das ist die <b>Bezeichnung</b> , die im Navigationsreiter des Moduls erscheint.',
            'savebtn' => 'Klicke <b>Speichern</b> um alle eingegebenen Daten im Modul zu speichern.',
            'type_basic' => 'Die <b>Basis</b> Vorlage liefert typische Standardfelder wie Name, Zugewiesen an, Team, Erstellungsdatum und Beschreibung.',
            'type_company' => 'Die <b>Unternehmen</b> Vorlage liefert organisationstypische Felder wie z.B. Firmenname, Branche oder Rechnungsadresse.<br/><br/>Verwenden Sie diese Vorlage, um ein Modul zu erstellen, das dem Standardmodul “Firmen“ ähnlich ist.',
            'type_issue' => 'Die <b>Problem</b> Vorlage liefert Felder für Störfälle oder Supportanfragen mit Feldern wie z.B. Nummer, Status, Priorität und Beschreibung.<br/><br/>Verwenden Sie diese Vorlage, um Module zu erstellen, die dem Standardmodulen “Fälle“ und “Fehler“ ähnlich sind.',
            'type_person' => 'Die <b>Person</b> Vorlage stellt Felder für Individuen zur Verfügung – z.B. Anrede, Titel, Name, Adresse oder Telefonnummer. <br/><br/>Verwenden Sie diese Vorlage für Module ähnlich den Interessenten bzw. Kontaktpersonen.',
            'type_sale' => 'Die <b>Verkauf</b> Vorlage liefert typische Felder wie z.B. Quelle, Verkaufsphase, Betrag und Wahrscheinlichkeit.<br/><br/>Verwenden Sie diese Vorlage, um ein Modul zu erstellen, das dem Standardmodul /“Verkaufschancen/“ ähnlich ist.',
            'type_file' => 'Die <b>Datei</b> Vorlage liefert typische Felder für Dateien wie z.B. Dateiname, Dokumenttyp oder Veröffentlichungsdatum..<br/><br/>Verwenden Sie diese Vorlage, um ein Modul zu erstellen, das dem Standardmodul “Dokumente“ ähnlich ist.',

        ),
        'dropdowns' => array(
            'default' => 'Alle <b>Auswahlmenüs</b> für die Applikation sind hier aufgeführt.<br><br>Die Auswahlmenüs können für Auswahlfelder in allen Modulen verwendet werden.<br><br>Um zu ändern, klicken Sie auf einen Namen.<br><br>Klicken Sie auf <b>Auswahlmenü hinzufügen</b>, um ein neues Auswahlmenü zu erstellen.',
            'editdropdown' => 'Auswahlmenüs können für Standard oder angepasste Auswahlfelder in allen Modulen verwendet werden.<br><br>Vergeben Sie einen <b>Namen</b> für das Auswahlmenü.<br><br>Wenn Sprachpakete installiert sind, können Sie die <b>Sprache</b> für die Listeneinträge auswählen.<br><br>Im Feld  <b>Elementname</b> geben Sie einen Namen für den Eintrag an. Diese Label ist für Benutzer nicht sichtbar.<br><br>Im Feld <b>AnzeigeLabel</b> geben Sie einen für Benutzer sichtbaren Namen an.<br><br>Nach beiden Eingaben klicken Sie auf  <b>Hinzufügen</b> um das Element zum Auswahlmenü hinzuzufügen.<br><br>Um die Listeneinträge neu zu ordnen, ziehen sie ein Element in die gewünschte Position.<br><br>Um den Anzeigenamen eines Elements zu ändern, klicken Sie auf das <b>Bearbeiten</b> Symbol und geben ein neues Label ein. Um ein Element von des Auswahlmenüs zu löschen klicken Sie auf das <b>Löschen Icon</b>.<br><br>Um eine Änderung rückgängig zu machen klicken Sie auf <b>Rückgängig</b>. Um eine Änderung zurückzuholen die rückgängig gemacht wurde, klicken Sie auf <b>Wiederholen</b>.<br><br>Klicken Sie auf <b>Speichern</b> um das Auswahlmenü zu speichern.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Alle Felder, die im <b>Subpanel</b> angezeigt werden können, erscheinen hier.<br><br>Die <b>Standard</b> Spalte enthält die im Subpanel angezeigten Felder<br/><br/>Die <b>Verborgen</b> Spalte enthält Felder, die zur Standardspalte hinzugefügt werden können.'
        ,
            'savebtn' => 'Klicken Sie auf <b>Speichern & Einspielen</b>, um Ihre Änderungen zu speichern und sie innerhalb des Moduls zu aktivieren.',
            'historyBtn' => 'Klicken Sie <b>Verlauf anzeigen</b>, um ein zuvor gespeichertes Layout anzusehen und aus dem Verlauf rückzusichern.',
            'historyDefault' => 'Klicken Sie auf <b>Standard wiederherstellen</b>, um eine Ansicht auf das ursprüngliche Layout zurückzusetzen.',
            'Hidden' => '<b>Verborgene</b> Felder erscheinen nicht im Subpanel.',
            'Default' => '<b>Standard</b> Felder erscheinen im Subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Auf der linken Seite werden drei Spalten angezeigt. Die SpalteStandard" enthält Standardfelder der Listenansicht, die SpalteVerfügbar" enthält Felder, mit denen Benutzer eine personalisierte Listenansicht erstellen können, die SpalteVersteckt" enthält Felder, die für Sie als Administrator verfügbar sind, um sie entweder zur SpalteStandard"oderVerfügbar" hinzuzufügen.".'
        ,
            'savebtn' => 'Klicken Sie auf <b>Speichern & Einspielen</b>, um Ihre Änderungen zu speichern und sie innerhalb des Moduls zu aktivieren.',
            'historyBtn' => 'Klicken Sie auf <b>Verlauf ansehen</b>, um ein zuvor gespeichertes Layout anzusehen und gegebenenfalls rückzusichern.<br><br><b>Wiederherstellen</b> in <b>Verlauf ansehen</b> stellt die Platzierung der Felder wie in einem früher gesicherten Layout wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'historyDefault' => 'Klicken Sie <b>Standard wiederherstellen</b>, um das ursprüngliche Layout wiederherzustellen.<br><br><b>Standard wiederherstellen</b> stellt die Situation wie VOR Ihrem ersten Eingriff wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'Hidden' => '<b>Versteckte</b> Felder, für Benutzer nicht Sichtbar',
            'Available' => '<b>Verfügbare</b> Felder werden nicht angezeigt, können aber vom Benutzer hinzugefügt werden.',
            'Default' => '<b>Standard</b> Felder werden in Listenansichten angezeigt die nicht vom Benutzer angepasst wurden.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Alle Felder, die in der <b>Listenansicht</b> angezeigt werden können, erscheinen hier.<br><br>Die <b>Standard</b> Spalte enthält die Felder, die als Standard in der Listenansicht angezeigt werden<br/><br/>Die <b>Verborgen</b> Spalte enthält jene Felder, die zu den Standard oder Verfügbar Spalten hinzugefügt werden können.'
        ,
            'savebtn' => 'Klicken Sie auf <b>Speichern & Einspielen</b>, um Ihre Änderungen zu speichern und sie innerhalb des Moduls zu aktivieren.',
            'historyBtn' => 'Klicken Sie auf <b>Verlauf ansehen</b>, um ein zuvor gespeichertes Layout anzusehen und gegebenenfalls rückzusichern.<br><br><b>Wiederherstellen</b> in <b>Verlauf ansehen</b> stellt die Platzierung der Felder wie in einem früher gesicherten Layout wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'historyDefault' => 'Klicken Sie <b>Standard wiederherstellen</b>, um das ursprüngliche Layout wiederherzustellen.<br><br><b>Standard wiederherstellen</b> stellt die Situation wie VOR Ihrem ersten Eingriff wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'Hidden' => '<b>Versteckte</b> Felder, für Benutzer nicht Sichtbar',
            'Default' => '<b>Standard</b> Felder werden in Listenansichten angezeigt die nicht vom Benutzer angepasst wurden.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Hier erscheinen alle Felder, die in <b>der Filtermaske</b> angezeigt werden können. <br><br>Die <b>Standard-</b> Spalte enthält die Felder, die in das Suchformular angezeigt werden sollen. <br/> <br/> Die <b>ausgeblendete</b> Spalte enthält Felder für Sie als Administrator im Suchformular zur Verfügung stehen.'
        ,
            'savebtn' => 'Klicken auf <b>Speichern & Einspielen</b> speichert alle Änderungen und aktiviert sie',
            'Hidden' => '<b>Verborgene</b> Felder erscheinen nicht in der Suche.',
            'historyBtn' => 'Klicken Sie auf <b>Verlauf ansehen</b>, um ein zuvor gespeichertes Layout anzusehen und gegebenenfalls rückzusichern.<br><br><b>Wiederherstellen</b> in <b>Verlauf ansehen</b> stellt die Platzierung der Felder wie in einem früher gesicherten Layout wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'historyDefault' => 'Klicken Sie <b>Standard wiederherstellen</b>, um das ursprüngliche Layout wiederherzustellen.<br><br><b>Standard wiederherstellen</b> stellt die Situation wie VOR Ihrem ersten Eingriff wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'Default' => '<b>Standard-</b> Felder erscheinen in der Suche.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Der <b>Layout</b> Bereich enthält die Felder, die derzeit in der <b>Detailansicht</b> sichtbar sind.<br/><br/>Die <b>Toolbox</b> enthält den <b>Papierkorb</b> und jene Felder und Elemente, die zum Layout hinzugefügt werden können.<br><br>Ändern Sie das Layout, indem Sie Elemente zwischen der <b>Toolbox</b> und dem <b>Layout</b> bzw. innerhalb des Layouts in Position ziehen.<br><br>Um ein Feld aus dem Layout zu entfernen, ziehen Sie es in den <b>Papierkorb</b>. Das Feld erscheint dann zur weiteren Verwendung in der Toolbox auf.',
            'defaultquickcreate' => 'Der <b>Layoutbereich</b> enthält jene Felder, die momentan im <b>Schnellerfassungsformular</b> angezeigt werden.<br><br>Das Schnellerfassungsformular erscheint in der Subleiste für Module, sobald Sie auf Erstellen klicken.<br/><br/>Die <b>Toolbox</b> enthält den <b>Papierkorb</b> und jene Felder und Elemente, die zum Layout hinzugefügt werden können.<br><br>Sie können das Layout  ändern, indem Sie Elemente zwischen der <b>Toolbox</b> und dem <b>Layout</b> bzw. innerhalb des Layouts, mit Hilfe der Drag-and-Drop Funktion verschieben.<br><br>Ziehen Sie Felder aus dem Layout in den <b>Papierkorb</b>, um diese zu löschen. Das Feld steht danach in der Toolbox zur Verfügung, um dem Layout hinzugefügt zu werden.',
            //this default will be used for edit view
            'default' => 'Auf der linken Seite werden zwei Spalten angezeigt. In der rechten Spalte, Layout bzw. Layoutvorschau genannt, ändern Sie das Layout des Moduls. Die linke Spalte, Toolbox genannt, enthält nützliche Elemente und Werkzeuge für das Bearbeiten des Moduls.<br/><br/>Wenn die Arbeitsfläche Aktuelles Layout anzeigt, dann arbeiten Sie mit einer vom Model erstellten Kopie des Layouts.<br/><br/>Wird Layout Vorschau angezeigt, arbeiten Sie mit einer durch Klick auf Speichern erstellten Kopie, die unter Umständen nicht mehr der aktuell von Benutzern verwendeten Version entspricht.',
            'saveBtn' => 'Wenn Sie auf diese Schaltfläche drücken, wird das Layout gespeichert und Ihre Änderungen gesichert. Wenn Sie später weiterarbeiten, beginnen Sie an dieser Stelle. Allerdings wird Ihr Layout nicht von anderen gesehen, bevor Sie auf “Speichern und Veröffentlichen“ drücken.',
            'historyBtn' => 'Klicken Sie auf <b>Verlauf ansehen</b>, um ein zuvor gespeichertes Layout anzusehen und gegebenenfalls rückzusichern.<br><br><b>Wiederherstellen</b> in <b>Verlauf ansehen</b> stellt die Platzierung der Felder wie in einem früher gesicherten Layout wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'historyDefault' => 'Klicken Sie <b>Standard wiederherstellen</b>, um das ursprüngliche Layout wiederherzustellen.<br><br><b>Standard wiederherstellen</b> stellt die Situation wie VOR Ihrem ersten Eingriff wieder her. Um die Feldbezeichnungen zu ändern, klicken Sie auf das Bearbeiten Symbol neben jedem Feld.',
            'publishBtn' => 'Klicken Sie auf diese Schaltfläche, um das Layout einzuspielen. Das Layout wird sofort für andere Benutzer verfügbar.',
            'toolbox' => 'Die Toolbox enthält viele nützliche Funktionen zur Bearbeitung von Layouts – einen Papierkorb, zusätzliche Elemente sowie alle verfügbaren Felder. Alle können mit der Drag-and-Drop-Funktion bearbeitet werden.',
            'panels' => 'Diese Ansicht zeigt, wie Ihr Layout nach der Anwendung für den Benutzer angezeigt wird.<br/><br/>Sie können Elemente wie z.B. Felder oder Zeilen per Drag-and-Drop Funktion positionieren"',
            'delete' => 'Ziehen Sie ein beliebiges Element hierher, um es aus dem Layout zu entfernen.',
            'property' => 'Bearbeiten Sie die Bezeichnung für dieses Feld. <br/>Die <b>Reiter-Reihenfolge</b> definiert, in welcher Reihenfolge der Reiter zwischen Feldern wechselt.',
        ),
        'fieldsEditor' => array(
            'default' => 'Die für dieses Modul verfügbaren <b>Felder</b> sind hier nach Feldnamen sortiert angeführt.<br><br>Benutzerdefinierte Felder befinden sich über den Standardfeldern.<br><br>Um ein Feld zu bearbeiten, klicken Sie auf den <b>Feldnamen</b>.<br/><br/>Um ein neues Feld zu erstellen, klicken Sie auf <b>Feld hinzufügen</b>.',
            'mbDefault' => 'Die für dieses Modul verfügbaren <b>Felder</b> sind hier nach Feldnamen sortiert angeführt.<br><br>Klicken Sie auf den Feldnamen, um die Feldeigenschaften zu bearbeiten.<br><br>Um ein neues Feld zu erstellen, klicken Sie auf <b>Feld hinzufügen</b>. Die Bezeichnung sowie andere Feldeigenschaften können später durch klicken auf den Feldnamen bearbeitet werden.<br><br>Nachdem das Modul eingespielt wurde, werden die unterModule Erstellen" neu erstellten Felder im Studio als Standardfelder angesehen."',
            'addField' => 'Wählen Sie einen <b>Datentyp</b> für das neue Feld. Von diesem Datentyp ist abhängig, welche Zeichen in das Feld eingegeben werden können. Zum Beispiel können in ein Feld vom Typ Integer nur ganze Zahlen eingegeben werden.<br><br> Teilen Sie dem Feld einen <b>Namen</b> zu. Der Name muss alphanumerisch sein und darf keine Leerzeichen enthalten. Unterstriche sind erlaubt.<br><br> Der <b>Anzeigename</b> ist jene Bezeichnung, die für die Felder in den Masken erscheint. Die <b>SystemLabel</b> bezeichnet das Feld im Code bzw. in der Datenbank.<br><br> Vom Datentyp abhängig können einige oder alle der folgenden Eigenschaften bestimmt werden:<br><br> <b>Hilfetext</b> erscheint vorübergehend, wenn ein Benutzer die Maus über das Feld bewegt und kann angewendet werden, um auf eine bestimmte Eingabe hinzuweisen.<br><br> <b>Kommentar</b> Wird nur im Studio oder unter Module erstellen angezeigt und dient nur für Administratorennotizen.<br><br> Der <b>Standardwert</b> erscheint als Wert im Feld. Benutzer können diesen verwenden oder einen neuen Wert eintragen.<br><br>Wenn Sie <b>Massenänderung</b> ankreuzen, können Sie dieses Feld über Massenänderung bearbeiten.<br><br>Der <b>Max. Größe</b> Parameter bestimmt, wie viele Zeichen für das Feld vorgesehen sind. <br><br>Benutzen Sie <b>Erforderliches Feld</b> , um die Eingabe in diesem Feld zwingend zu machen. Der Eintrag kann ohne Wert in diesem Feld nicht gesichert werden. <br><br>Wählen Sie <b>Berichtspflichtig</b> , um dieses Feld später in Berichten und Abfragen benutzen zu können. <br><br>Wählen Sie das <b>Audit</b> Kästchen, um Änderungen dieses Feldes später nachvollziehen zu können.<br><br>Wählen Sie eine Option für das Feld <b>Importierbar</b>, um den Import zu genehmigen, zu verbieten oder zwingend zu machen.<br><br>Wählen Sie eine Option in <b>Duplikate zusammenführen</b> , um die Duplikatssuche und das Zusammenführen zu genehmigen oder nicht. <br><br>Für gewisse Datentypen können noch zusätzliche Eigenschaften definiert werden.',
            'editField' => 'Die Eigenschaften dieses Feldes können benutzerdefiniert werden.<br><br>Klicken Sie auf <b>Vervielfältigen</b> , um ein neues Feld mit denselben Eigenschaften zu erstellen.',
            'mbeditField' => 'Die <b>FeldLabel</b> eines Vorlagefeldes kann benutzerdefiniert werden. Andere Eigenschaften können jedoch nicht verändert werden.<br><br>Klicken Sie auf <b>Vervielfältigen</b> , um ein neues Feld zu erstellen, das über dieselben Eigenschaften verfügt.<br><br>Um ein Standardfeld komplett aus einem Modul zu entfernen, löschen Sie es einfach aus dem zugehörigen <b>Layout</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportieren Sie Studio-Benutzerdefinierungen indem Sie Pakete erstellen, die durch <b>Module verwalten</b> in eine andere SuiteCRM Instanz hochgeladen werden können.<br><br>Tragen Sie zuerst einen <b>Paketnamen</b> ein.  Sie können ebenfalls einen <b>Autor</b> bzw. eine <b>Beschreibung</b> zum Paket hinzufügen.<br><br>Wählen Sie die Module, die zu exportierende Benutzerdefinierungen umfassen (Es werden nur Module mit bestehenden Benutzerdefinierungen angezeigt.)<br><br>Klicken Sie auf <b>Export</b> , um eine .zip Datei für das Paket zu erstellen, das die Benutzerdefinierungen beinhaltet.',
            'exportCustomBtn' => 'Klicken Sie <b>Export</b>, um eine .zip-Datei für das Paket mit den Benutzerdefinitionen zu erstellen, das exportiert werden soll."',
            'name' => 'Das ist der <b>Name</b> des Pakets. Während der Installation wird dieser angezeigt.',
            'author' => 'Dies ist der <b>Autor</b>, der während der Installation als Label der Einheit, die das Paket erstellt hat, angezeigt wird. Der Autor kann eine Person oder eine Firma sein.',
            'description' => 'Hier ist die <b>Beschreibung</b> eingetragen, die auch bei der Installation angezeigt wird.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Willkommen im Bereich <b>Entwicklerwerkzeuge</b1>.<br/><br/>Benutzen Sie die Werkzeuge in diesem Bereich, um Standardmodule und benutzerdefinierte Module/ Felder zu erstellen bzw. zu verwalten.',
            'studioBtn' => 'Passen Sie mit <b>Studio</b> installierte Module an, indem Sie die Felderanordnung ändern, aus verfügbaren Feldern auswählen oder neue Datenfelder erstellen.',
            'mbBtn' => 'Verwenden Sie <b>Module erstellen</b>, um neue Module zu erstellen.',
            'sugarPortalBtn' => 'Verwenden Sie den <b>SuiteCRM Portal Editor</b>, um das SuiteCRM Portal zu verwalten und zu benutzerdefinieren.',
            'dropDownEditorBtn' => 'Verwenden Sie den <b>Auswahlmenü Editor</b> , um globale Auswahlmenüs für Auswahlmenüfelder zu erstellen und zu bearbeiten.',
            'appBtn' => 'Verwenden Sie den Anwendungsmodus, um verschiedene Parameter des Programms zu verändern, zum Beispiel die Anzahl an TPS Berichten auf der Startseite.',
            'backBtn' => 'Zurück zum vorherigen Schritt.',
            'studioHelp' => 'Benutzen Sie das <b>Studio</b>, um installierte Module anzupassen.',
            'moduleBtn' => 'Hier klicken, um das Modul zu bearbeiten.',
            'moduleHelp' => 'Wählen Sie die Modulkomponente, die Sie bearbeiten möchten.',
            'fieldsBtn' => 'Bearbeiten Sie, welche Informationen im Modul gespeichert werden, indem Sie die<b>Felder</b>im Modul kontrollieren.,<br/><br/>Sie können hier benutzerdefinierte Felder erstellen und ändern.',
            'labelsBtn' => 'Bearbeiten Sie die <b>Feld-Labels</b> die für Werte dieses Moduls angezeigt werden sollen.',
            'relationshipsBtn' => 'Eine neue <b>Beziehung</b> für das Modul erstellen oder eine bereits existierende ansehen.',
            'layoutsBtn' => 'Benutzerdefinieren Sie die<b>Layouts</b> der Bearbeitungs-, Detail-, Listen- und Suchansichten an.',
            'subpanelBtn' => 'Bearbeiten Sie, welche Information in den Subpanels dieses Moduls gezeigt wird',
            'portalBtn' => 'Benutzerdefinieren Sie die <b>Layouts</b> für das <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Wählen Sie ein <b> Layout zum Bearbeiten</b>.<br/<br/>Um das Layout mit Eingabefeldern zu ändern, klicken Sie auf <b>Bearbeitungsansicht</b>.<br/><br/>Um das Layout mit Daten zu ändern, klicken Sie auf  <b>Detailansicht</b>.<br/><br/>Um die Spalten zu ändern, die in der Standardliste erscheinen, klicken Sie auf <b>Listenansicht</b>.<br/><br/>Um standardmäßige und erweiterte Suchformulare zu ändern, klicken Sie auf <b>Suche</b>.',
            'subpanelHelp' => 'Die <b>Subleisten</b> des Moduls, die benutzerdefiniert werden können, erscheinen hier.<br><br>Klicken Sie auf ein Symbol, um ein Modul zum Bearbeiten auszuwählen.',
            'newPackage' => 'Klicken Sie auf <b>Neues Paket</b>, um ein neues Paket zu erstellen.',
            'exportBtn' => 'Klicken Sie auf <b>Benutzerdefinitionen exportieren</b>, um ein Paket mit  in Studio erstellten Benutzerdefinitionen für bestimmte Module zu erstellen.',
            'mbHelp' => 'Mit der Funktion <b>Module erstellen</b> erstellen Sie neue Pakete, die benutzerdefinierte Module enthalten – basierend auf standardmäßigen oder personalisierten Objekten.',
            'viewBtnEditView' => 'Benutzerdefinieren Sie das Layout der <b>Bearbeitungsansicht</b> .<br><br>Die Bearbeitungsansicht ist das Formular, das die Eingabefelder für  die Datenerfassung durch den Benutzer enthält.',
            'viewBtnDetailView' => 'Benutzerdefinieren des <b>Detailansicht</b> Layouts.<br><br>Die Detailansicht stellt von den Benutzern erfasste Felddaten dar.',
            'viewBtnDashlet' => 'Benutzerdefinieren Sie das <b>SuiteCRM Dashlet</b> des Moduls, inklusive der zugehörigen Such- und Listenansicht.<br><br>Das SuiteCRM Dashlet ist verfügbar und kann zu der Startseite hinzugefügt werden.',
            'viewBtnListView' => 'Benutzerdefinieren Sie das Layout der <b>Listenansicht</b> .<br><br>In der Listenansicht werden die Suchresultate dargestellt.',
            'searchBtn' => 'Benutzerdefinieren Sie das <b>Suche</b> Layout des Moduls.<br><br>Bestimmen Sie, welche Felder als Filter zur Darstellung der Listenansichten verwendet werden können.',
            'viewBtnQuickCreate' => 'Benutzerdefinieren des <b>Schnellerfassungs</b> Layouts.<br><br>Das Schnellerfassungsformular kommt in Subleisten und im E-Mail Modul zur Anwendung.',
            'addLayoutHelp' => "Um ein eigenes Layout für die Berechtigungsgruppe zu erstellen, wähle eine bestehende Berechtigungsgruppe und ändere dann das entsprechende Layout.",
            'searchHelp' => 'Die anpassbaren <b>Filter</b>-Formen, können hier angepasst werden. <br><br>Filter-Formulare enthalten Felder zum Filtern von Datensätzen. <br> <br>Klicken Sie auf ein Symbol um das Filter Layout bearbeiten zu können.',
            'dashletHelp' => 'Hier erscheinen die <b>SuiteCRM Dashlet</b> Layouts, die benutzerdefiniert werden können.<br><br>Das SuiteCRM Dashlet wird für das Hinzufügen zu den Seiten der Startseite verfügbar sein.',
            'DashletListViewBtn' => 'Die <b>SuiteCRM Dashlet Listenansicht</b> zeigt Datensätze basierend auf den SuiteCRM Dashlet Suchfiltern.',
            'DashletSearchViewBtn' => 'Der <b>SuiteCRM Dashlet Filter</b> filtert Datensätze für die SuiteCRM Dashlet Listenansicht.',
            'popupHelp' => 'Die <b>Popup</b> Layouts, die benutzerdefiniert werden können, werden hier angezeigt<br>',
            'PopupListViewBtn' => 'Die <b>Popup Listenansicht</b> stellt Datensätze basierend auf den Popup Suchansichten dar.',
            'PopupSearchViewBtn' => 'Die <b>Popup Suche</b> überprüft Datensätze für die Popup Listenansicht.',
            'BasicSearchBtn' => 'Optimiere den <b>Schnellfilter</b>-Formular, der in der Registerkarte "Schnellfilter" im Bereich "Filter" für das Modul angezeigt wird.',
            'AdvancedSearchBtn' => 'Optimiere den <b>erweiterten Schnellfilter</b>-Formular, der in der Registerkarte "erweiterter Schnellfilter" im Bereich "Filter" für das Modul angezeigt wird.',
            'portalHelp' => '<b>SuiteCRM Portal</b> verwalten und benutzerdefinieren.',
            'SPUploadCSS' => 'Eine <b>Formatvorlage</b> für das SuiteCRM Portal hochladen.',
            'SPSync' => '<b>Synchronisieren</b> von benutzerdefinierten Änderungen der Instanz des SuiteCRM Portals.',
            'Layouts' => 'Benutzerdefinieren der <b>Layouts</b> der Module des SuiteCRM Portals.',
            'portalLayoutHelp' => 'Die Module innerhalb des SuiteCRM Portals erscheinen in diesem Bereich.<br><br>Wählen Sie ein Modul, um die <b>Layouts</b> zu bearbeiten.',
            'relationshipsHelp' => 'Alle <b>Beziehungen</b> die zwischen diesem und anderen Modulen existieren, werden hier angezeigt.<br><br>Der <b>Name</b> der Verknüpfung ist der vom System erzeugte Name für die Verknüpfung.<br><br>Das <b>Primärmodul</b> ist das Modul, das die Verknüpfung bestimmt. Es werden zum Beispiel alle Verknüpfungsseigenschaften, bei denen das Firmenmodul das Primärmodul ist, in der Tabelle Firmen (Accounts)  in der Datenbank gespeichert.<br><br>Der <b>Typ</b> ist der Typ der Verknüpfung, die zwischen dem Primärmodul und dem <b>verknüpften Modul</b> besteht.<br><br>Klicken Sie auf einen Spaltenkopf, um nach dieser Spalte zu sortieren.<br><br>Klicken Sie auf eine Zeile in der Tabelle der Beziehungen, um die zugehörigen Eigenschaften zu sehen.<br><br>Klicken Sie auf <b>Verknüpfung hinzufügen</b> , um eine neue Verknüpfung zu erstellen.<br><br>Beziehungen können zwischen allen eingespielten Modulen bestehen.',
            'relationshipHelp' => '<b>Beziehungen</b> können zwischen dem Modul und anderen eingespielten Modulen erstellt werden.<br><br> Beziehungen sind sichtbar einerseits durch Subleisten und andererseits durch verknüpfte Felder in den zugehörigen Modulen dargestellt.<br><br>Wählen Sie einen der folgenden <b>Beziehungstypen</b> für das Modul:<br><br> <b>Eins-zu-Eins</b> - Beide Module enthalten verknüpfte Felder<br><br> <b>Eins-zu-Eins</b> - Das Primärmodul enthält eine Subleiste und das zweite Modul zeigt ein verknüpftes Feld an<br><br> <b>Eins-zu-Mehrere</b> - Beide Moduldatensätze erhalten eine Subleiste<br><br> Wählen Sie <b>Verknüpftes Modul</b> für die Beziehungen. <br><br>Wenn der Verknüpfungstyp Subleisten beinhaltet, dann wählen Sie die Subleisten Ansicht der entsprechenden Module.<br><br> Klicken Sie auf <b>Speichern</b> , um die Verknüpfung zu erstellen.',
            'convertLeadHelp' => 'Hier können Sie Module zum Layout konvertier Bildschirm ändern und das Layout der bestehenden hinzufügen. <br/>
Sie können die Module durch ziehen ihre Zeilen in der Tabelle nachbestellen. <br/> <br/> <b>Modul:</b> Der Name des Moduls. <br/> <br/>
<b>Erforderlich:</b> Benötigten Module müssen erstellt oder ausgewählt werden, bevor der Interessent umgewandelt werden kann. <br/> <br/>
<b>Daten kopieren:</b> Wenn diese Option aktiviert ist, werden Felder aus den Interessenten auf Felder mit dem gleichen Namen in die neu erstellten Datensätze kopiert. <br/> <br/> <b>Erlaubt die Auswahl:</b> Module mit einem Relate-Feld in den Kontakten können ausgewählt werden, anstatt während des konvertiere-Interesenten-Prozess erstellt werden. <br/> <br/>
<b>Bearbeiten:</b> Ändern Sie das konvertier Layout für dieses Modul. <br/> <br/> <b>Löschen:</b> Entfernen Sie dieses Modul aus dem konvertier Layout. <br/> <br/>',


            'editDropDownBtn' => 'Ein globales Auswahlmenü bearbeiten',
            'addDropDownBtn' => 'Ein neues globales Auswahlmenü erstellen',
        ),
        'fieldsHelp' => array(
            'default' => 'Die <b>Felder</b> des Moduls sind hier nach FeldLabel sortiert aufgeführt.<br><br>Die Modulvorlage enthält eine Anzahl vordefinierter Felder.<br><br>Um ein neues Feld zu erstellen, klicken Sie auf <b>Feld hinzufügen</b>.<br><br>Um ein Feld zu bearbeiten, klicken Sie auf den <b>Feldnamen</b>.<br><br>Nachdem das Modul eingespielt wurde, werden die unterModule erstellen" neu erstellten Felder im Studio als Standardfelder betrachtet.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Alle <b>Beziehungen</b> die zwischen diesem und anderen Modulen erstellt wurden, werden hier angezeigt.<br><br>Der <b>Name</b> der Verknüpfung ist der vom System erzeugte Name für die Verknüpfung.<br><br> Die Eigenschaften der Beziehung werden in den Datenbanktabellen des Primärmoduls gespeichert.<br><br>Der <b>Typ</b> ist der Typ der Verknüpfung, die zwischen dem Primärmodul und dem <b>verknüpften Modul</b> besteht.<br><br>Klicken Sie auf einen Spaltenkopf, um nach dieser Spalte zu sortieren.<br><br>Klicken Sie auf eine Zeile in der Tabelle der Beziehungen, um die zugehörigen Eigenschaften zu sehen.<br><br>Klicken Sie auf <b>Verknüpfung hinzufügen</b>, um eine neue Verknüpfung zu erstellen.<br><br>Beziehungen können zwischen allen eingesetzen Modulen bestehen.',
            'addrelbtn' => 'Gehen Sie mit der Maus über Hilfe, um eine Verknüpfung zu erstellen.',
            'addRelationship' => '<b>Beziehungen</b> können zwischen dem Modul und anderen benutzerdefinierten oder eingespielten Modulen erstellt werden.<br><br> Beziehungen sind sichtbar einerseits durch Subleisten und andererseits durch verknüpfte Felder in den zugehörigen Modulen dargestellt.<br><br>Wählen Sie einen der folgenden <b>Beziehungstypen</b> für das Modul:<br><br> <b>Eins-zu-Eins</b> - Beide Module enthalten verknüpfte Felder<br><br> <b>Eins-zu-Eins</b> - Das Primärmodul enthält eine Subleiste und das zweite Modul zeigt ein verknüpftes Feld an<br><br> <b>Eins-zu-Mehrere</b> - Beide Moduldatensätze erhalten eine Subleiste<br><br> Wählen Sie <b>Verknüpftes Modul</b> für die Beziehungen. <br><br>Wenn der Verknüpfungstyp Subleisten beinhaltet, dann wählen Sie die Subleisten Ansicht der entsprechenden Module.<br><br> Klicken Sie auf <b>Speichern</b> , um die Verknüpfung zu erstellen.',
        ),
        'labelsHelp' => array(
            'default' => 'Es können die <b>Labels</b> der Felder sowie andere Bennennungen im Modul bearbeitet werden.<br><br>Sie können die Bezeichnung eines Feldes ändern, indem Sie den neuen Text eingeben und auf <b>Speichern</b> klicken.<br><br>Falls innerhalb der Anwendung Sprachpakete installiert wurden, können Sie die <b>Sprache</b> für die Benennung auswählen.',
            'saveBtn' => 'Klicken Sie auf <b>Speichern</b>, um alle Änderungen zu sichern.',
            'publishBtn' => 'Klicken Sie auf <b>Speichern & Einspielen</b>, um alle Änderungen zu speichern und zu aktivieren.',
        ),
        'portalSync' => array(
            'default' => 'Geben Sie die <b>SuiteCRM Portal URL</b> jener Portalinstanz ein, die Sie aktualisieren wollen und klicken Sie auf <b>OK</b>.<br><br>Danach tragen Sie einen gültigen SuiteCRM Benutzernamen und Passwort ein und klicken auf<b>Sync starten</b>.<br><br>Die benutzerdefinierten Änderungen des SuiteCRM Portal <b>Layouts</b>, zusammen mit der ggf. hochgeladenen <b>Formatvorlage</b> werden zur ausgewählten Portalinstanz transferiert.',
        ),
        'portalStyle' => array(
            'default' => 'Sie können das Layout des SuiteCRM Portals bearbeiten, indem Sie eine Formatvorlage verwenden.<br><br>Wählen Sie eine <b>Formatvorlage</b> zum Hochladen aus.<br><br>Diese Formatvorlage wird mit der nächsten Synchronisation im SuiteCRM Portal eingebettet.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Um mit einem Projekt anzufangen, klicken Sie auf <b>Neues Paket</b> um ein neues Paket zu erstellen, das Ihre selbst erstellten Module enthalten wird. <br/><br/>Jedes Paket kann ein oder mehrere Module beinhalten.<br/><br/>Zum Beisipiel, falls Sie ein Paket, das ein benutzerdefiniertes Modul, das Sie mit einem Standard-Firmenmodul verbinden wollen, erstellen. Oder falls Sie ein Paket mit mehreren Modulen, die gemeinsam als Projekt miteinander arbeiten, und untereinander sowie mit bereits bestehenden Modulen verknüpft sind.',
            'somepackages' => 'Ein <b>Paket</b> dient als Container für benutzerdefinierte Module, die alle Teil eines Projekts sind. Das Paket kann ein oder mehrere benutzerdefinierte  <b>Module</b>, die miteinander oder mit bereits bestehenden Modulen der Anwendung verknüpft werden können, enthalten.<br/><br/>Nachdem Sie ein Paket für Ihr Projekt erstellt haben, können Sie direkt Module für dieses Paket erstellen oder die begonnene Arbeit zu einem späteren Zeitpunkt fortführen.<br><br>Sobald das Projekt fertig ist, können Sie das Paket <b>einspielen</b> ,um die benutzerdefinierten Module in der Anwendung zu installieren.',
            'afterSave' => 'Ihr neues Paket sollte zumindestens ein Modul beinhalten. Sie können ein oder mehrere benutzerdefinierte Module für das Paket erstellen.<br/><br/>Klicken Sie auf <b>Neues Modul</b> , um ein Modul für dieses Paket zu erstellen.<br/><br/> Nachdem Sie zumindest ein Modul erstellt haben, können Sie es für Ihre Instanz oder für Instanzen anderer Benutzer veröffentlichen oder einspielen, um es verfügbar zu machen.<br/><br/> Um das Paket in einem Schritt in Ihre Instanz einzusetzen, klicken Sie auf <b>einspielen</b>.<br><br>Klicken Sie auf <b>Veröffentlichen</b> , um das Paket als .zip Datei zu speichern. Nachdem die .zip Datei in Ihrem System gespeichert wurde, verwenden Sie <b>Module verwalten</b>, um das Paket in Ihre Instanz hochzuladen und zu installieren.<br/><br/>Sie können die Datei auch mit anderen Benutzern teilen, um ihnen die Installation in deren Instanz zu ermöglichen.',
            'create' => 'Ein <b>Paket</b> agiert als Container für benutzerdefinierte Module, die alle Teil eines Projekts sind. Das Paket kann ein oder mehrere benutzerdefinierte <b>Module</b> enthalten, miteinander oder mit bereits bestehenden Modulen verknüpft werden können.<br/><br/>Nachdem Sie ein Paket für Ihr Projekt erstellt haben, können Sie direkt Module für dieses Paket erstellen oder die begonnene Arbeit zu einem späteren Zeitpunkt fortführen.',
        ),
        'main' => array(
            'welcome' => 'Verwenden Sie die <b>Entwicklertools</b> um Standard- und benutzerdefinierte Module und Felder zu erstellen und zu verwalten.<br/><br/>Klicken Sie auf <b>Studio</b>, um Module innerhalb der Anwendung zu verwalten. <br/><br/>Für die Erstellung neuer Module klicken Sie auf <b>Module erstellen</b>.',
            'studioWelcome' => 'Alle momentan installierten Module, sowohl standard- als auch module-loaded Objekte, können im Studio benutzerdefiniert werden.'
        ),
        'module' => array(
            'somemodules' => "Nachdem das aktuelle Paket zumindest ein Modul enthält, können Sie die Module in diesem Paket in Ihre SuiteCRM Instanz <b>einspielen</b> oder es <b>Publizieren</b>, um es mittels dem <b>Modul-Loader</b> in dieser oder einer anderen Instanz zu installieren.<br/><br/>Um das Paket direkt innerhalb Ihrer Instanz zu installieren, klicken Sie auf <b>einspielen</b>.<br><br>Um eine .zip Datei zu erstellen, die mittels <b>Modul-Loader</b> in Ihrer oder in einer andere Instanz hochgeladen und installiert werden kann, klicken Sie auf <b>Veröffentlichen</b>.<br/><br/> Sie können die Module für dieses Paket Schritt für Schritt erarbeiten und sie einspielen oder veröffentlichen, sobald Sie soweit sind.<br/><br/>Nachdem Sie ein Paket eingespielt oder veröffentlicht haben, können Sie Änderungen vornehmen bzw. die Moduleigenschaften ändern. Anschließend veröffentlichen oder setzen Sie das Paket erneut ein, um die Änderungen umzusetzen.",
            'editView' => 'Hier können Sie bereits bestehende Felder bearbeiten. Sie können bereits bestehende Felder löschen oder verfügbare aus der linken Leiste hinzufügen.',
            'create' => 'Beachten Sie beim Wählen der <b>Art</b> des zu erstellenden Moduls, dass Sie die Feldtypen, die innerhalb des Moduls vorhanden sein sollen, nicht vergessen.<br/><br/>Jede Modulvorlage enthält eine Reihe von Feldern, die dem Titel der Modulart entspricht. <br/><br/>Grundlage</b> - Bietet Grundlagenfelder, die in den Standardmodulen auftreten, wie z. B. der Name, Zugewiesen an, Team, Erstellungsdatum und Angabenfelder. <br/><br/> <b>Firma</b> - Bietet organisationsspezifische Felder, wie z. B. Firmenname, Branche und Rechnungsadresse. Mit dieser Vorlage erstellen Sie Module, die dem Standardfirmen Modul ähneln. <br/><br/> <b>Person</b> - Bietet spezifische individuelle Felder, wie z. B. Anrede, Titel, Name, Adresse und Telefonnummer. Mit dieser Vorlage erstellen Sie Module, die dem Standardkontakte und  -interessenten Modul ähneln. <br/><br/> <b>Problem</b> - Bietet fall- und fehlerspezifische Felder, wie z. B. Nummer, Status, Dringlichkeit und Beschreibung. Mit dieser Vorlage erstellen Sie Module, die dem Standardfälle und -fehler Modul ähneln. <br/><br/> Hinweis: Nach der Modulerstellung können Sie sowohl das Label der von der Vorlage bereitgestellten Felder bearbeiten, als auch benutzerdefinierte Felder erstellen und zum Modul-Layout hinzufügen.',
            'afterSave' => 'Sie können das Modul personalisieren, indem Sie Felder erstellen oder bearbeiten, Beziehungen zu anderen Modulen herstellen und die Felder auf den Layouts organisieren.<br/><br/>Um die Standardfelder anzuzeigen und benutzerdefinierte Felder zu verwalten, klicken Sie auf <b>Felder anzeigen</b>.<br/><br/>Um Beziehungen zu anderen bereits bestehenden oder neu erstellten Modulen herzustellen und diese zu verwalten, klicken Sie auf <b>Beziehungen anzeigen</b>.<br/><br/>Um die Layouts der Module zu bearbeiten, klicken Sie auf <b>Layouts anzeigen</b>. Sie können die Bearbeitungs-, Detail- und Listenansicht für das Modul ändern – genauso wie bei einem vorgefertigten Modul.<br/><br/> Um ein Modul mit den Eigenschaften des angezeigten Moduls zu erstellen, klicken Sie auf <b>Duplizieren</b>. Sie können das neue Modul weiter personalisieren.',
            'viewfields' => 'Die Felder im Modul können personalisiert werden.<br/><br/>Sie können keine Standardfelder löschen, aber Sie können sie aus den entsprechenden Layouts entfernen.<br/><br/>Sie können auch sehr schnell neue Felder mit dengleichen Eigenschaften erstellen, indem Sie im Formular <b>Eigenschaften</b> auf <b>Klonen</b>  klicken. Geben Sie beliebig viele neue Eigenschaften ein und klicken Sie <b>Speichern</b>.<br/><br/>Es wird empfohlen, alle Einstellungen für Standardfelder und benutzerdefinierte Felder zu wählen, bevor Sie das Paket mit dem neuen Modul veröffentlichen bzw. installieren.',
            'viewrelationships' => 'Sie können m:n-Beziehungen zwischen diesem Modul und denen im Paket, und/oder zwischen diesem Modul und bereits installierten Modulen herstellen<br><br>(Um one-to-many und one-to-one Beziehungen herzustellen, erstellen Sie <b>Verknüpfungsfelder</b> und <b>flexible Verknüpfungsfelder</b> für die jeweiligen Module.',
            'viewlayouts' => 'Über die <b>Bearbeitungsansicht</b> bestimmen Sie, welche Felder für die Dateneingabe verfügbar sind. Über die <b>Detailansicht</b> wird bestimmt, wie die Daten angezeigt werden. Die Ansichten können unterschiedlich sein. <br/><br/>Das Schnellerstellungsformular wird angezeigt, wenn die Schaltfläche <b>Erstellen</b> in einem Untermenü geklickt wird. Standardmäßig ist das <b>Schnellerstellungsformular</b> identisch zu <b>Bearbeitungsansicht</b>. Sie können das Schnellerstellungsformular ebenfalls personalisieren, so dass es andere Felder als die Bearbeitungsansicht enthält.<br><br>Die Modulsicherheit bestimmen Sie über die Benutzerdefinition des Layouts, sowie über die <b>Rollenverwaltung</b>.<br><br>',
            'existingModule' => 'Nachdem Sie das Modul erstellt bzw. bearbeitet haben, können Sie weitere Module erstellen oder zum Paket zurückkehren, um es zu  <b>veröffentlichen</b> oder <b>einzuspielen</b>.<br><br>Um ein neues Modul zu erstellen, klicken Sie auf <b>Duplizieren</b>. Dies erstellt ein Modul mit identischen Eigenschaften. Alternativ gehen Sie zurück zum Paket und wählen <b>Neues Modul</b> aus.<br><br> Wenn Sie bereit sind, das Paket mit dem Modul zu <b>veröffentlichen</b> oder <b>einzuspielen</b> gehen Sie zurück zum Paket, um diese Funktion durchzuführen. Sie können Pakete veröffentlichen und einspielen, wenn diese mindestens ein Modul enthalten.',
            'labels' => 'Bezeichnungen können sowohl für Standardfelder als auch für benutzerdefinierte Felder geändert werden. Der Feldinhalt (die Daten) werden davon nicht beeinflusst.',
        ),
        'listViewEditor' => array(
            'modify' => 'Hier sehen Sie alle Felder, die in der <b>Listenansicht</b> dargestellt werden können.<br><br>Die <b>Standard</b> Spalte enthält die Felder, die standardmäßig angezeigt werden<br/><br/>Die <b>Verfügbar</b> zeigt jene Felder, die dem Benutzer zum gestalten eigener Listenansichten zur Verfügung stehen.<br/><br/>Die <b>Verborgen</b> Spalte enthält jene Felder, die zu den Standard oder Verfügbar Spalten hinzugefügt werden können.',
            'savebtn' => 'Speichern auswählen um alle Änderungen zu aktivieren',
            'Hidden' => 'Verborgene Felder sind für Benutzer aktuell in der Listenansicht nicht verfügbar.',
            'Available' => 'Verfügbare Felder werden standardmäßig nicht angezeigt, können aber vom Benutzer zur Listenansicht hinzugefügt werden.',
            'Default' => 'Standard Felder erscheinen in Listenansichten, die nicht von Benutzern angepasst wurden.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Hier sehen Sie alle Felder, die in der <b>Listenansicht</b> dargestellt werden können.<br><br>Die <b>Standard</b> Spalte enthält die Felder, die standardmäßig angezeigt werden<br/><br/>Die <b>Verfügbar</b> zeigt jene Felder, die dem Benutzer zum gestalten eigener Listenansichten zur Verfügung stehen.<br/><br/>Die <b>Verborgen</b> Spalte enthält jene Felder, die zu den Standard oder Verfügbar Spalten hinzugefügt werden können.',
            'savebtn' => 'Klicken Sie auf <b>Speichern & Einspielen</b> , um Ihre Änderungen zu speichern und sie innerhalb des Moduls zu aktivieren.',
            'Hidden' => 'Verborgene Felder sind für Benutzer aktuell in der Listenansicht nicht verfügbar.',
            'Default' => 'Standardfelder werden in der Ansicht angezeigt.'
        ),
        'layoutEditor' => array(
            'default' => 'Auf der linken Seite werden zwei Spalten angezeigt. In der rechten Spalte, Layout bzw. Layoutvorschau genannt, ändern Sie das Layout des Moduls. Die linke Spalte, Toolbox genannt, enthält nützliche Elemente und Werkzeuge für das Bearbeiten des Moduls. <br/><br/>Wenn die Arbeitsfläche “Aktuelles Layout“ anzeigt, dann arbeiten Sie mit einer vom Model erstellten Kopie des Layouts.<br/><br/>Wird “Layout Vorschau“ angezeigt, arbeiten Sie mit einer durch Klick auf “”Speichern”” erstellten Kopie, die unter Umständen nicht mehr der aktuell von Benutzern verwendeten Version entspricht.',
            'saveBtn' => 'Wenn Sie auf diese Schaltfläche drücken, wird das Layout gespeichert und Ihre Änderungen gesichert. Wenn Sie später weiterarbeiten, beginnen Sie an dieser Stelle. Allerdings wird Ihr Layout nicht von anderen gesehen, bevor Sie auf “Speichern und Veröffentlichen“ drücken.',
            'publishBtn' => 'Klicken Sie auf diese Schaltfläche, um das Layout einzuspielen. Das Layout wird sofort für andere Benutzer verfügbar.',
            'toolbox' => 'Die Toolbox enthält viele nützliche Funktionen zur Bearbeitung von Layouts – einen Papierkorb, zusätzliche Elemente sowie alle verfügbaren Felder. Alle können mit der Drag-and-Drop-Funktion bearbeitet werden.',
            'panels' => 'Diese Ansicht zeigt, wie Ihr Layout nach der Anwendung für den Benutzer angezeigt wird.<br/><br/>Sie können Elemente wie z.B. Felder oder Zeilen per Drag-and-Drop Funktion positionieren.'
        ),
        'dropdownEditor' => array(
            'default' => 'Auf der linken Seite werden zwei Spalten angezeigt. In der rechten Spalte, Layout bzw. Layoutvorschau genannt, ändern Sie das Layout des Moduls. Die linke Spalte, Toolbox genannt, enthält nützliche Elemente und Werkzeuge für das Bearbeiten des Moduls. <br/><br/>Wenn die Arbeitsfläche “Aktuelles Layout“ anzeigt, dann arbeiten Sie mit einer vom Model erstellten Kopie des Layouts.<br/><br/>Wird “Layout Vorschau“ angezeigt, arbeiten Sie mit einer durch Klick auf “”Speichern”” erstellten Kopie, die unter Umständen nicht mehr der aktuell von Benutzern verwendeten Version entspricht.',
            'dropdownaddbtn' => 'Das Klicken auf diese Schaltfläche fügt einen neuen Eintrag zum Auswahlmenü hinzu.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Benutzerdefinitionen aus Studio können in eine andere Instanz übernommen und dort eingespielt werden.<br><br>Geben Sie zuerst einen <b>Paketnamen</b> ein.  Sie können auch einen <b>Autor</b> bzw. eine <b>Beschreibung</b> zum Paket hinzufügen.<br><br>Wählen Sie die Module mit zu exportierenden Benutzereinstellungen. (Es werden nur Module mit benutzerdefinierten Einstellungen angezeigt.)<br><br>Klicken Sie auf <b>Export</b> um eine .zip Datei für das Paket mit den Benutzerdefinitionen zu erstellen. Die .zip Datei kann durch <b>Module verwalten</b> in einer anderen Instanz hochgeladen werden.',
            'exportCustomBtn' => 'Klicken Sie <b>Export</b>, um eine .zip-Datei für das Paket mit den Benutzerdefinitionen zu erstellen, das exportiert werden soll."',
            'name' => 'Der <b>Name</b> des Pakets wird in “Module verwalten“ angezeigt, nachdem das Paket in Studio hochgeladen wurde.',
            'author' => 'Der <b>Autor</b> ist der Name der Person, die das Modul-Paket erstellt hat. Der Autor kann entweder eine Einzelperson oder eine Firma sein. <br><br> Er wird im Modul Loader angezeigt, nachdem das Paket für die Installation hochgeladen wurde.',
            'description' => 'Die <b>Beschreibung</b> des Pakets wird unter Module verwalten angezeigt, nachdem das Paket für die Installation in Studio hochgeladen wurde.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Willkommen im Bereich <b>Entwicklerwerkzeuge</b1>.<br/><br/>Benutzen Sie die Werkzeuge in diesem Bereich, um Standardmodule und benutzerdefinierte Module/ Felder zu erstellen bzw. zu verwalten.',
            'studioBtn' => 'Passen Sie mit <b>Studio</b> installierte Module an, indem Sie die Felderanordnung ändern, aus verfügbaren Feldern auswählen oder neue Datenfelder erstellen.',
            'mbBtn' => 'Verwenden Sie <b>Module erstellen</b>, um neue Module zu erstellen.',
            'appBtn' => 'Verwenden Sie den Anwendungsmodus, um verschiedene Parameter des Programms zu verändern, zum Beispiel die Anzahl an TPS Berichten auf der Startseite',
            'backBtn' => 'Zurück zum vorherigen Schritt.',
            'studioHelp' => 'Benutzen Sie das <b>Studio</b>, um installierte Module anzupassen.',
            'moduleBtn' => 'Hier klicken, um das Modul zu bearbeiten.',
            'moduleHelp' => 'Wählen Sie die Modulkomponente, die Sie bearbeiten möchten',
            'fieldsBtn' => 'Bearbeiten Sie, welche Informationen im Modul gespeichert werden, indem Sie die<b>Felder</b>im Modul kontrollieren.,<br/><br/>Sie können hier benutzerdefinierte Felder erstellen und ändern.',
            'labelsBtn' => 'Bearbeiten Sie die <b>Feld-Labels</b> die für Werte dieses Moduls angezeigt werden sollen.',
            'layoutsBtn' => 'Benutzerdefinieren Sie die<b>Layouts</b> der Bearbeitungs-, Detail-, Listen- und Suchansichten an.',
            'subpanelBtn' => 'Bearbeiten Sie, welche Information in den Subpanels dieses Moduls gezeigt wird.',
            'layoutsHelp' => 'Wählen Sie ein <b> Layout zum Bearbeiten</b>.<br/><br/>Um das Layout mit Eingabefeldern zu ändern, klicken Sie auf <b>Bearbeitungsansicht</b>.<br/><br/>Um das Layout mit Daten zu ändern, klicken Sie auf <b>Detailansicht</b>.<br/><br/>Um die Spalten zu ändern, die in der Standardliste erscheinen, klicken Sie auf <b>Listenansicht</b>.<br/><br/>Um standardmäßige und erweiterte Suchformulare zu ändern, klicken Sie auf <b>Suche</b>.',
            'subpanelHelp' => 'Wählen Sie ein <b>Subpanel</b> zum Bearbeiten.',
            'searchHelp' => 'Wählen Sie ein <b>Suche</b>-Layout zum Bearbeiten.',
            'newPackage' => 'Klicken Sie auf <b>Neues Paket</b>, um ein neues Paket zu erstellen.',
            'mbHelp' => '<b>Willkommen beim Module erstellen".</b><br/><br/>Mit der Funktion <b>"Module erstellen"</b> erstellen Sie neue Pakete, die benutzerdefinierte Module enthalten – basierend auf standardmäßigen oder personalisierten Objekten.<br/><br/>Klicken Sie auf <b>Neues Paket</b>, um ein neues Paket zu erstellen, oder wählen Sie ein Paket zum Bearbeiten aus.<br/><br/>Ein <b>Paket</b> ist ein Speicherort für alle benutzerdefinierten Module, die Teil eines Projekts sind. Das Paket kann ein oder mehrere benutzerdefinierte Module enthalten, die untereinander oder mit existierenden Modulen verbunden sind.<br/><br/>Zum Beispiel könnten Sie ein eigenes Modul erstellen, das mit dem standardmäßigen Account-Modul verknüpft ist. Oder Sie erstellen ein Paket mit mehreren Modulen, die als Projekt zusammengehören, und untereinander sowie mit bereits bestehenden Modulen der Anwendung verbunden sind.',
            'exportBtn' => 'Klicken Sie auf <b>Benutzerdefinitionen exportieren</b>, um ein Paket mit in Studio erstellten Benutzerdefinitionen für bestimmte Module zu erstellen.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Auswahllisten bearbeiten',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Module erstellen',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Auswahllisten bearbeiten',
    'LBL_DEVELOPER_TOOLS' => 'Entwickler Werkzeuge',
    'LBL_SUITEPORTAL' => 'Portal Editor',
    'LBL_PACKAGE_LIST' => 'Paket Liste',
    'LBL_HOME' => 'Startseite',
    'LBL_NONE' => '-Kein(e)-',
    'LBL_DEPLOYE_COMPLETE' => 'Verteilung fertig',
    'LBL_DEPLOY_FAILED' => 'Es trat ein Fehler während des Verteilungsprozesses auf. Ihr Paket wurde eventuell nicht richtig installiert',
    'LBL_AVAILABLE_SUBPANELS' => 'Verfügbare Subpanels',
    'LBL_ADVANCED' => 'Erweitert',
    'LBL_ADVANCED_SEARCH' => 'Erweiterter Filter',
    'LBL_BASIC' => 'Einfach',
    'LBL_BASIC_SEARCH' => 'Schnellfilter',
    'LBL_CURRENT_LAYOUT' => 'Aktuelles Layout',
    'LBL_CURRENCY' => 'Währung',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet Listenansicht',
    'LBL_POPUP' => 'Popup Sicht',
    'LBL_POPUPLISTVIEW' => 'Popup Listenansicht',
    'LBL_POPUPSEARCH' => 'Popup Suche',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Suche',
    'LBL_DETAILVIEW' => 'Detailansicht',
    'LBL_DROP_HERE' => '[Hier ablegen]',
    'LBL_EDIT' => 'Bearbeiten',
    'LBL_EDIT_LAYOUT' => 'Layout bearbeiten',
    'LBL_EDIT_FIELDS' => 'Felder bearbeiten',
    'LBL_EDITVIEW' => 'Bearbeitungsansicht',
    'LBL_FILLER' => '(Füller)',
    'LBL_FIELDS' => 'Felder',
    'LBL_FAILED_TO_SAVE' => 'Fehler beim Speichern',
    'LBL_FAILED_PUBLISHED' => 'Fehler beim Veröffentlichen',
    'LBL_HOMEPAGE_PREFIX' => 'Mein',
    'LBL_LAYOUT_PREVIEW' => 'Layout Vorschau',
    'LBL_LAYOUTS' => 'Layouts',
    'LBL_LISTVIEW' => 'Listenansicht',
    'LBL_MODULES' => 'Module',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Neues Paket',
    'LBL_NEW_PANEL' => 'Neues Panel',
    'LBL_NEW_ROW' => 'Neue Zeile',
    'LBL_PACKAGE_DELETED' => 'Paket gelöscht',
    'LBL_PUBLISHING' => 'Veröffentlichen ...',
    'LBL_PUBLISHED' => 'Veröffentlicht',
    'LBL_SELECT_FILE' => 'Datei auswählen',
    'LBL_SUBPANELS' => 'Unterfenster',
    'LBL_SUBPANEL' => 'Unterfenster',
    'LBL_SUBPANEL_TITLE' => 'Titel:',
    'LBL_SEARCH_FORMS' => 'Filtern',
    'LBL_SEARCH' => 'Suchen',
    'LBL_SEARCH_BUTTON' => 'Suchen',
    'LBL_FILTER' => 'Filtern',
    'LBL_TOOLBOX' => 'Werkzeugkasten',
    'LBL_QUICKCREATE' => 'Schnelles Erstellen',
    'LBL_EDIT_DROPDOWNS' => 'Globale Auswahlliste bearbeiten',
    'LBL_ADD_DROPDOWN' => 'Neue globale Auswahlliste hinzufügen',
    'LBL_BLANK' => '-leer-',
    'LBL_TAB_ORDER' => 'Tab Reihenfolge',
    'LBL_TABDEF_TYPE' => 'Anzeigeart',
    'LBL_TABDEF_TYPE_HELP' => 'Wählen Sie wie diese Section angezeigt werden soll. Diese Option hat nur einen Effekt, wenn Tabs in dieser Ansicht aktiviert sind.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Reiter',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Bedienfeld',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Wählen Sie Panel, um dieses Panel in der Ansicht dieses Layouts anzuzeigen. Wählen Sie Tab, um dieses Panel in einem seperaten Tab im Layout anzuzeigen. Wenn Tab für ein Panel ausgewählt ist, werden forlgende Panels in diesem Tab angezeigt. <br/>Ein neues Tab wird angefangen für das nächste Panel in dem Tab ausgewählt wurde. Wenn Tab für ein Panel unter dem Ersten gewählt wurde, wird für das Erste automatischf Tab gewählt.',
    'LBL_TABDEF_COLLAPSE' => 'Einklappen',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Wählen um das Panel standard mäßig eingeklappt anzuzeigen.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Name',
    'LBL_DROPDOWN_LANGUAGE' => 'Sprache',
    'LBL_DROPDOWN_ITEMS' => 'Listelemente',
    'LBL_DROPDOWN_ITEM_NAME' => 'Elementname',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Anzeigebezeichnung',
    'LBL_SYNC_TO_DETAILVIEW' => 'Kopieren nach Detailansicht',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Diese Option auswählen, um die Felder von der Bearbeitungsansicht zu der Detailansicht zu kopieren. Beim Speichern werden die Felder in beide Ansichten gespeichert. Layout Änderungen können dann nicht mehr in der Detailsicht gemacht werden.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Die Detailansicht wird mit der Bearbeitungsansicht synchronisiert. <br>Felder und Layout in der Detailansicht sind identisch mit der Bearbeitungsansicht.<br>Änderungen in der Detailansicht können nicht gespeichert oder veröffentlicht werden. Option &#39;Kopieren nach Detailansicht&#39; deaktivieren oder Änderungen im Bearbeitungsdialog durchführen. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopieren von der Bearbeitungsansicht',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Werte für Feldname und Elementname sind Pflichtwerte. Um ein leeres Element hinzuzufügen, Hinzufügen wählen ohne einen Elemenname oder Feldname einzugeben.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Der Schlüssel existiert bereits in der Liste',
    'LBL_NO_SAVE_ACTION' => 'Keine Save-Action in dieser View.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primäres Modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* Beziehung erstellt im Studio oder Module Builder',
    'LBL_RELATIONSHIPS' => 'Beziehungen',
    'LBL_RELATIONSHIP_EDIT' => 'Beziehung bearbeiten',
    'LBL_REL_NAME' => 'Name',
    'LBL_REL_LABEL' => 'Bezeichnung',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Verknüpfte Module',
    'LBL_NO_RELS' => 'Keine Beziehungen',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Optionale Bedingung',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Spalte',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Wert',
    'LBL_SUBPANEL_FROM' => 'Subpanel von',
    'LBL_RELATIONSHIP_ONLY' => 'Für diese Beziehung werden keine sichtbaren Elemente erstellt, da es bereits eine sichtbare Beziehung zwischen diesen Modulen gibt.',
    'LBL_ONETOONE' => 'Eins zu Eins',
    'LBL_ONETOMANY' => 'Eins zu Viele',
    'LBL_MANYTOONE' => 'Viele zu Einem',
    'LBL_MANYTOMANY' => 'Viele zu Viele',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Wählen Sie ein Modul zum Bearbeiten aus.',
    'LBL_QUESTION_LAYOUT' => 'Wählen Sie ein Layout zum Bearbeiten aus.',
    'LBL_QUESTION_SUBPANEL' => 'Wählen Sie ein Subpanel zum Bearbeiten aus.',
    'LBL_QUESTION_SEARCH' => 'Wählen Sie ein Such Layout zum Bearbeiten aus.',
    'LBL_QUESTION_MODULE' => 'Wählen Sie eine Modulkomponente zum Bearbeiten aus.',
    'LBL_QUESTION_PACKAGE' => 'Wählen Sie ein Paket zum Bearbeiten aus, oder erstellen ein neues.',
    'LBL_QUESTION_EDITOR' => 'Werkzeug auswählen.',
    'LBL_QUESTION_DASHLET' => 'Wählen Sie ein Dashlet Layout zum Bearbeiten.',
    'LBL_QUESTION_POPUP' => 'Wählen Sie ein Popup Layout zum editieren.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Name',
    'LBL_LABELS' => 'Bezeichnungen',
    'LBL_MASS_UPDATE' => 'Massenänderung',
    'LBL_DEFAULT_VALUE' => 'Standardwert',
    'LBL_REQUIRED' => 'Erforderlich',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'BENUTZERDEFINIERT',
    'LBL_HDEFAULT' => 'STANDARD',
    'LBL_LANGUAGE' => 'Sprache:',
    'LBL_CUSTOM_FIELDS' => '* Benutzerdefinierte Felder',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Bezeichnungen bearbeiten',
    'LBL_SECTION_PACKAGES' => 'Pakete',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Module',
    'LBL_SECTION_DROPDOWNS' => 'Auswahllisten',
    'LBL_SECTION_PROPERTIES' => 'Eigenschaften',
    'LBL_SECTION_DROPDOWNED' => 'Auswahlliste bearbeiten',
    'LBL_SECTION_HELP' => 'Hilfe',
    'LBL_SECTION_MAIN' => 'Wichtig',
    'LBL_SECTION_FIELDEDITOR' => 'Feld bearbeiten',
    'LBL_SECTION_DEPLOY' => 'Veröffentlichen',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standard',
    'LBL_HIDDEN' => 'Verborgen',
    'LBL_AVAILABLE' => 'Verfügbar',
    'LBL_LISTVIEW_DESCRIPTION' => 'Unten werden drei Spalten angezeigt. Die <b>Standard</b> Spalte enthält die Felder, die in der Listenansicht standardmäßig angezeigt werden, die <b>zusätzliche</b> Spalte enthält Felder, die der für die Erstellug einer Ansicht  Benutzer wählen kann, und die <b>verfügbare</b> Spalte enthält Felder, die für Sie als Admin verfügbar sind, um sie entweder zur Standard oder zur Verfügbar Spalte hinzuzufügen.',
    'LBL_LISTVIEW_EDIT' => 'Listenansicht Editor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Vorschau',
    'LBL_MB_RESTORE' => 'Wiederherstellen',
    'LBL_MB_DELETE' => 'Löschen',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standard Layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Hinzufügen',
    'LBL_BTN_SAVE' => 'Speichern',
    'LBL_BTN_SAVE_CHANGES' => 'Änderungen speichern',
    'LBL_BTN_DONT_SAVE' => 'Änderungen verwerfen',
    'LBL_BTN_CANCEL' => 'Abbrechen',
    'LBL_BTN_CLOSE' => 'Schließen',
    'LBL_BTN_SAVEPUBLISH' => 'Speichern & Veröffentlichen',
    'LBL_BTN_CLONE' => 'Klonen',
    'LBL_BTN_ADDROWS' => 'Zeilen hinzufügen',
    'LBL_BTN_ADDFIELD' => 'Feld hinzufügen',
    'LBL_BTN_ADDDROPDOWN' => 'Auswahlliste hinzufügen',
    'LBL_BTN_SORT_ASCENDING' => 'Aufsteigend sortieren',
    'LBL_BTN_SORT_DESCENDING' => 'Absteigend sortieren',
    'LBL_BTN_EDLABELS' => 'Bezeichnungen bearbeiten',
    'LBL_BTN_UNDO' => 'Rückgängig',
    'LBL_BTN_REDO' => 'Wiederholen',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Benutzerdefiniertes Feld hinzufügen',
    'LBL_BTN_EXPORT' => 'Anpassungen exportieren',
    'LBL_BTN_DUPLICATE' => 'Duplizieren',
    'LBL_BTN_PUBLISH' => 'Veröffentlichen',
    'LBL_BTN_DEPLOY' => 'Veröffentlichen',
    'LBL_BTN_EXP' => 'Exportieren',
    'LBL_BTN_DELETE' => 'Löschen',
    'LBL_BTN_VIEW_LAYOUTS' => 'Layouts anzeigen',
    'LBL_BTN_VIEW_FIELDS' => 'Felder anzeigen',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Beziehungen anzeigen',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Beziehung hinzufügen',
    'LBL_BTN_RENAME_MODULE' => 'Modulname ändern',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Fehler: Feld bereits vorhanden',
    'ERROR_INVALID_KEY_VALUE' => "Fehler: Ungültiger Schlüsselwert: [&#39;]",
    'ERROR_NO_HISTORY' => 'Kein Verlauf gefunden',
    'ERROR_MINIMUM_FIELDS' => 'Das Layout muss zumindest ein Feld enthalten',
    'ERROR_GENERIC_TITLE' => 'Ein Fehler ist aufgetreten.',
    'ERROR_REQUIRED_FIELDS' => 'Sind Sie sicher, dass Sie fortfahren möchten? Die folgenden Pflichtfelder fehlen im Layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paketname:',
    'LBL_MODULE_NAME' => 'Modulname:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_KEY' => 'Schlüssel:',
    'LBL_ADD_README' => 'Lies mich',
    'LBL_LAST_MODIFIED' => 'Zuletzt geändert am:',
    'LBL_NEW_MODULE' => 'Neues Modul',
    'LBL_LABEL' => 'Bezeichnung:',
    'LBL_LABEL_TITLE' => 'Bezeichnung',
    'LBL_WIDTH' => 'Breite',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Typ:',
    'LBL_NAV_TAB' => 'Navigations Tab',
    'LBL_CREATE' => 'Erstellen',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Ansicht',
    'LBL_HISTORY' => 'Historie anzeigen',
    'LBL_RESTORE_DEFAULT' => 'Standardeinstellungen wiederherstellen',
    'LBL_ACTIVITIES' => 'Aktivitäten',
    'LBL_NEW' => 'Neu',
    'LBL_TYPE_BASIC' => 'Standard',
    'LBL_TYPE_COMPANY' => 'Unternehmen',
    'LBL_TYPE_PERSON' => 'Person',
    'LBL_TYPE_ISSUE' => 'Fall',
    'LBL_TYPE_SALE' => 'Verkauf',
    'LBL_TYPE_FILE' => 'Datei',
    'LBL_RSUB' => 'Das ist das Subpanel das in Ihrem Modul angezeigt wird',
    'LBL_MSUB' => 'Dies ist das Subpanel das von Ihrem Modul im verknünpfte Modul gezeigt wird.',
    'LBL_MB_IMPORTABLE' => 'Importieren',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] wurde gelöscht',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Anpassungen exportieren',
    'LBL_EC_NAME' => 'Paketname:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Beschreibung:',
    'LBL_EC_CHECKERROR' => 'Wählen Sie ein Modul aus.',
    'LBL_EC_CUSTOMFIELD' => 'Angepasste Feld(er)',
    'LBL_EC_CUSTOMLAYOUT' => 'Angepasstes Layout(s)',
    'LBL_EC_NOCUSTOM' => 'Kein Modul wurde angepasst.',
    'LBL_EC_EMPTYCUSTOM' => 'hat keine Anpassungen.',
    'LBL_EC_EXPORTBTN' => 'Exportieren',
    'LBL_MODULE_DEPLOYED' => 'Das Modul wurde veröffentlicht.',
    'LBL_UNDEFINED' => 'undefiniert',
    'LBL_EC_VIEWS' => 'angepasste Ansicht(en)',
    'LBL_EC_SUITEFEEDS' => 'angepasste feed(s)',
    'LBL_EC_DASHLETS' => 'angepasste Dashlet(s)',
    'LBL_EC_CSS' => 'angepasste css(s)',
    'LBL_EC_TPLS' => 'angepasste tpls(s)',
    'LBL_EC_IMAGES' => 'angepasste image(s)',
    'LBL_EC_JS' => 'angepasste js(s)',
    'LBL_EC_QTIP' => 'angepasste qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Daten nicht erfolgreich geholt',
    'LBL_AJAX_LOADING' => 'Lade...',
    'LBL_AJAX_DELETING' => 'Lösche...',
    'LBL_AJAX_BUILDPROGRESS' => 'Aufbau läuft...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Veröffentlichung läuft...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Ergebnis',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Vorgang erfolgreich abgeschlossen',
    'LBL_AJAX_LOADING_TITLE' => 'In Bearbeitung..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Bitte warten Sie, lade...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sind Sie sicher das Sie diese Paket löschen wollen? Dies löscht dauerhaft alle Dateien die mit diesem Paket verbunden sind.',
    'LBL_JS_REMOVE_MODULE' => 'Sind Sie sich sicher, dass sie dieses Modul löschen wollen? Alle Dateien, welches mit dem Paket verbunden sind werden gelöscht',
    'LBL_JS_DEPLOY_PACKAGE' => 'Jegliche Änderung im Studio wird überschrieben wenn diese Modul wieder verteilt wird. Sind Sie sicher fortzufahren?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Paket wird veröffentlicht',
    'LBL_JS_VALIDATE_NAME' => 'Name – Muss alphanumerisch ohne Leerzeichen sein und mit einem Buchstaben beginnen.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Paketname existiert bereits',
    'LBL_JS_VALIDATE_KEY' => 'Schlüssel - Muss alphanumerisch ohne Leerzeichen sein und mit einem Buchstaben beginnen.',
    'LBL_JS_VALIDATE_LABEL' => 'Bitte geben Sie eine Bezeichnung ein die als Anzeigenamen für dies Modul verwendet wird.',
    'LBL_JS_VALIDATE_TYPE' => 'Bitte wählen Sie den Modultyp, den Sie erstellen möchten, aus der Liste oben aus.',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Bezeichnung – Bitte wählen Sie eine Bezeichnung die oberhalb des Subpanels angezeigt wird.',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Wenn Sie ein benutzerdefiniertes Feld löschen, werden alle zugehörigen Daten ebenfalls gelöscht und es wird auch aus allen Ansichten entfernt die es enthalten.',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sind Sie sicher dass Sie diese Beziehung löschen wollen?',
    'LBL_CONFIRM_DONT_SAVE' => 'Seit dem letzten Speichern wurden Änderungen vorgenommen. Möchten Sie jetzt speichern?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Änderungen speichern?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Daten könnten abgschnitten werden und kann nicht rückgängig gemacht werden. Sind Sie sicher fortzufahren?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Wählen Sie den geeigneten Datentyp basierend auf der Art der Daten die in dieses Feld eingegeben werden sollen.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Ja</b>: Das Feld wird in einen Importvorgang aufgenommen.<br><b>Nr.</b>: Das Feld wird nicht in einen Import aufgenommen.<br><b>Benötigt</b>: Ein Wert für das Feld muss bei jedem Import angegeben werden.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Geben Sie eine Anzahl für Breite ein, wie in Pixeln gemessen.<br> Das hochgeladene Bild wird auf diese Breite skaliert.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Geben Sie eine Zahl für die Höhe ein, wie in Pixeln gemessen.<br> Das hochgeladene Bild wird auf diese Höhe skaliert.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Aktiviert</b>: Das Feld wird in der Funktion Merge Duplikate erscheinen, aber nicht verfügbar für die Filterbedingungen in der Funktion "Duplikate finden".<br><b>Deaktiviert</b>: Das Feld wird nicht in der Funktion Merge Duplikate angezeigt, und wird nicht für die Filterbedingungen in der Funktion "Duplikate finden" verfügbar sein.<br><b>Filter</b>: Das Feld wird in der Funktion Merge Duplikate angezeigt, und steht für die Filterbedingungen in der Funktion Suche Duplikate zur Verfügung.<br><b>Standardfilter</b>: Das Feld wird in der Funktion Zusammenführen von Duplikaten angezeigt, und wird standardmäßig für die Filterbedingungen in der Funktion Suche Duplikate verwendet.<br><b>Nur Filter</b>: Das Feld wird in der Funktion Zusammenführen nicht angezeigt, aber verfügbar für die Filterbedingungen in der Funktion Suche Duplikate sein.',

//Revert Module labels
    'LBL_RESET' => 'Zurücksetzen',
    'LBL_RESET_MODULE' => 'Modul zurücksetzen',
    'LBL_REMOVE_CUSTOM' => 'Einstellungen entfernen',
    'LBL_CLEAR_RELATIONSHIPS' => 'Relationen löschen',
    'LBL_RESET_LABELS' => 'Bezeichnungen zurücksetzen',
    'LBL_RESET_LAYOUTS' => 'Layouts zurücksetzen',
    'LBL_REMOVE_FIELDS' => 'Benutzerdefinierte Felder löschen',
    'LBL_CLEAR_EXTENSIONS' => 'Erweiterungen löschen',
    'LBL_HISTORY_TIMESTAMP' => 'Zeitstempel',
    'LBL_HISTORY_TITLE' => 'Verlauf',

    'fieldTypes' => array(
        'varchar' => 'Textfeld',
        'int' => 'Ganzzahl',
        'float' => 'Dezimalzahl',
        'bool' => 'Kontrollkästchen',
        'enum' => 'Auswahlliste',
        'dynamicenum' => 'Dynamisches Auswahlmenü',
        'multienum' => 'Mehrfachauswahl',
        'date' => 'Datum',
        'phone' => 'Telefon',
        'currency' => 'Währung',
        'html' => 'HTML',
        'radioenum' => 'Radio ',
        'relate' => 'Verknüpfen',
        'address' => 'Adresse',
        'text' => 'Textfläche',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datum/Zeit',
        'decimal' => 'Dezimal',
        'image' => 'Bild',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Häufig verwendete Bezeichner",
        "all" => "Alle Bezeichnungen",
    ),

    'parent' => 'Flexible Verknüpfung',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Sie haben einen Eintrag zum Löschen aus der Wertehilfe selektiert. Jede Wertehilfe, die diese Liste und Wert enhält kann den Wert nicht mehr anzeigen und ist daher nicht mehr verfügbar. Sind Sie sicher fortzufahren?",

    'LBL_ALL_MODULES' => 'Alle Module',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (verknüpfte {1} ID)',
);
