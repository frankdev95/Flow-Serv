<?php get_header() ?>

<?php 

    while(have_posts()) {
        the_post(); ?> 

        <section class="cta">
            <img class="banner__logo" src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-Assets-01.png" alt="flow serv logo">
            <div class="banner container">
                <div class="banner__content">
                    <h1 class="banner__title margin-vertical-md" >The <br> Electrician <br> Next Door</h1>
                    <div class="banner__content-container">
                        <p><?php the_content(); ?></p>
                        <button class="btn btn--solid">Let's Connect</button>
                    </div>
                </div>
                <div class="banner__hero">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="worker drilling into wood">
                </div>
            </div>
        </section>
        <section class="services">
            <div class="services__background"></div>
            <div class="container">
                <h1 class="services__title section__heading margin-vertical-xs">Bringing back your spark</h1>
                <h3 class="services__subtitle section__sub-heading">Our services, your choice</h3>
                <div class="services__cards">
                    <div class="card">
                        <img src="http://flow-serv.local/wp-content/uploads/2021/08/pexels-fauxels-3184611-scaled.jpg" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title margin-vertical-xs">Full RCD Test</h2>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi totam perferendis nisi debitis molestiae inventore nihil assumenda pariatur voluptates et.</p>
                            <button class="btn btn--outline" data-service="1">Read More</button>
                        </div>
                        <div class="card__corner-container">
                            <div class="card__corner"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="http://flow-serv.local/wp-content/uploads/2021/08/pexels-andres-ayrton-6579100-scaled.jpg" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title margin-vertical-xs">Safety Check</h2>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi totam perferendis nisi debitis molestiae inventore nihil assumenda pariatur voluptates et.</p>
                            <button class="btn btn--outline" data-service="2">Read More</button>
                        </div>
                        <div class="card__corner-container">
                            <div class="card__corner"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="http://flow-serv.local/wp-content/uploads/2021/08/ralph-ravi-kayden-iOLHAIaxpDA-unsplash-scaled.jpg" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title margin-vertical-xs">Fuse Box</h2>
                            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi totam perferendis nisi debitis molestiae inventore nihil assumenda pariatur voluptates et.</p>
                            <button class="btn btn--outline" data-service="3">Read More</button>
                        </div>
                        <div class="card__corner-container">
                            <div class="card__corner"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="http://flow-serv.local/wp-content/uploads/2021/08/pexels-pixabay-257736-scaled.jpg" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title margin-vertical-xs">vFREE Visual inspection(VIR)</h2>
                            <p class="card__description">Free visual inspection. Check fuse box(s)/consumer unit, removed to check cables, check for faults and burn marks. Ensuring main switch...</p>
                            <button class="btn btn--outline" data-service="4">Read More</button>
                        </div>
                        <div class="card__corner-container">
                            <div class="card__corner"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="http://flow-serv.local/wp-content/uploads/2021/08/pexels-mikhail-nilov-6894076-scaled.jpg" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title margin-vertical-xs">EICR</h2>
                            <p class="card__description">Includes electrical installation condition report - condition report with advisories. Testing electrics, checking lofts, our buildings, wiring and running all tests. Includes 5...</p>
                            <button class="btn btn--outline" data-service="5">Read More</button>
                        </div>
                        <div class="card__corner-container">
                            <div class="card__corner"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="http://flow-serv.local/wp-content/uploads/2021/08/pexels-gary-barnes-6248751-scaled.jpg" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title margin-vertical-xs">Installation & remedial work</h2>
                            <p class="card__description">Consumer units, adding sockets, light.</p>
                            <button class="btn btn--outline" data-service="6">Read More</button>
                        </div>
                        <div class="card__corner-container">
                            <div class="card__corner"></div>
                        </div>   
                    </div>
                </div>
        </section>
        <section class="contact">
            <h1 class="services__title section__heading margin-vertical-xs">Let's connect</h1>
            <h3 class="services__subtitle section__sub-heading">More than an electric connection</h3>
            <div class="contact__container">
                <div class="container">
                    <!-- <form class="contact__form">
                        <div class="form__field">
                            <input name="name" id="name"  type="text" placeholder="Name:">
                        </div>
                        <div class="form__field">
                            <input name="email" id="email" type="email" placeholder="Email:">
                        </div>
                        <div class="form__field">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message:"></textarea>
                        </div>
                        <button class="btn btn--solid" type="submit" name="submit">Send Message</button>
                    </form> -->
                </div>
            </div>
        </section>
        <div class="modal modal-services">
            <div class="modal__backdrop" data-show-animation=".1s" data-hide-animation=".1s" data-hide-delay=".1s"></div>
            <div class="modal__content" data-service="1" data-show-animation =".2s" data-hide-animation=".1s" data-show-delay=".1s">
                <div class="modal__close"> 
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/error.png" alt="close icon cross with border">     
                </div>
                <div class="modal__content-img">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="" class="modal__content-img">
                </div>
                <div class="modal__content-text">
                    <h2></h2>
                    <p></p>
                    <p></p>
                    <div class="modal__content-text-list">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <p></p>
                </div>
                <div class="modal__corner-container">
                    <div class="modal__corner"></div>
                </div>
            </div>
            <div class="modal__content" data-service="2" data-show-animation =".2s" data-hide-animation=".1s" data-show-delay=".1s">
                <div class="modal__close"> 
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/error.png" alt="close icon cross with border">     
                </div>
                <div class="modal__content-img">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="" class="modal__content-img">
                </div>

                <div class="modal__content-text">
                    <h2></h2>
                    <p></p>
                    <p></p>
                    <div class="modal__content-text-list">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <p></p>
                </div>
                <div class="modal__corner-container">
                    <div class="modal__corner"></div>
                </div>
            </div>
            <div class="modal__content" data-service="3" data-show-animation =".2s" data-hide-animation=".1s" data-show-delay=".1s">
                <div class="modal__close"> 
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/error.png" alt="close icon cross with border">     
                </div>
                <div class="modal__content-img">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="" class="modal__content-img">
                </div>
                <div class="modal__content-text">
                    <h2></h2>
                    <p></p>
                    <p></p>
                    <div class="modal__content-text-list">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <p></p>
                </div>
                <div class="modal__corner-container">
                    <div class="modal__corner"></div>
                </div>
            </div>
            <div class="modal__content" data-service="4" data-show-animation =".2s" data-hide-animation=".1s" data-show-delay=".1s">
                <div class="modal__close"> 
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/error.png" alt="close icon cross with border">     
                </div>
                <div class="modal__content-img">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="">
                </div>
                <div class="modal__content-text">
                    <h2>FREE Visual Inspection Report(VIR)</h2>
                    <p>Every homeowner checks their boiler yearly, but did you know only 10% of people also check their electrics? Staying safe and keeping your home in good nick is important to any responsible homeowner. To help keep costs down, Flow offers a FREE visual inspection with no strings (or should we say wires) attached. Having said that, we will never say no to a classic cuppa. We’ll bring the expertise and biscuits, you bring the sugar and tea.</p>
                    <div class="modal__content-text-list">
                        <span>We check:</span>
                        <ul>
                            <li>Fuse Boxes with consumer unit removed to check cables for faults and burn marks</li>
                            <li>MCB: Miniature Circuit Breakers</li>
                            <li>RCB: Residual current device and ensure these are working correctly</li>
                            <li>Sockets checked with Martindale tester</li>
                            <li>Light switches</li>
                            <li>Earth bonding checked for incoming supplies such as water, gas and oil</li>
                        </ul>
                    </div>
                    <p>One of our NICEIC electricians will pop out to see you and complete the VIR. They will be happy to discuss recommendations, answer questions and then head off, leaving you to decide what you want to do next. Would you like to book a FREE Visual inspection?</p>
                </div>
                <div class="modal__corner-container">
                    <div class="modal__corner"></div>
                </div>
            </div>
            <div class="modal__content" data-service="5" data-show-animation =".2s" data-hide-animation=".1s" data-show-delay=".1s">
                <div class="modal__close"> 
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/error.png" alt="close icon cross with border">     
                </div>
                <div class="modal__content-img">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="" class="modal__content-img">
                </div>
                <div class="modal__content-text">
                    <h2>Electrical Installation Condition Report (EICR)</h2>
                    <p>At Flow we only use friendly, NICEIC certified electricians so work is done to the highest standard. Our customers feeling safe and having piece of mind that our work is carried out to the highest standard is our mission at Flow.</p>
                    <div class="modal__content-text-list">
                        <span>The Condition report is detailed and carried out to the highest standards. We assess these key areas:</span>
                        <ul>
                            <li>Testing electrics</li>
                            <li>Loft inspection</li>
                            <li>Out buildings</li>
                            <li>Tests on all wiring</li>
                            <li>Earth loop impedance test</li>
                            <li>Full RCD test</li>
                            <li>Polarity test</li>
                            <li>Insulation test</li>
                            <li>Continuity test</li>
                            <li>Comprehensive report at the end</li>
                        </ul>
                    </div>
                    <p>This is the gold standard of MOT tests for your electrics.</p>
                </div>
                <div class="modal__corner-container">
                    <div class="modal__corner"></div>
                </div>
            </div>
            <div class="modal__content" data-service="6" data-show-animation =".2s" data-hide-animation=".1s" data-show-delay=".1s">
                <div class="modal__close"> 
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/error.png" alt="close icon cross with border">     
                </div>
                <div class="modal__content-img">
                    <img src="http://flow-serv.local/wp-content/uploads/2021/08/Flow-assets-08-trimmed.png" alt="">
                </div>
                <div class="modal__content-text">
                    <h2>Installation & Remedial Work</h2>
                    <p>With a large network of electricians we’re able to carry out all aspects of installation and electrical remedial work with our expert NICEIC certified electricians. </p>
                    <p>Trustworthy electricians are hard to come by, we’ve done the hard work and make sure all of our electricians are vetted to the highest standards. So whether you’re in need of electrical contractors across the UK or an electrical contractor in Kent, Flow has you covered.</p>
                    <div class="modal__content-text-list">
                        <span>Just some of the work carried out by flow</span>
                        <ul>
                            <li>Consumer Units</li>
                            <li>Adding / Replacing Sockets</li>
                            <li>Plugs</li>
                            <li>Extension Leads</li>
                            <li>Remedial work from identified non compliance</li>
                            <li>Distribution boards</li>
                            <li>Rewires</li>
                            <li>Lighting Installation</li>
                        </ul>
                    </div>
                    <p>Flow prides itself on the quality of work undertaken, we’ve been pushing electrical safety for over 15 years as experienced individuals in the industry.</p>
                </div>
                <div class="modal__corner-container">
                    <div class="modal__corner"></div>
                </div>
            </div>
        </div>

    <?php }

    get_footer();
?>