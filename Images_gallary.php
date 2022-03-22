<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>.::Images-Gallary::.</title>

	<style type="text/css">
		h1{
			text-align: center;
            background: brown;
            color: wheat;
            border-radius: 50px;
             border: 5px solid yellow;
		}
        
         *{
         	box-sizing: border-box;
         }
        .row
        { 
          clear: both;
          display: flex;
        }
        .col-5{
          width: 20%;
          text-align: center;
          margin: 5px;	
        }
        [class|='col-']
        {
        	float: left;
        	padding: 5px;
        }
        .img1{
        border: 5px solid yellow;
        width: 100%;
        height: 200px;
        border-radius: 30px;

  
  
        }
        .lightbox{
        	background: skyblue;
        	height: 400px;
        	text-align: center;
        	display: none;
        }
        #lightbox_image{

        position: relative;
        width: 80%;
         border: 5px solid red;
        border-radius: 40px;

        }
        .close_btn{position:absolute;
        	z-index: 999;}
	</style>
</head>
<body bgcolor="#c8d6e5">
<h1>Image Gallery With Lightbox</h1>
<div class="row" class="row_images">
	<div class="col-5"><img src="images/img1.jpg"onclick="open_lightbox(this);" class="img1"></div>
	<div class="col-5"><img src="images/img2.jpg"onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img3.jpg"onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img4.jpg"onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img5.jpg"onclick="open_lightbox(this);"class="img1"></div>
</div>

<div class="row" class="row_images">
	<div class="col-5"><img src="images/img6.jpg"onclick="open_lightbox(this)"class="img1"></div>
	<div class="col-5"><img src="images/img7.jpg"onclick="open_lightbox(this)"class="img1"></div>
	<div class="col-5"><img src="images/img8.jpg" onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img9.jpg" onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img10.jpg"onclick="open_lightbox(this);"class="img1"></div>
</div>

<div class="row" class="row_images">
	<div class="col-5"><img src="images/img11.jpg" onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img12.jpg"onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img13.jpg"onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img14.jpg"onclick="open_lightbox(this);"class="img1"></div>
	<div class="col-5"><img src="images/img15.jpg"onclick="open_lightbox(this);"class="img1"></div>
</div>
<div class="lightbox">
	<button class="close_btn" onclick="close_lightbox()">X</button>
	<img src="images/img15.jpg" style="height: 400px;" id="lightbox_image">
</div>



<script type="text/javascript">
	function open_lightbox(obj){
      var lightbox_image=document.getElementById("lightbox_image");     
      var row_images=document.querySelectorAll(".row_images");	     
      lightbox_image.src=obj.src;
	    
	    
	    for(var i=0; i<row_images.length;i++){	
   	  row_images[i].style.display="none";

    }
	    var light_box=document.querySelector(".lightbox");
      light_box.style.display="block";
	    
      
	   }

	function close_lightbox(){
     var row_images=document.querySelectorAll(".row_images");
     var light_box=document.querySelector(".lightbox");
	   light_box.style.display="none";	
	   for(var i=0; i<row_images.length;i++){
		 row_images[i].style.display="flex";

} 
	}
	
</script>
</body>


</html>