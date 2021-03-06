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
            'statistics' => [
                'class' => \Klisl\Statistics\AddStatistics::class,
                'actions' => ['index','view'],
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
        $this->attachBehavior('statistics', [
            'class' => \Klisl\Statistics\AddStatistics::class,
            'actions' => [$this->action->id]
        ]);
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
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionView($id)
    {
        $data = Article::find()->all();
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $article = Article::findOne($id);
        $categories = Category::getAllCategories();
        $max = Article::find()->count();
        $previousArticle = ($id !=1 ) ? Article::findOne($id-1) : Article::findOne($max);
        $nextArticle =($id!=$max) ? (Article::findOne($id+1)): (Article::findOne(1));
        $this->attachBehavior('statistics', [
            'class' => \Klisl\Statistics\AddStatistics::class,
            'actions' => [$this->action->id]
        ]);
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
