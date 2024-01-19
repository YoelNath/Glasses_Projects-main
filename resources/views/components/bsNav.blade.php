<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/Glassespedia/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="/Glassespedia/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg" >
    <div class="container-fluid">
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-outline-success fa fa-search"  type="button" data-bs-toggle="modal" data-bs-target="#search-modal">
        </form>
        
        </button>
         
        <div class="modal fade " id="search-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-top">
            <div class="modal-content modal-custom rounded-4 p-3 ">
        
              <div class="modal-body search-mod text-center ">
                <p>Quickly find episodes, articles, and pages across the website.</p>
        
               <input type="text" class=" form-control rounded-5 border-0 py-3 mb-3" id="modal-email" placeholder="Enter your email...">
                  
                  <button type="button"  class="btn btn-primary rounded-5 py-3 btn-search">Search</button>
              </div>
              <div class="modal-footer mt-4 ">
<div class="container-fluid   ">
                <div class="row mt-3">
                  <div class="col-4 g-0 p-0 m-auto">
                  
                    <li class="d-inline-block">
                      <div class="icon-wrp">

                        <img  src="https://web.archive.org/web/20220316130405im_/https://assets-global.website-files.com/5f46baf9863467a01b1aaab9/5f48e96eee96f56ecaa77e0b_popular-white.svg" class="icon" alt="">

                      </div>
                      <a>Popular</a>
                     </li>
                  </div>
                  <div class="col-4  g-0 m-auto">

                     <li class="d-inline-block">
                      <div class="icon-wrp">

                        <img  src="https://web.archive.org/web/20220301010228im_/https://assets-global.website-files.com/5f46baf9863467a01b1aaab9/5f54b4db31df4cefcc660906_latest-posts-white.svg" class="icon" alt="">
                   
                       </div>
                     <a>Recent</a>
                    </li>
                  </div>
                  <div class="col-4  g-0 m-auto">

                    <li class="d-inline-block">
                      <div class="icon-wrp ">

                        <img  src="https://web.archive.org/web/20220301010228im_/https://assets-global.website-files.com/5f46baf9863467a01b1aaab9/5f5776bf1f735a4480fcc81f_topics-and-tags-white.svg" class="icon" alt="">
             
                      </div>
                      <a>Browse</a>
                     </li>
                  </div>
                </div>
              </div>
    
              </div>
            </div>
          </div>
        </div>
      <a class="navbar-brand ms-5" href="/">Glassespedia</a>
 
      
       


<a href="/cart">
      <button class="btn btn-outline-success fa fa-shopping-cart"  type="button" data-bs-toggle="modal" data-bs-target="#sub-modal">
      </button>
    </a>
 
      {{-- <div class="modal fade" id="sub-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-top">
          <div class="modal-content modal-custom rounded-4 p-3">
      
            <div class="modal-body text-center">
              <p>Join 5k+ subscribers and receive exclusive tools, tips, and resources, sent directly from Daniel Scrivner.</p>
      
              <div class="submit mt-4 rounded-4">
                <input type="text" class="form-control rounded-4 border-0 p-4" id="modal-email" placeholder="Enter your email...">
                <button type="button" class="btn btn-primary rounded-4 p-4">Subscribe now</button>
              </div>
            </div>
            <div class="modal-footer border-0">
              <p>By subscribing, you agree to our
                ‍privacy policy and will be added to Daniel’s
                free email newsletter.</p>
            </div>
          </div>
        </div>
      </div> --}}
      
      

      </div>

  </nav>



      <nav class="navbar navbar-expand-lg custom-navbar">
          <div class="container-xxl nav-pad" >

                <li class="nav-item">
                  <a class="nav-link"href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/menglasses ">Glasses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
             
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown-menu" aria-expanded="tr">
                    More
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> --}}
             
            </div>
          </div>
        </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
