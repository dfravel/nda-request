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

    protected $allowAnonymous = true;
    public function actionIndex()
    {
        $this->requirePostRequest();
        $password = craft()->request->getPost('access-interview');

        if ($this->_validPassword($password)) {
            // not doing a cookie for this one, but leaving this code here as an example
            // $expires = time() + (60*60*24*7); // One week
            // setcookie(md5('exariNDA'), 1, $expires, '/');

            $this->redirect($this->_getRedirect());
        } else {
            craft()->urlManager->setRouteVariables(array(
                'error' => 'Oops! That Password doesn\'t seem to match'
            ));
        }
    }

    private function _getRedirect()
    {
        // 2767 represents the global data set that we're using for the NDA Interview
        $globalSet = craft()->globals->getSetById(2768);

        // we have a field in that to define the redirect on success
        $redirect = $globalSet->websiteLink;

        return $redirect;
    }


    private function _validPassword($pwEntered)
    {
        // 2767 represents the global data set that we're using for the NDA Interview
        $globalSet = craft()->globals->getSetById(2768);

        // Get target password
        $pwValid = $globalSet->passwordProtection;

        // Return whether password matches
        return ($pwEntered === $pwValid);
    }
}
