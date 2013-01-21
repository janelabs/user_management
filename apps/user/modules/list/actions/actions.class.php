<?php

/**
 * list actions.
 *
 * @package    USER_MANAGEMENT
 * @subpackage list
 * @author     Sarah Aristain
 */
class listActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {
      $this->user = InfoPeer::getAllUser();
    }
}
