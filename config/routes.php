<?php

return [
    "/" => function() {
        return (new Controllers\DefaultController())->index();
    },
    "/contact" => function() {
        return (new Controllers\ContactController())->contact();
    },

    "/checkout" => function() {
        return (new Controllers\ContactController())->contact();
    },

    "/lipstick" => function() {
        return (new Controllers\PageController())->index();
    },

    "/blush" => function() {
        return (new Controllers\PageController())->blush();
    },

    "/eyeliner" => function() {
        return (new Controllers\PageController())->eyeliner();
    },

    "/eyeshadow" => function() {
        return (new Controllers\PageController())->eyeshadow();
    },

    "/faceproducts" => function() {
        return (new Controllers\PageController())->faceproducts();
    },

    "/oneitem" => function() {
        return (new Controllers\PageController())->oneitem();
    },
    
    "/cart" => function() {
        return (new Controllers\CheckoutController())->cart();
    },

    "/login" => function() {
        return (new Controllers\PageController())->login();
    },
];
