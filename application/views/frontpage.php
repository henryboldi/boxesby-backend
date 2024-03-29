<div class="row title">
      <div class="row">
        <div class="centernav">
          <a id="rotator" href="index.html">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="BoxesBy" class="logo">
          </a>
          <ul class="nav nav-pills">
            <li class="selected"><a href="#">Home</a></li>
            <li><a href="mailto:box@boxesby.com?subject=Request to Curate a Box&body=#please include your twitter handle">make a box</a></li>
            <li>
              <?php $this->load->view('include/header');
              if (!$this->ion_auth->logged_in())
              {
               echo '<li><a href="/auth/login">login</a></li>';
              }
              else
              {
                echo '

                <div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="'.site_url().'/auth/logout">Logout</a></li>
    <li><a href="'.site_url().'/auth/change_password">Change Password</a></li>
    <li><a href="'.site_url().'/order/update">Update Billing Information</a></li>
    <li><a href="'.site_url().'/order/cancel">Cancel Account</a></li>
  </ul>
</div>
                   ';
              } ?>
            </li>
            <li><p><a class="btn btn-primary btn-large" href="<?php echo site_url().'/order/register' ?>">Signup</a></p></li>
          </ul>     
        </div>
      </div>
  
      
          <div class="row">
        <div class="col-md-12">
          <h1 class="tagline">Get stuff monthly from people you follow while supporting charities.</h1>
        </div>
      </div>  

      <div class="row featuredboxes">
        
        <div class="col-md-2 col-md-offset-2">
          <a href="hackathonsuperpowers.html">
            <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
            <div class="description">
              <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
              <h4 class="namesubtag">by Dave Fontenot</h4>
              <p class="homeprice">$19/m</p>
            </div>
          </a>
        </div>
        <div class="col-md-2">
          <a href="tracymcgrady.html">
            <img src="<?php echo base_url('assets/img/tracymcgrady.png'); ?>" alt="" class="avatar">
            <div class="description">
              <h3 class="featured-box-subtitle">Something Basketball?</h3>
              <h4 class="namesubtag">by Tracy McGrady</h4>
            <p class="homeprice">$19/m</p>
            </div>
          </a>
        </div>
        <div class="col-md-2">
          <a href="hackathonsuperpowers.html">
            <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
            <div class="description">
              <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
              <h4 class="namesubtag">by Dave Fontenot</h4>
              <p class="homeprice">$19/m</p>
            </div>
          </a>
        </div>
        <div class="col-md-2">
          <a href="tracymcgrady.html">
            <img src="<?php echo base_url('assets/img/tracymcgrady.png'); ?>" alt="" class="avatar">
            <div class="description">
              <h3 class="featured-box-subtitle">Something Basketball?</h3>
              <h4 class="namesubtag">by Tracy McGrady</h4>
            <p class="homeprice">$19/m</p>
            </div>
          </a>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">
          <a href="#">
            <button type="button" class="btn btn-info viewmore">view more</button>
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle categories" data-toggle="dropdown">
          <span class="caret"></span> categories 
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">add categories here</a></li>
          <li><a href="#">add categories here</a></li>
          <li><a href="#">add categories here</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table homepage">
            <tr>
              <td>
                <a href="hackathonsuperpowers.html">
                  <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
                    <h4 class="namesubtag">by Dave Fontenot</h4>
                    <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
              <td>
                <a href="tracymcgrady.html">
                  <img src="<?php echo base_url('assets/img/tracymcgrady.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Something Basketball?</h3>
                    <h4 class="namesubtag">by Tracy McGrady</h4>
                  <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
              <td>
                <a href="hackathonsuperpowers.html">
                  <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
                    <h4 class="namesubtag">by Dave Fontenot</h4>
                    <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="tracymcgrady.html">
                  <img src="<?php echo base_url('assets/img/tracymcgrady.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Something Basketball?</h3>
                    <h4 class="namesubtag">by Tracy McGrady</h4>
                  <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
              <td>
                <a href="hackathonsuperpowers.html">
                  <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
                    <h4 class="namesubtag">by Dave Fontenot</h4>
                    <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
              <td>
                <a href="tracymcgrady.html">
                  <img src="<?php echo base_url('assets/img/tracymcgrady.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Something Basketball?</h3>
                    <h4 class="namesubtag">by Tracy McGrady</h4>
                  <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="hackathonsuperpowers.html">
                  <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
                    <h4 class="namesubtag">by Dave Fontenot</h4>
                    <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
              <td>
                <a href="tracymcgrady.html">
                  <img src="<?php echo base_url('assets/img/tracymcgrady.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Something Basketball?</h3>
                    <h4 class="namesubtag">by Tracy McGrady</h4>
                  <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
              <td>
                <a href="hackathonsuperpowers.html">
                  <img src="<?php echo base_url('assets/img/dave.png'); ?>" alt="" class="avatar">
                  <div class="description">
                    <h3 class="featured-box-subtitle">Hackathon Superpowers</h3>
                    <h4 class="namesubtag">by Dave Fontenot</h4>
                    <p class="homeprice">$19/m</p>
                  </div>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 pages">
          <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>