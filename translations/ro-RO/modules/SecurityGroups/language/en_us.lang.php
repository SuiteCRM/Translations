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
    'LBL_ALL_MODULES' => 'Toate',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NONINHERITABLE' => 'Nu se moștenește',
    'LBL_LIST_NONINHERITABLE' => 'Nu se moștenește',
    'LBL_NAME' => 'Nume',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_FORM_TITLE' => 'Grupuri Securitate',
    'LBL_MODULE_NAME' => 'Gestionarea grupurilor de securitate',
    'LBL_MODULE_TITLE' => 'Gestionarea grupurilor de securitate',
    'LNK_NEW_RECORD' => 'Creează un Grup de Securitate',
    'LNK_LIST' => 'Lista',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare gestionare grupuri de securitate',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Gestionarea grupurilor de securitate',
    'LBL_USERS' => 'Utilizatori',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilizatori',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roluri',
    'LBL_ROLES' => 'Roluri',

    'LBL_CONFIGURE_SETTINGS' => 'Configurați',
    'LBL_ADDITIVE' => 'Drepturi adăugate',
    'LBL_ADDITIVE_DESC' => "Utilizatorul primește cele mai mari drepturi pentru toate rolurile atribuite utilizatorului sau grupului (grupurilor) de utilizatori",
    'LBL_STRICT_RIGHTS' => 'Drepturi limitative',
    'LBL_STRICT_RIGHTS_DESC' => "În cazul în care un utilizator este membru al mai multor grupuri, sunt utilizate numai drepturile respective ale grupului atribuit înregistrării curente.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Ierarhia rolurilor de utilizator',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Dacă orice rol este atribuit direct unui utilizator, acel rol ar trebui să aibă prioritate față de orice roluri deținute în acel grup.',
    'LBL_INHERIT_TITLE' => 'Reguli de moștenire din grup',
    'LBL_INHERIT_CREATOR' => 'Moștenește de la Utilizator',
    'LBL_INHERIT_CREATOR_DESC' => 'Înregistrarea va moșteni toate grupurile atribuite utilizatorului care a creat-o.',
    'LBL_INHERIT_PARENT' => 'Moștenit de la înregistrarea părinte',
    'LBL_INHERIT_PARENT_DESC' => 'ex. Dacă un caz este creat pentru un contact, cazul va moșteni grupurile asociate contactului.',
    'LBL_USER_POPUP' => 'Fereastră pop-up pentru grup nou de utilizatori',
    'LBL_USER_POPUP_DESC' => 'Când creați un utilizator nou, se afișează un popup despre securitatea grupului pentru a atribui utilizatorul acelui grup (grupurilor).',
    'LBL_INHERIT_ASSIGNED' => 'Moștenit de la utilizatorul asignat',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Înregistrarea va moșteni toate grupurile de utilizator atribuit înregistrării. Alte grupuri atribuite înregistrării NU vor fi șterse.',
    'LBL_POPUP_SELECT' => 'Selectează Grupul de Creatori',
    'LBL_POPUP_SELECT_DESC' => 'Atunci când un utilizator creează o înregistrare în mai multe grupuri, se afișează un panou de selecție a grupului pe ecranul de creare. În caz contrar, moștenește acel singur grup.',
    'LBL_FILTER_USER_LIST' => 'Filtrează lista de utilizatori',
    'LBL_FILTER_USER_LIST_DESC' => "Utilizatorii care nu sunt administratori pot atribui sarcini doar utilizatorilor din același grup(uri)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grupuri implicite pentru înregistrări noi',
    'LBL_ADD_BUTTON_LABEL' => 'Adăugați',
    'LBL_REMOVE_BUTTON_LABEL' => 'Înlăturați',
    'LBL_GROUP' => 'Grup:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Grupuri de securitate: Atribuire în masă',
    'LBL_ASSIGN' => 'Atribuiți',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_ASSIGN_CONFIRM' => 'Sunteți sigur că doriți să adaugați acest grup la ',
    'LBL_REMOVE_CONFIRM' => 'Sunteți sigur că doriți să ștergeți acest grup din ',
    'LBL_CONFIRM_END' => ' înregistrarea(rile) selectată?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Securitate Grup/Utilizator',
    'LBL_USER_NAME' => 'Utilizator',
    'LBL_SECURITYGROUP_NAME' => 'Nume Securitate Grup',
    'LBL_HOMEPAGE_TITLE' => 'Mesaje de grup',
    'LBL_TITLE' => 'Titlu',
    'LBL_ROWS' => 'Rânduri',
    'LBL_POST' => 'Postează',
    'LBL_SELECT_GROUP_ERROR' => 'Vă rugăm să selectați un grup și să încercați din nou.',

    'LBL_GROUP_SELECT' => 'Selectați care grupuri ar trebui să aibă acces la această înregistrare',
    'LBL_ERROR_DUPLICATE' => 'Datorită unui posibil duplicat detectat de SuiteCRM va trebui să adaugați manual Grupuri de Securitate la noua dvs. înregistrare.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Actualizarea a eșuat deoarece filtrul de căutare a fost modificat. Încercați din nou.',

    'LBL_INBOUND_EMAIL' => 'Conturi de e-mail de intrare',
    'LBL_INBOUND_EMAIL_DESC' => 'Permite accesul la un cont de e-mail doar dacă utilizatorul aparține unui grup care este atribuit contului de e-mail.',
    'LBL_PRIMARY_GROUP' => 'Grupul primar',
    'LBL_CHECKMARK' => 'Bifă',

);
