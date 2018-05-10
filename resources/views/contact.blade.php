
@extends('layout')

@section('content')
<div class="container  top80">
<div class="col-md-6"> 
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h2 class="" style="margin-bottom: 25px; text-align: center;">Thông tin khách hàng</h2>
                    <p class="title-posts hidden">1</p>
                    <p class="type-posts hidden">contact</p> 
    				<div class="form-group">
						<input type="text" class="form-control" id="username-customer" name="name" placeholder="Họ và Tên" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phone-customer" name="phone" placeholder="Số điện thoại" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Nội dung" maxlength="140" rows="7"></textarea>                  
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary submit-contact btn-customer">Gửi</button>
        </form>
    </div>
</div>
<div class="col-md-6 text-center top30">
<h2 class="" style="margin-bottom: 25px; text-align: center;">Liên hệ với chúng tôi</h2>
{!! 
    $info->info
!!}

<h2 class="top30" style="margin-bottom: 25px; text-align: center;"> </h2>

                    <ul class="social-network social-circle ">
                        <li><a href="{{$info->facebook}}" class="icoFacebook" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="{{$info->twitter}}" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$info->gmail}}" class="icoGoogle" title="Google +"><i class="fa fa-google"></i></a></li>
                    </ul>				
                    </div>			
</div>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.577550493494!2d106.68742331532926!3d10.767004992327976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f17c212ee35%3A0xa62a5ef08d4db528!2zMzYzIFBo4bqhbSBOZ8WpIEzDo28sIFF14bqtbiAxLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1523002981347" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<br>

@endsection