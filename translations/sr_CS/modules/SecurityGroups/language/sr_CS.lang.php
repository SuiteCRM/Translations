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
    'LBL_ALL_MODULES' => 'Svi',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NONINHERITABLE' => 'Nije nasledivo',
    'LBL_LIST_NONINHERITABLE' => 'Nije nasledivo',
    'LBL_NAME' => 'Ime',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_LIST_FORM_TITLE' => 'Sigurnosne grupe',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'Kreiraj sigurnosnu grupu',
    'LNK_LIST' => 'Pregled u vidu liste',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups Management',
    'LBL_USERS' => 'Korisnici',
    'LBL_USERS_SUBPANEL_TITLE' => 'Korisnici',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Uloge',
    'LBL_ROLES' => 'Uloge',

    'LBL_CONFIGURE_SETTINGS' => 'Konfiguriši',
    'LBL_ADDITIVE' => 'Aditivna prava',
    'LBL_ADDITIVE_DESC' => "Korisnik dobija najveća prava od svih uloga dodeljenih korisniku ili korisnikovoj grupi(ama)",
    'LBL_STRICT_RIGHTS' => 'Striktna prava',
    'LBL_STRICT_RIGHTS_DESC' => "Ako je korisnik član više grupa, koriste se samo odnosna prava iz grupe dodeljene tekućem zapisu.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Redosled korisničkih uloga',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Ukoliko je bilo koja uloga dodeljena direktno korisniku, ta uloga bi trebala da ima prednost u odnosu na bilo koju grupnu ulogu.',
    'LBL_INHERIT_TITLE' => 'Pravila nasleđivanja grupe',
    'LBL_INHERIT_CREATOR' => 'Nasledi od Kreirao korisnik',
    'LBL_INHERIT_CREATOR_DESC' => 'Zapis će naslediti sve grupe dodeljene korisniku koji ga je kreirao.',
    'LBL_INHERIT_PARENT' => 'Nasledi od nadređenog zapisa',
    'LBL_INHERIT_PARENT_DESC' => 'na pr. ako je slučaj kreiran za kontakt, slučaj će naslediti grupe pridružene kontaktu.',
    'LBL_USER_POPUP' => 'Popup nove grupe korisnika',
    'LBL_USER_POPUP_DESC' => 'Kada se kreira novi korisnik, prikaži popup Sigurnosnih grupa da bi se korisnik dodelio grupi(ama).',
    'LBL_INHERIT_ASSIGNED' => 'Nasledi od Dodeljeno korisniku',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Zapis će naslediti sve grupe korisnika dodeljenog zapisu. Ostale grupe dodeljene zapisu NEĆE biti uklonjene.',
    'LBL_POPUP_SELECT' => 'Koristi izbor Kreatora grupe',
    'LBL_POPUP_SELECT_DESC' => 'Ako je zapis kreiran od strane korisnika u više od jedne grupe, prikaži panel za selekciju grupe na ekranu za kreiranje. U suprotnom, nasledi tu jednu grupu.',
    'LBL_FILTER_USER_LIST' => 'Filtriraj listu korisnika',
    'LBL_FILTER_USER_LIST_DESC' => "Korisnici koji nisu admin mogu da dodele samo korisnicima iz iste grupe(a)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Podrazumevane grupe za nove zapise',
    'LBL_ADD_BUTTON_LABEL' => 'Dodaj',
    'LBL_REMOVE_BUTTON_LABEL' => 'Ukloni',
    'LBL_GROUP' => 'Grupa:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Sigurnosne grupe: masovno dodeljivanje',
    'LBL_ASSIGN' => 'Dodeli',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_ASSIGN_CONFIRM' => 'Da li ste sigurni da želite da dodate ovu grupu ',
    'LBL_REMOVE_CONFIRM' => 'Da li ste sigurni da želite da uklonite ovu grupu iz ',
    'LBL_CONFIRM_END' => 'izabrani zapis(i)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Sigurnosna grupa/Korisnik',
    'LBL_USER_NAME' => 'Korisničko ime',
    'LBL_SECURITYGROUP_NAME' => 'Ime Sigurnosne grupe',
    'LBL_HOMEPAGE_TITLE' => 'Poruke grupe',
    'LBL_TITLE' => 'Naslov',
    'LBL_ROWS' => 'Redovi',
    'LBL_POST' => 'Objava',
    'LBL_SELECT_GROUP_ERROR' => 'Molim izaberite grupu i pokušajte ponovo.',

    'LBL_GROUP_SELECT' => 'Izaberite koje grupe bi trebale da imaju pristup ovom zapisu',
    'LBL_ERROR_DUPLICATE' => 'Zbog mogućeg dupliranja detektovanog od strane SuiteCRM, moraćete manuelno da dodate Sigurnosnu grupu vašem novo kreiranom zapisu.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Dolazni email nalog',
    'LBL_INBOUND_EMAIL_DESC' => 'Dozvoli pristup email nalogu samo ako korisnik pripada grupi koja je dodeljena email nalogu.',
    'LBL_PRIMARY_GROUP' => 'Primarna grupa',
    'LBL_CHECKMARK' => 'Potvrda',

);
