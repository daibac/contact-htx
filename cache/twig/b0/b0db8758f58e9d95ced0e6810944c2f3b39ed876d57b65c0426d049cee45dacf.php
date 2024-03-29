<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/default/field.html.twig */
class __TwigTemplate_3a17abfb3af9fc33d77911df6943db33048f6761b3089d1af6a617787b1b5fe7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'outer_field_classes' => [$this, 'block_outer_field_classes'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 2
            echo "
";
            // line 3
            $context["field_name"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 4
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 5
            $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
            // line 6
            echo "
";
            // line 7
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 8
                echo "    ";
                $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
                // line 9
                echo "    ";
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 10
                echo "    ";
                $context["toggleableChecked"] = (($context["toggleable"] ?? null) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
                // line 11
                echo "    ";
                $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
                // line 12
                echo "    ";
                $context["value"] = (($context["value"]) ?? ((( !(null === $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))) : ($this->getAttribute(($context["field"] ?? null), "default", [])))));
                // line 13
                echo "
    ";
                // line 14
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 15
                    echo "        ";
                    $context["value"] = call_user_func_array($this->env->getFilter('toYaml')->getCallable(), [($context["value"] ?? null)]);
                    // line 16
                    echo "    ";
                }
            } else {
                // line 18
                echo "    ";
                $context["toggleable"] = false;
            }
            // line 20
            echo "
";
            // line 21
            $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
            // line 22
            $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 23
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 24
            echo "
";
            // line 25
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 26
                echo "    ";
                $context["autofocus"] = true;
            }
            // line 28
            echo "
";
            // line 29
            $this->displayBlock('field', $context, $blocks);
            // line 129
            echo "
";
        }
    }

    // line 29
    public function block_field($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"form-field ";
        echo twig_escape_filter($this->env, ($context["form_field_outer_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", []), "html", null, true);
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo " ";
        if (($context["toggleable"] ?? null)) {
            echo " form-field-toggleable";
        }
        echo "\">
        ";
        // line 31
        $this->displayBlock('contents', $context, $blocks);
        // line 127
        echo "    </div>
";
    }

    // line 30
    public function block_outer_field_classes($context, array $blocks = [])
    {
    }

    // line 31
    public function block_contents($context, array $blocks = [])
    {
        // line 32
        echo "            ";
        if (( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false))) {
            // line 33
            echo "                <div class=\"";
            ((($context["form_field_outer_label_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_outer_label_classes"] ?? null), "html", null, true))) : (print ("form-label")));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "labelclasses", []), "html", null, true);
            echo "\">
                    ";
            // line 34
            if (($context["toggleable"] ?? null)) {
                // line 35
                echo "                        ";
                $this->loadTemplate("forms/default/toggleable.html.twig", "forms/default/field.html.twig", 35)->display(twig_array_merge($context, ["field_name" => ($context["field_name"] ?? null), "field" => ($context["field"] ?? null), "checked" => ($context["toggleableChecked"] ?? null)]));
                // line 36
                echo "                    ";
            }
            // line 37
            echo "                    <label class=\"";
            ((($context["form_field_label_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_label_classes"] ?? null), "html", null, true))) : (print ("inline")));
            echo " ";
            echo ((($context["toggleable"] ?? null)) ? ("toggleable") : (""));
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
                echo "for=\"";
                ((($context["toggleable"] ?? null)) ? (print (twig_escape_filter($this->env, ("toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", [])), "html", null, true))) : (print (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])))));
                echo "\" ";
            }
            echo " >
                    ";
            // line 38
            $this->displayBlock('label', $context, $blocks);
            // line 55
            echo "                    </label>
                </div>
            ";
        }
        // line 58
        echo "            <div class=\"";
        ((($context["form_field_outer_data_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_outer_data_classes"] ?? null), "html", null, true))) : (print ("form-data")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "dataclasses", []), "html", null, true);
        echo "\"
                ";
        // line 59
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 64
        echo "            >
                ";
        // line 65
        $this->displayBlock('group', $context, $blocks);
        // line 113
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 114
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 116
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 117
                echo "                                ";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 119
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 121
            echo "                        </span>
                    </div>
                ";
        }
        // line 124
        echo "
            </div>
        ";
    }

    // line 38
    public function block_label($context, array $blocks = [])
    {
        // line 39
        echo "                        ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 40
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 41
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))), "html", null, true);
                echo "</span>
                            ";
            } else {
                // line 43
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))))), "html", null, true);
                echo "</span>
                            ";
            }
            // line 45
            echo "                        ";
        } else {
            // line 46
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 47
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))), "html_attr");
                echo "
                            ";
            } else {
                // line 49
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))))), "html_attr");
                echo "
                            ";
            }
            // line 51
            echo "                        ";
        }
        // line 52
        echo "
                        ";
        // line 53
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 59
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 60
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 65
    public function block_group($context, array $blocks = [])
    {
        // line 66
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 112
        echo "                ";
    }

    // line 66
    public function block_input($context, array $blocks = [])
    {
        // line 67
        echo "                        <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-input-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
                            ";
        // line 68
        $this->displayBlock('prepend', $context, $blocks);
        // line 69
        echo "                            <input
                                ";
        // line 71
        echo "                                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                                value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 74
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 103
        echo "                            />
                            ";
        // line 104
        $this->displayBlock('append', $context, $blocks);
        // line 105
        echo "                            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 106
            echo "                                <div class=\"";
            ((($context["form_errors_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_errors_classes"] ?? null), "html", null, true))) : (print ("form-errors")));
            echo "\">
                                  <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 107
            echo twig_escape_filter($this->env, twig_first($this->env, ($context["errors"] ?? null)), "html", null, true);
            echo "</p>
                                </div>
                            ";
        }
        // line 110
        echo "                        </div>
                    ";
    }

    // line 68
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 74
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 75
        echo "                                    class=\"";
        echo twig_escape_filter($this->env, ($context["form_field_input_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\"
                                    ";
        // line 76
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 77
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 78
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 79
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html_attr");
            echo "\"";
        }
        // line 80
        echo "                                    ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 81
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 82
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 83
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 84
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocapitalize", []), [0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"])) {
            echo "autocapitalize=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocapitalize", []), "html", null, true);
            echo "\"";
        }
        // line 85
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "inputmode", []), [0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"])) {
            echo "inputmode=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "inputmode", []), "html", null, true);
            echo "\"";
        }
        // line 86
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "spellcheck", []), [0 => "true", 1 => "false"])) {
            echo "spellcheck=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "spellcheck", []), "html", null, true);
            echo "\"";
        }
        // line 87
        echo "
                                    ";
        // line 88
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 89
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 90
                echo "                                          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                    ";
        }
        // line 93
        echo "                                    ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 94
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 95
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 96
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 97
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 98
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 99
                echo "                                            data-";
                echo twig_escape_filter($this->env, $context["datakey"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                    ";
        }
        // line 102
        echo "                                ";
    }

    // line 104
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 104,  529 => 102,  526 => 101,  515 => 99,  510 => 98,  507 => 97,  501 => 96,  494 => 95,  487 => 94,  482 => 93,  479 => 92,  468 => 90,  463 => 89,  461 => 88,  458 => 87,  451 => 86,  444 => 85,  437 => 84,  430 => 83,  425 => 82,  420 => 81,  415 => 80,  408 => 79,  403 => 78,  396 => 77,  390 => 76,  381 => 75,  378 => 74,  373 => 68,  368 => 110,  362 => 107,  357 => 106,  354 => 105,  352 => 104,  349 => 103,  346 => 74,  342 => 72,  337 => 71,  334 => 69,  332 => 68,  323 => 67,  320 => 66,  316 => 112,  313 => 66,  310 => 65,  304 => 62,  300 => 61,  295 => 60,  292 => 59,  286 => 53,  283 => 52,  280 => 51,  274 => 49,  268 => 47,  265 => 46,  262 => 45,  254 => 43,  246 => 41,  243 => 40,  240 => 39,  237 => 38,  231 => 124,  226 => 121,  220 => 119,  214 => 117,  212 => 116,  206 => 114,  203 => 113,  201 => 65,  198 => 64,  196 => 59,  189 => 58,  184 => 55,  182 => 38,  169 => 37,  166 => 36,  163 => 35,  161 => 34,  154 => 33,  151 => 32,  148 => 31,  143 => 30,  138 => 127,  136 => 31,  119 => 30,  116 => 29,  110 => 129,  108 => 29,  105 => 28,  101 => 26,  99 => 25,  96 => 24,  94 => 23,  92 => 22,  90 => 21,  87 => 20,  83 => 18,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore %}

