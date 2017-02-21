<?php
use yii\helpers\Html;
use common\components\Util;

?>
<article id="<?php echo $model->id ?>" class="<?php echo $model->id ?> tour type-tour has-post-thumbnail ">
    <figure class="thumbt"><a href="tour/view/<?= $model->id ?>" title=" echo <?php $model->name ?>"><img width="150" height="150" src="<?=  Util::getUrlImage($model->avatar)  ?>" class="img-polaroid featured-image wp-post-image" alt="minh mang tomb" title="<?php echo $model->name ?>" /></a>
    </figure>
    <header class="entry-header">
        <h2 class="entry-title"><a href="tour/view/<?= $model->id ?>" title="<?php echo $model->name ?>" rel="bookmark"><?php echo $model->name ?></a></h2> </header>

    <div class="entry-content clearfix">

        <span class='price'>from <span><?php echo $model->price ?></span> </span><i class='fa fa-clock-o'></i>
        <a href='duration/day-tour/index'>
            <?php echo ($model->dayTour == 1) ? "Day tour" : $model->dayTour." days" ?></a> &nbsp;&nbsp;<i class='fa fa-map-marker'></i>

        <?php for($countAddress=0 ; $countAddress < count($model->address) ; $countAddress++) { ?>
        <a href='destination/hue/index'>
            <?php echo $model->address[$countAddress];?></a>,
        <?php }?>

        <p>
            <?php echo $model->info ?></p>
    </div>
</article>


 