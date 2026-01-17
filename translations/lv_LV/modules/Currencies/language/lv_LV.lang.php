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
    'LBL_MODULE_NAME' => 'Valūtas',
    'LBL_LIST_FORM_TITLE' => 'Valūtas',
    'LBL_CURRENCY' => 'Currency',
    'LBL_ADD' => 'Pievienot',
    'LBL_MERGE' => 'Sapludināt',
    'LBL_MERGE_TXT' => 'Lūdzu, pārbaudiet valūtas, kuras jūs vēlaties attiecināt uz izvēlēto valūtu. Šī darbība dzēsīs visas atzīmētās valūtas un piešķirs jebkuras ar tām saistītās vērtības izvēlētajai valūtai.',
    'LBL_US_DOLLAR' => 'ASV dolārs',
    'LBL_DELETE' => 'Dzēsts',
    'LBL_LIST_SYMBOL' => 'Valūtas simbols:',
    'LBL_LIST_NAME' => 'Valūtas nosaukums',
    'LBL_LIST_ISO4217' => 'ISO 4217 kods',
    'LBL_LIST_ISO4217_HELP' => 'Ievadiet trīs burtu ISO 4217 kodu, kas apzīmē valūtas nosaukumu un valūtas simbolu.',
    'LBL_UPDATE' => 'Atjaunināt',
    'LBL_LIST_RATE' => 'Maiņas kurss',
    'LBL_LIST_RATE_HELP' => 'Valūtas kurss 0.5 Eiro valūtai nozīmē, ka 10 pamatvalūtas vienības = 5 Eiro',
    'LBL_LIST_STATUS' => 'Statuss',
    'LNK_NEW_CONTACT' => 'Jauna kontaktpersona',
    'LNK_NEW_ACCOUNT' => 'Jauns klients',
    'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
    'LNK_NEW_CASE' => 'Jauns pieteikums',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
    'LNK_NEW_CALL' => 'Jauns zvans',
    'LNK_NEW_EMAIL' => 'Jauns E-pasts',
    'LNK_NEW_MEETING' => 'Jauna tikšanās',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'NTC_DELETE_CONFIRMATION' => 'Vai tiešām vēlies dzēst šo ierakstu? Jebkurš ieraksts, kurš izmanto šo valūtu tiks konvertēts uz sistēmas noklusēto valūtu, kad tam piekļūs. Labāk uzstādīt statusu uz - neaktīvs',
    'LBL_BELOW_MIN' => 'Valūtas kursam jābūt lielākam par 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktīvs',
            'Inactive' => 'Neaktīvs',
        ),
    'LBL_CREATED_BY' => 'Autors',
    'LBL_EDIT_LAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
);
