<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title> Welcome to Micro-Service Tutorial</title>

    <meta name="author" content="your name" />
    <meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

    <div id="page">
        <div id="logo">
            <h1><a href="/" id="logoLink">Welcome to our Big Data Lab as a Service</a></h1>
        </div>
        <div id="nav">
            <ul>
                <li><a href="#/home.html">Docker  Registry</a></li>
                <li><a href="#/about.html">Kubernetes  Registry</a></li>
                <li><a href="#/contact.html">App registry</a></li>
            </ul>
        </div>
        <div id="content">
            <h2>Home</h2>
            <p>
                Thisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii is our first attemps towards building BDLaaB.
                The objective of this tutorial is to help you to understand how:
                    <ul>
                        <li>Creating a docker file</li>
                        <li>Creating a docker image</li>
                        <li>Pushing the image to the docker registry</li>
                        <li>Running one or many docker container</li>
                        <li>Running application on the running containers</li>
                        <li>Composing docker images</li>
                        <li>etc.</li>
                    </ul>


            </p>
            <p>
                Later on, we will introduce Kubernetes, and we will learn how orchestrating containers with kubernetes.
            </p>
        </div>
        <div>
          <?php
            echo 'bonjouuu';
            $servername = "172.18.0.2";
            $username = "root";
            $password = "root";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, "test");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
          ?>
        </div>
        <div id="footer">
            <p>
                Webpage made by <a href="/" target="_blank">Yehia TAHER (yehia.taher@gmail.com)</a>
            </p>
        </div>
    </div>
</body>
</html>
