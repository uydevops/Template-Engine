<?php




Router::get('controller',function(){
  (new mycontroller())->method();
});

Router::get('/selam',function(){
    echo 65+5;
});
Router::post();
