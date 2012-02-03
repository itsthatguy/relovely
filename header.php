<!doctype html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
  <meta charset="utf-8">
  <title>relovely</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo ('template_url'); ?>/css/960_12_col.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_bloginfo ('template_url'); ?>/css/custom.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
    
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {

      var nav = $("nav .nav_col");
      var nav_sidebar = $("nav.sidebar .nav_col");
      var nav_inline = $("nav.inline .nav_col");

      $(document).scroll(function(e) {



        if($(this).scrollTop() > $("header").height()) {
            nav.css({"position" : "fixed", "top" : "0"});
            nav_inline.addClass("toolbar");
            if ($("nav.inline").css("display") != "none") {
              $(".main_col").css("paddingTop", "65px");
            } else {
              nav_sidebar.css("paddingTop", "20px")
            }
        } else {
            nav.css("position", "relative");
            nav_inline.removeClass("toolbar");
            if ($("nav.inline").css("display") != "none") {
              $(".main_col").css("paddingTop", "20px");
            } else {
              nav_sidebar.css("paddingTop", 0)
            }
        }

        $(window).resize(function(e) {
          if ($("nav.inline").css("display") != "none") {
            $(".main_col").css("paddingTop", "20px");
          }
        })

      })
    });

    </script>
</head>
<body>
  <div class="wrapper">
  <header class="container_12 selfclear">
    <a href="/"><img src="<?php echo get_bloginfo ('template_url'); ?>/images/title.png" alt="relovely" border="0"></a>
  </header>

  <!-- Navigation Start // -->
  <nav class="inline">
    <div class="nav_col">
      <ul class="navigation">
        <li><a href="#1">About</a></li>
        <li><a href="#2">Tutorials</a></li>
        <li><a href="#3">Daily Reads</a></li>
        <li><a href="#4">Contact</a></li>
      </ul>
    </div><!-- /navigation -->
  </nav>
