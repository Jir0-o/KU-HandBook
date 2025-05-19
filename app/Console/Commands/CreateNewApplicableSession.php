<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ApplicableSession;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class CreateNewApplicableSession extends Command
{
    protected $signature = 'applicable_sessions:create';
    protected $description = 'Create a new applicable session if the year is complete';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Log::info('CreateNewApplicableSession command started.');

        // Get the current year
        $currentYear = Carbon::now()->year;

        // Check if there is already an entry for the current year
        $existingSession = ApplicableSession::where('version', $currentYear)->first();

        if (!$existingSession) {
            // Construct the name in the format "2021-22 and onwards"
            $nextYear = $currentYear + 1;
            $name = $currentYear . '-' . substr($nextYear, -2) . ' and onwards';

            // Create a new applicable session
            ApplicableSession::create([
                'name' => $name,
                'version' => $currentYear,
                'university_id' => 1,
                'is_active' => 0
            ]);

            $this->info('New applicable session created for year ' . $currentYear);
        } else {
            $this->info('Applicable session for year ' . $currentYear . ' already exists.');
        }
    }
}