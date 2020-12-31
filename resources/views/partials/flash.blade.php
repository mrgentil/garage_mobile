@if (flash()->message)
    <div class="basic-alert-box">
        <div class="{{ flash()->class }} basic-alert__close_btn"><span class="ti-close"></span></div>
        <div class="basic-alert__inner">
            <p> <i class="basic-alert__icon flaticon-tick"></i>  {{ flash()->message }}</p>
        </div>
    </div>
@endif
