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
    'LBL_STEP_1' => '1 žingsnis: Pasirinkite modulį ir šabloną',
    'LBL_MAILMERGE_MODULE' => 'Pasirinkite modulį:',
    'LBL_MAILMERGE_SELECTED_MODULE' => 'Pasirinktas modulis:',
    'LBL_MAILMERGE_TEMPLATES' => 'Pasirinkite šabloną:',
    'LBL_STEP_4' => 'Peržiūrėti ir užbaigti',
    'LBL_SELECTED_MODULE' => 'Pasirinktas modulis:',
    'LBL_SELECTED_TEMPLATE' => 'Pasirinktas šablonas:',
    'LBL_SELECTED_ITEMS' => 'Pasirinktas įrašas:',
    'LBL_STEP_5' => 'Laiško apjungimas užbaigtas',
    'LBL_MERGED_FILE' => 'Apjungti failai:',
    'LNK_NEW_MAILMERGE' => 'Pradėti laiško apjungimą',
    'LNK_UPLOAD_TEMPLATE' => 'Išsiųsti šabloną',
    'LBL_DOC_NAME' => 'Dokumento pavadinimas:',
    'LBL_FILENAME' => 'Failo pavadinimas:',
    'LBL_DOC_VERSION' => 'Versija:',
    'LBL_DOC_DESCRIPTION' => 'Aprašymas:',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_FINISH' => 'Pradėti apjungimą',
    'LBL_NEXT' => 'Toliau >',
    'LBL_BACK' => '< Atgal',
    'LBL_START' => 'Spauskite čia, kad tęsti',
    'LBL_CONTAINS_CONTACT_INFO' => 'Pasirinktas šablonas turi susijusią',
    'LBL_ADDIN_NOTICE' => 'This requires the installation of SuiteCRM Mail Merge add-in to Microsoft Word.',
    'LBL_REMOVE' => 'Šalinti jį(uos)' /*for 508 compliance fix*/,
    'LBL_ADD' => 'Pridėti Jį(uos)' /*for 508 compliance fix*/,
    'LBL_BROWSER_REQUIREMENT' => 'Tam reikia IE 6.0 ar aukštesnės skirtą Windows.',
    'LBL_FORM_SELECT_TEMPLATE' => 'Pasirinkite šabloną.',
    'LBL_SELECT_ONE' => 'Prašome pasirinkti bent vieną.',
    'LBL_AVAILABLE' => 'Galimas',
    'LBL_SELECTED' => 'Pažymėtas',
    'LBL_RELATED_INFO_SELECTION' => 'Naudokite žemiau pasirinkimą nustatyti susijusią informaciją norite Rodyti sulietame dokumente. Praleiskite šį veiksmą, jei jūsų šablono dokumente nėra susijusios informacijos.',

);
