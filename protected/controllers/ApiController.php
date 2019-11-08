<?php

class ApiController extends Controller
{
	public function actionResponse()
	{
		$this->render('index', array('refPayco'=> Yii::app()->request->getQuery('ref_payco') ) );
	}
}