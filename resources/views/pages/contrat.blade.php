
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://alpha.delivered.ma/css/app-print.css" rel="stylesheet">

    <title>Printer</title>
    <style>
        @media print{
            .col-md-1{flex:0 0 auto;width:8.3333333333%}.col-md-2{flex:0 0 auto;width:16.6666666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.3333333333%}.col-md-5{flex:0 0 auto;width:41.6666666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.3333333333%}.col-md-8{flex:0 0 auto;width:66.6666666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.3333333333%}.col-md-11{flex:0 0 auto;width:91.6666666667%}.col-md-12{flex:0 0 auto;width:100%}
        }
        body{
            margin: auto;
           /*  max-width: 500px; */
        }
        .row{
            margin:0px;
        }
        a{
            color:#000;
        }
        .page {
            /* A5 dimensions */
/*             width: 101.6mm;
            height: 152.4mm; */

            padding:.5rem;

            margin: 0;
            background: #fff;
            color:#000!important;
            border:1px solid #000;
            position: relative;

            page-break-after: always;
        }
        .logo{
            width:90%;
            margin-top:5px;
        }

        .barcode{
            padding: 3rem;
            font-weight: bold;
        }
        .title{
            font-weight: bold;
        }
        .order_id{
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom:1px dashed #000;
        }

        .box{
            border-bottom:1px dashed #000;
            margin-bottom:.5rem;
            padding-bottom:.5rem;
        }


        .footer{
            border-top:1px dashed #000;
            padding-top:.5rem;
            bottom: 6px;
            position: absolute;
            text-align: center;
            width: 97%;
            font-size:10px;
        }


    </style>
  </head>
  <body>

        <div class="page">
        <div class="row">
            <div class="col">
                <!--<img src="https://alpha.delivered.ma/images/code.jpg" alt="" class="logo">-->
            </div>
            <div class="col">
                <!--<div class="barcode"></div>-->
            </div>

        </div>
        <div>
            <div class="order_id text-center"> N° Contracts:  </div>
        </div>
        <div class="box">
            <div class="title">Client:</div>
            <div class="row">
                <div class="col-4">

                    <div> Nom: </div>
                    <div> Date et Lieu de Naissance: </div>
                    <div> Adresse: </div>
                    <div> Téléphone: </div>
                    <div> CIN : </div>
                    <div> Passeport: </div>
                    <div> Permis de conduire: </div>

                </div>
                <div class="col-8">

                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>


                </div>
            </div>
        </div>
        <div class="box">
            <div class="title">VEHICULE:</div>
            <div class="row">
                <div class="col-4">

                    <div> Marque de Voiture: </div>
                    <div> Matricule: </div>
                    <div> Date de Départ: </div>
                    <div> Date de Retour: </div>
                    <div> Nombre de Jours: </div>
                    <div> Lieu de Livraison: </div>
                    <div> Prix/jour: </div>
                    <div> Prix Total: </div>
                    <div>Remise:</div>

                </div>
                <div class="col-8">

                    <div> </div>
                    <div></div>
                    <div></div>
                    <div> </div>
                    <div></div>
                    <div></div>
                    <div> </div>
                    <div></div>
                    <div></div>


                </div>
            </div>
        </div>
        <div class="box">
            <div class="title">LOCATAIRE:</div>

            <div class="row">
                <div class="col-4">
                    <div> CACHET ET SIGNATURE: </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">J'AI PRIS CONNAISSANCE DES CONDITIONS STIPULEES AU VERSO</div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" >SIGNATURE</div>
            </div>
        </div>



    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  </body>
</html>