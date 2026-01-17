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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'E no fit imported rows because of mistake ',
    'LBL_UPDATE_SUCCESSFULLY' => 'E don update records successfully',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Don create records dem',
    'LBL_STEP_4_TITLE' => 'Step {0}: Import File',
    'LBL_STEP_5_TITLE' => 'Step {0}: Show Import Results',
    'LBL_CUSTOM_ENCLOSURE' => 'Fields Qualified By:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'E no fit publish. E get another publish Import map wey de same name.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'E no fit publish map wey another user get. U get Import map wey be de same name.
',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Imports no dey set up for dis module type',
    'LBL_IMPORT_TYPE' => 'Wetin u go like do wit de data wey u don import so?  ',
    'LBL_IMPORT_BUTTON' => 'Create new records only',
    'LBL_UPDATE_BUTTON' => 'Create new records and update records wey don dey before ',
    'LBL_CREATE_BUTTON_HELP' => 'Use dis option create new records. Note: Rows wey dey import file wey contain values wey match de IDs of records wey don dey already no go fit import if e don map values for de ID field.
',
    'LBL_UPDATE_BUTTON_HELP' => 'Use dis option to update records wey don already dey. De data in d import file go match wit records wey don dey already based on de record ID wey dey de import file.
',
    'LBL_ERROR_INVALID_BOOL' => 'Boolean value wey no dey valid',
    'LBL_IMPORT_ERROR' => 'Import errors:',
    'LBL_ERROR' => 'Error',
    'LBL_FIELD_NAME' => 'Field Name',
    'LBL_VALUE' => 'Value',
    'LBL_NONE' => 'None',
    'LBL_REQUIRED_VALUE' => 'Value wey e need don miss ',
    'LBL_ERROR_SYNC_USERS' => 'Invalid value to sync to Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID don dey already for dis table',
    'LBL_ASSIGNED_USER' => 'If de user no already dey use de user dey now',
    'LBL_ERROR_DELETING_RECORD' => 'Record for de mistake wey don delete:',
    'LBL_ERROR_INVALID_ID' => 'ID wey u put dey too long so e no fit enter de field (im longest length suppose be 36 characters)',
    'LBL_ERROR_INVALID_PHONE' => 'Phone number no dey valid',
    'LBL_ERROR_INVALID_NAME' => 'String too long so e no fit enter de field',
    'LBL_ERROR_INVALID_VARCHAR' => 'String too long so e no fit enter de field',
    'LBL_ERROR_INVALID_DATE' => 'Date no dey valid',
    'LBL_ERROR_INVALID_DATETIME' => 'Datetime no dey valid',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Datetime no dey valid',
    'LBL_ERROR_INVALID_TIME' => 'Time no dey valid',
    'LBL_ERROR_INVALID_INT' => 'integer value no dey valid',
    'LBL_ERROR_INVALID_NUM' => 'numeric value no dey valid',
    'LBL_ERROR_INVALID_EMAIL' => 'Email address no dey valid',
    'LBL_ERROR_INVALID_USER' => 'User name or ID no dey valid',
    'LBL_ERROR_INVALID_TEAM' => 'Team name or ID no dey valid',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Account name or ID no dey valid',
    'LBL_ERROR_INVALID_RELATE' => 'Relational field no dey valid',
    'LBL_ERROR_INVALID_CURRENCY' => 'Currency value no dey valid',
    'LBL_ERROR_INVALID_FLOAT' => 'Floating point number no dey valid',
    'LBL_ERROR_NOT_IN_ENUM' => 'Value no dey for dropDown list. Na value wey dey allow dey: ',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'File bin no upload successfully. E fit be say \'upload_max_filesize\' setting wey dey your php.ini file don set to small number',
    'LBL_MODULE_NAME' => 'Import',
    'LBL_TRY_AGAIN' => 'Try Again',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'De import file contain {0} rows. The optimal number of rows be {1}. More rows fit slow down dey way importation dey process. Press OK if u wan continue dey import. Press Cancel make e revise and also upload de import file again.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'U no fit import system administrator user',
    'ERR_MULTIPLE' => 'Dey don defined Multiple columns wit de same field name.
