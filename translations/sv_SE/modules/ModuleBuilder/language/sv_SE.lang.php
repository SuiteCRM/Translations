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
    'LBL_LOADING' => 'Laddar' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Dölj alternativ' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ta bort' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Ange ett <b>namn</b> för paketet. Namnet måste vara alfanumeriskt och får inte innehålla blanksteg. (Exempel: HR_Management)<br/><br/> Du kan ange information om <b>författare</b> och <b>beskrivning</b> för paketet. <br/><br/>Klicka på <b>Spara</b> för att skapa paketet.',
            'modify' => 'Egenskaperna och möjliga åtgärderna för <b>paketet</b> visas här.<br><br>Du kan ändra paketets <b>namn</b>, <b>författare</b> och <b>beskrivning</b>, samt visa och anpassa alla moduler som ingår i paketet.<br><br>Klicka på <b>Ny modul</b> för att skapa en modul för paketet.<br><br>Om paketet innehåller minst en modul kan du <b>publicera</b> och <b>driftsätta</b> paketet, samt <b>exportera</b> anpassningarna i paketet.',
            'name' => 'Det här är <b>namnet</b> på det aktuella paketet. <br/><br/>Namnet måste vara alfanumeriskt, börja med en bokstav och får inte innehålla blanksteg. (Exempel: HR_Management)',
            'author' => 'Det här är <b>författaren</b> som visas vid installationen som namnet på den enhet som skapade paketet.<br><br>Författaren kan vara en person eller ett företag.',
            'description' => 'Detta är en <b>Beskrivning</b> på paketet som visas under installationen.',
            'publishbtn' => 'Klicka på <b>Publicera</b> för att spara alla angivna data och skapa en .zip-fil som är en installerbar version av paketet.<br><br>Använd <b>Modulläsaren</b> för att överföra .zip-filen och installera paketet.',
            'deploybtn' => 'Klicka på <b>Driftsätt</b> för att spara alla angivna data och installera paketet, inklusive alla moduler, i den aktuella instansen.',
            'duplicatebtn' => 'Klicka på <b>Duplicera</b> för att kopiera paketets innehåll till ett nytt paket och visa det nya paketet. <br/><br/>För det nya paketet skapas automatiskt ett nytt namn genom att ett nummer läggs till sist i namnet på paketet som användes för att skapa det nya. Du kan byta namn på det nya paketet genom att ange ett nytt <b>namn</b> och klicka på <b>Spara</b>.',
            'exportbtn' => 'Klicka på <b>Exportera</b> för att skapa en .zip-fil som innehåller anpassningarna i paketet.<br><br>Den skapade filen är inte en installerbar version av paketet.<br><br>Använd <b>Modulläsaren</b> för att importera .zip-filen så att paketet, inklusive anpassningarna, visas i Modulbyggaren.',
            'deletebtn' => 'Klicka på <b>Ta bort</b> för att ta bort paketet och alla filer som hör till det.',
            'savebtn' => 'Klicka på <b>Spara</b> för att spara alla angivna data som hör till paketet.',
            'existing_module' => 'Klicka på ikonen <b>Modul</b> för att redigera egenskaperna och anpassa de fält, relationer och layouter som hör till modulen.',
            'new_module' => 'Klicka på <b>Ny modul</b> för att skapa en ny modul för paketet.',
            'key' => 'Den här alfanumeriska <b>nyckeln</b> med fem tecken används som prefix för alla kataloger, klassnamn och databastabeller för alla moduler i det aktuella paketet.<br><br>Nyckeln används för att göra tabellnamnen unika.',
            'readme' => 'Klicka för att lägga till <b>README</b>-text för paketet.<br><br>README-texten blir tillgänglig vid installationen.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Ange ett <b>namn</b> för modulen. Den <b>etikett</b> du anger visas på navigeringsfliken. <br/><br/>Markera kryssrutan <b>Navigeringsflik</b> om du vill visa en navigeringsflik för modulen.<br/><br/>Välj sedan vilken typ av modul du vill skapa. <br/><br/>Välj en malltyp. Varje mall innehåller en särskild uppsättning fält samt fördefinierade layouter som kan användas som grund för modulen. <br/><br/>Klicka på <b>Spara</b> för att skapa modulen.',
            'modify' => 'Du kan ändra modulens egenskaper eller anpassa de <b>fält</b>, <b>relationer</b> och <b>layouter</b> som hör till modulen.',
            'importable' => 'Att markera kryssrutan <b>Kan importeras</b> aktiverar import för modulen.<br><br>En länk till importguiden visas i panelen Snabbkommandon i modulen. Importguiden underlättar import av data från externa källor till den anpassade modulen.',
            'team_security' => 'Att markera kryssrutan <b>Teamsäkerhet</b> aktiverar teamsäkerhet för modulen. <br/><br/>Om teamsäkerhet är aktiverad visas fältet för teamval i modulens poster.',
            'reportable' => 'Att markera den här rutan gör att rapporter kan köras för modulen.',
            'assignable' => 'Att markera den här rutan gör att en post i modulen kan tilldelas en vald användare.',
            'has_tab' => 'Att markera <b>Navigeringsflik</b> visar en navigeringsflik för modulen.',
            'acl' => 'Att markera den här rutan aktiverar åtkomstkontroller för modulen, inklusive säkerhet på fältnivå.',
            'studio' => 'Att markera den här rutan gör det möjligt för administratörer att anpassa modulen i Studio.',
            'audit' => 'Att markera den här rutan aktiverar granskning för modulen. Ändringar i vissa fält registreras så att administratörer kan granska ändringshistoriken.',
            'viewfieldsbtn' => 'Klicka på <b>Visa fält</b> för att visa fälten som hör till modulen samt skapa och redigera anpassade fält.',
            'viewrelsbtn' => 'Klicka på <b>Visa relationer</b> för att visa relationerna som hör till modulen och skapa nya relationer.',
            'viewlayoutsbtn' => 'Klicka på <b>Visa layouter</b> för att visa modulens layouter och anpassa fältens placering i layouterna.',
            'duplicatebtn' => 'Klicka på <b>Duplicera</b> för att kopiera modulens egenskaper till en ny modul och visa den nya modulen. <br/><br/>För den nya modulen genereras automatiskt ett nytt namn genom att ett nummer läggs till i slutet av namnet på modulen som används för att skapa den nya.',
            'deletebtn' => 'Klicka på <b>Ta bort</b> för att ta bort modulen.',
            'name' => 'Det här är <b>namnet</b> på den aktuella modulen.<br/><br/>Namnet måste vara alfanumeriskt, börja med en bokstav och får inte innehålla blanksteg. (Exempel: HR_Management)',
            'label' => 'Det här är den <b>etikett</b> som visas på modulens navigeringsflik.',
            'savebtn' => 'Klicka på <b>Spara</b> för att spara alla angivna uppgifter om modulen.',
            'type_basic' => 'Malltypen <b>Grundläggande</b> innehåller grundläggande fält, till exempel Namn, Tilldelad till, Team, Skapad datum och Beskrivning.',
            'type_company' => 'Malltypen <b>Företag</b> innehåller organisationsspecifika fält, till exempel Företagsnamn, Bransch och Faktureringsadress.<br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulen Konton.',
            'type_issue' => 'Malltypen <b>Ärende</b> innehåller fält för ärenden och fel, till exempel Nummer, Status, Prioritet och Beskrivning.<br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulerna Ärenden och Fel.',
            'type_person' => 'Malltypen <b>Person</b> innehåller personspecifika fält, till exempel Tilltal, Titel, Namn, Adress och Telefonnummer.<br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulerna Kontakter och Prospekt.',
            'type_sale' => 'Malltypen <b>Försäljning</b> innehåller säljspecifika fält, till exempel Prospektkälla, Fas, Belopp och Sannolikhet. <br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulen Affärsmöjligheter.',
            'type_file' => 'Mallen <b>Fil</b> innehåller dokumentspecifika fält, till exempel Filnamn, Dokumenttyp och Publiceringsdatum.<br><br>Använd den här mallen för att skapa moduler som liknar standardmodulen Dokument.',

        ),
        'dropdowns' => array(
            'default' => 'Alla <b>rullgardinslistor</b> för programmet listas här.<br><br>Rullgardinslistorna kan användas för rullgardinsfält i vilken modul som helst.<br><br>Klicka på rullgardinslistans namn för att ändra en befintlig rullgardinslista.<br><br>Klicka på <b>Lägg till rullgardinslista</b> för att skapa en ny rullgardinslista.',
            'editdropdown' => 'Rullgardinslistor kan användas för standardiserade eller anpassade rullgardinsfält i vilken modul som helst.<br><br>Ange ett <b>namn</b> för rullgardinslistan.<br><br>Om språkpaket är installerade i programmet kan du välja det <b>språk</b> som ska användas för listobjekten.<br><br>Ange ett namn för alternativet i rullgardinslistan i fältet <b>Objektnamn</b>. Namnet visas inte i den rullgardinslista som användarna ser.<br><br>Ange en etikett som visas för användarna i fältet <b>Visningsetikett</b>.<br><br>När du har angett objektnamnet och visningsetiketten klickar du på <b>Lägg till</b> för att lägga till objektet i rullgardinslistan.<br><br>Ändra ordningen på objekten genom att dra och släppa dem till önskad plats.<br><br>Klicka på <b>redigeringsikonen</b> och ange en ny etikett för att redigera ett objekts visningsetikett. Klicka på <b>borttagningsikonen</b> för att ta bort ett objekt från rullgardinslistan.<br><br>Klicka på <b>Ångra</b> för att ångra en ändring av en visningsetikett. Klicka på <b>Gör om</b> för att göra om en ångrad ändring.<br><br>Klicka på <b>Spara</b> för att spara rullgardinslistan.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Alla fält som kan visas i <b>delpanelen</b> visas här.<br><br>Kolumnen <b>Standard</b> innehåller fälten som visas i delpanelen.<br/><br/>Kolumnen <b>Dolda</b> innehåller fält som kan läggas till i kolumnen Standard.'
        ,
            'savebtn' => 'Klicka på <b>Spara och driftsätt</b> för att spara ändringarna och aktivera dem i modulen.',
            'historyBtn' => 'Klicka på <b>Visa historik</b> för att visa och återställa en tidigare sparad layout från historiken.',
            'historyDefault' => 'Klicka på <b>Återställ standard</b> för att återställa en vy till den ursprungliga layouten.',
            'Hidden' => '<b>Dolda</b> fält visas inte i delpanelen.',
            'Default' => '<b>Standard</b>-fält visas i delpanelen.',

        ),
        'listViewEditor' => array(
            'modify' => 'Alla fält som kan visas i <b>listvyn</b> visas här.<br><br>Kolumnen <b>Standard</b> innehåller fälten som visas i listvyn som standard.<br/><br/>Kolumnen <b>Tillgängliga</b> innehåller fält som en användare kan välja i sökningen för att skapa en anpassad listvy. <br/><br/>Kolumnen <b>Dolda</b> innehåller fält som kan läggas till i kolumnen Standard eller Tillgängliga.'
        ,
            'savebtn' => 'Klicka på <b>Spara och driftsätt</b> för att spara ändringarna och aktivera dem i modulen.',
            'historyBtn' => 'Klicka på <b>Visa historik</b> för att visa och återställa en tidigare sparad layout från historiken.<br><br><b>Återställ</b> i <b>Visa historik</b> återställer fältens placering i tidigare sparade layouter. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'historyDefault' => 'Klicka på <b>Återställ standard</b> för att återställa en vy till den ursprungliga layouten.<br><br><b>Återställ standard</b> återställer endast fältens placering i den ursprungliga layouten. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'Hidden' => '<b>Dolda</b> fält är för närvarande inte tillgängliga för användare att se i listvyer.',
            'Available' => '<b>Tillgängliga</b> fält visas inte som standard, men användare kan lägga till dem i listvyer.',
            'Default' => '<b>Standard</b>-fält visas i listvyer som inte har anpassats av användare.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Alla fält som kan visas i <b>listvyn</b> visas här.<br><br>Kolumnen <b>Standard</b> innehåller de fält som visas i listvyn som standard.<br/><br/>Kolumnen <b>Dolda</b> innehåller fält som kan läggas till i kolumnen Standard eller Tillgängliga.'
        ,
            'savebtn' => 'Klicka på <b>Spara och driftsätt</b> för att spara ändringarna och aktivera dem i modulen.',
            'historyBtn' => 'Klicka på <b>Visa historik</b> för att visa och återställa en tidigare sparad layout från historiken.<br><br><b>Återställ</b> i <b>Visa historik</b> återställer fältens placering i tidigare sparade layouter. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'historyDefault' => 'Klicka på <b>Återställ standard</b> för att återställa en vy till den ursprungliga layouten.<br><br><b>Återställ standard</b> återställer endast fältens placering i den ursprungliga layouten. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'Hidden' => '<b>Dolda</b> fält är för närvarande inte tillgängliga för användare att se i listvyer.',
            'Default' => '<b>Standard</b>-fält visas i listvyer som inte har anpassats av användare.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Alla fält som kan visas i formuläret <b>Filter</b> visas här.<br><br>Kolumnen <b>Standard</b> innehåller de fält som visas i sökformuläret.<br/><br/>Kolumnen <b>Dolda</b> innehåller fält som du som administratör kan lägga till i sökformuläret.'
        ,
            'savebtn' => 'När du klickar på <b>Spara och driftsätt</b> sparas alla ändringar och aktiveras.',
            'Hidden' => '<b>Dolda</b> fält visas inte i sökningen.',
            'historyBtn' => 'Klicka på <b>Visa historik</b> för att visa och återställa en tidigare sparad layout från historiken.<br><br><b>Återställ</b> i <b>Visa historik</b> återställer fältens placering i tidigare sparade layouter. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'historyDefault' => 'Klicka på <b>Återställ standard</b> för att återställa en vy till den ursprungliga layouten.<br><br><b>Återställ standard</b> återställer endast fältens placering i den ursprungliga layouten. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'Default' => '<b>Standard</b>-fält visas i sökningen.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Området <b>Layout</b> innehåller de fält som för närvarande visas i <b>detaljvyn</b>.<br/><br/><b>Verktygslådan</b> innehåller <b>papperskorgen</b> samt de fält och layoutelement som kan läggas till i layouten.<br><br>Ändra layouten genom att dra och släppa element och fält mellan <b>verktygslådan</b> och <b>layouten</b>, samt i själva layouten.<br><br>Ta bort ett fält från layouten genom att dra fältet till <b>papperskorgen</b>. Fältet blir sedan tillgängligt i verktygslådan för att läggas till i layouten.',
            'defaultquickcreate' => 'Området <b>Layout</b> innehåller de fält som för närvarande visas i formuläret <b>Snabbskapa</b>.<br><br>Formuläret Snabbskapa visas i modulens delpaneler när du klickar på knappen Skapa.<br/><br/><b>Verktygslådan</b> innehåller <b>papperskorgen</b> samt de fält och layoutelement som kan läggas till i layouten.<br><br>Ändra layouten genom att dra och släppa element och fält mellan <b>verktygslådan</b> och <b>layouten</b>, samt i själva layouten.<br><br>Ta bort ett fält från layouten genom att dra fältet till <b>papperskorgen</b>. Fältet blir sedan tillgängligt i verktygslådan för att läggas till i layouten.',
            //this default will be used for edit view
            'default' => 'Området <b>Layout</b> innehåller de fält som för närvarande visas i <b>redigeringsvyn</b>.<br/><br/><b>Verktygslådan</b> innehåller <b>papperskorgen</b> samt de fält och layoutelement som kan läggas till i layouten.<br><br>Ändra layouten genom att dra och släppa element och fält mellan <b>verktygslådan</b> och <b>layouten</b>, samt i själva layouten.<br><br>Ta bort ett fält från layouten genom att dra fältet till <b>papperskorgen</b>. Fältet blir sedan tillgängligt i verktygslådan för att läggas till i layouten.',
            'saveBtn' => 'Klicka på <b>Spara</b> för att behålla de ändringar du har gjort i layouten sedan den senast sparades.<br><br>Ändringarna visas inte i modulen förrän du driftsätter de sparade ändringarna.',
            'historyBtn' => 'Klicka på <b>Visa historik</b> för att visa och återställa en tidigare sparad layout från historiken.<br><br><b>Återställ</b> i <b>Visa historik</b> återställer fältens placering i tidigare sparade layouter. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'historyDefault' => 'Klicka på <b>Återställ standard</b> för att återställa en vy till den ursprungliga layouten.<br><br><b>Återställ standard</b> återställer endast fältens placering i den ursprungliga layouten. Om du vill ändra fältetiketter klickar du på redigeringsikonen bredvid varje fält.',
            'publishBtn' => 'Klicka på <b>Spara och driftsätt</b> för att spara alla ändringar du har gjort i layouten sedan den senast sparades och aktivera ändringarna i modulen.<br><br>Layouten visas omedelbart i modulen.',
            'toolbox' => '<b>Verktygslådan</b> innehåller <b>papperskorgen</b>, ytterligare layoutelement och de tillgängliga fält som kan läggas till i layouten.<br/><br/>Layoutelementen och fälten i verktygslådan kan dras och släppas i layouten, och element och fält kan dras från layouten till verktygslådan.<br><br>Layoutelementen är <b>paneler</b> och <b>rader</b>. När du lägger till en ny rad eller panel i layouten skapas ytterligare platser för fält.<br/><br/>Dra och släpp ett fält från verktygslådan eller layouten på en upptagen fältposition för att byta plats på de två fälten.<br/><br/>Fältet <b>Utfyllnad</b> skapar tomt utrymme i layouten där det placeras.',
            'panels' => 'Området <b>Layout</b> visar hur layouten ser ut i modulen när ändringarna har driftsatts.<br/><br/>Du kan flytta fält, rader och paneler genom att dra och släppa dem på önskad plats.<br/><br/>Ta bort element genom att dra dem till <b>papperskorgen</b> i verktygslådan, eller lägg till nya element och fält genom att dra dem från <b>verktygslådorna</b> till önskad plats i layouten.',
            'delete' => 'Dra och släpp valfritt element här för att ta bort det från layouten.',
            'property' => 'Redigera etiketten som visas för fältet. <br/><b>Tabbordning</b> styr i vilken ordning tabbtangenten växlar mellan fält.',
        ),
        'fieldsEditor' => array(
            'default' => 'De <b>fält</b> som är tillgängliga för modulen listas här efter fältnamn.<br><br>Anpassade fält som skapats för modulen visas ovanför de fält som är tillgängliga för modulen som standard.<br><br>Klicka på <b>Fältnamn</b> för att redigera ett fält.<br/><br/>Klicka på <b>Lägg till fält</b> för att skapa ett nytt fält.',
            'mbDefault' => 'De <b>fält</b> som är tillgängliga för modulen listas här efter fältnamn.<br><br>Klicka på Fältnamn för att konfigurera ett fälts egenskaper.<br><br>Klicka på <b>Lägg till fält</b> för att skapa ett nytt fält. Etiketten och övriga egenskaper för det nya fältet kan redigeras efter att fältet har skapats genom att klicka på Fältnamn.<br><br>När modulen har driftsatts betraktas de nya fält som skapats i Modulbyggaren som standardfält i den driftsatta modulen i Studio.',
            'addField' => 'Välj en <b>datatyp</b> för det nya fältet. Den typ du väljer avgör vilka tecken som kan anges i fältet. I fält med datatypen Heltal kan till exempel endast heltal anges.<br><br>Ange ett <b>namn</b> för fältet. Namnet måste vara alfanumeriskt och får inte innehålla blanksteg. Understreck är tillåtna.<br><br><b>Visningsetiketten</b> är den etikett som visas för fälten i modulens layouter. <b>Systemetiketten</b> används för att referera till fältet i koden.<br><br>Beroende på vilken datatyp som valts för fältet kan några eller alla följande egenskaper anges:<br><br><b>Hjälptext</b> visas tillfälligt när en användare håller muspekaren över fältet och kan användas för att ange vilken typ av inmatning som önskas.<br><br><b>Kommentartext</b> visas endast i Studio och/eller Modulbyggaren och kan användas för att beskriva fältet för administratörer.<br><br><b>Standardvärde</b> visas i fältet. Användare kan ange ett nytt värde i fältet eller använda standardvärdet.<br><br>Markera kryssrutan <b>Massuppdatering</b> för att kunna använda funktionen Massuppdatering för fältet.<br><br>Värdet <b>Maxstorlek</b> anger det maximala antal tecken som kan anges i fältet.<br><br>Markera kryssrutan <b>Obligatoriskt fält</b> för att göra fältet obligatoriskt. Ett värde måste anges i fältet för att du ska kunna spara en post som innehåller fältet.<br><br>Markera kryssrutan <b>Kan rapporteras</b> för att tillåta att fältet används för filter och för att visa data i rapporter.<br><br>Markera kryssrutan <b>Granskning</b> för att kunna spåra ändringar av fältet i ändringsloggen.<br><br>Välj ett alternativ i fältet <b>Kan importeras</b> för att tillåta, förbjuda eller kräva att fältet importeras i importguiden.<br><br>Välj ett alternativ i fältet <b>Sammanfoga dubbletter</b> för att aktivera eller inaktivera funktionerna Sammanfoga dubbletter och Hitta dubbletter.<br><br>Ytterligare egenskaper kan anges för vissa datatyper.',
            'editField' => 'Egenskaperna för det här fältet kan anpassas.<br><br>Klicka på <b>Klona</b> för att skapa ett nytt fält med samma egenskaper.',
            'mbeditField' => '<b>Visningsetiketten</b> för ett mallfält kan anpassas. Fältets övriga egenskaper kan inte anpassas.<br><br>Klicka på <b>Klona</b> för att skapa ett nytt fält med samma egenskaper.<br><br>Om du vill ta bort ett mallfält så att det inte visas i modulen tar du bort fältet från lämpliga <b>layouter</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportera anpassningar som gjorts i Studio genom att skapa paket som kan laddas upp till en annan SuiteCRM-instans med <b>Modulläsaren</b>.<br><br>Ange först ett <b>paketnamn</b>. Du kan även ange <b>författare</b> och <b>beskrivning</b> för paketet.<br><br>Välj de moduler som innehåller de anpassningar du vill exportera. Endast moduler med anpassningar visas för val.<br><br>Klicka sedan på <b>Exportera</b> för att skapa en ZIP-fil för paketet som innehåller anpassningarna.',
            'exportCustomBtn' => 'Klicka på <b>Exportera</b> för att skapa en .zip-fil för paketet som innehåller de anpassningar du vill exportera.',
            'name' => 'Det här är <b>namnet</b> på paketet. Namnet visas vid installationen.',
            'author' => 'Det här är den <b>författare</b> som visas vid installationen som namnet på den person eller organisation som skapade paketet. Författaren kan vara en person eller ett företag.',
            'description' => 'Det här är <b>beskrivningen</b> av paketet som visas vid installationen.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Välkommen till området <b>Utvecklarverktyg</b>. <br/><br/>Använd verktygen i området för att skapa och hantera standardmoduler, anpassade moduler och fält.',
            'studioBtn' => 'Använd <b>Studio</b> för att anpassa driftsatta moduler.',
            'mbBtn' => 'Använd <b>Modulbyggaren</b> för att skapa nya moduler.',
            'sugarPortalBtn' => 'Använd <b>SuiteCRM Portal Editor</b> för att hantera och anpassa SuiteCRM-portalen.',
            'dropDownEditorBtn' => 'Använd <b>Redigeraren för rullgardinslistor</b> för att lägga till och redigera globala rullgardinslistor för rullgardinsfält.',
            'appBtn' => 'I programläget kan du anpassa olika egenskaper i programmet, till exempel hur många TPS-rapporter som visas på startsidan.',
            'backBtn' => 'Återgå till föregående steg.',
            'studioHelp' => 'Använd <b>Studio</b> för att bestämma vilken information som visas i modulerna och hur den visas.',
            'moduleBtn' => 'Klicka för att redigera denna modul.',
            'moduleHelp' => 'De komponenter som du kan anpassa för modulen visas här.<br><br>Klicka på en ikon för att välja komponenten som ska redigeras.<br><br>Klicka på <b>Återställ modul</b> för att ta bort anpassningar och återställa ursprungsstatusen.',
            'fieldsBtn' => 'Skapa och anpassa <b>fält</b> för att lagra information i modulen.',
            'labelsBtn' => 'Redigera de <b>etiketter</b> som visas för fälten och andra rubriker i modulen.',
            'relationshipsBtn' => 'Lägg till nya eller visa befintliga <b>relationer</b> för modulen.',
            'layoutsBtn' => 'Anpassa modulens <b>layouter</b>. Layouterna är modulens olika vyer som innehåller fält.<br><br>Du kan bestämma vilka fält som visas och hur de ordnas i varje layout.',
            'subpanelBtn' => 'Bestäm vilka fält som visas i modulens <b>delpaneler</b>.',
            'portalBtn' => 'Anpassa modulens <b>layouter</b> som visas i <b>SuiteCRM-portalen</b>.',
            'layoutsHelp' => 'De <b>layouter</b> för modulen som kan anpassas visas här.<br><br>Layouterna visar fält och fältdata.<br><br>Klicka på en ikon för att välja layouten som ska redigeras.',
            'subpanelHelp' => 'De <b>delpaneler</b> i modulen som kan anpassas visas här.<br><br>Klicka på en ikon för att välja modulen som ska redigeras.',
            'newPackage' => 'Klicka på <b>Nytt paket</b> för att skapa ett nytt paket.',
            'exportBtn' => 'Klicka på <b>Exportera anpassningar</b> för att skapa och hämta ett paket som innehåller anpassningar som gjorts i Studio för specifika moduler.',
            'mbHelp' => 'Använd <b>Modulbyggaren</b> för att skapa paket med anpassade moduler baserade på standardobjekt eller anpassade objekt.',
            'viewBtnEditView' => 'Anpassa modulens layout för <b>redigeringsvyn</b>.<br><br>Redigeringsvyn är formuläret med inmatningsfält för data som användaren anger.',
            'viewBtnDetailView' => 'Anpassa modulens layout för <b>detaljvyn</b>.<br><br>Detaljvyn visar fältdata som användaren har angett.',
            'viewBtnDashlet' => 'Anpassa modulens <b>SuiteCRM-dashlet</b>, inklusive dashletens listvy och sökning.<br><br>SuiteCRM-dashleten kan läggas till på sidor i modulen Hem.',
            'viewBtnListView' => 'Anpassa modulens layout för <b>listvyn</b>.<br><br>Sökresultaten visas i listvyn.',
            'searchBtn' => 'Anpassa modulens <b>söklayouter</b>.<br><br>Bestäm vilka fält som kan användas för att filtrera poster som visas i listvyn.',
            'viewBtnQuickCreate' => 'Anpassa modulens layout för <b>Snabbskapa</b>.<br><br>Formuläret Snabbskapa visas i delpaneler och i modulen E-post.',
            'addLayoutHelp' => "Om du vill skapa en anpassad layout för en säkerhetsgrupp väljer du lämplig säkerhetsgrupp och den layout som ska användas som utgångspunkt.",
            'searchHelp' => 'De <b>sökformulär</b> som kan anpassas visas här.<br><br>Sökformulär innehåller fält för att filtrera poster.<br><br>Klicka på en ikon för att välja den söklayout som ska redigeras.',
            'dashletHelp' => 'De <b>SuiteCRM-dashletlayouter</b> som kan anpassas visas här.<br><br>SuiteCRM-dashleten kan läggas till på sidor i modulen Hem.',
            'DashletListViewBtn' => '<b>Listvyn för SuiteCRM-dashleten</b> visar poster baserat på dashletens sökfilter.',
            'DashletSearchViewBtn' => '<b>Sökningen för SuiteCRM-dashleten</b> filtrerar poster för dashletens listvy.',
            'popupHelp' => 'De <b>popup-layouter</b> som kan anpassas visas här.<br>',
            'PopupListViewBtn' => '<b>Popup-listvyn</b> visar poster baserat på popup-sökvyerna.',
            'PopupSearchViewBtn' => '<b>Popup-sökningen</b> visar poster för popup-listvyn.',
            'BasicSearchBtn' => 'Anpassa formuläret <b>Snabbfilter</b> som visas på fliken Snabbfilter i modulens sökområde.',
            'AdvancedSearchBtn' => 'Anpassa formuläret <b>Avancerat filter</b> som visas på fliken Avancerad sökning i modulens sökområde.',
            'portalHelp' => 'Hantera och anpassa <b>SuiteCRM-portalen</b>.',
            'SPUploadCSS' => 'Ladda upp en <b>stilmall</b> för SuiteCRM-portalen.',
            'SPSync' => '<b>Synkronisera</b> anpassningar till SuiteCRM-portalinstansen.',
            'Layouts' => 'Anpassa <b>layouterna</b> för SuiteCRM-portalens moduler.',
            'portalLayoutHelp' => 'Modulerna i SuiteCRM-portalen visas i det här området.<br><br>Välj en modul för att redigera <b>layouterna</b>.',
            'relationshipsHelp' => 'Alla <b>relationer</b> mellan modulen och andra driftsatta moduler visas här.<br><br>Relationens <b>namn</b> är det systemgenererade namnet på relationen.<br><br><b>Primär modul</b> är den modul som äger relationerna. Alla egenskaper för relationer där modulen Konton är den primära modulen lagras till exempel i Kontons databastabeller.<br><br><b>Typ</b> är den typ av relation som finns mellan den primära modulen och den <b>relaterade modulen</b>.<br><br>Klicka på en kolumnrubrik för att sortera efter kolumnen.<br><br>Klicka på en rad i relationstabellen för att visa egenskaperna för relationen.<br><br>Klicka på <b>Lägg till relation</b> för att skapa en ny relation.<br><br>Relationer kan skapas mellan vilka två driftsatta moduler som helst.',
            'relationshipHelp' => '<b>Relationer</b> kan skapas mellan modulen och en annan driftsatt modul.<br><br>Relationer visas visuellt genom delpaneler och relationsfält i modulens poster.<br><br>Välj en av följande <b>relationstyper</b> för modulen:<br><br><b>En till en</b> – Båda modulernas poster innehåller relationsfält.<br><br><b>En till många</b> – Den primära modulens post innehåller en delpanel och den relaterade modulens post innehåller ett relationsfält.<br><br><b>Många till många</b> – Båda modulernas poster visar delpaneler.<br><br>Välj den <b>relaterade modulen</b> för relationen. <br><br>Om relationstypen innefattar delpaneler väljer du delpanelsvyn för lämpliga moduler.<br><br>Klicka på <b>Spara</b> för att skapa relationen.',
            'convertLeadHelp' => 'Här kan du lägga till moduler på skärmen för konverteringslayouten och ändra layouterna för befintliga moduler.<br/>
		Du kan ändra modulernas ordning genom att dra deras rader i tabellen.<br/><br/>
		<b>Modul:</b> Modulens namn.<br/><br/>
		<b>Obligatorisk:</b> Obligatoriska moduler måste skapas eller väljas innan prospektet kan konverteras.<br/><br/>
		<b>Kopiera data:</b> Om alternativet är markerat kopieras fält från prospektet till fält med samma namn i de nya posterna.<br/><br/>
		<b>Tillåt val:</b> Moduler med ett relationsfält i Kontakter kan väljas i stället för att skapas under konverteringen av prospektet.<br/><br/>
		<b>Redigera:</b> Ändra konverteringslayouten för modulen.<br/><br/>
		<b>Ta bort:</b> Ta bort modulen från konverteringslayouten.<br/><br/>',


            'editDropDownBtn' => 'Redigera en global rullgardinslista',
            'addDropDownBtn' => 'Lägg till en ny global rullgardinslista.',
        ),
        'fieldsHelp' => array(
            'default' => 'Modulens <b>fält</b> listas här efter fältnamn.<br><br>Modulmallen innehåller en förutbestämd uppsättning fält.<br><br>Klicka på <b>Lägg till fält</b> för att skapa ett nytt fält.<br><br>Klicka på <b>Fältnamn</b> för att redigera ett fält.<br/><br/>När modulen har driftsatts betraktas de nya fält som skapats i Modulbyggaren, tillsammans med mallfälten, som standardfält i Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'De <b>relationer</b> som har skapats mellan modulen och andra moduler visas här.<br><br>Relationens <b>namn</b> är det systemgenererade namnet på relationen.<br><br><b>Primär modul</b> är den modul som äger relationerna. Relationsegenskaperna lagras i databastabellerna som tillhör den primära modulen.<br><br><b>Typ</b> är den typ av relation som finns mellan den primära modulen och den <b>relaterade modulen</b>.<br><br>Klicka på en kolumnrubrik för att sortera efter kolumnen.<br><br>Klicka på en rad i relationstabellen för att visa och redigera egenskaperna för relationen.<br><br>Klicka på <b>Lägg till relation</b> för att skapa en ny relation.',
            'addrelbtn' => 'Håll muspekaren över hjälpen för att lägga till en relation …',
            'addRelationship' => '<b>Relationer</b> kan skapas mellan modulen och en annan anpassad modul eller en driftsatt modul.<br><br>Relationer visas visuellt genom delpaneler och relationsfält i modulens poster.<br><br>Välj en av följande <b>relationstyper</b> för modulen:<br><br><b>En till en</b> – Båda modulernas poster innehåller relationsfält.<br><br><b>En till många</b> – Den primära modulens post innehåller en delpanel och den relaterade modulens post innehåller ett relationsfält.<br><br><b>Många till många</b> – Båda modulernas poster visar delpaneler.<br><br>Välj den <b>relaterade modulen</b> för relationen. <br><br>Om relationstypen innefattar delpaneler väljer du delpanelsvyn för lämpliga moduler.<br><br>Klicka på <b>Spara</b> för att skapa relationen.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Etiketterna</b> för fälten och andra rubriker i modulen kan ändras.<br><br>Redigera etiketten genom att klicka i fältet, ange en ny etikett och klicka på <b>Spara</b>.<br><br>Om språkpaket är installerade i programmet kan du välja vilket <b>språk</b> som ska användas för etiketterna.',
            'saveBtn' => 'Klicka på <b>Spara</b> för att spara alla ändringar.',
            'publishBtn' => 'Klicka på <b>Spara och driftsätt</b> för att spara alla ändringar och aktivera dem.',
        ),
        'portalSync' => array(
            'default' => 'Ange <b>SuiteCRM Portal-URL:en</b> för den portalinstans som ska uppdateras och klicka på <b>Gå</b>.<br><br>Ange sedan ett giltigt SuiteCRM-användarnamn och lösenord och klicka på <b>Starta synkronisering</b>.<br><br>Anpassningarna av <b>layouterna</b> i SuiteCRM-portalen, tillsammans med <b>stilmallen</b> om en sådan har laddats upp, överförs till den angivna portalinstansen.',
        ),
        'portalStyle' => array(
            'default' => 'Du kan anpassa SuiteCRM-portalens utseende med en stilmall.<br><br>Välj en <b>stilmall</b> att ladda upp.<br><br>Stilmallen tillämpas i SuiteCRM-portalen nästa gång en synkronisering genomförs.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Klicka på <b>Nytt paket</b> för att skapa ett nytt paket som rymmer dina anpassade moduler när du vill påbörja ett projekt. <br/><br/>Varje paket kan innehålla en eller flera moduler.<br/><br/>Du kan till exempel skapa ett paket med en anpassad modul som är relaterad till standardmodulen Konton. Du kan också skapa ett paket med flera nya moduler som samverkar i ett projekt och är relaterade till varandra och till andra moduler som redan finns i programmet.',
            'somepackages' => 'Ett <b>paket</b> fungerar som en behållare för anpassade moduler som alla ingår i samma projekt. Paketet kan innehålla en eller flera anpassade <b>moduler</b> som kan relateras till varandra eller till andra moduler i programmet.<br/><br/>När du har skapat ett paket för projektet kan du skapa moduler för paketet direkt eller återvända till Modulbyggaren senare för att slutföra projektet.<br><br>När projektet är klart kan du <b>driftsätta</b> paketet för att installera de anpassade modulerna i programmet.',
            'afterSave' => 'Det nya paketet bör innehålla minst en modul. Du kan skapa en eller flera anpassade moduler för paketet.<br/><br/>Klicka på <b>Ny modul</b> för att skapa en anpassad modul för paketet.<br/><br/>När du har skapat minst en modul kan du publicera eller driftsätta paketet så att det blir tillgängligt för din instans och/eller andra användares instanser.<br/><br/>Klicka på <b>Driftsätt</b> för att driftsätta paketet direkt i din SuiteCRM-instans.<br><br>Klicka på <b>Publicera</b> för att spara paketet som en ZIP-fil. När ZIP-filen har sparats i systemet använder du <b>Modulläsaren</b> för att ladda upp och installera paketet i din SuiteCRM-instans. <br/><br/>Du kan distribuera filen till andra användare så att de kan ladda upp och installera den i sina egna SuiteCRM-instanser.',
            'create' => 'Ett <b>paket</b> fungerar som en behållare för anpassade moduler som alla ingår i samma projekt. Paketet kan innehålla en eller flera anpassade <b>moduler</b> som kan relateras till varandra eller till andra moduler i programmet.<br/><br/>När du har skapat ett paket för projektet kan du skapa moduler för paketet direkt eller återvända till Modulbyggaren senare för att slutföra projektet.',
        ),
        'main' => array(
            'welcome' => 'Använd <b>Utvecklarverktyg</b> för att skapa och hantera standardmoduler, anpassade moduler och fält. <br/><br/>Klicka på <b>Studio</b> för att hantera moduler i programmet. <br/><br/>Klicka på <b>Modulbyggaren</b> för att skapa anpassade moduler.',
            'studioWelcome' => 'Alla moduler som är installerade för närvarande, inklusive standardobjekt och objekt som lästs in som moduler, kan anpassas i Studio.'
        ),
        'module' => array(
            'somemodules' => "Eftersom det aktuella paketet innehåller minst en modul kan du <b>driftsätta</b> modulerna i paketet i din SuiteCRM-instans eller <b>publicera</b> paketet för installation i den aktuella SuiteCRM-instansen eller i en annan instans med <b>Modulläsaren</b>.<br/><br/>Klicka på <b>Driftsätt</b> för att installera paketet direkt i din SuiteCRM-instans.<br><br>Klicka på <b>Publicera</b> för att skapa en ZIP-fil för paketet, som kan läsas in och installeras i den aktuella SuiteCRM-instansen och andra instanser med <b>Modulläsaren</b>.<br/><br/>Du kan bygga modulerna i det här paketet stegvis och publicera eller driftsätta när du är redo. <br/><br/>Efter att du har publicerat eller driftsatt ett paket kan du ändra paketegenskaperna och anpassa modulerna ytterligare. Publicera eller driftsätt sedan paketet igen för att tillämpa ändringarna.",
            'editView' => 'Här kan du redigera befintliga fält. Du kan ta bort befintliga fält eller lägga till tillgängliga fält i den vänstra panelen.',
            'create' => 'När du väljer vilken <b>typ</b> av modul du vill skapa bör du tänka på vilka fälttyper du vill ha i modulen. <br/><br/>Varje modulmall innehåller en uppsättning fält som hör till den modultyp som beskrivs av rubriken.<br/><br/><b>Grundläggande</b> – Innehåller grundläggande fält som förekommer i standardmoduler, till exempel Namn, Tilldelad till, Team, Skapad datum och Beskrivning.<br/><br/><b>Företag</b> – Innehåller organisationsspecifika fält, till exempel Företagsnamn, Bransch och Faktureringsadress. Använd den här mallen för att skapa moduler som liknar standardmodulen Konton.<br/><br/><b>Person</b> – Innehåller personspecifika fält, till exempel Tilltal, Titel, Namn, Adress och Telefonnummer. Använd den här mallen för att skapa moduler som liknar standardmodulerna Kontakter och Prospekt.<br/><br/><b>Ärende</b> – Innehåller fält för ärenden och fel, till exempel Nummer, Status, Prioritet och Beskrivning. Använd den här mallen för att skapa moduler som liknar standardmodulerna Ärenden och Fel.<br/><br/>Obs! När du har skapat modulen kan du redigera etiketterna för fälten i mallen och skapa anpassade fält som kan läggas till i modulens layouter.',
            'afterSave' => 'Anpassa modulen efter dina behov genom att redigera och skapa fält, skapa relationer med andra moduler och ordna fälten i layouterna.<br/><br/>Klicka på <b>Visa fält</b> för att visa mallfälten och hantera anpassade fält i modulen.<br/><br/>Klicka på <b>Visa relationer</b> för att skapa och hantera relationer mellan modulen och andra moduler, oavsett om modulerna redan finns i programmet eller är andra anpassade moduler i samma paket.<br/><br/>Klicka på <b>Visa layouter</b> för att redigera modulens layouter. Du kan ändra layouten för detaljvyn, redigeringsvyn och listvyn för modulen precis som för moduler som redan finns i programmet i Studio.<br/><br/>Klicka på <b>Duplicera</b> för att skapa en modul med samma egenskaper som den aktuella modulen. Du kan sedan anpassa den nya modulen ytterligare.',
            'viewfields' => 'Fälten i modulen kan anpassas efter dina behov.<br/><br/>Du kan inte ta bort standardfält, men du kan ta bort dem från lämpliga layouter på layoutsidorna. <br/><br/>Du kan snabbt skapa nya fält med egenskaper som liknar befintliga fält genom att klicka på <b>Klona</b> i formuläret <b>Egenskaper</b>. Ange nya egenskaper och klicka sedan på <b>Spara</b>.<br/><br/>Vi rekommenderar att du anger alla egenskaper för standardfält och anpassade fält innan du publicerar och installerar paketet som innehåller den anpassade modulen.',
            'viewrelationships' => 'Du kan skapa många-till-många-relationer mellan den aktuella modulen och andra moduler i paketet och/eller mellan den aktuella modulen och moduler som redan är installerade i programmet.<br><br>Om du vill skapa en-till-många- och en-till-en-relationer skapar du fälten <b>Relatera</b> och <b>Flexibel relation</b> för modulerna.',
            'viewlayouts' => 'Du kan styra vilka fält som är tillgängliga för att registrera data i <b>redigeringsvyn</b>. Du kan också styra vilka data som visas i <b>detaljvyn</b>. Vyerna behöver inte vara identiska. <br/><br/>Formuläret Snabbskapa visas när du klickar på <b>Skapa</b> i en moduldelpanel. Som standard har formuläret <b>Snabbskapa</b> samma layout som standardlayouten för <b>redigeringsvyn</b>. Du kan anpassa formuläret Snabbskapa så att det innehåller färre och/eller andra fält än layouten för redigeringsvyn. <br><br>Du kan bestämma modulens säkerhet med layoutanpassning tillsammans med <b>Rollhantering</b>.<br><br>',
            'existingModule' => 'När du har skapat och anpassat modulen kan du skapa ytterligare moduler eller återvända till paketet för att <b>publicera</b> eller <b>driftsätta</b> paketet.<br><br>Klicka på <b>Duplicera</b> för att skapa ytterligare moduler med samma egenskaper som den aktuella modulen, eller gå tillbaka till paketet och klicka på <b>Ny modul</b>.<br><br>Om du är redo att <b>publicera</b> eller <b>driftsätta</b> paketet som innehåller modulen går du tillbaka till paketet för att utföra dessa åtgärder. Du kan publicera och driftsätta paket som innehåller minst en modul.',
            'labels' => 'Etiketterna för standardfält och anpassade fält kan ändras. Om du ändrar fältetiketter påverkas inte de data som lagras i fälten.',
        ),
        'listViewEditor' => array(
            'modify' => 'Tre kolumner visas till vänster. Kolumnen ”Standard” innehåller de fält som visas i en listvy som standard, kolumnen ”Tillgängliga” innehåller fält som en användare kan välja för att skapa en anpassad listvy, och kolumnen ”Dolda” innehåller fält som du som administratör kan lägga till i kolumnen Standard eller Tillgängliga för användning av användare, men som för närvarande är inaktiverade.',
            'savebtn' => 'När du klickar på <b>Spara</b> sparas alla ändringar och aktiveras.',
            'Hidden' => 'Dolda fält är fält som för närvarande inte är tillgängliga för användning i listvyer.',
            'Available' => 'Tillgängliga fält är fält som inte visas som standard men som kan aktiveras av användare.',
            'Default' => 'Standardfält visas för användare som inte har skapat anpassade inställningar för listvyer.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Två kolumner visas till vänster. Kolumnen ”Standard” innehåller de fält som visas i sökvyn, och kolumnen ”Dolda” innehåller fält som du som administratör kan lägga till i vyn.',
            'savebtn' => 'När du klickar på <b>Spara och driftsätt</b> sparas alla ändringar och aktiveras.',
            'Hidden' => 'Dolda fält är fält som inte visas i sökvyn.',
            'Default' => 'Standardfält visas i sökvyn.'
        ),
        'layoutEditor' => array(
            'default' => 'Två kolumner visas till vänster. I den högra kolumnen, med rubriken Aktuell layout eller Layoutförhandsvisning, ändrar du modulens layout. Den vänstra kolumnen, Verktygslåda, innehåller användbara element och verktyg för layoutredigering. <br/><br/>Om layoutområdet har rubriken Aktuell layout arbetar du med en kopia av den layout som modulen för närvarande använder för visning.<br/><br/>Om det har rubriken Layoutförhandsvisning arbetar du med en kopia som skapades tidigare när du klickade på knappen Spara. Den kan redan ha ändrats jämfört med den version som visas för användare av modulen.',
            'saveBtn' => 'När du klickar på knappen sparas layouten så att ändringarna bevaras. När du återvänder till modulen utgår du från den ändrade layouten. Layouten visas dock inte för modulens användare förrän du klickar på knappen Spara och publicera.',
            'publishBtn' => 'Klicka på knappen för att driftsätta layouten. Det innebär att layouten omedelbart visas för modulens användare.',
            'toolbox' => 'Verktygslådan innehåller flera användbara funktioner för att redigera layouter, bland annat en papperskorg, ytterligare element och tillgängliga fält. Alla kan dras och släppas i layouten.',
            'panels' => 'Det här området visar hur layouten ser ut för användare av modulen när den har driftsatts.<br/><br/>Du kan flytta element som fält, rader och paneler genom att dra och släppa dem, ta bort element genom att dra dem till papperskorgen i verktygslådan eller lägga till nya element genom att dra dem från verktygslådan till önskad position i layouten.'
        ),
        'dropdownEditor' => array(
            'default' => 'Två kolumner visas till vänster. I den högra kolumnen, med rubriken Aktuell layout eller Layoutförhandsvisning, ändrar du modulens layout. Den vänstra kolumnen, Verktygslåda, innehåller användbara element och verktyg för layoutredigering. <br/><br/>Om layoutområdet har rubriken Aktuell layout arbetar du med en kopia av den layout som modulen för närvarande använder för visning.<br/><br/>Om det har rubriken Layoutförhandsvisning arbetar du med en kopia som skapades tidigare när du klickade på knappen Spara. Den kan redan ha ändrats jämfört med den version som visas för användare av modulen.',
            'dropdownaddbtn' => 'När du klickar på knappen läggs ett nytt objekt till i rullgardinslistan.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Anpassningar som gjorts i Studio i den här instansen kan paketeras och driftsättas i en annan instans. <br><br>Ange ett <b>paketnamn</b>. Du kan även ange <b>författare</b> och <b>beskrivning</b> för paketet.<br><br>Välj de moduler som innehåller de anpassningar som ska exporteras. (Endast moduler med anpassningar visas för val.)<br><br>Klicka på <b>Exportera</b> för att skapa en ZIP-fil för paketet som innehåller anpassningarna. ZIP-filen kan laddas upp till en annan instans med <b>Modulläsaren</b>.',
            'exportCustomBtn' => 'Klicka på <b>Exportera</b> för att skapa en ZIP-fil för paketet som innehåller de anpassningar du vill exportera.',
            'name' => 'Paketets <b>namn</b> visas i Modulläsaren efter att paketet har laddats upp för installation i Studio.',
            'author' => '<b>Författaren</b> är namnet på den person eller organisation som skapade paketet. Författaren kan vara en person eller ett företag.<br><br>Författaren visas i Modulläsaren efter att paketet har laddats upp för installation i Studio.',
            'description' => 'Paketets <b>beskrivning</b> visas i Modulläsaren efter att paketet har laddats upp för installation i Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Välkommen till området <b>Utvecklarverktyg</b>. <br/><br/>Använd verktygen i området för att skapa och hantera standardmoduler, anpassade moduler och fält.',
            'studioBtn' => 'Använd <b>Studio</b> för att anpassa installerade moduler genom att ändra fältens placering, välja vilka fält som är tillgängliga och skapa anpassade datafält.',
            'mbBtn' => 'Använd <b>Modulbyggaren</b> för att skapa nya moduler.',
            'appBtn' => 'Använd programläget för att anpassa olika egenskaper i programmet, till exempel hur många TPS-rapporter som visas på startsidan.',
            'backBtn' => 'Återgå till föregående steg.',
            'studioHelp' => 'Använd <b>Studio</b> för att anpassa installerade moduler.',
            'moduleBtn' => 'Klicka för att redigera denna modul.',
            'moduleHelp' => 'Välj den modulkomponent som du vill redigera.',
            'fieldsBtn' => 'Redigera vilken information som lagras i modulen genom att styra modulens <b>fält</b>.<br/><br/>Här kan du redigera och skapa anpassade fält.',
            'labelsBtn' => 'Klicka på <b>Spara</b> för att spara dina anpassade etiketter.',
            'layoutsBtn' => 'Anpassa <b>layouterna</b> för redigerings-, detalj-, list- och sökvyerna.',
            'subpanelBtn' => 'Redigera vilken information som visas i modulens delpaneler.',
            'layoutsHelp' => 'Välj en <b>layout att redigera</b>.<br/><br/>Klicka på <b>Redigeringsvy</b> för att ändra layouten som innehåller datafält för att ange data.<br/><br/>Klicka på <b>Detaljvy</b> för att ändra layouten som visar data som angetts i fälten i redigeringsvyn.<br/><br/>Klicka på <b>Listvy</b> för att ändra de kolumner som visas i standardlistan.<br/><br/>Klicka på <b>Sök</b> för att ändra layouten för formulären Enkel och Avancerad sökning.',
            'subpanelHelp' => 'Välj en <b>delpanel</b> att redigera.',
            'searchHelp' => 'Välj en <b>Sök</b>-layout att redigera.',
            'newPackage' => 'Klicka på <b>Nytt paket</b> för att skapa ett nytt paket.',
            'mbHelp' => '<b>Välkommen till Modulbyggaren.</b><br/><br/>Använd <b>Modulbyggaren</b> för att skapa paket som innehåller anpassade moduler baserade på standardobjekt eller anpassade objekt. <br/><br/>Klicka på <b>Nytt paket</b> för att skapa ett nytt paket, eller välj ett paket att redigera.<br/><br/>Ett <b>paket</b> fungerar som en behållare för anpassade moduler som alla ingår i samma projekt. Paketet kan innehålla en eller flera anpassade moduler som kan relateras till varandra eller till moduler i programmet. <br/><br/>Exempel: Du kan skapa ett paket med en anpassad modul som är relaterad till standardmodulen Konton. Du kan också skapa ett paket med flera nya moduler som samverkar i ett projekt och är relaterade till varandra och till moduler i programmet.',
            'exportBtn' => 'Klicka på <b>Exportera anpassningar</b> för att skapa ett paket som innehåller anpassningar som gjorts i Studio för specifika moduler.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Redigeraren för rullgardinslistor',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modulbyggaren',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Redigeraren för rullgardinslistor',
    'LBL_DEVELOPER_TOOLS' => 'Utvecklarverktyg',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Paketlista',
    'LBL_HOME' => 'Hem',
    'LBL_NONE' => '-Ingen-',
    'LBL_DEPLOYE_COMPLETE' => 'Utplacering färdig',
    'LBL_DEPLOY_FAILED' => 'Ett fel uppstod under hanteringen av utplaceringsprocessen, ditt paket kan ha installerats felaktigt',
    'LBL_AVAILABLE_SUBPANELS' => 'Tillgängliga delpaneler',
    'LBL_ADVANCED' => 'Avancerat',
    'LBL_ADVANCED_SEARCH' => 'Avancerat filter',
    'LBL_BASIC' => 'Grundläggande',
    'LBL_BASIC_SEARCH' => 'Snabbfilter',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_DASHLET' => 'SuiteCRM-dashlet',
    'LBL_DASHLETLISTVIEW' => 'Listvy för SuiteCRM-dashlet',
    'LBL_POPUP' => 'Popupvisning',
    'LBL_POPUPLISTVIEW' => 'Popup Listvisning',
    'LBL_POPUPSEARCH' => 'Popup Sök',
    'LBL_DASHLETSEARCHVIEW' => 'Sökning för SuiteCRM-dashlet',
    'LBL_DETAILVIEW' => 'Detaljvy',
    'LBL_DROP_HERE' => '[Släpp här]',
    'LBL_EDIT' => 'Redigera',
    'LBL_EDIT_LAYOUT' => 'Redigera layout',
    'LBL_EDIT_FIELDS' => 'Redigera fält',
    'LBL_EDITVIEW' => 'Redigeringsvy',
    'LBL_FILLER' => '(utfyllnad)',
    'LBL_FIELDS' => 'Fält',
    'LBL_FAILED_TO_SAVE' => 'Misslyckades med att spara',
    'LBL_FAILED_PUBLISHED' => 'Misslyckades med Publisering',
    'LBL_HOMEPAGE_PREFIX' => 'Min',
    'LBL_LAYOUT_PREVIEW' => 'Layoutförhandsvisning',
    'LBL_LAYOUTS' => 'Layouter',
    'LBL_LISTVIEW' => 'Listvy',
    'LBL_MODULES' => 'Moduler',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nytt paket',
    'LBL_NEW_PANEL' => 'Ny panel',
    'LBL_NEW_ROW' => 'Ny rad',
    'LBL_PACKAGE_DELETED' => 'Paket borttaget',
    'LBL_PUBLISHING' => 'Publisera ...',
    'LBL_PUBLISHED' => 'Publicerad',
    'LBL_SELECT_FILE' => 'Välj fil',
    'LBL_SUBPANELS' => 'Subpaneler',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Titel:',
    'LBL_SEARCH_FORMS' => 'Filter',
    'LBL_SEARCH' => 'Sök',
    'LBL_SEARCH_BUTTON' => 'Sök',
    'LBL_FILTER' => 'Filter',
    'LBL_TOOLBOX' => 'Verktygsbox',
    'LBL_QUICKCREATE' => 'Snabbskapa',
    'LBL_EDIT_DROPDOWNS' => 'Redigera en global rullgardinslista',
    'LBL_ADD_DROPDOWN' => 'Lägg till en ny global rullgardinslista',
    'LBL_BLANK' => '-tom-',
    'LBL_TAB_ORDER' => 'Tabbordning',
    'LBL_TABDEF_TYPE' => 'Visningstyp',
    'LBL_TABDEF_TYPE_HELP' => 'Välj hur den här sektionen ska visas. Det här valet har bara om du aktiverat flikar i den här visningen.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Flik',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Välj Panel för att visa den här panelen inom layouten. Välj Flik för att visa den här panelen som en separat flik inom layouten. När Flik anges för en panel, kommer efterförljande paneler angivits som Panel visas inom fliken. <br />En ny flik startas för nästa panel för vilken flik är vald. Om Fliken väljs för en panel under den första panelen, kommer den första panelen nödvändigtvis bli en flik.',
    'LBL_TABDEF_COLLAPSE' => 'Minimeringsbar',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Välj för att göra standardutförandet för den här panelen minimerad.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Namn',
    'LBL_DROPDOWN_LANGUAGE' => 'Språk',
    'LBL_DROPDOWN_ITEMS' => 'Listobjekt',
    'LBL_DROPDOWN_ITEM_NAME' => 'Artikelnamn',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Visa etikett',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synkronisera med detaljvyn',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Välj det här alternativet för att synkronisera layouten för redigeringsvyn med motsvarande detaljvy. Fält och fältplaceringar i redigeringsvyn synkroniseras och sparas i detaljvyn.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Den här detaljvyn är synkroniserad med motsvarande redigeringsvy. Fält och fältplaceringar i detaljvyn återspeglar fälten och fältplaceringarna i redigeringsvyn.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopiera från redigeringsvyn',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Värden krävs för både Objektnamn och Visnings märkning. För att lägga till ett tomt objekt, klicka Lägg till utan att lägga in värden för varken Objektnamn och Visnings märkning.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Nyckeln finns redan i listan',
    'LBL_NO_SAVE_ACTION' => 'Det gick inte att hitta sparåtgärden för den här vyn.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: felaktigt formaterat dokument',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primär modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relation skapad i Studio',
    'LBL_RELATIONSHIPS' => 'Relationer',
    'LBL_RELATIONSHIP_EDIT' => 'Redigera Relation',
    'LBL_REL_NAME' => 'Namn',
    'LBL_REL_LABEL' => 'Etikett',
    'LBL_REL_TYPE' => 'Typ',
    'LBL_RHS_MODULE' => 'Related Module',
    'LBL_NO_RELS' => 'Inga relationer',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Valfritt villkor',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolumn',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Värde',
    'LBL_SUBPANEL_FROM' => 'Subpanel från',
    'LBL_RELATIONSHIP_ONLY' => 'Inga synliga element skapas för relationen eftersom det redan finns en synlig relation mellan de två modulerna.',
    'LBL_ONETOONE' => 'En till en',
    'LBL_ONETOMANY' => 'En till många',
    'LBL_MANYTOONE' => 'Många till En',
    'LBL_MANYTOMANY' => 'Många till många',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Välj en modul att redigera.',
    'LBL_QUESTION_LAYOUT' => 'Välj en layout att redigera.',
    'LBL_QUESTION_SUBPANEL' => 'Välj en subpanel att redigera.',
    'LBL_QUESTION_SEARCH' => 'Välj en filterlayout att redigera.',
    'LBL_QUESTION_MODULE' => 'Välj en modulkomponent att redigera.',
    'LBL_QUESTION_PACKAGE' => 'Välj ett paket att redigera eller skapa ett nytt paket.',
    'LBL_QUESTION_EDITOR' => 'Välj ett verktyg.',
    'LBL_QUESTION_DASHLET' => 'Välj en dashletlayout att redigera.',
    'LBL_QUESTION_POPUP' => 'Välj en popup layout att redigera.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Namn',
    'LBL_LABELS' => 'Etiketter',
    'LBL_MASS_UPDATE' => 'Massuppdatering',
    'LBL_DEFAULT_VALUE' => 'Standardvärde',
    'LBL_REQUIRED' => 'Obligatoriskt',
    'LBL_DATA_TYPE' => 'Typ',
    'LBL_HCUSTOM' => 'ANPASSAD',
    'LBL_HDEFAULT' => 'STANDARD',
    'LBL_LANGUAGE' => 'Språk:',
    'LBL_CUSTOM_FIELDS' => '*fält skapad i Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Redigera etiketter',
    'LBL_SECTION_PACKAGES' => 'Paket',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Moduler',
    'LBL_SECTION_DROPDOWNS' => 'Rullgardinslistor',
    'LBL_SECTION_PROPERTIES' => 'Egenskaper',
    'LBL_SECTION_DROPDOWNED' => 'Redigera rullgardinslista',
    'LBL_SECTION_HELP' => 'Hjälp',
    'LBL_SECTION_MAIN' => 'Huvud',
    'LBL_SECTION_FIELDEDITOR' => 'Redigera fält',
    'LBL_SECTION_DEPLOY' => 'Driftsätt',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standard',
    'LBL_HIDDEN' => 'Dold',
    'LBL_AVAILABLE' => 'Tillgänglig',
    'LBL_LISTVIEW_DESCRIPTION' => 'Tre kolumner visas nedan. Kolumnen <b>Standard</b> innehåller fält som visas i en listvy som standard. Kolumnen <b>Ytterligare</b> innehåller fält som en användare kan välja för att skapa en anpassad vy. Kolumnen <b>Tillgängliga</b> visar fält som du som administratör kan lägga till i kolumnen Standard eller Ytterligare för användning av användare.',
    'LBL_LISTVIEW_EDIT' => 'Visa Vy Redigeraren',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Förhandsvisa',
    'LBL_MB_RESTORE' => 'Återställ',
    'LBL_MB_DELETE' => 'Ta bort',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standardlayout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Lägg till',
    'LBL_BTN_SAVE' => 'Spara',
    'LBL_BTN_SAVE_CHANGES' => 'Spara ändringar',
    'LBL_BTN_DONT_SAVE' => 'Ignorera ändringar',
    'LBL_BTN_CANCEL' => 'Avbryt',
    'LBL_BTN_CLOSE' => 'Stäng',
    'LBL_BTN_SAVEPUBLISH' => 'Spara & Publisera',
    'LBL_BTN_CLONE' => 'Klona',
    'LBL_BTN_ADDROWS' => 'Lägg till Rader',
    'LBL_BTN_ADDFIELD' => 'Lägg till fält',
    'LBL_BTN_ADDDROPDOWN' => 'Lägg till rullgardinslista',
    'LBL_BTN_SORT_ASCENDING' => 'Sortera Ökande',
    'LBL_BTN_SORT_DESCENDING' => 'Sortera Minskande',
    'LBL_BTN_EDLABELS' => 'Redigera etiketter',
    'LBL_BTN_UNDO' => 'Ångra',
    'LBL_BTN_REDO' => 'Göra om Ångra',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Lägg till Egna Fält',
    'LBL_BTN_EXPORT' => 'Exportera anpassningar',
    'LBL_BTN_DUPLICATE' => 'Duplicera',
    'LBL_BTN_PUBLISH' => 'Publicera',
    'LBL_BTN_DEPLOY' => 'Driftsätt',
    'LBL_BTN_EXP' => 'Exportera',
    'LBL_BTN_DELETE' => 'Ta bort',
    'LBL_BTN_VIEW_LAYOUTS' => 'Visa layouter',
    'LBL_BTN_VIEW_FIELDS' => 'Visa fält',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Visa relationer',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Lägg till relation',
    'LBL_BTN_RENAME_MODULE' => 'Ändra Modul Namn',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Fält existera redan',
    'ERROR_INVALID_KEY_VALUE' => "Error: Ogiltigt nyckel värde: [&#39;]",
    'ERROR_NO_HISTORY' => 'Inga historikfiler hittades',
    'ERROR_MINIMUM_FIELDS' => 'Layouten måste innehålla minst ett fält',
    'ERROR_GENERIC_TITLE' => 'Ett fel har inträffat',
    'ERROR_REQUIRED_FIELDS' => 'Är du säker på att du vill fortsätta? Följande krävda fält saknas från layouten:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paketnamn:',
    'LBL_MODULE_NAME' => 'Modulnamn:',
    'LBL_AUTHOR' => 'Författare:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_KEY' => 'Nyckel:',
    'LBL_ADD_README' => 'README',
    'LBL_LAST_MODIFIED' => 'Senast ändrad:',
    'LBL_NEW_MODULE' => 'Ny modul',
    'LBL_LABEL' => 'Etikett:',
    'LBL_LABEL_TITLE' => 'Etikett',
    'LBL_WIDTH' => 'Bredd',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Typ:',
    'LBL_NAV_TAB' => 'Navigeringsflik',
    'LBL_CREATE' => 'Skapa',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Visa',
    'LBL_HISTORY' => 'Visa historik',
    'LBL_RESTORE_DEFAULT' => 'Återskapa Standard',
    'LBL_ACTIVITIES' => 'Aktiviteter',
    'LBL_NEW' => 'Ny',
    'LBL_TYPE_BASIC' => 'grundläggande',
    'LBL_TYPE_COMPANY' => 'företag',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'ärende',
    'LBL_TYPE_SALE' => 'försäljning',
    'LBL_TYPE_FILE' => 'fil',
    'LBL_RSUB' => 'Det här är delpanelen som visas i modulen',
    'LBL_MSUB' => 'Det här är den delpanel som modulen tillhandahåller för att visas i den relaterade modulen',
    'LBL_MB_IMPORTABLE' => 'Importerar',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] har tagits bort',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportera anpassningar',
    'LBL_EC_NAME' => 'Paketnamn:',
    'LBL_EC_AUTHOR' => 'Författare:',
    'LBL_EC_DESCRIPTION' => 'Beskrivning:',
    'LBL_EC_CHECKERROR' => 'Välj en modul.',
    'LBL_EC_CUSTOMFIELD' => 'anpassade fält',
    'LBL_EC_CUSTOMLAYOUT' => 'anpassad(e) layout(er)',
    'LBL_EC_NOCUSTOM' => 'Inga moduler har anpassats.',
    'LBL_EC_EMPTYCUSTOM' => 'har tomma anpassningar.',
    'LBL_EC_EXPORTBTN' => 'Exportera',
    'LBL_MODULE_DEPLOYED' => 'Modulen har driftsatts.',
    'LBL_UNDEFINED' => 'odefinierad',
    'LBL_EC_VIEWS' => 'anpassad(e) vy(er)',
    'LBL_EC_SUITEFEEDS' => 'anpassade flöden',
    'LBL_EC_DASHLETS' => 'anpassade dashlets',
    'LBL_EC_CSS' => 'anpassad css',
    'LBL_EC_TPLS' => 'anpassade mallar',
    'LBL_EC_IMAGES' => 'anpassad(e) bild(er)',
    'LBL_EC_JS' => 'anpassad js',
    'LBL_EC_QTIP' => 'anpassade qtips',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Det gick inte att hämta data',
    'LBL_AJAX_LOADING' => 'Laddar...',
    'LBL_AJAX_DELETING' => 'Tar bort...',
    'LBL_AJAX_BUILDPROGRESS' => 'Bygge pågår …',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Driftsättning pågår …',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Åtgärden slutfördes',
    'LBL_AJAX_LOADING_TITLE' => 'Pågår..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Vänta, laddar..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Är du säker på att du vill ta bort det här paketet? Alla filer som hör till paketet tas bort permanent.',
    'LBL_JS_REMOVE_MODULE' => 'Är du säker på att du vill ta bort den här modulen? Det kommer permanent radera alla filer tillhörande den här modulen.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Alla anpassningar som du gjort i Studio kommer att skrivas över när denna modul omgrupperas. Är du säker på att du vill fortsätta?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Driftsätter paket',
    'LBL_JS_VALIDATE_NAME' => 'Namn – måste vara alfanumeriskt, börja med en bokstav och får inte innehålla blanksteg.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Paketnamn existerar redan',
    'LBL_JS_VALIDATE_KEY' => 'Nyckel - Måste vara alfanumerisk, börja med en bokstav och får inte innehålla mellanrum.',
    'LBL_JS_VALIDATE_LABEL' => 'Ange en etikett som används som visningsnamn för modulen',
    'LBL_JS_VALIDATE_TYPE' => 'Välj den modultyp du vill bygga från listan ovan',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etikett – lägg till en etikett som visas ovanför delpanelen',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Om du tar bort detta anpassade fält tas både fältet och alla data som hör till fältet bort från databasen. Fältet visas inte längre i någon modullayout. \\n\\nVill du fortsätta?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Är du säker på att du vill ta bort den här relationen?',
    'LBL_CONFIRM_DONT_SAVE' => 'Ändringar har gjorts sedan du senast sparade. Vill du spara?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Spara ändringar?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data kan trunkeras och detta kan inte ångras, är du säker på att du vill fortsätta?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Välj lämplig datatyp utifrån vilken typ av data som anges i fältet.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Ja</b>: Fältet kommer att inkluderas vid en importåtgärd.<br><b>Nej</b>: Fältet kommer inte att inkluderas vid en import.<br><b>Obligatorisk</b>: Ett värde för fältet måste anges vid varje import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Ange ett tal för Bredden, mätt i pixlar.<br> Den uppladdade bilden kommer att skalas till denna Bredd.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Ange ett tal för Höjden, mätt i pixlar.<br> Den uppladdade bilden kommer att skalas till denna Höjd.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Aktiverad</b>: Fältet kommer att visas i funktionen Sammanslå Dubletter, men kommer inte att vara tillgänglig att användas i filteregenskaperna för funktionen Hitta dubbletter.<br><b>Inaktiverad</b>: Fältet kommer inte att visas i funktionen Sammanslå Dubbletter, och kommer inte att vara tillgänglig att användas i filteregenskaperna för funktionen Hitta dubbletter.',

