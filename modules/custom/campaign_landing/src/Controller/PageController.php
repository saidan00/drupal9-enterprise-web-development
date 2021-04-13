<?php

/**
 * @file
 * Contains \Drupal\campaign_landing\Controller\PageController class.
 */

namespace Drupal\campaign_landing\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for campaign_landing module.
 */
class PageController extends ControllerBase
{
    /**
     * Returns markup for our landing page.
     */
    public function index()
    {
        $name = \Drupal::currentUser()->getDisplayName();

        $renderable = [
            '#theme' => 'campaign_landing_template',
            '#name' => $name,
        ];

        return $renderable;
    }
}
