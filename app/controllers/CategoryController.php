<?php

use Phalcon\Db\Column;

/**
 * Class CategoryController
 */
class CategoryController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->categories = Category::find(
//            [
//                "cache" => [
//                    "key"      => "list-categories-cache",
//                    "lifetime" => 60,
//                ],
//            ]
        );
    }


    public function addAction()
    {
        if($this->request->isPost()){
            $category = new Category();
            $category->name = $this->request->getPost('name');

            if($category->create() === false){
                echo "Ошибка, не удалось добавить новую категорию!!!: \n";
            } else {
                header("Location: /category");
            }
        }
    }

    /**
     * @param $categoryId
     */
    public function editAction($categoryId)
    {
        $this->view->category = Category::findFirst(
            [
                'id_category = :id:',
                'bind' => [
                    'id' => $categoryId,
                ],
                'bindTypes' => [
                    'id' => Column::BIND_PARAM_INT,
                ],
            ]
        );

        if($this->request->isPost()){
            $category = Category::findFirst($categoryId);
            $category->name = $this->request->getPost('name');

            if($category->update() === false){
                echo "Ошибка, не удалось редактировать категорию!!!: \n";
            } else {
                header("Location: /category");
            }
        }
    }

    /**
     * @param $categoryId
     */
    public function deleteAction($categoryId)
    {
        $category = Category::findFirst(
            [
                'id_category = :id:',
                'bind' => [
                    'id' => $categoryId,
                ],
                'bindTypes' => [
                    'id' => Column::BIND_PARAM_INT,
                ],
            ]
        );

        if($category !== false) {
            if($category->delete() === false) {
                echo "Ошибка, не удалось удались категорию!!!: \n";
            } else {
                header("Location: /category");
            }
        }
    }

}

