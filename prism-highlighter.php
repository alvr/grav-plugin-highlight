<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use \Grav\Common\Grav;
use \Grav\Common\Page\Page;

class PrismPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPageInitialized' => ['onPageInitialized', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPageInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $defaults = (array) $this->config->get('plugins.prism');

        /** @var Page $page */
        $page = $this->grav['page'];
        if (isset($page->header()->prism)) {
            $this->config->set('plugins.prism', array_merge($defaults, $page->header()->prism));
        }
        if ($this->config->get('plugins.prism.enabled')) {
            $this->enable([
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
            ]);
        }
    }

    /**
     * if enabled on this page, load the JS + CSS theme.
     */
    public function onTwigSiteVariables()
    {
        $theme = $this->config->get('plugins.prism.theme') ?: 'default';
        $this->grav['assets']->addCss('plugin://prism/css/'.$theme.'.css');
        $this->grav['assets']->addJs('plugin://prism/js/prism.js');
    }
}
