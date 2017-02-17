<?php
namespace common\widgets;
use yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Type;
use yii\web\View;
use yii\web\JqueryAsset;
class HelloWidget extends Widget 
{   
    public $message;
    public $typesName;
    private $list;
    private $script;
    private static $juiThemeSelectId = 'JuiThemesList';
    public $themeListId;
    public $label;
    public function init()
    {
        parent::init();
        if ($this->themeListId)   
            self::$juiThemeSelectId = $this->themeListId;
        $this->list = $this->createSelectList($this->getThemesList());
        $this->makeScript();


        // if ($this->message===null)
        // {
        //     // $typesName = (new \yii\db\Query())
        //     // ->select('id,name')
        //     // ->from('type')
        //     // ->all();
        //     // $addressesName = (new \yii\db\Query())
        //     //         ->select('id,name')
        //     //         ->from('address')
        //     //         ->all();     
        //     // $days = (new \yii\db\Query())
        //     //         ->select('dayTour')
        //     //         ->from('tour')
        //     //         ->all(); 
        //     $nav = "
        //         <div class='nav navbar'>
        //             <div class='container'>
        //             ";
        //     $endNav = "</div>
        //         </div>";
        //     $this->message = $nav;
        //     $this->message .= "Hello User";
            
        //     $this->message .= $endNav;
            
        // } else {
        //     $this->message = "Hello " . $this->message;
        // }
    }
    public static function getThemesList()
    {
        $themesPath =  dirname(Yii::$app->basePath).DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."bower".DIRECTORY_SEPARATOR."jquery-ui".DIRECTORY_SEPARATOR."themes";
        $output = [];
        foreach (scandir($themesPath) as $item){
            if (is_dir($themesPath.DIRECTORY_SEPARATOR.$item) && ($item != '.' && $item !='..')) $output[] = $item;
        }
        return $output;
    }

    public static function createSelectList($items)
    { 
        $juiThemeSelectId = self::$juiThemeSelectId;    
        $output = '';
        $output .= "<select id=\"$juiThemeSelectId\">"."\n";
        foreach ($items as $item){
        $output .= "<option value='$item'>$item</option>\n";
        }
        $output .= "</select>\n";
        return $output;
    }

    private  function makeScript()
    {

        $t = self::$juiThemeSelectId;
        $this->script = <<<EOD

        <script>
        var juiThemeSelectId = "$t"   
        </script>           
EOD;

    }
    public function run() {
        parent::run();
        $this->getView()->registerJsFile('/myjs/jquery.cookie.js', ['depends' => [JqueryAsset::className()]]);
        $this->getView()->registerJsFile('/myjs/JuiThemeSelect.js', ['depends' => [JqueryAsset::className()]]);
        return "$this->label $this->list \n $this->script";
    }
    // public function run()
    // {
    //     return Html::encode($this->message);
    // }
}


