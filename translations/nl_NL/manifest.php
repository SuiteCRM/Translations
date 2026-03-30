<?php
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/

$manifest = array(
    'name' => 'Dutch (Netherlands)',
    'description' => 'Vertaling: crowdin.com/project/suitecrmtranslations',
    'type' => 'langpack',
    'is_uninstallable' => 'Yes',
    'author' => 'SuiteCRM Community',
    'version' => '7.15-1',
    'published_date' => '16-01-2026',
);
$installdefs = array(
    'id' => 'nl_NL',
    'image_dir' => '<basepath>/images',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'include'),
        array('from' => '<basepath>/modules', 'to' => 'modules'),
        array('from' => '<basepath>/install', 'to' => 'install'),
    )
);
