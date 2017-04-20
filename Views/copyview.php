<?php include ROOT.'/views/header.php'; 
include_once ROOT.'/model/user.php';
    ?>

  <body>
    <pre>
     
    </pre>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
        <div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="index.html" title="go back" role="button">
            <i class="material-icons" role="presentation">arrow_back</i>
          </a>
        </div>
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3>On the road again</h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
              <div class="section-spacer"></div>
              <div class="meta__favorites">
                425 <i class="material-icons" role="presentation">favorite</i>
                <span class="visuallyhidden">favorites</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">bookmark</i>
                <span class="visuallyhidden">bookmark</span>
              </div>
              <div>
                <i class="material-icons" role="presentation">share</i>
                <span class="visuallyhidden">share</span>
              </div>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
              <p>
               <?php echo $newList["all_description"]; ?>
              </p>
            </div>
            
              
              <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
              
                  
                  
                  
                  
                  
              <div class="comment mdl-color-text--grey-700">
                <header class="comment__header">
                  <img src="../images/co2.jpg" class="comment__avatar">
                 
                </header>
                  
                  
                   <?php if (!User::Guest()) :?>
                 
                  
                  
                  <form action="/news/<?php echo $id; ?>/" method="post">
                       <?php foreach($coment as $coments) :?>
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
                       <?php endforeach; ?>
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
                <nav class="comment__actions">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
                  </button>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
                  </button>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
                  </button>
                </nav>
                <div class="comment__answers">
                  <div class="comment">
                    <header class="comment__header">
                      <img src="images/co2.jpg" class="comment__avatar">
                      <div class="comment__author">
                        <strong>John Dufry</strong>
                        <span>2 days ago</span>
                      </div>
                    </header>
                    <div class="comment__text">
                      Yep, agree!
                    </div>
                    <nav class="comment__actions">
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
                      </button>
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
                      </button>
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
            <a href="index.html" class="demo-nav__button">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_back</i>
              </button>
              Newer
            </a>
            <div class="section-spacer"></div>
            <a href="index.html" class="demo-nav__button">
              Older
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_forward</i>
              </button>
            </a>
          </nav>
        </div>
        <footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
              <span class="visuallyhidden">Twitter</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
              <span class="visuallyhidden">Facebook</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
              <span class="visuallyhidden">Google Plus</span>
            </button>
          </div>
          <div class="mdl-mini-footer--right-section">
            <button class="mdl-mini-footer--social-btn social-btn__share">
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </button>
          </div>
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
    <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/blog/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--white">View Source</a>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
