<?php
//    session_start();
    include('db.php');
     
    class Post
    {
        private $error="";
       public function create_post($data){
           if(!empty($data['post'])){
                $post= addslashes($data['post']);
                $id= $_SESSION['id'];
                
                $postid= $this->create_postid();
                include('db.php');
                $sql="insert into posts (postid,m_id,post) values ('$postid','$id','$post')";
                $res=mysqli_query($con,$sql);
           }
           else{
                $this->error .="Please type something! <br> ";
           }
           return $this->error;
       } 
       public function get_posts($id1){
        // $id1= $_SESSION('id');
        include('db.php');
        
        $sql="select * from posts where m_id='$id1' order by id desc ";
       
        
        $res=mysqli_query($con,$sql);
        
        
        
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                if($res){
                    return $res;
                }
                else{
                    return false;
                }
  
                }
            }
        
        
        
    }
       public function get_user($id1){
           include('db.php');
           $sql="select * from musician where m_id='$id1' limit 1";
           $res=mysqli_query($con,$sql);
           if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                if($res){
                    return $res;
                }
                else{
                    return false;
                }
  
                }
            }
           

       }
       private function create_postid(){
           $lenght= rand(4,19);
           $number = "";
           for($i=0; $i < $lenght; $i++){
               $new_rand= rand(0,9);
               $number = $number . $new_rand;
           }
           return $number;
       }
    }
?>