<?php 
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}
?>
<?php require 'includes/toppage.php'; //include for header ?>
<?php
//php for self processing form

$errors = array();
$missing = array();
if (isset($_POST['send'])) {
    $to = 'moraycreative@gmail.com';
    $subject = 'Feedback from contact form';
    $expected = array('name', 'email', 'comments');
    $required = array('name', 'comments', 'email');
    $headers = "From: webmaster@test.com\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8";
    $authenticate = null;//'-fjeremy@moraycreative.com';
    require './includes/mail_process.php';
    if ($mailSent) {
        redirect_to('thanks.php');
    }
}
?>
        <div class="main-container">
            <div class="main wrapper clearfix">


                <!--form start -->
                <article>
                    <h1>Contact</h1>
                    <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
                    <p class="warning">Sorry your mail could not be sent.</p>
                    <?php } elseif ($errors || $missing) { ?>
                    <p class="warning">Please fix the item(s) indicated.</p>
                    <?php }?>
                    <form name="contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p>
                            <label for="name">Name:
                            <?php if ($missing && in_array('name', $missing)) { ?>
                            <span class="warning">Please enter your name</span>
                            <?php } ?>
                            </label>
                            <input type="text" name="name" id="name"
                            <?php //preserves user input when form does not submit
                            if ($errors || $missing) {
                                echo 'value="' . htmlentities($name, ENT_COMPAT, 'utf-8') . '"';
                            }
                            ?>
                            >
                        </p>
                        <p>
                            <label for="email">Email:
                            <?php if ($missing && in_array('email', $missing)) { ?>
                            <span class="warning">Please enter your email address</span>
                            <?php } elseif (isset($errors['email'])) { ?>
                            <span class="warning">Invalid email address</span>
                            <?php } ?>
                            </label>
                            <input type="text" name="email" id="email"
                            <?php //preserves user input when form does not submit
                            if ($errors || $missing) {
                                echo 'value="' . htmlentities($email, ENT_COMPAT, 'utf-8') . '"';
                            }
                            ?>
                            >
                        </p>
                        <p>
                            <label for="comments">Comments:
                            <?php if ($missing && in_array('comments', $missing)) { ?>
                            <span class="warning">You forgot to add your comments</span>
                            <?php } ?>
                            </label>
                            <textarea name="comments" id="comments"><?php
                            if ($errors || $missing) {
                                echo htmlentities($comments, ENT_COMPAT, 'utf-8');
                            }
                            ?></textarea>
                        </p>
                        <p>
                            <input type="submit" name="send" id="send" value="Send Comments">
                        </p>
                    </form>
   
                </article>
                <!--form end -->


                <!--<article>
                    <header>
                        <h1>Jeremy McClelland Frontend Demo</h1>
                        <p>This site is designed to demonstratate my frontend development skills. I used the html5 initializr boilerplate template as a starting point. You can see how far I've come by checking our the original code <a href="https://github.com/verekia/initializr-template" title="initializr source code">here</a>.</p>
                    </header>
                    <section>
                        <h2>Animated Banner</h2>
                        <p>For my banner I used multiple css3 transitions and javascript to animate the banner seen <a href="moraybanner.html" title="Moray Creative Banner">here</a>.</p>
                    </section>
                    <section>
                        <h2>CUBE gallery</h2>
                        <p>Animated cube gallery using css3 trasitions and transforms. Created by following lynda.com <i>CSS: Transitions and Transforms with Joseph Lowery</i> tutorials. Click <a href="pictureCube.html" title="Moray Creative Cube">here</a> to view.</p>
                    </section>
                    <section>
                        <h2>3D Carousel</h2>
                        <p>Animated carousel gallery using css3 trasitions and transforms. Created by following lynda.com <i>CSS: Transitions and Transforms with Joseph Lowery</i> tutorials. Click <a href="slideCarousel.html" title="Moray Creative Carousel">here</a> to view.</p>
                    </section>
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>-->

                <aside id="sideBox">
                    <img src="img/moraylogo.png" alt="Moray Creative Logo" title="Moray Creative Logo" id="MorayLogo">
                    <h3>About</h3>
                    <p>Moray Creative is the design alias of Jeremy McClelland. Jeremy is a graphic artist from Charleston, SC with a passion for design and illustration. Over the past eight years he has worked for several print houses and has been actively freelancing in the Charleston area.<br><br>

                    Currently, Jeremy works at Nelson Printing; designing and prepping projects for press. Shifting his focus from print, Jeremy is sharpening his skills as a frontend developer.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php require 'includes/footer.php'; //include for footer ?>