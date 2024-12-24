<style>
    .modal-backdrop {
        z-index: unset;
    }
</style>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success ftr_btn_siz" data-bs-toggle="modal" data-bs-target="#brochureModal">
    <i aria-hidden="true" class="fas fa-file-pdf"></i> Bakers Technology Brochure
</button>

<!-- Modal -->
<form action="{{ route('brochure') }}" method="POST" class="form">@csrf
    <div class="modal fade" id="brochureModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="brochureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="brochureModalLabel">Brochure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4"><label class="text-dark mt-3">Name </label> <span class="text-danger">*</span>
                        </div>
                        <div class="col-7">
                            <input type="text" name="name" class="form-control " required>
                             
                        </div>

                        <div class="col-4"><label class="text-dark mt-3">Mobile </label> </label> <span
                                class="text-danger">*</span></div>
                        <div class="col-7"><input type="text" name="mobile" class="form-control" required></div>

                        <div class="col-4"><label class="text-dark mt-3">E-Mail </label> </label> <span
                                class="text-danger">*</span></div>
                        <div class="col-7"><input type="email" name="email" class="form-control" required></div>
                        
                         <div class="col-12">
                          <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                          <div class="captcha-error text-danger text-start "> </div>
                         </div>
                    </div>
                     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