{% set field_name = (scope ~ field.name)|fieldName %}
{% set vertical = field.style == 'vertical' %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set originalValue = originalValue is defined ? originalValue : value %}
    {% set toggleable = field.toggleable ?? false %}
    {% set toggleableChecked = toggleable and (originalValue is not null and originalValue is not empty) %}
    {% set isDisabledToggleable = toggleable and not toggleableChecked %}
    {% set value = value ?? (get_cookie(cookie_name) is not null ? get_cookie(cookie_name) : field.default) %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}

{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% block field %}
    <div class=\"form-field {{ form_field_outer_classes }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %} {% if toggleable %} form-field-toggleable{% endif %}\">
        {% block contents %}
            {% if field.label is not same as(false) and field.display_label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    {% if toggleable %}
                        {% include 'forms/default/toggleable.html.twig' with {field_name: field_name, field: field, checked: toggleableChecked} %}
                    {% endif %}
                    <label class=\"{{ form_field_label_classes ?: 'inline' }} {{ toggleable ? 'toggleable' }}\" {% if field.id is defined %}for=\"{{ toggleable ? 'toggleable_' ~ field.name : field.id|e }}\" {% endif %} >
                    {% block label %}
                        {% if field.help %}
                            {% if field.markdown %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|markdown(false)|e }}\">{{ field.label|markdown(false)|default(field.name|capitalize)|t }}</span>
                            {% else %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                            {% endif %}
                        {% else %}
                            {% if field.markdown %}
                                {{ field.label|markdown(false)|default(field.name|capitalize)|t|e('html_attr') }}
                            {% else %}
                                {{ field.label|default(field.name|capitalize)|t|e('html_attr') }}
                            {% endif %}
                        {% endif %}

                        {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                    {% endblock %}
                    </label>
                </div>
            {% endif %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    class=\"{{ form_field_input_classes }} {{ field.classes }} {{ field.size }}\"
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t|e('html_attr') }}\"{% endif %}
                                    {% if autofocus %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.autocapitalize in ['off', 'characters', 'words', 'sentences'] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
                                    {% if field.inputmode in ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
                                    {% if field.spellcheck in ['true', 'false'] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}

                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if required %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                    {% if field.datasets %}
                                        {% for datakey, datavalue in field.datasets %}
                                            data-{{ datakey }}=\"{{ datavalue|e('html_attr') }}\"
                                        {% endfor %}
                                    {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                  <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first }}</p>
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}

{% endif %}
", "forms/default/field.html.twig", "C:\\xampp\\htdocs\\contact-htx\\user\\plugins\\form\\templates\\forms\\default\\field.html.twig");
    }
}
