<?php get_header(); ?>

<style>
  .hero {
    height: 420px;
    position: relative;
    margin-bottom: 60px;
    background-size: cover;
    display: flex;
  }

  .hero .title {
    font-size: 52px;
    color: #373a3c;
  }

  .hero .subtitle {
    font-size: 32px;
    color: #373a3c;
    font-weight: 300;
  }

  .hero .wrapper {
    margin: auto;
    text-align: center;
  }

  .hero .wrapper .btn {
    color: #fff;
    background-color: #ed7401;
    box-shadow: 0px 1px 3px #0000004d;
    border-radius: 40px;
    padding: 10px 40px;
    margin-top: 24px;
  }


  /* blog cards  */
  .our-blog-card {
      width: 370px;
      height: 700px;
      border: 1px solid #00000029;
      box-shadow: 0px 3px 6px #00000029;

      border-top: 8px solid #ED7401;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;

      display: inline-block;
      vertical-align: top;

      margin-bottom: 40px;
      
  }

  .our-blog-card .blog-card-featured-image {
      background-image: url('/wp-content/uploads/2019/09/kevin-niu-jOY2SICHbss-unsplash-1200x800.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      min-height: 180px;
  }

  .blog-card-title {
     color: #373A3C;
     font-size: 22px;    
     padding-top: 38px;
     padding-left: 38px;
     padding-right: 38px;

     min-height: 200px;
  }

  .blog-card-author-date {
      margin-top: 20px;
      margin-bottom: 20px;
      border-top: 1px solid #E6E6E6;
      border-bottom: 1px solid #E6E6E6;

      color: #E6E6E6;
      font-size: 16px;
      line-height: 19px;
      font-weight: bold;    

      /* height: 19px; */
  }

  .blog-card-author-date span.author {
      padding-left: 38px;
  }

  .blog-card-author-date span.date {
      float: right;
      padding-right: 38px;
  }

  .blog-card-excerpt {
      color: #505050;
      font-size: 18px;
      line-height: 26px;
      margin-bottom: 47px;
      padding-left: 38px;
      padding-right: 38px;
  }

  .our-blog-card .button-row {
    text-align: center;
  }
  .our-blog-card a.primary-btns {
      color: white;      
  }

  section.page-content {
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
  }

  .our-blog-intro {
      text-align: center;
      width: 100%;  
      margin-bottom: 40px;
  }

  .our-blog-intro p {
      max-width: 570px;
      margin-left: auto; 
      margin-right: auto;   s    
  }

  /* gutters */
  @media screen and (min-width: 1200px) {
    .our-blog-card:nth-child(3n+2) {
        margin-left: 40px;
        margin-right: 40px;
    }
  }
  
  @media screen and (min-width: 784px) and (max-width: 1199px) {

    section.page-content {
        max-width: 784px;
        margin-left: auto;
        margin-right: auto;
    }

    .our-blog-card {
        margin: 0;
    }

    .our-blog-card:nth-child(odd) {
        margin-right: 40px;
    }    
  }

  @media screen and (max-width: 783px) {

        section.page-content {
            width: 100%
            text-align: center;
        }

        .our-blog-cards {
            text-align: center;
        }
}
</style>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="wrapper">
            <div class="wp-block-lazyblock-hero lazyblock-hero-2ieFUb">
                <div class="hero" style="background-image: url(http://temporall.local/wp-content/uploads/2019/09/Header-image-assets-4.png);">
                    <div class="wrapper" style="max-width: 770px;">
                        <h1 class="title">Our Blog</h1>                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="page-content">
        <div class='our-blog-intro'>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin, augue a cursus tempus, eros justo lacinia sem, at viverra libero purus ac ex.  </p>    
        </div>
        <section id='blogs' class='our-blog-cards'>
            
            <?php 
            
            while ( have_posts() ) :
            the_post();
            
            $title = get_the_title();
            $author = get_the_author();
            $date = get_the_date();
            $excerpt = get_the_excerpt();
            $f_image = get_the_post_thumbnail();
            $post_url = get_the_permalink();   
            
            // var_dump($f_image);
            
            ?>

            <div class="our-blog-card">
                <div class="blog-card-featured-image">                
                </div>
                <div class="blog-card-title">
                    <?php echo $title ?>
                </div>
                <div class='blog-card-author-date'>
                    <span class="author"><?php echo $author ?></span>
                    <span class="date"><?php echo $date ?></span>
                </div>
                <div class='blog-card-excerpt'><?php echo $excerpt ?></div>
                <div class='button-row'>
                    <a href=<?php echo $post_url ?> class="primary-btns">Read More</a>
                </div>            
            </div>  

            <?php
                
            endwhile;
            
            ?>

        </section>
        
    </section>
</section>
<?php get_footer(); ?>