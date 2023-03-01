<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Start-up Page</title>
</head>
	<style>
		* {
    box-sizing: border-box;
}
body {
    padding: 0;
    margin: 0;
    font-family: "Inter", sans-serif;
    background: linear-gradient(50deg, #F40076, #DF98FA);
    padding: 40px 50px 50px;
    height: 100vh;
}
.container {
    min-height: calc(100vh - 20vh);
    border-radius: 10px;
    overflow: hidden;
    background-color: white;
    width: 500px;
    margin: auto;
}
.login-form {
    width: 500px;
}
.header {
    text-align: center;
    margin-bottom: 40px;
}
.header h1 {
    font-size: 35px;
    margin-bottom: 10px;
}
input {
    border: 2px solid black;
    height: 45px;
    padding: 0 2rem;
    width: 250px;
    outline: none;
    transition: background .5s;
    font-size: 15px;
    border-radius: 100px;

    margin-left: 15px;
    margin-top: 30px;
}
.button {
	text-align: center;
}
button {
    border: none;
    background: linear-gradient(45deg, #E05194,  #b621f3);
    color: white;
    padding: 1rem;
    border-radius: 100px;
    text-align: center;
    text-transform: uppercase;
    font-size: 18px;
    height: 55px;
    cursor: pointer;
    width: 200px;
    margin-top: 100px;
}
label {
	margin-left: 30px;
}
	</style>



<body>
	<div class="container">

		 <div class="header">
            <h1>Trivia Quest</h1>
        </div>

        <form action="startup.php" class="login-form" method="post">
       <div class="login-form">
                <div class="form-item">
                    <label for="playername">Player Name:</label>
                    <input type="text" name="playername" id="playername">
                </div>
                	<br />
                 <div class="button">
                    <button type="submit">Sign In</button>
                </div>
            
	</div>
</body>
</html>