<?php
header('Content-type: text/css; charset: UTF-8');
?>
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

 #sidenav a:hover {
    color: #818181;
}

#sidenav a:link{
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