<?php
session_start();
setcookie('bb', $_POST['bet'], time()+60);
$_SESSION['bet'] = $_COOKIE['bb'];
$_COOKIE['bbbetgame'] = $_POST['bet']
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/main.css">
</head>
<body>
<?php
function randGenerator(){
    $randNumber = rand(0,11);
}
$gameStack = ['1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png'];
setcookie('oneTab', rand(0,7), time()+60*60);
setcookie('twoTab', rand(0,7), time()+60*60);
setcookie('threeTab', rand(0,7), time()+60*60);
setcookie('fourTab', rand(0,7), time()+60*60);
setcookie('fiveTab', rand(0,7), time()+60*60);
setcookie('sixTab', rand(0,7), time()+60*60);
setcookie('sevenTab', rand(0,7), time()+60*60);
setcookie('eigthTab', rand(0,7), time()+60*60);
setcookie('nineTab', rand(0,7), time()+60*60);
?>
<div class="scrGame"><table class="gameTable">
        <?php
        $gameStackGame ="<tr><td class='one'><img id='one' src='img/{$gameStack[$_COOKIE['oneTab']]}'></td><td class='two'><img id='two' src='img/{$gameStack[$_COOKIE['twoTab']]}'></td><td class='three'><img src='img/{$gameStack[$_COOKIE['threeTab']]}'></td></tr>
    <tr><td class='four'><img src='img/{$gameStack[$_COOKIE['fourTab']]}'></td><td class='five'><img src='img/{$gameStack[$_COOKIE['fiveTab']]}'></td><td class='six'><img src='img/{$gameStack[$_COOKIE['sixTab']]}'></td></tr>
    <tr><td class='seven'><img src='img/{$gameStack[$_COOKIE['sevenTab']]}'></td><td class='eight'><img src='img/{$gameStack[$_COOKIE['eigthTab']]}'></td><td class='nine'><img src='img/{$gameStack[$_COOKIE['nineTab']]}'></td></tr></table></div>";
        /*echo "<tr><td><img src='img/{$gameStack[$_COOKIE['oneTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['twoTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['threeTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['fourTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['fiveTab']]}'></td></tr>
            <tr><td><img src='img/{$gameStack[$_COOKIE['sixTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['sevenTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['eigthTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['nineTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['tenTab']]}'></td></tr>
            <tr><td><img src='img/{$gameStack[$_COOKIE['elevenTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['twelveTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['therteenTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['fourteenTab']]}'></td><td><img src='img/{$gameStack[$_COOKIE['fifteenTab']]}'></td></tr>";*/
        echo $gameStackGame;
        require_once 'admin/param.php';
        echo '<div class="dd">';
        echo "<form action='nline.php?bet={$_COOKIE['bbbetgame']}' method='post' ><input type='text' name='bet' value='{$_COOKIE['bbbetgame']}'>