',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Missing required fields:',
    'ERR_SELECT_FILE' => 'Select file wey u wan upload.',
    'LBL_SELECT_FILE' => 'Select file:',
    'LBL_EXTERNAL_SOURCE' => 'application or service wey dey external ',
    'LBL_CUSTOM_DELIMITER' => 'Fields Delimited By:',
    'LBL_DONT_MAP' => '-- make u no map dis field --',
    'LBL_STEP_MODULE' => 'Which module u wan import data put',
    'LBL_STEP_1_TITLE' => 'Step 1: Select Data Source',
    'LBL_CONFIRM_TITLE' => 'Step {0}: Confam de Import File Properties',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'De custom mappings for Microsoft Outlook get hope on import file because say na im be comma-delimited (.csv). If your import file dey tab-delimited, de mappings no go  apply as u dey expect am.fit',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'Publish',
    'LBL_DELETE' => 'Commot',
    'LBL_PUBLISHED_SOURCES' => 'If u wan use pre-set import settings, u go select from below:
',
    'LBL_UNPUBLISH' => 'Un-Publish',
    'LBL_NEXT' => 'Next >',
    'LBL_BACK' => '< Back',
    'LBL_STEP_2_TITLE' => 'Step {0}: Upload file wey u Import ',
    'LBL_HAS_HEADER' => 'Header Row:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notes:',
    'LBL_STEP_3_TITLE' => 'Step {0}: Confam Field Mappings',
    'LBL_STEP_DUP_TITLE' => 'Step {0}: Check for Duplicate wey dey Possible ',
    'LBL_DATABASE_FIELD' => 'Module Field',
    'LBL_HEADER_ROW' => 'Header Row',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Select if de top row of de import file be Header Row wey contain field labels.',
    'LBL_ROW' => 'Row',
    'LBL_CONTACTS_NOTE_1' => 'Na must say e suppose map either Last Name or Full Name.',
    'LBL_CONTACTS_NOTE_2' => 'If dey don map Full Name, then dey go ignore First Name and Last name. ',
    'LBL_CONTACTS_NOTE_3' => 'If dey don map your Full Name, then de data for Full Name go split into First Name and Last Name when dey insert am put for database.',
    'LBL_CONTACTS_NOTE_4' => 'Fields wey end wit Address Street 2 and Address Street 3 dey concatenate together wit de main Address Street Field wen dey insert am put de database.',
    'LBL_ACCOUNTS_NOTE_1' => 'Fields wey end wit Address Street 2 and Address Street 3 dey concatenate together wit de main Address Street Field wen dey insert am put de database.',
    'LBL_IMPORT_NOW' => 'Import Now',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'E no fit open de file wey u don import wey dey read',
    'LBL_NO_LINES' => 'Lines no dey detect for de file u don import. Abeg dey sure say empty lines no dey for your file and try again. ',
    'LBL_SUCCESS' => 'Success:',
    'LBL_LAST_IMPORT_UNDONE' => 'De import bin dey undone.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Import no dey to undo. ',
    'LBL_CREATED_TAB' => 'Records wey dey don create',
    'LBL_DUPLICATE_TAB' => 'Duplicates',
    'LBL_ERROR_TAB' => 'Mistakes',
    'LBL_IMPORT_MORE' => 'Import Again',
    'LBL_FINISHED' => 'E don finish ',
    'LBL_UNDO_LAST_IMPORT' => 'Undo import',
    'LBL_DUPLICATES' => 'Dey don find Duplicate ',
    'LNK_DUPLICATE_LIST' => 'Download list of duplicates',
    'LNK_ERROR_LIST' => 'Download list of mistakes',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download rows list wey bin no import',
    'LBL_INDEX_USED' => 'Field wey u go check:',
    'LBL_INDEX_NOT_USED' => 'Field wey no dey available ',
    'LBL_IMPORT_FIELDDEF_ID' => 'ID number wey dey Unique ',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Name or ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Phone Number',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Team Name or ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Any Text',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Any Text',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Any Text',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Time',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Date',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'User Name or ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' or \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'List',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Email Address',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numeric (No Decimal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeric (No Decimal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numeric (No Decimal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeric (Decimal Allowed)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeric (Decimal Allowed)',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_TIMEZONE' => 'Time Zone:',
    'LBL_ADD_ROW' => 'Add Field',
    'LBL_REMOVE_ROW' => 'Comot Field ',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'View file properties wey dey import',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Hide File Properties wey u don import ',
    'LBL_SHOW_NOTES' => 'View Notes',
    'LBL_HIDE_NOTES' => 'Hide Notes',
    'LBL_SAVE_MAPPING_AS' => 'If u wan save de import settings, put name for de setting wey don save:',
    'LBL_IMPORT_COMPLETE' => 'Exit',
    'LBL_IMPORT_COMPLETED' => 'Import don complete ',
    'LBL_IMPORT_RECORDS' => 'Records dey import ',
    'LBL_IMPORT_RECORDS_OF' => 'of',
    'LBL_IMPORT_RECORDS_TO' => 'to',
    'LBL_CURRENCY' => 'Money dem:',
    'LBL_CURRENCY_SIG_DIGITS' => 'Currency Significant Digits',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator:',
    'LBL_DECIMAL_SEP' => 'Decimal symbol:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Name Display Format',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Example',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Salutation, "f" First Name, "l" Last Name</i>',
    'LBL_CHARSET' => 'File Encoding:',
    'LBL_MY_SAVED_HELP' => 'Use dis option apply your pre-set import settings, even wit import properties, mappings, and any duplicate check settings, to dis import.<br><br>Press <b>Delete</b> to comot de mapping for all users.
