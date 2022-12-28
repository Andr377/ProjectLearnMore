<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('course_materials')->insert([
            'CourseId' => 1,
            'FilePath' => '/Materials/1 - 1.pdf',
            'MaterialDescription' => "Trees. It was something about the trees. The way they swayed with the wind in unison. The way they shaded the area around them."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 1,
            'FilePath' => '/Materials/1 - 2.pdf',
            'MaterialDescription' => "The red glint of paint sparkled under the sun. He had dreamed of owning this car since he was ten, and that dream had become a reality less than a year ago."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 1,
            'FilePath' => '/Materials/1 - 3.pdf',
            'MaterialDescription' => "Brenda never wanted to be famous. While most of her friends dreamed about being famous, she could see the negative aspects that those who wanted to be famous seemed to ignore."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 2,
            'FilePath' => '/Materials/2 - 1.pdf',
            'MaterialDescription' => "The paper was blank. It shouldn't have been. There should have been writing on the paper, at least a paragraph if not more."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 2,
            'FilePath' => '/Materials/2 - 2.pdf',
            'MaterialDescription' => "Samantha wanted to be famous. The problem was that she had never considered all the downsides to actually being famous."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 2,
            'FilePath' => '/Materials/2 - 3.pdf',
            'MaterialDescription' => "The cab arrived late. The inside was in as bad of shape as the outside which was concerning, and it didn't appear that it had been cleaned in months."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 3,
            'FilePath' => '/Materials/3 - 1.pdf',
            'MaterialDescription' => "Many people say that life isn't like a bed of roses. I beg to differ. I think that life is quite like a bed of roses."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 3,
            'FilePath' => '/Materials/3 - 2.pdf',
            'MaterialDescription' => "He lifted the bottle to his lips and took a sip of the drink. He had tasted this before, but he couldn't quite remember the time and place it had happened."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 3,
            'FilePath' => '/Materials/3 - 3.pdf',
            'MaterialDescription' => "Nobody really understood Kevin. It wasn't that he was super strange or difficult. It was more that there wasn't enough there that anyone wanted to take the time to understand him."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 4,
            'FilePath' => '/Materials/4 - 1.pdf',
            'MaterialDescription' => "It was difficult to explain to them how the diagnosis of certain death had actually given him life. While everyone around him was in tears and upset, he actually felt more at ease."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 4,
            'FilePath' => '/Materials/4 - 2.pdf',
            'MaterialDescription' => "Sometimes it's just better not to be seen. That's how Harry had always lived his life. He prided himself as being the fly on the wall and the fae that blended into the crowd."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 4,
            'FilePath' => '/Materials/4 - 3.pdf',
            'MaterialDescription' => "Betty was a creature of habit and she thought she liked it that way. That was until Dave showed up in her life. She now had a choice to make and it would determine whether her lie remained the same or if it would change forever."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 5,
            'FilePath' => '/Materials/5 - 1.pdf',
            'MaterialDescription' => "The shoes had been there for as long as anyone could remember. In fact, it was difficult for anyone to come up with a date they had first appeared."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 5,
            'FilePath' => '/Materials/5 - 2.pdf',
            'MaterialDescription' => "The rain was coming. Everyone thought this would be a good thing. It hadn't rained in months and the earth was dry as a bone. It wasn't a surprise that everyone thought a good rain was what was needed."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 5,
            'FilePath' => '/Materials/5 - 3.pdf',
            'MaterialDescription' => "He read about a hike called the incline in the guidebook. It said it was a strenuous hike and to bring plenty of water. “A beautiful hike to the clouds” described one review."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 6,
            'FilePath' => '/Materials/6 - 1.pdf',
            'MaterialDescription' => "At that moment, she realized that she had created her current life. It wasn't the life she wanted, but she took responsibility for how it currently stood."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 6,
            'FilePath' => '/Materials/6 - 2.pdf',
            'MaterialDescription' => "Love isn't always a ray of sunshine. That's what the older girls kept telling her when she said she had found the perfect man. She had thought this was simply bitter talk on their part since they had been unable to find true love like hers."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 6,
            'FilePath' => '/Materials/6 - 3.pdf',
            'MaterialDescription' => "They told her that this was her once chance to show the world what she was made of. She believed them at the time. It was the big stage and she knew the world would be there to see."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 7,
            'FilePath' => '/Materials/7 - 1.pdf',
            'MaterialDescription' => "Welcome to my world. You will be greeted by the unexpected here and your mind will be challenged and expanded in ways that you never thought possible."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 7,
            'FilePath' => '/Materials/7 - 2.pdf',
            'MaterialDescription' => "She closed her eyes and then opened them again. What she was seeing just didn't make sense. She shook her head seeing if that would help. It didn't."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 7,
            'FilePath' => '/Materials/7 - 3.pdf',
            'MaterialDescription' => "Stormi is a dog. She is dark grey and has long legs. Her eyes are expressive and are able to let her humans know what she is thinking. Her tongue is long, pink, and wet."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 8,
            'FilePath' => '/Materials/8 - 1.pdf',
            'MaterialDescription' => "It really shouldn't have mattered to Betty. That's what she kept trying to convince herself even if she knew it mattered to Betty more than practically anything else."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 8,
            'FilePath' => '/Materials/8 - 2.pdf',
            'MaterialDescription' => "She had a terrible habit o comparing her life to others. She realized that their life experiences were completely different than her own and that she saw only what they wanted her to see, but that didn't matter."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 8,
            'FilePath' => '/Materials/8 - 3.pdf',
            'MaterialDescription' => "Waiting and watching. It was all she had done for the past weeks. When you’re locked in a room with nothing but food and drink, that’s about all you can do anyway."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 9,
            'FilePath' => '/Materials/9 - 1.pdf',
            'MaterialDescription' => "Although Scott said it didn't matter to him, he knew deep inside that it did. They had been friends as long as he could remember and not once had he had to protest that something Joe apologized for doing didn't really matter."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 9,
            'FilePath' => '/Materials/9 - 2.pdf',
            'MaterialDescription' => "He took a sip of the drink. He wasn't sure whether he liked it or not, but at this moment it didn't matter. She had made it especially for him so he would have forced it down even if he had absolutely hated it."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 9,
            'FilePath' => '/Materials/9 - 3.pdf',
            'MaterialDescription' => "She needed glasses. It wasn't that she couldn't see without them, but what she could see with them. When she wore glasses, her eyes focused so deeply that she could see not only the physical but also beyond."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 10,
            'FilePath' => '/Materials/10 - 1.pdf',
            'MaterialDescription' => "I recollect that my first exploit in squirrel-shooting was in a grove of tall walnut-trees that shades one side of the valley. I had wandered into it at noontime, when all nature is peculiarly quiet, and was startled by the roar."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 10,
            'FilePath' => '/Materials/10 - 2.pdf',
            'MaterialDescription' => "The answer was within her reach. It was hidden in a box and now that box sat directly in front of her. She'd spent years searching for it and could hardly believe she'd finally managed to find it."
        ]);

        DB::table('course_materials')->insert([
            'CourseId' => 10,
            'FilePath' => '/Materials/10 - 3.pdf',
            'MaterialDescription' => "Life isn't always beautiful. That was a lesson that Dan was learning. He also realized that life wasn't easy. This had come as a shock since he had lived a charmed life. "
        ]);

    }
}
