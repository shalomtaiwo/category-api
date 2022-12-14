<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

/**
 * Feel free to change any code.
 *
 * Please complete the following assessment.
 *
 * In the file below you will see an Object $data that has categories and products inside it.
 *
 * There are two functions we would like implemented:
 * getProductsInCategory() - This function needs to return a product inside a category that we can specify.
 * doesProductExistInCategory() - This function needs to let us know if a product exists in a category that we chose.
 *
 * Hints:
 * Please make sure that the Object is extendable and other products and categories can be added and the functions will work.
 * Big-O notation.
 * Using DRY and SOLID principles.
 * You can ask for help or more information at anytime.
 *
 * Bonus points:
 * - PHP Unit Testing.
 * - Frontend display/Layout/Template to process data.
 * - Git repository to track the code changes.
 *
 * You will be evaluated on the following:
 * - Code structure, readability, understandably, maintainability and layout.
 * - Code standards used.
 * - Completion of the objective.
 * - Performance of the completed structure.
 */

class Product
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Category
{
    public string $name;
    public array $products;

    public function __construct(string $name, array $products)
    {
        $this->name = $name;
        $this->products = $products;
    }
}
class Index
{
    public string $greet;
    public array $greeting;

    public function __construct(string $greet, string $greeting)
    {
        $this->$greet = $greet;
        $this->$greeting = $greeting;
    }
}

$main = [
    new Index('Hello', "Welcome to Category API"),
];

$data = [
    new Category('Mens', [new Product('Blue Shirt'), new Product('Red T-Shirt')]),
    new Category('Kids', [new Product('Sneakers'), new Product('Toy car')]),
    new Category('Women', [new Product('White Skirt'), new Product('Pink Top'), new Product('Red Cap')]),
    new Category('Furniture', [new Product('Coffee Table'), new Product('Office Chair'), new Product('Yellow Couch'), new Product('Equinox Office Desk')]),
    new Category('Bedroom', [new Product('Duvet Covers'), new Product('Blankets')]),
    new Category('Decor', [new Product('Lamp set'), new Product('Vases'), new Product('Wall Art'), new Product('Mirror')]),
];

/**
 * Return a product inside a category.
 *
 * @param string $category
 *
 * @return array
 */

function getMainPage()
{
    // Implement me
    global $main;

    return $main;
}

function getProductsInCategory(string $category): array
{
    // Implement me
    global $data;
    $products = [];
    foreach ($data as $cat) {
        if ($cat->name === $category) {
            $products = $cat->products;
        }
    }

    return $products;
}

function getAllCategory()
{
    // Implement me
    global $data;

    return $data;
}
function doesProductExistInCategory(string $category, string $productName): bool
{

    $products = getProductsInCategory($category);
    $productExists = false;
    foreach($products as $product) {
        if ($product->name === $productName) {
            $productExists = true;
            break;
        }
    }
    return $productExists;
}

// echo '<pre>';
// print_r();