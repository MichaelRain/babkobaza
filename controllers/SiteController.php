<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\posts;
use app\models\users;
use app\models\tasks;
use app\models\addForm;
use app\models\AddTask;
use yii\helpers\Html;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
        $users= Users::find()->all();
        return $this->render('index',[
            'users'=>$users]);

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionInfo(){
        return $this-> render('info');
    }

   /* public function actionAdd(){
        $form= new addForm;
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $text= Html::encode($form->text);
            $img= Html::encode($form->img);
            $post= new Posts;
            $post->text=$text;
            $post->img=$img;
            $post->username='MichaelRain';
        } 


        return $this-> render('add',
            ['form'=>$form,
            'text'=>$text,
            'url'=>$url]
        );
    }*/

    public function actionUser($id){
        $users= Users::find()->where(['id'=>$id])->one();
        $tasks= tasks::find()->where(['user_id'=>$id])->all();
        return $this-> render('user',[
            'user'=>$users,
            'tasks'=>$tasks]);

    }

    public function actionAdd(){
        $form= new AddTask();
         if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $username= Html::encode($form->username);
            $task= Html::encode($form->task);
            $deadline= Html::encode($form->deadline);
            $count= Html::encode($form->count);
            $post= new tasks();
            $post->user_id=$user_id;
            $post->task=$task;
            $post->status=$deadline;
            $post->full_pay=$count;
         }
        return $this-> render('add',[
            'form'=>$form
        ]);
    }
}
