<?php
if(empty($this->options)){
	Yii::app()->clientScript->registerScript('jalaliDatePicker',"
	$('#". $this->id ."').datepicker();
	");
}else {
	$options = "";
	foreach ($this->options as $key=>$value)
	{
		$options .= $key . ":'". $value ."',";
	}
	Yii::app()->clientScript->registerScript('jalaliDatePicker',"
	$('#". $this->id ."').datepicker({". $options ."});
	");
} 

?>