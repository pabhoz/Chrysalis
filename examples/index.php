<?php

require "../src/Chrysalis.php";

$chrysalis = new Chrysalis("localhost", "mypart", "root", "");

$chrysalis->abstractDb(true);

$additionalMethod = "    public function getMyVars(){\n        return "
        . "get_object_vars(".'$this'.");\n    }\n";

/*$chrysalis->generateClass($chrysalis->tables[0],"../output/",["extends"=>"BModel",
    "additionalMethods"=>[$additionalMethod]]);*/

$chrysalis->generateAllClasses("../output/",["extends"=>"BModel", "parent_construct" => true,
    "additionalMethods"=>[$additionalMethod]]);
