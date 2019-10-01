<?php get_header();

?>

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

  .exec-team, .board-team {
      width: 100%;
      background-color: #F8F8F8;    
      padding-top: 60px;
      padding-bottom: 60px;

      text-align: center;
  }

  .board-team {
      background-color: white;
  }

  .exec-team-member {
      width: 270px;
      display: inline-block;
      height: auto;

      vertical-align: top;
      margin: 15px;
  }

  .exec-team-member img {
      background-color: white;      
      box-shadow: 5px 10px 18px #888888;
  }

  .exec-team-member h3 {
      margin-top: 30px;
      font-size: 32px;
      font-weight: bold;
      color: #373A3C;
  }

  .exec-team-member h4 {
      font-size: 28px;
      font-weight: normal;
      color: #373A3C;
  }
</style>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="wrapper">
            <div class="wp-block-lazyblock-hero lazyblock-hero-2ieFUb">
                <div class="hero" style="background-image: url(http://stagingtemporall.local/wp-content/uploads/2019/09/Header-image-assets-4.png);">
                    <div class="wrapper" style="max-width: 770px;">
                        <h1 class="title">Temporall</h1>
                    </div>
                </div>
            </div>

            <div class="wp-block-lazyblock-text-with-link lazyblock-text-with-link-ZhBuY">
                <div class="text-block" style="background-color: #fff; padding: 60px; text-align:center; padding-top: 0;">
                    <div class="wrapper" style="max-width: 770px; margin-left: auto; margin-right: auto; font-size: 18px; color: #505050;">
                        Our people make Temporall the company that it is. We pride ourselves on hiring people that are smart, get things done and are at their best when stretching themselves. And doing so makes us deliriously happy.
                    </div>
                </div>
            </div>

            <div class="exec-team">
                <h2>Executive team</h2>
                <div class="exec-team-member">
                    <img src="/wp-content/uploads/2019/09/Mask-Group-35.png" alt="Thomas Davies">
                    <h3>Thomas Davies</h3>
                    <h4>CEO & Founder</h4>
                </div>
                <div class="exec-team-member">
                    <img src="/wp-content/uploads/2019/09/Mask-Group-34.png" alt="Sanjay Patel">
                    <h3>Sanjay Patel</h3>
                    <h4>European Sales Director</h4>
                </div>          
            </div>

            <div class="board-team">
                <h2 style="color: #ED7401;">Board</h2>
                <div class="exec-team-member">
                    <img src="/wp-content/uploads/2019/09/Mask-Group-28.png" alt="Kim Wylie">
                    <h3>Kim Wylie</h3>
                    <h4>Board Advisor</h4>
                </div>
                <div class="exec-team-member">
                    <img src="/wp-content/uploads/2019/09/Mask-Group-26.png" alt="Bijan Bedroud">
                    <h3>Bijan Bedroud</h3>
                    <h4>Investor & Board Member</h4>
                </div>    
                <div class="exec-team-member">
                    <img src="/wp-content/uploads/2019/09/Mask-Group-29.png" alt="Julian Birkinshawl">
                    <h3>Julian Birkinshaw</h3>
                    <h4>NED / Board Member</h4>
                </div>          
            </div>
        </div>


    </main><!-- #main -->
</section>

<?php

get_footer();

?>