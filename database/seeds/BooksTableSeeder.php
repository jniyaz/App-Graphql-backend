<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::create([
            'title' => 'The Lean Startup',
            'author_name' => 'Eric Ries',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/the-lean-startup.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Lean-Startup-Entrepreneurs-Continuous-Innovation/dp/0307887898/ref=sr_1_2/133-5239949-7549327?ie=UTF8&qid=1545650084&sr=8-2&keywords=learn+startup',
        ]);
        $catgory = App\Category::find([3,4]);
        $book->categories()->attach($catgory);

        $book = Book::create([
            'title' => 'Rework',
            'author_name' => 'Jason Fried & David Heinemeier Hansson',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/rework.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Rework-Jason-Fried/dp/0307463745/ref=sr_1_2?ie=UTF8&qid=1545650510&sr=8-2&keywords=rework',
        ]);
        $catgory = App\Category::find([1,2]);
        $book->categories()->attach($catgory);

        $book = Book::create([
            'title' => 'Sapiens',
            'author_name' => 'Yuval Noah Harari',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/sapiens.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Sapiens-Humankind-Yuval-Noah-Harari/dp/0062316117/ref=sr_1_1?ie=UTF8&qid=1545650642&sr=8-1&keywords=sapiens',
        ]);
        $catgory = App\Category::find([4,5]);
        $book->categories()->attach($catgory);


        $book = Book::create([
            'title' => 'Steve Jobs',
            'author_name' => 'Walter Isaacson',
            'image' => 'https://res.cloudinary.com/dqzxpn5db/image/upload/v1547790672/booksql/steve-jobs.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illum, culpa minus? Id veritatis possimus natus facilis est nisi non vero, cum sint recusandae praesentium exercitationem dolorum itaque vitae eos consequuntur magni accusantium officia at.',
            'link' => 'https://www.amazon.com/Steve-Jobs-Walter-Isaacson-ebook/dp/B004W2UBYW/ref=sr_1_3?ie=UTF8&qid=1545650905&sr=8-3&keywords=steve+jobs',
        ]);
        $catgory = App\Category::find([1,6]);
        $book->categories()->attach($catgory);
    }
}
