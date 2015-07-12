<?php

namespace Asset\Responder;
use App\Responder\AppResponder;

/**
 * Index Responder
 *
 * @package Asset\Responder
 */
class IndexResponder extends AppResponder
{
    public function getMethod()
    {
        $this->getResponse()->setContent($this->getData('content'));
    }
}