//Revert Module labels
    'LBL_RESET' => 'Återställ',
    'LBL_RESET_MODULE' => 'Reset Modul',
    'LBL_REMOVE_CUSTOM' => 'Ta bort Anpassningar',
    'LBL_CLEAR_RELATIONSHIPS' => 'Rensa Relationer',
    'LBL_RESET_LABELS' => 'Återställ etiketter',
    'LBL_RESET_LAYOUTS' => 'Åteställ Layouts',
    'LBL_REMOVE_FIELDS' => 'Ta bort Anpassade Fält',
    'LBL_CLEAR_EXTENSIONS' => 'Rensa Tillägg',
    'LBL_HISTORY_TIMESTAMP' => 'Tidsstämpel',
    'LBL_HISTORY_TITLE' => 'historik',

    'fieldTypes' => array(
        'varchar' => 'TextField',
        'int' => 'Heltal',
        'float' => 'Flyttal',
        'bool' => 'Checkruta',
        'enum' => 'Rullgardinslista',
        'dynamicenum' => 'Dynamisk rullgardinslista',
        'multienum' => 'MultiSelect',
        'date' => 'Datum',
        'phone' => 'Telefon',
        'currency' => 'Valuta',
        'file' => 'Fil',
        'html' => 'Skrivskyddad HTML (inaktuell, använd TextBlock)',
        'radioenum' => 'Radioknapp',
        'relate' => 'Relatera',
        'address' => 'Adress',
        'text' => 'TextArea',
        'textblock' => 'TextBlock',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datumtid',
        'decimal' => 'Decimal',
        'image' => 'Bild',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Vanliga etiketter",
        "all" => "Alla etiketter",
    ),

    'parent' => 'Flexibel relation',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Du väljer detta objekt för borttagning i dropdown listan. Eventuella dropdown områden med denna lista med detta objekt som ett värde visas inte längre värdet och värdet kommer inte längre att kunna väljas från dropdown fält. Är du säker på att du vill fortsätta?",

    'LBL_ALL_MODULES' => 'Alla moduler',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relaterat {1}-ID)',
);
