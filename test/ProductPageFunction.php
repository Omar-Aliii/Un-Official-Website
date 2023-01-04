<link rel="stylesheet" href="css/bootstrap.css"/>
<?php 
function component($Tshirts_Name,$Tshirts_Manufacture,$Tshirts_Color,$IMG1,$Link){
$container = "container";
$imgbx = "imgBx";
$contentBx= "contentBx";
$size = "size";
$card = "card".$Tshirts_Manufacture;
  $HTML='

  <div class "col-md-3 col-sm-6 my-3 my-md-0">
    <div class="container" >
    <div class="card'.$Tshirts_Manufacture.'" style="background:'.$Tshirts_Color.';content:'.$Tshirts_Manufacture.';">
        <div class="imgBx">
            <img src="'.$IMG1.'">
        </div>
        <div class="contentBx">
            <h2>'.$Tshirts_Name.'<br></h2>
            <div class="size">
                <h3>Size :</h3>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
            </div>
            <a href="'.$Link.'">Buy Now</a>
        </div>
    </div>
</div>
</div>











';
echo $HTML;
}

?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
  font-family: 'Poppins', sans-serif;
}

:root {
  --1: 'Adidas';
  --2: 'Castore';
  --3: 'Umbro';
  --4: 'Nike';
  --5: 'Macron';
  --6: 'Hummel';
  --7: 'Puma';
}


body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #131313;
}

.container{
  position: relative;
}

.container .card1{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card1:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card1:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card1:after{
  content: var(--1);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card1 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card1:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card1 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card1 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card1:hover .contentBx{
  height: 210px;
}

.container .card1 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card1 .contentBx .size{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
  
}

.container .card1:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
  
}



.container .card1 .contentBx .size h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
  margin-top:30px;
}

.container .card1 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  margin-top:20px;
}



.container .card1 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 20px;
}



.container .card1:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}





































.container .card2{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card2:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card2:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card2:after{
  content: var(--2);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card2 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card2:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card2 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card2 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card2:hover .contentBx{
  height: 220px;
}

.container .card2 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card2 .contentBx .size, .container .card .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card2:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card2:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card2 .contentBx .size h3, .container .card .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
  margin-top:20px;
}

.container .card2 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  margin-top:5px;
}



.container .card2 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 5px;
}



.container .card2:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}






























.container .card3{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card3:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card3:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card3:after{
  content: var(--3);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card3 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card3:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card3 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card3 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card3:hover .contentBx{
  height: 220px;
}

.container .card3 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card3 .contentBx .size, .container .card3 .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card3:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card3:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card3 .contentBx .size h3, .container .card .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}

.container .card3 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
}



.container .card3 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 20px;
}



.container .card3:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}


















.container .card4{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card4:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card4:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card2:after{
  content: var(--4);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card4 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card4:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card4 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card4 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card4:hover .contentBx{
  height: 220px;
}

.container .card4 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card4 .contentBx .size, .container .card .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card4:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card4:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card4 .contentBx .size h3, .container .card .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
  margin-top:20px;
}

.container .card4 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  margin-top:5px;
}



.container .card4 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 5px;
}



.container .card4:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}







.container .card5{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card5:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card5:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card5:after{
  content: var(--5);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card5 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card5:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card5 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card5 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card5:hover .contentBx{
  height: 220px;
}

.container .card5 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card5 .contentBx .size, .container .card5 .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card5:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card5:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card5 .contentBx .size h3, .container .card .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
  margin-top:20px;
}

.container .card5 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  margin-top:5px;
}



.container .card5 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 5px;
}



.container .card5:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}











.container .card6{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card6:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card6:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card6:after{
  content: var(--6);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card6 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card6:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card6 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card6 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card6:hover .contentBx{
  height: 220px;
}

.container .card6 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card6 .contentBx .size, .container .card6 .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card6:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card6:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card6 .contentBx .size h3, .container .card .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
  margin-top:20px;
}

.container .card6 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  margin-top:5px;
}



.container .card6 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 5px;
}



.container .card6:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}















.container .card7{
  margin-top:20px;
  margin-bottom:20px;
  position: relative;
  width: 320px;
  height: 450px;
  background: #232323;
  border-radius: 20px;
  overflow: hidden;
}

.container .card7:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.container .card7:hover:before{
  clip-path: circle(300px at 80% -20%);
}
.container .card7:after{
  content: var(--2);
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color: rgba(0,0,0,0.5)
}

.container .card7 .imgBx{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}

.container .card7:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.container .card7 .imgBx img{
  position: absolute;
  padding-top: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 270px;
  height: 340px;
}

.container .card7 .contentBx{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}

.container .card7:hover .contentBx{
  height: 220px;
}

.container .card7 .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin: 0;
  margin-top: 40px;

}
br {
    display: block; /* makes it have a width */
    content: ""; /* clears default height */
    margin-top: -10px; /* change this to whatever height you want it */
}

.container .card7 .contentBx .size, .container .card7 .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
}

.container .card7:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}

.container .card7:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}

.container .card7 .contentBx .size h3, .container .card7 .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
  margin-top:20px;
}

.container .card7 .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  margin-top:5px;
}



.container .card7 .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 5px;
}



.container .card7:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;

}
































    </style>