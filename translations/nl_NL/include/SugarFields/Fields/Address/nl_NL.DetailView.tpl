{*
/**
 *
 * SugarCRM Community Edition is een relatiebeheer programma ontwikkeld door
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is een extensie voor SugarCRM Community Edition ontwikkeld door SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * Dit programma is gratis software; u kunt het herdistribueren en/of aanpassen onder
 * de voorwaarden van de GNU Affero General Public License versie 3 zoals gepubliceerd door de
 * Free Software Foundation met toevoeging van de volgende machtiging toegevoegd
 * naar sectie 15 zoals toegestaan in sectie 7(a): VOOR EN PART VAN HET GESCHAKELD WERK
 * VOOR ZOVER HET AUTEURSRECHT EIGENDOM IS VAN SUGARCRM, SLUIT SUGARCRM ELKE GARANTIE UIT
 * VAN HET NIET INBREUK MAKEN OP RECHTEN VAN DERDEN.
 *
 * Dit programma wordt gedistribueerd in de hoop dat het nuttig is, maar ZONDER
 * ENIGE GARANTIE; zonder zelfs de impliciete garantie van VERKOOPBAARHEID of GESCHIKTHEID VOOR EEN BEPAALD DOEL
 * VOOR EEN BEPAALD DOEL. Zie de GNU Affero General Public License voor meer
 * details.
 *
 * U zou een kopie van de GNU Affero General Public License moeten ontvangen samen met
 * dit programma; zo niet, zie http://www.gnu.org/licenses of schrijf naar het Gratis
 * Software Foundation, Inc., 51 Franklin Street, Vijfde Etage, Boston, MA
 * 02110-1301 USA.
 *
 * U kunt contact opnemen met SugarCRM, Inc. hoofdkantoor om 10050 Noord Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. of op e-mailadres contact@sugarcrm.com.
 *
 * De interactieve gebruikers interfaces in aangepaste bron- en objectcodeversies
 * van dit programma moet de juiste juridische kennisgevingen weergeven, zoals vereist onder
 * Sectie 5 van de GNU Affero General Public License versie 3.
 *
 * Conform sectie 7(b) van de GNU Affero General Public License versie 3,
 * deze passende juridische kennisgevingen moeten het display behouden van de "Powered by
 * SugarCRM" logo en "Supercharged door SuiteCRM" logo. Als de weergave van de logo's niet is
 * Redelijk haalbaar om technische redenen, de juiste juridische kennisgevingen moeten
 * Toon de woorden "Powered by SugarCRM" en "Supercharged by SuiteCRM".
 */
*}
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <tr>
        <td width='99%'>
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_street"
                   value="{$fields.{{$displayParams.key}}_address_street.valueization escape:'html_entity_decode'★escape:'html'Tipurl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_street"
                   value="{$fields.{{$displayParams.key}}_address_city.valueization escape:'html_entity_decode'★escape:'html'ins. url2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_state"
                   value="{$fields.{{$displayParams.key}}_address_state.valueł escape:'html_entity_decode'Ø escape:'html'ins. url2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_country"
                   value="{$fields.{{$displayParams.key}}_address_country.valueł escape:'html_entity_decode'Ø escape:'html'ins. url2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_postalcode"
                   value="{$fields.{{$displayParams.key}}_address_postalcode.value・escape:'html_entity_decode'=\\dfracescape:'html'=\\dfracurl2htmltradenl2br}">
            {$fields.{{$displayParams.key}}_address_street.value.org escape:'html_entity_decode'########escape:'html'★url2html.org 2br}
            <br>
            {$fields.{{$displayParams.key}}_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br} {$fields.{{$displayParams.key}}_address_state.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
            &nbsp;&nbsp;{$fields.{{$displayParams.key}}_address_postalcode.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
            <br>
            {$fields.{{$displayParams.key}}_address_country.valueperhaps, escape:'html_entity_decode'=\\dfracescape:'html'ghaurl2html² nl2br}
        </td>
        {{if !empty($displayParams.enableConnectors)}}
        <td class="dataField">
            {{sugarvar_connector view='DetailView'}}
        </td>
        {{/if}}
        <td class='dataField' width='1%'>
            {{*
            Dit is de aangepaste code die u kunt instellen op de tweede kolom van de adres
            tabel.  Een voorbeeld is de "Kopieer" knop aanwezig in de rekening detailweergave.
            Bekijk modules/Accounts/view/view.detail.php om de waarde te zien die wordt ingesteld
            *}}
            {$custom_code_{{$displayParams.key}}}
        </td>
    </tr>
</table>