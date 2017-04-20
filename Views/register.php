<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<?php include ROOT.'/views/header.php';?>
  <body>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
          <button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Some Action</li>
  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
  <li disabled class="mdl-menu__item">Disabled Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
</ul>
       
           <?php if (isset($errors) && is_array($errors)){
    foreach($errors as $error){
        echo $error;
    }
    
} ?>
        
       
        <form method="post" action="">
            <input type="text" placeholder="name" name="name" value="<?php echo $name; ?>">
            <input type="email" placeholder="email" name="email" value="<?php echo $email; ?>">
            <input type="text" placeholder="password" name="password" value="<?php echo $password; ?>">
            <input type="submit" name="submit" value="send">
        </form>
          
<?php include ROOT.'/views/footer.php'; ?>


