<!DOCTYPE html>
<html>
<body>

<h2>The __LINE__ Constant</h2>
<p>This constant returns the current line number:</p>

<?php
echo __LINE__;
?>
 
</body>
</html>



// 
<!DOCTYPE html>
<html>
<body>

<h2>The __DIR__ Constant</h2>
<p>This constant returns the directory name of the file:</p>

<?php
echo __DIR__;
?>
 
</body>
</html>            


<?php

// Shows the full path of this file
echo __FILE__ . "\n";

// Shows the directory of this file
echo __DIR__ . "\n";

// Shows the current line number
echo __LINE__ . "\n";


function demoFunction() {

    // Shows the name of the current function
    echo __FUNCTION__ . "\n";

    // Shows the line number inside the function
    echo __LINE__ . "\n";
}

demoFunction();


class DemoClass {

    // Method inside a class
    public function demoMethod() {

        // Shows the class name
        echo __CLASS__ . "\n";

        // Shows class name + method name
        echo __METHOD__ . "\n";

        // Shows the method name only
        echo __FUNCTION__ . "\n";
    }
}

$obj = new DemoClass();
$obj->demoMethod();


trait DemoTrait {

    // Trait example
    public function traitMethod() {

        // Shows the trait name
        echo __TRAIT__ . "\n";
    }
}

class TraitUser {
    use DemoTrait;
}

$t = new TraitUser();
$t->traitMethod();


namespace MyNamespace {

    // Shows the namespace name
    echo __NAMESPACE__ . "\n";

    class SampleClass {}
    
    // Returns class name as string
    echo SampleClass::class . "\n";
}

