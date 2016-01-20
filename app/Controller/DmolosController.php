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
    if (in_array($this->action, array('index', 'view'))) {
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

	public function filedownload( $category = null, $filename = null ) {
	    //$this->autoRender = false;

		//$categoryが設定されていなかった場合エラーを表示
	    if(!$category){
	        $this->Session->setFlash(__('Invalid category of data.'),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
	        return false;
	    }
	    //$filenameが設定されていなかった場合
	    if(!$filename){
	        $this->Session->setFlash(__('The name of file could not be identified.'),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
	        return false;
	    }
		$dir = new Folder(WWW_ROOT . 'files' . DS . $category);
		$files = $dir->find( $filename . '-*.*' , true);
		if(count($files) < 1){
	        $this->Session->setFlash(__('The required files could not be found.::' . $filename ),
	        							'alert', array(
											'plugin' => 'TwitterBootstrap',
											'class' => 'alert-error'
										), 'flash');
	        return false;
		} else {



		}










/*
// Zipクラスロード
$zip = new ZipArchive();
// Zipファイル名
$zipFileName = 'hogehoge.zip';
// Zipファイル一時保存ディレクトリ
$zipTmpDir = WWW_ROOT . '/files';

// Zipファイルオープン
$result = $zip->open($zipTmpDir.$zipFileName, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);
if ($result !== true) {
    // 失敗した時の処理
}

// ここでDB等から画像イメージ配列を取ってくる
$image_data_array = [WWW_ROOT . DS. 'files' . DS . 'cg' . DS . 'DM-BTB2-B0-NA-WST-1470-PW-0.jpg'];

// 処理制限時間を外す
set_time_limit(0);

foreach ($image_data_array as $filepath) {

    $filename = basename($filepath);

    // 取得ファイルをZipに追加していく
    $zip->addFromString($filename,file_get_contents($filepath));

}

$zip->close();

// ストリームに出力
header('Content-Type: application/zip; name="' . $zipFileName . '"');
header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
header('Content-Length: '.filesize($zipTmpDir.$zipFileName));
echo file_get_contents($zipTmpDir.$zipFileName);

// 一時ファイルを削除しておく
//unlink($zipTmpDir.$zipFileName);
exit();
*/


	    /*


	    $this->response->type('application/zip');
	    $this->response->file('files/test.zip', array('download' => true));
	    $this->response->download('test2.zip');
	    */
	}

}
