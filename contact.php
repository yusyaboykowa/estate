<?php
include "components/connect.php";
if (isset($_COOKIE['user_id'])){
    $user_id=$_COOKIE['user_id'];
}
else
{
    $user_id = '';
}
if(isset($_POST['send'])){
    $message_id=create_unique_id();
    $name=$_POST['name'];
    $name=filter_var($name, FILTER_SANITIZE_STRING);
    $email=$_POST['email'];
    $email=filter_var($email, FILTER_SANITIZE_STRING);
    $number=$_POST['number'];
    $number=filter_var($number, FILTER_SANITIZE_STRING);
    $message=$_POST['message'];
    $message=filter_var($message, FILTER_SANITIZE_STRING);
    $verify_message=$conn->prepare("SELECT * FROM `messages` WHERE name=? AND email=? AND number=? AND message=?");
    $verify_message->execute([$name, $email, $number, $message]);

    if($verify_message->rowCount()>0){
        $warning_msg[]="message already sent!";
    }else{
        $insert_message=$conn->prepare("INSERT INTO `messages`(id,name,email,number,message) VALUES (?,?,?,?,?)");
        $insert_message->execute([$message_id, $name, $email, $number, $message]);
        $success_msg[]='message sent successfully!';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include 'components/user_header.php'; ?>
        <section class="contact">
       
            <div class="row">
                <div class="image">
                    <img src="./img/kiss.png" alt="">
                </div>
                <form action="" method="post">
                    <h3>get in touch</h3>
                    <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
                    <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
                    <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
                    <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
                    <input type="submit" value="send message" name="send" class="btn">
                </form>
            </div>
        </section>
        <section class="faq" id="faq">
            <h1 class="heading">FAQ</h1>
            <div class="box-container">
                <div class="box">
                    <h3><span>1. What the first step of the home buying process?</span><i class="fas fa-angle-down"></i></h3>
                    <p>First, you need to know how much you can borrow. Knowing how much home you can afford narrows down online home searching to suitable properties, thus no time is wasted considering homes that are not within your budget. (Pre-approvals also help prevent disappointment caused by falling in love unaffordable homes.)
                        Second, the loan estimate from your lender will show how much money is required for the down payment and closing costs. You may need more time to save up money, liquidate other assets or seek mortgage gift funds from family. In any case, you will have a clear picture of what is financially required.
                        Finally, being pre-approved for a mortgage demonstrates that you are a serious buyer to both your real estate agent and the person selling their home.
                        Most real estate agents will require a pre-approval before showing homes - this is especially true at the higher end of the real estate market; sellers of luxury homes will only allow pre-screened (and verified) buyers to view their homes. This is meant to keep out "Looky Lous" and protect the seller’s privacy. What’s more, by limiting who enters their home, sellers are given extra security from potential thieves trying to case the home (like identifying security systems, locating expensive artwork or other high-value personal property).</p>
                </div>
                <div class="box">
                    <h3><span>2. How long does it take to buy a home?</span><i class="fas fa-angle-down"></i></h3>
                    <p>From start (searching online) to finish (closing escrow), buying a home takes about 10 to 12 weeks. Once a home is selected an the offer is accepted, the average time to complete the escrow period on a home is 30 to 45 days (under normal market conditions). Though, well-prepared home buyers who pay cash have been known to purchase properties faster than that.
                        Market conditions are a major factor in how fast homes are sold. In hot markets with a lot of sales activity, buying a home may take a little longer than normal. That’s because several parties involved in the transaction get behind when business suddenly picks up. For example, a spike in home sales increases the demand for property appraisals and home inspections, yet there will be no increase in the number of appraisers and inspectors available to do the work. Lender turn-around times for loan underwriting can also slow down. If each party involved in a deal takes a day or two longer to get their work done, the entire process gets extended.</p>
                </div>
                <div class="box">
                    <h3><span>3. What is a seller’s market?</span><i class="fas fa-angle-down"></i></h3>
                    <p>In sellers’ markets, increasing demand for homes drives up prices. Here are some of the drivers of demand:
                            Economic factors – the local labor market heats up, bringing an inflow of new residents and pushing up home prices before more inventory can be built.
                            Interest rates trending downward – improves home affordability, creating more buyer interest, particularly for first time home buyers who can afford bigger homes as the cost of money goes lower.
                            A short-term spike in interest rates - may compel “on the fence” buyers to make a purchase if they believe the upward trend will continue. Buyers want to make a move before their purchasing power (the amount they can borrow) gets eroded.
                            Low inventory - fewer homes on the market because of a lack of new construction. Prices for existing homes may go up because there are fewer units available.
                    </p>
                </div>
                <div class="box">
                    <h3><span>4. What is a stratified market?</span><i class="fas fa-angle-down"></i></h3>
                    <p>A stratified market happens where supply and demand characteristics differ by price point, in the same area (typically by city). For example, home sales for properties above $1.5M may be brisk (seller’s market) while homes under $750k may be sluggish (buyer’s market). This scenario comes along every so often in West Coast cities where international investors - looking to park their money in the United States - buy expensive real estate. At the same time, home sales activity in mid-priced homes could be entirely different.</p>
                </div>
                <div class="box">
                    <h3><span>5. How long will it take to sell my property?</span><i class="fas fa-angle-down"></i></h3>
                    <p>This is often an impossible question to answer, and yet people ask it all the time. They want to know how long they have to wait to move, or how quickly they’ll expect to get their money so that they can pay off their mortgage and start the process of buying a new home. People like timelines and even though you can’t predict the process, you can explain what you’ve seen in the past and what you would expect based on the current market. And then, you can invite them to contact you for a more precise quote by discussing their property and exactly what the sale includes. </p>
                </div>
                <div class="box">
                    <h3><span>6. How much commission do you charge?</span><i class="fas fa-angle-down"></i></h3>
                    <p>Another question everyone wants to know is what you’re going to charge them. You can feel free to tell them what your commission rate is for being a seller’s agent and a buyer’s agent, and then disclose if there are any discounts, special considerations, or other factors that may affect that rate. Be as transparent as possible and make sure that you offer comparable commission rates for other real estate agents in the area to prove to people that you are on par with the rest but with better service and solutions. </p>
                </div>
                <div class="box">
                    <h3><span>7. What is the selling/buying process like?</span><i class="fas fa-angle-down"></i></h3>
                    <p>There’s a lot of stress in buying and selling homes, and especially for those who are doing it for the first time. When you answer this question, provide as much insight as you can about how it works. You can even create separate questions for each side of the process if you work as both a buyer’s agent and a seller’s agent. Then, you can also reassure people here that you will be there to help them every step of the way, further solidifying their peace of mind. </p>
                </div>
                <div class="box">
                    <h3><span>8. How much experience do you have in estate?</span><i class="fas fa-angle-down"></i></h3>
                    <p>This is always a good Q&A to include on your website. It gives you a chance to brag a little about your experience and expertise in real estate and show people what you bring to the table. It also shows your audience that you are willing to be transparent and have their best interests in mind because you are open about your career experience. Be sure to include any licensing, professional certifications, or other credentials that you have here, too. </p>
                </div>
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