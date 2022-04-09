  <!-- Header -->
  <header style="background-color: purple;">
      <ul>
          <?php foreach ($navbar as $item) { ?>
              <li>
                  <a href="<?php echo $item['link'] ?>">
                      <?php echo $item['title']; ?>
                  </a>
              </li>

          <?php }  ?>
      </ul>
  </header>
  <!-- End Header -->