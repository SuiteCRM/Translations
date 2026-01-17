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
    'LBL_LOADING' => 'Nag-lo-load' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Itago ang mga pagpipilian' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Burahin' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Magbigay ng <b>Pangalan</b> para sa package. Ang pangalan na ipasok mo ay dapay naka alphanumeric at naglalaman ng walang espayo. (Halimbawa: HR_Management)<br/><br/> Maari ka magbigay ng <b>May-Akda</b> at <b>paglalarawan</b> ng impormasyon para sa package.<br/><br/>Pindutin ang <b>Save</b> para likhain ang package.',
            'modify' => 'Ang mga pagmamay-ari at posibleng aksyon para sa <b>Package</b> ay lilitaw dito.<br><br> Maari mong baguhin ang <b>Pangalan</b>,<b>May-Akda</b> at <b>paglalarawan</b> sa isang package, pati na rin matanaw at ma-customize ang lahat ng mga mudyol na naglalaman sa loob ng package.<br><br>Pindutin ang <br>Bagong modyul </b> upang makalikha ng modyul para sa package.<br><br>kung ang package ay naglalaman na kahit isang modyul, maari mong <b>I-publish</b> at <b>i-deploy</b> ang package, pati na rin ang <b>Pag-export</b> ng mga pasadyang gawa sa package.',
            'name' => 'Ito ang <b>Pangalan</b>ng kasalukuyanh package.<br/><br/>Ang pangalan ng iyong ipinasok ay dapat naka-alphanumeric, magsimula sa isa ng letra at naglalaman ng walang espayo. (Halimbawa: HR_Management)',
            'author' => 'Ito ang <b>May-akda</b> na ipinapakita sa panahon ng installation tulad ng pangalan na entidad na nilikha ng package.<br><br> Ang may-akda maari maging indibidwal o isang kompanya.',
            'description' => 'Ito ang <b>Paglalarawan</b> sa isang package na ipinapakita sa panahon ng installation.',
            'publishbtn' => 'Pindutin ang <b>I-publish</b> upang i-save ang ipinasok na impormasyon at para makalikha ng .zil file ng bersyon na installable sa package.<br><br>Gumamit <b> ng loader</b> upang i-upload ang file na .zip at i-install ang package.',
            'deploybtn' => 'Pindutin ang <b>Deplo</b> upang ma i-save ang lahat ng impormasyon at para ma-i-save ang package, kabilang ang mga lahat na modyul, sa kasulukuyang halimbawa.',
            'duplicatebtn' => 'Pindutin <b>Duplicate</b> upang kopyahin ang mga nilalaman sa bagong package at para ipakita ang bagong package.<br/><br/> Para sa bagong package, ang bagong pangalan ay automatikong mabubuo sa pamamagitan ng paglalapit ng numero sa katapusan nang pangalan ng package na gagamitin sa paglikha ng bago. Maari mog baguhin ang pangalan ng baging package sa pamamagitan pagpasok ng bagong <b>Pangalan</b> at pindutin ang <b>Save</b>.',
            'exportbtn' => 'Pindutin ang <b>Export</b>upang lumikha ng .zip file na naglalaman ng mga pag-customize na ginawa sa package.<br><br> Ang nabuong file ay hindi installable na bersyon sa package.<br><br> Gumamit ng <b>Module Loader</b> upang i-import ang .zip file at upang magkaroon ng package, kasama na ang mga pag-customize, na lumitaw sa Module Builder.',
            'deletebtn' => 'Pindutin ang <b>Delete</b> upang tanggalin ang package at lahat ng mga files ay kaugnay sa mga package na ito.',
            'savebtn' => 'Pindutin ang <b>Save</b> upang i save ang mga datang ipinasok na kaugnay sa package na ito.',
            'existing_module' => 'Pindutin ang <b>Module</b> na icon upang i-edit ang mga ari-arian at pasadyang patlang, mga relasyon at layout ay nauugnay sa modyul.',
            'new_module' => 'Pindutin ang <b>New Module</b> upang makagawa ng bagong modyul para sa package na ito.',
            'key' => 'Itong 5-letra, alpanumeric ay <b>Key</b> ay gagamitin sa mga direktoryong prefix, mga klase ng pangalan at mga talahanayan ng databese sa lahat ng mga modyul sa kasulukuyang package.<br><br> Ang susi ay ginamit sa pagsisikap upang makamit ang natatanging pangalan ng talahanayan.',
            'readme' => 'Pindutin upang idadag ang tekstong <b>Readme</b> sa teskstong ito.<br><br>Ang Readme ay magagamit sa tamang oras ng installation.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Magbigay ng <b>Name</b> para sa modyul. Ang <b>Label</b> na iyong binigag ay liliyaw sa navigation tab.<br/><br/> Pumili upang ipakita ang navigation tab para sa modyul sa pamamagitan ng pagsusuri ng <b>Navigation Tab</b> checkbox.<br/><br/>Pagkatapos pumili ng uri ng modyul na gusto mong lumikha.<br/><br/>Pumili ng uri ng template. Bawat isang template ay naglalaman ng tiyak na itinakda na patlang, pati na rin ang mga pre-defined layout, upang gamitin sa pagbabase sa iyong modyul.<br/><br/>Pindutin ang </b>Save</b> upang likhain ang modyul.',
            'modify' => 'Maari mong baguhin ang modyul ng ari-arian o pag-customize ng <b>Fields</b>, <b>Relationships</b> at <b>Layouts</b> kaugnay sa modyul.',
            'importable' => 'Pagsusuri ng <b>Importable</b> checkbox ay paganahin ang pag-inport ng modyul na ito.<br><br> Ang link sa Import wizard ay lilitaw sa mga shortcut panel sa modyul. Ang Import Wizard facilidad ay nag-i-import ng impormasyon mula sa labas ng pinagmulan sa pasadyang modyul.',
            'team_security' => 'Pagsusuri ng <b>Team Security</b> checkbox ay pinagana ang koponan ng seguridad para sa modyul na ito.<br/><br/> kung ang koponon ng seguridad ay pinagana. ang Koponan ng napaling larangan ay lilitaw sa loob ng mga rekord sa modyul ',
            'reportable' => 'Pagsusuri ng itong box ay pinahintulutan ang modyul na ito na magpatakbo ng mga ulat laban sa mga ito.',
            'assignable' => 'Pagsusuti ng box ns ito ay pinahintulutan ang rekord sa modyul na ito na itinalaga sa napiling gumagamit.',
            'has_tab' => 'Pagsusuri ng <b>Navigation Tab</b> ay nagbibigay ng navigation tab para ss modyul.',
            'acl' => 'Pagsusuri sa box na ito ay paganahin ang Access Controls sa modyul na ito, kasama na dito ang Field Level Security.',
            'studio' => 'Pagsusuri ng kahon na ito ay pinahintulutan ang mga tagapangasiwa para i-customize ang modyul na ito sa loob ng Studio.',
            'audit' => 'Pagsusuri ng kahon na ito ay paganahin ang Auditing para sa modyul na ito. Mga pagbabago sa mga ilang larangan ay maitatala kaya ang mga tagapangasiwa ay maaaring suriin ang pagbabago ng nakaraan.',
            'viewfieldsbtn' => 'Pindutin ang <b>View Fields</b> upang i-rebyu ang mga nauugnay na larangansa modyul at upang likhain at i-edit ang mga custom ng larangan.',
            'viewrelsbtn' => 'Pindutin ang <b>View Relationships</b> uoang masuri ang mga nauugnay na relasyon sa modyul na ito at upsng likhain ang bagong relasyon.',
            'viewlayoutsbtn' => 'Pindutin ang <b>View Layout</b> upang masuri ang mga kayout para sa modyul at upang i-customize ang kaayusan ng larangan sa loob ng mga layout.',
            'duplicatebtn' => 'Pindutin ang <b>Duplicate</b> upang kopyahin ang mga ari-arian ng modyul sa bagong modyul at upang ipakita ang bagong modyul.<br/><br/>Para sa bagong modyul, ang bagong pangalan ay automatikong bubuo sa pamamagitan ng pagsusunod ng numero sa katapusan ng pangalan sa mdyul na ginamit upang lumikha ng bago.',
            'deletebtn' => 'Pindutin ang <b>Delete</b> upang burahin ang module na ito.',
            'name' => 'Ito ang <b>Name</b> sa kasalukuyang modyul.<br/><br/>Ang pangalan ay dapat naka-alphanumeric at dapat nagsimula sa letra at naglalaman ng walang espasyo. (Halimbawa: HR_Management)',
            'label' => 'Ito ay ang <b>Labe</b> ay lilitaw sa navigation tab para sa modyul. ',
            'savebtn' => 'Pindutin ang <b>Save</b> upang i-save ang lahat na pinasok kaugnay sa modyul.',
            'type_basic' => 'Ang <b>Basic</b> uri ng templaye ay nagbibigay ng mga pangunahing larangan, tulad ng pangalan, itinalaga kay, Koponan, Petsa ng paggawa at mga paglalarawan ng larangan.',
            'type_company' => 'Ang uri ng template <b>Company</b> ay organisasyong-mga tinutukoy na laranhan, tulad ng pangalan ng. kompanya, industriya at Billing address.<br/><br/> Gamitin ang template upang likhain ang mga modyul na katulad sa standard ng nga akwant modyul.',
            'type_issue' => 'Ang <b>issue</b> uri ng template ay nagbibigay ng kaso at mga larangan ng bug-specific, tulad ng Numero, Estado at prioridad at paglalarawan.<br/><br/> Gamitin ang template na ito upang gumawa ng mga modyul na katulad sa mga standard ns kaso at mga bug modyul.',
            'type_person' => 'Ang <b>Person</b> ay uri ng template nagbibigay ng mga indibidwal/tiyak na larangan, tulad ng Salutation, Titulo, Pangalan, Lugar, at Numero ng telepono. <br/><br/> Gamitin ang template na ito upang likhain ang mga modyul na katulad sa mga Standard Contact at Leads module.',
            'type_sale' => 'Ang <b>Sale</b> uri ng template ay magbibigay oportunidad ng mga tiyak na larangan, tulad ng Lead Source, Stage Amount at Probability. <br/><br/> Gamitin ang template na ito upang likhain ang mga modyul na katulad sa mga pamantayang oportunidad modyul.',
            'type_file' => 'Ang <b>File</b> template ay nagbibigay ng Dokumentong tiyak na mga larangan, tulad ng File Name, Document Type at Publish Date. <br><br> Gamitin ang template na ito upang likhain ang mga modyul na katulad sa pamantayang mga dokumentong modyul.',

        ),
        'dropdowns' => array(
            'default' => 'Lahat ng <b>Dropdowns</b> para sa aplikasyong nakalista dito.<br><br>Ang dropsdown maaring magamit para sa larangan ng dropdown sa kahit anong modyul.<br><br> upang makagawa ng mga pagbabago sa umiiral na dropdown, pindutan ang pangalan sa dropdown.<br><br>Pindutin <b> Add Dropdown</b> upang likhain ang bagong dropwdown.',
            'editdropdown' => 'Mga listahan ng dropdown ay maaring gamitin para sa pamantayao o pasadyang dropdown ng mga larangan sa kahit anong modyul. <br><b>Magbigay ng <b Name</b> para sa listahan ng dropwdown.<br><br>kung kahit anong linggwahe ang naka-install sa aplikasyon, maari kang pumili ng <b>Language</b> upang gamitin para sa listahan ng mga aytem<br><br> Sa <b>Item Name</b> ng patlang, magbigay ng pangalan para sa opsyon ng listahan sa dropdown. Itong pangalan ay hindi lilitaw sa listahan ng dropwdown kung makikita iyo sa mga gumagamit.<br><br>Sa <b>Display Label</b> patlang, magbigay ng palatandaan maging makita ang gumagamit.<br><br>Pagkatapos magbigay na pangalan ng aytem at ipakita ang label, pindutin <b,>Add</b> para idagdag ang aytem sa listahan ng dropdown.<br><br>Upang muling ayusin ang mga aytem sa listahan, i-drag at i-drop ang mga aytem sa mga nais na posisyon.<br><br> Upang i-edit ang aytem ipakita ang label ng idang aytem, pindutin ang <b> Edit icon</b>, at ipasok ang bagong label. Para sa pagbura ng item mula sa listahan ng dropwdown, pindutin ang <b> Delete icon</b>.<br><br> Upang ibalik ang isang pagbabagong ginawa para ipakita ang label, pindutin ang <b>Undo</b>. Upang i-redo ang pagbabago na hindi natapos, pindutin ang <b>Redo</b>.<br><br>Pundutin ang <b>Save</b> para i-save ang dropwdown ng listahan.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Lahat ng mga nasa patlang na pwedeng ipakita sa <b>Subpanel</b> lumilitaw dito.<br><br>Ang <b>Default</b> na haligi ay naglalaman sa mga patlang Na pwedeng ipakita sa Subpanel.<br/><br/>Ang <b>Hidden</b>na halaga ay naglalaman sa mga patlang n pwedeng idagdag sa default na haligi.'
        ,
            'savebtn' => 'Pindutin ang <b>Save & Deploy</b> upang i-save ang mga pagbabago nagawa mo at upang gawin aktibo ang nakapaloob sa modyul.',
            'historyBtn' => 'Pindutin ang <b>View History</b> upang tanawin at ibalik ang nakaraang na-save na layout mula sa kasaysayan.',
            'historyDefault' => 'Pindutin ang <b>Restore Default</b> upang ibalik ang tanaw sa orihinal na layout.',
            'Hidden' => 'Ang <b>Hidden</b> mga patlang huwag lumitaw sa subpanel.',
            'Default' => '<b>Default</b> mga patlang ay lilitaw sa subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Lahat ng mga patlang na maaring ipakita sa <b>ListViee</b> ay lilitaw dito.<br><br>Ang <b>Default</b> na hanay ay naglalaman ng mga patlang naipakita sa ListView sa pamamagitan ng default.<br/><br/> Ang <b>Avilable</b> na hanay ay naglalaman ng mga patlang na ang isang gumagamit ay maaaring maghanap upang likhain ang pasadyang Listview.<br/><br/>Ang <b>Hidden</b> na hanay ay naglalamn ng mga patlang na maaring idagdag sa default o Available Column.'
        ,
            'savebtn' => 'Pindutin ang <b>Save & Deploy</b> upang i-save ang mga pagbabago nagawa mo at upang gawin aktibo ang nakapaloob sa modyul.',
            'historyBtn' => 'Pindutin ang <b>View History</b> para matanaw at maibalik ang nakaraang na i-save na layout mula sa kasaysayan.<br><br><b>Restore</b> sa loob ng <b>View History</b>para ibalik ang paglalagay ng patlang sa loob ng nakaraang na i-save na layout. Upang baguhin ang tatak na patlang, pindutin ang Edit icon sunod sa bawat patlang.',
            'historyDefault' => 'Pindutin ang <b>Restore default</b>para ibalik ang tingin ng layout sa orihinal.<br><br><br>Restore Default</b> ibabalik lamang nito ang patlang sa pagkakalagay doon sa orihinal na layout. Para baguhin ang mga label ng patlang, pindutin ang edit na icon sunod sa mga bawat patlang.',
            'Hidden' => 'Ang <b>Hidden</b> ng mga patlang hindi kasalukuyang magagamit sa mga gumagamit upang makita ang ListViews.',
            'Available' => 'Ang <b>Available</b> ng mga patlang ay hindi ipinapakita sa pamamagitan ng default, ngunit pwedeng idagdag sa ListViews sa mga gumagamit.',
            'Default' => 'Ang <b>Default</b> ng mga patlang ay lilitaw sa ListViews na hindi customize ng mga gumagamit.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Lahat ng mga patlang na pwedeng ipakita sa <b>ListView</b> ay lilitaw dito.<br><br>Ang <b>Default</b> na haligi ay naglalaman ng mga patlang na pinapakita sa ListView sa pamamagitan ng default.<br/><br/>Ang <b>Hidden</b> na haligi ay naglalaman ng mga patlang na pwedeng idagdag sa Default o sa magagamit na haligi.'
        ,
            'savebtn' => 'Pindutin ang <b>Save & Deploy</b> upang i-save ang mga pagbabago nagawa mo at upang gawin aktibo ang nakapaloob sa modyul.',
            'historyBtn' => 'Pindutin ang <b>View History</b> para matanaw at maibalik ang nakaraang na i-save na layout mula sa kasaysayan.<br><br><b>Restore</b> sa loob ng <b>View History</b>para ibalik ang paglalagay ng patlang sa loob ng nakaraang na i-save na layout. Upang baguhin ang tatak na patlang, pindutin ang Edit icon sunod sa bawat patlang.',
            'historyDefault' => 'Pindutin ang <b>Restore default</b>para ibalik ang tingin ng layout sa orihinal.<br><br><br>Restore Default</b> ibabalik lamang nito ang patlang sa pagkakalagay doon sa orihinal na layout. Para baguhin ang mga label ng patlang, pindutin ang edit na icon sunod sa mga bawat patlang.',
            'Hidden' => 'Ang <b>Hidden</b> ng mga patlang hindi kasalukuyang magagamit sa mga gumagamit upang makita ang ListViews.',
            'Default' => 'Ang <b>Default</b> ng mga patlang ay lilitaw sa ListViews na hindi customize ng mga gumagamit.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Lahat ng mga patlang ay maaring ipakita sa <b>Filter</b> form ay lilitaw dito.<br><br>Ang <b>Default</b> na haligi ay naglalaman ng mga patlang na pwedeng ipakita sa Search forum.<br/><br/>Ang <b>Hidden</b> na haligi ay naglalaman ng mga patlang na magagamit para sayo bilang admin para idagdag sa search form.'
        ,
            'savebtn' => 'Sa pagpindut ng <b>Save & Deploy</b>ay i-se-save ang lahat ng mga pagbabago at gawin itong aktibo',
            'Hidden' => 'Ang <b>Hidden</b> ng patlang ay hindi lilitaw sa paghahanap.',
            'historyBtn' => 'Pindutin ang <b>View History</b> para matanaw at maibalik ang nakaraang na i-save na layout mula sa kasaysayan.<br><br><b>Restore</b> sa loob ng <b>View History</b>para ibalik ang paglalagay ng patlang sa loob ng nakaraang na i-save na layout. Upang baguhin ang tatak na patlang, pindutin ang Edit icon sunod sa bawat patlang.',
            'historyDefault' => 'Pindutin ang <b>Restore default</b>para ibalik ang tingin ng layout sa orihinal.<br><br><br>Restore Default</b> ibabalik lamang nito ang patlang sa pagkakalagay doon sa orihinal na layout. Para baguhin ang mga label ng patlang, pindutin ang edit na icon sunod sa mga bawat patlang.',
            'Default' => 'Ang<b>Default</b> ng patlang ay lilitaw sa paghahanap.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Ang <b>Layout</b> ay lugar kung saan naglalaman ng mga patlang na kasalukuyang ipinakita sa loob ng <b>DetailView</b>.<br/><br/>Ang <b>Toolbox</b> ay naglalaman ng <b>Recycle Bin</b> at ang mga elementong patlang at layout na pwedeng idagdag sa layout.<br><br> Gumawa ng pagbabago sa layout sa pamamagitan ng pag-drag at pag-drop ng mga elemento at mga patlang sa pagitan ng <b>Toolbox</b> at ang <b>Layout</b> nakapaloob sa layout mismo.<br><br> Upang alisin ang patlang mula sa layout, i-drag ang patlang sa <b>Recycle Bin</b>. Ang patlang ay pwede ng magagamit sa Toolbox upang idagdag sa layout.',
            'defaultquickcreate' => 'Ang lugar ng <b>Layout</b> ay naglalaman ng mga patlang na kasalukuyang ipinapakita sa loob ng <b>QuickCreate</b> form. <br><br>Ang QuickCreate foem ay lilitaw sa subpanel para sa modyul kung ang pindutan ng Created ay na pindut.<br/><br/>Ang <b>Toolbox</b> ay naglalaman ng mga <b>Recycle Bin</b> at ang mga elementong patlang at layout na pwedeng idagdag sa Layout.<br><br>Gumawa ng mga pagbabago sa pamamagitan ng elementong pag-drag at pag-drop at ang mga patlang sa pagitan ng <b>Toolbox</b> at ang <br>Layout</b> nagpakaloob sa layout mismo. Upang alisin ang patlang mula sa layout, i-drag sa <b>Recycle Bin</b>. Ang patlang ay pwede ng magagamit sa Toobox para idagdag sa layout.',
            //this default will be used for edit view
            'default' => 'Ang lugay ng <b>Layout</b> ay naglalaman ng mga patlang na kasalukuyang ipinapakita sanloob ng <b>EditView</b>.<br/><br/> Ang<b>Toolbox</b> ay naglalaman ng <b>Recycle Bin</b> at ang mga patlang at elementong layout ay pwedeng idagdag sa layout.<br><br>Gumawa ng mga pagbabago sa layout sa pamamagitan ng pag-drag at pag-drop ng elemento at mga patlang sa pagitan ng <b>Toolbox</b> at ang <b>Layout</b> nakapaloob sa layout mismo.<br><br>Upang alisin ang patlang mula sa layou, i-drag ito sa <b>Recycle Bin</b>. Ang patlang ay pwede ngnmagagamitsa Toolbox para idagdag sa layout.',
            'saveBtn' => 'Pindutin ang <b>Save</b> upang panatilihin ang mga pagbabago na ginawa mo sa layout mula sa iyong huling oras ng pag-save nito.<br><br> Ang mga pagbabago hindi ipapakita sa modyul hanggang iyo na-deploy ang mga na-save na pagbabago.',
            'historyBtn' => 'Pindutin ang <b>View History</b> para matanaw at maibalik ang nakaraang na i-save na layout mula sa kasaysayan.<br><br><b>Restore</b> sa loob ng <b>View History</b>para ibalik ang paglalagay ng patlang sa loob ng nakaraang na i-save na layout. Upang baguhin ang tatak na patlang, pindutin ang Edit icon sunod sa bawat patlang.',
            'historyDefault' => 'Pindutin ang <b>Restore default</b>para ibalik ang tingin ng layout sa orihinal.<br><br><br>Restore Default</b> ibabalik lamang nito ang patlang sa pagkakalagay doon sa orihinal na layout. Para baguhin ang mga label ng patlang, pindutin ang edit na icon sunod sa mga bawat patlang.',
            'publishBtn' => 'Pindutin ang <b>Save & Deploy</b> upang i-save ang lahat ng pagbabago na ginawa mo sa layout hanggang sa huling oras na i-save ito, at para gumawa ng aktibong pagbabago sa modyul.<br><br>Ang layout ay unting unti ipapakita sa modyul.',
            'toolbox' => 'Ang <b>Toolbox</b> ay naglalaman ng <b>Recycle Bin</b>, karagdagang elementong layout at itakda ang magagamit na patlang upang idagdag sa layout.<br/><br/>Ang mga elementong layout at patlang sa patlang ay pwede i-drsg at i-drop sa layout, at ang mga elementong layout at patlang ay maaaring i-drag at i-drop mula sa lay-out ng toolbox.<br><br>Ang elementong layout ay ang mga <b>Panels</b> at <b>Rows</b>. Pagdaragdag ng bagong hilero o ang bagong panel sa layout nagbibigay ng karagdagang lokasyon sa patlang ng layout.<br/><br/> I-drag at i-drop ang kahit anong patlang sa Toolbox o layout sa isang inookupahan patlang na posisyon para pagpalitin ang lokasyon sa dalawang patlang.<br/><br/>Ang patlang ng <b>Filter</b> ay gumawa ng blangkong espasyo sa layout kung saan ito nakalagay.',
            'panels' => 'Ang lugar ng <b>Layout</b> ay nagbibigay ng tanawin kung paano ang layout ay lilitaw sa loob ng modyul kung saan may pagbabago ang nagawa sa layout ng na i-deploy.<br/><br/> Maaring mong ipahiwatig muli ang mga patlang, hilera at panel sa pamamagitan ng pag-drsg at pag-drop mga ito sa nakalaan na lokasyon.<br/><br/>Alisin ang mga elemento sa pamamagitan ng pag-drag at pag-drop sa mga ito sa <b>Recycle Bin</b> Toolbox, o magdagdag ng mga bagong elemento at patlang sa pamamagitan ng pag-drag sa mga ito sa <b>Toolbox</b> at pag-drop sa mga ito sa ninanais na lokasyon sa layout.',
            'delete' => 'I-drag at i-drop ang kahit anong elemento dito para alisin ito sa pamamagitan ng layout',
            'property' => 'I-edit ang label na ipakita sa patlang na ito.<br/><b>Tab Order</b> mga kontrol sa anong pagkasuno sunod na tab key switch sa pagitan ng mga patlang.',
        ),
        'fieldsEditor' => array(
            'default' => 'Ang <b>Fields</b> na pwedeng magagamit sa modyul ay nailista na dito sa Field Name.<br><br>Ang pasadyang patlang ay ginawa para sa modyul na lilitaw sa ibabaw ng patlang na pwedeng magagamit sa modyul sa pamamagitan ng default.<br><br>Uoang i-edit ang mga patlang, pindutin ang<b>Field Name</b>.<br/><br/>Upang lumkkha ng bagong patlang, pindutin ang<b>Add Field</b>.',
            'mbDefault' => 'Ang <b>Fields</b> na pwedeng magagamit para sa modyul ay nakalista dito sa Field Name.<br><br>Upang i-configure ang mga property ng field, pindutin ang Field Name.<br><br>Upang gumawa ng bagong patlang, pindutin ang <b>Add Field</b>. Ang label na kasama ang mga ibang property sa bagong patlang ay pwedeng i-edit pagkatapos ng paglikha sa pamamagitan ng pagpindut ng Field Name.<br><br>Pagkatapos i-deploy ang modyul, ang bagong mga patlang ay nalikha sa Module Builder ay naaalala tulad ng mga pamantayang patlang doon sa modyul na i-deploy sa studio.',
            'addField' => 'Pumili ng <b>Data Tyoe</b> para sa bagong patlang. Itong type napili mo ay tinutukoy kung anong klaseng karakter ang pwedeng ipasok sa patlang. Halimbawa, isang numero lamang ang tumutukoy sa mga integer ang pwedeng ipasok sa mga patlang iyon ay uri ng integer data.<br><br>Magbigay ng <b>Name</b> para sa patlang. Ang pangalan ay dapat naka-alphanumeric at hindi dapat naglalaman ng mga espasyo. Ang mga underscore ay balido.<br><br> Ang<b>Display Label</b> ay ang label na lilitaw sa mga patlang modyul layout. Ang <b>System label</b> ay ginamit upang sumangguni para sa patlang ng code.<br><br> Naka depende sa uri ng data ang napili para sa patlang, ang ilan o lahat ng mga sumusunod na property na itinakda para sa patlang: <br><br> <b>Help Text</b> ay pansamantalang lumilitaw habang ang gumagamit ay mag-hover sa patlang at pwede magamit para i-prompt ang gumagamitpara sa uri ng ninanais<br><br> <b>Comment Text</b> ay makikita lamang sa loob studio o ang tagabuo ng modyul, at pwedeng magamit para ilarawan ang patlang para sa mga administrador.<br><br> <b>Default Value</b> ay lilitaw sa patlang. Ang mga gumagamit ay pwedeng makapasok ng isang bagong halaga sa patlang o gumamit sa default na halaga.<br><br> Piliin ang <b>Mass Update</b> na checkbox sa pagkasunod-sunod para magawa ang paggamit sa tampok ng mas update para sa patlang. <br><br>Ang<b>Max Size</b> na halaga ay tumutukoy sa pinakamataas na bilang ng mga karakter na pwedeng ipasok sa patlang.<br><br>Piliin ang<b>Required Field</b> na checkbox sa pagkasunud-sunod para magawa ang patlang na kailangan. Ang halaga ay dapat ibinigay para sa patlang para magkasunud-sunod para magawang i-save ang rekord na naglalaman ng patlang.<br><br> Piliin ang <b>Reportable</b> na checkbox para sa magkasunud-sunod para payagan ang patlang na magamit para sa mga filter at para sa pagpapakita ng data sa mga ulat.<br><br> Piliin ang <b>Audit</b> na checkbox para sa magkasunud-sunod para magawang subaybayan ang mga pagbabago sa patlang sa Change Log.<br><br>Piliin ang opsyon sa <b>Importable</b>na patlang para payagan, hindi payagan o kailangan sa patlang para ma-import doon sa Import Wizard.<br><br>Piliin ang opsyon sa <b>Duplicate Merge</b> na patlang para paganahin o di paganahin ang Merge Duplicates at Find Duplicates na mga tampok.<br><br>Karagdagang mga ari-arian ay pwedeng i-set para sa tiyak na mga uri ng data.',
            'editField' => 'Ang mga property sa patlang na ito ay maaring i-customomize. <br><br> Pinduntin ang <b>Clone</b> upang lumikha ng bagong patlang sa mga kaparehong property.',
            'mbeditField' => 'Ang <b>Display Label</b> sa isang patlang na template ay maaring i-cuztomize. Ang ibang mga property sa isang patlang hindi pwedeng ma-customized.<br><br>Pindutin ang<b>Clone</b> upang lumikha ng bagong patlang sa mga kaparehong property.<br><br>Upang alisin ang patlang na template para hindi mapakita sa modyul, alisin ang patlang sa isang patlang mula sa nararapat na <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Ang mga  export cuztomization ay ginawa sa studio sa pamamagitan ng mga paggawa ng package na maaring i-upload sa ibang SuiteCRM halimbawa sa pamamagitan ng <b>Modue Loader</b>.<br><br> Una, magbigay ng <b>Package Name,</b,>. Maari kang magbigay ng <b>Author</b> at <b>Description </b> impormasyon para sa package din.<br><br> Piliin ang modyul na naglalaman ng mga pasadyang ninanais mong i-export. Ang modyul na naglalaman ng mga pag-customize lamang ay lilitaw para ikaw ay pipili.<br><br> Pagkatapos ay pindutin ang <b>Export</b>upang likhain ang .zip file para sa package na naglalaman ng mga pag-customize.',
            'exportCustomBtn' => 'Pindutin ang <b>Export</b> upang lumikha ng .zip filr para sa package na naglalaman ng na-customize na ninais mong i-export.',
            'name' => 'Ito ay ang <b>Name</b> ng package. Itong pangalan ay ipapakita sa panahon ng pag-install.',
            'author' => 'Ito ay ang <b>Author</b> na ipinapakita sa panahon ng pag-install bilang pangalan ng entidad na nilikhang package. Ang may-akda ay maaring indibidwal o kompanya.',
            'description' => 'Ito ang <b>Paglalarawan</b> sa isang package na ipinapakita sa panahon ng installation.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Maligayang pagdating sa <b>Developer Tools</b> lugar.<br/><br/> Gamitin ang tools sa bahagi ng lugar upang makalikha at pamahalin ang pamantayan at mga pasadyang modyul at mga larangan.',
            'studioBtn' => 'Gumamit ng <b>Studio</b> upang i-customize ang mga i-deniploy na modyul.',
            'mbBtn' => 'Gamitin ang <b>Module Builder</b> upang makagawa ng mga bagong modyul.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Gamitin ang <b>Dropdown Editor</b> upang idagdag at i-edit ang mga global dropdown para sa mga larangan ng dropdown.',
            'appBtn' => 'Ang application mode ay kung saan maari kang mag-customize ng mga ibat-ibang property ng programa, tulad ng gaano kadami mga TPS na ulat ay ipinakita sa homepage',
            'backBtn' => 'Bumalik sa nakaraang hakbang.',
            'studioHelp' => 'Gamitin ang <b>Studio</b> upang malaman kung ano at paano ang impormasyon ay ipinapakita sa mga modyul.',
            'moduleBtn' => 'Pindutin upang i-edit ang modyul na ito.',
            'moduleHelp' => 'Ang mga bahagi na maari mong i-customize para ang modyul ay lilitaw dito. <br><br> Pindutin ang icon upang piliin ang bahagi sa pag-edit.',
            'fieldsBtn' => 'Lumikha at i-customize ang <b>Fields</b> upang ilagay ang impormasyon sa modyul.',
            'labelsBtn' => 'I-edit ang <b>Labels</b> na ipakita para sa mga larangan at ibang titulo sa modyul.',
            'relationshipsBtn' => 'Magdagdag ng bagong umiiral na <b>Relationships</b> para sa modyul.',
            'layoutsBtn' => 'I-customize ang modyul na <b>Layouts</b>. Ang mga layout ay ang mga iba\'t ibang pananaw sa modyul na naglalaman ng patlang.<br><br>Maari mong tukuyin kung saan mga patlang ay lilitaw at paano nila ayusin ang bawat layout.',
            'subpanelBtn' => 'Tukuyin kung anong mga patlang ang lilitaw sa <b>Subpanels</b> modyul.',
            'portalBtn' => 'I-customize ang modyul <b>Layouts</b> na lumilitaw sa <b>SuitCRM Portal</b>.',
            'layoutsHelp' => 'Ang modyul ng <b>Layouts</b> na maaring i-customize ay lilitaw dito.<br><br>Ang mga layout ay nagpapakita ng mga patlang at patlang na data.<br><br>Pindutin ang icon upang pumili ng layout para i-edit.',
            'subpanelHelp' => 'Ang <b>Subpanels</b> sa modyul na maaring i-customizr ay lilitaw dito.<br><br>Pindutin ang icon para piliin ang modyul upang i-edit.',
            'newPackage' => 'Pindutin ang <b>New Package</b> upang lumikha ng bagong package.',
            'exportBtn' => 'Pindutin ang <b>Export Customizations</b> upang lumikha at i-download ang package na naglalaman ng mga customization na ginawa sa Studio para sa tiyan ns modyul.',
            'mbHelp' => 'Gumamit ng <b>Module Builder</b> upang gumawa ng mga package na naglalaman ng mga custom modyul na nakabase sa pamantayan o mga bagay na custom.',
            'viewBtnEditView' => 'I-customize ang modyul <b>EditView</b>layout.<br><br>Ang EditView ay isang form na naglalaman ng mga input field para makuha ang user-entered data.',
            'viewBtnDetailView' => 'I-customize ang modyuk <b>DetailView</b>layout.<br><br>Ang DetailView ay nagpapakita ng user-entered field data.',
            'viewBtnDashlet' => 'I-customize ang modyul sa <b>SuiteCRM Dashlet</b>, kasama na ang mga SuiteCRM Dashlet ListView at hanapin.<br><br>Ang SuitCRM Dashlet ay pwedeng magamit upang idagdag sa mga pahina sa Home modyul.',
            'viewBtnListView' => 'I-customize ang mga modyul ng <b>ListView</b>layout.<br><br>Ang Search results ay lilitaw sa ListView.',
            'searchBtn' => 'I-customize ang mga modyul ng <b>Seach</b>layout.<br><br> Tukuyin kung anong mga patlang ang pwedeng magamit para salain ang mga ulat na lilitaw sa ListView.',
            'viewBtnQuickCreate' => 'I-customize ang modyul sa <b>QuickCreate</b> layout.<br><br>Ang QuickCreate form ay lilitaw sa mga subpanel at sa modyul ng mga email.',
            'addLayoutHelp' => "Upang gumawabng custom layout para sa Security Group, piliian ang nararapat na Security Grouo at ang layout form kung alin dito ang kopyahin mula sa pinakaunang punto.",
            'searchHelp' => 'Ang mga <b>Search</b> foem na maaring i-customize ay lilitaw dito.<br><br>Search forms ay naglalaman ng mga patlang para sa pag-sala ng mga ulat.<br><br>Pindutin ang icon para piliin ang search layout upang i-edit.',
            'dashletHelp' => 'Ang <b>SuiteCRM Dashlet</b> ng mga layout na maaaring i-customize ay lilitaw dito.<br><br> Ang SuiteCRM Dashlet ay magagami sa pagdadag sa mga pahina sa Home modyul.',
            'DashletListViewBtn' => 'Ang <b>SuiteCRM Dashlet ListView</b> ay pinapakita ang mga ulat nakabatay sa SuiteCRM Dashlet search filter.',
            'DashletSearchViewBtn' => 'Ang <b>SuiteCRM Dashlet Search</b> ay filter ang mga ulat para sa SuitezzCRM Dashlet listview.',
            'popupHelp' => 'Ang mga <b>Popup</b>layout ay maaring i-customize ay lilitaw dito.<br>',
            'PopupListViewBtn' => 'Ang <b>Popup ListView</b> ay ipinapakita ang mga ulat nakabatay sa Popup seach views.',
            'PopupSearchViewBtn' => 'Ang mga <b>Popup Search</b> tala ng panonood para sa Popup listview.',
            'BasicSearchBtn' => 'I-customize ang <b>Quick Filter</b> na form na lilitaw sa Quick Filter tab sa lugar ng paghanapan para sa modyul.',
            'AdvancedSearchBtn' => 'I-customize ang <b>Advanced Form</b>form na lilitaw dito sa Advanced Search tab sa Seach area para sa modyul.',
            'portalHelp' => 'I-manage at i-customize ang <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'I-upload ang <b>Style Sheet</b> para sa SuiteCRM portal.',
            'SPSync' => '<b>Sync</> Pag-customize sa SuiteCRM Portal halimbawa.',
            'Layouts' => 'I-customize ang <b>Layouts</b> sa mga SuiteCRM Portal modyul.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Lahat ng mga <b>Relationships</b> na umiiral sa pagitan ng modyul at ibang pang naka-deploy ns module ay lilitaw dito.<br><br> Ang relasyon ng <b>Name</b> ay ang system-generated na pangalan para sa relasyon.<br><br>Ang <b>Primary Module</b> ay ang modyul na nagmamay-ari ng mga relasyon. Halimbawa, lahat ng mga property ng relasyon kung alin ang Account module ay ang pangunahing modyul ay nakalagay sa mga hanayan ng Account databese.<br><br> Ang <b>Type</b> ay ang uri ng relasyon na umiiral sa pagitan ng Primary module at ang <b>Related Module</b>.<br><br>Pindutin ang hanay ng titulo upang bukud-bukurin ayon sa hanay.<br><br>Pindutin ang hilera sa hanay ng relasyon upang tanawin ang mga katangian na nauugnay kasama ang relasyon.<br><br> Pindutin ang <b>Add Relationship</b> upang gumawa ng bagong relasyon.<br><br>Ang mga relasyon ay maaring likhain sa pagitan ng dalawang naka-deploy na modyul.',
            'relationshipHelp' => 'Ang <b>Relationships</b> ay maaring likhain sa pagitan ng modyul at ibang dinideploy na modyul.<br><br> ay biswal na ipinahayag sa pamamagitan ng mga subpanel at at iugnay ang mga patlang sa mga modyul ng rekord.<br><br>Pumili ng isa sa mga sumusunod na relasyon<b>Types</b> para sa modyul.<br><br><b>One-to-one</b>- Dalawang modyul ng mga rekord ay naglalaman ng subpanel, at ang mga Related Module rekord ay naglalaman ng kaugnay na patlang.<br><br> <b>Many-to-many</b> - Dalawang modyul ng mga rekord ay ipapakitasa mga subpanel.<br><br> Piliin ang <b>Related Module<b/> para sa relasyon. <br><br> kung ang uri ng relasyon ay nasasangkop sa mga subpanem, piliin ang subpanel na pananaw para sa mga nararapat na modyul.<br><br>Pindutin ang <b>Save</b> upang gumawa ng relasyon.',
            'convertLeadHelp' => 'Dito maari mong idagdag ang mga modyul upang i-convert ang layout na screen at baguhin ang mga layout sa umiiral na isa.<br/>
 Maari kang maka-re-order ng mga modyul sa pamamagitan ng pag-dragbsa kanilang hilera sa talahanayan.<br/><br/>
            <b>Module:</b> Ang pangalan ng isang modyul.<br/><br/>
            <b>Required:</b> Kailangan mga modyul ay dapat nakagawa o napili bago ang lead ay ma i-convert<br/><br/>
           <b>Copy Data:</b> kung sinuri, mga patlang mula sa lead ay makokopya sa mga patlang na may kaparehong pangalan at bagong gawa ng mga rekord.<br/><br/>
           <b>Allow Selection:</b> Mga modyul sa isang nauugnay na patlang sa mga kontak ay maaring mapili sa halip ginawa sa panahon ng proseso ng conver lead <br/><br/>
          <b>Edit</b> Baguhin ang convert layout para sa modyul na ito.<br/><br/>
          <b>Delete:</b> Alisin ang modyul na ito mula sa convert layout.<br/><br/>',


            'editDropDownBtn' => 'I-edit ang global Dropdown',
            'addDropDownBtn' => 'Magdadag ng bagong global Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'Ang <b>Field</b> sa modyul ay nakalista dito sa Field Name.<br><br>Ang modyul template ay sinama ang pre-determined na itinakda ang mga patlang.<br><br> Upang gumawa ng bagong patlang, pindutin ang <b>Add Field</b>.<br><br> upang i-edit ang patlang, pindutin ang <b>Field Name</b>. <br/><br/> Pagkatapos ng modyul ay diniploy, ang bagong mga patlang na ginawa sa Module Builder, kasama ang mga template na patlang, ay naaalala bilang pamantayang mga patlang sa Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Ang <b>Relationship</b> nalikha na iyon sa pagitan ng modyul at ibang mga modyul ay lilitaw dito.<br><br>Ang relasyon ng <b>Name</b> ay ang system-generated na pangalan para sa relasyon.<br><br> Ang<b>Primary Module</b> ay ang modyul na pagmamay-ari ng mga relasyon. Ang relasyon ng mga property ay nakalagay sa mga talahanayan ng database mga pag-aari sa pangunahing modyul.<br><br>Ang <b>Type</b> ay ang uri ng umiiral na relasyon sa pagitan ng Primary module at ang <b>Related Module</b>.<br><br>Pindutin ang hanayna titulo upang ayusin sa pamamagutan ng hanay.<br><br>Pindutin ang hilera sa relasyon ng talahanayan para matanaw at ma i-edit ang mga property nauugnay sa mga relasyon.<br><br>Pindutin ang <b>Add Relationship</b> upang gumawa ng bagong relasyon.',
            'addrelbtn' => 'mouse sa ibabaw ng tulong para magdagdag ng relasyon..',
            'addRelationship' => '<b>Relationships</b>ay maaring malikha sa pagitan ng modyul at ibang pasadyang modyul o ang diniploy na modyul.<br><br>Mga relasyon ay biswal na ipinapahayag sa pamamagitan ng mga subpanel at nag-uugnay ng mga patlang sa rekord ng modyul.<br><br>Pumili ng isa sa mga sumusunod na relasyon <b>Types</b> para sa modyul.<br><br> <b>One-toOne</b> - Dalawang modyul ng mga rekord ay naglalaman ng nag-uugnay na patlang.<br><br> <b>One-to-Many</b> - Ang mga Primary Module rekord ay naglalamanng subpanel, at ang Related Module rekord ay naglalaman ng nag-uugnay na patlang.<br><br> <b>Many-to-many</b>- Dalawang modyul ng mga rekord ay ipapakita sa mga subpanel.<br><br>Piliin ang <b>Related Module</b> para sa relasyon.<br><br>kung ang uri ng relasyon ay nasasangkot sa mga sub-panel, piliin ang subpanel view para sa nararapat na modyul.<br><br> Pindutin ang <b>Save</b>upang gumawa ng relasyon.',
        ),
        'labelsHelp' => array(
            'default' => 'Ang <b>Labels</b> para sa mga patlang at ibang mga titulo sa modyul ay maaring baguhin.<br><br><br> I-edit ang label sa pamamgitan ng pag-pindut sa loob ng patlang, pagpapasok ng bagong label at pag-pindut ng <b>Save</b>.<br><br>kung kahit anong linggwahe pakiete ay na install sa aplikasyon, maari kang pumili ng <b>Languange</b> upang gamitin para sa mga label.',
            'saveBtn' => 'Pindutin ang <b>Save</b> upang i-save ang lahat ng pagbabago.',
            'publishBtn' => 'Pindutin ang <b>Save & Deploy</b> upang i-save ang lahat ng pagbabago at gawin itong aktibo.',
        ),
        'portalSync' => array(
            'default' => 'Ipasok ang <b>SuiteCRM Portal URL</b>ng portal halimbawa para i-update, at pindutin ang <b>Go</b>.<br>pagkatapos ay ipasok ang balidong SuiteCRM ng pangalan na ginagamit at password, at pagkatapos pindutin ang <b>Begin Sync</b>.<br><br>Ang pag-customize na ginawa sa SuiteCRM Portal <b>Layouts</b>, kasama ang <b>Style Sheet</b> kung ang isa ay na i-upload na, ay inilipat sa tinutukoy ng portal halimbawa.',
        ),
        'portalStyle' => array(
            'default' => 'Maari mong i-customize ang hitsurs ng SuiteCRM portal sa pamamagitan ng paggamit ng style sheet.<br><br>Pumili ng <b>Style Sheet</b> upang i-upload. <br><br>Ang style sheet ay ipatupad sa SuiteCRM Portalsa susunod na oras ang sync ay naganap.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Upang makapagsimula sa proyekto, pindutin ang <b>New Package</b> upang gumawa ng bagong package sa bahay sa iyong pasadyang modyul.<br/><br/>Bawat package ay maaring naglalaman ng isa o higit pang modyul.<br/><br/>Halimbaws, gusto mong lumikha ng package naglalaman ng isang pasadyang modyul na kaugnay sa pamantayang Account ng modyul. O, gusto mong gumawa ng package naglalaman ng maraming bagong modyul na nagtutulungan bilang isang proyekto at may kaugnay sa bawat isa at sa ibang mga modyul ay mayroon na sa aplikasyon.',
            'somepackages' => 'Ang <b>package</b> acts tulad ng lalagyan para sa mga pasadyang modyul, lahat ng mga ito ay parte sa isang proyekto. Ang package ay maaring naglalaman ng isa o higit pang custom <b>modules</b> na maaring i-ugnay sa bawat isa o sa ibang mgs modyu sa aplikasyon.<br/><br/>Pagkatapos gumawa ng package para sa iyong proyekto, maari kang lumikha ng mga modyul para sa package kaagad, o maari mong ibalik ang Modulr Builder at sa ibang panahon para makompleto ang proyekto. <br><br> Kapag ang proyekto ay na kumpleto, maari mong <b>Deploy</b> ang package para i-instakk ang mga pasadyang modyul sa loob ng aplikasyon.',
            'afterSave' => 'Ang iyong bagong package ay dapat naglalaman ng kahit isang modyul. Maari kang lumikha ng isa o higit pang custom modyul para sa package <br/><br/>Pindutin ang <b>New Module</b> upang lumikha ng custom modyul para sa itong package.<br/><br/>Pagkatapos gumawa na kahit isa modyul, maari mong ipakita o i-deploy ang package para gawin itong magagamit para sa iyong halimbawa at/o ibang gumagamit.<br/><br/> Upang i-deploy ang package sa isang hakbang sa loob ng iyong SuiteCRM, pindutin ang <b>Deploy</b>.<br><br>Pindutin ang <b>Publish</b> upang i-save ang package tulad ng .zip file. Pagkatapos ng .zip file ay na i-save na sa iyong system, gamitin ang <b>Module Loader</b>para i-upload at i-install ang packagesa loob ng iyong SuiteCRM .<br/><br/>Maari mong ipamahagi ang file sa ibang gumagamit para i-upload at i-install sa kanilang sariliing pagkakataon.',
            'create' => 'Ang <b>package</b> gawa tulad ng paglalagyan para sa mga pasadyang modyul, lahat ng bahagi sa isang proyekto. Ang package ay naglalaman ng isa or higit pang custome <b>modules</b>na maaring kaugnay sa bawat isa o sa ibang mga modyul sa aplikasyon.<br/><br/>Pagkatapos gumawa ng package para sa iyong proyekto, maari kang lumikha ng mga modyul para sa package kaagad, o maari kang bumalik sa Module Builder sa ibang pagkakataon upang kumpletuhin ang proyekto.',
        ),
        'main' => array(
            'welcome' => 'Gamitin ang <b>Developer Tools</b> upang lumikha at pamahalain ang pamantayang na mga pasadyang modyul at patlang. <br/><br/>Upang pamahalain ang modyul sa aplikasyon, pindutin ang <b>Studio</b>, <br/><br/>Upang lumikha ng mga pasadyang modyul, pindutin ang <b>Module Builder</b>.',
            'studioWelcome' => 'Lahat ng mga kasulukuyang mga modyul, kasama ang pamantayan at mga bagay na module-loaded, ay naka-customize sa loob ng studio.'
        ),
        'module' => array(
            'somemodules' => "Simula noon ang kasalukuyang package ay naglalaman ng kahit isang modyul, maari mong <b>Deploy</b> ang modyul sa package sa loob ng SuiteCRM instance o <b>Publish</b>ang package na i-installsa kasulukuyang SuiteCRM instance o sa ibang halimbawa gamit ang <b>Module Loader</b>.<br/><br/>Upang i-install ang package diretso direktang sa iyong SuiteCRM halimbawa, pindutin ang <b>Deploy</b>.<br><br>Upang lumikha ng .zip fike para sa package na maaring i-load ay i-nstall sa loob ng kasalukuyanv SuiteCRM halimabaw at ibang halimbawa gamit ang <b>Module Loader</b>, pindutin ang <b>Publish</b>.<br/><br/>. Maari kang bumuo ng mha modyul para sa package ng mga yugto, at ipalabas or ilabaskung handa ka na gawin ito.<br/><br/>Pagkatapos palabasin o i-deploy ang package, maari kang gumawa ng mga pagbabago sa mga package property at i-customize ang modyul ng higit pa. Pagkatapos i-palabalas ulit o i-deploy ang package upang ilagay ang mga pagbabago.",
            'editView' => 'Dito maari kang makapag-edit sa umiirsl ng mga patlang. Maari mong alisin ang kahit anong umiiral na mga patlang o idadag ang magagamit na mga patlang sa kaliwang panel.',
            'create' => 'Kapag pumipili ng uri ng <b>Uri</b> ng module na kailangan mong ninanais na ilikha, laging isaisip ang mga uri ng mga patlang na gusto mo sa loob ng module. <br/><br/>Bawat module na template ay naglalaman ng takdang mga patlang na tumutukoy sa uri ng module na inilarawan sa pamamagitan ng titulo.<br/><br><b>Basic</b> - Magbibigay ng mga basic na mga patlang na lilitaw sa mga pamantayan ng module, kagaya ng Pangalan, Itinalaga sa, Grupo, Petsa ng Paglikha at Deskripsyon na mga patlang.<br/><br/> <b>Kompanya</b> - Magbibigay ng mga tiyak na organisasyon na mga patlang, kagaya ng Pangalan ng Kompanya, Industriya at Address ng Pagsisingil. Gamitin itong template para lumikha ng mga module na kapareha sa mga pamantayan ng akawnt na module.<br/><br/> <b>Person</b> - Nagbibigay ng tiyak-indibidwal na mga patlang, kagaya ng Pagbati, Titulo, Pangalan, Address at Numero ng Telepono. Gamitin itong template para lumikha ng mga module na kapareha sa pamantayan ng mga kontak at mga lead na mga module.<br/><br/><b>Issue</b> - Nagbibigay ng kaso- at tiyak na bug na mga patlang, kagaya ng Numero, Estado, Prayoridad at Deskripsyon. Gamitin itong template para lumikha ng mga module na kapareha ng mga pamantayan ng kaso at mga bug na mga module.<br/><br/>Tandaan: Pagkatapos mong lumikha ng module, pwede kang mag-edit ng mga label ng mga patlang na ibinigay ng template, pati na arin ang paglikha ng pasadya na mga patlang para idagdag sa mga layout ng modyul',
            'afterSave' => 'I-customize ang modyul upang umangkop sa iyong mga pangangailangan sa pamamagitan ng pag-edit at gumawa ng nga patlang,, pagtatayo ng mga relasyonsa ibang mga modyul at pagsasaayos ng mga patlang sa loob ng mga layout <br/><br/>Upang tanawin ang mga patlang at pamahain ang mga pasadyang patlang sa loob ng modyul, pindutin ang <b>View Fields</b>.<br/><br/>Para gumawa at pamahalin ang mga relasyon sa pagitan ng modyul at mga modyul, kung ang mga modyul ay nasa aplikasyon na o iba pang mga pasadyang modyul sa loob ng kaparehong package, pindutin ang <b>View Relationships<br/>Upang i-edit ang mga modyul na layout, pindutin ang <b>View Layouts</b>. Maari mong ibahin ang Detail View, Edit View at ang mga List View layout para sa modyul tulad ng gusto mo para sa mga modyul ay nasa aplikasyon sa loob ng Studio.<br/><br/>Upang makagawa ng modyul sa kaparehong property tulad ng kasalukuyang modyul, pindutin ang <b>Duplicate</b>. Maari mong dagdagan ang customize ng bagong modyul.',
            'viewfields' => 'Ang mga patlang nasa modyul ay maaring i-customize upang umaangkop sa iyong pangangailangan.<br/><br/>Hindi mo maaring burahin ang mga pamantayang patlang, ngunit maari mong alisin ang mga ito mula sa mga nararapat na layoit sa loob ng mga pahinang Layout.<br/><br/> Pwede kang makagawa ng mabilisang mga bagong patlang na may kaparehong property sa umiiral na mga patlang sa pamamagitan ng pag-pindut ng <b>Clone</b> sa <b>Properties</b> na form. Ipasok ang kahit anong bago property, at pagkatapos pindutin ang <b>Save</b>.<br/><br/> ito ay inirerekomenda na iyong naitakda sa lahat ng property para sa pamantayang patlang at pasadyang mga patlanb bago ipalabas at I-install ang package naglalaman ng pasadyang modyul.',
            'viewrelationships' => 'Maari kang gumawa ng many-to-many na mga relasyon sa pagitan ng kasulukuyang modyul at iba pang modyul sa package, at/o sa pagitan ng kasakukuyang modyul at mga modyul ay naka install na sa aplikasyon.<br><br> Upang lumikha ng one-to-many at one-to-one mga relasyon, lumikha ng <b>Relate</b> at <b>Flex Relate</b> mga patlang para sa mga modyul.',
            'viewlayouts' => 'Maari mong kontrolin kung anong mga patlang ay magagamit para sa pagkuha ng mga data sa loob ng <b>Edit View</b>. Maari mong kontrolin kung anong data ang ipapakita ng <b>Detail View</b>. Ang mga pananaw ay walang tugma.<br/><br/> Ang Quick Create form ay ipinapakita kung ang <b>Create</b> ay pinindut sa modyul subpanel. Sa pamamagitan ng default, ang <b> Quick Create</b> form layout ay kapareho lamng sa default <b>Edit View</b> layout. Maaring mong i-customize ang Quick Create fom kaya na naglalaman kaunti at/o sa iba\'t ibang patlang kaysa Edit View Layout.<br><br> Maari mong tukuyin ang seguridad ng modyul gamit ang Layout na pag-customize kasama ang <b>Role Management</b>.<br><br>',
            'existingModule' => 'Pagkatapos gumawa at mag-customize ng itong modyul, maari mong likhan ang karagdagang mga modyul o iblaik sa package upanh <b>Publish</b> o <b>Deploy</b> ang package. <br><br> Upang gumawa ng mga karagdagang modyul, pindutin ang <b>Duplicate</b> upang lumikha ng modyul sa kaparehong property sa kasalukuyang modyul, o bumalik sa pag navigate ng bagong modyul at pindutin ang <b>New Module</b>.<br><br> kung handa ka na <b>Publish</b> o <b>Deploy</b> ang package naglalaman ng modyul ito, navigate ulit sa package upang itanghal ang mga pag-andar na ito. Maari mong i-publsih a i-deploy ang mga package naglalaman na kahit isang modyul.',
            'labels' => 'Ang mga label sa isang pamantayan ng patlang pati na rin ang mga pasadyang patlang ay maaring ibahin. Pagbabago na mga patlang ng label ay hindi makakaapekto sa mga patlang.',
        ),
        'listViewEditor' => array(
            'modify' => 'Mayroong tatlong haligi ang ipinakita sa kaliwa. Ang "Default" na haligi ay naglalaman ng mga field na ipinakita sa view ng listahan ng default, ang "Magagamit" na haligi ay naglalaman ng mga field na ang gumagamit ay maaaring pumili para gamitin sa paglilikha ng oasadyang listahan lara sa iyo bilang isang admin upang sa alinman na magdagdag sa default o sa magagamit na nga haligi para sa paggamit ng mga gumagamit ngunit ito ay kasalukuyang hindi magagamit.',
            'savebtn' => 'Sa pag-Klik sa <b>Save</b> ay maise-save ang lahat ng mga pagbabago at gawin silang aktibo.',
            'Hidden' => 'Ang nakatagong mga patlang ay ang mga patlang na kasalukuyang hindi magagamit para sa mga user na gamitin sa mga view ng listahan.',
            'Available' => 'Magagamit na mga field ay mga field na hindi ipinapakita sa pamamagitan ng default, pero maaaring mapagana sa pamamagitan ng mga user.',
            'Default' => 'Ang default fields ay ipinapakita sa mga gumagamit yong hindi pa nakalikha ng mga setting 
sa custom list view.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Mayroong dalawang mga kulumna na ipinapakita sa kaliwa. Ang "Default" na kulumna ay naglalaman ng mga field na ipapakita sa search view, at ang "Hidden" na kulumna ay naglalaman ng mga field na magagamit mo bilang isang admin para magdagdag sa view.',
            'savebtn' => 'Sa pag-klik ng <b>Save & Deploy</b> ay maise-save ang lahat ng mga pagbabago at gawin silang aktibo.',
            'Hidden' => 'Ang nakatagong mga patlang ay mga patlang na hindi ipinapakita sa search view.',
            'Default' => 'Ang default na mga patlang ay maipapakita sa search view.'
        ),
        'layoutEditor' => array(
            'default' => 'Mayroong dalawang mga kulumna na ipinakita sa kaliwa. Ang kanang-kamay na kulumna, na may label na Current Layout o Layout Preview, ay kung saan babaguhin mo ang kaayusan ng modyul. Ang kaliwang-kamay na kulumna, pinapangalanang Toolbox, ay naglalaman ng mahalagang mga elemento at mga kagamitan para gamitin kapag nag-i-edit ng kaayusan. <br/><br/>Kung ang lugar ng layout ay may titulong Current Layout samakatwid ikaw ay nagtatrabaho sa kopya ng layout na kasalukuyang ginagamit ng modyul para maipakita.<br/><br/>Kung ito ay pinamagatang Layout Preview samakatwid ikaw ay nagtatrabaho sa isang kopya na nilikha kanina sa pamamagitan ng isang pindut sa Save na button, na maaaring nabago na mula sa bersyon na nakita ng mga user sa modyul na ito.',
            'saveBtn' => 'Sa pagpindut sa button na ito ay ise-save ang pagkakaayos at nang maaari mong panatilihin ang iyong mga pagbabago. Kapag babalik ka sa modyul na ito magsisimula ka mula sa nabagong ayos nito. Ang iyong layout gayunpaman ay hindi makikita ng mga user sa modyul hanggang i-klik mo ang Save at Publish na button.',
            'publishBtn' => 'Pindutin ang button na ito para lumawak ang kaayusan. Ibig sabihin nito na ang kaayusan na ito ay madaling makikita ng mga user sa modyul na ito.',
            'toolbox' => 'Ang toolbox ay naglalaman ng iba\'t-ibang mahalagang mga tampok para sa pag-i-edit ng mga kaayusan, kabilang ang isang lugar ng basura, isang pangkat ng idinagdag na mga elemento at isang pangkat ng magagamit na mga field. Kahit ano sa mga ito ay maaaring i-drag at -drop papunta sa layout.',
            'panels' => 'Ang lugar na ito ay nagpapakita kung paano ang magiging hitsura ng iyong layout sa mga user sa modyul na ito kapag nai-deploy ito.<br/><br/>Maaari mong muling isaayos ang mga elemento tulad ng mga patlang, mga hanay at mga panel sa pamamagitan ng pag-drag at pag-drop sa kanila; burahin ang mga elemento sa pamamagitan ng pag-drag at pag-drop sa kanila sa lugar ng basurahan sa toolbox, o magdagdag ng bagong mga elemento sa pamamagitan ng pag-drag sa kanila mula sa toolbox at pag-drop sa kanila papunta sa layout sa ninais na posisyon.'
        ),
        'dropdownEditor' => array(
            'default' => 'Mayroong dalawang mga kulumna na ipinakita sa kaliwa. Ang kanang-kamay na kulumna, na may label na Current Layout o Layout Preview, ay kung saan babaguhin mo ang kaayusan ng modyul. Ang kaliwang-kamay na kulumna, pinapangalanang Toolbox, ay naglalaman ng mahalagang mga elemento at mga kagamitan para gamitin kapag nag-i-edit ng kaayusan. <br/><br/>Kung ang lugar ng layout ay may titulong Current Layout samakatwid ikaw ay nagtatrabaho sa kopya ng layout na kasalukuyang ginagamit ng modyul para maipakita.<br/><br/>Kung ito ay pinamagatang Layout Preview samakatwid ikaw ay nagtatrabaho sa isang kopya na nilikha kanina sa pamamagitan ng isang pindut sa Save na button, na maaaring nabago na mula sa bersyon na nakita ng mga user sa modyul na ito.',
            'dropdownaddbtn' => 'Sa pagpindut sa button na ito ay nagdadagdag ng isang bagong aytem patungo sa dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Ang mga customization na nagawa sa Estudyo na kasali sa halimbawa ay maaaring ma-package at ma-deploy sa ibang halimbawa. <br><br>Magbigay ng <b>Pangalan ng Package</b>. Maaari kang maglagay ng <b>May-akda</b> at <b> Deskripsyon</b> impormasyon sa package.<br><br>Piliin ang module o mga module na naglalaman ng mga customization para i-export. (Tanging ang mga module lamang na naglalaman ng mga customization ang lalabas para iyong pagpilian.)<br><br>I-click <b>I-export</b> para makagawa ng .zip na file para sa package na naglalaman ng mga customization. Ang .zip na file ay maaaring ma-upload sa ibang halimbawa sa tulong ng <b>Loader na Module</b>.',
            'exportCustomBtn' => 'Pindutin ang <b>Export</b> upang lumikha ng .zip filr para sa package na naglalaman ng na-customize na ninais mong i-export.',
            'name' => 'Ang <b>Name</b>sa isang package ay ipapakita sa Module Loader pagkatapos na i-upload ang package para sa instalasyon sa Studio.',
            'author' => 'Ang <b>Autor</b> ay ang pangalan ng entity na gumawa ng pakete. Ang Autor ay maaaring alinman sa isang indibidwal o isang kompanya.<br><br>Ang Autor ay ipapakita sa Module Loader pagkatapos na mai-upload ang pakete para sa instalasyon sa Studio.',
            'description' => 'Ang <b>Deskripsiyon</b> ng pakete ay ipapakita sa Module Loader pagkatapos na mai-upload ang pakete para sa instalasyon sa Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Maligayang pagdating sa <b>Developer Tools</b> lugar.<br/><br/> Gamitin ang tools sa bahagi ng lugar upang makalikha at pamahalin ang pamantayan at mga pasadyang modyul at mga larangan.',
            'studioBtn' => 'Gamitin ang <b>Studio</b> para i-customize ang mga na-install na mga modyul sa pamamagitan ng pagbago ng kaayusan ng field, pagpili kung anong mga field ang magagamit at paggawa ng kustom na datos na mga field.',
            'mbBtn' => 'Gamitin ang <b>Module Builder</b> upang makagawa ng mga bagong modyul.',
            'appBtn' => 'Gamitin ang mode ng Aplikasyon para i-customize ang iba-ibang mga katangian ng programa, tulad ng ilang mga ulat ng TPS na ipinakita sa Homepage',
            'backBtn' => 'Bumalik sa nakaraang hakbang.',
            'studioHelp' => 'Gamitin ang <b>Studio</b> para i-customize ang na-install na mga modyul.',
            'moduleBtn' => 'Pindutin upang i-edit ang modyul na ito.',
            'moduleHelp' => 'Pumili ng komponent ng modyul na iyong gustong i-edit',
            'fieldsBtn' => 'I-edit kung anong impormasyon ang naka-imbak sa modyul sa pamamagitan ng pagkontrol sa <b>mga Field</b> sa modyul. <br/><br/>Maaari mong i-edit at lumikha ng kustom na mga field dito.',
            'labelsBtn' => 'I-klik ang <b>Save</b> para i-save ang iyong mga label ng kustom.',
            'layoutsBtn' => 'I-customize ang <b>mga Layout</b> ng Edit, Detalye, Listahan at tanawin sa paghahanap.',
            'subpanelBtn' => 'I-edit kung anong impormasyon ang ipinapakita sa mga subpanel ng mga modyul na ito.',
            'layoutsHelp' => 'Pumili ng isang <b>Layout para i-edit</b>.<br/><br/>Para baguhin ang layout na naglalaman ng mga field ng datos para sa pagpasok ng datos, i-klik ang <b>Edit View</b>.<br/><br/>Para baguhin ang layout na nagpapakita ng datos na itinala sa loob ng mga field sa Edit View, i-klik ang <b>Detail View</b>.<br/><br/>Para baguhin ang mga kulumna kung saan lalabas sa listahan ng default, i-klik ang <b>List View</b>.<br/><br/>Para baguhin ang Basic at Advanced na mga layout ng porma ng paghahanap, i-klik ang <b>Search</b>.',
            'subpanelHelp' => 'Pumili ng isang <b>Subpanel</b> para i-edit.',
            'searchHelp' => 'Pumili ng isang <b>Search</b> na layout para i-edit.',
            'newPackage' => 'Pindutin ang <b>New Package</b> upang lumikha ng bagong package.',
            'mbHelp' => '<b>Maligayang pagdating sa Builder na Module.</b><br/><br/>Gamitin ang <b>Builder na Module</b> para makagawa ng mga package na naglalaman ng mga module na custom base sa standard o custom na mga bagay. <br/><br/>Para magsimula, i-click ang <b>Bagong Package</b> para makagawa ng bagong package, o pumili ng package para i-edit.<br/><br/> Ang <b>package</b> ay nagsisilbing lalagyan ng mga module na custom, lahat ay bahagi sa iisang proyekto. Ang package ay maaaring malagyan ng isa o higit pang mga module na custom na maaaring kaugnay sa isa\'t-isa o sa mga module sa aplikasyon. <br/><br/>Mga halimbawa: Gusto mong gumawa ng package na naglalaman ng isang module na custom na kaugnay sa standard na mga account na module. O, gusto mong gumawa ng isang package na naglalaman ng iilang bago na mga module na magtulong-tulong bilang isang proyekto at kaugnay sa isa\'t-isa at sa mga module sa loob ng aplikasyon.',
            'exportBtn' => 'I-klik ang <b>Export Customizations</b> para gumawa ng isang pakete na naglalaman ng mga kustomisasyon na gawa sa Studio para sa tiyak na mga modyul.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Dropdown Editor',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Tagabuo ng module',
    'LBL_STUDIO' => 'Ang estudyo',
    'LBL_DROPDOWNEDITOR' => 'Dropdown Editor',
    'LBL_DEVELOPER_TOOLS' => 'Nag-develop na mga tool',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Listahan ng package',
    'LBL_HOME' => 'Ang Tahanan',
    'LBL_NONE' => '-Wala-',
    'LBL_DEPLOYE_COMPLETE' => 'Na kompleto ang deploy',
    'LBL_DEPLOY_FAILED' => 'Isang error ang nangyari sa panahon ng pagproseso sa deploy, ang iyong pakete ay maaaring hindi na-install ng tama',
    'LBL_AVAILABLE_SUBPANELS' => 'Magagamit na mga subpanel',
    'LBL_ADVANCED' => 'Naka-adbans',
    'LBL_ADVANCED_SEARCH' => 'Naunang pag Sala',
    'LBL_BASIC' => 'Saligan',
    'LBL_BASIC_SEARCH' => 'Mabilis na pag sala',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Ang Pera',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuitCRM Dashlet ListView',
    'LBL_POPUP' => 'Tingnan ang Popup',
    'LBL_POPUPLISTVIEW' => 'ListView ng Popup',
    'LBL_POPUPSEARCH' => 'Paghahanap ng popup',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DETAILVIEW' => 'Ipakita ang Detalye',
    'LBL_DROP_HERE' => '[Ibagsak Dito]',
    'LBL_EDIT' => 'I-edit',
    'LBL_EDIT_LAYOUT' => 'I-edit ang layout',
    'LBL_EDIT_FIELDS' => 'I-edit ang mga field',
    'LBL_EDITVIEW' => 'I-edit ang View',
    'LBL_FILLER' => '(tagapuno)',
    'LBL_FIELDS' => 'Mga Field',
    'LBL_FAILED_TO_SAVE' => 'Bigong mai-Save',
    'LBL_FAILED_PUBLISHED' => 'Bigong mailathala',
    'LBL_HOMEPAGE_PREFIX' => 'Aking',
    'LBL_LAYOUT_PREVIEW' => 'Prebiyu ng Layout',
    'LBL_LAYOUTS' => 'Mga Kaayusan',
    'LBL_LISTVIEW' => 'Ipakita ang listahan',
    'LBL_MODULES' => 'Mga module',
    'LBL_MODULE_TITLE' => 'Ang estudyo',
    'LBL_NEW_PACKAGE' => 'Bagong package',
    'LBL_NEW_PANEL' => 'Bagong panel',
    'LBL_NEW_ROW' => 'Bagong hilera',
    'LBL_PACKAGE_DELETED' => 'Binura ang package',
    'LBL_PUBLISHING' => 'Inilabas...',
    'LBL_PUBLISHED' => 'Nai-publish',
    'LBL_SELECT_FILE' => 'Pumili ng file',
    'LBL_SUBPANELS' => 'Mga subpanel',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Pamagat: ',
    'LBL_SEARCH_FORMS' => 'Salain',
    'LBL_SEARCH' => 'Maghanap',
    'LBL_SEARCH_BUTTON' => 'Maghanap',
    'LBL_FILTER' => 'Salain',
    'LBL_TOOLBOX' => 'Kagamitan',
    'LBL_QUICKCREATE' => 'Mabilisang Paglikha',
    'LBL_EDIT_DROPDOWNS' => 'I-edit ang Global Dropdown',
    'LBL_ADD_DROPDOWN' => 'Magdagdag ng bagong Global Dropdown',
    'LBL_BLANK' => '-blank-',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TABDEF_TYPE' => 'Uri ng pagpapakita',
    'LBL_TABDEF_TYPE_HELP' => 'Pumili kung paano ipapakita ang seksyon na ito. Ang opsyon na ito ay may epekto lamang kung pinagana mo ang mga tab sa view na ito.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Pumili ng panel para magkaroon ng pagpapakita ng panel sa loob ng tanawin ng layout. Pumili ng Tab para ipakita ang panel na ito sa loob ng hiwalay na tab sa loob ng layout. Kapag ang Tab ay natukoy para sa isang panel, ang kasunod na mga panel na itinakda para ipakita bilang Panel ay ipapakita sa loob ng tab. <br/>Isang bagong Tab ay masisimulan para sa susunod na panel kung saan ang Tab ay napili. Kung ang Tab ay napili para sa isang panel sa ibaba ng unang panel, ang unang panel ay kinakailangang maging isang Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Pagkatibag',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Pumili upang gawin ang estado ng default sa panel na ito na pabagsakin.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Ang Pangalan',
    'LBL_DROPDOWN_LANGUAGE' => 'Ang Lenggwahe',
    'LBL_DROPDOWN_ITEMS' => 'Listahan ng mg aytem',
    'LBL_DROPDOWN_ITEM_NAME' => 'Pangalan ng Aytem',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Ipakita ang Label',
    'LBL_SYNC_TO_DETAILVIEW' => 'I-sync sa tanawin ng detalye',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Piliin ang pagpipilian na ito para i-sync ang layout ng EditView na ito sa sumusunod na layout ng DetailView. Ang mga field at ang pagkakalagay ng field sa EditView<br>ay awtomatikong ma-si-sync at ma-se-save sa DetailView sa pagpipindot ng Save o Save at Lumawak sa EditView. <br>Ang pagbabago sa layout ay hindi maaaring maisagawa sa DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ang DetailView na ito at naka-sync kasama ng sumusunod na EditView. <br> Ang mga field at ang pagkakalagay ng field sa DetailView na ito ay sumasalamin sa mga field at pagkakalagay ng field sa EditView.<br> Ang mga pagbabago sa DetailView ay hindi maaaring ma-save o lumawak sa loob ng pahinang ito. Magsagawa ng mga pagbabago o mag-un-sync ng mga layout sa EditView. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopyahin mula sa EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Ang mga halaga ay kailangan para sa kapwa pangalan ng aytem at lebel ng pagpapakita. Para magdagdag ng blangkong aytem, pindutin ang magdagdag na walang pagpapasok ng anumang mga halaga para sa pangalan ng aytem at ang tatak ng pagpapakita.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Ang susi ay umiiral na sa listahan',
    'LBL_NO_SAVE_ACTION' => 'Hindi mahanap ang aksyon ng save para sa tanawin na ito.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:magtayo ng lokasyon: masamang nabuo na dokumento',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Pangunahing Modyul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* ang relasyon ay nalikha sa studio',
    'LBL_RELATIONSHIPS' => 'Ang mga relasyon',
    'LBL_RELATIONSHIP_EDIT' => 'I-edit ang relasyon',
    'LBL_REL_NAME' => 'Ang Pangalan',
    'LBL_REL_LABEL' => 'Tatak',
    'LBL_REL_TYPE' => 'Klase',
    'LBL_RHS_MODULE' => 'Kaugnay na modyul',
    'LBL_NO_RELS' => 'Walang mga relasyon',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Opsyonal na kondisyon',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Ang haligi',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Halaga',
    'LBL_SUBPANEL_FROM' => 'Subpanel mula sa',
    'LBL_RELATIONSHIP_ONLY' => 'Walang mga nakikitang elemento ang malilikha para sa relasyon na ito dahil mayroong naunang umiiral na nakikitang relasyon sa pagitan nitong dalawang mga modyul.',
    'LBL_ONETOONE' => 'Isa sa isa',
    'LBL_ONETOMANY' => 'Isa sa marami',
    'LBL_MANYTOONE' => 'Marami sa isa',
    'LBL_MANYTOMANY' => 'Marami sa marami',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Pumili ng modyul para i-edit.',
    'LBL_QUESTION_LAYOUT' => 'Pumili ng layout para i-edit.',
    'LBL_QUESTION_SUBPANEL' => 'Pumili ng subpanel para i-edit.',
    'LBL_QUESTION_SEARCH' => 'Pumili ng layout ng filter para i-edit.',
    'LBL_QUESTION_MODULE' => 'Pumili ng bahagi ng modyul para i-edit.',
    'LBL_QUESTION_PACKAGE' => 'Pumili ng pakete para i-edit, o lumikha ng bagong pakete.',
    'LBL_QUESTION_EDITOR' => 'Pumili ng tool.',
    'LBL_QUESTION_DASHLET' => 'Pumili ng layout ng dashlet para i-edit.',
    'LBL_QUESTION_POPUP' => 'Pumili ng layout ng popup para i-edit.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_LABELS' => 'Mga tatak',
    'LBL_MASS_UPDATE' => 'Maramihang Updeyt',
    'LBL_DEFAULT_VALUE' => 'Default na Halaga',
    'LBL_REQUIRED' => 'Ang kinakailangan',
    'LBL_DATA_TYPE' => 'Klase',
    'LBL_HCUSTOM' => 'CUSTOM',
    'LBL_HDEFAULT' => 'DEFAULT',
    'LBL_LANGUAGE' => 'Salita:',
    'LBL_CUSTOM_FIELDS' => '* field na nagawa sa Estudyo',

//SECTION
    'LBL_SECTION_EDLABELS' => 'I-edit ang mga label',
    'LBL_SECTION_PACKAGES' => 'Mga pakete',
    'LBL_SECTION_PACKAGE' => 'Ang pakete',
    'LBL_SECTION_MODULES' => 'Mga module',
    'LBL_SECTION_DROPDOWNS' => 'Mga dropdown',
    'LBL_SECTION_PROPERTIES' => 'Mga katangian',
    'LBL_SECTION_DROPDOWNED' => 'I-edit ang dropdown',
    'LBL_SECTION_HELP' => 'Saklolo',
    'LBL_SECTION_MAIN' => 'Pangunahin',
    'LBL_SECTION_FIELDEDITOR' => 'I-edit ang field',
    'LBL_SECTION_DEPLOY' => 'I-deploy',
    'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Naka-default',
    'LBL_HIDDEN' => 'Nakatago',
    'LBL_AVAILABLE' => 'Magagamit',
    'LBL_LISTVIEW_DESCRIPTION' => 'Mayroong tatlong mga kulumna na ipinakita sa ibaba. Ang <b>Default</b> na kulumna ay naglalaman ng mga field na ipinapakita sa isang listahan ng tanawin sa pamamagitan ng default. Ang <b>Adisyunal</b> na kulumna ay naglalaman ng mga field na ang isang user ay maaaring pumili upang gamitin para sa paggawa ng isang kustom na tanawin. Ang <b>Magagamit</b> na kulumna ay nagpapakita ng mga field na magagamit para sa iyo bilang isang admin para magdagdag patungo sa Default o Adisyunal na mga kulumna para gamitin ng mga user.',
    'LBL_LISTVIEW_EDIT' => 'List View Editor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Prebiyu',
    'LBL_MB_RESTORE' => 'Panumbalikin',
    'LBL_MB_DELETE' => 'Burahin',
    'LBL_MB_DEFAULT_LAYOUT' => 'Default Layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Magdagdag',
    'LBL_BTN_SAVE' => 'I-seyb',
    'LBL_BTN_SAVE_CHANGES' => 'I-save ang mga Pagbabago',
    'LBL_BTN_DONT_SAVE' => 'Itapon ang mga Pagbabago',
    'LBL_BTN_CANCEL' => 'I-cancel',
    'LBL_BTN_CLOSE' => 'Sarado',
    'LBL_BTN_SAVEPUBLISH' => 'I-save at I-deploy',
    'LBL_BTN_CLONE' => 'I-clone',
    'LBL_BTN_ADDROWS' => 'Magdagdag ng mga Hanay',
    'LBL_BTN_ADDFIELD' => 'Magdagdag ng patlang',
    'LBL_BTN_ADDDROPDOWN' => 'Magdagdag ng Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Pataas na pagkakasunod-sunod',
    'LBL_BTN_SORT_DESCENDING' => 'Pababa na pagkakasunod-sunod',
    'LBL_BTN_EDLABELS' => 'I-edit ang mga label',
    'LBL_BTN_UNDO' => 'Ibalik',
    'LBL_BTN_REDO' => 'Gumawang muli',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Magdagdag ng Kustom na Field',
    'LBL_BTN_EXPORT' => 'I-export ang mga customization',
    'LBL_BTN_DUPLICATE' => 'Kopyahin',
    'LBL_BTN_PUBLISH' => 'Ilathala',
    'LBL_BTN_DEPLOY' => 'I-deploy',
    'LBL_BTN_EXP' => 'I-export',
    'LBL_BTN_DELETE' => 'Burahin',
    'LBL_BTN_VIEW_LAYOUTS' => 'Tingnan ang mga Layout',
    'LBL_BTN_VIEW_FIELDS' => 'Tingnan ang mga Field',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Makikita ang mga relasyon',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Magdagdag ng Relasyon',
    'LBL_BTN_RENAME_MODULE' => 'Baguhin ang Pangalan ng Modyul',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Mali: Meron ng field',
    'ERROR_INVALID_KEY_VALUE' => "Mali: Hindi wasto ang Key Value: [']",
    'ERROR_NO_HISTORY' => 'Walang mga file ng kasaysayan ang nakita',
    'ERROR_MINIMUM_FIELDS' => 'Ang layout ay dapat maglaman ng kahit isang field',
    'ERROR_GENERIC_TITLE' => 'May maling naganap',
    'ERROR_REQUIRED_FIELDS' => 'Ikaw ba ay sigurado na nais mong magpatuloy? Ang sumusunod na kinakailangang mga larangan ay nawawala mula sa layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pangalan ng Pakete:',
    'LBL_MODULE_NAME' => 'Pangalan ng Modyul:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_KEY' => 'Key:',
    'LBL_ADD_README' => ' Basahinmoko',
    'LBL_LAST_MODIFIED' => 'Huling Binago:',
    'LBL_NEW_MODULE' => 'Bagong Modyul',
    'LBL_LABEL' => 'Etiketa:',
    'LBL_LABEL_TITLE' => 'Tatak',
    'LBL_WIDTH' => 'Ang Lapad',
    'LBL_PACKAGE' => 'Pakete:',
    'LBL_TYPE' => 'Uri:',
    'LBL_NAV_TAB' => 'Tab ng Nabigasyon',
    'LBL_CREATE' => 'Nilikha',
    'LBL_LIST' => 'Listahan',
    'LBL_VIEW' => 'Ang Tanawin',
    'LBL_HISTORY' => 'Tanawin ang kasaysayan',
    'LBL_RESTORE_DEFAULT' => 'Ibalik sa Default',
    'LBL_ACTIVITIES' => 'Ang mga aktibidad',
    'LBL_NEW' => 'Bago',
    'LBL_TYPE_BASIC' => 'panimula',
    'LBL_TYPE_COMPANY' => 'kompanya',
    'LBL_TYPE_PERSON' => 'tao',
    'LBL_TYPE_ISSUE' => 'isyu',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'Ito ay ang subpanel na ipapakita sa iyong modyul',
    'LBL_MSUB' => 'Ito ay ang subpanel na ibinibigay ng iyong modyul para sa kaugnay na modyul na ipapakita',
    'LBL_MB_IMPORTABLE' => 'Pag-aangkat',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] ay binura',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'I-export ang mga customization',
    'LBL_EC_NAME' => 'Pangalan ng Pakete:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_EC_CHECKERROR' => 'Pakipili ng module.',
    'LBL_EC_CUSTOMFIELD' => 'nacustomize na field o mga field',
    'LBL_EC_CUSTOMLAYOUT' => 'nacustomize na layout o mga layout',
    'LBL_EC_NOCUSTOM' => 'Walang mga module na nacustomize.',
    'LBL_EC_EMPTYCUSTOM' => 'walang laman na mga customization.',
    'LBL_EC_EXPORTBTN' => 'I-export',
    'LBL_MODULE_DEPLOYED' => 'Ang module ay na-deploy.',
    'LBL_UNDEFINED' => 'hindi natukoy',
    'LBL_EC_VIEWS' => 'nacustomize na view o mga view',
    'LBL_EC_SUITEFEEDS' => 'nacustomize na feed o mga feed',
    'LBL_EC_DASHLETS' => 'nacustomize na dashlet o mga dashlet',
    'LBL_EC_CSS' => 'nacustomize na css o mga css',
    'LBL_EC_TPLS' => 'nacustomize na tpl o mga tpl',
    'LBL_EC_IMAGES' => 'nacustomize na imahe o mga imahe',
    'LBL_EC_JS' => 'nacustomize na js o mga js',
    'LBL_EC_QTIP' => 'nacustomize na qtip o mga qtip',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Bigong mabawi ang datos',
    'LBL_AJAX_LOADING' => 'Nag-lo-load...',
    'LBL_AJAX_DELETING' => 'Binubura...',
    'LBL_AJAX_BUILDPROGRESS' => 'Isagawa na progreso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'I-deploy na progreso...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resulta',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Ang operasyong ito ay matagumpay na nakompleto',
    'LBL_AJAX_LOADING_TITLE' => 'Isinasagawa...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Pakiusap maghintay, naglo-load...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Ikaw ba ay sigurado na nais mong tanggalin ang paketeng ito? Ito ay permanenteng buburahin ang lahat ng mga file na nauugnay kasama sa pakete na ito.',
    'LBL_JS_REMOVE_MODULE' => 'Ikaw ba ay sigurado na nais mong tanggalin ang modyul na ito? Ito ay permanenteng buburahin ang lahat ng mga file na nauugnay kasama sa pakete na ito.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Anumang mag pag-customize na ginawa mo sa studio ay mapapatungan kapag ang modyul na ito ay lumawak na muli. Sigurado ka bang gusto mong magpatuloy?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Pagde-deploy ng Pakete',
    'LBL_JS_VALIDATE_NAME' => 'Pangalan - Dapat alphanumeric, nagsisimula sa isang titik at walang espasyo.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Ang pangalan ng Pakete ay umiiral na',
    'LBL_JS_VALIDATE_KEY' => 'Susi - Dapat ay alphanumeric, magsimula sa isang letra at maglagay ng walang mga puwang.',
    'LBL_JS_VALIDATE_LABEL' => 'Paki-enter ng isang label na gagamitin bilang Pangalan ng Display para sa modyul na ito',
    'LBL_JS_VALIDATE_TYPE' => 'Pakiusap pumili ng uri ng modyul na nais mong isagawa mula sa listahan sa itaas',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - pakiusap magdagdag ng isang label na maipapakita sa itaas ng subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Ang pagbubura ng pasadyang field na ito ay magbubura ng kapwa pasadyang field at lahat ng datos na naka-ugnay sa pasadyang field sa database. Ang field ay hindi na lilitaw pa sa anumang mga layout ng modyul. \\n\\nGusto mo bang ituloy?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sigurado ka ba na nais mong burahin ang relasyong ito?',
    'LBL_CONFIRM_DONT_SAVE' => 'Ang mg pagbabago ay nagawa na mula pa noong huli mong pag-save, gusto mo bang i-save?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'I-save ang mga Pagbabago?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Ang datos ay maaaring naputol at hindi maaaring matapos, sigurado ka bang magpatuloy?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Pumili ng angkop na uri ng datos base sa uri ng datos na i-enter sa field.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'I-reset',
    'LBL_RESET_MODULE' => 'I-reset ang module',
    'LBL_REMOVE_CUSTOM' => 'Alisin ang mga customization',
    'LBL_CLEAR_RELATIONSHIPS' => 'Alisin ang mga relasyon',
    'LBL_RESET_LABELS' => 'I-reset ang mga Label',
    'LBL_RESET_LAYOUTS' => 'I-reset ang mga Layout',
    'LBL_REMOVE_FIELDS' => 'Tanggalin ang Kustom na mga Field',
    'LBL_CLEAR_EXTENSIONS' => 'Alisin ang mga Ekstensyon',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => ' kasaysayan',

    'fieldTypes' => array(
        'varchar' => 'TextField',
        'int' => 'Integer',
        'float' => 'Float',
        'bool' => 'Tsekbox',
        'enum' => 'Dropdown',
        'dynamicenum' => 'Dinamikang Dropdown',
        'multienum' => 'Maramihang pagpili',
        'date' => 'Petsa',
        'phone' => 'Telepono',
        'currency' => 'Ang Pera',
        'html' => 'HTML',
        'radioenum' => 'Ang radyo',
        'relate' => 'Releyt',
        'address' => 'Tirahan',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Oras sa petsa',
        'decimal' => 'Decimal',
        'image' => 'Imahe',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Madalas na ginagamit na mga label",
        "all" => "Lahat ng mga Label",
    ),

    'parent' => 'Baluktot na nauugnay',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Pinipili mo ang aytem na ito para sa pagtanggal mula sa listahan ng dropdown. Anumang mga field ng dropdwon na gumagamit sa listahan na ito kasama ang aytem na ito bilang isang halaga ay hindi na muli maipapakita ang halaga, at ang halaga ay hindi na muling mapipili mula sa dropdown na mga field. Sigurado ka ba na gusto mong magpatuloy?",

    'LBL_ALL_MODULES' => 'Lahat ng mga module',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
