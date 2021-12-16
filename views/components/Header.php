<?php
if(empty($_GET['page'])){
    
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
     $(document).on('click', 'a.nav-link', function(e) {
     e.preventDefault();
     var pageURL = $(this).attr('href');

     history.pushState(null, '', pageURL);

     $.ajax({
         type: "GET",
         url: "/app/Core/DynamicRoutes.php",
         data: { page: pageURL },
         dataType: "html",
         success: function(data) {

             $('#pageContent').html(data);

         }
     });
 });
</script>
<ul class="menu">
  <li><a href="/" class="nav-link">Home</li>
  <li><a href="/test" class="nav-link">Page 1</a></li>
  <li><a href="profile.php" class="nav-link">Page 2</a></li>
  <li><a href="page3.php" class="nav-link">Page 3</a></li>
  <li><a href="page4.php" class="nav-link">Page 4</a></li>
  <li><a href="page5.php" class="nav-link">Page 5</a></li>
   
</ul>
    
<?php
}
?>