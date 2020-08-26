<?php
include("connection.php");

$query=$con->prepare("SELECT * FROM main_urls");
        $query->execute();
        $results=$query->get_result();
        if($results->num_rows>0)
        {
            while($row=$results->fetch_assoc())
            {
                // $id=$row['url_id'];
                // $urls=$row['url'];

                 // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $row['url']);

        curl_setopt($ch,CURLOPT_POST, false);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);   
        $DOM= new DOMDocument(true);
        libxml_use_internal_errors(true);
        @$DOM->loadHTML($output);
        $elements=$DOM->getElementsByTagName('a');

        for($i=0; $i<$elements->length; $i++)
        {
            if(preg_match('/extension/',$elements->item($i)->getAttribute('href'),$match))
            {
                $url="https://fileinfo.com".$elements->item($i)->getAttribute('href');

                $query1=$con->prepare("SELECT * FROM suburls WHERE url_address=?");
                $query1->bind_param("s",$url);
                $query1->execute();
                $reslt=$query1->get_result();
                
                if($reslt->num_rows===0)
                {
                $query=$con->prepare("INSERT INTO suburls(url_id,url_address) VALUES(?,?)");
                $query->bind_param("ss",$row['url_id'],$url);
                $query->execute();
                $query->close();
                echo "Data Inserted : ".$url."<br>";
                }
                else
                {
                    echo"Data Already Available For Sub Url <br>";
                }
                $query1->close();
            }

            
        }

        //new
        // $DOM= new DOMDocument(true);
        // libxml_use_internal_errors(true);
        // @$DOM->loadHTML($output);
        // $elements=$DOM->getElementsByTagName('td');

        // for($i=0; $i<$elements->length; $i++)
        // {
        //     if(preg_match('//',$elements->item($i)->nodeValue,$match))
        //     {
        //         $url=$elements->item($i)->nodeValue;
                

        //         // $query=$con->prepare("INSERT INTO sub_urls(url_type) VALUES(?)");
        //         // $query->bind_param("s",$url);
        //         // $query->execute();
        //         // $query->close();
        //         echo "Type : ".$url."<br>";
        //     }

            
        // }


        //end




                
            }
           
        }






?>