 <?php   defined('SYSPATH') or die('No direct script access.');
 
 class Controller_News extends Controller_Common {
 
 	
 	// Страница новостей
 	public function action_news()
 	{
 		$content = View::factory('/news/news');
 		$this->template->content = $content;
 	}
 	
 	
 }