<?php
require_once 'conf.php';

$directories = ["Forms", "Layouts", "Global", "Proc", "Fncs"];

spl_autoload_register(function ($className) use ($directories) {
    foreach ($directories as $directory) {
        $filePath = __DIR__ . "/$directory/" . $className . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
            return;
        }
    }
});

// create an instance of HelloWorld
$ObjSendMail = new SendMail();
$ObjForm = new forms();
$ObjLayout = new layouts();

$ObjAuth = new Auth($conf);
$ObjFncs = new fncs();

$ObjAuth->signup($conf, $ObjFncs, $lang, $ObjSendMail);