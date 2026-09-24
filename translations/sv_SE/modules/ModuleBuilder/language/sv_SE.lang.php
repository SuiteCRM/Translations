<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
            'modify' => 'Du kan ändra modulegenskaperna eller anpassa de <b>fält</b>, <b>relationer</b> och <b>layouter</b> som hör till modulen.',
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
            'type_issue' => 'Malltypen <b>Ärende</b> innehåller ärende- och felspecifika fält, till exempel Nummer, Status, Prioritet och Beskrivning.<br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulerna Ärenden och Fel.',
            'type_person' => 'Malltypen <b>Person</b> innehåller individsspecifika fält, till exempel Tilltal, Titel, Namn, Adress och Telefonnummer.<br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulerna Kontakter och Leads.',
            'type_sale' => 'Malltypen <b>Försäljning</b> innehåller säljspecifika fält, till exempel Leadkälla, Fas, Belopp och Sannolikhet. <br/><br/>Använd den här mallen för att skapa moduler som liknar standardmodulen Affärsmöjligheter.',
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
            'exportCustomBtn' => 'Klicka på <b>Exportera</b> för att skapa en ZIP-fil för paketet som innehåller de anpassningar du vill exportera.',
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


            'editDropDownBtn' => 'Redigera en global dropdown',
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
            'saveBtn' => 'Klicka på <b>Spara</b> för att spara alla ändringar.',
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
            'backBtn' => 'Återgå till föregående steg.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Klicka för att redigera denna modul.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Klicka på <b>Spara</b> för att spara dina anpassade etiketter.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/><br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Välj en <b>Sök</b>-layout att redigera.',
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
    'LBL_PACKAGE_LIST' => 'Paketlista',
    'LBL_HOME' => 'Hem',
    'LBL_NONE' => '-Ingen-',
    'LBL_DEPLOYE_COMPLETE' => 'Utplacering färdig',
    'LBL_DEPLOY_FAILED' => 'Ett fel uppstod under hanteringen av utplaceringsprocessen, ditt paket kan ha installerats felaktigt',
    'LBL_AVAILABLE_SUBPANELS' => 'Available Subpanels',
    'LBL_ADVANCED' => 'Advanced',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_BASIC' => 'Grundläggande',
    'LBL_BASIC_SEARCH' => 'Snabbfilter',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Currency',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_POPUP' => 'Popupvisning',
    'LBL_POPUPLISTVIEW' => 'Popup Listvisning',
    'LBL_POPUPSEARCH' => 'Popup Sök',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DETAILVIEW' => 'Detail View',
    'LBL_DROP_HERE' => '[Drop Here]',
    'LBL_EDIT' => 'Redigera',
    'LBL_EDIT_LAYOUT' => 'Redigera layout',
    'LBL_EDIT_FIELDS' => 'Redigera fält',
    'LBL_EDITVIEW' => 'Edit View',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'Fält',
    'LBL_FAILED_TO_SAVE' => 'Misslyckades med att spara',
    'LBL_FAILED_PUBLISHED' => 'Misslyckades med Publisering',
    'LBL_HOMEPAGE_PREFIX' => 'Min',
    'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
    'LBL_LAYOUTS' => 'Layouter',
    'LBL_LISTVIEW' => 'List View',
    'LBL_MODULES' => 'Moduler',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nytt paket',
    'LBL_NEW_PANEL' => 'Ny panel',
    'LBL_NEW_ROW' => 'Ny rad',
    'LBL_PACKAGE_DELETED' => 'Paket borttaget',
    'LBL_PUBLISHING' => 'Publisera ...',
    'LBL_PUBLISHED' => 'Published',
    'LBL_SELECT_FILE' => 'Select File',
    'LBL_SUBPANELS' => 'Subpaneler',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Title:',
    'LBL_SEARCH_FORMS' => 'Filter',
    'LBL_SEARCH' => 'Search',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_FILTER' => 'Filter',
    'LBL_TOOLBOX' => 'Verktygsbox',
    'LBL_QUICKCREATE' => 'Quick Create',
    'LBL_EDIT_DROPDOWNS' => 'Redigera en global dropdown',
    'LBL_ADD_DROPDOWN' => 'Add a new Global Dropdown',
    'LBL_BLANK' => '-blank-',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TABDEF_TYPE' => 'Visningstyp',
    'LBL_TABDEF_TYPE_HELP' => 'Välj hur den här sektionen ska visas. Det här valet har bara om du aktiverat flikar i den här visningen.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Flik',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Välj Panel för att visa den här panelen inom layouten. Välj Flik för att visa den här panelen som en separat flik inom layouten. När Flik anges för en panel, kommer efterförljande paneler angivits som Panel visas inom fliken. <br />En ny flik startas för nästa panel för vilken flik är vald. Om Fliken väljs för en panel under den första panelen, kommer den första panelen nödvändigtvis bli en flik.',
    'LBL_TABDEF_COLLAPSE' => 'Minimeringsbar',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Välj för att göra standardutförandet för den här panelen minimerad.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Namn',
    'LBL_DROPDOWN_LANGUAGE' => 'Language',
    'LBL_DROPDOWN_ITEMS' => 'List Items',
    'LBL_DROPDOWN_ITEM_NAME' => 'Artikelnamn',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Visa etikett',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synka med DetailView',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Välj det här alternativet för att synkronisera denna EditView layouten till motsvarande DetailView layouten. Fält och fält placering i EditView<br />kommer synkroniseras och sparas i DetailView automatiskt när du klickar på Spara eller Spara & Använda i EditView.<br />Layoutändringar kommer inte att kunna göras i DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Denna DetailView är synkroniserad med motsvarande EditView.<br />Fält och fält placering i denna DetailView återspeglar fälten och fält placering i EditView.<br />Ändringar av DetailView kan inte sparas eller användas inom denna sida. Gör ändringar eller av-synkronisera layouten i EditView.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopiera från EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Värden krävs för både Objektnamn och Visnings märkning. För att lägga till ett tomt objekt, klicka Lägg till utan att lägga in värden för varken Objektnamn och Visnings märkning.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Primär modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio',
    'LBL_RELATIONSHIPS' => 'Relationer',
    'LBL_RELATIONSHIP_EDIT' => 'Redigera Relation',
    'LBL_REL_NAME' => 'Namn',
    'LBL_REL_LABEL' => 'Label',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Related Module',
    'LBL_NO_RELS' => 'Inga relationer',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Valfritt villkor',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolumn',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Value',
    'LBL_SUBPANEL_FROM' => 'Subpanel från',
    'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
    'LBL_ONETOONE' => 'En till en',
    'LBL_ONETOMANY' => 'En till många',
    'LBL_MANYTOONE' => 'Många till En',
    'LBL_MANYTOMANY' => 'Många till många',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Välj en modul att redigera.',
    'LBL_QUESTION_LAYOUT' => 'Välj en layout att redigera.',
    'LBL_QUESTION_SUBPANEL' => 'Välj en subpanel att redigera.',
    'LBL_QUESTION_SEARCH' => 'Select a filter layout to edit.',
    'LBL_QUESTION_MODULE' => 'Välj en modulkomponent att redigera.',
    'LBL_QUESTION_PACKAGE' => 'Select a package to edit, or create a new package.',
    'LBL_QUESTION_EDITOR' => 'Välj ett verktyg.',
    'LBL_QUESTION_DASHLET' => 'Select a dashlet layout to edit.',
    'LBL_QUESTION_POPUP' => 'Välj en popup layout att redigera.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Namn',
    'LBL_LABELS' => 'Etiketter',
    'LBL_MASS_UPDATE' => 'Mass Update',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'LBL_REQUIRED' => 'Required',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'ANPASSAD',
    'LBL_HDEFAULT' => 'STANDARD',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_CUSTOM_FIELDS' => '*fält skapad i Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Redigera etiketter',
    'LBL_SECTION_PACKAGES' => 'Paket',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Moduler',
    'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
    'LBL_SECTION_PROPERTIES' => 'Egenskaper',
    'LBL_SECTION_DROPDOWNED' => 'Redigera Dropdown',
    'LBL_SECTION_HELP' => 'Help',
    'LBL_SECTION_MAIN' => 'Main',
    'LBL_SECTION_FIELDEDITOR' => 'Redigera fält',
    'LBL_SECTION_DEPLOY' => 'Deploy',
    'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Default',
    'LBL_HIDDEN' => 'Dold',
    'LBL_AVAILABLE' => 'Available',
    'LBL_LISTVIEW_DESCRIPTION' => 'There are three columns displayed below. The <b>Default</b> column contains fields that are displayed in a list view by default. The <b>Additional</b> column contains fields that a user can choose to use for creating a custom view. The <b>Available</b> column displays fields available for you as an admin to add to the Default or Additional columns for use by users.',
    'LBL_LISTVIEW_EDIT' => 'Visa Vy Redigeraren',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Förhandsvisa',
    'LBL_MB_RESTORE' => 'Restore',
    'LBL_MB_DELETE' => 'Delete',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standardlayout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Add',
    'LBL_BTN_SAVE' => 'Save',
    'LBL_BTN_SAVE_CHANGES' => 'Spara ändringar',
    'LBL_BTN_DONT_SAVE' => 'Ignorera ändringar',
    'LBL_BTN_CANCEL' => 'Cancel',
    'LBL_BTN_CLOSE' => 'Close',
    'LBL_BTN_SAVEPUBLISH' => 'Spara & Publisera',
    'LBL_BTN_CLONE' => 'Klona',
    'LBL_BTN_ADDROWS' => 'Lägg till Rader',
    'LBL_BTN_ADDFIELD' => 'Add Field',
    'LBL_BTN_ADDDROPDOWN' => 'Lägg till Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Sortera Ökande',
    'LBL_BTN_SORT_DESCENDING' => 'Sortera Minskande',
    'LBL_BTN_EDLABELS' => 'Edit Labels',
    'LBL_BTN_UNDO' => 'Ångra',
    'LBL_BTN_REDO' => 'Göra om Ångra',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Lägg till Egna Fält',
    'LBL_BTN_EXPORT' => 'Exportera anpassningar',
    'LBL_BTN_DUPLICATE' => 'Duplicate',
    'LBL_BTN_PUBLISH' => 'Publish',
    'LBL_BTN_DEPLOY' => 'Deploy',
    'LBL_BTN_EXP' => 'Export',
    'LBL_BTN_DELETE' => 'Delete',
    'LBL_BTN_VIEW_LAYOUTS' => 'Visa layouter',
    'LBL_BTN_VIEW_FIELDS' => 'Visa fält',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'View Relationships',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Add Relationship',
    'LBL_BTN_RENAME_MODULE' => 'Ändra Modul Namn',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Fält existera redan',
    'ERROR_INVALID_KEY_VALUE' => "Error: Ogiltigt nyckel värde: [&#39;]",
    'ERROR_NO_HISTORY' => 'No history files found',
    'ERROR_MINIMUM_FIELDS' => 'Layouten måste innehålla minst ett fält',
    'ERROR_GENERIC_TITLE' => 'An error has occurred',
    'ERROR_REQUIRED_FIELDS' => 'Är du säker på att du vill fortsätta? Följande krävda fält saknas från layouten:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paketnamn:',
    'LBL_MODULE_NAME' => 'Modulnamn:',
    'LBL_AUTHOR' => 'Författare:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_KEY' => 'Key:',
    'LBL_ADD_README' => ' Readme',
    'LBL_LAST_MODIFIED' => 'Senast ändrad:',
    'LBL_NEW_MODULE' => 'Ny modul',
    'LBL_LABEL' => 'Etikett:',
    'LBL_LABEL_TITLE' => 'Label',
    'LBL_WIDTH' => 'Width',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Type:',
    'LBL_NAV_TAB' => 'Navigation Tab',
    'LBL_CREATE' => 'Create',
    'LBL_LIST' => 'List',
    'LBL_VIEW' => 'View',
    'LBL_HISTORY' => 'View History',
    'LBL_RESTORE_DEFAULT' => 'Återskapa Standard',
    'LBL_ACTIVITIES' => 'Activities',
    'LBL_NEW' => 'New',
    'LBL_TYPE_BASIC' => 'grundläggande',
    'LBL_TYPE_COMPANY' => 'företag',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'ärende',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'fil',
    'LBL_RSUB' => 'This is the subpanel that will be displayed in your module',
    'LBL_MSUB' => 'This is the subpanel that your module provides to the related module for display',
    'LBL_MB_IMPORTABLE' => 'Importerar',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] har tagits bort',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportera anpassningar',
    'LBL_EC_NAME' => 'Paketnamn:',
    'LBL_EC_AUTHOR' => 'Författare:',
    'LBL_EC_DESCRIPTION' => 'Description:',
    'LBL_EC_CHECKERROR' => 'Välj en modul.',
    'LBL_EC_CUSTOMFIELD' => 'customized field(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'anpassad(e) layout(er)',
    'LBL_EC_NOCUSTOM' => 'No modules have been customized.',
    'LBL_EC_EMPTYCUSTOM' => 'has empty customizations.',
    'LBL_EC_EXPORTBTN' => 'Export',
    'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
    'LBL_UNDEFINED' => 'odefinierad',
    'LBL_EC_VIEWS' => 'anpassad(e) vy(er)',
    'LBL_EC_SUITEFEEDS' => 'customized Feed(s)',
    'LBL_EC_DASHLETS' => 'customized Dashlet(s)',
    'LBL_EC_CSS' => 'anpassad css',
    'LBL_EC_TPLS' => 'customized tpls(s)',
    'LBL_EC_IMAGES' => 'anpassad(e) bild(er)',
    'LBL_EC_JS' => 'anpassad js',
    'LBL_EC_QTIP' => 'customized qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
    'LBL_AJAX_LOADING' => 'Laddar...',
    'LBL_AJAX_DELETING' => 'Tar bort...',
    'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'Pågår..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Vänta, laddar..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Are you sure you wish to remove this package? This will permanently delete all files associated with this package.',
    'LBL_JS_REMOVE_MODULE' => 'Är du säker på att du vill ta bort den här modulen? Det kommer permanent radera alla filer tillhörande den här modulen.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Alla anpassningar som du gjort i Studio kommer att skrivas över när denna modul omgrupperas. Är du säker på att du vill fortsätta?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
    'LBL_JS_VALIDATE_NAME' => 'Name - Must be alphanumeric, begin with a letter and contain no spaces.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Paketnamn existerar redan',
    'LBL_JS_VALIDATE_KEY' => 'Nyckel - Måste vara alfanumerisk, börja med en bokstav och får inte innehålla mellanrum.',
    'LBL_JS_VALIDATE_LABEL' => 'Please enter a label that will be used as the Display Name for this module',
    'LBL_JS_VALIDATE_TYPE' => 'Välj den modultyp du vill bygga från listan ovan',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - please add a label that will be displayed above the subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \\n\\nDo you wish to continue?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Are you sure you wish to delete this relationship?',
    'LBL_CONFIRM_DONT_SAVE' => 'Changes have been made since you last saved, would you like to save?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Spara ändringar?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data kan trunkeras och detta kan inte ångras, är du säker på att du vill fortsätta?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Select the appropriate data type based on the type of data that will be entered into the field.',
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
        'float' => 'Float',
        'bool' => 'Checkruta',
        'enum' => 'DropDown',
        'dynamicenum' => 'Dynamisk DropDown',
        'multienum' => 'MultiSelect',
        'date' => 'Date',
        'phone' => 'Phone',
        'currency' => 'Currency',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Relate',
        'address' => 'Adress',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datumtid',
        'decimal' => 'Decimal',
        'image' => 'Bild',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Frequently used labels",
        "all" => "Alla etiketter",
    ),

    'parent' => 'Flex Relate',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Du väljer detta objekt för borttagning i dropdown listan. Eventuella dropdown områden med denna lista med detta objekt som ett värde visas inte längre värdet och värdet kommer inte längre att kunna väljas från dropdown fält. Är du säker på att du vill fortsätta?",

    'LBL_ALL_MODULES' => 'All Modules',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
