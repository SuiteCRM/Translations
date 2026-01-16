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
    'LBL_LOADING' => 'Načítání' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Skrýt možnosti' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Smazat' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Zadejte <b>Jméno</b> balíčku. Jméno musí obsahovat alfanumerické znaky a nesmí obsahovat mezeru.(Příklad: HR_Management)<br/><br/> Můžete zadat <b>Autora</b> a <b>Popis</b> pro pro tento balíček. <br/><br/>Klikněte na <b>Uložit</b> pro vytvoření balíčku,',
            'modify' => 'Vlastnosti a možné akce pro tento <b>balíček</b> jsou uvedeny zde. <br><br>Můžete upravit <b>Název</b>,<b>Autora</b> a <b>Popis</b> balíčku stejně jako zobrazit a upravit všechny moduly obsažené v balíčku.<br><br>Klikněte na <b>Nový modul</b> pro vytvoření modulu balíčku. <br><br>Pokud balíček obsahuje alespoň jeden modul, můžete jej <b>Zveřejnit</b> a <b>Nasadit</b> stejně jako <b>Exportovat</b> úpravy provedené v balíčku.',
            'name' => 'Jedná se o <b>jméno</b> balíčku, který se zobrazí během instalace.',
            'author' => 'Toto je <b>autor</b>, který je zobrazen během instalace jako jméno entity, která vytvořila tento balíček.<br><br>Autor může být osoba nebo společnost.',
            'description' => 'Toto je popis balíčku, který se zobrazí během instalace.',
            'publishbtn' => 'Klikněte na <b>Zveřejnit</b> pro uložení všech zadaných dat a vytvoření .zip souboru, který bude instalační verzí balíčku.<br><br>Použijte <b>Zavaděč modulů</b> pro nahrání tohoto .zip souboru a nainstalování balíčku.',
            'deploybtn' => 'Klinkněte na <b>Deploy</b> pro uložení všech zadaných dat a nainstalování balíčku, včetně všech modulů v současné instanci.',
            'duplicatebtn' => 'Klepněte na <b>Kopírování</b> pro kopírování obsahu balíčku do nového balíčku a zobrazení nového balíčku.<br/><br/>Pro nový balíček bude automaticky vygenerováno nové jméno připojením čísla na konec jména balíčku. Můžete přejmenovat nový balíček vložením nového <b>jména</b> a kliknutím na <b>Uložit</b>.',
            'exportbtn' => 'Klepněte na <b>Export</b> pro vytvoření .zip souboru. Tento soubor bude obsahovat customizace vytvořené v balíčku.<br><br>Generovaný soubor nebude instalovatelnou verzí balíčku.<br><br>Použijte <b>Zavaděč modulů</b> pro importování .zip souboru a zpřístupnění balíčku, včetně customizací, v Module Builderu.',
            'deletebtn' => 'Klepněte na tlačítko Odstranit pro odstraníte tohoto balíčku a všech souborů, které se k němu vztahují.',
            'savebtn' => 'Klepnutím na tlačítko Uložit uložíte všechny zadané údaje vztahující se k balíčku.',
            'existing_module' => 'Klikněte na ikonu <b>Modulu</b> pro editaci vlastností a customizaci polí, vztahů a layoutů souvisejících s modulem.',
            'new_module' => 'Klepněte na tlačítko Nový modul pro vytvoření nového modulu tohoto balíčku.',
            'key' => 'Tento 5ti znakový, alfanumerický <b>klíč</b> bude použit jako prefix pro všechny adresáře, názvy tříd a databázových tabulek pro všechny moduly v aktuálním balíčku.<br><br>Klíč je použit ve snaze zajistit unikátnost jmen tabulek.',
            'readme' => 'Kliknutím přidáte <b>Čti-mě</b> text pro tento balíček.<br><br>Čti-mě bude dostupný v době instalace.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Zadejte <b>Jméno</b> modulu. <b>Label</b> který zadáte bude dostupný v navigační kartě. <br/><br/>Vyberte pro zobrazení v navigační kartě pro modul zaškrtnutím zaškrtávátka <b>Navigační karta</b>.<br/><br/>Vyberte typ šablony. Každá šablona  obsahuje specifickou sadu polí stejně jako předdefinované layouty použitelných jako základ modulu.<br/><br/>Kliknutím na <b>Uložit<b> vytvoříte modul.',
            'modify' => 'Můžete změnit vlatnstoti modulu, nebo customizovat <b>pole</b>, <b>vztahy</b> a <b>layouty</b> vztažené k modulu.',
            'importable' => 'Zakliknutím zašktrávátka <b>Importovatelný</b> povolí import pro tento modul.<br><br>Odkaz na Průvodce importem bude uveden v panelu odkazů v modulu. Importní průvodce napomáhá importu dat z externích zdrojů do vlastního modulu.',
            'team_security' => 'Zaškrtnutím zaškrtávátka <b>Team Security</b> povolíte team security pro tento modul. <br/><br/>Pokud je team security povolen, bude zobrazeno pole pro Výber teamu v záznamech modulu.',
            'reportable' => 'Zaškrtnutím tohoto tlačítka povolíte spustit reporty pro tento modul.',
            'assignable' => 'Zaškrtnutí tohoto tlačítka umožní přiřazení záznamu v tomto modulu vybranému uživateli.',
            'has_tab' => 'Zaškrtnutím <b>Navigační záložka</b> se poskytne navigační záložka pro tento modul.',
            'acl' => 'Zaškrtnutím tohoto tlačítka se aktivuje kontrola přístupu pro tento modul, včetně zabezpečení na úrovni polí',
            'studio' => 'Zaškrtnutím tohoto políčka se administrátorům umožní upravovat tento modul ve Studiu.',
            'audit' => 'Zaškrtnutím tohoto boxu povolí auditování pro tento modul. Změny v určitých polích budou zaznamenány a administrátoři mohou revidovat změny v minulosti.',
            'viewfieldsbtn' => 'Klikněte na <b>Zobrazit pole</b> pro zobrazení polí asociovaných s modulem a pro vytvoření/úpravu vlastních polí.',
            'viewrelsbtn' => 'Klikněte na <b>Zobrazit vztahy</b> pro zobrazení vztahů asociovaných s tímto modulem a pro vytvoření nového vztahu.',
            'viewlayoutsbtn' => 'Klikněte na <b>Zobrazit layouty</b> pro zobrazení layoutů modulu a pro customizaci rozložení polí v layoutu.',
            'duplicatebtn' => 'Klikněte na <b>Kopie</b> pro zkopírování vlastností modulu do nového modulu a zobrazení nového modulu.<br/><br/>Jméno pro nový modul bude generováno automaticky připojením čísla na konec jména modulu.',
            'deletebtn' => 'Klikněte na <d>Smazat</b> pro smazání modulu.',
            'name' => 'Toto je <b>název</b> aktuálního modulu. <br/> <br/> Název musí být alfanumerický, musí začínat písmenem a nesmí obsahovat žádné mezery. (Příklad: HR_Management)',
            'label' => 'To je <b>Název</b> který se zobrazí v navigační záložce tohoto modulu. ',
            'savebtn' => 'Kliknutím na <b>Uložit</b> uložíte všechna zadaná data týkající se modulu.',
            'type_basic' => 'Šablona typu <b>Základní</b> poskytuje základní pole, jako je Název, Přiřazeno k, Tým, Datum vytvoření a Popis.',
            'type_company' => 'Typ šablony <b>Společnost</b> poskytuje pole specifické pro společnosti, například název společnosti, průmysl a účtovací adresu. <br/> <br/> Tato šablona umožňuje vytvořit moduly, které jsou podobné standardním modulu Společnosti.',
            'type_issue' => 'Typ šablony <b>Problém</b> poskytuje specifická případů a chyb, například Číslo, Stav, Priorita a Popis. <br/><br/>Použijte tuto šablonu k vytvoření modulů, které jsou podobné standardním modulům Případy a Chyby.',
            'type_person' => 'Typ šablony <b>Osoba</b> poskytuje specifická pole, například Oslovení, Titul, Jméno, Adresa a Telefonní číslo. <br/><br/> Využijte tuto šablonu pro vytvoření modulů, které jsou podobné standardním modulům Kontakty a Iniciativy.',
            'type_sale' => 'Typ šablony<b>Prodej</b> poskytuje Příležitosti specifická pole, jako jsou zdroj Iniciativy, Etapa, Objem a Pravděpodobnost. <br/> <br/> Využijte tuto šablonu pro vytvoření modulů, které jsou podobné standardnímu modulu Příležitost.',
            'type_file' => 'Šablona <b>Soubor</b> poskytuje specifická pole Dokumentu, například Název souboru, Typ dokladu a Datum publikování. <br><br>Použijte tuto šablonu k vytvoření modulů, které jsou podobné standardnímu modulu Dokumenty.',

        ),
        'dropdowns' => array(
            'default' => 'Zde jsou uvedeny všechny <b>rRozbalovací nabídky</b> aplikace. <br><br>Rozbalovací menu lze použít pro pole rozbalovacích nabídek v libovolném modulu. <br> <br>Pro provedení změny v existujícím rozbalovací nabídce, klikněte na jeho nazev.<br><br>Klikněte na <b>Přidat rozbalovací nabídku</b> k vytvoření nové rozbalovací nabídky.',
            'editdropdown' => 'Seznam rozbalovací nabídky lze použít pro standardní nebo vlastní pole rozbalovací nabídky v libovolném modulu.<br><br>Zadejte <b>Název</b> seznamu rozbalovací nabídky.<br><br>Pokud jsou v aplikaci nainstalovány jakékoli jazykové balíčky, můžete vybrat <b>Jazyk</b> položek seznamu.<br><br>V poli <b>Název položky</b> zadejte název pro volbu v seznamu rozbalovací nabídky. Tento název se nezobrazí v rozevíracím seznamu zobrazenému uživatelům.<br><br>V poli <b>Zobrazit štítek</b> zadejte popisek, který bude zobrazen uživatelům.<br><br>Po zadání názvu položky a zobrazovaného štítku, klikněte na <b>Přidat</b> k přidání položky do seznamu rozbalovací nabídky.<br><br>Ke změně pořadí položek v seznamu, přetáhněte položky na požadovanou pozici.<br><br>Pro úpravu zobazeného štítku položky, klikněte na <b>Upravit ikonu</b> a zadejte nový popisek. Pro odstranění položky ze seznamu rozbalovací nabídky, klikněte na <b>Odstranit ikonu</b>.<br><br>K vrácení změn v zobraném štítku, klikněte na <b>Vrátit</b>. K opětovanému provedení změny, klikněte na <b>Znovu</b>. <br><br>Klikněte na <b>Uložit</b> pro uložení seznamu rozbalovací nabídky.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Všechna pole, které mohou být zobrazena v <b>Podpanelu</b> se objeví zde. <br><br>Sloupec <b>Výchozí</b> obsahuje pole, která jsou zobrazena v Podpanelu. <br/> <br/> Sloupec <b>Skrytý</b> obsahuje pole, které lze přidat do sloupce Výchozí.'
        ,
            'savebtn' => 'Klikněte na<b>Uložit a nasadit</b> pro uložení provedených změn a jejich aktivování v rámci modulu.',
            'historyBtn' => 'Klikněte na <b>Zobrazit historii</b> pro zobrazení a obnovení dříve uložených rozložení z dřívějška.',
            'historyDefault' => 'Klikněte na <b>Obnovit výchozí</b> pro obnovení vzhledu do jeho původního rozložení.',
            'Hidden' => 'Skryté položky nejsou vidět ze subpanelů',
            'Default' => 'Standardní pole jsou vidět ze subpanelů',

        ),
        'listViewEditor' => array(
            'modify' => 'Všechna pole, které lze zobrazit v <b>Pohledu seznam</b> jsou zobrazeny zde. <br><br>Sloupec <b>Výchozí</b> obsahuje pole, které jsou v Pohledu seznam zobrazena jako výchozí.<br/> <br/>Sloupec <b>K dispozici</b> obsahuje pole, které uživatel může vybrat ve Vyhledat k vytvoření vlastního Pohledu seznam.<br/> <br/>Sloupec <b>Skrytá</b> obsahuje pole, které lze přidat do sloupce Výchozí nebo K dispozici.'
        ,
            'savebtn' => 'Klikněte na<b>Uložit a nasadit</b> pro uložení provedených změn a jejich aktivování v rámci modulu.',
            'historyBtn' => 'Klikněte na tlačítko <b>Zobrazit historii</b> pro zobrazení a obnovení dříve uložených rozložení z historie. <br><br><b>Obnovit</b> v rámci <b>Zobrazit historii</b> obnoví umístění polí v dříve uložené rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'historyDefault' => 'Klikněte na tlačítko <b>Obnov výchozí</b> pro zobrazení a obnovení dříve uložených rozložení. <br><br><b>Obnovit výchozí</b> obnoví umístění polí v dříve uloženém rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'Hidden' => 'Pole <b>Skrytá</b> pole zrovna nejsou uživatelům k dispozici v Pohledu seznam.',
            'Available' => 'Pole <b>K dispozici</b> nejsou zobrazena jako výchozí, ale mohou být přidána do Pohledu seznam uživateli.',
            'Default' => 'Pole <b>Výchozí</b> se zobrazí v Pohledech seznam, která nejsou upravená uživateli.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Všechna pole, která mohou být zobrazeny v <b>Pohledu seznam</b> se objeví zde. <br><br>Sloupec <b>Výchozí</b> obsahuje pole, která jsou zobrazena jako výchozí v Pohledu seznam. <br/> <br/>Sloupec <b>Skrytá</b> obsahuje pole, která lze přidat do sloupce Výchozí nebo K dispozici.'
        ,
            'savebtn' => 'Klikněte na<b>Uložit a nasadit</b> pro uložení provedených změn a jejich aktivování v rámci modulu.',
            'historyBtn' => 'Klikněte na tlačítko <b>Zobrazit historii</b> pro zobrazení a obnovení dříve uložených rozložení z historie. <br><br><b>Obnovit</b> v rámci <b>Zobrazit historii</b> obnoví umístění polí v dříve uložené rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'historyDefault' => 'Klikněte na tlačítko <b>Obnov výchozí</b> pro zobrazení a obnovení dříve uložených rozložení. <br><br><b>Obnovit výchozí</b> obnoví umístění polí v dříve uloženém rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'Hidden' => 'Pole <b>Skrytá</b> pole zrovna nejsou uživatelům k dispozici v Pohledu seznam.',
            'Default' => 'Pole <b>Výchozí</b> se zobrazí v Pohledech seznam, která nejsou upravená uživateli.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Všechna pole, které mohou být zobrazeny ve <b>filtru</b> se objeví zde. <br><br><b>Výchozí</b> sloupec obsahuje pole, která jsou zobrazena ve vyhledávání. <br/> <br/> <b>Skrytý</b> sloupec obsahuje pole, které jsou k dispozici pro Vás jako admina pro přidání do vyhledávání.'
        ,
            'savebtn' => 'Kliknutím na <b>Uložit a nasadit</b> uložíte všechny změny a učiníte je aktivními',
            'Hidden' => '<b>Skrytá</b> pole se nezobrazí ve Vyhledávání.',
            'historyBtn' => 'Klikněte na tlačítko <b>Zobrazit historii</b> pro zobrazení a obnovení dříve uložených rozložení z historie. <br><br><b>Obnovit</b> v rámci <b>Zobrazit historii</b> obnoví umístění polí v dříve uložené rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'historyDefault' => 'Klikněte na tlačítko <b>Obnov výchozí</b> pro zobrazení a obnovení dříve uložených rozložení. <br><br><b>Obnovit výchozí</b> obnoví umístění polí v dříve uloženém rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'Default' => '<b>Výchozí</b> pole se zobrazí ve Vyhledávání.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>Rozložení</b> oblasti obsahuje pole, která jsou aktuálně zobrazena v <b>detailním přehledu</b>. <br/> <br/> <b>Panel nástrojů</b> obsahuje <b>Koš</b> a pole a prvky rozložení, které lze přidat do rozložení. <br><br>Změna rozložení se provádí přetažením polí mezi <b>panelem nástrujů</b> a <b>rozvržením</b> a samotným rozložením. <br> <br>Chcete-li odebrat pole z rozvržení, přetáhněte pole do <b>Koše</b>. Pole pak bude dostupné v panelu nástrojů pro možné přidání do rozložení.',
            'defaultquickcreate' => '<b>Rozložení</b> oblasti obsahuje pole, která jsou aktuálně zobrazeny ve formuláři <b>rychlé vytvoření</b>. <br><br>Formulář rychlého vytvoření se zobrazí v modulu subpanelu po klepnutí na tlačítko vytvořit. <br/> <br/> <b>Panel nástrojů</b> obsahuje <b>Koš</b> a pole a prvky rozložení, které lze přidat do rozložení. <br><br>Změna rozložení se provádí přetažením polí mezi <b>panelem</b> a <b>rozvržením</b> a samotným rozložením. <br> <br>Chcete-li odebrat pole z rozvržení, přetáhněte pole do <b>Koše</b>. Pole pak bude dostupné v panelu nástrojů pro možné přidání do rozložení.',
            //this default will be used for edit view
            'default' => '<b>Rozložení</b> oblasti obsahuje pole, která jsou aktuálně zobrazena v <b>přehledu</b>. <br/> <br/> <b>Panel nástrojů</b> obsahuje <b>Koš</b> a pole a prvky rozložení, které lze přidat do rozložení. <br><br>Změna rozložení se provádí přetažením polí mezi <b>panelem nástrujů</b> a <b>rozvržením</b> a samotným rozložením. <br> <br>Chcete-li odebrat pole z rozvržení, přetáhněte pole do <b>Koše</b>. Pole pak bude dostupné v panelu nástrojů pro možné přidání do rozložení.',
            'saveBtn' => 'Klepnutím na tlačítko Uložit uložíte všechny neuložené změny.<br />Tyto změny se neukazují dokud se nevypropagují do modulu.',
            'historyBtn' => 'Klikněte na tlačítko <b>Zobrazit historii</b> pro zobrazení a obnovení dříve uložených rozložení z historie. <br><br><b>Obnovit</b> v rámci <b>Zobrazit historii</b> obnoví umístění polí v dříve uložené rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'historyDefault' => 'Klikněte na tlačítko <b>Obnov výchozí</b> pro zobrazení a obnovení dříve uložených rozložení. <br><br><b>Obnovit výchozí</b> obnoví umístění polí v dříve uloženém rozložení. Chcete-li změnit popisky polí, klepněte na tlačítko upravit ikonu vedle každého pole.',
            'publishBtn' => 'Klepnutím na tlačítko <b>Uložit a nasadit</b> uložíte všechny změny, provedené v rozložení od poslední změny, které jste ji uložili a aktivujete změny v modulu. <br><br>Rozložení se okamžitě zobrazí v modulu.',
            'toolbox' => 'Nástrojová lišta, obsahuje prvky a nástroje užitečné pro úpravy rozvržení, včetně odkládací oblasti, skupiny doplňkových prvků a dostupných polí. Kterýkoliv z nich může být přetažen do rozvržení.',
            'panels' => '<b>Rozložení</b> poskytuje náhled jak bude rozložení vypadat v modulu, když se rozmístí změny. <br/><br/> Můžete změnit pole, řádky a panely taháním a pouštěním na požadovaném místě. <br/><br/>Odeberte části taháním a pouštěním do <b>koše</b> v Sadě nástrojů, nebo přidejte nové části do pole taháním z <b>Panelu nástrojů</b> a pusťte je do požadovaného místa rozmístění.',
            'delete' => 'Přetažením libovolného prvku sem jej odeberete z rozvržení',
            'property' => 'Upravte popisek zobrazený pro toto pole. <br/> <b>Pořadí</b> určuje, v jakém pořadí bude tabulátor přepínat mezi poli.',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Pole</b>, která jsou k dispozici pro modul jsou zde uvedeny podle názvu pole. <br><br>Vlastní pole vytvořené pro modul se objeví nad poli, které jsou k dispozici pro modul ve výchozím nastavení. <br> <br>Chcete-li upravit pole, klepněte na <b>Název pole</b>. <br/> <br/> Chcete-li vytvořit nové pole, klepněte na tlačítko <b>Přidat pole</b>.',
            'mbDefault' => '<b>Pole</b>, které jsou dostupné pro modul, jsou uvedené ve jméně pole. <br><br> Pro nastavení vlastností pole, klikněte do názvu pole. <br><br> Pro vytvoření nového pole, klikněte na <b>Přidat pole</b>. Štítek spolu s dalšími vlastnostmi nového pole může být editován až po vytvoření kliknutím do názvu pole. <br><br> Po rozmístění modulu, nově vytvořená pole v tvořiči modulu jsou považované za standardní pole ve studijním rozložení modulu.',
            'addField' => 'Vyberte <b>typ dat</b> pro nové pole. Typ, který vybíráte, určuje jaký typ znaků může být zadaný pro pole. Například, pouze celá čísla mohou být zadané v poli pro celá čísla. <br><br> Zadejte <b>jméno</b> pro pole. Jméno musí být alfanumerické a nesmí obsahovat mezery. Podtržítka jsou platná.<br><br><b>Zobrazit štítek</b> je štítek, který se zobrazí pro pole v rozložení modulu. <b>Systémový štítek</b> se používá k odkazování na pole v kódu. <br><br> V závislosti na datovém typu pro pole, některé nebo všechny z následujících vlastností lze nastavit pro pole: <br><br><b> Text nápovědy</b> se objeví dočasně, pokud uživatel umístí kurzor do pole a může být použit pro vyzvání uživatele pro požadovaný typ vstupu. <br><br>Text komentáře</b> je vidět pouze uvnitř Studio &/nebo Module Builder, a může se použít k popisu pole pro administrátory.<br><br><b>výchozí hodnota</b> se zobrazí v poli. Uživatelé mohou vložit novou hodnotu do pole nebo použít výchozí hodnotu. Zaškrtněte políčko <b> Masová aktualizace </ b>, aby bylo možné použít pole masová aktualizace pro pole. <br> <br> Hodnota <b> Maximální velikost </ b> určuje maximální počet znaků které lze zadat do pole. <br> <br> Zaškrtněte políčko <b> Požadované pole </ b>, abyste provedli požadované pole. Hodnota musí být uvedena pro pole, aby bylo možné uložit záznam obsahující pole. <br> <br> Zaškrtněte políčko <b> Reportovatelné </ b>, aby bylo možné použít pole pro filtry a pro zobrazení údajů v přehledech. <br> <br> Zaškrtněte políčko <b> Audit </ b>, abyste mohli sledovat změny v poli Změna protokolu. <b> Importovatelné </ b> pole povolit, zakázat nebo požadovat, aby pole bylo importováno do Průvodce importem. <br> <br> Vyberte volbu v poli <b> Duplicitní sloučení </ b> pro povolení nebo zakázat funkce Duplicitní sloučení a najít duplikáty. <br> <br> Další vlastnosti lze nastavit pro určité typy dat.',
            'editField' => 'Vlastnosti tohoto pole lze upravit. <br><br>Klikni na <b>klonovat</b> pro vytvoření nového pole se stejnými vlastnostmi.',
            'mbeditField' => '<b>Zobrazený popisek</b> pole šablony lze přizpůsobit. Další vlastnosti pole nelze upravovat. <br><br>Klikni na <b>klonovat</b> k vytvoření nového pole se stejnými vlastnostmi. <br> <br>Šablonu pole odstraníte tak, že nejsou zobrazeny v modulu, odebráním polí z příslušného <b>rozložení</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportujte vlastní úpravy provedené ve studiu pro vytváření balíčků, které lze uložit do jiné instance SuiteCRM prostřednictvím <b>Zavaděč modulu</b>. <br><br>Za prvé, zadejte <b>Název balíčku</b>. Můžete poskytnout informace o balíčku také <b>Autor</b> a <b>Popis</b>. <br><br>Vyberte moduly, které obsahují vlastní nastavení, které chcete exportovat. K výběru se objeví pouze moduly obsahující vlastní nastavení. <br><br>Pak klepněte na tlačítko <b>Export</b> pro vytvoření souboru .zip balíčku obsahujícího vlastní nastavení.',
            'exportCustomBtn' => 'Klikněte na <b>Export</b> pro vytvoření .zip souboru obsahující vlastní přizpůsobení, které chcete exportovat.',
            'name' => 'Toto je <b>název</b> balíčku. Tento název se zobrazí během instalace.',
            'author' => 'Toto je <b>autor</b>, který se zobrazí během instalace jako název entity, který balíček vytvořil. Autorem může být jednotlivec nebo společnost.',
            'description' => 'Toto je popis balíčku, který se zobrazí během instalace.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Vítejte v oblasti <b>Vývojářských nástrojů</b>. <br/> <br/> Pomocí nástrojů v této oblasti vytvářet a spravovat standardní a vlastní moduly a pole.',
            'studioBtn' => 'Použít <b>Studio</b> pro úpravy nainstalovaných modulů.',
            'mbBtn' => 'Použijte Module Builder pro vytvoření nového modulu',
            'sugarPortalBtn' => 'Použijte <b>SuiteCRM Editor portálu</b> ke správě a úpravě portálu SuiteCRM.',
            'dropDownEditorBtn' => 'Použijte <b>Editor rozbalovací nabídky</b> k přidání a úpravě globálních rozbalovacích nabídek pro pole s rozbalovací nabídkou.',
            'appBtn' => 'Režim aplikace je místo, kde můžete přizpůsobit různé vlastnosti programu, například kolik TPS reportů je zobrazeno na domovské stránce',
            'backBtn' => 'Návrat k předchozímu kroku.',
            'studioHelp' => 'Použít <b>Studio</b> pro úpravy nainstalovaných modulů.',
            'moduleBtn' => 'Klikněte pro editaci tohoto modulu.',
            'moduleHelp' => 'Zvolte prvek modulu, který chcete upravit.',
            'fieldsBtn' => 'Vytvořit a přispůsobit <b>Pole</b> k uložení informací v modulu.',
            'labelsBtn' => 'Upravit <b>popisy</b>, které se zobrazují u polí modulu.',
            'relationshipsBtn' => 'Přidat nové nebo zobraz existující <b>Vztahy</b> pro modul.',
            'layoutsBtn' => 'Upravit následující <b>rozvržení</b> náhledů modulu: Úpravy, Detail, Seznam a Vyhledávání.',
            'subpanelBtn' => 'Určete jaká informace se zobrazí v <b>subpanelech</b> tohoto modulu.',
            'portalBtn' => 'Přizpůsobte si modul <b>Rozvržení</b>, který se zobrazí v <b>SuiteCRM portálu</b>.',
            'layoutsHelp' => 'Zvolte <b>rozvržení</b> pro úpravy.',
            'subpanelHelp' => 'Zvolte <b>subpanel</b> pro úpravy.',
            'newPackage' => 'Klepněte na tlačítko Nový balíček pro vytvoření nového balíčku.',
            'exportBtn' => 'Klepněte na tlačítko <b>Exportovat úpravy</b> pro vytvoření a stáhnutí balíčku obsahující vlastní nastavení provedené ve Studiu pro konkrétní moduly.',
            'mbHelp' => '<b>Stavitel modulů</b> umožňuje vytvářet balíčky obsahující vlastní moduly založené na standardních nebo vlastních objektech.',
            'viewBtnEditView' => 'Upravit u modulu rozvržení náhledu<b>Úpravy</b>.',
            'viewBtnDetailView' => 'Upravit u modulu rozvržení náhledu<b>Podrobnosti</b>.',
            'viewBtnDashlet' => 'Přizpůsobit <b>Dashlet SuiteCRM</b> modulu, zahrnující Pohled seznam a Vyhledat Dashletu SuiteCRM.<br><br> Dashlet SuiteCRM bude k dispozici pro přidání na stránku v modulu Domů.',
            'viewBtnListView' => 'Přizpůsobit rozvržení <b>Pohled seznam</b> modulu.<br><br>Výsledky Vyhledání se zobrazí v Pohledu seznam.',
            'searchBtn' => 'Přizpůsobit rozvržení <b>Pohled seznam</b> modulu.<br><br>Určete, která pole lze využít k filtrování záznamů, které se zobrazí v Pohledu seznam.',
            'viewBtnQuickCreate' => 'Přizpůsobte rozložení modulu <b> QuickCreate </ b>. <br> <br> Formulář QuickCreate se objeví v dílčích panelech a modulu E-maily.',
            'addLayoutHelp' => "Pro vytvoření vlastního layoutu pro Security Group, vyberte odpovídající Security Group a layout ze kterého chce kopírovat jako startovní bod.",
            'searchHelp' => 'Zde se zobrazují formuláře, které lze přizpůsobit. </ B> <br> <br> <br> Formáty hledání obsahují pole pro filtrování záznamů. <br> <br> Klepnutím na ikonu vyberte rozvržení vyhledávání, které chcete upravit.',
            'dashletHelp' => 'Zde jsou zobrazeny <b>SuiteCRM Dashlet</b> rozložení, které lze přizpůsobit. <br><br>SuiteCRM Dashlet bude k dispozici pro přidání do stránky v domácím modulu.',
            'DashletListViewBtn' => '<b>Pohled seznam Dashletu SuiteCRM</b> zobrazí záznamy na základě vyhledávacích filtrů Dashletu SuiteCRM.',
            'DashletSearchViewBtn' => '<b>SuiteCRM Dashlet vyhledávání</b> filtruje záznamy pro SuiteCRM Dashlet seznam.',
            'popupHelp' => 'Zobrazí se rozložení <b> Popup </ b>, které lze přizpůsobit',
            'PopupListViewBtn' => 'Zobrazí se <b> Popup ListView </ b> záznamy na základě zobrazení vyhledávacích oken.',
            'PopupSearchViewBtn' => '<b>Místní hledání</b> zobrazí záznamy pro místní pohled na list.',
            'BasicSearchBtn' => 'Upravte formulář <b>Rozšířený filtr</b>, který se zobrazí v kartě rozšířený filtr v oblasti filtrů pro modul.',
            'AdvancedSearchBtn' => 'Upravte formulář <b>Rozšířený filtr</b>, který se zobrazí v kartě rozšířený filtr v oblasti filtrů pro modul.',
            'portalHelp' => 'Správa a přizpůsobení <b>SuiteCRM portálu</b>.',
            'SPUploadCSS' => 'Nahrát <b>List stylu</b> pro portál SuiteCRM.',
            'SPSync' => '<b>Synchronizace</b> přizpůsobení instance SuiteCRM portálu.',
            'Layouts' => 'Přizpůsobte <b>Rozložení</b> modulů SuiteCRM portálu.',
            'portalLayoutHelp' => 'Moduly v rámci SuiteCRM portálu se objeví v této oblasti.<br><br>Vyberte modul pro úpravu <b>rozložení</b>.',
            'relationshipsHelp' => 'Všechny relace <b> Vztahy </ b>, které existují mezi modulem a ostatními nasazenými moduly, se zde zobrazují. <br> <br> Vztah <b> Jméno </ b> je název generovaný systémem pro vztah. < br> <br> <b> Primární modul </ b> je modul, který vlastní vztahy. Například všechny vlastnosti relací, pro které je modul Accounts primárním modulem, jsou uloženy v databázových tabulkách účtů. <br> <br> <b> Typ </ b> je typ vztahu mezi Primárnm modulem a <b> Souvisejícím modulem </ b>. <br> <br> Klepněte na název sloupce pro řazení podle sloupce. <br> <br> Klepněte na řádek v tabulce vztahů pro zobrazení vlastností přidružených ke sloupci. vztah. <br> <br> Klepnutím na <b> Přidat vztah </ b> vytvořte nový vztah. <br> <br> Vztahy mohou být vytvořeny mezi dvěma nasazenými moduly.',
            'relationshipHelp' => '<b> Vztahy </ b> mohou být vytvořeny mezi modulem a jiným nasazeným modulem. <br> <br> Vztahy jsou vizuálně vyjádřeny pomocí dílčích panelů a souvisejí s polem v modulu nahrávek. <br> <br> Vyberte jeden z následujících vztahů <b> Typy </ b> pro modul: <br> <br> <b> Individuální </ b> - záznamy obou modulů budou obsahovat související políčka. Jeden-k-Mnoho </ b> - záznam primárního modulu bude obsahovat dílčí panel a záznam souvisejícího modulu bude obsahovat související pole. <br> <br> <b> Mnoho-k-mnoho </ b> záznamy modulů zobrazují podsložky. <br> <br> Vyberte vztažný modul <b> Související modul </ b>. <br> <br> Pokud se vztahový typ týká dílčích panelů, vyberte zobrazení dílčího panelu pro příslušné moduly. <br> <br> Klepnutím na tlačítko <b> Uložit </ b> vytvoříte vztah.',
            'convertLeadHelp' => 'Zde můžete přidat moduly do obrazovky převést rozložení a upravit rozvržení existujících.<br/>
Moduly můžete znovu objednat přetažením jejich řádků do tabulky.<br/><br/>
<b>Modul:</b> Název modulu.<br/><br/>
<b>Požadováno: </b>Před provedením konverze je nutné vytvořit nebo vybrat požadované moduly.<br/><br/>
<b>Kopírovat data: </b> Pokud je zaškrtnuto, pole z olova budou zkopírovány do polí se stejným názvem v nově vytvořených záznamech. <br/><br/>
<b>Povolit výběr: </b>Moduly s příslušným políčkem ve složce Kontakty mohou být spuštěny během procesu konverze. <br/><br/>
<b>Upravit:</b> Upravte rozvržení konverze pro tento modul. <br/><br/>
<b>Odstranit:</b> Odstraňte tento modul z převráceného rozvržení. <br/><br/>',


            'editDropDownBtn' => 'Upravit globální rozbalovací nabídku',
            'addDropDownBtn' => 'Přidat novou globální rozbalovací nabídku',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Pole</b> v tomto modulu jsou zde uvedeny podle názvu pole.<br><br>Šablona pole obsahuje předem určenou sadu polí.<br><br> Chcete-li vytvořit nové pole, klikněte na <b>Přidat pole</b>.<br><br> Chcete-li upravit pole, klikněte na <b>Název pole</b>.<br/><br/>
Po nasazení modulu, nově vytvořená pole v modulu Builder spolu s políčky šablon, jsou považovány ve Studiu za standardní.',
        ),
        'relationshipsHelp' => array(
            'default' => '<b>Vztahy</b> které byly vytvořeny mezi modulem a ostatními moduly se zobrazují zde.<br><br> Vztah <b>Jméno</b> je název systémem generovaný pro vztah.<br><br> <b>Primární modul</b> je modul, který vlastní vztahy. Vlastnosti vztahů jsou umístěny v databázových tabulkách, které patří do primárního modulu. <br><br><b>Typ</b> je typ vztahu existující mezi Primárním modulem a <b>Souvisejícím modulem</b>.<br><br>Klikněte na název sloupce pro řazení podle sloupce.<br><br> Klepněte na řádek v tabulce vztahů pro zobrazení a úpravu vlastností přidružených ke vztahu.<br><br> Klikněte na <b>Přidat vztah</b> pro vytvoření nového vztahu.',
            'addrelbtn' => 'najeď myší nad prvek pro nápovědu přidání vztahu..',
            'addRelationship' => '<b>Vztahy</b> mohou být vytvořeny mezi modulem a jiným vlastním modulem nebo nasazeným modulem.<br><br> Vztahy jsou vizuálně vyjádřeny prostřednictvím dílčích panelů a související pole v modulech.<br><br> Vyberte jeden z následujících vztahů <b>Typ</b> pro modul:<br><br><b>Jeden-k-jednomu</b> Oba moduly budou obsahovat následující políčka.<br><br> <b>Jeden-k-více</b> Záznam primárního modulu bude obsahovat dílčí panel, a záznam souvisejícího modulu bude obsahovat související pole. <br><br> <b>Mnoho-k-mnoho</b> v obou modulech budou zobrazeny podsložky. <br><br> Vyberte pro vztah <b>Související modul</b>. <br><br> Pokud se vztahový typ týká dílčích panelů, vyberte zobrazení dílčího panelu pro příslušné moduly. <br><br> Kliknutím na <b>uložit</b> vytvoříte vztah.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Štítky</b> pro pole a další tituly v modulu lze měnit. <br><br> Upravte štítek kliknutím do pole, zadejte nový štítek a klikněte na <b>uložit</b>.<br><br>Pokud jsou v aplikaci nainstalovány libovolné jazykové sady, můžete zvolit <b>jazyk</b>, který se použije pro popisky.',
            'saveBtn' => 'Klikněte na <b>Uložit</b> pro uložení všech změn.',
            'publishBtn' => 'Klikněte na <b>Uložit a nasadit</b> pro uložení všech změn a jejich aktivaci.',
        ),
        'portalSync' => array(
            'default' => 'Zadejte <b>SuiteCRM portál URL</b> z portálu instance aktualizovat a klepněte na tlačítko <b>Go</b>.<br><br>pak zadejte platný SuiteCRM uživatelské jméno a heslo a klepněte na tlačítko <b>zahájení synchronizace</b>.<br><br>úpravy provedené na portálu SuiteCRM <b>rozložení</b>, spolu s <b>Styl list</b> Jestliže jeden byl odeslán, bude převedena do zadané instanci portálu.',
        ),
        'portalStyle' => array(
            'default' => 'Můžete upravit vzhled portálu SuiteCRM pomocí šablony stylů. <br><br>Vyber <b>Styl</b> pro nahrátí. <br> <br>Styl bude v portálu SuiteCRM načten při dalším spuštění při provedení synchronizace.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Chcete-li začít pracovat na projektu, klepněte na tlačítko <b>nový balíček</b> vytvořit nový balíček pro své vlastní moduly. <br/><br/>každý balíček může obsahovat jeden nebo více modulů.<br/><br/>například, pokud budete chtít vytvořit balíček obsahující jeden vlastní modul, který se vztahuje k modulu standardní. Nebo možná budete chtít vytvořit balíček obsahující několik nových modulů, které společně fungují jako projekt a že se vztahují k sobě navzájem a k ostatním modulům už v aplikaci.',
            'somepackages' => '<b>Balíček</b> se chodvá jako kontejner pro vlastní moduly, které jsou součástí jednoho projektu. Balíček může obsahovat jeden nebo více vlastních <b>modulů</b> které se můžou vztahovat k sobě navzájem nebo k jiným modulům v aplikaci.<br/><br/> po vytvoření balíčku pro váš projekt. Můžete ihned vytvořit moduly pro balíček nebo se můžete vrátit k dokončení modulu v Module Builder později.<br><br> Po dokončení projektu můžete <b>nasadit</b> balíček a nainstalovat tak vlastní moduly v rámci aplikace.',
            'afterSave' => 'Váš nový balíček by měl obsahovat alespoň jeden modul. Můžete vytvořit jeden nebo více vlastních modulů do balíčku.<br/><br/>Klikněte <b>Nový modul</b> pro vytvoření vlastního modulu pro tento balíček.<br/><br/> Po vytvoření alespoň jednoho modulu, můžete balíček publikovat nebo nasadit, abyste jej zpřístupnili ve vaší instanci a/nebo jiným uživatelům.<br/><br/> Pro nasazení balíčku v jednom kroku ve vaší instanci SuiteCRM klikněte na <b>Nasadit</b>.<br><br>Klikněte <b>Zveřejnit</b> pro uložení balíčku do .zip souboru. Po uložení souboru .zip do vašeho systému, použijte <b>Zavaděč modulů</b> pro nahrání a instalaci balíčku ve vaší instanci SuiteCRM. <br/><br/>Soubor můžete distribuovat ostatním uživatelům k nahrání a instalaci ve svých instancích SuiteCRM.',
            'create' => '<b>Balíček</b> se chová jako kontejner pro vlastní moduly, které jsou součástí jednoho projektu. Balíček může obsahovat jeden nebo více vlastních <b>modulů</b>, které se mohou být propojeny navzájem nebo k jiným modulům v aplikaci.<br/><br/> Po vytvoření balíčku pro váš projekt, můžete okamžitě vytvořit moduly. nebo se můžete vrátit do Module Builder a dokončit projekt později.',
        ),
        'main' => array(
            'welcome' => 'Pomocí <b>Nástroje pro vývojáře</b> vytváříte a spravujete standardní a vlastní moduly a pole. <br/> <br/> Chcete-li spravovat moduly v aplikaci, klepněte na tlačítko <b>Studio</b>. <br/> <br/> Chcete-li vytvořit vlastní moduly, klepněte na položku <b>Vytváření modulů</b>.',
            'studioWelcome' => 'Všechny aktuálně nainstalované moduly, včetně standardních a načtených objektů modulů, jsou přizpůsobitelné v aplikace studio.'
        ),
        'module' => array(
            'somemodules' => "Vzhledem k tomu, že aktuální balíček obsahuje alespoň jeden modul, můžete <b>Nasadit</b> moduly do balíčku v rámci SuiteCRM instance nebo <b>Publikovat</b> balíček, který má být instalován v aktuální instanci SuiteCRM nebo jiná instanci pomocí modulu <b>Zavaděč modulů</b>.<br/><br/> Chcete-li nainstalovat balíček přímo do instance vašeho SuiteCRM, klikněte na <b>Nasadit</b>.<br><br> K vytvoření zip formátu pro balíček, který může být načten a nainstalován do aktuální instance SuiteCRM a jiných instancí, použijte <b>Zavaděč modulů</b>, klikněte <b>Publikovat</b>.<br/><br/>Moduly pro tento balíček můžete vytvářet postupně a publikovat nebo nasazovat, když jste hotovi. <br/><br/>Po publikování nebo nasazení balíčku můžete dále provádět změny vlastností balíčků a moduly přizpůsobovat. Pak balíček znovu publikovat nebo nasadit k promítnutí změn.",
            'editView' => 'Zde můžete upravovat stávající pole. Můžete odebrat jakékoliv z existujících polí nebo přidat dostupná pole v levém panelu.',
            'create' => 'Při výběru typu modulu <b>Typ</b>, který chcete vytvořit, mějte na paměti typy polí, které byste chtěli mít v modulu. <br/><br/> Každá šablona modulu obsahuje sadu polí týkajících se typu modulu popsaného v názvu. <br/><br/><b>Základní</b> poskytuje základní pole, které se zobrazuje ve standardních modulech, jako jsou například Názvy, přidělené, týmové, datum vytvoření a popis polí. <br/><br/><b>Společnost</b> poskytuje organizačně-specifická pole, jakou jsou například Jméno společnosti, Průmysl a fakturační adresa. Použijte tuto šablonu pro vytvoření modulů, které jsou podobné ke standardnímu modulu Účty. <br/><br/> <b>Osoba</b> Poskytuje individuálně-specifická pole, jako jsou například Oslovení, Titul, Jméno, Adresa a Telefonní číslo. Použijte tuto šablonu k vytvoření modulů, které jsou podobné u modulů Kontakty a Vedení. <br/><br/><b>Problém</b> Poskytuje specifické pole pro případy a chyby, jako jsou například Číslo, Status, Priorita a Popis. Tuto šablonu použijte pro vytvoření modulů, které jsou podobné standardním modulům Případy a Chyby.<br/><br/> Poznámka: Po vytvoření modulu můžete upravit popisky polí poskytovaných šablonou a také vytvořit Vlastní pole, která se mají přidat do rozvržení modulu.',
            'afterSave' => 'Přizpůsobte modul tak, aby vyhovoval vašim potřebám, upravováním a vytvářením polí, vytvářením vztahů s ostatními moduly a uspořádáním polí v rozvržení.<br/><br/> Chcete-li zobrazit pole šablon a spravovat vlastní pole v modulu, klepněte na <b>Zobrazit pole</b>.<br/><br/>Chcete-li vytvořit a spravovat vztahy mezi modulem a dalšími moduly, ať už jsou moduly v aplikaci nebo jiné vlastní moduly v rámci stejného balíčku, klepněte na <b>Zobrazit vztahy</b>.<br/><br/>Chcete-li upravit rozvržení modulu, klepněte na tlačítko <b>Zobrazit rozvržení</b>. Rozmístění modulu View View, Edit View a View View pro Modul můžete změnit stejně jako u moduly, které jsou již v aplikaci Studio.<br/><br/>Chcete-li vytvořit modul se stejnými vlastnostmi jako aktuální modul, klikněte na tlačítko <b>Duplikovat</b>. Nový modul můžete dále přizpůsobit.',
            'viewfields' => 'Pole v modulu mohou být přizpůsobené Vašim potřebám. <br/><br/> Není možné mazat standardní pole, ale můžete je odstranit z příslušných rozložení v rámci stránek Rozvržení. <br/><br/> Můžete rychle vytvořit nová pole, která mají podobné vlastnosti jako existující pole, kliknutím na <b>Klonovat</b> ve formuláři <b>Vlastnosti</b>. Zadejte nové vlastnosti a klikněte na <b>Uložit</b>.<br/><br/>Doporučujeme nastavit všechny vlastnosti standardních polí a vlastních polí před publikováním a instalací balíčku obsahujícího vlastní modul.',
            'viewrelationships' => 'Můžete vytvořit mnoho vzájemných vztahů mezi současným modulem a dalšími moduly v balíčku a / nebo mezi aktuálním modelem a moduly, které jsou již nainstalovány v aplikaci. <br><br> Vytvoření vztahů jednoho k více a jednoho k jednomu, vytvořte pro moduly pole <b>Relace</b> a <b>Flex Relace</b>.',
            'viewlayouts' => 'Můžete určit, jaké pole jsou k dispozici pro zachycení dat v rámci <b>Edit View</b>. Můžete také kontrolovat, jaké údaje se zobrazují v rámci <b>Zobrazení detailů</b>. Pohledy nemusí odpovídat.<br/><br/>Formulář Rychlé vytvoření se zobrazí, když kliknete na <b>Vytvoření</b> v podsložce modulu. Ve výchozím nastavení je rozložení formuláře <b>Rychlé vytvoření</b> stejné jako rozložení <b>Upravit zobrazení</b>. Formulář Rychlé vytváření můžete upravit tak, aby obsahoval méně a / nebo různá pole než rozložení Upravit zobrazení. <br><br> Zabezpečení modulu můžete určit pomocí úpravy rozvržení pomocí funkce <b>Správa role</b>.<br><br>',
            'existingModule' => 'Po vytvoření a přizpůsobení tohoto modulu můžete vytvořit další moduly nebo vrátit balíček do balíčku <b>Publikovat</b> nebo <b>Nasadit</b>.<br><br> Chcete-li vytvořit další moduly, klepněte na tlačítko <b>Duplikovat</b>, abyste vytvořili modul se stejnými vlastnostmi jako aktuální modul nebo se vrátili zpět k balíčku a klikněte na tlačítko <b>Nový modul</b>.<br><br> Pokud jste připraveni <b>Publikovat</b> nebo <b>Nasadit</b> balíček obsahující tento modul, přejděte zpět na balíček a proveďte tyto funkce. Můžete publikovat a nasadit balíčky obsahující alespoň jeden modul.',
            'labels' => 'Etikety standardní pole, stejně jako vlastní pole lze změnit. Změna popisků polí neovlivní data uložená v polích.',
        ),
        'listViewEditor' => array(
            'modify' => 'Vlevo jsou tři sloupce. Sloupec "Výchozí" obsahuje pole, která jsou ve výchozím nastavení zobrazena v zobrazení seznamu, sloupec "Dostupný" obsahuje pole, které může uživatel zvolit pro vytvoření vlastního zobrazení seznamu, a sloupec "Skryté" obsahuje pole k dispozici pro vás jako správce buď přidat do Výchozího nebo Dostupného sloupce pro použití uživatelů jsou ale momentálně zakázány.',
            'savebtn' => 'Klikněte na <b>Uložit</b> pro uložení všech změn a jejich aktivaci.',
            'Hidden' => 'Skrytá pole jsou pole, které nejsou v současnosti k dispozici pro uživatele pro použití v zobrazení seznamu.',
            'Available' => 'Dostupná pole jsou pole, které nejsou zobrazeny ve výchozím nastavení, ale lze povolit uživatelem.',
            'Default' => 'Výchozí pole jsou zobrazena uživatelům, kteří nevytvořili vlastní seznam nastavení zobrazení.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Vlevo jsou zobrazeny dva sloupce. "Výchozí" sloupec obsahuje pole, která budou zobrazena ve vyhledávání, a sloupec "Skryté" obsahuje pole, která jsou pro vás dostupná jako pro správce pro přidání do zobrazení.',
            'savebtn' => 'Kliknutím na <b>Uložit a nasadit</b> uložíte všechny změny a učiníte je aktivními.',
            'Hidden' => 'Skrytá pole jsou pole, které nebudou zobrazeny v zobrazení hledání.',
            'Default' => 'Výchozí pole budou zobrazena v pohledu vyhledávání.'
        ),
        'layoutEditor' => array(
            'default' => 'Na levé straně se zobrazují dva sloupce. Na pravém sloupci označeném aktuálním rozvržením nebo náhledem rozvržení se mění vzhled modulu. Levý sloupec nazvaný Toolbox obsahuje užitečné prvky a nástroje pro použití při úpravách rozvržení. <br/><br/> Pokud je oblast rozvržení nazvaná Aktuální rozvržení, pracujete na kopii aktuálně používaného rozvržení modulu. <br/><br/> Pokud je nazváno Náhled rozvržení, pak pracujete na kopii vytvořené dříve kliknutím na tlačítko Uložit, které již mohly být změněny z verze viděné uživateli tohoto modulu.',
            'saveBtn' => 'Kliknutím na toto tlačítko se schéma uloží, takže můžete změny zachovat. Pokud se vrátíte do tohoto modulu, začnete od této změny. Vaše rozložení však nebudou vidět uživatelé modulu, dokud nekliknete na tlačítko Uložit a publikovat.',
            'publishBtn' => 'Klepnutím na toto tlačítko nasadíte rozložení. To znamená, že toto rozložení bude ihned vidět uživatelům tohoto modulu.',
            'toolbox' => 'Panel nástrojů obsahuje řadu užitečných funkcí pro úpravu rozložení, včetně koše, sady dalších prvků a sadu dostupných polí. Některé, z těchto výše uvedených, mohou být uchopeny a umístěny do rozvržení.',
            'panels' => 'Tato oblast zobrazuje, jak bude vaše uspořádání vypadat na uživatele tohoto modulu při jeho nasazení. <br/><br/> Můžete přetahovat prvky, například pole, řádky a panely jejich přetažením; odstranění prvků jejich přetažením do oblasti koše v panelu nástrojů nebo přidáním nových prvků jejich přetažením z panelu nástrojů a jejich přetažením k rozložení v požadované pozici.'
        ),
        'dropdownEditor' => array(
            'default' => 'Na levé straně se zobrazují dva sloupce. Na pravém sloupci označeném aktuálním rozvržením nebo náhledem rozvržení se mění vzhled modulu. Levý sloupec nazvaný Toolbox obsahuje užitečné prvky a nástroje pro použití při úpravách rozvržení. <br/><br/> Pokud je oblast rozvržení nazvaná Aktuální rozvržení, pracujete na kopii aktuálně používaného rozvržení modulu. <br/><br/> Pokud je nazváno Náhled rozvržení, pak pracujete na kopii vytvořené dříve kliknutím na tlačítko Uložit, které již mohly být změněny z verze viděné uživateli tohoto modulu.',
            'dropdownaddbtn' => 'Kliknutím na toto tlačítko přidáte novou položku do rozbalovací nabídky.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Přizpůsobení provedená ve Studiu v rámci této instance mohou být zabalena a nasazena v jiné instanci. <br><br>Poskytněte <b>Název balíčku</b>. Pro balíček můžete zadat informace o <b>Autorovi</b> a <b>Popis</b>.<br><br>Vyberte moduly, které obsahují přizpůsobení, která chcete exportovat. (Použijí se pouze moduly obsahující přizpůsobení.) <br><br>Kliknutím na <b>Export</b> vytvořte soubor .zip s balíčkem obsahující přizpůsobení. Soubor .zip lze nahrát v jiné instanci pomocí <b>Zavaděče modulů</b>.',
            'exportCustomBtn' => 'Klikněte na <b>Export</b> pro vytvoření .zip souboru obsahující vlastní přizpůsobení, které chcete exportovat.',
            'name' => '<b>Název</b> balíčku se zobrazí v Zavaděč modulů po odeslání balíčku pro instalaci ve Studiu.',
            'author' => '<b>Autor</b> je název entity, který balíček vytvořil. Autorem může být jednotlivec nebo společnost. <br><br>Autor se zobrazí v Zavaděči modulů po nahrání balíčku k instalaci ve Studiu.',
            'description' => '<b>Popis</b> balíčku se zobrazí v Zavaděči modulů po nahrání balíčku k instalaci ve Studiu.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Vítejte v oblasti <b>Vývojářských nástrojů</b>. <br/> <br/> Pomocí nástrojů v této oblasti vytvářet a spravovat standardní a vlastní moduly a pole.',
            'studioBtn' => 'Pomocí <b>Studio</b> upravujete instalované moduly změnou uspořádání polí, vyberte pole, která budou k dispozici a vytváříte vlastní datová pole.',
            'mbBtn' => 'Použijte Module Builder pro vytvoření nového modulu',
            'appBtn' => 'Použít režim aplikace pro přizpůsobení různých vlastností programu, jako je například počet TPS reportů zobrazených na domovské stránce',
            'backBtn' => 'Návrat k předchozímu kroku.',
            'studioHelp' => 'Pomocí <b>Studia</b> upravíte nainstalované moduly.',
            'moduleBtn' => 'Klikněte pro editaci tohoto modulu.',
            'moduleHelp' => 'Vyberte součást modulu, který chcete upravit',
            'fieldsBtn' => 'Upravte, jaké informace jsou uloženy v řízení modulu <b>polí</b> v modulu. <br/> <br/> Můžete upravovat a vytvářet vlastní pole.',
            'labelsBtn' => 'Klepněte na tlačítko <b>Uložit</b> pro uložení vlastního popisu.',
            'layoutsBtn' => 'Přizpůsobte <b>rozložení</b> úprav, detailů, seznamů a vyhledávacích zobrazení.',
            'subpanelBtn' => 'Upravte, jaké informace se zobrazí v tomto subpanelu modulů.',
            'layoutsHelp' => 'Vyberte <b>Layout to edit</b>.<br/><br/> Chcete-li změnit rozvržení, které obsahuje datová pole pro zadávání dat, klikněte na tlačítko <b>Upravit zobrazení</b>.<br/><br/> Chcete-li změnit rozvržení, které zobrazuje data zadaná do polí v editoru, klikněte na tlačítko <b>Zobrazení detailů</b>.<br/><br/> Chcete-li změnit sloupce, které se zobrazují ve výchozím seznamu, klepněte na tlačítko <b>Zobrazení seznamu</b>.<br/><br/> Chcete-li změnit rozvržení formuláře Základní a Rozšířené vyhledávání, klikněte na <b>Vyhledat</b>.',
            'subpanelHelp' => 'Vyberte <b>podpanel</b> pro úpravy.',
            'searchHelp' => 'Vyberte rozvržení <b>Vyhledávání</b> pro úpravu.',
            'newPackage' => 'Klepněte na tlačítko Nový balíček pro vytvoření nového balíčku.',
            'mbHelp' => '<b>Vítejte v modulu Builder. </b><br/><br/>Použijte<b>Modul Builder</b> k vytvoření balíčků obsahujících vlastní moduly založené na standardních nebo uživatelských objektech. <br/><br/> Chcete-li začít, klikněte na tlačítko <b>Nový balíček</b> a vytvořte nový balíček nebo vyberte balíček, který chcete upravit. <br/><br/><b>Balíček</b> působí jako kontejner pro vlastní moduly, které jsou součástí jednoho projektu. Balíček může obsahovat jeden nebo více vlastních modulů, které mohou být navzájem propojeny nebo moduly v aplikaci. <br/><br/>Příklady: Budete chtít vytvořit balíček obsahující jeden vlastní modul, který se vztahuje ke standardnímu modulu Účty. Nebo můžete vytvořit balíček obsahující několik nových modulů, které společně fungují jako projekt a které se navzájem propojují, a modulů v aplikaci.',
            'exportBtn' => 'Klepněte na tlačítko <b>Exportovat úpravy</b> k vytvoření balíčku obsahujícího vlastní úpravy provedené v Studio pro konkrétní moduly.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor rozbalovací nabídky',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Tvorba modulů',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Editor rozbalovací nabídky',
    'LBL_DEVELOPER_TOOLS' => 'Vývojářské nástroje',
    'LBL_SUITEPORTAL' => 'Editor SuiteCRM portálu',
    'LBL_PACKAGE_LIST' => 'Seznam balíků',
    'LBL_HOME' => 'Domů',
    'LBL_NONE' => '-žádný-',
    'LBL_DEPLOYE_COMPLETE' => 'Nasadit kompletní',
    'LBL_DEPLOY_FAILED' => 'Došlo k chybě při nasazování procesu, může váš balíček není správně nainstalován',
    'LBL_AVAILABLE_SUBPANELS' => 'Dostupné sub-panely',
    'LBL_ADVANCED' => 'Rozšířené',
    'LBL_ADVANCED_SEARCH' => 'Rozšířený filtr',
    'LBL_BASIC' => 'Základní',
    'LBL_BASIC_SEARCH' => 'Rychlý filtr',
    'LBL_CURRENT_LAYOUT' => 'Rozvržení',
    'LBL_CURRENCY' => 'Měna',
    'LBL_DASHLET' => 'SuiteCRM panel',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM panel Seznam zobrazení',
    'LBL_POPUP' => 'Překryvné zobrazení',
    'LBL_POPUPLISTVIEW' => 'Popup zobrazení seznamu',
    'LBL_POPUPSEARCH' => 'Překryvné vyhledávání',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet vyhledávání',
    'LBL_DETAILVIEW' => 'Detail',
    'LBL_DROP_HERE' => '[Pustit zde]',
    'LBL_EDIT' => 'Upravit',
    'LBL_EDIT_LAYOUT' => 'Úprava rozvržení',
    'LBL_EDIT_FIELDS' => 'Upravit pole',
    'LBL_EDITVIEW' => 'Upravit zobrazení',
    'LBL_FILLER' => '(výplň)',
    'LBL_FIELDS' => 'Pole',
    'LBL_FAILED_TO_SAVE' => 'Uložení se nezdařilo',
    'LBL_FAILED_PUBLISHED' => 'Zveřejnění selhalo',
    'LBL_HOMEPAGE_PREFIX' => 'Moje',
    'LBL_LAYOUT_PREVIEW' => 'Náhled nákresu',
    'LBL_LAYOUTS' => 'Nákresy',
    'LBL_LISTVIEW' => 'Seznam',
    'LBL_MODULES' => 'Moduly',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nový balík',
    'LBL_NEW_PANEL' => 'Nový panel',
    'LBL_NEW_ROW' => 'Nový řádek',
    'LBL_PACKAGE_DELETED' => 'Balík smazán',
    'LBL_PUBLISHING' => 'Publikuji...',
    'LBL_PUBLISHED' => 'Zveřejněno',
    'LBL_SELECT_FILE' => 'Vybrat soubor',
    'LBL_SUBPANELS' => 'Pod-panely',
    'LBL_SUBPANEL' => 'Pod-panel',
    'LBL_SUBPANEL_TITLE' => 'Nadpis:',
    'LBL_SEARCH_FORMS' => 'Filtr',
    'LBL_SEARCH' => 'Hledat',
    'LBL_SEARCH_BUTTON' => 'Hledat',
    'LBL_FILTER' => 'Filtr',
    'LBL_TOOLBOX' => 'Nástroje',
    'LBL_QUICKCREATE' => 'Rychlé vytvoření',
    'LBL_EDIT_DROPDOWNS' => 'Upravit globální rozbalovací nabídku',
    'LBL_ADD_DROPDOWN' => 'Přidat novou globální rozbalovací nabídku',
    'LBL_BLANK' => '-prázdný-',
    'LBL_TAB_ORDER' => 'Pořadí záložek',
    'LBL_TABDEF_TYPE' => 'Zobrazit typ',
    'LBL_TABDEF_TYPE_HELP' => 'Vybrat jak má tato sekce být zobrazena. Tato volba bude účinná pouze pokud budou povoleny záložky na tomto pohledu.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Záložka',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Zvolte možnost Panel tak, aby se tento panel zobrazil v pohledu rozvržení. Klepnutím na kartu zobrazíte tento panel na samostatné kartě v rozvržení. Když je karta určena pro panel, zobrazí se na kartě další panely nastavené k zobrazení jako panel. <br/>Nová karta se spustí pro další panel, pro který je vybrána karta Tab. Pokud je karta vybrána pro panel pod prvním panelem, první panel bude nutně karta.',
    'LBL_TABDEF_COLLAPSE' => 'Sbalit',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Nastavit výchozí stav tohoto panelu na Sbalený.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Název',
    'LBL_DROPDOWN_LANGUAGE' => 'Výchozí jazyk',
    'LBL_DROPDOWN_ITEMS' => 'Seznam položek',
    'LBL_DROPDOWN_ITEM_NAME' => 'Název položky',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Zobrazit štítek',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizovat do detailního pohledu',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Zvolte tuto možnost pro synchronizaci rozvržení EditView (změnovém pohledu) na odpovídající rozvržení DetailView (detailního pohledu). Rozvržení Polí a Položek v EditView bude synchronizováno a uloženo automaticky do DetailView po kliknutí na tlačítko Uložit nebo Uložit & Rozmístni v EditView.<br />Změny v rozvržení nebudou moci být provedeny v DetailView (detailním pohledu).',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Tento DetailView (detailní pohled) je synchronizován s odpovídající rozvržení EditView (změnovém pohledu). <br />Rozvržení Polí a Položek v rozvržení DetailView (detailního pohledu) reflektuje rozvržení Polí a Položek v rozvržení EditView (změnovém pohledu).<br />Změny v rozvržení DetailView (detailního pohledu) nemohou být uloženy',
    'LBL_COPY_FROM_EDITVIEW' => 'Zkopíruj z EditView (změnového pohledu)',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Hodnoty jsou povinné jak pro Název položky, tak i pro Zobrazit štítek. Pro přidání prázdné položky, klikněte na Přidat bez vložení hodnot Název položky a Zobrazit štítek.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'V seznamu již klíč existuje',
    'LBL_NO_SAVE_ACTION' => 'Nelze najít akci uložení pro tento pohled.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: špatně formátovaný dokument',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primární modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* vztah vytvořený ve Studiu',
    'LBL_RELATIONSHIPS' => 'Vztahy',
    'LBL_RELATIONSHIP_EDIT' => 'Upravit vztahy',
    'LBL_REL_NAME' => 'Název',
    'LBL_REL_LABEL' => 'Popis',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Související modul',
    'LBL_NO_RELS' => 'Žádné vztahy',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Volitelná podmínka',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Sloupec',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Hodnota',
    'LBL_SUBPANEL_FROM' => 'Pod-panel formulář',
    'LBL_RELATIONSHIP_ONLY' => 'Žádné viditelné prvky nebudou vytvořeny pro tento vztah',
    'LBL_ONETOONE' => 'Jeden na jednoho',
    'LBL_ONETOMANY' => 'Jeden na více',
    'LBL_MANYTOONE' => 'Více na jednoho',
    'LBL_MANYTOMANY' => 'Více na více',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Vyberte modul pro úpravu.',
    'LBL_QUESTION_LAYOUT' => 'Vyberve rozvržení pro úpravu.',
    'LBL_QUESTION_SUBPANEL' => 'Vyberte pod-panel pro úpravu.',
    'LBL_QUESTION_SEARCH' => 'Vyberve rozvržení hledání pro úpravu.',
    'LBL_QUESTION_MODULE' => 'Vyberte komponentu modulu pro úpravu.',
    'LBL_QUESTION_PACKAGE' => 'Vyberte balík pro úpravu nebo vytvořte nový balík.',
    'LBL_QUESTION_EDITOR' => 'Zvolte nástroj.',
    'LBL_QUESTION_DASHLET' => 'Vyberte rozvržení budíku pro úpravu.',
    'LBL_QUESTION_POPUP' => 'Vyberte rozvržení popup pro úpravu.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Název',
    'LBL_LABELS' => 'Štítky',
    'LBL_MASS_UPDATE' => 'Hromadná aktualizace',
    'LBL_DEFAULT_VALUE' => 'Výchozí hodnota',
    'LBL_REQUIRED' => 'Povinné',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'VLATNÍ',
    'LBL_HDEFAULT' => 'ZÁKLADNÍ',
    'LBL_LANGUAGE' => 'Jazyk:',
    'LBL_CUSTOM_FIELDS' => '* pole vytvořeno ve Studiu',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Úprava popisek',
    'LBL_SECTION_PACKAGES' => 'Balíky',
    'LBL_SECTION_PACKAGE' => 'Balíky',
    'LBL_SECTION_MODULES' => 'Moduly',
    'LBL_SECTION_DROPDOWNS' => 'Rozbalovací nabídky',
    'LBL_SECTION_PROPERTIES' => 'Vlastnosti',
    'LBL_SECTION_DROPDOWNED' => 'Upravit rozbalovací nabídku',
    'LBL_SECTION_HELP' => 'Nápověda',
    'LBL_SECTION_MAIN' => 'Hlavní',
    'LBL_SECTION_FIELDEDITOR' => 'Upravit pole',
    'LBL_SECTION_DEPLOY' => 'Použít',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Výchozí',
    'LBL_HIDDEN' => 'Skryté',
    'LBL_AVAILABLE' => 'Dostupný',
    'LBL_LISTVIEW_DESCRIPTION' => 'Dole jsou zobrazeny tři sloupce. První sloupec obsahuje pole, která jsou zobrazena v seznamu defaultně. Sloupec další obsahuje položky, které si uživatel může vybrat pro vytvoření vlastního nastavení, a sloupec dostupné je pro vás jako správce, abyste z něj mohl přidat do prvního sloupce nebo do sloupce další.',
    'LBL_LISTVIEW_EDIT' => 'Úprava pohledu seznam',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Náhled',
    'LBL_MB_RESTORE' => 'Obnova',
    'LBL_MB_DELETE' => 'Smazat',
    'LBL_MB_DEFAULT_LAYOUT' => 'Základní rozvržení',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Přidat',
    'LBL_BTN_SAVE' => 'Uložit',
    'LBL_BTN_SAVE_CHANGES' => 'Uložit změny',
    'LBL_BTN_DONT_SAVE' => 'Zahodit změny',
    'LBL_BTN_CANCEL' => 'Zrušit',
    'LBL_BTN_CLOSE' => 'Zavřít',
    'LBL_BTN_SAVEPUBLISH' => 'Uložit a nasadit',
    'LBL_BTN_CLONE' => 'Duplikovat',
    'LBL_BTN_ADDROWS' => 'Přidat řádky',
    'LBL_BTN_ADDFIELD' => 'Přidat pole',
    'LBL_BTN_ADDDROPDOWN' => 'Přidat rozbalovací nabídku',
    'LBL_BTN_SORT_ASCENDING' => 'Seřadit vzestupně',
    'LBL_BTN_SORT_DESCENDING' => 'Seřadit sestupně',
    'LBL_BTN_EDLABELS' => 'Úprava popisek',
    'LBL_BTN_UNDO' => 'Zpět',
    'LBL_BTN_REDO' => 'Znova',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Přidat vlastní pole',
    'LBL_BTN_EXPORT' => 'Exportovat vlastní úpravy',
    'LBL_BTN_DUPLICATE' => 'Kopírovat',
    'LBL_BTN_PUBLISH' => 'Zveřejnit',
    'LBL_BTN_DEPLOY' => 'Použít',
    'LBL_BTN_EXP' => 'Exportovat',
    'LBL_BTN_DELETE' => 'Smazat',
    'LBL_BTN_VIEW_LAYOUTS' => 'Zobrazit rozvržení',
    'LBL_BTN_VIEW_FIELDS' => 'Zobrazit pole',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Zobrazit vztahy',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Přidat vztah',
    'LBL_BTN_RENAME_MODULE' => 'Změnit název modulu',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Pole už existuje',
    'ERROR_INVALID_KEY_VALUE' => "Chyba: Neplatná klíčová hodnota: [']",
    'ERROR_NO_HISTORY' => 'Žádná historie soubory nalezeny',
    'ERROR_MINIMUM_FIELDS' => 'Rozvržení musí obsahovat alespoň jedno pole',
    'ERROR_GENERIC_TITLE' => 'Došlo k chybě',
    'ERROR_REQUIRED_FIELDS' => 'Opravdu chcete pokračovat? Následující povinná pole v rozvržení chybí:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Jméno balíku:',
    'LBL_MODULE_NAME' => 'Jméno modulu:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_KEY' => 'Klíč:',
    'LBL_ADD_README' => 'Readme soubor',
    'LBL_LAST_MODIFIED' => 'Poslední změna:',
    'LBL_NEW_MODULE' => 'Nový modul',
    'LBL_LABEL' => 'Název:',
    'LBL_LABEL_TITLE' => 'Popis',
    'LBL_WIDTH' => 'Šířka',
    'LBL_PACKAGE' => 'Balík:',
    'LBL_TYPE' => 'Typ:',
    'LBL_NAV_TAB' => 'Záložka navigace',
    'LBL_CREATE' => 'Přidat',
    'LBL_LIST' => 'Seznam',
    'LBL_VIEW' => 'Zobrazit',
    'LBL_HISTORY' => 'Historie',
    'LBL_RESTORE_DEFAULT' => 'Obnovit výchozí',
    'LBL_ACTIVITIES' => 'Aktivity',
    'LBL_NEW' => 'Nový',
    'LBL_TYPE_BASIC' => 'základní',
    'LBL_TYPE_COMPANY' => 'společnost',
    'LBL_TYPE_PERSON' => 'osoba',
    'LBL_TYPE_ISSUE' => 'problém',
    'LBL_TYPE_SALE' => 'prodej',
    'LBL_TYPE_FILE' => 'soubor',
    'LBL_RSUB' => 'Toto je sub-panel, který se zobrazí ve vašem modulu',
    'LBL_MSUB' => 'Toto je subpanel, že váš modul poskytuje související modul pro zobrazení',
    'LBL_MB_IMPORTABLE' => 'Importuji',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] byl smazán',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportovat vlastní úpravy',
    'LBL_EC_NAME' => 'Jméno balíku:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Popis:',
    'LBL_EC_CHECKERROR' => 'Prosím vyberte modul.',
    'LBL_EC_CUSTOMFIELD' => 'vlastní pole',
    'LBL_EC_CUSTOMLAYOUT' => 'upravená rozvržení',
    'LBL_EC_NOCUSTOM' => 'Žádné moduly nebyly upraveny.',
    'LBL_EC_EMPTYCUSTOM' => 'má prázdné vlastní úpravy.',
    'LBL_EC_EXPORTBTN' => 'Exportovat',
    'LBL_MODULE_DEPLOYED' => 'Modul byl nasazen.',
    'LBL_UNDEFINED' => 'nedefinován',
    'LBL_EC_VIEWS' => 'přizpůsobené zobrazení',
    'LBL_EC_SUITEFEEDS' => 'přizpůsobené Feedy',
    'LBL_EC_DASHLETS' => 'přizpůsobené Panely',
    'LBL_EC_CSS' => 'přizpůsobené css',
    'LBL_EC_TPLS' => 'přizpůsobené tpls',
    'LBL_EC_IMAGES' => 'přizpůsobené obrázky',
    'LBL_EC_JS' => 'přizpůsobené js',
    'LBL_EC_QTIP' => 'přizpůsobené qtip',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Nepodařilo se získat údaje',
    'LBL_AJAX_LOADING' => 'Nahravání ...',
    'LBL_AJAX_DELETING' => 'Mažu...',
    'LBL_AJAX_BUILDPROGRESS' => 'Buduji...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Provádím nasazení...',

    'LBL_AJAX_RESPONSE_TITLE' => 'výsledek',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operace byla úspěšně provedena',
    'LBL_AJAX_LOADING_TITLE' => 'Zpracovává se...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Počkejte prosím, načítám...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Opravdu chcete odebrat tento balíček? Budou trvale odstraněny všechny soubory spojené s tímto balíčkem.',
    'LBL_JS_REMOVE_MODULE' => 'Opravdu chcete odebrat tento modul? Budou trvale odstraněny všechny soubory spojené s tímto modul.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Jakékoliv úpravy, které jste provedli ve Studiu, budou přepsány při opětovném nasazení tohoto modulu. Opravdu chcete pokračovat?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Nasazuji balík',
    'LBL_JS_VALIDATE_NAME' => 'Název - Musí být alfanumerické bez mezer a začínající písmenem',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Jméno balíčku již existuje',
    'LBL_JS_VALIDATE_KEY' => 'Klíč - musí být alfanumerické',
    'LBL_JS_VALIDATE_LABEL' => 'Prosím, zadejte popisek, který bude použit jako zobrazovaný název pro tento modul',
    'LBL_JS_VALIDATE_TYPE' => 'Prosím, vyberte typ modulu, který chcete stavět z výše uvedeného seznamu',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - přidejte název, který se zobrazí nad pod-panelem',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Odstranění tohoto vlastního pole odstraní vlastní pole i všechna data související s vlastním polem v databázi. Pole se již nezobrazí v jakémkoli rozložení modulu. \\n\\nChcete pokračovat?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Opravdu chcete smazat tento vztah?',
    'LBL_CONFIRM_DONT_SAVE' => 'Od posledního uložení byly provedeny změny, chcete je uložit?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Uložit změny?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data mohou být osekána a toto nelze vrátit zpět, opravdu chcete pokračovat?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Zvolte odpovídající typ dat na základě typu dat, které budou vloženy do pole.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Obnovit výchozí',
    'LBL_RESET_MODULE' => 'Zrušit modul',
    'LBL_REMOVE_CUSTOM' => 'Odebrat úpravy',
    'LBL_CLEAR_RELATIONSHIPS' => 'Vyprázdnit vztahy',
    'LBL_RESET_LABELS' => 'Zrušit štítky',
    'LBL_RESET_LAYOUTS' => 'Zrušit rozvržení',
    'LBL_REMOVE_FIELDS' => 'Odebrat vlastní pole',
    'LBL_CLEAR_EXTENSIONS' => 'Vyprázdnit rozšíření',
    'LBL_HISTORY_TIMESTAMP' => 'Časová známka',
    'LBL_HISTORY_TITLE' => 'historie',

    'fieldTypes' => array(
        'varchar' => 'Textové pole',
        'int' => 'integer',
        'float' => 'Plovoucí',
        'bool' => 'Zaškrtávací políčko',
        'enum' => 'Rozbalovací nabídka',
        'dynamicenum' => 'Dynamická rozbalovací nabídka',
        'multienum' => 'Vícenásobný',
        'date' => 'Datum',
        'phone' => 'Telefon',
        'currency' => 'Měna',
        'html' => 'HTML',
        'radioenum' => 'Rádio',
        'relate' => 'Související',
        'address' => 'Adresa:',
        'text' => 'Oblast textu',
        'url' => 'URL adresa',
        'iframe' => 'Rám',
        'datetimecombo' => 'Datum a čas',
        'decimal' => 'Desetinný',
        'image' => 'Obrázek',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Často používané popisky",
        "all" => "všechny popisky",
    ),

    'parent' => 'Flexibilní vztah',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Označujete tuto položku pro odebrání ze seznamu rozbalovací nabídky. Jakékoli pole rozbalovací nabídky užívající seznam s touto položkou jako hodnotou již nebude tuto hodnotu zobazovat a hodnota již nebude moci být vybrána. Opravdu chcete pokračovat?",

    'LBL_ALL_MODULES' => 'všechny moduly',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (související {1} ID)',
);
