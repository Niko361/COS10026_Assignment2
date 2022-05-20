<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10026: Proxy Quiz" />
  <meta name="keywords" content="HTML, Forms" />
  <meta name="author" content="" />
  <link href="styles/style.css" rel="stylesheet"/>
  <!--Reference to external responsive CSS File-->
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
  <title>Proxy Introduction</title>
</head>
<body>
    <?php include 'header.inc'; ?>
	<div id="content">
	<?php include 'menu.inc'; ?>
	<div id="article1">
 
        <section>
            <h2>Responsive Design</h2>
            <p>By using the media attribute in a link tag that references a stylesheet, it is possible to have an additional CSS stylesheet that
                is selectively loaded based on the width of the screen the page is currently being displayed on. 
                This website uses such a selectively loaded CSS sheet (located in styles/responsive.css) that responsively modifies the layout
                of the pages based on the width of the the viewport it is loaded on, and can responsively react in
                real-time as the user changes the width of the window the page is loaded on.
            </p>
            <p>
                The main thing the responsive CSS changes is number of columns in the navigation menu at the top of the page, from 4 on a wide screen, to 2 on
                a narrower screen, and 1 on a very narrow screen.
            </p>
            <p>
                The other changes are that the width of the content is increased from 75% to 100%, so screen space isn't wasted,
                and the width of asides is increased from 30% to 90% to prevent them from becoming too narrow to read.
            </p>
            

        </section>
        <section>
            <div class='container'>
                <div class="container_content">
                    <div class="container_content_inner">
                        <div class="title">
                            <h2 class="animeh1">Animations of this website</h2>
                            <br>
                        </div>
                        <div class="img-inner">
                            <img src="images/giphy(1).gif"
                                alt="" class="container_img1" />
                        </div>
                        <div class="par"> 
                            <ul>
                                <li>
                                    <H4 class="animeh4">This Enhancement page</H4>
                                    <p>
                                        The @keyframes CSS at-rule controls the intermediate steps in a CSS animation sequence by defining styles for keyframes
                                        (or waypoints) along the animation sequence. This gives more control over the intermediate 
                                        steps of the animation sequence than transitions.
                                    </p>
                                    <p>
                                        The transform CSS property lets you rotate, scale, skew, or translate an element. It modifies the coordinate space of the CSS visual formatting model.
                                    </p>
                                    <a class="anime"  href="https://codepen.io/cassandraPaige/pen/MWYeqwZ">Click here to go to the referenced page</a><br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container_outer_img">
                    <div class="img-inner">
                        <img src='images/giphy(1).gif'
                            alt="" class="container_img" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php include 'footer.inc';?>
</body>
</html>