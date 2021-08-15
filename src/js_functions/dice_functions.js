/* eslint-disable */

class Dice {
    constructor()
    {
        this.numberOfDices = 1;
        this.sumOfDices = 1;
        this.numberOfSides = 1;
        this.sides = 6;
        this.sidesOfDice = '';
        this.results = [];
    }

    // setSides() to set number of sides.

    setSides(numberOfSides)
    {
        this.numberOfSides = numberOfSides;
    }

    setNumber(numberOfDices)
    {
        // Check that number of dices is valid!
        this.numberOfDices = numberOfDices;
    }

    roll()
    {
        for (let i = 0; i < this.numberOfDices; i++) {
            let dice = 1 + Math.floor(Math.random() * this.sides);
            this.sumOfDices += dice;
            this.results.push(dice);
        }
    }

    rollSimple()
    {
        var sum = 0;
        for (let i = 0; i < this.numberOfDices; i++) {
            let dice = 1 + Math.floor(Math.random() * this.sides);
            sum += dice;
        }
        return sum;
    }

    rollSides()
    {
        for (let i = 0; i < this.numberOfDices; i++) {
            let sides = 1 + Math.floor(Math.random() * this.numberOfSides);
            this.sumOfsides += sides;
            this.results.push(sides);
        }
    }

    getResults()
    {
        return this.results.toString();
    }
}

class Yatzy {

    constructor()
    {
         // Skapa variabler
         this.dices = 5;
         this.dice = new Dice;
         this.dice.setNumber(1);
         this.sumPlayer = 0;
         this.rethrows = 2;
         this.dict = {};
         this.dict["1"] = 0
         this.dict["2"] = 0
         this.dict["3"] = 0
         this.dict["4"] = 0
         this.dict["5"] = 0
         this.dict["6"] = 0
         this.dict["score"] = 0
         this.dict["bonus"] = 0
         this.bonus = 0;
         this.round = 1;

    }

    startGame()
    {
        // Slå alla tärningar
        // Mata in resultaten i resultat div.
        // Dölja main menu div.
        // Avslöja resultat div.
        var diceVal1 = this.dice.rollSimple();
        var diceVal2 = this.dice.rollSimple();
        var diceVal3 = this.dice.rollSimple();
        var diceVal4 = this.dice.rollSimple();
        var diceVal5 = this.dice.rollSimple();

        document.getElementById('dice1').innerHTML= diceVal1;
        document.getElementById('dice2').innerHTML= diceVal2;
        document.getElementById('dice3').innerHTML= diceVal3;
        document.getElementById('dice4').innerHTML= diceVal4;
        document.getElementById('dice5').innerHTML= diceVal5;
        document.getElementById('rethrows').innerHTML= 2;
        this.rethrows = 2;

        document.getElementById('mainMenu').classList.add("invisible");
        document.getElementById('game').classList.remove("invisible");
    }

