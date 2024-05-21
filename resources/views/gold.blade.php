<div class="header">
  <div class="header-izq">
    <a href="https://www.facebook.com/orlucsalud/"><i class="fab fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/orlucsalud"><i class="fab fa-instagram"></i></a>
  </div>
  <div class="header-cent">
    <a href="#">
    </a>
  </div>
  <div class="header-der">
    <a href="" class="btn btn-2">
      <span class="round"><i class="fa fa-chevron-left"></i></span>
      <span class="txt"></span>      
    </a>
  </div>
</div>
<div class="container">
  <div class="product-simple">
    <div class="product-simple-left">
      <img src="{{ asset('assets/images/6.jpeg') }}"/>
    </div>
    <div class="product-simple-right">
      <div class="product-title">
        <h1>Gold Shining Snake</h1>
        <hr />
        <p>Indulge in the allure of serpentine elegance with our Gold Shining Snake Necklace. Crafted with meticulous attention to detail, n and mystique.</p>
        <h3>Material:</h3>this exquisite piece exudes sophisticatio
        <p>Crafted from high-quality 18k gold, this necklace boasts a radiant luster that captivates the eye. The gold's warmth adds an irresistible allure to the serpent's sinuous form.</p>
        <h3>Design</h3>
        <p>Inspired by the sinuous movements of a snake, the necklace features a delicately crafted serpent pendant. Its sleek and polished surface glimmers with every movement, casting shimmering reflections that mesmerize onlookers.</p>
      </div>
      <div class="product-content">
        <p></p>
      </div>
      <div class="product-footer">
        <p><i class="fas fa-comments-dollar"></i>Price:500$</p>
        <a href="{{url('cart_gold')}}">
          <input type="submit" value="Add to Cart">
        </a>
      </div>
    </div>
  </div>
</div>
<div class="footer">
</div>
<style>
  @import url(https://fonts.googleapis.com/css?family=Dosis:300,400);

* {
  box-sizing: border-box; 
}
body {
  font-family: "Raleway";
  font-weight: 400;
  font-size: 14px;
  display: flex;
  min-height: 100vh;
  height: 100vh;
  overflow: hidden;
  flex-direction: column;
  margin: 0;
  background: #fff;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #FFFFFF, #fff);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #FFFFFF, #fff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
justify-content: space-between;
  color: #505050;
}

a{
  text-decoration: none;
}

.header{
  border-bottom: 1px solid rgba(0,0,0,0.08);
  height: 10vh;
  display: flex;
  justify-content: space-between;
}
.header-izq{
  display: flex;
  align-items: center;
  justify-content: center;
}
.header-izq > a > i{
  font-size: 3em;
}
.header-izq > a{
  color: #505050;
}
.header-cent > a > img {
  width: 100%;
  max-width: 75px;
  max-height: 75px;
}
.header-der{
  display: flex;
  align-items: center;
  justify-content: center;
}

.product-simple{
  display:flex;
  justify-content: center;
}

.product-simple-left{
  max-width: 520px;
  max-height: 520px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.product-simple-left > img {
  min-width: 100%;
  max-width: 100%;
  min-height: 100%;
  max-height: 100%;
}
.product-simple-right{
  max-width: 520px;
  max-height: 520px;
  display:flex;
  flex-direction: column;
  //justify-content: space-between;
  padding: 1%;
}
.product-content{
  overflow: auto;
  flex: 1;
  text-align: justify;
}
.product-footer > p {
  font-size: 1.1em;
  border-bottom: 1px solid rgba(0,0,0,0.08);
}
.product-footer > p > i{
  color: #47c9e5 !important;
  font-size: 1.1em;
  margin-right: 10px;
}

.footer{
  display: flex;
  justify-content: center;
  height: 5vh;
  background-color: #f5f5f5;
}




/***********************************/
/*******  SCROLL BAR *******/
/*
 *  STYLE 5
 */

.product-content::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.product-content::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

.product-content::-webkit-scrollbar-thumb
{
	background-color: #0ae;
	
	background-image: -webkit-gradient(linear, 0 0, 0 100%,
	                   color-stop(.5, rgba(255, 255, 255, .2)),
					   color-stop(.5, transparent), to(transparent));
}



</style>