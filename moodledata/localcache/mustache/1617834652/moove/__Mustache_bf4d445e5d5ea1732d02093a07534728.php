<?php

class __Mustache_bf4d445e5d5ea1732d02093a07534728 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-selectgroups-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
