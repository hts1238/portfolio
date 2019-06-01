<html lang="en">
<head>
    <title>Timur: My portfolio</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/main_styles.css">
    <meta charset="utf-8">
</head>


<body>

    <header>

        <div id="title">
            <h1>
                Portfolio
            </h1>
        </div>

        <div id="links">
            <div>
                <a href="#"><p class="before"></p><p>All works</p></a>
            </div>
            <div>
                <a href="#"><p class="before"></p><p>About</p></a>
            </div>
            <div>
                <a href="#"><p class="before"></p><p>Prices</p></a>
            </div>
            <div>
                <a href="#"><p class="before"></p><p>Contacts</p></a>
            </div>
            <div>
                <a href="#"><p class="before"></p><p>Feedback</p></a>
            </div>
        </div>
    </header>


    <main>
        <div id="top">
            <div id="title_sections">
                <h1>My projects</h1>
            </div>
            <div id="menu_sections">
                <div id="active">
                    <h2>Most popular</h2>
                </div>
                <div>
                    <h2>All projects</h2>
                </div>
                <div>
                    <h2>In developing</h2>
                </div>
            </div>
        </div>
        <div id="sections">
            <?php
                foreach ($projects as $name => &$project) { 
                    echo '
                        <div id="'.$project["id"].'">
                            <div class="header_sections" style="background-image: url(
                                styles/img/'.$project["photo_link"].'
                                )">
                                <h3>'.$name.'</h3>
                            </div>
                            <p>'.
                                $project["description"]
                            .'</p>
                            <a href="'.$project["link"].'" target="_blank">Link to work</a>
                        </div>
                    ';
                }
            ?>
        </div>
    </main>


    <footer>
        
    </footer>

</body>
</html>