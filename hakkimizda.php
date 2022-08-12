<?php include 'header.php';
$hakkimizdasor = $db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<div role="main" class="main">
    <div class="container">
        <div class="row pt-xl">
            <div class="col-md-7">
                <h1 class="mt-xl mb-none"><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr style="background-color:  #2A3F54 ;">
                </div>
                <p><?php echo $hakkimizdacek['hakkimizda_icerik'] ?></p>
                <img style="width:150px;" src="dimg/slider2/1.png">
                <img style="width:150px;" src="dimg/slider2/2.png">
                <img style="width:150px;" src="dimg/slider2/3.png">
                <img style="width:150px;" src="dimg/slider2/4.png">
                <img style="width:150px;" src="dimg/slider2/5.png">
                <img style="width:150px;" src="dimg/slider2/6.png">
                <img style="width:150px;" src="dimg/slider2/7.png">
                <img style="width:150px;" src="dimg/slider2/2.png">

            </div>
                <!--<div class="col-md-7">
                    <img src="dimg/slider2/1.png">
                    <img src="dimg/slider2/2.png">
                    <img src="dimg/slider2/3.png">
                    <img src="dimg/slider2/4.png">
                    <img src="dimg/slider2/5.png">
                    <img src="dimg/slider2/6.png">
                </div>-->

                <div class="col-md-4 col-md-offset-1">

                    <h4 class="mt-xl mb-none">Video Tanıtım</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr style="background-color:  #2A3F54 ;">
                    </div>

                    <div class="embed-responsive embed-responsive-16by9 mb-xl">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video']?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                        <h4 class="mt-xlg">Vizyonumuz</h4>

                        <div class="divider divider-primary divider-small mb-xl">
                            <hr style="background-color:  #2A3F54 ;">
                        </div>
                        <blockquote class="blockquote-secondary">
                            <p class="font-size-lg"><?php echo $hakkimizdacek['hakkimizda_vizyon'] ?></p>
                            <footer>Vizyonumuz</footer>
                        </blockquote>
                        <h4 class="mt-xlg">Misyonumuz</h4>

                        <div class="divider divider-primary divider-small mb-xl">
                            <hr style="background-color:  #2A3F54     ;">
                        </div>
                        <blockquote  class="blockquote-secondary">
                            <p class="font-size-lg"><?php echo $hakkimizdacek['hakkimizda_misyon'] ?></p>
                            <footer>Misyonumuz</footer>
                        </blockquote>




                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php';