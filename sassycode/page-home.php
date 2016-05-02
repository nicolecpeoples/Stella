<?php
/*
Template Name: Home Page
*/

get_header(); ?>
<div id="home-page">
    <div id="banner">
      <div class="container">
        <div class="content-wrap">
          <div class="content-lt">
            <h2> What is SassyCode? </h2>
            <p>We are a full stack design and development agency for small businesses looking for a new or redesigned website to improve the face of their business. </p>

            <h2> What we offer:</h2>
            <ul>
              <li> Boutique agency service at an affordable pricepoint</li>
              <li> A custom content management system to give you more control over the content you want on your site </li>
              <li> Hands on support through the life of your website </li>
            </ul>
          </div>
          <div class="content-rt">
            <h2> Packages </h2>
            <h3> Basic </h3>
            <ul> 
              <li> Customized Design with up to 2 revisions</li>
              <li> Site built on CMS with access to customizable features</li>
            </ul>
            <h3> Pro</h3>
            <ul>
              <li> Everything you get with Basic +</li>
              <li> Content support for one year </li>
              <li> Unlimited design revisions before build </li>
              <li> Hosting and Domain support </li>
            </ul>
            <a href="#contact-section"><h2> Click here to get a quote! </h2></a>
        </div>
      </div>
      </div>
    </div><!-- #banner -->

    <div id="about">
      <div class="container">
        <div class="content-lt">
            <h1> About </h1>
        </div>

        <div class="content-rt">
          <div class="block1">
            <div class="info">
              <h3> Experience </h3>
              <p> 2+ years experience as a front-end developer </p>
            </div>
            <div class="info">
              <h3> Tools </h3>
              <ul>
                <li> Wordpress </li>
                <li>HTML5, CSS3</li>
                <li> JavaScript/jQuery</li>
                <li> Less/Sass
                
                <li> 
              </ul>
            </div>
          </div>
          <div class="block2">
            <div class="info">
                <h3> More Tools</h3>
                <ul>
                  <li> PHP </li>
                  <li> Python </li>
                  <li> MongoDB, Node.js </li>
                  <li> more!</li>
                </ul>
              </div>
           </div>
          <div class="block3">
           <div class="info"> 
              <h3> Fave Projects </h3>
              <ul>
                <li>My podcast! My podcast!</li>
              </ul>
            </div>
          
            <div class="info">
              <h3> Fun Facts </h3>
              <ul>
                <li>I was in an all black female punk rock band for 7 years called NighTraiN. </li>
              </ul>
            </div>
            </div>
        </div><!-- #content-rt-->
      </div><!-- #container -->
    </div><!-- #about -->

    <div id="projects-section">
      <div class="container">
        <h1> Projects </h1>
        <div id="projects-wrap">
          <?php query_posts('cat=2'); ?> 
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?> 
                  <div class="project-item" id="full_<?php echo get_the_ID(); ?>">
                  <?php $ids[] = get_the_ID(); ?>
                   
                  <div class="content">
                  <h2> <?php the_title(); ?></h2>
                  <?php the_post_thumbnail('post-size'); ?>
                 
                  <?php the_content(); ?>
                  </div> <!--end content -->
                  </div>
              <?php endwhile; ?>
              <?php endif; ?>
        </div>
      </div>
    </div><!-- #projects -->
  </div><!--End #home-page -->
            
<?php get_footer(); ?>
