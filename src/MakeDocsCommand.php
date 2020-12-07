<?php

namespace MakeDoc;

use Illuminate\Console\Command;

class MakeDocsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:docs {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '自动生成文档及单元测试';

    private $server;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(TestService $server)
    {
        parent::__construct();
        $this->server = $server;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 1.访问url
        $data = $this->server->getRequest($this->arguments("url"));



        // 2.根据url返回的信息拼接生成

    }

}