',
    'LBL_MY_SAVED_ADMIN_HELP' => 'U go use dis option apply your pre-set import settings, even wit import properties, mappings, and any duplicate check settings, to dis import.<br><br>Press <b>Publish</b> to make de mapping dey available for other users.<br>Press <b>Un-Publish</b> make e map de unavailable for other users.<br>Press <b>Delete</b> make e comot mapping for all user. ',
    'LBL_ENCLOSURE_HELP' => '<p>De <b>qualifier character</b> dey use to enclose de intended field content, even wit any characters dey de use as delimiters.<br><br>Example: If de delimiter na comma (,) and de qualifier quotation mark ("),<br><b>"Cupertino, California"</b> don import into one field for application and then e appear as <b>Cupertino, California</b>.<br>If qualifier characters no dey, or if na different character be de qualifier,<br><b>"Cupertino, California"</b> don import into two adjacent fields as <b>"Cupertino</b> and <b>"California"</b>.<br><br>Note: De import file fit no contain any qualifier characters.<br>De default qualifier character for comma- and tab- delimited files wey dey create in Excel na quotation mark.</p> ',
    'LBL_DATABASE_FIELD_HELP' => 'Dis column show all de fields inside module. Select field make e map to de data inside de import file rows.
',
    'LBL_HEADER_ROW_HELP' => 'Dis column show de labels for de header row of de import file.
',
    'LBL_DEFAULT_VALUE_HELP' => 'Indicate value wey e go use for de field record wey dey don already create or update if de field wey dey import file no contain data.
',
    'LBL_ROW_HELP' => 'Dis column de data in de first non-header row de import file. If de header row labels dey appear dis column, press Back make e specify de header row inside de Import File Properties.
',
    'LBL_SAVE_MAPPING_HELP' => 'Put name make e save de import settings, even wit field mappings and indexes wey dey use for de duplicate check. Import settings wey don save fit dey use am for imports wey u go do for future. ',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'During wen u dey upload your import file, some file properties fit don detect automatically. Make u view and manage dis properties dem, as<br> important. Note: The settings wey dey don put for here pertain to dis import<br> and no go override your overall User Settings.',
    'LBL_IMPORT_STARTED' => 'Import Started:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'De record fit no update because of permissions problem ',
    'LBL_DELETE_MAP_CONFIRMATION' => 'U sure say u wan delete dis import save set settings?
