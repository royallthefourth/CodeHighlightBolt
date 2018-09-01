<?php

namespace Bolt\Extension\royallthefourth\CodeHighlightBolt;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\Snippet\Snippet;
use Bolt\Asset\File\Stylesheet;
use Bolt\Asset\Target;
use Bolt\Extension\SimpleExtension;

/**
 * CodeHighlightBolt extension class.
 *
 * @author Royall Spence <royall@royall.us>
 */
class CodeHighlightBoltExtension extends SimpleExtension
{
    public function getDisplayName()
    {
        return "Code Highlight";
    }

    /**
     * {@inheritdoc}
     */
    protected function registerAssets()
    {
        $config = $this->getConfig();
        $theme = $config['theme'];

        $jsInit = new Snippet();
        $jsInit->setCallback([$this, 'jsInitSnippet'])
            ->setLocation(Target::AFTER_JS)
            ->setPriority(99)
        ;

        return [
            new JavaScript('assets/highlightjs/highlight.pack.min.js'),
            new Stylesheet("assets/highlightjs/styles/{$theme}.css"),
            $jsInit,
        ];
    }

    public function jsInitSnippet()
    {
        return '<script>hljs.initHighlightingOnLoad();</script>';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultConfig()
    {
        return [
            'theme' => 'monokai'
        ];
    }
}
