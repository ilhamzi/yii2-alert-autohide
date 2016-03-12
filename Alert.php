<?php

namespace ilhamzi\alertautohide;

/**
 * Alert Widget With Auto Hidden Tag Html
 *
 * @author lhamzi
 */
use Yii;
use yii\bootstrap\Widget;

class Alert extends Widget 
{

    //put your code here
    public function run() 
    {
        if(Yii::$app->session->hasFlash('success')){
            $html  = '<div class="alert alert-success widgets-alert">';
            $html .= '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            $html .= Yii::$app->session->getFlash('success');
            $html .= '</div>';
        }elseif(Yii::$app->session->hasFlash('error')){
            $html  = '<div class="alert alert-danger widgets-alert">';
            $html .= '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            $html .= Yii::$app->session->getFlash('error');
            $html .= '</div>';
        }
        return $this->render('alert-views',[
            'html'=>$html
        ]);
    }

}
