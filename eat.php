<?php
include("config.php");
include("header2.html");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Eat </title>
    <link rel="stylesheet" type="text/css" href="css/eat.css">
</head>

<body>
<div class="overlay">
        <div class="heading">
            <h2>Menu</h2>
        </div>
    </div>
    <div class="main">
    <div class="sqs-block html-block sqs-block-html">
                <div class="sqs-block-content">
                    <p class="center"><strong><em>Modern dishes that capture the flavors of the season</em></strong><br/></p><br>
                </div>
            </div>
    <div class="row">
        <?php
        $query = "SELECT * FROM tbl_images WHERE Type NOT LIKE '%juice%' ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        while ($rows = mysqli_fetch_array($result)) {

            echo
            '
            <div class="odd center">
                <div class="first-level">
                    <div class="name">' . $rows['Name'] . '</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>' . $rows['Price'] . '</em></span>                    
                </div>
            </div>

                ';
        }
    
    ?>
            <!-- <div class="odd center">
                <div class="first-level">
                    <div>Aloo Tikki</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>90</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Salted Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>60</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Magic Pasta</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>100</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Vegetable Sandwich</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>89</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Pani Puri</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>114</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Plain Maggi</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>60</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Classic chocolate mousse</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>120</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Vegetable Paneer Maggi</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>100</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Macaron</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>50</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>White Sauce Cheese Pasta</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>150</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Veg Schezwan Wraps</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>60</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Vegetable Sandwich Grilled</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>100</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Aloo Corn Fusion</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>114</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Oreo Truffles</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>50</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Magic Masala Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>140</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Vodka Rose Wagon Wheel PastaVegetable Paneer Maggi</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>200</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Peri Peri Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>150</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Cheesy Sandwich</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>105</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Spicy Paneer Burger</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>150</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Cheesy Maggi</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>80</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Veg Cut Rolls</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>70</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Palak Corn Grilled Sandwich</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>174</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Alfredo Pasta</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>200</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Chilli Garlic</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>150</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Barbeque Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>130</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Peanut Butter Dessert</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>80</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Cheese Masala Sandwich</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>164</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Toppers Burger</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>105</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Cheese Pizza</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>500</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Jalapeno Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>99</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Chocolate Sandwich</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>135</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Veggiemania Pizza</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>450</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Peri Peri Paneer pizza</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>250</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Kaju Katli</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>50</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Cheese Chilli Grilled Sandwich</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>179</em></span>                    
                </div>
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Cheesy Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>99</em></span>                    
                </div>
            </div>
            <div class="odd center">
                <div class="first-level">
                    <div>Motichoor ladoo</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>60</em></span>                    
                </div>
             
                
            </div>
            <div class="even center">
                <div class="first-level">
                    <div>Masala Barbeque Fries</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>150</em></span>                    
                </div>
            </div>

            <div class="odd center">
                <div class="first-level">
                    <div>Tandoori Paneer Wraps</div>
                    <div class="dots"></div>
                    <span><span>&#8377;</span><em>110</em></span>                    
                </div>
            </div> -->
    </div>
</body>

</html>