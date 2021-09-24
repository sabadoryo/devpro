<?php

$text = "After several days of rain that nearly floods Derry, Maine, five-year-old Georgie\n
Denbrough goes outside to play. He brings with him a paper boat his older brother, Bill,\n
made for him while sick in bed. Georgie helps with the boat by retrieving a box of\n
paraffin from the shelves by the cellar stairs, even though the power is out and Georgie\n
imagines a monster lives in the cellar. Bill melts the paraffin in a bowl, and the boys\n
laugh and joke together while they smear the paraffin over the folded newspaper boat to\n
waterproof it. Before Georgie goes out to play, he kisses Bill's cheek, and Bill tells\n
Georgie to be careful.\n
Even though the rains have slackened, the gutters run with water. In his yellow hat and\n
slicker, Georgie follows his boat as it sails along Witcham Street, wishing Bill could be\n
with him to see it go because Georgie is not as good as Bill at telling stories about what\n
he sees. A current takes the boat into a storm drain, and Georgie peeks inside to look\n
for it.\n
In the drain Georgie sees a pair of yellow eyes. Scared, he begins to back away, but a\n
voice speaks to him. Georgie looks back and sees a clown; the clown introduces himself\n
as 'Mr. Bob Gray, also known as Pennywise the Dancing Clown.' Georgie at first\n
thought the drain smelled like his scary cellar at home, but now he can smell a carnival.\n
Pennywise has Georgie's boat in one hand and a balloon in the other; he offers Georgie\n
both. When Georgie reaches forward, Pennywise grabs Georgie's arm and rips it off.\n
Georgie dies immediately. Dave Gardner, arriving 'only 45 seconds after the first\n
scream,' finds Georgie's body.\n
The sheriff tells reporters Georgie must have got his arm stuck in a fast current in the\n
storm drain. Mrs. Denbrough is sedated in the local emergency room; Bill remains sick\n
in bed, listening to his father weep in another room. The paper boat continues through\n
the sewers to the Penobscot River and out to sea as the rain clouds break overhead.";

$collection = countWordsInText($text);

// uncomment line below to test
//echo $collection["after"];


function countWordsInText($text): array
{
    $count = 0;
    $arr = normalizedTextToArray($text);

    $collection = [];
    foreach ($arr as $item) {
        $word = normalizeWord($item);

        if (isset($collection[$word])) {

            $collection[$word] += 1;
        } else {
            $collection[$word] = 1;
        }
    }

    return $collection;
}

function normalizedTextToArray($text)
{
    $text = str_replace("\n", ' ', $text);
    return explode(' ', $text);
}

function normalizeWord($word): string
{
    $word = str_replace(['.', ',', ' ', '\n',';', ''], ' ', $word);
    $word = preg_replace('/\s+/', '', $word);
    $word = strtolower($word);

    return $word;
}




