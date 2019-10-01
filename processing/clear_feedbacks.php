<?php
    $file = fopen('feedbacks.php', 'w');
    $str = '<?php
$arr = [[
    "name" => "/QJD4HD+VrjoeVdDbUBbRg==",
    "email" => "GiKXBIlnbqXP95dbxRFC4w==",
    "time" => "/q1jhpa6erpLBOiM16/8j2w/juoJBoKFKs2erd9ItBk=",
    "feedback" => "bjxX1ZrBLcZdFWHw5se7gjeqExqxAzGO9BPRqgdsrp9PuXXGY5ez2ILri2WuC5STlxemkJIe9uNXhA6AC+VHRkSJhPvK5ediJCA6ClQO2wvzCQhs9c+/tZ+LBTTDxk30LeOFCGq6NE+CFL1KnuDpUQ=="
]];
?>';
    fwrite($file, $str);
    fclose($filee);
    echo "Clearing feedbacks is complited";
?>
