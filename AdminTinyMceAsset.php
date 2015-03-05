<?php

namespace yz\admin\tinymce;
use yii\web\AssetBundle;


/**
 * Class AdminTinyMceAsset
 */
class AdminTinyMceAsset extends AssetBundle
{
    public $sourcePath = '@yz/admin/tinymce/assets';

    public $css = ['content.css'];

    public function registerAssetFiles($view)
    {
        // We will not register css files because they should be only used for tinymce
    }
}