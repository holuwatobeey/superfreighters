<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<title>SuperFreighters</title>


<!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- font awesome CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
body{
  font-family:Tahoma;
}
.jumbotron {
  position: relative;
  color:white;
  background:none;
  height: 100vh;
}
.jumbotron:after {
    content : "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    background-image: url('/images/banner/banner.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    opacity : 0.8;
    z-index: -1;
}

.center{
  text-align:center;
  padding-top: 20%;
}

.jumbotron h1 {
  position: relative;
  padding-bottom: 7px;
}
.jumbotron h1:before{
    content: "";
    position: absolute;
    width: 35%;
    height: 2px;
    bottom: 0;
    left: 32%;
    border-bottom: 2px solid white;
}
</style>

{{-- transparent navabr scroll --}}
<script>
    $(document).ready(function() {
    
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 60) {
            $(".navbar").addClass("bg-light");
        } else {
          $(".navbar").removeClass("bg-light");
        }
    });
      
    });
</script>

