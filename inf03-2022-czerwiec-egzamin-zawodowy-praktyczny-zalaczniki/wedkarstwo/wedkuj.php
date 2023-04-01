<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner" >
        <h1>Portal dla wedkarzy</h1>
    </div>
    <div class="main">
        <div class="left">
            <div class="left_1">
                <h3>Ryby zamieszkujące rzeki</h3>
                    <ol>
                       
                   
                    <?php
                        $mysql = mysqli_connect("localhost", "root",
                        "", "wedkowanie");
                        
                        if(!$mysql)
                        {
                            mysqli_error($mysql);
                        }else echo "poloczono";

                        $query = "SELECT ryby.nazwa,lowisko.akwen ,
                        lowisko.wojewodztwo from lowisko
                         INNER JOIN ryby ON ryby.id = lowisko.Ryby_id WHERE ryby.wystepowanie like '%rzeki%'" ;
                        $result = mysqli_query($mysql, $query) ;
                        while ($row = mysqli_fetch_array  ($result))
                        {
                            echo "<li>".$row['nazwa']." pywa w rzece ".$row['akwen'].", ".$row['wojewodztwo']." </li>";
                        }

                    ?>
                     </ol>
            </div>
            <div class="left_2">
                <h3>Ryby drapieżne naszych wód</h3>
            </div>
        </div>
        <div class="right">
            <img src="ryba1.jpg" alt="Sum" width="400">
        </div>
</div>
    <div class="baner">
        <p>Stronę wykonał: Janek</p>
    </div>
</body>
</html>