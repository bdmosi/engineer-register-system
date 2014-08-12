<?php
/* @var $this PersoninfoController */
/* @var $model Personinfo */
?>

<?php
$this->breadcrumbs=array(
	'Personinfos'=>array('index'),
	$model->ref_no,
);

$this->menu=array(
	//array('label'=>'List Personinfo', 'url'=>array('index')),
       // array('label'=>'view Personinfo', 'url'=>array('view', 'id'=>$model->ref_no)),
	//array('label'=>'Create Personinfo', 'url'=>array('create')),
	array('label'=>'Update Personinfo', 'url'=>array('update', 'id'=>$model->ref_no)),
	//array('label'=>'Delete Personinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ref_no),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Personinfo', 'url'=>array('admin', 'id'=>$model->ref_no)),
);
?>

<h1>View Personinfo <?php //echo $model->ref_no; ?></h1>
<div id="profile" style="width:500px;">
<?php
     if(isset($model->photo))
     echo TbHtml::imagePolaroid(Yii::app()->request->baseUrl."/userfiles/profile_photos/{$model->photo}", 'Profile photo',array('style'=>'width:120px;height:120px'));
     else
     echo TbHtml::imagePolaroid(Yii::app()->request->baseUrl."/userfiles/profile_photos/placeholder.png", 'Profile photo',array('style'=>'width:120px;height:120px'));  
?>

<?php
     echo TbHtml::link('Edit',$this->createUrl('/Personinfo/update',
             array('id'=>$model->ref_no)),
             array('class'=>'btn btn-primary'));
?>
        
<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'ref_no',
		'surname',
		'fname',
		'sname',
		'dob',
		'place_birth',
		'nationality',
		'house_tel',
		'office_tel',
		'mobile',
                //'academics',
		//'sex_id',
                array(
                    'name'=>'sex_id',
                    'value'=>$model->sex->description
                ),
		//'marital_status_id',
                array(
                    'name'=>'marital_status_id',
                    'value'=> $model->maritalStatus->description
                ),
                        //'erb_id',
                array(
                    'name'=>'erb_id',
                    'value'=> $model->erb->description
                ),
        
//                 array(
//                    'name'=>'personinfo_ref_no',
//                    'value'=>$model->academics->description
//                      ),

        
	),
    
)); 

?>

<?php echo TbHtml::pageHeader('', 'Employment', array())?>
    <?php
      echo TbHtml::link('Add New',$this->createUrl('/employment/create',
             array('id'=>$model->ref_no)),
             array(
                 'class'=>'btn btn-primary',
                 'onclick'=>'openEmpForm();return false;'
                 )
             );
    ?>
    <?php
     //echo TbHtml::link('Edit',$this->createUrl('/Employment/update',array('id'=>$model->ref_no)),array('class'=>'btn btn-primary'));
