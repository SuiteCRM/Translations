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
    'LBL_REPLY_ADDR' => '"Svara-till" Adress: ',
    'LBL_REPLY_NAME' => '"Svara-till" Namn: ',

    'LBL_MODULE_NAME' => 'E-postmarknadsföring',
    'LBL_MODULE_TITLE' => 'Marknadsföring via E-post: Hem',
    'LBL_LIST_FORM_TITLE' => 'Marknadsföring via E-post, kampanjer',
    'LBL_NAME' => 'Namn',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_FROM_ADDR' => 'Från E-post',
    'LBL_LIST_DATE_START' => 'Startdatum',
    'LBL_LIST_TEMPLATE_NAME' => 'E-postmall',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Köstatus',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Mallnamn',
    'LBL_DATE_ENTERED' => 'Skapat datum',
    'LBL_DATE_MODIFIED' => 'Ändringsdatum',
    'LBL_MODIFIED' => 'Modifierat av: ',
    'LBL_CREATED' => 'Skapat av: ',
    'LBL_MESSAGE_FOR' => 'Skicka detta meddelande till:',

    'LBL_FROM_NAME' => 'Från Namn: ',
    'LBL_FROM_ADDR' => 'Från E-postadress: ',
    'LBL_DATE_START' => 'Startdatum',
    'LBL_SEND_DATE' => 'Skickdatum',
    'LBL_SCHEDULED_START_DATE' => 'Schemalagt kördatum',
    'LBL_CHECK_DUPLICATE' => 'Dubbletthantering',
    'LBL_TIME_START' => 'Starttid',
    'LBL_START_DATE_TIME' => 'Startdatum & tid: ',
    'LBL_TEMPLATE' => 'E-postmall: ',
    'LBL_TEMPLATE_SELECTED' => 'Mall',

    'LBL_MODIFIED_BY' => 'Ändrad av: ',
    'LBL_CREATED_BY' => 'Skapad av: ',

    'LNK_NEW_CAMPAIGN' => 'Skapa kampanj',
    'LNK_CAMPAIGN_LIST' => 'Kampanjer',
    'LBL_RELATED_CAMPAIGN' => 'Relaterad kampanj',
    'LNK_NEW_PROSPECT_LIST' => 'Skapa mottagarlista',
    'LNK_PROSPECT_LIST_LIST' => 'Mottagarlistor',
    'LNK_NEW_PROSPECT' => 'Skapa mottagare',
    'LNK_PROSPECT_LIST' => 'Mottagare',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-postmarknadsföring',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Skapa',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Redigera',
    'LBL_FROM_MAILBOX' => 'Från postlåda',
    'LBL_FROM_MAILBOX_NAME' => 'Använd postlåda:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Utgående e-postkonto:',
    'LBL_FROM' => 'Från',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mottagarlistor',
    'LBL_ALL_PROSPECT_LISTS' => 'Alla objektlistor i kampanjen.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Alla objektlistor relaterade till detta meddelande.',
    'LBL_PROSPECT_LIST_NAME' => 'Namn på mottagarlista',
    'LBL_TARGET_LISTS' => 'Mottagarlista/-listor',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Riktade listor',
    'LBL_MODULE_SEND_TEST' => 'Kampanj: Skicka test',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanj: Skicka e-post',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Välj de kampanjmeddelanden som du vill testa:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Välj de kampanjmeddelanden som du vill schemalägga för utskick vid angivet startdatum och starttid:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Skicka',
    'LBL_SEND_BUTTON_LABEL' => 'Skicka',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schema',
    'LBL_ERROR_ON_MARKETING' => 'Obligatoriska fält saknas',

    'LBL_CAMPAIGN_ID' => 'Kampanj-ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID för utgående e-postkonto',
    'LBL_EMAIL_TEMPLATE' => 'E-postmall',
    'LBL_PROSPECT_LISTS' => 'Mottagarlistor',
    'LBL_OVERVIEW' => 'Grundläggande',
    'LBL_EMAIL_CONFIG' => 'E-postinställningar',
    'LBL_CONFIGS' => 'KONFIGURATIONER',
    'LBL_EMAIL' => 'E-POST',
    'LBL_BODY' => 'Brödtext',
    'LBL_MARKETING_TYPE' => 'Marknadsföringstyp',
    'LBL_SURVEY' => 'Enkät',
    'LBL_SCHEDULE' => 'Schema',
    'LBL_RESUME' => 'Återuppta',
    'LBL_PAUSE_REASON' => 'Orsak till paus',
    'LBL_DELETE_TEST_ENTRIES' => 'Ta bort testposter',
    'LBL_UNSCHEDULE' => 'Ta bort schemaläggning',
    'LBL_ABORT' => 'Avbryt',
    'LBL_USERS' => 'Användare',
    'LBL_SEND_TEST_EMAIL' => 'Skicka testmeddelande',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Välj poster med e-postadresser',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Meddelandekö',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Utskicken bearbetas i batcher. Det kan ta minuter eller timmar.',
    'LBL_TARGET_LISTS_HELP' => 'Marknadsföringsmottagare. Mottagare i kampanjens spärrlistor blockeras.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marknadsföringsprocessen startar endast när den har schemalagts.',
    'LBL_TYPE_MARKETING_HELP' => 'Mottagarna kontrolleras mot avregistrering.',
    'LBL_TYPE_LEGACY_HELP' => 'Detta är en äldre post för e-postmarknadsföring och finns av historiska dataskäl.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Mottagarna kontrolleras inte mot avregistrering.',

    'LBL_SCHEDULER_WIDGET' => 'Diagnostik för e-postmarknadsföring',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Lägg kampanjmeddelanden i kö',
    'LBL_OOTB_BOUNCE' => 'Kör nattlig hantering av studsade kampanjmeddelanden',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Skicka kampanjmeddelanden',
    'LBL_SCHEDULERS' => 'Schemaläggare',
    'LBL_INBOUND_EMAIL' => 'Inkommande e-post',

    'LBL_TRACKERS_ENABLED' => 'Spårning aktiverad',
    'LBL_TRACKER_LINKS_ENABLED' => 'Spårningslänkar aktiverade',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'När funktionen är aktiverad ersätts länkar med spårningslänkar som övervakar klick.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'När funktionen är inaktiverad ersätts inte länkar med spårningslänkar som övervakar klick.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Spårning är globalt inaktiverad. E-postvisningar och klick spåras inte.',
    'LBL_HAS_TEST_DATA' => 'Har testdata',
);
