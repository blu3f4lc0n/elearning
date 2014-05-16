<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)modul/frametop.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Untitled Document</title>
<script type="text/javascript" language="JavaScript1.2" src="./js/ajax.js"></script>
<script type="text/javascript" language="JavaScript1.2" src="./js/tools.js"></script>
<script type="text/javascript" language="JavaScript1.2">
function get_fresh(){
  document.location.reload();
}
function chating_euy(){
  newWindow('buletin/chat/chat.php','ChattingYuk',626,565,'resizable=0,scrollbars=0,status=0,toolbar=0');
}
function home(){
  document.location.reload();
  parent.framecenter.location.href="home.php";
}
function akademik(){
  sendRequestText("get_content.php", show_content, "menu=akademik");
  parent.framecenter.location.href="home.php";
}
function buletin(){
  sendRequestText("get_content.php", show_content, "menu=buletin");
  parent.framecenter.location.href="home.php";
}
function pengaturan(){
  sendRequestText("get_content.php", show_content, "menu=pengaturan");
  parent.framecenter.location.href="home.php";
}
function dotnet(){
  sendRequestText("get_content.php", show_content, "menu=dotnet");
  parent.framecenter.location.href="home.php";
}
function logout() {
    if (confirm("Anda yakin akan menutup Aplikasi Manajemen Akademik ini?"))
    window.top.location.href="logout.php";
}
function show_content(x) {
  document.getElementById("vscroll0").innerHTML = x;
}
function show_wait(areaId) {
  var x = document.getElementById("waitBox").innerHTML;
  document.getElementById(areaId).innerHTML = x;
}
function ganti() {
  var login=document.getElementById('login').value;
  var addr="pengaturan/ganti_password2.php";
  if (login=="LANDLORD" || login=="landlord"){
    alert ('Maaf, Administrator tidak dapat mengganti password !');
    parent.framecenter.location.href="center.php";
  } else {
    newWindow(addr,'GantiPasswordUser','419','200','resizeable=0,scrollbars=0,status=0,toolbar=0');
  }
}
function show_info(){
  document.getElementById('menu').style.display='none';
  document.getElementById('tentang').style.display='';
  parent.content.location.href="jibasinfo.php";
}
function hide_info(){
  document.getElementById('menu').style.display='';
  document.getElementById('tentang').style.display='none';
  parent.content.location.href="referensi.php";
}

