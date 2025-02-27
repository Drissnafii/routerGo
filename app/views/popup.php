 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup - Utilisateur Introuvable</title>
    <style>
        /* Styles de base */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Conteneur de la popup */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            text-align: center;
            z-index: 1000;
        }

        /* Fond sombre derrière la popup */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Bouton de fermeture */
        .popup button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .popup button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

    

    <!-- Popup -->
    <div class="popup" style="display:block" id="popup">
        <h3>Erreur</h3>
        <p>L'utilisateur n'existe pas !</p>
        <button onclick="closePopup()">Fermer</button>
    </div>

    
</body>
</html>

