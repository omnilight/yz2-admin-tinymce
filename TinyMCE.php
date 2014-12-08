<?php

namespace yz\admin\tinymce;

use yii\helpers\ArrayHelper;


/**
 * Class TinyMCE
 */
class TinyMCE extends \pendalf89\tinymce\TinyMce
{
    public function run()
    {
        $this->clientOptions = ArrayHelper::merge([
            'language' => \Yii::$app->language,
        ], $this->clientOptions);

        return parent::run();
    }

} 