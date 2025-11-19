<?php

namespace App\Console\Commands;

use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class SetupBaheritDefaults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'baherit:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup Baherit default settings and clear caches';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Setting up Baherit defaults...');

        // Run the settings seeder
        $this->call('db:seed', ['--class' => 'SettingsSeeder']);

        // Clear all caches
        $this->info('Clearing caches...');
        Cache::flush();
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('view:clear');
        $this->call('route:clear');

        // Dump autoload to load helpers
        $this->info('Updating autoloader...');
        exec('composer dump-autoload');

        $this->info('✅ Baherit setup completed successfully!');
        $this->info('📋 Default settings configured:');
        $this->info('   • Site Name: Baherit');
        $this->info('   • Email: info@baherit.com');
        $this->info('   • Phone: +966 50 123 4567');
        $this->info('   • Address: Riyadh, Saudi Arabia');
        $this->info('   • Logo: public/images/settings/logo.png');
        $this->info('');
        $this->info('🔧 You can now customize these settings in the admin panel at /admin/settings');

        return 0;
    }
}
