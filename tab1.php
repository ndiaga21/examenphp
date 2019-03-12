<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="style2.css"/>
	<title>ndiaga</title>
</head>
<body>
	<?php $personne = array('Prenom' => 'ndiaga' ,
                              '  Nom' => 'dieng'
                                 'Profession' => 'etudiant',
                                 ); ?>
     <table>
          <tr>
              <td colspan="2"><img src="ndiaga.jpg" height="299" width="500"></td>
          </tr>
     
          <?php
          foreach ($personne as $key => $value) {

        echo " <tr>
                      <td class=\"key\">". $key."<span>:</span>
                      <td class=\"valeur\">". $value." </td>
                      </tr>"
                      ; 
                }
          ?>
     
     	
     </table>
</body>
</html>