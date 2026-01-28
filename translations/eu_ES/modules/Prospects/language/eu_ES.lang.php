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
    'LBL_MODULE_NAME' => 'Helburu den publikoa ',
    'LBL_MODULE_ID' => 'Helburu den publikoa ',
    'LBL_INVITEE' => 'Jakinaren gainean ipini',
    'LBL_MODULE_TITLE' => 'Helburu den publikoa: hasiera',
    'LBL_SEARCH_FORM_TITLE' => 'Helburu den publikoaren bilaketa',
    'LBL_LIST_FORM_TITLE' => 'Helburu den publikoaren zerrenda',
    'LBL_NEW_FORM_TITLE' => 'Helburu den publiko berria',
    'LBL_LIST_NAME' => 'Izena',
    'LBL_LIST_LAST_NAME' => 'Abizena',
    'LBL_LIST_TITLE' => 'Lanpostua',
    'LBL_LIST_EMAIL_ADDRESS' => 'Posta elektronikoak',
    'LBL_LIST_PHONE' => 'Telefonoa',
    'LBL_LIST_FIRST_NAME' => 'Izena',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_ASSIGNED_TO_ID' => 'Esleitua izan da',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Badagoen kontu bat erabili da',
    'LBL_CREATED_ACCOUNT' => 'Sortutako kontu berria',
    'LBL_CREATED_CALL' => 'Sortutako dei berria',
    'LBL_CREATED_MEETING' => 'Sortutako bilera berria',
    'LBL_NAME' => 'Izena',
    'LBL_PROSPECT_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Informazio gehiago',
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_OFFICE_PHONE' => 'Bulegoko tel.',
    'LBL_ANY_PHONE' => 'Edozein telefono',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_MOBILE_PHONE' => 'Mugikorra',
    'LBL_HOME_PHONE' => 'Etxea',
    'LBL_OTHER_PHONE' => 'Hautazko Tel.',
    'LBL_FAX_PHONE' => 'Faxa',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Helbide nagusiaren kalea:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Helbide nagusiaren hiria',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Helbide nagusiaren herrialdea',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Helbide nagusiaren eskualdea/estatua',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Helbide nagusiaren PK',
    'LBL_ALT_ADDRESS_STREET' => 'Hautazko helbidearen kalea',
    'LBL_ALT_ADDRESS_CITY' => 'Hautazko helbidearen hiria',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Hautazko helbidearen herrialdea',
    'LBL_ALT_ADDRESS_STATE' => 'Hautazko helbidearen eskualdea/estatua',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Hautazko helbidearen PK',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Saila',
    'LBL_BIRTHDATE' => 'Jaiotze-data',
    'LBL_EMAIL_ADDRESS' => 'Helbide elektronikoa',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ordezko helbide elektronikoa',
    'LBL_ANY_EMAIL' => 'Edozein helbide elektroniko',
    'LBL_ASSISTANT' => 'Laguntzailea',
    'LBL_ASSISTANT_PHONE' => 'Laguntzailearen telefonoa',
    'LBL_DO_NOT_CALL' => 'Ez deitu',
    'LBL_EMAIL_OPT_OUT' => 'Irteera-posta elektronikoa',
    'LBL_PRIMARY_ADDRESS' => 'Helbide nagusia',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Edozein helbide:',
    'LBL_CITY' => 'Hiria',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'PK',
    'LBL_COUNTRY' => 'Herrialdea',
    'LBL_ADDRESS_INFORMATION' => 'Helbidearen informazioa',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_OPP_NAME' => 'Aukera-izena',
    'LBL_IMPORT_VCARD' => 'vCard-a inportatu',
    'LBL_IMPORT_VCARDTEXT' => 'Kontaktu berri bat  sortu automatikoki vCard bat inportatuz',
    'LBL_DUPLICATE' => 'Helburu den publiko bikoiztua egon daiteke',
    'MSG_SHOW_DUPLICATES' => 'Kontaktu honen sorrerak bikoiztu bat sor lezake. Helburu den publikoan klik egin aurretik sartutako datuak erabiliz kontaktu berri baten sorrerarekin jarraitzeko edo egin klik Ezeztatu-n',
    'MSG_DUPLICATE' => 'Kontaktu honen sorrerak bikoiztu bat sor lezake. Beheko zerrendatik kontaktu bat aukeratu dezakezu edo Helburu den publikoan klik egin aurretik sartutako datuak erabiliz kontaktu berri bat sortzeko',
    'LNK_IMPORT_VCARD' => 'vCard-etik sortu',
    'LNK_NEW_ACCOUNT' => 'Kontua sortu',
    'LNK_NEW_OPPORTUNITY' => 'Aukera sortu',
    'LNK_NEW_CASE' => 'Kasua sortu',
    'LNK_NEW_NOTE' => 'Oharra edo eranskina sortu',
    'LNK_NEW_CALL' => 'Deia planifikatu',
    'LNK_NEW_EMAIL' => 'Posta elektronikoa artxibatu',
    'LNK_NEW_MEETING' => 'Bilera planifikatu',
    'LNK_NEW_TASK' => 'Ataza berria',
    'LNK_NEW_APPOINTMENT' => 'Deien programazioa',
    'LNK_IMPORT_PROSPECTS' => 'Helburu den publikoa  inportatu',
    'NTC_DELETE_CONFIRMATION' => 'Ziur zaude erregistroa hau ezabatu nahi duzula?',
    'NTC_REMOVE_CONFIRMATION' => 'Ziur zaude kontaktu hau kasu honetatik kendu nahi duzula?',
    'ERR_DELETE_RECORD' => 'Erregistro zenbaki bat hautatu behar duzu kontaktua ezabatzeko',
    'LBL_SALUTATION' => 'Agurra',
    'LBL_CREATED_OPPORTUNITY' => 'Aukera berri bat sortu',
    'LNK_SELECT_ACCOUNT' => "Kontua aukeratu",
    'LNK_NEW_PROSPECT' => 'Helburu den publikoa sortu',
    'LNK_PROSPECT_LIST' => 'Helburu den publikoa',
    'LNK_NEW_CAMPAIGN' => 'Kanpaina sortu',
    'LNK_CAMPAIGN_LIST' => 'Kanpainak',
    'LNK_NEW_PROSPECT_LIST' => 'Helburu den publikoaren zerrenda sortu',
    'LNK_PROSPECT_LIST_LIST' => 'Helburu den publikoaren zerrendak',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Aukeratu markatutako helburu den publikoa',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Aukeratu markatutako helburu den publikoa',
    'LBL_INVALID_EMAIL' => 'Baliozkoa ez den helbide elektronikoa',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Helburu den publikoa ',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CONVERT_BUTTON_TITLE' => 'Helburu den publikoa bihurtu',
    'LBL_CONVERT_BUTTON_LABEL' => 'Helburu den publikoa bihurtu',
    'LNK_NEW_CONTACT' => 'Kontaktu berria',
    'LBL_CREATED_CONTACT' => "Kontaktu berri bat sortu da",
    'LBL_CAMPAIGNS' => 'Kanpainak',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kanpainen erregistroa',
    'LBL_TRACKER_KEY' => 'Jarraipen-gakoa',
    'LBL_LEAD_ID' => 'Hautagaiaren ID',
    'LBL_CONVERTED_LEAD' => 'Bihurtutako hautagaia',
    'LBL_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_EDIT_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_CREATED_USER' => 'Erabiltzaileak sortua',
    'LBL_MODIFIED_USER' => 'Erabiltzaileak aldatua',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
