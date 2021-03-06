<?php
/**
 * @file
 * @package leprogress
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
    exit;
}

require_once LEPROGRESS_TRUST_PATH . '/class/AbstractAction.class.php';

/**
 * Leprogress_Admin_IndexAction
**/
class Leprogress_Admin_IndexAction extends Leprogress_AbstractAction
{
    /**
     * getDefaultView
     * 
     * @param   void
     * 
     * @return  Enum
    **/
    public function getDefaultView()
    {
        return LEPROGRESS_FRAME_VIEW_SUCCESS;
    }

    /**
     * executeViewSuccess
     * 
     * @param   XCube_RenderTarget  &$render
     * 
     * @return  void
    **/
    public function executeViewSuccess(&$render)
    {
        $render->setTemplateName('admin.html');
        $render->setAttribute('adminMenu', $this->mModule->getAdminMenu());
    }
}

?>