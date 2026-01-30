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
    'LBL_LOADING' => 'Yüklənir' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Tənzimləmələri gizlət' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Paket üçün <b>Ad</b> təqdim edin. Daxil etdiyiniz ad alfasayısal olmalı və boşluq olmamalıdır. (Məsələn: HR_Management)<br/><br/> Siz paket üçün <b>Müəllif</b> və <b>Təsvir</b> məlumatlarını təqdim edə bilərsiniz. <br/><br/>Paketi yaratmaq üçün <b>Saxla</b> üzərinə klikləyin.',
            'modify' => '<b>Paket</b> üçün xassələr və mümkün tədbirlər burada görünür. <br><br>Paketin <b>Adını</b>, <b>Müəllifini</b> və <b>Açıqlamasını</b> redaktə edə bilərsiniz. Bundan əlavə, siz paketdəki bütün modullara baxa və fərdiləşdirə bilərsiniz.<br><br>Paketə modul əlavə etmək üçün <b>Yeni modul</b> üzərinə klikləyin.<br><br>Əgər varsa paketdə ən azı bir modul. Siz paket daxilində edilən fərdiləşdirmələri <b>Nəşr edə</b>, <b>Paylaşa</b> və <b>İxrac</b> edə bilərsiniz.',
            'name' => 'Bu, cari paketin <b>Adı</b>dır. <br/><br/>Daxil etdiyiniz ad alfasayısal olmalı, hərflə başlamalı və boşluq olmamalıdır. (Məsələn: HR_Management)',
            'author' => 'Bu, quraşdırma zamanı paketi yaradan qurumun adı kimi göstərilən <b>Müəllif</b>dir.<br><br>Müəllif fərdi və ya şirkət ola bilər.',
            'description' => 'Bu quraşdırma zamanı göstərilən paketin <b>Təsviri</b>dir.',
            'publishbtn' => 'Bütün daxil edilmiş məlumatları saxlamaq və paketin quraşdırıla bilən versiyası olan .zip faylı yaratmaq üçün <b>Dərc et</b> üzərinə klikləyin.<br><br>Yükləmək üçün <b>Modul Yükləyicisi</b> istifadə edərək .zip faylını açın və paketi quraşdırın.',
            'deploybtn' => 'Bütün daxil edilmiş məlumatları saxlamaq və paketi, o cümlədən bütün modulları cari nümunədə quraşdırmaq üçün <b>Yerləşdirin</b> üzərinə klikləyin.',
            'duplicatebtn' => 'Paketin məzmununu yeni paketə köçürmək və yeni paketi göstərmək üçün <b>Dublikat</b> üzərinə klikləyin. <br/><br/>Yeni paket üçün yenisini yaratmaq üçün istifadə edilən paketin adının sonuna nömrə əlavə edilməklə avtomatik olaraq yeni ad yaradılacaq. Siz yeni <b>Ad</b> daxil edib <b>Saxla</b> klikləməklə yeni paketin adını dəyişə bilərsiniz.',
            'exportbtn' => 'Paketdə edilən fərdiləşdirmələri ehtiva edən .zip faylı yaratmaq üçün <b>İxrac</b> üzərinə klikləyin.<br><br> Yaradılan fayl paketin quraşdırıla bilən versiyası deyil.<br><br>.zip faylını idxal etmək və paketin, o cümlədən fərdiləşdirmələrin Modul Qurucusunda görünməsi üçün <b>Modul Yükləyicisi</b> istifadə edin.',
            'deletebtn' => 'Bu paketi və bu paketlə əlaqəli bütün faylları silmək üçün <b>Sil</b> üzərinə klikləyin.',
            'savebtn' => 'Paketlə bağlı bütün daxil edilmiş məlumatları saxlamaq üçün <b>Saxla</b> üzərinə klikləyin.',
            'existing_module' => 'Xassələri redaktə etmək və modulla əlaqəli sahələri, əlaqələri və planları fərdiləşdirmək üçün <b>Modul</b> ikonasına klikləyin.',
            'new_module' => 'Bu paket üçün yeni modul yaratmaq üçün <b>Yeni Modul</b> üzərinə klikləyin.',
            'key' => 'Bu 5 hərfli, alfasayısal <b>Açar</b> cari paketdəki bütün modullar üçün bütün kataloqlar, sinif adları və verilənlər bazası cədvəllərinə prefiks qoymaq üçün istifadə olunacaq.<br><br> Cədvəl adının unikallığına nail olmaq üçün açardan istifadə olunur.',
            'readme' => 'Bu paket üçün <b>Readme</b> mətnini əlavə etmək üçün klikləyin.<br><br>Raedme quraşdırma zamanı əlçatan olacaq.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Modul üçün <b>Ad</b> təqdim edin. Təqdim etdiyiniz <b>Etiket</b> naviqasiya tabında görünəcək. <br/><br/><b>Naviqasiya Nişanı</b> qeyd qutusunu qeyd etməklə modul üçün naviqasiya tabını göstərməyi seçin.<br/><br/>Sonra yaratmaq istədiyiniz modul növünü seçin. <br/><br/>Şablon növünü seçin. Hər bir şablonda modulunuz üçün əsas kimi istifadə etmək üçün xüsusi sahələr dəsti, həmçinin əvvəlcədən müəyyən edilmiş planlar var. <br/><br/>Modulu yaratmaq üçün <b>Saxla</b> üzərinə klikləyin.',
            'modify' => 'Siz modulun xassələrini dəyişə və ya modulla əlaqəli <b>Sahələr</b>, <b>Əlaqələr</b> və <b>Düzümləri</b> fərdiləşdirə bilərsiniz.',
            'importable' => '<b>İdxal edilə bilən</b> qutusunun yoxlanılması bu modulun idxalına imkan verəcək.<br><br>İdxal köməkçisinə keçid modulun Qısayollar panelində görünəcək. İdxal köməkçisi məlumatların xarici mənbələrdən xüsusi modula idxalını asanlaşdırır.',
            'team_security' => '<b>Komanda Təhlükəsizliyi</b> qeyd qutusunun yoxlanılması bu modul üçün komanda təhlükəsizliyini aktivləşdirəcək. <br/><br/>Əgər komanda təhlükəsizliyi aktivləşdirilibsə, Komanda seçimi sahəsi moduldakı qeydlərdə görünəcək ',
            'reportable' => 'Bu qutunun yoxlanılması bu modulun ona qarşı hesabatların olmasına imkan verəcək.',
            'assignable' => 'Bu qutunun işarələnməsi bu moduldakı qeydin seçilmiş istifadəçiyə təyin edilməsinə imkan verəcək.',
            'has_tab' => '<b>Naviqasiya Tabının</b> yoxlanılması modul üçün naviqasiya tabını təmin edəcək.',
            'acl' => 'Bu qutunun yoxlanılması Sahə Səviyyəsi Təhlükəsizliyi daxil olmaqla, bu modulda Giriş İdarəetmələrini aktivləşdirəcək.',
            'studio' => 'Bu qutunun yoxlanılması administratorlara bu modulu Studiya daxilində fərdiləşdirməyə imkan verəcək.',
            'audit' => 'Bu qutunun yoxlanılması bu modul üçün Auditi aktivləşdirəcək. Müəyyən sahələrə edilən dəyişikliklər qeyd olunacaq ki, administratorlar dəyişiklik tarixçəsini nəzərdən keçirə bilsinlər.',
            'viewfieldsbtn' => 'Modulla əlaqəli sahələrə baxmaq və xüsusi sahələr yaratmaq və redaktə etmək üçün <b>Sahələrə Baxın</b> üzərinə klikləyin.',
            'viewrelsbtn' => 'Bu modulla əlaqəli əlaqələrə baxmaq və yeni əlaqələr yaratmaq üçün <b>Əlaqələrə Baxın</b> klikləyin.',
            'viewlayoutsbtn' => 'Modul üçün tərtibatlara baxmaq və düzənlər daxilində sahənin düzülməsini fərdiləşdirmək üçün <b>Tərtibatlara Baxın</b> üzərinə klikləyin.',
            'duplicatebtn' => 'Modulun xüsusiyyətlərini yeni modula köçürmək və yeni modulu göstərmək üçün <b>Dublikat</b> üzərinə klikləyin. <br/><br/>Yeni modul yaratmaq üçün istifadə olunan modulun adının sonuna nömrə əlavə edilməklə avtomatik olaraq yeni ad yaradılacaq.',
            'deletebtn' => 'Bu modulu silmək üçün <b>Sil</b> üzərinə klikləyin.',
            'name' => 'Bu, cari modulun <b>Adı</b>dır.<br/><br/>Ad alfasayısal olmalı və hərflə başlamalı və boşluq olmamalıdır. (Məsələn: HR_Management)',
            'label' => 'Bu, modul üçün naviqasiya tabında görünəcək <b>Etiket</b>dir.',
            'savebtn' => 'Modulla bağlı bütün daxil edilmiş məlumatları saxlamaq üçün <b>Saxla</b> üzərinə klikləyin.',
            'type_basic' => '<b>Əsas</b> şablon növü Ad, Təyin edilmiş, Komanda, Yaradılma tarixi və Təsvir sahələri kimi əsas sahələri təmin edir.',
            'type_company' => '<b>Şirkət</b> şablon növü Şirkət Adı, Sənaye və Faktura Ünvanı kimi təşkilata xas sahələri təmin edir.<br/><br/>Standart Hesablar moduluna oxşar modullar yaratmaq üçün bu şablondan istifadə edin.',
            'type_issue' => '<b>Problem</b> şablon növü Nömrə, Status, Prioritet və Təsvir kimi iş və baq-xüsusi sahələri təmin edir<br/><br/>Standart dəstək və debug modullarına oxşar modullar əlavə etmək üçün bu nümunədən istifadə edə bilərsiniz.
