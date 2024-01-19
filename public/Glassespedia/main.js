$(document).ready(function() {

    $('.slider').slick({
      dots: true,
      infinite: true,
      // autoplay: true,
      // autoplaySpeed: 2000,
     
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      speed:500,
 
      responsive: [
    
        {
         breakpoint: 991,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           arrows: false, 
         }
        },
       {
         breakpoint: 700,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           arrows: false, 
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           arrows: false, 

         }
       }

     ]
   
    });
   

  

  
  });


  $(document).ready(function() {

    $('.slider_home').slick({
      dots: true,
      infinite: true,
      // autoplay: true,
      // autoplaySpeed: 2000,
     
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed:500,
      autoplay:true,
 
      responsive: [
    
        {
         breakpoint: 991,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           arrows: false, 
         }
        },
       {
         breakpoint: 700,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           arrows: false, 
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           arrows: false, 

         }
       }

     ]
   
    });
   

  

  
  });

