<footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand" data-toggle="collapse" data-target="#altmenuac">BLOG KAYIT</a>


            <div class="collapse navbar-collapse" id="altmenuac">

                <form class="form-inline">

                    <input type="email" class="form-control col-auto mr-2" placeholder="Mail Adresi..." name="">

                    <input type="text" class="form-control col-auto " placeholder="Ad ve Soyad..." name="">

                    <button class="btn btn-secondary my-1 ml-2">Kayıt Ol!</button>


                </form>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="index.php" class="nav-link">Gizlilik</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Koşullar ve Şartlar</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navbar nav m-auto" >
            <a href="http://facebook.com" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true" ></i></a>
            <a href="http://twitter.com" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="http://instagram.com" target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>

        </div>

       <div class="navbar-expand-lg navbar bg-light">&copy; by <?php echo $ayarcek['ayar_author'] ?> </div>

    </nav>
</footer>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="nedmin/production/js/jquery-3.2.1.slim.min.js"></script>
<script src="nedmin/production/js/popper.js"></script>
<script src="nedmin/production/js/bootstrap.min.js"></script>

</body>
</html>