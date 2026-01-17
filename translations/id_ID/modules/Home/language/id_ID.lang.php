<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'Rumah',
    'LBL_NEW_FORM_TITLE' => 'Kontak Baru',
    'LBL_FIRST_NAME' => 'Nama Pertama:',
    'LBL_LAST_NAME' => 'Nama akhir:',
    'LBL_LIST_LAST_NAME' => 'Nama Terakhir',
    'LBL_PHONE' => 'Telepon:',
    'LBL_EMAIL_ADDRESS' => 'Alamat Surel:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Garis pipa Saya',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline Tahap Penjualan',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline Tahap Penjualan',
    'LNK_NEW_CONTACT' => 'Buat Kontak',
    'LNK_NEW_ACCOUNT' => 'Buat Account',
    'LNK_NEW_OPPORTUNITY' => 'Buat Peluang',
    'LNK_NEW_LEAD' => 'Buat Lead',
    'LNK_NEW_CASE' => 'Buat Kasus',
    'LNK_NEW_NOTE' => 'Membuat Catatan atau Lampiran',
    'LNK_NEW_CALL' => 'Jadwal Panggilan',
    'LNK_NEW_EMAIL' => 'Arsip Email',
    'LNK_NEW_MEETING' => 'Jadwal Rapat',
    'LNK_NEW_TASK' => 'Buat Tugas',
    'LNK_NEW_BUG' => 'Laporkan Bug',
    'LNK_NEW_SEND_EMAIL' => 'Tulis Surel',
    'LBL_NO_ACCESS' => 'Anda tidak memiliki akses ke area ini. Hubungi administrator situs anda untuk mendapatkan akses',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Tidak Ada Hasil --',
    'LBL_NO_RESULTS' => '<h2>Tidak ada hasil yang ditemukan. Silahkan cari lagi.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Tip-tip Untuk Mencari:</h3><ul><li>Pastikan kamu sudah memilih kategori yang tepat di atas.</li><li>Luaskn kriteria pencarian kamu.</li><li>Jika kamu tidak juga menemukan hasil apapun maka coba pilihan pencarian lanjutan.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Menambahkan SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Situs',
    'LBL_RSS_TITLE' => 'Penyedia Berita',
    'LBL_CLOSE_DASHLETS' => 'Tutup',
    'LBL_OPTIONS' => 'Pilihan',
    // dashlet search fields
    'LBL_TODAY' => 'Hari ini',
    'LBL_YESTERDAY' => 'Kemarin',
    'LBL_TOMORROW' => 'Besok',
    'LBL_NEXT_WEEK' => 'Minggu berikutnya',
    'LBL_LAST_7_DAYS' => '7 hari terakhir',
    'LBL_NEXT_7_DAYS' => '7 hari ke depan',
    'LBL_LAST_MONTH' => 'Bulan Lalu',
    'LBL_NEXT_MONTH' => 'Bulan Depan',
    'LBL_LAST_YEAR' => 'Tahun Lalu',
    'LBL_NEXT_YEAR' => 'Tahun Depan',
    'LBL_LAST_30_DAYS' => '30 Hari Terakhir',
    'LBL_NEXT_30_DAYS' => '30 hari ke depan',
    'LBL_THIS_MONTH' => 'Bulan Ini',
    'LBL_THIS_YEAR' => 'Tahun Ini',

    'LBL_MODULES' => 'Modul',
    'LBL_CHARTS' => 'Bagan',
    'LBL_TOOLS' => 'Alat',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Hasil Pencarian',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Tampilan Modul',
        'Portal' => 'Portal',
        'Charts' => 'Bagan',
        'Tools' => 'Alat',
        'Miscellaneous' => 'Beberapa macam'
    ),
    'LBL_ADDING_DASHLET' => 'Menambahkan SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Ditambahkan',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Yakin ingin menghapus Dashlet SuiteCRM ini?',
    'LBL_REMOVING_DASHLET' => 'Menghapus SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Dihapus',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Umum',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Hanya Item Saya',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Gelar',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Menampilkan baris',

    'LBL_DASHLET_DELETE' => 'Hapus Dashlet SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Segarkan Dashlet SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Sunting Dashlet SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Tutup',

    'LBL_SEARCH' => 'Cari',
    'LBL_CLEAR' => 'Bersihkan [Alt+C]',

    'LBL_BASIC_CHARTS' => 'Grafik-Grafik Dasar',

    'LBL_DASHLET_SEARCH' => 'Temukan Dashlet SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Versi',
    'LBL_BUILD' => 'Bangun',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - Penyedia kerangka CE',

    'LBL_DASHLET_TITLE' => 'Portal Saya',
    'LBL_DASHLET_OPT_TITLE' => 'Gelar',
    'LBL_DASHLET_INCORRECT_URL' => 'Kesalahan lokasi laman ditentukan',
    'LBL_DASHLET_OPT_URL' => 'Lokasi Laman',
    'LBL_DASHLET_OPT_HEIGHT' => 'Tinggi Dashlet (dalam pixel)',
    'LBL_DASHLET_SUITE_NEWS' => 'Berita SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Temukan SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Penyaring Cepat' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Penyaringan Lanjutan' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ikon Beranda',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Kembali secepatnya ke dasbor Halaman Utama dalam sekali klik.',
    'LBL_TOUR_MODULES' => 'Modul',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Semua modul penting anda ada di sini.',
    'LBL_TOUR_MORE' => 'Lebih Modul',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Sisa modul anda ada di sini.',
    'LBL_TOUR_SEARCH' => 'Pencarian Teks Penuh',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Pencarian hanya mendapat jauh lebih baik.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifikasi',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM aplikasi pemberitahuan akan pergi di sini.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Akses profil, pengaturan dan keluar.',
    'LBL_TOUR_QUICKCREATE' => 'Buat Cepat',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Buat catatan dengan cepat tanpa kehilangan tempat anda.',
    'LBL_TOUR_FOOTER' => 'Dilipat Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Dengan mudah membentangkan dan menciutkan footer.',
    'LBL_TOUR_CUSTOM' => 'Sesuaikan Aplikasi',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Penyesuaian integrasi akan berada disini.',
    'LBL_TOUR_BRAND' => 'Merek Anda',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Logo anda masuk ke sini. Anda bisa mengarahkan mouse ke info lebih lanjut.',
    'LBL_TOUR_WELCOME' => 'Selamat Datang di SuiteCRM',
    'LBL_TOUR_WATCH' => 'Tonton Hal Baru di SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Penyederhanaan Baru bilah navigasi</li><li class="icon-ok">Footer baru yang dapat diciutkan</li><li class="icon-ok">Pencarian Telat Ditingkatkan</li><li class="icon-ok">Menu aksi diperbarui</li></ul><p>dan banyak lainnya!</p>',
    'LBL_TOUR_VISIT' => 'Untuk informasi lebih lanjut silahkan kunjungi aplikasi kami',
    'LBL_TOUR_DONE' => 'Anda Selesai!',
    'LBL_TOUR_REFERENCE_1' => 'Anda selalu dapat referensi kami',
    'LBL_TOUR_REFERENCE_2' => 'melalui jaringan "forum dukungan" dibawah tab profil.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentasi',
    'LBL_TOUR_CALENDAR_URL_1' => 'Apakah kamu membagikan aplikasi kalender SuiteCRM dengan aplikasi pihak ketiga, seperti Microsoft Outlook atau Exchange? jika iya, kamu memiliki alamat URL baru, URL baru ini lebih aman termasuk kunci pribadi yang mana akan mencegah penerbitan yang tidak sah dari kalender kamu.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Mendapatkan kembali URL kalender yang baru saja kamu bagikan.',
    'LBL_CONTRIBUTORS' => 'Kontributor',
    'LBL_ABOUT_SUITE' => 'Tentang SuiteCRM',
    'LBL_PARTNERS' => 'Rekanan',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit Semua Kekambuhan',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Hapus Semua Kekambuhan',
    'LBL_CONFIRM_REMOVE' => 'Yakin ingin menghapus rekaman?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Sebuah perangkat lunak sumber terbuka CRM untuk dunia',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite oleh Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps oleh Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Tentang Terjemahan SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Terjemahan kolaboratif oleh Komunitas SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Terjemahan dibuat dengan menggunakan Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM diterbitkan dibawah lisensi perangkat lunak sumber terbuka - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Semua kode SuiteCRM diatur dan dikembangkan oleh proyek yang akan diterbitkan sebagai sebuah perangkat lunak sumber terbuka - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM dukungan ini tersedia dalam versi gratis dan berbayar-untuk pilihan',

    'LBL_SUITE_PARTNERS' => 'Kami memiliki mitra SuiteCRM yang setia yang menyukai open source. Untuk melihat daftar mitra lengkap kami, lihat situs web kami.',

    'LBL_SAVE_BUTTON' => 'Simpan',
    'LBL_DELETE_BUTTON' => 'Hapus',
    'LBL_APPLY_BUTTON' => 'Menggunakan',
    'LBL_SEND_INVITES' => 'Mengirim Undangan',
    'LBL_CANCEL_BUTTON' => 'Batal',
    'LBL_CLOSE_BUTTON' => 'Tutup',

    'LBL_CREATE_NEW_RECORD' => 'Membuat aktivitas',
    'LBL_CREATE_CALL' => 'Jadwal Panggilan',
    'LBL_CREATE_MEETING' => 'Jadwal Rapat',

    'LBL_GENERAL_TAB' => 'Detail',
    'LBL_PARTICIPANTS_TAB' => 'Yang Diundang',
    'LBL_REPEAT_TAB' => 'Pengulangan',

    'LBL_REPEAT_TYPE' => 'Mengulang',
    'LBL_REPEAT_INTERVAL' => 'Setiap',
    'LBL_REPEAT_END' => 'Akhir',
    'LBL_REPEAT_END_AFTER' => 'Sesudah',
    'LBL_REPEAT_OCCURRENCES' => 'pengulangan',
    'LBL_REPEAT_END_BY' => 'Oleh',
    'LBL_REPEAT_DOW' => 'Hidup',
    'LBL_REPEAT_UNTIL' => 'Ulangi sampai',
    'LBL_REPEAT_COUNT' => 'Jumlah kekambuhan',
    'LBL_REPEAT_LIMIT_ERROR' => 'Permintaan Anda akan membuat dari $limit pertemuan.',

    //Events
    'LNK_EVENT' => 'Acara',
    'LNK_EVENT_VIEW' => 'Melihat Acara',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Judul:',
    'LBL_HOUR_ABBREV' => 'jam',
    'LBL_HOURS_ABBREV' => 'Jam',
    'LBL_MINSS_ABBREV' => 'Menit',
    'LBL_LOCATION' => 'Lokasi:',
    'LBL_STATUS' => 'Status',
    'LBL_DESCRIPTION' => 'Deskripsi: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Terjadi kesalahan saat melakukan pencarian. Sintaksis kueri Anda mungkin tidak valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Tidak ada hasil yang sesuai dengan kriteria pencarian Anda. Perluas pencarian.',

    'LNK_TASK_VIEW' => 'Melihat Tugas',
);
