<?php include ROOT.'/views/header.php';?>

      <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a href="/cabinet">Кабінет</span></a>
                    </li>
                    <li>
                        <a href="/login">Вхід</a>
                    </li>
                    <li>
                        <a href="post.html">Sample Post</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('bootstrap/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p><?php echo $newList["all_description"]; ?></p>

                </div>
            </div>
        </div>
    </article>

    <hr>

<!--sdsdsds-->

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">


  <?php foreach($coment as $coments) :?>
<div class="container">
    <div class="row">
        
        <div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                
                
                
                
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    
                    
                     
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?php echo $coments['name']; ?></b></a>
                            made a post.
                        </div>
                        <h6 class="text-muted time"> <p><?php echo $coments['coment']; ?> </p></h6>
                          <?php if (!User::Guest()) :?>
                        
                         <form action="/news/<?php echo $id; ?>/" method="post">
                      
                <div class="comment__text ">  
                   
                    <div  style="margin-top:20px; padding-bottom:20px;">
                    <?php echo $coments['coment']; ?> 
                  </div>
                  <?php if($userId!=$coments['user_id']) :?>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input type="text" class="visuallyhidden" value="<?php echo $userId; ?>" name="id_user">
                    <input type="text" class="visuallyhidden" value="  <?php echo $coments['id']; ?>" name="id_user_to_comment">
                    <input type="text" class="visuallyhidden" value="<?php echo $id; ?>" name="id_article">
                  
                  <input type="text"  class="mdl-textfield__input" id="comment" name="coment">
                  <label for="comment" class="mdl-textfield__label">Прокоментувати</label>
                </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" type="submit" value="submit_comment" name="submit">
                  <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                </button>
                    <?php endif;?>                    
                  <?php 
                    $Answercoments=$coments['id']; ?>
                   
                     <?php foreach ($getAnswer as $Answer): ?>                   

                 <?php   if ($Answercoments==$Answer['answer']) :?>
                        
                         <div style="margin-left : 20px;">    <?php echo $Answer['coment'];   ?> </div>                     
                    <?php endif; ?>
                    <?php endforeach; ?>      
                </div>
                     <?php if($userId!=$coments['user_id']) :?>
                   
              
                      <?php endif;?>
                      
                      <br>
                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                             <input type="text" class="visuallyhidden" value="<?php echo $userId; ?>" name="id_user">
                    <input type="text" class="visuallyhidden" value="<?php echo $id; ?>" name="id_article">
                      <input type="text"  class="mdl-textfield__input" id="comment" name="coment1">
                  <label for="comment" class="mdl-textfield__label">discussion</label>
                </div>
                       <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" type="submit1" value="submit_comment1" name="submit1">
                  <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
                </button>
              </form>             
                   <?php endif;?>
                    </div>
                </div> 
                
                <div class="post-description">                    
                    
                    <div class="stats">
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-up icon"></i>2
                        </a>
                        <a href="#" class="btn btn-default stat-item">
                            <i class="fa fa-thumbs-down icon"></i>12
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php endforeach; ?>


<?php include ROOT.'/views/footer.php';?>