<?php
/**
 * Created by PhpStorm.
 * User: shellus-out
 * Date: 2016/9/9
 * Time: 16:53
 */

/**
 * Class Note
 * 记事本、博客等前端所需的redis储存封装
 * 提供uuid + title + payload， 其中payload可以存放json，或者直接存放文章内容。
 * 提供分页功能
 * 可以修改title todo
 * 可以修改顺序
 * 可以点赞排序？？？todo
 */
class Note {
    /** @var  $redis Redis */
    protected $redis;

    /**
     * redis的key定义
     */
    const note_ids_key = "ids";
    const note_titles_key = "titles";
    const note_payloads_key = "payloads";
    
     
    public function __construct($redis)
    {
        $this -> redis = $redis;
    }

    /**
     * @param string $title
     * @return int
     */
    public function add($title = ""){
        $id = $this -> get_new_id();
        $this -> redis -> hSet($this::note_titles_key, $id ,$title);
        return $id;
    }
    public function index($strat = 0, $offset = -1){
        $ids = $this -> redis -> zRange($this::note_ids_key, $strat, $offset);
        $notes = [];
        foreach ($ids as $id){
            $note = [];
            $note['id'] = $id;

            $note['title'] = $this -> redis -> hGet($this::note_titles_key, $id);

            // 可以不在列表加载payload来提升获取速度
            $note['payload'] = $this -> redis -> hGet($this::note_payloads_key, $id);
            $notes[] = $note;
        }

        return $notes;
    }
    public function delete($id){

    }
    public function change($id, $payload){
        $this -> redis -> hSet($this::note_payloads_key, $id ,$payload);
    }
    private function get_new_id(){
        $score = $this -> redis -> zCard($this::note_ids_key);
        do {
            $id = $this -> random_str(5);
            $result = $this -> redis -> zAdd($this::note_ids_key, $score, $id);
        }while(!$result);

        return $id;
    }
    private function random_str( $length) {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $password = $chars[mt_rand(0, 25)];

        for ( $i = 0; $i < $length - 1; $i++ )
        {
            $password .= $chars[mt_rand(0, 35)];
        }
        return $password;
    }
}
