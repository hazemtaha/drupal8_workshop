<?php

/* themes/custom_bartik/templates/views-view--user-news--page.html.twig */
class __TwigTemplate_999be716664ee24df4893e17dcd49c3e69a08e1de21e76ddd3be3f148c897e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 5, "if" => 8);
        $filters = array("clean_class" => 6, "t" => 21);
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 5
        echo " ";
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 6
(isset($context["id"]) ? $context["id"] : null))), 2 => ("view-id-" . (isset($context["id"]) ? $context["id"] : null)), 3 => ("view-display-id-" . (isset($context["display_id"]) ? $context["display_id"] : null)), 4 => (((isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 7
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo " ";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo " ";
        }
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo " ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 9
            echo "    <div class=\"view-header\">
        ";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 12
        echo " ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 13
            echo "    <div class=\"view-filters\">
        ";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 16
        echo " ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 17
            echo "    <div class=\"attachment attachment-before\">
        ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 21
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("news.normal_add")));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Add News")));
        echo "</a>
    <br>
    <hr>
     ";
        // line 24
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 25
            echo "    <div class=\"view-content\">
        ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
    </div>
    ";
        } elseif (        // line 28
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 29
            echo "    <div class=\"view-empty\">
        ";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 32
        echo " ";
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
            echo " ";
        }
        echo " ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 33
            echo "    <div class=\"attachment attachment-after\">
        ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 36
        echo " ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
            echo " ";
        }
        echo " ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 37
            echo "    <div class=\"view-footer\">
        ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 40
        echo " ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 41
            echo "    <div class=\"feed-icons\">
        ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 45
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "themes/custom_bartik/templates/views-view--user-news--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 45,  169 => 42,  166 => 41,  163 => 40,  157 => 38,  154 => 37,  145 => 36,  139 => 34,  136 => 33,  127 => 32,  121 => 30,  118 => 29,  116 => 28,  111 => 26,  108 => 25,  106 => 24,  97 => 21,  91 => 18,  88 => 17,  85 => 16,  79 => 14,  76 => 13,  73 => 12,  67 => 10,  64 => 9,  52 => 8,  47 => 7,  45 => 6,  43 => 5,);
    }
}
/* {# /** * @file * Theme override for a main view template. * * Available variables: * - attributes: Remaining HTML attributes for the element. * - css_name: A css-safe version of the view name. * - css_class: The user-specified classes names, if any. **/
/* - header: The optional header. * - footer: The optional footer. * - rows: The results of the view query, if any. * - empty: The content to display if there are no rows. * - pager: The optional pager next/prev links to display. * - exposed: Exposed widget*/
/* form/info to display. * - feed_icons: Optional feed icons to display. * - more: An optional link to the next page of results. * - title: Title of the view, only used when displaying in the admin preview. * - title_prefix: Additional output populated by*/
/* modules, intended to be * displayed in front of the view title. * - title_suffix: Additional output populated by modules, intended to be * displayed after the view title. * - attachment_before: An optional attachment view to be displayed before the **/
/* view content. * - attachment_after: An optional attachment view to be displayed after the * view content. * - dom_id: Unique id for every view being printed to give unique class for * Javascript. * * @see template_preprocess_views_view() *//*  #} {% set*/
/* classes = [ 'view', 'view-' ~ id|clean_class, 'view-id-' ~ id, 'view-display-id-' ~ display_id, dom_id ? 'js-view-dom-id-' ~ dom_id, ] %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*     {{ title_prefix }} {% if title %} {{ title }} {% endif %} {{ title_suffix }} {% if header %}*/
/*     <div class="view-header">*/
/*         {{ header }}*/
/*     </div>*/
/*     {% endif %} {% if exposed %}*/
/*     <div class="view-filters">*/
/*         {{ exposed }}*/
/*     </div>*/
/*     {% endif %} {% if attachment_before %}*/
/*     <div class="attachment attachment-before">*/
/*         {{ attachment_before }}*/
/*     </div>*/
/*     {% endif %}*/
/*     <a href="{{ path('news.normal_add') }}">{{ 'Add News'|t }}</a>*/
/*     <br>*/
/*     <hr>*/
/*      {% if rows %}*/
/*     <div class="view-content">*/
/*         {{ rows }}*/
/*     </div>*/
/*     {% elseif empty %}*/
/*     <div class="view-empty">*/
/*         {{ empty }}*/
/*     </div>*/
/*     {% endif %} {% if pager %} {{ pager }} {% endif %} {% if attachment_after %}*/
/*     <div class="attachment attachment-after">*/
/*         {{ attachment_after }}*/
/*     </div>*/
/*     {% endif %} {% if more %} {{ more }} {% endif %} {% if footer %}*/
/*     <div class="view-footer">*/
/*         {{ footer }}*/
/*     </div>*/
/*     {% endif %} {% if feed_icons %}*/
/*     <div class="feed-icons">*/
/*         {{ feed_icons }}*/
/*     </div>*/
/*     {% endif %}*/
/*     </div>*/
