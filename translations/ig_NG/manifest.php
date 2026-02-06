<?php
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/

$manifest = array(
    'name' => 'Igbo (Nigeria)',
    'description' => 'Translation: crowdin.com/project/suitecrmtranslations',
    'type' => 'langpack',
    'is_uninstallable' => 'Ee',
    'author' => 'SuiteCRM Community',
    'version' => '7.15-1',
    'published_date' => '2026-01-16',
);
$installdefs = array(
    'id' => 'ig_NG',
    'image_dir' => '<basepath>/images',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'include'),
        array('from' => '<basepath>/modules', 'to' => 'modules'),
        array('from' => '<basepath>/install', 'to' => 'install'),
    )
);
