<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Task 6 Music Band</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 6 - Music</a>
        </div>
    </div>
</nav>

<div class="row" style="background: #fcf8d3;">
    <div class="col-md-7 text-center" style="padding-top: 30px; padding-bottom: 30px;">
        <?php
        if (isset($band1))
        {
            ?>
        <h2><?=$queenName?> - <?=$queenGenre?></h2>
            <p><?php
                $i=1;
                foreach ($membersBand1 as $name=>$gener)
                {
                    echo $i.'. '.$name.' - '.$gener.'<br />';
                    $i++;
                }
            ?></p>
            <hr>
            <img src="img/Queen.jpg" class="img-rounded" alt="" title="" style="float: left; margin-left: 30px; margin-right: 30px;" />
            More about the group members:<br>
            <?php
                foreach ($arrMusBand1 as $key=>$value)
                {
                    echo $key.'. ';
                        foreach ($value as $k2=>$v2)
                        {
                            if (!is_array($v2))
                            {
                                echo ' '.$v2;
                                if($k2 == 1)
                                {
                                    echo '.';
                                }
                            }
                            else
                            {
                                foreach ($v2 as $k3=>$v3)
                                {
                                    echo ' '.$k3.' - '.$v3;
                                    if (!next($v2)){
                                        echo '.';
                                    }
                                }
                            }
                        }
                    echo '<br />';
                }
            ?>
        <?php
        }
        ?>
<!--BAND 2 -->
        <?php
        if (isset($band2)) {
            ?>
            <h2 style="margin-top: 30px;"><?=$smileName?> - <?=$smileGenre?></h2>
            <p><?php
                $i=1;
                foreach ($membersBand2 as $name=>$gener)
                {
                    echo $i.'. '.$name.' - '.$gener.'<br />';
                    $i++;
                }
                ?></p>
            <hr>
            <img src="img/Smile.jpg" class="img-rounded" alt="" title="" style="float: right; margin-left: 30px; margin-right: 30px;" />
            More about the group members:<br>

            <?php
            foreach ($arrMusBand2 as $key=>$value)
            {
                echo $key.'. ';
                foreach ($value as $k2=>$v2)
                {
                    if (!is_array($v2))
                    {
                        echo ' '.$v2;
                        if($k2 == 1)
                        {
                            echo '.';
                        }
                    }
                    else
                    {
                        foreach ($v2 as $k3=>$v3)
                        {
                            echo ' '.$k3.' - '.$v3;
                            if (!next($v2)){
                                echo '.';
                            }
                        }
                    }
                }
                echo '<br />';
            }
            ?>
        <?php
            }
        ?>
    </div>
    <div class="col-md-5 text-right" ">
        <img src="img/music.jpg" alt="" title="" />
    </div>
</div>
<footer class="modal-footer navbar-inverse">
    <div class="container">
        <a class="navbar-brand" style="float: right" href="#">Task 6 - Good music will be eternal!</a>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>