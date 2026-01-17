<?php
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/

$manifest = array(
    'name' => 'Basque (Spain)',
    'description' => 'Translation: crowdin.com/project/suitecrmtranslations',
    'type' => 'langpack',
    'is_uninstallable' => 'Yes',
    'author' => 'SuiteCRM Community',
    'version' => '7.15-1',
    'published_date' => '2026-01-16',
);
$installdefs = array(
    'id' => 'eu_ES',
    'image_dir' => '<basepath>/images',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'include'),
        array('from' => '<basepath>/modules', 'to' => 'modules'),
        array('from' => '<basepath>/install', 'to' => 'install'),
    )
);
