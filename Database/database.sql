select reltype.id , reltype.idtype , reltype.idtype , typeutilisateur.id , typeutilisateur.designation from reltype
join typeutilisateur on reltype.idtype = typeutilisateur.id ;

create view infouser as select utilisateur.id as idutilisateur,utilisateur.username as username ,
utilisateur.email as email, utilisateur.etat as etat, utilisateur.password as password,
typeutilisateur.designation
from reltype
join typeutilisateur on reltype.idtype = typeutilisateur.id join utilisateur on reltype.idutilisateur = utilisateur.id ;