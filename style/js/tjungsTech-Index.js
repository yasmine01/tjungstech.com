   //window load script start
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })
    //windows load script end
   //active menu script start
    $(function() {
        $("#menu_username").hide();
        $(".rslides").responsiveSlides();

        var url = window.location.search;
        //alert(url);
        var page = url.substring(url.lastIndexOf('=')+1);
        //alert(page);
        if(page=='home')
        {
            $('#home').addClass('active');
        }
        else if (page=='aboutus'){
            $('#aboutus').addClass('active');
        }
        else if(page=='service')
        {
            $('#service').addClass('active');
        }
        else if(page=='contactus')
        {
            $('#contactus').addClass('active');
        }
        else if(page=='login')
        {
            $('#login').addClass('active');
        }
        else if(page=='register')
        {
            $('#login').addClass('active');
        }
        else if(page=='tracsec')
        {
            $('#tracsec_our_product').addClass('active');
            $('#tracsec_our_product_item1').addClass('active');
        }
        else
        {
            $('#home').addClass('active');
        }
    });
   //active menu script end

   //slide image script start
   //declare the slider items
$('.cd-testimonials-wrapper').flexslider({
    selector: ".cd-testimonials > li",
    animation: "slide",
    //do not add navigation for paging control of each slide
    controlNav: false,
    slideshow: false,
    //Allow height of the slider to animate smoothly in horizontal mode
    smoothHeight: true,
    start: function(){
        $('.cd-testimonials').children('li').css({
            'opacity': 1,
            'position': 'relative'
        });
    }
});
   //slide image script stop
$('.collapse').on('shown.bs.collapse', function(){
    $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
    $(this).parent().find(".plus-icon").removeClass("plus-icon").addClass("minus-icon");
}).on('hidden.bs.collapse', function(){
    $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
    $(this).parent().find(".minus-icon").removeClass("minus-icon").addClass("plus-icon");
});



   //wiz form

   $('#btn_done').hide();
   $('#selectImage').attr('src',"./img/uploadimage.png");
   var options =
   {
       imageBox: '.imageBox',
       thumbBox: '.thumbBox',
       spinner: '.spinner',
       imgSrc: 'avatar.png'
   }
   var cropper;
   document.querySelector('#file').addEventListener('change', function(){
       var reader = new FileReader();
       reader.onload = function(e) {
           options.imgSrc = e.target.result;
           cropper = new cropbox(options);

           $('#btn_done').show();
       }
       reader.readAsDataURL(this.files[0]);
       this.files = [];

   })
   document.querySelector('#btn_done').addEventListener('click', function(){
       var img = cropper.getDataURL()
       //document.querySelector('.cropped').innerHTML += '<img src="'+img+'">';
       $('#selectImage').attr('src',img);
       alert(img);
   })
   document.querySelector('#btnZoomIn').addEventListener('click', function(){
       cropper.zoomIn();
   })
   document.querySelector('#btnZoomOut').addEventListener('click', function(){
       cropper.zoomOut();
   })
   // wiz form stop

