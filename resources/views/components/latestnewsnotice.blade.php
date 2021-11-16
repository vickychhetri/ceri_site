<div class = "container-fluid"  style="background-color:#093552;box-shadow: 5px 10px 51c4d3;border:2px solid black;">
                <center> <h2 style=" font-family: Montserrat;font-weight: bold;color:white;" class="newsTitle"> Latest News </h2> </center>
              <hr style="background-color:white;"/>
                <marquee  onmouseover="this.stop();" onmouseout="this.start();"
                 direction = "up" scrollamount = "3"  loop="" 
                style="height: 217px;padding:16px;">
                <?php $i=1; ?>
                @foreach ($dataf as $news)

                 <a href="/News/{{$news->Pagename}}" class="hyperlinkcolor"> {{$i++}}.)   {{$news->Title}}  </a>
                 <?php
$date1 = new DateTime($news->EventDate);
$dateNow=new DateTime(date("Y-m-d"));
$f=$date1->format('Y-m-d');
$f2=$dateNow->format('Y-m-d');
if($f >= $f2){
  echo "<img src='/img/blinking.gif' style='height:70px;'/>";
} 
          ?>
                  <br/>
                
                <hr style="background-color:#d7f5eb;"/>

                 @endforeach
                </marquee>
                
              <center> <a href="/Research-Activities" target="_blank"  style="color:white;" class="btn btn-outline-primary"> Click here for More.. </a>  </center>
                </div>
