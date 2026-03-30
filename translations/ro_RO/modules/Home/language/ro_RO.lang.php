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
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Sursa mea de informații',
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
    'LBL_NO_ACCESS' => 'Nu aveți acces în această zonă. Contactați administratorul site-ului dvs. pentru a obține acces',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Fără Rezultate --',
    'LBL_NO_RESULTS' => '<h2>Nu au fost găsite rezultate. Vă rugăm să căutați din nou.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Sfaturi căutare:</h3><ul><li>Asigură-te că ai categoriile corecte selectate mai sus.</li><li>Extinde criteriile de căutare.</li><li>Dacă încă nu puteți găsi niciun rezultat, încercați opțiunea de căutare avansată.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Flux Știri',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Maine',
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
    'LBL_SEARCH_RESULTS' => 'Rezultat căutare',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Reprezentări de module',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Diverse'
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

    'LBL_DASHLET_DELETE' => 'Șterge Dashlet SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Reîmprospătează Dashlet în SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Editare Dashlet în SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Partener SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Diagrame de Baza',

    'LBL_DASHLET_SEARCH' => 'Găsește Dashlet în SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Construire',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - furnizorii CE framework',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Locația website-ului specificată incorect',
    'LBL_DASHLET_OPT_URL' => 'Locație Website',
    'LBL_DASHLET_OPT_HEIGHT' => 'Înălțime Dashlet (în pixeli)',
    'LBL_DASHLET_SUITE_NEWS' => 'Noutăți SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Descoperă SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Iconiță Home',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Revin-o rapid la panoul de control al paginii de pornire cu un singur clic.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Toate modulele tale importante se află aici.',
    'LBL_TOUR_MORE' => 'Mai multe module',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Restul modulelor tale se afla aici.',
    'LBL_TOUR_SEARCH' => 'Căutare text complet',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Căutarea tocmai a devenit mult mai bună.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notificările SuiteCRM se vor află aici.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Acces profil, setări și delogare.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Crează rapid înregistrări fără să îți pierzi locul.',
    'LBL_TOUR_FOOTER' => 'Footer pliabil',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Extindeți și pliați subsolul.',
    'LBL_TOUR_CUSTOM' => 'Aplicații personalizate',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Integrările personalizate vor fi trimise aici.',
    'LBL_TOUR_BRAND' => 'Marca ta',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Logo-ul tău merge aici. Poți plasa mouse-ul peste pentru mai multe informații.',
    'LBL_TOUR_WELCOME' => 'Bun venit la SuiteCRM',
    'LBL_TOUR_WATCH' => 'Afla ce e nou in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Bară de navigare simplificată nouă</li><li class="icon-ok">Footer pliabil nou</li><li class="icon-ok">Căutare îmbunătățită</li><li class="icon-ok"> Meniu de acțiuni actualizat</li></ul><p>și multe altele!</p>',
    'LBL_TOUR_VISIT' => 'Pentru mai multe informații va rugăm să vizitați aplicația noastră',
    'LBL_TOUR_DONE' => 'Ai Terminat!',
    'LBL_TOUR_REFERENCE_1' => 'Puteți întotdeauna să ne referiți',
    'LBL_TOUR_REFERENCE_2' => 'prin intermediul link-ului "Support Forum" sub tab-ul profilului.',
    'LNK_TOUR_DOCUMENTATION' => 'documentație',
    'LBL_TOUR_CALENDAR_URL_1' => 'Doriți să împărțiți calendarul din SuiteCRM cu alte aplicații, cum ar fi Microsoft Outlook sau Exchange? Dacă da, aveți un URL nou. Acest URL nou, mai sigur, include o cheie personală care va împiedica publicarea neautorizată a calendarului dvs.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Recuperează URL-ul noului tău calendar împărtășit.',
    'LBL_CONTRIBUTORS' => 'Contribuitori',
    'LBL_ABOUT_SUITE' => 'Despre SuiteCRM',
    'LBL_PARTNERS' => 'Parteneri',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - open source CRM pentru lume',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite de Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps de Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Câmpuri calculate pentru Fluxurile de Lucru sunt contribuția lui Diligent Technology & Business Consult GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Despre Traducerile SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Traduceri in Colaborare de comunitatea SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Traducere creată folosind aplicația online Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM este publicat sub o licență open source - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Întreg codul SuiteCRM gestionat și dezvoltat în acest proiect va fi lansat ca open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Suportul SuiteCRM este disponibil în atât în varianta gratuită cât și plătită',

    'LBL_SUITE_PARTNERS' => 'SuiteCRM are parteneri fideli, care sunt pasionați de open-source. Pentru a vizualiza lista noastră completă de parteneri, verificați site-ul nostru.',

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
    'LBL_DATE' => 'Dată: ',
    'LBL_DURATION' => 'Durată: ',
    'LBL_NAME' => 'Titlu: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Nu s-a putut găsi Motorul de Căutare solicitat. Încercați să efectuați din nou căutarea.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Conectarea la serverul Elasticsearch a eșuat.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'A apărut o eroare internă la Căutare.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'A apărut o eroare necunoscută în timpul căutării.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contactați un administrator dacă problema persistă. Mai multe informații sunt disponibile în fișierele de jurnale.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'Indicii de căutare pentru unul sau mai multe module nu a putut fi găsit. Asigurați-vă că funcția Crontab este configurată și rulează, deschideți configurația Elasticsearch și faceți clic pe "Programați indexarea completă" și luați în considerare crearea unui indicator de programare "Indenxor Elasticsearch" atunci când nu există.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
