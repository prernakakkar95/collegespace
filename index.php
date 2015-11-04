<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<head>
<title>COLLEGESPACE||TASK1</title>

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/main.css">
   
	<!-- FONT ICONS -->
    <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/icomoon.css">

	
</head>
<body>
<!--  written nsit with collegespace -->
	<div class="CS-cover">
	

<img src="./assets/images/cs.jpg" height=188px width="100%"/>

<div class="b">
<input type="button" id="btn1" value="login student" />
</div>
<div class="c">
<input type="button" id="btn1" value="login faculty " />
</div>
<input type="textbox" placeholder="SEARCH" id="txt1" width="35px" />
<input type="button" id="btn2" value="go" />



   
<ul id="links">
<li id="fb"><a href="https://www.facebook.com/collegespace/" target="_blank"><i class="fa fa-facebook-official" id="f1"></i></a></li>
<li id="twitter"><a href="https://twitter.com/college_space" target="_blank"><i class="fa fa-twitter-square" id="t1"></i></a></li>
<li id="google"><a href="https://plus.google.com/communities/118256355148042817165" target="_blank"><i class="fa fa-google-plus-square" id="g1"></i></li>
</ul> 
	<!--div class="container">
		<!--Add image in main.css>	
		</div>
	</div-->

	<!--nav-->
	<nav class="navbar navbar-inverse">
   		<div class="container-fluid">
   			 <div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand" href="#">College Space</a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav ">
        			<li class="active"><a href="#">HOME</a></li>
					<li><a href="#">OUR FACULTY</a></li>
					<li><a href="#">STUDENT RESOURCES</a></li>
					<li><a href="#">OTHER RESOURCES</a></li>
					<li><a href="#contact">CONTACT NSIT</a></li>
					<li><a href="#">THE CS TEAM</a></li>
        		</ul>   
    		</div>
  		</div>
	</nav>
  

	<!-- carousel -images of college-->         
	<div class="Roller">
		<div class="container">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    	<ol class="carousel-indicators">
      		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      		<li data-target="#myCarousel" data-slide-to="1"></li>
      		<li data-target="#myCarousel" data-slide-to="2"></li>
      		<li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
    	</ol>

    <!-- Wrapper for slides -->
    	<div class="carousel-inner" role="listbox" style="margin:auto;">
      		<div class="item active">
        		<img src="./assets/images/NSIT.jpg">

      		</div>

      		<div class="item">
        		<img src="./assets/images/32.jpg">
      		</div>
    
      		<div class="item">
        			<img src="./assets/images/1432670973CampusPic2.jpg">  
      		</div>

      		<div class="item">
        		<img src="./assets/images/Netaji_Subhas_Institute_of_Technology_(NSIT)_-_Admin_Block.jpg">
      		</div>

          <div class="item">
              <img src="./assets/images/2.jpg">    
          </div>

          <div class="item" >
              <img src="./assets/images/1406793695image003.jpg">    
          </div>

          <!-- Left and right controls -->
          <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>-->
    	</div>
  	</div>
		</div>
	</div>
	<!-- in page/new tab sections-->
<section>
<!--societies-->

<div>
</div>
<!-- buzz-->
<div>
</div>
<!--notices-->
<div>
</div>
</section>
	<section style="width:400px;">
	 <form id="contact">

                                <!-- Contact Form Headline -->
                                <p><strong>Contact form:</strong></p>

                                <!-- Contact Form Field -->
                                <div class="form-group">
                                    <input id="contact-name" type="text" name="name" class="form-control placeholder form-cus" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input id="contact-email" type="text" name="email" class="form-control placeholder form-cus" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea id="contact-message" name="message" class="form-control placeholder form-cus" placeholder="Message" rows="5"></textarea>
                                </div>

                               
                                <div class="form-group">
                                    <button class="btn btn-1 btn-top">Submit</button>
                                </div>

                            </form>
	</section>

  <div class="contact">
    <button type="button" class="btn btn-default btn-lg" id="myBtn">CONTACT US</button>
  </div>

	<!--Footer-->
	<div class="Footer">
		<div class="container">
		
    <!--Links to Social Platforms-->
    <div id="outer">
   <div class="inner"><a href="https://www.facebook.com/collegespace/" target="_blank" class="btn btn-block btn-social-icon btn-facebook" style="background-color:#3B5998 ;width:50px">
    <i class="fa fa-facebook fa-2x" ></i><a></div>

    <div class="inner"><a href="https://twitter.com/college_space" target="_blank" class="btn btn-block btn-social-icon btn-twitter" style="background-color:#55ACEE ;width:50px">
    <i class="fa fa-twitter fa-2x" ></i><a></div>

    <div class="inner"><a href="https://www.linkedin.com/company/collegespace" target="_blank" class="btn btn-block btn-social-icon btn-linkedin" style="background-color:#007BB6 ;width:50px">
    <i class="fa fa-linkedin fa-2x" ></i><a></div>
  </div>

  
			<p> © 2015 CollegeSpace. All rights reserved</p>
	

		</div>
	</div>
  
    <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span></span>CONTACT US</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
                <input id="contact-name" type="text" name="name" class="form-control placeholder form-cus" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input id="contact-email" type="text" name="email" class="form-control placeholder form-cus" placeholder="Email Address">
            </div>
            <div class="form-group">
                <textarea id="contact-message" name="message" class="form-control placeholder form-cus" placeholder="Message" rows="5"></textarea>
                </div>
            <button type="submit" class="btn btn-success btn-block" style="background-color:#202020;border: 1px solid #202020;"><span class="glyphicon glyphicon-envelope"></span>SUBMIT</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>

	<!--js-->
	  <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/smoothscroll.js"></script>
    <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
</body>
</html>
