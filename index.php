<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orias</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />


</head>

<body>
<div class="min-h-screen  bg-slate-700">

<!-- NavBar -->
<?php
require_once ('Components/navbar.php')
?>
     <!-- ProIntro -->
      <?php 

      require_once ('content/ProIntro.php')
      ?>
     <!-- AboutMe -->
      <?php 
      require_once ('content/aboutme.php')
      ?>

        <!-- Skills -->
         <?php 
         require_once ('content/skills.php')
         ?>

    <!--  OfferServices-->
    <?php 

    require_once ('content/services.php')
    ?>

    <!-- Project -->

    <?php 

    require_once ('content/Project.php')
    ?>
    <!-- footer -->
        <?php 

        require_once ('Components/footer.php')
        ?>
    </div>



    </body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>