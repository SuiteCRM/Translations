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
    'LBL_LOADING' => 'Ga-loading' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Itago ang mga Opsyon' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Tangtangon' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Pag-gahin ug <b>Ngalan</b> para sa pakete. Ang ngalan nga imung gisud dapat jud naka-alphanumeric ug wlay sulod nga espasyo. (Sampol: HR_Management)<br/><br/> Pwede kang maka hatag sa <b>Tig-gama</b> ug <b>Deskripsyon</b> na impormasyon para sa pakete. <br/><br/>Pindota<b>E-save</b> para makahimug pakete.',
            'modify' => 'Ang mga kina-iya ug posibleng buhaton para sa <b>Package</b> kay makit-an diri. <br><br> Pwede kang maka usab sa <b>Ngalan</b>,<b>Tig-gama</b> ug <b>Paghulagway</b> sa pakete, ug pwede pod matan-aw ug ma-customize ang tanang mga modyul nga anaa sud sa pakete. <br><br>Pindotin<b>Bag-ong Modyul</b> para makahimu ug modyul para sa pakete.<br><br> Kung ang pakete nag-apil bisag usa nga modyul, pwede kang maka<b>Sangyaw</b> ug maka<b>Padala</b> sa pakete, ug mahimu pod maka <b>Pagawas</b> sa customisasyon nga nahimu sa pakete.',
            'name' => 'Kini ang <b>Ngalan</b> sa karun nga pakete. <br/><br/> Ang ngalan nga imung gi-enter dapat jud e-alphanumeric, sugdi sa letra ug walay lugar nga apil. (Sampol: HR_Management)',
            'author' => 'Kini ang <b>Tig-gama</b> nga napakita sa panahon sa pag-instol ingon sa pangan sa entity nga naghimu sa pakete.<br><br> Ang tig-gama pwedeng bisag sa indibidwal o kaha kompanya.',
            'description' => 'Kini ang <b>Paghulagway</b> sa pakete nga gipakita sa panahon sa pag-instol.',
            'publishbtn' => 'Pindota ang <b>Pagsangyaw</b> para ma-save ang tanang datos nga nasulod ug para mahimu ang .zip nga han-ay nga maoy installable nga bersyon sa pakete. <br><br>Gamita<b>Modyul nga Tig-load</b> para mapasaka ang .zip nga han-ay ug ma-instol ang pakete.',
            'deploybtn' => 'Pindota ang <b>Padala</b> para ma-save ang tanang datos nga nasulod ug para ma-instol ang pakete, apil ang tanang modyul, sa karun pananglitan.',
            'duplicatebtn' => 'Pindota ang <b>Duplikit</b> para makopya ang mga sulod sa pakete para sa bag-ong pakete ug mapakita ang bag-ong pakete. <br/><br/>Para sa bag-ong pakete, bag-ong ngalan nga tinguhang mahimu automatically pinaagi sa pagbutang ug numero sa tumoy sa ngalan sa paketeng gigamit para mohimu sa usa ka bag-o. Pwede ka maka ilis ug ngalan sa bag-ong pakete pinaagi sa pagsulod sa bag-ong <b>Ngalan</b> ug pindota ang <b>Save</b>.',
            'exportbtn' => 'Pindota ang <b>Pa-gawas</b> para mohimu ug .zip nga han-ay nga nagsulod sa mga customisasyong nahimu sa pakete.<br><br> Ang nagamang han-ay kay dili installable nga bersyon sa pakete.<br><br>Use <b>Modyul nga Tig-load</b>para mokuha sa .zip nga han-ay ug para naay pakete, apil ang mga customisasyon, makita sa Modyul nga Tig-himu.',
            'deletebtn' => 'Pindota ang<b>Pang-wagtang</b> para mawala kining pakete ug tanang mga han-ay nga kaliwat sa ni-ining pakete.',
            'savebtn' => 'Pindota ang<b>Save</b> para ma-save ang tanang nasulod nga datos nga kaliwat sa pakete.',
            'existing_module' => 'Pindota ang<b>modyul</b> icon para mausab ang mga kina-iya ug customisasyon sa mga fields, mga relasyon ug mga porma nga nalambigit ni-ining modyul.',
            'new_module' => 'Pindota ang<b>Bag-ong Modyul</b> para makahimu ug bag-ong modyul para ni-ining pakete.',
            'key' => 'Kining lima ka letrang, alphanumeric<b>Key</b> tinguhang magamit para sa prefix sa tanang direktoryo,<br><br>Ang key kay gigamit sa tinguhang makab-ot ang lamisa sa ngalan nga talagsaon.',
            'readme' => 'Pindota ang para modugang<b>Basahako</b> nga teks para ni-ining pakete.<br><br>Ang Basahako tinguhang ma-anaa sa panahon sa pag-instol.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Pag-gahin ug <b>Ngalan</b> para sa modyul. Ang <b>Label</b> nga imung igahin kay makita sa tab nga navigasyon. <br/><br/>Pilia para makita ang tab sa navigasyon para sa modyul pinaagi sa pagsusi sa <b>Navigation Tab</b> susi nga kahon.<br/><br/>Dayon pilia ang klasi nga modyul nga imung ganahang himuon. <br/><br/>Pilia ang template nga klasi. Matag usa nga template anaay kaugalingong set sa fields, susama sa pre-defined layouts, para magamit alang sa basihan para sa imung modyul.<br/><br/>Pindota<b>Save</b> para makahimu ug modyul.',
            'modify' => 'Pwede nimung mausab ang mga kinaiya sa modyul o kaha ma customize ang <b>Fields</b>, <b>Mga Relasyon</b> ug <b>Layouts</b> kaliwat sa modyul.',
            'importable' => 'Pagsusi sa <b>Importable</b> saktong kahon nagtinguha nga mahimong maka-angkat para ni-ining modyul. <br><br> Ang dugtong para sa Wizard nga Pang-angkat nagtinguhang makita sa Mubongputol nga panel sa modyul. Ang Wizard nga gi-angkat nag pasilitar sa pag-angkat ug datos gikan sa gawas nga mga tinubdan paingon sa custom modyul.',
            'team_security' => 'Pagsusi sa <b>Grupong Pang-seguridad</b>saktong kahon nagtinguhang mahimu ang grupong pang-seguridad para sa kining modyul.<br/><br/>Kung ang grupong pang-seguridad kay napahimo, ang Grupo sa pag-pilig lugar nagtinguhang makit-an sulod sa mga rekord diha sa modyul ',
            'reportable' => 'Pagsusi ni-ining kahon nagtinguha sa pagtugot para makakuhag mga balita nga nagdagan kontra ni-ina.',
            'assignable' => 'Pagsusi ni-ining kahon nagtinguha sa pagtugot sa rekord nga anaa sa modyul para mahatag sa piniling manggamitay.',
            'has_tab' => 'Pagsusi sa <b>Kawil Pang-nabigar</b> nagtinguhang makahatag ug kawil pang-nabigar para sa modyul.',
            'acl' => 'Pagsusi ni-ining kahon nagtinguhang mapahimu ang mga pagpugong sa agianan ni-ining modyul, uban sa seguridad nga pang tupong ug lugar.',
            'studio' => 'Pagsusi ni-ining kahon nagtinguhang magtugot sa mga administrador para ma-cusctomize kining modyul sulod sa Studyo.',
            'audit' => 'Pagsusi ni-ining kahon nagtinguhang magtugot sa pag-awdit para sa kining modyul. Mga kausaban sa seguradong lugar nagtinguhang matali para ang mga administrador maka-tuon sa dugay na nga kausaban.',
            'viewfieldsbtn' => 'Pindota ang<b>Tan-aw sa mga Lugar</b> para makit-an ang mga kaubang lugar apil ang modyul ug para makahimu ug makausab sa mga custom nga lugar.',
            'viewrelsbtn' => 'Pindota ang <b>Tan-aw sa mga Relasyon</b> para makit-an ang mga kaubang relasyon uban ni-ining modyul ug para makahimu ug mga bag-ong relasyon.',
            'viewlayoutsbtn' => 'Pindota ang <b>Tan-aw sa mga Han-ay</b> para makit-an ang mga han-ay para sa modyul ug para ma-customize ang paghimutang sa lugar sulod ni-ining mga han-ay.',
            'duplicatebtn' => 'Pindota ang <b>Pareho</b> para makopya ang mga kinaiya sa modyul padulong sa bag-ong modyul ug para mapakita ang bag-ong modyul.<br/><br/> Sa bag-ong modyul, ang bag-ong ngalan nagtinguhang mahimu automatically pinaagi sa pagbutang ug numero sa tumoy sa ngalan sa modyul nga gigamit para makahimu ug usa ka bag-o.',
            'deletebtn' => 'Pindota ang <b>Wala-a</b> para mawala kining modyul.',
            'name' => 'Mao kini ang <b>Ngalan</b> sa karun nga modyul.<br/><br/>Ang ngalan dapat kay alphanumeric ug dapat magsugod uban sa letra ug walay lugar nga masulod. (Sampol: HR_Management)',
            'label' => 'Mao kini ang <b>Label</b> nga nagtinguhang makita sa kawil pang-nabigar para sa modyul. ',
            'savebtn' => 'Pindota ang <b>Save</b>para ma-save ang tanang nasulod nga mga datos nga kaliwat sa modyul.',
            'type_basic' => 'Ang <b>Basic</b> nga klaseng templet kay naghatag ug mga basic nga lugar, sama sa ang Ngalan, Igahin para, Grupo, Petsa sa Pagkahimu ug mga Paghulagway sa lugar.',
            'type_company' => 'Ang <b>Kompanya</b>klase sa templeyt naghatag ug organisasyon-espisipikong mga lugar. sama sa Ngalan sa Kompanya, Industriya ug Lugar para Bayranan<br/><br/>Gamita kining templeyt para makahimu ug mga modyul nga managsama para sa basehanan sa mga Account nga modyul.',
            'type_issue' => 'Ang <b>Isyu</b> klaseng templeyt naghatag ug kaso-ug bug-espisipikong mga lugar, sama sa Numero, Estado, Prayoridad ug Paghulagway.<br/><br/>Gamita kining templeyt para makahimug mga modyul nga managsama para sa basehanang Kaso ug mga Bug nga modyul.',
            'type_person' => 'Ang <b>Tao</b> klase nga templeyt naghatag ug indibidwal-espisipikong lugar, sama sa Salutasyon, Titulo, Ngalan, Pinuy-anan ug Numero sa Selpon.<br/><br/>Gamita kining templeyt para makahimug mga modyul nga managsama sa basehanang Kontak ug Pasiunang mga modyul.',
            'type_sale' => 'Ang <b>Sale</b>klase nga templeyt naghatag ug opurtunidad espisipikong lugar, sama sa Pasiunang Tinubdan, Entablado, Kantidad ug Probability.<br/><br/> Gamita kining templeyt para mohimu ug mga modyul nga managsama sa basehanang mga Opurtunidad nga modyul.',
            'type_file' => 'Ang <b>Payl</b> sa templeyt naghatag ug mga ispesipikong field sa Dokumento, sama sa Ngalan sa Payl, matang sa Dokumento, ug Pesta sa Pagmantala.<br><br>Gamiton kini nga templeyt alang sa paghimo ug mga modyul nga susama sa sukaranan nga modyul sa mga Dokumento.',

        ),
        'dropdowns' => array(
            'default' => 'Tanan nga mga <b>Dropdown</b> para sa aplikasyon kay gilista diri. <br><br>Ang mga dropdown kay mamahimong gamiton para sa mga field sa dropdown sa bisan asa nga modyul.<br><br>Para makahimo sa pag-usab sa mga ninglungtad na nga dropdown, iklik ang ngalan sa dropdown. <br><br>Klik <b>Magduang ug Dropdown</b> para makahimo ug bag-ong dropdown.',
            'editdropdown' => 'Ang mga listahan sa dropdown kay mamahimong gamiton para sa sukaranan o kustombre nga mga field sa dropdown sa bisan unsa nga modyul.<br><br>Maghatag ug <b>Ngalan</b> para sa listahan sa dropdown.<br><br>Kung aduna\'y bisan unsang mga pakete sa pinulongan nga naka-instalar sa aplikasyon, mamahimo ka nga magpili ug <b>Pinulongan</b> nga gamiton para sa mga listahan sa mga aytem. <br><br>Sa field sa <b>Ngalan sa Aytem</b>, maghatag ug ngalan para sa opsyon sa listahan sa dropdown. Kini nga ngalan kay dili makita sa listahan sa dropdown nga malantaw sa mga manggamitay.<br><br>Sa field sa <br>Timaan sa Displey</b>, maghatag ug tumaan nga makita sa mga manggamitay.<br><br>Human sa paghatag ngalan sa sa aytem ug timaan sa displey, iklik ang <b>Magdugang</b> para makadugang ug aytem sa listahan sa dropdown.<br><br>Para mahan-ay ug balik ang mga aytem sa listahan, pagbitad ug paghulog sa mga aytem sa gilauman nga mga posisyon.<br><br>Para mausab ang timaan sa displey sa aytem, iklik ang <b>Usbon ang aykon</b>, ug isulod ang bag-o nga timaan. Para wagtangon ang aytem gikan sa listahan sa dropdown, iklik ang <b>Wagtangon ang aaykon</b>,<br><br>Para sa dili pagpadayon sa mga kausaban para sa timaan sa displey, iklik ang <b>Ayaw Buhata</b>. Para sa pagalik sa kausaban nga nabuhat, iklik ang <b>Balika</b>.<br><br>Iklik ang <b>I-seyb</b> para maseyb ang listahan sa dropdown.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Tanan nga mga field nga gidispley sa <b>Subpanel</b> kay makita diri.<br><br>Ang <b>Nakadefault</b> nga kolum nga naglangkob sa mga field nga gidispley sa Subpanel.<br/><br/>Ang <b>Dili Makita</b> nga kolum nga naglangkob sa mga field nga mamahimong idugang sa Nakadefault nga kolum.'
        ,
            'savebtn' => 'Iklik ang <b>Iseyb & I-deploy</b> para pagseyb sa mga kausaban nga imong nahimo ug para himuon silang aktibo sulod sa modyul.',
            'historyBtn' => 'Iklik ang <b>Tan-awon ang Kasaysayan</b> para makita ug ibalik sa pagtipig ang kaniadtong naseyb na nga plano gikan sa kasaysayan.',
            'historyDefault' => 'Iklik ang <b>Balikon sa Pagtipig sa Nakadefault</b> para balikon sa pagtipig ang mga talan-awon sa orihinal nga plano niini.',
            'Hidden' => '<b>Gitago</b> nga mga field kay dili makita sa subpanel.',
            'Default' => 'Ang <b>Nakadefault</b> nga mga field kay makita sa subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Ang tanan nga mga field nga gidispley sa <b>Listahan sa Makita</b> kay makita diri.<br><br>Ang <b>Nakadefault</b> nga kolum naglangkob sa mga field nga gidispley sa Listahan sa Makita pinaagi sa pagdefault.<br/><br/> Ang <b>Anaa</b> nga kolum naglangkob sa mga field nga mamahimong pilion sa manggamitay sa Pagpangita para makahimo ug kustombre nga Listahan sa Makita. <br/><br/>Ang <b>Gitago</b> nga kolum naglangkob sa mga field nga mamahimong idugang sa Nakadefault o Anaa nga kolum.'
        ,
            'savebtn' => 'Iklik ang <b>Iseyb & I-deploy</b> para pagseyb sa mga kausaban nga imong nahimo ug para himuon silang aktibo sulod sa modyul.',
            'historyBtn' => 'Iklik ang <b>Tan-awon ang Kasaysayan</b> para makita ug balikon sa pagtipig sa mga kaniadtong naseyb na nga plano gikan sa kasaysayan.<br><br> <b>Ibalik sa Pagtipig</b> sulod sa <b>Tan-awon ang Kasaysayan</b> magbalik sa pagtipig sa pagbutang sa field sulod sa mga kaniadtong naseyb na nga mga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon tupad sa kada field.',
            'historyDefault' => 'Iklik ang <b>Ibalik sa Pagtipig nga Nakadefault</b> para matipigan ug balik ang talan-awon sa orihinal nga plano niini. Ang <br><br><b>Ibalik sa Pagtipig sa Nakadefault</b> kay magtipig lamang ug balik sa pagkabutang sa mga field sulod sa oirhinal niini nga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon sunod sa kada field.',
            'Hidden' => 'Ang <b>Gitago</b> nga mga field kay kasamtangang wala para sa mga manggamitay sa pagtan-aw sa mga Makita sa Listahan.',
            'Available' => 'Ang <b>Anaa</b> nga mga field kay dili makita pinaagi sa default, pero mamahimong idugang sa Makita sa Listahan sa mga manggamitay.',
            'Default' => 'Ang <b>Nakadefault</b> nga mga field kay makita sa mga Listahan sa Makita nga wala gikustomays sa mga manggamitay.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Ang tanan nga mga field kay mamahimong idispley sa <b>Listahan sa Makita</b> kay makita diri.<br><br>Ang <b>Nakadefault</b> nga kolum kay naglangkob sa mga field nga gidispley sa Listahan sa Makita pinaagi sa pagdefault.<br/><br/>Ang <b>Gitago</b> nga mga kolum kay naglangkob sa mga field nga mamahimong idugang sa kolum nga Nakadefault o Anaa.'
        ,
            'savebtn' => 'Iklik ang <b>Iseyb & I-deploy</b> para pagseyb sa mga kausaban nga imong nahimo ug para himuon silang aktibo sulod sa modyul.',
            'historyBtn' => 'Iklik ang <b>Tan-awon ang Kasaysayan</b> para makita ug balikon sa pagtipig sa mga kaniadtong naseyb na nga plano gikan sa kasaysayan.<br><br> <b>Ibalik sa Pagtipig</b> sulod sa <b>Tan-awon ang Kasaysayan</b> magbalik sa pagtipig sa pagbutang sa field sulod sa mga kaniadtong naseyb na nga mga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon tupad sa kada field.',
            'historyDefault' => 'Iklik ang <b>Ibalik sa Pagtipig nga Nakadefault</b> para matipigan ug balik ang talan-awon sa orihinal nga plano niini. Ang <br><br><b>Ibalik sa Pagtipig sa Nakadefault</b> kay magtipig lamang ug balik sa pagkabutang sa mga field sulod sa oirhinal niini nga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon sunod sa kada field.',
            'Hidden' => 'Ang <b>Gitago</b> nga mga field kay kasamtangang wala para sa mga manggamitay sa pagtan-aw sa mga Makita sa Listahan.',
            'Default' => 'Ang <b>Nakadefault</b> nga mga field kay makita sa mga Listahan sa Makita nga wala gikustomays sa mga manggamitay.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Ang tanan nga mga field nga mamahimong idispley sa <b>Salaan</b> nga porma kay makita diri.<br><br>Ang <b>Nakadefault</b> nga kolum kay naglangkob sa mga field nga idispley sa porma sa Pagpangita.<br/><br/>Ang <b>Gitago</b> nga kolum kay naglangkob sa mga field nga anaa alang kanimo isip usa ka admin sa pagdugang sa porma sa porma sa pagpangita.'
        ,
            'savebtn' => 'Ang pagklik sa <b>Iseyb & I-deploy</b> kay magseyb sa tanan nga kausaban ug mahimo kanila nga aktibo',
            'Hidden' => 'Ang <b>Gitago</b> nga mga field kay dili makita sa Pagpangita.',
            'historyBtn' => 'Iklik ang <b>Tan-awon ang Kasaysayan</b> para makita ug balikon sa pagtipig sa mga kaniadtong naseyb na nga plano gikan sa kasaysayan.<br><br> <b>Ibalik sa Pagtipig</b> sulod sa <b>Tan-awon ang Kasaysayan</b> magbalik sa pagtipig sa pagbutang sa field sulod sa mga kaniadtong naseyb na nga mga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon tupad sa kada field.',
            'historyDefault' => 'Iklik ang <b>Ibalik sa Pagtipig nga Nakadefault</b> para matipigan ug balik ang talan-awon sa orihinal nga plano niini. Ang <br><br><b>Ibalik sa Pagtipig sa Nakadefault</b> kay magtipig lamang ug balik sa pagkabutang sa mga field sulod sa oirhinal niini nga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon sunod sa kada field.',
            'Default' => 'Ang <b>Nakadefault</b> nga mga field kay makita sa Pagpangita.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Ang lugar sa <b>Plano</b> kay naglangkob sa mga field nga kasamtangang gidispley sa sulod sa <b>Detalye sa Talan-awon</b>.<br/><br/>Ang <b>Toolbox</b> kay naglangkob sa <b>Recycle Bin</b> ug ang mga field ug mga elemento sa plano kay mamahimong idugang sa plano.<br><br>Maghimo ug kausaban sa plano sa pagbira ug paghulog ug mga elemento ug mga field tali sa <b>Toolbox</b> ug sa <b>Plano</b> nga naa sulod sa plano niini.<br><br>Para sa pagwangtang sa field gikan sa plano, bitara ang field sa <b>Recycle Bin</b>. Ang field kay mamahimong naa sa Toolbox para sa pagdugang sa plano.',
            'defaultquickcreate' => 'Ang lugar sa <b>Plano</b> kay naglangkob sa mga field nga kasamatangang gidispley sa sulod sa porma sa <b>Quickcreate</b>. <br><br> Ang porma sa QuickCreate kay makita sa mga subpanel para sa modyul kung ang Magbuhat nga buton kay giklik.<br/><br/>Ang <b>Toolbox</b> kay naglangkob sa <b>Recycle Bin</b> ug ang mga elemento sa field ug sa plano nga mamahimong idugang sa plano.<br><br>Pagbuhat ug kausaban sa plano pinaagi sa pagbitad ug paghulog sa mga elemento ug mga field tali sa <b>Toolbox</b> ug sa <b>Plano</b> ug sa sulod sa layout niini.<br><br>Para sa pagwagtang sa field gikan sa layout, bitara ang field sa <b>Recycle Bin</b>. Ang field kay mamahimong anaa sa Toolbox para sa pagdugang sa plano.',
            //this default will be used for edit view
            'default' => 'Ang lugar sa <b>Plano</b> kay naglangkob sa mga field nga kasamtangang gidispley sa sulod sa <b>Usbon ang Talan-awon</b>.<br/><br/>Ang <b>Toolbox</b> kay naglangkob sa <b>Recycle Bin</b> ug ang mga elemento sa mga field ug sa plano kay mamahimong idugang sa plano.<br><br>Pagbuhat ug mgqa kausaban sa plano sa pagbitad ug paghulog sa mga elemento sa mga field tali sa <b>Toolbox</b> ug sa <b>Plano</b> ug sa sulod sa plano niini.<br><br>Para sa pagwagtang sa field gikan sa plano, bitara ang field sa <b>Recycle Bin</b>. Ang field kay mamahimong anaa sa Toolbox para sa pagdugang sa plano.',
            'saveBtn' => 'Iklik ang <b>I-seyb</b> para sa pagpatunhay sa mga kausaban nga nabuhat sa plano sukad sa katapusan nimo pagseyb niini.<br><br>Ang mga kausaban kay dili idispley sa modyul hangtod nga imong I-deploy ang pag-seyb sa mga kausaban.',
            'historyBtn' => 'Iklik ang <b>Tan-awon ang Kasaysayan</b> para makita ug balikon sa pagtipig sa mga kaniadtong naseyb na nga plano gikan sa kasaysayan.<br><br> <b>Ibalik sa Pagtipig</b> sulod sa <b>Tan-awon ang Kasaysayan</b> magbalik sa pagtipig sa pagbutang sa field sulod sa mga kaniadtong naseyb na nga mga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon tupad sa kada field.',
            'historyDefault' => 'Iklik ang <b>Ibalik sa Pagtipig nga Nakadefault</b> para matipigan ug balik ang talan-awon sa orihinal nga plano niini. Ang <br><br><b>Ibalik sa Pagtipig sa Nakadefault</b> kay magtipig lamang ug balik sa pagkabutang sa mga field sulod sa oirhinal niini nga plano. Para mausab ang mga timaan sa field, iklik ang Usbon nga aykon sunod sa kada field.',
            'publishBtn' => 'Iklik ang <b>I-seyb & I-deploy</b> para sa pag-seyb sa tanang kausaban nga imong nahimo sa plano sukad sa katapusang oras sa pagseyb nimo niini, ug para sa pag-aktibo sa mga kausaban sa modyul.<br><br>Ang plano kay madispley diha-diha dayon sa modyul.',
            'toolbox' => 'Ang <b>Toolbox</b> naglangkop sa <b>Recycle Bin</b>, dugang nga mga elemento sa plano ug ang koleksyon sa anaa nga mga field nga idugang sa plano.<br/><br/>Ang mga elemento sa plano ug mga field sa Toolbox kay mamahimong bitaron ug ihulog ngadto sa plano, ug ang mga elemento sa plano ug mga field kay mamahimong bitaron ug ihulog gikan sa plano ngadto sa Toolbox.<br><br>Ang mga elemento sa plano kay ang mga <b>Panel</b> ug ang mga <b>Laray</b>. Ang pagdugang sa ug bag-ong laray o bag-ong panel ngadto sa plano naghatag ug dugang nga mga lokasyon sa plano para sa mga field.<br/><br/>Ang pagbitad ug paghulog sa bisan unsa nga mga field sa Toolbox o plano ngadto sa gi-okupar sa posisyon sa field para sa pag-ilis sa mga lokasyon sa duha ka mga field.<br/><br/>Ang <b>Tigpuno</b> nga field kay maghimo ug mga blanko nga mga espasyo sa plano kung asa siya nahimutang.',
            'panels' => 'Ang lugar sa <b>Plano</b> naghatag ug talan-awon kung unsa ang makita sa plano sulod sa modyul kung ang mga kausaban kay nahimo sa plano ka nadeploy na.<br/><br/>Mamahimo kang mag-usab sa posisyon sa mga field, laray ug mga panel pinaagi sa pagbitad ug paghulog kanila sa imong gilauman nga lokasyon.<br/><br/>Ang pagwagtang sa mga elemento pinaagi sa pagbitad ug paghulog nila sa <b>Recycle Bin</b> sa Toolbax, o magdugang ug mga bag-ong mga elemento ug mga field pinaagi sa pagbitad nila gikan sa mga <b>Toolbox</b> ug paghulog nila sa gitinguha nga lokasyon sa plano.',
            'delete' => 'Magbitad ug maghulog ug bisan unsang elemento diri aron sa pagwagtang niini gikan sa plano',
            'property' => 'Usba Ang timaan sa gidispley para niini nga field. <br/><b>Tab Order</b> ang nagkontrolar kung giunsa paghan-ay sa mga swits sa tab key tali sa mga field.',
        ),
        'fieldsEditor' => array(
            'default' => 'Ang mga <b>Field</b> nga anaa para sa mga modyul kay nalista diri pinaagi sa Ngalan sa Field.<br><br>Ang mga kustom nga field nga nahimo para sa modyul kay makita sa ibabaw sa mga field nga anaa para sa modyul pinaagi sa nakadefault.<br><br>Alang sa pag-usab sa field, i-klik ang <b>Ngalan sa Field</b>.<br/><br/>Alang sa pagbuhat ug bag-o nga field, i-klik ang <b>Magdugang ug Field</b>.',
            'mbDefault' => 'Ang mga <b>Field</b> nga anaa para sa modyul kay nalista diri pinaagi sa Ngalan sa Field.<br><br>Alang sa pagkonpigyur sa mga panag-iya sa field, i-klik ang Ngalan sa Field.<br><br>Alang sa pagbuhat ug bag-ong field, i-klik ang <b>Magdugang ug Field</b>. Ang timaan subay uban sa ubang mga panag-iya para sa bag-ong field kay mamahimong usbon human ang pagbuhat niini pinaagi sa pag-klik sa Ngalan sa Field.<br><br>Human ma-deploy ang modyul, ang mga bag-ong field nga nahimo sa Builder sa Modyul kay giisip nga mga sukaran nga mga field sa nadeploy nga modyul sa Istudyo.',
            'addField' => 'Pagpili ug <b>Matang sa Kasayoran</b> para sa bag-o nga field. Ang matang nga imong napili nagdeterminar kung unsa nga klase sa mga karakterkay mamahimong isulod sa field. Pananglitan, ang mga numero lamang nga integer ang mamahimong isulod sa mga field nga naa sa matang sa datos sa Integer.<br><br>maghatag ug <b>Ngalan</b> alang sa field. Ang ngalan kay gikinahanglang alphanumeric ug dili dapat maglangkop ug bisan unsang mga espasyo. Ang mga underscore kay balido.<br><br> Ang <b>Timaan sa Displey</b> kay ang timaan nga makita sa mga field sa plano sa modyul. Ang <b>Timaan sa Sistema</b> kay gamiton sa pagdangop sa field sa kodigo.<br><br>Nagdepende sa matang sa kasayoran nga napili alang sa field, kasagaran o tanan nga mosunod nga mga kabtangan kay mamahimong itakda para sa field:<br><br> <b>Teksto sa Tabang</b> kay temporaryo nga makita samtang ang mga hover sa manggamitay sa tibuok nga field ug mamahimong gamiton sa pag-aghat sa manggamitay para sa matang sa gitinguha nga gidugang.<br><br> <b>Teksto sa Komento</b> kay makita lamang sa Istudyo &/o Builder sa Modyul, ug mamahimong gamiton sa paghulagway sa field para sa mga administrador.<br><br> <b>Nakadefault Bili</b> kay makita sa field. Ang mga manggamitay kay mamahimong magpasulod ug mga bag-ong bili sa field o makagamit sa nakadefault nga bili.<br><br> Pagpili ug checkbox <b>Pag-apdeyt nga Pangmasa</b> nga nakahan-ay alang sa paggamitsa Pag-apdeyt nga Pangmasa nga kalidad sa field.<br><br>Ang <b>Kinadak-an nga Sukod</b> nga bili kay magdeterminar sa kinadak-ang numero sa mga karakter nga mamahimong ipasulod sa field.<br><br>Pili-a ang checkbox sa <b>Gikinahanglang Field</b> alang sa pagbuhat ug mga gikinahanglang field. Ang bili kay gikinahanglang mahatag sa field aron mamahimong i-seyb ang rekord nga naglangkop sa field.<br><br> Pagpili ug checkbox nga <b>Mataho</b> aron magtugot sa field nga mamahimong gamiton alang sa mga salaan ug para sa mga i-displey nga mga kasayoran sa mga Taho.<br><br> Pili-a ang checkbox nga <b>Awdit</b> aron mamahimong subayon ang mga kausaban sa field nga naa sa Talaan sa Kausaban.<br><br>Pagpili ug opsyon adto sa mga <b>Importable</b> nga field para tugotan, dili tugotan o magkinahanglan sa field nga i-import ngadto sa Import Wizard.<br><br>Pili-a ang opsyon sa <b>Kopyaha ang Paghiusa</b> nga field aron sa paghimo o dili paghimo sa mga Kopya sa mga Paghiusa ug Pangita-a ang mga Kopya nga mga bahin niini.<br><br>Ang mga dugang nga mga kabtangan kay mamahimong itakda alang sa mga sigurado nga mga matang sa kasayoran.',
            'editField' => 'Ang mga kabtangan niini nga mga field kay mamahimong i-kustomays. <br><br>I-klik ang <b>Dublehon</b> aron makahimo ug bag-o nga mga field nga aduna\'y susamang mga kabtangan.',
            'mbeditField' => 'Ang <b>Timaan sa Displey</b> sa field sa usa ka templeyt kay mamahimong i-kustomays. Ang ubang mga kabtangan sa field kay dili mamahimong i-kustomays.<br><br>I-klik ang <b>Doblehon</b> aron makahimo ug bag-o nga field nga aduna\'y susamang mga kabtangan.<br><br>Aron sa pagwagtang ug templeyt sa field aron dili kini madispley sa modyul, wagtanga ang field gian sa angay nga mga <b>Plano</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'I-eksport ang mga kustomisasyon sa nahimo sa Istudyo pinaagi sa pagbuhat ug mga pakete nga mamahimong i-upload ngaddto sa ubang instans sa SuiteCRM gamit ang <b>Tig-load sa Modyul</b>.<br><br> Una, maghatag pud ug <b>Ngalan sa Pakete</b>. Mamahimo kang maghatag ug impormasyon sa <b>Manunulat</b> ug <b>Paghulagway</b> para sa pakete.<br><br>Pili-a ang mga modyul nga naglangkob sa mga kustomisasyon nga gusto nimong i-eksport. Ang mga modyul lamang nga naglangkob ug kustomisasyon kay makita para imo kining mapili.<br><br>Unya i-klik ang <b>I-eksport</b> para makahimo ug .zip nga payl para sa pakete nga naglangkob sa mga kustomisasyon.',
            'exportCustomBtn' => 'I-klik ang <b>I-eksport</b> para sa pagbuhat ug .zip nga payl para sa pakete nga naglangkob sa mga kustomisasyon nga gusto nimong i-eksport.',
            'name' => 'Kini ang <b>Ngalan</b> sa pakete. Kini ang ngalan kay i-displey samatang nag-instalar.',
            'author' => 'Kini ang <b>Manunulat</b> nga gidispley samtang gi-instalar sama sa ngalan sa tibuok entity nga naghimo sa pakete. Ang Manunulat kay mamahimong sa indibidwal o usa ka kompanya.',
            'description' => 'Kini ang <b>Paghulagway</b> sa pakete nga gipakita sa panahon sa pag-instol.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Malipayong pag-abot sa lugar sa <b>Mga Hiraminta sa Tig-debelop</b>. <br/><br/>Gamita ang mga hiraminta sulod niini nga lugar sa paghimo ug pagdumala sa mga sukaranan ug kustom nga mga modyul ug mga field.',
            'studioBtn' => 'Gamita ang <b>Istudyo</b> para makustomays ang mga modyul nga gideploy na.',
            'mbBtn' => 'Gamita ang <b>Builder sa Modyul</b> para sa paghimo sa mga bag-ong modyul.',
            'sugarPortalBtn' => 'Paggamit <b>SuiteCRM Portal Editor</b>sa pagdumala ug pag-adjsut sa SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Gmita ang <b>Tig-usab sa Dropdown</b> para sa pagdugang ug pag-usab sa mga dropdown para sa mga field sa dropdown.',
            'appBtn' => 'Ang mode sa aplikasyon kung asa nimo mamahimong ikustomays ang mga nagkada-iyang mga kabtangan sa programa, sama sa kung pila ka mga taho nga TPS nga gidespley sa homepage',
            'backBtn' => 'Balik sa premirong lakang.',
            'studioHelp' => 'Gamita<b>Istudyo</b>para mailhan unsa ug unsaon ang impormasyon nga makita sa mga modyul.',
            'moduleBtn' => 'Pindota ang pang-usab para sa kining modyul.',
            'moduleHelp' => 'Ang mga komponent nga pwede nimung ma-customize para sa modyul nga makita diri.<br><br>Pindota ang aykon para makapili sa komponent nga usbon.',
            'fieldsBtn' => 'Paghimu ug pag-customize <b>Mga Lugar</b> para matigum ang impormasyon sa modyul.',
            'labelsBtn' => 'Usba ang<b>Mga Label</b> nga makita para sa mga lugar ug sa ubang mga titulo sa modyul.',
            'relationshipsBtn' => 'Pun-e ug bag-o o tan-aw sa unsay naa<b>Mga Relasyon</b> para sa modyul.',
            'layoutsBtn' => 'I-kustomays ang modyul <b>Mga Han-ay</b>. Ang mga han-ay kay managlahing talan-awon sa modyul nga anaay mga lugar.<br><br>Pwede kang makatino hain sa mga lugar ang makita ug unsaon sila paghimutang sa usa ka han-ay.',
            'subpanelBtn' => 'Pagtino hain ang mga lugar nga makita sa <b>Subpanels</b> diha sa modyul.',
            'portalBtn' => 'I-kustomays ang modyul <b>Mga han-ay</b> nga makita diha sa <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Ang modyul <b>Mga Han-ay</b> nga pwedeng makustomays makita diri.<br><br>Ang mga han-ay nga nakita sa mga lugar ug lugar sa datos.<br><br>Pindota ang aykon para mopili ug han-ay nga usbon.',
            'subpanelHelp' => 'Ang <b>Subpanels</b> diha sa modyul nga pwedeng makustomays makita diri.<br><br>Pindota ang aykon para mopili ug modyul nga usbon.',
            'newPackage' => 'Pindota ang <b>Bag-ong Pakete</b> para mohimu ug bag-ong pakete.',
            'exportBtn' => 'Pindota <b>Pang-angkat nga mga Kustomisasyon</b> para mohimu ug mo-download sa pakete nga nagdalag mga kustomisasyon hinimo sa Istudyo para sa mga ispisipikong modyul.',
            'mbHelp' => 'Gamita ang b>Tig-himug Modyul</b>para mohimu ug mga pakete nga nagdalag kustom nga mga modyul base sa estandard o mga kustom nga butang.',
            'viewBtnEditView' => 'I-kustomays ang modyul nga <b>Usbon ang Talan-awong</b> han-ay.<br><br> Ang Usbon ang talan-awon kay porma nga nag-apil sa mga gisulod nga field para makuha ang datos nga gisulod sa manggamitay.',
            'viewBtnDetailView' => 'I-kustomays ang modyul nga <b>DetailView</b> han-ay.<br><br> Ang DetailView nagpakita sa manggamitay-gisud nga field datos.',
            'viewBtnDashlet' => 'I-kustomays ang modyul nga <b>SuiteCRM Dashlet</b>, apil ang SuiteCRM Dashlet\'s ListView ug Paghanap.<br><br>The SuiteCRM Dashlet nagtinguhang ma-anaa para makapuno para sa mga pahina diha sa Balay nga modyul.',
            'viewBtnListView' => 'I kustomays ang modyul nga <b>ListView</b> han-ay.<br><br>Ang Paghanap nga mga resulta nagpakita diha sa ListView.',
            'searchBtn' => 'I kustomays ang modyul nga <b>Pangita</b> han-ay.<br><br> Pagtino kung unsang mga field ang pwede para masala ang mga rekord nga makita diha sa ListView.',
            'viewBtnQuickCreate' => 'I kustomays ang modyul nga <b>DalingPaghimu</b> han-ay.<br><br>Ang DalingPaghimu nga porma nagpakita diha sa subpanels ug diha sa mga Email nga modyul.',
            'addLayoutHelp' => "Para makahimu ug kustom nga han-ay para sa Pang-seguridad nga Grupo nga nagpili sa dapat nga Pang-seguridad nga Grupo ug ang han-ay gikan sa kung para mokopya gikan sa sinugdanang tuldok.",
            'searchHelp' => 'Ang <b>Pagpangita</b> mga porma nga pwedeng ma kustomays makita dinhi.<br><br>Pagpangitag mga porma nga anaay mga field para pagsala sa mga rekord.<br><br>Pindota ang aykon para makapili sa pagpangitag han-ay para usbon.',
            'dashletHelp' => 'Ang <b>SuiteCRM Dashlet</b> mga han-ay nga pwedeng makustomays makita diri.<br><br>Ang SuiteCRM Dashlet nagtinguha nga ma-anaa para magpuno para sa mga pahina dinha sa Balayng modyul.',
            'DashletListViewBtn' => 'Ang <b>SuiteCRM Dashlet ListView</b>nagpakita sa mga rekord base sa SuiteCRM Dashlet mga salaan sa pagpangita.',
            'DashletSearchViewBtn' => 'Ang <b>SuiteCRM Dashlet Search</b>nagsala sa mga rekord para sa SuiteCRM Dashlet listahangtalan-awon.',
            'popupHelp' => 'Ang <b>Popup</b> mga han-ay nga pwedeng makustomays makita diri.<br>',
            'PopupListViewBtn' => 'Ang <b>Popup ListView</b> nagpakita sa mga rekord base sa Popup nga pagpangitag talan-awon.',
            'PopupSearchViewBtn' => 'Ang <b>Popup Search</b> nagpalantaw sa mga rekord para sa Popup nga listahangtalan-awon.',
            'BasicSearchBtn' => 'I-kustomays ang <b>Daling Salaan</b>porma nga makita dinha sa Daling Salaang kawit dinha sa Pagpangitag luna para sa modyul.',
            'AdvancedSearchBtn' => 'I-kustomays ang <b>Nag-unang Salaan</b>porma nga makita dinha sa Nag-unang Pagpangitag kawit dinha sa Pagpangitag luna para sa modyul.',
            'portalHelp' => 'I-dumala ug i-kustomays ang <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'I-upload ang <b>Istilong Hapin</b> para sa SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> kustomisasyon para sa SuiteCRM Portal beses.',
            'Layouts' => 'I-kustomays ang <b>Mga Han-ay</b>sa SuiteCRM Portal nga mga modyul.',
            'portalLayoutHelp' => 'Ag mga module sulod sa SuiteCRM portal kay magpakita niining dapita.<br><br> Pilia ang module sa pag usab sa <b>Layouts</b>.',
            'relationshipsHelp' => 'Ang tanang <b>Mga Relasyon</b>nga anaa tali sa modyul ug laing modyul nga napagawas makita diri.<br><br>Ang Relasyon <b>Ngalan</b>kay ang sistemang-naggamag ngalan para sa relasyon.<br><br>The <b>Kinaunhang Modyul</b> kay ang modyul nga nag angkon sa mga relasyon. Sa sampol, tanang mga kinaiya sa mga relasyon para sa mga Account na modyul kay ang primerong modyul ang nasulod dinha sa mga lmisa sa Account database.<br><br>Ang<b>Klase</b> kay ang klaseng relasyon nga anaa tali sa Primerong modyul ug ang <b>Kaliwat nga Modyul</b>.<br><br>Pindota ang kolum sa titulo para mahan-ay ang kolum.<br><br>Pindota ang laray dinha sa lamisang relasyon para matan-aw ang mga kinaiyang naglambigit diha sa relasyon. br><br>Pindota<b>Pun-e ang Relasyon</b>para makahimug bag-ong relasyon.<br><br>Mga relasyon pwedeng makahimu tali sa bisan asa sa duha ka mga modyul nga napagawas.',
            'relationshipHelp' => '<b>Mga Relasyon</b> nga pwedeng makahimu tali sa modyul ug laing napagawas nga modyul.<br><br>Ang mga relasyon ay napakita sa panan-aw pina-agi sa mga subpanel ug ilambigit ang mga field dinha sa modyul nga mga rekord.<br><br>Pili-a ang isa sa mga kaubang relasyon<b>Mga Klase</b> para sa modyul:<br><br> <b>Usa-para-Usa</b> -Duha ka modyul nga mga rekord nagtinguha nga makasulod ug kaliwat nga mga field.<br><br> <b>Usa-para-Daghan</b> - Ang Primerong Modyul nga rekord nagtinguha nga makasulod ug subpanel, ug ang Kaliwat nga Modyul nga rekord nagtinguhag makasulod ug kaliwat nga field.<br><br> <b>Daghan-para-Daghan</b> - Duha ka modyul nga mga rekord nagtinguha nga makapakitag mga subpanel.<br><br>Pili-a ang <b>Kaliwat nga Modyul</b>para sa relasyon.<br><br>Kung ang klase sa relasyon kay nag-apil ug mga subpanel, pili-a ang subpanel nga talan-awon para sa dapat nga mga modyul.<br><br> Pindota<b>Save</b>para makahimu ug relasyon.',
            'convertLeadHelp' => 'Diri pwede kang makapunog mga modyul para sa nausab nga han-ay nga screen ug mapalambo ang mga han-ay sa ana-ay usa.
<br/> Pwede kang mag order ug usab ug mga modyul pina-agi sa pagbitad sa ilang mga linya diha sa lamisa.<br/><br/><b>Modyul:</b> Ang ngalan sa modyul.<br/><br/>
		<b>Kailangan:</b>Ang mga kinahanglang modyul dapat mahimu o mapili sa wala pa ang pasiuna nga pwedeng mabalhin.<br/><br/><b>Kopya sa Datos:</b>Kung masusi, ang mga field gikan sa pasiuna tinguhang makopya para sa mga field uban sa samang ngalan diha sa bag-ong nahimung mga rekord.<br/><br/><b>Tugoti ang Pagpili:</b></b>Mga modyul uban sa kaliwat nga field sa mga Kontak nga pwedeng mapili kaysa nahimu sa panahong giusab ug proceso ang pasiuna.<br/><br/><b>Pag-usab:</b>Usba ang nakabig nga han-ay para sa kining modyul.<br/><br/>
		<b>Wala-a:</b>Kuhaa kining modyul gikan sa nakabig nga han-ay.<br/><br/>',


            'editDropDownBtn' => 'Usaba ang pang-globong Dropdown',
            'addDropDownBtn' => 'Pun-e ug bag-ong pang-globong Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'Ang <b>Mga Field</b> dinha sa modyul kay nalista diri pina-agi sa Ngalan nga Field.<br><br>Ang modyul nga templeyt nag-apil sa dili pa determinadong takda sa mga field.<br><br> Para makahimug bag-ong field, pindota ang <b>Pun-e ug Field</b>.<br><br>Para mausab ang field, pindota ang <b>Ngalan sa Field</b>.<br/><br/>Sunod sa pag-deploy sa modyul, ang bag-ong mga field nagahimu ug Tighimug Modyul, uban sa templeyt nga mga field, kay pag-isip sa basehanan nga mga field diha sa Istudyo.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Ang b>Mga Relasyon</b> nga nahimu tali sa modyul ug laing mga modyul makita diri.<br><br>Ang Relasyon <b>Ngalan</b>kay ang sistemang-naggamag ngalan para sa relasyon.<br><br>Ang<b>Primerong Modyul</b>kay ang modyul nga nag-angkon sa mga relasyon. Ang relasyon nga mga kinaiya kay nasulod dinha sa mga database table nga nalugar para sa primerong modyul. br><br>Ang <b>Klase</b>kay ang klaseng relasyon nga anaa tali sa Primerong modyul ug ang <b>Kaliwat nga Modyul</b>.<br><br>Pindota ang kolum sa titulo para mahan-ay pina-agi sa kolum.<br><br>Pindota ang laray dinha sa relasyon nga lamisa para matan-aw ug mausab ang mga kina-iyang naglambigit uban ang relasyon.<br><br>Pindota<b>Pun-e ug Relasyon</b>para makahimu ug bag-ong ralasyon.',
            'addrelbtn' => 'mouse over help para magpunog relasyon...',
            'addRelationship' => '<b>Mga Relasyon</b> kay mamahimong buhaton tali sa modyul ug uban nga kustom nga modyul o ang modyul nga gideploy.<br><br>Ang mga relasyon kay gipahayag sa makita nga pamaagi gamit ang mga subpanel ug mga may kalabutan nga mga field sa mga rekord sa modyul.<br><br>Pagpili ug usa sa mga mosunod nga relasyon <b>Mga Matang</b> para sa mga modyul:<br><br> <b>Usa-sa-Usa</b> - Sa duha ka mga rekord sa modyul kay mulangkob sa mga may kalabutan nga mga field. <br><br> <b>Usa-sa-Daghan</b> - Ang Pang-una nga rekord sa Modyul kay maglangkob sa subpanel, ug ang mga May Kalabutan nga mga rekord sa Modyul kay maglangkob sa may kalabutan nga field.<br><br> <b>Daghan-sa-Daghan</b> - Pareho sa mga rekord sa modyul ang makita sa mga subpanel.<br><br> Pagpili ug <b>May Kalabutan nga Modyul</b> para sa relasyon. <br><br>Kung ang matang sa relasyon kay naglakip sa mga subpanel, pili-a ang talan-awon sa subpanel paara sa angay nga mga modyul.<br><br> I-klik ang <b>Seyb</b> para mahimo ang relasyon.',
        ),
        'labelsHelp' => array(
            'default' => 'Ang <b>Mga Label</b>para sa mga field ug laing mga titulo dinha sa modyul nga pwedeng mausab.<br><br>Usba ang label pina-agi sa pag-pindot uban ang field, pagpasulod ug bag-ong label ug pag-pindot sa <b>Save</b>.<br><br>Kung naay mga lengwaheng natigum kay na instol dinha ang application, pwede kang makapili ug <b>Lengwahe</b>para magamit sa mga label.',
            'saveBtn' => 'I-klik ang <b>Seyb</b> para maseyb ang tanang kausaban.',
            'publishBtn' => 'I-klik ang <b>Seyb & Deploy</b> para sa pagseyb sa tanang kausaban ug himuon silang aktibo.',
        ),
        'portalSync' => array(
            'default' => 'Isulod ang <b>SuiteCRM Portal URL</b> sa portal sa instans para ma-apdeyt, ug i-klik ang <b>Padayon</b>,<br><br>Unya isulod ang balido nga ngalan sa manggamitay ug password sa SuiteCRM, ug unya i-klik ang <b>Sugdan ang Pag-sync</b>,<br><br>Ang mga kustomisasyon nga nahimo sa Portal sa SuiteCRM nga <b>Mga Plano</b>, subay sa <b>Istelo sa Haklap</b>kung naka-aplowd na ug usa, kay mabalhin sa ginganlan nga instans sa portal.',
        ),
        'portalStyle' => array(
            'default' => 'Mamahimo nimong ikustomays ang dagway sa Portal sa SuiteCRM gamit ang istelo sa haklap.<br><br>Pagpili ug <b>Istelo sa Haklap</b> nga i-aplowd.<br><br>Ang istelo sa haklap kay i-implementar sa Portal sa SuiteCRM sa sunod nga pagabuhaton ang pag-sync.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Para makasugod na ug usa ka proyekto, i-klik ang <b>Bag-ong Pakete</b> para makahimo ug bag-ong pakete para tipigan ang imong mga kustom nga mga modyul. <br/><br/>Kada pakete kay mamahimong maglangkob ug usa o daghang mga modyul.<br/><br/>Pananglitan, gusto nimo magbuhat ug pakete nga naglangkob ug usa ka kustom nga modyul nga may kalabutan sa mga sukaranan sa modyul sa mga Account. O, gusto nimo magbuhat ug pakete nga naglangkob ug mga pipila ka bag-o nga mga modyul nga dungan nga nagtrabaho isip usa ka proyekto ug mga may kalabutan sa usa\'g-usa ug sa uban pa nga mga modyul nga anaa na sa aplikasyon.',
            'somepackages' => 'Ang usa ka <b>pakete</b> kay naglihok isip usa ka sudlanan para sa kustom nga mga modyul, ang tanan niini kay kabahin sa usa ka proyekto. Ang pakete kay mamahimong maglangkob ug usa o daghan pa nga kustom nga <b>mga modyul</b> nga aduna\'y kalabutan sa usa\'g-usa ka mga modyul nga naa sa aplikasyon.<br/><br/>Human sa pagbuhat ug pakete para sa imong proyekto, mamahimo kang maghimo ug mga modyul para sa mga pakete diha-diha dayon, o mamahimo sad ka nga mobalik sa Builder sa Modyul unya para makompleto ang proyekto.<br><br>Kung ang proyekto kay makompleto, mamahimo nimo <b>I-deploy</b> ang mga pakete para mainstalar ang kustom nga mga modyul sulod sa aplikasyon.',
            'afterSave' => 'Ang imohang bag-o nga pakete kay gikinahanglang maglangkob ug bisan-usa ka modyul. Mamahimo ka maghimo ug usa o daghan pa nga kustom nga mga modyul para sa pakete.<br/><br/>I-klik ang <b>Bag-ong Modyul</b> para makahimo ug kusyon nga modyul para niini nga pakete.<br/><br/>Human sa pagbuhat sa bisan usa ka modyul, mamahimo nimo imantala o i-deploy ang pakete para mamahimo kini nga anaa para sa imong instans ug/o ubang mga instans sa manggamitay.<br/><br/> Para madeploy ang pakete sa usa ka lakang sulod sa imong instans SuiteCRM, i-klik ang <b>I-deploy</b>.<br><br>I-klik ang <b>Imantala</b> para maseyb ang pakete isip usa ka .zip nga payl. Human maseyb ang .zip nga payl sa imong sistema, gamita ang <b>Loaader sa Modyul</b> para sa pag-aplowd ug pag-instalar sa pakete sulod sa imong instans sa SuiteCRM. <br/><br/>Mamahimo nimong iapod-apod ang mga payl sa uban pang manggamitay para sa pag-aplowd ug pag-instalar sulod sa ilahang kaugalingong mga instans sa SuiteCRM.',
            'create' => 'Ang <b>pakete</b> kay maglihok isip usa ka sudlanan para sa kustom nga mga modyul, ang tanan niini kay kabahin sa usa ka proyekto. Ang pakete kay mamahimo nga naglangkob ug usa o daghan pa nga kustom nga <b>mga modyul</b> nga mamahimong may kalabutan sa usa\'g-usa o sa uban pa nga mga modyul sa aplikasyon.<br/><br/>Human sa pagbuhat sa pakete para sa imong mga proyekto, mamahimo kang magh<br/>mo ug mga modyul para sa pakete diha-diha dayon, o mamahimo sad ka nga mobalik sa Builder sa Modyul unya para makompleto ang proyekto.',
        ),
        'main' => array(
            'welcome' => 'Gamita ang <b>Mga Hiraminta sa Tig-debelop</b> para makahimo ug makadumala sa sukaranan o kustom nga mga modyul ug mga field. <br/><br/>Para madumala ang mga modyul sa aplikasyon, i-klik ang <b>Istudyo</b>. <br/><br/>Para makahimo ug kustom nga mga modyul, i-klik ang <b>Builder sa Modyul</b>.',
            'studioWelcome' => 'Ang tanan nga modyul nga kasamtangang na-instalar, pil ang sukaranan ug mga butang nga gi-lowd pinaagi sa modyul, kay mamahimong ikustomays sulod sa Istudyo.'
        ),
        'module' => array(
            'somemodules' => "Sanglit ka ang kasamtangan nga pakete kay naglangkob ug bisan usa lang ka modyul, mamahimo nimo <b>I-deploy</b> ang mga modyul sa pakete diha sa imong instans sa SuiteCRM o <b>Imantala</b> ang pakete nga i-instalar sa kasamtangan nga instans sa SuiteCRM o uban pang instas gamit ang <b>Tig-lowd sa Modyul</b>.<br/><br/>Para direkta nga mainstalar ang pakete diha sa imong instans sa SuiteCRM, i-klik ang <b>I-deploy</b>.<br><br>Aron makahimo ug .zip nga payl para sa pakete nga mamahimong malowd ug mainstalar diha sa imong instans SuiteCRM ug uban pa nga mga instans gamit ang <b>Tig-Lowd sa Modyul</b>, i-klik ang <b>Imantala</b>.<br/><br/> Mamahimo ka na sa pagtukod sa mga modyul para niini nga pakete sa mga hugna, ug imantala o i-deploy kung ikaw kay andam na sa pagbuhat niini. <br/><br/>Human mamantala o madeploy ang pakete, mamahimo kana sa paghimo ug kausaban sa mga kabtangan sa mga pakete ug dugangan pa sa pagkustomays ang mga modyul.",
            'editView' => 'Mamahimo nimong usbon ang mga ninglungtad na nga mga field diri. Mamahimo nimong wagtangon ang bisan unsa sa mga ninlungtad na nga mga field o dugangan ang mga anaa na nga mga field nga naa sa wala na panel.',
            'create' => 'Sa pagpili ug matang sa <b>Matang</b> sa modyul nga gusto nimong himuon, hinumdomi ang mga matang sa mga field nga gusto nimo nga maimoha diha sa modyul. <br/><br/>Kada templeyt sa modyul nga naglangkob sa mga koleksyon sa maga field nga may kalabutan sa matang sa modyul nga gihulagway sa titulo.<br/><br/><b>Sukaranan</b> - Naghatag ug mga field nga sukaranan nga makita sa sukaranan nga modyul, sama sa Ngalan, Gigahin kang, Kuponan, Petsa sa Paghimo ug mga field sa Paghulagway.<br/><br/> <b>Komanya</b> - Naghatag ug mga field nga ginganlan sa orgnisasyon, sama sa Ngalan sa Kompanya, Industriya ug Lugar sa Pagbayad. Gamitin kini nga templeyt sa paghimo ug mga modyul nga susama sa sukaranan nga modyul sa mga Account.<br/><br/> <b>Tawo</b> - Naghatag ug mga field nga ginganlan sa indibidwal, sama sa Salutasyon, Titulo, Ngalan, Lugar ug Numero sa Telepono. Gamita kini nga templeyt sa paghimo ug mga modyul nga susama sa sukaranan nga mga Kontak ug Pasiuna nga mga Modyul.<br/><br/><b>Isyu</b> - Naghatag ug mga field nga ginganlan sa mga kaso ug mga tughok, sama sa Numero, Istado, Prayoridad ug Prayoridad ug Paghulagway. Gamita kini nga templeyt sa paghimo ug mga modyul nga susama sa mga sukaran sa mga Kaso ug Tughok nga mga modyul. <br/><br/>Hinumdomi: Human nimo mahimo ang modyul, mamahimo nimo usbon ang mga timaan sa mga field nga gitahan sa templeyt, apil napud ang mga field sa paghimo ug mga kustom nga idugang sa mga plano sa modyul.',
            'afterSave' => 'Ikustomays ang modyul nga tukma sa imong mga gikinahanglan pinaagi sa pag-usab ug paghimo ug mga field, pagtukod ug mga relasyon sa uban nga mga modyul ug paghan-ay sa mga field diha sa mga plano.<br/><br/>Paara malantaw ang mga field sa templeyt ug madumala ang mga kustom nga field diha sa module, i-klik ang <b>Tan-awon ang mga Field</b>.<br/><br/>Aron sa paghimo ug pagdumala sa mga relasyon tali sa modyul ug sa uban pang mga modyul, bisan pa ang mga modyul kay anaa sa aplikasyon o uban nga kustom nga mga modyul diha sa pareho nga pakete, i-klik ang <b>Tan-awon ang mga Relasyon</b>.<br/><br/>Aron sa pag-usab sa mga plano sa modyul, i-klik ang <b>Tan-awa ang mga Plano</b>. Mamahimo sad nimo usbon ang mga plano sa Detalye sa talan-awon, sa Usbon ang Talan-awon ug sa Listahan sa Talan-awon para sa modyul sama sa imong buhaton para sa mga modyul nga anaa sa aplikasyon diha sa Istudyo.<br/><br/>Aron sa paghimo ug modyul uban sa susama nga mga kabtangan sama sa kasamtangang modyul, i-klik ang <b>Kopyahon</b>. Mamahimo sa nimo dugangan sa pagkusmays ang bag-ong modyul.',
            'viewfields' => 'Ang mga field sa modyul kay mamahimong ikustomays aron muhaom sa imong mga panginahanglan.<br/><br/>Dili nimo mamahimong wagtangon ang mga sukaranan nga mga field, pero mamahimo nimo silang tangtangon gikan sa angay nga mga plano diha sa mga pahina sa mga Plano. <br/><br/>Mamahimo nimo paspasan sa paghimo ang mga bag-ong mga field nga aduna\'y susama nga mga kabtangan sa ninglungtad na nga mga field pinaagi sa pagklik sa proma sa <b>Doblehon</b> nga naa sa <b>Mga Kabtangan</b>. Isulod ang bisan unsang bag-ong mga kabtangan, unyha i-klik ang <b>I-seyb</b>.<br/><br/>Kini kay girekomendar nga imong itakda sa tanang mga kabtangan para sa mga field nga sukaranan ug kustom nga mga field sa dili pa nimo imantala ug i-instalar ang pakete nga naglangkob sa kustom nga modyul.',
            'viewrelationships' => 'Pwede ka mohimo og daghan-sa-daghan nga mga relasyon tali sa karon nga modyul og laing mga modyul sa sulod sa putos, og/o tali sa karon nga modyul og sa mga modyul nga na-install na sa application.<br><br>para muhimo og usa-sa-daghan og usa-sa-usa nga mga relasyon, paghimo <b>i-relate</b>og<b>flex relate</b> mga field para sa mga modyul.',
            'viewlayouts' => 'Pwede nimo ma kontrol kung unsa nga mga field ang available para sa pagkuha sa mga datos sulod sa<b>pagtan-aw sa edit</b>. pwede sad nimo ma kontrol kung unsa nga datos ang mapakita sulod sa <b>pagtan-aw sa detalye</b>. Ang mga pagtan-aw dili kinahanglan na mo sakto.<br/><br/>Ang Paspas nga paghimo nga form kay ma-displey kung ang<b>Maghimo</b>kay mapislitan sa usa sa subpanel sa modyul. sa default, ang<b>Paspas nga paghimo</b> nga layout sa form kay pariha sa default<b>pagtan-aw sa edit</b>layout. pwede nimo ma-customize ang form sa Paspas nga paghimo para naa siyay sulod nga gamay og/o lahi nga mga field kaysa sa layout sa pagtan-aw sa edit.<br><br>pwede nimo ma determinar ang seguridad sa modyul gamit ang customization sa layout kuyog ang <b>tagdumala sa papel</b>.<br><br>',
            'existingModule' => 'Pagkahuman sa paghimo og pag-customize sa kani nga modyul, pwede ka maghimo og dungag nga mga modyul o balik sa putos para mo<b>publikar</b>o<b>Deploy</b>sa putos.<br><br>para makahimo og dungag nga mga modyul, pislita ang<b>i-duplicate</b>para mohimo og usa ka modyul nga pariha og mga property sa karon nga modyul, o balik ngadto sa putos, og pislita ang<b>bag-ong modyul</b>.<br><br> kung andam naka mo<b>publikar</b>o<b>deploy</b> sa putos nga nagbaton sa kani nga modyul, balik ngadto sa putos para mo perform sa kani nga mga function. pwede ka mo publikar og mo deploy og mga putos nga nagbaton og bisag usa ka modyul.',
            'labels' => 'Ang mga label sa estandard nga mga field og custom nga mga field kay pwede ilisan. ang pag-ilis sa mga label sa field kay dili maka-apekto sa mga datos nga gitipigan sa mga field.',
        ),
        'listViewEditor' => array(
            'modify' => 'Adunay tulo ka mga kolum nga naka-displey sa wala. ang "Default" nga kolum kay nagbaton og mga field nga naka-displey sa list view by default, ang "Available" nga kolum kay nagbaton og mga field nga ang user kay pwedeng mopili para gamiton sa paghimo og usa ka custom nga list view, og ang "Hidden" nga kolum nagbaton og mga field nga available para sa imo isip usa ka admin para mo dungag sa default o sa available nga mga kolum para gamiton sa mga user pero karon kay disable pa.',
            'savebtn' => 'Ang pagklik sa<b>i-save</b>kay mag save sa tanan nga kausaban og maghimo sa kanila nga aktibo.',
            'Hidden' => 'Mga nakatago nga field kay mga field nga dili pa karon available sa mga user para sa paggamit sa mga list view.',
            'Available' => 'Mga available field kay mga field nga wala gipakita by default, pero pwede i-enable sa mga user.',
            'Default' => 'Mga default nga field kay naka-displey sa mga user kinsa wala ka himo og mga custom list view setting.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Adunay duha ka mga kolum nga nakadispley sa wala. Ang "Default" nga kolum kay nagbaton og mga field nga madispley sa search view, og ang "hidden" nga kolum kay nagbaton og mga field nga available sa imo isip usa ka admin para i-add sa view.',
            'savebtn' => 'Ang pagklik sa<b>i-save & I-deploy</b> kay mo save sa tanang mga kausaban og maghimo nilang aktibo.',
            'Hidden' => 'Mga nakatagong field kay mga field na dili mapakita sa search view.',
            'Default' => 'Mga default nga field kay mapakita sa search view.'
        ),
        'layoutEditor' => array(
            'default' => 'Adunay duha ka mga kolum ang naka-displey sa wala. ang toong-kamot nga kolum, na-label karon nga layout o layout preview, kung asa nimo ilisan ang layout sa modyul. ang walang-kamot nga kolum, gipanganlag Toolbox nagbaton og gamit kaayu nga mga element og mga tool para gamiton kung mag edit sa layout.<br/><br/>kung ang area sa layout kay gipanganlag karon nga layout unya ikaw kay nagtrabaho sa kopya sa layout nga gigamit karon sa modyul para sa displey.<br/><br/>kung kani kay napanganlan og layout Preview unya ikaw kay nagtrabaho sa kopya nga gihimo ganina sa pag-click sa save button nga pamaagi, kana kay pwede ng ilisan na gikan sa bersyon nga nakita sa mga user sa kani nga modyul.',
            'saveBtn' => 'Ang pagpislit sa kani nga pislitanan kay maka-save sa layout para maka preserve ka sa imong mga giusab. kon mubalik ka sa kani nga modyul magsugod ka sa kaning nailisdan na layout. Ang imong layout kay dili man hinuon makita sa mga user sa modyul hangtud sa pisliton nimo ang i-save og i-publikar nga pislitanan.',
            'publishBtn' => 'Pislita ang kaning pislitanan para i-deploy ang layout. kani nagpasabot nga kaning layout kay makita dayun sa mga user sa kani nga modyul.',
            'toolbox' => 'Ang toolbox nagbaton og klase-klaseng mga gamit kaayu nga feature para sa pag-usab sa mga layout, kuyog ang usa ka trash area, usa ka set sa mga dungag nga elemento og usa ka set sa available nga mga field. bisag unsa ani kay pwede maguroy og matagak didto sa layout.',
            'panels' => 'Ang kani nga lugar kay nagpakita kung unsa imong layout tan-awon sa mga user sa kani nga modyul kung ma-deploy na.<br/><br/>pwede kang mag-usab sa posisyon sa mga elemento sama sa mga field, mga row og mga panel sa paagi nga pagguroy og pagtagak nila; wagtangun ang mga elemento sa paagi nga pagguroy og pagtagak kanila sa trash area sa toolbox, o magdugang og bag-ong mga elemento sa paagi nga pagguroy kanila gikan sa toolbox og pagtagak kanila ngadto sa layout sa gusto nimo nga posisyon.'
        ),
        'dropdownEditor' => array(
            'default' => 'Adunay duha ka mga kolum ang naka-displey sa wala. ang toong-kamot nga kolum, na-label karon nga layout o layout preview, kung asa nimo ilisan ang layout sa modyul. ang walang-kamot nga kolum, gipanganlag Toolbox nagbaton og gamit kaayu nga mga element og mga tool para gamiton kung mag edit sa layout.<br/><br/>kung ang area sa layout kay gipanganlag karon nga layout unya ikaw kay nagtrabaho sa kopya sa layout nga gigamit karon sa modyul para sa displey.<br/><br/>kung kani kay napanganlan og layout Preview unya ikaw kay nagtrabaho sa kopya nga gihimo ganina sa pag-click sa save button nga pamaagi, kana kay pwede ng ilisan na gikan sa bersyon nga nakita sa mga user sa kani nga modyul.',
            'dropdownaddbtn' => 'Ang pagpislit sa kani nga pislitanan kay mag dungag og usa ka bag-ong item ngadto sa dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Mga custimization nga nahimo sa kani nga studio sa sulod sa kani nga instans kay pwedeng maputos og madeploy sa ubang instans.<br><br>Paghatag og <b> Pangan sa putos</b>. pwede ka mohatag<b>Nagsuwat</b>og<b>deskripsyon</b>impormasyon para sa putos.<br><br>Pili-a ang (mga)modyul nga nagbaton sa mga customization para sa pag-export. (mga modyul ra nga nagbaton og mga customization ang mogawas para sa imo aron pilian.)<br><br>pislita<b>export</b> aron maghimo og usa ka .zip nga file para sa putos nga nagbaton sa mga customization.Ang .zip nga file kay pwede i-upload sa lain nga instans pinaagi ang <b>Modyul Loader</b>.',
            'exportCustomBtn' => 'I-klik ang <b>I-eksport</b> para sa pagbuhat ug .zip nga payl para sa pakete nga naglangkob sa mga kustomisasyon nga gusto nimong i-eksport.',
            'name' => 'Ang <b>pangan</b> sa putos kay i-displey sa modyul Loader pagkahuman ma-upload ang putos para sa installation sa studio.',
            'author' => 'Ang <b>awtor</b> kay ang pangan sa entidad nga naghino sa putos. ang awtor kay pwede bisag individwal o usa ka kompanya.<br><br>ang awtor kay ma-displey sa modyul loader pagkahuman ma-upload sa putos para sa installation sa studio.',
            'description' => 'Ang <b>deskripsyon</b> sa putos kay ma-displey sa modyul Loader pagkahuman ma-upload sa putos para sa installation sa studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Malipayong pag-abot sa lugar sa <b>Mga Hiraminta sa Tig-debelop</b>. <br/><br/>Gamita ang mga hiraminta sulod niini nga lugar sa paghimo ug pagdumala sa mga sukaranan ug kustom nga mga modyul ug mga field.',
            'studioBtn' => 'Gamit og<b>Studio</b> para i-customize ang mga modyul na na-install pinaagi sa pag-ilis sa mga arrangement sa field, pagpili kung unsa nga mga field ang available og paghimo og mga field sa custom data.',
            'mbBtn' => 'Gamita ang <b>Builder sa Modyul</b> para sa paghimo sa mga bag-ong modyul.',
            'appBtn' => 'Gamita ang application nga mod para i-customize ang galaing-laing mga property sa programa, pariha anang pila ka mga TPS report ang naka-displey sa homepage',
            'backBtn' => 'Balik sa premirong lakang.',
            'studioHelp' => 'Gamita ang <b>Studio</b> para mabag-o ang tanan mga modyul nga gi deploy.',
            'moduleBtn' => 'Pindota ang pang-usab para sa kining modyul.',
            'moduleHelp' => 'Pilia ang mga gamit sa modyul nga gusto nimo usbon',
            'fieldsBtn' => 'Usba ang impormasyon nga gitipigan sa modyul pinaagi sa pagkontrol sa <b>Fields</b> diha sa modyul.',
            'labelsBtn' => 'I-klik <b>pagluwas</b> para maluwas ang imong kustombre nga mga label.',
            'layoutsBtn' => 'Ipahiangay ang <b>mga hut-ong</b> sa pag usab, detalye, listahan og paglantaw sa pagpangita.',
            'subpanelBtn' => 'Usba ug unsa nga impormasyon ang nagpakita sa maong mga modyul subpanels.',
            'layoutsHelp' => 'Pilia ang <b>Layout para ubon</b>.<br/><br/>Para pagbag-o sa maong layout nga naglangkob og mga data fields alang sa pag sulod data, i-klik <b>Usba ang paglantaw</b>.<br/><br/>Para sa pagbag-o sa mga haligi nga nagpakita sa naka default nga listahan, i-klik <b> Pagtan-aw sa listahan</b>.<br/><br/>Para sa pagbag-o sa sukaranan ug abante sa pagporma sa pagpangita sa layout, i-klik <b>Pagpangita</b>.',
            'subpanelHelp' => 'Pilia ang <b>Subpanel</b> sa pag-usab.',
            'searchHelp' => 'Pilia ang <b>Pagpangita</b>layout sa pag-usab.',
            'newPackage' => 'Pindota ang <b>Bag-ong Pakete</b> para mohimu ug bag-ong pakete.',
            'mbHelp' => '<b>Welcome sa modyul builder.</b><br/><br/>paggamit<b>modyul builder</b> para sa paghimo og mga pakete nga nag langkod sa nagkalaig lain mga modyul nga gibase sa standard o nagkalaing lain mga butang. <br/><br/>Sa pagsugod, i-klik <b>bag-ong pakete</b> para sa paghimo og bag-ong pakete, o pilia ang pag-usab sa mga pakete.<br/><br/>Ang<b>pakete</b>naglihok isip usa ka sudlanansa mga laing lain nga mga modyul, tanan niini kay kabahin sa usa ka proyekto. Ang pakete mahimong maglakip og usa o labaw nga kostumbre sa maong modyul nga may kalabutan sa matag-usa o sa mga modyul diha sa aplikasyon. <br/><br/>Mga ehemplo: mahimong ikaw ang maghimo sa pakete nga adunay usa ka modyul nga may kalabutan sa standard accounts modyul. O, mahimong ikaw ang maghimo sa pakete nga adunay daghang mga bag-ong modyul nga magtinabangay sa proyekto ug nga may kalabutan sa usag-usa ug sa modyul sa aplikasyon.',
            'exportBtn' => 'I-klik <b>Pagbaligya sa pagpahiangay</b> para maghimo ug pakete nga nag langkob sa pagpahianay nga gihimo sa studio alang sa piho nga mga modyul.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Dropdown nga Tig-usab',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Module Loader',
    'LBL_STUDIO' => 'Studyo',
    'LBL_DROPDOWNEDITOR' => 'Dropdown nga Tig-usab',
    'LBL_DEVELOPER_TOOLS' => 'Mga gamit sa developer',
    'LBL_SUITEPORTAL' => 'SuiteCRM portal editor',
    'LBL_PACKAGE_LIST' => 'Listahan sa mga pakete',
    'LBL_HOME' => 'Home',
    'LBL_NONE' => '-Wala-',
    'LBL_DEPLOYE_COMPLETE' => 'I-deploy nga kompleto',
    'LBL_DEPLOY_FAILED' => 'Usa ka kasaypanan ang nahitabo sa panahon sa pag deploy and proseso, imong pakete basin dili ma instalar ug tarong',
    'LBL_AVAILABLE_SUBPANELS' => 'Bakante para sa mga subpanel',
    'LBL_ADVANCED' => 'Nag-una',
    'LBL_ADVANCED_SEARCH' => 'Abante nga Filter',
    'LBL_BASIC' => 'Sukaranan',
    'LBL_BASIC_SEARCH' => 'Paspas nga Filter',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Kasalukuyan',
    'LBL_DASHLET' => 'SuiteCRM dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM dashlet makitang listahan',
    'LBL_POPUP' => 'Magpakita ug kalit',
    'LBL_POPUPLISTVIEW' => 'Magpakita ug kalit nga nagpakita sa mga listahan',
    'LBL_POPUPSEARCH' => 'Popup sa pagpangita',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM dashlet Pagpangita',
    'LBL_DETAILVIEW' => 'Detalye nga matan-aw',
    'LBL_DROP_HERE' => '[Ihulog Diri]',
    'LBL_EDIT' => 'Usba',
    'LBL_EDIT_LAYOUT' => 'I-edit ang Plano',
    'LBL_EDIT_FIELDS' => 'Usba ang mga field',
    'LBL_EDITVIEW' => 'Edit nga matan-aw',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'Mga field',
    'LBL_FAILED_TO_SAVE' => 'Pakyad na maluwas',
    'LBL_FAILED_PUBLISHED' => 'Na tagak sa Publsih',
    'LBL_HOMEPAGE_PREFIX' => 'Akong',
    'LBL_LAYOUT_PREVIEW' => 'Layout preview',
    'LBL_LAYOUTS' => 'Mga layout',
    'LBL_LISTVIEW' => 'Listahan nga matan-aw',
    'LBL_MODULES' => 'Mga Module',
    'LBL_MODULE_TITLE' => 'Studyo',
    'LBL_NEW_PACKAGE' => 'Bag-ong pakete',
    'LBL_NEW_PANEL' => 'Bag-o nga panel',
    'LBL_NEW_ROW' => 'Bag-o nga laray',
    'LBL_PACKAGE_DELETED' => 'Pakete nga gitanggal',
    'LBL_PUBLISHING' => 'Gepublish...',
    'LBL_PUBLISHED' => 'Punlished',
    'LBL_SELECT_FILE' => 'Pilia ang File',
    'LBL_SUBPANELS' => 'Subpanels',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Titulo: ',
    'LBL_SEARCH_FORMS' => 'Filter',
    'LBL_SEARCH' => 'Pangitaa',
    'LBL_SEARCH_BUTTON' => 'Pangitaa',
    'LBL_FILTER' => 'Filter',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_QUICKCREATE' => 'Paspas nga paghimo',
    'LBL_EDIT_DROPDOWNS' => 'Usaba ang pang-global dropdown',
    'LBL_ADD_DROPDOWN' => 'Dugang pa ug bag-ong global dropdown',
    'LBL_BLANK' => '-blangko-',
    'LBL_TAB_ORDER' => 'Tab order',
    'LBL_TABDEF_TYPE' => 'Ipakita ang matang',
    'LBL_TABDEF_TYPE_HELP' => 'Pilia kung giunsa kini nga seksyon nga kinahanglang maipakita. Kini nga opsyon adunay epekto kon ikaw nakahimo sa pagpakita sa mga tab.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Pilia ang panel aron makabaton niini ang pagpakita sa panel sa sulod sa layout. Pilia ang panel na adunay kini makita nga panel sulod sa lain tab diha sulod sa layout. Kung ang tab nagbungat alang sa panel, subsequent panels ibutang aron ipakita ingon nga usa ka panel kay nagpakita sa maong tab. <br/>Ang bag-ong tab kay magsugod sa sunod nga penel diin ang tab gipili. Kung ang tab ang gipili para sa panel ubos sa nag unang panel, ang panel nga nag una kinahanglan nga usa ka tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Pagpili aron mahimo ang default state sa niining panel kay nahugno.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Pangalan',
    'LBL_DROPDOWN_LANGUAGE' => 'Lingwahe',
    'LBL_DROPDOWN_ITEMS' => 'Listahan sa mga butang',
    'LBL_DROPDOWN_ITEM_NAME' => 'Item sa pangalan',
    'LBL_DROPDOWN_ITEM_LABEL' => 'I-lantad ang Timaan',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sync sa delatalye nga paglantaw',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Pagpili niini nga kapilian sa pag sync sa editview layout sa katugbang detailview layout. Mga field ug pagbutang sa uma sa editview<br>mahimong i-sync ug pagluwas sa mga detailview awtomatik pinaagi sa pag klik para pagluwas o pagluwas ug deploy sa editview.<br>mga kausbanan sa layout dili makahimo sa detailview.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Kini nga detailview kay na-sync uban sa katugbang sa editview.<br> Mga kaumahan ug pagbutang sa uma sa detailview pagpakita ug epekto sa mga patag og kapatangan sa editview.<br> Mga kausaban sa detailview dili ma luwas o ma-deploy sulod niini nga panid. Paghimo ug mga kausaban o un-sync ang mga layout sa editview. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Kinopya gikan sa editview',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Gikinahanglan ang mga prinsipyo alang sa maong butan nga pangalan ug ang nagpakitang label. Para sa pag dugang sa blangko nga butang, i-kili ang pagdugang nga wala mosulod ug nagkadaiyang mga prinsipyo para sa pangalan sa butang ug sa display label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Ang maong yawe kay nalungtad na sa listahan',
    'LBL_NO_SAVE_ACTION' => 'Dili makita ang pag luwas sa aksyon alang niini nga paglantaw.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: wala damha nga naporma ug dokumento',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Panguna nga modyul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* gimugna ang relasyon sa studio',
    'LBL_RELATIONSHIPS' => 'Mga relasyon',
    'LBL_RELATIONSHIP_EDIT' => 'Usba ang mga relasyon',
    'LBL_REL_NAME' => 'Pangalan',
    'LBL_REL_LABEL' => 'Label',
    'LBL_REL_TYPE' => 'Isulat',
    'LBL_RHS_MODULE' => 'Nga may kalabutan sa modyul',
    'LBL_NO_RELS' => 'Walay mga relasyon',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Opsyonal nga kondisyon',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolum',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Bili',
    'LBL_SUBPANEL_FROM' => 'Subpanel gikan sa',
    'LBL_RELATIONSHIP_ONLY' => 'Walay makita nga mga elemento nga gibuhat para sa mga relasyon ingon nga adunay pre-existing sa pagpakita ug relasyong tali niining duha ka mga modyul.',
    'LBL_ONETOONE' => 'Usa ngadto sa usa',
    'LBL_ONETOMANY' => 'Usa ngadto sa daghan',
    'LBL_MANYTOONE' => 'Daghan ngadto sa usa',
    'LBL_MANYTOMANY' => 'Daghan ngadto sa daghan',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Pilia ang modyul para usbon.',
    'LBL_QUESTION_LAYOUT' => 'Pilia ang layout para sa pag usab.',
    'LBL_QUESTION_SUBPANEL' => 'Pilia ang subpanel para sa pag usab.',
    'LBL_QUESTION_SEARCH' => 'Pilia ang filter layout para sa pag usab.',
    'LBL_QUESTION_MODULE' => 'Pilia ang modyul component para sa pag usab.',
    'LBL_QUESTION_PACKAGE' => 'Pilia ang pakete para usbon, o pagbuhat ug bag-o nga pakete.',
    'LBL_QUESTION_EDITOR' => 'Pilia ang tool.',
    'LBL_QUESTION_DASHLET' => 'Pilia ang dashlet layout para usbon.',
    'LBL_QUESTION_POPUP' => 'Pilia ang popup layout para usbon.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Pangalan',
    'LBL_LABELS' => 'Mga label',
    'LBL_MASS_UPDATE' => 'Mass update',
    'LBL_DEFAULT_VALUE' => 'Default nga Balyo',
    'LBL_REQUIRED' => 'Kinahanglan',
    'LBL_DATA_TYPE' => 'Isulat',
    'LBL_HCUSTOM' => 'CUSTOM',
    'LBL_HDEFAULT' => 'DEFAULT',
    'LBL_LANGUAGE' => 'Lingwahe:',
    'LBL_CUSTOM_FIELDS' => '* field nga gibuhat sa studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Usba ang mga label',
    'LBL_SECTION_PACKAGES' => 'Ma pakete',
    'LBL_SECTION_PACKAGE' => 'Pakete',
    'LBL_SECTION_MODULES' => 'Mga Module',
    'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
    'LBL_SECTION_PROPERTIES' => 'Mga kabtangan',
    'LBL_SECTION_DROPDOWNED' => 'Usba ang dropdown',
    'LBL_SECTION_HELP' => 'Nangita og tabang',
    'LBL_SECTION_MAIN' => 'Main',
    'LBL_SECTION_FIELDEDITOR' => 'Usba ang field',
    'LBL_SECTION_DEPLOY' => 'I-deploy',
    'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Sinugdanan',
    'LBL_HIDDEN' => 'Gitago',
    'LBL_AVAILABLE' => 'Naa',
    'LBL_LISTVIEW_DESCRIPTION' => 'Adunay tulo ka mga kolum nga naka displey sa ubos. Ang <b>Default</b> kolum kay nag batonn og mga field nga naka displey sa paglantaw sa listahan sa default, ang <b>Pagdugang</b> sa kolum kay nag baton ug mga field nga ang mugamit kay pweding mo pili para gamiton sa paghimo ug usa ka kustombre nga sa paglantaw sa listahan. Ang <b>Pagdugang</b> kolum nga naka displey sa mga field nga available para sa imo isip usa ka admin para mo dungag sa default o sa available nga mga kolum para gamiton sa mga monggamit.',
    'LBL_LISTVIEW_EDIT' => 'Listahan sa motan-aw ug pag usab',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Preview',
    'LBL_MB_RESTORE' => 'Ibalik',
    'LBL_MB_DELETE' => 'Tangtangon',
    'LBL_MB_DEFAULT_LAYOUT' => 'Default nga layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Dungagi',
    'LBL_BTN_SAVE' => 'I-save',
    'LBL_BTN_SAVE_CHANGES' => 'I-save ang mga pag-usab',
    'LBL_BTN_DONT_SAVE' => 'Isalikway ang mga pag-usab',
    'LBL_BTN_CANCEL' => 'Kanselahon',
    'LBL_BTN_CLOSE' => 'Sirado',
    'LBL_BTN_SAVEPUBLISH' => 'I-save og tubag',
    'LBL_BTN_CLONE' => 'Clone',
    'LBL_BTN_ADDROWS' => 'Dugangan og Rows',
    'LBL_BTN_ADDFIELD' => 'Dugangan ug Lugar',
    'LBL_BTN_ADDDROPDOWN' => 'Magdungag og dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Pataas nga paghan-ay',
    'LBL_BTN_SORT_DESCENDING' => 'Paubos nga paghan-ay',
    'LBL_BTN_EDLABELS' => 'Usba ang mga label',
    'LBL_BTN_UNDO' => 'Undo',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dugangan Kustom Field',
    'LBL_BTN_EXPORT' => 'Pagpahiangay sa export',
    'LBL_BTN_DUPLICATE' => 'Duplikit',
    'LBL_BTN_PUBLISH' => 'Imantala',
    'LBL_BTN_DEPLOY' => 'I-deploy',
    'LBL_BTN_EXP' => 'I-export',
    'LBL_BTN_DELETE' => 'Tangtangon',
    'LBL_BTN_VIEW_LAYOUTS' => 'Tan-aw sa mga layout',
    'LBL_BTN_VIEW_FIELDS' => 'Tan-aw og mga field',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Tan-aw sa mga relasyon',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Dugangan sa mga relasyon',
    'LBL_BTN_RENAME_MODULE' => 'Ilisan ang pangan sa modyul',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Sayup: Anaana ang field',
    'ERROR_INVALID_KEY_VALUE' => "Mali: Inbalid ang Key Balyou",
    'ERROR_NO_HISTORY' => 'Walay mga file sa kasaysayan ang nakita',
    'ERROR_MINIMUM_FIELDS' => 'Ang layout kay kinahanglan nagbaton ug labing menos usa ka field',
    'ERROR_GENERIC_TITLE' => 'Adunay error nga mitumaw',
    'ERROR_REQUIRED_FIELDS' => 'Sigurado baka nga gusto nimong mupadayon? Ang mga mosunod nga gikinahanglang mga field kay nawala sa layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pangan sa pakete:',
    'LBL_MODULE_NAME' => 'Pangan sa modyul:',
    'LBL_AUTHOR' => 'Awtor:',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_KEY' => 'Yabe:',
    'LBL_ADD_README' => ' Basaha Ko',
    'LBL_LAST_MODIFIED' => 'Katapusang pag-usab:',
    'LBL_NEW_MODULE' => 'Bag-ong modyul',
    'LBL_LABEL' => 'Label:',
    'LBL_LABEL_TITLE' => 'Label',
    'LBL_WIDTH' => 'Gilapdon',
    'LBL_PACKAGE' => 'Pakete:',
    'LBL_TYPE' => 'Matang:',
    'LBL_NAV_TAB' => 'Tab sa nabigasyon',
    'LBL_CREATE' => 'Paghimo',
    'LBL_LIST' => 'Listahan',
    'LBL_VIEW' => 'Tan-awa',
    'LBL_HISTORY' => 'Tan-awon ang Kasaysayan',
    'LBL_RESTORE_DEFAULT' => 'Ibalik ang default',
    'LBL_ACTIVITIES' => 'Kalihukan',
    'LBL_NEW' => 'Bag o',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'kompanya',
    'LBL_TYPE_PERSON' => 'tawo',
    'LBL_TYPE_ISSUE' => 'isyu',
    'LBL_TYPE_SALE' => 'baligya',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'Kani ang subpanel nga mo-displey sa imong modyul',
    'LBL_MSUB' => 'Kani ang subpanel nga gihatag sa imong modyul sa naay kalabutan nga modyul para sa pag-displey',
    'LBL_MB_IMPORTABLE' => 'Pag-import',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] kay natang-tang',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Pagpahiangay sa export',
    'LBL_EC_NAME' => 'Pangan sa pakete:',
    'LBL_EC_AUTHOR' => 'Awtor:',
    'LBL_EC_DESCRIPTION' => 'Deskripsyon:',
    'LBL_EC_CHECKERROR' => 'Palihug pili ug usa ka modyul.',
    'LBL_EC_CUSTOMFIELD' => 'gipahiangay nga (mga) field',
    'LBL_EC_CUSTOMLAYOUT' => 'gipahiangay nga (mga) layout',
    'LBL_EC_NOCUSTOM' => 'Walay mga modyul ang naihiangay.',
    'LBL_EC_EMPTYCUSTOM' => 'naay mga walay sulod nga pag-ihiangay.',
    'LBL_EC_EXPORTBTN' => 'I-export',
    'LBL_MODULE_DEPLOYED' => 'Na-deploy na ang modyul.',
    'LBL_UNDEFINED' => 'dili mahulagway',
    'LBL_EC_VIEWS' => '(mga) pagtan-aw nga naka customize',
    'LBL_EC_SUITEFEEDS' => '(mga) Feed nga naka-customize',
    'LBL_EC_DASHLETS' => '(mga) dashlet nga naka-customize',
    'LBL_EC_CSS' => '(mga) css nga naka-customize',
    'LBL_EC_TPLS' => 'ipahiangay tpls(s)',
    'LBL_EC_IMAGES' => 'ipahiangay ang imahe(s)',
    'LBL_EC_JS' => 'ipahiangay js(s)',
    'LBL_EC_QTIP' => 'ipahiangay qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Napakyas sa pa luwas sa data',
    'LBL_AJAX_LOADING' => 'Ga-loading...',
    'LBL_AJAX_DELETING' => 'Pagwagtang...',
    'LBL_AJAX_BUILDPROGRESS' => 'Pagproseso sa pagtukod...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Pagproseso sa pag-deploy...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resulta',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Kini maong operasyon kay nakompleto ug malampuson na',
    'LBL_AJAX_LOADING_TITLE' => 'Gi proseso...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Palihug paghulat, loading...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sigurado ka ba nga gahanan nimong tangtangon kini nga pakete? Kini permanente mawagtang ang tanang mga fie nalangkit uban niini sa pakete.',
    'LBL_JS_REMOVE_MODULE' => 'Sigurado na ba ka nga ganahan nimong tangtangon kini nga modyul? Mahimong permanente ang pagtangtang sa tanang dokumento na nalakip sa kini nga modyul.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Bisan unsa nga paghiangay nga imong nabuhat sa studyo kay mausab kon kini nga modyul kay ma re-deployed. Sigurado ka ba nga gusto nimo magpadayon>?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Pagdeploy sa pakete',
    'LBL_JS_VALIDATE_NAME' => 'Pangalan - kinahanglan ma alphanumeric, nagsugod sa letra ug walay mga espasyo.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Pangalan sa pakete kay anaa na',
    'LBL_JS_VALIDATE_KEY' => 'Yawe - Kinahanglan ma alphanumeric, nagsugod sa letra ug walay mga espasyo.',
    'LBL_JS_VALIDATE_LABEL' => 'Palihug butang ug label nga gamiton sa pag displey sa pangalan sa modyul',
    'LBL_JS_VALIDATE_TYPE' => 'Palihug pag pili kung unsa nga klasi nga modyul nga gusto nimo buhaton sa ibabaw sa listahan',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - palihug pagpuno sa label nga gamiton sa pag-displey sa ibabaw sa subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Pagwagtang sa kustombre field nga mawala ang custom field ug ang tanang data nga may kalambigitan sa custom field sa database. Ang field dili na makita ang mga layout sa modyul. \\n\\nGusto ba nimo magpadayon?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sigurado ka ba nga gusto nimo tangtangon ang relasyon>?',
    'LBL_CONFIRM_DONT_SAVE' => 'Mga kausbanan nausab sukad sa pag luwas nimo sa katapusan, gusto ba nimo iluwas?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Pagluwas sa mga pagbag-o?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Mahimo nga ang data ma truncated ug dili kini mahimo mabalik, sigurado ka ba nga gusto nimo magpadayun?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Pilia ang appropriate data tyepe nga naka base sa data nga mosulod adto sa field.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Usbon',
    'LBL_RESET_MODULE' => 'Usbon ang modyul',
    'LBL_REMOVE_CUSTOM' => 'Tangtangon ang pagpahiangay',
    'LBL_CLEAR_RELATIONSHIPS' => 'Tin-aw nga mga relasyon',
    'LBL_RESET_LABELS' => 'Usbon ang mga label',
    'LBL_RESET_LAYOUTS' => 'Usbot ang mga layout',
    'LBL_REMOVE_FIELDS' => 'Tangtangon ang kustombre field',
    'LBL_CLEAR_EXTENSIONS' => 'Tin-aw nga pagpalapad',
    'LBL_HISTORY_TIMESTAMP' => 'Timestamp',
    'LBL_HISTORY_TITLE' => ' kasaysayan',

    'fieldTypes' => array(
        'varchar' => 'Textfield',
        'int' => 'Integer',
        'float' => 'Naglutaw',
        'bool' => 'Checkbox',
        'enum' => 'Dropdown',
        'dynamicenum' => 'Dinamikong dropdown',
        'multienum' => 'Daghang gipili',
        'date' => 'Petsa',
        'phone' => 'Telepono',
        'currency' => 'Kasalukuyan',
        'html' => 'HTML',
        'radioenum' => 'Radyo',
        'relate' => 'Isaysay',
        'address' => 'Adres',
        'text' => 'Textarea',
        'url' => 'URL',
        'iframe' => 'Iframe',
        'datetimecombo' => 'Petsa ug oras',
        'decimal' => 'Decimal',
        'image' => 'Imahe',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Mga label nga makanunay gigamit",
        "all" => "Tanang mga label",
    ),

    'parent' => 'Paglambigit',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Imo ginapili ang kani nga item para sa pagtang-tang gikan sa dropdown nga listahan. bisan unsa nga mga dropdown field nga nagagamit sa kani nga listahan uban sa kani nga item isip usa ka balor kay dili na i-displey ang balor, og ang balor kay dili na pwede mapilian gikan sa mga dropdown na field. sigurado ba ka nga gusto nimo padayun?",

    'LBL_ALL_MODULES' => 'Dugangan ang Module',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0}(naay kalabotan {1} nga ID)',
);
