<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}
include 'components/save_send.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include 'components/user_header.php'; ?>
        <div class="home">
            <section class="center">
                <form action="search.php" method="post">
                    <h3>find your perfect home</h3>
                    <div class="box">
                        <p>enter location<span>*</span></p>
                        <input type="text" name="h_location" required maxlength="50" class="input" placeholder="enter street name">
                    </div>
                    <div class="flex">
                        <div class="box">
                            <p>property type<span>*</span></p>
                            <select name="h_type" class="input" required>
                                <option value="flat">flat</option>
                                <option value="house">house</option>
                                <option value="shop">shop</option>
                            </select>   
                        </div>
                        <div class="box">
                            <p>offer type <span>*</span></p>
                            <select name="h_offer" class="input" required>
                                <option value="sale">sale</option>
                                <option value="resale">resale</option>
                                <option value="rent">rent</option>
                            </select>
                        </div>
                        <div class="box">
                            <p>minimum budget<span>*</span></p>
                            <select name="h_min" class="input" required>
                                <option value="2000">2K$</option>
                                <option value="4000">4K$</option>
                                <option value="6000">6K$</option>
                                <option value="8000">8K$</option>
                                <option value="10000">10K$</option> 
                                <option value="12000">12K$</option>
                                <option value="14000">14K$</option>
                                <option value="16000">16K$</option>
                                <option value="18000">18K$</option>
                                <option value="20000">20K$</option>
                                <option value="22000">22K$</option>
                                <option value="24000">24K$</option>
                                <option value="26000">26K$</option>
                                <option value="28000">28K$</option>
                                <option value="30000">30K$</option>
                                <option value="32000">32K$</option>
                                <option value="34000">34K$</option>
                                <option value="36000">36K$</option>
                                <option value="38000">38K$</option>
                                <option value="40000">40K$</option>
                                <option value="42000">42K$</option>
                                <option value="44000">44K$</option>
                                <option value="46000">46K$</option>
                                <option value="48000">48K$</option>
                                <option value="50000">50K$</option> 
                                <option value="52000">52K$</option>
                                <option value="54000">54K$</option>
                                <option value="56000">56K$</option>
                                <option value="58000">58K$</option>
                                <option value="60000">60K$</option> 
                                <option value="62000">62K$</option>
                                <option value="64000">64K$</option>
                                <option value="66000">66K$</option>
                                <option value="68000">68K$</option>
                                <option value="70000">70K$</option> 
                                <option value="72000">72K$</option>
                                <option value="74000">74K$</option>
                                <option value="76000">76K$</option>
                                <option value="78000">78K$</option>
                                <option value="80000">80K$</option> 
                                <option value="82000">82K$</option>
                                <option value="84000">84K$</option>
                                <option value="86000">86K$</option>
                                <option value="88000">88K$</option>
                                <option value="90000">90K$</option> 
                                <option value="92000">92K$</option>
                                <option value="94000">94K$</option>
                                <option value="96000">96K$</option>
                                <option value="98000">98K$</option>
                                <option value="100000">100K$</option> 
                            </select>   
                        </div>
                        <div class="box">
                            <p>maximum budget<span>*</span></p>
                            <select name="h_max" class="input" required>
                                <option value="2000">2K$</option>
                                <option value="4000">4K$</option>
                                <option value="6000">6K$</option>
                                <option value="8000">8K$</option>
                                <option value="10000">10K$</option> 
                                <option value="12000">12K$</option>
                                <option value="14000">14K$</option>
                                <option value="16000">16K$</option>
                                <option value="18000">18K$</option>
                                <option value="20000">20K$</option>
                                <option value="22000">22K$</option>
                                <option value="24000">24K$</option>
                                <option value="26000">26K$</option>
                                <option value="28000">28K$</option>
                                <option value="30000">30K$</option>
                                <option value="32000">32K$</option>
                                <option value="34000">34K$</option>
                                <option value="36000">36K$</option>
                                <option value="38000">38K$</option>
                                <option value="40000">40K$</option> 
                                <option value="42000">42K$</option>
                                <option value="44000">44K$</option>
                                <option value="46000">46K$</option>
                                <option value="48000">48K$</option>
                                <option value="50000">50K$</option> 
                                <option value="52000">52K$</option>
                                <option value="54000">54K$</option>
                                <option value="56000">56K$</option>
                                <option value="58000">58K$</option>
                                <option value="60000">60K$</option> 
                                <option value="62000">62K$</option>
                                <option value="64000">64K$</option>
                                <option value="66000">66K$</option>
                                <option value="68000">68K$</option>
                                <option value="70000">70K$</option> 
                                <option value="72000">72K$</option>
                                <option value="74000">74K$</option>
                                <option value="76000">76K$</option>
                                <option value="78000">78K$</option>
                                <option value="80000">80K$</option> 
                                <option value="82000">82K$</option>
                                <option value="84000">84K$</option>
                                <option value="86000">86K$</option>
                                <option value="88000">88K$</option>
                                <option value="90000">90K$</option> 
                                <option value="92000">92K$</option>
                                <option value="94000">94K$</option>
                                <option value="96000">96K$</option>
                                <option value="98000">98K$</option>
                                <option value="100000">100K$</option> 
                                <option value="102000">102K$</option>
                                <option value="104000">104K$</option>
                                <option value="106000">106K$</option>
                                <option value="108000">108K$</option>
                                <option value="110000">110K$</option> 
                                <option value="112000">112K$</option>
                                <option value="114000">114K$</option>
                                <option value="116000">116K$</option>
                                <option value="118000">118K$</option>
                                <option value="120000">120K$</option> 
                                <option value="122000">122K$</option>
                                <option value="124000">124K$</option>
                                <option value="126000">126K$</option>
                                <option value="128000">128K$</option>
                                <option value="130000">130K$</option>
                            </select>   
                        </div>
                    </div>
                    <input type="submit" value="search property" name="h_search" class="btn">
                </form>
            </section>
        </div>
        <section class="services">
            <h1 class="heading">our services</h1>
            <div class="box-container">
                <div class="box">
                    <img src="../estate/img/buy.png">
                    <h3>buy house</h3>
                    <p>We can propose you to buy the best apartments available</p>
                </div>
                <div class="box">
                    <img src="../estate/img/house.png">
                    <h3>rent house</h3>
                    <p>You can rent all kinds of apartments you want</p>
                </div>
                <div class="box">
                    <img src="../estate/img/house (1).png">
                    <h3>sale house</h3>
                    <p>You can sale your property here right now</p>
                </div>
                <div class="box">
                    <img src="../estate/img/building.png">
                    <h3>flats and buildings</h3>
                    <p>You can see all the flats and builings on the sale</p>
                </div>
                <div class="box">
                    <img src="../estate/img/store.png">
                    <h3>shops</h3>
                    <p>You can see all the shops on the sale</p>
                </div>
                <div class="box">
                    <img src="../estate/img/support.png">
                    <h3>24/7 support</h3>
                    <p>You are able to contact us all day long</p>
                </div>
            </div>

        </section>
        <section class="listings">
            <h1 class="heading">latest listings</h1>
            <div class="box-container">
            <?php
            $total_images=0;
            $select_properties=$conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 3");
            $select_properties->execute();
            if($select_properties->rowCount()>0){
                while($fetch_property=$select_properties->fetch(PDO::FETCH_ASSOC)){
                    $property_id=['id'];
                    $select_user=$conn->prepare("SELECT * FROM `users` WHERE id = ?");
                    $select_user->execute([$fetch_property['user_id']]);
                    $fetch_user=$select_user->fetch(PDO::FETCH_ASSOC);
                    if(!empty($fetch_property['image_02']))
                    {
                        $count_image_02=1;
                    }else{
                        $count_image_02=0;
                    }
                    if(!empty($fetch_property['image_03']))
                    {
                        $count_image_03=1;
                    }else{
                        $count_image_03=0;
                    }
                    if(!empty($fetch_property['image_04']))
                    {
                        $count_image_04=1;
                    }else{
                        $count_image_04=0;
                    }
                    if(!empty($fetch_property['image_05']))
                    {
                        $count_image_05=1;
                    }else{
                        $count_image_05=0;
                    }
                    $total_images=(1+$count_image_02+$count_image_03+$count_image_04+$count_image_05);

                    $select_saved=$conn->prepare("SELECT *FROM `saved` WHERE property_id=? AND user_id=?");
                    $select_saved->execute([$fetch_property['id'], $user_id]);
            ?>
            <form action="" method="POST">
                <div class="box">
                        <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
                        <?php
                        if($select_saved->rowCount() > 0){
                        ?>
                        <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>
                        <?php
                        }else{ 
                        ?>
                        <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>
                        <?php
                        }
                        ?>
                    <div class="thumb">
                        <p><i class="fas fa-image"></i><span><?=$total_images;?></span></p>
                        <img src="uploaded_files/<?=$fetch_property['image_01']; ?>" alt="">
                    </div>
                    <div class="admin">
                        <h3><?=substr($fetch_user['name'], 0,1);?></h3>
                        <div>
                            <p><?=$fetch_user['name'];?></p>
                            
                        </div>
                    </div>
                </div>
                <div class="box">
                    <p class="price"><i class="fa-solid fa-dollar-sign"></i><span><?=$fetch_property['price'];?></span></p>
                    <h3 class="name"><?=$fetch_property['property_name'];?></h3> 
                    <p class="location"><i class="fas fa-map-marker-alt"></i><span><?=$fetch_property['address'];?></span></p>
                                
                    <div class="flex">
                        <p><i class="fas fa-house"></i><span><?=$fetch_property['type'];?></span></p>
                        <p><i class="fas fa-tag"></i><span><?=$fetch_property['offer'];?></span></p>
                        <p><i class="fas fa-bed"></i><span><?=$fetch_property['rooms'];?></span></p>
                        <p><i class="fas fa-trowel"></i><span><?=$fetch_property['status'];?></span></p>
                        <p><i class="fas fa-couch"></i><span><?=$fetch_property['furnished'];?></span></p>
                        <p><i class="fas fa-maximize"></i><span><?=$fetch_property['carpet'];?></span></p>
                    </div>
                    <div class="flex-btn">
                    <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">view property</a>
                        <input type="submit" value="send enquiry" name="send" class="btn">
                    </div>
                </div>
            </form>
            <?php
                }
            }else{
                echo '<p class="empty">no property listed yet!</p>';
            } ?>
            <div style="margin-top:2rem;  text-align:center;">
                <a href="listings.php" class="inline-btn">view all</a>
            </div>  

        </section>
        <?php include 'components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/scripts.js"></script>
    <?php
    include 'components/message.php';
    ?>
    </body>
</html>