<style type="text/css">

*{margin:0; padding:0;box-sizing:border-box; font-family:'Muli',
    sans-serif;}

.nav_style{

      background-color: #a29bfe!important;
   }
   .nav_style a{color:white;}

/*//////main header\\\\\\\*/

.main_header{
    height: 450px;
    width:100%;
}
         /*-------table style--------------*/
 table,th, td {
  padding: 15px;
  text-align: left;
  border: 1px solid black;
}

.rightside h1{
    font-size: 3rem; 
}


/*//////rotation\\\\\\\*/
.corona_rotate img{
    animation: gocorona 3s linear infinite;
}
@keyframes gocorona {
    0%{transform: rotate(0); }
    100%{transform: rotate(360deg); }
}

/*//////heartbeat animation\\\\\\\*/
.leftside img{
    animation: heartbeat 5s linear infinite;
    width: 50%;
    height: 50%;
    

}
@keyframes heartbeat {
    0%{
        transform: scale(.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(.75);
    }
    60%{
        transform: scale(1);
    }
    70%{
        transform: scale(.75);
    }
    80%{
        transform: scale(.75);
    }
    }
/* *****************corona_update******************* */
.corona_update{
    margin: 0 0 30px 0;
}
.corona_update h3{ color: #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }

@media(max-width: 780px)
{ .main_header{ height:700px; text-align:centre; }
.main_header h1{

    text-align:center;
    padding: 0;
    width: 100%;
    font-size: 30px;
}

}
/**********************about*****************/
.sub_section{
    background-color: #fbfafb;
}
.footer_style{
    background-color: #a29bfe!important;
}
.footer_style p{
    margin-bottom: 0!important;
}

</style>