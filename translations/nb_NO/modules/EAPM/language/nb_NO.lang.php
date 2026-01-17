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
    'LBL_ASSIGNED_TO_ID' => 'Tilordnet brukerID',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM-bruker',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_MODIFIED' => 'Endret av',
    'LBL_MODIFIED_NAME' => 'Endret av navn',
    'LBL_CREATED' => 'Opprettet av',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NAME' => 'App Brukernavn',
    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_MODIFIED_USER' => 'Endret bruker',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_FORM_TITLE' => 'Ekstern konto liste',
    'LBL_MODULE_NAME' => 'Ekstern konto',
    'LBL_MODULE_TITLE' => 'Eksterne konto',
    'LBL_HOMEPAGE_TITLE' => 'Mine eksterne konto',
    'LNK_NEW_RECORD' => 'Opprett ekstern konto',
    'LNK_LIST' => 'Se eksterne konto',
    'LBL_SEARCH_FORM_TITLE' => 'Søk ekstern kilde',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Se på historikk',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Ny ekstern konto',
    'LBL_PASSWORD' => 'App passord',
    'LBL_USER_NAME' => 'App Brukernavn',
    'LBL_URL' => 'URL:',
    'LBL_APPLICATION' => 'Applikasjon',
    'LBL_API_DATA' => 'API-data',
    'LBL_API_CONSKEY' => 'Konsument nøkkel',
    'LBL_API_CONSSECRET' => 'Konsument hemmelighet',
    'LBL_API_OAUTHTOKEN' => 'OAuthsymbol',
    'LBL_AUTH_UNSUPPORTED' => "Denne fullmakts-metoden er ikke støttet av programmet",
    'LBL_AUTH_ERROR' => 'Forsøk på å godkjenne den eksterne kontoen mislyktes.',
    'LBL_VALIDATED' => 'Access validert',
    'LBL_ACTIVE' => 'Aktiv',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Koble til',
    'LBL_NOTE' => 'Legg merge ti',
    'LBL_CONNECTED' => 'Access validert',

    'LBL_ERR_NO_AUTHINFO' => 'Det er ingen authentication informasjon for denne kontoen.',
    'LBL_ERR_NO_TOKEN' => 'Det er ingen gyldig brukernavn tegn for denne kontoen.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Du er ikke logget inn på din {0}-konto. Klikk OK for å re-logge på kontoen din og aktivere den eksterne konto-posten.',

    'LBL_CLICK_TO_EDIT' => 'Klikk for å redigere',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Regodkjenne',
    'LBL_APPLICATION_FOUND_NOTICE' => 'En konto for denne applikasjonen finnes allerede. Vi har gjenopprettet den eksisterende kontoen.',
    'LBL_OMIT_URL' => '(Utelat http:// eller https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Klikk på <b>Koble til</b> for å bli videresendt til en side hvor du kan oppgi din kontoinformasjon og tillate at SuiteCRM bruker kontoen din. Etter du har koblet til, vil du bli sendt tilbake til SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Klikk <b>Koble til</b> for å koble denne kontoen til SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
