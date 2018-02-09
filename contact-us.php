<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php';?>
    <style>
      #map {
        height: 400px;
      }
    </style>
</head>
<body>
    <header>
        <img src="img/header-bg.png">
    </header>
    <?php require 'navigation.php';?>
    
<form action="/cgi-bin/FormMail.pl" method="POST">
<input type=hidden name="recipient" value="sannalegno@tiscali.it">
<input type=hidden name="subject" value="Nuovo messaggio dal sito web">
<table border="0" cellspacing="0" cellpadding="5" align="center">
 <tr>
 <td><b> Nome e Cognome:</b></td>
 <td align="right"><input type=text name="realname"></td>
 </tr>
 <tr>
 <td><b>Email:</b></td>
 <td align="right"><input type=text name="email"></td>
 </tr>
 <tr>
 <td colspan="2"><b>Messaggio:</b></td>
 </tr>
 <tr>
 <td colspan="2"><textarea name="messaggio" cols="40" rows="5"></textarea></td>
 </tr>
 <tr>
 <td colspan="2" align="center"><input type="Submit" value="Invia"></td>
 </tr>
</table>
<input type=hidden name="required" value="email,realname,messaggio">
</form>
    
    <?php require 'footer.php';?>
    <?php require 'js.php';?>
</body>
</html>