    rethrow()
    {
        // Kolla antal "kasta om", max 2. Om inga kast kvar, lämna funktionen.
        // Om inget är ibockat, visa notis
        // Om tärning är ibockad, kasta om de ibockade
        // minska antal omkast med 1
        // uppdatera omkast meddelandet
        // Mata in resultat i resultat div
        // När kast nr2 är klart, visa notis att spelaren skall spara kast

        if (this.rethrows <= 0 )
        {
            document.getElementById('message').innerHTML= "Du har slut på omkast! Välj dina tärningar och tryck på stanna";
            return 0;
        }
        else{

            var diceCheck1 = document.getElementById('diceCheck1');
            var diceCheck2 = document.getElementById('diceCheck2');
            var diceCheck3 = document.getElementById('diceCheck3');
            var diceCheck4 = document.getElementById('diceCheck4');
            var diceCheck5 = document.getElementById('diceCheck5');
    
            if( !diceCheck1.checked && !diceCheck2.checked && !diceCheck3.checked && !diceCheck4.checked && !diceCheck5.checked )
            {
                alert("Du måste ha bockat i någon tärning att kasta om!")
                return 0;
            }

            if( diceCheck1.checked )
            {
                var diceVal1 = this.dice.rollSimple();
                document.getElementById('dice1').innerHTML= diceVal1;
            }

            if( diceCheck2.checked )
            {
                var diceVal2 = this.dice.rollSimple();
                document.getElementById('dice2').innerHTML= diceVal2;
            }

            if( diceCheck3.checked )
            {
                var diceVal3 = this.dice.rollSimple();
                document.getElementById('dice3').innerHTML= diceVal3;
            }

            if( diceCheck4.checked )
            {
                var diceVal4 = this.dice.rollSimple();
                document.getElementById('dice4').innerHTML= diceVal4;
            }

            if( diceCheck5.checked )
            {
                var diceVal5 = this.dice.rollSimple();
                document.getElementById('dice5').innerHTML= diceVal5;
            }

            this.rethrows = this.rethrows-1;
            document.getElementById('rethrows').innerHTML= this.rethrows;


            
        }
    }
    stop()
    {
        // Om fältet är tomt, skriv ut notis "du måste välja en siffra"
        // Om spelaren väljer ett nummber som inte är slaget, skriv ut notis
        // Se till att nummret är mellan 1-6 (optional)

        // lAGRA VÄRDET SPELAREN VÄLJER ATT SPARA i dicten
        // Printa ut värderna från dicten

        var diceVal1 = document.getElementById('dice1').innerHTML;
        var diceVal2 = document.getElementById('dice2').innerHTML;
        var diceVal3 = document.getElementById('dice3').innerHTML;
        var diceVal4 = document.getElementById('dice4').innerHTML;
        var diceVal5 = document.getElementById('dice5').innerHTML;

        var result = document.getElementById('amount').value
        
        // If value is not set, return!
        if (result < 1 || result > 6)
        {
            document.getElementById('message').innerHTML = "Du måste välja ett tärningsvärde mellan 1-6 att behålla!"
            return 0;
        }

        // Create a set to check wheter the chosen dice was rolled.
        var set = new Set();
        set.add(diceVal1);
        set.add(diceVal2);
        set.add(diceVal3);
        set.add(diceVal4);
        set.add(diceVal5);

        // Check if value is valid (was thrown)
        if (!set.has(result))
        {
            document.getElementById('message').innerHTML = "Du måste välja ett tärningsvärde som är slaget";
            return 0;
        }
        
        if (this.dict[result] != 0)
        {
            document.getElementById('message').innerHTML = "Du får bara slå på ett värde som du inte har slagit på.";
            return 0;
        }


        // Antal slagningar av det valda värdet
        var amount = 0;
        if (diceVal1 == result){
            amount++;
        }
        if (diceVal2 == result){
            amount++;
        }
        if (diceVal3 == result){
            amount++;
        }
        if (diceVal4 == result){
            amount++;
        }
        if (diceVal5 == result){
            amount++;
        }

        this.dict[result] = amount;


        document.getElementById('res1').innerHTML = this.dict[1];
        document.getElementById('res2').innerHTML = this.dict[2];
        document.getElementById('res3').innerHTML = this.dict[3];
        document.getElementById('res4').innerHTML = this.dict[4];
        document.getElementById('res5').innerHTML = this.dict[5];
        document.getElementById('res6').innerHTML = this.dict[6];


        this.dict["score"] = parseInt(this.dict["score"]) + parseInt(result) * amount;
        


        if (this.dict["score"] >= 63)
        {
            this.bonus = 50;
        }
        

        // Game over condition
        // Eller, vi har kommit till round 6.
        // if round == 6
        //  game over (visa game over, fixa knappen) 
        // else
        //  round += 1
        if (this.round == 6)
        {
            document.getElementById('gameOverMessage').innerHTML = "Game over!";
            document.getElementById('nextRoundBtn').disabled = true
            document.getElementById('newGameBtn').classList.remove("invisible");
        }


        // score
        document.getElementById("total").innerHTML = this.dict["score"]; 
        document.getElementById("bonus").innerHTML = this.bonus; 


        // All annan kod.
        document.getElementById('game').classList.add("invisible");
        document.getElementById('stop').classList.remove("invisible");

        

        

         // Dölj resultat div.
        // För in resultat i tabell för respektive tärning
        // Visa summan av sparade tärningar, måste vara samma värde på tärningarna man väljer att spara
        // Uppgradera totalsumman
        // När resultat är sparat skicka vidare spelaren för nästa kast
           //Upprepa tills 1-6 är ifyllda
        // När alla reultat är ifyllda visa eventuell bonus (minst 63p ger bonus 50p) 
        // Visa slutresultat.
       
    }

    nextRound()
    {
        document.getElementById('stop').classList.add("invisible");
        document.getElementById('game').classList.remove("invisible");
        // Kolla omspelet är över, alla alternativ är ifyllda.
        // Dölja nuvarande div (end of round page)
        // Kalla startGame()
        this.round += 1
        this.startGame();


    }
}



class gameOf21
{
    constructor()
    {
        // Skapa variabler
        this.dices = 0;
        this.dice = new Dice;

        this.sumPlayer = 0;
        this.sumComputer = 0;
        this.winner = "";
        this.playerPassed = false;
        this.fileName = "scoreBoard.txt"
    }

