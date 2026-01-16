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
    'LBL_LOADING' => 'Yükleniyor' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Seçenekleri gizle' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Paket için bir <b>Ad</b> yazın. Yazacağınız ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır (Örnek: İK_Yönetimi)<br/><br/>Paket için <b>Sorumlu</b> ve <b>Açıklama</b> bilgilerini kullanabilirsiniz.<br/><br/>Paketi oluşturmak için <b>Kaydet</b> üzerine tıklayın.',
            'modify' => '<b>Paket</b> için özellikler ve yapılabilecek işlemler burada görüntülenir. <br><br>Paketin <b>Adını</b>, <b>Sorumlusunu</b> ve <b>Açıklamasını</b> düzenleyebilirsiniz. Bunun yanında paket içinde yer alan tüm modülleri görüntüleyebilir ve özelleştirebilirsiniz.<br><br>Pakete bir modül eklemek için <b>Yeni modül</b> üzerine tıklayın.<br><br>Pakette en az bir modül bulunuyorsa, paketi <b>Yayınlanabilir</b>, <b>Dağıtabilir</b> ve paket içindeki yapılan özelleştirmeleri <b>Dışa aktarabilirsiniz</b>.',
            'name' => 'Geçerli paketin <b>Adı</b>.<br/><br/>Yazılan ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır (Örnek: İK_Yönetim)',
            'author' => 'Kurulum sırasında paketi oluşturan varlığın adı olarak görüntülenecek <b>Sorumlu</b> bilgisi.<br><br>Sorumlu bir kişi ya da kuruluş olabilir.',
            'description' => 'Kurulum sırasında görüntülenecek pakete ait <b>Açıklama</b>.',
            'publishbtn' => 'Yazılmış tüm verileri kaydetmek ve paketin kurulabilir sürümünün .zip arşivi dosyasını oluşturmak için <b>Yayınla</b>üzerine tıklayın.<br><br>.zip dosyasını yüklemek ve paketi kurmak için <b>Modül Yükleyiciyi</b> kullanın.',
            'deploybtn' => 'Yazılmış tüm verileri kaydetmek ve paketi tüm modülleri ile kurmak için <b>Dağıt</b> üzerine tıklayın.',
            'duplicatebtn' => 'Paketin içeriğini yeni bir pakete kopyalamak ve yeni paketi görüntülemek için <b>Kopyala</b> üzerine tıklayın.<br/><br/>Yeni paketin adı, yeni paketin kopyalandığı paketin adının sonuna otomatik olarak bir numara eklenerek oluşturulur. Yeni paketin adını bir <b>Ad</b> yazarak ve <b>Kaydet</b> üzerine tıklayarak değiştirebilirsiniz.',
            'exportbtn' => 'Paket içinde yapılan özelleştirmeleri bir zip arşivi dosyasına kaydetmek için <b>Dışa Aktar</b> üzerine tıklayın.<br><br> Oluşturulan dosya paketin kurulabilir bir sürümü değildir.<br><br>.zip dosyasının içe aktarılması ve paketin özelleştirmeler ile Modül Oluşturucuda görüntülenmesi için <b>Modül Yükleyici</b> uygulamasını kullanın.',
            'deletebtn' => 'Bu paketi ve bu paket ile ilişkili tüm dosyaları silmek için <b>Sil</b> üzerine tıklayın.',
            'savebtn' => 'Paket ile ilişkili yazılan tüm verileri kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'existing_module' => 'Özellikleri düzenlemek ve modül ile ilgili alanları, ilişkileri ve görünümü özelleştirmek için <b>Modül</b> simgesine tıklayın.',
            'new_module' => 'Bu paketin yeni bir modülünü oluşturmak için <b>Yeni modül</b> üzerine tıklayın.',
            'key' => '5 harfli, alfa-sayısal <b>Anahtar</b>, geçerli paketteki tüm modüller için tüm klasörlerin, sınıf adlarının ve veri tabanı tablolarının önüne eklenir. <br><br> Anahtar, tablo adlarını eşsiz kılmak için kullanılır.',
            'readme' => 'Bu pakete bir <b>Beni oku</b> metni eklemek için tıklayın.<br><br> Beni oku metni kurulum sırasında görüntülenir.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Modül için bir <b>Ad</b> belirtin. Belirttiğiniz <b>Etiket</b> gezinme sekmesinde görüntülenir.<br/><br/><b>Gezinme sekmesi</b> kutusunu işaretleyerek modül için bir gezinme sekmesinin görüntülenmesini sağlayabilirsiniz.<br/><br/>Ardından eklemek istediğiniz modül türünü seçin.<br/><br/>Bir kalıp türü seçin. Her kalıpta belirli bir alan kümesinin yanında, modülün temelini oluşturmak için kullanabileceğiniz önceden tanımlanmış görünümler bulunur.<br/><br/>Modülü eklemek için <b>Kaydet</b> üzerine tıklayın.',
            'modify' => 'Modül özelliklerini düzenleyebilir ya da bu modül ile ilişkili <b>Alanları</b>, <b>İlişkileri</b> ve <b>Görünümleri</b> özelleştirebilirsiniz.',
            'importable' => '<b>İçe aktarılabilir</b> seçeneği etkinleştirildiğinde, bu modülde verileri içe aktarma özelliği kullanılabilir.<br><br>Modülün kısayollar panosuna bir içe aktarma yardımcısı bağlantısı eklenir. İçe aktarma yardımcısı kullanılarak dış kaynaklardan alınan veriler özel modüle aktarılabilir.',
            'team_security' => '<b>Takım güvenliği</b> seçeneği etkinleştirildiğinde modülde takım güvenliği özellikleri kullanılabilir.<br/><br/>Modüldeki kayıtlarda bir takım seçimi alanı görüntülenir ',
            'reportable' => 'Bu seçenek etkinleştirildiğinde, modülde raporlama özellikleri kullanılabilir.',
            'assignable' => 'Bu seçenek etkinleştirildiğinde, modülde bulunan bir kayıt seçilecek bir kullanıcıya atanabilir.',
            'has_tab' => '<b>Gezinme sekmesi</b> seçeneği etkinleştirildiğinde, modül için bir gezinme sekmesi görüntülenir.',
            'acl' => 'Bu seçenek etkinleştirildiğinde, modülde alan düzeyinde güvenlik sağlayan erişim denetimi özellikleri kullanılabilir.',
            'studio' => 'Bu seçenek etkinleştirildiğinde, yöneticiler bu modülü Studio kullanarak özelleştirebilir.',
            'audit' => 'Bu seçenek etkinleştirildiğinde, bu modül için denetim özelliği etkinleştirilir. Belirli alanlarda yapılan değişiklikler kayıt edilir ve gerektiğinde değişiklik geçmişi yöneticiler tarafından incelenebilir.',
            'viewfieldsbtn' => 'Modülle ilişkili alanları görüntülemek, özel alanlar eklemek ve düzenlemek için <b>Alanları görüntüle</b> üzerine tıklayın.',
            'viewrelsbtn' => 'Modülle ilgili ilişkileri görüntülemek ve yeni ilişkiler eklemek için <b>İlişkileri görüntüle</b> üzerine tıklayın.',
            'viewlayoutsbtn' => 'Modül görünümlerini görüntülemek ve alanların düzenini özelleştirmek için <b>Görünümleri görüntüle</b> üzerine tıklayın.',
            'duplicatebtn' => 'Modülün içeriğini yeni bir modüle kopyalamak ve yeni paketi görüntülemek için <b>Kopyala</b> üzerine tıklayın.<br/><br/>Yeni modülün adı, yeni modülün kopyalandığı modülün adının sonuna otomatik olarak bir numara eklenerek oluşturulur.',
            'deletebtn' => 'Bu modülü silmek için <b>Sil</b> üzerine tıklayın.',
            'name' => 'Geçerli modülün <b>Adı</b>.<br/><br/>Yazılan ad alfa-sayısal karakterlerden oluşmalı, bir harf ile başlamalı ve içinde boşluk karakteri bulunmamalıdır (Örnek: İK_Yönetim)',
            'label' => 'Gezinme sekmesinde modül için görüntülenecek <b>Etiket</b>. ',
            'savebtn' => 'Modül ile ilişkili yazılan tüm verileri kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'type_basic' => '<b>Temel</b> kalıp türünde ad, atanan kişi, takım, eklenme tarihi ve açıklama gibi temel alanlar bulunur.',
            'type_company' => '<b>Kuruluş</b> kalıp türünde kuruluş adı, endüstri ve fatura adresi gibi kuruluşlara özgü alanlar bulunur.<br/><br/>Standart hesaplar modülüne benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_issue' => '<b>Sorun</b> kalıp türünde numara, durum, öncelik ve açıklama gibi destek kaydı ve hata ayıklama işlemlerine özgü alanlar bulunur.<br/><br/>Standart destek kaydı ve hata ayıklama modüllerine benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_person' => '<b>Kişi</b> kalıp türünde hitap, unvan, ad, adres ve telefon numarası gibi kişiye özgü alanlar bulunur.<br/><br/>Standart ilgili kişi ve potansiyel modüllerine benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_sale' => '<b>Satış</b> kalıp türünde potansiyel kaynağı, aşama, tutar ve olasılık gibi fırsata özgü alanlar bulunur.<br/><br/>Standart fırsat modülüne benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_file' => '<b>Dosya</b> kalıp türünde dosya adı, belge türü ve yayınlanma tarihi gibi belgeye özgü alanlar bulunur.<br><br>Standart belgeler modülüne benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',

        ),
        'dropdowns' => array(
            'default' => 'Uygulamadaki tüm <b>Açılan listeler</b> burada görüntülenir.<br><br>Açılan listeler, herhangi bir modüldeki açılan liste alanlarında kullanılabilir.<br><br>Var olan bir açılan listedeyi düzenlemek için açılan listenin adına tıklayın.<br><br>Yeni bir açılan liste eklemek için <b>Açılan liste ekle</b> üzerine tıklayın.',
            'editdropdown' => 'Açılan listeler herhangi bir modülde standart ya da özelleştirilmiş açılan liste alanlarında kullanılabilir.<br><br>Açılan liste için bir <b>Ad</b> yazın.<br><br>Uygulamaya herhangi bir dil paketi kurulmuş ise liste ögeleri için kullanılacak bir <b>Dil</b> seçebilirsiniz.<br><br><b>Öge adı</b> alanında, açılan liste için bir ad yazın. Bu ad kullanıcılara görüntülenmez.<br><br><b>Görüntülenecek etiket</b> alanına kullanıcılar tarafından görülebilecek bir etiket yazın.<br><br>Öge adını ve etiketi yazdıktan sonra açılan listeye ögeleri eklemek için <b>Ekle</b> üzerine tıklayın.<br><br>Listedeki ögelerin sıralamasını düzenlemek için ögeleri sürükleyip görüntülenmesini istediğiniz konuma bırakın.<br><br>Bir açılan liste ögesinin görüntülenen etiketini düzenlemek için <b>Düzenle simgesi</b> üzerine tıklayıp yeni etiketi yazın. Açılan listeden bir öge silmek için, <b>Sil simgesi</b> üzerine tıklayın.<br><br>Görüntülenecek bir etiket üzerinde yapılmış değişiklikleri geri almak için,<b>Geri al</b> üzerine, yapılmış bir değişikliği yinelemek için <b>Yinele</b> üzerine tıklayın.<br><br>Açılan listeyi kaydetmek için <b>Kaydet</b> üzerine tıklayın.',

        ),
        'subPanelEditor' => array(
            'modify' => '<b>Alt panoda</b> görüntülenecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda alt panoda görüntülenen alanlar bulunur.<br/><br/><b>Gizli</b> sütununda varsayılan sütununa eklenebilecek alanlar bulunur.'
        ,
            'savebtn' => 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkinleştirmek için <b>Kaydedip dağıt</b> üzerine tıklayın.',
            'historyBtn' => 'Geçmişte kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi görüntüle</b> üzerine tıklayın.',
            'historyDefault' => 'Bir görünümün özgün şeklini geri yüklemek için <b>Varsayılanları geri yükle</b> üzerine tıklayın.',
            'Hidden' => '<b>Gizli</b> alanlar alt panoda görüntülenmez.',
            'Default' => '<b>Varsayılan</b> alanlar alt panoda görüntülenir.',

        ),
        'listViewEditor' => array(
            'modify' => '<b>Liste görünümünde</b> görüntülenebilecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda liste görünümünde görüntülenen alanlar bulunur.<br/><br/><b>Kullanılabilir</b> sütununda kullanıcının arama içinden liste görünümünü özelleştirmek için seçebileceği alanlar bulunur.<br/><br/><b>Gizli</b> sütununda varsayılan ya da kullanılabilir sütunlarına eklenebilecek alanlar bulunur.'
        ,
            'savebtn' => 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkinleştirmek için <b>Kaydedip dağıt</b> üzerine tıklayın.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi görüntüle</b> içindeki <b>Geri yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları geri yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları geri yükle</b> seçeneği yalnızca özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'Hidden' => '<b>Gizli</b> alanlar liste görünümlerinde kullanıcılara görüntülenmez.',
            'Available' => '<b>Kullanılabilecek</b> alanlar varsayılan olarak liste görünümlerinde görüntülenmez ancak daha sonra kullanıcılar tarafından bu görünümlere eklenebilir.',
            'Default' => '<b>Varsayılan</b> alanlar kullanıcılar tarafından özelleştirilmemiş liste görünümlerinde görüntülenir.'
        ),
        'popupListViewEditor' => array(
            'modify' => '<b>Liste görünümünde</b> görüntülenebilecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda liste görünümünde varsayılan olarak görüntülenen alanlar bulunur.<br/><br/><b>Gizli</b> sütununda varsayılan ya da kullanılabilir sütunlarına taşınabilecek alanlar bulunur.'
        ,
            'savebtn' => 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkinleştirmek için <b>Kaydedip dağıt</b> üzerine tıklayın.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi görüntüle</b> içindeki <b>Geri yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları geri yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları geri yükle</b> seçeneği yalnızca özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'Hidden' => '<b>Gizli</b> alanlar liste görünümlerinde kullanıcılara görüntülenmez.',
            'Default' => '<b>Varsayılan</b> alanlar kullanıcılar tarafından özelleştirilmemiş liste görünümlerinde görüntülenir.'
        ),
        'searchViewEditor' => array(
            'modify' => '<b>Süzgeç</b> formunda görüntülenebilecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda Arama formunda görüntülenecek alanlar bulunur.<br/><br/><b>Gizli</b> sütununda yönetici olarak arama formuna eklenebilecek alanlar bulunur.'
        ,
            'savebtn' => '<b>Kaydedip dağıt</b> üzerine tıklandığında tüm değişiklikleri kaydedilir ve etkinleştirilir',
            'Hidden' => '<b>Gizli</b> alanlar aramada görüntülenmez.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi görüntüle</b> içindeki <b>Geri yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları geri yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları geri yükle</b> seçeneği yalnızca özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'Default' => 'Aramada görüntülenecek <b>Varsayılan</b> alanlar.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>Görünüm</b> bölgesinde şu anda <b>Ayrıntı görünümünde</b> görüntülenen alanlar bulunur.<br/><br/><b>Araç kutusunda</b> <b>Çöp kutusu</b> ile görünüme eklenebilecek alanlar ve görünüm bileşenleri bulunur.<br><br>Alanları ve görünüm bileşenlerini <b>Araç kutusu</b> ile <b>Görünüm</b> arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Herhangi bir alanı görünümden kaldırmak için alanı sürükleyip <b>Çöp kutusuna</b> bırakın. Çöpe atılan alanlar araç kutusunda yeniden görünüme eklenebilecek şekilde görüntülenir.',
            'defaultquickcreate' => '<b>Görünüm</b> bölgesinde şu anda <b>Hızlı ekle</b> formunda görüntülenen alanlar bulunur.<br><br>Ekle düğmesine tıklandığında, modülün alt panolarında hızlı ekle formu görüntülenir.<br/><br/><b>Araç kutusunda</b> <b>Çöp kutusu</b> ile görünüme eklenebilecek alanlar ve görünüm bileşenleri bulunur.<br><br>Alanları ve görünüm bileşenlerini <b>Araç kutusu</b> ile <b>Görünüm</b> arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Herhangi bir alanı görünümden kaldırmak için alanı sürükleyip <b>Çöp kutusuna</b> bırakın. Çöpe atılan alanlar araç kutusunda yeniden görünüme eklenebilecek şekilde görüntülenir.',
            //this default will be used for edit view
            'default' => '<b>Görünüm</b> bölgesinde şu anda <b>Düzenleme görünümünde</b> görüntülenen alanlar bulunur.<br/><br/><b>Araç kutusunda</b> <b>Çöp kutusu</b> ile görünüme eklenebilecek alanlar ve görünüm bileşenleri bulunur.<br><br>Alanları ve görünüm bileşenlerini <b>Araç kutusu</b> ile <b>Görünüm</b> arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Herhangi bir alanı görünümden kaldırmak için alanı sürükleyip <b>Çöp kutusuna</b> bırakın. Çöpe atılan alanlar araç kutusunda yeniden görünüme eklenebilecek şekilde görüntülenir.',
            'saveBtn' => 'Görünüm üzerinde, son kayıt işleminden sonra yapılan değişiklikleri korumak için <b>Kaydet</b> üzerine tıklayın.<br><br>Kaydedilen değişiklikler dağıtılana kadar modülde görüntülenmez.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi görüntüle</b> içindeki <b>Geri yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları geri yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları geri yükle</b> seçeneği yalnızca özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'publishBtn' => 'Görünüm üzerinde, son kayıt işleminden sonra yapılan değişiklikleri korumak ve bu değişiklikleri modül üzerinde etkinleştirmek için <b>Kaydedip dağıt</b> üzerine tıklayın.<br><br>Kaydedilen değişiklikler anında modülde görüntülenir.',
            'toolbox' => '<b>Araç kutusunda</b> <b>Çöp kutusu</b> ve görünüme eklenebilecek alan ve görünüm bileşenleri bulunur.<br/><br/>Alanları ve bileşenleri araç kutusu ile görünüm arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Görünüm bileşenleri <b>Panolar</b> ve <b>Satırlardır</b>. Görünüme yeni bir satır ya da pano ekleyerek alanların eklenebileceği yeni bölgeler oluşturulabilir.<br/><br/>. Bir alanı başka bir alanla değişmek istediğinizde yeni alanı sürükleyip değiştirmek istediğiniz alanın üzerine bırakın.<br/><br/><b>Doldurucu</b> alanı sürüklendiği görünümde boş bir alan oluşturmak için kullanılır.',
            'panels' => '<b>Görünüm</b> bölgesi, görünümde yapılan değişikliklerin uygulanmasından sonra, görünümün modülde nasıl olacağının görülmesini sağlar.<br/><br/>Alanları, satırları ve panoları istediğiniz konuma sürükleyip bırakarak taşıyabilirsiniz.<br/><br/>Görünüm bileşenlerini araç kutusu üzerindeki <b>Çöp kutusuna</b> sürükleyip bırakarak silebilir ya da <b>Araç kutusundan</b> görünüm alanında görüntülenmesini istediğiniz konuma sürükleyip bırakarak ekleyebilirsiniz.',
            'delete' => 'Herhangi bir bileşeni görünümden kaldırmak için sürükleyip buraya bırakın',
            'property' => 'Bu alan için görüntülenecek etiketi düzenleyin.<br/><b>Sekme sıralaması</b> sekme anahtarının alanlar arasındaki geçiş sıralamasını belirler.',
        ),
        'fieldsEditor' => array(
            'default' => 'Modül için kullanılabilecek <b>Alanlar</b> burada adlarına göre sıralanmış olarak görüntülenir.<br><br>Modül için daha sonra eklenen özel alanlar varsayılan olarak kullanılabilecek alanların üzerinde görüntülenir.<br><br>Bir alanı düzenlemek için <b>Alan adına</b> tıklayın.<br/><br/>Yeni bir alan eklemek için <b>Alan ekle</b> üzerine tıklayın.',
            'mbDefault' => 'Modül için kullanılabilecek <b>Alanlar</b> burada adlarına göre sıralanmış olarak görüntülenir.<br><br>Bir alanın özelliklerini ayarlamak için Alan adı üzerine tıklayın.<br><br>Yeni bir alan eklemek için <b>Alan ekle</b> üzerine tıklayın. Yeni alanın etiketi, diğer özellikleri gibi alanın eklenmesinden sonra alan adına tıklanarak düzenlenebilir.<br><br>Modül dağıtıldıktan sonra modül oluşturucu içinde eklenmiş yeni alanlar Studio içinde eklenmiş standart alanlar olarak değerlendirilir.',
            'addField' => 'Yeni alanın <b>Veri türünü</b> seçin. Seçtiğiniz veri türü bu alana yazılabilecek karakterlerin türünü belirler. Örneğin, tam sayı türündeki bir alana yalnızca tam sayı değerleri yazılabilir.<br><br>Alan için bir <b>Ad</b> yazın. Ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır. Yalnız alt çizgi karakteri kullanılabilir.<br><br><b>Görüntülenecek etiket</b>, alanın modül görünümlerinde görüntülenecek etiketidir.<b>Sistem etiketi</b> alanı yazılım kodu içinde belirtmek için kullanılır.<br><br>Alan için seçtiğiniz veri türüne bağlı olarak, alan için aşağıdaki özelliklerin bazıları ya da tümü ayarlanabilir:<br><br><b>Yardım metni</b>, kullanıcı fare ile alanın üzerine geldiğinde geçici olarak görüntülenir ve ilgili alana nasıl bir değer yazılacağı hakkında kullanıcıya bilgi verir.<br><br><b>Yorum metni</b> yalnızca Studio ya da modül oluşturucu araçlarında görüntülenir ve yöneticilere alan hakkında bilgi vermek için kullanılabilir.<br><br><b>Varsayılan değer</b>, veri yazılmadan önce alanda görüntülenir. Kullanıcılar bu varsayılan değeri kullanabilir ya da yeni bir değer yazabilir.<br><br><b>Toplu güncelleme</b> seçeneği alanın toplu güncelleme özelliğini kullanıp kullanmayacağını belirler.<br><br><b>En büyük boyut</b>, alana yazılabilecek en fazla karakter sayısını belirler.<br><br><b>Zorunlu alan</b> seçeneği etkinleştirildiğinde alana veri yazılması zorunlu olur. Alanın bulunduğu bir kaydın kaydedilebilmesi için zorunlu alanların doldurulması gerekir.<br><br><b>Raporlanabilir</b> seçeneği etkinleştirildiğinde, alan süzgeçlerde raporlarda görüntülenir.<br><br><b>Denetim</b> seçeneği etkinleştirildiğinde, alan üzerinde yapılan değişiklikler değişiklik günlüğüne kaydedilir.<br><br><b>İçe aktarılabilir</b> seçeneği, alanın içe aktarma yardımcısı ile içe aktarılıp aktarılmayacağını ya da zorunlu olup olacağını belirler.<br><br><b>Çift kayıtları birleştir</b> seçeneği çift kayıtları birleştirme ya da çift kayıtları bulma özelliklerinin kullanılıp kullanılmayacağını belirler.<br><br>Bazı veri türlerinde ayarlanabilecek başka özellikler bulunabilir.',
            'editField' => 'Bu alanın özellikleri özelleştirilebilir.<br><br>Aynı özelliklere sahip yeni bir alan eklemek için <b>Kopyala</b> üzerine tıklayın.',
            'mbeditField' => 'Bir kalıp alanının <b>Görüntülenecek etiketi</b> özelleştirilebilir. Alanın diğer özellikleri özelleştirilemez.<br><br>. Aynı özelliklerde yeni bir alan eklemek için <b>Kopyala</b> üzerine tıklayın.<br><br>Modülde görüntülenmemesi için bir alanı kaldırmak istiyorsanız, alanı ilgili <b>Görünümden</b> kaldırın.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Studio aracı üzerinde yapılan özelleştirmeler dışa aktarılarak, başka bir sisteme <b>Modül yükleyici</b> üzerinden yüklenebilir.<br><br>Öncelikle bir <b>Paket adı</b> yazın. Ayrıca paket için <b>Sorumlu</b> ve <b>Açıklama</b> bilgilerini de yazabilirsiniz.<br><br>Dışarı aktarmak istediğiniz, özelleştirilmiş modülleri seçin. Yalnızca özelleştirilmiş modüller seçilmek üzere görüntülenir.<br><br>Ardından <b>Dışa aktar</b> üzerine tıklayarak özelleştirmelerin bulunduğu .zip arşivi dosyasını oluşturabilirsiniz.',
            'exportCustomBtn' => 'Dışa aktarmak istediğiniz özelleştirmeleri bir .zip arşivi dosyasına kaydetmek için <b>Dışa aktar</b> üzerine tıklayın.',
            'name' => 'Kurulum sırasında görüntülenecek pakete ait <b>Ad</b>.',
            'author' => 'Kurulum sırasında paketi oluşturan varlığın adı olarak görüntülenecek <b>Sorumlu</b> bilgisi. Sorumlu bir kişi ya da kuruluş olabilir.',
            'description' => 'Kurulum sırasında görüntülenecek pakete ait <b>Açıklama</b>.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Geliştirici araçları</b> bölümüne hoş geldiniz.<br/><br/>Bu bölümdeki araçları kullanarak, standart ve özelleştirilmiş modüller ile özel alanlar eklenip yönetilebilir.',
            'studioBtn' => 'Dağıtılmış modülleri özelleştirmek için <b>Studio</b> aracını kullanabilirsiniz.',
            'mbBtn' => 'Yeni modüller oluşturmak için <b>Modül oluşturucu</b> aracını kullanın.',
            'sugarPortalBtn' => 'SuiteCRM Portal bölümünü yönetmek ve özelleştirmek için <b>SuiteCRM portal düzenleyici</b> aracını kullanabilirsiniz.',
            'dropDownEditorBtn' => 'Açılan liste alanlarında kullanılabilecek genel açılan listeleri eklemek ve düzenlemek için <b>Açılan liste düzenleyici</b> aracını kullanabilirsiniz.',
            'appBtn' => 'Uygulama kipinde, giriş sayfasında kaç tane TPS raporu görüntüleneceği gibi özellikler özelleştirilebilir',
            'backBtn' => 'Önceki adıma dön.',
            'studioHelp' => 'Hangi bilgilerin nasıl görüntüleneceğini belirlemek için <b>Studio</b> aracını kullanabilirsiniz.',
            'moduleBtn' => 'Bu modülü düzenlemek için tıklayın.',
            'moduleHelp' => 'Modül için özelleştirilebilecek bileşenler burada görüntülenir.<br><br>Düzenlemek istediğiniz bileşeni seçmek için bir simgeye tıklayın.',
            'fieldsBtn' => 'Modül içinde bilgilerin tutulacağı <b>Alanları</b> ekler ve özelleştirir.',
            'labelsBtn' => 'Modüldeki alanlar ve diğer başlıklar için görüntülenen <b>Etiketleri</b> düzenler.',
            'relationshipsBtn' => 'Modül <b>İlişkilerini</b> ekler ya da görüntüler.',
            'layoutsBtn' => 'Modül <b>Görünümlerini</b> özelleştirir. Modüldeki alanların farklı şekillerde görüntülenmesini sağlar.<br><br>Hangi alanların görüntüleneceğini ve hangi düzende görüntüleneceği belirlenebilir.',
            'subpanelBtn' => 'Modülde <b>Alt panolarda</b> hangi alanların görüntüleneceğini belirler.',
            'portalBtn' => '<b>SuiteCRM Portal</b> içinde görüntülenecek modül <b>Görünümlerini</b> özelleştirir.',
            'layoutsHelp' => 'Özelleştirilebilecek modül <b>Görünümleri</b> burada görüntülenir.<br><br> Görünümler alanları ve alan verilerini görüntüler.<br><br>Düzenlemek istediğiniz görünümü seçmek için bir simgeye tıklayın.',
            'subpanelHelp' => 'Modülün özelleştirilebilecek <b>Alt panoları</b> burada görüntülenir.<br><br>Düzenlemek istediğiniz modülü seçmek için bir simgeye tıklayın.',
            'newPackage' => 'Yeni bir paket eklemek için <b>Yeni paket</b> üzerine tıklayın.',
            'exportBtn' => 'Studio aracı üzerinde belirli modüller için yapılan özelleştirmelerin bulunduğu bir paket oluşturmak ve indirmek için <b>Özelleştirmeleri dışa aktar</b> üzerine tıklayın.',
            'mbHelp' => 'Standart ya da özel nesnelere dayalı özel modüllerin bulunduğu paketler oluşturmak için <b>Modül oluşturucu</b> aracını kullanabilirsiniz.',
            'viewBtnEditView' => 'Modülün <b>Düzenleme görünümünü</b> özelleştirir.<br><br>Düzenleme görünümü formunda kullanıcının yazdığı verilerin kaydedileceği alanlar bulunur.',
            'viewBtnDetailView' => 'Modülün <b>Ayrıntı görünümünü</b> özelleştirir.<br><br> Ayrıntı görünümünde kullanıcı tarafından yazılmış veriler görüntülenir.',
            'viewBtnDashlet' => 'Modülün <b>SuiteCRM pano bileşeni</b> ile SuiteCRM pano bileşenleri liste ve arama görünümlerini özelleştirir.<br><br>SuiteCRM pano bileşeni, giriş modülünde sayfalara eklenmek için görüntülenir.',
            'viewBtnListView' => 'Modülün <b>Liste görünümünü</b> özelleştirir.<br><br> Arama sonuçları liste görünümünde görüntülenir.',
            'searchBtn' => 'Modülün <b>Arama</b> görünümlerini özelleştirir.<br><br>Liste görünümünde kayıtları süzmek için görüntülenecek alanları belirleyebilirsiniz.',
            'viewBtnQuickCreate' => 'Modülün <b>Hızlı ekle</b> görünümünü özelleştirir.<br><br>Hızlı ekle formu e-posta modülünde ve alt panolarda görüntülenir.',
            'addLayoutHelp' => "Bir güvenlik grubuna özel bir görünüm eklemek için ilgili güvenlik grubunu ve başlangıç noktası olarak kopyası kullanılacak görünümü seçin.",
            'searchHelp' => 'Özelleştirilebilecek <b>Arama</b> formları burada görüntülenir.<br><br>Arama formlarında kayıtları süzmek için alanlar bulunur.<br><br>Düzenlemek istediğiniz arama görünümünü seçmek için bir simgeye tıklayın.',
            'dashletHelp' => 'Özelleştirilebilecek <b>SuiteCRM pano bileşeni</b> görünümleri burada görüntülenir.<br><br>SuiteCRM pano bileşeni, giriş modülüne eklenmek üzere görüntülenir.',
            'DashletListViewBtn' => '<b>SuiteCRM pano bileşeni liste görünümü</b> SuiteCRM pano bileşeni arama süzgeçlerine uygun kayıtları görüntüler.',
            'DashletSearchViewBtn' => '<b>SuiteCRM pano bileşeni arama</b> SuiteCRM pano bileşeni liste görünümünde görüntülenecek kayıtları süzer.',
            'popupHelp' => 'Özelleştirilebilecek <b>Açılan pencere</b> görünümleri burada görüntülenir.<br>',
            'PopupListViewBtn' => '<b>Açılan pencere liste görünümünde</b> açılan pencere arama görünümlerine göre kayıtlar görüntülenir.',
            'PopupSearchViewBtn' => '<b>Açılan pencere aramasında</b> açılan pencere liste görünümü için kayıtlar görüntülenir.',
            'BasicSearchBtn' => 'Modülün arama bölümünde hızlı süzme sekmesinde görüntülenecek <b>Hızlı süzme</b> formunu özelleştirir.',
            'AdvancedSearchBtn' => 'Modülün arama bölümünde gelişmiş arama sekmesinde görüntülenecek <b>Gelişmiş süzme</b> formunu özelleştirir.',
            'portalHelp' => '<b>SuiteCRM Portal</b> özelliklerini yönetir ve özelleştirir.',
            'SPUploadCSS' => 'SuiteCRM Portal için <b>Biçem Sayfası</b> yükler.',
            'SPSync' => 'SuiteCRM Portal kopyasındaki özelleştirmeleri <b>Eşitler</b>.',
            'Layouts' => 'SuiteCRM Portal modüllerinin <b>Görünümlerini</b> özelleştirir.',
            'portalLayoutHelp' => 'Modüller SuiteCRM Portal içinde bu alanda görüntülenir.<br><br><b>Görünümünü</b> düzenlemek istediğiniz bir modül seçin.',
            'relationshipsHelp' => 'Modül ve diğer dağıtılmış modüller arasındaki <b>İlişkiler</b> burada görüntülenir.<br><br>İlişkinin <b>Adı</b> sistem tarafından otomatik olarak oluşturulur.<br><br>İlişkinin sahibi olan modül <b>Birincil modül</b> olarak tanımlanır. Örneğin hesap modülünün birincil modül olduğu tüm ilişkilerin özellikleri hesaplar veri tabanı tablosunda tutulur.<br><br><b>Tür</b>, Birincil modül ile <b>İlişkili modül</b> arasında kurulan ilişkinin türüdür.<br><br>Herhangi bir sütuna göre sıralama yapmak için sütun başlığına tıklayın.<br><br>Herhangi bir satırdaki ilişkinin özelliklerini görüntülemek için ilgili satıra tıklayın.<br><br>Yeni bir ilişki eklemek için <b>İlişki ekle</b> üzerine tıklayın.<br><br>Dağıtılmış herhangi iki modül arasında bir ilişki eklenebilir.',
            'relationshipHelp' => 'Modül ile diğer dağıtılmış modüller arasında <b>İlişkiler</b> kurulabilir.<br><br>İlişkiler alt panolar üzerinde modül kayıtlarındaki ilişkiler kullanılarak görselleştirilir.<br><br>Modül için aşağıdaki ilişki <b>Türlerinden</b> birini seçin:<br><br><b>Tek - Tek</b> - Her iki modülün kayıtlarında ilişki alanları bulunur.<br><br><b>Tek - Çok</b> - Birincil modülün kaydında bir alt pano görüntülenir ve ilişkili modülün kaydında ilişki alanı bulunur.<br><br><b>Çok - Çok</b> - İki modülün kayıtlarında da alt panolar görüntülenir.<br><br>İlişkili kurmak için bir <b>İlişkili modül</b> seçin.<br><br>İlişki türünde alt panolar bulunuyorsa, ilgili modüller için alt pano görünümünü seçin.<br><br>İlişkiyi kurmak için <b>Kaydet</b> üzerine tıklayın.',
            'convertLeadHelp' => 'Bu bölümden dönüştürme görünümüne yeni modüller ekleyebilir ya da var olan modülleri düzenleyebilirsiniz.<br/>		İlgili satırı sürükleyip bırakarak tablodaki modül sıralamasını değiştirebilirsiniz.<br/><br/>		<b>Modül:</b> Modülün adı.<br/><br/>		<b>Zorunlu:</b> Potansiyel dönüştürülmeden önce eklenmesi ya da seçilmesi zorunlu olan modüller.<br/><br/>		<b>Verileri kopyala:</b> Bu seçenek işaretlendiğinde, potansiyel kaydındaki alanlar, yeni eklenen kayıtlardaki aynı adlı alanlara kopyalanır.<br/><br/>		<b>Seçilebilsin:</b>Potansiyel dönüştürme işlemi sırasında İlgili Kişi kayıtlarında ilişkili alanı olan modüller eklenmek yerine seçilebilir.<br/><br/>		<b>Düzenle:</b> Bu modülün dönüştürme görünümünü düzenler.<br/><br/>		<b>Sil:</b>Bu modülü dönüştürme görünümünden kaldırır.<br/><br/>',


            'editDropDownBtn' => 'Bir Genel Açılan Listeyi Düzenle',
            'addDropDownBtn' => 'Yeni Bir Genel Açılan Liste Ekle',
        ),
        'fieldsHelp' => array(
            'default' => 'Bu bölümde modüldeki <b>Alanlar</b> Alan Adına göre sıralanmış listesi bulunur.<br><br>Modül kalıbında önceden ayarlanmış alanlar bulunur.<br><br>Yeni bir alan eklemek için <b>Alan Ekle</b> üzerine tıklayın.<br><br>Var olan bir alanı düzenlemek için <b>Alan Adı</b> üzerine tıklayın.<br/><br/>Modül dağıtıldıktan sonra Modül Oluşturucu içinde eklenmiş yeni alanlar Studio içinde eklenmiş standart alanlar olarak değerlendirilir.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Modül ve diğer dağıtılmış modüller arasındaki <b>İlişkiler</b> burada görüntülenir.<br><br>İlişkinin <b>Adı</b> sistem tarafından otomatik olarak oluşturulur.<br><br>İlişkinin sahibi olan modül <b>Birincil modül</b> olarak tanımlanır. İlişki özellikleri birincil modülün veri tabanı tablolarına kaydedilir.<br><br><b>Tür</b>, Birincil modül ile <b>İlişkili modül</b> arasında kurulan ilişkinin türüdür.<br><br>Herhangi bir sütuna göre sıralama yapmak için sütun başlığına tıklayın.<br><br>Herhangi bir satırdaki ilişkinin özelliklerini görüntülemek için ilgili satıra tıklayın.<br><br>Yeni bir ilişki eklemek için <b>İlişki ekle</b> üzerine tıklayın.',
            'addrelbtn' => 'ilişki ekleme yardımı için fare ile üzerine gelin...',
            'addRelationship' => 'Modül ile diğer özel modüller ya da dağıtılmış modüller arasında <b>İlişkiler</b> kurulabilir.<br><br>İlişkiler alt panolar üzerinde modül kayıtlarındaki ilişkiler kullanılarak görselleştirilir.<br><br>Modül için aşağıdaki ilişki <b>Türlerinden</b> birini seçin:<br><br><b>Tek - Tek</b> - Her iki modülün kayıtlarında ilişki alanları bulunur.<br><br><b>Tek - Çok</b> - Birincil modülün kaydında bir alt pano görüntülenir ve ilişkili modülün kaydında ilişki alanı bulunur.<br><br><b>Çok - Çok</b> - İki modülün kayıtlarında da alt panolar görüntülenir.<br><br>İlişki kurmak için <b>İlişkili modül</b> seçin.<br><br>İlişki türünde alt panolar bulunuyorsa, ilgili modüller için alt pano görünümünü seçin.<br><br>İlişkiyi kurmak için <b>Kaydet</b> üzerine tıklayın.',
        ),
        'labelsHelp' => array(
            'default' => 'Modüldeki alanlar ve başlıkların <b>Etiketleri</b> değiştirilebilir.<br><br>Alan içine tıklayarak etiketi düzenledikten sonra <b>Kaydet</b> üzerine tıklayın.<br><br>Uygulamaya bir dil paketi kurulmuş ise, etiketler için kullanılacak <b>Dil</b> seçimini de yapabilirsiniz.',
            'saveBtn' => 'Tüm değişiklikleri kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'publishBtn' => 'Tüm değişiklikleri kaydedip etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.',
        ),
        'portalSync' => array(
            'default' => 'Güncellemek için <b>SuiteCRM Portal Adresine</b> giderek <b>Git</b> üzerine tıklayın.<br><br>Geçerli bir SuiteCRM kullanıcı adı ve parolası yazıp <b>Eşitlemeyi Başlat</b> üzerine tıklayın.<br><br>Böylece SuiteCRM Portal <b>Görünümlerindeki</b> özelleştirmeler ve yüklenmiş ise, <b>Biçem Dosyası</b> belirtilen portal kopyasına aktarılır.',
        ),
        'portalStyle' => array(
            'default' => 'Biçem sayfaları kullanarak SuiteCRM Portal görünümünü özelleştirebilirsiniz.<br><br>Yüklenecek bir <b>Biçem Dosyası</b> seçin.<br><br>Yüklenen biçem dosyası bir sonraki eşitleme işlemi sırasında SuiteCRM Portal üzerine uygulanır.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Yeni bir proje başlatmak için, <b>Yeni paket</b> üzerine tıklayarak özel modülerinizin bulunacağı paketi oluşturun.<br/><br/>Bir paket bir ya da daha fazla modülden oluşabilir.<br/><br/>Örneğin, standart hesaplar modülü ile ilişkili bir özel modül bulunan bir paket oluşturmak isteyebilirsiniz. Ya da, bir proje olarak birbiri ile ve uygulamada var olan diğer modüller ile birlikte çalışacak bir kaç yeni modül bulunan bir bir paket de oluşturmak isteyebilirsiniz.',
            'somepackages' => 'Bir <b>paket</b>, bir projenin parçası olan özel modülleri bir araya toplar. Bir pakette, bir ya da birbiriyle ya da uygulamadaki diğer modüller ile ilişkili bir kaç <b>modül</b> bulunur.<br/><br/>Projeniz için bir paket oluşturduktan sonra, hemen paket içine modüller ekleyebileceğiniz gibi projeyi daha sonra tamamlamak üzere modül oluşturucu aracına dönebilirsiniz.<br><br>Proje tamamlandığında, özel modülleri uygulama üzerine kurmak için paketi <b>Dağıtabilirsiniz</b>.',
            'afterSave' => 'Oluşturacağınız pakette en az bir modül bulunmalıdır. Bir paket içine bir ya da birden fazla özel modül ekleyebilirsiniz.<br/><br/>Bu pakete yeni bir modül eklemek için <b>Yeni modül</b> üzerine tıklayın.<br/><br/>En az bir modül ekledikten paketi yayınlayarak ya da dağıtarak kendi kopyanızda ya da başka bir kullanıcının kopyasında kullanılmasını sağlayabilirsiniz.<br/><br/>Modülü SuiteCRM kopyanız üzerinde tek bir adımda hemen dağıtmak için <b>Dağıt</b> üzerine tıklayın.<br><br>Paketi .bir zip arşivi dosyasına kaydetmek için <b>Dağıt</b> üzerine tıklayın. .zip arşivi dosyası, sisteminize kaydedildikten sonra, <b>Modül yükleyici</b> aracını kullanarak paketi kendi SuiteCRM kopyanıza yükleyip kurabilirsiniz.<br/><br/>Dosyayı diğer kullanıcılar ile paylaşarak paketi kendi SuiteCRM kopyalarına yükleyip kurmalarını sağlayabilirsiniz.',
            'create' => 'Bir <b>paket</b>, bir projenin parçası olan özel modülleri bir araya toplar. Bir pakette, bir ya da birbiriyle ya da uygulamadaki diğer modüller ile ilişkili bir kaç <b>modül</b> bulunur.<br/><br/>Projeniz için bir paket oluşturduktan sonra, hemen paket içine modüller ekleyebileceğiniz gibi projeyi daha sonra tamamlamak üzere modül oluşturucu aracına dönebilirsiniz.',
        ),
        'main' => array(
            'welcome' => 'Standart ve özelleştirilmiş modüller ve alanlar eklemek ve yönetmek için <b>Geliştirici araçlarını</b> kullanabilirsiniz.<br/><br/> Uygulamadaki modülleri yönetmek için <b>Studio</b> aracına tıklayın.<br/><br/>Özelleştirilmiş modüller oluşturmak için <b>Modül oluşturucu</b> aracına tıklayın.',
            'studioWelcome' => 'Şu anda kurulu olan, standart ve modül ile yüklenmiş nesneler bulunduran tüm modüller Studio aracı ile özelleştirilebilir.'
        ),
        'module' => array(
            'somemodules' => "Geçerli pakette en az bir modül bulunduğundan, paketi kendi SuiteCRM kopyanıza <b>Dağıtarak</b> ya da <b>Yayınlayarak</b>paketin geçerli SuiteCRM kopyasına ya da <b>Modül yükleyici</b> aracı ile başka bir SuiteCRM kopyasına kurabilirsiniz.<br/><br/>Paketi doğrudan SuiteCRM kopyanıza kurmak için <b>Dağıt</b> üzerine tıklayın.<br><br>Paketi .zip arşivi dosyası biçiminde kaydedip <b>Modül yükleyici</b> aracı ile başka SuiteCRM kopyalarına yüklenip kurulacak hale getirmek için <b>Yayınla</b> üzerine tıklayın.<br/><br/>Bu paketteki modülleri aşamalı olarak oluşturabilir ve uygun olduğunda dağıtabilir ya da yayınlayabilirsiniz.<br/><br/>Bir paketi yayınladıktan ya da dağıttıktan sonra da paket özelliklerinde değişiklik yapabilir ve modülleri özelleştirebilirsiniz. Yaptığınız değişiklikleri uygulamak için yeniden yayınlayın ya da yeniden dağıtın.",
            'editView' => 'Bu bölümden var olan alanları düzenleyebilir, var olan herhangi bir alanı kaldırabilir ya da sol panodan yeni alanlar ekleyebilirsiniz.',
            'create' => 'Eklemek istediğiniz modülün <b>Türünü</b> modülde bulunmasını istediğiniz alanların türlerine göre seçin.<br/><br/>Her modül kalıbında, başlığında belirtilen alan türleri bulunur.<br/><br/><b>Temel</b> - Ad, atanmış kişi, takım, eklenme tarihi ve açıklama gibi standart modüllere özgü alan türleri bulunur.<br/><br/><b>Kuruluş</b> - Kuruluş adı, iş ve fatura adresi gibi kuruluşa özgü alanlar bulunur. Bu kalıbı standart hesap modülüne benzer modüller oluşturmak için kullanabilirsiniz.<br/><br/><b>Kişi</b> - Hitap, başlık, ad, adres ve telefon numarası gibi kişiye özgü alanlar bulunur. Bu kalıbı standart kişiler ve potansiyeller modüllerine benzer modüller oluşturmak için kullanabilirsiniz.<br/><br/><b>Sorun</b> - Numara, durum, öncelik, açıklama gibi destek kaydı ve hata bildirimine özgü alanlar bulunur. Bu kalıbı standart destek kayıtları ve hata bildirimleri modüllerine benzer modüller oluşturmak için kullanabilirsiniz.<br/><br/>Not: Modülü oluşturduktan sonra kalıp tarafından sağlanan alan etiketlerini düzenleyebilir ve modül görünümüne özel alanlar ekleyebilirsiniz.',
            'afterSave' => 'Yeni alanlar ekleyerek, var olan alanları düzenleyerek, modüller arasında ilişkiler kurarak ve görünümlerdeki alanları düzenleyerek bir modülü özelleştirebilirsiniz.<br/><br/>Kalıp alanlarını görüntülemek ve modüldeki özel alanları yönetmek için <b>Alanları görüntüle</b> üzerine tıklayın.<br/><br/>Modül ile diğer modüller arasında ilişkiler eklemek ya da düzenlemek için <b>İlişkileri görüntüle</b> üzerine tıklayın.<br/><br/>Modül görünümlerini düzenlemek için <b>Görünümleri görüntüle</b> üzerine tıklayın. Modülün ayrıntı, düzenleme ve liste görünümlerini uygulamada var olan diğer modüller gibi Studio aracını kullanarak düzenleyebilirsiniz.<br/><br/>Var olan modüllere benzer özelliklerde yeni bir modül oluşturmak için <b>Kopyala</b> üzerine tıklayın. Ardından yeni modülü özelleştirebilirsiniz.',
            'viewfields' => 'Modüldeki alanlar isteklerinize göre özelleştirilebilir.<br/><br/>Standart alanlar silinemez ancak Görünüm sayfalarından kaldırılabilir.<br/><br/>Var olan alanlara benzer özelliklerde alanlar eklemek için <b>Özellikler</b> formunda <b>Kopyala</b> üzerine tıklayabilirsiniz. Yeni özellikleri ekledikten sonra <b>Kaydet</b> üzerine tıklayın.<br/><br/>Özel modülün bulunduğu paketi yayınlamadan ya da kurmadan önce tüm standart ve özel alanların özelliklerini ayarlamış olmanız önerilir.',
            'viewrelationships' => 'Geçerli modül ile paketteki diğer modüller ya da uygulamada kurulu bulunan modüller arasında Çok - Çok ilişkisi kurulabilir.<br><br>Bir - Çok ve Bir - Bir ilişkileri kurmak için modüllere <b>İlişki</b> ve <b>Esnek ilişki</b> alanları ekleyin.',
            'viewlayouts' => '<b>Düzenleme görünümünde</b> veri girişi için kullanılacak alanları yönetebilirsiniz. <b>Ayrıntı görünümünde</b> hangi bilgilerin görüntüleneceğini yönetebilirsiniz. Bu iki görünümün aynı olması şart değildir.<br/><br/>Bir modül alt panosunda <b>Ekle</b> üzerine tıklandığında hızlı ekleme formu görüntülenir. Varsayılan olarak <b>Hızlı ekleme</b> formu görünümü ile <b>Düzenleme görünümü</b> aynıdır. Hızlı ekleme formunu düzenleme görünümünden farklı alanlar bulunacak şekilde özelleştirebilirsiniz.<br><br>Modül güvenliğini <b>Rol yönetimi</b> ile görüntü özelleştirmesini kullanarak sağlayabilirsiniz.<br><br>',
            'existingModule' => 'Bu modülü ekleyip özelleştirdikten sonra, ek modüller oluşturabilir ya da pakete dönerek paketi <b>Yayınlayabilir</b> ya da <b>Dağıtabilirsiniz</b>.<br><br>Ek modüller oluşturmak için, <b>Kopyala</b> üzerine tıklayarak var olan modül ile benzer özelliklerde yeni bir modül oluşturabilir ya da pakete geri dönerek <b>Yeni modül</b> üzerine tıklayabilirsiniz.<br><br>Bu modülün bulunduğu paketi <b>Yayınlamak</b> ya da <b>Dağıtmak</b> için pakete geri dönerek bu işlemleri yapabilirsiniz. En az bir modülü bulunan paketler yayınlanabilir ya da dağıtılabilir.',
            'labels' => 'Standart ve özel alanların etiketleri düzenlenebilir. Alan etiketlerinin değiştirilmesi alanlarda kayıtlı verileri etkilemez.',
        ),
        'listViewEditor' => array(
            'modify' => 'Sol tarafta üç sütun görüntülenir. "Varsayılan" sütununda liste görünümünde varsayılan olarak görüntülenen alanlar bulunur, "Kullanılabilir" sütununda özel liste görünümü oluşturmak için kullanıcının seçebileceği alanlar bulunur. "Gizli" sütununda şu anda kullanıcılar için devre dışı olan, ancak yönetici olarak kullanıcıların kullanabilmesi için Varsayılan ya da Kullanılabilir sütunlarına ekleyebileceğiniz alanlar bulunur.',
            'savebtn' => 'Tüm değişiklikleri kaydetmek ve etkinleştirmek için <b>Kaydet</b> üzerine tıklayın.',
            'Hidden' => 'Gizli alanlar liste görünümlerinde kullanıcılara görüntülenmez.',
            'Available' => 'Kullanılabilir alanlar ilk varsayılan olarak görüntülenmez ancak kullanıcılar tarafından etkinleştirilebilir.',
            'Default' => 'Varsayılan alanlar özel liste görünümü ayarları yapmamış kullanıcılara görüntülenir.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Sol tarafta iki sütün görüntülenir. "Varsayılan" sütununda arama görünümünde görüntülenecek alanlar bulunur. "Gizli" sütununda yönetici olarak görünüme ekleyebileceğiniz alanlar bulunur.',
            'savebtn' => 'Tüm değişiklikleri kaydedip etkinleştirmek için <b>Kaydedip dağıt</b> üzerine tıklayın.',
            'Hidden' => 'Gizli alanlar arama görünümünde görüntülenmez.',
            'Default' => 'Arama görünümünde varsayılan olarak görüntülenecek alanlar.'
        ),
        'layoutEditor' => array(
            'default' => 'Solda iki sütun görüntülenir. Sağdaki sütunda geçerli görünüm ya da görünüm ön izlemesi görüntülenir ve modül görünümü buradan değiştirilebilir. Soldaki sütunda araç kutusu bulunur ve görünümü düzenlemek için gerekli bileşen ve araçları içerir.<br/><br/>Görünüm bölgesinin adı geçerli görünüm ise, şu anda modül tarafından kullanılan görünümün bir kopyası üzerinde çalışıyorsunuz demektir.<br/><br/>Görünüm bölgesinin adı görünüm ön izlemesi ise, daha önce Kaydet düğmesine tıklanarak oluşturulmuş ve bu modülün kullanıcılarına görüntülenenden farklı olabilecek bir görünüm sürümü üzerinde çalışıyorsunuz demektir.',
            'saveBtn' => 'Bu düğmeye tıklandığında, görünüm kaydedilerek değişiklikler korunur. Bu modüle geri geldiğinizde bu kaydedilmiş görünümden başlarsınız. Bununla birlikte Kaydedip yayınla düğmesine tıklanmadan bu görünüm modül kullanıcılarına görüntülenmez.',
            'publishBtn' => 'Görünümü dağıtmak için bu düğmeye tıklayın. Böylece bu görünüm bu modülün kullanıcılarına anında görüntülenir.',
            'toolbox' => 'Araç kutusunda, kullanılabilecek alanlar, ek bileşenler ve çöp kutusu gibi görünümleri düzenlemek için kullanılan çeşitli araçlar bulunur. Bu araçlar sürüklenip bırakılarak görünüm düzenlenebilir.',
            'panels' => 'Bu modülün dağıtıldıktan sonra kullanıcılara nasıl görüntüleneceği burada görüntülenir.<br/><br/>Alanları, satırları ve panoları istediğiniz konuma sürükleyip bırakarak taşıyabilirsiniz. Görünüm bileşenlerini araç kutusu üzerindeki çöp kutusuna sürükleyip bırakarak silebilir ya da araç kutusundan görünüm alanında görüntülenmesini istediğiniz konuma sürükleyip bırakarak ekleyebilirsiniz.'
        ),
        'dropdownEditor' => array(
            'default' => 'Solda iki sütun görüntülenir. Sağdaki sütunda geçerli görünüm ya da görünüm ön izlemesi görüntülenir ve modül görünümü buradan değiştirilebilir. Soldaki sütunda araç kutusu bulunur ve görünümü düzenlemek için gerekli bileşen ve araçları içerir.<br/><br/>Görünüm bölgesinin adı geçerli görünüm ise, şu anda modül tarafından kullanılan görünümün bir kopyası üzerinde çalışıyorsunuz demektir.<br/><br/>Görünüm bölgesinin adı görünüm ön izlemesi ise, daha önce Kaydet düğmesine tıklanarak oluşturulmuş ve bu modülün kullanıcılarına görüntülenenden farklı olabilecek bir görünüm sürümü üzerinde çalışıyorsunuz demektir.',
            'dropdownaddbtn' => 'Bu düğmeye tıklanarak açılan listeye yeni bir öge eklenebilir.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Studio aracı ile bu kopya üzerinde yapılan özelleştirmeler paketlenip başka bir kopya üzerinde dağıtılabilir.<br><br>Öncelikle bir <b>Paket adı</b> yazın. Ayrıca paket için <b>Sorumlu</b> ve <b>Açıklama</b> bilgilerini de yazabilirsiniz.<br><br>Dışarı aktarmak istediğiniz, özelleştirilmiş modülleri seçin. Yalnızca özelleştirilmiş modüller seçilmek üzere görüntülenir.<br><br>Ardından <b>Dışa aktar</b> üzerine tıklayarak özelleştirmelerin bulunduğu .zip arşivi dosyasını oluşturabilirsiniz. Dışa aktarılan dosya başka bir sisteme <b>Modül yükleyici</b> kullanılarak yüklenebilir.',
            'exportCustomBtn' => 'Dışa aktarmak istediğiniz özelleştirmeleri bir .zip arşivi dosyasına kaydetmek için <b>Dışa aktar</b> üzerine tıklayın.',
            'name' => 'Paketin <b>Ad</b> bilgisi. Ad bilgisi paketin kurulmak üzere Studio aracına yüklenmesinden sonra modül yükleyicide görüntülenir.',
            'author' => 'Paketi oluşturan varlığın adı olan <b>Sorumlu</b> bilgisi. Sorumlu bir kişi ya da kuruluş olabilir.<br><br>Sorumlu bilgisi paketin kurulum için Studio aracına yüklenmesinden sonra modül yükleyicide görüntülenir.',
            'description' => 'Paketin <b>Açıklama</b> bilgisi. Açıklama bilgisi paketin kurulum için Studio aracına yüklenmesinden sonra modül yükleyicide görüntülenir.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Geliştirici araçları</b> bölümüne hoş geldiniz.<br/><br/>Bu bölümdeki araçları kullanarak, standart ve özelleştirilmiş modüller ile özel alanlar eklenip yönetilebilir.',
            'studioBtn' => 'Kurulmuş modülleri özelleştirmek için, alan düzenini değiştirmek, kullanılacak alanları seçmek ve özel veri alanları eklemek için <b>Studio</b> aracını kullanabilirsiniz.',
            'mbBtn' => 'Yeni modüller oluşturmak için <b>Modül oluşturucu</b> aracını kullanın.',
            'appBtn' => 'Uygulama kipinde, ana sayfada kaç tane TPS raporu görüntüleneceği gibi program özellikleri özelleştirilebilir',
            'backBtn' => 'Önceki adıma dön.',
            'studioHelp' => 'Kurulmuş modülleri özelleştirmek için <b>Studio</b> aracını kullanabilirsiniz.',
            'moduleBtn' => 'Bu modülü düzenlemek için tıklayın.',
            'moduleHelp' => 'Düzenlemek istediğiniz modül bileşenini seçin',
            'fieldsBtn' => 'Modül <b>Alanlarını</b> yöneterek kaydedilecek bilgileri düzenleyebilirsiniz.<br/><br/>Bu bölümden özel alanlar ekleyip düzenleyebilirsiniz.',
            'labelsBtn' => 'Özel etiketlerinizi kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'layoutsBtn' => 'Düzenleme, ayrıntı, liste ve arama görünümlerinin <b>Görünümünü</b> özelleştirin.',
            'subpanelBtn' => 'Bu modülün alt panolarında görüntülenecek bilgileri düzenleyebilirsiniz.',
            'layoutsHelp' => '<b>Düzenlenecek bir görünüm</b> seçin.<br/><br/>Veri girişi için kullanılacak veri alanlarının bulunduğu görünümü değiştirmek için <b>Düzenleme görünümü</b> üzerine tıklayın.<br/><br/>Düzenleme görünümünde alanlara yazılan verilerin görüntülendiği görünümünü düzenlemek için <b>Ayrıntı görünümü</b> üzerine tıklayın.<br/><br/>Varsayılan listedeki sütunları düzenlemek için, <b>Liste görünümü</b> üzerine tıklayın.<br/><br/>Temel ve gelişmiş arama formlarının görünümlerini düzenlemek için <b>Arama</b> üzerine tıklayın.',
            'subpanelHelp' => 'Düzenlenecek bir <b>Alt pano</b> seçin.',
            'searchHelp' => 'Düzenlenecek bir <b>Arama</b> görünümü seçin.',
            'newPackage' => 'Yeni bir paket eklemek için <b>Yeni paket</b> üzerine tıklayın.',
            'mbHelp' => '<b>Modül oluşturucuya hoş geldiniz.</b><br/><br/> Standart ve özelleştirilmiş nesnelere dayalı özel modüllerin bulunduğu paketler oluşturmak için <b>Modül oluşturucu</b> aracını kullanın.<br/><br/>Başlamak ve yeni bir paket oluşturmak için <b>Yeni paket</b> üzerine tıklayın ya da düzenlenecek bir paket seçin.<br/><br/>Bir <b>paket</b> bir projenin parçası olan özel modülleri gruplamak için kullanılır. Bir pakette birbiri ya da uygulama modülleri ile ilişkili bir ya da birkaç modül bulunabilir.<br/><br/>Örnek: Standart hesaplar modülü ile ilişkili yeni bir modül bulunduran bir paket oluşturmak isteyebilirsiniz. Ya da birbirleriyle ya da uygulamadaki diğer modüllerle ilişkili birkaç yeni modülün bulunduğu bir paket de oluşturmak isteyebilirsiniz.',
            'exportBtn' => 'Studio aracı üzerinde belirli modüller için yapılan özelleştirmelerin bulunduğu bir paket oluşturmak için <b>Özelleştirmeleri dışa aktar</b> üzerine tıklayın.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Açılan liste düzenleyici',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modül oluşturucu',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Açılan liste düzenleyici',
    'LBL_DEVELOPER_TOOLS' => 'Geliştirici araçları',
    'LBL_SUITEPORTAL' => 'SuiteCRM portal düzenleyici',
    'LBL_PACKAGE_LIST' => 'Paket listesi',
    'LBL_HOME' => 'Giriş',
    'LBL_NONE' => '-Yok-',
    'LBL_DEPLOYE_COMPLETE' => 'Dağıtım tamamlandı',
    'LBL_DEPLOY_FAILED' => 'Dağıtım sırasında bir sorun çıktı. Paketiniz düzgün kurulamamış olabilir',
    'LBL_AVAILABLE_SUBPANELS' => 'Kullanılabilecek alt panolar',
    'LBL_ADVANCED' => 'Gelişmiş',
    'LBL_ADVANCED_SEARCH' => 'Gelişmiş süzgeç',
    'LBL_BASIC' => 'Temel',
    'LBL_BASIC_SEARCH' => 'Hızlı süzgeç',
    'LBL_CURRENT_LAYOUT' => 'Görünüm',
    'LBL_CURRENCY' => 'Para birimi',
    'LBL_DASHLET' => 'SuiteCRM pano bileşeni',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM pano bileşeni liste görünümü',
    'LBL_POPUP' => 'Açılan pencere görünümü',
    'LBL_POPUPLISTVIEW' => 'Açılan pencere liste görünümü',
    'LBL_POPUPSEARCH' => 'Açılan pencere arama',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM pano bileşeni arama',
    'LBL_DETAILVIEW' => 'Ayrıntı görünümü',
    'LBL_DROP_HERE' => '[Buraya bırakın]',
    'LBL_EDIT' => 'Düzenle',
    'LBL_EDIT_LAYOUT' => 'Görünümü düzenle',
    'LBL_EDIT_FIELDS' => 'Alanları düzenle',
    'LBL_EDITVIEW' => 'Düzenleme görünümü',
    'LBL_FILLER' => '(doldurucu)',
    'LBL_FIELDS' => 'Alanlar',
    'LBL_FAILED_TO_SAVE' => 'Kaydedilemedi',
    'LBL_FAILED_PUBLISHED' => 'Yayınlanamadı',
    'LBL_HOMEPAGE_PREFIX' => 'Benim',
    'LBL_LAYOUT_PREVIEW' => 'Görünüm ön izlemesi',
    'LBL_LAYOUTS' => 'Görünümler',
    'LBL_LISTVIEW' => 'Liste görünümü',
    'LBL_MODULES' => 'Modüller',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Yeni paket',
    'LBL_NEW_PANEL' => 'Yeni pano',
    'LBL_NEW_ROW' => 'Yeni satır',
    'LBL_PACKAGE_DELETED' => 'Paket silindi',
    'LBL_PUBLISHING' => 'Yayınlanıyor...',
    'LBL_PUBLISHED' => 'Yayınlandı',
    'LBL_SELECT_FILE' => 'Dosyayı seç',
    'LBL_SUBPANELS' => 'Alt panolar',
    'LBL_SUBPANEL' => 'Alt pano',
    'LBL_SUBPANEL_TITLE' => 'Başlık: ',
    'LBL_SEARCH_FORMS' => 'Süzgeç',
    'LBL_SEARCH' => 'Arama',
    'LBL_SEARCH_BUTTON' => 'Arama',
    'LBL_FILTER' => 'Süzgeç',
    'LBL_TOOLBOX' => 'Araç kutusu',
    'LBL_QUICKCREATE' => 'Hızlı ekle',
    'LBL_EDIT_DROPDOWNS' => 'Bir genel açılan listeyi düzenle',
    'LBL_ADD_DROPDOWN' => 'Yeni bir genel açılan liste ekle',
    'LBL_BLANK' => '-boş-',
    'LBL_TAB_ORDER' => 'Sekme sıralaması',
    'LBL_TABDEF_TYPE' => 'Ekran türü',
    'LBL_TABDEF_TYPE_HELP' => 'Bu bölümün nasıl görüntüleneceğini seçin. Bu seçenek yalnızca bu görünüm için sekmeler etkinleştirilmiş ise etkili olur.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Sekme',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Pano',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Bu panonun görünüm içinde görüntülenmesi için pano olarak seçin. Bu panonun görünüm içinde ayrı bir sekmede görüntülenmesi için Sekme olarak seçin. Bir pano sekme olarak ayarlandığında, pano olarak ayarlanmış diğer panolar sekme içinde görüntülenir.<br/>Sekme olarak seçilmiş sonraki pano için yeni bir sekme başlatılır. İlk panonun altındaki bir pano sekme olarak ayarlanmış ise ilk pano sekme olmalıdır.',
    'LBL_TABDEF_COLLAPSE' => 'Daralt',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Bu seçenek etkinleştirildiğinde, bu panonun varsayılan durumu daraltılmış olarak ayarlanır.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Ad',
    'LBL_DROPDOWN_LANGUAGE' => 'Dil',
    'LBL_DROPDOWN_ITEMS' => 'Liste ögeleri',
    'LBL_DROPDOWN_ITEM_NAME' => 'Öge adı',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Görüntülenecek etiket',
    'LBL_SYNC_TO_DETAILVIEW' => 'Ayrıntı görünümü ile eşitle',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Bu seçenek etkinleştirildiğinde, bu düzenleme görünümü, ilgili ayrıntı görünümü ile eşitlenir. Düzenleme görünümündeki alanlar ve alan konumları<br>Düzenleme görünümünde kaydet ya da kaydedip dağıt üzerine tıklandığında otomatik olarak ayrıntı görünümü ile eşitlenir ve kaydedilir.<br>Bu durumda ayrıntı görünümü üzerinde değişiklik yapılamaz.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ayrıntı görünümü ilgili düzenleme görünümü ile eşitlenmiş.<br>Bu ayrıntı görünümündeki alanlar ve alan konumları düzenleme görünümündeki alan ve alan konumlarını yansıtır.<br>Ayrıntı görünümündeki değişiklikler bu bölümden kaydedilemez ya da dağıtılamaz. Değişiklikleri düzenleme görünümü üzerinde yapın ya da görünümler arasındaki eşitlemeyi kaldırın. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Düzenleme görünümünün kopyası',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Öge adı ve görüntülenecek etiket değerlerinin ikisinin de yazılması zorunludur. Boş bir öge, öge adı ve görüntülenecek etiket alanlarına herhangi bir şey yazmadan Ekle üzerine tıklayın.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Anahtar listede zaten var',
    'LBL_NO_SAVE_ACTION' => 'Bu görünüm için kayıt işlemi bulunamadı.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: belge biçimi düzgün değil',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modül',
    'LBL_LHS_MODULE' => 'Birincil modül',
    'LBL_CUSTOM_RELATIONSHIPS' => '* Studio üzerinde oluşturulmuş ilişki',
    'LBL_RELATIONSHIPS' => 'İlişkiler',
    'LBL_RELATIONSHIP_EDIT' => 'İlişkileri düzenle',
    'LBL_REL_NAME' => 'Ad',
    'LBL_REL_LABEL' => 'Etiket',
    'LBL_REL_TYPE' => 'Tür',
    'LBL_RHS_MODULE' => 'İlişkili modül',
    'LBL_NO_RELS' => 'Herhangi bir ilişki yok',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'İsteğe bağlı koşul',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Sütun',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Değer',
    'LBL_SUBPANEL_FROM' => 'Alt pano kaynağı',
    'LBL_RELATIONSHIP_ONLY' => 'Bu iki modül arasında önceden var olan görünür bir ilişki olduğundan, bu ilişki için görünür bir bileşen oluşturulmayacak.',
    'LBL_ONETOONE' => 'Tek - Tek',
    'LBL_ONETOMANY' => 'Tek - Çok',
    'LBL_MANYTOONE' => 'Çok - Tek',
    'LBL_MANYTOMANY' => 'Çok - Çok',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Düzenlenecek bir modül seçin.',
    'LBL_QUESTION_LAYOUT' => 'Düzenlenecek bir görünüm seçin.',
    'LBL_QUESTION_SUBPANEL' => 'Düzenlenecek bir alt pano seçin.',
    'LBL_QUESTION_SEARCH' => 'Düzenlenecek bir süzgeç görünümü seçin.',
    'LBL_QUESTION_MODULE' => 'Düzenlenecek bir modül bileşeni seçin.',
    'LBL_QUESTION_PACKAGE' => 'Düzenlenecek bir paket seçin ya da yeni bir paket oluşturun.',
    'LBL_QUESTION_EDITOR' => 'Bir araç seçin.',
    'LBL_QUESTION_DASHLET' => 'Düzenlenecek bir pano bileşeni görünümü seçin.',
    'LBL_QUESTION_POPUP' => 'Düzenlenecek bir açılan pencere görünümü seçin.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Ad',
    'LBL_LABELS' => 'Etiketler',
    'LBL_MASS_UPDATE' => 'Toplu güncelleme',
    'LBL_DEFAULT_VALUE' => 'Varsayılan değer',
    'LBL_REQUIRED' => 'Zorunlu',
    'LBL_DATA_TYPE' => 'Tür',
    'LBL_HCUSTOM' => 'ÖZEL',
    'LBL_HDEFAULT' => 'VARSAYILAN',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_CUSTOM_FIELDS' => '* Studio üzerinde oluşturulmuş alan',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Etiketleri düzenle',
    'LBL_SECTION_PACKAGES' => 'Paketler',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Modüller',
    'LBL_SECTION_DROPDOWNS' => 'Açılan listeler',
    'LBL_SECTION_PROPERTIES' => 'Özellikler',
    'LBL_SECTION_DROPDOWNED' => 'Açılan listeyi düzenle',
    'LBL_SECTION_HELP' => 'Yardım',
    'LBL_SECTION_MAIN' => 'Asıl',
    'LBL_SECTION_FIELDEDITOR' => 'Alanları düzenle',
    'LBL_SECTION_DEPLOY' => 'Dağıt',
    'LBL_SECTION_MODULE' => 'Modül',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Varsayılan',
    'LBL_HIDDEN' => 'Gizli',
    'LBL_AVAILABLE' => 'Kullanılabilir',
    'LBL_LISTVIEW_DESCRIPTION' => 'Aşağıda üç sütun görüntülenir. <b>Varsayılan</b> sütununda liste görünümünde varsayılan olarak görüntülenen alanlar bulunur, <b>Ek</b> sütununda kullanıcıların özel bir görünüm oluşturmak için seçebileceği alanlar bulunur. <b>Kullanılabilir</b> sütununda yönetici olarak kullanıcıların kullanabilmesi için varsayılan ya da ek sütunlarına ekleyebileceğiniz alanlar bulunur.',
    'LBL_LISTVIEW_EDIT' => 'Liste görünümü düzenleyici',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Ön izleme',
    'LBL_MB_RESTORE' => 'Geri yükle',
    'LBL_MB_DELETE' => 'Sil',
    'LBL_MB_DEFAULT_LAYOUT' => 'Varsayılan görünüm',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Ekle',
    'LBL_BTN_SAVE' => 'Kaydet',
    'LBL_BTN_SAVE_CHANGES' => 'Değişiklikleri kaydet',
    'LBL_BTN_DONT_SAVE' => 'Kaydetmeden çık',
    'LBL_BTN_CANCEL' => 'İptal',
    'LBL_BTN_CLOSE' => 'Kapat',
    'LBL_BTN_SAVEPUBLISH' => 'Kaydedip dağıt',
    'LBL_BTN_CLONE' => 'Kopyala',
    'LBL_BTN_ADDROWS' => 'Satırlar ekle',
    'LBL_BTN_ADDFIELD' => 'Alan ekle',
    'LBL_BTN_ADDDROPDOWN' => 'Açılan liste ekle',
    'LBL_BTN_SORT_ASCENDING' => 'Artan sıralama',
    'LBL_BTN_SORT_DESCENDING' => 'Azalan sıralama',
    'LBL_BTN_EDLABELS' => 'Etiketleri düzenle',
    'LBL_BTN_UNDO' => 'Geri al',
    'LBL_BTN_REDO' => 'Yinele',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Özel alan ekle',
    'LBL_BTN_EXPORT' => 'Özelleştirmeleri dışa aktar',
    'LBL_BTN_DUPLICATE' => 'Çift',
    'LBL_BTN_PUBLISH' => 'Yayınla',
    'LBL_BTN_DEPLOY' => 'Dağıt',
    'LBL_BTN_EXP' => 'Dışa aktar',
    'LBL_BTN_DELETE' => 'Sil',
    'LBL_BTN_VIEW_LAYOUTS' => 'Görünümleri görüntüle',
    'LBL_BTN_VIEW_FIELDS' => 'Alanları görüntüle',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'İlişkileri görüntüle',
    'LBL_BTN_ADD_RELATIONSHIP' => 'İlişki ekle',
    'LBL_BTN_RENAME_MODULE' => 'Modül adını değiştir',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Hata: Alan zaten var',
    'ERROR_INVALID_KEY_VALUE' => "Hata: Anahtar değeri geçersiz: [']",
    'ERROR_NO_HISTORY' => 'Herhangi bir geçmiş dosyası bulunamadı',
    'ERROR_MINIMUM_FIELDS' => 'Görünümde en az bir alan bulunmalıdır',
    'ERROR_GENERIC_TITLE' => 'Bir sorun çıktı',
    'ERROR_REQUIRED_FIELDS' => 'İlerlemek istediğinize emin misiniz? Aşağıdaki zorunlu alanlar görünümde bulunmuyor:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paket adı:',
    'LBL_MODULE_NAME' => 'Modül adı:',
    'LBL_AUTHOR' => 'Sorumlu:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_KEY' => 'Anahtar:',
    'LBL_ADD_README' => ' Beni oku',
    'LBL_LAST_MODIFIED' => 'Son değişiklik:',
    'LBL_NEW_MODULE' => 'Yeni modül',
    'LBL_LABEL' => 'Etiket:',
    'LBL_LABEL_TITLE' => 'Etiket',
    'LBL_WIDTH' => 'Genişlik',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Tür:',
    'LBL_NAV_TAB' => 'Gezinme sekmesi',
    'LBL_CREATE' => 'Ekle',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Görünüm',
    'LBL_HISTORY' => 'Geçmişi görüntüle',
    'LBL_RESTORE_DEFAULT' => 'Varsayılanları geri yükle',
    'LBL_ACTIVITIES' => 'İşlemler',
    'LBL_NEW' => 'Yeni',
    'LBL_TYPE_BASIC' => 'temel',
    'LBL_TYPE_COMPANY' => 'kuruluş',
    'LBL_TYPE_PERSON' => 'kişi',
    'LBL_TYPE_ISSUE' => 'sorun',
    'LBL_TYPE_SALE' => 'satış',
    'LBL_TYPE_FILE' => 'dosya',
    'LBL_RSUB' => 'Modülünüzde görüntülenecek alt pano',
    'LBL_MSUB' => 'Modülünüzün ilişkili modülde görüntülenmesi için sunulan alt pano',
    'LBL_MB_IMPORTABLE' => 'İçe aktarılıyor',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] silindi',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Özelleştirmeleri dışa aktar',
    'LBL_EC_NAME' => 'Paket adı:',
    'LBL_EC_AUTHOR' => 'Sorumlu:',
    'LBL_EC_DESCRIPTION' => 'Açıklama:',
    'LBL_EC_CHECKERROR' => 'Lütfen bir modül seçin.',
    'LBL_EC_CUSTOMFIELD' => 'özelleştirilmiş alanlar',
    'LBL_EC_CUSTOMLAYOUT' => 'özelleştirilmiş görünümler',
    'LBL_EC_NOCUSTOM' => 'Özelleştirilmiş bir modül yok.',
    'LBL_EC_EMPTYCUSTOM' => 'boş özelleştirmeleri var.',
    'LBL_EC_EXPORTBTN' => 'Dışa aktar',
    'LBL_MODULE_DEPLOYED' => 'Modül dağıtıldı.',
    'LBL_UNDEFINED' => 'tanımlanmamış',
    'LBL_EC_VIEWS' => 'özelleştirilmiş görünümler',
    'LBL_EC_SUITEFEEDS' => 'özelleştirilmiş akışlar',
    'LBL_EC_DASHLETS' => 'özelleştirilmiş pano bileşenleri',
    'LBL_EC_CSS' => 'özelleştirilmiş css biçemleri',
    'LBL_EC_TPLS' => 'özelleştirilmiş tpls tanımları',
    'LBL_EC_IMAGES' => 'özelleştirilmiş görseller',
    'LBL_EC_JS' => 'özelleştirilmiş JavaScript betikleri',
    'LBL_EC_QTIP' => 'özelleştirilmiş qtip tanımları',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Veri alınamadı',
    'LBL_AJAX_LOADING' => 'Yükleniyor...',
    'LBL_AJAX_DELETING' => 'Siliniyor...',
    'LBL_AJAX_BUILDPROGRESS' => 'Oluşturma işlemi sürüyor...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Dağıtma işlemi sürüyor...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Sonuç',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Bu işlem tamamlandı',
    'LBL_AJAX_LOADING_TITLE' => 'İşlem sürüyor...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Lütfen yüklenirken bekleyin...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Bu paketi silmek istediğinize emin misiniz? Bu paket ile ilişkili tüm dosyalar kalıcı olarak silinecek.',
    'LBL_JS_REMOVE_MODULE' => 'Bu modülü silmek istediğinize emin misiniz? Bu modül ile ilişkili tüm dosyalar kalıcı olarak silinecek.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Bu modül yeniden dağıtılırsa Studio içinde yaptığınız tüm özelleştirmelerin üzerine yazılır. İlerlemek istediğinize emin misiniz?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Paket dağıtılıyor',
    'LBL_JS_VALIDATE_NAME' => 'Ad - Alfa-sayısal karakterlerden oluşmalı, bir harf karakteri ile başlamalı ve içinde boşluk karakteri bulunmamalıdır.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Aynı adlı bir paket zaten var',
    'LBL_JS_VALIDATE_KEY' => 'Anahtar - Alfa-sayısal karakterlerden oluşmalı, bir harf karakteri ile başlamalı ve içinde boşluk karakteri bulunmamalıdır.',
    'LBL_JS_VALIDATE_LABEL' => 'Bu modülün görüntülenecek adı olarak kullanılacak bir etiket yazın',
    'LBL_JS_VALIDATE_TYPE' => 'Yukarıdaki listeden oluşturmak istediğiniz modül türünü seçin',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiket - Lütfen alt pano üzerinde görüntülenecek bir etiket ekleyin',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Bu özel alan silindiğinde özel alandaki ve veri tabanındaki özel alan ile ilgili tüm veriler silinir. Özel alan modül görünümlerinde görüntülenmez.\\n\\nİlerlemek istiyor musunuz?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'İlişkiyi silmek istediğinize emin misiniz?',
    'LBL_CONFIRM_DONT_SAVE' => 'Son kaydetmeden sonra bazı değişiklikler yapılmış. Bu değişiklikleri kaydetmek ister misiniz?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Değişiklikler kaydedilsin mi?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Veri budanabilir ve bu işlem geri alınamaz. İlerlemek istediğinize emin misiniz?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Alana yazılacak verilere uygun veri türünü seçin.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Evet</b>: Alan bir içe aktarma işlemine katılacak.<br><b>Hayır</b>: Alan bir içe aktarma işlemine katılmayacak.<br><b>Zorunlu</b> b>: Herhangi bir içe aktarma işleminde alanın bir değeri olmalıdır.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Piksel cinsinden genişlik değerini yazın.<br> Yüklenen görsel bu genişliğe ölçeklenir.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Piksel cinsinden yükseklik değerini yazın.<br> Yüklenen görsel bu yüksekliğe ölçeklenir.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Etkin</b>: Alan, çift kayıtları birleştir özelliğinde görüntülenir, ancak çift kayıtları bul özelliğindeki süzgeç koşulları için kullanılamaz.<br><b>Devre dışı</b>: Alan çift kayıtları birleştir özelliğinde görüntülenmez ve çift kayıtları birleştir özelliğindeki süzgeç koşulları için kullanılamaz.',

