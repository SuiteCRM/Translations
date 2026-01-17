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
    'LBL_LOADING' => 'Caricamento' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Nascondi Opzioni' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Elimina' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Dai un <b>Nome</b> al pacchetto. Il nome deve essere alfanumerico e non contenere spazi. (Esempio: HR_Management)<br /><br />Puoi fornire un Autore e una Descrizione per pacchetto. <br /><br />Clicca Salva per creare il pacchetto.',
            'modify' => 'Le proprietà e le possibili azioni per il <b>Pacchetto</b> vengono visualizzate qui. <br /><br />Puoi modificare il <b>Nome</b>, l´<b>Autore</b> e la <b>Descrizione</b> del pacchetto, così come visualizzare e customizzare tutt i moduli contenuti all´interno del pacchetto.<br /><br />Clicca Nuovo Modulo per creare un modulo per il pacchetto. <br /><br />Se il pacchetto contiene almeno un modulo, puoi Pubblicare il pacchetto, così come Esportare le customizzazioni fatte nel pacchetto.',
            'name' => 'Questo è il <b>Nome</b> del seguente pacchetto. <br /><br />Il nome deve essere alfanumerico, iniziare con una lettere e non contenere spazi. (Esempio: HR_Management)',
            'author' => 'Questo è l´<b>Autore</b> che viene visualizzato durante l´installazione come nome dell´entità che ha creato il pacchetto.<br /><br />L´Autore può essere sia un individuo che un´azienda.',
            'description' => 'Questa è la <b>Descrizione</b> del pacchetto che viene visualizzata durante l´installazione.',
            'publishbtn' => 'Clicca <b>Esporta modulo</b> per salvare tutti i dati inseriti e creare un file .zip che è una versione installabile del pacchetto. <br /><br />Utilizza il Carica Moduli per caricare il file .zip e installare il pacchetto.',
            'deploybtn' => 'Clicca <b>Salva e Pubblica</b> per salvare tutti i dati inseriti e installare il pacchetto, inclusi i moduli, nella seguente instanza.',
            'duplicatebtn' => 'Clicca <b>Duplica</b> per copiare in contenuti del pacchetto in un nuovo pacchetto e pubblicarlo.<br /><br />Per il nuovo pachetto, sarà generato automaticamente un nuovo nome con un numero alla fine del nome del pacchetto utilizzato per creare il nuovo pacchetto. Puoi rinominare il nome del nuovo pacchetto inserendo un nuovo Nome e cliccando Salva.',
            'exportbtn' => 'Clicca <b>Esporta progetto</b> per creare un file .zip contenente le customizzazioni fatte nel pacchetto. <br /><br />Il file generato non è una versione installabile del pacchetto. <br /><br />Utilizza il Carica Moduli per importare il file .zip e visualizzare il pacchetto, incluse le customizzazioni, nel Costruttore Modulo.',
            'deletebtn' => 'Clicca <b>Cancella</b> per eliminare il pacchetto e tutti i files collegati al pacchetto.',
            'savebtn' => 'Clicca <b>Salva</b> per salvare tutti i dati inseriti collegati al pacchetto.',
            'existing_module' => 'Clicca l´icona del <b>Modulo</b> per modificare le proprietà e customizzare i campi, le relazioni e i layouts associati al modulo.',
            'new_module' => 'Clicca <b>Nuovo Modulo</b> per creare un nuovo modulo per questo pacchetto.',
            'key' => 'Questa <b>chiave</b> di 5 lettere, alfanumerica, verrà usata come prefisso per tutte le directory, i nomi delle classi e le tabelle del database, per tutti i moduli nel package corrente.<br><br>La chiave è usata nel tentativo di raggiungere l\'univocità dei nomi di tabelle.',
            'readme' => 'Fare clic per aggiungere testo <b>Readme</b> per questo pacchetto. <br><br>Il file Leggimi sarà disponibile al momento dell\'installazione.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Indicare un <b>nome</b> per il modulo. L\' <b>etichetta</b> che fornirai verrà visualizzata nella scheda di navigazione. <br/> <br/> Scegli di visualizzare la scheda di navigazione per il modulo, selezionando la casella di controllo <b>Scheda di Navigazione</b>. <br/> <br/> Poi scegli che tipo di modulo vorresti creare. <br/> <br/> Seleziona un tipo di modello. Ogni modello contiene un insieme specifico di campi, così come i layout predefiniti, da utilizzare come base per il tuo modulo. <br/> <br/> Fare clic su <b>Salva</b> per creare il modulo.',
            'modify' => 'È possibile cambiare le proprietà del modulo o personalizzarne i <b>campi</b>, i <b>layout</b> e le <b>relazioni</b>.',
            'importable' => 'Selezionando la casella di controllo <b>importabile</b> abiliterai l\'importazione per questo modulo. <br><br>Un link per l\'importazione guidata comparirà nel pannello collegamenti nel modulo. L\'importazione guidata facilita l\'importazione di dati da fonti esterne nel modulo personalizzato.',
            'team_security' => 'Selezionando la casella di controllo <b>Sicurezza di Team</b> abiliterai la sicurezza di team per questo modulo. <br/> <br/> Se è attivata la sicurezza di team, il campo di selezione Team comparirà all\'interno dei record nel modulo ',
            'reportable' => 'Selezionando questa casella di controllo permetterà a questo modulo di poter eseguire i report.',
            'assignable' => 'Selezionando questa casella di controllo permetterà a un record di questo modulo di essere assegnato ad un utente.',
            'has_tab' => 'Selezionando <b>scheda di Navigazione</b> fornirai una scheda di navigazione al modulo.',
            'acl' => 'Selezionando questa casella di controllo verranno abilitati i controlli di accesso su questo modulo, compresa la protezione a livello di campo.',
            'studio' => 'Selezionando questa casella di controllo consentirà agli amministratori di personalizzare questo modulo all\'interno di Studio.',
            'audit' => 'Selezionando questa casella di controllo abiliterai l\'Audit per questo modulo. Le modifiche a determinati campi saranno registrate affinché gli amministratori possano esaminarne la cronologia.',
            'viewfieldsbtn' => 'Fare clic su <b>Visualizza campi</b> per visualizzare i campi associati al modulo e per creare e modificare campi personalizzati.',
            'viewrelsbtn' => 'Fare clic su <b>Visualizza relazioni</b> per visualizzare le relazioni associate al modulo e crearne nuove.',
            'viewlayoutsbtn' => 'Fare clic su <b>Visualizza layout</b> per visualizzare il layout del modulo e per personalizzare la disposizione dei campi all\'interno del layout.',
            'duplicatebtn' => 'Fare clic su <b>Duplica</b> per copiare le proprietà del modulo in un nuovo modulo e visualizzare il nuovo modulo. <br/> <br/> Per il nuovo modulo, un nuovo nome verrà generato automaticamente aggiungendo un numero alla fine del nome.',
            'deletebtn' => 'Fare clic su <b>Elimina</b> per eliminare questo modulo.',
            'name' => 'Questo è il <b>Nome</b> del seguente pacchetto. <br /><br />Il nome deve essere alfanumerico, iniziare con una lettere e non contenere spazi. (Esempio: HR_Management)',
            'label' => 'Questa è l\' <b>etichetta</b> che verrà visualizzata nella scheda di navigazione del modulo. ',
            'savebtn' => 'Clicca <b>Salva</b> per salvare tutti i dati inseriti collegati al pacchetto.',
            'type_basic' => 'Il tipo di modello <b>base</b> fornisce campi di base, quali il nome, assegnato a, squadra, data di creazione e campi di descrizione.',
            'type_company' => 'Il tipo di modello di <b>azienda</b> fornisce campi specifici dell\'organizzazione, come nome della società, industria e indirizzo di fatturazione. <br/> <br/> Utilizzare questo modello per creare moduli che sono simili al modulo account standard.',
            'type_issue' => 'Il modello <b>problema</b> fornisce campi specifici per i bug e i reclami, quali numero, stato, priorità e descrizione. <br/> <br/> Utilizzare questo modello per creare moduli che sono simili ai moduli standard Reclami e Bug.',
            'type_person' => 'Il tipo di modello di <b>azienda</b> fornisce campi specifici dell\'organizzazione, come nome della società, industria e indirizzo di fatturazione. <br/> <br/> Utilizzare questo modello per creare moduli che sono simili al modulo account standard.',
            'type_sale' => 'Il tipo di modello di <b>azienda</b> fornisce campi specifici dell\'organizzazione, come nome della società, industria e indirizzo di fatturazione. <br/> <br/> Utilizzare questo modello per creare moduli che sono simili al modulo account standard.',
            'type_file' => 'Il modello <b>File</b> fornisce campi specifici per i documenti, come nome del File, tipo di documento e data di pubblicazione. <br><br>Utilizzare questo modello per creare moduli che sono simili al modulo standard Documenti.',

        ),
        'dropdowns' => array(
            'default' => 'Tutte le <b>liste valori</b> per l\'applicazione sono elencate qui. <br><br>Le liste valori possono essere utilizzate per i campi di riepilogo a discesa in qualsiasi modulo. <br> <br>Per apportare modifiche a una lista valori esistente, fare clic sul nome della stessa. <br><br>Cliccare <b>Aggiungi Dropdown</b> per creare una nuova lista valori.',
            'editdropdown' => 'Le liste valori possono essere utilizzate per i campi a discesa standard o personalizzati in qualsiasi modulo. <br><br>Fornire un <b>nome</b> per la lista valori. <br> <br>Se sono installati dei pacchetti lingua nell\'applicazione, è possibile selezionare la <b>lingua</b> da utilizzare per gli elementi dell\'elenco. <br><br>Nel campo <b>Nome elemento</b>, specificare un nome per l\'opzione nell\'elenco a discesa. Questo nome non apparirà nell\'elenco a discesa che è visibile agli utenti. <br><br>Nel campo <b>Etichetta visualizzata</b>, fornire un\'etichetta che sarà visibile agli utenti. <br> <br>Dopo aver inserito il nome dell\'elemento e l\'etichetta visualizzata, fare clic su <b>Aggiungi</b> per aggiungere l\'elemento alla lista valori. <br><br>Per riordinare gli elementi nell\'elenco, trascinare e rilasciare gli elementi nelle posizioni desiderate. <br> <br>Per modificare l\'etichetta visualizzata di un elemento, fare clic sulla <b>icona di modifica</b> e immettere una nuova etichetta. Per eliminare un elemento dalla lista valori, fare clic sulla <b>icona Elimina</b>. <br><br>Per annullare una modifica apportata a un\'etichetta visualizzata, fare clic su <b>Annulla</b>. Per ripristinare una modifica che è stata annullata, fare clic su <b>Ripristina</b>. <br><br>Fare clic su <b>Salva</b> per salvare la lista valori.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Tutti i campi che possono essere visualizzati nel <b>sottopannello</b> appaiono qui. <br><br>La colonna <b>predefinito</b> contiene i campi che verranno visualizzati nel sottopannello. <br/> <br/> La colonna <b>nascosto</b> contiene i campi disponibili per essere aggiunti ai campi predefiniti.'
        ,
            'savebtn' => 'Fare clic su <b>Salva & Distribuisci</b> per salvare le modifiche apportate e renderle attive all\'interno del modulo.',
            'historyBtn' => 'Fare clic su <b>Visualizza cronologia</b> per visualizzare e ripristinare un layout salvato in precedenza.',
            'historyDefault' => 'Fare clic su <b>Ripristina predefinita</b> per ripristinare una vista al layout originale.',
            'Hidden' => 'Campi <b>nascosti</b> non vengono visualizzati nel subpanel.',
            'Default' => 'Campi <b>predefiniti</b> visualizzati nel subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Tutti i campi che possono essere visualizzati nel <b>controllo ListView</b> vengono visualizzati qui. <br><br>La colonna <b>predefinita</b> contiene i campi che vengono visualizzati nel controllo ListView per impostazione predefinita. <br/> <br/> La colonna <b>disponibile</b> contiene campi che un utente può selezionare nella ricerca per creare un controllo personalizzato ListView. <br/> <br/> La colonna di <b>nascosto</b> contiene campi che possono essere aggiunti al Default o colonna disponibile.'
        ,
            'savebtn' => 'Fare clic su <b>Salva & Distribuisci</b> per salvare le modifiche apportate e renderle attive all\'interno del modulo.',
            'historyBtn' => 'Fare clic su <b>Visualizza cronologia</b> visualizzare e ripristinare un layout salvato in precedenza nella cronologia.<br><br><b>Ripistina</b> senza<b>Visualizza cronologia</b> ripristina il posizionamento del campo all\'interno del layout salvato in precedenza. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'historyDefault' => 'Fare clic su <b>Ripristina predefinita</b> per ripristinare una vista al layout originale. <br><br><b>Ripristina Default</b> ripristina solo il posizionamento di campo all\'interno del layout originale. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'Hidden' => 'I campi <b>Hidden</b> non sono attualmente disponibili per la visualizzazione in elenco dagli utenti.',
            'Available' => 'Campi <b>disponibili</b> non vengono visualizzati per impostazione predefinita, ma possono essere aggiunti ai controlli ListView dagli utenti.',
            'Default' => 'Campi visualizzati per impostazione <b>predefinita</b> nelle viste non personalizzate dagli utenti.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Tutti i campi che possono essere visualizzati nelle <b>viste</b> appaiono qui. <br><br>La colonna <b>predefinito</b> contiene i campi che verranno visualizzati nelle viste per impostazione predefinita. <br/> <br/> La colonna <b>nascosto</b> contiene i campi disponibili per essere aggiunti ai campi predefiniti o nascosti.'
        ,
            'savebtn' => 'Fare clic su <b>Salva & Distribuisci</b> per salvare le modifiche apportate e renderle attive all\'interno del modulo.',
            'historyBtn' => 'Fare clic su <b>Visualizza cronologia</b> visualizzare e ripristinare un layout salvato in precedenza nella cronologia.<br><br><b>Ripistina</b> senza<b>Visualizza cronologia</b> ripristina il posizionamento del campo all\'interno del layout salvato in precedenza. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'historyDefault' => 'Fare clic su <b>Ripristina predefinita</b> per ripristinare una vista al layout originale. <br><br><b>Ripristina Default</b> ripristina solo il posizionamento di campo all\'interno del layout originale. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'Hidden' => 'I campi <b>Hidden</b> non sono attualmente disponibili per la visualizzazione in elenco dagli utenti.',
            'Default' => 'Campi visualizzati per impostazione <b>predefinita</b> nelle viste non personalizzate dagli utenti.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Tutti i campi che possono essere visualizzati nel modulo di <b>filtro</b> appaiono qui. <br><br>La colonna <b>predefinito</b> contiene i campi che verranno visualizzati nel modulo di ricerca. <br/> <br/> La colonna <b>nascosto</b> contiene campi disponibili per essere aggiunti nel modulo di ricerca da un amministratore.'
        ,
            'savebtn' => 'Clicca <b>Salva & Applica</b> per salvare le modifiche e renderle attive',
            'Hidden' => 'I campi <b> nascosti </b> non vengono visualizzati nella ricerca.',
            'historyBtn' => 'Fare clic su <b>Visualizza cronologia</b> visualizzare e ripristinare un layout salvato in precedenza nella cronologia.<br><br><b>Ripistina</b> senza<b>Visualizza cronologia</b> ripristina il posizionamento del campo all\'interno del layout salvato in precedenza. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'historyDefault' => 'Fare clic su <b>Ripristina predefinita</b> per ripristinare una vista al layout originale. <br><br><b>Ripristina Default</b> ripristina solo il posizionamento di campo all\'interno del layout originale. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'Default' => 'Campi visualizzati per impostazione <b>predefinita</b> nella ricerca.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'L\'area di <b>Layout</b> contiene i campi attualmente visualizzati all\'interno della <b>Vista Dettaglio</b>. <br/> <br/> La <b>casella degli strumenti</b> contiene il <b>Cestino</b> e i campi e gli elementi di layout che possono essere aggiunti al layout. <br><br>Fare modifiche al layout trascinando e rilasciando elementi e campi tra la <b>casella degli strumenti</b> e il <b>Layout</b> e all\'interno del layout stesso. <br> <br>Per rimuovere un campo dal layout, trascinare il campo per il <b>Cestino</b>. Il campo sarà quindi disponibile nella casella degli strumenti per aggiungere al layout.',
            'defaultquickcreate' => 'L\'area <b>Layout</b> contiene i campi attualmente visualizzati all\'interno del modulo <b>QuickCreate</b>. <br><br>Il modulo QuickCreate viene visualizzato nel sottopannello del modulo quando si fa clic sul pulsante Crea. <br/> <br/> La <b>casella degli strumenti</b> contiene il <b>Cestino</b> e i campi e gli elementi che possono essere aggiunti al layout. <br><br>Fare modifiche al layout trascinando e rilasciando elementi e campi tra la <b>casella degli strumenti</b> e il <b>Layout</b> e all\'interno del layout stesso. <br> <br>Per rimuovere un campo dal layout, trascinare il campo sul <b>Cestino</b>. Il campo sarà quindi disponibile nella casella degli strumenti per essere aggiunto al layout.',
            //this default will be used for edit view
            'default' => 'L\'area di <b>Layout</b> contiene i campi attualmente visualizzati all\'interno della <b>Modifica Vista </b>. <br/> <br/> La <b>casella degli strumenti</b> contiene il <b>Cestino</b> e i campi e gli elementi di layout che possono essere aggiunti al layout. <br><br>Fare modifiche al layout trascinando e rilasciando elementi e campi tra la <b>casella degli strumenti</b> e il <b>Layout</b> e all\'interno del layout stesso. <br> <br>Per rimuovere un campo dal layout, trascinare il campo per il <b>Cestino</b>. Il campo sarà quindi disponibile nella casella degli strumenti per aggiungere al layout.',
            'saveBtn' => 'Fare clic su <b>Salva</b> per conservare le modifiche apportate al layout dall\'ultima volta che è stato salvato. <br><br>Le modifiche non verranno visualizzate nel modulo fino a quando non si distribuiscono le modifiche salvate.',
            'historyBtn' => 'Fare clic su <b>Visualizza cronologia</b> visualizzare e ripristinare un layout salvato in precedenza nella cronologia.<br><br><b>Ripistina</b> senza<b>Visualizza cronologia</b> ripristina il posizionamento del campo all\'interno del layout salvato in precedenza. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'historyDefault' => 'Fare clic su <b>Ripristina predefinita</b> per ripristinare una vista al layout originale. <br><br><b>Ripristina Default</b> ripristina solo il posizionamento di campo all\'interno del layout originale. Per modificare le etichette dei campi, fare clic sull\'icona modifica accanto a ciascun campo.',
            'publishBtn' => 'Fare clic su <b>Salva & Distribuisci</b> per salvare tutte le modifiche apportate al layout dall\'ultima volta che è stato salvato e attivare le modifiche nel modulo. <br><br>Il layout verrà immediatamente visualizzato nel modulo.',
            'toolbox' => 'La <b>casella degli Strumenti</b> contiene il <b>Cestino</b>, gli elementi di layout aggiuntivi ed il set di campi disponibili da aggiungere al layout. <br/> <br/> I campi nella casella degli strumenti e gli elementi di layout possono essere trascinati e rilasciati nel layout e i campi e gli elementi di layout possono essere trascinati e rilasciati dal layout nella casella degli Strumenti. <br><br>Il layout di elementi sono <b>pannelli</b> e <b>righe</b>. Aggiunta una nuova riga o un nuovo pannello per il layout fornisce ulteriori posizioni nel layout per i campi. <br/> <br/> Trascinare e rilasciare i campi nella casella degli strumenti o layout in una posizione di campo occupata per scambiare le posizioni dei due campi. <br/> <br/> Il campo <b>Filler</b> crea uno spazio vuoto nel layout dove è collocato.',
            'panels' => 'L\'area di <b>Layout</b> fornisce una visualizzazione di come il layout verrà visualizzato all\'interno del modulo quando vengono distribuite le modifiche apportate al layout. <br/> <br/> È possibile riposizionare campi, righe e pannelli trascinandoli e rilasciandoli nella posizione desiderata. <br/> <br/> Rimuovere elementi trascinandoli e rilasciandoli nel <b>Cestino</b> nella casella degli strumenti, o aggiungere nuovi elementi e campi trascinandoli dalla <b>casella degli strumenti</b> s e farli cadere nella posizione desiderata nel layout.',
            'delete' => 'Trascina e rilascia qualsiasi elemento qui per rimuoverlo dal layout',
            'property' => 'Modifica l´etichetta di questo campo. <br /><b>Tab Ordinamento</b> controlla in quale ordine il tasto Tab si sposta tra i campi.',
        ),
        'fieldsEditor' => array(
            'default' => 'I <b>Campi</b> disponibili per il modulo sono elencati qui, ordinati per nome.<br><br>I campi personalizzati creati per il modulo vengono visualizzati sopra i campi di default disponibili.<br><br>Per modificare un campo clicca sul <b>Nome Campo</b>.<br/><br/>Per creare un nuovo campo, clicca su <b>Aggiungi campo</b>.',
            'mbDefault' => 'I <b>Campi</b> disponibili per il modulo sono elencati qui, ordinati per nome.<br><br>Per configurare le proprità del campo, clicca sul Nome del campo.<br><br>Per creare un nuovo campo, clicca su <b>Aggiungi campo</b>. La label (etichetta), insieme alle altre proprietà del campo, può essere modificata successivamente alla creazione cliccando sul nome del campo.<br><br>Dopo che il modulo è stato installato, i nuovi campi creati in Module Builder sono considerati campi standard nel modulo installato in Studio.',
            'addField' => 'Seleziona un <b>Tipo di dato</b> per il nuovo campo. Il tipo di dati selezionato determina che tipo di caratteri possono essere inseriti nel campo. Per esempio, solo numeri interi possono essere inseriti in campi di tipo Integer.<br><br>Inserisci il <b>Nome</b> del campo. Il nome deve essere alfanumerico e non deve contenere spazzi. Gli underscore (linietta bassa) sono accettati.<br><br>The <b>Display Label</b> è la label (etichetta) che comparirà accanto al campo nel layout del modulo. La <b>Etichetta di sistema</b> è usata per riferirsi al campo nel codice sorgente.<br><br>A seconda del tipo di dati selezionato, alcune delle seguenti proprità possono essere impostate sul campo:<br><br><b>Testo di aiuto</b> appare quando un utente passa con il cursore sul campo e può essere utilizzato per informarlo sul tipo di inserimento richiesto.<br><br><b>Testo di commento</b> è visibile solo nello Studio o nel Module Builder, e può essere usato per descrivere il campo agli amministratori.<br><br><b>Valore di Default</b> comparirà nel campo. Gli utenti possono inserire un valore diverso nel campo o utilizzare il valore di default.<br><br>Seleziona la checkbox <b>Aggiornamento Massivo</b> per poter utilizzare la funzione di aggiornamento massivo per questo campo.<br><br>La <b>Dimensione massima</b> determina il numero massimo di caratteri che possono essere inseriti nel campo.<br><br>Seleziona la checkbox <b>Campo obbligatorio</b> per rendere obbligatoria la compilazione del campo. Un valore deve essere inserito nel campo per poter procedere al salvataggio del form che lo contiene.<br><br>Seleziona la checkbox <b>Reportable</b> per far si che il campo venga usato come filtro e possa esssere inclso nei report.<br><br>Seleziona la checkbox <b>Controllo (Audit)</b> per poter tracciare nel Change Log i cambiamenti apportati al campo.<br><br>Seleziona una opzione nel campo <b>Importabile</b> per permettere, impedire o rendere obbligatorio includere il campo nella creazione guidata di importazione (Import Wizard).<br><br>Seleziona una opzion nel campo <b>Unisci duplicati (Duplicate Merge)</b> per abilitare o disabilitare le funzioni di trova duplicati e unisci duplicati.<br><br>Per alcuni tipi di dati sono disponibili proprità aggiuntive.',
            'editField' => 'Le proprietà di questo campo possono essere personalizzate. <br><br>Fare clic su <b>Clona</b> per creare un nuovo campo con le stesse proprietà.',
            'mbeditField' => 'La <b>Etichetta</b> di un campo del template può essere personalizzata. Le altre proprieà del campo non possono essere personalizzate.<br><br>Clicca <b>Clona</b> per creare un nuovo campo con le stesse proprietà.<br><br>Per eliminare un campo del template in modo che non venga mostrato nel modulo, elimina il campo dal <b>Layouts</b> appropriato.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'La personalizzazioni fatte nello Studio di questa installazione possono essere impacchettate e applicate in un´altra installazione utilizzando il <b>Caricatore di moduli (Module Loader)</b>.<br><br>Fornisci un <b>Nome del Pacchetto</b>. Puoi inserire l´<b>Autore</b> e la <b>Descrizione</b> del pacchetto.<br><br>Seleziona i moduli che contengono le personalizzazioni da esportare. (Vengono mostrati soltanto i moduli che contengono personalizzazioni)<br><br>Clicca su <b>Esporta</b> per creare un file archivio .zip  che conterrà le personalizzazioni da esportare.',
            'exportCustomBtn' => 'Clicca su <b>Esporta</b> per creare un file .zip contenente le personalizzazioni del pacchetto che vuoi esportare.',
            'name' => 'Questo è il <b>nome</b> del pacchetto. Questo nome verrà visualizzato durante l\'installazione.',
            'author' => 'L´<b>Autore</b> è il nome dell´entità che ha creato il pacchetto. L´autore può essere sia una organizzazione che un individuo. L´autore verrà mostrato nel caricatore di moduli (Module Loader) dopo che il pacchetto viene caricato per essere installato nello Studio.',
            'description' => 'Questa è la <b>Descrizione</b> del pacchetto che viene visualizzata durante l´installazione.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Benvenuti nell\'area <b>Strumenti di sviluppo</b>. <br/> <br/> Usa gli strumenti all\'interno di quest\'area per creare e gestire moduli, campi standard e personalizzati.',
            'studioBtn' => 'Usa <b>Studio</b> per personalizzare i moduli implementati.',
            'mbBtn' => 'Usa <b>Module Builder</b> per creare nuovi moduli.',
            'sugarPortalBtn' => 'Utilizzare <b>l\'Editor del portale di SuiteCRM</b> per gestire e personalizzare il portale SuiteCRM.',
            'dropDownEditorBtn' => 'Utilizzare <b>Editor di menu a discesa</b> per aggiungere e modificare elenchi a discesa globale per campi elenco a discesa.',
            'appBtn' => 'Modalità di applicazione è dove è possibile personalizzare varie proprietà del programma, ad esempio quanti report TPS vengono visualizzati sulla Home page',
            'backBtn' => 'Torna al passaggio precedente.',
            'studioHelp' => 'Use <b>Studio</b> to determine what and how information is displayed in the modules',
            'moduleBtn' => 'Fare clic per modificare questo modulo.',
            'moduleHelp' => 'I componenti che è possibile personalizzare per il modulo vengono visualizzati qui. <br><br> Fare clic su un\'icona per selezionare il componente da modificare.',
            'fieldsBtn' => 'Creare e personalizzare i <b>campi</b> per memorizzare le informazioni nel modulo.',
            'labelsBtn' => 'Modificare le <b>etichette</b> che visualizzano per i campi e altri titoli nel modulo.',
            'relationshipsBtn' => 'Aggiungi nuovo o visualizzare le <b>relazioni</b> esistenti per il modulo.',
            'layoutsBtn' => 'Personalizza il modulo <b> Layout </b>. I layout sono le diverse viste dei campi contenenti i moduli. <br><br> È possibile determinare quali campi vengono visualizzati e come sono organizzati in ogni layout.',
            'subpanelBtn' => 'Determinare i campi da visualizzare nei <b>sottopannelli</b> nel modulo.',
            'portalBtn' => 'Personalizzare il modulo di <b>layout</b> che compare nel <b>Portale SuiteCRM</b>.',
            'layoutsHelp' => 'Il modulo <b>Layout</b>che può essere personalizzato può essere visualizzato qui. <br><br> I layout visualizzano campi e dati di campo. <br> <br> Fare clic su un\'icona per selezionare il layout da modificare.',
            'subpanelHelp' => 'I <b>Sottopannelli</b> nel modulo che possono essere personalizzati vengono visualizzati qui. <br> <br> Fare clic su un\'icona per selezionare il modulo da modificare.',
            'newPackage' => 'Fare clic su <b>Nuovo pacchetto</b> per creare un nuovo pacchetto.',
            'exportBtn' => 'Fare clic su <b>Esporta personalizzazioni</b> per creare e scaricare un pacchetto che contiene le personalizzazioni effettuate in Studio per moduli specifici.',
            'mbHelp' => '<b>Module Builder</b> consente di creare pacchetti contenenti moduli personalizzati basati su oggetti standard o personalizzati.',
            'viewBtnEditView' => 'Personalizzare il layout di <b>EditView</b> del modulo. <br><br>The EditView è la forma contenente campi di input per l\'acquisizione dei dati immessi dall\'utente.',
            'viewBtnDetailView' => 'Personalizzare il layout <b>DetailView</b> del modulo. <br><br> Dettagli visualizza i dati dei campi inseriti dall\'utente.',
            'viewBtnDashlet' => 'Personalizzare <b>SuiteCRM Dashlet</b>, tra cui il SuiteCRM Dashlet ListView e ricerca del modulo. <br><br>The SuiteCRM Dashlet saranno disponibili per aggiungere alle pagine del modulo di casa.',
            'viewBtnListView' => 'Personalizza il layout della <b>ListView</b> del modulo.<br><br>I risultati delle ricerche compaiono nella ListView.',
            'searchBtn' => 'Personalizza i layout della <b>Ricerca</b> del modulo.<br><br>Decidi quali campi possono essere utilizzati per filtrare i redord che compaiono nella ListView.',
            'viewBtnQuickCreate' => 'Personalizza il layout della <b>QuickCreate</b> del modulo.<br><br>La form QuickCreate compare nei moduli subpanels e Emails.',
            'addLayoutHelp' => "Per creare una struttura personalizzata per un Gruppo di Sicurezza, selezionare il Gruppo di Sicurezza appropriato e la struttura da copiare come punto di partenza.",
            'searchHelp' => 'I form di <b>Ricerca</b> che possono essere personalizzati compaiono qui.<br><br>I form di ricerca contengono i campi per filtare i record.<br><br>Clicca su una icona per selezionare il layout da modificare.',
            'dashletHelp' => 'I layout delle <b>SuiteCRM Dashlet</b> che possono essere personalizzati compaiono qui.<br><br>I SuiteCRM Dashlet saranno disponibili per essere aggiunti al modulo Home.',
            'DashletListViewBtn' => 'La <b>Suite Dashlet ListView</b> mostra record in base ai filtri di ricerca della Suite Dashlet.',
            'DashletSearchViewBtn' => 'La <b>Ricerca Suite Dashlet</b> filtra i record per la listView di Suite Dashlet.',
            'popupHelp' => 'I layout delle <b>Popup</b> che possono essere personalizzati compaiono qui.<br>',
            'PopupListViewBtn' => 'La <b>Popup ListView</b> mostra record in base alla vista Popup della ricerca.',
            'PopupSearchViewBtn' => 'La <b>Popup Ricerca</b> mostra record in base alla vista Popup.',
            'BasicSearchBtn' => 'Personalizza il form della <b>Ricerca Base Search</b> che compare nella scheda di ricerca base nell´area di ricerca del modulo.',
            'AdvancedSearchBtn' => 'Personalizza il form di <b>Filtro avanzato</b> che compare nella scheda di ricerca avanzata nell´area di ricerca del modulo.',
            'portalHelp' => 'Gestire e personalizzare il <b>Portale SuiteCRM</b>.',
            'SPUploadCSS' => 'Caricare un <b>foglio di stile</b> per il portale SuiteCRM.',
            'SPSync' => 'Personalizzazioni di <b>sincronizzazione</b> per l\'istanza di SuiteCRM portale.',
            'Layouts' => 'Personalizza i <b>Layout</b> dei moduli del portale SuiteCRM.',
            'portalLayoutHelp' => 'I moduli all\'interno del portale SuiteCRM appaiono in quest\'area. <br><br>Selezionare un modulo per modificare il <b>layout</b>.',
            'relationshipsHelp' => 'Le <b>Relazioni</b> create tra il modulo e altri moduli attivi compaioni qui.<br><br>Il <b>Nome</b> della relazione è il nome generato dal sistema.<br><br>Il <b>Modulo Principale (Primary Module)</b> è il modulo proprietario della relazione. Per esempio, Tutte le proprità delle relazioni di cui il modulo Aziende (Accounts) è il modulo principale sono archiviate nelle tabelle delle aziende del database.<br><br>Il <b>Tipo</b> di relazione che esiste tra il modulo principale ed i <b>Moduli Collegati</b>.<br><br>Clicca su un titolo di colonna per ordinare per quella colonna.<br><br>Clicca su una riga della tabella di relazione per vedere le proprietà associate alla relazione.<br><br>Clicca su <b>Aggiungi Relazione</b> per creare una nuova relazione.<br><br>Le relazioni possono essere create tra due moduli attivi (deployed modules).',
            'relationshipHelp' => '<b>Relazioni</b> possono essere create tra un modulo e un altro modulo attivo.<br><br>Le relazioni sono espresse attraverso la comparsa di sottopannelli e campi di collegamento nei record del modulo.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br><b>Uno-a-uno (One-to-One)</b> - I record di entrambi i moduli conterranno campi collegati.<br><br><b>Uno-a-Molti (One-to-Many)</b> - Il record del modulo principale conterrà un subpanel, e il record del modulo collegato conterrà un campo collegato.<br><br><b>Molti-a-Molti (Many-to-Many)</b> - I record di entrambi i moduli mostreranno subpanel.<br><br>Seleziona <b>Modulo collegato</b> per la relazione. <br><br>Se il tipo di relazione coinvolge subpanels, seleziona la vista subpanel per i moduli appropriati.<br><br>Clicca su <b>Salva</b> per creare la relazione.',
            'convertLeadHelp' => 'Qui puoi aggiungere moduli alla schermata del layout di conversione e modificare il layout di quelle esistenti.<br/>
Puoi riordinare i moduli trascinandone le righe nella tabella.<br/><br/>
<b>Modulo:</b> Il nome del modulo.<br/><br/>
<b>Obbligatorio:</b> I moduli obbligatori devono essere creati prima che il lead possa essere convertito.<br/><br/>
<b>Copia Dati:</b> se selzionato, i campi del lead verranno copiati nei campi con lo stesso nome nei record appena creati.<br/><br/>
<b>Permetti selezione:</b> è possibile selezionare i moduli con un campo di relazioni in Contatti, invece di crearli durante il processo di conversione.<br/><br/>
<b>Modifica:</b> modifica il layout del convertitore per questo modulo.<br/><br/>
<b>Elimina:</b> rimuove questo modulo dal layout del convertitore.<br/><br/>',


            'editDropDownBtn' => 'Modificare un elenco a discesa globale',
            'addDropDownBtn' => 'Aggiungere un nuovo elenco a discesa globale',
        ),
        'fieldsHelp' => array(
            'default' => 'I <b> Campi </b> nel modulo sono elencati qui per Nome campo. <br><br> Il modello di modulo include un insieme di campi predeterminati. <br><br> Per creare un nuovo campo, fare clic su <b> Aggiungi campo </b>. <br><br> Per modificare un campo, fai clic sul <b> Nome campo </b>. <br/> <br/> Dopo che il modulo è stato distribuito, i nuovi campi creato in Costruzione Modulo, insieme ai campi del modello, sono considerati campi standard in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Le <b>Relazioni</b> create tra il modulo e altri moduli attivi compaioni qui.<br><br>Il <b>Nome</b> della relazione è il nome generato dal sistema.<br><br>Il <b>Modulo Principale (Primary Module)</b> è il modulo proprietario della relazione. Per esempio, Tutte le proprità delle relazioni di cui il modulo Aziende (Accounts) è il modulo principale sono archiviate nelle tabelle delle aziende del database.<br><br>Il <b>Tipo</b> di relazione che esiste tra il modulo principale ed i <b>Moduli Collegati</b>.<br><br>Clicca su un titolo di colonna per ordinare per quella colonna.<br><br>Clicca su una riga della tabella di relazione per vedere le proprietà associate alla relazione.<br><br>Clicca su <b>Aggiungi Relazione</b> per creare una nuova relazione.<br><br>Le relazioni possono essere create tra due moduli attivi (deployed modules).',
            'addrelbtn' => 'mouse over help per aggiungi relazione..',
            'addRelationship' => '<b>Relazioni</b> possono essere create tra un modulo e un altro modulo attivo.<br><br>Le relazioni sono espresse attraverso la comparsa di sottopannelli e campi di collegamento nei record del modulo.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br><b>Uno-a-uno (One-to-One)</b> - I record di entrambi i moduli conterranno campi collegati.<br><br><b>Uno-a-Molti (One-to-Many)</b> - Il record del modulo principale conterrà un subpanel, e il record del modulo collegato conterrà un campo collegato.<br><br><b>Molti-a-Molti (Many-to-Many)</b> - I record di entrambi i moduli mostreranno subpanel.<br><br>Seleziona <b>Modulo collegato</b> per la relazione. <br><br>Se il tipo di relazione coinvolge subpanels, seleziona la vista subpanel per i moduli appropriati.<br><br>Clicca su <b>Salva</b> per creare la relazione.',
        ),
        'labelsHelp' => array(
            'default' => '<b>Etichette</b> per i campi e altri titoli nel modulo possono essere modificati.<br><br>modificare l\'etichetta facendo clic all\'interno del campo, inserendo una nuova etichetta e cliccando su <b>salvare</b>.<br><br>se altre lingue sono installati nell\'applicazione, è possibile selezionare <b>lingua</b> da utilizzare per le etichette.',
            'saveBtn' => 'Clicca <b>Salva</b> per salvare i cambiamenti.',
            'publishBtn' => 'Clicca <b>Salva & Applica</b> per salvare le modifiche e renderle attive.',
        ),
        'portalSync' => array(
            'default' => 'Iserisci la <b>URL del portale SuiteCRM</b> per aggiornare, e clicca <b>Vai</b>.<br><br>Dopo inserisci un nome utente e password SuiteCRM validi, e clicca <b>Inizia Sincronizazione</b>.<br><br>Le personalizzazioni apportate al portale di SuiteCRM <b>Layouts</b>, insieme al <b>Foglio di Stile</b> se è stato caricato, will be transferred to specified the portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'Puoi personalizzare l´aspetto del tuo portale SuiteCRM usando un foglio di stile.<br><br>Seleziona e carica un <b>Foglio di Stile</b>.<br><br>Il foglio di stile sarà implementato nel portale di SuiteCRM alla successiva sincronizzazione.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Per iniziare un progetto, clicca su <b>Nuovo Pacchetto</b> per creare un nuovo pacchetto per ospitare i tuoi moduli personalizzati. <br/><br/>Ogni pacchetto può contenere uno o più moduli.<br/><br/>Per esempio, potresti voler creare un pacchetto contenente un modulo personalizzato collegato al modulo standard delle aziende. Oppure potresti voler creare un pacchetto che contenga diversi nuovi moduli che collaborano ad in un unico progetto, che sono collegati tra di loro e sono collegati anche ad altri moduli già presenti nel programma.',
            'somepackages' => 'Un <b>Pacchetto</b> si comporta come un contenitore di moduli personalizzati, e tutti fanno parte di un unico progetto. Il pacchetto può contenere uno o più <b>moduli personalizzati</b> che possono essere collegati fra di loro o ad altri moduli del programma.<br/><br/>Dopo aver creato un pacchetto per il tuo progetto, puoi creare moduli immediatamente per il pacchetto oppure puoi tornare al Module Builder in un secondo momento per completare il progetto.<br/><br/>Quando il progetto è completo, puoi <b>Attivare (Deploy)</b> il pacchetto e installare i moduli personalizzati nell´applicazione.',
            'afterSave' => 'Il pacchetto deve contenere almeno un modulo. Puoi creare uno o più moduli personalizzati per il pacchetto.<br/><br/>Clicca su <b>Nuovo Modulo</b> per creare moduli personalizzati per questo pacchetto.<br/><br/>Dopo aver creato almeno un pacchetto, puoi pubblicare o attivare il pacchetto per renderlo disponibile alla tua istanza e/o altre istanze degli utenti.<br/><br/>Per attivare il pacchetto in un solo passggio nella tua istanza di SuiteCRM, clicca su <b>Applica</b>.<br/><br/>Clicca su <b>Pubblica</b> per salvare il pacchetto come file .zip. Dopo aver salvato il file .zip sul tuo sistema, usa il <b>Module Loader</b> per caricare e installare il pacchetto nella tua instanza di SuiteCRM. <br/><br/>Puoi distribuire il file ad altri utenti che potranno caricare e installare il pacchetto nelle loro istanze di SuiteCRM.',
            'create' => 'Dai un <b>Nome</b> al pacchetto. Il nome deve essere alfanumerico e non contenere spazi. (Esempio: HR_Management)<br /><br />Puoi fornire un Autore e una Descrizione per pacchetto. <br /><br />Clicca Salva per creare il pacchetto.',
        ),
        'main' => array(
            'welcome' => 'Usa gli <b>Strumenti per Sviluppatori</b> per creare e gestire i moduli e i campi personalizzati. <br/><br/>Per gestire i moduli nel programma, clicca su <b>Studio</b>. <br/><br/>Per creare moduli personalizzati, clicca su <b>Module Builder</b>.',
            'studioWelcome' => 'Tutti i moduli installati, inclusi quelli standard e i moduli caricati, sono pèersonalizzabili dallo Studio.'
        ),
        'module' => array(
            'somemodules' => "Dato che questo pacchetto contiene almeno un modulo, puoi <b>Attivare (Deploy)</b> i oduli nella tua istanza di SuiteCRM o <b>Pubblicare</b> il pacchetto per essere installabile in questa istanza o in altre istanze di SuiteCRM attraverso il <b>Module Loader</b>.<br/><br/>PEr installare il pacchetto direttamente nella tua istanza, clicca su <b>Applica</b>.<br/><br/>Per creare un file .zip del pacchetto che permetta la installazione nella tua o in altre istanze di SuiteCRM attraverso il <b>Module Loader</b>, clicca su <b>Pubblica</b>.<br/><br/>È possibile costruire i moduli per questo pacchetto in più fasi, e pubblicare o attivare (deploy) quando sarai pronto. <br/><br/>Dopo aver pubblicato o attivato il pacchetto, puoi fare modifiche alle proprietà del pacchetto e personalizzare i moduli successivamente, e quindi pubblicarlo o attivarlo nuovamente per applicare i cambiamenti.",
            'editView' => 'Qui puoi modificare un campo esistente. Puoi rimuovere qualsiasi campo esistente o aggiungere i campi disponibili contenuti nel pannello a sinistra.',
            'create' => 'Quando selezioni il <b>Tipo</b> di modulo che vuoi creare, tieni conto del tipo di campi che vuoi avere nel modulo. <br/><br/>Ogni template di modulo contiene una serie di campi pertinenti al tipo di modulo descritto dal titolo.<br/><br/><b>Base</b> - Fornisce campi di base che compaiono nei moduli standard, come Nome, Assegnato a, Team, Data di Creazione e Descrizione.<br/><br/><b>Azienda</b> - Fornisce campi appartenenti alle organizzazioni, come Nome Azienda, Sede e Indirizzo di fatturazione. Usa questo template per creare moduli simili al modulo standard delle aziende.<br/><br/><b>Persona</b> - Fornisce campi specifici degli idividui, come Titolo, Nome, Indirizzo e Numero di Telefono. Usa questo teemplate per creare moduli simili al modulo standard dei contatti e Leads.<br/><br/><b>Problema</b> - Fornisce campi relativi a problemi e bug, come Numero, Stato, Priorità e Descrizione. Usa questo template per creare moduli simili al modulo Cases and Bug Tracker.<br/><br/>Nota: Dopo avere creato il modulo, puoi modificare le etichette e i campi forniti dal template, oltre a creare campi personalizzati e aggiungerli ai layout del modulo.',
            'afterSave' => 'Personalizza il modulo per farli corrispondere ai tuoi bisogni modificando e creando campi, stabilendo relazioni con altri moduli e modificando la disposizione dei campi nei layouts.<br /><br />Per vedere i campi del template e gestire i campi personalizzati nel modulo, clicca su <b>Vedi Campi</b>.<br /><br />Per creare e getire le relazioni fra questo ed altri moduli già nella applicazione o altri moduli personalizzati contenuti nello stesso pacchetto, clicca su <b>Vedi Relazioni</b>.<br /><br />Per modificare i layout del modulo, clicca su <b>Vedi Layout</b>. Puoi modificare il layout delle viste Dettaglio Modifica e Lista del modulo, così come dei moduli già nel programma, dallo Studio.<br /><br />Per creare un modulo con le stesse proprietà di questo modulo, clicca su <b>Duplica</b>. Successivamente potrai personalizzare il nuovo modulo.',
            'viewfields' => 'I campi del modulo possono essere personalizzati per rispondere ai tuo bisogni.<br /><br />Non puoi eliminare i campi standard, ma puoi rimuoverli dai layout dalla pagina dei layout. <br /><br />Puoi creare rapidamente nuovi campi che abbiano proprità simili a campi esistenti cliccando su <b>Clona</b> nel form delle <b>Proprietà</b>. Inserisci qualsiasi nuova proprietà, e clicca su <b>Salva</b>.<br /><br />Si raccomanda di impostare tutte le proprietà dei campi standard e personalizzati prima di pubblicare e installare il pacchetto che contiene i moduli personalizzati.',
            'viewrelationships' => 'Puoi creare relazioni molti-a-molti tra questo modulo e altri moduli nel pacchetto, e/o tra questo modulo e altri moduli già installati nel programma.<br><br>Per creare relazioni uno-a-molti e uno-a-uno, crea <b>Relate</b> and <b>Flex Relate</b> campi per i moduli.',
            'viewlayouts' => 'Puoi gestire i campi sono disponibili per raccogliere dati dalla <b>Vista Modifica</b>. Puoi anche gestire quali dati mostrare dalla <b>Vista Dettaglio</b>. Le viste non devono corrispondere. <br/><br/>Il form di creazione rapida viene mostrato quando si clicca su <b>Crea</b> nel subpanel di un modulo. Di default, il layout della <b>Creazione Rapida</b> è lo stesso di quello di default della <b>Vista Modifica</b>. Puoi personalizzare il form di creazione rapida in modo che contenga campi differenti dalla Vista Modifica. <br><br>Puoi configurare la sicurezza del modulo usando la personalizzazione del layout insieme alla <b>Gestione Ruoli</b>.<br><br>',
            'existingModule' => 'Dopo la creazione e personalizzazione di questo modulo, è possibile creare moduli aggiuntivi o restituire al pacchetto per <b>pubblicare</b> o <b>distribuire</b> il pacchetto. <br><br>Per creare moduli aggiuntivi, fare clic su <b>Duplica</b> per creare un modulo con le stesse proprietà del modulo corrente o spostarsi indietro il pacchetto e fare clic su <b>Nuovo modulo</b>. <br> <br>Se si è pronti per <b>pubblicare</b> o <b>distribuire</b> il pacchetto contenente questo modulo, passare indietro al pacchetto per eseguire queste funzioni. È possibile pubblicare e distribuire pacchetti contenenti almeno un modulo.',
            'labels' => 'Le etichette di campi standard così come i campi personalizzati possono essere modificati. Modifica delle etichette dei campi, i dati memorizzati nei campi non avrà effetto.',
        ),
        'listViewEditor' => array(
            'modify' => 'Ci sono tre colonne visualizzate a sinistra. La colonna "Default" contiene i campi che vengono visualizzati in una visualizzazione elenco per impostazione predefinita, la colonna "Disponibile" contiene campi che un utente può scegliere di utilizzare per la creazione di una visualizzazione elenco personalizzato, e la colonna "Nascosto" contiene campi disponibili per voi come un admin o aggiungere l\'impostazione predefinita o colonne disponibili per utilizzano dagli utenti ma sono attualmente disabilitate.',
            'savebtn' => 'Facendo clic su <b>Salva</b> verranno salvate tutte le modifiche e saranno rese attive.',
            'Hidden' => 'Campi nascosti sono campi che non sono attualmente disponibili per gli utenti per l\'utilizzo nelle visualizzazioni elenco.',
            'Available' => 'Campi disponibili sono campi che non vengono visualizzati per impostazione predefinita, ma possono essere attivati dagli utenti.',
            'Default' => 'Campi predefiniti vengono visualizzati agli utenti che non hanno creato elenco personalizzato le impostazioni di visualizzazione.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Due colonne vengono mostrate a sinistra. La colonna "Default" contiene i campi che verranno mostrati nella vista di ricerca, e la colonna "Nascosto" contiene i campi che gli amministratori possono aggiungere alla vista.',
            'savebtn' => 'Facendo clic su <b>Salva</b> verranno salvate tutte le modifiche e saranno rese attive.',
            'Hidden' => 'Campi nascosti sono campi che non verranno mostrati nella visualizzazione ricerca.',
            'Default' => 'Campi predefiniti verranno mostrati nella visualizzazione ricerca.'
        ),
        'layoutEditor' => array(
            'default' => 'Ci sono due colonne visualizzate a sinistra. La colonna di destra, con l\'etichetta corrente di Layout o anteprima di Layout, è dove si modifica il layout del modulo. Colonna di sinistra, intitolata Toolbox, contiene elementi utili e strumenti per l\'uso quando si modifica il layout. <br/> <br/> Se l\'area di layout è intitolato Layout corrente allora si lavora su una copia del layout attualmente utilizzate dal modulo per la visualizzazione di. <br/> <br/> Se si intitola anteprima di Layout, si lavora su una copia creata in precedenza da un clic sul pulsante Salva, che potrebbe essere già stato cambiato dalla versione visualizzata dagli utenti di questo modulo.',
            'saveBtn' => 'Questo pulsante Salva il layout in modo che è possibile conservare le modifiche. Quando si torna a questo modulo si inizierà da questo cambiato il layout. Il layout tuttavia non si vedrà dagli utenti del modulo fino a quando si fare clic sul pulsante Salva e pubblica.',
            'publishBtn' => 'Fare clic su questo pulsante per pubblicare il layout. Ciò significa che questo layout sarà immediatamente visibili dagli utenti di questo modulo.',
            'toolbox' => 'La casella degli strumenti contiene una varietà di funzioni utili per la modifica dei formati, tra cui una zona di spazzatura, un insieme di elementi aggiuntivi e un set di campi disponibili. Ognuno di questi può essere trascinato e rilasciato sul layout.',
            'panels' => 'Quest\'area Mostra come sarà il layout per gli utenti di questo modulo quando sarà pubblicato. <br/> <br/> È possibile riposizionare gli elementi come pannelli, righe e campi trascinandoli e rilasciandoli; Elimina elementi trascinandoli e rilasciandoli sulla zona cestino nella casella degli strumenti, o aggiungere nuovi elementi trascinandoli dalla casella degli strumenti e rilasciandoli nella posizione desiderata.'
        ),
        'dropdownEditor' => array(
            'default' => 'Ci sono due colonne visualizzate a sinistra. La colonna di destra, con l\'etichetta corrente di Layout o anteprima di Layout, è dove si modifica il layout del modulo. Colonna di sinistra, intitolata Toolbox, contiene elementi utili e strumenti per l\'uso quando si modifica il layout. <br/> <br/> Se l\'area di layout è intitolato Layout corrente allora si lavora su una copia del layout attualmente utilizzate dal modulo per la visualizzazione di. <br/> <br/> Se si intitola anteprima di Layout, si lavora su una copia creata in precedenza da un clic sul pulsante Salva, che potrebbe essere già stato cambiato dalla versione visualizzata dagli utenti di questo modulo.',
            'dropdownaddbtn' => 'Questo pulsante aggiunge un nuovo elemento nell\'elenco a discesa.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Le personalizzazioni effettuate in Studio all\'interno dell\'istanza possono essere personalizzate e distribuite in un\'altra istanza. <br><br>Fornire un <b>nome di pacchetto</b>. È possibile fornire informazioni <b>autore</b> e <b>Descrizione</b> per il pacchetto. <br><br>Selezionare i moduli contenenti le personalizzazioni per esportare. (Solo moduli contenenti le personalizzazioni apparirà per selezionare). <br><br>Fare clic su <b>Esporta</b> per creare un file. zip per il pacchetto che contiene le personalizzazioni. Il file. zip possa essere caricato in un\'altra istanza attraverso <b>Module Loader</b>.',
            'exportCustomBtn' => 'Clicca su <b>Esporta</b> per creare un file .zip contenente le personalizzazioni del pacchetto che vuoi esportare.',
            'name' => 'Il <b>nome</b> del pacchetto verrà visualizzato nel Caricatore di moduli, quindi il pacchetto verrà caricato per l\'installazione in Studio.',
            'author' => 'L\' <b>autore</b> è il nome di chi ha creato il pacchetto. L\'autore può essere un individuo o un\'azienda. <br><br>L\'autore verrà visualizzato nel modulo caricatore, quindi il pacchetto viene caricato per l\'installazione in Studio.',
            'description' => 'Questa è la <b>Descrizione</b> del pacchetto che viene visualizzata durante l´installazione.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Benvenuti nell\'area <b>Strumenti di sviluppo</b>. <br/> <br/> Usa gli strumenti all\'interno di quest\'area per creare e gestire moduli, campi standard e personalizzati.',
            'studioBtn' => 'Utilizzare <b>Studio</b> per personalizzare moduli installati cambiando la disposizione del campo, selezionando quali campi sono disponibili e la creazione di campi dati personalizzati.',
            'mbBtn' => 'Usa <b>Module Builder</b> per creare nuovi moduli.',
            'appBtn' => 'La modalità applicazione è dove è possibile personalizzare alcune proprietà del programma, come ad esempio, quanti report TPS devono essere mostrati nella homepage',
            'backBtn' => 'Torna al passaggio precedente.',
            'studioHelp' => 'Use Studio to customize installed modules.',
            'moduleBtn' => 'Fare clic per modificare questo modulo.',
            'moduleHelp' => 'Clicca su una icona per selezionare il componente da modificare',
            'fieldsBtn' => 'Modificare quali informazioni sono contenute nel modulo controllando i <b>campi</b> nel modulo.<br/><br/>è possibile modificare e creare campi personalizzati qui.',
            'labelsBtn' => 'Fare clic su <b>Salva</b> salvare le etichette personalizzate.',
            'layoutsBtn' => 'Personalizzare il <b>layout</b> delle viste Edit, dettaglio, elenco e ricerca.',
            'subpanelBtn' => 'Decidi quali campi far apparire nei Subpanels del modulo.',
            'layoutsHelp' => 'Selezionare un <b>Layout da modificare</b>.<br/><br/>per cambiare il layout che contiene campi per l\'immissione di dati, fare clic su <b>vista di modifica</b>.<br/><br/>per modificare il layout che Visualizza i dati inseriti nei campi in vista di modifica, fare clic su <b>Vedi dettaglio</b>.<br/><br/>per modificare le colonne che vengono visualizzate nell\'elenco predefinito, fare clic su <b>visualizzazione elenco</b>.<br/><br/>per modificare la ricerca di base e avanzata nel modulo di layout, fare clic su <b>ricerca</b>.',
            'subpanelHelp' => 'Selezionare un <b>sotto pannello</b> da modificare.',
            'searchHelp' => 'Selezionare un layout di <b>ricerca</b> da modificare.',
            'newPackage' => 'Fare clic su <b>Nuovo pacchetto</b> per creare un nuovo pacchetto.',
            'mbHelp' => '<b> Benvenuto in Costruttore Modulo. </b><br/><br/> Utilizza <b>Costruttore Modulo</b> per creare pacchetti contenenti moduli personalizzati basati su oggetti standard o personalizzati.<br/><br/>Per iniziare, fai clic su <b> Nuovo pacchetto</b> per creare un nuovo pacchetto o seleziona un pacchetto da modificare.<br/><br/>Un pacchetto <b></b >funge da contenitore per moduli personalizzati, che fanno parte di un unico progetto. Il pacchetto può contenere uno o più moduli personalizzati che possono essere correlati tra loro o ai moduli nell\'applicazione.<br/><br/> Esempi: potresti voler creare un pacchetto contenente un modulo personalizzato correlato al modulo Account standard. Oppure, potresti voler creare un pacchetto contenente diversi nuovi moduli che funzionano insieme come un progetto e che sono correlati tra loro e ai moduli nell\'applicazione.',
            'exportBtn' => 'Fare clic su <b>Esporta personalizzazioni</b> per creare e scaricare un pacchetto che contiene le personalizzazioni effettuate in Studio per moduli specifici.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Modifica DropDown',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Costruttore Modulo',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Modifica DropDown',
    'LBL_DEVELOPER_TOOLS' => 'Strumenti Sviluppatore',
    'LBL_SUITEPORTAL' => 'Modifica Portale SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Elenco Pacchetti',
    'LBL_HOME' => 'Pagina iniziale',
    'LBL_NONE' => '-Nessuno-',
    'LBL_DEPLOYE_COMPLETE' => 'Pubblicazione completa',
    'LBL_DEPLOY_FAILED' => 'Si è verificato un errore durante il processo di pubblicazione, il tuo pacchetto potrebbe non essere stato caricato correttamente.',
    'LBL_AVAILABLE_SUBPANELS' => 'Sotto-Pannelli Disponibili',
    'LBL_ADVANCED' => 'Avanzate',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzato',
    'LBL_BASIC' => 'Base',
    'LBL_BASIC_SEARCH' => 'Filtro Rapido',
    'LBL_CURRENT_LAYOUT' => 'Layout Attuale',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_DASHLET' => 'Dashlet di SuiteCRM',
    'LBL_DASHLETLISTVIEW' => 'Vista Elenco delle Dashlet di SuiteCRM',
    'LBL_POPUP' => 'Vista Popup',
    'LBL_POPUPLISTVIEW' => 'Vista elenco Popup',
    'LBL_POPUPSEARCH' => 'Ricerca Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Cerca Dashlet di SuiteCRM',
    'LBL_DETAILVIEW' => 'Maschera Dettaglio',
    'LBL_DROP_HERE' => '[Trascina Qui]',
    'LBL_EDIT' => 'Modifica',
    'LBL_EDIT_LAYOUT' => 'Modifica Maschera',
    'LBL_EDIT_FIELDS' => 'Modifica Campi',
    'LBL_EDITVIEW' => 'Maschera Modifica',
    'LBL_FILLER' => '(spaziatore)',
    'LBL_FIELDS' => 'Campi',
    'LBL_FAILED_TO_SAVE' => 'Salvataggio non riuscito',
    'LBL_FAILED_PUBLISHED' => 'Pubblicazione non riuscita',
    'LBL_HOMEPAGE_PREFIX' => 'Mio',
    'LBL_LAYOUT_PREVIEW' => 'Anteprima Maschera',
    'LBL_LAYOUTS' => 'Maschere',
    'LBL_LISTVIEW' => 'Maschera Elenco',
    'LBL_MODULES' => 'Moduli',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nuovo Pacchetto',
    'LBL_NEW_PANEL' => 'Nuovo Pannello',
    'LBL_NEW_ROW' => 'Nuova Riga',
    'LBL_PACKAGE_DELETED' => 'Pacchetto Eliminato',
    'LBL_PUBLISHING' => 'In pubblicazione ...',
    'LBL_PUBLISHED' => 'In pubblicazione',
    'LBL_SELECT_FILE' => 'Seleziona File',
    'LBL_SUBPANELS' => 'Sotto-Pannelli',
    'LBL_SUBPANEL' => 'Sotto-Pannello',
    'LBL_SUBPANEL_TITLE' => 'Titolo:',
    'LBL_SEARCH_FORMS' => 'Filtro',
    'LBL_SEARCH' => 'Ricerca',
    'LBL_SEARCH_BUTTON' => 'Ricerca',
    'LBL_FILTER' => 'Filtro',
    'LBL_TOOLBOX' => 'Strumenti',
    'LBL_QUICKCREATE' => 'Creazione Rapida',
    'LBL_EDIT_DROPDOWNS' => 'Modifica un DropDown Globale',
    'LBL_ADD_DROPDOWN' => 'Aggiungi un nuovo DropDown Globale',
    'LBL_BLANK' => '-vuoto-',
    'LBL_TAB_ORDER' => 'Ordine Pannelli',
    'LBL_TABDEF_TYPE' => 'Tipo di Visualizzazione',
    'LBL_TABDEF_TYPE_HELP' => 'Seleziona la modalità di visualizzazione di questa sezione. Questa opzione ha effetto solo se sono state attivate schede in questa vista.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Scheda',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Pannello',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleziona Pannello per visualizzare questa sezione all&#39;interno del layout del record. Seleziona Scheda per visualizzare questa sezione come scheda seperata all&#39;interno del layout del record. Quando selezioni Scheda per una sezione, le sezioni successive impostate come Pannelli saranno visualizzate all&#39;interno della Scheda. Sarà creata una nuova Scheda per la sezione successiva per la quale è stata selezionata la tipologia Scheda. Se è stata selezionata la tipologia Scheda per una sezione successiva alla prima, la prima sezione sarà necessariamente visualizzata come Scheda.',
    'LBL_TABDEF_COLLAPSE' => 'Comprimi',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Seleziona per comprimere di default questo pannello.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nome',
    'LBL_DROPDOWN_LANGUAGE' => 'Lingua Predefinita',
    'LBL_DROPDOWN_ITEMS' => 'Valori Dropdown',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nome dell\'elemento',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Mostra Etichetta',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizza a Vista Dettaglio',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleziona questa opzione per sincronizzare questo layout di Vista Modifica al layout corrispondente di Vista Dettaglio. I campi e il posizionamento dei campi nella Vista Modifica<br>saranno sincronizzati e salvati nella Vista Dettaglio automaticamente cliccando Salva o Salva & Pubblica nella Vista Modifica. <br>Non potranno essere effettuate modifiche del layout nella Vista Modifica.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Questo Vista Dettaglio è sincronizzata con la Vista Modifica corrispondente. <br />I campi e il posizionamento dei campi in questa Vista Dettaglio riflettono i campi e il loro posizionamento nella Vista Modifica.<br />Modifiche alla Vista Dettaglio non possono essere salvate o pubblicate in questa pagina. Apporta modifiche o non sincronizzare i layouts nella Vista Modifica.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copia da Vista Modifica',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Sono richiesti valori sia per il campo Nome che per il campo Visualizza Etichetta. Per aggiungere un campo vuoto, clicca Aggiungi senza inserire alcun valore per i campi Nome e Visualizza Etichetta.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Chiave esistente nella lista',
    'LBL_NO_SAVE_ACTION' => 'Salvataggio impossibile per questa vista.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal formato',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modulo',
    'LBL_LHS_MODULE' => 'Modulo primario',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relazione creata con Studio o Module Builder',
    'LBL_RELATIONSHIPS' => 'Relazioni',
    'LBL_RELATIONSHIP_EDIT' => 'Modifica Relazioni',
    'LBL_REL_NAME' => 'Nome',
    'LBL_REL_LABEL' => 'Etichetta',
    'LBL_REL_TYPE' => 'Tipo',
    'LBL_RHS_MODULE' => 'Modulo collegato',
    'LBL_NO_RELS' => 'Non sono presenti relazioni',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condizione opzionale',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Colonna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valore',
    'LBL_SUBPANEL_FROM' => 'Subpanel da',
    'LBL_RELATIONSHIP_ONLY' => 'Nessun elemento visibile verrà creato per questa relazione in quanto esiste già una relazione visibile tra questi due moduli.',
    'LBL_ONETOONE' => 'Uno a Uno',
    'LBL_ONETOMANY' => 'Uno a Molti',
    'LBL_MANYTOONE' => 'Molti a Uno',
    'LBL_MANYTOMANY' => 'Molti a Molti',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Selezionare un modulo da modificare.',
    'LBL_QUESTION_LAYOUT' => 'Selezionare un layout da modificare.',
    'LBL_QUESTION_SUBPANEL' => 'Selezionare un sotto-pannello da modificare.',
    'LBL_QUESTION_SEARCH' => 'Selezionare una ricerca layout da modificare.',
    'LBL_QUESTION_MODULE' => 'Selezionare un componente del modulo da moficare.',
    'LBL_QUESTION_PACKAGE' => 'Selezionare un pacchetto da modificare, o creare un nuovo pacchetto.',
    'LBL_QUESTION_EDITOR' => 'Selezionare uno strumento.',
    'LBL_QUESTION_DASHLET' => 'Selezionare un layout della dashlet da modificare.',
    'LBL_QUESTION_POPUP' => 'Seleziona il layout del popup da modificare.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nome',
    'LBL_LABELS' => 'Etichette',
    'LBL_MASS_UPDATE' => 'Aggiornamento di Massa',
    'LBL_DEFAULT_VALUE' => 'Valore predefinito',
    'LBL_REQUIRED' => 'Richiesto',
    'LBL_DATA_TYPE' => 'Tipo',
    'LBL_HCUSTOM' => 'PERSONALIZZAZIONE',
    'LBL_HDEFAULT' => 'PREDEFINITA',
    'LBL_LANGUAGE' => 'Lingua:',
    'LBL_CUSTOM_FIELDS' => '* campi creati in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Modifica Etichette',
    'LBL_SECTION_PACKAGES' => 'Pacchetti',
    'LBL_SECTION_PACKAGE' => 'Pacchetto',
    'LBL_SECTION_MODULES' => 'Moduli',
    'LBL_SECTION_DROPDOWNS' => 'Dropdown',
    'LBL_SECTION_PROPERTIES' => 'Proprietà',
    'LBL_SECTION_DROPDOWNED' => 'Modifica Dropdown',
    'LBL_SECTION_HELP' => 'Aiuto',
    'LBL_SECTION_MAIN' => 'Principale',
    'LBL_SECTION_FIELDEDITOR' => 'Modifica Campo',
    'LBL_SECTION_DEPLOY' => 'Salva e pubblica',
    'LBL_SECTION_MODULE' => 'Modulo',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Predefinita',
    'LBL_HIDDEN' => 'Nascosto',
    'LBL_AVAILABLE' => 'Disponibile',
    'LBL_LISTVIEW_DESCRIPTION' => 'Qui sotto ci sono tre colonne. La colonna <b>Predefinita</b> contiene i campi che sono mostrati in elenco vista di default. Colonna  <b>Additional</b>  contiene i campi che utente può scegliere di usare per la creazione di viste personalizzate.  Colonna <b>Available</b>mostra i campi disponibili a te come amministratore per aggiungere colonne Default o Additional per uso da parte degli utenti.',
    'LBL_LISTVIEW_EDIT' => 'Modifica Maschera Elenco',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Anteprima',
    'LBL_MB_RESTORE' => 'Ripristina',
    'LBL_MB_DELETE' => 'Elimina',
    'LBL_MB_DEFAULT_LAYOUT' => 'Layout predefinito',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Aggiungi',
    'LBL_BTN_SAVE' => 'Salva',
    'LBL_BTN_SAVE_CHANGES' => 'Salva Modifiche',
    'LBL_BTN_DONT_SAVE' => 'Annulla Modifiche',
    'LBL_BTN_CANCEL' => 'Annulla',
    'LBL_BTN_CLOSE' => 'Chiudi',
    'LBL_BTN_SAVEPUBLISH' => 'Salva e Pubblica',
    'LBL_BTN_CLONE' => 'Duplica',
    'LBL_BTN_ADDROWS' => 'Aggiungi Righe',
    'LBL_BTN_ADDFIELD' => 'Aggiungi Campo',
    'LBL_BTN_ADDDROPDOWN' => 'Aggiungi Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Ordine Crescente',
    'LBL_BTN_SORT_DESCENDING' => 'Ordine Decrescente',
    'LBL_BTN_EDLABELS' => 'Modifica Etichette',
    'LBL_BTN_UNDO' => 'Annulla',
    'LBL_BTN_REDO' => 'Ripeti',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Aggiungi Campo Personalizzato',
    'LBL_BTN_EXPORT' => 'Esporta Personalizzazioni',
    'LBL_BTN_DUPLICATE' => 'Duplica',
    'LBL_BTN_PUBLISH' => 'Pubblica',
    'LBL_BTN_DEPLOY' => 'Salva e pubblica',
    'LBL_BTN_EXP' => 'Esporta',
    'LBL_BTN_DELETE' => 'Elimina',
    'LBL_BTN_VIEW_LAYOUTS' => 'Visualizza Layout',
    'LBL_BTN_VIEW_FIELDS' => 'Visualizza Campi',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Visualizza Relazioni',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Aggiungi Relazione',
    'LBL_BTN_RENAME_MODULE' => 'Modifica Nome Modulo',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Errore: Il campo esiste già',
    'ERROR_INVALID_KEY_VALUE' => "Errore: Valore chiave non valido: [']",
    'ERROR_NO_HISTORY' => 'Nessuna cronologia trovata',
    'ERROR_MINIMUM_FIELDS' => 'Questo layout deve contenere almeno un campo',
    'ERROR_GENERIC_TITLE' => 'Si è verificato un errore',
    'ERROR_REQUIRED_FIELDS' => 'Sei sicuro di voler continuare? Nel layout mancano i seguenti campi richiesti:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nome Pacchetto:',
    'LBL_MODULE_NAME' => 'Nome Modulo:',
    'LBL_AUTHOR' => 'Autore:',
    'LBL_DESCRIPTION' => 'Descrizione:',
    'LBL_KEY' => 'Chiave:',
    'LBL_ADD_README' => 'Leggimi',
    'LBL_LAST_MODIFIED' => 'Ultima Modifica:',
    'LBL_NEW_MODULE' => 'Nuovo Modulo',
    'LBL_LABEL' => 'Etichetta:',
    'LBL_LABEL_TITLE' => 'Etichetta',
    'LBL_WIDTH' => 'Larghezza',
    'LBL_PACKAGE' => 'Pacchetto',
    'LBL_TYPE' => 'Tipo:',
    'LBL_NAV_TAB' => 'Pannello Navigazione',
    'LBL_CREATE' => 'Crea',
    'LBL_LIST' => 'Elenco',
    'LBL_VIEW' => 'Visualizza',
    'LBL_HISTORY' => 'Visualizza Cronologia',
    'LBL_RESTORE_DEFAULT' => 'Ripristina',
    'LBL_ACTIVITIES' => 'Attività',
    'LBL_NEW' => 'Nuovo',
    'LBL_TYPE_BASIC' => 'base',
    'LBL_TYPE_COMPANY' => 'azienda',
    'LBL_TYPE_PERSON' => 'persona',
    'LBL_TYPE_ISSUE' => 'problema',
    'LBL_TYPE_SALE' => 'vendita',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'Questo sottopannello viene visualizzato sotto il modulo',
    'LBL_MSUB' => 'Questo è il sottopannello che il tuo modulo mette a disposizione dei moduli collegati.',
    'LBL_MB_IMPORTABLE' => 'Importazione',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] è stato eliminato',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Esporta Personalizzazioni',
    'LBL_EC_NAME' => 'Nome Pacchetto:',
    'LBL_EC_AUTHOR' => 'Autore:',
    'LBL_EC_DESCRIPTION' => 'Descrizione:',
    'LBL_EC_CHECKERROR' => 'Si Prega di selezionare un modulo.',
    'LBL_EC_CUSTOMFIELD' => 'campi personalizzati',
    'LBL_EC_CUSTOMLAYOUT' => 'layout personalizzati',
    'LBL_EC_NOCUSTOM' => 'Nessun modulo è stato personalizzato.',
    'LBL_EC_EMPTYCUSTOM' => 'Non ha personalizzazioni.',
    'LBL_EC_EXPORTBTN' => 'Esporta',
    'LBL_MODULE_DEPLOYED' => 'Il modulo è stato distribuito.',
    'LBL_UNDEFINED' => 'no definito',
    'LBL_EC_VIEWS' => 'vista personalizzata',
    'LBL_EC_SUITEFEEDS' => 'feed personalizzato',
    'LBL_EC_DASHLETS' => 'Dashlet personalizzata(e)',
    'LBL_EC_CSS' => 'css personalizzato(i)',
    'LBL_EC_TPLS' => 'tpls personalizzato(i)',
    'LBL_EC_IMAGES' => 'immagine(i) personalizzata(e)',
    'LBL_EC_JS' => 'js personalizzato(i)',
    'LBL_EC_QTIP' => 'qtip personalizzato(i)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Impossibile Recuperare i dati',
    'LBL_AJAX_LOADING' => 'Caricamento...',
    'LBL_AJAX_DELETING' => 'Cancellazione...',
    'LBL_AJAX_BUILDPROGRESS' => 'Costruzione In corso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Distribuzione In corso...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Risultati',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Operazione completata con successo',
    'LBL_AJAX_LOADING_TITLE' => 'In corso...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Attendere prego..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Sei sicuro di voler rimuovere questo pacchetto? Questo cancellerà in modo permanente tutti i file associati a questo pacchetto.',
    'LBL_JS_REMOVE_MODULE' => 'Sei sicuro di voler rimuovere questo modulo? Tutti i file associati a questo modulo verranno cancellati definitivamente.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Ogni customizzazione fatta in Studio sarà sovrascritta quando questo modulo verrà ripubblicato. Sei sicuro di voler procedere?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Distribuzione Pacchetti',
    'LBL_JS_VALIDATE_NAME' => 'Nome - Deve essere alfa-numerico senza spazi e il primo carettere deve essere una lettera',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Nome Pacchetto già esistente',
    'LBL_JS_VALIDATE_KEY' => 'Chiave - Deve essere alfa-numerico senza spazi e il primo carettere deve essere una lettera',
    'LBL_JS_VALIDATE_LABEL' => 'Si prega di inserire una label che verrà utilizzata come Nome Display per questo modulo',
    'LBL_JS_VALIDATE_TYPE' => 'Si prega di selezionare il tipo di modulo che desideri costruire dalla lista qui sotto',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - si prega di aggiungere una label che sarà visualizzata sotto il sottopannello',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Eliminando il campo personalizzato saranno eliminati tutti i dati relativi. Rimuovere il campo da tutte le maschere.',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Sei sicuro di voler eliminare la relazione?',
    'LBL_CONFIRM_DONT_SAVE' => 'Sono stati fatti dei cambiamenti dopo ultimo salvataggio, vuoi salvare?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvare le modifiche?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'I dati potrebbero essere troncati e questo non può essere evitato, sei sicuro di voler continuare?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Selezionare il tipo di dato appropriato in base al tipo di dato che vuoi inserire nel campo.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Sì</b>: Il campo sarà incluso in un\'operazione d\'importazione.<br><b>No</b>: Il campo non sarà incluso in un\'importazione.<br><b>Necessario:</b>: Dev\'esser fornito un valore per il campo in qualsiasi importazione.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Inserisci un numero per la Larghezza, misurata in pixel.<br> L\'immagine caricata sarà ridimensionata a questa Larghezza.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Inserisci un numero per l\'Altezza, misurata in pixel.<br> L\'immagine caricata sarà ridimensionata a questa Altezza.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Abilitato</b>: Il campo comparirà nella funzionalità Unisci Duplicati, ma non sarà disponibile all\'uso per le condizioni del filtro nella funzionalità Trova Duplicati.<br><b>Disabilitato</b>: Il campo non comparirà nella funzionalità Unisci Duplicati e non sarà disponibile all\'uso per le condizioni del filtro nella funzionalità Trova Duplicati.',

