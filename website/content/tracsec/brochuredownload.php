<?php

 echo "yasmine";
?>

<?php

header('Content-disposition:attachment;filename=Tracsec User Manual.pdf');
header('Content-type:application/pdf');
readfile('tracsecdownloads/Tracsec_User_Manual.pdf');
?>
