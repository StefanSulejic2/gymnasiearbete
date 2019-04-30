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
    display: block;
    float:right; 
    margin-right:25px; 
    margin-top:20px;
    width:200px;
    height:50px;
    border:0;
}

h1{
    text-align: center;
    font-size: 45px;
    margin-top: 30px;
}

h2{
    text-align: center;

}

h3{
    text-align: center;
    margin-top: 30px;
    font-size: 20px;
}

.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 50px;
    border: 4px solid white;
    color: white;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.logga{
    width:400px;
}

.widelbl{
    font-size:20px;
}

.input{
    margin-top: 10px;
    padding: 5px;
    margin-bottom: -5px;
    border-radius: 1px;
}

p{
    text-align: left;
    font-size: 24px;
    width: 700px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
    color: black;
    border-radius: 8px;
    padding: 10px;
}

footer{
    width: 100%;
    background-color: #111;
    padding: 60px 0px;
    text-align: center;
    color: white;
    
}

.mySlides{
    margin-left: auto;
    margin-right: auto;
}

.w3-button:hover {
    color: #000!important;
    background-color: #ccc!important;
}

.w3-black, .w3-hover-black:hover {
    color: #fff!important;
    background-color: #000!important;
}

.w3-display-left {
    position: absolute;
    top: 100%;
    left: 25%;
    transform: translate(0%, 1000%);
    -ms-transform: translate(-0%, -50%%);
}

.w3-display-right {
    position: absolute;
    top: 100%;
    right: 25%;
    transform: translate(0%, 1000%);
    -ms-transform: translate(0%,-50%);
}
.mySlides {display:none;}

.w3-button {
    border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}

.txtbtn {
  background-color: #4b0082;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 24px;
  margin: auto;
  margin-top: 10px;
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

#gygemte, #prgemte, #inrkute, #fösofte, #föengte, #invalte, #gygemit, #prgemit, #inrkuit, #fösoftit, #föengit, #invalit{
    list-style-type: none;
    text-align: left;
    font-size: 24px;
    width: 700px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
    color: black;
    border-radius: 8px;
    padding: 10px;
}

.mitt{
    text-align: center;
}