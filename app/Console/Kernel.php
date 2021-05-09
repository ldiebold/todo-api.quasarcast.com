<?php

namespace App\Console;

use App\Models\Comment;
use App\Models\Project;
use App\Models\Todo;
use App\Models\TodoList;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Delete old data
        $schedule->call(function () {
            Comment::where('created_at', '>', Carbon::now()->subWeek())->delete();
            Project::where('created_at', '>', Carbon::now()->subWeek())->delete();
            Todo::where('created_at', '>', Carbon::now()->subWeek())->delete();
            TodoList::where('created_at', '>', Carbon::now()->subWeek())->delete();
            User::where('created_at', '>', Carbon::now()->subWeek())->delete();
        })->everyDay();
    }

    // created at 3pm
    // it is now 4:01pm
    // now sub 1 hour = 3:01
    // 3pm < 3:01

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
