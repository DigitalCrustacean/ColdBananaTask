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