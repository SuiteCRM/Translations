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
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó ID',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM Felhasználó',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Módosító',
    'LBL_MODIFIED_NAME' => 'Módosító név',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_DELETED' => 'Törölve',
    'LBL_NAME' => 'Alkalmazás felhasználói neve',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_FORM_TITLE' => 'Kiterjesztett Klienslista',
    'LBL_MODULE_NAME' => 'Klienslista',
    'LBL_MODULE_TITLE' => 'Klienslisták',
    'LBL_HOMEPAGE_TITLE' => 'Kiterjesztett Klienslistáim',
    'LNK_NEW_RECORD' => 'Kiterjesztett Klienslista Létrehozása',
    'LNK_LIST' => 'Kiterjesztett Klienslisták Megtekintése',
    'LBL_SEARCH_FORM_TITLE' => 'Kiterjesztett Klienslisták Keresése',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_NEW_FORM_TITLE' => 'Új Kiterjesztett Klienslista',
    'LBL_PASSWORD' => 'Alkalmazás Jelszó',
    'LBL_USER_NAME' => 'Alkalmazás felhasználói neve',
    'LBL_URL' => 'URL:',
    'LBL_APPLICATION' => 'Alkalmazás',
    'LBL_API_DATA' => 'API Adat',
    'LBL_API_CONSKEY' => 'Fogyasztói kulcs',
    'LBL_API_CONSSECRET' => 'Fogyasztói titok',
    'LBL_API_OAUTHTOKEN' => 'OAuth token',
    'LBL_AUTH_UNSUPPORTED' => "Ez az azonosítás nincs támogatva az alkalmazás által",
    'LBL_AUTH_ERROR' => 'A Kiterjesztett Kliens azonosítása sikertelen.',
    'LBL_VALIDATED' => 'Hozzáférés érvényesítve',
    'LBL_ACTIVE' => 'Aktív',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Összekötés',
    'LBL_NOTE' => 'Kérjük, vegye figyelembe',
    'LBL_CONNECTED' => 'Hozzáférés érvényesítve',

    'LBL_ERR_NO_AUTHINFO' => 'Nincs azonosítási információ ehhez a Klienshez.',
    'LBL_ERR_NO_TOKEN' => 'Nincs érvényes token bejelentkezés ehhez a Klienshez.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Jelenleg nincs bejelentkezve. Kattintson az OK gombra a fiókjába való bejelentkezéshez és aktiválja a kiterjesztett Kliens rekordot.',

    'LBL_CLICK_TO_EDIT' => 'Kattintson a szerkesztéshez',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Újraazonosítás',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Ez a Kliens már létezik ebben az alkalmazásban.Visszahelyeztük.',
    'LBL_OMIT_URL' => '(http:// or https:// kihagyása)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Kattintson a <b> Kapcsolódás </b> gombra, hogy egy oldalra irányítson, ahol megadhatja fiókinformációit, és engedélyezi a SuiteCRM számára a fiókhoz való hozzáférést. A kapcsolódás után visszairányítjuk Önt a SuiteCRM felületre.',
    'LBL_BASIC_SAVE_NOTICE' => 'Kattintson a <b>Kapcsolódás</b> gombra, hogy kapcsolja ezt a fiókot a SuiteCRM-hez.',
    'LBL_ERR_POPUPS_DISABLED' => 'Kérjük, engedélyezze a böngészőben az ugróablakokat pop-up ablakokat), vagy adja hozzá a "{0}” webhelyet a kivételek listájához a csatlakoztatáshoz.',

    'LBL_API_OAUTHSECRET' => 'API OAuth titok',
);
