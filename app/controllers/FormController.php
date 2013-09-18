<?php

class FormController extends BaseController {


    public function addUser()
    {
        $json = array('status' => rand(0, 1));

        if($json['status'] === 0){
            $json['errors'] = array('name' => 'Name required', 'email' => 'Please provide valid email');
        }

        return Response::json($json);
    }

}
