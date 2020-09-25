<?php

require_once("../wp-load.php");
include("connection.php");
include("simple_html_dom.php");




$my_qry=$con->prepare("SELECT * FROM app_data WHERE availability_status=0 AND ID>=1 AND ID<=200");
// $my_qry=$con->prepare("SELECT * FROM app_data WHERE availability_status=0 AND playstore=0 AND ID BETWEEN 20341 AND 20345");
$my_qry->execute();
$result=$my_qry->get_result();

if($result->num_rows>0) // Start if for Record Check

{

        while($row=$result->fetch_assoc())
        {

            //============ Start Making Urls ===============================

            $app_url=$row['play_store_id'];

            $my_app_url='https://play.google.com/store/apps/details?id='.$app_url;

            echo $my_app_url;
            echo '<br>';

            //**************** */ End Making Urls ******************************
            

            $app_id=$row['ID'];

            $app_post_slug=$row['post_name'];

            $app_cat=$row['app_category'];

            $app_imgs=$row['app_img'];

            $app_dev=$row['dev_name'];

            $app_name=$row['app_name'];



            $app_store_status=$row['playstore'];

            $app_post_id=$row['post_id'];

            $app_post_date=$row['post_publish_date'];



            // Creating Dom for HTML





            $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL,$my_app_url);
                    curl_setopt($ch,CURLOPT_POST, false);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $output = curl_exec($ch);
                    curl_close($ch);


                    $html= new simple_html_dom();
                    $html->load($output);

                
            $typ_error='';
                        foreach($html->find('div[id=error-section]') as $error)
                        {
                            // $ftyp=$filetype;
                            echo $typ_error=$error->plaintext;
                            echo"<br>";
                         }

            if ($typ_error=="We're sorry, the requested URL was not found on this server.")
            {
                // echo "Exist";


                echo '<br>';
                echo $title_dom1=trim($app_name);
                echo '<br>';
                echo $category_name=trim($app_cat);
                echo '<br>';
                echo $dev_name=trim($app_dev);
                echo '<br>';
                echo $imageurl=trim($app_imgs);
                echo '<br>';

                if ($category_name == 'Action'||$category_name == 'Adventure'||$category_name == 'Arcade'||$category_name == 'Board'||$category_name == 'Card'||$category_name == 'Casino'||$category_name == 'Casual'||$category_name == 'Educational'||$category_name == 'Music'||$category_name == 'Puzzle'||$category_name == 'Racing'||$category_name == 'Role Playing'||$category_name == 'Simulation'||$category_name == 'Sports'||$category_name == 'Strategy'||$category_name == 'Trivia'||$category_name == 'Word')
                {
                    $category = 'Game';
                }
            
                else
                {
                    $category ='App';
                }

                $content_final= "<img class='alignright wp-image-69' src='$imageurl' alt='$title_dom1 for PC' width='165' height='165' /><em><strong>$title_dom1 For PC</strong>:</em> Download $title_dom1 for PC/Mac/Windows 7,8,10 and have the fun experience of using the smartphone Apps on Desktop or personal computers. New and rising $category_name $category, $title_dom1 developed by $dev_name for Android is available for free in the Play Store. Before we move toward the installation guide of $title_dom1 on PC using Emulators, here is the official Google play link for $title_dom1, You can read the Complete Features and Description of the App there.
    
                <h3>About $title_dom1</h3>
                <table>
                <tbody>
                <tr>
                <td>File size:</td>
                <td>Varies with the Device</td>
                </tr>
                <tr>
                <td>Category:</td>
                <td>$category_name</td>
                </tr>
                <tr>
                <td>App Title:</td>
                <td><strong>$title_dom1</strong></td>
                </tr>
                <tr>
                <td>Developed By:</td>
                <td>$dev_name</td>
                </tr>
                <tr>
                <td>Installations:</td>
                <td>1,00,000</td>
                </tr>
                <tr>
                <td>Current Version:</td>
                <td>Current_Version</td>
                </tr>
                <tr>
                <td>Req. Android:</td>
                <td>Android 4.4 and up</td>
                </tr>
                <tr>
                <td>Last Updated:</td>
                <td>last_updated</td>
                </tr>
                <tr>
                <td>Rating:</td>
                <td>4.1 / 5.0</td>
                </tr>
                </tbody>
                </table>
                
                
                [appbox googleplay $app_url]
                
                We helps you to install any App/Game available on Google Play Store/iTunes Store on your PC running Windows or Mac OS. You can download apps/games to the desktop or your PC with Windows 7,8,10 OS, Mac OS X, or you can use an Emulator for Android or iOS to play the game directly on your personal computer. Here we will show you how can you download and install your fav. $category $title_dom1 on PC using the emulator, all you need to do is just follow the steps given below.
                
                <h2><strong>How to Download $title_dom1 for PC Windows 8.1/10/8/7 64-Bit &amp; 32-Bit Free?</strong></h2>
                if you are a PC user using any of the OS available like Windows or Mac you can follow this step to step guide below to get $title_dom1 on your  PC. without further ado lets more towards the guide:
                <ul>
                     <li>For the starters Download and Install the Android Emulator of your Choice. Take a look at the list we provide here: <a href='https://appsnet.us/best-android-emulators-for-pc/' target='_blank'>Best Android Emulators For PC</a></li>
                     <li>Upon the Completion of download and install, open the Android Emulator.</li>
                     <li>In the next step click on the Search Button on home screen.</li>
                     <li>Now in the search box type <strong>$title_dom1</strong> and get the manager in Google Play Search.</li>
                     <li>Click on the app icon and install it.</li>
                     <li>Once installed, find <em>$title_dom1</em> in all apps in drawer, click to open it.</li>
                     <li>Use your mouse’s right button/click and WASD keys to use this application.</li>
                     <li>Follow on-screen instructions to learn about $title_dom1 and use the App properly</li>
                     <li>That’s all.</li>
                </ul>
                [appbox googleplay $app_url screenshots-only]
                <h2><strong>$title_dom1 PC FAQs</strong></h2>
                Here are some quick FAQs which you may like to go through:
                
                <strong>How do I install $title_dom1 on my PC?</strong>
                
                <strong>Ans.</strong> You can not directly install this app on your pc but with the help of the android emulator, you can do that.
                
                <strong>Is $title_dom1 available for pc?</strong>
                
                <strong>Ans.</strong> No officially not, but with this article steps, you can use it on pc.
                
                <strong>How do I install $title_dom1 on Windows 8,7 or 10?</strong>
                
                <strong>Ans.</strong> This is the same process as we install the app on our pc that is the same process for windows also.
                
                <strong>How do I install $title_dom1 on Mac OS X?</strong>
                
                <strong>Ans.</strong> This is the same process as we install the app on our pc that is the same process for windows also
                
                Also, make sure you share these with your friends on social media. Please check it out our more content like ";
                $args = array( 'posts_per_page' => 1, 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) : 
                 setup_postdata( $post );?>
                <?php $id = $post->id?>
                 <?php $content_final .="<a href='".post_permalink($id)."'> ".$post->post_title." </a></b><br>"; ?>
                 <?php endforeach;
                  
                wp_reset_postdata();
                
                $content_final.="
                <h3><strong>Conclusion</strong></h3>
                We have discussed here <strong>$title_dom1</strong> an App from <strong>Video Editors</strong> category which is not yet available on Mac or Windows store, or there is no other version of it available on PC; So we have used an Android emulator to help us in this regard and let us use the App on our PC using the Android Emulators.
                
                If you are facing any issue with this app or in the installation let me know in the comment box I will help you to fix your problem. Thanks!";

                $excp_qry=$con->prepare("UPDATE app_data SET availability_status=1, playstore=0 WHERE ID=$app_id");
                $excp_qry->execute();
                $excp_qry->close();
                $live_status=0;
                $last_updated="NULL";


                    //*************************************************** */ End Content Making IF Application is Dead on PlayStore pattern 0 **********************************************




                // $postType = 'post';
                // $categoryID = '2';
                // $postStatus = 'publish';
                

                
                // $my_new_post = array(
                //     'post_title' => $title_dom1,
                //     'post_name' => $app_post_slug,
                //     'post_content' => $content_final,
                //     'post_status' => $postStatus,
                //     'post_type' => $postType,
                //     'post_category' => array($categoryID)
                //     );



                // $my_post_id = wp_insert_post($my_new_post);

                
                // $finaltext = '';
    
                // if($my_post_id)
                // {
                    
                //     $finaltext .= '<br>Yay, I made my old post new .<br>';
                //     echo '<br>';

                //     echo 'Insert data from database';
                    
                // } 
                // else
                // {
                //     $finaltext .= 'Something went wrong and I didn\'t insert a new post.<br>';
                    
                // }
        
                // echo $finaltext;
                // echo 'with Post Id : '.$my_post_id;
                echo '<br>';
                echo 'Data inserted for pattern 0';
                
        
        









                
                echo '<br>';
                echo '<br>';


                    




            }


            else
            {
                    ////new start

                     //================================= Start Scraping Here ==============================================================

                $title_dom1 = $html->find('h1.AHFaub span', 0);
                $title_dom1=trim($title_dom1->plaintext);
                $title = $title_dom1.' For PC / Windows 7/8/10 / Mac';
                // $title = $title_dom1;
                echo '<h3>Application Title: '.$title.'</h3>';
                //var_dump("Name: ".$title);
            
                $dev_name = $html->find('a[class=hrTbp R8zArc]', 0);
                $dev_name=trim($dev_name->plaintext);

                echo '<h3>Developer Name: '.$dev_name.'</h3>';
                echo '<br>';

                $images_dom = $html->find('img[alt=Cover art]', 0);
                $image = false;
                if($images_dom)
                {
    		        $image1=trim($images_dom->src);
    		    }
                $image_par= explode('=', $image1);
                $image2= "http:".$image_par[0]."=w300";
                $image_par2= explode('/', $image2);
                $image = "http://".$image_par2[2]."/". $image_par2[3];

                echo '<h3>Image URL: '.$image.'</h3>';
                
                echo '<br>';

                $category_name = $html->find('a[itemprop=genre]', 0);
                $category_name=trim($category_name->plaintext);
                echo '<h3>Category: '.$category_name.'</h3>';
                
                echo '<br>';
                //var_dump("Category: ".$category_name);
            
            
                $rating = $html->find('div[class=BHMmbe]', 0);
                $rating=trim($rating->innertext);
                echo '<h3>Rating: '.$rating.'</h3>';
                
                echo '<br>';
                //var_dump("Rating: ".$rating);
            
                $total_ratings = $html->find('span[class=EymY4b] span', 1);
                $total_ratings=trim($total_ratings->plaintext);
                echo '<h3>Total Rating: '.$total_ratings.'</h3>';
                
                echo '<br>';
                //var_dump("Total Ratings: ".$total_ratings);
            
                $lasts_updated = $html->find('span[class=htlgb]', 0);
                $lasts_updated=trim($lasts_updated->plaintext);

                if($lasts_updated=="Learn More")
                {
                $last_updated = $html->find('span[class=htlgb]', 2);
                $last_updated=trim($last_updated->plaintext);
                // echo 'If Running '.$last_updated;
                }

                else
                {
                    // echo 'Else Runing '.$last_updated;
                    $last_updated=$lasts_updated;
                }
                echo '<h3>Last Updated On : '.$last_updated.'</h3>';
                
                echo '<br>';
                //var_dump("Last updated: ".$last_updated);
            
                $size = $html->find('span[class=htlgb]', 2);
                $size=trim($size->plaintext);
                echo '<h3>App Size: '.$size.'</h3>';
                
                echo '<br>';
                //var_dump("size: ".$size);
            
                $Installs = $html->find('span[class=htlgb]', 4);
                $Installs = trim($Installs->plaintext);
                echo '<h3> Installs : '.$Installs.'</h3>';
                
                echo '<br>';
                //var_dump("Installs: ".$Installs);
            
                $Current_Version = $html->find('span[class=htlgb]', 6);
                $Current_Version= trim($Current_Version->plaintext);
                echo '<h3> Version: '.$Current_Version.'</h3>';
                
                echo '<br>';
                //var_dump("Current Version: ".$Current_Version);
            
                $Req_Android = $html->find('span[class=htlgb]', 8);
                $Req_Android=trim($Req_Android->plaintext);
                echo '<h3>Req Android: '.$Req_Android.'</h3>';
                
                echo '<br>';
                //var_dump("Req Android: ".$Req_Android);
            
                $Content_Rating = $html->find('span[class=htlgb]', 10);
                $Content_Rating=trim($Content_Rating->plaintext);
                echo '<h3>Content Rating: '.$Content_Rating.'</h3>';

                if ($category_name == 'Action'||$category_name == 'Adventure'||$category_name == 'Arcade'||$category_name == 'Board'||$category_name == 'Card'||$category_name == 'Casino'||$category_name == 'Casual'||$category_name == 'Educational'||$category_name == 'Music'||$category_name == 'Puzzle'||$category_name == 'Racing'||$category_name == 'Role Playing'||$category_name == 'Simulation'||$category_name == 'Sports'||$category_name == 'Strategy'||$category_name == 'Trivia'||$category_name == 'Word')
                {
                    $category = 'Game';
                }
            
                else
                {
                    $category ='App';
                }


                $content_dom = $html->find('div[jsname=sngebd]', 0);
    	        $content = $content_dom->plaintext;
    
    	        //var_dump("Description: ".$content);
    
    
    	        $whats_new = $html->find('div[itemprop=description] span', 1);
    	        $whats_new=trim($whats_new->innertext);
                //var_dump("Whats new: ".$whats_new);
                echo '<h3> Description</h3> ';
                echo $content.'<br>'.$whats_new;

                //*************************************************** End Scraping Here ************************************** */




                ///====================================================== Start Post insertion for here ============================================================

                $content_final= "<img class='alignright wp-image-69' src='$image' alt='$title_dom1 for PC' width='165' height='165' /><em><strong>$title_dom1 For PC</strong>:</em> Download $title_dom1 for PC/Mac/Windows 7,8,10 and have the fun experience of using the smartphone Apps on Desktop or personal computers. New and rising $category_name $category, $title_dom1 developed by $dev_name for Android is available for free in the Play Store. Before we move toward the installation guide of $title_dom1 on PC using Emulators, here is the official Google play link for $title_dom1, You can read the Complete Features and Description of the App there.
                
                <h3>About $title_dom1</h3>
                <table>
                <tbody>
                <tr>
                <td>File size:</td>
                <td>$size</td>
                </tr>
                <tr>
                <td>Category:</td>
                <td>$category_name</td>
                </tr>
                <tr>
                <td>App Title:</td>
                <td><strong>$title_dom1</strong></td>
                </tr>
                <tr>
                <td>Developed By:</td>
                <td>$dev_name</td>
                </tr>
                <tr>
                <td>Installations:</td>
                <td>$Installs</td>
                </tr>
                <tr>
                <td>Current Version:</td>
                <td>$Current_Version</td>
                </tr>
                <tr>
                <td>Req. Android:</td>
                <td>$Req_Android</td>
                </tr>
                <tr>
                <td>Last Updated:</td>
                <td>$last_updated</td>
                </tr>
                <tr>
                <td>Rating:</td>
                <td>$rating / 5.0</td>
                </tr>
                </tbody>
                </table>
                
                
                [appbox googleplay $app_url]
                
                We helps you to install any App/Game available on Google Play Store/iTunes Store on your PC running Windows or Mac OS. You can download apps/games to the desktop or your PC with Windows 7,8,10 OS, Mac OS X, or you can use an Emulator for Android or iOS to play the game directly on your personal computer. Here we will show you how can you download and install your fav. $category $title_dom1 on PC using the emulator, all you need to do is just follow the steps given below.
                
                <h2><strong>How to Download $title_dom1 for PC Windows 8.1/10/8/7 64-Bit &amp; 32-Bit Free?</strong></h2>
                if you are a PC user using any of the OS available like Windows or Mac you can follow this step to step guide below to get $title_dom1 on your  PC. without further ado lets more towards the guide:
                <ul>
                    <li>For the starters Download and Install the Android Emulator of your Choice. Take a look at the list we provide here: <a href='https://appsnet.us/best-android-emulators-for-pc/' target='_blank'>Best Android Emulators For PC</a></li>
                    <li>Upon the Completion of download and install, open the Android Emulator.</li>
                    <li>In the next step click on the Search Button on home screen.</li>
                    <li>Now in the search box type '$title_dom1' and get the manager in Google Play Search.</li>
                    <li>Click on the app icon and install it.</li>
                    <li>Once installed, find <em>$title_dom1</em> in all apps in drawer, click to open it.</li>
                    <li>Use your mouse’s right button/click and WASD keys to use this application.</li>
                    <li>Follow on-screen instructions to learn about $title_dom1 and use the App properly</li>
                    <li>That’s all.</li>
                </ul>
                [appbox googleplay $app_url screenshots-only]
                <h3><strong>Features of $title_dom1 for PC:</strong></h3>
                <p class='dev-content-read'>$content $whats_new</p>
                <h2><strong>$title_dom1 PC FAQs</strong></h2>
                Here are some quick FAQs which you may like to go through:
                
                <strong>How do I install $title_dom1 on my PC?</strong>
                
                <strong>Ans.</strong> You can not directly install this app on your pc but with the help of the android emulator, you can do that.
                
                <strong>Is $title_dom1 available for pc?</strong>
                
                <strong>Ans.</strong> No officially not, but with this article steps, you can use it on pc.
                
                <strong>How do I install $title_dom1 on Windows 8,7 or 10?</strong>
                
                <strong>Ans.</strong> This is the same process as we install the app on our pc that is the same process for windows also.
                
                <strong>How do I install $title_dom1 on Mac OS X?</strong>
                
                <strong>Ans.</strong> This is the same process as we install the app on our pc that is the same process for windows also
                
                Also, make sure you share these with your friends on social media. Please check it out our more content like ";
///                
                $args = array( 'posts_per_page' => 1, 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach ( $rand_posts as $post ) : 
                setup_postdata( $post );?>
                <?php $id = $post->id ?>
                <?php $content_final .="<a href='".post_permalink($id)."'> ".$post->post_title." </a></b><br>"; ?>
                <?php endforeach;
                
                wp_reset_postdata();
                
                $content_final.="
                <h3><strong>Conclusion</strong></h3>
                We have discussed here <strong>$title_dom1</strong> an App from <strong>Video Editors</strong> category which is not yet available on Mac or Windows store, or there is no other version of it available on PC; So we have used an Android emulator to help us in this regard and let us use the App on our PC using the Android Emulators.
                
                If you are facing any issue with this app or in the installation let me know in the comment box I will help you to fix your problem. Thanks!";



                $m_qry=$con->prepare("UPDATE app_data SET availability_status=1, playstore=1 WHERE ID=$app_id");
                $m_qry->execute();
                $m_qry->close();

                $live_status=1;

///
                // $postType = 'post';
                // $categoryID = '0';
                // $postStatus = 'publish';

                
                // $new_post = array(
                //     'post_title' => $title_dom1,
                //     'post_name' => $app_post_slug,
                //     'post_content' => $content_final,
                //     'post_status' => $postStatus,
                //     'post_type' => $postType,
                //     'post_category' => array($categoryID)
                //     );



                // $post_id = wp_insert_post($new_post);

                //*************************************************** */ End Post Insertion. Post Inserted IF Application is Alive on PlayStore **********************************************

                // $finaltext = '';
    
                // if($post_id)
                // {
                    
                //     $finaltext .= '<br>Yay, I made my new custom post.<br>';
                    
                // } 
                // else
                // {
                    
                //     $finaltext .= 'Something went wrong and I didn\'t insert a new post.<br>';
                    
                // }
        
                // echo $finaltext;
                // echo 'with Post Id : '.$post_id;
                echo '<br>';

                echo 'New Data Inserted From Scraper';
        
                
                echo '<br>';
                echo '<br>';
                echo '<br>';

                
                
            }// End of Else For Live Apps===============================================================

                // Get Category
            if ($category_name == 'Action')
            {
                $category_id  =19;
            }
            else if ($category_name == 'Adventure') 
            {
                $category_id  =18;
            }
            else if ($category_name == 'Arcade') 
            {
                $category_id  =3;
            }
            else if ($category_name == 'Card') 
            {
                $category_id  =4;
            }
            else if ($category_name == 'Casino') 
            {
                $category_id  =5;
            }
            else if ($category_name == 'Casual') 
            {
                $category_id =6;
            }
            else if ($category_name == 'Educational') 
            {
                $category_id =7;
            }
            else if ($category_name == 'Music') 
            {
                $category_id =8;
            }
            else if ($category_name == 'Puzzle') 
            {
                $category_id =9;
            }
            else if ($category_name == 'Racing') 
            {
                $category_id =10;
            }
            else if ($category_name == 'Role Playing') 
            {
                $category_id =11;
            }
            else if ($category_name == 'Simulation') 
            {
                $category_id =12;
            }
            else if ($category_name == 'Sports') 
            {
                $category_id =13;
            }
            else if ($category_name == 'Strategy') 
            {
                $category_id =14;
            }
            else if ($category_name == 'Trivia') 
            {
                $category_id =15;
            }
            else if ($category_name == 'Word') 
            {
                $category_id =16;
            }
            else
            {
                $category_id =17;
            }


            $postType = 'post';
            $categoryID = $category_id;
            $postStatus = 'publish';

                
            $new_post = array(
                    'post_title' => $title_dom1,
                    'post_name' => $app_post_slug,
                    'post_content' => $content_final,
                    'post_status' => $postStatus,
                    'post_type' => $postType,
                    'post_category' => array($categoryID)
                    );



            $post_id = wp_insert_post($new_post);

            $finaltext = '';
    
            if($post_id)
            {
                
                $finaltext .= '<br>Yay, I made my new custom post.<br>';
                
            } 
            else
            {
                
                $finaltext .= 'Something went wrong and I didn\'t insert a new post.<br>';
                
            }
    
            echo $finaltext;
            echo '<br>';
            echo 'with Post Id : '.$post_id;



            $my_query=$con->prepare("INSERT INTO post_records(url,post_id, post_title,pstore_status,updated_on,app_data_id) VALUES(?,?,?,?,?,?)");
            $my_query->bind_param("ssssss",$my_app_url,$post_id,$title,$live_status,$last_updated,$app_id);
            $my_query->execute();
            $my_query->close();




            


    






        }//End of While Loop***************************************************************


    }// End of If For Number of Rows =====================================================
    
    else
{
    echo 'No Records Found Table is Empty for Search requested';
}

$my_qry->close();


?>