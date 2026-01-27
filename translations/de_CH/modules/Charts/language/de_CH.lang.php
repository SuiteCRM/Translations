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
    'ERR_NO_OPPS' => 'Sie müssen Verkaufschancen erstellt haben, um eine entsprechende Grafik anzeigen zu können.',
    'LBL_ALL_OPPORTUNITIES' => 'Die Summe aller Verkaufschancen ist',
    'LBL_CHART_TYPE' => 'Diagrammtyp:',
    'LBL_CREATED_ON' => 'Zum letzten Mal durchgeführt am ',
    'LBL_CLOSE_DATE_START' => 'Abschluss erwartet ab',
    'LBL_CLOSE_DATE_END' => 'Abschluss erwartet bis',
    'LBL_DATE_END' => 'Enddatum:',
    'LBL_DATE_RANGE_TO' => 'an',
    'LBL_DATE_RANGE' => 'Datumsbereich ist',
    'LBL_DATE_START' => 'Anfangsdatum:',
    'LBL_EDIT' => 'Bearbeiten',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Zeigt die aufsummierten Beträge der Verkaufschancen nach ausgewählter Quelle und Ergebnis für die selektierten Benutzer. Die Ergebnisse basieren auf den Verkaufsphasen.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Alle Verkaufschancen nach Quelle und Ergebnis',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Zeigt die aufsummierten Beträge der Verkaufschancen nach selektierter Quelle für bestimmte Benutzer an.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Alle Verkaufschancen nach Quelle',
    'LBL_LEAD_SOURCE_OTHER' => 'Andere',
    'LBL_LEAD_SOURCES' => 'Quellen:',
    'LBL_MODULE_NAME' => 'Übersicht',
    'LBL_MODULE_TITLE' => 'Übersicht: Home',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Zeigt die aufsummierten Beträge der Verkaufschancen nach Monat und Ergebnis für bestimmte Benutzer an. Das erwartete Enddatum der Verkaufschancen ist innerhalb des angegebenen Datumbereichs. Die Ergebnisse basieren auf den Verkaufsphasen.',
    'LBL_OPP_SIZE' => 'Verkaufschance Grösse in ',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'Verkaufschancen mit Quelle',
    'LBL_OPPS_IN_STAGE' => ' wo Verkaufsphase ist',
    'LBL_OPPS_OUTCOME' => ' wo das Ergebnis ist',
    'LBL_OPPS_WORTH' => 'Verkaufschancen Wert',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Zeigt die aufsummierten Beträge der Verkaufschancen, deren erwartetes Enddatum innerhalb des angegebenen Datumbereichs liegt, nach ausgewählten Verkaufsphasen an.',
    'LBL_REFRESH' => 'Aktualisieren',
    'LBL_ROLLOVER_DETAILS' => 'Für Details gehen Sie auf den Balken.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Für Details gehen Sie auf einen Ausschnitt.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Zeigt die aufsummierten Beträge der Verkaufschancen, deren erwartetes Enddatum innerhalb des angegebenen Datumbereichs liegt, an.Guppiert nach ausgewählten Verkaufsphasen für bestimmte Benutzer.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline nach Verkaufsphasen',
    'LBL_SALES_STAGES' => 'Verkaufsphasen:',
    'LBL_TOTAL_PIPELINE' => 'Pipeline gesamt ist ',
    'LBL_USERS' => 'Benutzer:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline nach Monat und Ergebnis',
    'LBL_YEAR' => 'Jahr:',
    'LNK_NEW_ACCOUNT' => 'Neue Firma',
    'LNK_NEW_CALL' => 'Anruf Log',
    'LNK_NEW_CASE' => 'Fall erstellen',
    'LNK_NEW_CONTACT' => 'Kontakt erstellen',
    'LNK_NEW_LEAD' => 'Neuer Interessent',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage:',
    'LNK_NEW_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'NTC_NO_LEGENDS' => 'Kein(e)',

    'LBL_TITLE' => 'Titel:',
    'LBL_MY_MODULES_USED_SIZE' => 'Zugriffszähler',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline nach Verkaufsphasen',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Quelle von Ergebnis führen',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultat nach Monat',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline durch Leadursprung',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Meine Pipeline nach Verkaufsphasen',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Meine Module verwendet (letzte 30 Tage)',
);
