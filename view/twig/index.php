
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">

    

    <diV class="row justify-content-md-center">
        <div class="col-lg-6">
            <div id="mainMenu">
                <div class="h3 pt-3 font-weight-bold border-bottom border-dark"> Game of 21</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="diceOpt" id="oneDiceOpt" value="1" checked>
                    <label class="form-check-label" for="oneDiceOpt">
                        En tärning
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="diceOpt" id="twoDiceOpt" value="2">
                    <label class="form-check-label" for="twoDiceOpt">
                        Två tärningar
                    </label>
                </div>
                <button type="button" onclick="game.startGame()" class="my-1 btn btn-outline-primary">Start</button>
                <button type="button" onclick="window.history.go(-1);" class="my-1 btn btn-outline-primary">Quit</button>

                
                <a href="/~char19/dbwebb-kurser/mvc/me/game/src/printResult.php" class="my-1 btn btn-outline-primary">See scoreboard</a>
            </div>

            

            <diV class="invisible" id="game">
                <div class="h3 pt-3 font-weight-bold border-bottom border-dark"> Game of 21</div>
                <p id="outputMessage"></p>
                <button type="button" onclick="game.roll()" class="my-1 btn btn-outline-primary">Roll</button>
                <p>Your roll: <span id="sum"></span></p>
                <p>Your total sum: <span id="totalsum"></span></p>
                <p>Computer sum: <span id="comsum"></span></p>
                <button type="button" onclick="game.pass()" class="my-1 btn btn-outline-primary">Pass</button>
            </diV>

            <diV class="invisible" id="gameOver">
                <div class="h3 pt-3 font-weight-bold border-bottom border-dark"> Game of 21</div>
                <p id="gameState"></p>
                <p id="gameOverMessage"></p>
                <button type="button" onclick="window.location.reload();" class="my-1 btn btn-outline-primary">New Game</button>
                <button type="button" onclick="window.history.go(-1);" class="my-1 btn btn-outline-primary">End Game</button>

                <form action="/~char19/dbwebb-kurser/mvc/me/game/src/save.php" method="POST" >
                    <input type="hidden" name="save">
                    <input type="hidden" id="won" name="winner" value="0">

                    <button type="submit" class="my-1 btn btn-outline-primary">Save results</button>
                </form>
                
            </diV>
        </div>
    </diV>
    
</div> 

<script type=" text/javascript" src="http://www.student.bth.se/~char19/dbwebb-kurser/mvc/me/game/src/js_functions/dice_functions.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>