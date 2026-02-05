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
    'LBL_REPLY_ADDR' => '"Odpoveď na" Adresu',
    'LBL_REPLY_NAME' => '"Odpoveď na" Meno',

    'LBL_MODULE_NAME' => 'E-mailový marketing',
    'LBL_MODULE_TITLE' => 'E-mailový marketing: Domov',
    'LBL_LIST_FORM_TITLE' => 'E-mailový marketingové kampane',
    'LBL_NAME' => 'Meno',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_FROM_ADDR' => 'Z emailu',
    'LBL_LIST_DATE_START' => 'Dátum začiatku:',
    'LBL_LIST_TEMPLATE_NAME' => 'Šablóna e-mailu',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_STATUS' => 'Stav',
    'LBL_STATUS_TEXT' => 'Stav:',
    'LBL_TEMPLATE_NAME' => 'Názov šablóny',
    'LBL_DATE_ENTERED' => 'Dátum vloženia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Zmenil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_MESSAGE_FOR' => 'Odoslať túto správu komu:',

    'LBL_FROM_NAME' => 'Od meno:',
    'LBL_FROM_ADDR' => 'Z Emailovej adresy:',
    'LBL_DATE_START' => 'Dátum začiatku:',
    'LBL_TIME_START' => 'Čas zahájenia',
    'LBL_START_DATE_TIME' => 'Dátum a čas začiatku:',
    'LBL_TEMPLATE' => 'Šablóna e-mailu: ',

    'LBL_MODIFIED_BY' => 'Zmenil',
    'LBL_CREATED_BY' => 'Vytvoril',

    'LNK_NEW_CAMPAIGN' => 'Vytvoriť kampaň',
    'LNK_CAMPAIGN_LIST' => 'Kampane',
    'LNK_NEW_PROSPECT_LIST' => 'Vytvoriť Cieľovú skupinu',
    'LNK_PROSPECT_LIST_LIST' => 'Cieľové skupiny',
    'LNK_NEW_PROSPECT' => 'Vytvoriť cieľ',
    'LNK_PROSPECT_LIST' => 'Ciele',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-mailový marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Vytvoriť',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Upraviť',
    'LBL_FROM_MAILBOX' => 'Z poštovej schránky',
    'LBL_FROM_MAILBOX_NAME' => 'Použitie poštovej schránky',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Emailový účet odchádzajúcej pošty:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Cieľové skupiny',
    'LBL_ALL_PROSPECT_LISTS' => 'Zaraďte do výberu všetky zoznamy cieľov kampane.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Všetky zoznamy cieľov sa vzťahujú k tejto správe.',
    'LBL_PROSPECT_LIST_NAME' => 'Názov cieľovej skupiny',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Zoznam cieľov',
    'LBL_MODULE_SEND_TEST' => 'Kampaň: Poslať Test',
    'LBL_MODULE_SEND_EMAILS' => 'Kampaň: Poslať Emaily',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Vyberte správy kampane, ktoré chcete testovať:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Vyberte správy kampane, ktoré chcete naplánovať na distribúciu v zadaný dátum a čas:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Odoslať',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Odoslať',
    'LBL_ERROR_ON_MARKETING' => 'Chýba(jú) povinné pole(ia)',

    'LBL_CAMPAIGN_ID' => 'ID kampane',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID emailového účtu odchádzajúcej pošty',
    'LBL_EMAIL_TEMPLATE' => 'Šablóna e-mailu',
    'LBL_PROSPECT_LISTS' => 'Zoznam kandidátov',

);
