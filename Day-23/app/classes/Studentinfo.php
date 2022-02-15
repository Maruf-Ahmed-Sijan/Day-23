<?php


namespace App\classes;


class Studentinfo

{
    protected $name;
    protected $email;
    protected $contactNumber;
    protected $image;
    protected $value;
    protected $imagefile;
    protected $imageName;
    protected $imageDirectory;

    public function __construct($post=null, $file=null)
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->email = $post['Email'];
            $this->contactNumber = $post['Contact_number'];
            $this->image = $post['image'];
            $this->value = $post;
        }
        if ($file)
        {
            $this->imagefile = $file['image'];
        }
    }


    public function index()
    {
        $this->imageName = $_FILES['image']['name'];
        $this->imageDirectory = 'asset/img/upload/'. $this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'],$this->imageDirectory);
        echo 'success';


    }
}