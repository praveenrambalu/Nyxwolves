<section id="contact" class="form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center text-center text-md-left">

                <!-- Success Message -->
                <div class="row success message">
                    <div class="col-12 p-0">
                        <i class="icon bigger icon-check"></i>
                        <h3>Success</h3>
                        <p>Your message has been sent successfully.</p>
                        <p>Our team will get in touch with you soon.</p>
                        <a href="" class="btn mx-auto primary-button"><i class="icon-refresh"></i>REFRESH</a>
                    </div>
                </div>

                <!-- Steps Message -->
                <div class="row intro">
                    <div class="col-12 p-0">

                        <!-- Text 1 -->
                        <div id="text-1">
                            <h2 class="featured alt">Let's Talk?</h2>
                            <p>Join us as we lead you through an exhilarating experience in creating world-class
                                business. Let’s share our passion and conquer the world!</p>
                        </div>

                        <!-- Text 2 -->
                        <div id="text-2" style="display: none">
                            <h2 class="featured alt">Let's Talk?</h2>
                            <p>Join us as we lead you through an exhilarating experience in creating world-class
                                business. Let’s share our passion and conquer the world!</p>
                        </div>

                        <!-- Text 3 -->
                        <div id="text-3" style="display: none">
                            <h2 class="featured alt">Let's Talk?</h2>
                            <p>Join us as we lead you through an exhilarating experience in creating world-class
                                business. Let’s share our passion and conquer the world!</p>
                        </div>

                    </div>
                </div>

                <!-- Form -->
                <div class="row text-center">
                    <div class="col-12 p-0">
                        <form id="msform">
                            @csrf
                            <ul id="progressbar">
                                <li class="active">Personal Details</li>
                                <li>Company Detail</li>
                                <li>Write Message</li>
                            </ul>

                            <!-- Group 1 -->
                            <fieldset id="group-1">
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="name" minlength="3"
                                            class="form-control input-style" placeholder="Name" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="email" name="email" minlength="3"
                                            class="form-control input-style" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="phone" minlength="3"
                                            class="form-control input-style" placeholder="Phone" required>
                                    </div>
                                </div>
                            
                                <div class="col-12 input-group p-0">
                                    <a id="next-1" class="next btn primary-button">NEXT<i
                                            class="btn-icon icon-arrow-right-circle left"></i></a>
                                </div>
                            </fieldset>

                            <!-- Group 2 -->
                            <fieldset id="group-2">
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="company" minlength="3"
                                            class="form-control input-style" placeholder="Company" autofocus required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 text-left">
                                        <h5 class="pt-1 pb-3 text-white">Services</h5>
                                        <input type="checkbox" name="services[]" value="App Development" id="box-1">
                                        <label for="box-1">App Development</label>
                                        <input type="checkbox" name="services[]" value="Product Development" id="box-2">
                                        <label for="box-2">Product Development</label>
                                        <input type="checkbox" name="services[]" value="UI UX" id="box-3">
                                        <label for="box-3">UI / UX</label>
                                        <input type="checkbox" name="services[]" value="Design Platforms" id="box-4">
                                        <label for="box-4">Design Platforms</label>
                                        <input type="checkbox" name="services[]" value="Others" id="box-5">
                                        <label for="box-5">Others</label>
                                    </div>


                                </div>


                                <div class="row py-2">
                                    <h5 class="pt-1 pb-3 text-white">Budget </h5>
                                    <div class="col-12 text-left">
                                         <div id="range-slider"></div>
                                         <div class="values-holder">
                                             <span class="leftexample-val" id="lower-value"></span>
                                             <span class="rightexample-val" id="upper-value"></span>
                                             <input type="hidden" name="budget" id="budget">
                                            </div>
                                    </div>
                                </div>
                               

                                <div
                                    class="col-12 input-group p-0 d-flex justify-content-center justify-content-md-start">
                                    <a id="prev-2" class="previous btn primary-button mr-4"><i
                                            class="btn-icon icon-arrow-left-circle"></i>PREV</a>
                                    <a id="next-2" class="next btn primary-button">NEXT<i
                                            class="btn-icon icon-arrow-right-circle left"></i></a>
                                </div>
                            </fieldset>

                            <!-- Group 3 -->
                            <fieldset id="group-3">
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <textarea name="message" minlength="3" class="form-control input-style"
                                            placeholder="Message" required autofocus></textarea>
                                    </div>
                                </div>
                                <div
                                    class="col-12 input-group p-0 d-flex justify-content-center justify-content-md-start">
                                    <a id="prev-3" class="previous btn primary-button mr-4"><i
                                            class="btn-icon icon-arrow-left-circle"></i>PREV</a>
                                    <a id="next-3" class="send btn primary-button">SEND<i
                                            class="btn-icon icon-login left"></i></a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
            </div>


            <div class="gallery col-12 col-md-6 pl-md-5 d-none d-md-block">

                <!-- Step 1 -->
                <a id="step-1" data-poster="/assets/images/lets-talk2.png"
                   >
                 
                    <img src="/assets/images/lets-talk2.png" class="image-responsive">
                </a>

                <!-- Step 2 -->
                <a id="step-2" href="/assets/images/lets-talk2.png" style="display:none">
                    <img src="/assets/images/lets-talk2.png" class="image-fit">
                </a>

                <!-- Step 3 -->
                <a id="step-3" href="/assets/images/lets-talk2.png" style="display:none">
                    <img src="/assets/images/lets-talk2.png" class="image-fit">
                </a>

                <!-- Step 4 -->
                <a id="step-4" href="/assets/images/lets-talk2.png" style="display:none">
                    <img src="/assets/images/lets-talk2.png" class="image-fit">
                </a>

            </div>
        </div>
    </div>
</section>