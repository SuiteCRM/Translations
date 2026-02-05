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
    //module
    'LBL_MODULE_NAME' => 'ದಾಸ್ತವೇಜುಗಳು',
    'LBL_MODULE_TITLE' => 'ದಾಸ್ತವೇಜು: ಮುಖಪುಟ',
    'LNK_NEW_DOCUMENT' => 'ದಾಸ್ತವೇಜು ರಚಿಸಿ',
    'LNK_DOCUMENT_LIST' => 'ದಾಸ್ತವೇಜು ಪಟ್ಟಿ',
    'LBL_SEARCH_FORM_TITLE' => 'ದಾಸ್ತವೇಜು ಹುಡುಕಿ',
    //vardef labels
    'LBL_NAME' => 'ದಾಸ್ತವೇಜಿನ ಹೆಸರು',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ',
    'LBL_ASSIGNED_TO' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ:',
    'LBL_CATEGORY' => 'ವರ್ಗ',
    'LBL_SUBCATEGORY' => 'ಉಪವರ್ಗ',
    'LBL_STATUS' => 'ಸ್ಥಿತಿ',
    'LBL_IS_TEMPLATE' => 'ಒಂದು ಟೆಂಪ್ಲೇಟ್ ಆಗಿದೆ',
    'LBL_TEMPLATE_TYPE' => 'ದಾಸ್ತವೇಜಿನ ಮಾದರಿ',
    'LBL_REVISION_NAME' => 'ಪರಿಷ್ಕರಣೆ ಸಂಖ್ಯೆ',
    'LBL_MIME' => 'ಮೈಮ್ ವಿಧ',
    'LBL_REVISION' => 'ಪರಿಷ್ಕರಣೆ',
    'LBL_DOCUMENT' => 'ಸಂಬಂಧಿಸಿದ ದಾಸ್ತವೇಜು',
    'LBL_LATEST_REVISION' => 'ಇತ್ತೀಚಿನ ಪರಿಷ್ಕರಣೆ',
    'LBL_CHANGE_LOG' => 'ಬದಲಾವಣೆಯ ದಾಖಲೆ',
    'LBL_ACTIVE_DATE' => 'ಪ್ರಕಟಣೆಯ ದಿನಾಂಕ',
    'LBL_EXPIRATION_DATE' => 'ಮುಕ್ತಾಯದ ದಿನಾಂಕ',
    'LBL_FILE_EXTENSION' => 'ಫೈಲ್ ವಿಸ್ತರಣೆ',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'ಅನಿರ್ಣೀತ',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'ಹೊಸ ದಾಸ್ತವೇಜು',
    //document edit and detail view
    'LBL_DOC_NAME' => 'ದಾಸ್ತವೇಜಿನ ಹೆಸರು:',
    'LBL_FILENAME' => 'ಕಡತದ (ಫೈಲ್) ಹೆಸರು:',
    'LBL_FILE_UPLOAD' => 'ಕಡತ:',
    'LBL_DOC_VERSION' => 'ಪರಿಷ್ಕರಣೆ:',
    'LBL_CATEGORY_VALUE' => 'ವರ್ಗ:',
    'LBL_SUBCATEGORY_VALUE' => 'ಉಪವರ್ಗ:',
    'LBL_DOC_STATUS' => 'ಸ್ಥಿತಿ:',
    'LBL_DET_TEMPLATE_TYPE' => 'ದಾಸ್ತವೇಜಿನ ಮಾದರಿ:',
    'LBL_DOC_DESCRIPTION' => 'ವಿವರಣೆ:',
    'LBL_DOC_ACTIVE_DATE' => 'ಪ್ರಕಟಣೆ ದಿನಾಂಕ:',
    'LBL_DOC_EXP_DATE' => 'ಮುಕ್ತಾಯ ದಿನಾಂಕ:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'ದಾಸ್ತವೇಜಿನ ಪಟ್ಟಿ',
    'LBL_LIST_DOCUMENT' => 'ದಾಸ್ತವೇಜು',
    'LBL_LIST_CATEGORY' => 'ವರ್ಗ',
    'LBL_LIST_SUBCATEGORY' => 'ಉಪವರ್ಗ',
    'LBL_LIST_REVISION' => 'ಪರಿಷ್ಕರಣೆ',
    'LBL_LIST_LAST_REV_CREATOR' => 'ಪ್ರಕಟಿಸಿದವರು',
    'LBL_LIST_LAST_REV_DATE' => 'ಪರಿಷ್ಕರಣೆ ದಿನಾಂಕ',
    'LBL_LIST_VIEW_DOCUMENT' => 'ವೀಕ್ಷಣ',
    'LBL_LIST_ACTIVE_DATE' => 'ಪ್ರಕಟಣೆಯ ದಿನಾಂಕ',
    'LBL_LIST_EXP_DATE' => 'ಮುಕ್ತಾಯದ ದಿನಾಂಕ',
    'LBL_LIST_STATUS' => 'ಸ್ಥಿತಿ',

    //document search form.
    'LBL_SF_CATEGORY' => 'ವರ್ಗ:',
    'LBL_SF_SUBCATEGORY' => 'ಉಪವರ್ಗ:',

    'DEF_CREATE_LOG' => 'ದಾಸ್ತವೇಜು ರಚಿಸಲಾಗಿದೆ',

    //error messages
    'ERR_DOC_NAME' => 'ದಾಸ್ತವೇಜಿನ ಹೆಸರು',
    'ERR_DOC_ACTIVE_DATE' => 'ಪ್ರಕಟಣೆಯ ದಿನಾಂಕ',
    'ERR_FILENAME' => 'ಕಡತದ ಹೆಸರು',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'ದಾಸ್ತವೇಜಿನ ಹೆಸರು',

    'LBL_EDIT_BUTTON' => 'ತಿದ್ದು ',
    'LBL_REMOVE' => 'ತೆಗೆಯಿರಿ',

);
