<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/head.php") ?>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW29QTLD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?php include_once("includes/header.php") ?>
    <section id="service-hero-section" class="hire-shopify-developer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shopify-slider">
                        <div><img src="../assets/images/shopify-Tabsoft-images.jpg" alt="Shop Image 1"></div>
                        <div><img src="../assets/images/shopify-Tabsoft-image-2.jpg" alt="Shop Image 1"></div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h2>
                        Automate Your <span> Shopify Dropshipping Store</span> & Scale Profitably with Ease
                    </h2>
                    <h5>
                        Streamline your operations, save time, and watch your Shopify store thrive—all without
                        lifting a finger.
                    </h5>
                    <ul class="shopify-ul">
                        <li> <i class="bi bi-check"></i>
                            Custom Logo Design Crafted by Our Expert Team ($49)</li>
                        <li> <i class="bi bi-check"></i>
                            High-Converting Theme with a Proven 4% Boost in Sales ($249)</li>
                        <li> <i class="bi bi-check"></i>
                            One-on-One Personalized Coaching for Success ($199)</li>
                        <li> <i class="bi bi-check"></i>
                            Persuasive, Premium Product Descriptions ($99)</li>
                        <li> <i class="bi bi-check"></i>
                            Curated, High-Margin Winning Products ($99) </li>
                        <li> <i class="bi bi-check"></i>
                            Exclusive Access to Industry-Leading Suppliers ($99) </li>
                    </ul>
                    <div class="service-button">
                        <a href="#"> <button class="button2 quote-button">Get Free Proposal</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="simplify-shopify-sec">
        <div class="container">
            <div class="simplify-shopify-heading text-center">
                <h2>
                    Simplify, Scale, and Succeed with <br>
                    <span> Automated Shopify Solutions</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-container">
                        <div class="hire-shopify-developer">
                            <h3>Let’s get started. Which of these best describes you?</h3>
                            <p>
                            We'll assist you in getting set up based on your business needs. Please choose the options that apply to you.
                            </p>
                        </div>
                        <form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
                            <fieldset>
                                <input
                                    placeholder="Full Name"
                                    type="text"
                                    name="name"
                                    required />
                            </fieldset>

                            <fieldset>
                                <input
                                    placeholder="Phone Number"
                                    type="tel"
                                    name="phone"
                                    required />
                            </fieldset>

                            <fieldset>
                                <input
                                    placeholder="Email*"
                                    type="email"
                                    name="email"
                                    required />
                            </fieldset>

                            <fieldset>
                                <textarea
                                    placeholder="Message"
                                    name="message"
                                    rows="4"
                                    required></textarea>
                            </fieldset>

                            <fieldset>
                                <div class="contact-form-button">
                                    <button name="submit" type="submit" class="button2" id="contact-submit">
                                        Submit
                                    </button>
                                </div>
                            </fieldset>

                            <input type="hidden" name="route" value="hire-shopify-developer/" />
                            <input type="hidden" name="brand" value="Tabsoft Marketing" />
                            <input type="hidden" name="token" value="<?= $token; ?>" />
                            <input type="hidden" name="tag" value="sidepanel form in landing-page" />
                            <input type="hidden" name="price" value="null" />
                            <input type="hidden" name="news" value="1" />
                            <input type="text" class="jun" name="gender" style="display: none;" />
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="secure-shopify-card">
                        <div class="secure-shopify-button-wrapper">
                            <a href="#"> <button class=" shopify-call-button">
                                    <i class="bi bi-telephone-fill"></i> Secure Your Shopify Store Today</button></a>
                        </div>
                        <div class="shopify-spots-available">
                            <div class="spots-available-text">
                                <p>
                                    Only 14/50 available spots remaining for this week!
                                </p>
                            </div>
                        </div>
                        <div class="shopify-cards-image-wrapper">
                            <img src="../assets/images/shopify-card-image.webp" alt="">
                        </div>
                        <div class="get-over-discount-div">
                            <h5>Get Over <span>$700</span> in FREE Bonuses – For a Limited Time!</h5>
                            <div class="countdown" id="countdown">
                                <div class="countdown-box">
                                    <div class="number" id="days">00</div>
                                    <div class="label">Days</div>
                                </div>
                                <div class="countdown-box">
                                    <div class="number" id="hours">00</div>
                                    <div class="label">Hours</div>
                                </div>
                                <div class="countdown-box">
                                    <div class="number" id="minutes">00</div>
                                    <div class="label">Minutes</div>
                                </div>
                                <div class="countdown-box">
                                    <div class="number" id="seconds">00</div>
                                    <div class="label">Seconds</div>
                                </div>
                            </div>
                        </div>
                        <div class="shopify-card-bottom-card-sec">
                            <div class="sh-card-1">
                            <div class="shopify-bottom-card">
                                <div class="shopify-card-image-wrapper">
                                    <img src="../assets/images/shopify-bottom-card-image1.png" alt="">
                                </div>
                                <div class="shopify-card-content">
                                    <p>
                                        <span>Dropshipping Profit <br> Calculator template</span>
                                    </p>
                                </div>
                            </div>
                            <div class="shopify-bottom-card">
                                <div class="shopify-card-image-wrapper">
                                    <img src="../assets/images/shopify-bottom-card-image2.png" alt="">
                                </div>
                                <div class="shopify-card-content">
                                    <p>
                                        <span>10 Social media <br> posts templates</span>
                                    </p>
                                </div>
                            </div>
                            </div>
                            <div class="sh-card-2">
                            <div class="shopify-bottom-card">
                                <div class="shopify-card-image-wrapper">
                                    <img src="../assets/images/shopify-bottom-card-image3.png" alt="">
                                </div>
                                <div class="shopify-card-content">
                                    <p>
                                        <span>Ecommerce case <br> study</span>
                                    </p>
                                </div>
                            </div>
                            <div class="shopify-bottom-card">
                                <div class="shopify-card-image-wrapper">
                                    <img src="../assets/images/shopify-bottom-card-image4.png" alt="">
                                </div>
                                <div class="shopify-card-content">
                                    <p>
                                        <span>Mystery Gift</span>
                                    </p>
                                </div>
                            </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="package-selected">
        <div class="container">
            <div class="package-selected-heading text-center">
                <h2>Package Selected? <span>Let’s Wrap This Up with a <br> Quick Checkout!</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="container shopify-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="startup-tab" data-bs-toggle="tab" data-bs-target="#startup" type="button" role="tab" aria-controls="startup" aria-selected="true">Startup Plan $699</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="scaling-tab" data-bs-toggle="tab" data-bs-target="#scaling" type="button" role="tab" aria-controls="scaling" aria-selected="false">Scaling Plan $999</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="venture-tab" data-bs-toggle="tab" data-bs-target="#venture" type="button" role="tab" aria-controls="venture" aria-selected="false"> Venture Plan $1,699</button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Startup Tab -->
                            <div class="tab-pane fade show active p-4" id="startup" role="tabpanel" aria-labelledby="startup-tab">
                                <div class="shopify-tab-inner">
                                    <div class="shopify-tab-image-text-wrapper">
                                        <div class="shopify-tab-image-text">
                                            <h4>Quality services at <br>
                                                affordable rates</h4>
                                            <p>
                                                Check out our services for your next product & <br>choose what suits you best.
                                            </p>
                                            <div class="shopify-tab-image-wrapper">
                                                <img src="../assets/images/shopify-tab-image-1.webp" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shopify-tab-card">
                                        <div class="shopify-tab-heading">
                                            <h3>Startup Plan</h3>
                                        </div>
                                        <ul class="shopify-li">
                                            <li><i class="bi bi-check"></i> Brand Logo Design</li>
                                            <li> <i class="bi bi-check"></i> Shopify Theme Website Development</li>
                                            <li> <i class="bi bi-check"></i> Products Integration</li>
                                            <li> <i class="bi bi-check"></i> Domain Setup</li>
                                            <li> <i class="bi bi-check"></i> Website Deployment</li>
                                        </ul>
                                        <div class="service-button">
                                            <a href="#"> <button class="shopify-tabs">Get Started</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Scaling Tab -->
                            <div class="tab-pane fade p-4" id="scaling" role="tabpanel" aria-labelledby="scaling-tab">
                                <div class="shopify-tab-inner">
                                    <div class="shopify-tab-image-text-wrapper">
                                        <div class="shopify-tab-image-text">
                                            <h4>Quality services at <br>
                                                affordable rates</h4>
                                            <p>
                                                Check out our services for your next product & <br>choose what suits you best.
                                            </p>
                                            <div class="shopify-tab-image-wrapper shopify-tab-2">
                                                <img src="../assets/images/shopify-tab-image-2.webp" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shopify-tab-card">
                                        <div class="shopify-tab-heading">
                                            <h3>Scaling Plan</h3>
                                        </div>
                                        <ul class="shopify-li">
                                            <li><i class="bi bi-check"></i> Product Hunting</li>
                                            <li> <i class="bi bi-check"></i> Product Research Report & Analytics</li>
                                            <li> <i class="bi bi-check"></i> Brand Logo Design</li>
                                            <li> <i class="bi bi-check"></i> Shopify Theme Website Development</li>
                                            <li> <i class="bi bi-check"></i> Products Integration</li>
                                            <li> <i class="bi bi-check"></i> Domain Setup</li>
                                            <li> <i class="bi bi-check"></i> Website Deployment</li>
                                        </ul>
                                        <div class="service-button">
                                            <a href="#"> <button class="shopify-tabs">Get Started</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Venture Plan Tab -->
                            <div class="tab-pane fade p-4" id="venture" role="tabpanel" aria-labelledby="venture-tab">
                                <div class="shopify-tab-inner">
                                    <div class="shopify-tab-image-text-wrapper">
                                        <div class="shopify-tab-image-text">
                                            <h4>Quality services at <br>
                                                affordable rates</h4>
                                            <p>
                                                Check out our services for your next product & <br>choose what suits you best.
                                            </p>
                                            <div class="shopify-tab-image-wrapper shopify-tab-2">
                                                <img src="../assets/images/shopify-tab-image-3.webp" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shopify-tab-card">
                                        <div class="shopify-tab-heading">
                                            <h3>Scaling Plan</h3>
                                        </div>
                                        <ul class="shopify-li">
                                            <li><i class="bi bi-check"></i> Product Hunting</li>
                                            <li> <i class="bi bi-check"></i> Product Research Report & Analytics</li>
                                            <li> <i class="bi bi-check"></i> Brand Logo Design</li>
                                            <li> <i class="bi bi-check"></i> Shopify Theme Website Development</li>
                                            <li> <i class="bi bi-check"></i> Products Integration</li>
                                            <li> <i class="bi bi-check"></i> Domain Setup</li>
                                            <li> <i class="bi bi-check"></i> Website Deployment</li>
                                            <li> <i class="bi bi-check"></i> Social Media Kit</li>
                                            <li> <i class="bi bi-check"></i> Organic Marketing X 3-Months</li>
                                            <li> <i class="bi bi-check"></i> Ad Campaign Creation</li>
                                            <li> <i class="bi bi-check"></i> SEO Optimization</li>
                                        </ul>
                                        <div class="service-button">
                                            <a href="#"> <button class="shopify-tabs">Get Started</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="about-services-shopify">
        <div class="container">
            <div class="about-services-heading text-center">
                <h2>
                    What People Say <span>About Our Services</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shopify-slider-google">
                        <div>
                            <div class="shopify-google-slider">
                                <div class="shopify-user-image-text">
                                    <div class="shopify-image-wrapper">
                                        <img src="../assets/images/shopify-service-slider-user-image-1.png" alt="">
                                    </div>
                                    <div class="shopify-user-div">
                                        <h5>Saravanan Krishnan</h5>
                                        <p><span>a year ago</span></p>
                                    </div>
                                </div>
                                <div class="shopify-user-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="shopify-slider-text">
                                    <p>
                                        Their service and timeline is great. Mr Matthew Soloman Sr E commerce Consultant guided me very well. His knowledge and guidance helped to take correct decision
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="shopify-google-slider">
                                <div class="shopify-user-image-text">
                                    <div class="shopify-image-wrapper">
                                        <img src="../assets/images/shopify-service-slider-user-image-2.png" alt="">
                                    </div>
                                    <div class="shopify-user-div">
                                        <h5>Rita Lee</h5>
                                        <p><span>2 months ago</span></p>
                                    </div>
                                </div>
                                <div class="shopify-user-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="shopify-slider-text">
                                    <p>
                                        I recommend this company they have diligently worked with me to get my store launched ….so far it has been a great experience with my project manager Anna
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="shopify-google-slider">
                                <div class="shopify-user-image-text">
                                    <div class="shopify-image-wrapper">
                                        <img src="../assets/images/shopify-service-slider-user-image-3.png" alt="">
                                    </div>
                                    <div class="shopify-user-div">
                                        <h5>Anthony Jones</h5>
                                        <p><span>2 months ago</span></p>
                                    </div>
                                </div>
                                <div class="shopify-user-star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="shopify-slider-text">
                                    <p>
                                        The experience with the Tabsoft Marketing has been fantastic thus far Anna my web developer is very informative and keeps me up-to-date on every project that she’s implementing…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shopify-brands-slider">
                        <div><img src="../assets/images/slide-shopify-image-1.png" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-2.webp" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-3.webp" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-4.webp" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-5.webp" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-6.png" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-7.png" alt="Slide 1"></div>
                        <div><img src="../assets/images/slide-shopify-image-8.png" alt="Slide 1"></div>
                    </div>
                </div>
                <div class="col-lg-6">
            <div class="shopify-mobile-slider">
                <div class=""><img src="../assets/images/shopify-mobile-image-slider-1.webp" alt=""></div>
                <div class=""><img src="../assets/images/shopify-mobile-image-slider-2.webp" alt=""></div>
                <div class=""><img src="../assets/images/shopify-mobile-image-slider-3.webp" alt=""></div>
                <div class=""><img src="../assets/images/shopify-mobile-image-slider-1.webp" alt=""></div>
            </div>
                </div>
            </div>
        </div>
    </section>
    <section id="you-got-business-shopify">
        <div class="you-got-heading text-center">
            <h2>You've Got Business, <span>Speak with an Expert!</span></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                     <div class="you-got-paragraph">
                        <p>
                        When you work with AMZHIVE you don’t just get access to digital experts, you get access to our people and our values as a collaborative, supportive team of talented individuals who have been working together since 2012. We don’t just get on board with a project, we get invested in achieving our clients’ goals as if they were our own.
                        </p>
                        <p>
                        We know who we are and we know what we’re good at, that’s why we don’t pretend to be digital giants. We’re your local agency, dedicated to bringing your project to life.
                        </p>
                        <p>
                        Fancy a cup of coffee or a quick bite to eat? We want to chat with you about your business so we can understand what it is you’re looking to achieve. Once we’ve nailed this, we pass on the particulars to our team of experts who make the magic happen, keeping you in the loop all the way.
                        </p>
                        <p>
                        Our extensive experience in building interactive digital products has taught us that each project is different to the next, but whatever the unique requirements we tackle the challenge using our three-staged approach: Create, Develop, Grow.
                        </p>
                     </div>
                </div>
                <div class="col-lg-4">
                    <div class="expert-shopify-card-div">
                    <div class="expert-shopify-card">
                        <div class="expert-shopify-image-wrapper">
                        <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <div class="expert-card-content">
                            <h5>$1,557,809</h5>
                            <p>
                            Over Spent On Google
                            <br>
                            & Facebook ads
                            </p>
                        </div>
                    </div>
                    <div class="expert-shopify-card">
                        <div class="expert-shopify-image-wrapper">
                        <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="expert-card-content">
                            <h5>$5,573,590</h5>
                            <p>
                            Generated in Revenue 
                            <br>
                            for Our  Clients So Far
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="expert-shopify-card-div">
                    <div class="expert-shopify-card">
                        <div class="expert-shopify-image-wrapper">
                        <i class="bi bi-suitcase-lg"></i>
                        </div>
                        <div class="expert-card-content">
                            <h5>400+</h5>
                            <p>
                            Completed 
                            <br>
                            Projects
                            </p>
                        </div>
                    </div>
                    <div class="expert-shopify-card">
                        <div class="expert-shopify-image-wrapper">
                        <i class="bi bi-shop"></i>
                        </div>
                        <div class="expert-card-content">
                            <h5>350+</h5>
                            <p>
                            Successful Stores 
                            <br>
                            Created Deployed
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="expert-shopify-card-div">
                    <div class="expert-shopify-card">
                        <div class="expert-shopify-image-wrapper">
                        <i class="bi bi-trophy-fill"></i>
                        </div>
                        <div class="expert-card-content">
                            <h5>100%</h5>
                            <p>
                            Satisfaction Or
                            <br>
                            Refund
                            </p>
                        </div>
                    </div>
                    <div class="expert-shopify-card">
                        <div class="expert-shopify-image-wrapper">
                        <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="expert-card-content">
                            <h5>10+</h5>
                            <p>
                            Years of Client  
                            <br>
                            Relationship
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("call-to-action-global.php") ?>
    <?php include_once("includes/footer.php") ?>





</body>


</html>