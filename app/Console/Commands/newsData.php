<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\News;
class newsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add news to the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    { 
       News::Create([
               'url' => 'www.trio.com',
               'urlToImage'=>'www.trio.com/image',
               'content' => 'charles barkley',
               'author' => 'john Doe',
               'source' => 'bbc',
               'title'=> 'Charles Barkley shocked fans',
               'publishedAt' => '2019-03-28T15:17:46Z'
        ]);
        echo 'Added successfully';
    }
}
