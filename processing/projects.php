<?php
    include_once("../paths.php");
    $str = $_GET["str"];

    $allworks = [
        "Store" => [
            "id" => "1",
            "description" => "The store in the initial stage of development. I completely lead its creation from the beginning.",
            "link" => "http://store.tim-ur.ru/store/",
            "photo_link" => IMG_FOLDER . "img1.png",
            "tags" => ["hidden", "popular", "develop"]
        ],
        "Diploma generator" => [
            "id" => "2",
            "description" => "My school project that simplifies the process of creating and printing diplomas. This project is used by many teachers in my school. I created this application alone.",
            "link" => "http://sch9diplom.ru/testPFS/test.html",
            "photo_link" => IMG_FOLDER."img2.png",
            "tags" => ["hidden", "popular"]
        ],
        "Game \"Bulls and Cows\"" => [
            "id" => "3",
            "description" => "One-page textual intellectual game \"Bulls and Cows\". It was created to practice in JavaScript.",
            "link" => "https://tim-ur.ru/perProg/personalProject.html",
            "photo_link" => IMG_FOLDER."img3.png",
            "tags" => []
        ],
        "Calculator" => [
            "id" => "4",
            "description" => "Console-app parsing and calculating mathematics expressions in C++",
            "link" => "https://github.com/hts1238/calculator",
            "photo_link" => IMG_FOLDER."test/test4.jpg",
            "tags" => ["popular"]
        ],
        "ДОМашний" => [
            "id" => "5",
            "description" => "Сайт сети магазинов хозяйственных товаров в Перми. Написан полностью двумя людьми меньше, чем за месяц",
            "link" => "https://dom59reg.ru",
            "photo_link" => IMG_FOLDER."test/test5.jpg",
            "tags" => ["popular", "develop"]
        ],
        "Messenger" => [
            "id" => "6",
            "description" => "Messenger with web and desktop version. Backend on PHP and Desktop on Python with PyQT",
            "link" => "https://messenger.tim-ur.ru",
            "photo_link" => IMG_FOLDER."test/test6.jpg",
            "tags" => ["popular", "develop"]
        ],/*
        "Title #7" => [
            "id" => "7",
            "description" => "Aenean ut leo erat. Maecenas suscipit, nunc eget",
            "link" => "#",
            "photo_link" => IMG_FOLDER."test/test7.jpg",
            "tags" => ["popular"]
        ],/*
        "Title #8" => [
            "id" => "8",
            "description" => "Phasellus vulputate lobortis arcu in rhoncus. Phasellus dictum convallis velit, quis imperdiet orci cursus eu. Nulla maximus",
            "link" => "#",
            "photo_link" => IMG_FOLDER."test/test8.jpg",
            "tags" => ["develop"]
        ],/*
        "Title #9" => [
            "id" => "9",
            "description" => "Nulla volutpat posuere lorem, eu scelerisque varius",
            "link" => "#",
            "photo_link" => IMG_FOLDER."test/test9.jpg",
            "tags" => ["popular", "develop"]
        ]/**/
    ];

    $popular = [];
    $develop = [];

    foreach ($allworks as $name => $project) {
        foreach($project["tags"] as $tag) {
            if ($tag == "popular") $popular[$name] = $project;
            if ($tag == "develop") $develop[$name] = $project;
        }
    }

    if ($str == "allworks") {
        foreach ($allworks as $name => &$project) {
            if (!in_array("hidden", $project["tags"])) {
                echo '
                    <div id="'.$project["id"].'">
                        <div class="header_sections" style="background-image: url('.$project["photo_link"].')">
                            <h3>'.$name.'</h3>
                        </div>
                        <p>'.$project["description"].'</p>
                        <a href="'.$project["link"].'" target="_blank">Link to work</a>
                    </div>
                ';
            }
        }
    } else if ($str == "popular") {
        foreach ($popular as $name => &$project) {
            if (!in_array("hidden", $project["tags"])) {
                echo '
                    <div id="'.$project["id"].'">
                        <div class="header_sections" style="background-image: url('.$project["photo_link"].')">
                            <h3>'.$name.'</h3>
                        </div>
                        <p>'.$project["description"].'</p>
                        <a href="'.$project["link"].'" target="_blank">Link to work</a>
                    </div>
                ';
            }
        }
    } else if ($str == "develop") {
        foreach ($develop as $name => &$project) {
            if (!in_array("hidden", $project["tags"])) {
                echo '
                    <div id="'.$project["id"].'">
                        <div class="header_sections" style="background-image: url('.$project["photo_link"].')">
                            <h3>'.$name.'</h3>
                        </div>
                        <p>'.$project["description"].'</p>
                        <a href="'.$project["link"].'" target="_blank">Link to work</a>
                    </div>
                ';
            }
        }
    }

?>
