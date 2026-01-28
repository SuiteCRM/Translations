<?php
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/

$manifest = array(
    'name' => 'Finnish (Finland)',
    'description' => 'Translation: crowdin.com/project/suitecrmtranslations',
    'type' => 'langpack',
    'is_uninstallable' => 'Kyllä',
    'author' => 'SuiteCRM Yhteisö',
    'version' => '7.15-1',
    'published_date' => '2026-01-16',
);
$installdefs = array(
    'id' => 'fi_FI',
    'image_dir' => '<basepath>/images',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'include'),
        array('from' => '<basepath>/modules', 'to' => 'modules'),
        array('from' => '<basepath>/install', 'to' => 'install'),
    )
);
