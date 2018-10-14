<!DOCTYPE html>

<html>

<head>
    <title>Javascript</title>
</head>

<style type="text/css">
    #square {
        border: 2px;
        width: 200px;
        height: 200px;
        background-color: red;
        display: none;
        position: relative;
    }
</style>

<body>

    <h1>Test your reactions !</h1>
    <p>Click on the boxes or circles as quickly as you can !</p>
    <span><b>Your Time: </b></span><span id="timeTaken"></span>    
    <div id="square"></div>

    <footer>
        <script>
            var start = new Date().getTime();

            function getRandomColor() {
                var letters = '0123456789ABCDEF'.split('');
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }

            function makeShapeAppear() {

                var top = Math.random() * 400;

                var left = Math.random() * 1050;

                var widtHeight = (Math.random() * 300) + 50;

                if (Math.random() < 0.5) {

                    document.getElementById("square").style.borderRadius = "50%";

                } else {

                    document.getElementById("square").style.borderRadius = "0%";
                }

                document.getElementById("square").style.backgroundColor = getRandomColor();

                document.getElementById("square").style.height = widtHeight + "px"

                document.getElementById("square").style.width = widtHeight + "px"

                document.getElementById("square").style.left = left + "px"

                document.getElementById("square").style.top = top + "px";

                document.getElementById("square").style.display = "block";

                start = new Date().getTime();

            }

            function appearAfterDelay() {
                setTimeout(makeShapeAppear, Math.random() * 2000);
            }

            appearAfterDelay();

            function timeToClick() {
                document.getElementById("square").onclick = function() {

                    document.getElementById("square").style.display = "none";

                    var end = new Date().getTime();

                    var timeTaken = (end - start) / 1000;

                    document.getElementById("timeTaken").innerHTML = timeTaken + " seconds";

                    appearAfterDelay();

                }
            }

            timeToClick();
        </script>

    </footer>
</body>

</html>
