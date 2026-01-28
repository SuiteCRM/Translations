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
    'LBL_EDIT_LAYOUT' => 'Խմբագրել մակետը',
    'LBL_EDIT_FIELDS' => 'Խմբագրել մասնավոր դաշտերը',
    'LBL_SELECT_FILE' => 'Ընտրել ֆայլը',
    'LBL_MODULE_TITLE' => 'Ստուդիա',
    'LBL_TOOLBOX' => 'Գործիքներ',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM դաշտեր (ընտրել նյութեր, որոնք պետք է ավելացվեն մեկնարկային տարածքում)',
    'LBL_VIEW_SUITE_FIELDS' => 'Դիտել SuiteCRM դաշտերը',
    'LBL_FAILED_TO_SAVE' => 'Failed To Save',
    'LBL_CONFIRM_UNSAVE' => 'Փոփոխությունները չեն պահպանվելու։ Համոզվա՞ծ եք, որ ցանկանում եք շարունակել։',
    'LBL_PUBLISHING' => 'Publishing...',
    'LBL_PUBLISHED' => 'Հրատարակված է',
    'LBL_FAILED_PUBLISHED' => 'Failed to Publish',
    'LBL_DROP_HERE' => '[Գցել այստեղ]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Անվանում',
    'LBL_LABEL' => 'Պիտակ',
    'LBL_MASS_UPDATE' => 'Մասսային թարմացում',
    'LBL_DEFAULT_VALUE' => 'Լռելյայն արժեք',
    'LBL_REQUIRED' => 'Պարտադիր',
    'LBL_DATA_TYPE' => 'Տեսակ',


    'LBL_HISTORY' => 'Պատմություն',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Բա՛րի գալուստ ստուդիա։</h2><br> Ի՞նչ եք ցանկանում անել այսօր:<br><b> Խնդրում ենք ընտրել անհրաժեշտ ընտրանքը։</b>',
    'LBL_SW_EDIT_MODULE' => 'Խմբագրել մոդուլը',
    'LBL_SW_EDIT_DROPDOWNS' => 'Խմբագրել ներքև բացվող մենյուները',
    'LBL_SW_EDIT_TABS' => 'Կարգավորել էջանիշները',
    'LBL_SW_RENAME_TABS' => 'Վերանվանել էջանիշը',
    'LBL_SW_EDIT_GROUPTABS' => 'Կարգավորել խմբավորված էջանիշները',
    'LBL_SW_EDIT_PORTAL' => 'Խմբագրել պորտալը',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Վերականգնել օգտագործողի դաշտերը',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Տեղափոխել օգտագործողի դաշտերը',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Վերակառուցել լազուների ֆայլերի javascript տարբերակները',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Հեռացնել լեզուների ֆայլերի javascript տարբերակները, հետո անհրաժեշտության դեպքում վերականգնել:',


//Manager Backups History
    'LBL_MB_DELETE' => 'Ջնջել',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Ստեղծել ներքև բացվող մենյու',
    'LBL_DROPDOWN_NAME' => 'Ներքև բացվող մենյուի անունը․',
    'LBL_DROPDOWN_LANGUAGE' => 'Ներքև բացվող մենյուի լեզուն․',
    'LBL_TABGROUP_LANGUAGE' => 'Լեզու․',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Ցուցադրվող արժեք',
    'LBL_DD_DATABASEVALUE' => 'Տվյալների բազայի արժեք',
    'LBL_DD_ALL' => 'Բոլորը',

//BUTTONS
    'LBL_BTN_SAVE' => 'Պահպանել',
    'LBL_BTN_CANCEL' => 'Չեղարկել',
    'LBL_BTN_SAVEPUBLISH' => 'Պահպանել և տեղադրել',
    'LBL_BTN_HISTORY' => 'Պատմություն',
    'LBL_BTN_ADDROWS' => 'Ավելացնել տողեր',
    'LBL_BTN_UNDO' => 'Չեղարկել',
    'LBL_BTN_REDO' => 'Կրկնել',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Ավելացնել հարմարեցված դաշտ',
    'LBL_BTN_TABINDEX' => 'Խմբագրել ներդիրների դասավորությունը',

//TABS
    'LBL_MODULES' => 'Մոդուլներ',
    'LBL_MODULE_NAME' => 'Ադմինիստրացիա',
    'LBL_CONFIGURE_GROUP_TABS' => 'Կարգավորել մոդուլի մենյուի ֆիլտրները',
    'LBL_GROUP_TAB_WELCOME' => 'The filters below will be displayed in the More list in the module menu for users to use to view groups of modules within the menu. Drag and drop modules to and from the filters. Note: Empty filters will not be displayed in the menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Click on any tab\'s Display Value in the table below to rename the tab.',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Select an available language, edit the Group labels and click Save & Deploy to apply the labels in the selected language.',
    'LBL_ADD_GROUP' => 'Ավելացնել ֆիլտր',
    'LBL_NEW_GROUP' => 'Նոր Խումբ',
    'LBL_RENAME_TABS' => 'Վերանվանել մոդուլները',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Error: Invalid Key Value: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Պահպանել' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Չեղարկել' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Կրկնել' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'տողի վրա' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ջնջել' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Ավելացնել դաշտ' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Առավելագույն' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Փոքրացնել' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Հրապարակում' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Ավելացնել տողեր' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Ավելացնել դաշտ' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Խմբագրել' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Ընտրել լեզու խմբագրելու համար:',
    'LBL_SINGULAR' => 'Եզակի պիտակ',
    'LBL_PLURAL' => 'Բազմակի պիտակ',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Սեղմեք<b>Պահպանել</b>փոփոխությունները ավելացնելու համար։'

);
