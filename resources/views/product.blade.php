@extends('store.storeLayout')
@section('content')

<div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/c2.png" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                           </figure>
                                                         <img src="{{url('/images/c2.png')}}"class="img img-responsive" alt="Image"width="500" height="600"/>

                        <div class="fh5co-text">
                            <h2>Honey Bourbon Salmon Dinner
</h2>
                           <p><span class="price cursive-font">$20.99</span></p>
                        </div>
                    </a>
                </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/c1.jpg" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                           </figure>
                        <img src="{{url('/images/c1.jpg')}}"class="img img-responsive" alt="Image"width="500" height="600"/>

                        <div class="fh5co-text">
                            <h2>Cheesecake Praline Cones
</h2>
                           
                            <p><span class="price cursive-font">$39.95</span></p>
                        </div>
                    </a>
                </div>

         
         
       
         
          <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/snake.png" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                           </figure>
                                                         <img src="{{url('/images/snake.png')}}"class="img img-responsive" alt="Image" width="500" height="600"/>

                        <div class="fh5co-text">
                            <h2>Snake</h2>
                            <p><span class="price cursive-font">$20.99</span></p>
                        </div>
                    </a>
                </div>

        
          <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="images/c4.png" class="fh5co-card-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                           </figure>
                                                         <img src="{{url('/images/c4.png')}}"class="img img-responsive" alt="Image"width="500" height="600"/>

                        <div class="fh5co-text">
                            <h2> Potato Rolls</h2>
                            <p><span class="price cursive-font">$20.99</span></p>
                        </div>
                    </a>
                </div>
               
    @endsection