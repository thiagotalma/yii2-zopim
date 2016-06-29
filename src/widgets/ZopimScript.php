<?php

namespace talma\zopim\widgets;

use yii\base\Widget;

/**
 * Class ZopimScript
 * @author Thiago Talma <thiago@thiagomt.com>
 */
class ZopimScript extends Widget
{
    /**
     * Render <script></script>
     * @var bool
     */
    public $omitScriptTag = false;

    /**
     * The APP ID
     * @var string
     */
    public $appId = null;

    /**
     * @var array
     */
    private $_viewParams;

    public function init()
    {
        parent::init();

        $this->_viewParams = [
            'omitScriptTag' => $this->omitScriptTag,
            'appId' => $this->appId,
        ];
    }

    public function run()
    {
        echo $this->render('script', $this->_viewParams);
    }
}
