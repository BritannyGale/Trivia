
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap");

* {
    box-sizing: border-box;
}
body {
    background: linear-gradient(50deg, #F40076, #DF98FA);
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
}
.container {
    background-color: #ffff;
    border-radius: 10px;
    box-shadow: 0 0 10px 2px rgba(100, 1000, 1000, 0.1);
    width: 600px;
    overflow: hidden;
}
.header {
    padding: 0 4rem 0;
}
h2 {
    padding: 1rem;
    margin: 0;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    font-size: 1rem;
    margin: 1rem 0;
}

ul li label input {
    cursor: pointer;
}
h1 {
    text-align: center;
}
p {
    text-align: center;
}
button {
    background-color: #03cae4;
    color: white;
    border: none;
    display: block;
    width: 100%;
    cursor: pointer;
    font-size: 1.3rem;
    font-family: inherit;
    padding: 1rem;
    margin-top: 30px;
}
button:hover {
    background-color: #04adc4;
}

</style>

<body>


    <div class="container">

        <form action="answer.php" method="post">
            
            <div class="header">
                <h1>TRIVIA QUEST</h1>
                <p>Select the correct answer!</p>
                <h3 id="question">1.) What is the smallest header in HTML by default?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer1" id="1a" class="answer" value="A" required>
                        <label for="1a">h1</label>
                    </li>

                    <li>
                        <input type="radio" name="answer1" id="1b" class="answer" value="B">
                        <label for="1b">h2</label>
                    </li>

                    <li>
                        <input type="radio" name="answer1" id="1c" class="answer" value="C">
                        <label for="1c">h6</label>
                    </li>

                    <li>
                        <input type="radio" name="answer1" id="1d" class="answer" value="D">
                        <label for="1d">h4</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">2.) What does HTML stands for?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer2" id="2a" class="answer" value="A" required>
                        <label for="2a">Home Tool Markup Language</label>
                    </li>

                    <li>
                        <input type="radio" name="answer2" id="2b" class="answer" value="B">
                        <label for="2b">Hyper Text Markup Language</label>
                    </li>

                    <li>
                        <input type="radio" name="answer2" id="2c" class="answer" value="C">
                        <label for="2c">Hyperlinks and Text Markup Language</label>
                    </li>

                    <li>
                        <input type="radio" name="answer2" id="2d" class="answer" value="D">
                        <label for="2d">Hyperlinks and Test Markup Language</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">3.) How many sizes of headers are available in HTML by default?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer3" id="3a" class="answer" value="A" required>
                        <label for="3a">5</label>
                    </li>

                    <li>
                        <input type="radio" name="answer3" id="3b" class="answer" value="B">
                        <label for="3b">1</label>
                    </li>

                    <li>
                        <input type="radio" name="answer3" id="3c" class="answer" value="C">
                        <label for="3c">3</label>
                    </li>

                    <li>
                        <input type="radio" name="answer3" id="3d" class="answer" value="D">
                        <label for="3d">6</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">4.) What are the types of lists available in HTML?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer4" id="4a" class="answer" value="A" required>
                        <label for="4a">Ordered, Unordered Lists</label>
                    </li>

                    <li>
                        <input type="radio" name="answer4" id="4b" class="answer" value="B">
                        <label for="4b">Bulleted, Numbered Lists</label>
                    </li>

                    <li>
                        <input type="radio" name="answer4" id="4c" class="answer" value="C">
                        <label for="4c">Named, Unnamed Lists</label>
                    </li>

                    <li>
                        <input type="radio" name="answer4" id="4d" class="answer" value="D">
                        <label for="4d">None of the above</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">5.) How to create an ordered list in HTML?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer5" id="5a" class="answer" value="A" required>
                        <label for="5a">&lt;ul&gt;</label>
                    </li>

                    <li>
                        <input type="radio" name="answer5" id="5b" class="answer" value="B">
                        <label for="5b">&lt;ol&gt;</label>
                    </li>

                    <li>
                        <input type="radio" name="answer5" id="5c" class="answer" value="C">
                        <label for="5c">&lt;href&gt;</label>
                    </li>

                    <li>
                        <input type="radio" name="answer5" id="5d" class="answer" value="D">
                        <label for="5d">&lt;b&gt;</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">6.) HTML files are saved by default with the extension?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer6" id="6a" class="answer" value="A" required>
                        <label for="6a">.html</label>
                    </li>

                    <li>
                        <input type="radio" name="answer6" id="6b" class="answer" value="B">
                        <label for="6b">.h</label>
                    </li>

                    <li>
                        <input type="radio" name="answer6" id="6c" class="answer" value="C">
                        <label for="6c">.ht</label>
                    </li>

                    <li>
                        <input type="radio" name="answer6" id="6d" class="answer" value="D">
                        <label for="6d">None of the above</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">7.) What is the effect of the &lt;b&gt; tag?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer7" id="7a" class="answer" value="A" required>
                        <label for="7a">It converts the text within it to bold font</label>
                    </li>

                    <li>
                        <input type="radio" name="answer7" id="7b" class="answer" value="B">
                        <label for="7b">It used to write black-colored font</label>
                    </li>

                    <li>
                        <input type="radio" name="answer7" id="7c" class="answer" value="C">
                        <label for="7c">It is used to change the font size</label>
                    </li>

                    <li>
                        <input type="radio" name="answer7" id="7d" class="answer" value="D">
                        <label for="7d">None of the above</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">8.) Which of the following is correct about HTML?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer8" id="8a" class="answer" value="A" required>
                        <label for="8a">HTML uses User Defined Tags</label>
                    </li>

                    <li>
                        <input type="radio" name="answer8" id="8b" class="answer" value="B">
                        <label for="8b">HTML uses tags defined within the language</label>
                    </li>

                    <li>
                        <input type="radio" name="answer8" id="8c" class="answer" value="C">
                        <label for="8c">Both A and B</label>
                    </li>

                    <li>
                        <input type="radio" name="answer8" id="8d" class="answer" value="D">
                        <label for="8d">None of the above</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">9.) How to display preformatted text in HTML?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer9" id="9a" class="answer" value="A" required>
                        <label for="9a">&lt;p&gt;</label>
                    </li>

                    <li>
                        <input type="radio" name="answer9" id="9b" class="answer" value="B">
                        <label for="9b">&lt;pre&gt;</label>
                    </li>

                    <li>
                        <input type="radio" name="answer9" id="9c" class="answer" value="C">
                        <label for="9c">&lt;hr&gt;</label>
                    </li>

                    <li>
                        <input type="radio" name="answer9" id="9d" class="answer" value="D">
                        <label for="9d">&lt;All of the above&gt;</label>
                    </li>
                </ul>
            </div>
            <div class="header">
                <h3 id="question">10.) What are the attributes used to change the size of an image?</h3>
                <ul>
                    <li>
                        <input type="radio" name="answer10" id="10a" class="answer" value="A" required>
                        <label for="10a">Width and Height</label>
                    </li>

                    <li>
                        <input type="radio" name="answer10" id="10b" class="answer" value="B">
                        <label for="10b">Big and Small</label>
                    </li>

                    <li>
                        <input type="radio" name="answer10" id="10c" class="answer" value="C">
                        <label for="10c">Top and Bottom</label>
                    </li>

                    <li>
                        <input type="radio" name="answer10" id="10d" class="answer" value="D">
                        <label for="10d">None of the above</label>
                    </li>
                </ul>
            </div>

            <button class="submit" type="submit">Submit</button>
        </form>
    </div>

</body>

</html>