<html >
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

        <title>Flutur - Home</title>
        <link rel="icon" href="images/flutur_logo_white.png" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        
       <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    </head>
    <body>
        <div class='super-body-container'>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img id='navbar-logo' src="images/flutur_logo_white.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav"style="margin-left:95%">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
              </div>
            </div>
          </nav>

<div class="body-container">

    <div class='right-text-container'>
        <div class="mission">
                <h1 class='head-mission'>OUR MISSION</h1>
                <br>
                <h4 class='sub-head-mission'>OPEN NEW TABS TO</h4>
                <br>
                <h2 class='head-mission' style="font-size: 50px;font-weight:bold">LIGHT RURAL HOMES</h2>
                <div class="mission-p">
                        <p>Flutur with Liter of Light will install innovative solar bottle bulbs in villages, where electricity is still a distant dream. These bulbs installed in homes and community areas will provide illumination even during the night.</p>
                </div>
        </div>
        <div class="right-text-image">
            <img src="http://res.cloudinary.com/epicfoundation/image/upload/v1524031026/UI%20images/LOL_Big_1_2x.png" alt="" style="width: 200px;">
        </div>
        
    </div>
    <div id='login-container' class='card login-card-container'>
        <div class='sign-in'>Sign in to Begin</div>
        <form id='login-form' class='hideIt' action="backend/login.php" method="POST"></form>
        <div id='login-email-div' class='login-email'>
                <button id='login-email' class='btn btn-primary btn-lg' type="button">Login using Email</button>
            </div>
            <div id='login-username-div' class="login-username">
                <button id='login-username' type="button" class="btn btn-secondary btn-lg"> Login using Username</button>
            </div>
	    
    </div>

    

</div>
        </div>
        

        <div class='other-mission-container'>
            <div class='other-mission-heading'>
                <h1 class='other-heading' >Choose from our other missions after 2 weeks!</h1>
            </div>
            <div class='slick-container'>
                <div class='mission-1'>
                    <h1 style="font-family: 'Roboto', sans-serif;color: black;text-align: center; margin-top: 20px;">BUILD SCHOOL HELPDESKS</h1>
                    <img class='mission-image' src="http://res.cloudinary.com/epicfoundation/image/upload/v1524391803/UI%20images/AARAMBH_squaere_3x.png" alt="">
                    <p style="font-family: 'Roboto', sans-serif;color: black;">Flutur has partnered with Aarambh to improve school infrastructure for chilren of rural India via the innovation - Helpdesks. A Helpdesk is a portable desk and school bag made out of recycled cardpaper.</p>
                </div>

                <div class="mission-2">
                    <h1 style="font-family: 'Roboto', sans-serif;color: #212529;text-align: center; margin-top: 20px;">SUPPLY LOW COST SANITARY PADS</h1>
                    <img class='mission-image' src="http://res.cloudinary.com/epicfoundation/image/upload/v1524391816/UI%20images/HHK_squaere_3x.png" alt="">
                    <p style="font-family: 'Roboto', sans-serif;color: black;">Flutur with Har Hath Kalam is on a mission to create awareness against unsafe menstrual practices. Biodegradable, lowcost sanitary napkins will be distributed free of cost in villages around Patiala.</p>
                </div>
                <div class='mission-3'>
                    <h1 style="font-family: 'Roboto', sans-serif;color: black;text-align:center; margin-top: 20px;">PROVIDE ACCESS TO WATER</h1>
                    <img class='mission-image' src="http://res.cloudinary.com/epicfoundation/image/upload/v1524391830/UI%20images/TBH_squaere_3x.png" alt="">
                    <p style="font-family: 'Roboto', sans-serif;color: black;">Flutur is collaborating with Tarun Bharat Sangh to build rainwater harvesting structures in Karauli - a backward and drought prone region in India. Improving access to water will increase every household's income by 400%.</p>
                </div>
            </div>

        </div>
	<footer>
	<div class='createdBy'>
	<h4>created by <span class='Name'>Divesh Kamble</span> </h4>
	</div>
	</footer>
    </body>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css">
    <script type="text/javascript" src="js/slick.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script>
    $(document).ready(function(){
  $('.slick-container').slick({
      accessibility:'true',
      autoplay:'true',
      autoplaySpeed:'2000',
      dots:'true'
  });
  $('.slick-container').slick('slickPlay');
});

function createUsername(loginMethod){
    var inputGroupMb3=document.createElement('div');
    inputGroupMb3.setAttribute('id','inputGroupMb3');
    var inputGroupPrepend = document.createElement('div');
    inputGroupPrepend.setAttribute('id','inputGroupPrepend');
    document.getElementById('login-form').appendChild(inputGroupMb3);
    $('#inputGroupMb3').addClass('input-group mb-3');
    inputGroupMb3.appendChild(inputGroupPrepend);
    $('#inputGroupPrepend').addClass('input-group-prepend');
    var spanInputGroupText = document.createElement('span');
    spanInputGroupText.setAttribute('id','basic-addon1');
    inputGroupPrepend.appendChild(spanInputGroupText);
    $('#basic-addon1').text(loginMethod);
    $('#basic-addon1').addClass('input-group-text');
    var inputText = document.createElement('input');
    inputText.setAttribute('type','text');
    inputText.setAttribute('placeholder','Username');
    inputText.setAttribute('aria-label','Username');
    inputText.setAttribute('id','input-username');
    inputText.setAttribute('name','unameEmail');
    inputGroupMb3.appendChild(inputText);
    $('#input-username').addClass('form-control');


}

