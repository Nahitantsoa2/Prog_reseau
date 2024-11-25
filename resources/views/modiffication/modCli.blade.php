<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>

<div class="container">
<nav>

<ul>
    <li>
        <a href="{{ url('/menu') }}">
            <i class="fas fa-money-bill-alt"></i>
            <span class="nav-item">MENU</span>
        </a>
    </li>
    <li>
        <a href="{{ url('/produit') }}">
            <i class="fas fa-money-bill-alt"></i>
            <span class="nav-item"> PRODUITS</span>
        </a>
    </li>
    <li>
        <a href="{{ url('/vente') }}">
            <i class="fas fa-money-bill-alt"></i>
            <span class="nav-item">VENTE</span>
        </a>
    </li>
    <li>
        <a href="menu.blade.php">
            <i class="fas fa-user-circle"></i>
            <span class="nav-item">STATISTIQUE</span>
        </a>
    </li>
    <li>
        <a href="sigin.blade.php">
            <i class="fas fa-user-circle"></i>
            <span class="nav-item">DECONNEXION</span>
        </a>
    </li>
</ul>
</nav>

<section class="main">
    <div class="main-top">
        <h2>MODIFICATION DES CLIENTS</h2>
        <i class="fas fa-user-cog"></i>
    </div>
    <hr>
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

        <form action="/modCli/traitement" method="POST">
            
            @csrf
            <div class="insertion">
                <input type="text"  name="id" style="display: none;" value="{{ $clients->id ?? '' }}">
                <label for="nom_client">Nom client :</label>
                <input type="text" id="nom_client" name="Nom_client" value="{{ $clients->Nom_client ?? ''}}" >
                <br>
                <label for="prenom_client">Prenom client :</label>
                <input type="text" id="prenom_client" name="Prenom_client" value="{{ $clients->Prenom_client ?? '' }}" >
                <br>
                <label for="adress">Adresse :</label>
                <input type="text" id="adress" name="Adress" value="{{ $clients->Adress ?? '' }}">
                <br><br>
                <label for="telephone">Num téléphone :</label>
                <input type="text" id="telephone" name="Telephone" value="{{ $clients->Telephone  ?? ''}}" required>
                <br><br>
                <button type="submit">MODIFIER</button>
            </div>
        </form>
</section>
</div>

</body>
</html>
