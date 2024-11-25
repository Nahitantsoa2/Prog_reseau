<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./asset/css/login.css">
</head>
<body>
  <div class="login-container">
    <h2>Se connecter</h2>

            <form action="/vente" method="post">
                    @csrf
                    <div class="input-group">
                        <label for="Email">Email</label>
                        <input type="text" id="Email" name="Email" value="" required>

                    </div>

                    <div class="input-group">
                        <label for="Mdp">Mot de passe</label> <!-- Correction du libellé -->
                        <input type="password" id="Mdp" name="Mdp" required> <!-- Utilisation de type "password" pour le champ de mot de passe -->

                    </div>




                    <a href="{{ url('/menu') }}">
                       
                        <button type="submit">Se connecter</button>
                    </a>
            </form>
  </div>
</body>
</html>
