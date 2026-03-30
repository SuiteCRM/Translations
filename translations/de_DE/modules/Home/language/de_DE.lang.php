<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'Home',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Meine Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Compose Email',
    'LBL_NO_ACCESS' => 'Sie haben keinen Zugang zu diesem Bereich. Bitte kontaktieren Sie den Administrator, um Zugang zu erhalten',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Keine Resultate --',
    'LBL_NO_RESULTS' => '<h2>Suche ergab keinen Treffer. Bitte wiederholen Sie die Suche.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Such-Tipps:</h3><ul><li>Stellen Sie sicher, dass Sie die richtigen Kategorien gewählt haben.</li><li>Erweitern Sie Ihre Suchkriterien.</li><li>Falls Sie weiterhin keine Resultate finden, versuchen Sie es mit der Erweiterten Suche in dem jeweiligen Modul...</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Newsfeed',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Morgen',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'Charts',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Suchergebnis',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modulansichten',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Verschiedenes'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'SuiteCRM Dashlet löschen',
    'LBL_DASHLET_REFRESH' => 'SuiteCRM Dashlet aktualisieren',
    'LBL_DASHLET_EDIT' => 'SuiteCRM Dashlet bearbeiten',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Basisdiagramme',

    'LBL_DASHLET_SEARCH' => 'Finde SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc. - Hersteller des CE Frameworks',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Es wurde eine inkorrekte Website Adresse angegeben',
    'LBL_DASHLET_OPT_URL' => 'Adresse der Webseite',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet Höhe (in Pixel)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM News',
    'LBL_DASHLET_DISCOVER_SUITE' => 'SuiteCRM entdecken',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Startseiten Symbol',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Gehen Sie mit einem Klick zurück zu Ihrer Startseite.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Alle Ihre wichtigen Module sind hier.',
    'LBL_TOUR_MORE' => 'Mehr Module',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Die restlichen Module sind hier.',
    'LBL_TOUR_SEARCH' => 'Volltextsuche',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Die Suche hat sich deutlich verbessert.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM Applikationsbenachrichtigungen kommen hierher.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Zugriff auf Profil, Einstellungen und Abmeldung.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Erstellen Sie schnell Datensätze, ohne den Arbeitsbereich zu verlassen.',
    'LBL_TOUR_FOOTER' => 'Einklappbarer Fußbereich',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Der Fußbereich kann ein- und ausgeklappt werden.',
    'LBL_TOUR_CUSTOM' => 'Benuzterdefinierte Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Benutzerdefinierte Integrationen kommen hierher.',
    'LBL_TOUR_BRAND' => 'Ihre Marke',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Hier ist Platz für Ihr Logo. Für weitere Infos, fahren Sie mit der Maus über das Feld.',
    'LBL_TOUR_WELCOME' => 'Willkommen bei SuiteCRM',
    'LBL_TOUR_WATCH' => 'Schauen, was es Neues in SuiteCRM gibt',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Neue vereinfachte Navigationsleiste</li><li class="icon-ok">Neuer einklappbarer Fußbereich</li><li class="icon-ok">Verbesserte Suche</li><li class="icon-ok">Aktualisierte Aktionsmenüs</li></ul><p>und noch viel mehr!</p>"',
    'LBL_TOUR_VISIT' => 'Für weitere Informationen besuchen Sie unsere Applikation',
    'LBL_TOUR_DONE' => 'Sie sind fertig!',
    'LBL_TOUR_REFERENCE_1' => 'Sie können jederzeit unsere',
    'LBL_TOUR_REFERENCE_2' => 'über den "Support Forum" Link unter dem "Profil"-Tabellerreiter aufrufen.',
    'LNK_TOUR_DOCUMENTATION' => 'Dokumentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Teilen Sie Ihren Kalender mit anderen Applikationen wie MS Outlook oder Exchange? Wenn ja, haben wir eine neue URL für Sie. Diese neue und sicherere URL beinhaltet einen persönlichen Schlüssel, der das unautorisierte Veröffentlichen Ihres Kalenders verhindert.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Holen Sie Ihre neue geteilte Kalender URL.',
    'LBL_CONTRIBUTORS' => 'Beitragende',
    'LBL_ABOUT_SUITE' => 'Über SuiteCRM',
    'LBL_PARTNERS' => 'Partner',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open-Source-CRM für die Welt',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite von Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps von Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Der Workflow "Berechnete Felder" wurde von der diligent technology & business consulting GmbH zur Verfügung gestellt',

    'LBL_LANGUAGE_ABOUT' => 'Über SuiteCRM Übersetzungen',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Gemeinschaftlich übersetzt durch die SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Übersetzung mit Crowdin erstellt',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM ist unter der Open Source Lizenz GPL3 veröffentlicht.',
    'LBL_ABOUT_SUITE_4' => 'Der gesamte Code von SuiteCRM wird als Open Source unter GPL3 veröffentlicht.',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM Support ist in einer freien und in einer bezahlten Variante erhältlich.',

    'LBL_SUITE_PARTNERS' => 'Für eine komplette Liste unserer Partner gehen Sie bitte auf unserer Webseite.',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Datum: ',
    'LBL_DURATION' => 'Dauer: ',
    'LBL_NAME' => 'Titel: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Nicht in der Lage, die gewünschte Suchmaschine zu finden. Versuchen Sie die Suche erneut durchführen.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Fehler beim Verbinden mit den Elasticsearch-Server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Bei der Suche ist ein Programminterner Fehler im Elasticsearch aufgetreten.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Ein unbekannter Fehler ist während der Durchführung der Suche aufgetreten.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Kontaktieren Sie bitte einen Administrator, wenn das Problem weiterhin auftritt. Weitere Informationen sind in den Log-Dateien verfügbar.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'Der Suchindex für ein oder mehrere Module konnte nicht gefunden werden. Bitte stellen sie sicher, dass der crontab richtig konfiguriert ist und ausgeführt wird. Öffnen sie die Elasticsearch-Konfiguration und klicken sie auf "Vollindizierung planen" und legen sie den Job "Elasticsearch Indexer" and, wenn er noch nicht existiert.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
