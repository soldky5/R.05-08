Feature: Mangathèque
    Scenario: Supprimer un auteur
        Given j'ai sélectionner l'auteur à supprimer
        When j’appuie sur l'icone de corbeille
        Then l'auteur sélectionner est suprimé.