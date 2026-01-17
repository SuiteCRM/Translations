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
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Скриване на опции' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Изтрий' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Въведете <b>Име</b> на пакета. Въвежданото име трябва да е последователност от букви и цифри и не трябва да съдържа интервали. (Пример: HR_Management)<br/><br/> Можете допълнително да въведете информация за <b>Автора</b> и <b>Описание</b> на пакета. <br/><br/>Натиснете <b>Запази</b>, за да създадете пакета.',
            'modify' => 'Секцията съдържа параметрите и възможните действия с <b>Пакета</b> .<br><br>Можете да модифицирате полетата <b>Име</b>, <b>Автор</b> и <b>Описание</b> , както и да разгледате и модифицирате всички модули, съдържащи се в пакета.<br><br>Натиснете <b>Нов модул</b> , за да създадете допълнителен модул в пакета.<br><br>Ако пакетът съдържа поне един модул, можете да <b>Публикувате</b> и <b>Инсталирате</b> пакета, както и да извършите <b>Експорт</b> на направените конфигурации.',
            'name' => '<b>Име</b> на текущия пакет. <br/><br/>Името трябва да е последователност от букви и цифри, без интервали и започващо с буква. (Пример: HR_Management)',
            'author' => '<b>Автор</b> визуализиран в процеса на инсталация като име на създателя на пакета.<br><br>Авторът може да бъде физическо лице или компания.',
            'description' => '<b>Описание</b> на пакета, визуализирано в процеса на инсталация.',
            'publishbtn' => 'Натиснете <b>Публикувай</b> , за да запазите въведенета информация и да създадете .zip файл. Генерираният файл позволява инсталация на пакета.<br><br>Използвайте секцията <b>Инсталиране на модули</b> , за да качите .zip файла в система и да инсталирате пакета.',
            'deploybtn' => 'Натиснете <b>Инсталирай</b>, за да запазите въведената информация и да инсталирате пакета и съдържащите се в него модули в текущата система.',
            'duplicatebtn' => 'Натиснете <b>Дублирай</b> , за да копирате съдържанието на текущия пакет в нов.<br/><br/>Името на новия пакет ще бъде генерирано автоматично чрез добавяне на цифра към името на текущия. Можете да промените името на новия пакет модифицирате полето <b>Име</b> и натиснете  <b>Запази</b>.',
            'exportbtn' => 'Натиснете <b>Експортирай</b> , за да създадете файл с разширение .zip, който съдържа всички данни за пакета.<br><br> Генерираният файл не позволява инсталация на пакета.<br><br>Използвайте секцията <b>Инсталиране на модули</b> , за да импортирате .zip файла в друга система, така че пакетът там да бъде достъпен в секция Създаване на модули.',
            'deletebtn' => 'Натиснете <b>Изтрий</b> , за да изтриете пакета и всички свързани с него файлове.',
            'savebtn' => 'Натиснете <b>Съхрани</b> , за да запазите въведените данни за текущия пакет.',
            'existing_module' => 'Натиснете <b>Модул</b> , за да редактирате настройките и модифицирате полета, връзки с други модули и подредба на екрани за текущия модул.',
            'new_module' => 'Натиснете <b>Нов модул</b> , за да добавите модул към текущия пакет.',
            'key' => 'Състоящият се от до 5 цифри и букви <b>Ключ</b> ще бъде използван като префикс в имената на всички директории, класове и таблици за модулите в текущия пакет.<br><br>Ключът се използва с цел да се постигне уникалност на имената.',
            'readme' => 'Натиснете <b>Информация за пакета</b> , за да добавите текст относно инсталацията и/или приложението на пакета.<br><br>Информацията за пакета ще бъде достъпна за потребителите в процеса на инсталация.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Маркирането на полето <b>Импортиране</b> ще разреши импортирането на данни за този модул.<br><br>Електронният помощник за импортиране ще бъде достъпен.  Електронният помощник улеснява импортирането на данни от външни източници в модули на.',
            'team_security' => 'Маркирайте полето <b>Екипна сигурност</b> ако желаете достъпът до записите на създаденият модул да бъде управляван чрез екипи.  <br/><br/>Ако екипната сигурност е разрешена, полето за избор на екип ще бъде добавено към модула ',
            'reportable' => 'Checking this box will allow this module to have reports run against it.',
            'assignable' => 'Checking this box will allow a record in this module to be assigned to a selected user.',
            'has_tab' => 'Маркирайте полето <b>Табулатор</b> ако желаете създаденият от вас модул да има табулатор в системата.',
            'acl' => 'Checking this box will enable Access Controls on this module, including Field Level Security.',
            'studio' => 'Checking this box will allow administrators to customize this module within Studio.',
            'audit' => 'Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
            'viewfieldsbtn' => 'Натиснете <b>Полета</b> , за да разгледате дефинираните полета и да създадете нови.',
            'viewrelsbtn' => 'Натиснете <b>Връзки с други модули</b> , за да разгледате дефинираните връзки и да създадете нови.',
            'viewlayoutsbtn' => 'Натиснете <b>Подредба на екрани</b> , за да разгледате дефинираните подредби за модула и модифицирате подредбата на полета в тях.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => '<b>Етикет</b> е името, което ще бъде визуализирано в табулатора за този модул. ',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the module.',
            'type_basic' => 'Типът <b>Базов</b> съдържа предефинирани основни полета като Име, Отговорник, Екип, Дата на създаване и Описание.',
            'type_company' => 'Типът <b>Организация</b> съдържа предефинирани полета описващи компании, като Име на компания, Индустрия, Данъчен адрес и Адрес за кореспонденция.<br/><br/>Използвайте този шаблон за създаване на модули подобни на стандартния Организации.',
            'type_issue' => 'Типът <b>Казус</b> съдържа предефинирани полета специфични за описание на проблеми, като Номер, Статус, Приоритет и Описание.<br/><br/>Използвайте този шаблон за създаване на модули подобни на стандартните Казуси и Проблеми.',
            'type_person' => 'Типът <b>Контакт</b> ъдържа предефинирани полета описващи лица за контакти, като Длъжност, Име, Адрес и Телефон.<br/><br/>Използвайте този шаблон за създаване на модули подобни на стандартните Контакти и Потенциални клиенти.',
            'type_sale' => 'Типът <b>Сделка</b> съдържа предефинирани полета специфични за описание на водени търговски преговори, като Източник, Етап на преговори, Сума и Вероятност за успех. <br/><br/>Използвайте този шаблон за създаване на модули подобни на стандартния Възможности.',
            'type_file' => 'Типът <b>Файл</b> съдържа предефинирани полета специфични за описание на документи, като Име на файл, Тип и Дата на публикуване.<br><br>Използвайте този шаблон за създаване на модули подобни на стандартния Документи.',

        ),
        'dropdowns' => array(
            'default' => 'Секцията съдържа списък на дефинираните <b>Полета</b> в модула, сортирани по име.<br><br>Типът модул съдържа предефинирани полета.<br><br>За да създадете ново поле, натиснете <b>Добави поле</b>.<br><br>За да редактирате поле, натиснете съответното <b>Име на поле</b>.<br/><br/>Когато модулът бъде инсталиран всички полета създадени тук, заедно с полетата на шаблоните ще бъдат третирани в Студио като стандартни полета.',
            'editdropdown' => 'Dropdown lists can be used for standard or custom dropdown fields in any module.<br><br>Provide a <b>Name</b> for the dropdown list.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the list items.<br><br>In the <b>Item Name</b> field, provide a name for the option in the dropdown list. This name will not appear in the dropdown list that is visible to users.<br><br>In the <b>Display Label</b> field, provide a label that will be visible to users.<br><br>After providing the item name and display label, click <b>Add</b> to add the item to the dropdown list.<br><br>To reorder the items in the list, drag and drop items into the desired positions.<br><br>To edit the display label of an item, click the <b>Edit icon</b>, and enter a new label. To delete an item from the dropdown list, click the <b>Delete icon</b>.<br><br>To undo a change made to a display label, click <b>Undo</b>. To redo a change that was undone, click <b>Redo</b>.<br><br>Click <b>Save</b> to save the dropdown list.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.',
            'Hidden' => '<b>Hidden</b> fields do not appear in the subpanel.',
            'Default' => '<b>Default</b> fields appear in the subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Filter</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
        ,
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
            'Hidden' => '<b>Hidden</b> fields do not appear in the Search.',
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
            'description' => '<b>Описание</b> на пакета, визуализирано в процеса на инсталация.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Добре дошли в секцията с <b>Развойни инструменти</b> . <br/><br/>Използвайте инструмените в секцията, за да създавате конфигурирате модули и полета в системата',
            'studioBtn' => 'Използвайте инструмента <b>Студио</b> , за да модифицирате инсталирани модули.',
            'mbBtn' => 'Изполвайте инструмента <b>Създаване на модули</b> , за да създадете нови модули.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Използвайте инструмента <b>Редактор на падащи менюта</b> , за да създадете нови или да редактирате съществуващи падащи менюта за полета в системата.',
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
            'newPackage' => 'Натиснете <b>Нов пакет</b> , за да създадете нов пакет.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
            'mbHelp' => 'Използвайте инструмента <b>Създаване на модули</b> , за да създадете пакети от модули, като използвате предефинирани шаблони.',
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
            'mainHelp' => 'Добре дошли в секцията с <b>Развойни инструменти</b> . <br/><br/>Използвайте инструмените в секцията, за да създавате конфигурирате модули и полета в системата',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Изполвайте инструмента <b>Създаване на модули</b> , за да създадете нови модули.',
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
            'newPackage' => 'Натиснете <b>Нов пакет</b> , за да създадете нов пакет.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Редактор на падащи менюта',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Създаване на модули',
    'LBL_STUDIO' => 'Студио',
    'LBL_DROPDOWNEDITOR' => 'Редактор на падащи менюта',
    'LBL_DEVELOPER_TOOLS' => 'Средства за конфигуриране на програмата',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Списък с модули',
    'LBL_HOME' => 'Начало',
    'LBL_NONE' => '-Няма въведени данни-',
    'LBL_DEPLOYE_COMPLETE' => 'Завърши и публикувай',
    'LBL_DEPLOY_FAILED' => 'Възникна грешка по време на процеса, вашият пакет може да не е инсталиран правилно',
    'LBL_AVAILABLE_SUBPANELS' => 'Налични панели',
    'LBL_ADVANCED' => 'Разширен',
    'LBL_ADVANCED_SEARCH' => 'Разширен филтър',
    'LBL_BASIC' => 'Основно',
    'LBL_BASIC_SEARCH' => 'Бързо филтриране',
    'LBL_CURRENT_LAYOUT' => 'Текуща подредба',
    'LBL_CURRENCY' => 'Валута',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_POPUP' => 'Изкачащи прозорци',
    'LBL_POPUPLISTVIEW' => 'Списък със записи на изкачащи прозорци',
    'LBL_POPUPSEARCH' => 'Форма за търсене в изкачащи прозорци',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DETAILVIEW' => 'Форма за визуализиране на детайли',
    'LBL_DROP_HERE' => '[Поставете тук]',
    'LBL_EDIT' => 'Редактиране',
    'LBL_EDIT_LAYOUT' => 'Редактиране на подредби',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Форма за редактиране',
    'LBL_FILLER' => '(Филтер)',
    'LBL_FIELDS' => 'Полета',
    'LBL_FAILED_TO_SAVE' => 'Запазването е неуспешно',
    'LBL_FAILED_PUBLISHED' => 'Публикуването е неуспешно',
    'LBL_HOMEPAGE_PREFIX' => 'Мои',
    'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
    'LBL_LAYOUTS' => 'Подредба на екрани',
    'LBL_LISTVIEW' => 'Списък на записите',
    'LBL_MODULES' => 'Модули',
    'LBL_MODULE_TITLE' => 'Студио',
    'LBL_NEW_PACKAGE' => 'Нов модул',
    'LBL_NEW_PANEL' => 'Нов панел',
    'LBL_NEW_ROW' => 'Нов ред',
    'LBL_PACKAGE_DELETED' => 'Модулът е изтрит',
    'LBL_PUBLISHING' => 'В процес на публикуване ...',
    'LBL_PUBLISHED' => 'Стартирал',
    'LBL_SELECT_FILE' => 'Избиране на файл',
    'LBL_SUBPANELS' => 'Панели със свързани записи',
    'LBL_SUBPANEL' => 'Панел със свързани записи',
    'LBL_SUBPANEL_TITLE' => 'Заглавие: ',
    'LBL_SEARCH_FORMS' => 'Филтър',
    'LBL_SEARCH' => 'Търси',
    'LBL_SEARCH_BUTTON' => 'Търси',
    'LBL_FILTER' => 'Филтър',
    'LBL_TOOLBOX' => 'Инструменти',
    'LBL_QUICKCREATE' => 'Създаване на обект',
    'LBL_EDIT_DROPDOWNS' => 'Редактиране на падащо меню',
    'LBL_ADD_DROPDOWN' => 'Добавяне на ново глобално падащо меню',
    'LBL_BLANK' => '-празно-',
    'LBL_TAB_ORDER' => 'Етикет на поръчка',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Име',
    'LBL_DROPDOWN_LANGUAGE' => 'Език по подразбиране',
    'LBL_DROPDOWN_ITEMS' => 'List Items',
    'LBL_DROPDOWN_ITEM_NAME' => 'Име на падащото меню',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Етикет',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sync to Detail View',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Модул',
    'LBL_LHS_MODULE' => 'Основен модул',
    'LBL_CUSTOM_RELATIONSHIPS' => '* връзката с другите модули е създадена чрез "Студио" или "Създаване на нови модули"',
    'LBL_RELATIONSHIPS' => 'Връзки с други модули',
    'LBL_RELATIONSHIP_EDIT' => 'Редактиране на връзка с друг модул',
    'LBL_REL_NAME' => 'Име',
    'LBL_REL_LABEL' => 'Етикет',
    'LBL_REL_TYPE' => 'Тип',
    'LBL_RHS_MODULE' => 'Свързан модул',
    'LBL_NO_RELS' => 'Няма връзки с други модули',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Състояние по избор',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Колона',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Стойност',
    'LBL_SUBPANEL_FROM' => 'Визуализиран панел',
    'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
    'LBL_ONETOONE' => 'Едно към едно',
    'LBL_ONETOMANY' => 'Едно към много',
    'LBL_MANYTOONE' => 'Много към едно',
    'LBL_MANYTOMANY' => 'Много към много',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Изберете модул, който да бъде редактиран.',
    'LBL_QUESTION_LAYOUT' => 'Изберете подредба, която да бъде редактирана.',
    'LBL_QUESTION_SUBPANEL' => 'Изберете панел със свързани записи, който да бъде редактиран.',
    'LBL_QUESTION_SEARCH' => 'Изберете форма за търсене, която да бъде редактирана.',
    'LBL_QUESTION_MODULE' => 'Изберете компонент на модула, който да бъде редактиран.',
    'LBL_QUESTION_PACKAGE' => 'Изберете модул за редактирате или да създайте нов модул.',
    'LBL_QUESTION_EDITOR' => 'Изберете инструмент.',
    'LBL_QUESTION_DASHLET' => 'Изберете раздел, който да бъде редактиран.',
    'LBL_QUESTION_POPUP' => 'Изберете изкачащ прозорец, който да бъде редактиран.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Име',
    'LBL_LABELS' => 'Етикети',
    'LBL_MASS_UPDATE' => 'Масова актуализация',
    'LBL_DEFAULT_VALUE' => 'Стойност по подразбиране',
    'LBL_REQUIRED' => 'Задължително',
    'LBL_DATA_TYPE' => 'Тип',
    'LBL_HCUSTOM' => 'Потребителски полета',
    'LBL_HDEFAULT' => 'Стандартни полета',
    'LBL_LANGUAGE' => 'Език:',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Редактиране на етикети',
    'LBL_SECTION_PACKAGES' => 'Модули',
    'LBL_SECTION_PACKAGE' => 'Пакет:',
    'LBL_SECTION_MODULES' => 'Модули',
    'LBL_SECTION_DROPDOWNS' => 'Падащи менюта',
    'LBL_SECTION_PROPERTIES' => 'Параметри',
    'LBL_SECTION_DROPDOWNED' => 'Редактор на падащи менюта',
    'LBL_SECTION_HELP' => 'Помощ',
    'LBL_SECTION_MAIN' => 'Главен',
    'LBL_SECTION_FIELDEDITOR' => 'Edit Field',
    'LBL_SECTION_DEPLOY' => 'Публикуване',
    'LBL_SECTION_MODULE' => 'Модул',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'По подразбиране',
    'LBL_HIDDEN' => 'Скрита',
    'LBL_AVAILABLE' => 'Забранени полета',
    'LBL_LISTVIEW_DESCRIPTION' => 'Долу са представени три колони. <b>Стандартната</b> колона включва полета, показвани в списъка със записите по подразбиране.  <b>Наличната</b> колона съдържа полета, с които потребителите да създават собствен списък на записите.  <b>Скритата</b> колона съдържа полета видими само от администратори, с възможност за включване към стандартна или допълнителна колони.',
    'LBL_LISTVIEW_EDIT' => 'Редактор на листа на записите',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Преглед',
    'LBL_MB_RESTORE' => 'Възстанови',
    'LBL_MB_DELETE' => 'Изтрий',
    'LBL_MB_DEFAULT_LAYOUT' => 'Подредба на екрани',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Добави',
    'LBL_BTN_SAVE' => 'Съхрани',
    'LBL_BTN_SAVE_CHANGES' => 'Съхрани промените',
    'LBL_BTN_DONT_SAVE' => 'Игнорирай промените',
    'LBL_BTN_CANCEL' => 'Отмени',
    'LBL_BTN_CLOSE' => 'Затвори',
    'LBL_BTN_SAVEPUBLISH' => 'Съхрани и публикувай',
    'LBL_BTN_CLONE' => 'Дублирай',
    'LBL_BTN_ADDROWS' => 'Добавяне на редове',
    'LBL_BTN_ADDFIELD' => 'Добавяне на поле',
    'LBL_BTN_ADDDROPDOWN' => 'Добавяне на падащо меню',
    'LBL_BTN_SORT_ASCENDING' => 'Във възходящ ред',
    'LBL_BTN_SORT_DESCENDING' => 'В нисходящ ред',
    'LBL_BTN_EDLABELS' => 'Редактиране на етикети',
    'LBL_BTN_UNDO' => 'Върни',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Добавяне на потребителско поле',
    'LBL_BTN_EXPORT' => 'Експортиране на записи от модули',
    'LBL_BTN_DUPLICATE' => 'Дублирай',
    'LBL_BTN_PUBLISH' => 'Публикуване',
    'LBL_BTN_DEPLOY' => 'Публикуване',
    'LBL_BTN_EXP' => 'Експортиране',
    'LBL_BTN_DELETE' => 'Изтрий',
    'LBL_BTN_VIEW_LAYOUTS' => 'Преглед на подредби',
    'LBL_BTN_VIEW_FIELDS' => 'Полета',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Преглед на връзки с други модули',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Добави връзка с друг модул',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Грешка: полетата вече съществуват',
    'ERROR_INVALID_KEY_VALUE' => "Грешка: Невалидна стойност на key: [&#39;]",
    'ERROR_NO_HISTORY' => 'Не са намерени предишни запазени подредби на модула',
    'ERROR_MINIMUM_FIELDS' => 'Тази подредба трябва да съдържа поне едно поле',
    'ERROR_GENERIC_TITLE' => 'Грешка',
    'ERROR_REQUIRED_FIELDS' => 'Сигурни ли сте, че искате да продължите? Следните задължителни полета липсват в текущата подредба',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Име на модула:',
    'LBL_MODULE_NAME' => 'Име на модула:',
    'LBL_AUTHOR' => 'Автор:',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_KEY' => 'Код:',
    'LBL_ADD_README' => 'Прочети',
    'LBL_LAST_MODIFIED' => 'Последно модифицирано:',
    'LBL_NEW_MODULE' => 'Нов модул',
    'LBL_LABEL' => 'Етикет:',
    'LBL_LABEL_TITLE' => 'Етикет',
    'LBL_WIDTH' => 'Ширина',
    'LBL_PACKAGE' => 'Пакет:',
    'LBL_TYPE' => 'Категория:',
    'LBL_NAV_TAB' => 'Табулатор',
    'LBL_CREATE' => 'Създай',
    'LBL_LIST' => 'Списък',
    'LBL_VIEW' => 'Разгледай',
    'LBL_HISTORY' => 'История',
    'LBL_RESTORE_DEFAULT' => 'Настройки по подразбиране',
    'LBL_ACTIVITIES' => 'Дейности',
    'LBL_NEW' => 'Нов',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'Лице',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'This is the subpanel that will be displayed in your module',
    'LBL_MSUB' => 'This is the subpanel that your module provides to the related module for display',
    'LBL_MB_IMPORTABLE' => 'Импортиране',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] was deleted',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Експортиране на записи от модули',
    'LBL_EC_NAME' => 'Име на модула:',
    'LBL_EC_AUTHOR' => 'Автор:',
    'LBL_EC_DESCRIPTION' => 'Описание:',
    'LBL_EC_CHECKERROR' => 'Моля, изберете модул.',
    'LBL_EC_CUSTOMFIELD' => 'customized field(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'customized layout(s)',
    'LBL_EC_NOCUSTOM' => 'No modules have been customized.',
    'LBL_EC_EMPTYCUSTOM' => 'has empty customizations.',
    'LBL_EC_EXPORTBTN' => 'Експортиране',
    'LBL_MODULE_DEPLOYED' => 'Модулът беше инсталиран.',
    'LBL_UNDEFINED' => 'недефинирано',
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
    'LBL_AJAX_LOADING' => 'Зареждане...',
    'LBL_AJAX_DELETING' => 'Изтриване...',
    'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Инсталиране...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Резултат',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Действието е изпълнено успешно',
    'LBL_AJAX_LOADING_TITLE' => 'Изпълнява се...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Моля, изчакайте зареждането...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Сигурни ли сте, че искате да изтриете този пакет? Всички файлове асоциирани с пакета ще бъдат премахнати.',
    'LBL_JS_REMOVE_MODULE' => 'Сигурни ли сте, че искате да изтриете този модул? Всички файлове асоциирани с модула ще бъдат премахнати.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Всички настройки извършени в Студио ще бъдат загубени, когато този модул бъде инсталиран отново. Сигурни ли сте, че искате да продължите?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Инсталиране на пакета',
    'LBL_JS_VALIDATE_NAME' => 'Наименование - трябва да е буквено-цифрово, да започва с буква и да не съдържа празни интервали.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Съществува пакет с такова име',
    'LBL_JS_VALIDATE_KEY' => 'Ключ - трябва да е буквено-цифров, да започва с буква и да не съдържа празни интервали.',
    'LBL_JS_VALIDATE_LABEL' => 'Моля, изберете етикет, който да се използва за заглавие на този модул',
    'LBL_JS_VALIDATE_TYPE' => 'От списъка долу изберете типа на модул, който искате да създадете',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Етикет - добавете етикет за показване над панела със свързани записи',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Изтриването на това персонализирано поле ще изтрие както самото поле, така и всички данни, свързани с персонализираното поле в базата данни. Полето вече няма да се показва в списъците и модулите. \\n\\n Желаете ли да продължите?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Сигурни ли сте, че искате да изтриете връзката с другия модул?',
    'LBL_CONFIRM_DONT_SAVE' => 'Има налични промени от момента на последното Ви запазване. Искате ли да запазите?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Запази промените?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Данните могат да бъдат изтрити и изтриването няма да може да бъде отменено, сигурен ли сте че желаете да продължите?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Изберете необходимия тип на данни на база данните, които ще бъдат попълвани в полето.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Рeдактиране',
    'LBL_RESET_MODULE' => 'Връщане към първоначалните настройки',
    'LBL_REMOVE_CUSTOM' => 'Връщане към първоначалните настройки',
    'LBL_CLEAR_RELATIONSHIPS' => 'Премахване на новосъздадени връзки с модули',
    'LBL_RESET_LABELS' => 'Връщане към стандартните етикети на полетата',
    'LBL_RESET_LAYOUTS' => 'Връщане към първоначалната конфигурация на променения модул',
    'LBL_REMOVE_FIELDS' => 'Премахване на потребителски полета',
    'LBL_CLEAR_EXTENSIONS' => 'Изчистване на разширенията',
    'LBL_HISTORY_TIMESTAMP' => 'Дата и час на запазване',
    'LBL_HISTORY_TITLE' => 'история',

    'fieldTypes' => array(
        'varchar' => 'Текстово поле',
        'int' => 'Цели числа',
        'float' => 'Десетични числа',
        'bool' => 'Отметка',
        'enum' => 'Падащо меню',
        'dynamicenum' => 'Динамичен списък за избор',
        'multienum' => 'Групов избор',
        'date' => 'Дата:',
        'phone' => 'Телефон',
        'currency' => 'Валута',
        'html' => 'HTML',
        'radioenum' => 'Radio бутон',
        'relate' => 'Релация с друг модул',
        'address' => 'Адрес',
        'text' => 'С описание',
        'url' => 'Адрес',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Дата/Час',
        'decimal' => 'Десетичен',
        'image' => 'Изображение',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Често използвани етикети",
        "all" => "Всички етикети",
    ),

    'parent' => 'Свободно свъраване',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Избрахте този елемент за да го премахнете от падащия списък. Всички падащи менюта, използващи този списък с този елемент като стойност, вече няма да показват стойността и стойността вече няма да може да бъде избрана от падащите менюта. Сигурни ли сте, че желаете да продължите?",

    'LBL_ALL_MODULES' => 'Всички Модули',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (свързано с {1} ID)',
);
