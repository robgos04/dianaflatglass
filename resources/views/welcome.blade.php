<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .topnav a#home_menu:hover {
        color: #ed3226;
        background-image:url("{{ asset('/images/home_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#company_menu:hover {
        color: #ed3226;
        background-image:url("{{ asset('/images/company_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#gallery_menu:hover {
        color: #ed3226;
        background-image:url("{{ asset('/images/gallery_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#product_menu:hover {
        color: #ed3226;
        background-image:url("{{ asset('/images/product_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#contact_menu:hover {
        color: #ed3226;
        background-image:url("{{ asset('/images/contact_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#home_menu.active {
        color: #ed3226;
        background-image:url("{{ asset('/images/home_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#company_menu.active {
        color: #ed3226;
        background-image:url("{{ asset('/images/company_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#gallery_menu.active {
        color: #ed3226;
        background-image:url("{{ asset('/images/gallery_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#product_menu.active {
        color: #ed3226;
        background-image:url("{{ asset('/images/product_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }
    .topnav a#contact_menu.active {
        color: #ed3226;
        background-image:url("{{ asset('/images/contact_menu_icon.png') }}");
        background-size:contain;
        background-repeat: no-repeat;
    }

    .gallery_bg{
        background-image:url("{{ asset('/images/gallery_bg_1.png') }}"), url("{{ asset('/images/gallery_bg_2.png') }}");
        background-position: left bottom, right bottom;
        background-size:30%;
        background-repeat: no-repeat;
        margin-top: 60px;
    }

    #gallery_modal .modal-content{
        background-image:url("{{ asset('/images/bg_residence.png') }}");
        background-size: 20% 40%;
        background-repeat: no-repeat;
    }

    @media screen and (max-width: 600px) {
        .topnav a#home_menu:hover, .topnav a#company_menu:hover, .topnav a#gallery_menu:hover, .topnav a#product_menu:hover, .topnav a#contact_menu:hover {
            color: #ed3226;
            background-image:none;
            background-size:none;
        }
        .topnav a#home_menu.active, .topnav a#company_menu.active, .topnav a#gallery_menu.active, .topnav a#product_menu.active, .topnav a#contact_menu.active {
            color: #ed3226;
            background-image:none;
            background-size:none;
        }

        .gallery_bg{
            background-image:url("{{ asset('/images/gallery_bg_1.png') }}"), url("{{ asset('/images/gallery_bg_2.png') }}");
            background-position: left bottom, right top;
            background-size:contain;
            background-repeat: no-repeat;
            margin-top:360px;
            padding-top:2px;
        }
    }
    </style>
    <body>
        <!-- MENU BAR -->
        <nav>
            <div class="col-md-12 col-sm-12">
                <center><img src="{{ asset('/images/diana_logo.gif') }}" width="120px;"></center>
            </div>
            <div class="col-md-12 col-sm-12">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div><br>
            <div class="col-md-12 col-sm-12">
                <div class="topnav" id="myTopnav">
                    <a href="#" id="home_menu" class="active">home</a>
                    <a href="#company_body" id="company_menu">company profile</a>
                    <a href="#gallery_body" id="gallery_menu">gallery project</a>
                    <a href="#product_body" id="product_menu">product & service</a>
                    <a href="#contact_body" id="contact_menu">contact us</a>
                </div>
            </div>
        </nav>
        <!-- -->

        <!-- BODY -->
        <div class="container-fluid">
            <!-- home -->
            <div id="home_body">
                <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <video autoplay muted loop class="homepageVideo">
                                <source src="{{ asset('/images/bg-homepage.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="text_bg">
                                <br><br>
                                <span style="font-size:150%;font-family: 'neumannregular';color:#d43226;">The art and the pride..</span><br>
                                As what it's word itself, we ensure to give nothing but the best planning and <br>result to every project that we handle as what we trust on.<br>
                                For us, the best result on what we doing,<br>is not just simply talking about some satisfaction for our client, <br>but more than that, it is defining of who we are and<br>what we are doing is about presenting pride, especially for our client
                                <br><br>
                                <center><img src="{{ asset('/images/home_slogan.png') }}" style='height:20%;width:40%;object-fit: contain;'></center>
                                <br>
                                <a href="https://www.instagram.com/diana.flatglass/"><img src="{{ asset('/images/ig_icon.png') }}" class="company_socmed_icon"></a>&nbsp;&nbsp;<a href="#"><img src="{{ asset('/images/yt_icon.png') }}" class="company_socmed_icon"></a>
                            </div>
                        </div>
                </div>
            </div>
            <br>
            <br>
            <!-- company -->
            <div id="company_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 company_text_bg">
                            <div class="row">
                                <div class="col-sm-8 col-md-8 company_left">
                                    <div id="companyProfileText" class="carousel slide" data-interval="false"> <!--data-ride="carousel"-->

                                        <!-- Indicators -->
                                        <!--ul class="carousel-indicators">
                                            <li data-target="#companyProfileText" data-slide-to="0" class="active"></li>
                                            <li data-target="#companyProfileText" data-slide-to="1"></li>
                                        </ul>-->

                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                            <!--<div class="carousel-item active" data-id="0">
                                                Diana Flat Glass Processing. Founded in 1985, we are<br>
                                                the leading providers of the architectural glass,<br>
                                                aluminium, and glass accessories system. We process,<br>
                                                supply, and install the product for both residential and<br>
                                                commercial projects.<br>
                                                <br>
                                                As an exclusive agent of Himalaya Abadi, Allure Aluplus<br>
                                                Aluminium, and Dorma, now we are looking for<br>
                                                energetic, self-driven, creative team player to join us in<br>
                                                expanding our business to present excellence product<br>
                                                and service for our customers.
                                            </div>-->
                                            <div class="carousel-item active" data-id="0">
                                                Diana Flat Glass Processing. Founded in 1985, we are<br>
                                                the leading providers of the architectural glass,<br>
                                                aluminium, and glass accessories system. We process,<br>
                                                supply, and install the products for both residential and<br>
                                                commercial projects.<br>
                                                <br>
                                                As a part of Glassmart Makassar,<br>an exclusive agent of Allure Industries Aluminium,<br>major provider of Asahimas Glass,<br>applicator of innovative architectural and interior products<br>such as Reholz, Dorma Kaba, Dekson, Roxy Glass, and many more, together with energetic and creative team player,<br>our goal is to present excellence product<br>and service for our customers.
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Left and right controls -->
                                    <br>
                                    <!--div class="arrow_text_company_profile">
                                        <img src="{{ asset('/images/left_arrow.png') }}" class="profile_socmed_icon" href="#companyProfileText" data-slide="prev">&nbsp;&nbsp;&nbsp;<img src="{{ asset('/images/right_arrow.png') }}" class="profile_socmed_icon" href="#companyProfileText" data-slide="next">
                                        <br><br>
                                    </div>-->
                                    <p>
                                        <a href="https://www.instagram.com/diana.flatglass/"><img src="{{ asset('/images/ig_icon.png') }}" class="company_socmed_icon"></a>&nbsp;&nbsp;<a href="#"><img src="{{ asset('/images/yt_icon.png') }}" class="company_socmed_icon"></a>
                                    </p>
                                </div>
                                <div class="col-sm-2 col-md-2 line_separator">
                                    <img src="{{ asset('/images/separator.png') }}" style='height: 300px; object-fit: contain;'>
                                </div>
                            </div>
                                
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <video autoplay muted loop class="myVideo">
                            <source src="{{ asset('/images/company_profile.mp4') }}" type="video/mp4">
                        </video>
                        <div class="logo_video">
                            <img src="{{ asset('/images/our_story.png') }}" style='height:30%;width:60%;object-fit: contain;'>
                        </div>
                    </div>
                </div>
            </div>

            <!-- gallery -->
            <div id="gallery_body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 gallery_bg">
                        <center>
                            <a id="residence_btn"><img src="{{ asset('/images/residence_red.jpg') }}" class="img_gallery_opt residence_img"></a>
                            <a id="building_btn"><img src="{{ asset('/images/building_red.jpg') }}" class="img_gallery_opt building_img"></a>
                            <a id="retail_btn"><img src="{{ asset('/images/retail_red.jpg') }}" class="img_gallery_opt retail_img"></a>
                        <center>
                    </div>
                    <div class="col-md-12 col-sm-12 here_bg">
                        <center>
                            <!--img src="{{ asset('/images/here_is.png') }}" class="img_gallery_opt"-->
                            <span style="font-size:180%;font-family: 'neumannregular';color:#d43226;">here is what we did</span>
                        <center>
                    </div>
                    <div class="col-md-12 col-sm-12 text_gallery_bg">
                        <center>
                        We do everything we could to make your dream, creativity or even your imagination become reality. Your dream is our challenge, because we believe dream is meant to be achieved.
                        <center>
                    </div>
                </div>
            </div>
            
            <!-- product & service-->
            <div id="product_body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <center><span style="font-size:180%;font-family: 'neumannregular';color:#d43226;">the solutions we have for you</span></center>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <center>
                            <div style="display:inline-flex;">
                                <span class="horizon solution_horizon-prev"><img src="{{ asset('/images/left_arrow.png') }}"></span>
                                <div class="container_solution">
                                    <div id="inside_box_solution">
                                        <!-- contentBlock_solution -->
                                    </div>
                                </div>
                                <span class="horizon solution_horizon-next"><img src="{{ asset('/images/right_arrow.png') }}"></span>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br><br><br><br>
                        <center><span style="font-size:180%;font-family: 'neumannregular';color:#d43226;">everything for your satisfaction</span></center>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br><center>
                            <div style="display:inline-flex;">
                                <span class="horizon horizon-prev"><img src="{{ asset('/images/left_arrow.png') }}"></span>
                                <div class="container_vision">
                                    <div id="inside_box">
                                        <!-- contentBlock -->
                                    </div>
                                </div>
                                <span class="horizon horizon-next"><img src="{{ asset('/images/right_arrow.png') }}"></span>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

            <!-- contact us-->
            <div id="contact_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <center>
                            <iframe class="map" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA8Orx1XfWotNUBM4WuFrzu6JS1YGHaQEg&q=Diana+Flat+Glass+Processing,Jalan+Sulawesi,Butung,Makassar+City,South+Sulawesi,Indonesia&zoom=18" allowfullscreen></iframe>
                        <center>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="col-md-12 col-sm-12">
                            <center><span style="font-size:150%;font-family: 'neumannregular';color:darkgrey;">we would like to hear what you thought</span></center>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <br>
                            <input type="text" name="contact_name" id="contact_name" class="form-control no-outline" placeholder="name">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <br>
                            <input type="text" name="contact_email" id="contact_email" class="form-control no-outline" placeholder="email">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <br>
                            <input type="number" name="contact_no" id="contact_no" class="form-control no-outline" placeholder="phone no.">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <br>
                            <textarea name="contact_message" id="contact_message" class="form-control no-outline" row="3" placeholder="your message (address or any social media)"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <br><center>
                            <button type="submit" class="btn btn_email">Submit</button>
                            <center>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <br>
                            <center><a href="https://www.instagram.com/diana.flatglass/"><img src="{{ asset('/images/ig_icon.png') }}" class="company_socmed_icon"></a>&nbsp;&nbsp;&nbsp;<a href="#"><img src="{{ asset('/images/yt_icon.png') }}" class="company_socmed_icon"></a></center>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- -->
        @include('modal')
    </body>
    <footer>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <center>
                    <span style="font-size:120%;font-family: 'neumannregular';">please feel free to visit us</span>
                <center>
            </div>
            <div class="col-md-12 col-sm-12">
                <center>
                    <br>
                    <i class="footerText">office</i><br>
                    Jl. Sulawesi no. 289, Makassar&nbsp;&nbsp;<i style="color:#f4a669;font-family: 'neumannregular';">&#8226;T:</i><a href="tel:04113631530" style="color:white;"> 0411 - 3631530 </a>/ <a href="tel:04113624977" style="color:white;">0411 - 3624977</a>&nbsp;&nbsp;<i style="color:#f4a669;font-family: 'neumannregular';">&#8226;F:</i><a href="tel:04113613546" style="color:white;">0411 - 3613546</a>&nbsp;&nbsp;<i style="color:#f4a669;font-family: 'neumannregular';">&#8226;E:</i> retail@dianaflatglass.com
                <center>
            </div>
            <div class="col-md-12 col-sm-12">
                <center>
                <br>
                <i class="footerText">showroom</i><br>
                Jl. Sulawesi no. 285, Makassar&nbsp;&nbsp;<i style="color:#f4a669;font-family: 'neumannregular';">&#8226;T:</i><a href="tel:04113626232" style="color:white;"> 0411 - 3626232</a>&nbsp;&nbsp;<i style="color:#f4a669;font-family: 'neumannregular';">&#8226;E:</i> info@dianaflatglass.com
                <center>
            </div>
        </div>
    </footer>
</html>
<script>
var residence_img = {!! $residence !!};
var building_img = {!! $building !!};
var retail_img = {!! $retail !!};
var position = 0;
var baseUrl = "{{ asset('/images/') }}";

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
    $("nav").css({"height":"408px"});
  } else {
    x.className = "topnav";
    $("nav").css({"height":"154px"});
  }
}

$(document).ready(function(){
    //Back to home every time reload
    $(window).scrollTop(0);
    window.location.replace("#");

    if (typeof window.history.replaceState == 'function') {
        history.replaceState({}, '', window.location.href.slice(0, -1));
    }
    //

    //Hide the arrow for carousel in company profile if only 1 slide
    var lengthSlide = $("#companyProfileText").find(".carousel-item");
    if(lengthSlide.length == 1){
        $(".arrow_text_company_profile").hide();
    }
    //

    $(".carousel_prev").find('img').hide();
    $(".carousel_next").find('img').hide();

    $(".gallery_bg").find("a").each(function(){
        var idGallery = $(this).attr("id");

        $("#"+idGallery).on("click", function(){
            $(".content_gallery").children().remove();

            $('#gallery_modal').modal('show');
            if(idGallery == "residence_btn"){
                $(".gallery_show_img").attr("src", baseUrl+"/gallery/residence/"+residence_img[0].url);
                showGalleryContent(residence_img, "residence");
                $("#gallery_modal").find(".modal-title").html("<b>Residence</b>");
                $(".modal-content").css({"background-image":"url("+baseUrl+"/bg_residence.png')"});
            }else if(idGallery == "building_btn"){
                $(".gallery_show_img").attr("src", baseUrl+"/gallery/building/"+building_img[0].url);
                showGalleryContent(building_img, "building");
                $("#gallery_modal").find(".modal-title").html("<b>Building</b>");
                $(".modal-content").css({"background-image":"url("+baseUrl+"/bg_building.png')"});
            }else if(idGallery == "retail_btn"){
                $(".gallery_show_img").attr("src", baseUrl+"/gallery/retail/"+retail_img[0].url);
                showGalleryContent(retail_img, "retail");
                $("#gallery_modal").find(".modal-title").html("<b>Retail</b>");
                $(".modal-content").css({"background-image":"url("+baseUrl+"/bg_retail.png')"});
            }
        });
    });

    //Menu Product
    $.each(product_array, function( index, value ) {
        var image_src = baseUrl+"/product/"+value.name+"/"+value.logo;
        $("#inside_box_solution").append('<div class="contentBlock_solution" id="'+value.name+'"><center><img src="'+image_src+'" style="height:120%;width:100%"></center></div>');
        $("#"+value.name).on("click", function(){

            if(value.type == "image"){
                $('.product_modal').modal('show');
                $('.product_modal').attr('id', 'division_'+value.name);
                $("#division_"+value.name).find("#template_product_popup_image .row").children().remove();
                $("#division_"+value.name).find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $("#division_"+value.name).find(".division_desc").html('<center><p>'+value.desc+'</p></center><br><br>');

                $("#division_"+value.name).find("#template_product_popup_image").show();

                //Show overflow scroll if brand is more than 4
                if(value.product.length > 4){
                    $("#division_"+value.name).find("#template_product_popup_image").css({"overflow-y":"scroll","overflow-x":"hidden","height":"210px"});
                }
                //

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_logo;
                    $("#division_"+value.name).find("#template_product_popup_image .row").append('<div class="col-md-3 col-sm-3" id="product_'+content.product_name+'"><center><img src="'+product_logo+'" style="height:55%;width:55%;cursor:pointer;"></center></div>');

                    $("#product_"+content.product_name).on("click",function(){
                        var product_table = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_table;
                        $("#division_"+value.name).modal('hide');
                        $('#detailProduct_modal').modal('show');
                        $('#detailProduct_modal').find('.product_gallery .row').children().remove();
                        $('#detailProduct_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#division_"+value.name);
                        $('#detailProduct_modal').find('.product_desc').html(content.product_desc);
                        $('#detailProduct_modal').find('.product_table img').attr("src", product_table);
                        $("#carouselProdukImage").find("ul.carousel-indicators").children().remove();
                        $("#carouselProdukImage").find(".carousel-inner").children().remove();

                        $.each(content.product_image, function(index, img){
                            var imgName = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+img.url;
                            $('#detailProduct_modal').find('.product_gallery .row').append('<div class="col-md-3 col-sm-3 imgProduct" id="img_'+index+'"><center><img src="'+imgName+'" style="height:90%;width:90%;"></center></div>');
                            $('#carouselProdukImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukImage" data-slide-to="'+index+'"></li>');
                            $('#carouselProdukImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img id="imgCarousel" src="'+imgName+'" style="cursor:zoom-in;"><center></div>');
                            if(index == 0){
                                $("#carouselProdukImage").find(".carousel-item").addClass("active");
                            }

                            $(".imgProduct#img_"+index).on("click", function(){
                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                $('#carouselProdukImage').find(".carousel-item.active").removeClass('active');
                                $('#carouselProdukImage').find(".carousel-item[data-id="+index+"]").addClass('active');
                            });
                        });

                    });
                });
            }else if(value.type == "text"){
                $('.product_modal').modal('show');
                $('.product_modal').attr('id', 'division_'+value.name);
                $("#division_"+value.name).find("#template_product_popup_image").css({"height":"auto"});
                $("#division_"+value.name).find("#template_product_popup_image .row").children().remove();
                $("#division_"+value.name).find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $("#division_"+value.name).find(".division_desc").html('<center><p>'+value.desc+'</p></center><br><br>');

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_logo;
                    $("#division_"+value.name).find("#template_product_popup_image .row").append('<div class="col-md-3 col-sm-3" id="product_'+content.product_name+'"><center><img src="'+product_logo+'" style="height:55%;width:55%;cursor:pointer;"></center></div>');

                    $("#product_"+content.product_name).on("click",function(){
                        var Urlproduct = baseUrl+"/product/"+value.name+"/"+content.product_name;
                        $("#division_"+value.name).modal('hide');
                        $('#subOption_modal').modal('show');
                        
                        //Hide the right arrow and left arrow if subMenu is only 4 or less than 5
                        if(!content.hasOwnProperty("product_submenu") || (content.hasOwnProperty("product_submenu") && content.product_submenu.length <= 4) ){
                            $(".solution_subOption-prev").hide();
                            $(".solution_subOption-next").hide();
                        }else{
                            $(".solution_subOption-prev").show();
                            $(".solution_subOption-next").show();
                        }
                        //

                        $('#subOption_modal').find('#inside_box_subOption').children().remove();
                        $('#subOption_modal').find('.modal-header .fa-arrow-left').show();
                        $("#template_submenu").find("ul").children().remove();
                        $('#subOption_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#division_"+value.name);
                        $('#subOption_modal').find('.division_name').html('<center><img src="'+Urlproduct+"/"+content.product_logo+'" style="height:20%;width:20%;"></center><br><br>'); 
                        $('#subOption_modal').find('.division_desc').html("<p>"+content.product_desc+"</p>");

                        $.each(content.product_submenu, function(index, menu){
                            $('#subOption_modal').find('.division_brand #template_product_popup_text #inside_box_subOption').append('<div class="col-md-4 col-sm-4 menuProduct" id="menu_'+index+'"><center>'+menu.menu_name+'</center></div>');
                            if(content.product_submenu.length == 1){
                                $('#subOption_modal').find('#inside_box_subOption .menuProduct').css({"border-right":"none"});
                            }
                            $("#menu_"+index).on("click",function(){
                                $("#template_submenu").find("ul").children().remove();
                                $.each(menu.menu_submenu, function(indexSubMenu, submenu){
                                    $("#template_submenu").find("ul").append("<li style='cursor:pointer;' class='subMenu_"+index+"_"+indexSubMenu+"'>"+submenu.subMenu_name+"</li>");

                                    $(".subMenu_"+index+"_"+indexSubMenu).on("click",function(){
                                        $("#subOption_modal").modal('hide');
                                        $('#detailProduct_modal').modal('show');

                                        $('#detailProduct_modal').find('.product_gallery .row').children().remove();
                                        $('#carouselProdukImage').find(".ul.carousel-indicators").children().remove();
                                        $('#carouselProdukImage').find(".carousel-inner").children().remove();
                                        $('#detailProduct_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#subOption_modal");
                                        $('#detailProduct_modal').find('.product_desc').html("<p>"+submenu.subMenu_desc+"</p>");

                                        if(submenu.subMenu_table != ''){
                                            var product_table_url = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+menu.menu_folder+"/"+submenu.subMenu_table;
                                            $('#detailProduct_modal').find('.product_table img').show();
                                            $('#detailProduct_modal').find('.product_table img').attr("src", product_table_url);
                                        }else{
                                            $('#detailProduct_modal').find('.product_table img').hide();
                                            $('#detailProduct_modal').find('.product_table').html("<p>No specification table</p>");
                                        }
                                        $.each(submenu.subMenu_image, function(indexImage, imageSubMenu){
                                            var imgName = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+menu.menu_folder+"/"+imageSubMenu.url;
                                            $('#detailProduct_modal').find('.product_gallery .row').append('<div class="col-md-3 col-sm-3 imgProduct" id="img_'+indexImage+'"><center><img src="'+imgName+'" style="height:90%;width:90%;"></center></div>');
                                            $('#carouselProdukImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukImage" data-slide-to="'+indexImage+'"></li>');
                                            $('#carouselProdukImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+indexImage+'"><center><img src="'+imgName+'" id="imgCarouselText" style="cursor:zoom-in;"><center></div>');

                                            if(indexImage == 0){
                                                $("#carouselProdukImage").find(".carousel-item").addClass("active");
                                            }

                                            $(".imgProduct#img_"+indexImage).on("click", function(){
                                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                                $('#carouselProdukImage').find(".carousel-item.active").removeClass('active');
                                                $('#carouselProdukImage').find(".carousel-item[data-id="+indexImage+"]").addClass('active');
                                            });
                                        });

                                    });
                                });
                            });
                        });
                    });
                });
            }else if(value.type == "gallery"){
                var active_index = 0;
                $('.productGallery2_modal').modal('show');
                $('.productGallery2_modal').find(".fa.fa-arrow-left").hide();

                $(".division_list").find('.row').children().remove();
                $('#carouselProdukGallery2Image').find(".ul.carousel-indicators").children().remove();
                $('#carouselProdukGallery2Image').find(".carousel-inner").children().remove();
                $('.productGallery2_modal').attr('id', 'division_'+value.name);

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_logo;

                    $('.division_list').find('.row').append('<div class="col-md-12 col-sm-12 imgProduct" id="img_'+index+'"><center><img src="'+product_logo+'" style="height:50%;width:50%;"></center></div>');

                    $('#carouselProdukGallery2Image').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukGallery2Image" data-slide-to="'+index+'"></li>');
                    $('#carouselProdukGallery2Image').find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img id="imgCarousel2" src="'+product_logo+'"><br><br><center></div>');
                    if(index == 0){
                        $("#carouselProdukGallery2Image").find(".carousel-item").addClass("active");
                        $(".imgProduct#img_"+index).addClass("active");
                    }

                    $(".imgProduct#img_"+index).on("click", function(){
                        //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                        $('#carouselProdukGallery2Image').find(".carousel-item.active").removeClass('active');
                        $('#carouselProdukGallery2Image').find(".carousel-item[data-id="+index+"]").addClass('active');
                        $(".row").find(".imgProduct.active").removeClass("active");
                        $(".imgProduct#img_"+index).addClass("active");
                    });
                });

                $("#carouselProdukGallery2Image .carousel_prev, #carouselProdukGallery2Image .carousel_next").on("click", function(){
                    $(".row").find(".imgProduct.active").removeClass("active");
                    active_index = $('#carouselProdukGallery2Image').find(".carousel-item.active").attr("data-id");
                });
            
            }else if(value.type == "brandGallery"){

                $('#subOption_modal').modal('show');
                $('.productGallery_modal').find(".fa.fa-arrow-left").show();
                $('#subOption_modal').find('#template_submenu ul').children().remove();
                $('#subOption_modal').find('.modal-header .fa-arrow-left').hide();
                $('#subOption_modal').find('#inside_box_subOption').children().remove();
                $('#subOption_modal').find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $('#subOption_modal').find(".division_desc").html('<p>'+value.desc+'</p>');

                $('#subOption_modal').find("#template_product_popup_text").show();

                //Hide the right arrow and left arrow if subMenu is only 4 or less than 5
                if((value.product).length <= 4 ){
                    $(".solution_subOption-prev").hide();
                    $(".solution_subOption-next").hide();
                }else{
                    $(".solution_subOption-prev").show();
                    $(".solution_subOption-next").show();
                }
                //

                $.each(value.product, function(productIndex, content){
                    $('#subOption_modal').find('.division_brand #template_product_popup_text #inside_box_subOption').append('<div class="col-md-3 col-sm-3 menuProduct" id="product_'+productIndex+'" data-id="'+productIndex+'"><center>'+content.product_name+'</center></div>');

                    $("#product_"+productIndex).on("click",function(){
                        $('.productGallery_modal').modal('show');
                        $('#subOption_modal').modal('hide');

                        $(".division_list").find('.row').children().remove();
                        $('#carouselProdukGalleryImage').find(".ul.carousel-indicators").children().remove();
                        $('#carouselProdukGalleryImage').find(".carousel-inner").children().remove();
                        var idProduct = $(this).attr("data-id");
                        $('.productGallery_modal').attr('id', 'division_'+idProduct);
                        $('.productGallery_modal').find('.modal-header .fa-arrow-left').attr("data-target", '#subOption_modal');

                        $.each(value.product[idProduct].product_image, function(imageIndex, imageContent){
                            var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+imageContent.url;

                            $('.division_list').find('.row').append('<div class="col-md-12 col-sm-12 imgProduct" id="imgBrand_'+imageIndex+'"><center><img src="'+product_logo+'" style="height:50%;width:50%;"></center></div>');

                            $('#carouselProdukGalleryImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukGalleryImage" data-slide-to="'+imageIndex+'"></li>');
                            $('#carouselProdukGalleryImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+imageIndex+'"><center><img id="imgCarousel2" src="'+product_logo+'"><br><br><center></div>');

                            if(imageIndex == 0){
                                $("#carouselProdukGalleryImage").find(".carousel-item").addClass("active");
                                $(".imgProduct#img_"+imageIndex).addClass("active");
                            }

                            $(".imgProduct#imgBrand_"+imageIndex).on("click", function(){
                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                $('#carouselProdukGalleryImage').find(".carousel-item.active").removeClass('active');
                                $('#carouselProdukGalleryImage').find(".carousel-item[data-id="+imageIndex+"]").addClass('active');
                                $(".row").find(".imgProduct.active").removeClass("active");
                                $(".imgProduct#img_"+imageIndex).addClass("active");
                            });
                        });
                    });
                });
            }

        });
    });

    //Menu Service
    $.each(service_array, function( index, value ) {
        var service_url = baseUrl+"/service/";
        var image_src = service_url+"/"+value.before;
        var image_after_src = service_url+"/"+value.after;
        var image_popup_src = service_url+"/"+value.big;
        $("#inside_box").append('<div class="contentBlock" id="'+value.id+'"><center><img src="'+image_src+'" class="service_image"><br>'+value.text+'</center></div>');

        // Hover function
        $("#"+value.id).find("img").hover(function(){
            $(this).attr("src", image_after_src);
        }, function(){
            $(this).attr("src", image_src);
        });

        //Click to show modal
        $("#"+value.id).on("click", function(){
            $('#service_modal').modal('show');
            
            $("#service_modal").find(".service_popup_img").html('<center><img src="'+image_popup_src+'" class="service_image_popup"><br><br><h4>'+value.text+'</h4></center>');
            if(value.id != "understand_service"){
                $("#service_modal").find("#demo").hide();
                $("#service_modal").find("#content_service").show();
                $("#service_modal").find("#content_service").html(value.desc);
            }else{
                $("#demo").find("ul.carousel-indicators").children().remove();
                $("#demo").find(".carousel-inner").children().remove();
                $("#service_modal").find("#content_service").hide();
                $("#service_modal").find("#demo").show();
                $.each(value.desc, function( index, content ) {
                    $("#demo").find("ul.carousel-indicators").append('<li data-target="#demo" data-slide-to="'+index+'"></li>');
                    $("#demo").find(".carousel-inner").append('<div class="carousel-item"><center><div class="col-md-12 col-sm-12" id="content_service">'+content+'</div><center></div>');
                    if(index == 0){
                        $("#demo").find(".carousel-item").addClass("active");
                    }
                });
            }
        });
    });

    function showGalleryContent(imgArray, category){
        $('#carouselGalleryImage').find(".ul.carousel-indicators").children().remove();
        $('#carouselGalleryImage').find(".carousel-inner").children().remove();
        //looping image for residence
        $.each(imgArray, function( index, value ) {
            var base_url = baseUrl+"/gallery/";
            var image_src = base_url+"/"+category+"/"+value.url;
            $(".content_gallery").append('<div class="col-md-3 col-sm-3 gallery_box"><img src="'+image_src+'" class="gallery_box_img" data-index="'+index+'"></div>');

            $(".gallery_box_img").on("click",function(){
                //var imgsrc = $(this).attr('src');
                //$(".gallery_show_img").attr("src", imgsrc);
                //if(imgsrc == image_src){
                    //$(".gallery_desc").text(value.desc);
                //}
                var nomor = $(this).attr('data-index');
                $('#carouselGalleryImage').find(".carousel-item.active").removeClass('active');
                $('#carouselGalleryImage').find(".carousel-item[data-id="+nomor+"]").addClass('active');
            });

            $("#carouselGalleryImage").find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img data-enlargeable src="'+image_src+'" class="gallery_show_img"></center></div>');

            if(index == 0){
                $("#carouselGalleryImage").find(".carousel-item").addClass("active");
            }
        });
    }

    $(".topnav").find('a').each(function(){
        var idMenu = $(this).attr("id");        

        $("#"+idMenu).on("click", function(){
            $("#"+idMenu).parent().find('.active').removeClass('active');
            $("#"+idMenu).addClass("active");
            if(idMenu == "company_menu"){
                $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"2s"});
            }
            if($(".topnav").hasClass('responsive')){
                myFunction();
            }
        });
    });

    $(".img_gallery_opt.residence_img").hover(function(){
        $(this).addClass('img_hover');
        $(this).attr("src", baseUrl+"/residence.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/residence_red.jpg");
    });
    $(".img_gallery_opt.building_img").hover(function(){
        $(this).attr("src", baseUrl+"/building.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/building_red.jpg");
    });
    $(".img_gallery_opt.retail_img").hover(function(){
        $(this).attr("src", baseUrl+"/retail.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/retail_red.jpg");
    });

    //$('img[data-enlargeable]').addClass('img-enlargeable').click(function(){
    $('.largeable_img .carousel-inner').click(function(){
        //var src = $(this).attr('src');
        var src = $(this).find(".active img").attr('src');
        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="bigBackground">').css({
            //background: 'url('+src+') ',
            //backgroundColor: 'blue',
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='imgBigBackground'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    $('.zoomIn').addClass('img-enlargeable').click(function(){
        var src = $(this).attr('src');
        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="zoomInBackground">').css({
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='imgZoomBackground'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    $('.product_image_chosen .carousel-inner').click(function(){
        var src = $(this).find(".active img").attr('src');

        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="productZoomInBackground">').css({
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='productImgZoomBackground' height='75%'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    /*$(".contentBlock_solution").on("click",function(){
        $('#product_modal').modal('show');
    });*/

});

//Hover Carousel in service popup
$(".carousel_prev").hover(function(){
    $(".carousel_prev").find('img').show();
}, function(){
    $(".carousel_prev").find('img').hide();
});

$(".carousel_next").hover(function(){
    $(".carousel_next").find('img').show();
}, function(){
    $(".carousel_next").find('img').hide();
});
//

/*$(".horizon-next").hover(function(){
    loopNext();
}, function(){
    $('.container_vision').stop();
});*/
$(".horizon-prev").on("click", function(){
    loopPrev();
});
$(".horizon-next").on("click", function(){
    loopNext();
});

/*function loopNext(){
    $('.container_vision').animate({scrollLeft:'+=50'}, 'fast', 'linear', loopNext);
}*/
function loopNext(){
    $('.container_vision').animate({scrollLeft:'+=70'}, 'fast', 'linear');
}
function loopPrev(){
    $('.container_vision').animate({scrollLeft:'-=70'}, 'fast', 'linear');
}

$('.solution_horizon-prev').on("click",function() {
    loopPrevSolution();
});

$(".solution_horizon-next").on("click",function(){
    loopNextSolution();
});

function loopNextSolution(){
    $('.container_solution').animate({scrollLeft:'+=70'}, 'fast', 'linear');
}
function loopPrevSolution(){
    $('.container_solution').animate({scrollLeft:'-=70'}, 'fast', 'linear');
}

$('.solution_subOption-prev').on("click",function() {
    loopPrevsubOption();
});

$(".solution_subOption-next").on("click",function(){
    loopNextsubOption();
});

function loopNextsubOption(){
    $('.container_subOption').animate({scrollLeft:'+=40'}, 'fast', 'linear');
}
function loopPrevsubOption(){
    $('.container_subOption').animate({scrollLeft:'-=40'}, 'fast', 'linear');
}

$(".btn_email").on("click",function(){
    sendEmail();
});

function sendEmail(){
    $.ajax({
        url: '{{ route("send.email") }}',
        method: 'GET',
        data: {
            'name': $("#contact_name").val(),
            'email': $("#contact_email").val(),
            'phone':$("#contact_no").val(),
            'message':$("#contact_message").val(),
        },
        success: function(resp) {
            alert("Email sent");
            $("#contact_name").val('');
            $("#contact_email").val('');
            $("#contact_no").val('');
            $("#contact_message").val('');
        },
        cache: false
    });
}

var widthScreen = $(window).width();
$(window).resize(function() {
    widthScreen = $(window).width();
});

$(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    console.log("big: "+scrollTop+" -- "+widthScreen);
    $(".topnav").find('.active').removeClass('active');
    if(widthScreen >= 1425 && widthScreen <= 1905){ //1425 macbook 13inch 1903 pc
        if(scrollTop < 1004){
            $("#home_menu").addClass("active");
        }else if(scrollTop >= 1004 && scrollTop < 1774) {
            $("#company_menu").addClass("active");
            $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"3s"});
        }else if(scrollTop >= 1774 && scrollTop < 2652){
            $("#gallery_menu").addClass("active");
        }else if(scrollTop >= 2652 && scrollTop < 3448){
            $("#product_menu").addClass("active");
        }else if(scrollTop >= 3448){
            $("#contact_menu").addClass("active");
        }
    }else if(widthScreen <= 375){ //iphone X screen 375 x 812
        if(scrollTop < 500){
            $("#home_menu").addClass("active");
        }else if(scrollTop >= 500 && scrollTop < 1200) {
            $("#company_menu").addClass("active");
            $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"3s"});
        }else if(scrollTop >= 1200 && scrollTop < 1700){
            $("#gallery_menu").addClass("active");
        }else if(scrollTop >= 1700 && scrollTop < 2500){
            $("#product_menu").addClass("active");
        }else if(scrollTop >= 2500){
            $("#contact_menu").addClass("active");
        }
    }
});
//Check scroll on viewport https://stackoverflow.com/questions/34838507/change-css-on-scroll-depending-on-screen-size
//GMAPS: https://developers.google.com/maps/documentation/embed/get-started
//Billing https://console.cloud.google.com/billing/01FF86-116910-4810DF/manage?cloudshell=false&project=dianaglass
//Remove anchor tags https://stackoverflow.com/questions/20198731/how-do-you-remove-anchor-tags-from-url
</script>