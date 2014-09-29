 <?php   defined('SYSPATH') or die('No direct script access.');
 
 class Controller_Static extends Controller_Common {
 //Страница о сайте
    public function action_about()
    {
        $content = View::factory('/static/about');
        $this->template->content = $content;
       
    }
 
    // Страница контактов    
    public function action_contacts()
    {
        $content = View::factory('/static/contacts');
        $this->template->content = $content;
    }	
    // Страница помощи 
    public function action_help()
    {
    	$content = View::factory('/static/help');      
    	$this->template->content = $content;
        
        /*$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*100; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
	        }
	    }
	}
}  */
    }
 
    // Страница пользовательское соглашение
    public function action_termsofservice()
    {
    	$content = View::factory('/static/termsofservice');
    	$this->template->content = $content;
    }
     // Страница обратной связи
    public function action_feedback()
    {
    	$content = View::factory('/static/feedback');
       
         
        
    	$this->template->content = $content;
        
        
    }
   
 }