</script>
<style type="text/css">
<!--
.style3 {font-size: 10px; font-weight:bold; line-height:10px; }
.style7 {font-size: 13px; font-weight: normal; line-height: 12px; font-family: Arial; color:#FFF; text-decoration:none }
.style9 {color: #FFFFFF; font-weight: bold; font-family: Verdana; font-size: 12px; text-decoration:none }
-->
</style>
</head>
<body style="background-color:#6a6a6a" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
<table id="Table_01" width="100%" border="0" cellpadding="0" cellspacing="0"> 
    <tbody><tr>
    <td>
      <img src="./images/Akademik2_01.png" width="25" height="13" alt=""></td>
    <td width="50%" height="13" valign="bottom" background="./images/Akademik2_02.png">
        <!--a class="style9" style="color:#FFFFFF; cursor:pointer" onClick="show_info()" >Tentang JIBAS</a-->   </td>
    <td width="50%" align="right" valign="bottom" background="./images/Akademik2_02.png">
          
        </td>
    <td background="./images/Akademik2_03.png" width="94" height="13">
      </td>
    <td>
      <img src="./images/Akademik2_04.png" width="10" height="13" alt=""></td>
    <td>
      <img src="./images/Akademik2_05.png" width="17" height="13" alt=""></td>
  </tr>
  <tr>
    <td><img src="./images/Akademik2_06.png" width="25" height="61" alt=""></td>
    <td width="100%" height="46" colspan="2" background="./images/Akademik2_07.png">
        <!-- Begin Content ================================================================================================-->
    <table border="0" cellpadding="0" cellspacing="0" id="menu">
      <tbody><tr>
        <td style="padding-right:5px" valign="top"> <a style="text-decoration:none" href="modul/referensi.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;referensioff&#39;,&#39;images/ico2/referensi2.png&#39;,1)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;referensioff&#39;,&#39;images/ico2/referensi2.png&#39;,&#39;&#39;,1)" onmouseout="MM_nbGroup(&#39;out&#39;)"><div align="center"> <img src="./images/referensi.png" alt="REFERENSI" name="referensioff" width="60" height="35" border="0" id="referensioff" onload=""><br>
            <span class="style7">SK & KD</span></div></a></td>
     
        <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/siswa_baru.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;calonsiswaoff&#39;,&#39;images/ico2/calon2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;calonsiswaoff&#39;,&#39;images/ico2/calon2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/calon.png" alt="PENERIMAAN SISWA BARU" name="calonsiswaoff" width="60" height="35" border="0" id="calonsiswaoff" onload=""><br>
          <span class="style7">Silabus</span></a>       </div></td>
    
        <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/guru.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;guruoff&#39;,&#39;images/ico2/guru2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;guruoff&#39;,&#39;images/ico2/guru2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/guru.png" alt="GURU &amp; PELAJARAN" name="guruoff" width="60" height="35" border="0" id="guruoff" onload=""><br>
            <span class="style7">RPP</span></a></div></td>
     
        <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/jadwal.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;jadwaloff&#39;,&#3RP9;images/ico2/jadwal2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;jadwaloff&#39;,&#39;images/ico2/jadwal2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/jadwal.png" alt="JADWAL" name="jadwaloff" width="60" height="35" border="0" id="jadwaloff" onload=""><br>
            <span class="style7">KKM</span></a></div></td>
    
        <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/siswa.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;siswaoff&#39;,&#39;images/ico2/siswa2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;siswaoff&#39;,&#39;images/ico2/siswa2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/siswa.png" alt="KESISWAAN" name="siswaoff" width="60" height="35" border="0" id="siswaoff" onload=""><br>
            <span class="style7">Materi</span></a></div></td>
    
        <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/presensi.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;presensioff&#39;,&#39;images/ico2/presensi2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;presensioff&#39;,&#39;images/ico2/presensi2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/presensi.png" alt="PRESENSI" name="presensioff" width="60" height="35" border="0" id="presensioff" onload=""><br>
            <span class="style7">Penilaian</span></a></div></td>

           <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/usermenu.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;user&#39;,&#39;images/ico2/pengaturan2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;user&#39;,&#39;images/ico2/pengaturan2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/pengaturan.png" alt="Manajemen User" name="user" width="60" height="35" border="0" onload=""><br>
              <span class="style7">Penugasan</span></a></div></td>
    
        <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="modul/penilaian.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;penilaianoff&#39;,&#39;images/ico2/penilaian2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;penilaianoff&#39;,&#39;images/ico2/penilaian2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/penilaian.png" alt="" name="penilaianoff" width="60" height="35" border="0" onload=""><br>
          
            <span class="style7">Ujian Harian</span></a></div></td>
        
       <td style="padding-right:5px" valign="top">  <div align="center"><a style="text-decoration:none" href="modul/kelulusan.php" target="content" class="style3" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;kenaikan&#39;,&#39;images/ico2/kenaikan2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;kenaikan&#39;,&#39;images/ico2/kenaikan2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/kenaikan.png" alt="" name="kenaikan" width="60" height="35" border="0" onload=""><br>
         <span class="style7">Ujian Tengah Semester</span></a></div></td>
            
               <td style="padding-right:5px" valign="top"> <div align="center"> 
        <a style="text-decoration:none" href="modul/mutasi.php" target="content" onclick="MM_nbGroup(&#39;down&#39;,&#39;group1&#39;,&#39;mutasioff&#39;,&#39;images/ico2/mutasi2.png&#39;,0)" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;mutasioff&#39;,&#39;images/ico2/mutasi2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/mutasi.png" alt="MUTASI" name="mutasioff" width="60" height="35" border="0" id="mutasioff" onload=""><br>
                <span class="style7">Ujian Akhir Semester</span></a></div></td>       
                         
                <td style="padding-right:5px" valign="top"> <div align="center"> <a style="text-decoration:none" href="javascript:logout();" onmouseover="MM_nbGroup(&#39;over&#39;,&#39;logout&#39;,&#39;images/ico2/logout2.png&#39;,&#39;&#39;,0)" onmouseout="MM_nbGroup(&#39;out&#39;)"><img src="./images/logout.png" alt="Logout" name="logout" width="60" height="35" border="0" onload=""><br>
              <span class="style7">Keluar</span></a></div></td>
        
              </tr>
      </tbody></table>    </td>
    <td>
      <img src="./images/Akademik2_08.png" width="94" height="61" alt=""></td>
    <td>
      <img src="./images/Akademik2_09.png" width="10" height="61" alt=""></td>
    <td>
      <img src="./images/Akademik2_10.png" width="17" height="61" alt=""></td>
  </tr>
  <tr>
    <td>
      <img src="./images/Akademik2_11.png" width="25" height="13" alt=""></td>
    <td width="100%" height="13" colspan="2" background="./images/Akademik2_12.png">    </td>
    <td>
      <img src="./images/Akademik2_13.png" width="94" height="13" alt=""></td>
    <td>
      <img src="./images/Akademik2_14.png" width="10" height="13" alt=""></td>
    <td>
      <img src="./images/Akademik2_15.png" width="17" height="13" alt=""></td>
  </tr>
</tbody></table>

</body></html>
