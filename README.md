# Esercizio di oggi: **Laravel Boolfolio - Base**

19/03/2024

nome repo: `laravel-auth`

Creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.

- Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.
- Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.

## Descrizione

- Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze ed il pacchetto Laravel 9 Preset con autenticazione.
    1. `composer require laravel/breeze --dev`
    1. `php artisan breeze:install`
    1. `composer require pacificdev/laravel_9_preset`
    1. `php artisan preset:ui bootstrap --auth`
    1. `npm i`
    1. togiamo la riga 3 di `package.json`
    1. `npm run dev`

- Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
    1. Autenticazione:
        - si parte con l'autenticazione e la creazione di un layout per back-office. In questa fase, gestite anche la riorganizzazione eventuale di rotte, viste e via dicendo.
    2. Creazione del modello Project con relativa migrazione, factory, controller e rotte.
    Qui potete usare, per aiutarvi a generare i file delle viste velocemente il pacchetto che vi ho mostrato:
        - `composer require lanciweb/laravel-make-view`
        - `php artisan make:view admin.projects --crud`
    3. Per la parte di back-office creiamo un resource controller `Admin\ProjectController` per gestire le operazioni CRUD dei progetti.

Per oggi occupiamoci  solo di index,  show e destroy!

### Bonus

- Aggiungiamo il link alla lista dei progetti nell'header.
- Gestiamo la classe active quando siamo sulla lista dei progetti.
- Gestiamo la classe active anche quando siamo sul dettaglio dei progetti e comunque in ogni rotta che riguarda i progetti.
- Nascondiamo il link ai progetti per chi non è loggato.

Mettete tanta cura perchè questo potrà poi essere il vostro portfolio personale! :)

---

# Esercizio di oggi: **Laravel Boolfolio - Base**

20/03/2024

nome repo: `laravel-auth`  (stessa di ieri)

## Descrizione

- Completiamo le CRUD mancanti per il vostro sito portfolio!

### BONUS

- Tutte le cosette varie che abbiamo visto in classe!

### SUPER BONUS

- Implementare la modale di bootstrap per la cancellazione
