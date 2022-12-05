<nav class="mainNav">
    <div class="logo kbold">
        Closet
    </div>
    <div class="links kmedium">
        <?php
        $links = ["collection","brands","new","sales","thrift"];
        foreach ($links as $link){
            $link = ucfirst($link);
            echo "<div class='navlink'>$link</div>";
        }
        ?>
    </div>
    <div class="navButtons">
        <div id="hiddenBtns" class="d-none">
            <?php
            if (isset($_SESSION['user'])){
            }else{
                ?>
                <div class="navbtn" onclick="window.location.href = './login.php'">
                        <ion-icon name="person-circle-outline" title="Account"></ion-icon>
                </div>
                <div  class="navbtn ">
                        <ion-icon name="cart-outline" title="Account"></ion-icon>
                </div>
                <?php
            }
            ?>
        </div>
        <div id="triggerNavBtn">
            <div class="navbtn">
                <ion-icon id="triggerIcon" name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>
</nav>
