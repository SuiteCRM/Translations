{*
/**
 *
 * SugarCRM Community Edition è un programma di gestione del rapporto con il cliente sviluppato da
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM è un'estensione di SugarCRM Community Edition sviluppata da SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
<script src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
{{assign var="key" value=$displayParams.key|upper}}
{{assign var="street" value=$displayParams.key|cat:'_address_street'}}
{{assign var="city" value=$displayParams.key|cat:'_address_city'}}
{{assign var="state" value=$displayParams.key|cat:'_address_state'}}
{{assign var="country" value=$displayParams.key|cat:'_address_country'}}
{{assign var="postalcode" value=$displayParams.key|cat:'_address_postalcode'}}
<fieldset id='{{$key}}_address_fieldset'>
    <legend>{sugar_translate label='LBL_{{$key}}_ADDRESS' module='{{$module}}'}</legend>
    <table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
        <tr>
            <td valign="top" id="{{$street}}_label" width='25%' scope='row'>
                <label for="{{$street}}">{sugar_translate label='LBL_{{$key}}_STREET' module='{{$module}}'}:</label>
                {if $fields.{{$street}}.required || {{if $street|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td width="*">
                {{if $displayParams.maxlength}}
                <textarea id="{{$street}}" name="{{$street}}" title='{{$vardef.help}}' maxlength="{{$displayParams.maxlength}}"
                          rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}"
                          tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
                {{else}}
                <textarea id="{{$street}}" name="{{$street}}" title='{{$vardef.help}}' rows="{{$displayParams.rows|default:4}}"
                          cols="{{$displayParams.cols|default:60}}"
                          tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
                {{/if}}
            </td>
        </tr>

        <tr>

            <td id="{{$city}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label|default:10}}%'
                scope='row'>
                <label for="{{$city}}">{sugar_translate label='LBL_CITY' module='{{$module}}'}:
                    {if $fields.{{$city}}.required || {{if $city|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                    <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                    {/if}
            </td>
            <td>
                <input type="text" name="{{$city}}" id="{{$city}}" title='{$fields.{{$city}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$city}}.value}'
                       tabindex="{{$tabindex}}">
            </td>
        </tr>

        <tr>
            <td id="{{$state}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label|default:10}}%'
                scope='row'>
                <label for="{{$state}}">{sugar_translate label='LBL_STATE' module='{{$module}}'}:</label>
                {if $fields.{{$state}}.required || {{if $state|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td>
                <input type="text" name="{{$state}}" id="{{$state}}" title='{$fields.{{$state}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$state}}.value}'
                       tabindex="{{$tabindex}}">
            </td>
        </tr>

        <tr>

            <td id="{{$postalcode}}_label"
                width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label|default:10}}%' scope='row'>

                <label for="{{$postalcode}}">{sugar_translate label='LBL_POSTAL_CODE' module='{{$module}}'}:</label>
                {if $fields.{{$postalcode}}.required || {{if $postalcode|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td>
                <input type="text" name="{{$postalcode}}" id="{{$postalcode}}" title='{$fields.{{$postalcode}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}}
                       value='{$fields.{{$postalcode}}.value}' tabindex="{{$tabindex}}">
            </td>
        </tr>

        <tr>

            <td id="{{$country}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label|default:10}}%'
                scope='row'>

                <label for="{{$country}}">{sugar_translate label='LBL_COUNTRY' module='{{$module}}'}:</label>
                {if $fields.{{$country}}.required || {{if $country|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td>
                <input type="text" name="{{$country}}" id="{{$country}}" title='{$fields.{{$country}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$country}}.value}'
                       tabindex="{{$tabindex}}">
            </td>
        </tr>

        {{if $displayParams.copy}}
        <tr>
            <td scope='row' NOWRAP>
                {sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
            </td>
            <td>
                <input id="{{$displayParams.key}}_checkbox" name="{{$displayParams.key}}_checkbox" type="checkbox"
                       onclick="{{$displayParams.key}}_address.syncFields();">
            </td>
        </tr>
        {{else}}
        <tr>
            <td colspan='2' NOWRAP>&nbsp;</td>
        </tr>
        {{/if}}
    </table>
</fieldset>
<script type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {ldelim}
      {{$displayParams.key}}_address = new SUGAR.AddressField("{{$displayParams.key}}_checkbox", '{{$displayParams.copy}}', '{{$displayParams.key}}');
      {rdelim});
</script>
