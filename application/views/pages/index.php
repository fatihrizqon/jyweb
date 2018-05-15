<div class="parallax-cover">
  <div class="mui--text-center">
    <div class="mui--appbar-height"></div>
    <br>
    <div class="mui--text-display3 row wow zoomInDown light-green-tea-txt" data-wow-duration="2s">
      Amana Transport</div>
    <br>
    <br>
    <a class="mui-btn green-tea-btn" href="<?php echo base_url().'order' ?>">Order</a>
    <br>
    <br>
    <img class="mui--text-display3 zoom row wow fadeInLeft" aria-hidden="true" src="https://www.slimframework.com/assets/images/favicon.png" alt="" data-wow-duration="2s">
  </div>
</div>

<div class="mui-divider"></div>

<section>
<div class="mui-container-fluid dark-green-tea-txt">
  <h2 align="center" class="fadeInDown">Green Tea - Amana Transport Web Company</h2>
  <br>
  <div class="mui-row mui-row-center" align="center">
    <?php
    $i = 0;
    foreach ($main as $main) {
      $i++;
      if ($i%2==0) {
    ?>
    <div class="mui-col-md-3 mui-box  wow fadeInUp zoom" align="center"  data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo base_url()."uploads/images/content/$main->images"?>">
      <h3><?php echo $main->title; ?></h3>
      <p align="justify">
        <?php echo $main->text;?>
      </p>
    </div>
    <?php
      }else{
    ?>
    <div class="mui-col-md-3 mui-box  wow fadeInDown zoom" align="center"  data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo base_url()."uploads/images/content/$main->images"?>">
      <h3><?php echo $main->title; ?></h3>
      <p align="justify">
        <?php echo $main->text;?>
      </p>
    </div>
    <?php
      }
    }
    ?>

  </div>
</div>
</section>


<section>
  <div class="mui-container-fluid parallax dark-green-tea-txt mui--text-center">
    <h2 align="center">Why MUICSS?</h2>
    <div class="mui-row main-carousel">
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Small Footprint</h3>
        <p>MUI has a small download size to help pages load as quickly as possible</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Customizable</h3>
        <p>The MUI CSS can be easily customized by using the SASS files available on GitHub and via Bower. Customize breakpoints, font-settings and use Material Design colors.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>No Dependencies</h3>
        <p>MUI CSS/JS has no external dependencies</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Package Layout</h3>
        <p>The MUI package includes all the necessary code to use MUI components on the web and over email. In addition, we're working on React and WebComponents libraries to give developers more flexibility on the web.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Cross Platform</h3>
        <p>The MUI project is committed to building a set of components that work across platforms from web to mobile to email to iOS to Android.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>HTML Email</h3>
        <p>To help with HTML emails, MUI includes an email CSS library that can be used with an inliner.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Acknowledgements</h3>
        <p>MUI is heavily influenced by Bootstrap, Polymer, and Ink as well as some of the popular Material Design frameworks (Materialize, Material-Bootstrap, Material UI). To encourage developers to hack on MUI, the source code for MUI is open-source under an MIT license.</p>
      </div>
    </div>
  </div>
</section>

<section>
<hr>
<div class="mui-container-fluid green-tea-txt" align="center">
<h2>What we use?</h2>
<div class="mui-row zoomIn">
  <div class="mui-col-md-3 zoom wow fadeInUp">
    <h1><i class="material-icons green-tea-txt">developer_mode</i></h1>
    <h4>Engine : PHP Version 7.0.22</h4>
  </div>
  <div class="mui-col-md-3 zoom wow fadeInDown">
    <h1><i class="material-icons green-tea-txt">storage</i></h1>
    <h4>Database : MySQL Version 14.14</h4>
  </div>
  <div class="mui-col-md-3 zoom wow fadeInUp">
    <h1><i class="material-icons green-tea-txt">language</i></h1>
    <h4>Web Server : Apache/2.4.27</h4>
  </div>
  <div class="mui-col-md-3 zoom wow fadeInDown">
    <h1><i class="material-icons green-tea-txt">computer</i></h1>
    <h4>Built on : Ubuntu 17.10 Artful Aardvark</h4>
  </div>
</div>
</div>
</section>

<div class="mui-divider"></div>

<section>
<div class="mui-container-fluid green-tea-txt" align="center">
  <h2>Blogs</h2>
  <div class="mui-row">
    <div class="mui-col-md-4">
    </div>
  </div>
</div>
</section>
