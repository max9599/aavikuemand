<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#shop-navbar-collapse-point">
        <span class="sr-only">Menüü</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="shop-navbar-collapse-point">
        <p class="navbar-text">
            {{HTML::image('img/content/estflag.png', 'Eesti keeles', array('style'=>'width:30px;'))}}
            {{HTML::image('img/content/engflag.png', 'Eesti keeles', array('style'=>'width:30px;margin-left:5px;'))}}
        </p>
        <p class="navbar-text pull-right">Ostukorv: <span class="badge">42</span></p>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--<div class="row shop-bar">
    <div class="col-md-2 col-md-offset-9">
        <p class="navbar-text">Ostukorv: <span class="label label-info">0</span></p>
    </div>
    <div class="col-md-1">
        <p>
        	<a href={{url('/')}}>
        		{{HTML::image('img/content/estflag.png','Eesti keeles', array('class' => 'langFlag'))}}
        	</a>
        	<a href={{url('eng')}}>
        		{{HTML::image('img/content/engflag.png','English', array('class' => 'langFlag'))}}
        	</a>
        </p>
    </div>
</div>
-->

