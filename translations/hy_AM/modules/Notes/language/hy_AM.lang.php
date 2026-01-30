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
    'ERR_DELETE_RECORD' => 'Հաշիվը հեռացնելուց առաջ դուք պետք է նշեք գրառման համարը։',
    'LBL_ACCOUNT_ID' => 'Հաշիվ ID․',
    'LBL_CASE_ID' => 'ID Գործեր․',
    'LBL_CLOSE' => 'Փակել․ ',
    'LBL_CONTACT_ID' => 'Կոնտակտ ID․',
    'LBL_CONTACT_NAME' => 'Կոնտակտ․',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Նշումներ',
    'LBL_DESCRIPTION' => 'Նշում',
    'LBL_EMAIL_ADDRESS' => 'էլ-փոստի հասցե․',
    'LBL_EMAIL_ATTACHMENT' => 'Էլ-փոստի կցված ֆայլ',
    'LBL_FILE_MIME_TYPE' => 'MIME տեսակը',
    'LBL_FILE_URL' => 'URL ֆայլ',
    'LBL_FILENAME' => 'Կցված ֆայլ',
    'LBL_LEAD_ID' => 'Առաջնորդի ID․',
    'LBL_LIST_CONTACT_NAME' => 'Կոնտակտ',
    'LBL_LIST_DATE_MODIFIED' => 'Վերջին փոփոխությունը',
    'LBL_LIST_FILENAME' => 'Կցված ֆայլ',
    'LBL_LIST_FORM_TITLE' => 'Նշումների ցուցակ',
    'LBL_LIST_RELATED_TO' => 'Առնչվում է',
    'LBL_LIST_SUBJECT' => 'Թեմա',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LIST_CONTACT' => 'Կոնտակտ',
    'LBL_MODULE_NAME' => 'Նշումներ',
    'LBL_MODULE_TITLE' => 'Նշումներ․ Գլխավոր',
    'LBL_NEW_FORM_TITLE' => 'Ստեղծել գրառում կամ ավելացնել կցված ֆայլ',
    'LBL_NOTE_STATUS' => 'Նշում',
    'LBL_NOTE_SUBJECT' => 'Թեմա',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Կցված ֆայլեր',
    'LBL_NOTE' => 'Նշում․',
    'LBL_OPPORTUNITY_ID' => 'Գործարքի ID․',
    'LBL_PARENT_ID' => 'Ծնողի ID․',
    'LBL_PARENT_TYPE' => 'Ծնողի տեսակը',
    'LBL_PHONE' => 'Հեռ․',
    'LBL_PORTAL_FLAG' => 'Ցուցադրե՞լ պորտալում։',
    'LBL_EMBED_FLAG' => 'Կցվա՞ծ է էլ-փոստին։',
    'LBL_PRODUCT_ID' => 'Արտադրանքի ID',
    'LBL_QUOTE_ID' => 'Առաջարկի ID.',
    'LBL_RELATED_TO' => 'Առնչվում է',
    'LBL_SEARCH_FORM_TITLE' => 'Որոնել նշումը',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_SUBJECT' => 'Թեմա',
    'LNK_IMPORT_NOTES' => 'Նշումների ներմուծում',
    'LNK_NEW_NOTE' => 'Ստեղծել գրառում կամ կցված ֆայլ',
    'LNK_NOTE_LIST' => 'Դիտել նշումները',
    'LBL_MEMBER_OF' => 'Անդամակից է․',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_REMOVING_ATTACHMENT' => 'Կցված ֆայլը հեռացվում է․․․',
    'ERR_REMOVING_ATTACHMENT' => 'Չհաջողվեց հեռացնել կցված ֆայլը...',
    'LBL_CREATED_BY' => 'Ստեղծված է',
    'LBL_MODIFIED_BY' => 'Փոփոխված է',
    'LBL_SEND_ANYWAYS' => 'Այս էլ․նամակը վերնագիր չունի։ Ուղարկել/պահպանե՞լ ամեն դեպքում։',
    'LBL_NOTE_INFORMATION' => 'Հիմնական ինֆորմացիա', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Իմ նշումները',
    'LBL_EDITLAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Անուն',
    'LBL_LAST_NAME' => 'Ազգանուն',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Բարձրացող',
    'LBL_DESCENDING' => 'Վայրընթաց',
);
