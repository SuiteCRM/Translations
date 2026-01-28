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
    'LBL_LOADING' => 'Memuat' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Sembunyikan Pilihan' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Hapus' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Berikan Nama untuk paket tersebut. Nama yang Anda masukkan harus alfanumerik dan tidak berisi spasi. (Contoh: HR_Management) Anda dapat memberikan karangan dan Deskripsi informasi untuk paket. Klik Save untuk membuat paket.',
            'modify' => 'Properties dan kemungkinan tindakan untuk Paket muncul di sini. Anda dapat memodifikasi Nama, Pengarang dan Deskripsi dari paket, serta melihat dan menyesuaikan semua modul yang terdapat dalam paket. Klik Modul Baru untuk membuat modul paket. Jika paket berisi setidaknya satu modul, Anda dapat Mempublikasikan dan menyebarkan paket, serta memnyesuaikan Ekspor yang dibuat dalam paket. ',
            'name' => 'Ini adalah Nama dari paket saat ini. Nama yang Anda masukkan harus alfanumerik, mulailah dengan surat dan tidak mengandung spasi. (Contoh: HR_Management) ',
            'author' => 'Ini adalah Pengarang yang ditampilkan sewaktu instalasi sebagai nama entitas yang menciptakan paket. Penulis dapat berupa perorangan atau perusahaan. ',
            'description' => 'Ini adalah Keterangan dari paket yang ditampilkan sewaktu instalasi.',
            'publishbtn' => 'Klik Publish untuk menyimpan semua data masuk dan untuk membuat file. zip yang merupakan versi diinstal paket. Gunakan Modul Loader untuk meng-upload file. zip dan menginstal paket. ',
            'deploybtn' => 'Klik Deploy untuk menyimpan semua data entry dan untuk menginstal paket, termasuk semua modul, dalam contoh saat ini.',
            'duplicatebtn' => 'Klik duplicate untuk menyalin isi dari paket ke paket baru dan untuk menampilkan paket baru. Untuk paket baru, nama baru akan dihasilkan secara otomatis dengan menambahkan nomor ke akhir nama dari paket yang digunakan untuk membuat yang baru. Anda dapat mengubah nama paket baru dengan memasukkan Nama baru dan mengklik Simpan. ',
            'exportbtn' => 'Klik Export untuk membuat file. zip yang berisi penyesuaian yang dibuat dalam paket. file yang dihasilkan bukan merupakan versi diinstal paket. Gunakan Modul Loader untuk mengimpor file. zip dan untuk memiliki paket, termasuk kustomisasi, muncul dalam Modul Builder. ',
            'deletebtn' => 'Klik delete untuk menghapus paket ini dan semua file yang berhubungan dengan paket ini.',
            'savebtn' => 'Klik save untuk menyimpan semua data yang dimasukkan berkaitan dengan paket.',
            'existing_module' => 'Klik Module icon untuk mengedit dan menyesuaikan properti Field, relationship dan layout yang terkait dengan modul.',
            'new_module' => 'Klik New Module akan digunakan untuk prefiks semua direktori, nama kelas dan tabel database untuk semua modul dalam paket saat ini. Tombol ini digunakan dalam upaya untuk mencapai keunikan nama tabel. ',
            'key' => 'Huruf 5 huruf ini, alfanumerik <b>Kunc</b> akan digunakan untuk awalan semua direktori, nama kelas dan tabel database untuk semua modul dalam paket saat ini.<br><br>Kunci digunakan dalam upaya untuk mencapai keunikan nama tabel.',
            'readme' => 'Klik add Readme text untuk paket ini. Readme akan tersedia pada saat instalasi.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Berikan <b>Name</b> untuk modul ini. <b>Label</b> yang Anda berikan akan muncul di tab navigasi. <br/><br/>Pilih untuk menampilkan tab navigasi untuk modul dengan mencentang kotak <b>Tab Navigasi</b> checkbox.<br/><br/>Kemudian pilih jenis modul yang ingin Anda buat. <br/><br/>Pilih jenis template. Setiap template berisi kumpulan bidang tertentu, serta tata letak yang telah ditentukan sebelumnya, untuk digunakan sebagai dasar untuk modul Anda. <br/><br/>Click <b>Save</b> untuk membuat modul.',
            'modify' => 'Anda dapat mengubah properti modul atau menyesuaikan bidang <b>Fields</b>, <b>Hubungan</b> and <b>Layouts</b> yang terkait dengan modul.',
            'importable' => 'Memeriksa importable Checkbox akan mengimpor untuk mengaktifkan modul ini. Sebuah link ke Import Wizard akan muncul di panel shortcut dalam modul. Wizard Impor memfasilitasi impor data source dari eksternal ke modul Custom. ',
            'team_security' => 'Memeriksa Tim Security kotak centang akan mengaktifkan keamanan tim untuk modul ini. tim keamanan Jika diaktifkan, Field pilihan Tim akan ditampilkan dalam catatan dalam modul ',
            'reportable' => 'Memeriksa kotak ini akan memungkinkan modul ini untuk mendapatkan laporan dijalankan terhadap itu.',
            'assignable' => 'Memeriksa kotak ini akan memungkinkan catatan dalam modul ini akan ditugaskan untuk pengguna yang dipilih.',
            'has_tab' => 'Memeriksa Navigasi Tab akan menyediakan tab untuk navigasi modul.',
            'acl' => 'Memeriksa kotak ini akan memungkinkan Kontrol akses pada modul ini, termasuk Field Level Security.',
            'studio' => 'Memeriksa kotak ini akan memungkinkan administrator untuk mengkustomisasi modul ini dalam Studio.',
            'audit' => 'Memeriksa kotak ini akan memungkinkan Audit untuk modul ini. Perubahan pada Field tertentu akan dicatat sehingga administrator dapat memeriksa Histori perubahan. ',
            'viewfieldsbtn' => 'Klik Lihat Fields untuk melihat Field yang berhubungan dengan modul dan untuk membuat dan mengedit kolom kustom.',
            'viewrelsbtn' => 'Klik Lihat Hubungan untuk melihat hubungan yang berkaitan dengan modul ini dan untuk menciptakan hubungan baru.',
            'viewlayoutsbtn' => 'Klik Lihat Layouts untuk melihat layout untuk modul dan untuk menyesuaikan pengaturan kolom dalam layout.',
            'duplicatebtn' => 'Klik <b>Duplika</b> untuk menyalin properti modul ke modul baru dan untuk menampilkan modul baru. <br/><br/>Untuk modul baru, nama baru akan dibuat secara otomatis dengan menambahkan nomor ke akhir nama modul yang digunakan untuk membuat yang baru.',
            'deletebtn' => 'Klik <b>Hapus</b> untuk menghapus modul ini.',
            'name' => 'Ini adalah <b>Name</b> dari modul saat ini.<br/><br/>Nama harus huruf alfanumerik dan harus dimulai dengan huruf dan tidak mengandung spasi. (Contoh: HR_Management)',
            'label' => 'Ini adalah Label yang akan muncul di tab untuk navigasi modul. ',
            'savebtn' => 'Klik <b>Save</b> untuk menyimpan semua data yang dimasukkan yang terkait dengan modul.',
            'type_basic' => 'menyediakan jenis template Field dasar, seperti Nama, Diberikan pada, Tim, Tanggal Dibuat dan Deskripsi Field.',
            'type_company' => 'Perusahaan menyediakan jenis template organisasi-Field tertentu, seperti Nama Perusahaan, Industri, dan Penagihan Alamat. Gunakan template ini untuk membuat modul yang sama Account standar modul. ',
            'type_issue' => 'Masalah menyediakan jenis template case-dan bug-field tertentu, seperti Nomor, Status, Prioritas dan Description. Gunakan template ini untuk membuat modul yang serupa dengan standar dan Bug Tracker Kasus modul. ',
            'type_person' => 'menyediakan jenis template individu-Field tertentu, seperti Penghormatan, Judul, Nama, Alamat dan Nomer Telepon. Gunakan template ini untuk membuat modul yang serupa dengan standar Leads Kontak dan modul. ',
            'type_sale' => 'Penjualan jenis template yang memberikan Peluang Bidang spesifik, seperti Lead Source, Stage, Jumlah dan Probabilitas. Gunakan template ini untuk membuat modul yang serupa dengan modul Peluang standar. ',
            'type_file' => 'menyediakan template Dokumen field tertentu, seperti Nama File, jenis dokumen, dan mempublikasikan Tanggal. Gunakan template ini untuk membuat modul yang serupa dengan Dokumen standar modul. ',

        ),
        'dropdowns' => array(
            'default' => 'Semua dropdown  untuk aplikasi yang terdaftar di sini. dropdown dapat digunakan untuk dropdown Field dalam setiap modul. Untuk membuat perubahan pada menu dropdown yang ada, klik pada nama dropdown. Klik Tambahkan Dropdown untuk membuat drop-down yang baru. ',
            'editdropdown' => 'Dropdown daftar dapat digunakan untuk standar atau Field dropdown Custom dalam setiap modul. Menyediakan Nama untuk Daftar dropdown. Jika ada paket bahasa yang diinstal di aplikasi, Anda dapat memilih Bahasa untuk digunakan ke daftar item. Dalam Nama Barang, memberikan nama untuk pilihan dalam daftar drop-down. Nama ini tidak akan muncul dalam daftar drop-down yang dapat dilihat oleh pengguna. Dalam Tampilan Label, memberikan label yang akan terlihat oleh pengguna. Setelah memberikan nama item dan menampilkan label, klik Add untuk menambahkan item ke daftar dropdown. Untuk menyusun ulang item dalam daftar, drag dan drop item ke posisi yang dikehendaki. Untuk mengedit tampilan label item, klik icon Edit, dan masukkan sebuah label baru. Untuk menghapus item dari daftar dropdown, klik Delete Icon. Untuk membatalkan perubahan yang dibuat untuk sebuah Penampilan label, klik Undo. Mengulang perubahan yang dibatalkan, klik Redo. Klik Save untuk menyimpan daftar dropdown. ',

        ),
        'subPanelEditor' => array(
            'modify' => 'Semua bidang yang bisa ditampilkan di <b>Subpanel</b> muncul disini.<br><br>The <b>Default</b> kolom berisi bidang yang ditampilkan di Subpanel.<br/><br/>The <b>Hidden</b> kolom berisi bidang yang dapat ditambahkan ke kolom Default.'
        ,
            'savebtn' => 'Klik <b>Save & Deploy</b> untuk menyimpan perubahan yang Anda buat dan membuatnya aktif dalam modul.',
            'historyBtn' => 'Klik Lihat Histori untuk melihat dan memulihkan layout yang sudah disimpan sebelumnya dari Histori.',
            'historyDefault' => 'Klik <b>Restore Default</b> untuk restore view ke layout original.',
            'Hidden' => 'field  Tersembunyi tidak muncul dalam subpanel.',
            'Default' => 'Default Field muncul di subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Semua bidang yang dapat ditampilkan d <b>ListView</b> muncul di sini.<br><br>Kolom <b>Default</b> berisi bidang yang ditampilkan di ListView secara default.<br/><br/>Kolom <b>Available</b> berisi bidang yang dapat dipilih pengguna di Search untuk membuat ListView kustom. <br/><br/>Kolom <b>Hidden</b> berisi kolom yang dapat ditambahkan ke kolom Default atau Available.'
        ,
            'savebtn' => 'Klik <b>Save & Deploy</b> untuk menyimpan perubahan yang Anda buat dan membuatnya aktif dalam modul.',
            'historyBtn' => 'Klik <b>Riwayat Tampilan</b> untuk melihat dan mengembalikan tata letak yang tersimpan sebelumnya dari riwayat.<br><br><b>Pulihkan</b> dalam <b>Riwayat Tampilan</b> mengembalikan penempatan lapangan dalam layout yang telah disimpan sebelumnya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'historyDefault' => 'Klik <b>Kembalikan Default</b> untuk mengembalikan tampilan ke tata letak aslinya.<br><br><b>Kembalikan Default</b> hanya mengembalikan penempatan lapangan di dalam tata letak aslinya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'Hidden' => '<b>Tersembunyi</b> yang saat ini tidak tersedia bagi pengguna untuk dilihat di ListViews.',
            'Available' => '<b>Available</b> field tidak ditampilkan secara default, namun bisa ditambahkan ke ListViews oleh pengguna.',
            'Default' => '<b>Default</b> muncul di ListViews yang tidak disesuaikan oleh pengguna.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Semua bidang yang dapat ditampilkan di <b>ListView</b> muncul di sini.<br><br>Kolom<b>Default</b> berisi bidang yang ditampilkan di ListView secara default.<br/><br/> Kolom <b>Tersembunyi</b> berisi kolom yang dapat ditambahkan ke kolom Default atau Available.'
        ,
            'savebtn' => 'Klik <b>Save & Deploy</b> untuk menyimpan perubahan yang Anda buat dan membuatnya aktif dalam modul.',
            'historyBtn' => 'Klik <b>Riwayat Tampilan</b> untuk melihat dan mengembalikan tata letak yang tersimpan sebelumnya dari riwayat.<br><br><b>Pulihkan</b> dalam <b>Riwayat Tampilan</b> mengembalikan penempatan lapangan dalam layout yang telah disimpan sebelumnya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'historyDefault' => 'Klik <b>Kembalikan Default</b> untuk mengembalikan tampilan ke tata letak aslinya.<br><br><b>Kembalikan Default</b> hanya mengembalikan penempatan lapangan di dalam tata letak aslinya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'Hidden' => '<b>Tersembunyi</b> yang saat ini tidak tersedia bagi pengguna untuk dilihat di ListViews.',
            'Default' => '<b>Default</b> muncul di ListViews yang tidak disesuaikan oleh pengguna.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Semua bidang yang dapat ditampilkan dalam bentuk <b>Perbahrui</b> muncul di sini.<br><br>Kolom <b>Default</b> berisi kolom yang akan ditampilkan di form Pencarian.<br/><br/>Kolom <b>Tersembunyi</b> berisi kolom yang tersedia untuk Anda sebagai admin untuk ditambahkan ke formulir Pencarian.'
        ,
            'savebtn' => 'Mengklik <b>Save & Deploy</b> akan menyimpan semua perubahan dan membuatnya aktif',
            'Hidden' => '<b>Hidden</b> tidak muncul di Search.',
            'historyBtn' => 'Klik <b>Riwayat Tampilan</b> untuk melihat dan mengembalikan tata letak yang tersimpan sebelumnya dari riwayat.<br><br><b>Pulihkan</b> dalam <b>Riwayat Tampilan</b> mengembalikan penempatan lapangan dalam layout yang telah disimpan sebelumnya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'historyDefault' => 'Klik <b>Kembalikan Default</b> untuk mengembalikan tampilan ke tata letak aslinya.<br><br><b>Kembalikan Default</b> hanya mengembalikan penempatan lapangan di dalam tata letak aslinya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'Default' => '<b>Default</b> muncul di Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Layout ini mengandung Field yang sedang ditampilkan dalam DetailView. Toolbox berisi Recycle Bin dan Field-Field dan tata letak elemen-elemen yang dapat ditambahkan ke dalam layout. Buat perubahan pada tata letak dengan menyeret dan menjatuhkan unsur dan Field-Field antara Toolbox dan Layout di dalam tata letak itu sendiri. Untuk menghapus sebuah field dari tata letak, tarik field Recycle Bin. Field akan tersedia dalam Toolbox untuk menambah tata letak. ',
            'defaultquickcreate' => 'Layout ini mengandung Field yang sedang ditampilkan dalam bentuk Quickcreate. Bentuk QuickCreate muncul di subpanels untuk Buat modul ketika tombol diklik. Toolbox berisi Recycle Bin dan Field-Field dan tata letak elemen-elemen yang dapat ditambahkan ke tata letak. Buat perubahan pada tata letak dengan menyeret dan menjatuhkan unsur dan Field-Field antara Toolbox dan Layout di dalam tata letak itu sendiri. Untuk menghapus sebuah field dari tata letak, tarik Field Recycle Bin. Field akan tersedia dalam Toolbox untuk menambah tata letak.',
            //this default will be used for edit view
            'default' => 'Area <b>Layout</b> berisi bidang yang saat ini ditampilkan dalam <b>EditView</b>.<br/><br/>Kotak <b>Toolbox</b> berisi <b>Recycle Bin</b> dan bidang dan elemen tata letak yang dapat ditambahkan ke tata letak.<br><br>Membuat perubahan pada tata letak dengan menyeret dan menjatuhkan elemen dan bidang antara <b>Kotak Alat</b> dan <b>Layout</b> dan di dalam tata letak itu sendiri.<br><br>Untuk menghapus bidang dari tata letak, seret field ke <b>Recycle Bin</b>. Ladang kemudian akan tersedia di Toolbox untuk ditambahkan ke tata letak.',
            'saveBtn' => 'Klik Simpan untuk menyimpan perubahan yang Anda buat ke tata letak sejak terakhir kali Anda menyimpannya. Perubahan tidak akan ditampilkan di modul sampai Anda mengerahkan perubahan yang disimpan. ',
            'historyBtn' => 'Klik <b>Riwayat Tampilan</b> untuk melihat dan mengembalikan tata letak yang tersimpan sebelumnya dari riwayat.<br><br><b>Pulihkan</b> dalam <b>Riwayat Tampilan</b> mengembalikan penempatan lapangan dalam layout yang telah disimpan sebelumnya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'historyDefault' => 'Klik <b>Kembalikan Default</b> untuk mengembalikan tampilan ke tata letak aslinya.<br><br><b>Kembalikan Default</b> hanya mengembalikan penempatan lapangan di dalam tata letak aslinya. Untuk mengganti label lapang, klik ikon Edit di sebelah setiap bidang.',
            'publishBtn' => 'Klik Simpan & deploy untuk menyimpan semua perubahan yang Anda buat ke tata letak sejak terakhir kali Anda simpan itu, dan untuk membuat perubahan aktif dalam modul. Layout akan segera ditampilkan di modul. ',
            'toolbox' => 'Toolbox berisi Recycle Bin, tambahan elemen tata letak dan himpunan Field yang tersedia untuk ditambahkan ke tata letak. Tata letak unsur dan Field dalam Toolbox dapat menyeret dan menjatuhkan ke dalam tata letak, dan tata letak unsur-unsur dan Field dapat menyeret dan menjatuhkan dari layout ke Toolbox. unsur tata letak Panel dan Baris. Menambahkan baris baru atau panel baru untuk memberikan tambahan tata letak lokasi dalam layout untuk Field. Drag dan drop salah satu Field dalam tata letak peralatan atau ke Field yang menempati posisi untuk menukar lokasi kedua Field ini. Filler menciptakan ruang kosong dalam tata letak di mana ia ditempatkan. ',
            'panels' => 'Daerah ini menunjukkan bagaimana tata letak Anda akan terlihat bagi pengguna modul ini bila depolyed <br/> <br/> Anda dapat mereposisi unsur-unsur seperti ladang, baris dan panel dengan menyeret dan menjatuhkan mereka;. menghapus elemen dengan menyeret dan menjatuhkan mereka pada daerah sampah di kotak peralatan, atau menambahkan elemen baru dengan menyeret mereka dari toolbox dan menjatuhkan mereka ke dalam tata letak posisi yang diinginkan.',
            'delete' => 'Drag dan drop elemen apapun di sini untuk melepasnya dari layout',
            'property' => 'Edit label ditampilkan untuk Field ini. Tab Order kontrol dalam urutan tombol tab beralih di antara kolom. ',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Fields</b> yang tersedia untuk modul dicantumkan di sini oleh Field Name.<br><br>Bidang khusus yang dibuat untuk modul muncul di atas bidang yang tersedia untuk modul secara default.<br><br>Untuk mengedit field, klik <b>Field Name</b>.<br/><br/>Untuk membuat field baru, klik <b>Add Field</b>.',
            'mbDefault' => 'Field yang tersedia untuk modul ditampilkan di sini dengan Nama Field. Untuk konfigurasi label Field template, klik Nama Field. Untuk membuat Field baru, klik Tambah Field. Label bersama dengan sifat-sifat lain Field baru dapat diedit setelah penciptaan dengan mengklik Nama Field. Setelah modul tersebut digunakan, Field baru yang dibuat dalam Modul Builder dianggap sebagai standar dikerahkan Field dalam modul di Studio. ',
            'addField' => 'Pilih sebuah Data Type untuk Field baru. Jenis yang Anda pilih akan menentukan karakter seperti apa yang dapat dimasukkan untuk Field. Sebagai contoh, hanya angka bilangan bulat yang dapat dimasukkan ke dalam kolom yang dari tipe data Integer. Menyediakan Nama untuk Field. Nama harus alfanumerik dan tidak boleh berisi spasi. Menegaskan adalah valid. Tampilan Label adalah label yang akan muncul untuk kolom-kolom pada tata letak modul. Sistem Label digunakan untuk mengacu pada kode Field. Tergantung pada tipe data yang dipilih untuk Field, beberapa atau semua properti berikut dapat ditugaskan untuk Field: Bantuan Teks muncul sementara sementara pengguna melayang-layang di atas Field dan dapat digunakan untuk meminta pengguna untuk jenis input yang diinginkan. Komentar Teks hanya dilihat dalam Studio atau Modul Builder, dan dapat digunakan untuk menggambarkan Field untuk administrator. Nilai Default akan muncul di Field. Pengguna dapat memasukkan nilai baru dalam Field atau menggunakan nilai default. Pilih Massa Pembaruan kotak centang agar dapat menggunakan fitur ini untuk Misa Update Field. <Br > <br> <b> Max Size </ b> nilai menentukan jumlah maksimal karakter yang dapat dimasukkan dalam Field. <br> <br> Pilih <b> Required Field </ b> kotak centang untuk membuat Field diperlukan. Sebuah nilai harus disediakan untuk Field agar dapat menyimpan catatan berisi kolom. <br> <br> Pilih <b> dilaporkan </ b> kotak centang untuk memungkinkan Field digunakan untuk filter dan untuk menampilkan data dalam Laporan. <br> <br> Pilih <b> Audit </ b> kotak centang agar dapat melacak perubahan ke Field dalam Change Log. <br> <br> Tentukan pilihan dalam <b> didatangkan </ b> untuk membolehkan, melarang atau memerlukan Field yang akan diimpor ke dalam Import Wizard. <br> <br> Pilih salah satu pilihan dalam Gandakan <b> Merge </ b> untuk mengaktifkan atau Duplikat menonaktifkan Gabung dan Cari Duplikat fitur. <br> <br> properti tambahan dapat ditugaskan untuk tipe data tertentu. ',
            'editField' => 'Properti dari field ini bisa diubah.<br><br>Klik <b>Clone</b> untuk membuat field baru dengan properti yang sama.',
            'mbeditField' => 'Tampilan Label dari Field template dapat disesuaikan. Sifat-sifat yang lain Field tidak bisa disesuaikan. Klik Clone untuk membuat Field baru dengan sifat-sifat yang sama. Untuk menghapus template Field sehingga tidak menampilkan dalam modul, keluarkan dari Field yang sesuai Layouts.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customisasi ekspor yang dilakukan di Studio dengan membuat paket yang dapat diunggah ke instance lain SuiteCRM melalui <b>Modul Loader</b>.<br><br>Pertama, berikan <b>Nama Paket</b>. Anda dapat memberikan informasi <b>Author</b> dan <b>Description</b> untuk paket juga.<br><br>Pilih modul(s) yang berisi penyesuaian yang ingin Anda ekspor. Hanya modul yang berisi penyesuaian yang akan muncul untuk Anda pilih.<br><br>Kemudian klik <b>Ekspor</b> untuk membuat file .zip untuk paket yang berisi penyesuaian.',
            'exportCustomBtn' => 'Klik Ekspor untuk membuat file. zip untuk paket berisi kustomisasi yang ingin Anda ekspor.',
            'name' => 'Ini adalah <b>Nama</b> dari paket. Nama ini akan ditampilkan saat instalasi.',
            'author' => 'Ini adalah <b>Penulis</b> yang ditampilkan saat instalasi sebagai nama entitas yang membuat paket. Penulis bisa berupa seseorang atau perusahaan.',
            'description' => 'Ini adalah Keterangan dari paket yang ditampilkan sewaktu instalasi.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Selamat datang di area Developer Tools. Gunakan alat dalam Field ini untuk membuat dan mengelola standar, custom modul dan Field. ',
            'studioBtn' => 'Gunakan Studio untuk menyesuaikan modul terkirim.',
            'mbBtn' => 'Gunakan Modul Builder untuk membuat modul baru.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Gunakan Dropdown Editor untuk menambah dan mengedit dropdown global untuk dropdown Field.',
            'appBtn' => 'Mode Aplikasi adalah di mana Anda dapat menyesuaikan berbagai Propeti program, seperti berapa banyak TPS laporan yang ditampilkan di homepage',
            'backBtn' => 'Kembali ke langkah sebelumnya.',
            'studioHelp' => 'Gunakan Studio untuk menentukan apa dan bagaimana informasi yang ditampilkan dalam modul.',
            'moduleBtn' => 'Klik untuk mengedit modul ini.',
            'moduleHelp' => 'Komponen-komponen yang Anda dapat sesuaikan untuk modul muncul di sini. Klik sebuah ikon untuk memilih komponen yang akan diedit.',
            'fieldsBtn' => 'Membuat dan menyesuaikan Fields untuk menyimpan informasi di modul.',
            'labelsBtn' => 'Edit Labels yang menampilkan untuk Field dan judul-judul lain dalam modul.',
            'relationshipsBtn' => 'Tambah baru atau melihat relationship yang ada untuk modul.',
            'layoutsBtn' => 'Menyesuaikan modul Layouts. layout adalah tampilan yang berbeda dari contaning modul Field. Anda dapat menentukan Field yang muncul dan bagaimana mereka terorganisir dalam setiap layout. ',
            'subpanelBtn' => 'Tentukan Field yang muncul di Subpanels  pada modul.',
            'portalBtn' => 'Sesuaikan modul <b>Layouts</b> yang muncul di <b>Portal SuiteCRM</b>.',
            'layoutsHelp' => 'Modul Layouts yang dapat disesuaikan muncul di sini. tata letak Field dan data Field. Klik sebuah ikon untuk memilih tata letak untuk mengedit. ',
            'subpanelHelp' => 'Subpanels dalam modul yang dapat disesuaikan muncul di sini. Klik sebuah ikon untuk memilih modul untuk mengedit.',
            'newPackage' => 'Klik Paket Baru untuk membuat paket baru.',
            'exportBtn' => 'Klik Ekspor kustomisasi untuk membuat dan men-download paket berisi penyesuaian yang dibuat di Studio untuk modul tertentu.',
            'mbHelp' => 'Gunakan Modul Builder untuk membuat paket berisi modul custom berdasarkan standar atau benda kustom.',
            'viewBtnEditView' => 'Sesuaikan modul EditView layout. EditView adalah bentuk input yang berisi kolom untuk menangkap data yang dimasukkan pengguna. ',
            'viewBtnDetailView' => 'Sesuaikan modul DetailView layout. DetailView pengguna memasuki menampilkan data Field. ',
            'viewBtnDashlet' => 'Sesuaikan Dashlet <b>SuiteCRM</b>, termasuk ListView Listlist dan ListViewClassCRM.<br><br>Dashlet SuiteCRM akan tersedia untuk ditambahkan ke halaman-halaman di modul Home.',
            'viewBtnListView' => 'Sesuaikan modul ListView layout. hasil pencarian muncul di ListView. ',
            'searchBtn' => 'Sesuaikan modul Cari ayout. Tentukan Field apa yang dapat digunakan untuk menyaring catatan yang muncul di ListView. ',
            'viewBtnQuickCreate' => 'Sesuaikan modul QuickCreate layout.  QuickCreate muncul dalam bentuk dan di subpanels Email modul. ',
            'addLayoutHelp' => "Untuk membuat tata letak khusus untuk Grup Keamanan, pilih Grup Keamanan yang sesuai dan tata letak tempat menyalin dari sebagai titik awal.",
            'searchHelp' => 'Bentuk <b>Pencarian</b> yang dapat disesuaikan muncul di sini.<br><br>Cari formulir berisi bidang untuk penyaringan catatan.<br><br>Klik ikon untuk memilih tata letak pencarian yang akan diedit.',
            'dashletHelp' => 'Tata letak <b>SuiteCRM Dashlet</b> yang dapat disesuaikan muncul di sini.<br><br>Dermaga SuiteCRM akan tersedia untuk ditambahkan ke halaman-halaman di modul Home.',
            'DashletListViewBtn' => '<b>Daftar Dashlet SuiteCRM</b> menampilkan catatan berdasarkan filter pencarian Sampah SuiteCRM.',
            'DashletSearchViewBtn' => '<b>Pencarian Dashlet SuiteCRM</b> menyaring catatan untuk daftar tontonan SuiteCRM Dashlet.',
            'popupHelp' => 'Layout <b>Popup</b> yang bisa dikustomisasi, ditampilkan di sini.<br>',
            'PopupListViewBtn' => '<b>Popup ListView</b> menampilkan record berdasarkan Popup search views.',
            'PopupSearchViewBtn' => '<b>Popup Search</b> menampilkan record untuk Popup listview.',
            'BasicSearchBtn' => 'Sesuaikan bentuk <b>Filter Cepat</b> yang muncul di tab Filter Cepat di area Pencarian untuk modul.',
            'AdvancedSearchBtn' => 'Sesuaikan bentuk <b>Filter Lanjutan</b> yang muncul di tab Pencarian Lanjutan di area Pencarian untuk modul.',
            'portalHelp' => 'Kelola dan sesuaikan <b>Portal SuiteCRM</b>.',
            'SPUploadCSS' => 'Upload <b>Style Sheet</b> untuk Portal SuiteCRM.',
            'SPSync' => '<b>Sinkronisasi</b> penyesuaian ke contoh PortalCRM Portal.',
            'Layouts' => 'Sesuaikan <b>Layouts</b> modul PortalCRCR Portal.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Semua Hubungan yang ada antara modul dan modul dikerahkan lain muncul di sini. Nama Relationship adalah sistem yang dihasilkan untuk nama hubungan. Primer Modul adalah modul yang memiliki hubungan. Sebagai contoh, semua Properti yang terkait dengan Account modul adalah modul utama disimpan dalam Account tabel database. Type adalah jenis hubungan yang ada antara modul utama dan modul terkait. Klik judul kolom untuk mengurutkan berdasarkan kolom. Klik baris dalam hubungan tabel untuk melihat properti yang berkaitan dengan Realtionship. Klik add Relationship untuk membuat hubungan baru. Hubungan dapat dibuat antara dua modul yang dikerahkan. ',
            'relationshipHelp' => 'Hubungan dapat dibuat antara modul dan modul lain dikerahkan. Hubungan secara visual diungkapkan melalui subpanels dan Field yang terkait dalam catatan modul. Pilih salah satu dari hubungan berikut Jenis untuk modul: satu Kedua modul catatan akan berisi Field-Field terkait. Satu-ke-Banyak Modul utama akan berisi catatan subpanel, dan Modul terkait catatan akan berisi Field terkait. Banyak-ke-Banyak Kedua modul catatan akan ditampilkan subpanels. Pilih Modul terkait untuk hubungan. Jika jenis hubungan melibatkan subpanels, pilih subpanel tampilan untuk modul-modul yang sesuai. Klik Simpan untuk menciptakan hubungan. ',
            'convertLeadHelp' => 'Di sini Anda dapat menambahkan modul ke layar tata letak konversi dan memodifikasi tata letak yang sudah ada.<br/>
		Anda dapat memesan ulang modul dengan menyeret baris mereka di tabel.<br/><br/>
		<b>Module:</b> Nama modulnya.<br/><br/>
		<b>Required:</b> Modul yang dibutuhkan harus dibuat atau dipilih sebelum timbal dapat dikonversi.<br/><br/>
		<b>Copy Data:</b> Jika dicentang, bidang dari timbal akan disalin ke bidang dengan nama yang sama di catatan yang baru dibuat.<br/><br/>
		<b>Allow Selection:</b> Modul dengan bidang relasi dalam Kontak dapat dipilih daripada dibuat selama proses pengubahan prospek.<br/><br/>
		<b>Edit:</b> Ubah tata letak konversi untuk modul ini.<br/><br/>
		<b>Delete:</b> Hapus modul ini dari layout convert.<br/><br/>',


            'editDropDownBtn' => 'Edit Dropdown global',
            'addDropDownBtn' => 'Tambah Dropdown global baru',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Fields</b> dalam modul tercantum di sini oleh Field Name.<br><br>Template modul mencakup kumpulan bidang yang telah ditentukan sebelumnya.<br><br>Untuk membuat bidang baru, klik <b>Add Field</b>.<br><br>Untuk mengedit kolom, klik <b>Field Name</b>.<br/><br/>Setelah modul dikerahkan, bidang baru yang dibuat di Modul Builder, bersama dengan bidang template, dianggap sebagai bidang standar di Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => '<b>Relationships</b> yang telah dibuat antara modul dan modul lainnya muncul di sini.<br><br>The relationship <b>Name</b> adalah nama yang dihasilkan sistem untuk hubungan tersebut.<br><br>The <b>Primary Module</b> adalah modul yang memiliki hubungan. Properti hubungan disimpan dalam tabel database yang termasuk dalam modul utama.<br><br>The <b>Type</b> adalah jenis hubungan yang ada antara modul Primer dan <b>Related Module</b>.<br><br>Klik judul kolom untuk mengurutkan menurut kolom.<br><br>Klik baris di tabel hubungan untuk melihat dan mengedit properti yang terkait dengan hubungan.<br><br>Click <b>Add Relationship</b> untuk menciptakan sebuah hubungan baru.',
            'addrelbtn' => 'mouse ke bantuan untuk hubungan menambahkan .',
            'addRelationship' => 'Hubungan dapat dibuat antara modul dan kebiasaan lain modul atau modul yang digunakan. Hubungan secara visual diungkapkan melalui subpanels dan Field terkait dalam catatan modul. Pilih salah satu dari hubungan berikut Jenis untuk modul:  Satu Kedua modul catatan akan berisi berhubungan Field. Satu-ke-Banyak - The Primary Module akan berisi catatan subpanel, dan Modul terkait catatan akan berisi Field terkait. <br> <br> <b> Banyak-ke-Banyak  - Kedua modulcatatan akan ditampilkan subpanels. <Pilih Modul Terkait untuk relationship>.  Jika jenis hubungan melibatkan subpanels, pilih tampilan Subpanel untuk modul-modul yang sesuai. Klik Simpan untuk menciptakan hubungan. ',
        ),
        'labelsHelp' => array(
            'default' => '<b>Label</b> untuk bidang dan judul yang lainnyadalam modul bisa diubah.<br><br>Edit label dengan mengklik di lapangan, masukkan label baru dan klik <b>Simpan</b>.<br><br>Jika ada paket bahasa yang diinstal didalam aplikasi, anda dapat memilih <b>Bahasa</b> untuk digunakan kepada label.',
            'saveBtn' => 'Klik <b>Simpan</b> Untuk menyimpan segala perubahan.',
            'publishBtn' => 'Klik <b>Simpan & Terapkan</b> untuk menyimpan semua perubahan dan untuk membuatnya aktif.',
        ),
        'portalSync' => array(
            'default' => 'Masukkan <b>URL PortalCRM Portal</b> dari contoh portal untuk diperbarui, dan klik <b>Buka</b>.<br><br>Kemudian masukkan nama pengguna dan kata sandi SuiteCRM yang sah, lalu klik <b>Begin Sync</b>.<br><br>Penyesuaian dilakukan ke Portal SuiteCRM <b>Layout</b>, bersama dengan <b>Style Sheet</b> jika ada yang diunggah, akan ditransferkan ke contoh portal yang ditentukan.',
        ),
        'portalStyle' => array(
            'default' => 'Anda dapat menyesuaikan tampilan Portal SuiteCRM dengan menggunakan lembar gaya.<br><br>Pilih sebuah<b>Lembar Gaya</b> untuk mengupload.<br><br>Lembar gaya akan diterapkan di Portal SuiteCRM ketika sinkronisasi dilakukan.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Untuk memulai sebuah proyek, klik New Package untuk membuat paket baru modul Custom Home. Setiap paket dapat berisi satu atau lebih modul. Misalnya, Anda mungkin ingin membuat sebuah paket yang berisi satu modul yang berhubungan dengan modul Account standar. Atau, Anda mungkin ingin membuat sebuah paket yang berisi beberapa modul baru yang bekerja sama sebagai sebuah proyek dan yang berhubungan dengan modul lain yang sudah ada dalam aplikasi. ',
            'somepackages' => 'Sebuah paket berfungsi sebagai content untuk modul custom, yang semuanya merupakan bagian dari satu proyek. Paket dapat berisi satu atau lebih Custom modul yang dapat berhubungan satu sama lain atau ke modul lain dalam aplikasi. Setelah membuat sebuah paket untuk proyek Anda, Anda dapat membuat modul untuk paket langsung, atau Anda dapat kembali ke Modul Builder di lain waktu untuk menyelesaikan proyek tersebut. Ketika proyek selesai, Anda dapat deploy untuk menginstal paket Modul dalam aplikasi. ',
            'afterSave' => 'Paket baru anda harus berisi paling sedikit satu modul. Anda dapat membuat satu atau lebih modul khusus untuk paket.<br/><br/>Klik<b>Modul Baru</b> untuk membuat modul khusus untuk paket ini.<br/><br/> Setelah membuat paling sedikit satu modul, anda dapat mempublikasikan atau menyebarkan paket untuk membuatnya tersedia untuk contoh dan/atau contoh pengguna lainnya.<br/><br/> Untuk menerapkan paket dalam satu langkah dalam contoh SuiteCRM anda, klik <b>Menyebarkan</b>.<br><br>Klik <b>Menerbitkan</b> untuk menyimpan paket sebagai file .zip. Setelah file .zip disimpan ke sistem anda, gunakan <b>Modul Pemuat</b> untuk mengunggah dan menginstal paket didalam contoh SuiteCRM anda. <br/><br/>Anda dapat mendistribusikan file ke pengguna lain untuk diunggah dan dipasang di icontoh SuiteCRM mereka sendiri.',
            'create' => 'Sebuah <b>Paket</b> bisa bertindak sebagai wadah untuk modul khusus, yang kesemuanya merupakan bagian dari satu proyek. Paket dapat berisi satu atau beberapa kustom <b>modul</b> itu bisa dihubungkan satu sama lain atau ke modul lain dalam aplikasi.<br/><br/>Setelah membuat paket untuk proyek anda, anda bisa membuat modul untuk paket segera, atau anda dapat kembali ke Modul Pembangunan di lain waktu untuk menyelesaikan proyek.',
        ),
        'main' => array(
            'welcome' => 'Gunakan Developer tools</b> untuk membuat dan mengelola modul standar dan adat dan bidang. <br/><br/>Untuk mengelola modul dalam aplikasi, klik<b>Studio</b>. <br/><br/>ntuk membuat modul kustom, klik<b>Module Builder</b>.',
            'studioWelcome' => 'Semua modul yang terinstal, termasuk benda standar dan modul-load, dapat disesuaikan dalam Studio.'
        ),
        'module' => array(
            'somemodules' => "Sejak paket saat ini berisi setidaknya satu modul, anda dapat <b>Menyebarkan</b> modul dalam paket dalam contoh SuiteCRM anda atau <b>Menerbitkan</b> paket yang akan diinstal di instance SuiteCRM saat ini atau contoh lainnya menggunakan <b>Modul Pemuat</b>.<br/><br/> Untuk menginstal paket secara langsung di instance SuiteCRM anda, klik <b>Menyebarkan</b>.<br><br>Untuk membuat file .zip untuk paket yang dapat dimuat dan diinstal dalam instance SuiteCRM saat ini dan contoh lainnya menggunakan <b>Modul Pemuat</b>, klik <b>Menerbitkan</b>.<br/><br/>Anda dapat membuat modul untuk paket ini secara bertahap, dan mempublikasikan atau menyebarkannya ketika anda siap melakukan itu. <br/><br/>Setelah menerbitkan atau menggelar paket, anda dapat membuat perubahan pada properti paket dan menyesuaikan modul lebih lanjut. Kemudian kembali menerbitkan atau menyebarkan ulang paket untuk menerapkan perubahannya.",
            'editView' => 'Di sini Anda dapat mengedit bidang yang ada. Anda dapat menghapus salah satu bidang yang ada atau menambahkan kolom yang tersedia pada panel kiri.',
            'create' => 'Ketika memilih jenis <b>Tipe</b> modul yang ingin anda buat, perhatikan jenis-jenis bidang yang anda ingin memiliki dalam modul. <br/><br/>masing-Masing template modul yang berisi satu set bidang yang berkaitan dengan jenis modul yang dijelaskan oleh judul.<br/><br/><b>Dasar</b> - Menyediakan dasar bidang yang muncul di modul standar, seperti Nama, Ditugaskan untuk, Tim, Tanggal Dibuat dan Deskripsi bidang.<br/><br/> <b>Perusahaan</b> - Menyediakan organisasi-bidang tertentu, seperti Nama Perusahaan, Industri dan Alamat Penagihan. Gunakan template ini untuk membuat modul yang sama dengan Akun standar modul.<br/><br/> <b>Orang</b> - Menyediakan individu-bidang tertentu, seperti Salam, Judul, Nama, Alamat, dan Nomor Telepon. Gunakan template ini untuk membuat modul yang sama untuk Kontak standar dan Menyebabkan modul.<br/><br/><b>Masalah</b> - Menyediakan case - dan bug-bidang tertentu, seperti Jumlah, Status, Prioritas, dan Keterangan. Gunakan template ini untuk membuat modul yang mirip dengan Kasus standar dan Bug modul.<br/><br/>Catatan: Setelah anda membuat modul, anda dapat mengedit label kolom yang disediakan oleh template, serta membuat kolom kustom untuk menambah modul layout.',
            'afterSave' => 'Menyesuaikan modul yang sesuai dengan kebutuhan anda dengan mengedit dan membuat bidang, membangun hubungan dengan modul-modul lain dan mengatur bidang dalam satu layout.<br/><br/>Untuk melihat template bidang dan mengelola bidang kustom dalam modul, klik <b>Ladang</b>.<br/><br/>Untuk membuat dan mengelola hubungan antara modul dan modul-modul lainnya, apakah modul-modul yang sudah di aplikasi atau modul kustom dalam paket yang sama, klik <b>Hubungan</b>.<br/><br/>Untuk mengedit modul layout, klik <b>Layout</b>. Anda dapat mengubah Tampilan Detail, Lihat Edit dan klik disini untuk Melihat layout untuk modul seperti yang anda lakukan untuk modul-modul yang sudah di aplikasi dalam Studio.<br/><br/> Untuk membuat modul dengan sifat yang sama seperti saat ini modul, klik <b>Duplikat</b>. Anda dapat lebih lanjut menyesuaikan modul baru.',
            'viewfields' => 'Field dalam modul dapat disesuaikan sesuai dengan kebutuhan Anda.<br/><br/>Anda tidak dapat menghapus bidang standar, namun Anda dapat menghapusnya dari tata letak yang tepat dalam halaman Layouts. <<br/><br/>Anda bisa dengan cepat membuat field baru yang memiliki properti yang sama dengan field yang sudah ada dengan mengklik <b>Clone</b> dalam form  <b>Properties</b>.  Masukkan properti yang baru lalu klik <b>Save</b>.<br/><br/>Sangat direkomendasikan Anda mengatur semua properti untuk semua field standar dan custom field sebelum Anda publish dan menginstal package yang mengandung custom module.',
            'viewrelationships' => 'Anda dapat membuat hubungan banyak-ke-banyak antara modul saat ini dan modul lain dalam paket, dan / atau antara arus dan modul modul telah terinstal di aplikasi.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'Anda dapat mengendalikan apa bidang yang tersedia untuk menangkap data di dalam<b>Edit View</b>. Anda juga dapat mengendalikan apa yang menampilkan data dalam<b>Detail View</b>.  Pandangan tidak harus cocok. <br/><br/>Cepat Buat bentuk ditampilkan saat<b>membuat</b> diklik dalam subpanel modul. Secara default, <b> Cepat Buat</ B> adalah bentuk tata letak yang sama sebagai standar Lihat <b>  Edit </ tata letak b>. Anda dapat menyesuaikan bentuk Cepat Buat sehingga mengandung kurang dan / atau bidang yang berbeda dari tata letak Lihat Edit. <br> Anda dapat menentukan modul keamanan menggunakan kustomisasi Tata Letak bersama dengan <b> Peran Manajemen </ b>. <br>',
            'existingModule' => 'Setelah membuat dan mengubah modul ini, Anda dapat membuat modul tambahan atau kembali ke paket untuk <b> Publikasikan / b> atau> <b>  Deploy </ b paket. <br> Untuk membuat modul tambahan, klik <b> Duplikat </ b> untuk membuat modul dengan sifat yang sama dengan modul saat ini, atau arahkan kembali ke paket tersebut, dan klik <b> Modul Baru </ b>. <br> <br> Jika Anda siap <b> Publikasikan / b> atau> <b> Deploy </ b paket berisi modul ini, arahkan kembali ke paket untuk melakukan fungsi tersebut. Anda dapat mempublikasikan dan menyebarkan paket yang mengandung setidaknya satu modul.',
            'labels' => 'Label bidang standar serta bidang kustom dapat diubah. Mengubah bidang label tidak akan mempengaruhi data yang disimpan dalam bidang.',
        ),
        'listViewEditor' => array(
            'modify' => 'Ada tiga kolom yang ditampilkan di sebelah kiri. "Default" kolom berisi kolom yang ditampilkan dalam tampilan daftar secara default, "Tersedia" kolom berisi bidang yang pengguna dapat memilih untuk menggunakan untuk menciptakan sebuah daftar kustom melihat, dan "Tersembunyi" di kolom berisi bidang yang tersedia untuk anda sebagai admin untuk menambahkan default atau kolom yang Tersedia untuk digunakan oleh pengguna tetapi saat ini dinonaktifkan.',
            'savebtn' => 'Klik <b>Simpan</b> akan menyimpan semua perubahan dan membuat mereka aktif.',
            'Hidden' => 'Bidang tersembunyi adalah bidang yang saat ini tidak tersedia bagi pengguna untuk digunakan dalam tampilan daftar.',
            'Available' => 'Bidang yang tersedia adalah bidang yang tidak ditampilkan secara default, namun dapat diaktifkan oleh pengguna.',
            'Default' => 'Bidang standar ditampilkan ke pengguna yang belum membuat pengaturan tampilan daftar khusus.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Ada dua kolom yang ditampilkan di sebelah kiri. Kolom "Default" berisi bidang yang akan ditampilkan di tampilan pencarian, dan kolom "Tersembunyi" berisi bidang yang tersedia untuk Anda sebagai admin untuk ditambahkan ke tampilan.',
            'savebtn' => 'Klik <b>Simpan & Menyebarkan</b> akan menyimpan semua perubahan dan membuat mereka aktif.',
            'Hidden' => 'Bidang tersembunyi adalah bidang yang tidak akan ditampilkan di tampilan pencarian.',
            'Default' => 'Bidang default akan ditampilkan di tampilan pencarian.'
        ),
        'layoutEditor' => array(
            'default' => 'Ada dua kolom yang ditampilkan di sebelah kiri. Kolom sebelah kanan, berlabel Saat ini layout atau tata Letak Preview, adalah di mana anda mengubah tata letak modul. Kolom sebelah kiri, berhak Toolbox, berisi unsur-unsur yang berguna dan alat-alat untuk digunakan ketika mengedit tata letak. <br/><br/>Jika letak daerah ini yang berjudul Saat ini tata Letak kemudian anda bekerja pada sebuah copy dari tata letak saat ini digunakan oleh modul untuk tampilan.<br/><br/>Jika ini yang berjudul tata Letak Preview maka anda bekerja pada salinan dibuat sebelumnya dengan klik pada tombol Simpan, yang mungkin telah berubah dari versi dilihat oleh pengguna modul ini.',
            'saveBtn' => 'Mengklik tombol ini akan menghemat tata letak sehingga Anda dapat mempertahankan perubahan Anda. Saat kembali ke modul ini, Anda akan mulai dari tata letak yang berubah ini. Tata letak Anda bagaimanapun tidak akan terlihat oleh pengguna modul sampai Anda mengklik tombol Simpan dan Publikasikan.',
            'publishBtn' => 'Klik tombol ini untuk menerapkan tata letak. Artinya tata letak ini akan segera dilihat oleh pengguna modul ini.',
            'toolbox' => 'Toolbox berisi berbagai fitur berguna untuk mengedit layout, termasuk area sampah, satu set elemen tambahan dan satu set bidang yang tersedia. Semua ini bisa diseret dan jatuh ke tata letak.',
            'panels' => 'Daerah ini menunjukkan bagaimana tata letak anda akan terlihat untuk pengguna modul ini ketika itu adalah depolyed.<br/><br/>Anda dapat memposisikan unsur-unsur seperti kolom, baris dan panel dengan menyeret dan menjatuhkan mereka; menghapus elemen dengan menyeret dan menjatuhkan mereka di tempat sampah area di toolbox, atau menambahkan elemen baru dengan menyeret mereka dari toolbox dan menjatuhkan mereka ke tata letak pada posisi yang diinginkan.'
        ),
        'dropdownEditor' => array(
            'default' => 'Ada dua kolom yang ditampilkan di sebelah kiri. Kolom sebelah kanan, berlabel Saat ini layout atau tata Letak Preview, adalah di mana anda mengubah tata letak modul. Kolom sebelah kiri, berhak Toolbox, berisi unsur-unsur yang berguna dan alat-alat untuk digunakan ketika mengedit tata letak. <br/><br/>Jika letak daerah ini yang berjudul Saat ini tata Letak kemudian anda bekerja pada sebuah copy dari tata letak saat ini digunakan oleh modul untuk tampilan.<br/><br/>Jika ini yang berjudul tata Letak Preview maka anda bekerja pada salinan dibuat sebelumnya dengan klik pada tombol Simpan, yang mungkin telah berubah dari versi dilihat oleh pengguna modul ini.',
            'dropdownaddbtn' => 'Mengklik tombol ini menambahkan item baru untuk dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Penyesuaian yang dibuat di Studio dalam hal ini dapat dikemas dan ditempatkan di instansi lain. <br><br>Menyediakan <b>Nama Paket</b>. Anda dapat memberikan <b>Penulis</b> dan <b>Deskripsi</b> informasi untuk paket.<br><br>Pilih module(s) yang berisi kustomisasi untuk ekspor. (Hanya modul yang berisi kustomisasi akan muncul bagi anda untuk memilih.)<br><br>Klik <b>Export</b> untuk membuat .file zip untuk paket yang berisi kustomisasi .zip file dapat di-upload dalam contoh lain melalui <b>Module Loader</b>.',
            'exportCustomBtn' => 'Klik Ekspor untuk membuat file. zip untuk paket berisi kustomisasi yang ingin Anda ekspor.',
            'name' => '<b>Nama</b> paket akan ditampilkan di Modul Loader setelah paket tersebut di-upload untuk pemasangan di Studio.',
            'author' => '<b>Penulis</b> adalah nama dari entitas yang dibuat paket. Penulis dapat berupa individu atau perusahaan.<br><br>Penulis akan ditampilkan di Modul Loader setelah paket tersebut di-upload untuk pemasangan di Studio.',
            'description' => '<b>Deskripsi</b> paket akan ditampilkan di Modul Loader setelah paket tersebut di-upload untuk pemasangan di Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Selamat datang di area Developer Tools. Gunakan alat dalam Field ini untuk membuat dan mengelola standar, custom modul dan Field. ',
            'studioBtn' => 'Gunakan <b>Studio</b> untuk menyesuaikan modul diinstal dengan mengubah bidang pengaturan, memilih bidang apa yang tersedia dan membuat custom field data.',
            'mbBtn' => 'Gunakan Modul Builder untuk membuat modul baru.',
            'appBtn' => 'Gunakan mode Aplikasi untuk menyesuaikan berbagai properti program, seperti jumlah laporan TPS yang ditampilkan di beranda',
            'backBtn' => 'Kembali ke langkah sebelumnya.',
            'studioHelp' => 'Gunakan <b>Studio</b> untuk menyesuaikan modul diinstal.',
            'moduleBtn' => 'Klik untuk mengedit modul ini.',
            'moduleHelp' => 'Pilih komponen modul yang ingin Anda edit',
            'fieldsBtn' => 'Edit informasi apa yang tersimpan dalam modul dengan mengendalikan <b>Fields</b> di modul. <br/><br/>Anda dapat mengedit dan membuat kolom kustom di sini.',
            'labelsBtn' => 'Klik <b>Simpan</b> untuk menghemat label kustom.',
            'layoutsBtn' => 'Sesuaikan <b>Layar</b> Edit, Detail, Daftar dan pencarian yang lihat.',
            'subpanelBtn' => 'Edit informasi apa yang ditampilkan di sub-modul modul ini.',
            'layoutsHelp' => 'Pilih <b>tata Letak untuk edit</b>.<br/><br/>Untuk mengubah tata letak yang berisi kolom-kolom data untuk memasukkan data, klik <b>Tampilan Edit</b>.<br/><br/>Untuk mengubah tata letak yang menampilkan data yang dimasukkan ke kolom di Tampilan Edit, klik <b>Lihat Detail</b>.<br/><br/>Untuk mengubah kolom yang muncul dalam daftar default, klik <b>Daftar</b>.<br/><br/>Untuk mengubah Dasar dan Lanjutan pencarian bentuk layout, klik <b>Cari</b>.',
            'subpanelHelp' => 'Pilih <b>Subpanel</b> untuk mengedit.',
            'searchHelp' => 'Pilih <b>Cari</b> layar untuk mengedit.',
            'newPackage' => 'Klik Paket Baru untuk membuat paket baru.',
            'mbHelp' => '<b>Selamat datang di Modul Builder.</b><br/><br/>Gunakan <b>Modul Builder</b> untuk membuat paket yang berisi modul kustom berdasarkan standar atau kustom. <br/><br/>Untuk memulai, klik <b>Paket Baru</b> untuk menciptakan paket baru, atau pilih paket untuk mengedit.<br/><br/> A <b>paket</b> bertindak sebagai wadah untuk pemilihan modul, semuanya merupakan bagian dari satu proyek. Paket dapat berisi satu atau lebih modul kustom yang dapat berhubungan satu sama lain atau ke modul dalam aplikasi. <br/><br/>Contoh: Anda mungkin ingin untuk membuat sebuah paket yang berisi satu modul kustom yang berhubungan dengan Akun standar modul. Atau, anda mungkin ingin untuk membuat sebuah paket yang berisi beberapa modul baru yang bekerja bersama-sama sebagai sebuah proyek yang terkait satu sama lain dan untuk modul-modul dalam aplikasi.',
            'exportBtn' => 'Klik <b>Mengekspor Kustomisasi</b> untuk menciptakan sebuah paket berisi penyesuaian yang dibuat di Studio untuk modul tertentu.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor Terjatuh',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modul Builder',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Editor Terjatuh',
    'LBL_DEVELOPER_TOOLS' => 'Peralatan Developer',
    'LBL_SUITEPORTAL' => 'SuiteCRM Edit Portal',
    'LBL_PACKAGE_LIST' => 'Daftar paket',
    'LBL_HOME' => 'Rumah',
    'LBL_NONE' => '-Kosong-',
    'LBL_DEPLOYE_COMPLETE' => 'Menyebarkan lengkap',
    'LBL_DEPLOY_FAILED' => 'Sebuah kesalahan telah terjadi selama menyebarkan proses, paket anda mungkin tidak diinstal dengan benar',
    'LBL_AVAILABLE_SUBPANELS' => 'Tersedia Subpanels',
    'LBL_ADVANCED' => 'Melanjutkan',
    'LBL_ADVANCED_SEARCH' => 'Penyaringan Lanjutan',
    'LBL_BASIC' => 'Dasar',
    'LBL_BASIC_SEARCH' => 'Penyaring Cepat',
    'LBL_CURRENT_LAYOUT' => 'Layar',
    'LBL_CURRENCY' => 'Mata Uang',
    'LBL_DASHLET' => 'Dashlet SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Daftar Tampilan Dashlet SuiteCRM',
    'LBL_POPUP' => 'Tampilan Sembulan',
    'LBL_POPUPLISTVIEW' => 'Daftar Tampilan Sembulan',
    'LBL_POPUPSEARCH' => 'Cari Sembulan',
    'LBL_DASHLETSEARCHVIEW' => 'Cari Dashlet SuiteCRM',
    'LBL_DETAILVIEW' => 'Tampilan Detail',
    'LBL_DROP_HERE' => '[Letakkan Disini]',
    'LBL_EDIT' => 'Sunting',
    'LBL_EDIT_LAYOUT' => 'Sunting Tata Letak',
    'LBL_EDIT_FIELDS' => 'Sunting Bagan',
    'LBL_EDITVIEW' => 'Edit View',
    'LBL_FILLER' => '(pengisi)',
    'LBL_FIELDS' => 'Bidang',
    'LBL_FAILED_TO_SAVE' => 'Gagal Menyimpan',
    'LBL_FAILED_PUBLISHED' => 'Gagal untuk dipublish',
    'LBL_HOMEPAGE_PREFIX' => 'Punya Saya',
    'LBL_LAYOUT_PREVIEW' => 'Tata letak Pratinjau',
    'LBL_LAYOUTS' => 'Tata letak',
    'LBL_LISTVIEW' => 'Tampilan daftar',
    'LBL_MODULES' => 'Modul',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Paket Baru',
    'LBL_NEW_PANEL' => 'Panel Baru',
    'LBL_NEW_ROW' => 'Baris Baru',
    'LBL_PACKAGE_DELETED' => 'Paket Dihapus',
    'LBL_PUBLISHING' => 'Dipublish...',
    'LBL_PUBLISHED' => 'Ditampilkan',
    'LBL_SELECT_FILE' => 'Pilih File',
    'LBL_SUBPANELS' => 'Sub-sub panel',
    'LBL_SUBPANEL' => 'Sub panel',
    'LBL_SUBPANEL_TITLE' => 'Judul:',
    'LBL_SEARCH_FORMS' => 'Filter',
    'LBL_SEARCH' => 'Cari',
    'LBL_SEARCH_BUTTON' => 'Cari',
    'LBL_FILTER' => 'Filter',
    'LBL_TOOLBOX' => 'Kotak Alat',
    'LBL_QUICKCREATE' => 'Buat Cepat',
    'LBL_EDIT_DROPDOWNS' => 'Sunting Pilihan Menurun Global',
    'LBL_ADD_DROPDOWN' => 'Tambahkan Pilihan Menurun Global baru',
    'LBL_BLANK' => '-kosong-',
    'LBL_TAB_ORDER' => 'Tab Perintah',
    'LBL_TABDEF_TYPE' => 'Jenis Tampilan',
    'LBL_TABDEF_TYPE_HELP' => 'Pilih bagaimana bagian ini harus ditampilkan. Opsi ini hanya berlaku jika anda telah mengaktifkan tab pada tampilan ini.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Pilih Panel untuk memiliki panel display dalam tampilan tata letak. Pilih Tab untuk memiliki panel ini ditampilkan dalam tab terpisah dalam tata letak. Ketika Tab ditentukan untuk panel, panel berikutnya diatur untuk menampilkan Panel akan ditampilkan dalam tab. <br/>A Tab baru akan dimulai untuk panel depan untuk Tab yang dipilih. Jika Tab yang dipilih untuk panel bawah panel pertama, panel pertama tentu akan menjadi sebuah Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Ciutkan',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Pilih untuk membuat keadaan default panel ini runtuh.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nama',
    'LBL_DROPDOWN_LANGUAGE' => 'Bahasa',
    'LBL_DROPDOWN_ITEMS' => 'Daftar Barang',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nama Barang',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Label Display',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sinkronkan untuk Menampilkan Detil',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Pilih opsi ini untuk melakukan sinkronisasi ini EditView tata letak yang sesuai DetailView tata letak. Bidang dan bidang penempatan di Editpengunjung<br>akan disinkronkan dan disimpan ke DetailView secara otomatis setelah mengklik Save atau Save & Menyebarkan di EditView. <br>Layar perubahan tidak akan mampu dibuat di DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Tampilan Detil ini disinkronkan dengan Tampilan Sunting yang sesuai.<br> Bagan-bagan dan penempatan bagan di Tampilan Detil ini mencerminkan bagan-bagan dan penempatan bagan di Sunting Tampilan.<br> Ganti ke Tampilan Detil tidak bisa disimpan atau disebarkan dalam halaman ini. Lakukan perubahan atau jangan sinkron tata letak di Tampilan Sunting. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Salin dari Sunting Tampilan',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Nilai-nilai yang diperlukan untuk kedua Nama Item dan Tampilan Label. Untuk menambahkan sebuah blank item, klik Tambahkan tanpa memasukkan nilai-nilai untuk Item Nama dan Tampilan Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Kunci sudah ada di dalam daftar',
    'LBL_NO_SAVE_ACTION' => 'Tidak bisa menemukan simpan tindakan untuk pandangan ini.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: dokumen yang terbentuk sangat buruk',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Modul Utama',
    'LBL_CUSTOM_RELATIONSHIPS' => '* hubungan dibuat di dalam Studio',
    'LBL_RELATIONSHIPS' => 'Hubungan',
    'LBL_RELATIONSHIP_EDIT' => 'Sunting Hubungan',
    'LBL_REL_NAME' => 'Nama',
    'LBL_REL_LABEL' => 'Label',
    'LBL_REL_TYPE' => 'Tipe',
    'LBL_RHS_MODULE' => 'Modul Yang Berkaitan',
    'LBL_NO_RELS' => 'Tidak Ada Hubungan',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Kondisi Pilihan',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolom',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Nilai',
    'LBL_SUBPANEL_FROM' => 'Bentuk Subpanel',
    'LBL_RELATIONSHIP_ONLY' => 'Tidak terlihat unsur-unsur yang akan dibuat untuk hubungan ini karena ada pra-ada yang terlihat hubungan antara dua modul.',
    'LBL_ONETOONE' => 'Satu untuk Satu',
    'LBL_ONETOMANY' => 'Satu untuk Banyak',
    'LBL_MANYTOONE' => 'Banyak untuk Satu',
    'LBL_MANYTOMANY' => 'Banyak untuk Banyak',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Pilih sebuah modul untuk menyunting.',
    'LBL_QUESTION_LAYOUT' => 'Pilih sebuah tata letak untuk menyunting.',
    'LBL_QUESTION_SUBPANEL' => 'Pilih sebuah sub panel untuk menyunting.',
    'LBL_QUESTION_SEARCH' => 'Pilih tata letak filter untuk diedit.',
    'LBL_QUESTION_MODULE' => 'Pilih komponen modul yang akan diedit.',
    'LBL_QUESTION_PACKAGE' => 'Pilih satu paket untuk diedit, atau buat paket baru.',
    'LBL_QUESTION_EDITOR' => 'Pilih alat.',
    'LBL_QUESTION_DASHLET' => 'Pilih tata letak dasbor untuk diedit.',
    'LBL_QUESTION_POPUP' => 'Pilih tata letak popup untuk diedit.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nama',
    'LBL_LABELS' => 'Label-label',
    'LBL_MASS_UPDATE' => 'Update Masal',
    'LBL_DEFAULT_VALUE' => 'Nilai Default',
    'LBL_REQUIRED' => 'Wajib',
    'LBL_DATA_TYPE' => 'Tipe',
    'LBL_HCUSTOM' => 'KUSTOM',
    'LBL_HDEFAULT' => 'BAKU',
    'LBL_LANGUAGE' => 'Bahasa:',
    'LBL_CUSTOM_FIELDS' => '* bagan dibuat di studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Edit Label',
    'LBL_SECTION_PACKAGES' => 'Paket-paket',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Modul',
    'LBL_SECTION_DROPDOWNS' => 'Pilihan Menurun',
    'LBL_SECTION_PROPERTIES' => 'Properti',
    'LBL_SECTION_DROPDOWNED' => 'Sunting Pilihan Menurun',
    'LBL_SECTION_HELP' => 'Bantuan',
    'LBL_SECTION_MAIN' => 'Utama',
    'LBL_SECTION_FIELDEDITOR' => 'Sunting Bagan',
    'LBL_SECTION_DEPLOY' => 'Kerahkan',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standar',
    'LBL_HIDDEN' => 'Tersembunyi',
    'LBL_AVAILABLE' => 'Tersedia',
    'LBL_LISTVIEW_DESCRIPTION' => 'Ada tiga kolom yang ditampikan dibawah. Kolom <b>Baku</b> terdiri dari bagan-bagan yang ditampilkan di dalam tampilan daftar secara baku. Kolom <b>Tambahan</b> terdiri dari bagan-bagan yang bisa dipilih oleh pengguna untuk digunakan dalam membuat tampilan yang diinginkan. Kolom <b>Tersedia</b> menampikan bagan-bagan yang tersedia untuk pengelola dalam menambahkan ke Kolom Baku atau Kolom Tambahan untuk digunakan oleh para pengguna.',
    'LBL_LISTVIEW_EDIT' => 'Editor List View',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Pra Tinjau',
    'LBL_MB_RESTORE' => 'Mengembalikan',
    'LBL_MB_DELETE' => 'Hapus',
    'LBL_MB_DEFAULT_LAYOUT' => 'Tata Letak Baku',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Tambah',
    'LBL_BTN_SAVE' => 'Simpan',
    'LBL_BTN_SAVE_CHANGES' => 'Simpan Perubahan',
    'LBL_BTN_DONT_SAVE' => 'Singkirkan Perubahan',
    'LBL_BTN_CANCEL' => 'Batal',
    'LBL_BTN_CLOSE' => 'Tutup',
    'LBL_BTN_SAVEPUBLISH' => 'Simpan & Sebarkan',
    'LBL_BTN_CLONE' => 'Klon',
    'LBL_BTN_ADDROWS' => 'Tambah Baris',
    'LBL_BTN_ADDFIELD' => 'Tambah Field',
    'LBL_BTN_ADDDROPDOWN' => 'Tambahkan Pilihan Menurun',
    'LBL_BTN_SORT_ASCENDING' => 'Sortir Menanjak',
    'LBL_BTN_SORT_DESCENDING' => 'Sortir Menurun',
    'LBL_BTN_EDLABELS' => 'Edit Label',
    'LBL_BTN_UNDO' => 'Batal',
    'LBL_BTN_REDO' => 'Kembalikan',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Tambah Bidang Kustom',
    'LBL_BTN_EXPORT' => 'Ekspor Kustomisasi',
    'LBL_BTN_DUPLICATE' => 'Duplikat',
    'LBL_BTN_PUBLISH' => 'Mempublikasi',
    'LBL_BTN_DEPLOY' => 'Kerahkan',
    'LBL_BTN_EXP' => 'Ekspor',
    'LBL_BTN_DELETE' => 'Hapus',
    'LBL_BTN_VIEW_LAYOUTS' => 'Tampilkan Tata Letak',
    'LBL_BTN_VIEW_FIELDS' => 'Melihat Bidang',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Lihat relasi',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Menambahkan Hubungan',
    'LBL_BTN_RENAME_MODULE' => 'Ganti Nama Modul',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Field Sudah ada',
    'ERROR_INVALID_KEY_VALUE' => "Error: Nilai Tidak Valid: [&#39;]",
    'ERROR_NO_HISTORY' => 'Tidak ditemukan riwayat berkas',
    'ERROR_MINIMUM_FIELDS' => 'Tata letak harus berisi setidaknya satu bidang',
    'ERROR_GENERIC_TITLE' => 'Terjadi kesalahan',
    'ERROR_REQUIRED_FIELDS' => 'Apakah Anda yakin ingin melanjutkan? Bidang wajib berikut hilang dari tata letak:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nama Paket:',
    'LBL_MODULE_NAME' => 'Nama Modul:',
    'LBL_AUTHOR' => 'Penulis:',
    'LBL_DESCRIPTION' => 'Deskripsi:',
    'LBL_KEY' => 'Kunci:',
    'LBL_ADD_README' => ' Baca Saya',
    'LBL_LAST_MODIFIED' => 'Perubahan Terakhir:',
    'LBL_NEW_MODULE' => 'Modul Baru',
    'LBL_LABEL' => 'Label:',
    'LBL_LABEL_TITLE' => 'Label',
    'LBL_WIDTH' => 'Lebar',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Jenis:',
    'LBL_NAV_TAB' => 'Tab Navigasi',
    'LBL_CREATE' => 'Buat',
    'LBL_LIST' => 'Daftar',
    'LBL_VIEW' => 'Lihat',
    'LBL_HISTORY' => 'Lihat Histori',
    'LBL_RESTORE_DEFAULT' => 'Mengembalikan Baku',
    'LBL_ACTIVITIES' => 'Aktifitas',
    'LBL_NEW' => 'Baru',
    'LBL_TYPE_BASIC' => 'dasar',
    'LBL_TYPE_COMPANY' => 'perusahaan',
    'LBL_TYPE_PERSON' => 'orang',
    'LBL_TYPE_ISSUE' => 'isu',
    'LBL_TYPE_SALE' => 'jual',
    'LBL_TYPE_FILE' => 'berkas',
    'LBL_RSUB' => 'Ini adalah subpanel yang akan ditampilkan di modul Anda',
    'LBL_MSUB' => 'Ini adalah subpanel yang disediakan modul Anda ke modul yang terkait untuk ditampilkan',
    'LBL_MB_IMPORTABLE' => 'Mengimpor',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] telah dihapus',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Ekspor Kustomisasi',
    'LBL_EC_NAME' => 'Nama Paket:',
    'LBL_EC_AUTHOR' => 'Penulis:',
    'LBL_EC_DESCRIPTION' => 'Deskripsi:',
    'LBL_EC_CHECKERROR' => 'Silahkan pilih sebuah modul.',
    'LBL_EC_CUSTOMFIELD' => 'bagan disesuaikan',
    'LBL_EC_CUSTOMLAYOUT' => 'tata letak disesuaikan',
    'LBL_EC_NOCUSTOM' => 'Tidak ada modul yang telah disesuaikan.',
    'LBL_EC_EMPTYCUSTOM' => 'memiliki kustomisasi yang kosong.',
    'LBL_EC_EXPORTBTN' => 'Ekspor',
    'LBL_MODULE_DEPLOYED' => 'Modul sudah dikerahkan.',
    'LBL_UNDEFINED' => 'tidak terdefinisi',
    'LBL_EC_VIEWS' => 'tampilan disesuaikan',
    'LBL_EC_SUITEFEEDS' => 'umpan disesuaikan',
    'LBL_EC_DASHLETS' => 'dashlet disesuaikan',
    'LBL_EC_CSS' => 'css disesuaikan',
    'LBL_EC_TPLS' => 'tpls disesuaikan',
    'LBL_EC_IMAGES' => 'gambar disesuaikan',
    'LBL_EC_JS' => 'js disesuaikan',
    'LBL_EC_QTIP' => 'qtip disesuaikan',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Gagal untuk mengambil kembali data',
    'LBL_AJAX_LOADING' => 'Memuat...',
    'LBL_AJAX_DELETING' => 'Menghapus...',
    'LBL_AJAX_BUILDPROGRESS' => 'Pembentukan Dalam Proses...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Pengerahan Dalam Proses...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Hasil',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operasi ini selesai dengan sukses',
    'LBL_AJAX_LOADING_TITLE' => 'Dalam Proses..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Silahkan tunggu, sedang memuat..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Yakin ingin menghapus paket ini? Ini akan menghapus semua file yang terkait dengan paket ini secara permanen.',
    'LBL_JS_REMOVE_MODULE' => 'Yakin ingin menghapus modul ini? Ini akan menghapus secara permanen semua file yang terkait dengan modul ini.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Setiap penyesuaian yang Anda buat di Studio akan ditimpa saat modul ini digunakan kembali. Anda yakin ingin melanjutkan?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Mengerahkan Paket',
    'LBL_JS_VALIDATE_NAME' => 'Nama - Harus alfanumerik, dimulai dengan huruf dan tidak mengandung spasi.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Nama Paket sudah ada',
    'LBL_JS_VALIDATE_KEY' => 'Kunci - Harus alfanumerik, dimulai dengan huruf dan tidak mengandung spasi.',
    'LBL_JS_VALIDATE_LABEL' => 'Harap masukkan label yang akan digunakan sebagai Nama Tampilan untuk modul ini',
    'LBL_JS_VALIDATE_TYPE' => 'Silahkan pilih jenis modul yang ingin anda bangun dari daftar di atas',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - tolong tambahkan label yang akan ditampilkan diatas subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Menghapus bagan kustom ini juga akan menghapus bagan kustom dan semua data yang berkaitan dengan bagan kustom dalam basis data. Bagan tidak akan muncul lagi dalam tata letak modul apapaun. \\n\\nApakah kamu ingin melanjutkan?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Yakin ingin menghapus hubungan ini?',
    'LBL_CONFIRM_DONT_SAVE' => 'Perubahan telah dilakukan sejak Anda terakhir disimpan, apakah Anda ingin menyimpan?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Simpan Perubahan?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data dapat terpotong dan ini tidak dapat dibatalkan, apakah Anda yakin ingin melanjutkan?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Pilih tipe data yang sesuai berdasarkan jenis data yang akan dimasukkan ke dalam field.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Setel ulang',
    'LBL_RESET_MODULE' => 'Tata Ulang Modul',
    'LBL_REMOVE_CUSTOM' => 'Pindahkan Kustomisasi',
    'LBL_CLEAR_RELATIONSHIPS' => 'Bersihkan Hubungan',
    'LBL_RESET_LABELS' => 'Tata Ulang Label',
    'LBL_RESET_LAYOUTS' => 'Tata Ulang Tata Letak',
    'LBL_REMOVE_FIELDS' => 'Pindahkan Bagan-Bagan Kustom',
    'LBL_CLEAR_EXTENSIONS' => 'Bersihkan Ekstensi',
    'LBL_HISTORY_TIMESTAMP' => 'Stempel Waktu',
    'LBL_HISTORY_TITLE' => ' riwayat',

    'fieldTypes' => array(
        'varchar' => 'Bagan Teks',
        'int' => 'Bilangan Bulat',
        'float' => 'Mengambang',
        'bool' => 'Checkbox',
        'enum' => 'Pilihan Menurun',
        'dynamicenum' => 'Pilihan Menurun Dinamis',
        'multienum' => 'Pilihan Banyak',
        'date' => 'Tanggal',
        'phone' => 'Telepon',
        'currency' => 'Mata Uang',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Hubungkan',
        'address' => 'Alamat',
        'text' => 'Bidang Teks',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Waktutanggal',
        'decimal' => 'Desimal',
        'image' => 'Gambar',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Label yang sering digunakan",
        "all" => "Semua Label",
    ),

    'parent' => 'Flex Terkait',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Kami memilih barang ini untuk memindahkan dari daftar pilihan menurun. Bagan pilihan menurun apapun yang menggunakan daftar ini dengan barang ini sebagai sebuah nilai, maka nilai tersebut tidak akan bisa dipilih lagi dari bagan-bagan pilihan menurun. Apakah kamu yakin untuk melanjutkan?",

    'LBL_ALL_MODULES' => 'Semua Modul',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ID {1} terkait)',
);
