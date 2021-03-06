<?php
class DestinationController extends Controller{
	public $layout = 'main';
	public function actionIndex(){
		//try{
			$model = Cms::model()->getList('destination');
			$this->render('index', compact('model'));
		/*}catch(Exception $ec){
			$this->render('../site/error');
		}*/
	}

	public function actionDetail($cms, $cms_slug=''){
		//try{
			$model = Cms::model()->getBySlug($cms_slug);
			$other = Cms::model()->getList($cms);
			$this->render('detail', compact(array('model', 'cms_slug', 'other')));
		/*}catch(Exception $ec){
			$this->render('../site/error');
		}*/
	}

	/*public function actionOther(){
		try{
			$model = Cms::model()->getList('restaurant', '');
			$this->render('other', compact('model'));
		}catch(Exception $ec){
			$this->render('../site/error');
		}	
	}*/
}