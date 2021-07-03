<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Article;
use yii\data\Pagination;
use backend\models\Category;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow'=>true,
                        'roles'=>['@'],
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $data = Article::getAll();
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $categories = Category::getAllCategories();
        return $this->render('index', [
            'articles' => $data['articles'],
            'pages' => $data['pages'],
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories

        ]);

    }

    /**
     * Login action.
     *
     * @return string
     */


    public function actionView($id)
    {
        $data = Article::find()->all();
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $article = Article::findOne($id);
        $categories = Category::getAllCategories();
        $previousArticle = ($id !=1 ) ? Article::findOne($id-1) : Article::findOne(5);
        $nextArticle =($id!=5) ? (Article::findOne($id+1)): (Article::findOne(1));
        return $this->render('single',['article'=>$article, 'categories'=>$categories, 'popular'=>$popular, 'recent'=>$recent,
        'previousArticle'=>$previousArticle, 'nextArticle'=>$nextArticle, 'data'=>$data] );
    }

    public function actionCategory($id)
    {
       $data = Category::getArticlesByCategory($id);
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $categories = Category::getAllCategories();
        return $this->render('category',[
            'articles'=>$data['articles'],
            'pages'=>$data['pages'],
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories
        ]);
    }
}
