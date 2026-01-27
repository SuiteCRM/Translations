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
    'LBL_SALUTATION' => 'ආචාර',
    'LBL_NAME' => 'නම',
    'LBL_FIRST_NAME' => 'මුල් නම',
    'LBL_LAST_NAME' => 'අවසන් නම',
    'LBL_TITLE' => 'සිරැසිය',
    'LBL_DEPARTMENT' => 'දෙපාර්තමේන්තුවට',
    'LBL_DO_NOT_CALL' => 'අමතන්න කරන්න එපා',
    'LBL_HOME_PHONE' => 'නිවසේ දුරකථනය',
    'LBL_MOBILE_PHONE' => 'ජංගම දුරකථන',
    'LBL_OFFICE_PHONE' => 'කාර්යාලය දුරකථන',
    'LBL_OTHER_PHONE' => 'වෙනත් දුරකථන',
    'LBL_FAX_PHONE' => 'ෆැක්ස්',
    'LBL_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය (හෝ ලිපින)',
    'LBL_PRIMARY_ADDRESS' => 'ප්රාථමික ලිපිනය',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ප්රාථමික ලිපිනය',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ප්රාථමික ලිපිනය වීදිය 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ප්රාථමික ලිපිනය වීදිය 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ප්රාථමික නගරය',
    'LBL_PRIMARY_ADDRESS_STATE' => 'ප්රාථමික රාජ්ය',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ප්රාථමික තැපැල් කේතය',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ප්රාථමික ලිපිනය රට:',
    'LBL_ALT_ADDRESS' => 'විකල්ප ලිපිනය',
    'LBL_ALT_ADDRESS_STREET' => 'විකල්ප ලිපිනය',
    'LBL_ALT_ADDRESS_STREET_2' => 'විකල්ප ලිපිනය වීදිය 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'විකල්ප ලිපිනය වීදිය 3:',
    'LBL_ALT_ADDRESS_CITY' => 'විකල්ප නගරය',
    'LBL_ALT_ADDRESS_STATE' => 'විකල්ප රාජ්ය',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'විකල්ප තැපැල් කේතය',
    'LBL_ALT_ADDRESS_COUNTRY' => 'විකල්ප රටේ',
    'LBL_PRIMARY_STREET' => 'Address',
    'LBL_ALT_STREET' => 'වෙනත් ලිපිනය',
    'LBL_STREET' => 'වෙනත් ලිපිනය',
    'LBL_CITY' => 'නගරය',
    'LBL_STATE' => 'රජයේ',
    'LBL_POSTAL_CODE' => 'තැපැල් කේතය',
    'LBL_COUNTRY' => 'රට',
    'LBL_CONTACT_INFORMATION' => 'සබඳතා තොරතුරු',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනය (ලිපින)',
    'LBL_ASSIGNED_TO_NAME' => 'පරිශීලක',
    'LBL_OTHER_EMAIL_ADDRESS' => 'වෙනත් විද්යුත් තැපෑල:',
    'LBL_ASSISTANT' => 'සහකාර',
    'LBL_ASSISTANT_PHONE' => 'සහකාර දුරකථන',
    'LBL_WORK_PHONE' => 'වැඩ දුරකථන',
    'LNK_IMPORT_VCARD' => 'Vcard සිට නිර්මාණය',
    'LBL_ANY_EMAIL' => 'ඕනෑම විද්යුත්',
    'LBL_EMAIL_NON_PRIMARY' => 'රාජ්ය නොවන ප්රාථමික විද්යුත් තැපැල් පණිවුඩ',
    'LBL_PHOTO' => 'ඡායාරූපය',
    'LBL_EDIT_BUTTON' => 'සංස්කරණය',
    'LBL_REMOVE' => 'ඉවත් කරන්න',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'Lawful Basis',
    'LBL_DATE_REVIEWED' => 'Lawful Basis Date Reviewed',
    'LBL_LAWFUL_BASIS_SOURCE' => 'Lawful Basis Source',
    'LBL_CONSENT' => 'Consent',
    //End Lawful Basis labels
);
