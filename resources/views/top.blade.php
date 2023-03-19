  @extends('layouts.master')
  
  @section('content')
  <main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      
        <div class="carousel-item active">
        <img class="first-slide mx-auto" src="/images/remind21.jpg"  alt="First slide" >
        <div class="container">
          <div class="carousel-caption">
            <h1>Remind</h1>
            <p>
                原稿の締め切り、友人との約束、今日の買い出し。<br>
                無数にも及ぶ用事をこなしていく上で物忘れは必ず起こります。<br>
                そんな忙しいあなたの為の機能です。
            </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Remindへ</a></p>
          </div>
        </div>
      </div>
      
        <div class="carousel-item">
        <img class="second-slide mx-auto" src="/images/Task21.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Task</h1>
            <p>
                目まぐるしい業務において、作業の進捗状況を確認することはとても大切です。<br>
                この機能では、大きな仕事を細分化して管理し、<br>
                期日と進捗状況を視覚化してくれるものです。
            </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Taskへ</a></p>
          </div>
        </div>
      </div>
      
        <div class="carousel-item">
        <img class="third-slide mx-auto" src="/images/calendar21.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption ">
            <h1>Calendar</h1>
            <p>
                「今月の予定は何かあったかな・・・」<br>
                月単位でRemindやTaskの締め切りを確認できるカレンダーはいかがでしょうか。<br>
                きっと簡易的にスケジュールを確認できるでしょう。
            </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Calendarへ</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <div></div>
  
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    </main>
  @endsection