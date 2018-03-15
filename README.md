# Chrysalis
[![Version](https://img.shields.io/badge/version-1.1.1-red.svg)]()
[![PHP Version](https://img.shields.io/badge/PHP-7.1-red.svg)]()
[![CLI Version](https://img.shields.io/badge/CLI-1.0.3-blue.svg)]()
[![License](https://img.shields.io/badge/Licence-Apache--2.0-green.svg)]()

Chrysalis is a PHP Library create by [@Pabhoz](https://github.com/pabhoz) to generate classes from your project Data Model using PDO.

### Getting Started
Chrysalis v1.0.0 just needs to be instanciated with a few parameters and then just be run. 🙌

**Step 1**. Clone Chrysalis into your project using:
```bash
~$ git clone https://github.com/pabhoz/Chrysalis/
```

**Step 2**. Require it!:
```php
require "[path/to/libraries]/Chrysalis.php";
```

**Step 3**. Instanciate it!:
```php
$chrysalis = new Chrysalis("localhost", "db_name", "db_user", "db_password");
```

**Step 4**. Abstract your database, so your tables will be loaded:

Now, you can do it sliently:
```php
$chrysalis->abstractDb();
```

Or you can do it with a log:
```php
$chrysalis->abstractDb(true);
```
**Step 5**. Abstract your database, so your tables will be loaded:

Now, you can do it sliently:
```php
$chrysalis->abstractDb();
```

Or you can do it with a log:
```php
$chrysalis->abstractDb(true);
```
**Step 6**. Generate them!:

You can generate de Model of an specific table by using generateClass method:
```php
chrysalis->generateClass($chrysalis->tables[0],"../output/");
```

Or you can generate them all using generateAllClasses method and passing the output folder location:
```php
$chrysalis->generateAllClasses("../output/");
```

**Note:** The output folder must have 777 permissions.
```bash
~$ sudo chmod 777 output
```
And thats all!

**Optional Customize them **. extend, constructors, methods, just add them all by passing additionalParams!:
```php
//Custom Method to add to my generated classes
$additionalMethod = "    public function getMyVars(){\n        return "
        . "get_object_vars(".'$this'.");\n    }\n";
        
$chrysalis->generateAllClasses("../output/",["extends"=>"BModel", "parent_construct" => true,
    "additionalMethods"=>[$additionalMethod]]);
```
**Current avialable Additional Params to Generate Classes:**

extends = String; defines the class to extend by the generated class

parent_construct = boolean; true to use parent construct

additionalMethods = [String]; Array of functions as strings oyu want to add to generated class

**Documentation** is under development but for now you can check out the explanations videos:
[Chrysalis v1.0.0 Explanation Video (Spanish)!](https://youtu.be/kDH0Goa_fYg)
Chrysalis v1.0.0 Explanation video (English)! -> Comming soon.


