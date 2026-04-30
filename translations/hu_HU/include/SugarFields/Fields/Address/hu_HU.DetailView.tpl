
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