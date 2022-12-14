<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital@1&family=Dancing+Script&family=Engagement&family=Montserrat:wght@400;500&display=swap');
         body,html{
			
            background-image:url(../images/cloud5.png);
            background-repeat:no-repeat;
            background-size:cover;
           }
        *{

           }
        img{
            width:100%;
            height:auto;
        }
        #slider{
            width:800px;
            height:auto;
            margin:20px auto;
            margin-top:30px;
            
          
           
            border:10px solid white;
            box-shadow: 0px 0px 5px 2px  rgb(26, 11, 112);
        }
        .js{
           
            border:none;
            background:rgb(16, 201, 161);
            font-size:30px;
            color:white;
            position:absolute;
            top:45%;
            cursor: pointer;
        }
        .next{
            border-radius:10px 0px 0px 10px;
            margin-left: 740px;
            padding:20px;
        }
        .prew{
            border-radius:0px 10px 10px 0px;
            padding:22px;
        }
        .heading{
            width:600px;
            margin-left:35%;;
            padding-top:0px;
            font-size:50px;
            font-family:Montserrat;
            color:rgb(160, 301, 161);
        }
        .links{
            display:flex;
            margin-left:35%;
            flex-direction:column;
        }
        .links button{
            width:150px;
            height:40px;
            font-weight:bold;
            margin-left:85px;
            background:rgb(204,238,255);
            border-radius:10px;
            border:2px solid black;
            font-size:18px;
            font-family:Montserrat;
            cursor:pointer;
            transition: ease-in-out;
        }
        .links button:hover{
            background:rgb(128,191,255);
        }
        .links p{
            color:rgb(160, 301, 161);
            font-family:Montserrat;
        }
    </style>
</head>

<body>

    <h1 class="heading">Ready For The Clouds<h1>
    <div id="slider">
        <div id="box">
            <img src="a.jpg">
        </div>
        <button class="prew js" onclick="prewImage()">-</button>
        <button class="next js" onclick="nextImage()">+</button>
    </div>
    
        <div class="links">
            <div>
            <p>The Clouds are waiting... SignUp Now!</p>
           </div>
           <div>
            <a href="../index.php"><button >Home</button></a>
            <a href="../signup.php"><button >SignUp</button></a>
            
           </div>
        </div>
      
        
        
    
   
    <script type="text/javascript">

        var slider_content=document.getElementById('box');
        var image=['a','b','c','e','g','h','i','j','k','l','m','n','p','q','s','t','u','v','w','x','y','z'];
        var i=image.length;

        function nextImage(){
            if(i<image.length){
                i=i+1;
            }else{
                i=1;
            }

            slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
        }

        
        function prewImage(){
            if(i<image.length+1 && i>1){
                i=i-1;
            }else{
                i=image.length;
            }

            slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
        }

    </script>




</body>
</html>