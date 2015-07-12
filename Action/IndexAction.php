<?php

namespace Asset\Action;
use App\Action\AppAction;

/**
 * Index Action
 *
 * @package Asset\Action
 */
class IndexAction extends AppAction
{
    public function getMethod()
    {
        $params = func_get_args();
        array_unshift($params, SRC_DIR);
        array_splice($params, 2, 0, 'Resource/asset');

        $path = implode('/', $params);

        $this->getResponder()->setData('content', file_get_contents($path));
    }
}
