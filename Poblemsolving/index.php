<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <?php 

         $course = [

            [
               'course_name' => 'SDGs for Youth: My Goal, My Responsibility',
               'author_name' => 'Hero Alom',
               'total_enrolled' => 1700,
               'course_price' => 5000,
               'thumbnail' => 'sql.jpg',
            ],

            [
               'course_name' => 'AML & CFT course for NBFI',
               'author_name' => 'Hero Alom',
               'total_enrolled' => 300,
               'course_price' => 500, 
               'thumbnail' => 'sql.jpg',
            ],

            [
               'course_name' => 'AML & CFT course for NBFI',
               'author_name' => 'Hero Alom',
               'total_enrolled' => 2200,
               'course_price' => 800,
               'thumbnail' => 'sql.jpg',
            ],
 
            [
               'course_name' => 'Hello World!',
               'author_name' => 'Hero Alom',
               'total_enrolled' => 300,
               'course_price' => 6000,
               'thumbnail' => 'sql.jpg',
            ]

         ];

    ?>

      <div class="container mb-5">
         <h1 class="text-center mt-5">Featured Courses</h1>
         <div class="section-one">
            <div class="row mt-5">

            <?php 
               foreach($course as $key => $courses1){
            ?>

                <div class="col-md-4">
                  <div class="card m-1">
                     <img class="card-img-top img-thumbnail" src="<?php echo $courses1['thumbnail'];?>" alt="">
                     <div class="card-body mt-2">
                        <h5 class="card-title"><b> <?php echo $courses1['course_name'];?> </b></h5>
                        <p><?php echo $courses1['author_name'];?></p>
                        <span><?php echo $courses1['total_enrolled'];?></span> 
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span>(56,333)</span> <br>
                        <b><?php echo $courses1['course_price'];?></b>
                        <del>$11.99</del>
                        <br>
                        <button class="btn btn-primary" type="submit">Buy Now </button>
                     </div>
                  </div>
               </div>

           <?php } ?>

            </div>
         </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>