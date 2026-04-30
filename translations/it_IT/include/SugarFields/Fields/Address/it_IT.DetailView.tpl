{*
/**
 *
 * SugarCRM Community Edition è un programma di gestione del rapporto con il cliente sviluppato da
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * Questo programma è software libero; è possibile ridistribuirlo e/o modificarlo sotto
 * i termini della GNU Affero General Public License versione 3 come pubblicato dalla
 * Free Software Foundation con l'aggiunta del seguente permesso aggiunto
 * alla sezione 15 come consentito nella sezione 7, lettera (a): PER OGNI PARTE DEL LAVORO COPERTO
 * IN CUI IL COPYRIGHT E' DI PROPRIETA' DI SUGARCRM, SUGARCRM DICHIARA LA GARANZIA
 * DI NON INFRAZIONE DEI DIRITTI DI TERZE PARTI.
 *
 * Questo programma è distribuito nella speranza che sia utile, ma SENZA
 * ALCUNA GARANZIA; senza neppure la garanzia implicita di COMMERCIALIZZAZIONE o APPLICAZIONE
 * PER UNO SCOPO PARTICOLARE. Vedi la GNU Affero General Public License per maggiori informazioni
 * dettagli.
 *
 * Una copia della GNU Affero General Public License dovrebbe essere stata fornita insieme a
 * questo programma; in caso contrario, consultare http://www.gnu.org/licenses o scrivere al Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * È possibile contattare SugarCRM, Inc. sede a 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. o all'indirizzo e-mail contact@sugarcrm.com.
 *
 * Le interfacce utente interattive nelle versioni di codice sorgente e codice compilato
 * di questo programma devono visualizzare Appropriate Note Legali, come richiesto nella
 * Sezione 5 della GNU Affero General Public License versione 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
*}
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <tr>
        <td width='99%'>
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_street"
                   value="{$fields.{{$displayParams.key}}_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_city"
                   value="{$fields.{{$displayParams.key}}_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_state"
                   value="{$fields.{{$displayParams.key}}_address_state.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_country"
                   value="{$fields.{{$displayParams.key}}_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_postalcode"
                   value="{$fields.{{$displayParams.key}}_address_postalcode.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            {$fields.{{$displayParams.key}}_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
            <br>
            {$fields.{{$displayParams.key}}_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br} {$fields.{{$displayParams.key}}_address_state.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
            &nbsp;&nbsp;{$fields.{{$displayParams.key}}_address_postalcode.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
            <br>
            {$fields.{{$displayParams.key}}_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
        </td>
        {{if !empty($displayParams.enableConnectors)}}
        <td class="dataField">
            {{sugarvar_connector view='DetailView'}}
        </td>
        {{/if}}
        <td class='dataField' width='1%'>
            {{*
            This is custom code that you may set to show on the second column of the address
            table.  An example would be the "Copy" button present from the Accounts detailview.
            See modules/Accounts/views/view.detail.php to see the value being set
            *}}
            {$custom_code_{{$displayParams.key}}}
        </td>
    </tr>
</table>