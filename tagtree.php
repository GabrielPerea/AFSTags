<?php /* Template Name: TagTree */ ?>
<?php get_header(); ?>

<script>
    // Add assets url path to global scope for our JS to use for loading files
    window.tagTreeAssetsURL = "<?php print content_url('uploads/tag-tree-assets/'); ?>";
    window.siteURL = "<?php print get_site_url() ?>"
</script>

<style>
    /* We can't do this in the main css file since it uses PHP to get the file path */
    .tt-tag-main {
        background: url(<?php print content_url('uploads/tag-tree-assets/images/tagimage.png'); ?>);
        background-repeat: no-repeat;
        background-size: 600px 300px;
        background-position: center;
    }
</style>

<div class="container mt-2" style="position: relative;">
    <!-- Header row with hero image -->
    <div class="row">
        <div class="col-12 tt-hero-container text-white">
            <picture>
                <img class="img-fluid" style="object-fit:cover;" sizes="(max-width: 1920px) 100vw, 1920px" srcset="
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_100.jpg 100w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_586.jpg 586w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_879.jpg 879w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_1125.jpg 1125w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_1344.jpg 1344w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_1541.jpg 1541w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_1734.jpg 1734w,
                            <?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_1920.jpg 1920w" src="<?php print content_url('uploads/tag-tree-assets/images/tag-tree-hero-2021/'); ?>tagtree-hero-2021_i1lppw_c_scale,w_1920.jpg" alt="Excited gift recipient">
            </picture>
            <h1 class="tt-hero-text-container row text-white">
                <span class="col-12 display-4 w-full">Alternative Family Services</span>
                <span class="col-12 display-2 w-full">Virtual Gift Drive</span>
            </h1>
            <p class="tt-hero-tagline">
                <span>A virtual gift drive to ensure youth in care</span> </br>
                <span>receive a gift this holiday season.</span>
            </p>
        </div>
    </div>

    <!-- Main Body -->
    <div class="row mt-5">
        <div class="col-12">
            <div>
                <!-- Buttons -->
                <div class="row" id="button-row">
                    <div class="col-4 text-center" id="age-group-container-1">
                        <button id="age-group-button-1" class="mx-auto border-0 tt-button">
                            <img class="img-fluid tt-button-image" src="<?php print content_url('uploads/tag-tree-assets/images/gift-buttons-full/0-6-button.png'); ?>" alt="Present for 0-6">
                        </button>
                    </div>
                    <div class="col-4 text-center" id="age-group-container-2">
                        <button id="age-group-button-2" class="mx-auto border-0 tt-button">
                            <img class="img-fluid tt-button-image" src="<?php print content_url('uploads/tag-tree-assets/images/gift-buttons-full/7-12-button.png'); ?>" alt="Present for 7-12">
                        </button>
                    </div>
                    <div class="col-4 text-center" id="age-group-container-3">
                        <button id="age-group-button-3" class="mx-auto border-0 tt-button">
                            <img class="img-fluid tt-button-image" src="<?php print content_url('uploads/tag-tree-assets/images/gift-buttons-full/13-18-button.png'); ?>" alt="Present for 13-18">
                        </button>
                    </div>
                </div>
                <!-- /Buttons -->

                <!-- Choosing a Tag (Purple Box) -->
                <div class="row justify-content-center">
                    <div class="col-11 mt-5 tt-bg-purple">
                        <h2>Choosing a Tag</h2>
                        <ul>
                            <li>Click on the image of your chosen age group to buy a gift</li>
                            <li>Click "new tag" to brows gift options. Hitting the back-arrow will also start the tag search over.</li>
                            <li>Once you choose a foster youth's gift tag, select <span class="font-italic">Donate Money for Gift</span> or <span class="font-italic">Buy & Ship Gift</span>.</li>
                        </ul>
                    </div>
                </div>
                <!-- /Choosing a Tag -->
            </div>
        </div>
    </div>
    <div class="row mb-5 tt-bg-lightgray">
        <div class="col-12">
            <div>
                <!-- Donate or Buy & Ship -->
                <div class="row justify-content-around mt-5">
                    <div class="col-12 col-md-5 tt-bg-darkgray">
                        <h3>Donate Money for Gift</h3>
                        <ul>
                            <li>On the tag, click "Donate Money for Gift"</li>
                            <li>You'll be redirected to a secure donation page</li>
                            <li>Enter the youth's name in the "Foster Youth Name" section at checkout</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-5 tt-bg-darkgray">
                        <h3>Buy and Ship Gift</h3>
                        <ul>
                            <li>You'll be redirected to a page to enter your information</li>
                            <li>
                                Purchase a gift from any online retailer (include youth's name on gift receipt) and ship to:</br>
                                <span class="">
                                    AFS Development Department, 401 Roland Way</br>
                                    Oakland, CA 94621
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Donate or Buy & Ship -->

                <!-- Overview -->
                <div class="row justify-content-center mt-5">
                    <div class="col-11 ">
                        <h2>Overview</h2>
                        <ul>
                            <li>Individuals, businesses, and community organizations may participate in the virtual holiday gift drive.</li>
                            <li>There is no limit to how many tags can be adopted.</li>
                            <li>Please share this page’s link via your networks and on social media.</li>
                            <li>Questions can be emailed to Simone West, <a href="mailto:swest@afs4kids.org">swest@afs4kids.org</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Overview -->
            </div>
        </div>
    </div>

    <!-- Sponsors -->
    <?php /*
    <div id="sponsors-row" class="row mb-4">
        <div class="col-12">
            <div class="card">
                <h4 class="card-header text-center">Thank you to our corporate and organizational partners!</h4>
                <div class="card-body row justify-content-center">
                    <?php
                    // We're going to generate the sponsor box dynamically with php and then just insert them all 
                    // We'll use a JSON file to hold the info (see "/wp-content/uploads/tag-tree-assets/sponsor-info.json")
                    // with a specific folder holding the logos (see "/wp-content/uploads/tag-tree-assets/sponsor-logos")
                    // We're doing this with PHP so that the import happens once and then is cached, as this will be a lot more efficient,
                    // however, this means that whenever you update sponsor-info.json, you'll need to udpate the page on the back end so that 
                    // wordpress re-runs the php (and then Kinsta cache should clear automatically when this page is updated).

                    $rawSponsors = file_get_contents(content_url('uploads/tag-tree-assets/sponsor-info.json'));
                    $sponsors = json_decode($rawSponsors, true);

                    for ($i = 0; $i < count($sponsors); $i++) {

                        $sponsorImageLink = content_url('uploads/tag-tree-assets/sponsor-logos/' . $sponsors[$i]['logo']);
                        $sponsorName = $sponsors[$i]['name'];
                        $sponsorLink = $sponsors[$i]['link'];


                        print "<div class='col-12 col-md-4 tt-sponsor-col mb-3'>";
                        print   "<a href='$sponsorLink' rel='noopener noreferrer' target='__blank'>";
                        print       "<div class='tt-sponsor-box'>";
                        print           "<img src='$sponsorImageLink' alt='$sponsorName' class='tt-sponsor-image' style='object-fit:contain'>";
                        print       "</div>";
                        print   "</a>";
                        print "</div>";
                    };
                    ?>
                </div>
            </div>
        </div>

    </div>
    */ ?>

    <?php get_footer(); ?>

