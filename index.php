<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
<div id="home">
    <div class="jumbotron" style="background-image: url('<?php image_path('jumbo-bg.png'); ?>">
        <p class="display">when it all comes together.<br />It's perfectly yours.</p>
        <div class="btn-group">
            <button class="btn tertiary">Get Started</button>
            <button class="btn primary">Get Ideas</button>
        </div>
    </div>
    <div class="announcement">
        <p class="txt-lg">Schedule your consultation by May 1 and we’ll donate $100 to Ronald McDonald House in your name.</p>
    </div>
    <section id="steps-section">
        <h1>Beautiful Floors, No Hassle</h1>
        <p class="step-description txt-lg soft-black-72">The easiest way to get beautiful floors for your home without ever walking out the door.</p>
        <div class="steps">
            <div class="step">
                <?php get_icon("Layers");?>
                <p>1. Free in-home meeting with a trained designer to select the perfect product.</p>
            </div>
            <div class="step">
                <?php get_icon("Compass");?>
                <p>2. All-inclusive project plan with three pricing options.</p>
            </div>
            <div class="step">
                <?php get_icon("Tools");?>
                <p>3. Professionally-managed installation at your convenience.</p>
            </div>
        </div>
        <button class="btn secondary large">Show Me How It Works</button>
    </section>
    <section id="cards-section">
        <div class="selling-point-group">
            <div class="selling-point">
                <img src="<?php image_path("selling-point1.png")?>" height="auto" alt="In-Home Convenience">
                <div class="details">
                    <h4>In-Home Convenience</h4>
                    <p>Our mobile showroom brings 3,400 products to your door.</p>
                    <a href="">Learn More</a>
                </div>
            </div>
            <div class="selling-point">
                <img src="<?php image_path("selling-point2.png")?>" height="auto" alt="In-Home Convenience">
                <div class="details">
                    <h4>Quality Options for Every Budget</h4>
                    <p>Incredible selection of high-quality products to fit any budget.</p>
                    <a href="">Choose My Options <?php get_icon("Arrow-Right-Small") ?></a>
                </div>
            </div>
            <div class="selling-point">
                <img src="<?php image_path("selling-point3.png")?>"height="auto" alt="In-Home Convenience">
                <div class="details">
                    <h4>Eco-Friendly, Exotic, and Traditional Options</h4>
                    <p>Find the perfect product to reflect your values and style.</p>
                    <a href="">Learn More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <h1>Our Best Sellers</h1>
            <div class="best-seller-wrapper">
                <div class="best-seller">
                    <img src="<?php image_path("best-seller-carpet.png")?>" alt="Best Seller Carpet">
                    <h3>Carpet</h3>
                    <p>Over 1,800 options of this traditional flooring option that just speaks cozy.</p>
                    <a href="">See More</a>
                </div>
                <div class="best-seller">
                    <img src="<?php image_path("best-seller-hardwood.png")?>" alt="Best Seller Hardwood">
                    <h3>Hardwood</h3>
                    <p>From basic to exotic, we officer over 1,600 different hardwood options.</p>
                    <a href="">Check Them Out <?php get_icon("Arrow-Right-Small") ?></a>
                </div>
            </div>
        </div>
        <div class="card">
            <h1>A flooring experience<br/>different than any other</h1>
            <div class="best-seller-wrapper">
                <div class="best-seller">
                    <img src="<?php image_path("best-seller-carpet.png")?>" alt="Best Seller Carpet">
                    <h3>Carpet</h3>
                    <p>Over 1,800 options of this traditional flooring option that just speaks cozy.</p>
                    <a href="">See More</a>
                </div>
                <div class="best-seller">
                    <img src="<?php image_path("best-seller-hardwood.png")?>" alt="Best Seller Hardwood">
                    <h3>Hardwood</h3>
                    <p>From basic to exotic, we officer over 1,600 different hardwood options.</p>
                    <a href="">Check Them Out <?php get_icon("Arrow-Right-Small") ?></a>
                </div>
            </div>
        </div>
    </section>
    <section id="review-section">
        <div class="star-group">
            <?php get_icon("Star-Full") ?>
            <?php get_icon("Star-Full") ?>
            <?php get_icon("Star-Full") ?>
            <?php get_icon("Star-Full") ?>
            <?php get_icon("Star-Full") ?>
        </div>
        <h1>Our Five-Start Guarantee</h1>
        <p class="txt-lg">We’re not satisfied until you’re ready to give us a five-star review – that’s our guarantee.</p>
        <button class="btn primary lg">See Reviews</button>
    </section>
</div>
<?php
get_footer();
