<html>
<head>
<title>PHP Test</title>
</head>

<body>
<?php
    
    
    $rootPath = "";
    $phpfiles = glob($directory . "*.html");
    foreach ($phpfiles as $phpfile)
    {
        echo "<a href=\"$rootPath/$phpfile\">$phpfile</br></a>";
    }
    
    /*$files = scandir('./archive');
    sort($files); // this does the sorting
    foreach($files as $file){
        echo'<a href="/archive'.$file.'">'.$file.'</a>';
    }
    
    
    ?>



</body>
</html>
