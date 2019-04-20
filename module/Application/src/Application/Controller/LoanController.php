<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 *
 * @author otaba
 *        
 */
class LoanController extends AbstractActionController
{

    public function requestAction(){
        $viewModel = new VoewModel;
        return $viewModel;
    }
    
    public function allAction(){
        $view = new ViewModel();
        return $view;
    }
    
    public function repayAction(){
        $view = new ViewModel();
        return $view;
    }
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
}

