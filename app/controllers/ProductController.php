<?php

use Phalcon\Db\Column;

/**
 * Class ProductController
 */
class ProductController extends \Phalcon\Mvc\Controller
{
    
    public function indexAction()
    {
        $products = Product::find(
//            [
//                "cache" => [
//                    "key"      => "list-products-cache",
//                    "lifetime" => 60,
//                ],
//            ]
        );
        $this->view->text = $this->calculating->countProducts($products);
        $this->view->products = $products;

    }
    
    public function addAction()
    {
        $this->view->categories = Category::find();

        if($this->request->isPost()){
            $product = new Product();
            $product->name = $this->request->getPost('name');
            $product->count = $this->request->getPost('count');
            $product->id_category = $this->request->getPost('category');

            if($product->create() === false){
                echo "Не удалось сохранить новый продукт: \n";
            } else {
                header("Location: /product");
            }
        }
    }

    /**
     * @param $productId
     */
    public function editAction($productId)
    {
        $this->view->product = Product::findFirst(
            [
                'id_product = :id:',
                'bind' => [
                    'id' => $productId,
                ],
                'bindTypes' => [
                    'id' => Column::BIND_PARAM_INT,
                ],
            ]
        );
        $this->view->categories = Category::find();

        if($this->request->isPost()){
            $product = Product::findFirst($productId);
            $product->name = $this->request->getPost('name');
            $product->count = $this->request->getPost('count');
            $product->id_category = $this->request->getPost('category');

            if($product->update() === false){
                echo "Ошибка, не удалось редактировать информацию о продукте!!!: \n";
            } else {
                header("Location: /product");
            }
        }
    }

    /**
     * @param $productId
     */
    public function deleteAction($productId)
    {
        $product = Product::findFirst(
            [
                'id_product = :id:',
                'bind' => [
                    'id' => $productId,
                ],
                'bindTypes' => [
                    'id' => Column::BIND_PARAM_INT,
                ],
            ]
        );

        if($product !== false) {
            if($product->delete() === false) {
                echo "Ошибка, не удалось удалить данный продукт!!!: \n";
            } else {
                header("Location: /product");
            }
        } else {
            echo "Такого продукта не существует";
        }
    }
    
    
    
}

