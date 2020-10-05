<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    protected $books = [
        [
            'isbn' => '978-1491918661',
            'title' => 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5',
            'author' => 'Robin Nixon',
            'categories' => [1, 2],
            'price' => '9.99'
        ],
        [
            'isbn' => '978-0596804848',
            'title' => 'Ubuntu: Up and Running: A Power User\'s Desktop Guide',
            'author' => 'Robin Nixon',
            'categories' => [3],
            'price' => '12.99'
        ],
        [
            'isbn' => '978-1118999875',
            'title' => 'Linux Bible',
            'author' => 'Christopher Negus',
            'categories' => [3],
            'price' => '19.99'
        ],
        [
            'isbn' => '978-0596517748',
            'title' => 'JavaScript: The Good Parts',
            'author' => 'Douglas Crockford',
            'categories' => [2],
            'price' => '8.99'
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->books as $book)
        {
            $item = Book::create([
                'isbn' => $book['isbn'],
                'title' => $book['title'],
                'author' => $book['author'],
                'price' => $book['price']
            ]);

            $categories = Category::find($book['categories']);
            $item->categories()->attach($categories);

        }
    }
}
