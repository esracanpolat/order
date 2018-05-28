<?php

<<<<<<< HEAD
namespace kouosl\order\controllers\api;
=======
namespace kouosl\order\controllers\backend;
>>>>>>> d3a76e577d0f3b7a8e84bd12d0a51e58ce713276

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}