<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0031)http://demo.jibas.net/akademik/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>
JIBAS Akademik
</title>
<link href="http://demo.jibas.net/akademik/images/jibas.ico" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" language="javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="./js/footer.js"></script>
<script language="JavaScript" src="./js/resizing_background.js"></script>
<link rel="stylesheet" href="./css/bgstretcher.css">
<script language="JavaScript">
function cek_form() 
{
	var user,pass;
	user = document.form.username.value;
	pass = document.form.password.value;
	if(user.length == 0 || pass.length == 0) 
	{
		alert("Anda harus mengisi username dan password sebelum masuk ke dalam sistem!");
		document.form.username.focus();
		return false;
	}
	return true;
}


function alertSize() {
  var WinHeight = 0;
  var WinWidth = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    WinHeight = window.innerHeight;
	WinWidth = window.innerWidth;
  } else if( document.documentElement &&
      ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    WinHeight = document.documentElement.clientHeight;
	WinWidth = document.documentElement.clientWidth;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    WinHeight = document.body.clientHeight;
	WinWidth = document.body.clientWidth;
  }
  document.getElementById('Main').style.left = (parseInt(WinWidth)/2-200)+"px";
  document.getElementById('Main').style.top = (parseInt(WinHeight)/2-80)+"px";

}

function InputHover(txt,id,state){
	var x = document.getElementById(id).value;
	if (state=='1'){
		if (x==txt){
			document.getElementById(id).value='';
			document.getElementById(id).style.color='#000';
		} else {
			document.getElementById(id).style.color='#000';			
		}
	} else {
		if (x==txt || x==''){
			document.getElementById(id).style.color='#636363';
			document.getElementById(id).value=txt;
		} else {
			document.getElementById(id).style.color='#000';
		}
	}
}

function ChgInputPass(s,d,status){
	var Vs = document.getElementById(s);
	var Vd = document.getElementById(d);
	if (status=='1')
	{
		Vs.style.display='none';
		Vd.style.display='block';
		document.getElementById(d).focus();
	} else {
		if (Vd.value.length==0){
			Vs.style.display='block';
			Vd.style.display='none';
		} else {
			Vs.style.display='none';
			Vd.style.display='block';
		}
	}
}

// $(document).ready(function () {
//     $(document).bgStretcher({
//         images: ['../images/background07.jpg'], imageWidth: 1680, imageHeight: 1050
//     });
// });
</script>
<style type="text/css">
#Main {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	top:50px;
	left: 50px;
}
#Footer {
	position:fixed;
	bottom:20px;
	right:20px;
}
#Partner {
	position:fixed;
	bottom:20px;
	left:20px;
}
</style>
</head>
<body onload="alertSize(); document.getElementById(&#39;username&#39;).focus()" onresize="alertSize()" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="padding: 0px; margin: 0px;">
<div style="position:relative; z-index:2;">
	
<form method="post" name="form" id="form" action="cek-login.php" onsubmit="return cek_form()">
<table width="100%" border="0">
  <tbody><tr>
    <td width="100%">
    <div id="Main" align="center" style="width: 511px; height: 234px; left: 483px; top: 212px;">
        <table id="Table_01" width="510" height="206" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td rowspan="4" valign="top"><img src="./index_files/imfront_akademik.png"></td>
                <td height="70" valign="bottom" align="left">
				<font style="font-family:helvetica; font-size:16px; color:#fff; font-weight:bold;">
					SISTEM INFORMASI <font style="color:#000">AKADEMIK</font>
				</font>
				</td>
            </tr>
            <tr>
                <td width="363" height="24" valign="top" align="left">
					
                <table border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td style="padding-right:4px"><input type="text" name="username" id="username" class="InputTxt" onfocus="InputHover(&#39;Username&#39;,&#39;username&#39;,&#39;1&#39;)"  value="jibas"></td>

                    <td style="padding-right:4px">
                    <input name="password" id="passwords" style="color: rgb(0, 0, 0); display: block; width: 80px; border: 1px solid rgb(102, 102, 102);" value="jibas" type="password"></td>

                    <td style="padding-right:4px"><input type="submit" style=" background-color:#c9c9c9;font-weight:bold; border:#666666 1px solid;" value="Login"></td>

                    <td><a title="Kembali ke Menu Utama" href="#" style="color:#2fcced; font-weight:bold; font-family:Arial; font-size:12px; text-decoration:underline">Menu Utama</a></td>
                  </tr>
                </tbody></table>
				
                </td>
            </tr>
            <tr>
                <td width="363" height="18">&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </tbody></table>
    </div> <!-- Main -->
	<div id="Partner">
        </div>    
    <div id="Footer">
    <div id="dvCopy" style="color:#ddd; z-index:5; width:310px; font-size:10px; font-family:Tahoma; background-image:url(../images/bgdiv_black.png)">

</div>    </div>    
    </td>
  </tr>
</tbody></table>
</form>

</div>

<div id="bgstretcher" class="bgstretcher" style="width: 1366px; height: 584px;"><ul><li class="bgs-current" style="display: list-item;"><img src="./index_files/background07.jpg" alt="" style="width: 1366px; height: 584px;"></li></ul></div></body></html>