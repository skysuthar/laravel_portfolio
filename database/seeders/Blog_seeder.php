<?php

namespace Database\Seeders;

use App\Models\blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Blog_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        blog::truncate();

        blog::create([
            'blog_name' => "My Story",
            'blog_image' => "Screenshot.png",
            'blog_about' => "It's about my story",
            'blog_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean augue nunc, pulvinar at feugiat in, sagittis consectetur ex. Phasellus auctor viverra sapien, nec aliquam leo pulvinar nec. In porttitor erat lobortis arcu varius, a tristique orci volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ullamcorper eros eros. Donec vitae massa nec tellus volutpat tempus. Vestibulum id egestas mauris. Nulla auctor rhoncus turpis. Ut vel elit eu magna lobortis cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in sem hendrerit ex venenatis sollicitudin non vitae lacus. In hac habitasse platea dictumst. Duis sed neque efficitur, consectetur justo id, tristique ipsum.

                Vivamus commodo, lacus sed eleifend dictum, augue lacus scelerisque elit, ac ornare mauris nisi a erat. Mauris lorem lorem, porta non libero eget, dapibus elementum urna. Proin pretium magna non ex lobortis, et dignissim justo ultrices. In fringilla hendrerit leo, vitae tincidunt est scelerisque in. Proin eu fermentum erat. Quisque posuere varius risus, ut semper tellus lacinia vitae. Nam non varius nunc, eget rhoncus elit. Maecenas eget tempor leo, sed vehicula nunc.

                Vivamus gravida efficitur nunc. Duis porta porta lectus et rutrum. Aenean dapibus vehicula ipsum, ut convallis lorem. Curabitur in lacus venenatis, facilisis purus sit amet, fringilla purus. Nunc pharetra quis nunc sit amet auctor. Etiam massa magna, blandit ac risus porttitor, finibus porttitor orci. Ut sit amet sem scelerisque enim malesuada condimentum a eget tellus. Proin quis tellus velit. Etiam mollis tincidunt nunc nec convallis. Curabitur egestas nulla et arcu efficitur efficitur vitae et dui. Nulla pulvinar lacus sed sem molestie hendrerit. Nulla tristique nisl a vehicula tincidunt. Sed eget tempor leo.

                Sed dignissim odio mauris, id volutpat nisi condimentum eget. In sollicitudin vel velit ut blandit. Curabitur sapien nulla, auctor non suscipit ultrices, euismod et ipsum. In hac habitasse platea dictumst. Morbi id est feugiat quam aliquet ultricies non ut orci. In at nulla arcu. Ut ac ligula a leo dictum tincidunt suscipit a dui. Proin ac pellentesque augue. Nam ut risus in ipsum condimentum porttitor ac vitae eros. Nam a nulla vitae lacus ultricies tincidunt nec ac urna. Maecenas commodo ex in diam consequat, eu tempor purus condimentum. Phasellus molestie felis in orci vehicula, ac ultricies purus varius. Aliquam eleifend, sapien eu congue tincidunt, urna velit posuere dui, vitae hendrerit neque metus ac sapien. Nam sed elit erat. Pellentesque rhoncus orci et vehicula facilisis.

                Maecenas tristique nibh ex, dictum laoreet magna egestas et. Fusce facilisis bibendum scelerisque. Nunc elementum nisl elit, at consequat sapien hendrerit in. In suscipit sapien urna, eu sollicitudin velit pulvinar vitae. Vivamus sed fermentum mi. Aliquam justo turpis, fringilla eu tincidunt at, eleifend vel orci. Quisque non convallis odio. Quisque vitae nunc lacinia, aliquet quam sed, imperdiet ipsum. Nunc placerat, risus nec tristique aliquet, leo nibh posuere neque, vitae imperdiet augue nulla in est. Nullam scelerisque nisl felis, fermentum varius nunc varius a. Praesent aliquet ante in nulla fringilla, quis dapibus lorem commodo. Duis purus nisi, aliquet nec orci quis, fermentum tempus enim. Maecenas ornare sem lorem, ac faucibus dolor pharetra eget.",
            "blog_status" => "Publish",

        ]);
    }
}
