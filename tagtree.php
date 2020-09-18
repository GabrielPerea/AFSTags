<?php /* Template Name: TagTree */ ?>
<?php get_header(); ?>

<?php
function generateCard()
{
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
    $gender = strcmp($realHumanChildren[$randomNumber][1], 'm') == 0 ? 'Boy' : "Girl";
    $pronoun = strcmp($gender, 'Boy') == 0 ? 'him' : 'her';
    $printableToy = str_replace("_", " ", $toy);

    return "
        <div class='col-sm-4'>
            <div class='tt-flip-card'>
                <div class='tt-flip-card-inner'>
                    <div class='tt-flip-card-front'>
                        <img src='$toySrc' alt='foster child' style='width:300px;height:300px;'>
                    </div>
                    <div class='tt-flip-card-back'>
                        <h1>$name</h1>
                        <p>$gender</p>
                        <p>Send $pronoun a $printableToy</p>
                    </div>
                </div>
            </div>
        </div>
    ";
}
?>
<div class="fl-content-full container">
    <div class="row">
        <div class="fl-content col-md-12 tt-main-content">
            <p>Donate to a real human child who is definitely real... TODAY!</p>
            <div class="row">
                <?php
                print generateCard();
                print generateCard();
                print generateCard();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>