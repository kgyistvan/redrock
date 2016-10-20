<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Contact Us
            ============================================= -->

<section id="section-contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-title">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeInLeft">
                <div class="contact-left">
                    <div class="location">
                        <p>Str. Pârâului, Nr. 6</p>
                        <p>520033, Sfântu Gheorghe</p>
                        <p>Jud. Covasna</p>
                        <p>România</p>
                    </div>
                    <ul>
                        <li><span>Email :</span> <a>redrock@redrock.no</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInRight">
                <div class="contact-form">
                        <?php
                        $data = array('class' => 'contact-box', 'id'=>'contact-form');
                        
                        //echo validation_errors();
                        echo form_open("redrock/send_email", $data); ?>
                        <div class="form-group">
                        <?php echo form_label("Name ", "fullName"); ?>
                        </div>
                        <?php
                        $data = array(
                            "name" => "fullName",
                            "id" => "fullName",
                            "class" => "form-control",
                            "value" => "",
                            "required" => "required"
                        );
                        echo form_input($data); ?>

                        <div class="form-group">
                        <?php echo form_label("Email Address ", "email"); ?>
                        </div>
                        <?php $data = array(
                            "name" => "email",
                            "id" => "email",
                            "class" => "form-control",
                            "value" => "",
                            "type" => "email",
                            "required" => "required"
                        );
                        echo form_input($data); ?>
                        
                        <div class="form-group">
                        <?php echo form_label("Message ", "message"); ?>
                        </div> 
                        <?php $data = array(
                            "name" => "message",
                            "id" => "message_box",
                            "class" => "form-control",
                            "value" => "",
                            "required" => "required"
                        );
                        echo form_textarea($data); ?>  
                    <div class="row">
                        <div class="col-md-12">
                        <?php $data = array(
                            "id" => "contact-btn",
                            "class" => "btn btn-light",
                            "value" => ""
                        );
                        echo form_submit("contactSubmit", "Contact Us", $data); ?>
                        </div>
                        <div id="response_error" class="col-md-12 response" style="display:none"></div>
                        <div id="response_success" class="col-md-12 response" style="display:none"></div>

                    </div>
                        <?php echo form_close();  ?>
                </div>
            </div>
        </div>
    </div>
</section>