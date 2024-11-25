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
    <h2>Login</h2>
    @if (session('status'))
    <div class="alert alert_succes">
        {{ session('status') }}
    </div>
@endif
<ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
    @endforeach
</ul>
    <form action="/singin/traitement" method="POST">
      <div class="input-group">
        <label for="nom_util">Nom</label>
        <input type="text" id="nom_util" name="Nom_util" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="Email" required>
      </div>
      <div class="input-group">
        <label for="mdp">Mots des passe</label>
        <input type="password" id="mdp" name="Mdp" required>
      </div>
      <button type="submit">ENREGISTRER</button>
    </form>
  </div>
</body>
</html>
