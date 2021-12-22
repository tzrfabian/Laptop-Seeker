<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laptop Seeker</title>
</head>
<style>
    /* Style the header with a grey background and some padding */
*{
    margin: 0;
}

.header {
    overflow: hidden;
    background-color: #2F2F2F;
    padding: 15px 10px;

  }

  /* Style the header links */
  .header a {
    float: left;
    color: #D9CDBD;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
    font-family: 'IBM Plex Sans';
  }

  /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }

  /* Change the background color on mouse-over */
  .header a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Style the active/current link*/
  .header a.home {
    /* background-color: dodgerblue; */
    color: white;
  }

  /* Float the link section to the right */
  .header-right {
    float: right;
  }

  /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
    .header-right {
      float: none;
    }
  }

body{

}

.footer{
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #2F2F2F;
    color: #FFFFFF;
    padding: 25px 10px;
    text-align: center;
    font-family: 'IBM Plex Sans';
}

</style>
<body>
@yield('navbar')
    <!-- Navbar -->
    <nav>
    <div class="header">
        <a href="/home" class="logo">Laptop Seeker</a>
        <div class="header-right">
          <a class="home" href="/home">Home</a>
          <a href="#product">Product</a>
          <a href="#login">Login</a>
        </div>
      </div>
     </nav>

@yield('content')


@yield('footer')
      <!-- Footer -->
      <footer>
          <div class="footer">
            <!-- <a class="contact" href="#contact"><p>Contact</p></a>
            <a class="about" href="#about"><p>About Us</p></a>
            <a class="terms" href="#terms"><p>Terms & Conditions</p></a> -->
            <p>Contact</p>
            <p>About Us</p>
            <p>Terms & Conditions</p>

          </div>
      </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
