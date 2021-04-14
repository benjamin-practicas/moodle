<?php

class __Mustache_e76d2d39d994f695ba230078c837f5c6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/inc_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page" class="container-fluid">
';
        $buffer .= $indent . '    <div id="page-content" class="row">
';
        $buffer .= $indent . '        <div id="region-main-box" class="col-12">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionCc9c5a88a9e536b7dbb32e956815893a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.breadcrumb_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <section id="region-main">
';
        $buffer .= $indent . '                <div class="card">
';
        $buffer .= $indent . '                    <div class="card-body">
';
        $buffer .= $indent . '                        <div class="row">
';
        $buffer .= $indent . '                            <div class="col-sm-12 col-md-3">
';
        $buffer .= $indent . '                                <div class="card user-card">
';
        $buffer .= $indent . '                                    <div class="card-body">
';
        // 'user' section
        $value = $context->find('user');
        $buffer .= $this->section7ea6a40d6b39e67864c16a0318885ae0($context, $indent, $value);
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="card-footer">
';
        // 'headerbuttons' section
        $value = $context->find('headerbuttons');
        $buffer .= $this->section59d98109b063e52b1f0087469a7186d8($context, $indent, $value);
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="col-sm-12 col-md-9">
';
        $buffer .= $indent . '                                <div class="card">
';
        $buffer .= $indent . '                                    <div class="card-body">
';
        $buffer .= $indent . '                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
';
        // 'hascourses' section
        $value = $context->find('hascourses');
        $buffer .= $this->sectionB26643b180563cb5184fdf89ffaf0087($context, $indent, $value);
        // 'hascompetencyplans' section
        $value = $context->find('hascompetencyplans');
        $buffer .= $this->section5ab02d2f1abaeed2cae3d0ec91788c51($context, $indent, $value);
        $buffer .= $indent . '                                            <li class="nav-item">
';
        $buffer .= $indent . '                                                <a class="nav-link ';
        // 'hascourses' inverted section
        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= 'active';
        }
        $buffer .= '" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="';
        // 'hascourses' inverted section
        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        // 'hascourses' section
        $value = $context->find('hascourses');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section075022676f015c40168ceaceee625179($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                                            </li>
';
        $buffer .= $indent . '                                        </ul>
';
        $buffer .= $indent . '                                        <div class="tab-content" id="mypublic-tab">
';
        // 'hascourses' section
        $value = $context->find('hascourses');
        $buffer .= $this->sectionEd072c5bc1a40a3944947cea71cd0869($context, $indent, $value);
        // 'hascompetencyplans' section
        $value = $context->find('hascompetencyplans');
        $buffer .= $this->sectionD148bd0e1b9b3d35756c56c679d4d1ec($context, $indent, $value);
        $buffer .= $indent . '                                            <div class="tab-pane fade pt-1 ';
        // 'hascourses' inverted section
        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= 'active show';
        }
        $buffer .= '" id="details" role="tabpanel" aria-labelledby="details-tab">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section12f69f16e080b82c520636ff3b4bfc4e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/inc_end')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function sectionCc9c5a88a9e536b7dbb32e956815893a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="region-main-settings-menu" class="d-print-none">
                <div> {{{ output.region_main_settings_menu }}} </div>
            </div>
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
                
                $buffer .= $indent . '            <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '                <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ea6a40d6b39e67864c16a0318885ae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="d-flex">
                                                <div class="mr-auto"></div>
                                                {{{ output.context_header_settings_menu }}}
                                            </div>

                                            <div class="profilepic">
                                                <img src="{{profilepicture}}" alt="{{{firstname}}} {{{lastname}}}">
                                            </div>

                                            <h3>{{{firstname}}} {{{lastname}}}</h3>
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
                
                $buffer .= $indent . '                                            <div class="d-flex">
