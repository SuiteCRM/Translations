
/**
 *
 A SugarCRM Community Edition ügyfélkapcsolat-kezelő szoftver fejlesztője a(z)
 SugarCRM, Inc. Szerzői jog © 2004-2013 SugarCRM Inc.
 *
 SuiteCRM: a SugarCRM Community Edition SuiteCRM Ltd. által fejlesztett kiterjesztése.
 Copyright © 2011–2025 SuiteCRM Ltd.
 *
 Ez a program szabad szoftver, amely a következő licenc alapján terjeszthető és/vagy módosítható:
 a Free Software Foundation által közzétett GNU Affero General Public License 3-as verziójának feltételei szerint.
 a Free Software Foundation által, az alábbi kiegészítő engedéllyel kibővítve
 a 15. szakaszhoz a 7(a). szakaszban engedélyezett módon hozzáadva: A LICENC HATÁLYA ALÁ TARTOZÓ MŰ BÁRMELY RÉSZÉRE VONATKOZÓAN
 AMELYBEN A SZERZŐI JOGOK TULAJDONOSA A SUGARCRM, A SUGARCRM KIZÁRJA A GARANCIAVÁLLALÁST
 A HARMADIK FELEK JOGAINAK SÉRTETLENSÉGÉRE VONATKOZÓ GARANCIA KIZÁRÁSÁT IS BELEÉRTVE.
 *
 Ezt a programot abban a reményben terjesztjük, hogy hasznos lesz, de minden
 MINDENNEMŰ GARANCIAVÁLLALÁS NÉLKÜL; még a FORGALOMKÉPESSÉGRE vagy az ADOTT CÉLRA VALÓ ALKALMASSÁGRA vonatkozó vélelmezett garancia nélkül is.
 EGY ADOTT CÉLRA VALÓ ALKALMASSÁGRA. További részletekért tekintse meg a GNU Affero General Public License feltételeit.
 további részletekért
 *
 A programmal együtt Önnek meg kellene kapnia a GNU Affero General Public License egy példányát is;
 „ezzel a programmal; ha nem kapta meg, keresse fel a http://www.gnu.org/licenses oldalt, vagy írjon a Free Software Foundation, Inc. részére.
 51 Franklin Street, Fifth Floor, Boston,
 MA 02110-1301 USA
 *
 A SugarCRM, Inc. vállalattal az alábbi elérhetőségen veheti fel a kapcsolatot: székhelye: 10050 North Wolfe Road,
 SW2-130, Cupertino, CA 95014, USA. vagy a contact@sugarcrm.com e-mail-címen.
 *
 A módosított forráskódú és tárgykódú verziók interaktív felhasználói felületeinek
 ennek a programnak meg kell jeleníteniük a Megfelelő Jogi Nyilatkozatokat, ahogyan azt előírja a.
 a GNU Affero General Public License 3. verziójának 5. szakasza.
 *
 A GNU Affero General Public License 3. verziójának 7(b). szakaszával összhangban,
 ezeknek a Megfelelő Jogi Nyilatkozatoknak meg kell őrizniük a „Powered by” felirat megjelenítését a
 SugarCRM” logót és a „Supercharged by SuiteCRM” logót. Amennyiben a logók megjelenítése nem
 észszerűen megvalósítható technikai okokból, a Megfelelő Jogi Nyilatkozatoknak
 meg kell jeleníteniük a „Powered by SugarCRM” és a „Supercharged by SuiteCRM” kifejezéseket.
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
