<?php

use Illuminate\Database\Seeder;

class MailtemplateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mailtemplate')->delete();
        
        \DB::table('mailtemplate')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject' => 'User Access Log',
                'content' => '\'
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> <!-- utf-8 works for most cases -->
<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldnt be necessary -->
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
<style type="text/css">

/* What it does: Remove spaces around the email design added by some email clients. */
/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
html,
body {
margin: 0;
padding: 0;
height: 100% !important;
width: 100% !important;
}

/* What it does: Stops email clients resizing small text. */
* {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

/* What it does: Forces Outlook.com to display emails full width. */
.ExternalClass {
width: 100%;
}  

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
}

/* What it does: Fixes webkit padding issue. */
table {
border-spacing:0 !important;
}

/* What it does: Fixes Outlook.com line height. */
.ExternalClass,
.ExternalClass * {
line-height: 100%;
}

/* What it does: Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
border-collapse: collapse;
margin: 0 auto;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
-ms-interpolation-mode:bicubic;
}

/* What it does: Overrides styles added when Yahoos auto-senses a link. */
.yshortcuts a {
border-bottom: none !important;
}

/* What it does: Overrides blue, underlined links auto-detected by iOS Mail. */
/* More Info: https://litmus.com/blog/update-banning-blue-links-on-ios-devices */
.mobile-link--footer a {
color: #666666 !important;
}

/* What it does: Overrides styles added images. */
img {
border:0 !important;
outline:none !important;
text-decoration:none !important;
}

/* What it does: Apple Mail doesnt support max-width, so a media query constrains the email container width. */
@media  only screen and (min-width: 601px) {
.email-container {
width: 600px !important;
}
}

/* What it does: Apple Mail doesnt support max-width, so a media query constrains the email container width. */
@media  only screen and (max-width: 600px) {
.email-container {
width: 100% !important;
max-width: none !important;
}
}

</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#222222" style="margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;">
<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#222222" style="border-collapse:collapse;"><tr><td>

<!-- Visually Hidden Preheader Text : BEGIN -->
<div style="display:none;font-size:1px;color:#222222;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide: all;">
User from : {{ip}} -> {{os}} -> {{browser}}-{{version}} on {{date}}	</div>
<!-- Visually Hidden Preheader Text : END -->

<!-- Outlook and Lotus Notes dont support max-width but are always on desktop, so we can enforce a wide, fixed width view. -->
<!-- Beginning of Outlook-specific wrapper : BEGIN -->
<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<![endif]-->
<!-- Beginning of Outlook-specific wrapper : END -->

<!-- Email wrapper : BEGIN -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="max-width:600px; margin:auto;" class="email-container">
<tr>
<td>

<!-- Logo + Links : BEGIN -->
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td valign="middle" style="padding:10px 0; text-align:left;" width="150">
<img src="http://www.sysaxiom.com/logo.png" alt="alt text" width="150" height="50" border="0" align="left">
</td>
<td valign="middle" style="padding:10px 0; text-align:right; line-height:1.1; font-family: sans-serif; font-size: 13px; color: #999999;">
<span>User Access Log Notification</span>
</td>
</tr>
</table>
<!-- Logo + Links : END -->

<!-- Main Email Body : BEGIN -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">


<!-- Full Width, Fluid Column : END -->

<!-- 2 x 2 grid : BEGIN -->
<tr>
<td>

</td>
</tr>
<!-- 2 x 2 grid : END -->

<!-- Data Table : BEGIN -->
<tr>
<td style="padding: 4%;">
<table cellspacing="0" cellpadding="0" border="0" width="100%" style="">
<tr>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
User Ip : 
</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
Platform : 

</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
Browser : 
</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
Version : 
</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; font-weight: bold; border-bottom: 1px solid #cccccc">
Date : 
</td>
</tr>
<tr>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
{{ip}}									</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
{{os}}									</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
{{browser}}									</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
{{version}}									</td>
<td valign="top" align="left" style="padding: 10px 0; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #333333; border-bottom: 1px solid #eeeeee">
{{date}}									</td>
</tr>


</table>

<a href="http://www.sysaxiom.com/accessLog/server" style="background: #222222; border: 15px solid #222222; color: #ffffff; font-family: sans-serif; font-size: 15px; line-height: 1; text-align: center; text-decoration: none; display: block; border-radius: 3px;">
<b>Access Full List</b>
</a>
</td>
</tr>
<!-- Data Table : END -->

</table>
<!-- Main Email Body : END -->

</td>
</tr>

<!-- Footer : BEGIN -->
<tr>
<td style="text-align:center; padding:4% 0; font-family:sans-serif; font-size:13px; line-height:1.2; color:#666666;">
You received this email because you are the admin of Sysaxiom :p.
<br><br>
Sysaxiom &bull; <span class="mobile-link--footer">India</span> &bull; <span class="mobile-link--footer">(91) 904244-5010</span>
<br><br>
<unsubscribe style="color:#666666; text-decoration:underline;">unsubscribe</unsubscribe>
</td>
</tr>
<!-- Footer : END -->

</table>
<!-- Email wrapper : END -->

<!-- End of Outlook-specific wrapper : BEGIN -->
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
<!-- End of Outlook-specific wrapper : END -->

</td></tr></table>
</body>
</html>\';
',
                'status' => 0,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
