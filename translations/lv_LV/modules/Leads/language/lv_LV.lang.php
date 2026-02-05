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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Ir jānorāda ieraksta numurus, lai dzēstu interesentu.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Uzņēmuma apraksts',
    'LBL_ACCOUNT_ID' => 'Uzņēmuma ID',
    'LBL_ACCOUNT_NAME' => 'Uzņēmuma nosaukums:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
    'LBL_ALT_ADDRESS_CITY' => 'Cita adrese - pilsēta',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Cita adrese - valsts',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Cita adrese - pasta indekss',
    'LBL_ALT_ADDRESS_STATE' => 'Cita adrese - Novads',
    'LBL_ALT_ADDRESS_STREET_2' => 'Cita adrese - iela 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Cita adrese - iela 3',
    'LBL_ALT_ADDRESS_STREET' => 'Cita adrese - iela',
    'LBL_ALTERNATE_ADDRESS' => 'Cita adrese:',
    'LBL_ALT_ADDRESS' => 'Cita adrese:',
    'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
    'LBL_ANY_EMAIL' => 'Jebkurš E-pasts:',
    'LBL_ANY_PHONE' => 'Jebkurš tālrunis:',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam:',
    'LBL_CITY' => 'Pilsēta:',
    'LBL_CONTACT_ID' => 'Kontakta ID',
    'LBL_CONTACT_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Interesenta vārds:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Interesents-Iespēja:',
    'LBL_CONTACT_ROLE' => 'Loma:',
    'LBL_CONTACT' => 'Interesents:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertētais uzņēmums:',
    'LBL_CONVERTED_CONTACT' => 'Konvertētā kontaktpersona:',
    'LBL_CONVERTED_OPP' => 'Konvertētā iespēja:',
    'LBL_CONVERTED' => 'Konvertēts',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konvertēt interesentu',
    'LBL_CONVERTLEAD' => 'Konvertēt interesentu',
    'LBL_CONVERTLEAD_WARNING' => 'Brīdinājums: Jūs vēlaties konvertēt Interesentu, kura statuss ir "Konvertēts". Kontaktpersonas un/vai Uzņēmuma ieraksti šim interesentam, iespējams, jau ir izveidoti. Ja vēlies konvertēt interesentu, spied Saglabāt. Ja nevēlies konvertēt Interesentu spied Atcelt.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Iespējama kontaktpersona: ',
    'LBL_COUNTRY' => 'Valsts:',
    'LBL_CREATED_NEW' => 'Izveidots jauns',
    'LBL_CREATED_ACCOUNT' => 'Izveidots jauns uzņēmums',
    'LBL_CREATED_CALL' => 'Izveidots jauns zvans',
    'LBL_CREATED_CONTACT' => 'Izveidota jauna kontaktpersona',
    'LBL_CREATED_MEETING' => 'Izveidota jauna tikšanās',
    'LBL_CREATED_OPPORTUNITY' => 'Izveidota jauna iespēja',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Interesenti',
    'LBL_DEPARTMENT' => 'Nodaļa:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_DO_NOT_CALL' => 'Nezvanīt!:',
    'LBL_DUPLICATE' => 'Līdzīgi interesenti',
    'LBL_EMAIL_ADDRESS' => 'E-pasts:',
    'LBL_EMAIL_OPT_OUT' => 'Atteikties no e-pastu saņemšanas:',
    'LBL_EXISTING_ACCOUNT' => 'Lietots esošs uzņēmums',
    'LBL_EXISTING_CONTACT' => 'Lietota esoša kontaktpersona',
    'LBL_EXISTING_OPPORTUNITY' => 'Lietota esoša iespēja',
    'LBL_FAX_PHONE' => 'Fakss:',
    'LBL_FIRST_NAME' => 'Vārds:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
    'LBL_HOME_PHONE' => 'Mājas tālrunis:',
    'LBL_IMPORT_VCARD' => 'Importēt vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automātiski izveidot jaunu interesentu importējot vCard no failu sistēmas.',
    'LBL_INVALID_EMAIL' => 'Nederīgs e-pasts:',
    'LBL_INVITEE' => 'Padotie (?) / Tieši atskaitās',
    'LBL_LAST_NAME' => 'Uzvārds:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Interesenta avota apraksts:',
    'LBL_LEAD_SOURCE' => 'Interesenta avots:',
    'LBL_LIST_ACCEPT_STATUS' => 'Apstiprināt statusu',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_CONTACT_NAME' => 'Interesenta vārds',
    'LBL_LIST_CONTACT_ROLE' => 'Loma',
    'LBL_LIST_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_LIST_FIRST_NAME' => 'Vārds',
    'LBL_LIST_FORM_TITLE' => 'Interesentu saraksts',
    'LBL_LIST_LAST_NAME' => 'Uzvārds',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Interesenta avota apraksts',
    'LBL_LIST_LEAD_SOURCE' => 'Interesenta avots',
    'LBL_LIST_MY_LEADS' => 'Mani interesenti',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_PHONE' => 'Biroja tālrunis',
    'LBL_LIST_REFERED_BY' => 'Ieteica',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LIST_TITLE' => 'Amats',
    'LBL_MOBILE_PHONE' => 'Mobilais tālrunis:',
    'LBL_MODULE_NAME' => 'Interesenti',
    'LBL_MODULE_TITLE' => 'Interesenti: Sākums',
    'LBL_NAME' => 'Vārds:',
    'LBL_NEW_FORM_TITLE' => 'Jauns interesents',
    'LBL_OFFICE_PHONE' => 'Darba tālrunis:',
    'LBL_OPP_NAME' => 'Iespējas nosaukums:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Summa:',
    'LBL_OPPORTUNITY_ID' => 'Iespējas ID:',
    'LBL_OPPORTUNITY_NAME' => 'Iespējas nosaukums:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Cits E-pasts:',
    'LBL_OTHER_PHONE' => 'Cits tālrunis:',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_PORTAL_APP' => 'Portāla lietojumprogramma',
    'LBL_PORTAL_INFORMATION' => 'Portāla informācija',
    'LBL_PORTAL_NAME' => 'Portāla nosaukums:',
    'LBL_POSTAL_CODE' => 'Pasta indekss:',
    'LBL_STREET' => 'Iela',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pamatadrese - Pilsēta',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pamatadrese - Valsts',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pamatadrese - Pasta indekss',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pamatadrese - Novads',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pamatadrese - Iela 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pamatadrese - Iela 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pamatadrese - Iela',
    'LBL_PRIMARY_ADDRESS' => 'Primārā adrese:',
    'LBL_REFERED_BY' => 'Ieteica:',
    'LBL_REPORTS_TO_ID' => 'Vadītāja ID:',
    'LBL_REPORTS_TO' => 'Tiešais vadītājs:',
    'LBL_SALUTATION' => 'Uzruna',
    'LBL_MODIFIED' => 'Rediģēja',
    'LBL_CREATED' => 'Autors',
    'LBL_SEARCH_FORM_TITLE' => 'Interesentu meklēšana',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Atlasīt izvēlētos interesentus',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Atlasīt izvēlētos interesentus',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Statusa apraksts:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Izveidot interesentu no vCard',
    'LNK_LEAD_LIST' => 'Skatīt interesentus',
    'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',
    'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos:',
    'LNK_NEW_CONTACT' => 'Izveidot kontaktpersonu',
    'LNK_NEW_LEAD' => 'Izveidot interesentu',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_NEW_CASE' => 'Izveidot pieteikumu',
    'LNK_NEW_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
    'LNK_SELECT_ACCOUNTS' => '<b>vai</b> izvēlēties uzņēmumu',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Vai jūs tiešām vēlaties dzēst šo ierakstu?',
    'NTC_REMOVE_CONFIRMATION' => 'Vai tiešām vēlaties izņemt šo  interesentu no pieteikuma?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Mārketings',
    'LBL_CAMPAIGN' => 'Kampaņa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_PROSPECT_LIST' => 'Prospektu saraksts',
    'LBL_CAMPAIGN_LEAD' => 'Mārketings',
    'LBL_BIRTHDATE' => 'Dzimšanas diena:',
    'LBL_ASSISTANT_PHONE' => 'Asistenta tālrunis',
    'LBL_ASSISTANT' => 'Asistents',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_MODIFIED_USER' => 'Modificēja lietotājs',
    'LBL_CAMPAIGNS' => 'Mārketings',
    'LBL_CONVERT_MODULE_NAME' => 'Modulis',
    'LBL_CONVERT_REQUIRED' => 'Obligāts',
    'LBL_CONVERT_SELECT' => 'Atļaut izvēli',
    'LBL_CONVERT_COPY' => 'Kopēt datus',
    'LBL_CONVERT_EDIT' => 'Rediģēt',
    'LBL_CONVERT_DELETE' => 'Dzēsts',
    'LBL_CONVERT_ADD_MODULE' => 'Pievienot moduli',
    'LBL_CREATE' => 'Jauns',
    'LBL_SELECT' => '<b>VAI</b> Izvēlēties',
    'LBL_WEBSITE' => 'Mājas lapa',
    'LNK_IMPORT_LEADS' => 'Importēt interesentus',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modulis, kurā izveidot jaunu ierakstu',
    'LBL_REQUIRED_TIP' => 'Pirms Interesents var tikt konvertēts jābūt izveidotam vai atlasītam modulim.',
    'LBL_COPY_TIP' => 'Ja atzīmēts, lauki no interesenta tiks kopēti uz laukiem ar tādu pašu nosaukumu jaunizveidotajos ierakstos.',
    'LBL_SELECTION_TIP' => 'Moduļi ar saistīto lauku Kontaktpersonu modulī var tikt atlasīti nevis izveidoti interesentu konvertēšanas procesā.',
    'LBL_EDIT_TIP' => 'Modificēt konvertēšanas izkārtojumu šim modulim.',
    'LBL_DELETE_TIP' => 'Izņemt šo moduli no konvertēšanas izkārtojuma.',

    'LBL_ACTIVITIES_MOVE' => 'Pārvietot darbības uz',
    'LBL_ACTIVITIES_COPY' => 'Kopēt darbības uz',
    'LBL_ACTIVITIES_MOVE_HELP' => "Norādiet ierakstu uz kuru pārvietot interesenta darbības. Uzdevumi, zvani, tikšanās, piezīmes un e-pasti tiks pārvietoti uz atzīmētajiem ierakstiem.",
    'LBL_ACTIVITIES_COPY_HELP' => "Norādiet ierakstu(-us), kuriem veidot kopijas no interesenta darbībām. Jauni uzdevumi, zvani, tikšanās un piezīmes tiks veidotas katram no atzīmētiem  ierakstiem. E-pasti tiks sasaistīti ar atzīmēto(-ajiem) ierakstu(-iem)",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampaņas ID',
    'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Ievades datums' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Ielāde' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Rediģēt' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Notikumi',
);
