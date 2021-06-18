<?php
session_start();
require("../database.php");

error_reporting(1);
?>
<link href="../css/testadd.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link href="css/subadd.css" rel="stylesheet">
<header class="main-header">
    
    <nav class="navbar fixed-top navbar-light  ">
    <div class="container-fluid">
          <img src="img/Webp.net-resizeimage.png" alt="logo">
          <a class="nav-link active text-white" aria-current="page" href="#">Acceuil</a>
        <a class="nav-link text-white" href="#">Affichage</a>
        <a class="nav-link text-white" href="#">Planning</a>
        <a class="nav-link" >
            <div class="profile" onclick="menuToggle();">
            <img src="img/compte.png" alt="compte" class="icons" /></div></a>
    </div>
        
    </nav>  
</header>
<div class="action">
        
    <div class="menu">
        <h3>Profile etudiant <br> <span>espace parametres</span></h3>
        <ul>
            <li><img src="img/user.png"><a href="#">Mon Profile</a></li>
            <li><img src="img/edit.png"><a href="#">Modifier Profile</a></li>
            <li><img src="img/envelope.png"><a href="#">Messages</a></li>
            <li><img src="img/settings.png"><a href="#">Parametres</a></li>
            <li><img src="img/log-out.png"><a href="#">Deconnexion</a></li>
        </ul>
    </div>
</div>
<script>
     function menuToggle() {
                const toggleMenu = document.querySelector('.menu');
                toggleMenu.classList.toggle('active');
            }
           function afficher(elt){
               elt.nextElementSibling.style.display="block";   }
</script>




<?php

extract($_POST);


echo "<h1 class='text-center bg-primary'>ADD SUBJECT</h1>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysqli_query($con,"select * from mst_subject where sub_name='$subname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysqli_query($con,"insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysqli_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
                  
        </script>

    <div >
        <title>Ajouter Module</title>
        <form name="form1" method="post" onSubmit="return check();">
          <table class="table table-striped">
            <tr class="tr text-white">
              <td ><div><strong> L'intitulé du module </strong></div></td>
              <td>  
              <td>
                <input class="form-control" name="subname" placeholder="enter l'intitulé" type="text" id="subname">
            <tr >
                <td ></td>
                <td>&nbsp;</td>
              <td>&nbsp; </td>
            </tr>
            <tr >
              <td ></td>
              <td>&nbsp;</td>
              <td><input class="btn text-white" type="submit" name="submit" value="Ajouter" ></td>
            </tr>
          </table>
        </form>
        <p>&nbsp; </p>
        </div>