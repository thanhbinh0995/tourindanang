<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Tour;
use common\models\Type;
use common\models\Address;
/* @var $this yii\web\View */
/* @var $model common\models\Tour */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];

?>
<div class="tour-view">
    <style type="text/css" media="screen">
        @media screen and (max-width: 960px) {
            .container_12,
            .container_16 {
                width: auto
            }
        }
        .featured .carousel-inner .small-thumbnail,
        .featured .carousel-inner .no-thumbnail,
        .featured .carousel-inner .item {
            height: 300px;
        }
        .featured-blog .carousel-inner .item {
            height: 300px;
        }
        #site-title {
            font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
        }
        #site-description {
            font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            $(".carousel").carousel({
                interval: 8000
            })
        });
    </script>
    
    <style type="text/css">
        #site-title a,
        #site-description {
            color: #057fa5 !important;
        }
    </style>
<body class="single single-tour postid-382 single-author singular">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-11660279-10', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="main">
        <div id="breadcrumbs" class="container_12 clearfix">
            <span xmlns:v="http://rdf.data-vocabulary.org/#">
                <span typeof="v:Breadcrumb">
                    <a href="../../index.html" rel="v:url" property="v:title">Home</a> » 
                    <span rel="v:child" typeof="v:Breadcrumb">
                        <a href="../../travel-style/sightseeing/index.html" rel="v:url" property="v:title"><?php echo Tour::getTypesName($model); ?></a> » 
                            <span class="breadcrumb_last"><?php echo $model->name ?></span>
                    </span>
                </span>
            </span>
        </div>
        <div class="container_12 clearfix">
            <div id="content" class="grid_8 " role="main">

                <article id="post-382" class="post-382 tour type-tour has-post-thumbnail duration-day-tour travel-style-sightseeing destination-hue">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php echo $model->name; ?></h1>
                        <div class="entry-meta">
                            <span class='price'>from 
                                <span>$40</span>
                            </span>
                            <i class='fa fa-clock-o'></i>
                            <a href='../../duration/day-tour/index.html'>Day tour</a> &nbsp;&nbsp;
                            <i class='fa fa-map-marker'></i>
                            <a href='../../destination/hue/index.html'><?php echo Tour::getAddressesName($model); ?></a>
                        </div>
                    </header>
                    <div class="entry-content clearfix">

                        <div class='thumbox clearfix'>
                            <?php  
                                foreach ($model->images as $image) {    
                            ?>
                                <img src="/api/uploads/<?= $image->name; ?>" class="thumb" alt="khai dinh tomb" />
                            <?php } ?>
                        </div>
                        <p class='desc'><?= $model->info ?></p>
                        <div id="message"></div>

                        <div class="tabs">
                            <ul class="tab-links">
                                <li class="active"><a href="#itinerary">Itinerary</a>
                                </li>
                                <li><a href="#price">Price</a>
                                </li>
                                <li><a href="#inquiry">Enquiry</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="itinerary" class="tab active">
                                    <?= $model->itinerary ?>
                                </div>

                                <div id="price" class="tab">
                                    <h4>Tour price</h4>
                                    <p><strong>Private tour Hue city 1 day<br />
                                    </strong>
                                    </p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>No of travelers</td>
                                                <td>2 pax</td>
                                                <td>3-5 pax</td>
                                                <td>6-8 pax</td>
                                                <td>9 pax above</td>
                                            </tr>
                                            <tr>
                                                <td>Price in USD/person
                                                    <br /> From Da Nang</td>
                                                <td>$86</td>
                                                <td>$69</td>
                                                <td>$52</td>
                                                <td>$45</td>
                                            </tr>
                                            <tr>
                                                <td>Price in USD/person
                                                    <br /> From Hue</td>
                                                <td>$76</td>
                                                <td>$60</td>
                                                <td>$46</td>
                                                <td>$40</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p><em>Optional: Royal Hue Music on dragon boat &#8211; extra $5/person</em>
                                    </p>
                                    <p>Not fit your requirement? Feel free to contact us to plan this trip and get the best possible price based upon your travel period and specific touring needs.</p>
                                    <h4>Tour inclusive</h4>
                                    <ul>
                                        <li>Transportation by private car, pick up/drop off at your hotel</li>
                                        <li>Entrance fees for visits mentioned in itinerary</li>
                                        <li>English speaking tour guide</li>
                                        <li>Lunch at restaurant</li>
                                        <li>Boat trip on Perfume River</li>
                                        <li>Drink water</li>
                                    </ul>
                                    <h4>Tour exclusive</h4>
                                    <ul>
                                        <li>Travel insurance</li>
                                        <li>Drinks &amp; other meals not mentioned</li>
                                        <li>Personal expenses &amp; tips</li>
                                    </ul>
                                </div>
                                <div id="inquiry" class="tab">
                                    <h4>Request a quote</h4>
                                    <form class="enquiry-form" method="post" action="#">
                                        <div id="ef_content">
                                            <div>
                                                <label for="tour_name">Tour Name: <strong>Imperial Hue City Tour</strong>
                                                </label>
                                                <input type="hidden" name="c_tour" id="tour_name" size="50" maxlength="50" value="Imperial Hue City Tour" />
                                            </div>
                                            <div>
                                                <label for="datepicker">Tour Date:</label>
                                                <input type="text" id="datepicker" name="tour_date" size="20" value="" />
                                            </div>
                                            <div>
                                                <label for="ef_num_adult">Adults(>12): </label>
                                                <select id="ef_num_adult" name="num_adult">
                                                    <option value='0' selected='selected'>0</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                    <option value='6'>6</option>
                                                    <option value='7'>7</option>
                                                    <option value='8'>8</option>
                                                    <option value='9'>9</option>
                                                    <option value='10'>10</option>
                                                    <option value='11'>11</option>
                                                    <option value='12'>12</option>
                                                    <option value='13'>13</option>
                                                    <option value='14'>14</option>
                                                    <option value='15'>15</option>
                                                    <option value=">15">>15</option>
                                                </select>
                                                <label for="ef_num_child">Children(2-11): </label>
                                                <select id="ef_num_child" name="num_child">
                                                    <option value='0' selected='selected'>0</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                </select>
                                            </div>
                                            <p></p>
                                            <h4>Your contact information</h4>
                                            <div>
                                                <label for="ef_name">Your Name:</label>
                                                <select id="name_title" name="name_title">
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Ms.">Ms.</option>
                                                </select>
                                                <input type="text" name="c_name" id="ef_name" size="30" maxlength="50" value="" required />
                                            </div>
                                            <div>
                                                <label for="ef_email">Your E-mail:</label>
                                                <input type="text" name="email" id="ef_email" size="30" maxlength="50" value="" required/>
                                            </div>
                                            <div>
                                                <label for="ef_phone">Phone Number:</label>
                                                <input type="text" id="ef_phone" name="phone" size="20" value="" />
                                            </div>
                                            <div>
                                                <label for="ef_message">Additional requirements:</label>
                                                <textarea name="message" id="ef_message" cols="50" rows="5" required></textarea>
                                            </div>
                                            <div>
                                                <input type="submit" value="Submit" name="send" id="ef_send" />
                                            </div>
                                        </div>
                                    </form>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function($) {
                                            $("#datepicker").datepicker({
                                                dateFormat: "yy-mm-dd",
                                                minDate: 0
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='yarpp-related'>
                        <h3>See also:</h3>
                        <div class="yarpp-thumbnails-horizontal">
                            <a class='yarpp-thumbnail' href='../da-nang-hue-2-days/index.html' title='Da Nang &#8211; Hue 2 days'>
                                <img width="120" height="80" src="../../wp-content/uploads/hue-imperial-citadel.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="imperial city hue" srcset="http://tourindanang.com/wp-content/uploads/hue-imperial-citadel.jpg 640w, http://tourindanang.com/wp-content/uploads/hue-imperial-citadel-500x334.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">Da Nang &#8211; Hue 2 days</span>
                            </a>
                            <a class='yarpp-thumbnail' href='../danang-hoian-hue-tour-4-days/index.html' title='Da Nang &#8211; Hoi An &#8211; Hue 4 Days'>
                                <img width="120" height="90" src="../../wp-content/uploads/da-nang-beach.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="da nang beach" srcset="http://tourindanang.com/wp-content/uploads/da-nang-beach.jpg 650w, http://tourindanang.com/wp-content/uploads/da-nang-beach-500x375.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">Da Nang &#8211; Hoi An &#8211; Hue 4 Days</span>
                            </a>
                            <a class='yarpp-thumbnail' href='../../guide/the-imperial-citadel-hue/index.html' title='The Imperial Citadel of Hue City'>
                                <img width="120" height="66" src="../../wp-content/uploads/imperial-citadel.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="imperial citadel hue" srcset="http://tourindanang.com/wp-content/uploads/imperial-citadel.jpg 754w, http://tourindanang.com/wp-content/uploads/imperial-citadel-500x275.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">The Imperial Citadel of Hue City</span>
                            </a>
                            <a class='yarpp-thumbnail' href='../boat-trip-on-perfume-river-hue/index.html' title='Boat trip on Perfume River Hue'>
                                <img width="120" height="85" src="../../wp-content/uploads/perfume-river-boat-trip.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="perfume river boat trip" srcset="http://tourindanang.com/wp-content/uploads/perfume-river-boat-trip.jpg 570w, http://tourindanang.com/wp-content/uploads/perfume-river-boat-trip-500x356.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">Boat trip on Perfume River Hue</span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>

