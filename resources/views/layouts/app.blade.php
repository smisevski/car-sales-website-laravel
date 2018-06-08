<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
    <script src="basic-jquery-slider/js/bjqs.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" rel="Stylesheet" href="basic-jquery-slider/bjqs.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body id="wca" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="app" class="col-md-12">
        <main class="py-4">
            @include('inc.header')
            @include('inc.navbar')
            @include('inc.messages')
            @yield('content')
            @yield('finder')
            @yield('inventory')
            @yield('specoffback')
            @yield('prozir')
            @yield('carfinder')
            @include('inc.footer')
        </main>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
 
    $('[data-toggle="tooltip"]').tooltip();
})
</script>


<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#wca']").on('click', function(event) {

  
  if (this.hash !== "") {

    
    event.preventDefault();

    
    var hash = this.hash;

  
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      
      window.location.hash = hash;
      });
    } 
  });
})
</script>

<script>
    function myFunction(x) {
    x.classList.toggle("change");
}
</script>

<script type="text/javascript">
    $(document).ready(function(){
 
    $('#menuBut').click(function(event){
        $('#navSections').fadeToggle('2500');
       // $('.nav-link').fadeIn();
    });
})
</script>

<script type="text/javascript">
    $(document).ready(function(){
        
           $('#cobuyer').click(function(event){
                $('#cobuyerform').removeClass('demo111');
       
            });
        
    })
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#my-slideshow').bjqs({
        'height' : 320,
        'width' : 620,
        'responsive' : true
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#manufact').change(function(){
            
            $('#result').html('');  
            
            var manuSelect = $('#manufact').children(":selected").html();
            
            var yomSelect = $('#yom').children(":selected").html();
            if(manuSelect)
            {
                  
                $.ajax({
                    type : 'GET',
                    url : '/search',
                    dataType: 'text',
                    data:{'manuSelect':manuSelect},
                    success: function(data){
                        $('#result').html(data);
                    }
                });   
            }

        });

        $('#model').change(function(){


            $('#result').html('');
            var modelSelect = $('#model').children(":selected").html();
            if(modelSelect)
            {
                $.ajax({
                    type : 'GET',
                    url : '/search1',
                    dataType: 'text',
                    data:{'modelSelect':modelSelect},
                    success: function(data){
                        $('#result').html(data);
                    }
                });
            }
            
        });

    })
</script>

<script type="text/javascript">
 
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>

<script type="text/javascript">

    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
     showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }

</script>

</body>
</html>
