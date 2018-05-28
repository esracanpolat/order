<?php

namespace kouosl\order\controllers\frontend;


class OrderController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