',
            'type_person' => '<b>Şəxs</b> şablon növü Xitab, Başlıq, Ad, Ünvan və Telefon Nömrəsi kimi fərdi spesifik sahələr təqdim edir.<br/><br/>Kontaktlar və Rəhbərlər modullarına oxşar modullar yaratmaq üçün bu şablondan istifadə edin.',
            'type_sale' => '<b>Satış</b> şablon növü Aparıcı Mənbə, Mərhələ, Məbləğ və Ehtimal kimi xüsusi imkan sahələri təmin edir. <br/><br/>Standart İmkanlar moduluna bənzər modullar yaratmaq üçün bu şablondan istifadə edin.',
            'type_file' => '<b>Fayl</b> şablonu Fayl Adı, Sənəd növü və Yayım Tarixi kimi Sənədə xüsusi sahələri təqdim edir.<br><br>Standart Sənədlər moduluna oxşar modullar yaratmaq üçün bu şablondan istifadə edin.',

        ),
        'dropdowns' => array(
            'default' => 'Tətbiq üçün bütün <b>Açılan menyular</b> burada verilmişdir.<br><br>Açılan menyular istənilən modulda açılan sahələr üçün istifadə edilə bilər.<br><br>Mövcud açılan menyuda dəyişiklik etmək üçün, açılan ad üzərinə klikləyin.<br><br>Yeni açılan menyu yaratmaq üçün <b>Açılan menyu əlavə et</b> üzərinə klikləyin.',
            'editdropdown' => 'Açılan siyahılar istənilən modulda standart və ya fərdi açılan sahələr üçün istifadə oluna bilər.<br><br>Açılan siyahı üçün <b>Ad</b> təqdim edin.<br><br>Əgər hər hansı dil paketi quraşdırılıbsa, proqramda siyahı elementləri üçün istifadə etmək üçün <b>Dil</b> seçə bilərsiniz.<br><br><b>Element Adı</b> sahəsində, açılan siyahıda seçim üçün ad daxil edin. Bu ad istifadəçilərə görünən açılan siyahıda görünməyəcək.<br><br><b>Etiketi göstərin</b> sahəsində istifadəçilərə görünəcək etiket təqdim edin.<br><br> Elementin adını və ekran etiketini təqdim etdikdən sonra elementi açılan siyahıya əlavə etmək üçün <b>Əlavə et</b> üzərinə klikləyin.<br><br>Siyahıdakı elementləri yenidən sıralamaq üçün elementləri istədiyiniz mövqelərə sürükləyin və buraxın. <br><br>Elementin ekran etiketini redaktə etmək üçün <b>Redaktə et ikonasına</b> klikləyin və yeni etiket daxil edin. Açılan siyahıdan elementi silmək üçün <b>Sil piktoqramına</b> klikləyin.<br><br>Ekran etiketinə edilmiş dəyişikliyi geri qaytarmaq üçün <b>Geri Al</b> üzərinə klikləyin. Geri qaytarılmış dəyişikliyi yenidən etmək üçün <b>Yenidən et</b> üzərinə klikləyin.<br><br>Açılan siyahını saxlamaq üçün <b>Saxla</b> üzərinə klikləyin.',

        ),
        'subPanelEditor' => array(
            'modify' => '<b>Alt panel</b>də göstərilə bilən bütün sahələr burada görünür.<br><br><b>Defolt</b> sütununda Alt paneldə göstərilən sahələr var.<br/ ><br/><b>Gizli</b> sütununda Defolt sütununa əlavə edilə bilən sahələr var.'
        ,
            'savebtn' => 'Etdiyiniz dəyişiklikləri saxlamaq və onları modul daxilində aktiv etmək üçün <b>Saxla və Yerləşdir</b> üzərinə klikləyin.',
            'historyBtn' => 'Tarixçədən əvvəllər saxlanmış tərtibata baxmaq və bərpa etmək üçün <b>Tarixə Baxın</b> üzərinə klikləyin.',
            'historyDefault' => 'Tərtibatı orijinal düzəninə qaytarmaq üçün <b>Defoltu bərpa et</b> üzərinə klikləyin.',
            'Hidden' => '<b>Gizli</b> sahələr alt paneldə görünmür.',
            'Default' => '<b>Defolt</b> sahələr alt paneldə görünür.',

        ),
        'listViewEditor' => array(
            'modify' => '<b>Siyahı Görünüşü</b>-də göstərilə bilən bütün sahələr burada görünür.<br><br><b>Defolt</b> sütununda defolt olaraq Siyahı Görünüşündə göstərilən sahələr var.< br/><br/><b>Mövcud</b> sütununda istifadəçinin xüsusi Siyahı Görünüşü yaratmaq üçün Axtarışda seçə biləcəyi sahələr var. <br/><br/><b>Gizli</b> sütunu Defolt və ya Mövcud sütuna əlavə edilə bilən sahələrdən ibarətdir.'
        ,
            'savebtn' => 'Etdiyiniz dəyişiklikləri saxlamaq və onları modul daxilində aktiv etmək üçün <b>Saxla və Yerləşdir</b> üzərinə klikləyin.',
            'historyBtn' => 'Tarixçədən əvvəllər saxlanmış tərtibata baxmaq və bərpa etmək üçün <b>Tarixə Baxın</b> üzərinə klikləyin.<br><br><b>Görünüş Tarixçəsi</b> daxilində <b>bərpa et</b> əvvəllər saxlanmış düzənlərdə sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'historyDefault' => 'Tərtibatı orijinal düzəninə qaytarmaq üçün <b>Defoltu bərpa et</b> üzərinə klikləyin.<br><br><b>Defoltu bərpa et</b> yalnız orijinal tərtibat daxilində sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'Hidden' => '<b>Gizli</b> sahələr hazırda istifadəçilər üçün Siyahı Görünüşlərində görmək üçün əlçatan deyil.',
            'Available' => '<b>Mövcud</b> sahələr defolt olaraq göstərilmir, lakin istifadəçilər tərəfindən Siyahı Görünüşlərinə əlavə edilə bilər.',
            'Default' => '<b>Defolt</b> sahələr istifadəçilər tərəfindən fərdiləşdirilməyən Siyahı Görünüşlərində görünür.'
        ),
        'popupListViewEditor' => array(
            'modify' => '<b>Siyahı Görünüşü</b>-də göstərilə bilən bütün sahələr burada görünür.<br><br><b>Defolt</b> sütununda defolt olaraq Siyahı Görünüşüdə göstərilən sahələr var.< br/><br/><b>Gizli</b> sütununda Defolt və ya Mövcud sütuna əlavə edilə bilən sahələr var.'
        ,
            'savebtn' => 'Etdiyiniz dəyişiklikləri saxlamaq və onları modul daxilində aktiv etmək üçün <b>Saxla və Yerləşdir</b> üzərinə klikləyin.',
            'historyBtn' => 'Tarixçədən əvvəllər saxlanmış tərtibata baxmaq və bərpa etmək üçün <b>Tarixə Baxın</b> üzərinə klikləyin.<br><br><b>Görünüş Tarixçəsi</b> daxilində <b>bərpa et</b> əvvəllər saxlanmış düzənlərdə sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'historyDefault' => 'Tərtibatı orijinal düzəninə qaytarmaq üçün <b>Defoltu bərpa et</b> üzərinə klikləyin.<br><br><b>Defoltu bərpa et</b> yalnız orijinal tərtibat daxilində sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'Hidden' => '<b>Gizli</b> sahələr hazırda istifadəçilər üçün Siyahı Görünüşlərində görmək üçün əlçatan deyil.',
            'Default' => '<b>Defolt</b> sahələr istifadəçilər tərəfindən fərdiləşdirilməyən Siyahı Görünüşlərində görünür.'
        ),
        'searchViewEditor' => array(
            'modify' => '<b>Filtr</b> formasında göstərilə bilən bütün sahələr burada görünür.<br><br><b>Defolt</b> sütununda Axtarış formasında göstəriləcək sahələr var. <br/><br/><b>Gizli</b> sütununda admin olaraq Axtarış formasına əlavə edə biləcəyiniz sahələr var.'
        ,
            'savebtn' => '<b>Saxla və Yerləşdir</b> klikləməklə bütün dəyişiklikləri yadda saxlayacaq və onları aktiv edəcək',
            'Hidden' => '<b>Gizli</b> sahələr axtarışda görünmür.',
            'historyBtn' => 'Tarixçədən əvvəllər saxlanmış tərtibata baxmaq və bərpa etmək üçün <b>Tarixə Baxın</b> üzərinə klikləyin.<br><br><b>Görünüş Tarixçəsi</b> daxilində <b>bərpa et</b> əvvəllər saxlanmış düzənlərdə sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'historyDefault' => 'Tərtibatı orijinal düzəninə qaytarmaq üçün <b>Defoltu bərpa et</b> üzərinə klikləyin.<br><br><b>Defoltu bərpa et</b> yalnız orijinal tərtibat daxilində sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'Default' => '<b>Defolt</b> sahələr axtarışda görünür.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>Tərtibat</b> sahəsi hazırda <b>Detal görünüşü</b> daxilində nümayiş etdirilən sahələri ehtiva edir.<br/><br/><b>Alətlər qutusu</b> <b>Zibil qutusunu</b> və tərtibata əlavə edilə bilən sahələr və düzən elementlərini ehtiva edir.<br><br>Elementləri və sahələri <b>Alətlər qutusu</b> ilə <b>Tərtibat</b> arasında və düzənliyin özündə sürükləyib buraxaraq düzəndə dəyişikliklər edin.<br><br>Sahəni düzəndən silmək üçün sahəni <b>Zibil qutusuna</b> dartın. Sahə tərtibata əlavə etmək üçün Alətlər qutusunda mövcud olacaq.',
            'defaultquickcreate' => '<b>Tərtibat</b> sahəsi hazırda <b>Tez yarat</b> formasında göstərilən sahələri ehtiva edir.<br><br>QuickCreate forması Yarat düyməsi kliklədikdə modulun alt panellərində görünür.<br/><br/><b>Alətlər qutusu</b> <b>Zibil qutusunu</b> və tərtibata əlavə edilə bilən sahələr və düzən elementlərini ehtiva edir.<br><br>Elementləri və sahələri <b>Alətlər qutusu</b> ilə <b>Tərtibat</b> arasında və düzənliyin özündə sürükləyib buraxaraq düzəndə dəyişikliklər edin.<br><br>Sahəni düzəndən silmək üçün sahəni <b>Zibil qutusuna</b> dartın. Sahə tərtibata əlavə etmək üçün Alətlər qutusunda mövcud olacaq.',
            //this default will be used for edit view
            'default' => '<b>Tərtibat</b> sahəsi hazırda <b>Redaktə Görünüşü</b> daxilində göstərilən sahələri ehtiva edir..<br/><br/><b>Alətlər qutusu</b> <b>Zibil qutusunu</b> və tərtibata əlavə edilə bilən sahələr və düzən elementlərini ehtiva edir.<br><br>Elementləri və sahələri <b>Alətlər qutusu</b> ilə <b>Tərtibat</b> arasında və düzənliyin özündə sürükləyib buraxaraq düzəndə dəyişikliklər edin.<br><br>Sahəni düzəndən silmək üçün sahəni <b>Zibil qutusuna</b> dartın. Sahə tərtibata əlavə etmək üçün Alətlər qutusunda mövcud olacaq.',
            'saveBtn' => 'Tərtibatı sonuncu dəfə saxladığınız vaxtdan bəri ona etdiyiniz dəyişiklikləri qorumaq üçün <b>Saxla</b> üzərinə klikləyin.<br><br>Siz yadda saxladığınız dəyişiklikləri yerləşdirməyincə dəyişikliklər modulda göstərilməyəcək.',
            'historyBtn' => 'Tarixçədən əvvəllər saxlanmış tərtibata baxmaq və bərpa etmək üçün <b>Tarixə Baxın</b> üzərinə klikləyin.<br><br><b>Görünüş Tarixçəsi</b> daxilində <b>bərpa et</b> əvvəllər saxlanmış düzənlərdə sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'historyDefault' => 'Tərtibatı orijinal düzəninə qaytarmaq üçün <b>Defoltu bərpa et</b> üzərinə klikləyin.<br><br><b>Defoltu bərpa et</b> yalnız orijinal tərtibat daxilində sahənin yerləşdirilməsini bərpa edir. Sahə etiketlərini dəyişdirmək üçün hər bir sahənin yanındakı Redaktə et işarəsinə klikləyin.',
            'publishBtn' => 'Tərtibatı sonuncu dəfə saxladığınız vaxtdan bəri ona etdiyiniz bütün dəyişiklikləri saxlamaq və modulda dəyişiklikləri aktiv etmək üçün <b>Saxla və Yerləşdir</b> üzərinə klikləyin.<br><br>Tərtibat dərhal modulda göstəriləcək.',
            'toolbox' => '<b>Alətlər qutusuna</b> <b>Zibil qutusu</b>, əlavə tərtibat elementləri və tərtibata əlavə etmək üçün mövcud sahələr dəsti var.<br/><br/>Alətlər qutusundakı düzən elementləri və sahələri sürüklənərək tərtibata, tərtibat elementləri və sahələri isə tərtibatdan Alətlər qutusuna sürüklənərək salına bilər.<br><br>Düzəliş elementləri <b>Panellər</b> və <b>Sətirlər</b>dir. Plana yeni cərgə və ya yeni panel əlavə etmək sahələr üçün tərtibatda əlavə yerləri təmin edir.<br/><br/>İki sahənin yerlərini dəyişdirmək üçün Alətlər qutusunda və ya tərtibatda hər hansı bir sahəni qeyd edilmiş sahə mövqeyinə sürükləyib buraxın.<br/><br/><b>Doldurucu</b> sahəsi yerləşdirildiyi planda boş yer yaradır.',
            'panels' => '<b>Tərtibat</b> sahəsi tərtibata edilən dəyişikliklərin tətbiqi zamanı tərtibatın modul daxilində necə görünəcəyinə dair görüntü təqdim edir.<br/><br/>Sahələri, sətirləri və panelləri istədiyiniz yerə sürükləyib yerləşdirə bilərsiniz.<br/><br/>Alətlər qutusunda <b>Zibil qutusuna</b> sürükləyib atmaqla elementləri silin və ya yeni elementlər və sahələr əlavə edin, onları <b>Alətlər qutusundan</b>dartıb tərtibatda istədiyiniz yerə yerləşdirin.',
            'delete' => 'İstənilən elementi tərtibatdan silmək üçün bura sürükləyib buraxın',
            'property' => 'Bu sahə üçün göstərilən etiketi redaktə edin. <br/><b>Tab sırası</b> tab düyməsinin sahələr arasında hansı ardıcıllıqla keçidinə nəzarət edir.',
        ),
        'fieldsEditor' => array(
            'default' => 'Modul üçün mövcud olan <b>Sahələr</b> burada Sahənin Adı ilə qeyd olunur.<br><br>Modul üçün yaradılmış xüsusi sahələr standart olaraq modul üçün mövcud olan sahələrin üstündə görünür.<br><br>Sahəni redaktə etmək üçün <b>Sahənin Adı</b> üzərinə klikləyin.<br/><br/>Yeni sahə yaratmaq üçün <b>Sahə əlavə et</b> klikləyin.',
            'mbDefault' => 'Modul üçün mövcud olan <b>Sahələr</b> burada Sahənin Adı ilə qeyd olunur.<br><br>Sahənin xassələrini konfiqurasiya etmək üçün Sahənin Adı üzərinə klikləyin.<br><br>Yeni sahə yaratmaq üçün <b>Sahə əlavə et</b> klikləyin. Etiket yeni sahənin digər xassələri ilə birlikdə yaradıldıqdan sonra Sahənin Adı üzərinə klikləməklə redaktə edilə bilər.<br><br>Modul yerləşdirildikdən sonra Modul qurucusunda yaradılmış yeni sahələr Studiyada yerləşdirilən modulda standart sahələr kimi qəbul edilir.',
            'addField' => 'Yeni sahə üçün <b>Məlumat Növü</b> seçin. Seçdiyiniz növ sahəyə hansı simvolların daxil edilə biləcəyini müəyyənləşdirir. Məsələn, tam ədəd məlumat növü olan sahələrə yalnız tam ədədlər daxil edilə bilər.<br><br> Sahə üçün <b>Ad</b> təqdim edin. Ad hərf-rəqəm olmalıdır və heç bir boşluq olmamalıdır. Alt xətt də keçərlidir.<br><br> <b>Ekran Etiketi</b> modul tərtibatlarındakı sahələr üçün görünəcək etiketdir. <b>Sistem Etiketi</b> koddakı sahəyə istinad etmək üçün istifadə olunur.<br><br> Sahə üçün seçilmiş məlumat növündən asılı olaraq, sahə üçün aşağıdakı xüsusiyyətlərdən bəziləri və ya hamısı təyin edilə bilər:<br><br> <b>Yardım Mətni</b> istifadəçi sahənin üzərindən keçərkən müvəqqəti olaraq görünür və istifadəçiyə istədiyiniz daxiletmə növünü bildirmək üçün istifadə edilə bilər.<br><br> <b>Şərh Mətni</b> yalnız Studiya və/və ya Modul Qurucusunda görünür və administratorlar üçün sahəni təsvir etmək üçün istifadə edilə bilər.<br><br> Sahədə <b>Defolt Dəyər</b> görünəcək. İstifadəçilər sahəyə yeni dəyər daxil edə və ya standart dəyərdən istifadə edə bilərlər.<br><br>Sahə üçün Kütləvi Yeniləmə funksiyasından istifadə edə bilmək üçün <b>Kütləvi Yeniləmə</b> qutusunu seçin.<br><br><b>Maks. Ölçü</b> dəyəri sahəyə daxil edilə bilən simvolların maksimum sayını müəyyən edir.<br><br>Sahəni tələb etmək üçün <b>Tələb olunan sahə</b> qutusunu seçin. Sahəni ehtiva edən qeydi saxlaya bilmək üçün sahə üçün dəyər təmin edilməlidir.<br><br> Sahənin filtrlər və məlumatların Hesabatlarda göstərilməsi üçün istifadə edilməsinə icazə vermək üçün <b>Hesabat verilə bilər</b> qutusunu seçin.<br><br> Dəyişiklik loglarında sahəyə edilən dəyişiklikləri izləmək üçün <b>Audit</b> qutusunu seçin.<br><br>İdxal köməkçisindən sahənin idxalına icazə vermək, icazə verməmək və ya tələb etmək üçün <b>İdxal edilə bilən</b> sahəsini seçin.<br><br>Dublikatları birləşdirin və Dublikatları tapın funksiyalarını aktiv etmək və ya söndürmək üçün <b>Dublikat Birləşməsi</b> sahəsində seçim seçin.<br><br>Müəyyən məlumat növləri üçün əlavə xüsusiyyətlər təyin edilə bilər.',
            'editField' => 'Bu sahənin xüsusiyyətləri fərdiləşdirilə bilər.<br><br>Eyni xassələrə malik yeni sahə yaratmaq üçün <b>Klonla</b> üzərinə klikləyin.',
            'mbeditField' => 'Şablon sahəsinin <b>Ekran Etiketi</b> fərdiləşdirilə bilər. Sahənin digər xüsusiyyətləri fərdiləşdirilə bilməz.<br><br>Eyni xassələrə malik yeni sahə yaratmaq üçün <b>Klonla</b> üzərinə klikləyin.<br><br>Şablon sahəsini modulda göstərməməsi üçün silmək üçün bu sahəni müvafiq <b>Tərtibatlar</b>-dan silin.'

        ),
        'exportcustom' => array(
            'exportHelp' => '<b>Modul Yükləyicisi</b> vasitəsilə başqa SuiteCRM nümunəsinə yüklənə bilən paketlər yaratmaqla Studiyada edilən fərdiləşdirmələri ixrac edin.<br><br> Əvvəlcə <b>Paket Adı</b> təqdim edin. Siz həmçinin paket üçün <b>Müəllif</b> və <b>Təsvir</b> məlumatlarını təqdim edə bilərsiniz.<br><br>İxrac etmək istədiyiniz fərdiləşdirmələri ehtiva edən modul(lar)ı seçin. Seçmək üçün yalnız fərdiləşdirmələri ehtiva edən modullar görünəcək.<br><br>Sonra fərdiləşdirmələri ehtiva edən paket üçün .zip faylı yaratmaq üçün <b>İxrac</b> üzərinə klikləyin.',
            'exportCustomBtn' => 'Eksport etmək istədiyiniz fərdiləşdirmələri ehtiva edən paket üçün .zip faylı yaratmaq üçün <b>İxrac</b> üzərinə klikləyin.',
            'name' => 'Bu, paketin <b>Adı</b>dır. Bu ad quraşdırma zamanı göstəriləcək.',
            'author' => 'Bu, quraşdırma zamanı paketi yaradan obyektin adı kimi göstərilən <b>Müəllif</b>dir. Müəllif fərdi və ya şirkət ola bilər.',
            'description' => 'Bu quraşdırma zamanı göstərilən paketin <b>Təsviri</b>dir.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Tərtibatçı Alətləri</b> sahəsinə xoş gəlmisiniz. <br/><br/>Standart və fərdi modulları və sahələri yaratmaq və idarə etmək üçün bu sahədə alətlərdən istifadə edin.',
            'studioBtn' => 'Yerləşdirilmiş modulları fərdiləşdirmək üçün <b>Studiya</b> istifadə edin.',
            'mbBtn' => 'Yeni modullar yaratmaq üçün <b>Modul Qurucusu</b>-dan istifadə edin.',
            'sugarPortalBtn' => 'SuiteCRM Portalını idarə etmək və fərdiləşdirmək üçün <b>SuiteCRM Portal Redaktoru</b>-dan istifadə edin.',
            'dropDownEditorBtn' => 'Açılan sahələr üçün qlobal açılan siyahıları əlavə etmək və redaktə etmək üçün <b>Açılan Siyahı Redaktoru</b>-dan istifadə edin.',
            'appBtn' => 'Tətbiq rejimi proqramın müxtəlif xüsusiyyətlərini, məsələn, ana səhifədə neçə TPS hesabatının göstərilməsini fərdiləşdirə biləcəyiniz yerdir',
            'backBtn' => 'Əvvəlki addıma qayıdın.',
            'studioHelp' => 'Modullarda məlumatın nə və necə göstərildiyini müəyyən etmək üçün <b>Studiya</b>-dan istifadə edin.',
            'moduleBtn' => 'Modulu redaktə etmək üçün klikləyin.',
            'moduleHelp' => 'Modul üçün fərdiləşdirə biləcəyiniz komponentlər burada görünür.<br><br>Redaktə ediləcək komponenti seçmək üçün ikona klikləyin.<br><br>Fərdiləşdirmələri silmək və orijinal statusunu bərpa etmək üçün <b>Modulu Sıfırla</b> klikləyin.',
            'fieldsBtn' => 'Modulda məlumat saxlamaq üçün <b>Sahələr</b> yaradın və fərdiləşdirin.',
            'labelsBtn' => 'Moduldakı sahələr və digər başlıqlar üçün göstərilən <b>Etiketləri</b> redaktə edin.',
            'relationshipsBtn' => 'Modul üçün yeni əlavə edin və ya mövcud <b>Əlaqələrə</b> baxın.',
            'layoutsBtn' => '<b>Tərtibatlar</b> modulunu fərdiləşdirin. Planlar sahələri ehtiva edən modulun müxtəlif görünüşləridir.<br><br>Hər bir tərtibatda hansı sahələrin göründüyünü və necə təşkil olunduğunu müəyyən edə bilərsiniz.',
            'subpanelBtn' => 'Moduldakı <b>Alt panellərdə</b> hansı sahələrin göründüyünü müəyyənləşdirin.',
            'portalBtn' => '<b>SuiteCRM Portalında</b> görünən <b>Tərtibatlar</b> modulunu fərdiləşdirin.',
            'layoutsHelp' => 'Fərdiləşdirilə bilən modul <b>Tərtibatlar</b> burada görünür.<br><br>Tərtibatlar sahələr və sahə datasını göstərir.<br><br>Düzəliş etmək üçün tərtibatı seçmək üçün ikona klikləyin.',
            'subpanelHelp' => 'Modulda fərdiləşdirilə bilən <b>Alt panellər</b> burada görünür.<br><br>Düzəliş etmək üçün modulu seçmək üçün işarəyə klikləyin.',
            'newPackage' => 'Yeni paket yaratmaq üçün <b>Yeni Paket</b> üzərinə klikləyin.',
            'exportBtn' => 'Xüsusi modullar üçün Studiyada hazırlanmış fərdiləşdirmələri ehtiva edən paket yaratmaq və endirmək üçün <b>Fərdiləşdirmələri ixrac edin</b> klikləyin.',
            'mbHelp' => 'Standart və ya xüsusi obyektlərə əsaslanan fərdi modullardan ibarət paketlər yaratmaq üçün <b>Modul Qurucusu</b>-dan istifadə edin.',
            'viewBtnEditView' => 'Modulun <b>Redaktə Görünüşü</b> planını fərdiləşdirin.<br><br>Redaktə Görünüşü istifadəçi tərəfindən daxil edilmiş məlumatları tutmaq üçün daxiletmə sahələrini ehtiva edən formadır.',
            'viewBtnDetailView' => 'Modulun <b>Ətraflı Görünüş</b> tərtibatını fərdiləşdirin.<br><br>Ətraflı Görünüş istifadəçi tərəfindən daxil edilmiş sahə məlumatlarını göstərir.',
            'viewBtnDashlet' => 'SuiteCRM Panelin Siyahı Görünüşü və Axtarışı daxil olmaqla modulun <b>SuiteCRM Panel</b>-i fərdiləşdirin.<br><br>SuiteCRM Panelin Giriş modulunda səhifələrə əlavə etmək üçün əlçatan olacaq.',
            'viewBtnListView' => 'Modulun <b>Siyahı Görünüşü</b> tərtibatını fərdiləşdirin.<br><br>Axtarış nəticələri Siyahı Görünüşündə görünür.',
            'searchBtn' => 'Modulun <b>Axtar</b> planlarını fərdiləşdirin.<br><br>Siyahı Görünüşündə görünən qeydləri süzmək üçün hansı sahələrin istifadə oluna biləcəyini müəyyənləşdirin.',
            'viewBtnQuickCreate' => 'Modulun <b>Tez Yarat</b> tərtibatını fərdiləşdirin.<br><br>Tez Yaratma forması alt panellərdə və E-poçt modulunda görünür.',
            'addLayoutHelp' => "Təhlükəsizlik Qrupu üçün fərdi tərtibat yaratmaq üçün müvafiq Təhlükəsizlik Qrupunu və başlanğıc nöqtəsi kimi kopyalanacaq tərtibatı seçin.",
            'searchHelp' => 'Fərdiləşdirilə bilən <b>Axtar</b> formaları burada görünür.<br><br>Axtarış formalarında qeydlərin filtrasiyası üçün sahələr var.<br><br>Redaktə etmək üçün axtarış planını seçmək üçün ikona klikləyin.',
            'dashletHelp' => 'Fərdiləşdirilə bilən <b>SuiteCRM Panel</b> planları burada görünür.<br><br>SuiteCRM Panel Giriş modulunda səhifələrə əlavə etmək üçün əlçatan olacaq.',
            'DashletListViewBtn' => '<b>SuiteCRM Panel Siyahı Görünüşü</b> SuiteCRM Panel axtarış filtrlərinə əsaslanan qeydləri göstərir.',
            'DashletSearchViewBtn' => '<b>SuiteCRM Panel Axtarışı</b> SuiteCRM Panel siyahısı görünüşü üçün qeydləri süzür.',
            'popupHelp' => 'Fərdiləşdirilə bilən <b>Açılan pəncərə</b> tərtibatları burada görünür.<br>',
            'PopupListViewBtn' => '<b>Açılan Pəncərə Siyahı Görünüşü</b> Açılan Pəncərə axtarış görünüşlərinə əsaslanan qeydləri göstərir.',
            'PopupSearchViewBtn' => '<b>Açılan Pəncərə Axtarış</b> açılan pəncərə siyahısı görünüşü üçün qeydlərə baxır.',
            'BasicSearchBtn' => 'Modul üçün Axtarış sahəsində Sürətli Filtr nişanında görünən <b>Sürətli Filtr</b> formasını fərdiləşdirin.',
            'AdvancedSearchBtn' => 'Modul üçün Axtarış sahəsində Qabaqcıl Axtarış nişanında görünən <b>Qabaqcıl Filtr</b> formasını fərdiləşdirin.',
            'portalHelp' => '<b>SuiteCRM Portalını</b> idarə edin və fərdiləşdirin.',
            'SPUploadCSS' => 'SuiteCRM Portalı üçün <b>Üslub Vərəqini</b> yükləyin.',
            'SPSync' => 'Fərdiləşdirmələri SuiteCRM Portal nümunəsi ilə <b>Sinxronlaşdırın</b>.',
            'Layouts' => 'SuiteCRM Portal modullarının <b>Tərtibatlar</b>-ını fərdiləşdirin.',
            'portalLayoutHelp' => 'SuiteCRM Portal daxilindəki modullar bu sahədə görünür.<br><br><b>Tərtibatları</b> redaktə etmək üçün modul seçin.',
            'relationshipsHelp' => 'Modul və digər yerləşdirilmiş modullar arasında mövcud olan bütün <b>Əlaqələr</b> burada görünür.<br><br><b>Ad</b> əlaqəsi əlaqə üçün sistem tərəfindən yaradılan addır.<br><br><b>İlkin Modul</b> əlaqələrə sahib olan moduldur. Məsələn, Hesablar modulunun əsas modul olduğu əlaqələrin bütün xüsusiyyətləri Hesablar verilənlər bazası cədvəllərində saxlanılır.<br><br><b>Növ</b> Əsas modul və <b>Əlaqədar Modul</b> arasında mövcud olan əlaqə növüdür.<br><br>Sütun üzrə çeşidləmək üçün sütun başlığına klikləyin.<br><br>Əlaqə ilə əlaqəli xassələrə baxmaq üçün əlaqələr cədvəlində sətirə klikləyin.<br><br>Yeni əlaqə yaratmaq üçün <b>Əlaqə əlavə et</b> klikləyin.<br><br>İstənilən iki yerləşdirilmiş modul arasında əlaqələr yaradıla bilər.',
            'relationshipHelp' => '<b>Əlaqələr</b> modul və digər yerləşdirilən modul arasında yaradıla bilər.<br><br> Əlaqələr modul qeydlərindəki alt panellər və əlaqəli sahələr vasitəsilə vizual olaraq ifadə edilir.<br><br>Modul üçün aşağıdakı əlaqə <b>Növlərdən</b> birini seçin:<br><br><b>Birin birə</b> - Hər iki modulun qeydlərində əlaqəli sahələr olacaq.<br><br> <b>Birin çoxa</b> - Əsas Modulun qeydində alt panel, Əlaqədar Modulun qeydində isə əlaqəli sahə olacaq.<br><br> <b>Çoxun çoxa</b> - Hər iki modulun qeydləri alt panelləri göstərəcək.<br><br> Əlaqə üçün <b>Əlaqədar Modul</b> seçin. <br><br>Əlaqə növü alt panelləri əhatə edirsə, müvafiq modullar üçün alt panel görünüşünü seçin.<br><br> Əlaqə yaratmaq üçün <b>Saxla</b> üzərinə klikləyin.',
            'convertLeadHelp' => 'Burada siz çevirmə tərtibatı ekranına modullar əlavə edə və mövcud olanların tərtibatını dəyişdirə bilərsiniz.<br/>
		Cədvəldəki sətirləri sürükləyərək modulları yenidən sıralaya bilərsiniz.<br/><br/>
		<b>Modul:</b> Modulun adı.<br/><br/>
		<b>Tələb olunur:</b> Tələb olunan modullar aparıcı çevrilməzdən əvvəl yaradılmalı və ya seçilməlidir.<br/><br/>
		<b>Məlumatların Kopyalanması:</b> Əgər işarələnərsə, aparıcıdan olan sahələr yeni yaradılmış qeydlərdə eyni adlı sahələrə kopyalanacaq.<br/><br/>
		<b>Seçimə icazə verin:</b> Kontaktlarda əlaqəli sahəsi olan modullar konvertasiya prosesi zamanı yaradılmaq əvəzinə seçilə bilər.<br/><br/>
		<b>Redaktə edin:</b> Bu modul üçün konvertasiya planını dəyişdirin.<br/><br/>
		<b>Sil:</b> Bu modulu çevirmə sxemindən çıxarın.<br/><br/>',


            'editDropDownBtn' => 'Qlobal açılan menyunu redaktə edin',
            'addDropDownBtn' => 'Yeni qlobal açılan siyahı əlavə edin',
        ),
        'fieldsHelp' => array(
            'default' => 'Moduldakı <b>Sahələr</b> burada Sahənin Adı ilə qeyd olunur.<br><br>Modul şablonuna əvvəlcədən müəyyən edilmiş sahələr dəsti daxildir.<br><br>Yeni sahə yaratmaq üçün <b>Sahə əlavə et</b> klikləyin.<br><br>Sahəni redaktə etmək üçün <b>Sahənin Adı</b> üzərinə klikləyin.<br/><br/>Modul yerləşdirildikdən sonra Modul Qurucusunda yaradılmış yeni sahələr şablon sahələri ilə birlikdə Studiyada standart sahələr kimi qəbul edilir.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Modul və digər modullar arasında yaradılmış <b>Əlaqələr</b> burada görünür.<br><br><b>Ad</b> əlaqəsi əlaqə üçün sistem tərəfindən yaradılan addır.<br><br><b>İlkin Modul</b> əlaqələrə sahib olan moduldur. Əlaqələrin xassələri əsas modula aid verilənlər bazası cədvəllərində saxlanılır.<br><br><b>Növ</b> Əsas modul və <b>Əlaqədar Modul</b> arasında mövcud olan əlaqə növüdür.<br><br>Sütun üzrə çeşidləmək üçün sütun başlığına klikləyin.<br><br>Əlaqə ilə əlaqəli xassələrə baxmaq və redaktə etmək üçün əlaqələr cədvəlində sətirə klikləyin.<br><br>Yeni əlaqə yaratmaq üçün <b>Əlaqə əlavə et</b> üzərinə klikləyin.',
            'addrelbtn' => 'əlaqə əlavə etmək üçün siçanla kömək edin...',
            'addRelationship' => '<b>Əlaqələr</b> modul və başqa fərdi modul və ya yerləşdirilən modul arasında yaradıla bilər.<br><br> Əlaqələr alt panellər vasitəsilə vizual olaraq ifadə edilir və modul qeydlərindəki sahələrlə əlaqələndirilir.<br><br>Modul üçün aşağıdakı əlaqə <b>Növlərindən</b> birini seçin:<br><br> <b>Birin birə</b>- Hər iki modulun qeydlərində əlaqəli sahələr olacaq.<br><br><b>Birin çoxa</b> - Əsas Modulun qeydində alt panel, Əlaqədar Modulun qeydində isə əlaqəli sahə olacaq.<br><br> <b>Çoxun çoxa</b> - Hər iki modulun qeydləri alt panelləri göstərəcək.<br><br> Əlaqə üçün <b>Əlaqədar Modul</b> seçin. <br><br>Əlaqə növü alt panelləri əhatə edirsə, müvafiq modullar üçün alt panel görünüşünü seçin.<br><br> Əlaqə yaratmaq üçün <b>Saxla</b> üzərinə klikləyin.',
        ),
        'labelsHelp' => array(
            'default' => 'Moduldakı sahələr və digər başlıqlar üçün <b>Etiketlər</b> dəyişdirilə bilər.<br><br>Sahədə klikləməklə, yeni etiket daxil edərək və <b>Saxla</b> üzərinə klikləməklə etiketi redaktə edin.<br><br>Tətbiqdə hər hansı dil paketi quraşdırılıbsa, etiketlər üçün istifadə etmək üçün <b>Dil</b> seçə bilərsiniz.',
            'saveBtn' => 'Bütün dəyişiklikləri saxlamaq üçün <b>Saxla</b> klikləyin.',
            'publishBtn' => 'Bütün dəyişiklikləri saxlamaq və onları aktiv etmək üçün <b>Saxla və Yerləşdir</b> klikləyin.',
        ),
        'portalSync' => array(
            'default' => 'Yeniləmək üçün portal nümunəsinin <b>SuiteCRM Portal URL</b>-ni daxil edin və <b>Get</b> üzərinə klikləyin.<br><br>Sonra düzgün SuiteCRM istifadəçi adı və parol daxil edin və sonra <b>Sinxronizasiyaya başlayın</b> klikləyin.<br><br>SuiteCRM Portalının <b>Tərtibatlar</b>-da edilmiş fərdiləşdirmələr, əgər biri yüklənibsə, <b>Üslub Cədvəli</b> ilə birlikdə müəyyən edilmiş portal nümunəsinə köçürüləcək.',
        ),
        'portalStyle' => array(
            'default' => 'Siz üslub cədvəlindən istifadə etməklə SuiteCRM Portalının görünüşünü fərdiləşdirə bilərsiniz.<br><br>Yükləmək üçün <b>Üslub Cədvəli</b> seçin.<br><br>Sinxronizasiya növbəti dəfə həyata keçirildikdə üslub cədvəli SuiteCRM Portalında tətbiq olunacaq.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Layihəyə başlamaq üçün, xüsusi modullarınızı yerləşdirmək üçün yeni paket yaratmaq üçün <b>Yeni Paket</b> üzərinə klikləyin.<br/><br/>Hər bir paket bir və ya bir neçə moduldan ibarət ola bilər.<br/><br/>Məsələn, siz standart Hesablar modulu ilə əlaqəli bir fərdi moduldan ibarət paket yaratmaq istəyə bilərsiniz. Və ya bir layihə kimi birlikdə işləyən və bir-biri ilə və artıq tətbiqdə olan digər modullarla əlaqəli bir neçə yeni moduldan ibarət paket yaratmaq istəyə bilərsiniz.',
            'somepackages' => '<b>Paket</b> hamısı bir layihənin bir hissəsi olan fərdi modullar üçün konteyner kimi çıxış edir. Paket bir-biri ilə və ya tətbiqdəki digər modullarla əlaqəli ola bilən bir və ya bir neçə fərdi <b>Modullar</b>-dan ibarət ola bilər.<br/><br/>Layihəniz üçün paket yaratdıqdan sonra siz dərhal paket üçün modullar yarada bilərsiniz və ya layihəni tamamlamaq üçün daha sonra Modul Qurucuya qayıda bilərsiniz.<br><br>Layihə tamamlandıqda, proqram daxilində xüsusi modulları quraşdırmaq üçün paketi <b>Yerləşdir</b>-ə bilərsiniz.',
            'afterSave' => 'Yeni paketinizdə ən azı bir modul olmalıdır. Paket üçün bir və ya daha çox fərdi modul yarada bilərsiniz.<br/><br/>Bu paket üçün fərdi modul yaratmaq üçün <b>Yeni Modul</b>-a klikləyin.<br/><br/> Ən azı bir modul yaratdıqdan sonra siz öz nümunəniz və/və ya digər istifadəçilərin nümunələri üçün əlçatan etmək üçün paketi dərc edə və ya yerləşdirə bilərsiniz.<br/><br/> Paketi SuiteCRM nümunənizdə bir addımda yerləşdirmək üçün <b>Yerləşdir</b> klikləyin.<br><br>Paketi .zip faylı kimi saxlamaq üçün <b>Nəşr et</b> üzərinə klikləyin. .zip faylı sisteminizdə saxlandıqdan sonra paketi SuiteCRM instansiyanıza yükləmək və quraşdırmaq üçün <b>Modul Yükləyici</b>-dən istifadə edin. <br/><br/>Siz faylı digər istifadəçilərə öz SuiteCRM nümunələrində yükləmək və quraşdırmaq üçün paylaya bilərsiniz.',
            'create' => '<b>Paket</b> hamısı bir layihənin bir hissəsi olan fərdi modullar üçün konteyner kimi çıxış edir. Paket bir-biri ilə və ya tətbiqdəki digər modullarla əlaqəli ola bilən bir və ya bir neçə fərdi <b>Modullar</b>-dan ibarət ola bilər.<br/><br/>Layihəniz üçün paket yaratdıqdan sonra siz dərhal paket üçün modullar yarada bilərsiniz və ya layihəni tamamlamaq üçün daha sonra Modul Qurucuya qayıda bilərsiniz.',
        ),
        'main' => array(
            'welcome' => 'Standart və fərdi modulları və sahələri yaratmaq və idarə etmək üçün <b>Tərtibatçı Alətləri</b>-ndən istifadə edin. <br/><br/>Tətbiqdəki modulları idarə etmək üçün <b>Studiya</b> üzərinə klikləyin. <br/><br/>Fərdi modullar yaratmaq üçün <b>Modul Qurucusu</b> üzərinə klikləyin.',
            'studioWelcome' => 'Standart və modulla yüklənmiş obyektlər daxil olmaqla, hazırda quraşdırılmış modulların hamısı Studiya daxilində fərdiləşdirilə bilər.'
        ),
        'module' => array(
            'somemodules' => "Cari paketdə ən azı bir modul olduğundan, siz paketdəki modulları SuiteCRM nümunənizdə <b>Yerləşdir</b>ə və ya cari SuiteCRM instansiyasında və ya <b>Modul Yükləyicisi</b>ndən istifadə edərək başqa nüsxədə quraşdırılacaq paketi <b>Nəşr edə</b> bilərsiniz.<br/><br/>Paketi birbaşa SuiteCRM instansiyanızda quraşdırmaq üçün <b>Yerləşdirin</b> klikləyin.<br><br><b>Modul Yükləyicisi</b>-dən istifadə edərək cari SuiteCRM nümunəsi və digər instansiyalarda yüklənə və quraşdırıla bilən paket üçün .zip faylı yaratmaq üçün <b>Dərc et</b> üzərinə klikləyin.<br/><br/> Siz bu paket üçün modulları mərhələlərlə qura və bunu etməyə hazır olduğunuz zaman dərc edə və ya yerləşdirə bilərsiniz. <br/><br/>Paketi dərc etdikdən və ya yerləşdirdikdən sonra siz paketin xüsusiyyətlərinə dəyişiklik edə və modulları daha da fərdiləşdirə bilərsiniz. Sonra dəyişiklikləri tətbiq etmək üçün paketi yenidən dərc edin və ya yenidən yerləşdirin.",
            'editView' => 'Burada mövcud sahələri redaktə edə bilərsiniz. Siz mövcud sahələrdən hər hansı birini silə və ya sol paneldə mövcud sahələri əlavə edə bilərsiniz.',
            'create' => 'Yaratmaq istədiyiniz modulun növünü seçərkən modul daxilində olmasını istədiyiniz sahələrin <b>Növ</b>lərini yadda saxlayın.<br/><br/>Hər bir modul şablonu başlıqda təsvir olunan modul tipinə aid bir sıra sahələrdən ibarətdir.<br/><br/><b>Əsas</b> - Standart modullarda görünən əsas sahələri təmin edir, məsələn, Ad, Təyin edilmiş, Komanda, Yaradılma tarixi və Təsvir sahələri.<br/><br/> <b>Şirkət</b> - Şirkət Adı, Sənaye və Faktura Ünvanı kimi təşkilata xas sahələri təmin edir. Standart Hesablar moduluna bənzər modullar yaratmaq üçün bu şablondan istifadə edin.<br/><br/> <b>Şəxs</b> - Xitab, Başlıq, Ad, Ünvan və Telefon Nömrəsi kimi fərdi spesifik sahələri təmin edir. Standart Kontaktlar və Rəhbərlər modullarına bənzər modullar yaratmaq üçün bu şablondan istifadə edin.<br/><br/><b>Problem</b> - Nömrə, Vəziyyət, Prioritet və Təsvir kimi iş və baq-xüsusi sahələri təmin edir. Standart Dəstək və Səhvlər modullarına oxşar modullar yaratmaq üçün bu şablondan istifadə edin.<br/><br/>Qeyd: Modulu yaratdıqdan sonra siz şablonun təqdim etdiyi sahələrin etiketlərini redaktə edə, həmçinin modul tərtibatlarına əlavə etmək üçün xüsusi sahələr yarada bilərsiniz.',
            'afterSave' => 'Sahələri redaktə etmək və yaratmaq, digər modullarla əlaqələr qurmaq və layouts daxilində sahələri tənzimləməklə modulu ehtiyaclarınıza uyğunlaşdırın.<br/><br/>Şablon sahələrinə baxmaq və modul daxilində fərdi sahələri idarə etmək üçün <b>Sahələrə Baxın</b> üzərinə klikləyin.<br/><br/>Modul və digər modullar arasında əlaqələr yaratmaq və idarə etmək üçün, artıq tətbiqdə olan modullar və ya eyni paket daxilindəki digər fərdi modullar olsun, <b>Əlaqələrə Baxın</b> üzərinə klikləyin.<br/><br/>Modul tərtibatlarını redaktə etmək üçün <b>Tərtibatlara Baxın</b> üzərinə klikləyin. Siz Studiya daxilində artıq proqramda olan modullar üçün olduğu kimi modul üçün Təfərrüat Görünüşü, Redaktə Görünüşü və Siyahıya Baxış planlarını dəyişə bilərsiniz.<br/><br/> Cari modul ilə eyni xüsusiyyətlərə malik modul yaratmaq üçün <b>Dublikat</b> üzərinə klikləyin. Siz yeni modulu daha da fərdiləşdirə bilərsiniz.',
            'viewfields' => 'Moduldakı sahələr ehtiyaclarınıza uyğun olaraq fərdiləşdirilə bilər.<br/><br/>Standart sahələri silə bilməzsiniz, lakin siz onları Tərtibat səhifələrində müvafiq tərtibatlardan silə bilərsiniz. <br/><br/>Siz <b>Xüsusiyyətlər</b> formasında <b>Klonla</b> üzərinə klikləməklə, mövcud sahələrə oxşar xassələrə malik yeni sahələr yarada bilərsiniz. İstənilən yeni xassələri daxil edin və sonra <b>Saxla</b>ya klikləyin.<br/><br/>Xüsusi modulu ehtiva edən paketi dərc etməzdən və quraşdırmadan əvvəl standart sahələr və fərdi sahələr üçün bütün xassələri təyin etməyiniz tövsiyə olunur.',
            'viewrelationships' => 'Siz cari modul ilə paketdəki digər modullar arasında və/yaxud cari modul ilə artıq proqramda quraşdırılmış modullar arasında çoxdan çoxa əlaqələr yarada bilərsiniz.<br><br> Bir-çox və bir-bir əlaqələr yaratmaq üçün modullar üçün <b>Əlaqələndirmək</b> və <b>Çevik Əlaqələndirmək</b> sahələri yaradın.',
            'viewlayouts' => 'Siz <b>Redaktə Baxış</b> daxilində verilənləri ələ keçirmək üçün hansı sahələrin mövcud olduğuna nəzarət edə bilərsiniz. Siz həmçinin <b>Ətraflı Görünüş</b> daxilində hansı məlumatların göstərilməsinə nəzarət edə bilərsiniz. Baxışlar üst-üstə düşməməlidir.<br/><br/>Sürətli Yaratma forması modul alt panelində <b>Yarat</b> kliklədikdə göstərilir. Defolt olaraq, <b>Tez Yarat</b> forma tərtibatı defolt <b>Redaktə Görünüşü</b> tərtibatı ilə eynidir. Siz Sürətli Yaratma formasını elə tənzimləyə bilərsiniz ki, o, Görünüşün redaktə sxemindən daha az və/yaxud fərqli sahələr ehtiva etsin. <br><br>Siz modulun təhlükəsizliyini <b>Rolu İdarəetmə</b> ilə birlikdə Layout fərdiləşdirməsindən istifadə edərək müəyyən edə bilərsiniz.<br><br>',
            'existingModule' => 'Bu modulu yaratdıqdan və fərdiləşdirdikdən sonra siz əlavə modullar yarada və ya paketi <b>Nəşr etmək</b> və ya <b>Yerləşdirmək</b> üçün paketə qayıda bilərsiniz.<br><br>Əlavə modullar yaratmaq üçün cari modulla eyni xüsusiyyətlərə malik modul yaratmaq üçün <b>Dublikat</b> üzərinə klikləyin və ya paketə qayıdın və <b>Yeni Modul</b> üzərinə klikləyin.<br><br>Bu modulu ehtiva edən paketi <b>Nəşr etməyə</b> və ya <b>Yerləşdirməyə</b> hazırsınızsa, bu funksiyaları yerinə yetirmək üçün paketə qayıdın. Siz ən azı bir moduldan ibarət paketləri dərc edə və yerləşdirə bilərsiniz.',
            'labels' => 'Standart sahələrin, eləcə də fərdi sahələrin etiketləri dəyişdirilə bilər. Sahə etiketlərinin dəyişdirilməsi sahələrdə saxlanılan məlumatlara təsir etməyəcək.',
        ),
        'listViewEditor' => array(
            'modify' => 'Solda üç sütun göstərilir. "Defolt" sütunu standart olaraq siyahı görünüşündə göstərilən sahələri ehtiva edir, "Mövcud" sütununda istifadəçinin fərdi siyahı görünüşünü yaratmaq üçün istifadə edə biləcəyi sahələr var və "Gizli" sütununda istifadəçilər tərəfindən istifadə üçün defolt və ya Mövcud sütunlara əlavə etmək üçün admin kimi sizin üçün mövcud olan, lakin hazırda qeyri-aktiv olan sahələr var.',
            'savebtn' => '<b>Saxla</b> klikləmək bütün dəyişiklikləri yadda saxlayacaq və onları aktiv edəcək.',
            'Hidden' => 'Gizli sahələr siyahı görünüşlərində istifadə üçün hazırda istifadəçilər üçün əlçatan olmayan sahələrdir.',
            'Available' => 'Mövcud sahələr defolt olaraq göstərilməyən, lakin istifadəçilər tərəfindən aktivləşdirilə bilən sahələrdir.',
            'Default' => 'Defolt sahələr xüsusi siyahı görünüşü parametrləri yaratmamış istifadəçilərə göstərilir.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Solda iki sütun göstərilir. "Defolt" sütununda axtarış görünüşündə göstəriləcək sahələr, "Gizli" sütununda isə admin olaraq görünüşə əlavə etmək üçün sizin üçün mövcud olan sahələr var.',
            'savebtn' => '<b>Saxla və Yerləşdir</b> klikləməklə bütün dəyişiklikləri yadda saxlayacaq və onları aktiv edəcək.',
            'Hidden' => 'Gizli sahələr axtarış görünüşündə göstərilməyəcək sahələrdir.',
            'Default' => 'Defolt sahələr axtarış görünüşündə göstəriləcək.'
        ),
        'layoutEditor' => array(
            'default' => 'Solda iki sütun göstərilir. Cari Tərtibat və ya Tərtibata Önbaxış etiketli sağ sütun modul tərtibatını dəyişdirdiyiniz yerdir. Alətlər qutusu adlanan sol sütunda tərtibatı redaktə edərkən istifadə üçün faydalı elementlər və alətlər var.<br/><br/>Əgər tərtibat sahəsi Cari Tərtibat adlanırsa, siz modul tərəfindən ekran üçün hazırda istifadə edilən düzənliyin surəti üzərində işləyirsiniz.<br/><br/>Əgər o, Tərtibata Önbaxış adlanırsa, siz Saxla düyməsinə klikləməklə əvvəllər yaradılmış nüsxə üzərində işləyirsiniz, o, bu modulun istifadəçilərinin gördüyü versiyadan artıq dəyişdirilmiş ola bilər.',
            'saveBtn' => 'Dəyişikliklərinizi qoruya bilməniz üçün bu düyməyə klikləməklə tərtibat yadda saxlanılır. Bu modula qayıtdığınız zaman bu dəyişdirilmiş plandan başlayacaqsınız. Saxla və Yayımla düyməsini klikləməyincə, tərtibatınız modul istifadəçiləri tərəfindən görünməyəcək.',
            'publishBtn' => 'Tərtibatı yerləşdirmək üçün bu düyməni basın. Bu o deməkdir ki, bu tərtibat dərhal bu modulun istifadəçiləri tərəfindən görüləcək.',
            'toolbox' => 'Alətlər qutusu zibil qutusu, əlavə elementlər dəsti və mövcud sahələr dəsti daxil olmaqla, planları redaktə etmək üçün müxtəlif faydalı funksiyaları ehtiva edir. Bunlardan hər hansı birini tərtibat üzərinə sürükləyib atmaq olar.',
            'panels' => 'Bu sahə yerləşdirilmə edildikdə bu modulun istifadəçilərinə tərtibatınızın necə görünəcəyini göstərir.<br/><br/>Siz sahələr, sətirlər və panellər kimi elementləri sürükləyib yerə salmaqla onların yerini dəyişə bilərsiniz; elementləri alətlər qutusundakı zibil qutusuna sürükləyib atmaqla silin və ya alətlər qutusundan sürükləyərək istədiyiniz mövqedə tərtibata ataraq yeni elementlər əlavə edin.'
        ),
        'dropdownEditor' => array(
            'default' => 'Solda iki sütun göstərilir. Cari Tərtibat və ya Tərtibata Önbaxış etiketli sağ sütun modul tərtibatını dəyişdirdiyiniz yerdir. Alətlər qutusu adlanan sol sütunda tərtibatı redaktə edərkən istifadə üçün faydalı elementlər və alətlər var.<br/><br/>Əgər tərtibat sahəsi Cari Tərtibat adlanırsa, siz modul tərəfindən ekran üçün hazırda istifadə edilən düzənliyin surəti üzərində işləyirsiniz.<br/><br/>Əgər o, Tərtibata Önbaxış adlanırsa, siz Saxla düyməsinə klikləməklə əvvəllər yaradılmış nüsxə üzərində işləyirsiniz, o, bu modulun istifadəçilərinin gördüyü versiyadan artıq dəyişdirilmiş ola bilər.',
            'dropdownaddbtn' => 'Bu düyməyə klikləməklə açılan menyuya yeni element əlavə olunur.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Bu instansiya daxilində Studiyada edilən fərdiləşdirmələr paketləşdirilə və başqa instansiyada yerləşdirilə bilər. <br><br><b>Paket Adı</b> təqdim edin. Siz paket üçün <b>Müəllif</b> və <b>Təsvir</b> məlumatlarını təqdim edə bilərsiniz.<br><br>İxrac etmək üçün fərdiləşdirmələri ehtiva edən modulları seçin. (Seçməyiniz üçün yalnız fərdiləşdirmələri ehtiva edən modullar görünəcək.)<br><br>Fərdiləşdirmələri ehtiva edən paket üçün .zip faylı yaratmaq üçün <b>İxrac</b> üzərinə klikləyin. .zip faylı <b>Modul Yükləyici</b> vasitəsilə başqa instansiyada yüklənə bilər.',
            'exportCustomBtn' => 'Eksport etmək istədiyiniz fərdiləşdirmələri ehtiva edən paket üçün .zip faylı yaratmaq üçün <b>İxrac</b> üzərinə klikləyin.',
            'name' => 'Paket Studiyada quraşdırmaq üçün yükləndikdən sonra paketin <b>Adı</b> Modul Yükləyicisində göstəriləcək.',
            'author' => '<b>Müəllif</b> paketi yaradan obyektin adıdır. Müəllif fərdi və ya şirkət ola bilər.<br><br>Müəllif paket Studiyada quraşdırmaq üçün yükləndikdən sonra Modul Yükləyicisində göstəriləcək.',
            'description' => 'Paket Studiyada quraşdırmaq üçün yükləndikdən sonra paketin <b>Təsviri</b> Modul Yükləyicisində göstəriləcək.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Tərtibatçı Alətləri</b> sahəsinə xoş gəlmisiniz. <br/><br/>Standart və fərdi modulları və sahələri yaratmaq və idarə etmək üçün bu sahədə alətlərdən istifadə edin.',
            'studioBtn' => 'Sahənin düzülməsini dəyişdirərək, hansı sahələrin mövcud olduğunu seçərək və fərdi məlumat sahələri yaradaraq quraşdırılmış modulları fərdiləşdirmək üçün <b>Studiya</b>-dan istifadə edin.',
            'mbBtn' => 'Yeni modullar yaratmaq üçün <b>Modul Qurucusu</b>-dan istifadə edin.',
            'appBtn' => 'Əsas səhifədə neçə TPS hesabatının göstərildiyi kimi proqramın müxtəlif xüsusiyyətlərini fərdiləşdirmək üçün Tətbiq rejimindən istifadə edin',
            'backBtn' => 'Əvvəlki addıma qayıdın.',
            'studioHelp' => 'Quraşdırılmış modulları fərdiləşdirmək üçün <b>Studiya</b> istifadə edin.',
            'moduleBtn' => 'Modulu redaktə etmək üçün klikləyin.',
            'moduleHelp' => 'Redaktə etmək istədiyiniz modul komponentini seçin',
            'fieldsBtn' => 'Moduldakı <b>Sahələrə</b> nəzarət etməklə modulda hansı məlumatın saxlandığını redaktə edin.<br/><br/>Siz burada fərdi sahələri redaktə edə və yarada bilərsiniz.',
            'labelsBtn' => 'Fərdi etiketlərinizi saxlamaq üçün <b>Saxla</b> klikləyin.',
            'layoutsBtn' => 'Redaktə, Təfərrüat, Siyahı və axtarış görünüşlərinin <b>Tərtibatlar</b>-u fərdiləşdirin.',
            'subpanelBtn' => 'Bu modulların alt panellərində hansı məlumatların göstərildiyini redaktə edin.',
            'layoutsHelp' => '<b>Redaktə ediləcək tərtibat</b> seçin.<br/><br/>Məlumat daxil etmək üçün məlumat sahələrini ehtiva edən tərtibatı dəyişmək üçün <b>Görünüşü redaktə et</b> üzərinə klikləyin.<br/><br/>Redaktə Görünüşündə sahələrə daxil edilmiş məlumatları əks etdirən tərtibatı dəyişmək üçün <b>Detallı Görünüş</b> üzərinə klikləyin.<br/><br/>Defolt siyahıda görünən sütunları dəyişmək üçün <b>Siyahı Görünüşü</b> üzərinə klikləyin.<br/><br/>Əsas və Qabaqcıl axtarış formasının tərtibatlarını dəyişmək üçün <b>Axtar</b> üzərinə klikləyin.',
            'subpanelHelp' => 'Redaktə etmək üçün <b>Alt panel</b> seçin.',
            'searchHelp' => 'Redaktə etmək üçün <b>Axtar</b> tərtibatı seçin.',
            'newPackage' => 'Yeni paket yaratmaq üçün <b>Yeni Paket</b> üzərinə klikləyin.',
            'mbHelp' => '<b>Modul Qurucusuna xoş gəlmisiniz.</b><br/><br/>Standart və ya fərdi obyektlərə əsaslanan fərdi modulları ehtiva edən paketlər yaratmaq üçün <b>Modul Qurucusu</b>-dən istifadə edin. <br/><br/>Başlamaq üçün, yeni paket yaratmaq üçün <b>Yeni Paket</b> üzərinə klikləyin və ya redaktə etmək üçün paket seçin.<br/><br/> <b>Paket</b> hamısı bir layihənin bir hissəsi olan fərdi modullar üçün konteyner kimi çıxış edir. Paket bir-biri ilə və ya proqramdakı modullarla əlaqəli ola bilən bir və ya bir neçə fərdi moduldan ibarət ola bilər. <br/><br/>Nümunələr: Siz standart Hesablar modulu ilə əlaqəli bir fərdi moduldan ibarət paket yaratmaq istəyə bilərsiniz. Və ya bir layihə kimi birlikdə işləyən və bir-biri ilə və tətbiqdəki modullarla əlaqəli bir neçə yeni moduldan ibarət paket yaratmaq istəyə bilərsiniz.',
            'exportBtn' => 'Xüsusi modullar üçün Studiyada hazırlanmış fərdiləşdirmələri ehtiva edən paket yaratmaq üçün <b>Fərdiləşdirmələri ixrac edin</b>ə klikləyin.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Açılan redaktor',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modul Qurucusu',
    'LBL_STUDIO' => 'Studiya',
    'LBL_DROPDOWNEDITOR' => 'Açılan redaktor',
    'LBL_DEVELOPER_TOOLS' => 'Tərtibatçı Alətləri',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Redaktoru',
    'LBL_PACKAGE_LIST' => 'Paket Siyahısı',
    'LBL_HOME' => 'Ana səhifə',
    'LBL_NONE' => '-Heç nə-',
    'LBL_DEPLOYE_COMPLETE' => 'Yerləşdirmə tamamlandı',
    'LBL_DEPLOY_FAILED' => 'Yerləşdirmə prosesi zamanı xəta baş verdi, paketiniz düzgün quraşdırılmayıb',
    'LBL_AVAILABLE_SUBPANELS' => 'Mövcud alt panellər',
    'LBL_ADVANCED' => 'Qabaqcıl',
    'LBL_ADVANCED_SEARCH' => 'Qabaqcıl Filtirləmə',
    'LBL_BASIC' => 'Başlıca',
    'LBL_BASIC_SEARCH' => 'Sürətli Filtirləmə',
    'LBL_CURRENT_LAYOUT' => 'Tərtibat',
    'LBL_CURRENCY' => 'Valyuta',
    'LBL_DASHLET' => 'SuiteCRM Panel',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Panel Siyahı Görünüşü',
    'LBL_POPUP' => 'Açılan pəncərə görünüşü',
    'LBL_POPUPLISTVIEW' => 'Açılan pəncərə siyahı görünüşü',
    'LBL_POPUPSEARCH' => 'Açılan pəncərə axtarış',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Panel Axtarışı',
    'LBL_DETAILVIEW' => 'Ətraflı Baxış',
    'LBL_DROP_HERE' => '[Bura at]',
    'LBL_EDIT' => 'Redaktə et',
    'LBL_EDIT_LAYOUT' => 'Tərtibatı redaktə et',
    'LBL_EDIT_FIELDS' => 'Sütuna düzəliş et',
    'LBL_EDITVIEW' => 'Baxışı redaktə et',
    'LBL_FILLER' => '(doldurucu)',
    'LBL_FIELDS' => 'Damalar',
    'LBL_FAILED_TO_SAVE' => 'Yadda saxlamaq alınmadı',
    'LBL_FAILED_PUBLISHED' => 'Dərc etmək alınmadı',
    'LBL_HOMEPAGE_PREFIX' => 'Mənim',
    'LBL_LAYOUT_PREVIEW' => 'Tərtibata önbaxış',
    'LBL_LAYOUTS' => 'Tərtibatlar',
    'LBL_LISTVIEW' => 'Siyahıya Baxış',
    'LBL_MODULES' => 'Modullar',
    'LBL_MODULE_TITLE' => 'Studiya',
    'LBL_NEW_PACKAGE' => 'Yeni paket',
    'LBL_NEW_PANEL' => 'Yeni panel',
    'LBL_NEW_ROW' => 'Yeni sətir',
    'LBL_PACKAGE_DELETED' => 'Paket silindi',
    'LBL_PUBLISHING' => 'Nəşr edilir...',
    'LBL_PUBLISHED' => 'Nəşr edilmişdir',
    'LBL_SELECT_FILE' => 'Faylı seçin',
    'LBL_SUBPANELS' => 'Alt panellər',
    'LBL_SUBPANEL' => 'Alt panel',
    'LBL_SUBPANEL_TITLE' => 'Başlıq:',
    'LBL_SEARCH_FORMS' => 'Filtrə',
    'LBL_SEARCH' => 'Axtar',
    'LBL_SEARCH_BUTTON' => 'Axtar',
    'LBL_FILTER' => 'Filtrə',
    'LBL_TOOLBOX' => 'Alətlər qutusu',
    'LBL_QUICKCREATE' => 'Sürətli Yarat',
    'LBL_EDIT_DROPDOWNS' => 'Qlobal açılan menyunu redaktə edin',
    'LBL_ADD_DROPDOWN' => 'Yeni qlobal açılan siyahı əlavə edin',
    'LBL_BLANK' => '-boş-',
    'LBL_TAB_ORDER' => 'Tab siyahısı',
    'LBL_TABDEF_TYPE' => 'Ekran növü',
    'LBL_TABDEF_TYPE_HELP' => 'Bu bölmənin necə göstəriləcəyini seçin. Bu seçim yalnız bu görünüşdə tabları aktiv etmisinizsə təsirli olur.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Bu panelin tərtibat görünüşündə görünməsi üçün Panel seçin. Bu panelin tərtibat daxilində ayrıca tabda göstərilməsini təmin etmək üçün Tab seçin. Panel üçün Tab müəyyən edildikdə, Panel kimi göstərilməyə təyin edilmiş sonrakı panellər tabda göstəriləcək. <br/>Tabın seçildiyi növbəti panel üçün yeni Tab işə salınacaq. Birinci panelin altındakı panel üçün Tab seçilərsə, birinci panel mütləq Tab olacaqdır.',
    'LBL_TABDEF_COLLAPSE' => 'Yığışdırma',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Bu panelin defolt vəziyyətini yığışdırmaq üçün seçin.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Ad',
    'LBL_DROPDOWN_LANGUAGE' => 'Dil',
    'LBL_DROPDOWN_ITEMS' => 'Siyahı elementləri',
    'LBL_DROPDOWN_ITEM_NAME' => 'Element Adı',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Etiketi göstərin',
    'LBL_SYNC_TO_DETAILVIEW' => 'Detal Görünüşü ilə sinxronizasiya edin',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Bu Redaktə Görünüş tərtibatını müvafiq Təfərrüat Görünüşü tərtibatı ilə sinxronlaşdırmaq üçün bu seçimi seçin. Redaktə Görünüşündə sahələr və sahənin yerləşdirilməsi<br>Düzəliş Görünüşündə Saxla və ya Saxla və Yerləşdir düyməsinə klikləməklə avtomatik sinxronlaşdırılacaq və Təfərrüat Görünüşünə yadda saxlanılacaq. <br>Tərtibat dəyişiklikləri Detal Görünüşündə edilə bilməyəcək.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Bu Təfərrüat Görünüşü müvafiq Redaktə Görünüşü ilə sinxronlaşdırılıb.<br> Bu Təfərrüat Görünüşündə sahələr və sahə yerləşdirilməsi Redaktə Görünüşündə sahələri və sahənin yerləşdirilməsini əks etdirir.<br> Təfərrüat Görünüşünə edilən dəyişikliklər bu səhifədə yadda saxlanıla və ya yerləşdirilə bilməz. Dəyişikliklər edin və ya Redaktə Görünüşündə planları sinxronizasiyadan çıxarın. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Redaktə Görünüşündən kopyalayın',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Həm Element Adı, həm də Ekran Etiketi üçün dəyərlər tələb olunur. Boş element əlavə etmək üçün Element Adı və Ekran Etiketi üçün heç bir dəyər daxil etmədən Əlavə et düyməsini klikləyin.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Açar artıq siyahıda mövcuddur',
    'LBL_NO_SAVE_ACTION' => 'Bu görünüş üçün yadda saxlamaq əməliyyatını tapmaq mümkün olmadı.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: pis formalaşmış sənəd',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'İlkin Modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* Studiyada əlaqə yaradıldı',
    'LBL_RELATIONSHIPS' => 'Əlaqələr',
    'LBL_RELATIONSHIP_EDIT' => 'Əlaqəni redaktə edin',
    'LBL_REL_NAME' => 'Ad',
    'LBL_REL_LABEL' => 'Etiket',
    'LBL_REL_TYPE' => 'Növ',
    'LBL_RHS_MODULE' => 'Əlaqəli modul',
    'LBL_NO_RELS' => 'Əlaqə yoxdur',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Əlavə şərtlər',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Sütun',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Dəyər',
    'LBL_SUBPANEL_FROM' => 'Alt paneldən',
    'LBL_RELATIONSHIP_ONLY' => 'Bu əlaqə üçün heç bir görünən element yaradılmayacaq, çünki bu iki modul arasında əvvəlcədən görünən əlaqə mövcuddur.',
    'LBL_ONETOONE' => 'Birin birə',
    'LBL_ONETOMANY' => 'Birin çoxa',
    'LBL_MANYTOONE' => 'Çoxun birə',
    'LBL_MANYTOMANY' => 'Çoxun çoxa',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Redaktə etmək üçün modulu seçin.',
    'LBL_QUESTION_LAYOUT' => 'Redaktə etmək üçün tərtibat seçin.',
    'LBL_QUESTION_SUBPANEL' => 'Redaktə etmək üçün alt panel seçin.',
    'LBL_QUESTION_SEARCH' => 'Redaktə etmək üçün filtr tərtibatı seçin.',
    'LBL_QUESTION_MODULE' => 'Redaktə etmək üçün modul komponenti seçin.',
    'LBL_QUESTION_PACKAGE' => 'Redaktə etmək üçün paket seçin və ya yeni paket yaradın.',
    'LBL_QUESTION_EDITOR' => 'Bir alət seçin.',
    'LBL_QUESTION_DASHLET' => 'Redaktə etmək üçün panel tərtibatı seçin.',
    'LBL_QUESTION_POPUP' => 'Redaktə etmək üçün açılan pəncərə tərtibatı seçin.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Ad',
    'LBL_LABELS' => 'Etiketlər',
    'LBL_MASS_UPDATE' => 'Çoxlu Yeniləmə',
    'LBL_DEFAULT_VALUE' => 'Defolt Dəyər',
    'LBL_REQUIRED' => 'Vacibdir',
    'LBL_DATA_TYPE' => 'Növ',
    'LBL_HCUSTOM' => 'XÜSUSİ',
    'LBL_HDEFAULT' => 'DEFOLT',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_CUSTOM_FIELDS' => '* sahə Studiyada yaradıldı',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Etiketləri redaktə et',
    'LBL_SECTION_PACKAGES' => 'Paketlər',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Modullar',
    'LBL_SECTION_DROPDOWNS' => 'Açılan menyular',
    'LBL_SECTION_PROPERTIES' => 'Xüsusiyyətlər',
    'LBL_SECTION_DROPDOWNED' => 'Açılan menyunu redaktə edin',
    'LBL_SECTION_HELP' => 'Kömək',
    'LBL_SECTION_MAIN' => 'Əsas',
    'LBL_SECTION_FIELDEDITOR' => 'Sahəyə düzəliş et',
    'LBL_SECTION_DEPLOY' => 'Yerləşdir',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standart',
    'LBL_HIDDEN' => 'Gizlədilmiş',
    'LBL_AVAILABLE' => 'Mövcud',
    'LBL_LISTVIEW_DESCRIPTION' => 'Aşağıda üç sütun göstərilir. <b>Defolt</b> sütununda defolt olaraq siyahı görünüşündə göstərilən sahələr var. <b>Əlavə</b> sütununda istifadəçinin fərdi görünüş yaratmaq üçün istifadə edə biləcəyi sahələr var. <b>Mövcud</b> sütununda istifadəçilər tərəfindən istifadə üçün Defolt və ya Əlavə sütunlara əlavə etmək üçün admin kimi sizin üçün əlçatan olan sahələr göstərilir.',
    'LBL_LISTVIEW_EDIT' => 'Siyahı Görünüşü Redaktoru',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Önbaxış',
    'LBL_MB_RESTORE' => 'Bərpa et',
    'LBL_MB_DELETE' => 'Sil',
    'LBL_MB_DEFAULT_LAYOUT' => 'Defolt Tərtibat',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Əlavə et',
    'LBL_BTN_SAVE' => 'Saxla',
    'LBL_BTN_SAVE_CHANGES' => 'Dəyişiklikləri saxla',
    'LBL_BTN_DONT_SAVE' => 'Dəyişiklikləri ləğv et',
    'LBL_BTN_CANCEL' => 'İmtina',
    'LBL_BTN_CLOSE' => 'Bağla',
    'LBL_BTN_SAVEPUBLISH' => 'Saxla və Yerləşdir',
    'LBL_BTN_CLONE' => 'Klonla',
    'LBL_BTN_ADDROWS' => 'Sətirlər əlavə edin',
    'LBL_BTN_ADDFIELD' => 'Dama Artır',
    'LBL_BTN_ADDDROPDOWN' => 'Açılan menyunu əlavə edin',
    'LBL_BTN_SORT_ASCENDING' => 'Artan sıralama',
    'LBL_BTN_SORT_DESCENDING' => 'Azalan sıralama',
    'LBL_BTN_EDLABELS' => 'Etiketləri redaktə et',
    'LBL_BTN_UNDO' => 'Geri al',
    'LBL_BTN_REDO' => 'Yenidən edin',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Fərdi sahə əlavə edin',
    'LBL_BTN_EXPORT' => 'Fərdiləşdirmələri ixrac edin',
    'LBL_BTN_DUPLICATE' => 'Dublikat',
    'LBL_BTN_PUBLISH' => 'Nəşr et',
    'LBL_BTN_DEPLOY' => 'Yerləşdir',
    'LBL_BTN_EXP' => 'İxrac',
    'LBL_BTN_DELETE' => 'Sil',
    'LBL_BTN_VIEW_LAYOUTS' => 'Tərtibatlara bax',
    'LBL_BTN_VIEW_FIELDS' => 'Sahələrə bax',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Qohumluqlara baxmaq',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Əlaqə əlavə edin',
    'LBL_BTN_RENAME_MODULE' => 'Modulun adın dəyiş',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Xəta: Sahə Artıq Mövcuddur',
    'ERROR_INVALID_KEY_VALUE' => "Xəta: Yanlış Açar Dəyəri: [']",
    'ERROR_NO_HISTORY' => 'Heç bir tarix faylı tapılmadı',
    'ERROR_MINIMUM_FIELDS' => 'Dizayn ən azı bir sahəni ehtiva etməlidir',
    'ERROR_GENERIC_TITLE' => 'Bir xəta baş verdi',
    'ERROR_REQUIRED_FIELDS' => 'Davam etmək istədiyinizə əminsiniz? Aşağıdakı tələb olunan sahələr tərtibatda yoxdur:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paket adı:',
    'LBL_MODULE_NAME' => 'Modul adı:',
    'LBL_AUTHOR' => 'Müəllif:',
    'LBL_DESCRIPTION' => 'Açıqlama:',
    'LBL_KEY' => 'Açar:',
    'LBL_ADD_README' => ' Readme',
    'LBL_LAST_MODIFIED' => 'Son Dəyişiklik:',
    'LBL_NEW_MODULE' => 'Yeni modul',
    'LBL_LABEL' => 'Etiket:',
    'LBL_LABEL_TITLE' => 'Etiket',
    'LBL_WIDTH' => 'En',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Növ:',
    'LBL_NAV_TAB' => 'Naviqasiya tabı',
    'LBL_CREATE' => 'Yarat',
    'LBL_LIST' => 'Siyahı',
    'LBL_VIEW' => 'Bax',
    'LBL_HISTORY' => 'Tarixçəyə bax',
    'LBL_RESTORE_DEFAULT' => 'Defolta qaytar',
    'LBL_ACTIVITIES' => 'Fəaliyyətlər',
    'LBL_NEW' => 'Yeni',
    'LBL_TYPE_BASIC' => 'əsas',
    'LBL_TYPE_COMPANY' => 'şirkət',
    'LBL_TYPE_PERSON' => 'insan',
    'LBL_TYPE_ISSUE' => 'problem',
    'LBL_TYPE_SALE' => 'satış',
    'LBL_TYPE_FILE' => 'fayl',
    'LBL_RSUB' => 'Bu, modulunuzda göstəriləcək alt paneldir',
    'LBL_MSUB' => 'Bu, modulunuzun göstərilməsi üçün müvafiq modula təqdim etdiyi alt paneldir',
    'LBL_MB_IMPORTABLE' => 'İdxal olunur',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[paket]] silindi',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Fərdiləşdirmələri ixrac edin',
    'LBL_EC_NAME' => 'Paket adı:',
    'LBL_EC_AUTHOR' => 'Müəllif:',
    'LBL_EC_DESCRIPTION' => 'Açıqlama:',
    'LBL_EC_CHECKERROR' => 'Zəhmət olmasa modul seçin.',
    'LBL_EC_CUSTOMFIELD' => 'fərdiləşdirilmiş sahə(lər)',
    'LBL_EC_CUSTOMLAYOUT' => 'fərdi tərtibat(lar)',
    'LBL_EC_NOCUSTOM' => 'Heç bir modul fərdiləşdirilməyib.',
    'LBL_EC_EMPTYCUSTOM' => 'boş fərdiləşdirmələrə malikdir.',
    'LBL_EC_EXPORTBTN' => 'İxrac',
    'LBL_MODULE_DEPLOYED' => 'Modul yerləşdirilib.',
    'LBL_UNDEFINED' => 'müəyyən edilməmiş',
    'LBL_EC_VIEWS' => 'fərdiləşdirilmiş görünüş(lər)',
    'LBL_EC_SUITEFEEDS' => 'fərdiləşdirilmiş axın(lar)',
    'LBL_EC_DASHLETS' => 'fərdiləşdirilmiş Panel(lər)',
    'LBL_EC_CSS' => 'fərdiləşdirilmiş css(lər)',
    'LBL_EC_TPLS' => 'fərdiləşdirilmiş tpls(lər)',
    'LBL_EC_IMAGES' => 'fərdiləşdirilmiş şəkil(lər)',
    'LBL_EC_JS' => 'fərdiləşdirilmiş js(lər)',
    'LBL_EC_QTIP' => 'fərdiləşdirilmiş qtip(lər)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Datanı əldə etmək alınmadı',
    'LBL_AJAX_LOADING' => 'Yüklənir...',
    'LBL_AJAX_DELETING' => 'Silinir...',
    'LBL_AJAX_BUILDPROGRESS' => 'Quraşdırılma davam edir...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Yerləşdirmə davam edir...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Nəticə',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Bu əməliyyat uğurla tamamlandı',
    'LBL_AJAX_LOADING_TITLE' => 'Proses davam edir...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Zəhmət olmasa gözləyin, yüklənir...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Bu paketi silmək istədiyinizə əminsiniz? Bu, bu paketlə əlaqəli bütün faylları həmişəlik siləcək.',
    'LBL_JS_REMOVE_MODULE' => 'Bu modulu silmək istədiyinizə əminsiniz? Bu, bu modulla əlaqəli bütün faylları həmişəlik siləcək.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Studiyada etdiyiniz hər hansı fərdiləşdirmələr bu modul yenidən yerləşdirildikdə üzərinə yazılacaq. Davam etmək istədiyinizə əminsiniz?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Paketin Yerləşdirilməsi',
    'LBL_JS_VALIDATE_NAME' => 'Ad - Alfasayısal olmalı, hərflə başlamalı və boşluq olmamalıdır.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Paket adı artıq mövcuddur',
    'LBL_JS_VALIDATE_KEY' => 'Açar - alfasayısal olmalı, hərflə başlamalı və boşluq olmamalıdır.',
    'LBL_JS_VALIDATE_LABEL' => 'Zəhmət olmasa, bu modul üçün Görünən Ad kimi istifadə olunacaq etiketi daxil edin',
    'LBL_JS_VALIDATE_TYPE' => 'Zəhmət olmasa yuxarıdakı siyahıdan qurmaq istədiyiniz modul növünü seçin',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiket - lütfən, alt panelin üstündə göstəriləcək etiket əlavə edin',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Bu xüsusi sahənin silinməsi həm fərdi sahəni, həm də verilənlər bazasındakı xüsusi sahə ilə əlaqəli bütün məlumatları siləcək. Sahə artıq heç bir modul tərtibatında görünməyəcək. \\n\\nDavam etmək istəyirsiniz?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Bu əlaqəni silmək istədiyinizə əminsiniz?',
    'LBL_CONFIRM_DONT_SAVE' => 'Son dəfə yadda saxladığınızdan bəri dəyişikliklər edilib, saxlamaq istərdinizmi?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Dəyişikliklər saxlanılsın?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data kəsilə bilər və bunu geri qaytarmaq mümkün deyil, davam etmək istədiyinizə əminsiniz?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Sahəyə daxil ediləcək məlumatların növünə əsasən müvafiq məlumat növünü seçin.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Bəli</b>: Sahə idxal əməliyyatına daxil ediləcək.<br><b>Xeyr</b>: Sahə idxala daxil edilməyəcək.<br><b>Tələb olunur</b>: Sahə üçün dəyər istənilən idxalda təmin edilməlidir.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Genişlik dəyərini piksellərlə yazın.<br> Yüklənmiş şəkil bu enə miqyaslanacaq.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Hündürlük dəyərini piksellərlə yazın.<br> Yüklənmiş şəkil bu hündürlüyə qədər ölçülənəcək.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Aktivdir</b>: Sahə Dublikatları Birləşdirmə funksiyasında görünəcək, lakin Dublikatları Tap funksiyasında filtr şərtləri üçün istifadə etmək mümkün olmayacaq.<br><b>Deaktivdir</b>: Sahə Dublikatları Birləşdirmə funksiyasında görünməyəcək və Dublikatları Tap funksiyasında filtr şərtləri üçün istifadə etmək mümkün olmayacaq.<br><b>Filtr</b>: Sahə Dublikatları Birləşdirmə funksiyasında görünəcək və Dublikatları Tap funksiyasında filtr şərtləri üçün istifadə etmək mümkün olacaq.<br><b>Defolt seçilmiş filtr</b>: Sahə Dublikatları Birləşdirmə funksiyasında görünəcək və Dublikatları Tap funksiyasındakı filtr şərtləri üçün defolt olaraq istifadə ediləcək.<br><b>Yalnız filtr</b>: Sahə Dublikatları Birləşdirmə funksiyasında görünməyəcək, lakin Dublikatları Tap funksiyasında filtr şərtləri üçün istifadə etmək mümkün olacaq.',

