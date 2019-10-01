<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateController extends CI_Controller
{
    
    public function index()
    {
        $this->load->model('UpdateModel');
        
    }

    public function goToPage()
    {
     $navItemURL = $this->uri->segment(3);
     $navItemId = $this->uri->segment(4);
     echo "<script>console.log('".$navItemURL."')</script>";
     $this->load->model('NavigationModel');
     $this->load->model('PageModel');
     $data['navData'] = $this->NavigationModel->getNavigation();
     $data['navItmData'] = $this->NavigationModel->getNavigationItems();
     $data['pageTitle'] = $this->PageModel->getPageTitle($navItemId);
     $data['definition'] = $this->PageModel->getDefinition($navItemId);
     $data['codePanel'] = $this->PageModel->getCodePanel($navItemId);
     $data['codePanelItem'] = $this->PageModel->getCodePanelItem();
     $data['codeBlock'] = $this->PageModel->getCodeBlock();
     $data['codeDescription'] = $this->PageModel->getCodeDescription();
     $data['codeNote'] = $this->PageModel->getCodeNote();
     $data['codeWarning'] = $this->PageModel->getCodeWarning();
     $this->load->view($navItemURL, $data);

    }
    
    public function udpdateDefinition()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->udpdateDefinition();
        return $result;
    }
    
    public function updateNonExampleCodePanelPreDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateNonExampleCodePanelPreDescription();
        return $result;
    }
    
    public function updateNonExampleCodePanelItem()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateNonExampleCodePanelItem();
        return $result;
    }
    
    public function updateNonExampleCodeBlock()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateNonExampleCodeBlock();
        return $result;
    }
    
    public function updateNonExampleCodeNote()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateNonExampleCodeNote();
        return $result;
    }
    
    public function updateNonExampleCodeDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateNonExampleCodeDescription();
        return $result;
    }
    
    public function updateNonExampleCodeWarning()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateNonExampleCodeWarning();
        return $result;
    }
    
    public function deleteNonExampleCodeBlock()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteNonExampleCodeBlock();
        return $result;
    }
    
    public function deleteNonExampleCodeNote()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteNonExampleCodeNote();
        return $result;
    }
    
    public function deleteNonExampleCodeDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteNonExampleCodeDescription();
        return $result;
    }
    
    public function deleteNonExampleCodeWarning()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteNonExampleCodeWarning();
        return $result;
    }
    
    public function deletePageDefinition()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deletePageDefinition();
        return $result;
    }
    
    public function addNewNonExampleCodeNote()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewNonExampleCodeNote();
        return $result;
    }
    
    public function deleteNonExampleCodePanel()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteNonExampleCodePanel();
        return $result;
    }
    
    public function addNewCodePanel()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewCodePanel();
        return $result;
    }
    
    public function addNonExampleCodePanelItem()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNonExampleCodePanelItem();
        return $result;
    }
    
    public function addNewNonExampleCodeDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewNonExampleCodeDescription();
        return $result;
    }
    
    public function addNewNonExampleCodeWarning()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewNonExampleCodeWarning();
        return $result;
    }
    
    public function addNewNonExampleCodeBlock()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewNonExampleCodeBlock();
        return $result;
    }
    
    public function updateExampleCodePanelItem()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateExampleCodePanelItem();
        return $result;
    }
    
    public function updateExampleCodeBlock()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateExampleCodeBlock();
        return $result;
    }
    
    public function deleteExampleCodeBlock()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteExampleCodeBlock();
        return $result;
    }
    
    public function updateExampleCodeNote()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateExampleCodeNote();
        return $result;
    }
    
    public function updateExampleCodeDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateExampleCodeDescription();
        return $result;
    }
    
    public function updateExampleCodeWarning()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->updateExampleCodeWarning();
        return $result;
    }
    
    
    
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    
    
    public function deleteExampleCodeNote()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteExampleCodeNote();
        return $result;
    }
    
    public function deleteExampleCodeDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteExampleCodeDescription();
        return $result;
    }
    
    public function deleteExampleCodeWarning()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteExampleCodeWarning();
        return $result;
    }
    
    public function deleteExampleCodePanel()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->deleteExampleCodePanel();
        return $result;
    }
    
    public function addNewExampleCodeBlock()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewExampleCodeBlock();
        return $result;
    }
    
    public function addNewExampleCodeNote()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewExampleCodeNote();
        return $result;
    }
    
    public function addNewExampleCodeDescription()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewExampleCodeDescription();
        return $result;
    }
    
    public function addNewExampleCodeWarning()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addNewExampleCodeWarning();
        return $result;
    }
    
    public function addExampleCodePanelItem()
    {
        $this->load->model('UpdateModel');
        $result = $this->UpdateModel->addExampleCodePanelItem();
        return $result;
    }
    
    // this is very important, without this function decode_data throws error message 500 Internal Server Error
    private function decode_data($data)
    {
        $d       = $this->security->xss_clean($data);
        $request = json_decode($d, true);
        return $request;
    }
}
