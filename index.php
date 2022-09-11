<?php
require 'index.html';

if (array_key_exists('submit',$_POST)) {
    echo '<script>
    document.getElementById("submit").style.display = "none";
    function checker() {
        const food = document.getElementById("food").value;
        const food1 = document.getElementById("food1").value;
        const food2 = document.getElementById("food2").value;
        const food3 = document.getElementById("food3").value;
    
        const place = document.getElementById("place").value;
        const place1 = document.getElementById("place1").value;
        const place2 = document.getElementById("place2").value;
        const place3 = document.getElementById("place3").value;
    
        const drink = document.getElementById("drink").value;
        const drink1 = document.getElementById("drink1").value;
        const drink2 = document.getElementById("drink2").value;
        const drink3 = document.getElementById("drink3").value;
    
        const car = document.getElementById("car").value;
        const car1 = document.getElementById("car1").value;
        const car2 = document.getElementById("car2").value;
        const car3 = document.getElementById("car3").value;
    
        const time = document.getElementById("time").value;
        const time1 = document.getElementById("time1").value;
        const time2 = document.getElementById("time2").value;
        const time3 = document.getElementById("time3").value;
    
        
        const age = document.getElementById("age").value;
        const age1 = document.getElementById("age1").value;
        const age2 = document.getElementById("age2").value;
        const age3 = document.getElementById("age3").value;
    
    
        const mobile = document.getElementById("mobile").value;
        const mobile1 = document.getElementById("mobile1").value;
        const mobile2 = document.getElementById("mobile2").value;
        const mobile3 = document.getElementById("mobile3").value;
    
        const yt = document.getElementById("yt").value;
        const yt1 = document.getElementById("yt1").value;
        const yt2 = document.getElementById("yt2").value;
        const yt3 = document.getElementById("yt3").value;
    
        const media = document.getElementById("media").value;
        const media1 = document.getElementById("media1").value;
        const media2 = document.getElementById("media2").value;
        const media3 = document.getElementById("media3").value;
    
        
        const movie = document.getElementById("movie").value;
        const movie1 = document.getElementById("movie1").value;
        const movie2 = document.getElementById("movie2").value;
        const movie3 = document.getElementById("movie3").value;
    
        const actor = document.getElementById("actor").value;
        const actor1 = document.getElementById("actor1").value;
        const actor2 = document.getElementById("actor2").value;
        const actor3 = document.getElementById("actor3").value;
    
        const subject = document.getElementById("subject").value;
        const subject1 = document.getElementById("subject1").value;
        const subject2 = document.getElementById("subject2").value;
        const subject3 = document.getElementById("subject3").value;
    
        const colour = document.getElementById("colour").value;
        const colour1 = document.getElementById("colour1").value;
        const colour2 = document.getElementById("colour2").value;
        const colour3 = document.getElementById("colour3").value;
    
        const animal = document.getElementById("animal").value;
        const animal1 = document.getElementById("animal1").value;
        const animal2 = document.getElementById("animal2").value;
        const animal3 = document.getElementById("animal3").value;
    
        const game = document.getElementById("game").value;
        const game1 = document.getElementById("game1").value;
        const game2 = document.getElementById("game2").value;
        const game3 = document.getElementById("game3").value;
        if (food == food1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (food == food2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (food == food3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (food1 == food2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (food2 == food3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (food1 == food3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
        
    
        else if (place == place1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (place == place2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (place == place3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (place1 == place2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (place2 == place3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (place1 == place3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        
    
        
    
        else if (drink == drink1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (drink == drink2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (drink == drink3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (drink1 == drink2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (drink2 == drink3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (drink1 == drink3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        
            
    
        else if (car == car1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (car == car2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (car == car3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (car1 == car2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (car2 == car3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (car1 == car3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
        
        else if (time == time1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (time == time2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (time == time3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (time1 == time2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (time2 == time3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (time1 == time3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
    
              
    
        else if (age == age1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (age == age2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (age == age3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (age1 == age2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (age2 == age3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (age1 == age3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
                
    
        else if (mobile == mobile1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (mobile == mobile2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (mobile == mobile3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (mobile1 == mobile2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (mobile2 == mobile3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (mobile1 == mobile3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
        else if (yt == yt1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (yt == yt2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (yt == yt3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (yt1 == yt2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (yt2 == yt3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (yt1 == yt3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
                 
    
        else if (media == media1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (media == media2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (media == media3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (media1 == media2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (media2 == media3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (media1 == media3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
        else if (movie == movie1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (movie == movie2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (movie == movie3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (movie1 == movie2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (movie2 == movie3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (movie1 == movie3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
    
        else if (actor == actor1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (actor == actor2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (actor == actor3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (actor1 == actor2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (actor2 == actor3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (actor1 == actor3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
        
        else if (subject == subject1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (subject == subject2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (subject == subject3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (subject1 == subject2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (subject2 == subject3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (subject1 == subject3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
        else if (colour == colour1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (colour == colour2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (colour == colour3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (colour1 == colour2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (colour2 == colour3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (colour1 == colour3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    
    
    
        else if (animal == animal1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (animal == animal2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (animal == animal3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (animal1 == animal2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (animal2 == animal3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (animal1 == animal3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        
        else if (game == game1) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (game == game2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (game == game3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (game1 == game2) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (game2 == game3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
        else if (game1 == game3) {
            alert("please select a different option");
            document.getElementById("submit").style.display = "none";
        }
    
    else{
        document.getElementById("submit").style.display="block";
    }
    
    
    }
    </script>';
    button();
}
  

function button(){

$name = $_POST["create"];
$food = $_POST["firstxm"];
$food1 = $_POST["firstxmz"];
$food2 = $_POST["firstxmy"];
$food3 = $_POST["firstxmyzx"];
$place = $_POST["secondxm"];
$place1 = $_POST["secondxmjk"];
$place2 = $_POST["secondghj"];
$place3 = $_POST["secondfg"];
$drink = $_POST["drinkmain"];
$drink1 = $_POST["opton-s"];
$drink2 = $_POST["option-f"];
$drink3 = $_POST["option-t"];
$car = $_POST["car-main"];
$car1 = $_POST["car-main1"];
$car2 = $_POST["car-main2"];
$car3 = $_POST["car-main3"];
$time = $_POST["time"];
$time1 = $_POST["time1"];
$time2 = $_POST["time2"];
$time3 = $_POST["time3"];
$age = $_POST["age"];
$age1 = $_POST["age1"];
$age2 = $_POST["age2"];
$age3 = $_POST["age3"];
$mobile = $_POST["mobile"];
$mobile1 = $_POST["mobile1"];
$mobile2 = $_POST["mobile2"];
$mobile3 = $_POST["mobile3"];
$youtuber = $_POST["youtuber1"];
$youtuber1x = $_POST["youtuber1x"];
$youtuber2x = $_POST["youtuber2x"];
$youtuber3x = $_POST["youtuber3x"];
$media = $_POST["media"];
$media1 = $_POST["media1"];
$media2 = $_POST["media2"];
$media3 = $_POST["media3"];
$movie = $_POST["movie"];
$movie1 = $_POST["movie1"];
$movie2 = $_POST["movie2"];
$movie3 = $_POST["movie3"];
$actor = $_POST["actor"];
$actor1 = $_POST["actor1"];
$actor2 = $_POST["actor2"];
$actor3 = $_POST["actor3"];
$subject = $_POST["subject"];
$subject1 = $_POST["subject1"];
$subject2 = $_POST["subject2"];
$subject3 = $_POST["subject3"];
$colour = $_POST["colour"];
$colour1 = $_POST["colour1"];
$colour2 = $_POST["colour2"];
$colour3 = $_POST["colour3"];
$animal = $_POST["animal"];
$animal1 = $_POST["animal1"];
$animal2 = $_POST["animal2"];
$animal3 = $_POST["animal3"];
$game = $_POST["game"];
$game1 = $_POST["game1"];
$game2 = $_POST["game2"];
$game3 = $_POST["game3"];
$email = $_POST["mail"];



$ranNum = rand();


$text = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>

        @import url("https://fonts.googleapis.com/css2?family=Codystar&family=Ubuntu:wght@300&family=Vast+Shadow&display=swap");
        body{
            font-family: "Ubuntu", sans-serif;
        }
        .questions {
            display: block;
            margin: auto;
            text-align: center;
            margin-top: 80px;
            font-size: 37px;
        }

#question1{
    display: none;
}
        #question2 {
            display: none;
        }

        #question3 {
            display: none;
        }

        #question4 {
            display: none;
        }

        #question5 {
            display: none;
        }

        #question6 {
            display: none;
        }

        #question7 {
            display: none;
        }

        #question8 {
            display: none;
        }

        #question9 {
            display: none;
        }

        #question10 {
            display: none;
        }

        #question11 {
            display: none;
        }

        #question12 {
            display: none;
        }

        #question13 {
            display: none;
        }

        #question14 {
            display: none;
        }

        #question15 {
            display: none;
        }

        .nametake{
            display: block;
            margin: auto;
            text-align: center;
            margin-top: 100px;
        }

        .startinp{
              width: 350px;
              height: 35px;
        }

        .startbtn{
            margin-top: 45px;
            width: 100px;
            background-color: white;
            border: 0.5px solid black;
            border-radius: 6px;
            height: 25px;
            padding-top: 4px;
        }

        .played{
            display: none;
            text-align: center;
            margin-top: 80px;
        }

        .played a{
            margin-top: 50px;
            text-decoration: none;
        }
@media (min-width: 240px) and (max-width: 452px){
    .startinp{
        width: 237px;
    }

    .questions{
        font-size: 18px;
    }

    .options input{
        margin: 10px;
    }

    .options button{
        margin-top: 25px;
        width: 70px;
        background-color: plum;
        border: 0px;
        height: 34px;
        padding-left: 6px;
    }
}

    </style>

   <div class="nametake" id="taker">
    <form method="post">
    <input type="text" id="nameplyr" placeholder="Enter Your Name" name="nmxj" class="startinp" required value="">
    </form>
    <button type="submit" onclick="start()" class="startbtn">Start</button>
   </div>
    
    <div id="question1" class="questions">
        <h2>Favorate Food Of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz" name="quiz">
            <input type="radio" value="one" name="onex">'.$food1. '<br>
            <input type="radio" value="two" name="onex">'.$food2.'<br>
            <input type="radio" value="three" name="onex">'.$food.'<br>
            <input type="radio" value="four" name="onex">'.$food3.'<br>
        </form>
            <button type="submit" onclick="one()">Next</button>
        </div>
    </div>

    <div id="question2" class="questions">
        <h2>Q2 Favorate Place of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz2" name="quiz2">
            <input type="radio" value="one" name="twox">'.$place2.'<br>
            <input type="radio" value="two" name="twox">'.$place1.'<br>
            <input type="radio" value="three" name="twox">'.$place3.'<br>
            <input type="radio" value="four" name="twox">'.$place.'<br>
        </form>
            <button type="submit" onclick="two()">Next</button>
        </div>
    </div>


    <div id="question3" class="questions">
        <h2>Q3 Favorate drink of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz3" name="quiz3">
            <input type="radio" value="one" name="threex">'.$drink1.'<br>
            <input type="radio" value="two" name="threex">'.$drink.'<br>
            <input type="radio" value="three" name="threex">'.$drink2.'<br>
            <input type="radio" value="four" name="threex">'.$drink3.'<br>
        </form>
            <button type="submit" onclick="three()">Next</button>
        </div>
    </div>

    <div id="question4" class="questions">
        <h2>Q4 FFavorate Car brand of‎ '.$name.'</h2>

        <div class="options">
            <form name="quiz4" id="quiz4">
            <input type="radio" value="one" name="fourx">'.$car.'<br>
            <input type="radio" value="two" name="fourx">'.$car1.'<br>
            <input type="radio" value="three" name="fourx">'.$car2.'<br>
            <input type="radio" value="four" name="fourx">'.$car3.'<br>
        </form>
            <button type="submit" onclick="four()">Next</button>
        </div>
    </div>


    <div id="question5" class="questions">
        <h2>Q5 What would‎ '.$name.'‎ like to in his free time?</h2>

        <div class="options">
            <form id="quiz5" name="quiz5">
            <input type="radio" value="one" name="fivex">'.$time3.'<br>
            <input type="radio" value="two" name="fivex">'.$time2.'<br>
            <input type="radio" value="three" name="fivex">'.$time1.'<br>
            <input type="radio" value="four" name="fivex">'.$time.'<br>
        </form>
            <button type="submit" onclick="five()">Next</button>
        </div>
    </div>

    <div id="question6" class="questions">
        <h2>Q6 Age of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz6" name="quiz6">
            <input type="radio" value="one" name="sixx">'.$age1.'<br>
            <input type="radio" value="two" name="sixx">'.$age.'<br>
            <input type="radio" value="three" name="sixx">'.$age2.'<br>
            <input type="radio" value="four" name="sixx">'.$age3.'<br>
            </form>
            <button type="submit" onclick="six()">Next</button>
        </div>
    </div>

    <div id="question7" class="questions">
        <h2>Q7 Favorate mobile brand of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz7" name="quiz7">
            <input type="radio" value="one" name="seveanx">'.$mobile3.'<br>
            <input type="radio" value="two" name="seveanx">'.$mobile2.'<br>
            <input type="radio" value="three" name="seveanx">'.$mobile1.'<br>
            <input type="radio" value="four" name="seveanx">'.$mobile.'<br>
        </form>
            <button type="submit" onclick="sevean()">Next</button>
        </div>
    </div>


    <div id="question8" class="questions">
        <h2>Q8 Favorate youtuber of‎ '.$name.'</h2>

        <div class="options">
            <form name="quiz8" id="quiz8">
            <input type="radio" value="one" name="eightx">'.$youtuber2x.'<br>
            <input type="radio" value="two" name="eightx">'.$youtuber3x.'<br>
            <input type="radio" value="three" name="eightx">'.$youtuber1x.'<br>
            <input type="radio" value="four" name="eightx">'.$youtuber.'<br>
        </form>
            <button type="submit" onclick="eight()">Next</button>
        </div>
    </div>


    <div id="question9" class="questions">
        <h2>Q9 Favorate social media of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz9" name="quiz9">
            <input type="radio" value="one" name="ninex">'.$media.'<br>
            <input type="radio" value="two" name="ninex">'.$media1.'<br>
            <input type="radio" value="three" name="ninex">'.$media2.'<br>
            <input type="radio" value="four" name="ninex">'.$media3.'<br>
        </form>
            <button type="submit" onclick="nine()">Next</button>
        </div>
    </div>


    <div id="question10" class="questions">
        <h2>Q10 What kind of movies does‎ '.$name.'‎ likes?</h2>

        <div class="options">
            <form id="quiz10" name="quiz10">
            <input type="radio" value="one" name="tenx">'.$movie1.'<br>
            <input type="radio" value="two" name="tenx">'.$mobile2.'<br>
            <input type="radio" value="three" name="tenx">'.$movie.'<br>
            <input type="radio" value="four" name="tenx">'.$mobile3.'<br>
        </form>
            <button type="submit" onclick="ten()">Next</button>
        </div>
    </div>


    <div id="question11" class="questions">
        <h2>Q11 Favorate actor of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz11" name="quiz11">
            <input type="radio" value="one" name="elevenx">'.$actor1.'<br>
            <input type="radio" value="two" name="elevenx">'.$actor.'<br>
            <input type="radio" value="three" name="elevenx">'.$actor2.'<br>
            <input type="radio" value="four" name="elevenx">'.$actor3.'<br>
        </form>
            <button type="submit" onclick="eleven()">Next</button>
        </div>
    </div>

    <div id="question12" class="questions">
        <h2>Q12 Favorate Subject of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz12" name="quiz12">
            <input type="radio" value="one" name="twelvex">'.$subject.'<br>
            <input type="radio" value="two" name="twelvex">'.$subject2.'<br>
            <input type="radio" value="three" name="twelvex">'.$subject1.'<br>
            <input type="radio" value="four" name="twelvex">'.$subject3.'<br>
        </form>
            <button type="submit" onclick="twelve()">Next</button>
        </div>
    </div>



    <div id="question13" class="questions">
        <h2>Q13 Favorate colour of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz13" name="quiz13">
            <input type="radio" value="one" name="thirteenx">'.$colour2.'<br>
            <input type="radio" value="two" name="thirteenx">'.$colour1.'<br>
            <input type="radio" value="three" name="thirteenx">'.$colour3.'<br>
            <input type="radio" value="four" name="thirteenx">'.$colour.'<br>
        </form>
            <button type="submit" onclick="thirteen()">Next</button>
        </div>
    </div>


    <div id="question14" class="questions">
        <h2>Q14 Favorate animal of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz14" name="quiz14">
            <input type="radio" value="one" name="fourteenx">'.$animal1.'<br>
            <input type="radio" value="two" name="fourteenx">'.$animal2.'<br>
            <input type="radio" value="three" name="fourteenx">'.$animal.'<br>
            <input type="radio" value="four" name="fourteenx">'.$animal3.'<br>
        </form>
            <button type="submit" onclick="fourteen()">Next</button>
        </div>
    </div>

    <div id="question15" class="questions">
        <h2>Q15 Favorate game of‎ '.$name.'</h2>

        <div class="options">
            <form id="quiz15" name="quiz15">
            <input type="radio" value="one" name="fifteenx">'.$game.'<br>
            <input type="radio" value="two" name="fifteenx">'.$game1.'<br>
            <input type="radio" value="three" name="fifteenx">'.$game2.'<br>
            <input type="radio" value="four" name="fifteenx">'.$game3.'<br>
        </form>
            <button type="submit" onclick="score()">View Score</button>
        </div>
    </div>

    <div class="played" id="playedx">
     <h2>You got a score of:</h2>   
    <h1 id="result"></h1>
    <a href="index.html"><p id="make"></p></a>
</div>    


</body>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function one() {
        if(document.quiz.onex.value == ""){
                     alert("please chose an option")
        }
        else{
        document.getElementById("question1").style.display = "none";
        document.getElementById("question2").style.display = "block";
        }
    }

    function two() {
        if(document.quiz2.twox.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.display = "block";
}
    }


    function three() {
        if(document.quiz3.threex.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.display = "block";
}
    }


    function four() {
        if(document.quiz4.fourx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question4").style.display = "none";
        document.getElementById("question5").style.display = "block";
}
    }


    function five() {
        if(document.quiz5.fivex.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question5").style.display = "none";
        document.getElementById("question6").style.display = "block";
}
    }


    function six() {
        if(document.quiz6.sixx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question6").style.display = "none";
        document.getElementById("question7").style.display = "block";
}
    }


    function sevean() {
        if(document.quiz7.seveanx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question7").style.display = "none";
        document.getElementById("question8").style.display = "block";
}
    }


    function eight() {
        if(document.quiz8.eightx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question8").style.display = "none";
        document.getElementById("question9").style.display = "block";
}
    }


    function nine() {
        if(document.quiz9.ninex.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question9").style.display = "none";
        document.getElementById("question10").style.display = "block";
}
    }


    function ten() {
        if(document.quiz10.tenx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question10").style.display = "none";
        document.getElementById("question11").style.display = "block";
}
    }


    function eleven() {
        if(document.quiz11.elevenx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question11").style.display = "none";
        document.getElementById("question12").style.display = "block";
}
    }


    function twelve() {
        if(document.quiz12.twelvex.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question12").style.display = "none";
        document.getElementById("question13").style.display = "block";
}
    }


    function thirteen() {
        if(document.quiz13.thirteenx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question13").style.display = "none";
        document.getElementById("question14").style.display = "block";
}
    }


    function fourteen() {
        if(document.quiz14.fourteenx.value == ""){
            alert("please chose an option")
}
else{
        document.getElementById("question14").style.display = "none";
        document.getElementById("question15").style.display = "block";
}
    }

  

    function start(){
        const name = document.getElementById("nameplyr").value;
     
        if(name == ""){
            alert("please enter your name")
        }
       else{
        document.getElementById("question1").style.display="block";
        document.getElementById("taker").style.display="none";
       }
    }
    

    function score() {
        if(document.quiz15.fifteenx.value == ""){
            alert("please chose an option")
}
else{
        const question1x = document.quiz.onex.value;
           const question2x = document.quiz2.twox.value
         const question3x = document.quiz3.threex.value;
          const question4x = document.quiz4.fourx.value;
          const question5x = document.quiz5.fivex.value;
           const question6x = document.quiz6.sixx.value;
         const question8x = document.quiz8.eightx.value;
          const question9x = document.quiz9.ninex.value;
          const question10x = document.quiz10.tenx.value;
      const question11x = document.quiz11.elevenx.value;
      const question12x = document.quiz12.twelvex.value;
  const question13x = document.quiz13.thirteenx.value;
  const question14x = document.quiz14.fourteenx.value;
    const question15x = document.quiz15.fifteenx.value;
   
   let scnm = "";
     

        var correct = 0;
    const question7x = document.quiz7.seveanx.value
        if (question1x == "three") {
            correct++;
        }


        if (question2x == "four") {
            correct++;
        }

        if (question3x == "two") {
            correct++;
        }

        if (question4x == "one") {
            correct++;
        }

        if (question5x == "four") {
            correct++;
        }

        if (question6x == "two") {
            correct++;
        }

        if (question7x == "four") {
            correct++;
        }

        if (question8x == "four") {
            correct++;
        }

        if (question9x == "one") {
            correct++;
        }

        if (question10x == "three") {
            correct++;
        }

        if (question11x == "two") {
            correct++;
        }

        if (question12x == "one") {
            correct++;
        }

        if (question13x == "four") {
            correct++;
        }

        if (question14x == "three") {
            correct++;
        }

        if (question15x == "one") {
            correct++;
        }

      

        document.getElementById("question1").style.display = "none";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.display = "none";
        document.getElementById("question5").style.display = "none";
        document.getElementById("question6").style.display = "none";
        document.getElementById("question7").style.display = "none";
        document.getElementById("question8").style.display = "none";
        document.getElementById("question9").style.display = "none";
        document.getElementById("question10").style.display = "none";
        document.getElementById("question11").style.display = "none";
        document.getElementById("question12").style.display = "none";
        document.getElementById("question13").style.display = "none";
        document.getElementById("question14").style.display = "none";
        document.getElementById("question15").style.display = "none";
        document.getElementById("playedx").style.display="block";
        document.getElementById("result").innerHTML=correct;

        const name = document.getElementById("nameplyr").value;
        let Text = "Hey do you want to create a quiz like this?Click here to create" ;
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "personalanirudhvijay@gmail.com",
            Password : "0DE490E67A6C4844B82B4DB4528F566DBE57",
            To : "'.$email.'",
            From : "personalanirudhvijay@gmail.com",
            Subject : "This is the subject",
            Body : name+"--->"+ "scored--->"+correct
        }).then(
          message => document.getElementById("make").innerHTML=Text
        );

    }

}

</script>

</html>

';

$file = fopen($ranNum.$name.'invitesyoutoplayfrndsquiznnchmmmvcdgnryvdsrbl3531sdbcfhmqesaczxdfgtevbnjkjlnmhjfjkuvfdsxexsvyewa.html',"w");
echo fwrite($file, $text);
fclose($file);
echo "<h3>The link is generated!</h3>";
echo "<a href=http://localhost/quiz/".$ranNum.$name.'invitesyoutoplayfrndsquiznnchmmmvcdgnryvdsrbl3531sdbcfhmqesaczxdfgtevbnjkjlnmhjfjkuvfdsxexsvyewa.html>'.'http://localhost/quiz/'.$ranNum.$name.'invitesyoutoplayfrndsquiznnchmmmvcdgnryvdsrbl3531sdbcfhmqesaczxdfgtevbnjkjlnmhjfjkuvfdsxexsvyewa.html</a>';



    
}




?>