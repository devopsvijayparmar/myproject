<li class="clearfix">
	<div class="message-data text-right">
		<span class="message-data-time">{{$message->created_at->diffForHumans()}}</span>
	</div>
	<div class="message other-message float-right"><pre class="pre">{!!$message->message!!}</pre></div>
</li>