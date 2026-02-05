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
    'LBL_LOADING' => 'Laster inn' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Gjem Innstilinger' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Slett' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Oppgi et <b>Navn</b> for pakken. Navnet må være alfanumerisk uten mellomrom. (For eksempel: HR_Management)<br /><br />Du kan oppgi <b>Utvikler</b> og <b>Beskrivelse</b> for pakken. <br /><br />Klikk på <b>Lagre</b> for å opprette pakken.',
            'modify' => 'Egenskapene og mulige handlinger for <b>Pakken<b> vises her. <br /><br />Du kan endre <b>Navnet</b>, <b>Utvikler</b> og <b>Beskrivelse</b> for pakken, samt vise og tilpasse alle modulene i pakken.<br /><br />Klikk på <b>Ny modul</b> for å opprette en modul for pakken.<br /><br />Dersom pakken inneholder minst en pakke kan du <b>Publisere</b> og <b>Distribuere</b>, samt <b>Eksportere</b> tilpassninger som er gjort i pakken.',
            'name' => 'dette er <b>Navnet</b> på denne pakken.<br /><br />Navnet du skriver inn må være alfanumerisk, starte med en bokstav og det kan ikke inneholde mellomrom. (For eksempel: HR_Management)',
            'author' => 'Dette er <b>Utvikleren</b> som vises under installasjon som navnet på den som opprettet pakken. <br /><br />Utvikleren kan enten være et individ eller en bedrift.',
            'description' => 'Dette er <b>Beskrivelsen</b> av pakken som vises under installasjon.',
            'publishbtn' => 'Klikk på <b>Publiser</b> for å lagre alt og lage en .zip-fil som er en installerbar versjon av pakken. <br /><br />Bruk <b>Modullaster</b> for å laste opp .zip-filen og installere pakken.',
            'deploybtn' => 'Klikk <b>Distribuer</b> for å lagre alt og installere pakken, inkludert alle moduler, i denne instansen.',
            'duplicatebtn' => 'klikk <b>Kopier</b> for å kopiere innholdet i pakket inn i en ny pakke og vise den nye pakken. <br /><br />Den nye pakken vil få et nytt, automatisk generert, navn ved å legge til et tall på slutten av navnet. Du kan gi den nye paken et nytt navn ved å skrive inn et nytt <b>Navn</b> og klikke på <b>Lagre</b>',
            'exportbtn' => 'Klikk <b>Eksporter</b> for å opprette en .zip-fil med alle tilpassninger i denne paken. <br /><br /> Den genererte filen er ikke en installerbar versjon av pakken. <br /><br />Bruk <b>Modullaster</b> for å importere .zip-filen og få pakken, inkludert tilpassninger, i Modulbyggingsverktøyet.',
            'deletebtn' => 'Klikk på <b>Slett</b> for å slette denne pakken og alle filer relatert til denne pakken.',
            'savebtn' => 'Klikk <b>Lagre</b> for å lagre all data relatert til denne pakken.',
            'existing_module' => 'Klikk <b>Modul<b>-ikonet for å redigere egenskaper og tilpasse felter, forhold og oppsett assosiert med denne modulen.',
            'new_module' => 'Klikk <b>Ny Modul</b> for å opprette en ny modul for denne pakken.',
            'key' => 'Denne 5-tegns, alfanumeriske <b>Nøklen</b> vil bli brukt til å sette foran alle mapper, klassenavn og databasetabeller for alle moduler i denne pakken. <br /><br />Denne nøklen er en måte å få unike tabellnavn i databasen.',
            'readme' => 'Klikk for å legge til <b>LesMeg</b>-tekst for denne pakken. <br /><br />Denne vil være tilgjengelig når pakken installeres.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Oppgi et <b>Navn</b> for modulen. <b>Etiketten</b> du oppgir vil vises i navigasjonsfanen. <br /><br />Velg å vise en navigasjonsfane for modulen ved å krysse av i <b>Navigasjonsfane</b>-avkryssningsboksen. <br /><br />Velg deretter modultypen du vil opprette. <br /><br />Velg en maltype. Hver mal inneholder et bestemt sett felter, samt noen forhåndsdefinerte oppsett, som du kan bruke som basis for modulen din. <br /><br />Klikk på <b>Lagre</b> for å opprette modulen.',
            'modify' => 'Du kan endre modulinnstillinger eller tilpasse <b>Felter</b>, <b>Forhold</b> og <b>Oppsett</b> relatert til modulen.',
            'importable' => 'Om du krysser i avkryssningsboksen for <b>Importerbar<b>, vil du kunne importere denne modulen. <br /><br />En lenke til importeringsveiviseren vil vises i panelet med snarveier i modulen. Importeringsveiviseren forenkler importering av data fra eksterne kilder inn i den tilpassede modulen.',
            'team_security' => 'Om du krysser i avkryssningsboksen for <b>Teamsikkerhet<b>, vil du slå på teamsikkerhet for denne modulen. Derom teamsikkerhet er slått på vil teamvalg vises i oppføringen for modulen.',
            'reportable' => 'Om du krysser i denne avkryssningsboksen vil du tillate denne modulen å ha raporter kjørt mot den.',
            'assignable' => 'Om du krysser i denne avkryssningsboksen vil du tillate en oppføring i denne modulen å bli tildelt til en utvalgt bruker.',
            'has_tab' => 'Om du krysser i avkryssningsboksen for <b>Navigasjonsfane</b> vil denne modulen få en navigasjonsfane.',
            'acl' => 'Om du krysser i denne avkryssningsboksen vil du slå på tilgangskontroll for denne modulen, inkludert feltnivåsikkerhet.',
            'studio' => 'Om du krysser i denne avkryssningsboksen vil du tillate administratorer å gjøre endringer av denne modulen i Studio.',
            'audit' => 'Om du krysser i denne avkryssningsboksen vil du slå på tilsyn for denne modulen. Endringer i utvalgte felt vil bli oppført, slik at administratorer kan gå gjennom endringshistorikken.',
            'viewfieldsbtn' => 'Klikk <b>Vis Felter</b> for å vise feltene tilknyttet modulen og for å opprette og redigere tilpassede felter.',
            'viewrelsbtn' => 'Klikk <b>Vis forhold</b> for å vise forholdene tilknyttet denne modulen og for å opprette nye forhold.',
            'viewlayoutsbtn' => 'Klikk <b>Vis oppsett</b> for å vise oppsettene for modulen, og for å tilpasse feltoppsettet.',
            'duplicatebtn' => 'Klikk <b>Kopier</b> for å kopiere innholdet i modulen inn i en ny modul og vis den nye modulen. <br /><br />Den nye modulen vil få et nytt, automatisk generert, navn ved å legge til et tall på slutten av navnet.',
            'deletebtn' => 'Klikk <b>Slett</b> for å slette denne modulen',
            'name' => 'Dette er <b>Navnet</b> på denne modulen. <br /><br />Navnet må være alfanumerisk, må starte med en bokstav og kan ikke inneholde mellomrom. (Eksempel: HR_Management)',
            'label' => 'Dette er <b>Etiketten</b> som vil vises i navigasjonsfanen for modulen.',
            'savebtn' => 'Klikk på <b>Lagre</b> for å lagre all data relatert til denne modulen.',
            'type_basic' => 'Maltypen <b>Enkel</b> tar utgangspunkt i vanlige felter, slik som Navn, Tildelt til, Team, Opprettelsesdato og Beskrivelse.',
            'type_company' => 'Maltypen <b>Selskap</b> gir deg organisasjons-spesifike felter, som for eksempel Selskapsnavn, Bransje og Fakturaadresse. <br /><br />Bruk denne maltypen for å opprette moduler som ligner på den standard Konto-modulen.',
            'type_issue' => 'Maltypen <b>Problem</b> gir deg sak- og feil-spesifike felter, som for eksempel Nummer, Status, Prioritet og Beskrivelse. <br /><br />Bruk denne maltypen for å opprette moduler som ligner på Sak- og Feil-modulene.',
            'type_person' => 'Maltypen <b>Person</b> gir deg individ-spesifike felter, som for eksempel Tittel, Navn, Adresse og Telefonnummer. <br /><br />Bruk denne maltypen for å opprette moduler som ligner på standardmodulen Kontakt .',
            'type_sale' => 'Maltypen <b>Salg</b> gir deg mulighetsspesifike felter, som for eksempel Kilde, Stadie, Mengre og Sannsynlighet. <br /><br />Bruk denne maltypen for å opprette moduler som ligner på standardmodulen Muligheter.',
            'type_file' => 'Maltypen <b>Fil</b> gir deg dokumentspesifike felter, som for eksempel Filnavn, Dokumenttype og Publiseringsdato. <br /><br />Bruk denne maltypen for å opprette moduler som ligner på standardmodulen Dokumenter.',

        ),
        'dropdowns' => array(
            'default' => 'Alle <b>Nedtrekksmenyer</b> for applikasjonen er listet opp her. <br /><br />Nedtrekksmenyene kan bli brukt i nedtrekksfelter i hvilken som helst modul. <br /><br />For å gjøre endringer til en eksisterende nedtrekksmeny, klikk på nedtrekksmenynavnet. <br /><br />Klikk på <b>Legg til Nedtrekksmeny</b> for å opprette en ny nedtrekksmeny.',
            'editdropdown' => 'Nedtrekksmenylister kan bli brukt som standard eller tilpassede nedtrekksmenyfelter i hvilken som helst modul. <br /><br />Oppgi et <b>Navn</b> for nedtrekksmenylisten.<br /><br />Hvis noen språkpakker er installert i programmet, kan du velge <b>Språk</b> for å bruke elementer i listen. <br /><br />I feltet for <b>Elementnavn</b> legger du inn et navn for elementet i nedtrekksmenyen. Dette navnet vil ikke vises i nedtrekksmenyen som er synlig for brukere. <br /><br />I feltet for <b>Visningsetikett</b> legger du inn en etikett som skal være synlig for brukere.<br /><br />Etter du har lagt inn elementnavn og visningsnavn, klikk på <b>Legg til</b> for å legge til elementet i nedtrekksmenyen. <br /><br />For å omorganisere elementene i listen, dra og slipp elementene til den ønskede rekkefølgen. <br /><br />For å redigere visningsetiketten for et element, klikk på <b>Rediger ikon</b>, og skriv inn en ny visningsetikett. For å slette et element fra nedtrekksmenyen, klikk på <b>Slett-ikonet</b>.<br /><br />For å angre en endring som ble gjort på en visningsetikett, klikk på <b>Angre</b>. For å gjøre om en endring som ble angret, klikk på <b>Gjør om</b>.<br /><br />Klikk <b>Lagre</b> for å lagre nedtrekksmenyen.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Alle standardfeltene som kan bli vist i <b>Underpanelet</b> vises her. <br /><br /><b>Standard</b>-kolonnen inneholder feltene som vises i Underpanelet.<br /><br /><b>Gjemt</b>-kolonnen inneholder felter som kan bli lagt til i Standardkolonnen.'
        ,
            'savebtn' => 'Klikk <b>Lagre og Distribuer</b> for å lagre endringer du har gjort og gjøre disse aktive i modulen.',
            'historyBtn' => 'Klikk <b>Vis historikk</b>for å se og gjenopprette tidligere lagrede oppsett fra historikken.',
            'historyDefault' => 'Klikk <b>Gjenopprett Standard</b> for å gjenopprette et oppsett til det opprinnelige oppsettet.',
            'Hidden' => '<b>Gjemte</b> felter vises ikke i underpanelet.',
            'Default' => '<b>Standard</b> felter vises i underpanelet.',

        ),
        'listViewEditor' => array(
            'modify' => 'Alle feltene som kan bli vist i <b>ListeVisning</b> vises her. <br /><br /><b>Standard</b>-kolonnen inneholder feltene som vises i ListeVisning som standard.<br /><br /><b>Tilgjengelig</b>-kolonnen inneholder felter som brukeren kan velge i Søk for å opprette en tilpasset ListeVisning.<br /><br /><b>Gjemt</b>-kolonnen inneholder felter som kan bli lagt til i Standard- eller Tilgjengeligkolonnen.'
        ,
            'savebtn' => 'Klikk <b>Lagre og Distribuer</b> for å lagre endringer du har gjort og gjøre disse aktive i modulen.',
            'historyBtn' => 'Klikk <b>Vis Historikk</b> for å se og gjenopprette tidligere lagrede oppsett fra historikken. <br /><br /><b>Gjenopprett</b> i <b>Vis Historikk</b> gjenoppretter feltplasseringene i tidligere lagrede oppsett. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'historyDefault' => 'klikk <b>Gjenopprett Standard</b> for å gjenopprette et oppsett til det orginale oppsettet. <br /><br /><b>Gjenopprett Standard</b> gjenoppretter bare feltplassering i det orginale oppsettet. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'Hidden' => '<b>Gjemte</b> felter som ikke er tilgjengelig for brukere i ListeVisning.',
            'Available' => '<b>Tilgjengelige</b> felter vises ikke som standard, men kan bli lagt til i ListeVisning av brukere.',
            'Default' => '<b>Standard</b> felter vises i ListeVisning som ikke er tilpasset av brukere.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Alle feltene som kan bli vist i <b>ListeVisning</b> vises her. <br /><br /><b>Standard</b>-kolonnene inneholder felter som vises i ListeVisning som standard. <br /><br /><b>Gjemt</b>-kolonnen inneholder felter som kan legges til i Standard- eller Tilgjengelig-kolonnen.'
        ,
            'savebtn' => 'Klikk <b>Lagre og Distribuer</b> for å lagre endringer du har gjort og gjøre disse aktive i modulen.',
            'historyBtn' => 'Klikk <b>Vis Historikk</b> for å se og gjenopprette tidligere lagrede oppsett fra historikken. <br /><br /><b>Gjenopprett</b> i <b>Vis Historikk</b> gjenoppretter feltplasseringene i tidligere lagrede oppsett. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'historyDefault' => 'klikk <b>Gjenopprett Standard</b> for å gjenopprette et oppsett til det orginale oppsettet. <br /><br /><b>Gjenopprett Standard</b> gjenoppretter bare feltplassering i det orginale oppsettet. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'Hidden' => '<b>Gjemte</b> felter som ikke er tilgjengelig for brukere i ListeVisning.',
            'Default' => '<b>Standard</b> felter vises i ListeVisning som ikke er tilpasset av brukere.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Alle feltene som kan vises i <b>Filtrer</b>-skjemaet vises her. <br><br>Kolonnen <b>standard</b> inneholder feltene som vises i søkeskjemaet. <br/> <br/> Den <b>skjulte</b> kolonnen inneholder felt tilgjengelig for deg som administrator for å legge til søk.'
        ,
            'savebtn' => 'Klikk <b>Lagre og Distribuer</b> for å lagre alle endringer og gjøre disse aktive.',
            'Hidden' => '<b>Gjemte</b> felter vises ikke i Søket.',
            'historyBtn' => 'Klikk <b>Vis Historikk</b> for å se og gjenopprette tidligere lagrede oppsett fra historikken. <br /><br /><b>Gjenopprett</b> i <b>Vis Historikk</b> gjenoppretter feltplasseringene i tidligere lagrede oppsett. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'historyDefault' => 'klikk <b>Gjenopprett Standard</b> for å gjenopprette et oppsett til det orginale oppsettet. <br /><br /><b>Gjenopprett Standard</b> gjenoppretter bare feltplassering i det orginale oppsettet. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'Default' => '<b>Standard</b> felter vises i Søket.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>Oppsett</b>-området inneholder feltene som nå blir vist i <b>DetaljeVisning</b>. <br /><br /><b>Verktøykassen</b> inneholder <b>Papirkurven</<b>, feltene og oppsettelementer som kan bli lagt til i oppsettet. <br /><br />Gjør endringer i oppsettet ved å dra og slippe elementer og felter fra <b>Verktøykassen</b> til  <b>Oppsettet</b> og innad i oppsettet. <br /><br />For å fjerne et felt fra oppsettet, dra feltet til <b>Papirkurven</b>. Dette gjør at feltet blir fjernet fra oppsettet, og blir lagt tilbake i verktøykassen, slik at du kan dra det ut i oppsettet igjen senere.',
            'defaultquickcreate' => '<b>Oppsett</b>-området inneholder feltene som nå blir vist i <b>HurtigOppretting</b>sskjemaet. <br /><br />HurtigOprettingsskjemaet vises i underpaneler for modulen når Opprett-knappen blir klikket. <br /><br /><b>Verktøykassen</b> inneholder <b>Papirkurven</<b>, feltene og oppsettelementer som kan bli lagt til i oppsettet. <br /><br />Gjør endringer i oppsettet ved å dra og slippe elementer og felter fra <b>Verktøykassen</b> til  <b>Oppsettet</b> og innad i oppsettet. <br /><br />For å fjerne et felt fra oppsettet, dra feltet til <b>Papirkurven</b>. Dette gjør at feltet blir fjernet fra oppsettet, og blir lagt tilbake i verktøykassen, slik at du kan dra det ut i oppsettet igjen senere.',
            //this default will be used for edit view
            'default' => '<b>Oppsett</b>-området inneholder feltene som nå blir vist i <b>RedigeringsVisning</b>. <br /><br /><b>Verktøykassen</b> inneholder <b>Papirkurven</<b>, feltene og oppsettelementer som kan bli lagt til i oppsettet. <br /><br />Gjør endringer i oppsettet ved å dra og slippe elementer og felter fra <b>Verktøykassen</b> til  <b>Oppsettet</b> og innad i oppsettet. <br /><br />For å fjerne et felt fra oppsettet, dra feltet til <b>Papirkurven</b>. Dette gjør at feltet blir fjernet fra oppsettet, og blir lagt tilbake i verktøykassen, slik at du kan dra det ut i oppsettet igjen senere.',
            'saveBtn' => 'Klikk <b>Lagre</b> for å lagre endringene du har gjort i oppsettet siden forrige gang du lagret det. <br /><br />Endringene vil ikke bli vist i modulen før du Distribuerer de lagrede endringene.',
            'historyBtn' => 'Klikk <b>Vis Historikk</b> for å se og gjenopprette tidligere lagrede oppsett fra historikken. <br /><br /><b>Gjenopprett</b> i <b>Vis Historikk</b> gjenoppretter feltplasseringene i tidligere lagrede oppsett. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'historyDefault' => 'klikk <b>Gjenopprett Standard</b> for å gjenopprette et oppsett til det orginale oppsettet. <br /><br /><b>Gjenopprett Standard</b> gjenoppretter bare feltplassering i det orginale oppsettet. For å endre feltetiketter, klikk Rediger-ikonet ved siden av feltet.',
            'publishBtn' => 'Klikk <b>Lagre og Distribuer</b> for å lagre endringer du har gjort og gjøre disse aktive i modulen. <br /><br />Oppsettet vil øyeblikkelig bli vist i modulen.',
            'toolbox' => '<b>Verktøykassen</b> inneholder <b>Papirkurven</<b>, feltene og oppsettelementer som kan bli lagt til i oppsettet. <br /><br />Gjør endringer i oppsettet ved å dra og slippe elementer mellom <b>Verktøykassen</b> og <b>Oppsettet</b> og innad i oppsettet. <br /><br />Oppsettselementene er <b>Paneler</b> og <b>Rader</b>. Å legge til en ny rad eller et nytt panel skaper mer plass å legge til flere felter på. <br /><br />Dra og slipp hvilket som helst av feltene i Verktøykassen eller oppsettet til et område med et felt i for å bytte plass på de to feltene. <br /><br /> <b>Fyll</b>-feiltet lager et tomt område i oppsettet.',
            'panels' => '<b>Oppsett</b>sområdet gir en visning over hvordan oppsettet vil se ut i modulen etter endringene til oppsettet er distribuert. <br /><br />Du kan flytte felter, rader og paneler ved å dra og slippe dem der du vil ha dem. <br /><br />Fjern elementer ved å dra og slippe de i <b>Papirkurven</b> i Verktøykassen, elelr legg til nye elementer og felter ved å dra de fra <b>Verktøykassen</b> og slippe dem der du vil ha dem i oppsettet.',
            'delete' => 'Dra og slipp hvilket som helst element her for å fjerne det fra oppsettet.',
            'property' => 'Rediger etiketten for dette feltet. <br /><b>Fanerekkefølge</b> kontrollerer rekkefølgen på faner når man beveger seg mellom de med Tab-tasten på tastaturet.',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Feltene</b> som er tilgjengelig for denne modulen er listet her etter Feltnavn. <br /><br />Tilpassede felter opprettet for modulen vises over feltene som er tilgjengelig i modulen som standard. <br /><br />For å redigere et felt, klikk på <b>Feltnavnet</b>. <br /><br />For å opprette et nytt felt, klikk på <b>Legg til felt</b>',
            'mbDefault' => '<b>Feltene</b> som er tilgjengelig for modulen er listet opp her etter Feltnavn. <br /><br />For å konfigurere egenskapene for et felt, klikk på Feltnavnet. <br /><br />For å opprette et nytt felt, klikk på <b>Opprett Felt</b>. Etiketten, sammen med andre egenskaper for det nye feltet, kan bli endret etter du har opprettet et nytt felt ved å klikke på Feltnavnet. <br /><br />Etter modulen er distribuert, de nye feltene som er opprettet i Modulbygger blir ansett som standardfelter i den distribuerte modulen i Studio.',
            'addField' => 'Velg en <b>Datatype</b>for det nye feltet. Datatypen du velger her bestemmer hva slags tegn som kan bli skrevet i feltet. For eksempel kan bare heltall bli skrevet inn i felter som er av datatypen Heltall. <br /><br />Oppgi et <b>Navn</b>for feltet. Navnet må være alfanumerisk og kan ikke inneholde mellomrom, men understrek er lov. <br /><br /><b>Visningsetikett</b> er etiketten som vil vises for feltet i moduloppsettet. <b>Systemetikett</b> er brukt internt for å referere til feltet i kildekoden. <br /><br />Avhengig av hvilken datatype som er valgt for feltet, kan noen eller alle av de følgende egenskapene kan bli satt for feltet: <br /><br /><b>Hjelpetekst</b> vises midlertidig når brukeren holder musepekeren over feltet, og kan bli brukt til å be brukeren om å fylle inn mer informasjon dersom det er ønskelig. <br /><br /><b>Kommentartekst</b> blir bare vist i Studio og Modulbygger, og kan bli brukt til å beskrive feltet for administratorer. <br /><br /><b>Standardverdi</b> vil vises i skrivefeltet. Brukere kan skrive inn noe annet, eller bruke standardverdien. <br /><br /><b>Kryss av for <b>Mengdeoppdatering</b> for å kunne bruke Mengdeoppdateringsfunksjonen for feltet. <br /><br /><b>Maksimal lengde</b> bestemmer hvor maksimalt antall tegn brukere kan legge inn i feltet. <br /><br />Huk av i <b>Obligatorisk felt</b> for å gjøre feltet obligatorisk. Brukeren må oppgi en verdi for å få lagre en oppføring som inneholder dette feltet. <br /><br />Kryss av for <b>Rapporterbar</b> for å tillate at feltet blir brukt for filtere og for å vise data i Rapporter. <br /><br />Kryss av for <b>Tilsyn</b> for å følge med på endringer i feltet i Endringsloggen. <br /><br />Velg noe i <b>Importerbar</b>-feltet for å tillate, forby eller kreve av feltet blir importert i importeringsveilederen. <br /><br />Velg noe i <b>Slå sammen duplikater</b> for å slå på eller av duplikatsammenslåing. <br /><br />Ytterligere egenskaper kan bli satt for visse datatyper.',
            'editField' => 'Dette feltet kan bli tilpasset. <br /><br />Klikk <b>Klone</b> for å lage et nytt felt med akkurat de samme egenskapene.',
            'mbeditField' => 'Dette feltets <b>Visningsetikett</b> kan bli tilpasset. De resterende egenskapene kan ikke bli tilpasset. <br /><br />Klikk <b>Klone</b> for å lage et nytt felt med akkurat de samme egenskapene. <br /><br />For å fjerne et malfelt, så det ikke vises i modulen, fjern feltet fra det relevante <b>Oppsett</b>et.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Eksporter tilpassninger gjort i Studio ved å lage pakker som kan bli lastet opp i en annen instans av SuiteCRM gjennom <b>Modulbyggeren</b>. <br /><br />Først, oppgi et <b>Pakkenavn</b>. Du kan også oppgi <b>Utvikler</b> og <b>Beskrivelse</b> for pakken. <br /><br />Velg modulen(e) som har de tilpassningene du vil eksportere. Bare moduler med tilpassninger vil vises. <br /><br />Til slutt klikker du på <b>Eksporter</b> for å opprette en .zip-fil for pakken med de aktuelle tilpassningene du vil eksportere.',
            'exportCustomBtn' => 'Klikk på <b>Eksporter</b> for å opprette en .zip-fil for pakken med de aktuelle tilpassningene du vil eksportere.',
            'name' => 'Dette er <b>Pakkenavnet</b>. Dette vil vises under installasjon.',
            'author' => 'Dette er <b>Utvikleren</b> som vises under installasjon som navnet på den som opprettet pakken. Utvikleren kan enten være et individ eller en bedrift.',
            'description' => 'Dette er <b>Beskrivelsen</b> av pakken som vises under installasjon.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Velkommen til <b>Utviklerverktøyene</b>. <br /><br />Bruk disse verktøyene for å opprette og behandle standarg og tilpassede moduler og felter.',
            'studioBtn' => 'Bruk <b>Studio</b> for å tilpasse distribuerte moduler.',
            'mbBtn' => 'Bruk <b>Modulbyggeren</b> for å opprette nye moduler.',
            'sugarPortalBtn' => 'Bruk <b>SuiteCRM Portaltilpasseren</b> for å behandle og tilpasse SuiteCRM Portalen.',
            'dropDownEditorBtn' => 'Bruk <b>Redigeringsverktøyet for Nedtrekksmeny</b> for å legge til og endre nedtrekksmenyer og nedtrekksmenyfelter.',
            'appBtn' => 'Programmodus er der hvor du kan tilpasse ulike programegenskaper, som for eksempel hvor mange TPS-rapporter som vises på hjem-siden.',
            'backBtn' => 'Gå tilbake til forrige steg.',
            'studioHelp' => 'Bruk <b>Studio</b> for å bestemme hva og hvilken informasjon som skal vises i modulene.',
            'moduleBtn' => 'Klikk for å endre denne modulen.',
            'moduleHelp' => 'Komponentene du kan tilpasse for modulen vises her. <br /><br />Klikk på et ikon for å velge komponenten du vil endre.',
            'fieldsBtn' => 'Opprett og tilpass <b>Felter</b> for å lagre informasjon i modulen.',
            'labelsBtn' => 'Endre <b>Etiketter</b> som vises for felter og andre titler i modulen.',
            'relationshipsBtn' => 'Legg til nye, eller vis eksistererende <b>Forhold</b> for modulen.',
            'layoutsBtn' => 'Tilpass modulens <b>Oppsett</b>. Oppsettene er ulike visninger av modulen og feltene den inneholder. <br /><br />Du kan bestemme hvilke felter som vises og hvordan de er organisert i hvert oppsett.',
            'subpanelBtn' => 'Bestem hvilke felter som vises i <b>Underpaneler</b> i modulen.',
            'portalBtn' => 'Tilpass <b>Oppsett</b> for modulen som vises i <b>SuiteCRM Portalen</b>',
            'layoutsHelp' => '<b>Oppsettene</b> du kan tilpasse for modulen vises her. <br /><br />Oppsettene viser felter og feltdata. <br /><br />Klikk et ikon for å velge oppsettet du vil endre på.',
            'subpanelHelp' => '<b>Underpanelene</b> du kan tilpasse for modulen vises her. <br /><br />Klikk på et ikon for å velge modulen du vil endre.',
            'newPackage' => 'Klikk <b>Ny Pakke</b> for å opprette en ny pakke.',
            'exportBtn' => 'Klikk på <b>Eksporter Tilpassninger</b> for å opprette og laste ned en pakke som inneholder tilpassninger gjort i Studio for de aktuelle modulene.',
            'mbHelp' => 'Bruk <b>Modulbygger</b> for å opprette pakker som inneholder spesialtilpassede moduler basert på standardobjekter eller tilpassede objekter.',
            'viewBtnEditView' => 'Tilpass modulens <b>RedigeringsVisning</b>. <br /><br />RedigeringsVisningen er skjemaet som inneholder inndatafelter for å få tak i bruker-skrevet informasjon.',
            'viewBtnDetailView' => 'Tilpass modulens <b>DetaljeVisning</b>. <br /><br />DetaljeVisning viser lagret, bruker-skrevet feltdata.',
            'viewBtnDashlet' => 'Tilpass modulens <b>Dashlet</b>, inkludert dashletens ListeVisning og Søk. <br /><br />Det vil være mulig å legge dashleten til i sider i Hjem-modulen.',
            'viewBtnListView' => 'Tilpass modulens <b>ListeVisning</b>. <br /><br />Søkeresultater vises i ListeVisningen.',
            'searchBtn' => 'Tilpass modulens <b>Søk</b>. <br /><br />Bestem hvilke felter som kan bli brukt til å filtrere oppføringer som vises i ListeVisningen.',
            'viewBtnQuickCreate' => 'Tilpass modulens <b>HurtigOpprett</b>. <br /><br />Skjemaet for HurtigOpprett vises i underpaneler og i e-postmodulen.',
            'addLayoutHelp' => "For å opprette et tilpasset oppsett for en sikkerhetsgruppe, velg den passende sikkerhetsgruppen og oppsettet du vil kopiere som utgangspunkt.",
            'searchHelp' => 'Skjemaene <b>Filter</b> som kan tilpasses vises her. <br><br>Filter skjemaer inneholde feltene for å filtrere poster. <br> <br>Klikk en å velge oppsettet filter til å redigere.',
            'dashletHelp' => '<b>Dashlet</b>oppsett som kan tilpasses vises her. <br /><br />Det vil være mulig å legge til dashleten til sidene i Hjem-modulen.',
            'DashletListViewBtn' => '<b>Dashlet ListeVisning</b> viser oppføringer ut fra dashletsøkefiltrene.',
            'DashletSearchViewBtn' => '<b>Dashletsøk</b> filtrerer oppføringer for Dashlet ListeVisning.',
            'popupHelp' => '<b>Sprettopp</b>oppsettene som kan bli tilpasset vises her. <br />',
            'PopupListViewBtn' => '<b>Sprettopp ListeVisning</b> viser oppføringer basert på Sprettopp søkevisning.',
            'PopupSearchViewBtn' => '<b>Sprettoppsøk</b> viser oppføringer for Sprettopp ListeVisning.',
            'BasicSearchBtn' => 'Tilpass skjemaet <b>Rask Filter</b> som vises i kategorien raske Filters i filterområdet for modulen.',
            'AdvancedSearchBtn' => 'Tilpass skjemaet <b>Avansert Filter</b> som vises i kategorien Avansert Filter i filterområdet for modulen.',
            'portalHelp' => 'Behandle og tilpass <b>SuiteCRM Portalen</b>',
            'SPUploadCSS' => 'Last opp et <b>Stilark</b> for SuiteCRM Portalen.',
            'SPSync' => '<b>Synkroniser</b> tilpasninger til SuiteCRM Portalinstansen.',
            'Layouts' => 'Tilpass <b>Oppsett</b> for SuiteCRM Portalmoduler.',
            'portalLayoutHelp' => 'modulene i SuiteCRM Portalen vises i dette området. <br /><br />Velg en modul for å endre på <b>Oppsettet</b>',
            'relationshipsHelp' => 'Alle <b>Forholdene som finnes mellom denne modulen og alle andre distribuerte moduler vises her. <br /><br /><b>Forholdsnavnet</b> er et systemgenerert navn for forholdet. <br /><br /><b>Hovedmodulen</b> er modulen som eier forholdet. For eksempel, alle egenskapene for forholdene som Kontoer-modulen er hovedmodul for, lagres i Kontoer-databasetabellen. <br /><br /><b>Forholdstypen</b> beskriver forholdet mellom Hovedmodulen og den <b>Relaterte Modulen</b>. <br /><br />Klikk en kolonnetittel for å sortere kolonnen. <br /><br />Klikk en rad i forholdstabellen for å vise egenskapene tilknyttet forholdet. <<br /><br />Klikk <b>Legg til Forhold</b> for å opprette et nytt forhold. <br /><br />Forhold kan bli opprettet mellom to vilkårlige distribuerte moduler.',
            'relationshipHelp' => '<b>Forhold</b> kan bli opprettet mellom modulen og andre distribuerte moduler. <br /><br />Forhold er visuelt presentert gjennom underpaneler og relasjonsfelter i moduloppføringene. <br /><br />Velg et av de følgende <b>Forholdstypene</b> for modulen: <br /><br /><b>En-til-En</b> - Begge modulenes oppføringer vil inneholde relasjonsfelter. <br /><br /><b>En-til-Mange</b> - Hovedmodulens oppføring vil inneholde et underpanel, og den Relaterte Modulens oppføringer vil inneholde et relasjonsfelt. <br /><br /><b>Mange-til-Mange</b> - Begge modulene vil vise underpaneler. <br /><br />Velg modulen som skal være den <b>Relaterte Modulen</b> for dette forholdet. <br /><br />Dersom forholdstypen involverer underpaneler, velg underpanelvisningen for de passende modulene. <br /><br />Klikk <b>Lagre</b> for å opprette forholdet.',
            'convertLeadHelp' => 'Her kan du legge til moduler og konvertere oppsettskjermen og endre på eksisterende modulers moduloppsett. <br />Du kan endre på modulrekkefølgen ved å dra og slippe radene i tabellen. <br /><br />
<b>Modul:</b> Modulnavnet. <br /><br />
<b>Obligatorisk:</b> Obligatoriske moduler må bli opprettet eller valgt før oppføringen kan bli konvertert. <br /><br />
<b>Kopier Data:</b> - Dersom denne er krysset av, vil felt fra oppføringen bli kopiert til felter med samme navn i den nye oppføringen. <br /><br />
<b>Tillat valg</b> - Moduler med et relasjonsfelt i Kontakter kan bli valgt, istedenfor å bli opprettet i løpet av oppføringskonverteringen. <br /><br />
<b>Endre:</b> - Endre oppsett for denne modulen. <br /><br />
<b>Slett</b> - Fjern denne modulen fra konverteringsoppsettet. <br /><br />',


            'editDropDownBtn' => 'Rediger en Global Dropdown',
            'addDropDownBtn' => 'Legg til en ny Global Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Feltene</b> som er tilgjengelig for modulen er listet opp her etter Feltnavn. <br /><br />Modulmalen inneholder et utvalg forhåndsdefinerte felter. <br /><br />For å opprette et nytt felt, klikk på <b>Opprett Felt</b>. <br /><br />For å endre et felt, klikk på <b>Feltnavnet</b>. <br /><br />Etter modulen er distribuert, de nye feltene som er opprettet i Modulbygger blir ansett som standardfelter i den distribuerte modulen i Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Alle <b>Forholdene som finnes mellom denne modulen og alle andre distribuerte moduler vises her. <br /><br /><b>Forholdsnavnet</b> er et systemgenerert navn for forholdet. <br /><br /><b>Hovedmodulen</b> er modulen som eier forholdet. For eksempel, alle egenskapene for forholdene som Kontoer-modulen er hovedmodul for, lagres i Kontoer-databasetabellen. <br /><br /><b>Forholdstypen</b> beskriver forholdet mellom Hovedmodulen og den <b>Relaterte Modulen</b>. <br /><br />Klikk en kolonnetittel for å sortere kolonnen. <br /><br />Klikk en rad i forholdstabellen for å vise egenskapene tilknyttet forholdet. <br /><br />Klikk <b>Legg til Forhold</b> for å opprette et nytt forhold. <br /><br />Forhold kan bli opprettet mellom to vilkårlige distribuerte moduler.',
            'addrelbtn' => 'hold musen over hjelp for å få hjelp med å legge til forhold',
            'addRelationship' => '<b>Forhold</b> kan bli opprettet mellom modulen og andre distribuerte moduler. <br /><br />Forhold er visuelt presentert gjennom underpaneler og relasjonsfelter i moduloppføringene. <br /><br />Velg et av de følgende <b>Forholdstypene</b> for modulen: <br /><br /><b>En-til-En</b> - Begge modulenes oppføringer vil inneholde relasjonsfelter. <br /><br /><b>En-til-Mange</b> - Hovedmodulens oppføring vil inneholde et underpanel, og den Relaterte Modulens oppføringer vil inneholde et relasjonsfelt. <br /><br /><b>Mange-til-Mange</b> - Begge modulene vil vise underpaneler. <br /><br />Velg modulen som skal være den <b>Relaterte Modulen</b> for dette forholdet. <br /><br />Dersom forholdstypen involverer underpaneler, velg underpanelvisningen for de passende modulene. <br /><br />Klikk <b>Lagre</b> for å opprette forholdet.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Etiketter</b> for felter, og andre titler i modulen, kan bli endret. <br /><br />Endre etiketten ved å klikke i etikettfeltet, skriv en ny etikett og klikk på <b>Lagre</b>. <br /><br />Dersom noen språkpakker er installert for systemet, så kan du velge hvilket <b>Språk</b> du vil bruke for etikettene.',
            'saveBtn' => 'klikk på <b>Lagre</b> for å lagre alle endringer',
            'publishBtn' => 'Klikk på <b>Lagre og Distribuer</b> for å lagre alle endringer og gjøre disse aktive.',
        ),
        'portalSync' => array(
            'default' => 'Skriv inn <b>SuiteCRM Portal URLen</b> for portalinstansen for å oppdater. Klikk så på <b>Start</b>. <br /><br />Skriv så inn en gyldig kombinasjon av brukernavn og passord til SuiteCRM, og klikk deretter <b>Start Synkronisering</b>. <br /><br />Tilpassningene som gjort med <b>Oppsettene</b> til SuiteCRM Portalen, sammen med <b>Stilarket</b> hvis det finnes et, vil bli overført til den spesifiserte portalinstansen.',
        ),
        'portalStyle' => array(
            'default' => 'Du kan tilpasse SuiteCRM Portalens utseende ved å bruke et stilark. <br /><br />Velg et <b>Stilark</b> du vil laste opp. <br /><br />Stilarket vil bli integrert i SuiteCRM Portalen neste gang en synkronisering blir utført.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'For å komme i gang med et prosjekt, klikk på <b>Ny Pakke</b> for å opprette en ny pakke hvor du kan ha din(e) tilpassede modul(er). <br /><br />Hver pakke kan inneholde en eller flere moduler. <br /><br />For eksempel kan det hende at du vil opprette en pakke som er relatert til standardmodulen Kontoer. Eller, kanskje du vil opprette en pakke som inneholder flere nye moduler, som jobber sammen som et prosjekt, og som er er relatert til både hverandre og til andre moduler som allerede finnes i programmet.',
            'somepackages' => 'En <b>Pakke</b> fungerer som en beholder for tilpassede moduler som alle er del av et prosjekt. Pakken kan inneholde en eller flere tilpassede <b>Moduler</b> som kan være relatert til hverandre eller til andre moduler i programmet. <br /><br />Like etter du har opprettet en pakke for prosjektet ditt kan du opprette moduler for paken, eller du kan komme tilbake til Modulbygger senere for å gjøre deg ferdig med prosjektet. <br /><br />Når prosjektet er fullført kan du <b>Distribuere</b> pakken og dermed installere de tilpassede modulene i programmet.',
            'afterSave' => 'Pakken din burde inneholde minst en modul. Du kan opprette en eller flere tilpassede moduler for pakken. <br /><br />Klikk på <b>Ny Modul</b> for å opprette en tilpasset modul for denne pakken. <br /><br />Etter du har opprettet minst en modul, kan du publisere eller distribuere pakken, for å på den måten gjøre den tilgjengelig for din instans og/eller andre brukeres instanser. <br /><br />For å distribuere en pakke i et steg til din SuiteCRM-instans, klikk på <b>Distribuer</b>. <br /><br />Klikk på <b>Publiser</b> for å lagre pakken som en .zip-fil. Etter .zip-filen er lagret på systemet ditt, bruk <b>Modulbygger</b> for å laste opp og installere pakken i SuitCRM-instansen din. <br /><br />Du kan også sende .zip-filen til andre brukere, slik at de også kan laste den opp og installere den i deres egen SuiteCRM-instanser.',
            'create' => 'En <b>Pakke</b> fungerer som en beholder for tilpassede moduler som alle er del av et prosjekt. Pakken kan inneholde en eller flere tilpassede <b>Moduler</b> som kan være relatert til hverandre eller til andre moduler i programmet. <br /><br />Like etter du har opprettet en pakke for prosjektet ditt kan du opprette moduler for paken, eller du kan komme tilbake til Modulbygger senere for å gjøre deg ferdig med prosjektet.',
        ),
        'main' => array(
            'welcome' => 'Bruk <b>Utviklerverktøyene</b> for å opprette og behandle tilpassede og standard- moduler og felter. <br /><br />For å behandle moduler i programmet, klikk på <b>Studio</b>. <br /><br />For å opprette tilpassede moduler, klikk på <b>Modulbygger</b>.',
            'studioWelcome' => 'Du kan tilpasse alle installerte moduler, inkludert standardmoduler og modul-lastede objekter, i Studio.'
        ),
        'module' => array(
            'somemodules' => "Siden den pakken inneholder minst en modul, er det mulig å <b>Distribuere</b> modulene i denne pakken til denne SuiteCRM-instansen, eller <b>Publisere</b> pakken, slik at den kan bli installert i denne SuiteCRM-instansen gjennom <b>Modullasteren</b>. <br /><br />For å installere denne pakken direkte til din SuiteCRM-instans, klikk på <b>Distribuer</b>. <br /><br />For å opprette en .zip-fil for denne pakken som kan bli brukt til å laste den inn og installere den i denne SuiteCRM-instansen eller i andre SuiteCRM-instanser ved å bruke <b>Modullasteren</b>, klikk på <b>Publiser</b>. <br /><br />Du kan bygge moduler for pakken i ulike stadier, og publisere eller distribuere de når du er klar for å gjøre det. <br /><br />Etter du har publisert eller distribuert en pakke kan du fortsette å gjøre endringer av egenskapene for pakken og tilpasse modulene videre. Deretter kan du republisere eller redistribuere pakkene for å gjøre de siste endringene gjeldende.",
            'editView' => 'Her kan du endre de eksisterende feltene. Du kan fjerne hvilke som helst av de eksisterende feltene, eller legge til de tilgjengelige feltene i panelet til venstre.',
            'create' => 'Når du velger hvilken <b>Modultype</b> du vil opprette, tenk på hvilke felt du vil ha i modulen. <br /><br />Hver modulmal inneholder et utvalg felter som beskriver modultypen. <br /><br /><b>Enkel</b> - Gir deg enkle felt som vises i standardmoduler, som for eksempel Navn, Tildelt til, Team, Opprettelsesdato og Beskrivelse. <br /><br /><b>Selskap</b> - Gir deg organisasjonsspesifike felter, som for eksempel Selskapsnavn, Bransje og Fakturaadresse. Bruk denne malen for å opprette moduler som ligner på standardmodulen Kontoer. <br /><br /><b>Person</b> - Gir deg individspesifike felter, som for eksempel Tittel, Navn, Adresse og Telefonnummer. Bruk denne malen for å opprette moduler som ligner på standardmodulen Kontakt. <br /><br /><b>Feil</b> - Gir deg sak- og problemspesifike felter, som for eksempel Nummer, Status, Prioritet og Beskrivelse. Bruk denne malen for å opprette moduler som ligner på standardmodulene Sak og Feil. <br /><br />NB: Etter du har opprettet en modul kan du endre på feltetikettene, samt legge til egne felt og oppsett.',
            'afterSave' => 'Tilpass modulen til ditt bruk ved å endre og legge til felter, opprette forhold med andre moduler og organisere felter i oppsettet. <br /><br />For å vise oppsettfelter og behandle tilpassede felter, klikk deg inn på modulen og klikk på <b>Vis Felter</b>. <br /><br />For å opprette og behandle forhold mellom denne modulen og andre moduler, uansett om modulene eksisterer i programmet eller i denne pakken, klikk på <b>Vis Forhold</b>. <br /><br />For å endre moduloppsett, klikk på <b>Vis oppsett</b>. Du kan endre på oppsett for DetaljeVisning, RedigeringsVisning og ListeVisning for modulen, på akkurat samme måte som du kan gjøre for installerte moduler gjennom Studio. <br /><br />For å opprette en modul med de samme egenskapende som denne modulen, klikk <b>Kopier</b>. Du kan deretter tilpasse den nye modulen videre.',
            'viewfields' => 'Feltene i modulen kan bli tilpasset til ditt behov. <br /><br />Du kan ikke slette standardffelter, men du kan fjerne dem fra oppsettene, slik at de ikke vises for brukere. <br /><br />Du kan kjapt opprette nye felter som har lignende egenskaper ved å klikke på <b>Klone</b> i skjemaet for <b>Egenskaper</b>. Skriv inn de nye egenskapene, og klikk på <b>Lagre</b>. <br /><br />Det er anbefalt at du setter alle egenskapene for standardfelter og tilpassede felter før du publiserer, distribuerer og installerer pakken som inneholder den tilpassede modulen.',
            'viewrelationships' => 'Du kan opprette mange-til-mange-forhold mellom denne modulen og andre moduler i pakken, og/eller mellom denne modulen og moduler som allerede er installert i programmet. <br /><br />For å opprette en-til-mange og en-til-en-forhold, klikk på feltene <b>Relater</b> og <b>Fleksibel Relasjon</b> for modulene.',
            'viewlayouts' => 'Du kan kontrollere hvilke felter som er tilgjengelige for å hente ut data i <b>RedigeringsVisning</b>. Du kan også kontrollere hvilken data som blir vist i DetaljeVisning</b>. Disse to visningene trenger ikke nødvendigvis å være like. <br /><br />Skjemaet for HurtigOpprtett vises når man klikker på <b>Opprett</b> i en moduls underpanel. Som standard er skjemaoppsettet for <b>HurtigOpprett</b> identisk med <b>RedigeringsVisning</b>, men dette kan endres på slik at det i HurtigOpprett vises færre og/eller andre felter enn i RedigeringsVisning. <br /><br />Du kan gjøre innstillinger for modulsikkerhet ved å bruke Oppsettstilpassning sammen med <b>Rollebehandling</b>.<br /><br />',
            'existingModule' => 'Etter du har opprettet og tilpasset denne modulen, så kan du opprette ytterligere moduler eller returnere til pakken for å <b>Publisere</b> eller <b>Distribuere</b> pakken. <br /><br />For å opprette ytterligere moduler, klikk på <b>Kopier</b> for å opprette en modul med de samme egenskapene som denne modulen, eller naviger tilbake til pakken og klikk på <b>Ny modul</b>. <br /><br />Når du er klar til å <b>Publisere</b> og <b>Distribuere</b> pakken med denne modulen, naviger tilbake til pakken med denne modulen i, og utfør disse handlingene. Du kan publisere og distribuere alle pakker som inneholder minst én modul.',
            'labels' => 'Etikettene for standardfelter kan bli endre. Å endre feltetiketter vil ikke påvirke data som er lagret i feltene.',
        ),
        'listViewEditor' => array(
            'modify' => 'Det er tre kolonner til venstre. Standardkolonnen inneholder felt som vises i en standard listevisning. Tilgjengelig-kolonnen inneholder felt som en bruker kan velge å bruke for å opprette en tilpasset visning. Gjemt-kolonnen viser administratorer felt som kan legges til i Standard- eller Tilgjengelig-kolonnene.',
            'savebtn' => 'Klikk <b>Lagre</b> for å lagre alle endringer og gjøre disse aktive.',
            'Hidden' => 'Gjemte felter er felter som ikke er tilgjengelig for brukere i ListeVisning.',
            'Available' => 'Tilgjengelige felter vises ikke som standard men kan bli slått på av brukere.',
            'Default' => 'Standardfelter vises til brukere som ikke har opprettet noen tilpassede oppsett for ListeVisning.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Det er to kolonner til venstre. Standardkolonnen inneholder felt som vises i en standard listevisning, mens gjemt-kolonnen inneholder felter som er tilgjengelige for administratorer.',
            'savebtn' => 'Klikk <b>Lagre og Distribuer</b> for å lagre alle endringer og gjøre disse aktive.',
            'Hidden' => 'Gjemte felter er felter som ikke er tilgjengelig for brukere i Søkevisning.',
            'Default' => 'Standardfelter vil bli vist i Søkevisningen.'
        ),
        'layoutEditor' => array(
            'default' => 'Det er to kolonner til venstre. I kolonnen til høyre, med etiketten Nåværende Oppsett eller Oppsettsvisning, vil du se endringer til moduloppsettet. Kolonnen til venstre, med tittelen Verktøykasse, inneholder nyttige elementer og verktøy du kan bruke når du gjør endringer i oppsettet. <br /><br />Dersom oppsettområdet har etiketten Nåværende Oppsett, så jobber du på en kopi av oppsettet som nå brukes av modulen. <br /><br />Dersom oppsettområdet har etiketten Oppsettsvisning jobber du på en kopi opprettet tidligere ved å klikke på Lagre-knappen, og som muligens allerede har blitt endret fra versjonen brukere ser av denne modulen.',
            'saveBtn' => 'Ved å klikke på denne knappen lagrer du oppsettet, slik at du kan ta vare på forandringene du har gjort. Når du kommer tilbake til denne modulen skal oppsettet være slik det var da du lagret det. Men legg merke til at brukere ser ikke forandringene i oppsettet før du klikker på Lagre og Publiser.',
            'publishBtn' => 'Klikk på denne knappen for å distribuere oppsettet. Dette betyr at det nye oppsettet øyeblikkelig blir tilgjengelig for brukere av denne modulen.',
            'toolbox' => 'Verktøykassen inneholder en rekke nyttige verktøy for å endre oppsett, blant annet en papirkurv, noen ekstra elementer og alle tilgjengelige felter. Du kan dra og slippe disse fra verktøykassen til oppsettet.',
            'panels' => 'Dette området gir en visning over hvordan oppsettet vil se ut i modulen etter endringene til oppsettet er distribuert. <br /><br />Du kan flytte felter, rader og paneler ved å dra og slippe dem der du vil ha dem. Fjern elementer ved å dra og slippe de i Papirkurven i Verktøykassen, eller legg til nye elementer og felter ved å dra de fra Verktøykassen og slippe dem der du vil ha dem i oppsettet.'
        ),
        'dropdownEditor' => array(
            'default' => 'Det er to kolonner til venstre. I kolonnen til høyre, med etiketten Nåværende Oppsett eller Oppsettsvisning, vil du se endringer til moduloppsettet. Kolonnen til venstre, med tittelen Verktøykasse, inneholder nyttige elementer og verktøy du kan bruke når du gjør endringer i oppsettet. <br /><br />Dersom oppsettområdet har etiketten Nåværende Oppsett, så jobber du på en kopi av oppsettet som nå brukes av modulen. <br /><br />Dersom oppsettområdet har etiketten Oppsettsvisning jobber du på en kopi opprettet tidligere ved å klikke på Lagre-knappen, og som muligens allerede har blitt endret fra versjonen brukere ser av denne modulen.',
            'dropdownaddbtn' => 'Klikk på denne knappen for å legge til et nytt element i nedtrekksmenyen.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Tilpassninger gjort i Studio i denne instansen kan bli pakket ned og lastet opp i en annen instans av SuiteCRM. <br /><br />Først, oppgi et <b>Pakkenavn</b>. Du kan også oppgi <b>Utvikler</b> og <b>Beskrivelse</b> for pakken. <br /><br />Velg modulen(e) som har de tilpassningene du vil eksportere. (Bare moduler med tilpassninger vil vises.) <br /><br />Til slutt klikker du på <b>Eksporter</b> for å opprette en .zip-fil for pakken med de aktuelle tilpassningene. .zip-filen kan bli lastet opp i en annen instans via <b>Modullaster</b>.',
            'exportCustomBtn' => 'Klikk på <b>Eksporter</b> for å opprette en .zip-fil for pakken med de aktuelle tilpassningene du vil eksportere.',
            'name' => '<b>Pakkenavnet</b> vil vises i Modullaster etter pakken er lastet opp for installasjon i Studio.',
            'author' => '<b>Utvikleren</b> er den eller de som utviklet pakken. Utvikleren kan enten være et individ eller en bedrift. <br><br>Utvikleren vil bli vist i Modullaster etter pakken er lastet opp for installasjon i Studio.',
            'description' => '<b>Beskrivelsen</b> vil vises i Modullaster etter pakken er lastet opp for installasjon i Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Velkommen til <b>Utviklerverktøyene</b>. <br /><br />Bruk disse verktøyene for å opprette og behandle standarg og tilpassede moduler og felter.',
            'studioBtn' => 'Bruk <b>Studio</b> for å tilpasse installerte moduler. Dette kan gjøres ved å endre på feltoppsettet, endre hvilke felter som er tilgjengelige og opprette nye tilpassede datafelter.',
            'mbBtn' => 'Bruk <b>Modulbyggeren</b> for å opprette nye moduler.',
            'appBtn' => 'Bruk programmodusfor å tilpasse ulike programegenskaper, som for eksempel hvor mange TPS-rapporter som vises på hjem-siden.',
            'backBtn' => 'Gå tilbake til forrige steg.',
            'studioHelp' => 'Bruk <b>Studio</b> for å tilpasse installerte moduler.',
            'moduleBtn' => 'Klikk for å endre denne modulen.',
            'moduleHelp' => 'Velg en modulkomponent å redigere.',
            'fieldsBtn' => 'Endre på hvilken informasjon som blir lagret i modulen ved å kontrollere <b>Feltene</b> i modulen. <br /><br />Du kan endre på, og opprette, tilpassede felter her.',
            'labelsBtn' => 'klikk på <b>Lagre</b> for å lagre disse etikettene.',
            'layoutsBtn' => 'Tilpass <b>Oppsett</b> for RedigeringsVisning, DetaljeVisning, ListeVisning og Søkevisning.',
            'subpanelBtn' => 'Endre på hvilken informasjon som blir vist i denne modulens underpaneler',
            'layoutsHelp' => 'Velg et <b>Oppsett</b> du vil endre på. <br /><br />For å endre på oppsettet hvor man fyller inn data, klikk på <b>RedigeringsVisning</b>. <br /><br />For å endre på oppsettet hvor man data  vises, klikk på <b>DetaljeVisning</b>. <br /><br />For å endre på hvilke koloner som vises i lister, klikk på <b>ListeVisning</b>. <br /><br />For å endre på Enkelt og Avansert Søk, klikk på <b>Søk</b>.',
            'subpanelHelp' => 'Velg <b>Underpanelet</b> du vil endre på.',
            'searchHelp' => 'Velg <b>Søkeoppsettet</b> du vil endre på.',
            'newPackage' => 'Klikk <b>Ny Pakke</b> for å opprette en ny pakke.',
            'mbHelp' => '<b>Velkommen til Modulbygger.</b> <br /><br />Bruk <b>Modulbygger</b> for å opprette pakker med tilpassede moduler, basert på standardmoduler, andre tilpassede moduler eller tilpassede objekter. <br /><br /> For å komme i gang, klikk på <b>Ny Pakke</b> for å opprette en ny pakke, eller velg en pakke du vil jobbe med. En <b>Pakke</b> fungerer som en beholder for en eller flere tilpassede moduler, som alle er del av et prosjekt. Hver pakke kan inneholde en eller flere moduler som er relatert til andre moduler i samme pakke, eller til andre moduler i programmet.<br /><br />For eksempel kan det hende at du vil opprette en pakke som er relatert til standardmodulen Kontoer. Eller, kanskje du vil opprette en pakke som inneholder flere nye moduler, som jobber sammen som et prosjekt, og som er er relatert til både hverandre og til andre moduler som allerede finnes i programmet.',
            'exportBtn' => 'Klikk på <b>Eksporter Tilpassninger</b> for å opprette en pakke som inneholder tilpassninger gjort i Studio for de aktuelle modulene.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Redigeringsverktøy for nedtrekksmenyer',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modulverktøy',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Redigeringsverktøy for nedtrekksmenyer',
    'LBL_DEVELOPER_TOOLS' => 'Utviklerverktøy',
    'LBL_SUITEPORTAL' => 'Redigering av SuiteCRM-portalen',
    'LBL_PACKAGE_LIST' => 'Pakkeliste',
    'LBL_HOME' => 'Forside',
    'LBL_NONE' => '-Ingen-',
    'LBL_DEPLOYE_COMPLETE' => 'Ferdig distribuert',
    'LBL_DEPLOY_FAILED' => 'En feil har oppstått under distribusjons prosessen, det kan hende at pakken ikke er riktig installert',
    'LBL_AVAILABLE_SUBPANELS' => 'Tilgjengelige underpanel',
    'LBL_ADVANCED' => 'Avansert',
    'LBL_ADVANCED_SEARCH' => 'Avansert Filter',
    'LBL_BASIC' => 'Grunnleggende',
    'LBL_BASIC_SEARCH' => 'Hurtigfilter',
    'LBL_CURRENT_LAYOUT' => 'Oppsett',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DASHLET' => 'dashlet',
    'LBL_DASHLETLISTVIEW' => 'dashlet listevisning',
    'LBL_POPUP' => 'PopupVisning',
    'LBL_POPUPLISTVIEW' => 'Popup listevisning',
    'LBL_POPUPSEARCH' => 'Popup søk',
    'LBL_DASHLETSEARCHVIEW' => 'dashlet søk',
    'LBL_DETAILVIEW' => 'Detaljert',
    'LBL_DROP_HERE' => '[Slipp her]',
    'LBL_EDIT' => 'Rediger',
    'LBL_EDIT_LAYOUT' => 'Rediger oppsett',
    'LBL_EDIT_FIELDS' => 'Rediger felter',
    'LBL_EDITVIEW' => 'Redigering',
    'LBL_FILLER' => '(fyll)',
    'LBL_FIELDS' => 'Felt',
    'LBL_FAILED_TO_SAVE' => 'Mislykkes i å lagre',
    'LBL_FAILED_PUBLISHED' => 'Mislykkes i å publisere',
    'LBL_HOMEPAGE_PREFIX' => 'Min',
    'LBL_LAYOUT_PREVIEW' => 'Oppsett forhåndsvisning',
    'LBL_LAYOUTS' => 'Oppsett',
    'LBL_LISTVIEW' => 'Liste',
    'LBL_MODULES' => 'Moduler',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Ny pakke',
    'LBL_NEW_PANEL' => 'Nytt panel',
    'LBL_NEW_ROW' => 'Ny rekke',
    'LBL_PACKAGE_DELETED' => 'Pakke slettet',
    'LBL_PUBLISHING' => 'Publiserer...',
    'LBL_PUBLISHED' => 'Publisert',
    'LBL_SELECT_FILE' => 'Velg fil',
    'LBL_SUBPANELS' => 'Underpanel',
    'LBL_SUBPANEL' => 'Underpanel',
    'LBL_SUBPANEL_TITLE' => 'Tittel:',
    'LBL_SEARCH_FORMS' => 'Filtrer',
    'LBL_SEARCH' => 'Søk',
    'LBL_SEARCH_BUTTON' => 'Søk',
    'LBL_FILTER' => 'Filtrer',
    'LBL_TOOLBOX' => 'Verktøykasse',
    'LBL_QUICKCREATE' => 'Opprett enkelt',
    'LBL_EDIT_DROPDOWNS' => 'Rediger en Global Dropdown',
    'LBL_ADD_DROPDOWN' => 'Legg til en ny Global Dropdown',
    'LBL_BLANK' => '-blank-',
    'LBL_TAB_ORDER' => 'Tab Rekkefølge',
    'LBL_TABDEF_TYPE' => 'Visningstype',
    'LBL_TABDEF_TYPE_HELP' => 'Velg hvordan denne seksjonen skal se ut. Dette valget har bare noen effekt dersom du har slått på fanevisning for denne visningen.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Fane',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panelet',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Velg Panel for at dette panelet skal vises i layouten. Velg Fane for å ha dette banelet vist i en separat fane i layouten. Dersom Fane er valgt for et panel, påfølgende paneler satt til å bli vist som Panel vil bli vist inni fanen. <br />En ny Fane vil bli startet for det neste panelet som har Fane valgt. Dersom Fane er valgt for et panel under det første panelen, det første panelet vil nødvendigvis være en Fane.',
    'LBL_TABDEF_COLLAPSE' => 'Legg sammen',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Velg for å gjøre standardtilstanden for dette panelet sammenlagt.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Navn',
    'LBL_DROPDOWN_LANGUAGE' => 'Språk:',
    'LBL_DROPDOWN_ITEMS' => 'Dropdown objekter',
    'LBL_DROPDOWN_ITEM_NAME' => 'Objektnavn',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Vis etikett',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synkroniser til DetaljeVisning',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Velg dette for å synkronisere denne RedigeringsVisningen til den tilsvarende DetaljeVisningen. Felter og feltplassering i<br>RedigeringsVisning vil bli synkronisert til og lagret til DetaljeVisningen automatisk når du klikker Lagre eller Lagre og Distribuer<br>i RedigeringsVisningen.Det vil ikke lenger være mulig å gjøre layoutendringer i DetaljeView',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Denne DetaljeVisningen er synkronisert med den tilsvarende RedigeringsVisningen. </br>Felter og feltplasseringer i denne DetaljeVisningen tilsvarer feltene og feltplasseringene i RedigeringsVisningen. <br>Endringer til DetaljeVisningen kan ikke bli lagret eller distribuert fra denne siden. Gjør endringer eller slå av synkronisering i RedigeringsVisningen.',
    'LBL_COPY_FROM_EDITVIEW' => 'Kopier fra RedigeringsVisning',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Verdier er nødvendige for både Navn og Display Label. For å legge til et tomt element klikker du Legg til uten å angi noen verdier for Navn og Display Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Nøklen eksisterer allerede i listen',
    'LBL_NO_SAVE_ACTION' => 'Kunne ikke finne handlingen for å lagre denne visningen.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: ugyldig dokument',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primär modul',
    'LBL_CUSTOM_RELATIONSHIPS' => '*forhold opprettet i studio eller Modul bygger',
    'LBL_RELATIONSHIPS' => 'Forhold',
    'LBL_RELATIONSHIP_EDIT' => 'Rediger forhold',
    'LBL_REL_NAME' => 'Navn',
    'LBL_REL_LABEL' => 'Etikett',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Relaterte moduler',
    'LBL_NO_RELS' => 'Ingen forhold',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Valgfri tilstand',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Kolonne',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'verdi',
    'LBL_SUBPANEL_FROM' => 'Underpanel fra',
    'LBL_RELATIONSHIP_ONLY' => 'Ingen synlige elementer vil bli opprettet for dette forholdet, siden det er et tidligere- eksisterende forhold mellom disse to modulene.',
    'LBL_ONETOONE' => 'En til en',
    'LBL_ONETOMANY' => 'En til mange',
    'LBL_MANYTOONE' => 'Mange til En',
    'LBL_MANYTOMANY' => 'Mange til mange',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Velg en modul å redigere',
    'LBL_QUESTION_LAYOUT' => 'Velg et oppsett å redigere',
    'LBL_QUESTION_SUBPANEL' => 'Velg et underpanel å redigere',
    'LBL_QUESTION_SEARCH' => 'Velg et søkeoppsett å redigere.',
    'LBL_QUESTION_MODULE' => 'Velg en modulkomponent å redigere.',
    'LBL_QUESTION_PACKAGE' => 'Velg en pakke å redigere, eller opprett en ny pakke.',
    'LBL_QUESTION_EDITOR' => 'Velg et verktøy',
    'LBL_QUESTION_DASHLET' => 'Velg et dashletoppsett som skal redigeres.',
    'LBL_QUESTION_POPUP' => 'Velg en popup visning for redigering',
//CUSTOM FIELDS
    'LBL_NAME' => 'Navn',
    'LBL_LABELS' => 'Merker',
    'LBL_MASS_UPDATE' => 'Masseoppdatering',
    'LBL_DEFAULT_VALUE' => 'Standardverdi',
    'LBL_REQUIRED' => 'Nødvendig',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'TILPASSET',
    'LBL_HDEFAULT' => 'STANDARD',
    'LBL_LANGUAGE' => 'Språk:',
    'LBL_CUSTOM_FIELDS' => '* felt opprettet i Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Rediger merker',
    'LBL_SECTION_PACKAGES' => 'Pakker',
    'LBL_SECTION_PACKAGE' => 'Pakker',
    'LBL_SECTION_MODULES' => 'Moduler',
    'LBL_SECTION_DROPDOWNS' => 'Nedtrekksmenyer',
    'LBL_SECTION_PROPERTIES' => 'Egenskaper',
    'LBL_SECTION_DROPDOWNED' => 'Rediger Dropdown',
    'LBL_SECTION_HELP' => 'Hjelp',
    'LBL_SECTION_MAIN' => 'Hoved',
    'LBL_SECTION_FIELDEDITOR' => 'Rediger felt',
    'LBL_SECTION_DEPLOY' => 'Distribuer',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Standard',
    'LBL_HIDDEN' => 'Skjult',
    'LBL_AVAILABLE' => 'Tilgjengelig',
    'LBL_LISTVIEW_DESCRIPTION' => 'Det er tre kolonner vist under. <b>Standard</b>kolonnen inneholder felt som er vist i en standard listevisning. <b>Tilleggs</b>kolonnen inneholder felt som en bruker kan velge å bruke for å opprette en tilpasset visning. <b>Tilgjengelige</b> kolonnen viser for deg som en administrator, felt som kan legges til som standard eller tilleggskolonner til bruk for brukerne.',
    'LBL_LISTVIEW_EDIT' => 'Listevisnings-redigerer',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Forhåndsvisning',
    'LBL_MB_RESTORE' => 'Gjenopprett',
    'LBL_MB_DELETE' => 'Slett',
    'LBL_MB_DEFAULT_LAYOUT' => 'Standard oppsett',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Legg til',
    'LBL_BTN_SAVE' => 'Lagre',
    'LBL_BTN_SAVE_CHANGES' => 'Lagre endringer',
    'LBL_BTN_DONT_SAVE' => 'Forkast endringene',
    'LBL_BTN_CANCEL' => 'Avbryt',
    'LBL_BTN_CLOSE' => 'Avslutt',
    'LBL_BTN_SAVEPUBLISH' => 'Lagre & ta i bruk',
    'LBL_BTN_CLONE' => 'Klone',
    'LBL_BTN_ADDROWS' => 'Leg til rader',
    'LBL_BTN_ADDFIELD' => 'Legg til felt',
    'LBL_BTN_ADDDROPDOWN' => 'Legg til Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Sorter stigende',
    'LBL_BTN_SORT_DESCENDING' => 'Sorter synkende',
    'LBL_BTN_EDLABELS' => 'Rediger merker',
    'LBL_BTN_UNDO' => 'Åpne',
    'LBL_BTN_REDO' => 'Gjenopprett',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Legg til tilpasset felt',
    'LBL_BTN_EXPORT' => 'Eksporter tilpassninger',
    'LBL_BTN_DUPLICATE' => 'Duplikat',
    'LBL_BTN_PUBLISH' => 'publisér',
    'LBL_BTN_DEPLOY' => 'Distribuer',
    'LBL_BTN_EXP' => 'Eksporter',
    'LBL_BTN_DELETE' => 'Slett',
    'LBL_BTN_VIEW_LAYOUTS' => 'Vis oppsett',
    'LBL_BTN_VIEW_FIELDS' => 'Vis felt',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Vis forhold',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Ĺegg til forhold',
    'LBL_BTN_RENAME_MODULE' => 'Endre modulnavn',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Feil: Felt eksisterer allerede',
    'ERROR_INVALID_KEY_VALUE' => "Feil: Ugyldig nøkkelverdi: [&#39;]",
    'ERROR_NO_HISTORY' => 'Ingen historiefiler funnet',
    'ERROR_MINIMUM_FIELDS' => 'Oppsettet må inneholde minst ett felt',
    'ERROR_GENERIC_TITLE' => 'Det oppsto en feil',
    'ERROR_REQUIRED_FIELDS' => 'Er du sikker på at du vil fortsette? Følgende påkrevde felt mangler i opppsettet.',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Pakkenavn:',
    'LBL_MODULE_NAME' => 'Modulnavn:',
    'LBL_AUTHOR' => 'Forfatter:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_KEY' => 'Nøkkel:',
    'LBL_ADD_README' => 'lesmeg',
    'LBL_LAST_MODIFIED' => 'Sist endret:',
    'LBL_NEW_MODULE' => 'Ny modul',
    'LBL_LABEL' => 'Merke:',
    'LBL_LABEL_TITLE' => 'Etikett',
    'LBL_WIDTH' => 'Bredde',
    'LBL_PACKAGE' => 'Pakke:',
    'LBL_TYPE' => 'Type:',
    'LBL_NAV_TAB' => 'Navigasjonsfane',
    'LBL_CREATE' => 'Ny',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Vis',
    'LBL_HISTORY' => 'Se på historikk',
    'LBL_RESTORE_DEFAULT' => 'Gjenopprett standard',
    'LBL_ACTIVITIES' => 'Aktiviteter',
    'LBL_NEW' => 'Ny',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'Dette er underpanelet som vil bli vist i din modul',
    'LBL_MSUB' => 'Dette er underpanelet din modul tilbyr til den relaterte modulen for visning',
    'LBL_MB_IMPORTABLE' => 'Importerer',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[pakke]] ble slettet',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Eksporter tilpassninger',
    'LBL_EC_NAME' => 'Pakkenavn:',
    'LBL_EC_AUTHOR' => 'Forfatter:',
    'LBL_EC_DESCRIPTION' => 'Beskrivelse:',
    'LBL_EC_CHECKERROR' => 'Vennligst velg en modul.',
    'LBL_EC_CUSTOMFIELD' => 'Tilpassede felt',
    'LBL_EC_CUSTOMLAYOUT' => 'tilpassede oppsett',
    'LBL_EC_NOCUSTOM' => 'Ingen moduler har blitt tilpasset.',
    'LBL_EC_EMPTYCUSTOM' => 'har tomme tilpassninger.',
    'LBL_EC_EXPORTBTN' => 'Eksporter',
    'LBL_MODULE_DEPLOYED' => 'Modulen har blitt distribuert.',
    'LBL_UNDEFINED' => 'udefinert',
    'LBL_EC_VIEWS' => 'customized view(s)',
    'LBL_EC_SUITEFEEDS' => 'customized Feed(s)',
    'LBL_EC_DASHLETS' => 'customized Dashlet(s)',
    'LBL_EC_CSS' => 'customized css(s)',
    'LBL_EC_TPLS' => 'customized tpls(s)',
    'LBL_EC_IMAGES' => 'customized image(s)',
    'LBL_EC_JS' => 'customized js(s)',
    'LBL_EC_QTIP' => 'customized qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Fikk ikke tak i data',
    'LBL_AJAX_LOADING' => 'laster...',
    'LBL_AJAX_DELETING' => 'Sletter...',
    'LBL_AJAX_BUILDPROGRESS' => 'Utfører bygging...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Distribuerer...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operasjonen fullførte uten feil',
    'LBL_AJAX_LOADING_TITLE' => 'Jobber...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Vent litt, laster inn...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Er du sikker på at du vil fjerne pakken? Dette vil permanent slette alle filer i tilknytning til denne pakken.',
    'LBL_JS_REMOVE_MODULE' => 'Er du sikker på at du vil fjerne denne modulen? Det vil slette alle filer knyttet til denne modulen.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Alle tilpasninger som er gjort i Studio vil bli overskrevet når denne modulen blir gjenbrukt. Er du sikker på at du vil fortsette?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Distribuerer pakke',
    'LBL_JS_VALIDATE_NAME' => 'Name - Must be alphanumeric with no spaces and starting with a letter',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Pakkenavnet finnes allerede',
    'LBL_JS_VALIDATE_KEY' => 'Nøkkel - Må være alfanumerisk',
    'LBL_JS_VALIDATE_LABEL' => 'Skriv inn en etikett som skal brukes som visningsnavn for denne modulen',
    'LBL_JS_VALIDATE_TYPE' => 'Velg modultypen du vil bygge fra listen over',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etikett - Legg til en etikett som vises over underpanelet',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Hvis dette egendefinerte feltet slettes, slettes både det egendefinerte feltet og alle data relatert til det egendefinerte feltet i databasen. Feltet vil ikke lenger vises i noen moduloppsett. \\n\\n Vil du fortsette?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Er du sikker på at du vil slette dette forholdet?',
    'LBL_CONFIRM_DONT_SAVE' => 'Endringer har blitt gjort siden din siste lagring, vil du lagre?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'lagre endringer?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data kan bli avkortet, og dette kan ikke omgjøres, er du sikker på at du vil fortsette?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Velg riktige data basert på den datatypen som skal legges inn i feltet.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'Tilbakestill',
    'LBL_RESET_MODULE' => 'Reset modul',
    'LBL_REMOVE_CUSTOM' => 'Fjern kundetilpasning',
    'LBL_CLEAR_RELATIONSHIPS' => 'Entydig sammenheng',
    'LBL_RESET_LABELS' => 'Reset etiketter',
    'LBL_RESET_LAYOUTS' => 'Reset oppsett',
    'LBL_REMOVE_FIELDS' => 'Fjern egendefinerte felt',
    'LBL_CLEAR_EXTENSIONS' => 'Fjern utvidelser',
    'LBL_HISTORY_TIMESTAMP' => 'TidsStempel',
    'LBL_HISTORY_TITLE' => 'Historie',

    'fieldTypes' => array(
        'varchar' => 'TekstFelt',
        'int' => 'Heltall',
        'float' => 'Flyttall',
        'bool' => 'Avkryssningsboks',
        'enum' => 'Nedtrekksmeny',
        'dynamicenum' => 'Dynamisk dropdown',
        'multienum' => 'Flervalg',
        'date' => 'Dato',
        'phone' => 'Telefonnr:',
        'currency' => 'Valuta:',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Knytt til',
        'address' => 'Adresse:',
        'text' => 'TekstOmråde',
        'url' => 'URL:',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datotid',
        'decimal' => 'Desimaltall',
        'image' => 'Bilde',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Ofte brukte etiketter",
        "all" => "Alle etiktter",
    ),

    'parent' => 'Flex forbindelse',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Du har valgt dette elementet for å fjerne det fra dropdown listen. Alle dropdown-felt som benytter  denne listen med verdien av dette elementet vil ikke lenger vise verdien, og verdien kan ikke lenger velges fra nedtrekksmenyfeltene.",

    'LBL_ALL_MODULES' => 'Alle moduler',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relatert {1} ID)',
);
