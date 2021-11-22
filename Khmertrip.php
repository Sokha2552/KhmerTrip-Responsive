<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="styletrip.css">

    <script src="https://kit.fontawesome.com/3823ee383f.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&family=Siemreap&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  
</head>
<body>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    
  <div id="slideshow">
    <div class="fullwidthbanner-container" style="overflow: visible;">
      <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
          <h1 class="logo navbar-brand">
              <a href="/" title="Khmertrip">
                  <img src="	https://khmertrips.com/img/logo-website-xs.png" alt="logo">
              </a>
          </h1>
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 1.5em;" id="#myicon"></i></a>
              </li>
              <li class="nav-item">
                  <a id="btnLogin" href="#khmertrip-login" class="soap-popupbox">ចូលគណនី</a> 
              </li>
          </ul>
      </nav>
      <div id="carousel-example-1z" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" style="height: 700px;" src="https://travelbible.co/wp-content/uploads/2020/04/Solo-Travel-in-Nature-acbfea52bfaf.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 700px;" src="https://cdn.idntimes.com/content-images/community/2019/09/chris-lawton-duq1ulztjbm-unsplash-ae1ebe6756166c1c95eec9a42445c890_600x400.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 700px;" src="https://www.ideas.org.au/images/resources/blog/Aircraft.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
    <div class="search-box-wrapper">​​​
        <div class="search-box container">
          <ul class="search-tabs clearfix">
            <li class="active text-info"><a href="#tour-tab" data-toggle="tab">ដំណើរកំសាន្ត</a></li>
            <li class="text-warning"><a href="#activity-tab" data-toggle="tab" style="color: #db9a00;;">កំសាន្តខ្លីៗ</a></li>
          </ul>
          <div class="search-tab-content">
            <div class="tab-pane active in rounded-0" id="tour-tab">
              <form action="" method="post">
                <div class="row">
                  <div class="form-group col-sm-6 col-md-3">
                    <h4 class="title">ទីកន្លែង</h4>
                    <label style="padding-top: -12px;">ទិសដៅរបស់អ្នក</label>
                    <div class="selector">
                      <select class="form-control" id="tour-city">
                      <option value="0">ទាំងអស់</option>
                      <option value="1">ភ្នំពេញ</option>
                      <option value="3">បាត់ដំបង</option>
                      <option value="5">កំពង់ឆ្នាំង</option>
                      <option value="6">កំពង់ស្ពឺ</option>
                      <option value="8">កំពត</option>
                      <option value="10">កោះកុង</option>
                      <option value="11">កែប</option>
                      <option value="13">មណ្ទលគិរី</option>
                      <option value="15">ប៉ៃលិន</option>
                      <option value="16">ព្រះសីហនុ</option>
                      <option value="17">ព្រះវិហារ</option>
                      <option value="18">ពោធិ៍សាត់</option>
                      <option value="20">រតនៈគិរី</option>
                      <option value="21">សៀមរាប</option>
                      <option value="22">ស្ទឹងត្រែង</option>
                      <option value="26">បាងកក</option>
                      <option value="204">ទីក្រុង&ZeroWidthSpace;ហូជីមិញ</option>
                      <option value="257">ណុងខៃ</option>
                      <option value="270">ភូកេត</option>
                      </select>
                      </div>
                  </div>
                  <div class="form-group col-sm-6 col-md-4">
                    <h4 class="title">កាលបរិច្ឆេទ</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <label>ចេញដំណើរ</label>
                          <div class="datepicker-wrap kh-content" id="tour-datepicker">
                            <input id="tour-departure_date" width="150" placeholder="ខែ/ថ្ងៃ/ឆ្នាំ">
                            <script>
                                $('#tour-departure_date').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label>រយៈពេល</label>
                            <input id="tour-duration" type="number" name="date_from" class="input-text full-width kh-content" placeholder="ចំនួនថ្ងៃ">
                        </div>
                      </div>
                  </div>
                  <div class="form-group col-sm-6 col-md-3">
                    <h4 class="title">ចំនួន</h4>
                      <div class="row">
                        <div class="col-xs-6">
                          <label>មនុស្ស</label>
                            <input id="tour-pax" type="number" name="date_from" class="input-text full-width kh-content" placeholder="ចំនួនមនុស្ស">
                        </div>
                      </div>
                  </div>
                  <div class="form-group col-sm-6 col-md-2 fixheight">
                    <label class="hidden-xs">&nbsp;</label>
                      <a id="btnTour" href="/product?service=tour">
                        <button type="button" class="full-width icon-check animated bounce" data-animation-type="bounce" data-animation-duration="1" style="animation-duration: 1s; visibility: visible;">ស្វែងរកឥឡូវនេះ
                        </button>
                        <i class="fas fa-check"></i>
                      </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> 
    <div class="blog section parallax" style="min-height: 300px ; background-position: 50% 132px;" data-stella-backgoud-radio="0.5">
      <div class="container">
          <div class="description text-center">
            <h1>ថ្មីៗពីរខ្មែរទ្រីប</h1>
          </div>
          <div class="row">
                  <div class="col-12 text-right">
                      <a class="btn mb-3 mr-1 rounded-0" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fas fa-long-arrow-alt-left"></i>
                      </a>
                      <a class="btn mb-3 rounded-0" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fas fa-long-arrow-alt-right"></i>
                      </a>
                  </div>
                  <div class="col-12">
                      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
          
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <div class="row">
          
                                      <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="hover-zoomin">
                                              <div class="inner">
                                                <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-announcement/xhVoPoZC8GEf5mJZ5HIFWMfqbaz62LpF.png" style="height: 170px !important;" alt="" draggable="false">
                                              </div>
                                            </div>
                                                  <div class="card-body">
                                                      <p>
                                                        <a href="/announcement/follow-us-on-telegram" class="text-lg post-title entry-title">ទទួលបាននូវព័ត៍មានអំពី ដំណើរកម្សាន្តថ្មីៗ ព្រមជាមួយតម្លៃពិសេស រៀងរាល់សប្តាហ៍</a>
                                                      </p>
                                                  </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="hover-zoomin">
                                              <div class="inner">
                                                <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-announcement/8oWleAN2xlbCKx34abAuu-dj5g9pMNnb.png" style="height: 170px !important;" alt="" draggable="false">
                                              </div>
                                            </div>
                                                  <div class="card-body">
                                                    <p>
                                                      <a href="/announcement/private-trip-with-khmertrips" class="text-lg post-title entry-title">ខ្មែរទ្រីបនាំមកជូនលោកអ្នកនូវបទពិសោធន៍ថ្មីនៃការកក់ដំណើរកម្សាន្តបែបលក្ខណះឯកជន</a>
                                                    </p>
                                                  </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="hover">
                                              <div class="inner">
                                                <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-announcement/qmrgraFsCznRYEk_ZMBJPh2A-KVTS0aS.png" style="height: 170px !important;" alt="" draggable="false">
                                              </div>
                                            </div>
                                                  <div class="card-body">
                                                    <p>
                                                      <a href="/announcement/online-payment-with-khmertrips-via-payway" class="text-lg post-title entry-title">កាន់តែងាយស្រួលសំរាប់ការកក់ដំនើរកំសាន្តជាមួយការបង់ប្រាក់តាម Payway</a>
                                                    </p>
                                                  </div>
                                          </div>
                                      </div>
          
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="icon">
              <i class="fas fa-map-signs"></i>
            </div>
            <div class="text">
              <div class="title">ខេត្តកំពុងពេញនិយម</div>
              <p>ស្វែងរកដំណើរកំសាន្តដ៏សំបូរបែបរបស់លោកអ្នកតាមខេត្តនីមួយៗ</p>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                  <div class="hover-zoomin">
                    <div class="inner">
                      <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" title="" class="hover-effect-no-bg">
                        <img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/SodBXw7A1H9MDlb6cuwKaeoUC9X6hyO4.png" alt="" width="270" height="160"></a>
                    </div>
                  </div>
                    <div class="card-body">
                      <div class="details">
                        <h4 class="box-title">ព្រះវិហារ</h4>
                          <small class="pad-sm ">(៤+ ដំណើរកំសាន្ត)</small>
                            <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                      </div>
                    </div> 
              </div>
            </div> 
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=21" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/lOtuTTnwRs1L9lsp7iVydNeVUIkLy70s.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">សៀមរាប</h4>
                        <small class="pad-sm ">(៣+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=10" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/gQSm1qIfVSFPdHXyNznnIrRUrhxduybk.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">កោះកុង</h4>
                        <small class="pad-sm ">(៣+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=8" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/nBdXhUEQStj1EflyhyrvS1mpIhOoJ9B0.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">កំពត</h4>
                        <small class="pad-sm ">(២+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=11" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/jJNLC7VC1Z8tovcK7q42etXsk2wEXOmW.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">កែប</h4>
                        <small class="pad-sm ">(២+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=13" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/ofo7SyLgOHEIFIeSe_EFNfgGZaXU9fH5.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">មណ្ឌលគីរី</h4>
                        <small class="pad-sm ">(២+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=16" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/DoznZHbPDifsXQXzkuPZk8LIMaEHwLVq.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">ព្រះសីហនុ</h4>
                        <small class="pad-sm ">(២+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="hover-zoomin">
                  <div class="inner">
                    <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=270" title="" class="hover-effect-no-bg"><img src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/destination/6Nq8RTXI68q3y3xkwVOOdTdfXE4zO0PK.png" alt="" width="270" height="160"></a>
                  </div>
                </div>
                  <div class="card-body">
                    <div class="details">
                      <h4 class="box-title">ភូកេត</h4>
                        <small class="pad-sm ">(១+ ដំណើរកំសាន្ត)</small>
                          <a href="/product?service=list&amp;page=1&amp;search%5Bcity%5D=17" class="button btn-mini">ទាំងអស់</a>
                    </div>
                  </div> 
              </div>
            </div>
        </div>
          <div class="text-center">
            <a href="/product?service=list&amp;page=1" type="button" class="button btn-large sky-blue1 kh-header go-to-booking">ស្វែងរកកន្លែងកំសាន្តជាច្រើនទៀត</a>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="icongroup">
              <i class="fas fa-heart"></i>
            </div>
            <div class="text">
              <div class="title">
                ដំណើរកំសាន្តពេញនិយម
              </div>
              <p>រីករាយ និង ទទួលបទពិសោធន៍ថ្មី ជាមួយ កញ្ចប់ដំនើរកម្សាន្តដែលកំពុងមានប្រជាប្រិយភាពនៅថ្ងៃនេះ</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-6">
            <a href="#" class="text-right h4 text-info">មើលទាំងអស់</a>
          </div>
          <div class="col-md-4 mb-3">
              <div class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0.3" style="animation-duration: 1s; animation-delay: 0.3s; visibility: visible;">
                  <a title="" href="#"><img style="width: 370px; height: 160px;" class="image" alt="" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-popular-product/MluhFgLMWfYdr5ufJNvVxA4WfVSAvcOm.jpg"></a>
                  <div class="overlay">តោះបោះតង់លើភ្នំ</div>
              </div>
            <div class="details">
              <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
                <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 63</span>
                <p class="box-title text-lg text-overflow">
                  <a href="/products/tour/camping-steung-popok-steung-pongroul-2-days-1-night" data-toggle="tooltip" data-placement="top" data-title="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-original-title="" title="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់">បោះតង់មើលពពក នៅស្ទឹងពពក<span id="dots">...</span><span id="more"> ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់</span></a>
                </p>
                </div>
                <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
                  <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 144</span>
                  <p class="box-title text-lg text-overflow">
                    <a href="/products/tour/ដើរព្រៃ-បោះតង់-ភ្នំត្បែងមានជ័យ-ដែនដីពិសិដ្ឋ" data-toggle="tooltip" data-placement="top" data-title="ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ ដែនដីពិសិដ្ឋ ៣ថ្ងៃ២យប់" data-original-title="" title="ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ ដែនដីពិសិដ្ឋ ៣ថ្ងៃ២យប់" aria-describedby="tooltip451243">ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ<span id="dots">...</span><span id="more"> ដែនដីពិសិដ្ឋ ៣ថ្ងៃ២យប់</span></a>
                  </p>
                  </div>
                  <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
                    <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 68</span>
                    <p class="box-title text-lg text-overflow">
                      <a href="/products/tour/ដើរព្រៃ-បោះតង់-ភ្នំត្បែងមានជ័យ-ដែនដីពិសិដ្ឋ-២ថ្ងៃ១យប់" data-toggle="tooltip" data-placement="top" data-title="ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ ដែនដីពិសិដ្ឋ ២ថ្ងៃ១យប់" data-original-title="" title="ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ ដែនដីពិសិដ្ឋ ២ថ្ងៃ១យប់" aria-describedby="tooltip199939">ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ ដែនដី<span id="dots">...</span><span id="more">ពិសិដ្ឋ ២ថ្ងៃ១យប់</span></a>
                    </p>
                    </div>
                    <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
                      <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 106</span>
                      <p class="box-title text-lg text-overflow">
                        <a href="/products/tour/បោះតង់លើភ្នំខ្នងផ្សារ-ខ្នងស្រូវ-ទឹកធ្លាក់ថ្មជ្រាំង&ZeroWidthSpace;-៣ថ្ងៃ-២យប់&ZeroWidthSpace;" data-toggle="tooltip" data-placement="top" data-title="បោះតង់លើភ្នំខ្នងផ្សារ ខ្នងស្រូវ ទឹកធ្លាក់ថ្មជ្រាំង&ZeroWidthSpace; ៣ថ្ងៃ ២យប់" data-original-title="" title="បោះតង់លើភ្នំខ្នងផ្សារ ខ្នងស្រូវ ទឹកធ្លាក់ថ្មជ្រាំង ៣ថ្ងៃ ២យប់" aria-describedby="tooltip921926">បោះតង់លើភ្នំខ្នងផ្សារ ខ្នងស្រូវ ទឹក<span id="dots">...</span><span id="more">ថធ្លាក់្មជ្រាំង&ZeroWidthSpace; ៣ថ្ងៃ ២យប់</span></a>
                      </p>
                      </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
          <div class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0.3" style="animation-duration: 1s; animation-delay: 0.3s; visibility: visible;">
              <a title="" href="#"><img style="width: 370px; height: 160px;" alt="" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-popular-product/Xp_0Q5vJoDJKZBcst4cWLI_PdXA018oo.jpg">
              <div class="overlay">ធម្មជាតិ និង ទឹកជ្រោះ</div>
          </div>
        <div class="details">
          <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
            <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 143</span>
            <p class="box-title text-lg text-overflow">
              <a href="/products/tour/បាត់ដំបង-ប៉ៃលិន" data-toggle="tooltip" data-placement="top" data-title="បាត់ដំបង-ប៉ៃលិន" data-original-title="" title="" aria-describedby="tooltip316008">បាត់ដំបង-ប៉ៃលិន</a>
            </p>
            </div>
            <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
              <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 98</span>
              <p class="box-title text-lg text-overflow">
                <a href="/products/tour/ពោធ៍សាត់-វាលវែង" data-toggle="tooltip" data-placement="top" data-title="" data-original-title="" title="ពោធ៍សាត់-វាលវែង" aria-describedby="tooltip277903">ពោធ៍សាត់-វាលវែង</a>
              </p>
              </div>
              <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
                <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 198</span>
                <p class="box-title text-lg text-overflow">
                  <a href="/products/tour/មណ្ឌលគិរី-ទឹកជ្រោះប៊ូស្រា-រតនៈគិរី-ស្ទឹងត្រែង(សុភមិត្រ)" data-toggle="tooltip" data-placement="top" data-title="" data-original-title="" title="មណ្ឌលគិរី-ទឹកជ្រោះប៊ូស្រា-រតនៈគិរី-ស្ទឹងត្រែង(សុភមិត្រ)" aria-describedby="tooltip252076">មណ្ឌលគិរី-ទឹកជ្រោះប៊ូស្រា-រតនៈគិរី<span id="dots">...</span><span id="more">-ស្ទឹងត្រែង(សុភមិត្រ)</span></a>
                </p>
                </div>
                <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
                  <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 119</span>
                  <p class="box-title text-lg text-overflow">
                    <a href="/products/tour/មណ្ឌលគិរី-ទឹកជ្រោះប៊ូស្រា-អណ្តូងស្នេហ៍" data-toggle="tooltip" data-placement="top" data-title="" data-original-title="" title="មណ្ឌលគិរី-ទឹកជ្រោះប៊ូស្រា-អណ្តូងស្នេហ៍" aria-describedby="tooltip709755">មណ្ឌលគិរី-ទឹកជ្រោះប៊ូស្រា-អណ្តូង<span id="dots">...</span><span id="more">ស្នេហ៍</span></a>
                  </p>
                  </div>
        </div>
      </div>
          <div class="col-md-4 mb-3">
            <div class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0.3" style="animation-duration: 1s; animation-delay: 0.3s; visibility: visible;">
                <a title="" href="#"><img style="width: 370px; height: 160px;" alt="" src="https://khmertrips-resource.s3.ap-southeast-1.amazonaws.com/cms-popular-product/00SPGfSsFUQc4xjOUCwvl3SOzuG9gMTw.jpg"></a>
                <div class="overlay">កោះ​ ឆ្នេរខ្សាច់ និងផ្កាថ្ម</div>
            </div>
          <div class="details">
      <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
        <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 139</span>
        <p class="box-title text-lg text-overflow">
          <a href="/products/tour/កោះកុង-ព្រៃកោងកាង-ទឹកធ្លាក់តាតៃ-ឆ្នេរនេសាទ" data-toggle="tooltip" data-placement="top" data-title="កោះកុង-ព្រៃកោងកាង-ទឹកធ្លាក់តាតៃ-ឆ្នេរនេសាទ" data-original-title="" title="កោះកុង-ព្រៃកោងកាង-ទឹកធ្លាក់តាតៃ-ឆ្នេរនេសាទ" aria-describedby="tooltip582988">កោះកុង-ព្រៃកោងកាង-ទឹកធ្លាក់តាតៃ<span id="dots">...</span><span id="more">-ឆ្នេរនេសាទ</span></a>
        </p>
        </div>
        <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
          <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 129</span>
          <p class="box-title text-lg text-overflow">
            <a href="/products/tour/ដើរព្រៃ-បោះតង់-ភ្នំត្បែងមានជ័យ-ដែនដីពិសិដ្ឋ" data-toggle="tooltip" data-placement="top" data-title="ដើរព្រៃ បោះតង់ ភ្នំត្បែងមានជ័យ ដែនដីពិសិដ្ឋ ៣ថ្ងៃ២យប់" data-original-title="" title="កោះឋានសួគ៌" aria-describedby="tooltip451243">កោះឋានសួគ៌</a>
          </p>
          </div>
          <div class="detail tracking-product" data-name="បោះតង់មើលពពក នៅស្ទឹងពពក ស្ទឹងពង្រូល ថ្មវង្វេង ២ថ្ងៃ ១យប់" data-service="tour">
            <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 118</span>
            <p class="box-title text-lg text-overflow">
              <a href="/products/tour/ដើរព្រៃ-បោះតង់-ភ្នំត្បែងមានជ័យ-ដែនដីពិសិដ្ឋ-២ថ្ងៃ១យប់" data-toggle="tooltip" data-placement="top" data-title="" data-original-title="" title="កោះរុង-រុងសន្លឹម" aria-describedby="tooltip199939">កោះរុង-រុងសន្លឹម</a>
            </p>
            </div>
            <div class="detail tracking-product" data-name="" data-service="tour">
              <span class="price"><small class="kh-content">ចាប់ពី</small>US$ 189</span>
              <p class="box-title text-lg text-overflow">
                <a href="/products/tour/កំពត-រមណីយដ្ឋានដូងទេ-បូកគោ-កែប" data-toggle="tooltip" data-placement="top" data-title="កំពត-រមណីយដ្ឋានដូងទេ-បូកគោ-កែប" data-original-title="" title="កំពត-រមណីយដ្ឋានដូងទេ-បូកគោ-កែប" aria-describedby="tooltip187737">កំពត-រមណីយដ្ឋានដូងទេ-បូកគោ-កែប</a>
              </p>
              </div>
          </div>
        </div>
    </div>
  </div> 
    <div class="photo summer" data-stellar-background-ratio="0.5">
      <div class="row">
          <div class="col-lg-3">
              <div style="padding-top: 2.6em; padding-left: 2em;">
                  <img src="https://khmertrips.com/images/shortcodes/promo-image2.png" width="270px">
              </div>
          </div>
          <div class="col-lg-6">
              <div style="padding-top: 4em;">
                  <h4 class="text-light">
                      សូមស្វាគមន៍មកកាន់គេហទំព័រដំណើរកំសាន្តលេខ ១ របស់កម្ពុជា<br><br><b>គេហទំព័រដំណើរកំសាន្តដ៏សំបូរបែប</b> <i>ដែលត្រូវបានបង្កើត!</i>
                  </h4>
              </div>
          </div>
          <div class="col-lg-3">
              <div style="padding-top: 5em;">
                  <button class="btn btn-success">កក់ជាមួយយើងឥឡូវនេះ</button>
              </div>
          </div>
      </div> 
  </div>
  <script>
    $(window).stellar({
            horizontalScrolling: false,
            verticalOffset: 40
        }); 
   </script>
   <div class="container">
     
   </div>
</body>
<!-- <div class="footer">
  <footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <h5 class="text-uppercase">គោលការណ៍ ប្រើប្រាស់</h5>
          <ul class="discover triangle hover">
            <li class="col-xs-12">
              <a href="#!">លក្ខខណ្ឌ</a>
            </li>
            <li class="col-xs-12">
              <a href="#!">ឯកជនភាព</a>
            </li>
          </ul>
          <div class="heart" style="font-family: 'Siemreap', cursive; color:rgb(90, 90, 245)">
          <p>រៀបចំជាមួយ <i class="fas fa-heart"></i>
           ដោយ<br>ក្រុមហ៊ុន យ៉ូរ៉ូ ខ្មែរ វ៉ូយ៉ាហ្ស</p>
          </div>
        </div>
  
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-sm-7 col-md-3">
          <h4>អំពីក្រុមហ៊ុន</h4>
  
          <ul class="discover triangle hover">
            <li>
              <a href="#!">អំពីយើង</a>
            </li>
            <li>
              <a href="#!">អំពីក្រុមហ៊ុនរបស់យើង</a>
            </li>
          </ul>
          <h6>សេវាកម្ម របស់ខ្មែរទ្រីប</h6>
  
          <ul class="discover triangle hover">
            <li>
              <a href="#!">សេវាកម្មបែបផ្សងព្រេង</a>
            </li>
            <li>
              <a href="#!">សេវាកម្មដំនើរកម្សាន្តប្រចាំឆ្នាំ</a>
            </li>
            <li>
              <a href="#!">សេវាកម្មកិច្ចប្រជុំនិងព្រិត្តិការណ៍</a>
            </li>
          </ul>
  
        </div>
        <div class="col-sm-6 col-md-3">
  
          <address class="contact-detail">
  
            <hr class="bord-no">
  
            <a href="tel::+855 69 955 545" class="act-phone">+855 69 955 545</a><br>
            <a href="mailto::service@khmertrips.com" class="skin-color">service@khmertrips.com</a>
          </address>
          <p style="font-family: 'Siemreap';">តាម&ZeroWidthSpace;ពួក&ZeroWidthSpace;យើង: </p>
          
            <a href="https://web.facebook.com/khmertrip" class="social-box facebook" target="_blank" data-toggle="tooltip" data-placement="top" title="facebook">
            <img src="icons8-facebook.svg" class="socail">
            </a>
    
            
              <a class="social-box youtube" href="https://www.youtube.com/user/KhmertripsChannel" target="_blank" data-toggle="tooltip" data-placement="top" title="youtube">
            <img src="icons8-youtube.svg" class="socail">
            </a>
    
            <a class="social-box telegram" href="https://t.me/khmertrips" target="_blank" data-toggle="tooltip" title="" data-original-title="telegram">
            <img src="icons8-telegram-app.svg" class="socail">
            </a>
    
            <a class="social-box instagram" href="https://www.instagram.com/khmertrips" target="_blank" data-toggle="tooltip" title="" data-original-title="instagram">
            <img src="icons8-instagram.svg" class="socail">
            </a>
  
            <hr class="bord-no new-section-xs">
          <p style="font-family: 'Siemreap';">យើង&ZeroWidthSpace;ទទួលយក: </p>
          <img src="https://khmertrips.com/img/a-3-card.png" style="height: 24px;" alt="">
        </div>
  
      </div>
  
    </div>
        <div class="footer-copyright py-3">រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ ©2021 ដោយក្រុមហ៊ុន យ៉ូរ៉ូ ខ្មែរ វ៉ូយ៉ាហ្ស
        </div>
    
      </div>
        <button
              type="button"
              class="btn btn-danger btn-floating btn-lg"
              id="btn-back-to-top"
              >
        <i class="fas fa-arrow-up"></i>
      </button>
  </footer>
  <script>
        let mybutton = document.getElementById("btn-back-to-top");
        window.onscroll = function () {
          scrollFunction();
        };
  
        function scrollFunction() {
          if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
          ) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
     
        mybutton.addEventListener("click", backToTop);
  
        function backToTop() {
          document.body.scrollTop = 10;
          document.documentElement.scrollTop = 10;
        }
  </script>
</div>  -->
</html>