    // Hämtar bara antal tärningar och startar spelet
    startGame()
    {
        var optionOne = document.getElementById("oneDiceOpt")
        var optionTwo = document.getElementById("twoDiceOpt")
        document.getElementById('mainMenu').remove()
        document.getElementById('game').classList.remove("invisible")


        if(optionOne.checked)
        {
            console.log(optionOne.value)
            document.getElementById('outputMessage').innerHTML = "You have choosen one die";
            this.dices = 1;
        }
        else
        {
            console.log(optionTwo.value)
            document.getElementById('outputMessage').innerHTML = "You have choosen two dice";
            this.dices = 2;
            this.dice.setNumber(2);
        }  
    }
    // Simulera tärningskast för datorn och spelaren.
    roll()
    {
        // Roll for player and add to sum
        let resultPlayer = this.playerMove()


        // Roll for computer and add to sum
        this.computerMove()

        document.getElementById("sum").innerHTML = resultPlayer;
        document.getElementById("totalsum").innerHTML = this.sumPlayer;
        document.getElementById("comsum").innerHTML = this.sumComputer;

        

        // Kolla om game over 
        // print message game over 
        if(this.gameOver())
        {
            this.displayGameOver();
        }
    }

    playerMove()
    {
        // Roll for player and add to sum
        let resultPlayer = this.dice.rollSimple();
        this.sumPlayer += resultPlayer;
        return resultPlayer;
    }

    computerMove()
    {
        // Roll for computer and add to sum
        let resultComputer = this.dice.rollSimple();
        this.sumComputer += resultComputer;
        return resultComputer;
    }

    // Kollar om spelaren eller datorn nått 21 
    gameOver()
    {
        if ( this.sumComputer == 21) // Datorn har nått 21.
        {
            this.winner = "Computer";
            return true;
        }
        else if(this.sumComputer > 21 && this.sumPlayer > 21)
        {
            this.winner = "Computer";
            return true;
        }
        else if(this.sumPlayer > 21)
        {
            this.winner ="Computer";
            return true;
        }
        else if(this.sumComputer > 21 ) // Datorn har nått över 21.
        {
            this.winner ="Player";
            return true;
        }
        else if( this.sumPlayer == 21 || this.playerPassed) // Spelaren har inga fler moves. (Han har nått 21 eller gjort pass.)
        {
            while( this.sumComputer < 21)
            {
                this.computerMove()
            }
            if (this.sumComputer == 21)
            {
                this.winner = "Computer";
            }
            else
            {
                this.winner = "Player"
            }
            return true;
        }
        // Scenario 1: Spelaren når 21. 
        // Datorn kastar tills att den antigen får 21 eller hamnar över 21.
        // Om datorn hamnar på 21, vinner datorn, annars vinner spelaren.

        // Senario 2: Datorn når 21.
        // Gmae over.

        // Scenario 3: Spelaren gör pass.
        // Datorn kastar tills att den antigen får 21 eller hamnar över 21.

        return false;
    }

    score()
    {

    }

    pass()
    {
        this.playerPassed = true;
        if(this.gameOver())
        {
            this.displayGameOver()
        }
    }

    displayGameOver()
    {
    
        var intWinner = "0";
        if(this.winner == "Computer")
        {
            intWinner = "1";
        }
        

        document.getElementById('won').setAttribute("value", intWinner)
        document.getElementById('game').remove()
        document.getElementById('gameOver').classList.remove("invisible")
        document.getElementById('gameState').innerHTML = "Player sum: " + this.sumPlayer + " Computer sum: " + this.sumComputer;
        document.getElementById('gameOverMessage').innerHTML = "Game over, winner is " + this.winner;
    }
}

var game = new gameOf21();
var yatzy = new Yatzy();



function dice_test()
{
    var numberOfDices = document.getElementById('numberOfDices').value

    if (numberOfDices < 1 || numberOfDices > 100) {
        document.getElementById('message').innerHTML = "Number of dices must be between 1 and 100";
    } else {
        // Create Dice class
        let dice = new Dice();
        dice.setNumber(numberOfDices);  // Set number of dices.
        dice.roll();                    // Simulate the dice rolls.
        var res = dice.getResults();    // Get results in string format.

        document.getElementById('message').innerHTML = res;    // Access the html tag "message" and alter its innerhtml.
    }

}

function dice_sides()
{
    var numberOfSides = document.getElementById('numberOfSides').value

    if (numberOfSides < 1 || numberOfSides > 1000) {
        document.getElementById('messageSides').innerHTML = "Number of sides must be between 1 and 100";
    } else {
        // Create Dice class
        let sides = new Dice();
        sides.setSides(numberOfSides);  // Set number of sides.
        sides.rollSides();                    // Simulate the dice roll.
        var res = sides.getResults();    // Get results in string format.

        document.getElementById('messageSides').innerHTML = res;    // Access the html tag "message" and alter its innerhtml.
    }

}
