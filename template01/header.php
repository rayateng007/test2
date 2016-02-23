
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>MixShop</title>
<link href="image/favicon.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="clean modern and elegant corporate look eCommerce html template">
<meta name="author" content="">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen" />

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
<!-- CSS Part End-->
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/cloud_zoom.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<!-- JS Part End-->
<!-- Google Fonts (Droid Sans) Start -->
<link href='//fonts.googleapis.com/css?family=Droid+Sans&v1' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=&v1' rel='stylesheet' type='text/css'>
<!-- Google Fonts (Droid Sans) End -->
</head>
<body>
<div class="wrapper-box">
  <div class="main-wrapper">
    <!--Header Part Start-->
    <header id="header">
      <div class="htop">
        <div id="language"> <span>Language <b></b></span>
          <ul>
            <li><a title="English"><img src="image/gb.png" alt="English" />English</a></li>
            <li><a title="Türkçe"><img src="image/tr.png" alt="Türkçe" />Türkçe</a></li>
          </ul>
        </div>
        <div id="currency"> <span>Currency<b></b></span>
          <ul>
            <li> <a title="Euro">€ - Euro</a> </li>
            <li> <a title="Pound Sterling">£ - Pound Sterling</a> </li>
            <li> <a title="US Dollar"><b>$ - US Dollar</b></a> </li>
          </ul>
        </div>
        <div class="links"> <a href="login.html">Login</a> <a href="register.html">Register</a> <a href="#" id="wishlist-total">Wish List (0)</a> <a href="#">My Account</a> <a href="checkout.html">Checkout</a> </div>
      </div>
      <section class="hsecond">
        <div id="logo"><a href="index.php"><img src="image/logo.png" title="Polishop" alt="Polishop" /></a></div>
        <div id="search">
          <div class="button-search"></div>
          <input type="text" name="search" placeholder="Search" value="" />
        </div>
        
        <!--Mini Shopping Cart Start-->
        
        <section id="cart">
          <div class="heading">
            <h4><img width="32" height="32" alt="" src="image/cart-bg.png"></h4>
            <a><?php echo $s.'$';?> <i class="caret"></i></a> </div>
          <div class="content">
            <div class="mini-cart-info">
              <table>
                <tr>
                <?php
					$cart = unserialize(serialize($_SESSION['cart']));
					$s=0; $index=0;
					for($i=0; $i<count($cart); $i++){
				?>
                  <td class="name"><a href="product.php"><?php echo $cart[$i]->pro_name; ?></a></td>
                  <td class="total">$ <?php echo $cart[$i]->price; ?></td>
                  <td class="quantity"><?php echo $cart[$i]->quantity; ?></td>
                  <td class="total">$ <?php echo $cart[$i]->price * $cart[$i]->quantity.'$';?></td>
                  <td class="remove">
                      <a href="include/cart.php?index=<?php echo $index;?>">
	                      <img src="image/remove-small.png" alt="Remove" title="Remove" />
                      </a>
                  </td>
                </tr>
                <?php 
						$index++;
						$s += $cart[$i]->price * $cart[$i]->quantity;
						}
				?>
                
              </table>
            </div>
            <div class="mini-cart-total">
              <table>
                
                <tr>
                  <td class="right"><b>Total:</b></td>
                  <td class="right"><?php echo $s.'$';?></td>
                </tr>
              </table>
            </div>
            <div class="checkout"><a class="button" href="cart.html">View Cart</a> &nbsp; <a class="button" href="checkout.html">Checkout</a></div>
          </div>
        </section>
        <!--Mini Shopping Cart End-->
        <div class="clear"></div>
      </section>
      <!--Top Menu(Horizontal Categories) Start-->
      <nav id="menu">
        <ul>
          <li><a title="Home" href="index.php"><i class="glyphicon glyphicon-home" style="line-height:40px;"></i></a></li>
          <li class="categories_hor"><a>Categories</a>
            <div>
              <div class="column"> <a href="category.html">Electronics</a>
                <div>
                  <ul>
                    <li><a href="category.html">Laptops (0)</a></li>
                    <li><a href="category.html">Desktops (0)</a></li>
                    <li><a href="category.html">Components (1)</a></li>
                    <li><a href="category.html">Software (1)</a></li>
                    <li><a href="category.html">Phones &amp; PDAs (4)</a></li>
                    <li><a href="category.html">Cameras (2)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Jewellery</a>
                <div>
                  <ul>
                    <li><a href="category.html">Children's Jewellery (0)</a></li>
                    <li><a href="category.html">Men's Jewellery (1)</a></li>
                    <li><a href="category.html">Women's Jewellery (0)</a></li>
                    <li><a href="category.html">Sample Test (0)</a></li>
                    <li><a href="category.html">Sample Test11 (0)</a></li>
                    <li><a href="category.html">Sample Test12 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Shoes</a>
                <div>
                  <ul>
                    <li><a href="category.html">Children's Shoes (1)</a></li>
                    <li><a href="category.html">Men's Shoes (2)</a></li>
                    <li><a href="category.html">Women's Shoes (1)</a></li>
                    <li><a href="category.html">Test Sample (0)</a></li>
                    <li><a href="category.html">Test Sample1 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Clothing</a>
                <div>
                  <ul>
                    <li><a href="category.html">Men (1)</a></li>
                    <li><a href="category.html">Women (1)</a></li>
                    <li><a href="category.html">Boys (0)</a></li>
                    <li><a href="category.html">Girls (0)</a></li>
                    <li><a href="category.html">Accessories (0)</a></li>
                    <li><a href="category.html">Sample Test21 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Kids</a>
                <div>
                  <ul>
                    <li><a href="category.html">Toys Kids (0)</a></li>
                    <li><a href="category.html">Games (1)</a></li>
                    <li><a href="category.html">Sample Test22 (0)</a></li>
                    <li><a href="category.html">Sample Test15 (1)</a></li>
                    <li><a href="category.html">Sample Kids (1)</a></li>
                    <li><a href="category.html">Sample Test6 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Watches</a>
                <div>
                  <ul>
                    <li><a href="category.html">Women's Watches (1)</a></li>
                    <li><a href="category.html">Men's Watches (0)</a></li>
                    <li><a href="category.html">Children's Watches (1)</a></li>
                    <li><a href="category.html">Sample16 (0)</a></li>
                    <li><a href="category.html">Sample17 (0)</a></li>
                    <li><a href="category.html">test 18 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Sports</a>
                <div>
                  <ul>
                    <li><a href="category.html">Women's Sports (1)</a></li>
                    <li><a href="category.html">Children's Sports (0)</a></li>
                    <li><a href="category.html">Men's Sports (1)</a></li>
                    <li><a href="category.html">test 7 (0)</a></li>
                    <li><a href="category.html">Sample 8 (0)</a></li>
                    <li><a href="category.html">test 9 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Health</a>
                <div>
                  <ul>
                    <li><a href="category.html">Sample Test1 (1)</a></li>
                    <li><a href="category.html">Sample Test2 (0)</a></li>
                    <li><a href="category.html">test 20 (0)</a></li>
                    <li><a href="category.html">test 21 (0)</a></li>
                    <li><a href="category.html">test 22 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Furniture</a>
                <div>
                  <ul>
                    <li><a href="category.html">Bedrooms Furniture (0)</a></li>
                    <li><a href="category.html">Kidsrooms furniture (0)</a></li>
                    <li><a href="category.html">Kitchen Furniture (1)</a></li>
                    <li><a href="category.html">Showcase Furniture (0)</a></li>
                    <li><a href="category.html">Table Furniture (1)</a></li>
                    <li><a href="category.html">Wall Furniture (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"><a href="category.html">Books</a>
                <div>
                  <ul>
                    <li><a href="category.html">Audio Books (1)</a></li>
                    <li><a href="category.html">Comedy Book (1)</a></li>
                    <li><a href="category.html">Comics Books (0)</a></li>
                    <li><a href="category.html">Computer Book (1)</a></li>
                    <li><a href="category.html">Cookies Books (0)</a></li>
                    <li><a href="category.html">English Books (1)</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li><a target="_blank" href="#">Headers</a>
            <div>
              <ul>
                <li><a href="index.html">Header Style 1</a></li>
                <li><a href="header-footer-2.html">Header Style 2</a></li>
                <li><a href="header-footer-3.html">Header Style 3</a></li>
              </ul>
            </div>
          </li>
          <li><a target="_blank" href="#">Menus</a>
            <div>
              <ul>
                <li><a href="index.html">Horizontal Categories</a></li>
                <li><a href="header-footer-2.html">Vertical Categories</a></li>
                <li><a href="header-footer-3.html">Simple Categories</a></li>
              </ul>
            </div>
          </li>
          <li><a target="_blank" href="#">Sliders</a>
            <div>
              <ul>
                <li><a href="index.html">Nivo Slider</a></li>
                <li><a href="header-footer-2.html">Flex Slider</a></li>
              </ul>
            </div>
          </li>
          <li><a target="_blank" href="#">Footers</a>
            <div>
              <ul>
                <li><a href="index.html">Footer Style 1</a></li>
                <li><a href="header-footer-2.html">Footer Style 2</a></li>
                <li><a href="header-footer-3.html">Footer Style 3</a></li>
              </ul>
            </div>
          </li>
          <li><a href="">Custom Block</a>
            <div class="custom_block">
              <ul>
                <li>
                  <table border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
                    <tbody>
                      <tr>
                        <td><h3>You can insert any content here.</h3>
                          <p>&nbsp;</p></td>
                      </tr>
                      <tr>
                        <td><strong><img alt="responsive" src="image/responsive.jpg" style="width: 250px; height: 150px; border-width: 0px; border-style: solid; float: left; margin-left: 10px; margin-right: 10px;" />Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</td>
                      </tr>
                    </tbody>
                  </table>
                </li>
              </ul>
            </div>
          </li>
          <li><a>My Account</a>
            <div>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#" id="wishlist-total">Wish List (0)</a></li>
                <li><a href="#">Newsletter</a></li>
              </ul>
            </div>
          </li>
          <li><a>Information</a>
            <div>
              <ul>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="about-us.html">Delivery Information</a></li>
                <li><a href="about-us.html">Privacy Policy</a></li>
                <li><a href="elements.html">Elements</a></li>
              </ul>
            </div>
          </li>
          <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
      </nav>
      <!--Top Menu(Horizontal Categories) End-->
      <!-- Mobile Menu Start-->
      <nav id="menu" class="m-menu"> <span>Menu</span>
        <ul>
          <li class="categories"><a>Categories</a>
            <div>
              <div class="column"> <a href="#">Electronics </a>
                <div>
                  <ul>
                    <li><a href="category.html">Laptops (0)</a></li>
                    <li><a href="category.html">Desktops (0)</a></li>
                    <li><a href="category.html">Components (1)</a></li>
                    <li><a href="category.html">Software (1)</a></li>
                    <li><a href="category.html">Phones &amp; PDAs (4)</a></li>
                    <li><a href="category.html">Cameras (2)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Jewellery</a>
                <div>
                  <ul>
                    <li><a href="category.html">Children's Jewellery (0)</a></li>
                    <li><a href="category.html">Men's Jewellery (1)</a></li>
                    <li><a href="category.html">Women's Jewellery (0)</a></li>
                    <li><a href="category.html">Sample Test (0)</a></li>
                    <li><a href="category.html">Sample Test11 (0)</a></li>
                    <li><a href="category.html">Sample Test12 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Shoes</a>
                <div>
                  <ul>
                    <li><a href="category.html">Children's Shoes (1)</a></li>
                    <li><a href="category.html">Men's Shoes (2)</a></li>
                    <li><a href="category.html">Women's Shoes (1)</a></li>
                    <li><a href="category.html">Test Sample (0)</a></li>
                    <li><a href="category.html">Test Sample1 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Clothing</a>
                <div>
                  <ul>
                    <li><a href="category.html">Men (1)</a></li>
                    <li><a href="category.html">Women (1)</a></li>
                    <li><a href="category.html">Boys (0)</a></li>
                    <li><a href="category.html">Girls (0)</a></li>
                    <li><a href="category.html">Accessories (0)</a></li>
                    <li><a href="category.html">Sample Test21 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Kids</a>
                <div>
                  <ul>
                    <li><a href="category.html">Toys Kids (0)</a></li>
                    <li><a href="category.html">Games (1)</a></li>
                    <li><a href="category.html">Sample Test22 (0)</a></li>
                    <li><a href="category.html">Sample Test15 (1)</a></li>
                    <li><a href="category.html">Sample Kids (1)</a></li>
                    <li><a href="category.html">Sample Test6 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Watches</a>
                <div>
                  <ul>
                    <li><a href="category.html">Women's Watches (1)</a></li>
                    <li><a href="category.html">Men's Watches (0)</a></li>
                    <li><a href="category.html">Children's Watches (1)</a></li>
                    <li><a href="category.html">Sample16 (0)</a></li>
                    <li><a href="category.html">Sample17 (0)</a></li>
                    <li><a href="category.html">test 18 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Sports</a>
                <div>
                  <ul>
                    <li><a href="category.html">Women's Sports (1)</a></li>
                    <li><a href="category.html">Children's Sports (0)</a></li>
                    <li><a href="category.html">Men's Sports (1)</a></li>
                    <li><a href="category.html">test 7 (0)</a></li>
                    <li><a href="category.html">Sample 8 (0)</a></li>
                    <li><a href="category.html">test 9 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Health</a>
                <div>
                  <ul>
                    <li><a href="category.html">Sample Test1 (1)</a></li>
                    <li><a href="category.html">Sample Test2 (0)</a></li>
                    <li><a href="category.html">test 20 (0)</a></li>
                    <li><a href="category.html">test 21 (0)</a></li>
                    <li><a href="category.html">test 22 (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"> <a href="category.html">Furniture</a>
                <div>
                  <ul>
                    <li><a href="category.html">Bedrooms Furniture (0)</a></li>
                    <li><a href="category.html">Kidsrooms furniture (0)</a></li>
                    <li><a href="category.html">Kitchen Furniture (1)</a></li>
                    <li><a href="category.html">Showcase Furniture (0)</a></li>
                    <li><a href="category.html">Table Furniture (1)</a></li>
                    <li><a href="category.html">Wall Furniture (0)</a></li>
                  </ul>
                </div>
              </div>
              <div class="column"><a href="category.html">Books</a>
                <div>
                  <ul>
                    <li><a href="category.html">Audio Books (1)</a></li>
                    <li><a href="category.html">Comedy Book (1)</a></li>
                    <li><a href="category.html">Comics Books (0)</a></li>
                    <li><a href="category.html">Computer Book (1)</a></li>
                    <li><a href="category.html">Cookies Books (0)</a></li>
                    <li><a href="category.html">English Books (1)</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Mobile Menu End-->
    </header>
    <!--Header Part End-->