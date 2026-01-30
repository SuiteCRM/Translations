<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_LOADING' => 'Nag-loload' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Itago ang mga pagpipilian' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Tanggalin' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Magbigay ng <b>Name</b> para sa package. Ang pangalan na ipinasok mo ay dapat naka-alphanumeric at naglalamam ng walang espasyo. (Halimbawa: HR_Management)<br/><br/>Maari kang magbigay ng <b>Author</b> at <b>Description</b> na impormasyon para sa package.<br/><br/>Pindutin ang <b>Save</b> upang likhain ang package.',
            'modify' => 'Ang mga pagmamay-ari at posibleng aksyon para sa <b>Package</b> ay lilitaw dito.<br><br> Maari mong baguhin ang <b>Name</b>, <b>Author</b> at <b>Description</b> para sa package, pati na rin tanawin at i-customize ang lahat ng modyul naglalaman sa loob ng package.<br><br>Pindutin <b>New Module</b> upang lumikha ng modyul para sa package.<br><br> kung ang package ay naglalaman na kahit isang modyul, maari mong <b>Publish</b> at <b>Deploy</b> ang package, pati na rin <b>Export</b> ang pag-customize na paglikha sa package.',
            'name' => 'Ito ay ang <b>Name</b> ng kasulukuyang package <br/><br/>Ang pangalan na ipinasok mo ay dapat naka-alphanumeric, magsimula sa letra at naglalaman ng mga walang espasyo. (Halimbawa: HR_Management)',
            'author' => 'Ito ay ang <b>Author</b> na nakadispley sa panahon ng pag-install na ang pangalan ng entidad ay nilikha ang package.<br><br>Ang may-akada ay maaring isang indibidwal o kompanya.',
            'description' => 'Ito ay ang <b>Description</b> mg packaege na naka-displey sa panahon ng pag-install.',
            'publishbtn' => 'Pindutin ang <b>Publish</b> upang i-save ang lahat na ipinasok na data at lumikha ng .zip file na yan ay isang installable na bersyon ng package.<br><b>Gamitin ang <b>Module Loader</b> upang i-upload ang .zip file at i-install ang package.',
            'deploybtn' => 'Pindutin ang <b>Deploy</b> upang i-save ang lahat ng ipinasok na data at upang i-install ang package, kasama na ang lahat na modyul, sa kasulukuyang pagkakataon.',
            'duplicatebtn' => 'Pindutin ang <b>Duplicate</b> upang kopyahin ang mga nilalaman ng package sa bagong package at upang i-display ang bagong package. <br/><br/> Para sa bagong package, ang bagong pangalan ay automatikong bubuo sa pamamagitam ng paglalapit ng numero sa katapusan ng pangalan ng package na ginamit sa paglikha ng isang bago. Maari mong baguhin ang pangalan ng bagong package sa pamamagitan ng pagpalasok ng bagong <b>Name</b> at pagpipindut ng <b>Save</b>.',
            'exportbtn' => 'Pindutin ang <b>Export</b> upang lumikha ng .zip line naglalaman ng pag-customize na ginawa sa package <br><br> Ang nabuong file ay hindi isang installable na bersyon sa package <br><br>Gamitin ang <b>Module Loader</b> upang i-import ang .zip file at magkaroon ng package, kasama na ang pag-customize, ay lilitaw sa Module Builder.',
            'deletebtn' => 'Pindutin ang <b>Delete</b> upang burahin ang package na ito at lahat ng mga file nakaugnay sa package na ito.',
            'savebtn' => 'Pindutin ang <b>Save</b> upang i-save ang lahat na ipinasok na data kaugnay sa package.',
            'existing_module' => 'Pindutin ang <b>Module</b> icon upang i-edit ang mga pagmamay-ari at i-customize ang mga patlang, relasyon at layout na nauugnay kasama ang modyul.',
            'new_module' => 'Pindutin ang <b>New Module</b> upang lumikha ng bagong modyul para sa package na ito.',
            'key' => 'Itong limang letra, ang alphanumeric ng <b>Key</b> ay gagamitin upang i-prefix ang lahat ng mga direktoryo, klase ng mga pangalan at mga talaan sa databese para sa lahat ng mga modyul sa kasulukuyang package.<br><br>. Ang susi ay ginamit sa isang pagsisikap upang makamit ang pangalan ng kasanayan.',
            'readme' => 'Pindutin upang magdagdag ng <b>Readme</b> teksto para sa package na ito.<br><br>Ang Readme ay muling magagamit sa oras ng pag-install.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Magbigay ng <b>Name</b>para sa modyul. Ang <b>Label</b> na ibinigay mo ay lilitaw sa nabigasyon tab.<br/><br/>Pumili upang i-displey ang nabigasyon tab para sa modyul sa pamamagitan ng pagsusuri <b>Navigation Tab</b> checkbox.<br/><br/> Pagkatapos pumili mg uri ng modyul na gusto mong likhain.<br/><br/>Pumili ng uri ng template. Bawat template ay naglalaman na mga tiyak ng mga patlang, pati na rin ang mga pre-defined layout, upang gamitin bilang batayan para sa iyong modyul. <br/><br/>Pindutin <b>Save</b> upang lumikha ng modyul.',
            'modify' => 'Maari mong palitan ang mga modyul na pagmamay-ari o i-customize ang <b>Fields</b>, <b>Relationships</b> ay <b>Layouts</b> nauugnay sa modyul.',
            'importable' => 'Sinusuri ang checkbox na <b>Importable</b> ay pinagana sa pag-import sa modyul na ito.<br><br> Ang link sa Import Wizard ay lilitaw sa Shortcuts panel sa modyul. Ang mga Import Wizard na pasilidad sa pag-iimport ng data mula sa mga external source sa pasadyang modyul.',
            'team_security' => 'Sinusuri ang checkbox na <b>Team Security</b> ay pinagana ang koponan ng seguridad para sa modyul na ito.<br/><br/> kung ang koponan ay pinagana, ang Team selection na patlang ay lilitaw sa loob ng mga ulat sa modyul ',
            'reportable' => 'Pagsusuri ng kahon na ito ay pinayagan ang modyul na magkaroon ng mga ulat na pinatakbo laban dito.',
            'assignable' => 'Ang pag-check sa kahon na ito ay magpapahintulot sa isang talaan sa modyul na ito na italaga sa isang napiling gumagamit.',
            'has_tab' => 'Pagsuri ng <b> Nabigasyon Tab </b> ay magbibigay ng tab na nabigasyon para sa module.',
            'acl' => 'Pagche-check sa kahon na ito ay magbibigay-daan sa Mga Kontrol sa Access sa modyul na ito, kabilang ang Field Level Security.',
            'studio' => 'Ang pag-check sa kahon na ito ay magpapahintulot sa mga administrator na ipasadya ang modyul na ito sa loob ng Studio.',
            'audit' => 'Ang pag-check sa kahon na ito ay makakapagpa-audit para sa modyul na ito. Ang mga pagbabago sa ilang mga patlang ay maitatala upang ang mga administrator ay maaaring suriin ang kasaysayan ng pagbabago.',
            'viewfieldsbtn' => 'Pindutin ang <b>View Fields</b> upang tingnan ang mga patlang nauugnay sa modyul at upang lumikha at i-edit ang mga pasadyang patlang.',
            'viewrelsbtn' => 'Pindutin ang <b>View Relationships</b> upang tingnan ang mga relasyon nauugnay sa mpdyul na ito at upang lumikha ng mga bagong relasyon.',
            'viewlayoutsbtn' => 'Pindutin ang <b>View Layouts</b> upang tingnan ang mga layoit para sa modyul at upang i-customize ang kaayusan ng patlang nakapaloob ng mga layout.',
            'duplicatebtn' => 'Pindutin ang <b>Duplicate</b> upang kopyahin ang mga property ng isang modyul sa bagong modyul at upang ilatag ang bagong modyul.<br/><br/>Para sa bagong modyul, ang bagong pangalan ay magiging automatikong bubuo sa pamamagitan ng paglalapit ng mga numero sa katapusan sa isang modyul na ginamit upang likhain ang isang bago.',
            'deletebtn' => 'Pindutin ang <b>Delete</b> upang burahin ang modyul na ito.',
            'name' => 'Ito ay ang <b>Name</b> sa kasalukuyang modyul.<br/><br/> Ang pangalan ay dapat naka-alphanumeric at dapat nagsimula sa isang letra at naglalaman ng walang espasyo. (Halimbawa: HR_Management)',
            'label' => 'Ito ay ang <b>Label</b> na lilitaw sa nabigayson tab para sa modyul. ',
            'savebtn' => 'Pindutin ang <b>Save</b> upang i-save ang lahat ng pinasok na data nauugnay sa modyul.',
            'type_basic' => 'Ang uri ng template <b>Basic</b> ay nagbibigay ng mga pangunahing patlang, tulad ng Pangalan, Itinalaga sa, Koponan, Petsa ng pagkalikha at mga paglalarawa ng patlang.',
            'type_company' => 'Ang uri ng template <b>Company</b> ay nabibigay ng mga organisasyong tiyak na patlang, tulad ng Pangalan ng kompanya, Industriya at Billing Address.<br/><br/> Gamitin itong template upang likhain ang mga modyul na kaparehas sa mga pamantayang Akwant modyul.',
            'type_issue' => 'Ang uri ng template <b>Issue</b> ay nagbibigay ng mga kaso at patlang bug-specific, tulad ng Numero, mga Estado, prayoridad at deskripsyon.<br/><br/> Gamitin ang template na ito upang lumikha ng mga modyul na kaperahas sa mga pamantayang Kaso at ang mga bug modyul.',
            'type_person' => 'Ang uri ng template <b>Person</b> ay nagbibigay ng patlang tiyak na indibidwal, tulad ng Salutation, Pamagat, Pangalan, Lugar at Numero ng telepono.<br/><br/>Gamitin ang template na ito upang lumikha ng modyul na kaparehas sa mga pamantayang Kontak at ang mga Lead modyul.',
            'type_sale' => 'Ang uri ng template <b>Sale</b> ay nagbibigay ng mga oportunidad tiyak na patlang, tulad ng Pinagmulan ng lead, Yugto, Halaga at Probalidad.<br/><br/> Gamitin itong template upang lumikha ng mga modyul na kaparehas sa mga pamantayang Oportunidad modyul.',
            'type_file' => 'Ang template na <b> File </b> ay nagbibigay ng mga tiyak na field ng Dokumento, tulad ng Pangalan ng File, Uri ng Dokumento, at Petsa ng Pag-publish. <br> <br> Gamitin ang template na ito upang lumikha ng mga module na katulad ng standard na module ng Dokumento.',

        ),
        'dropdowns' => array(
            'default' => 'Ang lahat ng <b> Dropdowns </b> para sa application ay nakalista dito. <br> <br> Maaaring gamitin ang mga dropdown para sa mga field ng dropdown sa anumang module. <br> <br> Upang gumawa ng mga pagbabago sa isang umiiral na dropdown, mag-click sa pangalan ng dropdown. <br> <br> I-click ang <b> Magdagdag ng Dropdown </b> upang lumikha ng isang bagong dropdown.',
            'editdropdown' => 'Maaaring magamit ang mga listahan ng dropdown para sa mga karaniwang o pasadyang mga dropdown na patlang sa anumang module. <br> <br> Magbigay ng isang <b> Pangalan </b> para sa listahan ng dropdown. <br> <br> Kung mayroong anumang mga pack ng wika na naka-install sa application, maaari mong piliin ang <b> Wika </b> na gagamitin para sa mga item sa listahan. <br> <br> Sa field ng <b> Pangalan ng item </b>, magbigay ng isang pangalan para sa opsyon sa listahan ng dropdown. Ang pangalan na ito ay hindi lilitaw sa listahan ng dropdown na nakikita ng mga user. <br> <br> Sa field na <b> Display Label </b>, magbigay ng label na makikita ng mga user. <br> <br> Pagkatapos na ibigay ang pangalan ng item at display label, i-click ang <b> Magdagdag </b> upang idagdag ang item sa listahan ng dropdown. <br> <br> Upang muling ayusin ang mga item sa listahan, i-drag and drop ang mga item sa nais na posisyon. <br> <br> Upang i-edit ang label ng display ng isang item, i-click ang <b> I-edit ang icon </b>, at magpasok ng bagong label. Upang magtanggal ng isang item mula sa listahan ng dropdown, i-click ang <b> icon na Delete </b>. <br> <br> Upang i-undo ang isang pagbabago na ginawa sa label ng display, i-click ang <b> I-undo </b>. Upang gawing muli ang isang pagbabago na na-undo, i-click ang <b> I-redo </b>. <br> <br> I-click ang <b> I-save </b> upang i-save ang dropdown list.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Lahat ng mga patlang ay maaring i-displey sa <b>Subpanel</b>bay lilitaw dito.<br><br>Ang <b>Default</b> hanay ay naglalaman ng mga patlang na ipinapakita sa Subpanel.<br/><br/>Ang <b>Hidden</b> hanay ay nalalaman ng mga patlang na maaring idagdag sa Default na hanay.'
        ,
            'savebtn' => 'I-click ang <b> I-save at I-deploy </b> upang i-save ang mga pagbabago na iyong ginawa at upang maging aktibo sila sa loob ng module.',
            'historyBtn' => 'I-click ang <b> Tingnan ang Kasaysayan </b> upang tingnan at ipanumbalik ang naunang nai-save na layout mula sa kasaysayan.',
            'historyDefault' => 'I-click ang <b> Ibalik ang Default </b> upang ibalik ang isang pagtingin sa orihinal na layout nito.',
            'Hidden' => 'Ang mga <b> Nakatagong </b> fields ay hindi lilitaw sa subpanel.',
            'Default' => 'Lumilitaw ang <b> Default </b>na mga field sa subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Ang lahat ng mga patlang na maaaring ipakita sa <b> ListView </b>ay lalabas dito. <br> <br> Ang kolum ng <b> Default </b> ay naglalaman ng mga field na ipinapakita sa ListView bilang default. <br/> <br/> Ang hanay ng <b> Magagamit </b> ay naglalaman ng mga field na maaaring piliin ng isang user sa Paghahanap upang lumikha ng isang custom ListView. <br/> <br/> Ang kolum ng <b> Nakatagong </b> ay naglalaman ng mga field na maaaring idagdag sa Default o Magagamit na kolum.'
        ,
            'savebtn' => 'I-click ang <b> I-save at I-deploy </b> upang i-save ang mga pagbabago na iyong ginawa at upang maging aktibo sila sa loob ng module.',
            'historyBtn' => 'I-click ang <b> Tingnan ang Kasaysayan </b> upang tingnan at ibalik ang naunang naka-save na layout mula sa kasaysayan. <br> <br> <b> Ibalik </b> sa loob ng <b> Tingnan ang Kasaysayan </b> sa loob ng naka-save na mga layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'historyDefault' => 'I-click ang <b> Ibalik ang Default </b> upang maibalik ang isang tanawin sa orihinal na layout nito. <br> <br> Binago lamang ng <b> Ibalik ang Default </b> ang paglalagay ng field sa loob ng orihinal na layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'Hidden' => 'Kasalukuyang hindi magagamit ang mga <b>Nakatagong</b>mga field para makita ng mga user sa ListViews.',
            'Available' => 'Ang mga field na <b>Magagamit </b> ay hindi ipinapakita bilang default, ngunit maaaring maidagdag sa ListViews ng mga gumagamit.',
            'Default' => 'Lumilitaw ang mga field ng <b>Default </b> sa ListView na hindi nai-customize ng mga user.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Ang lahat ng mga field na maaaring ipakita sa <b> ListView </b> lalabas dito. <br> <br> Ang kolum ng <b> Default </b> ay naglalaman ng mga field na ipinapakita sa ListView bilang default. <br/> <br/> Ang kolum ng <b> Nakatago </b> ay naglalaman ng mga field na maaaring idagdag sa Default o Magagamit na kolum.'
        ,
            'savebtn' => 'I-click ang <b> I-save at I-deploy </b> upang i-save ang mga pagbabago na iyong ginawa at upang maging aktibo sila sa loob ng module.',
            'historyBtn' => 'I-click ang <b> Tingnan ang Kasaysayan </b> upang tingnan at ibalik ang naunang naka-save na layout mula sa kasaysayan. <br> <br> <b> Ibalik </b> sa loob ng <b> Tingnan ang Kasaysayan </b> sa loob ng naka-save na mga layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'historyDefault' => 'I-click ang <b> Ibalik ang Default </b> upang maibalik ang isang tanawin sa orihinal na layout nito. <br> <br> Binago lamang ng <b> Ibalik ang Default </b> ang paglalagay ng field sa loob ng orihinal na layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'Hidden' => 'Kasalukuyang hindi magagamit ang mga <b>Nakatagong</b>mga field para makita ng mga user sa ListViews.',
            'Default' => 'Lumilitaw ang mga field ng <b>Default </b> sa ListView na hindi nai-customize ng mga user.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Ang lahat ng mga field na maaaring ipakita sa form na <b> Filter </b> ay lalabas dito. <br> <br> Ang kolum ng <b> Default </b> ay naglalaman ng mga field na ipapakita sa Form ng paghahanap. <br/> <br/> Ang kolum ng <b> Nakatagong </b> ay naglalaman ng mga field na magagamit para sa iyo bilang isang admin upang idagdag sa form ng Paghahanap.'
        ,
            'savebtn' => 'Ang pag-click sa <b> I-save at Deploy </b> ay i-save ang lahat ng mga pagbabago at gawing aktibo ang mga ito',
            'Hidden' => 'Ang<b> Nakatagong </b> mga field ay hindi lilitaw sa Paghahanap.',
            'historyBtn' => 'I-click ang <b> Tingnan ang Kasaysayan </b> upang tingnan at ibalik ang naunang naka-save na layout mula sa kasaysayan. <br> <br> <b> Ibalik </b> sa loob ng <b> Tingnan ang Kasaysayan </b> sa loob ng naka-save na mga layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'historyDefault' => 'I-click ang <b> Ibalik ang Default </b> upang maibalik ang isang tanawin sa orihinal na layout nito. <br> <br> Binago lamang ng <b> Ibalik ang Default </b> ang paglalagay ng field sa loob ng orihinal na layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'Default' => 'Lumilitaw ang <b> Default </b> na mga field sa Maghanap.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Ang lugar na<b>Layout</b>ay naglalaman ng mga field na kasalukuyang ipinapakita sa loob ng<b>DetailView</b>.<br/><br/>Ang<b>Toolbox<b>Recycle Bin</b>at and mga field at mga elemento ng layout na maaaring idagdag sa layout.<br><br>Gumawa ng mga pagbabago sa layout sa pamamagitan ng pag-drag at pag-drop ng mga elemento at mga patlang sa pagitan ng <b>Toolbox</b>at ang<b>Layout</b>at sa loob mismo ng layout.<br><br>Upang alisin ang isang field mula sa layout, i-drag ang field sa<b>Recycle Bin</b>. Magagamit na ang field sa Toolbox upang idagdag sa layout.',
            'defaultquickcreate' => 'Ang lugar na<b>Layout </b> ay naglalaman ng mga field na kasalukuyang ipinapakita sa loob ng form na <b> QuickCreate </b>. <br><br> Lumilitaw ang Form QuickCreate sa mga subpanel para sa modyul kapag ang pindutang Lumikha nag-click. <br/> <br/> Ang <b> Toolbox </b> ay naglalaman ng <b> Recycle Bin </b> at ang mga elemento ng field at layout na maaaring idagdag sa layout. <br> <br> Gumawa ng mga pagbabago sa layout sa pamamagitan ng pag-drag at pag-drop ng mga elemento at mga field sa pagitan ng <b> Toolbox </b> at ang <b> Layout </b> at sa loob mismo ng layout. <br> <br> Upang alisin ang isang field mula sa layout, i-drag ang field sa <b> Recycle Bin </b>. Magagamit na ang field sa Toolbox upang idagdag sa layout.',
            //this default will be used for edit view
            'default' => 'Ang lugar na <b> Layout </b> ay naglalaman ng mga field na kasalukuyang ipinapakita sa loob ng <b> EditView </b>.<br/><br/> Ang <b> Toolbox </b> Recycle Bin </b> at mga elemento ng layout at mga fields na maaaring idagdag sa layout. <br> <br> Gumawa ng mga pagbabago sa layout sa pamamagitan ng pag-drag at pag-drop ng mga elemento at mga field sa pagitan ng <b> Toolbox </b> at ang <b> Layout </b> at sa loob mismo ng layout. <br> <br> Upang alisin ang isang field mula sa layout, i-drag ang field sa <b> Recycle Bin </b>. Magagamit na ang field sa Toolbox upang idagdag sa layout.',
            'saveBtn' => 'Pindutin ang <b>Save</b> upang panatilihin ang pagbabago na. ginawa sa layout mula sa huling pagkakataon na i-save ito.<br><br>Ang mg pagbabago ay hindi maaring iipakita sa modyul hanggang na i-deploy ang mga nai-save na pagbabago.',
            'historyBtn' => 'I-click ang <b> Tingnan ang Kasaysayan </b> upang tingnan at ibalik ang naunang naka-save na layout mula sa kasaysayan. <br> <br> <b> Ibalik </b> sa loob ng <b> Tingnan ang Kasaysayan </b> sa loob ng naka-save na mga layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'historyDefault' => 'I-click ang <b> Ibalik ang Default </b> upang maibalik ang isang tanawin sa orihinal na layout nito. <br> <br> Binago lamang ng <b> Ibalik ang Default </b> ang paglalagay ng field sa loob ng orihinal na layout. Upang baguhin ang mga label ng field, i-click ang icon na I-edit sa tabi ng bawat field.',
            'publishBtn' => 'Pindutim ang <b>Savw & Deploy</b> upang i-save ang lahat ng pagbabago sa isang layout mula sa huling pagkakataon na i-save ito, at upang gawin ang mga pagbabagong aktibo sa modyul.<br><br>Ang layout ay kaagad ma i-displey sa modyul.',
            'toolbox' => 'Ang <b>Toolbox</b> naglalaman ng <b>Recycle Bin</b>, karagdagang layout ng mga elemento at ang itinakdang magagamit na patlang upang idagdag sa layout.<br/><br/>Ang layout ng mga elemento at mga patlang sa Toolbox ay maaring i-drad at i-drop sa layout, at ang layout ng mga elemento at ang mga patlang maaring i-drag at i-drop mula sa layout sa Toolbox.<br><br>Ang layout ng mga elemento ay <b>Panels</b> at <b>Rows</b>. Pagdaragdag ng bagong hilera at ang bagong panek sa layout na nagbibigay ng karagdagang lilokasyon sa layout para sa mga patlang.<br/><br/>I-drag at i-drop ang kahit anong mga patlang sa Toolbox o layout sa okupadong patlang na posisyon ng mga patlang na posisyo at pagpilitin ang mga lokayson sa isanv dalawang patlang.<br/><br/>Ang <b>Filler</> na patlang ay lumilikha ng blankong patlang sa layout kung saan ito nakalagay.',
            'panels' => 'Ang lugar ng <b>Layout</b> ay nagbibigay ng tanaw kung paano ang layout ay lilitae sa loob ng modyul kung ang pagbabago ay ginawa sa layout na i-deploy.<br/><br/> Maari mong ipahiwatig muli ang mga patlang, mga hilera at panel sa pamamagitan ng pag-drag at pag-drop ang mga ito sa ninanais na lokasyon.<br/><br/>Alisin ang mga elemento at i-drag at i-drop sng mga ito sa <b>Recycle Bin</b> sa Toolbox, o magdagdag ng bagong elemento at mga patlang sa pamamagitan ng pag-drag ang mga ito mula sa <b>Toolbox</b> at ihulog ang mga ito sa ninanais na lokasyon sa layout.',
            'delete' => 'I-drag at i-drop ang kahit anong elemento dito upang alisin ito mul sa layout',
            'property' => 'I-edit ang mga labrl na naka-displey para sa patlang na ito. Ang <br/><b>Tab Order</b> komokontrola kung anong order ng tab susi na lilipat sa pagitan ng mga patlang.',
        ),
        'fieldsEditor' => array(
            'default' => 'Ang <b>Fields</b> na magagamit para sa modyul ay nakalista dito sa Field Name. <br><br>mga pasadyang ns patlang na nilikha para sa modyul na lumilitaw sa ibabaw ng patlang na magagamit para sa modyul sa pamamagitan ng default.<br><br>Upang i-edit ang patlang, pindutin ang <b>Field Name</b>.<br/><br/>Upang lumikha ng bagong patlang, pindutin ang <b>Add Field</b>.',
            'mbDefault' => 'Ang <b>Fields</b> na magagamit para sa modyul ay nakalista dito sa Field Name.<br><br>Upang i-configure ang mg property para sa patlang, pindutin ang Field Name.<br><br>Upang lumikha ng bagong patlang, pindutin ang <b>Add Field</b>. Ang label kasama ang ibang pagmamay-ari ng bagong patlanv ay maaring i-edit pagkatapos maglikha sa pamamagitan ng pagpindut ng Field Name.<br><br>Pagkatapod ang modyul ay naka-deploy, ang mga bagong patlang upang likhain sa Module Buildet ay naaalala bilang mga pamantayang patlanv sa naka-deploy na modyul sa studio.',
            'addField' => 'Piliin ang <b>Data Type<b/> para sa bagong patlang. Ang uri na iyong pinili ay tumutukoy sa kung anong uri ng mga karakter na pwedeng ipasok para sa patlang. Halimbawa, ang mga numerong integer lamang ang pwedeng maipasok sa patlang na may uri ng integer data.<br><br> Magbigay ng <b>Name</b> para sa patlang. Ang pangalan ay dapat naka-alphanumeric at hindi naglalaman ng kahit anong mga espasyo. Underscores ay balido.<br><br> Ang <b>Display Label</b> ay ang label na lilitaw sa mga patlang sa mga layout ng module. Ang <b>System Label</b> ay ginagamit para isangguni ang patlang sa code.<br><br>Depende sa napiling data type na para sa patlang, karamihan o lahat ng mga sumusunod na mga ari-arian ay pwedeng i-set para sa patlang: <br><br> <b>Help Text </b> ay lumilitaw pansamantala habang ang mga hover na gumagamit higit sa patlang at pwedeng magamit para i-prompt ang gumagamit para sa uri ng ninanais na input.<br><br> <b>Comment Text</b> ay makikita lamang sa loob ng Studio at/o Module Builder, at pwedeng magamit para ilarawan ang patlang para sa mga administrador.<br><br> <b>Default Value</b> ay lilitaw sa patlang. Ang mga gumagamit ay pwedeng magpasok ng bagong halaga sa patlang o gumamit ng default na halaga.<br><br> Piliin ang <b>Mass Update</b> checkbox upang ito ay pwedeng magamit sa Mass update na tampok sa patlang.<br><br>Ang<b>Max Size</b>na halaga ay tumutukoy sa pinakamataas na numero ng mga karakter na pwedeng ipasok sa patlang.<br><br> Piliin ang <b>Required Field</b> na checkbox upang makagawa ng kinakailang patlang. Ang halaga ay dapat ibinigay para sa patlang upang pwede itong i-save sa rekord ng naglalaman sa patlang.<br><br> Piliin ang <b>Reportable</b> na checkbox upang ito ay pinapayagan sa patlang na pwedeng magamit para sa mga filter at para sa pagpapakita ng data sa mga ulat.<br><br> Piliin ang <b>Audit</b> na checkbox upang pwedeng subaybayan ang mga pagbabago sa patlang doon sa Change Log.<br><br> Piliin ang opsyon sa <b>Importable</b>na patlang upang payagan, di payagan o kinakailangan sa patlang para ma-import ito sa Import Wizard.<br><br> Piliin ang opsyon sa <b>Duplicate Merge</b> sa patlang para paganahin o di paganahan ang Merge Duplicates at Find Duplicates na mga tampok.<br><br>Mga karagdagang ari-arian ay pwedeng i-set para sa tiyak na uri ng mga data.',
            'editField' => 'Ang mga pagmamay-ari sa patlang na ito ay maaring i-customize.<br><br>Pindutin ang <b>Clone</b> upang likhain ang bagong patlang kasama ang mga itong pagmamay-ari.',
            'mbeditField' => 'Ang <b>Display Label</b> sa isang template na patlang ay maaring i-customize. Ang ibang mga property ay hindi maaaring i-customize.<br><br>Pindutin ang <b>Clone</b> upang likhain ang bagong patlang sa mga kaparehong property.<br><br>Upang alisin ang patlang na template hindi ito ipinapakita ang modyul, alisin ang patlang mula sa nararapat <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'I-export ang mga pag-customize na.ginawa sa Studio sa pamamagitan ng paglilikha ng mga package na i-upload  sa ibang SuiteCRM instance sa pamamagitan ng <b>Module Loader</b>.<br><br> Unang,magbigay ng <b>Package Name</b>.Maari kang magbgay ng <b>Author</b> at <b>Description</b> na impormasyon para rin sa package.<br><br>Piliin ang mga modyul na naglalaman ng mga pag-customoze na ninais mong i-export.Ang mga modyul lamang ang naglalaman ng pag-customize ay lilitaw para sa iyong pagpili.<br><br>Pagkatapos pindutin ang <b>Export</b> upang lumikha ng .zip file para sa package naglalaman ng mga pag-customize.',
            'exportCustomBtn' => 'Pindutin ang <b>Export</b>upang lumikhs ng .zip fike para sa package naglalaman ng pag-customize na ninanais mong i-export.',
            'name' => 'Ito ay ang <b>Name</b> para sa package Ito pangalan ay naka-displey sa panahon ng pag-install.',
            'author' => 'Ito ay ang <b>Author</b> na naka-displeysa panahon ng pag-instak bilanh isang pangalan ng entidad na nilikha ang package. Ang may-akda ay maaring isang indibidwal o isang kompanya.',
            'description' => 'Ito ay ang <b>Description</b> mg packaege na naka-displey sa panahon ng pag-install.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Maligayang pagdating sa <b>Developer Tools</b> na lugar. <br/><br/>Gamitin ang mga kagamitan sa lugar na ito para lumikha at magmuno sa pamantayan at ang mga pasadyang module at mga patlang.',
            'studioBtn' => 'Gamitin ang <b>Studio</b> upang i-customize ang naka-deploy ng mga modyul.',
            'mbBtn' => 'Gamitin ang <b>Module Builder</b> upang lumikha ng mga bagong modyul.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Gamitin ang <b>Dropdown Editor</b> upang magdagdag at i-edit ang mga global na dropdown para sa mga patlang.',
            'appBtn' => 'Ang application mode ay kung saan maari mong i-customize ang iba-ibang property ss isang programa, tulad ng kung gaano karami ang mga ulat ng TPS ay naka-displey sa honepage',
            'backBtn' => 'Bumalik sa nakaraang hakbang.',
            'studioHelp' => 'Gamitin ang <b>Studio</b> upang tukuyin kung ano at paano ang impormasyon sy naka-displey sa mga modyul.',
            'moduleBtn' => 'Pindutin ang edit ng modyul na ito.',
            'moduleHelp' => 'Ang mga compinent na maari mong i-customize para sa modyul ay lilitaw dito.<br><br>Pindutin ang icon upang piliin ang component para i-edit.',
            'fieldsBtn' => 'Lumikha at i-customize ang <b>Fields</b> upang maglagay ng impormasyon sa modyul.',
            'labelsBtn' => 'I-edit ang <b>Label</b> na naka-displey para sa modyul at ibang mga pamagat sa modyul.',
            'relationshipsBtn' => 'Magdagdag ng bago o tingnan ang umiiral na <b> Mga Relasyon </b> para sa module.',
            'layoutsBtn' => 'I-customize ang module na <b> Mga Layout </b>. Ang mga layout ay ang iba\'t ibang mga view ng module na naglalaman ng mga field. <br> <br> Maaari mong matukoy kung aling mga field ang lilitaw at kung paano sila ay nakaayos sa bawat layout.',
            'subpanelBtn' => 'Tukuyin kung aling mga field ang lalabas sa <b> Subpanel </b> sa modyul.',
            'portalBtn' => 'I-customize ang module na <b>Mga Layout </b> na lumilitaw sa <b> SuiteCRM Portal </b>.',
            'layoutsHelp' => 'Ang module na <b> Mga Layout </b> na maaaring ipasadya ay lilitaw dito. <br> <br> Ang mga layout ay nagpapakita ng mga field at data ng field. <br> <br> Mag-click ng isang icon upang piliin ang layout na i-edit.',
            'subpanelHelp' => 'Ang <b> Mga Subpanel </b> sa modyul na maaaring ipasadya ay lilitaw dito. <br> <br>Mag-click ng isang icon upang piliin ang modyul upang ma-edit.',
            'newPackage' => 'I-click ang <b> Bagong Package </b> upang lumikha ng bagong package.',
            'exportBtn' => 'I-click ang <b> I-export ang Mga Pag-customize </b> upang lumikha at mag-download ng isang pakete na naglalaman ng mga pagpapasadya na ginawa sa Studio para sa mga partikular na module.',
            'mbHelp' => 'Gamitin ang <b> Module Builder</b>upang lumikha ng mga pakete na naglalaman ng mga pasadyang module batay sa mga karaniwang o pasadyang mga bagay.',
            'viewBtnEditView' => 'I-customize ang layout ng <b> EditView </b> ng module. <br> <br> Ang EditView ay ang form na naglalaman ng mga field ng input para sa pagkuha ng data na pinasok ng user.',
            'viewBtnDetailView' => 'Ipasadya ang layout ng <b> Detalye ng View </b> ng module. <br> <br> Ipinapakita ng Detalye View ang datos na ipinasok ng gumagamit.',
            'viewBtnDashlet' => 'I-customize ang <b> SuiteCRM Dashlet ng module </b>, kabilang ang ListView at Paghahanap ng SuiteCRM Dashlet. <br> <br> Ang SuiteCRM Dashlet ay magagamit upang idagdag sa mga pahina sa Home module.',
            'viewBtnListView' => 'I-customize ang layout ng <b> ListView </b> ng module. <br> <br> Ang mga resulta ng Paghahanap ay lilitaw sa ListView.',
            'searchBtn' => 'I-customize ang mga layout ng module na <b> Paghahanap </b>.<br><br>Tukuyin kung anong mga field ang maaaring magamit upang i-filter ang mga talaan na lumilitaw sa ListView.',
            'viewBtnQuickCreate' => 'I-customize ang layout ng module na <b> QuickCreate </b>. <br> <br> Lumilitaw ang Form QuickCreate sa mga subpanel at sa module ng Email.',
            'addLayoutHelp' => "Upang lumikha ng isang pasadyang layout para sa isang Security Group piliin ang naaangkop na Security Group at ang layout na kung saan upang kopyahin mula bilang isang panimulang punto.",
            'searchHelp' => 'Ang mga form na <b> Search </b> na maaaring ipasadya ay lilitaw dito. <br> <br> Mga form ng paghahanap ay naglalaman ng mga field para sa mga talaan ng pag-filter. <br> <br> Mag-click ng isang icon upang piliin ang layout ng paghahanap upang i-edit.',
            'dashletHelp' => 'Ang <b> SuiteCRM Dashlet </b> na mga layout na maaaring ipasadya ay lumitaw dito.
<br> <br> Ang SuiteCRM Dashlet ay magagamit upang idagdag sa mga pahina sa module ng Home.',
            'DashletListViewBtn' => 'Ang <b> SuiteCRM Dashlet ListView </b> ay nagpapakita ng mga talaan batay sa mga filter ng paghahanap ng SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => 'Ang mga talaan ng mga <b> SuiteCRM Dashlet Search </b> para sa listview ng SuiteCRM Dashlet.',
            'popupHelp' => 'Ang <b> Popup </b> na mga layout na maaaring ipasadya ay lilitaw dito. <br>',
            'PopupListViewBtn' => 'Ang <b> Popup ListView </b> ay nagpapakita ng mga talaan batay sa mga pagtingin sa Popup na paghahanap.',
            'PopupSearchViewBtn' => 'Ang mga pagtingin sa mga tala <b> Popup Search </b>para sa popup listview.',
            'BasicSearchBtn' => 'I-customize ang form na <b> Mabilis na Filter </b> na lumilitaw sa tab na mabilis na Filter sa lugar ng Paghahanap para sa modyul.',
            'AdvancedSearchBtn' => 'I-customize ang form na <b> Advanced na Filter </b> na lumilitaw sa tab na Advanced na Paghahanap sa lugar ng Paghahanap para sa module.',
            'portalHelp' => 'Pamahalaan at i-customize ang <b> SuiteCRM Portal </b>.',
            'SPUploadCSS' => 'Mag-upload ng isang <b> Estilo ng Sheet </b> para sa PortalCRM Portal.',
            'SPSync' => '<b> I-sync </b> mga pagpapasadya sa instansiya ng PortalCRM Portal.',
            'Layouts' => 'I-customize ang <b> Mga Layout </b> ng modules ng SuiteCRM Portal.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Ang lahat ng <b> Mga Relasyon </b> na umiiral sa pagitan ng module at iba pang mga naka-deploy na mga module ay lilitaw dito. <br> <br> Ang relasyon <b> Pangalan </b> ay ang pangalan ng system na binuo para sa relasyon. <br> <br> Ang <b> Pangunahing Module </b> ay ang modyul na nagmamay-ari ng mga relasyon. Halimbawa, ang lahat ng mga pag-aari ng mga relasyon na kung saan ang module ng Account ay ang pangunahing module ay naka-imbak sa Mga talahanayan ng database ng Mga Account. <br> <br> Ang <b> Type </b> ay ang uri ng relasyon sa pagitan ng Pangunahing module at ang <b> Kaugnay na Module </b>. <br> <br> Mag-click ng isang pamagat ng hanay upang pagbaguhin ayon sa kulom. <br> <br>Mag-click sa isang row sa table ng relasyon upang tingnan ang mga katangian na nauugnay sa relasyon. <br> <br> I-click ang <b> Magdagdag ng Relasyon </b> upang lumikha ng isang bagong relasyon. <br> <br> Ang mga relasyon ay maaaring malikha sa pagitan ng anumang dalawang mga module na na-deploy.',
            'relationshipHelp' => 'Maaaring malikha ang <b> Mga Relasyon </b> sa pagitan ng modyul at ng iba pang naka-deploy na module. <br> <br> Ang mga relasyon ay ipinakikitang nakikita sa pamamagitan ng mga subpanel at nauugnay ang mga field sa mga talaan ng module. <br> <br> Pumili ng isa sa mga sumusunod ugnayan sa <b> Mga Uri </b> para sa modyul: <br> <br> <b> One-to-One </b> - Ang mga talaan ng parehong module ay naglalaman ng mga patlang na may kaugnayan. <br> <br> <b> One-to-Many </b> - Ang talaan ng Pangunahing Module ay maglalaman ng isang subpanel, at ang rekord ng Kaugnay na Module ay maglalaman ng isang kaugnay na field. <br> <br> <b> Marami-sa-Marami </b> - Parehong ang mga talaan ng modules ay magpapakita ng mga subpanel. <br> <br> Piliin ang <b> Kaugnay na Module </b> para sa relasyon. <br> <br> Kung ang uri ng relasyon ay nagsasangkot ng mga subpanel, piliin ang view ng subpanel para sa naaangkop na mga module. <br> <br> I-click ang <b> I-save </b> upang likhain ang relasyon.',
            'convertLeadHelp' => 'Dito maaari kang magdagdag ng mga module sa screen ng layout ng convert at baguhin ang mga layout ng mga umiiral na. <br/>
Maaari mong muling i-order ang mga module sa pamamagitan ng pag-drag sa kanilang mga hanay sa talahanayan. <br/> <br/>
<b> Module: </b> Ang pangalan ng module. <br/> <br/>
<b> Kinakailangan: </b> Kinakailangan ang mga kinakailangang mga module o napili bago ma-convert ang lead. <br/> <br/>
<b> Kopyahin ang Data: </b> Kung naka-check, ang mga patlang mula sa lead ay makokopya sa mga patlang na may parehong pangalan sa mga bagong nilikha na mga rekord. <br/> <br/>
<b> Payagan ang Pinili: </b> Ang mga module na may isang nauugnay na patlang sa Mga Contact ay mapipili sa halip na malikha sa panahon ng proseso ng pag-convert ng lead. <br/> <br/>
<b> I-edit: </b> Baguhin ang layout ng conversion para sa modyul na ito. <br/> <br/>
<b> Tanggalin: </b> Alisin ang modyul na ito mula sa layout ng pag-convert. <br/> <br/>',


            'editDropDownBtn' => 'Mag-edit ng isang global na Dropdown',
            'addDropDownBtn' => 'Magdagdag ng isang bagong global Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'Ang <b> Mga Field </b> sa module ay nakalista dito sa pamamagitan ng Field Name. <br> <br> Ang template ng module ay may kasamang isang tinukoy na hanay ng mga Field. <br> <br> Upang lumikha ng bagong field, i-click <b> Magdagdag ng Field </b>. <br> <br> Upang mag-edit ng isang Field, i-click ang <b> Pangalan ng Field </b>. <br/> <br/> Matapos ang modyul ay inilunsad, ang bagong mga Field na nilikha sa Tagabuo ng Module, kasama ang mga Field ng template, ay itinuturing na karaniwang mga Field sa Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Ang <b> Mga Relasyon </b> na nalikha sa pagitan ng module at iba pang mga module ay lilitaw dito. <br> <br> Ang relasyon <b> Pangalan </b> ay ang pangalan ng system na binuo para sa relasyon. <br><br> Ang <b> Pangunahing Module </b> ay ang modyul na nagmamay-ari ng mga relasyon. Ang mga katangian ng relasyon ay naka-imbak sa mga talahanayan ng database na kabilang sa pangunahing module. <br> <br> Ang <b> Uri </b> ay ang uri ng kaugnayan sa pagitan ng Primary module at ang <b> Kaugnay na Module </b>. <br> <br> I-click ang isang pamagat ng hanay upang pagbaguhin sa hanay.<br><br>Mag-click ng isang hilera sa table ng relasyon upang tingnan at i-edit ang mga katangian na nauugnay sa relasyon. <br><br> I-click ang <b> Magdagdag ng Relasyon </b> upang lumikha ng isang bagong relasyon.',
            'addrelbtn' => 'mouse sa tulong para magdagdag ng relasyon...',
            'addRelationship' => 'Ang <b>Relationship</b> ay maaring malikha sa pagitan ng modyul at ibanh pasadyang modyul o ang naka-deploy na modyul.<br><br> Ang mga relasyon ay biswal na ipinapahayah sa pamamahitan ng mga subpanel at nauugnay sa mga patlang sa mga modyul na ulat.<br><br>Pumili ng isa sa mga sumusunod na relasyon <b>Types</b> para sa modyul.<br><br> <br> One-to-one</b> -Kaparehong mga modyul ay naglalaman ng nauugnah na mga patlang. <br><br> <br>One-to-many</br> - Ang Primary Module\'s na ulat ay naglalaman ng subpane, at ang nagkaugnay ng mga ulat ay naka-displey sa mga subpanel, piliin ang subpanel view para sa nararapt na modyul.<br><br>Pindutim ang <b>Save</b> upang lumikha ng relasyon.',
        ),
        'labelsHelp' => array(
            'default' => 'Ang <b>Labels</b> para sa patlang at ibang mga pamagat sa modyul ay maaring baguhin.<br><br> I-edit ang label sa pamamagitan ng pagpindut sa kinalooban ng patlang, pagpapasok ng bagong label at pag-pipindut ng <br>Save</b>.<br><br> kung kahit anong linggwaheng pakete ay naka-install sa aplikasyon, maaring kang pumili ng <b>Language</br> upang gamitiin para sa mga label.',
            'saveBtn' => 'Pindutin anh <b>Save</b> upang i-save ang lahat ng pagbabago.',
            'publishBtn' => 'Pindutin anh <b>Save &Deploy</b> upang i-save ang lahat ng pagbabago at gawin itong aktibo.',
        ),
        'portalSync' => array(
            'default' => 'Pagpasok ng <b>SuiteCRM Portal URL </br> sa portal instance upang i-update, at pindutin ang <b>Go</b>.<br><br>Pagkatapos ipasok ang balidong SuiteCRM na pangalan na ginamit at password, at pagkatapos pindutin ang <b>Begin Sync</b>.<br><br> Ang pag-customize na ginawa sa SuiteCRM <b>Layout</b>, kasama ang <b> Style Sheet</b> kung ang isa ay naka-upload, ay inilipat sa tinukoy na portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'Maari mong i-customize ang tingin sa isang SuiteCRM sa pagmamagitan ng paggamit ng estilo na sheet.<br<br> Pumili ng <b>Style Sheet</b> upang i-upload.<br><br>Ang estilo ng sheet ay ipinapatupad sa SuiteCRM Portal sa susumunod na panahon kung ang pag-sync ay naitanghal.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Upang makapagsimula sa proyekto, pindutin anb <b>New Package<b> upang lumikhs ng bagong package sa iyong bahay at sa iyong pasadyang modyul. <br/><br/>Bawat packae ay naglalaman ng isa or higit pang modyul.<br/><br/> Para sa instance, maari kang lumikha ng package naglalaman ng isang custom na modyul na kaugnay sa mga pamantayang akwant modyul, O, maaaring kang kumikha ng maramihanv bagong modyuk na na uma-andae ng sabay bilang isang proyekto at ang nauugnay sa bawat isa at ibang pang mga modyul ay nasa aplikasyon.',
            'somepackages' => 'Ang <b>package</b> ay gawa bilang isang nilalaman para sa pasadyang modyul, lahat ng parte sa isang proyekto. Ang package ay maaring naglalaman ng isa o higit pang custom <b>modules</b> na naguugnay sa bawat isa o sa iba pang modyul sa aplikasyon.<br/><br/>Pagkatapos lumikha g package sa iyong proyekto, maari kang lumikha ng mga modyul para sa package ngayon din, o maari mong ibalik sa Module Builder sa tamang oras upang kumpletohin ang proyekto<br><br> Kung ang proyekto ay na kumpleto, maari kang <b>Deploy</b> ang package upang i-install ang custom na modyul sa loon ng aplikasyon.',
            'afterSave' => 'Ang iyong bagong package ay dapat naglalaman ng kahit isang modyul. Maari kang lumikha ng iss o higit pang mga custom modyul para sa package.<br/><br/>PindutiN ang <b> New Module</b> upang lumikha ng custom modyul para sa package na itom<br/><br/> Pagkatapis lumikhs ng kahit isang modyul, maari kang mag-pubish o mag-deploy ng package upang gawing ito magagamit sa iyong instance at/o sa ibang gumagamit.<br/><br/> Upang i-deploy ang package sa isang hakbang nakapaloob sa iyong SuiteCRM instance, pindutin ang <b>Deploy </br>.<br><br> Pindutin ang <b>Publish</b> upang i-save ang package bilang isang .zip fikr.Pagkatapos ang .zip file na i-save sa iyong sistema, gamitin ang <b> Module Loader</b> upang i-upload at i-install package sa iyong SuitCRM instance.<br/> <br/> Maari mong ipamahagi sng fle sa ibang gumagamit upang i-upload sa kanilang SuiteCRM instances.',
            'create' => 'Ang <b>Package </b> ay gawa bilang isang nilalaman para sa mga custom modyul, lahat ng parte sa isang proyekto. Ang package ay maaring naglalaman ng isa o higit pang custom <b>modules</b> na maaring iuugnay sa bawat iss o sa iba pang mga modyul sa aplikasyon.<br/><br/>Pagkatapis lumikha ng package sa iyong proyekto, maari kang lumikha ng mga modyul para sa package ngayon din, o maari monf ibalik sa Module Builder sa tamang upsng ma-kumoleto ang proyekto.',
        ),
        'main' => array(
            'welcome' => 'Gamitin ang <b>Developer Tools</b> upang lumika at mamuni sa pamantayang at i-custom ang mga modyul at patlang.<br/><br/> Upang pamunan sng mga modyul sa aplikasyon, pindutin ang <b>Studio</b>.<br/><br/> Upang lumikha ng mga custom na modyul, pindutin ang <b>Module Builder</b>.',
            'studioWelcome' => 'Lahat ng kasalukuyang naka-install na modyu, kasama na ang pamantayan at module-loaded na bagay, ay naka-customize nakapaloob ng studio.'
        ),
        'module' => array(
            'somemodules' => "Dahil ang kasulukuyang package ay naglalaman ng kahit isang modyul, maari mong <b>Deploy</b> ang modyul sa package nakapaloob sa iyong SuiteCRM instance o ibang instance gamit ang <b>Module Loader</b>.<br/><br/><br/> Upang i-install ang package direkta sa iyong SuiteCRM instance, pindutin ang <b>Deploy</b>.<br><br>Upang lumikha ng .zip file para sa package na maaring malayan at i-instakl sa loob ng kasalukuyang SuiteCRM instance at mga ibang instance gamit ang <b>Module Loader</b>, pindutin ang <b>Publish</b>. Na maari kang magbuo ng mga modyul para sa nga yugto ng mga package na ito, at i-publish o i-deploy kung handa na gawin ang lahat.<br/><br/>Pagkatapos i-publish o i-deploy ang package, maari ka nsng gumawa ng pagbabago sa mga property ng package af i-customize ang module ng malsyo. Pagkatapos ipslabas ulit ang package upang mag-apply ng pagbabago.",
            'editView' => 'Dito maari kang mag-edit ng umiiral na mga patlang. Maari mong alisin ang kahit anong umiiral na patlang o magdagdag ng magagamit na patlang para sa kaliwang panel.',
            'create' => 'Kapag pumili ng uri ng modyul <b> Type</b> na ninanais mong ilikha, laging isa-isip na ang mga uri ng patlang na gusto mong makapaloob sa modyul. <br/><br/> Bawat modyul temmplate ay naglalaman ng itinakdang modyul na tumutukoy sa uri ng modyul na inalarawan sa pamamagitan ng pamagat.<br/><br/><b>Basic</b> - Nagabibigay ng madaliang patlang na lilitaw sa pamantayang modyul, tulad ng pangalan, naitalaga kay, Koponan, Petsa ng pagkalikha at paglalarawan ng patlang.<br/><br/> <b>Company</b> - Nagbibigay ng organisasyon-tiyak na patlang, tulad ng Pangalan ng kompanya, Industriya at lugar ng paniningi. Gamitin itong templste upang lumikha ng mga modyul ns kaparehas sa mga pamantayang Akwant modyul.<br/><br/><b>Person</b> - Magbibigay ng indibidwal-tiyak na patlang, tulad ng Salutation, Pamagat, Pangalan, Lugar at numero ng telepono. Gamitin itong template upang lumikha ng mga modyul na kaparehas sa mga pamantayang konyak at mga lead na modyul.<br/><br/><b>Issue</b> - Magbigay ng kaso at bug-tiyak na patlang, tulad ng Numero, Estado, Prioridad at Paglalarawan. Gamitin itong template upang lumikha ng mga modyul na kaparehas sa mga pamantayang Kaso at mga bug modyul.<br/><br/>Tandaan: Pagkatapos mo maglikha ng modyul, maaring mong i-edit ang mga label sa isa patlang na ibinigay sa template, pati na rin ang paglikha ng mga custom na patlang upang idagdag sa mga modyul na layout.',
            'afterSave' => 'I-customize anv modyul na aayon sa iyong pangangailangan sa pamamgitan ng pag-edit at paglikha ng mga patlang, pagtatayo ng mga relasyon sa ibang mga modyul at pagsasaayos ng mga patlang sa loob ng layout.<br/><br/>Upang tingnan ang template ng mga patlang at pamumuno ng mga custom na patlang sa loob ng modyul, pindutin ang <b>View Fields</b>.<br/><br/> Upang lumikha at mamuno sa mga relasyon sa pagitan ng modyul at iba pang modyul, kahit ang mga modyul ay nasa aplikasyon o ibang custom modyul nakapaloob sa kaparehong package, pindutin ang <b>View Relationships</b>.<br/><br/> Upang i-edit ang mga modyul layout, pindutin ang <b> View Layouts</b>. Maari mong baguhin ang Detail View, Edit View at List View para sa modyul tulad ng gusto mo para sa mga modyul nasa aplikasyon nakapaloob sa studio.<br/><br/>Upang lumikha ng kaparehong properry tulad ng kasalukuyang modyul, pindutin ang <b>Duplicate</b>. Maari kang magpatuloy sa pag-cutomize ng bagong modyul.',
            'viewfields' => 'Ang mga patlang sa modyul ay maaring i-customize upang naayon sa iyong pangangailangan.<br/><br/>Hindi mo maaring burahin ang pamantayang patlang, ngunit maaring mong alisin ang mga ito mula sa nararapat na mga layout sa loob ng pahina na Layout.<br/><br/>Maari kang lumikha ng bago na madalian na kaparehas sa mga property na umiiral ng mga patlang sa pamamagitan ng pagpipindut ng <b>Clone<b> sa <b> Properties</b> form. Magpasok ng kahit anong property, at pagkatapos pindutin ang <b>Save<b/>.<br/><br/> ito ay inererekomenda na itinakda mo ang lahat ng mga property para sa pamantayang patlang at custom ng mga patlang bago mo ito i-publish at i-install ang package na naglalaman ng pasadyang modyul.',
            'viewrelationships' => 'Maari kang lumikha ng many-to-many na relasyon sa pagitan ng kasalukuyang modyul at ibang modyul sa package, at/o sa pagitan ng kasalukuyang modyul at ang mga modyul na umiiral sa aplikasyon.<br><br> Upang lumikha ng one-to-many at one-to-one relasyon, lumikhs ng <b>Relate</b> at <b>Flex Relate</b> ng mga patlang para sa modyul.',
            'viewlayouts' => 'Maari mong kontrolin kung anong patlang ang pwedeng magagamit para sa pagkukuha ng data sa loob ng <b>Edit View</b>. Maari mo ring kontrolin kung anong data ang i-displey sa loob ng <b>Detail View</b>. Ang mga View ay hindi nagtutugma.<br/><br/>Ang Quick Create ay naka-displey kung anb <b>Create</b>ay na pindut sa modyul subpanel. Sa pamamagitan ng default, ang form ng <b>Quick Create</b> layout ay kaparehas lamang bilang isang default <b>Edit View</b> layout. Maari mo ring i-customize ang Quick Create form para ito ay naglalaman lamang na maliit at/o iba\'t ibang patlang kaysa Edit View layout.<br><br>Maari mo ring tukuyin ang seguridad ng modyuk sa pamamagitan ng paggamit ng naka-cutomize kasama ang <b>Role Management</b>.<br><br>',
            'existingModule' => 'Pagkatapos lumikha at i-customize ang modyul na ito, maari kang lumikha ng karagdagang o ibalik sa package upang <b>Publish</b> o <b>Deploy</b> ang package.<br><br>Upang lumikha ng karagdagang modyul, pindutin ang <b>Duplicate</b> upang lumikha ng modyul sa kaparehong property tulad ng kasalukuyang modyul, o mag-navigate ulit sa package, at pindutin ang <b>New Module</br>.<br><br> Kung ikaw ay handa ng <b>Publish</b> o <b>Deploy</b> ang package naglalaman ng modyul ito, i-navigate ulit sa package upang magtanghal ng mga pag-andar nito. Maari mong i-publish at i-deploy ang mga package na naglalaman ng kahit isang modyul.',
            'labels' => 'Ang mga label sa isang pamantayang patlang pati na rin ang mga custom field ay maaring baguhin. Pagbabago ng patlang label ay hindi naka-apekto ng data sa mga patlang.',
        ),
        'listViewEditor' => array(
            'modify' => 'Mayroon mga tatlong hanay naka-displey sa kaliwa. Ang hanay na "Default" ay naglalaman ng mga patlang na naka-displey sa list view sa pamamagitan ng default, ang "Available" na hanay ay naglalaman ng custom na patlang na ang gumagamit ay maaring pumili upang gamitin para lumikha ng custom list view, at ang "Hidden" na hanay ay naglalaman na patlang na magagamit para sa iyo tulad ng admin upang magdagdag ng alinman sa default o Available column para gamitin sa mga tagagamit ngunit ang kasalukuyang ay hindi pinagana.',
            'savebtn' => 'Pagpipindut ng <b>Save</b> ay nagsi-save na lahat ng pagbabago at gawin itong aktibo.',
            'Hidden' => 'Mga tinatagong file ay ang mga patlang ay hindi kasalukuyang magagamit sa mga tagagamit paraa gamitin sa mga list view.',
            'Available' => 'Ang magagamit ng mga patlang ay ipinapakita sa pamamagitan ng default, ngunit ay maaring paganahin sa gumagamit.',
            'Default' => 'Ang mga default field ay naka-displey sa mga gumagamit na hindi pa nakalikha ng mga custom view setting.'
        ),

        'searchViewEditor' => array(
            'modify' => 'May dalawang hanay na naka-displey sa kaliwa. Ang "Default" na hanay ay naglalaman ng mga patlang na maaring i-displey sa search view, at ang "Hidden" na hanay ay naglalaman ng patlang na magagamit para sayo bilang isang admkn upang idadag sa view.',
            'savebtn' => 'Pagpipindut ng <b>Save and Deploy</b> ay i-save ang lahay ng pagbabago at gawin itong aktibo.',
            'Hidden' => 'Ang hidden fields ay mga patlang na hindi ipinapakita sa search view.',
            'Default' => 'Ang default fields ay ipapakita sa search view.'
        ),
        'layoutEditor' => array(
            'default' => 'Mayroong dalawang hanay naka-displey sa kaliwa. Ang kanang hanay, naka-label sa Current Layout o Layout Preview, ay kung saan maari kung baguhin ang modyul na layout. Ang kaliwang hanay, entitled Toolbox, ay naglalaman ng mga kapaki-kapakinabang elemento at mga kagamitan para gamitin sa pag-edit ng layout. <br/><br/> kung ang lugar ng layout ay nakapamagat sa Current Layout pagkatapos ikaw nagtratrabaho sa kopya ng layout na kasalukuyang ginamit para sa modyul para i-displey.<br/><br/>kung ito ay pinamagatang Layout Preview pagkatapos ikaw nag tatrabaho sa kopyang nilikha nang mas maaga sa pamamagitan ng pagpindut sa Save na pindutan, na maaring mayroong pagbabago mula sa bersyon nakita sa mga gumagamit sa modyul na ito.',
            'saveBtn' => 'Pagpipindut ng pindutan ito ay sine-save ang layout upang panatilihin ang iyong pagbabago. Kung ikaw ay babalik sa modyul nanito ikaw magsimula mula sa changed layout na ito. Gayunpaman, ang iyong layout ay hindi makikita sa mga gumagamit ng modyul hangang pinindut mo ang Save at ang pindutang Publih.',
            'publishBtn' => 'Pindutin ang pindutan ito upang i-deploy ang layout. Ito ay nangangahulugn na ang layout na ito ay unti-unting nakikita sa mga gumagamit ng modyul.',
            'toolbox' => 'Ang kagamitan ay naglalamn ng iba\'t ibang kapaki-pakinabang para sa pag-edit na mga layout, kasama na ang lugar ng basura, ang itninakdang karagdagang elemento at ang itnakdang magagamit na patlang. Kahit ano sa mga ito ay maaring i-drag at i-drop sa layout.',
            'panels' => 'Itong lugar ay nagpapakita kung paano ang iyong layout ay titingin sa mga gumagamit sa modyul na ito kung ito ay naka-deploy.<br/><br/>Maari mong ipahiwatig muli ang mga elemento tulad ng mga patlang, hilera at mga panel sa pamagitan ng pag-drag at pag-drop ng mga ito; pabura ng mga elementong ito sa pamamagitan ng pag-drag at pag-drop sa lugar ng basurs sa kagamitan; o magdagdag ng bagong elemento sa pamamagitan ng pg-drag nito mula sa kagamitan at pag-drop ng mga ito sa layout ng gustong posisyon.'
        ),
        'dropdownEditor' => array(
            'default' => 'Mayroong dalawang hanay naka-displey sa kaliwa. Ang kanang hanay, naka-label sa Current Layout o Layout Preview, ay kung saan maari kung baguhin ang modyul na layout. Ang kaliwang hanay, entitled Toolbox, ay naglalaman ng mga kapaki-kapakinabang elemento at mga kagamitan para gamitin sa pag-edit ng layout. <br/><br/> kung ang lugar ng layout ay nakapamagat sa Current Layout pagkatapos ikaw nagtratrabaho sa kopya ng layout na kasalukuyang ginamit para sa modyul para i-displey.<br/><br/>kung ito ay pinamagatang Layout Preview pagkatapos ikaw nag tatrabaho sa kopyang nilikha nang mas maaga sa pamamagitan ng pagpindut sa Save na pindutan, na maaring mayroong pagbabago mula sa bersyon nakita sa mga gumagamit sa modyul na ito.',
            'dropdownaddbtn' => 'Pagpipindut ng pindutan ito ay nagdaragdag ng bagong aytem sa dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Ang pag-customize na ginawa sa Studio sa loob ng ganitong pagkakataon ay maaring i-package at i-deploy sa ibang pagkakataon. <br><br>Magbigay ng <b>Package Name</b>. Maari kang magbigay ng <b>Author</b> at <b>Description</b>impornasyon para sa package.<br><br> Pumili ng modyul na naglalaman ng pag-customize sa export.( Ang mga modyul lamang ang naglalaman ng pag-customize at lilitaw para sayo upang pumili ka.)<br><br>Pindutin ang <b>Export</b> upang lumikha ng .zip fike para sa package na naglalaman ng mga pag-customize. Ang .zip file ay maaring i-upload sa ibang pagkakataon sa pamamagitan ng <b>Module Loader</b>.',
            'exportCustomBtn' => 'Pindutin ang <b>Export</b>upang lumikhs ng .zip fike para sa package naglalaman ng pag-customize na ninanais mong i-export.',
            'name' => 'Ang <b>Name</b> ng package ay ipapakita sa Module Loader pagkapos ang package ay na upload para sa paginstall ng studio.',
            'author' => 'Ang <b>Authore</b> ay ang pangalan ng entindad na lumikha ng package Ang May-Akda ay maaring isang indibidwal o kompanya.<br><br> Ang May-akda ay naka-displey sa Module Loader pagkatapos ang package ay na i-upload para sa pag-install ng Studio.',
            'description' => 'Ang <b>Description</b> ng isang package ay naka-displey sa Module Loader pagkatapos ang package ay na i-upload para sa pag-install ng Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Maligayang pagdating sa <b>Developer Tools</b> na lugar. <br/><br/>Gamitin ang mga kagamitan sa lugar na ito para lumikha at magmuno sa pamantayan at ang mga pasadyang module at mga patlang.',
            'studioBtn' => 'Gamitin ang <b>Studio</b> upang i-customize ang naka-install ng mga modyul sa pamamagitan ng pagbabago ng pagkasunod sunod ng patlang, pipili ng anong pstlanv ang magagamit at lumikha ng mga custom data na patlang.',
            'mbBtn' => 'Gamitin ang <b>Module Builder</b> upang lumikha ng mga bagong modyul.',
            'appBtn' => 'Gamitin anv Application Mode upang i-customize ang mga sumusubod na property sa isang programa, tulad ng gaano ka dami ang ulat ng TPS na naka-displey sa homepage',
            'backBtn' => 'Bumalik sa nakaraang hakbang.',
            'studioHelp' => 'Gamitin ang <b>Studio</b> upang i-customize ang naka-install ng mga modyul.',
            'moduleBtn' => 'Pindutin ang edit ng modyul na ito.',
            'moduleHelp' => 'Pumili ng modyul component na gusto mong i-edit',
            'fieldsBtn' => 'I-edit kung anong impormasyon ay nakalagay sa modyul sa pamamagitan ng pag-kontrol ng <b>Fields</b> sa modyul.<br/><br/> Maari kang mag-edit at lumikha ng mga pasadyang patlang dito.',
            'labelsBtn' => 'Pindutin ang <b>Save</b> upang i-save ang mga iyong custom label.',
            'layoutsBtn' => 'I-customize ang <b>Layouts</b> ng Edit, Detail, List at ang mga seaech view.',
            'subpanelBtn' => 'I-edit kung anong impormasyon ang nakita sa mga modyul subpanel na ito.',
            'layoutsHelp' => 'Piliin ang <b>Layout to edit</b>.<br/><br/>Upang baguhin ang layout na naglalaman ng mga dats field para sal pagpapasok ng data, pindutin ang <b>Edit View</b>.<br/><br/>Upang baguhin ang layout na nagpapakita ng data na pinasok sa mga patlang sa Edit View, pindutin ang <b>Detail View</b>.<br/><br/>Upang baguhin ang mga hanay na lilitaw sa listahan ng default, pindutin ang <b>ListView</b>.<br/><br/> Upang baguhin ang Basic at Advanced search form layout, pindutin ang <b>Search</b>.',
            'subpanelHelp' => 'Pumili ng <b>Subpanel</b>upang i-edit.',
            'searchHelp' => 'Pumili ng <b>Search</b> layout upang i-edit.',
            'newPackage' => 'I-click ang <b> Bagong Package </b> upang lumikha ng bagong package.',
            'mbHelp' => '<b>Maligayang pagdating sa Module Builder.</b><br/><br/>Gamitin ang <b>Module Builder</b> upang lumikha ng mga package naglalaman ng mga pasadyang modyul na nakabase sa pamantayan o mga custom na kagamitan.<br/><br/>Upang magsimula, pindutin ang <b>New Package</b>upang lumikha ng bagong package, o pumili ng package upang i-edit.<br/><br/>Ang <b>Package</b>gawa bilang isang lalagyan para sa pasadyang modyul, lahat ng mga parte ay kasama sa isang proyekto. Ang package ay maaring maglaman ng isa o higit pang custom modyul na naiuugnay sa bawat iss o sa mga modyul sa aplikasyon.<br/><br/>Halimbawa: Gusto mong lumikha ng package na naglalaman ng isang custom ng packsge na naglalaman ng maraming bagong modyul na trabaho ng sabay bilang isang proyekto at nauugnay ds bawat isa at sa mga modyul sa aplikasyon.',
            'exportBtn' => 'Pindutin ang <b>Export Customizations</b> upang lumikha ng package naglalaman ng pag-customize na ginawa sa Studio para sa tiyak na modyul.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Dropdown editor',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Module builder',
    'LBL_STUDIO' => 'Ang studyo',
    'LBL_DROPDOWNEDITOR' => 'Dropdown editor',
    'LBL_DEVELOPER_TOOLS' => 'Mga kagamitan ng developer',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Listahan ng package',
    'LBL_HOME' => 'Home',
    'LBL_NONE' => '-Wala-',
    'LBL_DEPLOYE_COMPLETE' => 'Matagumpay na i-deploy',
    'LBL_DEPLOY_FAILED' => 'May maling naganap sa panahon ng proseo ng pag-deploy, ang iyong package ay hindi naka-install ng maayos',
    'LBL_AVAILABLE_SUBPANELS' => 'Mga magaganit na subpanel',
    'LBL_ADVANCED' => 'Ang advans',
    'LBL_ADVANCED_SEARCH' => 'Advanced na Filter',
    'LBL_BASIC' => 'Pangunahin',
    'LBL_BASIC_SEARCH' => 'Mabilis na filter',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Pera',
    'LBL_DASHLET' => 'SuiteCRM dashlet',
    'LBL_DASHLETLISTVIEW' => 'ListView ng SuiteCRM Dashlet',
    'LBL_POPUP' => 'Popup View',
    'LBL_POPUPLISTVIEW' => 'Popop ListView',
    'LBL_POPUPSEARCH' => 'Paghahanap ng Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Paghahanap ng SuiteCRM Dashlet',
    'LBL_DETAILVIEW' => 'Tingnan ang detalye',
    'LBL_DROP_HERE' => '[Dito i-drop]',
    'LBL_EDIT' => 'I-edit',
    'LBL_EDIT_LAYOUT' => 'Baguhin ang layout',
    'LBL_EDIT_FIELDS' => 'I-edit ang nga patlang',
    'LBL_EDITVIEW' => 'I-edit ang mga View',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'Mga patlang',
    'LBL_FAILED_TO_SAVE' => 'Nabigong i-save',
    'LBL_FAILED_PUBLISHED' => 'Nabigong i-publish',
    'LBL_HOMEPAGE_PREFIX' => 'Aking',
    'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
    'LBL_LAYOUTS' => 'Mga Layout',
    'LBL_LISTVIEW' => 'Tumanaw ng listahan',
    'LBL_MODULES' => 'Mga modyul',
    'LBL_MODULE_TITLE' => 'Ang studyo',
    'LBL_NEW_PACKAGE' => 'Bagong package',
    'LBL_NEW_PANEL' => 'Bagong Panel',
    'LBL_NEW_ROW' => 'Bagong hilera',
    'LBL_PACKAGE_DELETED' => 'Binura ang package',
    'LBL_PUBLISHING' => 'Ipinapalabas...',
    'LBL_PUBLISHED' => 'Napalabas',
    'LBL_SELECT_FILE' => 'Pumili ng file',
    'LBL_SUBPANELS' => 'Mga subpanel',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Pamagat: ',
    'LBL_SEARCH_FORMS' => 'I-filter',
    'LBL_SEARCH' => 'Paghahanap',
    'LBL_SEARCH_BUTTON' => 'Paghahanap',
    'LBL_FILTER' => 'I-filter',
    'LBL_TOOLBOX' => 'Ang kahon ng mga gamit',
    'LBL_QUICKCREATE' => 'Lumikha ng mabilis',
    'LBL_EDIT_DROPDOWNS' => 'I-edit ang Global Dropdown',
    'LBL_ADD_DROPDOWN' => 'Magdagdag ng bagong Global Dropdown',
    'LBL_BLANK' => '-blangko-',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TABDEF_TYPE' => 'Uri ng displey',
    'LBL_TABDEF_TYPE_HELP' => 'Piliin kung paano itong seksyon dapat ipakita. Iitong opsyon ay makakaapekto kung pinagana mo ang mga tab sa view na ito.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Pumili ng Panel na magkaroon ng panel displey sa loob ng view na layout. Piliin ang Tab upang magkaroon ng panel na ito na ipinakita sa loob nag nagkahiwalay na tab at layout. Kung ang Tab ay tinukoy para sa panel, kasunod ang mga panel na itinakdang i-displey tulad ng panel ay ipinakita sa loob ng tab.<br/> Ang bagong Tab ay magsimula para sa susunkd na panel kung saan ang susunod na Tab ay mapili. Kung ang Tab ay naoili para panel naunang naoiling panel, ang unang panel ay kinakailangan maging Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Pagbagsak',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Pumili upang gawing state default ang panel na itong gumuho.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Ang pangalan',
    'LBL_DROPDOWN_LANGUAGE' => 'Lengwahe',
    'LBL_DROPDOWN_ITEMS' => 'Maglista ng mga aytem',
    'LBL_DROPDOWN_ITEM_NAME' => 'Pangalan ng aytem',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Magpakita ng label',
    'LBL_SYNC_TO_DETAILVIEW' => 'I-sync sa Detail view',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Piliin ang opsyon na ito upang i-sync ito sa EditVoew layout sa nararapt na DetailView layout. Ang mga Field at ang paglalagay ng oatlang sa Edit View<br> ay naka-sync at i-save sa DetailView automatikong sa pagpindut ng Save & Deploy sa EditView.<br> Ang layout ay hindi magagawang gawin sa DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ang itong DetailView ay naka-sync sa nararapat na EditView.<br> Ang mga ostlang at paglalagyan ng patlang sa DetailView na ito ay sinasalamin ang mga patlang at paglalagyan ng patlang sa EditView.<br> Ang pagbabago sa DetailView sy hindi pwedng mai-save o ma-deploy sa pahinang ito. Gumawa ng oagbabago o i-un-sync sng mga layout sa EditView. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopyahin mula sa EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Ang mga halaga ay kinakailangan sa dalawang ayten ng Pangalan at Pagpapakita ng label. Upang magdagdag ng blankong aytem, pindutin ang Add na walang ipinasok na kahit anong hakaa para sa aytem ng Pangalan at ang Display Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Ang susi ay umiiral na sa listahan',
    'LBL_NO_SAVE_ACTION' => 'Hindi nahanao ang i-save ang askyon sa tingin na ito.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio 2:Lokasyon ng establishmento: masama ang nabuong dokumento',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modyul',
    'LBL_LHS_MODULE' => 'Pangunahing modyul',
    'LBL_CUSTOM_RELATIONSHIPS' => '*, mga relasyon ns nilikha sa Studio',
    'LBL_RELATIONSHIPS' => 'Mga relasyon',
    'LBL_RELATIONSHIP_EDIT' => 'I-edit ang relasyon',
    'LBL_REL_NAME' => 'Ang pangalan',
    'LBL_REL_LABEL' => 'Ang label',
    'LBL_REL_TYPE' => 'Uri',
    'LBL_RHS_MODULE' => 'Nauugnay na modyul',
    'LBL_NO_RELS' => 'Walang relasyon',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Opsyonal na kondisyon',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Hanay',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Halaga',
    'LBL_SUBPANEL_FROM' => 'Subpane mula sa',
    'LBL_RELATIONSHIP_ONLY' => 'Walang nakita ng mga elemento na nilikha para sa relasyong ito tulad ng mayroong pre-exist na nakita sa relasyon sa pagitan ng dalawang modyul.',
    'LBL_ONETOONE' => 'Isa sa Isa',
    'LBL_ONETOMANY' => 'Isa sa marami',
    'LBL_MANYTOONE' => 'Marami sa Isa',
    'LBL_MANYTOMANY' => 'Marami sa Marami',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Pumili ng modyul upang i-edit.',
    'LBL_QUESTION_LAYOUT' => 'Pumili ng layout upang i-edit.',
    'LBL_QUESTION_SUBPANEL' => 'Pumili ng subpanel upang i-edit.',
    'LBL_QUESTION_SEARCH' => 'Pumili ng filter layout upang i-edit.',
    'LBL_QUESTION_MODULE' => 'Pumili ng modyul na component upang i-edit.',
    'LBL_QUESTION_PACKAGE' => 'Pumili ng package upang i-edit, o lumikha ng bagong package.',
    'LBL_QUESTION_EDITOR' => 'Pumili ng kagamitan.',
    'LBL_QUESTION_DASHLET' => 'Pumili ng dashlet layout upang i-edit.',
    'LBL_QUESTION_POPUP' => 'Pumili ng popup layout upang i-edit.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Ang pangalan',
    'LBL_LABELS' => 'Mga label',
    'LBL_MASS_UPDATE' => 'Ang Mass ay i-Update',
    'LBL_DEFAULT_VALUE' => 'I-default ang halaga',
    'LBL_REQUIRED' => 'Kinakailangan',
    'LBL_DATA_TYPE' => 'Uri',
    'LBL_HCUSTOM' => 'CUSTOM',
    'LBL_HDEFAULT' => 'DEFAULT',
    'LBL_LANGUAGE' => 'Linggwahe:',
    'LBL_CUSTOM_FIELDS' => '* patlang nilikha sa studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'I-edit ang mga label',
    'LBL_SECTION_PACKAGES' => 'Mga package',
    'LBL_SECTION_PACKAGE' => 'Package',
    'LBL_SECTION_MODULES' => 'Mga modyul',
    'LBL_SECTION_DROPDOWNS' => 'Mga dropdown',
    'LBL_SECTION_PROPERTIES' => 'Mga pagmamay-ari',
    'LBL_SECTION_DROPDOWNED' => 'I-edit ang dropdown',
    'LBL_SECTION_HELP' => 'Tulong',
    'LBL_SECTION_MAIN' => 'Pangunahin',
    'LBL_SECTION_FIELDEDITOR' => 'I-edit ang patlang',
    'LBL_SECTION_DEPLOY' => 'Lumawak',
    'LBL_SECTION_MODULE' => 'Modyul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Default',
    'LBL_HIDDEN' => 'Nakatago',
    'LBL_AVAILABLE' => 'Mayroon',
    'LBL_LISTVIEW_DESCRIPTION' => 'Mayroong tatlong hanay naka-displey sa ibaba. Ang <b>Default</b> hanay ay naglalaman ng mga patlang na ipinapakita sa list view sa pamamagitan ng default. Ang <b>Additional</b>hanay ay naglalaman ng mga patlang na ang gumagamit ay maaring pumili na gamitin para sa paglikha ng custom view. Ang <b>Available</b>hanay ay ipinapakita sng nga patlang na magagamit para sayo bilang isang admin upang idagdag sa Default o karagdagang mga hanay na gagamitin para sa gumagamit.',
    'LBL_LISTVIEW_EDIT' => 'List View Editor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'I-preview',
    'LBL_MB_RESTORE' => 'Ibalik sa dati',
    'LBL_MB_DELETE' => 'Tanggalin',
    'LBL_MB_DEFAULT_LAYOUT' => 'I-default ang layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Idagdag',
    'LBL_BTN_SAVE' => 'I-seyb',
    'LBL_BTN_SAVE_CHANGES' => 'I-save ang mga pagbabago',
    'LBL_BTN_DONT_SAVE' => 'Itapona ang pagbabago',
    'LBL_BTN_CANCEL' => 'Kanselahin',
    'LBL_BTN_CLOSE' => 'Ang pagsasara',
    'LBL_BTN_SAVEPUBLISH' => 'I-save at i-deploy',
    'LBL_BTN_CLONE' => 'Clone',
    'LBL_BTN_ADDROWS' => 'Magdagdag ng mga hilera',
    'LBL_BTN_ADDFIELD' => 'Magdagdag ng patlang',
    'LBL_BTN_ADDDROPDOWN' => 'Magdagdag ng dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Ayusin pataas',
    'LBL_BTN_SORT_DESCENDING' => 'Ayusin pababa',
    'LBL_BTN_EDLABELS' => 'I-edit ang mga label',
    'LBL_BTN_UNDO' => 'Magbalik sa dati',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Magdagdag ng pasadyang patlang',
    'LBL_BTN_EXPORT' => 'I-export ang pag-customize',
    'LBL_BTN_DUPLICATE' => 'Kopyahin',
    'LBL_BTN_PUBLISH' => 'I-publish',
    'LBL_BTN_DEPLOY' => 'Lumawak',
    'LBL_BTN_EXP' => 'I-eksport',
    'LBL_BTN_DELETE' => 'Tanggalin',
    'LBL_BTN_VIEW_LAYOUTS' => 'Tingnan ang mga layout',
    'LBL_BTN_VIEW_FIELDS' => 'Tingnan ang nga patlang',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Ang mga relasyon ay tignan',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Magdagdag ng relasyon',
    'LBL_BTN_RENAME_MODULE' => 'Ibahin ang pangalan ng modyul',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'May mali - ang patlang ay umiiral na',
    'ERROR_INVALID_KEY_VALUE' => "May mali: Hindi balido ang halaga ng susi:[']",
    'ERROR_NO_HISTORY' => 'Walang kasaysayan mga file natagpuan',
    'ERROR_MINIMUM_FIELDS' => 'Ang layout ay dapat naglalaman ng kahit isang patlang',
    'ERROR_GENERIC_TITLE' => 'Isang mali Ang Naganap',
    'ERROR_REQUIRED_FIELDS' => 'Sigurado ka ba na ninais mong magpatuloy? Ang mga sumusnod ay kinakailangang patlang ay nawawala mula sa layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pangalan ng package:',
    'LBL_MODULE_NAME' => 'Pangalan ng modyul:',
    'LBL_AUTHOR' => 'Awtor:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_KEY' => 'Susi:',
    'LBL_ADD_README' => ' Basahinako',
    'LBL_LAST_MODIFIED' => 'Huling binago:',
    'LBL_NEW_MODULE' => 'Bagong modyul',
    'LBL_LABEL' => 'Label:',
    'LBL_LABEL_TITLE' => 'Ang label',
    'LBL_WIDTH' => 'Lapad',
    'LBL_PACKAGE' => 'Package:',
    'LBL_TYPE' => 'Uri:',
    'LBL_NAV_TAB' => 'Nabigasyon Tab',
    'LBL_CREATE' => 'Lumikha',
    'LBL_LIST' => 'Listahan',
    'LBL_VIEW' => 'Tingnan',
    'LBL_HISTORY' => 'Tingnan ang kasaysayan',
    'LBL_RESTORE_DEFAULT' => 'Ibalik ang default',
    'LBL_ACTIVITIES' => 'Mga ginagawa',
    'LBL_NEW' => 'Bago',
    'LBL_TYPE_BASIC' => 'pangunahin',
    'LBL_TYPE_COMPANY' => 'kompanya',
    'LBL_TYPE_PERSON' => 'tao',
    'LBL_TYPE_ISSUE' => 'isyu',
    'LBL_TYPE_SALE' => 'benta',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'Ito ay anv subpanek na ipanapakita sa iyong modyul',
    'LBL_MSUB' => 'Ito ang subpanel sa iyong modyul nagbibigay ng nauugnay ng modyul para ipakita',
    'LBL_MB_IMPORTABLE' => 'Pag-iimport',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] ay nabura',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'I-export ang pag-customize',
    'LBL_EC_NAME' => 'Pangalan ng package:',
    'LBL_EC_AUTHOR' => 'Awtor:',
    'LBL_EC_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_EC_CHECKERROR' => 'Mangayring pumili ng modyul.',
    'LBL_EC_CUSTOMFIELD' => 'naka-customize na (mga) patlang',
    'LBL_EC_CUSTOMLAYOUT' => 'naka-customized na (mga) layout',
    'LBL_EC_NOCUSTOM' => 'Walang modyul ang na i-customize.',
    'LBL_EC_EMPTYCUSTOM' => 'walang lamang mga pag-customzize.',
    'LBL_EC_EXPORTBTN' => 'I-eksport',
    'LBL_MODULE_DEPLOYED' => 'Ang modyul na i-deply na.',
    'LBL_UNDEFINED' => 'di-mapaliwanag',
    'LBL_EC_VIEWS' => 'naka-customize ang (mga) view',
    'LBL_EC_SUITEFEEDS' => 'naka-customize ang (mga) Feed',
    'LBL_EC_DASHLETS' => 'naka-customized ang (mga) dashlet',
    'LBL_EC_CSS' => 'naka-customize ang(mgs) css',
    'LBL_EC_TPLS' => 'naka-customize ang (mga) tpl',
    'LBL_EC_IMAGES' => 'naka-customized ang (mga) larawan',
    'LBL_EC_JS' => 'naka-cusomized ang (mga) js',
    'LBL_EC_QTIP' => 'naka-customized ang (mga) qtip',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Nabigong ibalik ang data',
    'LBL_AJAX_LOADING' => 'Kumakarga...',
    'LBL_AJAX_DELETING' => 'Pagbubura...',
    'LBL_AJAX_BUILDPROGRESS' => 'Bumuo ng progreso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Isinasagawa ang pag-deploy...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resulta',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Ang operasyon ito ay matagumpay naikompleto',
    'LBL_AJAX_LOADING_TITLE' => 'Isinasagawa...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Mangyaring maghintay, naglo-load...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sigurado ka bang na gusro mong alisin ang package na ito? Ito ay permanenteng buburahin ang lahat ng mga file naguugnay sa package na ito.',
    'LBL_JS_REMOVE_MODULE' => 'Sigurado ka bang na gustong mo alisin ang modyul na ito? Ito ay permanenteng buburahin ang lahat ng mga file naguugnay sa modyul na ito.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Kahit anong mga pag-customize na ginawa mo sa Studio ay mapapatungan kapag ang modyul na ay naka-re-deployed. Sigurado ka ba na gusto mong magpatuloy?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Nagde-deploy ng package',
    'LBL_JS_VALIDATE_NAME' => 'Pangalan - Dapat naka-alpahanumeric, magsimula sa isang letra at naglalaman ng walang espasyo.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Ang pangalan ng packahe ay umiiral na',
    'LBL_JS_VALIDATE_KEY' => 'Susi- Dapar ay naka-alphanumeric, magsimula sa isang letra at naglalaman ng walang espasyo.',
    'LBL_JS_VALIDATE_LABEL' => 'Mangyaring ipasok ang label na gagamitin bilang isang Display Name para sa modyul na ito',
    'LBL_JS_VALIDATE_TYPE' => 'Mangyaring pumili ng uri ng modyul na ninais mong buohin mula sa ibabaw ng listahan',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - mangyaring magdagdag ng label na ipinapakita sa ibabaw ng subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Pagbubura ng custom field na ito ay tatangalin ng pareho ng pasadyang patlanh at ang lahat ng data nauugnay sa custom field ng databese. Ang patlang ay habang-buhay na hindi lilitaw sa kahit anong modyul ng mga layout.\\n\\nNinais mo bang magpatuloy?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sigurado ka ba ninanais mong burahin ang relasyong ito?',
    'LBL_CONFIRM_DONT_SAVE' => 'Ang mga pagbabago ay naisagawa na mula noon huling nai-save mo. Gusto mo bang i-save?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'I-save ang mga pagbabago?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Ang data ay baka maputol at ito ay hindi ito maaring bawiin, sigurado ka ba na gusto mong magpatuloy?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Piliin ang nararapat na uri ng data na nakabase sa uri ng data na ipinasok sa patlang.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'I-reset',
    'LBL_RESET_MODULE' => 'I-reset ang modyul',
    'LBL_REMOVE_CUSTOM' => 'Tanggalin ang pagpapasadya',
    'LBL_CLEAR_RELATIONSHIPS' => 'Malinaw na mga relasyon',
    'LBL_RESET_LABELS' => 'I-reset ang mga label',
    'LBL_RESET_LAYOUTS' => 'I-reset ang mga layout',
    'LBL_REMOVE_FIELDS' => 'Tanggalin ang mga pasadyang patlang',
    'LBL_CLEAR_EXTENSIONS' => 'Malinaw na mga ekstensyon',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => ' kasaysayan',

    'fieldTypes' => array(
        'varchar' => 'TextField',
        'int' => 'Numero',
        'float' => 'Lumutang',
        'bool' => 'Checkbox',
        'enum' => 'Dropdown',
        'dynamicenum' => 'Dynamic Dropdown',
        'multienum' => 'Maraming pagpipilian',
        'date' => 'Petsa',
        'phone' => 'Telepono',
        'currency' => 'Pera',
        'html' => 'HTML',
        'radioenum' => 'Radyo',
        'relate' => 'Mag-ugnay',
        'address' => 'Kinaroroonang pook',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datetime',
        'decimal' => 'Decimal',
        'image' => 'Larawan',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Madalas ginamit ang mga label",
        "all" => "Lahat ng mga label",
    ),

    'parent' => 'Flex Relate',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Pinili mo ang aytem na ito para sa pag-alis mula sa listahan ng dropdown. Kahit anong ma dropdown na patlang gamit ang itong listahan ng mga aytem na ito tulad ng halaga ay hindi na ipapakita ang halaga, at ang halaga ay hindi na magagawang mapili mula sa mga patlang ng dropdown. Sigurado ka bang gusto mong magpatuloy?",

    'LBL_ALL_MODULES' => 'Lahat ng mga modyul',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relates {1} ID)',
);