//Revert Module labels
    'LBL_RESET' => 'Sıfırla',
    'LBL_RESET_MODULE' => 'Modulu sıfırla',
    'LBL_REMOVE_CUSTOM' => 'Fərdiləşdirmələri silin',
    'LBL_CLEAR_RELATIONSHIPS' => 'Aydın əlaqələr',
    'LBL_RESET_LABELS' => 'Etiketləri sıfırla',
    'LBL_RESET_LAYOUTS' => 'Tərtibatları sıfırla',
    'LBL_REMOVE_FIELDS' => 'Xüsusi Sahələri Sil',
    'LBL_CLEAR_EXTENSIONS' => 'Genişləndirmələri təmizləyin',
    'LBL_HISTORY_TIMESTAMP' => 'Vaxt möhürü',
    'LBL_HISTORY_TITLE' => ' tarixçə',

    'fieldTypes' => array(
        'varchar' => 'Mətn sahəsi',
        'int' => 'Tam ədəd',
        'float' => 'Kəsr',
        'bool' => 'Yoxlama qutusu',
        'enum' => 'Açılan menyu',
        'dynamicenum' => 'Dinamik açılan menyu',
        'multienum' => 'Çox seçimli',
        'date' => 'Tarix',
        'phone' => 'Telefon',
        'currency' => 'Valyuta',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Bağlamaq',
        'address' => 'Ünvan',
        'text' => 'Mətn sahəsi',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Tarix vaxt',
        'decimal' => 'Onluq',
        'image' => 'Şəkil',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Tez-tez istifadə olunan etiketlər",
        "all" => "Bütün etiketlər",
    ),

    'parent' => 'Çevik əlaqələr',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Siz açılan siyahıdan silmək üçün bu elementi seçirsiniz. Bu siyahıdan bu elementi dəyər kimi istifadə edən hər hansı açılan sahələr artıq dəyəri göstərməyəcək və dəyər daha açılan sahələrdən seçilə bilməyəcək. Davam etmək istədiyinizə əminsiniz?",

    'LBL_ALL_MODULES' => 'Bütün modullar',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (əlaqəli {1} ID)',
);
