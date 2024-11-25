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
        <a href="{{ url('/client') }}">
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
        <h2>MODIFICATION DES PRODUITS</h2>
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

    <form action="/modProd/traitement" method="POST">
        @csrf
        <div class="insertion">
        <input type="text"  name="id" style="display: none;" value="{{ $produits->id ?? '' }}">
        <label for="nom_produit">Nom Produit :</label>
        <input type="text" id="nom_produit" name="Nom_produit" value="{{ $produits->Nom_produit ?? '' }}">
        <br>
        <label for="prix_unitaire">Prix unitaire :</label>
        <input type="text" id="prix_unitaire" name="Prix_Unitaire" value="{{ $produits->Prix_Unitaire ?? '' }}">
        <br>
        <label for="stock_disponible">Stock Dispo :</label>
        <input type="text" id="stock_disponible" name="Stock_Disponible" value="{{ $produits->Stock_Disponible ?? '' }}" required>
        <br><br>
        <button type="submit">MODIFIER</button>

        </div>
    </form>
</section>
</div>

</body>
</html>