function createPassword(){
    var inputGroupMb3=document.createElement('div');
    inputGroupMb3.setAttribute('id','inputGroupMb3Password');
    var inputGroupPrepend = document.createElement('div');
    inputGroupPrepend.setAttribute('id','inputGroupPrependPassword');
    document.getElementById('login-form').appendChild(inputGroupMb3);
    $('#inputGroupMb3Password').addClass('input-group mb-3');
    inputGroupMb3.appendChild(inputGroupPrepend);
    $('#inputGroupPrependPassword').addClass('input-group-prepend');
    var spanInputGroupText = document.createElement('span');
    spanInputGroupText.setAttribute('id','basic-addon1Pass');
    inputGroupPrepend.appendChild(spanInputGroupText);
    $('#basic-addon1Pass').text('Password');
    $('#basic-addon1Pass').addClass('input-group-text');
    var inputText = document.createElement('input');
    inputText.setAttribute('type','password');
    inputText.setAttribute('placeholder','Password');
    inputText.setAttribute('aria-label','password');
    inputText.setAttribute('id','input-password');
    inputText.setAttribute('name','password')
    inputGroupMb3.appendChild(inputText);
    $('#input-password').addClass('form-control');
   

}

function SignInWithAnotherMethod(){
var linkDiv = document.createElement('div');
linkDiv.setAttribute('id','linkDiv');
document.getElementById('login-form').appendChild(linkDiv);

var backLink = document.createElement('a');
backLink.setAttribute('id','backLink');
backLink.setAttribute('href','#');
linkDiv.appendChild(backLink);
$('#backLink').text('Sign in using different method.');

}


function createLoginButton(){
    var crossButton = document.createElement('button');
    crossButton.setAttribute('type','submit');
    crossButton.setAttribute('id','submitButton');
    crossButton.setAttribute('name','submit');
 
    document.getElementById('login-form').appendChild(crossButton);
    $('#submitButton').text('Login');
    $('#submitButton').addClass('btn');
    $('#submitButton').addClass('btn-primary');

}

document.getElementById('login-email').addEventListener('click',function(){
    var loginMethod = 'Email';
    $('#login-email').slideUp();
    $('#login-username').slideUp();

    setTimeout(function(){
        $('#login-form').removeClass('hideIt');
   
    createUsername(loginMethod);
    createPassword();
    createLoginButton();
    SignInWithAnotherMethod();
document.getElementById('backLink').addEventListener('click',function(){
event.preventDefault();
$('#login-form').addClass('hideIt');
var parentNode = document.getElementById('login-form');
var usernameNode = document.getElementById('inputGroupMb3');
var passwordNode = document.getElementById('inputGroupMb3Password');
var signInNode = document.getElementById('submitButton');
var signInUsingNode = document.getElementById('linkDiv');
parentNode.removeChild(usernameNode);
parentNode.removeChild(passwordNode);
parentNode.removeChild(signInNode);
parentNode.removeChild(signInUsingNode);
$('#login-email').slideDown();
    $('#login-username').slideDown();
});
    
    },500);

    
    
});




document.getElementById('login-username').addEventListener('click',function(){
    var loginMethod = 'Username'
    $('#login-email').slideUp();
    $('#login-username').slideUp();

    setTimeout(function(){
        $('#login-form').removeClass('hideIt');
   
    createUsername(loginMethod);
    createPassword();
    createLoginButton();
	SignInWithAnotherMethod();
document.getElementById('backLink').addEventListener('click',function(){
event.preventDefault();
$('#login-form').addClass('hideIt');
var parentNode = document.getElementById('login-form');
var usernameNode = document.getElementById('inputGroupMb3');
var passwordNode = document.getElementById('inputGroupMb3Password');
var signInNode = document.getElementById('submitButton');
var signInUsingNode = document.getElementById('linkDiv');
parentNode.removeChild(usernameNode);
parentNode.removeChild(passwordNode);
parentNode.removeChild(signInNode);
parentNode.removeChild(signInUsingNode);
$('#login-email').slideDown();
    $('#login-username').slideDown();
});
    

    
    },500);

});
var errorHandler = document.createElement('h5');
errorHandler.setAttribute('id','errorHandler');

<?php
	if(isset($_GET['login']))
	{
	if($_GET['login']=="invalidpwd")
	{
	?>
	document.getElementById('login-container').appendChild(errorHandler);
	$('#errorHandler').text('Invalid Password');
	<?php
	}
	elseif($_GET['login']=="not_registered")
	{
	?>
	document.getElementById('login-container').appendChild(errorHandler);
	$('#errorHandler').text('User not registered');
	<?php
	}
	elseif($_GET['login']=="empty")
	{
	?>
	document.getElementById('login-container').appendChild(errorHandler);
	$('#errorHandler').text('Empty Username/Email or Password');
	<?php
	}
	}
	?>
        

    </script>
</html>
