<?php namespace App\Controller;
/**
 * Created by PhpStorm.
 * User: shellus-out
 * Date: 2016/9/9
 * Time: 18:18
 */

class NoteController
{
    /** @var \Request $request */
    protected $request;
    /** @var \Note $note */
    protected $note;

    public function __construct()
    {
        $this -> request = app('request');;
        $this -> note = app('note');
    }
    public function store(){
        $response = $this -> success($this -> note -> add($this -> request -> get('title')));
        return $response;
    }
    public function index(){
        $notes = $this -> note -> index(
            $this -> request -> get('start', 0), $this -> request -> get('offset', -1)
        );
        return $this -> success($notes);
    }
    protected function success($data, $message = "success"){
        return new \JsonResponse([
            'status' => 'ok',
            'message' => $message,
            'data' => $data,
        ]);
    }
    public function destroy($id){
        $response = $this -> success($this -> note -> delete($id));
        return $response;
    }
}

