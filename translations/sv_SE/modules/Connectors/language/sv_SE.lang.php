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

    'LBL_ADMINISTRATION_MAIN' => 'Connector Settings',
    'LBL_AVAILABLE' => 'Tillgänglig',
    'LBL_BACK' => '< Tillbaka',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Några obligatoriska fält har lämnats tomma, fullfölj och spara ändringar?',
    'LBL_CONNECTOR_FIELDS' => '"Connector" fält',
    'LBL_DATA' => 'Data',
    'LBL_DEFAULT' => 'Huvudsakligt',
    'LBL_DISABLED' => 'Ej medgiven',
    'LBL_ENABLED' => 'Medgiven',
    'LBL_EXTERNAL' => 'Enable users to create external account records to this connector.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' In order to use this connector, the properties should also be set in the Set Connector Properties settings page.',
    'LBL_MERGE' => 'Sammanfoga',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Aktivera "Connectors"',
    'LBL_MODIFY_DISPLAY_DESC' => 'Välj vilken modul som ska aktiveras för varje "connector".',
    'LBL_MODULE_FIELDS' => 'Modulfält',
    'LBL_MODIFY_MAPPING_TITLE' => 'Koppla "connector" fält',
    'LBL_MODIFY_MAPPING_DESC' => 'Koppla "connector" fält till modulfält för att bestämma vilket "connector" data som kan visas och sammanfogas med modulens poster.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Ange "connector" egenskaper',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Konfigurera egenskaperna för varje "connector" inkluderat URL\'s och API nycklar.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Administrera "connector" sökning',
    'LBL_MODIFY_SEARCH' => 'Sök',
    'LBL_MODIFY_SEARCH_DESC' => 'Välj "connector" fält som ska användas för sökning av data för varje modul.',
    'LBL_MODULE_NAME' => '"Connectors"',
    'LBL_NO_PROPERTIES' => 'Det finns inga egenskaper att konfigurera för denna "connector".',
    'LBL_SAVE' => 'Spara',
    'LBL_SUMMARY' => 'Sammanfattning',
    'LBL_STEP1' => 'Sök och visa data',
    'LBL_STEP2' => 'Sammanfoga poster med',
    'LBL_TEST_SOURCE' => 'Testa "connector"',
    'LBL_TEST_SOURCE_FAILED' => 'Testet misslyckades',
    'LBL_TEST_SOURCE_SUCCESS' => 'Testet lyckades',
    'LBL_TITLE' => 'Sammanfoga data',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Fel: Inga andra detaljer hittades på posten.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Inga moduler har aktiverats för denna "connector". Välj en modul för denna "connector" i Aktivera "connectors" sidan.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Fel: Det finns inga aktiverade "connectors" med definierade sökfält.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Fel: Det finns inga sökfält definierade för modulen och "connector". Var snäll och kontakta din system administratör.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Fel: Det finns inga modulfält som har kopplats för visning på resultatet. Var snäll och kontakta din system administratör.',
    'LBL_INFO_INLINE' => 'Info' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Stäng' /*for 508 compliance fix*/,

);
