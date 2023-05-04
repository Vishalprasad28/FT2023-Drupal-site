<?php 
namespace Drupal\vishal_module\Controller;
use Drupal\Core\Controller\ControllerBase;

class VishalController extends ControllerBase {
    public function basicFunction() {
        return [
            '#markup' => '<h5> Hello World</h5>',
            '#title' => 'This is the Custom Module i have made'
        ];
    }
    public function anotherOne() {
        $item = array(
            'title' => 'Hello There',
            'body' => 'How Are You'
        );
        return [
            '#theme' => 'anotherOne-page',
            '#items' => $item
        ];
    }
}
