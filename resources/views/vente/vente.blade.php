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
                <a href="{{ url('/menu') }} ">
                    <i class="fas fa-address-card"></i>
                    <span class="nav-item">MENU</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/ajoutVent') }}">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="nav-item"> </span>AJOUT ACHAT
                </a>
            </li>
            <li>
                <a href="{{ url('/vente') }}">
                    <i class="fas fa-calendar-check"></i>
                    <span class="nav-item">LISTES DES ACHATS</span>
                </a>




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
            <h3 >LISTES DES AHAT DES CLIENTS  </h3>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th>ID Vente </th>
                        <th>Id client</th>
                        <th>Nom des produit</th>
                        <th>Date vente</th>
                        <th>Montant Total</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                    <!-- Ici, vous devriez remplacer les lignes suivantes avec les données de vos employés -->
                    <tbody>
                        <!-- Ici, vous devriez remplacer les lignes suivantes avec les données de vos produits -->
                        @foreach ($achats as $achat)
                            <tr>
                                <td>{{ $achat->id }}</td>
                                <td>{{ $achat->idcli }}</td>
                                <td>{{ $achat->idprod }}</td>
                                <td>{{ $achat->Date_validation }}</td>
                                <td>{{ $achat->Montant_Total }}</td>
                                <td>
                                    <a href="/facture/{{ $achat->idcli }}"><button type="submit">Facture</button></a>
                                </td>
                                <td>
                                    <form action="{{ route('vente.delete', $achat->id) }}" method="POST">
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
