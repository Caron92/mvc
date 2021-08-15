
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">

    
    <diV class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="" id="mainMenu">
                <div class="h3 pt-3 font-weight-bold border-bottom border-dark"> Yatzy</div>
                
                <button type="button" onclick="yatzy.startGame()" class="my-1 btn btn-outline-primary">Kasta tärningar</button>
            </div>

            
            <div class="invisible" id="game">
                <div class="h3 pt-3 font-weight-bold border-bottom border-dark"> Yatzy</div>
                <p>Markera de tärningar du vill kasta/kasta om!</p>
                <p id="outputMessage"></p>
                
        

                <div class="form-group" id="">
                    <input class="form-check-input" type="checkbox" name="diceOpt" id="diceCheck1" checked>
                    <label class="form-check-label" for="diceCheck1">Tärning 1:</label><span id="dice1"></span>
                </div>

                <div class="form-group" id="">
                    <input class="form-check-input" type="checkbox" name="diceOpt" id="diceCheck2" checked> 
                    <label class="form-check-label" for="diceCheck2">Tärning 2:</label> <span id="dice2"></span>
                </div>
            
                <div class="form-group" id="game">
                <input class="form-check-input" type="checkbox" name="diceOpt" id="diceCheck3" checked>
                <label class="form-check-label" for="diceCheck3">Tärning 3:</label> <span id="dice3"></span>
                </div>

                <div class="form-group" id="game">
                    <input class="form-check-input" type="checkbox" name="diceOpt" id="diceCheck4" checked>
                    <label class="form-check-label" for="diceCheck4">Tärning 4:</label> <span id="dice4"></span>
                </div>
                
                <div class="form-group" id="game">
                    <input class="form-check-input" type="checkbox" name="diceOpt" id="diceCheck5" checked>
                    <label class="form-check-label" for="diceCheck5">Tärning 5:</label> <span id="dice5"></span>
                </diV>
                <button type="button" onclick="yatzy.rethrow()" class="my-1 btn btn-outline-primary">Kasta om</button> Antal omkast: <span id="rethrows"></span>
                <div>
                <input type="number" min="1" max="6" id="amount" placeholder="Välj tärningsvärde" >
                <button type="button" onclick="yatzy.stop()" class="my-1 btn btn-outline-primary">Spara</button>
                </div>
                

                
                <div class="color-red" id="message">
                </div>
            </div>



            <diV class="invisible" id="stop">
                <div class="h3 pt-3 font-weight-bold border-bottom border-dark"> Save your result</div>
                <div class="score">
                    <div class="score">
                        <h2>Score</h2>
                        <p id="gameOverMessage">För bonus krävs minst tre tärningar av varje!!</p>
                          <div class="upper-scores">
                            <li class="one"><a class="scoring-info">One:</a><span id="res1"></span></li>
                            <li class="two"><a class="scoring-info">Two:</a><span id="res2"></span></li>
                            <li class="three"><a class="scoring-info">Three:</a><span id="res3"></span></li>
                            <li class="four"><a class="scoring-info">Four:</a><span id="res4"></span></li>
                            <li class="five"><a  class="scoring-info">Five:</a><span id="res5"></span></li>
                            <li class="six"><a class="scoring-info">Six:</a><span id="res6"></span></li>
                            <li class="upper-total">Score:<span id="total"></span></li>
                            <li class="bonus">Bonus:<span id="bonus"></span></li>
                          </div>
                          
                
                    <button type="submit" id="nextRoundBtn" onclick="yatzy.nextRound()" class="my-1 btn btn-outline-primary">Next round</button>
                    <button type="submit" id="newGameBtn" onclick="location.reload()" class="my-1 btn btn-outline-primary invisible">New Game</button>
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