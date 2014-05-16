
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" language="JavaScript">
function get_fresh(){
  document.location.reload();
}
function BlinkText(Current){
  if (Current=='')
    Current=0;
  Current = parseInt(Current);
  var Txt = "DEMO Version";

  if (Current==(Txt.length+10)){
    Current=0;
    document.getElementById('TxtDemo').innerHTML = '';
  }
  var x   = Txt.charAt(Current);
  Current = parseInt(Current);
  setTimeout("BlinkText2('"+x+"','"+Current+"')",100);
}
function BlinkText2(x,Current){
  var y = document.getElementById('TxtDemo').innerHTML;
  document.getElementById('TxtDemo').innerHTML = y+x;
  Current = parseInt(Current);
  BlinkText(Current+1);
}
</script>
</head>

<body style="background-color:#6a6a6a" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" >
<table id="Table_01" width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td >
      <img src="images/Akademik2_19.png" width="25" height="10" alt=""></td>
    <td height="10" colspan="2" background="images/Akademik2_20.png">   </td>
  <td width="1%">
      <img src="images/Akademik2_22.png" width="10" height="10" alt=""></td>
    <td width="2%">
      <img src="images/Akademik2_23.png" width="17" height="10" alt=""></td>
  </tr>
  <tr>
    <td>
      <img src="images/Akademik2_24.png" width="25" height="31" alt=""></td>
    <td width="100%" height="31" valign="top" background="images/Akademik2_25.png">
        <span style="color:#FFFF00; font-family:Verdana; font-size:12px; padding-bottom:2px">
    Administrator JIBAS [Akademik]      </span>        </td>
        <td align="right" valign="top" background="images/Akademik2_25.png">
          <table border="0" cellspacing="0" cellpadding="0" width="150">
              <tr>
                <td align="left">
                                </td>
              </tr>
            </table>        </td>
      <td>
      <img src="images/Akademik2_27.png" width="10" height="31" alt=""></td>
    <td>
      <img src="images/Akademik2_28.png" width="17" height="31" alt=""></td>
  </tr>
</table>
</body>
</html>