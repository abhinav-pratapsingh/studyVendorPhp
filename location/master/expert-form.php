<div class="modal fade" id="university-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" style="border: none; background: transparent">
         <div class="university-form-con">
            <div class="university-form-con-close" data-bs-dismiss="modal" aria-label="Close">
               <i class="ph-bold ph-x"></i>
            </div>
            <div class="d-md-block d-none pe-1">
               <img src="../img/location/form-img.jpg" class="img-fluid w-100 h-100" style="object-fit: cover" alt="" />
            </div>
            <div>
               <form action="">
                  <h3 class="pb-4"><span class="down down-z">Study</span> in <span class="change_text">Abroad</span></h3>

                  <div class="form-input-con">I am <input type="text" required placeholder="Name" required /> and</div>
                  <div class="form-input-con">my Phone no <input type="tel" pattern="[6789][0-9]{9}" size="10" maxlength="10" required placeholder="Phone no." /></div>
                  <div class="form-input-con">and Emal is <input type="email" required placeholder="Email" required /></div>
                  <div class="form-input-con">
                     and I'm interested for
                     <select name="" id="" required>
                        <option value="UG">UG Course</option>
                        <option value="PG">PG Course</option>
                        <option value="Foundation">Foundation Course</option>
                        <option value="Certificate">Certificate Course</option>
                     </select>
                     and
                  </div>
                  <div class="form-input-con mt-3">i'm want to stydy in <span class="change_text">USA</span></div>

                  <button class="btn-one">Submit <i class="ph ph-arrow-up-right"></i></button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
   function expertForm() {
      const newText = $(".ref_name_one").text();
      $(".change_text").text(newText);
   }
</script>
