{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * Este programa é livre; pode redistribuí-lo e/ou modificá-lo sob
 * os termos da GNU (Licença Pública Geral) Affero, versão 3, conforme publicado pela
 * "Free Software Foundation" com a adição da seguinte permissão
 *da Secção 15, conforme permitido na Secção 7(a): POR QUALQUER PARTE DO TRABALHO COBERTO
 * EM QUE OS DIREITOS DE CÓPIA SÃO DETIDOS POR SUGARCRM, A SUGARCRM EXIBE OS DETALHES DA GARANTIA
 *COM RESPEITO PELOS DIREITOS DE TERCEIROS.
 *
 * Este programa é distribuído na esperança de ser útil, mas SEM
 * QUALQUER GARANTIA; sem mesmo a garantia implícita de COMERCIABILIDADE ou ADEQUAÇÃO
 *PARA UM USO ESPECÍFICO. Veja a Licença Pública Geral GNU Affero para mais
 * detalhes.
 *
 * Deve ter recebido uma cópia da GNU (Licença Pública Geral) Affero, juntamente com
 * esse programa; se não, veja http://www.gnu.org/licenses ou escreva para Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * Pode entrar em contacto com SugarCRM, Inc. sede em 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. ou para o endereço de correio eletrónico contact@sugarcrm.com.
 *
 * Os paineis de utilizador interativos em versões de código-fonte modificado ou programação orientada ao objecto
 * deste programa devem exibir as Disposições Legais Adequadas, conforme necessário pela
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * De acordo com a Secção 7(b) da GNU (Licença Pública Geral) Affero, versão 3,
 * estes Avisos Legais Apropriados devem manter a exibição do "Powered by"
 * O logótipo do "SugarCRM" e o logótipo "Supercharged by SuiteCRM". Se a exibição dos logótipos não é
 * razoavelmente exequível por razões técnicas, as Avisos Legais Apropriados devem
 * exibir as palavras "Powered by SugarCRM" e "Supercharged by SuiteCRM".
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
            Este é um código personalizado que você pode definir para ser exibido na segunda coluna da
            tabela do endereço.  Um exemplo seria o botão "Copiar" presente na visão detalhada das Contas.
            Ver modules/Accounts/views/view.detail.php para ver o valor a ser definido
            *}}
            {$custom_code_{{$displayParams.key}}}
        </td>
    </tr>
</table>