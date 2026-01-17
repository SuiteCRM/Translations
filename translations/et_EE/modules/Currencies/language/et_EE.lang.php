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
    'LBL_MODULE_NAME' => 'Valuutad',
    'LBL_LIST_FORM_TITLE' => 'Valuutad',
    'LBL_CURRENCY' => 'Valuuta',
    'LBL_ADD' => 'Lisa',
    'LBL_MERGE' => 'Mesti',
    'LBL_MERGE_TXT' => 'Vali valuuta, mida tahad märkida valitud valuutaks. See kustutab kõik valuutad',
    'LBL_US_DOLLAR' => 'Usa Dollar',
    'LBL_DELETE' => 'Kustuta',
    'LBL_LIST_SYMBOL' => 'Valuuta sümbol',
    'LBL_LIST_NAME' => 'Valuuta nimi',
    'LBL_LIST_ISO4217' => 'ISO 4217 kood',
    'LBL_LIST_ISO4217_HELP' => 'Sisesta kolmetäheline ISO 4217 kood, mis defineerib valuuta nime ja sümboli.',
    'LBL_UPDATE' => 'Uuenda',
    'LBL_LIST_RATE' => 'Konversioonimäär',
    'LBL_LIST_RATE_HELP' => 'Konversioonimäär 0,5 Eurot tähendab, et 10 USD = 5 Eurot',
    'LBL_LIST_STATUS' => 'Olek',
    'LNK_NEW_CONTACT' => 'Uus kontakt',
    'LNK_NEW_ACCOUNT' => 'Uus ettevõte',
    'LNK_NEW_OPPORTUNITY' => 'Uus võimalus',
    'LNK_NEW_CASE' => 'Uus juhtum',
    'LNK_NEW_NOTE' => 'Loo märkus või manus',
    'LNK_NEW_CALL' => 'Uus telefonikõne',
    'LNK_NEW_EMAIL' => 'Uus e-kiri',
    'LNK_NEW_MEETING' => 'Uus kohtumine',
    'LNK_NEW_TASK' => 'Loo ülesanne',
    'NTC_DELETE_CONFIRMATION' => 'Oled kindel, et soovid seda kirjet kustutada? Iga kirje, kus kasutatakse seda valuutat konverteeritakse süsteemi vaikevaluutana. Võib olla parem määrata olek mitteaktiivseks.',
    'LBL_BELOW_MIN' => 'Konversioonimäär peab olema suurem kui 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktiivne',
            'Inactive' => 'Mitteaktiivne',
        ),
    'LBL_CREATED_BY' => 'Loodud',
    'LBL_EDIT_LAYOUT' => 'Muuda paigutust' /*for 508 compliance fix*/,
);
