<?php
$pageTitle="Home";
  ob_start() ?>

    <!-- Services -->
    <div class="Home-Services container-fluid py-5 bg-light">
        <h1 class="text-md-center py-4 display-3"> OUR SERVICES </h1>
        <div class="d-flex justify-content-around p-4 mt-3">
            <div class="d-flex flex-column p-5 mx-2">
                <img class="align-self-center" width="100px" height="100px" src="templates/styles/signin.png" alt="sigin logo"/>
                <h4 class="text-center">Sign up</h4>
                <p class="align-self-center lead font-italic text-muted">
                    Sign up now, it's quick and easy. Choose to become a
                    mentee or mentor with just a click. Enter your details
                    in a smooth process, and if require any help, please 
                    contact us to help you get the best experience. 
                </p>
            </div>
            <div class="d-flex flex-column p-5 mx-2">
                <img class="align-self-center" width="100px" height="100px" src="templates/styles/chat.png" alt="chat logo"/>
                <h4 class="text-center">Chat</h4>
                <p class="align-self-center lead font-italic text-muted">
                    Chat with mentors from all over the world. Our chat 
                    system is easy to use and quick to instant message your 
                    mentors, so you don't miss anything with your learning.
                    Comes with all the functions of the latest chat systems 
                    in the market with more options available.   
                </p>
            </div>
            <div class="d-flex flex-column p-5 mx-2">
                <img class="align-self-center" width="100px" height="100px" src="templates/styles/learn.png" alt="learn logo"/>
                <h4 class="text-center h4" >Learn</h4>
                <p class="align-self-center lead font-italic text-muted">
                    Never fall behind in your learning ever again.
                    Everything is in one place at your disposable and 
                    can be accessed anywhere. Can learn from many mentors
                    about any topic you want to bring you up-to-date with 
                    any technology. 
                </p>
            </div>
        </div>
    </div>
    <!-- END Services -->
    
    <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>