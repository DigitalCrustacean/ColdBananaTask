



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cold Banana Developer Test</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  
    <script>

    /*fetch('https://my-json-server.typicode.com/TomSearle/cb-devtest-api/products')
    .then(res => {
        return res.json();
    })
    .then(data => {
        data.forEach(data => {
            const markup = `    <div class="product-column">
                                <div class="product-item">
                                <img class="product-image" src="images/placeholder.png" alt="Product Image">
                                <h3 class="prod-title">${data.product_name}</h3>
                                <h4 class="prod-price">${data.price}</h4>
                                </div>
                                </div>`;

                                console.log(data);

                document.querySelector('#product-section').insertAdjacentHTML('afterstart', markup);
        });
    })
    .catch(error => console.log(error));


    */


      
 
    </script>



</head>
<body>


    <div class="box">
        <div class="box-column">
            <h2 class="site-title">CHILLED GRAPE</h2>
        </div>
        <div class="box-column">
            <ul class="">
                <li class="nav-item"><a href="#">Pricing</a></li>
                <li class="nav-item"><a href="#">Blog</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Home</a></li>
            </ul>
        </div>
        <div class="box-column">
            test
        </div>

    </div>
    <div class="box">
        <div>One</div>
        <div>Two</div>
        <div>Three</div>
    </div>








<!-- Status - Default position of all html elements -->

<!-- Relative - Change top, left, right, bottom (not good use of top, left, bottom) Useful on body of containers-->

<!-- Absolute - Change top, left, right, bottom. Nothing else moves around it.-->

<!-- Fixed - Fixed in the same position across entire html element. Good for scrolling fixed headers for example-->

<!-- Fixed - Fixed in the same position across entire html element. Good for fixed headers for example-->

<!-- Sticky - Combo of relative and fixed. Starts of as relative but as soon as it scrolls outside of page view area, it turns to sticky.-->

<div class="parent">
    Parent 
    <div class="sub-one sub">One</div>
    <div class="sub-two sub">Two</div>
    <div class="sub-three sub">Three</div>
</div>
<br>
<!-- Header Section -->
<div class="header-container">
    <div class="column-left">
        <h2 class="site-title">CHILLED GRAPE</h2>
    </div>
    <div class="column-middle">
        <ul class="navi">
            <li class="nav-item"><a href="#">Pricing</a></li>
            <li class="nav-item"><a href="#">Blog</a></li>
            <li class="nav-item"><a href="#">About</a></li>
            <li class="nav-item"><a href="#">Home</a></li>
        </ul>
    </div>  
    <div class="column-right">
        <a class="login-btn" href="#">Login</a></span>
    </div>
</div>
<!-- Hero Section -->
<div class="middle-container">
    <div class="mid-col-left">
    <h1 class="hero-heading">Lorem ipsum dolor sit amet.</h1>
    <button class="read-more-btn">Read More</button>
    </div>
    <div class="mid-col-right">
    
    </div>
</div>
<!-- About Section -->
<div class="about-container">
    <div class="abt-col-left">
        <h2 class="sub-title">Lorem ipsum dolor sit amet.</h2>
        <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="abt-col-right">
        <img class="plant-image" src="images/pngwing.png" alt="Image of a plant">
    </div>
</div>
<!-- Proucts Section Section -->
<div class="product-section" id="product-section">
    <div class="product-column">
        <div class="product-item">
            <img class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 class="prod-title">Product Title</h3>
            <h4 class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
          <div class="product-item">
            <img class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 class="prod-title">Product Title</h3>
            <h4 class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
        <div class="product-item">
            <img class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 class="prod-title">Product Title</h3>
            <h4 class="prod-price">Price</h4>
        </div>
    </div>
</div>
<br>
<div class="product-section">
    <div class="product-column">
        <div class="product-item">
            <img class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 class="prod-title">Product Title</h3>
            <h4 class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
          <div class="product-item">
            <img class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 class="prod-title">Product Title</h3>
            <h4 class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
        <div class="product-item">
            <img class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 class="prod-title">Product Title</h3>
            <h4 class="prod-price">Price</h4>
        </div>
    </div>
</div>
<a class="load-more-link" href="#">Load More</a>
<br>
<!-- Footer Section -->
<div class="footer-container">
    <div class="footer-col-left">
    <h2 class="site-title">CHILLED GRAPE</h2>
    <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="footer-col-left-mid">
    <h3 class="footer-sub-heading">Company</h3>
        <a class="footer-links" href="#">About</a>
        <br>
        <a class="footer-links" href="#">Careers</a>
        <br>
        <a class="footer-links" href="#">Our Work</a>
        <br>
        <a class="footer-links" href="#">Contact</a>
    </div>
    <div class="footer-col-right-mid">
    <h3 class="footer-sub-heading">Products</h3>
        <a class="footer-links" href="#">About</a>
        <br>
        <a class="footer-links" href="#">Careers</a>
        <br>
        <a class="footer-links" href="#">Our Work</a>
        <br>
        <a class="footer-links" href="#">Contact</a>
    </div>
    <div class="footer-col-right">
        <h3 class="footer-sub-heading">Follow Us</h3>
        <img class="social-icon" src="images/icon-rect.png" alt="Social Media Icon">
        <img class="social-icon" src="images/icon-rect.png" alt="Social Media Icon">
        <img class="social-icon" src="images/icon-rect.png" alt="Social Media Icon">
        <br>
        <img class="social-icon" src="images/icon-rect.png" alt="Social Media Icon">
        <img class="social-icon" src="images/icon-rect.png" alt="Social Media Icon">
        <img class="social-icon" src="images/icon-rect.png" alt="Social Media Icon">
    </div>
</div>

</body>
</html>