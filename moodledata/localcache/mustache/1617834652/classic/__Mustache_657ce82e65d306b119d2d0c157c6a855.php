<?php

class __Mustache_657ce82e65d306b119d2d0c157c6a855 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="fixed-top navbar navbar-bootswatch navbar-expand moodle-has-zindex">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '" class="navbar-brand aalink ';
        // 'output.should_display_navbar_logo' section
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        $buffer .= '
';
        // 'output.should_display_navbar_logo' inverted section
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '                d-none d-sm-inline
';
        }
        $buffer .= $indent . '                ">
';
        // 'output.should_display_navbar_logo' section
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section670a3a8453eca8e77434bb00b72dc1bf($context, $indent, $value);
        $buffer .= $indent . '            <span class="site-name d-none d-md-inline">';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="navbar-nav d-none d-md-flex">
';
        $buffer .= $indent . '            <!-- custom_menu -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <div class="ml-auto">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <ul class="nav navbar-nav usernav">
';
        $buffer .= $indent . '            <!-- navbar_plugin_output -->
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <!-- user_menu -->
';
        $buffer .= $indent . '            <li class="nav-item align-items-center">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <!-- search_box -->
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section670a3a8453eca8e77434bb00b72dc1bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="logo d-none d-sm-inline">
                    <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                </span>
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
                
                $buffer .= $indent . '                <span class="logo d-none d-sm-inline">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
