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
    'LBL_LOADING' => 'Încărcare' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ascundeți Opţiuni' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ștergere' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Furnizați un <b>Nume</b> pentru pachetul. Numele pe care îl introduceți trebuie să fie alfanumeric și nu conțină spații. (Exemplu: HR_Management)<br/><br/>Puteți furniza informații despre <b>Autor</b> și <b>Descriere</b> pentru pachet.<br/><br/>Faceți clic pe <b>Salvare</b> pentru a crea pachet.',
            'modify' => 'Proprietățile și acțiunile posibile pentru <b>Pachet</b> apar aici.<br><br>Puteți modifica <b>Numele</b>, <b>Autorul</b> și <b>Descrierea</b> din pachet, precum și vizualizarea și personalizarea tuturor modulelor conținute în pachet.<br><br>Faceți clic pe <b>Modulul nou</b> pentru a crea un modul pentru pachet.<br><br>În cazul în care pachetul conține cel puțin un modul, puteți <b>Publica</b> pachetul și <b>Implementează</b>, precum și <b>Export</b> pentru particularizările făcute în pachet.',
            'name' => 'Acesta este <b>Numele</b> pachetului curent. <br/><br/>Numele pe care îl introduceți trebuie să fie alfanumeric, să înceapă cu o literă și să nu conțină spații. (Exemplu: HR_Management)',
            'author' => 'Acesta este <b>Autorul</b> care este afișat în timpul instalării ca denumire a entității care a creat pachetul.<br><br>Autorul poate fi un individ sau o companie.',
            'description' => 'Aceasta este <b>Descrierea</b> a pachetului care este afișat în timpul instalării.',
            'publishbtn' => 'Apăsați <b>Publică</b> pentru a salva toate datele introduse și pentru a crea un fișier .zip care este o versiune instalabilă a pachetului.<br><br>Utilizați <b>Modulul încărcător</b> pentru a încărca fișierul .zip și instala pachetul.',
            'deploybtn' => 'Apăsați <b>Implementează</b> pentru a salva toate datele introduse și pentru a instala pachetul, inclusiv toate modulele, în instanța curentă.',
            'duplicatebtn' => 'Click <b>Duplică</b> pentru a copia conținutul pachetului într-un pachet nou și pentru a afișa noul pachet. <br/><br/>Pentru noul pachet, un nume nou va fi generat automat prin adăugarea unui număr la sfârșitul numelui pachetului folosit pentru a crea unul nou. Poți redenumi noul pachet introducând un nou <b>Nume</b> și apăsând <b>Salvează</b>.',
            'exportbtn' => 'Apăsați <b>Export</b> pentru a crea un fișier .zip care conține particularizările făcute în pachet.<br><br> Fișierul generat nu este o versiune instalabilă a pachetului.<br><br>Utilizați <b>Modulul de încărcare</b> pentru a importa . fișier ip și pentru a avea pachetul, inclusiv personalizări, apar în Constructorul Modulului.',
            'deletebtn' => 'Apăsați <b>Șterge</b> pentru a șterge acest pachet și toate fișierele legate de acest pachet.',
            'savebtn' => 'Faceți clic pe <b>Salvare</b> pentru a salva toate datele introduse în legătură cu pachetul.',
            'existing_module' => 'Faceți clic pe pictograma <b>Modul</b> pentru a edita proprietățile și pentru a personaliza câmpurile, relațiile și aspecte asociate cu modulul.',
            'new_module' => 'Face\'i clic pe <b>Modul Nou</b> pentru a crea un nou modul pentru acest pachet.',
            'key' => 'Această <b>cheie alfanumerică</b> de 5 caractere va fi folosită pentru a prefixa toate directoarele, numele claselor și tabelele bazei de date pentru toate modulele din pachetul curent.<br><br>Cheia este folosită în efortul de a obține un nume de tabel unic.',
            'readme' => 'Click pentru a adăuga un text de tip <b>Citește-mă</b> pentru acest pachet.<br><br>Fișierul Citește-mă va fi disponibil în momentul instalării.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Oferă un <b>Nume</b> pentru modul. <b>Eticheta</b> pe care o furnizezi va apărea în fila de navigare. <br/><br/>Bifează caseta de selectare <b>Filă de navigare</b> pentru a afișa o filă de navigare pentru modul. <br/><br/>Apoi alege tipul de modul pe care dorești să îl creezi. <br/><br/>Selectează un tip de șablon. Fiecare șablon conține un set specific de câmpuri, precum și machete predefinite, pe care să le folosești ca bază pentru modulul tău. <br/><br/>Apasă <b>Salvează</b> pentru a crea modulul.',
            'modify' => 'Puteți modifica proprietățile modulului sau puteți să personalizați câmpurile <b></b>, <b>Relațiile</b> și <b>Machetele</b> legate de modul.',
            'importable' => 'Bifarea casetei de selectare <b>Importabil</b> va activa importul pentru acest modul.<br><br>Un link către Asistentul de import va apărea în panoul de Comenzi rapide din modul. Asistentul de import facilitează importul datelor din surse externe în modulul personalizat.',
            'team_security' => 'Verificarea casetei de selectare <b>Echipa de Securitate</b> va permite securitatea echipei pentru acest modul. <br/><br/>Dacă securitatea echipei este activată, câmpul de selecție a echipei va apărea în înregistrările din modul ',
            'reportable' => 'Verificarea acestei casete va permite acestui modul să aibă rapoarte împotriva lui.',
            'assignable' => 'Verificarea acestei casete va permite o înregistrare în acest modul pentru a fi atribuite la un utilizator selectat.',
            'has_tab' => 'Bifarea <b>Filei de navigare</b> va oferi o filă de navigare pentru modul.',
            'acl' => 'Verificarea acestei casete va permite efectuarea de controale de acces la acest modul, inclusiv securitate la nivel de câmp.',
            'studio' => 'Verificarea acestei casete va permite administratorilor să personalizeze acest modul în cadrul Studio.',
            'audit' => 'Verificarea această casetă va permite Audit pentru acest modul. Modificările aduse anumite domenii vor fi înregistrate astfel încât administratorii pot revizui istoria schimbărilor.',
            'viewfieldsbtn' => 'Apăsați <b>Vizualizați Câmpurile</b> pentru a vizualiza câmpurile asociate cu modulul și pentru a crea și edita câmpuri personalizate.',
            'viewrelsbtn' => 'Apăsați <b>Vizualizare Relațiile</b> pentru a vedea relațiile asociate cu acest modul și pentru a crea noi relații.',
            'viewlayoutsbtn' => 'Click <b>Vizualizați Aspect</b> pentru a vizualiza machetele modulului și pentru a personaliza aranjamentul câmpului în cadrul machetelor.',
            'duplicatebtn' => 'Click pe <b>Duplicare</b> pentru a copia proprietățile modulului într-un modul nou și pentru a afișa noul modul. <br/><br/>Pentru noul modul, un nume nou va fi generat automat prin adăugarea unui număr la sfârșitul numelui modulului folosit pentru crearea celui nou.',
            'deletebtn' => '<b>Șterge</b> pentru a șterge acest modul.',
            'name' => 'Acesta este <b>Numele</b> modulului curent.<br/><br/>Numele trebuie să fie alfanumeric și trebuie să înceapă cu o literă și să nu conțină spații. (Exemplu: HR_Management)',
            'label' => 'Aceasta este <b>Eticheta</b> care va apărea în fila de navigare pentru modul. ',
            'savebtn' => '<b>Salvează</b> pentru a salva toate datele introduse legate de modul.',
            'type_basic' => 'Tipul de șablon <b>Elementar</b> oferă câmpuri de bază, cum ar fi numele, atribuirea, echipa, data creării și câmpurile de descriere.',
            'type_company' => 'Tipul șablonului <b>Compania</b> oferă domenii specifice organizației, cum ar fi numele companiei, industrie și adresa de facturare.<br/><br/>Utilizați acest șablon pentru a crea module similare cu modulul standard Conturi.',
            'type_issue' => 'Tipul șablonului <b>Probleme</b> furnizează câmpuri specifice cazurilor și problemelor, cum ar fi, Număr, Status, Prioritate și Descriere.<br/><br/> Folosiți acest șablon pentru a crea module standard similare pentru Cazuri și Erori.',
            'type_person' => 'Tipul șablonului <b>Persoana</b> furnizează câmpuri specifice individuale, cum ar fi Formă de Adresare, Titlu, Nume, Adresa și Număr de Telefon.<br/><br/> Folosiți acest șablon pentru a crea module standard similare pentru Contacte și Conducere.',
            'type_sale' => 'Tipul șablonului <b>Vânzare</b> oferă oportunități specifice câmpurilor cum ar fi Sursa de Piste, Stadiu, Sumă și Probabilitatea. <br/><br/>Utilizați acest șablon pentru a crea module similare cu modulul standard Oportunități.',
            'type_file' => 'Șablonul <b>Fișier</b> furnizează câmpuri specifice documentului, cum ar fi numele fișierului, tipul documentului și data publicării.<br><br>Utilizați acest șablon pentru a crea module similare cu modulul standard de documente.',

        ),
        'dropdowns' => array(
            'default' => 'Toate <b>Liste derulante</b> pentru aplicație sunt listate aici.<br><br>Listele derulante pot fi utilizate pentru câmpurile derulante în orice modul.<br><br>Pentru a face modificări la o listă existentă, faceți clic pe numele derulant.<br><br>Apasă <b>Adaugă listă derulantă</b> pentru a crea un nou listă derulantă.',
            'editdropdown' => 'Listele derulante pot fi utilizate pentru câmpurile derulante standard sau personalizate din orice modul.<br><br>Furnizați un <b>Nume</b> pentru lista derulantă.<br><br>Dacă sunt instalate pachete de limbi în aplicație, puteți selecta <b>Limba</b> de utilizat pentru elementele din listă.<br><br>În câmpul <b>Nume element</b>, furnizați un nume pentru opțiunea din lista derulantă. Acest nume nu va apărea în lista derulantă care este vizibilă pentru utilizatori.<br><br>În câmpul <b>Arată Etichetă</b>, furnizați o etichetă care va fi vizibilă pentru utilizatori.<br><br>După ce furnizați numele elementului și eticheta de afișare, faceți clic pe <b>Adăugare</b> pentru a adăuga elementul la lista derulantă.<br><br>Pentru a reordona elementele din listă, glisați și fixați elementele în pozițiile dorite.<br><br>Pentru a edita eticheta de afișare a unui element, faceți clic pe <b>Editare</b> și introduceți o nouă etichetă. Pentru a șterge un element din lista derulantă, faceți clic pe <b>Șterge</b>.<br><br>Pentru a anula o modificare efectuată la o etichetă de afișare, faceți clic pe <b>Revină</b>. Pentru a reface o modificare care a fost anulată, faceți clic pe <b>Refă</b>.<br><br>Faceți clic pe <b>Salvare</b> pentru a salva lista derulantă.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Toate câmpurile care pot fi afișate în <b>SubPanou</b> apar aici.<br><br>Coloana <b>Implicit</b> conține câmpurile afișate în SubPanou.<br/><br/>Coloana <b>Ascuns</b> conține câmpurile care pot fi adăugate în coloana Implicit.'
        ,
            'savebtn' => 'Apăsați <b>Salvați & Implementați</b> pentru a salva modificările pe care le-ați făcut și pentru a le face active în cadrul modulului.',
            'historyBtn' => 'Apăsați <b>Vezi istoric</b> pentru a vedea și restaura schemă salvată din istoric.',
            'historyDefault' => 'Apăsați <b>Restaurează la setările de baza</b> pentru a restaura o vedere la schemă originală.',
            'Hidden' => 'Câmpurile <b>Ascunse</b> nu apar în SubPanou.',
            'Default' => 'Câmpurile <b>Implicite</b> apar în SubPanou.',

        ),
        'listViewEditor' => array(
            'modify' => 'Toate câmpurile care pot fi afișate în <b>Lista de vizualizare</b> apar aici.<br><br>Coloana <b>Implicit</b> conține câmpurile afișate în mod implicit în lista de vizualizare.<br/><br/>Coloana <b>Disponibil</b> conține câmpurile pe care un utilizator le poate selecta în Căutare pentru a crea o listă de vizualizare personalizată.<br/><br/>Coloana <b>Ascuns</b> conține câmpurile care pot fi adăugate în coloana Implicit sau Disponibil.'
        ,
            'savebtn' => 'Apăsați <b>Salvați & Implementați</b> pentru a salva modificările pe care le-ați făcut și pentru a le face active în cadrul modulului.',
            'historyBtn' => 'Apăsați <b>Vezi Istoric</b> pentru a vedea și restaura o schemă salvată anterior în istoric.<br><br><b>Restaurează</b> în <b> Vezi istoric</b> restaurează un câmp plasat în schemele salvate anterior. Pentru a schimbă etichetele, apăsați Iconiță Modifică lângă fiecare câmp.',
            'historyDefault' => 'Apăsați <b>Restaurați la implicit</b> pentru a restaura vizualizarea la aspectul său original.<br><br><b>Restabilește implicit</b> restabilește doar plasarea câmpurilor în cadrul aspectului original. Pentru a modifica etichetele câmpurilor, faceți clic pe pictograma Editare de lângă fiecare câmp.',
            'Hidden' => 'Câmpurile <b>Ascunse</b> nu sunt disponibile în prezent pentru utilizatori pentru a fi vizibile în ListViews.',
            'Available' => 'Câmpurile <b>Disponibile</b> nu sunt afișate în mod implicit, dar pot fi adăugate la ListViews de către utilizatori.',
            'Default' => 'Câmpurile <b>Implicite</b> apar în ListViews care nu sunt personalizate de utilizatori.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Toate câmpurile care pot fi afișate în <b>Listă de vizualizare</b> apar aici.<br><br>Coloana <b>Implicit</b> conține câmpurile afișate în mod implicit în Lista de vizualizare.<br/><br/>Coloana <b>Ascuns</b> conține câmpurile care pot fi adăugate în coloana Implicit sau Disponibil.'
        ,
            'savebtn' => 'Apăsați <b>Salvați & Implementați</b> pentru a salva modificările pe care le-ați făcut și pentru a le face active în cadrul modulului.',
            'historyBtn' => 'Apăsați <b>Vezi Istoric</b> pentru a vedea și restaura o schemă salvată anterior în istoric.<br><br><b>Restaurează</b> în <b> Vezi istoric</b> restaurează un câmp plasat în schemele salvate anterior. Pentru a schimbă etichetele, apăsați Iconiță Modifică lângă fiecare câmp.',
            'historyDefault' => 'Apăsați <b>Restaurați la implicit</b> pentru a restaura vizualizarea la aspectul său original.<br><br><b>Restabilește implicit</b> restabilește doar plasarea câmpurilor în cadrul aspectului original. Pentru a modifica etichetele câmpurilor, faceți clic pe pictograma Editare de lângă fiecare câmp.',
            'Hidden' => 'Câmpurile <b>Ascunse</b> nu sunt disponibile în prezent pentru utilizatori pentru a fi vizibile în ListViews.',
            'Default' => 'Câmpurile <b>Implicite</b> apar în ListViews care nu sunt personalizate de utilizatori.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Aici apar toate câmpurile care pot fi afișate în formularul <b>Filtru</b>.<br><br>Coloana <b>Implicit</b> conține câmpurile care vor fi afișate în formularul de Căutare.<br/><br/>Coloana <b>Ascunse</b> conține câmpurile disponibile pentru a fi adăugate în formularul de Căutare de către administrator.'
        ,
            'savebtn' => 'Făcând clic pe <b>Salvați & Implementați</b> veți salva toate modificările și le veți face active',
            'Hidden' => 'Câmpul <b>Ascunse</b> nu apare în Căutare.',
            'historyBtn' => 'Apăsați <b>Vezi Istoric</b> pentru a vedea și restaura o schemă salvată anterior în istoric.<br><br><b>Restaurează</b> în <b> Vezi istoric</b> restaurează un câmp plasat în schemele salvate anterior. Pentru a schimbă etichetele, apăsați Iconiță Modifică lângă fiecare câmp.',
            'historyDefault' => 'Apăsați <b>Restaurați la implicit</b> pentru a restaura vizualizarea la aspectul său original.<br><br><b>Restabilește implicit</b> restabilește doar plasarea câmpurilor în cadrul aspectului original. Pentru a modifica etichetele câmpurilor, faceți clic pe pictograma Editare de lângă fiecare câmp.',
            'Default' => 'Câmpurile <b>Implicite</b> apar în Căutare.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Zona <b>Machete</b> conține câmpurile care sunt afișate în prezent în <b>Detalii </b>.<br/><br/>Zona <b>Unelte</b>conține <b>Gunoi</b> și câmpurile și elementele de layout care pot fi adăugate la layout.<br><br>Efectuați modificări la layout prin tragerea și plasarea elementelor și câmpurilor între <b>Unelte</b> și <b>Machete</b> și în cadrul machetelor în sine.<br><br>Pentru a elimina un câmp din layout, trageți câmpul în <b>Gunoi</b>. Câmpul va fi apoi disponibil în Unelte pentru a fi adăugat la machete.',
            'defaultquickcreate' => 'Zona <b>Machete</b> conține câmpurile care sunt afișate în prezent în formularul <b>Creare rapidă</b>.<br><br>Formularul Creare rapidă apare în modulul SubPanouri atunci când se face clic pe butonul Creare.<br/><br/>Zona <b>Unelte</b> conține <b>Gunoi</b> și câmpurile și elementele de aspect care pot fi adăugate la aspect.<br><br>Efectuați modificări la aspect prin glisarea și plasarea elementelor și câmpurilor între <b>Unelte</b> și <b>Machetă</b> și în cadrul aspectului în sine.<br><br>Pentru a elimina un câmp din aspect, glisați câmpul în <b>Gunoi</b>. Câmpul va fi apoi disponibil în Instrumente pentru a fi adăugat la aspect.',
            //this default will be used for edit view
            'default' => 'Zona <b>Machetă</b> conține câmpurile care sunt afișate în prezent în <b>Vizualizare</b>.<br/><br/>Zona<b>Unelte</b> conține <b>Gunoi</b> și câmpurile cu elementele de Layout care pot fi adăugate la aspecte.<br><br>Efectuați modificări în machetă prin glisarea și plasarea elementelor și câmpurilor între <b>Unelte</b> și <b>Machetă</b> și în cadrul Layout-ului în sine.<br><br>Pentru a elimina un câmp din machetă, glisați câmpul în <b>Gunoi</b>. Câmpul va fi apoi disponibil în Machetă pentru a fi adăugat la aspect.',
            'saveBtn' => 'Apăsați <b>Salvați</b> pentru a păstra modificările pe care le-ați făcut la aspect de la ultima dată când le-ați salvat.<br><br>Modificările nu vor fi afișate în modul până când nu implementați modificările salvate.',
            'historyBtn' => 'Apăsați <b>Vezi Istoric</b> pentru a vedea și restaura o schemă salvată anterior în istoric.<br><br><b>Restaurează</b> în <b> Vezi istoric</b> restaurează un câmp plasat în schemele salvate anterior. Pentru a schimbă etichetele, apăsați Iconiță Modifică lângă fiecare câmp.',
            'historyDefault' => 'Apăsați <b>Restaurați la implicit</b> pentru a restaura vizualizarea la aspectul său original.<br><br><b>Restabilește implicit</b> restabilește doar plasarea câmpurilor în cadrul aspectului original. Pentru a modifica etichetele câmpurilor, faceți clic pe pictograma Editare de lângă fiecare câmp.',
            'publishBtn' => 'Apăsați <b>Salvați & Implementați</b> pentru a salva toate modificările pe care le-ați făcut în machetă de la ultima dată când le-ați salvat, și pentru a face modificările active în Modul.<br><br>Structura machetei va fi afișată imediat în modul.',
            'toolbox' => 'Zona <b>Unelte</b> conține <b>Gunoi</b>, elemente adiționale de aspect și setul de câmpuri disponibile de adăugat la aspect.<br/><br/>Elementele și câmpurile din cutia de instrumente pot fi trase și aruncate în schemă, și elementele de aspect și câmpurile pot fi trase și aruncate din aspect în toololbox.<br><br>Elementele aspectului sunt panourile <b></b> și <b>Rânduri</b>. Adăugarea unui rând nou sau a unui nou panou la aspectul afișat oferă locații suplimentare în aspectul câmpurilor.<br/><br/>Trage și plasează oricare dintre câmpurile din caseta de instrumente sau aspect într-o poziție de câmp ocupată pentru a schimba locațiile celor două câmpuri.<br/><br/>Câmpul <b>Umplere</b> creează spațiu gol în layout unde este plasat.',
            'panels' => 'Zona <b>Macheta</b> oferă o imagine a modului în care aspectul va apărea în cadrul modulului atunci când modificările aduse aspectului sunt implementate.<br/><br/>Poți repoziționa câmpuri, rânduri și panouri trăgându-le în locația dorită.<br/><br/>Elimină elementele trăgând și plasându-le în <b>Coș</b> în caseta de instrumente, sau adaugă noi elemente și câmpuri prin glisarea lor din caseta de instrumente <b></b>și amplasarea lor în locația dorită în machetă.',
            'delete' => 'Trageți orice element aici pentru a fi șters din schemă',
            'property' => 'Editează eticheta afișată pentru acest câmp. <br/><b>Tabul Comandă</b> controlează ordinea în care tab-ul schimbă tasta între câmpuri.',
        ),
        'fieldsEditor' => array(
            'default' => '<b>Câmpurile</b> care sunt disponibile pentru modul sunt listate aici prin Numele câmpului.<br><br>Câmpuri personalizate create pentru modul apar deasupra câmpurilor care sunt disponibile implicit pentru modul.<br><br>Pentru a edita un câmp, faceți clic pe numele câmpului <b></b>.<br/><br/>Pentru a crea un câmp nou, apăsați <b>Adăugați câmpul</b>.',
            'mbDefault' => '<b>Câmpurile</b> care sunt disponibile pentru Modul sunt listate aici prin Numele Câmpului.<br><br>Pentru a configura proprietățile pentru un Câmp, faceți clic pe Numele Câmpului.<br><br>Pentru a crea un câmp nou, faceți clic pe <b>Adăugare Câmp</b>. Eticheta împreună cu celelalte proprietăți ale noului Câmp pot fi editate după creare făcând clic pe numele Câmpului.<br><br>După ce modulul este implementat, noile câmpuri create în Modulul Constructor sunt considerate ca fiind câmpuri standard în modulul implementat în Studio.',
            'addField' => 'Selectați un <b>Tip de Date</b> pentru noul câmp. Tipul selectat determină ce tip de caractere pot fi introduse în câmp. De exemplu, doar numere întregi pot fi introduse în câmpurile de tipul de date număr întregi.<br><br>Furnizați un <b>Nume</b> pentru câmp. Numele trebuie să fie alfanumeric și să nu conțină spații. Caracterul _ este valabil.<br><br><b>Afișează eticheta</b> este eticheta care va apărea pentru câmpurile din aspectele modulului. <b>Eticheta sistem</b> este utilizată pentru a face referire la câmpul din cod.<br><br>În funcție de tipul de date selectat pentru câmp, pot fi setate unele sau toate următoarele proprietăți pentru câmp:<br><br><b>Text de ajutor</b> apare temporar în timp ce un utilizator trece cu mouse-ul peste câmp și poate fi folosit pentru a solicita utilizatorului tipul de intrare dorit.<br><br><b>Text comentariu</b> este vizibil doar în Studio și/sau Modulul Constructor și poate fi folosit pentru a descrie câmpul pentru administratori.<br><br><b>Valoare implicită</b> va apărea în câmp. Utilizatorii pot introduce o nouă valoare în câmp sau pot utiliza valoarea implicită.<br><br>Selectați caseta de selectare <b>Actualizare în masă</b> pentru a putea utiliza funcția de Actualizare în masă pentru câmp.<br><br>Valoarea <b>Dimensiune maximă</b> determină numărul maxim de caractere care pot fi introduse în câmp.<br><br>Selectați caseta de selectare <b>Câmp obligatoriu</b> pentru a face câmpul obligatoriu. Trebuie furnizată o valoare pentru câmp pentru a putea salva o înregistrare care conține câmpul.<br><br>Selectați caseta de selectare <b>Reportabil</b> pentru a permite utilizarea câmpului pentru filtre și pentru afișarea datelor în Rapoarte.<br><br>Selectați caseta de selectare <b>Audit</b> pentru a putea urmări modificările aduse câmpului în Jurnalul de modificări.<br><br>Selectați o opțiune în câmpul <b>Importabil</b> pentru a permite, interzice sau solicita importul câmpului în Vrăjitorul de importuri.<br><br>Selectați o opțiune în câmpul <b>Contopire duplicate</b> pentru a activa sau dezactiva funcțiile Contopire duplicate și Găsire duplicate.<br><br>Pot fi setate proprietăți suplimentare pentru anumite tipuri de date.',
            'editField' => 'Proprietățile acestui câmp pot fi personalizate.<br><br>Apasă <b>Clonă</b> pentru a crea un nou câmp cu aceleași proprietăți.',
            'mbeditField' => '<b>Afișează etichetă</b> a unui câmp șablon poate fi personalizat. Celelalte proprietăți ale câmpului nu pot fi personalizate.<br><br>Apasă <b>Clonă</b> pentru a crea un nou câmp cu aceleași proprietăți.<br><br>Pentru a elimina un câmp șablon astfel încât acesta să nu fie afișat în modul, elimină câmpul din Aspect <b>corespunzător</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportă particularizările făcute în Studio creând pachete care pot fi încărcate într-o altă instanță SuiteCRM prin <b>Modulul de încărcarer</b>.<br><br>  În primul rând, furnizează un <b>Numele pachetului</b>. Puteți furniza informații despre <b>Autor</b> și <b>Descrierea</b> pachetului.<br><br>Selectați modulul(ele) care conțin particularizările pe care doriți să le exportați. Doar modulele care conțin personalizări vor apărea pentru a fi selectate.<br><br>Apoi apăsați <b>Export</b> pentru a crea un fișier .zip pentru pachetul care conține personalizări.',
            'exportCustomBtn' => 'Apăsați <b>Export</b> pentru a crea un fișier .zip pentru pachetul care conține personalizările pe care doriți să le exportați.',
            'name' => 'Acesta este <b>Numele</b> al pachetului. Acest nume va fi afișat în timpul instalării.',
            'author' => 'Acesta este <b>Autorul</b>, numele este afișat în timpul instalării ca numele entității care a creat pachetul. Autorul poate fi o persoană, sau o companie.',
            'description' => 'Aceasta este <b>Descrierea</b> a pachetului care este afișat în timpul instalării.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bun venit în zona <b>Instrumente de dezvoltare</b>.<br/><br/> Folosiți instrumentele din această zona pentru crea și administra modulele și câmpurile standard și personalizate.',
            'studioBtn' => 'Folosiți <b>Studiou</b> pentru a personaliza modulele publicate.',
            'mbBtn' => 'Folosiți <b>Constructorul de Module</b> pentru a crea module noi.',
            'sugarPortalBtn' => 'Utilizați <b>Editorul SuiteCRM Portal</b> pentru a gestiona și personaliza Portalul SuiteCRM.',
            'dropDownEditorBtn' => 'Folosiți <b>Editor Listă Derulantă</b> pentru a adaugă și edita liste derulante globale pentru câmpuri listă derulantă.',
            'appBtn' => 'Modul aplicație este locul unde poți personaliza o varietate de proprietăți ale programului, cum ar fi numărul de rapoarte TPS afișate pe pagină principala',
            'backBtn' => 'Întoarce-te la pasul anterior.',
            'studioHelp' => 'Folosiți <b>Studio</b> pentru a determina ce și cum informația va fi afișată în module.',
            'moduleBtn' => 'Apăsați pentru a modifică acest modul.',
            'moduleHelp' => 'Componentele pe care le puteți personaliza pentru modul apar aici.<br><br>Faceți clic pe o pictogramă pentru a selecta componenta pentru editare.<br><br>Apăsați <b>Resetați Modulul</b> pentru a elimina particularizările și a restaura starea originală.',
            'fieldsBtn' => 'Creați și personalizați <b>Câmpuri</b> pentru a stoca informații în modul.',
            'labelsBtn' => 'Modifică <b>Etichetele</b> care apar pentru câmpuri sau alte titluri în module.',
            'relationshipsBtn' => 'Adăugați sau vizualizați <b>Relații</b> existente pentru modul.',
            'layoutsBtn' => 'Personalizați modulul <b>Scheme</b>. Schemele sunt diferite vederi ale modulului ce conține câmpuri.<br><br> Poți determina care câmp apare și cum este fiecare organizat în schemă.',
            'subpanelBtn' => 'Determina care câmpuri apar în <b>SubPanouri</b> în modul.',
            'portalBtn' => 'Personalizați modulul <b>Machete</b> care apare în <b> portalul SuiteCRM</b>.',
            'layoutsHelp' => 'Modulul <b>Scheme</b> care poate fi personalizat apare aici.<br><br>Schemele afișează câmpuri și un câmp date.<br><br> Apasă pe o iconiță pentru a selecta și personaliza o schemă.',
            'subpanelHelp' => '<b>SubPanourile</b> din module pot fi personalizate să apară aici.<br><br> Apăsați pe o iconiță pentru a selecta și personaliza modulul.',
            'newPackage' => 'Apăsați <b>Pachet Nou</b> pentru a crea un pachet nou.',
            'exportBtn' => 'Apăsați <b>Exportați personalizări</b> pentru a crea și descarcă un pachet ce conține personalizări create în Studio pentru module specifice.',
            'mbHelp' => 'Folosiți <b>Constructorul de Module</b> pentru a crea pachete care conțin module personalizate pentru obiecte standard sau personalizate.',
            'viewBtnEditView' => 'Personalizați aspectul <b>EditView</b>.<br><br>EditView este formularul care conține câmpuri de intrare pentru capturarea datelor introduse de utilizator.',
            'viewBtnDetailView' => 'Personalizați aspectul modulului <b>DetailView</b>.<br><br>DetailView afișează datele câmpului introduse de utilizator.',
            'viewBtnDashlet' => 'Personalizează modulul <b>SuiteCRM Dashlet</b>, inclusiv SugarCRM Dashlet\'s ListView și Căutarea.<br><br>SuiteCRM Dashlet va fi disponibil pentru a adăuga la paginile din modulul Acasă.',
            'viewBtnListView' => 'Personalizați aspectul modulului <b>ListView</b>.<br><br>Rezultatele căutării apar în ListView.',
            'searchBtn' => 'Personalizați layout-urile modulului <b>Căutare</b>.<br><br>Determină ce câmpuri pot fi folosite pentru a filtra înregistrările care apar în ListView.',
            'viewBtnQuickCreate' => 'Personalizați macheta modulului <b>Creare rapidă</b>.<br><br>Formularul Creare rapidă apare în SubPanouri și în modulul Email.',
            'addLayoutHelp' => "Pentru a crea o schemă personalizată pentru Grupul de Securitate selectează Grupul de Securitate potrivit și schemă de unde să copieze că punct de început.",
            'searchHelp' => 'Formularele de <b>Căutare</b> care pot fi personalizate apar aici.<br><br>Formularele de căutare conțin câmpuri pentru filtrarea înregistrărilor.<br><br> Apasă o iconiță pentru a selecta schemă de căutare pe care dorești să o personalizezi.',
            'dashletHelp' => '<b>Schemele de SuiteCRM Dashlet</b> care pot fi personalizate apar aici.<br><br>SuiteCRM Dashlet va fi disponibil pentru a adăuga pagini din modulul Acasă.',
            'DashletListViewBtn' => '<b>Vizualizările de tip lista din SuiteCRM Dashlet </b> afișează înregistrări bazate pe filtrele de căutare SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => '<b>Căutările cu SuiteCRM Dashlet </b> filtrează înregistrările pentru lista de vizualizare a Dashlet SuiteCRM.',
            'popupHelp' => 'Schemele <b>Popup</b> care pot fi personalizate apar aici.<br>',
            'PopupListViewBtn' => '<b>Vizualizările tip listă din Popup</b> afișează înregistrări bazate pe vizualizările de căutare Popup.',
            'PopupSearchViewBtn' => '<b>Căutările Popup</b> afișează înregistrările pentru lista derulantă Popup.',
            'BasicSearchBtn' => 'Personalizați formularul <b>Filtru rapid</b> care apare în fila Filtru Rapid din zona de căutare a modulului.',
            'AdvancedSearchBtn' => 'Personalizați formularul <b>Filtru avansat</b> care apare în fila Căutare Avansată în zona de căutare a modulului.',
            'portalHelp' => 'Administrați și personalizați <b>Portalul SuiteCRM</b>.',
            'SPUploadCSS' => 'Încarcă <b>Foaie de Stil</b> pentru portalul SuiteCRM.',
            'SPSync' => '<b>Sincronizare</b> cu particularizări la instanța din portalul SuiteCRM.',
            'Layouts' => 'Personalizează <b>Aspecte</b> pentru modulele din portalul SuiteCRM.',
            'portalLayoutHelp' => 'Modulele din cadrul portalului SuiteCRM apar în aceasta zonă.<br><br>Selectați un modul pentru a edita <b>Aspecte</b>.',
            'relationshipsHelp' => 'Toate <b>Relațiile</b> care există între acest modul și alte module implementate apar aici.<br><br>Relația <b>Numele</b> este numele generat de sistem pentru relație.<br><br> <b>Modulul principal</b> este modulul care deține relații. De exemplu, toate proprietățile relației pentru care modulul Conturile este modulul principal sunt stocate în tabelele bazei de date a Conturilor.<br><br><b>Tipul </b> este tipul relației dintre modulul primar și modulul asociat <b></b>.<br><br>Faceți clic pe un titlu de coloană pentru a sorta după coloană.<br><br>Faceți clic pe un rând în tabelul de relații pentru a vedea proprietățile asociate cu această relație.<br><br>Faceți clic pe <b>Adăugați relația</b> pentru a crea o nouă relație. Relațiile<br><br>pot fi create între oricare două module implementate.',
            'relationshipHelp' => '<b>Relații</b> pot fi create între Modul și un alt module implementate.<br><br> Relațiile sunt exprimate vizual prin SubPanouri și se leagă câmpuri în înregistrările modulului.<br><br>Selectați una dintre următoarele relații <b>Tipuri</b> pentru modulul:<br><br> <b>Unu-la-Unu</b> - Înregistrările ambelor module vor conține câmpuri relaționale.<br><br> <b>Unu-la-Mulți</b> - Înregistrarea modulului primar va conține un SubPanou, și înregistrarea modulului asociat va conține un câmp de legătură.<br><br> <b>Mulți-la-Mulți</b> - Ambele înregistrări vor afișa SubPanouri.<br><br> Selectați modulul <b>Legături cu</b> pentru relație. <br><br>În cazul în care tipul de relație implică SubPanouri, selectați vizualizarea SubPpanoului pentru modulele adecvate.<br><br> Faceți clic pe <b>Salvați</b> pentru a crea relația.',
            'convertLeadHelp' => 'Aici puteți adăuga module la ecranul de conversia pistelor și modifica layout-urile celor existente.<br/>
		Puteți reordona modulele prin glisarea rândurilor lor în tabel.<br/><br/>
		<b>Modul:</b> Numele modulului.<br/><br/>
		<b>Obligatoriu:</b> Modulele obligatorii trebuie create sau selectate înainte de a putea fi convertite în piste.<br/><br/>
		<b>Copiază date:</b> Dacă este bifat, câmpurile pistelor vor fi copiate în câmpurile cu același nume din înregistrările nou create.<br/><br/>
		<b>Permite selectarea:</b> Modulele cu un câmp de relaționare în Contacte pot fi selectate în loc să fie create în timpul procesului de conversie a pistelor.<br/><br/>
		<b>Editare:</b> Modifică layout-ul de conversie pentru acest modul.<br/><br/>
		<b>Ștergere:</b> Elimină acest modul din machete de conversie.<br/><br/>',


            'editDropDownBtn' => 'Editați o Listă Derulantă Globală',
            'addDropDownBtn' => 'Adăugați o nouă Listă Derulantă Globală',
        ),
        'fieldsHelp' => array(
            'default' => '<b>Câmpurile</b> din modul sunt listate aici după numele câmpului.<br><br>Șablonul modulului include un set predeterminat de câmpuri.<br><br>Pentru a crea un câmp nou, faceți clic pe <b>Adăugare câmp</b>.<br><br>Pentru a edita un câmp, faceți clic pe numele câmpului <b></b>.<br/><br/>După ce modulul este implementat, noile câmpuri create în Constructorul Modulului, împreună cu câmpurile șablon, sunt considerate câmpuri standard în Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => '<b>Relațiile</b> care au fost create între acest modul și alte module apar aici.<br><br>Relația <b>Numele</b> este numele generat de sistem pentru relație.<br><br>Modulul principal <b></b> este modulul care deține relații. Proprietățile relației sunt stocate în baza de date a tabelelor aparținând modulului primar.<br><br>Tipul <b></b> este tipul relației dintre modulul primar și modulul asociat <b></b>.<br><br>Faceți clic pe un titlu de coloană pentru a sorta după coloană.<br><br>Faceți clic pe un rând din tabelul de relații pentru a vedea și edita proprietățile asociate cu relația.<br><br>Faceți clic pe <b>Adăugați relația</b> pentru a crea o nouă relație.',
            'addrelbtn' => 'ajutor ținând mouse-ul deasupra pentru adăugarea relației...',
            'addRelationship' => '<b>Relații</b> pot fi create între Modul și un alt modul personalizat sau un modul implementat.<br><br> Relațiile sunt exprimate vizual prin SubPanouri și se leagă câmpuri în înregistrările modulului.<br><br>Selectați una dintre următoarele relații <b>Tipuri</b> pentru modulul:<br><br> <b>unu</b> - Înregistrările ambelor module vor conține câmpuri relaționale.<br><br> <b>Unu-la-Mulți</b> - Înregistrarea modulului primar va conține un SubPanou, și înregistrarea modulului asociat va conține un câmp de legătură.<br><br> <b>Mulți-la-Mulți</b> - Ambele înregistrări vor afișa SubPanouri.<br><br> Selectați modulul <b>Legături cu</b> pentru relație. <br><br>În cazul în care tipul de Relație implică SubPanouri, selectați vizualizarea SubPanoului pentru modulele adecvate.<br><br> Faceți clic pe <b>Salvați</b> pentru a crea relația.',
        ),
        'labelsHelp' => array(
            'default' => 'Etichetele <b></b> pentru câmpurile și alte titluri din modul pot fi modificate.<br><br>Editează eticheta făcând clic în câmp, introducând o nouă etichetă și apăsând <b>Salvează</b>.<br><br>Dacă în aplicație sunt instalate pachete de limbă, puteți selecta Limba <b></b> pentru etichete.',
            'saveBtn' => 'Apăsați <b>Salvați</b> pentru a salva toate modificările.',
            'publishBtn' => 'Apăsați <b>Salvați & Implementați</b> pentru a salva toate modificările și a le face active.',
        ),
        'portalSync' => array(
            'default' => 'Introduceți <b>URL-ul portalului SuiteCRM</b> al instanței portalului pe care doriți să o actualizați și faceți clic pe <b>Go</b>.<br><br>
Apoi introduceți un nume de utilizator și o parolă SuiteCRM valide și faceți clic pe <b>Începe sincronizarea</b>.<br><br>
Personalizările făcute la <b>Layout-urile</b> Portalului SuiteCRM, împreună cu <b>Foaia de stil</b>, dacă a fost încărcată, vor fi transferate la instanța portalului specificat.',
        ),
        'portalStyle' => array(
            'default' => 'Poți personaliza aspectul portalului SuiteCRM folosind o foaie de stil.<br><br>Selectați o <b>Foaie de stil</b> pentru a o încărca.<br><br>Foaia de stil va fi implementată în portalul SuiteCRM data viitoare când va fi realizată o sincronizare.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Pentru a începe un proiect, apasă <b>Pachet nou</b> pentru a crea un nou pachet pentru a găzdui modulul (modulele) personalizate. <br/><br/>Fiecare pachet poate conține unul sau mai multe module.<br/><br/>De exemplu, ați putea dori să creați un pachet care conține un modul personalizat care este legat de modulul standard Conturi. Sau poate doriți să creați un pachet care conține câteva module noi care funcționează împreună ca un proiect și care sunt legate unul de altul și de alte module aflate deja în aplicație.',
            'somepackages' => 'Un <b>pachet </b> acționează ca un container pentru module personalizate, toate făcând parte dintr-un singur proiect. Pachetul poate conține unul sau mai multe module <b>personalizate</b> care pot fi legate între ele sau cu alte module din aplicație.<br/><br/>După crearea unui pachet pentru proiectul tău, poți crea module pentru pachet imediat, sau puteți reveni la Modulul Constructor mai târziu pentru a finaliza proiectul.<br><br>Când proiectul este complet, puteți instala pachetul <b>Implementează</b> pentru a instala modulele personalizate în aplicație.',
            'afterSave' => 'Noul pachet trebuie să conțină cel puțin un modul. Poți crea unul sau mai multe module personalizate pentru pachet.<br/><br/>Click pe <b>Modul Nou</b> pentru a crea un modul personalizat pentru acest pachet.<br/><br/> După crearea a cel puțin un modul, puteți publica sau implementa pachetul pentru a-l face disponibil în instanțele dvs. și/sau ale altor utilizatori.<br/><br/> Pentru a implementa pachetul într-un singur pas în instanța dvs. SuiteCRM, apăsați <b>Deploy</b>.<br><br>Faceți clic pe <b>Publicați</b> pentru a salva pachetul sub forma unui fișier arhivă cu extensia zip. După ce arhiva fișierul este salvată în sistemul dumneavoastră, folosiți modulul <b>Încărcare</b> pentru a încărca și instala pachetul în instanța dumneavoastră SuiteCRM. <br/><br/>Puteți distribui fișierul altor utilizatori pentru a încărca și instala în propriile instanțe SuiteCRM.',
            'create' => 'Un <b>Pachet</b> acționează ca un container pentru module personalizate, toate făcând parte dintr-un singur proiect. Pachetul poate conține unul sau mai multe <b>module personalizate</b> care pot fi legate între ele sau cu alte module din aplicație.<br/><br/>După crearea unui pachet pentru proiectul tău, poți crea module pentru pachet imediat, sau puteți reveni la Constructorul de Module mai târziu pentru a finaliza proiectul.',
        ),
        'main' => array(
            'welcome' => 'Utilizați <b>Instrumente de Dezvoltare</b> pentru a crea și gestiona module și câmpuri standard și personalizate. <br/><br/>Pentru a gestiona modulele aplicației, faceți clic pe <b>Studio</b>. <br/><br/>Pentru a crea module personalizate, faceți clic pe <b>Constructor de Module</b>.',
            'studioWelcome' => 'Toate modulele instalate în prezent, inclusiv obiectele standard și cele încărcate cu module, sunt personalizabile în cadrul Studio-ului.'
        ),
        'module' => array(
            'somemodules' => "Deoarece pachetul curent conține cel puțin un modul, puteți <b>Implementează</b> modulele din pachet în instanța dvs. SuiteCRM sau <b>Publica</b> pachetul pentru a fi instalat în instanța SuiteCRM curentă sau într-o altă instanță folosind <b>Încărcătorul de module</b>.<br/><br/>Pentru a instala pachetul direct în instanța dvs. SuiteCRM, faceți clic pe <b>Implanta</b>.<br><br>Pentru a crea un fișier .zip pentru pachet care poate fi încărcat și instalat în instanța SuiteCRM curentă și în alte instanțe folosind <b>Încărcătorul de module</b>, faceți clic pe <b>Publică</b>.<br/><br/> Puteți construi modulele pentru acest pachet în etape și publica sau implementa atunci când sunteți gata să o faceți. <br/><br/>După publicarea sau implementarea unui pachet, puteți face modificări la proprietățile pachetului și să personalizați modulele în continuare. Apoi, republicați sau reimplementați pachetul pentru a aplica modificările.",
            'editView' => 'Aici puteți edita câmpurile existente. Puteți elimina oricare dintre câmpurile existente sau adăuga câmpuri disponibile în panoul din stânga.',
            'create' => 'Atunci când alegi <b>Tip</b>-ul de modul pe care dorești să îl creezi, ține minte tipurile de câmpuri pe care dorești să le ai în cadrul modulului.<br/><br/>Fiecare șablon de modul conține un set de câmpuri referitoare la tipul de modul descris de titlu.<br/><br/><b>Elementar</b> - Oferă câmpuri de bază care apar în modulele standard, cum ar fi câmpurile Nume, Atribuit către, Echipă, Data creare și Descriere.<br/><br/><b>Companie</b> - Oferă câmpuri specifice organizației, cum ar fi Numele companiei, Industrie și Adresa de facturare. Utilizați acest șablon pentru a crea module similare cu modulul Conturi standard.<br/><br/><b>Persoană</b> - Oferă câmpuri specifice persoanei, cum ar fi Salutul, Titlu, Nume, Adresă și Număr de telefon. Utilizați acest șablon pentru a crea module similare modulelor Contacte și Oportunități standard.<br/><br/><b>Problemă</b> - Oferă câmpuri specifice cazurilor și erorilor, cum ar fi Număr, Stare, Prioritate și Descriere. Utilizați acest șablon pentru a crea module similare modulelor Cazuri și Erori standard.<br/><br/>Notă: După ce creezi modulul, poți edita etichetele câmpurilor furnizate de șablon, precum și să creezi câmpuri personalizate pentru a le adăuga la machetele modulului.',
            'afterSave' => 'Personalizați modulul pentru a se potrivi nevoilor dvs. prin editarea și crearea de câmpuri, prin stabilirea de relații cu alte module și prin aranjarea câmpurilor în cadrul schemelor.<br/><br/>Pentru a vizualiza câmpurile șablon și a gestiona câmpurile personalizate din cadrul modulului, faceți clic pe <b>Vizualizați Câmpurile</b>.<br/><br/>Pentru a crea și gestiona relațiile dintre modul și alte module, dacă modulele sunt deja în aplicație sau alte module personalizate din cadrul aceluiași pachet, apăsați <b>Vezi relațiile</b>.<br/><br/>Pentru a edita aspectul modulului, apăsați <b>Vizualizați Aspect</b>. Puteți schimba Vizualizarea Detaliilor, Editați Aspectele de vizualizare și Vizualizare Listă pentru modul, la fel cum ați face deja pentru modulele din aplicație în Studio.<br/><br/> Pentru a crea un modul cu aceleași proprietăți ca modulul curent, apăsați pe <b>Duplicare</b>. Poți personaliza în continuare noul modul.',
            'viewfields' => 'Câmpurile din modul pot fi personalizate în funcție de nevoile tale. <br/><br/> Nu poți șterge câmpurile standard, dar poți să le ștergi în schemele apropiate din paginile Machete. <br/><br/> Poți ușor să creezi câmpuri noi care au proprietăți similare cu câmpurile deja existente apasand <b>Clonează</b> în formularul <b>Proprietăți</b>. Introdu orice proprietăți noi, apoi apasă pe <b>Salvează</b>.<br/><br/> Este recomandat să setezi toate proprietățile pentru câmpurile standard sau personalizate înainte să publici și să intalezi pachetele care conțin modulele personalizate.',
            'viewrelationships' => 'Puteți crea relații multe-la-multe între modulul curent și alte module din pachet, și/sau între modulul curent și module deja instalate în aplicație. <br><br>Pentru a crea relații unu-la-multe și unu-la-unu, creați câmpuri <b>Asociază</b> și <b>Asociază Flexibil</b> pentru module.',
            'viewlayouts' => 'Puteți controla ce câmpuri sunt disponibile pentru a capta date în cadrul <b>Editare Vizualizare</b>. De asemenea, puteți controla ce afișări de date se văd în <b>Vedere de detaliu</b>. Opiniile nu trebuie să se potrivească. <br/><br/>Formularul de creare rapidă este afișat atunci când <b>Creează</b> este apăsat într-un subpanou de modul. În mod implicit, formatul <b>Creare rapidă</b> este identic cu aspectul implicit <b>Editați Vizualizarea</b>. Puteți personaliza formularul de Creare Rapidă astfel încât acesta să conțină mai puține și/sau diferite câmpuri decât aspectul Editare Vizualizare. <br><br>Puteți determina securitatea modulului folosind personalizarea Aspect împreună cu <b>Managementul rolurilor</b>.<br><br>',
            'existingModule' => 'După crearea și personalizarea acestui modul, puteți crea module suplimentare sau puteți reveni la pachet la <b>Publică</b> sau <b>Implementează</b> pachetul.<br><br>Pentru a crea module suplimentare, apăsați <b>Duplică</b> pentru a crea un modul cu aceleași proprietăți ca modulul curent, sau navigați înapoi la pachet și faceți clic pe <b>Modulul nou</b>.<br><br> Dacă ești gata să faci <b>Publică</b> sau <b>Implementează</b>, pachetul care conține acest modul, navighează înapoi la pachet pentru a efectua aceste funcții. Poți publica și implementa pachete care conțin cel puțin un modul.',
            'labels' => 'Etichetele câmpurilor standard cât și cele personalizate pot fi modificate. Modificarea etichetelor câmpurilor nu afectează datele stocate în câmpuri.',
        ),
        'listViewEditor' => array(
            'modify' => 'Sunt trei coloane afișate la stânga. Coloana "Implicit" conține câmpurile care sunt afișate într-o vizualizare listă în mod implicit, coloana "Disponibil" conține câmpuri pe care un utilizator le poate alege să le folosească pentru a crea o vizualizare tip listă personalizată, iar coloana "Ascuns" conține câmpuri disponibile ca administrator pentru a fi adăugate la coloanele implicite sau disponibile pentru utilizatori, dar sunt momentan dezactivate.',
            'savebtn' => 'Apăsând <b>Salvează</b> vor salva toate modificările și le vor face active.',
            'Hidden' => 'Câmpurile ascunse sunt câmpuri care nu sunt disponibile în prezent utilizatorilor spre utilizare în vizualizările de listă.',
            'Available' => 'Câmpurile disponibile sunt câmpuri care nu sunt afișate în mod implicit, dar pot fi activate de către utilizatori.',
            'Default' => 'Câmpurile implicite sunt afișate utilizatorilor care nu au creat setările de vizualizare personalizate listă.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Există două coloane afișate în stânga. Coloana "Implicit" conține câmpurile care vor fi afișate în vizualizarea căutării, iar coloana "Ascuns" conține câmpuri disponibile pentru dvs. ca administrator pentru a adăuga la vizualizare.',
            'savebtn' => 'Făcând clic pe <b>Salvare & Implementare</b> salvați toate modificările și le faceți să fie active.',
            'Hidden' => 'Câmpurile ascunse nu vor fi afișate în vizualizarea de căutare.',
            'Default' => 'Câmpurile implicite vor fi afișate în vizualizarea de căutare.'
        ),
        'layoutEditor' => array(
            'default' => 'În partea stângă sunt afișate două coloane. Coloana din dreapta, etichetată Macheta curentă sau Previzualizarea Machetă, este locul în care modificați aspectul/macheta modulului. Coloana din stânga, intitulată Unelte, conține elemente și instrumente utile pentru utilizarea la editarea aspectului/machetei.<br/><br/>Dacă zona de aspect este intitulată Machetă curentă, atunci lucrați la o copie a aspectului utilizat în prezent de modul pentru afișare.<br/><br/>Dacă este intitulată Previzualizare machetă, atunci lucrați la o copie creată anterior printr-un clic pe butonul Salvare, care poate fi deja modificată față de versiunea văzută de utilizatorii acestui modul.',
            'saveBtn' => 'Făcând clic pe acest buton se salvează aspectul astfel încât să puteți păstra schimbările. Când reveniți la acest modul veți începe de la acest aspect modificat. Cu toate acestea, aspectul dvs. nu va fi văzut de către utilizatorii modulului până când nu faceți clic pe butonul Salvare și Publicare.',
            'publishBtn' => 'Faceți clic pe acest buton pentru a implementa schema. Acest lucru înseamnă că acest aspect va fi văzut imediat de către utilizatorii acestui modul.',
            'toolbox' => 'Setul de instrumente conține o varietate de caracteristici utile pentru editarea machetelor, inclusiv o zonă de Gunoi, un set suplimentar de elemente și un set de câmpuri disponibile. Oricare dintre acestea pot fi trase și aruncate pe machetă.',
            'panels' => 'Această zonă arată cum va arăta aspect pentru utilizatorii de acest modul atunci când este desfășurat.<br/><br/>Puteți repoziționa elemente, cum ar fi câmpurile, rânduri și panouri prin glisare și fixare a acestora; șterge elemente prin glisarea și fixarea lor pe zona de gunoi din caseta de instrumente, sau adăuga elemente noi, trăgându-le de la set de instrumente și fixarea acestora pe aspectul în poziția dorită.'
        ),
        'dropdownEditor' => array(
            'default' => 'În partea stângă sunt afișate două coloane. Coloana din dreapta, etichetată Macheta curentă sau Previzualizarea Machetă, este locul în care modificați aspectul/macheta modulului. Coloana din stânga, intitulată Unelte, conține elemente și instrumente utile pentru utilizarea la editarea aspectului/machetei.<br/><br/>Dacă zona de aspect este intitulată Machetă curentă, atunci lucrați la o copie a aspectului utilizat în prezent de modul pentru afișare.<br/><br/>Dacă este intitulată Previzualizare machetă, atunci lucrați la o copie creată anterior printr-un clic pe butonul Salvare, care poate fi deja modificată față de versiunea văzută de utilizatorii acestui modul.',
            'dropdownaddbtn' => 'Apăsarea acestui buton adaugă un item nou la lista derulantă.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Personalizările făcute în Studio în acest caz pot fi ambalate și implementate într-o altă instanță. <br><br>Furnizați un <b>Nume Pachet</b>. Puteți furniza informații <b>Autor</b> și <b>Descriere</b> pentru pachet.<br><br>Selectați modulul (modulele) care conțin particularizările de exportat. (Doar modulele care conțin particularizări vor apărea pentru a selecta.)<br><br>Click <b>Export</b> pentru a crea un fișier .zip pentru pachetul care conține personalizări. Fișierul .zip poate fi încărcat într-o altă instanță prin intermediul încărcării modulului <b>Modulul de încărcare</b>.',
            'exportCustomBtn' => 'Apăsați <b>Export</b> pentru a crea un fișier .zip pentru pachetul care conține personalizările pe care doriți să le exportați.',
            'name' => '<b>Numele</b> pachetului va fi afișat în Modulul de încărcare după ce pachetul este încărcat pentru instalare în Studio.',
            'author' => '<b>Autorul</b> este numele entității care a creat pachetul. Acesta poate fi o persoană fizică sau o companie.<br><br>Autorul va fi afișat în Modulul de încărcare după ce pachetul este încărcat pentru a fi instalat în Studio.',
            'description' => '<b>Descrierea</b> pachetului va fi afișată în Modulul de încărcare după ce pachetul este încărcat pentru instalare în Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bun venit în zona <b>Instrumente de dezvoltare</b>.<br/><br/> Folosiți instrumentele din această zona pentru crea și administra modulele și câmpurile standard și personalizate.',
            'studioBtn' => 'Utilizați <b>Studio</b> pentru a personaliza modulele instalate prin schimbarea aranjamentului câmpului, selectând ce câmpuri sunt disponibile și creând câmpuri de date personalizate.',
            'mbBtn' => 'Folosiți <b>Constructorul de Module</b> pentru a crea module noi.',
            'appBtn' => 'Utilizați modul Aplicație pentru a personaliza diverse proprietăți ale programului, cum ar fi numărul de rapoarte tip TPS afișate pe pagina de pornire',
            'backBtn' => 'Întoarce-te la pasul anterior.',
            'studioHelp' => 'Utilizați <b>Studio</b> pentru a personaliza modulele instalate.',
            'moduleBtn' => 'Apăsați pentru a modifică acest modul.',
            'moduleHelp' => 'Selectați componenta modulului pe care doriți să o editați',
            'fieldsBtn' => 'Editați ce informații sunt stocate în modul prin controlul <b>Câmpurile</b> din modul.<br/><br/>Puteți edita și crea câmpuri personalizate aici.',
            'labelsBtn' => 'Apăsați <b>Salvați</b> pentru a vă salva etichetele personalizate.',
            'layoutsBtn' => 'Personalizați <b>Machete</b> pentru editarea, detaliile, lista și vizualizările de căutare.',
            'subpanelBtn' => 'Editează ce informații sunt afișate in aceste SubPanouri.',
            'layoutsHelp' => 'Selectați un <b>Editare Machetă</b>.<br/><br/>Pentru a schimba aspectul care conține câmpuri de date pentru introducerea de date, apăsați <b>Editare Vizualizare</b>.<br/><br/>Pentru a schimba aspectul care afișează datele introduse în câmpuri în Vizualizarea Editare, click <b>Vizualizare detaliată</b>.<br/><br/>Pentru a schimba coloanele care apar în lista implicită, apăsați <b>Vizualizare</b>.<br/><br/>Pentru a schimba schemele de căutare de bază și avansată, faceți clic pe <b>Căutare</b>.',
            'subpanelHelp' => 'Selectați un <b>SubPanou</b> pentru a fi editat.',
            'searchHelp' => 'Selectați <b>Căutare</b> pentru editare.',
            'newPackage' => 'Apăsați <b>Pachet Nou</b> pentru a crea un pachet nou.',
            'mbHelp' => '<b>Bun venit la Constructorul de Module.</b><br/><br/>Utilizați <b>Modulul Constructor</b> pentru a crea pachete care conțin module personalizate bazate pe obiecte standard sau personalizate. <br/><br/>Pentru a începe, apasă <b>Pachet Nou</b> pentru a crea un pachet nou, sau selectează un pachet de editat.<br/><br/> Un Pachet <b></b> acționează ca un container pentru module personalizate, toate făcând parte dintr-un singur proiect. Pachetul poate conține unul sau mai multe module personalizate care pot fi legate între ele sau de modulele din aplicație. Exemple <br/><br/>: S-ar putea să doriți să creați un pachet care să conțină un modul personalizat care este legat de modulul standard Conturi. Sau poate doriți să creați un pachet care conține câteva module noi care funcționează împreună ca un proiect și care sunt legate unul de altul și de modulele din aplicație.',
            'exportBtn' => 'Apăsați <b>Exportați personalizări</b> pentru a crea și descarcă un pachet ce conține personalizări create în Studio pentru module specifice.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor Listă Derulantă',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Creator de Modul',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Editor Listă Derulantă',
    'LBL_DEVELOPER_TOOLS' => 'Studio',
    'LBL_SUITEPORTAL' => 'Editorul de portal SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Lista Colete',
    'LBL_HOME' => 'Acasă',
    'LBL_NONE' => '-Niciunul-',
    'LBL_DEPLOYE_COMPLETE' => 'Implementare completa',
    'LBL_DEPLOY_FAILED' => 'O eroare a apărut în timpul procesului de implementare, pachetul dvs. nu poate fi instalat corect',
    'LBL_AVAILABLE_SUBPANELS' => 'SubPanouri disponibile',
    'LBL_ADVANCED' => 'Avansat',
    'LBL_ADVANCED_SEARCH' => 'Filtru Avansat',
    'LBL_BASIC' => 'Elementar',
    'LBL_BASIC_SEARCH' => 'Filtru Rapid',
    'LBL_CURRENT_LAYOUT' => 'Plan general',
    'LBL_CURRENCY' => 'Valută',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'Vizualizare listă Dashlet în SuiteCRM',
    'LBL_POPUP' => 'Vezi pop-up',
    'LBL_POPUPLISTVIEW' => 'Vedere Lista pop-up',
    'LBL_POPUPSEARCH' => 'Cautare pop-up',
    'LBL_DASHLETSEARCHVIEW' => 'Cautare SuiteCRM Dashlet',
    'LBL_DETAILVIEW' => 'Detalii',
    'LBL_DROP_HERE' => '[Lasă să cadă aici]',
    'LBL_EDIT' => 'Editați',
    'LBL_EDIT_LAYOUT' => 'Editare aranjament',
    'LBL_EDIT_FIELDS' => 'Editeaza Campuri',
    'LBL_EDITVIEW' => 'Editare',
    'LBL_FILLER' => '(umplere)',
    'LBL_FIELDS' => 'Câmpuri',
    'LBL_FAILED_TO_SAVE' => 'Salvare eșuată',
    'LBL_FAILED_PUBLISHED' => 'Publicare eșuată',
    'LBL_HOMEPAGE_PREFIX' => 'Al meu',
    'LBL_LAYOUT_PREVIEW' => 'Vedere Plan General',
    'LBL_LAYOUTS' => 'Planuri Generale',
    'LBL_LISTVIEW' => 'Lista',
    'LBL_MODULES' => 'Modul',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Colet Nou',
    'LBL_NEW_PANEL' => 'Panou Nou',
    'LBL_NEW_ROW' => 'Rand Nou',
    'LBL_PACKAGE_DELETED' => 'Pachet șters',
    'LBL_PUBLISHING' => 'În curs de Publicare...',
    'LBL_PUBLISHED' => 'Publicat',
    'LBL_SELECT_FILE' => 'Selectaţi fişierul',
    'LBL_SUBPANELS' => 'SubPanouri',
    'LBL_SUBPANEL' => 'SubPanou',
    'LBL_SUBPANEL_TITLE' => 'Titlu:',
    'LBL_SEARCH_FORMS' => 'Filtru',
    'LBL_SEARCH' => 'Caută',
    'LBL_SEARCH_BUTTON' => 'Caută',
    'LBL_FILTER' => 'Filtru',
    'LBL_TOOLBOX' => 'Cutie cu instrumente',
    'LBL_QUICKCREATE' => 'Creare rapidă',
    'LBL_EDIT_DROPDOWNS' => 'Editați o Listă Derulantă Globală',
    'LBL_ADD_DROPDOWN' => 'Adăugați o nouă Listă Derulantă Globală',
    'LBL_BLANK' => '-alb-',
    'LBL_TAB_ORDER' => 'Ordinea Filelor',
    'LBL_TABDEF_TYPE' => 'Tip vizualizare',
    'LBL_TABDEF_TYPE_HELP' => 'Selectați modul în care această secțiune ar trebui să fie afișată. Această opțiune are efect numai dacă ați activat file la această vizualizare.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selectați panoul pentru a afișa acest panou în vizualizarea aspectului. Selectați Filă pentru a afișa acest panou într-o filă separată din cadrul aspectului. Când Filă este specificat pentru un panou, panourile următoare setate pentru a fi afișate ca piese vor fi afișate în interiorul filei. <br/>O filă nouă va fi pornită pentru următorul panou pentru care este selectată fila. Dacă Filă este selectată pentru un panou de sub primul panou, primul panou va fi în mod necesar un Filă.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Selectați pentru a face starea implicită a acestui panou prăbușit.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nume',
    'LBL_DROPDOWN_LANGUAGE' => 'Limbă',
    'LBL_DROPDOWN_ITEMS' => 'Listă elemente',
    'LBL_DROPDOWN_ITEM_NAME' => 'Numele elementului',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Arata Eticheta',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizare la Detalii vizualizare',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selectează această opțiune pentru a sincroniza această macheta Editare cu macheta Detaliu corespunzătoare. Câmpurile și plasarea câmpurilor în Editare<br>vor fi sincronizate și salvate în Detaliu automat la apăsarea pe Salvare sau Salvare și implementare în Editare.<br>Modificările de aspect nu vor putea fi făcute în Detaliu.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Acest Detaliu este sincronizat cu Editarea corespunzătoare.<br> Câmpurile și plasarea lor în acest Detaliu reflectă câmpurile și plasarea câmpurilor în Editare.<br>Modificările la Detaliu nu pot fi salvate sau implementate în această pagină. Faceți modificări sau desincronizați machetele în Editare. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copiază de la Editează vizualizare',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Valorile sunt necesare atât pentru Numele Elementului cat şi pt Label Display. Pentru a adăuga un element necompletat, faceţi clic pe Adăugare fără a introduce nici o valoare pentru numele elementului şi Label Display.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Cheia există deja în lista',
    'LBL_NO_SAVE_ACTION' => 'Nu am găsit opțiunea salvează pentru această vedere.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: fișier formatat prost',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Modul Primar',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relatie creata in Studio',
    'LBL_RELATIONSHIPS' => 'Relatii',
    'LBL_RELATIONSHIP_EDIT' => 'Modifica Relatie',
    'LBL_REL_NAME' => 'Nume',
    'LBL_REL_LABEL' => 'Etichetă',
    'LBL_REL_TYPE' => 'Tip',
    'LBL_RHS_MODULE' => 'Modul inrudit',
    'LBL_NO_RELS' => 'Nu Sunt Relatii',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Conditie optionala',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Coloana',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valoare',
    'LBL_SUBPANEL_FROM' => 'Formular subpanou',
    'LBL_RELATIONSHIP_ONLY' => 'Nu vor fi create elemente vizibile pentru aceasta relatie deoarece exista o relatie anterioara vizibila intre aceste doua module.',
    'LBL_ONETOONE' => 'Una la Una',
    'LBL_ONETOMANY' => 'Una la Mai Multe',
    'LBL_MANYTOONE' => 'Mai multe la Una',
    'LBL_MANYTOMANY' => 'Mai Multe la Mai Multe',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Alege un modul pentru modificare.',
    'LBL_QUESTION_LAYOUT' => 'Selectati o schita pentru a fi editata.',
    'LBL_QUESTION_SUBPANEL' => 'Selectati un subpanou pentru a fi editat.',
    'LBL_QUESTION_SEARCH' => 'Selectati schita de cautare pentru a fi editata.',
    'LBL_QUESTION_MODULE' => 'Alege o componenta a modului pentru modificare.',
    'LBL_QUESTION_PACKAGE' => 'Selectează un pachet pentru editare sau creează un pachet nou.',
    'LBL_QUESTION_EDITOR' => 'Alegeți un instrument.',
    'LBL_QUESTION_DASHLET' => 'Selectati o schita de dashlet pentru a fi editata.',
    'LBL_QUESTION_POPUP' => 'Selectionati o schita de popup pentru a fi editata.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nume',
    'LBL_LABELS' => 'Etichete',
    'LBL_MASS_UPDATE' => 'Actualizare selecție',
    'LBL_DEFAULT_VALUE' => 'Valoare implicită',
    'LBL_REQUIRED' => 'Necesar',
    'LBL_DATA_TYPE' => 'Tip',
    'LBL_HCUSTOM' => 'PERSONALIZAT',
    'LBL_HDEFAULT' => 'IMPLICIT',
    'LBL_LANGUAGE' => 'Limbă:',
    'LBL_CUSTOM_FIELDS' => 'Camp creat in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editeaza Etichete',
    'LBL_SECTION_PACKAGES' => 'Pachete',
    'LBL_SECTION_PACKAGE' => 'Pachet',
    'LBL_SECTION_MODULES' => 'Modul',
    'LBL_SECTION_DROPDOWNS' => 'Liste Derulante',
    'LBL_SECTION_PROPERTIES' => 'Proprietati',
    'LBL_SECTION_DROPDOWNED' => 'Editați Listă Derulantă',
    'LBL_SECTION_HELP' => 'Ajutor',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_FIELDEDITOR' => 'Modificare Domeniu',
    'LBL_SECTION_DEPLOY' => 'Desfasoara',
    'LBL_SECTION_MODULE' => 'Modul',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Implicit',
    'LBL_HIDDEN' => 'Ascuns',
    'LBL_AVAILABLE' => 'Disponibil',
    'LBL_LISTVIEW_DESCRIPTION' => 'Există trei coloane afişate mai jos. Coloana <b>Implicit</b> conține câmpuri care sunt afişate într-o vizualizare tip listă, în mod implicit. Coloana <b>Suplimentară</b> conține câmpuri pe care un utilizator poate alege să le folosească pentru crearea unei vizualizări personalizate. Coloana <b>Disponibilă</b> afișează câmpurile disponibile pentru dvs. ca administrator pentru a le adăuga la coloanele implicite sau adiționale pentru utilizare de către utilizatori.',
    'LBL_LISTVIEW_EDIT' => 'Editor Vizualizare tip Lista',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Previzualizare',
    'LBL_MB_RESTORE' => 'Restaurează',
    'LBL_MB_DELETE' => 'Ștergere',
    'LBL_MB_DEFAULT_LAYOUT' => 'Structura Implicita',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Adăugați',
    'LBL_BTN_SAVE' => 'Salvați',
    'LBL_BTN_SAVE_CHANGES' => 'Salvați Schimbări',
    'LBL_BTN_DONT_SAVE' => 'Anuleaza Modificarile',
    'LBL_BTN_CANCEL' => 'Anulați',
    'LBL_BTN_CLOSE' => 'Închide',
    'LBL_BTN_SAVEPUBLISH' => 'Salvați & Lansați',
    'LBL_BTN_CLONE' => 'Clonați',
    'LBL_BTN_ADDROWS' => 'Adăugați Rânduri',
    'LBL_BTN_ADDFIELD' => 'Adăugați Câmp',
    'LBL_BTN_ADDDROPDOWN' => 'Adăugați Listă Derulantă',
    'LBL_BTN_SORT_ASCENDING' => 'Sorteaza Crescator',
    'LBL_BTN_SORT_DESCENDING' => 'Sorteaza Descrescator',
    'LBL_BTN_EDLABELS' => 'Editeaza Etichete',
    'LBL_BTN_UNDO' => 'Anulare',
    'LBL_BTN_REDO' => 'Refacere',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Adăugați Câmp Personalizat',
    'LBL_BTN_EXPORT' => 'Exporta Particularizari',
    'LBL_BTN_DUPLICATE' => 'Duplicat',
    'LBL_BTN_PUBLISH' => 'Publică',
    'LBL_BTN_DEPLOY' => 'Desfasoara',
    'LBL_BTN_EXP' => 'Exportă',
    'LBL_BTN_DELETE' => 'Ștergere',
    'LBL_BTN_VIEW_LAYOUTS' => 'Vizualizeaza Structuri',
    'LBL_BTN_VIEW_FIELDS' => 'Vizualizează Domenii',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Vizualizează dependențe',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Adaugă Relație',
    'LBL_BTN_RENAME_MODULE' => 'Schimba numele modulului',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Eroare: Campul Exista Deja',
    'ERROR_INVALID_KEY_VALUE' => "Eroare: Valoare cheie invalidă: [']",
    'ERROR_NO_HISTORY' => 'Nu s-au gasit fisiere istoric',
    'ERROR_MINIMUM_FIELDS' => 'Structura trebuie sa contina cel putin un domeniu',
    'ERROR_GENERIC_TITLE' => 'A apărut o eroare',
    'ERROR_REQUIRED_FIELDS' => 'Sunteți sigur că doriți să continuați? Următoarele câmpuri obligatorii lipsesc din layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nume Pachet:',
    'LBL_MODULE_NAME' => 'Nume Modul:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_KEY' => 'Cheie:',
    'LBL_ADD_README' => ' Citiți-mă',
    'LBL_LAST_MODIFIED' => 'Ultima Modificare:',
    'LBL_NEW_MODULE' => 'Modul nou',
    'LBL_LABEL' => 'Etichetă:',
    'LBL_LABEL_TITLE' => 'Etichetă',
    'LBL_WIDTH' => 'Lățime',
    'LBL_PACKAGE' => 'Pachet:',
    'LBL_TYPE' => 'Tip:',
    'LBL_NAV_TAB' => 'Tab de Navigatie',
    'LBL_CREATE' => 'Creați',
    'LBL_LIST' => 'Listează',
    'LBL_VIEW' => 'Vizualizează',
    'LBL_HISTORY' => 'Vizualizare Istoric',
    'LBL_RESTORE_DEFAULT' => 'Restaurarea valori Predeterminate',
    'LBL_ACTIVITIES' => 'Activităţi',
    'LBL_NEW' => 'Nou',
    'LBL_TYPE_BASIC' => 'de bază',
    'LBL_TYPE_COMPANY' => 'companie',
    'LBL_TYPE_PERSON' => 'persoana',
    'LBL_TYPE_ISSUE' => 'problema',
    'LBL_TYPE_SALE' => 'vânzare',
    'LBL_TYPE_FILE' => 'fisier',
    'LBL_RSUB' => 'Acesta este subpanoul care va fi afisat in modulul dumneavoastra',
    'LBL_MSUB' => 'Acesta este subpanoul pe care modulul dumneavoastra il asigura modulului inrudit pentru afisare',
    'LBL_MB_IMPORTABLE' => 'Importare',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] a fost sters',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exporta Particularizari',
    'LBL_EC_NAME' => 'Nume Pachet:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Descriere:',
    'LBL_EC_CHECKERROR' => 'Vă rugăm selectați un modul.',
    'LBL_EC_CUSTOMFIELD' => 'domeniu (domenii) personalizate',
    'LBL_EC_CUSTOMLAYOUT' => 'machetă (machete) particularizate',
    'LBL_EC_NOCUSTOM' => 'Nici un modul nu a fost personalizat.',
    'LBL_EC_EMPTYCUSTOM' => 'are particularizarile goale.',
    'LBL_EC_EXPORTBTN' => 'Exportă',
    'LBL_MODULE_DEPLOYED' => 'Modulul a fost desfasurat.',
    'LBL_UNDEFINED' => 'nedefinit',
    'LBL_EC_VIEWS' => 'vizualizare (vizualizări) personalizate',
    'LBL_EC_SUITEFEEDS' => 'fluxul (fluxuri) personalizate',
    'LBL_EC_DASHLETS' => 'dashlet personalizat(e)',
    'LBL_EC_CSS' => 'css personalizat (personalizată)',
    'LBL_EC_TPLS' => 'tpls-uri personalizat (personalizată)',
    'LBL_EC_IMAGES' => 'imagine (imagini) personalizate',
    'LBL_EC_JS' => 'js-uri personalizat (personalizată)',
    'LBL_EC_QTIP' => 'qtip-uri personalizat (personalizată)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Esuare in extragerea datelor',
    'LBL_AJAX_LOADING' => 'Încărcare...',
    'LBL_AJAX_DELETING' => 'Ștergere...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construire In Progres...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Lansare în desfășurare...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Rezultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operațiunea s-a încheiat cu succes',
    'LBL_AJAX_LOADING_TITLE' => 'În progres...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Va rugăm așteptați, se încarcă...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sigur doriți să ștergeți acest pachet? Acest lucru va șterge definitiv toate fișierele asociate cu acest pachet.',
    'LBL_JS_REMOVE_MODULE' => 'Sigur doriți să ștergeți acest modul? Aceasta va șterge definitiv toate fișierele asociate cu acest modul.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Orice particularizări pe care le-ați făcut in Studio vor fi suprascrise atunci când acest modul este re-implementat. Sunteți sigur ca doriți sa continuați?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Implementarea pachetului',
    'LBL_JS_VALIDATE_NAME' => 'Nume - Trebuie să fie alfanumeric, să înceapă cu o literă și să nu conțină spații.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Numele Pachetului există deja',
    'LBL_JS_VALIDATE_KEY' => 'Cheie - Trebuie să fie alfanumerică, să înceapă cu o literă și să nu conțină spații.',
    'LBL_JS_VALIDATE_LABEL' => 'Vă rugăm introduceți o etichetă care va fi folosita ca Nume Afișat pentru acest modul',
    'LBL_JS_VALIDATE_TYPE' => 'Vă rugăm să selectați tipul de modul pe care doriți să îl construiți din lista de mai sus',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Eticheta - va rugam sa adaugați o eticheta care va fi afișata deasupra SubPanoului',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Ștergerea acestui câmp personalizat va șterge atât câmpul, cât și toate datele legate de câmpul personalizat din baza de date. Câmpul nu va mai apărea în nicio machetă al modulului.\\n\\nDoriți să continuați?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sunteți sigur că doriți să ștergeți această relație?',
    'LBL_CONFIRM_DONT_SAVE' => 'Modificările au fost făcute de când ați salvat ultima dată, doriți să salvați?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvați modificările?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Datele pot fi trunchiate și acest lucru nu poate fi anulat, sunteți sigur că doriți să continuați?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Selectați tipul de date corespunzător în funcție de tipul de date care vor fi introduse în câmp.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Da</b>: Câmpul va fi inclus într-o operațiune de import.<br><b>Nr.</b>: Câmpul nu va fi inclus într-un import.<br><b>Necesar</b>: Trebuie furnizată o valoare pentru câmp în orice import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Introduceți un număr pentru Lățime, măsurat în pixeli.<br> Imaginea încărcată va fi scalată la această lățime.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Introduceți un număr pentru Înălțime, măsurat în pixeli.<br> Imaginea încărcată va fi scalată la această înălțime.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Activat</b>: Câmpul va apărea în funcția Duplicate Îmbinare, dar nu va fi disponibilă pentru a utiliza condițiile de filtrare din caracteristica Găsiți Duplicate.<br><b>Dezactivat</b>: Câmpul nu va apărea în funcția Îmbină Duplicate și nu vor fi disponibile pentru a utiliza condițiile de filtrare din caracteristica Găsiți Duplicate.<br><b>Filtru</b>: Câmpul va apărea în funcția Îmbină Duplicate și va fi disponibil pentru a utiliza condițiile de filtrare din caracteristica Găsiți Duplicate.<br><b>Filtrul selectat implicit</b>: Câmpul va apărea în funcția Duplicate Îmbinare, și vor fi utilizate în mod implicit pentru condițiile de filtrare din caracteristica Caută Duplicate.<br><b>Doar Filtru</b>: Câmpul nu va apărea în funcția Duplicate Îmbinare, dar va fi disponibil pentru a utiliza condițiile de filtrare din caracteristica Găsiți Duplicate.',

