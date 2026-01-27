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
    'ADVANCED' => 'Ang advans',
    'DEFAULT_CURRENCY_ISO4217' => 'Ang currency code ng ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Ang pangalan ng salapi',
    'DEFAULT_CURRENCY_SYMBOL' => 'Ang simbolo ng salapi',
    'DEFAULT_DATE_FORMAT' => 'Ang default na pormat ng petsa',
    'DEFAULT_DECIMAL_SEP' => 'Ang desimal ng symbolo',
    'DEFAULT_LANGUAGE' => 'I-default ang lingwahe',
    'DEFAULT_SYSTEM_SETTINGS' => 'Ang interface ng user',
    'DEFAULT_THEME' => 'I-default ang tema',
    'DEFAULT_TIME_FORMAT' => 'I-default ang pormat ng oras',

    'DISPLAY_RESPONSE_TIME' => 'Ipakita ang oras ng pagtugon ng serber',

    'IMAGES' => 'Ang mga logo',
    'LBL_ALLOW_USER_TABS' => 'Payagan ang mga gumagamit na hindi ipakita ang mga tabs',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ang setting ng system',
    'LBL_LOGVIEW' => 'Tingnan ang Log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gumamit ng SMTP bilang pagpapatunay?',
    'LBL_MAIL_SMTPPASS' => 'Ang Password ng SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Ang Port ng SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Ang Serber ng SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Ang pangalan ng gumagamit ng SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Ang Espisipikasyon ng Serber ng SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pumili ng Tagapagtustos ng iyong Email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Ang Password para sa Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Ang ID para sa Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Ang Password para sa Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Ang Email Address ng Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Palitan ang Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Palitan ang Pangalan ng Gumagamit:',
    'LBL_EXCHANGE_SMTPPORT' => 'Palitan ang Serber ng Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Palitan ang Serber:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pahintulotan ang mga gumagamit para gamitin ang account na ito para sa papalabas na email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kapag napili ang opsyon na ito, ang lahat ng mga gumagamit ay pwedeng makapagpadala ng mga email gamit ang parehong papalabas na mail account na ginagamit para makapagpadala ng mga notipikasyon at mga alerto. Kung ang opsyon naman ay hindi pinili, ang mga gumagamit ay pwede paring gumamit ng serber para sa papalabas na mail pagkatapos maglahad ng sariling impormasyon sa account.',
    'LBL_MAILMERGE' => 'Pagsamahin ang mail',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Ang Interbal para sa Dashlet Auto-Refresh',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ito ang minimum na halaga na maaaring pumili ang sinuman para magkaroon ng dashlets auto-refresh. Magtakda ng \'Never\' na i-disable ang auto-refreshing ng mga dashlets sa kabuuhan.',
    'LBL_MODULE_FAVICON' => 'Ipakita ang aykon ng modyul bilang favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Kapag ikaw ay nasa modyul na may aykon, gamitin ang aykon ng mga modyul bilang favicon, sa halip na theme\'s favicon, sa browser ng tab.',
    'LBL_MODULE_NAME' => 'Ang setting ng system',
    'LBL_MODULE_ID' => 'Ang tagapag-configure',
    'LBL_MODULE_TITLE' => 'Ang interface ng user',
    'LBL_NOTIFY_FROMADDRESS' => '"Mula sa" Lugar:',
    'LBL_NOTIFY_SUBJECT' => 'Ang paksa ng email:',

    'LBL_PROXY_AUTH' => 'Ang Pagpapatunay?',
    'LBL_PROXY_HOST' => 'Ang Host ng Proxy',
    'LBL_PROXY_ON_DESC' => 'I-configure ang address ng proxy server at ang pagpapatunay sa mga settings',
    'LBL_PROXY_ON' => 'Gamitin ang serber na proxy?',
    'LBL_PROXY_PASSWORD' => 'Ang Password',
    'LBL_PROXY_PORT' => 'Ang port',
    'LBL_PROXY_TITLE' => 'Ang mga setting ng proxy',
    'LBL_PROXY_USERNAME' => 'Ang Pangalan ng Gumagamit',
    'LBL_RESTORE_BUTTON_LABEL' => 'Ibalik sa dati',
    'LBL_SYSTEM_SETTINGS' => 'Ang setting ng system',
    'LBL_USE_REAL_NAMES' => 'Ipakita ang kabuohang pangalan',
    'LBL_USE_REAL_NAMES_DESC' => 'Ipakita ang kabuohang pangalan ng mga gumagamit sa halip na User Names lang ang nakikita sa field na tinatalaga.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Huwag paganahin ang aksyon sa pag-convert ng lead para sa mga nai-convert na mga lead',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Kapag ang lead ay tapos nang nai-convert, ang pagpapagana ng opsyon na ito ay maaaring makapatanggal ng aksyon sa pag-convert ng lead.',
    'LBL_ENABLE_ACTION_MENU' => 'Ipakita ang mga aksyon sa loob ng mga pagpipilian',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Piliin para ipakita ang DetailView at ang aksyon ng subpanel sa loob ng mga pagpipilian sa dropdown. Kapag hindi napili, ang mga aksyon ay magpapakita ng hiwalay na mga pindutan.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Paganahin sa tanawan ng listahan ang pag-eedit na inline',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Piliin para mapagana sa tanawan ng listahan ang Inline na Pag-eedit para sa field. Kapag hindi pinili ang Inline na Pag-eedit ay hindi ito mapagana sa tanawan ng listahan.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Paganahin ang pag-eedit na inline sa tanawan ng mga detalye',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Piliin para mapagana sa tanawan ng detalye ang Inline na Pag-eedit para sa field. Kapag hindi pinili ang Inline na Pag-eedit ay hindi ito maipakita o makikita sa tanawan ng detalye.',
    'LBL_HIDE_SUBPANELS' => 'Na-kulaps na mga subpanel',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Ang tanawan ng listahan ng mga aytem bawat pahina',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Ang mga aytem ng subpanel bawat pahina',
    'LOG_MEMORY_USAGE' => 'Ipakita ang estado ng paggamit ng memorya',
    'LOG_SLOW_QUERIES' => 'I-log ang mabagal na mga katanungan',
    'CURRENT_LOGO' => 'Ang kasalukuyang Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Pumili ng logo:',
    'NEW_LOGO_HELP' => 'Ang pormat ng file ng imahe ay maaaring .png o kaya .jpg. Ang pinakamataas na tangkad ay 170px, at ang pinakamataas na lapad ay 450px. Ang kahit anong imahe na mai-upload na mas malaki sa kahit anong direksyon ay pwedeng paliitin sa max na dimensyon.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Ang pormat ng file ng imahe ay maaaring .png o kaya .jpg. Ang pinakamataas na tangkad ay 170px, at ang pinakamataas na lapad ay 450px. Ang kahit anong imahe na mai-upload na mas malaki sa kahit anong direksyon ay pwedeng paliitin sa max na dimensyon.',
    'SLOW_QUERY_TIME_MSEC' => 'Mabagal and umpisa ng oras ng tanong (msec)',
    'STACK_TRACE_ERRORS' => 'I-displey ang Pagtunton ng stack ng mga kamalian',
    'UPLOAD_MAX_SIZE' => 'Pinakamataas na sukat ng pag-upload',
    'VERIFY_CLIENT_IP' => 'I-validate ang IP address ng user',
    'LOCK_HOMEPAGE' => 'Iwasan ang napapasadyang layout ng Homepage ng user',
    'LOCK_SUBPANELS' => 'Iwasan ang napapasadyang layout ng subpanel ng user',
    'MAX_DASHLETS' => 'Pinakamataas na numero ng mga Dashlet ng SuiteCRM sa Homepage',
    'SYSTEM_NAME' => 'Pangalan ng Sistema:',
    'SYSTEM_NAME_WIZARD' => 'Pangalan:',
    'SYSTEM_NAME_HELP' => 'Ito ang pangalan na naka-display sa bar ng pamagat ng iyung browser.',
    'LBL_LDAP_TITLE' => 'Suporta ng Pagpapatunay ng LDAP',
    'LBL_LDAP_ENABLE' => 'Paganahin ang LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Numero ng Port:',
    'LBL_LDAP_ADMIN_USER' => 'Pangalan ng User:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Ginagamit para hanapin ang LDAP user. Kinakailangan itong lubos na makwalipikado.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Pagpapatunay:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'I-bind sa LDAP server gamit ang partikular sa mga credential ng mga user. Ito ay iba-bind ng walang pagpapakilala kung walang ibibigay.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Awtomatikong paglika ng mga User:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupo ng DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Halimbawa: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filter ng User:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Pagiging miyembro sa grupo:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Ang mga user ay kinakailangan maging miyembro ng partikular na grupo',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Attribure ng User:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Ang natatanging pagtukoy sa tao na gagamit upang i-check kung miyembro ba sila ng grupo Halimbawa: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Ang attribute ng Grupo na gagamit para sa pag-filter laban sa mga Attribute ng User Halimbawa: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Attribute ng Grupo:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Anumang karagdagang params ng filter ay i-aplay kapag nag papatunay ng mga user e.g<em>is_suitecrm_user=1 o (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Mga katangian ng pag-login:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Mga magbigkis na katangian:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Para sa umiiral na mga halimbawa ng user ng LDAP:[<b>AD:</b>&nbsp;userPrincipalName][<b>openLDAP:</b>&nbsp;dn][<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Para sa paghahanap ng mga halimbawa ng user ng LDAP:[<b>ADL</b>&nbsp;userPrincipalName][<b>openLDAP</b>&nbsp;cn][<b>Mac&nbsp;OS&nbsp;XL</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Halimbawa: Idap.example.com o Idaps://idap.example.com para sa SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Halimnbawa:<em>389 o 636 para sa SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Pangalan ng grupo:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Halimbawa<em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Halimbawa:<em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Kung hindi umiiral ang gumagamit ng authenticated, isa ay nilikha para sa SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption na susi:',
    'DEVELOPER_MODE' => 'Mode na Developer',

    'SHOW_DOWNLOADS_TAB' => 'I-Display ang tab ng mga download',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Kapag napili, Ang Download na tab ay lalabas sa mga setting ng user at mabibigay sa mga user kasama ang access sa SuiteCRM na mga plug-in at ibang magagamit na mga file',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para sa mga pagpapatunay ng SOAP kapag gumagamit ng LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Ang php_mcrypt na extension ay Kailangang magpagana sa iyung php.ini na file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Ang openssl na ekstensyon ay kailangan na pinagapagana ang iyong php.ini na payl.',
    'LBL_ALL' => 'Lahat',
    'LBL_MARK_POINT' => 'Ang Marka sa Punto',
    'LBL_NEXT_' => 'Sumusunod>>',
    'LBL_REFRESH_FROM_MARK' => 'I-refresh Mula sa Marka',
    'LBL_SEARCH' => 'Ang paghahanap:',
    'LBL_REG_EXP' => 'Ang Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ipagsawalang-bahala ang Sarili:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Ang Pagmamarka Kung Saan Magsisimula sa Pag-log Mula sa',
    'LBL_DISPLAYING_LOG' => 'Ang Pagpapakita sa Log',
    'LBL_YOUR_PROCESS_ID' => 'Ang ID na gagamitin para sa pagproseso',
    'LBL_YOUR_IP_ADDRESS' => 'Ang iyong IP Address ay',
    'LBL_IT_WILL_BE_IGNORED' => ' Ito ay maaaring mapabayaan ',
    'LBL_LOG_NOT_CHANGED' => 'Ang log ay hindi nabago',
    'LBL_ALERT_JPG_IMAGE' => 'Ang pormat ng file ng mga imahe ay dapat naka JPEG. Mag-upload ng bagong file kalakip ang ekstensyon na .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Ang pormat ng file ng mga imahe ay dapat naka JPEG o PNG. Mag-upload ng bagong file kalakip ang ekstensyon na .jpg o .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Ang aspeto ng proporsyon ng mga imahe ay dapat nasa 1:1 at 10:1. Ang sukat ng mga imahe ay maaaring mabago.',
    'ERR_ALERT_FILE_UPLOAD' => 'May error habang nag-upload ng imahe.',
    'LBL_LOGGER' => 'Ang mga Setting ng Logger',
    'LBL_LOGGER_FILENAME' => 'I-log ang Pangalan ng FIle',
    'LBL_LOGGER_FILE_EXTENSION' => 'Ang Ekstensyon',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Ang pinakamataas na sukat ng log',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Ang default na pormat ng petsa',
    'LBL_LOGGER_LOG_LEVEL' => 'Ang lebel ng log',
    'LBL_LEAD_CONV_OPTION' => 'Ang mga Opsyon sa Pag-convert ng Lead',
    'LEAD_CONV_OPT_HELP' => "<b>i-copy</b> - gumawa at iugnay ang mga kopya ng lahat ng mga aktibidad ng Lead sa bagong mga rekord na pinili ng user sa panahon ng konbersyon. Ang mga Kopya ay Nalilikha para sa bawat isa sa mga napiling mga rekord.<br><br><b>i-move</b> - igalaw lahat ng mga aktibidad ng Lead sa isang bagong rekord na napili ng user sa panahon ng konbersyon.<br><br><b>Walang gagawin</b> - walang gagawin sa mga aktibidad ng Lead sa panahon ng konbersyon. Ang mga aktibidad ay mananatiling kaugnay sa Lead lang.",
    'LBL_CONFIG_AJAX' => 'Magkumpigura ng interface na gumagamit ng AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Paganahin o wag paganahin ang paggamit ng AJAX UI para sa partikular na mga modyul.',
    'LBL_LOGGER_MAX_LOGS' => 'Pinakamataas na numero ng mga log(bago ang rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Ilakip pagkatapos ng pangalan ng file',
    'LBL_VCAL_PERIOD' => 'ang haba ng oras ng pag-update ng vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - pinakamataas na tumiro ng mga hilera:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Tukuyin kung ilang mga row ang pwede sa loob ng mga file na inimport.<br> Kung ang numbero ng mga row sa isang import na file ay sumubra sa numerong ito, ang user ay maa-alertohan.<br>kung walang numero ang ipinasok. isang walang limitasyong numero ng mga row ang pwede.',
    'vCAL_HELP' => 'Gamitim ang setting na ito upang malaman ng advance ang bilang ng mga buwan ng kasalukuyang petsa na libre/bisi na impormasyon para sa mga tawag at mga pulong ay nai-publish.<BR>Upang maging off ang paglilimbag ng libre/bisi, pumasok ng "0". Ang pinakamaliit ay 1 buwan; ang pinakamalaki ay 12 mga buwan.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Ang iyong mga Sitwasyon',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Walang naka-configure na mga sitwasyon',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Piliin kung aling mga sitwasyon ang naaangkop para sa iyong pag-install. Ang mga opsyon na ito ay maaaring mabago post-install.',

    'LBL_WIZARD_TITLE' => 'Pantas ng admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Maligayang pagdating',
    'LBL_WIZARD_WELCOME_TITLE' => 'Maligayang Pagdating sa SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'I-click ang <b>susunod</b> para mag brand, isalokal at i-kumpigura ang SuiteCRM ngayon. Kung ikaw ay naghihiling na i-kumpigura ang SuiteCRM mamaya, I-click ang <b>laktawan</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Susunod >',
    'LBL_WIZARD_BACK_BUTTON' => '< Bumalik',
    'LBL_WIZARD_SKIP_BUTTON' => 'Laktawan',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Magpatuloy',
    'LBL_WIZARD_FINISH_TITLE' => 'Ang panimulang Kumpigurasyon ng sistema ay kumpleto',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Pagtatatak',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ibigay ang pangalan ng organisasyon at logo upang mag tatak ng iyong SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Tiyakin kung paano mo gusto ipakita ang datos ng SuiteCRM, base sa heograpikal na lokasyon. Ang mga seting na iyung ibinigay dito ay magiging default na mga seting. Ang mga user ay maaring mag takda na kanilang sariling mga kagustuhan.',
    'LBL_WIZARD_SMTP_DESC' => 'Ibigay ang email account na magagamit para sa pagpapadala ng mga email, katulad ng mga notipikasyon ng tungkulin at baong mga password ng user. Ang mga user ay makakatanggap ng mga email sa SuiteCRM, gaya ng ipinasa mula sa tiyak na email account.',
    'LBL_LOADING' => 'Kumakarga...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Tanggalin' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Maligayang pagdating' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Ipakita ang may kaugnayang mga email ng kontak sa subpanel ng kasaysayan para sa mga modyul',
);
