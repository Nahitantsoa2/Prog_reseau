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
                    <i class="fas fa-address-card"></i>
                    <span class="nav-item">MENU</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/insert') }}">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="nav-item">INSERTION</span>
                </a>
            </li>
            <li>
                <a href="/vente">
                    <i class="fas fa-calendar-check"></i>
                    <span class="nav-item">VENTE</span>
                </a>

            </li>
        
               
              
          
            <li>
                <a href="/signup" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">DECONNEXION</span>
                </a>
            </li>
        </ul>
    </nav>

    <section class="main">
        <div class="main-top">


            <i class="fas fa-user-cog"></i>
        </div>
        <hr>
        <div class="attendance-list">
            <h3>LISTE DES PRODUITS</h3>
   <div class="reche">
            <form action="{{ route('produit.search') }}" method="GET">
                <b> <input type="text" name="keyword" placeholder="Rechercher un produit..."></b>
                <button type="submit"> Rechercher</button>
            </form>
           
    </div>
   
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table">

                <thead class="bg-info">
                    <div class="logo">
                        <img src="./asset/image/logo.jpg" alt="Logo">
                    </div>
                    <tr>
                        <th>ID</th>
                        <th>Nom Produit</th>
                        <th>Prix Unitaire</th>
                        <th>Stock Disponible</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Ici, vous devriez remplacer les lignes suivantes avec les données de vos produits -->
                    @foreach ($produits as $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->Nom_produit }}</td>
                            <td>{{ $produit->Prix_Unitaire }}</td>
                            <td>{{ $produit->Stock_Disponible }}</td>
                            <td>
                            <a href="/modProd-produit/{{ $produit->id }}"><button type="submit">Modifier</button> </a>

                            </td>
                            <td>
                                <form action="{{ route('produit.delete', $produit->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>

</body>
</html>
