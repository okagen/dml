<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
/**
 * Dmolos Controller
 *
 * @property Dmolo $Dmolo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DmolosController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $components = array( 'Session',
		'Paginator' => array(
			'limit' => 10,
			'order' => array('id' => 'desc')
		)
	);

	public function isAuthorized($user) {
    if (in_array($this->action, array('index', 'view', 'filedownload'))) {
            return true;
        }
	    return parent::isAuthorized($user);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dmolo->recursive = 0;
		$this->set('dmolos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
		$this->set('dmolo', $this->Dmolo->find('first', $options));
	}

	public function filedownload( $category = null, $filename = null, $id = null ) {
		// ビューを出力しないようにする
        $this->autoRender = false;
		//$categoryが設定されていなかった場合エラーを表示
	    if(!$category){
	        $this->Session->setFlash(__('Category was not detected.'),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
	        return $this->redirect(array('action' => 'view', $id));
	    }
	    //$filenameが設定されていなかった場合
	    if(!$filename){
	        $this->Session->setFlash(__('File name was not detected.'),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
	        return $this->redirect(array('action' => 'view', $id));
	    }
	    //ファイルを取得
		$dir = new Folder(WWW_ROOT . 'files' . DS . $category);
		$files = $dir->find($filename . '-*.*' , true);
		//Downloadするためのファイルが見つからない場合エラー
		if(count($files) < 1){
	        $this->Session->setFlash(__('The required files could not be found. :: ' .DS.$category.DS.$filename ),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
	        return $this->redirect(array('action' => 'view', $id));
		} else {
			// Zipクラスロード
			$zip = new ZipArchive();
			// Zipファイル名
			$zipFileName = $filename . '_' . $category . '.zip';
			// Zipファイル一時保存ディレクトリ
			$zipTmpDir = WWW_ROOT.'files'.DS.'tmp';
			// Zipファイルオープン
			$result = $zip->open($zipTmpDir.DS.$zipFileName, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);
			if ($result !== true) {
			    // 失敗した時の処理
			}
			// 処理制限時間を外す
			set_time_limit(0);
			foreach ($files as $file) {
			    // 取得ファイルをZipに追加していく
			    $zip->addFromString($file, file_get_contents( $dir->path.DS.$file ));
			}
			$zip->close();

			// ストリームに出力
			header('Content-Type: application/zip; name="' . $zipFileName . '"');
			header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
			header('Content-Length: '.filesize($zipTmpDir.DS.$zipFileName));
			echo file_get_contents($zipTmpDir.DS.$zipFileName);

			// 一時ファイルを削除しておく
			unlink($zipTmpDir.DS.$zipFileName);
			exit();
		}
	}
}
