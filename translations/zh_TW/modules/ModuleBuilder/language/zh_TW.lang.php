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
    'LBL_LOADING' => '載入中' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => '隱藏選項' /*for 508 compliance fix*/,
    'LBL_DELETE' => '刪除' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => '為軟體包提供一個<b>名稱</b>。你輸入的這個名稱必須是不包含空格的英數字。(例：HR_Management)<br/><br/>你可以提供<b>作者</b>以及<b>描述</b>資訊。<br/><br/>按一下<b>儲存</b>來建立這個軟體包。',
            'modify' => '<b>軟體包</b>可用的屬性和可能的操作顯示在這裡。<br><br>你可以修改軟體包的<b>名稱</b>，<b>作者</b>以及<b>描述</b>，還有查看或自訂內含的所有模組。<br><br>按一下<b>新建模組</b>來為這個軟體包創建一個模組。<br><br>如果軟體包內含至少一個模組，你可以<b>發布</b>及<b>部屬</b>這個軟體包，也可以<b>匯出</b>在這軟體包中的自訂項目。',
            'name' => '文件包的 <b>名稱</b> . 這個名稱將在安裝過程中顯示.',
            'author' => '<b>作者</b> 顯示在安裝過程中作為創建文件包的實體名稱. 作者既可以是個體也可以是公司.
	',
            'description' => '這是文件包的 <b>描述</b> 將在安裝過程中顯示.',
            'publishbtn' => '點擊 <b>發佈</b> 來保存所有輸入的數據和創建文件包的安裝版本的 .zip文件.<br><br>使用 <b>模組載入器 </b> 來上傳 .zip 文件並且安裝文件包.',
            'deploybtn' => '點擊 <b>部署</b> 來保存目前實例中所有輸入的數據和安裝文件包, 包括所有的模組.',
            'duplicatebtn' => '點擊 <b>複製</b> 來保存文件包的內容到一個新文件包中,並且顯示新文件包. <br/><br/>對於新文件包, 將自動生成一個新名稱，此名稱與上次生成的文件包相同並帶有一個數字值. 您可以重命名一個新文件包:輸入一個新 <b>名稱</b> 點擊 <b>保存</b>按鈕.',
            'exportbtn' => '點擊 <b>匯出</b> 來創建 .zip 文件包含在客戶化訂製的文件包中.<br><br> 生成的文件包包含客戶化訂製的代碼, 並且這不是安裝版本的文件包.<br><br>使用<b>模組載入器</b> 來匯入 .zip 文件並且使一個新文件包客戶化訂製有效.',
            'deletebtn' => '點擊 <b>刪除</b> 來刪除此文件包和與此文件包相關的所有文件.',
            'savebtn' => '點擊 <b>保存</b> 將保存所有的改動並使它們有效',
            'existing_module' => '點擊 <b>模組名稱</b> 來編輯欄位屬性等, 關係和顯示風格等在模組中的相關屬性.',
            'new_module' => '點擊 <b>新建模組</b> 來為此文件包創建新模組.',
            'key' => '這 5個字母, 字母數字的 <b>關鍵詞</b> 將會用於所有指南中的前綴, 在當前文件包中所有模組的類名稱和資料庫表.<br><br>關鍵詞用於使表名稱獨一無二.',
            'readme' => '你可以添加 <b>自述</b> 文本在本文件包中.<br><br>自述文件將在安裝過程中有效.',

        ),
        'main' => array(),
        'module' => array(
            'create' => '為該群組提供一個 <b>名稱</b> 。你提供的 <b>稱呼</b> 會顯示在導覽標籤上。 <br/><br/>要選擇以導覽標籤的方式顯示模組，勾選 <b>導覽標籤</b> 核取方塊。<br/><br/>然後選擇類型。 <br/><br/>選擇一個範本類型。每個範本都包含一些指定的欄位，還有預定義的佈局，用來當作你的模組的基本配置。 <br/><br/>按一下 <b>儲存</b> 來建立模組。',
            'modify' => '您可以更改模組屬性或自訂的 <b>欄位</b>，<b>關係</b> 和 <b>佈局</b> 相關的模組。',
            'importable' => '勾選 <b>可導入</b> 核取方塊可以啟用這個模組的導入功能。<br><br>模組的捷徑面板會出現一個指向 導入精靈 的連結。導入精靈可用來將外部資源導入到自訂模組中。',
            'team_security' => '選擇 <b>團隊安全性</b> 核取方塊將使團隊安全在本模組啟用.  <br/><br/>如果團隊安全是啟用的, 團隊選擇欄位將出現在模組的記錄中 ',
            'reportable' => '選中此核取方塊將允許此模組來對它運行報告。',
            'assignable' => '選中此核取方塊將允許在本模組中要指派記錄給所選的使用者。',
            'has_tab' => '勾選 <b>導覽頁籤</b> 將為模組提供導覽頁籤.',
            'acl' => '選擇這個框將使訪問控制有效,包括欄位水平的安全.',
            'studio' => '選中此核取方塊將允許管理員在工作室自訂此模組。',
            'audit' => '選中此核取方塊會啟用審核此模組。將記錄對某些欄位的更改，以便管理員可以查看更改歷史記錄。',
            'viewfieldsbtn' => '按一下 <b>查看欄位</b> 以查看與該模組關聯的欄位來創建和編輯自訂欄位。',
            'viewrelsbtn' => '按一下 <b>查看關係</b> 查看與此模組關聯的關係，並創建新的關係。',
            'viewlayoutsbtn' => '點擊 <b>查看版面佈局</b> 來查看模組的版面佈局以及在佈局中自訂欄位.',
            'duplicatebtn' => '按一下 <b>複製</b> 可複製此模組的屬性到一個新的模組，並且顯示這個新模組。 <br/><br/>會自動產生一個名稱給新模組，新模組的名稱將是添加一個數字在原模組的名稱末端。',
            'deletebtn' => '按一下 <b>刪除</b> 以刪除此模組。',
            'name' => '這是目前模組的<b>名稱</b>。<br/><br/>此名稱必須是不含空格的字母數字的組合，並且必須以字母開頭。(例: HR_Management)',
            'label' => '這是將出現在此模組的導覽頁籤的 <b>標籤</b>。 ',
            'savebtn' => '按一下 <b>儲存</b> 將儲存所有模組相關的已輸入資料。',
            'type_basic' => '<b>基本</b> 範本類型提供基本欄位, 如名稱, 負責人, 團隊, 創建日期和描述欄位。',
            'type_company' => '<b>公司</b> 範本類型提供了特定組織欄位, 如公司名稱, 產業和付款地址.<br/><br/>使用這個範本來創建模組將非常類似於標準客戶模組.',
            'type_issue' => '<b>問題</b> 範本類型提供案例- 和特定故障欄位, 如數量, 狀態, 優先順序和描述.<br/><br/>使用這個範本創建模組非常類似於標準案例和臭蟲模組.',
            'type_person' => '<b>人員</b> 範本類型提供特定個人欄位, 如敬稱, 標題, 名稱, 地址和電話號碼.<br/><br/>使用這個範本來創建模組將非常類似與標準合約和潛在客戶模組.',
            'type_sale' => '<b>銷售</b> 範本類型提供商業機會欄位，如潛在客戶來源, 階段, 金額和機率。<br/><br/>使用這個範本來建立的模組會與標準的商業機會模組相似。',
            'type_file' => '<b>檔案</b> 模組提供文件的欄位, 如檔案名稱, 文件類型, 和發布日期。<br><br>使用這個範本來建立的模組會與標準的文件模組相似。',

        ),
        'dropdowns' => array(
            'default' => '在這裡會列出所有的 <b>下拉清單中</b>。<br><br>下拉清單中可以用於在任何模組中的下拉欄位。 <br><br>要更改現有的下拉清單，按一下下拉清單中的名稱。<br><br>按一下 <b>添加下拉清單</b> 創建一個新的下拉清單。',
            'editdropdown' => '下拉選單可用於任何模組中的標準或自訂下拉選單欄位。<br><br>為下拉選單提供一個<b>名稱</b>。<br><br>如果有任何語言包被安裝，你可以選擇<b>語言</b>來定義清單項目。<br><br>在<b>項目名稱</b>欄位中，提供下拉選單的選項名稱。這個名稱並不會顯示給使用者。<br><br>在<b>顯示名稱</b>欄位中，提供要顯示給使用者的名稱。<br><br>提供項目名稱及顯示名稱後，按一下<b>添加</b>可添加項目到下拉選單中。<br><br>如要變更項目的順序，拖放項目到想要的位置即可。<br><br>如要編輯項目的顯示名稱，按一下<b>編輯圖示</b>，並且輸入新名稱。如要刪除項目，按一下<b>刪除圖示</b>。<br><br>如要取消顯示名稱的變動，按一下<b>取消</b>。如要重作剛才取消的變更，按一下<b>重作</b>。<br><br>按一下<b>儲存</b>以儲存這個下拉選單。',

        ),
        'subPanelEditor' => array(
            'modify' => '所有可以在<b>子面板</b>中顯示的欄位都在這裡。<br><br><b>預設</b>欄包含了已經顯示在子面板中的欄位。<br/><br/><b>隱藏</b>欄包含了可以加到預設欄中的欄位。'
        ,
            'savebtn' => '按一下 <b>儲存及佈署</b> 可儲存您所做的變動，並且他們在該模組內啟用。',
            'historyBtn' => '單擊 <b>查看歷史</b> 可以查看並從歷史中恢復先前保存的佈局。',
            'historyDefault' => '按一下 <b>恢復預設值</b> 可將檢視恢復為原始佈局。',
            'Hidden' => '<b>隱藏</b>欄位不會顯示在子面板中。',
            'Default' => '<b>預設</b>欄位顯示在子面板中。',

        ),
        'listViewEditor' => array(
            'modify' => '在這裡有所有可以在 <b>清單檢視</b> 中顯示的欄位。<br><br><b>預設</b> 欄包含的欄位，預設顯示在清單檢視。 <br/> <br/><b>可用</b> 欄包含使用者可以選擇在搜尋中創建自訂清單檢視的欄位。<br/> <br/><b>隱藏</b> 欄包含可添加到預設或可用欄的欄位。'
        ,
            'savebtn' => '按一下 <b>儲存及佈署</b> 可儲存您所做的變動，並且他們在該模組內啟用。',
            'historyBtn' => '按一下<b>查看歷史紀錄</b>以查看和恢復之前儲存的佈局。<br><br>在<b>查看歷史紀錄</b>中<b>恢復</b>之前儲存的佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'historyDefault' => '按一下<b>恢復預設值</b>以將一個檢視恢復到原始佈局。<br><br><b>恢復預設值</b>可以恢復到原始佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'Hidden' => '<b>隱藏</b> 欄位目前未提供給使用者在ListView中看到。',
            'Available' => '<b>可用</b> 的欄位在預設情況下不顯示，但可以由使用者添加到清單檢視中。',
            'Default' => '<b>預設</b> 的欄位會出現在非使用者自訂的清單檢視中。'
        ),
        'popupListViewEditor' => array(
            'modify' => '所有可以在<b>清單檢視</b>中顯示的欄位都在這裡。<br><br><b>預設</b>欄包含了預設顯示在清單檢視中的欄位。<br/><br/><b>隱藏</b>欄包含了可以加到預設欄中的欄位或是可用的欄。'
        ,
            'savebtn' => '按一下 <b>儲存及佈署</b> 可儲存您所做的變動，並且他們在該模組內啟用。',
            'historyBtn' => '按一下<b>查看歷史紀錄</b>以查看和恢復之前儲存的佈局。<br><br>在<b>查看歷史紀錄</b>中<b>恢復</b>之前儲存的佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'historyDefault' => '按一下<b>恢復預設值</b>以將一個檢視恢復到原始佈局。<br><br><b>恢復預設值</b>可以恢復到原始佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'Hidden' => '<b>隱藏</b> 欄位目前未提供給使用者在ListView中看到。',
            'Default' => '<b>預設</b> 的欄位會出現在非使用者自訂的清單檢視中。'
        ),
        'searchViewEditor' => array(
            'modify' => '所有可以在<b>過濾</b>表單中顯示的欄位都在這裡。<br><br><b>預設</b>欄包含了已經顯示在搜尋表單中的欄位。<br/><br/><b>隱藏</b>欄包含了管理員可以加到搜尋表單中的欄位。'
        ,
            'savebtn' => '按一下 <b>儲存及佈署</b> 將儲存所有的變動並且啟用他們',
            'Hidden' => '<b>隱藏</b> 欄位不出現在搜尋中。',
            'historyBtn' => '按一下<b>查看歷史紀錄</b>以查看和恢復之前儲存的佈局。<br><br>在<b>查看歷史紀錄</b>中<b>恢復</b>之前儲存的佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'historyDefault' => '按一下<b>恢復預設值</b>以將一個檢視恢復到原始佈局。<br><br><b>恢復預設值</b>可以恢復到原始佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'Default' => '<b>預設</b> 的欄位顯示在搜尋中。'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>佈局</b> 區域包含了目前顯示在 <b>詳細檢視</b> 內的欄位。 <br/><br/><b>工具箱</b> 包含 <b>回收桶</b> 和可以添加到佈局的佈局元素和欄位。<br><br>如要更改佈局，可藉由在<b>工具箱</b> 或<b>佈局</b>或是佈局內，拖拉元素和欄位。 <br><br>如要從佈局中刪除欄位，可將欄位拖動到 <b>回收桶</b>。這個欄位就會在工具箱中出現。',
            'defaultquickcreate' => '<b>佈局</b> 區域包含了目前顯示在 <b>快速創建</b> 表單內的欄位。<br><br>按下創建按鈕後，快速創建表單會出現在模組子面板中。<br/><br/><b>工具箱</b> 包含 <b>回收桶</b> 和可以添加到佈局的佈局元素和欄位。<br><br>如要更改佈局，可藉由在<b>工具箱</b> 或<b>佈局</b>或是佈局內，拖拉元素和欄位。 <br><br>如要從佈局中刪除欄位，可將欄位拖動到 <b>回收桶</b>。這個欄位就會在工具箱中出現。',
            //this default will be used for edit view
            'default' => '<b>佈局</b> 區域包含了目前顯示在 <b>清單檢視</b> 內的欄位。 <br/><br/><b>工具箱</b> 包含 <b>回收桶</b> 和可以添加到佈局的佈局元素和欄位。<br><br>如要更改佈局，可藉由在<b>工具箱</b> 或<b>佈局</b>或是佈局內，拖拉元素和欄位。 <br><br>如要從佈局中刪除欄位，可將欄位拖動到 <b>回收桶</b>。這個欄位就會在工具箱中出現。',
            'saveBtn' => '按一下 <b>保存</b> 來保存你的佈局自上次保存以來所做的更改。<br><br>所做的更改將不會顯示在模組直到你部署已保存的更改。',
            'historyBtn' => '按一下<b>查看歷史紀錄</b>以查看和恢復之前儲存的佈局。<br><br>在<b>查看歷史紀錄</b>中<b>恢復</b>之前儲存的佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'historyDefault' => '按一下<b>恢復預設值</b>以將一個檢視恢復到原始佈局。<br><br><b>恢復預設值</b>可以恢復到原始佈局的欄位位置。如要更改欄位名稱，按一下每個欄位旁邊的編輯圖示。',
            'publishBtn' => '按一下<b>儲存並佈署</b>來將所有的變更儲存，並且啟用這些模組的變動。<br><br>此佈局將立即顯示在模組中。',
            'toolbox' => '工具箱包含各種各樣編輯版面的有用功能, 包括刪除的部分, 一組額外的元素和一組有效的欄位. 任何這些都可以被拖拽到界面上.',
            'panels' => '<b>佈局</b> 區域提供了一個檢視以顯示你的佈局在佈署之後，模組被變動後的樣子。<br/><br/>你可以通過拖放來變更欄位、橫列和面板的位置。<br/><br/>拖放到工具箱中的<b>回收桶</b>就可以刪除元素，或是從<b>工具箱</b>中拖放新的元素到佈局中想要的位置。',
            'delete' => '在這裡拖拽任何元素來沖版面佈局中刪除它',
            'property' => '編輯此欄位的顯示名稱。<br/><b>標籤順序</b> 控制標籤鑰要按什麼順序在欄位之間切換。',
        ),
        'fieldsEditor' => array(
            'default' => '<b>欄位</b> 為此模組可用的欄位，以欄位名稱列出。<br><br>創建的自訂欄位會顯示在預設欄位的上方。<br><br>如要編輯欄位，按一下<b>欄位名稱</b>，<br/><br/>如要創建新欄位，按一下<b>添加欄位</b>。',
            'mbDefault' => '<b>欄位</b> 為此模組可用的欄位，以欄位名稱列出。<br><br>如要配置欄位的屬性，按一下欄位名稱。<br><br>如要創建新欄位，按一下<b>添加欄位</b>。新欄位的顯示名稱和其他屬性，可以在建立後按一下欄位名稱以編輯。<br><br>當模組被佈署後，模組中建立的新欄位就會被視為預設欄位顯示在工作室中。',
            'addField' => '為新欄位選擇<b>資料類型</b>。你選擇的類型將決定什麼樣的字元可以被輸入到欄位中。例如，只有整數數字可以被輸入到整數類型的欄位中。<br><br>提供欄位的 <b>名稱</b>。名稱必須是英數字組合並且不能包含空白字元。可以有底線。<br><br><b>顯示名稱</b> 是在模組佈局中欄位顯示的名稱。<b>系統標籤</b> 用來在程式碼中參考這個欄位。<br><br>按照所選的欄位資料類型，以下列出的部份或是全部屬性可以被設定:<br><br> <b>幫助文字</b> 在使用者將滑鼠懸停在欄位時顯示，用來告訴使用者該輸入什麼類型的資料。<br><br> <b>註解文字</b> 只能在工作室或是模組編輯器可見，用來為管理員描述此欄位。<br><br> <b>預設值</b> 會在欄位中顯示。使用者可以輸入新的值或是使用預設值。<br><br>勾選 <b>大量更新</b> 核取方塊可以啟用這欄位的大量更新功能。<br><br><b>最大大小</b> 值決定這欄位可以輸入文字最大數量。<br><br>勾選 <b>必要欄位</b> 核取方塊可設定此欄位為必要。儲存之前必須輸入值在此欄位中。<br><br>勾選 <b>可報表</b> 核取方塊允許此欄位用來過濾或是顯示資料在報表中。<br><br>勾選 <b>審計</b> 核取方塊可讓這個欄位的資料變動被追蹤及紀錄。<br><br>選擇 <b>可導入</b> 中的選項，讓此欄位在導入過程中允許, 不允許或必須含有這個欄位。<br><br>選擇 <b>合併重複</b> 中的選項，讓欄位啟用或停用合併重複和尋找重複的功能。<br><br>額外屬性可以在特定資料型態中被設定。',
            'editField' => '該欄位的屬性可自訂。<br><br>按一下<b>Clone</b>來創建有相同屬性的新欄位。',
            'mbeditField' => '範本欄位的<b>顯示名稱</b>是可自訂的。其他欄位的屬性無法自訂。<br><br>按一下<b>Clone</b>來創建有相同屬性的新欄位。<br><br>如要移除一個範本欄位讓他不在模組中顯示，從對應的<b>佈局</b>中移除欄位。'

        ),
        'exportcustom' => array(
            'exportHelp' => '匯出自訂項在工作室中可通過 <b>模組載入器</b> 來創建自訂包並且上傳到另一個 SuiteCRM 實例。<br><br>第一，提供 <b>自訂包名稱</b>。 您可以提供 <b>作者</b> 和 <b>描述</b> 資訊。<br><br>選擇自訂包含要匯出的自訂模組。只有包含自訂項的模組將顯示供您選擇。<br><br>然後按一下 <b>匯出</b>，創建一個包含有自訂項目的.Zip 檔案。',
            'exportCustomBtn' => '點擊 <b>導出</b> 創建一個 .zip 文件，用於您想要導出的客戶化文件包.
	',
            'name' => '這是檔案包的 <b>名稱</b>。將在安裝過程中顯示。',
            'author' => '這是 <b>作者</b> 將在安裝過程中顯示，並作為創建檔案包的實體名稱。作者可以是個人或是公司。',
            'description' => '這是文件包的 <b>描述</b> 將在安裝過程中顯示.',
        ),
        'studioWizard' => array(
            'mainHelp' => '歡迎來到 <b>開發工具</b> 區. <br/><br/>在本區域使用工具來創建和管理標準和自訂模組和欄位.',
            'studioBtn' => '使用 <b>工作室</b> 來自訂已部署的模組。',
            'mbBtn' => '使用 <b>模組產生器</b> 來創建新的模組。',
            'sugarPortalBtn' => '使用 <b>SuiteCRM Portal編輯器</b> 來管理和自訂SuiteCRM Portal。',
            'dropDownEditorBtn' => '使用 <b>下拉框編輯器</b> 添加和編輯用於應用的全局下拉框.',
            'appBtn' => '使用應用模型來客戶化程序中的不同屬性, 如多少TPS報表被顯示在主頁中',
            'backBtn' => '返回到前一步.',
            'studioHelp' => '使用 <b>工作室</b> 來確定什麼和如何在模組中顯示資訊。',
            'moduleBtn' => '按一下可編輯此模組。',
            'moduleHelp' => '您可以自訂模組的元件出現在這裡。<br><br>點擊圖示，選擇要編輯的元件。',
            'fieldsBtn' => '創建和自訂 <b>欄位</b> 來存儲模組中的資訊。',
            'labelsBtn' => '點擊 <b>保存</b> 保存您的客戶化標簽.',
            'relationshipsBtn' => '新增或檢視模組已存在的<b>關係</b>。',
            'layoutsBtn' => '客戶化 <b>版面</b> 的編輯, 細節, 列表和搜索顯示.',
            'subpanelBtn' => '決定哪些欄位要出現在此 <b>子面板</b> 模組中。',
            'portalBtn' => '自訂模組出現在 <b>SuiteCRM Portal</b> 的<b>佈局</b>。',
            'layoutsHelp' => '選擇一個 <b>界面來編輯</b>.<br/<br/>改變版面中包含的數據欄位和輸入數據, 點擊 <b>編輯顯示</b>.<br/><br/>在編輯顯示中來改變顯示數據和輸入數據的欄位的版面, 點擊 <b>細節顯示</b>.<br/><br/>該面在默認列表中的列, 點擊 <b>列表顯示</b>.<br/><br/>在界面中來改變基本和高級搜索, 點擊 <b>搜索</b>.',
            'subpanelHelp' => '選擇<b>子面板</b> 用於編輯.',
            'newPackage' => '點擊  <b>新建文件包</b> 創建一個新文件包.',
            'exportBtn' => '按一下 <b>匯出自訂項</b> 來創建並下載檔案包，包含在工作室中進行自訂的特定模組。',
            'mbHelp' => '使用 <b>模組產生器</b> 來創建軟體包，包含了標準或自訂的物件的自訂模組。',
            'viewBtnEditView' => '自訂模組的 <b>編輯檢視</b> 佈局。<br><br>編輯檢視包含用於使用者輸入資料的欄位的表單。',
            'viewBtnDetailView' => '自訂模組的 <b>詳細檢視</b> 佈局。<br><br>詳細檢視 顯示使用者輸入的欄位資料。',
            'viewBtnDashlet' => '自訂模組的 <b>SuiteCRM Dashlet</b>，包含SuiteCRM Dashlet清單檢視和搜尋等。<br><br>SuiteCRM Dashlet 將可添加到首頁模組中的頁面。',
            'viewBtnListView' => '自訂的模組的 <b>清單檢視</b> 佈局。<br><br>搜尋結果會顯示在清單檢視中。',
            'searchBtn' => '自訂模組的 <b>搜尋</b> 佈局。<br><br>確定哪些欄位可用於篩選顯示在清單檢視中的記錄。',
            'viewBtnQuickCreate' => '自訂模組的 <b>快速創建</b> 佈局。<br><br>快速創建 表單出現在子面板和電子郵件模組。',
            'addLayoutHelp' => "要創建一個安全性群組的自訂版式，選擇適當的安全性群組和佈局作為一個起點。",
            'searchHelp' => '<b>過濾</b>表單可以自訂顯示在這裡。<br><br>過濾表單包含要用來過濾紀錄的欄位。<br><br>按一下圖示來選擇過濾佈局以編輯。',
            'dashletHelp' => '<b>SuiteCRM Dashlet</b>佈局可以自訂顯示在這裡。<br><br>SuiteCRM Dashlet 將可添加到首頁模組中的頁面。',
            'DashletListViewBtn' => '<b>SuiteCRM Dashlet清單檢視</b> 顯示基於SuiteCRM Dashlet搜尋過濾的紀錄。',
            'DashletSearchViewBtn' => '<b>SuiteCRM Dashlet搜尋</b> 過濾SuiteCRM Dashlet清單檢視的紀錄。',
            'popupHelp' => '<b>彈出視窗</b>佈局可以在這裡被自訂顯示。<br>',
            'PopupListViewBtn' => '<b>彈出清單檢視</b> 顯示彈出搜尋檢視的紀錄。',
            'PopupSearchViewBtn' => '<b>彈出搜尋</b> 顯示彈出清單顯示的紀錄。',
            'BasicSearchBtn' => '在模組過濾編輯區中自訂 <b>快速過濾</b> 表格。',
            'AdvancedSearchBtn' => '在模組過濾編輯區中自訂 <b>進階過濾</b> 表格。',
            'portalHelp' => '管理和自訂 <b>SuiteCRM Portal</b>。',
            'SPUploadCSS' => '為SuiteCRM Portal上上傳一個 <b>樣式表</b>。',
            'SPSync' => '<b>同步</b> 自訂選項到 SuiteCRM Portal實例。',
            'Layouts' => '自訂SuiteCRM Portal模組的 <b>佈局</b>。',
            'portalLayoutHelp' => '在 SuiteCRM Portal 內的模組出現在這一領域。<br><br>選擇一個模組以編輯 <b>佈局</b>。',
            'relationshipsHelp' => '所有的模組和其他已部署的模組之間存在的 <b>關係</b> 都在這裡。<br><br>關係的<b>名稱</b> 是系統生成的名稱。 <br><br><b>主模組</b> 是擁有關系的模組。 例如，所有其主模組是帳戶模組的關係屬性都儲存在帳戶資料庫表中。<br><br><b>類型</b> 是主模組和 <b>相關模組</b> 之間存在的關係的類型.<br><br>點擊行標題按某行排序。<br><br>按一下列中的關係表，以查看與關係關聯的屬性。 <br><br>點擊 <b>添加關係</b>，創建新的關係。<br><br>可以任何兩個部署模組之間創建關係。',
            'relationshipHelp' => '<b>關係</b>可以在模組和其他已佈署模組間建立。<br><br>在模組紀錄中，關係可以快速地透過子面板和關聯的欄位顯示。<br><br>為此模組選擇一個關聯<b>類型</b>:<br><br> <b>一對一</b> - 二個模組都有關連欄位。<br><br> <b>一對多</b> - 主模組的紀錄包含一個子面板，關聯的模組會包含一個關聯欄位。<br><br> <b>多對多</b> - 二個模組的紀錄都顯示子面板。<br><br>為此關係選擇 <b>關聯的模組</b>。<br><br>如果這關係的類型有子面板，為對應模組選擇子面板檢視。<br><br>按一下<b>儲存</b>以創建這個關係。',
            'convertLeadHelp' => '你可以在這裡添加模組到轉換佈局畫面並且修改現有佈局。<br/>
		你可以拖動表格中的列來重新佈局模組。<br/><br/>
		<b>模組:</b> 模組的名稱。<br/><br/>
		<b>必要:</b> 必要模組必須在轉換潛在客戶之前被建立或被選擇。<br/><br/>
		<b>複製資料:</b> 如果勾選，潛在客戶中的欄位會被複製到新建立的紀錄中有同樣名稱的欄位。<br/><br/>
		<b>允許選項:</b> 在連絡人中有相關欄位的模組會被選擇而不是在轉換潛在客戶時建立。<br/><br/>
		<b>編輯:</b> 修改這個模組的轉換佈局。<br/><br/>
		<b>刪除:</b> 從轉換佈局中刪除這個模組。<br/><br/>',


            'editDropDownBtn' => '編輯一個全局下拉框',
            'addDropDownBtn' => '添加一個新的全局下拉框',
        ),
        'fieldsHelp' => array(
            'default' => '<b>欄位</b> 以欄位名稱的方式在這裡列出。<br><br>模組範本包含了預先決定的欄位。<br><br>要創建一個新欄位，按一下<b>添加欄位</b>。<br><br>要編輯欄位，按一下<b>欄位名稱</b>。<br/><br/>。在模組被佈署後，在模組產生器中新增的欄位和範本欄位，都會在工作室中被視為標準欄位。',
        ),
        'relationshipsHelp' => array(
            'default' => '此<b>關係</b>已經被創建介於此模組和其他的模組。<br><br>關係<b>名稱</b>是系統產生的名稱。<br><br><b>主模組</b>是擁有關係的模組。此模組的屬性被存放在主模組的資料庫資料表中。<br><br><b>類型</b>是介於主模組和<b>關聯模組</b>的關係類型。<br><br>點一下行標題可以按行來排序。<br><br>按一下關係表格中的一列可以檢視及編輯此關係的相關屬性。<br><br>按一下<b>添加關係</b>可以建立一個新的關係。',
            'addrelbtn' => '添加關聯幫助..',
            'addRelationship' => '可以創建模塊與自定義模塊或已部署模塊間的<b>關聯</b>。<br><br> 在模塊的紀錄中，關聯由子面板與關聯子欄位體現。<br><br>為模塊可選擇以下幾種關聯 <b>類型</b> :<br><br> <b>一對一</b> - 兩個模塊都會包含關聯欄位。<br><br> <b>一對多</b> - 主模塊將包含子面板，關聯模塊將包含關聯欄位。<br><br> <b>多對多</b> - 兩個模塊均顯示子面板。<br><br> 選擇 <b>關聯模塊</b>。 <br><br>如果關聯涉及子面板，選擇相應模塊的子面版外觀。<br><br> 單擊 <b>保存</b> 新建關聯。',
        ),
        'labelsHelp' => array(
            'default' => '欄位的 <b>標籤</b> 和其他模組中的標題可以被修改。<br><br>在欄位中按一下可以編輯標籤，輸入一個新的標籤並按一下<b>儲存</b>。<br><br>如果有任何語言包被安裝在應用程式中，你可以選擇標籤要使用的<b>語言</b>。',
            'saveBtn' => '按一下 <b>儲存</b> 以儲存所有變動。',
            'publishBtn' => '按一下 <b>儲存及佈署</b> 以儲存所有的變動並且啟用他們。',
        ),
        'portalSync' => array(
            'default' => '輸入Portal實例的 <b>SuiteCRM Portal URL</b> 以更新，並按一下<b>Go</b>。<br><br>然後輸入一個有效的 SuiteCRM 使用者名稱和密碼，然後按一下<b>開始同步</b>。<br><br> 對SuiteCRM Portal <b>佈局</b>的自訂變更與<b>樣式表</b>，只要其一被上傳了，就會被傳到指定的Portal實例。',
        ),
        'portalStyle' => array(
            'default' => '你可以自訂SuiteCRM Portal的樣子，通過套用樣式表。<br><br>選擇一個<b>樣式表</b>來上傳。<br><br>樣式表會在下一次同步時被套用在SuiteCRM Portal中。',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => '若要開始一個專案，請按一下 <b>新包裝</b> 來創建新包裝來容納您自訂的模組。<br/> <br/>每個包裝可以包含一個或多個模組。 <br/> <br/>例如，您可能想要創建包含一個自訂模組相關的標準帳戶模組包裝。或者，您可能想要創建將一起工作的幾個新模組專案，並且跟在應用程式中的其他模組相關。',
            'somepackages' => '一個 <b>專案包</b> 作為容器的自訂模組，所有的一切都是一個專案的一部分。專案包可以包含一個或多個自訂 <b>模組</b> 可與其他應用程式中的模組關聯。 <br/><br/> 創建您的專案包之後，你可以馬上為它創建模組，或是返回到模組產生器在以後的時間才完成專案。<br><br>專案完成後，您可以 <b>部署</b> 專案包來安裝應用程式中的自訂模組。',
            'afterSave' => '你的新自訂包應包含至少一個模組。您可以創建一個或多個自訂模組包。 <br/> <br/>按一下 <b>新建模組</b> 來創建自訂的模組，用於此自訂包。 <br/> <br/>創建至少一個模組後，你可以發佈或部署自訂包，使其可用於您的實例和/或其他使用者的實例。 <br/> <br/>若要在一個步驟內部署自訂包於您的 SuiteCRM 實例中，按一下 <b>部署</b>。<br><br>點擊 <b>發佈</b> 將自訂包保存為一個.Zip 檔案。該.Zip 檔案保存到您的系統後，使用 <b>模組載入器</b> 上傳並安裝在您的 SuiteCRM 實例內。 <br/> <br/>您可以將檔案分發給其他使用者上傳且安裝到自己 SuiteCRM 實例中。',
            'create' => '一個 <b>專案包</b> 作為容器的自訂模組，所有的一切都是一個專案的一部分。專案包可以包含一個或多個自訂 <b>模組</b> 可與其他應用程式中的模組關聯。 <br/><br/> 創建您的專案包之後，你可以馬上為它創建模組，或是返回到模組產生器在以後的時間才完成專案。',
        ),
        'main' => array(
            'welcome' => '使用 <b>開發工具</b> 來創建和管理標準或自訂模組和欄位. <br/><br/>如要在應用程式中管理模組, 按一下 <b>工作室</b>. <br/><br/>如要創建自訂模組, 按一下 <b>模組產生器</b>.',
            'studioWelcome' => '當前已安裝的模組，包括標準和模組載入的物件，都是可在工作室內自訂。'
        ),
        'module' => array(
            'somemodules' => "由於當前自訂包中包含至少一個模組，您可以 <b>部署</b> 自訂包中的模組到您的 SuiteCRM 實例中或 <b>發佈</b> 自訂包將要安裝到當前 SuiteCRM 實例或另一個實例使用 <b>模組載入器</b>。 <br/> <br/>要直接安裝自訂包在您的 SuiteCRM 實例，請按一下 <b>部署</b>。<br><br>要創建可以載入並安裝的 .Zip 檔案包在當前的 SuiteCRM 實例和其他實例可使用 <b>模組載入器</b>，按一下 <b>發佈</b>。 <br/> <br/>當你準備好時，可以分階段，生成此自訂包模組並且發佈或部署。<br/> <br/>發佈或部署自訂包後，您可以進一步更改自訂包屬性以及自訂模組。 然後重新發佈或重新部署自訂包以應用更改。",
            'editView' => '這裡您可以編輯存在的欄位. 您能移除任何存在的欄位或者在左面板中添加有效欄位.',
            'create' => '選擇你想要建立的模組<b>類型</b>時，請記得你想要有什麼欄位在模組中。<br/><br/>每個模組範本都包含了該類型標題所描述的模組相關的欄位。<br/><br/><b>基本</b> - 提供標準模組中的基本欄位，如：名稱、負責人、團隊、建立日期和描述欄位。<br/><br/> <b>公司</b> - 提供組織特定欄位，如：公司名稱、行業和收款地址。使用此範本會建立跟標準的客戶模組十分相似的模組。<br/><br/> <b>個人</b> - 提供個人特定欄位，如：尊稱、頭銜、姓名、地址和電話號碼。使用此範本會建立跟標準的連絡人或潛在客戶模組十分相似的模組。<br/><br/><b>問題</b> - 提供案例和bug特定欄位，如：編號、狀態、優先度和描述。此用此範本會建立與標準的案例或Bug模組十分相似的模組。<br/><br/>注意：建立模組後，可以編輯範本提供的欄位的名稱/標籤，也可以建立自訂欄位到模組佈局中。',
            'afterSave' => '藉由編輯和建立欄位來自訂模組以滿足你的需求，並建立與其他模組的關係並且安排佈局裡面的欄位。<br/><br/>如要查看範本欄位及管理自訂欄位，按一下<b>查看欄位</b>。<br/><br/>如要建立及管理模組之間或是模組與其他軟體包的關係，按一下<b>查看關係</b>。<br/><br/>。如要編輯模組佈局，按一下<b>查看佈局</b>。你可以隨時在工作室裡修改現有的模組的詳細檢視、編輯檢視及清單檢視的佈局。<br/><br/>如要建立與目前模組有相同屬性的模組，按一下<b>複製</b>。你可以繼續在新模組中進行自訂。',
            'viewfields' => '模組中的欄位可以應您的需求自訂.<br/><br/>您可以刪除標準欄位, 但是您需要在版面頁的特定版面移除他們. <br/><br/>您可以編輯標準欄位的標簽. 標準欄位其他的屬性不可以被編輯. 儘管如此, 您可以點擊欄位名稱快速創建擁有相似屬性的新欄位，點擊 <b>Clone</b> 在 <b>屬性</b> 表格中.  輸入任何新屬性, 之後點擊 <b>保存</b>.<br/><br/>如果你正自訂一個新模組, 點擊模組以安裝, 不是所有的欄位屬性都可以被編輯的.  當您在自訂模組發佈和安裝檔案包之前，請為標準欄位和客戶化欄位設置所有的屬性.',
            'viewrelationships' => '在檔案包中，您可以在當前模組和其他模組創建多對多的關聯, 或者是在當前模組和已經安裝到應用中的模組間創建.<br><br> 創建一對多和一對一的關聯, 為模組創建 <b>關聯</b> 和 <b>Flex Relate</b> 欄位.',
            'viewlayouts' => '您可以通過<b>編輯顯示</b>控制欄位對於計算數據的有效性 .  您也可以通過 <b>細節顯示</b>控制數據的顯示.  顯示可以不匹配. <br/><br/>當在子面板中點擊<b>創建</b>，快速創建窗體將顯示. 默認的,  <b>快速創建</b> 窗口版面與默認的<b>編輯顯示</b> 版面相同. 您可以客戶化快速創建窗體以便它能包含與編輯顯示版面少數不同的欄位. <br><br>您可以使用<b>角色管理</b>版面客戶化訂製模塊安全性.<br><br>',
            'existingModule' => '在創建和客戶化本模塊之後, 您能創建附加模塊或者返回到文件包去 <b>發佈</b> 或者 <b>擴展</b> 文件包.<br><br>創建附加模塊，點擊 <b>複製</b> 創建與當前模塊相同屬性的模塊, 或導航返回到文件包, 並點擊 <b>新建模塊</b>.<br><br> 如果您準備 <b>發佈</b> 或者 <b>展開</b> 包含本模塊的文件包, 導航返迴文件包執行此功能. 您能發佈和展開的文件包至少要包含一個模塊.',
            'labels' => '標準欄位的標簽和客戶化欄位標簽可以被修改.  改變欄位標簽將不作用於存儲在此欄位中的數據.',
        ),
        'listViewEditor' => array(
            'modify' => '左方顯示了三個欄。"預設"欄裡有預設顯示在清單檢視中的欄位，"可用"欄裡有使用者可以選擇來建立自訂清單檢視，"隱藏"欄裡則有其他目前被禁用的欄位，需由管理員增加到預設欄或是可用欄才能被使用者使用。',
            'savebtn' => '按一下 <b>儲存</b> 將儲存所有的變動並且啟用他們。',
            'Hidden' => '隱藏的欄位是目前不提供給使用者用於清單檢視中的欄位。',
            'Available' => '可用的欄位在預設情況下不顯示，但可由使用者啟用。',
            'Default' => '預設欄位將顯示給尚未創建自訂清單檢視設定的使用者。'
        ),

        'searchViewEditor' => array(
            'modify' => '有兩個欄顯示在左側。"預設"欄包含了在搜尋檢視中會顯示的欄位，"隱藏"欄包含了管理員要添加到檢視中的欄位。',
            'savebtn' => '按一下 <b>儲存及佈署</b> 將儲存所有的變動並且啟用他們。',
            'Hidden' => '隱藏的欄位是不會顯示在搜尋檢視中的欄位。',
            'Default' => '預設欄位會顯示在搜尋檢視中。'
        ),
        'layoutEditor' => array(
            'default' => '左方顯示了二個欄。右手邊的欄，標記為目前佈局或是佈局預覽，在此你可以變更模組佈局。左手邊的欄，標記為工具箱，包含一些可用的元素及工具，用來編輯佈局。<br/><br/>如果佈局區域被標示為"目前佈局"，表示你正在編輯模組顯示的佈局。<br/><br/>如果它標示為"佈局預覽"表示這個佈局已經按下儲存按鈕，或許已經與模組使用者看到的版本不同。',
            'saveBtn' => '按一下此按鈕以儲存佈局，以便您可以儲存您的更改。當您返回到此模組，你將開始使用這個改變的佈局。你的佈局然而將無法被使用者模組，直到按一下保存併發布按鈕。',
            'publishBtn' => '按一下此按鈕可部署佈局。這意味著此佈局將立即被這個模組的使用者看到。',
            'toolbox' => '該工具箱中包含各種有用的功能，用於編輯佈局，其中包括一個垃圾區、 一組額外的元素和一組可用的欄位。任何一種都可以拖放到佈局中。',
            'panels' => '此區域顯示了你的佈局在佈署之後，模組使用者看到的樣子。<br/><br/>你可以通過拖放來變更欄位、橫列和面板的位址；拖放到工具箱中的垃圾區域就可以刪除元素，或是從工作箱拖放新的元素到想要的位置。'
        ),
        'dropdownEditor' => array(
            'default' => '左方顯示了二個欄。右手邊的欄，標記為目前佈局或是佈局預覽，在此你可以變更模組佈局。左手邊的欄，標記為工具箱，包含一些可用的元素及工具，用來編輯佈局。<br/><br/>如果佈局區域被標示為"目前佈局"，表示你正在編輯模組顯示的佈局。<br/><br/>如果它標示為"佈局預覽"表示這個佈局已經按下儲存按鈕，或許已經與模組使用者看到的版本不同。',
            'dropdownaddbtn' => '點擊此按鈕為下拉列表添加新條目 .',

        ),
        'exportcustom' => array(
            'exportHelp' => '在工作室中自訂的此實例可以打包且部署在另一個實例。 <br><br>提供 <b>自訂包的名稱</b>。 您可以提供 <b>作者</b> 和 <b>描述</b> 資訊。<br><br>選擇包含要匯出的自訂模組。（僅有包含自訂項的模組將顯示供您選擇）。<br><br>按一下 <b>匯出</b> 創建一個包含自訂項的.Zip 檔案。 通過 <b>模組載入器</b> 使另一個實例可以上載的.Zip 檔案。',
            'exportCustomBtn' => '點擊 <b>導出</b> 創建一個 .zip 文件，用於您想要導出的客戶化文件包.
	',
            'name' => '在工作室安裝後，自訂包的 <b>名稱</b> 將顯示在模組載入器。',
            'author' => '<b>作者</b> 是創建自訂包的實體名稱。作者可以是個人或公司。<br><br>安裝後，作者將顯示在模組載入器。
',
            'description' => '在工作室上傳後等待安裝時，自訂包的 <b>描述</b> 將顯示在模組載入器。',
        ),
        'studioWizard' => array(
            'mainHelp' => '歡迎來到 <b>開發工具</b> 區. <br/><br/>在本區域使用工具來創建和管理標準和自訂模組和欄位.',
            'studioBtn' => '使用 <b>工作室</b> 來自訂已安裝的模組, 透過更改欄位安排, 選擇可用的欄位和創建自訂資料欄位。',
            'mbBtn' => '使用 <b>模組產生器</b> 來創建新的模組。',
            'appBtn' => '使用應用程式模式來自訂此程序中的不同屬性, 如多少TPS報表被顯示在首頁中',
            'backBtn' => '返回到前一步.',
            'studioHelp' => '使用 <b>工作室</b> 來自訂已安裝的模組。',
            'moduleBtn' => '按一下可編輯此模組。',
            'moduleHelp' => '選擇您想要編輯的模組元件',
            'fieldsBtn' => '通過控制模組中的<b>欄位</b>來編輯什麼資訊惠存放在模組中。<br/><br/>你可以編輯或建立自訂模組。',
            'labelsBtn' => '按一下 <b>儲存</b> 以儲存你自訂的名稱。',
            'layoutsBtn' => '自訂編輯檢視, 詳細檢視, 清單檢視和搜尋檢視的 <b>佈局</b>。',
            'subpanelBtn' => '編輯在此模組的子面板要顯示什麼資訊。',
            'layoutsHelp' => '選擇 <b>要編輯的佈局</b>。<br/><br/>如要改變包含了可輸入資料欄位的佈局，按一下<b>編輯檢視</b>。<br/><br/>要改變編輯檢視中資料已經被輸入欄位中的佈局，按一下<b>詳細檢視</b>。<br/><br/>如要改變顯示在預設清單中的欄，按一下<b>清單檢視</b>。<br/><br/>如要改變基本和進階搜尋的佈局，按一下<b>搜尋</b>。',
            'subpanelHelp' => '選擇 <b>子面板</b> 來編輯。',
            'searchHelp' => '選擇要編輯的 <b>搜尋</b> 佈局。',
            'newPackage' => '點擊  <b>新建文件包</b> 創建一個新文件包.',
            'mbHelp' => '<b>歡迎光臨模組產生器。</b><br/><br/>使用 <b>模組產生器</b> 來創建包裝可容納標準或自訂的物件的自訂模組。<br/><br/> 要開始，按一下 <b>新包裝</b> 來創建，或選擇一個包裝來編輯 <br/><br/>一個 <b>包裝</b> 作為容器的自訂模組，所有的物件都是一個專案的一部分。包裝可以包含一個或多個可以與彼此或與應用程式中的模組關聯的自訂模組。<br/> <br/>例 ︰ 你可能想要創建一個包裝來包含一個與標準帳戶模組相關的自訂模組。或者，您可能想要創建一個一起工作的幾個新模組包作為一個專案，與應用程式中的模組關聯。',
            'exportBtn' => '按一下 <b>匯出自訂項</b> 來創建檔案包，包含在工作室中進行自訂的特定模組。',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => '下拉列表編輯器',

//STUDIO2
    'LBL_MODULEBUILDER' => '模組產生器',
    'LBL_STUDIO' => '工作室',
    'LBL_DROPDOWNEDITOR' => '下拉列表編輯器',
    'LBL_DEVELOPER_TOOLS' => '開發工具',
    'LBL_SUITEPORTAL' => 'SuiteCRM 門戶編輯器',
    'LBL_PACKAGE_LIST' => '文件包列表',
    'LBL_HOME' => '首頁',
    'LBL_NONE' => '-無-',
    'LBL_DEPLOYE_COMPLETE' => '部署完成',
    'LBL_DEPLOY_FAILED' => '在部署流程出現了錯誤，您的檔案包未能正確安裝',
    'LBL_AVAILABLE_SUBPANELS' => '子面板可用',
    'LBL_ADVANCED' => '進階',
    'LBL_ADVANCED_SEARCH' => '進階過濾',
    'LBL_BASIC' => '基本',
    'LBL_BASIC_SEARCH' => '快速過濾',
    'LBL_CURRENT_LAYOUT' => '當前佈局',
    'LBL_CURRENCY' => '貨幣',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet 清單檢視',
    'LBL_POPUP' => '彈出檢視',
    'LBL_POPUPLISTVIEW' => '彈出式清單檢視',
    'LBL_POPUPSEARCH' => '彈出搜索',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet 搜尋',
    'LBL_DETAILVIEW' => '詳細檢視',
    'LBL_DROP_HERE' => '[拖到這裡]',
    'LBL_EDIT' => '編輯',
    'LBL_EDIT_LAYOUT' => '編輯佈局',
    'LBL_EDIT_FIELDS' => '編輯欄位',
    'LBL_EDITVIEW' => '編輯檢視',
    'LBL_FILLER' => '(填充器)',
    'LBL_FIELDS' => '欄位',
    'LBL_FAILED_TO_SAVE' => '保存失敗',
    'LBL_FAILED_PUBLISHED' => '公佈失敗',
    'LBL_HOMEPAGE_PREFIX' => '我的',
    'LBL_LAYOUT_PREVIEW' => '預覽版面',
    'LBL_LAYOUTS' => '版面佈局',
    'LBL_LISTVIEW' => '清單檢視',
    'LBL_MODULES' => '模組',
    'LBL_MODULE_TITLE' => '工作室',
    'LBL_NEW_PACKAGE' => '新建文件包',
    'LBL_NEW_PANEL' => '新建面板',
    'LBL_NEW_ROW' => '新建行',
    'LBL_PACKAGE_DELETED' => '已刪除的包',
    'LBL_PUBLISHING' => '公佈中...',
    'LBL_PUBLISHED' => '已公佈',
    'LBL_SELECT_FILE' => '選擇文件',
    'LBL_SUBPANELS' => '子面板',
    'LBL_SUBPANEL' => '子面板',
    'LBL_SUBPANEL_TITLE' => '標題: ',
    'LBL_SEARCH_FORMS' => '過濾條件',
    'LBL_SEARCH' => '搜尋',
    'LBL_SEARCH_BUTTON' => '搜尋',
    'LBL_FILTER' => '過濾條件',
    'LBL_TOOLBOX' => '工具箱',
    'LBL_QUICKCREATE' => '快速新增',
    'LBL_EDIT_DROPDOWNS' => '編輯一個全局下拉列表',
    'LBL_ADD_DROPDOWN' => '添加一個新的全局下拉列表',
    'LBL_BLANK' => '-空白-',
    'LBL_TAB_ORDER' => '標簽順序',
    'LBL_TABDEF_TYPE' => '顯示類型',
    'LBL_TABDEF_TYPE_HELP' => '選擇這區段要如何顯示。此選項只在你啟用了此檢視的頁籤時有效。',
    'LBL_TABDEF_TYPE_OPTION_TAB' => '頁籤',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => '面板',
    'LBL_TABDEF_TYPE_OPTION_HELP' => '選擇面板以讓此面板在佈局中顯示。選擇頁籤以讓面板顯示在分開的頁籤裡面。當頁籤被設定給一個面板時，後續面板被設定為面板時都會顯示在此頁籤中。<br/>當頁籤被選擇，新的頁籤會開始被之後的面板使用。如果一個頁籤被設定在地一個面板之下，第一個面板必須是個頁籤。',
    'LBL_TABDEF_COLLAPSE' => '折疊',
    'LBL_TABDEF_COLLAPSE_HELP' => '選擇以使此面板的預設狀態為折疊。',
    'LBL_DROPDOWN_TITLE_NAME' => '名稱',
    'LBL_DROPDOWN_LANGUAGE' => '下拉列表語言',
    'LBL_DROPDOWN_ITEMS' => '下拉列表條目',
    'LBL_DROPDOWN_ITEM_NAME' => '條目名稱',
    'LBL_DROPDOWN_ITEM_LABEL' => '顯示標簽',
    'LBL_SYNC_TO_DETAILVIEW' => '同步到詳細檢視',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => '選擇此選項來同步編輯檢視佈局到相對應的詳細檢視佈局。<br>按下儲存或是儲存並佈署後，編輯檢視中的欄位跟欄位安排會被同步並且儲存到詳細檢視中。<br>在詳細檢視中將無法變更佈局。',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => '此詳細檢視與相對應的編輯檢視同步。<br>在詳細檢視中的欄位及欄位佈置乃是反映自編輯檢視中的欄位及欄位佈置。<br>在此頁面中對於詳細檢視的變更無法被儲存或佈署。請在編輯檢視中進行修改或是取消同步。 ',
    'LBL_COPY_FROM_EDITVIEW' => '從編輯檢視複製',
    'LBL_DROPDOWN_BLANK_WARNING' => '項目名稱和顯示名稱都需要有值。如果想要新增一個空項目，按一下添加並且不要在這兩個欄位中輸入任何值。',
    'LBL_DROPDOWN_KEY_EXISTS' => '清單的金鑰已存在',
    'LBL_NO_SAVE_ACTION' => '找不到如何儲存此檢視。',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation︰ 其他格式文件',


//RELATIONSHIPS
    'LBL_MODULE' => '模組',
    'LBL_LHS_MODULE' => '主模組',
    'LBL_CUSTOM_RELATIONSHIPS' => '* 在 Studio 中創建的關係',
    'LBL_RELATIONSHIPS' => '關係',
    'LBL_RELATIONSHIP_EDIT' => '編輯關係',
    'LBL_REL_NAME' => '名稱',
    'LBL_REL_LABEL' => '標簽',
    'LBL_REL_TYPE' => '類型',
    'LBL_RHS_MODULE' => '關聯模組',
    'LBL_NO_RELS' => '無關聯',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => '可選條件',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => '行',
    'LBL_RELATIONSHIP_ROLE_VALUE' => '值',
    'LBL_SUBPANEL_FROM' => '子面板來自',
    'LBL_RELATIONSHIP_ONLY' => '由於這兩個模組之間沒有預先存在的可見關係，將為此關係建立沒有可見的元素。',
    'LBL_ONETOONE' => '一對一',
    'LBL_ONETOMANY' => '一對多',
    'LBL_MANYTOONE' => '多對一',
    'LBL_MANYTOMANY' => '多對多',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => '選擇一個模組來編輯.',
    'LBL_QUESTION_LAYOUT' => '選擇一種版面來編輯.',
    'LBL_QUESTION_SUBPANEL' => '選擇一個子面板來編輯.',
    'LBL_QUESTION_SEARCH' => '選擇一個搜索版面來編輯.',
    'LBL_QUESTION_MODULE' => '選擇要編輯的模組元件。',
    'LBL_QUESTION_PACKAGE' => '選擇一個文件包來編輯,或創建一個新文件包.',
    'LBL_QUESTION_EDITOR' => '選擇一個工具.',
    'LBL_QUESTION_DASHLET' => '選擇編輯一個統計圖佈局。',
    'LBL_QUESTION_POPUP' => '選擇一個彈出檢視來編輯',
//CUSTOM FIELDS
    'LBL_NAME' => '名稱',
    'LBL_LABELS' => '標簽',
    'LBL_MASS_UPDATE' => '批量更新',
    'LBL_DEFAULT_VALUE' => '默認值',
    'LBL_REQUIRED' => '必須',
    'LBL_DATA_TYPE' => '類型',
    'LBL_HCUSTOM' => '客戶',
    'LBL_HDEFAULT' => '默認',
    'LBL_LANGUAGE' => '語言:',
    'LBL_CUSTOM_FIELDS' => '* 由工作室創建的欄位',

//SECTION
    'LBL_SECTION_EDLABELS' => '編輯標簽',
    'LBL_SECTION_PACKAGES' => '文件包',
    'LBL_SECTION_PACKAGE' => '文件包',
    'LBL_SECTION_MODULES' => '模組',
    'LBL_SECTION_DROPDOWNS' => '下拉列表',
    'LBL_SECTION_PROPERTIES' => '屬性',
    'LBL_SECTION_DROPDOWNED' => '編輯下拉列表',
    'LBL_SECTION_HELP' => '幫助',
    'LBL_SECTION_MAIN' => '主要',
    'LBL_SECTION_FIELDEDITOR' => '欄位編輯器',
    'LBL_SECTION_DEPLOY' => '部署',
    'LBL_SECTION_MODULE' => '模組',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => '預設',
    'LBL_HIDDEN' => '隱藏',
    'LBL_AVAILABLE' => '有效的',
    'LBL_LISTVIEW_DESCRIPTION' => '下方顯示了三欄。<b>預設</b>欄包含了預設顯示在清單檢視中的欄位。<b>附加</b>欄包含了使用者可以用來顯示自訂的檢視的欄位。<b>可用</b>欄是一些欄位需要由管理員增加到預設欄或附加欄，才能讓使用者使用。',
    'LBL_LISTVIEW_EDIT' => '清單檢視編輯器',

//Manager Backups History
    'LBL_MB_PREVIEW' => '預覽',
    'LBL_MB_RESTORE' => '重新保存',
    'LBL_MB_DELETE' => '刪除',
    'LBL_MB_DEFAULT_LAYOUT' => '默認佈局',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => '新增',
    'LBL_BTN_SAVE' => '儲存',
    'LBL_BTN_SAVE_CHANGES' => '保存更改',
    'LBL_BTN_DONT_SAVE' => '放棄更改',
    'LBL_BTN_CANCEL' => '取消',
    'LBL_BTN_CLOSE' => '結束',
    'LBL_BTN_SAVEPUBLISH' => '保存並且公佈',
    'LBL_BTN_CLONE' => '複製',
    'LBL_BTN_ADDROWS' => '增加行',
    'LBL_BTN_ADDFIELD' => '添加欄位',
    'LBL_BTN_ADDDROPDOWN' => '添加下拉列表',
    'LBL_BTN_SORT_ASCENDING' => '升序排序',
    'LBL_BTN_SORT_DESCENDING' => '降序排序',
    'LBL_BTN_EDLABELS' => '編輯標簽',
    'LBL_BTN_UNDO' => '撤銷（Undo）',
    'LBL_BTN_REDO' => '重覆（Redo）',
    'LBL_BTN_ADDCUSTOMFIELD' => '增加自定義欄位',
    'LBL_BTN_EXPORT' => '導出客戶化訂製',
    'LBL_BTN_DUPLICATE' => '複製',
    'LBL_BTN_PUBLISH' => '發佈',
    'LBL_BTN_DEPLOY' => '部署',
    'LBL_BTN_EXP' => '導出',
    'LBL_BTN_DELETE' => '刪除',
    'LBL_BTN_VIEW_LAYOUTS' => '查看版面',
    'LBL_BTN_VIEW_FIELDS' => '查看欄位',
    'LBL_BTN_VIEW_RELATIONSHIPS' => '查看關係',
    'LBL_BTN_ADD_RELATIONSHIP' => '添加關係項',
    'LBL_BTN_RENAME_MODULE' => '修改模組名稱',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => '欄位已存在',
    'ERROR_INVALID_KEY_VALUE' => "錯誤: 無效的關鍵字值: [']",
    'ERROR_NO_HISTORY' => '沒有找到歷史文件',
    'ERROR_MINIMUM_FIELDS' => '佈局中必須包含一個欄位',
    'ERROR_GENERIC_TITLE' => '發生錯誤',
    'ERROR_REQUIRED_FIELDS' => '你確定要繼續嗎？以下必選欄位沒有包含在這個版面中:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => '文件包名稱:',
    'LBL_MODULE_NAME' => '模組名稱:',
    'LBL_AUTHOR' => '作者:',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_KEY' => '關鍵值:',
    'LBL_ADD_README' => ' 自述',
    'LBL_LAST_MODIFIED' => '最新修改:',
    'LBL_NEW_MODULE' => '新的模組',
    'LBL_LABEL' => '標簽:',
    'LBL_LABEL_TITLE' => '標簽',
    'LBL_WIDTH' => '寬',
    'LBL_PACKAGE' => '文件包:',
    'LBL_TYPE' => '類型:',
    'LBL_NAV_TAB' => '導航標簽',
    'LBL_CREATE' => '建立',
    'LBL_LIST' => '列表',
    'LBL_VIEW' => '查看',
    'LBL_HISTORY' => '查看歷史記錄',
    'LBL_RESTORE_DEFAULT' => '恢復默認值',
    'LBL_ACTIVITIES' => '銷售活動',
    'LBL_NEW' => '新建',
    'LBL_TYPE_BASIC' => '普通',
    'LBL_TYPE_COMPANY' => '公司',
    'LBL_TYPE_PERSON' => '人',
    'LBL_TYPE_ISSUE' => '問題',
    'LBL_TYPE_SALE' => '促銷',
    'LBL_TYPE_FILE' => '檔案',
    'LBL_RSUB' => '這是將顯示在您模組中的子面板',
    'LBL_MSUB' => '這是您模組的子面板用於提供給相關模組顯示',
    'LBL_MB_IMPORTABLE' => '導入',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] 已經被刪除',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => '導出客戶化訂製',
    'LBL_EC_NAME' => '文件包名稱:',
    'LBL_EC_AUTHOR' => '作者:',
    'LBL_EC_DESCRIPTION' => '描述:',
    'LBL_EC_CHECKERROR' => '請選擇一個模組.',
    'LBL_EC_CUSTOMFIELD' => '客戶化訂製欄位',
    'LBL_EC_CUSTOMLAYOUT' => '客戶化界面',
    'LBL_EC_NOCUSTOM' => '沒有模組已自訂。',
    'LBL_EC_EMPTYCUSTOM' => '空白客戶化訂製.',
    'LBL_EC_EXPORTBTN' => '導出',
    'LBL_MODULE_DEPLOYED' => '已部署模組。',
    'LBL_UNDEFINED' => '未定義',
    'LBL_EC_VIEWS' => '自訂檢視',
    'LBL_EC_SUITEFEEDS' => '自訂的 Feed',
    'LBL_EC_DASHLETS' => '自訂 Dashlets(s)',
    'LBL_EC_CSS' => '自訂 css(s)',
    'LBL_EC_TPLS' => '自訂 tpls(s)',
    'LBL_EC_IMAGES' => '自訂圖片',
    'LBL_EC_JS' => '自訂 js(s)',
    'LBL_EC_QTIP' => '自訂 qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => '輓回數據失敗',
    'LBL_AJAX_LOADING' => '載入中...',
    'LBL_AJAX_DELETING' => '刪除中...',
    'LBL_AJAX_BUILDPROGRESS' => '建設過程中...',
    'LBL_AJAX_DEPLOYPROGRESS' => '擴展過程中...',

    'LBL_AJAX_RESPONSE_TITLE' => '結果',
    'LBL_AJAX_RESPONSE_MESSAGE' => '操作已成功完成',
    'LBL_AJAX_LOADING_TITLE' => '進行中..',
    'LBL_AJAX_LOADING_MESSAGE' => '請稍候，載入中..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => '您確定您要移除此文件包嗎? 這將永久刪除與此文件包相關的所文件.',
    'LBL_JS_REMOVE_MODULE' => '是否確實要刪除此模組？這將永久刪除與此模組關聯的所有檔案。',
    'LBL_JS_DEPLOY_PACKAGE' => '重新部署此模組時，將覆蓋您在工作室中做的任何自訂。你確定要繼續嗎？',

    'LBL_DEPLOY_IN_PROGRESS' => '部署文件包',
    'LBL_JS_VALIDATE_NAME' => '名稱 - 必須為字母數字並且以字母開頭',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => '檔案包名稱已存在',
    'LBL_JS_VALIDATE_KEY' => '關鍵值 - 必須為字母數字並且以字母開頭',
    'LBL_JS_VALIDATE_LABEL' => '請輸入一個將用作此模組的顯示名稱的標籤',
    'LBL_JS_VALIDATE_TYPE' => '請從上面的清單中選擇你想要的模組類型',
    'LBL_JS_VALIDATE_REL_LABEL' => '標簽 - 請添加一條可顯示於子面板上',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => '刪除一條客戶欄位將會刪除所有與客戶相關的數據.您將在所有添加過此欄位的界面中刪除它',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => '您確定您希望刪除此項關係嗎?',
    'LBL_CONFIRM_DONT_SAVE' => '自上次保存已變化,您真要保存嗎?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => '保存更改?',
    'LBL_CONFIRM_LOWER_LENGTH' => '數據將被截斷，無法恢復。您確定要這樣做嗎？',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => '請按照加入該欄位的數據類型選擇合適的數據類型。',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => '重置',
    'LBL_RESET_MODULE' => '重置模組',
    'LBL_REMOVE_CUSTOM' => '刪除定製內容',
    'LBL_CLEAR_RELATIONSHIPS' => '清除關係',
    'LBL_RESET_LABELS' => '重置標簽',
    'LBL_RESET_LAYOUTS' => '重置版面',
    'LBL_REMOVE_FIELDS' => '刪除客戶化欄位',
    'LBL_CLEAR_EXTENSIONS' => '清除擴展',
    'LBL_HISTORY_TIMESTAMP' => '時間戳',
    'LBL_HISTORY_TITLE' => ' 歷史',

    'fieldTypes' => array(
        'varchar' => '字元型',
        'int' => '整型',
        'float' => '數值型',
        'bool' => '布爾型',
        'enum' => '枚舉型',
        'dynamicenum' => '動態下拉列表',
        'multienum' => '多選',
        'date' => '日期型',
        'phone' => '電話',
        'currency' => '貨幣',
        'html' => 'HTML',
        'radioenum' => '單選框',
        'relate' => '關係',
        'address' => '地址',
        'text' => '文本框',
        'url' => '超鏈接',
        'iframe' => '浮動窗口',
        'datetimecombo' => '日期時間',
        'decimal' => '數值型',
        'image' => '圖片',
        'wysiwyg' => '所見即所得',
    ),
    'labelTypes' => array(
        "frequently_used" => "常用的標籤",
        "all" => "全部標簽",
    ),

    'parent' => '彈性關聯',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "您將從下拉列表中刪除這個選項。所有使用這個選項的數據，將無法顯示出來。您確定要這樣做嗎？",

    'LBL_ALL_MODULES' => '所有模組',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (關聯的 {1} ID)',
);