',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'If import file data bin don export from any of dis sources dem, select which one.
',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Select de source make e apply custom mappings automatically so that e go fit simplify de mapping process (next step).',
    'LBL_EXAMPLE_FILE' => 'Make u download Import File Template',
    'LBL_CONFIRM_IMPORT' => 'U don select to update records wen de import process dey go on. Updates wey dey do for records wey don already dey, e no fit change am agai.  Anywhere, dey fit change records wey dey create wen de import process dey go on(don comot ), if na wetin u wan. Press Cancel make e select make e for create new records only, or press OK make e continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Warning: U don already select de custom mapping for dis import, u still wan continue?',
    'LBL_SAMPLE_URL_HELP' => 'Download import file sample wey contain header row for de module fields. Dey fit use file as template use am create import file wey contain de data wey u go like import. ',
    'LBL_AUTO_DETECT_ERROR' => 'De field delimiter and qualifier for import file fit no detect. Abeg verify de settings for de Import File Properties.',
    'LBL_MIME_TYPE_ERROR_1' => 'De file wey u select no appear so that e go contain file delimited. Abeg check de file type. Na comma-delimited files (.csv) we recommend for u. ',
    'LBL_MIME_TYPE_ERROR_2' => 'If u wan proceed dey import de file wey u don select, press OK. If u wan upload new file, press Try Again. ',
    'LBL_FIELD_DELIMETED_HELP' => 'De field delimiter na im specify character wey dem de use separate field columns.
',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Select file wey contain data wey don separate by delimiter, like comma- or tab- delimited file. Files of type .csv na im dey recommend.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache directory wey de no dey write.',
    'LBL_ADD_FIELD_HELP' => 'Use dis option add value for field for all de records wey don create and/or wey don update. Select de field then put or select value for that field wey dey Default Value column.',
    'LBL_MISSING_HEADER_ROW' => 'No Header Row wey e don Find',
    'LBL_CANCEL' => 'Clean am',
    'LBL_SELECT_DS_INSTRUCTION' => 'U don ready to begin import? Select de source for de data wey u go like to import.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Select file for your computer wey contain de data wey u go like to import, or download de template make u get head start to dey create de import file.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'See how de first plenty rows of de import file appear wit de file properties wey e don detect. If e don detect header row, e go show for de top row of de table. View de import file properties so that u go fit change to de properties wey e don detect and to set extra properties. If u update de settings e go update de data wey appear  for de table.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'De table wey dey below contains all de fields for de module wey fit map to de data for de import file. If de file contain header row, de columns in de file bin don dey mapped to matching fields. Check de mappings make e sure say dem be wetin u don expect, and do some changes, wey dey necessary. If e help u check de mappings, Row 1 show de data for de file. Dey sure say u map to all dey de fields wey e need (asterisk don note am).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'If u no wan create records wey be de same, select fields wey don map wey u go like to use perform de same check data wey don import. Values around records wey don dey already for de fields wey e don select go check against de data for de import file. If e don find matching data, de rows for de import file wey contain de data go show wit de import results (next page). U go then fit to select which of dem rows to continue dey import',
    'LBL_DUP_HELP' => 'Dis na de rows for de import file wey bin no import because dem contain data wey match values in records wey don dey already base on de duplicate check. De data wey match don dey highlighted. If u wan import dis rows dem again, download de list, changes things and press <b>Import Again</b>.',
    'LBL_SUMMARY' => 'Summary',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Dis na de rows dem for de import file wey bin no import because of some mistakes. If u wan import dis rows dem, download de list, change things and press <b>Import Again</b>
 ',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'If u wan assign de new records give user wey no be yourself, use de Default Value column to select different user.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'If u wan assign de new records give teams wey no be your default team(s), use de Default Value column to select different teams.',
);

global $timedate;
