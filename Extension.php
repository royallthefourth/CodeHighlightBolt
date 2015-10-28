<?php
// Code Highlight Extension for Bolt, by Royall Spence (original version by Mespeche)

namespace Bolt\Extension\royallthefourth\CodeHighlightBolt;

class Extension extends \Bolt\BaseExtension
{

    public function getName()
    {
        return "Code Highlight";
    }

    /**
     * Initialize Code Highlight. Called during bootstrap phase.
     */
    function initialize()
    {

        // Add javascript file
        $this->addJavascript("assets/highlightjs/highlight.pack.min.js");

        // Add CSS file
        $theme = $this->config['theme'];
        $this->addCSS("assets/highlightjs/styles/" . $theme . ".css");

        $snippet = "<script>hljs.initHighlightingOnLoad();</script>";

        // Add string snippet to endofbody
        $this->addSnippet('endofbody', $snippet);

        // Initialize the Twig function
        $this->addTwigFunction('highlight', 'twigHighlight');

    }

    /**
     * Twig function {{ highlight() }} in Code Highlight extension.
     */
    function twigHighlight($name="")
    {

        $html = $name;

        return new \Twig_Markup($html, 'UTF-8');

    }


}