//Revert Module labels
    'LBL_RESET' => 'Sıfırla',
    'LBL_RESET_MODULE' => 'Modülü sıfırla',
    'LBL_REMOVE_CUSTOM' => 'Özelleştirmeleri kaldır',
    'LBL_CLEAR_RELATIONSHIPS' => 'İlişkileri temizle',
    'LBL_RESET_LABELS' => 'Etiketleri sıfırla',
    'LBL_RESET_LAYOUTS' => 'Görünümleri sıfırla',
    'LBL_REMOVE_FIELDS' => 'Özel alanları kaldır',
    'LBL_CLEAR_EXTENSIONS' => 'Eklentileri temizle',
    'LBL_HISTORY_TIMESTAMP' => 'Zaman damgası',
    'LBL_HISTORY_TITLE' => ' geçmiş',

    'fieldTypes' => array(
        'varchar' => 'Metin alanı',
        'int' => 'Tamsayı',
        'float' => 'Ondalık',
        'bool' => 'İşaret kutusu',
        'enum' => 'Açılan liste',
        'dynamicenum' => 'Devingen açılan liste',
        'multienum' => 'Çoklu seçim',
        'date' => 'Tarih',
        'phone' => 'Telefon',
        'currency' => 'Para birimi',
        'html' => 'Salt okunur HTML (kullanımdan kaldırıldı, TextBlock kullanın)',
        'radioenum' => 'Radyo',
        'relate' => 'İlişkilendir',
        'address' => 'Adres',
        'text' => 'Metin alanı',
        'textblock' => 'MetinBloğu',
        'url' => 'Adres',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Tarih saat',
        'decimal' => 'Ondalık',
        'image' => 'Görsel',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Sık kullanılan etiketler",
        "all" => "Tüm etiketler",
    ),

    'parent' => 'Esnek ilişki',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Bu ögeyi açılan listeden kaldırılmak üzere seçiyorsunuz. Bu değer artık bulunduğu açılan liste alanlarında görüntülenmeyecek ve değer açılan listelerden seçilemeyecek. İlerlemek istediğinize emin misiniz?",

    'LBL_ALL_MODULES' => 'Tüm modüller',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ilişkili {1} kod)',
);
