# TifawinSouk Application Web de Gestion de Catalogue

 ## Contexte du projet

TifawinSouk est une PME marocaine spécialisée dans le commerce local. Le projet consiste à créer une application web pour digitaliser la gestion des produits et des catégories.

Back-office : permet à l’administrateur de gérer le catalogue (CRUD : création, lecture, modification, suppression).

Interface publique : permet aux clients de parcourir les catégories et consulter les produits.

 ## Objectif

Créer une application web qui permet :

Au personnel administratif : gérer facilement les catégories et produits.

Aux clients : naviguer par catégorie et consulter les détails des produits.

## Fonctionnalités principales

### Back-office (administrateur)

Gestion des catégories : création, modification, suppression, affichage.

Champs : id, nom, slug, description

Gestion des produits : création, modification, suppression, affichage.

Champs : id, nom, référence, description courte, prix, stock, categorie_id, image

Authentification sécurisée pour l’accès au back-office.

Validation côté serveur (ex : champs obligatoires, format prix, stock ≥ 0).

Upload basique d’images pour les produits.

Notifications simples en cas de succès ou d’erreur.

### Interface publique (utilisateur)

Page liste des catégories.

Page liste des produits par catégorie (pagination simple).

Page détail produit.

## Technologies utilisées

Framework : Laravel (version stable)

Template : Blade

Base de données : MySQL ou MariaDB

Authentification : Laravel Breeze / UI

Frontend : HTML, CSS, JavaScript (simple, pas de SPA)

## User Stories

### Administrateur

Se connecter pour accéder au back-office.

Créer, modifier, supprimer une catégorie.

Créer, modifier, supprimer un produit et l’assigner à une catégorie.

### Utilisateur public

Voir la liste des catégories.

Voir les produits d’une catégorie.

Consulter la fiche détaillée d’un produit.

## Structure du projet

app/Models : modèles Laravel (Categorie, Produit)

app/Http/Controllers : contrôleurs pour back-office et public

resources/views : templates Blade

public/images : images produits

routes/web.php : routes pour admin et public

## date
26 janvier 2026
