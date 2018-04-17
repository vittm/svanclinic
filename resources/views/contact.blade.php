
@extends('layout')

@section('content')
<div class="container  top80">
<div class="col-md-6"> 
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h2 class="font-elsie" style="margin-bottom: 25px; text-align: center;">Contact Form</h2>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>                  
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary submit-contact ">Submit Form</button>
        </form>
    </div>
</div>
<div class="col-md-6 text-center top30">
<h2 class="font-elsie " style="margin-bottom: 25px; text-align: center;">Our Contact</h2>

<p> 136 Phạm Ngũ Lão Thành phố Hồ Chí Minh <p>
    <p> +84 623 12315 </p>

    <p> your@gmail.com </p>

<h2 class="font-elsie top30" style="margin-bottom: 25px; text-align: center;">Follow Us</h2>

                    <ul class="social-network social-circle ">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google"></i></a></li>
                    </ul>				
                    </div>			
</div>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.577550493494!2d106.68742331532926!3d10.767004992327976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f17c212ee35%3A0xa62a5ef08d4db528!2zMzYzIFBo4bqhbSBOZ8WpIEzDo28sIFF14bqtbiAxLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1523002981347" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<br>

@endsection