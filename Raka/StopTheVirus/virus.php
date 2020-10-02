<?php
require('flag.php');

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    flag();
}else{  
    echo 'Message From The Virus:<br><br>';
    echo "KipWSVJVUy0wMDEqKgpU<br>
    SElTIElTIEJBRCBWSVJVUwoqKk<br>
    1FU1NBR0UqKgpZb3UgY2FuJ3Qg<br>
    cHV0IG1lIGFueXdoZXJlLCBnZX<br>
    QgbWUgb3IgcG9zdCBtZSwgeW91<br>
    IGhhdmUgdG8gZGVsZXRlIG1lIQ<br>
    oqKk1FU1NBR0UqKg==";
    echo '<br><br> The Flag is not here, try another method';
}
?>