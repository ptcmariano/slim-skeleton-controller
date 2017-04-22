<?php

namespace App\Controller;

use Interop\Container\ContainerInterface;

class MyController {
    protected $ci;
    public function __construct(ContainerInterface $ci) {
       $this->ci = $ci;
    }

    public function hello($request, $response, $args) {
        $hello = \App\Model\Hello::all();
        $args['registros'] = $hello;
        $this->ci->get('renderer')->render($response, "index.html", $args);
    }

    public function insert($request, $response, $args) {
        $new = new \App\Model\Hello;
        $new->name = 'more one';
        $new->save();
        return $response->withStatus(302)->withHeader('Location', '/hello');
    }
}
