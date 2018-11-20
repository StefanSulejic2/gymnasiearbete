<?php
header('Content-type: text/css; charset: UTF-8');
?>
*{
    margin: 0;
    padding: 0;
}

body, html {
    height: 100%;
    margin: 0;
    background-color: lightgray;
}

.bg {
    background-image: url("img/NTIbakgrund4.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bg img{
    float:right; 
    margin-right:25px; 
    margin-top:20px;
    width:200px;
    height:50px;
    border:0;
}


#sidenav{
    position: fixed;
    width: 230px;
    height: 100%;
    background: #111;
    left: -230px;
    transition: 0.5s;
}

#sidenav.active{
    left: 0;
}

#sidenav ul{
    padding-top: 20px;
    text-align: center;
}

 a:hover {
    color: #818181;
}

a:link{
    padding: 15px 0px 8px;
    text-decoration: none;
    font-size: 25px;
    display: block;
}

#sidenav a{
    color: white;
}

#sidenav .toggle-btn{
    position: absolute;
    left: 230px;
}

h1{
    text-align: center;
    font-size: 45px;
    margin-top: 100px;
}

h2{
    color: white;
    margin-left: 400px;
    margin-right: 440px;
    margin-top: 350px;
    padding-left: 50px;
    padding-right: 0px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 50px;
    border: 4px solid white;
}

p{
    text-align: center;
    font-size: 24px;
    width: 700px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 200px;
    color: black;
    border-radius: 8px;
    padding: 25px;
}

footer{
    width: 100%;
    background-color: #111;
    padding: 60px 0px;
    text-align: center;
    color: white;
}

