{*
/**
 *
 * SugarCRM कम्युनिटी एडिशन एक ग्राहक संबंध प्रबंधन प्रोग्राम है जिसे द्वारा विकसित किया गया है
 * शुगरसीआरएम, इंक। कॉपीराइट (सी) 2004-2013 शुगरसीआरएम इंक।
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
 *
 * यह प्रोग्राम निःशुल्क सॉफ्टवेयर है; आप इसे अनुमति के तहत पुनर्वितरित और/या संशोधित कर सकते हैं
 * जीएनयू एफेरो जनरल पब्लिक लाइसेंस संस्करण 3 की शर्तें, जैसा कि प्रकाशित किया गया है
 * फ्री सॉफ्टवेयर फाउंडेशन में निम्नलिखित अनुमति जोड़ी गई है
 * धारा 7(क) में अनुमत धारा 15 के लिए: कवर किए गए कार्य के किसी भी भाग के लिए
 * जिन उत्पादों का कॉपीराइट शुगरसीआरएम के पास है, उन पर शुगरसीआरएम कोई वारंटी नहीं देता है
 * तृतीय पक्ष के अधिकारों का उल्लंघन न करने के संबंध में।
 *
 * यह प्रोग्राम इस उम्मीद में वितरित किया गया है कि यह उपयोगी होगा, लेकिन इसके बिना
 * कोई वारंटी नहीं; यहां तक ​​कि व्यापारिकता या उपयुक्तता की निहित वारंटी के बिना भी
 * किसी विशेष उद्देश्य के लिए। अधिक जानकारी के लिए GNU Affero General Public License देखें
 * विवरण।
 *
 * आपको जीएनयू एफेरो जनरल पब्लिक लाइसेंस की एक प्रति प्राप्त हुई होगी
 * यह प्रोग्राम; यदि नहीं, तो http://www.gnu.org/licenses देखें या फ्री लाइसेंस एजेंसी को लिखें
 * सॉफ्टवेयर फाउंडेशन, इंक., 51 फ्रैंकलिन स्ट्रीट, पांचवीं मंजिल, बोस्टन, एमए
 * 02110-1301 यूएसए।
 *
 * आप SugarCRM, Inc. से संपर्क कर सकते हैं। मुख्यालय 10050 नॉर्थ वोल्फ रोड पर स्थित है,
 * SW2-130, क्यूपर्टिनो, CA 95014, यूएसए। या ईमेल पते contact@sugarcrm.com पर संपर्क करें।
 *
 * संशोधित स्रोत और ऑब्जेक्ट कोड संस्करणों में इंटरैक्टिव उपयोगकर्ता इंटरफेस
 इस प्रोग्राम में उचित कानूनी नोटिस प्रदर्शित करना आवश्यक है, जैसा कि इसके अंतर्गत अपेक्षित है
 * जीएनयू एफेरो जनरल पब्लिक लाइसेंस संस्करण 3 का खंड 5।
 *
 * जीएनयू एफेरो जनरल पब्लिक लाइसेंस संस्करण 3 की धारा 7(बी) के अनुसार,
 * इन उपयुक्त कानूनी सूचनाओं में "Powered by" का प्रदर्शन अवश्य होना चाहिए
 * "शुगरसीआरएम" लोगो और "सुपरचार्ज्ड बाय सुइटसीआरएम" लोगो। यदि लोगो का प्रदर्शन नहीं हो रहा है
 तकनीकी कारणों से यथोचित रूप से संभव होने पर, उपयुक्त कानूनी नोटिस अवश्य जारी किए जाने चाहिए
 * "Powered by SugarCRM" और "SuiteCRM" शब्द प्रदर्शित करें।
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
