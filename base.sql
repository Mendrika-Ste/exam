CREATE DATABASE products;













membre (id_membre, nom , numero_etu, image_profil)
categorie ( id_categorie, nom_categorie)
produit (id_produit, nom , id_categorie, prix_reference)
produit_membre (id_produit_membre, id_produit, id_membre, prix_vente, quantite_dispo, date_dispo)
vente (id_vente, date , heure , id_produit_membre, quantite)








