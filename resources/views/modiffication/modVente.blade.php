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
        <a href="{{ url('/vente') }}">
            <i class="fas fa-money-bill-alt"></i>
            <span class="nav-item"> VENTE</span>
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
            <h2>AJOUT VENTE</h2>
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
        <form action="/ajoutVent/traitement" method="POST">
            @csrf
            <div class="insertion">
                <div class="nom">
                    <label for="id_client">Id client :</label>
                    <input type="text" id="id_client" name="Id_client"></br>
                </div>
                <div class="nom">
                    <label for="nom_client">Id client :</label>
                    <input type="text" id="nom_client" name="Nom_client value="{{ $ventes->id ?? '' }}"></br>
                </div>
                  <div class="Date vente">
                        <label for="id_client">Id clientes:</label>
                        <input type="text" id="nom_produit" name="Nom_produit" value="{{ $produits->Nom_produit ?? '' }}">
                    </div>   
                    
                  
                    <div class="nom_client">
                        <label for="nom_client">Nom de produit :</label>
                        <input type="text" id="nom_client" name="Nom_client value="{{ $ventes->Nom_client ?? '' }}"></br>
                    </div>

                    <div class="montant_Total">
                        <label for="montant_Total">Nom de produit :</label>
                        <input type="text" id="montant_Total" name="Montant_Total value="{{ $ventes->Montant_Total ?? '' }}"></br>
                    </div>
                            <div class="adresse">
                                <label for="montant_Total">Montant Total:</label>
                                <input type="text" id="montant_Total" name="Montant_Total value="{{ $ventes->id ?? '' }}" required>
                            </div><br><br>
                    <button type="submit">ENREGISTRER</button>
            </div>
        </form>
    </section>
</div>

</body>
</html>
