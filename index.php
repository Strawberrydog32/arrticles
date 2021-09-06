<!doctype html>

<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Oliver's article website</title>
      <link rel="icon" href="/favicon.ico">
      <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
      <header>

        <?php 
        if(isset($_COOKIE["auth"])) {
            if ($_COOKIE["auth"] == "abcde") {
                echo "Welcome, Strawog";
            } else {
                echo "authentification error, please clear your browser cookies";
            }
        } else {
            echo "<a href=login.php>Log in</a>";
        }
        ?>
        
      </header>
      <main>
        <h2>Main Section</h2>
      </main>
      <aside>
        <h2>Popular articles</h2>
        <ul>
            <li><article>
                <h3>Article 1 Title</h3>
                <p class="articlePreviewText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa id neque aliquam vestibulum morbi.</p>
                <img src="https://placeimg.com/80/60/tech" alt="Placeholder Image"width=80 height=60>
            </article></li>
             <li><article>
                <h3>Article 2 Title</h3>
                <p class="articlePreviewText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa id neque aliquam vestibulum morbi.</p>
                <img src="https://placeimg.com/80/60/tech" alt="Placeholder Image"width=80 height=60>
            </article></li>
            <li><article>
                <h3>Article 3 Title</h3>
                <p class="articlePreviewText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa id neque aliquam vestibulum morbi.</p>
                <img src="https://placeimg.com/80/60/tech" alt="Placeholder Image"width=80 height=60>
            </article></li>
        </ul>
        <h2>
    </body>
</html>

