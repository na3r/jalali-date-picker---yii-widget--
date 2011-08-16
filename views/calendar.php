<?php
if(empty($this->options)) {
	Yii::app()->clientScript->registerScript('jalaliDatePicker'.$this->id,"
		$('#". $this->id ."').datepicker();
	");
}else {
	Yii::app()->clientScript->registerScript('jalaliDatePicker'.$this->id,"
		$('#". $this->id ."').datepicker(". CJavaScript::encode($this->options) .");
	");
} 

?>