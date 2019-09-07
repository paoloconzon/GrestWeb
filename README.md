# GrestWeb
<h1>PROGETTO REGISTRAZIONE GREST</h1>
<p>
<b>Cos'è il Grest</b><br>
Nelle parrocchie italiane durante i mesi estivi vengono attivati i GREST, 
attività mattutine/pomeridiane per i ragazzi<br>
Generalmente questi Grest propongono anche laboratori di vario tipo nelle ore mattutine<br>
Sia per i laboratori che per le attività c'è però generalmente una disponibilità limitata<br>
Questo comporta una certa ressa all'atto delle iscrizioni che normalmente sono fatte con carta e penna
e lungaggine perchè occorre controllare le disponibilità

<p>
<b>Goal del progetto</b><br>
Mi è stato chiesto di realizzare un sistema di preiscrizione del grest online<br>
La conferma avverrà poi contestualmente al pagamento, dove verranno semplicemente confermate le richieste fatte<br>
Poichè il sistema di blog più semplice e diffuso (nonchè quello presente nella mia parrocchia) è WordPress
Ho pensato di realizzare un sistema che sia facilmente integrabile in wordpress (che possa divenire magari in futuro un plugin)
ma che possa essere integrato anche in altri content manager (joomla, drupal, ecc...)
<br>
Il backend sarà scritto in PHP, mentre pr il client utilizzeremo Jquery e il css standard

<p>
<b>Stuttura tabelle evento</b><br>
Il GREST è un <b>evento</b> con un inizio e una fine: può essere però diviso in più <b>sottoeventi (settimane)</b> e non è detto che un ragazzo partecipi a tutte<br>
Il sottoevento dovrà avere almeno
<ul>
<li>Data inizio/fine</li>
<li>Collegamento con l’evento (id_evento)
<li>N.posti disponibili</li>
<li>Note</li>
<li>LaboratoriPossibili (collegamento lookup alla tabella laboratori del grest)</li>
<li>Attivita Pomeridiana (S/N)</li>
<li>Ingresso anticipato (S/N)</li>
<li>Uscita anticipata (S/N)</li>
<li>Pranzo in loco (S/N)</li>
<li>Gita (S/N)
</ul>
Per evitare che un ragazzo venga registrato più volte nella stessa settimana/laboratorio, occorre che abbia un identificativo (un id più che un codice fiscale, visto che a causa di problemi di 
<a link="https://quifinanza.it/tasse/omocodia-disturbo-che-colpisce-codice-fiscale-di-30mila-italiani/1390/">omocodia</a> 
non siamo in grado di stabilire la correttezza di un codice fiscale)

<p>
<b>Attività di Frontoffice</b><br>
<ul>
<li>1 pagina dove registrare dati anagrafici della persona che fa le iscrizioni (LEGATI AL LOGIN DI WORDPRESS)</li>
<li>1 pagina dove registrare in anagrafica i ragazzi da iscrivere</li>
<li>1 pagina dove scegliere l'evento e prenotare</li>
<li>1 Pagina riepiogativa dove consultare quanto prenotato fin'ora</li>
<li>1 Pagina con i link dei moduli da stampare e portare firmati al momento del pagamento</li>
</ul>
In seguito alla prentazione deve scalare i posti laboratori e mandare una mail di conferma all'utente<br>
Se si cerca di reinserire un ragazzo già inserito il sistema dovrà segnalare che il ragazzo è gia a posto e si può verificare dal link prec "i tuoi dati" o da un pulsante "rispedisci mail conferma"

<p>
<b>Attività di Backoffice</b><br>
La finestra dovrà essere accessibile solo se l’utente ha ruolo di amministratore
<ul>
<li>possibilità di creare un Nuovo evento grest, con le settimane e i laboratori</li>
<li>Posibilita di esportare l'anagrafica dei ragazzi e l'elenco delle prenotazioni</li>
</ul>

<p>
<b>Contribuzione</b><br>
Chiunque vuole può contribuire al progetto, anche se presumo sia prettamente una necessità Italiana (forse anche per altri paesi cattolici?)<br>
Sono graditi ovviamente skill di php/javascript/html/css  ma chiunque può contribuire con suggerimenti o altro
Cercherò di mettere un excel con le attività da portare avanti e chi le sta seguendo


<p>
<b>Ricerca di Plugin esistenti o Framework utilizzabili</b><br>
Prima di mettermi al lavoro ho cercato dei plugin esistenti in rete che soddisfacessero i requisiti sopra elencati, ma senza successo<br>
Sono partito quindi a scrivere codice senza conoscendo framework particolari.<br>
Penso però che Laravel o Simfony potrebbero aiutare molto lo sviluppo del backend. Purtroppo non li conosco ne ne ho pratica, ma se qualcuno volesse provare a modificare gli script per utilizzare quei framework è benvenuto<br>
L'unica libreria di terze parti per ora utilizzata è jquery/jqueryUi
