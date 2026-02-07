{*
/**
 *
 * SugarCRM Community Edition, bir müşteri ilişkileri yönetimi programıdır ve şu kuruluş tarafından geliştirilmektedir:
 * SugarCRM, Inc. Telif Hakkı (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * Bu program ücretsiz bir yazılımdır. Yeniden dağıtabilir ve/veya
 * Özgür Yazılım Vakfı tarafından yayınlanmış GNU Affero Genel Kamu Lisansı 3. sürüm
 * koşulları altında değiştirebilirsiniz.
 * Ayrıca 15. bölüme, bölüm 7(a) içinde izin verilen şu izin eklenmiştir:
 * TELİF HAKKI SUGARCRM'E AİTTİR VE SUGARCRM, ÜÇÜNCÜ TARAF HAKLARININ İHLAL EDILMEDİĞİ
 * GARANTİSİ VERMEZ.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. * Ayrıntılı bilgi almak için GNU Affero Genel Kamu
 * Lisansına bakın.
 *
 * Bu programla birlikte GNU Affero Genel Kamu Lisansının bir kopyasını almış olmalısınız.
 * Almadıysanız, http://www.gnu.org/licenses adresine bakın veya
 * Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301 USA adresine yazın.
 *
 * SugarCRM, Inc. ile iletişim kurmak için merkez adresi 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. veya e-posta adresi contact@sugarcrm.com.
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