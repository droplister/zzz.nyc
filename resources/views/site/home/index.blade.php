@extends('layouts.site')

@section('title', 'Area 17 :: Front End :: Home')

@section('main')
        <div class="row">
          <div class="col-6">
            <div class="asset-box tall">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/phoenix.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">Find the Perfect Dress for Special Occasions</a></h1>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Jennifer Nicole Sullivan</li>
                    <li>Vintage Clothing Expert</li>
                  </ul>
                  <a href="#" class="button share"></a>
                </footer>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="asset-box">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/batman.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">Attracting Butterflies to Your Garden</a></h1>
                  <a href="#" class="button share"></a>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Marie Iannotti</li>
                    <li>Gardening Expert</li>
                  </ul>
                </footer>
              </div>
            </div>
            <div class="asset-box">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/daredevil.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">The Absolute Beginner's Guide to Running</a></h1>
                  <a href="#" class="button share"></a>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Christine Luff</li>
                    <li>Running Expert</li>
                  </ul>
                </footer>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="asset-box">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/hulk.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">DIY Live Edge Coffee Table</a></h1>
                  <a href="#" class="button share"></a>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Staphanie White</li>
                    <li>DIY Expert</li>
                  </ul>
                </footer>
              </div>
            </div>
            <div class="asset-box">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/squirell-girl.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">Best Free Attractions in New York City</a></h1>
                  <a href="#" class="button share"></a>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Heather Cross</li>
                    <li>New York City Travel Expert</li>
                  </ul>
                </footer>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="asset-box">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/spiderman.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">Italian Sausage and Bell Pepper Pizza</a></h1>
                  <a href="#" class="button share"></a>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Will Forte</li>
                    <li>Last Man On Earch</li>
                  </ul>
                </footer>
              </div>
            </div>
            <div class="asset-box">
              <div class="asset-image">
                <a href="#" target="_self" style="background-image: url(images/wolverine.jpg)" title=""></a>
              </div>
              <div class="asset-content">
                <header>
                  <h1><a href="#">10 Mid Century Moden Items for Your Home</a></h1>
                  <a href="#" class="button share"></a>
                </header>
                <footer>
                  <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                  <ul>
                    <li>Jessica Jones</li>
                    <li>Private Detective</li>
                  </ul>
                </footer>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('aside')
        <div class="ad-block">
          <div>
            <a href="https://www.starbucks.com/" target="_blank"><img src="images/advert.jpg" /></a>
          </div>
        </div>
        <div class="module list">
          <h3>Trending</h3>
          <div class="row">
            <div class="col-6">
              <span class="image-wrap">
                <a href="#" class="image"><img src="images/vulture.jpg"/></a>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
              </span>
            </div>
            <div class="col-6">
              <h4><a href="#">3 Questions to Answer Before You Buy Your First Investment</a></h4>
              <footer>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                <ul>
                  <li>By Joshua Kennon</li>
                  <li>Investing for Geninners...</li>
                </ul>
                <a href="#" class="button share"></a>
              </footer>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <span class="image-wrap">
                <a href="#" class="image"><img src="images/wolverine-face.jpg"/></a>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
              </span>
            </div>
            <div class="col-6">
              <h4><a href="#">Pairing Food and Wine</a></h4>
              <footer>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                <ul>
                  <li>By Stacy Slinkard</li>
                  <li>Wine Expert</li>
                </ul>
                <a href="#" class="button share"></a>
              </footer>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <span class="image-wrap">
                <a href="#" class="image"><img src="images/fantastic.jpg"/></a>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
              </span>
            </div>
            <div class="col-6">
              <h4><a href="#">12 Questions to Expect on Your College Interview</a></h4>
              <footer>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                <ul>
                  <li>By Allen Grove</li>
                  <li>College Admissions Expert</li>
                </ul>
                <a href="#" class="button share"></a>
              </footer>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <span class="image-wrap">
                <a href="#" class="image"><img src="images/saga.jpg"/></a>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
              </span>
            </div>
            <div class="col-6">
              <h4><a href="#">How Not to Look Fat in White Pants</a></h4>
              <footer>
                <a href="#" class="button" style="background-image:url(images/sanders.jpg)"></a>
                <ul>
                  <li>By Cynthia Nellis</li>
                  <li>Fashion Expert</li>
                </ul>
                <a href="#" class="button share"></a>
              </footer>
            </div>
          </div>
        </div>
@endsection
