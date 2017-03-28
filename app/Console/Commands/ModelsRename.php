<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ModelsRename extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ectouch:modelsrename {prefix?}';

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
        $res = glob(app_path('Models/*'));
        foreach ($res as $vo) {
            $content = file_get_contents($vo);
            $content = str_replace([
                'table = \'' . $this->argument('prefix'),
                '	public $timestamps',
            ], [
                'table = \'',
                '    public $timestamps',
            ], $content);
            file_put_contents($vo, $content);
        }
    }
}
