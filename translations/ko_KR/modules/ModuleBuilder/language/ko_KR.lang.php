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
    'LBL_LOADING' => '로딩중' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => '옵션 숨기기' /*for 508 compliance fix*/,
    'LBL_DELETE' => '삭제' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => '패키지명을 입력하십시오.  입력명은 반드시 문자숫자식이여야하며 빈칸을 넣을수 없습니다. (예 : HR_Management)<br />패키지 상세설명과 필자를 입력할수 있습니다. 신규 패키지를 만들려면 저장 버튼을 클릭하십시오.',
            'modify' => '패키지의 특성과 가능한 설정은 이곳에 나타납니다.<br />이름, 필자와 패키지 설명 그리고 보기와 패키지안의 모듈 변경이 가능합니다. <br />패키지의 새 모듈만들기는 새 모듈 버튼을 클릭하십시오.<br />패키지에 최소 하나의 모듈을 포함하면 패키지의 게제와 전개 그리고 패키지안의 변경의 보내기가 가능합니다.',
            'name' => '현 페이지의 이름입니다.<br />입력할 이름은 반드시 문자숫자식이여야하며 문자로 시작하고 공간을 포함하지 않습니다.(Example: HR_Management)',
            'author' => '필자가 패키지를 만든 존재의 이름입니다. 필자는 개인이거나 회사일수 있습니다.',
            'description' => '이는 설치중 진열된 패키지의 설명입니다.',
            'publishbtn' => 'Click <b>Publish</b> to save all entered data and to create a .zip file that is an installable version of the package.<br><br>Use <b>Module Loader</b> to upload the .zip file and install the package.',
            'deploybtn' => 'Click <b>Deploy</b> to save all entered data and to install the package, including all modules, in the current instance.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the contents of the package into a new package and to display the new package. <br/><br/>For the new package, a new name will be generated automatically by appending a number to the end of the name of the package used to create the new one. You can rename the new package by entering a new <b>Name</b> and clicking <b>Save</b>.',
            'exportbtn' => 'Click <b>Export</b> to create a .zip file containing the customizations made in the package.<br><br> The generated file is not an installable version of the package.<br><br>Use <b>Module Loader</b> to import the .zip file and to have the package, including customizations, appear in Module Builder.',
            'deletebtn' => 'Click <b>Delete</b> to delete this package and all files related to this package.',
            'savebtn' => '패키지와 관련된 모든 입력된 데이터를 저장하려면 <b>저장</b>을 클릭합니다.',
            'existing_module' => 'Click the <b>Module</b> icon to edit the properties and customize the fields, relationships and layouts associated with the module.',
            'new_module' => 'Click <b>New Module</b> to create a new module for this package.',
            'key' => 'This 5-letter, alphanumeric <b>Key</b> will be used to prefix all directories, class names and database tables for all of the modules in the current package.<br><br>The key is used in an effort to achieve table name uniqueness.',
            'readme' => 'Click to add <b>Readme</b> text for this package.<br><br>The Readme will be available at the time of installation.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Checking the <b>Importable</b> checkbox will enable importing for this module.<br><br>A link to the Import Wizard will appear in the Shortcuts panel in the module. The Import Wizard facilitates importing of data from external sources into the custom module.',
            'team_security' => '<b>팀 보안</b>을 체크하면 팀 보안 기능이 유효해집니다. <br/><br/>팀 보안이 활성화되면, 모듈에서 레코드를 기록할 때 팀을 선택할 수 있습니다. ',
            'reportable' => 'Checking this box will allow this module to have reports run against it.',
            'assignable' => 'Checking this box will allow a record in this module to be assigned to a selected user.',
            'has_tab' => 'Checking <b>Navigation Tab</b> will provide a navigation tab for the module.',
            'acl' => 'Checking this box will enable Access Controls on this module, including Field Level Security.',
            'studio' => 'Checking this box will allow administrators to customize this module within Studio.',
            'audit' => 'Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
            'viewfieldsbtn' => 'Click <b>View Fields</b> to view the fields associated with the module and to create and edit custom fields.',
            'viewrelsbtn' => 'Click <b>View Relationships</b> to view the relationships associated with this module and to create new relationships.',
            'viewlayoutsbtn' => 'Click <b>View Layouts</b> to view the layouts for the module and to customize the field arrangement within the layouts.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'This is the <b>Label</b> that will appear in the navigation tab for the module. ',
            'savebtn' => '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
            'type_basic' => '<b>기본</b> 서식 타입에서는, 이름, 담당자, 팀, 작성일 및 설명의 기본 필드를 제공합니다.',
            'type_company' => 'The <b>Company</b> template type provides organization-specific fields, such as Company Name, Industry and Billing Address.<br/><br/>Use this template to create modules that are similar to the standard Accounts module.',
            'type_issue' => 'The <b>Issue</b> template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br/><br/>Use this template to create modules that are similar to the standard Cases and Bugs modules.',
            'type_person' => 'The <b>Person</b> template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br/><br/>Use this template to create modules that are similar to the standard Contacts and Leads modules.',
            'type_sale' => '<b>판매(Sale)</b> 서식 유형은, 리드 소스, 스테이지, 합계, 확율 등, 영업기회에 필요한 필드를 제공합니다.<br/><br/>이 서식을 사용하여 표준의 영업기회 모듈과 유사한 모듈을 만드십시오.',
            'type_file' => 'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br><br>Use this template to create modules that are similar to the standard Documents module.',

        ),
        'dropdowns' => array(
            'default' => 'All of the <b>Dropdowns</b> for the application are listed here.<br><br>The dropdowns can be used for dropdown fields in any module.<br><br>To make changes to an existing dropdown, click on the dropdown name.<br><br>Click <b>Add Dropdown</b> to create a new dropdown.',
            'editdropdown' => 'Dropdown lists can be used for standard or custom dropdown fields in any module.<br><br>Provide a <b>Name</b> for the dropdown list.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the list items.<br><br>In the <b>Item Name</b> field, provide a name for the option in the dropdown list. This name will not appear in the dropdown list that is visible to users.<br><br>In the <b>Display Label</b> field, provide a label that will be visible to users.<br><br>After providing the item name and display label, click <b>Add</b> to add the item to the dropdown list.<br><br>To reorder the items in the list, drag and drop items into the desired positions.<br><br>To edit the display label of an item, click the <b>Edit icon</b>, and enter a new label. To delete an item from the dropdown list, click the <b>Delete icon</b>.<br><br>To undo a change made to a display label, click <b>Undo</b>. To redo a change that was undone, click <b>Redo</b>.<br><br>Click <b>Save</b> to save the dropdown list.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.',
            'Hidden' => '숨겨짐',
            'Default' => '초기설정 필드가 하위패널에 나타납니다.',

        ),
        'listViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '숨겨짐',
            'Available' => '사용가능',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '숨겨짐',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Filter</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
        ,
            'savebtn' => '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
            'Hidden' => '숨겨짐',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Default' => '<b>Default</b> fields appear in the Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            'defaultquickcreate' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            //this default will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            'saveBtn' => 'Click <b>Save</b> to preserve the changes you made to the layout since the last time you saved it.<br><br>The changes will not be displayed in the module until you Deploy the saved changes.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes you made to the layout since the last time you saved it, and to make the changes active in the module.<br><br>The layout will immediately be displayed in the module.',
            'toolbox' => 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
            'panels' => 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
            'delete' => 'Drag and drop any element here to remove it from the layout',
            'property' => 'Edit The label displayed for this field. <br/><b>Tab Order</b> controls in what order the tab key switches between fields.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
            'addField' => 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field. The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts. The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field. Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
            'editField' => 'The properties of this field can be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.',
            'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>. You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => '이는 설치중 진열된 패키지의 설명입니다.',
        ),
        'studioWizard' => array(
            'mainHelp' => '개발자 도구지역에 오신것을 환영합니다.<br />기본 또는 고객 모듈과 필드를 새로 만들거나 관리하려면 이 지역내의 도구를 사용하십시오.',
            'studioBtn' => '배치된 모듈을 주문제작하려면 작업실을 사용하십시오.',
            'mbBtn' => '신규 모듈을 만들려면 모듈 빌더를 사용하십시오.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
            'appBtn' => '홈페이지에 몇개의 TPS 보고서를 표시할지 등의, 프로그램의 다양한 속성을 변경하려면 어플리케이션 모드를 사용하십시오.',
            'backBtn' => '이전 단계로 돌아갑니다.',
            'studioHelp' => '설치된 모듈을 변경하려면 작업실을 사용하십시오.',
            'moduleBtn' => '이 모듈을 편집하려면 클릭하십시오.',
            'moduleHelp' => '편집하고자 하는 모듈의 구성요소를 선택하십시오.',
            'fieldsBtn' => '모듈에서 필드 조종으로 저장되는 정보를 편집합니다.',
            'labelsBtn' => '이 모듈안 가치를 나타낼 라벨을 편집합니다.',
            'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.',
            'layoutsBtn' => 'Customize the module <b>Layouts</b>. The layouts are the different views of the module containing fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
            'subpanelBtn' => 'Determine which fields appear in the <b>Subpanels</b> in the module.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
            'subpanelHelp' => 'The <b>Subpanels</b> in the module that can be customized appear here.<br><br>Click an icon to select the module to edit.',
            'newPackage' => '신규 패키지를 만들려면 신규 패키지 버튼을 클릭하십시오.',
            'exportBtn' => '특정 모듈을 위한 작업실 주문제작을 포함하는 패키지를 만들기 위해서는 주문제작 보내기를 클릭하십시오.',
            'mbHelp' => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
            'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
            'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
            'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
            'viewBtnQuickCreate' => 'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',
            'addLayoutHelp' => "To create a custom layout for a Security Group select the appropriate Security Group and the layout from which to copy from as a starting point.",
            'searchHelp' => 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
            'dashletHelp' => '<b> SuiteCRM 대시릿</b> 레이아웃을 커스터마이즈 할 수 있습니다.<br><br> 대시릿은 홈모듈에서 페이지 추가가 가능합니다.',
            'DashletListViewBtn' => '<b>SuiteCRM 대시릿 목록보기</b>는 SuiteCRM 대시릿 검색 필터를 기반으로 기록을 표시합니다.',
            'DashletSearchViewBtn' => '<b>SuiteCRM 대시릿 검색</b>은 SuiteCRM 대시릿 목록보기의 기록을 필터링합니다.',
            'popupHelp' => '편집 변경할 수 있는 <b>팝업</b> 레이아웃은 여기에 나타납니다.<br>',
            'PopupListViewBtn' => '팝업목록보기는 팝업검색보기에 근거한 기록을 전시합니다.',
            'PopupSearchViewBtn' => '팝업 검색은 팝업목록보기의 기록을 봅니다',
            'BasicSearchBtn' => 'Customize the <b>Quick Filter</b> form that appears in the Quick Filter tab in the Search area for the module.',
            'AdvancedSearchBtn' => 'Customize the <b>Advanced Filter</b> form that appears in the Advanced Search tab in the Search area for the module.',
            'portalHelp' => 'SuiteCRM Portal를 관리하고 주문변경합니다.',
            'SPUploadCSS' => 'Style Sheet 를 SuiteCRM Portal 로 전송합니다.',
            'SPSync' => 'SuiteCRM Portal 예의 주문변경을 일치화합니다.',
            'Layouts' => 'SuiteCRM 포털 모듈의 <b>레이아웃</b>을 커스터마이징 합니다.',
            'portalLayoutHelp' => 'SuiteCRM Portal 내 모듈이 이곳에 나타납니다. <br />지면배치를 편집할 모듈을 선택하십시오.',
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


            'editDropDownBtn' => '글로벌 내려보기 편집하기',
            'addDropDownBtn' => '신규 글로벌 내려보기 추가하기',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => '관계를 추가하려면 마우스를 도움말에 가져가십시오.',
            'addRelationship' => '<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
            'saveBtn' => '모든 변경사항을 저정하려면 저장 버튼을 클릭하십시오.',
            'publishBtn' => '모든 변경사항을 저장하고 작동하려면 저장후 배치 버튼을 클릭하십시오.',
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
            'create' => '생성하고자 하는 모듈의 <b>형식</b>값을 선택하는 경우, 그 모듈에 필요한 필드를 미리 상정하여 주십시오.<br/><br/>각 모듈의 서식은, 타이틀로 형식의 모듈에 필요한 필드를 미리 준비해놓고 있습니다.<br/><br/> <b>기본(Basic)</b> - 표준 모듈에서 사용되는 이름, 담당자, 팀, 작성일, 설명 등의 필드가 준비되어 있습니다.<br/><br/><b>회사(Company)</b> - 표준의 거래처 모듈처럼, 조직, 회사에서 이용하는 회사명, 산업, 청구서 주소 등의 필드를 준비하고 있습니다.<br/><br/> <b>개인(Person)</b> -  표준의 거래처 담당자나 리드 모듈에서 처럼, 존칭, 직위, 이름, 주소, 전화번호 등, 개인에게 필요한 필드를 준비하고 있습니다.<br/><br/><b>과제(Issue)</b> - 사례 관리나 버그 관리에 필요한 번호, 상태, 우선도, 상세 등의 필드를 준비하고 있습니다.<br/><br/>주의: 모듈 생성후, 서식에서 제공하는 필드의 레이블을 편집하거나, 필요한 필드를 추가할 수 있습니다.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>. You can further customize the new module.',
            'viewfields' => 'The fields in the module can be customized to suit your needs.<br/><br/>You cannot delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form. Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
            'viewrelationships' => 'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'You can control what fields are available for capturing data within the <b>Edit View</b>. You can also control what data displays within the <b>Detail View</b>. The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
            'existingModule' => '이 모듈의 제작과 변경후 추가 모듈 또는 게제 또는 전개를 위한 패키지로 돌아갈수 있습니다. <br />추가 모듈생성을 하려면 현 모듈의 동일 특성의 모듈생성을 위한 복제버튼을 클릭하거나 패키지로 돌아간후 새 모듈 버튼을 클릭하십시오.',
            'labels' => '기본 필드의 라벨과 맞춤형 필드는 변경이 가능합니다. 필드 라벨 변경은 필드안 저장된 데이타에 영향을 주지 않습니다.',
        ),
        'listViewEditor' => array(
            'modify' => '왼쪽에 3개의 열이 있습니다. 초기설정 열은 초기설정으로 목록보기에 나타나는 필드를 포함하여 사용가능 열은 고객 목록보기를 위해 사용자가 선택할수 있는 필드를 포함하며 그리고  숨겨진 열은 관리자로서 초기설정을 추가하거나 현재 중지되었지만 사용자가 사용할수 있는 열을 포함합니다.',
            'savebtn' => '저장을 클릭하면 모든 변경내용을 저장하고 작동하게 합니다.',
            'Hidden' => '숨겨진 필드는 현재 사용자가 목록보기를 위해 사용할수 없는 필드입니다.',
            'Available' => '사용가능한 필드는 초기설정으로 나타나지는 않지만 사용자에 의해 작동할수 있습니다.',
            'Default' => '초기설정 필드는 고객목록보기 설정을 만들지 않은 사용자에 나타납니다.'
        ),

        'searchViewEditor' => array(
            'modify' => '왼쪽에 2개의 열이 나타납니다. 초기설정 열은 검색창에 나타날 필드를 포함하며 숨김 열은 관리자로서 보기를 추가할때 사용가능한 필드를 포함합니다.',
            'savebtn' => '저장후 배치를 클릭하면 모든 변경사항을 저장하며 실행시킵니다.',
            'Hidden' => '숨겨짐',
            'Default' => '초기설정 필드가 검색창에 나타납니다.'
        ),
        'layoutEditor' => array(
            'default' => '왼쪽에 2개의 열이 있습니다. 현 지면배치 또는 지면배치 미리보기 라벨의 오른쪽 열은 모듈의 지면배치를 변경할수 있는곳이며 도구상자 제목의 왼쪽 열은 지면배치 편집시 사용할수 있는 유용한 요소와 도구들을 포함하고 있습니다.',
            'saveBtn' => '이 버튼의 클릭은 지면배치를 저장해 변경사항을 유지할수 있습니다. 이 모듈에 다시 돌아왔을때 변경된 지면배치에서 시작합니다. 그러나 저장후 발표버튼을 누르기까지 모듈 사용자에게 보여질수 없습니다.',
            'publishBtn' => '지면배치 작동 버튼을 클릭하십시오. 이는 이 지면배치가 이 모듈을 사용하는 사용자에게 바로 보여집니다.',
            'toolbox' => '도구상자는 휴지통과 추가 요소 그리고 사용가능한 필드를 포함한 지면배치 편집을 위한 유용한 다양한 기능을 포함하고 있습니다.  이는 지면배치에 끌어와 내릴수 있습니다.',
            'panels' => '이 지역은 배치되었을때 모듈 사용자들에게 어떠한 지면배치를 보일지 나타냅니다. <br />필드나 줄과 열은 끌어서 내리기를 이용해 요소들을 재배치할수 있습니다 ; 도구상자의 휴지통 지역에서 끌어서 내려 요소를 삭제 또는 도구상자에서 신규 요소들을 끌어 추가하고 원하는 위치의 지면배치에 내리기 할수 있습니다.'
        ),
        'dropdownEditor' => array(
            'default' => '왼쪽에 2개의 열이 있습니다. 현 지면배치 또는 지면배치 미리보기 라벨의 오른쪽 열은 모듈의 지면배치를 변경할수 있는곳이며 도구상자 제목의 왼쪽 열은 지면배치 편집시 사용할수 있는 유용한 요소와 도구들을 포함하고 있습니다.',
            'dropdownaddbtn' => '이 버튼을 눌러 내려보기에 새로운 아이템을 추가합니다.',

        ),
        'exportcustom' => array(
            'exportHelp' => '예시의 작업실에서 만들어진 주문제작은  패키지화 될수 있으며 다른 예에 전시할수 있습니다.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => '패키지명은 작업실 설치를 위한 패키지 하역후에 모듈 적재기에 나타납니다.',
            'author' => '필자가 패키지를 만든 존재의 이름입니다. 필자는 개인이거나 회사일수 있습니다. <br />필자는 작업실 설치를 위한 패키지 하역후에 모듈 적재기에 나타납니다.',
            'description' => '이 패키지에 관한 설명은 작업실 설치를 위한 패키지 하역후에 모듈 적재기에 나타납니다.',
        ),
        'studioWizard' => array(
            'mainHelp' => '개발자 도구지역에 오신것을 환영합니다.<br />기본 또는 고객 모듈과 필드를 새로 만들거나 관리하려면 이 지역내의 도구를 사용하십시오.',
            'studioBtn' => '필드 배치를 바꾸거나 어떤 필드가 사용가능하며 고객 데이타 필드를 새로 만드는 설치된 모듈을 변경하려면 작업실을 사용하십시오.',
            'mbBtn' => '신규 모듈을 만들려면 모듈 빌더를 사용하십시오.',
            'appBtn' => '홈페이지에 몇개의 TPS보고서를 전시할지 등의 프로그램의 다양한 소유권을 변경하려면 어플리케이션 모드를 사용하십시오.',
            'backBtn' => '이전 단계로 돌아갑니다.',
            'studioHelp' => '설치된 모듈을 변경하려면 작업실을 사용하십시오.',
            'moduleBtn' => '이 모듈을 편집하려면 클릭하십시오.',
            'moduleHelp' => '편집하고자 하는 모듈의 구성요소를 선택하십시오.',
            'fieldsBtn' => '모듈에서 필드 조종으로 저장되는 정보를 편집합니다. <br />여기에 고객 필드를 새로 만들거나 편집할수 있습니다.',
            'labelsBtn' => '이 모듈안 가치를 나타낼 라벨을 편집합니다.',
            'layoutsBtn' => '편집, 세부사항, 목록 그리고 검색 보기의 지면배치를 주문제작합니다.',
            'subpanelBtn' => '이 모듈 하위패널에 나타날 정보를 편집하십시오',
            'layoutsHelp' => '편집할 지면배치를 선택하십시오.<br />데이타 입력을 위한 데이타 필드를 포함하는 지면배치를 변경하려면 편집보기를 클릭하십시오.<br />편집보기에서 필드로 입력되는 데이타를 전시하는 지면배치를 변경하려면 세부사항 보기를 클릭하십시오.<br />기본과 고급검색 형식 지면배치를 변경하려면 검색을 클릭하십시오.',
            'subpanelHelp' => '편집할 하위패널을 선택하십시오.',
            'searchHelp' => '편집할 지면배치 검색을 선택하십시오.',
            'newPackage' => '신규 패키지를 만들려면 신규 패키지 버튼을 클릭하십시오.',
            'mbHelp' => '<b>환영합니다.</b><br/> <br />기본 또는 사용자 오브젝트를 사용하여 사용자 모듈을 포함한 패키지를 생성하려면 <b>모듈 빌더</b>를 사용하세요. <br /><b>신규 패키지</b>를 클릭하고 새롭게 만들거나 편집할 패키지를 선택하세요. <br />패키지는 하나의 프로젝트의 전체나 부분을 위한 고객 모듈의 컨테이너로서 작용합니다. 이 패키지는 상호간 또는 어플리케이션에 모듈에 연결될수 있는 하나 또는 그 이상의 고객 모듈을 포함할수 있습니다. <br />예 : 기본 계정 모듈에 관련된 하나의 고객 모듈을 포함하는 신규 패키지를 만들수 있습니다. 또는 프로젝트로서 함께 작동하는 상호간 연관되거나 어플리케이션의 모듈에 관련된 몇개의 모듈을 포함하는 신규 패키지를 만들수 있습니다.',
            'exportBtn' => '특정 모듈을 위한 작업실 주문제작을 포함하는 패키지를 만들기 위해서는 주문제작 보내기를 클릭하십시오.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => '드롭다운 편집기',

//STUDIO2
    'LBL_MODULEBUILDER' => '모듈 빌더',
    'LBL_STUDIO' => '스튜디오',
    'LBL_DROPDOWNEDITOR' => '드롭다운 편집기',
    'LBL_DEVELOPER_TOOLS' => '개발자 도구',
    'LBL_SUITEPORTAL' => 'SuiteCRM포탈 편집기',
    'LBL_PACKAGE_LIST' => '패키지 목록',
    'LBL_HOME' => '홈',
    'LBL_NONE' => '없음',
    'LBL_DEPLOYE_COMPLETE' => '배포 완료',
    'LBL_DEPLOY_FAILED' => '배포진행중 오류가 발생했습니다. 귀하의 패키지가 올바르게 설치되지 않을수도 있습니다.',
    'LBL_AVAILABLE_SUBPANELS' => '사용가능한 하위 패널',
    'LBL_ADVANCED' => '고급',
    'LBL_ADVANCED_SEARCH' => '고급 필터',
    'LBL_BASIC' => '기본',
    'LBL_BASIC_SEARCH' => '빠른 필터',
    'LBL_CURRENT_LAYOUT' => '레이아웃',
    'LBL_CURRENCY' => '통화',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet 목록창',
    'LBL_POPUP' => '팝업 창',
    'LBL_POPUPLISTVIEW' => '팝업 목록창',
    'LBL_POPUPSEARCH' => '팝업 검색',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM 대시릿 검색',
    'LBL_DETAILVIEW' => '세부 정보 보기',
    'LBL_DROP_HERE' => '[여기에 놓기]',
    'LBL_EDIT' => '편집',
    'LBL_EDIT_LAYOUT' => '레이아웃 편집',
    'LBL_EDIT_FIELDS' => '필드 편집',
    'LBL_EDITVIEW' => '편집 보기',
    'LBL_FILLER' => '필터',
    'LBL_FIELDS' => '필드',
    'LBL_FAILED_TO_SAVE' => '저장 실패',
    'LBL_FAILED_PUBLISHED' => '발표 실패',
    'LBL_HOMEPAGE_PREFIX' => '나의',
    'LBL_LAYOUT_PREVIEW' => '레이아웃 미리보기',
    'LBL_LAYOUTS' => '레이아웃',
    'LBL_LISTVIEW' => '목록 보기',
    'LBL_MODULES' => 'Module',
    'LBL_MODULE_TITLE' => '스튜디오',
    'LBL_NEW_PACKAGE' => '새 패키지',
    'LBL_NEW_PANEL' => '새 패널',
    'LBL_NEW_ROW' => '새 줄',
    'LBL_PACKAGE_DELETED' => '패키지 삭제됨',
    'LBL_PUBLISHING' => '발표중',
    'LBL_PUBLISHED' => '게시됨',
    'LBL_SELECT_FILE' => '파일 선택하기',
    'LBL_SUBPANELS' => '하위 패널',
    'LBL_SUBPANEL' => '하위 패널',
    'LBL_SUBPANEL_TITLE' => '제목: ',
    'LBL_SEARCH_FORMS' => '필터',
    'LBL_SEARCH' => '검색',
    'LBL_SEARCH_BUTTON' => '검색',
    'LBL_FILTER' => '필터',
    'LBL_TOOLBOX' => '도구 상자',
    'LBL_QUICKCREATE' => 'Quick Create',
    'LBL_EDIT_DROPDOWNS' => '글로벌 내려보기 편집',
    'LBL_ADD_DROPDOWN' => '신규 글로벌 내려보기 추가하기',
    'LBL_BLANK' => ' ',
    'LBL_TAB_ORDER' => '탭 순서',
    'LBL_TABDEF_TYPE' => '전시 유형',
    'LBL_TABDEF_TYPE_HELP' => '이 부분의 전시방법을 선택하십시오. 이 선택항목은 이 창에서 탭을 작동시켰을 경우에만 효력이 있습니다.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => '탭',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => '패널',
    'LBL_TABDEF_TYPE_OPTION_HELP' => '지면배치 창 내에 전시될 패널을 선택하십시오. 지면배치의 분리된 탭안에 전시될 패널을 위한 탭을 선택하십시오. 탭이 명시되면 탭안에 전시될 패널의 다음 하위패널이 설정됩니다.',
    'LBL_TABDEF_COLLAPSE' => '감추기',
    'LBL_TABDEF_COLLAPSE_HELP' => '이 접혀진 패널의 초기설정상태를 만들기 위해 설정',
    'LBL_DROPDOWN_TITLE_NAME' => '이름',
    'LBL_DROPDOWN_LANGUAGE' => '언어',
    'LBL_DROPDOWN_ITEMS' => '아이템 목록',
    'LBL_DROPDOWN_ITEM_NAME' => '아이템명',
    'LBL_DROPDOWN_ITEM_LABEL' => '라벨 전시',
    'LBL_SYNC_TO_DETAILVIEW' => '세부상항창 일치화',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => '세부사항보기 지면배치와 상응하는 편집보기 지면배치 일치화를 위한 항목을 선택합니다. 편집보기의 필드와 필드 위치가 일치화 되며 편집보기의 저장 또는 저장후 배치 버튼을 클릭하면 자동으로 세부사항보기에 저장됩니다. 지면배치 변경은 세부사항보기에서 불가능합니다.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => '이 세부사항보기는 상응하는 편집보기와 일치화 됩니다. <br />세부사항보기의 편집보기의 필드와 필드 위치는 편집보기의 필드와 필드 위치를 반영합니다.<br />세부사항보기의 변경은 이페이지 내에서 저장되거나 배치될수 없습니다. 변경하거나 편집보기의 지면배치 일치화를 해제하십시오.',
    'LBL_COPY_FROM_EDITVIEW' => '편집창에서 복사',
    'LBL_DROPDOWN_BLANK_WARNING' => '아이템 이름과 전시 라벨의 가치는 필수입력 사항입니다. 비어있는 아이템을 추가하려면 아이템 이름과 전시 라벨을 위한 가치를 입력하지 않고 추가버튼을 클릭합니다.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => '모듈',
    'LBL_LHS_MODULE' => '기본 모듈',
    'LBL_CUSTOM_RELATIONSHIPS' => '작업실에 생성된 관계',
    'LBL_RELATIONSHIPS' => '관계',
    'LBL_RELATIONSHIP_EDIT' => '관계 편집하기',
    'LBL_REL_NAME' => '이름',
    'LBL_REL_LABEL' => '라벨',
    'LBL_REL_TYPE' => '종류',
    'LBL_RHS_MODULE' => '관련 모듈',
    'LBL_NO_RELS' => '관계 없음',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => '선택적 조건',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => '칸',
    'LBL_RELATIONSHIP_ROLE_VALUE' => '값',
    'LBL_SUBPANEL_FROM' => '다음의 하위패널',
    'LBL_RELATIONSHIP_ONLY' => '이 두 모듈사이에 이미 존재하는 가시 관계가 있으므로 이 관계를 위한 보이는 요소를 만들수 없습니다.',
    'LBL_ONETOONE' => '하나에서 하나',
    'LBL_ONETOMANY' => '하나에서 여러개',
    'LBL_MANYTOONE' => '여러개에서 하나',
    'LBL_MANYTOMANY' => '여러개에서 여러게',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => '편집할 모듈을 선택하십시오',
    'LBL_QUESTION_LAYOUT' => '편집할 레이아웃을 선택하십시오.',
    'LBL_QUESTION_SUBPANEL' => '편집할 하위패널을 선택하십시오',
    'LBL_QUESTION_SEARCH' => '편집할 지면배치 검색을 선택하십시오',
    'LBL_QUESTION_MODULE' => '편집할 모듈 구성내용을 선택하십시오',
    'LBL_QUESTION_PACKAGE' => '편집할 패키지를 선택하거나 새로운 패키지를 만드십시오',
    'LBL_QUESTION_EDITOR' => '도구를 선택하십시오',
    'LBL_QUESTION_DASHLET' => '편집할 대시릿 레이아웃을 선택하십시오.',
    'LBL_QUESTION_POPUP' => '편집할 팝업지면배치를 선택하십시오',
//CUSTOM FIELDS
    'LBL_NAME' => '이름',
    'LBL_LABELS' => '라벨',
    'LBL_MASS_UPDATE' => '대량 업데이트',
    'LBL_DEFAULT_VALUE' => '기본값',
    'LBL_REQUIRED' => '필수',
    'LBL_DATA_TYPE' => '종류',
    'LBL_HCUSTOM' => '고객',
    'LBL_HDEFAULT' => '초기설정',
    'LBL_LANGUAGE' => '언어:',
    'LBL_CUSTOM_FIELDS' => '작업실에 생성된 필드',

//SECTION
    'LBL_SECTION_EDLABELS' => '라벨 편집',
    'LBL_SECTION_PACKAGES' => '패키지 목록',
    'LBL_SECTION_PACKAGE' => '패키지',
    'LBL_SECTION_MODULES' => 'Module',
    'LBL_SECTION_DROPDOWNS' => '내려복;',
    'LBL_SECTION_PROPERTIES' => '소유권',
    'LBL_SECTION_DROPDOWNED' => '내려보기 편집',
    'LBL_SECTION_HELP' => '도움말',
    'LBL_SECTION_MAIN' => '메인',
    'LBL_SECTION_FIELDEDITOR' => '필드 편집하기',
    'LBL_SECTION_DEPLOY' => '배치',
    'LBL_SECTION_MODULE' => '모듈',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => '초기값',
    'LBL_HIDDEN' => '숨겨짐',
    'LBL_AVAILABLE' => '이용 가능',
    'LBL_LISTVIEW_DESCRIPTION' => '아래 세가지 열이 있습니다. 초기설정 열은 초기설정에 의해 목록 보기에 나타나는 필드를 포함하고 있으며 추가열은 고객보기 새로 만들기를 위한 필드를 포함하며 사용가능한 열은 관리자가 초기설정을 추가하거나 현재 사용하지않는 사용자가 사용되기위한 추가열을 포함합니다.',
    'LBL_LISTVIEW_EDIT' => '목록보기 편집기',

//Manager Backups History
    'LBL_MB_PREVIEW' => '미리 보기',
    'LBL_MB_RESTORE' => '재 저장',
    'LBL_MB_DELETE' => '삭제',
    'LBL_MB_DEFAULT_LAYOUT' => '기본 레이아웃',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => '추가',
    'LBL_BTN_SAVE' => '저장',
    'LBL_BTN_SAVE_CHANGES' => '변경 저장하기',
    'LBL_BTN_DONT_SAVE' => '변경내용 포기하기',
    'LBL_BTN_CANCEL' => '취소',
    'LBL_BTN_CLOSE' => '닫기',
    'LBL_BTN_SAVEPUBLISH' => '저장후 배치',
    'LBL_BTN_CLONE' => '클론',
    'LBL_BTN_ADDROWS' => '줄 추가하기',
    'LBL_BTN_ADDFIELD' => '필드 추가',
    'LBL_BTN_ADDDROPDOWN' => '내려보기 추가하기',
    'LBL_BTN_SORT_ASCENDING' => '올림차순 방식',
    'LBL_BTN_SORT_DESCENDING' => '내림차순 방식',
    'LBL_BTN_EDLABELS' => '라벨 편집',
    'LBL_BTN_UNDO' => '원상태로',
    'LBL_BTN_REDO' => '다시하기',
    'LBL_BTN_ADDCUSTOMFIELD' => '고객 필드 추가하기',
    'LBL_BTN_EXPORT' => '주문제작 보내기',
    'LBL_BTN_DUPLICATE' => '중복',
    'LBL_BTN_PUBLISH' => '게시',
    'LBL_BTN_DEPLOY' => '배치',
    'LBL_BTN_EXP' => '내보내기',
    'LBL_BTN_DELETE' => '삭제',
    'LBL_BTN_VIEW_LAYOUTS' => '레이아웃 보기',
    'LBL_BTN_VIEW_FIELDS' => '필드 보기',
    'LBL_BTN_VIEW_RELATIONSHIPS' => '관계 보기',
    'LBL_BTN_ADD_RELATIONSHIP' => '관계 추가',
    'LBL_BTN_RENAME_MODULE' => '모듈명 변경하기',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => '오류:필드가 이미 존재합니다.',
    'ERROR_INVALID_KEY_VALUE' => "오류:유효하지 않은 키 가치",
    'ERROR_NO_HISTORY' => '파일 연혁이 발견되지 않았습니다.',
    'ERROR_MINIMUM_FIELDS' => '지면배치는 최소 하나의 필드를 포함해야합니다.',
    'ERROR_GENERIC_TITLE' => '에러가 발생했습니다.',
    'ERROR_REQUIRED_FIELDS' => '계속하시겠습니까? 지면배치에서 다음 필수항목 필드가 없습니다.',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => '패키지 이름',
    'LBL_MODULE_NAME' => '모듈 이름',
    'LBL_AUTHOR' => '필자',
    'LBL_DESCRIPTION' => '상세:',
    'LBL_KEY' => '키:',
    'LBL_ADD_README' => '읽기',
    'LBL_LAST_MODIFIED' => '최종 수정',
    'LBL_NEW_MODULE' => '새 모듈',
    'LBL_LABEL' => '라벨',
    'LBL_LABEL_TITLE' => '라벨',
    'LBL_WIDTH' => '너비',
    'LBL_PACKAGE' => '패키지',
    'LBL_TYPE' => '종류:',
    'LBL_NAV_TAB' => '탐색 탭',
    'LBL_CREATE' => '작성',
    'LBL_LIST' => '목록',
    'LBL_VIEW' => '표시',
    'LBL_HISTORY' => '이력 표시',
    'LBL_RESTORE_DEFAULT' => '초기설정 다시 저장',
    'LBL_ACTIVITIES' => '영업활동',
    'LBL_NEW' => '신규',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => '귀하의 모듈에 나타날 하위패널입니다.',
    'LBL_MSUB' => '이것은 전시를 위한 관련모듈에 공급하는 모듈의 하위패널입니다.',
    'LBL_MB_IMPORTABLE' => '가져오기 중입니다.',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] 패키지가 삭제되었습니다.',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => '주문제작 보내기',
    'LBL_EC_NAME' => '패키지 이름',
    'LBL_EC_AUTHOR' => '필자',
    'LBL_EC_DESCRIPTION' => '상세:',
    'LBL_EC_CHECKERROR' => '모듈을 선택하십시오.',
    'LBL_EC_CUSTOMFIELD' => '주문 변경된 필드',
    'LBL_EC_CUSTOMLAYOUT' => '커스터마이즈 된 레이아웃',
    'LBL_EC_NOCUSTOM' => '주문 변경된 모듈이 없습니다.',
    'LBL_EC_EMPTYCUSTOM' => '주문제작물이 없습니다.',
    'LBL_EC_EXPORTBTN' => '내보내기',
    'LBL_MODULE_DEPLOYED' => '모듈이 배치되었습니다.',
    'LBL_UNDEFINED' => '정의되지 않음',
    'LBL_EC_VIEWS' => 'customized view(s)',
    'LBL_EC_SUITEFEEDS' => 'customized Feed(s)',
    'LBL_EC_DASHLETS' => 'customized Dashlet(s)',
    'LBL_EC_CSS' => 'customized css(s)',
    'LBL_EC_TPLS' => 'customized tpls(s)',
    'LBL_EC_IMAGES' => 'customized image(s)',
    'LBL_EC_JS' => 'customized js(s)',
    'LBL_EC_QTIP' => 'customized qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => '데이타 복구가 실패하였습니다.',
    'LBL_AJAX_LOADING' => '로드 중...',
    'LBL_AJAX_DELETING' => '삭제중입니다.',
    'LBL_AJAX_BUILDPROGRESS' => '제조 진행중입니다.',
    'LBL_AJAX_DEPLOYPROGRESS' => '배치 진행중입니다.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Result',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => '이 패키지를 삭제하시겠습니까? 이는 패키지와 관련 모든 파일이 영구 삭제합니다.',
    'LBL_JS_REMOVE_MODULE' => '이 모듈을 삭제하시겠습니까? 이는 모듈과와 관련 모든 파일이 영구 삭제합니다.',
    'LBL_JS_DEPLOY_PACKAGE' => '작업실에서 만들 모든 변경사항은 이 모듈이 재배치될때 덮어쓰여집니다. 계속 진행하시겠습니까?',

    'LBL_DEPLOY_IN_PROGRESS' => '패키지 배치중입니다.',
    'LBL_JS_VALIDATE_NAME' => '이름-반드시 글자나 공간을 포함하지 않는 문자숫자식이여야 합니다.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => '패키지 이름이 이미 존재합니다.',
    'LBL_JS_VALIDATE_KEY' => '키-반드시 글자나 공간을 포함하지 않는 문자숫자식이여야 합니다.',
    'LBL_JS_VALIDATE_LABEL' => '이 모듈의 전시 이름으로 사용될 라벨을 입력하십시오.',
    'LBL_JS_VALIDATE_TYPE' => '이 목록위에 만들고자하는 모듈의 유형을 선택하십시오.',
    'LBL_JS_VALIDATE_REL_LABEL' => '라벨-위의 하위패널에 전시될 라벨을 추가하십시오.',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => '이 고객필드의 삭제는 고객필드와 데이타베이스 안의 고객필드와 관련된 모든 데이타를 삭제하며 어떠한 모듈 지면배치에도 더이상 나타나지 않습니다. 만약 필드가 가치를 계산하는 공식과 관련되어 있다면 공식은 더이상 작동하지 않습니다. 필드는 보고서에서 더이상 사용할수가 없습니다. ;이러한 변경은 로그아웃후 다시 어플리케이션에 로그인했을때 적용됩니다. 그 필드를 포함하는 보고서의 실행을 위해서는 업데이트가 필요합니다.',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => '이 관계를 삭제하시겠습니까?',
    'LBL_CONFIRM_DONT_SAVE' => '마지막 저장후 다른 변경사항이 발생했습니다. 저장하시겠습니까?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => '변경사항을 저장하시겠습니까?',
    'LBL_CONFIRM_LOWER_LENGTH' => '데이타의 일부가 생략되었을수도 있으며 이는 취소할수 없습니다. 계속하시겠습니까?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => '필드에 입력할 데이타에 근거한 올바른 데이타유형을 선택하십시오',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => '재설정',
    'LBL_RESET_MODULE' => '모듈을 재설정합니다.',
    'LBL_REMOVE_CUSTOM' => '주문제잘물을 제거합니다.',
    'LBL_CLEAR_RELATIONSHIPS' => '관계를 비우기합니다.',
    'LBL_RESET_LABELS' => '라벨을 재설정합니다.',
    'LBL_RESET_LAYOUTS' => '레이아웃을 다시 설정 "',
    'LBL_REMOVE_FIELDS' => '고객필드를 제거합니다.',
    'LBL_CLEAR_EXTENSIONS' => '확장부분을 비우기합니다.',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => '연혁',

    'fieldTypes' => array(
        'varchar' => '본문필드',
        'int' => '정수',
        'float' => '유동',
        'bool' => '체크박스',
        'enum' => '내려보기',
        'dynamicenum' => 'Dynamic DropDown',
        'multienum' => '복합 선택',
        'date' => '날짜',
        'phone' => '전화:',
        'currency' => '통화',
        'html' => 'HTML',
        'radioenum' => '라디오',
        'relate' => '관련',
        'address' => '주소',
        'text' => '본문지역',
        'url' => 'URL:',
        'iframe' => 'IFrame',
        'datetimecombo' => '날짜시간',
        'decimal' => '소수',
        'image' => '이미지',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Frequently used labels",
        "all" => "전체 라벨",
    ),

    'parent' => 'Flex 관련',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "내려보기 목록에서 제거한 아이템을 선택중입니다. 이 아이템을 사용하는 내려보기목록은 더이상 가치를 전시하지 않으며 그 가치는 내려보기 필드에서 더이상 선택할수 없습니다. 계속하시겠습니까?",

    'LBL_ALL_MODULES' => '전체 모듈',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
