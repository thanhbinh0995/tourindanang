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
                                                    <?php for($count = 1; $count <= 15; $count++){?>
                                                            <option value="<?= $count ?>"><?= $count ?></option>
                                                    <?php }?>
                                                    
                                                </select>
                                                <label for="ef_num_child">Children(2-11): </label>
                                                <select id="ef_num_child" name="num_child">
                                                    <option value='0' selected='selected'>0</option>
                                                     <?php for($count = 1; $count <=    5; $count++){?>
                                                            <option value="<?= $count ?>"><?= $count ?></option>
                                                    <?php }?>
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