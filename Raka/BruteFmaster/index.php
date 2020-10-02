<?php
error_reporting(E_ALL);
if(md5($_GET['password'])=='9283a03246ef2dacdc21a9b137817ec1'){
echo "!FLAG{I-Think-Its-a-Brut3F0rc3}";
}else{
echo "is it a Wrong Password? or you missing your parameter? ex: 'index.php?password='";
}
?>
<!-- sebelumnya aku membuat backup untuk passwordku pada file password.txt, 
namun karena aku file tersebut berisi banyak password aku harus menebaknya satu per satu -->