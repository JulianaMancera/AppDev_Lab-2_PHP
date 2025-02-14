<?php  
   
   echo '<h3>Job Listings</h3>';

   // #1
   $listing = [ 
    
    [   'id' => 1,
        'job_title' => 'PHP Developer',
        'company'=> 'IBM',
        'email'=> 'john@ibm.com',
        'contact_no'=> '09168457456',
        'skills'=> ['PHP', 'MySQL', 'Javascript']
   ],
   [
        'id' => 2,
        'job_title' => 'Web Designer',
        'company'=> 'AWS',
        'email'=> 'jane@aws.com',
        'contact_no'=> '09175597456',
        'skills'=> ['PhotoShop', 'Illustrator', 'CSS']
   ],
   [
        'id' => 3,
        'job_title' => 'Network Admin',
        'company'=> 'CISCO',
        'email'=> 'James@cisco.com',
        'contact_no'=> '09202224575',
        'skills'=> ['Database', 'CyberSecurity', 'Networking']
   ]];

    // #2
    array_push($listing,[
        'id' => 4,
        'job_title' => 'Graphic Artist',
        'company'=> 'ADOBE',
        'email'=> 'princess@adobe.com',
        'contact_no'=> '09208456544',
        'skills'=> ['Photoshop', 'Bootstrap', 'Flutter']
    ]);

    echo '<pre>';
    print_r($listing);
    echo '</pre>';

    // #3
        echo $listing[1]['job_title'] . ' ' . $listing[1]['company']. ' '. $listing[1]['email'];
        echo '<br>';

    // #4 

        echo $listing[2]['skills'][0] .' and '. $listing[2]['skills'][2];

?>