';
                $buffer .= $indent . '                                                <div class="mr-auto"></div>
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->findDot('output.context_header_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            <div class="profilepic">
';
                $buffer .= $indent . '                                                <img src="';
                $value = $this->resolveValue($context->find('profilepicture'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('lastname'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                            <h3>';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('lastname'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0227fc0f7e50fa5d5acb630fc4c0cfcc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                id="{{{id}}}"
                                                data-userid="{{{data-userid}}}"
                                                data-is-contact="{{{data-is-contact}}}"
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
                
                $buffer .= $indent . '                                                id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                data-userid="';
                $value = $this->resolveValue($context->find('data-userid'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                data-is-contact="';
                $value = $this->resolveValue($context->find('data-is-contact'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59d98109b063e52b1f0087469a7186d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <a
                                                role="button"
                                                href="{{{url}}}"
                                                class="{{{class}}}"
                                                {{#linkattributes}}
                                                id="{{{id}}}"
                                                data-userid="{{{data-userid}}}"
                                                data-is-contact="{{{data-is-contact}}}"
                                                {{/linkattributes}}
                                            >
                                                <span>
                                                    <i class="{{{icon}}}" aria-hidden="true" title="{{{title}}}" aria-label="{{{title}}}"></i>
                                                    <span class="header-button-title">{{{title}}}</span>
                                                </span>
                                            </a>
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
                
                $buffer .= $indent . '                                            <a
';
                $buffer .= $indent . '                                                role="button"
';
                $buffer .= $indent . '                                                href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                class="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                // 'linkattributes' section
                $value = $context->find('linkattributes');
                $buffer .= $this->section0227fc0f7e50fa5d5acb630fc4c0cfcc($context, $indent, $value);
                $buffer .= $indent . '                                            >
';
                $buffer .= $indent . '                                                <span>
';
                $buffer .= $indent . '                                                    <i class="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '" aria-hidden="true" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                                    <span class="header-button-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF870cf92426deaef3e90c68f33111c89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courses';
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
                
                $buffer .= 'courses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB26643b180563cb5184fdf89ffaf0087(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="courses-tab" data-toggle="tab" href="#cursos" role="tab" aria-controls="cursos" aria-selected="true">{{#str}}courses{{/str}}</a>
                                                </li>
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
                
                $buffer .= $indent . '                                                <li class="nav-item">
';
                $buffer .= $indent . '                                                    <a class="nav-link active" id="courses-tab" data-toggle="tab" href="#cursos" role="tab" aria-controls="cursos" aria-selected="true">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF870cf92426deaef3e90c68f33111c89($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc676512856b584dccb2e98fd096266c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competencyplans, theme_moove';
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
                
                $buffer .= 'competencyplans, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ab02d2f1abaeed2cae3d0ec91788c51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li class="nav-item">
                                                    <a class="nav-link" id="competencyplans-tab" data-toggle="tab" href="#planos" role="tab" aria-controls="planos" aria-selected="false">{{#str}}competencyplans, theme_moove{{/str}}</a>
                                                </li>
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
                
                $buffer .= $indent . '                                                <li class="nav-item">
';
                $buffer .= $indent . '                                                    <a class="nav-link" id="competencyplans-tab" data-toggle="tab" href="#planos" role="tab" aria-controls="planos" aria-selected="false">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAc676512856b584dccb2e98fd096266c($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
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
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section075022676f015c40168ceaceee625179(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'details, theme_moove';
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
                
                $buffer .= 'details, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7599cc4d29ce4551769563990a54f367(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startedon, theme_moove';
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
                
                $buffer .= 'startedon, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbecad175d7ebb4e184f3f43ce6178ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{startdate}}, %A, %d %B %Y ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('startdate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', %A, %d %B %Y ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7f120a3157b3d67e1738709ebd685dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<small>{{#str}}startedon, theme_moove{{/str}}: {{#userdate}} {{startdate}}, %A, %d %B %Y {{/userdate}}</small>';
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
                
                $buffer .= '<small>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7599cc4d29ce4551769563990a54f367($context, $indent, $value);
                $buffer .= ': ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->sectionFbecad175d7ebb4e184f3f43ce6178ec($context, $indent, $value);
                $buffer .= '</small>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6b39ba7f94954fefad8cf4663af09c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                                    <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
                                                                        <div class="progress-circle" data-progress="{{ progress }}"></div>
                                                                    </div>
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
                
                $buffer .= $indent . '                                                                    <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
';
                $buffer .= $indent . '                                                                        <div class="progress-circle" data-progress="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $buffer .= $indent . '                                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section594fe39aa15c7a98dd6ead7a4e9058e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        <div id="course-{{ id }}" class="card mt-1">
                                                            <div class="card-body row">
                                                                <div class="col-md-3 col-sm-6 courseimage">
                                                                    {{{ courseimage }}}
                                                                </div>

                                                                <div class="media-body col-md-9 col-sm-6">
                                                                    <a href="{{ link }}"><h5 class="mt-0">{{{ fullname }}}</h5></a>
                                                                    {{# startdate }}<small>{{#str}}startedon, theme_moove{{/str}}: {{#userdate}} {{startdate}}, %A, %d %B %Y {{/userdate}}</small>{{/ startdate }}

                                                                    <div class="mt-1">
                                                                        {{{ summary }}}
                                                                    </div>
                                                                </div>
                                                                {{# enablecompletion }}
                                                                    <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
                                                                        <div class="progress-circle" data-progress="{{ progress }}"></div>
                                                                    </div>
                                                                {{/ enablecompletion }}
                                                            </div>
                                                        </div>
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
                
                $buffer .= $indent . '                                                        <div id="course-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="card mt-1">
';
                $buffer .= $indent . '                                                            <div class="card-body row">
';
                $buffer .= $indent . '                                                                <div class="col-md-3 col-sm-6 courseimage">
';
                $buffer .= $indent . '                                                                    ';
                $value = $this->resolveValue($context->find('courseimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                                                <div class="media-body col-md-9 col-sm-6">
';
                $buffer .= $indent . '                                                                    <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><h5 class="mt-0">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '</h5></a>
';
                $buffer .= $indent . '                                                                    ';
                // 'startdate' section
                $value = $context->find('startdate');
                $buffer .= $this->sectionF7f120a3157b3d67e1738709ebd685dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                                                    <div class="mt-1">
';
                $buffer .= $indent . '                                                                        ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                                    </div>
';
                $buffer .= $indent . '                                                                </div>
';
                // 'enablecompletion' section
                $value = $context->find('enablecompletion');
                $buffer .= $this->sectionA6b39ba7f94954fefad8cf4663af09c7($context, $indent, $value);
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd072c5bc1a40a3944947cea71cd0869(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div class="tab-pane fade show active" id="cursos" role="tabpanel" aria-labelledby="courses-tab">
                                                    {{# courses }}
                                                        <div id="course-{{ id }}" class="card mt-1">
                                                            <div class="card-body row">
                                                                <div class="col-md-3 col-sm-6 courseimage">
                                                                    {{{ courseimage }}}
                                                                </div>

                                                                <div class="media-body col-md-9 col-sm-6">
                                                                    <a href="{{ link }}"><h5 class="mt-0">{{{ fullname }}}</h5></a>
                                                                    {{# startdate }}<small>{{#str}}startedon, theme_moove{{/str}}: {{#userdate}} {{startdate}}, %A, %d %B %Y {{/userdate}}</small>{{/ startdate }}

                                                                    <div class="mt-1">
                                                                        {{{ summary }}}
                                                                    </div>
                                                                </div>
                                                                {{# enablecompletion }}
                                                                    <div class="col-md-3 d-none d-md-block d-lg-block d-xl-block text-right">
                                                                        <div class="progress-circle" data-progress="{{ progress }}"></div>
                                                                    </div>
                                                                {{/ enablecompletion }}
                                                            </div>
                                                        </div>
                                                    {{/ courses }}
                                                </div>
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
                
                $buffer .= $indent . '                                                <div class="tab-pane fade show active" id="cursos" role="tabpanel" aria-labelledby="courses-tab">
';
                // 'courses' section
                $value = $context->find('courses');
                $buffer .= $this->section594fe39aa15c7a98dd6ead7a4e9058e8($context, $indent, $value);
                $buffer .= $indent . '                                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section534ed4f1c1165f52e8f7a61d1f78fbb8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="card card-shadow mt-1">
                                                        <div class="card-body">
                                                            <a href="{{config.wwwroot}}/admin/tool/lp/plan.php?id={{{id}}}"><h4>{{{name}}}</h4></a>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped {{{progressclass}}}" role="progressbar" style="width: {{{proficientcompetencypercentage}}}%" aria-valuenow="{{{proficientcompetencypercentage}}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                
                $buffer .= $indent . '                                                    <div class="card card-shadow mt-1">
';
                $buffer .= $indent . '                                                        <div class="card-body">
';
                $buffer .= $indent . '                                                            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/admin/tool/lp/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '"><h4>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</h4></a>
';
                $buffer .= $indent . '                                                            <div class="progress">
';
                $buffer .= $indent . '                                                                <div class="progress-bar progress-bar-striped ';
                $value = $this->resolveValue($context->find('progressclass'), $context);
                $buffer .= $value;
                $buffer .= '" role="progressbar" style="width: ';
                $value = $this->resolveValue($context->find('proficientcompetencypercentage'), $context);
                $buffer .= $value;
                $buffer .= '%" aria-valuenow="';
                $value = $this->resolveValue($context->find('proficientcompetencypercentage'), $context);
                $buffer .= $value;
                $buffer .= '" aria-valuemin="0" aria-valuemax="100"></div>
';
                $buffer .= $indent . '                                                            </div>
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD148bd0e1b9b3d35756c56c679d4d1ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div class="tab-pane fade" id="planos" role="tabpanel" aria-labelledby="competencyplans-tab">
                                                    {{#competencyplans}}
                                                    <div class="card card-shadow mt-1">
                                                        <div class="card-body">
                                                            <a href="{{config.wwwroot}}/admin/tool/lp/plan.php?id={{{id}}}"><h4>{{{name}}}</h4></a>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped {{{progressclass}}}" role="progressbar" style="width: {{{proficientcompetencypercentage}}}%" aria-valuenow="{{{proficientcompetencypercentage}}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{/competencyplans}}
                                                </div>
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
                
                $buffer .= $indent . '                                                <div class="tab-pane fade" id="planos" role="tabpanel" aria-labelledby="competencyplans-tab">
';
                // 'competencyplans' section
                $value = $context->find('competencyplans');
                $buffer .= $this->section534ed4f1c1165f52e8f7a61d1f78fbb8($context, $indent, $value);
                $buffer .= $indent . '                                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12f69f16e080b82c520636ff3b4bfc4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '                                                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
