 <?php
 
 $this->breadcrumbs = array(  
 'my profile' => array(  
 '/user/myaccount/update'  
 ),   
 'create user listing - step 1 of 4 ');
 
 echo $this->renderPartial('_form', array(    'model' => $model));
 
 ?> 