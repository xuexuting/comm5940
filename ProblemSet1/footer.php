<div class="return-top" id="return_top">▲</div>
    <script>

        var return_top = document.getElementById("return_top");
        var sTop;
        window.onscroll = function(){
            //sTop :滚动条距离顶部的距离数值
            sTop = document.body.scrollTop||document.documentElement.scrollTop;
            if(sTop>300){
                return_top.className = "return-top active";
            }else{
                return_top.className = "return-top";
            }
        }

        return_top.onclick = function(){
            var termId = setInterval(function(){
                sTop-=50;
                if(sTop<=0){

                    clearInterval(termId);
                }
                window.scrollTo(0,sTop);

            },1);
        }
    </script>

<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="800ms" data-wow-delay="500ms">
      <div class="row">
          <div class="widget">
            <h3 style="text-align: center;color:#6D8188">网站介绍和申明</h3>
            <p style="text-align: center;color:#6D8188">非常感谢您光临我的网站，这是我的个人作业~本网站意在为想要购买植物的小伙伴提供一些帮助，包括常见植物的介绍和栽培方法<a href="http://dev-xuexuting.pantheonsite.io/gallery/" style="color:#b094b3">（“常见品种”）</a>，以及一些简单的<a href="http://dev-xuexuting.pantheonsite.io/page_howtoput/" style="color:#b094b3">布置技巧</a>。<br>
               所有的数据都是由我自己整理的，或许有错误之处，欢迎指出。
        想看一些特别的植物小专题，例如多肉植物、最稀有的植物、最形象的植物，可以点击<a href="http://dev-xuexuting.pantheonsite.io/page_blog/" style="color:#b094b3">“特别专题”</a>。<br>
                网站还在不断编写中，植物的种类也会渐渐扩充，再次感谢大家的支持。
            </ul>
          </div>
        </div>
    </div>
  </section>

  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fab fa-weixin"></i></a></li>
              <li><a href="#"><i class="fab fa-weibo"></i></a></li>
              <li><a href="#"><i class="fas fa-envelope-open"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->


<footer id="footer" class="midnight-blue" >
    <div class="container">
      <div class="row">
        <div class="col-sm-6" style="color:white">
          &copy; Gp Theme. All Rights Reserved.
          <div class="credits">

            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <?php wp_footer();?>
  <!--/#footer-->

</body>

</html>
