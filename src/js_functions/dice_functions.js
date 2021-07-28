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
        document.getElementById('game').remove()
        document.getElementById('gameOver').classList.remove("invisible")
        document.getElementById('gameState').innerHTML = "Player sum: " + this.sumPlayer + " Computer sum: " + this.sumComputer;
        document.getElementById('gameOverMessage').innerHTML = "Game over, winner is " + this.winner;
    }
}

var game = new gameOf21();



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
