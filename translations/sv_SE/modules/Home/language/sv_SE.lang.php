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
    'LBL_MODULE_NAME' => 'Hem',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Min pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline efter försäljningsfas',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline efter försäljningsfas',
    'LNK_NEW_CONTACT' => 'Skapa kontakt',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
    'LNK_NEW_LEAD' => 'Skapa lead',
    'LNK_NEW_CASE' => 'Skapa ärende',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_CALL' => 'Logga samtal',
    'LNK_NEW_EMAIL' => 'Arkivera e-post',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_NEW_BUG' => 'Rapportera fel',
    'LNK_NEW_SEND_EMAIL' => 'Skriv e-post',
    'LBL_NO_ACCESS' => 'Du saknar behörighet att besöka detta område. Kontakta din administratör för att få behörighet.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Inga resultat --',
    'LBL_NO_RESULTS' => '<h2>Hittade inget resultat. Var god sök igen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Sök tips:</h3><ul><li>Var god kontrollera att du har valt rätt kategorier ovan.</li><li>Utöka ditt sökkriteria.</li><li>Om du inte finner det du söker, prova den avancerade sökningen.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Lägg till SuiteCRM-paneler',
    'LBL_WEBSITE_TITLE' => 'Webbplats',
    'LBL_RSS_TITLE' => 'Nyhetsflöde',
    'LBL_CLOSE_DASHLETS' => 'Stäng',
    'LBL_OPTIONS' => 'Alternativ',
    // dashlet search fields
    'LBL_TODAY' => 'I dag',
    'LBL_YESTERDAY' => 'I går',
    'LBL_TOMORROW' => 'Imorgon',
    'LBL_NEXT_WEEK' => 'Nästa vecka',
    'LBL_LAST_7_DAYS' => 'Senaste 7 dagarna',
    'LBL_NEXT_7_DAYS' => 'Nästa 7 dagar',
    'LBL_LAST_MONTH' => 'Förra månaden',
    'LBL_NEXT_MONTH' => 'Nästa månad',
    'LBL_LAST_YEAR' => 'Förra året',
    'LBL_NEXT_YEAR' => 'Nästa år',
    'LBL_LAST_30_DAYS' => 'Senaste 30 dagarna',
    'LBL_NEXT_30_DAYS' => 'Kommande 30 dagar',
    'LBL_THIS_MONTH' => 'Den här månaden',
    'LBL_THIS_YEAR' => 'I år',

    'LBL_MODULES' => 'Moduler',
    'LBL_CHARTS' => 'Diagram',
    'LBL_TOOLS' => 'Verktyg',
    'LBL_WEB' => 'Webb',
    'LBL_SEARCH_RESULTS' => 'Sökresultat',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modul Vyer',
        'Portal' => 'Portal',
        'Charts' => 'Diagram',
        'Tools' => 'Verktyg',
        'Miscellaneous' => 'Diverse'
    ),
    'LBL_ADDING_DASHLET' => 'Lägg till dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM-dashlet har lagts till',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Vill du ta bort den här SuiteCRM-dashleten?',
    'LBL_REMOVING_DASHLET' => 'Ta bort dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM-dashlet har tagits bort',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Allmänt',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Endast mina objekt',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Rubrik',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Visa rader',

    'LBL_DASHLET_DELETE' => 'Ta bort SuiteCRM-dashlet',
    'LBL_DASHLET_REFRESH' => 'Uppdatera SuiteCRM-dashlet',
    'LBL_DASHLET_EDIT' => 'Redigera SuiteCRM-dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Stäng',

    'LBL_SEARCH' => 'Sök',
    'LBL_CLEAR' => 'Rensa',

    'LBL_BASIC_CHARTS' => 'Enkelt diagram',

    'LBL_DASHLET_SEARCH' => 'Hitta SuiteCRM-dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Version',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc – leverantörer av CE-ramverket',

    'LBL_DASHLET_TITLE' => 'Mina webbplatser',
    'LBL_DASHLET_OPT_TITLE' => 'Rubrik',
    'LBL_DASHLET_INCORRECT_URL' => 'En felaktig webbplatsadress har angetts',
    'LBL_DASHLET_OPT_URL' => 'Hemsideplats',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet höjd (i pixlar)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM-nyheter',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Upptäck SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Snabbfilter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Avancerat filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Hemikon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Gå snabbt tillbaka till kontrollpanelen på startsidan med ett klick.',
    'LBL_TOUR_MODULES' => 'Moduler',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Alla dina viktiga moduler finns här.',
    'LBL_TOUR_MORE' => 'Fler moduler',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Resten av dina moduler finns här.',
    'LBL_TOUR_SEARCH' => 'Fulltextsökning',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Sökningen har blivit mycket bättre.',
    'LBL_TOUR_NOTIFICATIONS' => 'Aviseringar',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM-programmets aviseringar visas här.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Öppna profil, inställningar och utloggning.',
    'LBL_TOUR_QUICKCREATE' => 'Snabbskapa',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Skapa snabbt poster utan att förlora din plats.',
    'LBL_TOUR_FOOTER' => 'Hopfällbar sidfot',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Fäll enkelt ut och ihop sidfoten.',
    'LBL_TOUR_CUSTOM' => 'Anpassade appar',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Anpassade integreringar visas här.',
    'LBL_TOUR_BRAND' => 'Ditt varumärke',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Din logotyp visas här. För pekaren över den för mer information.',
    'LBL_TOUR_WELCOME' => 'Välkommen till SuiteCRM',
    'LBL_TOUR_WATCH' => 'Se nyheter i SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nytt förenklat navigeringsfält</li><li class="icon-ok">Ny hopfällbar sidfot</li><li class="icon-ok">Förbättrad sökning</li><li class="icon-ok">Uppdaterad åtgärdsmeny</li></ul><p>och mycket mer!</p>',
    'LBL_TOUR_VISIT' => 'Besök programmet för mer information',
    'LBL_TOUR_DONE' => 'Du är klar!',
    'LBL_TOUR_REFERENCE_1' => 'Du kan alltid hänvisa till våra',
    'LBL_TOUR_REFERENCE_2' => 'via länken ”Supportforum” under profilfliken.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Delar du din SuiteCRM-kalender med tredjepartsprogram, till exempel Microsoft Outlook eller Exchange? I så fall har du en ny URL. Den nya och säkrare URL:en innehåller en personlig nyckel som förhindrar obehörig publicering av din kalender.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Hämta den nya URL:en för din delade kalender.',
    'LBL_CONTRIBUTORS' => 'Bidragsgivare',
    'LBL_ABOUT_SUITE' => 'Om SuiteCRM',
    'LBL_PARTNERS' => 'Samarbetspartners',
    'LBL_EDIT_ALL_RECURRENCES' => 'Redigera alla upprepningar',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Ta bort alla upprepningar',
    'LBL_CONFIRM_REMOVE' => 'Är du säker du vill ta bort posten?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM skrivs och underhålls av SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM – CRM med öppen källkod för världen',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite av Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps av Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM:s logotypdesign bidrog Conscious Solutions med',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'ResponseTap har bidragit till SuiteCRM',
    'LBL_CONTRIBUTOR_GMBH' => 'Diligent technology & business consulting GmbH har bidragit med beräknade arbetsflödesfält',

    'LBL_LANGUAGE_ABOUT' => 'Om SuiteCRM-översättningar',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Samarbetsöversättning av SuiteCRM-gemenskapen',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Översättningen skapades med Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM publiceras under en licens med öppen källkod – AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM-kod som projektet hanterar och utvecklar släpps som öppen källkod – AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM-support finns både som kostnadsfria och betalda alternativ',

    'LBL_SUITE_PARTNERS' => 'Vi har lojala SuiteCRM-partner som brinner för öppen källkod. Fullständig partnerlista finns på vår webbplats.',

    'LBL_SAVE_BUTTON' => 'Spara',
    'LBL_DELETE_BUTTON' => 'Ta bort',
    'LBL_APPLY_BUTTON' => 'Tillämpa',
    'LBL_SEND_INVITES' => 'Spara och skicka inbjudningar',
    'LBL_CANCEL_BUTTON' => 'Avbryt',
    'LBL_CLOSE_BUTTON' => 'Stäng',

    'LBL_CREATE_NEW_RECORD' => 'Skapa aktivitet',
    'LBL_CREATE_CALL' => 'Logga samtal',
    'LBL_CREATE_MEETING' => 'Schemalägg möte',

    'LBL_GENERAL_TAB' => 'Detaljer',
    'LBL_PARTICIPANTS_TAB' => 'Inbjudna',
    'LBL_REPEAT_TAB' => 'Återkommande',

    'LBL_REPEAT_TYPE' => 'Upprepa',
    'LBL_REPEAT_INTERVAL' => 'Varje',
    'LBL_REPEAT_END' => 'Slut',
    'LBL_REPEAT_END_AFTER' => 'Efter',
    'LBL_REPEAT_OCCURRENCES' => 'upprepningar',
    'LBL_REPEAT_END_BY' => 'Av',
    'LBL_REPEAT_DOW' => 'Den',
    'LBL_REPEAT_UNTIL' => 'Upprepa tills',
    'LBL_REPEAT_COUNT' => 'Antal upprepningar',
    'LBL_REPEAT_LIMIT_ERROR' => 'Din förfrågan skulle skapa fler än $limit möten.',

    //Events
    'LNK_EVENT' => 'Händelse',
    'LNK_EVENT_VIEW' => 'Visa händelse',
    'LBL_DATE' => 'Datum: ',
    'LBL_DURATION' => 'Varaktighet: ',
    'LBL_NAME' => 'Titel: ',
    'LBL_HOUR_ABBREV' => 'timme',
    'LBL_HOURS_ABBREV' => 'timmar',
    'LBL_MINSS_ABBREV' => 'minuter',
    'LBL_LOCATION' => 'Plats:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Beskrivning: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Ett fel uppstod när utförde sökningen. Din fråga, syntax kanske inte är giltig.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Det gick inte att hitta den begärda sökmotorn. Försök att söka igen.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Det gick inte att ansluta till Elasticsearch-servern.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Ett internt fel uppstod i sökningen.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Ett okänt fel uppstod vid sökningen.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Kontakta en administratör om problemet kvarstår. Mer information finns i loggarna.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'Sökindexet för en eller flera moduler kunde inte hittas. Kontrollera att crontab är konfigurerad och körs, öppna Elasticsearch-konfigurationen och klicka på ”Schemalägg fullständig indexering”. Överväg att skapa schemaläggarjobbet ”Elasticsearch Indexer” om det saknas.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Inget resultat som matchade din sökning. Försök att bredda din sökning.',

    // Portal Labels
    'LBL_AOP_DISABLED' => 'AOP är inaktiverat. Aktivera det i inställningarna',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Det gick inte att skapa portalanvändaren',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Misslyckades med att aktivera portalanvändare',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Misslyckades med att inaktivera portalanvändare',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Skapade portalanvändare',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Aktiverade portalanvändare',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Inaktiverade portalanvändare',

    'LNK_TASK_VIEW' => 'Visa uppgift',
);
