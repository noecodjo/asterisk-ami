Asterisk AMI
============

PHP 5.3 abstraction of Asterisk 1.6 AMI

Installation
------------

Add to your `composer.json`:

    {"require":{
        "wehup/asterisk-ami": "dev-master"
    }}

Run:

    composer install

Usage
-----

    // Create the LoginRequest
    $loginRequest = Wehup\AMI\Request\LoginRequest('username', 'password');
    
    // Create the Manager
    $manager = new Wehup\AMI\Manager('127.0.0.1', 8088, 'asterisk', $loginRequest);
    
    // Create the request
    $request = new Wehup\AMI\Request\PingRequest();
    
    // Send request
    $response = $manager->send($request);

Supported commands
------------------

* [DBDel](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_DBDel)
* [DBDelTree](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_DBDelTree)
* [DBGet](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_DBGet)
* [DBPut](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_DBPut)
* [ListCommands](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_ListCommands)
* [Login](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_Login)
* [Ping](https://wiki.asterisk.org/wiki/display/AST/ManagerAction_Ping)
