# 🩺 NetCabinet - Gestion de Cabinet Médical (Projet PHP)

NetCabinet est une application web développée en PHP permettant la **gestion complète d’un cabinet médical**, incluant la gestion des **patients**, **consultations** et **ordonnances**.  
Ce projet s’appuie sur une architecture MVC, utilise Composer pour la gestion des dépendances, Doctrine ORM pour l'interaction avec la base de données, et fonctionne avec MySQL (ou tout autre SGBD compatible).

---

## ✅ Fonctionnalités développées

### 1. Gestion des Ordonnances
- Création d’une ordonnance avec la date et le statut (ex : active, expirée).
- Enregistrement des données dans une base de données.
- Consultation, recherche, modification et suppression d’ordonnances via l’interface back-office.

### 2. Gestion des Consultations
- Création de consultations avec : date, motif, et compte rendu (réalisée, annulée, en attente).
- Consultation, recherche, modification et suppression de consultations.

### 3. Gestion des Patients
- Création de patients avec : nom, prénom, spécialité, adresse, téléphone.
- Consultation, recherche, modification et suppression de patients.

---

## 💪 Points forts et avantages

- 🔄 Architecture **MVC claire** pour une meilleure organisation du code.
- ⚙️ **Doctrine ORM** pour faciliter les interactions avec la base de données.
- 🧱 Projet **modulaire et évolutif** : possibilité d’ajouter d’autres modules (rendez-vous, facturation...).
- 💻 Interface back-office simple et intuitive pour les gestionnaires médicaux.

---

## ⚙️ Pré-requis techniques

| Outil / Technologie | Version recommandée         |
|---------------------|-----------------------------|
| PHP                 | 8.1 ou supérieur             |
| Composer            | Dernière version             |
| Doctrine ORM        | Inclus via Composer          |
| MySQL               | 5.7 ou supérieur             |
| Serveur local       | XAMPP, WAMP, Laragon, etc.   |
| Navigateur          | Chrome, Firefox, etc.        |

> ✅ Le projet est compatible avec toute base de données relationnelle (MySQL, MariaDB, PostgreSQL...).

---

## 🚀 Étapes pour exécuter le projet

1. **Cloner le projet**
   ```bash
   git clone https://github.com/votre-utilisateur/netcabinet.git
   cd netcabinet
Installer les dépendances avec Composer

bash
Copier
Modifier
composer install
Configurer la base de données

Créez une base de données nommée netcabinet_db via phpMyAdmin ou terminal MySQL.

Configurez les paramètres de connexion dans le fichier .env ou config/database.php.

Générer les tables avec Doctrine

bash
Copier
Modifier
php bin/console doctrine:schema:update --force
Démarrer le serveur PHP

bash
Copier
Modifier
php -S localhost:8000 -t public
Accéder à l’application

Rendez-vous sur http://localhost:8000 via votre navigateur.

🛠️ Structure du projet
bash
Copier
Modifier
netcabinet/
├── public/               # Point d’entrée de l’application
├── src/
│   ├── Controller/       # Contrôleurs (Patients, Ordonnances, Consultations)
│   ├── Entity/           # Entités Doctrine
│   ├── Repository/       # Requêtes personnalisées
├── config/               # Configuration base de données, routes
├── templates/            # Vues (HTML/Twig)
├── composer.json         # Dépendances PHP
├── .env                  # Paramètres d’environnement
📌 Auteur & Licence
Ce projet a été développé dans le cadre d’un projet académique.
Licence : MIT

📧 Contact
Pour toute question ou amélioration, vous pouvez me contacter par GitHub ou email.

yaml
Copier
Modifier

---

Souhaites-tu aussi une version en anglais ou que je génère les fichiers `.env.example` et `composer.json` de base pour compléter ce projet ?