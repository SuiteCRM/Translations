<?php
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/

$manifest = array(
    'name' => 'Turkish (Turkey)',
    'description' => 'Çeviri: crowdin.com/project/suitecrmtranslations',
    'type' => 'dil paketi',
    'is_uninstallable' => 'Evet',
    'author' => 'SuiteCRM Topluluğu',
    'version' => '7.15-1',
    'published_date' => '2026-01-16',
);
$installdefs = array(
    'id' => 'tr_TR',
    'image_dir' => '<basepath>/images',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'içindekiler'),
        array('from' => '<basepath>/modules', 'to' => 'modüller'),
        array('from' => '<basepath>/install', 'to' => 'kur'),
    )
);
