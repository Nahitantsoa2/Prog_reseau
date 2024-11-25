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
            <h2>AJOUT ACHAT</h2>
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
                    <label for="idcli">Id client :</label>
                    <input type="number" id="idcli" name="idcli"></br>
                </div>
                <div class="idprod">
                    <label for="idprod">Id produit :</label>
                    <input type="text" id="idprod" name="idprod"></br>
                </div>
                    <div class="prenom">
                        <label for="Date_validation">Date vente :</label>
                        <input type="date" id="Date_validation" name="Date_validation"></br>
                    </div>
                            <div class="adresse">
                                <label for="Montant_Total">Montant Total:</label>
                                <input type="text" id="Montant_Total" name="Montant_Total" required>
                            </div><br><br>
                    <button type="submit">ENREGISTRER</button>
            </div>
        </form>
    </section>
</div>

</body>
</html>
