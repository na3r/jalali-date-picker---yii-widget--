<?php
/*
 * @author Naser Kholghi <kholghi67@gmail.com>
 * 
 * usage
 * <?php  
 * echo CHtml::textField('datepicker');
 * $this->widget('application.widgets.JalaliDatePicker.JalaliDatePicker',array('textField'=>'datepicker',	
 *	'options'=>array(
 *		'changeMonth'=>'true',
 *		'changeYear'=>'true',
 *		'showButtonPanel'=>'true',
 *	)
 * ));?>
 */

class JalaliDatePicker extends CWidget
{
	/*
	 * model instance to use in CActiveForm
	 */
	public  $model;
	/*
	 * textFiled name
	 */
	public  $textField;
	public  $id;
	/*
	 * options of datePicker
	 * 
	 */
	public  $options = array();
	
	public function run()
	{
		$this->id = (is_object($this->model)) ? get_class($this->model).'_'.$this->textField : $this->textField;
		$url = $this->publishAssets();
		/*
		 * register css files
		 */
		Yii::app()->clientScript->registerCssFile($url.'/styles/ui.core.css');
		Yii::app()->clientScript->registerCssFile($url.'/styles/ui.datepicker.css');
		Yii::app()->clientScript->registerCssFile($url.'/styles/ui.theme.css');
		/*
		 * register javascript files
		 */
		Yii::app()->clientScript->registerScriptFile($url.'/scripts/jquery.ui.core.js');
		Yii::app()->clientScript->registerScriptFile($url.'/scripts/jquery.ui.datepicker-cc.js');
		Yii::app()->clientScript->registerScriptFile($url.'/scripts/calendar.js');
		Yii::app()->clientScript->registerScriptFile($url.'/scripts/jquery.ui.datepicker-cc-ar.js');
		Yii::app()->clientScript->registerScriptFile($url.'/scripts/jquery.ui.datepicker-cc-fa.js');
		
		$this->render('calendar');
	}
	
	private function publishAssets()
	{
		$path = Yii::getPathOfAlias('application.widgets.JalaliDatePicker.assets');
		return  Yii::app()->assetManager->publish($path);
	}
}