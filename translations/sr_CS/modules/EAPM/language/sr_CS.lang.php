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
    'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRMkorisnik',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NAME' => 'Korisničko ime aplikacije',
    'LBL_CREATED_USER' => 'Kreirao korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista spoljnih naloga',
    'LBL_MODULE_NAME' => 'Spoljni nalog',
    'LBL_MODULE_TITLE' => 'Spoljni nalozi',
    'LBL_HOMEPAGE_TITLE' => 'Moji spoljni nalozi',
    'LNK_NEW_RECORD' => 'Kreiraj spoljni nalog',
    'LNK_LIST' => 'Pregled spoljnih naloga',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga spoljnih naloga',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi spoljni nalog',
    'LBL_PASSWORD' => 'Lozinka aplikacije',
    'LBL_USER_NAME' => 'Korisničko ime aplikacije',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Aplikacija',
    'LBL_API_DATA' => 'API podaci',
    'LBL_API_CONSKEY' => 'Potrošački ključ',
    'LBL_API_CONSSECRET' => 'Potrošačka tajna',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Aplikacija ne podržava metod autorizacije",
    'LBL_AUTH_ERROR' => 'Neuspeo pokušaj konektovanja na ovaj nalog.',
    'LBL_VALIDATED' => 'Konektovan',
    'LBL_ACTIVE' => 'Aktivan',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Konektuj',
    'LBL_NOTE' => 'Molim zabeležite',
    'LBL_CONNECTED' => 'Konektovan',

    'LBL_ERR_NO_AUTHINFO' => 'Za ovaj nalog ne postoje informacije o autentifikaciji',
    'LBL_ERR_NO_TOKEN' => 'Za ovaj nalog nema validnih tokena za prijavu',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Trenutno niste konektovani na svoj {0} nalog. Kliknite OK da bi ste se prijavili na svoj nalog i ponovo aktivirali konekciju.',

    'LBL_CLICK_TO_EDIT' => 'Klikni da izmeniš',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Ponovo autentifikuj',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Nalog za ovu aplikaciju već postoji. Onovili smo postojeći nalog.',
    'LBL_OMIT_URL' => '(Izostavite http:// ili https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Kliknite <b>Konektuj</b> da bi ste bili preusmereni na stranicu sa informacijama o vašem nalogu i da bi autorizovali SuiteCRM-u pristup nalogu. Nakon konektovanja, bicete preusmereni nazad na Sugar.',
    'LBL_BASIC_SAVE_NOTICE' => 'Kliknite <b>Konektuj</b> da bi ste konektovali ovaj nalog na Sugar.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
