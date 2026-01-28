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
    'LBL_ASSIGNED_TO_ID' => 'ID přiřazeného uživatele',
    'LBL_ASSIGNED_TO_NAME' => 'Uživatel SuiteCRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil',
    'LBL_MODIFIED_NAME' => 'Změněno dle Jména',
    'LBL_CREATED' => 'Vytvořeno',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_NAME' => 'Jméno uživatele aplikace',
    'LBL_CREATED_USER' => 'Vytvořeno uživatelem',
    'LBL_MODIFIED_USER' => 'Změněno Uživatelem',
    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_FORM_TITLE' => 'Seznam externích účtů',
    'LBL_MODULE_NAME' => 'Externí účet',
    'LBL_MODULE_TITLE' => 'Externí účty',
    'LBL_HOMEPAGE_TITLE' => 'Mé externí účty',
    'LNK_NEW_RECORD' => 'Vytvořit externí účet',
    'LNK_LIST' => 'Zobrazit externí účty',
    'LBL_SEARCH_FORM_TITLE' => 'Hledat externí zdroj',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nový externí účet',
    'LBL_PASSWORD' => 'Heslo aplikace',
    'LBL_USER_NAME' => 'Jméno uživatele aplikace',
    'LBL_URL' => 'URL adresa',
    'LBL_APPLICATION' => 'Aplikace',
    'LBL_API_DATA' => 'API Data',
    'LBL_API_CONSKEY' => 'Zákaznický klíč',
    'LBL_API_CONSSECRET' => 'Zákazník Secret',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Tato metoda ověření není podporována aplikací",
    'LBL_AUTH_ERROR' => 'Připojení k tomuto účtu se nezdařilo.',
    'LBL_VALIDATED' => 'Připojeno',
    'LBL_ACTIVE' => 'Aktivní',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Připojit',
    'LBL_NOTE' => 'Upozornění',
    'LBL_CONNECTED' => 'Připojeno',

    'LBL_ERR_NO_AUTHINFO' => 'Neexistují žádné ověřovací informace pro tento účet.',
    'LBL_ERR_NO_TOKEN' => 'Neexistují žádné platné přihlašovací tokeny pro tento účet.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Nyní nejste připojeni k vašemu účtu {0}. Klepněte na tlačítko OK pro přihlášení do Vašeho účtu pro reaktivaci připojení.',

    'LBL_CLICK_TO_EDIT' => 'Kliekněte pro editaci',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Znovuověření',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Účet pro tuto aplikaci již existuje. Obnovili jsme existující účet.',
    'LBL_OMIT_URL' => '(Vynechat http:// nebo https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Klikněte <b>Připojit</b> pro přesměrování na stránku pro poskytnutí informací o vašem účtu a k autorizaci přístupu k účtu SuiteCRM. Po připojení budete přesměrováni zpět do SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Klikněte <b>Připojit</b> pro připojení tohoto účtu k SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Pro připojení prosím povolte prohlížeči vyskakovací okna nebo přidejte výjimku pro webové stránky "{0}" do seznamu výjimek.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
