<div class="parallax-cover">
  <div class="mui--text-center">
    <div class="mui--appbar-height"></div>
    <br>
    <div class="mui--text-display3 row wow zoomInDown light-green-tea-txt" data-wow-duration="2s">
      Sample.io
    </div>
    <br>
    <p style="color:#fff;">Template Preview for Sample.io Green-Tea Company Web Profile</p>
    <br>
    <br>
    <a class="mui-btn green-tea-btn" href="<?php echo base_url().'order' ?>">Order</a>
    <br>
    <br>
    <img class="mui--text-display3 zoom row wow fadeInLeft" aria-hidden="true" src="https://www.slimframework.com/assets/images/favicon.png" alt="" data-wow-duration="2s">
  </div>
</div>



<section>
  <div class="mui-container-fluid promo-parallax dark-green-tea-txt mui--text-center">
    <h2 align="center">Promo Informations</h2>
    <div class="mui-row main-carousel">
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Promo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Promo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Promo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Promo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Promo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>


<section>
<div class="mui-container-fluid dark-green-tea-txt">
  <h2 align="center" class="fadeInDown">Green Tea Theme - Sample.io Web Company</h2>
  <br>
  <div class="mui-row mui-row-center" align="center">
    <div class="mui-col-md-2 mui-box">
      <!-- Spacer -->
    </div>
    <div class="mui-col-md-8 mui-box">
      <table>

      <?php
      $i = 0;
      foreach ($main as $main) {
        $i++;
        if ($i%2==0) {
      ?>
      <tr class="spaceUnder fade-in">
        <td>
          <img src="<?php echo base_url()."uploads/images/content/$main->images"?>" style="width:150px;">
        </td>
        <td>
          <h4><?php echo $main->title; ?></h4>
          <hr>
          <p class="mui--text-justify" style="font-size: 11pt;"><?php echo $main->text;?></p>
        </td>
      </tr>
      <?php
        }else{
      ?>
      <tr class="spaceUnder fade-in">
        <td>
          <h4><?php echo $main->title; ?></h4>
          <hr>
          <p class="mui--text-justify" style="font-size: 11pt;"><?php echo $main->text;?></p>
        </td>
        <td>
          <img src="<?php echo base_url()."uploads/images/content/$main->images"?>" style="width:150px;">
        </td>
      </tr>
      <?php
        }
      }
      ?>
      </table>
    </div>
    <div class="mui-col-md-2 mui-box">
      <!-- Spacer -->
    </div>
  </div>
</div>
</section>


<section>
  <div class="mui-container-fluid benefit-parallax dark-green-tea-txt mui--text-center">
    <h2 align="center">Why Sample.io?</h2>
    <div class="mui-row main-carousel">
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Benefit I</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Benefit II</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Benefit III</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Benefit IV</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="mui-col-md-3 carousel-cell mui-container-box zoom wow zoomIn"  data-wow-duration="2s">
        <h3>Benefit V</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>

<section>

<div class="mui-container-fluid green-tea-txt mui--text-center">
<h2>Sample.io Service</h2>
<div class="mui-row zoomIn " align="justify">
  <div class="mui-col-md-3 service-container carousel-cell zoom wow zoomIn"  data-wow-duration="2s">
    <h3 class="mui--text-center">Service I</h3>
    <img class="mui--text-display3 mui--text-center zoom row wow fadeInLeft" aria-hidden="true" src="https://d30y9cdsu7xlg0.cloudfront.net/png/6704-200.png" alt="" data-wow-duration="2s">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <div class="mui-col-md-3 service-container carousel-cell zoom wow zoomIn"  data-wow-duration="2s">
    <h3 class="mui--text-center">Service II</h3>
    <img class="mui--text-display3 mui--text-center zoom row wow fadeInLeft" aria-hidden="true" src="https://d30y9cdsu7xlg0.cloudfront.net/png/6704-200.png" alt="" data-wow-duration="2s">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <div class="mui-col-md-3 service-container carousel-cell zoom wow zoomIn"  data-wow-duration="2s">
    <h3 class="mui--text-center">Service III</h3>
    <img class="mui--text-display3 mui--text-center zoom row wow fadeInLeft" aria-hidden="true" src="https://d30y9cdsu7xlg0.cloudfront.net/png/6704-200.png" alt="" data-wow-duration="2s">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <div class="mui-col-md-3 service-container carousel-cell zoom wow zoomIn"  data-wow-duration="2s">
    <h3 class="mui--text-center">Service IV</h3>
    <img class="mui--text-display3 mui--text-center zoom row wow fadeInLeft" aria-hidden="true" src="https://d30y9cdsu7xlg0.cloudfront.net/png/6704-200.png" alt="" data-wow-duration="2s">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
</div>
</div>
</section>


<section>
<div class="mui-container-fluid green-tea-txt" align="center">
  <h2>Blogs</h2>
  <div class="mui-row">
    <div class="mui-col-md-4">
      <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/article-blog-blogging-feed-news-newspaper-press-30ea12b984c47aea-512x512.png" alt="" width="50%" height="auto">
      <h4>Blog I</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="mui-col-md-4">
      <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/article-blog-blogging-feed-news-newspaper-press-30ea12b984c47aea-512x512.png" alt="" width="50%" height="auto">
      <h4>Blog I</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="mui-col-md-4">
      <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/article-blog-blogging-feed-news-newspaper-press-30ea12b984c47aea-512x512.png" alt="" width="50%" height="auto">
      <h4>Blog I</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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


<section>
  <div class="mui-container-fluid  dark-green-tea-txt mui--text-center">
    <div class="mui-col-md-2">

    </div>
    <div class="mui-col-md-8 benefit-parallax wow fadeInDown">
      <form class="mui-form">
        <legend style="color:#fff;">Special Offer!</legend>
        <div class="mui-textfield">
          <input type="text" placeholder="Name">
        </div>
        <div class="mui-textfield">
          <input type="number" placeholder="Phone Number">
        </div>
        <div class="mui-textfield">
          <input type="email" placeholder="Email">
        </div>
        <div class="mui-textfield">
          <textarea placeholder="Text"></textarea>
        </div>
        <button type="submit" class="mui-btn mui-btn--raised">Submit</button>
      </form>
    </div>
    <div class="mui-col-md-2">

    </div>
  </div>
</section>




<!--
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

-->
