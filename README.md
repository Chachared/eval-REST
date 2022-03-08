# eval-REST - Symfony
Test d'API REST -> CRUD

Questions théoriques :
>>
>> 1) Donner 5 verbes HTTP et expliquer leur utilité (2 points)
- GET -> récupère les données (par exemple, ici, tous les films, ou alors un film si on rajoute son id (ex: https://localhost:8000/api/films/1 avec la méthode GET, récupère le film qui a l'id 1)
- POST -> envoie une entité vers la ressource indiquée, ici on crée un nouvel objet film avec la méthode POST
- PUT -> remplace les représentations de la ressource visée par la requête. Par exemple ici on peut mettre à jour l'objet film (ex: https://localhost:8000/api/films/1 avec la méthode PUT, met à jour le film qui a l'id 1)
- DELETE -> supprime la ressource indiquée (ex: https://localhost:8000/api/films/1 avec la méthode DELETE supprime le film qui a l'id 1)
- PATCH -> applique des modifications partielles à une ressource : comme pour put, mais nous n'avons pas besoin d'indiquer tous les champs requis en json, seuls ceux renseignés seront mis à jour.



>>
>> 2) Donnez les composants d’une requête HTTP (2 points) 
- La méthode de requête utilisée (les précédents verbes)
- La cible de la requête (généralement une URL, ou un chemin absolu)
- La version HTTP utilisée par la requête (sert généralement à indiquer la version attendue pour la réponse)

>>
>> 3) Donnez les composants d’une réponse HTTP (2 points) 
- La ligne de statut (version du protocole, code de statut HTTP, court texte descriptif lié au code de statut)
- En-têtes HTTP (informations de contexte, précisions sur la réponse)
- Corps de la réponse 

