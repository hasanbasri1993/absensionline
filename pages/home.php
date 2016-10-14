<? include '../include/pala.php' ;


 $v_cat = (isset($_REQUEST['cat'])&& $_REQUEST['cat'] !=NULL)?$_REQUEST['cat']:'';

 $v_page = (isset($_REQUEST['page'])&& $_REQUEST['page'] !=NULL)?$_REQUEST['page']:'';

   if(file_exists($v_cat."/".$v_page.".php"))

   {

     include($v_cat."/".$v_page.".php");

   }else{

     include("dasboard.php");

   }
 include '../include/suku.php' ;?>
