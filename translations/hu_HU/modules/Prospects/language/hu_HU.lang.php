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
    'LBL_MODULE_NAME' => 'Célok',
    'LBL_MODULE_ID' => 'Célok',
    'LBL_INVITEE' => 'Közvetlen felettesei',
    'LBL_MODULE_TITLE' => 'Prospectek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Cél keresése',
    'LBL_LIST_FORM_TITLE' => 'Prospect lista',
    'LBL_NEW_FORM_TITLE' => 'Új Prospect',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_LAST_NAME' => 'Vezetéknév',
    'LBL_LIST_TITLE' => 'Beosztás',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telefon:',
    'LBL_LIST_FIRST_NAME' => 'Keresztnév',
    'LBL_ASSIGNED_TO_NAME' => 'Hozzárendelve',
    'LBL_ASSIGNED_TO_ID' => 'Felelős:',
    'LBL_CAMPAIGN_ID' => 'Kampány Id',
    'LBL_EXISTING_ACCOUNT' => 'Egy létező céget használt',
    'LBL_CREATED_ACCOUNT' => 'Új ügyfél létrehozva',
    'LBL_CREATED_CALL' => 'Új hívás létrehozva',
    'LBL_CREATED_MEETING' => 'Új találkozó létrehozva',
    'LBL_NAME' => 'Név',
    'LBL_PROSPECT_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'További információk',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_OFFICE_PHONE' => 'Irodai telefon:',
    'LBL_ANY_PHONE' => 'További telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Főoldal:',
    'LBL_OTHER_PHONE' => 'További telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím Utca:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím Város:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges cím Ország:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím megye:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím Irányítószám:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatív cím Utca:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatív cím Város:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatív cím Ország:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatív cím megye:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatív cím Irányítószám:',
    'LBL_TITLE' => 'Beosztás:',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_BIRTHDATE' => 'Születési dátum:',
    'LBL_EMAIL_ADDRESS' => 'Email cím:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb Email:',
    'LBL_ANY_EMAIL' => 'Bármilyen Email:',
    'LBL_ASSISTANT' => 'Aszisztens:',
    'LBL_ASSISTANT_PHONE' => 'Aszisztens telefon:',
    'LBL_DO_NOT_CALL' => 'Nem szabad felhívni:',
    'LBL_EMAIL_OPT_OUT' => 'Email Elutasítva:',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',
    'LBL_ALTERNATE_ADDRESS' => 'Egyéb Cím:',
    'LBL_ANY_ADDRESS' => 'Általános cím:',
    'LBL_CITY' => 'Város:',
    'LBL_STATE' => 'Állam vagy régió:',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_DESCRIPTION' => 'Megjegyzés:',
    'LBL_OPP_NAME' => 'Lehetőség Neve:',
    'LBL_IMPORT_VCARD' => 'vCard Importálása',
    'LBL_IMPORT_VCARDTEXT' => 'A beimportált vCard-ból automatikusan egy új Kapcsolattartót generáltunk.',
    'LBL_DUPLICATE' => 'Lehet, hogy duplikált cél',
    'MSG_SHOW_DUPLICATES' => 'A cél létrehozásakor lehet, hogy egy már létező célt adott meg. A cél rekordok amelyek hasonló neveket és/vagy email-címeket tartalmaznak lentebb láthatók. Kattintson a Mentés gombra az új cél létrehozásához, vagy a Mégse gombra, hogy visszatérjen a modulba a cél létrehozás nélkül.',
    'MSG_DUPLICATE' => 'A cél létrehozásakor lehet, hogy egy már létező célt adott meg. A cél rekordok amelyek hasonló neveket és/vagy email-címeket tartalmaznak lentebb láthatók. Kattintson a Mentés gombra az új cél létrehozásához, vagy a Mégse gombra, hogy visszatérjen a modulba a cél létrehozás nélkül.',
    'LNK_IMPORT_VCARD' => 'Kapcsolat létrehozása vCard állományból',
    'LNK_NEW_ACCOUNT' => 'Cég lérehozása',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség lérehozása',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány lérehozása',
    'LNK_NEW_CALL' => 'Hívások ütemezése',
    'LNK_NEW_EMAIL' => 'Email archiválása',
    'LNK_NEW_MEETING' => 'Találkozók ütemezése',
    'LNK_NEW_TASK' => 'Feladat lérehozása',
    'LNK_NEW_APPOINTMENT' => 'Hívások ütemezése',
    'LNK_IMPORT_PROSPECTS' => 'Lehetséges vevők importálása',
    'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törli ezt a rekordot?',
    'NTC_SNOOZE_CONFIRMATION' => 'Biztos beállítja a szüneteltetést?',
    'NTC_REMOVE_CONFIRMATION' => 'Biztos benne, hogy eltávolítja a kijelölt Kapcsolattartót az Eseményből?',
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a kapcsolat törléséhez!',
    'LBL_SALUTATION' => 'Megszólítás',
    'LBL_CREATED_OPPORTUNITY' => 'Új lehetőség létrehozva',
    'LNK_SELECT_ACCOUNT' => "Cég választása",
    'LNK_NEW_PROSPECT' => 'Cél létrehozása',
    'LNK_PROSPECT_LIST' => 'Célok megtekintése',
    'LNK_NEW_CAMPAIGN' => 'Kampány létrehozása',
    'LNK_CAMPAIGN_LIST' => 'Kampányok',
    'LNK_NEW_PROSPECT_LIST' => 'Céllista létrehozása',
    'LNK_PROSPECT_LIST_LIST' => 'Céllista',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Válasszon az ellenőrzött célok közül',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Válasszon az ellenőrzött célok közül',
    'LBL_INVALID_EMAIL' => 'Hibás Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Célok',
    'LBL_PROSPECT_LIST' => 'Lehetőség lista',
    'LBL_CONVERT_BUTTON_TITLE' => 'Cél konvertálása',
    'LBL_CONVERT_BUTTON_LABEL' => 'Cél konvertálása',
    'LNK_NEW_CONTACT' => 'Kapcsolattartó felvitel',
    'LBL_CREATED_CONTACT' => "Új kapcsolattartó létrehozva",
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampánynapló',
    'LBL_TRACKER_KEY' => 'Követőkulcs',
    'LBL_LEAD_ID' => 'Érdeklődő Id',
    'LBL_CONVERTED_LEAD' => 'Konvertált ajánlás',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_EDIT_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Események',
);
