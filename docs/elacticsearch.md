git clone https://github.com/medcl/elasticsearch-rtf.git

cd elasticsearch-rtf 

/bin/elasticsearch-plugin list

/bin/elasticsearch-plugin list > /tmp/plugin.log

 cat /tmp/plugin.log|xargs -I {} bin/elasticsearch-plugin remove {}

./bin/elasticsearch-plugin install https://github.com/medcl/elasticsearch-analysis-ik/releases/download/v6.3.0/elasticsearch-analysis-ik-6.3.0.zip

#can not run elasticsearch as root centos

adduser elasticsearch
chown -R elasticsearch:elasticsearch ./elasticsearch-rtf-master
sudo su elasticsearch
#can not run elasticsearch as root centos

bin/elasticsearch -d 

ps aux|grep java 
 
cat logs/elasticsearch.log 

 composer require laravel/scout ^5.0       

php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"

composer require tamayo/laravel-scout-elastic  

php artisan scout:import "\App\Post" 


https://www.easck.com/cos/2019/0429/288491.shtml

安装需要的组件
composer require tamayo/laravel-scout-elastic
composer require laravel/scout 
如果composer require laravel/scout 出现报错
Using version ^6.1 for laravel/scout
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

 Problem 1
  - tamayo/laravel-scout-elastic 4.0.0 requires laravel/scout ^5.0 -> satisfiable by laravel/scout[5.0.x-dev].
  - tamayo/laravel-scout-elastic 4.0.0 requires laravel/scout ^5.0 -> satisfiable by laravel/scout[5.0.x-dev].
  - tamayo/laravel-scout-elastic 4.0.0 requires laravel/scout ^5.0 -> satisfiable by laravel/scout[5.0.x-dev].
  - Conclusion: don't install laravel/scout 5.0.x-dev
  - Installation request for tamayo/laravel-scout-elastic ^4.0 -> satisfiable by tamayo/laravel-scout-elastic[4.0.0].


Installation failed, reverting ./composer.json to its original content.
那么使用命令
composer require laravel/scout ^5.0
修改一下配置文件（config/app.php），添加如下两个provider

'providers' => [ 
    //es search 加上以下内容 
    Laravel\Scout\ScoutServiceProvider::class, 
    ScoutEngines\Elasticsearch\ElasticsearchProvider::class, 
]
添加完成，执行命令，生成config文件
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
修改config/scout.php
  'driver' => env('SCOUT_DRIVER', 'elasticsearch'),

  'elasticsearch' => [
    'index' => env('ELASTICSEARCH_INDEX', '你的Index名字'),
    'hosts' => [
      env('ELASTICSEARCH_HOST', ''),
    ],
  ],

在.env 配置ES的 账号:密码@连接
ELASTICSEARCH_HOST=elastic:密码@你的域名.com:9200
创建一个生成mapping的命令行文件，到 app/Console/Commands
<?php
namespace App\Console\Commands;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class ESInit extends Command {

  protected $signature = 'es:init';

  protected $description = 'init laravel es for news';

  public function __construct() { parent::__construct(); }

  public function handle() { //创建template
    $client = new Client(['auth'=>['elastic', 'Wangcai5388']]);
    $url = config('scout.elasticsearch.hosts')[0] . '/_template/news';
    $params = [
      'json' => [
        'template' => config('scout.elasticsearch.index'),
        'settings' => [
          'number_of_shards' => 5
        ],
        'mappings' => [
          '_default_' => [
            'dynamic_templates' => [
              [
                'strings' => [
                  'match_mapping_type' => 'string',
                  'mapping' => [
                    'type' => 'text',
                    'analyzer' => 'ik_smart',
                    'ignore_above' => 256,
                    'fields' => [
                      'keyword' => [
                        'type' => 'keyword'
                      ]
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ]
    ];
    $client->put($url, $params);

    // 创建index
    $url = config('scout.elasticsearch.hosts')[0] . '/' . config('scout.elasticsearch.index');

    $params = [
      'json' => [
        'settings' => [
          'refresh_interval' => '5s',
          'number_of_shards' => 5,
          'number_of_replicas' => 0
        ],
        'mappings' => [
          '_default_' => [
            '_all' => [
              'enabled' => false
            ]
          ]
        ]
      ]
    ];
    $client->put($url, $params);

  }
}
       
Laravel使用scout集成elasticsearch做全文搜索的实现方法(2)
2019-04-29 20:00 来源: 易采站长站
在kernel中注册这个命令
<?php

namespace App\Console;

use App\Console\Commands\ESInit;
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
    ESInit::class
  ];

执行这个命令 生成 mapping
php artisan es:init
修改model支持 全文搜索
<?php
namespace App\ActivityNews\Model;

use App\Model\Category;
use App\Star\Model\Star;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class ActivityNews extends Model
{
  use Searchable;

  protected $table = 'activity_news';
  protected $fillable = [
    'type_id',
    'category_id',
    'title',
    'sub_title',
    'thumb',
    'intro',
    'star_id',
    'start_at',
    'end_at',
    'content',
    'video_url',
    'status',
    'is_open',
    'is_top',
    'rank',
  ];

  public function star()
  {
    return $this->hasOne(Star::class, 'id', 'star_id');
  }

  public function category()
  {
    return $this->hasOne(Category::class, 'id', 'category_id');
  }

  public static function getActivityIdByName($name)
  {
    return self::select('id')
      ->where([
        ['status', '=', 1],
        ['type_id', '=', 2],
        ['title', 'like', '%' . $name . '%']
      ])->get()->pluck('id');
  }

}

导入全文索引信息
php artisan scout:import "App\ActivityNews\Model\ActivityNews"
测试简单的全文索引
php artisan tinker

>>> App\ActivityNews\Model\ActivityNews::search('略懂皮毛')->get();
以上就是本文的全部内容，希望对大家的学习有所帮助，也希望大家多多支持易采站长站。




















