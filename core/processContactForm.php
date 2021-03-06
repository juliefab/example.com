<?php

//Include non-vendor files
require '../core/About/src/Validation/Validate.php';
require '../vendor/autoload.php';
require '../../keys.php';
//Declare Namespaces
use About\Validation;
use Mailgun\Mailgun;
//Validate Declarations
$valid = new About\Validation\Validate();
$input = filter_input_array(INPUT_POST);
$message = null;  // otherwise throws an error message
if(!empty($input)){

    $valid->validation = [
        'first_name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your first name'
        ]],
        'last_name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your last name'
        ]],
        'email'=>[[
                'rule'=>'email',
                'message'=>'Please enter a valid email'
            ],[
                'rule'=>'notEmpty',
                'message'=>'Please enter an email'
        ]],
        'subject'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter a subject'
        ]],
        'message'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please add a message'
        ]],
    ];


    $valid->check($input);

    if(empty($valid->errors) && !empty($input)){
        $message = "<div class=\"success\">Success!Your form has been submitted.</div>";

        # Instantiate the client.
$mgClient = new Mailgun($mailgunKey);
$domain = "sandbox6c420695c3e04d45a74bfa75cb3be647.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
          array('from'    => "{$input['first_name']} {$input['last_name']} <{$input["email"]}>",
                'to'      => 'Julie <juliefab2009@gmail.com>',
                'subject' =>  $input ['subject'],
                'text'    =>  $input ['message']
            ));

//var_dump($result);
    }else{
        $message = "<div class=\"error\">Error! Please correct the errors below.</div>";
}


}
