<!--[Google Tag Manager Plugin]>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<header class="banner scroll-fade-in">
  <div class="container-fluid">
    <div class="logo">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/babybox-life.png')">
                  </a>
                  </div>
                  <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </nav>
    </div>
</header>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img src="@asset('images/babybox-life-square.png')">
              <p class="lead">フィンランドベイビーボックスで<br/>出産・新生児準備をもっと楽しい思い出に！</p>
  </div>
</div>

<div class="nav-tabs-wrap">
  <div class="container">
    <ul class="nav nav-fill fbb-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Finnish Baby Boxって？</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">購入方法</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">メリット</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">デメリット</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">レビュー</a>
      </li>
    </ul>
  </div>
</div>
