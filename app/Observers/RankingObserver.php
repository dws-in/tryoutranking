<?php

namespace App\Observers;

use App\Models\Score;

class RankingObserver
{
    /**
     * Handle the Score "created" event.
     *
     * @param  \App\Models\Score  $score
     * @return void
     */
    public function created(Score $score)
    {
        //
        // $score->passing_grade = ($score->indonesia + $score->english + $score->mathematic + $score->physic + $score->biology
        //             + $score->chemistry + $score->geography + $score->economy + $score->history + $score->sociology)/10;
        // $score->save();
    }

    /**
     * Handle the Score "updated" event.
     *
     * @param  \App\Models\Score  $score
     * @return void
     */
    public function updated(Score $score)
    {
        //
        $score->passing_grade = ($score->indonesia + $score->english + $score->mathematic + $score->physic + $score->biology
                    + $score->chemistry + $score->geography + $score->economy + $score->history + $score->sociology)/10;
        $score->saveQuietly();
    }

    /**
     * Handle the Score "deleted" event.
     *
     * @param  \App\Models\Score  $score
     * @return void
     */
    public function deleted(Score $score)
    {
        //
    }

    /**
     * Handle the Score "restored" event.
     *
     * @param  \App\Models\Score  $score
     * @return void
     */
    public function restored(Score $score)
    {
        //
    }

    /**
     * Handle the Score "force deleted" event.
     *
     * @param  \App\Models\Score  $score
     * @return void
     */
    public function forceDeleted(Score $score)
    {
        //
    }
}
