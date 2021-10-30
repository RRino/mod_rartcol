Descrizione

MODULI RARTCOL è composta da 4 MODULI

# mod_rartcol 
visualizza gli rartcol trekking eccetera prelevando dal database tabella #__segnalarartcol_rartcol
per copiare da joomla3 cambiare il campo 'catid' in 'catidev'
nel modulo c'e un parametro che deve contenere il nome del menu che richiama l'articolo Mod_rartcoladd il quale richiama il modulo mod_rartcoladd (da un menu nascosto)
per accedere all'aggiunta di rartcol è necessario appartenere al gruppo AddRartcol (id 5) derivato da  Publisher al quale , AddRartcol, bisogna escludere tutto e escludere anche la possibilita di edit dell'articolo che richiama il modulo
creare utenti  derivata da AddRartcol (id 10 )ai quali è permesso aggiungere rartcol
Creare utenti come Author (id 3) ai quali è permesso la gestione utenti

# mod_rartcoladd
Inserimento e modifica rartcol trekking ecc lavora sul database tabella #__segnalarartcol_rartcol

# mod_rartcoliscriz
Permette di iscriversi ai terkking rartcol ecc usa la tabella #__segnalrartcol_iscrizioni

# mod_rartcolgest
Per la gestione e stampa delle  iscrizioni

TUTTI I MODULI hanno un articolo che richiama il modulo e viene poi richiamato dal programma o menu
passando eventualmente alcuni valori che vengono poi recuperati nel modulo richiamato


gli articoli sono sotto la categoria USO_INTERNO

i moduli vengono richiamati utlizzando il nome posisiozione non l'ID

login accompagnatori
Alias: modulo-login-accompagnatori
Category: Uso_interno

				
Rartcol gestione
Alias: rartcol-gestione
Category: Uso_interno
			
Rartcol Iscrizioni
Alias: rartcol-iscrizioni
Category: Uso_interno
				
Rartcol aggiungi
Alias: rartcol-aggiungi
Category: Uso_interno

Select Rartcol lista				
Rartcol lista
Alias: rartcol-lista
Category: Uso_interno

