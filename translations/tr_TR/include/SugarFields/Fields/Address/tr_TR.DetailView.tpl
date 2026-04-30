{*
/**
 *
 * SugarCRM Community Edition, bir müşteri ilişkileri yönetimi programıdır ve şu kuruluş tarafından geliştirilmektedir:
 * SugarCRM, Inc. Telif Hakkı (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM, SuiteCRM Ltd. tarafından geliştirilen bir SugarCRM Community Edition eklentisidir.
 * Telif Hakkı (C) 2011 - 2025 SuiteCRM Ltd.
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
            Buraya, adres tablosunun ikinci sütununda görüntülenmesini istediğiniz özel kodu
            ekleyebilirsiniz.  Örnek olarak, Hesaplar ayrıntı görünümündeki "Kopyala" düğmesi olabilir.
            Ayarlanmış değeri görmek için modules/Accounts/views/view.detail.php dosyasına bakın
            *}}
            {$custom_code_{{$displayParams.key}}}
        </td>
    </tr>
</table>