<?php
require_once(__DIR__ . '/../../../core/configs.php');
$conn = SQL();
$sql = "SELECT `users`.`username`, `users`.`id`, `users`.`tongnap` FROM `users` ORDER BY `users`.`tongnap` DESC LIMIT 5;";
$top_nap = $conn->query($sql);
?>
<div class="d-flex justify-content-center">
   <div class="col-md-8 mt-3">
		 <style>
		 .txt-trans {
				 font-size:16px;
				 font-weight:bold;
				 -webkit-animation: my 700ms infinite;
				 -moz-animation: my 700ms infinite; 
				 -o-animation: my 700ms infinite; 
				 animation: my 700ms infinite;
		}
		</style>
		
		<div class="mt-4">
		<div class="bg-content">
   <div class="title">
      <h4>Xếp Hạng Top Nạp</h4>
   </div>
   <br>
   <div class="mt-2">
      <div class="table-responsive mb-4" style="background: rgb(4, 58, 52); border-radius: 1rem;">
         <table class="table text-white fw-semibold mb-0" role="table">
            <tbody>
               <thead>
                  <tr class="text-start fw-bold text-uppercase gs-0">
                     <th colspan="1" role="columnheader" class="" style="cursor: pointer;">Tên</th>
                     <th colspan="1" role="columnheader" class="" style="cursor: pointer;">Tổng nạp</th>
                  </tr>
               </thead>

            <?php while ($mem = $top_nap->fetch_assoc()) { ?>
               <tr role="row">
                     <td role="cell" class="">
                        <?php echo $mem['username'] ?>
                     </td>
                     <td role="cell" class="">
                        <?php echo $mem['tongnap'] ?>
                     </td>
                  </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</div>
</div>
 <small class="fw-semibold">
			Top 1 : <p>- Set Hắc Ám 3 Max Chỉ Số [Tự chọn nhân vật]
<p>- 100.000 lượng
<p>- 3 chiết nước hoa 10ml
<p>- 3 viên ngọc 10 [tự chọn]
<p>- Cải trang tuỳ chọn (7% chỉ số)
		  </small>
		  <br/>
		   <small class="fw-semibold">
			Top 2 : <p>- Set Kim Cương 3 Max Chỉ Số [Tự chọn nhân vật]
<p>- 50.000 lượng
<p>- 2 chiết nước hoa 10ml
<p>- 3 viên ngọc 9 [tự chọn]
<p>- Cải trang tuỳ chọn (7% chỉ số)
		  </small>
		  <br/>
		   <small class="fw-semibold">
			Top 3 : <p>- Set Kim Cương 3 Random [Tự chọn nhân vật]
<p>- 30.000 lượng
<p>- 1 chiết nước hoa 10ml
<p>- 5 viên ngọc 8 [tự chọn]
<p>- Cải trang tuỳ chọn (7% chỉ số)
		  </small>
		  <br/>
		   <small class="fw-semibold">
			Top 4-10 : <p>- 3 Rèn Kim Cương [tự chọn]
<p>- 10.000 lượng
<p>- 5 viên ngọc 7 [tự chọn]
<p>- Cải trang tuỳ chọn (7% chỉ số)
		  </small>
		  <br/>
		   <small class="fw-semibold">
			Từ ngày 30/10/2024 đến hết 00:00 ngày 20/11/2024 
		  </small>
		  <br/>
		  
		  
		  <div class="fw-semibold txt-trans">
		  
			<span class="flashing-text-green">LƯU Ý KHI THANH TOÁN ATM:</span>
		  </div>
		  <small class="fw-semibold">
			Nạp ATM hoàn toàn tự động lên có thể Pcoin cộng trong vòng 1-10p
		  </small>
		  <div class="fw-semibold txt-trans">LƯU Ý 2 :</div>
		  <small class="fw-semibold">
			Nội dung nạp chỉ có tên tài khoản ko ghi cái gì khác
		  </small>
		  <small class="fw-semibold">
			Nếu ghi thiếu, sai hoặc quá 10 phút không thấy cộng tiền, các bạn hãy liên hệ với
			<a target="_blank" href="" rel="">ADMIN</a> để được hỗ trợ
		  </small>
		</div>
 <div class="fs-5 fw-semibold text-center">Chọn mốc nạp</div>
      <div>
         <div id="list_amt" class="row text-center justify-content-center row-cols-2 row-cols-lg-3 g-2 g-lg-2 my-1 mb-2">
            <?php
               foreach($list_recharge_price_atm as $item) {
                  if($item['bonus'] > 0) {
                     echo '<div>
                     <div class="col">
                        <div class="w-100 fw-semibold cursor-pointer">
                           <div class="recharge-method-item position-relative false" style="height: 90px; color:black;">
                              <div>'.number_format($item['amount']).' đ</div>
                              <div class="center-text text-danger"><span>Nhận</span></div>
                              <div class="text-primary">'.number_format($item['amount'] + ($item['amount'] * $item['bonus'] / 100)).' P </div>
                              <span class="text-white position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="z-index: 1;">+'.$item['bonus'].'%</span>
                           </div>
                        </div>
                     </div>
                  </div>';
                  } else {
                     echo '<div>
                     <div class="col">
                        <div class="w-100 fw-semibold cursor-pointer">
                           <div class="recharge-method-item position-relative false" style="height: 90px;">
                              <div>'.number_format($item['amount']).' đ</div>
                              <div class="center-text text-danger"><span>Nhận</span></div>
                              <div class="text-primary">'.number_format($item['amount']).' P </div>
                           </div>
                        </div>
                     </div>
                  </div>';
                  }
               }
            ?>
         </div>
         <div id="momo_info"></div>
         <div class="text-center mt-3 momo-btn">
            <button type="button" id="payment_momo" class="w-50 rounded-3 btn btn-primary btn-sm btn-success">Thanh toán</button>
            <button type="button" id="confirm_payment_momo" class="w-50 rounded-3 btn btn-primary btn-sm hide btn-success">Xác nhận (<span id="count"></span>)</button>
            <div class="mt-2"><small class="fw-semibold"><a href="/user/transactions">Lịch sử giao dịch</a></small></div>
         </div>
      </div>
   </div>
</div>
</div>

<script>
   (function () {
  'use strict'
      var selected = -1;
      $("#list_amt div.recharge-method-item").each(function() {
         var item = this;
         item.addEventListener("click", function() {
            event.preventDefault();
            console.log($("#list_amt div.recharge-method-item").index(this))
            selected = $("#list_amt div.recharge-method-item").index(this)
            $("#list_amt div.recharge-method-item").removeClass("active")
            $("#list_amt div.recharge-method-item").addClass("false")
            $(this).removeClass("false")
            $(this).addClass("active")
         })
      })
      var btnPaymentMomo = $("button#payment_momo");
      var btnConfirmPaymentMomo = $("button#confirm_payment_momo");
      var spanCountdown = $("button#confirm_payment_momo span#count");
      var infoPaymentMomo = $("div#momo_info");
      var counter = 60;
      btnPaymentMomo.click(() => {
         $("#NotiflixLoadingWrap").removeClass('hide');
         var err = $("div.momo-btn div#error").first()
         if(err) err.remove()
         $.ajax({
            url: "/apixuli/getAtmPay",
            type: "POST",
            dataType: "json",
            data: JSON.stringify({
               pcoin: selected
            }),
            success: function (data) {
               $("#NotiflixLoadingWrap").addClass('hide');
               if(data.code == "00"){
                  let atm_img = data.qr_atm;
                  let tien_img = data.gia_pay;
                  let namebank = data.name_pay;
                  let stkbank = data.stk_pay;
                  let nhbank = data.nh_pay;
                  infoPaymentMomo.append(`
                     <div class="text-center fw-semibold fs-5" id="generate_info">Quét Mã Thanh Toán</div>
                     <div class="text-center mt-2"><img style="height: 250px;" src="${atm_img}" alt="Mã thanh toán"></div>
                     <div class="text-center mt-2"><div class="center-text fs-6 fw-semibold">Nội Dung Chuyển Khoản</div></div>
                     <div class="table-responsive mb-4" style="background: rgb(4, 58, 52); border-radius: 1rem;">
                        <table class="table text-white fw-semibold mb-0" role="table">
                              <tbody class="fw-semibold" role="rowgroup">
                                 <tr role="row">
                                    <td role="cell" class="">
                                          <div class="cursor-pointer">
                                             <span class="ms-2 fw-semibold">Ngân Hàng</span>
                                          </div>
                                    </td>
                                    <td role="cell" class="">
                                          <div>${nhbank}</div>
                                    </td>
                                 </tr>
                                 <tr role="row">
                                    <td role="cell" class="">
                                          <div class="cursor-pointer">
                                             <span class="ms-2 fw-semibold">Tài Khoản</span>
                                          </div>
                                    </td>
                                    <td role="cell" class="">
                                          <div>${namebank}</div>
                                    </td>
                                 </tr>
                                 <tr role="row">
                                    <td role="cell" class="">
                                          <div class="cursor-pointer">
                                             <span class="ms-2 fw-semibold">Số Tài Khoản</span>
                                          </div>
                                    </td>
                                    <td role="cell" class="">
                                          <div>${stkbank}</div>
                                    </td>
                                 </tr>
                                 <tr role="row">
                                    <td role="cell" class="">
                                          <div class="cursor-pointer">
                                             <span class="ms-2 fw-semibold">Số Tiền</span>
                                          </div>
                                    </td>
                                    <td role="cell" class="">
                                          <div>${tien_img}</div>
                                    </td>
                                 </tr>
                                 <tr role="row">
                                    <td role="cell" class="">
                                          <div class="cursor-pointer">
                                             <span class="ms-2 fw-semibold">Nội Dung</span>
                                          </div>
                                    </td>
                                    <td role="cell" class="">
                                          <div>nt ${"<?php echo isset($user['username']) ? $user['username'] : 'Trống'; ?>"}</div>
                                    </td>
                                 </tr>
                              </tbody>
                        </table>
                     </div>
                  `);

                  btnPaymentMomo.addClass("hide");
                  btnConfirmPaymentMomo.removeClass("hide");
                  counter = 120;
                  setInterval(function() {
                     counter--;
                     if (counter >= 0) {
                        spanCountdown.html(counter);
                     }
                     if (counter === 0) {
                        $("div#momo_info").empty();
                        btnPaymentMomo.removeClass("hide");
                        btnConfirmPaymentMomo.addClass("hide");
                        clearInterval(counter);
                     }
                  }, 1000);
               } else {
                  let alertNoti =
                     `<div class="alert alert-danger" id="error">` +
                     data.text +
                     `</div>`;
                  $("div.momo-btn").prepend(alertNoti);
               }
            },
            error: function (xhr, textStatus, errorThrown) {
               $("#NotiflixLoadingWrap").addClass('hide');
            },
         });
      });

      btnConfirmPaymentMomo.click(() => {
         $("#NotiflixLoadingWrap").removeClass('hide');
         $.ajax({
            url: "/apixuli/atm",
            type: "POST",
            dataType: "json",
            data: JSON.stringify({
               pcoin: selected
            }),
            success: function (data) {
               $("div#momo_info").empty();
               btnPaymentMomo.removeClass("hide");
               btnConfirmPaymentMomo.addClass("hide");
               clearInterval(counter);
               $("#NotiflixLoadingWrap").addClass('hide');
            },
            error: function (xhr, textStatus, errorThrown) {
               $("div#momo_info").empty();
               btnPaymentMomo.removeClass("hide");
               btnConfirmPaymentMomo.addClass("hide");
             $("#NotiflixLoadingWrap").addClass('hide');
            },
         });
      })
   })()
</script>
