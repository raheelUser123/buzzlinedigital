<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/head.php") ?>

<body>
    <?php include_once("includes/header.php") ?>
    

    <section id="get-proposal-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1>Boost Your Online Business with <span>
                            Buzzline Digital
                        </span></h1>
                    <h5>
                        Our proposal provides a customized marketing plan, leveraging successful strategies we've implemented for over 300+ clients.
                    </h5>
                    <p>
                        What You'll Receive:
                    </p>
                    <ul>
                        <li>
                            A tailored plan addressing your marketing challenges in areas such as PPC, landing pages, content, and SEO, specifically designed for your brand.
                        </li>
                        <li>
                            Detailed examples of clients with similar challenges, demonstrating effective growth strategies we've employed to achieve results.
                        </li>
                        <li>
                            Clear and customized pricing options to suit your needs.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="form-container">
                        <div class="propasl-form-heading">
                            <h3>Request a Free Proposal</h3>
                        </div>
                        <form action="/smtp-handler.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Enter Your Name *" name="name" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control number phone-country" minlength="10" maxlength="12" placeholder="Phone Number *" name="phone" required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Enter email here *" name="email" required="">
                                </div>
                                <div class="col-md-12">
                                    <input placeholder="Website URL (optional)" type="text" name="website" />
                                </div>
                            </div>

                            <span class="h5">Types of Services* :</span>
                            <div class="row m-t-10 services">
                                <!-- Column 1 -->
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="seo" value="SEO">
                                        <label class="form-check-label" for="seo">SEO</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="social-media-ads" value="Social Media Ads">
                                        <label class="form-check-label" for="social-media-ads">Social Media Ads</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="reputation-reviews" value="Reputation / Reviews">
                                        <label class="form-check-label" for="reputation-reviews">Reputation / Reviews</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="web-hosting" value="Web Hosting">
                                        <label class="form-check-label" for="web-hosting">Web Hosting</label>
                                    </div>
                                </div>
                                <!-- Column 2 -->
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="ppc" value="PPC">
                                        <label class="form-check-label" for="ppc">PPC</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="web-design" value="Web Design">
                                        <label class="form-check-label" for="web-design">Web Design</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="content-writing" value="Content Writing">
                                        <label class="form-check-label" for="content-writing">Content Writing</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="amazon-marketing" value="Amazon Marketing">
                                        <label class="form-check-label" for="amazon-marketing">Amazon Marketing</label>
                                    </div>
                                </div>
                                <!-- Column 3 -->
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="link-building" value="Link Building">
                                        <label class="form-check-label" for="link-building">Link Building</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="social-media-organic" value="Social Media Organic">
                                        <label class="form-check-label" for="social-media-organic">Social Media Organic</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="email-marketing" value="Email Marketing">
                                        <label class="form-check-label" for="email-marketing">Email Marketing</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="services[]" type="checkbox" class="form-check-input" id="sem" value="SEM">
                                        <label class="form-check-label" for="sem">SEM</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="brief" placeholder="Enter message here"></textarea>
                                </div>
                            </div>

                            <fieldset>
                                <div class="contact-form-button">
                                    <button name="submit" type="submit" class="button2" id="contact-submit">Submit</button>
                                </div>
                            </fieldset>
                            <input type="hidden" name="url" value="/get-a-quote/">
                            <input type="hidden" name="route" value="get-proposal/">
                            <input type="hidden" name="brand" value="Buzzline Digital">
                            <input type="hidden" name="token" value="<?= $token; ?>">
                            <input type="hidden" name="tag" value="sidepanel form in landing-page">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("trusted-by-global.php") ?>
    <section id="gain-clarity">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="clarity-image-wrapper">
                        <img src="../assets/images/clarity-image.png" alt="Get Proposal Page Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="clarity-content">
                        <h2><span>In only three easy steps,</span> obtain clarity and a roadmap to your success.</h2>
                        <h5><i class="bi bi-check"></i> Complete the Form</h5>
                        <p class="clarity-paragraph">
                            Help us understand your business and its marketing requirements.
                        </p>
                        <h5><i class="bi bi-check"></i> Arrange a Consultation</h5>
                        <p class="clarity-paragraph">
                            Choose a suitable date and time; after our discussion, we'll provide a proposal with a customized marketing plan.
                        </p>
                        <h5><i class="bi bi-check"></i> Discuss the Proposal with a Senior Consultant</h5>
                        <p class="clarity-paragraph">
                            Engage in a one-on-one meeting with a senior consultant to review the proposed strategies. Once satisfied, partner with us for marketing and ad management services and see favorable outcomes coming your way.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients-testimonial">
        <div class="container">
            <div class="testimonial-heading text-center">
                <h2>What Clients Say About Us </h2>
            </div>
            <div class="row">
                <div class="test-slider">
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">
                            "Buzzline Digital has consistently delivered outstanding ROI on our paid campaigns. Their profound expertise in B2B SaaS and Cybersecurity is evident in the compelling content and high-performing landing pages they've developed for us. They consistently excel across all our campaigns!"
                         </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-1.jpg" alt="Client Testimonial 1">
                                </div>
                                <div class="client-name">
                                    <p>
                                    John Grayson, 
                                        <br>
                                        VP of Marketing,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">
                            "After limited success with larger agencies, we have been thoroughly impressed by Buzzline Digital's achievements. Over the past seven years, they have consistently driven rapid and profitable growth. They are a trusted partner and an essential extension of our team."
                        </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-2.png" alt="Client Testimonial 2">
                                </div>
                                <div class="client-name">
                                    <p>
                                    Hazel Ashley, 
                                        <br>
                                        Project Manager
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">
                            "Working with Buzzline Digital yielded results that far exceeded our expectations. We experienced a 50% reduction in cost per lead, a 100% increase in the sales-qualified pipeline from paid search, and a fourfold improvement in landing page conversions. Buzzline Digital consistently surpassed every quarterly goal ahead of schedule and was a pleasure to collaborate with."        
                        </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-3.jpeg" alt="Client Testimonial 3">
                                </div>
                                <div class="client-name">
                                    <p>
                                    Ivy Harper, 
                                        <br>
                                        Online Marketing Manager
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial-div">
                            <p class="test-p">
                            "The Buzzline Digital team has been crucial in helping us reach our revenue targets through an exceptionally effective paid search program. They integrated our existing tools, such as HubSpot and Salesforce, to provide comprehensive visibility and employed a strategic test-and-adjust approach that consistently delivered results. I highly recommend Buzzline Digital to any company aiming to transform a struggling PPC program into a thriving profit center."
                        </p>
                            <div class="testimonial-client-section">
                                <div class="testi-image-wrapper">
                                    <img src="../assets/images/testi-image-4.jpeg" alt="Client Testimonial 4">
                                </div>
                                <div class="client-name">
                                    <p>
                                    Lily James, 
                                        <br>
                                        Business Development Executive
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="we-deliver">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="we-deliver-image-wrapper">
                        <img src="../assets/images/performance.png" alt="Performance Metrics">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2>We Drive Performance. <br>
                        <span>You Achieve Success Faster.</span>
                    </h2>
                    <p>
                    As a premier marketing and ad management services agency, we propel your business toward accelerated growth. With over 5 years of proven success, our clients trust us—and for good reason.        
                </p>
                    <p class="clarity-paragraph">
                        <i class="bi bi-check"></i>
                        We are honored to be among the top 3% of Google Premier Partner agencies in the USA, a prestigious recognition reserved for agencies demonstrating exceptional performance and expertise.
                    </p>
                    <p class="clarity-paragraph">

                        <i class="bi bi-check"></i>
                        We proudly collaborate with industry leaders such as Meta, Bing, LinkedIn, Amazon, HubSpot, and Unbounce as our trusted partners.
                    </p>
                    <p class="clarity-paragraph">
                        <i class="bi bi-check"></i>
                        Our team integrates seamlessly with your existing marketing tools, delivering CRM and automation, precise tracking, high-converting landing page designs, comprehensive email marketing, transparent reporting, and more. This approach ensures smooth integration and efficient execution across all aspects of your digital marketing strategy.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="get-proposal-faq">
        <div class="container">
            <div class="get-proposal-heading text-center">
                <h2>Frequently <span>Asked Questions</span> </h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What does the consultation call involve?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            During our discussion, we will delve into key aspects of your business, including competitors, marketing objectives, and current challenges. This provides valuable insights, enabling us to craft a personalized strategy aligned with your goals. Additionally, it allows us to optimize your paid advertising and SEO efforts to effectively support your objectives.
                            </p>
                            <p>
                            If you're currently running paid campaigns, you may grant us read-only access to your account. This enables one of our senior strategists to conduct a comprehensive review, identify untapped opportunities, and provide a tailored audit based on our findings—at no cost to you!
                        </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is the recommended minimum ad spend budget?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            We work with a diverse range of businesses across various budgets. Based on our extensive experience, we recommend a minimum ad spend of $5,000 per month. This budget is essential for optimizing ROI and facilitating data-driven decision-making. Our team of PPC experts will ensure that your budget is allocated wisely, maximizing every dollar spent while ensuring no growth opportunities are missed.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("includes/footer.php") ?>





</body>


</html>