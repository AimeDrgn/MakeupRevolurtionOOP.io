<?php
$menu = (new Models\Db\Menu())->getMenu('main-menu');
$menuItems = (null == $menu ? [] : $menu->getMenuItems());
var_dump($menuItems);
?>
<div class="main-banner-w3ls">
    <!-- header -->
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo2.png" class="logo img-fluid" alt="">MakeupRevolution
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-lg-auto">
                    <?php foreach ($menuItems as $menuItem): ?>
                    <?php if (count($menuItem->getChilds()) == 0): ?>
                    <li>
                        <a class="nav-link active" href="<?= $menuItem->getLink(); ?>"><?= $menuItem->getName() ?></a>
                    </li>
                    <?php else: ?>
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= $menuItem->getLink(); ?>" id="dropdown<?= $menuItem->getId(); ?>" role="button" aria-haspopup="true"
                           aria-expanded="false">Products
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <?= $menuItem->getName() ?>
                        </a>
                        <div class="dropdown-menu second mt-2" aria-labelledby="dropdown<?= $menuItem->getId(); ?>" style="display: none;">
                            <?php foreach ($menuItem->getChilds() as $child): ?>
                                    <a class="dropdown-item" href="<?= $child->getLink(); ?>"><?= $child->getName() ?></a>
                            <a class="dropdown-item" href="<?= $child->getLink(); ?>"><?= $child->getName() ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= $child->getLink(); ?>"><?= $child->getName() ?></a>
                            <a class="dropdown-item" href="<?= $child->getLink(); ?>"><?= $child->getName() ?></a>
                        </div>
                        <?php endforeach; ?>

                    </li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </ul>
                <div class="header-social-w3ls text-center mt-lg-0 mt-4">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <a href="cart.html">
                            <i class="fa fa-shopping-cart" style="font-size:24px;color:red"></i>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>