<?php
namespace prjDoacao\app\Views\index;

use prjDoacao\sys\View as View;
use prjDoacao\app\Views\partials as partials;

/**
 * Index view
 */
class index extends View
{
   public function render()
   {
       $head = new partials\head();
       $head->setIncludeCss('css/intro.css');
       $head->setIncludeScript('js/index.js');
       $head->render();
       $nav = new partials\nav();
       $nav->render(true);
       parent::render();
   }
   
}
