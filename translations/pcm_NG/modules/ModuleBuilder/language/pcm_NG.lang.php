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
    'LBL_LOADING' => 'E dey load' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'De options don hide' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Commot' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'You go provide a <b>Name</b> for de package.  De name wey you put go be alphanumeric and e no go get space. (Example: HR_Management)<br/><br/> You fit provide <b>Author</b> and <b>Description</b> information for de package. <br/><br/>You go click <b>Save</b> to create de package.',
            'modify' => 'De properties and possible actions wey dey for <b>Package</b> go show here.<br><br>You fit modify de <b>Name</b>, <b>Author</b> and <b>Description</b> of de package,go as well view and customize all de modules wey dey within de package.<br><br>Click <b>New Module</b> to create de module for de package.<br><br>If the package get at least one module, you fit <b>Publish</b> and <b>Deploy</b> de package, even <b>Export</b> de customizations wey dem do for de package ',
            'name' => 'Dis na de <b>Name</b> for de current package. <br/><br/>Na must say de name wey you put go be alphanumeric, begin with a letter and e no go get space. (Example: HR_Management)',
            'author' => 'Dis na de <b>Author</b> wey show wen you de do installation like de name for de entity wey do de package.<br><br> De Author fit be one person or company',
            'description' => 'Dis na de <b>Description</b> for d package wey show as installation de go on.',
            'publishbtn' => 'Press <b>Publish</b> make e save all de date wey you don put to create a .zip file wey be de installable version for the package.<br><br>Use <b>Module Loader</b> to upload de .zip file and install de package.',
            'deploybtn' => 'Press <b>Deploy</b> make e save all de data wey you don put and to install de package, wid all modules, for de current instance.',
            'duplicatebtn' => 'Press <b>Duplicate</b> make e copy de contents for de package go de new package and e go also show de new package. <br/><br/> For de new package, new name go generate on im own wid de number to de end of de name of de package wey bin use to create de new one. If you want change name for de new package you go enter de new <b>Name</b> and pressing<b>Save</b>.',
            'exportbtn' => 'Press <b>Export</b> make e create a .zip file containing de customizations wey dey do for de package.<br><br> De file wey dey generate no be installable version for de package.<br><br>Use <b>Module Loader</b> to import de .zip file and to get de package, wid customizations, show for Module Builder.',
            'deletebtn' => 'Press <b>Delete</b> make e delete dis package and all files wey relate to dis package.',
            'savebtn' => 'Press <b>Save</b> make e save all de data wey e don put for de package wey dey relate wid am. ',
            'existing_module' => 'Press e <b>Module</b> icon make e edit e properties and customize de fields, relationships and layouts associated wid de module.',
            'new_module' => 'Press <b>New Module</b> make e create new module for dis package',
            'key' => 'You go use dis 5-letters alphanumeric <b>Key</b> to prefix all de directories, class names and database tables for all de modules for de package wey dey now.<br><br> If you want get de table name your own way na dis key you go use. ',
            'readme' => 'Press make e add <b>Readme</b> text for dis package.<br><br>The Readme go dey available when you de install am. ',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Put name <b>Name</b> for de module. De <b>Label</b> wey you put go show for de navigation tab. <br/><br/> To choose display navigation tab for de module go check de <b>Navigation Tab</b> checkbox.<br/><br/>Then choose de type of module you go like create. <br/><br/>Select de template type. All template get some kind fields, even pre-defined layouts, go use like basis for your module. <br/><br/>Press <b>Save</b> make create de module. ',
            'modify' => 'You fit change de module properties or even customize de <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> wey relate to de module.',
            'importable' => 'If you want import for dis module, you go check de <b>Importable</b> checkbo. <br><br> Link to de Import Wizard go show for de Shortcuts panel for de module. De Import Wizard facilitates wey de import data from external sources to e custom module',
            'team_security' => 'To check de <b>Team Security</b> checkbox na im go fit help team security for dis module. <br/><br/>If dey ebnable de team security, de Team selection field go show around de records in de module ',
            'reportable' => 'To check dis box go gree dis module get reports run against am.',
            'assignable' => 'To check dis box go gree record for dis module make e dey attach to one particular person',
            'has_tab' => 'To check <b>Navigation Tab</b> go gree navigation tab for de module.',
            'acl' => 'To check dis box go gree  Access Controls for dis module, wid Field Level Security.',
            'studio' => 'To check dis box go gree administrators make e customize dis module around Studio.',
            'audit' => 'To check dis box go gree Auditing for dis module. To change to some kind fields go need recording so dat administrators go fit review de change history.',
            'viewfieldsbtn' => 'Press <b>View Fields</b> if you want view de fields wey dey associated wid de module and if you wan create and edit custom fields.',
            'viewrelsbtn' => 'Press<b>View Relationships</b> if you wan view de relationships wey dey associated wid dis module and to create new relationships.',
            'viewlayoutsbtn' => 'press <b>k <b>View Layouts</b> if you want view de layouts for de module and to fit customize de field arrangement for de layouts.',
            'duplicatebtn' => 'Press <b>Duplicate</b> if you wan copy de properties for de module carry go new module and to fit show de new module. <br/><br/>For de new module, new name go generate on im own wid de number to de end of de name of de module wey bin use to create de new one.',
            'deletebtn' => 'Press<b>Delete</b> if you wan delete dis module.',
            'name' => 'Dis na de <b>Name</b> for de current module.<br/><br/> Na must say de name wey you put go be alphanumeric and e must to begin wid letter and e no go get space.(Example: HR_Management) ',
            'label' => 'Dis na de <b>Label</b> wey go show for de navigation tab for de module. ',
            'savebtn' => 'Press <b>Save</b> make e save all de data wey e don put wey relate wid de module.',
            'type_basic' => 'De <b>Basic</b> template type na im provide basic fields, even Name, Assigned to, Team, Date Create and even Description fields.',
            'type_company' => 'De <b>Company</b> template type na im give de organization-specific fields, like Company Name, Industry and even billing Address.<br/><br/>Carry dis template create modules wey resemble de Accounts module standard.',
            'type_issue' => 'De<b>Issue</b> template type na im give case- and bug-specific fields, like Number, Status, Priority and Description.<br/><br/>Carry dis template create modules wey resemble de standard Cases and Bugs modules.',
            'type_person' => 'De <b>Person</b> template type na im give individual-specific fields, like Salutation, Title, Name, Address and Phone Number.<br/><br/>Carry dis template create modules wey resemble de standard Contacts and Leads modules.',
            'type_sale' => 'De <b>Sale</b> template type na im give de opportunity for a specific fields, like Lead Source, Stage, Amount and Probability. <br/><br/>Carry dis template create modules wey resemble de standard Opportunities module.',
            'type_file' => 'De <b>File</b> template na im give Document some kind fields, like Name of file, Type of Document, even Date wey dey Publish.<br><br>Carry dis template create modules wey resemble standard Documents module. ',

        ),
        'dropdowns' => array(
            'default' => 'All de <b>Dropdowns</b> for dis application dey don list am for here.<br><br> De fit use dis dropdowns for any dropdown fields in any module.<br><br>If u wan change to any dropdown wey don dey before, u go press de dropdown name.<br><br>Press <b>Add Dropdown</b> make e create new dropdown.',
            'editdropdown' => 'Dey fit use Dropdown lists for standard or custom dropdown fields in any module.<br><br>Put <b>Name</b> for de dropdown list.<br><br>If dey don install language packs for de application, u fit select de <b>Language</b> wey u go use for de list items.<br><br> For de <b>Item Name</b> field, put name for de option for de dropdown list. De name no go show for de dropdown list wey people wey de use am go fit see.<br><br>For de <b>Display Label</b> field, put label wey go show for people wey de use am.<br><br>After u don put de item name and display label, press <b>Add</b> make e add de item for de dropdown list.<br><br>If u wan order de items for de list again, u go drag and u go drop de items for positions wey u like.<br><br>If u wan edit display label for any item, press de <b>Edit icon</b>, then put new label. If u wan comot any item from dropdown list, press de <b>Delete icon</b>.<br><br>If u don change something wey u no like for display label then u wan make e dey as e bin dey before, press<b>Undo</b>. If u don do something wey u no like so u don carry am go back to wetin bin dey before then u still wan make that thing wey u don do before dey, press<b>Redo</b>.<br><br>Press <b>Save</b> make e save de dropdown list.
 ',

        ),
        'subPanelEditor' => array(
            'modify' => 'All de fields wey fit show for <b>Subpanel</b> go appear here.<br><br>De <b>Default</b> column contain all de fields wey de show for  Subpanel.<br/><br/>De <b>Hidden</b> column contain fields wey dey fit add for Default column.'
        ,
            'savebtn' => 'Press <b>Save & Deploy</b> if u wan make e save all de things wey u bin don change and also make am dey active around de module. ',
            'historyBtn' => 'Press <b>View History</b> if u wan view and also store back de last thing wey u bin save from de history. ',
            'historyDefault' => 'Press <b>Restore Default</b> make e store back things wey u don view so that e go dey normal again. ',
            'Hidden' => 'b>Hidden</b> fields no dey appear for subpanel.',
            'Default' => '<b>Default</b> fields dey appear for subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'All de fields dem wey fit show for <b>ListView</b> go appear for here.<br><br>De <b>Default</b> column contain de fields dem wey de show for ListView by default.<br/><br/>De <b>Available</b> column contains fields dem wey person fit select for Search make e create custom ListView. <br/><br/>De <b>Hidden</b> column contains fields dem wey dey fit add for Default or Available column'
        ,
            'savebtn' => 'Press <b>Save & Deploy</b> if u wan make e save all de things wey u bin don change and also make am dey active around de module. ',
            'historyBtn' => 'Press <b>View History</b> make e view and also store back de last layout wey u bin don save from de history.<br><br><b>Store back</b> around <b>View History</b> store back de field placement around de last layout wey u bin don save. If u wan change field labels, press de Edit icon make e next am to any field wey dey near.',
            'historyDefault' => 'Press <b>Restore Default</b> make e store back things wey u don view make e go dey for im normal layout. <br><br><b>Restore Default</b>go only store back de field placement around de original layout. If u wan change field labels, press de Edit icon wey dey next to any field.',
            'Hidden' => '<b>Hidden</b> fields no dey available now make people wey de use am see for ListViews.',
            'Available' => '<b>Available</b> fields no de show on im own, but people wey de use am fit add am to ListViews.',
            'Default' => '<b>Default</b> fields appear for ListViews wey no be people wey de use am customise am.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All de fields wey fit show for <b>ListView</b> go appear here.<br><br>De <b>Default</b> column contain all de fields wey de show for ListView by default.<br/><br/>De <b>Hidden</b> column contain all de fields wey dey fit add to Default or column wey dey Available.'
        ,
            'savebtn' => 'Press <b>Save & Deploy</b> if u wan make e save all de things wey u bin don change and also make am dey active around de module. ',
            'historyBtn' => 'Press <b>View History</b> make e view and also store back de last layout wey u bin don save from de history.<br><br><b>Store back</b> around <b>View History</b> store back de field placement around de last layout wey u bin don save. If u wan change field labels, press de Edit icon make e next am to any field wey dey near.',
            'historyDefault' => 'Press <b>Restore Default</b> make e store back things wey u don view make e go dey for im normal layout. <br><br><b>Restore Default</b>go only store back de field placement around de original layout. If u wan change field labels, press de Edit icon wey dey next to any field.',
            'Hidden' => '<b>Hidden</b> fields no dey available now make people wey de use am see for ListViews.',
            'Default' => '<b>Default</b> fields appear for ListViews wey no be people wey de use am customise am.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All de fields wey fit show for<b>Filter</b> form go appear here.<br><br>De <b>Default</b> column contain fields dem wey go show for search form. <br/><br/>De <b>Hidden</b> column contain fields dem wey dey available for u as u be admin so go fit add for de Search form.'
        ,
            'savebtn' => 'Pressing <b>Save & Deploy</b> go save all de things wey u don change and make dem dey active',
            'Hidden' => '<b>Hidden</b> fields no dey appear for search.',
            'historyBtn' => 'Press <b>View History</b> make e view and also store back de last layout wey u bin don save from de history.<br><br><b>Store back</b> around <b>View History</b> store back de field placement around de last layout wey u bin don save. If u wan change field labels, press de Edit icon make e next am to any field wey dey near.',
            'historyDefault' => 'Press <b>Restore Default</b> make e store back things wey u don view make e go dey for im normal layout. <br><br><b>Restore Default</b>go only store back de field placement around de original layout. If u wan change field labels, press de Edit icon wey dey next to any field.',
            'Default' => '<b>Default</b> fields dey appear for Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'De <b>Layout</b> area contain de fields wey dey show now around de <b>DetailView</b>.<br/><br/>De <b>Toolbox</b> na im contain de <b>Recycle Bin</b> and de fields and layout elements wey dey fit add for de layout.<br><br>If u wan change things for layout u go drag and drop element dem and fields between <b>Toolbox</b> and de <b>Layout</b> and around de layout himself.<br><br>If u wan comot field from layout, u go drag de field go <b>Recycle Bin</b>. De field go now dey available for Toolbox to add for layout.',
            'defaultquickcreate' => 'De <b>Layout</b> area contain fields wey dey show now around de<b>DetailView</b>.<br/><br/>De <b>Toolbox</b> contain <b>Recycle Bin</b> and de fields and layout element dem wey dey fit add for layout. <br><br>If u wan change things for layout u go drag and drop element dem and fields around de <b>Toolbox</b> and de <b>Layout</b> and around de layout himself.<br><br>If u wan comot field from layout, go drag de field go <b>Recycle Bin</b>. De field go now dey available for Toolbox to add for layout.',
            //this default will be used for edit view
            'default' => 'De <b>Layout</b> area contain de fields wey dey show now around de <b>EditView</b>.<br/><br/>De <b>Toolbox</b> na im contain de <b>Recycle Bin</b> and de fields and layout elements wey dey fit add for de layout.<br><br>If u wan change things for layout u go drag and drop elements dem and fields between <b>Toolbox</b> and de <b>Layout</b> and de layout himself.<br><br>If u wan comot field from layout, u go drag de field go <b>Recycle Bin</b>. De field go now dey available for Toolbox to add for layout. ',
            'saveBtn' => 'Press<b>Save</b> make e preserve all de things wey u don change to layout since de last time wey u save am.<br><br>De things wey u don do no go show for module unit wey u deploy de things wey u bin change dey save.',
            'historyBtn' => 'Press <b>View History</b> make e view and also store back de last layout wey u bin don save from de history.<br><br><b>Store back</b> around <b>View History</b> store back de field placement around de last layout wey u bin don save. If u wan change field labels, press de Edit icon make e next am to any field wey dey near.',
            'historyDefault' => 'Press <b>Restore Default</b> make e store back things wey u don view make e go dey for im normal layout. <br><br><b>Restore Default</b>go only store back de field placement around de original layout. If u wan change field labels, press de Edit icon wey dey next to any field.',
            'publishBtn' => 'Press <b>Save</b> make e preserve things wey u bin don change to layout since de last time wey u save am.<br><br>De things wey u don change no go show for module until u Deploy de things wey u bin change save.  ',
            'toolbox' => 'De <b>Toolbox</b> contain de <b>Recycle Bin</b>, extra layout elements dem and fields wey dey available to add layout.<br/><br/>De layout elements dem and fields for de Toolbox, dey fit drag and drop am for layout, and dey fit drag and drop layout elements and fields from layout put for Toolbox.<br><b> De <b>Panels</b> and <b>Rows</b> na dem be layout elements. If u add new row or new panel to de layout e go give extra locations in de layout for fields.<br/><br/> Make u drag and drop any field at all for Toolbox or layout onto field position wey don dey occupied make swap locations for de two fields.<br/><br/>De <b>Filler</b> field na im create blank space dem for de layout for de place wey dey put am.',
            'panels' => 'De <b>Layout</b> area na im give de idea how layout go appear around de module wen dey don change anything for de layout as dey put am for planty place.<br/><br/> U fit position de fields dem again, u go drag and drop rows and panels dem for de location wey u like.<br/><br/>If u wan comot elements dem u go drag and drop dem for <b>Recycle Bin</b> for de Toolbox, or if u wan add new elements and fields u go drag dem from de <b>Toolbox</b> and drop dem for location wey u like for de layout.',
            'delete' => 'U go drag and drop any element for here make e  comot am from de layout',
            'property' => 'Make u Edit de label wey dey show for dis field. <br/><b>Tab Order</b> control any how de tab key go switch between fields dem. ',
        ),
        'fieldsEditor' => array(
            'default' => 'De <b>Fields</b> wey dey available for module, dey don list dem by Field Name.<br><br>Custom fields wey dey create for de module dey appear on top fields wey dey available for module by default.<br><br>If u wan edit field, press de <b>Field Name</b>.<br/><br/>If u wan create  new field, press <b>Add Field</b>. ',
            'mbDefault' => 'De <b>Fields</b> wey dey available for de module, dey don list dem here by Field Name.<br><br> If u wan configure de properties for field, press de Field Name.<br><br>If u wan create new field, press <b>Add Field</b>. De label wey waka wit other properties for de new field, dey fit edit am after dey don create am na to press de Field Name.<br><br>After dey don deploy de module, de new fields wey dey don create for Module Builder dey know am as standard fields for deploy module in Studio.',
            'addField' => 'Select  <b>Data Type</b> for de new field. De type wey u select na im go determine de kind characters wey dey go fit put for de field. For example, only numbers wey be integers wey dey fit put for de fields wey dey be integer type of data.<br><br>Put <b>Name</b> for de field. De name must be alphanumeric and na must say e no go contain any space. Underscores dey valid.<br><br> De <b>Display Label</b> na im be de label wey go appear for de fields for de module layouts. De <b>System Label</b> na im dem dey use refer to field for de code.<br><br> E depend on de type of data wey dey select for de field, dey fit set some or all dis properties for de field:<br><br> <b>Help Text</b> dey appear for small time wen person go just dey around de field and e fit use am to prompt de person for de kind input wey him like. <br><br> <b> U go only dey see Comment Text</b> around Studio &/or Module Builder, and dey fit use am describe de field for administrators.<br><br> <b>Default Value</b> go appear for de field. People fit enter  new value for de field or go use default value.<br><br> Select de <b>Mass Update</b> checkbox so that u go fit use Mass Update feature for de field.<br><br>De <b> Size of Max</b> value na im determine de highest number of characters wey dey fit put for de field.<br><br> Select de <b>Require Field</b> checkbox so that dey go fit require. Na must say u go put value for de field so that u go fit save record wey contain de field.<br><br> Select de <b>Reportable</b> checkbox so that e go allow make dey use de field as filters and go fit show data for Reports.<br><br> Select <b>Audit</b> checkbox so that u go fit find any change to de field for Change Log.<br><br>Select option for de <b>Importable</b> field make e allow or no allow or e wan make dey import de field put for de Import Wizard.<br><br>Select option <b>Duplicate Merge</b> field make e enable or disable de Merge Duplicate and Find Duplicates features.<br><br> Dey fit set extra properties for some kind data type. 
',
            'editField' => 'The properties of this field can be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.',
            'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>. You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'Dis na de <b>Description</b> for d package wey show as installation de go on.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize deployed modules.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
            'appBtn' => 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Return to the previous step.',
            'studioHelp' => 'Use <b>Studio</b> to determine what and how information is displayed in the modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'The components that you can customize for the module appear here.<br><br>Click an icon to select the component to edit.<br><br>Click <b>Reset Module</b> to remove customizations and restore to original status.',
            'fieldsBtn' => 'Create and customize <b>Fields</b> to store information in the module.',
            'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.',
            'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.',
            'layoutsBtn' => 'Customize the module <b>Layouts</b>. The layouts are the different views of the module containing fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
            'subpanelBtn' => 'Determine which fields appear in the <b>Subpanels</b> in the module.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
            'subpanelHelp' => 'The <b>Subpanels</b> in the module that can be customized appear here.<br><br>Click an icon to select the module to edit.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
            'mbHelp' => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
            'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
            'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
            'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
            'viewBtnQuickCreate' => 'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',
            'addLayoutHelp' => "To create a custom layout for a Security Group select the appropriate Security Group and the layout from which to copy from as a starting point.",
            'searchHelp' => 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'The <b>Popup</b> layouts that can be customized appear here.<br>',
            'PopupListViewBtn' => 'The <b>Popup ListView</b> displays records based on the Popup search views.',
            'PopupSearchViewBtn' => 'The <b>Popup Search</b> views records for the Popup listview.',
            'BasicSearchBtn' => 'Customize the <b>Quick Filter</b> form that appears in the Quick Filter tab in the Search area for the module.',
            'AdvancedSearchBtn' => 'Customize the <b>Advanced Filter</b> form that appears in the Advanced Search tab in the Search area for the module.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'All of the <b>Relationships</b> that exist between the module and other deployed modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.<br><br>Relationships can be created between any two deployed modules.',
            'relationshipHelp' => '<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',


            'editDropDownBtn' => 'Edit a global Dropdown',
            'addDropDownBtn' => 'Add a new global Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'mouse over help for add relationship...',
            'addRelationship' => '<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
            'saveBtn' => 'Click <b>Save</b> to save all changes.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes and make them active.',
        ),
        'portalSync' => array(
            'default' => 'Enter the <b>SuiteCRM Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid SuiteCRM user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the SuiteCRM Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'You can customize the look of the SuiteCRM Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the SuiteCRM Portal the next time a sync is performed.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/><br/>Each package can contain one or more modules.<br/><br/>For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br><br>When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance. <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Use the <b>Developer Tools</b> to create and manage standard and custom modules and fields. <br/><br/>To manage modules in the application, click <b>Studio</b>. <br/><br/>To create custom modules, click <b>Module Builder</b>.',
            'studioWelcome' => 'All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further. Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address. Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number. Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description. Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>. You can further customize the new module.',
            'viewfields' => 'The fields in the module can be customized to suit your needs.<br/><br/>You cannot delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form. Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
            'viewrelationships' => 'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'You can control what fields are available for capturing data within the <b>Edit View</b>. You can also control what data displays within the <b>Detail View</b>. The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
            'existingModule' => 'After creating and customizing this module, you can create additional modules or return to the package to <b>Publish</b> or <b>Deploy</b> the package.<br><br>To create additional modules, click <b>Duplicate</b> to create a module with the same properties as the current module, or navigate back to the package, and click <b>New Module</b>.<br><br> If you are ready to <b>Publish</b> or <b>Deploy</b> the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
            'labels' => 'The labels of the standard fields as well as custom fields can be changed. Changing field labels will not affect the data stored in the fields.',
        ),
        'listViewEditor' => array(
            'modify' => 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
            'savebtn' => 'Clicking <b>Save</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that are not currently available to users for use in list views.',
            'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
            'Default' => 'Default fields are displayed to users who have not created custom list view settings.'
        ),

        'searchViewEditor' => array(
            'modify' => 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that will not be shown in the search view.',
            'Default' => 'Default fields will be shown in the search view.'
        ),
        'layoutEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'saveBtn' => 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
            'publishBtn' => 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
            'toolbox' => 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
            'panels' => 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
        ),
        'dropdownEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'dropdownaddbtn' => 'Clicking this button adds a new item to the dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance. <br><br>Provide a <b>Package Name</b>. You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations. The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Return to the previous step.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/><br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Dropdown Editor',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Module Builder',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Dropdown Editor',
    'LBL_DEVELOPER_TOOLS' => 'Developer Tools',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Package List',
    'LBL_HOME' => 'Domot',
    'LBL_NONE' => '-None-',
    'LBL_DEPLOYE_COMPLETE' => 'Deploy complete',
    'LBL_DEPLOY_FAILED' => 'An error has occurred during deploy process, your package may not have installed correctly',
    'LBL_AVAILABLE_SUBPANELS' => 'Available Subpanels',
    'LBL_ADVANCED' => 'Advanced',
    'LBL_ADVANCED_SEARCH' => 'Advance Filter',
    'LBL_BASIC' => 'Basic',
    'LBL_BASIC_SEARCH' => 'Quick Filter',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Money type',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_POPUP' => 'Popup View',
    'LBL_POPUPLISTVIEW' => 'Popup ListView',
    'LBL_POPUPSEARCH' => 'Popup Search',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DETAILVIEW' => 'Detail View',
    'LBL_DROP_HERE' => '[Put am hia]',
    'LBL_EDIT' => 'Edit',
    'LBL_EDIT_LAYOUT' => 'Make you Edit Layout',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Edit View',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'Fields',
    'LBL_FAILED_TO_SAVE' => 'Failed To Save',
    'LBL_FAILED_PUBLISHED' => 'Failed to Publish',
    'LBL_HOMEPAGE_PREFIX' => 'My',
    'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
    'LBL_LAYOUTS' => 'Layouts',
    'LBL_LISTVIEW' => 'List View',
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'New Package',
    'LBL_NEW_PANEL' => 'New Panel',
    'LBL_NEW_ROW' => 'New Row',
    'LBL_PACKAGE_DELETED' => 'Package Deleted',
    'LBL_PUBLISHING' => 'Publishing...',
    'LBL_PUBLISHED' => 'Published',
    'LBL_SELECT_FILE' => 'Select File',
    'LBL_SUBPANELS' => 'Subpanels',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Title:',
    'LBL_SEARCH_FORMS' => 'Make you filter',
    'LBL_SEARCH' => 'Search',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_FILTER' => 'Make you filter',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_QUICKCREATE' => 'Sharp sharp create',
    'LBL_EDIT_DROPDOWNS' => 'Edit a Global Dropdown',
    'LBL_ADD_DROPDOWN' => 'Add a new Global Dropdown',
    'LBL_BLANK' => '-blank-',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Wetin be your name',
    'LBL_DROPDOWN_LANGUAGE' => 'Language',
    'LBL_DROPDOWN_ITEMS' => 'List Items',
    'LBL_DROPDOWN_ITEM_NAME' => 'Item Name',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Display Label',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sync to Detail View',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Primary Module',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio',
    'LBL_RELATIONSHIPS' => 'Relationships',
    'LBL_RELATIONSHIP_EDIT' => 'Edit Relationship',
    'LBL_REL_NAME' => 'Wetin be your name',
    'LBL_REL_LABEL' => 'Label',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Related Module',
    'LBL_NO_RELS' => 'No Relationships',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Optional Condition',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Column',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Value',
    'LBL_SUBPANEL_FROM' => 'Subpanel from',
    'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
    'LBL_ONETOONE' => 'One to One',
    'LBL_ONETOMANY' => 'One to Many',
    'LBL_MANYTOONE' => 'Many to One',
    'LBL_MANYTOMANY' => 'Many to Many',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Select a module to edit.',
    'LBL_QUESTION_LAYOUT' => 'Select a layout to edit.',
    'LBL_QUESTION_SUBPANEL' => 'Select a subpanel to edit.',
    'LBL_QUESTION_SEARCH' => 'Select a filter layout to edit.',
    'LBL_QUESTION_MODULE' => 'Select a module component to edit.',
    'LBL_QUESTION_PACKAGE' => 'Select a package to edit, or create a new package.',
    'LBL_QUESTION_EDITOR' => 'Select a tool.',
    'LBL_QUESTION_DASHLET' => 'Select a dashlet layout to edit.',
    'LBL_QUESTION_POPUP' => 'Select a popup layout to edit.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Wetin be your name',
    'LBL_LABELS' => 'Labels',
    'LBL_MASS_UPDATE' => 'Different update',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'LBL_REQUIRED' => 'Wey you need',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'CUSTOM',
    'LBL_HDEFAULT' => 'DEFAULT',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Edit Labels',
    'LBL_SECTION_PACKAGES' => 'Packages',
    'LBL_SECTION_PACKAGE' => 'Package',
    'LBL_SECTION_MODULES' => 'Modules',
    'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
    'LBL_SECTION_PROPERTIES' => 'Properties',
    'LBL_SECTION_DROPDOWNED' => 'Edit Dropdown',
    'LBL_SECTION_HELP' => 'Help',
    'LBL_SECTION_MAIN' => 'Main',
    'LBL_SECTION_FIELDEDITOR' => 'Edit Field',
    'LBL_SECTION_DEPLOY' => 'Deploy',
    'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Default',
    'LBL_HIDDEN' => 'Hidden',
    'LBL_AVAILABLE' => 'Available',
    'LBL_LISTVIEW_DESCRIPTION' => 'There are three columns displayed below. The <b>Default</b> column contains fields that are displayed in a list view by default. The <b>Additional</b> column contains fields that a user can choose to use for creating a custom view. The <b>Available</b> column displays fields available for you as an admin to add to the Default or Additional columns for use by users.',
    'LBL_LISTVIEW_EDIT' => 'List View Editor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Preview',
    'LBL_MB_RESTORE' => 'Restore',
    'LBL_MB_DELETE' => 'Commot',
    'LBL_MB_DEFAULT_LAYOUT' => 'Default Layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Add',
    'LBL_BTN_SAVE' => 'Save',
    'LBL_BTN_SAVE_CHANGES' => 'Save Changes',
    'LBL_BTN_DONT_SAVE' => 'Discard Changes',
    'LBL_BTN_CANCEL' => 'Clean am',
    'LBL_BTN_CLOSE' => 'Close',
    'LBL_BTN_SAVEPUBLISH' => 'Save & Deploy',
    'LBL_BTN_CLONE' => 'Clone',
    'LBL_BTN_ADDROWS' => 'Add Rows',
    'LBL_BTN_ADDFIELD' => 'Add Field',
    'LBL_BTN_ADDDROPDOWN' => 'Add Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Sort Ascending',
    'LBL_BTN_SORT_DESCENDING' => 'Sort Descending',
    'LBL_BTN_EDLABELS' => 'Edit Labels',
    'LBL_BTN_UNDO' => 'Undo',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Add Custom Field',
    'LBL_BTN_EXPORT' => 'Export Customizations',
    'LBL_BTN_DUPLICATE' => 'Another one',
    'LBL_BTN_PUBLISH' => 'Publish',
    'LBL_BTN_DEPLOY' => 'Deploy',
    'LBL_BTN_EXP' => 'Export',
    'LBL_BTN_DELETE' => 'Commot',
    'LBL_BTN_VIEW_LAYOUTS' => 'View Layouts',
    'LBL_BTN_VIEW_FIELDS' => 'View Fields',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'View Relationships',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Add Relationship',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Field Already Exists',
    'ERROR_INVALID_KEY_VALUE' => "Error: Invalid Key Value: [']",
    'ERROR_NO_HISTORY' => 'No history files found',
    'ERROR_MINIMUM_FIELDS' => 'The layout must contain at least one field',
    'ERROR_GENERIC_TITLE' => 'An error has occurred',
    'ERROR_REQUIRED_FIELDS' => 'Are you sure you wish to continue? The following required fields are missing from the layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Package Name:',
    'LBL_MODULE_NAME' => 'Module Name:',
    'LBL_AUTHOR' => 'Author:',
    'LBL_DESCRIPTION' => 'Now here you go sabi as the thing be:',
    'LBL_KEY' => 'Key:',
    'LBL_ADD_README' => ' Readme',
    'LBL_LAST_MODIFIED' => 'Last Modified:',
    'LBL_NEW_MODULE' => 'New Module',
    'LBL_LABEL' => 'Label:',
    'LBL_LABEL_TITLE' => 'Label',
    'LBL_WIDTH' => 'Width',
    'LBL_PACKAGE' => 'Package:',
    'LBL_TYPE' => 'Type:',
    'LBL_NAV_TAB' => 'Navigation Tab',
    'LBL_CREATE' => 'Create',
    'LBL_LIST' => 'List',
    'LBL_VIEW' => 'View',
    'LBL_HISTORY' => 'Make you view History',
    'LBL_RESTORE_DEFAULT' => 'Restore Default',
    'LBL_ACTIVITIES' => 'Activities',
    'LBL_NEW' => 'New',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'This is the subpanel that will be displayed in your module',
    'LBL_MSUB' => 'This is the subpanel that your module provides to the related module for display',
    'LBL_MB_IMPORTABLE' => 'Importing',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] was deleted',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export Customizations',
    'LBL_EC_NAME' => 'Package Name:',
    'LBL_EC_AUTHOR' => 'Author:',
    'LBL_EC_DESCRIPTION' => 'Now here you go sabi as the thing be:',
    'LBL_EC_CHECKERROR' => 'Please select a module.',
    'LBL_EC_CUSTOMFIELD' => 'customized field(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'customized layout(s)',
    'LBL_EC_NOCUSTOM' => 'No modules have been customized.',
    'LBL_EC_EMPTYCUSTOM' => 'has empty customizations.',
    'LBL_EC_EXPORTBTN' => 'Export',
    'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
    'LBL_UNDEFINED' => 'undefined',
    'LBL_EC_VIEWS' => 'customized view(s)',
    'LBL_EC_SUITEFEEDS' => 'customized Feed(s)',
    'LBL_EC_DASHLETS' => 'customized Dashlet(s)',
    'LBL_EC_CSS' => 'customized css(s)',
    'LBL_EC_TPLS' => 'customized tpls(s)',
    'LBL_EC_IMAGES' => 'customized image(s)',
    'LBL_EC_JS' => 'customized js(s)',
    'LBL_EC_QTIP' => 'customized qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
    'LBL_AJAX_LOADING' => 'E dey load...',
    'LBL_AJAX_DELETING' => 'Deleting...',
    'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Result',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Are you sure you wish to remove this package? This will permanently delete all files associated with this package.',
    'LBL_JS_REMOVE_MODULE' => 'Are you sure you wish to remove this module? This will permanently delete all files associated with this module.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Any customizations that you made in Studio will be overwritten when this module is re-deployed. Are you sure you want to proceed?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
    'LBL_JS_VALIDATE_NAME' => 'Name - Must be alphanumeric, begin with a letter and contain no spaces.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Package Name already exists',
    'LBL_JS_VALIDATE_KEY' => 'Key - Must be alphanumeric, begin with a letter and contain no spaces.',
    'LBL_JS_VALIDATE_LABEL' => 'Please enter a label that will be used as the Display Name for this module',
    'LBL_JS_VALIDATE_TYPE' => 'Please select the type of module you wish to build from the list above',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - please add a label that will be displayed above the subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \\n\\nDo you wish to continue?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Are you sure you wish to delete this relationship?',
    'LBL_CONFIRM_DONT_SAVE' => 'Changes have been made since you last saved, would you like to save?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Save Changes?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data may be truncated and this cannot be undone, are you sure you wish to continue?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Select the appropriate data type based on the type of data that will be entered into the field.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Reset',
    'LBL_RESET_MODULE' => 'Reset Module',
    'LBL_REMOVE_CUSTOM' => 'Remove Customizations',
    'LBL_CLEAR_RELATIONSHIPS' => 'Clear Relationships',
    'LBL_RESET_LABELS' => 'Reset Labels',
    'LBL_RESET_LAYOUTS' => 'Reset Layouts',
    'LBL_REMOVE_FIELDS' => 'Remove Custom Fields',
    'LBL_CLEAR_EXTENSIONS' => 'Clear Extensions',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => ' history',

    'fieldTypes' => array(
        'varchar' => 'TextField',
        'int' => 'Integer',
        'float' => 'Float',
        'bool' => 'Checkbox',
        'enum' => 'DropDown',
        'dynamicenum' => 'Dynamic DropDown',
        'multienum' => 'MultiSelect',
        'date' => 'Date',
        'phone' => 'Phone',
        'currency' => 'Money type',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Relate',
        'address' => 'Address',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datetime',
        'decimal' => 'Decimal',
        'image' => 'Image',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Frequently used labels",
        "all" => "All Labels",
    ),

    'parent' => 'Flex Relate',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "You are selecting this item for removal from the dropdown list. Any dropdown fields using this list with this item as a value will no longer display the value, and the value will no longer be able to be selected from the dropdown fields. Are you sure you want to continue?",

    'LBL_ALL_MODULES' => 'All Modules',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
