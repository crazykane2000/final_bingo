 <header class="c-navbar">
        <a class="c-navbar__brand" href="dashboard.php">
          <img src="../administrator/img/bingo.png" alt="Bingo" title="Bingo UI Kit">
        </a>

        <!-- Navigation items that will be collaped and toggled in small viewports -->
        <nav class="c-navbar__nav collapse" id="main-nav">
          <ul class="c-navbar__nav-list">
              <!-- <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="view_all_retaillers.php">Retailer</a>
              </li> -->
              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="view_all_wholesalers.php">Wholesaler</a>
              </li>

              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="fie.php">FIE</a>
              </li>

              <li class="c-navbar__nav-item">
                <a class="c-navbar__nav-link" href="view_business_partner.php">Business Partners</a>
              </li>

             
          </ul>
        </nav>


        <!-- // Navigation items  -->

        <div class="c-dropdown dropdown u-mr-small u-ml-auto">
          <!-- <div class="c-notification dropdown-toggle" id="dropdownMenuToggle1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
            <i class="c-notification__icon feather icon-message-circle"></i>
          </div> -->

          <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle1">

            <span class="c-dropdown__menu-header">
              Mentions
            </span>
            <a class="c-dropdown__item dropdown-item" href="#">
              <div class="o-media">
                <div class="o-media__img u-mr-xsmall">
                  <span class="c-avatar c-avatar--xsmall">
                    <img class="c-avatar__img" src="../administrator/img/avatar1-72.jpg" alt="Adam Sandler">
                  </span>
                </div>

                <div class="o-media__body">
                  <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                </div>
              </div>
            </a>

            <a class="c-dropdown__item dropdown-item" href="#">
              <div class="o-media">
                <div class="o-media__img u-mr-xsmall">
                  <span class="c-avatar c-avatar--xsmall">
                    <img class="c-avatar__img" src="../administrator/img/avatar2-72.jpg" alt="Adam Sandler">
                  </span>
                </div>

                <div class="o-media__body">
                  <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                </div>
              </div>
            </a>

            <a class="c-dropdown__item dropdown-item" href="#">
              <div class="o-media">
                <div class="o-media__img u-mr-xsmall">
                  <span class="c-avatar c-avatar--xsmall">
                    <img class="c-avatar__img" src="../administrator/img/avatar3-72.jpg" alt="Adam Sandler">
                  </span>
                </div>

                <div class="o-media__body">
                  <p>Hey, Julia how are you doing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eius iste.</p>
                </div>
              </div>
            </a>

            <a class="c-dropdown__menu-footer">
              All Mentions
            </a>
          </div>
        </div>

        <div class="c-dropdown dropdown u-mr-medium">
          <!-- <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
            <i class="c-notification__icon feather icon-bell"></i>
          </div> -->

          <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">

            <span class="c-dropdown__menu-header">
              Notifications
            </span>
            <a class="c-dropdown__item dropdown-item" href="#">
              <div class="o-media">
                <div class="o-media__img u-mr-xsmall">
                  <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
                </div>

                <div class="o-media__body">
                  <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                </div>
              </div>
            </a>

            <a class="c-dropdown__item dropdown-item" href="#">
              <div class="o-media">
                <div class="o-media__img u-mr-xsmall">
                  <span class="c-icon c-icon--danger c-icon--xsmall"><i class="feather icon-x"></i></span>
                </div>

                <div class="o-media__body">
                  <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                </div>
              </div>
            </a>

            <a class="c-dropdown__item dropdown-item" href="#">
              <div class="o-media">
                <div class="o-media__img u-mr-xsmall">
                  <span class="c-icon c-icon--success c-icon--xsmall"><i class="feather icon-anchor"></i></span>
                </div>

                <div class="o-media__body">
                  <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                </div>
              </div>
            </a>

            <a class="c-dropdown__menu-footer">
              All Notifications
            </a>
          </div>
        </div>

        <div class="c-dropdown dropdown">
          <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
            <img class="c-avatar__img" src="../administrator/img/avatar-72.jpg" alt="Adam Sandler">
          </div>

          <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
           <!--  <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
            <a class="c-dropdown__item dropdown-item" href="#">View Activity</a> -->
            <a class="c-dropdown__item dropdown-item" href="logout.php">Log out</a>
            <hr style="opacity: .2" />
            <div style="padding:10px;font-size: 12px;color: #999">
              <?php echo $pdo_auth['type']; ?><br/>
            <?php echo $pdo_auth['username']; ?>
            </div>
          </div>
        </div>

        <button class="c-navbar__nav-toggle" type="button" data-toggle="collapse" data-target="#main-nav">
            <i class="feather icon-menu"></i>
        </button><!-- // .c-nav-toggle -->
      </header>

      <div class="c-toolbar-responsive u-mb-medium">
        <div class="c-toolbar">
          <nav class="c-toolbar__nav u-mr-auto">
            <a class="c-toolbar__nav-link is-active" href="dashboard.php">Dashboard</a>
           <!-- <a class="c-toolbar__nav-link" href="orders.php">Orders</a>
            <a class="c-toolbar__nav-link" href="invoices.php">Invoices</a>
            <a class="c-toolbar__nav-link" href="credit_lines.php">Credit Lines</a>
            <a class="c-toolbar__nav-link" href="advance_invoices.php">Advance Sales</a>
            <a class="c-toolbar__nav-link" href="settlements.php">Settlement</a>
            <a class="c-toolbar__nav-link" href="configure_percentages.php">Configure Percentages</a> -->
          </nav>
          <div class="u-hidden-down@desktop">
            <?php if ($pdo_auth['type']=="Sales") {
              echo '<a class="c-btn c-btn--info c-btn--small" href="add_business_partner.php">New Business Partner</a>';
            } ?>
            
            <!-- <a class="c-btn c-btn--success c-btn--small" href="admin.php">Admin</a>
            <a class="c-btn c-btn--warning c-btn--small" href="setting.php">Settings</a> -->
          </div>
        </div>
      </div>