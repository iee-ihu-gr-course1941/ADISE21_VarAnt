<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en";>
    <head>
        <meta charset="utf-8">
        <title>NineMen'sMorris </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="board.css" type="text/css">
        <script type="text/javascript"> if (!window.console) console={log:function() {}}; </script>
    </head>
    <body>
        <header>
            <h1>Nine Men's Morris</h1>
        </header>

        <?php include 'php/login.php'; ?>
  
        <div id="Board">    </div>

        <div id="Moves">
            <input type="text" id="move"/>
            <button type="button" id="setmove">Make move</button>
        </div>
        <div id="currentspot">
            <span id="currentspotspan"></span>
        </div>

        <div id="SaveLoadOutput" style="display:none">
            <div id="1Move"></div>
            <input type="submit" id="1MoveSQL_submit" value="Start saved game">
            <div id="1MoveSQL_data"></div>
            <br/>
            <input type="submit" id="SaveSQL_submit" value="Save board">
            <div id="SaveSQL_data"></div>
            <br/>
            <input type="submit" id="multiplayer_submit"
                onclick="parent.location='MultGame/php/UserLogin.php'"
                value="Multiplayer game">
        </div>

        <span if="GameStatus"></span>
        <button type="button" id="NewGameButton">New Game</button><br/>

        <?php include 'php/notOutputted.php'; ?>

    <footer>
        <div class="col-sm-4" style="backgrounf-color:lavender;">
        </div>
    </footer>

    <script src=" "></script>
    <script src=" "></script>
    <script src="js/ "></script>
    <script src="js/ "></script>
    <script src="js/ "></script>
    <script src="js/buttons/loginlogout.js "></script>
    <script src="js/buttons/register.js "></script>
    <script src="js/defs.js "></script>
    <script src="js/io.js "></script>
    <script src="js/board.js "></script>
    <script src="js/movegen.js "></script>
    <script src="js/makemove.js "></script>
    <script src="js/perft.js "></script>
    <script src="js/evaluate.js "></script>
    <script src="js/pvtable.js "></script>
    <script src="js/search.js "></script>
    <script src="js/protocol.js "></script>
    <script src="js/gui.js "></script>
    <script src="js/main.js "></script>
    <script src="js/buttons/loadSaveGame.js "></script>
    </body>
</html>