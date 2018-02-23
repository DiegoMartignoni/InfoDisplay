# InfoDisplay
## Link utili
* [Altervista](http://diegomartignoni.altervista.org/ci/) - Esempio di pannello di controllo
* [Git Hub](https://github.com/DiegoMartignoni/ci) - Codice della web application

## Introduzione
InfoDisplay è un progetto che ha lo scopo di migliorare e aggiungere nuove funzionalità al sistema informativo scolastico. Basandosi sui display informativi già presenti nell'istituto, aventi lo scopo di presentare in formato tabellare le attività in corso nell'arco della giornata, si è deciso di realizzare una applicazione web che permettesse di racchiudere in un'unica interfaccia utente tutte le funzionalità di gestione, configurazione e personalizzazione dei singoli display. 

### Funzionalità
#### Informazioni sulle Attvità e Galleria Immagini
* Revisione del codice creato per l'inserimento delle attività in istituto tramite API di Google Calendar
* Miglioramento logicia del funzionamento della Galleria Immagini, rivisitazione grafica

> N.B.: per il momento queste funzioni restano slegate dal sistema di personalizzazione e gestione utenti, ma si sta valutando una possibile integrazione.

#### Creazione e personalizzazione Slides
**Nuova funzionalità**, dare la possibilità di creare delle pagine di presentazione preimpostate riguardanti le attività elencate nella tabella. Nel dettaglio:
* Sezione per la creazione, editing e rimozione delle Slides, costituite dal testo effetivo da inserire nelle slide (Titolo e copro)
* Sezione per il caricamento di immagini, da poter legare alle Slides già esistenti (o da inserire nella Galleria Immagini)

#### Gestione ruoli
**Nuova funzionalità**, permettere a più utenti dall'interno della scuola di collaborare al miglioramento del sistema informativo, nel dettaglio:
* Sezione per la gestione degli utenti, con relativi permessi per Amministratori e Collaboratori