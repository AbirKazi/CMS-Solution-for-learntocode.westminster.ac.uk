<?php

class UpdateModel extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    
    public function udpdateDefinition()
    {
        $definitionId = $_POST["definitionId"];
        $definition   = $_POST["definition"];
        $data         = array(
            'definitionDescription' => $definition
        );
        $this->db->where('definitionId', $definitionId);
        $this->db->update('definition', $data);
        echo "success!";
    }
    
    
    public function updateNonExampleCodePanelPreDescription()
    {
        $id          = $_POST["id"];
        $description = $_POST["description"];
        $data        = array(
            'preDescription' => $description
        );
        $this->db->where('codePanelId', $id);
        $this->db->update('codepanel', $data);
        echo "success!";
    }
    
    public function updateNonExampleCodePanelItem()
    {
        $id    = $_POST["id"];
        $title = $_POST["title"];
        $data  = array(
            'title' => $title
        );
        $this->db->where('codePanelItemId', $id);
        $this->db->update('codepanelitem', $data);
        echo "success!";
    }
    
    public function updateNonExampleCodeBlock()
    {
        $id   = $_POST["id"];
        $code = $_POST["codeBlock"];
        $data = array(
            'code' => $code
        );
        $this->db->where('codeBlockId', $id);
        $this->db->update('codeblock', $data);
        echo "success!";
    }
    
    public function updateNonExampleCodeNote()
    {
        $id   = $_POST["id"];
        $note = $_POST["codeNote"];
        $data = array(
            'note' => $note
        );
        $this->db->where('codeNoteId', $id);
        $this->db->update('codenote', $data);
        echo "success!";
    }
    
    public function updateNonExampleCodeDescription()
    {
        $id          = $_POST["id"];
        $description = $_POST["codeDescription"];
        $data        = array(
            'description' => $description
        );
        $this->db->where('codeDescriptionId', $id);
        $this->db->update('codedescription', $data);
        echo "success!";
    }
    
    public function updateNonExampleCodeWarning()
    {
        $id      = $_POST["id"];
        $warning = $_POST["codeWarning"];
        $data    = array(
            'warning' => $warning
        );
        $this->db->where('codeWarningId', $id);
        $this->db->update('codewarning', $data);
        echo "success!";
    }
    
    public function deleteNonExampleCodeBlock()
    {
        $id = $_POST["id"];
        $this->db->where('codeBlockId', $id);
        $this->db->delete('codeblock');
        echo "success!";
    }
    
    public function deleteNonExampleCodeNote()
    {
        $id = $_POST["id"];
        $this->db->where('codeNoteId', $id);
        $this->db->delete('codenote');
        echo "success!";
    }
    
    public function deleteNonExampleCodeDescription()
    {
        $id = $_POST["id"];
        $this->db->where('codeDescriptionId', $id);
        $this->db->delete('codedescription');
        echo "success!";
    }
    
    public function deleteNonExampleCodeWarning()
    {
        $id = $_POST["id"];
        $this->db->where('codeWarningId', $id);
        $this->db->delete('codewarning');
        echo "success!";
    }
    
    public function deletePageDefinition()
    {
        $id = $_POST["id"];
        $this->db->where('definitionId', $id);
        $this->db->delete('definition');
        echo "success!";
    }
    
    public function addNewNonExampleCodeBlock()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeBlock       = $_POST["newNonExampleCodeBlock"];
        $data            = array(
            'code' => $codeBlock,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codeblock', $data);
    }
    
    public function addNewNonExampleCodeNote()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeNote        = $_POST["newNonExampleCodeNote"];
        $data            = array(
            'note' => $codeNote,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codenote', $data);
    }
    
    public function addNewNonExampleCodeDescription()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeDescription = $_POST["newNonExampleCodeDescription"];
        $data            = array(
            'description' => $codeDescription,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codedescription', $data);
    }
    
    public function addNewNonExampleCodeWarning()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeWarning     = $_POST["newNonExampleCodeWarning"];
        $data            = array(
            'warning' => $codeWarning,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codewarning', $data);
    }
    
    public function deleteNonExampleCodePanel()
    {
        $id = $_POST["id"];
        $this->db->where('codePanelId', $id);
        $this->db->delete('codepanel');
        echo "success!";
    }
    
    public function addNewCodePanel()
    {
        $title            = $_POST["title"];
        $preDescription   = $_POST["preDescription"];
        $isExample        = $_POST["isExample"];
        $navigationItemId = $_POST["navigationItemId"];
        $data             = array(
            'title' => $title,
            'isExample' => $isExample,
            'preDescription' => $preDescription,
            'href' => $title,
            'navigationItemId' => $navigationItemId
        );
        
        $this->db->insert('codepanel', $data);
        echo "success";
    }
    
    
    public function addNonExampleCodePanelItem()
    {
        $codePanelId             = $_POST["codePanelId"];
        $nonExampleCodePanelItem = $_POST["nonExampleCodePanelItem"];
        $data                    = array(
            'title' => $nonExampleCodePanelItem,
            'ariacontrols' => $nonExampleCodePanelItem,
            'codePanelId' => $codePanelId
        );
        
        $this->db->insert('codepanelitem', $data);
        echo "success";
    }
    
    public function updateExampleCodePanelItem()
    {
        $id    = $_POST["id"];
        $title = $_POST["title"];
        $data  = array(
            'title' => $title
        );
        $this->db->where('codePanelItemId', $id);
        $this->db->update('codepanelitem', $data);
        echo "success!";
    }
    
    public function updateExampleCodeBlock()
    {
        $id   = $_POST["id"];
        $code = $_POST["codeBlock"];
        $data = array(
            'code' => $code
        );
        $this->db->where('codeBlockId', $id);
        $this->db->update('codeblock', $data);
        echo "success!";
    }
    
    public function deleteExampleCodeBlock()
    {
        $id = $_POST["id"];
        $this->db->where('codeBlockId', $id);
        $this->db->delete('codeblock');
        echo "success!";
    }
    
    public function updateExampleCodeNote()
    {
        $id   = $_POST["id"];
        $note = $_POST["codeNote"];
        $data = array(
            'note' => $note
        );
        $this->db->where('codeNoteId', $id);
        $this->db->update('codenote', $data);
        echo "success!";
    }
    
    public function updateExampleCodeDescription()
    {
        $id          = $_POST["id"];
        $description = $_POST["codeDescription"];
        $data        = array(
            'description' => $description
        );
        $this->db->where('codeDescriptionId', $id);
        $this->db->update('codedescription', $data);
        echo "success!";
    }
    
    public function updateExampleCodeWarning()
    {
        $id      = $_POST["id"];
        $warning = $_POST["codeWarning"];
        $data    = array(
            'warning' => $warning
        );
        $this->db->where('codeWarningId', $id);
        $this->db->update('codewarning', $data);
        echo "success!";
    }
    
    
    
    
    public function deleteExampleCodeNote()
    {
        $id = $_POST["id"];
        $this->db->where('codeNoteId', $id);
        $this->db->delete('codenote');
        echo "success!";
    }
    
    public function deleteExampleCodeDescription()
    {
        $id = $_POST["id"];
        $this->db->where('codeDescriptionId', $id);
        $this->db->delete('codedescription');
        echo "success!";
    }
    
    public function deleteExampleCodeWarning()
    {
        $id = $_POST["id"];
        $this->db->where('codeWarningId', $id);
        $this->db->delete('codewarning');
        echo "success!";
    }
    
    public function deleteExampleCodePanel()
    {
        $id = $_POST["id"];
        $this->db->where('codePanelId', $id);
        $this->db->delete('codepanel');
        echo "success!";
    }
    
    public function addNewExampleCodeBlock()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeBlock       = $_POST["newExampleCodeBlock"];
        $data            = array(
            'code' => $codeBlock,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codeblock', $data);
    }
    
    public function addNewExampleCodeNote()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeNote        = $_POST["newExampleCodeNote"];
        $data            = array(
            'note' => $codeNote,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codenote', $data);
    }
    
    public function addNewExampleCodeDescription()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeDescription = $_POST["newExampleCodeDescription"];
        $data            = array(
            'description' => $codeDescription,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codedescription', $data);
    }
    
    public function addNewExampleCodeWarning()
    {
        $codePanelItemId = $_POST["codePanelItemId"];
        $codeWarning     = $_POST["newExampleCodeWarning"];
        $data            = array(
            'warning' => $codeWarning,
            'codePanelItemId' => $codePanelItemId
        );
        $this->db->insert('codewarning', $data);
    }
    
    public function addExampleCodePanelItem()
    {
        $codePanelId             = $_POST["codePanelId"];
        $nonExampleCodePanelItem = $_POST["exampleCodePanelItem"];
        $data                    = array(
            'title' => $nonExampleCodePanelItem,
            'ariacontrols' => $nonExampleCodePanelItem,
            'codePanelId' => $codePanelId
        );
        
        $this->db->insert('codepanelitem', $data);
        echo "success";
        
    }
}
