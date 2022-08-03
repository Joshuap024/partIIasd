<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Mock up</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <style>
        body{
            background-image: url(header/hero-bg.jpg);
            
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
 
        } 
    
        .hero-shape{
            margin-right: 40%;
            margin-top: 15%;
        }
        .userbolavip{
            margin-left: 5%;
            margin-top: 2%;
        }
        .hero-thumbnail{
            
           margin-left: 40%;
            margin-top: 5%; 
        } 
      
                 
         .btn{
            background-image: linear-gradient(to right, #AA076B 0%, #61045F  51%, #AA076B  100%);
            margin: 1.5%;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
         margin-right: 3%;
            border-radius: 50px;
            display: block;
          }
          .btn:hover {
            background-position: right center; /* change the direction of the change here */
      
            text-decoration: none;
          }
           .btn1{
            background-image: linear-gradient(to right, #AA076B 0%, #61045F  51%, #AA076B  100%);
            margin: 1.5%;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            margin-right: 18%;
            border-radius: 50px;
            display: block;
            border: none;
          }
          .btn1:hover {
            background-position: right center; /* change the direction of the change here */
      
            text-decoration: none;
          }
          .buttons .btn .btn1{
              margin-right: 5%;
          }
          .content {
              
              color: white;
              padding: 0;
              margin-left: 20%;
              margin-top:-10%;
             

          }
          .content h1{
               margin-top:30%;
               font-size: 25px;
            
          }
          .content h2{
                color: magenta;
                
               font-size: 80px;
            
          }
           .content h3{
              
                
               font-size: 20px;
            
          }
          .sub-container{
              margin-top: 4%;
              background-color:#0d0729;
          }
          
          .sub-content{
              text-align: center;
          }
          .sub-container h1{
              color: white;
           margin-top: 8%;
              
               text-shadow: 0px 0px 5px  magenta;
          }
          .sub-container h2{
             
                 color: white;
                 font-size: 15px;
          }
           .sub-container h3{
             
                 color: white;
                 font-size: 15px;
          }
          .button3 .btn3{
              margin-left: 17%;
              margin-top: 2%;
              
          }
          .btn3{
            background-color: Transparent;
            background-repeat:no-repeat;
            border: none;
            cursor:pointer;
            overflow: hidden;
            border: solid 1px;
            border-color: magenta;
            border-radius: 50px;
             color: white; 
             padding: 15px 45px;
              box-shadow: 0 0 10px magenta;
     
          }
            .btn5{
            background-image: linear-gradient(to right, #AA076B 0%, #61045F  51%, #AA076B  100%);
            margin: 1.5%;
            padding: 5px 20px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            
            border-radius: 50px;
            display: block;
            border: none;
        
            }
             .btn6{
            background-image: linear-gradient(to right, #AA076B 0%, #61045F  51%, #AA076B  100%);
            margin: 1.5%;
            padding: 5px 20px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            margin-right: 6%;
       
            border-radius: 50px;
            display: block;
            border: none;
             }
              
          
         
        
    </style>
    <body>
        <?php
        // put your code here
        ?>
        <div class="main-container">
           
        <div   
         <div class="userbolavip">
           <img src="userbolavip.png" width="20%" height="20%"   >
        </div>   
        <div class="buttons"> 
            <button type="button" class="btn  position-absolute top-0 end-0" > <b>DRAFTER</b></button>  
            <button type="button" class="btn1 position-absolute top-0 end-0" > <b>LIVECHAT</b></button>
        </div> 
      
                
        <div class="hero-shape position-absolute ">
           <img src="Header/hero-shape.png" width="168%" height="1%" >
        </div>
        <div class="hero-thumbnail  ">
           <img src="Header/hero_thumbnail.png" width="70%" height="70%" >
        </div>  
            
            
            <div class="content position-absolute top-50 start-15 translate-middle ">
            <h1> NEW SPINERS ONLY!</h1>
            <h2> Rp100k</h2>
            <h3>100 FREE SPINS</h3>
            </div>
            <div class="button3 ">
                <button type="button" class="btn3 position-absolute top-50 start-0 translate-middle " > <b>PLAY NOW </b></button>
              </div>
            
            
        </div>
        <div class="sub-container container-xxl  position-absolute top-100 start-50 translate-middle">
            <div class="sub-content">
            <h1> FEATURED GAME</h1>
            <h2> Check out our latest featured game! No deposit bonuses for players from the Philippines</h2>
            <h3> Top 10 players receive prizes every hour!</h3>
            </div>
            <div class="button4">
                <button type="button" class="btn5  position-absolute top-0 end-0" > <b> > </b></button>  
            <button type="button" class="btn6 position-absolute top-0 end-0" > <b></b> < </button>
                
                 </div>
            
        </div>
        
        
        
        
        
    </body>
</html>
