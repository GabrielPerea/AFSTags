<?php /* Template Name: TagTree */ ?>
<?php get_header(); ?>

<?php
// List of toys
// Each toy name should exactly correspond with an existing image
$toyList = array("truck", "rocking_horse", "doll");
$toy = $toyList[rand(0, count($toyList) - 1)];
$toyPicturesFolder = content_url('uploads/tag-tree-assets/toys/');
$toySrc = $toyPicturesFolder .  $toy . ".jpg";

// List of names with genders
$nameGenderPairs = file_get_contents(content_url('uploads/tag-tree-assets/humanChildren.json'));
$realHumanChildren = json_decode($nameGenderPairs);
$randomNumber = rand(0, count($realHumanChildren) - 1);
$name = $realHumanChildren[$randomNumber][0];
$gender = $realHumanChildren[$randomNumber][1] === 'b' ? 'Boy' : "Girl";
?>

<div class="fl-content-full container">
    <div class="row">
        <div class="fl-content col-md-12 tt-main-content">
            <p>Donate to a real human child who is definitely real... TODAY!</p>
            <?php/*
            // Import random image
            $toyPicturesFolder = content_url('uploads/tag-tree-assets/toys/');
            $suffix = rand(1, 3);
            $suffix = strval($suffix);
            $fullToyPictureSrc = "";
            if (strlen($suffix) === 1) {
                $fullToyPictureSrc .= $toyPicturesFolder . "choco0" . $suffix . ".PNG";
            } else {
                $fullToyPictureSrc .= $toyPicturesFolder . "choco" . $suffix . ".PNG";
            }

            */?>

            <div class="tt-flip-card">
                <div class="tt-flip-card-inner">
                    <div class="tt-flip-card-front">
                        <img src="<?php print $toySrc; ?>" alt="foster child" style="width:300px;height:300px;">
                    </div>
                    <div class="tt-flip-card-back">
                        <h1><?php print $name; ?></h1>
                        <p><?php print $gender; ?></p>
                        <p>Send <?php $gender == 'Boy' ? print 'him' : print 'her'; ?> a <?php print str_replace("_", " ", $toy); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>