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
