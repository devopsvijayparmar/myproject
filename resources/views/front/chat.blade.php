 @include('front.include.header')
<style>
body{
    background-color: #f4f7f6;
    margin-top:20px;
}
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.chat{
	background: #fff;
    box-shadow: 0 0 0 0 rgb(0 0 0 / 20%), 0 0 4px 0 rgb(0 0 0 / 19%);
}
.chat-app .people-list {
    width: 280px;
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 7
}

.chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
}

.people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
}

.people-list .chat-list li.active {
    background: #efefef
}

.people-list .chat-list li .name {
    font-size: 15px
}

.people-list .chat-list img {
    width: 45px;
    border-radius: 50%
}

.people-list img {
    float: left;
    border-radius: 50%
}

.people-list .about {
    float: left;
    padding-left: 8px
}

.people-list .status {
    color: #999;
    font-size: 13px
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
}

.chat .chat-history ul {
    padding: 0
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}

.chat .chat-history .message-data {
    margin-bottom: 15px
}

.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 14px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .my-message {
    background: #efefef;
    max-width: 50%;
    font-size: 14px;
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    max-width: 50%;
	font-size: 14px;
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
}

.chat .chat-message {
    padding: 20px
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
}

.online {
    color: #86c541
}

.offline {
    color: #e47297
}

.me {
    color: #1d8ecd
}

.float-right {
    float: right
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

@media only screen and (max-width: 767px) {
    .chat-app .people-list {
        height: 465px;
        width: 100%;
        overflow-x: auto;
        background: #fff;
        left: -400px;
        display: none
    }
    .chat-app .people-list.open {
        left: 0
    }
    .chat-app .chat {
        margin: 0
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto
    }
}

.pre{
	white-space: pre-wrap;font-size: 14px;font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
}
</style>
 <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!--==========================
    Contact Section
  ============================-->
<section id="contact" class="padd-section wow fadeInUp">
		<div class="container">
		<a href="{{url('/business')}}" style="color: black;" class="nav-link"><i class="fas fa-inbox"></i> Inbox</a>
            <div class="chat">
			
                <div class="chat-history">
                    <ul class="m-b-0" id="message-response">
					  @foreach($chat as $chat_data)
					    @if($chat_data->send_by == 2)
                        <li class="clearfix">
                            <div class="message-data text-right">
                                <span class="message-data-time">{{$chat_data->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="message other-message float-right"><pre class="pre">{!!$chat_data->message!!}</pre></div>
                        </li>
						@else
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time">{{$chat_data->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="message my-message"><pre class="pre">{!!$chat_data->message!!}</pre></div>                                    
                        </li>    
						@endif
						@endforeach
                    </ul>
                </div>
                <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend" style="cursor: pointer;" onclick="sendMessage();">
                            <span class="input-group-text"><i class="fa fa-send"></i></span>
                        </div>
                        <textarea type="text" id="message" class="form-control" placeholder="Enter text here..."> </textarea>                                 
                    </div>
                </div>
            </div>
			<a href="{{url('/business')}}" style="color: black;" class="nav-link"><i class="fas fa-inbox"></i> Inbox</a>
			</div>
</section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
 <script src="{{ url('/front/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/front/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ url('/front/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/front/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ url('/front/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ url('/front/lib/easing/easing.min.js') }}"></script>
  <script src="{{ url('/front/lib/modal-video/js/modal-video.js') }}"></script>
  <script src="{{ url('/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('/front/lib/wow/wow.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ url('/front/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ url('/front/js/main.js') }}"></script>
  <script src="{{ url('/admin/plugins/toastr/toastr.min.js') }}"></script>
<script>
$('#businesstab').addClass('menu-active');
$(document).ready(function() {
	$(document).scrollTop($(document).height());
});


function sendMessage(){
	
	var message = $('#message').val();
	
	$.ajax({
		async : false,
		url: "{{route('send-message')}}",
		type: "POST",
		data: {message: message, _token: "{{ csrf_token() }}"},
		success: function (response) {
			if(response == 0){
				toastr.error("Sorry, something went wrong. Please try again.");
			}else{
				$('#message-response').append(response);
			}
			$('#message').val('');
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			toastr.error("Sorry, something went wrong. Please try again.");
			//location.reload();
		}
	});
}
	
</script>