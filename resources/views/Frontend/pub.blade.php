 <!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="20;url=../index.php" />

    <title>Annonce | DJ Darlin</title>

    <!-- Bootstrap Core CSS -->
    <link href="annonce/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="annonce/one-page-wonder.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="decompte();">

<!-- Page Content -->
<div class="container">
    Redirection sur le site dans <span id="compt"></span>
    <div style="text-align: right;"> <a href="{{ url('/') }}">Aller sur le site >></a></div>
    <!-- First Featurette -->
    <div class="featurette" id="about">
        <img class="featurette-image img-responsive pull-right" src="annonce/img.png" style="width: 500px; height: 700px;">
        <h2 class="featurette-heading">Une invitation VIP
            <span class="text-muted">GRATUITE</span> pour 2 personnes
        </h2>
        <p class="lead">Mademoiselle, Monsieur,<br><br>

            Vous souhaitez une invitation « VIP » gratuite pour 2 personnes ?<br><br>

            Demandez-là nous par courriel.<br><br>

            Pour tout contrat 2016/2017 signé, lors de ce Salon du Mariage, nous aurons le plaisir de vous offrir 5% de réduction sur notre prestation.<br><br>

            N’hésitez pas à nous contacter pour toute information.<br><br>

            Au plaisir de vous recevoir.<br><br>

            L’équipe de DJ DARLIN’ Music & Lights
        </p>
    </div>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
    var compte = 20;
    function decompte()
    {
        if(compte <= 1) {
            pluriel = "";
        } else {
            pluriel = "s";
        }

        document.getElementById("compt").innerHTML = compte + " seconde" + pluriel;

        if(compte == 0 || compte < 0) {
            compte = 0;

            clearInterval(timer);
        }

        compte--;
    }
    var timer = setInterval('decompte()',1000);
</script>

</body>

</html>
