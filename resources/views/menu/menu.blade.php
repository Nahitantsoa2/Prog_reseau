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
                <a href="{{ url('/produit') }}">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="nav-item">PRODUIT</span>
                </a>
            </li>
            <li>
            <a href="{{ url('/vente') }}">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="nav-item">ACHAT</span>
                </a>
            </li>

         <li>
            <a href="{{ url('/ajout') }}">
                <i class="fas fa-user-circle"></i>
                <span class="nav-item">AJOUT CLIENTS</span>
            </a>
          </li>
        </li>
        </ul>
    </nav>

    <section class="main">
        <div class="main-top">
            <h2>GESTION  DES VENTES DU PRODUIT LAITIERS</h2>
            <i class="fas fa-user-cog"></i>
        </div>
        <hr>
        <div class="attendance-list">
            <h3 >LISTES DES CLIENTS</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th>ID</th>
                        <th>Nom client</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Modiffier</th>
                        <th>Supprimer</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Ici, vous devriez remplacer les lignes suivantes avec les données de vos employés -->
                  <!-- Ici, vous devriez remplacer les lignes suivantes avec les données de vos produits -->
                  @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->Nom_client }}</td>
                            <td>{{ $client->Prenom_client }}</td>
                            <td>{{ $client->Adress }}</td>
                            <td>{{ $client->Telephone }}</td>

                            <td>
                            <a href="/modCli-client/{{ $client->id }}"><button type="submit">Modifier</button> </a>

                            </td>


                            <td>
                            <form action="{{ route('client.delete', $client->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach




                </tbody>
            </table>


            <div id="chartContainer" style="height: 370px; width: 50%;"></div>
            <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
            <script type="text/javascript">
               window.onload = function () {
                   var chart = new CanvasJS.Chart("chartContainer", {
                       theme: "light1",
                       animationEnabled: false,
                       title: {
                           text: "Statistiques des produits et des stocks disponibles"
                       },
                       data: [{
                           type: "column",
                           dataPoints: [
                               @isset($produits)
                                   @foreach($produits as $produit)
                                       { label: "{{ $produit->Nom_Produit }}", y: {{ $produit->Stock_Disponible }} },
                                   @endforeach
                               @endisset
                           ]
                       }]
                   });
                   chart.render();
               }
           </script>


            <div id="chartContainer" style="height: 330px; width: 50%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"> </script>
        </div>
    </section>

</div>

</body>
</html>
