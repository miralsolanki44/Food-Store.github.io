@extends('store.storeLayout')
@section('content')




<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->


<h1>About Us</h1>

<p>
Our main goals are convenience and exquisite quality. Our hand-curated gourmet food selections represent some of the classics of gourmet cuisine—sometimes with a modern update, but always faithful to the original. And above all are simple to prepare and serve, leaving you that precious time to relax or enjoy guests.
</p>
<p>
Started as a small chef-inspired meal delivery company in 1996, current partners Laura McManus and Kate Glenn have continued the tradition and ethics of a small business since 2011, staying true to its roots. Both believe employees and customers are part of our extended family, and although we’ve grown considerably since our humble beginnings, as owner-operators we believe firmly in staying true to our roots. That means above all delivering an exceptional, personal shopping experience every single day.

Whether you’re hosting a gourmet dinner party, celebrating a special occasion, or just looking for a weeknight treat or an impressive gift, we have what you need. Our unique Dinner for Two selections, specially designed with foods that complement each other brilliantly, are developed with you in mind. Or use one of our delectable entrées as the base for a wonderful meal and mix and match sides and desserts to your own taste. The possibilities are endless.
</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="{{url('/images/c1.jpg')}}" alt="Mountains" style="width:100%">
       <h3>Cheesecake Praline Cones</h3>
  <p>When a pastry chef invents something this scrumptious, the world takes notice. These cheesecake cones are truly addictive. Sweet, nutty, and buttery almond praline is carefully and cleverly shaped into a cone and filled with rich cheesecake. They'll be as popular with your guests as they are with the legions of fans raving about them! Unique and delicious, this is a new dessert classic and the perfect way to end any special dinner! Six 4 oz. Cheesecake Praline Cones, each is an individual serving. Please Note: Topping not included.
</p>
      </div>
  </div>
  <div class="column">
    <div class="content">
   <img src="{{url('/images/Old World Pork Schnitzel Dinner for Two
.png')}}" alt="Lights" style="width:100%">
    <h3>Old World Pork Schnitzel Dinner for Two
</h3>
<p>Vanilla Bourbon Bacon Lollipops get this meal off to a hearty beginning followed by our Pork Schnitzel, old-world comfort food at its finest. Served alongside our Garlic Mashed Potatoes, you’re sure to fulfill the heartiest of appetites. For dessert, a European tradition and one of our favorites, Sticky Toffee Pudding. Everyone will be well fed and supremely satisfied. Serves 2.
</p> </div>
  </div>

  <div class="column">
    <div class="content">
    <img src="{{url('/images/Deluxe Land & Sea Meal for Two
.png')}}" alt="Nature" style="width:100%">
     <h3>Deluxe Land & Sea Meal for Two
</h3>
    <p>A meal that exudes elegance. Start by sharing a dozen of our award-winning Caramelized Onion and Feta Pastry Kisses over cocktails, then light some candles as you enjoy two 3 oz. Crab Cakes and two 5 oz. Filet Mignon, served alongside two Supreme Twice Baked Potatoes and a casserole of Green Beans Almondine. For dessert, enjoy our Molten Chocolate Cakes. Tres elegant!

</p>
     </div>
  </div>

<div class="column">
    <div class="content">
    <img src="{{url('/images/c4.png')}}" alt="Nature" style="width:100%">
     <h3>Filet & Lobster Meal for Two

</h3>
    <p>Nothing says luxury quite like Filet Mignon and Lobster, the classic surf and turf pairing.  Your meal begins with Spanakopita, a Greek classic filled with spinach, feta cheese, and aromatics wrapped in flaky phyllo pastry. The main course includes two 4 oz. cold water lobster tails and two 5 oz. Filet Mignon.  Broiled or grilled, there are so many delicious ways to prepare. Served alongside our Vegetable Potato Medley, this is a meal to remember. The ending is sweet bliss: individual Pineapple Upside Down Cakes.



</p>
     </div>
  </div>

<!--
</div>
<div class="section">
    <!-- container -->
    <!--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Order Id</th>
                        <th>Image </th>
                        <th>Name</th>
                        <th>Quanity</th>
                        <th>Color</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                           <div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-05.jpg">
							<img src="{{url('/images/gallery-img-04.jpg')}}" alt="Image"/>
                    </a>
                        			<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="{{url('/images/img-03.jpg')}}" alt="Image"/>
                   					<div class="why-text">
											<h4>Special Drinks 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $10.79</h5>
										</div>
									</div>
								</div>
								
					
                      
                        </tbody>
                </table>
            </div>
        </div>
      
    </div>

</div>-->

@endsection
