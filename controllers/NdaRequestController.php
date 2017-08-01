<?php
/**
 * NDA Request plugin for Craft CMS
 *
 * NdaRequest Controller
 *
 *
 * @author    Dave Fravel
 * @copyright Copyright (c) 2017 Dave Fravel
 * @link      davefravel.com
 * @package   NdaRequest
 * @since     0.1.0
 */

namespace Craft;

class NdaRequestController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     * Handle a request going to our plugin's index action URL, e.g.: actions/ndaRequest
     */
    public function actionIndex()
    {
    }

    public function actionValidate()
    {
    }
}
