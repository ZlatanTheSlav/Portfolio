<!DOCTYPE html>

<html>
	<head>
        <title>Javascript</title>
	</head>
	<body>
            
            <p>How many fingers ?</p>
            
            <input text="text" id="myNumber">
            
            <button id="guess">Guess !</button>
        
            <script>
                document.getElementById("guess").onclick = function () {
                    
                        var gotIt = false;
                        
                        var numberofGuesses = 1;

                        while (gotIt == false) {

                        var myNumber = document.getElementById("myNumber").value;

                        var guess = Math.random();

                        guess = guess * 6;

                        guess = Math.floor(guess);

                        if (guess == myNumber) {
                            gotIt = true ;
                            alert ("Got it was " + guess + " it took me " + numberofGuesses + " guesses");
                        }
                        
                        else {
                            numberofGuesses++;
                        }
                    }
                }
            </script>
        
        </footer>
	</body>
</html>