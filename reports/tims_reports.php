<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Reports</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
</head>

<body style="background-image: linear-gradient(to bottom, white, rgba(255,255,204,1))"> 

    <?php require '../html/tims_header.php'; ?>

    <div class="ui middle aligned center aligned" style="margin-top: 10em">
        <div class="ui two column doubling stackable grid container">
            <div class="column">
                <a href="../reports/tims_reports_borrower.php?calendar=T">
                    <div class="ui centered card">
                        <div class="centered image" style="text-align: center">
                            <i class="massive users centered icon" style="display: inline-block;margin-top:0.5em;margin-bottom:0.5em"></i>
                        </div>
                        <div class="content">
                            <span class="header">Borrower</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="../reports/tims_reports_returner.php?calendar=T">
                    <div class="ui centered card">
                        <div class="centered image" style="text-align: center">
                            <i class="massive boxes centered icon" style="display: inline-block;margin-top:0.5em;margin-bottom:0.5em"></i>
                        </div>
                        <div class="content">
                            <span class="header">Returner</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script src="../assets/js/header-methods.js"></script>
</body>

</html>