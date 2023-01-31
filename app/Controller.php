<?php
abstract class Controller{
    /**
     * display view
     * @param string $file
     * @param array $data
     * @return void
     */
    public function render(string $file, array $data =[]){
        extract($data);

        //buffer start
        ob_start();

        //view generation
        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$file.'.php');

        //stock content into $content
        $content = ob_get_clean();

        //template creation
        require_once(ROOT.'views/layouts/default.php');
    } 

    /**
     * Allow to load model
     * @param string $model
     * @return void
     */
    public function loadModel(string $model){
        //find file corresponding to wanted model
        require_once(ROOT.'models/'.$model.'.php');
        
        $this->$model = new $model();
    }
}