<button name='role' class='bubbly-button'>ROLE</button>";
        $gameXp = 0;
        $gameMultiplyBet = 0;
        //-------------------Победные комбинации----------------------------//
        if (!empty($_COOKIE['bbbetgame'])) {
            //$gameStack = ['1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png','9.png','10.png','11.png','12.png'];
            /*---------------LINE==1----------------*/
            if ($_COOKIE['oneTab'] == $_COOKIE['twoTab']&&$_COOKIE['twoTab']==$_COOKIE['threeTab']) { /*&& */
                $gameXp = $gameXp + 1;
                /*--------------Расчтёт множителя ставки-------------------*/
                switch ($gameStackGame){
                    case $_COOKIE['oneTab'] == 0:
                        $gameMultiplyBet = $gameMultiplyBet + 1;
                        continue;
                    case $_COOKIE['oneTab'] == 1:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['oneTab'] == 2:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['oneTab'] == 3:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['oneTab'] == 4:
                        $gameMultiplyBet = $gameMultiplyBet + 150;
                        continue;
                    case $_COOKIE['oneTab'] == 5:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['oneTab'] == 6:
                        $gameMultiplyBet = $gameMultiplyBet + 10;
                        continue;
                    case $_COOKIE['oneTab'] == 7:
                        $gameMultiplyBet = $gameMultiplyBet + 50;
                        continue;
                    default:
                        $gameMultiplyBet = $gameMultiplyBet;
                        break;
                }
                //------------------------------------------------------------------------------------------------
                echo '<style>.one{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover; border: gold 4px solid;}.two{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;border: gold 4px solid;}.three{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;border: gold 4px solid;}</style>';
            } else {
                $gameXp = $gameXp;
                $gameMultiplyBet = $gameMultiplyBet;
            }
            /*---------------LINE==2----------------*/
            if ($_COOKIE['fourTab'] == $_COOKIE['fiveTab']&&$_COOKIE['fiveTab']==$_COOKIE['sixTab']) { /*&& */
                $gameXp = $gameXp + 1;
                /*--------------Расчтёт множителя ставки-------------------*/
                switch ($gameStackGame){
                    case $_COOKIE['fourTab'] == 0:
                        $gameMultiplyBet = $gameMultiplyBet + 1;
                        continue;
                    case $_COOKIE['fourTab'] == 1:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['fourTab'] == 2:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['fourTab'] == 3:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['fourTab'] == 4:
                        $gameMultiplyBet = $gameMultiplyBet + 150;
                        continue;
                    case $_COOKIE['fourTab'] == 5:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['fourTab'] == 6:
                        $gameMultiplyBet = $gameMultiplyBet + 10;
                        continue;
                    case $_COOKIE['fourTab'] == 7:
                        $gameMultiplyBet = $gameMultiplyBet + 50;
                        continue;
                    default:
                        $gameMultiplyBet = $gameMultiplyBet;
                        break;
                }
                //------------------------------------------------------------------------------------------------
                echo '<style>.four{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;border: gold 4px solid;}.five{background: url("img/ffire.gif") no-repeat right bottom;background-size: cover;border: gold 4px solid;}.six{background: url("img/ffire.gif") no-repeat right bottom;background-size: cover;border: gold 4px solid;}</style>';
            } else {
                $gameXp = $gameXp;
                $gameMultiplyBet = $gameMultiplyBet;
            }
            /*---------------LINE==3----------------*/
            if ($_COOKIE['sevenTab'] == $_COOKIE['eigthTab']&&$_COOKIE['eigthTab']==$_COOKIE['nineTab']) { /*&& */
                $gameXp = $gameXp + 1;
                /*--------------Расчтёт множителя ставки-------------------*/
                switch ($gameStackGame){
                    case $_COOKIE['sevenTab'] == 0:
                        $gameMultiplyBet = $gameMultiplyBet + 1;
                        continue;
                    case $_COOKIE['sevenTab'] == 1:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['sevenTab'] == 2:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['sevenTab'] == 3:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['sevenTab'] == 4:
                        $gameMultiplyBet = $gameMultiplyBet + 150;
                        continue;
                    case $_COOKIE['sevenTab'] == 5:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['sevenTab'] == 6:
                        $gameMultiplyBet = $gameMultiplyBet + 10;
                        continue;
                    case $_COOKIE['sevenTab'] == 7:
                        $gameMultiplyBet = $gameMultiplyBet + 50;
                        continue;
                    default:
                        $gameMultiplyBet = $gameMultiplyBet;
                        break;
                }
                //------------------------------------------------------------------------------------------------
                echo '<style>.seven{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;border: gold 4px solid;}.eight{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;border: gold 4px solid;}.nine{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;border: gold 4px solid;}</style>';
            } else {
                $gameXp = $gameXp;
                $gameMultiplyBet = $gameMultiplyBet;
            }
            /*---------------LINE==4----------------*/
            if ($_COOKIE['threeTab'] == $_COOKIE['fiveTab']&&$_COOKIE['fiveTab']==$_COOKIE['sevenTab']) { /*&& */
                $gameXp = $gameXp + 1;
                /*--------------Расчтёт множителя ставки-------------------*/
                switch ($gameStackGame){
                    case $_COOKIE['threeTab'] == 0:
                        $gameMultiplyBet = $gameMultiplyBet + 1;
                        continue;
                    case $_COOKIE['threeTab'] == 1:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['threeTab'] == 2:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['threeTab'] == 3:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['threeTab'] == 4:
                        $gameMultiplyBet = $gameMultiplyBet + 150;
                        continue;
                    case $_COOKIE['threeTab'] == 5:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['threeTab'] == 6:
                        $gameMultiplyBet = $gameMultiplyBet + 10;
                        continue;
                    case $_COOKIE['threeTab'] == 7:
                        $gameMultiplyBet = $gameMultiplyBet + 50;
                        continue;
                    default:
                        $gameMultiplyBet = $gameMultiplyBet;
                        break;
                }
                //------------------------------------------------------------------------------------------------
                echo '<style>.three{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;}.five{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;}.seven{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;}</style>';
            } else {
                $gameXp = $gameXp;
                $gameMultiplyBet = $gameMultiplyBet;
            }
            /*---------------LINE==5----------------*/
            if ($_COOKIE['oneTab'] == $_COOKIE['fiveTab']&&$_COOKIE['fiveTab']==$_COOKIE['nineTab']) { /*&& */
                $gameXp = $gameXp + 1;
                /*--------------Расчтёт множителя ставки-------------------*/
                switch ($gameStackGame){
                    case $_COOKIE['nineTab'] == 0:
                        $gameMultiplyBet = $gameMultiplyBet + 1;
                        continue;
                    case $_COOKIE['nineTab'] == 1:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['nineTab'] == 2:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['nineTab'] == 3:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['nineTab'] == 4:
                        $gameMultiplyBet = $gameMultiplyBet + 150;
                        continue;
                    case $_COOKIE['nineTab'] == 5:
                        $gameMultiplyBet = $gameMultiplyBet + 7;
                        continue;
                    case $_COOKIE['nineTab'] == 6:
                        $gameMultiplyBet = $gameMultiplyBet + 10;
                        continue;
                    case $_COOKIE['nineTab'] == 7:
                        $gameMultiplyBet = $gameMultiplyBet + 50;
                        continue;
                    default:
                        $gameMultiplyBet = $gameMultiplyBet;
                        break;
                }
                //------------------------------------------------------------------------------------------------
                echo '<style>.one{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;}.five{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;}.nine{background: url("img/ffire.gif") no-repeat right bottom; background-size: cover;}</style>';
            } else {
                $gameXp = $gameXp;
                $gameMultiplyBet = $gameMultiplyBet;
            }
            //echo $gameXp;
        }
        require_once 'admin/param.php';
        $query = "SELECT name, money FROM profile WHERE id=1";
        //echo $query;
        $res = mysqli_query($dbc, $query) or die('Query Error');
        while ($next=mysqli_fetch_array($res)) {
            $money = $next['money'];
            echo "<div><div>Ваш баланс - {$money}</div>";

            if (empty($_COOKIE['bbbetgame'])) {
                echo '<p>Пустая ставка</p>';

            } elseif ($gameXp >= 1) {
                echo "<h3>Ваша ставка  - X{$gameMultiplyBet}</h3>";
                setcookie('balance', $next['money'], time() + 60);
                $_SESSION['bet'] = $_COOKIE['balance'];
                //echo $next['money'];
                $resultBet = $next['money'] + ($_POST['bet']*$gameMultiplyBet);
                $queryUpdate = "UPDATE `profile` SET money='{$resultBet}' WHERE 1";
                //echo $queryUpdate;
                $resUp = mysqli_query($dbc, $queryUpdate);

            }else {
                //echo $next['money'];
                $resultBet = $next['money'] - $_COOKIE['bbbetgame'];
                if ($money>=$_COOKIE['bbbetgame']) {
                    $queryUpdate = "UPDATE `profile` SET money='{$resultBet}' WHERE 1";
                    //echo $queryUpdate;
                    $resUp = mysqli_query($dbc, $queryUpdate);
                }else{
                    echo '<p>денег не хватает</p>';
                }
                echo '<p>You lose</p>';
            }
        }
        echo '</div></form>';
        mysqli_close($dbc);
        ?>
</body>
</html>