<?php

/**
 * edit actions.
 *
 * @package    USER_MANAGEMENT
 * @subpackage edit
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class editActions extends sfActions
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
        $this->uid = $uid;
        $this->userName = ucwords($userInfo->getName());
        $this->birthDate = date( 'F j, Y', strtotime( $userInfo->getBirthdate() ) );
        $this->address = ucwords($userInfo->getAddress());
    }

    public function executeSave(sfWebRequest $request)
    {
        $user = InfoPeer::retrieveByPK($request->getParameter('uid'));
        $user->setName($request->getParameter('uname'));
        $user->setBirthdate(date('Y-m-d', strtotime($request->getParameter('bdate'))));
        $user->setAddress($request->getParameter('address'));
        $user->save();

        $this->redirect('list/index');
    }
}
