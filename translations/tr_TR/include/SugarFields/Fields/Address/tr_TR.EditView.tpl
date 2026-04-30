{*
/**
 *
 * SugarCRM Community Edition, bir müşteri ilişkileri yönetimi programıdır ve şu kuruluş tarafından geliştirilmektedir:
 * SugarCRM, Inc. Telif Hakkı (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM, SalesAgility Ltd. tarafından geliştirilen bir SugarCRM Community Edition eklentisidir.
 * Telif Hakkı (C) 2011 - 2019 SalesAgility Ltd.
 *
 * Bu program ücretsiz bir yazılımdır. Yeniden dağıtabilir ve/veya
 * Özgür Yazılım Vakfı tarafından yayınlanmış GNU Affero Genel Kamu Lisansı
 * 3. sürüm koşulları altında değiştirebilirsiniz.
 * Ayrıca 15. bölüme, bölüm 7(a) içinde izin verildiği gibi şu izin eklenmiştir:
 * TELİF HAKKI SUGARCRM'E AİTTİR VE SUGARCRM, ÜÇÜNCÜ TARAF HAKLARININ İHLAL EDILMEDİĞİ
 * GARANTİSİ VERMEZ.
 *
 * Bu program yararlı olması umuduyla dağıtılır.
 * Ancak HİÇBİR GARANTİ VERİLMEZ.
 * TİCARİ veya BELİRLİ BİR AMACA UYGUNLUK garantisi de verilmez. * Ayrıntılı bilgi almak için GNU Affero Genel Kamu
 * Lisansına bakın.
 *
 * Bu programla birlikte GNU Affero Genel Kamu Lisansının bir kopyasını almış olmalısınız.
 * Almadıysanız, http://www.gnu.org/licenses adresine bakın veya
 * Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301 USA adresine yazın.
 *
 * SugarCRM, Inc. ile iletişim kurmak için merkezimizin adresi: 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. E-posta adresimiz: contact@sugarcrm.com.
 *
 * Bu programın değiştirilmiş kaynak ve nesne kodu sürümlerindeki etkileşimli
 * kullanıcı arayüzlerinde, GNU Affero Genel Kamu Lisansı 3. sürümünün
 * 5. bölümünde vurgulandığı gibi uygun yasal uyarılar görüntülenmelidir.
 *
 * GNU Affero Genel Kamu Lisansı 3. sürümünün 7(b) bölümü uyarınca,
 * bu uygun yasal uyarılar, "Powered by SugarCRM" logosu ve "Supercharged by SuiteCRM"
 * logosunun görüntülenmesini sağlamalıdır. Logolar makul teknik nedenlerle görüntülenemiyorsa,
 * uygun yasal uyarılarda "Powered by SugarCRM" ve "Supercharged by SuiteCRM"
 * sözcükleri görüntülenmelidir.
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
