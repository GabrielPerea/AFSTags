console.log("Running tag tree script.");
async function tagTreeMain() {
  console.log("Executing main script");
  // Setup hooks for our 3 age group buttons:
  const tag1 = document.getElementById("age-group-button-1");
  const tag2 = document.getElementById("age-group-button-2");
  const tag3 = document.getElementById("age-group-button-3");
  const tagElements = [
    [tag1, 1],
    [tag2, 2],
    [tag3, 3],
  ];

  // See tagtree.php for declaration of tagTreeAssetsURL
  console.log("Test version 024");

  const rawProfiles = await fetch(tagTreeAssetsURL + "profiles.json");
  const profilesList = await rawProfiles.json();

  const rawNameFile = await fetch(tagTreeAssetsURL + "humanChildren.json");
  const namesList = await rawNameFile.json();

  const GENDERS = {
    b: "boy",
    g: "girl",
    0: "boy",
    1: "girl",
    m: "boy",
    f: "girl",
  };

  // Return random number between 0 and n
  function rand(n) {
    n = Number(n);
    return parseInt(Math.floor(Math.random() * (n + 1)));
  }

  function randChar() {
    let ordinal = rand(25);
    let unicode = ordinal + 0x61;
    return String.fromCharCode(unicode);
  }

  const tags = { 1: {}, 2: {}, 3: {} };
  const AGEGROUPS = {
    1: "tod",
    2: "kid",
    3: "teen",
  };

  // For each of 3 age groups
  for (let i = 1; i < 4; i++) {
    // Get subset of all profiles based on age group
    let profileAgeSlice = profilesList[AGEGROUPS[i]];
    // Select random entry from age group
    let randomProfile = profileAgeSlice[rand(profileAgeSlice.length - 1)];

    tags[i].toy = randomProfile[2];
    tags[i].age = randomProfile[0];

    let gender = randomProfile[1];
    if (gender !== GENDERS.b && gender !== GENDERS.g) gender = GENDERS[rand(1)];
    tags[i].gender = gender;

    // Pick names at random until one of the proper gender is found
    while (true) {
      let tempName = namesList[rand(namesList.length - 1)];
      if (GENDERS[tempName[1]] === gender) {
        tags[i].name = tempName[0];
        break;
      }
    }

    // Pick initial for surname
    tags[i].initial = randChar().toUpperCase();
  }

  function generateTag(group) {
    let ageGroup = "";
    if (group === 1) ageGroup = "Age 0-6";
    else if (group === 2) ageGroup = "Age 7-12";
    else if (group === 3) ageGroup = "Age 13-18";
    else throw new Error("Invalid age group");

    let newTagElement = document.createElement("div");
    newTagElement.classList.add("tt-tag");

    let tagText = document.createElement("div");
    tagText.classList.add("tt-tag-text");
    tagText.innerHTML = `
        <p>${tags[group].name} ${tags[group].initial}.</p>
        <p>Age ${tags[group].age}</p>
        <p>Wants ${tags[group].toy}</p>
        <div> 
            <button class="btn btn-sm btn-danger">Buy Gift</button>
            <button class="btn btn-sm btn-danger">Donate Instead</button>
            <button class="btn btn-sm btn-danger">New tag</button>
        </div>
    `;

    newTagElement.append(tagText);

    return newTagElement;
  }

  for ([htmlTag, number] of tagElements) {
    htmlTag.appendChild(generateTag(number));
  }
}

// Run code when document is loaded
if (document.readyState === "complete") tagTreeMain();
else document.addEventListener("DOMContentLoaded", tagTreeMain);
