
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#f6f6f6" >
<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;margin-top: 30px;
    margin-bottom: 100px;">
	<tr>
		<td align="center" bgcolor="#ffffff">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center">
					<a href="{{url('/')}}" target="_blank" style="color: #596167; float:left; width:100%;padding: 25px 0px;text-align:center; font-size: 13px;">
					<font size="3" color="#596167">
					<img src="{{$site_logo}}" style="height: 55px;width: 221px;" alt="{{ucfirst(config('enum.site_title'))}}" border="0"/></font></a>
				</td>
			</tr>
			<tr>
			<td align="center" bgcolor="#fbfcfd">
				<font size="4" style="font-size: 15px;">
					<table width="90%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								Welcome to {{config('enum.site_title')}} Web Services!</strong><br/><br/>
								<strong>Account Management & Credentials.<strong><br/><br/>
							</td>
						</tr>
						<tr>
							<td>
								<div style="color: #333333; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
									Admin Panel: <br> <a href="{{$adminlink}}" style="color: #0f66dc; font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;">{{$adminlink}}</a>
                                </div>
								<div style="color: #333333; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
									Your Website: <br> <a href="{{$websitelink}}" style="color: #0f66dc; font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;">{{$websitelink}}</a><br/><br/><br/>
                                </div>
							</td>
						</tr>
						<tr>
							<td>
							    Thank you for your participation in the {{ucfirst(config('enum.site_title'))}} Web Services community.<br/><br/>
								Sincerely,<br/>
								The {{ucfirst(config('enum.site_title'))}} Team
								<div style="height: 60px; line-height: 60px; font-size: 10px;"></div>
							</td>
						</tr>
					</table>
				</font>
			</td>
			</tr>
			<tr>
				<td class="iage_footer" align="center" bgcolor="#ffffff">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
						<td align="center" style="padding:20px;flaot:left;width:100%; text-align:center;">
							<font size="3" color="#96a5b5" style="font-size: 13px;">
								<span style="font-size: 13px; color: #96a5b5;">{{date('Y')}} © {{ucfirst(config('enum.site_title'))}}. ALL Rights Reserved.</span>
							</font>				
						</td>
						</tr>			
					</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
			