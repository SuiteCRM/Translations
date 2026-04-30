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
    'LBL_MODULE_NAME' => 'Targety',
    'LBL_MODULE_ID' => 'Targety',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_MODULE_TITLE' => 'Docelowi odbiorcy: Strona główna',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie docelowego odbiorcy',
    'LBL_LIST_FORM_TITLE' => 'Grupy docelowe',
    'LBL_NEW_FORM_TITLE' => 'Utwórz docelowego odbiorcę',
    'LBL_LIST_NAME' => 'Nazwa dokument',
    'LBL_LIST_LAST_NAME' => 'Nazwisko',
    'LBL_LIST_TITLE' => 'Stanowisko',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Imię',
    'LBL_ASSIGNED_TO_NAME' => 'Przypisany Do',
    'LBL_ASSIGNED_TO_ID' => 'Przypisane do:',
    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej',
    'LBL_EXISTING_ACCOUNT' => 'Użyto istniejącego kontrahenta',
    'LBL_CREATED_ACCOUNT' => 'Utworzono nowego kontrahenta',
    'LBL_CREATED_CALL' => 'Utworzono nową rozmowę telefoniczną',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_NAME' => 'Nazwa:',
    'LBL_PROSPECT_INFORMATION' => 'Przegląd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Inny telefon:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternate Address Street:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_TITLE' => 'Stanowisko:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'Adres e-mail:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Dodatkowy adres e-mail:',
    'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_CITY' => 'Miasto:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_ADDRESS_INFORMATION' => 'Informacja adresowa',
    'LBL_DESCRIPTION' => 'Opis: ',
    'LBL_OPP_NAME' => 'Nazwa szansy sprzedaży:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Możliwa duplikaty docelowych odbiorców',
    'MSG_SHOW_DUPLICATES' => 'Docelowy odbiorca o podobnych dany już istnieje w systemie. Lista z podobnymi danymi znajduje się poniżej.<br>Kliknij przycisk Zapisz, aby kontynuować tworzenie nowego Docelowego odbiorcy, lub przycisk Anuluj aby przerwać tworzenie.',
    'MSG_DUPLICATE' => 'Docelowy odbiorca o podobnych dany już istnieje w systemie. Lista z podobnymi danymi znajduje się poniżej.<br>Kliknij przycisk Zapisz, aby kontynuować tworzenie, lub przycisk Anuluj lub przycisk Anuluj aby przerwać tworzenie.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'Utwórz Kontrahenta',
    'LNK_NEW_OPPORTUNITY' => 'Utwórz Szanse Sprzedaży',
    'LNK_NEW_CASE' => 'Utwórz sprawę',
    'LNK_NEW_NOTE' => 'Utwórz notatkę lub załącznik',
    'LNK_NEW_CALL' => 'Utwórz Rozmowę telefoniczną',
    'LNK_NEW_EMAIL' => 'Archiwum email',
    'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
    'LNK_NEW_TASK' => 'Utwórz zadanie',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_IMPORT_PROSPECTS' => 'Importuj docelowych odbiorców',
    'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten wpis?',
    'NTC_SNOOZE_CONFIRMATION' => 'Czy na pewno chcesz wyciszyć?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'ERR_DELETE_RECORD' => 'Aby usunąć Kontakt musisz określić numer wpisu.',
    'LBL_SALUTATION' => 'Zwrot grzecznościowy',
    'LBL_CREATED_OPPORTUNITY' => 'Utworzono nowe Szanse Sprzedaży',
    'LNK_SELECT_ACCOUNT' => "Wybierz kontrahenta",
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'Przeglądaj docelowych odbiorców',
    'LNK_NEW_CAMPAIGN' => 'Utwórz kampanię reklamową',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LNK_NEW_PROSPECT_LIST' => 'Utwórz grupę docelowych odbiorców',
    'LNK_PROSPECT_LIST_LIST' => 'Lista docelowych odbiorców',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczonych docelowych odbiorców',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Niepoprawny adres email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Targety',
    'LBL_PROSPECT_LIST' => 'Grupy docelowe',
    'LBL_CONVERT_BUTTON_TITLE' => 'Konwertuj docelowych odbiorców',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Created a new contact",
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaign Log',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'ID Potencjalnego Klienta',
    'LBL_CONVERTED_LEAD' => 'Przekonwertowani potencjalni klienci',
    'LBL_ACCOUNT_NAME' => 'Nazwa kontrahenta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nazwa kontrahenta:',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Wydarzenia',
);
