<?php include "header.php"; ?>
<div class="container">
    <header>
        <hgroup class="logo span-6">
        
        </hgroup>
        <nav class="session-nav span-6">
            <ul>
            <li class="show-menu">
                <a href="">
                <span class="fa fa-bars"></span>
                </a>
            </li>
            <li class="account-settings">
                <a href="">
                <span class="fa fa-user"></span>
                </a>
            </li>
            <li class="logout">
                <a href="">
                <span class="fa fa-close"></span>
                </a>
            </li>
            </ul>
        </nav>
    </header>
</div>


  <nav class="application-nav">
    <div class="container">
      <ul>
        <li class=""><a href=""><span class="fa fa-home"></span><span class="text">Dashboard</span></a></li>
        <li class=""><a href=""><span class="fa fa-file"></span><span class="text">Pages</span></a></li>
        </ul>
    </div>
  </nav>


  <section id="main-content">
    <div class="container">
      <div class="span-12">
        <nav class="breadcrumb-nav">
          <a href="#">Dashboard</a> &raquo;
          <a href="#">Pages</a> &raquo;
          About Us
        </nav>
      </div>

      <div class="span-6">
        <div class="panel">
          <label class="panel-header" for="page-title">
            Page Title
            <span class="hint">The title of the page as displayed by a web browser.</span>
          </label>
          <div class="panel-body">
            <input id="page-title" type="text" value="About Us" />
          </div>
        </div>
      </div>

      <div class="span-6">
        <div class="panel">
          <label class="panel-header" for="page-url">
            URL
            <span class="hint">http://www.example.com/about</span>
          </label>
          <div class="panel-body">
            <input id="page-url" type="text" value="/about" />
          </div>
        </div>
      </div>

      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-main-content">
            Main Content
            <span class="hint">Say something about your company.</span>
          </label>
          <div class="panel-body">
            <div class="wysiwyg">
              <span class="fa fa-bold"></span>
              <span class="fa fa-italic"></span>
              <span class="fa fa-underline"></span>
              <span class="fa fa-strikethrough"></span>
              <span class="fa fa-list-ul"></span>
              <span class="fa fa-list-ol"></span>
              <span class="fa fa-link"></span>
              <span class="fa fa-image"></span>
            </div>
            <textarea id="page-main-content"></textarea>
          </div>
        </div>
      </div>

      <div class="span-12">
        <div class="panel">
          <label class="panel-header" for="page-mission-statement">
            Mission Statement
            <span class="hint">Your company's mission statment.</span>
          </label>
          <div class="panel-body">
            <div class="wysiwyg">
              <span class="icon-bold"></span>
              <span class="icon-italic"></span>
              <span class="icon-underline"></span>
              <span class="icon-strikethrough"></span>
            </div>
            <textarea id="page-mission-statement"></textarea>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include "footer.php"; ?>