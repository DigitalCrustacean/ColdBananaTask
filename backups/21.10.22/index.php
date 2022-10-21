



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cold Banana Developer Test</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  
    <script>
/*
    fetch('https://my-json-server.typicode.com/TomSearle/cb-devtest-api/products')
  .then((response) => response.json())
  .then((data) => data.map(
    product => `product is ${product.product_name}\n image: ${product.image}\n price is ${product.price}\n`
    )
  );
*/

    /*
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

    


    /*
    fetch('https://my-json-server.typicode.com/TomSearle/cb-devtest-api/products')
    .then(res=>res.json())
    .then(console.log(res));

    const array = [{id: 1, product_name: "semper interdum mauris", image: "#", price: 86.87, stock_count: 20}, {id: 2, product_name: "semper interdum mauris", image: "#", price: 86.87, stock_count: 20}, {id: 3, product_name: "semper interdum mauris", image: "#", price: 86.87, stock_count: 20}, {id: 4, product_name: "semper interdum mauris", image: "#", price: 86.87, stock_count: 20}];
    const desc = array.map(
    product => `product is ${product.product_name}\n image: ${product.image}\n price is ${product.price}\n`
    )
    console.log(desc.join(""))

        */

        async function getData() {

            // Get data from API and convert response to json format.
            const response = await fetch('https://my-json-server.typicode.com/TomSearle/cb-devtest-api/products');

            const data = await response.json();

            // Get Blob of Images returned from API data.


            //Create Variables for 6 x Products using returned data.
                // Product One
                $prodOneName = data[0][0].product_name;
                $prodOnePrice = data[0][0].price;
                $prodOneImage = data[0][0].image;
                
                document.getElementById('prodOneName').innerHTML = $prodOneName;
                document.getElementById('prodOnePrice').innerHTML = "£"+$prodOnePrice;
                document.getElementById('prodOneImage').src = $prodOneImage;


                // Product Two
                $prodTwoName = data[0][1].product_name;
                $prodTwoPrice = data[0][1].price;
                $prodTwoImage = data[0][1].image;

                document.getElementById('prodTwoName').innerHTML = $prodTwoName;
                document.getElementById('prodTwoPrice').innerHTML = "£"+$prodTwoPrice;
                document.getElementById('prodTwoImage').src = $prodTwoImage;

                // Product Three
                $prodThreeName = data[0][2].product_name;
                $prodThreePrice = data[0][2].price;
                $prodThreeImage = data[0][2].image;

                document.getElementById('prodThreeName').innerHTML = $prodThreeName;
                document.getElementById('prodThreePrice').innerHTML = "£"+$prodThreePrice;
                document.getElementById('prodThreeImage').src = $prodThreeImage;

                // Product Four
                $prodFourName = data[0][3].product_name;
                $prodFourPrice = data[0][3].price;
                $prodFourImage = data[0][3].image;

                document.getElementById('prodFourName').innerHTML = $prodFourName;
                document.getElementById('prodFourPrice').innerHTML = "£"+$prodFourPrice;
                document.getElementById('prodFourImage').src = $prodFourImage;

                // Product Five
                $prodFiveName = data[0][4].product_name;
                $prodFivePrice = data[0][4].price;
                $prodFiveImage = data[0][4].image;

                document.getElementById('prodFiveName').innerHTML = $prodFiveName;
                document.getElementById('prodFivePrice').innerHTML = "£"+$prodFivePrice;
                document.getElementById('prodFiveImage').src = $prodFiveImage;

                // Product Six
                $prodSixName = data[0][5].product_name;
                $prodSixPrice = data[0][5].price;
                $prodSixImage = data[0][5].image;

                document.getElementById('prodSixName').innerHTML = $prodSixName;
                document.getElementById('prodSixPrice').innerHTML = "£"+$prodSixPrice;
                document.getElementById('prodSixImage').src = $prodSixImage;


        }


        getData();


 
    </script>



</head>
<body>

<?php

/*function get_data_from_api() {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://my-json-server.typicode.com/TomSearle/cb-devtest-api/products',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;

    $test = $response[0][1][product_name];
    echo $test;

}

get_data_from_api();
*/
?>






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
        <img class="mobile-menu" src="images/menu-icon.png" alt="Mobile Menu Icon">
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
            <img id="prodOneImage" class="product-image" src="" alt="Product Image">
            <h3 id="prodOneName" class="prod-title">Product One</h3>
            <h4 id="prodOnePrice" class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
          <div class="product-item">
            <img id="prodTwoImage" class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 id="prodTwoName" class="prod-title">Product Title</h3>
            <h4 id="prodTwoPrice" class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
        <div class="product-item">
            <img id="prodThreeImage" class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 id="prodThreeName" class="prod-title">Product Title</h3>
            <h4 id="prodThreePrice" class="prod-price">Price</h4>
        </div>
    </div>
</div>
<br>
<div class="product-section">
    <div class="product-column">
        <div class="product-item">
            <img id="prodFourImage" class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 id="prodFourName" class="prod-title">Product Title</h3>
            <h4 id="prodFourPrice" class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
          <div class="product-item">
            <img id="prodFiveImage" class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 id="prodFiveName" class="prod-title">Product Title</h3>
            <h4 id="prodFivePrice" class="prod-price">Price</h4>
        </div>
    </div>
    <div class="product-column">
        <div class="product-item">
            <img id="prodSixImage" class="product-image" src="images/placeholder.png" alt="Product Image">
            <h3 id="prodSixName" class="prod-title">Product Title</h3>
            <h4 id="prodSixPrice" class="prod-price">Price</h4>
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