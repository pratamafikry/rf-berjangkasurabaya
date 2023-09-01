@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{ trans('tutorial') }}</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <h4>1. Instalasi dan Login</h4>
              <video width="240" height="440" controls>
                <source src="/assets-index/video/I-A_INSTALL-LOG-IN.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
            <div class="col">
              <h4>2. Open Position</h4>
              <video width="240" height="440" controls>
                <source src="/assets-index/video/II-B_OPEN-POSITION.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
            <div class="col">
              <h4>3. New Limit Order</h4>
              <video width="240" height="440" controls>
                <source src="/assets-index/video/II-B-1_NEW-LIMIT-ORDER.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
            </div>
            <div class="row">
              <div class="col">
                <h4>4. new OCO Order</h4>
                <video width="240" height="440" controls>
                  <source src="/assets-index/video/II-B-2_NEW-OCO-ORDER.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="col">
                <h4>5. Temporary Statement</h4>
                <video width="240" height="440" controls>
                  <source src="/assets-index/video/IV-D-1_TEMPORARY-STATEMENT.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="col">
                <h4>6. Daily Statement</h4>
                <video width="240" height="440" controls>
                  <source src="/assets-index/video/IV-D-3_DAILY-STATEMENT.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              </div>
              <div class="row">
                <div class="col">
                  <h4>7. Trade History</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/IV-D-2_TRADE-HISTORY.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col">
                  <h4>8. Liquid Position</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/III-C_LIQUID-POSITION.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col">
                  <h4>9. Liquid Limit</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/III-C-1_LIQUID-LIMIT.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h4>10. Liquid OCO</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/III-C-2_LIQUID-OCO.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col">
                  <h4>11. Contra</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/III-C-3_CONTRA.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col">
                  <h4>12. News</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/IV-D-4_NEWS.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h4>13. Account</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/IV-D-5_ACCOUNT.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col">
                  <h4>14. Ganti Password</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/V-E_GANTI-PASSWORD.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col">
                  <h4>15. Cancel Order</h4>
                  <video width="240" height="440" controls>
                    <source src="/assets-index/video/VI-F_CANCEL-ORDER.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="/assets-index/images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
  <img src="/assets-index/images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
  <img src="/assets-index/images/background-shape/green-half-cycle.png" alt="background-shape" class="about-bg-3 up-down-animation">
  <img src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
  <img src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape" class="about-bg-5 up-down-animation">
  <img src="/assets-index/images/background-shape/service-half-cycle.png" alt="background-shape" class="about-bg-6 left-right-animation">
</section>
<!-- /about us -->
@endsection