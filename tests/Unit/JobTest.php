<?php

use App\Models\Employer;
use App\Models\Job;

test('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job  = Job::factory()->create(['employer_id'=>$employer->id]);
    expect($job->employer->is($employer))->toBeTrue();
});
test('can have tags',function(){
    $job = Job::factory()->create();
    $job->tag('frontEnd');
    expect($job->tags)->toHaveCount(1);
});
