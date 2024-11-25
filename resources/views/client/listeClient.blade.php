<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <link rel="stylesheet" href="./asset/css/login.css">

    <script>
        function imprimerFacture() {
            document.getElementById("impr").style.display = "none";
            window.print()
            document.getElementById("impr").style.display = "none";
        }
    </script>
</head>
<body>

<div class="facture">
    <div class="header">
        <h1>Facture</h1>
    </div>
    <div class="content">
        <div class="client-info">
            <p><strong>Client :</strong> </p>
            <!-- Ajoutez d'autres informations sur le client ici si nécessaire -->
        </div>
        <button  onclick="imprimerFacture()" id="impr">IMPRIMER</button>
        <table class="dddd">
            <thead>
                <tr>
                    <th>produit</th>
                    <th>Date de Validation</th>
                    <th>Montant Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($achas)
                    @foreach ($achas as $acha)
                    <tr id="facture{{ $acha->id }}">
                        <td>{{ $acha->Nom_client }}</td>
                        <td>{{ $acha->Nom_produit }}</td>
                        <td>{{ $acha->Date_validation }}</td>
                        <td>{{ $acha->Montant_Total }}</td>
                    </tr>

                  <tr>

                  </tr>

                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
