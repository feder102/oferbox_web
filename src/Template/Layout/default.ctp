<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<style type="text/css">
* {
    margin: 0;
    padding: 0;
}
html {
    background-color: #fff;
    height: 100%;
}
body {
    color: #333333;
    font: 0.75em/1.5em Arial,sans-serif;
}
.container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    width: 92%;
}
/* common and top level styles */
#nav span {
    display: none;
}
#nav, #nav ul {
    list-style: none outside none;
    margin: 0;
    padding: 0;
}
#nav {
    background-color: #F5F5F5;
    border-bottom: 5px solid #333333;
    float: left;
    margin-left: 1%;
    margin-right: 1%;
    position: relative;
    width: 98%;
}
#nav ul.subs {
    background-color: #FFFFFF;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
    color: #333333;
    display: none;
    left: 0;
    padding: 2%;
    position: absolute;
    top: 54px;
    width: 96%;
}
#nav > li {
    border-bottom: 5px solid transparent;
    float: left;
    margin-bottom: -5px;
    text-align: left;
    -moz-transition: all 300ms ease-in-out 0s;
    -ms-transition: all 300ms ease-in-out 0s;
    -o-transition: all 300ms ease-in-out 0s;
    -webkit-transition: all 300ms ease-in-out 0s;
    transition: all 300ms ease-in-out 0s;
}
#nav li a {
    display: block;
    text-decoration: none;
    -moz-transition: color 450ms ease-in-out 0s, background-color 450ms ease-in-out 0s;
    -ms-transition: color 450ms ease-in-out 0s, background-color 450ms ease-in-out 0s;
    -o-transition: color 450ms ease-in-out 0s, background-color 450ms ease-in-out 0s;
    -webkit-transition: color 450ms ease-in-out 0s, background-color 450ms ease-in-out 0s;
    transition: color 450ms ease-in-out 0s, background-color 450ms ease-in-out 0s;
    white-space: normal;
}
#nav > li > a {
    color: #333333;
    display: block;
    font-size: 1.3em;
    line-height: 49px;
    padding: 0 15px;
    text-transform: uppercase;
}
#nav > li:hover > a, #nav > a:hover {
    background-color: #F55856;
    color: #FFFFFF;
}
#nav li.active > a {
    background-color: #333333;
    color: #FFFFFF;
}
/* submenu */
#nav li:hover ul.subs {
    display: block;
}
#nav ul.subs > li {
    display: inline-block;
    float: none;
    padding: 10px 1%;
    vertical-align: top;
    width: 33%;
}
#nav ul.subs > li a {
    color: #777777;
    line-height: 20px;
}
#nav ul li a:hover {
    color: #F55856;
}
#nav ul.subs > li > a {
    font-size: 1.3em;
    margin-bottom: 10px;
    text-transform: uppercase;
}
#nav ul.subs > li li {
    float: none;
    padding-left: 8px;
    -moz-transition: padding 150ms ease-out 0s;
    -ms-transition: padding 150ms ease-out 0s;
    -o-transition: padding 150ms ease-out 0s;
    -webkit-transition: padding 150ms ease-out 0s;
    transition: padding 150ms ease-out 0s;
}
#nav ul.subs > li li:hover {
    padding-left: 15px;
}
/* responsive rules */
@media all and (max-width : 980px) {
    #nav > li {
        float: none;
        border-bottom: 0;
        margin-bottom: 0;
    }
    #nav ul.subs {
        position: relative;
        top: 0;
    }
    #nav li:hover ul.subs {
        display: none;
    }
    #nav li #s1:target + ul.subs,
    #nav li #s2:target + ul.subs {
        display: block;
    }
    #nav ul.subs > li {
        display: block;
        width: auto;
    }
}
</style>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>



    <?php $this->Html->meta('icon') ?>
    <?php $this->Html->css('font-awesome.min') ?>
    <?php $this->Html->css('animate') ?>
    <?php $this->Html->css('main') ?>
    <?php $this->Html->css('base.css') ?>
    <?php $this->Html->css('cake.css') ?>
    <?php $this->Html->css('dataTables') ?>
    <?php echo $this->Html->css('../font-awesome/css/font-awesome'); ?>

    <?= $this->Html->script('jquery-3.2.1') ?>
    <?php echo $this->Html->css('../bootstrap/css/bootstrap.min'); ?>
    <?php echo $this->Html->script('../bootstrap/js/bootstrap.min'); ?>
    <?php echo $this->Html->script(array('angular/angular.js','angular/1.5.6-angular-route.min.js','angular/app/app')); ?>
    <?php echo $this->Html->script('../angular-smart-table/dist/smart-table'); ?>
    <?php echo $this->Html->script('jspdf.debug'); ?>
    <?php echo $this->Html->script('jspdf.plugin.autotable.js'); ?>
    <!--  -->
    <!-- https://simonbengtsson.github.io/jsPDF-AutoTable/#html https://github.com/simonbengtsson/jsPDF-AutoTable-->
    <?php //echo $this->Html->script('modernizr-2.6.2.min'); ?>





    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<!-- <header id="header_fede"> 
  <nav  data-topbar role="navigation">
      <ul class="title-area large-3 medium-4 columns">
          <li class="name">
              <h1><a href=""><?php //$this->fetch('title') ?></a></h1>
          </li>
      </ul>
      <div class="toggle-navigation toggle-left">
          <ul>
            <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
              <i class="fa fa-bars"></i>
          </button>
        </ul>
      <div class="top-bar-section">
      </div>

  </nav>

  </div>-->
</header>
<body ng-app="mainApp">

    <?php //echo $this->Element('menu'); ?>
        <div class="container">
            <ul id="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#s1">Menu 1</a>
                    <span id="s1"></span>
                    <ul class="subs">
                        <li><a href="#">Header a</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>                                
                            </ul>
                        </li>
                        <li><a href="#">Header b</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="active"><a href="#s2">Menu 2</a>
                    <span id="s2"></span>
                    <ul class="subs">
                        <li><a href="#">Header c</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Header d</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Menu 3</a></li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
                <li><a href="https://www.script-tutorials.com/css3-responsive-menu/">Back to Responsive menu tutorial</a></li>
            </ul>
        </div>
    <!-- <div> -->
      <div class="container clearfix">
      <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
var addOrRemove = false;
  $( "#toggle-left" ).click(function() {
    // debugger;
    // $( "#sidebar" ).toggleClass( 'sidebar sidebar-toggle', addOrRemove );
    if ( addOrRemove ) {
      addOrRemove = false;
      $( "#sidebar" ).removeClass( 'sidebar sidebar-toggle' );
      $( "#sidebar" ).addClass( 'sidebar' );
    } else {
      addOrRemove = true;
      $( "#sidebar" ).removeClass( 'sidebar' );
      $( "#sidebar" ).addClass( 'sidebar sidebar-toggle' );
    }

  });
});
</script>
