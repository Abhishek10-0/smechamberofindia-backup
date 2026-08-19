<?php
// Number of years since founding, used inline in the copy below.
$nowdate = new DateTime('now');
$to_date = new DateTime('01/03/1993');
$year    = $to_date->diff($nowdate)->format('%Y');
?>
<section class="contact-page">
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-12 ">
                <div class="button-box" style="text-align: center; ">
                    <div class="home-premium-title-wrapper" style="margin-top: 25px;">
                        <h2><a class="home-premium-title">About Us</a></h2>
                    </div>
                </div>

                <p style="text-align: justify; font: 400 14px/22px 'Open Sans', sans-serif; margin-top: -50px;">
                    SME CHAMBER OF INDIA is India’s leading and a global organisation, has been putting efforts
                    for the empowerment of SMEs, manufacturing industries, service sectors, start-ups and allied
                    industrial & business sectors to explore various emerging domestic and international
                    business opportunities as well as strengthening them for global competitiveness. The Chamber
                    successfully has been organising various business activities and resolving the issues &
                    grievances for the last <?php echo $year; ?> years under the dynamic and indomitable
                    leadership of Mr. Chandrakant Salunkhe, Founder & President.
                    <br />
                    <br />The Chamber has been on the forefront for advocating policy frame work change and its
                    speedy implementation, securing the interest of SME & manufacturing sectors in ease of doing
                    business, leveraging level playing field to contribute more for economic & industrial
                    growth, making India as a manufacturing hub, achieve 3 trillion dollars exports and march
                    towards "Viksit Bharat" to accomplish the dream project of Hon’ble Prime Minister. The
                    Chamber provides platform to entrepreneurs, business tycoons, CEOs of large corporates,
                    MNCs, financial institutions, diplomats, policy makers, inventors, investors, start-ups,
                    Young & Women entrepreneurs and thought leaders to connect, communicate and interact,
                    mentoring, motivating and guidance for 10X business growth and convert their business ideas
                    into commercialisation.
                    <a href="introduction.php">Read More....</a>
                </p>
            </div>
        </div>
    </div>
</section>