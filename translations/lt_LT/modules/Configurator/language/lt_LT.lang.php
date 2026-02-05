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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Išplėstinis',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valiutos kodas',
    'DEFAULT_CURRENCY_NAME' => 'Valiutos pavadinimas',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valiutos simbolis',
    'DEFAULT_DATE_FORMAT' => 'Numatytasis datos formatas',
    'DEFAULT_DECIMAL_SEP' => 'Dešimtainis simbolis',
    'DEFAULT_LANGUAGE' => 'Kalba pagal nutylėjimą',
    'DEFAULT_SYSTEM_SETTINGS' => 'Vartotojų valdymas',
    'DEFAULT_THEME' => 'Tematika pagal nutylėjimą',
    'DEFAULT_TIME_FORMAT' => 'Laiko formatas pagal nutylėjimą',

    'DISPLAY_RESPONSE_TIME' => 'Rodyti serverio atsakymo laikus',

    'IMAGES' => 'Firmos logotipas',
    'LBL_ALLOW_USER_TABS' => 'Leisti vartotojams paslėpti korteles',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistemos nustatymai',
    'LBL_LOGVIEW' => 'Nustatyti įrašų parametrus',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Naudoti SMTP identifikaciją?',
    'LBL_MAIL_SMTPPASS' => 'SMTP slaptažodis:',
    'LBL_MAIL_SMTPPORT' => 'SMTP portas:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP serveris:',
    'LBL_MAIL_SMTPUSER' => 'SMTP vartotojo vardas:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP serverio specifikacijos',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pasirinkite pašto tiekėją:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! pašto slaptažodis:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! pašto ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail slaptažodis:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail pašto adresas:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange slaptažodis:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange vartotojo vardas:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange serverio portas:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange serveris:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Leisti vartotojams išsiųsti el. laiškus pasinaudojant šios pašto dėžutės prisijungimu:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kai pažymėtas šis pasirinkimas, visi vartotojai galės siųsti elektroninius laiškus naudojant tą pačią siunčiamų laiškų paskyrą, naudojamą siųsti sistemos pranešimus ir perspėjimus. Jei parinktis nėra pasirinkta, vartotojai gali naudoti atskirai sukonfigūruotą pašto serverį.',
    'LBL_MAILMERGE' => 'El. paštas apjungiamas',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalus panelio atsinaujinimo intervalas',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Tai yra minimali panelio atsinaujinimo reikšmė. Pasirinkus "Niekada" panelio automatinis atsinaujinimas bus išjungtas.',
    'LBL_MODULE_FAVICON' => 'Rodyti modulio ikoną kaip favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Jei esate modulyje su piktograma, modulis, naudoti modulį piktogramą kaip favicon, o ne tema kaip favicon, naršyklės skirtuko.',
    'LBL_MODULE_NAME' => 'Sistemos nustatymai',
    'LBL_MODULE_ID' => 'Konfigūravimas',
    'LBL_MODULE_TITLE' => 'Vartotojų valdymas',
    'LBL_NOTIFY_FROMADDRESS' => 'Siuntėjo adresas:',
    'LBL_NOTIFY_SUBJECT' => 'El. laiško tema:',

    'LBL_PROXY_AUTH' => 'Identifikacija?',
    'LBL_PROXY_HOST' => 'Proxy serveris',
    'LBL_PROXY_ON_DESC' => 'Nustatyti proxy serverio adresą ir identifikavimo nustatymus',
    'LBL_PROXY_ON' => 'Naudoti proxy serverį?',
    'LBL_PROXY_PASSWORD' => 'SMTP slaptažodis:',
    'LBL_PROXY_PORT' => 'Portas',
    'LBL_PROXY_TITLE' => 'Proxy nustatymai',
    'LBL_PROXY_USERNAME' => 'Vartotojas vardas',
    'LBL_RESTORE_BUTTON_LABEL' => 'Atstatyti',
    'LBL_SYSTEM_SETTINGS' => 'Sistemos nustatymai',
    'LBL_USE_REAL_NAMES' => 'Rodyti pilną vardą',
    'LBL_USE_REAL_NAMES_DESC' => 'Rodyti vartotojų pilnus vardus vietoj prisijungimų vardų.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Išjungti potencialių klientų konvertavima, jau konvertuotiems',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Jei potencialus klientai jau konvertuoti, įgalindami šią opciją pašalins klientu konvertavimo veiksmą.',
    'LBL_ENABLE_ACTION_MENU' => 'Rodyti veiksmus su meniu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Pasirinkite Rodyti Išsami peržiūra ir subpanele veiksmus per išskleidžiama meniu. Jei nepažymėti, veiksmai bus rodoma kaip atskiri mygtukai.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Maksimalus atvaizduojamų elementų kiekis sąraše',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Maksimalus atvaizduojamų elementų kiekis subpanelyje',
    'LOG_MEMORY_USAGE' => 'Sekti atminties vartojimą',
    'LOG_SLOW_QUERIES' => 'Sekti lėtas užklausas',
    'CURRENT_LOGO' => 'Dabartinis logotipas',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Užkrauti naujos firmos ženklą (212x40)',
    'NEW_LOGO_HELP' => 'Vaizdo failo formatas gali būti .jpg arba .png. Didžiausias aukštis yra 170px, o didžiausias plotis 450px. Bet vaizdas įkeltas didesnio bet kuria kryptimi bus sumažintas šių max matmenų. Vaizdo failo varde negali būti tarpas.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Vaizdo failo formatas gali būti .jpg arba .png. Didžiausias aukštis yra 170px, o didžiausias plotis 450px. Bet vaizdas įkeltas didesnio bet kuria kryptimi bus sumažintas šių max matmenų. Vaizdo failo varde negali būti tarpas.',
    'SLOW_QUERY_TIME_MSEC' => 'Lėtų užklausų laiko trukmė (msek)',
    'STACK_TRACE_ERRORS' => 'Rodyti stack trace klaidas',
    'UPLOAD_MAX_SIZE' => 'Maksimalus užkraunamo failo dydis',
    'VERIFY_CLIENT_IP' => 'Validuoti vartotojų IP adresus',
    'LOCK_HOMEPAGE' => 'Neleisti vartotojui keisti savo pradinio puslapio išdėstymo',
    'LOCK_SUBPANELS' => 'Neleisti vartotojui keisti subpanelių išdėstymo',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Sistemos pavadinimas:',
    'SYSTEM_NAME_WIZARD' => 'Vardas:',
    'SYSTEM_NAME_HELP' => 'Šis pavadinimas matysis Jūsų Interneto naršyklės antraštės pavadinime.',
    'LBL_LDAP_TITLE' => 'LDAP autentifikavimo palaikymas',
    'LBL_LDAP_ENABLE' => 'Šalinti LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serveris:',
    'LBL_LDAP_SERVER_PORT' => 'Porto numeris:',
    'LBL_LDAP_ADMIN_USER' => 'Vartotojo vardas:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Identifikuojamas slaptažodis',
    'LBL_LDAP_AUTHENTICATION' => 'Identifikacija:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatiškai sukurti vartotojus:',
    'LBL_LDAP_USER_DN' => 'Vartotojo DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupės DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Pavyzdys: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Vartotojo filtras:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Priklauso grupei:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Vartotojas turi priklausyti grupei',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Vartotojo atributas:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Unikalus identifikatorius, kuris patikrina ar vartotojas priklauso atitinkamai grupei, pavyzdžiui: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Grupės atributas, kuris naudojamas išfiltruoti vartotojo atributą, pavz: vartotojoUid',
    'LBL_LDAP_GROUP_ATTR' => 'Grupės atributas:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Prisijungimo savybė',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind savybė',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Pavyzdys: ldap.example.com arba ldaps://ldap.example.com jei SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Grupės pavadinimas:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Pavyzdys: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Jei identifikuotas vartotojas neegzistuoja, jis bus sukurtas SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Užkodavimo raktas:',
    'DEVELOPER_MODE' => 'Kūrėjo rėžimas',

    'SHOW_DOWNLOADS_TAB' => 'Rodyti parsisiuntimų kortelę',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'SOAP autentifikacijai kai naudojamas ldap.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt plėtiniui turi būti įjungta php.ini failas.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Visi susiję',
    'LBL_MARK_POINT' => 'Pažymėjimo taškas',
    'LBL_NEXT_' => 'Toliau>>',
    'LBL_REFRESH_FROM_MARK' => 'Atnaujinti nuo pažymėjimo',
    'LBL_SEARCH' => 'Ieškoti:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignoruoti patį',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Žymima nuo kur pradėti registruoti',
    'LBL_DISPLAYING_LOG' => 'Rodyti logotipą',
    'LBL_YOUR_PROCESS_ID' => 'Proceso ID',
    'LBL_YOUR_IP_ADDRESS' => 'Jūsų IP adresas yra',
    'LBL_IT_WILL_BE_IGNORED' => 'Bus ignoruojama',
    'LBL_LOG_NOT_CHANGED' => 'Registravimo failas nepasikeitė',
    'LBL_ALERT_JPG_IMAGE' => 'Paveiksliuko failo formatas turi būti JPEG.  Išsiųsk naują failą pabaiga .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Paveiksliuko failo formatas turi būti JPEG arba PNG.  Išsiųsk naują failą su pabaiga .jpg arba .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Paveiksliuko dydis turi būti santykiu tarp  1:1 ir 10:1.  Paveiksliukas bus pertvarkytas.',
    'ERR_ALERT_FILE_UPLOAD' => 'Klaida siunčiant paveiksliuką',
    'LBL_LOGGER' => 'Registravimo nustatymai',
    'LBL_LOGGER_FILENAME' => 'Registravimo failo vardas',
    'LBL_LOGGER_FILE_EXTENSION' => 'Plėtinys',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimalus registravimo failo dydis',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Numatytasis datos formatas',
    'LBL_LOGGER_LOG_LEVEL' => 'Istorijos kaupimo lygis',
    'LBL_LEAD_CONV_OPTION' => 'Sukelti Konvertavimo pasirinktis',
    'LEAD_CONV_OPT_HELP' => "<b>Kopija</b> - sukuria ir kopijas visoms galimo kliento veiklą su naujų įrašų, kurias pasirenka vartotojas konvertavimo metu. Kopijos sukuriamos kiekvienos pažymėtus įrašus. <br><br><b>Perkelti</b> - juda visi galimo kliento veiklos iki rekordinių pasirinkto vartotojo konvertuojant. <br> <br>, <b>Nieko nedaryti</b> - nieko su galimo kliento veikla nedaro konvertavimo metu. Veiklos lieka susijusios sukeltos tik.",
    'LBL_CONFIG_AJAX' => 'Konfigūruoti AJAX vartotojo sąsaja',
    'LBL_CONFIG_AJAX_DESC' => 'Įgalinti arba uždrausti naudoti AJAX UI  konkretiems moduliams.',
    'LBL_LOGGER_MAX_LOGS' => 'Maksimalus log failų skaičius',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Pridėti prie failo pavadinimo',
    'LBL_VCAL_PERIOD' => 'vCal atnaujimo laiko periodas:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importo - maksimalus eilučių skaičius:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Nurodyti, kaip daug eilučių yra leidžiama importuoti failus.<br>Jei eilučių skaicius importuojamo failo eilučių skaičius viršija šį skaičių, įspėti vartotoją.<br>Jei nėra numerio yra įvesta, leidžiama neribotą skaičių eilučių.',
    'vCAL_HELP' => 'Naudoti šį nustatymą, kad nurodyti kiek mėnesių į priekį bus rodoma darbuotojo užimtumo informacija susijusi su skambučiais ir susitikimais.</BR>jei norite visai užimtumo paskelbimą, įveskite "0".  Minimalus yra 1 mėnesis; maksimalus 12 mėnesių.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Administratoriaus vedlys',
    'LBL_WIZARD_WELCOME_TAB' => 'Sveiki atvykę',
    'LBL_WIZARD_WELCOME_TITLE' => 'Sveiki atvykę į SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Toliau >',
    'LBL_WIZARD_BACK_BUTTON' => '< Atgal',
    'LBL_WIZARD_SKIP_BUTTON' => 'Praleisti',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Tęsti',
    'LBL_WIZARD_FINISH_TITLE' => 'Bazinė sistemos konfigūracija baigta',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Firmos vardas',
    'LBL_WIZARD_SYSTEM_DESC' => 'Pateikite savo organizacijos pavadinimą ir logotipą.',
    'LBL_WIZARD_LOCALE_DESC' => 'Nurodykite kaip norėtumėte matyti duomenų formatus pagal vietovę. Pateikti nustatymai bus pateikti kaip standartiniai.',
    'LBL_WIZARD_SMTP_DESC' => 'Pateikite el. pašto adresą, kuris bus naudojamas siunčiant užduočių priskirimus ar naujai sugeneruotą slaptažodį.',
    'LBL_LOADING' => 'Kraunasi...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ištrinti' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Sveiki atvykę' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logotipas' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Rodyti susijusių kontaktų el. laiškų istoriją per modulių subpanelę',
);
