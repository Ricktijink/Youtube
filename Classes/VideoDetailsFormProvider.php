<?php

class VideoDetailsFormProvider {

    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function createUploadForm(){

        return '
            <form action="processing.php" method="POST">
                '.$this->createFileInput().'
                '.$this->createTitleInput().'
                '.$this->createDescriptionInput().'
                '.$this->createPrivacyInput().'
                '.$this->createCategoryInput().'
                '.$this->createUploadButton().'
            </form>
        ';
    }

    private function createFileInput(){
        return '
            <form>
                <div class="form-group">
                    <label for="fileInput">Upload a file</label>
                    <input type="file" class="form-control-file" id="fileInput" name="fileInput" required>
                </div>
            </form>
        ';
    }
    
    private function createTitleInput(){
        return '
            <div class="form-group">
                <label for="titleInput">Video Title</label>
                <input class="form-control" id="titleInput" type="text" placeholder="Enter video title" name="titleInput">
            </div>
        ';
    }
    
    private function createDescriptionInput(){
        return '
            <div class="form-group">
                <label for="descriptionInput">Video Description</label>
                <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Enter video description" name="descriptionInput"></textarea>
            </div>
        ';
    }
    
    private function createPrivacyInput(){
        return '
            <div class="form-group">
                <label for="privacyInput">Video Visibility</label>
                <select class="form-control" id="privacyInput" name="privacyInput">
                    <option value="0">Private</option>
                    <option value="1">Public</option>
                </select>
            </div>
        ';
    }
    
    private function createCategoryInput(){
        $html = '
            <div class="form-group">
                <label for="categoryInput">Video Category</label>
                <select class="form-control" id="categoryInput" name="categoryInput">
        ';
                    
        $query = $this->con->prepare("SELECT * FROM categories");
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $html .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
        }

        $html .= '
                </select>
            </div>
        ';

        return $html;
    }

    private function createUploadButton(){
        return '
            <button type="submit" class="btn btn-primary" name="uploadButton">Upload</button>
        ';
    }

}