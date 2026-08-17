<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/holder.js"></script>
  <script src="js/isotope.pkgd.js"></script>
  <style>
/* small adjusts, don't necessaries to functioning this filter, this is something visual */
.btn {
  margin-bottom:3px;
}
.btn:hover{
  cursor:pointer;
}
.btn-outline-primary:focus {
  background-color:#007bff;
  color:#fff;
}


</style>


</head>

<body>

<!-- Dont remove id filters -->

<?php
		for ($year = 2023; $year >= 2007; $year--) {
    echo "Year: $year\n";
}
			?>
<div id="filters" class="container-fluid mb-5 mt-4"> 
 
  <button class="btn btn-outline-primary" data-filter=".todos">Todos</button>
  <button class="btn btn-outline-primary" data-filter=".design">Design</button>
  <button class="btn btn-outline-primary" data-filter=".webdesign">Web Design</button>
  <button class="btn btn-outline-primary" data-filter=".logotipos">Logotipos</button>
  <button class="btn btn-outline-primary" data-filter=".videomaker">VideoMaker</button>
</div>

<script>
  $('#filters button').click(function(){
    e.preventDefault();
  })
</script>
<!--  Dont remove class grid -->
<div class="grid"> 
   
  <div class="container"><!--  Dont remove class container -->
      <!--  use the data-category always together in the class  -->
      <div class="element-item design" data-category="design"><!--  Dont remove class element-item -->
        <img src="images/Estudos-de-Design.jpg" class="w-100 h-100">
      </div>
      <div class="element-item todos" data-category="todos">
        <img src="images/responsive-web-design-300x200.jpg" class="w-100 h-100">
      </div>
  
      <div class="element-item webdesign" data-category="webdesign">
        <img src="images/responsive-web-design-300x200.jpg" class="w-100 h-100">
      </div>
  
      <div class="element-item videomaker" data-category="videomaker">
        <img src="images/iphoto-surfaceone-300x200.jpg" class="w-100 h-100">
      </div>

      <div class="element-item webdesign" data-category="webdesign">
        <img src="images/responsive-web-design-300x200.jpg" class="w-100 h-100">
      </div>

      <div class="element-item logotipos" data-category="logotipos">
        <img src="images/logotipos-com-mensagens-ocultas-300x200.png" class="w-100 h-100">
      </div>

  </div>

</div>
  <script>
  // external js: isotope.pkgd.js

    // init Isotope
    var $grid = $('.container').isotope({
      itemSelector: '.element-item',
      layoutMode: 'fitRows',
      getSortData: {
        category: '[data-category]',
        weight: function( itemElem ) {
          var weight = $( itemElem ).find('.weight').text();
          return parseFloat( weight.replace( /[\(\)]/g, '') );
        }
      }
    });

    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };

    // bind filter button click
    $('#filters').on( 'click', 'button', function() {
      var filterValue = $( this ).attr('data-filter');
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $grid.isotope({ filter: filterValue });
    });

    // bind sort button click
    $('#sorts').on( 'click', 'button', function() {
      var sortByValue = $(this).attr('data-sort-by');
      $grid.isotope({ sortBy: sortByValue });
    });

  </script>
</body>
</html>
