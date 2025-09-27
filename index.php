<?php
require_once ('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe HTML Template by Tooplate</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/tooplate-wave.css">
<!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>
<body>

  

  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-fish" style="margin-right: 25px;
              margin-left: 25px;
              font-size: 1.5rem;"></i>
            <h1 class="tm-site-name">SeaWave</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-utensils" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>Food Menu</span>
                </a>
              </li> 
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-pizza-slice" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>Special Items</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#login" class="tm-page-link">
                  <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>Log In</span>
                </a>
                <li class="tm-page-nav-item">
                <a href="#signup" class="tm-page-link">
                  <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>Sign Up</span>
                </a>
                <li class="tm-page-nav-item">
                <a href="#alogin" class="tm-page-link">
                  <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>AdminLogin</span>
                </a>
              </li>
             
            </ul>
          </nav>
        </div>        
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold">Fish</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Octopus</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Shrimps</a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/salmon.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Salmon<span class="tm-list-item-price">$10.25</span></h3>
                    <p class="tm-list-item-description">Raw salmon cured in salt, sugar, and dill.Sliced thinly and accompanied by hovmästarsås, a dill and mustard sauce,with boiled potatoes.</p>
                     </div>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Cod.jpeg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Cod<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Salt cod fritters filled with minced cod fish and garnished with cilantro, tomatoes and onions. A traditional snack typically eaten with an entire meal</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Herring.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Herring<span class="tm-list-item-price">$14.25</span></h3>
                    <p class="tm-list-item-description">It is made from herring (40%), salt, corn starch, lemon juice, citric acid, xanthan gum, sodium benzoate, squid ink and water. Unlike caviar, it does not contain fish roe.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Mahi-mahi.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Mahi-mahi<span class="tm-list-item-price">$11.50</span></h3>
                    <p class="tm-list-item-description">Mahi Mahi have gorgeous gold and yellow skin that will be removed before cooking. The flesh will be a pinkish-beige in color.</p>
                  </div>
                </div> 
                                       
              </div>
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                  <img src="img/Octopus.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Finned Octopus<span class="tm-list-item-price">$8.50</span></h3>
                    <p class="tm-list-item-description">Baby octopus recipes are sort of that go-to meals that jump in your mind when you are on the verge on ordering something extra exotic and sizzling while at a restaurant.</p>           
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Giant-Pacific-Octopus.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Giant-Pacific-Octopus<span class="tm-list-item-price">$9.50</span></h3>
                    <p class="tm-list-item-description">There is an ancient Croatian cooking method, peka, that buries food in hot coals inside of sturdy earthenware vessels. It works beautifully for octopus</p>                   
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/grilled-octopus.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">grilled-octopus<span class="tm-list-item-price">$7.50</span></h3>
                    <p class="tm-list-item-description">This classic Greek recipe is perfect if you’re looking for something beyond burgers to throw on the grill. A little extra virgin Greek olive oil, Greek oregano and Santorini capers finish the dish!</p>            
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Recipe-Charred-Octopus-and-Chorizo.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Charred Octopus and Chorizo<span class="tm-list-item-price">$6.50</span></h3>
                    <p class="tm-list-item-description">This recipe calls for simmering water and oil together, a technique that creates an emulsion similar to a butter sauce. For the best result, choose a buttery, fruity Spanish-style olive oil rather than a grassy Italian olive oil.</p>             
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/Garlic-Butter-Shrimp.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Garlic Butter Shrimp<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">he cook time is only 3 to 4 minutes.It's flavored with garlic and lemon, and a little olive oil for good measure. Serve with rice or quinoa and a salad.</p>             
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Grilled-Shrimp.webp" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Grilled Shrimp<span class="tm-list-item-price">$14.50</span></h3>
                    <p class="tm-list-item-description">It takes only 2 to 4 minutes to cook! There’s really nothing faster on the grill, and it makes for a simple, healthy dinner.</p>                  
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Broiled-Shrimp.jpg" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Broiled-Shrimp<span class="tm-list-item-price">$16.50</span></h3>
                    <p class="tm-list-item-description">This broiled shrimp is out of this world good. It's tender, juicy, and so fast to cook.It’s perfectly seasoned with garlic and lemon.</p>             
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/Shrimp-Curry.webp" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Shrimp Curry<span class="tm-list-item-price">$18.50</span></h3>
                    <p class="tm-list-item-description">There is so much flavor going on here: rich coconut milk, aromatic curry paste, tangy lime and peppery basil surrounding tender, juicy shrimp.</p>             
                  </div>
                </div>              
              </div>
            </div>
            <!-- end Drink Menu Page -->
          </div>

          <!-- Special Items Page -->
          <div id="special" class="tm-page-content"  style="margin-left: 17%;">
            <div class="tm-special-items">
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-01.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special One</h2>

                  <p class="tm-special-item-text"></p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-02.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Second Item</h2>
                  <p class="tm-special-item-text"></p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-03.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Third Special Item</h2>
                  <p class="tm-special-item-text"></p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-04.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Special Item Fourth</h2>
                  <p class="tm-special-item-text"></p>  
                </div>
              </div>      
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-05.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Sixth Sense</h2>
                  <p class="tm-special-item-text"></p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-06.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Seventh Item</h2>
                  <p class="tm-special-item-text"></p>  
                </div>
              </div>                      
            </div>            
          </div>
          <!-- end Special Items Page -->

          <!-- Sign In -->
  <div id="login" class="tm-page-content" style="margin-right:17%;width: 50%;">
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="LoginLogic.php" method="POST" class="form-signin">
                <div class="tm-form-group">
                  <input type="text" id="username" class="form-control" placeholder="username" name="username" required autofocus>
                </div>
                <div class="tm-form-group">
                  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                </div>         
                <div>
                  <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit" style="margin-top: 1%;margin-bottom:1%;">Sign in</button>
                  <br>
                </div>
              </form>
            </div>
          </div>            
             <!-- end Sign In -->
    <!-- Contact Page -->
          <div id="contact" class="tm-page-content" style="margin-right:17%;width: 50%;">
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="contactuslogic.php" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" />
                </div>        
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required=""></textarea>
                </div>        
                <div>
                  <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit" style="margin-top: 1%;margin-bottom:1%;">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Contact Page -->
 <!-- Sign Up Page -->
             <div id="signup" class="tm-page-content" style="margin-right:17%;width: 50%;">
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="signuplogic.php" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" id="inputusername" name="username" class="tm-form-control" placeholder="Username" required />
                </div>
                <div class="tm-form-group">
                  <input type="text" id="fullname" name="fullname" class="tm-form-control" placeholder="Fullname" required />
                </div>        
                <div class="tm-form-group">
                  <input type="email" id="inputemail" name="email" class="tm-form-control" placeholder="Email" required />
                </div>
                <div class="tm-form-group">
                  <input type="password" id="inputpassword" name="password" class="tm-form-control" placeholder="Password" required />
                </div>       
                <div>
                  <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit" style="margin-top: 1%;">Sign up</button>
                  </div>
              </form>
            </div>
          </div>

        </main>
      </div>    
    </div>
  </div>
   <!--End Sign Up Page -->
    <!--Admin Sign In Page -->
             <div id="alogin" class="tm-page-content" style="margin-right:10%;">
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="adminlogin.php" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="username" class="tm-form-control" placeholder="Username" required />
                </div>        
                <div class="tm-form-group">
                  <input type="password" name="password" class="tm-form-control" placeholder="Password" required />
                </div>       
                <div>
                 <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit" style="margin-top: 1%;">Sign up</button>
                </div>
              </form>
            </div>
          </div>

        </main>
      </div>    
    </div>
  </div>
   <!--End Admin Sign In Page -->

        
    
  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.login').hide();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));      
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));

      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
      
    }


    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));



      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });   
  
  </script>
</body>
</html>