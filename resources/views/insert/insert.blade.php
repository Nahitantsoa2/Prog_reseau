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


</nav>

    <section class="main">
        <div class="main-top">
            <h2>AJOUT DES PRODUIT</h2>
            <i class="fas fa-user-cog"></i>
        </div></br>
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
        <form action="/insert/traitement" method="POST">
            @csrf
            <div class="insertion">
                <label for="nom_produit">Nom Produit :</label>
                <input type="text" id="nom_produit" name="Nom_produit"></br>
                <label for="prix_unitaire">Prix unitaire :</label>
                <input type="text" id="prix_unitaire" name="Prix_Unitaire"></br>
                <label for="stock_disponible">Stock Dispo :</label>
                <input type="text" id="stock_disponible" name="Stock_Disponible" required></br>
                <br><br>
                <button type="submit">ENREGISTRER</button>
            </div>
        </form>
    </section>
</div>

</body>
</html>
