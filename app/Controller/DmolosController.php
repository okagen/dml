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
		),
		'Search.Prg',
	);

	//認証されていれば、index, view, filedownloadのアクションを許可
	public function isAuthorized($user) {
    if (in_array($this->action, array('index', 'view', 'filedownload'))) {
            return true;
        }
	    return parent::isAuthorized($user);
	}

	//検索条件をURLのパラメータに保持するときのフォーマットの設定
	//モデルの$filterArgsと同じ内容なので True として諸略する。
	public $presetVars = true;

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dmolo->recursive = 0;
		//検索条件データのハンドリング　RLに含まれる検索条件を解析
		$this->Prg->commonProcess();
		//モデルのfilterArgs に定義した内容にしたがってwhere条件が構成され、検索が行われる。
		$this->paginate = array(
			'conditions' => $this->Dmolo->parseCriteria($this->passedArgs),
		);
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		//配列の添え字を1からはじめる(1=>1)
		$personNums = [1=>1,2,3,4,5,6];
		$this->set(compact('dmlTypes', 'layoutTypes', 'personNums'));
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
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Dmolo->recursive = 0;
		$this->set('dmolos', $this->Paginator->paginate());
	}
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
		$this->set('dmolo', $this->Dmolo->find('first', $options));
	}
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Dmolo->create();
			if ($this->Dmolo->save($this->request->data)) {
				$this->Session->setFlash(__('The dmolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dmolo could not be saved. Please, try again.'));
			}
		}
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		$this->set(compact('dmlTypes', 'layoutTypes'));
	}
/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Dmolo->exists($id)) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dmolo->save($this->request->data)) {
				$this->Session->setFlash(__('The dmolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dmolo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dmolo.' . $this->Dmolo->primaryKey => $id));
			$this->request->data = $this->Dmolo->find('first', $options);
		}
		$dmlTypes = $this->Dmolo->DmlType->find('list');
		$layoutTypes = $this->Dmolo->LayoutType->find('list');
		$this->set(compact('dmlTypes', 'layoutTypes'));
	}
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Dmolo->id = $id;
		if (!$this->Dmolo->exists()) {
			throw new NotFoundException(__('Invalid dmolo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dmolo->delete()) {
			$this->Session->setFlash(__('The dmolo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dmolo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