//Revert Module labels
    'LBL_RESET' => 'Resetta',
    'LBL_RESET_MODULE' => 'Reimposta Modulo',
    'LBL_REMOVE_CUSTOM' => 'Elimina le customizzazioni',
    'LBL_CLEAR_RELATIONSHIPS' => 'Azzera le relazioni',
    'LBL_RESET_LABELS' => 'Reimposta le etichette',
    'LBL_RESET_LAYOUTS' => 'Reimposta i layouts',
    'LBL_REMOVE_FIELDS' => 'Rimuovi i campi personalizzati',
    'LBL_CLEAR_EXTENSIONS' => 'Azzera le estensioni',
    'LBL_HISTORY_TIMESTAMP' => 'Data e ora',
    'LBL_HISTORY_TITLE' => ' cronologia',

    'fieldTypes' => array(
        'varchar' => 'Campo Testo',
        'int' => 'Intero',
        'float' => 'Mobile',
        'bool' => 'Casella di controllo',
        'enum' => 'DropDown',
        'dynamicenum' => 'DropDown Dinamico',
        'multienum' => 'Selezione Multipla',
        'date' => 'Data',
        'phone' => 'Telefono',
        'currency' => 'Valuta',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Relate',
        'address' => 'Indirizzo',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datetime',
        'decimal' => 'Decimale',
        'image' => 'Immagine',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Etichette usate di frequente",
        "all" => "Tutte le etichette",
    ),

    'parent' => 'Correlazione flessibile',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Stai selezionando questa voce da rimuovere dalla lista drop down. Ogni campo drop down che utilizza questa lista con questa voce come valore non visualizzerà più il valore, e il valore non potrà essere più selezionato dai campi drop down. Sei sicuro di voler continuare?",

    'LBL_ALL_MODULES' => 'Tutti i Moduli',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relativo {1} ID)',
);
