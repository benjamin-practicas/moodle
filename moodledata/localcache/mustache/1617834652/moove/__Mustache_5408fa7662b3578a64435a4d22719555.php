<?php

class __Mustache_5408fa7662b3578a64435a4d22719555 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span style="display:inline-block;" class="';
        $value = $this->resolveValue($context->find('spanclass'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">&nbsp;';
        $value = $this->resolveValue($context->find('rolename'), $context);
        $buffer .= $value;
        $buffer .= '&nbsp;
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('adminurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'roles/permissions.php" class="';
        $value = $this->resolveValue($context->find('linkclass'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-role-id="';
        $value = $this->resolveValue($context->find('roleid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->section88703b13e91a86e0560385cff013dc93($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</span>
';

        return $buffer;
    }

    private function section3f58dabda1155541c6b23258708a2223(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{icon}}, core, {{{iconalt}}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', core, ';
                $value = $this->resolveValue($context->find('iconalt'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88703b13e91a86e0560385cff013dc93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#pix}}{{icon}}, core, {{{iconalt}}}{{/pix}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section3f58dabda1155541c6b23258708a2223($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
