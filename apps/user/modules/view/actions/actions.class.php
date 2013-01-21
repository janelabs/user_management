<?php

/**
 * view actions.
 *
 * @package    USER_MANAGEMENT
 * @subpackage view
 * @author     Sarah Aristain
 */
class viewActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {
        $uid = $request->getParameter('id');

        $userInfo = InfoPeer::retrieveByPK($uid);

        $this->userName = $userInfo->getName();
        $this->birthDate = date( 'F j, Y', strtotime( $userInfo->getBirthdate() ) );
        $this->address = $userInfo->getAddress();
    }
}
