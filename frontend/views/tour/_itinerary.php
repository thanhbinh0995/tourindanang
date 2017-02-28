<?php 
   use yii\widgets\ListView;
?>
<div class="tab-content">
                                
                                <div id="price" class="tab">
                                    <h4>Tour price</h4>
                                    <p><strong><?= $model->name; ?><br />
                                    </strong>
                                    </p>
                                    <table>
                                        <tbody>
                                             <tr>
                                                    <td>Number of travellers</td>
                                                    <td>2 pax</td>
                                                    <td>3 - 5 pax</td>
                                                    <td>6 -8 pax</td>
                                                    <td>9 pax</td>
                                                 </tr>
                                           <?= ListView::widget([			
                                                    'dataProvider' => $providerTourPrices,
                                                    'itemView' => '_price',                                      
                                                    'itemOptions' => [
                                                        'tag' => false,
                                                    ],
                                                    'summary' => '',
                                                ]);
                                            ?>
                                        </tbody>
                                    </table>
                                    <h4>Hotel price</h4>
                                    </p>
                                    <table>
                                        <tbody>
                                             <tr>
                                                    <td>Tour Class </td>
                                                    <td>2 pax</td>
                                                    <td>3 - 5 pax</td>
                                                    <td>6 -8 pax</td>
                                                    <td>9 pax</td>
                                                 </tr>
                                           <?= ListView::widget([							
                                                    'dataProvider' => $providerTourHotels,
                                                    'itemView' => '_hotel',                                                   
                                                    'itemOptions' => [
                                                        'tag' => false,
                                                    ],
                                                    'summary' => '',                                        
                                                ]);
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                    <h4>Hotel proposal</h4>
                                    </p>
                                    <table>
                                        <tbody>
                                             <tr>
                                                    <td>Destination</td>
                                                    <td>Superior 3 star hotel</td>
                                                    <td>Deluxe
4 star hotel</td>
                                                    <td>Luxury
5 star hotel</td>
                                                 
                                                 </tr>                 
                                            <?= 
                                            ListView::widget([
                                                    'dataProvider' => $providerAddressHotels,
                                                    'itemView' => '_address',                    
                                                    'itemOptions' => [
                                                        'tag' => false,
                                                    ],
                                                    'summary' => '',
                                                ]);
                                            ?>
                                           
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