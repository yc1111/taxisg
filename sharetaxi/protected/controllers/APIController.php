<?php

class APIController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAdduser()
	{
		//uncomment
		/*
		$uid = $_POST['uid'];
		$ph = $_POST['ph'];
		*/
		echo '{"adduser": {';
		$uid='test1234'; //test
		$ph='77777777'; //test
		$command = Yii::app()->db->createCommand();
		try
		{
			$command->insert('USER', array('uid'=>$uid,'ph'=>$ph,));
			echo '"status":"ok","message":"Add user successfully"';
		}
		catch (Exception $e)
		{
			echo '"status":"failed","message":"User has been added"';
		}
		echo '}}';
	}

	public function actionAddroutebyuser()
	{
		echo '{"addroutebyuser":{';

		$rid = 3;//$_POST['rid'];
		$uid = 'test';//$_POST['uid'];
		$start = 'ntu';//$_POST['start'];
		$end = 'nus';//$_POST['end'];
		$startlat = 4.01;//$_POST['startlat'];
		$startlng = 108.02;//$_POST['startlng'];
		$endlat = 4.02;//$_POST['endlat'];
		$endlng = 109.11;//$_POST['endlng'];
		$time = '2012-12-21 23:59:59';//$_POST['time'];
		$flexible = 0;//$_POST['flexible'];
		$message='hello world';//$_POST['message'];

		$command = Yii::app()->db->createCommand();
		try
		{
			$command->insert('ROUTE', array(
				'rid'=>$rid,
				'uid'=>$uid,
				'start'=>$start,
				'end'=>$end,
				'startlat'=>$startlat,
				'endlat'=>$endlat,
				'startlng'=>$startlng,
				'endlng'=>$endlng,
				'time'=>$time,
				'message'=>$message,
				'flexible'=>$flexible,
				));
			echo '"status":"ok","message":"Add route successfully"';
		}
		catch(Exception $e)
		{
			echo '"status":"failed","message":"Route has been added"';
		}

		echo '}}';
	}

	public function actionUpdateuser()
	{
		echo '{"updateuser":{';

		$uid = 'test123';//$_POST['uid'];
		$ph = '09876543';//$_POST['ph'];
		$command = Yii::app()->db->createCommand();
		try
		{
			$command->update('USER',array(
				'ph'=>$ph,
				),'uid=:uid',array(':uid'=>$uid));
			echo '"status":"ok","message":"Update user successfully"';
		}
		catch(Exception $e)
		{
			echo '"status":"failed","message":"User not found!"';
		}

		echo '}}';
	}

	public function actionGetuserbyuid()
	{
		echo '{"getuserbyuid":{';

		$uid = 'test';//$_POST['uid'];
		$command = Yii::app()->db->createCommand();

		if($ph=$command->select('ph')->from('USER')->where('uid=:uid',array(':uid'=>$uid))->queryAll())
		{
			echo '"status":"ok","ph":"' . $ph[0]['ph'] . '"';
		}
		else
		{
			echo '"status":"failed","message":"User not found"';
		}
		
		echo '}}';
	}

	public function actionListroutebyuser()
	{
		echo '{"listroutebyuser":{';

		$uid = 'test';//$_POST['uid'];
		$command = Yii::app()->db->createCommand();
		if($route = $command->select('*')->from('ROUTE')->where('uid=:uid',array(':uid'=>$uid))->queryAll())
		{
			echo '"status":"ok"';
			foreach($route as $temp){
				echo ',"route":{';
				echo '"rid":' . $temp['rid'] . '",';
				echo '"start":"' . $temp['start'] . '",';
				echo '"end":"' . $temp['end'] . '",';
				echo '"startlat":"' . $temp['startlat'] . '",';
				echo '"startlng":"' . $temp['startlng'] . '",';
				echo '"endlat":"' . $temp['endlat'] . '",';
				echo '"endlng":"' . $temp['endlng'] . '",';
				echo '"time":"' . $temp['time'] . '",';
				echo '"message":"' . $temp['message'] . '",';
				echo '"flexible":"' . $temp['flexible'] . '"';
				echo '}';
			}
		}
		else
		{
			echo '"status":"failed"';
		}
		echo '}}';
	}

	public function actionListroutebystart()
	{
		echo '{"listroutebystart":{';

		$start = 'ntu';//$_POST['start'];
		$command = Yii::app()->db->createCommand();
		if($route = $command->select('*')->from('ROUTE')->where('start=:start',array(':start'=>$start))->queryAll())
		{
			echo '"status":"ok"';
			foreach($route as $temp){
				echo ',"route":{';
				echo '"rid":' . $temp['rid'] . '",';
				echo '"uid":"' . $temp['uid'] . '",';
				echo '"end":"' . $temp['end'] . '",';
				echo '"startlat":"' . $temp['startlat'] . '",';
				echo '"startlng":"' . $temp['startlng'] . '",';
				echo '"endlat":"' . $temp['endlat'] . '",';
				echo '"endlng":"' . $temp['endlng'] . '",';
				echo '"time":"' . $temp['time'] . '",';
				echo '"message":"' . $temp['message'] . '",';
				echo '"flexible":"' . $temp['flexible'] . '"';
				echo '}';
			}
		}
		else
		{
			echo '"status":"failed"';
		}
		echo '}}';
	}

	public function actionListroutebyend()
	{
		echo '{"listroutebyend":{';

		$end = 'nus';//$_POST['end'];
		$command = Yii::app()->db->createCommand();
		if($route = $command->select('*')->from('ROUTE')->where('end=:end',array(':end'=>$end))->queryAll())
		{
			echo '"status":"ok"';
			foreach($route as $temp){
				echo '"rid":' . $temp['rid'] . '",';
				echo ',"route":{';
				echo '"uid":"' . $temp['uid'] . '",';
				echo '"start":"' . $temp['start'] . '",';
				echo '"startlat":"' . $temp['startlat'] . '",';
				echo '"startlng":"' . $temp['startlng'] . '",';
				echo '"endlat":"' . $temp['endlat'] . '",';
				echo '"endlng":"' . $temp['endlng'] . '",';
				echo '"time":"' . $temp['time'] . '",';
				echo '"message":"' . $temp['message'] . '",';
				echo '"flexible":"' . $temp['flexible'] . '"';
				echo '}';
			}
		}
		else
		{
			echo '"status":"failed"';
		}
		echo '}}';
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}