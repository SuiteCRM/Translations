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
    'LBL_LOADING' => 'Načítavanie' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Skryť možnosti' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Vymazať' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Vytvoriť<br />Zadajte Meno pre balík. Meno, ktoré vkladáte musí byť alfanumerické a nesmie obsahovať medzery.(Príklad: HR_Management)<br /><br />Môžete zadať aj informácie Autora a Popis balíku.<br /><br />Stlačte Uložiť na vytvorenie balíka.',
            'modify' => 'Tu sa zobrazujú vlastnosti a možnosti úpravy balíka.<br /><br />Môžete upraviť Meno, Autora a Popis balíka, takisto aj prezerať a upravovať všetky moduly, ktoré balík obsahuje.<br /><br />Stlačte Nový Modul na vytvorenie modulu balíka.<br /><br />Ak balík obsahuje aspoň jeden balík, môžete tento balík Publikovať a rozvinúť, ako aj Exportovať úpravy vykonané v balíku.',
            'name' => 'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
            'author' => 'autor<br />Toto je Autor, ktorý je zobrazený počas inštalácie ako meno osoby, ktorá vytvorila tento balík.<br /><br />Autor môže byť jedinec, ale aj spoločnosť.',
            'description' => 'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
            'publishbtn' => 'uverejniť btn<br />Stlačte Uverejniť pre uloženie všetkých údajov a pre vytvorenie .zip súboru, ktorý je inštalovateľnou verziou balíka.<br /><br />Požite Module Loader pre nahranie .zip súboru a nainštalovaniu balíka.',
            'deploybtn' => 'rozvinúť btn<br />Stlačte Rozvinúť pre uloženie všetkých dát a inštalácii balíka, vrátane všetkych modulovm v súčastnej inštancii.',
            'duplicatebtn' => 'Stlačte Duplikovať pre kópiu obsahu balíka do balíka nového a zobrazenie tohoto balíka.<br /><br />Pre nový balík bude automaticky vygenerované pripojením čísla ku koncu mena originálneho balíka. Nový balík môžete premenovať vložením nového Mena a stlačením tlačidla Uložiť.',
            'exportbtn' => 'Stlačte Export pre vytvorenie .zip súboru, obsahujúceho úpravy vykonané v balíku.<br /><br />Genrovaný súbor nie je inštalovateľnou verziou balíka.<br /><br />Použite Modul Loader pre import .zip súboru a k zobrazeniu balíka, vrátane úprav, v Modul Builder.',
            'deletebtn' => 'Stlačte Zmazať pre zmazanie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'existing_module' => 'Stlačte ikonu Modul pre úpravu vlastností a prispôsobenie polí, vzťahov a štruktúr pridružených k tomuto modulu.',
            'new_module' => 'Stlačte Nový Modul pre vytvorenie nového balíka.',
            'key' => 'Tento 5-miestny, alfanumerický Kľúč bude použitý ako prefix(predpona) pre všetky adresáre, názvy tried a tabuľky databáz pre všetky moduly v súčastnom balíku.<br /><br />Kľúč sa používa v snahe dosiahnúť jedinečnosť názvov tabuliek.',
            'readme' => 'Zvoľte pre pridanie Readme textového súboru pre tento balik.<br /><br />Tento Readme súbor bude dostupný počas celej inštalácie.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Zadajte Meno modulu. Názov, ktorý zadáte sa zobrazí v navigačnom menu.<br /><br />Pre zobrazenie navigačného menu pre tento modul potvrďte checkbox Navigačné Menu.<br /><br />Pre zobrazenie poľa voľby Tímov v záznamoch modulu potvrďte chceckbox Tímová Bezpečnosť.<br /><br />Potom zvoľte typ modulum ktorý si prajete vytvoriť.<br /><br />Zvoľte typ šablóny. Každá šablóna obsahuje špecifický súbor polí, ako aj pre-definované rozloženia, používané ako základy pre Váš modul.<br /><br />Stlačte Uložiť pre vytvorenie modulu.',
            'modify' => 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.',
            'importable' => 'Potvrdením checkboxu Importovateľné povolíte import pre tento modul.',
            'team_security' => 'Potvrdením checkboxu Tímová Bezpečnosť povolíte tímovú bezpečnosť pre tento modul.',
            'reportable' => 'Potvrdením povolíte beh hlásení na tento modul.',
            'assignable' => 'Zaškrtnutím tejto voľby umožníte záznamu v tomto module priradiť sa k vybranému užívateľovi.',
            'has_tab' => 'Zaškrtnutie poľa Navigačná Karta pridá navigačnú kartu do modulu.',
            'acl' => 'Zaškrtnutie tohto políčka aktivuje Access Controls pre tento modul, vratane Field Level Security.',
            'studio' => 'Zaškrtnutie tohto políčka umožní administrátorom upravovať tento modul v rámci Štúdia.',
            'audit' => 'Zaškrtnutie tohto políčka aktivuje Auditing pre tento modul. Zmeny určitých polí budú zaznamenávané, takže administrátori môžu prezerať históriu zmien.',
            'viewfieldsbtn' => 'Kliknite na tlačidlo Zobraziť pole pre zobrazenie poľa spojeného s modulom a vytvárať a upravovať Vlastné pole.',
            'viewrelsbtn' => 'Kliknite na tlačidlo Zobraziť vzťahy pre zobrazenie vzťahov spojených s týmto modulom a vytvoriť nové vzťahy.',
            'viewlayoutsbtn' => 'Kliknite na tlačidlo Zobraziť rozvrhnutie pre zobrazenie rozloženia pre modul a prispôsobiť pole usporiadané v rámci rozloženia.',
            'duplicatebtn' => 'Stlačte Duplikovať pre kópiu obsahu balíka do balíka nového a zobrazenie tohoto balíka.<br /><br />Pre nový balík bude automaticky vygenerované pripojením čísla ku koncu mena originálneho balíka. Nový balík môžete premenovať vložením nového Mena a stlačením tlačidla Uložiť.',
            'deletebtn' => 'Stlačte Zmazať pre zmazanie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'name' => 'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
            'label' => 'Toto je štítok, ktorý nebude objavený v záložke navigácie pre modul.',
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'type_basic' => 'Základný typ šablóny poskytuje základné pole, napríklad mená, ktoré je pridelený tím, dátum vytvorenia a opis polí.',
            'type_company' => 'Spoločnosť typu šablóny poskytuje organizácie špecifické oblasti, ako je názov spoločnosti, priemyslu a fakturačná adresa.<br /><br />Prostredníctvom tejto šablóny vytvorí moduly, ktoré sú podobné štandardným účtom modulu.',
            'type_issue' => 'type_issue<br />Problém typu šablóny poskytuje prípad-a bug-špecifických oblastiach, ako je číslo, stav, priority a popis.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným veciach a modulov Bugs.',
            'type_person' => 'type_person<br />Osoba typu šablóny poskytuje individuálne-špecifické oblasti, ako je oslovenie, titul, meno, adresu a telefónne číslo.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným Kontakty a vedie modulov.',
            'type_sale' => 'type_sale<br />Predaj šablóna typu poskytuje príležitosť špecifické oblasti, ako je príležitosť zdroja, javisko, sumu a pravdepodobnosť.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným Možnosti modulu.',
            'type_file' => 'type_file<br />File šablóna poskytuje dokumentu špecifické oblasti, ako je názov súboru, typ dokumentu, a zverejní dátum.<br /><br />Pomocou tejto šablóny vytvoriť moduly, ktoré sú podobné štandardným Dokumenty modulu.',

        ),
        'dropdowns' => array(
            'default' => 'Tu sú všetky <b>rozbaľovacie zoznamy</b> pre aplikáciu. <br><br>Rozbaľovacie zoznamy je možné použiť pre ozbalenie polí v ľubovoľnom module. <br> <br>Pre zmenu existujúceho rozbaľovacieho zoznamu, kliknite na názov rozbaľovacieho zoznamu. <br><br>Pre vytvorenie nového rozbaľovacieho zoznamu, kliknite na tlačidlo <b>Pridať rozbaľovací zoznam</b>.',
            'editdropdown' => 'Roletové menu môžu byť použíté ako štandardné alebo upravené roletové polia v hocijakom module. <br /><br />Poskytnite <b>Meno</b> pre roletové menu.<br /><br />Ak je v aplikácii nainštalovaný hocijaký jazykový balíček môžete vybrať <b>Jazyk</b> na používanie pre zoznam položiek.<br /><br />V poli <b>Meno Položky</b> zadajte meno pre možnosť v roletovom menu. Toto meno sa nezobrazí v roletovom menu, ktoré je viditeľné pre užívateľov.<br /><br />V poli <b>Zobraz názov</b> zadajte meno, ktoré bude viditeľné pre užívateľov. <br /><br />Po zadaní mena položky a zobrazenia názvu, kliknite <b>Pridať</b> položku na roletové menu.<br /><br />Na zmenu poradia na zozname, chyťte a pustite položky na požadované pozície. <br /><br />Na úpravu zobrazeného názvu položky kliknite na <b>Upraviť ikonu</b> a vložte nový názov. Na vymazanie položky z roletového menu kliknite na <b>Vymazať ikonu</b>.<br /><br />Na obnovenie zmeny, ktorú ste urobili zobrazenému názvu kliknite na <b>Späť</b>. Obnovenie zmeny, ktorá bola zmenená kliknite na <b>Obnoviť</b>.<br /><br />Kliknite <b>Uložiť</b> na uloženie roletového menu.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.'
        ,
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'historyBtn' => 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
            'historyDefault' => 'Kliknite na tlačidlo Obnoviť predvolené obnoviť pohľad na jeho pôvodný tvar.',
            'Hidden' => 'Skrytý',
            'Default' => '<b>Štandardné</b> polia sa zobrazia v subpaneloch.',

        ),
        'listViewEditor' => array(
            'modify' => 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.'
        ,
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'historyBtn' => 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
            'historyDefault' => 'Kliknite na tlačidlo Obnoviť predvolené obnoviť pohľad na jeho pôvodný tvar.',
            'Hidden' => 'Skrytý',
            'Available' => 'Na sklade',
            'Default' => '<b>Štandarné</b> polia sú v zozname, ktorý nie je prispôsobený užívateľovi.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.'
        ,
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'historyBtn' => 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
            'historyDefault' => 'Kliknite na tlačidlo Obnoviť predvolené obnoviť pohľad na jeho pôvodný tvar.',
            'Hidden' => 'Skrytý',
            'Default' => '<b>Štandarné</b> polia sú v zozname, ktorý nie je prispôsobený užívateľovi.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Všetky polia, ktoré môžu byť zobrazené vo <b>filtri</b> sa ukážu tu. <br><br><b>Štandarne</b> stĺpec obsahuje polia, ktoré sú zobrazené vo vyhľadávaní. <br/> <br/> <b>Skrytý</b> stĺpec obsahuje polia, ktoré sú k dispozícii pre Vás ako administrátora pre pridanie do vyhľadávania.'
        ,
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'Hidden' => 'Skrytý',
            'historyBtn' => 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
            'historyDefault' => 'Kliknite na tlačidlo Obnoviť predvolené obnoviť pohľad na jeho pôvodný tvar.',
            'Default' => '<b>Štandardné</b> polia sa zobrazia vo vyhľadávaní.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>Rozloženie</b> sa skladá z polí, ktoré sú momentálne zobrazené v <b>DetailnomZobrazení</b>.<br /><br /><b>Sada Nástrojov</b> obsahuje <b>Kôš</b> a polia a iné časti, ktoré môžu byť pridané do rozloženia. <br /><br />Urobte zmeny rozloženia chytením a položením častí a polí medzi <b>Sada nástrojov</b> a <b>Rozloženie</b> a v samotnom rozložení. <br /><br />Ak chcete odstrániť pole z rozloženia, dajte pole do <b>Koša</b>. Pole bude k dispozícii v Sade Nástrojov k pridaniu k rozloženiu. <br /><br />/><!--not_in_theme!--><img src="themes/default/images/SuiteCRMLogic/icon_dependent.png"/>Označuje závislé pole, ktoré môžu alebo nemusia byť viditeľné na základe hodnoty vzorca. Označuje kalkulované pole, ktorého hodnota bude automaticky určená podľa vzorca.',
            'defaultquickcreate' => '<b>Rozloženie</b> sa skladá z polí, ktoré sú momentálne zobrazené vo forme <b>RýchloVytvoriť</b>.<br /><br />Forma RýchloVytvoriť sa zobrazuje v subpaneloch modulu keď kliknete na tlačidlo Vytvoriť.<br /><br /><b>Sada nástrojov</b> obsahuje <b>Kôš</b> a polia a časti rozloženia, ktoré môžu byť pridané do rozloženia. <br /><br />Zmeňte rozloženie potiazhnutím a pustním častí a polí medzi <b>Sadu nástrojov</b> a <b>Rozloženie</b>.<br /><br />Ak chcete odobrať pole z rozloženia, potiahnite pole do <b>Kôša</b>. Pole bude dostupné v Sade nástrojov aby ste ho mohli pridať k rozloženiu.<br /><br/><br/><!--not_in_theme!--><img src="themes/default/images/SuiteCRMLogic/icon_dependent.png"/> Určuje závislé pole, ktoré môže ale nemusí byť viditeľné na základe hodnoty vo vzorci.<br />Určuje a kalkuluje pole, ktorého hodnota bude automaticky určená na základe vzorca.',
            //this default will be used for edit view
            'default' => '<b>Rozloženie</b> sa skladá z polí, ktoré sú momentálne zobrazené v <b>editore</b>.<br/><br/><b>Nástroje</b> obsahujú <b>Kôš</b> a polia a iné časti, ktoré môžu byť pridané do rozloženia. <br/><br/>Urobte zmeny rozloženia chytením a položením častí a polí medzi <b>Nástroje</b> a <b>Rozloženie</b> a v samotnom rozložení. <br/><br/>Pre odstránenie poľa z rozloženia, dajte pole do <b>Koša</b>. Pole bude v Nástrojoch pripravené na pridanie k rozloženiu.',
            'saveBtn' => 'Kliknite <b>Uložiť</b> na zachovanie zmien, ktoré ste urobili rozloženiu od kedy ste ho naposledy uložili. <br /><br />Zmeny nebudú zobrazené v module dokiaľ ich nerozmiestnite.',
            'historyBtn' => 'Kliknite na tlačidlo Zobraziť históriu prehliadania a obnoviť predtým uložený rozvrhnutie z histórie.',
            'historyDefault' => 'Kliknite na tlačidlo Obnoviť predvolené obnoviť pohľad na jeho pôvodný tvar.',
            'publishBtn' => 'Kliknite <b>Uložiť a Rozmiestniť</b> na uloženie všetkých zmien, ktoré ste urobili rozmiestneniu od kedy ste ho naposledy uložili. Tým sa zmeny stanú v moduli aktívne.<br /><br />V moduli bude rozloženie okamžite zobrazené.',
            'toolbox' => '<b>Sada nástrojov</b> obsahuje <b>Kôš</b>, prídavné časti a sadu dostupných polí, ktoré môžete pridať k rozloženiu. <br /><br />Časti rozloženia a polia v Sade nástrojov môžu byť ťahané a pustené do rozloženia. Časti rozloženia a polia môžu byť ťahané a pustené z rozloženia do Sady nástrojov. <br /><br />Časťou rozloženia sú <b>Panely</b> a <b>Riadky</b>. Pridaním nového riadku alebo nového panela do rozloženia poskytne ďalšie miesto v poliach rozloženia. <br /><br />Ťahajte a pustite hocijaké pole v Sade nástrojov alebo rozloženia do obsadeného pola na výmenu umiestnenia tých dvoch polí.',
            'panels' => '<b>Rozloženie</b> poskytuje náhľad ako bude rozloženie vyzerať v module keď sa rozmiestnia zmeny. <br /><br />Môžete zmeniť polia, riadky a panely ťahaním a pustením na požadovanon mieste. <br /><br />Odoberte častí ťahaním a pustením do <b>Koša</b> v Sade nástrojov, alebo pridajte novú časť alebo pole ťahaním ich zo Sady nástrojov a pustením ich na požadované miesto v rozmiestnení.',
            'delete' => 'Tu ťahajte a pustite hocijakú časť ak ich chcete odstrániť z rozloženia.',
            'property' => 'Upravte nápis zobrazený v tomto poli.<br /><b>Určenie Tabulátora</b> riadi v akom poradí bude tabulátor meniť medzi poliami.',
        ),
        'fieldsEditor' => array(
            'default' => 'Prednastavený',
            'mbDefault' => '<b>Polia</b>, ktoré sú dostupné pre modul sú uvedené v Mene Pola.<br /><br />Pre nastavenie vlastností pola, kliknite na Meno Pola.<br /><br />Pre vytvorenie nového pola, kliknite <b>Pridať Pole</b>. Pomenovanie spolu s inými vlastnosťami pola môžu byť upravené po jeho vytvorení kliknutím na Meno Pola.<br /><br />Po tom ako je modul rozmiestnený, nové polia vytvorené vo Vytvárači Modulov sú považované za štandardné polia v Študijnom rozloženom moduli.',
            'addField' => 'Vyberte <b>Typ Dát</b> pre nové pole. Typ, ktorý vyberiete určuje aký typ znakov môžu byť zadané pre to pole. Napríklad, iba celé čísla môžu byť zadané do polí pre celé čísla.<br /><br />Dajte <b>Meno</b> pre pole. Meno musí byť alfanumerické a nesmie mať žiadne medzery. Podtržníky sú platné. <br /><br /><b>Zobraziť Štítok</b> je štítok, ktorý sa zobrazí pre polia v modulovom rozložení. <b>Systémový štítok</b> sa používa pre pomenovanie pola v kóde. <br /><br />V závislosti od typu dát vybraných pre pole, niektoré z nasledujúcich vlastností môžu byť určené pre pole:<br /><br /><b>Pomocný Text</b> je viditeľný len v Štúdiu alebo v Stavači Modulov a môže byť použitý na popísanie polií pre administrátorov. <br /><br /><b>Predovlená Hodnota</b> sa zobrazí v poli. Užívatelia môžu zadať novú hodnotu do pola alebo použiť predvolenú hodnotu. <br /><br /><b>Maximálna veľkosť</b> hodnoty určuje maximálny počet znakov, ktoré môžu byť zadané do pola. <br /><br />Zaškrtnite <b>Požadované pole</b> aby ste vybrali požadované pole. Pre pole musí byť poskytnutá hodnota aby ste mohli uložiť záznam, ktorý obsahuje pole.<br /><br />Zaškrtnite <b>Audit</b> aby ste mohli pozorovať zmeny, ktoré sa udiali s polom v Logu Zmien.<br /><br />Zaškrtnite možnosť <b>Importovateľné</b> pole aby ste povolili, zakázali alebo vyžadovali importovať pole do Import Wizard.<br /><br />Zaškrtnite možnosť <b>Duplikované spojenie</b> aby ste povolili alebo zakázali spájať duplikáty alebo možnosť hľadať duplikáty. <br /><br />Ďalšie vlastnosti môžu byť pre určité dátové typy.',
            'editField' => 'Vlastnosti tohto poľa môžu byť upravené. <br /><br />Kliknite <b>Klon</b> pre vytvorenie nového poľa s rovnakými vlastnosťami.',
            'mbeditField' => '<b>Zobraz štítok</b> pola šablóny môže byť upravený. Iné vlastnosti pola môžu byť upravené. <br /><br />Kliknite <b>Klon</b> pre vytvorenie nového poľa s rovnakými vlastnosťami. <br /><br />Pre odobratie pola šablóny, aby sa nezobrazoval v moduli, odoberte pole z patričných rozložení.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportujte upravenia vytvorené v Štúdiu vytvorením balíkov, ktoré môžu byť nahrané do iného SuiteCRM prípadu cez <b>Modulový zavádzacím programom</b>.<br /><br />Najprv, poskytnite <b>Meno balíka</b>. Môžete tak isto poskytnúť <b>Autora</b> a <b>Popis</b>.<br /><br />Vyberte modul, ktorý obsahuje upravenie, ktoré chcete exportovať. Iba moduly, ktoré obsahujú úpravy sa vám zobrazia na výber. <br /><br />Potom kliknite na <b>Export</b> pre vytvorenie .zip súboru pre balík, ktorý obsahuje úpravy.',
            'exportCustomBtn' => 'Kliknite <b>Export</b> pre vytvorenie balíku, ktorý obsahuje úpravy, ktoré chcete exportovať.',
            'name' => 'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
            'author' => 'autor<br />Toto je Autor, ktorý je zobrazený počas inštalácie ako meno osoby, ktorá vytvorila tento balík.<br /><br />Autor môže byť jedinec, ale aj spoločnosť.',
            'description' => 'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Vitajte v mieste pre <b>Vývojárske Nástroje</b>.<br /><br />Používajte tieto nástroje v rámci tohto miesta na vytvorenie a spravovanie štandardných a upravených modulov a polí.',
            'studioBtn' => 'Používajte <b>Štúdio</b> na upravenie rozložených modulov.',
            'mbBtn' => 'Používajte <b>Stavaš Modulv</b> na vytvorenie nových modulov.',
            'sugarPortalBtn' => 'Používajte <b>SuiteCRM Portálový Editor</b> na spravovanie a upravovanie SuiteCRM Portálu.',
            'dropDownEditorBtn' => 'Používajte <b>Rolovací editor</b> na pridanie a editovanie globálnych rolovacích menu a rolovacích polí.',
            'appBtn' => 'V aplikačnom móde môžete upravovať rôzne vlastnosti programu, ako napríklad: koľko TPS správ bude zobrazených na domovskej stránke.',
            'backBtn' => 'Vrátiť sa predchádzajúci krok.',
            'studioHelp' => 'Používajte <b>Štúdio</b> na určenie ktoré a ako budú informácie zobrazené v moduloch.',
            'moduleBtn' => 'Kliknite na upravenie tohto modulu.',
            'moduleHelp' => 'Časti, ktoré upravujete pre tento modul, sa tu zobrazujú. <br /><br />Kliknite na ikonu pre vybranie častí, ktoré idete upraviť.',
            'fieldsBtn' => 'Vytvoriť a upraviť <b>Polia</b> na',
            'labelsBtn' => 'Upravte <b>Štítky</b>, ktoré sa zobrazujú za poli a iné názvy v moduly.',
            'relationshipsBtn' => 'Pridaj nové alebo existujúce <b>Vzťahy</b> pre modul.',
            'layoutsBtn' => 'Upravte <b>rozloženia</b> modulu. Rozloženia sú rôzne pohľady modulu obsahujúci polia. <br /><br />Môžete určiť, ktoré polia sa zbrazia a ko budú ogranizované v každom rozložení.',
            'subpanelBtn' => 'Určite, ktoré polia sa zobrazia v <b>Subpaneloch</b> modulu.',
            'portalBtn' => 'Upravte <b>Rozloženie</b> modulu, ktorý sa zobrazuje v <b>SuiteCRM Portáli</b>',
            'layoutsHelp' => 'Tu sa zobrazuje <b>Rozloženie</b> modulu, ktoré môže byť upravované.<br /><br />Rozloženie zobrazuje polia a dáta v poliach.<br /><br />Kliknite na ikonu na úpravu rozloženia.',
            'subpanelHelp' => 'Tu sa zobrazujú <b>Subpanely</b> v moduly, ktoré môžu byť upravené.',
            'newPackage' => 'Kliknite na <b>Nový balík</b> pre vytvorenie nového balíka.',
            'exportBtn' => 'Kliknite <b>Export Upravenia</b> na vytvorenie a stiahnutie balíka obsahujúci upravenie spravené v Štúdiu pre špecifický modul.',
            'mbHelp' => 'Použite <b>Stavač modulov</b> pre vytvorenie balíkov, ktoré obashujú moduly na základe štandardných alebo upravených predmetov.',
            'viewBtnEditView' => 'Upravte modulové rozloženie <b>UpraviťZobrazenie</b>.<br /><br />UpraviťZobrazenie je forma, ktorá obsahuje vstupné polia pre zachytávanie užívateľmi vložených dát.',
            'viewBtnDetailView' => 'Upravte modulové rozloženie <b>DetailnéZobrazenie</b>.<br /><br />DetailnéZobrazenie zobrazuje v polia s užívateľmi vloženými dátami.',
            'viewBtnDashlet' => 'Upravte modulový <b>SuiteCRM Dashlet</b>, ktorý zahŕňa SuiteCRM Dashlet Zoznam a Hľadanie.',
            'viewBtnListView' => 'Upravte modulový <b>ZoznamZobrazenie</b><br /><br />Výsledky hľadania sa zobrazia v ZoznamZobrazení.',
            'searchBtn' => 'Upravte modulové rozloženie <b>Hľadania</b>.<br /><br />Určíte, ktoré polia môžu byť použité na filtrovanie nahrávok, ktoré sa objavujú v ZoznameZobrazení.',
            'viewBtnQuickCreate' => 'Upravte modulový rozloženie <b>RýchleVytvorenie</b>.<br /><br />Rýchlevytvorenie sa objavuje v subpaneloch a v emailovom module.',
            'addLayoutHelp' => "Pre vytvorenie vlastného rozvrhnutia pre skupinu bezpečnosti, vyberte príslušnú skupinu bezpečnosti a rozvrhnutie, z ktorého chcete vychádzať.",
            'searchHelp' => '<b>Vyhľadávacie</b> formuláre, ktoré môžu byť presonalizované sa zobrazia tu.<br><br>Vyhľadávacie formuláre obsahujú polia pre filtrovanie záznamov.<br><br>Kliknite na ikonu pre výber vzhľadu vyhľadávania na úpravu.',
            'dashletHelp' => 'Tu je rozloženie <b>SuiteCRM Dashlet</b>, ktoré sa dá upravovať.<br /><br />SuiteCRM Dashlet vám umožní pridávať stránky k domácemu modulu.',
            'DashletListViewBtn' => '<b>SuiteCRM Dashlet ZoznamZobrazenie</b> zobrazuje nahrávky na hľadaných filtroch SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => '<b>SuiteCRM Dashlet Hľadanie</b> filtruje nahrávky pre SuiteCRM Dashlet ZoznamZobrazenie.',
            'popupHelp' => 'Tu môžete upraviť popup rozloženie.',
            'PopupListViewBtn' => '<b>Popup ZoznamovéZobrazenie</b> zobrazuje nahrávky na základe výsledkov vyhľadávanie popup-ov.',
            'PopupSearchViewBtn' => '<b>Popup Hľadanie</b> zobrazuje nahrávky pre Popup ZoznamovéZobrazenie.',
            'BasicSearchBtn' => 'Upravte formulár <b>Rychlý filter</b>, ktorý sa zobrazí na karte rychlý filter v oblasti filtrov pre modul.',
            'AdvancedSearchBtn' => 'Upravte formulár <b>Rozšírený filter</b>, ktorý sa zobrazí na karte rozšírený filter v oblasti filtrov pre modul.',
            'portalHelp' => 'Riadiť a upraviť <b>SuiteCRM Portál</b>',
            'SPUploadCSS' => 'Nahrať <b>Štýlový Hárok</b> pre SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> upravenie pre SuiteCRM Portál.',
            'Layouts' => 'Upraviť <b>Rozloženie</b> modulov SuiteCRM Portálu.',
            'portalLayoutHelp' => 'Tu sa zobrazujú moduly v SuiteCRM Portáli.<br /><br />V rozložení môžete vybrať modul na úpravu.',
            'relationshipsHelp' => 'Tu sa zobrazujú všetky <b>Vzťahy</b>, ktoré existuju medzi modulom a inými modulmi.<br /><br /><b>Meno</b> vzťahu je systémo generované meno vzťahu.<br /><br /><b>Hlavný Modul</b> je modul, ktorý vlastní vzťah. Napríklad, všetky vlastnosti vzťahu pre ktorý je hlavný modul Účtový modul sú uložené v Účtových databázových tabuľkách.<br /><br /><b>Typ</b> je typ vzťahu, ktorý existuje medzi Hlavným modul a <b>Súvisiacim Modulom</b><br /><br />Kliknite na názov stĺpca na upravenie podľa stĺpca.<br /><br />Kliknite na riadok vo vzťahovej tabuľke na zobrazenie vlastností súvisiacich so vzťahom. <br /><br />Kliknite na <b>Pridať Vzťah</b> pre vytvorenie nového vzťahu.<br /><br />Vzťahy môžu byť vytvorené medzi hociktorými dvoma rozloženými modulmi.',
            'relationshipHelp' => '<b>Vyťahy</b> môžu byť vytvorené medzi modulom a iným rozloženým modulom. <br /><br />Vzťahu sú vizuálne vyjadrené cez subpanely a súvisiace polia v modulových záznamoch. <br /><br />Vyberte jednu z nasledujúcich <b>Typov</b> pre modul:<br /><br /><b>Jeden-k-jednému</b> - Obidve modulové nahrávky budú obsahovať súvisiace polia.<br /><br /><b>Jeden-k-veľa</b> - Nahrávka hlavného modulu bude obsahovať subpanel a nahrávky príbuzných modulov budú obsahovať súvisiace pole.<br /><br /><b>Veľa-k-veľa</b> - Nahrávky obidvoch modulov budú zobrazovať subpanely.<br /><br />Vyberte <b>Príbuzný Modul</b> pre vzťah.<br /><br />Ak typ vzťahu zahŕňa subpanely, vyberte zobrazenie subpanelov pre zodpovedajúce moduly.<br /><br /> Kliknite <b>Uložiť</b> pre vytvorenie vzťahu.',
            'convertLeadHelp' => 'Tu môžete pridať moduly pre konvertovanú obrazovku rozloženia a upraviť rozloženie existujúcich. <br />Môžete upraviť moduly ťahaním ich riadkov v tabuľke.<br /><br /><b>Modul:</b> Meno modulu.<br /><br /><b>Požadované:</b> Požadované moduly musia byť vytvorené alebo vybraté pred tým ako môže byť konvertovaná príležitosť.<br /><br /><b>Kopíruj Dáta:</b> Ak zaškrtnuté, polia od príležitosti budú skopírovane do polí s rovnakým menom v novo vytvorených nahrávkach.<br /><br /><b>Povol Selekciu:</b> Moduly s príbuzným polom v Kontaktoch môže byť vybraté než vytvorené počas konvertovania príležitosti.',


            'editDropDownBtn' => 'Upraviť gloválne rolovacie menu',
            'addDropDownBtn' => 'Pridaj nový globálne rolovacie menu.',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Polia</b> v tomto module sú uvedené podľa názvu poľa.<br/><br/>Šablóna modulu obsahuje predefinovanú sadu polí.<br/><br/>Pre vytvorenie nového poľa kliknite na <b>Pridať pole</b>.<br/><br/>Pre úpravu poľa, kliknite na <b>Názov poľa</b>.<br/><br/>Po nasadení modulu, budú nové polia, vytvorené modulom Builder, v súlade s poľami šablóny považované v Sudio za štandardné.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Tu sú zobrazené <b>vzťahy</b>, ktoré boli vytvorené medzi modulom a inými modulmi.<br><br><b>Názov</b> vzťahu je názov, vygenerovaný systémom.<br><br><b>Primárny modul</b> je modul, ktorý vlastní vzťahy. Vlastnosti vzťahov sú uložené v tabuľkách databázy patriacich primárnemu modulu.<br><br><b>Typ</b> je typ vzťahu, ktorý existuje medzi primárnym modulom a <b>súvisiacim modulom</b>.<br><br>Pre zoradenie podľa stĺpca kliknite na nadpis stĺpca.<br><br>Pre zobrazenie a úpravu vlastností vzťahu kliknite na riadok v tabuľke.<br><br>Pre vytvorenie nového vzťahu kliknite na <b>Pridať vzťah</b>.',
            'addrelbtn' => 'myš cez pomáha pridat vzťah..',
            'addRelationship' => '<b>Vyťahy</b> môžu byť vytvorené medzi modulom a iným rozloženým modulom. <br /><br />Vzťahu sú vizuálne vyjadrené cez subpanely a súvisiace polia v modulových záznamoch. <br /><br />Vyberte jednu z nasledujúcich <b>Typov</b> pre modul:<br /><br /><b>Jeden-k-jednému</b> - Obidve modulové nahrávky budú obsahovať súvisiace polia.<br /><br /><b>Jeden-k-veľa</b> - Nahrávka hlavného modulu bude obsahovať subpanel a nahrávky príbuzných modulov budú obsahovať súvisiace pole.<br /><br /><b>Veľa-k-veľa</b> - Nahrávky obidvoch modulov budú zobrazovať subpanely.<br /><br />Vyberte <b>Príbuzný Modul</b> pre vzťah.<br /><br />Ak typ vzťahu zahŕňa subpanely, vyberte zobrazenie subpanelov pre zodpovedajúce moduly.<br /><br /> Kliknite <b>Uložiť</b> pre vytvorenie vzťahu.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Označenia</b> pre polia a ďalšie nadpisy v module je možné meniť.<br><br>Označenie upravíte tak, že kliknete na pole, zadáte nove označenie a kliknete na <b>Uložiť</b>.<br><br>Ak sú v aplikácii nainštalované jazykové sady, môžete vybrať <b>jazyk</b>, ktorý bude pre označenia použitý.',
            'saveBtn' => 'Kliknite <b>Uložiť</b> na zachovanie zmien.',
            'publishBtn' => 'Kliknite <b>Uložiť a Rozmiestniť</b> na uloženie všetkých zmien, ktoré ste urobili rozmiestneniu od kedy ste ho naposledy uložili. Tým sa zmeny stanú v moduli aktívne.',
        ),
        'portalSync' => array(
            'default' => 'Zadajte inštanciu <b>URL portálu SuiteCRM</b>, ktorú chcete aktualizovať, a kliknite na tlačidlo <b>Prejsť</b>.<br><br>Potom zadajte svoje používateľské meno a heslo a kliknite na tlačidlo <b>Spustiť synchronizáciu</b>.<br><br>Ak boli nahrané prispôsobenia uskutočnené v súbore <b>rozloženia</b> programu SuiteCRM spolu so <b>štýlom šablóny</b>, tieto budú prevedené na zadanú inštanciu portálu.',
        ),
        'portalStyle' => array(
            'default' => 'Pomocou šablóny štýlu môžete upraviť vzhľad portálu SuiteCRM.<br><br>Pre nahratie vyberte <b>Štýl</b>. <br> <br>Štýl bude v portále SuiteCRM uplatnený pri ďalšom spustení synchronizácie.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'žiadne balíky<br />Pre začatie na projekte, kliknite na tlačidlo Nový balíček pre vytvorenie nového balíka pre umiestnenie svojich vlastných modulov.<br /><br />Každý balík môže obsahovať jeden alebo viac modulov.<br /><br />Napríklad, môžete chcieť vytvoriť balíček obsahujúci jeden vlastný modul, ktorý sa vzťahuje na štandardné účty modulu. Alebo, možno budete chcieť vytvoriť balíček obsahujúci niekoľko nových modulov, ktoré pracujú spoločne ako projekt a ktoré sú vo vzájomnom vzťahu k ostatným modulom v aplikácii.',
            'somepackages' => 'niektoré balíky<br />Balík sa chová ako kontajner pre vlastné moduly, z ktorých všetky sú súčasťou jedného projektu. Balík môže obsahovať jeden alebo viac vlastných modulov, ktoré môžu byť prepojené vzájomne alebo s inými modulmi v aplikácii.<br /><br />Po vytvorení balíka pre svoj ​​projekt, môžete vytvoriť moduly pre balík hneď, alebo sa môžete do Module Builder vrátiť neskôr a projekt dokončiť .<br /><br />Ak je projekt dokončený, môžete nasadiť balík k inštalácii vlastných modulov v rámci aplikácie.',
            'afterSave' => 'po uložení<br />Váš nový balík by mal obsahovať aspoň jeden modul. Môžete vytvoriť jeden alebo viac vlastných modulov pre balík.<br /><br />Kliknite na tlačidlo Nový modul pre vytvorienie vlastného modulu pre tento balík.<br /><br />Po vytvorení aspoň jedného modulu, môžete publikovať alebo nasadiť balík, aby bol k dispozícii pre vaše inštancie a / alebo inštancie iných užívateľov.<br /><br />Ak chcete nasadiť balík jednom kroku v  rámci vašej SuiteCRM inštancie, kliknite na tlačidlo Nasadiť.<br /><br />Kliknite na tlačidlo Publikovať uložiť balíček ako. Zip súboru. Po. Zip súbor sa uloží do systému, použite Module Loader nahrať a inštaláciu balík vo Vašom SuiteCRM inštancie.<br /><br />Môžete distribuovať súbor ostatným užívateľom, nahrať a inštalovať v rámci ich vlastných SuiteCRM inštancií.',
            'create' => 'Zadajte Meno modulu. Názov, ktorý zadáte sa zobrazí v navigačnom menu.<br /><br />Pre zobrazenie navigačného menu pre tento modul potvrďte checkbox Navigačné Menu.<br /><br />Pre zobrazenie poľa voľby Tímov v záznamoch modulu potvrďte chceckbox Tímová Bezpečnosť.<br /><br />Potom zvoľte typ modulum ktorý si prajete vytvoriť.<br /><br />Zvoľte typ šablóny. Každá šablóna obsahuje špecifický súbor polí, ako aj pre-definované rozloženia, používané ako základy pre Váš modul.<br /><br />Stlačte Uložiť pre vytvorenie modulu.',
        ),
        'main' => array(
            'welcome' => 'vitajte<br />Použite nástroj pre vývojárov pre vytváranie a spravovanie štandardných a vlastných modulov a polí.<br /><br />Ak chcete spravovať moduly v aplikácii, kliknite na tlačidlo Studio.<br /><br />Ak chcete vytvoriť vlastné moduly, kliknite na tlačidlo Modul Builder.',
            'studioWelcome' => 'Vitajte v Štúdiu<br />Všetky aktuálne nainštalované moduly, vrátane štandardných a objektov načítaných modulmi, sú prispôsobiteľné v Štúdiu.'
        ),
        'module' => array(
            'somemodules' => "niektoré moduly<br />Vzhľadom k tomu, že súčasný balík obsahuje aspoň jeden modul, môžete nasadiť moduly v balíku v rámci Vašej SuiteCRM inštancie alebo publikovať balík pre inštaláciu v aktuálnej SuiteCRM inštancii alebo inú inštanciu pomocou Module Loader.<br /><br />Ak chcete inštalovať balík priamo v rámci Vašej SuiteCRM inštancie, kliknite na tlačidlo Nasadiť.<br /><br />Ak chcete vytvoriť. zip súboru balíka, ktorý možno načitať a nainštalovať v rámci súčasnej SuiteCRM inštancie a ďalších inštancií použite Module Loader, kliknite na tlačidlo Publikovať.<br /><br />Môžete si vytvoriť moduly pre tento balík v niekoľkých fázach, zverejniť alebo nasadiť, keď ste pripravení tak urobiť.<br /><br />Po publikovaní alebo nasadenie balíka, môžete vykonávať zmeny vlastností balíka a prispôsobenie modulov aj naďalej. Potom znovu publikovať alebo znovu nasadiť balík s použitou zmenou.",
            'editView' => 'prehľad úprav<br />Tu môžete editovať existujúce polia. Môžete odstrániť niektoré z existujúcich polí alebo pridať dostupné polia v ľavom paneli.',
            'create' => 'Zadajte Meno modulu. Názov, ktorý zadáte sa zobrazí v navigačnom menu.<br /><br />Pre zobrazenie navigačného menu pre tento modul potvrďte checkbox Navigačné Menu.<br /><br />Pre zobrazenie poľa voľby Tímov v záznamoch modulu potvrďte chceckbox Tímová Bezpečnosť.<br /><br />Potom zvoľte typ modulum ktorý si prajete vytvoriť.<br /><br />Zvoľte typ šablóny. Každá šablóna obsahuje špecifický súbor polí, ako aj pre-definované rozloženia, používané ako základy pre Váš modul.<br /><br />Stlačte Uložiť pre vytvorenie modulu.',
            'afterSave' => 'po uložení<br />Prispôsobujte vlastné moduly tak, aby vyhovovali vašim potrebám editáciou a vytváraním polí, nadväzovaním vzťahov s inými modulmi a usporiadanie polí v rámci rozloženia.<br /><br />Ak chcete zobraziť šablóny poľa a spravovať vlastné pole v rámci modulu, kliknite na tlačidlo Zobraziť pole.<br /><br />Ak chcete vytvárať a spravovať vzťahy medzi modulom a ďalšími modulmi, či už modulov v aplikácii alebo iných vlastných modulov v rámci toho istého balíka, kliknite na tlačidlo Zobraziť relácie.<br /><br />Ak chcete upraviť rozloženie modulu, kliknite na tlačidlo Zobraziť rozvrhnutie. Môžete zmeniť Prehľad detailov, Prehľad úprav a Prehľad rozloženie pre modul, rovnako ako pre moduly už v aplikácii v rámci Štúdia.<br /><br />Ak chcete vytvoriť modul s rovnakými vlastnosťami ako má aktuálny modul, kliknite na tlačidlo Duplikovať. Nový modul môžete ďalej prispôsobovať.',
            'viewfields' => 'prehľad polí<br />Polia v module môžete upravovať tak, aby vyhovovali vašim potrebám.<br /><br />Nemôžete mazať štandardné polia, ale môžete ich odstrániť z príslušných rozvrhnutí v rámci Rozloženia stránok.<br /><br />Môžete rýchlo vytvoriť nové polia, ktoré majú podobné vlastnosti ako existujúcich polia kliknutím na Klon vo Vlastnostiach formulára. Zadajte nové vlastnosti, a potom kliknite na tlačidlo Uložiť.<br /><br />Odporúča sa, aby ste si nastavili všetky vlastnosti štandardných polí a vlastných polí pred publikovaním a inštaláciou balíka obsahujúceho vlastný modul.',
            'viewrelationships' => 'prehľad vzťahov<br />Môžete vytvoriť many-to-many vzťahy medzi aktuálnym modulom a ďalšími modulmi v balíku a / alebo medzi aktuálnym modulom a modulmi nainštalovanými v aplikácii.<br /><br />Ak chcete vytvoriť one-to-many a one-to-one vzťahy, vytvorte Relate a Flex Relate polia pre moduly.',
            'viewlayouts' => 'prehľad rozmiestnenia',
            'existingModule' => 'Po vytvorení a prispôsobení tohto modulu, môžete vytvoriť ďalšie moduly alebo sa vrátiť do balíčka Publikovanie alebo Nasadenie balíčka.<br /><br />Ak chcete vytvoriť ďalšie moduly, kliknite na tlačidlo Duplikovať pre vytvorenie modulu s rovnakými vlastnosťami ako aktuálny modul, alebo prejdite späť do balíčka a kliknite na tlačidlo Nový modul.<br /><br />Ak ste pripravení na Publikovanie alebo Nasadenie balíčka obsahujúceho tento modul, prejdite späť do balíčka pre vykonávanie týchto funkcií. Môžete publikovať a nasadzovať balíčky obsahujúce aspoň jeden modul.',
            'labels' => 'Štítky štandardných polí, rovnako ako vlastné pole je možné zmeniť. Zmena štítkov poľa nebude mať vplyv na dáta uložené v poliach.',
        ),
        'listViewEditor' => array(
            'modify' => 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.',
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'Hidden' => 'Skrytý',
            'Available' => 'Na sklade',
            'Default' => 'Predvolené polia sú zobrazené používateľom, ktorí nevytvorili vlastný zoznam nastavení zobrazení.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Môžte meniť vlastnosti modulu, alebo upravovať Polia, Vzťahy a Rozloženia, vzťahujúce sa k modulu.',
            'savebtn' => 'Zvoľte Uložiť pre uloženie tohoto balíka a všetkých súborov súvisiacich s týmto balíkom.',
            'Hidden' => 'Skrytý',
            'Default' => 'Vo vyhľadávacom zobrazení sa zobrazia prednastavené polia.'
        ),
        'layoutEditor' => array(
            'default' => 'Vľavo sú zobrazené dva stĺpce. Pravom stĺpci, označenom Aktuálne rozloženie alebo Náhľad rozloženia, môžete zmeniť rozloženie modulu. Ľavý stĺpec označený Nástroje, obsahuje užitočné prvky a nástroje na použitie pri úprave rozložení.<br/><br/>Ak rozloženie oblasti má názov Aktuálne rozloženie, tak pracujete s kópiou rozloženia, ktorú pre zobrazenie modul práve používa.<br/><br/>Ak je názov Náhľad rozloženia, potom pracujete s kópiou, ktorú ste vytvorili predtým, kliknutím na tlačidlo Uložiť, ktorá už mohla byť zmenená od verzie, ktorú videli používatelia tohto modulu.',
            'saveBtn' => 'Kliknite <b>Uložiť</b> na zachovanie zmien.',
            'publishBtn' => 'Kliknite <b>Uložiť a Rozmiestniť</b> na uloženie všetkých zmien, ktoré ste urobili rozmiestneniu od kedy ste ho naposledy uložili. Tým sa zmeny stanú v moduli aktívne.',
            'toolbox' => '<b>Sada nástrojov</b> obsahuje <b>Kôš</b>, prídavné časti a sadu dostupných polí, ktoré môžete pridať k rozloženiu. <br /><br />Časti rozloženia a polia v Sade nástrojov môžu byť ťahané a pustené do rozloženia. Časti rozloženia a polia môžu byť ťahané a pustené z rozloženia do Sady nástrojov. <br /><br />Časťou rozloženia sú <b>Panely</b> a <b>Riadky</b>. Pridaním nového riadku alebo nového panela do rozloženia poskytne ďalšie miesto v poliach rozloženia. <br /><br />Ťahajte a pustite hocijaké pole v Sade nástrojov alebo rozloženia do obsadeného pola na výmenu umiestnenia tých dvoch polí.',
            'panels' => '<b>Rozloženie</b> poskytuje náhľad ako bude rozloženie vyzerať v module keď sa rozmiestnia zmeny. <br /><br />Môžete zmeniť polia, riadky a panely ťahaním a pustením na požadovanon mieste. <br /><br />Odoberte častí ťahaním a pustením do <b>Koša</b> v Sade nástrojov, alebo pridajte novú časť alebo pole ťahaním ich zo Sady nástrojov a pustením ich na požadované miesto v rozmiestnení.'
        ),
        'dropdownEditor' => array(
            'default' => 'Vľavo sú zobrazené dva stĺpce. Pravom stĺpci, označenom Aktuálne rozloženie alebo Náhľad rozloženia, môžete zmeniť rozloženie modulu. Ľavý stĺpec označený Nástroje, obsahuje užitočné prvky a nástroje na použitie pri úprave rozložení.<br/><br/>Ak rozloženie oblasti má názov Aktuálne rozloženie, tak pracujete s kópiou rozloženia, ktorú pre zobrazenie modul práve používa.<br/><br/>Ak je názov Náhľad rozloženia, potom pracujete s kópiou, ktorú ste vytvorili predtým, kliknutím na tlačidlo Uložiť, ktorá už mohla byť zmenená od verzie, ktorú videli používatelia tohto modulu.',
            'dropdownaddbtn' => 'Kliknutím na toto tlačidlo pridáte novú položku do rozbaľovacej ponuky.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportujte upravenia vytvorené v Štúdiu vytvorením balíkov, ktoré môžu byť nahrané do iného SuiteCRM prípadu cez <b>Modulový zavádzacím programom</b>.<br /><br />Najprv, poskytnite <b>Meno balíka</b>. Môžete tak isto poskytnúť <b>Autora</b> a <b>Popis</b>.<br /><br />Vyberte modul, ktorý obsahuje upravenie, ktoré chcete exportovať. Iba moduly, ktoré obsahujú úpravy sa vám zobrazia na výber. <br /><br />Potom kliknite na <b>Export</b> pre vytvorenie .zip súboru pre balík, ktorý obsahuje úpravy.',
            'exportCustomBtn' => 'Kliknite <b>Export</b> pre vytvorenie balíku, ktorý obsahuje úpravy, ktoré chcete exportovať.',
            'name' => 'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
            'author' => 'autor<br />Toto je Autor, ktorý je zobrazený počas inštalácie ako meno osoby, ktorá vytvorila tento balík.<br /><br />Autor môže byť jedinec, ale aj spoločnosť.',
            'description' => 'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Vitajte v mieste pre <b>Vývojárske Nástroje</b>.<br /><br />Používajte tieto nástroje v rámci tohto miesta na vytvorenie a spravovanie štandardných a upravených modulov a polí.',
            'studioBtn' => 'Používajte <b>Štúdio</b> na upravenie rozložených modulov.',
            'mbBtn' => 'Používajte <b>Stavaš Modulv</b> na vytvorenie nových modulov.',
            'appBtn' => 'V aplikačnom móde môžete upravovať rôzne vlastnosti programu, ako napríklad: koľko TPS správ bude zobrazených na domovskej stránke.',
            'backBtn' => 'Vrátiť sa predchádzajúci krok.',
            'studioHelp' => 'Používajte <b>Štúdio</b> na určenie ktoré a ako budú informácie zobrazené v moduloch.',
            'moduleBtn' => 'Kliknite na upravenie tohto modulu.',
            'moduleHelp' => 'Vyberte modul komponentu, ktorý chcete upraviť',
            'fieldsBtn' => 'Upravte aké informácie sú uložené v module na kontrolu polí v module.<br />Tu môžete upravovať a vytvárať vlastné polia.',
            'labelsBtn' => 'Upravte Štítky pre zobrazenie hodnôt v tomto module.',
            'layoutsBtn' => 'Vlastné Rozloženia pre Úpravy, Detaily, Zoznam a prehľad vyhľadávaní.',
            'subpanelBtn' => 'Upravte aké informácie sa zobrazia v Subpaneloch modulov.',
            'layoutsHelp' => 'Vyberte Rozloženie pre editovanie.<br />Ak chcete zmeniť rozloženie, ktoré obsahuje dátové pole pre zadávanie údajov, kliknite na tlačidlo Upraviť zobrazenie.<br />Ak chcete zmeniť stĺpce, ktoré sa objavujú v predvolenom zozname, kliknite na tlačidlo Zobraziť zoznam.<br />Ak chcete zmeniť základné a pokročilé rozloženie vyhľadávacieho formulára, kliknite na tlačidlo Hľadať.',
            'subpanelHelp' => 'Vyberte Subpanel pre editovanie.',
            'searchHelp' => 'Vyberte rozloženie vyhľadávacej stránky pre editovanie.',
            'newPackage' => 'Kliknite na <b>Nový balík</b> pre vytvorenie nového balíka.',
            'mbHelp' => 'Použite <b>Stavač modulov</b> pre vytvorenie balíkov, ktoré obashujú moduly na základe štandardných alebo upravených predmetov.',
            'exportBtn' => 'Kliknite <b>Export Upravenia</b> na vytvorenie a stiahnutie balíka obsahujúci upravenie spravené v Štúdiu pre špecifický modul.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor rozbaľovacieho zoznamu',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Tvorca modulov',
    'LBL_STUDIO' => 'Štúdio',
    'LBL_DROPDOWNEDITOR' => 'Editor rozbaľovacieho zoznamu',
    'LBL_DEVELOPER_TOOLS' => 'Vývojárske nástroje',
    'LBL_SUITEPORTAL' => 'Editor SuiteCRM portálu',
    'LBL_PACKAGE_LIST' => 'Zoznam balíkov',
    'LBL_HOME' => 'Domov',
    'LBL_NONE' => '--žiadny--',
    'LBL_DEPLOYE_COMPLETE' => 'Nasadenie kompletné',
    'LBL_DEPLOY_FAILED' => 'Chyba sa vyskytla počas procesov nasadenia, váš balík nebol správne nainštalovaný',
    'LBL_AVAILABLE_SUBPANELS' => 'Dostupne podpanely',
    'LBL_ADVANCED' => 'Pokročilé',
    'LBL_ADVANCED_SEARCH' => 'Rozšírený filter',
    'LBL_BASIC' => 'Základné',
    'LBL_BASIC_SEARCH' => 'Rychlý filter',
    'LBL_CURRENT_LAYOUT' => 'Usporiadanie',
    'LBL_CURRENCY' => 'Mena:',
    'LBL_DASHLET' => 'SuiteCRM prehľadové okienko',
    'LBL_DASHLETLISTVIEW' => 'Zobrazenie zoznamu prehľadových okienok SuiteCRM Dashlet',
    'LBL_POPUP' => 'Zobrazenie vyskakovacích okienok Popup',
    'LBL_POPUPLISTVIEW' => 'Zobrazenie zoznamu vykakovacích okienok Popup',
    'LBL_POPUPSEARCH' => 'Vyhľadávanie vo vyskakovacom okne',
    'LBL_DASHLETSEARCHVIEW' => 'Dashlet vyhľadávanie',
    'LBL_DETAILVIEW' => 'Zobrazenie detailu',
    'LBL_DROP_HERE' => '[Vlož sem]',
    'LBL_EDIT' => 'Upraviť',
    'LBL_EDIT_LAYOUT' => 'Upraviť rozloženie',
    'LBL_EDIT_FIELDS' => 'Upraviť  polia',
    'LBL_EDITVIEW' => 'Upraviť náhľad',
    'LBL_FILLER' => '(výplň)',
    'LBL_FIELDS' => 'Polia',
    'LBL_FAILED_TO_SAVE' => 'Neúspešné k uloženiu',
    'LBL_FAILED_PUBLISHED' => 'Neúspešné publikovanie',
    'LBL_HOMEPAGE_PREFIX' => 'Moje',
    'LBL_LAYOUT_PREVIEW' => 'Náhľad usporiadania',
    'LBL_LAYOUTS' => 'Rozloženia',
    'LBL_LISTVIEW' => 'Zobraziť zoznam',
    'LBL_MODULES' => 'Moduly',
    'LBL_MODULE_TITLE' => 'Štúdio',
    'LBL_NEW_PACKAGE' => 'Nový balík',
    'LBL_NEW_PANEL' => 'Nový panel',
    'LBL_NEW_ROW' => 'Nový riadok',
    'LBL_PACKAGE_DELETED' => 'Balík vymazaný',
    'LBL_PUBLISHING' => 'Publikovanie ...',
    'LBL_PUBLISHED' => 'Uverejnený',
    'LBL_SELECT_FILE' => 'Vybrať súbor',
    'LBL_SUBPANELS' => 'Subpanely',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Názov: ',
    'LBL_SEARCH_FORMS' => 'Filter',
    'LBL_SEARCH' => 'Vyhľadať',
    'LBL_SEARCH_BUTTON' => 'Vyhľadať',
    'LBL_FILTER' => 'Filter',
    'LBL_TOOLBOX' => 'Nástroje',
    'LBL_QUICKCREATE' => 'Rýchle vytvorenie',
    'LBL_EDIT_DROPDOWNS' => 'Upraviť globálne rozbaľovacie zoznamy',
    'LBL_ADD_DROPDOWN' => 'Pridať nový rozbaľovací zoznam',
    'LBL_BLANK' => '-čistý-',
    'LBL_TAB_ORDER' => 'Poradie záložiek',
    'LBL_TABDEF_TYPE' => 'Typ zobrazenia:',
    'LBL_TABDEF_TYPE_HELP' => 'Vyberte, ako by sa mala táto sekcia zobraziť. Táto voľba má vplyv len, ak ste povolili karty z tohto pohľadu.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Vyberte panel, aby bol tento displej, v pohľade rozvrhnutý. Vyberte kartu, aby sa tento panel zobrazil v samostatnej záložke v rámci rozloženia. Ak je karta určená pre panel, budú ďalšie panely nastavené zobraziť hp ako panel ktorý sa zobrazí na karte.<br />Nová Tabuľka bude zahájená na ďalší panel, pre ktorý je vybraná Tabuľka. Ak je vybraná karta pre panel pod prvým panelom, bude prvý panel nutne Tabulovaný.',
    'LBL_TABDEF_COLLAPSE' => 'kolaps',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Vyberte aby sa východiskový stav tohto panelu zrútil.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Meno',
    'LBL_DROPDOWN_LANGUAGE' => 'Jazyk',
    'LBL_DROPDOWN_ITEMS' => 'Zoznam položiek',
    'LBL_DROPDOWN_ITEM_NAME' => 'Názov položky',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Zobrazenie etikiet',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizovať prehľad podrobností',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Výberom tejto možnosti dôjde k synchronizácii tohto rozloženia Úprava zobrazenia - EditView, aby zodpovedalo rozloženiu Podrobnosti zobrazenia - DetailView layout. Polia a umiestnenie poľa v EditView<br>budú synchronizované a uložené v DetailView automaticky, kliknutím na Uložiť - Save  alebo Uložiť a uplatniť - Save & Deploy, v Úpravách zobrazenia - EditView. <br>Zmeny rozloženia nebudú dostupné v Podrobnostiach zobrazenia - DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Toto Podrobné zobrazenie - DetailView je synchronizované so zodpovedajúcim Úprava zobrazenia -EditView.<br> Polia a pole umiestnené v tomto Podrobnom zobrazení - DetailView, odráža polia a pole umiestnené v Úprave zobrazenia - EditView.<br> Zmeny na Podrobnom zobrazení nemôžu byť uložené alebo uplatnené v tejto stránke. Preveďte zmeny alebo od synchronizáciu rozmiesnenia v Úprava zobrazenia - EditView.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopírovať z Úprava zobrazenia - EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Hodnoty sú požadované ako pre Meno, tak aj Štítok Obrazovky. Aby ste pridali prázdnu položku, kliknite Pridat bez vlozenia anýchkoľvek hodnôt pre položku Meno a Štítok Obrazovky.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Kľúč už existuje v zozname',
    'LBL_NO_SAVE_ACTION' => 'Nemožno nájsť uloženú akciu pre tento prehľad.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Štúdio 2: vytvoriť umiestnenie: zle vytvorený dokument',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primárny modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* vzťah vytvorený v Štúdiu',
    'LBL_RELATIONSHIPS' => 'Vzťahy',
    'LBL_RELATIONSHIP_EDIT' => 'Upraviť vzťahy',
    'LBL_REL_NAME' => 'Meno',
    'LBL_REL_LABEL' => 'Štítok',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Súvisiaci modul',
    'LBL_NO_RELS' => 'Žiadne vzťahy',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Nepovinná podmienka',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Stĺpec',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Hodnota',
    'LBL_SUBPANEL_FROM' => 'Subpanel od',
    'LBL_RELATIONSHIP_ONLY' => 'Nebudú vytvorené žiadne viditeľné súčasti,nakoľko už existujú viditeľné vzťahy medzi týmito dvoma modulmy.',
    'LBL_ONETOONE' => 'Jeden jednému',
    'LBL_ONETOMANY' => 'Jeden mnohým',
    'LBL_MANYTOONE' => 'Mnohý jednému',
    'LBL_MANYTOMANY' => 'Mnohý mnohým',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Vyberte modul k editácií.',
    'LBL_QUESTION_LAYOUT' => 'Vyberte návrh k editácií.',
    'LBL_QUESTION_SUBPANEL' => 'Vyberte pomocný panel k editácií.',
    'LBL_QUESTION_SEARCH' => 'Vyberte rozvrhnutie hľadania k editácií.',
    'LBL_QUESTION_MODULE' => 'Vyberte súčasť modulu k editácií.',
    'LBL_QUESTION_PACKAGE' => 'Vyberte balík k editácií, alebo vytvorte nový balík.',
    'LBL_QUESTION_EDITOR' => 'Vyberte nástroje.',
    'LBL_QUESTION_DASHLET' => 'Vyberte rozvrhnutie dashlet k editácií.',
    'LBL_QUESTION_POPUP' => 'Vyberte rozvrhnutie popup k editácií.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Meno',
    'LBL_LABELS' => 'Štítky',
    'LBL_MASS_UPDATE' => 'Hromadná aktualizácia',
    'LBL_DEFAULT_VALUE' => 'Prednastavená hodnota',
    'LBL_REQUIRED' => 'Povinné',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'UŽIVAŤEĽSKY',
    'LBL_HDEFAULT' => 'IMPLICITNY',
    'LBL_LANGUAGE' => 'Jazyk:',
    'LBL_CUSTOM_FIELDS' => '* pole vytvorené v Štúdiu',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Upraviť štítky',
    'LBL_SECTION_PACKAGES' => 'Balíky',
    'LBL_SECTION_PACKAGE' => 'Balík',
    'LBL_SECTION_MODULES' => 'Moduly',
    'LBL_SECTION_DROPDOWNS' => 'Robaľovacie zoznamy',
    'LBL_SECTION_PROPERTIES' => 'Vlastnosti',
    'LBL_SECTION_DROPDOWNED' => 'Úprava rozbaľovacieho zoznamu',
    'LBL_SECTION_HELP' => 'Pomoc',
    'LBL_SECTION_MAIN' => 'Hlavný',
    'LBL_SECTION_FIELDEDITOR' => 'Úprava poľa',
    'LBL_SECTION_DEPLOY' => 'Nasadiť',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Prednastavený',
    'LBL_HIDDEN' => 'Skrytý',
    'LBL_AVAILABLE' => 'Dostupné',
    'LBL_LISTVIEW_DESCRIPTION' => 'K dispozícii sú tri stĺpce, zobrazené nižšie. <b>Predvolený stĺpec</b> obsahuje polia, zobrazené v zozname predvolených zobrazení. <b>rozširujúci stĺpec</b> obsahuje polia, ktoré si užívateľ môže zvoliť k vytvoreniu užívateľského zobrazenia. <b>Dostupné stĺpce</b> zobrazujú polia, dostupné pre vás a administrátora, buď k pridaniu do Predvolených alebo Rozširujúcich stĺpcov, pre použitie užívateľmi.',
    'LBL_LISTVIEW_EDIT' => 'Editor prehľadu úprav',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Náhľad',
    'LBL_MB_RESTORE' => 'Obnoviť',
    'LBL_MB_DELETE' => 'Vymazať',
    'LBL_MB_DEFAULT_LAYOUT' => 'Implicitné rozvrhnutie',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Pridať',
    'LBL_BTN_SAVE' => 'Uložiť',
    'LBL_BTN_SAVE_CHANGES' => 'Uložiť zmeny',
    'LBL_BTN_DONT_SAVE' => 'Zrušiť zmeny',
    'LBL_BTN_CANCEL' => 'Zrušiť',
    'LBL_BTN_CLOSE' => 'Uzavrieť',
    'LBL_BTN_SAVEPUBLISH' => 'Uložiť a nasadiť',
    'LBL_BTN_CLONE' => 'Klon',
    'LBL_BTN_ADDROWS' => 'Pridať riadky',
    'LBL_BTN_ADDFIELD' => 'Pridať pole:',
    'LBL_BTN_ADDDROPDOWN' => 'Pridať rozbaľovací zoznam',
    'LBL_BTN_SORT_ASCENDING' => 'Triediť vzostupne',
    'LBL_BTN_SORT_DESCENDING' => 'Triediť zostupne',
    'LBL_BTN_EDLABELS' => 'Upraviť štítky',
    'LBL_BTN_UNDO' => 'Vrátiť späť',
    'LBL_BTN_REDO' => 'Znovu',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Pridať zákaznícke pole',
    'LBL_BTN_EXPORT' => 'Export prispôsobení',
    'LBL_BTN_DUPLICATE' => 'Duplikovať',
    'LBL_BTN_PUBLISH' => 'Zverejniť',
    'LBL_BTN_DEPLOY' => 'Nasadiť',
    'LBL_BTN_EXP' => 'Exportovať',
    'LBL_BTN_DELETE' => 'Vymazať',
    'LBL_BTN_VIEW_LAYOUTS' => 'Prezrieť rozvrhnutia',
    'LBL_BTN_VIEW_FIELDS' => 'Prezriet polia',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Prezrieť vzťahy',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Pridať vzťah',
    'LBL_BTN_RENAME_MODULE' => 'Zmeniť názov modulu',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Chyba: Pole už existuje',
    'ERROR_INVALID_KEY_VALUE' => "Chyba: Nesprávna hodnota kľúča Key Value: [&#39;]",
    'ERROR_NO_HISTORY' => 'Polia histórie nenájdené',
    'ERROR_MINIMUM_FIELDS' => 'Rozvrhnutie musí obsahovať aspoň jedno pole',
    'ERROR_GENERIC_TITLE' => 'Nastala chyba',
    'ERROR_REQUIRED_FIELDS' => 'Ste si istý, že chcete pokračovať? Následovné požadované polia chýbaju v rozvrhnutí:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Názov balíku:',
    'LBL_MODULE_NAME' => 'Názov modulu',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_KEY' => 'Kľúč',
    'LBL_ADD_README' => 'Prečítaj ma',
    'LBL_LAST_MODIFIED' => 'Naposledy zmenené',
    'LBL_NEW_MODULE' => 'Nový modul',
    'LBL_LABEL' => 'Štítok',
    'LBL_LABEL_TITLE' => 'Štítok',
    'LBL_WIDTH' => 'Šírka',
    'LBL_PACKAGE' => 'Balík:',
    'LBL_TYPE' => 'Typ:',
    'LBL_NAV_TAB' => 'Navigačná záložka',
    'LBL_CREATE' => 'Vytvoriť',
    'LBL_LIST' => 'Zoznam',
    'LBL_VIEW' => 'Zobraziť',
    'LBL_HISTORY' => 'Zobraziť Históriu',
    'LBL_RESTORE_DEFAULT' => 'Obnoviť Predvolené',
    'LBL_ACTIVITIES' => 'Aktivity',
    'LBL_NEW' => 'Nový',
    'LBL_TYPE_BASIC' => 'základní',
    'LBL_TYPE_COMPANY' => 'klient',
    'LBL_TYPE_PERSON' => 'osoba',
    'LBL_TYPE_ISSUE' => 'chyba',
    'LBL_TYPE_SALE' => 'predaj',
    'LBL_TYPE_FILE' => 'súbor',
    'LBL_RSUB' => 'Toto je subpanel, ktorý sa bude zobrazovať vo vašom module',
    'LBL_MSUB' => 'Toto je subpanel, ktorý váš modul poskytuje prepojenému modulu na zobrazenie',
    'LBL_MB_IMPORTABLE' => 'Import',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] bol vymazaný',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export prispôsobení',
    'LBL_EC_NAME' => 'Názov balíku:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Popis:',
    'LBL_EC_CHECKERROR' => 'Prosím, vyberte modul',
    'LBL_EC_CUSTOMFIELD' => 'upravené pole(polia)',
    'LBL_EC_CUSTOMLAYOUT' => 'upravené rozloženia',
    'LBL_EC_NOCUSTOM' => 'Žiadne moduly neboli prispôsobené',
    'LBL_EC_EMPTYCUSTOM' => 'nemá žiadne prispôsobenia.',
    'LBL_EC_EXPORTBTN' => 'Exportovať',
    'LBL_MODULE_DEPLOYED' => 'Modul bol nasadený.',
    'LBL_UNDEFINED' => 'nedefinovaný',
    'LBL_EC_VIEWS' => 'vlastné zobrazenie',
    'LBL_EC_SUITEFEEDS' => 'vlastný Feed(s)',
    'LBL_EC_DASHLETS' => 'vlastný widget',
    'LBL_EC_CSS' => 'vlastné css',
    'LBL_EC_TPLS' => 'vlastné tpls',
    'LBL_EC_IMAGES' => 'vlastné obrázky',
    'LBL_EC_JS' => 'vlastné js',
    'LBL_EC_QTIP' => 'vlastné qtip',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Získavanie dát zlyhalo',
    'LBL_AJAX_LOADING' => 'Načítavanie...',
    'LBL_AJAX_DELETING' => 'Vymazávanie...',
    'LBL_AJAX_BUILDPROGRESS' => 'Stavba v progrese...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Rozmiestňovanie v progrese...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Výsledok',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operácia bola úspešne vykonaná',
    'LBL_AJAX_LOADING_TITLE' => 'Prebieha...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Čakajte prosím, nahrávam...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Ste si istý, že chcete odobrať tento balík? Budú natrvalo vymazané všetky súbory spojené s týmto balíkom.',
    'LBL_JS_REMOVE_MODULE' => 'Ste si istý, že chcete odobrať tento modul? Budú natrvalo vymazané všetky súbory spojené s týmto modulom.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Nejaké prispôsobenia, ktoré ste vyrobili pomocou Štúdia bude prepísané, keď tento modul bude znovu nasadený.Ste si istý, že chcete tento proces?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Nasadenie balíka',
    'LBL_JS_VALIDATE_NAME' => 'Meno - musí byť alfanumerické, začína písmenom a neobsahuje medzery.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Názov balíka už existuje',
    'LBL_JS_VALIDATE_KEY' => 'Kľúč - musí byť alfanumerický, začína písmenom a neobsahuje medzery.',
    'LBL_JS_VALIDATE_LABEL' => 'Prosím zadajte názov, ktorý bude použitý ako meno zobrazenia pre tento modul',
    'LBL_JS_VALIDATE_TYPE' => 'Zo zoznamu hore prosím vyberte typ modulu, ktorý si prajete postavit.',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Štítok - vložte prosím názov, ktorý bude zobrazený nad pomocným panelom',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Odstránením tohto vlastného poľa vymaže aj vlastné pole a všetky údaje týkajúce sa vlastného poľa v databáze. Toto pole sa už nebude objavovať v žadnom module. Ak je toto pole zapojené do vzorcana vypočítanie hodnôt polí, tento vzorec nebude daľej pracovať. Toto pole už nebude dostupné k použitiu v Hláseniach; táto zmena sa prejaví po odhlásení a spätnom prihlásení do aplikácie. Je potrebné aktualizovať všetky hlásenia obsahujúce toto pole k ich funkčnosti. Prajete si pokračovať?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Ste si istý, že chcete vymazať tento vzťah?',
    'LBL_CONFIRM_DONT_SAVE' => 'Od posledného uloženia boli vykonané zmeny, prajete si ich uložiť?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Uložiť zmeny?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Dáta môžu byť nenávratne zkomolené, ste si istý, že chcete pokračovať?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Zvoľte správny typ dát, založenýna type dát, ktoré budu vkladané do poľa.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Vynulovať',
    'LBL_RESET_MODULE' => 'Vynulovať Modul',
    'LBL_REMOVE_CUSTOM' => 'Odstrániť úpravy',
    'LBL_CLEAR_RELATIONSHIPS' => 'Vyčistiť vzťahy',
    'LBL_RESET_LABELS' => 'Vynulovať Štítky',
    'LBL_RESET_LAYOUTS' => 'Vynulovať rozzvrhnutia',
    'LBL_REMOVE_FIELDS' => 'Odstrániť užívateľské polia',
    'LBL_CLEAR_EXTENSIONS' => 'Vyčistiť rozšírenia',
    'LBL_HISTORY_TIMESTAMP' => 'Časová značka',
    'LBL_HISTORY_TITLE' => 'História',

    'fieldTypes' => array(
        'varchar' => 'textové pole',
        'int' => 'integrlálny',
        'float' => 'plavák',
        'bool' => 'zaškrkávacie pole',
        'enum' => 'rolovacie',
        'dynamicenum' => 'Dynamické rozbalovacie menu',
        'multienum' => 'viacvýberový',
        'date' => 'Dátum',
        'phone' => 'Telefón',
        'currency' => 'Mena:',
        'html' => 'HTML',
        'radioenum' => 'Rádio',
        'relate' => 'Vzťahujú',
        'address' => 'Adresa',
        'text' => 'TextovéPole',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Dátum a čas',
        'decimal' => 'Desatinný',
        'image' => 'Obrázok',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Často používané označenia",
        "all" => "Všetko",
    ),

    'parent' => 'Uvedenie Flexu',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Označili ste túto položku k odstráneniu z dropdown listu. Ktorékoľvek dropdown polia používajúce tento zoznam s touto položkou ako hodnotu, nebudú viac zobrazovať túto hodnotu a túto nebude viac možné označiť v dropdown poliach. &ste si istý, že chcete pokračovať?",

    'LBL_ALL_MODULES' => 'Všetky moduly',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