//Revert Module labels
    'LBL_RESET' => 'Resetează',
    'LBL_RESET_MODULE' => 'Resetează modulul',
    'LBL_REMOVE_CUSTOM' => 'Elimină particularizările',
    'LBL_CLEAR_RELATIONSHIPS' => 'Șterge relațiile',
    'LBL_RESET_LABELS' => 'Resetare etichete',
    'LBL_RESET_LAYOUTS' => 'Resetare machetele',
    'LBL_REMOVE_FIELDS' => 'Elimină câmpuri personalizate',
    'LBL_CLEAR_EXTENSIONS' => 'Curăță extensii',
    'LBL_HISTORY_TIMESTAMP' => 'Secvență de timp',
    'LBL_HISTORY_TITLE' => ' istoric',

    'fieldTypes' => array(
        'varchar' => 'Câmp text',
        'int' => 'Integrala',
        'float' => 'Baliza',
        'bool' => 'Căsuță',
        'enum' => 'Listă Derulantă',
        'dynamicenum' => 'Listă Derulantă Dinamică',
        'multienum' => 'Selecție multiplă',
        'date' => 'Dată',
        'phone' => 'Telefon',
        'currency' => 'Valută',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Relaționat',
        'address' => 'Adresă',
        'text' => 'Zonă text',
        'url' => 'URL',
        'iframe' => 'ICadru',
        'datetimecombo' => 'DataOra',
        'decimal' => 'Zecimal',
        'image' => 'Imagine',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Etichete utilizate frecvent",
        "all" => "Toate etichetele",
    ),

    'parent' => 'Asociază Flexibilă',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Selectați acest element pentru a-l elimina din lista derulantă. Orice câmp derulant care utilizează această listă cu acest element ca valoare nu va mai afișa valoarea, iar valoarea nu va mai putea fi selectată din câmpurile derulante. Sunteți sigur că doriți să continuați?",

    'LBL_ALL_MODULES' => 'Toate modulele',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (legat de {1} ID)',
);
