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
        $bundle = AdminTinyMceAsset::register($this->view);
        AdminTinyMceAsset::
        $this->clientOptions = ArrayHelper::merge([
            'language' => \Yii::$app->language,
            'content_css' => $bundle->baseUrl.'/content.css',
        ], $this->clientOptions);

        return parent::run();
    }

} 