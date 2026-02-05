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
    'ERR_NO_OPPS' => 'Lag først noen salgsmuligheter for å kunne se graf.',
    'LBL_ALL_OPPORTUNITIES' => 'Den totale verdien av alle salgsmuligheter er ',
    'LBL_CHART_TYPE' => 'Listetype:',
    'LBL_CREATED_ON' => 'Sist kjørt ',
    'LBL_CLOSE_DATE_START' => 'Forventet avslutningsdato - Fra:',
    'LBL_CLOSE_DATE_END' => 'Forventet avslutningsdato - Til:',
    'LBL_DATE_END' => 'Avslutningsdato:',
    'LBL_DATE_RANGE_TO' => 'til',
    'LBL_DATE_RANGE' => 'Datospennet er',
    'LBL_DATE_START' => 'Start dato:',
    'LBL_EDIT' => 'Rediger',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Viser sammenlagtbeløp for salgsmuligheter, etter utvalgt kilde, etter resultat for utvalgte brukere.  Resultatet baseres på hvorvidt salgsfasen er <b>avsluttet og vunnet</b>, <b>avsluttet og tapt</b>, eller annen verdi.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Alle salgsmuligheter, etter kilde, etter resultat',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Viser sammenlagtbeløp for salgsmuligheter, etter utvalgt kilde tilhørende utvalgte brukere.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Alle salgsmuligheter etter kilde',
    'LBL_LEAD_SOURCE_OTHER' => 'Andre',
    'LBL_LEAD_SOURCES' => 'Ledetråder:',
    'LBL_MODULE_NAME' => 'Oversikt',
    'LBL_MODULE_TITLE' => 'Oversikt: Forside',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Viser sammenlagtbeløp for mulige salg, etter måned, etter resultat for utvalgte brukere der forventet avslutningsdato er innen den angitte tidsperiode. Resultatet baseres på hvorvidt salgsfasen er <b>avsluttet og vunnet</b>, <b>avsluttet og tapt</b>, eller annen verdi.',
    'LBL_OPP_SIZE' => 'Størrelse på salgsmulighet i',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'salgsmuligheter der ledetråden er',
    'LBL_OPPS_IN_STAGE' => 'der salgsfasen er',
    'LBL_OPPS_OUTCOME' => ' der resultatet er',
    'LBL_OPPS_WORTH' => 'verdi på salgsmuligheter',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Viser sammenlagtbeløp etter utvalgte salgsfaser for dine salgsmuligheter, der forventet avslutningsdato er innen den angitte tidsperiode.',
    'LBL_REFRESH' => 'Oppdatér',
    'LBL_ROLLOVER_DETAILS' => 'Før musa over en strek for å vise detaljer.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Før musa over en kile for å vise detaljer.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Viser sammenlagtbeløp for salgsmuligheter, etter utvalgte salgsfaser for utvalgte brukere der forventet avslutningsdato er innen den angitte tidsperiode. ',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline etter salgsfase',
    'LBL_SALES_STAGES' => 'Salgsfaser:',
    'LBL_TOTAL_PIPELINE' => 'Totalbeløpet for pipeline er:',
    'LBL_USERS' => 'Brukere:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline etter måned etter resultat',
    'LBL_YEAR' => 'År:',
    'LNK_NEW_ACCOUNT' => 'Ny forbindelse',
    'LNK_NEW_CALL' => 'Ny oppringning',
    'LNK_NEW_CASE' => 'Ny sak (kundestøtte)',
    'LNK_NEW_CONTACT' => 'Opprett kontakt',
    'LNK_NEW_LEAD' => 'Ny ledetråd',
    'LNK_NEW_MEETING' => 'Nytt møte',
    'LNK_NEW_NOTE' => 'Nytt notat eller vedlegg',
    'LNK_NEW_OPPORTUNITY' => 'Ny salgsmulighet',
    'LNK_NEW_TASK' => 'Ny oppgave',
    'NTC_NO_LEGENDS' => 'Ingen',

    'LBL_TITLE' => 'Tittel:',
    'LBL_MY_MODULES_USED_SIZE' => 'Tilgangstelling',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline etter salgsfase',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Alle kilder, etter resultat',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultat etter måned',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Salgsmuligheter, etter ledetråd',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mine salgsmuligheter etter salgssteg',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mine brukte moduler (siste 30 dager)',
);
