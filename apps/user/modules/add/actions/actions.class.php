<?php

/**
 * add actions.
 *
 * @package    USER_MANAGEMENT
 * @subpackage add
 * @author     Sarah Aristain
 */
class addActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {

    }

    public function executeAdd(sfWebRequest $request)
    {
        $info = new Info();
        $info->setName($request->getParameter('uname'));
        $info->setBirthdate($request->getParameter('bdate'));
        $info->setAddress($request->getParameter('address'));
        $info->save();

        $this->redirect('list/index');
    }
}
