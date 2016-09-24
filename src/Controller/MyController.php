<?php

namespace App\Controller;

use Interop\Container\ContainerInterface;

class MyController {
   protected $ci;
   //Constructor
   public function __construct(ContainerInterface $ci) {
       $this->ci = $ci;
   }

   public function hello($request, $response, $args) {
        $args['registros'] = $this->ci->get('database')->table("hello")->where('id', '>', 0)->get();
        $this->ci->get('renderer')->render($response, "index.html", $args);
   }
}
