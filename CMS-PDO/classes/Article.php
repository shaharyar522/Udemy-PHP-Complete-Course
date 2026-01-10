<?php


class Article
{

    private $conn;
    private $table = 'articles';

    public function __construct()
    {

        $database = new Database();
        $this->conn = $database->getConnection();
    }


    public function get_all()
    {
        $query = " SELECT * FROM " . $this->table . " ORDER by id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    public function getExcerpt($content, $length = 100)
    {
        if (strlen($content) > $length) {
            return substr($content, 0, $length) . "...";
        }
        return $content;
    }


  

    public function getArticleById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $article  = $stmt->fetch(PDO::FETCH_OBJ);

        if($article){
            if($article->user_id == $_SESSION['user_id']){
                return $article;
            } else {
                redirect("admin.php");
            }

         } else {
            return false;
        }

    }


    

    public function getArticleWithOwnerByID($id)
    {
        $query = "SELECT
                    articles.id,
                    articles.title,
                    articles.content,
                    articles.image,
                    articles.created_at,
                    users.username AS author,
                    users.email AS author_email
                  FROM " . $this->table . "
                  JOIN users ON articles.user_id = users.id
                  WHERE articles.id = :id LIMIT 1";

        // Articles table mein se  id, title, content, image, created_at  ye sab le aao ✅
        // and user k tabl esay username or email laken ab jb so show hnga tu users.username ka naam change kar do aur result mein usay author ke naam se bhejo
        // users.username AS author  mtalb ab hum $article->author same as
        // email k bhi  $article->author_email  from mtlc articela k ander user_id = user.id
        // baraber recored hn    WHERE articles.id = :id (just ek specif articel chaye) 
        //LIMIT 1   👉 Sirf 1 record laana hai


        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $article  = $stmt->fetch(PDO::FETCH_OBJ);

        if ($article) {
            return $article;
        } else {
            return false;
        }
    }


      public function getArticlesByUser($userId)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE user_id = :user_id ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }


    public function formatCreatedAt($date)
    {
        return date('F j, Y', strtotime($date));
    }
}
