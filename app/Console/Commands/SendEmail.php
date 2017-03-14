<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\User;
/*use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;*/


class SendEmail extends Command //implements ShouldQueue
{
     //use InteractsWithQueue, Queueable, SerializesModels;
     
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
            $news = \App\News::all();
            foreach ($news as $n){
            Mail::raw('Новость: '.$n->title, function($message) {
                $message->from('noreply@voel.ru', 'Laravel test');
                $message->to('e.vershkov@voel.ru');
            });
            }

    }

}
