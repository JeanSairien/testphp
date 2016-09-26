
<?php
$dsn = 'mysql:dbname=app-pinterest; host=127.0.0.1';
        $user ='root';
        $password = 'facesimplon';
        $dbh = new \PDO($dsn, $titre, $date, $audio, $video, $image, $format);
        $sql = "select * from blocs where titre  = ?  and date = ? and audio = ? and video = ? and image = ? and format = ? ";
        $result = $dbh->prepare($sql);
    	$result->execute(array());
        var_dump( $result->fetchAll()) ;


?>        
