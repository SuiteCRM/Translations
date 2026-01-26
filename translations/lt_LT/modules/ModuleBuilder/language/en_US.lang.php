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
    'LBL_LOADING' => 'Įkeliama' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Slėpti Parinktis' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ištrinti' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Nurodykite <b>Pavadinimą</b> paketui.  Pavadinimas turi būti su skaitmenimis ir raidėmis, ir be tarpų. (Pavyzdžiui: HR_Management)<br/><br/> Jūs galitete nurodyti <b>Autorių</b> ir <b>Aprašymą</b> informacijos paketui. <br/><br/>Paspauskite <b>Išsaugoti</b> , kad sukurtumėte paketą.',
            'modify' => 'Savybės ir galimi veiksmai  <b>Paketui</b> yra čia.<br><br>Jūs galite redaguoti  <b>Pavadinimą</b>, <b>autorių</b> ir <b>Aprašymą</b> paketo, taip pat galite pritaikyti ir kitus modulius.<br><br>Paspauskite <b>Naujas modulis</b> sukurti naują modulį paketui.<br><br>Jei paketas turi nors vieną modulį, jūs galite <b>Paskelbti</b> ir <b>Išdėstyti</b>  paketą, taip pat kaip  <b>Eksportavimas</b> pritaikymai padaryti  pakete.',
            'name' => 'Tai yra <b>Pavadinimas</b> esamo paketo. <br/><br/>Pavadinimą, kurį įvedate turi būti su raidėmis ir skaičiais, pradėkite su raidėmis ir be tarpų. (Pavyzdys: HR_Management)',
            'author' => 'Tai yra autorius <b>Autorius</b> ,kuris rodomas instaliavimo metu, kuris sukūrė paketą.<br><br>Autorius gali būti individualus asmuo arba įmonė.',
            'description' => 'Tai yra <b>Aprašymas</b> paketo, kuris rodomas instaliavimo metu.',
            'publishbtn' => 'Paspauskite <b>Paskelbti</b> išsaugoti visus įvestus duomenis ir sukurti .zip failą, kuris yra nestabili paketo versija.<br><br>Naudoti <b>Modulio užkrovėją</b> išsiųsti .zip failąe ir instaliuoti paketą.',
            'deploybtn' => 'Paspauskite <b>Išdėstyti</b> išsaugoti visus įvestus duomenis ir instaliuoti paketą, įskaitant visus modulius, šiuo atveju.',
            'duplicatebtn' => 'Paspauskite <b>Dublikuoti</b> kopijuoti paketo turinį į naują paketą ir parodyti naują paketą. <br/><br/>Naujam paketui pavadinimas bus sugeneruotas automatiškai. Galite pervadinti paketą įvedant naują <b>Pavadinimą</b> ir paspaudžiant <b>Saugoti</b>.',
            'exportbtn' => 'Paspauskite <b>Eksportuoti</b> , kad sukurtumėte .zip failą talpinantį padarytus pritaikymus paketui.<br><br> Sugeneruotas failas nėra nestabili paketo versija. <br><br>Naudoti <b>Modulio užkrovėją</b> imoprtavimui .zip failo, įskaitant pritaikymus, randami Module Builder.',
            'deletebtn' => 'Paspauskite <b>Ištrinti</b> tam, kad ištrintumėte šį paketą ir visus failus susijusius su juo.',
            'savebtn' => 'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus įvestus duomenis susijusius su šiuo paketu.',
            'existing_module' => 'Paspauskite  <b>Modulis</b> ikoną redaguoti savybes, laukus, ryšius ir išdėstymus asocijuotus su moduliu.',
            'new_module' => 'Paspauskite <b>Naujas modulis</b> sukurti naują modulį šiam paketui.',
            'key' => 'Šis 5 raidžių, skaitinis raidinis <b>raktas</b> bus naudojamas kaip prefiksas visiems katalogams, klasių vardams ir duomenų bazių lentelėms ir visiems moduliams esantiems tame pakete.<br><br> Raktas naudojamas lentelių unikalumui pasiekti.',
            'readme' => 'Paspauskite pridėti <b>Pervadinti</b> tekstą šiam paketui.<br><br> Informacijos failas bus galimas instaliavimo metu.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Tikrinama  <b>Importuojamumas</b>, pažymėjimas įgalins importą šiam moduliui.<br><br>Nuoroda importavimo vedlio atsiras gretų kelių modulio panelėje. Importavimo vedlys palengvina duomenų importavimą iš išorinių šaltinių į pasirinktą modulį.',
            'team_security' => 'Tikrinama  <b>Komandų saugumas</b> pažymėjimas įgalins komandų saugumą šiam moduliui.  <br/><br/>Jeigu komandų saugumas yra įjungtas, tai komandų pasirinkimo laukas atsiras viduje įrašų',
            'reportable' => 'Pažymint šį lauką, šiam moduliui bus leista vykdyti ataskaitas.',
            'assignable' => 'Pažymint šį lauką, įrašui bus leista būti priskirtam pasirinktam vartotojui šiame modulyje.',
            'has_tab' => 'Pažymint <b>Navigacijos kortelę</b> pateiks navigacijos kortelę moduliui.',
            'acl' => 'Pažymint šį lauką įgalins priėjimo kontrolę šiam moduliui, įskaitant laukų lygio saugumą.',
            'studio' => 'Pažymint šį lauką, administratoriams bus leista pritaikyti modulį naudojantis Studio.',
            'audit' => 'Pažymint šį lauką, bus leista daryti auditą šiam moduliui. Pakeitimai atitinkamiems laukams bus įrašyti, todėl administratorius galės pasižiūrėti pakeitimų istoriją.',
            'viewfieldsbtn' => 'Paspauskite <b>Rodyti laukus</b> tam, kad pamatytumėte laukus asocijuotus su moduliu ir galėtumėte sukurti ir redaguoti pasirinktus laukus.',
            'viewrelsbtn' => 'Paspauskite <b>Rodyti ryšius</b>, kad pamatytumėte ryšius asocijuotus su šiuo moduliu ir galėtumėte sukurti naujus ryšius.',
            'viewlayoutsbtn' => 'Paspauskite ant Žiūrėti išdėstymus, jei norite koreguoti laukų išdėstymus modulio formose.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'Tai yra <b>Etiketė</b>, kuri pasirodys modulio navigacijos kortelėje.',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the module.',
            'type_basic' => '<b>Bazinis</b> šablono tipas teikia bazinius laukus tokius kaip vardas, atsakingas, komanda, sukūrimo data ir aprašymo laukais.',
            'type_company' => '<b>Įmonės</b> šablono tipas teikia organizacijos specifinius laukus tokius kaip Įmonė, Vardas, Pramonė ir Sąskaitų siuntimo adresas.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniam Kliento moduliui.',
            'type_issue' => '<b>Svarstomų klausimų</b> šablono tipas teikia atvejų ir klaidų specifikavimo laukus tokius kaip Skaičiai, Statusas, Svarbumas ir Aprašymas.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniams aptarnavimų ir klaidų moduliams.',
            'type_person' => '<b>Asmuens</b> šablono tipas pateikia individualius-specifinius laukus tokius kaip Sveikinimas, Pavadinimas, Vardas, Adresas ir Telefono numeris.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinius Kontaktų ir Potencialių kontaktų modulius.',
            'type_sale' => 'Pardavimo šablonas turi su pardavimais susijusius laukus, kaip: pritraukimo metodas, pardavimo etapas, tikimybė. Panaudokite šį šabloną sukurti naujus modulius panašius į standartinį pardavimų modulį.',
            'type_file' => '<b>Failo</b> šablonas pateikia dokumentų specifinius laukus tokius kaip Vardas, Dokumento tipas, Paskelbti duomenis.<br><br>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinį Dokumentų modulį.',

        ),
        'dropdowns' => array(
            'default' => 'All of the <b>Dropdowns</b> for the application are listed here.<br><br>The dropdowns can be used for dropdown fields in any module.<br><br>To make changes to an existing dropdown, click on the dropdown name.<br><br>Click <b>Add Dropdown</b> to create a new dropdown.',
            'editdropdown' => 'Iššokančius sąrašus  gali būti naudojami standartiniams arba pasirinktiems iššokančio sąrašo laukams bet kokiame modulyje.<br><br>Pateikite <b>pavadinimą</b> iššokančiam sąrašui.<br><br>Jeigu bet koks kalbos paketas yra instaliuotas programoje, jūs galite pasirinkite <b>Kalba</b> ir ją naudoti sąrašų elementams.<br><br><b>Elemento pavadinimo</b> lauke, nurodykite pavadinimą pasirinkimui iššokančiame sąraše. Šis pavadinimas nepasirodys iššokančiame sąraše, kuris yra nematomas vartotojams.<br><br>  <b>Vaizdavimo etiketės</b> lauke, nurodykite etiketės pavadinimą, kuris bus matomas vartotojams.<br><br>Nurodžius elemento pavadinimą ir rodymo etiketę, paspauskite <b>Pridėti</b>, kad pridėtumėte elementą į iššokantį sąrašą. <br><br>Įrašyti elementus į sąrašą, tempkite ir meskite juos į reikiamą vietą.<br><br>Norint redaguoti rodomas etiketes, paspauskite  <b>Redaguoti ikoną</b>, ir įveskite nauję etiketę. Norint ištrynti elementą iš iššokančio sąrašo, paspauskite  <b>Ištrinti ikoną</b>.<br><br>Panaikinti pakeitimus padarytus rodomai etiketei, paspauskite <b>Anuliuoti</b>.  Atstatyti pakeitimus, paspauskite <b>Atstatyti</b>.<br><br>Paspauskite <b>Išsaugoti</b> išsaugoti iššokantį sąrašą.',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
            'historyDefault' => 'Spauskite <b>Atstatyti numatytą</b> grąžinti į pradinį išdėstymą.',
            'Hidden' => '<b>Paslėpti</b> laukai neatsirado subpanelyje.',
            'Default' => '<b>Numatyti</b> laukai atsirado subpanelyje.',

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
            'defaultdetailview' => '<b>Išdėstymo</b> plotas talpina laukus, kurie yra jau rodomi viduje <b>DetailView</b>.<br/><br/> <b>Įrankių dėžė</b> talpina <b>Šiukšliadėžę</b>, laukų ir išdėstymo elementus, kurie gali būti pridėti prie išdėstymo.<br><br>Padarykite pakeitimus tempiant ir metant elementus tarp <b>Įrankių dėžės</b> ir  <b>Išdėstymo</b>. <br><br>Norint išmesti lauką, tempkite ir meskite jį į<b>Šiukšliadėžę</b>. Laukas bus prieinamas įrankių dėžėje.',
            'defaultquickcreate' => '<b>Išdėstymo</b> plotas talpina laukus, kurie jau rodomi <b>Greito sukūrimo</b> formoje.<br><br>Greitos sukūrimo forma yra subpanelyje, kada sukūrimo mygtukas paspaustas.<br/><br/> <b>Įrankų dėžė</b> talpina <b>Šiukšliadėžę</b>, laukų ir išdėstymo elementus, kurie gali būti pridėti prie išdėstymo.<br><br>Padarykite pakeitimus išdėstymui tempiant ir metant elementus ir laukus tarp  <b>Įrankiu dėžės</b> ir  <b>Išdėstymo</b>.<br><br>Norint išmesti laukus iš išdėstymo, tempkite lauką į <b>Šiukšliadėžę</b>. Laukas bus prieinamas įrankių dėžėje, norint įdėti į išdėstymą.',
            //this default will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            'saveBtn' => 'Paspauskite <b>Išsaugoti</b> norint išsaugoti pakeitimus, kuriuos atlikote išdėstymui nuo paskutinio išsaugojimo.<br><br>Pakeitimai nebus rodomi modulyje, kol neišsaugojote išdėstymo pakeitimų.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Paspauskite <b>Išsaugoti ir išdėstyti</b> tam kad, išsaugotumėte visus pakeitimus, kuriuos padarėte išdėstymui nuo paskutinio išsaugojimo karto ir padaryti pakeitimus aktyvius modulyje.<br><br>Išdėstymai bus nedelsiant parodyti modulyje.',
            'toolbox' => '<b>Įrankių dėžė</b> talpina  <b>Šiukšliadėžę</b>, papildomi išdėstymo elementai ir rinkinys kintamųjų laukų skirtų pridėti prie išdėstymo.<br/><br/>Išdėstymo elementai ir laukai įrankių dėžėje gali būti nutraukti ir numesti iš išdėstymo į įrankių dėžę.<br><br>Išdėstymo elementai yra <b>panelės</b> ir <b>eilutės</b>. Pridedant naują eilutę arba panelį į išdėstymą, bus pateikta papildoma vieta išdėstyme laukams.<br/><br/>Tempkite ir meskite bet kokį lauką į įrankių dėžę arba išdėstymą ant užimto lauko pozicijos, norint ištrinti du laukus.<br/><br/> <b>Užpildomas</b> laukas sukuria tuščią erdvę išdėstyme, kur jis yra įdėtas.',
            'panels' => '<b>Išdėstymo</b> plotas pateikia vaizdą kaip išdėstymas atrodys modulyje, kai bus atlikti pakeitimai išdėstymui.<br/><br/>Jūs galite pertvarkyti laukus ir panelius tempiant ir metant į pasirinktą vietą.<br/><br/>Išmeskite elementus tempiant ir metant į <b>Šiukšliadėžę</b> įrankių dėžėje, arba pridėkite naujus elementus ir laukus tempiant ir metant iš <b>Įrankių dėžės</b>s į išdėstymo pasirinktą vietą.',
            'delete' => 'Norint išmesti elementus iš išdėstymo, juos reikia tempti ir mesti čia',
            'property' => 'Redaguoti rodomą etiketę šiam laukui. <br/><b>Kortelė Užsakymas</b> kontroliuoja kokia tavrka kortelių raktai persijungia tarp laukų.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => '<b>Laukai</b>, kurie yra galimi moduliui, yra pateikti čia pagal lauko pavadinimą<br><br>Norint pritaikyti etiketę šablono lauko, paspauskite  lauko pavadinimą.<br><br>Sukurti naują lauką, paspauskite <b>Pridėti lauką</b>. Etiketės savybės gali būti redaguojamos paspaudus lauko pavadinimą.<br><br>Po to kai modulis yra padėtas, naujų laukų kūrimui Module Builder yra laikomi kaip standartiniai laukai išdėstyti modulyje Studio.',
            'addField' => 'Pasirinkite a <b>Duomenų tipą</b> naujiems laukams. Tipą pasirenkate pagal tai, kokie simboliai bus vedami į lauką. Pavyzdžiui, tik sveikieji skaičiai gali būti įvesti jeigu lauko tipas skaičius.<br><br> Nurodykite a <b>pavadinimą</b> laukui.  Vardas turi būt iiš raidžių ir skaičių ir be tarpų. Pabraukimai leidžiami.<br><br> <b>vaizdavimo etiketė</b> yra etiketė, kuri matoma modulio išdėstyme.  <b>Sistemos etiketė</b>  naudojama nurodyti lauką kodo rėžime.<br><br> Priklausomai nuo duomenų tipo parinkto laukui, kai kurios arba visos savybės gali būti nustatytos laukui:<br><br> <b>pagalbos tekstas</b> pasirodo laikinai kol vartotojas užeina virš lauko.<br><br> <b>Komentarų tekstas</b> matomas tik per Studio &/arba Module Builder, ir gali būti naudojamas aprašyti lauką administratoriams.<br><br> <b>Numatyta reikšmė</b> pasirodys lauke.  Vartotojai gali įvesti naują reikšmę į lauką arba naudoti numatytas reikšmes.<br><br> Pasirinkite  <b>Mass Atnaujinti</b> checkbox in order to be able to Naudoti  Mass Atnaujinti feature for  laukas.<br><br>The <b>Max Size</b> reikšmė determines  maximum number of characters that galite be entered in  laukas.<br><br> Pasirinkite  <b>Reikiamą lauką</b> pažymėkite ar laukas yra privalomas. Reikšmė turi būti nurodyta laukui tam, kad būtų galimaišsaugoti įrašą.<br><br> Pasirinkite  <b>atsakomą</b> pasirinkimą tam, kad leistų naudoti lauką filtrams ir rodyti duomenims ataskaitose.<br><br> Pasirinkite  <b>Auditas</b> pasirinkimą tam, kad būtų galima sekti laukų pasikeitimus esančius Change Log faile.<br><br> Papildomos savybės gali būti nustatytos atitinkamiems duomenų tipams.',
            'editField' => '<b>Rodoma etiketė</b> SuiteCRM lauko gali būti pritaikyta. Kitos lauko savybės gali būti ir nepritaikytos.<br><br>Paspauskite <b>Kopijuoti</b>, norint sukurti naują lauką su tomis pačiomis savybėmis.',
            'mbeditField' => '<b>Rodyti etiketę</b> lauko šablono, kuris gali būti pritaikytas. Kito lauko savybės gali būti nepritaikytos.<br><br>Paspauskite <b>kopijuoti</b>, norint sukurti naują lauką su tokiomis pačiomis savybėmis.<br><br>Norint išmesti lauko šabloną, kad jis nepasirodytų modulyje, išmeskite lauką iš <b>Išdėstymų</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>. You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Paspauskite <b>Exportuoti</b> norint sukurti .zip failą paketui talpinančiam pritaikymus.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'Tai yra <b>Aprašymas</b> paketo, kuris rodomas instaliavimo metu.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Vykdytojo įrankių</b> vieta. <br/><br/>Naudoti įrankius modulių ir laukų valdymui ir sukūrimui.',
            'studioBtn' => 'Naudoti <b>Studija</b> modulių pritaikymui.',
            'mbBtn' => 'Naudoti <b>Modulio kūrėjas</b> naujų modulių sukūrimui.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Naudoti <b>Iššokantį meniu redaguotoją</b> norint pridėti ir redaguoti bendrus iššokančius meniu jų laukams.',
            'appBtn' => 'Programos rėžimas yra tai, kur jūs galite pritaikyti įvairias programų savybes, tokias kaip TPS ataskaitas rodomas pradžios puslapyje',
            'backBtn' => 'Grįžti į ankstesnį žingsnį.',
            'studioHelp' => 'Naudoti <b>Studiją</b> kad nuordyti kokia ir kaip informacija vaizduojama moduliuose.',
            'moduleBtn' => 'Paspauskite redaguoti modulį.',
            'moduleHelp' => 'Komponentai, kuriuos galite pritaikyti, yra čia.<br><br>Paspauskite ikoną, norint pasirinkti komponentą redagavimui.',
            'fieldsBtn' => 'Sukurti ir pritaikyti <b>Laukus</b> tam, kad talpintų informaciją moduluje.',
            'labelsBtn' => 'Redaguoti  <b>Etiketes</b>, kurios vaizduoja laukus ir kitus pavadinimus modulyje.',
            'relationshipsBtn' => 'Pridėti naujus arba rodyti esamus modulio <b>Ryšius</b>.',
            'layoutsBtn' => 'Pritaikyti modulių <b>Išdėstymą</b>.  Išdėstymai skiriasi moduliuose.<br><br>Jūs galite nuspręsti kaip laukai turi atrodyti ir organizuoti kiekviename išdėstyme.',
            'subpanelBtn' => 'Nuspręskite, kurie laukai bus rodomi modulio <b>Subpanelyje</b>.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Modulių <b>Išdėstymus</b>, kurie gali būti pritaikyti yra čia.<br><br>Išdėstymai rodo laukus ir jų duomenis.<br><br>Paspauskite ikoną, norint redaguoti išdėstymą.',
            'subpanelHelp' => '<b>Subpaneliai</b> modulyje gali būti pritaikyti čia.<br><br>Paspauskite ikoną, norint redaguoti modulį.',
            'newPackage' => 'Norėdami sukurti naują paketą paspauskite <b>Naujas paketas</b>.',
            'exportBtn' => 'Paspauskite <b>Eksportuoti pritaikymus</b>, norint sukurti ir parsisiųsti paketą su aptarnavimais sukurtą su Studio specifiniams moduliams.',
            'mbHelp' => 'Norint sukurti paketus su pasirinktais moduliais ir standartiniais arba pasirinktais objektais, paspauskite <b>Module Builder</b>.',
            'viewBtnEditView' => 'Pritaikyti modulį(-ius)  <b>EditView</b> išdėstymui.<br><br>EditView yra forma talpinanti įvedimo laukus, skirtus vartotojo duomenų įvedimui.',
            'viewBtnDetailView' => 'Pritaikyti modulį(-ius) <b>DetailView</b> išdėstymui.<br><br>DetailView atvaizduoja vartoto įvestus duomenis.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Pritaikyti modulį(-ius) <b>ListView</b> išdėstymui.<br><br>Paieškos rezultatai matomi ListView.',
            'searchBtn' => 'Pritaikyti modulį(-ius) <b>ieškoti</b> Išdėstymų.<br><br>Nuspręskite, kokie laukai gali būti naudojami įrašų filtravimui, kuriuos matome ListView faile.',
            'viewBtnQuickCreate' => 'Pritaikyti modulį(-ius) <b>QuickCreate</b> išdėstymui.<br><br>QuickCreate forma matomas subpanelyje ir in  el. pašto modulyje.',
            'addLayoutHelp' => "Norėdami sukurti pasirinktinį maketą iš Saugumo Grupės pasirinkite reikiamą iš saugos grupės ir iš kurio norite kopijuoti kaip atskaitos taško išdėstymą.",
            'searchHelp' => 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'The <b>Popup</b> išdėstymo modifikavimas.<br>',
            'PopupListViewBtn' => '<b>Popup ListView</b> rodo įrašus pagal Popup search views.',
            'PopupSearchViewBtn' => '<b>Popup Search</b> atvaizduoja įrašus Popup listview.',
            'BasicSearchBtn' => 'Customize the <b>Quick Filter</b> form that appears in the Quick Filter tab in the Search area for the module.',
            'AdvancedSearchBtn' => 'Customize the <b>Advanced Filter</b> form that appears in the Advanced Search tab in the Search area for the module.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Visi <b>Ryšiai</b>, kurie egzistuoja tarp vieno modulio ir kito yra čia.<br><br>Ryšio <b>Pavadinimas</b> yra sugeneruotas sistemos ryšiui.<br><br><b>Pagrindinis modulis</b> yra tas, kuris turi ryšius. Pavyzdžiui, visos Kliento modulio ryšių savybės yra sudėtos modulio Klientas duomenų bazės lentelėse.<br><br>Paspauskite eilutę ryšių lentelėje norint pažiūrėti savybes susietas su ryšiu.<br><br>Norėdami sukurti naują ryšį paspauskite <b>Pridėti ryšį</b>.<br><br>Ryšiai gali būti sukurti tarp bet kokių modulių.',
            'relationshipHelp' => '<b>Ryšiai</b> gali būti sukurti tarp pagrindinio modulio ir bet kokio kito modulio.<br><br> Ryšiai vizualiai išreikšti naudojant subpanelius ir susijusius laukus modulio įrašuose.<br><br> Jeigu ryšys yra tarp dviejų modulių, bet koks naujas sukurtas ryšys tarp jų nebus vizualiai išreikštas.<br><br> Pasirinkite vieną iš šių ryšių<b>Types</b>moduliui:<br><br> <b>Vienas-su-Vienu</b> - Abu modulių\' įrašai talpins susijusius laukus.<br><br> <b>Vienas-su-daug</b> - Pirminio modulio įrašas talpins subpanelę ir  susieto modulio įrašas talpins susijusį lauką.<br><br> <b>Daug-su-Daug</b> - Abiejų modulių įrašai rodys subpaneles.<br><br> Pasirinkite  <b>Sisijusį modulį</b> ryšio sukūrimui. <br><br> Jei ryšio tipas įtraukia subpanelius, pasirinkite  subpanelio rodymą atitinkamiems moduliams.<br><br> Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte ryšį. Kai  ryšys sukurtas, jis negali būti redaguojamas arba ištrintas.',
            'convertLeadHelp' => 'Čia Jūs galite pridėti modulius konvertavimo išdėstymo ekranui ir modifikuoti esamus.<br />		Modulius galite sukeisti vietomis tempdami eilutę.<br/><br/><br />		<b>Modulis:</b> Modulio pavadinimas.<br/><br/><br />		<b>Privaloma:</b> Privalomi moduliai turi būti sukurti arba pasirinkti, jei norite atlikti potencialaus kontakto kovertacijas.<br/><br/><br />		<b>Duomenų kopijavimas:</b> Jei pažymėta, laukai iš potencialaus kontakto bus nukopijuoti į laukus su tuo pačiu pavadinimu naujai sukurtuose įrašuose.<br/><br/><br />		<b>Pasirinkimo leidimas:</b> Modulis su susietu lauku Kontaktuose gali būti pasirinktas, o ne sukurtas.<br/><br/><br />		<b>Redaguoti:</b> Modifikuoti šį modulį konvertavimo išdėstymui.<br/><br/><br />		<b>Ištrinti:</b> Šalinti šį modulį iš konvertavimo išdėstymo.<br/><br/>',


            'editDropDownBtn' => 'Redaguoti bendrą iššokantį sąrašą',
            'addDropDownBtn' => 'Pridėti naują bendrą sąrašą',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'ieškoti pagalbos kaip pridėti ryšį..',
            'addRelationship' => '<b>Ryšiai</b> gali būti sukurti tarp pagrindinio modulio ir bet kokio kito modulio.<br><br> Ryšiai vizualiai išreikšti naudojant subpanelius ir susijusius laukus modulio įrašuose.Pasirinkite vieną iš šių ryšių<b>Types</b>moduliui:<br><br> <b>Vienas-su-Vienu</b> - Abu modulių\' įrašai talpins susijusius laukus.<br><br> <b>Vienas-su-daug</b> - Pirminio modulio įrašas talpins subpanelę ir  susieto modulio įrašas talpins susijusį lauką.<br><br> <b>Daug-su-Daug</b> - Abiejų modulių įrašai rodys subpaneles.<br><br> Pasirinkite  <b>Sisijusį modulį</b> ryšio sukūrimui. <br><br> Jei ryšio tipas įtraukia subpanelius, pasirinkite  subpanelio rodymą atitinkamiems moduliams.<br><br> Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte ryšį.',
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
            'nopackages' => 'Norint pradėti naują projektą, jūs turite paspausti  <b>Naujas paketas</b> tam, kad sukurtumėte naują paketą vartotojo moduliams talpinti. <br/><br/>Kiekvienas paketas gali talpinti vieną arba kelis modulius.<br/><br/>Pavyzdžiui, jūs galite norėti sukurti paketą talpinantį vieną  pritaikomą modulį, kuris yra susijęs su standartiniu Kliento moduliu. Arbajūs galite norėti sukurti paketą talpinantį kelis modulius, kurie veikia kartu kaip projektas ir vienas su kitu susiję.',
            'somepackages' => '<b>Paketas</b> veikia kaip konteineris pritaikytiems moduliams, esantiems projekto dalimi. Paketas gali talpinti vieną ar daugiau pritaikytų <b>modulių</b>, kurie gali būti susiję vienas su kitu.<br/><br/>Sukūrus paketą vartotojo projektui, jūs galite kūrti modulius paketui, arba galite grįžti į Module Builder kitu laiku, kad pabaigtumėte projektą.<br><br>Kada projektas yra baigtas, jūs galite <b>išdėstyti</b> peketus instaliavimui pritaikytiems moduliams.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance. <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Naudoti  <b>Kūrėjo įrankius</b> sukūrimui ir valdymui standartinių ir pritaikytus modulius ir laukus. <br/><br/>Valdyti modulius programoje, paspauskite <b>Studio</b>. <br/><br/>TPritaikytų modulių sukūrimui, paspauskite <b>Module Builder</b>.',
            'studioWelcome' => 'Visi jau instaliuoti moduliai, įskaitant standartinį ir modulio-užkrovėjo objektus, pritaikoma naudojant Studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further. Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Čia galite redaguoti esančius laukus. Jūs galite išmesti bet kokį esamą lauką arba pridėti galimus laukus, esančius kairėje panelėje.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address. Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number. Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description. Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>. You can further customize the new module.',
            'viewfields' => 'Laukai jūsų modulyje gali būti pritaikyti pagal poreikius.<br/><br/>Jūs galite netrinti standartinių laukų, o  išmesti juos iš atitinkamų išdėstymų puslapių. <br/><br/>Jūs galite redaguoti etiketes standartiniams laukams. Kitas savybės standartinių laukų neredaguojamos. Tačiau, jūs galite greitai sukurti naujus laukus, kurie turi panašias savybes paspaudžiant lauko pavadinamą ir tada paspausti <b>Klonuoti</b> į  <b>Savybes</b> iš.  Įveskite bet kokias naujas savybes ir paspauskite <b>Išsaugoti</b>.<br/><br/>Jeigu jūs pritaikote naują modulį, tai kai modulis bus instaliuotas, tai ne visos laukų savybės bus redaguojamos.  Nustatyti savybes standartiniams laukams ir pritaikyti laukus prieš paskelbiant ir instaliuojant paketą talpinantį pritaikytus modulius.',
            'viewrelationships' => 'Jūs galite sukurti daug-su-daug ryšį tarp esamų modulių irkitų modulių pakete ir/arba tarp instaliuotų modulių programoje.<br><br> Norint sukurti vienas-su-daug ir vienas-su-vienu  ryšius, sukurkite  <b>Susiejimą</b> ir <b>Lankstų susiejimą</b> laukus moduliams.',
            'viewlayouts' => 'You can control what fields are available for capturing data within the <b>Edit View</b>. You can also control what data displays within the <b>Detail View</b>. The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
            'existingModule' => 'Sukūrus ir pritaikius modulį, Jūs galite sukurti papildomus modulius arba grįžti į paketą <b>Paskelbti</b> arba <b>Išdėstyti</b>  paketą.<br><br>Sukurti papildomus modulius, paspauskite <b>Dubliuoti</b>, norint sukurti modulį su tokiomis pačiomis savybėmis, kaip esamas modulis, eikite atgal į paketą ir paspauskite <b>Naujas modulis</b>.<br><br> Jeigu jūs esate pasiruošęs <b>Paskelbti</b> arba <b>Išdėstyti</b>  paketą talpinantį šį modulį, eikite atgal į paketą tam, akd atliktumėte šaias funkcijas. Jūs galite paskelbti ir išdėstyti paketus talpinančius mažiausiai vieną modulį.',
            'labels' => 'Etiketės standartinių laukų taip pat kaip ir pritaikyti laukai gali būti pakeisti. Pakeičiant lauko etiketę nepaveiks duomenų sukauptų laukuose.',
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
            'dropdownaddbtn' => 'Paspaudžiant šį mygtuką pridės naują elementą į iššokantį meniu.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance. <br><br>Provide a <b>Package Name</b>. You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations. The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Paspauskite <b>Exportuoti</b> norint sukurti .zip failą paketui talpinančiam pritaikymus.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Vykdytojo įrankių</b> vieta. <br/><br/>Naudoti įrankius modulių ir laukų valdymui ir sukūrimui.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Naudoti <b>Modulio kūrėjas</b> naujų modulių sukūrimui.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Grįžti į ankstesnį žingsnį.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Paspauskite redaguoti modulį.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/><br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'newPackage' => 'Norėdami sukurti naują paketą paspauskite <b>Naujas paketas</b>.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Iššokančio sąrašo redaktorius',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modulio kūrėjas',
    'LBL_STUDIO' => 'Studija',
    'LBL_DROPDOWNEDITOR' => 'Iššokančio sąrašo redaktorius',
    'LBL_DEVELOPER_TOOLS' => 'Kūrėjo įrankiai',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Paketų sąrašas',
    'LBL_HOME' => 'Pradžia',
    'LBL_NONE' => '-Joks-',
    'LBL_DEPLOYE_COMPLETE' => 'Išdėstymas baigtas',
    'LBL_DEPLOY_FAILED' => 'Klaida išdėstymo metu, Jūsų paketo nepavyko sėkmingai įdiegti.',
    'LBL_AVAILABLE_SUBPANELS' => 'Matomi subpaneliai',
    'LBL_ADVANCED' => 'Išplėstinis',
    'LBL_ADVANCED_SEARCH' => 'Sudėtingas filtras',
    'LBL_BASIC' => 'Numatytasis',
    'LBL_BASIC_SEARCH' => 'Greitas filtras',
    'LBL_CURRENT_LAYOUT' => 'Išdėstymas',
    'LBL_CURRENCY' => 'Valiuta',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_POPUP' => 'Popup View',
    'LBL_POPUPLISTVIEW' => 'Popup ListView',
    'LBL_POPUPSEARCH' => 'Popup paieška',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DETAILVIEW' => 'Detali forma',
    'LBL_DROP_HERE' => '[Mesti čia]',
    'LBL_EDIT' => 'Redaguoti',
    'LBL_EDIT_LAYOUT' => 'Redaguoti išdėstymą',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'Redagavimo forma',
    'LBL_FILLER' => '(Užpildas)',
    'LBL_FIELDS' => 'Laukai',
    'LBL_FAILED_TO_SAVE' => 'Nepavyko išsaugoti',
    'LBL_FAILED_PUBLISHED' => 'Nepavyko paskelbti',
    'LBL_HOMEPAGE_PREFIX' => 'Mano',
    'LBL_LAYOUT_PREVIEW' => 'Išdėstymo peržiūra',
    'LBL_LAYOUTS' => 'Išdėstymai',
    'LBL_LISTVIEW' => 'Rodyti sąrašą',
    'LBL_MODULES' => 'Moduliai:',
    'LBL_MODULE_TITLE' => 'Studija',
    'LBL_NEW_PACKAGE' => 'Naujas paketas',
    'LBL_NEW_PANEL' => 'Naujas panelis',
    'LBL_NEW_ROW' => 'Naujos eilutės',
    'LBL_PACKAGE_DELETED' => 'Paketas ištrintas',
    'LBL_PUBLISHING' => 'Skelbiama ...',
    'LBL_PUBLISHED' => 'Paskelbtas',
    'LBL_SELECT_FILE' => 'Pasirinkti failą',
    'LBL_SUBPANELS' => 'Subpaneliai',
    'LBL_SUBPANEL' => 'Subpanelis',
    'LBL_SUBPANEL_TITLE' => 'Pavadinimas:',
    'LBL_SEARCH_FORMS' => 'Filtras',
    'LBL_SEARCH' => 'Paieška',
    'LBL_SEARCH_BUTTON' => 'Paieška',
    'LBL_FILTER' => 'Filtras',
    'LBL_TOOLBOX' => 'Įrankių dėžė',
    'LBL_QUICKCREATE' => 'Greitas sukūrimas',
    'LBL_EDIT_DROPDOWNS' => 'Redaguoti bendrus iššokančius sąrašus',
    'LBL_ADD_DROPDOWN' => 'Pridėti naują bendrą iššokantį sąrašą',
    'LBL_BLANK' => '-Tuščia-',
    'LBL_TAB_ORDER' => 'Kortelė užsakymas',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Vardas',
    'LBL_DROPDOWN_LANGUAGE' => 'Kalba',
    'LBL_DROPDOWN_ITEMS' => 'Sąrašo elementai',
    'LBL_DROPDOWN_ITEM_NAME' => 'Elemento vardas',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Rodyti etiketę',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sinchronizuoti į peržiūros rėžimą',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Pasirinkite šį pasirinkimą norėdami perkelti (sinchronizuoti) redagavimo lango išdėstymą į detalaus lango išdėstymą.<br> Išdėstymas bus pakeistas paspaudus Išsaugoti arba Išsaugoti ir išdėstyti mygtukus. Po išsaugojimo detalaus lango rėžime pakeitimų atlikti nebus galima.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Detalaus lango išdėstymas susinchronizuotas su atitinkamu redagavimo lango išdėstymu.<br><br />Laukai ir jų išdėstymas detaliame lange atitinka redagavimo lango išdėstymą.<br><br />Pakeitimų detaliojo lango išdėstyme šiame puslapyje atlikti negalima. Padaryti pakeitimus arba atšaukti sinchronizavimą galima redagavimo lango išdėstymo puslapyje.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopijuoti iš redagavimo rėžimo',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Elemento vardas ir Rodyti etiketę laukeliai turi būti užpildyti. Norėdami įterpti tuščią pasirinkimą paspauskite Pridėti palikdami tuščius abu laukelius.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modulis',
    'LBL_LHS_MODULE' => 'Pirminis modulis',
    'LBL_CUSTOM_RELATIONSHIPS' => '* ryšys sukurtas Studijoje',
    'LBL_RELATIONSHIPS' => 'Ryšiai',
    'LBL_RELATIONSHIP_EDIT' => 'Redaguoti ryšius',
    'LBL_REL_NAME' => 'Vardas',
    'LBL_REL_LABEL' => 'Etiketė',
    'LBL_REL_TYPE' => 'Tipas:',
    'LBL_RHS_MODULE' => 'Susijęs modulis',
    'LBL_NO_RELS' => 'Nėra ryšių',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Pasirenkamos sąlygos',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Stulpeliai',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Reikšmė',
    'LBL_SUBPANEL_FROM' => 'Subpanelis iš',
    'LBL_RELATIONSHIP_ONLY' => 'Jokių matomų matomų elementų bus nesukurta šiam ryšiui, nes čia yra matomi ryšiai tarp šių dviejų modulių.',
    'LBL_ONETOONE' => 'Vienas-su-vienu',
    'LBL_ONETOMANY' => 'Vienas-su-daug',
    'LBL_MANYTOONE' => 'Daug-su-vienu',
    'LBL_MANYTOMANY' => 'Daug-su-daug',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Pasirinkite modulį redagavimui.',
    'LBL_QUESTION_LAYOUT' => 'Pasirinkite išdėstymo redagavimą.',
    'LBL_QUESTION_SUBPANEL' => 'Pasirinkite subpanelį redagavimui.',
    'LBL_QUESTION_SEARCH' => 'Pasirinkite  paiešką išdėstymui redaguoti.',
    'LBL_QUESTION_MODULE' => 'Pasirinkite modulio komponentą redagavimui.',
    'LBL_QUESTION_PACKAGE' => 'Pasirinkite paketą redagavimui, arba sukurti naują paketą.',
    'LBL_QUESTION_EDITOR' => 'Pasirinkite įrankį.',
    'LBL_QUESTION_DASHLET' => 'Pasirinkite panelį išdėstymui redaguoti.',
    'LBL_QUESTION_POPUP' => 'Pasirinkite iššokantį langą redagavimui.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Vardas',
    'LBL_LABELS' => 'Etiketė',
    'LBL_MASS_UPDATE' => 'Masinis atnaujinimas',
    'LBL_DEFAULT_VALUE' => 'Numatyta reikšmė',
    'LBL_REQUIRED' => 'Reikiamas',
    'LBL_DATA_TYPE' => 'Tipas:',
    'LBL_HCUSTOM' => 'NESTANDARTINIS',
    'LBL_HDEFAULT' => 'Numatytas',
    'LBL_LANGUAGE' => 'Kalba:',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Redaguoti etiketes',
    'LBL_SECTION_PACKAGES' => 'Paketai',
    'LBL_SECTION_PACKAGE' => 'Paketas',
    'LBL_SECTION_MODULES' => 'Moduliai:',
    'LBL_SECTION_DROPDOWNS' => 'Iššokantis sąrašas',
    'LBL_SECTION_PROPERTIES' => 'Savybės',
    'LBL_SECTION_DROPDOWNED' => 'Redaguoti iššokantį sąrašą',
    'LBL_SECTION_HELP' => 'Pagalba',
    'LBL_SECTION_MAIN' => 'Pagrindinis',
    'LBL_SECTION_FIELDEDITOR' => 'Redaguoti laukus',
    'LBL_SECTION_DEPLOY' => 'Išdėstyti',
    'LBL_SECTION_MODULE' => 'Modulis',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Numatytasis',
    'LBL_HIDDEN' => 'Paslėptas',
    'LBL_AVAILABLE' => 'Galimas',
    'LBL_LISTVIEW_DESCRIPTION' => 'Parodyti trys stulpeliai. <b>Numatytas</b> stulpelis talpina laukus, kurie rodomi sąraše pagal Numatytas.  <b>Papildoma</b> stulpelis talpina laukus, kuriuos vartotojas gali naudotipritaikyto žiūrėjimo kūrimui. <b>Galimi</b> stulpelis rodo laukus, kurie yra prieinami jums, kaip administratoriui, norint pridėti juos prie Numatytas arba galimi stulpelių tam, kad jais galėtų naudotis vartotojai.',
    'LBL_LISTVIEW_EDIT' => 'Sąrašo formos redaguotas',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Peržiūra',
    'LBL_MB_RESTORE' => 'Atstatyti',
    'LBL_MB_DELETE' => 'Ištrinti',
    'LBL_MB_DEFAULT_LAYOUT' => 'Numtatytas išdėstymas',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Įdėti',
    'LBL_BTN_SAVE' => 'Saugoti',
    'LBL_BTN_SAVE_CHANGES' => 'Išsaugoti pakeitimus',
    'LBL_BTN_DONT_SAVE' => 'Išmesti pakeitimus',
    'LBL_BTN_CANCEL' => 'Atšaukti',
    'LBL_BTN_CLOSE' => 'Užbaigti',
    'LBL_BTN_SAVEPUBLISH' => 'Saugoti ir išdėstyti',
    'LBL_BTN_CLONE' => 'Klonas',
    'LBL_BTN_ADDROWS' => 'Pridėti eilutes',
    'LBL_BTN_ADDFIELD' => 'Pridėti lauką',
    'LBL_BTN_ADDDROPDOWN' => 'Pridėti iššokantį sąrašą',
    'LBL_BTN_SORT_ASCENDING' => 'Rikiuoti didėjimo tvarka',
    'LBL_BTN_SORT_DESCENDING' => 'Rikiuoti mažėjimo tvarka',
    'LBL_BTN_EDLABELS' => 'Redaguoti etiketes',
    'LBL_BTN_UNDO' => 'Atstatyti',
    'LBL_BTN_REDO' => 'Sutaisyti',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Pridėti nestandartinį lauką',
    'LBL_BTN_EXPORT' => 'Eksportavimo pritaikymai',
    'LBL_BTN_DUPLICATE' => 'Dubliuoti',
    'LBL_BTN_PUBLISH' => 'Paskelbti',
    'LBL_BTN_DEPLOY' => 'Išdėstyti',
    'LBL_BTN_EXP' => 'Eksportas',
    'LBL_BTN_DELETE' => 'Ištrinti',
    'LBL_BTN_VIEW_LAYOUTS' => 'Rodyti išdėstymą',
    'LBL_BTN_VIEW_FIELDS' => 'Rodyti laukus',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Rodyti ryšius',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Pridėti ryšius',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Klaida: Laukas jau egzistuoja',
    'ERROR_INVALID_KEY_VALUE' => "Klaida: Neteisinga rakto reikšmė: [']",
    'ERROR_NO_HISTORY' => 'Nerastas istorijos failas',
    'ERROR_MINIMUM_FIELDS' => 'Išdėstymas turi turėti bent vieną lauką',
    'ERROR_GENERIC_TITLE' => 'Klaida',
    'ERROR_REQUIRED_FIELDS' => 'Ar tikrai norite tęsti? Privalomi laukai, kurie yra praleisti:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pakutės pavadinimas:',
    'LBL_MODULE_NAME' => 'Modulio pavadinimas:',
    'LBL_AUTHOR' => 'Autorius:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_KEY' => 'Raktas:',
    'LBL_ADD_README' => 'Perskaityk',
    'LBL_LAST_MODIFIED' => 'Paskutini kartą redaguota:',
    'LBL_NEW_MODULE' => 'Naujas Modulis',
    'LBL_LABEL' => 'Etiketė:',
    'LBL_LABEL_TITLE' => 'Etiketė',
    'LBL_WIDTH' => 'Plotis',
    'LBL_PACKAGE' => 'Paketas:',
    'LBL_TYPE' => 'Tipas:',
    'LBL_NAV_TAB' => 'Navigacijos kortelė',
    'LBL_CREATE' => 'Sukurti',
    'LBL_LIST' => 'Sąrašas',
    'LBL_VIEW' => 'Peržiūrėti',
    'LBL_HISTORY' => 'Peržiūros istorija',
    'LBL_RESTORE_DEFAULT' => 'Atstatyti numatytą',
    'LBL_ACTIVITIES' => 'Įvykiai',
    'LBL_NEW' => 'Naujas',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'Tai subpanelis, kuris bus rodomas jūsų modulyje',
    'LBL_MSUB' => 'Tai yra subpanelis, kurį vartotojo modulis pateikia rodymui susijusiam moduliui.',
    'LBL_MB_IMPORTABLE' => 'Importuojama',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] ištrintas',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Eksportavimo pritaikymai',
    'LBL_EC_NAME' => 'Pakutės pavadinimas:',
    'LBL_EC_AUTHOR' => 'Autorius:',
    'LBL_EC_DESCRIPTION' => 'Aprašymas:',
    'LBL_EC_CHECKERROR' => 'Prašome pasirinkite modulį.',
    'LBL_EC_CUSTOMFIELD' => 'nestandartiniai laukai',
    'LBL_EC_CUSTOMLAYOUT' => 'nestandartiniai išdėstymai',
    'LBL_EC_NOCUSTOM' => 'Jokie moduliai nebuvo adaptuoti.',
    'LBL_EC_EMPTYCUSTOM' => 'be pakeitimų.',
    'LBL_EC_EXPORTBTN' => 'Eksportas',
    'LBL_MODULE_DEPLOYED' => 'Moduliai buvo išdėstyti.',
    'LBL_UNDEFINED' => 'neapibrėžtas',
    'LBL_EC_VIEWS' => 'customized view(s)',
    'LBL_EC_SUITEFEEDS' => 'customized Feed(s)',
    'LBL_EC_DASHLETS' => 'customized Dashlet(s)',
    'LBL_EC_CSS' => 'customized css(s)',
    'LBL_EC_TPLS' => 'customized tpls(s)',
    'LBL_EC_IMAGES' => 'customized image(s)',
    'LBL_EC_JS' => 'customized js(s)',
    'LBL_EC_QTIP' => 'customized qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Nepavyko išgauti duomenų',
    'LBL_AJAX_LOADING' => 'Kraunasi...',
    'LBL_AJAX_DELETING' => 'Ištrinama...',
    'LBL_AJAX_BUILDPROGRESS' => 'Tvarkoma...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Išsidėstymas vykdomas...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Rezultatas',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Ar tikrai norite išimiti šį paketą? Tai visam laikui ištrins failus, susijusius su šiuo paketu.',
    'LBL_JS_REMOVE_MODULE' => 'Ar tikrai norite išimti šį modulį? Tai visam laikui ištrins failus, susijusius su šiuo moduliu.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Visi pakeitimai kuriuos padarėte Studijoje bus užrašyti ant viršaus, kai šis modulis bus pakartotinai užkrautas. Ar norite tęsti?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Išdėstomas paketas',
    'LBL_JS_VALIDATE_NAME' => 'Pavadinimas turi būti iš raidžių ir skaičių be tarpų ir turi prasidėti iš raidžių',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Paketo pavadinimas jau egzistuoja',
    'LBL_JS_VALIDATE_KEY' => 'Raktas - turi būti raidinis skaitmeninis.',
    'LBL_JS_VALIDATE_LABEL' => 'Prašome įvesti etiketę, kuri bus naudojama pavadinimo vaizdavimui šiam moduliui',
    'LBL_JS_VALIDATE_TYPE' => 'Prašome pasirinkti modulio tipą, kurį jūs norite sukurti iš sąrašo',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiketė - prašome pridėti etiketę, kuri bus matoma subpanelyje',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Ištrinant pritaikytus laukus, ištrins ir juose esančius duomenis. Jums vis dar reikia išmesti laukus iš išdėstymų, į kuriuos jis buvo įdėtas',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Ar tikrai norite ištrinti šį ryšį?',
    'LBL_CONFIRM_DONT_SAVE' => 'pakeitimai buvo atlikti nuo paskutinio išsaugojimo, ar norėtumėte išsaugoti?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Išsaugoti pakeitimus?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Duomenys gali būti ištrinti negrįžtamai, ar norite tęsti?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Pasirinkite  atitinkamą duomenų tipą, paremtą duomenimis, kurie bus įvedami į lauką.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Atstatyti',
    'LBL_RESET_MODULE' => 'Atstatyti modulį',
    'LBL_REMOVE_CUSTOM' => 'Išmesti pakeitimus',
    'LBL_CLEAR_RELATIONSHIPS' => 'Išvalyti ryšius',
    'LBL_RESET_LABELS' => 'Atstatyti pavadinimus',
    'LBL_RESET_LAYOUTS' => 'Atstatyti išdėstymą"',
    'LBL_REMOVE_FIELDS' => 'Išmesti pridėtus laukus',
    'LBL_CLEAR_EXTENSIONS' => 'Išvalyti išplėtimus',
    'LBL_HISTORY_TIMESTAMP' => 'Data ir laikas',
    'LBL_HISTORY_TITLE' => 'istorija',

    'fieldTypes' => array(
        'varchar' => 'Tekstas',
        'int' => 'Skaičius',
        'float' => 'Float',
        'bool' => 'Žymimas langelis',
        'enum' => 'Iššokantis sąrašas',
        'dynamicenum' => 'Dinaminis išskleidžiamas sarašas',
        'multienum' => 'MultiSelect',
        'date' => 'Data',
        'phone' => 'Telefonas',
        'currency' => 'Valiuta',
        'html' => 'HTML',
        'radioenum' => 'Radijas',
        'relate' => 'Susijęs',
        'address' => 'Adresas',
        'text' => 'TextArea',
        'url' => 'Tinklapio adresas',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Data ir laikas',
        'decimal' => 'Decimal',
        'image' => 'Paveikslėlis',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Anksčiau naudoti pavadinimai",
        "all" => "Visi",
    ),

    'parent' => 'Susietas Lanksčiai',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Jūs pasirinkote išmesti šį elementą iš iššokančio sąrašo. Atlikus ištrynimą šis elementas nebus matomas jokiuose iššokančiuose sąrašuose. Ar norite tęsti?",

    'LBL_ALL_MODULES' => 'Visi moduliai',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
