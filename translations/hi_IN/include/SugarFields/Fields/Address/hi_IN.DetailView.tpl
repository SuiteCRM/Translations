{*
/**
 *
 * SugarCRM कम्युनिटी एडिशन एक ग्राहक संबंध प्रबंधन प्रोग्राम है जिसे द्वारा विकसित किया गया है
 * शुगरसीआरएम, इंक। कॉपीराइट (सी) 2004-2013 शुगरसीआरएम इंक।
 *
 * SuiteCRM, SalesAgility Ltd. द्वारा विकसित SugarCRM कम्युनिटी एडिशन का एक एक्सटेंशन है।
 * कॉपीराइट (सी) 2011 - 2019 सेल्सएजिलिटी लिमिटेड।
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
            यह कस्टम कोड है जिसे आप एड्रेस के दूसरे कॉलम में दिखाने के लिए सेट कर सकते हैं
            मेज़।  इसका एक उदाहरण अकाउंट्स डिटेलव्यू में मौजूद "कॉपी" बटन होगा।
            सेट की जा रही वैल्यू देखने के लिए modules/Accounts/views/view.detail.php देखें
            *}}
            {$custom_code_{{$displayParams.key}}}
        </td>
    </tr>
</table>