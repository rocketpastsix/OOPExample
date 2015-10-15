<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'bacon' => '/ingredients/bacon.php',
                'cad' => '/cad.php',
                'cheese' => '/ingredients/cheese.php',
                'currency' => '/currency.php',
                'everythingrecipe' => '/recipes/everythingRecipe.php',
                'factory' => '/factory.php',
                'htmlrenderer' => '/display/htmlRenderer.php',
                'ingredient' => '/ingredient.php',
                'jsonrenderer' => '/display/jsonRenderer.php',
                'meatloverrecipe' => '/recipes/meatLoverRecipe.php',
                'menu' => '/Menu.php',
                'money' => '/money.php',
                'mushrooms' => '/ingredients/mushrooms.php',
                'olives' => '/ingredients/olives.php',
                'pepperoni' => '/ingredients/pepperoni.php',
                'peppers' => '/ingredients/peppers.php',
                'pizza' => '/pizza.php',
                'pizzarender' => '/pizzaRender.php',
                'plainrecipe' => '/recipes/plainRecipe.php',
                'recipe' => '/recipe.php',
                'renderer' => '/renderer.php',
                'renderlocator' => '/renderLocator.php',
                'sauce' => '/ingredients/sauce.php',
                'sausage' => '/ingredients/sausage.php',
                'usd' => '/usd.php',
                'vegetarianrecipe' => '/recipes/vegetarianRecipe.php',
                'xmlrenderer' => '/display/xmlRenderer.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
