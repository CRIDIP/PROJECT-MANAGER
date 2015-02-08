<!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="index.html" class="sidebar-brand">
                            <i class="gi gi-flash"></i><strong><?php echo $logiciel; ?></strong>
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix">
                            <div class="sidebar-user-avatar">
                                <a href="page_ready_user_profile.html">
                                    <img src="<?php echo SITE,FOLDER,ASSETS; ?>img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name">John Doe</div>
                            <div class="sidebar-user-links">
                                <small>Administrateur</small>
                            </div>
                        </div>
                        <!-- END User Info -->

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="<?php echo SITE,FOLDER; ?>index.php" class=" active"><i class="gi gi-dashboard sidebar-nav-icon"></i>Tableau de Bord</a>
                            </li>
                            <li>
                                <a href="page_widgets_stats.html"><i class="gi gi-inbox sidebar-nav-icon"></i>Messages</a>
                            </li>
                            <li>
                                <a href="page_widgets_social.html"><i class="gi gi-folder_new sidebar-nav-icon"></i>Projets</a>
                            </li>
                            <li>
                                <a href="page_widgets_media.html"><i class="gi gi-group sidebar-nav-icon"></i>Clients</a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-shopping_cart sidebar-nav-icon"></i>Facture</a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-calendar sidebar-nav-icon"></i>Abonnements</a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-barcode sidebar-nav-icon"></i>Articles</a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-file sidebar-nav-icon"></i>Devis</a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-tags sidebar-nav-icon"></i>Tickets</a>
                            </li>
                            <li>
                                <a href="page_widgets_links.html"><i class="gi gi-cogs sidebar-nav-icon"></i>Parametre</a>
                            </li>
                        </ul>
                        <!-- END Sidebar Navigation -->

                        <!-- Sidebar Notifications -->
                        <div class="sidebar-header">
                            <span class="sidebar-header-options clearfix">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                            </span>
                            <span class="sidebar-header-title">Activity</span>
                        </div>
                        <div class="sidebar-section">
                            <div class="alert alert-success alert-alt">
                                <small>5 min ago</small><br>
                                <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                            </div>
                            <div class="alert alert-info alert-alt">
                                <small>10 min ago</small><br>
                                <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                            </div>
                            <div class="alert alert-warning alert-alt">
                                <small>3 hours ago</small><br>
                                <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                            </div>
                            <div class="alert alert-danger alert-alt">
                                <small>Yesterday</small><br>
                                <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                            </div>
                        </div>
                        <!-- END Sidebar Notifications -->
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->