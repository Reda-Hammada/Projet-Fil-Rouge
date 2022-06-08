<?php


include '../../managers/emailManager.php';
include  '../../entites/email.php';

$email = new Email();
$emailManager = new Emailmanager();

if(isset($_POST['']))







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/style.css">
    <link rel="stylesheet" href="asset/style/flexboxgrid.css">
    <link rel='stylesheet' href="asset/style/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header>
        <nav class='container'>
            <div class='row'>
                <div class="col-xs-4 col-md-2 col-lg-2 logo">
                    <h1>InvoiceMe</h1>
                </div>
                <div class="col-xs-7 col-lg-5 navLinks">
                    <ul>
                        <li>
                           <a href="index.php">Home</a>
                        </li>
                        <li>
                            Features
                        </li>
                        <li>
                            Contact
                        </li>
                        <li>
                            About
                        </li>
                    </ul>
                </div>
                <div class="col-xs-8 col-lg-3 buttonsContainer">
                    <button class='logIn'><a href="auth/login.php">Login</a></button>
                    <button class='signUp'><a href='auth/register.php'>Sign up</a></button>
                </div>
                
                
                 </div>

            <div>
        </nav>
    </header>
    <section class=' container heroSection'>
        <div class='row '>
            <div class='col-lg-5 col-md-4 freelancer'>
                    <h1>Are you a Freelancer ?</h1>
                
                    <p class="freelancerP">Go no further, manage your projects and clients easily and make theim satisfied .</P>
                    <button class="getStarted">Gest started</button>
            </div>
            <div class='col-lg-4 col-md-4 heroImage '>
                <img src="asset/images/heroSection.svg">
            </div>
        </div>
    </section>
    <section class='container whyChoose'>
        <div class=" col-xs-12 col-md-12 col-lg-12  whyChooseH2">
            <h2>Why to choose InvoiceMe </h2>
        </div>
        <div class=" col-xs-12 col-md-12 col-lg-12">
            <p clas="whyChooseP">With invoiceMe you can manage your projects and clients smoothly
                and let them check their projects progress with one click through sending them and email
            </P>

        </div>
        <div class="container">
            <div class=" featuresContianer row">
                <div class="col-lg-3 col-xs-10 firstFeature">
                   <h4> manage your projects</h4>
                   <div class='feature1IconContainer'>

                        <img id='manageProjects' src="asset/images/manageprojects.png" alt="manage projects feature icon">

                    </div>
                    <div>
                        <p>Save time and manage your projects smoothly</p>

                    </div>
                </div>
                <div class=" col-lg-3 col-xs-10 secondFeature">
                    <h4>make your clients satisfied</h4>

                        <div class='feature2IconContainer'>

                            <img id='manageProjects' src="asset/images/clients.png" alt>

                        </div>
                        <div>
                            <p>let your clients check their project progress with one click</p>
                        </div>
                </div>             
                <div class=" col-lg-3 col-xs-10 thirdFeature">
                   <h4> send Email with one click </h4>
                   <div class='feature3IconContainer'>

                        <img id='manageProjects' src="asset/images/Email.png">

                    </div>
                    <div>
                        <p>Send email to your clients about their projects with one click</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='aboutSection'>
        <div class='aboutHeading'>
            <h2>About us</h2>
            <div class='aboutParagraph'>
                <p>InvoiceMe is a platform for freelancers and auto-entrepreneurs 
                    that helps them to manage their projects and clients and also facilate the customer relationship managements,
                    through  making the clients able to check their project progress with one click .</p>
            </div>

        </div>
    </section>
    <section class='contact'>
        <div>
            <h2 class='contactHeading'>Contact us</h2>
        </div>
        <div class='formContainer'>
            <form method="post">
                <div>
                    <input name='name' type='text' placeholder = 'Enter your name' required>
                    <input name='email' type="email" placeholder ='Enter your email' required>
                    <textarea required  placeholder = 'your message' >
                    
                    </textarea>
                    <div class="getInTouch">

                        <input type='submit' name='GetInTouch' value='Get in touch'>

                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer class='row'>
        <div class='col-xs-12 col-md-4 col-lg-4'>
            <h2>Invoice Me</h2>
        </div>  
        <div class=" col-xs-12 quickLinks1">
            <ul>
                <li>Home</li>
                <li>Features</li>
            </ul>
        </div>
        <div class="quickLinks2 col-xs-12 col-md-4 col-lg-4">
            <ul>
                <li>
                    About us
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </div>
        <div class="getAndRights col-xs-12 col-md-3 col-lg-3">
            <button><a>Get started</a></button>
            <p>© InvoiceMe. All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>