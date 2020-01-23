<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load(/.element/css/2.0/common.css);//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
  
   echo "<li>$title
            <ul>
                <li>$link</li>
            </ul>
        </li>";
 }
?>
</ul>
