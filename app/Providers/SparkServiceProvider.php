<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Athena',
        'product' => 'Athena',
        'street' => 'null',
        'location' => 'Norman, OK 73069',
        'phone' => '000-000-0000',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = 'brysonreece@ou.edu';

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'brysonreece@ou.edu',
        'ryandobyns@ou.edu'
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = false;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
        Spark::useStripe()->noCardUpFront()->trialDays(365);

        Spark::freePlan()
            ->features([
                'First', 'Second', 'Third'
            ]);
    }
}
