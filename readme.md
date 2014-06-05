## Pic-Log: un'applicazione costruita con Laravel per vedere chi ha caricato le foto! 

Per utilizzare Laravel è necessario avere composer installato. 
Per installare applicazione, una volta clonata da github, via terminale. 

>> cd <nome-cartella-applicazione>
>> php artisan install composer install 

Poi configurare il proprio database in base alle impostazioni in app/config/database.php. 

Per utilizzare l'applicazione è anche necessario migrare il database: 

>> php artisan migrate 

E inserire alcuni dati tramite il comando seed 

>> php artisan db:seed 