?>
    
    <script type="text/javascript">
        function openEmpForm(){
            $.get("<?php echo $this->createUrl('/employment/create',array('ref_no'=>$model->ref_no));?>",null,
            
                function(response,status){//anonymous function
                    $("#emp-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="emp-form"></div>
<?php 

foreach($model->employments as $employment){
    //echo $employment->occupation."<br />";
    
    $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$employment,
    'attributes'=>array(
		
                array(
                    'name'=>'occupation',
                    'value'=>$employment->occupation
                ),
		//'marital_status_id',
                array(
                    'name'=>'employer',
                    'value'=> $employment->employer
                ),
                        //'erb_id',
                array(
                    'name'=>'position',
                    'value'=> $employment->position
                ),
                array(
                    'name'=>'location',
                    'value'=> $employment->location
                ),

        
	),
    
)); 
  ?>
    <?php
         echo TbHtml::link('Edit',$this->createUrl('/Employment/update',
                 array('id'=>$employment->id)),
                 array('class'=>'btn btn-primary',
                       'onclick'=>'openEmplForm();return false;'
                     )
                 );
                              
}

?>
        <script type="text/javascript">
        function openEmplForm(){
            $.get("<?php echo $this->createUrl('/employment/update',array('id'=>$employment->id));?>",null,
            
                function(response,status){//anonymous function
                    $("#empl-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="empl-form"></div>
    
    <?php echo TbHtml::pageHeader('', 'Academic', array())?>
    <?php
      echo TbHtml::link('Add New',$this->createUrl('/academic/create',
             array('id'=>$model->ref_no)),
             array(
                 'class'=>'btn btn-primary',
                 'onclick'=>'openAcaForm();return false;'
                 )
             );
    ?>
    
    <script type="text/javascript">
        function openAcaForm(){
            $.get("<?php echo $this->createUrl('/academic/create',array('ref_no'=>$model->ref_no));?>",null,
            
                function(response,status){//anonymous function
                    $("#aca-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="aca-form"></div>
<?php 

foreach($model->academics as $academic){
    //echo $employment->occupation."<br />";
    
    $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$academic,
    'attributes'=>array(
		
                array(
                    'name'=>'university_name',
                    'value'=>$academic->university_name
                ),
                array(
                    'name'=>'academic_type_id',
                    'value'=> $academic->academicType->description
                ),

        
	),
    
)); 
    ?>

<?php
         echo TbHtml::link('Edit',$this->createUrl('/Academic/update',
                 array('id'=>$academic->id)),
                 array('class'=>'btn btn-primary',
                       'onclick'=>'openAcacForm();return false;'
                     )
                 );
                              
}

?>
        <script type="text/javascript">
        function openAcacForm(){
            $.get("<?php echo $this->createUrl('/academic/update',array('id'=>$academic->id));?>",null,
            
                function(response,status){//anonymous function
                    $("#acac-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="acac-form"></div>
    


    
    <?php echo TbHtml::pageHeader('', 'Recomendation', array())?>
    <?php
      echo TbHtml::link('Add New',$this->createUrl('/recomendation/create',
             array('id'=>$model->ref_no)),
             array(
                 'class'=>'btn btn-primary',
                 'onclick'=>'openRecForm();return false;'
                 )
             );
    ?>
    
    <script type="text/javascript">
        function openRecForm(){
            $.get("<?php echo $this->createUrl('/recomendation/create',array('ref_no'=>$model->ref_no));?>",null,
            
                function(response,status){//anonymous function
                    $("#rec-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="rec-form"></div>
<?php 

foreach($model->recomendations as $recomendation){
    //echo $employment->occupation."<br />";
    
    $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$recomendation,
    'attributes'=>array(
		
                array(
                    'name'=>'referee_name',
                    'value'=>$recomendation->referee_name
                ),
                array(
                    'name'=>'referee_email',
                    'value'=>$recomendation->referee_email
                ),
                array(
                    'name'=>'address',
                    'value'=>$recomendation->address
                ),
                      
	),
    
)); 

}

?>
    
    <?php echo TbHtml::pageHeader('', 'Experience', array())?>
    <?php
      echo TbHtml::link('Add New',$this->createUrl('/experience/create',
             array('id'=>$model->ref_no)),
             array(
                 'class'=>'btn btn-primary',
                 'onclick'=>'openExpForm();return false;'
                 )
             );
    ?>
    
    <script type="text/javascript">
        function openExpForm(){
            $.get("<?php echo $this->createUrl('/experience/create',array('ref_no'=>$model->ref_no));?>",null,
            
                function(response,status){//anonymous function
                    $("#exp-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="exp-form"></div>
<?php 

foreach($model->experiences as $experience){
    
    $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$employment,
    'attributes'=>array(
		
                array(
                    'name'=>'expertize',
                    'value'=>$experience->expertize
                ),
	
               array(
                    'name'=>'experience_years',
                    'value'=>$experience->experience_years
                ),
                        
                array(
                    'name'=>'experience_country',
                    'value'=>$experience->experience_country
                ),
                       
	),
    
)); 
?>
    <?php
         echo TbHtml::link('Edit',$this->createUrl('/Experience/update',
                 array('id'=>$experience->id)),
                 array('class'=>'btn btn-primary',
                       'onclick'=>'openExplForm();return false;'
                     )
                 );
                              
}

?>
        
    <?php echo TbHtml::pageHeader('', 'Membership', array())?>
    <?php
      echo TbHtml::link('Add New',$this->createUrl('/personMembership/create',
             array('id'=>$model->ref_no)),
             array(
                 'class'=>'btn btn-primary',
                 'onclick'=>'openMembForm();return false;'
                 )
             );
    ?>
    
    <script type="text/javascript">
        function openMembForm(){
            $.get("<?php echo $this->createUrl('/personMembership/create',array('ref_no'=>$model->ref_no));?>",null,
            
                function(response,status){//anonymous function
                    $("#memb-form").html(response);
                }//callback
                        
            );//get
            
        }
    </script> 

    <div id="memb-form"></div>
<?php 

foreach($model->personMemberships as $personMembership){
    
    $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$personMembership,
    'attributes'=>array(
		
                array(
                    'name'=>'membership_id',
                    'value'=>$personMembership->membership->description
                ),
               
	),
    
)); 
    
     echo TbHtml::link('Edit',$this->createUrl('/personMembership/update',
             array('id'=>$model->ref_no)),
             array('class'=>'btn btn-primary'));
   

}

?>
    
   </div>
        