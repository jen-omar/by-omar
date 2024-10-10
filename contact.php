<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations reçues</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['email']) && isset($_GET['tel']) && isset($_GET['adr']) && isset($_GET['code'])) {
        $nom = htmlspecialchars($_GET['nom']);
        $prenom = htmlspecialchars($_GET['prenom']);
        $email = htmlspecialchars($_GET['email']);
        $tel = htmlspecialchars($_GET['tel']);
        $adr = htmlspecialchars($_GET['adr']);
        $code = htmlspecialchars($_GET['code']);
    ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $tel; ?></td>
            <td><?php echo nl2br($adr); ?></td>
            <td><?php echo $code;?></td>
        </tr>
    </table>
    <?php
    } else {
        echo "<p>Aucune information reçue.</p>";
    }
    ?>
</body>
</html>
