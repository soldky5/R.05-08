# Scénario : Création d'un auteur avec succès (Happy Path)
## Préparation
### Conditions initiales

- L'utilisateur accède à la page d'accueil (/)
- La base de données peut être vide ou contenir des auteurs existants

## Exécution
### Étapes

- Accéder à la page
- Ouvrir l'URL de l'application
- **Résultat attendu** : La page se charge correctement avec le formulaire de création visible

### Remplir le formulaire

- Saisir "Masashi Kishimoto" dans le champ "Nom auteur"
- Saisir "1974" dans le champ "Année de naissance"
- Saisir "Mangaka, auteur de Naruto" dans le champ "Biographie"
- **Résultat attendu** : Les champs acceptent la saisie sans erreur

### Soumettre le formulaire

- Cliquer sur le bouton "Créer"
- **Résultat attendu** :

  - La page se recharge
  - Un message vert "Auteur créé avec succès !" apparaît en haut de page
"Masashi Kishimoto" apparaît dans la liste des auteurs
  - Le formulaire est vide et prêt pour une nouvelle saisie

## Validation
### Critères d'acceptation

- ✅ Message de succès affiché
- ✅ Auteur visible dans la liste
- ✅ Formulaire réinitialisé
- ✅ Pas d'erreur JavaScript dans la console
