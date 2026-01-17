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
    'ERR_DELETE_RECORD' => 'Jums ir jānorāda ieraksta numuru, lai dzēstu uzņēmumu.',
    'LBL_ACCOUNT_ID' => 'Uzņēmuma ID:',
    'LBL_CASE_ID' => 'Pieteikuma ID:',
    'LBL_CLOSE' => 'Aizvērt:',
    'LBL_CONTACT_ID' => 'Kontaktpersonas ID:',
    'LBL_CONTACT_NAME' => 'Kontakts:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Piezīmes',
    'LBL_DESCRIPTION' => 'Piezīme',
    'LBL_EMAIL_ADDRESS' => 'E-pasts:',
    'LBL_EMAIL_ATTACHMENT' => 'E-pasta pielikums',
    'LBL_FILE_MIME_TYPE' => 'Mime veids',
    'LBL_FILE_URL' => 'Faila URL',
    'LBL_FILENAME' => 'Pielikums:',
    'LBL_LEAD_ID' => 'Interesenta ID:',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktpersonas',
    'LBL_LIST_DATE_MODIFIED' => 'Pēdējas izmaiņas',
    'LBL_LIST_FILENAME' => 'Pielikums',
    'LBL_LIST_FORM_TITLE' => 'Piezīmju saraksts',
    'LBL_LIST_RELATED_TO' => 'Atteicas uz',
    'LBL_LIST_SUBJECT' => 'Temats',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LIST_CONTACT' => 'Kontaktpersonas',
    'LBL_MODULE_NAME' => 'Piezīmes',
    'LBL_MODULE_TITLE' => 'Piezīmes',
    'LBL_NEW_FORM_TITLE' => 'Izveidot piezīmi vai pielikumu',
    'LBL_NOTE_STATUS' => 'Piezīme',
    'LBL_NOTE_SUBJECT' => 'Temats:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Pielikumi',
    'LBL_NOTE' => 'Piezīme:',
    'LBL_OPPORTUNITY_ID' => 'Darījuma ID:',
    'LBL_PARENT_ID' => 'Priekšteča ID:',
    'LBL_PARENT_TYPE' => 'Vecāka veids',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_PORTAL_FLAG' => 'Parādīt portālā?',
    'LBL_EMBED_FLAG' => 'Iekļaut e-pastā?',
    'LBL_PRODUCT_ID' => 'Produkta ID:',
    'LBL_QUOTE_ID' => 'Piedāvājuma ID:',
    'LBL_RELATED_TO' => 'Saistīts ar:',
    'LBL_SEARCH_FORM_TITLE' => 'Piezīmju meklēšana',
    'LBL_STATUS' => 'Statuss',
    'LBL_SUBJECT' => 'Temats:',
    'LNK_IMPORT_NOTES' => 'Importēt piezīmes',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
    'LNK_NOTE_LIST' => 'Aplūkot piezīmes',
    'LBL_MEMBER_OF' => 'Pieder:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_REMOVING_ATTACHMENT' => 'Noņemu pielikumu...',
    'ERR_REMOVING_ATTACHMENT' => 'Neizdevās noņemt pielikumu...',
    'LBL_CREATED_BY' => 'Autors',
    'LBL_MODIFIED_BY' => 'Rediģēja',
    'LBL_SEND_ANYWAYS' => 'E-pastam nav temata. Vai sūtīt/saglabāt tādu?',
    'LBL_NOTE_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Manas piezīmes',
    'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Vārds',
    'LBL_LAST_NAME' => 'Uzvārds',
    'LBL_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Augoši',
    'LBL_DESCENDING' => 'Dilstoši',
);
