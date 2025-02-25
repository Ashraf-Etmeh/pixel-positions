<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
//AAA
//Arrange
$employer = Employer::factory()->create();
$job = Job::factory()->create([
    'employer_id' => $employer->id,
]);
//Act and Assert
expect($job->employer->is($employer))->toBeTrue();
});
