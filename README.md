# Pubblicità Modale
Questo progetto presenta una finestra modale di pubblicità che si attiva solo al primo accesso a una pagina specifica. 

Due metodologie distinte sono utilizzati per gestire questa funzionalità: 
- cookies  
- variabile di sessione generata dal backend Laravel.

## Competenze Utilizzate
Le tecnologie coinvolte nel progetto includono:

- Laravel: Utilizzato per creare un'API destinata a gestire la creazione della sessione.
- Vue.js: Si occupa della parte grafica e gestisce due rotte: 'cookie' e 'sessione'.
- Axios: Libreria utilizzata per effettuare richieste HTTP alle API create nel backend.
- SCSS: Preprocessor CSS impiegato per definire lo stile dell'interfaccia.
  
## Dettagli del Progetto
Il sistema implementa due approcci distinti per controllare la visualizzazione della finestra modale, offrendo una soluzione basata su cookies e un'altra che sfrutta una variabile di sessione generata dal backend Laravel. Le rotte coinvolte sono denominante 'cookie' e 'sessione', ciascuna corrispondente a uno dei metodi di gestione dell'informazione di visita.
